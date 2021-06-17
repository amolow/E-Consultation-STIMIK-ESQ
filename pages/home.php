<div class="container">  
<h4 class="title"><span class="text"><strong>Pilih Kategori Konsulmu</strong></span></h4>  
<div class="row">
<div class="navbar-collapse gallery">

<?php
	require_once('./class/class.Kategori.php'); 	
		$superssn = $_SESSION['role'];		
		$objKategori = new Kategori(); 
		$arrayResult = $objKategori->SelectAllKategori();
		if(count($arrayResult) == 0){
			echo '<tr><td colspan="5">Tidak ada data!</td></tr>';			
		}else{	
			$no = 1;	
			foreach ($arrayResult as $dataKategori) {							
				echo '
				  <div class="card-body">
				  <a href="dashboardMahasiswa.php?p=listConsultant&IDKategori='.$dataKategori->IDKategori.'" type="button" class="btn ">
					<h1 class="card-title">'.$dataKategori->Namakategori.'</h1>
					</a>
				  </div>


			  ';			

    		}
		}

?>

</div>
</div>
</div>
