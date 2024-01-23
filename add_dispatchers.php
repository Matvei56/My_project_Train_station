<?php
include "database.php";

if ($_POST) {
    // $dispatcher_id = $_POST['dispatcher_id'];
    $gender = $_POST['gender'];
    $salary = $_POST['salary'];
    $name = $_POST['name'];

    $sql = "INSERT INTO `dispatcher` ( gender, salary, name) VALUES ( '$gender', '$salary', '$name')";

    if (mysqli_query($link, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . mysqli_error($link);
    }

    header("Location: dispetchers.php");
}

?>
