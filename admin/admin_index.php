<?php
require './classes/DbConnector.php';
require './classes/bakery_cake.php';
?>

<?php

@include 'config.php';

if (isset($_POST['add_product'])) {

    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_FILES['product_image']['name'];
    $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
    $product_image_folder = 'uploaded_img/' . $product_image;

    if (empty($product_name) || empty($product_price) || empty($product_image)) {
        $message[] = 'Please fill out all fields';
    } else {
        $insert = "INSERT INTO products(name, price, image) VALUES('$product_name', '$product_price', '$product_image')";
        $upload = mysqli_query($conn, $insert);
        if ($upload) {
            move_uploaded_file($product_image_tmp_name, $product_image_folder);
            $message[] = '<div class="alert alert-success">New Cakes added successfully!</div>';
        } else {
            $message[] = '<div class="alert alert-danger">Could not add the cake. Please try again.</div>';
        }
    }
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM products WHERE id = $id");
    header('location:admin_index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>Admin</title>
    <link rel="icon" href="" />
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap" />
    <script src="https://kit.fontawesome.com/79271f9696.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            background-color: #0e0e0e;
            color: #ccc;
            overflow-x: hidden;
        }

        .modal-body,
        body {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        .navbar-brand span,
        #accordionSidebar .nav-item .nav-link span,
        .container-fluid h3 {
            font-size: 1.2rem;
        }

        .container-fluid h3 {
            font-size: 1.5rem;
        }

        .admin-product-form-container {
            background: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 10px;
            border: 2px solid #f39c12;
            box-shadow: 0 0 10px rgba(243, 156, 18, 0.5);
        }

        .admin-product-form-container h3 {
            font-size: 1.5rem;
            color: #f39c12;
            margin-bottom: 20px;
        }

        .admin-product-form-container .box {
            width: 100%;
            margin: 10px 0;
            padding: 10px;
            background: rgba(255, 255, 255, 0.2);
            border: none;
            border-radius: 5px;
            color: #000; /* Set text color to black for better visibility */
            font-size: 1rem; /* Optional: Increase font size for readability */
        }

        .admin-product-form-container .btn {
            background: #f39c12;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        .admin-product-form-container .btn:hover {
            background: #e67e22;
        }

        .product-display-table th,
        .product-display-table td {
            font-size: 1rem;
        }

        .sidebar {
            width: 300px;
            padding: 20px;
        }

        .sidebar .nav-item .nav-link {
            font-size: 1rem;
        }

        .sidebar .sidebar-brand {
            font-size: 1.5rem;
        }

        .sidebar .btn {
            width: 100%;
        }
    </style>
    
    <script>
        function confirmDelete() {
            return confirm('Are you sure you want to delete this product?');
        }
    </script>

</head>

<body id="page-top">
    <div id="wrapper">
        <nav id="main-nav" class="navbar bg-dark align-items-start sidebar sidebar-dark accordion p-0">
            <div class="container-fluid d-flex flex-column p-0">
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-text mx-3">
                        <span>
                            <h3>Hansa Admin</h3>
                        </span>
                    </div>
                </a>
                <hr class="sidebar-divider my-0" />
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item">
                        <a id="anchor1" class="nav-link" href="adminhome.php">
                            <i class="fas fa-tachometer-alt"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a id="anchor2" class="nav-link active" href="">
                            <i class="fa-solid fa-cake-candles"></i>
                            <span>Cake</span>
                        </a>
                    </li>
                </ul>
                <a class="btn btn-primary btn-md" role="button" data-bss-hover-animate="pulse" href="../logout.php">Log
                    Out</a>
                <hr class="sidebar-divider my-2" />
                <div class="text-center d-none d-md-inline">
                    <button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button>
                </div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand-md bg-black shadow mb-4 py-3 static-top">
                    <div class="container-fluid">
                        <button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button">
                            <i class="fas fa-bars"></i>
                        </button>
                        <h3 class="d-none d-md-block" style="color:white">Hansa Bakery Dashboard</h3>
                        <h3 class="align-self-right text-white">Hello&nbsp;&nbsp;Admin<i
                                class="fa-solid fa-user-tie fa-xl"></i></h3>
                    </div>
                </nav>

                <div class="container-fluid">
                    <h3 class="text-dark">Cake Details</h3>
                    <div id="message-container">
                        <?php
                            if (isset($message)) {
                                foreach ($message as $message) {
                                    echo $message;
                                }
                            }
                        ?>
                    </div>

                    <div class="container">
                        <div class="admin-product-form-container">
                            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                                <h3>add a new cake</h3>
                                <input type="text" placeholder="enter cake name" name="product_name" class="box">
                                <input type="number" placeholder="enter cake price" name="product_price" class="box">
                                <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image"
                                    class="box">
                                <input type="submit" class="btn" name="add_product" value="add product">
                            </form>
                        </div>

                        <?php
                        $select = mysqli_query($conn, "SELECT * FROM products");
                        ?>

                        <div class="product-display">
                            <table class="product-display-table">
                                <thead>
                                    <tr>
                                        <th>cake image</th>
                                        <th>cake name</th>
                                        <th>cake price</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                                <?php while ($row = mysqli_fetch_assoc($select)) { ?>
                                    <tr>
                                        <td><img src="uploaded_img/<?php echo $row['image']; ?>" height="100" alt=""></td>
                                        <td><?php echo $row['name']; ?></td>
                                        <td>$<?php echo $row['price']; ?>/-</td>
                                        <td>
                                            <a href="admin_update.php?edit=<?php echo $row['id']; ?>" class="btn"> <i
                                                    class="fas fa-edit"></i> edit </a>
                                            <a href="admin_index.php?delete=<?php echo $row['id']; ?>" class="btn"
                                                onclick="return confirmDelete();"> <i class="fas fa-trash"></i> delete </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="bg-black sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright">
                        <span style="color:white">
                            <h3>Copyright © 2024 Hansa Bakery Shop | All Rights Reserved</h3>
                        </span>
                    </div>
                </div>
            </footer>
            <a class="border rounded d-inline scroll-to-top" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>
            <script src="assets/bootstrap/js/bootstrap.min.js"></script>
            <script src="assets/js/theme.js"></script>
        </div>
    </div>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const messageContainer = document.getElementById('message-container');
        if (messageContainer) {
            setTimeout(function() {
                messageContainer.style.display = 'none';
            }, 5000); // Hide after 5 seconds
        }
    });
    </script>

</body>

</html>