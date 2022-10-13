<?php
include_once 'dbconfig.php';

$fname = "";
$lname = "";
$dob = "";
$address = "";
$email = "";
$password = "";
$cpassword = "";
$date = "";
$error_array = array();

if (isset($_POST['reg_user'])) {

    //First Name
    $fname = strip_tags($_POST['reg_fname']);
    $fname = str_replace(' ', '', $fname);
    $fname = ucfirst(strtolower($fname));
    $_SESSION['reg_fname'] = $fname;

    //Last Name
    $lname = strip_tags($_POST['reg_lname']);
    $lname = str_replace(' ', '', $lname);
    $lname = ucfirst(strtolower($lname));
    $_SESSION['reg_lname'] = $lname;

    //DOB
    $dob = $_POST['dob'];
    $_SESSION['dob'] = $dob;

    //Gender
    $gender = $_POST['gender'];

    //Address
    $address = strip_tags($_POST['reg_address']);
    $_SESSION['reg_address'] = $address;

    //Email
    $email = strip_tags($_POST['reg_email']);
    $email = str_replace(' ', '', $email);
    $email = strtolower($email);
    $_SESSION['reg_email'] = $email;

    //Password
    $password = strip_tags($_POST['reg_password']);
    $password = str_replace(' ', '', $password);
    $password = ucfirst(strtolower($password));
    $_SESSION['reg_password'] = $password;

    //Confirm Password
    $cpassword = strip_tags($_POST['reg_cpassword']);
    $cpassword = str_replace(' ', '', $cpassword);
    $cpassword = ucfirst(strtolower($cpassword));
    $_SESSION['reg_cpassword'] = $cpassword;

    $date = date("Y-m-d hh:mm");

    //Validation for Email
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);

        $email = strtolower($email);

        $e_check = mysqli_query($conn, "SELECT email from users WHERE email='$email'");

        $num_rows = mysqli_num_rows($e_check);

        if ($num_rows > 0) {
            array_push($error_array, "Email already in use");
        }
    }

    //Validation for Password
    if ($password != $cpassword) {
        array_push($error_array, "Your password doesn't match");
    } else {
        if (preg_match('/[^A-Za-z0-9]/', $password)) {
            array_push($error_array, "Your password can only contain english characters or numbers.");
        }
    }


    if (empty($error_array)) {
        $query = "INSERT INTO users (fname, lname, email, gender, dob, address, password) VALUES ('$fname', '$lname', '$email', '$gender', '$dob', '$address', '$password');";

        mysqli_query($conn, $query);
        $_SESSION['alert'] = "You are succesfully registerd.";
        header('location: login.php', $fname);
    }
}
