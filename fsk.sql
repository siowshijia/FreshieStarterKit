-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 10, 2018 at 06:44 AM
-- Server version: 5.7.21
-- PHP Version: 7.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fsk`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

DROP TABLE IF EXISTS `event`;
CREATE TABLE IF NOT EXISTS `event` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_name` varchar(255) NOT NULL,
  `event_datetime` varchar(60) NOT NULL,
  `event_venue` varchar(255) NOT NULL,
  `event_category` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `event_owner` varchar(255) NOT NULL,
  `event_status` varchar(60) NOT NULL,
  `event_approval` varchar(60) NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event_attendance`
--

DROP TABLE IF EXISTS `event_attendance`;
CREATE TABLE IF NOT EXISTS `event_attendance` (
  `event_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `datetime` varchar(60) NOT NULL,
  PRIMARY KEY (`event_id`,`student_id`),
  KEY `student_id` (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

DROP TABLE IF EXISTS `quiz`;
CREATE TABLE IF NOT EXISTS `quiz` (
  `quiz_id` int(11) NOT NULL AUTO_INCREMENT,
  `quiz_name` varchar(60) NOT NULL,
  `quiz_category` varchar(255) NOT NULL,
  `created_by` varchar(60) NOT NULL,
  PRIMARY KEY (`quiz_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `quiz_question`
--

DROP TABLE IF EXISTS `quiz_question`;
CREATE TABLE IF NOT EXISTS `quiz_question` (
  `question_id` int(11) NOT NULL AUTO_INCREMENT,
  `quiz_id` int(11) NOT NULL,
  `question` longtext NOT NULL,
  `answers` longtext NOT NULL,
  `correct_answer` longtext NOT NULL,
  `submitted_by` varchar(60) NOT NULL,
  PRIMARY KEY (`question_id`),
  KEY `quiz_id` (`quiz_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `quiz_result`
--

DROP TABLE IF EXISTS `quiz_result`;
CREATE TABLE IF NOT EXISTS `quiz_result` (
  `quiz_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `result` longtext NOT NULL,
  PRIMARY KEY (`quiz_id`,`student_id`),
  KEY `student_id` (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rewards`
--

DROP TABLE IF EXISTS `rewards`;
CREATE TABLE IF NOT EXISTS `rewards` (
  `reward_id` int(11) NOT NULL AUTO_INCREMENT,
  `reward_name` varchar(60) NOT NULL,
  `cost_points` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `expired_date` varchar(60) NOT NULL,
  PRIMARY KEY (`reward_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reward_transaction`
--

DROP TABLE IF EXISTS `reward_transaction`;
CREATE TABLE IF NOT EXISTS `reward_transaction` (
  `transaction_id` int(11) NOT NULL AUTO_INCREMENT,
  `reward_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `transaction_type` varchar(60) NOT NULL,
  `amount` varchar(60) NOT NULL,
  `data` longtext NOT NULL,
  PRIMARY KEY (`transaction_id`),
  KEY `student_id` (`student_id`),
  KEY `reward_id` (`reward_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `staff_id` int(11) NOT NULL AUTO_INCREMENT,
  `staff_name` varchar(60) NOT NULL,
  `staff_number` varchar(60) NOT NULL,
  `staff_email` varchar(100) NOT NULL,
  `staff_contact_number` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`staff_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_name` varchar(60) NOT NULL,
  `admission_number` varchar(60) NOT NULL,
  `student_email` varchar(100) NOT NULL,
  `student_contact_number` varchar(60) NOT NULL,
  `interest` longtext NOT NULL,
  `points` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `event_attendance`
--
ALTER TABLE `event_attendance`
  ADD CONSTRAINT `event_attendance_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `event` (`event_id`),
  ADD CONSTRAINT `event_attendance_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`);

--
-- Constraints for table `quiz_question`
--
ALTER TABLE `quiz_question`
  ADD CONSTRAINT `quiz_question_ibfk_1` FOREIGN KEY (`quiz_id`) REFERENCES `quiz` (`quiz_id`);

--
-- Constraints for table `quiz_result`
--
ALTER TABLE `quiz_result`
  ADD CONSTRAINT `quiz_result_ibfk_1` FOREIGN KEY (`quiz_id`) REFERENCES `quiz` (`quiz_id`),
  ADD CONSTRAINT `quiz_result_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`);

--
-- Constraints for table `reward_transaction`
--
ALTER TABLE `reward_transaction`
  ADD CONSTRAINT `reward_transaction_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`),
  ADD CONSTRAINT `reward_transaction_ibfk_2` FOREIGN KEY (`reward_id`) REFERENCES `rewards` (`reward_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
