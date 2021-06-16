<div class="container">  
  <h4 class="title"><span class="text"><strong>Konsultan  List</strong></span></h4>  
<div class="row">
<div class="navbar-collapse gallery">
<ul>
<?php
	require_once('./class/class.Konsultan.php'); 	
		$superssn = $_SESSION['role'];		
		$objKonsultan = new Konsultan(); 
		$arrayResult = $objKonsultan->SelectAllKonsultanView();
		if(count($arrayResult) == 0){
			echo '<tr><td colspan="5">Tidak ada data!</td></tr>';			
		}else{	
			$no = 1;	
			foreach ($arrayResult as $dataKonsultan) {							
				if($dataKonsultan->photo != null)
					echo '<li><img class="images img-rounded" src="upload/'.$dataKonsultan->photo.'" width="180" height="180">';
				else
					echo '<li><img class="images img-rounded" src="../Asset/def.png" width="180" height="180">';				
				
				echo $dataKonsultan->namadepan;
				echo $dataKonsultan->namabelakang;
				echo'<center><a class="btn btn-info btn-sm" href="dashboardMahasiswa.php?p=bookingScreen&IDKonsultan='.$dataKonsultan->IDKonsultan.'">
				<span">'.$dataKonsultan->username.' '.$dataKonsultan->IDDepartment.' '.$dataKonsultan->username.'</span></a></center>';
				echo '</li>';	
				
    		}
		}

?>
</ul>
</div>
</div>
</div>
