-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2021 at 03:36 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `applied_auditions`
--

CREATE TABLE `applied_auditions` (
  `aaid` int(11) NOT NULL,
  `aid` int(11) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `name` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `phone` int(200) DEFAULT NULL,
  `skills` varchar(500) DEFAULT NULL,
  `select_status` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applied_auditions`
--

INSERT INTO `applied_auditions` (`aaid`, `aid`, `uid`, `name`, `email`, `phone`, `skills`, `select_status`) VALUES
(1, 1, 2, 'Balkrushna', 'balkrushna@example.com', 123456, '', NULL),
(2, 3, 2, 'Balkrushna', 'balkrushna@example.com', 123456, 'dancing', NULL),
(3, 4, 2, 'Balkrushna', 'balkrushna@example.com', 123456, 'acting', NULL),
(4, 5, 5, 'Pratik Kulkarni', 'pratik@example.com', 12345124, 'acting', NULL),
(5, 7, 2, 'Balkrushna', 'balkrushna@example.com', 123456, '', NULL),
(6, 8, 2, 'Balkrushna', 'balkrushna@example.com', 123456, 'acting', NULL),
(7, 9, 2, 'Balkrushna', 'balkrushna@example.com', 123456, 'acting', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `applied_courses`
--

CREATE TABLE `applied_courses` (
  `aid` int(11) NOT NULL,
  `cid` int(11) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `name` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `contact` int(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applied_courses`
--

INSERT INTO `applied_courses` (`aid`, `cid`, `uid`, `name`, `email`, `contact`) VALUES
(1, 1, 4, 'Radha Kamble', 'radha@example.com', 945215),
(2, 2, 4, 'Radha Kamble', 'radha@example.com', 945215),
(3, 3, 4, 'Radha Kamble', 'radha@example.com', 945215),
(4, 4, 4, 'Radha Kamble', 'radha@example.com', 945215),
(5, 5, 4, 'Radha Kamble', 'radha@example.com', 945215),
(6, 6, 4, 'Radha Kamble', 'radha@example.com', 945215);

-- --------------------------------------------------------

--
-- Table structure for table `auditions`
--

CREATE TABLE `auditions` (
  `id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `s_date` date DEFAULT NULL,
  `l_date` date DEFAULT NULL,
  `description` varchar(300) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `audImage` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auditions`
--

INSERT INTO `auditions` (`id`, `title`, `gender`, `age`, `location`, `height`, `weight`, `s_date`, `l_date`, `description`, `pid`, `audImage`) VALUES
(1, 'Juliet Role', 'F', 21, 'Kolhapur', 142, 48, '2021-06-08', '2021-06-09', 'Need Juliets', 1, 'a_2.jpg'),
(2, 'Juliet Role', 'F', 24, 'Kolhapur', 143, 48, '2021-06-08', '2021-06-10', 'Casting Females for Juliet Roles', 1, 'a_2.jpg'),
(3, 'Need Dancers', 'F', 18, 'Satara', 143, 48, '2021-06-18', '2021-06-20', 'Need BackGround Dancers', 1, 'a_6.jpg'),
(4, 'Casting Child Artist', 'F', 12, 'Mumbai', 125, 18, '2021-06-22', '2021-06-25', 'Child Needs know english,, she should have good confidence', 1, 'a_6.jpg'),
(5, 'Casting Male For Hamlet Play', 'M', 25, 'Mumbai', 167, 68, '2021-06-29', '2021-07-03', 'Casting Males For Hamlet Play in Mumbai.', 1, 'a_5.jpg'),
(6, 'Need Child Actors', 'M', 13, 'Indore', 125, 50, '2021-10-01', '2021-10-03', 'the artist should know two languages hindi and english', 1, 'a_2.jpg'),
(7, 'Looking for male as a lead actor for play Natsamra', 'M', 53, 'Indore', 165, 68, '2021-10-05', '2021-10-08', 'The male should speak good marathi ', 1, 'a_2.jpg'),
(8, 'Need Actors for Street Play', 'M', 35, 'Kerala', 162, 64, '2021-10-29', '2021-10-31', 'Need Actors who have good communication skills and are ready to relocate.', 1, 'a_4.jpg'),
(9, 'Need Child Artist For SStreeet Play', 'M', 16, 'Pune', 145, 32, '2021-10-29', '2021-10-31', 'Child Needs to have good communication also he must be able to relocate.', 1, 'a_2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `cTitle` varchar(500) DEFAULT NULL,
  `cType` varchar(300) DEFAULT NULL,
  `cTeacher` varchar(500) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `tid` int(11) DEFAULT NULL,
  `audImage` varchar(500) DEFAULT NULL,
  `courVideo` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `cTitle`, `cType`, `cTeacher`, `description`, `tid`, `audImage`, `courVideo`) VALUES
(1, 'Learn Guitar From Scratch', 'M', 'Sanket', 'Learn Basics Of Guitar From Zero.', NULL, 'video_1.mp4', NULL),
(2, 'Learn Expressions', 'A', 'Raj Bachal', 'Learn How to show expressions, from certified trainer in 65 days only.', NULL, 'video_2.mp4', NULL),
(3, 'Learn Piano From Scratch', 'M', 'Nitesh Sawant', 'Learn Basic Scales And Modes In piano With Pentatonic scales', NULL, 'video_2.mp4', NULL),
(4, 'Learn Various types of music scales', 'M', 'Radha Kamble', 'Learn Basics of Music Scales', NULL, 'video_8.mp4', NULL),
(5, 'Learn Drums from begginer to Advance', 'M', 'Radha Kamble', 'Learn all the cymbals and snare beats', NULL, 'video_4.mp4', NULL),
(6, 'Learn Piano From Scrath', 'M', 'Neethu', 'Learn Basics of Piano and master it', NULL, 'video_8.mp4', NULL),
(7, 'Learn Guitar From Basic', 'M', 'Radha Kamble', 'Learn Basic pentatonic scales.', NULL, 'video_2.mp4', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `production_house`
--

CREATE TABLE `production_house` (
  `id` int(11) NOT NULL,
  `name` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `production_house`
--

INSERT INTO `production_house` (`id`, `name`, `email`, `phone`, `address`, `uid`) VALUES
(1, 'Dharma', 'Dharma@abc.com', 123456, 'Pune', 1);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `name` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `phone` int(200) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `uid` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `email`, `phone`, `address`, `uid`) VALUES
(1, 'Rhythms And Strings', 'R&S Music Academy', 123456, 'Pune', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `phone` int(200) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `intrest` varchar(500) DEFAULT NULL,
  `type` varchar(300) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `address` varchar(800) DEFAULT NULL,
  `height` varchar(200) DEFAULT NULL,
  `weight` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`, `dob`, `intrest`, `type`, `gender`, `address`, `height`, `weight`) VALUES
(1, 'Sanket Khule', 'sanket@example.com', 123456, 'sanket@123', '2021-06-01', 'Production House', 'Production House', 'M', 'Moshi,Pune', '157', '65'),
(2, 'Balkrushna', 'balkrushna@example.com', 123456, 'balkrushna@123', '2021-06-03', 'Artist', 'Artist', 'M', 'Nashik', '153', '62'),
(3, 'Raj Bachal', 'raj@example.com', 541242562, 'raj@123', '2021-06-25', 'Teachers', 'Teachers', 'M', 'Satara', '162', '57'),
(4, 'Radha Kamble', 'radha@example.com', 945215, 'radha@123', '2021-06-11', 'student', 'student', 'F', 'Latur', '147', '46'),
(5, 'Pratik Kulkarni', 'pratik@example.com', 12345124, 'pratik@123', '2021-06-22', 'Artist', 'Artist', 'M', 'Mumbai', '167', '68');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applied_auditions`
--
ALTER TABLE `applied_auditions`
  ADD PRIMARY KEY (`aaid`),
  ADD KEY `aid` (`aid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `applied_courses`
--
ALTER TABLE `applied_courses`
  ADD PRIMARY KEY (`aid`),
  ADD KEY `cid` (`cid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `auditions`
--
ALTER TABLE `auditions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tid` (`tid`);

--
-- Indexes for table `production_house`
--
ALTER TABLE `production_house`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applied_auditions`
--
ALTER TABLE `applied_auditions`
  MODIFY `aaid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `applied_courses`
--
ALTER TABLE `applied_courses`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `auditions`
--
ALTER TABLE `auditions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `production_house`
--
ALTER TABLE `production_house`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applied_auditions`
--
ALTER TABLE `applied_auditions`
  ADD CONSTRAINT `applied_auditions_ibfk_1` FOREIGN KEY (`aid`) REFERENCES `auditions` (`id`),
  ADD CONSTRAINT `applied_auditions_ibfk_2` FOREIGN KEY (`uid`) REFERENCES `users` (`id`);

--
-- Constraints for table `applied_courses`
--
ALTER TABLE `applied_courses`
  ADD CONSTRAINT `applied_courses_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `courses` (`id`),
  ADD CONSTRAINT `applied_courses_ibfk_2` FOREIGN KEY (`uid`) REFERENCES `users` (`id`);

--
-- Constraints for table `auditions`
--
ALTER TABLE `auditions`
  ADD CONSTRAINT `auditions_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `production_house` (`id`);

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`tid`) REFERENCES `teachers` (`id`);

--
-- Constraints for table `production_house`
--
ALTER TABLE `production_house`
  ADD CONSTRAINT `production_house_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`id`);

--
-- Constraints for table `teachers`
--
ALTER TABLE `teachers`
  ADD CONSTRAINT `teachers_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
