<?php
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$id 		= $_POST['id'];
		$NoInduk    = $_POST['no_induk'];
		$Judul      = $_POST['judul'];
		$Pemilik    = $_POST['pemilik'];
		$Pembimbing = $_POST['pembimbing'];
		$Tempat     = $_POST['tempat_pkl'];
		$Angkatan   = $_POST['angkatan'];

		require_once('../../connect.php');

		$updateSQL = "UPDATE tbl_ta SET no_induk = '$NoInduk', judul = '$Judul', pemilik = '$Pemilik', pembimbing = '$Pembimbing', tempat_pkl = '$Tempat', angkatan = '$Angkatan' WHERE id = '$id'";

		if(mysqli_query($connect,$updateSQL)){
			echo 'Berhasil Update Data';
		}else{
			echo 'Gagal Update Data';
		}

		mysqli_close($connect);
	}
?>
