<?php

	require_once('../../connect.php');
    
	$result = array();

    $searchSQL = "SELECT * FROM tbl_ta "; 

    if(isset($_GET['search'])){
        $searchSQL .= "WHERE judul LIKE '%".$_GET['search']."%' ORDER BY id DESC ";
    }

	$r = mysqli_query($connect,$searchSQL);

    while($row = mysqli_fetch_assoc($r)){
        $result[] = $row;
    }

	echo json_encode(array('result_data'=>$result));

