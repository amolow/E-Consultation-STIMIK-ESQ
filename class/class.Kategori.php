<?php

class Kategori extends Connection{
	private $IDKategori;
	private $Namakategori;
  

  
  	public function __get($atribute){
		if (property_exists($this, $atribute)){
			return $this->$atribute;
		}
	}

	public function __set($atribut, $value){
		if (property_exists($this, $atribut)){
			$this->$atribut = $value;
		}
	}


	
	public function SelectAllKategori(){
	
	
		$sql = "SELECT * FROM Kategori";
		$result = mysqli_query($this->connection, $sql);
		$arrResult = Array();
		$cnt=0;
	
		
		if(mysqli_num_rows($result) > 0) {
			while ($data = mysqli_fetch_array($result)) {
				$objKategori = new Kategori();
				$objKategori->IDKategori=$data['IDKategori'];
				$objKategori->Namakategori=$data['Namakategori'];
				$arrResult[$cnt] = $objKategori;
				$cnt++;
			}
		}
		return $arrResult;
	}

	public function SelectAllKategoriView(){
	
	
		$sql = "SELECT * FROM vw_consultant";
		$result = mysqli_query($this->connection, $sql);
		$arrResult = Array();
		$cnt=0;
	
		
		if(mysqli_num_rows($result) > 0) {
			while ($data = mysqli_fetch_array($result)) {
				$objKategori = new Kategori();
				$objKategori->namadepan=$data['namadepan'];
				$objKategori->Namakategori=$data['Namakategori'];
				$arrResult[$cnt] = $objKategori;
				$cnt++;
			}
		}
		return $arrResult;
	}
	
	public function SelectAllKategoriViewByKategori($IDDepartment){
	
	
		$sql = "SELECT * FROM vw_consultant WHERE IDDepartment = 'this->$IDDepartment'";
		$result = mysqli_query($this->connection, $sql);
		$arrResult = Array();
		$cnt=0;
	
		
		if(mysqli_num_rows($result) > 0) {
			while ($data = mysqli_fetch_array($result)) {
				$objKategori = new Kategori();
				$objKategori->namadepan=$data['namadepan'];
				$objKategori->namabelakang=$data['namabelakang'];
				$objKategori->Namakategori=$data['Namakategori'];
				$objKategori->IDDepartment=$data['IDDepartment'];
				$objKategori->IDKategori=$data['IDKategori'];
				$objKategori->username=$data['username'];
				$arrResult[$cnt] = $objKategori;
				$cnt++;
			}
		}
		return $arrResult;
	}



	public function SelectAllKategoriByUsername($username){					
		$sql = "SELECT * FROM Kategori where username = 'this->$username' ";			
		$result = mysqli_query($this->connection, $sql);	
		
		$arrResult = Array();
		$cnt=0;
		if(mysqli_num_rows($result) > 0){				
			while ($data = mysqli_fetch_array($result))
			{
				$objKategori = new Kategori(); 
				$objKategori->IDKategori=$data['IDKategori'];
				$objKategori->IDDepartment=$data['IDDepartment'];
				$objKategori->username=$data['username'];
				$arrResult[$cnt] = $objKategori;
				$cnt++;
			}
		}
		return $arrResult;			
	}
	
	public function SelectOneKategori(){
		$sql = "SELECT * FROM Kategori WHERE IDDepartment='$this->IDDepartment'";
		$resultOne = mysqli_query($this->connection, $sql);
	
	
		if(mysqli_num_rows($resultOne) == 1){
			$this->hasil = true;
			$data = mysqli_fetch_assoc($resultOne);
			$this->username = $data['username'];
		}
	}
	
}