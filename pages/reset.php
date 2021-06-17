    <!-- MY CSS -->
    <link rel="stylesheet" href="./styleReset.css" />
    <link rel="shortcut icon" href="Asset/LogoEBS.png">

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
  require_once('../class/class.Mail.php'); 
  $objAkun = new Akun();

  if(isset($_POST['btnSubmit'])){
    $objAkun->email = $_POST['email'];

    $objAkun->hasil = true;   
    $objAkun->ValidateEmail($objAkun->email);

    if($objAkun->hasil){
      

      echo "<script>alert('Konfirmasi Telah dikirim Via email');</script>";
      $email = $objAkun->email;
      $namadepan = $objAkun->namadepan;
      $namabelakang = $objAkun->namabelakang;
      $username=$objAkun->username;
      
      $linkreset = "https://localhost/perancanganweb/E-Consultation-STIMIK-ESQ/pages/resetAction.php?id=$username";
      $link = "<a href =".$linkreset.">Klik Link Disini</a>";

      $to = $email;
      $name = $namadepan." ".$namabelakang;
      $subject = "RESET PASSWORD";
      $message = '
      <div class="card text-center" style="text-align: center">
        <div class="card-header">
          <img src="https://www.dcu.ie/sites/default/files/media/inline-images/migrated/Icons_V2-01.png">
            <h4 class="title text-center fs-1 fw-bolder" >E-CONSULTATION STIMI -ESQ<br>Hello '.$name.', <br>
            Berikut Link Konfirmasimu</h4>
                <p>Isi Email<br></p>
                ' . $link .'
        </div>
      </div>';
      
      Mail::sendMail($to, $name, $subject, $message);
      
      
    }
    else{
      echo "<script>alert('Email tidak terdaftar');</script>";
    }
  }

?>

  <body class="main">
    <div class="cont"></div>
    <div class="tengah">
      <div class="container" style="font-family: sans-serif;">
        <h1>Forgot Password</h1>
        <h5>
          Enter the email you signded up with below and we will send you a link
          <br />to reset your password
        </h5>

        <form method="Post">
        <div class="bottom">
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" placeholder="Enter your email" id="exampleInputEmail1" aria-describedby="emailHelp" name= "email">
          </div>
          <input type="submit" class="btn" value="Send Reset Password" name="btnSubmit">
        </div>
        </form>

      </div>
    </div>
  </div>
  </body>