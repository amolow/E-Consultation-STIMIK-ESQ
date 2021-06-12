<?php
require ('../inc.koneksi.php');
?>
<?php
  require_once('../class/class.Akun.php');
  $objAkun = new Akun();

  if(isset($_POST['btnLogin'])){
    $objAkun->username = $_POST['username'];
    
    $objAkun->hasil = true;
    $objAkun->ValidateUsername($objAkun->username);

    if($objAkun->hasil){
    	$ismatch = password_verify($_POST['password'], $objAkun->password);

      	if($ismatch){
	        if (!isset($_SESSION)) {
	        session_start();
	        }
	        $_SESSION["username"]= $objAkun->usename;
	        $_SESSION["password"]= $objAkun->password;
	        $_SESSION["namadepan"]= $objAkun->namadepan;
	        $_SESSION["namabelakang"]= $objAkun->namabelakang;
	        $_SESSION["email"]= $objAkun->email;
	        $_SESSION["alamat"]= $objAkun->alamat;
	        $_SESSION["notelp"]= $objAkun->notelp;
	        $_SESSION["role"]= $objAkun->role;
	        $_SESSION["gender"]= $objAkun->gender;
	        $_SESSION["foto"]= $objAkun->foto;

	        echo "<script>alert('Login sukses');</script>";

	        if($objAkun->role == 'Mahasiswa'){
	          echo '<script>window.location = "../index.php?p=crud";</script>';
	        }
	        else if($objAkun->role == 'Konsultan'){
	          echo '<script>window.location = "../index.php?p=profile";</script>';
	        }
      	}
		else{
        echo "<script>alert('Password Salah');</script>";
      	}

    }
    else{
    	echo "<script>alert('Username tidak terdaftar');</script>";
    	echo "<script>window.location = 'login.php';</script>";
    }
  }
?>