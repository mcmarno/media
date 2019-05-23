<?php
// include database connection file
include_once("config.php");

// Get id from URL to delete that user
$id = $_GET['id'];

// Delete user row from table based on given id
$query = "SELECT * FROM tb_hasil WHERE id_hasil='$id'";
    $sql = mysqli_query($conn, $query); // Eksekusi/Jalankan query dari variabel $query
    $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
    // Cek apakah file foto sebelumnya ada di folder images
    if(is_file("hasilTugas/".$data['file_hasil'])) // Jika foto ada
      unlink("hasilTugas/".$data['file_hasil']);
$query1 = "DELETE FROM tb_hasil WHERE id_hasil = '$id'";

$result = mysqli_query($conn, "$query1");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:hasilTugas.php");
?>