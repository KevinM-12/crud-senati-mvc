<?php

$env = parse_ini_file(__DIR__ . "/../../.env");

$host=$env["DB_HOST"];
$port=$env["DB_PORT"];
$db_name=$env["DB_NAME"];
$user=$env["DB_USER"];
$pass=$env["DB_PASS"];

class Connection {
    private static $pdo;
    

    public static function conectar(){
        global $host, $port, $db_name, $user, $pass;

        $dsn="mysql:host=$host;port=$port;dbname=$db_name";

        self::$pdo = new PDO($dsn, $user, $pass);

        return self::$pdo;
    }
}

?>