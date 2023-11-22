-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2022 at 04:36 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ceylon_fiberio`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `price` double(10,2) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `price`, `description`) VALUES
(1, 'Bristle Fibre     (Kg)', '1.jpg', 400.00, '<b>Description: </b> Strength and versatility of Bristle Fibre allow for it to be cut to specific lengths and used to make a variety of brushes and twines.'),
(2, 'Machine Twisted Fibre     (Kg)', '2.jpg', 75.00, '<b>Description:</b> Machine Twisted Fibre are produced from matured brown fibre widely used for manufacturing coir cushions,etc.'),
(3, 'Coir Fibre Bale     (Kg)', '3.jpg', 98.00, '<b>Description:</b>Coir Fibre Bale can be made to create varying sizes of bedding, sheets, upholstery, seating,drainage filters and erosion control applications.'),
(4, 'Hop Twine     (Kg)', '4.jpg', 100.00, '<b>Description:</b> The strength, texture and versatility of Hop Twine enables stringing hops and other vines, horticulture, gardening, matting and carpet.'),
(5, 'Coconut Husks (Units)', '5.jpg', 7.00, '<b>Description:</b> Types are in raw coconut husks and dry coconut husks. Instead of kilos these can be bought as loads. Price of one coconut husk is LKR 7.'),
(6, 'Cocopeat     (Kg)', '6.jpg', 80.00, '<b>Description:</b> Cocopeat has a unique ability to withstand high .Cocopeat is like a material, high in porosity and water holding capacity, and is ideal for plants.'),
(7, 'Coco Poles     (Units)', '7.jpg', 60.00, '<b>Description:</b>  Used in horticultural farms,plant nurseries, and indoor and outdoor décor.Created by encircling PVC pipes & wood sticks with coir fiber sheets. '),
(8, 'Coco Chips     (Kg)', '8.jpg', 110.00, '<b>Description:</b> Coconut Chips are commonly used as the potting medium for orchids and similar cut-plants.It is an excellent means of balancing air to water ration. '),
(9, 'Cocopeat Blocks     (Kg)', '9.jpg', 1000.00, '<b>Description:</b> Cocopeat Blocks are packaged in pallets or as bales of five pieces each, are mostly used in large quantities to make potting soil or to grow fruits and vegetables in soilless farming.<br><br><br><br>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
