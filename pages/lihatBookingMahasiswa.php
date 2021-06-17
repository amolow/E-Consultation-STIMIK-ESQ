<html>
<div class = "tableWindow">
<h4 class="title">
<span class="text">
<strong>Booking List</strong>

</span></h4>

<table class="table table-bordered">
<tr>
<th>IDBooking</th>
<th>IDKonsultan</th>
<th>jadwal</th>
<th>waktu</th>
<th>tempat</th>
<th>alasan</th>
<th>status</th>

 
</tr>


<?php
    require_once('./class/class.Booking.php');
    $objBooking = new Booking();

    $MahaID = $objBooking->getIdMahasiswa($_SESSION["username"]);
    $arrayResult = $objBooking->SelectBookingByMahasiswa($MahaID[0]['IDMahasiswa']);
    

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
            echo '<td>'.$dataBooking->IDBooking.'</td>';
            echo '<td>'.$dataBooking->IDKonsultan.'</td>';
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