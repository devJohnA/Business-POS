<?php
header('Content-Type: application/json');
include '../db/database.php';
include '../Controller/PosController.php';

$controller = new PosController($pdo);

$productName = $_POST['productName'];
$customerName = $_POST['customerName'];
$transactionType = $_POST['transactionType'];
$amount = $_POST['amount'];

$result = $controller->submitPurchase($productName, $customerName, $transactionType, $amount);

if ($result) {
    echo json_encode([
        "status" => "success",
        "message" => "Transaction saved successfully"
    ]);
} else {
    echo json_encode([
        "status" => "error",
        "message" => "Failed to save transaction"
    ]);
}