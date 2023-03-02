<?php

    require_once('../connect.php');

    if(isset($_GET['iduser'])){
        $iduser     = $_GET['iduser'];
    }

    $data   = array();
    $readQuery  = mysqli_query($connect, "SELECT * FROM tbl_user");
    while($row = mysqli_fetch_array($readQuery)){
        $data[] = $row;
    }

    echo json_encode(array('users_data' => $data));