<html>
<div class = "tableWindow">
<h4 class="title">
<span class="text">
<strong>Booking List</strong>

</span></h4>

<a class="btn btn-primary" href="index.php?p=addBooking">Add</a>
<table class="table table-bordered">
<tr>
<th>No.</th>
<th>IDBooking</th>
<th>NIM</th>
<th>IDKonsultan</th>
<th>jadwal</th>
<th>waktu</th>
<th>tempat</th>
<th>kategori</th>
<th>status</th>
<th>alasan</th>
<th>Judul</th>
<th>Isi</th>
 
</tr>


<?php
    require_once('./class/class.Booking.php');
    $objBooking = new Booking();
    $arrayResult = $objBooking->SelectAllBooking();
    
    if(count($arrayResult) == 0){
        echo '<tr><td colspan="5">Tidak ada data!</td></tr>';
    }

    else
    {
    $no = 1;
        foreach ($arrayResult as $dataBooking) {
            echo '<tr>';
            echo '<td>'.$no.'</td>';
            echo '<td>'.$dataBooking->IDBooking.'</td>';
            echo '<td>'.$dataBooking->NIM.'</td>';
            echo '<td>'.$dataBooking->IDKonsultan.'</td>';
            echo '<td>'.$dataBooking->jadwal.'</td>';
            echo '<td>'.$dataBooking->waktu.'</td>';
            echo '<td>'.$dataBooking->tempat.'</td>';
            echo '<td>'.$dataBooking->kategori.'</td>';
            echo '<td>'.$dataBooking->status.'</td>';
            echo '<td>'.$dataBooking->alasan.'</td>';
            echo '<td>'.$dataBooking->judul.'</td>';
            echo '<td>'.$dataBooking->isi.'</td>';


            echo '<td>
            <a class="btn btn-primary" href="index.php?p=addBooking&IDBooking='.$dataBooking->IDBooking.'"> 
            Edit 
            </a> | 
            
            <a class="btn btn-primary" href="index.php?p=deleteBooking&IDBooking='.$dataBooking->IDBooking.'" onclick="return confirm(\'Apakah anda yakin ingin menghapus?\')">
             Delete 
             </a> 
             </td>';
        }
        
    }
    
?>
</div>
</div>
</html>