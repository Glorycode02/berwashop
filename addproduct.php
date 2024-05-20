<?php
$conn = mysqli_connect("localhost", "root", "", "berwashop");

session_start();

if (isset($_POST['add'])) {
    $pname = mysqli_real_escape_string($conn, $_POST['pname']);

    if (!empty($pname)) {
        $insert = mysqli_query($conn, "INSERT INTO product (ProductName) VALUES ('$pname')");
        $message = $insert ? "Product inserted successfully" : "Product not inserted";
    } else {
        $message = "Product name cannot be empty";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product - Berwa Shop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            max-width: 500px;
            width: 100%;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .container h1 {
            font-size: 1.75rem;
            margin-bottom: 1rem;
            color: #333;
        }

        .container p {
            margin-bottom: 1rem;
            color: #555;
        }

        .form-group label {
            font-weight: 600;
        }

        .form-group input {
            border-radius: 4px;
        }

        .btn-primary {
            width: 100%;
            padding: 10px;
            border-radius: 4px;
        }

        .message {
            margin-top: 20px;
        }

        .link {
            text-align: center;
            margin-top: 10px;
        }

        .link a {
            color: #007bff;
            text-decoration: none;
        }

        .link a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="" method="POST">
            <h1>Berwa Shop</h1>
            <p>Add your products</p>
            <?php if (isset($message)): ?>
                <div class="alert alert-info message"><?php echo $message; ?></div>
            <?php endif; ?>
            <div class="form-group">
                <label for="pname">Product Name</label>
                <input type="text" class="form-control" id="pname" name="pname" placeholder="Product name" required>
            </div>
            <button type="submit" name="add" class="btn btn-primary">Add Product</button>
            <div class="link">
                <p><a href="./products.php">Back to products</a></p>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2LcX9hYj6Dew/3Cqu5d5GEn5e2snJp4YLnf2gyR6E7" crossorigin="anonymous">
        </script>
</body>

</html>