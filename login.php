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

    $sql = "SELECT * FROM login WHERE username=? AND password=?";
    $stmt = mysqli_prepare($data, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $username, $password);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    if ($row) {
        if ($row["usertype"] == "user") {
            $_SESSION["user_id"] = $row["id"];
            $_SESSION["username"] = $username;
            $success_message = "Login successful!";
            header("Refresh: 2; URL=userhome.php");
        } elseif ($row["usertype"] == "admin") {
            $_SESSION["username"] = $username;
            $success_message = "Login successful!";
            header("Refresh: 2; URL=admin/adminhome.php");
        }
    } else {
        $error_message = "Username or password incorrect";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login Form</title>
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
.loginbox {
    width: 320px;
    height: 420px;
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
.loginbox p {
    margin: 0;
    padding: 0;
    font-weight: bold;
}
.loginbox input, .loginbox button {
    width: 100%;
    margin-bottom: 20px;
    height: 40px;    
}
.loginbox input[type="text"], input[type="password"] {
    border: none;
    border-bottom: 1px solid #f56ff;
    background: transparent;
    outline: none;
    color: #fff;
    font-size: 16px;
}
.btn {
    border: none;
    border-radius: 20px;
    background: #fb2525;
    outline: none;
    color: #fff;
    font-size: 16px;
    height: 40px;
    line-height: 40px;
    text-align: center;
}
.btn:hover {
    cursor: pointer;
    background-color: #ffe107;
    color: #fff;
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

<div class="loginbox">
    <img src="https://cdn1.iconfinder.com/data/icons/elevator/154/elevator-user-man-ui-round-login-1024.png" alt="User Icon">
    <h1>Login Form</h1>
    <form name="form1" action="#" method="post">
        <p>Username</p>
        <input type="text" name="username" placeholder="Enter username" required>
        <p>Password</p>
        <input type="password" name="password" placeholder="Enter password" required>
        <input type="submit" name="submit" value="Login" class="btn">
        <button type="button" onclick="resetAndRedirect()" class="btn">Cancel</button>
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

    function resetAndRedirect() {
        document.form1.reset();  // Reset the form fields
        window.location.href = 'index.php';  // Redirect to index.php
    }
</script>

</body>
</html>
