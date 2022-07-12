<?php session_start();$auth = $_SESSION['data'];?>
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
    <?php $page="transfer"; include 'sidebar.php'?>
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
                                    referal.id as r_id,referal.u_id,referal.c_id,referal.is_confirm,referal.is_completed,    
                                    referal.date,categories.name as c_name,categories.detail,referal.is_failed
                                    FROM `referal`
                                    JOIN patient
                                    ON patient.number = referal.u_id
                                    JOIN categories
                                    ON categories.id = referal.c_id
                                    where referal.id = '$id'
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
                            <td class="backpagePointer"><a href="transfers.php"><i class="fa-solid fa-chevron-left"></i></a></td>
                            <td class="subpageHeaderHeadName">
                                <p>Überweisung Bestellung</p>
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
                                <p class="lastPara"><?php echo $row['date']?></p>
                            </td>
                        </tr>
                        <tr class="table3BreakPoint"></tr>
                        <tr class="table3Details">
                            <td>
                                <p>Überweisung:</p>
                            </td>
                            <td>
                                <p> <?php echo $row['c_name']?></p>
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
                <div class="firstCard">
                    <p>Patient ist nicht verifiziert!</p>
                    <p>
                        Manuelle Verifikation erforderlich. <br>
                        Z.B. Übereinstimmung der Daten
                    </p>
                    <p class="verificationPara">Verifizieren &nbsp<input type="checkbox" name="verify" id="verify" <?php echo $is_active ?>></p>
                </div>

                <div class="secondCard" id="acceptRequest" <?php echo $style11?>>
                    Rezept akzeptieren
                    <div><i class="<?php echo $is_confirm ?>" <?php echo $style1?>></i></div>
                </div>
                <div class="thirdCard" id="declineRequest" <?php echo $style22?>>
                    Rezept ablehnen
                    <div><i class="<?php echo $is_failed ?>" <?php echo $style2?>></i></div>
                </div>
            </main>
        </section>
    </section>
</main>
</body>
<script src="./script/app.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="logout_timer.js"></script>
<script>
    $(document).ready(function(){

        $("#acceptRequest").click(function(){
            console.log('accepted');
            $.ajax({
                type: "POST",
                url: 'accept_referal.php',
                data: {'r_id': <?php echo $row['r_id']?>,},
                success: function(response){
                    console.log('request sent')
                    location.reload();
                }
            });
        });

        $("#declineRequest").click(function(){
            console.log('declined');
            $.ajax({
                type: "POST",
                url: 'decline_referal.php',
                data: {'r_id': <?php echo $row['r_id']?>,},
                success: function(response){
                    console.log('request sent')
                    location.reload();
                }
            });
        });

        $("#verify").click(function(){
            console.log('verify');
            $.ajax({
                type: "POST",
                url: 'verify_user.php',
                data: {'user_id': <?php echo $row['id']?>,},
                success: function(response){
                    console.log('request sent')
                    location.reload();
                }
            });
        });
    });
</script>
</html>