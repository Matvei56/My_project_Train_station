<?php
include "database.php";

if ($_POST) {
    $passenger_id = $_POST['passenger_id'];
    $name = $_POST['name'];
    $date_of_birth = $_POST['date_of_birth'];
    $phone_number = $_POST['phone_number'];
    

    $sql = "UPDATE `passenger` SET name='$name', date_of_birth='$date_of_birth', phone_number='$phone_number' WHERE passenger_id='$passenger_id'";

    if (mysqli_query($link, $sql)) {
        echo "Record updated successfully";
    } else {
        echo "Error: " . mysqli_error($link);
    }
    
    header("Location: pasagiri.php");
}
?>