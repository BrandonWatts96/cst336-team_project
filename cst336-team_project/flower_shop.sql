-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2017 at 11:24 PM
-- Server version: 5.5.53-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `flower_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `orderNumber` int(11) NOT NULL,
  `totalAmount` float NOT NULL,
  `date` date NOT NULL,
  `dAddress1` text NOT NULL,
  `dAddress2` text NOT NULL,
  `dZip` int(11) NOT NULL,
  `dCity` int(11) NOT NULL,
  `dState` tinytext NOT NULL,
  `specInstruc` longtext NOT NULL,
  `userId` int(11) NOT NULL,
  PRIMARY KEY (`orderNumber`),
  KEY `orderNumber` (`orderNumber`),
  KEY `userId` (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE IF NOT EXISTS `order_product` (
  `qty` int(11) NOT NULL,
  `orderNumber` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  KEY `orderNumber` (`orderNumber`),
  KEY `productId` (`productId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `productId` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `price` double NOT NULL,
  `productTypeId` int(11) NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`productId`),
  KEY `productTypeId` (`productTypeId`),
  KEY `productId` (`productId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productId`, `name`, `description`, `price`, `productTypeId`, `image`) VALUES
(0, 'Tulips', 'Spring blooming perennials', 1.5, 0, 'tulips.jpg'),
(1, 'Sunflowers', 'Flowers shaped like a sun. Go figure.', 2, 0, 'sunflower.jpg'),
(2, 'Orchids', 'Your mother''s favorite flower.', 15, 0, 'Orchids.jpg'),
(3, 'Red Roses', 'Roses, but red. Always a classic "I''m sorry I forgot your birthday" gift!', 5, 0, 'roses_red.jpg'),
(4, 'Yellow Roses', 'Now in yellow!', 5, 0, 'roses_yellow.jpg'),
(5, 'Pink Roses', 'When you dont like all the red in your roses.', 5, 0, 'roses_pink.jpg'),
(6, 'Lillies', 'A name and also a flower!', 1.5, 0, 'lillies.jpg'),
(7, 'Chrysanthemums', 'Also know as mums. For your mum.', 3, 0, 'chrysanthemums.jpg'),
(8, 'Poppies', 'Great on bagels.', 4, 0, 'poppies.jpg'),
(9, 'Daisies', 'Also a name!', 1.5, 0, 'daisies.jpg'),
(10, 'Daffodils', 'Could not make a joke description of this.', 2, 0, 'daffodils.jpg'),
(11, 'Pinoies', 'Not the plural of Pony.', 7, 0, 'pinoies.jpg'),
(12, 'Hydrangeas', 'The choice flowers of multiple headed serpents everywhere.', 10, 0, 'hydrangeas.jpg'),
(13, 'Lavender', 'Purple flower.', 8, 0, 'lavender.jpg'),
(14, 'Forget Me Not', 'I forgot what these are.', 10, 0, 'forget.jpg'),
(15, 'Baby''s Breath', 'Smells like applesauce and vomit.', 8.5, 0, 'baby.jpg'),
(16, 'Hyacinth', 'Small nice smelling flowers.', 10, 0, 'hyacinth.jpg'),
(17, 'Plumerias', 'A tropical flower. To remind you how much you want to be on vacation.', 15, 0, 'plumerias.jpg'),
(100, 'Rose Bouquet', 'Bouquet of varying color of roses', 30, 1, 'rose_bouquet.jpg'),
(101, 'Tulip Bouquet', 'Bouquet of varying color of tulips', 25, 1, 'tulip_bouquet.jpg'),
(102, 'Lily Bouquet', 'Bouquet of lillies', 20, 1, 'lily_bouquet.jpg'),
(103, 'Sunflower Bouquet', 'Bouquet of flowers shaped like the sun', 20, 1, 'sunflower_bouquet.jpg'),
(104, 'Lavender Bouquet', 'Bouquet of lavender', 20, 1, 'lavender_bouquet.jpg'),
(200, 'Fern', 'You can find this plant in your local favorite dentist office', 15, 2, 'fern.jpg'),
(201, 'Cactus', 'Also can be used as a home defence weapon', 13, 2, 'cactus.jpg'),
(202, 'Burro''s Tail', 'Succulent that resembles an animal tail', 15, 2, 'burro.jpg'),
(203, 'Crown of Thorns', 'Also the name of George RR Martin''s upcoming romantic novel', 15, 2, 'crown.jpg'),
(204, 'Hens-and-Chicks', 'Note: no hatching required', 15, 2, 'hens.jpg'),
(205, 'Jade Plant', 'It is named jade because it is green', 20, 2, 'jade.jpg'),
(206, 'Aole Vera', 'Apply directly to wounds', 12, 2, 'aloe.jpg'),
(207, 'Snake Plant', 'DOES NOT CONTAIN SNAKES', 16, 2, 'snake.jpg'),
(208, 'English Ivy', 'A havard graduate with an accent', 20, 2, 'english.jpg'),
(209, 'Rubber Tree', 'Its a tree that will look perfect next to your front door', 30, 2, 'rubber.jpg'),
(210, 'Peace Lily', 'Give to your arch enemy when you have to work in a group', 15, 2, 'peace.jpg'),
(211, 'Bamboo', 'Its bamboooooooooooo!', 25, 2, 'bamboo.jpg'),
(212, 'Spider Plant', 'DOES NOT CONTAIN SPIDERS', 20, 2, 'spider.jpg'),
(213, 'Golden Pothos', 'Not made of gold', 10, 2, 'pothos.jpg'),
(214, 'Red-Edged Dracaena', 'Gives +6 attack and resist poision', 20, 2, 'dracaena.jpg'),
(215, 'Bonsai', 'Tiny trees for your tiny apartment!', 25, 2, 'bonsai.jpg'),
(300, 'Small Vase', 'A vase, but small', 5, 3, 'small_vase.jpg'),
(301, 'Large Vase', 'A vase, but big!', 15, 3, 'large_vase.jpg'),
(302, 'Clay Pot', 'Pot made out of clay.', 3, 3, 'clay_pot.jpg'),
(303, 'Plant Food', 'Believe it or not, but plants do not only eat pizza rolls', 5, 3, 'plant_food.jpg'),
(304, 'Watering Can', 'Transfer water from your source to your plant', 12, 3, 'watering_can.jpg'),
(305, 'Spray Bottle', 'Perfect for plants, or cats on your counter', 6, 3, 'spray_bottle.jpg'),
(306, 'Gloves', 'Proctect your self from thorns', 7, 3, 'gloves.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE IF NOT EXISTS `product_type` (
  `productTypeId` int(11) NOT NULL,
  `type` text NOT NULL,
  PRIMARY KEY (`productTypeId`),
  UNIQUE KEY `productTypeId_2` (`productTypeId`),
  KEY `productTypeId` (`productTypeId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`productTypeId`, `type`) VALUES
(0, 'Single Flowers'),
(1, 'Bouquet'),
(2, 'Plants'),
(3, 'Other Products');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userId` int(11) NOT NULL,
  `lastName` text NOT NULL,
  `firstName` text NOT NULL,
  `email` text NOT NULL,
  `phone` int(11) NOT NULL,
  `uAddress1` text NOT NULL,
  `uAddress2` text NOT NULL,
  `uZip` int(11) NOT NULL,
  `uCity` text NOT NULL,
  `uState` text NOT NULL,
  PRIMARY KEY (`userId`),
  KEY `userId` (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_product`
--
ALTER TABLE `order_product`
  ADD CONSTRAINT `order_product_ibfk_1` FOREIGN KEY (`orderNumber`) REFERENCES `order` (`orderNumber`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_product_ibfk_2` FOREIGN KEY (`productId`) REFERENCES `product` (`productId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`productTypeId`) REFERENCES `product_type` (`productTypeId`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
