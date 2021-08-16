<?php
function check_login($connection)
{
    if (isset($_SESSION['user_id'])) {
        $id = $_SESSION['user_id'];
        $query = "select * from clients where user_id = '$id' limit 1";
        $result = mysqli_query($connection, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }
    //redirect to login
    header("Location: ../signin/login.php");
    die;
}
function random_num($length)
{
    $text = "";
    if ($length < 5) {
        $length = 5;
    }
    $len = rand(4, $length);

    for ($i = 0; $i < $len; $i++) {
        $text .= rand(0, 9);
    }
    return $text;
}
function confirm_query($result_set)
{
    if (!$result_set) {
        die("Database query failed.");
    }
}
function find_menu_category()
{
    global $connection;
    $query = " SELECT category_id, category_name FROM menu_categories";
    $result = mysqli_query($connection, $query);
    confirm_query($result);
    return $result;
}
function find_category_by_category_id($category_id)
{
    global $connection;
    $safe_category_id = mysqli_real_escape_string($connection, $category_id);
    $query = " SELECT category_id, category_name FROM menu_categories where category_id={$safe_category_id} limit 1 ";
    $result = mysqli_query($connection, $query);
    confirm_query($result);
    if ($category = mysqli_fetch_assoc($result)) {
        return $category;
    } else {
        return null;
    }
}
