<?php
  require_once('./class/class.Akun.php');
  if(isset($_POST['btnLogin'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $objAkun = new Akun();
    
    $objAkun->hasil = true;
    $objAkun->ValidateEmail($email);

    if($objAkun->hasil){
      $ismatch = password_verify($password, $objUser->password);

      if($ismatch){
        if (!isset($_SESSION)) {
        session_start();
        }
        $_SESSION["username"]= $objUser->usename;
        $_SESSION["password"]= $objUser->password;
        $_SESSION["email"]= $objUser->email;
        $_SESSION["nama"]= $objUser->nama;
        $_SESSION["role"]= $objUser->role;

        echo "<script>alert('Login sukses');</script>";

        if($objAkun->role == 'penjual'){
          echo '<script>window.location = "dashboard.php";</script>';
        }
        else if($objAkun->role == 'admin'){
          echo '<script>window.location = "dashboard.php";</script>';
        }
      }

      else{
        echo "<script>alert('Password tidak match');</script>";
      }

    }
    else{
      echo "<script>alert('Email tidak terdaftar');</script>";
      }
  }
?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LOGIN</title>

    <!-- MY CSS -->
    <link rel="stylesheet" href="../loginStyle.css" />

    <!-- CSS BOOTSTRAP -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />

    <!-- JS -->
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
  </head>

  
  <body class="main">
    <div class="cont">
    <div class="tengah">
      <div class="container">
        <form method="post">
          <img src="../Asset/toga.png" alt="" />
          <h1>LOGIN</h1>
          <div class="form-group">
            <label class="col-sm-2 col-form-label"><b>Username</b></label>
            <input type="text" class="form-control" id="exampleInput" placeholder="Username" name="username" value="<?php echo $objAkun->username;?>" value="<?php echo $objMahasiswa->username;?>">
          </div>
          <div class="form-group">
            <label class="col-sm-2 col-form-label"><b>Username</b></label>
            <input type="text" class="form-control" id="exampleInput" placeholder="Username" name="username" value="<?php echo $objAkun->password;?>">
          </div>
          <div class="klik">
            <input type="submit" class="btn text-white" value="Login" name="btnLogin">
            <br />
            <a class="link text-white" href="reset.php">Forgot Password?</a>
          </div>
        </form>
      </div>
    </div>
  </div>
  </body>
</html>