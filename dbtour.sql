-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2023 at 09:19 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbtour`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblbank`
--

CREATE TABLE `tblbank` (
  `cardtype` varchar(50) NOT NULL,
  `cnumber` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cvc` int(10) NOT NULL,
  `exmonth` int(11) NOT NULL,
  `exyear` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblbank`
--

INSERT INTO `tblbank` (`cardtype`, `cnumber`, `name`, `cvc`, `exmonth`, `exyear`) VALUES
('Debit Card', '1234 5678 1234 5678', 'Abhishek', 1234, 12, 2025);

-- --------------------------------------------------------

--
-- Table structure for table `tblbooking`
--

CREATE TABLE `tblbooking` (
  `bookingid` int(50) NOT NULL,
  `packageId` int(50) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(10) NOT NULL,
  `bdate` date NOT NULL DEFAULT current_timestamp(),
  `package` varchar(30) NOT NULL,
  `fordate` date NOT NULL,
  `status` varchar(50) NOT NULL,
  `cancelledby` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblbooking`
--

INSERT INTO `tblbooking` (`bookingid`, `packageId`, `firstname`, `lastname`, `email`, `phone`, `bdate`, `package`, `fordate`, `status`, `cancelledby`) VALUES
(1, 1, 'Abhishek', 'Rebello', 'abhi@gmail.com', 2147483647, '2023-06-26', 'Solo', '2023-06-30', '1', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontact`
--

CREATE TABLE `tblcontact` (
  `firstname` varchar(50) NOT NULL,
  `lastname` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(150) NOT NULL,
  `pdate` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblcontact`
--

INSERT INTO `tblcontact` (`firstname`, `lastname`, `email`, `subject`, `message`, `pdate`) VALUES
('Abhishek', 'Rebello', 'abhi@gmail.com', 'Booking', 'hi...hello\r\n', '2023-06-26');

-- --------------------------------------------------------

--
-- Table structure for table `tblenquiry`
--

CREATE TABLE `tblenquiry` (
  `firstname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbllogin`
--

CREATE TABLE `tbllogin` (
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbllogin`
--

INSERT INTO `tbllogin` (`email`, `password`, `usertype`) VALUES
('admin@gmail.com', 'admin123', 'ADMIN'),
('abhi@gmail.com', 'abhi123', 'user'),
('test0@gmail.com', 'test0', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tblnewsletter`
--

CREATE TABLE `tblnewsletter` (
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblnewsletter`
--

INSERT INTO `tblnewsletter` (`username`, `email`) VALUES
('Abhishek', 'abhi@gmail.com'),
('Abhi', 'test0@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tblpackages`
--

CREATE TABLE `tblpackages` (
  `image` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `packageId` int(11) NOT NULL,
  `packagelocation` varchar(100) NOT NULL,
  `packagedetails` varchar(500) NOT NULL,
  `packagefeatures` varchar(300) NOT NULL,
  `creationdate` date NOT NULL DEFAULT current_timestamp(),
  `type` varchar(100) NOT NULL,
  `updationdate` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `pickuppoint` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblpackages`
--

INSERT INTO `tblpackages` (`image`, `price`, `name`, `packageId`, `packagelocation`, `packagedetails`, `packagefeatures`, `creationdate`, `type`, `updationdate`, `pickuppoint`) VALUES
('manjarabad-fort.jpg', 2000, 'Manjarabad fort', 1, 'Shakleshpur', 'Fort tour and Surrounding places covered\r\nTour Guide will be assisting', 'Pickup and Drop facility, Breakfast, Lunch, Refreshments...', '2023-06-26', '', '2023-06-27 05:59:27', 'Udupi '),
('The-Magnificent-Yana-Cave.jpg', 2500, 'Yana Caves', 2, 'Gokarna', 'Yana caves tour, Unchalli falls ', 'Breakfast, travel', '2023-06-26', '', '2023-06-26 05:37:15', 'Udupi '),
('UnchalliFalls.jpg', 3000, 'fxn g', 3, 'nhcfn ', 'yytdjydm', 'nfx xdb ', '2023-06-27', '', '2023-06-27 05:25:44', 'u');

-- --------------------------------------------------------

--
-- Table structure for table `tblpages`
--

CREATE TABLE `tblpages` (
  `id` int(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `details` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblpages`
--

INSERT INTO `tblpages` (`id`, `type`, `details`) VALUES
(1, 'Terms', '<p style=\"margin-bottom: 1.5rem; color: rgb(4, 12, 26); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 19.2px; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; transition-duration: 0.01ms !important; scroll-behavior: auto !important;\">A Terms and Conditions agreement acts as a legal contract between you (the company) and the user. It\'s where you&nbsp;<span style=\"font-weight: 700; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; transition-duration: 0.01ms !important; scroll-behavior: auto !important;\">maintain your rights</span>&nbsp;to exclude users from your app in the event that they abuse your website/app, set out the rules for using your service and note other important details and disclaimers.</p><p style=\"margin-bottom: 1.5rem; color: rgb(4, 12, 26); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 19.2px; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; transition-duration: 0.01ms !important; scroll-behavior: auto !important;\">Having a Terms and Conditions agreement is completely optional. No laws require you to have one. Not even the super-strict and wide-reaching General Data Protection Regulation</p>'),
(2, 'PrivacyPolicy', '<p class=\"q0cs9b\" style=\"line-height: 1.333; padding-top: 24px; color: rgb(60, 64, 67); font-family: &quot;Google Sans&quot;, sans-serif; font-size: 1.5rem;\">When you use our services, you’re trusting us with your information. We understand this is a big responsibility and work hard to protect your information and put you in control.</p><p style=\"line-height: 1.714; padding-top: 20px; margin-top: 10px; color: rgba(0, 0, 0, 0.87); font-family: Roboto, arial, sans-serif; font-size: 14px;\">This Privacy Policy is meant to help you understand what information we collect, why we collect it, and how you can update, manage, export, and delete your information.</p>'),
(3, 'AboutUs', '&nbsp;cmb,chccccx'),
(4, 'ContactUs', '																				Phone: +91 89654752&nbsp; ||&nbsp; Email: info@thetraveller.com<div><br></div>\r\n										\r\n										');

-- --------------------------------------------------------

--
-- Table structure for table `tblregister`
--

CREATE TABLE `tblregister` (
  `name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(11) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `regDate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblregister`
--

INSERT INTO `tblregister` (`name`, `dob`, `address`, `email`, `password`, `phone`, `regDate`) VALUES
('Abhishek R', '2002-07-08', 'Nejar', 'abhi@gmail.com', 'abhi123', 8747858122, '2023-05-30'),
('admin', '0000-00-00', '', 'admin@gmail.com', 'admin123', 9986080702, '2023-05-30'),
('Abh', '2002-07-08', 'Ahgsf', 'test0@gmail.com', 'test0', 9857465231, '2023-06-12');

-- --------------------------------------------------------

--
-- Table structure for table `tbltestimonials`
--

CREATE TABLE `tbltestimonials` (
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `reviews` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbltestimonials`
--

INSERT INTO `tbltestimonials` (`username`, `email`, `reviews`) VALUES
('admin', 'admin@gmail.com', 'Best travel agents. Adventurous and enthusiastic'),
('admin', 'admin@gmail.com', 'Best travel agents. Adventurous and enthusiastic');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblbooking`
--
ALTER TABLE `tblbooking`
  ADD PRIMARY KEY (`bookingid`),
  ADD KEY `packageId` (`packageId`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `tblcontact`
--
ALTER TABLE `tblcontact`
  ADD KEY `email` (`email`);

--
-- Indexes for table `tblenquiry`
--
ALTER TABLE `tblenquiry`
  ADD KEY `email` (`email`);

--
-- Indexes for table `tbllogin`
--
ALTER TABLE `tbllogin`
  ADD KEY `tbllogin_ibfk_1` (`email`);

--
-- Indexes for table `tblnewsletter`
--
ALTER TABLE `tblnewsletter`
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tblpackages`
--
ALTER TABLE `tblpackages`
  ADD PRIMARY KEY (`packageId`);

--
-- Indexes for table `tblregister`
--
ALTER TABLE `tblregister`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `tbltestimonials`
--
ALTER TABLE `tbltestimonials`
  ADD KEY `email` (`email`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblbooking`
--
ALTER TABLE `tblbooking`
  ADD CONSTRAINT `tblbooking_ibfk_1` FOREIGN KEY (`packageId`) REFERENCES `tblpackages` (`packageId`),
  ADD CONSTRAINT `tblbooking_ibfk_2` FOREIGN KEY (`email`) REFERENCES `tblregister` (`email`);

--
-- Constraints for table `tblcontact`
--
ALTER TABLE `tblcontact`
  ADD CONSTRAINT `tblcontact_ibfk_1` FOREIGN KEY (`email`) REFERENCES `tblregister` (`email`);

--
-- Constraints for table `tblenquiry`
--
ALTER TABLE `tblenquiry`
  ADD CONSTRAINT `tblenquiry_ibfk_1` FOREIGN KEY (`email`) REFERENCES `tblregister` (`email`);

--
-- Constraints for table `tbllogin`
--
ALTER TABLE `tbllogin`
  ADD CONSTRAINT `tbllogin_ibfk_1` FOREIGN KEY (`email`) REFERENCES `tblregister` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tblnewsletter`
--
ALTER TABLE `tblnewsletter`
  ADD CONSTRAINT `tblnewsletter_ibfk_1` FOREIGN KEY (`email`) REFERENCES `tblregister` (`email`);

--
-- Constraints for table `tbltestimonials`
--
ALTER TABLE `tbltestimonials`
  ADD CONSTRAINT `tbltestimonials_ibfk_1` FOREIGN KEY (`email`) REFERENCES `tblregister` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
