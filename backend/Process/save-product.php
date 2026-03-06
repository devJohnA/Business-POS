<?php
header("Content-Type: application/json");
require_once "../db/database.php";
include_once "../Controller/ProductsController.php";



$controller = new ProductsController($pdo);

$productName = $_POST['productName'] ?? '';
$productPrice = $_POST['productPrice'] ?? '';

if (empty($productName) || empty($productPrice)) {
    echo json_encode(['status' => false, 'message' => 'All fields are required.']);
    exit;
}

$result = $controller->addProduct($productName, $productPrice);

if ($result) {
    echo json_encode(['status' => true, 'message' => 'Product added successfully.']);
} else {
    echo json_encode(['status' => false, 'message' => 'Failed to add product.']);
}
