<?php
include '../classes/database.php';
$db = new Database  ();
?>

<h3>Edit Data Mahasiswa</h3>
<form action="proses_mhs.php?aksi=update" method="post">
    <?php
    foreach ($db->edit($_GET['id']) as $d) {
        ?>
    <table>
        <tr>
            <td>NIM</td>
            <td>
                <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
                <input type="text" name="nim" value="<?php echo $d['nim'] ?>">
            </td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" value="<?php echo $d['nama'] ?>"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>
                <textarea name="alamat" colspan="30" rows="5"><?php echo $d['alamat'] ?></textarea>
            </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Simpan"></td>
        </tr>
    </table>
    <?php
    }
    ?>
</form>