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
            <a class="nav-link text-white" href="dashboardAdmin.php?p=home2">HOME</a>
            <a class="nav-link text-white" href="dashboardAdmin.php?p=aboutus">ABOUT US</a>
            <a class="nav-link text-white" href="dashboardAdmin.php?p=crudbooking">BOOKING</a>
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
                    <a class="dropdown-item text-white" href="dashboardAdmin.php?p=crudKonsultan">Konsultan</a>
                    <a class="dropdown-item text-white" href="dashboardAdmin.php?p=crudMahasiswa">Mahasiswa</a>
                    <a class="dropdown-item text-white" href="dashboardAdmin.php?p=home">listkategori</a>
                  </div>
              </li>
          </div>
        </div>
        
        <a class="nav-link text-white" href="dashboardAdmin.php?p=listTables">Admin Hub</a>
        <a type="button" data-toggle="modal" class="nav-link text-white" data-target="#exampleModal">Registration</a>
        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
      Registrasi
    </button> -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabdashboardAdmin="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="text-align: center;">
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
            <a href="dashboardAdmin.php?p=registrasiKonsul" style="float: left; width: 100%;" type="button" class="btn btn-primary">Konsultan</a>
            <a href="dashboardAdmin.php?p=registrasiMhs" style="float: right; width: 100%;" type="button" class="btn btn-primary">Mahasiswa</a>
          </div>
        </div>
      </div>
    </div>

        <a href="dashboardAdmin.php?p=profile">
          <img src="Asset/profile.png" alt="" style="width:50px; margin: 20px;" />
        </a>
        <a href="index.php">
          <img src="Asset/logout.png" alt="" id="logout" />
      </a>
      </div>
    </nav>
  </div>