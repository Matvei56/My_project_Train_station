<?php
include "database.php";

if ($_POST) {
    $date_of_birth = trim($date_of_birth);
    $phone_number = trim($phone_number);

    // $cashier_id = $_POST['cashier_id'];
    $cashier_name = $_POST['cashier_name'];
    $date_of_birth = $_POST['date_of_birth'];
    $phone_number = $_POST['phone_number'];

    $sql = "INSERT INTO `cashier` ( cashier_name, date_of_birth, phone_number) VALUES ( '$cashier_name', '$date_of_birth', '$phone_number')";

    if (mysqli_query($link, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . mysqli_error($link);
    }

    header("Location: cashier.php");
}

?>
