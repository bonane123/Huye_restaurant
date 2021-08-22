<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>
    <link rel="stylesheet" text="text/css" href="style.css">
    <script src="https://kit.fontawesome.com/a870d82cb7.js" crossorigin="anonymous"></script>
</head>

<body>
    <!--header section starts -->
    <header>
        <a href="#" class="logo"><i class="fas fa-utensils"></i>Food</a>
        <div class="search" id="dark" onclick="change()">
            <p id="mode">Dark Mode</p>
            <img src="../images/moon.png" alt="" id="icon">
        </div>
        <div id="menu-bar" class="fas fa-bars"></div>
        <nav class="navbar">

            <a href="../restaurant-site/home.php">Categories</a>
            <a href="../restaurant-site/menu.php">Menu</a>

            <a href="../restaurant-site/order.php">Order</a>

            <script>
                var mode = document.getElementById("mode");
                var icon = document.getElementById("dark");
                var image = document.getElementById("icon");

                function change() {
                    document.body.classList.toggle("dark-theme");
                    if (document.body.classList.contains("dark-theme")) {
                        var light = "Light Mode"
                        mode.innerHTML = light;
                        image.src = "../images/sun.png";

                    }
                }
            </script>