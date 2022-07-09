<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vacation</title>

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
            <p><b>Dashboard</b> | Vacation</p>
        </div>
    </section>


    <section class="dashboardAbsoluteSection">
        <header class="dashboardNavSection">
            <h2>Vacation</h2>
            <div>



            </div>
            <?php include "action.php"; ?>
        </header>

        <main>
            <section class="dashboardTableContent1">

                <?php

                include 'config.php';

                if(isset($_POST['send'])){

                    $start_date = $_POST['start_date'];
                    $end_date = $_POST['end_date'];

                    $sql = "UPDATE vacation SET start_date = '$start_date', end_date = '$end_date'";
                    $res = mysqli_query($conn,$sql);
                    if($res){
                        echo "<script>alert('Vacation Notification Send')</script>";
                    }else{
                        echo "<script>alert('Vacation Notification Failed')</script>";
                    }
                }
                ?>
                <form action="vacation.php" method="post">
                    <div class="form-group">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Start Date</label>
                            <input type="date" class="form-control" id="exampleFormControlInput1"  name="start_date">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">End Date</label>
                            <input type="date" class="form-control" id="exampleFormControlInput1"  name="end_date">
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="submit" name="send" class="btn btn-primary" value="Send Notification">
                    </div><br><br><br>
                    <div class="form-group">
                        <a type="submit"  class="btn btn-warning" href="patienten.php"><< back</a>
                    </div>
                </form>
            </section>
        </main>
    </section>
</main>
</body>
<script src="./script/app.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $("#umbrella").click(function(){
            console.log('umbrella');
            //$.ajax({
            //    type: "POST",
            //    url: 'accept_referal.php',
            //    data: {'r_id': <?php //echo $row['r_id']?>//,},
            //    success: function(response){
            //        console.log('request sent')
            //        location.reload();
            //    }
            //});
        });


        $("#megaphone").click(function(){
            console.log('megaphone');
            //$.ajax({
            //    type: "POST",
            //    url: 'accept_referal.php',
            //    data: {'r_id': <?php //echo $row['r_id']?>//,},
            //    success: function(response){
            //        console.log('request sent')
            //        location.reload();
            //    }
            //});
        });
    });
</script>
</html>