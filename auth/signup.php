<?php
$conn = mysqli_connect("localhost", "root", "", "berwashop");

session_start();

if (isset($_SESSION['ShopkeeperId'])) {
    header("Location: ../index.php");
}

if (isset($_POST['signup'])) {
    $sname = $_POST['sname'];
    $pass = $_POST['pswrd'];

    $signup = mysqli_query($conn, "INSERT INTO shopkeeper VALUES('', '$sname','$pass')");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="../css/signup.css">
</head>
<body>
<div class="container">
        <form action="" method="POST">
            <h1>Berwa shop </h1>
            <p>Sign up your account</p>
            <div class="div1">
                <label>Username</label>
                <input type="text" placeholder="User name" name="sname">
            </div>
            <div class="div2">
                <label>Password</label>
                <input type="password" placeholder="Password" name="pswrd">
            </div>
            <div class="submit">
                <input type="submit" value="Sign up" name='signup' class="login">
            </div>
            <div class="link">
                <p>Already have an account? <a href="./login.php">Login</a></p>
            </div>
        </form>
    </div>
</body>
</html>