<!--home section starts -->
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
            <a href="../restaurant-site/home.php">Home</a>
            <a href="../restaurant-site/restaurant.php">Restaurants</a>
            <a href="../restaurant-site/menu.php">About</a>
            <a href="../restaurant-site/about.php">Contact US</a>
            <a href="../signin/login.php">Login</a>

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


        </nav>
    </header>
    <section class="home" id="home">
        <div class="content">
            <h3>WELCOME TO HUYE RESTAURANTS</h3>
            <p>
                Set in an urban oasis within the city center/business district.
                This contemporary Restaurant is in University Campus and 2km from Campus
                The CHUB Hospital, Huye stadium, Huye modern market
                and the Rwanda Museum are all close by. Whether you get one of our bright and airy classic food
                or one of our stunning drinks you’ll enjoy the friendly Huye welcome in a safe and relaxing environment
                with an efficient service and modern technology to ensure you enjoy your meal. In the Restaurants there are;
                tea/coffee facilities, cable TV on a 46” screen, laptop sized safe.
                For a little extra, guests can choose the Executive Club Floor with private check-in/out,
                dining room, and exclusive lounge with the balcony looking over the city serving complimentary
                evening canapés with selected wines and champagne in an exclusive “home away from home” atmosphere.
                The Lobby Lounge is the place to meet and talk business over coffee and
                Huye Restaurant offers International and Rwandan dishes after a drink in the sophisticated atmosphere
                of the one2one Bar. The conference center on the ground floor features the 736 sqm ballroom
                with 5 adjacent breakout rooms, business center and large pre-function ideal for conferences,
                cocktail parties and social events. Our dedicated conference team are on hand at every stage to ensure
                your events success.
            </p>
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