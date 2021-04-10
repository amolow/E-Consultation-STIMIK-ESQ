
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

}
?>