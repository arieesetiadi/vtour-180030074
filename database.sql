-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Sep 2022 pada 15.30
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pura_griya_sakti`
--
CREATE DATABASE IF NOT EXISTS `pura_griya_sakti` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `pura_griya_sakti`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `galleries`
--

CREATE TABLE `galleries` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image_name` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `image_name`, `created_at`, `updated_at`) VALUES
(8, 'Pawedan', '631eca3998024-pawedan.jpeg', '2022-09-12 07:57:13', '2022-09-13 14:41:31'),
(9, 'Gendong Ida Bhatara', '631eca59ec2d2-gendongidabhatara.jpeg', '2022-09-12 07:57:45', '2022-09-13 14:41:20'),
(10, 'Padmasana', '631ecd5b9f1d4-padmasana.jpeg', '2022-09-12 08:10:35', '2022-09-13 14:40:51'),
(11, 'Pelinggih Teteken', '631ecd708827d-pelinggihteteken.jpeg', '2022-09-12 08:10:56', '2022-09-13 14:40:36'),
(12, 'Ratu Gede', '631ecd79cf27c-ratugede.jpeg', '2022-09-12 08:11:05', '2022-09-13 14:40:23'),
(13, 'Pengaruman', '631ecd8435ee0-pengaruman.jpeg', '2022-09-12 08:11:16', '2022-09-13 14:40:15'),
(14, 'Pesanekan Jro Mangku', '631ecd8d12cbe-pesanekanjromangku.jpeg', '2022-09-12 08:11:25', '2022-09-13 14:40:06'),
(15, 'Ratu Gede Macan', '631ecd9b97370-ratugedemacan.jpeg', '2022-09-12 08:11:39', '2022-09-13 14:37:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `email`, `phone`, `password`) VALUES
(1, 'riohermawan', 'Rio Hermawan', 'riohermawan47@gmail.com', '081238529892', 'riohermawan'),
(2, 'admin', 'Administrator', 'admin@gmail.com', '1234', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
