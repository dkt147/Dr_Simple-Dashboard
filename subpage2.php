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
    <?php $page="consultation"; include 'sidebar.php'?>
    <section class="dashboardAbsoluteSection dashboardOfSubpage">
        <section class="dashboardMainLeftSide">
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
            </header>
            <main>
                <?php

                //Stablishing Connection...
                include 'config.php';
                $id = $_GET['id'];
                $query = "SELECT 
                                    patient.id,
                                    patient.name,
                                    patient.dob,
                                    patient.number,
                                    patient.is_active,
                                    appointment.id as a_id,appointment.type,appointment.date,appointment.is_completed,appointment.is_confirm,appointment.is_failed,    
                                    appointment.book_date,appointment.reason,appointment.d_id,appointment.updated_at
                                    FROM `appointment`
                                    JOIN patient
                                    ON patient.number = appointment.u_id
                                    WHERE appointment.type = 'consult'  and appointment.id = '$id'
                                    order by id desc";

                $res = mysqli_query($conn, $query);
                $row = mysqli_fetch_assoc($res);

                if($row['is_active'] == 1){
                    $show = true;
                    $is_active = "checked disabled";
                }else{
                    $show = false;
                    $is_active = "";
                }
                if($row['updated_at'] != NULL){
                    $date_style = "disabled";
                    $date_value = "value='".$row['book_date']."'";
                }else{
                    $date_style = "";
                    $date_value = "";
                }
                if($row['is_confirm'] == 1){
                    $is_confirm = "fas fa-circle";
                    $style1 = "style='color: #407ef6;pointer-events:none'";
                    $style11 = "style='pointer-events:none'";
                }else{
                    $is_confirm = "fa-solid fa-circle";
                    $style1 = "";
                    $style11 = "";
                }
                if($row['is_failed'] == 1){
                    $is_failed = "fas fa-circle ";
                    $style2 = "style='color: #407ef6;pointer-events:none'";
                    $style22 = "style='pointer-events:none'";
                }else{
                    $is_failed = "fa-solid fa-circle";
                    $style2 = "";
                    $style22 = "";
                }

                ?>
                <section class="dashboardTableContent1">
                    <table class="table2 table3">
                        <tr class="table2Header table3Header">
                            <td class="backpagePointer"><a href="consultation.php"><i class="fa-solid fa-chevron-left"></i></a></td>
                            <td class="subpageHeaderHeadName">
                                <p>Akute Sprechstunde Anfrage</p>
                            </td>
                            <td class="tableSeparator2">|</td>
                            <td class="table3HeaderIcons">
                                <section><i class="fa-regular fa-star"></i></section>
                                <section><i class="fa-solid fa-reply"></i></section>
                                <section><img src="./image/Dashboard/TitleSection/trash.png" alt=""></section>
                            </td>
                        </tr>
                        <tr class="table3Content">
                            <td>
                                <p class="namePara"><?php echo $row['name']?>
                                    <?php
                                    if($show == true){
                                        ?>
                                        <img src="./image/Dashboard/TitleSection/verified-badge.png" alt="">
                                        <?php
                                    }
                                    ?>
                                </p>
                            </td>
                            <td>
                                <p class="datePara"><?php echo $row['dob']?></p>
                            </td>
                            <td>
                                <p class="thirdPara"><?php echo $row['number']?></p>
                            </td>
                            <td>
                                <p class="lastPara"><?php echo $row['book_date']?></p>
                            </td>
                        </tr>
                        <tr class="table3BreakPoint"></tr>
                        <tr class="table3Details">
                            <td>
                                <p style="width: 100%;">Kurze Beschreibung: <br>
                                    <?php echo $row['reason']?></p>
                            </td>
                        </tr>
                    </table>
                </section>
            </main>
        </section>
        <section class="dashboardMainRightSide">
            <header>
                <section class="dashboardNavEndContainer subpageNavEndContainer">
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

                                <div class="thirdCard thirdCard2" id="acceptRequest" >
                                    Datum speichern
                                   <input type="date" value="<?php echo $row['book_date']?>" disabled id="save_date">
                                </div>

                <div class="thirdCard3" id="declineRequest" <?php echo $style22?>>
                    Anfrage ablehnen
                    <form action="save_date_consult.php" method="post">
                        <input type="text" value="<?php echo $row['a_id']?>" hidden name="a_id">
                    <input type="date" id="save_date_value" <?php echo $date_style?> <?php echo $date_value?> name="save_date_value" required>
                    <input type="submit"  value="save date" <?php echo $date_style?>>
                    </form>
                    <div></div>
                </div>
            </main>
        </section>
    </section>
</main>
</body>

<script src="./script/app.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</html>