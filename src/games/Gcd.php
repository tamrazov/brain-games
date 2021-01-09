<?php

namespace Php\Project\Gcd;

use function Php\Project\Engine\engine;
use function Php\Project\Cli\gcd;

const DESCRIPTION = 'Find the greatest common divisor of given numbers.';

function run(): mixed
{
    $getGameData = function (): array {
        $num1 = rand(1, 20);
        $num2 = rand(1, 20);
        $question = "{$num1} {$num2}";
        $answer = gcd($num1, $num2);

        return array(
            "question" => $question,
            "rightAnswer" => (string) $answer
        );
    };

    return engine(DESCRIPTION, $getGameData);
}
