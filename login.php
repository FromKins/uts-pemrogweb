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

// Cek apakah formulir login telah dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $username = cleanInput($_POST["username"]);
    $password = cleanInput($_POST["password"]);

    // Query untuk memeriksa apakah username dan password cocok
    $query = "SELECT * FROM tbl_login 
            WHERE username='$username' AND password='$password'";
    $result = mysqli_query($koneksi, $query);

    // Periksa apakah hasil query menghasilkan baris data
    if (mysqli_num_rows($result) == 1) {
        // Login berhasil
        session_start();
        $_SESSION['username'] = $username;
        header("Location: welcome.php");
        exit();
    } else {
        // Login gagal
        $error_message = "Login gagal. Periksa kembali username dan password.";
        echo "<script>alert('$error_message'); window.location.href = 'index.php'</script>";
    }

    // Tutup koneksi database
    mysqli_close($koneksi);
}
?>