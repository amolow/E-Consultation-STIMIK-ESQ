<?php
require_once('./class/class.Booking.php ');
$objBooking = new Booking();

$mahaID = $objBooking->getIdMahasiswa($_SESSION["username"]);
var_dump($mahaID[0]['IDMahasiswa']);
if (isset ($_POST['btnSubmit'])){
    // var_dump($objBooking);
    $objBooking->IDMahasiswa= $_POST['IDMahasiswa'];
    $objBooking->IDKonsultan= $_POST['IDKonsultan'];
    $objBooking->jadwal= $_POST['jadwal'];
    $objBooking->waktu= $_POST['waktu'];
    $objBooking->tempat= $_POST['tempat'];
    $objBooking->IDKategori= $_POST['IDKategori'];
    $objBooking->status= $_POST['status'];
    $objBooking->alasan= $_POST['alasan'];

    // var_dump($objBooking);


    if(isset($_GET['IDBooking'])){
        $objBooking->IDBooking= $_GET['IDBooking'];
        $objBooking->UpdateBooking();
    }
    else{
        $objBooking->AddBooking();
    }
    echo "<script> alert('$objBooking->message'); </script>";
    if($objBooking->hasil){
    echo '<script> window.location = "index.php?p=crud";
    </script>';
    }
    }
    else if(isset($_GET['IDBooking'])){
    $objBooking->IDBooking = $_GET['IDBooking'];
    $objBooking->SelectOneBooking();
    }
    ?>



<html>
    <div class = "mainBooking">
        <div class ="booking">
            <h2>Add/Edit Booking</h2>



            <form action="" method="post">
        
        <table class="table">

    <tr>
    <td>IDMahasiswa</td>
    <td>:</td>
    <td><input type="text" class="form-control" name="IDMahasiswa" readonly value="<?php echo $mahaID[0]['IDMahasiswa']; ?>">
    </tr>
    <td>IDKonsultan</td>
    <td>:</td>
    <td><input type="text" class="form-control" name="IDKonsultan" readonly value="<?php echo $_GET['IDKonsultan']; ?>">
    </tr>
    <tr>
    <td>jadwal</td>
    <td>:</td>
    <td><input type="date" class="form-control" name="jadwal" value="<?php echo $objBooking->jadwal; ?>">
    </tr>
    <tr>
    <td>waktu</td>
    <td>:</td>
    <td><input type="time" class="form-control" name="waktu" value="<?php echo $objBooking->waktu; ?>">
    </tr>
    <tr>
    <td>tempat</td>
    <td>:</td>
    <td><input type="text" class="form-control" name="tempat" value="<?php echo $objBooking->tempat; ?>">
    </tr>
    <td>IDKategori</td>
    <td>:</td>
    <td><input type="text" class="form-control" name="IDKategori" readonly value="<?php echo $_GET['IDKategori']; ?>">
    </tr>
    <input type="text" class="form-control" name="status" hidden value="Menunggu Konfirmasi">   

    <td>alasan</td>
    <td>:</td>
    <td><input type="text" class="form-control" name="alasan" value="<?php echo $objBooking->alasan; ?>">
    </tr>
    <tr>
    <td colspan="2"></td>
    <td>    
    </tr>
    </table>
    
    <input type="submit" class="btn btn-primary btn-lg btn-block btnsuccess" value="Save" name="btnSubmit">
            <a href="index.php?p=crud" class="btn btn-secondary btn-lg btn-block btnwarning">Cancel</a>
            </form>       
        </div>

        <div class="picture">
            <img class = "counselling" src="Asset/counselling.png" alt="" width="500" >
        </div>
    </div>
</html>

