<?php
include "database.php";

if ($_POST) {
    $driver_id = $_POST['driver_id'];

    $sql = "DELETE FROM `driver` WHERE driver_id='$driver_id'";

    if (mysqli_query($link, $sql)) {
        echo "Record deleted successfully";
    } else {
        echo "Error: " . mysqli_error($link);
    }

    header("Location: mashenistu.php");
}

?>
