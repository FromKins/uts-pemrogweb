<?php
// Sertakan file koneksi database
include 'koneksi.php';

// Fungsi untuk membersihkan input pengguna
function cleanInput($input)
{
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

// Cek apakah formulir registrasi telah dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $username = cleanInput($_POST["username"]);
    $password = cleanInput($_POST["password"]);
    $email = cleanInput($_POST["email"]);

    // Validasi email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_message = "Format email tidak valid.";
        echo "<script>alert('$error_message'); window.location.href = 'index.php';</script>";
        exit();
    }

    // Hash password sebelum menyimpan ke database (gunakan metode keamanan yang lebih baik)
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Query untuk memeriksa apakah username sudah digunakan
    $check_query = "SELECT * FROM tbl_login 
                WHERE username='$username'";
    $check_result = mysqli_query($koneksi, $check_query);

    // Periksa apakah username sudah digunakan
    if (mysqli_num_rows($check_result) > 0) {
        $error_message = "Username sudah digunakan. Pilih username lain.";
        echo "<script>alert('$error_message'); window.location.href = 'index.php';</script>";
        exit();
    }

    // Query untuk menyimpan data registrasi ke database
    $insert_query = "INSERT INTO tbl_login (username, password, email) 
                VALUES ('$username', '$password', '$email')";
    $insert_result = mysqli_query($koneksi, $insert_query);

    // Periksa apakah query berhasil dijalankan
    if ($insert_result) {
        echo "<script>alert('Registrasi berhasil! Silakan login.'); window.location.href = 'index.php';</script>";
    } else {
        $error_message = "Terjadi kesalahan saat mendaftar. Silakan coba lagi.";
        echo "<script>alert('$error_message'); window.location.href = 'index.php';</script>";
    }

    // Tutup koneksi database
    mysqli_close($koneksi);
}
