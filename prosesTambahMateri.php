<?php

$nama = $_POST['nama'];
$isi = $_POST['isi'];
$link = $_POST['youtube'];

include_once("config.php");
$query1 = "INSERT INTO tb_materi(nama, isi, youtube) VALUES('$nama', '$isi', '$link')";
$result = mysqli_query($conn, $query1);

header("location:materi.php");
?>