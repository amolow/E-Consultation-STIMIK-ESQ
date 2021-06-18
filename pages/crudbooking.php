<html>
<div class = "tableWindow">
<h4 class="title">
<span class="text">
<strong>Booking List</strong>

</span></h4>

<a class="btn btn-primary" href="index.php?p=addBooking">Add</a>
<table class="table table-bordered">
<tr>
<th>IDBooking</th>
<th>IDKonsultan</th>
<th>jadwal</th>
<th>waktu</th>
<th>tempat</th>
<th>status</th>
<th>alasan</th>
 
</tr>


<?php
    require_once('./class/class.Booking.php');
    require_once('authorizationAdmin.php');

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
            echo '<td>'.$dataBooking->IDBooking.'</td>';
            echo '<td>'.$dataBooking->IDKonsultan.'</td>';
            echo '<td>'.$dataBooking->jadwal.'</td>';
            echo '<td>'.$dataBooking->waktu.'</td>';
            echo '<td>'.$dataBooking->tempat.'</td>';
            echo '<td>'.$dataBooking->status.'</td>';
            echo '<td>'.$dataBooking->alasan.'</td>';


            echo '<td>
            <a class="btn btn-primary" href="dashboardAdmin.php?p=editbookingAdmin&IDBooking='.$dataBooking->IDBooking.'"> 
            Edit 
            </a> | 
            
            <a class="btn btn-primary" href="dashboardAdmin.php?p=deleteBooking&IDBooking='.$dataBooking->IDBooking.'" onclick="return confirm(\'Apakah anda yakin ingin menghapus?\')">
             Delete 
             </a> 
             </td>';
        }
        
    }
    
?>
</div>
</div>
</html>