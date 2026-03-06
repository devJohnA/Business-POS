<?php
header("Content-Type: application/json");
require_once "../db/database.php";
include_once "../Controller/ProductsController.php";



$controller = new ProductsController($pdo);

$id = $_POST['productId'] ?? '';

$name = $_POST['productName'] ?? '';
$price = $_POST['productPrice'] ?? '';

if (empty($name) || empty($price)) {
    echo json_encode(['status' => false, 'message' => 'All fields are required.']);
    exit;
}

$result = $controller->addProduct($id, $name, $price);

if ($result) {
    echo json_encode(['status' => true, 'message' => 'Product added successfully.']);
} else {
    echo json_encode(['status' => false, 'message' => 'Failed to add product.']);
}
