-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 10, 2024 at 08:12 AM
-- Server version: 10.5.20-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id21972677_log_register`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `ID` int(11) NOT NULL,
  `USER_LNAME` varchar(255) NOT NULL,
  `USER_FNAME` varchar(255) NOT NULL,
  `USER_EMAIL` varchar(255) NOT NULL,
  `USER_PASSWORD` varchar(255) NOT NULL,
  `USER_COUNTRY` varchar(255) NOT NULL,
  `USER_REGION` varchar(255) NOT NULL,
  `USER_STREET` varchar(255) NOT NULL,
  `USER_SUBDIVISION` varchar(255) NOT NULL,
  `USER_BARANGGAY` varchar(255) NOT NULL,
  `USER_CITY` varchar(255) NOT NULL,
  `USER_CONTACT` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`ID`, `USER_LNAME`, `USER_FNAME`, `USER_EMAIL`, `USER_PASSWORD`, `USER_COUNTRY`, `USER_REGION`, `USER_STREET`, `USER_SUBDIVISION`, `USER_BARANGGAY`, `USER_CITY`, `USER_CONTACT`) VALUES
(6, 'Eliza Nicole', 'Ananca', 'briar@gmail.com', '$2y$10$JK9CczuBllo7PhPFC23F3eAzpQ5Ipl5FGg3CzXiJ3Eqy5qJArSGa.', 'Philippines', 'National Capital Region', 'Trees Residences', 'Oak Building', 'Barangay Pasong Putik', 'Quezon City', '09457761721');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
