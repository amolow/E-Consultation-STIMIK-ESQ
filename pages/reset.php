<?php
  require_once('./class/class.Mail.php');
  if (isset ($_POST['btnSubmit'])){

    $email = $_POST['email'];

    $to = $email;
    $name = "Percobaaan";
    $subject = "RESET PASSWORD";
    $message = "Halo ".$name.", Berikut Link Reset Pass Akun Kamu <p>
    Kami dari admin E-Consultation <p>
    Link berikut merupakan akses untuk Reset Password Akun anda <p>
    Jangan beritahukan kepada siapapun link berikut karena bersifat rahasia <p>
    Silankan klik link dibawah <p>";

    Mail::sendMail($to, $name, $subject, $message);
  }
?>
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


  <body class="main">
    <div class="cont"></div>
    <div class="tengah">
      <div class="container">
        <h1>Forgot Password</h1>
        <h5>
          Enter the email you signded up with below and we will send you a link
          <br />to reset your password
        </h5>

        <form action="" method="Post">
        <div class="bottom">
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" placeholder="Enter your email" id="exampleInputEmail1" aria-describedby="emailHelp" name= "email" value="">
          </div>
          <input type="submit" class="btn" value="Send Reset Password" name="btnSubmit">
        </div>
        </form>

      </div>
    </div>
  </div>
  </body>