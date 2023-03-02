<?php

    $server = "localhost";
    $user   = "root";
    $password = "";
    $database = "catatta";

    $connect    = mysqli_connect($server, $user, $password, $database);

    if(mysqli_connect_errno()){
        echo "Galat saat menghubungkan " . mysqli_connect_errno();
    }