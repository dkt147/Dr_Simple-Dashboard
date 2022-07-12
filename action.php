<!--<section class="dashboardNavEndContainer">-->
<!--    <div id="umbrella" >-->
<!--        <a href="vacation.php"><img src="./image/Dashboard/Nav Section/umbrella.png" alt="" ></a>-->
<!--    </div>-->
<!--    <div style="margin-left: 25px;">-->
<!--        <a href="notification.php"><img src="./image/Dashboard/Nav Section/megaphone.png" alt="" onclick=""></a>-->
<!--    </div>-->
<!--    <div>-->
<!--        <a href="logout.php"><img src="./image/Dashboard/Nav Section/logout.png" alt=""></a>-->
<!--    </div>-->
<!--</section>-->

<section class="dashboardNavEndContainer">
    <div id="umbrella">
        <img src="./image/Dashboard/Nav Section/umbrella.png" alt="" onclick="location.href = 'vacation.php?redirect=<?php echo $page;?>'">
    </div>
    <div style="margin-left: 25px;">
        <img src="./image/Dashboard/Nav Section/megaphone.png" alt="" onclick="location.href = 'notification.php?redirect=<?php echo $page;?>'">
    </div>
    <div>
        <img src="./image/Dashboard/Nav Section/logout.png" alt="" onclick="location.href = 'logout.php'">
    </div>
</section>