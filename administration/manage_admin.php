<?php
include("../restoproj/php-folder/connect.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <tr>
            <th>Category</th>
            <th>Action</th>
        </tr>
        <?php
        $query = "SELECT * FROM menu_categories";
        $result = mysqli_query($connection, $query);
        $data = mysqli_num_rows($result);
        if ($data != 0) {

            //echo "There is something in the database";
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <tr>
                    <td><a href="/restoproj/restaurant-site/menu.php?categoryID=<?php echo $row['category_id']; ?>"><?php echo $row['category_name']; ?></a>
                    </td>
                    <td><input type="submit" name="submit" value="Delete">
                    </td>
                </tr>

        <?php
            }
        } else {
            echo "No thing found";
        }
        ?>
    </table>
</body>

</html>