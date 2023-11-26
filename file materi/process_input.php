<?php
include('../koneksi.php');

// Retrieve form data
$npm = $_POST['npm'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];
$fakultas = $_POST['fakultas'];
$email = $_POST['email'];
$absen = $_POST['absen'];
$tugas = $_POST['tugas'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];

// Calculate totalnilai
$totalnilai = ($absen + $tugas + $uts + $uas) / 4;

// Insert data into tbl_mahasiswa
$sql = "INSERT INTO tbl_mahasiswa (npm, nama, prodi, fakultas, email, absen, tugas, uts, uas, totalnilai)
        VALUES ('$npm', '$nama', '$prodi', '$fakultas', '$email', $absen, $tugas, $uts, $uas, $totalnilai)";

if ($koneksi->query($sql) === TRUE) {
    echo "Nilai berhasil disimpan ke database.";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

$koneksi->close();
