<?php 
//Mulai sesi
session_start();

//Hapus semua variabel
session_unset();

//Hancurkan sesi
session_destroy();

//Redirect ke halaman index
header("Location: index.php");
exit();
?>