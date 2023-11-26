<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $jari_jari = $_POST['jari_jari'];

    // Hitung luas dan keliling lingkaran
    $luas = 3.14 * $jari_jari * $jari_jari;
    $keliling = 2 * 3.14 * $jari_jari;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Hitung Lingkaran</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h1>Hasil Perhitungan Lingkaran</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<p>Jari-jari Lingkaran: $jari_jari</p>";
        echo "<p>Luas Lingkaran: $luas</p>";
        echo "<p>Keliling Lingkaran: $keliling</p>";
    } else {
        echo "<p>Formulir belum dikirimkan.</p>";
    }
    ?>
    <p><a href="menghitung luas keliling lingkaran.php">Kembali ke Formulir</a></p>
</body>

</html>