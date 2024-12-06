<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900&display=swap">

    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: url(https://i.pinimg.com/originals/0b/2e/fd/0b2efdb6b8d75b3a7c94c68f6db976c2.jpg);
            margin: 0;
            padding: 0;
            background-size: cover;
            background-position: center;
            content: "";
        }

        .navbar-nav .nav-link {
            font-size: 1.1rem;
            margin-right: 10px;
            color: #fff;
        }

        @media (min-width: 768px) {
            .btn1 {
                padding: 10px 30px;
            }
        }


        .navbar-nav .nav-link:hover {
            color: #ddd;
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
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
        

        /*  styling for carousel */
        .carousel-item {
            height: 400px;
            
        }

        .carousel-item img {
            width: auto;
            max-height: 350px;
            
            margin: auto;
            display: block;
            border: 10px solid #fff;
            
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
           
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
                            href="gallery.php">Gallery</a></li>
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

    <div class="content">
        <div class="container">
            <h1 class="my-5 text-center">Gallery</h1>
        </div>


        <div class="site-section bg-left-half mb-5">
            <div class="container owl-2-style">

                <h1 class="text-primary py-5 ">Cakes</h1>


                <div class="owl-carousel owl-2">
                    <div class="media-29101">
                        <a href="#"><img src="images/cakes/Butter Cake.jpg" alt="buttercake" class="img-fluid"></a>
                        <h3><a href="#">Butter Cake</a></h3>
                    </div>
                    <div class="media-29101">
                        <a href="#"><img src="images/cakes/slideshow-1.jpg" alt="chocolatecake" class="img-fluid"></a>
                        <h3><a href="#">Chocolate Cake</a></h3>
                    </div>
                    <div class="media-29101">
                        <a href="#"><img src="images/cakes/Coffee-Buttercream.jpg" alt="coffeebuttercream" class="img-fluid"></a>
                        <h3><a href="#">Coffee-Buttercream Cake</a></h3>
                    </div>
                    <div class="media-29101">
                        <a href="#"><img src="images/cakes/Browni Cake.jpg" alt="brownicake.jpg" class="img-fluid"></a>
                        <h3><a href="#">Browni Cake</a></h3>
                    </div>
                    <div class="media-29101">
                        <a href="#"><img src="images/cakes/Strawbery Icing Cake.jpg" alt="Image" class="img-fluid"></a>
                        <h3><a href="#">Strawbery Icing Cake</a></h3>
                    </div>
                    <div class="media-29101">
                        <a href="#"><img src="images/cakes/Jelly Lava Cake.jpg" alt="Image" class="img-fluid"></a>
                        <h3><a href="#">Jelly Lava Cake</a></h3>
                    </div>
                    <div class="media-29101">
                        <a href="#"><img src="images/cakes/Lava Cake.jpg" alt="Image" class="img-fluid"></a>
                        <h3><a href="#">Lava Cake</a></h3>
                    </div>
                    <div class="media-29101">
                        <a href="#"><img src="images/cakes/Triple chocolate cheesecake.jpg" alt="Image" class="img-fluid"></a>
                        <h3><a href="#">Triple chocolate Cheese Cake</a></h3>
                    </div>
                    <div class="media-29101">
                        <a href="#"><img src="images/cakes/Caramel mud cake.jpg" alt="Image" class="img-fluid"></a>
                        <h3><a href="#">Caramel mud cake</a></h3>
                    </div>
                    <div class="media-29101">
                        <a href="#"><img src="images/cakes/Cup Cake.jpg" alt="Image" class="img-fluid"></a>
                        <h3><a href="#">Cup Cake</a></h3>
                    </div>
                </div>

            </div>
        </div>



        <div class="site-section bg-left-half mb-5">
            <div class="container owl-2-style">

                <h1 class="text-primary py-5 ">Breads And Pestries</h1>


                <div class="owl-carousel owl-2">
                    <div class="media-29101">
                        <a href="#"><img src="images/pestry/Bread.jpg" alt="Image" class="img-fluid"></a>
                        <h3><a href="#">Bread 500g normal</a></h3>
                    </div>
                    <div class="media-29101">
                        <a href="#"><img src="images/pestry/Sandwitch Bread.jpg" alt="Image" class="img-fluid"></a>
                        <h3><a href="#">Sandwitch Bread</a></h3>
                    </div>
                    <div class="media-29101">
                        <a href="#"><img src="images/pestry/roll.jpg" alt="Image" class="img-fluid"></a>
                        <h3><a href="#">Roll</a></h3>
                    </div>
                    <div class="media-29101">
                        <a href="#"><img src="images/pestry/Fish Pestry.jpg" alt="Image" class="img-fluid"></a>
                        <h3><a href="#">Fish Pestry</a></h3>
                    </div>
                    <div class="media-29101">
                        <a href="#"><img src="images/pestry/Chicken Pestry.jpg" alt="Image" class="img-fluid"></a>
                        <h3><a href="#">Chicken Pestry</a></h3>
                    </div>
                    <div class="media-29101">
                        <a href="#"><img src="images/pestry/Uludu Wade.jpg" alt="Image" class="img-fluid"></a>
                        <h3><a href="#">Uludu Wade</a></h3>
                    </div>
                    <div class="media-29101">
                        <a href="#"><img src="images/pestry/Donuts.jpg" alt="Image" class="img-fluid"></a>
                        <h3><a href="#">Donuts</a></h3>
                    </div>
                    <div class="media-29101">
                        <a href="#"><img src="images/pestry/Brown Bread.jpg" alt="Image" class="img-fluid"></a>
                        <h3><a href="#">Brown Bread</a></h3>
                    </div>
                    <div class="media-29101">
                        <a href="#"><img src="images/pestry/Cutlets.jpg" alt="Image" class="img-fluid"></a>
                        <h3><a href="#">Cutlets</a></h3>
                    </div>
                    <div class="media-29101">
                        <a href="#"><img src="images/pestry/Baking-Soda-Biscuits.jpg" alt="Image" class="img-fluid"></a>
                        <h3><a href="#">Baking-Soda-Biscuits</a></h3>
                    </div>
                </div>

            </div>
        </div>



        <div class="site-section bg-left-half mb-5">
            <div class="container owl-2-style">

                <h1 class="text-primary py-5 ">Buns & Sandwitches</h1>


                <div class="owl-carousel owl-2">
                    <div class="media-29101">
                        <a href="#"><img src="images/buns/Cheese Chicken Burger.jpg" alt="Image" class="img-fluid"></a>
                        <h3><a href="#">Cheese Chicken Burger</a></h3>
                    </div>
                    <div class="media-29101">
                        <a href="#"><img src="images/buns/Egg Bun.jpg" alt="Image" class="img-fluid"></a>
                        <h3><a href="#">Egg Bun</a></h3>
                    </div>
                    <div class="media-29101">
                        <a href="#"><img src="images/buns/Fish Bun.jpg" alt="Image" class="img-fluid"></a>
                        <h3><a href="#">Fish Bun</a></h3>
                    </div>
                    <div class="media-29101">
                        <a href="#"><img src="images/buns/Sauage Bun.jpg" alt="Image" class="img-fluid"></a>
                        <h3><a href="#">Sauage Bun</a></h3>
                    </div>
                    <div class="media-29101">
                        <a href="#"><img src="images/buns/Kibula Bun.jpg" alt="Image" class="img-fluid"></a>
                        <h3><a href="#">Kibula Bun</a></h3>
                    </div>
                    <div class="media-29101">
                        <a href="#"><img src="images/buns/Sandwitch.jpg" alt="Image" class="img-fluid"></a>
                        <h3><a href="#">Sandwitch</a></h3>
                    </div>
                    <div class="media-29101">
                        <a href="#"><img src="images/buns/Hamburger.jpg" alt="Image" class="img-fluid"></a>
                        <h3><a href="#">Hamburger</a></h3>
                    </div>
                    <div class="media-29101">
                        <a href="#"><img src="images/buns/Hotdog.jpg" alt="Image" class="img-fluid"></a>
                        <h3><a href="#">Hotdog</a></h3>
                    </div>
                    <div class="media-29101">
                        <a href="#"><img src="images/buns/Submarine.jpg" alt="Image" class="img-fluid"></a>
                        <h3><a href="#">Submarine</a></h3>
                    </div>
                    <div class="media-29101">
                        <a href="#"><img src="images/buns/Ciabatta Buns.jpg" alt="Image" class="img-fluid"></a>
                        <h3><a href="#">Ciabatta Buns</a></h3>
                    </div>
                </div>

            </div>
        </div>

    </div>


    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>


    <?php include_once "footer.php"; ?>
</body>

</html>