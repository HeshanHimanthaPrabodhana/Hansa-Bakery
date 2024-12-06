<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>About Us - Hansa Bakery</title>
    <link rel="icon" href="https://www.veryicon.com/icons/food--drinks/western-food-icon/16-strawberry-desserts-1.html" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900&display=swap">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <script src="https://kit.fontawesome.com/79271f9696.js" crossorigin="anonymous"></script>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background: url(images/2.jpg);
            margin: 0;
            padding: 0;
            background-size: cover;
            background-position: center;
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
        }

        .about-us {
            padding: 60px 0;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
        }

        .about-us h1,
        .about-us h2 {
            font-family: 'Nunito', sans-serif;
            font-weight: 700;
            margin-bottom: 30px;
            padding: 10px 20px;
            background: #ffccbc;
            border-radius: 5px;
            display: inline-block;
            color: #fff;
            text-shadow: 1px 1px 2px #333;
        }

        .about-us p {
            font-family: 'Nunito', sans-serif;
            font-size: 1.2rem;
            line-height: 1.8;
            color: #333;
            margin-bottom: 20px;
        }

        .product-list {
            list-style-type: none;
            padding: 0;
            text-align: left;
        }

        .product-list li {
            font-family: 'Nunito', sans-serif;
            font-size: 1.2rem;
            margin: 10px 0;
            color: #333;
            background: #ffe0b2;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: background 0.3s ease, transform 0.3s ease;
        }

        .product-list li:hover {
            background: #ffccbc;
            transform: scale(1.05);
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

<body id="page-top">
    <nav class="navbar navbar-dark navbar-expand-md bg-dark py-3">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="index.php">
                <span
                    class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center me-2 bs-icon">
                    <img src="assets/img/bakery-icon.png" class="img-thumbnail">
                </span>
                <span>Hansa Bakery Shop</span>
            </a>
            <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-5">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navcol-5">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a id="anchor1" class="nav-link active" data-bss-hover-animate="pulse"
                            href="index.php">Home</a></li>
                    <li class="nav-item"><a id="anchor2" class="nav-link" data-bss-hover-animate="pulse"
                            href="#">Bakery Product</a></li>
                    <li class="nav-item"><a id="anchor3" class="nav-link" data-bss-hover-animate="pulse"
                            href="blog.php">Blog</a></li>
                    <li class="nav-item"><a id="anchor3" class="nav-link" data-bss-hover-animate="pulse"
                            href="gallery.php" target="_blank">Gallery</a></li>
                    <li class="nav-item"><a id="anchor5" class="nav-link" data-bss-hover-animate="pulse"
                            href="contact_us.php">Contact Us</a></li>
                    <li class="nav-item"><a id="anchor6" class="nav-link" data-bss-hover-animate="pulse"
                            href="about_us.php">About Us</a></li>
                    <li><button class="btn1">Signup</button></li>
                    <?php if (isset($_SESSION["login"])) {
                        if (isset($_SESSION["login"]) == true) {
                            echo '<a class="btn btn-primary ms-md-2" role="button" data-bss-hover-animate="pulse" href="logout.php">Log Out</a>';
                        } else {
                            echo '<a class="btn btn-primary ms-md-2" role="button" data-bss-hover-animate="pulse" href="login.php">Log in</a>';
                        }
                    } else {
                        echo '<a class="btn btn-primary ms-md-2" role="button" data-bss-hover-animate="pulse" href="login.php">Log in</a>';
                    } ?>
                </ul>
            </div>
        </div>
    </nav>
    <section class="about-us text-center container">
        <h1>About Us</h1>
        <p>
            Welcome to Hansa Bakery, where tradition meets innovation in every bite. We are a beloved establishment that
            has been delighting our community with flour-based, oven-baked goodness. Our offerings include a wide array
            of delicious treats such as bread, cookies, cakes, donuts, pastries, and pies. Whether you're looking for a
            quick snack, a special dessert, or a place to enjoy a cup of coffee or tea, Hansa Bakery is the perfect
            destination.
        </p>
        <p>
            At Hansa Bakery, we believe that baked goods are more than just food; they are a part of our history and
            culture, having been cherished for thousands of years. We take pride in continuing this tradition by using
            high-quality ingredients and time-honored baking techniques to bring you the best in flavor and freshness.
        </p>
        <p>
            In addition to our daily offerings, we specialize in creating memorable experiences for special occasions.
            From weddings and anniversaries to birthday parties and business networking events, our skilled bakers can
            craft customized baked products to suit any celebration. We are also mindful of dietary needs and offer
            options for those with allergies or sensitivities, including nut-free, dairy-free, and gluten-free products.
        </p>
        <h2>Our Products</h2>
        <ul class="product-list">
            <li>Bread</li>
            <li>Buns</li>
            <li>Pastries</li>
            <li>Cakes</li>
            <li>Cupcakes</li>
            <li>Cookies</li>
            <li>Biscuit (bread) and more...</li>
        </ul>
        <p>
            Thank you for choosing Hansa Bakery. We look forward to serving you and being a part of your cherished
            moments with our delectable baked goods.
        </p>
    </section>
   
</body>
 <a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>
    <?php include_once "footer.php"; ?>
</html>