<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "restaurants_management_system";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if ($connection) {
    //echo "Connection successful";
} else {
    die("No connection" . mysqli_connect_error());
}
