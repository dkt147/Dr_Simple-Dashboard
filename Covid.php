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
                                            $query = "SELECT
                                                        patient.id,
                                                        patient.name,
                                                        patient.is_active,
                                                        appointment.type,appointment.date,appointment.is_completed,appointment.is_confirm,
                                                        appointment.book_date,appointment.reason,appointment.d_id
                                                        FROM `appointment`
                                                        JOIN patient
                                                        ON patient.number = appointment.u_id WHERE appointment.type = 'covid'
                                                        order by date desc";

                                            $res = mysqli_query($conn, $query);
                                        }

                                        if (mysqli_num_rows($res) > 0) {
                                            $a=array();
                                            $unique_data = array();
                                            while ($row = mysqli_fetch_assoc($res)) {
                                                if(in_array($row['book_date'], $unique_data)){
                                                $unique_data[$row['book_date']][]=$row;
                                            }else{
                                                    $unique_data[$row['book_date']][]=$row;
                                                }

                                                ?>

                                                <div class="d-flex flex-column justify-content-start covidBookings" style="width: 20%; height: 200px; border: 1px solid #33CCCC;border-radius: 5px; margin-bottom: 20px; padding: 0 0px 0px;margin-right: 5px;border-right: none; overflow-y: auto">
                                                    <div style="position: sticky; top: 0; z-index: 10; background-color: white;" class="d-flex justify-content-center">
                                                        <p style="font-weight: bold; font-size: 14px; color: #ffffff; background-color: #33cccc ; padding: 2px 4px; margin-bottom: 6px"><?php echo $row['book_date']?></p>
                                                    </div>
                                                   <div style="padding: 0 5px">
                                                       <p style="margin: 0">jkashdhaksdksk</p><p style="margin: 0">jkashdhaksdksk</p><p style="margin: 0">jkashdhaksdksk</p>
                                                   </div>
                                                </div>

                    <?php
                     }

                     $final_data = json_encode($unique_data);

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
</html>