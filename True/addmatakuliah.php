<?php 
	include("connect.php");
	if (isset($_POST['tambah'])) {
		$kodematkul = addslashes(strip_tags($_POST['kodematkul']));
        $Nama = addslashes(strip_tags($_POST['Namamatkul']));
        $SKS = addslashes(strip_tags($_POST['sks']));
		if ($kodematkul != "" && $Nama != "" && $SKS !="") {
			$sql = "INSERT into matakuliah values('$kodematkul','$Nama','$SKS','','','0')";
            $insert = mysqli_query($db,$sql);
		}
	}else if (isset($_POST['edit_matkul'])) {
		$kode_matkul = $_POST['kode_matkul'];
		$nama_matkul = $_POST['nama_matkul'];
		$sks = $_POST['sks'];
		$kode_dosen = $_POST['kode_dosen'];
		$kode_ruangan = $_POST['kode_ruangan'];
		if ($kode_matkul !="" && $nama_matkul != "" && $kode_dosen !="") {
			$sql = "UPDATE `matakuliah` SET `Nama` = '$nama_matkul', `SKS` = '$sks', `KdDosen` = '$kode_dosen', `KdRuangan` = '$kode_ruangan' WHERE `matakuliah`.`KdMatkul` = '$kode_matkul'";
        	$insert = mysqli_query($db,$sql);
		}
	}

	header("location: Matakuliah.php");
?>