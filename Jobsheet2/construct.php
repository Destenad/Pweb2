<?php

class mahasiswa {
var $nim;
var $nama;
var $alamat;

function __construct() 
{
    echo "saya Mahasiswa Teknik Informatika"."<br>";
}

function __destruct()
    {
        echo "Politeknik Negeri Cilacap"."<br>";
    }

function tampil_nama() 
{
    return "nama saya Abda'u"."<br>";
}

function tampil_alamat()
{

}

function tampil_mahasiswa() 
{
    echo "Tidak akan menjadi joki atau menggunakan jasa joki sampai lulus kuliah"."<br>";
}
}

$nama_mahasiswa =  new mahasiswa();

echo $nama_mahasiswa->tampil_nama();
echo $nama_mahasiswa->tampil_mahasiswa();
