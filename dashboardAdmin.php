<?php 
	if (!isset($_SESSION)) {
		session_start();
	}
	if(isset($_SESSION["role"])){		
		if($_SESSION["role"] == 'employee')
			echo '<script>window.location = "dashboardemployee.php";</script>';
		else if($_SESSION["role"] == 'manager')
			echo '<script>window.location = "dashboardmanager.php";</script>';
		else if($_SESSION["role"] == 'admin')
			echo '<script>window.location = "dashboardadmin.php";</script>';
	}	
 	require "inc.koneksi.php";		
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>

    <!-- MY CSS -->
    <link rel="stylesheet" href="projectStyle.css"/>

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


  <body class="bagc">
    
    <?php include("navAdmin.php");?>







<?php
$pages_dir = 'pages';
if (!empty($_GET['p'])) {
    $pages = scandir($pages_dir, 0);
    unset($pages[0], $pages[1]);

    $p = $_GET['p'];

    if (in_array($p . '.php', $pages)) {
        include($pages_dir . '/' . $p .  '.php');
    } else {
        echo "Halaman Tidak Ditemukan";
    }
} else {
    include "./pages/home2.php";
}
?>



</html>