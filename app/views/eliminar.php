<?php 

    require_once __DIR__ . '/../controllers/UserController.php';

    $userController = new UserController();

    $userController->deleteUser($_GET['id']);

?>