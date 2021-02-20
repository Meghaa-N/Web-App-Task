-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2021 at 07:17 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `sno` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` mediumtext NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`sno`, `name`, `email`, `phone`, `address`, `password`) VALUES
(1, 'server', 'meghaanalsum@m.com', '9489426919', 'meghaanalsum@m.com', '123456'),
(2, 'Naghulan', 'naghulan@gmail.com', '1234567890', '101, Kothukaran pudur, radha street, erode-4', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `order_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`order_id`, `email`) VALUES
(3, 'meghaanalsum@m.com'),
(4, 'meghaanalsum@m.com'),
(5, 'meghaanalsum@m.com'),
(6, 'naghulan@gmail.com'),
(7, 'meghaanalsum@m.com'),
(8, 'meghaanalsum@m.com'),
(9, 'meghaanalsum@m.com'),
(10, 'meghaanalsum@m.com'),
(11, 'naghulan@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `sno` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` mediumtext NOT NULL,
  `price` int(4) NOT NULL,
  `image` mediumtext NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`sno`, `name`, `description`, `price`, `image`, `category`) VALUES
(1, 'Chicken 65', 'Chicken 65 is a popular deep fried spicy chicken appetizer that originated in Hotel Buhari in Chennai. This immensely popular South Indian appetizer is made by marinating & frying chicken bites coated with flour, curry leaves and spices.', 100, 'chicken65.jpg', 'starter'),
(2, 'Manchurian', 'In its two-stage preparation, the first stage requires preparing a spiced corn flour batter, dipping cauliflower florets in it and deep frying them. In the second stage, the deep fried florets are sautéed with chopped onion, bell pepper, garlic, etc., in soy and chili sauce.', 100, 'manjurian.jpg', 'starter'),
(3, 'mutton keema', 'Keema is a dish made of minced meat, onions, tomatoes, spices & herbs. This recipe will yield a delicious dish which be eaten with rice, or can be stuffed in sandwiches, wraps & naan. This delicacy is usually served with white sauce and is supremum delight.', 150, 'keema.jpg', 'starter'),
(4, 'Schezwan Veg Fried Rice', 'Schezwan Fried Rice recipe is an easy-to-make Indo Chinese recipe of stir-fried vegetables and rice in a spicy schezwan sauce. It is also one of the most popular stir-fried rice recipes in the fusion Indian Chinese cuisine.\r\n\r\nSchezwan sauce is a versatile chili garlic sauce made with dry chili peppers (red chillies) and is easily prepared ahead of time, making this dish a good option for a quick meal when you are craving something spicy.', 150, 'schezwan.png', 'rice'),
(5, 'Schezwan Chicken Fried Rice', 'Schezwan Fried Rice recipe is an easy-to-make Indo Chinese recipe of stir-fried vegetables and rice in a spicy schezwan sauce. It is also one of the most popular stir-fried rice recipes in the fusion Indian Chinese cuisine.\r\n\r\nSchezwan sauce is a versatile chili garlic sauce made with dry chili peppers (red chillies) and is easily prepared ahead of time, making this dish a good option for a quick meal when you are craving something spicy.', 200, 'schezwan_chicken.jpg', 'rice'),
(6, 'Hyderabad Chicken Biryani', 'Hyderabadi Biryani is a variety of biryani from Hyderabad, India. It is prepared from rice using the dum method of cooking, and is a common feature in Hyderabadi weddings.\r\nHyderabadi biryani is generally believed to have originated in the kitchens of the Nizam of Hyderabad, of the historic Hyderabad State, as a blend of Mughlai and Iranian cuisine. Hyderabadi biryani is a staple of Indian cuisine.', 240, 'biryani.jpg', 'rice'),
(6, 'Butter Naan', 'Naan is a leavened, oven-baked flatbread found in the cuisines mainly of Western Asia, India, Indonesia, Myanmar and the Caribbean. Naan is cooked in a tandoor, from which tandoori cooking takes its name. This distinguishes it from roti, which is usually cooked on a flat or slightly concave iron griddle called a tava.', 100, 'naan.jpg', 'bread'),
(7, 'Ghee Roast', 'The Ghee Roast Dosa Recipe is a classic South Indian Breakfast Tiffin that is made with fresh homemade idli dosa batter and then made into a thin paper dosa. Serve the Ghee Roast Dosa along with Coconut Chutney and Vengaya Sambar for a delicious breakfast or a weeknight dinner. Mint chutney or tomato chutney is also good', 50, 'roast.jpg', 'bread'),
(8, 'Chettiar Chicken', 'Our famous Chettiar chicken is made from mixing indigenous chicken with a secret spice blend and roasting it in the coconut oil. The taste of this comes from the crispy cashews, dark soya sauce, red chillies and a lot more!', 170, 'dragon.jpg', 'special'),
(9, 'Crispy Chicken', 'With a fried coating of corn flour ad maida, this fried chicken is so crispy and tasty. Inspired from the KFC chicken, this boneless chicken breast is deep fried and hot served with white sauce!', 150, 'kfc.jpg', 'special'),
(10, 'Creamy chicken', 'chicken breasts in an irresistible garlic sauce filled with caramelized onions and garlic. Lightly floured boneless chicken breasts are pan fried in butter until golden and crispy and added to garlic cream sauce.', 165, 'creamy.jpg', 'special'),
(11, 'Paneer Butter Masala', 'Classic Indian Paneer in rich gravy added with butter.', 130, 'paneer.jpg', 'gravy'),
(12, 'Chettinad Chicken', 'spicy chicken gravy  and has its origin from Chettinad region of Tamil Nadu.', 140, 'chettinad.jpg', 'gravy'),
(14, 'Mushroom Gravy', 'Mushrooms in rich gravy of pepper, onions cardamom and more spices!', 135, 'mushroom.jpg', 'gravy'),
(13, 'Puri', 'Puri is a deep-fat fried bread made from unleavened whole-wheat flour that originated in the Indian subcontinent. It is eaten for breakfast or as a snack or light meal. It is usually served with a savory curry or bhaji, as in puri bhaji, but may also be eaten with sweet dishes. Puri masala is exclusively prepared for this.', 70, 'puri.jpg', 'bread');

-- --------------------------------------------------------

--
-- Table structure for table `order_log`
--

CREATE TABLE `order_log` (
  `order_id` int(11) NOT NULL,
  `item_sno` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_log`
--

INSERT INTO `order_log` (`order_id`, `item_sno`, `quantity`, `total`) VALUES
(3, 1, 2, 200),
(3, 2, 2, 200),
(3, 3, 2, 300),
(3, 5, 1, 200),
(3, 6, 1, 240),
(3, 7, 1, 50),
(3, 8, 1, 170),
(3, 9, 1, 150),
(3, 10, 2, 330),
(3, 13, 1, 135),
(3, 14, 1, 135),
(6, 1, 2, 200),
(6, 2, 1, 100),
(6, 3, 2, 300);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_log`
--
ALTER TABLE `order_log`
  ADD PRIMARY KEY (`order_id`,`item_sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
