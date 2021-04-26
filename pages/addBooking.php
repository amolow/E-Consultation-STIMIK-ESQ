<?php
require_once
('./class/class.Booking.php ');
$objBooking = new Booking();
// private $NIM;
// private $IDKonsultan;
// private $waktu;
// private $status;
// private $alasan;
// private $jadwal;
// private $kategori;
// private $tempat;
// private $IDBooking;
// private $judul;
// private $isi;

if (isset ($_POST['btnSubmit'])){
    $objBooking->IDBooking= $_POST['IDBooking'];
    $objBooking->IDKonsultan= $_POST['IDKonsultan'];
    $objBooking->waktu= $_POST['waktu'];
    $objBooking->status= $_POST['status'];
    $objBooking->alasan= $_POST['alasan'];
    $objBooking->jadwal= $_POST['jadwal'];
    $objBooking->kategori= $_POST['kategori'];
    $objBooking->NIM= $_POST['NIM'];
    $objBooking->tempat= $_POST['tempat'];

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
            <h2>Edit Booking</h2>



            <form action="" method="post">
        
        <table class="table">
    <tr>
    <td>IDBooking</td>
    <td>:</td>
    <td><input type="text" class="form-control" name="IDBooking" value="<?php echo $objBooking->IDBooking; ?>">
    </td>
    </tr>
    <tr>
    <td>IDKonsultan</td>
    <td>:</td>
    <td><input type="text" class="form-control" name="IDKonsultan" value="<?php echo $objBooking->IDKonsultan; ?>">
    </tr>
    <td>NIM</td>
    <td>:</td>
    <td><input type="text" class="form-control" name="NIM" value="<?php echo $objBooking->NIM; ?>">
    </tr>
    <tr>
    <td>Nama Belakang</td>
    <td>:</td>
    <td><input type="text" class="form-control" name="status" value="<?php echo $objBooking->status; ?>">
    </tr>
    <tr>
    <td>Email</td>
    <td>:</td>
    <td><input type="text" class="form-control" name="alasan" value="<?php echo $objBooking->alasan; ?>">
    </tr>
    <tr>
    <td>Alamat</td>
    <td>:</td>
    <td><input type="text" class="form-control" name="jadwal" value="<?php echo $objBooking->jadwal; ?>">
    </tr>
    <td>Gender</td>
    <td>:</td>
    <td><input type="text" class="form-control" name="kategori" value="<?php echo $objBooking->kategori; ?>">
    </tr>
    <td>No Telp</td>
    <td>:</td>
    <td><input type="text" class="form-control" name="waktu" value="<?php echo $objBooking->waktu; ?>">
    </tr>
    <td>tempat</td>
    <td>:</td>
    <td><input type="text" class="form-control" name="tempat" value="<?php echo $objBooking->tempat; ?>">
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

