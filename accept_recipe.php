<?php
$o_id = $_POST['o_id'];

include "config.php";

$sql = "UPDATE `order` SET is_confirm = 1 where id = '$o_id' and is_completed = 0";
$res = mysqli_query($conn,$sql);

if($res){
echo 1;
}else{
echo 0;
}