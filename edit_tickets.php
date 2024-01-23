<?php
include "database.php";

if ($_POST) {
    $tickets_id = $_POST['tickets_id'];
    $passenger_id = $_POST['passenger_id'];
    $order_date = $_POST['order_date'];
    $train_id = $_POST['train_id'];
    $type_tickets = $_POST['type_tickets'];
    $cashier_id = $_POST['cashier_id'];

    $sql = "UPDATE `dispatcher` SET name='$name', gender='$gender', salary='$salary' WHERE dispatcher_id='$dispatcher_id'";


    $sql = "UPDATE `tickets` SET passenger_id='$passenger_id', order_date= '$order_date', train_id='$train_id', type_tickets='$type_tickets', cashier_id='$cashier_id' WHERE  tickets_id='$tickets_id'";

    if (mysqli_query($link, $sql)) {
        echo "Record updated successfully";
    } else {
        echo "Error: " . mysqli_error($link);
    }
    
    header("Location: tiket.php");
}
?>