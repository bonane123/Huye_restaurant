<?php
include("connection.php");
$restaurantid = $_GET['restoID'];
$query = "DELETE FROM restaurants where restaurant_id = " . $restaurantid;
$result = mysqli_query($connection, $query);
if ($result) {
    header("location: dashboard.php");
} else {
    echo "error occured" . mysqli_error($connection);
}
