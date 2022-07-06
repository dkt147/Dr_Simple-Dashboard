<?php
$r_id = $_POST['r_id'];

include "config.php";

$sql = "UPDATE `referal` SET is_failed = 1 where id = '$r_id' and is_completed = 0";
$res = mysqli_query($conn,$sql);

if($res){
echo 1;
}else{
echo 0;
}