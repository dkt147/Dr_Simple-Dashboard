
<?php


include 'config.php';
$save_date_value = $_POST['save_date_value'];
$save_start_value = $_POST['save_start_value'];
$save_end_value = $_POST['save_end_value'];

//$insert = "SELECT * FROM schedule where date = '$save_date_value' and start_time = '$save_start_value' and end_time = '$save_end_value' and type='covid'";
//$query = mysqli_query($conn, $insert);
//
//if (mysqli_num_rows($query) == 0) {
//    $insert = "INSERT INTO schedule(date,start_time,end_time,type)VALUES('$save_date_value','$save_start_value','$save_end_value','covid')";
//    $query = mysqli_query($conn, $insert);
//
//    $location = 'location: Covid.php';
//    header($location);
//} else {
//    $location = 'location: Covid.php';
//    header($location);
//}


$time = $_POST['save_start_value'];
$start_time = strtotime($_POST['save_start_value']);
$date = strtotime($time);
$date = strtotime($time) + (60 * 5);
$formatDate = date("H:i", $date);
$end_time = strtotime($_POST['save_end_value']);


$difference = round(abs($end_time - $start_time) / 60, 2);

for ($i = 5; $i <= $difference; $i += 5) {
    $time_stamp[] = $i;
}

foreach ($time_stamp as $data) {
    $date = strtotime($time);
    $date = strtotime($time) + (60 * 5);
    $time = date("H:i", $date);
    echo $time . "<br>";
    $insert = "SELECT * FROM schedule where slot = '$time' and type='covid'";
    $query = mysqli_query($conn, $insert);

    if (mysqli_num_rows($query) == 0) {
        $insert = "INSERT INTO schedule(date,slot,type)VALUES('$save_date_value','$time','covid')";
        $query = mysqli_query($conn, $insert);

    }
}


$location = 'location: Covid.php';
header($location);
?>