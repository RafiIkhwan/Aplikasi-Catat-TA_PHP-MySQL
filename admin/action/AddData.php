<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    $username   = $_POST['username'];
    $password   = $_POST['password'];
    $date       = $_POST['date'];

    $insertSQL  = "INSERT INTO tbl_user (username, password, date) VALUES ('$username','$password', '$date')";

    require_once('../../connect.php');

    if(mysqli_query($connect, $insertSQL)){
        echo 'Halo, selamat datang' . $username;
    }
    else{
        echo 'Gagal saat menambahkan Data';
    }

    mysqli_close($connect);
}