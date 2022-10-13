<?php
include_once 'dbconfig.php';

$email = $_SESSION['log_email'];
$name = $_SESSION['fname'] . " " . $_SESSION['lname'];
$bname = "";
$gname = "";
$med_type = "";
$expire_date = "";
$quantity = "";
$date = "";
$error_array = array();

if (isset($_POST['donate_btn'])) {

    //Brand Name
    $bname = strip_tags($_POST['brandName']);
    $_SESSION['brandName'] = $bname;

    //Generic Name
    $gname = strip_tags($_POST['GenName']);
    $_SESSION['GenName'] = $gname;

    //Medicine Type
    $med_type = strip_tags($_POST['med_type']);
    $_SESSION['med_type'] = $med_type;

    //Expire Date
    $expire_date = $_POST['ExpDate'];
    $_SESSION['ExpDate'] = $expire_date;

    //Quantity
    $quantity = strip_tags($_POST['quantity']);
    $_SESSION['quantity'] = $quantity;

    if (empty($error_array)) {
        $query = "INSERT INTO donated_meds (name,donated_by,brand_name,generic_name, med_type, expire_date, quantity) VALUES ('$name','$email','$bname','$gname', '$med_type', '$expire_date', '$quantity');";

        mysqli_query($conn, $query);
        $_SESSION['donate_alert'] = "Thanks for donating medicines !";
        header('location: my_donation.php');
    }
}
