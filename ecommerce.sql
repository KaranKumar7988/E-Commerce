-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2023 at 02:57 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+05:30";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` int(10) NOT NULL,
  `qty` int(11) NOT NULL,
  `subtotal` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_id`, `price`, `qty`, `subtotal`) VALUES
(22, 4, 76, 1, 76),
(26, 12, 78, 1, 78),
(28, 6, 76, 1, 76);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_type` varchar(255) NOT NULL,
  `list` varchar(255) NOT NULL,
  `price` int(10) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_type`, `list`, `price`, `image`) VALUES
(1, 'Adidas', 'Anime T-Shirts', 'Featured', 59, 'images/shirt1.jpeg'),
(2, 'Adidas', 'Anime T-Shirts', 'Featured', 76, 'images/new4.1.jpg'),
(3, 'Adidas', 'Anime T-Shirts', 'Featured', 79, 'images/shirt4.jpeg'),
(4, 'Adidas', 'Anime T-Shirts', 'Featured', 76, 'images/shirt3.jpeg'),
(5, 'Adidas', 'Anime T-Shirts', 'Featured', 76, 'images/new1.1.jpg'),
(6, 'Adidas', 'Anime T-Shirts', 'Featured', 76, 'images/new2.1.jpeg'),
(7, 'Adidas', 'Anime T-Shirts', 'Featured', 76, 'images/new4.1.jpg'),
(8, 'Adidas', 'Anime T-Shirts', 'New', 76, 'images/new5.1.webp'),
(9, 'Adidas', 'Anime T-Shirts', 'Featured', 78, 'images/shirt1.jpeg'),
(11, 'Adidas', 'Anime T-Shirts', 'New', 78, 'images/new8.1.jpg'),
(12, 'Adidas', 'Anime T-Shirts', 'New', 78, 'images/new7.1.jpg'),
(13, 'Adidas', 'Anime T-Shirts', 'New', 78, 'images/new6.1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
