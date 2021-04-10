<?php

class Akun{
	private $username;
	private $password;
    private $namaDepan;
    private $namaBelakang;
    private $email;
    private $alamat;
    private $gender;
    private $nomorTelpon;
    private $role;
  
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