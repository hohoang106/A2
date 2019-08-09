-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 24, 2018 at 03:30 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `customerid` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `street` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zip` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`customerid`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerid`, `email`, `firstname`, `lastname`, `street`, `city`, `state`, `zip`, `phone`, `password`) VALUES
(1, 'quoctai@gmail.com', 'Tai 3', 'Nguyen', NULL, NULL, NULL, NULL, NULL, '123123'),
(2, 'conghung@gmail.com', 'Hung', 'Tran', NULL, NULL, NULL, NULL, NULL, '456456');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `customerid` int(11) NOT NULL,
  `total` decimal(12,2) DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`order_id`),
  KEY `customerid` (`customerid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

DROP TABLE IF EXISTS `order_details`;
CREATE TABLE IF NOT EXISTS `order_details` (
  `order_detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `quantity` int(10) DEFAULT NULL,
  `price` decimal(12,2) DEFAULT NULL,
  `ship_date` datetime DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`order_detail_id`),
  KEY `order_id` (`order_id`),
  KEY `productid` (`productid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `productid` int(11) NOT NULL AUTO_INCREMENT,
  `productname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `by_user` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`productid`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productid`, `productname`, `price`, `description`, `image`, `by_user`) VALUES
(1, 'APPLE IPAD AIR 3', '399.99', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut risus pharetra, posuere enim in, hendrerit lorem. Integer lobortis quis urna lacinia feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut risus pharetra, posuere enim in, hendrerit lorem. Integer lobortis quis urna lacinia feugiat. Mauris laoreet sollicitudin purus vitae vehicula. Cras malesuada odio eu congue egestas. Nunc quis velit tempus, luctus velit sed, tincidunt risus. In bibendum non augue nec laoreet.', 'https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/image/AppleInc/aos/published/images/r/fb/rfb/ipad/rfb-ipad-air-gold-wifi-2014?wid=572&hei=572&fmt=jpeg&qlt=95&op_usm=0.5,0.5&.v=1542397510629', 'admin'),
(2, 'LAWN MOWERS ZIP BLACK + DECKER 1200W', '79.99', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut risus pharetra, posuere enim in, hendrerit lorem. Integer lobortis quis urna lacinia feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut risus pharetra, posuere enim in, hendrerit lorem. Integer lobortis quis urna lacinia feugiat. Mauris laoreet sollicitudin purus vitae vehicula. Cras malesuada odio eu congue egestas. Nunc quis velit tempus, luctus velit sed, tincidunt risus. In bibendum non augue nec laoreet.', 'https://templates.joomla-monster.com/joomla30/jm-product-catalog/media/djcatalog2/images/item/0/black-decker-1200w_l.jpg', 'admin'),
(3, 'IRONS TEFAL ULTIMATE ANTI-CALC', '79.99', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut risus pharetra, posuere enim in, hendrerit lorem. Integer lobortis quis urna lacinia feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut risus pharetra, posuere enim in, hendrerit lorem. Integer lobortis quis urna lacinia feugiat. Mauris laoreet sollicitudin purus vitae vehicula. Cras malesuada odio eu congue egestas. Nunc quis velit tempus, luctus velit sed, tincidunt risus. In bibendum non augue nec laoreet.', 'https://templates.joomla-monster.com/joomla30/jm-product-catalog/media/djcatalog2/images/item/0/tefal-ultimate-anti-calc_l.jpg', 'admin'),
(4, 'GRILL BARBECUE STAINLESS STEEL GAS GRILL', '179.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut risus pharetra, posuere enim in, hendrerit lorem. Integer lobortis quis urna lacinia feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut risus pharetra, posuere enim in, hendrerit lorem. Integer lobortis quis urna lacinia feugiat. Mauris laoreet sollicitudin purus vitae vehicula. Cras malesuada odio eu congue egestas. Nunc quis velit tempus, luctus velit sed, tincidunt risus. In bibendum non augue nec laoreet.', 'https://templates.joomla-monster.com/joomla30/jm-product-catalog/media/djcatalog2/images/item/0/stainless-steel-gas-grill_l.jpg', 'admin'),
(5, 'GRILL BARBECUE KETTLE CHARCOAL BARBECUE', '69.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut risus pharetra, posuere enim in, hendrerit lorem. Integer lobortis quis urna lacinia feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut risus pharetra, posuere enim in, hendrerit lorem. Integer lobortis quis urna lacinia feugiat. Mauris laoreet sollicitudin purus vitae vehicula. Cras malesuada odio eu congue egestas. Nunc quis velit tempus, luctus velit sed, tincidunt risus. In bibendum non augue nec laoreet.', 'https://templates.joomla-monster.com/joomla30/jm-product-catalog/media/djcatalog2/images/item/0/kettle-charcoal-barbecue_l.jpg', 'admin'),
(6, 'LAWN MOWERS BOSCH ROTAK 32R ELECTRIC', '59.99', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut risus pharetra, posuere enim in, hendrerit lorem. Integer lobortis quis urna lacinia feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut risus pharetra, posuere enim in, hendrerit lorem. Integer lobortis quis urna lacinia feugiat. Mauris laoreet sollicitudin purus vitae vehicula. Cras malesuada odio eu congue egestas. Nunc quis velit tempus, luctus velit sed, tincidunt risus. In bibendum non augue nec laoreet.', 'https://templates.joomla-monster.com/joomla30/jm-product-catalog/media/djcatalog2/images/item/0/bosch-rotak-32r-electric_l.jpg', 'admin'),
(7, 'CHROME FINISHED LIGHT', '299.99', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut risus pharetra, posuere enim in, hendrerit lorem. Integer lobortis quis urna lacinia feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut risus pharetra, posuere enim in, hendrerit lorem. Integer lobortis quis urna lacinia feugiat. Mauris laoreet sollicitudin purus vitae vehicula. Cras malesuada odio eu congue egestas. Nunc quis velit tempus, luctus velit sed, tincidunt risus. In bibendum non augue nec laoreet.', 'https://templates.joomla-monster.com/joomla30/jm-product-catalog/media/djcatalog2/images/item/0/chrome-finished-light_l.jpg', 'admin'),
(8, 'SAMSUNG GALAXY 9.7-INCH', '269.99', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut risus pharetra, posuere enim in, hendrerit lorem. Integer lobortis quis urna lacinia feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut risus pharetra, posuere enim in, hendrerit lorem. Integer lobortis quis urna lacinia feugiat. Mauris laoreet sollicitudin purus vitae vehicula. Cras malesuada odio eu congue egestas. Nunc quis velit tempus, luctus velit sed, tincidunt risus. In bibendum non augue nec laoreet.', 'https://templates.joomla-monster.com/joomla30/jm-product-catalog/media/djcatalog2/images/item/0/samsung-galaxy-9-7-inch_l.jpg', 'admin'),
(9, 'RYOBI LAWNMOWER', '159.99', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut risus pharetra, posuere enim in, hendrerit lorem. Integer lobortis quis urna lacinia feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut risus pharetra, posuere enim in, hendrerit lorem. Integer lobortis quis urna lacinia feugiat. Mauris laoreet sollicitudin purus vitae vehicula. Cras malesuada odio eu congue egestas. Nunc quis velit tempus, luctus velit sed, tincidunt risus. In bibendum non augue nec laoreet.', 'https://templates.joomla-monster.com/joomla30/jm-product-catalog/media/djcatalog2/images/item/0/ryobi-lawnmower_l.jpg', 'admin'),
(10, 'ELECTRIC BBQ GRILL', '49.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut risus pharetra, posuere enim in, hendrerit lorem. Integer lobortis quis urna lacinia feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut risus pharetra, posuere enim in, hendrerit lorem. Integer lobortis quis urna lacinia feugiat. Mauris laoreet sollicitudin purus vitae vehicula. Cras malesuada odio eu congue egestas. Nunc quis velit tempus, luctus velit sed, tincidunt risus. In bibendum non augue nec laoreet.', 'https://templates.joomla-monster.com/joomla30/jm-product-catalog/media/djcatalog2/images/item/0/electric-bbq-grill_l.jpg', 'admin'),
(11, 'MINI BATHROOM CEILING LIGHT', '17.99', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut risus pharetra, posuere enim in, hendrerit lorem. Integer lobortis quis urna lacinia feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut risus pharetra, posuere enim in, hendrerit lorem. Integer lobortis quis urna lacinia feugiat. Mauris laoreet sollicitudin purus vitae vehicula. Cras malesuada odio eu congue egestas. Nunc quis velit tempus, luctus velit sed, tincidunt risus. In bibendum non augue nec laoreet.', 'https://templates.joomla-monster.com/joomla30/jm-product-catalog/media/djcatalog2/images/item/0/mini-bathroom-ceiling-light_l.jpg', 'admin'),
(12, 'DELL INSPIRON 22-3000 SERIES', '499.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut risus pharetra, posuere enim in, hendrerit lorem. Integer lobortis quis urna lacinia feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut risus pharetra, posuere enim in, hendrerit lorem. Integer lobortis quis urna lacinia feugiat. Mauris laoreet sollicitudin purus vitae vehicula. Cras malesuada odio eu congue egestas. Nunc quis velit tempus, luctus velit sed, tincidunt risus. In bibendum non augue nec laoreet.', 'https://templates.joomla-monster.com/joomla30/jm-product-catalog/media/djcatalog2/images/item/0/dell-inspiron-22-3000-series_l.jpg', 'admin'),
(13, 'SPOTLIGHT CEILING BAR', '44.99', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut risus pharetra, posuere enim in, hendrerit lorem. Integer lobortis quis urna lacinia feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut risus pharetra, posuere enim in, hendrerit lorem. Integer lobortis quis urna lacinia feugiat. Mauris laoreet sollicitudin purus vitae vehicula. Cras malesuada odio eu congue egestas. Nunc quis velit tempus, luctus velit sed, tincidunt risus. In bibendum non augue nec laoreet.', 'https://templates.joomla-monster.com/joomla30/jm-product-catalog/media/djcatalog2/images/item/0/spotlight-ceiling-bar_l.jpg', 'admin');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customerid`) REFERENCES `customers` (`customerid`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`),
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`productid`) REFERENCES `products` (`productid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
