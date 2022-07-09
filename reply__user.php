<?php

include 'config.php';


    $message = $_POST['message'];
    $id = $_POST['id'];
    $user_id = implode($id,",");
    $date = date('Y-m-d');

$sql = "SELECT * FROM `patient` where id IN ($user_id)";
$res = mysqli_query($conn,$sql);
    while ($row = mysqli_fetch_assoc($res)){
        $ids[] = $row['number'];
    }

        for ($x = 0; $x < count($ids); $x++) {
            $user = $ids[$x];
            $sql = "INSERT INTO notification_history(type,message,user_id,status,created_at,is_seen) VALUES('regular','$message','$user',10,'$date',0)";
            $res = mysqli_query($conn,$sql);
        }
//    $sql = "INSERT INTO notification_history(type,message,user_id,status,created_at,is_seen) VALUES('regular','$message','$user',10,'$date',0)";
//    $res = mysqli_query($conn,$sql);
//    if($res){
//        echo "<script>alert('Notification Send')</script>";
//    }else{
//        echo "<script>alert('Notification Failed')</script>";
//    }

echo 1;
?>