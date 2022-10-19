<?php
session_start();
if(isset($_POST["regisSubmit"])){
    $_SESSION["regisSubmit"] = $_POST["regisSubmit"];
    $_SESSION["regisNama"] = $_POST["regisNama"];
    $_SESSION["regisAlamat"] = $_POST["regisAlamat"];
    $_SESSION["regisNoHp"] = $_POST["regisNoHp"];
    $_SESSION["regisUsername"] = $_POST["regisUsername"];
    $_SESSION["regisPassword"] = $_POST["regisPassword"];
    $_SESSION["konfirPass"] = $_POST["konfirPass"];
}
// var_dump($_SESSION);
// var_dump($_GET);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css">
    <title>Form Login</title>
</head>
<body>
    <div class="header">
        <div class="nama-header">Laundry Express</div>
        <div class="list-header">
            <ul>
                <li><button id="switch"><img src="images/night-mode.png" width="50px" height="50px"></button></li>
            </ul>  
        </div>
    </div>
    <div class="loginBox">
        <div class="login">
            <center>
                <div class="coba-login"><center><img src="images/log-in.png" width="200px" height="150px"></center></div>
                <form action="login.php" method="get">
                <label for="username">Username</label> <br>
                <input type="text" name="username" id="username" class="login-item"> <br> <br>
                <label for="password">Password</label> <br>
                <input type="password" name="password" id="password" class="login-item"> <br> <br>
                <p>Belum punya akun ? <a href="regis.php" style="text-decoration: none;">Daftar</a></p> <br> <br>
                <input type="submit" name="submit" value="LOGIN" class="button-login">
                </form>
            </center>
        </div>
    </div>
    <?php
    if(isset($_GET["submit"]) && isset ($_SESSION["regisSubmit"])){
        if($_GET["username"] == $_SESSION["regisUsername"]){
            if($_GET["password"] == $_SESSION["regisPassword"]){
                echo "
                <script>
                    alert('Login Berhasil');
                    location.href = 'beranda.php';
                </script>
                ";
            }
        }
    }
    ?>
    <script src="jquery.js"></script>
</body>
</html>