<?php

    $id = $_GET['id'];

    require_once('../../connect.php');

    $deleteSQL = "DELETE FROM tbl_ta WHERE id='$id'";


    if(mysqli_query($connect,$deleteSQL)){
    echo 'Berhasil Menghapus Data';
    }else{
    echo 'Gagal Menghapus Data';
    }

     mysqli_close($connect);
 ?>
