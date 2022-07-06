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
    <?php $page="covid"; include 'sidebar.php'?>
    <section class="dashboardAbsoluteSection calenderDashboardForPadding">
        <header class="calenderDashboardHeader">
            <section class="dashboardNavSection">
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
            </section>

            <div class="termineBtnDiv">
                <div>
                    <i class="fa-solid fa-plus"></i>
                    <p>Termine</p>
                </div>
            </div>
        </header>

        <section class="calendarMainContainer">
            <div class="calendarMonthTitle"><p><i class="fa-solid fa-angle-left" onclick="monthChanger(this, 0)" ></i><span> Juni </span><i class="fa-solid fa-angle-right" onclick="monthChanger(this, 1)"></i></p></div>
            <section class="calendarWholeContainer">
                <table class="calendarTable">
                    <tr class="calenderFirstRow">
                        <td><p>Mo <br> 30</p></td>
                        <td class="coloredCell">
                            <p>Di <br> 31</p>
                            <section>
                                <div><i class="fa-solid fa-circle"></i> <span>10:00</span> Max Mustermann </div>
                                <div><i class="fa-solid fa-circle"></i> <span>10:05</span> Max Mustermann </div>
                                <div><i class="fa-solid fa-circle" style="color: #f33130;"></i> <span>10:10</span> </div>
                                <div><i class="fa-solid fa-circle"></i> <span>10:05</span> Max Mustermann </div>
                            </section>
                        </td>
                        <td>
                            <p>Mi <br> 1</p>
                        </td>
                        <td>
                            <p>Do <br> 2</p>
                        </td>
                        <td class="coloredCell">
                            <p>Fr <br> 3</p>
                            <section>
                                <div><i class="fa-solid fa-circle"></i> <span>10:00</span> Max Mustermann </div>
                                <div><i class="fa-solid fa-circle"></i> <span>10:05</span> Max Mustermann </div>
                                <div><i class="fa-solid fa-circle" style="color: #f33130;"></i> <span>10:10</span> </div>
                                <div><i class="fa-solid fa-circle"></i> <span>10:05</span> Max Mustermann </div>
                            </section>
                        </td>
                    </tr>
                    <tr>
                        <td><p>6</p></td>
                        <td class="coloredCell">
                            <p>7</p>
                            <section>
                                <div><i class="fa-solid fa-circle"></i> <span>10:00</span> Max Mustermann </div>
                                <div><i class="fa-solid fa-circle"></i> <span>10:05</span> Max Mustermann </div>
                                <div><i class="fa-solid fa-circle" style="color: #f33130;"></i> <span>10:10</span> </div>
                                <div><i class="fa-solid fa-circle"></i> <span>10:05</span> Max Mustermann </div>
                            </section>
                        </td>
                        <td>
                            <p>8</p>
                        </td>
                        <td>
                            <p>9</p>
                        </td>
                        <td class="coloredCell">
                            <p>10</p>
                            <section>
                                <div><i class="fa-solid fa-circle"></i> <span>10:00</span> Max Mustermann </div>
                                <div><i class="fa-solid fa-circle"></i> <span>10:05</span> Max Mustermann </div>
                                <div><i class="fa-solid fa-circle" style="color: #f33130;"></i> <span>10:10</span> </div>
                                <div><i class="fa-solid fa-circle"></i> <span>10:05</span> Max Mustermann </div>
                            </section>
                        </td>
                    </tr>
                    <tr>
                        <td><p>11</p></td>
                        <td class="coloredCell">
                            <p>12</p>
                            <section>
                                <div><i class="fa-solid fa-circle"></i> <span>10:00</span> Max Mustermann </div>
                                <div><i class="fa-solid fa-circle"></i> <span>10:05</span> Max Mustermann </div>
                                <div><i class="fa-solid fa-circle" style="color: #f33130;"></i> <span>10:10</span> </div>
                                <div><i class="fa-solid fa-circle"></i> <span>10:05</span> Max Mustermann </div>
                            </section>
                        </td>
                        <td>
                            <p>13</p>
                        </td>
                        <td>
                            <p>14</p>
                        </td>
                        <td class="coloredCell">
                            <p>15</p>
                            <section>
                                <div><i class="fa-solid fa-circle"></i> <span>10:00</span> Max Mustermann </div>
                                <div><i class="fa-solid fa-circle"></i> <span>10:05</span> Max Mustermann </div>
                                <div><i class="fa-solid fa-circle" style="color: #f33130;"></i> <span>10:10</span> </div>
                                <div><i class="fa-solid fa-circle"></i> <span>10:05</span> Max Mustermann </div>
                            </section>
                        </td>
                    </tr>
                    <tr>
                        <td><p>16</p></td>
                        <td class="coloredCell">
                            <p>17</p>
                            <section>
                                <div><i class="fa-solid fa-circle"></i> <span>10:00</span> Max Mustermann </div>
                                <div><i class="fa-solid fa-circle"></i> <span>10:05</span> Max Mustermann </div>
                                <div><i class="fa-solid fa-circle" style="color: #f33130;"></i> <span>10:10</span> </div>
                                <div><i class="fa-solid fa-circle"></i> <span>10:05</span> Max Mustermann </div>
                            </section>
                        </td>
                        <td>
                            <p>18</p>
                        </td>
                        <td>
                            <p>19</p>
                        </td>
                        <td class="coloredCell">
                            <p>20</p>
                            <section>
                                <div><i class="fa-solid fa-circle"></i> <span>10:00</span> Max Mustermann </div>
                                <div><i class="fa-solid fa-circle"></i> <span>10:05</span> Max Mustermann </div>
                                <div><i class="fa-solid fa-circle" style="color: #f33130;"></i> <span>10:10</span> </div>
                                <div><i class="fa-solid fa-circle"></i> <span>10:05</span> Max Mustermann </div>
                            </section>
                        </td>
                    </tr>
                    <tr>
                        <td><p>21</p></td>
                        <td class="coloredCell">
                            <p>22</p>
                            <section>
                                <div><i class="fa-solid fa-circle"></i> <span>10:00</span> Max Mustermann </div>
                                <div><i class="fa-solid fa-circle"></i> <span>10:05</span> Max Mustermann </div>
                                <div><i class="fa-solid fa-circle" style="color: #f33130;"></i> <span>10:10</span> </div>
                                <div><i class="fa-solid fa-circle"></i> <span>10:05</span> Max Mustermann </div>
                            </section>
                        </td>
                        <td>
                            <p>23</p>
                        </td>
                        <td>
                            <p>24</p>
                        </td>
                        <td class="coloredCell">
                            <p>25</p>
                            <section>
                                <div><i class="fa-solid fa-circle"></i> <span>10:00</span> Max Mustermann </div>
                                <div><i class="fa-solid fa-circle"></i> <span>10:05</span> Max Mustermann </div>
                                <div><i class="fa-solid fa-circle" style="color: #f33130;"></i> <span>10:10</span> </div>
                                <div><i class="fa-solid fa-circle"></i> <span>10:05</span> Max Mustermann </div>
                            </section>
                        </td>
                    </tr>

                </table>
            </section>
        </section>
    </section>
</main>
</body>
<script src="./script/app.js"></script>

</html>