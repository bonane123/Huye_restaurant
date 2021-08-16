<?php
include('connection.php');
$deleteId = $_GET['Prod_id'];
$query = "DELETE FROM products WHERE id = '" . $deleteId . "'";
$result = mysqli_query($connection, $query);
if ($result) {
    header("Location: home.php");
} else {
    echo "Some error occured";
}
