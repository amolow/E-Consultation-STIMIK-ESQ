
<?php

class Booking {

	private $nim;
	private $idKonsultan;
    private $waktu;
    private $status;
    private $alasan;
    private $jadwal;
    private $kategori;
    private $tempat;
    private $actionPlan;
  
  public function __get($atribute) 
  {
		if (property_exists($this, $atribute)) 
    {
			return $this->$atribute;
		}
	}

	public function __set($atribut, $value)
  {
		if (property_exists($this, $atribut)) 
    {
			$this->$atribut = $value;
		}
	}

  public function AddBooking(){
    $sql = "INSERT INTO booking (nim, fname, address)
    VALUES ('$this->nim', '$this->fname', '$this->address')";
    $this->hasil = mysqli_query($this->connection, $sql);
    
    
    if($this->hasil)
        $this->message ='Data berhasil ditambahkan!';
    else
        $this->message ='Data gagal ditambahkan!';
}


public function UpdateBooking(){

    $sql = "INSERT INTO booking (nim, fname, address)
    VALUES ('$this->nim', '$this->fname', '$this->address')";
    $this->hasil = mysqli_query($this->connection, $sql);
    
    if($this->hasil)
        $this->message ='Data berhasil ditambahkan!';
    else
        $this->message ='Data gagal ditambahkan!';
}


public function DeleteBooking(){
    $sql = "DELETE FROM booking WHERE nim='$this->nim'";
    $this->hasil = mysqli_query($this->connection, $sql);
    
    if($this->hasil)
        $this->message ='Data berhasil dihapus!';
    else
        $this->message ='Data gagal dihapus!';
}

public function SelectAllBooking(){
    $sql = "SELECT * FROM booking";
    $result = mysqli_query($this->connection, $sql);
    $arrResult = Array();
    $cnt=0;

    
    if(mysqli_num_rows($result) > 0) {
        while ($data = mysqli_fetch_array($result)) {
            $objBooking = new Booking();
            $objBooking->nim=$data['nim'];
            $objBooking->fname=$data['fname'];
            $objBooking->address=$data['address' ];
            $arrResult[$cnt] = $objBooking;
            $cnt++;
        }
    }
    return $arrResult;
}



public function SelectOneBooking(){
    $sql = "SELECT * FROM booking WHERE nim='$this->nim'";
    $resultOne = mysqli_query($this->connection, $sql);


    if(mysqli_num_rows($resultOne) == 1){
        $this->hasil = true;
        $data = mysqli_fetch_assoc($resultOne);
        $this->fname = $data['fname'];
        $this->address=$data['address'];
    }
    }
  
}
?>