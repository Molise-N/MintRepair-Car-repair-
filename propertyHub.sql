-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 26, 2024 at 06:23 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `propertyHub`
--

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `property_id` int(11) NOT NULL,
  `image_url` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `property_type` enum('residential','rental','warehouse') NOT NULL,
  `description` text NOT NULL,
  `price` int(15) NOT NULL,
  `feature` varchar(255) NOT NULL,
  `latitude` varchar(50) DEFAULT NULL,
  `longitude` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`property_id`, `image_url`, `email`, `property_type`, `description`, `price`, `feature`, `latitude`, `longitude`) VALUES
(23, '663aeeecb69ee.jpg', 'khama@gmail.com', 'residential', 'good', 4443, 'High Ceilings,Master Suite,garage,Walk-in Pantry,Home Theater,Security System,Central Air Conditioning', '-29.3208064', '27.5120128'),
(24, '663aef2f8e97e.jpg', 'khama@gmail.com', 'residential', 'good', 544044, 'High Ceilings,Master Suite,garage,Walk-in Pantry,Home Gym,Security System,fireplace,home office', '-29.3208064', '27.5120128'),
(25, '663af01f22f5a.jpg', 'khama@gmail.com', 'residential', 'bad property', 123438, 'High Ceilings,Master Suite,garage,Home Gym,Home Theater,Security System,Theater Security System', '-29.3208064', '27.5120128'),
(26, '663af061d4b7f.jpg', 'khama@gmail.com', 'residential', 'good', 12334, 'High Ceilings,garage,Home Theater,home office,outdoor space,pool,walk-in closet,fenced', '-29.3208064', '27.5120128'),
(27, '663af0cb53f3a.jpg', 'khama@gmail.com', 'residential', 'good', 43895, 'garage,Home Gym,Home Theater,Central Air Conditioning,Theater Security System,Hardwood Flooring,home office,outdoor space,pool', '-29.3208064', '27.5120128'),
(28, '663af17d20a20.jpg', 'khama@gmail.com', 'residential', 'good', 31232, 'High Ceilings,garage,Home Theater,Central Air Conditioning,Theater Security System,outdoor space', '-29.3208064', '27.5120128'),
(29, '663af19732b7b.jpg', 'khama@gmail.com', 'residential', 'good', 5575, 'Walk-in Pantry,Home Gym,Central Air Conditioning,Hardwood Flooring', '-29.3208064', '27.5120128'),
(30, '663af1c46cf40.jpg', 'hoo@gmail.com', 'residential', 'good', 45464, 'Master Suite,garage,Home Theater,Security System,fireplace', '-29.3208064', '27.5120128'),
(31, '663af1eaf33b8.jpg', 'khama@gmail.com', 'residential', '4 bedrooms', 8459, 'High Ceilings,Master Suite,Home Theater,home office,outdoor space,pool,walk-in closet,fenced', '-29.3208064', '27.5120128'),
(32, '663af218bc54d.jpg', 'hoo@gmail.com', 'residential', '5 bedrooms', 555434, 'garage,Home Gym,Theater Security System,Hardwood Flooring,outdoor space,pool', '-29.3208064', '27.5120128'),
(33, '663af241b42ea.jpg', 'hoo@gmail.com', 'residential', 'good', 334339, 'Home Gym,Theater Security System,Hardwood Flooring,home office,pool,fenced', '-29.3208064', '27.5120128'),
(34, '663af27106ede.jpg', 'khama@gmail.com', 'residential', '6 bedrooms', 664860, 'High Ceilings,Master Suite,Home Gym,Home Theater,Security System,Hardwood Flooring,fireplace,pool,walk-in closet', '-29.3208064', '27.5120128'),
(35, '663af29bc9b59.jpg', 'khama@gmail.com', 'residential', '5 bedrooms', 444242, 'Theater Security System,home office,outdoor space,pool,fenced', '-29.3208064', '27.5120128'),
(36, '663af2d2e89f6.jpg', 'hygk@gmail.com', 'residential', '2 bedrooms', 12323, 'High Ceilings,Master Suite,Home Gym,Home Theater,Security System,Central Air Conditioning,fireplace,home office,walk-in closet', '-29.3208064', '27.5120128'),
(37, '663af2f7363c7.jpg', 'hygk@gmail.com', 'residential', '3 bedrooms', 34243, 'Master Suite,Walk-in Pantry,Central Air Conditioning,Theater Security System,fireplace,home office', '-29.3208064', '27.5120128'),
(38, '663af31f20f05.jpg', 'hygk@gmail.com', 'residential', '5 bedrooms', 555444, 'High Ceilings,Master Suite,garage,Security System,home office,outdoor space,pool', '-29.3208064', '27.5120128'),
(39, '663af37d53eba.jpg', 'hygk@gmail.com', 'residential', '3 bedrooms', 5453426, 'Master Suite,garage,Walk-in Pantry,Central Air Conditioning,fireplace,outdoor space', '-29.3208064', '27.5120128'),
(40, '663af39e2d615.jpg', 'khama@gmail.com', 'residential', '6 bedrooms', 4334343, 'High Ceilings,Home Theater,Central Air Conditioning,fireplace,outdoor space,pool', '-29.3208064', '27.5120128'),
(41, '663af3c568235.jpg', 'hygk@gmail.com', 'residential', '3 bedrooms', 12324, 'Security System,Central Air Conditioning,Theater Security System,Hardwood Flooring,outdoor space', '-29.3208064', '27.5120128'),
(42, '663af42a1a5e6.jpg', 'hygk@gmail.com', 'residential', '3 bedrooms', 343469, 'High Ceilings,Master Suite,garage,Walk-in Pantry,Home Gym', '-29.3208064', '27.5120128'),
(43, '663af448dc12e.jpg', 'khama@gmail.com', 'residential', '3 bedrooms', 422432, 'High Ceilings,Master Suite,garage,Walk-in Pantry,Home Gym', '-29.3208064', '27.5120128'),
(44, '663b293d5df38.jpg', 'pitso1@gmail.com', 'warehouse', 'good place', 8832, 'Theater Security System,Hardwood Flooring,fireplace,home office', '-29.4453248', '27.7250048'),
(47, '663b74a064b39.jpg', 'hoo@gmail.com', 'residential', '4 bed ', 566760, 'Home Gym,Home Theater,Central Air Conditioning', '-29.4453248', '27.7250048');

-- --------------------------------------------------------

--
-- Table structure for table `RateComment`
--

CREATE TABLE `RateComment` (
  `review_id` int(11) NOT NULL,
  `property_id` int(11) DEFAULT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text NOT NULL,
  `datetime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `RateComment`
--

INSERT INTO `RateComment` (`review_id`, `property_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(6, 0, 'Lorem Ipsum', 4, 'a very nice spot', 1715117118),
(7, 0, 'Jane Doe', 5, 'it is bad by the look of things', 1715117118),
(8, 0, 'John Doe', 5, 'good place', 1715117118),
(9, 0, 'thabo', 3, 'good', 1715116326),
(10, 11, 'molise', 3, 'good place to stay', 1715116908),
(11, 11, 'molise', 3, 'good place', 1715117118),
(13, NULL, 'hoo', 3, 'good', 1716474786),
(14, NULL, 'hoo', 3, 'good', 1716474861),
(15, NULL, 'piii', 5, 'good', 1716474903),
(16, NULL, 'ju', 4, 'this is a good place', 1716475075),
(17, 32, 'juu', 3, 'good place', 1716475124),
(18, 32, 'yuu@gmail.com', 0, 'good', 1716475728),
(19, 32, 'li@gmail.com', 4, 'good', 1716475759),
(20, 32, 'yuu@gmail.com', 5, 'good', 1716477476);

-- --------------------------------------------------------

--
-- Table structure for table `toComfirm`
--

CREATE TABLE `toComfirm` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` enum('seller','both') NOT NULL,
  `id_photo_front` varchar(255) NOT NULL,
  `id_photo_back` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `toComfirm`
--

INSERT INTO `toComfirm` (`name`, `email`, `role`, `id_photo_front`, `id_photo_back`, `password`) VALUES
('hoo', 'hoo@gmail.com', 'seller', 'hhh', 'gjj', '827ccb0eea8a706c4c34a16891f84e7b'),
('hhgad', 'jhhj@gmail.com', 'seller', 'hjh', 'hhj', '827ccb0eea8a706c4c34a16891f84e7b'),
('op', 'op@gmail.com', 'seller', 'sf', 'dffd', '827ccb0eea8a706c4c34a16891f84e7b'),
('pitso', 'pits1@gmail.com', 'seller', 'gfd', 'dggd', '12345'),
('pitso', 'pitso1@gmail.com', 'seller', 'dff', 'dggd', '12345'),
('q', 'q@gmail.com', 'seller', 'afdad', 'dffdd', '827ccb0eea8a706c4c34a16891f84e7b'),
('tyu', 'yhjjh@gmail.com', 'seller', 'ghjk', 'hgjk', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` int(11) NOT NULL,
  `role` enum('seller','buyer','both','admin') NOT NULL,
  `id_number` varchar(255) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `contact`, `role`, `id_number`, `password`) VALUES
(1, 'molise', 'molise@gmail.com', 50000000, 'seller', '98779', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'thabo', 'thabo@gmail.com', 50000001, 'seller', '97661', '827ccb0eea8a706c4c34a16891f84e7b'),
(15, 'lef', 'lef@gmail.com', 50000002, 'buyer', 'nmnm', '827ccb0eea8a706c4c34a16891f84e7b'),
(16, 'jk', 'jk@gmail.com', 50000002, 'buyer', '11672', '827ccb0eea8a706c4c34a16891f84e7b'),
(17, 'gj', 'gj@gmail.com', 50000002, 'buyer', '87711', '827ccb0eea8a706c4c34a16891f84e7b'),
(18, 'bl', 'bl@gmail.com', 50000003, 'buyer', '87652', '827ccb0eea8a706c4c34a16891f84e7b'),
(19, 'fddf', 're@gmail.com', 50000045, 'buyer', '08764', '827ccb0eea8a706c4c34a16891f84e7b'),
(20, 'thapelo', 'thapelo@gmail.com', 500002020, 'admin', '75346', '827ccb0eea8a706c4c34a16891f84e7b'),
(21, 'jyuk', 'jyuk@gmail.com', 50030000, 'seller', '98754', '827ccb0eea8a706c4c34a16891f84e7b'),
(22, 'gg', 'gy@gmail.com', 500440000, 'buyer', '76765', '827ccb0eea8a706c4c34a16891f84e7b'),
(23, 'pito', ' pits1@gmail.com ', 50670000, 'both', '75677', '827ccb0eea8a706c4c34a16891f84e7b'),
(24, 'po', 'pitso1@gmail.com ', 51000000, 'both', '65567', '827ccb0eea8a706c4c34a16891f84e7b'),
(25, 'til', 'til@gmail.com', 630000, 'buyer', '56656', '827ccb0eea8a706c4c34a16891f84e7b'),
(26, 'hoo', 'hoo@gmail.com', 58000000, 'seller', '76679', '827ccb0eea8a706c4c34a16891f84e7b'),
(27, 'hjk', 'jkh@gmail.com', 59000000, 'buyer', '87666', '827ccb0eea8a706c4c34a16891f84e7b'),
(28, 'nsff', 'kfdkj@gnmail.com', 50090000, 'buyer', '76555', '827ccb0eea8a706c4c34a16891f84e7b'),
(29, 'yuu', 'yuu@gmail.com', 57000000, 'buyer', '65567', '827ccb0eea8a706c4c34a16891f84e7b'),
(30, 'ntlhoki', 'hygk@gmail.com', 57689423, 'seller', '1', '827ccb0eea8a706c4c34a16891f84e7b'),
(31, 'Thabo Khama', 'khama@gmail.com', 6567777, 'buyer', '10743', '827ccb0eea8a706c4c34a16891f84e7b'),
(32, 'ntlhoki', 'tm@gmail.com', 56988781, 'buyer', '1', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`property_id`);

--
-- Indexes for table `RateComment`
--
ALTER TABLE `RateComment`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `toComfirm`
--
ALTER TABLE `toComfirm`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `property_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `RateComment`
--
ALTER TABLE `RateComment`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
