<?php
session_start();
include("../php-folder/connect.php");
include("../php-folder/function.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $Username = $_POST['username'];
    $Email = $_POST['email'];
    $Phone_number = $_POST['phone_number'];
    $Password = $_POST['password'];
    $Gender = $_POST['gender'];
    $User_id = $_POST['user_id'];

    if (!empty($Username) && !empty($Password) && !empty($Phone_number) && !empty($Gender) && !empty($Email) && !is_numeric($Username) && trim($Username)) {
        $User_id = random_num(10);
        $query = "insert into clients ( username, email, phone_number, password, gender, user_id) 
        values ( '$Username','$Email',$Phone_number,'$Password','$Gender', $User_id)";
        $result = mysqli_query($connection, $query);
        if ($result) {
            header("Location: ../signin/login.php");
            die;
        } else {
            echo "Failed to register a user!!";
        }
    } else {
        echo "please enter a valid information";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sigin-up form</title>
    <link rel="stylesheet" href="../signup/signup.css">
    <script src="https://kit.fontawesome.com/a870d82cb7.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="form-container">
            <div class="signup">
                <form class="sign-up-form" method="post">
                    <h2 class="title">Sign Up</h2>

                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="username" id="username" placeholder="Username" required>
                    </div>


                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" id="email" placeholder="Email" required>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-phone"></i>
                        <input type="text" name="phone_number" id="phone_number" placeholder="Phone Number" required>
                    </div>


                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" id="password" placeholder="Password" required>
                    </div>
                    <div class="radio">
                        <input type="radio" name="gender" value="Male">
                        <label class="gender">Male</label>
                        <input type="radio" name="gender" value="Female">
                        <label class="gender">Female</label>
                    </div>


                    <input type="submit" value="Sign Up" class="btn">
                    <p class="social-text">Sign Up with social media</p>
                    <div class="social-media">
                        <a href="#" target="_blank" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" target="_blank" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" target="_blank" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" target="_blank" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
        <div class="panel right-panel">
            <div class="content">
                <h3>One of us</h3>
                <p>
                    It's easy to get what to eat when you have money,
                    but it's hard to have a good meal at the right time when we're not together.
                    welcome to Huye Campus Restaurants home of food, culture and hygiene.
                </p>
                <a href="../signin/login.php"><button class="btn transparent" id="sign-in-button">
                        Sign In
                    </button></a>
            </div>
            <img src="../images/register.svg" alt="" class="image">
        </div>
    </div>
</body>

</html>