<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
        }

        .dashboard {
            display: flex;
            flex-wrap: wrap;
            /* Allow cards to wrap on smaller screens */
            justify-content: space-between;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 1rem;
        }

        .card {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: calc(33% - 1rem);
            /* Calculate width based on 3 columns */
            margin-bottom: 1rem;
            padding: 1rem;
        }

        .card-header {
            padding: 0.75rem 1rem;
            border-bottom: 1px solid #ddd;
        }

        .card-header h2 {
            margin-bottom: 0;
            font-size: 1rem;
        }

        .card-body {
            padding: 1rem;
        }

        .card-body ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .card-body li {
            margin-bottom: 0.5rem;
        }

        .chart-placeholder {
            /* Placeholder for your chart library styles */
            height: 100px;
            background-color: #eee;
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
        <div class="dashboard">
            <div class="card">
                <h2>Welcome to the Admin Dashboard</h2>
                <p>Manage your products and orders with ease.</p>
            </div>
            <div class="card">
                <h2>Total Products</h2>
                <p class="number">245</p>
            </div>
            <div class="card">
                <h2>Total Orders</h2>
                <p class="number">127</p>
            </div>
            <div class="card">
                <h2>Revenue</h2>
                <p class="number">$12,540</p>
            </div>
            <div class="card">
                <h2>New Users</h2>
                <p class="number">15</p>
            </div>
            <div class="card">
                <h2>Pending Approvals</h2>
                <p class="number">3</p>
            </div>
            <div class="card">
                <h2>Messages</h2>
                <p class="number">7</p>
            </div>
        </div>
    </section>
</body>

</html>