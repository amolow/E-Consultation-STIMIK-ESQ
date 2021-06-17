<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LOGIN</title>

    <!-- MY CSS -->
    <link rel="stylesheet" href="loginStyle.css" />
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

  
  <body class="main">
    <div class="cont" style="margin-top:70px;">
    <div class="tengah">
      <div class="container">
        <form action="pages/login-action.php" method="post" style="font-family: sans-serif;">
          <img src="Asset/toga.png" alt="" />
          <h1>LOGIN</h1>
          <div class="form-group">
            <label class="col-sm-2 col-form-label"><b>Username</b></label>
            <input type="text" class="form-control" id="exampleInput" placeholder="Username" name="username">
          </div>
          <div class="form-group">
            <label class="col-sm-2 col-form-label"><b>Password</b></label>
            <input type="password" class="form-control" id="exampleInput" placeholder="Password" name="password">
          </div>
          <div class="klik">
            <input type="submit" class="btn text-white" value="Login" name="btnLogin">
            <br />
            <a class="link text-white" href="pages/reset.php">Forgot Password?</a>
          </div>
        </form>
      </div>
    </div>
  </div>
  </body>
</html>