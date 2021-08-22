<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>
    <link rel="stylesheet" text="text/css" href="admin_style.css">

    <script src="https://kit.fontawesome.com/a870d82cb7.js" crossorigin="anonymous"></script>
</head>

<body>
    <h1 class="titlebar">
        <i class="fas fa-cookie-bite"></i>
        <p id="note">Huye Restaurants Management System</p>
    </h1>
    <!--header section starts -->
    <section class="dashboard" id="menu">
        <div class="container">
            <div class="dash-box">
                <header>
                    <nav>
                        <ul>
                            <li><i class="fas fa-utensils"></i><a href="dashboard.php">Restaurants</a></li>
                            <li><i class="fas fa-align-center"></i><a href="admin_category.php">Categories</a></li>
                            <li><i class="fas fa-calendar-minus"></i><a href="admin_menu.php">Menu</a></li>
                            <li><i class="fas fa-shopping-cart"></i><a href="admin_order.php">Orders</a></li>

                            <li><i class="fas fa-user-cog"></i><a href="admin_users.php">ManageUsers</a></li>
                            <li><i class="fas fa-sign-out-alt"></i><a href="admin_logout.php">Logout</a></li>

                        </ul>
                    </nav>
                </header>
            </div>