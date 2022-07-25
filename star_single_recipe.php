<?php

$id = $_POST['id'];

include 'config.php';

$sql = "UPDATE `appointment` SET is_star = 1 WHERE id = $id";

if(mysqli_query($conn, $sql)){
    echo 1;
}else{
    echo 0;
}

?>
