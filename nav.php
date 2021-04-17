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
            <a class="nav-link text-white" href="index.php">HOME</a>
            <a class="nav-link text-white" href="index.php?p=bookingScreen">ABOUT US</a>
            <a class="nav-link text-white" href="index.php?p=profile">PROFILE</a>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle text-white"
                href="#"
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
                <a class="dropdown-item text-white" href="../ListKonsultan/KonsultanListTest.html">Keuangan</a>
                <a class="dropdown-item text-white" href="../ListKonsultan/KonsultanListTest.html">Kemahasiswaan</a>
                <a class="dropdown-item text-white" href="../ListKonsultan/KonsultanListTest.html">Coaching</a>
            </li>
          </div>
        </div>
        <a href="pages/login.php">
          <img src="Asset/logout.png" alt="" id="logout" />
      </a>
      </div>
    </nav>
    <!-- PENUTUP NAVBAR -->
  </div>
