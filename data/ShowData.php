<?php

    require_once('../connect.php');

    if(isset($_GET['id'])){
        $id     = $_GET['id'];
    }

    $data   = array();
    $readQuery  = mysqli_query($connect, "SELECT * FROM tbl_ta ORDER BY id DESC");
    while($row = mysqli_fetch_array($readQuery)){
        $data[] = $row;
    }

    echo json_encode(array('result_data' => $data));