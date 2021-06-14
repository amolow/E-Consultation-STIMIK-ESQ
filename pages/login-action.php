<?php
require ('../inc.koneksi.php');
?>
<?php
  require_once('../class/class.Akun.php');
  $objAkun = new Akun();

  if(isset($_POST['btnLogin'])){
  	session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username)|empty($password)){
			echo "<script>alert('Data tidak boleh kosong');</script>";
			echo "<script>window.location = 'login.php';</script>";
  	}
  	else{
  	$objAkun->username = $username;
  	$objAkun->password = $password;

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
	        $role = $objAkun->role;

	        echo "<script>alert('Login sukses');</script>";
	        echo "<script>window.location = '../index.php';</script>";

	        if($objAkun->role == 'Admin'){
	          echo '<script>window.location = "index.php";</script>';
	        }
	        else if($objUser->role == 'Konsultan'){
	          echo '<script>window.location = "index.php";</script>';
	        }
	        else if($objUser->role == 'Mahasiswa'){
	          echo '<script>window.location = "index.php";</script>';
	        }
      	}
				else{
        	echo "<script>alert('Password Salah');</script>";
        	echo "<script>window.location = 'login.php';</script>";
      	}

    }
    else{
    	echo "<script>alert('Username tidak terdaftar');</script>";
    	echo "<script>window.location = 'login.php';</script>";
    }
  }
  }
?>