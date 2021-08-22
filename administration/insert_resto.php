<?php
include("connection.php");

if (isset($_POST['resto_submit'])) {
    $restaurant = $_POST['restaurant_name'];
    $working = $_POST['working_hours'];
    $cell = $_POST['cellId'];

    if (!empty($_POST['restaurant_name']) || !empty($_POST['working_hours']) || !empty($_POST['cell_id'])) {
        $query2 = "INSERT INTO restaurants (restaurant_name, working_hours, cell_id) values ('$restaurant', $working, $cell)";
        $result = mysqli_query($connection, $query2);
        if ($result) {
            header("Location: dashboard.php");
        } else {
            echo "Not inserted";
        }
    }
}
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
                        <label for="">Restaurant</label>
                        <input type="text" name="restaurant_name" id="prod">
                    </div>
                    <div class="container-box">
                        <label for="">Working Hours</label>
                        <input type="number" name="working_hours" id="description">
                    </div>
                    <br>

                    <div class="container-box">
                        <label for="">Cell</label>
                        <select name="cellId" id="" style=" padding: 2px 1.5rem; height: 40px; font-family:Arial, Helvetica, sans-serif; font-size:20px; border-radius:5px;">
                            <option value="0" disabled selected>Cell</option>
                            <?php
                            $query = "SELECT * FROM cells";
                            $result = mysqli_query($connection, $query);
                            if ($result) {
                                while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                    <option value="<?php echo $row['cell_id']; ?>"><?php echo $row['cell_name']; ?></option>
                                <?php
                                }
                                ?>
                            <?php
                            }
                            ?>
                        </select>
                    </div><br>
                    <div class="container-box">
                        <button type="submit" name="resto_submit">SAVE</button>
                    </div>


                </form>
        </div>
    </section>

    </centre>


</body>

</html>