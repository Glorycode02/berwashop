<?php
$conn = mysqli_connect("localhost", "root", "", "berwashop");

$select = mysqli_query($conn, "SELECT * FROM productin");
$tbody = '';
$num_rows = '';
$a = 1;

if ($select) {
    $num_rows = mysqli_num_rows($select);

    if ($num_rows > 0) {
        while ($fetch = mysqli_fetch_assoc($select)) {
            $tbody .= "<tr>
            <td>" . $a++ . "</td>
            <td>" . $fetch["Date"] . "</td>
            <td>" . $fetch["Quantity"] . "</td>
            <td>" . $fetch["UniquePrice"] . "</td>
            <td>" . $fetch["TotalPrice"] . "</td>
            <td>" . $fetch["ProductCode"] . "</td>
            <td class='text-align:center;'>
            <a href='export.php?ProductCode=" . $fetch['ProductCode'] . "' class='import'>Export</a>
            </td>
        </tr></br>";
        }
    } else {
        $tbody .= '<tr><td colspan="3" style="text-align:center; font-weight:bold;">No Products found</td></tr>';
    }
} else {
    echo "Not selected";
}
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
            margin-top: 2rem;
        }

        th,
        td {
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .import {
            padding: 10px 20px;
            background: dodgerblue;
            border-radius: 10px;
            color: #fff;
        }

        .import:hover {
            text-decoration: none;
            color: #fff;

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
                <th>Import Date</th>
                <th>Quantity</th>
                <th>Unique Price</th>
                <th>Total price</th>
                <th>Product Code</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php echo $tbody ?>
        </tbody>
    </table>
</body>

</html>