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
<th>IDKonsultan</th>
<th>jadwal</th>
<th>waktu</th>
<th>tempat</th>
<th>status</th>
<th>alasan</th>

 
</tr>


<?php
    require_once('./class/class.Booking.php');
    $objBooking = new Booking();

    $KonsulID = $objBooking->getIdKonsultan($_SESSION["username"]);
    $arrayResult = $objBooking->SelectBookingByKonsultan($KonsulID[0]['IDKonsultan']);
    

    if (isset ($_POST['btnSubmit'])){
        $updateStat = $objBooking->UpdateStatusBooking($_POST['status'], $_POST['IDBooking']);
        // $objBooking->UpdateStatusBooking($_POST['status'], $_POST['IDBooking']);
        echo "<script>window.location.href = 'dashboardKonsultan.php?p=lihatBookingConsultant'</script>";

    }

    if (isset ($_POST['btnDecline'])){
        $updateStat = $objBooking->UpdateStatusBooking($_POST['status'], $_POST['IDBooking']);
        // $objBooking->UpdateStatusBooking($_POST['status'], $_POST['IDBooking']);
        echo "<script>window.location.href = 'dashboardKonsultan.php?p=lihatBookingConsultant'</script>";

    }

    if (isset ($_POST['btnDone'])){
        $updateStat = $objBooking->UpdateStatusBooking($_POST['status'], $_POST['IDBooking']);
        // $objBooking->UpdateStatusBooking($_POST['status'], $_POST['IDBooking']);
        echo "<script>window.location.href = 'dashboardKonsultan.php?p=lihatBookingConsultant'</script>";

    }


    if(count($arrayResult) == 0){
    }

    else
    {
    $no = 1;
        foreach ($arrayResult as $dataBooking) {
            
            echo '<tr>';
            echo '<td>'.$no.'</td>';
            echo '<td>'.$dataBooking->IDBooking.'</td>';
            echo '<td>'.$dataBooking->IDKonsultan.'</td>';
            echo '<td>'.$dataBooking->jadwal.'</td>';
            echo '<td>'.$dataBooking->waktu.'</td>';
            echo '<td>'.$dataBooking->tempat.'</td>';
            echo '<td>'.$dataBooking->status.'</td>';
            echo '<td>'.$dataBooking->alasan.'</td>';

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

            <form action="" method="post">
            <input type="text" class="form-control" name="status" hidden value="Selesai">  
            <input type="text" class="form-control" name="IDBooking" hidden value="<?php echo $dataBooking->IDBooking; ?>">  
            <td>
            
            <input type="submit" class="btn btn-primary" value="Selesai" name="btnDone">
            </form>
             </td>
             <?php
        }
        
    }
    ?>

</div>
</div>
</html>