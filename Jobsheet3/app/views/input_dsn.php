<?php
include '../../public/bootstrap.php';
?>
<div class="container">
  <h3>Input Dosen</h3>
  <form action="proses_dsn.php?aksi=tambah" method="post">
    <div class="row">
      <div class="col-sm-6 mb-3">
        <label for="nidn">NIDN</label>
        <input type="text" id="nidn" name="nidn" class="form-control">
      </div>
      <div class="col-sm-6 mb-3">
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama" class="form-control">
      </div>
      <div class="col-sm-12 mb-3">
        <label for="alamat">Alamat</label>
        <textarea id="alamat" name="alamat" class="form-control" rows="5"></textarea>
      </div>
      <div class="col-sm-12">
        <input type="submit" value="Simpan" class="btn btn-primary">
        <a href="tampil_dsn.php" class="btn btn-secondary">Kembali</a>
      </div>
    </div>
  </form>
</div>
