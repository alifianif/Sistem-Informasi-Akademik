<?php  
	include("connect.php");
	if (isset($_GET['delete'])) {
		$kode = $_GET['delete'];
		$sql = "Delete from registrasi where registrasi.KdRegistrasi = '$kode' ";
		$delete = mysqli_query($db,$sql);
	}
	header("location: Registrasi.php")
?>