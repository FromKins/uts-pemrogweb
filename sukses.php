<?php
//mulai sesi
session_start();

//periksa apakah sesi pengguna sudah ada atau belum
if (isset($_SESSION['username'])){
    //jika sesi pengguna ada, tampilkan pesan selamat datang
    $username = $_SESSION['username'];
    echo "<script>
        alert('Welcome, $username!');
        window.location.href = 'welcome.php';
        </script>";
        exit() ;
}else
{
    //jika sesi pengguna belum ada, tampilkan pesan bahwa pengguna belum login
    echo "Anda belum login.";
}
?>