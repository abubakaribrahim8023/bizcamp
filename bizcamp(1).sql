-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 20, 2023 at 09:30 AM
-- Server version: 8.0.32-0ubuntu0.22.04.2
-- PHP Version: 8.1.2-1ubuntu2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bizcamp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_record`
--

CREATE TABLE `admin_record` (
  `admin_id` int NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin_record`
--

INSERT INTO `admin_record` (`admin_id`, `full_name`, `userName`, `password`) VALUES
(1, 'Abubakar Ibrahim Mr Code', '@abubakarmrcode', '08037858023');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `mess_id` int NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`mess_id`, `user_name`, `email`, `message`, `date`) VALUES
(1, 'Abubakar Ibrahim Umar', '08037858023', 'Inada Matsala a profile dina idan natso edit', '2020-04-23'),
(3, 'Abubakar Ibrahim Umar', 'abubakarcoding22@gmail.com', 'loreddaas \r\ndfadffassf fregvsf wedf\r\n\r\nases fsernjwegvds\r\nfawwr cswerhqwer werwerr uweef ksrf\r\nefwe fwsw3r wev\r\nqwerd sdfwef mwefr vrrerf err ', '2020-04-23');

-- --------------------------------------------------------

--
-- Table structure for table `post_data`
--

CREATE TABLE `post_data` (
  `id` int NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `b_name` varchar(100) NOT NULL,
  `p_number` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `b_profile` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `discription` varchar(999) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `post_data`
--

INSERT INTO `post_data` (`id`, `full_name`, `b_name`, `p_number`, `address`, `email`, `b_profile`, `discription`, `price`, `image`, `date`) VALUES
(1, 'Maryam Muhamad', 'Hacker', '43344444443434', 'Yalanguruza', 'abubakarcoding22@gmail.com', 'my beey 20230318_121819.jpg', 'Sooon than letter than you', '100', 'Screenshot from 2023-03-28 01-57-54.png', '18-04-23 09:06'),
(5, 'Abubakar Umar', 'Tailor', '08037858023', 'Tudun Wandan Fantami', 'abubakarcoding2222@gmail.com', 'my beey 20230318_121819.jpg', 'Kusan Haka Muna bada sari da sauransu', '2000', '23.jpg', '19-04-23 01:15'),
(7, 'Abubakar Umar', 'Tailor', '08037858023', 'Tudun Wandan Fantami', 'abubakarcoding2222@gmail.com', 'my beey 20230318_121819.jpg', 'Kusan Haka Muna bada sari da sauransusdfsefsdfaeda', '250', 'Screenshot from 2023-04-12 15-03-47.png', '19-04-23 01:23'),
(8, 'Ms Imam', 'web developer', '08063211481', 'new gra', 'mubaraksalisuimam22@gmail.com', 'xainu.png', 'Muna design website, web app, e-commerce website etc ', '100000', 'Screenshot from 2023-04-04 10-55-08.png', '19-04-23 01:33'),
(9, 'Ms Imam', 'web developer', '08063211481', 'new gra', 'mubaraksalisuimam22@gmail.com', 'xainu.png', 'Muna design website, web app, e-commerce website etc ', '100000', 'Screenshot from 2023-04-04 10-55-08.png', '19-04-23 01:33'),
(10, 'Ms Imam', 'web developer', '08063211481', 'new gra', 'mubaraksalisuimam22@gmail.com', 'xainu.png', 'Muna design website, web app, e-commerce website etc', '2000', 'a.png', '19-04-23 03:48'),
(11, 'Ms Imam', 'web developer', '08063211481', 'new gra', 'mubaraksalisuimam22@gmail.com', 'xainu.png', 'Muna design website, web app, e-commerce website etc', '100', 'hero-bg.jpg', '20-04-23 09:25'),
(12, 'Ms Imam', 'web developer', '08063211481', 'new gra', 'mubaraksalisuimam22@gmail.com', 'xainu.png', 'Muna design website, web app, e-commerce website etc', '2000', 'features (copy).jpg', '20-04-23 &4b10Z; 09:28'),
(13, 'Ms Imam', 'web developer', '08063211481', 'new gra', 'mubaraksalisuimam22@gmail.com', 'xainu.png', 'Muna design website, web app, e-commerce website etc', '250', 'events-1.jpg', '20-04-23 09:28');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `user_id` int NOT NULL,
  `b_id` varchar(100) NOT NULL,
  `full_name` varchar(110) NOT NULL,
  `b_name` varchar(100) NOT NULL,
  `p_number` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `b_profile` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`user_id`, `b_id`, `full_name`, `b_name`, `p_number`, `address`, `email`, `password`, `b_profile`, `date`) VALUES
(12, '67e516471d9c7469828816d4b0efe034', 'Abubakar Umar', 'Tailor', '08037858023', 'Tudun Wandan Fantami', 'abubakarcoding22@gmail.com', 'e3ceb5881a0a1fdaad01296d7554868d', 'course-1.jpg', '19-04-23'),
(13, '99e30abf583a4c0bd9f1feabcca9ece2', 'Abubakar Umar', 'Tailor', '08037858023', 'Tudun Wandan Fantami', 'abubakarcoding2222@gmail.com', 'e3ceb5881a0a1fdaad01296d7554868d', 'my beey 20230318_121819.jpg', '19-04-23'),
(14, 'b5ed06a8223485fbf1bbb06b63bfe5ff', 'Ms Imam', 'web developer', '08063211481', 'new gra', 'mubaraksalisuimam22@gmail.com', '048c81846f4635de0820ecf8286c40cb', 'xainu.png', '19-04-23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_record`
--
ALTER TABLE `admin_record`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`mess_id`);

--
-- Indexes for table `post_data`
--
ALTER TABLE `post_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_record`
--
ALTER TABLE `admin_record`
  MODIFY `admin_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `mess_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `post_data`
--
ALTER TABLE `post_data`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
