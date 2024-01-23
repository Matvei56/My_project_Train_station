<?php
include "database.php";

if ($_POST) {
    $train_id = $_POST['train_id'];
    $type = $_POST['type'];
    $driver_id = $_POST['driver_id'];

    $sql = "UPDATE `train` SET type='$type', driver_id='$driver_id' WHERE train_id='$train_id'";

    if (mysqli_query($link, $sql)) {
        echo "Record updated successfully";
    } else {
        echo "Error: " . mysqli_error($link);
    }
    
    header("Location: trains.php");
}
?>