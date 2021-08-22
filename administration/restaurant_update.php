<?php
include("connection.php");
$updateId = $_GET['restoID'];
$query2 = "SELECT * FROM restaurants WHERE restaurant_id = '" . $updateId . "' ";
$result2 = mysqli_query($connection, $query2);
while ($row = mysqli_fetch_assoc($result2)) {
    $restaurant = $row['restaurant_name'];
    $working = $row['working_hours'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update page</title>
</head>

<body>
    <centre>
        <form action="update_process.php?ID=<?php echo $updateId; ?>" method="post">
            <label for="">Category</label>
            <input type="text" name="category_name" id="prod" value="<?php echo $restaurant; ?>"><br><br>
            <label for="">Working Hours</label>
            <input type="text" name="working_hours" id="hours" value="<?php echo $working; ?>"><br><br>

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
            <button type="submit" name="update">update</button>


        </form>
        <button style="background-color: greenyellow;"><a href="dashboard.php" style="text-decoration: none;">View Items</a></button>
    </centre>

</body>

</html>