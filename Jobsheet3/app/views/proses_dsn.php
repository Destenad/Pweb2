<?php
include '../classes/database.php';
$db = new Database  ();
$aksi = $_GET['aksi'];
if ($aksi   == "tambah") {
    $db ->tambah_dsn($_POST['nidn'],$_POST['nama'],$_POST['alamat']);
    header("location:tampil_dsn.php");
} elseif ($aksi == "update") {
    $db->update_dsn($_POST['id'],$_POST['nidn'],$_POST['nama'],$_POST['alamat']);
    header("location:tampil_dsn.php");
} elseif ($aksi == "hapus") {
    $db->hapus_dsn($_GET['id']);
    header("location:tampil_dsn.php");
}