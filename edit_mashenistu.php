<?php
include "database.php";

if ($_POST) {
    $driver_id = $_POST['driver_id'];
    $expiriens_work = $_POST['expiriens_work'];
    $dispatcher_id = $_POST['dispatcher_id'];
    $name = $_POST['name'];

    $sql = "UPDATE `driver` SET expiriens_work='$expiriens_work', dispatcher_id='$dispatcher_id', name='$name' WHERE driver_id='$driver_id'";

    if (mysqli_query($link, $sql)) {
        echo "Record updated successfully";
    } else {
        echo "Error: " . mysqli_error($link);
    }
    
    header("Location: mashenistu.php");
}
?>