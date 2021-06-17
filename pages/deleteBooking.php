<?php
require_once('./class/class.Booking.php');
if(isset($_GET['IDBooking'])){
$objBooking = new Booking();
$objBooking->IDBooking = $_GET['IDBooking'];
$objBooking->DeleteBooking($_GET['IDBooking']);
echo "<script> alert('$objBooking->message'); </script>";
echo "<script>window.location.href = 'dashboardAdmin.php?p=crudbooking'</script>";

}
else{
echo '<script>window.history.back()</script>';
}
?> 