<?php

namespace Php\Project\Calc;

use function Php\Project\Cli\calc;
use function Php\Project\Engine\engine;

const DESCRIPTION = 'What is the result of the expression?';

function run(): void
{
    $getGameData = function (): array {
        $num1 = rand(1, 10);
        $num2 = rand(1, 10);
        $arrSymbols = ["+", "-", "*"];
        $randomKey = (int) array_rand($arrSymbols, 1);
        $randomSymbol = $arrSymbols[$randomKey];
        $question = "{$num1} {$randomSymbol} {$num2}";
        $answer = calc($num1, $num2, $randomSymbol);

        return array(
            "question" => $question,
            "rightAnswer" => (string) $answer
        );
    };

    engine(DESCRIPTION, $getGameData);
}
