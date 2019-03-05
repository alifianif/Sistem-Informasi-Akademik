<!DOCTYPE html>
<html>
<head>
	<title>Edit Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body style="text-align: center; background-color: #F37872">
	<div class="centered" class="col-md-3"  style="background-color: #eee; box-shadow:  inset -1px 1px 1px #444, inset 1px 1px 1px #444;border-radius: 10px;"> 
		<div class="row" style="padding: 10px 150px 40px 150px;"> 
			<h3 style="text-align: center;">Edit Matakuliah</h3><br>
   			<form action="addmatakuliah.php" class="form-horizontal" role="form" method="post" name="edit"> 
               <div class="form-group"> 
                  <label class="col-sm-2 control-label">Kode Matakuliah</label> 
                  <div class="col-sm-9" style="padding-left: 40px; padding-top: 10px; "> 
                     <input type="text" class="form-control"  name="kode_matkul" placeholder="Kode Matakuliah" value=<?php echo $_GET['edit']; ?>>
                  </div> 
               </div>

               <div class="form-group"> 
                  <label class="col-sm-2 controllabel" style="padding-top: 5px;">Nama Matakuliah</label> 
                  <div class="col-sm-9" style="padding-left: 40px; padding-top: 10px;"> 
                     <input type="text" class="form-control"  name="nama_matkul"  placeholder="Nama Matakuliah" > 
                  </div> 
               </div> 

               <div class="form-group"> 
                  <label class="col-sm-2 controllabel" style="padding-top: 5px;">SKS</label> 
                  <div class="col-sm-9" style="padding-left: 40px;"> 
                     <input type="text" class="form-control" name="sks" placeholder="Jumlah SKS"> 
                  </div> 
               </div> 

               <div class="form-group"> 
                  <label class="col-sm-2 controllabel" style="padding-top: 5px;">Kode Dosen</label> 
                  <div class="col-sm-9" style="padding-left: 40px; padding-top: 10px;"> 
                     <input type="text" class="form-control" name="kode_dosen" placeholder="Kode Dosen" > 
                  </div> 
               </div> 

               <div class="form-group"> 
                  <label class="col-sm-2 controllabel" style="padding-top: 5px;">Kode Ruangan</label> 
                  <div class="col-sm-9" style="padding-left: 40px; padding-top: 10px;"> 
                     <input type="text" class="form-control"  name="kode_ruangan" placeholder="Kode Ruangan" > 
                  </div> 
               </div> 

               <div>
                  <input style="background-color: #95EA95" class="btn btn-default" type="submit" name="edit_matkul" value="Edit"> 
               </div>
   			</form> 
		</div> 
	</div>
</body>
</html>