<?php

  session_start();
  // membuat variabel untuk menampung data dari form edit
  $id = $_POST['id_kamus'];
  $kata = $_POST['kata'];
  $deskrip = $_POST['deskripsi'];
 

	  //buat dan jalankan query UPDATE
  include_once("config.php");
    $query1 = "UPDATE tb_kamus SET kata = '$kata', deskrip = '$deskrip'  WHERE id_kamus = '$id'";
   $result = mysqli_query($conn, $query1);;


  //periksa hasil query apakah ada error
  if(!$result) {
    die ("Query gagal dijalankan: ".mysqli_errno($conn).
       " - ".mysqli_error($conn));
  }

header("location:kamus.php");
?>