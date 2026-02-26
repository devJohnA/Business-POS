<?php
require_once "../../db/database.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"] ?? "";
    $password = $_POST["password"] ?? "";

    try {
        if ($email === "johnanthon@gmail.com" && $password === "admin123") {
            echo json_encode(["success" => true, "message" => "Welcome, John Anthon!"]);
        } else if ($email != "johnanthon@gmail.com") {
            echo json_encode(["success" => false, "message" => "Email not found."]);
        } else {
            echo json_encode(["success" => false, "message" => "Invalid email or password."]);
        }
    } catch (PDOException $e) {
        error_log("Database query error: " . $e->getMessage());
        echo json_encode(["success" => false, "message" => "An error occurred while processing your request."]);
    }
} else {
    echo json_encode(["success" => false, "message" => "Invalid request method."]);
}
