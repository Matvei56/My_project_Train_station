<?php
include "database.php";

if ($_POST) {
    $cashier_id = $_POST['cashier_id'];

    $sql = "DELETE FROM `cashier` WHERE cashier_id='$cashier_id'";

    if (mysqli_query($link, $sql)) {
        echo "Record deleted successfully";
    } else {
        echo "Error: " . mysqli_error($link);
    }

    header("Location: mashenistu.php");
}

?>
