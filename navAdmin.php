    <!-- NAVBAR -->
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
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav" style="margin-left: 5em">
            <a class="nav-link text-white" href="dashboardAdmin.php?p=home2">HOME</a>
            <a class="nav-link text-white" href="dashboardAdmin.php?p=aboutus">ABOUT US</a>
            <a class="nav-link text-white" href="dashboardAdmin.php?p=profile">PROFILE</a>
          </div>
        </div>
        <a class="nav-link text-white" href="dashboardAdmin.php?p=actionPlan">Action Plan</a>

        <a class="nav-link text-white" href="dashboardAdmin.php?p=crud">Lihat Akun</a>
        <a class="nav-link text-white" href="dashboardAdmin.php?p=crudMahasiswa">Lihat Mahasiswa</a>
        <a class="nav-link text-white" href="dashboardAdmin.php?p=crudKonsultan">Lihat Konsultan</a>
        <a class="nav-link text-white" href="dashboardAdmin.php?p=crudbooking">Lihat Booking</a>
        <a class="nav-link text-white" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Registrasi User</a>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="text-align: center;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 style="width: 100%;">REGISTRASI</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <a href="dashboardAdmin.php?p=registrasiKonsul" style="float: left; width: 100%;" type="button" class="btn btn-primary">Konsultan</a>
        <a href="dashboardAdmin.php?p=registrasiMhs" style="float: right; width: 100%;" type="button" class="btn btn-primary">Mahasiswa</a>
      </div>

    </div>
  </div>
</div>

        <a href="pages/login.php">
          <img src="Asset/logout.png" alt="" id="logout" />
      </a>
      </div>
    </nav>
    <!-- PENUTUP NAVBAR -->
  </div>
