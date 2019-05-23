<?php

$kata = $_POST['kata'];
$deskrip = $_POST['deskripsi'];


        // include database connection file
include_once("config.php");
$query1 = "INSERT INTO tb_kamus(kata, deskrip) VALUES('$kata','$deskrip')";

$result = mysqli_query($conn, "$query1");


        // Show message when user added
header("location:kamus.php");
?>