<?php
// include database connection file
include_once("config.php");

// Get id from URL to delete that user
$id = $_GET['id'];

// Delete user row from table based on given id
$query = "SELECT * FROM tb_tugas WHERE id_tugas='$id'";
    $sql = mysqli_query($conn, $query); // Eksekusi/Jalankan query dari variabel $query
    $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
    // Cek apakah file foto sebelumnya ada di folder images
    if(is_file("tugas/".$data['tugas'])) // Jika foto ada
      unlink("tugas/".$data['tugas']);
$query1 = "DELETE FROM tb_tugas WHERE id_tugas = '$id'";

$result = mysqli_query($conn, "$query1");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:tugas.php");
?>