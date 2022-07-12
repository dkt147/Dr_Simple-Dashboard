<?php

include 'config.php';

    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];

    $sql = "UPDATE vacation SET start_date = '$start_date', end_date = '$end_date'";
    $res = mysqli_query($conn,$sql);
    if($res){
        echo 1;
    }else{
        echo 0;
    }
?>