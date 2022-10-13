<?php
require 'php/dbconfig.php';

$email = "";
$password = "";
$error_array = array();

if (isset($_POST['log_button'])) {
    $email = filter_var($_POST['log_email'], FILTER_SANITIZE_EMAIL);
    $_SESSION['log_email'] = $email;

    $password = $_POST['log_password'];

    $check_db_query = mysqli_query($conn, "SELECT * from users WHERE email='$email' AND password='$password'");
    $check_login_query = mysqli_num_rows($check_db_query);

    if ($check_login_query == 1) {
        $row = mysqli_fetch_array($check_db_query);
        $fname = $row['fname'];
        $lname = $row['lname'];
        $_SESSION['is_login'] = true;
    }
    $_SESSION['fname'] = $fname;
    $_SESSION['lname'] = $lname;
    $_SESSION['alert'] = " You Are now logged in !";
    header('location: userdash.php');
    exit();
} else {
    array_push($error_array, "Email or password was incorrect");
}
