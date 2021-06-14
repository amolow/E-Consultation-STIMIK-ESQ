    <!-- MY CSS -->
    <link rel="stylesheet" href="./styleReset.css" />

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


<?php
require ('../inc.koneksi.php');
?>

<?php
  require_once('../class/class.Akun.php'); 
  
  $username=$_GET["id"];

  if(isset($_POST['btnSubmit'])){
    $newpass = $_POST['newpass'];
    $confpass = $_POST['confpass'];

    if (empty($newpass)|empty($confpass)){
      echo "<script>alert('Data tidak boleh kosong');</script>";
    }
    else{
      if ($newpass == $confpass){
          $objAkun = new Akun();
          $objAkun->username = $username;
          $objAkun->password = $newpass;
          $hasil = $objAkun->resetPass();

          //berhasil edit
          if ($hasil="succes") {
            echo"
            <script>
              alert('Berhasil memperbaharui Password')
              window.location = 'login.php';
            </script>"; 
          }
      }
      else{
        echo "<script>alert('password confirmation failed');</script>";
      }
    }
  }
?>

  <body class="main">
    <div class="cont"></div>
    <div class="tengah" style="height: auto;">
      <div class="container" style="font-family: sans-serif;">
        <h1>Change Password</h1>
        <h5>
          Create your new password, make sure you remember it
        </h5>

        <form action="" method="Post">
        <div class="bottom">
          <div class="form-group">
            <label><b>Create new password</b></label>
            <input type="password" class="form-control" placeholder="New password" name="newpass">
          </div>
          <div class="form-group">
            <label><b>Confirm your password</b></label>
            <input type="password" class="form-control" placeholder="Confirm new password" name="confpass">
          </div>
          <input type="submit" class="btn" value="Send Reset Password" name="btnSubmit">
        </div>
        </form>

      </div>
    </div>
  </div>
  </body>