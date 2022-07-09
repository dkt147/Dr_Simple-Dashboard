<?php

include 'config.php';
$save_date_value = $_POST['save_date_value'];
$save_start_value = $_POST['save_start_value'];
$save_end_value = $_POST['save_end_value'];

$insert = "SELECT * FROM schedule where date = '$save_date_value' and start_time = '$save_start_value' and end_time = '$save_end_value' and type='covid'";
$query = mysqli_query($conn,$insert);

if(mysqli_num_rows($query) == 0){
    $insert = "INSERT INTO schedule(date,start_time,end_time,type)VALUES('$save_date_value','$save_start_value','$save_end_value','covid')";
    $query = mysqli_query($conn,$insert);

    $location = 'location: Covid.php';
    header($location);
}else{
    $location = 'location: Covid.php';
    header($location);
}
