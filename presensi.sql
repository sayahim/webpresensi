-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 03 Jan 2019 pada 07.59
-- Versi Server: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `presensi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `izin`
--

CREATE TABLE IF NOT EXISTS `izin` (
  `id_izin` int(11) NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `tgl_mulai` varchar(50) NOT NULL,
  `tgl_akhir` varchar(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `gambar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `izin`
--

INSERT INTO `izin` (`id_izin`, `id_karyawan`, `tgl_mulai`, `tgl_akhir`, `keterangan`, `jenis`, `gambar`) VALUES
(44000001, 11000004, '30-12-2018', '31-12-2018', 'Mau ketemu dia', 'Cuti', '44000001.jpg'),
(44000002, 11000004, '10-1-2019', '12-1-2019', 'Dinas diluar', 'Cuti', '44000002.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE IF NOT EXISTS `karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `no_tlpn` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tempat_tgl_lahir` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama`, `username`, `password`, `no_tlpn`, `jenis_kelamin`, `tempat_tgl_lahir`, `alamat`) VALUES
(11000004, 'Khan', 'karyawan', 'pass', '0812131415', 'pria', 'Sleman, 12 Des 1996', 'Yogyakarta'),
(11000005, 'Saya', 'karya', 'pass', '08123', 'Pria', 'Sleman, 11 November 2011', 'Sleman');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `level` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama`, `username`, `password`, `level`) VALUES
(22000001, 'upmin super ', 'bos', 'pass', 'super admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `presensi`
--

CREATE TABLE IF NOT EXISTS `presensi` (
  `id_presensi` int(11) NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `tanggal` varchar(10) NOT NULL,
  `waktu` time NOT NULL,
  `lokasi` varchar(200) NOT NULL,
  `latitude` varchar(30) NOT NULL,
  `longtitude` varchar(30) NOT NULL,
  `jenis_presensi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `presensi`
--

INSERT INTO `presensi` (`id_presensi`, `id_karyawan`, `tanggal`, `waktu`, `lokasi`, `latitude`, `longtitude`, `jenis_presensi`) VALUES
(33000003, 11000004, '29-12-2018', '22:55:00', 'Indonesia', '-7.75661548', '110.4070538', 'Berangkat'),
(33000004, 11000004, '29-12-2018', '22:55:00', 'Indonesia', '-7.75661548', '110.4070538', 'Pulang'),
(33000005, 11000004, '30-12-2018', '24:27:00', 'Papua', '-7.75705502', '110.4078132', 'Berangkat'),
(33000006, 11000004, '30-12-2018', '13:56:00', 'Solo', '0.0', '0.0', 'Pulang'),
(33000007, 11000004, '03-01-2019', '13:44:00', 'Akakom', '0.0', '0.0', 'Berangkat'),
(33000008, 11000004, '03-01-2019', '13:47:00', 'Akakom', '0.0', '0.0', 'Pulang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `izin`
--
ALTER TABLE `izin`
 ADD PRIMARY KEY (`id_izin`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
 ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
 ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `presensi`
--
ALTER TABLE `presensi`
 ADD PRIMARY KEY (`id_presensi`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
