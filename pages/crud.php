<html>
<div class="tes" id ="crud">
<h4 class="title">
<span class="text">
<strong>Akun List</strong>
</span></h4>
<a class="btn btn-primary" href="index.php?p=bookingScreen">Add</a>
<table class="table table-bordered">
<tr>
<th>No.</th>
<th>username</th>
<th>password</th>
<th>namadepan</th>
<th>namabelakang</th>
<th>email</th>
<th>alamat</th>
<th>gender</th>
<th>notelp</th>
<th>role</th>

</tr>


<?php
    require_once('./class/class.Akun.php');
    $objAkun = new Akun();
    $arrayResult = $objAkun->SelectAllAkun();
    
    if(count($arrayResult) == 0){
        echo '<tr><td colspan="5">Tidak ada data!</td></tr>';
    }

    else
    {
    $no = 1;
        foreach ($arrayResult as $dataAkun) {
            echo '<tr>';
            echo '<td>'.$no.'</td>';
            echo '<td>'.$dataAkun->username.'</td>';
            echo '<td>'.$dataAkun->password.'</td>';
            echo '<td>'.$dataAkun->namadepan.'</td>';
            echo '<td>'.$dataAkun->namabelakang.'</td>';
            echo '<td>'.$dataAkun->email.'</td>';
            echo '<td>'.$dataAkun->alamat.'</td>';
            echo '<td>'.$dataAkun->gender.'</td>';
            echo '<td>'.$dataAkun->notelp.'</td>';
            echo '<td>'.$dataAkun->role.'</td>';
            echo '<td>
            <a class="btn btn-warning" href="index.php?p=akun&namadepan='.$dataAkun->username.'"> 
            Edit 
            </a> | 
            
            <a class="btn btn-danger" href="index.php?p=deleteakun&namadepan='.$dataAkun->username.'" onclick="return confirm(\'Apakah anda yakin ingin menghapus?\')">
             Delete 
             </a> 
             </td>';
        }
        
    }
    
?>
</div>
</html>