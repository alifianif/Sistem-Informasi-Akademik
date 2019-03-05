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
   			<li class="active"><a>Matakuliah</a></li> 
   			<li><a href="Registrasi.php">Registrasi</a></li> 
   			<li><a href="Jadwal.php">Jadwal</a></li>   
		</ul>
		<form action="addmatakuliah.php" class="form-horizontal" role="form" style="padding-left: 60px;" method="post"> 
      		<div class="form-group" style="padding-left: 20px;"> 
     			<label class="col-sm-2 control-label">Tambahkan Matakuliah</label> 		
			</div> 
      		<div class="form-group"> 
      			<label for="Kodematkul" class="col-sm-1 control-label">Kode Matakuliah</label> 
      			<div class="col-sm-2"> 
         			<input type="text" name="kodematkul" class="form-control" id="kodematkul" placeholder="Masukan Kode Matakuliah"> 
      			</div> 
   			
      			<label for="Namamatkul" class="col-sm-1 control-label">Nama Matakuliah</label> 
      			<div class="col-sm-2"> 
         			<input type="text" name="Namamatkul" class="form-control" id="Namamatkul" placeholder="Masukan Nama Matakuliah"> 
      			</div> 

      			<label for="Sks" class="col-sm-1 control-label">sks</label> 
      			<div class="col-sm-2"> 
         			<input type="text" name="sks" class="form-control" id="sks" placeholder="Masukan Sks"> 
      			</div> 

   				<div class="col-sm-3" style="padding-left: 100px;">
         			<input type="submit" class="btn btn-default" name="tambah" value="Tambahkan">
   				</div>
   			</div> 
            <?php
                /*if($_SERVER["REQUEST_METHOD"] == "POST"){
                  $kodematkul = addslashes(strip_tags($_POST['kodematkul']));
                  $Nama = addslashes(strip_tags($_POST['Nama']));
                  $SKS = addslashes(strip_tags($_POST['SKS']));
                  $sql = "INSERT into matakuliah values(' $kodematkul','$Nama','$SKS','','','0')";
                  $insert = mysqli_query($db,$sql);
                }*/
            ?>
		</form> 

		<div class="container ">
			<div class="jumbotron">
					<table class="table"> 
  						<thead> 
      						<tr> 
         						<th>Kode Matkul</th> 
         						<th>Nama</th> 
         						<th>SKS</th>
                           <th>Kode Dosen</th>
                           <th>Kode Ruangan</th>
         						<th></th> 
      						</tr> 
   						</thead> 
   
   						<tbody>  
      						<?php 
                           $i = 1;
                           $sql = "SELECT KdMatkul,Nama,SKS,KdDosen,KdRuangan FROM matakuliah";
                           $result_set = mysqli_query($db,$sql);
                           while ($result = mysqli_fetch_array($result_set,MYSQLI_ASSOC)) {
                              $KdMatkul = $result['KdMatkul'];
                              $Nama = stripslashes($result['Nama']);
                              $SKS = $result['SKS'];
                              $KdDosen = stripslashes($result['KdDosen']);
                              $KdRuangan = stripslashes($result['KdRuangan']);
                              if($i%4 == 0){
                                 echo "<tr class='active'>";
                              }elseif ($i%4 == 1) {
                                 echo "<tr class='success'>";
                              }elseif ($i%4 == 2) {
                                 echo "<tr class='warning'>";
                              }elseif($i%4 == 3){
                                 echo "<tr class='danger'>";
                              }
                              echo  "  <td> $KdMatkul </td> 
                                       <td> $Nama </td> 
                                       <td> $SKS </td>
                                       <td> $KdDosen </td>
                                       <td> $KdRuangan </td>
                                       <form action = 'Editmatkul.php' method = 'get' name='edit'>
                                          <td><button type='submit' class='btn btn-default btn-xs center-block' name = 'edit' value = '$KdMatkul'> Edit </button></td> 
                                       </form>

                                       <form action = 'delete_matkul.php' method = 'get' name='delete'>
                                          <td><button type='submit' class='btn btn-default btn-xs center-block' name = 'delete' value = '$KdMatkul'> hapus </button></td>
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