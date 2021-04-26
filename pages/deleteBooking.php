<?php
require_once('./class/class.Booking.php');
if(isset($_GET['IDBooking'])){
$objAkun = new Akun();
$objAkun->username = $_GET['IDBooking'];
$objAkun->DeleteAkun();
echo "<script> alert('$objAkun->message'); </script>";
echo "<script>window.location = 'index.php?p=crudbooking'</scri
pt>";
}
else{
echo '<script>window.history.back()</script>';
}
?> 