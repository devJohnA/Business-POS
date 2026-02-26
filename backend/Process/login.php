<?php
session_start();
header("Content-Type: application/json");

require_once "../../db/database.php";
include_once "../../Controller/UserController.php";

$controller = new UserController($pd);

if(!isset($_POST['email']) || !isset($_POST['password'])) {
    echo json_encode(['success' => false, 'message' => 'Email and password are required.']);
    exit;
}

$email = $_POST['email'];
$password = $_POST['password'];

$user = $controller->login($email, $password);

if ($user) {
    echo json_encode(["status" => "success", "user" => $user]);
} else {
    echo json_encode(['status' => "error"]);
}

