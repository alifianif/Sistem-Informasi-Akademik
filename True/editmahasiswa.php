<?php  
   include("connect.php");
   $nim = $_GET['edit'];
   $sql = "SELECT Nama, Kelas from mahasiswa where NIM = $nim";
   $result_set = mysqli_query($db,$sql)  or die(mysql_error());
   while ($array_result = mysql_fetch_array($result_set,MYSQLI_ASSOC)){
      $Nama = stripslashes($result_set['Nama']);
      $kelas = stripslashes($result_set['Kelas']); 
   }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body style="text-align: center; background-color: #F37872">
	<div class="centered" class="col-md-3"  style="background-color: #eee; box-shadow:  inset -1px 1px 1px #444, inset 1px 1px 1px #444;border-radius: 10px;"> 
		<div class="row" style="padding: 10px 150px 40px 150px;"> 
			<h3 style="text-align: center;">Edit Mahasiswa</h3><br>
   			<form action="addmahasiswa.php" class="form-horizontal" role="form" method="post" name="edit"> 
               <div class="form-group"> 
                  <label class="col-sm-2 control-label">NIM</label> 
                  <div class="col-sm-9" style="padding-left: 40px;"> 
                     <input type="text" class="form-control" id="NIM" name="NIM"  value= <?php echo $_GET['edit']; ?> disabled>
                  </div> 
               </div>

               <div class="form-group"> 
                  <label for="namamahasiswa" class="col-sm-2 controllabel" style="padding-top: 5px;">Nama</label> 
                  <div class="col-sm-9" style="padding-left: 40px;"> 
                     <input type="text" class="form-control" id="nama" name="nama"  placeholder="Nama Mahasiswa" value=<?php $Nama?> > 
                  </div> 
               </div> 

               <div class="form-group"> 
                  <label for="kelas_mahasiswa" class="col-sm-2 controllabel" style="padding-top: 5px;">Kelas</label> 
                  <div class="col-sm-9" style="padding-left: 40px;"> 
                     <input type="text" class="form-control" id="kelas" name="kelas" value=<?php $kelas ?>> 
                  </div> 
               </div> 
               <div>
                  <input style="background-color: #95EA95" class="btn btn-default" type="submit" value="Edit"> 
               </div>
   			</form> 
		</div> 
	</div>
</body>
</html>