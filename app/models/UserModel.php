<?php

require_once 'Connection.php';

class UserModel {
    private $pdo;

    public function __construct(){
        $this ->pdo = Connection::conectar();
    }

    public function getAllUsers(){
        $stmt = $this->pdo->query("SELECT * FROM users");
        return $stmt->fetchAll();
    }
}

?>