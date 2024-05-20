<?php
include_once "./auth/config.php";
$conn = mysqli_connect("localhost", "root", "", "berwashop");

$code = $_GET['ProductCode'];

$select = mysqli_query($conn, "SELECT * FROM product WHERE `ProductCode` = $code");
$fetch = mysqli_fetch_assoc($select);

$select2 = mysqli_query($conn, "SELECT * FROM productin WHERE `ProductCode` = $code");
$fetch2 = mysqli_fetch_assoc($select2);

$form = '
<div class="container">
    <form action="" method="POST">
        <h1>Berwa Shop</h1>
        <p>Export your products from the store</p>
        <div class="form-group">
            <label for="pid">Product Id</label>
            <input type="text" id="pid" class="form-control" placeholder="Product Id" name="pid" value="' . $fetch['ProductCode'] . '" disabled>
        </div>
        <div class="form-group">
            <label for="pname">Product Name</label>
            <input type="text" id="pname" class="form-control" placeholder="Product Name" name="pname" value="' . $fetch['ProductName'] . '" disabled>
        </div>
        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" id="date" class="form-control" placeholder="Date" name="date">
        </div>
        <div class="form-group">
            <label for="quant">Quantity</label>
            <input type="text" id="quant" class="form-control" placeholder="Quantity" name="quant" value="' . $fetch2['Quantity'] . '">
        </div>
        <div class="form-group text-center">
            <button type="submit" name="export" class="btn btn-primary">Export Product</button>
        </div>
        <div class="text-center">
            <a href="./productout.php" class="btn btn-link">Back to Product Out</a>
        </div>
    </form>
</div>
';

if (isset($_POST['export'])) {
    $date = $_POST['date'];
    $quantity = $fetch2['Quantity'] - $_POST['quant'];
    $total = $quantity * $unit;

    $export = mysqli_query($conn, "UPDATE productin SET `TotalPrice`= $total, `ProductCode` = $code WHERE `ProductCode` = $code");
    $insert = mysqli_query($conn, "INSERT INTO productout (`Date`, `Quantity`, `TotalPrice`, `ProductCode`) VALUES ('$date', '$quantity', '$total', '$code')");
    if ($export && $insert) {
        echo "<div class='alert alert-success text-center'>Exported successfully</div>";
    } else {
        echo "<div class='alert alert-danger text-center'>Not exported</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Export Product - Berwa Shop</title>
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
        }

        h1 {
            text-align: center;
            margin-bottom: 1rem;
            color: #333;
        }

        p {
            text-align: center;
            margin-bottom: 1rem;
            color: #555;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-control {
            border-radius: 4px;
        }

        .btn-primary {
            width: 100%;
            padding: 10px;
            border-radius: 4px;
        }

        .text-center {
            text-align: center;
        }

        .btn-link {
            color: #007bff;
            text-decoration: none;
        }

        .btn-link:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <?php echo $form ?>
</body>

</html>