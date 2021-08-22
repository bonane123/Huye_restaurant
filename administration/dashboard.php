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
        <div class="add"><a href="insert_resto.php">ADD ITEM</a></div>
        <table border="1">
            <div class="table-title">Table of Restaurants</div>
            <tr>
                <th>Restaurant</th>
                <th>Working Hours</th>
                <th>Cell</th>
                <th colspan="2">Action</th>
            </tr>
            <?php
            $query = "select * from restaurants";
            $result = mysqli_query($connection, $query);
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $query2 = "select * from cells where cell_id =" . $row['cell_id'];
                    $result2 = mysqli_query($connection, $query2);
                    while ($ro = mysqli_fetch_assoc($result2)) {
            ?>
                        <tr>
                            <td><?php echo $row['restaurant_name']; ?></td>
                            <td><?php echo $row['working_hours']; ?></td>
                            <td><?php echo $ro['cell_name']; ?></td>

                            <td><button><a href="restaurant_update.php?restoID=<?php echo $row['restaurant_id']; ?>">EDIT</a></button>
                                <button><a href="restaurant_delete.php?restoID=<?php echo $row['restaurant_id']; ?>">DELETE</a></button>
                            </td>
                        </tr>
                <?php }
                }
                ?>
            <?php
            } ?>
        </table>
    </center><br>
</div>
</div>
</body>

</html>