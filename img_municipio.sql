-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2017 at 12:12 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ataco`
--

-- --------------------------------------------------------

--
-- Table structure for table `img_municipio`
--

CREATE TABLE `img_municipio` (
  `idImg_Municipio` int(11) NOT NULL,
  `ruta` varchar(100) NOT NULL,
  `idMunicipio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `img_municipio`
--

INSERT INTO `img_municipio` (`idImg_Municipio`, `ruta`, `idMunicipio`) VALUES
(1, '/Ataco/img/Concepcion_ataco.jpg', 1),
(2, '/Ataco/img/Img8.jpg', 1),
(3, '/Ataco/img/ATF1/ATF11.jpg', 1),
(4, '/Ataco/img/ATF1/atf44.jpg', 1),
(5, '/Ataco/img/ATF1/ATF2222.jpg', 1),
(6, '/Ataco/img/ATF1/ATF1.jpg', 1),
(7, '/Ataco/img/ATF1/atf55.jpg', 1),
(8, '/Ataco/img/ATF1/ATF1111.jpg', 1),
(9, '/Ataco/img/ATF1/ATF4.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `img_municipio`
--
ALTER TABLE `img_municipio`
  ADD PRIMARY KEY (`idImg_Municipio`),
  ADD KEY `fk_imgMunicipio` (`idMunicipio`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `img_municipio`
--
ALTER TABLE `img_municipio`
  MODIFY `idImg_Municipio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `img_municipio`
--
ALTER TABLE `img_municipio`
  ADD CONSTRAINT `fk_imgMunicipio` FOREIGN KEY (`idMunicipio`) REFERENCES `municipio` (`idMunicipio`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
