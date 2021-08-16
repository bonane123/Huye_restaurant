<?php
include("../restoproj/php-folder/connect.php");
include("../restoproj/php-folder/function.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Restaurants Management system Content</h1><br>
    <h3>Manage Content</h3>


    <section class="menu" id="menu">
        <div class="menu-container">
            <div class="menu-content">
                <center>
                    <h1>Menu of your favourite</h1>
                </center>
                <p>Dished on the table shows all food from local to international level
                    you can choose due to your favourite because Huye Restaurant is diverse.
                    pretty sure, meals and drinks will maintain your good healthy. </p>
                <img src="../images/restaurant.jpg" alt="restaurant-image">
            </div>
            <div class="menu-content">
                <center>
                    <h1>Food Categories</h1>
                    <table>
                        <tr id="header">
                            <th>Food</th>
                            <th>Origin</th>
                            <th>Description</th>
                            <th>Price(RWF)</th>
                        </tr>
                        <?php
                        if (isset($_GET['categoryID'])) {
                            $categoryID = $_GET['categoryID'];
                            $query2 =  "SELECT * FROM menu_food where category_id = {$categoryID}";
                            $result2 = mysqli_query($connection, $query2);
                            if ($result2 && mysqli_num_rows($result2)) {
                                while ($row = mysqli_fetch_assoc($result2)) {
                        ?>
                                    <tr>
                                        <td><?php echo $row['food_name']; ?></td>
                                        <td><?php echo $row['origin']; ?></td>
                                        <td><?php echo $row['description']; ?></td>
                                        <td><?php echo $row['price']; ?></td>
                                    </tr>
                        <?php
                                }
                            }
                        }
                        ?>
                </center>
                </table>
            </div>
        </div>
        <div>
            <h2>Manage Page</h2>
        </div>
    </section>

    <?php
    include("../restoproj/php-folder/footer.php"); ?>