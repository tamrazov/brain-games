<?php

namespace Php\Project\Prime;

use function Php\Project\Cli\isPrime;
use function Php\Project\Engine\engine;

define('DESCRIPTION_PRIME', '"yes" if given number is prime. Otherwise answer "no".');

function run(): void
{
    $getGameData = function (): array {
        $number = rand(1, 100);
        $answer = isPrime($number) ? 'yes' : 'no';
        $question = $number;

        return array(
            "question" => (string) $question,
            "rightAnswer" => $answer
        );
    };

    engine(DESCRIPTION, $getGameData);
}
