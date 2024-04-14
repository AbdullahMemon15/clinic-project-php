-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2022 at 08:55 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `gender` varchar(15) NOT NULL,
  `email` varchar(250) NOT NULL,
  `dob` date NOT NULL,
  `contactNo` varchar(15) NOT NULL,
  `insuranceNo` int(10) NOT NULL,
  `address` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`firstname`, `lastname`, `gender`, `email`, `dob`, `contactNo`, `insuranceNo`, `address`) VALUES
('mnbnb', 'mcvbv', 'Female', 'mnb@Gmail.com', '2022-11-28', '9807329021', 2147483647, 'bfainajnvja 222 22211'),
('mnbnb', '', 'Male', '', '2022-12-01', '', 0, ''),
('abdul', 'memon', 'Male', 'abdul@gmail.com', '2022-12-05', '143647889345', 2147483647, 'yuiop street coquitlam'),
('abdul', 'memon', 'Male', 'abdul@gmail.com', '2022-12-05', '143647889345', 2147483647, 'yuiop street coquitlam'),
('uoup', 'asd', 'Female', 'acas@gmail.com', '2022-12-05', '264272412', 2147483647, '12 street'),
('abdul', 'memon', 'Male', 'jwee03@mylangara.ca', '2022-12-05', '999987888777', 2147483647, '12 street');

-- --------------------------------------------------------

--
-- Table structure for table `walk`
--

CREATE TABLE `walk` (
  `ID` int(3) NOT NULL,
  `date` date NOT NULL,
  `fullName` varchar(250) NOT NULL,
  `email` varchar(255) NOT NULL,
  `reason` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `walk`
--

INSERT INTO `walk` (`ID`, `date`, `fullName`, `email`, `reason`) VALUES
(1, '2022-12-05', 'abd', 'ahcdg@gmail.com', 'other'),
(6, '2022-12-05', 'pou', 'ahcdg@gmail.com', 'Anxiety and Depression'),
(7, '2022-12-05', 'uytop', 'uuuhih@gmail.com', 'Joint Pain and Osteoarthr'),
(8, '2022-12-05', 'abd', 'ahcdg@gmail.com', 'Joint Pain and Osteoarthr'),
(9, '2022-12-05', 'pou', 'jwee03@mylangara.ca', 'Anxiety and Depression'),
(10, '2022-12-05', 'pou', 'mnb@Gmail.com', 'fever'),
(11, '2022-12-05', 'pouuihink ,m ', 'mnb@Gmail.com', 'fever'),
(12, '2022-12-05', 'pou', 'ahcdg@gmail.com', 'fever'),
(13, '2022-12-05', 'abd', 'abdul@gmail.com', 'fever'),
(14, '2022-12-05', 'pouuihink ,m ', 'abdullahakhund@gmail.com', 'skin Disorder'),
(15, '2022-12-05', 'pouuihink ,m ', 'markevanshero@gmail.com', 'other'),
(16, '2022-12-05', 'pou', 'ahcdg@gmail.com', 'fever'),
(17, '2022-12-05', 'abd', 'abdul@gmail.com', 'skin Disorder'),
(18, '2022-12-05', 'pou', 'abdul@gmail.com', 'fever'),
(19, '2022-12-05', 'abd', 'jwee03@mylangara.ca', 'skin Disorder'),
(20, '2022-12-05', 'pou', 'markevanshero@gmail.com', 'fever'),
(21, '2022-12-05', 'abd', 'jwee03@mylangara.ca', 'fever'),
(22, '2022-12-05', 'pou', 'mnb@Gmail.com', 'Joint Pain and Osteoarthr'),
(23, '2022-12-05', 'pouuihink ,m ', 'abdul@gmail.com', 'fever'),
(24, '2022-12-05', 'ac', 'nasknkanvk@gmail.com', 'skin Disorder'),
(25, '2022-12-05', 'abd', 'abduacaklcm@gmail.com', 'fever');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `walk`
--
ALTER TABLE `walk`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `walk`
--
ALTER TABLE `walk`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
