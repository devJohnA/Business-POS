<?php

class Pointofsale {

    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function submitPurchase($product_id, $customerName, $transactionType, $amount)
    {
        $sql = "INSERT INTO pos_transactions (product_id, customer_name, transaction_type, amount)
                VALUES (:product_id, :customer_name, :transaction_type, :amount)";

        $stmt = $this->pdo->prepare($sql);

        return $stmt->execute([
            ':product_id' => $product_id,
            ':customer_name' => $customerName,
            ':transaction_type' => $transactionType,
            ':amount' => $amount
        ]);
    }
}