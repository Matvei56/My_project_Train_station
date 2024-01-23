<?php
include "database.php";

if ($_POST) {
    $tickets_id = $_POST['tickets_id'];

    $sql = "DELETE FROM `tickets` WHERE tickets_id='$tickets_id'";

    if (mysqli_query($link, $sql)) {
        echo "Record deleted successfully";
    } else {
        echo "Error: " . mysqli_error($link);
    }

    header("Location: tiket.php");
}

?>
