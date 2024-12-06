<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";

// Initialize an empty variable to hold any message
$message = '';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $messageText = $_POST['message'];

    // Escape variables to protect against SQL injection
    $name = mysqli_real_escape_string($conn, $name);
    $email = mysqli_real_escape_string($conn, $email);
    $messageText = mysqli_real_escape_string($conn, $messageText);

    $sql = "INSERT INTO contact_us (name, email, message) VALUES ('$name', '$email', '$messageText')";

    if ($conn->query($sql) === TRUE) {
       
    } else {
        $message = "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>Contact Us - Hansa Bakery</title>
    <link rel="icon" href="https://www.veryicon.com/icons/food--drinks/western-food-icon/16-strawberry-desserts-1.html"
        type="image/x-icon">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900&display=swap">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    
    <script src="https://kit.fontawesome.com/79271f9696.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background: url(images/contactusbackground.jpg);
            margin: 0;
            padding: 0;
            background-size: cover;
            background-position: center;
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
        }

        .contact-us {
            padding: 60px 0;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
        }

        .contact-us h1,
        .contact-us h2 {
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

        .contact-us p {
            font-family: 'Nunito', sans-serif;
            font-size: 1.2rem;
            line-height: 1.8;
            color: #333;
            margin-bottom: 20px;
        }

        .form-control {
            border-radius: 5px;
        }

        .btn-submit {
            background-color: #13aa52;
            border: 1px solid #13aa52;
            border-radius: 4px;
            box-shadow: rgba(0, 0, 0, .1) 0 2px 4px 0;
            color: #fff;
            font-family: 'Nunito', sans-serif;
            font-size: 16px;
            font-weight: 400;
            padding: 10px 25px;
            text-align: center;
            transition: transform 150ms, box-shadow 150ms;
            cursor: pointer;
        }

        .btn-submit:hover {
            box-shadow: rgba(0, 0, 0, .15) 0 3px 9px 0;
            transform: translateY(-2px);
        }

        .map-container {
            margin-top: 30px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
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

        .navbar-nav .nav-link {
            font-size: 1.1rem;
            margin-right: 10px;
            color: #fff;
        }

        .navbar-nav .nav-link:hover {
            color: #ddd;
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

        table {
            float: right;

            border-collapse: collapse;
            width: 50%;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            color: #ffffcc;
            border-bottom: 1px solid #e6ffff;
        }

        .img1 {
            width: 25px;
            height: 25px;
            border-radius: 50%;

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
    <section class="contact-us text-center container">
        <h1>Contact Us</h1>
        <p>
            We'd love to hear from you! Whether you have a question about our products, feedback on your experience, or
            any other inquiries, feel free to reach out to us.
        </p>
        <div class="row">
            <div class="col-md-6">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-submit">Send Message</button>
                </form>
                <?php
                // Display the message if there is any
                if (!empty($message)) {
                    echo '<p>' . $message . '</p>';
                }
                ?>
            </div>
            <div class="col-md-6 map-container">
                <h2>Our Location</h2>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63301.12941968342!2d80.59721570355758!3d7.29057159098413!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae367b8875fa13d%3A0x9c36e79cbf6181b5!2sKandy%2C%20Sri%20Lanka!5e0!3m2!1sen!2sus!4v1616176397811!5m2!1sen!2sus"
                    width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>
    <a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>
     <br><br> <br><br> 
    <table>

        <tr>
            <th><img class= "img1" src="images/about_us/home1.jpg"></th>
            <th>No.25,Senanayaka Street,Kandy</th>
        </tr>
        <tr>
            <th><img class= "img1" src="images/about_us/call.png"></th>
            <th>0812576496</th>
        </tr>
        <tr>
            <th><img class= "img1" src="images/about_us/mail.jpg"></th>
            <th>hansabakery@gmail.com</th>
        </tr>
    </table>



    <?php include_once "footer.php"; ?>
</body>

</html>