<?php

class Akun extends Connection
{
	private $username = "";
	private $password= "";
    private $namadepan= "";
    private $namabelakang= "";
    private $email= "";
    private $alamat= "";
    private $gender= "";
    private $notelp= "";
    private $role= "";
    private $hasil = false;
    private $foto;
  
  public function __get($atribute) 
  {
		if (property_exists($this, $atribute)) 
    {
		if (property_exists($this, $atribute)) 
        {
			return $this->$atribute;
		}
    }
    }

	public function __set($atribut, $value)
    {
		if (property_exists($this, $atribut)) 
        {
			$this->$atribut = $value;
		}
	}

public function AddAkun(){
    $sql = "INSERT INTO akun (username, password, namadepan, namabelakang, email, alamat, gender, notelp, role, foto)
    VALUES ('$this->username', '$this->password', '$this->namadepan', '$this->namabelakang', '$this->email', '$this->alamat', '$this->gender', '$this->notelp', '$this->role', '$this->foto')";
    $this->hasil = mysqli_query($this->connection, $sql);
    
    
            if($this->hasil)
                $this->message ='Data berhasil ditambahkan!';
            else
                $this->message ='Data gagal ditambahkan!';
    }


    public function UpdateAkun(){

        $sql = "UPDATE akun SET username = '$this->username', password = '$this->password', namadepan = '$this->namadepan', namabelakang = '$this->namabelakang', email = '$this->email', alamat = '$this->alamat', gender = '$this->gender', notelp = '$this->notelp', role = '$this->role' WHERE username = '$this->username'";
    
    $this->hasil = mysqli_query($this->connection, $sql);
    
        if($this->hasil)
        $this->message ='Data berhasil ditambahkan!';
    else
        $this->message ='Data gagal ditambahkan!';
    }


    public function DeleteAkun(){
        $sql = "DELETE FROM akun WHERE username='$this->username'";
        $this->hasil = mysqli_query($this->connection, $sql);
  
        if($this->hasil)
            $this->message ='Data berhasil dihapus!';
        else
            $this->message ='Data gagal dihapus!';
    }

    public function SelectAllAkun(){
        $sql = "SELECT * FROM akun";
        $result = mysqli_query($this->connection, $sql);
        $arrResult = Array();
    $cnt=0;

    
    if(mysqli_num_rows($result) > 0) {
        while ($data = mysqli_fetch_array($result)) {
            $objAkun = new Akun();
            $objAkun->username=$data['username'];
            $objAkun->password=$data['password'];
            $objAkun->namadepan=$data['namadepan'];
            $objAkun->namabelakang=$data['namabelakang'];
            $objAkun->email=$data['email'];
            $objAkun->alamat=$data['alamat' ];
            $objAkun->gender=$data['gender' ];
            $objAkun->notelp=$data['notelp' ];
            $objAkun->role=$data['role' ];
            $arrResult[$cnt] = $objAkun;
            $cnt++;
        }
    }
    return $arrResult;
}



public function SelectOneAkun(){
    $sql = "SELECT * FROM akun WHERE username='$this->username'";
    $resultOne = mysqli_query($this->connection, $sql);


    if(mysqli_num_rows($resultOne) == 1){
        $this->hasil = true;
        $data = mysqli_fetch_assoc($resultOne);
        $this->password = $data['password'];
        $this->namadepan = $data['namadepan'];
        $this->namabelakang = $data['namabelakang'];
        $this->email = $data['email'];
        $this->alamat = $data['alamat'];
        $this->gender = $data['gender'];
        $this->notelp = $data['notelp'];
        $this->role = $data['role'];
    }
}

public function ValidateUsername($username){

        $sql = "SELECT * FROM akun WHERE username = '$username'";

        $result = mysqli_query($this->connection, $sql);
        if (mysqli_num_rows ($result) == 1){
            $this->hasil = true;
            $data = mysqli_fetch_assoc($result);
            $this->username = $data['username'];
            $this->password = $data['password'];
            $this->namadepan = $data['namadepan'];
            $this->namabelakang = $data['namabelakang'];
            $this->email = $data['email'];
            $this->alamat = $data['alamat'];
            $this->notelp = $data['notelp'];
            $this->role = $data['role'];
            $this->gender = $data['gender'];
            $this->foto = $data['foto'];
            
        }
        else{
            $this->hasil = false;
        }
} 

public function ValidateEmail($email){

        $sql = "SELECT * FROM akun WHERE email = '$email'";

        $result = mysqli_query($this->connection, $sql);
        if (mysqli_num_rows ($result) == 1){
            $this->hasil = true;
            $data = mysqli_fetch_assoc($result);
            $this->username = $data['username'];
            $this->password = $data['password'];
            $this->namadepan = $data['namadepan'];
            $this->namabelakang = $data['namabelakang'];
            $this->email = $data['email'];
            $this->alamat = $data['alamat'];
            $this->notelp = $data['notelp'];
            $this->role = $data['role'];
            $this->gender = $data['gender'];
            $this->foto = $data['foto'];
            
        }
        else{
            $this->hasil = false;
        }
}

public function resetPass(){
    try {

            //if password null
            $newpass = password_hash($this->password, PASSWORD_DEFAULT);
            $sql = "UPDATE akun SET password='$newpass' WHERE username='$this->username'";
            mysqli_query($this->connection, $sql);

            return "succes";
        } catch (PDOException $e) {
            return "failed";
        }
}
}


