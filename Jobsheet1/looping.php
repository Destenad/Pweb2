<html lang=en">
<head>
    <meta charset="Utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Perulangan</title>
</head>

<body>
<?php
echo "Perulangan For bilangan genap dari 1 hingga 10</br>";
for ($x = 2; $x <= 10; $x += 2) {
    echo" $x </br>";
}
echo "</br>";
echo "Perulangan For bilangan ganjil dari 1 hingga 10</br>";
$y = 1; 
while ($y <= 10) {
    echo "$y </br>";
    $y += 2;
}
echo"Perulangan Do-While untuk bilangan prima kurang dari 20</br>";
$z = 2; // Inisialisasi variabel $z dengan nilai 2

do {
    $prima = true; // Inisialisasi variabel $prima sebagai true

    for ($i = 2; $i <= sqrt($z); $i++) {
        if ($z % $i === 0) { 
            $prima = false; // Jika $z habis dibagi oleh $i, maka $z bukan bilangan prima
            break;
        }
    }

    if ($prima && $z < 20) {
        echo $z . "</br></br>"; // Cetak nilai $z jika $z adalah bilangan prima dan kurang dari 20
    }

    $z++; // Tingkatkan nilai $z untuk mencari bilangan prima berikutnya
} while ($z < 20); // Melanjutkan perulangan selama $z kurang dari 20
?>
</body>
</html>