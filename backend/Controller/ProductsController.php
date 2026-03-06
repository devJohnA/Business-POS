<?php
include_once "../Model/Products.php";


class ProductsController {
    private $model;

    public function __construct($pdo) {
        $this->model = new Products($pdo);
    }

    public function getAllProducts() {
        return $this->model->getAllProducts();
    }

    public function addProduct($id, $name, $price) {
        return $this->model->addProduct($id, $name, $price);
    }

    public function updateProduct($id, $name, $price) {
        return $this->model->updateProduct($id, $name, $price);
    }

    public function deleteProduct($id) {
        return $this->model->deleteProduct($id);
    }
}


?>