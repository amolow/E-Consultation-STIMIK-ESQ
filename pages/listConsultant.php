


  <h4 class="title"><span class="text"><strong>Konsultan  List</strong></span></h4>  
  <div class="cont">
<?php
require_once('./class/class.Konsultan.php'); 
	$IDKategori= $_GET['IDKategori'];	
	$objKonsultan = new Konsultan();
	$arrayResult = $objKonsultan->SelectAllKonsultanViewByKategori($IDKategori);
		if(count($arrayResult) == 0){
			echo '<tr><td colspan="5">Tidak ada data!</td></tr>';			
		}else{	
			$no = 1;	
			foreach ($arrayResult as $dataKonsultan) {							
				if($dataKonsultan->photo != null)
					echo '<li><img class="images img-rounded" src="upload/'.$dataKonsultan->photo.'" width="180" height="180">';
				else
				$IDKategori= $_GET['IDKategori'];	
				echo '
				<div class="card-container vira" >
				<div class="upper-container">
				   <div class="image-container">
					<a href="dashboardMahasiswa.php?p=addBooking&IDKonsultan='.$dataKonsultan->IDKonsultan.'&IDKategori='.$IDKategori.'">
					  <img src="../Asset/pfp.jpg" />
				   </div>
				</div>
				<div class="lower-container">
				   <div>
					   
					  <h3>'.$dataKonsultan->namadepan.' '.$dataKonsultan->namabelakang.'</h3>
					</a>    
					  <h4>'.$dataKonsultan->Namakategori.'</h4>
				   </div>

				</div>
			 </div>';

				// 	echo '<li><img class="images img-rounded" src="../Asset/def.png" width="180" height="180">';				
				
				// echo $dataKonsultan->namadepan;
				// echo $dataKonsultan->namabelakang;
				// echo'<center><a class="btn btn-info btn-sm" href="dashboardMahasiswa.php?p=bookingScreen&IDKonsultan='.$dataKonsultan->IDKonsultan.'">
				// <span">'.$dataKonsultan->username.' '.$dataKonsultan->IDDepartment.' '.$dataKonsultan->username.'</span></a></center>';
				// echo '</li>';	
				
    		}
		}

?>
</div>
