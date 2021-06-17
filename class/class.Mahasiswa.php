<?php

class Mahasiswa extends Connection {

	private $IDMahasiswa;
	private $IDprodi;
    private $semester;
    private $tgllahir;
    private $username;
    private $namadepan;
	private $namabelakang;
	private $email;
	private $alamat;
	private $notelp;
	private $role;
	private $gender;
	private $foto;
	private $NamaProdi;
  
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
		$sql = "INSERT INTO mahasiswa (IDMahasiswa, IDprodi, semester, tgllahir, username)
		VALUES ('$this->IDMahasiswa', '$this->IDprodi', '$this->semester', '$this->tgllahir', '$this->username')";
		$this->hasil = mysqli_query($this->connection, $sql);
		
		
		if($this->hasil)
			$this->message ='Data berhasil ditambahkan!';
		else
			$this->message ='Data gagal ditambahkan!';
	}
	
	
	public function UpdateMahasiswa(){
	
	  $sql = "UPDATE mahasiswa SET username = '$this->username', '$this->IDMahasiswa', IDprodi = '$this->IDprodi', semester = '$this->semester', tgllahir = '$this->tgllahir' WHERE username = '$this->username'";
		
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
				$objMahasiswa->username=$data['username'];
				$objMahasiswa->IDMahasiswa=$data['IDMahasiswa'];
				$objMahasiswa->IDprodi=$data['IDprodi'];
				$objMahasiswa->semester=$data['semester'];
				$objMahasiswa->tgllahir=$data['tgllahir'];

				$arrResult[$cnt] = $objMahasiswa;
				$cnt++;
			}
		}
		return $arrResult;
	}


	public function SelectAllMahasiswaView(){
	
		$sql = "SELECT * FROM vw_mahasiswa";
		$result = mysqli_query($this->connection, $sql);
		$arrResult = Array();
		$cnt=0;
	
		
		if(mysqli_num_rows($result) > 0) {
			while ($data = mysqli_fetch_array($result)) {
				$objMahasiswa = new Mahasiswa();

				$objMahasiswa->username=$data['username'];
				$objMahasiswa->namadepan=$data['namadepan'];
				$objMahasiswa->namabelakang=$data['namabelakang'];
				$objMahasiswa->email=$data['email'];
				$objMahasiswa->alamat=$data['alamat'];
				$objMahasiswa->notelp=$data['notelp'];
				$objMahasiswa->role=$data['role'];
				$objMahasiswa->gender=$data['gender'];
				$objMahasiswa->foto=$data['foto'];
				$objMahasiswa->IDMahasiswa=$data['IDMahasiswa'];
				$objMahasiswa->IDprodi=$data['IDprodi'];
				$objMahasiswa->semester=$data['semester'];
				$objMahasiswa->tgllahir=$data['tgllahir'];
				$objMahasiswa->NamaProdi=$data['NamaProdi'];
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
			$this->IDMahasiswa = $data['IDMahasiswa'];
			$this->semester = $data['semester'];
			$this->tgllahir = $data['tgllahir'];
			$this->username = $data['username'];

		}
		}
	
	}