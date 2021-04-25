<?php
require_once
('./class/class.Akun.php ');
$objAkun = new Akun();


if (isset ($_POST['btnSubmit'])){
    $objAkun->namadepan= $_POST['namadepan'];
    $objAkun->namabelakang= $_POST['namabelakang'];
    $objAkun->alamat= $_POST['alamat'];

    if(isset($_GET['namadepan'])){
        $objAkun->namadepan= $_GET['namadepan'];
        $objAkun->UpdateAkun();
    }
    else{
        $objAkun->AddAkun();
    }
    echo "<script> alert('$objAkun->message'); </script>";
    if($objAkun->hasil){
    echo '<script> window.location = "index.php?p=crud";
    </script>';
    }
    }
    else if(isset($_GET['namadepan'])){
    $objAkun->namadepan = $_GET['namadepan'];
    $objAkun->SelectOneAkun();
    }
    ?>



<html>
    <div class = "mainBooking">
        <div class ="booking">
            <h2>Book Your Counselor </h2>



            <form action="" method="post">
        
        <table class="table">
    <tr>
    <td>SSN</td>
    <td>:</td>
    <td><input type="text" class="form-control" name="namadepan" value="<?php echo $objAkun->namadepan; ?>">
    </td>
    </tr>
    <tr>
    <td>Name</td>
    <td>:</td>
    <td><select name="dropdown"><option value="<?php echo $objAkun->namabelakang; ?>" selected>One</option><option value="<?php echo $objAkun->namabelakang; ?>">Two</option></select></td>
    </tr>
    <tr>
    <td>Address</td>
    <td>:</td>
    <td><textarea class="formcontrol" name="alamat" rows="3" cols="19">
    <?php echo $objAkun->alamat; ?></textarea></td>
    </tr>
    <tr>
    <td colspan="2"></td>
    <td>    
    </tr>
    </table>
    
    <input type="submit" class="btn btn-primary btn-lg btn-block btnsuccess" value="Save" name="btnSubmit">
            <a href="index.php?p=akunlist" class="btn btn-secondary btn-lg btn-block btnwarning">Cancel</a>
            </form>       
        </div>

        <div class="picture">
            <img class = "counselling" src="Asset/counselling.png" alt="" width="700" >
        </div>
    </div>
</html>

