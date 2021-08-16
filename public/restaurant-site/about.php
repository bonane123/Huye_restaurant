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
<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading"> our customers <span>reviews</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="../images/custom1.jpg" alt="">
            <h3>Peter</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <p>Huye restaurant is amoung the best restaurant in the region i have seen</p>
        </div>
        <div class="box">
            <img src="../images/custom2.jpg" alt="">
            <h3>Aline and Aline</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <p>To have a lunch at Huye Restaurant is the best thing at Campus.</p>
        </div>
        <div class="box">
            <img src="../images/custom3.jpg" alt="">
            <h3>Marry</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <p>All Credits to people who establish this restaurant in the region. </p>
        </div>

    </div>

</section>

<!-- review section ends -->




<!-- footer section  -->
<?php
include("../php-folder/footer.php");
?>