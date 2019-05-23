<?php

  session_start();
  // membuat variabel untuk menampung data dari form edit
  $username = $_POST['username'];
  $pass = $_POST['password'];
  $password = hash('sha256', $pass);

	  //buat dan jalankan query UPDATE
  include_once("config.php");
    $query1 = "UPDATE tb_users SET password = '$password' WHERE username = '$username'";
   $result = mysqli_query($conn, $query1);;


  //periksa hasil query apakah ada error
  if(!$result) {
    die ("Query gagal dijalankan: ".mysqli_errno($conn).
       " - ".mysqli_error($conn));
  }

header("location:users.php");
?>