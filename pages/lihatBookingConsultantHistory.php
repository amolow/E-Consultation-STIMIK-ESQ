<html>
<div class = "tableWindow">
<h4 class="title">
<span class="text">
<strong>Booking List</strong>

</span></h4>

<table class="table table-bordered">
<tr>
<th>IDBooking</th>
<th>IDMahasiswa</th>
<th>jadwal</th>
<th>waktu</th>
<th>tempat</th>
<th>alasan</th>
<th>status</th>
 
</tr>


<?php
    require_once('./class/class.Booking.php');
    $objBooking = new Booking();

    $KonsulID = $objBooking->getIdKonsultan($_SESSION["username"]);
    $arrayResult = $objBooking->SelectBookingByKonsultanSelesai($KonsulID[0]['IDKonsultan']);
    

    if(count($arrayResult) == 0){
    }

    else
    {
    $no = 1;
        foreach ($arrayResult as $dataBooking) {
            
            echo '<tr>';
            echo '<td>'.$dataBooking->IDBooking.'</td>';
            echo '<td>'.$dataBooking->IDMahasiswa.'</td>';
            echo '<td>'.$dataBooking->jadwal.'</td>';
            echo '<td>'.$dataBooking->waktu.'</td>';
            echo '<td>'.$dataBooking->tempat.'</td>';
            echo '<td>'.$dataBooking->alasan.'</td>';
            echo '<td>'.$dataBooking->status.'</td>';
            ?>

             </td>
             <?php
        }
        
    }
    ?>

</div>
</div>
</html>