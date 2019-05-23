<?php

  session_start();
  // membuat variabel untuk menampung data dari form edit
  $id = $_POST['id_siswa'];
  $no_induk = $_POST['no_induk'];
  $nama = $_POST['nama'];
  $tanggal = $_POST['tanggal_lahir'];
  $alamat = $_POST['alamat'];
  $password = hash('sha256', $nama);

	  //buat dan jalankan query UPDATE
  include_once("config.php");
    $idi = $_POST['no_induk'];      //get the goods which will updated
    $query = "SELECT * FROM tb_users WHERE username = '$idi'";  //get the data that will be updated
    $hasil = mysqli_query($conn, $query);
  //echo "hasil ==> ".$hasil;
    $data  = mysqli_fetch_array($hasil);
    $users = $data['username'];
    $level = "siswa";
     if($idi == $users) {
      $query2 = "UPDATE tb_users SET password = '$password' WHERE username = '$no_induk'";
     }else{
      $query2 = "INSERT INTO tb_users(id_user, username, password, level) VALUES('$users','$no_induk','$password','$level')";
      
     }

    $query1 = "UPDATE tb_siswa SET no_induk = '$no_induk', nama = '$nama', tanggal_lahir = '$tanggal', alamat = '$alamat' WHERE id_siswa = '$id'";
   //$query2 = "UPDATE tb_users SET password = '$password' WHERE username = '$no_induk'";
    //$query3 = "INSERT INTO tb_users(id_user, username, password, level) VALUES('$users','$no_induk','$password','$level')";

   $result = mysqli_query($conn, $query1);
   $result = mysqli_query($conn, $query2);
  // $result = mysqli_query($conn, $query3);


  //periksa hasil query apakah ada error
  if(!$result) {
    die ("Query gagal dijalankan: ".mysqli_errno($conn).
       " - ".mysqli_error($conn));
  }

header("location:siswa.php");
?>