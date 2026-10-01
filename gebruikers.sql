-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2026 at 02:48 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `security_playground`
--

-- --------------------------------------------------------

--
-- Table structure for table `gebruikers`
--

CREATE TABLE `gebruikers` (
  `id` int(11) NOT NULL,
  `gebruikersnaam` varchar(50) NOT NULL,
  `wachtwoord` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gebruikers`
--

INSERT INTO `gebruikers` (`id`, `gebruikersnaam`, `wachtwoord`) VALUES
(1, 'Koen', 'ditismijnwachtwoord'),
(2, 'Estelle', 'Lekkerbekkie18!'),
(3, 'Admin123', 'HeelGeheim67');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gebruikers`
--
ALTER TABLE `gebruikers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gebruikers`
--
ALTER TABLE `gebruikers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
