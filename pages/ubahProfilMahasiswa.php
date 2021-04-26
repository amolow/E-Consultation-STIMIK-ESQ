<?php
require_once
('./class/class.Mahasiswa.php ');
$objMahasiswa = new Mahasiswa();


if (isset ($_POST['btnSubmit'])){
    $objMahasiswa->NIM= $_POST['NIM'];
    $objMahasiswa->prodi= $_POST['prodi'];
    $objMahasiswa->semester= $_POST['semester'];

    if(isset($_GET['NIM'])){
        $objMahasiswa->NIM= $_GET['NIM'];
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
    else if(isset($_GET['NIM'])){
    $objMahasiswa->NIM = $_GET['NIM'];
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
                  $name = "Mutiara Persada Pulungan";
                  $status = "Mahasiswa STIMIK ESQ";
                  $nim = "1910130010";
                  $DoB = "19 Januari 2001";
                  $gender = "Perempuan";
                  $email = "m.persada.p@students.esqbs.ac.id";
                  $alamat = "Jakarta Selatan";
                  $notelpon = "086274839578";
        ?>
        <div class="heading">
            <div class="media clearfix">
              <div class="left">
                <div class="pic ">
                    <img class="pfp" src="Asset/muti.jpg" alt="..." height="500px" width="450px">
                </div>
 				      </div>

                <div class="information">
                  <p class="name"><b style="font-size: 40px;" >Edit Profile</b></p>
                  <form action="" method="post">
              			 <div class="mb-3 row" style="padding-top: 20px;">
      						    <label class="col-sm-2 col-form-label"><b>Nama</b></label>
      						    <div class="col-sm-10" style="padding-left: 60px; ">
                      <input type="text" class="form-control" name="ssn" value="<?php echo $objEmployee->ssn; ?>">
      						    </div>
      						 </div>
      						 <div class="mb-3 row">
      						    <label class="col-sm-2 col-form-label"><b>NIM</b></label>
      						    <div class="col-sm-10" style="padding-left: 60px;">
                      <input type="text" class="form-control" name="ssn" value="<?php echo $objEmployee->ssn; ?>">
      						    </div>
      						 </div>
                   <div class="mb-3 row">
                      <label class="col-sm-2 col-form-label"><b>DoB</b></label>
                      <div class="col-sm-10" style="padding-left: 60px;">
                      <input type="text" class="form-control" name="ssn" value="<?php echo $objEmployee->ssn; ?>">
                      </div>
                   </div>
                   <div class="mb-3 row">
                      <label class="col-sm-2 col-form-label"><b>Gender</b></label>
                      <div class="col-sm-10" style="padding-left: 60px;">
                      <input type="text" class="form-control" name="ssn" value="<?php echo $objEmployee->ssn; ?>">
                      </div>
                   </div>
                   <div class="mb-3 row">
                      <label class="col-sm-2 col-form-label"><b>Alamat</b></label>
                      <div class="col-sm-10" style="padding-left: 60px;">
                      <input type="text" class="form-control" name="ssn" value="<?php echo $objEmployee->ssn; ?>">
                      </div>
                   </div>
                   <div class="mb-3 row">
                      <label class="col-sm-2 col-form-label"><b>Handphone</b></label>
                      <div class="col-sm-10" style="padding-left: 60px;">
                      <input type="text" class="form-control" name="ssn" value="<?php echo $objEmployee->ssn; ?>">
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

</body>
</html>
