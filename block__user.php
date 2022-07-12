<?php
$user_id = $_POST['id'];

$user_id = implode($user_id, ",");
include "config.php";

$sql = "SELECT * FROM `patient` WHERE id IN ($user_id)";
$res = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($res)){

    if($row['is_block'] == 1){
        $id = $row['id'];
        $sql1 = "UPDATE `patient` SET is_block = '0' where id = '$id'";
        $res1 = mysqli_query($conn,$sql1);
    }else{
        $id = $row['id'];
        $sql1 = "UPDATE `patient` SET is_block = '1' where id = '$id'";
        $res1 = mysqli_query($conn,$sql1);
    }


}

    echo 1;

