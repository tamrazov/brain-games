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
