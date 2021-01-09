<?php

namespace Php\Project\Gcd;

use function Php\Project\Engine\engine;
use function Php\Project\Cli\gcd;

const DESCRIPTION = 'Find the greatest common divisor of given numbers.';

function run()
{
    $getGameData = function () {
        $num1 = rand(1, 20);
        $num2 = rand(1, 20);
        $question = "{$num1} {$num2}";
        $answer = gcd($num1, $num2);

        return array(
            "question" => (string) $question,
            "rightAnswer" => (string) $answer
        );
    };
    
    engine(DESCRIPTION, $getGameData);
}
