  
<div class="container">  
<div class="col-md-10">			
  <h4 class="title"><span class="text"><strong>View Assigned Project</strong></span></h4>    
<table class="table table-bordered">
<thead>
	<tr>		
	<th>Employee username</th>
	<th>Employee Name</th>
	<th>Project Number</th>
	<th>Project Name</th>
	<th>Project Location</th>
	<th>Department Name</th>	
	<th>Hours</th>	
	</tr>	
	</thead>
	<tbody>
	<?php
		
		require_once('./class/class.Booking.php'); 		
		$eusername = $_SESSION['username'];
		$objBooking = new Booking(); 
		$arrayResult = $objBooking->SelectAllProjectByEusername($eusername);

		if(count($arrayResult) == 0){
			echo '<tr><td colspan="5">Tidak ada data!</td></tr>';			
		}else{	
			$no = 1;	
			foreach ($arrayResult as $dataBooking) {
				echo '<tr>';
				    echo '<td>'.$dataBooking->eusername.'</td>';		
					echo '<td>'.$dataBooking->fname.' '.$dataBooking->minit.' '.$dataBooking->lname.'</td>';
					echo '<td>'.$dataBooking->pno.'</td>';	
					echo '<td>'.$dataBooking->pname.'</td>';
					echo '<td>'.$dataBooking->plocation.'</td>';
					echo '<td>'.$dataBooking->dname.'</td>';					
					echo '<td>'.$dataBooking->hours.'</td>';	
				echo '</tr>';				
				$no++;	
			}
		}
		?>
		</tbody>
</table>

</div>
</div>