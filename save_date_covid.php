<?php

include 'config.php';
$save_date_value = $_POST['save_date_value'];

$insert = "SELECT * FROM schedule where date '$save_date_value' and type='covid'";
$query = mysqli_query($conn,$insert);

if(mysqli_num_rows($query) == 0){
    echo $insert = "INSERT INTO schedule(date,type)VALUES('$save_date_value','covid')";
    $query = mysqli_query($conn,$insert);

    $location = 'location: Covid.php';
    header($location);
}else{

    $location = 'location: Covid.php';
    header($location);
}
