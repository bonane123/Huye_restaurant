<?php
include("connection.php");
$updateId = $_GET['ID'];
if (isset($_POST['update'])) {

    $restaurant = $_POST['restaurant_name'];
    $working = $_POST['working_hours'];
    $cell = $_POST['cell_id'];
    if (!empty($_POST['restaurant_name']) || !empty($_POST['working_hours']) || !empty($_POST['cell_id'])) {
        $query3 = "UPDATE restaurants SET restaurant_name = '" . $restaurant . "', working_hours = '" . $working . "'  cell_id = '" . $cell . "' WHERE restaurant_id = '" . $updateId . "'";
        $result3 = mysqli_query($connection, $query3);
        if ($result3) {
            header("Location: dashboard.php");
        }
    } else {
        echo "Error occured";
    }
} else {
    header("Location: dashboard.php");
}
