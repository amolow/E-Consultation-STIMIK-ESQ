<div class="container">  
  <h4 class="title"><span class="text"><strong>Subordinate List</strong></span></h4>  
<div class="row">
<div class="navbar-collapse gallery">
<ul>
<?php
	require_once('./class/class.Konsultan.php'); 	
		$username = $_SESSION['username'];		
		$objKonsultan = new Konsultan(); 
		$arrayResult = $objKonsultan->SelectAllKonsultanByUsername($username);
		if(count($arrayResult) == 0){
			echo '<tr><td colspan="5">Tidak ada data!</td></tr>';			
		}else{	
			$no = 1;	
			foreach ($arrayResult as $dataKonsultan) {							
				if($dataKonsultan->photo != null)
					echo '<li><img class="images img-rounded" src="upload/'.$dataKonsultan->photo.'" width="180" height="180">';
				else
					echo '<li><img class="images img-rounded" src="upload/default.png" width="180" height="180">';				
				
				echo'<center><a class="btn btn-info btn-sm" href="dashboardmanager.php?p=subordinate&username='.$dataKonsultan->username.'">
				<span">'.$dataKonsultan->fname.' '.$dataKonsultan->minit.' '.$dataKonsultan->lname.'</span></a></center>';
				echo '</li>';	
				
    		}
		}

?>
</ul>
</div>
</div>
</div>


