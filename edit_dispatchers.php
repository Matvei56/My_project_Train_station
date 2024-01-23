<?php
include "database.php";

if ($_POST) {
    $dispatcher_id = $_POST['dispatcher_id'];
    $gender = $_POST['gender'];
    $salary = $_POST['salary'];
    $name = $_POST['name'];

    $sql = "UPDATE `dispatcher` SET name='$name', gender='$gender', salary='$salary' WHERE dispatcher_id='$dispatcher_id'";

    if (mysqli_query($link, $sql)) {
        echo "Record updated successfully";
    } else {
        echo "Error: " . mysqli_error($link);
    }
    
    header("Location: dispetchers.php");
}
?>