-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2017 at 10:23 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gulp`
--

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre`, `descripcion`) VALUES
(1, 'YES', 'YES'),
(2, 'ads', 'asd'),
(4, 'Bolsa Nova', 'Bolsas reciclables'),
(7, 'asdÃ­a', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `producto_descripcion`
--

CREATE TABLE `producto_descripcion` (
  `id_descripcion` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `descripcion` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `producto_descripcion`
--

INSERT INTO `producto_descripcion` (`id_descripcion`, `id_producto`, `descripcion`) VALUES
(1, 0, 'asd'),
(3, 1, 'algo es algo'),
(4, 4, 'desc1'),
(5, 4, 'desc2'),
(6, 4, 'desc3'),
(15, 4, 'descripciÃ³n pÃ¡rrafo descripciÃ³n pÃ¡rrafo descripciÃ³n pÃ¡rrafo descripciÃ³n pÃ¡rrafo');

-- --------------------------------------------------------

--
-- Table structure for table `producto_multimedia`
--

CREATE TABLE `producto_multimedia` (
  `id_multimedia` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `multimedia` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `producto_multimedia`
--

INSERT INTO `producto_multimedia` (`id_multimedia`, `id_producto`, `multimedia`) VALUES
(3, 1, '2017615205956ico.jpg'),
(4, 1, '201761521010ver.jpeg'),
(6, 1, '201761521134xls - copia.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indexes for table `producto_descripcion`
--
ALTER TABLE `producto_descripcion`
  ADD PRIMARY KEY (`id_descripcion`,`id_producto`);

--
-- Indexes for table `producto_multimedia`
--
ALTER TABLE `producto_multimedia`
  ADD PRIMARY KEY (`id_multimedia`,`id_producto`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `producto_descripcion`
--
ALTER TABLE `producto_descripcion`
  MODIFY `id_descripcion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `producto_multimedia`
--
ALTER TABLE `producto_multimedia`
  MODIFY `id_multimedia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
