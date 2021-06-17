<html>
    
<div class = "tableWindow">
<div class="tes" id ="crud">
<h4 class="title">
<span class="text">
<strong>Mahasiswa List</strong>
</span></h4>
<a class="btn btn-primary" href="index.php?p=addMahasiswa">Add</a>
<table class="table table-bordered">
<tr>
<th>No</th>
<th>Nama Lengkap</th>
<th>Tanggal Lahir</th>
<th>E-Mail</th>
<th>Alamat</th>
<th>No Handphone</th>
<th>Jenis Kelamin</th>
<th>Nama Prodi</th>
<th></th>



</tr>


<?php
    require_once('./class/class.Mahasiswa.php');
    require_once('authorizationAdmin.php');

    $objMahasiswa = new Mahasiswa();
    $arrayResult = $objMahasiswa->SelectAllMahasiswaView();

    
    if(count($arrayResult) == 0){
        echo '<tr><td colspan="5">Tidak ada data!</td></tr>';
    }

    else
    {
    $no = 1;
        foreach ($arrayResult as $dataMahasiswa) {
            echo '<tr>';
            echo '<td>'.$no.'</td>';
            echo '<td>'.$dataMahasiswa->namadepan." ".$dataMahasiswa->namabelakang.'</td>';
            echo '<td>'.$dataMahasiswa->tgllahir.'</td>';
            echo '<td>'.$dataMahasiswa->email.'</td>';
            echo '<td>'.$dataMahasiswa->alamat.'</td>';
            echo '<td>'.$dataMahasiswa->notelp.'</td>';
            echo '<td>'.$dataMahasiswa->gender.'</td>';
            echo '<td>'.$dataMahasiswa->NamaProdi.'</td>';
            echo '<td>
            <a class="btn btn-primary" href="index.php?p=addMahasiswa&NIM='.$dataMahasiswa->NIM.'"> 
            Edit 
            </a> | 
            
            <a class="btn btn-primary" href="index.php?p=deleteMahasiswa&NIM='.$dataMahasiswa->NIM.'" onclick="return confirm(\'Apakah anda yakin ingin menghapus?\')">
             Delete 
             </a> 
             </td>';
             $no++;
        }
        
    }
    
?>
</div>
</div>
</html>

