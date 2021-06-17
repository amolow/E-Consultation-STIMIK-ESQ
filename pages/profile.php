
        <?php
                  $name =  $_SESSION["namadepan"] . " ". $_SESSION["namabelakang"];
                  $status = "Mahasiswa STIMIK ESQ";
                  $email =  $_SESSION["email"];
                  $username = $_SESSION["username"];
                  $tgllahir =  $_SESSION["tgllahir"];
                  $gender =  $_SESSION["gender"];
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

                <p class="name"><b style="font-size: 40px;"><?php echo "$name";?></b></p>
                <p class="desc" style="padding-top: 10px;">Mahasiswa STIMIK ESQ </p>

                <div class="info">
                  <p>
                    <?php
                      echo "Username : $username<br>";
                      echo "DOB : $tgllahir<br>";
                      echo "Gender : $gender<br>";
                      echo "E-mail : $email<br>";
                      echo "Alamat : $alamat<br>";
                      echo "No Telpon : $notelp<br>";  
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
            <button type="button" class="consult">Consultation History</button>
            <a href="index.php?p=ubahProfilMahasiswa&username=<?php echo $username;?>" type="button" class="consult" style="margin-left: 600px;">Edit Profile</a>

        </div>
