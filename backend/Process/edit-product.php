<?php
include_once "../db/database.php";
include_once "../Controller/ProductsController.php";

//update product
$controller = new ProductsController($pdo);

$productId = $_POST['productId'] ?? null;
$productName = $_POST['productName'] ?? null;
$productPrice = $_POST['productPrice'] ?? null;


$result = $controller->updateProduct($productId, $productName, $productPrice);
if ($result) {
   echo json_encode(['status' => true]);
} else {
   echo json_encode(['status' => false, 'message' => 'Failed to update product.']);
}
?>