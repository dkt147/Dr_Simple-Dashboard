<?php

$id = $_POST['id'];

$str = implode($id, ","); // Convert Array into String
include 'config.php';

echo $sql = "DELETE FROM `referal` WHERE id IN ({$str})";

if(mysqli_query($conn, $sql)){
    echo 1;
}else{
    echo 0;
}

?>
