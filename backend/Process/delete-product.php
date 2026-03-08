<?php
include_once "../db/database.php";
include_once "../Controller/ProductsController.php";

$controller = new ProductsController($pdo);

$productId = $_POST['productId'] ?? null;

if (!$productId) {
   echo json_encode(['status' => false, 'message' => 'No product ID provided.']);
   exit;
}

$result = $controller->deleteProduct($productId);

if ($result) {
   echo json_encode(['status' => true]);
} else {
   echo json_encode(['status' => false, 'message' => 'Failed to delete product.']);
}