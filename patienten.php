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
            <p><b>Dashboard</b> | Patienten</p>
        </div>
    </section>


    <section class="dashboardAbsoluteSection">
        <header class="dashboardNavSection">
            <h2>Patienten</h2>
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
            <section class="dashboardTableContent1">
                <table class="table2">
                    <tr class="table2Header">
                        <td class="table2FirstColumn">
                            <div><i class="fa-regular fa-square" onclick="allCheckToggler(this)"></i></div>
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
                        <td>
                            <p>Angemeldet seit</p>

                        </td>
                        <td class="tableSeparator"> | </td>
                        <td class="table2IconSect">
                            <div><img src="./image/Dashboard/UserTitleSection/sms.png" alt=""></div>
                            <div><img src="./image/Dashboard/TitleSection/verified-badge.png" alt=""></div>
                            <div><img src="./image/Dashboard/UserTitleSection/block.png" alt=""></div>
                        </td>
                    </tr>
                    <?php

                    //Stablishing Connection...
                    include 'config.php';

                    if(isset($_POST['searchbtn']) && !empty($_POST['searchproduct']))
                    {
                        $name = $_POST['searchproduct'];
                        $query = "SELECT * FROM `patient` where name = '$name' order by id desc";
                        $res = mysqli_query($conn, $query);
                    }
                    else{
                        $query = "SELECT * FROM `patient` order by id desc";
                        $res = mysqli_query($conn, $query);
                    }

                    if (mysqli_num_rows($res) > 0) {
                    $c = 0;
                    while ($row = mysqli_fetch_assoc($res)) {
                    $c = $c + 1;
                    ?>
                    <tr class="table2Content">
                        <td class="table2FirstColumn">
                            <div><i class="fa-regular fa-square forAllCheck" onclick="checkToggler(this)"></i></div>
                        </td>
                        <td class="table2SecondColumn">
                            <p><?php echo $row['name'];?></p>

                        </td>
                        <td class="table3ThirdColumn">
                            <p><?php echo $row['dob'];?></p>

                        </td>
                        <td class="table2ForthColumn">
                            <p><?php echo $row['number'];?></p>

                        </td>
                        <td class="table2FifthColumn">
                            <p><?php echo $row['date'];?></p>

                        </td>
                        <td class="tableSeparator hiddenElement"> | </td>
                        <td class="table2IconSect">
                        </td>
                    </tr>
<?php
                    }
                    }

?>
                </table>
            </section>
        </main>
    </section>
</main>
</body>
<script src="./script/app.js"></script>

</html>