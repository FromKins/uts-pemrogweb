<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $alas = $_POST['alas'];
    $tinggi = $_POST['tinggi'];

    // Hitung luas segitiga
    $luas = 0.5 * $alas * $tinggi;

    // Hitung sisi miring segitiga siku-siku
    $sisi_miring = sqrt($alas ** 2 + $tinggi ** 2);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Hitung Segitiga</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h1>Hasil Perhitungan Segitiga</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<p>Alas Segitiga: $alas</p>";
        echo "<p>Tinggi Segitiga: $tinggi</p>";
        echo "<p>Luas Segitiga: $luas</p>";
        echo "<p>Sisi Miring Segitiga Siku-siku: $sisi_miring</p>";
    } else {
        echo "<p>Formulir belum dikirimkan.</p>";
    }
    ?>
    <p><a href="menghitung luas segitiga.php">Kembali ke Formulir</a></p>
</body>

</html>