<?php
session_start();
include("../php-folder/connect.php");
include("../php-folder/function.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $Username = $_POST['username'];
    $Password = $_POST['password'];


    if (!empty($Username) && !empty($Password) && !is_numeric($Username) && trim($Username)) {
        //read from the database
        $query = "select * from clients where username = '$Username' limit 1";
        $result = mysqli_query($connection, $query);
        if ($result) {

            if ($result && mysqli_num_rows($result) > 0) {

                $user_data = mysqli_fetch_assoc($result);

                if ($user_data['password'] === $Password) {
                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location: ../restaurant-site/home.php");
                    die;
                }
            }
        }
        echo  '<center><h1 style="background-color:white; color:red; width:100%" >Wrong Username or Password!!</h1></center>';
    } else {
        echo  "please enter some information!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="login.css" />
    <script src="https://kit.fontawesome.com/a870d82cb7.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login page</title>
</head>

<body>

    <section class="login-container" id="login-container">

        <div class="box-container">

            <div class="box">
                <form class="form" method="POST">
                    <p class="paragraph">You can login to this website by putting the required information below.
                        if you do not have account already, <a href="../signup/signup.php">Create Account</a>
                    </p>
                    <h3>
                        <center> Welcome to the Restaurants </center>
                    </h3>
                    <div class="input-field">
                        <input type="text" name="username" id="username" class="name" placeholder="Username" required />
                    </div>

                    <div class="input-field">
                        <input type="password" name="password" id="myInput" class="name" placeholder="password" required />
                    </div>
                    <div class="check">
                        <button>Login</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

</body>

</html>