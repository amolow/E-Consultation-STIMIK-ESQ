<?php

class Konsultan extends Connection{
	private $IDKonsultan;
	private $IDDepartment;
    private $username;
  
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

	public function AddKonsultan(){
		$sql = "INSERT INTO konsultan (IDKonsultan,IDDepartment, username)
		VALUES ('$this->IDKonsultan', '$this->IDDepartment', '$this->username')";
		$this->hasil = mysqli_query($this->connection, $sql);		
		
		if($this->hasil)
			$this->message ='Data berhasil ditambahkan!';
		else
			$this->message ='Data gagal ditambahkan!';
	}
	
	public function UpdateKonsultan(){
	  $sql = "UPDATE konsultan SET IDDepartment = '$this->IDKonsultan', '$this->IDDepartment', username = '$this->username' WHERE IDDepartment = '$this->IDDepartment'";
		
		$this->hasil = mysqli_query($this->connection, $sql);
		
		if($this->hasil)
			$this->message ='Data berhasil ditambahkan!';
		else
			$this->message ='Data gagal ditambahkan!';
	}
	
	
	public function DeleteKonsultan(){
	  $sql = "DELETE FROM konsultan WHERE IDDepartment = '$this->IDDepartment'";
	  $this->hasil = mysqli_query($this->connection, $sql);
	  
	  if($this->hasil)
		  $this->message ='Data berhasil dihapus!';
	  else
		  $this->message ='Data gagal dihapus!';
	}
	
	public function SelectAllKonsultan(){
	
	
		$sql = "SELECT * FROM konsultan";
		$result = mysqli_query($this->connection, $sql);
		$arrResult = Array();
		$cnt=0;
	
		
		if(mysqli_num_rows($result) > 0) {
			while ($data = mysqli_fetch_array($result)) {
				$objKonsultan = new Konsultan();
				$objKonsultan->IDKonsultan=$data['IDKonsultan'];
				$objKonsultan->IDDepartment=$data['IDDepartment'];
				$objKonsultan->username=$data['username'];
				$arrResult[$cnt] = $objKonsultan;
				$cnt++;
			}
		}
		return $arrResult;
	}
	
	public function SelectAllKonsultanByUsername($username){					
		$sql = "SELECT * FROM konsultan where username = 'this->$username' ";			
		$result = mysqli_query($this->connection, $sql);	
		
		$arrResult = Array();
		$cnt=0;
		if(mysqli_num_rows($result) > 0){				
			while ($data = mysqli_fetch_array($result))
			{
				$objKonsultan = new Konsultan(); 
				$objKonsultan->IDKonsultan=$data['IDKonsultan'];
				$objKonsultan->IDDepartment=$data['IDDepartment'];
				$objKonsultan->username=$data['username'];
				$arrResult[$cnt] = $objKonsultan;
				$cnt++;
			}
		}
		return $arrResult;			
	}
	
	public function SelectOneKonsultan(){
		$sql = "SELECT * FROM konsultan WHERE IDDepartment='$this->IDDepartment'";
		$resultOne = mysqli_query($this->connection, $sql);
	
	
		if(mysqli_num_rows($resultOne) == 1){
			$this->hasil = true;
			$data = mysqli_fetch_assoc($resultOne);
			$this->username = $data['username'];
		}
	}
	
}