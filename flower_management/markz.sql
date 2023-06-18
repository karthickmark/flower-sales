-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2023 at 05:01 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `markz`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `ordid` int(11) NOT NULL,
  `ordname` varchar(100) NOT NULL,
  `ordcost` decimal(10,0) NOT NULL,
  `ordqty` int(11) NOT NULL,
  `ordimg` int(11) NOT NULL,
  `ordamount` decimal(20,0) NOT NULL,
  `nameoford` varchar(100) NOT NULL,
  `addressord` varchar(250) NOT NULL,
  `contactord` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedz`
--

CREATE TABLE `feedz` (
  `feedid` int(11) NOT NULL,
  `satislevel` varchar(50) NOT NULL,
  `feedcoment` text NOT NULL,
  `feedname` varchar(100) NOT NULL,
  `feedmail` varchar(100) NOT NULL,
  `feednum` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedz`
--

INSERT INTO `feedz` (`feedid`, `satislevel`, `feedcoment`, `feedname`, `feedmail`, `feednum`) VALUES
(1, 'neutral', 'ef', 'dd', 'e@d', 'dfd'),
(2, 'good', 'your doing good but not your best, gambare gambare', 'Might guy', 'mightguy1@gmail.com', '2345678987'),
(3, 'good', 'not bad', 'tsukishima', 'tsukki@gmail.com', '11'),
(4, 'excellent', 'tooo badd boooooo...', 'its me', 'mymail@sd', 'this num'),
(5, 'good', 'super bro i like ur website', 'vicky', 'vickysri5432@gmail.com', '7339620727'),
(6, 'excellent', 'i got some decent flowers with lowest price', 'karthick', 'karithi@gmail.com', '7339620727');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `floname` varchar(100) NOT NULL,
  `image` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `featured` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `price`, `floname`, `image`, `description`, `featured`) VALUES
(1, 'Rose', '180', '200', '/flower_management/img/3.jfif', 'Fresh flowers from garden ', 1),
(2, 'Jasmine', '2500', '2700', '/flower_management/img/4.jfif', 'fresh flowers from garden', 1),
(3, 'Mullai', '2000', '2500', '/flower_management/img/11.jpg', 'fresh flowers from garden', 1),
(4, 'Pichi', '1500', '1800', '/flower_management/img/2.jfif', 'fresh flower from graden', 1),
(5, 'Sambangi', '200', '250', '/flower_management/img/55.jpeg', 'fresh flower from graden', 2),
(6, 'Khozhi', '100', '130', '/flower_management/img/22.webp', 'fresh flower from garden ', 2),
(7, 'Arali', '250', '300', '/flower_management/img/5.webp', 'fresh flower from garden ', 2),
(8, 'Yellow Rose', '300', '400', '/flower_management/img/7.webp', 'fresh flower from garden ', 2),
(9, 'Sendu', '150', '200', '/flower_management/img/33.webp', 'fresh flower from garden ', 3),
(10, 'VadaMalli', '350', '400', '/flower_management/img/88.jfif', 'fresh flower from garden ', 3),
(11, 'Pannir Rose', '450', '600', '/flower_management/img/75.jpg', 'fresh flower from garden ', 3),
(12, 'Sevanthi', '330', '670', '/flower_management/img/80.jfif', 'Fresh  flower from garden', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `noofusers` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `email`, `password`, `noofusers`) VALUES
('mark', 'mark@gmail.com', '202cb962ac59075b964b07152d234b70', 1),
('kannan', 'kannanpalani2911@gmail.co', 'b1f62fa99de9f27a048344d55c5ef7a6', 6),
('alwin', 'alwin543@gmai.com', '827ccb0eea8a706c4c34a16891f84e7b', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`ordimg`);

--
-- Indexes for table `feedz`
--
ALTER TABLE `feedz`
  ADD PRIMARY KEY (`feedid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`noofusers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `ordimg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `feedz`
--
ALTER TABLE `feedz`
  MODIFY `feedid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `noofusers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
