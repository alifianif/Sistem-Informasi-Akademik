<?php 
	include("connect.php");
	if (isset($_POST['tambah'])) {
		$kodejadwal = addslashes(strip_tags($_POST['kodejadwal']));
        $kodematkul = addslashes(strip_tags($_POST['kodematkul']));
        $koderuangan = addslashes(strip_tags($_POST['koderuangan']));
		if ($kodejadwal != "" && $kodematkul != "" && $koderuangan !="") {
			$sql = "INSERT into ruangan values('$kodematkul','$Nama','$SKS','','','0')";
            $insert = mysqli_query($db,$sql);
		}
	}
?>

