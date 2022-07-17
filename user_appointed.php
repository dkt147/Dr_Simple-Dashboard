
<?php


include 'config.php';

$number = $_POST['number'];
$slot = $_POST['slot'];
$book_date = $_POST['date'];
$type = 'covid';
$date = date("Y-m-d");

       $insert = "INSERT INTO appointment(type,u_id,is_confirm,book_date,book_slot,date)VALUES('$type','$number',1,'$book_date','$slot','$date')";
        $query = mysqli_query($conn, $insert);

if($query){
echo 1;
}else{
    echo 0;
}
?>