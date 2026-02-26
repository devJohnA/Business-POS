<?php 

class Database {
    private $host = 'localhost';
    private $dbname = 'business_db';
    private $username = 'root';
    private $password = '';
    public $conn;

    public function connect() {
        if($this->conn) return $this->conn;

        try {
            $this->conn = new PDO (
                "mysql:host={$this->host};dbname={$this->dbname}",
                $this->username,
                $this->password,
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES => false,
                ]
            );
            
        } catch (PDOException $e) {
            error_log("Database connection error " . $e->getMessage());
        }
    }
}

$db = new Database();
$pd = $db->connect();


?>