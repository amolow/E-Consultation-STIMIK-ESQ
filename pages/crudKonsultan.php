<html>
<div class = "tableWindow">
<div class="tes" id ="crud">
<h4 class="title">
<span class="text">
<strong>Konsultan List</strong>
</span></h4>
<a class="btn btn-primary" href="index.php?p=addKonsultan">Add</a>
<table class="table table-bordered">
<tr>
<th>No.</th>
<th>Nama Lengkap</th>
<th>Email</th>
<th>Alamat</th>
<th>Nomor Handphone</th>
<th>Jenis Kelamin</th>
<th>Kategori</th>
</tr>


<?php
    require_once('./class/class.Konsultan.php');
    require_once('authorizationAdmin.php');

    $objKonsultan = new Konsultan();
    $arrayResult = $objKonsultan->SelectAllKonsultanView();
    
    if(count($arrayResult) == 0){
        echo '<tr><td colspan="5">Tidak ada data!</td></tr>';
    }

    else
    {
    $no = 1;
        foreach ($arrayResult as $dataKonsultan) {
            echo '<tr>';
            echo '<td>'.$no.'</td>';
            echo '<td>'.$dataKonsultan->namadepan." ".$dataKonsultan->namabelakang.'</td>';
            echo '<td>'.$dataKonsultan->email.'</td>';
            echo '<td>'.$dataKonsultan->alamat.'</td>';
            echo '<td>'.$dataKonsultan->notelp.'</td>';
            echo '<td>'.$dataKonsultan->gender.'</td>';
            echo '<td>'.$dataKonsultan->Namakategori.'</td>';
            echo '<td>
            <a class="btn btn-primary" href="index.php?p=addKonsultan&IDKonsultan='.$dataKonsultan->IDKonsultan.'"> 
            Edit 
            </a> | 
            
            <a class="btn btn-primary" href="index.php?p=deleteAkun&IDKonsultan='.$dataKonsultan->IDKonsultan.'" onclick="return confirm(\'Apakah anda yakin ingin menghapus?\')">
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

