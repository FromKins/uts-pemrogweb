<?php
session_start();

//periksa apakah sesi pengguna sudah ada atau belum
if (isset($_SESSION['username'])) {
    //jika sesi pengguna ada, tampilkan pesan selamat datang
    $username = $_SESSION['username'];
    echo "<script>
        alert('Welcome, $username!');
        
        </script>";
} else {
    //jika sesi pengguna belum ada, tampilkan pesan bahwa pengguna belum login
    echo "<script> alert ('Anda belum login.');
        window.location.href = 'index.php'</script>";
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Website Materi</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
</head>

<body>

    <!-- sidebar -->
    <input type="checkbox" id="check">
    <div class="sidebar">
        <ul>
            <li><a href="#about">About</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#materi">Materi</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>

    <!-- bagian header -->
    <header>
        <div class="container">
            <h1><a href="">Website Materi</a></h1>
            <ul>
                <li><a href="#about">About</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#materi">Materi</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>

            <!-- menu mobile -->
            <label for="check" class="mobile-menu"><i class="fas fa-bars fa-2x"></i></label>
        </div>
    </header>

    <!-- bagian banner -->
    <section class="banner">
        <div class="container">
            <div class="banner-left">
                <img src="img/Malu.png">
                <h2>Hallo..!<br>
                    Saya seorang <span class="efek-ngetik"></span></h2>
                <p>Selamat datang di website
                    <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : 'Pengguna'; ?>!
                </p>
            </div>
        </div>
    </section>

    <!-- bagian about -->
    <section id="about">
        <div class="container">
            <h3>About</h3>
            <p>Perkenalkan saya Riki Cahya Saputra, saya berkuliah di Universitas Indonesia Bisnis Dan Informatika
                (UNIBI), saya dari Fakultas Teknologi dan Informatika, jurusan kuliah yaitu Informatika.</p>
            <p>Disini saya membuat sebuah website yang bisa menampilkan materi yang untuk memenuhi tugas UTS saya
                dalam mata kuliah Pemrograman Web II, Dosen Pengampu saya atas nama Bu Reni Nur Syanti, M.Kom. Di
                website
                ini kita bisa melihat beberapa materi yang sudah saya masukkan dalam form materi terdapat 3 materi
                dengan isi yang berbeda-beda yang menggunakan bahasa pemrogramman PHP</p>
        </div>
    </section>

    <!-- bagian skills -->
    <section id="skills">
        <div class="container">
            <h3>Skills</h3>
            <h4>HTML</h4>
            <div class="bar">
                <span class="nilai html">100%</span>
            </div>

            <h4>CSS</h4>
            <div class="bar">
                <span class="nilai css">90%</span>
            </div>

            <h4>Javascript</h4>
            <div class="bar">
                <span class="nilai js">80%</span>
            </div>
        </div>
    </section>


    <!-- bagian materi -->
    <section id="materi">
        <div class="container">
            <h3>Materi</h3>
            <div class="col-4">
                <a href="file materi/nilai_mahasiswa.php">
                    <img src="img/5.png">
                    <span>Materi Menghitung Nilai Mahasiswa</span>
                </a>
            </div>

            <div class="col-4">
                <a href="file materi/menghitung luas keliling lingkaran.php">
                    <img src="img/6.png">
                    <span>Materi Menghitung Luas Keliling Lingkaran</span>
                </a>
            </div>

            <div class="col-4">
                <a href="file materi/menghitung luas segitiga.php">
                    <img src="img/4.jpg">
                    <span>Materi Menghitung Luas Segitiga</span>
                </a>
            </div>
        </div>
    </section>

    <!-- bagian contact -->
    <section id="contact">
        <div class="container">
            <h3>Contact</h3>
            <div class="col-3">
                <h4>Alamat</h4>
                <p>Jl. Tirtasari II, Margasari, Bandung, Jawa Barat</p>
            </div>

            <div class="col-3">
                <h4>Email</h4>
                <p>srikicahya@gmail.com</p>
            </div>

            <div class="col-3">
                <h4>Telp/Hp</h4>
                <p>+62 821 1827 7500</p>
            </div>
        </div>
    </section>

    <!-- bagian footer -->
    <footer>
        <div class="container">
            <small>Copyright &copy; 2022 - Riki Cahya Saputra.</small>
        </div>
        <a class="social-media-icon" href="https://www.facebook.com/FromKins">
            <span class="fab fa-facebook"></span></a>
        <a class="social-media-icon" href="https://instagram.com/from.kins">
            <span class="fab fa-instagram"></span></a>
        <a class="social-media-icon" href="https://www.twitter.com/Riki90563267">
            <span class="fab fa-twitter"></span></a>
        <a class="social-media-icon" href="https://www.linkedin.com/in/riki-cahya-2a049717a">
            <span class="fab fa-linkedin"></span></a>
        <a class="social-media-icon" href="https://srikicahya.blogspot.com/">
            <span class="fab fa-blogger"></span></a>
        <a href="https://srikicahya.blogspot.com/p/privacy-policy-for-fromkins-at-fromkins.html">
            <h2>Privacy Policy.</h2>
        </a><a href="https://srikicahya.blogspot.com/p/terms-and-conditions-welcome-to.html">
            <h2><strong>Terms and Conditions.</strong></h2>
        </a><a href="https://srikicahya.blogspot.com/p/disclaimer-for-fromkins-if-you-require.html">
            <h2>Disclaimers.</h2>
        </a>
    </footer>

    <script src="js/script.js"></script>

    <a href="#" class="ignielToTop"></a>
</body>

</html>