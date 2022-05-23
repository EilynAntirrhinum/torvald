<?php

namespace App\models;

use App\services\Connection;

class themes
{
    protected static function pdo($config = CONFIG_CONNECTION): \PDO
    {
        return Connection::make($config);
    }

    public static function creatingTheme($section, $name, $text, $practice_link, $practice_name)
    {
        $stmt = self::pdo()->prepare("INSERT INTO themes(section_id, name, text, pracitce_link, practice_name) VALUES :section, :name, :text, :practice_link, :practice_name");
        $stmt->execute(["section" => $section, "name" => $name, "text" => $text, "practice_link" => $practice_link, "practice_name" => $practice_name]);
    }

    public static function getThemes($section_id)
    {
        $stmt = self::pdo()->prepare("SELECT * FROM themes WHERE section_id = :section_id");
        $stmt->execute(["section_id" => $section_id]);
    }
}