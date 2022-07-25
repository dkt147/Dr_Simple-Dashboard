<?php

$id = $_POST['id'];

$str = implode($id, ","); // Convert Array into String
include 'config.php';

$sql = "UPDATE `appointment` SET is_star = 0 WHERE id NOT IN ({$str})";

if(mysqli_query($conn, $sql)){
    echo 1;
}else{
    echo 0;
}

?>
