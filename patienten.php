
<?php $page="patienten"; ?>
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
    <section class="dashboardStaticSection">
        <img src="./image/logo.png" alt="">

        <div style="color: white;">
            <p><a href="All.php" style="text-decoration: none;color:white">Dashboard</a> | <b>Patienten</b></p>
        </div>
    </section>


    <section class="dashboardAbsoluteSection">
        <header class="dashboardNavSection">
            <h2>Patienten</h2>
            <div>
                <form action="patienten.php" method="post">
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
        </header>
        <main>
            <section class="dashboardTableContent1">
                <table class="table2">
                    <tbody>
                    <tr class="table2Header">
                        <td class="table2FirstColumn">
                            <div><i class="fa-regular fa-square forAllCheck" onclick="checkToggler(this)"></i><input type="checkbox" class="inputCheckField" name="check" value="<?php echo $row['a_id'] ?>" ></div>
                            </div>

                        </td>
                        <td class="table2SecondColumn">
                            <p>Patient</p>

                        </td>
                        <td class="table3ThirdColumn">
                            <p>Geburtsdatum</p>

                        </td>
                        <td class="table2ForthColumn">
                            <p>Telefonnummer</p>

                        </td>
                        <td class="lastParaPatient">
                            <p>Angemeldet seit</p>

                        </td>
                        <td class="tableSeparator"> | </td>
                        <td class="table2IconSect">
                            <div id="reply_user"><img src="./image/Dashboard/UserTitleSection/sms.png" alt=""></div>
                            <div id="verify_user"><img src="./image/Dashboard/TitleSection/verified-badge.png" alt=""></div>
                            <div id="block_user"><img src="./image/Dashboard/UserTitleSection/block.png" alt=""></div>
                        </td>
                    </tr>
                    <?php

                    //Stablishing Connection...
                    include 'config.php';

                    if(isset($_POST['searchbtn']) && (!empty($_POST['searchproduct']) or !empty($_POST['filterproduct'])))
                    {
                        $name = $_POST['searchproduct'];
                        $filter = $_POST['filterproduct'];

                        $query = "SELECT * FROM `patient` where name = '$name' order by date asc";
                        $res = mysqli_query($conn, $query);
                    }
                    else{
                        $query = "SELECT * FROM `patient` order by date asc";
                        $res = mysqli_query($conn, $query);
                    }

                    if (mysqli_num_rows($res) > 0) {
                    $c = 0;
                    while ($row = mysqli_fetch_assoc($res)) {
                    $c = $c + 1;
                    ?>
                    <tr class="table2Content">
                        <td class="table2FirstColumn">
                            <div><i class="fa-regular fa-square forAllCheck" onclick="checkToggler(this)"></i><input type="checkbox" class="inputCheckField" name="check" value="<?php echo $row['id'] ?>" ></div>

                        </td>
                        <td class="table2SecondColumn">
                            <p><?php echo $row['name'];?>
<?php
if($row['is_active'] == 1){
    ?>
                                <img src="./image/Dashboard/TitleSection/verified-badge.png" alt="" >

    <?php
}
?>
                            </p>

                        </td>
                        <td class="table3ThirdColumn">
                            <p><?php echo $row['dob'];?></p>

                        </td>
                        <td class="table2ForthColumn">
                            <p><?php echo $row['number'];?></p>

                        </td>
                        <td class=" table2FifthColumn">
                            <p class="lastParaPatient"><?php echo $row['date'];?></p>

                        </td>
                        <td class="tableSeparator hiddenElement"> | </td>
                        <td class="table2IconSect">
                            <!-- <?php
                            if($row['is_active'] == 1){
                                ?>
                                <img src="./image/Dashboard/TitleSection/verified-badge.png" alt="">
                                <?php
                            }if($row['is_block'] == 1){
                                ?>
                                <img src="./image/Dashboard/UserTitleSection/block.png" alt="" >
                                <?php
                            }
                            ?> -->
                        </td>

                    </tr>
<?php
                    }
                    }

?>
                    </tbody>
                </table>
            </section>
        </main>
        <div class="bottomAbsoluteDiv"></div>
    </section>
</main>
</body>
<script src="./script/app.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="logout_timer.js"></script>
<script type="text/javascript">
    $(document).ready(function(){

        // Verify user
        $("#verify_user").on("click",function(){

            var id = [];

            // Converted all checked checkbox's value into Array
            $(":checkbox:checked").each(function(key){
                id[key] = $(this).val();
            });
            console.log(id)

            if(id.length === 0){
                alert("Please Select atleast one star.");
            }else{
                if(confirm("Do you really want to verify these records ?")){
                    $.ajax({
                        url : "verify__user.php",
                        type : "POST",
                        data : {id : id},
                        success : function(data){
                            if(data == 1){
                                alert("Marked as verified.");
                                location.reload();
                            }else{
                            }
                        }
                    });
                }
            }
        });

        // Block User
        $("#block_user").on("click",function(){

            var id = [];

            // Converted all checked checkbox's value into Array
            $(":checkbox:checked").each(function(key){
                id[key] = $(this).val();
            });
            console.log(id)

            if(id.length === 0){
                alert("Please Select atleast one star.");
            }else{
                    $.ajax({
                        url : "block__user.php",
                        type : "POST",
                        data : {id : id},
                        success : function(data){
                            if(data == 1){
                                location.reload();
                            }else{
                            }
                        }
                    });
            }
        });

        // Block User
        $("#reply_user").on("click",function(){

            var id = [];

            // Converted all checked checkbox's value into Array
            $(":checkbox:checked").each(function(key){
                id[key] = $(this).val();
            });
            console.log(id)

            if(id.length === 0){
                alert("Please Select atleast one star.");
            }else{
                let person = prompt("Please enter message:", "");
                if (person == null || person == "") {

                } else {
                        $.ajax({
                            url : "reply__user.php",
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