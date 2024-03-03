-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2023 at 06:50 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bakery management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) NOT NULL,
  `admin_name` varchar(30) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(1, 'Roopali Kosta', 'kostaroopali@gmail.com', '12345678'),
(3, 'Prabha', 'kostaprabha@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `bakery_products`
--

CREATE TABLE `bakery_products` (
  `id` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `photopath` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bakery_products`
--

INSERT INTO `bakery_products` (`id`, `name`, `price`, `photopath`) VALUES
(8, 'Cream roll	', 20, 0x637265616d2d686f726e732d353030783530302e6a7067),
(9, 'Strawberry cakeroll	', 250, 0x737472617762657272792d63616b652d726f6c6c2d31312d363030783930302e6a7067),
(10, 'Brown bread	', 35, 0x34303038373532362d355f322d66726573686f2d62726f776e2d62726561642d736166652d7072657365727661746976652d667265652e77656270),
(11, 'Ajwain cookies	', 120, 0x616a7761696e2d636f6f6b6965732d353030783530302e6a7067),
(12, 'Chocolate chip cookies	', 450, 0x6368636f2d636869702d76697363756974202832292e6a666966);

-- --------------------------------------------------------

--
-- Table structure for table `cake`
--

CREATE TABLE `cake` (
  `id` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `photopath` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cake`
--

INSERT INTO `cake` (`id`, `name`, `price`, `photopath`) VALUES
(14, 'Chocolate cake 500gm	', 450, 0x726963682d63686f636f6c6174652d74727566666c652d63616b652e6a7067),
(15, 'Pineapple cake 500gm	', 400, 0x702d7370656369616c2d62757474657273636f7463682d63616b652d68616c662d6b672d2d3130393231382d6d2e77656270),
(16, 'Butterscotch cake 500gm	', 450, 0x63616b653132302e6a7067),
(18, 'White forest cake 500gm', 500, 0x2d6275792d77686974652d666f726573742d63616b652d6368656e6e61692d2e6a7067),
(19, 'Rasmalai cake 500gm', 600, 0x70686f746f2e6a7067),
(20, 'Blueberry cake 500gm', 590, 0x626c756562657272792d63616b652d373030783730302e6a7067),
(21, 'Strawberry cake 500gm', 690, 0x70696e6b2d737472617762657272792d63616b652d353130783531302d312e706e67),
(22, 'Dry Fruit cake 500gm', 290, 0x6c6971756f7263686f636f6c6174657363616b65732d63686f636f6c6174652d6472792d63616b652d68656172742d7368617065642d776974682d636173686577732d68616c66637574652d65653965313365302d363435662d313165622d383336392d6131653033376139623938622e6a666966),
(41, 'Chocolate cake 500gm', 450, 0x6973746f636b70686f746f2d3530313939393039362d363132783631322e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `customer_information`
--

CREATE TABLE `customer_information` (
  `customer_id` int(30) NOT NULL,
  `customer_name` varchar(30) NOT NULL,
  `customer_email` varchar(30) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `customer_address` varchar(30) NOT NULL,
  `password` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_information`
--

INSERT INTO `customer_information` (`customer_id`, `customer_name`, `customer_email`, `phone`, `customer_address`, `password`) VALUES
(1, 'roopali', 'kostaroopali@gmail.com', '7389237787', 'Sharda chowk', 12345678),
(3, 'muskan', 'muskankulhade@gmail.com', '1234567890', 'dhanwantari nagar', 23456),
(32, 'Arpita', 'arpita@gmail.com', '6789234567', 'Madan mahal', 1234);

-- --------------------------------------------------------

--
-- Table structure for table `donuts`
--

CREATE TABLE `donuts` (
  `id` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `photopath` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donuts`
--

INSERT INTO `donuts` (`id`, `name`, `price`, `photopath`) VALUES
(8, 'Pack of 6 Donuts	', 300, 0x7368757474657273746f636b5f313632393135383137302d353030783235362e6a7067),
(9, 'chocolate donut	', 60, 0x506f7274666f6c696f2e77656270),
(10, 'Pink donut	', 60, 0x70696e6b2d646f6e75742d313139333439383637312d363132783631322e6a7067),
(11, 'Blue donut	', 60, 0x626c75652d646f6e75742e6a666966),
(12, 'Red velevt donuts	', 120, 0x7265642d76656c7665742d646f6e7574732e6a666966);

-- --------------------------------------------------------

--
-- Table structure for table `muffins`
--

CREATE TABLE `muffins` (
  `id` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `photopath` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `muffins`
--

INSERT INTO `muffins` (`id`, `name`, `price`, `photopath`) VALUES
(9, 'Vanilla cupcake	', 50, 0x76616e696c6c612d63757063616b652e77656270),
(10, 'chocolate cupcake	', 70, 0x5468652d426573742d566567616e2d43686f636f6c6174652d43757063616b65732e6a7067),
(11, 'Red velvet cupcake	', 80, 0x32373734342e77656270),
(12, 'Pack of 6 Muffins	', 250, 0x706578656c732d70686f746f2d313334363334352e6a706567),
(13, 'Pack of 6 cupcakes	', 360, 0x65386365623363366561663137666338653033366333373836613337613161652e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `order_manager`
--

CREATE TABLE `order_manager` (
  `Order_id` int(100) NOT NULL,
  `Full_name` varchar(100) NOT NULL,
  `Phone_no` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_manager`
--

INSERT INTO `order_manager` (`Order_id`, `Full_name`, `Phone_no`, `Address`) VALUES
(22, 'Roopali Kosta', '7389237787', 'Sharda chowk'),
(23, 'Arpita Singh', '6789234567', 'Madan mahal');

-- --------------------------------------------------------

--
-- Table structure for table `pastry`
--

CREATE TABLE `pastry` (
  `id` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `photopath` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pastry`
--

INSERT INTO `pastry` (`id`, `name`, `price`, `photopath`) VALUES
(13, 'Hazelnut crunchy pastry	', 90, 0x64623830663366302d383634392d343436622d616335612d6337313661386137396436362e6a706567),
(14, 'Red Velvet pastry	', 120, 0x30363133363363623739366233373637346634393231303833383439383966662e6a7067),
(16, 'Cheesecake pastry	', 110, 0x6368656573652d63616b655f383233362e6a7067),
(17, 'Vanilla pastry	', 50, 0x56616e696c6c615061737472795f6772616e64652e77656270),
(18, 'Choco chip pastry	', 80, 0x756e6e616d65642e77656270);

-- --------------------------------------------------------

--
-- Table structure for table `recommended_products`
--

CREATE TABLE `recommended_products` (
  `id` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `photopath` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recommended_products`
--

INSERT INTO `recommended_products` (`id`, `name`, `price`, `photopath`) VALUES
(34, 'Chocolate cake 500gm', 450, 0x726963682d63686f636f6c6174652d74727566666c652d63616b652e6a7067),
(35, 'Pineapple cake 500gm', 400, 0x702d7370656369616c2d62757474657273636f7463682d63616b652d68616c662d6b672d2d3130393231382d6d2e77656270),
(36, 'Butterscotch cake 500gm', 450, 0x63616b653132302e6a7067),
(37, 'Hazelnut crunchy pastry', 90, 0x64623830663366302d383634392d343436622d616335612d6337313661386137396436362e6a706567),
(38, 'Pack of 6 Muffins', 250, 0x706578656c732d70686f746f2d313334363334352e6a706567),
(39, 'Pack of 6 Donuts', 300, 0x7368757474657273746f636b5f313632393135383137302d353030783235362e6a7067),
(40, 'Cream roll', 20, 0x637265616d2d686f726e732d353030783530302e6a7067),
(41, 'Pack of 6 cupcakes	', 360, 0x65386365623363366561663137666338653033366333373836613337613161652e6a7067),
(42, 'Strawberry cakeroll', 250, 0x737472617762657272792d63616b652d726f6c6c2d31312d363030783930302e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

CREATE TABLE `user_orders` (
  `Order_id` int(100) NOT NULL,
  `Item_Name` varchar(100) NOT NULL,
  `Price` int(100) NOT NULL,
  `Quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_orders`
--

INSERT INTO `user_orders` (`Order_id`, `Item_Name`, `Price`, `Quantity`) VALUES
(12, 'Chocolate cake 500gm', 450, 1),
(12, 'Pineapple cake 500gm', 400, 1),
(13, 'Cream roll	', 20, 1),
(13, 'Strawberry cakeroll	', 250, 1),
(13, 'Brown bread	', 35, 1),
(13, 'Ajwain cookies	', 120, 1),
(13, 'Chocolate chip cookies	', 450, 1),
(13, 'Pack of 6 Donuts	', 300, 1),
(13, 'chocolate donut	', 60, 1),
(13, 'Pink donut	', 60, 1),
(13, 'Blue donut	', 60, 1),
(13, 'Red velevt donuts	', 120, 1),
(13, 'Pack of 6 cupcakes	', 360, 1),
(13, 'Pack of 6 Muffins	', 250, 1),
(13, 'Red velvet cupcake	', 80, 1),
(13, 'chocolate cupcake	', 70, 1),
(13, 'Vanilla cupcake	', 50, 1),
(13, 'Hazelnut crunchy pastry	', 90, 1),
(13, 'Red Velvet pastry	', 120, 1),
(13, 'Cheesecake pastry	', 110, 1),
(13, 'Vanilla pastry	', 50, 1),
(13, 'Choco chip pastry	', 80, 1),
(13, 'Dry Fruit cake 500gm', 290, 1),
(13, 'Strawberry cake 500gm', 690, 1),
(13, 'Blueberry cake 500gm', 590, 1),
(13, 'Rasmalai cake 500gm', 600, 1),
(13, 'White forest cake 500gm', 500, 1),
(13, 'Vanilla cake 500gm	', 300, 1),
(13, 'Butterscotch cake 500gm	', 450, 1),
(13, 'Pineapple cake 500gm	', 400, 1),
(13, 'Chocolate cake 500gm	', 450, 1),
(13, 'Strawberry cakeroll', 250, 1),
(13, 'Cream roll', 20, 1),
(13, 'Pack of 6 Donuts', 300, 1),
(13, 'Pack of 6 Muffins', 250, 1),
(13, 'Hazelnut crunchy pastry', 90, 1),
(13, 'Butterscotch cake 500gm', 450, 1),
(13, 'Pineapple cake 500gm', 400, 1),
(13, 'Chocolate cake 500gm', 450, 1),
(18, 'Butterscotch cake 500gm', 450, 1),
(19, 'Pineapple cake 500gm', 400, 1),
(19, 'Chocolate cake 500gm', 450, 1),
(20, 'Chocolate cake 500gm	', 450, 4),
(20, 'Cheesecake pastry	', 110, 1),
(20, 'Red velvet cupcake	', 80, 1),
(20, 'Pack of 6 Donuts	', 300, 1),
(20, 'Brown bread	', 35, 1),
(21, 'Chocolate cake 500gm', 450, 1),
(21, 'Pack of 6 Donuts', 300, 1),
(21, 'Hazelnut crunchy pastry', 90, 1),
(21, 'Pack of 6 cupcakes	', 360, 1),
(22, 'Pineapple cake 500gm', 400, 1),
(22, 'Butterscotch cake 500gm', 450, 1),
(22, 'Chocolate cake 500gm', 450, 1),
(23, 'Pack of 6 Donuts', 300, 1),
(23, 'Hazelnut crunchy pastry', 90, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `bakery_products`
--
ALTER TABLE `bakery_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cake`
--
ALTER TABLE `cake`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_information`
--
ALTER TABLE `customer_information`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `donuts`
--
ALTER TABLE `donuts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `muffins`
--
ALTER TABLE `muffins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_manager`
--
ALTER TABLE `order_manager`
  ADD PRIMARY KEY (`Order_id`);

--
-- Indexes for table `pastry`
--
ALTER TABLE `pastry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recommended_products`
--
ALTER TABLE `recommended_products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `bakery_products`
--
ALTER TABLE `bakery_products`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `cake`
--
ALTER TABLE `cake`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `customer_information`
--
ALTER TABLE `customer_information`
  MODIFY `customer_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `donuts`
--
ALTER TABLE `donuts`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `muffins`
--
ALTER TABLE `muffins`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `order_manager`
--
ALTER TABLE `order_manager`
  MODIFY `Order_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `pastry`
--
ALTER TABLE `pastry`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `recommended_products`
--
ALTER TABLE `recommended_products`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
