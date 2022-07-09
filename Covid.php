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
                                <option value="done">Done</option>
                                <option value="undone">UnDone</option>
                                <option value="accepted">Accepted</option>
                                <option value="decline">Decline</option>
                                <option value="star">Star</option>
                            </select>
                        </section>
                        <div>
                            <input type="submit" style="background-image: url('./image/Dashboard/Nav Section/setting.png'); border:none; background-repeat:no-repeat;background-size:100% 100%;" width="22px" height="22px" alt="" value="" name="searchbtn">
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


            <div class="d-flex flex-row flex-nowrap" >

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
                                                        order by id desc";
                                            $res = mysqli_query($conn, $query);
                                        }
                                        else{
                                            $query1 = "SELECT * FROM appointment where type = 'covid' group by book_date desc";
                                            $res1 = mysqli_query($conn, $query1);

                                            $count = mysqli_num_rows($res1);

                                            $query = "SELECT
                                                        patient.id,
                                                        patient.name,
                                                        patient.is_active,
                                                        appointment.type,appointment.date,appointment.is_completed,appointment.is_confirm,
                                                        appointment.book_date,appointment.reason,appointment.d_id
                                                        FROM `appointment`
                                                        JOIN patient
                                                        ON patient.number = appointment.u_id WHERE appointment.type = 'covid'
                                                        order by id desc";

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

                                                if(!in_array($row['book_date'], $a)){
                                                    $unique_data[$row['book_date']][]=$row;

                                                ?>
                    <div class="col-md-4" style="margin-bottom: 10px;margin-left: 20px">
                        <div class="card card-body">
                            <?php echo $row['book_date']?>
                        </div>
                    </div>

                    <?php
                    }
                     }
                                            $unique_data = json_encode($unique_data);
                                            echo $unique_data[0];

                                        }
                                        ?>


            </div>


        </div>

    </section>

</main>
</body>
<script src="./script/app.js"></script>

</html>