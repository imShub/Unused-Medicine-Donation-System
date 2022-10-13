<?php $query = "SELECT * from donated_meds WHERE email='$email'";
$result = $db->query($query);
if ($result == true) {
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        $msg = "No Data Found";
    }
}
