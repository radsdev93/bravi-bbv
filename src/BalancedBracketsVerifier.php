<?php 

namespace BraviBalancedBracketVerifier;

class BalancedBracketsVerifier
{
	public function test()
	{
		return "It works!".PHP_EOL;
	}

    public function verify($string = NULL)
    {
    	if(is_null($string) || $string === "") {
    		return "A null or empty string cannot be evaluated!".PHP_EOL;
    	} elseif(!is_string($string)) {
    		return "Only strings can be evaluated!".PHP_EOL;
    	} elseif(strpos($string, "{") === false && 
    				strpos($string, "}") === false &&
    				strpos($string, "[") === false &&
    				strpos($string, "]") === false &&
    				strpos ($string, "(") === false &&
    				strpos($string, ")") === false) {
    		return "There are no brackets to be evalueated within the given string!".PHP_EOL;
    	}
    	if(substr_count($string, "{") != substr_count($string, "}"))
    		return "Too bad! There are unbalanced brackets!".PHP_EOL;
    	if(substr_count($string, "[") != substr_count($string, "]"))
    		return "Too bad! There are unbalanced brackets!".PHP_EOL;
    	if(substr_count($string, "(") != substr_count($string, ")"))
    		return "Too bad! There are unbalanced brackets!".PHP_EOL;
    	return "Yay! We got balanced brackets! \o/".PHP_EOL;
    }
}
