
<html lang=en">
<head>
    <meta charset="Utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Braching</title>
</head>

<body> 
    <form method="post" action="">
        Masukkan angka: <input type="text" name="x">
        <input type="submit" value="Cek">
    </form>
 <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $x = $_POST["x"];
        echo "Nilai = $x <br/><br>";
if ($x > 0) {
    echo "$x adalah bilangan positif.";
} elseif ($x < 0) {
    echo "$x adalah bilangan negatif.";
} else {
    echo "$x adalah nol.";
}}
?>
</body>
</html>