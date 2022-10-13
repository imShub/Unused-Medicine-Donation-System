<?php

ob_start();
session_start();

$conn = mysqli_connect("localhost", "root", "", "umds_db");

if (mysqli_connect_errno()) {
    echo "Failed to connect: " . mysqli_connect_errno();
} else {
    return;
}
