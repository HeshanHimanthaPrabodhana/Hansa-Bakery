<?php


namespace classes;

use PDO;
use PDOException;

?>
<?php
   class BakeryCake {
    // Database connection 
    private static $host = 'localhost';  
    private static $db = 'user';  
    private static $user = 'root';  
    private static $pass = ''; 
    private static $charset = 'utf8mb4';

    private static function connect() {
        $dsn = "mysql:host=" . self::$host . ";dbname=" . self::$db . ";charset=" . self::$charset;
        try {
            $pdo = new PDO($dsn, self::$user, self::$pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            throw new Exception('Connection failed: ' . $e->getMessage());
        }
    }

    public static function getTotalCount() {
        try {
            $pdo = self::connect();
            $stmt = $pdo->query("SELECT COUNT(*) FROM products");
            $count = $stmt->fetchColumn();
            return $count;
        } catch (Exception $e) {
           
            return "Error: " . $e->getMessage();
        }
    }

    public static function getFeedbackCount() {
        try {
            $pdo = self::connect();
            $stmt = $pdo->query("SELECT COUNT(*) FROM contact_us");
            $count = $stmt->fetchColumn();
            return $count;
        } catch (Exception $e) {
            
            return "Error: " . $e->getMessage();
        }
    }
}
?>
