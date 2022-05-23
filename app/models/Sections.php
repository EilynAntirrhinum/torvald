<?php

namespace App\models;

use App\services\Connection;

class Sections
{
    protected static function pdo($config = CONFIG_CONNECTION): \PDO
    {
        return Connection::make($config);
    }

    public static function creatingSection($name)
    {
        $stmt = self::pdo()->prepare("INSERT INTO sections(name) VALUES :name");
        $stmt->execute(["name" => $name]);
    }

    public static function getSections()
    {
        $stmt = self::pdo()->query("SELECT name FROM sections");
        return $stmt->fetchAll();
    }

    public static function getSection_USER()
    {
        $stmt = self::pdo()->query("SELECT name FROM section ORDER BY id ASC LIMIT 4");
        return $stmt->fetchAll();
    }
}