<?php 
	include("connect.php");
	if (isset($_POST['tambah'])) {
		$koderegistrasi= addslashes(strip_tags($_POST['koderegistrasi']));
        $NIM = addslashes(strip_tags($_POST['NIM']));
		if ($NIM != "" && $koderegistrasi!="") {
			$sql = "INSERT into registrasi values('$koderegistrasi','$NIM','0','')";
        	$insert = mysqli_query($db,$sql);
		}
	}elseif (isset($_POST['edit_regestrasi'])) {
		$kode = $_POST['kode'];
		$Nim  = $_POST['NIM'];
		echo var_dump($_POST);
		$keterangan = $_POST['keterangan'];
		if ($Nim != "") {
			$sql = "UPDATE `registrasi` SET `NIM` = '$Nim', `Keterangan` = '$keterangan' WHERE `registrasi`.`KdRegistrasi` = '$kode'";
			$insert = mysqli_query($db,$sql);
		}
	}
	echo var_dump($_POST);
	//header("location: Registrasi.php");
?>