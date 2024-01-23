<?php
include "database.php";

if ($_POST) {
    $passenger_id = $_POST['passenger_id'];

    $sql = "DELETE FROM `passenger` WHERE passenger_id='$passenger_id'";

    if (mysqli_query($link, $sql)) {
        echo "Record deleted successfully";
    } else {
        echo "Error: " . mysqli_error($link);
    }

    header("Location: pasagiri.php");
}

?>
