-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2020 at 06:12 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr10_vinzenz_sauer_biglibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `author_id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `sname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`author_id`, `fname`, `sname`) VALUES
(1, 'Fyodor', 'Dostoevsky'),
(2, 'Virginia', 'Woolf'),
(3, 'Dante', 'Alighieri'),
(4, 'Elizabeth', 'Strout'),
(5, 'William', 'Shakespeare'),
(6, 'Margaret', 'Atwood'),
(7, 'Franz', 'Kafka'),
(8, 'Gertrude', 'Stein'),
(9, 'George', 'Orwell'),
(10, 'J.K.', 'Rowling');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `ISBN` char(13) DEFAULT NULL,
  `mediatype` enum('Book','CD','DVD') DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `author_id` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `publisher_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` enum('available','reserved') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `image`, `ISBN`, `mediatype`, `title`, `author_id`, `description`, `publisher_id`, `date`, `status`) VALUES
(0, 'https://pixabay.com/get/52e9d4464e51a914f1dc8460da293276103edbe0565977_640.jpg', '1234567891234', 'Book', 'Test Titel 2', 8, 'Dies ist die Beschreibung eines Tests!', 2, '2222-02-02', 'available'),
(2, 'https://pixabay.com/get/57e6d0464d5aaf14f1dc8460da293276103edbe4525677_640.jpg', '9789588224942', 'Book', 'Murder Of The Sea', 3, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.', 9, '1993-05-10', 'reserved'),
(3, 'https://pixabay.com/get/57e6d0464d5aaf14f1dc8460da293276103edbe4525677_640.jpg', '9769121699218', 'Book', 'Bandits And Pilots', 7, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.', 2, '1992-10-16', 'available'),
(4, 'https://pixabay.com/get/57e6d0464d5aaf14f1dc8460da293276103edbe4525677_640.jpg', '9789194756436', 'Book', 'World Of The Great', 1, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.', 1, '1991-10-10', 'available'),
(5, 'https://pixabay.com/get/57e6d0464d5aaf14f1dc8460da293276103edbe4525677_640.jpg', '9787701569557', 'CD', 'Anger Of The South', 9, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.', 6, '1990-12-31', 'available'),
(6, 'https://pixabay.com/get/57e6d0464d5aaf14f1dc8460da293276103edbe4525677_640.jpg', '9784368172467', 'CD', 'Priestess Of Tomorrow', 9, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.', 7, '1988-12-23', 'reserved'),
(7, 'https://pixabay.com/get/57e6d0464d5aaf14f1dc8460da293276103edbe4525677_640.jpg', '9788376286051', 'CD', 'Kings And Serpents', 8, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.', 6, '1987-02-13', 'available'),
(8, 'https://pixabay.com/get/57e6d0464d5aaf14f1dc8460da293276103edbe4525677_640.jpg', '9789024653934', 'CD', 'Intention Of Wood', 10, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.', 5, '1986-06-04', 'available'),
(9, 'https://pixabay.com/get/57e6d0464d5aaf14f1dc8460da293276103edbe4525677_640.jpg', '9785388448521', 'DVD', 'Effect Of Twilight', 6, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.', 3, '1985-11-29', 'reserved'),
(10, 'https://pixabay.com/get/57e6d0464d5aaf14f1dc8460da293276103edbe4525677_640.jpg', '9788963014555', 'DVD', 'Armies And Agents', 2, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.', 2, '1985-11-28', 'reserved'),
(11, 'https://pixabay.com/get/57e6d0464d5aaf14f1dc8460da293276103edbe4525677_640.jpg', '9780317399547', 'DVD', 'Going To The North', 5, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.', 10, '1983-12-22', 'available'),
(12, 'https://pixabay.com/get/57e6d0464d5aaf14f1dc8460da293276103edbe4525677_640.jpg', '9782783263094', 'DVD', 'Slaves Of Time', 4, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.', 1, '1985-08-21', 'reserved');

-- --------------------------------------------------------

--
-- Table structure for table `publishers`
--

CREATE TABLE `publishers` (
  `publisher_id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `size` enum('big','medium','small') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `publishers`
--

INSERT INTO `publishers` (`publisher_id`, `name`, `address`, `size`) VALUES
(1, 'Penguin Random House', '2539  Indiana Avenue', 'big'),
(2, 'Hachette Livre', '1935  Froe Street', 'medium'),
(3, 'HarperCollins', '1471  Bridge Avenue', 'small'),
(4, 'Macmillan Publishers', '4664  Pinnickinnick Street', 'small'),
(5, 'Simon & Schuster', '1148  Goldleaf Lane', 'medium'),
(6, 'Educational Publishers', '2239  Randolph Street', 'big'),
(7, 'Houghton Mifflin Harcourt', '3213  Pearlman Avenue', 'big'),
(8, 'Pearson Education', '3528  Nelm Street', 'big'),
(9, 'Scholastic', '3627  Philadelphia Avenue', 'small'),
(10, 'Cengage Learning', '2225  Davis Place', 'medium');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`author_id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `author_id` (`author_id`),
  ADD KEY `publisher_id` (`publisher_id`);

--
-- Indexes for table `publishers`
--
ALTER TABLE `publishers`
  ADD PRIMARY KEY (`publisher_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `media_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `authors` (`author_id`),
  ADD CONSTRAINT `media_ibfk_2` FOREIGN KEY (`publisher_id`) REFERENCES `publishers` (`publisher_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
