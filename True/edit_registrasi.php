<!DOCTYPE html>
<html>
<head>
   <title>Edit Regsitrasi</title>
   <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body style="text-align: center; background-color: #F37872">
   <div class="centered" class="col-md-3"  style="background-color: #eee; box-shadow:  inset -1px 1px 1px #444, inset 1px 1px 1px #444;border-radius: 10px;"> 
      <div class="row" style="padding: 10px 150px 40px 150px;"> 
         <h3 style="text-align: center;">Edit Mahasiswa</h3><br>
            <form action="add_registrasi.php" class="form-horizontal" role="form" method="post" name="edit"> 
               
               <div class="form-group"> 
                  <label class="col-sm-2 control-label">NIM</label> 
                  <div class="col-sm-9" style="padding-left: 40px;"> 
                     <input type="text" class="form-control" id="kode" name="kode"  value= <?php echo $_GET['edit']; ?> disabled>
                  </div> 
               </div>

               <div class="form-group"> 
                  <label class="col-sm-2 controllabel" style="padding-top: 5px;">NIM</label> 
                  <div class="col-sm-9" style="padding-left: 40px;"> 
                     <input type="text" class="form-control" id="NIM" name="NIM"  placeholder="NIM Mahasiswa" > 
                  </div> 
               </div> 

               <div class="form-group">  
                  <div class="col-sm-11"> 
                     <select  name="keterangan" style="width: 100px;">
                        <option value="LUNAS">LUNAS</option>
                        <option value="BELUM">BELUM</option>
                     </select>
                  </div> 
               </div> 
               <div>
                  <input style="background-color: #95EA95" class="btn btn-default" type="submit" name="edit_regestrasi" value="Edit"> 
               </div>
            </form> 
      </div> 
   </div>
</body>
</html>