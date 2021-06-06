<?php
  require_once('./class/class.Akun.php');
  $objAkun = new Akun();

if (isset ($_POST['btnSubmit'])){
    $objAkun->username= $_POST['username'];
    $objAkun->password= $_POST['password'];
    $objAkun->namadepan= $_POST['namadepan'];
    $objAkun->namabelakang= $_POST['namabelakang'];
    $objAkun->email= $_POST['email'];
    $objAkun->alamat= $_POST['alamat'];
    $objAkun->gender= $_POST['gender'];
    $objAkun->notelp= $_POST['notelp'];
    $objAkun->role='Konsultan';

    if(isset($_GET['username'])){
        $objAkun->username = $_GET['username'];
        $objAkun->UpdateAkun();
    }
    else{
        $objAkun->AddAkun();
    }
    echo "<script> alert('$objAkun->message'); </script>";
    if($objAkun->hasil){
      echo '<script> window.location = "index.php?p=crud";
      </script>';
    }
}
    else if(isset($_GET['username'])){
      $objAkun->username = $_GET['username'];
      $objAkun->SelectOneAkun();
    }
?>

<?php
  require_once('./class/class.Konsultan.php');
  $objKonsultan = new Konsultan();

  if (isset ($_POST['btnSubmit'])){
    $objKonsultan->username= $_POST['username'];
    $objKonsultan->IDDepartment= $_POST['IDDepartment'];

    if(isset($_GET['username'])){
        $objKonsultan->username = $_GET['username'];
        $objKonsultan->UpdateKonsultan();
    }
    else{
        $objKonsultan->AddKonsultan();
    }
    echo "<script> alert('$objKonsultan->message'); </script>";
    if($objKonsultan->hasil){
      echo '<script> window.location = "index.php?p=crud";
      </script>';
    }
  }
  else if(isset($_GET['username'])){
    $objKonsultan->username = $_GET['username'];
    $objKonsultan->SelectOneAkun();
  }
?>

<?php
  require_once('./class/class.Mail.php');
  if (isset ($_POST['btnSubmit'])){
    $nidn = $_POST['username'];
    $password = $_POST['password'];
    $namadepan = $_POST['namadepan'];
    $namabelakang = $_POST['namabelakang'];
    $email = $_POST['email'];

    $to = $email;
    $name = $namadepan." ".$namabelakang;
    $subject = "REGISTRASI";
    $message = "Hi ".$name." Selamat Anda sudah di daftarkan sebagai pengguna layanan E-Consultation<p>"
    ."Username (NIDN) : ".$nidn."<p>"
    ."Password : ".$password."<p>"
    ."Silahkan Join Menggunakan username dan password tersebut";
    
    Mail::sendMail($to, $name, $subject, $message);
  }
?>


<div class="heading" style="width:100%; height:100%; text-align: center;">
  <p><b style="font-size:40px;">Register</b></p>
  <div class="media clearfix" style="height:100%; margin:30px;">
      <div class="left">
          <div class="pic" style="margin: 10px;">
              <img class="pfp" src="Asset/blankphoto.jpg" alt="..." height="400px" width="350px">
          </div>
          <a type="button" href="index.php?p=employeelist" class="btn btn-secondary">Change Picture</a>
 	    </div>

      <div class="information" style="height: 100%; width: 100%; margin: 20px;">
        <form action="" method="post">  
            <div class="input-group mb-3">
              <label class="col-sm-2 col-form-label"><b>Username (NIDN)</b></label>
              <input type="text" class="form-control" placeholder="Username" name="username" value="<?php echo $objAkun->username;?>" value="<?php echo $objKonsultan->username;?>">
              <label class="col-sm-3 col-form-label"><b>Password</b></label>
              <input type="text" class="form-control" placeholder="Password" name="password" value="<?php echo $objAkun->password;?>">
            </div>

            <div class="input-group mb-3">
              <label class="col-sm-2 col-form-label"><b>Nama Depan</b></label>
              <input type="text" class="form-control" placeholder="Nama Depan" name="namadepan" value="<?php echo $objAkun->namadepan;?>">
              <label class="col-sm-3 col-form-label"><b>Nama Belakang</b></label>
              <input type="text" class="form-control" placeholder="Nama Belakang" name="namabelakang" value="<?php echo $objAkun->namabelakang;?>">
            </div>

            <div class="input-group mb-3">
              <label class="col-sm-2 col-form-label"><b>Email</b></label>
              <input type="text" class="form-control" placeholder="Email" name="email" value="<?php echo $objAkun->email;?>">
              <label class="col-sm-3 col-form-label"><b>Department</b></label>
              <select class="form-control" name="IDDepartment" value="<?php echo $objKonsultan->IDDepartment;?>">
                <option selected>- Pilih -</option>
                <option value="1">Coaching</option>
                <option value="2">Dosen</option>
                <option value="3">Keuangan</option>
                <option value="4">Kemahasiswaan</option>
              </select>
            </div>

            <div class="input-group mb-3">
              <label class="col-sm-2 col-form-label"><b>No Handphone</b></label>
              <input type="text" class="form-control" placeholder="08XX XXXX XXXX" name="notelp" value="<?php echo $objAkun->notelp; ?>">
              <label class="col-sm-3 col-form-label"><b>Jenis Kelamin</b></label>
              <select class="form-control" name="gender" value="<?php echo $objAkun->gender;?>">
                <option selected>- Pilih -</option>
                <option value="L">Laki-Laki</option>
                <option value="P">Perempuan</option>
              </select>
            </div>

            <div class="input-group mb-3">
              <label class="col-sm-2 col-form-label"><b>Alamat</b></label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"  name="alamat" value="<?php echo $objAkun->alamat; ?>"></textarea>
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
  </div>
</div>