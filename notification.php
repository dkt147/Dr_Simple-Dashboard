<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifications</title>

    <!-- //// CSS //// -->
    <link rel="stylesheet" href="./style/style.css">

    <!-- //// Google Fonts //// -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700&family=Poppins&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
        <?php 
        if($_GET['redirect'] == 'patienten'){?>
            <p><a href="All.php" style="text-decoration: none;color:white">Dashboard</a>| <a href="patienten.php" style="text-decoration: none;color:white"><b>Patienten</b></a> </p>
        <?php }else{
        ?>
             <p><a href="<?php echo $_GET['redirect']?>.php" style="text-decoration: none;color:white"> <b>Dashboard</b> </a> | <a href="patienten.php" style="text-decoration: none;color:white">Patienten</a></p>
             <?php }?>
        </div>
    </section>


    <section class="dashboardAbsoluteSection">
        <header class="dashboardNavSection">
            <h2>Notifications</h2>
            <div>

            </div>
        </header>

        <main>
            <section class="dashboardTableContent1">


                <form action="notification.php" method="post">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Message</label>
                        <textarea type="text-area" class="form-control" id="message" placeholder="Your message here" name="message" rows="4" cols="50"></textarea>
                    </div>

                    <div class="form-group">
                        <input type="button" name="send" class="btn" value="Nachricht senden" id="form-submit" style="width: 220px;background-color: #33CCCC;color: white">
                    </div><br><br><br>
                    <div class="form-group">
                        <a type="submit"  class="btn" href="<?php echo $_GET['redirect']?>.php"style="background-color: #33CCCC;color: white;width: 120px">Back</a>
                    </div>
                </form>
            </section>
        </main>
    </section>
</main>
</body>
<script src="./script/app.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="logout_timer.js"></script>
<script>
    $(document).ready(function(){

        $("#form-submit").click(function(){
            var message = document.getElementById("message").value;
            $.ajax({
                type: "POST",
                url: 'send_notification.php',
                data: {'message': message},
                success: function(response){
                    if(response == 1){
                        alert('Notification Sent')
                        document.getElementById("message").value = "";
                    }else{
                        alert('Notification Sent Failed')
                        document.getElementById("message").value = "";
                    }
                }
            });
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