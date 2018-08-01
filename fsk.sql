-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 01, 2018 at 01:06 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('0393630ebc4cc9c6acfafe93ebb89efda47bdeb9', '::1', 1532834468, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533323833343436383b757365725f69647c693a313b656d61696c7c733a31363a2261646d696e406e79702e636f6d2e7367223b6c6f676765645f696e7c623a313b),
('06f1d07143c675cf40398c318ee08c33055bd512', '::1', 1532859078, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533323835393037383b757365725f69647c693a313b656d61696c7c733a31363a2261646d696e406e79702e636f6d2e7367223b6c6f676765645f696e7c623a313b),
('0debea122188782406beb98760e302fe4a35f0b1', '::1', 1532853782, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533323835333738323b757365725f69647c693a313b656d61696c7c733a31363a2261646d696e406e79702e636f6d2e7367223b6c6f676765645f696e7c623a313b),
('0e0c5898cd7d985d0643708e5cbca9a516a36839', '::1', 1532531365, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533323533313132343b),
('1235ec506720c0bdbe698ba207376b5cd34a10bc', '::1', 1532861467, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533323836313436373b757365725f69647c693a313b656d61696c7c733a31363a2261646d696e406e79702e636f6d2e7367223b6c6f676765645f696e7c623a313b),
('15791784a318e67c849c509dc9e6efa1c23f58a7', '::1', 1532531124, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533323533313132343b),
('1a3748099489b1cf9c6d774b56c8f87322902ab5', '::1', 1532746039, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533323734363033393b),
('1c4f0c675870c83b504e72975bd6a781533a33f3', '::1', 1532860662, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533323836303636323b757365725f69647c693a313b656d61696c7c733a31363a2261646d696e406e79702e636f6d2e7367223b6c6f676765645f696e7c623a313b),
('1e8f7ad7d753ba5be54c6ee643b90508e2ed3c66', '::1', 1532855370, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533323835353337303b),
('27f0e27d2286ff2e225977a4eaa03f42037f8537', '::1', 1532853446, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533323835333434363b757365725f69647c693a313b656d61696c7c733a31363a2261646d696e406e79702e636f6d2e7367223b6c6f676765645f696e7c623a313b),
('403f7ee113b2a22b65bb8a077562e96f7ca5637d', '::1', 1532853129, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533323835333132393b757365725f69647c693a313b656d61696c7c733a31363a2261646d696e406e79702e636f6d2e7367223b6c6f676765645f696e7c623a313b),
('47e84e38e08025df592b57ed86dcde310698be9f', '::1', 1532861773, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533323836313737333b757365725f69647c693a313b656d61696c7c733a31363a2261646d696e406e79702e636f6d2e7367223b6c6f676765645f696e7c623a313b),
('6cb8e458ef44a8e1b9055f43dce4b64710260b17', '::1', 1532862177, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533323836323137373b),
('85d69a329760f59ee064154ad6750168323dff71', '::1', 1532835555, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533323833353533323b757365725f69647c693a313b656d61696c7c733a31363a2261646d696e406e79702e636f6d2e7367223b6c6f676765645f696e7c623a313b),
('8de4bba40749c0d4bf2a7ed1ba1c0d062baef2b7', '::1', 1532862134, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533323836323133343b757365725f69647c693a313b656d61696c7c733a31363a2261646d696e406e79702e636f6d2e7367223b6c6f676765645f696e7c623a313b),
('b80b622851faa01bf3aeb6cf521451cccebabb38', '::1', 1532856904, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533323835363930343b757365725f69647c693a313b656d61696c7c733a31363a2261646d696e406e79702e636f6d2e7367223b6c6f676765645f696e7c623a313b),
('bd583bb38933b4c48c389073fa53e208372b57ad', '::1', 1532835532, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533323833353533323b757365725f69647c693a313b656d61696c7c733a31363a2261646d696e406e79702e636f6d2e7367223b6c6f676765645f696e7c623a313b),
('be9113e6c2dd210a4053177b35e436cfc30087e4', '::1', 1532781635, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533323738313532343b757365725f69647c693a313b656d61696c7c733a31363a2261646d696e406e79702e636f6d2e7367223b6c6f676765645f696e7c623a313b),
('c5308c7333b16aa43e3e81733b0d0229788d8073', '::1', 1532529922, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533323532393932323b),
('cab18299c41fd6fe9d3190ad163a6f9c0439eba9', '::1', 1532860114, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533323836303131343b757365725f69647c693a313b656d61696c7c733a31363a2261646d696e406e79702e636f6d2e7367223b6c6f676765645f696e7c623a313b),
('cb51ca87130443844c6fe4bb71e846d99789938c', '::1', 1532857233, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533323835373233333b757365725f69647c693a313b656d61696c7c733a31363a2261646d696e406e79702e636f6d2e7367223b6c6f676765645f696e7c623a313b),
('cdefed1c387a5371f8f5de4507c3cc653e984dee', '::1', 1532861109, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533323836313130393b757365725f69647c693a313b656d61696c7c733a31363a2261646d696e406e79702e636f6d2e7367223b6c6f676765645f696e7c623a313b),
('d776635a077f6cdfac597114343c477d010f54a9', '::1', 1532529529, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533323532393532393b),
('d88a832da13684cb04f6433d3417fb8a3736e464', '::1', 1532781524, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533323738313532343b),
('e9e5651aee0815829498fbbe4bbf486028543711', '::1', 1532779606, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533323737393630363b),
('edb2b514c6206a0c19b69d7864f730c1f1b6efd8', '::1', 1532859675, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533323835393637353b757365725f69647c693a313b656d61696c7c733a31363a2261646d696e406e79702e636f6d2e7367223b6c6f676765645f696e7c623a313b),
('f6aecbf84c848b8207c740113e9cc849fe7fb095', '::1', 1532857731, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533323835373733313b757365725f69647c693a313b656d61696c7c733a31363a2261646d696e406e79702e636f6d2e7367223b6c6f676765645f696e7c623a313b),
('f7d147b89999110c93ceb061f74e72720feb7907', '::1', 1532854136, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533323835343133363b757365725f69647c693a313b656d61696c7c733a31363a2261646d696e406e79702e636f6d2e7367223b6c6f676765645f696e7c623a313b);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(11) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `event_datetime` varchar(60) NOT NULL,
  `event_venue` varchar(255) NOT NULL,
  `event_category` varchar(255) DEFAULT NULL,
  `description` longtext,
  `event_owner` varchar(255) NOT NULL,
  `event_status` varchar(60) NOT NULL,
  `event_approval` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event_attendance`
--

CREATE TABLE `event_attendance` (
  `event_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `datetime` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `quiz_id` int(11) NOT NULL,
  `quiz_name` varchar(60) NOT NULL,
  `description` longtext,
  `question_1` longtext NOT NULL,
  `answer_1` varchar(255) NOT NULL,
  `question_2` longtext,
  `answer_2` varchar(255) DEFAULT NULL,
  `question_3` longtext,
  `answer_3` varchar(255) DEFAULT NULL,
  `created_by` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `quiz_result`
--

CREATE TABLE `quiz_result` (
  `quiz_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `result` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rewards`
--

CREATE TABLE `rewards` (
  `reward_id` int(11) NOT NULL,
  `reward_name` varchar(60) NOT NULL,
  `cost_points` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` longtext,
  `expired_date` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rewards`
--

INSERT INTO `rewards` (`reward_id`, `reward_name`, `cost_points`, `quantity`, `image`, `description`, `expired_date`) VALUES
(1, 'tshirt', 10, 10, '00d9cb32264d3fe2f2ef36eb4e8b3bca.jpg', 'test', 'test'),
(10, '123', 123, 123, '941e7bce872658119a1937b1553404cc.jpg', '123', '8-Aug-2018');

-- --------------------------------------------------------

--
-- Table structure for table `reward_transaction`
--

CREATE TABLE `reward_transaction` (
  `transaction_id` int(11) NOT NULL,
  `reward_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `transaction_type` varchar(60) NOT NULL,
  `amount` varchar(60) NOT NULL,
  `data` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `staff_name` varchar(60) NOT NULL,
  `staff_number` varchar(60) NOT NULL,
  `staff_email` varchar(100) NOT NULL,
  `staff_contact_number` varchar(60) NOT NULL,
  `user_role` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `staff_name`, `staff_number`, `staff_email`, `staff_contact_number`, `user_role`, `password`) VALUES
(1, 'admin', '1234567A', 'admin@nyp.com.sg', '91234567', 'Admin', '$2y$10$PUArfHxct8FrIZ85Dskzgu8zxQfqemkcv68uoW3Pd04W1zvz.oFqC'),
(4, 'shijia', '912312', 'shijia@nyp.com.sg', '12312312', 'Event Manager', '$2y$10$oH30sLRqMRlEGieD8cWXbemkDkKaVmxyfSLxgD/Ebq05hN7FVTPzq');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `student_name` varchar(60) NOT NULL,
  `admission_number` varchar(60) NOT NULL,
  `student_email` varchar(100) NOT NULL,
  `student_contact_number` varchar(60) DEFAULT NULL,
  `interest` longtext,
  `points` int(11) DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_name`, `admission_number`, `student_email`, `student_contact_number`, `interest`, `points`, `password`) VALUES
(11, 'shijia', '123456A', 'shijia2@email.com', '69756456', 'Lorem Ipsum', NULL, '$2y$10$PUArfHxct8FrIZ85Dskzgu8zxQfqemkcv68uoW3Pd04W1zvz.oFqC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `event_attendance`
--
ALTER TABLE `event_attendance`
  ADD PRIMARY KEY (`event_id`,`student_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`quiz_id`);

--
-- Indexes for table `quiz_result`
--
ALTER TABLE `quiz_result`
  ADD PRIMARY KEY (`quiz_id`,`student_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `rewards`
--
ALTER TABLE `rewards`
  ADD PRIMARY KEY (`reward_id`);

--
-- Indexes for table `reward_transaction`
--
ALTER TABLE `reward_transaction`
  ADD PRIMARY KEY (`transaction_id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `reward_id` (`reward_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `quiz_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rewards`
--
ALTER TABLE `rewards`
  MODIFY `reward_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `reward_transaction`
--
ALTER TABLE `reward_transaction`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
