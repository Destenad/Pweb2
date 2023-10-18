<?php

class dosen
{
    public $nama_saya;
    private $ttd_dosen;

    function panggil_nama($saya)
    {
        return $this->nama_saya = $saya;
    }
}

class mahasiswa extends dosen
{
    public $nama_mahasiswa;

    function panggil_mahasiswa($mahasiswa)
    {
        return $this->nama_mahasiswa = $mahasiswa;
    }
}

//instansiasi class mahasiswa
$des = new mahasiswa();

$des->panggil_nama("Desten");
$des->panggil_mahasiswa("Aditya");

echo "Nama Depan saya " . $des->nama_saya . "</br>";
echo "Nama Belakang saya " . $des->nama_mahasiswa . "</br>";

echo "KELAS PROTECTED <br>";
//Class Protected
class hewan
{
    protected $nama_hewan;

    function panggil_hewan($hewan)
    {
        return $this->nama_hewan = $hewan;
    }
    // Menambahkan fungsi getter agar nama_hewan bisa diakses diluar class hewan atau sub class nya yaitu kucing
    function getNamaHewan()
    {
        return $this->nama_hewan;
    }

    protected function suara()
    {
        return "Miawww";
    }
}

class kucing extends hewan
{
    protected $ras;
    function panggil_ras($ras_kucing)
    {
        return $this->ras = $ras_kucing;
    }

    function getras()
    {
        return $this->ras;
    }
}

$kocheng = new kucing();
$kocheng->panggil_hewan("Kucing");
$kocheng->panggil_ras("Anggora");

echo "Hewan itu bernama " . $kocheng->getNamaHewan() . "<br>";
echo "Hewan itu bernama " . $kocheng->getras();
//echo $kocheng->suara();


echo "<br>";
echo "KELAS PRIVATE <br>";
//Class Private
class Kendaraan
{
    private $merk;
    private $tahun;

    public function __construct($merk, $tahun)
    {
        $this->merk = $merk;
        $this->tahun = $tahun;
    }

    public function getMerk()
    {
        return $this->merk;
    }

    public function getTahun()
    {
        return $this->tahun;
    }
}

class Mobil extends Kendaraan
{
    private $jumlah_pintu;

    public function __construct($merk, $tahun, $jumlah_pintu)
    {
        parent::__construct($merk, $tahun);
        $this->jumlah_pintu = $jumlah_pintu;
    }

    private function informasiMobil()
    {
        return "Merk Mobil: " . $this->getMerk() . "<br>" .
            "Tahun Produksi: " . $this->getTahun() . "<br>" .
            "Jumlah Pintu: " . $this->jumlah_pintu . "<br>";
    }
    //Supaya informasiMobil bisa diakses diluar class kita perlu membuat 1 kelas public untuk mengembalikan nilai fungsi informasi mobil
    public function tampilkanInformasiMobil()
    {
        return $this->informasiMobil();
    }
}

$mobil = new Mobil("Toyota", 2020, 4);

echo $mobil->tampilkanInformasiMobil();
