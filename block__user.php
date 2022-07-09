<?php
$user_id = $_POST['id'];

$user_id = implode($user_id, ",");
include "config.php";

$status = 1;
$sql = "UPDATE `patient` SET is_block = '$status' where id IN ($user_id)";
$res = mysqli_query($conn,$sql);

if ($res) {
    echo 1;
} else {
    echo 0;
}

