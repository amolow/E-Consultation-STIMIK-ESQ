
<?php

class Booking extends Connection {

	private $NIM;
	private $IDKonsultan;
    private $waktu;
    private $status;
    private $alasan;
    private $jadwal;
    private $kategori;
    private $tempat;
    private $IDBooking;
    private $judul;
    private $isi;
  
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
        $sql = "INSERT INTO booking (NIM, IDKonsultan, waktu, status, alasan, jadwal, kategori, tempat, IDBooking, judul, isi)
        VALUES ('$this->NIM', '$this->IDKonsultan', '$this->waktu', '$this->status', '$this->alasan', '$this->jadwal', '$this->kategori', '$this->tempat', '$this->IDBooking', '$this->judul', '$this->isi')";
        $this->hasil = mysqli_query($this->connection, $sql);
        
        
        if($this->hasil)
            $this->message ='Data berhasil ditambahkan!';
        else
            $this->message ='Data gagal ditambahkan!';
    }
    
    
    public function UpdateBooking(){
    
      $sql = "INSERT INTO booking (NIM, IDKonsultan, waktu, status, alasan, jadwal, kategori, tempat, IDBooking, judul, isi)
      VALUES ('$this->NIM', '$this->IDKonsultan', '$this->waktu', '$this->status', '$this->alasan', '$this->jadwal', '$this->kategori', '$this->tempat', '$this->IDBooking', '$this->judul', '$this->isi')";
        $this->hasil = mysqli_query($this->connection, $sql);
        
        if($this->hasil)
            $this->message ='Data berhasil ditambahkan!';
        else
            $this->message ='Data gagal ditambahkan!';
    }
    
    
    public function DeleteBooking(){
      $sql = "INSERT INTO booking (NIM, IDKonsultan, waktu, status, alasan, jadwal, kategori, tempat, IDBooking, judul, isi)
      VALUES ('$this->NIM', '$this->IDKonsultan', '$this->waktu', '$this->status', '$this->alasan', '$this->jadwal', '$this->kategori', '$this->tempat', '$this->IDBooking', '$this->judul', '$this->isi')";
        
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
                $objBooking->NIM=$data['NIM'];
                $objBooking->IDKonsultan=$data['IDKonsultan'];
                $objBooking->waktu=$data['waktu'];
                $objBooking->status=$data['status'];
                $objBooking->alasan=$data['alasan'];
                $objBooking->jadwal=$data['jadwal' ];
                $objBooking->kategori=$data['kategori' ];
                $objBooking->tempat=$data['tempat' ];
                $objBooking->judul=$data['judul' ];
                $objBooking->isi=$data['isi' ];
                $objBooking->IDBooking=$data['IDBooking' ];
                $arrResult[$cnt] = $objBooking;
                $cnt++;
            }
        }
        return $arrResult;
    }
    
    
    
    public function SelectOneBooking(){
        $sql = "SELECT * FROM booking WHERE NIM='$this->NIM'";
        $resultOne = mysqli_query($this->connection, $sql);
    
    
        if(mysqli_num_rows($resultOne) == 1){
            $this->hasil = true;
            $data = mysqli_fetch_assoc($resultOne);
            $this->IDKonsultan = $data['IDKonsultan'];
            $this->waktu = $data['waktu'];
            $this->status = $data['status'];
            $this->alasan = $data['alasan'];
            $this->jadwal = $data['jadwal'];
            $this->kategori = $data['kategori'];
            $this->tempat = $data['tempat'];
            $this->judul=$data['judul' ];
            $this->isi=$data['isi' ];
            $this->IDBooking = $data['IDBooking'];
        }
        }
    
    }