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
    <?php $page="recipe"; include 'sidebar.php'?>
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
                                    patient.is_active,
                                    patient.dob,
                                    patient.number,
                                    recipe.id as recipe_id,
                                    recipe.name as r_name,
                                    recipe.power,
                                    appointment.id as a_id,appointment.r_id,appointment.type,appointment.date,appointment.is_completed,appointment.is_confirm,   appointment.is_failed, 
                                    appointment.book_date,appointment.reason,appointment.d_id,appointment.is_star
                                    FROM `appointment`
                                    JOIN patient
                                    ON patient.number = appointment.u_id
                                    JOIN recipe
                                    ON recipe.id = appointment.r_id WHERE appointment.id = '$id'";

                    $res = mysqli_query($conn, $query);
                    $row = mysqli_fetch_assoc($res);

                    $active = $row['is_active'];
                    $failed = $row['is_failed'];
                    $completed = $row['is_completed'];
                    if($row['is_active'] == 1){
                        $event = 'pointer-events:none';
                        $show = true;
                        $is_active = "checked disabled";
                    }else{
                        $event = '';
                        $show = false;
                        $is_active = "";
                    }
                    if($row['is_completed'] == 1){
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
                            <td class="backpagePointer" ><a href="Recipe.php"><i class="fa-solid fa-chevron-left" ></i></a></td>
                            <td class="subpageHeaderHeadName">
                                <p>Rezept Bestellung</p>
                            </td>
                            <td class="tableSeparator2">|</td>
                            <td class="table3HeaderIcons">
                           
                                <?php
                                    if($row['is_star'] == 1){
                                    ?>
                                    <div class="unstar"><i class="fa-solid fa-star forAllStar" onclick="starToggler(this)" ></i>
                                        <input type="checkbox" class="inputStarField" name="star" value="<?php echo $_GET['id'] ?>"  checked>
                                        <?php
                                        }else{
                                        ?>
                                        <div class="single_star"><i class="fa-regular fa-star forAllStar" onclick="starToggler(this)" ></i>
                                            <input type="checkbox" class="inputStarField" name="star" value="<?php echo $_GET['id'] ?>" >
                                            <?php
                                            }
                                            ?>
                                    </div>
                                <section class="reply_user"><i class="fa-solid fa-reply"></i></section>
                                <section class="delete-btn"><img src="./image/Dashboard/TitleSection/trash.png" alt=""></section>
                            </td>
                        </tr>
                        <tr class="table3Content">
                            <td>
                                <input hidden value="<?php echo $row['id']?>" id="patient_id">
                                <input hidden value="<?php echo $row['number']?>" id="number">
                                <input hidden value="<?php echo $row['a_id']?>" id="recipe_id">
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
                                <p>Medikament:</p>
                            </td>
                            <td>
                                <p><?php echo $row['r_name']?></p>
                            </td>
                        </tr>
                        <tr class="table3Details">
                            <td>
                                <p>Dosis:</p>
                            </td>
                            <td>
                                <p><?php echo $row['power']?></p>
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

                <?php if($active == 1){?>
                <?php if($failed == 0){?>
                <div class="secondCard" id="acceptRequest" <?php echo $style11?> >
                    Rezept akzeptieren
                    <div><i class="<?php echo $is_confirm ?>" <?php echo $style1?>></i></div>
                </div>
                <?php }else{?>
                        <div class="secondCard" id="acceptRequest"  style="pointer-events: none">
                            Rezept akzeptieren
                            <div><i class="<?php echo $is_confirm ?>" <?php echo $style1?>></i></div>
                        </div>
                <?php }if($completed == 0){?>
                <div class="thirdCard" id="declineRequest" <?php echo $style22?>>
                    Rezept ablehnen
                    <div><i class="<?php echo $is_failed ?>" <?php echo $style2?>></i></div>
                </div>
                    <?php }else{?>
                        <div class="thirdCard" id="declineRequest" style="pointer-events: none">
                            Rezept ablehnen
                            <div><i class="<?php echo $is_failed ?>" <?php echo $style2?>></i></div>
                        </div>
                <?php }}else{ ?>

                    <div class="secondCard" id="acceptRequest" style="pointer-events: none" <?php echo $style11?>>
                        Rezept akzeptieren
                        <div><i class="<?php echo $is_confirm ?>" <?php echo $style1?>></i></div>
                    </div>
                    <div class="thirdCard" id="declineRequest" style="pointer-events: none" <?php echo $style22?>>
                        Rezept ablehnen
                        <div><i class="<?php echo $is_failed ?>" <?php echo $style2?>></i></div>
                    </div>


                <?php } ?>
            </main>
        </section>
    </section>
</main>
</body>
<script src="./script/app.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="logout_timer.js"></script>
<script>
    $(document).ready(function(){

        $("#acceptRequest").click(function(){
            console.log('accepted');
            $.ajax({
                type: "POST",
                url: 'accept_recipe.php',
                data: {'o_id': <?php echo $_GET['id']?>,},
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
                url: 'decline_recipe.php',
                data: {'o_id': <?php echo $_GET['id']?>,},
                success: function(response){
                    console.log('request sent')
                    location.reload();
                }
            });
        });

        $("#verify").click(function(){
            var id = document.getElementById('patient_id').value
            console.log(id)
            $.ajax({
                type: "POST",
                url: 'verify_user.php',
                data: {'user_id': id},
                success: function(response){
                    console.log('request sent')
                    location.reload();
                }
            });
        });


                    $(".reply_user").on("click",function(){

            var id = document.getElementById('number').value
            console.log(id)
                let person = prompt("Please enter message:", "");
                if (person == null || person == "") {

                } else {
                        $.ajax({
                            url : "reply__recipe.php",
                            type : "POST",
                            data : {id : id,message : person,},
                            success : function(data){
                                if(data == 1){
                                    alert("Message Sent.");
                                    location.reload();
                                }else{
                                }
                            }
                        });
                }

            });


                // Single Data Star
                $(".single_star").on("click",function(){
                    var id = document.getElementById('recipe_id').value
            console.log(id)
               $.ajax({
                type: "POST",
                url: 'star_single_recipe.php',
                data: {'id': id},
                success: function(response){
                    if(data == 1){
                            location.reload();
                        }else{
                        }
                }
            });
        });

        // Single Data Star
        $(".unstar").on("click",function(){

            var id = document.getElementById('recipe_id').value
            console.log(id)
               $.ajax({
                type: "POST",
                url: 'unstar_single_recipe.php',
                data: {'id': id},
                success: function(response){
                    if(response == 1){
                            location.reload();
                        }else{
                        }
                }
            });

    
        });


        // Multiple Data Delete
        $(".delete-btn").on("click",function(){
            var id = document.getElementById('recipe_id').value
            console.log(id)

            if(confirm("Do you really want to delete this record?")){
                $.ajax({
                    url : "delete_single_recipe.php",
                    type : "POST",
                    data : {id : id},
                    success : function(data){
                        if(data == 1){
                            location.href = 'Recipe.php';
                        }else{
                        }
                    }
                });
            }
        });

        
var fixed = 3600        
var seconds=fixed;
var timer;
function myFunction() {
  if(seconds < fixed) { // I want it to say 1:00, not 60
  }
  if (seconds >0 ) { // so it doesn't go to -1
     seconds--;
console.log(seconds)
  } else {
     clearInterval(timer);
     window.location.replace("logout.php");
  }
}

$( ".dashboardWholeBody" ).mousemove(function( event ) {
seconds=fixed;
});
  
if(!timer) {
    timer = window.setInterval(function() { 
      myFunction();
    }, 1000); // every second
  }
  

    });
</script>
</html>