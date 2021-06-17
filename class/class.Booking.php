
<?php

class Booking extends Connection {

	private $IDMahasiswa = " ";
	private $IDKonsultan = " ";
    private $waktu = " ";
    private $status = " ";
    private $alasan = " ";
    private $jadwal = " ";
    private $IDKategori = " ";
    private $tempat= " ";
    private $IDBooking= " ";

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
        $sql = "INSERT INTO booking (IDMahasiswa, IDKonsultan, waktu, status, alasan, jadwal, IDKategori, tempat, IDBooking)
        VALUES ('$this->IDMahasiswa', '$this->IDKonsultan', '$this->waktu', '$this->status', '$this->alasan', '$this->jadwal', '$this->IDKategori', '$this->tempat', '$this->IDBooking')";
        $this->hasil = mysqli_query($this->connection, $sql);
        
        
        if($this->hasil)
            $this->message ='Data berhasil ditambahkan!';
        else
            $this->message ='Data gagal ditambahkan!';
    }
    public function toArray()
    {
        return array_map(function ($value) {
            return $value instanceof Arrayable ? $value->toArray() : $value;
        }, $this->items);
    }

    public function getIdMahasiswa($username)
    {
        $sql = "SELECT IDMahasiswa FROM mahasiswa WHERE username ='".$username."'";        
        $result = mysqli_query($this->connection, $sql);
        $arrResult = Array();

        return $result->fetch_all(MYSQLI_ASSOC);
        
	}

    public function getIdKonsultan($username)
    {
        $sql = "SELECT IDKonsultan FROM konsultan WHERE username ='".$username."'";        
        $result = mysqli_query($this->connection, $sql);
        $arrResult = Array();

        return $result->fetch_all(MYSQLI_ASSOC);
        
	}
    
    public function UpdateBooking(){
    
      $sql = "INSERT INTO booking (IDMahasiswa, IDKonsultan, waktu, status, alasan, jadwal, IDKategori, tempat, IDBooking)
      VALUES ('$this->IDMahasiswa', '$this->IDKonsultan', '$this->waktu', '$this->status', '$this->alasan', '$this->jadwal', '$this->IDKategori', '$this->tempat', '$this->IDBooking')";
        $this->hasil = mysqli_query($this->connection, $sql);
        
        if($this->hasil)
            $this->message ='Data berhasil ditambahkan!';
        else
            $this->message ='Data gagal ditambahkan!';
    }

    public function UpdateStatusBooking($status, $IDBooking)
    {
        $sql = "UPDATE booking SET status ='".$status."' WHERE IDBooking ='".$IDBooking."'";
        $this->hasil = mysqli_query($this->connection, $sql);

        return $IDBooking;
    }
    

    
    public function DeleteBooking(){
      $sql = "INSERT INTO booking (IDMahasiswa, IDKonsultan, waktu, status, alasan, jadwal, IDKategori, tempat, IDBooking)
      VALUES ('$this->IDMahasiswa', '$this->IDKonsultan', '$this->waktu', '$this->status', '$this->alasan', '$this->jadwal', '$this->IDKategori', '$this->tempat', '$this->IDBooking')";
        
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
                $objBooking->IDMahasiswa=$data['IDMahasiswa'];
                $objBooking->IDKonsultan=$data['IDKonsultan'];
                $objBooking->waktu=$data['waktu'];
                $objBooking->status=$data['status'];
                $objBooking->alasan=$data['alasan'];
                $objBooking->jadwal=$data['jadwal' ];
                $objBooking->IDKategori=$data['IDKategori' ];
                $objBooking->tempat=$data['tempat' ];
                $objBooking->IDBooking=$data['IDBooking' ];
                $arrResult[$cnt] = $objBooking;
                $cnt++;
            }
        }
        return $arrResult;
    }
    
    public function SelectBookingByKonsultan($IDKonsultan)
    {
        $sql = "SELECT * FROM booking WHERE IDKonsultan ='".$IDKonsultan."'";
        $result = mysqli_query($this->connection, $sql);
        $arrResult = Array();
        $cnt=0;
    
        
        if(mysqli_num_rows($result) > 0) {
            while ($data = mysqli_fetch_array($result)) {
                $objBooking = new Booking();
                $objBooking->IDMahasiswa=$data['IDMahasiswa'];
                $objBooking->IDKonsultan=$data['IDKonsultan'];
                $objBooking->waktu=$data['waktu'];
                $objBooking->status=$data['status'];
                $objBooking->alasan=$data['alasan'];
                $objBooking->jadwal=$data['jadwal' ];
                $objBooking->IDKategori=$data['IDKategori' ];
                $objBooking->tempat=$data['tempat' ];
                $objBooking->IDBooking=$data['IDBooking' ];
                $arrResult[$cnt] = $objBooking;
                $cnt++;
            }
        }
        return $arrResult;
     
    }
    
    public function SelectOneBooking(){
        $sql = "SELECT * FROM booking WHERE IDMahasiswa='$this->IDMahasiswa'";
        $resultOne = mysqli_query($this->connection, $sql);
    
    
        if(mysqli_num_rows($resultOne) == 1){
            $this->hasil = true;
            $data = mysqli_fetch_assoc($resultOne);
            $this->IDKonsultan = $data['IDKonsultan'];
            $this->waktu = $data['waktu'];
            $this->status = $data['status'];
            $this->alasan = $data['alasan'];
            $this->jadwal = $data['jadwal'];
            $this->IDKategori = $data['IDKategori'];
            $this->tempat = $data['tempat'];
            $this->IDBooking = $data['IDBooking'];
        }
        }
    
    }