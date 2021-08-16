<?php
include("connection.php");
$updateId = $_GET['ID'];
if (isset($_POST['update'])) {

    $product = $_POST['prodname'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    if (!empty($_POST['prodname']) || !empty($_POST['description']) || !empty($_POST['price'])) {
        $query3 = "UPDATE products SET prodname = '" . $product . "', description = '" . $description . "', price = '" . $price . "' WHERE id = '" . $updateId . "'";
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
