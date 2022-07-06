<?php
$user_id = $_POST['user_id'];

include "config.php";

$sql = "UPDATE `patient` SET is_active = 1 where id = '$user_id'";
$res = mysqli_query($conn,$sql);

if($res){
echo 1;
}else{
echo 0;
}