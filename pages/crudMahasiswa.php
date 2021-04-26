<html>
<div class="tes" id ="crud">
<h4 class="title">
<span class="text">
<strong>Mahasiswa List</strong>
</span></h4>
<a class="btn btn-primary" href="index.php?p=bookingScreen">Add</a>
<table class="table table-bordered">
<tr>
<th>No.</th>
<th>NIM</th>
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
    require_once('./class/class.Mahasiswa.php');
    $objMahasiswa = new Mahasiswa();
    $arrayResult = $objMahasiswa->SelectAllMahasiswa();
    $pnumber = $_GET['NIM'];
    
    if(count($arrayResult) == 0){
        echo '<tr><td colspan="5">Tidak ada data!</td></tr>';
    }

    else
    {
    $no = 1;
        foreach ($arrayResult as $dataMahasiswa) {
            echo '<tr>';
            echo '<td>'.$no.'</td>';
            echo '<td>'.$dataMahasiswa->NIM.'</td>';
            echo '<td>'.$dataMahasiswa->password.'</td>';
            echo '<td>'.$dataMahasiswa->namadepan.'</td>';
            echo '<td>'.$dataMahasiswa->namabelakang.'</td>';
            echo '<td>'.$dataMahasiswa->email.'</td>';
            echo '<td>'.$dataMahasiswa->alamat.'</td>';
            echo '<td>'.$dataMahasiswa->gender.'</td>';
            echo '<td>'.$dataMahasiswa->notelp.'</td>';
            echo '<td>'.$dataMahasiswa->role.'</td>';
            echo '<td>
            <a class="btn btn-warning" href="index.php?p=bookingScreen&NIM='.$dataMahasiswa->NIM.'"> 
            Edit 
            </a> | 
            
            <a class="btn btn-danger" href="index.php?p=deleteMahasiswa&NIM='.$dataMahasiswa->NIM.'" onclick="return confirm(\'Apakah anda yakin ingin menghapus?\')">
             Delete 
             </a> 
             </td>';
        }
        
    }
    
?>
</div>
</html>

