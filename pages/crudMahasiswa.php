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
<th>ID Mahasiswa</th>
<th>IDProdi</th>
<th>Prodi</th>
<th>Semester</th>
<th>tgl Lahir</th>
<th>username</th>
<th></th>



</tr>


<?php
    require_once('./class/class.Mahasiswa.php');
    $objMahasiswa = new Mahasiswa();
    $arrayResult = $objMahasiswa->SelectAllMahasiswa();

    
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
            echo '<td>'.$dataMahasiswa->prodi.'</td>';
            echo '<td>'.$dataMahasiswa->semester.'</td>';
            echo '<td>'.$dataMahasiswa->tgllahir.'</td>';
            echo '<td>'.$dataMahasiswa->username.'</td>';
            echo '<td>
            <a class="btn btn-primary" href="index.php?p=addMahasiswa&NIM='.$dataMahasiswa->NIM.'"> 
            Edit 
            </a> | 
            
            <a class="btn btn-primary" href="index.php?p=deleteMahasiswa&NIM='.$dataMahasiswa->NIM.'" onclick="return confirm(\'Apakah anda yakin ingin menghapus?\')">
             Delete 
             </a> 
             </td>';
        }
        
    }
    
?>
</div>
</div>
</html>

