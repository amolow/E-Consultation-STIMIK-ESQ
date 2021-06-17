<?php
if(!isset($_SESSION)){
 session_start();
}

if(!isset($_SESSION["role"])){
	echo "<script> alert('Silakan Login untuk mengakses halaman ini'); </script>";
	echo '<script> window.location="index.php"; </script>';
}
else
{
	if($_SESSION["role"]!='Admin'){
		echo "<script> alert('Login Sebagai Admin'); </script>";
		echo '<script> window.location="index.php"; </script>';
	}
}
?>