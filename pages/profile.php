        
        <?php
                  $name = "Mutiara Persada Pulungan";
                  $status = "Mahasiswa STIMIK ESQ";
                  $nim = "1910130010";
                  $DoB = "19 Januari 2001";
                  $gender = "Perempuan";
                  $email = "m.persada.p@students.esqbs.ac.id";
                  $alamat = "Jakarta Selatan";
                  $notelpon = "086274839578";
        ?>
      

        <div class="heading">
            <div class="media clearfix">
                <div class="left">
                    <div class="pic ">
                        <img class="pfp" src="Asset/muti.jpg" alt="..." height="500px" width="450px">
                    </div>

            </div>

              

              <div class="information">

                <p class="name"><b style="font-size: 40px;"><?php echo "$name";?></b></p>
                <p class="desc" style="padding-top: 10px;">Mahasiswa STIMIK ESQ </p>

                <div class="info">
                  <p>
                    <?php
                      echo "NIM : $nim<br>";
                      echo "DoB : $DoB<br>";
                      echo "Gender : $gender<br>";
                      echo "E-mail : $email<br>";
                      echo "Alamat : $alamat<br>";
                      echo "No Telpon : $notelpon<br>";  
                    
                    ?>
                  </p>
                </div>
              
            </div>
            </div>
      </div>
        <div class="Bottom">
          <div class="major">
            <style type="text/css">
              h1{
                padding-top: 27px;
                font-size: 30px;
              }
            </style>
              <h1><b>Computer Science</b></h1>
              <div class="place">
                <div class="hold">
                </div>
                  <h1></h1>
              </div>
              
          </div>
          <div class="line"></div>
        </div>
        <div class="foot">
            <button type="button" class="consult">Consultation History</button>
            <a href="index.php?p=ubahProfilMahasiswa" type="button" class="consult" style="margin-left: 600px;">Edit Profile</a>

        </div>
