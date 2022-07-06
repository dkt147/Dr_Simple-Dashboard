<?php
    $a_id = $_POST['a_id'];
    $save_date_value = $_POST['save_date_value'];

    $insert = "SELECT * FROM schedule where date '$save_date_value' and type='consult'";
    $query = mysqli_query($conn,$insert);

    if(mysqli_num_rows($query) > 0){
        $location = 'location: consultation.php?id='.$a_id;
        header($location);
    }else{
        $insert = "INSERT INTO schedule(date,type)VALUES('$save_date_value','consult')";
        $query = mysqli_query($conn,$insert);

        $location = 'location: consultation.php?id='.$a_id;
        header($location);
    }
