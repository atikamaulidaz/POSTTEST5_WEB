<?php 
require "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleData.css">
    <link rel="stylesheet" href="stylesheet.css">
    <title>DAFTAR PESANAN</title>
</head>

<body>
    <div class="header">
        <div class="nama-header">Laundry Express</div>
        <div class="list-header">
            <ul>
                <li><button id="switch"><img src="images/night-mode.png" width="50px" height="50px"></button></li>
                <li><a href="http://localhost/Posttest5/beranda.php" style="text-decoration: none;">Home</a></li>
                <li><a href="aboutme.php" style="text-decoration: none;">About Me</a></li>
            </ul> 
        </div>
    </div>
    <br><br>
    <div class="tabel center" style="overflow-x: auto;">
        <table>
            <thead>
                <tr>
                    <th colspan="6" class="thead">
                        <h3 class="daftar">Daftar Pesanan</h3>
                    </th>
                    <th style="width: 20px;" colspan="2">
                        <a href="pesan.php" class="tambah">Order</a>
                    </th>
                </tr>
                <tr>
                    <th>No</th>
                    <th nowrap>Nama Lengkap</th>
                    <th>Alamat Lengkap</th>
                    <th>No. HP</th>
                    <th>Email</th>
                    <th>Jenis Laundry</th>
                    <th colspan="2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = mysqli_query($db, "SELECT * FROM laundry");
                $i = 1;
                while ($row = mysqli_fetch_assoc($query)) {
                ?>
                <tr>
                    <td><?= $i ?></td>
                    <td nowrap><?=$row['nama']?></td>
                    <td><?=$row['alamat']?></td>
                    <td><?=$row['telpon']?></td>
                    <td><?=$row['email']?></td>
                    <td><?=$row['jenis']?></td>
                    <td class="edit">
                        <a href="edit.php?id=<?=$row['id']?>">
                            <img src="images/edit.png" width="25px" height="25px">
                        </a>
                    </td>
                    <td class="hapus">
                        <a href="hapus.php?id=<?=$row['id']?>">
                            <img src="images/trash-can.png" width="25px" height="25px">
                        </a>
                    </td>
                </tr>
                <?php
                $i++;
                }?>
            </tbody>
        </table>
    </div>
    <script src="jquery.js"></script>
</body>

</html>