<?php

class mahasiswa
 {
public $nama;//property public
private $nim="220302090";
//public function
function tampilkan_nama() 
{ 
    return "Nama saya Abda'u"."<br>";
}
//protected menthod
function tampilkan_nim()
 {
    return "NIM saya " . $this->nim;
 }

}
//instansiasi object mahasiswa
$mahasiswa =  new mahasiswa();
$nim = new mahasiswa();
echo $mahasiswa->tampilkan_nama();
echo $nim->tampilkan_nim();