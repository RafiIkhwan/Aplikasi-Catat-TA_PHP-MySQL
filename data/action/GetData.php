<?php
	$id = $_GET['id'];

	require_once('../../connect.php');

	$getSQL = "SELECT * FROM tbl_ta WHERE id='$id'";

	$r = mysqli_query($connect,$getSQL);

	$result = array();
	$row = mysqli_fetch_array($r);
	array_push($result,array(
			"id"=>$row['id'],
			"no_induk"=>$row['no_induk'],
			"judul"=>$row['judul'],
			"pemilik"=>$row['pemilik'],
			"pembimbing"=>$row['pembimbing'],
			"tempat_pkl"=>$row['tempat_pkl'],
			"angkatan"=>$row['angkatan'],
		));

	echo json_encode(array('result_data'=>$result));

	mysqli_close($connect);
?>
	