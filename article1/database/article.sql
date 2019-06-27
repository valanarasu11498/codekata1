-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2019 at 04:21 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `article`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_details`
--

CREATE TABLE `account_details` (
  `id` int(32) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `repeatpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account_details`
--

INSERT INTO `account_details` (`id`, `name`, `password`, `repeatpassword`) VALUES
(1, 'fgh', 'aaa', 'aaa'),
(2, 'anish', 'anish', 'anish'),
(3, 'asdfgh', 'asdfgh', 'asdfgh'),
(4, 'anish', 'asdfg', 'asdfg');

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(32) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `date` datetime NOT NULL,
  `author` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `title`, `category`, `tag`, `content`, `date`, `author`, `status`, `image`) VALUES
(1, 'Infiniti has plan to launch new products', 'technology', 'car', 'Helps travel agencies to distinctly charge their customer with different transaction/markup fee for maximizing revenue per transaction. Also, they can cross-sell ancillary services to boost their revenue.', '2019-06-27 00:00:00', 'admin', 'Published', 'download.png'),
(2, 'autoAgency', 'travel', 'car', 'anish agencyAuto simplifies the credit control, supplier matching and ledger management process. It ensures accurate invoicing and complete accounting of every transaction', '2019-06-27 00:00:00', 'admin', 'Published', 'helping-serve-customers.png'),
(3, 'autoAgency', 'travel', 'car', 'agencyAuto simplifies the credit control, supplier matching and ledger management process. It ensures accurate invoicing and complete accounting of every transaction', '2019-06-27 00:00:00', 'admin', 'Published', 'helping-serve-customers.png'),
(4, '', 'travel updates', 'car', '						', '2019-06-27 00:00:00', '', 'Draft', ''),
(5, '', 'travel updates', 'car', '						', '2019-06-27 00:00:00', '', 'Draft', ''),
(6, '', 'travel updates', 'car', '						', '2019-06-27 00:00:00', '', 'Draft', ''),
(7, '', 'travel updates', 'car', '						', '2019-06-27 00:00:00', '', 'Draft', ''),
(8, '', 'travel updates', 'car', '						', '2019-06-27 00:00:00', '', 'Draft', ''),
(9, 'dfghjkl;', 'travel updates', 'car', '						dfhkcbgijbcxgtjb cyjbchn v', '2019-06-27 00:00:00', '', 'Published', ''),
(10, 'jeno', 'product updates', 'Deals', 'hello', '2019-06-27 00:00:00', 'prince', 'Published', 'IMG-20190308-WA0015.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `article_coments`
--

CREATE TABLE `article_coments` (
  `id` int(32) NOT NULL,
  `article_id` int(32) NOT NULL,
  `coments` longtext NOT NULL,
  `date` datetime NOT NULL,
  `user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article_coments`
--

INSERT INTO `article_coments` (`id`, `article_id`, `coments`, `date`, `user`) VALUES
(1, 2, 'good', '2019-06-27 00:00:00', 'valan');

-- --------------------------------------------------------

--
-- Table structure for table `article_images`
--

CREATE TABLE `article_images` (
  `id` int(32) NOT NULL,
  `article_id` int(32) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article_images`
--

INSERT INTO `article_images` (`id`, `article_id`, `image`) VALUES
(1, 1, 'download.png'),
(2, 2, 'helping-serve-customers.png'),
(3, 3, 'helping-serve-customers.png'),
(4, 4, ''),
(5, 5, ''),
(6, 6, ''),
(7, 7, ''),
(8, 8, ''),
(9, 9, ''),
(10, 10, 'IMG-20190308-WA0015.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(32) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_details`
--
ALTER TABLE `account_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article_coments`
--
ALTER TABLE `article_coments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article_images`
--
ALTER TABLE `article_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_details`
--
ALTER TABLE `account_details`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `article_coments`
--
ALTER TABLE `article_coments`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `article_images`
--
ALTER TABLE `article_images`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
