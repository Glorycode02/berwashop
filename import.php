<?php
include_once "./auth/config.php";
$conn = mysqli_connect("localhost", "root", "", "berwashop");

$code = $_GET['ProductCode'];

$select = mysqli_query($conn, "SELECT * FROM product WHERE `ProductCode` = $code");
$fetch = mysqli_fetch_assoc($select);

$form = '
<div class="container">
    <form action="" method="POST">
        <h1>Berwa Shop</h1>
        <p>Import your products to the store</p>
        <div class="form-group">
            <label for="pid">Product Id</label>
            <input type="text" id="pid" class="form-control" name="pid" value="' . $fetch['ProductCode'] . '" disabled>
        </div>
        <div class="form-group">
            <label for="pname">Product Name</label>
            <input type="text" id="pname" class="form-control" name="pname" value="' . $fetch['ProductName'] . '" disabled>
        </div>
        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" id="date" class="form-control" name="date" required>
        </div>
        <div class="form-group">
            <label for="quant">Quantity</label>
            <input type="number" id="quant" class="form-control" name="quant" required>
        </div>
        <div class="form-group">
            <label for="unit">Unit Price</label>
            <input type="number" id="unit" class="form-control" name="unit" required>
        </div>
        <div class="form-group text-center">
            <button type="submit" name="import" class="btn btn-primary">Import Product</button>
        </div>
        <div class="text-center">
            <a href="./productin.php" class="btn btn-link">Back to Product In</a>
        </div>
    </form>
</div>
';

if (isset($_POST['import'])) {
    $date = $_POST['date'];
    $quantity = $_POST['quant'];
    $unit = $_POST['unit'];
    $total = $quantity * $unit;

    $import = mysqli_query($conn, "INSERT INTO productin (`Date`, `Quantity`, `UnitPrice`, `TotalPrice`, `ProductCode`) VALUES ('$date', '$quantity', '$unit', '$total', '$code')");
    if ($import) {
        echo "<div class='alert alert-success text-center'>Imported successfully</div>";
    } else {
        echo "<div class='alert alert-danger text-center'>Not imported</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Import Product - Berwa Shop</title>
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