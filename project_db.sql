-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2023 at 06:33 PM
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
-- Database: `project_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `card_info`
--

CREATE TABLE `card_info` (
  `Card_id` int(5) NOT NULL,
  `Industry` text NOT NULL,
  `Name` text NOT NULL,
  `Image` text NOT NULL,
  `description` text NOT NULL,
  `Price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `card_info`
--

INSERT INTO `card_info` (`Card_id`, `Industry`, `Name`, `Image`, `description`, `Price`) VALUES
(15, '6', 'Shimla', 'weather.jpg', '5 day-4 night: ahmedabad-delhi-manali-jammuKashmir-ladakh-delhi-ahmedabad', 60000),
(17, '6', 'agra', 'img-2.jpg', 'it is made by shahjaha. it is a symbol of love.', 1500),
(18, '6', 'punjab', 'img-6.jpg', 'it is golden temple from amritsir', 1500),
(19, '6', 'kerala', 'weather.jpg', 'its a kerala trip. there more kela from there', 15000),
(23, '7', 'itely', 'img-4.jpg', 'its a wonderful place and itely has best greenery. its a good place to trip ', 70000);

-- --------------------------------------------------------

--
-- Table structure for table `cat_info`
--

CREATE TABLE `cat_info` (
  `Cat_id` int(5) NOT NULL,
  `Cat_name` varchar(100) NOT NULL,
  `Cat_img` text NOT NULL,
  `Detail` text NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cat_info`
--

INSERT INTO `cat_info` (`Cat_id`, `Cat_name`, `Cat_img`, `Detail`, `price`) VALUES
(4, 'sdsd', 'img-9.jpg', '', 0),
(13, 'classic', 'img-6.jpg', '', 0),
(15, 'rajkot', 'img-5.jpg', '', 0),
(17, 'qatar', 'img-12.jpg', '', 100),
(19, 'sfdf', 'img-5.jpg', 'sdsdsd', 521);

-- --------------------------------------------------------

--
-- Table structure for table `industry_info`
--

CREATE TABLE `industry_info` (
  `Industry_id` int(5) NOT NULL,
  `Industry_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `industry_info`
--

INSERT INTO `industry_info` (`Industry_id`, `Industry_name`) VALUES
(6, 'Indian Trip'),
(7, 'Foreign Trip');

-- --------------------------------------------------------

--
-- Table structure for table `login_info`
--

CREATE TABLE `login_info` (
  `id` int(5) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_info`
--

INSERT INTO `login_info` (`id`, `Username`, `Password`) VALUES
(1, 'Admin', 'Admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `trip_book`
--

CREATE TABLE `trip_book` (
  `Trip_book_id` int(15) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `Contact` text NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Address` text NOT NULL,
  `Destination` text NOT NULL,
  `people` int(5) NOT NULL,
  `arrival_date` varchar(150) NOT NULL,
  `leaving_date` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trip_book`
--

INSERT INTO `trip_book` (`Trip_book_id`, `Username`, `Contact`, `Email`, `Address`, `Destination`, `people`, `arrival_date`, `leaving_date`) VALUES
(16, 'Kano', '123456', 'indiansoldier12@gmai', 'jhi', 'dsd', 3, '2023-06-04', '2023-06-26'),
(20, 'bhumil bhatiya', '7567853568', 'bhumilbhatiya0797@gm', 'samaras boys hostyel, patan', 'patan', 2, '2023-06-15', '2023-06-28');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `User_id` int(5) NOT NULL,
  `Name` varchar(150) NOT NULL,
  `Username` varchar(150) NOT NULL,
  `Password` varchar(150) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `Contact` bigint(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Gender` varchar(150) NOT NULL,
  `DOB` varchar(150) NOT NULL,
  `Address` text NOT NULL,
  `City` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`User_id`, `Name`, `Username`, `Password`, `Contact`, `Email`, `Gender`, `DOB`, `Address`, `City`) VALUES
(12, 'Yash', 'Yash', 'yash@123', 7894561300, 'yash@gmail.com', 'male', '20-1-2004', 'bhaktinagar', 'rajkot'),
(13, 'Kano', 'L301', '301@123', 151, 'mihirmehtasvkd@gmail.com', 'male', '16-10-1966', 'uuhuy', 'mkkn');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `card_info`
--
ALTER TABLE `card_info`
  ADD PRIMARY KEY (`Card_id`);

--
-- Indexes for table `cat_info`
--
ALTER TABLE `cat_info`
  ADD PRIMARY KEY (`Cat_id`);

--
-- Indexes for table `industry_info`
--
ALTER TABLE `industry_info`
  ADD PRIMARY KEY (`Industry_id`);

--
-- Indexes for table `login_info`
--
ALTER TABLE `login_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trip_book`
--
ALTER TABLE `trip_book`
  ADD PRIMARY KEY (`Trip_book_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`User_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `card_info`
--
ALTER TABLE `card_info`
  MODIFY `Card_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `cat_info`
--
ALTER TABLE `cat_info`
  MODIFY `Cat_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `industry_info`
--
ALTER TABLE `industry_info`
  MODIFY `Industry_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `login_info`
--
ALTER TABLE `login_info`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `trip_book`
--
ALTER TABLE `trip_book`
  MODIFY `Trip_book_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `User_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
