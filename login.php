<?php

session_start();
if(isset($_SESSION['data'])){
header('location: All.php');
}
?>
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

<?php

include 'config.php';

if(isset($_POST['login'])){

//Getting data from Form...
    $number = $_POST['number'];
    $password = $_POST['password'];

//    $query1 = $conn->prepare("SELECT * FROM patient WHERE number = ? and password = ?");
//    $query1->bind_param('ss',$number, $password);
//    $query1->execute();
//    $query1->close();
//
//    header("Location: All.php");

//Connection Close...
//    mysqli_close($conn);


    $sql = "SELECT * FROM admin where number = '$number' and password = '$password'";
    $res = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($res);
    if($count == 0){
        echo "<script>alert('Wrong Credentials')</script>";
    }else{
        $data = mysqli_fetch_assoc($res);
        $_SESSION['data'] = $data;
        header("location: All.php");
    }
}
?>
    <main class="loginMainContainer">
        <section class="loginLeftSection">
            <img src="./image/logo.png" alt="">
        </section>
        <section class="loginRightSection">
            <div class="loginCard">
                <h3>Anmelden</h3>
                <div>
                    <form action="login.php" class="loginForm" method="POST">
                        <label for="">
                            Praxis Benutzername <br>
                            <div class="loginInputDiv">
                                <div><i class="fa-solid fa-user"></i></div>
                                <input type="text" placeholder="Benutzername" name="number">
                            </div>
                        </label>
                        <label for="" style="margin-bottom: 0">
                            Passwort <br>
                            <div class="loginInputDiv">
                                <div><i class="fa-solid fa-lock"></i></div>
                                <input type="password" placeholder="Passwort" id="loginPasswordInput" name="password">
                            </div>
                            <div class="loginShowPasswordDiv"><p onclick="showHideFunction()">Passwort anzeigen</p></div>
                        </label>
                        <label for="" class="loginCheckBoxLabel">
                            <input type="checkbox" name="" id="" class="loginCheckbox">
                            <span style="color: #8A8A8A;">Benutzernamen speichern</span>
                        </label>

                        <button type="submit" name="login">Anmelden</button>

                        <div>Noch keinen Account? <span style="color: #33cccc; text-decoration: underline;">Kontakt</span></div>
                    </form>
                </div>
            </div>
        </section>
    </main>

</body>
<script src="./script/app.js"></script>

</html>