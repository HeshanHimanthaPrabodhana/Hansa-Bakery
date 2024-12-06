<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "user";

session_start();

$data = mysqli_connect($host, $user, $password, $db);

if ($data === false) {
    die("connection error");
}

$error_message = "";
$success_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    if ($password !== $confirm_password) {
        $error_message = "Passwords do not match";
    } else {
        $usertype = "user"; // Hardcode the user type to "user"
        $sql = "SELECT * FROM login WHERE username=?";
        $stmt = mysqli_prepare($data, $sql);
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) > 0) {
            $error_message = "Username already taken";
        } else {
            $sql = "INSERT INTO login (username, password, usertype) VALUES (?, ?, ?)";
            $stmt = mysqli_prepare($data, $sql);
            mysqli_stmt_bind_param($stmt, "sss", $username, $password, $usertype);
            mysqli_stmt_execute($stmt);

            if (mysqli_stmt_affected_rows($stmt) > 0) {
                $success_message = "Registration successful!";
                header("Refresh: 2; URL=login.php");
            } else {
                $error_message = "Registration failed";
            }
        }
    }
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Register Form</title>
<style>
body {
    margin: 0;
    padding: 0;
    background: url('images/background.jpg') no-repeat center center fixed; 
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    position: relative;
    backdrop-filter: blur(5px);
}
.registerbox {
    width: 320px;
    height: 480px;
    background: rgba(0, 0, 0, 0.8);
    color: #fff;
    box-sizing: border-box;
    padding: 70px 30px;
    z-index: 1;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(10px);
}
h1 {
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
}
.registerbox p {
    margin: 0;
    padding: 0;
    font-weight: bold;
}
.registerbox input ,.registerbox button{
    width: 100%;
    margin-bottom: 20px;    
}

.registerbox input[type="text"], input[type="password"], .registerbox button {
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
}

.registerbox input[type="submit"], .registerbox button, .registerbox input[type="reset"] {
    border: none;
    border-radius: 20px;
    background: #fb2525;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
}
.registerbox input[type="submit"]:hover, .registerbox button:hover, .registerbox input[type="reset"]:hover {
    cursor: pointer;
    background-color: #ffe107;
    color: #fff;
}

.registerbox button {
    background: #fb2525; /* Make sure the button background color matches */
}

img {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);
}
.message-popup {
    display: none;
    padding: 15px;
    position: fixed;
    top: 20px; 
    left: 50%;
    transform: translateX(-50%);
    z-index: 1002;
    border-radius: 5px;
    text-align: center;
    width: 300px;
}
.error-popup {
    background-color: #f44336; /* Red color*/
    color: white;
}
.success-popup {
    background-color: #4CAF50; /* Green color*/
    color: white;
}
</style>
</head>
<body>

<?php if ($error_message): ?>
<div class="message-popup error-popup" id="errorPopup">
    <?php echo $error_message; ?>
</div>
<?php endif; ?>

<?php if ($success_message): ?>
<div class="message-popup success-popup" id="successPopup">
    <?php echo $success_message; ?>
</div>
<?php endif; ?>

<div class="registerbox">
    <img src="https://cdn1.iconfinder.com/data/icons/elevator/154/elevator-user-man-ui-round-login-1024.png" alt="User Icon">
    <h1>Register Form</h1>
    <form name="form1" action="#" method="post">
        <p>Username</p>
        <input type="text" name="username" placeholder="Enter username" required>
        <p>Password</p>
        <input type="password" name="password" placeholder="Enter password" required>
        <p>Confirm Password</p>
        <input type="password" name="confirm_password" placeholder="Confirm password" required>
        <input type="submit" name="submit" value="Register">
        <button type="button" onclick="window.location.href='index.php'" class="cancel-button">Cancel</button>
    </form>
</div>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        var errorMessage = "<?php echo $error_message; ?>";
        var successMessage = "<?php echo $success_message; ?>";
        if (errorMessage) {
            var errorPopup = document.getElementById("errorPopup");
            errorPopup.style.display = "block";
            setTimeout(function() {
                errorPopup.style.display = "none";
            }, 1800); 
        }
        if (successMessage) {
            var successPopup = document.getElementById("successPopup");
            successPopup.style.display = "block";
            setTimeout(function() {
                successPopup.style.display = "none";
            }, 1800); 
        }
    });
</script>

</body>
</html>
