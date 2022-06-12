<?php

namespace App\models;

use App\services\Connection;

class Tests
{
    protected static function pdo($config = CONFIG_CONNECTION): \PDO
    {
        return Connection::make($config);
    }

    public static function creatingTestName($section)
    {
        $stmt = self::pdo()->prepare("INSERT INTO tests(section_id) VALUES :section_id");
        $stmt->execute(["section_id" => $section]);
    }

    public static function creatingAnswers($question_id, $text)
    {
        $stmt = self::pdo()->prepare("INSERT INTO answer_vartiants(question_id, text) VALUES :question_id, :text");
        $stmt->execute(["question_id" => $question_id, "text" => $text]);
    }

    public static function creatingQuestion($questions_array)
    {
        foreach ($questions_array as $question) {
            $stmt = self::pdo()->prepare("INSERT INTO questions(test_id, text, answer, score) VALUES :test_id, :text, :answer, :score");
            $stmt->execute([
                "test_id" => $question->test_id,
                "text" => $question->text,
                "answer" => $question->answer,
                "score" => $question->score
            ]);
        }

    }
}