        <?php
                  $name =  $_SESSION["namadepan"] . " ". $_SESSION["namabelakang"];
                  $status = "Mahasiswa STIMIK ESQ";
                  $email =  $_SESSION["email"];
                  $username = $_SESSION["username"];
                  $tgllahir =  $_SESSION["tgllahir"];
                  $role =  $_SESSION["role"];
                  $gender =  $_SESSION["gender"];
                  if ($gender == "P"){
                    $jKelamin = "Perempuan";
                  }
                  else if ($gender == "L"){
                    $jKelamin = "Laki-Laki";
                  }
                  else {
                    $jKelamin = "-";
                  }
                  $alamat =  $_SESSION["alamat"];
                  $notelp =  $_SESSION["notelp"];
                  $foto =  $_SESSION["foto"];
        ?>

        <div class="heading">
            <div class="media clearfix">
                <div class="left">
                    <div class="pic ">
                        <img class="pfp" src= <?php echo $foto; ?> alt="..." height="500px" width="450px">
                    </div>

            </div>

              <div class="information">
                <?php
                   if($role == "Admin"){
                ?>
                    <p style="font-size:40px;"><b>Admin E-Consultation STIMIK ESQ</b></p>
                <?php   
                   }
                   elseif ($role == "Konsultan") {
                ?>
                     <p style="font-size:40px;"><b>Konsultan STIMIK ESQ</b></p>
                <?php
                   }
                   elseif ($role == "Mahasiswa"){
                ?>
                    <p style="font-size:40px;"><b>Mahasiswa STIMIK ESQ</b></p>
                <?php   
                   }
                ?>

                

                <div class="info">
                  <p>
                    <?php
                      
                      echo "Nama Lengkap : $name<br>";
                      echo "NIM/Username : $username<br>";
                      echo "Jenis Kelamin : $jKelamin<br>";
                      echo "E-mail : $email<br>";
                      echo "Alamat : $alamat<br>";
                      echo "No Handphone : $notelp<br>";
                               
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
              <!-- <h1><b>Computer Science</b></h1>
              <div class="place">
                <div class="hold">
                </div>
                  <h1></h1>
              </div> -->
              
          </div>

        </div>
        <div class="foot">
            <a href="dashboardMahasiswa.php?p=ubahProfilMahasiswa&username=<?php echo $username;?>" type="button" class="consult" style="margin-left: 600px;">Edit Profile</a>

        </div>
