<?php
require_once('./class/class.Akun.php ');
$objAkun = new Akun();


if (isset ($_POST['btnSubmit'])){
    var_dump($objAkun);
    $objAkun->username= $_POST['username'];
    $objAkun->password= $_POST['password'];
    $objAkun->namadepan= $_POST['namadepan'];
    $objAkun->namabelakang= $_POST['namabelakang'];
    $objAkun->email= $_POST['email'];
    $objAkun->alamat= $_POST['alamat'];
    $objAkun->gender= $_POST['gender'];
    $objAkun->notelp= $_POST['notelp'];
    $objAkun->role= $_POST['role'];


    if(isset($_GET['username'])){
        $objAkun->username= $_GET['username'];
        $objAkun->UpdateAkun();
    }
    else{
        $objAkun->AddAkun();
    }
    echo "<script> alert('$objAkun->message'); </script>";
    // if($objAkun->hasil){
    // echo '<script> window.location = "index.php?p=crud";
    // </script>';
    // }
    }
    else if(isset($_GET['username'])){
    $objAkun->username = $_GET['username'];
    $objAkun->SelectOneAkun();
    }
    ?>



<html>
    <div class = "mainBooking">
        <div class ="booking">
            <h2>Add/Edit Akun</h2>



            <form action="" method="post">
        
        <table class="table">
    <tr>
    <td>username</td>
    <td>:</td>
    <td><input type="text" class="form-control" name="username" value="<?php echo $objAkun->username; ?>">
    </td>
    </tr>
    <tr>
    <td>password</td>
    <td>:</td>
    <td><input type="text" class="form-control" name="password" value="<?php echo $objAkun->password; ?>">
    </tr>
    <td>Nama Depan</td>
    <td>:</td>
    <td><input type="text" class="form-control" name="namadepan" value="<?php echo $objAkun->namadepan; ?>">
    </tr>
    <tr>
    <td>Nama Belakang</td>
    <td>:</td>
    <td><input type="text" class="form-control" name="namabelakang" value="<?php echo $objAkun->namabelakang; ?>">
    </tr>
    <tr>
    <td>Email</td>
    <td>:</td>
    <td><input type="text" class="form-control" name="email" value="<?php echo $objAkun->email; ?>">
    </tr>
    <tr>
    <td>Alamat</td>
    <td>:</td>
    <td><input type="text" class="form-control" name="alamat" value="<?php echo $objAkun->alamat; ?>">
    </tr>
    <td>Gender</td>
    <td>:</td>
    <td><input type="text" class="form-control" name="gender" value="<?php echo $objAkun->gender; ?>">
    </tr>
    <td>No Telp</td>
    <td>:</td>
    <td><input type="text" class="form-control" name="notelp" value="<?php echo $objAkun->notelp; ?>">
    </tr>
    <td>role</td>
    <td>:</td>
    <td><input type="text" class="form-control" name="role" value="<?php echo $objAkun->role; ?>">
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
            <img class = "counselling" src="Asset/gears.png" alt="" width="500" >
        </div>
    </div>
</html>

