<?php
require "koneksi.php";
if(isset($_GET['id'])){
  $query = mysqli_query($db,"DELETE FROM laundry WHERE id=$_GET[id]");
  if($query){
    header("Location:data.php");
  } 
  else {
    echo "Hapus Pesanan Gagal";
  }
}
?>