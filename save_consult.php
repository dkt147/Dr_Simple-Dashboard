<?php

include 'config.php';
$a_id = $_POST['a_id'];
$date = $_POST['date'];
$time = $_POST['time'];
$time = $date." ".$time;

    $insert = "UPDATE appointment SET book_date = '$time',is_confirm = 1 where id = '$a_id'";
    $query = mysqli_query($conn,$insert);

   $location = 'location: consultation.php?id='.$a_id;
    header($location);

