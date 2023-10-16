<?php

class mahasiswa {
var $nim;
var $nama;
var $alamat;

function tampil_nama() 
{
    return "nama saya Abda'u"."<br>";
}

function tampil_alamat()
{

}
}

$nama_mahasiswa =  new mahasiswa();

echo $nama_mahasiswa->tampil_nama();

class dosen {
    var $nidn;
    var $nama;
    var $prodi;

function tampil_nama() 
    {
        return "nama saya Desten";
    }

}

$nama_dosen =  new dosen();
echo $nama_dosen->tampil_nama();