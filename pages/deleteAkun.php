<?php
require_once('./class/class.Akun.php');
if(isset($_GET['username'])){
$objAkun = new Akun();
$objAkun->username = $_GET['username'];
$objAkun->DeleteAkun();
echo "<script> alert('$objAkun->message'); </script>";
echo "<script>window.location = 'index.php?p=crud'</scri
pt>";
}
else{
echo '<script>window.history.back()</script>';
}
?> 