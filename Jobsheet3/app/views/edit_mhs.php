<?php
include '../classes/database.php';
include '../../public/bootstrap.php';
$db = new Database();
?>

<div class="container">
  <h3>Edit Data Mahasiswa</h3>
  <form action="proses_mhs.php?aksi=update" method="post">
    <?php
    foreach ($db->edit($_GET['id']) as $d) {
    ?>
      <div class="row">
        <div class="col-sm-6">
          <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
          <div class="mb-3">
            <label for="nim">NIM</label>
            <input type="text" id="nim" name="nim" value="<?php echo $d['nim'] ?>" class="form-control">
          </div>
          <div class="mb-3">
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" value="<?php echo $d['nama'] ?>" class="form-control">
          </div>
        </div>
        <div class="col-sm-6">
          <div class="mb-3">
            <label for="alamat">Alamat</label>
            <textarea id="alamat" name="alamat" rows="5" class="form-control"><?php echo $d['alamat'] ?></textarea>
          </div>
          <div class="mb-3">
            <input type="submit" value="Simpan" class="btn btn-primary">
            <a href="tampil_mhs.php" class="btn btn-secondary">Kembali</a>
          </div>
        </div>
      </div>
    <?php
    }
    ?>
  </form>
</div>
