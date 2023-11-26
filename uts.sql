-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Nov 2023 pada 03.06
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id` int(3) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `username`, `password`, `email`) VALUES
(4, 'Riki', 'Riki4607', 'srikicahya@gmail.com'),
(5, 'Franklin', 'Franklin', 'Franklin@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_mahasiswa`
--

CREATE TABLE `tbl_mahasiswa` (
  `id` int(3) NOT NULL,
  `npm` varchar(25) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `prodi` varchar(30) NOT NULL,
  `fakultas` varchar(30) NOT NULL,
  `email` varchar(25) NOT NULL,
  `absen` int(3) NOT NULL,
  `tugas` int(3) NOT NULL,
  `uts` int(3) NOT NULL,
  `uas` int(3) NOT NULL,
  `totalnilai` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_mahasiswa`
--

INSERT INTO `tbl_mahasiswa` (`id`, `npm`, `nama`, `prodi`, `fakultas`, `email`, `absen`, `tugas`, `uts`, `uas`, `totalnilai`) VALUES
(2, '1212311', 'Riki Cahya Saputra', 'Informatika', 'FTI', 'srikicahya@gmail.com', 23, 90, 80, 80, 68),
(3, '1212311', 'Asep Saepuloh', 'Informatika', 'Psikologi', 'asep@gmail.com', 12, 70, 80, 90, 63),
(4, '1212311', 'Riki Cahya Saputra', 'Informatika', 'Psikologi', 'srikicahya@gmail.com', 23, 90, 80, 80, 68),
(5, '122213', 'Franklin', 'manajemen', 'manajemen', 'franklin@gmail.com', 80, 90, 80, 90, 85),
(6, '122213', 'Franklin', 'manajemen', 'manajemen', 'franklin@gmail.com', 80, 90, 80, 90, 85),
(7, '122213', 'Asep Saepuloh', 'manajemen', 'Psikologi', 'srikicahya@gmail.com', 23, 90, 80, 80, 68),
(8, '122213', 'Asep Saepuloh', 'manajemen', 'Psikologi', 'srikicahya@gmail.com', 23, 90, 80, 80, 68),
(9, '456783', 'Asep Saepuloh', 'Akuntansi', 'manajemen', 'asep@gmail.com', 60, 80, 70, 80, 73);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
