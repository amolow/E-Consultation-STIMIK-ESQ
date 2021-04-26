<?php
require_once
('./class/class.Mahasiswa.php ');
$objMahasiswa = new Mahasiswa();


if (isset ($_POST['btnSubmit'])){
    $objMahasiswa->NIM= $_POST['NIM'];
    $objMahasiswa->prodi= $_POST['prodi'];
    $objMahasiswa->semester= $_POST['semester'];
    $objMahasiswa->tgllahir= $_POST['tgllahir'];
    $objMahasiswa->username= $_POST['username'];

    if(isset($_GET['NIM'])){
        $objMahasiswa->NIM= $_GET['NIM'];
        $objMahasiswa->UpdateMahasiswa();
    }
    else{
        $objMahasiswa->AddMahasiswa();
    }
    echo "<script> alert('$objMahasiswa->message'); </script>";
    if($objMahasiswa->hasil){
    echo '<script> window.location = "index.php?p=crudMahasiswa";
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
            <h2>Edit/Add Mahasiswa</h2>



            <form action="" method="post">
        
        <table class="table">
    <tr>
    <td>NIM</td>
    <td>:</td>
    <td><input type="text" class="form-control" name="NIM" value="<?php echo $objMahasiswa->NIM; ?>">
    </td>
    </tr>
    <tr>
    <td>Prodi</td>
    <td>:</td>
    <td><input type="text" class="form-control" name="prodi" value="<?php echo $objMahasiswa->prodi; ?>">
    </tr>
    <td>Semester</td>
    <td>:</td>
    <td><input type="text" class="form-control" name="semester" value="<?php echo $objMahasiswa->semester; ?>">
    </tr>
    <tr>
    <td>tgllahir</td>
    <td>:</td>
    <td><input type="text" class="form-control" name="tgllahir" value="<?php echo $objMahasiswa->tgllahir; ?>">
    </tr>
    <tr>
    <td>username</td>
    <td>:</td>
    <td><input type="text" class="form-control" name="username" value="<?php echo $objMahasiswa->username; ?>">
    </tr>

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
            <img class = "counselling" src="Asset/mahasiswa.jpg" alt="" width="700" >
        </div>
    </div>
</html>

