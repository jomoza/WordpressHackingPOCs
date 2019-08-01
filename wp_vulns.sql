-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 29, 2019 at 04:30 PM
-- Server version: 5.7.27-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jomozascave`
--

-- --------------------------------------------------------

--
-- Table structure for table `wp_vulns`
--

CREATE TABLE `wp_vulns` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `need` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wp_vulns`
--

INSERT INTO `wp_vulns` (`id`, `name`, `type`, `need`) VALUES
(2, 'WordPress Plugin Product Catalog 8 1.2.0', 'sqli', 0),
(3, 'WordPress Plugin Email Subscribers & Newsletters 3.4.7 - Information Disclosure', 'leak', 0),
(5, 'WordPress Plugin Metronet Tag Manager 1.2.7', 'xss', 1),
(6, 'WordPress Plugin WP with Spritz 1.0 ', 'file_upload', 0),
(7, 'WordPress Plugin Smart Google Code Inserter < 3.5', 'xss', 0),
(8, 'WordPress Plugin Reflex Gallery 3.1.3', 'file_upload', 0),
(9, 'WordPress Contact Form Maker Plugin 1.12.20', 'sqli', 1),
(10, 'WordPress Plugin Pie Register < 3.0.9', 'sqli', 1),
(11, 'WordPress Plugin JTRT Responsive Tables 4.1', 'sqli', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wp_vulns`
--
ALTER TABLE `wp_vulns`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wp_vulns`
--
ALTER TABLE `wp_vulns`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
