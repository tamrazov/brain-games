<?php

namespace Php\Project\Prime;

use function Php\Project\Cli\isPrime;
use function Php\Project\Engine\engine;

const DESCRIPTION = '"yes" if given number is prime. Otherwise answer "no".';

function run()
{
    $getGameData = function (): array {
        $number = rand(1, 100);
        $answer = isPrime($number) ? 'yes' : 'no';
        $question = $number;

        return array(
            "question" => (string) $question,
            "rightAnswer" => (string) $answer
        );
    };

    engine(DESCRIPTION, $getGameData);
}
