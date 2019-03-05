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
            <li class="active"><a>Registrasi</a></li> 
            <li><a href="Jadwal.php">Jadwal</a></li>   
		</ul>
		<form action="add_registrasi.php" class="form-horizontal" role="form" style="padding-left: 60px;" method="post"> 
      		<div class="form-group" style="padding-left: 45px;"> 
     			<label class="col-sm-2 control-label">Registrasi Mahasiswa</label> 		
			</div> 
      		<div class="form-group"> 
      			<label for="koderegistrasi" class="col-sm-2 control-label">Kode Registrasi</label> 
      			<div class="col-sm-2"> 
         			<input type="text" name="koderegistrasi" class="form-control" id="koderegistrasi" placeholder="Masukan kode registrasi"> 
      			</div> 
   			
      			<label for="NIM" class="col-sm-1 control-label">NIM</label> 
      			<div class="col-sm-2"> 
         			<input type="text" name="NIM" class="form-control" id="NIM" placeholder="Masukan Nim"> 
      			</div>

   				<div class="col-sm-3" style="padding-left: 100px;">
         			<input type="submit" class="btn btn-default" name="tambah" value="Tambahkan">
   				</div>
   			</div> 
            <?php
                if($_SERVER["REQUEST_METHOD"] == "POST"){
                  $koderegistrasi= addslashes(strip_tags($_POST['koderegistrasi']));
                  $NIM = addslashes(strip_tags($_POST['NIM']));
                  $sql = "INSERT into registrasi values(' $koderegistrasi','$NIM','0','')";
                  $insert = mysqli_query($db,$sql);
                } 
            ?>
		</form> 

		<div class="container ">
			<div class="jumbotron">
					<table class="table"> 
  						<thead> 
      						<tr> 
         						<th>Kode Registrasi</th> 
         						<th>NIM</th> 
         						<th>Keterangan</th>
         						<th></th> 
      						</tr> 
   						</thead> 
   
   						<tbody>  
      						<?php 
                           $i = 1;
                           $sql = "SELECT KdRegistrasi,NIM,Keterangan FROM registrasi";
                           $result_set = mysqli_query($db,$sql);
                           while ($result = mysqli_fetch_array($result_set,MYSQLI_ASSOC)) {
                              $KdRegistrasi = $result['KdRegistrasi'];
                              $NIM = stripslashes($result['NIM']);
                              $Keterangan = stripslashes($result['Keterangan']);
                              if($i%4 == 0){
                                 echo "<tr class='active'>";
                              }elseif ($i%4 == 1) {
                                 echo "<tr class='success'>";
                              }elseif ($i%4 == 2) {
                                 echo "<tr class='warning'>";
                              }elseif($i%4 == 3){
                                 echo "<tr class='danger'>";
                              }
                              echo  "  <td> $KdRegistrasi </td> 
                                       <td> $NIM </td> 
                                       <td> $Keterangan</td>
                                       <form action ='edit_registrasi.php' method = 'get' name = 'edit'>
                                          <td><button type='submit' class='btn btn-default btn-xs center-block' name = 'edit' value = '$KdRegistrasi'> Edit </button></td> 
                                       </form>
                                       <form action ='delete_registrasi.php' method = 'get'>
                                          <td><button type='submit' class='btn btn-default btn-xs center-block' name = 'delete' value ='$KdRegistrasi'> hapus </button></td>
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