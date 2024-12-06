<?php

namespace classes;

use PDO;
use PDOException;

class DbConnector {
    private $host = 'localhost';
    private $dbname = 'user';
    private $username = 'root';
    private $password = '';
    private $conn;

    public function connect() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        return $this->conn;
    }
}

class User {
    private $userId;
    private $username;
    private $email;
    private $password;

    public function __construct($userId = null, $username = null, $email = null, $password = null) {
        $this->userId = $userId;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }

    public function getUserId() {
        return $this->userId;
    }

    public function setUserId($userId) {
        $this->userId = $userId;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }
}

class CaterStaff extends User {

    public static function getOrderCount() {
        $dbcon = new DbConnector;
        $con = $dbcon->connect();
        $query = "SELECT COUNT(Food_Order_Id) FROM Food_Order;";
        try {
            $pstmt = $con->prepare($query);
            $pstmt->execute();
            $count = $pstmt->fetch(PDO::FETCH_BOTH);
            return $count[0];
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public static function getFoodCount() {
        $dbcon = new DbConnector;
        $con = $dbcon->connect();
        $query = "SELECT COUNT(Food_Id) FROM Food;";
        try {
            $pstmt = $con->prepare($query);
            $pstmt->execute();
            $count = $pstmt->fetch(PDO::FETCH_BOTH);
            return $count[0];
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public static function getFoodOrders() {
        $dbcon = new DbConnector;
        $con = $dbcon->connect();
        $query = "SELECT Food_Order.Food_Order_Id, Food_Order.User_Id, Food_Order.Total_Price, Food_Order.Status, User_Details.Email, Food_Order.Quantity FROM User_Details INNER JOIN Food_Order ON Food_Order.User_Id = User_Details.User_Id";
        try {
            $pstmt = $con->prepare($query);
            $pstmt->execute();
            $rs = $pstmt->fetchAll(PDO::FETCH_ASSOC);
            return $rs;
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public static function getFood() {
        $dbcon = new DbConnector;
        $con = $dbcon->connect();
        $query = "SELECT * FROM Food;";
        try {
            $pstmt = $con->prepare($query);
            $pstmt->execute();
            $rs = $pstmt->fetchAll(PDO::FETCH_ASSOC);
            return $rs;
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public static function addFood($food, $price, $filename) {
        $dbcon = new DbConnector;
        $con = $dbcon->connect();
        $query = "INSERT INTO Food(Food_Name, Price, Image) VALUES(?, ?, ?);";
        try {
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $food);
            $pstmt->bindValue(2, $price);
            $pstmt->bindValue(3, $filename);
            $a = $pstmt->execute();

            if ($a > 0) {
                header("Location: ../admin/cater_staff_foods.php?status=4");
                exit;
            } else {
                header("Location: ../admin/cater_staff_foods.php?status=5");
                exit;
            }
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public static function deleteFoodOrder($foodOrderId) {
        $dbcon = new DbConnector;
        $con = $dbcon->connect();
        $query = "DELETE FROM Food_Order WHERE Food_Order_Id = ?;";

        try {
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $foodOrderId);
            $a = $pstmt->execute();

            if ($a > 0) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public static function prepareFoodOrder($foodOrderId) {
        $dbcon = new DbConnector;
        $con = $dbcon->connect();
        $query = "UPDATE Food_Order SET Status = ? WHERE Food_Order_Id = ?;";

        try {
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, "Prepared");
            $pstmt->bindValue(2, $foodOrderId);
            $a = $pstmt->execute();

            if ($a > 0) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public static function successFoodOrder($foodOrderId) {
        $dbcon = new DbConnector;
        $con = $dbcon->connect();
        $query = "UPDATE Food_Order SET Status = ? WHERE Food_Order_Id = ?;";

        try {
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, "Collected");
            $pstmt->bindValue(2, $foodOrderId);
            $a = $pstmt->execute();

            if ($a > 0) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public static function deleteFood($foodId) {
        $dbcon = new DbConnector;
        $con = $dbcon->connect();
        $query = "DELETE FROM Food WHERE Food_Id = ?;";

        try {
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $foodId);
            $a = $pstmt->execute();

            if ($a > 0) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public static function updateFood($foodId, $newFoodName, $newPrice, $newImage) {
        $dbcon = new DbConnector;
        $con = $dbcon->connect();

        $query = "UPDATE Food SET Food_Name = ?, Price = ?, Image=? WHERE Food_Id = ?;";

        try {
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $newFoodName);
            $pstmt->bindValue(2, $newPrice);
            $pstmt->bindValue(3, $newImage);
            $pstmt->bindValue(4, $foodId);

            $result = $pstmt->execute();

            return $result;
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public static function getSum() {
        $dbcon = new DbConnector;
        $con = $dbcon->connect();
        $query = "SELECT SUM(Total_Price) FROM Food_Order;";

        try {
            $pstmt = $con->prepare($query);
            $pstmt->execute();
            $rs = $pstmt->fetch(PDO::FETCH_ASSOC);
            if ($rs['SUM(Total_Price)'] == null) {
                return 0;
            } else {
                return $rs['SUM(Total_Price)'];
            }
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }
}
