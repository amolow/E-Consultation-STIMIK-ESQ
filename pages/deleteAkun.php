<?php
require_once('./class/class.Akun.php');
if(isset($_GET['username'])){
$objAkun = new Akun();
$objAkun->username = $_GET['username'];
$objAkun->DeleteAkun($_GET['username']);
echo "<script> alert('$objAkun->message'); </script>";
echo "<script>window.location.href = 'dashboardAdmin.php?p=crudKonsultan'</script>";

}
else{
echo '<script>window.history.back()</script>';
}
?> 