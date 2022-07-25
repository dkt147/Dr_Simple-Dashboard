<?php

$id = $_POST['id'];

$str = implode($id, ","); // Convert Array into String
include 'config.php';

echo $sql = "UPDATE `appointment` SET is_star = 1 WHERE id IN ({$str})";

if(mysqli_query($conn, $sql)){
    echo 1;
}else{
    echo 0;
}

?>
