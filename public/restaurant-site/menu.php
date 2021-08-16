<?php
session_start();
include("../php-folder/connect.php");
include("../php-folder/function.php");
include("../php-folder/header.php");
$user_data = check_login($connection);
?>
<a href="../signin/logout.php"> <i class="fas fa-sign-out-alt"></i>Logout (<?php echo $user_data['username']; ?>)</a>

</nav>
</header>

<section class="menu" id="menu">
    <div class="menu-container">
        <div class="menu-content">
            <center>
                <h1>Categories</h1>
            </center>
            <?php
            $query = "SELECT * FROM menu_categories";
            $result = mysqli_query($connection, $query);
            $data = mysqli_num_rows($result);
            if ($data != 0) {
                //echo "There is something in the database";
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <a href="../restaurant-site/menu.php?categoryID=<?php echo $row['category_id']; ?> " id="category">
                        <p><?php echo $row['category_name']; ?></p>
                    </a><br>



            <?php
                }
            } else {
                echo "No thing found";
            }
            ?>
            <img src=" ../images/restaurant.jpg" alt="restaurant-image">
        </div>
        <div class="menu-content">
            <center>
                <h1>Table Menu</h1>
            </center>
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

            </table>
        </div>
    </div>
</section>
<section class="video">
    <h1 class="heading"> Videos on the<span>Table-Menu </span> </h1>
    <div class="video-list">
        <div class="video-box">
            <p>spaghetti</p>
            <video src="../video/Cooking - 11656.mp4" width="320" height="240" controls></video>
        </div>
        <div class="video-box">
            <p>Burger</p>
            <video src="../video/Hamburger - 1015.mp4" width="320" height="240" controls></video>
        </div>
        <div class="video-box">
            <p>Pizza</p>
            <video src="../video/Pizza - 75407.mp4" width="320" height="240" controls></video>
        </div>
        <div class="video-box">
            <p>Meat</p>
            <video src="../video/Roast - 11620.mp4" width="320" height="240" controls></video>
        </div>
        <div class="video-box">
            <p>Cake</p>
            <video src="../video/Wedding Cake - 29472.mp4" width="320" height="240" controls></video>
        </div>
        <div class="video-box">
            <p>Fish</p>
            <video src="../video/Chinese - 11700.mp4" width="320" height="240" controls></video>
        </div>
        <div class="video-box">
            <p>Coffee</p>
            <video src="../video/Coffee - 4854.mp4" width="320" height="240" controls></video>
        </div>
        <div class="video-box">
            <p>Tea</p>
            <video src="../video/Lemonade - 2290.mp4" width="320" height="240" controls></video>
        </div>
        <div class="video-box">
            <p>Ice-cream</p>
            <video src="../video/Man - 71753.mp4" width="320" height="240" controls></video>
        </div>
    </div>
</section>








<!-- footer section  -->
<?php
include("../php-folder/footer.php");
?>