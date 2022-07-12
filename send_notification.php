<?php

include 'config.php';


    $message = $_POST['message'];
    $date = date('Y-m-d');

    $sql = "INSERT INTO notification_history(type,message,status,created_at,is_seen) VALUES('general','$message',10,'$date',0)";
    $res = mysqli_query($conn,$sql);
    if($res){
        echo 1;
    }else{
        echo 0;
    }
?>