-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2019 at 05:15 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbeskul`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar`
--

CREATE TABLE `daftar` (
  `id` int(9) NOT NULL,
  `nama_siswa` varchar(80) NOT NULL,
  `nip` varchar(80) NOT NULL,
  `angkatan` varchar(80) NOT NULL,
  `kelas` varchar(80) NOT NULL,
  `eskul_pilihan` varchar(80) NOT NULL,
  `nilai` varchar(80) NOT NULL,
  `status` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar`
--

INSERT INTO `daftar` (`id`, `nama_siswa`, `nip`, `angkatan`, `kelas`, `eskul_pilihan`, `nilai`, `status`) VALUES
(1, 'Fajar', '55201688744', '2019', '7A', 'Pramuka', '85', 'Selesai'),
(2, 'Fajar', '55201688744', '2019', '7A', 'Paskibra', '85', 'Selesai'),
(16, 'waw', '4412', '2014', '9B', 'Pramuka', '-', 'belum'),
(17, 'waw', '4412', '2012', '9B', 'futsal', '-', 'belum'),
(18, 'asdaw', '12345', '2014', '9E', 'Paskibra', '-', 'belum');

-- --------------------------------------------------------

--
-- Table structure for table `eskul`
--

CREATE TABLE `eskul` (
  `id` int(9) NOT NULL,
  `nama_eskul` varchar(80) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eskul`
--

INSERT INTO `eskul` (`id`, `nama_eskul`, `deskripsi`, `gambar`) VALUES
(1, 'Pramuka', 'Kegiatan Kepramukaan biasanya dilakukan di alam terbuka dimana terdapat aktivitas yang menyenangkan, menarik, sehat, terarah, sesuai dengan prinsip dasar dan metode kepramukaan.\r\nMenurut Joko Mursitho, pengertian Pramuka adalah proses pendidikan yang dilakukan di luar lingkungan sekolah dan di luar lingkungan keluarga dalam bentuk kegiatan yang menarik, menyenangkan, sehat, teratur, terarah, dan praktis yang dilakukan di alam terbuka dengan prinsip dasar dan metode kepramukaan yang bertujuan untuk membentuk watak peserta didik.', 'http://localhost/eskul//assets/uploads/11822514_1045199118826444_4435273451886404805_n3.jpg'),
(2, 'Paskibra', '', ''),
(3, 'basket', '', ''),
(4, 'futsal', '', ''),
(5, 'Badminton', 'huehuehue', '');

-- --------------------------------------------------------

--
-- Table structure for table `junk`
--

CREATE TABLE `junk` (
  `id` int(9) NOT NULL,
  `nip` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `junk`
--

INSERT INTO `junk` (`id`, `nip`) VALUES
(9, '5214'),
(10, '5214'),
(11, '5214'),
(12, '5214'),
(13, '5214'),
(14, '4412'),
(15, '4412'),
(16, '4412'),
(17, '55201688744'),
(18, '2122'),
(19, '12345'),
(20, '12345');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(9) NOT NULL,
  `user` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user`, `password`) VALUES
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eskul`
--
ALTER TABLE `eskul`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `junk`
--
ALTER TABLE `junk`
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
-- AUTO_INCREMENT for table `daftar`
--
ALTER TABLE `daftar`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `eskul`
--
ALTER TABLE `eskul`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `junk`
--
ALTER TABLE `junk`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
