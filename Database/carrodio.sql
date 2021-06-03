-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2021 at 12:36 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carrodio`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(6) UNSIGNED NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `passw` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `firstname`, `lastname`, `email`, `passw`) VALUES
(1, 'CarRodio', 'Admin', 'admin@admin.com', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918'),
(5, 'Dinera', 'Premaratne', 'cb007942@students.apiit.lk', '3a0311f7462d0594e06b5cbcd83f2d4c0f9e95416569c5baac1b287de16870e4'),
(6, 'Avishka', 'Illukpitiya', 'aaron@illukpitiya.net', '5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8'),
(7, 'PrageeshaA', 'Jayasinghe', 'pj@mail.com', 'c775e7b757ede630cd0aa1113bd102661ab38829ca52a6422ab782862f268646');

-- --------------------------------------------------------

--
-- Table structure for table `adrate`
--

CREATE TABLE `adrate` (
  `id` int(11) NOT NULL,
  `adid` int(11) DEFAULT NULL,
  `rate` int(11) DEFAULT NULL,
  `sid` int(11) DEFAULT NULL,
  `cmnt` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adrate`
--

INSERT INTO `adrate` (`id`, `adid`, `rate`, `sid`, `cmnt`) VALUES
(5, 7, 2, 1, 'Good Sale'),
(6, 4, 5, 1, 'good'),
(7, 4, 3, 1, 'good');

-- --------------------------------------------------------

--
-- Table structure for table `advert`
--

CREATE TABLE `advert` (
  `id` int(6) UNSIGNED NOT NULL,
  `title` varchar(30) NOT NULL,
  `vcondition` varchar(30) NOT NULL,
  `type` varchar(10) NOT NULL,
  `brand` varchar(10) NOT NULL,
  `price` int(11) NOT NULL,
  `sellerid` int(50) DEFAULT NULL,
  `postdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `oldpr` int(11) NOT NULL,
  `status` char(1) DEFAULT NULL,
  `descr` varchar(255) DEFAULT NULL,
  `mileage` int(7) DEFAULT NULL,
  `ntf` int(1) DEFAULT NULL,
  `clk` int(11) DEFAULT NULL,
  `complete` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `advert`
--

INSERT INTO `advert` (`id`, `title`, `vcondition`, `type`, `brand`, `price`, `sellerid`, `postdate`, `oldpr`, `status`, `descr`, `mileage`, `ntf`, `clk`, `complete`) VALUES
(4, 'Mercedes Benz C180', 'Used', 'Car', 'Mercedes ', 49999, 1, '2021-05-09 12:59:44', 54999, 'v', 'This is a Merc car', 12250, 0, 10, 0),
(5, 'Hyundai Kona 2020', 'Used', 'Car', 'Hyundai', 29999, 1, '2021-05-05 21:54:10', 34999, 'r', NULL, 2250, 0, 0, 0),
(6, 'Mitsubishi Lancer 1999', 'Used', 'Car', 'Mitsubishi', 4999, 6, '2021-05-05 21:54:11', 9999, 'p', NULL, 50000, 0, 0, 0),
(7, 'Suzuki Swift 2008', 'Used', 'Car', 'Suzuki', 4999, 1, '2021-06-02 21:00:13', 10000, 'v', 'This is a Suzuki', 14541, 0, 135, 0),
(45, 'Mercedes AMG G63', 'Used', 'Car', 'Mercedes', 190000, 1, '2021-05-06 16:19:06', 250000, 'r', NULL, 411110, 0, 0, 0),
(47, 'Porsche Boxster 2005', 'Used', 'Car', 'Porsche', 10000, 1, '2021-05-05 21:54:13', 15000, 'v', 'Porsche Car from 2005. Good condition. Drives well. No accidents', 10000, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `img`
--

CREATE TABLE `img` (
  `id` int(11) NOT NULL,
  `imgid` int(11) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `img`
--

INSERT INTO `img` (`id`, `imgid`, `link`) VALUES
(2, 44, 'modelx.jpg'),
(3, 45, 'inkas-armored-2020-mercedes-amg-g63-limousine_100757132_h.jpg'),
(5, 5, '2021-hyundai-kona-mmp-1-1596819352.jpg'),
(6, 4, 'aa23c22b63c4660606c16b5b4c38ad61.jpg'),
(7, 7, 'swift.jpg'),
(8, 17, 'mazdars.jpg'),
(9, 47, '2004_Porsche_Boxster_S_Tiptronic_S_3.2_Front.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `buyerem` varchar(50) DEFAULT NULL,
  `sellerid` int(11) DEFAULT NULL,
  `adid` int(11) DEFAULT NULL,
  `message` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `buyerem`, `sellerid`, `adid`, `message`) VALUES
(14, 'dinerapremaratne@gmail.com', 1, 7, 'AAAAAAAAA');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) UNSIGNED NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `passw` varchar(150) DEFAULT NULL,
  `phrase` varchar(255) DEFAULT NULL,
  `type` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `passw`, `phrase`, `type`) VALUES
(1, 'Dinera', 'Premaratne', 'dinera@mail.com', '34a99a5f487dfbc027e085c0070cc5e4fa4b0a554df8157b9fec9444722ee318', 'dog', 's'),
(5, 'Prageeshaa', 'Jayesinghe', 'prageeshaa@mail.com', '9f0cfe0cc9b98059b25e1ff09309163b60a3ec89879d13440a978a8486b72174', 'cat', 'b'),
(6, 'test', 'test', 'test@mail.com', 'test', 'snake', 's'),
(14, 'vala', 'val', 'val@mail.com', '97dfc65f74283f60c606bda3f75a6a6bec3fc1e513b8b40797b5ecb86c824ee2', NULL, 'b'),
(18, 'Gayath', 'kodi', 'gayathkodi@gmail.com', 'qwerty123', NULL, 's'),
(20, 'John', 'May', 'jmay@mail.com', 'jin12345', NULL, 'b'),
(32, 'test', 'test', 'test222@mail.com', 'ecd71870d1963316a97e3ac3408c9835ad8cf0f3c1bc703527c30265534f75ae', 'test', 'b');

-- --------------------------------------------------------

--
-- Table structure for table `wlist`
--

CREATE TABLE `wlist` (
  `id` int(11) NOT NULL,
  `adid` int(11) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wlist`
--

INSERT INTO `wlist` (`id`, `adid`, `uid`) VALUES
(2, 7, 14),
(3, 7, 5),
(4, 4, 5),
(5, 7, 5),
(6, 7, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adrate`
--
ALTER TABLE `adrate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `advert`
--
ALTER TABLE `advert`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wlist`
--
ALTER TABLE `wlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `adrate`
--
ALTER TABLE `adrate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `advert`
--
ALTER TABLE `advert`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `img`
--
ALTER TABLE `img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `wlist`
--
ALTER TABLE `wlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
