<?php
session_start();

$host = "localhost";
$user = "root";
$password = "";
$db = "user"; // Change this to your actual database name

// Create connection
$conn = mysqli_connect($host, $user, $password, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch products from the database
$sql = "SELECT id, name, price, image FROM products"; 
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Product Page</title>
    <link rel="icon" href="https://www.veryicon.com/icons/food--drinks/western-food-icon/16-strawberry-desserts-1.html" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900&display=swap">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <script src="https://kit.fontawesome.com/79271f9696.js" crossorigin="anonymous"></script>
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
        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
        }
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
        }
        .product {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .product img {
            width: 100%;
            height: auto;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 10px;
        }
        .product-details h2 {
            margin: 0 0 10px;
            font-size: 20px;
        }
        .product-details p {
            margin: 0;
            font-size: 18px;
            color: #333;
        }
        .product-details .price {
            color: #f56;
            font-weight: bold;
            margin: 10px 0;
        }
        .add-to-cart {
            background: #28a745;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .add-to-cart:hover {
            background: #218838;
        }
        .scroll-to-top {
            position: fixed;
            right: 1rem;
            bottom: 1rem;
            display: none;
            width: 2.75rem;
            height: 2.75rem;
            text-align: center;
            color: #fff;
            background: rgba(90, 92, 105, .5);
            line-height: 46px;
            border-radius: 50%;
            z-index: 1000;
        }
        .scroll-to-top:focus,
        .scroll-to-top:hover {
            color: #fff;
            background: #5a5c69;
        }
        .scroll-to-top i {
            font-weight: 800;
        }
        .btn1 {
            background-color: #13aa52;
            border: 1px solid #13aa52;
            border-radius: 4px;
            box-shadow: rgba(0, 0, 0, .1) 0 2px 4px 0;
            box-sizing: border-box;
            color: #fff;
            cursor: pointer;
            font-family: "Akzidenz Grotesk BQ Medium", -apple-system, BlinkMacSystemFont, sans-serif;
            font-size: 16px;
            font-weight: 400;
            outline: none;
            padding: 10px 25px;
            text-align: center;
            transition: transform 150ms, box-shadow 150ms;
            user-select: none;
        }
        .btn1:hover {
            box-shadow: rgba(0, 0, 0, .15) 0 3px 9px 0;
            transform: translateY(-2px);
        }
        @media (min-width: 768px) {
            .btn1 {
                padding: 10px 30px;
            }
        }
        .navbar-nav .nav-link {
            font-size: 1.1rem;
            margin-right: 10px;
            color: #fff;
        }
        .navbar-nav .nav-link:hover {
            color: #ddd;
        }
        footer {
            background: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
        footer a {
            color: #fff;
            text-decoration: none;
        }
        footer a:hover {
            color: #ddd;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-dark navbar-expand-md bg-dark py-3">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="index.php">
                <span class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center me-2 bs-icon">
                    <img src="assets/img/bakery-icon.png" class="img-thumbnail">
                </span>
                <span>Hansa Bakery Shop</span>
            </a>
            <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-5">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navcol-5">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a id="anchor1" class="nav-link active" data-bss-hover-animate="pulse" href="index.php">Home</a></li>
                    <li class="nav-item"><a id="anchor2" class="nav-link" data-bss-hover-animate="pulse" href="#">Bakery Product</a></li>
                    <li class="nav-item"><a id="anchor3" class="nav-link" data-bss-hover-animate="pulse" href="blog.php">Blog</a></li>
                    <li class="nav-item"><a id="anchor3" class="nav-link" data-bss-hover-animate="pulse" href="gallery.php" target="_blank">Gallery</a></li>
                    <li class="nav-item"><a id="anchor5" class="nav-link" data-bss-hover-animate="pulse" href="contact_us.php">Contact Us</a></li>
                    <li class="nav-item"><a id="anchor6" class="nav-link" data-bss-hover-animate="pulse" href="about_us.php">About Us</a></li>
                    <li><button class="btn1">Signup</button></li>
                    <?php if (isset($_SESSION["user_id"])): ?>
                        <a class="btn btn-primary ms-md-2" role="button" data-bss-hover-animate="pulse" href="logout.php">Log Out</a>
                    <?php else: ?>
                        <a class="btn btn-primary ms-md-2" role="button" data-bss-hover-animate="pulse" href="login.php">Log in</a>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1><center>CAKES</center></h1>
        <?php if (!isset($_SESSION["user_id"])): ?>
            <p>You must be logged in to add items to the cart.</p>
            <a href="login.php" class="btn btn-primary">Log in</a>
        <?php else: ?>
            <div class="product-grid">
                <?php
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $imagePath = 'admin/uploaded_img/' . htmlspecialchars($row['image']);
                        
                        echo '<div class="product">';
                        echo '<img src="' . $imagePath . '" alt="' . htmlspecialchars($row['name']) . '">';
                        echo '<div class="product-details">';
                        echo '<h2>' . htmlspecialchars($row['name']) . '</h2>';
                        echo '<p class="price">$' . htmlspecialchars($row['price']) . '</p>';
                        echo '<form method="post" action="add_to_cart.php">';
                        echo '<input type="hidden" name="product_id" value="' . htmlspecialchars($row['id']) . '">';
                        echo '<button type="submit" class="add-to-cart">Add to Cart</button>';
                        echo '</form>';
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo "0 results";
                }

                mysqli_close($conn);
                ?>
            </div>
        <?php endif; ?>
    </div>

    <a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>
    <?php include_once "footer.php"; ?>
</body>
</html>
