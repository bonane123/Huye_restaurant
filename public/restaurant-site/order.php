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
<!-- order section starts  -->

<section class="order" id="order">

    <h1 class="heading"> <span>order</span> now </h1>

    <div class="row">

        <div class="image">
            <img src="../images/delivery.jpg" alt="">
        </div>

        <form action="">

            <div class="inputBox">
                <input type="text" placeholder="name">
                <input type="email" placeholder="email">
            </div>

            <div class="inputBox">
                <input type="number" placeholder="number">
                <input type="text" placeholder="food name">
            </div>

            <textarea placeholder="address" name="" id="" cols="30" rows="10"></textarea>

            <input type="submit" value="order now" class="btn">

        </form>

    </div>

</section>

<!-- order section ends -->






<!-- footer section  -->
<?php
include("../php-folder/footer.php"); ?>