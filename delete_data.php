<?php
include "database.php";

if ($_POST) {
    $train_id = $_POST['train_id'];

    $sql = "DELETE FROM `train` WHERE train_id='$train_id'";

    if (mysqli_query($link, $sql)) {
        echo "Record deleted successfully";
    } else {
        echo "Error: " . mysqli_error($link);
    }

    header("Location: trains.php");
}

?>
