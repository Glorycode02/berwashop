<?php
$conn = mysqli_connect("localhost", "root", "", "berwashop");

session_start();

if (isset($_SESSION['ShopkeeperId'])) {
    header("Location: ../index.php");
}

if (isset($_POST['login'])) {
    $uname = $_POST['sname'];
    $pass = $_POST['pswrd'];

    $check = mysqli_query($conn, "SELECT * FROM shopkeeper WHERE UserName='$uname' AND `Password`='$pass'");

    if (mysqli_num_rows($check) == 1) {
        $_SESSION['ShopkeeperId'] = $uname;
        header("Location: ../index.php");
    } else {
        echo "<script>alert('Invalid Credentials')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
    <div class="container">
        <form action="" method="POST">
            <h1>Berwa shop </h1>
            <p>Login to your account</p>
            <div class="div1">
                <label>Username</label>
                <input type="text" placeholder="User name" name="sname">
            </div>
            <div class="div2">
                <label>Password</label>
                <input type="password" placeholder="Password" name="pswrd">
            </div>
            <div class="submit">
                <input type="submit" value="Login" name='login' class="login">
            </div>
            <div class="link">
                <p>Don't have an account? <a href="./signup.php">Signup</a></p>
            </div>
        </form>
    </div>
</body>

</html>