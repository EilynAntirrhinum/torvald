<?php

namespace App\models;

use App\services\Connection;

class User
{
    protected static function pdo($config = CONFIG_CONNECTION): \PDO
    {
        return Connection::make($config);
    }

    public static function authentication($login, $password): bool
    {
        $stmt = self::pdo()->prepare("SELECT login, password FROM admin WHERE login = :login and password = :password");
        $stmt->execute(["login" => $login, "password" => $password]);
        $admin = $stmt->fetch();

        if (!empty($admin)) {
            return true;
        }
        return false;
    }
}