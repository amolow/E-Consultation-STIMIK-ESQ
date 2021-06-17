<html>
<div class = "tableWindow">
<h4 class="title">
<span class="text">
<strong>Booking List</strong>

</span></h4>

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

    $KonsulID = $objBooking->getIdKonsultan($_SESSION["username"]);
    $arrayResult = $objBooking->SelectBookingByKonsultan($KonsulID[0]['IDKonsultan']);
    

    if (isset ($_POST['btnSubmit'])){
        $updateStat = $objBooking->UpdateStatusBooking($_POST['status'], $_POST['IDBooking']);
        // $objBooking->UpdateStatusBooking($_POST['status'], $_POST['IDBooking']);

    }

    if (isset ($_POST['btnDecline'])){
        $updateStat = $objBooking->UpdateStatusBooking($_POST['status'], $_POST['IDBooking']);
        // $objBooking->UpdateStatusBooking($_POST['status'], $_POST['IDBooking']);
    }


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
            ?>
            <form action="" method="post">
            <input type="text" class="form-control" name="status" hidden value="Diterima">  
            <input type="text" class="form-control" name="IDBooking" hidden value="<?php echo $dataBooking->IDBooking; ?>">  
            <td>
            
            <input type="submit" class="btn btn-primary" value="Terima" name="btnSubmit">
            </form>

        
            
            <form action="" method="post">
            <input type="text" class="form-control" name="status" hidden value="Ditolak">  
            <input type="text" class="form-control" name="IDBooking" hidden value="<?php echo $dataBooking->IDBooking; ?>">  
            <td>
            
            <input type="submit" class="btn btn-primary" value="Ditolak" name="btnDecline">
            </form>
             </td>
             <?php
        }
        
    }
    ?>

</div>
</div>
</html>