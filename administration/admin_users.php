<?php
include("connection.php");
include("admin_header.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
</head>
<div class="table-box">

    <center>
        <div class="add"><a href="insert.php">ADD ITEM</a></div>
        <table border="1">
            <div class="table-title">Table of Users</div>
            <tr>
                <th>Product</th>
                <th>Description</th>
                <th>Price</th>
                <th colspan="2">Action</th>
            </tr>
            <?php
            $query1 = "SELECT * FROM products";
            $result1 = mysqli_query($connection, $query1);
            if ($result1) {
                while ($row = mysqli_fetch_assoc($result1)) {
            ?>
                    <tr>
                        <td><?php echo $row['prodname']; ?></td>
                        <td><?php echo $row['description']; ?></td>
                        <td><?php echo $row['price']; ?></td>
                        <td><a href="update.php?Prod_id=<?php echo $row['id']; ?>">Update</a></td>
                        <td><a href="delete.php?Prod_id=<?php echo $row['id']; ?>">Delete</a></td>
                    </tr>
            <?php
                }
            } else {
                echo "Some errors occured!!!";
            }
            ?>
        </table>
    </center><br>
</div>
</div>
</body>

</html>