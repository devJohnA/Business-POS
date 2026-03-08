<?php
include_once "../db/database.php";
include_once "../Controller/ProductsController.php";

//update product
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['status' => false, 'message' => 'Invalid request method.']);
    exit;
    $productId = $_POST['productId'] ?? null;
    $productName = $_POST['productName'] ?? null;
    $productPrice = $_POST['productPrice'] ?? null;



    $controller = new ProductsController($pdo);
    $result = $controller->updateProduct($productId, $productName, $productPrice);

    if ($result) {
        echo json_encode(['status' => true]);
    } else {
        echo json_encode(['status' => false, 'message' => 'Failed to update product.']);
    }
    exit;
}
