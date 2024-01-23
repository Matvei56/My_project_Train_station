<?php
include "database.php";

if ($_POST) {
    $dispatcher_id = $_POST['dispatcher_id'];

    $sql = "DELETE FROM `dispatcher` WHERE dispatcher_id='$dispatcher_id'";

    if (mysqli_query($link, $sql)) {
        echo "Record deleted successfully";
    } else {
        echo "Error: " . mysqli_error($link);
    }

    header("Location: dispetchers.php");
}

?>
