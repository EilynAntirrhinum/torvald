<?php

namespace App\models;
include_once $_SERVER['DOCUMENT_ROOT'].'/bootstrap.php';
use App\services\Connection;

class Theory
{
    protected static function pdo($config = CONFIG_CONNECTION): \PDO{
        return Connection::make(CONFIG_CONNECTION);
    }
    public static function update_section($name, $id){
        $stmt = self::pdo()->prepare('UPDATE section SET name = :name WHERE id = :id');
        $stmt->execute(['name'=>$name, 'id' =>$id]);
    }
    public static function update_theme($section, $name, $text, $practice_link, $practice_name, $id)
    {
        $stmt = self::pdo()->prepare("UPDATE themes  ) SET name = :name, text= :text,  pracitce_link = :practice_link, practice_name = :practice_name WHERE id = :id");
        $stmt->execute(["id" => $id, "name" => $name, "text" => $text, "practice_link" => $practice_link, "practice_name" => $practice_name]);
    }

}