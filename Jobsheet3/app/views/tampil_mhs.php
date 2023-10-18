<?php
// Memanggil class database
include '../classes/database.php';
include '../../public/bootstrap.php';
// Inisiasi database baru
$db = new database;
?>

<div class="px-5">
    <h3> Data Mahasiswa </h3>
    <a class="btn btn-primary mb-3 mt-3" href="input_mhs.php">Tambah Mahasiswa</a>

<?php

if (isset($_GET['status'])&&$_GET['status']=="tambah"){
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>DATA BERHASIL DITAMBAKAN!!</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
} else if (isset($_GET['status'])&&$_GET['status']=="update"){
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>DATA BERHASIL DI UPDATE!!</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';

} else if (isset($_GET['status'])&&$_GET['status']=="hapus"){
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>DATA BERHASIL DI HAPUS!!</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
?>

    <table class="table">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        foreach ($db->tampil_mahasiswa() as $x) {
            echo "<tr>";
            echo "<td>$no</td>";
            echo "<td>$x[nim]</td>";
            echo "<td>$x[nama]</td>";
            echo "<td>$x[alamat]</td>";
            echo "<td>
                      <a class='btn btn-warning' href='edit_mhs.php?id=$x[id]'>Edit</a> | 
                      <a class='btn btn-danger' href='proses_mhs.php?id=$x[id]&aksi=hapus' onclick='return confirmDelete();'>Hapus</a>
                  </td>";
            echo "</tr>";
            $no++;
        }
        ?>
    </table>
</div>
</div>

<script>
    function confirmDelete() {
        return confirm("Apakah Anda yakin ingin menghapus mahasiswa ini?");
    }

</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>