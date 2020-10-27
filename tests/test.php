<?php

require_once __DIR__ . '/../vendor/autoload.php';

use BraviBalancedBracketVerifier\BalancedBracketsVerifier;

echo BalancedBracketsVerifier::verify("a{a[a(a)a]a}a");
