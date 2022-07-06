<?php


require "config.php";

$id = $_POST['id'];

$query="select * from patient where id = '$id'";

$result= mysqli_query($conn,$query);

if(mysqli_num_rows($result) > 0){
    while($row=mysqli_fetch_assoc($result))
    {
        $data[]=$row;
    }
    
    print(json_encode($data));
    
}else{
    $data['status'] = 400;
    print(json_encode($data));
}


?>