    <!-- NAVBAR MAHASISWA-->
    <div class="hello solid">
    <nav class="navbar navbar-expand-lg navbar-dark" style="position: fixed; width:100%;">
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
            <a class="nav-link text-white" href="dashboardMahasiswa.php?p=home2">HOME</a>
            <a class="nav-link text-white" href="dashboardMahasiswa.php?p=aboutus">ABOUT US</a>
            <a class="nav-link text-white" href="dashboardMahasiswa.php?p=actionPlan">ACTION PLAN</a>
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
                    <a class="dropdown-item text-white" href="dashboardMahasiswa.php?p=listConsultant">Dosen Pembimbing</a>
                    <a class="dropdown-item text-white" href="dashboardMahasiswa.php?p=home2">Dosen Kaprodi</a>
                  </div>
                </div>
                <a class="dropdown-item text-white" href="dashboardMahasiswa.php?p=crudbooking ">Keuangan</a>
                <a class="dropdown-item text-white" href="../ListKonsultan/KonsultanListTest.html">Kemahasiswaan</a>
                <a class="dropdown-item text-white" href="../ListKonsultan/KonsultanListTest.html">Coaching</a>
               </div>
            </li>
          </div>
        </div>

        <a href="dashboardMahasiswa.php?p=profile">
          <img src="Asset/profile.png" alt="" style="width:50px; margin: 20px;" />
        </a>
        <a href="index.php">
          <img src="Asset/logout.png" alt="" id="logout" style="width:40px;"/>
        </a>
      </div>
    </nav>
  </div>
  <!-- PENUTUP NAVBAR -->