<?php
session_start();

$host = "localhost";
$user = "root";
$password = "";
$db = "user";

$conn = mysqli_connect($host, $user, $password, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$userId = $_SESSION["user_id"]; // Assume the user is logged in and user_id is stored in session

$sql = "SELECT p.name, p.price, p.image, c.quantity FROM cart c 
        JOIN products p ON c.product_id = p.id 
        WHERE c.user_id = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "i", $userId);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Cart</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .cart-item {
            background: #fff;
            padding: 20px;
            margin: 20px 0;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
        }
        .cart-item img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 8px;
            margin-right: 20px;
        }
        .cart-item-details {
            flex-grow: 1;
        }
        .cart-item-details h2 {
            margin: 0 0 10px;
            font-size: 24px;
        }
        .cart-item-details p {
            margin: 0;
            font-size: 18px;
            color: #333;
        }
        .cart-item-details .price {
            color: #f56;
            font-weight: bold;
        }
        .cart-item-details .quantity {
            margin-top: 10px;
            font-size: 16px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Cart</h1>
    <?php
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $imagePath = 'admin/uploaded_img/' . htmlspecialchars($row['image']);
            echo '<div class="cart-item">';
            echo '<img src="' . $imagePath . '" alt="' . htmlspecialchars($row['name']) . '">';
            echo '<div class="cart-item-details">';
            echo '<h2>' . htmlspecialchars($row['name']) . '</h2>';
            echo '<p class="price">$' . htmlspecialchars($row['price']) . '</p>';
            echo '<p class="quantity">Quantity: ' . htmlspecialchars($row['quantity']) . '</p>';
            echo '</div>';
            echo '</div>';
        }
    } else {
        echo "<p>Your cart is empty.</p>";
    }

    mysqli_close($conn);
    ?>
</div>

</body>
</html>
