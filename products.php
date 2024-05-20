<?php
include_once "./auth/config.php";
$conn = mysqli_connect("localhost", "root", "", "berwashop");

$select = mysqli_query($conn, "SELECT * FROM product");
$tbody = '';
$num_rows = '';
$a = 1;

if ($select) {
    $num_rows = mysqli_num_rows($select);

    if ($num_rows > 0) {
        while ($fetch = mysqli_fetch_assoc($select)) {
            $tbody .= "<tr>
            <td>" . $a++ . "</td>
            <td>" . htmlspecialchars($fetch["ProductName"]) . "</td>
            <td class='text-center'>
            <a href='update.php?ProductCode=" . $fetch['ProductCode'] . "' class='btn btn-warning btn-sm'>Update</a>
            <a href='delete.php?ProductCode=" . $fetch['ProductCode'] . "' class='btn btn-danger btn-sm'>Delete</a>
            <a href='import.php?ProductCode=" . $fetch['ProductCode'] . "' class='btn btn-primary btn-sm'>Import</a>
            </td>
        </tr>";
        }
    } else {
        $tbody .= '<tr><td colspan="3" class="text-center font-weight-bold">No Products found</td></tr>';
    }
} else {
    echo "Not selected";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Admin Dashboard - Products</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/products.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .navbar {
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 1rem;
        }

        .navbar-inner {
            width: 100%;
            display: flex;
            justify-content: space-between;
        }

        .logo-text {
            font-weight: 600;
            color: #1f2937;
        }

        .primary-nav a,
        .secondary-nav a {
            color: #4b5563;
            padding: 0.75rem 1rem;
            text-decoration: none;
            transition: all 0.2s ease;
        }

        .primary-nav a:hover,
        .secondary-nav a:hover {
            background-color: #edf2f7;
            color: #1f2937;
        }

        .secondary-nav a {
            background-color: #3b82f6;
            color: #fff;
            border-radius: 0.375rem;
        }

        .secondary-nav a:hover {
            background-color: #2563eb;
        }

        .container {
            max-width: 900px;
            margin: 2rem auto;
            padding: 1rem;
            background-color: #fff;
            border-radius: 0.5rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .head {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
        }

        table {
            width: 100%;
            margin-top: 1rem;
        }

        th,
        td {
            padding: 0.75rem;
            text-align: left;
        }

        th {
            background-color: #f1f1f1;
            border-bottom: 2px solid #dee2e6;
        }

        td {
            border-bottom: 1px solid #dee2e6;
        }

        .text-center {
            text-align: center;
        }

        .font-weight-bold {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <nav class="navbar">
        <div class="navbar-inner">
            <div class="logo">
                <span class="logo-text">Berwa Shop</span>
            </div>
            <div class="primary-nav">
                <a href="./index.php">Home</a>
                <a href="./products.php">Products</a>
                <a href="./productin.php">Product In</a>
                <a href="./productout.php">Product Out</a>
            </div>
            <div class="secondary-nav">
                <a href="./auth/logout.php">Logout</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="head">
            <h2>Products</h2>
            <a href="./addproduct.php" class="btn btn-info">Add New Product</a>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Product Name</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php echo $tbody; ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2LcX9hYj6Dew/3Cqu5d5GEn5e2snJp4YLnf2gyR6E7" crossorigin="anonymous">
        </script>
</body>

</html>