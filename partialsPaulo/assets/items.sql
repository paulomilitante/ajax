-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2018 at 09:58 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `burger`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` decimal(65,2) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `description`, `image`, `price`, `category_id`) VALUES
(1, 'Angus Burger', 'Juicy Burger, our bestseller!', 'http://www.fjparis.com//assets/images/food_img/bakery/Burger.jpg', '150.00', 1),
(2, 'Dirty Fries', 'Perfect side dish for our burger!', 'http://8exll2rwl8l1f2ayejq2l9yh.wpengine.netdna-cdn.com/wp-content/uploads/2015/05/bacon-ranch-chili-cheese-fries.jpg', '110.00', 2),
(3, 'Cola', 'Quench your thirst!', 'https://images-na.ssl-images-amazon.com/images/I/41Zm4cCRhtL._SX342_.jpg', '75.00', 3),
(4, 'Classic Spaghetti', 'Favorite Italian dish!', 'https://d2gg9evh47fn9z.cloudfront.net/800px_COLOURBOX1767818.jpg', '150.00', 1),
(5, 'Fried Chicken', 'Crispy and juicy fried chicken!', 'http://www.seriouseats.com/recipes/images/2012/01/20120112-popeyes-refried-chicken-6.jpg', '150.00', 1),
(6, 'Pizza', 'Perfect group meal!', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR3cK7EwFSGqbDOVRHbOw6y1Zv4T4dkbib-gV9BUbLnAB2qemLg', '200.00', 4),
(7, 'Asian Nachos', 'The best appetizer!', 'https://www.buffalowildwings.com/globalassets/menuitems/10120006-ultimate-nachos.png?format=jpg&width=900&v=2', '190.00', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
