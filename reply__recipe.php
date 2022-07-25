<?php

include 'config.php';


    $message = $_POST['message'];
    $id = $_POST['id'];
    $date = date('Y-m-d');

    $sql = "INSERT INTO notification_history(type,message,user_id,status,created_at,is_seen) VALUES('regular','$message','$id',10,'$date',0)";
    $res = mysqli_query($conn,$sql);

echo 1;
?>