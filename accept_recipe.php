<?php
$o_id = $_POST['o_id'];

include "config.php";

$sql = "UPDATE `appointment` SET is_completed = 1 where id = '$o_id' and is_failed = 0";
$res = mysqli_query($conn,$sql);

if($res){
echo 1;
}else{
echo 0;
}