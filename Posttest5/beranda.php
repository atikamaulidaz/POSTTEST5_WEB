<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css">
    <title>Beranda</title>
    <script>
        alert("Selamat Datang Di Website Laundry Express");
    </script>
    <!-- <script src="java.js"></script> -->
</head>
<body>
    <div class="header">
        <div class="nama-header">Laundry Express</div>
        <div class="list-header">
            <ul>
                <li><button id="switch"><img src="images/night-mode.png" width="50px" height="50px"></button></li>
                <li><a href="http://localhost/Posttest5/beranda.php" style="text-decoration: none;">Home</a></li>
                <li><a href="aboutme.php" style="text-decoration: none;">About Me</a></li>
                <li><a href="data.php" style="text-decoration: none;">Buat Pesanan</a></li>
                <li><a href="logout.php" style="text-decoration: none;">Logout</a></li>
                <!-- <li><a href="login.php" style="text-decoration: none;">Login/Daftar</a></li> -->
            </ul> 
        </div>
    </div>
    <div class="main">
        <!-- <h1>Halo, </h1>
        <div id="halo">
            <h1>nama</h1> -->
        </div>
        <div class="logo">
            <center><img src="images/laundry.png"></center>
        </div>
        <div class="penawaran">
            <center>
                <h3 class="nama-penawaran">Jasa Layanan Kami</h3>
            </center>
            <div class="penawaran-item">
                <img src="images/cash.png" width="300px" height="300px">
                <center>
                    <p>Regular Ekonomis</p>
                </center>
            </div>
            <div class="penawaran-item">
                <img src="images/diamond.png" width="300px" height="300px">
                <center>
                    <p>Laundry Exclusive</p>
                </center>
            </div>
            <div class="penawaran-item">
                <img src="images/shoes.png" width="300px" height="300px">
                <center>
                    <p>Laundry Sepatu</p>
                </center>
            </div>
            <div class="penawaran-item">
                <img src="images/bed-sheets.png" width="300px" height="300px">
                <center>
                    <p>Laundry Bed Cover</p>
                </center>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="nama-footer"><center>@Copyright 2022 - by Atika Maulida Zahra</center></div>
    </div>
    <script src="jquery.js"></script>
</body>
</html>