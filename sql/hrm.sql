-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 29 Nov 2018 pada 23.29
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cuti`
--

CREATE TABLE `cuti` (
  `id` int(11) NOT NULL,
  `nik` int(8) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tglawal` varchar(10) NOT NULL,
  `tglakhir` varchar(10) NOT NULL,
  `alasan` varchar(130) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cuti`
--

INSERT INTO `cuti` (`id`, `nik`, `nama`, `tglawal`, `tglakhir`, `alasan`) VALUES
(1, 1, 'Karyawan 1', '2018-03-06', '2018-04-03', 'liburan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(8) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `ttl` date NOT NULL,
  `telp` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penggajian`
--

CREATE TABLE `penggajian` (
  `id` int(8) NOT NULL,
  `nik` int(8) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `total` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penggajian`
--

INSERT INTO `penggajian` (`id`, `nik`, `tanggal_transaksi`, `total`, `status`) VALUES
(4, 90153060, '2018-03-25', '4100000', 'belum terbayar'),
(5, 92170027, '2018-03-20', '3800000', 'terbayar'),
(6, 91150002, '2018-03-21', '2100000', 'terbayar'),
(7, 90153060, '2018-02-25', '4100000', 'belum terbayar'),
(9, 91150002, '2018-03-25', '1500000', 'belum terbayar'),
(10, 98150002, '2018-04-23', '120000', 'terbayar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perjalanan`
--

CREATE TABLE `perjalanan` (
  `id` int(11) NOT NULL,
  `nik` varchar(8) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tujuan` varchar(100) NOT NULL,
  `nodin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `perjalanan`
--

INSERT INTO `perjalanan` (`id`, `nik`, `nama`, `tujuan`, `nodin`) VALUES
(1, '1', 'Karyawan 1', 'TELKOM AKSES LEMBONG BANDUNG', 'ND/KWA-2018/01'),
(2, '2', 'Karyawan 2', 'Telkom Akses Jalan S. Parman Jakarta No.1', 'ND/JKT-2018/02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekruitment`
--

CREATE TABLE `rekruitment` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `ttl` varchar(10) NOT NULL,
  `lulusan` varchar(30) NOT NULL,
  `telp` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(8) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(3, '89150021', 'a'),
(4, '123', 'iam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cuti`
--
ALTER TABLE `cuti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penggajian`
--
ALTER TABLE `penggajian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perjalanan`
--
ALTER TABLE `perjalanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rekruitment`
--
ALTER TABLE `rekruitment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cuti`
--
ALTER TABLE `cuti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `penggajian`
--
ALTER TABLE `penggajian`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `perjalanan`
--
ALTER TABLE `perjalanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rekruitment`
--
ALTER TABLE `rekruitment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
