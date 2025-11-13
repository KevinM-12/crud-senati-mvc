<?php

require_once __DIR__ . '/../models/UserModel.php';

class UserController {
    private $model;

    public function __construct() {
            $this->model = new UserModel();
    }

    public function getAllUsers() {
        $users = $this->model->getAllUsers();

        include __DIR__ . '/../views/listado.php';
        //include __DIR__ . '/../views/agregar.php';         
    }

    public function addUser($data) {
            $user = $this->model->addUser($data);

            header('Location: ../../index.php');
        }

    public function updateUser($data) {
            $user = $this->model->updateUser($data);
            header('Location: ../../index.php');
        }

    public function deleteUser($id) {
            $users = $this->model->deleteUser($id);
            header('Location: ../../index.php');
        }
}

?>