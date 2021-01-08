<?php

namespace Php\Project\Cli;

use function cli\line;
use function cli\prompt;

function hello()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
}

function isEven(int $number): bool
{
    if ($number % 2 == 0) {
      return true;
    }

    return false;
}

function calc($num1 , $num2, $symbol)
{
    $result;
    switch($symbol)
    {
        case "+":
            $result = $num1 + $num2;
            break;
        case "-":
            $result = $num1 - $num2;
            break;
        case '*':
            $result = $num1 * $num2;
            break;
    }

    return $result;
}

function gcd($num1, $num2)
{
    $gcd;
    if ($num1 > $num2) {
        $temp = $num1;
        $num1 = $num2;
        $num2 = $temp;
    }

    for($i = 1; $i < ($num1+1); $i++) {
        if ($num1 % $i == 0 && $num2 % $i == 0) {
            $gcd = $i;
        }
    }

    return $gcd;
}
