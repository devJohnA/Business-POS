<?php
session_start();
header("Content-Type: application/json");

require_once "../db/database.php";
include_once "../Controller/UserController.php";

$controller = new UserController($pdo);

$email = $_POST['email'];
$password = $_POST['password'];

$user = $controller->loginUser($email, $password);

if ($user) {
    echo json_encode(['status' => true, 
    'message' => "Login successful",
    'user' => $user
    ]);
} else {
    echo json_encode(['status' => false, 'message' => 'Invalid email or password.']);
}


