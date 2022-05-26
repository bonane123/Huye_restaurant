<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "restaurant_system";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if ($connection) {
    //echo "Connection successful";
} else {
    die("No connection" . mysqli_connect_error());
}
