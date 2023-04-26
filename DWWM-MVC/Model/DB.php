<?php

namespace App\Model;

use PDO;
use Throwable;

class DB
{
    private static string $server = 'localhost';
    private static string $username = 'dev';
    private static string $password = 'dev';
    private static string $database = 'live_dwwm';
    private static ?PDO $db = null;

    public static function getInstance(): ?PDO {
        if (self::$db == null){
            try {
                self::$db = new PDO("mysql:host=".self::$server.";dbname=".self::$database, self::$username, self::$password);
                self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (Throwable $e) {
                echo "Erreur de la connexion : " . $e->getMessage();
                die();
            }
        }
        return self::$db;
    }
}
