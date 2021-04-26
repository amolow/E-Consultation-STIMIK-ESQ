<?php
require_once
('./class/class.Konsultan.php ');
$objKonsultan = new Konsultan();


if (isset ($_POST['btnSubmit'])){
    $objKonsultan->IDKonsultan= $_POST['IDKonsultan'];
    $objKonsultan->departement= $_POST['departement'];
    $objKonsultan->IDKonsultan= $_POST['IDKonsultan'];

    if(isset($_GET['IDKonsultan'])){
        $objKonsultan->IDKonsultan= $_GET['IDKonsultan'];
        $objKonsultan->UpdateKonsultan();
    }
    else{
        $objKonsultan->AddKonsultan();
    }
    echo "<script> alert('$objKonsultan->message'); </script>";
    if($objKonsultan->hasil){
    echo '<script> window.location = "index.php?p=crudKonsultan";
    </script>';
    }
    }
    else if(isset($_GET['IDKonsultan'])){
    $objKonsultan->IDKonsultan = $_GET['IDKonsultan'];
    $objKonsultan->SelectOneKonsultan();
    }
    ?>



<html>
    <div class = "mainBooking">
        <div class ="booking">
            <h2>Edit Konsultan</h2>



            <form action="" method="post">
        
        <table class="table">
    <tr>
    <td>IDKonsultan</td>
    <td>:</td>
    <td><input type="text" class="form-control" name="IDKonsultan" value="<?php echo $objKonsultan->IDKonsultan; ?>">
    </td>
    </tr>
    <tr>
    <td>Departement</td>
    <td>:</td>
    <td><input type="text" class="form-control" name="password" value="<?php echo $objKonsultan->departement; ?>">
    </tr>
    <td>username</td>
    <td>:</td>
    <td><input type="text" class="form-control" name="password" value="<?php echo $objKonsultan->username; ?>">
    </tr>

    </tr>

    </tr>
    <tr>
    <td colspan="2"></td>
    <td>    
    </tr>
    </table>
    
    <input type="submit" class="btn btn-primary btn-lg btn-block btnsuccess" value="Save" name="btnSubmit">
            <a href="index.php?p=crudKonsultan" class="btn btn-secondary btn-lg btn-block btnwarning">Cancel</a>
            </form>       
        </div>

        <div class="picture">
            <img class = "counselling" src="Asset/gears.png" alt="" width="500" >
        </div>
    </div>
</html>

