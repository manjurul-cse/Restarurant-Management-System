-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 31, 2013 at 03:42 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `restaurent`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `topic` varchar(250) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `full_name`, `email`, `topic`, `message`) VALUES
(2, 'man', 'plabon1992@gmail.com', 'food', 'abvfsb'),
(10, 'raat', 'raat@yahoo.com', 'gfdrg', ''),
(11, 'raat', 'raat@yahoo.com', 'gfdrg', ''),
(12, 'raat', 'gdg', 'dhtfytrh', 'fhfghfgh');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE IF NOT EXISTS `restaurant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `restaurent_name` varchar(255) DEFAULT NULL,
  `Category` varchar(200) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `price` varchar(20) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=235 ;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`id`, `restaurent_name`, `Category`, `product_name`, `price`, `image`) VALUES
(1, 'cfc', 'fast_food', 'New fried Meal Regular/Spicy', 'Tk:240.00', '../images/Chicken Meal1.png'),
(2, 'cfc', 'fast_food', 'Fried Chicken family Box -12pcs ', 'Tk:1240.00', '../images/Chicken Meal2.png '),
(3, 'cfc', 'fast_food', 'Chicken Broast- 1/4 ', 'Tk:240.00 ', '../images/Chicken Meal3.png '),
(4, 'cfc', 'fast_food', 'BAR-B-Q Chicken-1/4 Spic', 'Tk:250.00 ', '../images/Chicken Meal4.png'),
(5, 'cfc', 'fast_food', 'Chicken Wings-6Pcs ', ' Tk:210.00', '../images/Chicken Meal5.png '),
(6, 'cfc', 'fast_food', 'Crispy Chicken Burger Regular/Cheese ', 'TK:170/190 ', '../images/Chicken Meal6.png '),
(7, 'cfc', 'fast_food', 'Beef Burger Regular/Cheese ', 'TK:190/210 ', '../images/Chicken Meal7.png'),
(8, 'cfc', 'fast_food', ' Grilled Fish Steak Burger Regular/Cheese', ' TK:250/270', '../images/Chicken Meal8.png'),
(9, 'cfc', 'fast food', 'Angry Burger Regular/Cheese ', 'tk:180/200', '../images/Chicken-Meal10.png'),
(10, 'Star Kabab ', 'fast_food', 'Beef Sheek Kabab', 'Tk:65', '../images/img-not.jpg'),
(11, 'Star Kabab ', 'fast_food', 'Mutton Botty Kabab', 'Tk:75', '../images/img-not.jpg'),
(12, 'Star Kabab ', 'fast_food', 'Chicken Tikka', 'Tk:75', '../images/img-not.jpg'),
(13, 'Star Kabab ', 'fast_food', 'Chicken Jhal Fry Plate', 'Tk:170', '../images/img-not.jpg'),
(14, 'Star Kabab ', 'fast_food', 'Chicken Jhal Fry Half ', 'Tk:85', '../images/img-not.jpg'),
(15, 'Star Kabab ', 'fast_food', 'Mutton Jhal Fry ', 'Tk:190', '../images/img-not.jpg'),
(16, 'Star Kabab ', 'fast_food', 'Chicken Liver Jhal Fry', 'Tk:170', '../images/img-not.jpg'),
(17, 'Star Kabab ', 'fast_food', 'Brain Masala', 'Tk:170', '../images/img-not.jpg'),
(18, 'Star Kabab ', 'fast_food', 'Ghurda Jhal Fry ', 'Tk:190', '../images/img-not.jpg'),
(19, 'Star Kabab ', 'fast_food', 'Chicken Rashmi Kabab', 'Tk:90', '../images/img-not.jpg'),
(20, 'Star Kabab ', 'fast_food', 'Beef Roll', 'Tk:80', '../images/img-not.jpg'),
(21, 'Star Kabab ', 'fast_food', 'Mutton Roll', 'Tk:90', '../images/img-not.jpg'),
(22, 'Star Kabab ', 'fast_food', 'Chicken Rashmi Roll', 'Tk:105', '../images/img-not.jpg'),
(23, 'Star Kabab ', 'fast_food', 'Chicken Roll', 'Tk:90', '../images/img-not.jpg'),
(24, 'Star Kabab ', 'fast_food', 'Khiri Kabab', 'Tk:75', '../images/img-not.jpg'),
(25, 'Star Kabab ', 'fast_food', 'Ghurda Kabab', 'Tk:75', '../images/img-not.jpg'),
(26, 'Star Kabab ', 'fast_food', 'Parata', 'Tk:15', '../images/img-not.jpg'),
(27, 'Star Kabab ', 'fast_food', 'Special Nan', 'Tk:15', '../images/img-not.jpg'),
(28, 'Pizza Hut', 'fast_food', 'Rustica', 'Tk:300', '../images/img-not.jpg'),
(29, 'Pizza Hut', 'fast_food', 'Garlic bread', 'Tk:130', '../images/img-not.jpg'),
(30, 'Pizza Hut', 'fast_food', 'Garlic bread cheese', 'Tk:230', '../images/img-not.jpg'),
(31, 'Pizza Hut', 'fast_food', 'Garlic bread platter', 'Tk:280', '../images/img-not.jpg'),
(32, 'Pizza Hut', 'fast_food', 'Fried/Baked potato wedges', 'Tk:180', '../images/img-not.jpg'),
(33, 'Pizza Hut', 'fast_food', 'Shrimp cocktail', 'Tk:280', '../images/img-not.jpg'),
(34, 'Pizza Hut', 'fast_food', 'Spicy garlic mushrooms', 'Tk:380', '../images/img-not.jpg'),
(35, 'Pizza Hut', 'fast_food', 'Garen salad', 'Tk:200', '../images/img-not.jpg'),
(36, 'Pizza Hut', 'fast_food', 'Topical chicken salad', 'Tk:400', '../images/img-not.jpg'),
(37, 'Pizza Hut', 'fast_food', 'Chicken Arabiatta', 'Tk:450', '../images/img-not.jpg'),
(38, 'Pizza Hut', 'fast_food', 'Chicken mushroom', 'Tk:500', '../images/img-not.jpg'),
(39, 'Pizza Hut', 'fast_food', 'Spanish Delight', 'Tk:1150', '../images/img-not.jpg'),
(40, 'Pizza Hut', 'fast_food', 'Red n Hot', 'Tk:1150', '../images/img-not.jpg'),
(41, 'Pizza Hut', 'fast_food', 'Latin spicy Hot', 'Tk:1300', '../images/img-not.jpg'),
(42, 'Pizza Hut', 'fast_food', 'Chicken italia', 'Tk:1350', '../images/img-not.jpg'),
(43, 'Pizza Hut', 'fast_food', 'Florence Chicken', 'Tk:1300', '../images/img-not.jpg'),
(44, 'Pizza Hut', 'fast_food', 'Cheese lover', 'Tk:250', '../images/img-not.jpg'),
(45, 'Pizza Hut', 'fast_food', 'Classic Margherita', 'Tk:250', '../images/img-not.jpg'),
(46, 'Pizza Hut', 'fast_food', 'Beef lovers', 'Tk:300', '../images/img-not.jpg'),
(47, 'Pizza Hut', 'fast_food', 'BBQ chicken', 'Tk:300', '../images/img-not.jpg'),
(48, 'La Bamba', 'fast_food', 'Cheese Burger ( Chicken/Beef) ', 'Tk:130', '../images/img-not.jpg'),
(49, 'La Bamba', 'fast_food', 'Burger ( Chicken/Beef) ', 'Tk:110', '../images/img-not.jpg'),
(50, 'La Bamba', 'fast_food', 'Chicken Club Sandwich ', 'Tk:50', '../images/img-not.jpg'),
(51, 'La Bamba', 'fast_food', 'Beef Club Sandwich ', 'Tk:95', '../images/img-not.jpg'),
(52, 'La Bamba', 'fast_food', 'Chicken Sandwich ', 'Tk:35', '../images/img-not.jpg'),
(53, 'La Bamba', 'fast_food', 'Vegetable Sandwich', 'Tk:40', '../images/img-not.jpg'),
(54, 'La Bamba', 'fast_food', 'Chicken Patties ', 'Tk:45', '../images/img-not.jpg'),
(55, 'La Bamba', 'fast_food', 'Beef Patties', 'Tk:45', '../images/img-not.jpg'),
(56, 'La Bamba', 'fast_food', 'Mutton Patties', 'Tk:45', '../images/img-not.jpg'),
(57, 'La Bamba', 'fast_food', 'Vegetable Patties', 'Tk:35', '../images/img-not.jpg'),
(58, 'La Bamba', 'fast_food', ' Beef Hot Dog   ', 'Tk:85', '../images/img-not.jpg'),
(59, 'La Bamba', 'fast_food', 'Chicken With Mushroom Pizza', 'Tk:90', '../images/img-not.jpg'),
(60, 'La Bamba', 'fast_food', 'Mutton with Mushroom Pizza ', 'Tk:120', '../images/img-not.jpg'),
(61, 'La Bamba', 'fast_food', 'Chicken/ Beef Pizza ', 'Tk:95', '../images/img-not.jpg'),
(62, 'La Bamba', 'fast_food', 'Fried Chicken Big ', 'Tk:115', '../images/img-not.jpg'),
(63, 'korai gost', 'bangla', 'Special korai gost ', 'Tk:250', '../images/img-not.jpg'),
(64, 'korai gost', 'bangla', 'Chicken jhal fry vuna khichuri ', 'Tk:250', '../images/img-not.jpg'),
(65, 'korai gost', 'bangla', 'Chicken jhal fry biriyani ', 'Tk:250', '../images/img-not.jpg'),
(66, 'korai gost', 'bangla', ' Special khichuri', 'Tk:160', '../images/img-not.jpg'),
(67, 'korai gost', 'bangla', 'Special khasi vuna ', 'Tk:160', '../images/img-not.jpg'),
(68, 'korai gost', 'bangla', 'Chicken corn soup ', 'Tk:160', '../images/img-not.jpg'),
(69, 'korai gost', 'bangla', 'Fried chicken', 'Tk:265', '../images/img-not.jpg'),
(70, 'korai gost', 'bangla', 'Beef achari jhal fry', 'Tk:265', '../images/img-not.jpg'),
(71, 'korai gost', 'bangla', ' Chicken khichuri', 'Tk:160', '../images/img-not.jpg'),
(72, 'korai gost', 'bangla', 'Mutton khichuri ', 'Tk:160', '../images/img-not.jpg'),
(73, 'korai gost', 'bangla', 'Kassi polaw/sada polaw/plain Kahichuri ', 'Tk:90', '../images/img-not.jpg'),
(74, 'korai gost', 'bangla', 'Special mixed sobgi ', 'Tk:80', '../images/img-not.jpg'),
(75, 'korai gost', 'bangla', 'Khasir rezala(2-pcs)  ', 'Tk:200', '../images/img-not.jpg'),
(76, 'korai gost', 'bangla', 'Chicken taua jhal fry ', 'Tk:295', '../images/img-not.jpg'),
(77, 'korai gost', 'bangla', 'Chicken copta ', 'Tk:220', '../images/img-not.jpg'),
(78, 'korai gost', 'Thai & Chinis', 'Chicken corn soup,fried rice,fried chicken,mixed vegetable,salad', 'Tk:220', '../images/img-not.jpg'),
(79, 'korai gost', 'Thai & Chinis', 'Chicken corn soup,fried rice,fried chicken,mixed vegetable,salad,prawn chilli pasta', 'Tk:290', '../images/img-not.jpg'),
(80, 'korai gost', 'Thai & Chinis', 'Chicken vegetable,fried noodles,fried chicken,salad', 'Tk:220', '../images/img-not.jpg'),
(81, 'korai gost', 'Thai & Chinis', 'Chicken/prawn on toast', 'Tk:250', '../images/img-not.jpg'),
(82, 'korai gost', 'Thai & Chinis', 'Chicken/prawn ball', 'Tk:230', '../images/img-not.jpg'),
(83, 'korai gost', 'Thai & Chinis', 'Chicken/prawn ball', 'Tk:220', '../images/img-not.jpg'),
(84, 'korai gost', 'Thai & Chinis', 'Chicken vegetable soup', 'Tk200:', '../images/img-not.jpg'),
(85, 'korai gost', 'Thai & Chinis', 'Fried rice chicken/beef/prawn', 'Tk:240', '../images/img-not.jpg'),
(86, 'korai gost', 'Thai & Chinis', 'Special prawn chilli pasta', 'Tk:280', '../images/img-not.jpg'),
(87, 'korai gost', 'Thai & Chinis', 'Beef chilli onion', 'Tk:250', '../images/img-not.jpg'),
(88, 'korai gost', 'Thai & Chinis', 'Korai gost special soup', 'Tk:280', '../images/img-not.jpg'),
(89, 'korai gost', 'Thai & Chinis', 'Korai gost special rice', 'Tk:280', '../images/img-not.jpg'),
(90, 'korai gost', 'Thai & Chinis', 'Chicken with green/redchilli', 'Tk:320', '../images/img-not.jpg'),
(91, 'korai gost', 'Thai & Chinis', 'Fried prawn with garlic pepper', 'Tk:310', '../images/img-not.jpg'),
(92, 'korai gost', 'Thai & Chinis', 'Deep fried red smapper with chilli pasta', 'Tk:450', '../images/img-not.jpg'),
(93, 'korai gost', 'indian', 'Buttter nan,chicken jhal fry,vegetable jhal fry,mixed salad', 'Tk:220', '../images/img-not.jpg'),
(94, 'korai gost', 'indian', 'Buttter nan,beef vhuna, pakura,mixed salad', 'Tk:240', '../images/img-not.jpg'),
(95, 'korai gost', 'indian', 'Hyderabadi dum biriyani', 'Tk:180', '../images/img-not.jpg'),
(96, 'korai gost', 'indian', 'Garlic nan,chicken tikka kabab,mixed vegetable,mixed salad', 'Tk:250', '../images/img-not.jpg'),
(97, 'korai gost', 'indian', 'Chicken pakura', 'Tk:250', '../images/img-not.jpg'),
(98, 'korai gost', 'indian', 'Mulligatawny soup', 'Tk:250', '../images/img-not.jpg'),
(99, 'korai gost', 'indian', 'Mixed raita', 'Tk:180', '../images/img-not.jpg'),
(100, 'korai gost', 'indian', 'Poneer tikka kabab', 'Tk:350', '../images/img-not.jpg'),
(101, 'korai gost', 'indian', 'Boneless chicken bharta', 'Tk:380', '../images/img-not.jpg'),
(102, 'korai gost', 'indian', 'Mutton korai gost', 'Tk:350', '../images/img-not.jpg'),
(103, 'korai gost', 'indian', 'Prawn mulai curry', 'Tk:350', '../images/img-not.jpg'),
(104, 'korai gost', 'indian', 'Veg.malai kofta', 'Tk:250', '../images/img-not.jpg'),
(105, 'korai gost', 'indian', 'Hydarabadi biryani', 'Tk:250', '../images/img-not.jpg'),
(106, 'korai gost', 'indian', 'Kashmiri polaw', 'Tk:250', '../images/img-not.jpg'),
(107, 'korai gost', 'indian', 'Fish butter masala', 'Tk:350', '../images/img-not.jpg'),
(108, 'KFC', 'fast_food', 'Snacker', 'Tk:95', '../images/img-not.jpg'),
(109, 'KFC', 'fast_food', 'Snacker Box ', 'Tk:160', '../images/img-not.jpg'),
(110, 'KFC', 'fast_food', ' Strips Snack Box', 'Tk:170', '../images/img-not.jpg'),
(111, 'KFC', 'fast_food', 'Chicken Snack Box', 'Tk:150', '../images/img-not.jpg'),
(112, 'KFC', 'fast_food', 'Burger / With Cheese', 'Tk:200/235', '../images/img-not.jpg'),
(113, 'KFC', 'fast_food', 'Boneless Chicken Strips 3/6 pcs ', 'Tk:195/385', '../images/img-not.jpg'),
(114, 'KFC', 'fast_food', 'Hot Wings 3/6 pcs', 'Tk:140/275', '../images/img-not.jpg'),
(115, 'KFC', 'fast_food', 'Chicken Rice Meal', 'Tk:175', '../images/img-not.jpg'),
(116, 'KFC', 'fast_food', 'Spicy Thai Chicken Rice', 'Tk:260', '../images/img-not.jpg'),
(117, 'KFC', 'fast_food', 'Hot Zinger Fries Meal / Hot Zinger Meal  ', 'Tk:360/390', '../images/img-not.jpg'),
(118, 'KFC', 'fast_food', 'Zinger Fries Meal/ Zinger Meal', 'Tk:350/370', '../images/img-not.jpg'),
(119, 'KFC', 'fast_food', 'Regular Bucket(8 pcs) / Large Bucket (12 pcs)', 'Tk:790/1175', '../images/img-not.jpg'),
(120, 'KFC', 'fast_food', 'Twister Meal ', 'Tk:330', '../images/img-not.jpg'),
(121, 'KFC', 'fast_food', 'Boneless Chicken Strips Meal', 'Tk:300', '../images/img-not.jpg'),
(122, 'KFC', 'fast_food', '2 Pcs Chicken Fries Meal', 'Tk:330', '../images/img-not.jpg'),
(123, 'KFC', 'fast_food', 'Family Meal(meal for 4)/ Variety Meal( meal for 6)  ', 'Tk:1250/2250', '../images/img-not.jpg'),
(124, 'FFC', 'fast_food', 'Spicay Original Chicken 1/2/5/9 pcs', 'Tk:90/175/430/780 ', '../images/img-not.jpg'),
(125, 'FFC', 'fast_food', 'Spicay Burger/with cheese', 'Tk:175/205', '../images/img-not.jpg'),
(126, 'FFC', 'fast_food', 'Original Burger/ With Cheese', 'Tk:160/190 ', '../images/img-not.jpg'),
(127, 'FFC', 'fast_food', 'Beef Burger/with Cheese', 'Tk:160/190 ', '../images/img-not.jpg'),
(128, 'FFC', 'fast_food', 'Super Beef Burger/with Cheese', 'Tk:220/250', '../images/img-not.jpg'),
(129, 'FFC', 'fast_food', 'Vegetable Burger / With Cheese', 'Tk:150/180', '../images/img-not.jpg'),
(130, 'FFC', 'fast_food', 'Crispy Stirips 2/4 pcs', 'Tk:120/220', '../images/img-not.jpg'),
(131, 'FFC', 'fast_food', 'Vegetable Green Salad ', 'Tk:100', '../images/img-not.jpg'),
(132, 'FFC', 'fast_food', 'Chicken Nuggets 6 pcs', 'Tk:200', '../images/img-not.jpg'),
(133, 'FFC', 'fast_food', 'Chicken Salsa Wrap', 'Tk:150 ', '../images/img-not.jpg'),
(134, 'FFC', 'fast_food', 'Zing Pop Chicken', 'Tk:150', '../images/img-not.jpg'),
(135, 'FFC', 'fast_food', '2 pcs Chicken/1 Regular Fries/1 Soft Drink ', 'Tk:260', '../images/img-not.jpg'),
(136, 'FFC', 'fast_food', '2 pcs Crispy Strips with Fries  ', 'Tk:180', '../images/img-not.jpg'),
(137, 'FFC', 'fast_food', '1 Beef Burger(Super)/1 Soft Drink', 'Tk:260', '../images/img-not.jpg'),
(138, 'BoomersCafé', 'Thai & Chinis', 'Any2itemswithfriedorChowmein', 'Tk:180', '../images/img-not.jpg'),
(139, 'BoomersCafé', 'Thai & Chinis', 'Any3itemswithfriedorChowmein', 'Tk:210', '../images/img-not.jpg'),
(140, 'BoomersCafé', 'Indian', 'BeefjhalFrazi', 'Tk:350', '../images/img-not.jpg'),
(141, 'BoomersCafé', 'Indian', 'Beefdopiaza', 'Tk:350', '../images/img-not.jpg'),
(142, 'BoomersCafé', 'Indian', 'Chickenreshmimasala ', 'Tk:390', '../images/img-not.jpg'),
(143, 'BoomersCafé', 'Indian', 'Muttondopiza', 'Tk:390', '../images/img-not.jpg'),
(144, 'BoomersCafé', 'Indian', 'Prawnmalaicurry', 'Tk:390', '../images/img-not.jpg'),
(145, 'BoomersCafé', 'Indian', 'Vegetablenavaatancurry', 'Tk:240', '../images/img-not.jpg'),
(146, 'BoomersCafé', 'Indian', 'Vegetablejhalfrazi', 'Tk:250', '../images/img-not.jpg'),
(147, 'BoomersCafé', 'Indian', 'Soupoftheday', 'Tk:100', '../images/img-not.jpg'),
(148, 'BoomersCafé', 'Indian', 'ThaiSoup', 'Tk:100', '../images/img-not.jpg'),
(149, 'BoomersCafé', 'fast_food', 'Beefburger', 'Tk:160', '../images/img-not.jpg'),
(150, 'BoomersCafé', 'fast_food', 'Grilledchickenburger', 'Tk:185', '../images/img-not.jpg'),
(151, 'BoomersCafé', 'fast_food', 'Phillysteaksandwich', 'Tk:190', '../images/img-not.jpg'),
(152, 'BoomersCafé', 'fast_food', 'Chicke200ngordita', 'Tk:200', '../images/img-not.jpg'),
(153, 'BoomersCafé', 'fast_food', 'Chicken broast', 'Tk:170', '../images/img-not.jpg'),
(155, 'Bfc', 'fast_food', 'Strips Combo(6 pcs chicken strips, french fries&drink)', 'Tk:200', '../images/img-not.jpg'),
(156, 'Bfc', 'fast_food', 'Snack combo(2 pcs chicken,french fries &drink)', 'Tk:200', '../images/img-not.jpg'),
(157, 'Bfc', 'fast_food', 'Hot wings combo(8 pcs hot wings,french fries &drink)', 'Tk:220', '../images/img-not.jpg'),
(158, 'Bfc', 'fast_food', 'Rice combo(vegetable rice,4pcs chicken wings mini,coleslaw & drink)', 'Tk:170', '../images/img-not.jpg'),
(159, 'Bfc', 'fast_food', 'Super burger combo(chicken burger with cheese,french fries & drink)', 'Tk:250', '../images/img-not.jpg'),
(161, 'Bfc', 'fast_food', 'Mayo Chicken Burger Combo(mayo chicken burger french fries & drink)', 'Tk:190', '../images/img-not.jpg'),
(162, 'Bfc', 'fast_food', 'Gaint meal(5pcs chicken, french fries,Coleslaw,2buns &1/2 ltr drink)', 'Tk:450', '../images/img-not.jpg'),
(163, 'Bfc', 'fast_food', 'Family Fiesta(12pcs chicken, 3 french fries, 4Coleslaw,4buns &1 ltr drink)', 'Tk:1150', '../images/img-not.jpg'),
(164, 'Bfc', 'fast_food', 'Party Galore(21pcs chicken,  6 french fries, 6Coleslaw,6buns &1 2tr drink)', 'Tk:1900', '../images/img-not.jpg'),
(165, 'Bfc', 'fast_food', '1pc chicken', 'Tk:70', '../images/img-not.jpg'),
(166, 'Bfc', 'fast_food', '3pc chicken', 'Tk:200', '../images/img-not.jpg'),
(167, 'Bfc', 'fast_food', 'Thirft combo', 'Tk:300', '../images/img-not.jpg'),
(168, 'Bfc', 'fast_food', 'Party meal', 'Tk:780', '../images/img-not.jpg'),
(169, 'Bfc', 'fast_food', 'Special berger combo', 'Tk:260', '../images/img-not.jpg'),
(170, 'Bfc', 'fast_food', 'Super cheese burger', 'Tk:180', '../images/img-not.jpg'),
(171, 'Bfc', 'fast_food', 'Super cheese burger', 'Tk:220', '../images/img-not.jpg'),
(172, 'Bfc', 'fast_food', 'Hot wings(8pcs)', 'Tk:150', '../images/img-not.jpg'),
(173, 'American Burger', 'fast_food', 'Beef burger ', 'Tk:105', '../images/img-not.jpg'),
(174, 'American Burger', 'fast_food', 'Beef cheese burger ', 'Tk:130', '../images/img-not.jpg'),
(175, 'American Burger', 'fast_food', 'Double beef burger ', 'Tk:160', '../images/img-not.jpg'),
(176, 'American Burger', 'fast_food', 'Chicken burger ', 'Tk:125', '../images/img-not.jpg'),
(177, 'American Burger', 'fast_food', 'Chicken cheese burger ', 'Tk:150', '../images/img-not.jpg'),
(178, 'American Burger', 'fast_food', 'Double chicken cheese burger ', 'Tk:230', '../images/img-not.jpg'),
(179, 'American Burger', 'fast_food', 'Fish burger ', 'Tk:115', '../images/img-not.jpg'),
(180, 'American Burger', 'fast_food', ' Fish cheese burger', 'Tk:140', '../images/img-not.jpg'),
(181, 'American Burger', 'fast_food', 'Chicken salami sandwich ', 'Tk:140', '../images/img-not.jpg'),
(182, 'American Burger', 'fast_food', 'Chicken salamicheese sandwich ', 'Tk:165', '../images/img-not.jpg'),
(183, 'American Burger', 'fast_food', 'Chicken sandwich ', 'Tk:140', '../images/img-not.jpg'),
(184, 'American Burger', 'fast_food', 'Club sandwich ', 'Tk:140', '../images/img-not.jpg'),
(185, 'American Burger', 'fast_food', 'Egg cheese sandwich ', 'Tk:95', '../images/img-not.jpg'),
(186, 'American Burger', 'fast_food', 'Chicken nuggets ', 'Tk:150', '../images/img-not.jpg'),
(187, 'American Burger', 'fast_food', 'French fries ', 'Tk:80', '../images/img-not.jpg'),
(188, 'American Burger', 'fast_food', 'Egg sandwich ', 'Tk:70', '../images/img-not.jpg'),
(189, 'Al Baik', 'fast_food', 'SingleChickenBroast', 'Tk:190', '../images/img-not.jpg'),
(190, 'Al Baik', 'fast_food', 'Family Chicken Broast', 'Tk:650', '../images/img-not.jpg'),
(191, 'Al Baik', 'fast_food', 'Al BaikGrillChicken', 'Tk:200', '../images/img-not.jpg'),
(192, 'Al Baik', 'fast_food', 'BonelesChicken(6pcs)', 'Tk:230', '../images/img-not.jpg'),
(193, 'Al Baik', 'fast_food', 'ChickenWings8pcs', 'Tk:350', '../images/img-not.jpg'),
(194, 'Al Baik', 'fast_food', 'FishFingers6pcs', 'Tk:190', '../images/img-not.jpg'),
(195, 'Al Baik', 'fast_food', 'BeefBurger', 'Tk:160', '../images/img-not.jpg'),
(196, 'Al Baik', 'fast_food', 'Beef CheeseBurger', 'Tk:180', '../images/img-not.jpg'),
(197, 'Al Baik', 'fast_food', 'Crispy ChickenBurger', 'Tk:180', '../images/img-not.jpg'),
(198, 'Al Baik', 'fast_food', 'PhillySteakGrillChicken', 'Tk:200', '../images/img-not.jpg'),
(199, 'Al Baik', 'fast_food', 'ChickenDonnerkabab', 'Tk:230', '../images/img-not.jpg'),
(200, 'Al Baik', 'fast_food', 'Combo-1', 'Tk:150', '../images/img-not.jpg'),
(201, 'Al Baik', 'fast_food', 'Combo-7Ricemeal', 'Tk:190', '../images/img-not.jpg'),
(202, 'Al Baik', 'fast_food', 'Combo-8Familymeal', 'Tk:850', '../images/img-not.jpg'),
(203, 'Al Baik', 'fast_food', 'ChickenThaiSoup', 'Tk:250', '../images/img-not.jpg'),
(204, 'Al Baik', 'fast_food', 'SingleSoup', 'Tk:140', '../images/img-not.jpg'),
(205, 'Al Baik', 'fast_food', 'ChickenVegetableSoup', 'Tk:250', '../images/img-not.jpg'),
(206, 'Al Baik', 'fast_food', 'Al-BaikSpecialSoup', 'Tk:300', '../images/img-not.jpg'),
(207, 'Star Kabab  ', 'bangla', 'Kaschi Biriyani(plain) ', 'Tk:220/110 ', '../images/img-not.jpg'),
(208, 'Star Kabab ', 'bangla', 'Kaschi Biriyani(With Kabab) ', 'Tk:235/125 ', '../images/img-not.jpg'),
(209, 'Star Kabab ', 'bangla', 'Kaschi Biriyani(With Egg) ', 'Tk:230/120 ', '../images/img-not.jpg'),
(210, 'Star Kabab ', 'bangla', 'Kaschi Biriyani(With Egg & Kabab) ', 'Tk:245/135 ', '../images/img-not.jpg'),
(211, 'Star Kabab ', 'bangla', 'Chicken Biriyani(plain) ', 'Tk:220/110 ', '../images/img-not.jpg'),
(212, 'Star Kabab ', 'bangla', 'Chicken Biriyani(With Kabab) ', 'Tk:235/125 ', '../images/img-not.jpg'),
(213, 'Star Kabab ', 'bangla', 'Chicken Biriyani(With Egg) ', 'Tk:230/120 ', '../images/img-not.jpg'),
(214, 'Star Kabab ', 'bangla', 'Chicken Biriyani(With Egg & Kabab) ', 'Tk:245/135 ', '../images/img-not.jpg'),
(215, 'Star Kabab ', 'bangla', 'Sada polaw ( per person 60/-) ', 'Tk:50/25 ', '../images/img-not.jpg'),
(216, 'Star Kabab ', 'bangla', 'Chicken Vuna Khichuri(Plain)  ', 'Tk:220/110 ', '../images/img-not.jpg'),
(217, 'Star Kabab ', 'bangla', 'Chicken Vuna Khichuri(With Kabab) ', 'Tk:235/125 ', '../images/img-not.jpg'),
(218, 'Star Kabab ', 'bangla', 'Chicken Vuna Khichuri(with Egg)', 'Tk:220/110 ', '../images/img-not.jpg'),
(219, 'Star Kabab ', 'bangla', 'Chicken Vuna Khichuri(with Egg & Kabab) ', 'Tk:220/110 ', '../images/img-not.jpg'),
(220, 'Star Kabab', 'bangla', 'Tandori ruti ', 'Tk:06 ', '../images/img-not.jpg'),
(221, 'Star Kabab ', 'bangla', 'Patla Nan ', 'Tk:12 ', '../images/img-not.jpg'),
(222, 'Star Kabab ', 'bangla', 'pacha Nan(Special) ', 'Tk:15 ', '../images/img-not.jpg'),
(223, 'Star Kabab ', 'bangla', 'Rumal Ruti ', 'Tk:06 ', '../images/img-not.jpg'),
(224, 'Star Kabab ', 'bangla', 'Special parata ', 'Tk:15 ', '../images/img-not.jpg'),
(225, 'Star Kabab  ', 'bangla', 'Sada parata', 'Tk:06 ', '../images/img-not.jpg'),
(226, 'Star Kabab ', 'bangla', 'Dal puri', 'Tk:06 ', '../images/img-not.jpg'),
(227, 'Star Kabab ', 'bangla', 'Luci ', 'Tk:06 ', '../images/img-not.jpg'),
(228, 'Star Kabab', 'bangla', 'cana Dal ', 'Tk:10 ', '../images/img-not.jpg'),
(229, 'Star Kabab ', 'bangla', 'Vagi ', 'Tk:10 ', '../images/img-not.jpg'),
(230, 'Star Kabab ', 'bangla', 'Sobji(mixed)', 'Tk:34/17 ', '../images/img-not.jpg'),
(231, 'Star Kabab ', 'bangla', 'Haloaw', 'Tk:20/10 ', '../images/img-not.jpg'),
(232, 'Star Kabab', 'bangla', 'Dim pose ', 'Tk:15 ', '../images/img-not.jpg'),
(233, 'bfc', 'fast food', 'asss', 'TK:sfs', '../images/img-not.jpg'),
(234, 'KFC', 'fast food', 'rice', 'TK:130', '../images/img-not.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `manager_name` varchar(250) NOT NULL,
  `restaurant_name` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `website` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `manager_name`, `restaurant_name`, `password`, `email`, `website`) VALUES
(2, 'admin', 'admin', '123456', 'plabon1992@gmail.com', ''),
(3, 'cfc', 'cfc', '123', 'plabon1992@gmail.com', 'www.google.com'),
(5, '', 'Star Kabab', '123', '', ''),
(6, 'Pizza Hut', 'Pizza Hut', '123', '', ''),
(7, 'Olympia', 'Olympia', '123', '', ''),
(8, 'nandus', 'nandus', '123', '', ''),
(9, 'La Bamba', 'La Bamba', '123', '', ''),
(10, 'korai gost', 'korai gost', '123', '', ''),
(11, 'KFC', 'KFC', '123', '', ''),
(12, 'FFC', 'FFC', '123', '', ''),
(13, 'BoomersCafé', 'BoomersCafé', '123', '', ''),
(15, 'Bfc', 'Bfc', '123', '', ''),
(16, 'American Burger', 'American Burger', '123', '', ''),
(17, 'Al Baik', 'Al Baik', '123', '', ''),
(19, '4season', '4season', '123', '', ''),
(20, 'raUL', 'KFC', '1234', 'raat@yahoo.com', 'rMS'),
(21, 'raUL', 'KFC', '1234', 'raat@yahoo.com', 'rMS');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
