<?php
session_start();

    $username = $_POST['username'];
    $pass = $_POST['password'];
    $password = hash('sha256', $pass);
    $level = "admin";

        // include database connection file
    include_once("config.php");
    $query1 = "INSERT INTO tb_users(username, password, level) VALUES('$username','$password','$level')";

    $result = mysqli_query($conn, "$query1");


        // Show message when user added
    header("location:users.php");
?>