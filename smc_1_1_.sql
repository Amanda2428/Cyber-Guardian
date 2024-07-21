-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2024 at 10:07 AM
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
-- Database: `smc_1(1)`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `email` varchar(300) NOT NULL,
  `sentdate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `message`, `email`, `sentdate`) VALUES
(122, 'ffff', 'may@gmail.com', '2024-07-09 06:43:21'),
(123, 'fffffffff', 'may@gmail.com', '2024-07-09 06:43:53'),
(124, 'fffffffff', 'may@gmail.com', '2024-07-09 06:46:37'),
(131, 'hi may', 'may@gmail.com', '2024-07-09 06:52:41'),
(132, 'hello', 'may@gmail.com', '2024-07-09 06:52:48'),
(137, 'fff8', 'may@gmail.com', '2024-07-09 06:57:50'),
(159, 'ffff', 'may@gmail.com', '2024-07-09 07:18:23');

-- --------------------------------------------------------

--
-- Table structure for table `howparenthelp`
--

CREATE TABLE `howparenthelp` (
  `id` int(11) NOT NULL,
  `heading` varchar(500) NOT NULL,
  `messaging` varchar(1000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `image1` varchar(200) NOT NULL,
  `image2` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `howparenthelp`
--

INSERT INTO `howparenthelp` (`id`, `heading`, `messaging`, `date`, `image1`, `image2`) VALUES
(6, 'ffjfjf', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus aspernatur iusto cumque ducimus laudantium eum molestias maiores, illo quam similique voluptatum dicta inventore, facere optio. Eum, repudiandae! Tempore, amet laborum?', '2024-07-06 19:31:02', 'Screenshot 2024-04-01 215224.png', 'Screenshot 2024-06-03 234716.png');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(8) NOT NULL,
  `city` varchar(200) NOT NULL,
  `subscription` int(11) NOT NULL,
  `profileImg` varchar(500) NOT NULL,
  `usertype` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `name`, `email`, `password`, `city`, `subscription`, `profileImg`, `usertype`) VALUES
(1, 'susu', 'susu@gmail.com', '12345', 'Yangon', 1, '', 0),
(2, 'Admin', 'admin@smc.com', '12345', 'Yangon', 1, '', 1),
(3, 'Kyaw', 'kyaw@gmail.com', '12345', 'Yangon', 1, '', 0),
(4, 'May Thu', 'may@gmail.com', '12345', 'Yangon', 1, '', 0),
(5, 'Saw', 'Saw@gmail.com', '12345', 'Yangon', 1, '', 0),
(6, 'Shan', 'Shan@gmail.com', '12345', 'Yangon', 0, 'shan.png', 0),
(9, 'Kaway kg', 'heeeheee@gmail.com', '12345', 'Yangon', 0, 'Doctor.jfif', 0);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `content` varchar(2000) NOT NULL,
  `newsimg` varchar(200) NOT NULL,
  `publishdate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `title`, `content`, `newsimg`, `publishdate`) VALUES
(13, 'ggg', 'ggg', 'Screenshot 2024-05-09 230703.png', '2024-07-05 07:48:26'),
(19, 'ff', 'ff', 'Screenshot 2024-06-12 191418.png', '2024-07-05 14:39:53'),
(20, 'ffffffffffyyyyyymat', 'fffjfjffhf', 'Screenshot 2024-06-08 002555.png', '2024-07-05 14:40:09'),
(23, 'ggggg', 'ggg', 'Screenshot 2024-04-02 100246.png', '2024-07-05 16:16:43'),
(24, 'Hi', ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro minus sequi nostrum at harum amet perferendis consequatur neque quasi sit distinctio est ea, fuga excepturi praesentium dolor. Ipsa, veritatis aperiam? ', 'Doctor.jfif', '2024-07-11 07:56:23');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `info` varchar(1000) NOT NULL,
  `serviceImg` varchar(1000) NOT NULL,
  `createdate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `info`, `serviceImg`, `createdate`) VALUES
(5, 'fff', 'fff', 'ffff', '', '2024-07-05 04:14:19'),
(10, 'ff', 'ff', 'ff', '', '2024-07-07 18:50:20'),
(15, 'fff', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur facere aspernatur expedita eaque asperiores doloremque quasi id soluta quibusdam quod reprehenderit, ducimus quidem sint quaerat voluptatum facilis praesentium voluptas dicta?Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur facere aspernatur expedita eaque asperiores doloremque quasi id soluta quibusdam quod reprehenderit, ducimus quidem sint quaerat voluptatum facilis praesentium voluptas dicta?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur facere aspernatur expedita eaque asperiores doloremque quasi id soluta quibusdam quod reprehenderit, ducimus quidem sint quaerat voluptatum facilis praesentium voluptas dicta?', '', '2024-07-13 10:24:08'),
(16, 'Hiff', 'fffu', 'fffu', '', '2024-07-13 19:29:49'),
(17, 'fffff', 'fff', 'iii', 'shan.png', '2024-07-13 19:51:27');

-- --------------------------------------------------------

--
-- Table structure for table `socialmediaapps`
--

CREATE TABLE `socialmediaapps` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `logo` varchar(1000) NOT NULL,
  `link` varchar(500) NOT NULL,
  `privacylink` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `socialmediaapps`
--

INSERT INTO `socialmediaapps` (`id`, `name`, `logo`, `link`, `privacylink`) VALUES
(4, 'Facebook', 'Facebook_Logo_2023.png', 'https://www.facebook.com/help/325807937506242', 'https://www.facebook.com/help/325807937506242'),
(14, 'ffffuuuuuuuu', 'Screenshot 2024-06-03 223521.png', 'ffffffuuuuuuu', 'fffffffffffuuuuuuuu'),
(15, 'SnapChat', 'Doctor.jfif', 'https://www.snapchat.com/', 'https://www.snapchat.com/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `howparenthelp`
--
ALTER TABLE `howparenthelp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socialmediaapps`
--
ALTER TABLE `socialmediaapps`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

--
-- AUTO_INCREMENT for table `howparenthelp`
--
ALTER TABLE `howparenthelp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `socialmediaapps`
--
ALTER TABLE `socialmediaapps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
