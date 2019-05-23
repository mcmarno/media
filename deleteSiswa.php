<?php
// include database connection file
include_once("config.php");

// Get id from URL to delete that user
$id = $_GET['id'];

// Delete user row from table based on given id
$query = "DELETE FROM tb_siswa WHERE no_induk = '$id'";
$query1 = "DELETE FROM tb_users WHERE username = '$id'";
$result = mysqli_query($conn, "$query");
$result = mysqli_query($conn, "$query1");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:siswa.php");
?>