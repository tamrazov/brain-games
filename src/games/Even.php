<?php

namespace Php\Project\Even;

use function Php\Project\Cli\isEven;
use function Php\Project\Engine\engine;

define('DESCRIPTION_EVEN', 'Answer "yes" if number even otherwise answer "no".');

function run(): void
{
    $getGameData = function (): array {
        $question = rand(1, 20);
        $answer = isEven($question) ? "yes" : "no";

        return array(
            "question" => (string) $question,
            "rightAnswer" => $answer
        );
    };

    engine(DESCRIPTION_EVEN, $getGameData);
}
