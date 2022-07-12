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
            <p><a href="All.php" style="text-decoration: none;color:white"><b>Dashboard</b></a> | <a href="patienten.php" style="text-decoration: none;color:white">Patienten</p></a>
        </div>
    </section>


    <section class="dashboardAbsoluteSection">
        <header class="dashboardNavSection">
            <h2>Vacation</h2>
            <div>



            </div>
        </header>

        <main>
            <section class="dashboardTableContent1">


                <form action="vacation.php" method="post">
                    <div class="form-group">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Start Date</label>
                            <input type="date" class="form-control start_date" id="start_date"  name="start_date" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">End Date</label>
                            <input type="date" class="form-control end_date" id="end_date"  name="end_date" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="button" name="send" class="btn " id="submit-form" value="Einstellen" style="background-color: #33CCCC;color: white;width: 120px" >
                    </div><br><br><br>
                    <div class="form-group">
                        <a type="submit" class="btn btn-warning" href="<?php echo $_GET['redirect']?>.php" ><< back</a>
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
        $("#submit-form").click(function(){
            var startDate = document.getElementById("start_date").value;
            var endDate = document.getElementById("end_date").value;
            console.log(startDate);
            console.log(endDate);
            $.ajax({
                type: "POST",
                url: 'send_vacation.php',
                data: {'start_date': startDate,'end_date': endDate},
                success: function(response){
                    if(response == 1){
                       alert('App will be blocked')
                        document.getElementById("start_date").value = "";
                        document.getElementById("end_date").value = "";
                    }else{
                        alert('App block failed')
                        document.getElementById("start_date").value = "";
                        document.getElementById("end_date").value = "";
                    }
                }
            });
        });
            $("#end_date").change(function() {
            var startDate = document.getElementById("start_date").value;
            var endDate = document.getElementById("end_date").value;

            if ((Date.parse(endDate) <= Date.parse(startDate))) {
            alert("End date should be greater than Start date");
            document.getElementById("end_date").value = "";
        }
        });


    });
</script>
</html>