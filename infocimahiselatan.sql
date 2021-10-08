-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Okt 2021 pada 19.53
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unjani`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `infocimahiselatan`
--

CREATE TABLE `infocimahiselatan` (
  `id` int(11) NOT NULL,
  `judul_berita` varchar(555) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `isi_berita` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `infocimahiselatan`
--

INSERT INTO `infocimahiselatan` (`id`, `judul_berita`, `gambar`, `isi_berita`) VALUES
(5, 'a', 'IMG_0418.JPG', 'jagoan'),
(7, 'jaka', 'IMG_0406.JPG', 'jagoan'),
(8, 'u', 'IMG_0404.JPG', 'aaa'),
(18, 'sembroono', 'IMG_9495.JPG', 'jagoan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `infocimahiselatan`
--
ALTER TABLE `infocimahiselatan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `infocimahiselatan`
--
ALTER TABLE `infocimahiselatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
