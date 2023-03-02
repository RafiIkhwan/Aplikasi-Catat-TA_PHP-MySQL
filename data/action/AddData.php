<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    $NoInduk    = $_POST['no_induk'];
    $Judul      = $_POST['judul'];
    $Pemilik    = $_POST['pemilik'];
    $Pembimbing = $_POST['pembimbing'];
    $Tempat     = $_POST['tempat_pkl'];
    $Angkatan   = $_POST['angkatan'];


    // if ($Angkatan <= 2004){
    //     echo "RPL Tidak memiliki data yg kurang dari 2004";
    // }else if($Angkatan >=2050){
    //     echo "RPL Tidak memiliki data yg lebih dari 2050";
    // }else {

        $insertSQL  = "INSERT INTO tbl_ta (no_induk, judul, pemilik, pembimbing, tempat_pkl, angkatan) VALUES ('$NoInduk','$Judul', '$Pemilik', '$Pembimbing', '$Tempat', '$Angkatan')";

        require_once('../../connect.php');

        if(mysqli_query($connect, $insertSQL)){
            echo 'Data Tugas Akhir Berhasil Ditambahkan !!!';
        }
        else{
            echo 'Gagal saat menambahkan Data Tugas Akhir';
        }

        mysqli_close($connect);
    // }
}