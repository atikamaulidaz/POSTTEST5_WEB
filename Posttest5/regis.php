<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css">
    <title>Form Register</title>
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
    <div class="regisBox">
        <div class="regis">
            <center>
                <div class="coba-regis"><center><img src="images/signup.png" width="200px" height="175px"></center></div>
                <form action="login.php" method="post">
                    <label for="RegisNama">Nama Lengkap</label> <br>
                    <input type="text" name="regisNama" id="RegisNama" class="regis-item"> <br> <br>
                    <label for="alamat">Alamat Lengkap</label> <br>
                    <input type="text" name="regisAlamat" id="alamat" class="regis-item"> <br> <br>
                    <label for="nohp">No. HP</label> <br>
                    <input type="number" name="regisNoHp" id="nohp" class="regis-item"> <br> <br>
                    <label for="username">Username</label> <br>
                    <input type="text" name="regisUsername" id="username" class="regis-item"> <br> <br>
                    <label for="password">Password</label> <br>
                    <input type="password" name="regisPassword" id="password" class="regis-item"> <br> <br>
                    <label for="password">Konfirmasi Password</label> <br>
                    <input type="password" name="konfirPass" id="konfirPass" class="regis-item"> <br> <br>
                    <input type="submit" name="regisSubmit" value="DAFTAR" class="button-regis">
                </form>
            </center>
        </div>
    </div>
    <script src="jquery.js"></script>
</body>
</html>