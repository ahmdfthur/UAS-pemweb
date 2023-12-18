-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 18 Des 2023 pada 01.00
-- Versi server: 10.5.20-MariaDB
-- Versi PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id21684677_database1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta`
--

CREATE TABLE `peserta` (
  `id_peserta` int(11) NOT NULL,
  `nim` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `program_studi` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `no_hp` char(13) NOT NULL,
  `kelompok` int(5) NOT NULL,
  `kabupaten` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `desa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `peserta`
--

INSERT INTO `peserta` (`id_peserta`, `nim`, `nama`, `program_studi`, `jenis_kelamin`, `no_hp`, `kelompok`, `kabupaten`, `kecamatan`, `desa`) VALUES
(3, 121140082, 'Ahmad Fathur Rohman', 'Teknik Informatika', 'Laki-laki', '081271400745', 200, 'Lampung Timur', 'Labuhan Maringgai', 'Sri Minosari'),
(4, 121140093, 'Muhammad Alfarizi', 'Teknik Informatika', 'Laki-laki', '082122939583', 50, 'Lampung Tengah', 'Gunung Sugih', 'Komering Putih'),
(5, 1211400117, 'Pannes Diba Sabila', 'Teknik Informatika', 'Perempuan', '085609930838', 113, 'Lampung Tengah', 'Seputih Raman', 'Rejo Basuki'),
(6, 1211400092, 'Aisa Setia Primastuti', 'Teknik Informatika', 'Perempuan', '085379563686', 123, 'Lampung Tengah', 'Seputih Raman', 'Rukti Indah'),
(7, 121370050, 'Muhammad Nanang Prayoga', 'Teknik Pertambangan', 'Laki-laki', '083168634404', 120, 'Lampung Tengah', 'Seputih Raman', 'Rama Dewa'),
(8, 121370078, 'Tiara Anisa Yolanda', 'Teknik Pertambangan', 'Perempuan', '085273042639', 67, 'Lampung Tengah', 'Kota Gajah', 'Sumber Rejo'),
(9, 121310026, 'Muhammad Firdaus Khadavy', 'Teknik Biosistem', 'Laki-laki', '081252229476', 200, 'Lampung Timur', 'Labuhan Maringgai', 'Sri Minosari');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id_peserta`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id_peserta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
