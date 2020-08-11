-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Agu 2020 pada 11.39
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_johan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `achievement`
--

CREATE TABLE `achievement` (
  `id_achievement` varchar(8) NOT NULL,
  `nama_achievement` varchar(30) NOT NULL,
  `foto_achievement` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id_contact` varchar(8) NOT NULL,
  `nama_contact` varchar(10) NOT NULL,
  `email_contact` varchar(20) NOT NULL,
  `subject_contact` varchar(30) NOT NULL,
  `message_contact` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gear`
--

CREATE TABLE `gear` (
  `id_gear` varchar(8) NOT NULL,
  `nama_gear` varchar(10) NOT NULL,
  `foto_gear` varchar(200) NOT NULL,
  `link_gear` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `photo`
--

CREATE TABLE `photo` (
  `id_photo` varchar(8) NOT NULL,
  `kategori_photo` varchar(10) NOT NULL,
  `link_photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `photo`
--

INSERT INTO `photo` (`id_photo`, `kategori_photo`, `link_photo`) VALUES
('PO0001', 'portrait', 'https://mir-s3-cdn-cf.behance.net/project_modules/1400_opt_1/d8cd9399010117.5ee92b1b0f959.jpg'),
('PO0002', 'portrait', 'https://mir-s3-cdn-cf.behance.net/project_modules/disp/e7cda999486865.5ef3b8a904492.jpg'),
('PO0003', 'travel', 'https://mir-s3-cdn-cf.behance.net/project_modules/disp/d41f4a99486865.5ef3be1375dfa.jpg'),
('PO0004', 'portrait', 'https://mir-s3-cdn-cf.behance.net/project_modules/disp/4b321599486865.5ef3be14f03d0.jpg'),
('PO0005', 'portrait', 'https://mir-s3-cdn-cf.behance.net/project_modules/disp/be5e8399486865.5ef3b4fa925e5.jpg'),
('PO0006', 'portrait', 'https://mir-s3-cdn-cf.behance.net/project_modules/disp/9342b899486865.5ef3b4f8f0c5b.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `video`
--

CREATE TABLE `video` (
  `id_video` varchar(8) NOT NULL,
  `nama_video` varchar(70) NOT NULL,
  `link_video` varchar(200) NOT NULL,
  `kategori_video` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `video`
--

INSERT INTO `video` (`id_video`, `nama_video`, `link_video`, `kategori_video`) VALUES
('V0001', 'Choices', 'http://i.ytimg.com/vi/-QgU4u9SJzI/maxresdefault.jpg', 'shortmovie');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `achievement`
--
ALTER TABLE `achievement`
  ADD PRIMARY KEY (`id_achievement`);

--
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indeks untuk tabel `gear`
--
ALTER TABLE `gear`
  ADD PRIMARY KEY (`id_gear`);

--
-- Indeks untuk tabel `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id_photo`);

--
-- Indeks untuk tabel `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
