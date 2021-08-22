<?php
session_start();
include("../php-folder/connect.php");
include("../php-folder/function.php");
include("../php-folder/header.php");
$user_data = check_login($connection);
?>
<!--home section starts -->
<a href="../signin/logout.php"> <i class="fas fa-sign-out-alt"></i>Logout (<?php echo $user_data['username']; ?>)</a>

</nav>
</header>
<section class="home" id="home">
    <div class="content">
        <h3>WELCOME TO HUYE RESTAURANTS</h3>
        <p>
            <table border="1">

                <tr>
                    <th>Restaurant</th>
                    <th>Working Hours</th>
                    <th>Cell</th>

                </tr>
                <?php
                $query = "select * from restaurants";
                $result = mysqli_query($connection, $query);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $query2 = "select * from cells where cell_id =" . $row['cell_id'];
                        $result2 = mysqli_query($connection, $query2);
                        while ($ro = mysqli_fetch_assoc($result2)) {
                ?>
                            <tr>
                                <td><?php echo $row['restaurant_name']; ?></td>
                                <td><?php echo $row['working_hours']; ?></td>
                                <td><?php echo $ro['cell_name']; ?></td>

                            </tr>
                    <?php }
                    }
                    ?>
                <?php
                } ?>
            </table>
            <br>

            <a href="#" class="btn">order now</a>
            <div class="image">
                <img src="../images/backimage.jpg" alt="delicious">
            </div>
    </div>
</section>

<!--home section ends-->
<section class="speciality" id="speciality">

    <h1 class="heading"> our <span>speciality</span> </h1>

    <div class="box-container">

        <div class="box">
            <img class="image" src="../images/s-img-1.jpg" alt="">
            <div class="content">
                <img src="../images/s-1.png" alt="">
                <h3>Burger</h3>
                <p>a dish consisting of a flat round cake of minced beef, or sometimes another savoury ingredient,
                    that is fried or grilled and served in a split bun or roll with various condiments and toppings.</p>
            </div>
        </div>
        <div class="box">
            <img class="image" src="../images/s-img-2.jpg" alt="">
            <div class="content">
                <img src="../images/s-2.png" alt="">
                <h3>Pizza</h3>
                <p> Italian dish consisting of a usually round, flattened base of leavened wheat-based dough topped with tomatoes,
                    cheese, and often various other ingredients such as anchovies, mushrooms, onions, pineapple.
                </p>
            </div>
        </div>
        <div class="box">
            <img class="image" src="../images/ice-cream.jpg" alt="">
            <div class="content">
                <img src="../images/s-3.png" alt="">
                <h3>Ice-cream</h3>
                <p>a very cold, sweet food made from frozen milk or cream, sugar, and a flavour:<br>
                    a tub of ice cream<br>
                    chocolate chip/vanilla ice cream</p>
            </div>
        </div>
        <div class="box">
            <img class="image" src="../images/s-img-4.jpg" alt="">
            <div class="content">
                <img src="../images/s-4.png" alt="">
                <h3>Drinks</h3>
                <p>We have different drinks you can wish to take such as Water.
                    Milk, Soft drinks, Juice and juice drinks, Beer, Cider, Wine, Spirits, cocktail, cold chocolate.</p>
            </div>
        </div>
        <div class="box">
            <img class="image" src="../images/Best.jpg" alt="">
            <div class="content">
                <img src="../images/s-5.png" alt="">
                <h3>Sweets</h3>
                <p>sweet food made from flour, sugar, and other ingredients, that is usually baked.
                    In their oldest forms, cakes were modifications of bread,
                </p>
            </div>
        </div>
        <div class="box">
            <img class="image" src="../images/s-img-6.jpg" alt="">
            <div class="content">
                <img src="../images/s-6.png" alt="">
                <h3>Breakfast</h3>
                <p>Here are the best foods you can eat in the morning.
                    Eggs, Greek yogurt, Greek Yogurt is creamy, Coffee is an amazing beverage to start your day
                    Green Tea.</p>
            </div>
        </div>

    </div>

</section>

<!-- speciality section ends -->
<!-- popular section starts  -->

<section class="popular" id="popular">

    <h1 class="heading"> most <span>popular</span> foods </h1>

    <div class="box-container">

        <div class="box">
            <span class="price"> (1000-2000)RWF </span>
            <img src="../images/cassava-flour.jpg" alt="">
            <h3>Cassava Flour</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="#" class="btn">order now</a>
        </div>
        <div class="box">
            <span class="price"> (1500-3000)RWF </span>
            <img src="../images/chicken-food.jpg" alt="">
            <h3>Chicken</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="#" class="btn">order now</a>
        </div>
        <div class="box">
            <span class="price"> (2000-3000)RWF </span>
            <img src="../images/chips.jpg" alt="">
            <h3>Chips</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="#" class="btn">order now</a>
        </div>
        <div class="box">
            <span class="price"> (1000-2500)RWF </span>
            <img src="../images/Cassava.jpg" alt="">
            <h3>Cassava</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="#" class="btn">order now</a>
        </div>
        <div class="box">
            <span class="price"> (3500-4000)RWF </span>
            <img src="../images/irish.jpg" alt="">
            <h3>Irish</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="#" class="btn">order now</a>
        </div>
        <div class="box">
            <span class="price"> 9000RWF</span>
            <img src="../images/rice.jpg" alt="">
            <h3>Rice</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="#" class="btn">order now</a>
        </div>

    </div>

</section>

<!-- popular section ends -->
<!-- steps section starts  -->

<div class="step-container">

    <h1 class="heading">how it <span>works</span></h1>

    <section class="steps">

        <div class="box">
            <img src="../images/step-1.jpg" alt="">
            <h3>choose your favorite food</h3>
        </div>
        <div class="box">
            <img src="../images/step-2.jpg" alt="">
            <h3>free and fast delivery</h3>
        </div>
        <div class="box">
            <img src="../images/step-3.jpg" alt="">
            <h3>easy payments methods</h3>
        </div>
        <div class="box">
            <img src="../images/step-4.jpg" alt="">
            <h3>and finally, enjoy your food</h3>
        </div>

    </section>

</div>

<!-- steps section ends -->
<!-- gallery section starts  -->

<section class="gallery" id="gallery">

    <h1 class="heading"> our food <span> gallery </span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="../images/spaghetti.jpg" alt="">
            <div class="content">
                <h3>Spaghetti</h3>
                <p>Spaghetti is a long, thin, solid, cylindrical pasta. It is a staple food of traditional Italian cuisine.</p>
                <a href="#" class="btn">ordern now</a>
            </div>
        </div>
        <div class="box">
            <img src="../images/fish.jpg" alt="">
            <div class="content">
                <h3>Fish</h3>
                <p>They do well on a staple of flake food, but also like nibbling algae wafers. For a fresh option,
                    you can supplement your fish's diet with lettuce.</p>
                <a href="#" class="btn">ordern now</a>
            </div>
        </div>
        <div class="box">
            <img src="../images/Scrambled-Eggs.jpg" alt="">
            <div class="content">
                <h3>Scrambled Eggs</h3>
                <p>Scrambled eggs is a dish made from eggs stirred, whipped or beaten together while being gently heated,
                    typically with salt, butter and sometimes other ingredients</p>
                <a href="#" class="btn">ordern now</a>
            </div>
        </div>
        <div class="box">
            <img src="../images/g-4.jpg" alt="">
            <div class="content">
                <h3>Dessert</h3>
                <p>dessert, the last course of a meal. In the United States dessert
                    is likely to consist of pastry, cake, ice cream, pudding, or fresh or cooked fruit.</p>
                <a href="#" class="btn">ordern now</a>
            </div>
        </div>
        <div class="box">
            <img src="../images/sald.jpg" alt="">
            <div class="content">
                <h3>Salad</h3>
                <p>Easy Pasta Salad. As its name suggests, this one is a breeze to make.
                    Rainbow Orzo Salad. Diced mango adds a surprising sweet twist to this colorful orzo.</p>
                <a href="#" class="btn">ordern now</a>
            </div>
        </div>
        <div class="box">
            <img src="../images/g-6.jpg" alt="">
            <div class="content">
                <h3>Meat</h3>
                <p>A breast quarter contains the breast, wing and portion of the back;
                    a breast has the back portion and wing removed</p>
                <a href="#" class="btn">ordern now</a>
            </div>
        </div>
        <div class="box">
            <img src="../images/matoke.jpg" alt="">
            <div class="content">
                <h3>Matoke</h3>
                <p>East African Highland bananas are so important as food crops, the local name matoke.</p>
                <a href="#" class="btn">ordern now</a>
            </div>
        </div>
        <div class="box">
            <img src="../images/g-8.jpg" alt="">
            <div class="content">
                <h3>Chocolate</h3>
                <p>Still, chocolate's reputation is on the rise, as a growing number of studies suggest that it can be a heart-healthy choice.</p>
                <a href="#" class="btn">ordern now</a>
            </div>
        </div>


    </div>

</section>

<!-- gallery section ends -->


<!-- footer section  -->
<?php
include('../php-folder/footer.php');
?>