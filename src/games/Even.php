<?php

namespace Php\Project\Even;

use function Php\Project\Cli\isEven;
use function Php\Project\Engine\engine;

const DESCRIPTION = 'Answer "yes" if number even otherwise answer "no".';

function run()
{
    $getGameData = function () {
        $question = rand(1, 20);
        $answer = isEven($question) ? "yes" : "no";

        return array(
            "question" => (string) $question,
            "rightAnswer" => (string) $answer
        );
    };

    engine(DESCRIPTION, $getGameData);
}
