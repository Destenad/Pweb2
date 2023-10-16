<?php 
class manusia{
    public $nama_saya;

    function panggil_nama($saya){
    $this->nama_saya = $saya;
    }
}
//class turunan dari manusia
class mahasiswa extends manusia
{
    public $nama_mahasiswa;

    function panggil_mahasiswa($mahasiswa){
    $this->nama_mahasiswa = $mahasiswa;
    }
}
//intasiasi mahasiswa
$informatika= new mahasiswa();

$informatika->panggil_nama("Desten");
$informatika->panggil_mahasiswa("Aditya");

echo "Nama depan saya : " . $informatika->nama_saya . "</br>";
echo "Nama belakang saya : " . $informatika->nama_mahasiswa;