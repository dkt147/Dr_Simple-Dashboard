<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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

</head>

<body class="dashboardWholeBody">
<main class="secondPageMainContainer">

    <?php $page="all"; include 'sidebar.php'?>
    <section class="dashboardAbsoluteSection">
        <header class="dashboardNavSection">
            <h2>Dashboard</h2>
            <div>
                <section>
                    <img src="./image/Dashboard/Nav Section/search.png" width="20px" height="19px" alt="">
                    <input type="text" placeholder="Suchen">
                </section>
                <div>
                    <img src="./image/Dashboard/Nav Section/setting.png" width="22px" height="22px" alt="">
                </div>
            </div>
            <section class="dashboardNavEndContainer">
                <div>
                    <img src="./image/Dashboard/Nav Section/umbrella.png" alt="">
                </div>
                <div style="margin-left: 25px;">
                    <img src="./image/Dashboard/Nav Section/megaphone.png" alt="">
                </div>
                <div>
                    <a href="logout.php"><img src="./image/Dashboard/Nav Section/logout.png" alt=""></a>
                </div>
            </section>
        </header>
        <main>
            <section class="dashboardTitleSection">
                <div><i class="fa-regular fa-square" onclick="allCheckToggler(this)" style="cursor: pointer;"></i></div>
                <div style="margin-left: 25px;"><i class="fa-regular fa-star" onclick="allStarToggler(this)" style="cursor: pointer;"></i></div>
                <div style="margin-left: 60px;"><p>Patient</p></div>
                <div style="margin-left: 160px;"><p>Title</p></div>
                <div style="margin-left: 355px;"><p>Status</p></div>
                <div style="margin-left: 150px;"><p>Zeit</p></div>
                <div style="margin-left: auto ; padding-left: 25px; cursor: pointer;"><img src="./image/Dashboard/TitleSection/trash.png" alt=""></div>
            </section>
            <section class="dashboardTableContent1">
                <table>

                    <?php

                    //Stablishing Connection...
                    include 'config.php';

                    if(isset($_POST['searchbtn']) && !empty($_POST['searchproduct']))
                    {
                        $name = $_POST['searchproduct'];
                        $query = "SELECT * FROM `appointment` where type = '$name' order by id desc";
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
                                    ON patient.number = appointment.u_id
                                    order by id desc";

                        $res = mysqli_query($conn, $query);
                    }

                    if (mysqli_num_rows($res) > 0) {
                    $c = 0;
                    while ($row = mysqli_fetch_assoc($res)) {
                    $c = $c + 1;
                    ?>
                    <tr >
                        <td class="table1FirstColumn">
                            <div><i class="fa-regular fa-square forAllCheck" onclick="checkToggler(this)"></i></div>
                            <div><i class="fa-regular fa-star forAllStar" onclick="starToggler(this)"></i></div>
                        </td>
                        <td class="table1SecondColumn">
                            <p><?php echo $row['name'] ?>

                                <?php
                                if($row['is_active'] == 1){
                                    ?>
                                    <img src="./image/Dashboard/TitleSection/verified-badge.png" alt="">
                                    <?php
                                }
                                ?>
                            </p>
                        </td>
                        <td class="table1ThirdColumn">
                            <p><?php echo $row['reason'] ?></p>
                        </td>
                        <td class="table1ForthColumn">
                            <div class="redStatus"></div>
                            <p class="redStatusP"><?php
                                    if($row['is_confirm'] == 1 and $row['is_completed'] == 0){
                                        echo 'In Progress';
                                    }else if($row['is_completed'] == 1){
                                            echo 'Completed';
                                    }else{
                                        echo 'Requested ';
                                    }
                                ?></p>
                        </td>
                        <td class="table1FifthColumn">
                            <p><?php echo $row['book_date'] ?></p>
                        </td>
                    </tr>
<?php
                    }
                    }

?>
                    <!-- <tr>
                        <td class="table1FirstColumn">
                            <div><i class="fa-regular fa-square checkboxIcon"></i></div>
                            <div><img src="./image/Dashboard/TitleSection/star.png" alt=""></div>
                        </td>
                    </tr> -->
                    <!-- <tr>
                        <td class="table1FirstColumn">
                            <div><i class="fa-solid fa-square-check"></i></div>
                            <div><img src="./image/Dashboard/TitleSection/star.png" alt=""></div>
                        </td>
                    </tr> -->
                </table>
            </section>
        </main>
    </section>
</main>
</body>
<script src="./script/app.js"></script>

</html>