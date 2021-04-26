<?php
require_once
('./class/class.Mahasiswa.php ');
$objMahasiswa = new Mahasiswa();


if (isset ($_POST['btnSubmit'])){
    $objMahasiswa->NIM= $_POST['NIM'];
    $objMahasiswa->prodi= $_POST['prodi'];
    $objMahasiswa->semester= $_POST['semester'];

    if(isset($_GET['NIM'])){
        $objMahasiswa->NIM= $_GET['NIM'];
        $objMahasiswa->UpdateMahasiswa();
    }
    else{
        $objMahasiswa->AddMahasiswa();
    }
    echo "<script> alert('$objMahasiswa->message'); </script>";
    if($objMahasiswa->hasil){
    echo '<script> window.location = "index.php?p=crud";
    </script>';
    }
    }
    else if(isset($_GET['NIM'])){
    $objMahasiswa->NIM = $_GET['NIM'];
    $objMahasiswa->SelectOneMahasiswa();
    }
    ?>



<html>
    <div class = "mainBooking">
        <div class ="booking">
            <h2>Ubah Porfil </h2>



            <form action="" method="post">
        
        <table class="table">
    <tr>
    <td>NIM</td>
    <td>:</td>
    <td><input type="text" class="form-control" name="NIM" value="<?php echo $objMahasiswa->NIM; ?>">
    </td>
    </tr>
    <tr>
    <td>PRODI</td>
    <td>:</td>
    <td><input type="text" class="form-control" name="prodi" value="<?php echo $objMahasiswa->prodi; ?>">
    </tr>
    <tr>
    <td>SEMESTER</td>
    <td>:</td>
    <td><textarea class="formcontrol" name="semester" rows="3" cols="19">
    <?php echo $objMahasiswa->semester; ?></textarea></td>
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
            <img class = "counselling" src="Asset/counselling.png" alt="" width="700" >
        </div>
    </div>
</html>
