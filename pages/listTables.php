<div class="btn-group" role="group" aria-label="Basic example">
<a class="btn btn-primary" href="index.php?p=crud" role="button">Akun</a>
<a class="btn btn-primary" href="index.php?p=crudbooking" role="button">Booking</a>
<a class="btn btn-primary" href="index.php?p=crudKonsultan" role="button">Konsultan</a>
<a class="btn btn-primary" href="index.php?p=crudMahasiswa" role="button">profile</a>


<!-- Button Registrasi -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Registrasi
</button>

<!-- Modal -->
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
        Pilih Jenis Registrasi 
      </div>
      <div class="modal-footer">
        <a href="index.php?p=registrasiKonsul" style="float: left; width: 100%;" type="button" class="btn btn-primary">Konsultan</a>
        <a href="index.php?p=registrasiMhs" style="float: right; width: 100%;" type="button" class="btn btn-primary">Mahasiswa</a>
      </div>
    </div>
  </div>
</div>
</div>