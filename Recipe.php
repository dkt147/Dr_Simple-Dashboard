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
    <?php $page="recipe"; include 'sidebar.php'?>
    <section class="dashboardAbsoluteSection">
        <header class="dashboardNavSection">
            <h2>Rezepte</h2>
            <div>
                <form action="Recipe.php" method="post">
                    <section>
                        <img src="./image/Dashboard/Nav Section/search.png" width="20px" height="19px" alt="">
                        <input type="text" placeholder="Suchen" name="searchproduct">
                        <select name="filterproduct">
                            <option value="done">Done</option>
                            <option value="undone">UnDone</option>
                            <option value="accepted">Accepted</option>
                            <option value="decline">Decline</option>
                            <option value="star">Star</option>
                        </select>
                    </section>
                    <div>
                        <input type="submit" style="background-image: url('./image/Dashboard/Nav Section/setting.png'); border:none; background-repeat:no-repeat;background-size:100% 100%;" width="22px" height="22px" alt="" value="" name="searchbtn">
                    </div>
                </form>
            </div>
            <?php include "action.php"; ?>
        </header>
        <main>
            <section class="dashboardTitleSection">
                <div><i class="fa-regular fa-square" onclick="allCheckToggler(this)" style="cursor: pointer;"></i>
                </div>
                <div style="margin-left: 25px;"><i class="fa-regular fa-star" onclick="allStarToggler(this)"
                                                   style="cursor: pointer;" id="star-all"></i></div>
                <div style="margin-left: 60px;">
                    <p>Patient</p>
                </div>
                <div style="margin-left: 140px;">
                    <p>Recipe</p>
                </div>
                <div style="margin-left: 140px;">
                    <p>Dose</p>
                </div>
                <div style="margin-left: 120px;">
                    <p>Status</p>
                </div>
                <div style="margin-left: 120px;">
                    <p>Zeit</p>
                </div>
                <div style="margin-left: auto ; padding-left: 15px; cursor: pointer;" class="delete-btn"><img
                            src="./image/Dashboard/TitleSection/trash.png" alt=""></div>
            </section>
            <section class="dashboardTableContent1">
                <table>

                    <?php

                    //Stablishing Connection...
                    include 'config.php';

                    if(isset($_POST['searchbtn']) && (!empty($_POST['searchproduct']) or !empty($_POST['filterproduct'])))
                    {
                        $name = $_POST['searchproduct'];
                        $filter = $_POST['filterproduct'];

                        $query = "SELECT 
                                    patient.id,
                                    patient.name as u_name,
                                    patient.is_active,
                                    recipe.name as r_name,
                                    order.id as o_id,order.power,order.u_id,order.r_id,order.is_completed,order.is_confirm, order.is_failed,    
                                    order.date,order.is_star
                                    FROM `order`
                                    JOIN patient
                                    ON patient.number = order.u_id
                                    JOIN recipe
                                    ON recipe.id = order.r_id WHERE patient.name = '$name'
                                    order by id desc";
                        $res = mysqli_query($conn, $query);
                    }
                    else{
                        $query = "SELECT 
                                    patient.id,
                                    patient.name as u_name,
                                    patient.is_active,
                                    recipe.name as r_name,
                                    order.id as o_id,order.power,order.u_id,order.r_id,order.is_completed,order.is_confirm, order.is_failed,    
                                    order.date,order.is_star
                                    FROM `order`
                                    JOIN patient
                                    ON patient.number = order.u_id
                                    JOIN recipe
                                    ON recipe.id = order.r_id
                                    order by id desc";

                        $res = mysqli_query($conn, $query);
                    }

                    if (mysqli_num_rows($res) > 0) {
                        $c = 0;
                        while ($row = mysqli_fetch_assoc($res)) {
                            ?>
                            <tr >
                                <td class="table1FirstColumn">
                                    <div><i class="fa-regular fa-square forAllCheck" onclick="checkToggler(this)"></i></div>

                                    <?php
                                    if($row['is_star'] == 1){
                                    ?>
                                    <div class="unstar"><i class="fa-solid fa-star forAllStar" onclick="starToggler(this)" ></i>
                                        <input type="checkbox" class="inputStarField" name="star" value="<?php echo $row['o_id'] ?>"  checked>
                                        <?php
                                        }else{
                                        ?>
                                        <div class="single_star"><i class="fa-regular fa-star forAllStar" onclick="starToggler(this)" ></i>
                                            <input type="checkbox" class="inputStarField" name="star" value="<?php echo $row['o_id'] ?>" >
                                            <?php
                                            }
                                            ?>
                                    </div>
                                </td>
                                <td class="table1SecondColumn" onclick="location.href = 'subpage1.php?id=<?php echo $row['o_id'] ?>';">
                                    <p><?php echo $row['u_name'] ?>

                                        <?php
                                        if($row['is_active'] == 0){
                                            ?>
                                            <img src="./image/Dashboard/TitleSection/verified-badge.png" alt="">
                                            <?php
                                        }
                                        ?>

                                    </p>
                                </td>
                                <td class="table1ThirdColumn" onclick="location.href = 'subpage1.php?id=<?php echo $row['o_id'] ?>';">
                                    <p><?php echo $row['r_name'] ?></p>
                                </td>
                                <td class="table1SixthColumn" onclick="location.href = 'subpage1.php?id=<?php echo $row['o_id'] ?>';">
                                    <p><?php echo $row['power'] ?></p>
                                </td>
                                <td class="table1ForthColumn" onclick="location.href = 'subpage1.php?id=<?php echo $row['o_id'] ?>';">


                                    <?php
                                    if($row['is_confirm'] == 1 and $row['is_completed'] == 0 and $row['is_failed'] == 0){
                                            ?>
                                            <div class="redStatus"> <p class="redStatusP">
                                                    <?php echo 'In Progress';?>
                                                </p></div>

                                            <?php
                                    }else if($row['is_completed'] == 1){?>
                                        <div class="lightBlueStatus"> <p class="lightBlueStatusP">
                                                <?php  echo 'Completed';?>
                                            </p></div>

                                        <?php
                                    }else if($row['is_failed'] == 1){?>
                                        <div class="blackStatus"> <p class="blackStatusP">
                                                <?php echo 'Failed';?>
                                            </p></div>

                                    <?php  }else{?>
                                        <div class="redStatus"> <p class="redStatusP">
                                                <?php echo 'Requested ';?>
                                            </p></div>

                                    <?php  }
                                    ?>


                                </td>
                                <td class="table1FifthColumn" onclick="location.href = 'subpage1.php?id=<?php echo $row['o_id'] ?>';">
                                    <p><?php echo $row['date'] ?></p>
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
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
    $(document).ready(function(){

        // Single Data Star
        $(".single_star").on("click",function(){

            var id = [];

            // Converted all checked checkbox's value into Array
            $(":checkbox:checked").each(function(key){
                id[key] = $(this).val();
            });
            console.log(id)

            if(id.length === 0){
                alert("Please Select atleast one star.");
            }else{
                    $.ajax({
                        url : "star_recipe_data.php",
                        type : "POST",
                        data : {id : id},
                        success : function(data){
                            if(data == 1){
                                location.reload();
                            }else{
                            }
                        }
                    });
            }
        });

        // Single Data Star
        $(".unstar").on("click",function(){

            var id = [];

            // Converted all checked checkbox's value into Array
            $(":checkbox:checked").each(function(key){
                id[key] = $(this).val();
            });
            console.log(id)

            if(confirm("Do you really want to un-star this records ?")){
                $.ajax({
                    url : "unstar_referal_data.php",
                    type : "POST",
                    data : {id : id},
                    success : function(data){
                        if(data == 1){
                            alert("Marked as un starred.");
                            location.reload();
                        }else{
                        }
                    }
                });
            }
        });

        // All Data Star
        $("#star-all").on("click",function(){
            var id = [];

            // Converted all checked checkbox's value into Array
            $(":checkbox:checked").each(function(key){
                id[key] = $(this).val();
            });
            console.log(id)

            if(id.length === 0){
                alert("Please Select atleast one star.");
            }else{
                if(confirm("Do you really want to star these records ?")){
                    $.ajax({
                        url : "star_recipe_data.php",
                        type : "POST",
                        data : {id : id},
                        success : function(data){
                            if(data == 1){
                                alert("Marked as important.");
                                location.reload();
                            }else{
                            }
                        }
                    });
                }
            }
        });

        // Multiple Data Delete
        $(".delete-btn").on("click",function(){
            console.log('multiple select')
            var id = [];

            // Converted all checked checkbox's value into Array
            $(":checkbox:checked").each(function(key){
                id[key] = $(this).val();
            });
            console.log(id)

            if(id.length === 0){
                alert("Please Select atleast one checkbox.");
            }else{
                if(confirm("Do you really want to delete these records ?")){
                    $.ajax({
                        url : "delete_recipe_data.php",
                        type : "POST",
                        data : {id : id},
                        success : function(data){
                            if(data == 1){
                                location.reload();
                            }else{

                            }
                        }
                    });
                }
            }
        });
    });
</script>
</html><?php
