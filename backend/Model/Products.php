<?php 

class Products {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getAllProducts() {
        $sql = "SELECT * FROM products";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addProduct($name, $price) {
        $sql = "INSERT INTO products (name, price) VALUES (:name, :price)";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute(['name' => $name, 'price' => $price]);
    }

    public function updateProduct($id, $name, $price) {
        $sql = "UPDATE products SET name = :name, price = :price WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute(['id' => $id, 'name' => $name, 'price' => $price]);
    }

    public function deleteProduct($id) {
        $sql = "DELETE FROM products WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute(['id' => $id]);
    }
}


?>