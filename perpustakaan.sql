-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Jun 2023 pada 13.26
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
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `books`
--

CREATE TABLE `books` (
  `book_id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `author` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `books`
--

INSERT INTO `books` (`book_id`, `title`, `author`) VALUES
(1, 'Laskar Pelangi', 'Andrea Hirata'),
(2, 'Luka Cita', 'Valerie Patkar'),
(3, 'A+', 'Ananda Putri'),
(4, 'Goodbye Daniel', 'Prekuel Dear Nathan'),
(5, 'Leiden', 'Dwi Nur Rahmawati'),
(6, 'Asmarolaka', 'Arata Kim'),
(7, 'Rezella', 'Nia Widiastuti'),
(8, 'Lu-Gu', 'Mufi Kholoqok'),
(9, 'Hold Me', 'Dewie Sofia'),
(10, 'Dilan 1990', 'Pidi Baiq');

-- --------------------------------------------------------

--
-- Struktur dari tabel `members`
--

CREATE TABLE `members` (
  `member_id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `address` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `members`
--

INSERT INTO `members` (`member_id`, `name`, `address`) VALUES
(1, 'Anggun Adgita', 'Jl.Mawar'),
(2, 'Azalya Callista', 'Jl.Tulip'),
(3, 'Diannita', 'Jl.Melati'),
(4, 'Intan Krisdiana', 'Jl.Anggrek'),
(5, 'Navita Putri', 'Jl.Kamboja'),
(6, 'Salsabila', 'Jl.Lily'),
(7, 'Saputra', 'Jl.Alamanda'),
(8, 'Rifki Putra', 'Jl.Viola');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `peminjaman_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `tgl_pinjam` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`peminjaman_id`, `book_id`, `member_id`, `tgl_pinjam`) VALUES
(1, 1, 1, '2023-03-15'),
(2, 2, 3, '2023-03-17'),
(3, 3, 5, '2023-03-20'),
(4, 4, 7, '2023-03-22'),
(5, 2, 4, '2023-03-25'),
(6, 5, 2, '2023-03-30'),
(7, 6, 1, '2023-04-08'),
(8, 3, 3, '2023-04-15'),
(9, 9, 6, '2023-04-17'),
(10, 7, 5, '2023-04-30');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indeks untuk tabel `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`member_id`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`peminjaman_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
