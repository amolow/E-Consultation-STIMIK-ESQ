<?php

class Mahasiswa extends Connection {

	private $IDprodi;
    private $semester;
    private $tgllahir;
    private $username;
  
  public function __get($atribute) 
  {
		if (property_exists($this, $atribute)) 
    {
			return $this->$atribute;
		}
	}

	public function __set($atribut, $value){
		if (property_exists($this, $atribut)){
			$this->$atribut = $value;
		}
	}

	public function AddMahasiswa(){
		$sql = "INSERT INTO mahasiswa (IDprodi, semester, tgllahir, username)
		VALUES ('$this->IDprodi', '$this->semester', '$this->tgllahir', '$this->username')";
		$this->hasil = mysqli_query($this->connection, $sql);
		
		
		if($this->hasil)
			$this->message ='Data berhasil ditambahkan!';
		else
			$this->message ='Data gagal ditambahkan!';
	}
	
	
	public function UpdateMahasiswa(){
	
	  $sql = "UPDATE mahasiswa SET username = '$this->username', IDprodi = '$this->IDprodi', semester = '$this->semester', tgllahir = '$this->tgllahir' WHERE username = '$this->username'";
		
		$this->hasil = mysqli_query($this->connection, $sql);
		
		if($this->hasil)
			$this->message ='Data berhasil ditambahkan!';
		else
			$this->message ='Data gagal ditambahkan!';
	}
	
	
	public function DeleteMahasiswa(){
	  $sql = "DELETE FROM mahasiswa WHERE username = '$this->username'";
	  $this->hasil = mysqli_query($this->connection, $sql);
	  
	  if($this->hasil)
		  $this->message ='Data berhasil dihapus!';
	  else
		  $this->message ='Data gagal dihapus!';
	}
	
	public function SelectAllMahasiswa(){
	
	
		$sql = "SELECT * FROM mahasiswa";
		$result = mysqli_query($this->connection, $sql);
		$arrResult = Array();
		$cnt=0;
	
		
		if(mysqli_num_rows($result) > 0) {
			while ($data = mysqli_fetch_array($result)) {
				$objMahasiswa = new Mahasiswa();
				$objMahasiswa->username=$data['username' ];
				$objMahasiswa->IDprodi=$data['IDprodi'];
				$objMahasiswa->semester=$data['semester'];
				$objMahasiswa->tgllahir=$data['tgllahir'];

				$arrResult[$cnt] = $objMahasiswa;
				$cnt++;
			}
		}
		return $arrResult;
	}
	
	
	
	public function SelectOneMahasiswa(){
		$sql = "SELECT * FROM mahasiswa WHERE NIM='1910130003'";
		$resultOne = mysqli_query($this->connection, $sql);
	
	
		if(mysqli_num_rows($resultOne) == 1){
			$this->hasil = true;
			$data = mysqli_fetch_assoc($resultOne);
			$this->prodi = $data['prodi'];
			$this->semester = $data['semester'];
			$this->tgllahir = $data['tgllahir'];
			$this->username = $data['username'];

		}
		}
	
	}