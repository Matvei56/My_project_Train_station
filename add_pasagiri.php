<?php
include "database.php";

if ($_POST) {
    // $passenger_id = $_POST['passenger_id'];
    $name = $_POST['name'];
    $date_of_birth = $_POST['date_of_birth'];
    $phone_number = $_POST['phone_number'];

    $sql = "INSERT INTO `passenger` ( name, date_of_birth, phone_number) VALUES ( '$name', '$date_of_birth', '$phone_number')";

    if (mysqli_query($link, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . mysqli_error($link);
    }

    header("Location: pasagiri.php");
}

?>
