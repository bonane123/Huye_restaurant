<?php
include("connection.php");
$updateId = $_GET['Prod_id'];
$query2 = "SELECT * FROM products WHERE id = '" . $updateId . "' ";
$result2 = mysqli_query($connection, $query2);
while ($row = mysqli_fetch_assoc($result2)) {
    $product = $row['prodname'];
    $description = $row['description'];
    $price = $row['price'];
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
            <label for="">Product</label>
            <input type="text" name="prodname" id="prod" value="<?php echo $product; ?>"><br><br>
            <label for="">Description</label>
            <input type="text" name="description" id="description" value="<?php echo $description; ?>"><br><br>
            <label for="">Price</label>
            <input type="number" name="price" id="price" value="<?php echo $price; ?>"><br><br>
            <button type="submit" name="update">update</button>


        </form>
        <button style="background-color: greenyellow;"><a href="dashboard.php" style="text-decoration: none;">View Items</a></button>
    </centre>

</body>

</html>