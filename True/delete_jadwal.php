<?php  
	include("connect.php");
	if (isset($_GET['delete'])) {
		$kode = $_GET['delete'];
		$sql = "Delete from ruangan where ruangan.KdRuangan = '$kode' ";
		$delete = mysqli_query($db,$sql);
	}
	header("location: Jadwal.php");
?>