-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2017 at 04:15 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infoi101`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(75) NOT NULL,
  `ISBN` bigint(13) NOT NULL,
  `price` double DEFAULT NULL,
  `type` varchar(4) DEFAULT NULL,
  `format` varchar(10) DEFAULT NULL,
  `book_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `title`, `author`, `ISBN`, `price`, `type`, `format`, `book_image`) VALUES
(1, 'A Gift of Fire', 'Sara Baase', 9780132492676, 25.33, 'New', 'Paperback', 'http://t1.gstatic.com/images?q=tbn:ANd9GcTyYD0uNs01ZnlQD8QwKNWQU7ZgaHV0X8f1qTxvH6Jou4HMGYI8'),
(2, 'Discrete Mathematics with Application', 'Susanna S. Epp', 495391328, 30.85, 'New', 'Paperback', 'https://prodimage.images-bn.com/pimages/9780495391326_p0_v1_s600x595.jpg'),
(3, 'Designing for Interaction', 'Dan Saffer', 321643399, 41.6, 'New', 'Paperback', 'https://i5.walmartimages.com/asr/7d284632-1efe-4fdb-b961-e758daa2e8ce_1.dfd6477c297a4625989748fa18c47111.jpeg?odnHeight=450&odnWidth=450&odnBg=FFFFFF'),
(4, 'JavaScript and JQuery: Interactive Front-End Web Development', 'Jon Duckett', 1118531647, 11.99, 'New', 'Paperback', 'https://img.thriftbooks.com/api/images/l/daed4f53240a9f02dcaf9d5fd2a6b920788f327e.jpg'),
(5, 'Principles of Information Systems', 'Ralph M. Stair & George W. Reynolds', 1285867165, 95.73, 'New', 'Hardcover', 'https://prodimage.images-bn.com/pimages/9781285867168_p0_v2_s550x406.jpg'),
(6, 'The Object oriented thought process,', 'Matt Weissfeld & Addison Wesley.', 9780321861276, 19.72, 'New', 'Paperback', 'https://prodimage.images-bn.com/pimages/9780321861276_p0_v2_s600x595.jpg'),
(7, 'Client-Side Data Storage: Keeping It Local', 'Raymond Camden', 1491935111, 24.23, 'New', 'Paperback', 'https://prodimage.images-bn.com/pimages/9781491935118_p0_v4_s600x595.jpg'),
(8, 'Information Technology Project Management', 'Kathy Schwalbe', 1285452348, 81.49, 'New', 'Paperback', 'https://cs.cheggcdn.com/covers2/42700000/42708228_1454694990_Width288.jpg'),
(9, 'Doing Data Science', ' Cathy O\'Neil & Rachel Schutt ', 9781449358655, 32.95, 'New', 'Paperback', 'https://prodimage.images-bn.com/pimages/9781449358655_p0_v7_s600x595.jpg'),
(10, 'Introduction to Data Mining', 'Tan Pang-Ning, Steinbach Michael, Kumar Vipin', 321321367, 136.97, 'New', 'Hardcover', 'https://prodimage.images-bn.com/pimages/9780321321367_p0_v1_s550x406.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `class_id` int(11) NOT NULL,
  `school` varchar(4) NOT NULL,
  `department` varchar(2) NOT NULL,
  `class_number` int(11) NOT NULL,
  `class_name` varchar(255) NOT NULL,
  `book_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`class_id`, `school`, `department`, `class_number`, `class_name`, `book_id`) VALUES
(1, 'INFO', 'I', 101, 'Introduction to Informatics', NULL),
(2, 'INFO', 'I', 201, 'Mathematical Foundations of Informatics', 2),
(3, 'INFO', 'I', 202, 'Social Informatics', 1),
(4, 'INFO', 'I', 210, 'Information Infrastructure I', NULL),
(5, 'INFO', 'I', 211, 'Information Infrastructure II', 6),
(6, 'NEWM', 'N', 220, 'Introduction to Media Application Development', 4),
(7, 'INFO', 'I', 223, 'Data Fluency', 9),
(8, 'INFO', 'I', 270, 'Introduction to Human-Computer Interaction Principles and Practices', 3),
(9, 'NEWM', 'N', 299, 'Career Planning', NULL),
(10, 'INFO', 'I', 303, 'Organizational Informatics', 5),
(11, 'INFO', 'I', 305, 'Introduction to Research in Informatics', NULL),
(12, 'INFO', 'I', 308, 'Information Representation', 7),
(13, 'INFO', 'I', 402, 'Informatics Project Management', 8),
(14, 'INFO', 'I', 421, 'Applications of Data Mining', 10),
(15, 'INFO', 'I', 425, 'Web Services in Information Systems', NULL),
(16, 'INFO', 'I', 453, 'Computer and Information Ethics', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(16) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `role` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
