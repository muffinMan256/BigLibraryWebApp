-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2023 at 05:38 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `be20_cr4_sassuandrei_biglibrary`
--
CREATE DATABASE IF NOT EXISTS `be20_cr4_sassuandrei_biglibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `be20_cr4_sassuandrei_biglibrary`;

-- --------------------------------------------------------

--
-- Table structure for table `big_library`
--

CREATE TABLE `big_library` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author_last_name` varchar(30) NOT NULL,
  `author_first_name` varchar(255) NOT NULL,
  `short_description` varchar(255) NOT NULL,
  `isbn_code` varchar(13) NOT NULL,
  `publisher_name` varchar(30) NOT NULL,
  `publisher_address` varchar(30) NOT NULL,
  `publish_date` date NOT NULL,
  `image` varchar(255) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `big_library`
--

INSERT INTO `big_library` (`id`, `title`, `author_last_name`, `author_first_name`, `short_description`, `isbn_code`, `publisher_name`, `publisher_address`, `publish_date`, `image`, `type`) VALUES
(43, 'The Hobbit', 'Tolkien', 'J.R.R.', '', '978-0-618-002', 'Houghton Mifflin', 'Address 1', '2023-11-22', 'https://cdn.pixabay.com/photo/2018/03/19/18/20/tea-time-3240766_640.jpg', 'book'),
(44, 'The Da Vinci Code', 'Brown', 'Dan', '', '0-385-50420-9', 'Doubleday', 'New York, NY', '2003-03-18', 'https://cdn.pixabay.com/photo/2013/07/12/18/04/dvd-152917_1280.png', 'CD'),
(45, 'Moby-Dick', 'Melville', 'Herman', '', '978-0-14-2437', 'Harper & Brothers', 'New York, NY', '1851-10-18', 'https://cdn.pixabay.com/photo/2013/07/12/18/04/dvd-152917_1280.png', 'DVD'),
(46, 'The Road', 'McCarthy', 'Cormac', 'A post-apocalyptic journey of a father and son', '978-0-307-265', 'Alfred A. Knopf', 'New York, NY', '2006-09-26', 'https://cdn.pixabay.com/photo/2016/09/10/17/18/book-1659717_640.jpg', 'book'),
(47, 'Frankenstein', 'Shelley', 'Mary', '', '978-0-486-282', 'Lackington, Hughes, Harding, M', '', '2020-02-05', 'https://cdn.pixabay.com/photo/2013/07/12/18/04/dvd-152917_1280.png', 'CD'),
(48, 'The Lord of the Rings', 'Tolkien', 'J.R.R.', '', '978-0-618-346', 'Houghton Mifflin', 'Boston, MA', '1954-07-29', 'https://cdn.pixabay.com/photo/2013/07/12/18/04/dvd-152917_1280.png', 'DVD'),
(49, 'The Shining', 'King', 'Stephen', '', '978-0-385-121', 'Doubleday', '', '2023-11-13', 'https://cdn.pixabay.com/photo/2019/11/07/20/48/cinema-4609877_640.jpg', 'book'),
(50, 'One Hundred Years of Solitude', 'García Márquez', 'Gabriel', 'A magical realist novel following the Buendía family', '978-0-06-0883', 'Harper & Row', 'New York, NY', '1967-05-30', 'https://cdn.pixabay.com/photo/2016/09/10/17/18/book-1659717_640.jpg', 'book'),
(51, 'Brave New World', 'Huxley', 'Aldous', 'A dystopian novel exploring a future society', '978-0-06-0850', 'Chatto & Windus', 'London', '1932-05-14', 'https://cdn.pixabay.com/photo/2016/09/10/17/18/book-1659717_640.jpg', 'book'),
(52, 'The Catcher in the Rye', 'Salinger', 'J.D.', 'A classic novel about teenage angst', '978-0-553-210', 'Little, Brown and Company', 'New York, NY', '1951-07-16', 'https://cdn.pixabay.com/photo/2016/09/10/17/18/book-1659717_640.jpg', 'book'),
(76, 'book1', 'a', 'sassu', '', 'asfsafsaf2121', 'publisher 1', 'pubaddress1', '2023-11-23', 'https://cdn.pixabay.com/photo/2017/11/24/10/43/ticket-2974645_1280.jpg', 'book'),
(77, '332sadsa', 'lastname1', 'firstname1', 'afsaf', 'asfsaf', 'sadf', 'pubaddress1', '2023-11-08', 'https://cdn.pixabay.com/photo/2018/03/19/18/20/tea-time-3240766_640.jpg', 'CD'),
(78, '332sadsa', 'lastname1', 'firstname1', 'xzxxzzx', 'asfsaf', 'sadf', 'pubaddress1', '2023-11-14', 'https://cdn.pixabay.com/photo/2018/03/19/18/20/tea-time-3240766_640.jpg', 'CD');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `big_library`
--
ALTER TABLE `big_library`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `big_library`
--
ALTER TABLE `big_library`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
