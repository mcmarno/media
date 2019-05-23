<?php
session_start();

    $id = $_POST['id_siswa'];
    $no_induk = $_POST['no_induk'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tanggal = $_POST['tanggal_lahir'];
    $level = "siswa";
    $password = hash('sha256', $nama);

        // include database connection file
    include_once("config.php");
    $query = "INSERT INTO tb_siswa(id_siswa, no_induk, nama, alamat, tanggal_lahir) VALUES('$id', '$no_induk','$nama','$alamat','$tanggal')";
    $query1 = "INSERT INTO tb_users(username, password, level) VALUES('$no_induk','$password','$level')";

        // Insert user data into table
    $result = mysqli_query($conn, "$query");
    $result = mysqli_query($conn, "$query1");


        // Show message when user added
    header("location:siswa.php");
?>