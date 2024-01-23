<?php
include "database.php";

if ($_POST) {
   
    $passenger_id = $_POST['passenger_id'];
    $order_date = $_POST['order_date'];
    $train_id = $_POST['train_id'];
    $type_tickets = $_POST['type_tickets'];
    $cashier_id = $_POST['cashier_id'];

    $sql = "INSERT INTO `tickets` ( passenger_id, order_date, train_id, type_tickets, cashier_id) VALUES ( '$passenger_id', '$order_date', '$train_id', '$type_tickets', '$cashier_id')";

    if (mysqli_query($link, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . mysqli_error($link);
    }

    header("Location: tiket.php");
}

?>