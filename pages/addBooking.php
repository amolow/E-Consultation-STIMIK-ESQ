<?php
require_once
('./class/class.Booking.php ');
$objBooking = new Booking();


if (isset ($_POST['btnSubmit'])){
    $objBooking->username= $_POST['username'];
    $objBooking->password= $_POST['password'];
    $objBooking->namadepan= $_POST['namadepan'];
    $objBooking->namadepan= $_POST['namabelakang'];
    $objBooking->namadepan= $_POST['email'];
    $objBooking->namadepan= $_POST['alamat'];
    $objBooking->namadepan= $_POST['gender'];
    $objBooking->namadepan= $_POST['notelp'];
    $objBooking->namadepan= $_POST['role'];

    if(isset($_GET['username'])){
        $objBooking->username= $_GET['username'];
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
    else if(isset($_GET['username'])){
    $objBooking->username = $_GET['username'];
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
    <td>username</td>
    <td>:</td>
    <td><input type="text" class="form-control" name="username" value="<?php echo $objBooking->username; ?>">
    </td>
    </tr>
    <tr>
    <td>password</td>
    <td>:</td>
    <td><input type="text" class="form-control" name="password" value="<?php echo $objBooking->password; ?>">
    </tr>
    <td>Nama Depan</td>
    <td>:</td>
    <td><input type="text" class="form-control" name="password" value="<?php echo $objBooking->namadepan; ?>">
    </tr>
    <tr>
    <td>Nama Belakang</td>
    <td>:</td>
    <td><input type="text" class="form-control" name="password" value="<?php echo $objBooking->namabelakang; ?>">
    </tr>
    <tr>
    <td>Email</td>
    <td>:</td>
    <td><input type="text" class="form-control" name="password" value="<?php echo $objBooking->email; ?>">
    </tr>
    <tr>
    <td>Alamat</td>
    <td>:</td>
    <td><input type="text" class="form-control" name="password" value="<?php echo $objBooking->alamat; ?>">
    </tr>
    <td>Gender</td>
    <td>:</td>
    <td><input type="text" class="form-control" name="password" value="<?php echo $objBooking->gender; ?>">
    </tr>
    <td>No Telp</td>
    <td>:</td>
    <td><input type="text" class="form-control" name="password" value="<?php echo $objBooking->notelp; ?>">
    </tr>
    <td>role</td>
    <td>:</td>
    <td><input type="text" class="form-control" name="password" value="<?php echo $objBooking->role; ?>">
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

