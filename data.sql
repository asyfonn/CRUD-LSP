-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2022 at 08:09 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_siswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `ttl` varchar(250) NOT NULL,
  `tanggal` varchar(250) NOT NULL,
  `warga` varchar(250) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `nohp` int(250) NOT NULL,
  `asal` varchar(250) NOT NULL,
  `ayah` varchar(250) NOT NULL,
  `ibu` varchar(250) NOT NULL,
  `penghasilan` varchar(250) NOT NULL,
  `foto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `nama`, `ttl`, `tanggal`, `warga`, `alamat`, `email`, `nohp`, `asal`, `ayah`, `ibu`, `penghasilan`, `foto`) VALUES
(2, 'Mahija Attar', '', 'Depok', 'Indonesia', 'Jl. Poras no. 27', 'atarmahija1@gmail.com', 2147483647, 'SMPN 5 Depok', 'Bambang', 'Surti', '10.000.000', '706-951216.jpg'),
(3, 'Akil', '', 'Bogor', 'Indonesia', 'Jl. Poras no. 27', 'akil@gmail.com', 2147483647, 'SMPN 5 Bogor', 'Bam', 'Sur', '11.000.000', ''),
(4, 'Apoy', '', 'Batam', 'Indonesia', 'Jl. Poras no. 27', 'apoy1@gmail.com', 2147483647, 'SMPN 5 Batam', 'Bamba', 'Surt', '1.000.000', ''),
(5, 'Ferrol', '', 'Jakarta', 'Indonesia', 'Jl. Poras no. 259', 'ferrol@gmail.com', 2147483647, 'SMPN 5 Jakarta', 'Rudi', 'Tuti', '13.000.000', '9-1536368794078.jpg'),
(7, 'Gale', '', 'Jakarta', 'Indonesia', 'Jl. Poras no. 250', 'rahmatkurnia137@gmail.com', 2147483647, 'SMPN 5 Jakarta', 'Tono', 'Andini', '12.000.000', '483-1536368794078.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
