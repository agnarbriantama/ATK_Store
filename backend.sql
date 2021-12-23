-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2021 at 08:03 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `backend`
--

-- --------------------------------------------------------

--
-- Table structure for table `alat_tulis`
--

CREATE TABLE `alat_tulis` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `deskripsi_barang` varchar(100) NOT NULL,
  `harga_barang` int(11) NOT NULL,
  `gambar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bolpoin`
--

CREATE TABLE `bolpoin` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(128) NOT NULL,
  `deskripsi_barang` varchar(100) NOT NULL,
  `harga_barang` varchar(11) NOT NULL,
  `gambar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(128) NOT NULL,
  `deskripsi_barang` varchar(100) NOT NULL,
  `harga_barang` varchar(11) NOT NULL,
  `gambar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_barang`, `nama_barang`, `deskripsi_barang`, `harga_barang`, `gambar`) VALUES
(1, 'Buku Tulis ', '<p>isi 48 lembar</p>\r\n', '3000', 'E4k-0WPVcAUaaMs.jpg'),
(2, 'Buku Gambar', '<p>kjgddvhaj</p>\r\n', '12000', 'E86h9x7UcAkmHeo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pensil`
--

CREATE TABLE `pensil` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(128) NOT NULL,
  `deskripsi_barang` varchar(100) NOT NULL,
  `harga_barang` varchar(11) NOT NULL,
  `gambar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pensil`
--

INSERT INTO `pensil` (`id_barang`, `nama_barang`, `deskripsi_barang`, `harga_barang`, `gambar`) VALUES
(1, 'Pensil 2B', '<p>0.5 mm</p>\r\n', '6000', 'E86h9x7UcAkmHeo1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pewarna`
--

CREATE TABLE `pewarna` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(128) NOT NULL,
  `deskripsi_barang` varchar(256) NOT NULL,
  `harga_barang` varchar(50) NOT NULL,
  `gambar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pewarna`
--

INSERT INTO `pewarna` (`id_barang`, `nama_barang`, `deskripsi_barang`, `harga_barang`, `gambar`) VALUES
(1, 'Crayon', '<p>isi 12 warna</p>\r\n', '20000', 'E8d76Q-UcAMJssv.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_login` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  `jenis_kelamin` varchar(11) NOT NULL,
  `agama` varchar(11) NOT NULL,
  `tgl_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_login`, `username`, `email`, `password`, `role_id`, `is_active`, `date_created`, `jenis_kelamin`, `agama`, `tgl_lahir`) VALUES
(8, 'Intan', 'intanaomi28@gmail.com', '$2y$10$w1qj1SLfeAJvEOKb.xPmLO76NKqXIMKDQTkmfpjULyYaglpUrBmDO', 1, 1, 1640257572, 'Perempuan', 'Islam', '2021-12-09'),
(9, 'Agnar Briantama', 'briansurya25@gmail.com', '$2y$10$sOwGtKxhuC1LROfgrbqUseJGdeXS649rgNeFS6XNOXVmdGzv4I/Kq', 2, 1, 1640272151, 'Laki-Laki', 'Islam', '2021-12-06'),
(10, 'admin', 'starbookind@gmail.com', '$2y$10$4L9LMr2m4mnw9sIFJA8MnOzI6cbwvIJhfJd3pX8s5fiGjPMOVVqgG', 2, 1, 1640272345, 'Perempuan', 'Katholik', '2021-11-30'),
(11, 'Adelia', 'adeliaputri@gmail.com', '$2y$10$oFfbrGUKun0jb4u4VGl5WOkXjL3lxA6DVw0kqFUBVkRksinbtVuk6', 2, 1, 1640279431, 'Perempuan', 'Islam', '2021-11-28');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `role_id` int(11) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`role_id`, `role`) VALUES
(1, 'admin'),
(2, 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alat_tulis`
--
ALTER TABLE `alat_tulis`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `bolpoin`
--
ALTER TABLE `bolpoin`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `pensil`
--
ALTER TABLE `pensil`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `pewarna`
--
ALTER TABLE `pewarna`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alat_tulis`
--
ALTER TABLE `alat_tulis`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `bolpoin`
--
ALTER TABLE `bolpoin`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pensil`
--
ALTER TABLE `pensil`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pewarna`
--
ALTER TABLE `pewarna`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
