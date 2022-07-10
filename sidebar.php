<section class="dashboardStaticSection">
    <img src="./image/logo.png" alt="">
    <section class="dashboardIconSection">
        <div>
                <img src="./image/Rectangle 886.png" alt="">
            <a href="All.php" style="text-decoration: none"><p <?php if($page=="all"){?>class="activeLink"';<?php } ?>>Alle</p></a>
           </div>
        <div>

            <img src="./image/Rectangle 886.png" alt="">
            <a href="Recipe.php" style="text-decoration: none" ><p <?php if($page=="recipe"){?>class="activeLink"';<?php } ?>>Rezepte</p></a>

        </div>
        <div>
            <img src="./image/Rectangle 886.png" alt="">
            <a href="transfers.php" style="text-decoration: none"><p <?php if($page=="transfer"){?>class="activeLink"';<?php } ?>>Überweisungen</p></a>
        </div>
        <div>
            <img src="./image/Rectangle 886.png" alt="">
            <a href="consultation.php" style="text-decoration: none"><p <?php if($page=="consultation"){?>class="activeLink"';<?php } ?>>Akute Sprechstunde</p></a>
        </div>
        <div>
            <img src="./image/Rectangle 886.png" alt="">
            <a href="appointment.php" style="text-decoration: none"><p <?php if($page=="appointment"){?>class="activeLink"';<?php } ?>>Regulärer Termin</p></a>
        </div>
        <div>
            <img src="./image/Rectangle 886.png" alt="">
            <a href="Covid.php" style="text-decoration: none"><p <?php if($page=="covid"){?>class="activeLink"';<?php } ?>>Covid-19  Impfung</p></a>
        </div>
    </section>
    <div style="color: white;">
        <p><a href="All.php" style="text-decoration: none;color:white"><b>Dashboard</b></a> | <a href="patienten.php" style="text-decoration: none;color:white">Patienten</p>
    </div>
</section>