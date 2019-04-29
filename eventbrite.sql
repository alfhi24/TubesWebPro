-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2019 at 03:01 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eventbrite`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id_event` int(25) NOT NULL,
  `title` varchar(25) NOT NULL,
  `location` varchar(25) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `image` varchar(50) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `tiket` varchar(15) NOT NULL,
  `tipe` varchar(25) NOT NULL,
  `topic` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id_event`, `title`, `location`, `start`, `end`, `image`, `deskripsi`, `tiket`, `tipe`, `topic`) VALUES
(1, 'Lomba Robotic Nasional 20', 'Universitas Indonesia, De', '2019-04-26', '2019-04-29', 'ev1.jpg', 'Lomba terbuka untuk seluruh siswa/siswa Indonesia', 'free', 'competition', 'robotix'),
(2, 'Seminar Motivasi Menjelan', 'Universitas Telkom', '2019-05-02', '2019-05-04', 'ev2.jpg', 'Sangat disarankan untuk mengikuti supaya bisa cumlaude', 'free', 'Seminar', 'Education'),
(3, 'FUN WALK BUAH BATU', 'Buah Batu, Bandung', '2019-04-24', '2019-04-24', 'ev3.jpg', 'Acara ini ditujukan untuk mengajak seluruh masyarakat buah batu untuk berjalan sehat bersama.', 'free', 'Sport', 'Sport'),
(15, 'sadasd', 'dsadsa', '2019-04-20', '2019-04-10', '', 'sadasdasd', 'Free', 'Camp', 'Business'),
(16, 'sddsdsdsdsdsdsd', 'sdsdsd', '2019-04-13', '2019-04-12', '', 'afsdafasdf', 'Paid', 'Camp', 'Technology');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `first_name` varchar(15) NOT NULL,
  `last_name` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `email`, `first_name`, `last_name`, `password`) VALUES
(1, 'alfhi24@gmail.com', 'alfhi', 'sa', 'asas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
