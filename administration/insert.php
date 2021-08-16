<?php
include("connection.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Sample test</title>
    <style>
        body {
            background-color: rgba(80, 80, 80, 0.5);
        }

        .container {
            margin: 1% 60% 10% 40%;

        }

        .container form {
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.6);
        }
    </style>
</head>

<body>
    <section>
        <p>
            <center>Admin, Insert New Records</center>
        </p>
        <div class="container">

            <centre>
                <form action="" method="post">

                    <div class="container-box">
                        <label for="">Product</label>
                        <input type="text" name="prodname" id="prod">
                    </div>
                    <div class="container-box">
                        <label for="">Description</label>
                        <input type="text" name="description" id="description">
                    </div>
                    <div class="container-box">
                        <label for="">Price</label>
                        <input type="number" name="price" id="price">
                    </div>
                    <div class="container-box">
                        <button type="submit" name="submit">SAVE</button>
                    </div>


                </form>
        </div>
    </section>

    </centre>
    <?php
    if (isset($_POST['submit'])) {
        $product = $_POST['prodname'];
        $description = $_POST['description'];
        $price = $_POST['price'];

        if (!empty($_POST['prodname']) || !empty($_POST['description']) || !empty($_POST['price'])) {
            $query = "INSERT INTO products (prodname, description, price) values ('$product', '$description', $price)";
            $result = mysqli_query($connection, $query);
            if ($result) {
                header("Location: dashboard.php");
            } else {
                echo "Not inserted";
            }
        }
    }
    ?>

</body>

</html>