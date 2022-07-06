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
    <?php include 'sidebar.php';?>
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
                <section class="dashboardTableContent1">
                    <table class="table2 table3">
                        <tr class="table2Header table3Header">
                            <td class="backpagePointer"><i class="fa-solid fa-chevron-left"></i></td>
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
                                <p class="namePara">Max Mustermann <img
                                        src="./image/Dashboard/TitleSection/verified-badge.png" alt=""></p>
                            </td>
                            <td>
                                <p class="datePara">15.08.1975</p>
                            </td>
                            <td>
                                <p class="thirdPara">0175 1234 5678</p>
                            </td>
                            <td>
                                <p class="lastPara">15:03 &nbsp; 18 Mai 2022</p>
                            </td>
                        </tr>
                        <tr class="table3BreakPoint"></tr>
                        <tr class="table3Details">
                            <td>
                                <p style="width: 100%;">Kurze Beschreibung: <br>
                                    Ich bin umgeknickt und mein Fuß ist angeschwollen und blau. Ich brauche schnell
                                    einen Termin mit einem Arzt und ich brauche auch eine Krankschreibung.</p>
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
                <div class="thirdCard">
                    Datum gespeichert
                    <div><i class="fa-solid fa-circle" style="color: #407ef6;"></i></div>
                </div>
                <div class="thirdCard blueCard">
                    <section><i class="fa-solid fa-calendar-day"></i></section>
                    25. Mai 2022 &nbsp; 12:10
                </div>
            </main>
        </section>
    </section>
</main>
</body>
<script src="./script/app.js"></script>

</html>