 <?php
    include("../php-folder/connect.php");
    //include("../php-folder/function.php");
    include("../php-folder/header.php");
    ?>


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
                 <h1>Table Menu</h1>

                 <?php

                    $query = "SELECT menu_food.food_name, menu_food.origin, menu_food.description, menu_food.price FROM menu_food JOIN menu_categories ON menu_food.food_id = menu_categories.category_id";
                    $result = mysqli_query($connection, $query);
                    if ($result && mysqli_num_rows($result) > 0) {
                        echo "You are connected";
                        while ($row = mysqli_fetch_row($result)) {
                    ?>
                         <tr>
                             <td><?php echo $row['food_name']; ?></td>
                             <td><?php echo $row['origin']; ?></td>
                             <td><?php echo $row['description']; ?></td>
                             <td><?php echo $row['price']; ?></td>
                         </tr>
                 <?php
                        }
                    } else {
                        echo "Failed";
                    }
                    ?>

             </center>
             <table>
                 <tr id="header">

















                     <?php
                        include("../php-folder/footer.php");
                        ?>