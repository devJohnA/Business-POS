<?php
session_start();
header("Content-Type: application/json");

require_once "../db/database.php";
include_once "../Controller/UserController.php";

$controller = new UserController($pdo);

if(!isset($_POST['email']) || !isset($_POST['password'])) {
    echo json_encode(['status' => 'error', 'message' => 'Email and password are required.']);
    exit;
}

$email = $_POST['email'];
$password = $_POST['password'];

$user = $controller->loginUser($email, $password);

if ($user) {
    echo json_encode(["status" => "success", 
    "message" => "Login successful",
    "user" => $user
    ]);
} else {
    echo json_encode(['status' => "error", 'message' => 'Invalid email or password.']);
}


