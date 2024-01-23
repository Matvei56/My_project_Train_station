<?php
include "database.php";

if ($_POST) {
   
    $expiriens_work = $_POST['expiriens_work'];
    $dispatcher_id = $_POST['dispatcher_id'];
    $name = $_POST['name'];

    $sql = "INSERT INTO `driver` (driver_id, expiriens_work, dispatcher_id, name) VALUES ( '$expiriens_work', '$dispatcher_id', '$name')";


    if (mysqli_query($link, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . mysqli_error($link);
    }

    header("Location: mashenistu.php");
}

?>