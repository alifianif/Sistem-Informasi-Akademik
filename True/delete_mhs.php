<?php  
	include("connect.php");
	if (isset($_GET['delete'])) {
		$NIM = $_GET['delete'];
		$sql = "Delete from mahasiswa where mahasiswa.NIM = $NIM ";
		$delete = mysqli_query($db,$sql);
	}
	header("location: Beranda.php");
?>