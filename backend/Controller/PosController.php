<?php
include_once __DIR__ . "/../db/database.php";
include_once __DIR__ . "/../Model/Pointofsale.php";

class PosController {

    private $model;

    public function __construct($pdo)
    {
        $this->model = new Pointofsale($pdo);
    }

    public function submitPurchase($product, $transactionType, $customerName, $amount)
    {
        return $this->model->submitPurchase($product, $transactionType, $customerName, $amount);
    }
}