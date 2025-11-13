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

    public function addUser($data){
        $stmt = $this->pdo->prepare("INSERT INTO users(id,Name,lastname) VALUES(:id, :Name, :lastname)");
        $stmt->execute([
            'id' => $data['id'],
            'Name' => $data['Name'],
            'lastname' => $data['lastname']
        ]);
    }

    public function updateUser($data){
        $stmt = $this->pdo->prepare("UPDATE users SET Name=:Name, lastname=:lastname WHERE id=:id");

        $stmt->execute([
            'id' => $data['id'],
            'Name' => $data['Name'],
            'lastname' => $data['lastname']
        ]);
    }

    public function deleteeUser($id){
        $stmt = $this->pdo->prepare("DELETE FROM users WHERE id=:id");

        $stmt->execute([
            'id' => $id
        ]);
    }
}

?>