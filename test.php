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
        <section class="dashboardIconSection">
            <div>
                <img src="./image/firstIcon-A.png" alt="">
                <p class="activeLink">Alle</p>
            </div>
            <div>
                <img src="./image/secondIcon.png" alt="">
                <p>Rezepte</p>
            </div>
            <div>
                <img src="./image/thirdIcon.png" alt="">
                <p>Überweisungen</p>
            </div>
            <div>
                <img src="./image/thirdLastIcon.png" alt="">
                <p>Akute Sprechstunde</p>
            </div>
            <div>
                <img src="./image/secondLastIcon.png" alt="">
                <p>Regulärer Termin</p>
            </div>
            <div>
                <img src="./image/lastIcon.png" alt="">
                <p>Covid-19 Impfung</p>
            </div>
        </section>
        <div class="dashboardsChangerDiv">
            <p><span onclick="dashboardRedirector(this)" class="activeDashboard">Dashboard</span> | <span onclick="patientenRedirector(this)">Patienten</span></p>
        </div>
    </section>
    <section class="dashboardAbsoluteSection">
        <header class="dashboardNavSection">
            <h2>Dashboard</h2>
            <div>

                <form action="">


                    <section>
                        <img src="./image/Dashboard/Nav Section/search.png" width="20px" height="19px" alt="">
                        <input type="text" placeholder="Suchen">
                    </section>
                    <div>
                        <img src="./image/Dashboard/Nav Section/setting.png" width="22px" height="22px" alt="">
                    </div>


                </form>
            </div>
            <section class="dashboardNavEndContainer">
                <div>
                    <img src="./image/Dashboard/Nav Section/umbrella.png" alt="">
                </div>
                <div style="margin-left: 25px;">
                    <img src="./image/Dashboard/Nav Section/megaphone.png" alt="">
                </div>
                <div>
                    <img src="./image/Dashboard/Nav Section/logout.png" alt="">
                </div>
            </section>


        </header>
        <main>
            <section class="dashboardTitleSection">
                <div><i class="fa-regular fa-square" onclick="allCheckToggler(this)" style="cursor: pointer;"></i>
                </div>
                <div style="margin-left: 25px;"><i class="fa-regular fa-star" onclick="allStarToggler(this)"
                                                   style="cursor: pointer;"></i></div>
                <div style="margin-left: 60px;">
                    <p>Patient</p>
                </div>
                <div style="margin-left: 160px;">
                    <p>Title</p>
                </div>
                <div style="margin-left: 387px;">
                    <p>Status</p>
                </div>
                <div style="margin-left: 125px;">
                    <p>Zeit</p>
                </div>
                <div style="margin-left: auto ; padding-left: 25px; cursor: pointer;">
                    <p style="color: gray; margin-right: 30px;">|</p>
                    <img src="./image/Dashboard/TitleSection/trash.png" alt=""></div>
            </section>
            <section class="dashboardTableContent1">
                <table>
                    <tbody>
                    <tr>
                        <td class="table1FirstColumn">
                            <div><i class="fa-regular fa-square forAllCheck"
                                    onclick="checkToggler(this)"></i><input type="checkbox"
                                                                            class="inputCheckField" name="check"></div>

                            <div><i class="fa-regular fa-star forAllStar" onclick="starToggler(this)"></i><input
                                        type="checkbox" class="inputStarField" name="star"></div>
                        </td>
                        <td class="table1SecondColumn">
                            <p>Max Mustermann <img src="./image/Dashboard/TitleSection/verified-badge.png"
                                                   alt="">
                            </p>
                        </td>
                        <td class="table1ThirdColumn">
                            <p>Rezept Bestellung</p>
                        </td>
                        <td class="table1ForthColumn">
                            <div class="redStatus"><p class="redStatusP">Bestellt</p></div>

                        </td>
                        <td class="table1FifthColumn">
                            <p>Heute 17:12</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="table1FirstColumn">
                            <div><i class="fa-regular fa-square forAllCheck"
                                    onclick="checkToggler(this)"></i><input type="checkbox"
                                                                            class="inputCheckField" name="check"></div>

                            <div><i class="fa-regular fa-star forAllStar" onclick="starToggler(this)"></i><input
                                        type="checkbox" class="inputStarField" name="star"></div>
                        </td>
                        <td class="table1SecondColumn">
                            <p>Max Mustermann <img src="./image/Dashboard/TitleSection/verified-badge.png"
                                                   alt="">
                            </p>
                        </td>
                        <td class="table1ThirdColumn">
                            <p>Akute Sprechstunde Anfrage Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto, quidem. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad, fugiat?</p>
                        </td>
                        <td class="table1ForthColumn">
                            <div class="redStatus"><p class="redStatusP">Angefragt</p></div>

                        </td>
                        <td class="table1FifthColumn">
                            <p>18. Mai 2022</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="table1FirstColumn">
                            <div><i class="fa-regular fa-square forAllCheck"
                                    onclick="checkToggler(this)"></i><input type="checkbox"
                                                                            class="inputCheckField" name="check"></div>
                            <div><i class="fa-regular fa-star forAllStar" onclick="starToggler(this)"></i><input
                                        type="checkbox" class="inputStarField" name="star"></div>
                        </td>
                        <td class="table1SecondColumn">
                            <p>Max Mustermann <img src="./image/Dashboard/TitleSection/verified-badge.png"
                                                   alt="">
                            </p>
                        </td>
                        <td class="table1ThirdColumn">
                            <p></p>
                        </td>
                        <td class="table1ForthColumn">
                            <div class="blackStatus"><p class="blackStatusP">Abgelehnt</p></div>

                        </td>
                        <td class="table1FifthColumn">
                            <p>18. Mai 2022</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="table1FirstColumn">
                            <div><i class="fa-regular fa-square forAllCheck"
                                    onclick="checkToggler(this)"></i><input type="checkbox"
                                                                            class="inputCheckField" name="check"></div>
                            <div><i class="fa-regular fa-star forAllStar" onclick="starToggler(this)"></i><input
                                        type="checkbox" class="inputStarField" name="star"></div>
                        </td>
                        <td class="table1SecondColumn">
                            <p>Max Mustermann</p>
                        </td>
                        <td class="table1ThirdColumn">
                            <p>Rezept Bestellung</p>
                        </td>
                        <td class="table1ForthColumn">
                            <div class="lightBlueStatus"><p class="lightBlueStatusP">Fertig</p></div>

                        </td>
                        <td class="table1FifthColumn">
                            <p>16. Mai 2022</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="table1FirstColumn">
                            <div><i class="fa-regular fa-square forAllCheck"
                                    onclick="checkToggler(this)"></i><input type="checkbox"
                                                                            class="inputCheckField" name="check"></div>
                            <div><i class="fa-regular fa-star forAllStar" onclick="starToggler(this)"></i><input
                                        type="checkbox" class="inputStarField" name="star"></div>
                        </td>
                        <td class="table1SecondColumn">
                            <p>Max Mustermann</p>
                        </td>
                        <td class="table1ThirdColumn">
                            <p>Regulärer Termin Anfrage</p>
                        </td>
                        <td class="table1ForthColumn">
                            <div class="blueStatus"><p class="blueStatusP">21. Mai 2022<br />13:00</p></div>

                        </td>
                        <td class="table1FifthColumn">
                            <p>15. Mai 2022</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="table1FirstColumn">
                            <div><i class="fa-regular fa-square forAllCheck"
                                    onclick="checkToggler(this)"></i><input type="checkbox"
                                                                            class="inputCheckField" name="check"></div>
                            <div><i class="fa-regular fa-star forAllStar" onclick="starToggler(this)"></i><input
                                        type="checkbox" class="inputStarField" name="star"></div>
                        </td>
                        <td class="table1SecondColumn">
                            <p>Max Mustermann</p>
                        </td>
                        <td class="table1ThirdColumn">
                            <p>Überweisung Bestellung </p>
                        </td>
                        <td class="table1ForthColumn">
                            <div class="lightBlueStatus"><p class="lightBlueStatusP">Fertig</p></div>

                        </td>
                        <td class="table1FifthColumn">
                            <p>15. Mai 2022</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="table1FirstColumn">
                            <div><i class="fa-regular fa-square forAllCheck"
                                    onclick="checkToggler(this)"></i><input type="checkbox"
                                                                            class="inputCheckField" name="check"></div>
                            <div><i class="fa-regular fa-star forAllStar" onclick="starToggler(this)"></i><input
                                        type="checkbox" class="inputStarField" name="star"></div>
                        </td>
                        <td class="table1SecondColumn">
                            <p>Max Mustermann</p>
                        </td>
                        <td class="table1ThirdColumn">
                            <p>Akute Sprechstunde Anfrage</p>
                        </td>
                        <td class="table1ForthColumn">
                            <div class="blueStatus"><p class="blueStatusP">24 Mai 2022<br />16:00</p></div>

                        </td>
                        <td class="table1FifthColumn">
                            <p>14. Mai 2022</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="table1FirstColumn">
                            <div><i class="fa-regular fa-square forAllCheck"
                                    onclick="checkToggler(this)"></i><input type="checkbox"
                                                                            class="inputCheckField" name="check"></div>
                            <div><i class="fa-regular fa-star forAllStar" onclick="starToggler(this)"></i><input
                                        type="checkbox" class="inputStarField" name="star"></div>
                        </td>
                        <td class="table1SecondColumn">
                            <p>Max Mustermann</p>
                        </td>
                        <td class="table1ThirdColumn">
                            <p>Regulärer Termin Anfrage</p>
                        </td>
                        <td class="table1ForthColumn">
                            <div class="blueStatus"><p class="blueStatusP">29 Mai 2022<br />11:30</p></div>

                        </td>
                        <td class="table1FifthColumn">
                            <p>11. Mai 2022</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="table1FirstColumn">
                            <div><i class="fa-regular fa-square forAllCheck"
                                    onclick="checkToggler(this)"></i><input type="checkbox"
                                                                            class="inputCheckField" name="check"></div>
                            <div><i class="fa-regular fa-star forAllStar" onclick="starToggler(this)"></i><input
                                        type="checkbox" class="inputStarField" name="star"></div>
                        </td>
                        <td class="table1SecondColumn">
                            <p>Max Mustermann</p>
                        </td>
                        <td class="table1ThirdColumn">
                            <p>Regulärer Termin Anfrage</p>
                        </td>
                        <td class="table1ForthColumn">
                            <div class="blueStatus"><p class="blueStatusP">29 Mai 2022<br />11:30</p></div>

                        </td>
                        <td class="table1FifthColumn">
                            <p>11. Mai 2022</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="table1FirstColumn">
                            <div><i class="fa-regular fa-square forAllCheck"
                                    onclick="checkToggler(this)"></i><input type="checkbox"
                                                                            class="inputCheckField" name="check"></div>
                            <div><i class="fa-regular fa-star forAllStar" onclick="starToggler(this)"></i><input
                                        type="checkbox" class="inputStarField" name="star"></div>
                        </td>
                        <td class="table1SecondColumn">
                            <p>Max Mustermann</p>
                        </td>
                        <td class="table1ThirdColumn">
                            <p>Regulärer Termin Anfrage</p>
                        </td>
                        <td class="table1ForthColumn">
                            <div class="blueStatus"><p class="blueStatusP">29 Mai 2022<br />11:30</p></div>

                        </td>
                        <td class="table1FifthColumn">
                            <p>11. Mai 2022</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="table1FirstColumn">
                            <div><i class="fa-regular fa-square forAllCheck"
                                    onclick="checkToggler(this)"></i><input type="checkbox"
                                                                            class="inputCheckField" name="check"></div>
                            <div><i class="fa-regular fa-star forAllStar" onclick="starToggler(this)"></i><input
                                        type="checkbox" class="inputStarField" name="star"></div>
                        </td>
                        <td class="table1SecondColumn">
                            <p>Max Mustermann</p>
                        </td>
                        <td class="table1ThirdColumn">
                            <p>Regulärer Termin Anfrage</p>
                        </td>
                        <td class="table1ForthColumn">
                            <div class="blueStatus"><p class="blueStatusP">29 Mai 2022<br />11:30</p></div>

                        </td>
                        <td class="table1FifthColumn">
                            <p>11. Mai 2022</p>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </section>
        </main>
        <div class="bottomAbsoluteDiv"></div>
    </section>
</main>
</body>
<script src="./script/app.js"></script>

</html>