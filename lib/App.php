<?php

namespace Minicli;

use BraviBalancedBracketVerifier\BalancedBracketsVerifier;

class App
{
    public function runCommand()
    {
    	echo("Welcome to Bravi's Balanced Brackets Verifier!".PHP_EOL);
    	echo("Please type your string for evaluation (anything you type will be treated as a literal string), and hit Enter to confirm:".PHP_EOL);
    	$handle = fopen ("php://stdin","r");
		$line = fgets($handle);
    	fclose($handle);
    	echo(BalancedBracketsVerifier::verify(trim($line)));
    }
}