
<html lang=en">
<head>
    <meta charset="Utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>String Manipulasi</title>
</head>

<body>
<?php
$x = "Selamat belajar PHP!";

// Mengubah  menjadi huruf kapital
$kapital = strtoupper($x);

// Mengubah string menjadi huruf kecil
$kecil = strtolower($x);

// Memotong string (misalnya, dari Huruf pertama 0 hingga 7)
$potong = substr($x, 0, 7);

echo "String asli: $x<br>";
echo "Huruf kapital: $kapital<br>";
echo "Huruf kecil: $kecil<br>";
echo "String dipotong: $potong<br>";
?>
</body>
</html>