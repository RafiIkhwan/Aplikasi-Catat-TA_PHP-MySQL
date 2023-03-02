<?php
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$id = $_POST['id'];
		$no_induk = $_POST['no_induk'];
		$judul = $_POST['judul'];

		require_once('../../connect.php');

		$updateSQL = "UPDATE tbl_ta SET no_induk = '$no_induk', judul = '$judul' WHERE id = '$id'";

		if(mysqli_query($connect,$updateSQL)){
			echo 'Berhasil Update Data';
		}else{
			echo 'Gagal Update Data';
		}

		mysqli_close($connect);
	}
?>
