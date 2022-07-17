<section class="dashboardStaticSection">
    <img src="./image/logo.png" alt="">
    <section class="dashboardIconSection">
        <div>
                <img src="<?php if($page=="all"){?>./image/firstIcon-A.png<?php }else{?>./image/firstIcon.png<?php } ?>"  alt="">
            <a href="All.php" style="text-decoration: none"><p <?php if($page=="all"){?>class="activeLink"';<?php } ?>>Alle</p></a>
           </div>
        <div>

            <img src="<?php if($page=="recipe"){?>./image/secondIcon-A.png<?php }else{?>./image/secondIcon.png<?php } ?>" alt="">
            <a href="Recipe.php" style="text-decoration: none" ><p <?php if($page=="recipe"){?>class="activeLink"';<?php } ?>>Rezepte</p></a>

        </div>
        <div>
            <img src="<?php if($page=="transfers"){?>./image/thirdIcon-A.png<?php }else{?>./image/thirdIcon.png<?php } ?>" alt="">
            <a href="transfers.php" style="text-decoration: none"><p <?php if($page=="transfers"){?>class="activeLink"';<?php } ?>>Überweisungen</p></a>
        </div>
        <div>
            <img src="<?php if($page=="consultation"){?>./image/thirdLastIcon-A.png<?php }else{?>./image/thirdLastIcon.png<?php } ?>" alt="">
            <a href="consultation.php" style="text-decoration: none"><p <?php if($page=="consultation"){?>class="activeLink"';<?php } ?>>Akute Sprechstunde</p></a>
        </div>
        <div>
            <img src="<?php if($page=="appointment"){?>./image/secondLastIcon-A.png<?php }else{?>./image/secondLastIcon.png<?php } ?>" alt="">
            <a href="appointment.php" style="text-decoration: none"><p <?php if($page=="appointment"){?>class="activeLink"';<?php } ?>>Regulärer Termin</p></a>
        </div>
        <div>
            <img src="<?php if($page=="covid"){?>./image/lastIcon-A.png<?php }else{?>./image/lastIcon.png<?php } ?>" alt="">
            <a href="Covid.php" style="text-decoration: none"><p <?php if($page=="covid"){?>class="activeLink"';<?php } ?>>Covid-19  Impfung</p></a>
        </div>
    </section>
    <div style="color: white;">
        <p><a href="All.php" style="text-decoration: none;color:white"><b>Dashboard</b></a> | <a href="patienten.php" style="text-decoration: none;color:white">Patienten</p></a>
    </div>
</section>