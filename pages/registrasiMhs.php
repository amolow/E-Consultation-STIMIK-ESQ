<?php
  require_once('./class/class.Akun.php');
  $objAkun = new Akun();

if (isset ($_POST['btnSubmit'])){
    $objAkun->username= $_POST['username'];
    $password = $_POST['password'];
    $objAkun->password= password_hash($password, PASSWORD_DEFAULT);
    $objAkun->namadepan= $_POST['namadepan'];
    $objAkun->namabelakang= $_POST['namabelakang'];
    $objAkun->email= $_POST['email'];
    $objAkun->alamat= $_POST['alamat'];
    $objAkun->gender= $_POST['gender'];
    $objAkun->notelp= $_POST['notelp'];
    $objAkun->foto= $_POST['foto'];

    $objAkun->role='Mahasiswa';
    // Upload File Registrasi//
    $ukuran_maks_file = 2000000;
    $tipe_file = @$_FILES['fupload']['type'];
    $lokasi_file = @$_FILES['fupload']['tmp_name'];
    $nama_file = @$_FILES['fupload']['name'];
    $ukuran_file = @$_FILES['fupload']['size'];
    $folder = './upload/';

    if($tipe_file == "application/pdf"OR
      $tipe_file == "application/msword"OR
      $tipe_file == "application/vnd.openxmlformats-officedocument.wordprocessingml.document")
    {
      echo "<script>alert('Hanya boleh meng-upload gambar. Pilih file yang lain');</script>";
      echo "<script>window.location = '?p=upload'</script>";
      return;
    }

    if($ukuran_file > $ukuran_maks_file){
      echo "<script>alert('Ukuran File Terlalu Besar. Pilih file yang lain');</script>";
      echo "<script>window.location = '?p=upload'</script>";
      return;
    }

    $uniquesavename = time() . uniqid(rand());
    $new_destination = $folder . $uniquesavename . ".png";

    $isSuccessUpload = move_uploaded_file($lokasi_file, $new_destination);
    if($isSuccessUpload){
      $objAkun ->foto = $new_destination;
    }
    //Batas Akhir//

    if(isset($_GET['username'])){
        $objAkun->username = $_GET['username'];
        $objAkun->UpdateAkun();
    }
    else{
        $objAkun->AddAkun();
    }
    echo "<script> alert('$objAkun->message'); </script>";
    if($objAkun->hasil){
      echo '<script> window.location = "dashboardAdmin.php?p=listTables";
      </script>';
    }
}
    else if(isset($_GET['username'])){
      $objAkun->username = $_GET['username'];
      $objAkun->SelectOneAkun();
    }
?>

<?php
  require_once('./class/class.Mahasiswa.php');
  $objMahasiswa = new Mahasiswa();

  if (isset ($_POST['btnSubmit'])){
    $objMahasiswa->username= $_POST['username'];
    $objMahasiswa->IDprodi= $_POST['IDprodi'];
    $objMahasiswa->semester= $_POST['semester'];
    $objMahasiswa->tgllahir= $_POST['tgllahir'];

    if(isset($_GET['username'])){
        $objMahasiswa->username = $_GET['username'];
        $objMahasiswa->UpdateMahasiswa();
    }
    else{
        $objMahasiswa->AddMahasiswa();
    }
    echo "<script> alert('$objMahasiswa->message'); </script>";
    if($objMahasiswa->hasil){
      echo '<script> window.location = "dashboardAdmin.p=listTables";
      </script>';
    }
  }
  else if(isset($_GET['username'])){
    $objMahasiswa->username = $_GET['username'];
    $objMahasiswa->SelectOneAkun();
  }
?>

<?php
  require_once('./class/class.Mail.php');
  if (isset ($_POST['btnSubmit'])){
    $nim = $_POST['username'];
    $password = $_POST['password'];
    $namadepan = $_POST['namadepan'];
    $namabelakang = $_POST['namabelakang'];
    $email = $_POST['email'];

    $to = $email;
    $name = $namadepan." ".$namabelakang;
    $subject = "REGISTRASI";
    $message =  "Hi ".$name." Selamat Anda sudah di daftarkan sebagai pengguna layanan E-Consultation<p>"
    ."Username (NIM) : ".$nim."<p>"
    ."Password : ".$password."<p>"
    ."Silahkan Join Menggunakan username dan password tersebut";
    
    Mail::sendMail($to, $name, $subject, $message);
  }
?>



<div class="heading" style="width:100%; height:100%; text-align: center;">
  <p><b style="font-size:40px;">Register</b></p>
  <form action="" method="post" enctype="multipart/form-data">  
    <div class="media clearfix" style="height:100%; margin:30px;">
        <div class="left">
            <div class="pic" style="margin: 10px;">
                <img class="pfp" src="Asset/blankphoto.jpg" alt="..." height="400px" width="350px" id="bingfoto">
            </div>
            <input type="file" name="fupload" id="upfoto"	>
        </div>

        <div class="information" style="height: 100%; width: 100%; margin: 20px;">
              <div class="input-group mb-3">
                <label class="col-sm-2 col-form-label"><b>Username (NIM)</b></label>
                <input type="text" class="form-control" placeholder="Username" name="username" value="<?php echo $objAkun->username;?>" value="<?php echo $objMahasiswa->username;?>">
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
                <label class="col-sm-3 col-form-label"><b>Tanggal Lahir</b></label>
                <input type="date" class="form-control" placeholder="Tanggal Lahir" name="tgllahir"  value="<?php echo $objMahasiswa->tgllahir;?>">
              </div>

              <div class="input-group mb-3">
                <label class="col-sm-2 col-form-label"><b>Semester</b></label>
                <input type="text" class="form-control" placeholder="Ex : 1" name="semester" value="<?php echo $objMahasiswa->semester;?>">
                <label class="col-sm-3 col-form-label"><b>Jenis Kelamin</b></label>
                <select class="form-control" name="gender" value="<?php echo $objAkun->gender;?>">
                  <option selected>- Pilih -</option>
                  <option value="L">Laki-Laki</option>
                  <option value="P">Perempuan</option>
                </select>
              </div>

              <div class="input-group mb-3">    
                <label class="col-sm-2 col-form-label"><b>Program Studi</b></label>
                <select class="form-control" name="IDprodi" value="<?php echo $objMahasiswa->IDprodi;?>">
                  <option selected>- Pilih -</option>
                  <option value="1">Business Management</option>
                  <option value="2">Business Information System</option>
                  <option value="3">Computer Science</option>
                </select>
                <label class="col-sm-3 col-form-label"><b>No Handphone</b></label>
                <input type="text" class="form-control" placeholder="08XX XXXX XXXX" name="notelp" value="<?php echo $objAkun->notelp; ?>">
              </div>

              <div class="input-group mb-3">
                <label class="col-sm-2 col-form-label"><b>Alamat</b></label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"  name="alamat" value="<?php echo $objAkun->alamat; ?>"></textarea>
              </div>

                    
              <input type="submit" class="btn btn-primary btn-lg btn-block btnsuccess" value="Save" name="btnSubmit">
              <a href="dashboardAdmin.php?p=employeelist" class="btn btn-secondary btn-lg btn-block btnwarning">Cancel</a>
          </div>
  

              <style type="text/css">
                h1{
                  padding-top: 480px;

                  font-size: 30px;
                }
              </style>
    </div>
  </form>
</div>
<script src="./js/foto.js"></script>