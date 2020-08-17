-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2020 at 10:38 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `orphanage`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'Karimul@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `create_account`
--

CREATE TABLE `create_account` (
  `id` int(11) NOT NULL,
  `name` char(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` enum('male','female','other') NOT NULL,
  `country` varchar(50) NOT NULL,
  `pictrure` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `create_account`
--

INSERT INTO `create_account` (`id`, `name`, `email`, `password`, `mobile`, `address`, `gender`, `country`, `pictrure`) VALUES
(4, 'Karimul', 'khp@gmail.com', '12345', 7275308190, 'kolpanday,azamgarh', 'male', 'China', 'img2.png'),
(5, 'Hasan', 'hasan@gmail.com', '12345678', 60183143581, 'Jalan Kampus 3\r\nKolej 10, UTM, Skudai', 'male', 'Malaysia', '');

-- --------------------------------------------------------

--
-- Table structure for table `donation_details`
--

CREATE TABLE `donation_details` (
  `id` int(11) NOT NULL,
  `name` char(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `extension` varchar(100) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zip` int(20) NOT NULL,
  `money` varchar(100) NOT NULL,
  `orphanage` varchar(100) NOT NULL,
  `payment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `donation_details`
--

INSERT INTO `donation_details` (`id`, `name`, `email`, `extension`, `phone`, `address`, `city`, `state`, `zip`, `money`, `orphanage`, `payment`) VALUES
(5, 'Karimul', 'khp@gmail.com', '+88017', 7398713060, 'kolpanday,azamgarh', 'Azamgarh', 'XY', 276001, '100', 'sdhsjvcbjs', 'B-Kash'),
(13, 'Karimul Hasan', 'khp4121@gmail.com', '+88017', 11610770, 'taman sri pulai', 'Skudai', 'Johor', 81310, '5000', '100', 'B-Kash'),
(14, 'Karimul Hasan', 'khp4121@gmail.com', '+88017', 1121058770, 'kolpanday,azamgarh', 'Skudai', 'Johor', 81310, '1000', 'Jamia Imdadia Darul Uloom And Orphanage', 'B-Kash');

-- --------------------------------------------------------

--
-- Table structure for table `orphanage_details`
--

CREATE TABLE `orphanage_details` (
  `id` int(11) NOT NULL,
  `no` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `details` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orphanage_details`
--

INSERT INTO `orphanage_details` (`id`, `no`, `name`, `details`, `location`) VALUES
(1, 1, 'Sir Salimullah Muslim Orphanage', 'Located in Azimpur,Dhaka, one of Dhakas oldest orphanage.', 'Azimpur road, Dhaka 1205.'),
(2, 2, 'Jamia Imdadia Darul Uloom And Orphanage', 'Located in Mirpur one of Dhakas reputated orphanages.', 'Mirpur Muslim Bazar,section 12, Dhaka'),
(3, 3, 'Families for Children Uttara Dhaka Bangladesh', 'Located in road 22, Dhaka, one of cleanest and oldest orphanages.', 'House 34, Road 22, Dhaka'),
(4, 4, 'Chhotomoni Nibash', 'Located in Lalbagh, Dhaka, one of Dhaka s newest orphanage.', '9-11, Lalbagh Road, Ajimpur,Dhaka 1205'),
(5, 5, 'SOS Children Village', 'Located inEEB902 Mirpur, Dhaka, one of Dhaka s oldest orphanage.', '01 Mirpur  Rd, Dhaka 1207'),
(6, 1, 'Jamia Darul Ulum Madrasa and Orphanage', 'Add description here.', 'North HaliShahar, Rampura TSO, 4224.'),
(7, 2, 'Fayzul Ulum nuranu madrasa and orphanage', 'Add description here.', 'Oxygen - Kuwaish Rd, Chittagong'),
(8, 3, 'Upolobdhy Orphanage', 'Add description here', 'Chittagong town'),
(9, 4, 'SOS Childrenvilage Chittagong', 'Add description here', 'Chittagong town'),
(10, 5, 'Probortok Sangha', 'Add description here', 'Chittagong town');

-- --------------------------------------------------------

--
-- Table structure for table `sponsor_details`
--

CREATE TABLE `sponsor_details` (
  `id` int(11) NOT NULL,
  `name` char(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zip` int(20) NOT NULL,
  `inquary` char(255) NOT NULL,
  `money` varchar(100) NOT NULL,
  `event` varchar(100) NOT NULL,
  `payment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `sponsor_details`
--

INSERT INTO `sponsor_details` (`id`, `name`, `email`, `phone`, `address`, `city`, `state`, `zip`, `inquary`, `money`, `event`, `payment`) VALUES
(5, 'Karimul', 'khp@gmail.com', 7398713060, 'kolpanday,azamgarh', 'Azamgarh', 'XY', 276001, 'Would you put my name?', '100', 'Dhaka 10th Aug', 'B-Kash'),
(6, 'Hasan', 'hasan@gmail.com', 12545813456, 'XB2, KDOJ', 'Skudai', 'Johor', 81310, 'How do u put my name', '10000', 'Chittagong 8th Aug', 'Debit-Card');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer_details`
--

CREATE TABLE `volunteer_details` (
  `id` int(11) NOT NULL,
  `name` char(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `event` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `volunteer_details`
--

INSERT INTO `volunteer_details` (`id`, `name`, `email`, `phone`, `address`, `event`) VALUES
(1, 'Karimul Hasan', 'khp4121@gmail.com', 1121058770, 'Jalan Kampus 3\r\nKolej 10, UTM, Skudai', 'Sylhet 5th Aug'),
(2, 'Rakin Al Mamun', 'example@gmail.com', 1121058770, 'ARAS SATU BANGUNAN PERSATUAN PELAJAR\r\nUNIVERSITI TEKNOLOGI MALAYSIA', 'Chittagong 8th Aug'),
(3, 'Name', 'khp4121@gmail.com', 1121058770, 'ARAS SATU BANGUNAN PERSATUAN PELAJAR\r\nUNIVERSITI TEKNOLOGI MALAYSIA', 'Chittagong 8th Aug');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `create_account`
--
ALTER TABLE `create_account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donation_details`
--
ALTER TABLE `donation_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orphanage_details`
--
ALTER TABLE `orphanage_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sponsor_details`
--
ALTER TABLE `sponsor_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `volunteer_details`
--
ALTER TABLE `volunteer_details`
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
-- AUTO_INCREMENT for table `create_account`
--
ALTER TABLE `create_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `donation_details`
--
ALTER TABLE `donation_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `sponsor_details`
--
ALTER TABLE `sponsor_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `volunteer_details`
--
ALTER TABLE `volunteer_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
