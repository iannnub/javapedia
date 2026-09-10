-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jan 2025 pada 17.03
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `java`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` enum('admin','','','') NOT NULL,
  `nama` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `level`, `nama`) VALUES
(1, 'admin1', 'admin1', 'admin', 'admin1'),
(2, 'admin2', 'admin2', 'admin', 'admin2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_ml`
--

CREATE TABLE `data_ml` (
  `id_ml` int(11) NOT NULL,
  `login_ml` varchar(200) NOT NULL,
  `userid_ml` varchar(200) NOT NULL,
  `email_ml` varchar(222) NOT NULL,
  `pw_ml` varchar(200) NOT NULL,
  `req_hero` varchar(200) NOT NULL,
  `note_ml` varchar(200) NOT NULL,
  `foto_ml` varchar(200) NOT NULL,
  `paket_ml` varchar(200) NOT NULL,
  `status` enum('antrian','proses','selesai','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_ml`
--

INSERT INTO `data_ml` (`id_ml`, `login_ml`, `userid_ml`, `email_ml`, `pw_ml`, `req_hero`, `note_ml`, `foto_ml`, `paket_ml`, `status`) VALUES
(3, 'Facebook', '122321xxx(lynxx)', '085xxxxx', '1234556778', 'hyper rafaela', 'kalo cepet dapet bonus', 'Gambar WhatsApp 2025-01-06 pukul 09.28.48_bbbc3416.jpg', 'Rank Legend V - Mythic Glory = IDR 1.110.000', 'selesai'),
(5, 'Moonton (Rekomendasi)', 'ssd', 'dsads@gmail.com', 'dsdsd', 'dsdsdsd', 'dsd', 'Gambar WhatsApp 2025-01-08 pukul 11.33.52_1eb9603b.jpg', 'Legend V - Mythic Immortal = IDR 2.350.000', 'antrian'),
(6, 'Moonton (Rekomendasi)', '1111', '1111@gmail.com', '1111', '11111', '11111', 'Gambar WhatsApp 2025-01-08 pukul 11.33.52_1eb9603b.jpg', 'Legend V - Mythic Immortal = IDR 2.350.000', 'antrian');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pubg`
--

CREATE TABLE `data_pubg` (
  `id_pubg` int(11) NOT NULL,
  `login_pubg` varchar(200) NOT NULL,
  `email_pubg` varchar(200) NOT NULL,
  `userid_pubg` varchar(200) NOT NULL,
  `pw_pubg` varchar(200) NOT NULL,
  `foto_pubg` varchar(200) NOT NULL,
  `paket_pubg` varchar(200) NOT NULL,
  `status` enum('antrian','proses','selesai','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_pubg`
--

INSERT INTO `data_pubg` (`id_pubg`, `login_pubg`, `email_pubg`, `userid_pubg`, `pw_pubg`, `foto_pubg`, `paket_pubg`, `status`) VALUES
(11, 'VK (Rekomendasi)', '081xxxxxxxx', '2131y4274724(icikiwir)', '123123123', 'Gambar WhatsApp 2025-01-06 pukul 09.28.48_bbbc3416.jpg', 'Tier Crown V - ACE I = IDR 80.000', 'selesai'),
(12, 'Nomor telepon (Rekomendasi)', '081230484625', '54321123(someone)', 'someone321', 'Gambar WhatsApp 2025-01-08 pukul 11.33.52_1eb9603b.jpg', 'Tier Crown V - ACE I = IDR 80.000', 'antrian'),
(13, 'Nomor telepon (Rekomendasi)', 'bdsbadjkbask@gmail.com', '212121(galinjkbjskd)', 'fddgfdg', 'Gambar WhatsApp 2025-01-08 pukul 11.33.52_1eb9603b.jpg', 'Tier Platinum II - ACE I = IDR 120.000', 'antrian'),
(14, 'Nomor telepon (Rekomendasi)', '333', '333', '333', 'Gambar WhatsApp 2025-01-08 pukul 11.33.52_1eb9603b.jpg', 'Tier Ace 1 - Ace Dominator 12 = IDR 225.000', 'antrian');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket_pubg`
--

CREATE TABLE `paket_pubg` (
  `id_paketpubg` int(11) NOT NULL,
  `paket_pubg` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `paket_pubg`
--

INSERT INTO `paket_pubg` (`id_paketpubg`, `paket_pubg`) VALUES
(1, 'Tier_Platinum_II_To_Ace_I');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `data_ml`
--
ALTER TABLE `data_ml`
  ADD PRIMARY KEY (`id_ml`);

--
-- Indeks untuk tabel `data_pubg`
--
ALTER TABLE `data_pubg`
  ADD PRIMARY KEY (`id_pubg`);

--
-- Indeks untuk tabel `paket_pubg`
--
ALTER TABLE `paket_pubg`
  ADD PRIMARY KEY (`id_paketpubg`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `data_ml`
--
ALTER TABLE `data_ml`
  MODIFY `id_ml` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `data_pubg`
--
ALTER TABLE `data_pubg`
  MODIFY `id_pubg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `paket_pubg`
--
ALTER TABLE `paket_pubg`
  MODIFY `id_paketpubg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
