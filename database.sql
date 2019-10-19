-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2019 at 02:50 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_user` int(10) NOT NULL,
  `username` varchar(80) NOT NULL,
  `password` varchar(300) NOT NULL,
  `hak` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_user`, `username`, `password`, `hak`) VALUES
(1, 'admin', 'root', 'Admin'),
(2, 'user', 'user', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `nip` varchar(20) NOT NULL,
  `nama` varchar(80) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `tempat_lahir` varchar(60) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `gambar` varchar(130) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`nip`, `nama`, `jenis_kelamin`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `gambar`) VALUES
('1955060820191939', 'Tim Berners Lee', 'laki-laki', 'United Kingdom', 'London', '1955-06-08', 'tim-berners.jpg'),
('19551028201931', 'Bill Gates', 'laki-laki', 'Amerika Serikat', 'Seattle.Washington', '1955-10-28', 'bill-gates.jpg'),
('1968070520191936', 'Susan Wojcicki', 'perempuan', 'Amerika Serikat', 'Amerika Serikat', '1968-07-05', 'susan-wojcicki.jpg'),
('1969122820191933', 'Linus Torvalds', 'laki-laki', 'Amerika Serikat', 'Finlandia', '1969-12-28', 'linus-torvalds.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `kode_jurusan` int(10) NOT NULL,
  `nama_jurusan` varchar(80) NOT NULL,
  `deskripsi` varchar(600) NOT NULL,
  `icon` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`kode_jurusan`, `nama_jurusan`, `deskripsi`, `icon`) VALUES
(1, 'Rekayasa Perangkat Lunak', 'Lebih dikenal software engineering,dimana melahirkan calon developer muda.', 'fa fa-laptop'),
(12, 'Bengkel', 'Sebuah jurusan dimana menghasilkan calon-calon mekanik\r\n', 'fa fa-wrench'),
(14, 'DKV', 'DKV sendiri bakalan mencetak siswa yang mampu menguasai audio video ', 'fa fa-camera');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `kode_mapel` int(10) NOT NULL,
  `mapel` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`kode_mapel`, `mapel`) VALUES
(1, 'Pemrograman Web'),
(2, 'Basis Data'),
(8, 'Matematika');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `kode_penilaian` int(10) NOT NULL,
  `nis` int(10) NOT NULL,
  `kode_mapel` int(10) NOT NULL,
  `nilai` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`kode_penilaian`, `nis`, `kode_mapel`, `nilai`) VALUES
(8, 13543, 1, 90),
(12, 13522, 2, 95);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nis` int(10) NOT NULL,
  `nama` varchar(80) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `tempat_lahir` varchar(60) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `kode_jurusan` int(10) NOT NULL,
  `gambar` varchar(130) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `kelas`, `kode_jurusan`, `gambar`) VALUES
(13518, 'Bryan Bintang K.S', 'laki-laki', 'Sampit', '2002-07-29', 'Jl.Pembina', '12', 1, 'bryan.jpg'),
(13519, 'Dendy Handoko', 'laki-laki', 'Sampit', '2002-03-23', 'Jl.Bukit Raya', '12', 1, 'dendy.jpg'),
(13522, 'Febrian Y.H', 'laki-laki', 'Sampit', '2002-02-17', 'Baamang Hulu', '12', 1, 'febrian.jpg'),
(13530, 'Luthfi Alfuadi', 'laki-laki', 'Kampar', '2002-04-05', 'Wengga Metropolitan', '12', 1, 'luthfi.jpg'),
(13534, 'Hijrianur Mustafa', 'laki-laki', 'Sampit', '2002-03-15', 'Jl.C.Mihing', '12', 1, 'mustafa.JPG'),
(13539, 'Putra Nugraha', 'laki-laki', 'Sampit', '2002-05-01', 'Jl.Tidar', '12', 1, 'putra.jpg'),
(13540, 'Reka Gilang Syahputra', 'laki-laki', 'Cempaga Mulia', '2002-07-16', 'Jl.Cempaga', '12', 1, 'reka.JPG'),
(13543, 'Rogas Pandinoan', 'perempuan', 'Palangkaraya', '2001-08-26', 'Jl.Tidar', '12', 1, 'rogas.JPG'),
(13548, 'Usup', 'laki-laki', 'Pelangsian', '2001-04-11', 'Jl.H.M Arsyad', '12', 1, 'usup.jpg'),
(13549, 'Rahmad Abadi', 'laki-laki', 'Sampit', '2002-05-22', 'Jl.Muchran Ali', '12', 1, 'amat.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`kode_jurusan`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`kode_mapel`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`kode_penilaian`),
  ADD KEY `nis` (`nis`),
  ADD KEY `kode_mapel` (`kode_mapel`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`),
  ADD KEY `jurusan` (`kode_jurusan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `kode_jurusan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `kode_mapel` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `kode_penilaian` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`),
  ADD CONSTRAINT `nilai_ibfk_2` FOREIGN KEY (`kode_mapel`) REFERENCES `mapel` (`kode_mapel`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
