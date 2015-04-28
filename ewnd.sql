-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 28, 2015 at 10:35 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ewnd`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `res_id` int(11) NOT NULL,
  `cat_name` varchar(30) NOT NULL,
  `cover` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_res_id` (`res_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `res_id`, `cat_name`, `cover`) VALUES
(1, 1, 'Promotions', 'images/kfc/promotions.jpg'),
(2, 1, 'Everyday Affordable Value', 'images/kfc/everydayaffordablevalue.jpg'),
(3, 1, 'Combos', 'images/kfc/combos.jpg'),
(4, 1, 'Mid Night Deals', 'images/kfc/midnightdeals.jpg'),
(5, 1, 'Chicky Meals', 'images/kfc/chickymeals.jpg'),
(6, 1, 'Chicken', 'images/kfc/chicken.jpg'),
(7, 1, 'Burgers', 'images/kfc/burgers.jpg'),
(8, 1, 'Snacks & Side Orders', 'images/kfc/snacksandsideorders.jpg'),
(9, 1, 'Beverages', 'images/kfc/beverages.jpg'),
(10, 3, 'Deals', 'images/14thstreet/deals.jpg'),
(11, 3, 'Midnight Deal', 'images/14thstreet/midnightdeals.jpg'),
(12, 3, 'Appetizers', 'images/14thstreet/appetizers.jpg'),
(13, 3, 'Pizza', 'images/14thstreet/pizza.jpg'),
(14, 3, 'Desserts', 'images/14thstreet/desserts.jpg'),
(15, 3, 'Extras', 'images/14thstreet/extras.jpg'),
(16, 3, 'Beverages', 'images/14thstreet/beverages.jpg'),
(17, 4, 'Soups', 'images/ginsoy/soups.jpg'),
(18, 4, 'Signature', 'images/ginsoy/signature.jpg'),
(19, 4, 'Beef', 'images/ginsoy/beef.jpg'),
(20, 4, 'Sea Food', 'images/ginsoy/saefood.jpg'),
(21, 4, 'Noodles & Rice', 'images/ginsoy/noodles_rice.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `item_name` varchar(40) NOT NULL,
  `price` int(11) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_category_id` (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=101 ;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `cat_id`, `item_name`, `price`, `description`) VALUES
(1, 1, 'Big Family Festival 1', 1695, '3 Value burgers, 3 zinger burgers, 6 pieces chicken & 1 - 1.5 litre drink.'),
(2, 1, 'Big Family Festival 2', 1995, '6 Zinger burgers, 6 pieces chicken & 1.5 litre drink'),
(3, 1, 'Krunch Burger With Drink', 200, 'Krunch burger & 300 ml drink'),
(4, 1, 'Krunch Combo', 300, 'Krunch burger, 1 regular fries & 1 soft drink'),
(5, 1, 'Krunch Combo With Chicken Piece', 300, '1 Krunch burger, 1 chicken piece & 1 soft drink'),
(6, 1, 'Mitao Bhool(TCF Bucket)', 1095, '9 Chicken pieces, 4 dinner rolls & 1.5 litre drink'),
(7, 1, 'Toasted Twister', 250, '1 Twister & 1 soft drink'),
(8, 1, 'Zinger Strips Deals(4 pieces)', 300, '4 Zinger strips, 1 dinner roll. 1 dip & 1 soft drink'),
(9, 1, 'Family Festival 1', 1295, '2 value burgers, 2 zinger burgers, 4 pieces chicken, 2 dinner rolls & 1.5 litre drink'),
(10, 1, 'Family Festival 2', 1495, '4 zinger burgers, 4 pieces chicken, 2 dinner rolls & 1.5 litre drink'),
(11, 2, 'Chicken Chawal', 235, '1 Piece chicken, Arabian rice, Vietnamese dip sauce & 1 soft drink'),
(12, 2, 'Chicken Chips', 335, '2 Pieces chicken, regular fries, 1 dinner roll, Vietnamese dip sauce & 1 soft drink'),
(13, 2, 'Krunch Burger', 150, 'Krunch Burger'),
(14, 3, 'Mighty Zinger Combo', 560, 'Mighty zinger, regular fries & 300 ml drink'),
(15, 3, 'Wow Deal', 620, '1 Zinger burger, 1 piece chicken, regular fries & 300 ml drink'),
(16, 3, 'Zinger Combo', 495, 'Zinger, regular fries & 300 ml drink'),
(17, 4, 'Mid Night Deal 1', 300, 'Zinger burger & 1 soft drink'),
(18, 4, 'Mid Night Deal 2', 250, '2 Pieces chicken & 1 soft drink'),
(19, 4, 'Mid Night Deal 3', 225, 'Value burger & 1 soft drink'),
(20, 5, 'Chicky Meal 1', 325, '1 Piece chicken, regular fries, free toy & 300 ml drink or slice juice'),
(21, 5, 'Chicky Meal 2', 350, 'Value zinger, regular fries, free toy & 300 ml drink or slice juice'),
(22, 5, 'Chicky Meal 3', 350, '9 Pieces hot shots, regular fries, free toy & 300 ml drink or slice juice.'),
(23, 5, 'Chicky Meal 4', 325, '4 Pieces nuggets, regular fries, free toy & 300 ml drink or slice juice.'),
(24, 6, '1 Piece Chicken', 150, '1 Piece Chicken'),
(25, 6, '3 Pieces Chicekn', 700, '3 Pieces Chicekn'),
(26, 6, '10 Pieces Chicken', 1350, '10 Pieces Chicken'),
(27, 7, 'Mighty Zinger', 400, 'Mighty Zinger'),
(28, 7, 'Value Burger', 200, 'Value Burger'),
(29, 7, 'Zinger Burger', 340, 'Zinger Burger'),
(30, 8, 'Arabian Rice', 110, 'Arabian Rice'),
(31, 8, 'Cheese', 40, 'Cheese'),
(32, 8, 'Corn on the Cob', 110, 'Subject to availablity'),
(33, 8, 'Dinner Roll', 25, 'Dinner Roll'),
(34, 8, 'Fries Regular', 115, 'Fries Regular'),
(35, 8, 'Fires Large', 150, 'Fires Large'),
(36, 8, 'Fries Bucket', 185, 'With garlic sauce'),
(37, 8, 'Fries Bucket With Hot Shots', 265, 'Fries Bucket With Hot Shots'),
(38, 8, 'Hot Shots', 300, '9 Pieces'),
(39, 8, 'Hot Wings ', 330, '10 Pieces'),
(40, 8, 'Nuggets', 285, '6 Pieces'),
(41, 8, 'Nuggets', 370, '9 Pieces'),
(42, 8, 'Rice & Spice', 250, 'Arabian rice with 6 pieces hot shots with unique flavor spicy Vietnamese sauce'),
(43, 9, 'Mineral Water', 75, 'Small'),
(44, 9, 'Mineral Water', 90, 'Large'),
(45, 9, 'Soft Drinks', 90, 'Soft Drinks'),
(46, 10, 'Single Slice Deals', 499, '1 Slice, 2 pieces of a particular sideline & 500 ml drink'),
(47, 10, 'Social Box', 700, '1 Portion of wedges,1.5 serving of cheesy pocket & 1 serving of chicken wings'),
(48, 10, 'Time For 10 Deal', 899, '10 - inch pizza, 5 pieces of sideline & 1 litre drink'),
(49, 11, 'Midnight Deal', 699, '10 Incher pizza & 1 litre drink'),
(50, 12, 'Cheesy Bread', 199, 'Delicious bread baked with cheese'),
(51, 12, 'Cheesy Pockets', 199, 'Baked tortilla in palm-sized triangular portions stuffed with white garlic sauce, fajita chicken & vegetables'),
(52, 12, 'Chicken Wings', 299, 'Chicken Wings'),
(53, 12, 'Chicken Bites', 299, 'Spicy / Non-Spicy chunks of chicken'),
(54, 12, 'Garlic Bread', 199, 'Tasty bread baked with garlic paste'),
(55, 12, 'Potato Skins', 199, 'Melted cheese wrapped inside saltish potato skin'),
(56, 12, 'Potato Wedges', 199, 'Enormous sized french fries'),
(57, 13, '10 Incher Pizza', 699, '10 Incher Pizza'),
(58, 13, 'Pizza Premium Flavour - Slice', 399, 'Turkey chunks.'),
(59, 13, 'Pizza Premium Flavour ', 1199, 'Turkey chunks.\r\nhalf of 20-inch'),
(60, 13, 'Pizza Premium Flavour ', 2099, 'Turkey chunks.\r\n20-inch Full'),
(61, 13, 'Pizza Regular Flavor - Slice', 369, 'Choose from cheeselicious, chicken fajita, chicken tikka, beef pepperoni, vegeterian, fiery chicken & lemon & garlic chicken'),
(62, 13, 'Pizza Regular Flavor ', 1099, 'Half of 20 - Inch\r\nChoose from cheeselicious, chicken fajita, chicken tikka, beef pepperoni, vegeterian, fiery chicken & lemon & garlic chicken'),
(63, 13, 'Pizza Regular Flavor ', 1899, '20 Inch - Full\r\nChoose from cheeselicious, chicken fajita, chicken tikka, beef pepperoni, vegeterian, fiery chicken & lemon & garlic chicken'),
(64, 13, 'Thinza', 749, 'Authentic American style crust, with biscuit-thin base baked to make your pizza toppings taste more savory'),
(65, 14, 'Cheese Cake', 299, 'Half\r\n'),
(66, 14, 'Cheese Cake', 2200, 'Full'),
(67, 14, 'Chocolate Cake', 225, 'Slice - 0.2 Pounds'),
(68, 14, 'Chocolate Cake', 1200, 'Full - 2 Pounds'),
(69, 15, 'Full Pizza Pineapple', 200, 'Full Pizza Pineapple'),
(70, 15, 'Full Pizza Sweet Corn', 200, 'Full Pizza Sweet Corn'),
(71, 15, 'Full Pizza Extra Meat', 400, 'Full Pizza Extra Meat'),
(72, 15, 'Full Pizza Extra Cheese', 400, 'Full Pizza Extra Cheese'),
(73, 15, 'Half Pizza Pineapple', 100, 'Half Pizza Pineapple'),
(74, 15, 'Half Pizza Sweet Corn', 100, 'Half Pizza Sweet Corn'),
(75, 15, 'Half Pizza Extra Meat', 200, 'Half Pizza Extra Meat'),
(76, 15, 'Half Pizza Extra Cheese', 200, 'Half Pizza Extra Cheese'),
(77, 15, 'Slice Pineapple', 25, 'Slice Pineapple'),
(78, 15, 'Slice Sweet Corn', 25, 'Slice Sweet Corn'),
(79, 15, 'Slice Extra Cheese', 50, 'Slice Extra Cheese'),
(80, 15, 'Slice Extra Meat', 50, 'Slice Extra Meat'),
(81, 16, 'Mineral Water', 40, '500 ml'),
(82, 16, 'Minute Maid', 60, '500 ml'),
(83, 16, 'Red Bull', 190, '500 ml'),
(84, 16, 'Soft Drinks ', 60, '500 ml'),
(85, 16, 'Soft Drinks ', 80, '1 Litre'),
(86, 16, 'Soft Drinks ', 100, '1.5 Lire'),
(87, 17, 'Chicken Corn Soup', 195, 'Chicken, pepper & corn'),
(88, 17, 'Eight Treasure Soup', 235, '8 treasure soup is a delicious combination of 8 full of nutritious vegetables Chicken breast, chicken stock, Spring onions & mushrooms'),
(89, 17, 'Thai Tom Yum Goong Soup (Green Chili)', 235, 'Shrimp, tomatoes, green chili, pepper & mushrooms.'),
(90, 18, 'Ginsoy Special Prawn Katsu', 475, 'Prawns, salt & pepper'),
(91, 18, 'Spicy Garlic Prawns', 520, 'Olive oil, garlic & chilies'),
(92, 19, 'Beef Chili ', 450, 'Beef with chilies'),
(93, 19, 'Crispy Beijing Beef', 465, ''),
(94, 19, 'Spicy Szchezwan Beef', 475, 'Red gravy with beef'),
(95, 20, 'Black Pepper Fish', 475, 'Gravy in black pepper sauce'),
(96, 20, 'Crispy Fish With Sticky Red Sauce', 490, 'Fish in red sauce & crispy'),
(97, 20, 'Ginsoy Whole Fish', 1250, 'Ginsoy Whole Fish'),
(98, 21, 'American Chopsuey', 495, 'noodles, cabbage shrimp & beef or chicken'),
(99, 21, 'Mix Fried Rice', 315, 'A mixture of shrimp, chicken and beef served with rice.'),
(100, 21, 'Spicy Seafood Rice', 385, 'Fish or shrimp with rice');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(30) NOT NULL,
  `pass` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `user`, `pass`) VALUES
(1, 'kfc', 'kfc'),
(2, 'pizzahut', 'pizzahut'),
(3, '14thstreetpizza', '14thstreetpizza'),
(4, 'ginsoy', 'ginsoy'),
(5, 'pizzainc', 'pizzainc'),
(6, 'burgerinc', 'burgerinc'),
(7, 'spice', 'spice'),
(8, 'hotnrollbarbq', 'hotnrollbarbq'),
(9, 'pizzacrust', 'pizzacrust'),
(10, 'daynightpizza', 'daynightpizza'),
(11, 'italianopizza', 'italianopizza'),
(12, 'californiapizza', 'californiapizza'),
(13, 'lalqila', 'lalqila'),
(14, 'kfc', 'kfc'),
(15, 'dunkindonuts', 'dunkindonuts'),
(16, 'pennypizza', 'dunkindonuts'),
(17, 'subway', 'subway'),
(18, 'pizzamax', 'pizzamax'),
(19, 'dominospizza', 'dominospizza'),
(20, 'thenewyorkpizza', 'thenewyorkpizza'),
(21, 'aftereight', 'aftereight');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `res_name` varchar(100) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `address`, `phone`, `res_name`, `time`, `date`) VALUES
(2, 'temp', '', 0, '', '00:00:00', '2015-04-29'),
(3, 'xyz', 'xyz', 32, 'kfc', '00:01:43', '2015-04-29');

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE IF NOT EXISTS `order_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_order_id` (`order_id`),
  KEY `fk_item_id` (`item_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=69 ;

--
-- Dumping data for table `order_item`
--

INSERT INTO `order_item` (`id`, `order_id`, `item_id`, `qty`) VALUES
(66, 2, 46, 2),
(67, 2, 47, 1),
(68, 2, 48, 2);

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE IF NOT EXISTS `restaurant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `res_name` varchar(60) NOT NULL,
  `address` varchar(65) NOT NULL,
  `thumbnail` varchar(100) NOT NULL,
  `cover` varchar(65) NOT NULL,
  `type` varchar(50) NOT NULL,
  `login_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_login_id` (`login_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`id`, `res_name`, `address`, `thumbnail`, `cover`, `type`, `login_id`) VALUES
(1, 'KFC', 'Plot D-14, Block 2,\nNorth Nazimabad', 'images/thumbnails/kfc.png', 'images/kfc/cover.jpg', 'Fast Food', 1),
(2, 'Pizza Hut', 'Tariq Road, Karachi', 'images/thumbnails/pizza_hut.jpg', 'images/pizzahut/cover.jpg', 'Pizza', 2),
(3, '14th Street Pizza', 'North Nazimabad', 'images/thumbnails/14thstreetpizza.jpg', 'images/14thstreet/cover.jpg', 'Pizza', 3),
(4, 'Ginsoy', 'North Nazimmabad, Karachi', 'images/thumbnails/ginsoy.jpg', 'images/ginsoy/cover.jpg', 'chinese', 4),
(5, 'Pizza Inc', 'Khalid Bin Waleed Road, Karachi', 'images/thumbnails/pizza_inc.jpg', 'images/pizzaInc/cover.jpg', 'Pizza', 5),
(6, 'Burger Inc', 'Gulshan-e-Iqbal, Karachi', 'images/thumbnails/burger-inc.jpg', 'images/burger/cover.jpg', 'Fast Food', 6),
(7, 'Spice', 'Gulistan e jauhar, Karachi', 'images/thumbnails/spice_t.jpg', 'images/spice/cover.jpg', 'BBQ, Chinese, Fast Food', 7),
(8, 'Hot n Roll BBQ', 'Tariq Road, Karachi', 'images/thumbnails/hot_roll.jpg', 'images/hot_nroll/cover.jpg', 'BBQ, Fast Food', 9),
(9, 'Pizza Crust', 'Gulshan-e-iqbal, Karachi', 'images/thumbnails/pizza-crust.jpg', 'images/pizza_crust/cover.jpg', 'Pizza', 9),
(10, 'Day Night Pizza', 'Gulshan-e-iqbal, Karachi', 'images/thumbnails/day-night.jpg', 'images/daynight/cover.jpg', 'Pizza', 10),
(11, 'Italiano Pizza', 'FB Area, Karachi', 'images/thumbnails/italiano-pizza.jpg', 'images/italiano/cover.jpg', 'Pizza', 11),
(12, 'California Pizza', 'Hyderi, Karachi', 'images/thumbnails/california-pizza.jpg', 'images/california/cover.jpg', 'Pizza', 12),
(13, 'Lal Qila', 'Shahreh-e-Fasial, Karachi', 'images/thumbnails/lal-qila.jpg', 'images/qila/cover.jpg', 'BBQ, Chinese, Pakistani', 13),
(14, 'Red Apple', 'North Nazimabad, Karachi', 'images/thumbnails/red-apple.jpg', 'images/red_apple/cover.jpg', 'BBQ, Chinese, Fast Food', 14),
(15, 'Dunkin Donuts', 'Karachi', 'images/thumbnails/dunkin-donuts.jpg', 'images/dunkin_donuts/cover.jpg', 'American, Bakery, Cafe', 15),
(16, 'Penny Pizza', 'FB Area, Karachi', 'images/thumbnails/penny-pizza.jpg', 'images/penny/cover.jpg', 'Chinese, Pakistani, Pizza', 16),
(17, 'Subway', 'University Road, Karach', 'images/thumbnails/subway-food.jpg', 'images/subway/cover.jpg', 'Cafe, Fast Food', 17),
(18, 'Pizza Max', 'North Nazimabad, Karachi', 'images/thumbnails/pizza-max.jpg', 'images/pizza_max/cover.jpg', 'Pizza', 18),
(19, 'Dominos Pizza', 'All Areas, Karachi', 'images/thumbnails/dominos-pizza.png', 'images/dominos/cover.jpg', 'Pizza', 19),
(20, 'The Newyork Pizza', 'North Nazimabad, Karach', 'images/thumbnails/new-york.jpg', 'images/newyork/cover.jpg', 'Pizza', 20),
(21, 'After Eight', 'Bahadurabad, Karachi', 'images/thumbnails/after-eight.jpg', 'images/after_eight/cover.jpg', 'Continental, Fast Food, Steak House', 21);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `fk_res_id` FOREIGN KEY (`res_id`) REFERENCES `restaurant` (`id`);

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `fk_category_id` FOREIGN KEY (`cat_id`) REFERENCES `category` (`id`);

--
-- Constraints for table `order_item`
--
ALTER TABLE `order_item`
  ADD CONSTRAINT `fk_item_id` FOREIGN KEY (`item_id`) REFERENCES `item` (`id`),
  ADD CONSTRAINT `fk_order_id` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);

--
-- Constraints for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD CONSTRAINT `fk_login_id` FOREIGN KEY (`login_id`) REFERENCES `login` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
