<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>Home</title>
    <link rel="icon" href="https://www.veryicon.com/icons/food--drinks/western-food-icon/16-strawberry-desserts-1.html"
        type="image/x-icon">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <script src="https://kit.fontawesome.com/79271f9696.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
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
            line-height: 46px
        }

        .scroll-to-top:focus,
        .scroll-to-top:hover {
            color: #fff
        }

        .scroll-to-top:hover {
            background: #5a5c69
        }

        .scroll-to-top i {
            font-weight: 800
        }

        /* Make the image fully responsive */
        .carousel-inner img {
            width: 100%;
            height: 100%;
        }

        /* Customize carousel transition */
        .carousel-item {
            transition: transform 0.5s ease-in-out !important;
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
            outline: 0;
            padding: 10px 25px;
            text-align: center;
            transform: translateY(0);
            transition: transform 150ms, box-shadow 150ms;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
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

        .welcome-message {
            font-family: 'Nunito', sans-serif;
            color: #d2691e;
            text-shadow: 2px 2px #f5deb3;
        }

        .welcome-message h2 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-top: 2rem;
            margin-bottom: 2rem;
            border: 2px solid #d2691e;
            padding: 1rem;
            display: inline-block;
            background: #fffaf0;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        
    </style>
</head>

<body id="page-top">
    <div>
        <nav class="navbar navbar-dark navbar-expand-md bg-dark py-3">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="index.php">
                    <span
                        class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center me-2 bs-icon">
                        <img src="assets/img/bakery-icon.png" class="img-thumbnail">
                    </span>
                    <span>Hansa Bakery Shop</span>
                </a>
                <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-5"><span
                        class="navbar-toggler-icon"></span></button>
        
                <div class="collapse navbar-collapse" id="navcol-5">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a id="anchor1" class="nav-link active" data-bss-hover-animate="pulse"
                                href="index.php">Home</a></li>
                        <li class="nav-item"><a id="anchor2" class="nav-link" data-bss-hover-animate="pulse"
                                href="products.php">Bakery Product</a></li>
                        <li class="nav-item"><a id="anchor3" class="nav-link" data-bss-hover-animate="pulse"
                                href="blog.php">Blog</a></li>
                        <li class="nav-item"><a id="anchor3" class="nav-link" data-bss-hover-animate="pulse"
                                href="gallery.php">Gallery</a></li>
                        <li class="nav-item"><a id="anchor5" class="nav-link" data-bss-hover-animate="pulse"
                                href="contact_us.php">Contact Us</a></li>
                        <li class="nav-item"><a id="anchor6" class="nav-link" data-bss-hover-animate="pulse"
                                href="about_us.php">About Us</a></li>
                        <li><button class="btn1" role="button" data-bss-hover-animate="pulse"><a href = "register.php">Signup</a></button></li>


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

        <div id="demo" class="carousel slide" data-ride="carousel" data-interval="2000">
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img/slideshow-1.jpg" alt="blackforestcake" width="800" height="300">
                    <div class="carousel-caption">
                        <h3>Black Forest Cake</h3>
                        <p>The black forest cake is made using chocolate, whipped cream, and cherries.Great COMBO
                            voucher limited time.</p>
                        <button class="btn1">Order Now</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/img/slideshow-2.jpg" alt="pastries" width="800" height="300">
                    <div class="carousel-caption">
                        <h3>Delectable Pastries</h3>
                        <p>Indulge in our freshly baked pastries, crafted with love and the finest ingredients for a
                            truly delightful experience.</p>
                        <button class="btn1">Order Now</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/img/slideshow-3.jpg" alt="burger" width="800" height="300">
                    <div class="carousel-caption">
                        <h3>Pulled Chicken Burger</h3>
                        <p>A pulled chicken burger is a style of sandwich in which the main filling is pulled or
                            shredded chicken.Then various herbs and sauces including barbecue sauce are combined with
                            the shredded chicken to give it a taste.</p>
                        <button class="btn1">Order Now</button>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
    <div class="welcome-message">
            <center>
                <h2>Welcome to the Hansa Bakery Shop</h2>
            </center>
    </div>

    <div class="container py-4 py-xl-5">
        <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2>About Us</h2>
                <p>
                    A Hansa bakery is an establishment that produces and sells flour-based food baked in an oven such as bread, cookies, cakes,
                    donuts, pastries, and pies. Some retail bakeries are also categorized as cafés, serving coffee and tea to customers who wish to 
                    consume the baked goods on the premises. Confectionery items are also made in most bakeries throughout the world.Baked goods have
                    been around for thousands of years. Some bakeries provide services for special occasions (such as weddings, anniversaries, 
                    birthday parties, business networking events, etc.) or customized baked products for people who have allergies or sensitivities
                    to certain foods (such as nuts, peanuts, dairy or gluten, etc.).
                    Our products are;<br>
                        Bread<br>
                        Buns<br>
                        Pastries<br>
                        Cakes<br>
                        Cupcakes<br>
                        Cookies<br>
                        Biscuit (bread) etc...
                </p>
            </div>
        </div>
        <hr>
        <div class="container py-4 py-xl-5">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2>Services We Provide</h2>
                    <p class="w-lg-50">Sri Lankan quality branded bakery shop.
                    </p>
                </div>
            </div>
            <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
    <div class="col">
        <a type="button" class="btn" data-bss-hover-animate="pulse" href="blog.php">
            <div class="text-center d-flex flex-column align-items-center align-items-xl-center">
                <div class="bs-icon-lg bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-3 bs-icon lg">
                    <i class="fas fa-table"></i>
                </div>
                <div class="px-3">
                    <h4>View Blog</h4>
                    <p>Find new recepis and article</p>
                </div>
            </div>
        </a>
    </div>
    <div class="col">
        <a type="button" class="btn" data-bss-hover-animate="pulse" href="gallery.php">
            <div class="text-center d-flex flex-column align-items-center align-items-xl-center">
                <div class="bs-icon-lg bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-3 bs-icon lg">
                    <i class="far fa-registered"></i>
                </div>
                <div class="px-3">
                    <h4>Gallery</h4>
                    <p>Get more experience in our differnet kind of food item</p>
                </div>
            </div>
        </a>
    </div>
    <div class="col">
        <a type="button" class="btn" data-bss-hover-animate="pulse" href="products.php">
            <div class="text-center d-flex flex-column align-items-center align-items-xl-center">
                <div class="bs-icon-lg bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-3 bs-icon lg">
                    <i class="fas fa-hamburger"></i>
                </div>
                <div class="px-3">
                    <h4>Order Foods</h4>
                    <p>Order desired foods through our bakery web site.</p>
                </div>
            </div>
        </a>
    </div>
</div>
<br><br>

            <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
                <div class="col">
                    <a type="button" class="btn" data-bss-hover-animate="pulse" href="#">
                        <div class="text-center d-flex flex-column align-items-center align-items-xl-center">
                            <div
                                class="bs-icon-lg bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-3 bs-icon lg">
                                <i class="fas fa-star"></i></div>
                            <div class="px-3">
                                <h4>Special offer</h4>
                                <p>During special time we offer great deal for our customers</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a type="button" class="btn" data-bss-hover-animate="pulse" href="contact_us.php">
                        <div class="text-center d-flex flex-column align-items-center align-items-xl-center">
                            <div
                                class="bs-icon-lg bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-3 bs-icon lg">
                                <i class="fas fa-comments"></i></div>
                            <div class="px-3">
                                <h4>Customer Support</h4>
                                <p>customer service & support through our mobile services</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a type="button" class="btn" data-bss-hover-animate="pulse" href="#">
                        <div class="text-center d-flex flex-column align-items-center align-items-xl-center">
                            <div
                                class="bs-icon-lg bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-3 bs-icon lg">
                                <i class="fas fa-bell"></i></div>
                            <div class="px-3">
                                <h4>Delivery System</h4>
                                <p>How you get your bakery item? we can deliver it with less delivery charges.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
<?php include_once "footer.php";
?>