<?php

class Mahasiswa {

	private $nim;
	private $prodi;
    private $semester;
    private $usia;
    private $tanggalLahir;
  
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