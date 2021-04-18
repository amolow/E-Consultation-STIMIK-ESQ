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
              		<form action="profile.php" method="post" style="font-size: 20px;">
              			 <div class="mb-3 row" style="padding-top: 20px;">
      						    <label class="col-sm-2 col-form-label"><b>Nama</b></label>
      						    <div class="col-sm-10" style="padding-left: 60px; ">
      						      <input type="text" class="form-control" name="name" value="Mutiara Persada Pulungan" >
      						    </div>
      						 </div>
      						 <div class="mb-3 row">
      						    <label class="col-sm-2 col-form-label"><b>NIM</b></label>
      						    <div class="col-sm-10" style="padding-left: 60px;">
      						      <input type="text" class="form-control" name="nim" value="1910130010">
      						    </div>
      						 </div>
                   <div class="mb-3 row">
                      <label class="col-sm-2 col-form-label"><b>DoB</b></label>
                      <div class="col-sm-10" style="padding-left: 60px;">
                        <input type="text" class="form-control" name="DoB" value="19 Januari 2001">
                      </div>
                   </div>
                   <div class="mb-3 row">
                      <label class="col-sm-2 col-form-label"><b>Gender</b></label>
                      <div class="col-sm-10" style="padding-left: 60px;">
                        <input type="text" class="form-control" name="gender" value="Perempuan">
                      </div>
                   </div>
                   <div class="mb-3 row">
                      <label class="col-sm-2 col-form-label"><b>Alamat</b></label>
                      <div class="col-sm-10" style="padding-left: 60px;">
                        <input type="text" class="form-control" name="alamat" value="Jakarta Selatan">
                      </div>
                   </div>
                   <div class="mb-3 row">
                      <label class="col-sm-2 col-form-label"><b>Handphone</b></label>
                      <div class="col-sm-10" style="padding-left: 60px;">
                        <input type="text" class="form-control" name="notelpon" value="086274839578">
                      </div>
                   </div>
      						 
              		</form>
                </div>
              	

            <style type="text/css">
              h1{
                padding-top: 480px;

                font-size: 30px;
              }
            </style>
              <h1>Computer Science</h1>
              <div class="place">
                <div class="hold">
                </div>
                  <h1></h1>
              </div>
              
          </div>
          <div class="line"></div>
        </div>
        <div class="foot">
            
            <a href="index.php?p=profile" type="button" class="consult" style="margin-left: 1000px;">SAVE Profile</a>

        </div>
</body>
</html>
