-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Jun 2021 pada 06.31
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_spkskripsi2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `level`) VALUES
(1, 'user', 'user', 'user'),
(2, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hitung`
--

CREATE TABLE `hitung` (
  `id_hitung` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sub_kriteria`
--

CREATE TABLE `sub_kriteria` (
  `id_sub` int(11) NOT NULL,
  `skala_sub` varchar(20) NOT NULL,
  `nilai_bobotsub` float NOT NULL,
  `keterangan_sub` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sub_kriteria`
--

INSERT INTO `sub_kriteria` (`id_sub`, `skala_sub`, `nilai_bobotsub`, `keterangan_sub`) VALUES
(1, '90-100', 5, 'Sangat Baik'),
(2, '80-89', 4, 'Baik'),
(3, '70-79', 3, 'Cukup'),
(4, '60-69', 2, 'Kurang'),
(5, '50-59', 1, 'Sangat Kurang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_hasil`
--

CREATE TABLE `tabel_hasil` (
  `id_hasil` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nilai` double NOT NULL,
  `tanggal` timestamp NULL DEFAULT current_timestamp(),
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_hasil`
--

INSERT INTO `tabel_hasil` (`id_hasil`, `nama`, `nilai`, `tanggal`, `status`) VALUES
(311, 'Darrel Reswaranto', 0.46570072206363, '2021-06-19 23:30:04', 'rekomendasi'),
(312, 'Cantona Juvendwi Y.', 0.46252072842361, '2021-06-19 23:30:04', 'rekomendasi'),
(313, 'Ahmad Reihan D.', 0.46069688886939, '2021-06-19 23:30:04', 'tidak rekomendasi'),
(314, 'M. Fatkhur Rosi', 0.41845552459881, '2021-06-19 23:30:04', 'tidak rekomendasi'),
(315, 'Devano Diaz A.', 0.41582456003937, '2021-06-19 23:30:04', 'tidak rekomendasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_kriteria`
--

CREATE TABLE `tabel_kriteria` (
  `id_kriteria` int(10) NOT NULL,
  `kriteria` text NOT NULL,
  `kode` varchar(5) NOT NULL,
  `type` varchar(10) NOT NULL,
  `bobot` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_kriteria`
--

INSERT INTO `tabel_kriteria` (`id_kriteria`, `kriteria`, `kode`, `type`, `bobot`) VALUES
(1, 'Shooting', 'K1', 'benefit', 0.09),
(2, 'Dribbling', 'K2', 'benefit', 0.09),
(3, 'Passing', 'K3', 'benefit', 0.09),
(4, 'Ball Control', 'K4', 'benefit', 0.07),
(5, 'Heading', 'K5', 'benefit', 0.07),
(6, 'Positioning', 'K6', 'benefit', 0.04),
(7, 'Ball Positioning', 'K7', 'benefit', 0.04),
(8, 'Transition Movement', 'K8', 'benefit', 0.04),
(9, 'Speed', 'K9', 'benefit', 0.07),
(10, 'Coordination', 'K10', 'benefit', 0.03),
(11, 'Agility', 'K11', 'benefit', 0.04),
(12, 'Confidence', 'K12', 'benefit', 0.03),
(13, 'Concentration', 'K13', 'benefit', 0.03),
(14, 'Fairplay', 'K14', 'benefit', 0.12),
(15, 'Attitude', 'K15', 'benefit', 0.15);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_nilai`
--

CREATE TABLE `tabel_nilai` (
  `id_nilai` int(11) NOT NULL,
  `id_kriteria` int(10) NOT NULL,
  `id_siswa` int(100) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_nilai`
--

INSERT INTO `tabel_nilai` (`id_nilai`, `id_kriteria`, `id_siswa`, `nilai`) VALUES
(1, 1, 1, 4),
(2, 2, 1, 4),
(3, 3, 1, 4),
(4, 4, 1, 5),
(5, 5, 1, 3),
(6, 6, 1, 4),
(7, 7, 1, 4),
(8, 8, 1, 4),
(9, 9, 1, 5),
(10, 10, 1, 4),
(11, 11, 1, 4),
(12, 12, 1, 4),
(13, 13, 1, 4),
(14, 14, 1, 5),
(15, 15, 1, 5),
(16, 1, 2, 3),
(17, 2, 2, 4),
(18, 3, 2, 4),
(19, 4, 2, 4),
(20, 5, 2, 4),
(21, 6, 2, 4),
(22, 7, 2, 4),
(23, 8, 2, 3),
(24, 9, 2, 4),
(25, 10, 2, 5),
(26, 11, 2, 4),
(27, 12, 2, 4),
(28, 13, 2, 5),
(29, 14, 2, 4),
(30, 15, 2, 4),
(31, 1, 3, 4),
(32, 2, 3, 5),
(33, 3, 3, 4),
(34, 4, 3, 4),
(35, 5, 3, 4),
(36, 6, 3, 4),
(37, 7, 3, 4),
(38, 8, 3, 4),
(39, 9, 3, 4),
(40, 10, 3, 4),
(41, 11, 3, 4),
(42, 12, 3, 5),
(43, 13, 3, 4),
(44, 14, 3, 5),
(45, 15, 3, 5),
(46, 1, 4, 4),
(47, 2, 4, 4),
(48, 3, 4, 4),
(49, 4, 4, 3),
(50, 5, 4, 4),
(51, 6, 4, 5),
(52, 7, 4, 4),
(53, 8, 4, 4),
(54, 9, 4, 3),
(55, 10, 4, 5),
(56, 11, 4, 4),
(57, 12, 4, 4),
(58, 13, 4, 3),
(59, 14, 4, 4),
(60, 15, 4, 4),
(61, 1, 5, 4),
(62, 2, 5, 5),
(63, 3, 5, 4),
(64, 4, 5, 4),
(65, 5, 5, 4),
(66, 6, 5, 4),
(67, 7, 5, 4),
(68, 8, 5, 4),
(69, 9, 5, 4),
(70, 10, 5, 4),
(71, 11, 5, 4),
(72, 12, 5, 4),
(73, 13, 5, 4),
(74, 14, 5, 5),
(75, 15, 5, 5),
(76, 1, 6, 4),
(77, 2, 6, 4),
(78, 3, 6, 5),
(79, 4, 6, 4),
(80, 5, 6, 3),
(81, 6, 6, 4),
(82, 7, 6, 4),
(83, 8, 6, 4),
(84, 9, 6, 5),
(85, 10, 6, 4),
(86, 11, 6, 4),
(87, 12, 6, 5),
(88, 13, 6, 5),
(89, 14, 6, 4),
(90, 15, 6, 5),
(91, 1, 7, 3),
(92, 2, 7, 3),
(93, 3, 7, 4),
(94, 4, 7, 5),
(95, 5, 7, 3),
(96, 6, 7, 4),
(97, 7, 7, 4),
(98, 8, 7, 3),
(99, 9, 7, 4),
(100, 10, 7, 4),
(101, 11, 7, 4),
(102, 12, 7, 4),
(103, 13, 7, 4),
(104, 14, 7, 4),
(105, 15, 7, 4),
(106, 1, 8, 4),
(107, 2, 8, 5),
(108, 3, 8, 3),
(109, 4, 8, 4),
(110, 5, 8, 4),
(111, 6, 8, 4),
(112, 7, 8, 4),
(113, 8, 8, 4),
(114, 9, 8, 4),
(115, 10, 8, 4),
(116, 11, 8, 4),
(117, 12, 8, 4),
(118, 13, 8, 5),
(119, 14, 8, 4),
(120, 15, 8, 5),
(121, 1, 9, 3),
(122, 2, 9, 3),
(123, 3, 9, 4),
(124, 4, 9, 4),
(125, 5, 9, 4),
(126, 6, 9, 4),
(127, 7, 9, 5),
(128, 8, 9, 5),
(129, 9, 9, 5),
(130, 10, 9, 4),
(131, 11, 9, 4),
(132, 12, 9, 4),
(133, 13, 9, 4),
(134, 14, 9, 4),
(135, 15, 9, 4),
(136, 1, 10, 4),
(137, 2, 10, 4),
(138, 3, 10, 4),
(139, 4, 10, 3),
(140, 5, 10, 5),
(141, 6, 10, 4),
(142, 7, 10, 4),
(143, 8, 10, 4),
(144, 9, 10, 4),
(145, 10, 10, 4),
(146, 11, 10, 4),
(147, 12, 10, 4),
(148, 13, 10, 5),
(149, 14, 10, 4),
(150, 15, 10, 5),
(151, 1, 11, 0),
(152, 2, 11, 5),
(153, 3, 11, 0),
(154, 4, 11, 0),
(155, 5, 11, 1),
(156, 6, 11, 5),
(157, 7, 11, 5),
(158, 8, 11, 5),
(159, 9, 11, 5),
(160, 10, 11, 5),
(161, 11, 11, 5),
(162, 12, 11, 5),
(163, 13, 11, 5),
(164, 14, 11, 5),
(165, 15, 11, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_siswa`
--

CREATE TABLE `tabel_siswa` (
  `id_siswa` int(100) NOT NULL,
  `nama` text NOT NULL,
  `shooting` varchar(30) NOT NULL,
  `dribbling` varchar(30) NOT NULL,
  `passing` varchar(30) NOT NULL,
  `ball_control` varchar(30) NOT NULL,
  `heading` varchar(30) NOT NULL,
  `positioning` varchar(30) NOT NULL,
  `ball_position` varchar(30) NOT NULL,
  `transition_movement` varchar(30) NOT NULL,
  `speed` varchar(30) NOT NULL,
  `coordination` varchar(30) NOT NULL,
  `agility` varchar(30) NOT NULL,
  `confidence` varchar(30) NOT NULL,
  `concentration` varchar(30) NOT NULL,
  `fairplay` varchar(30) NOT NULL,
  `attitude` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_siswa`
--

INSERT INTO `tabel_siswa` (`id_siswa`, `nama`, `shooting`, `dribbling`, `passing`, `ball_control`, `heading`, `positioning`, `ball_position`, `transition_movement`, `speed`, `coordination`, `agility`, `confidence`, `concentration`, `fairplay`, `attitude`) VALUES
(1, 'Ahmad Reihan D.', '87', '86', '82', '92', '78', '80', '85', '82', '95', '87', '86', '84', '88', '91', '90'),
(2, 'M. Fatkhur Rosi', '78', '85', '88', '87', '80', '89', '83', '78', '86', '93', '84', '85', '92', '85', '89'),
(3, 'Darrel Reswaranto', '82', '90', '87', '87', '85', '83', '85', '85', '80', '80', '80', '90', '85', '90', '90'),
(4, 'Devano Diaz A.', '83', '82', '84', '79', '80', '92', '88', '82', '75', '90', '86', '84', '79', '85', '88'),
(5, 'Cantona Juvendwi Y.', '81', '92', '87', '84', '85', '85', '85', '89', '86', '82', '80', '85', '89', '92', '90'),
(6, 'Cessa Gilang R.', '83', '80', '90', '85', '75', '87', '85', '85', '93', '84', '84', '92', '90', '87', '92'),
(7, 'Moch Farel F.', '75', '78', '85', '90', '76', '85', '87', '79', '80', '88', '83', '85', '88', '86', '89'),
(8, 'Alvino Hesa P.', '84', '90', '79', '84', '80', '87', '84', '85', '80', '84', '84', '82', '91', '89', '92'),
(9, 'Kristian Yoga P.', '75', '78', '82', '85', '85', '86', '91', '93', '93', '83', '80', '83', '85', '89', '89'),
(10, 'Rizky Febriansyah', '80', '85', '87', '78', '93', '86', '88', '84', '80', '85', '87', '83', '91', '85', '90');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `hitung`
--
ALTER TABLE `hitung`
  ADD PRIMARY KEY (`id_hitung`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indeks untuk tabel `sub_kriteria`
--
ALTER TABLE `sub_kriteria`
  ADD PRIMARY KEY (`id_sub`);

--
-- Indeks untuk tabel `tabel_hasil`
--
ALTER TABLE `tabel_hasil`
  ADD PRIMARY KEY (`id_hasil`);

--
-- Indeks untuk tabel `tabel_kriteria`
--
ALTER TABLE `tabel_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indeks untuk tabel `tabel_nilai`
--
ALTER TABLE `tabel_nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `id_kriteria` (`id_kriteria`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indeks untuk tabel `tabel_siswa`
--
ALTER TABLE `tabel_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `hitung`
--
ALTER TABLE `hitung`
  MODIFY `id_hitung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=318;

--
-- AUTO_INCREMENT untuk tabel `sub_kriteria`
--
ALTER TABLE `sub_kriteria`
  MODIFY `id_sub` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tabel_hasil`
--
ALTER TABLE `tabel_hasil`
  MODIFY `id_hasil` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=316;

--
-- AUTO_INCREMENT untuk tabel `tabel_kriteria`
--
ALTER TABLE `tabel_kriteria`
  MODIFY `id_kriteria` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `tabel_nilai`
--
ALTER TABLE `tabel_nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- AUTO_INCREMENT untuk tabel `tabel_siswa`
--
ALTER TABLE `tabel_siswa`
  MODIFY `id_siswa` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `hitung`
--
ALTER TABLE `hitung`
  ADD CONSTRAINT `hitung_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `tabel_siswa` (`id_siswa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
