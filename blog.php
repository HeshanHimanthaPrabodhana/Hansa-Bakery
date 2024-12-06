<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>Blog - Hansa Bakery</title>
    <link rel="icon" href="https://www.veryicon.com/icons/food--drinks/western-food-icon/16-strawberry-desserts-1.html"
        type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900&display=swap">
    <link rel="stylesheet" href="assets/css/animate.min.css">


    <link href="css/style1.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <script src="https://kit.fontawesome.com/79271f9696.js" crossorigin="anonymous"></script>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background: url();
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

        .banner_area {
            background: url(images/blogs/banner/banner-bg.jpg) no-repeat scroll center center;
            background-size: cover;
        }

        .banner_text {
            text-align: center;
            padding-bottom: 80px;
        }

        .banner_text h3 {
            color: #fff;
            padding-top: 113px;
            font-family: "Playfair Display", serif;
            font-weight: bold;
            font-size: 62px;
        }

        .banner_text ul {
            list-style: none;
            margin: 0px;
            padding: 0px;
        }

        .banner_text ul li {
            display: inline-block;
            margin-right: 20px;
        }

        .banner_text ul li a {
            display: inline-block;
            color: #fff;
            font-size: 14px;
            font-family: "Open Sans", sans-serif;
            font-weight: 600;
            position: relative;
            letter-spacing: .28px;
        }

        .banner_text ul li a:before {
            content: "\f105";
            font: normal normal normal 14px/1 FontAwesome;
            position: absolute;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
            left: -15px;
        }

        .banner_text ul li:first-child a {
            color: #f195b2;
        }

        .banner_text ul li:first-child a:before {
            display: none;
        }

        .banner_text ul li:last-child {
            margin-right: 0px;
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
                            href="gallery.php" ">Gallery</a></li>
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


    <section class="banner_area">
        <div class="container">
            <div class="banner_text">
                <h3>Blog</h3>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="blog.php">Blog</a></li>
                </ul>
            </div>
        </div>
    </section>


    <section class="main_blog_area p_100">
        <div class="container">
            <div class="blog_area_inner">
                <div class="main_blog_column row">
                    <div class="col-lg-6">
                        <div class="blog_item">
                            <div class="blog_img">
                                <img class="img-fluid" src="images/blogs/column/blog-c-1.jpg" alt="bakery">
                            </div>
                            <div class="blog_text">
                                <div class="blog_time">
                                    <div class="float-left">
                                        <a href="#">26 June. 2024</a>
                                    </div>
                                    <div class="float-right">
                                        <ul class="list_style">
                                            <li><a href="#">By : Admin</a></li>
                                            <li><a href="#">bekery, sweet</a></li>
                                            <li><a href="#">Comments: 8</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="#">
                                    <h4>Hansa Bakery Heat & Eat Range : Not just a shortcut, but a meal to look forward to!
                                         Your next freezer essential</h4>
                                </a>
                                <p>Had a long day at work and need a meal in a pinch? Unexpected visitors at the door and nothing to serve? 
                                    With Hansa Bakerys’ newest Heat & Eat range, your meal-time ordeals will be a thing of the past!
                                    Freezer meals have come a long way since its invention in the 1950’s but continues to benefit us today as 
                                    it did back then; with convenience! Easy to prepare and the ultimate way to keep you from spending long hours
                                    in the kitchen, frozen pre-packaged food is a lifesaver for any busy household or event. 
                                    </p>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="blog_item">
                            <div class="blog_img">
                                <img class="img-fluid" src="images/blogs/column/blog-c-5.jpg" alt="">
                            </div>
                            <div class="blog_text">
                                <div class="blog_time">
                                    <div class="float-left">
                                        <a href="#">24 June 2024</a>
                                    </div>
                                    <div class="float-right">
                                        <ul class="list_style">
                                            <li><a href="#">By : Admin</a></li>
                                            <li><a href="#">bekery, sweet</a></li>
                                            <li><a href="#">Comments: 8</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="#">
                                    <h4>Baking Bliss: Whip Up These Delicious Homemade Cupcakes!</h4>
                                </a>
                                <p>Indulge in the joy of baking with this easy and delightful homemade cupcake recipe. Whether you're a 
                                    seasoned baker or a beginner in the kitchen, these cupcakes are sure to impress. Start with simple 
                                    ingredients you probably already have in your pantry: flour, sugar, butter, eggs, and a dash of vanilla 
                                    extract. Mix them together to create a smooth batter, then fill your cupcake liners and bake until golden 
                                    brown. The result? Light, fluffy cupcakes that are perfect for any occasion. Top them with your favorite 
                                    frosting, whether it's classic buttercream, rich chocolate ganache, or a zesty lemon glaze. </p>
                                <a class="pink_more" href="#">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="blog_item">
                            <div class="blog_img">
                                <img class="img-fluid" src="images/blogs/column/blog-c-3.jpg" alt="">
                            </div>
                            <div class="blog_text">
                                <div class="blog_time">
                                    <div class="float-left">
                                        <a href="#">23 June 2024</a>
                                    </div>
                                    <div class="float-right">
                                        <ul class="list_style">
                                            <li><a href="#">By : Admin</a></li>
                                            <li><a href="#">bekery, sweet</a></li>
                                            <li><a href="#">Comments: 8</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="#">
                                    <h4>Hansa Bakery committed to raising the bar for Sri Lankan Esports with GAMER.LK</h4>
                                </a>
                                <p>Esports has been growing rapidly over the last few years in Sri Lanka with an exponential number of players 
                                   entering what is widely regarded as the “fastest growing sport” in Sri Lanka. Hansa Bakery partnered with 
                                   Gamer.LK in 2024 and stepped into the fray to amplify the local Esports culture with two massive online 
                                   championships featuring popular Esports titles.This year, Hansa Bakery returns in partnership with Gamer.LK 
                                   to launch the second edition of the championships, the PUBG Mobile P&S Series and the P&S Free Fire Contenders 
                                   featuring Sri Lanka’s most popular Esports titles. Both championships will be team based battle royale 
                                   tournaments, starting off with qualifier group stages progressing to knockout based semi-final and final 
                                   rounds..</p>
                                <a class="pink_more" href="#">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="blog_item">
                            <div class="blog_img">
                                <img class="img-fluid" src="img/blog/column/blog-c-4.jpg" alt="">
                            </div>
                            <div class="blog_text">
                                <div class="blog_time">
                                    <div class="float-left">
                                        <a href="#">25 June 2024</a>
                                    </div>
                                    <div class="float-right">
                                        <ul class="list_style">
                                            <li><a href="#">By : Admin</a></li>
                                            <li><a href="#">bekery, sweet</a></li>
                                            <li><a href="#">Comments: 8</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="#">
                                    <h4>Is adding Sri Lankan cloves benifit our life?</h4>
                                </a>
                                <p>Sri Lanka is renowned for its rich, aromatic spices, and cloves are among the most prized. Clove cultivation 
                                   thrives in the island's tropical climate, particularly in the central and southwestern regions. Known for
                                   their intense flavor and distinctive aroma, Sri Lankan cloves are a staple in both local and international 
                                   cuisines. These tiny, dark brown buds are harvested by hand and dried to perfection, ensuring their quality 
                                   and potency. Beyond their culinary uses, cloves from Sri Lanka are also valued for their medicinal properties,
                                   including their natural antiseptic and pain-relieving qualities. Adding a touch of Sri Lankan clove to your 
                                   homemade cupcakes can elevate the flavor, infusing them with a warm, spicy note that complements the 
                                   sweetness beautifully.</p>
                                <a class="pink_more" href="#">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="blog_item">
                            <div class="blog_img">
                                <img class="img-fluid" src="images/blogs/column/blog-c-4.jpg" alt="">
                            </div>
                            <div class="blog_text">
                                <div class="blog_time">
                                    <div class="float-left">
                                        <a href="#">27 June 2024</a>
                                    </div>
                                    <div class="float-right">
                                        <ul class="list_style">
                                            <li><a href="#">By : Admin</a></li>
                                            <li><a href="#">bekery, sweet</a></li>
                                            <li><a href="#">Comments: 8</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="#">
                                    <h4>The Best Soft Chocolate Chip Cookies</h4>
                                </a>
                                <p>Preheat the oven to 350 degrees. Microwave the butter for about 40 seconds to just barely melt it. 
                                   It shouldn’t be hot – but it should be almost entirely in liquid form.<br>
                                   Using a stand mixer or electric beaters, beat the butter with the sugars until creamy. Add the vanilla and 
                                   the egg; beat on low speed until just incorporated – 10-15 seconds or so (if you beat the egg for too long,
                                   the cookies will be stiff).</p>
                                <a class="pink_more" href="#">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="blog_item">
                            <div class="blog_img">
                                <img class="img-fluid" src="img/blog/column/blog-c-6.jpg" alt="">
                            </div>
                            <div class="blog_text">
                                <div class="blog_time">
                                    <div class="float-left">
                                        <a href="#">21 June 2024</a>
                                    </div>
                                    <div class="float-right">
                                        <ul class="list_style">
                                            <li><a href="#">By : Admin</a></li>
                                            <li><a href="#">bekery, sweet</a></li>
                                            <li><a href="#">Comments: 8</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="#">
                                    <h4>Chocolate Dream: Perfecting the Art of Homemade Chocolate Cake</h4>
                                </a>
                                <p>There's something undeniably special about a homemade chocolate cake. Rich, moist, and oh-so-chocolatey, it's 
                                    the perfect dessert to satisfy any sweet tooth. The key to a truly decadent chocolate cake lies in high-quality
                                     ingredients. Start with good cocoa powder and a rich, dark chocolate for the batter. Mix them with flour, 
                                     sugar, eggs, and butter, and you'll have the foundation for a cake that's both tender and full of flavor. 
                                     The secret touch? A bit of hot coffee added to the mix to enhance the chocolate's depth. Once baked, this 
                                     cake is a versatile canvas—perfect with a simple dusting of powdered sugar, a glossy ganache, or a creamy 
                                     buttercream frosting. Each bite is a journey to chocolate heaven, making it a must-try recipe for any baking
                                     enthusiast.</p>
                                <a class="pink_more" href="#">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="blog_item">
                            <div class="blog_img">
                                <img class="img-fluid" src="images/blogs/column/blog-c-7.jpg" alt="">
                            </div>
                            <div class="blog_text">
                                <div class="blog_time">
                                    <div class="float-left">
                                        <a href="#">22 June 2024</a>
                                    </div>
                                    <div class="float-right">
                                        <ul class="list_style">
                                            <li><a href="#">By : Admin</a></li>
                                            <li><a href="#">bekery, sweet</a></li>
                                            <li><a href="#">Comments: 8</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="#">
                                    <h4>Do you know our ancient donut? Taste of Sri Lanka: The Perfect Homemade Sri Lankan Donut Recipe</h4>
                                </a>
                                <p>Sri Lankan donuts, known as "konda kavum," are a beloved traditional sweet that brings a unique twist to the
                                   classic donut. These delightful treats are made from rice flour, coconut treacle, and a touch of cardamom, 
                                   creating a flavor profile that's both exotic and comforting. Perfect for festive occasions or simply as a 
                                   special treat, these donuts are sure to impress.</p>
                                <a class="pink_more" href="#">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="blog_item">
                            <div class="blog_img">
                                <img class="img-fluid" src="images/blogs/column/blog-c-8.jpg" alt="">
                            </div>
                            <div class="blog_text">
                                <div class="blog_time">
                                    <div class="float-left">
                                        <a href="#">25 June 2024</a>
                                    </div>
                                    <div class="float-right">
                                        <ul class="list_style">
                                            <li><a href="#">By : Admin</a></li>
                                            <li><a href="#">bekery, sweet</a></li>
                                            <li><a href="#">Comments: 8</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="#">
                                    <h4>Raw Vegan Carrot Cake Bites</h4>
                                </a>
                                <p>These carrot cake bites are chewy, cinnamony, cake-bally, and just the right amount of sweet. They are flecked 
                                    with coconut and oats and made creamy with almond butter. The carrots are there, but they’re not excessively 
                                    salady – they just add some specks of color, flavor, and texture to an almost-cookie-dough-like bite of joy 
                                    that lives in a little jar in your fridge, waiting for that 3pm moment to make your day a little brighter.
                                     Breakfast bites, snack-with-coffee bites, desserty bites… with these little gems, all of it is fair game...</p>
                                <a class="pink_more" href="#">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </section>
    <?php include 'footer.php' ?>
</body>

</html>