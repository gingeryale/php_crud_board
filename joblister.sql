-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 24, 2019 at 01:42 PM
-- Server version: 10.3.16-MariaDB
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
-- Database: `joblister`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(5, 'B2B'),
(6, 'Technology'),
(7, 'Construction'),
(8, 'Retail');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `company` varchar(225) NOT NULL,
  `job_title` varchar(225) NOT NULL,
  `job_description` varchar(225) NOT NULL,
  `salary` varchar(225) NOT NULL,
  `location` varchar(225) NOT NULL,
  `contact_user` varchar(225) NOT NULL,
  `contact_email` varchar(225) NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `category_id`, `company`, `job_title`, `job_description`, `salary`, `location`, `contact_user`, `contact_email`, `post_date`) VALUES
(1, 5, 'JP Financials', 'B2B Finances Accountant', 'Lower Manhattan Financial District world capital management Omega Funds', '1000000', 'FIDI', 'Larry Larrinson', 'larry@jpf.com', '2019-11-11 09:53:01'),
(2, 6, 'Tech Magic', 'Webmaster', 'I can\'t get a job to save my life!', '10', 'Springfield', 'Ghostly Ghost', 'gg@techmagic.com', '2019-11-11 09:53:01'),
(3, 7, 'Sal Construction', 'Architect  ', 'Downtown Brooklyn business center world class Omega condos', '10000000', 'Heights', 'Sal Molino', 'sal@bc.com', '2019-11-11 09:53:01'),
(4, 8, 'Kmart Wholesaler', 'Wholesales Associate', 'Sellers of the finest cheap stuff you can imagine and some you cannot', '1000', 'astor place', 'Jamal Carey', 'jamalc@kmart.com', '2019-11-11 09:53:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
