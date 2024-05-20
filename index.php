<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/index.css">
    <style>
        .navbar {
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
        }

        .navbar-inner {
            width: 60rem;
            margin: 0 auto;
            padding: 1rem;
            display: flex;
            justify-content: space-between;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo-text {
            font-weight: 600;
            color: #1f2937;
            margin-left: 0.5rem;
        }

        .primary-nav a {
            color: #4b5563;
            padding: 0.75rem 1rem;
            text-decoration: none;
            transition: all 0.2s ease;
        }

        .primary-nav a:hover {
            background-color: #edf2f7;
            color: #1f2937;
        }

        .secondary-nav a {
            background-color: #3b82f6;
            color: #fff;
            padding: 0.5rem 1rem;
            border-radius: 0.375rem;
            text-decoration: none;
            transition: all 0.2s ease;
        }

        .secondary-nav a:hover {
            background-color: #2563eb;
        }

        .container {
            padding: 2rem;
            margin-top: 50px;
            width: 100%;
        }

        .admin-section {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .admin-card {
            flex: 1;
            min-width: 200px;
            padding: 1rem;
            background-color: #f9fafb;
            border: 1px solid #e5e7eb;
            border-radius: 0.375rem;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
        }

        .admin-card h5 {
            margin-bottom: 1rem;
            color: #1f2937;
        }

        .admin-card p {
            margin: 0;
            color: #4b5563;
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
    <section class="container">
        <div class="admin-section">
            <div class="admin-card">
                <h5>Total Products</h5>
                <p>2450</p>
            </div>
            <div class="admin-card">
                <h5>Total Orders</h5>
                <p>1500</p>
            </div>
            <div class="admin-card">
                <h5>Revenue</h5>
                <p>$12,540</p>
            </div>
            <div class="admin-card">
                <h5>New Users</h5>
                <p>1500</p>
            </div>
            <div class="admin-card">
                <h5>Pending Approvals</h5>
                <p>3000</p>
            </div>
            <div class="admin-card">
                <h5>Messages</h5>
                <p>750</p>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2LcX9hYj6Dew/3Cqu5d5GEn5e2snJp4YLnf2gyR6E7" crossorigin="anonymous">
        </script>
</body>

</html>