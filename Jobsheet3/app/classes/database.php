<?php

class database
{
    var $host = "localhost";
    var $user = "root";
    var $pass = "";
    var $db = "akademik";
    var $koneksi;

    function __construct()
    {
        $this->koneksi = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
    }

    function tampil_mahasiswa()
    {
        $data = mysqli_query($this->koneksi, "SELECT * FROM mahasiswa");
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }

        return $hasil;
    }
    function tambah_mhs($nim,$nama,$alamat)
    {
        mysqli_query($this->koneksi, "INSERT INTO mahasiswa(nim,nama,alamat) VALUES('$nim','$nama','$alamat')");
    }
}
