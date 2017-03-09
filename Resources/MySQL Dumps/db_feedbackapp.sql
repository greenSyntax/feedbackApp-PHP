-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 09, 2017 at 04:23 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_feedbackapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `feedback_id` int(11) NOT NULL,
  `user_name` varchar(30) DEFAULT NULL,
  `feedback_text` varchar(300) DEFAULT NULL,
  `user_mail` varchar(30) DEFAULT NULL,
  `time_stamp` datetime DEFAULT NULL,
  `processing_status` int(2) DEFAULT NULL,
  `user_ip` varchar(30) DEFAULT NULL,
  `os_type` varchar(30) DEFAULT NULL,
  `user_device` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`feedback_id`, `user_name`, `feedback_text`, `user_mail`, `time_stamp`, `processing_status`, `user_ip`, `os_type`, `user_device`) VALUES
(34, 'nikx', 'Hi This is Nikhil. And, &lt;/html&gt;Im Working in InnovationM', 'NULL', '2017-03-07 06:53:24', 1, NULL, NULL, NULL),
(35, 'Abhix', 'Hi This is Abhishek. This is something auspecious.', 'NULL', '2017-03-07 07:02:17', 0, NULL, NULL, NULL),
(36, 'Rahul', 'Hi This is Rahul.', '', '2017-03-07 07:07:35', 0, NULL, NULL, NULL),
(37, 'Rahul', 'Hi This is Rahul.', 'anonymous@fixme.com', '2017-03-07 07:10:26', 0, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
