<?php
//memanggil class database
include '../classes/database.php';
//inisisasi database baru
$db = new database;
?>

<h3> Data Mahasiswa </h3>
<a href="input_mhs.php">Tambah Mahasiswa</a>
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
    foreach ($db->tampil_mahasiswa() as $x){
        echo "<tr>";
        echo "<td>$no</td>";
        echo "<td>$x[nim]</td>";
        echo "<td>$x[nama]</td>";
        echo "<td>$x[alamat]</td>";
        echo "<td><a href='edit_mhs.php?id=$x[id]'>Edit</a> | <a href='hapus_mhs.php?id=$x[id]'>Hapus</a></td>";
        echo "</tr>";
        $no++;
    }
    ?>
</table>