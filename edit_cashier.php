<?php
include "database.php";

if ($_POST) {
    $cashier_id = $_POST['cashier_id'];
    $cashier_name = $_POST['cashier_name'];
    $date_of_birth = $_POST['date_of_birth'];
    $phone_number = $_POST['phone_number'];

    $sql = "UPDATE `cashier` SET cashier_name='$cashier_name', date_of_birth='$date_of_birth', phone_number='$phone_number' WHERE cashier_id='$cashier_id'";

    if (mysqli_query($link, $sql)) {
        echo "Record updated successfully";
    } else {
        echo "Error: " . mysqli_error($link);
    }
    
    header("Location: cashier.php");
}
?>