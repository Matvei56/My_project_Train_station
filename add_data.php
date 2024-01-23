<?php
include "database.php";

if ($_POST) {
    // $train_id = $_POST['train_id'];
    $type = $_POST['type'];
    $driver_id = $_POST['driver_id'];

    $sql = "INSERT INTO `train` ( type, driver_id) VALUES ( '$type', '$driver_id')";

    if (mysqli_query($link, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . mysqli_error($link);
    }

    header("Location: trains.php");
}

?>
