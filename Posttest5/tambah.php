<?php
require "koneksi.php";
if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telpon = $_POST['telpon'];
    $email = $_POST['email'];
    $jenis = $_POST['jenis'];
    $query = mysqli_query($db, "INSERT INTO laundry (nama,alamat,telpon,email,jenis) VALUES ('$nama','$alamat','$telpon','$email','$jenis')");
    if($query){
        header("Location: data.php");
    }
    else{
        echo "Tambah Pesanan Gagal";
    }
}
?>