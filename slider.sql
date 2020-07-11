-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2020 at 11:26 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `slider`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `subject`, `message`) VALUES
(1, 'sujay', 'how r u', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `img`) VALUES
(1, 'image\\img21.jpg'),
(2, 'image\\img20.jpg\r\n'),
(3, 'image\\img22.jpg\r\n'),
(4, 'image\\img23.jpg\r\n'),
(5, 'image\\img24.jpg\r\n'),
(6, 'image\\img19.webp\r\n'),
(7, 'image\\img18.jpg\r\n'),
(8, 'image\\img17.jpg\r\n'),
(9, 'image\\img16.jpg\r\n'),
(10, 'image\\img15.jpeg'),
(11, 'image\\img14.jpg\r\n'),
(12, 'image\\img13.jpeg'),
(13, 'image\\img12.jpg\r\n'),
(14, 'image\\img11.jpg\r\n'),
(15, 'image\\img10.jpg\r\n'),
(16, 'image\\img9.webp\r\n'),
(17, 'image\\img8.jpg\r\n'),
(18, 'image\\img7.jpg\r\n'),
(19, 'image\\img6.jpg\r\n'),
(20, 'image\\img5.jpg\r\n'),
(21, 'image\\img4.jpg\r\n'),
(22, 'image\\img3.jpg\r\n'),
(23, 'image\\img2.jpg\r\n'),
(24, 'image\\img1.jpg\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `info` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `disc` varchar(255) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `name`, `info`, `img`, `disc`, `type`) VALUES
(1, 'Bar', 'Welcome to our Bar', 'img7.jpg', 'A bar (also known as a saloon or a tavern or sometimes as a pub or club, referring to the actual establishment, as in pub bar or club bar etc.) is a retail business establishment that serves alcoholic beverages, such as beer, wine, liquor, cocktails, and ', 1),
(2, 'Cafe', 'welcome to our Cafe', 'cafe.jpg', 'A café setting is known as a casual social environment where you can find people reading newspapers and magazines, playing board games, studying or chatting with others about current events. It is known also regarded as a place where information can be ex', 2);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `caption` varchar(50) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `caption`, `img`) VALUES
(2, 'hii', 'image\\img1.jpg'),
(3, 'hii', 'image\\img2.jpg'),
(4, 'hii', 'image\\img3.jpg'),
(5, 'hii', 'image\\img4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `info` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `img`, `info`) VALUES
(1, 'Cheese Pizza', 'image\\pizza.jpg', ''),
(2, 'Maxican Pizza', 'image\\pizza1.jpg', ''),
(3, 'Italian pizza', 'image\\pizza4.jpg', ''),
(4, 'American Pizza', 'image\\pizza3.jpg', ''),
(5, 'Margerita Pizza', 'image\\pizza2.jpg', ''),
(6, 'Cheese perry perry Pizza', 'image\\pizza7.jpg', ''),
(7, 'Veg Burger', 'image\\bg2.jpg', ''),
(8, 'Cheese Burger', 'image\\bg1.jpg', ''),
(9, 'Bison Burger', 'image\\bg3.jpg', ''),
(10, 'Special Burger', 'image\\bg4.webp', ''),
(11, 'Vegetable Sandwich', 'image\\sandwich.jpg', ''),
(12, 'Cheese Sandwich', 'image\\sand2.gif', ''),
(13, 'Grilled Sandwich', 'image\\sand4.jpg', ''),
(14, 'Ham Sandwich', 'image\\cheese.jpg', ''),
(15, 'Paneer Tikka', 'image\\paneer1.jpg', ''),
(16, 'Paneer Tufani', 'image\\paneer2.jpg', ''),
(17, 'Paneer Tikka Masala', 'image\\paneer4.jpg', ''),
(18, 'Paneer Bhurji', 'image\\paneer3.jpg', ''),
(19, 'Gujarati Dish', 'image\\veg4.jpg', ''),
(20, 'Veg Biryani', 'image\\veg.jpg', ''),
(21, 'Pulao', 'image\\veg1.jpg', ''),
(22, 'Noodles', 'image\\veg3.jpg', ''),
(23, 'Ice Creame', 'image\\ice.jpg', ''),
(24, 'Cold Drinks', 'image\\cd.jpg', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
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
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
