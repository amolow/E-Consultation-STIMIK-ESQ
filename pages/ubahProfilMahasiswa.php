<?php
require_once
('./class/class.Mahasiswa.php ');
$objMahasiswa = new Mahasiswa();


if (isset ($_POST['btnSubmit'])){
    $objMahasiswa->username= $_SESSION ['username'];
    $objMahasiswa->prodi= $_SESSION ['prodi'];
    $objMahasiswa->semester= $_SESSION ['semester'];

    if(isset($_GET['username'])){
        $objMahasiswa->username= $_GET['username'];
        $objMahasiswa->UpdateMahasiswa();
    }
    else{
        $objMahasiswa->AddMahasiswa();
    }
    echo "<script> alert('$objMahasiswa->message'); </script>";
    if($objMahasiswa->hasil){
    echo '<script> window.location = "index.php?p=crud";
    </script>';
    }
    }
    else if(isset($_GET['username'])){
    $objMahasiswa->username = $_GET['username'];
    $objMahasiswa->SelectOneMahasiswa();
    }
    ?>



<!DOCTYPE html>
<html>
<head>
  <title>LATIHAN 1</title>
</head>
<body>

              <?php
                  $name =  $_SESSION["namadepan"] . " ". $_SESSION["namabelakang"];
                  $status = "Mahasiswa STIMIK ESQ";
                  $email =  $_SESSION["email"];
                  $username = $_SESSION["username"];
                  $tgllahir =  $_SESSION["tgllahir"];
                  $gender =  $_SESSION["gender"];
                  $alamat =  $_SESSION["alamat"];
                  $notelp =  $_SESSION["notelp"];
                  $foto =  $_SESSION["foto"];
              ?>

        <div class="heading">
            <div class="media clearfix">
              <div class="left">
                <div class="pic ">
                    <img class="pfp" src=<?php echo $foto?> alt="..." height="500px" width="450px" id="bingfoto">
                </div>
                <input type="file" name="fupload" id="upfoto"	>
 				      </div>

                <div class="information">
                  <p class="name"><b style="font-size: 40px;" >Edit Profile</b></p>
                  <form action="" method="post">
              			 <div class="mb-3 row" style="padding-top: 20px;">
      						    <label class="col-sm-2 col-form-label"><b>Nama</b></label>
      						    <div class="col-sm-10" style="padding-left: 60px; ">
                      <input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
      						    </div>
      						 </div>
      						 <div class="mb-3 row">
      						    <label class="col-sm-2 col-form-label"><b>Username</b></label>
      						    <div class="col-sm-10" style="padding-left: 60px;">
                      <input type="text" class="form-control" name="username" value="<?php echo $username; ?>">
      						    </div>
      						 </div>
                   <div class="mb-3 row">
                      <label class="col-sm-2 col-form-label"><b>DoB</b></label>
                      <div class="col-sm-10" style="padding-left: 60px;">
                      <input type="text" class="form-control" name="tgllahir" value="<?php echo $tgllahir; ?>">
                      </div>
                   </div>
                   <div class="mb-3 row">
                      <label class="col-sm-2 col-form-label"><b>Gender</b></label>
                      <div class="col-sm-10" style="padding-left: 60px;">
                      <input type="text" class="form-control" name="gender" value="<?php echo $gender; ?>">
                      </div>
                   </div>
                   <div class="mb-3 row">
                      <label class="col-sm-2 col-form-label"><b>Alamat</b></label>
                      <div class="col-sm-10" style="padding-left: 60px;">
                      <input type="text" class="form-control" name="alamat" value="<?php echo $alamat; ?>">
                      </div>
                   </div>
                   <div class="mb-3 row">
                      <label class="col-sm-2 col-form-label"><b>Email</b></label>
                      <div class="col-sm-10" style="padding-left: 60px;">
                      <input type="text" class="form-control" name="email" value="<?php echo $email; ?>">
                      </div>
                   </div>
                   <div class="mb-3 row">
                      <label class="col-sm-2 col-form-label"><b>No.Telp</b></label>
                      <div class="col-sm-10" style="padding-left: 60px;">
                      <input type="text" class="form-control" name="notelp" value="<?php echo $notelp; ?>">
                      </div>
                   </div>
      						 
              		
                  <input type="submit" class="btn btn-primary btn-lg btn-block btnsuccess" value="Save" name="btnSubmit">
            <a href="index.php?p=employeelist" class="btn btn-secondary btn-lg btn-block btnwarning">Cancel</a>
            </form>
        </div>
 

            <style type="text/css">
              h1{
                padding-top: 480px;

                font-size: 30px;
              }
            </style>

<script src="./js/foto.js"></script>
</body>
</html>
