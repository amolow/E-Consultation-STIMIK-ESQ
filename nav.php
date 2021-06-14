<?php
  if ($role == "Admin"){
?>
    <!-- NAVBAR ADMIN -->
    <div class="hello solid">
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container-fluid">
        <img src="Asset/esq.png" alt="" />
        <div class="logo" style="margin-left: 2em">
          <h2>E-Consultation</h2>
          <p>
            Sekolah Tinggi Ilmu Manajemen <br />
            dan Ilmu Komputer ESQ
          </p>
        </div>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="font-family:Roboto;">
          <div class="navbar-nav" style="margin-left: 5em">
            <a class="nav-link text-white" href="index.php?p=home2">HOME</a>
            <a class="nav-link text-white" href="index.php?p=aboutus">ABOUT US</a>
            <a class="nav-link text-white" href="index.php?p=crudbooking">BOOKING</a>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-white"
                    href="pages/home.php"
                    id="navbarDropdown"
                    role="button"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                  ACCOUNTS
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item text-white" href="index.php?p=crudKonsultan">Konsultan</a>
                    <a class="dropdown-item text-white" href="index.php?p=crudMahasiswa">Mahasiswa</a>
                  </div>
              </li>
          </div>
        </div>
        
        <a class="nav-link text-white" href="index.php?p=listTables">Admin Hub</a>
        <a type="button" data-toggle="modal" class="nav-link text-white" data-target="#exampleModal">Registration</a>
        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
      Registrasi
    </button> -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="text-align: center;">
      <div class="modal-dialog" role="document">
        <div class="modal-content" style="color: black;">
          <div class="modal-header">
            <h5 style="width: 100%;">REGISTRASI</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Pilih Jenis Registrasi 
          </div>
          <div class="modal-footer">
            <a href="index.php?p=registrasiKonsul" style="float: left; width: 100%;" type="button" class="btn btn-primary">Konsultan</a>
            <a href="index.php?p=registrasiMhs" style="float: right; width: 100%;" type="button" class="btn btn-primary">Mahasiswa</a>
          </div>
        </div>
      </div>
    </div>

        <a href="index.php?p=profile">
          <img src="Asset/profile.png" alt="" style="width:50px; margin: 20px;" />
        </a>
        <a href="pages/login.php">
          <img src="Asset/logout.png" alt="" id="logout" />
      </a>
      </div>
    </nav>
  </div>
  <!-- PENUTUP NAVBAR ADMIN-->
<?php
  }
  elseif ($role == 'Konsultan') {
  ?>




    <!-- NAVBAR KONSULTAN-->
    <div class="hello solid">
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container-fluid">
        <img src="Asset/esq.png" alt="" />
        <div class="logo" style="margin-left: 2em">
          <h2>E-Consultation</h2>
          <p>
            Sekolah Tinggi Ilmu Manajemen <br />
            dan Ilmu Komputer ESQ
          </p>
        </div>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="font-family:Roboto;">
          <div class="navbar-nav" style="margin-left: 5em">
            <a class="nav-link text-white" href="index.php?p=home2">HOME</a>
            <a class="nav-link text-white" href="index.php?p=aboutus">ABOUT US</a>
            <a class="nav-link text-white" href="index.php?p=actionPlan">ACTION PLAN</a>
            <a class="nav-link text-white" href="index.php?p=actionPlan">BOOKING</a>
          </div>
        </div>

        <a href="index.php?p=profile&aliolow27">
          <img src="Asset/profile.png" alt="" style="width:50px; margin: 20px;" />
        </a>
        <a href="pages/login.php">
          <img src="Asset/logout.png" alt="" id="logout" style="width:40px;"/>
        </a>
      </div>
    </nav>
  </div>
  <!-- PENUTUP NAVBAR KONSULTAN-->
<?php
  }
  elseif ($role = 'Mahasiswa') {
?>



    <!-- NAVBAR MAHASISWA-->
    <div class="hello solid">
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container-fluid">
        <img src="Asset/esq.png" alt="" />
        <div class="logo" style="margin-left: 2em">
          <h2>E-Consultation</h2>
          <p>
            Sekolah Tinggi Ilmu Manajemen <br />
            dan Ilmu Komputer ESQ
          </p>
        </div>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="font-family:Roboto;">
          <div class="navbar-nav" style="margin-left: 5em">
            <a class="nav-link text-white" href="index.php?p=home2">HOME</a>
            <a class="nav-link text-white" href="index.php?p=aboutus">ABOUT US</a>
            <a class="nav-link text-white" href="index.php?p=actionPlan">ACTION PLAN</a>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle text-white"
                href="pages/home.php"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
              COUNSELLING
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <div class="btn-group dropright">
                  <button type="button" class="btn dropdown-toggle text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dosen
                  </button>
                  <div class="dropdown-menu" >
                    <a class="dropdown-item text-white" href="index.php?p=listConsultant">Dosen Pembimbing</a>
                    <a class="dropdown-item text-white" href="index.php?p=home2">Dosen Kaprodi</a>
                  </div>
                </div>
                <a class="dropdown-item text-white" href="index.php?p=crudbooking ">Keuangan</a>
                <a class="dropdown-item text-white" href="../ListKonsultan/KonsultanListTest.html">Kemahasiswaan</a>
                <a class="dropdown-item text-white" href="../ListKonsultan/KonsultanListTest.html">Coaching</a>
               </div>
            </li>
          </div>
        </div>

        <a href="index.php?p=profile&aliolow27">
          <img src="Asset/profile.png" alt="" style="width:50px; margin: 20px;" />
        </a>
        <a href="pages/login.php">
          <img src="Asset/logout.png" alt="" id="logout" style="width:40px;"/>
        </a>
      </div>
    </nav>
  </div>
  <!-- PENUTUP NAVBAR -->
<?php
  }
?>