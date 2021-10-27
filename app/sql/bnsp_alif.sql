-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 03 Sep 2021 pada 02.02
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bnsp_alif`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pendaftaran`
--

CREATE TABLE `data_pendaftaran` (
  `pendaftaran_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `no_pendaftaran` varchar(255) DEFAULT NULL,
  `status_pendaftaran` enum('Diterima','Cadangan','Tidak Diterima','Menunggu') DEFAULT 'Menunggu',
  `pas_foto` varchar(50) DEFAULT NULL,
  `ijazah` varchar(50) DEFAULT NULL,
  `surat_pernyataan` varchar(50) DEFAULT NULL,
  `tgl_pendaftaran` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_pendaftaran`
--

INSERT INTO `data_pendaftaran` (`pendaftaran_id`, `user_id`, `no_pendaftaran`, `status_pendaftaran`, `pas_foto`, `ijazah`, `surat_pernyataan`, `tgl_pendaftaran`) VALUES
(6, 5, 'PSB030921-00', 'Tidak Diterima', 'pas_foto_id-6.jpg', 'ijazah_id-6.pdf', 'surat_pernyataan_id-6.pdf', '2021-09-03 01:29:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_tb`
--

CREATE TABLE `users_tb` (
  `user_id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `nik` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `jenis_kelamin` enum('P','L') DEFAULT 'L',
  `agama` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `no_telepon` varchar(255) DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `nama_ortu` varchar(255) DEFAULT NULL,
  `no_telepon_ortu` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status_user` int(11) DEFAULT 0,
  `role` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users_tb`
--

INSERT INTO `users_tb` (`user_id`, `nama`, `nik`, `email`, `jenis_kelamin`, `agama`, `alamat`, `no_telepon`, `tempat_lahir`, `tgl_lahir`, `nama_ortu`, `no_telepon_ortu`, `password`, `status_user`, `role`) VALUES
(1, 'Mochammad Alif Kurniawan', '173112700650039', 'admin@gmail.com', 'L', 'Islam', 'Jakarta Barat', '0857', 'Jakarta', '2000-09-07', 'Soekarno', '0818', '$2y$10$.vGA1O9wmRjrwAVXD98HNOgsNpDczlqm3Jq7KnEd1rVAGv3Fykk1a', 1, 1),
(5, 'Alya Aulia', '123456781234', 'alya@gmail.com', 'P', 'Islam', 'Jakarta Selatan', '0821', 'Depok', '1999-02-15', 'Yulianti', '0898', '$2y$10$9kH6f2sJptGIR1NJEd.D1OXLXGMAtQB0f6HevyuV4fC1Th8C7kdN2', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_pendaftaran`
--
ALTER TABLE `data_pendaftaran`
  ADD PRIMARY KEY (`pendaftaran_id`),
  ADD KEY `user_fk` (`user_id`);

--
-- Indeks untuk tabel `users_tb`
--
ALTER TABLE `users_tb`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_pendaftaran`
--
ALTER TABLE `data_pendaftaran`
  MODIFY `pendaftaran_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users_tb`
--
ALTER TABLE `users_tb`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data_pendaftaran`
--
ALTER TABLE `data_pendaftaran`
  ADD CONSTRAINT `user_fk` FOREIGN KEY (`user_id`) REFERENCES `users_tb` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
