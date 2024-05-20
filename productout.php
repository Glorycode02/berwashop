<?php
include_once "./auth/config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/productin.css">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        .text-center {
            text-align: center;
        }

        .import-btn {
            display: inline-block;
            padding: 10px 20px;
            background: dodgerblue;
            border-radius: 5px;
            color: #fff;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .import-btn:hover {
            background-color: darkblue;
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

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Export Date</th>
                <th>Quantity</th>
                <th>Unique Price</th>
                <th>Total price</th>
                <th>Product Code</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            //  echo $tbody 
             ?>
        </tbody>
    </table>
</body>

</html>