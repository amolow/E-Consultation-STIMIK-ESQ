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
<th>ID Konsultan</th>
<th>Departemen</th>
<th>username</th>


</tr>


<?php
    require_once('./class/class.Konsultan.php');
    $objKonsultan = new Konsultan();
    $arrayResult = $objKonsultan->SelectAllKonsultan();
    
    if(count($arrayResult) == 0){
        echo '<tr><td colspan="5">Tidak ada data!</td></tr>';
    }

    else
    {
    $no = 1;
        foreach ($arrayResult as $dataKonsultan) {
            echo '<tr>';
            echo '<td>'.$no.'</td>';
            echo '<td>'.$dataKonsultan->IDKonsultan.'</td>';
            echo '<td>'.$dataKonsultan->departement.'</td>';
            echo '<td>'.$dataKonsultan->username.'</td>';

            echo '<td>
            <a class="btn btn-primary" href="index.php?p=addKonsultan&IDKonsultan='.$dataKonsultan->IDKonsultan.'"> 
            Edit 
            </a> | 
            
            <a class="btn btn-primary" href="index.php?p=deleteAkun&IDKonsultan='.$dataKonsultan->IDKonsultan.'" onclick="return confirm(\'Apakah anda yakin ingin menghapus?\')">
             Delete 
             </a> 
             </td>';
        }
        
    }
    
?>
</div>
</div>
</html>

