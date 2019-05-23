<?php

$id = $_POST['id_materi'];
$nama = $_POST['nama'];
$isi = $_POST['isi'];
$youtube = $_POST['youtube'];

include_once("config.php");
$query1 = "UPDATE tb_materi SET nama = '$nama', isi = '$isi', youtube = '$youtube'  WHERE id_materi = '$id'";
$result = mysqli_query($conn, $query1);

if(!$result) 
{
  die ("Query gagal dijalankan: ".mysqli_errno($conn).
   " - ".mysqli_error($conn));
}

header("location:materi.php");
?>