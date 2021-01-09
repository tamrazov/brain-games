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

function calc(int $num1, int $num2, string $symbol)
{
    $result = 0;
    switch ($symbol) {
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

function gcd(int $num1, int $num2): int
{
    $gcd = 0;
    if ($num1 > $num2) {
        $temp = $num1;
        $num1 = $num2;
        $num2 = $temp;
    }

    for ($i = 1; $i < ($num1 + 1); $i++) {
        if ($num1 % $i == 0 && $num2 % $i == 0) {
            $gcd = $i;
        }
    }

    return $gcd;
}

function generateProgression(int $a, int $d, int $n): array
{
    $progression = [];
    $result = $a;
    for ($i = 0; $i < $n; $i++) {
        $result = $result + $d;
        $progression[] = $result;
    }

    return $progression;
}

function isPrime(int $num): int
{
    if ($num == 1) {
        return 0;
    }

    for ($i = 2; $i <= $num / 2; $i++) {
        if ($num % $i == 0) {
            return 0;
        }
    }

    return 1;
}
