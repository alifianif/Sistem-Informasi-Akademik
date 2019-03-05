<?php
   include("connect.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>	</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<div class="page-header"> 
   		<h1 style="text-align: center;">Example page header  
      		<small>Subtext for header</small> 
   		</h1> 
	</div> 
</head>
<body>
		<ul class="nav nav-tabs"> 
   			<li><a href="Beranda.php">Mahasiswa</a></li> 
   			<li><a href="Matakuliah.php">Matakuliah</a></li> 
   			<li><a href="Registrasi.php">Registrasi</a></li> 
   			<li class="active"><a>Jadwal</a></li>   
		</ul>
		<form action="add_jadwal.php" class="form-horizontal" role="form" style="padding-left: 60px;" method="post"> 
      		<div class="form-group" style="padding-left: 20px;"> 
     			<label class="col-sm-2 control-label">Tambahkan Jadwal</label> 		
			</div> 
      		<div class="form-group"> 
      			<label for="kodejadwal" class="col-sm-1 control-label">Hari</label> 
      			<div class="col-sm-2"> 
         			<input type="text" name="hari" class="form-control" id="kodejadwal" placeholder="Masukan Kode Jadwal"> 
      			</div> 
   			
      			<label for="kodematkul" class="col-sm-1 control-label">Shift</label> 
      			<div class="col-sm-2"> 
         			<input type="text" name="kodematkul" class="form-control" id="kodematkul" placeholder="Masukan Kode Matkul"> 
      			</div> 

      			<label for="koderuangan" class="col-sm-1 control-label">Kode Ruangan</label> 
      			<div class="col-sm-2"> 
         			<input type="text" name="koderuangan" class="form-control" id="koderuangan" placeholder="Masukan kode ruangan"> 
      			</div> 

   				<div class="col-sm-3" style="padding-left: 100px;">
         			<input type="submit" class="btn btn-default" name="tambah" value="Tambahkan">
   				</div>
   			</div> 
            <?php
                if($_SERVER["REQUEST_METHOD"] == "POST"){
                  $kodematkul = addslashes(strip_tags($_POST['kodematkul']));
                  $koderuangan = addslashes(strip_tags($_POST['koderuangan']));
                  $kodejadwal = addslashes(strip_tags($_POST['kodejadwal']));
                  $sql = "INSERT into jadwal values(' $kodejadwal','$kodematkul','$koderuangan')";
                  $insert = mysqli_query($db,$sql);
                } 
            ?>
		</form> 

		<div class="container ">
			<div class="jumbotron">
					<table class="table"> 
  						<thead> 
      						<tr> 
         						<th>Hari</th> 
         						<th>Shift</th> 
         						<th>Ruangan</th>
                           <th>Kode Matakuliah</th>
                           <th>Nama Matakuliah</th>
         						<th></th> 
      						</tr> 
   						</thead> 
   
   						<tbody>  
      						<?php 
                           $i = 1;
                           $sql = "SELECT ruangan.Hari,ruangan.Shift, ruangan.KdRuangan,matakuliah.KdMatkul,matakuliah.Nama FROM ruangan,matakuliah where ruangan.KdRuangan = matakuliah.KdRuangan";
                           $result_set = mysqli_query($db,$sql);
                           while ($result = mysqli_fetch_array($result_set,MYSQLI_ASSOC)) {
                              $Hari = stripslashes($result['Hari']);
                              $Shift =$result['Shift'];
                              $koderuangan = $result['KdRuangan'];
                              $kodematkul = $result['KdMatkul'];
                              $nama = stripslashes($result['Nama']);
                              if($i%4 == 0){
                                 echo "<tr class='active'>";
                              }elseif ($i%4 == 1) {
                                 echo "<tr class='success'>";
                              }elseif ($i%4 == 2) {
                                 echo "<tr class='warning'>";
                              }elseif($i%4 == 3){
                                 echo "<tr class='danger'>";
                              }
                              echo  "  <td> $Hari </td> 
                                       <td> $Shift </td> 
                                       <td> $koderuangan </td>
                                       <td> $kodematkul </td>
                                       <td> $nama </td>
                                       <form acction = 'Edit.php' method = 'get'>
                                          <td><button type='button' class='btn btn-default btn-xs center-block' name ='edit' value = '$koderuangan'> Edit </button></td> 
                                       </form>
                                       <form action = 'delete_jadwal.php' method = 'get'>
                                          <td><button type='button' class='btn btn-default btn-xs center-block' name ='delete' value = '$koderuangan'> hapus </button></td>
                                       </form>
                                    </tr>"; 
                              $i = $i+1;
                           }
                        ?>
  						 </tbody> 
					</table>
			</div>
		</div>	

		<footer class="footer" style="background-color: #333; position: bottom">
      		<div class="container">
        		Copyright &copy; 2015 - All rights reserved.
      		</div>
    	</footer>
</body>
</html>