<?php
include 'config.php';
    $a_id = $_POST['a_id'];
       $insert = "UPDATE appointment SET is_failed = 1, is_completed = 0,is_confirm = 0 where id = '$a_id'";
        $query = mysqli_query($conn,$insert);

        $location = 'location: consultation.php?id='.$a_id;
        header($location);
