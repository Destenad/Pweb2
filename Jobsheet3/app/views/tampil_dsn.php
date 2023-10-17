<?php
//memanggil class database
include '../classes/database.php';
//inisisasi database baru
$db = new database;
?>

<h3> Data Dosen </h3>
<a href="input_dsn.php">Tambah Dosen</a>
 <table border="1">
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>
    <?php
    $no=1;
    foreach ($db->tampil_dosen() as $x){
        echo "<tr>";
        echo "<td>$no</td>";
        echo "<td>$x[nim]</td>";
        echo "<td>$x[nama]</td>";
        echo "<td>$x[alamat]</td>";
        echo "<td><a href='edit_mhs.php?id=$x[id]'>Edit</a> | <a href='proses_mhs.php?id=$x[id]&aksi=hapus'>Hapus</a></td>";
        echo "</tr>";
        $no++;
    }
    ?>
</table>