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
   			<li class="active"><a>Mahasiswa</a></li> 
   			<li><a href="Matakuliah.php">Matakuliah</a></li> 
   			<li><a href="Registrasi.php">Registrasi</a></li> 
   			<li><a href="Jadwal.php">Jadwal</a></li>   
		</ul>
		<form action="addmahasiswa.php" class="form-horizontal" role="form" style="padding-left: 60px;" method="post" name = "add"> 
      		<div class="form-group" style="padding-left: 20px;"> 
     			<label class="col-sm-2 control-label">Tambahkan Mahasiswa</label> 		
			</div> 
      		<div class="form-group"> 
      			<label for="NIM" class="col-sm-1 control-label">NIM</label> 
      			<div class="col-sm-2"> 
         			<input type="text" name="NIM" class="form-control" id="NIM" placeholder="Masukan NIM"> 
      			</div> 
   			
      			<label for="Nama" class="col-sm-1 control-label">Nama</label> 
      			<div class="col-sm-2"> 
         			<input type="text" name="Nama" class="form-control" id="Nama" placeholder="Masukan Nama"> 
      			</div> 

      			<label for="kelas" class="col-sm-1 control-label">Kelas</label> 
      			<div class="col-sm-2"> 
         			<input type="text" name="Kelas" class="form-control" id="Kelas" placeholder="Masukan Kelas"> 
      			</div> 

   				<div class="col-sm-3" style="padding-left: 100px;">
         			<input type="submit" class="btn btn-default" name="tambah" value="Tambahkan">
   				</div>
   			</div> 
		</form> 

		<div class="container ">
			<div class="jumbotron">
					<table class="table"> 
  						<thead> 
      						<tr> 
         						<th>NIM</th> 
         						<th>Nama</th> 
         						<th>Kelas</th>
         						<th></th> 
      						</tr> 
   						</thead> 
   
   						<tbody>  
      						<?php 
                           $i = 1;
                           $sql = "SELECT NIM,Nama,Kelas FROM mahasiswa";
                           $result_set = mysqli_query($db,$sql);
                           while ($result = mysqli_fetch_array($result_set,MYSQLI_ASSOC)) {
                              $NIM = $result['NIM'];
                              $Nama = stripslashes($result['Nama']);
                              $Kelas = stripslashes($result['Kelas']);
                              $_SESSION['mhs_action'] = $NIM;
                              if($i%4 == 0){
                                 echo "<tr class='active'>";
                              }elseif ($i%4 == 1) {
                                 echo "<tr class='success'>";
                              }elseif ($i%4 == 2) {
                                 echo "<tr class='warning'>";
                              }elseif($i%4 == 3){
                                 echo "<tr class='danger'>";
                              }
                              echo  "  <td> $NIM </td> 
                                       <td> $Nama </td> 
                                       <td> $Kelas</td>
                                       <form action = 'editmahasiswa.php' method = 'get' name = 'edit' >
                                          <td><button type='submit' class='btn btn-default btn-xs center-block' name = 'edit' value = '$NIM'> Edit </button></td> 
                                       </form>
                                       <form action = 'delete_mhs.php' method = 'get'>
                                          <td><button type='submit' class='btn btn-default btn-xs center-block' name = 'delete' value = '$NIM'> hapus </button></td>
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