-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2023 at 05:31 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barber`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '7b374aa0e3db4efd82c91d152d9f5391');

-- --------------------------------------------------------

--
-- Table structure for table `tblinvoice`
--

CREATE TABLE `tblinvoice` (
  `id` int(11) NOT NULL,
  `Userid` int(11) DEFAULT NULL,
  `ServiceId` int(11) DEFAULT NULL,
  `BillingId` int(11) DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblinvoice`
--

INSERT INTO `tblinvoice` (`id`, `Userid`, `ServiceId`, `BillingId`, `PostingDate`) VALUES
(33, 42, 23, 350495011, '2023-05-29 02:32:14');

-- --------------------------------------------------------

--
-- Table structure for table `tblpage`
--

CREATE TABLE `tblpage` (
  `ID` int(10) NOT NULL,
  `PageType` varchar(200) DEFAULT NULL,
  `PageTitle` mediumtext DEFAULT NULL,
  `PageDescription` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblpage`
--

INSERT INTO `tblpage` (`ID`, `PageType`, `PageTitle`, `PageDescription`) VALUES
(1, 'aboutus', 'About Us', '                                 kami adalah Barbershop yang telah berdiri sejak tahun 2004, kami memperhatikan kebersihan dan kenyamanan pelanggan kami. Kami selalu menjaga kebersihan dan sanitasi di setiap area di Barbershop kami dan menggunakan peralatan dan perlengkapan yang steril.Kami berkomitmen untuk memberikan pengalaman yang menyenangkan dan memuaskan bagi pelanggan kami setiap kali mengunjungi Barbershop kami. Jadi, jika Anda mencari tempat untuk potong rambut atau perawatan rambut yang berkualitas dengan harga terjangkau, maka Barbershop kami adalah pilihan yang tepat untuk Anda.'),
(3, 'location', 'Lokasi Barber', '                                                                                      <iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15840.538387538305!2d107.5372209!3d-6.9934244!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68ef1c571f5ef5%3A0xd6b172403204b82!2sPangkas%20Rambut%20Lily%20putra!5e0!3m2!1sid!2sid!4v1682928028169!5m2!1sid!2sid\" width=\"450\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `tblservices`
--

CREATE TABLE `tblservices` (
  `ID` int(10) NOT NULL,
  `ServiceName` varchar(200) DEFAULT NULL,
  `ServiceDescription` mediumtext DEFAULT NULL,
  `Cost` int(10) DEFAULT NULL,
  `Image` varchar(200) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblservices`
--

INSERT INTO `tblservices` (`ID`, `ServiceName`, `ServiceDescription`, `Cost`, `Image`, `CreationDate`) VALUES
(23, 'Buzz Cut', 'potongan ', 15, '2e031c5cd99e51e7282aa124130a28db1683938523.jpg', '2023-05-13 00:42:03'),
(25, 'Two Block', 'potongan pendek', 15, '026970a279e6f85066965558db8cea1a1683940729.jpg', '2023-05-13 01:17:40'),
(26, 'Mid Fade', 'masbroo', 15, 'bdfdcc32be08894746881284f9521f561683940983.jpg', '2023-05-13 01:23:03'),
(27, 'Taper Fade', 'hahahihi', 15, '9eafb1f147ce942a3996142217f666d81683941287.jpg', '2023-05-13 01:28:07'),
(28, 'Low Fade', 'pendek pendek', 15, '3e87b37867c6d767021414176fae9cab1683941506.jpg', '2023-05-13 01:31:46'),
(29, 'French crop', 'huhuh', 15, 'e6b2b96f5f7656b79220283af9f15fe41683941606.jpg', '2023-05-13 01:33:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `number` bigint(14) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `verif_code` text NOT NULL,
  `reset_code` varchar(100) DEFAULT NULL,
  `is_verified` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `number`, `email`, `password`, `RegDate`, `verif_code`, `reset_code`, `is_verified`) VALUES
(42, 'Baden Nugraha', 8912345, 'badennugraha4@gmail.com', '$2y$10$NrpPSFVnjjNzj8aRLUInY.EeunB0Cd3pH/MjpJvOsU8OklfJYI2fS', '2023-05-25 10:16:15', 'c984f2af4d9652f88dfb4bc5f705796b', NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblinvoice`
--
ALTER TABLE `tblinvoice`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `tblpage`
--
ALTER TABLE `tblpage`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblservices`
--
ALTER TABLE `tblservices`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblinvoice`
--
ALTER TABLE `tblinvoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tblpage`
--
ALTER TABLE `tblpage`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblservices`
--
ALTER TABLE `tblservices`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
