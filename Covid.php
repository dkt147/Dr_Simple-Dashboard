<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- //// CSS //// -->
    <link rel="stylesheet" href="./style/style.css">

    <!-- //// Google Fonts //// -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700&family=Poppins&display=swap"
          rel="stylesheet">

    <!-- //// Font Awesome //// -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
          integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .card-body {
            min-height: 300px;
            min-width: 300px;
            margin-right: 5px;
        }
    </style>
</head>

<body class="dashboardWholeBody">
<main class="secondPageMainContainer">
    <?php $page="covid"; include 'sidebar.php'?>
    <section class="dashboardAbsoluteSection calenderDashboardForPadding">
        <header class="calenderDashboardHeader">
            <section class="dashboardNavSection">
                <h2>Covid-19 Impfung</h2>
                <div>
                    <form action="Covid.php" method="post">
                        <section>
                            <img src="./image/Dashboard/Nav Section/search.png" width="20px" height="19px" alt="">
                            <input type="text" placeholder="Suchen" name="searchproduct">
                            <select name="filterproduct">
                                <option selected disabled>Select</option>
                                <option value="done">Done</option>
                                <option value="undone">UnDone</option>
                                <option value="accepted">Accepted</option>
                                <option value="decline">Decline</option>
                                <option value="star">Star</option>
                            </select>
                        </section>
                        <div>
                            <input type="submit" style="background-image: url('./image/Dashboard/Nav Section/setting.png'); border:none; background-repeat:no-repeat;background-size:70% 100%;" width="22px" height="22px" alt="" value="" name="searchbtn">
                        </div>
                    </form>
                </div>
                <?php include "action.php"; ?>
            </section>

                <div style="margin: 20px">
                    <form action="save_date_covid.php" method="post">
                        <p>
                            <label>Day:</label>
                            <input type="date" name="save_date_value">
                            <label>Start Time:</label>
                            <input type="time" name="save_start_value">
                            <label>End Time:</label>
                            <input type="time" name="save_end_value">
                            <input type="submit" name="save_date" value="Termine">
                        </p>
                    </form>
            </div>
        </header>

        <div class="container-fluid py-2">
            <h2 class="font-weight-light">Covid Booking Dates</h2>


            <div class="d-flex justify-content-start align-items-center flex-wrap" >

                    <?php

                                        //Stablishing Connection...
                                        include 'config.php';

                    $all_appointments = [];
                    if(isset($_POST['searchbtn']) && (!empty($_POST['searchproduct']) or !empty($_POST['filterproduct'])))
                    {
                        $name = $_POST['searchproduct'];
                        $filter = $_POST['filterproduct'];

                        $query = "SELECT
                                                        patient.id,
                                                        patient.name,
                                                        patient.is_active,
                                                        appointment.type,appointment.date,appointment.is_completed,appointment.is_confirm,
                                                        appointment.book_date,appointment.reason,appointment.d_id
                                                        FROM `appointment`
                                                        JOIN patient
                                                        ON patient.number = appointment.u_id WHERE appointment.type = 'covid' and patient.name = '$name'
                                                        order by date desc";
                                            $res = mysqli_query($conn, $query);
                                        }
                                        else{
                                            $query = "SELECT * FROM schedule group by date order by date asc";
                                            $res = mysqli_query($conn, $query);
                                        }

                                        if (mysqli_num_rows($res) > 0) {
                                            $a=array();
                                            $unique_data = array();
                                            while ($row = mysqli_fetch_assoc($res)) {
                                                $date = $row['date'];
                                                if($row['date'] < date("Y-m-d")){?>

                                                    <div class="d-flex flex-column justify-content-start covidBookings disable_date" style="width: 20%; height: 200px; border: 1px solid grey;border-radius: 5px; margin-bottom: 20px; padding: 0 0px 0px;margin-right: 5px;border-right: none; overflow-y: auto">
                                                        <div style="position: sticky; top: 0; z-index: 10; background-color: white;" class="d-flex justify-content-center">
                                                            <p style="font-weight: bold; font-size: 14px; color: #ffffff; background-color: grey ; padding: 2px 4px; margin-bottom: 6px"><?php echo $row['date']?></p>
                                                        </div>
                                                        <div style="padding: 0 5px">
                                                            <?php
                                                            $query1 = "SELECT * FROM schedule where  date = '$date'";
                                                            $res1 = mysqli_query($conn, $query1);

                                                            if (mysqli_num_rows($res1) > 0) {
                                                                while ($row1 = mysqli_fetch_assoc($res1)) {


                                                                    $query5 = "SELECT appointment.u_id,appointment.book_date,appointment.type,appointment.book_slot,patient.name,patient.number  FROM appointment JOIN patient ON patient.number = appointment.u_id where appointment.book_date = '$date' and appointment.type = 'covid'";
                                                                    $res5 = mysqli_query($conn, $query5);

                                                                    if (mysqli_num_rows($res5) > 0) {
                                                                        while ($row5 = mysqli_fetch_assoc($res5)) {
                                                                            $all_appointments[$row5['book_slot']] = $row5['name'];
//                                                                   $all_appointments[] = $row5['book_slot'];
                                                                        }
                                                                    }

                                                                    ?>
                                                                    <p style="margin: 0;font-size: 12px">
                                                                        <?php
                                                                        if(!empty($all_appointments[$row1['slot']])){
                                                                            ?><i class="fa-solid fa-circle" style="color: grey;font-size: 9px;"></i><?php echo " ".array_search ($all_appointments[$row1['slot']], $all_appointments)." ".$all_appointments[$row1['slot']];
                                                                        }

                                                                        ?>
                                                                    </p>
                                                                    <?php
                                                                }
                                                            }?>
                                                        </div>
                                                    </div>
                                                <?php
                                                }else{
                                                    ?>

                                                    <div class="d-flex flex-column justify-content-start covidBookings " style="width: 20%; height: 200px; border: 1px solid #33CCCC;border-radius: 5px; margin-bottom: 20px; padding: 0 0px 0px;margin-right: 5px;border-right: none; overflow-y: auto">
                                                        <div style="position: sticky; top: 0; z-index: 10; background-color: white;" class="d-flex justify-content-center">
                                                            <p style="font-weight: bold; font-size: 14px; color: #ffffff; background-color: #33cccc ; padding: 2px 4px; margin-bottom: 6px"><?php echo $row['date']?></p>
                                                        </div>
                                                        <div style="padding: 0 5px">
                                                            <?php
                                                            $query1 = "SELECT * FROM schedule where  date = '$date'";
                                                            $res1 = mysqli_query($conn, $query1);

                                                            if (mysqli_num_rows($res1) > 0) {
                                                                while ($row1 = mysqli_fetch_assoc($res1)) {


                                                                    $query5 = "SELECT appointment.u_id,appointment.book_date,appointment.type,appointment.book_slot,patient.name,patient.number  FROM appointment JOIN patient ON patient.number = appointment.u_id where appointment.book_date = '$date' and appointment.type = 'covid'";
                                                                    $res5 = mysqli_query($conn, $query5);

                                                                    if (mysqli_num_rows($res5) > 0) {
                                                                        while ($row5 = mysqli_fetch_assoc($res5)) {
                                                                            $all_appointments[$row5['book_slot']] = $row5['name'];
//                                                                   $all_appointments[] = $row5['book_slot'];
                                                                        }
                                                                    }

                                                                    ?>
                                                                    <p style="margin: 0;font-size: 12px">
                                                                        <?php
                                                                        if(!empty($all_appointments[$row1['slot']])){
                                                                            ?><i class="fa-solid fa-circle" style="color: #33CCCC;font-size: 9px;"></i><?php echo " ".array_search ($all_appointments[$row1['slot']], $all_appointments)." ".$all_appointments[$row1['slot']];
                                                                        }else{
                                                                            ?><i class="fa-solid fa-circle" style="color: #f33130;font-size: 9px;"></i><?php echo " ".$row1['slot'];?>&nbsp
                                                                            <select name="user_appointed" class="user_appointed" style="border: 1px solid white">
                                                                                <option selected disabled>Select</option>

                                                                                <?php
                                                                                $query6 = "SELECT * FROM patient";
                                                                                $res6 = mysqli_query($conn, $query6);

                                                                                if (mysqli_num_rows($res6) > 0) {
                                                                                    while ($row6 = mysqli_fetch_assoc($res6)) {
                                                                                        $all_value = $row6['number'].",".$row1['slot'].",".$row['date'];

                                                                                        ?>
                                                                                        <option value="<?php echo $all_value?>"><?php echo $row6['name']?></option>


                                                                                        <?php
                                                                                    }
                                                                                }
                                                                                ?> </select>
                                                                            <?php
                                                                        }

                                                                        ?>
                                                                    </p>
                                                                    <?php
                                                                }
                                                            }?>
                                                        </div>
                                                    </div>


                                                <?php
                                                }

                                                ?>


                    <?php
                     }

                                        }
                                        ?>




            </div>


        </div>

    </section>

</main>
</body>
<script src="./script/app.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="logout_timer.js"></script>
<script>
    $(".user_appointed").change(function(){



            var data  = $(this).val();
            var myArray = data.split(",");
            var user_number = myArray[0];
            var slot = myArray[1];
            var date = myArray[2];

        $.ajax({
                    url : "user_appointed.php",
                    type : "POST",
                    data : {number:user_number,slot:slot,date:date},
                    success : function(data){
                        if(data == 1){
                            location.reload();
                        }else{
                            alert('failed')
                        }
                    }
                });
    });

</script>
</html>