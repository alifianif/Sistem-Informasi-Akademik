<?php  
	include("connect.php");
	if (isset($_GET['delete'])) {
		$kode = $_GET['delete'];
		$sql = "Delete from matakuliah where matakuliah.KdMatkul = '$kode' ";
		$delete = mysqli_query($db,$sql);
	}
	header("location: Matakuliah.php");
?>