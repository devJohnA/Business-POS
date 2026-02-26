<?php 
include_once "../Model/User.php";

class UserController {
    private $model;

    public function __construct($pdo) {
        $this->model = new User($pdo);
    }

    public function login($email, $password) {
        return $this->model->login($email, $password);
    }
}



?>