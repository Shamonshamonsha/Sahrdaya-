-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2016 at 11:08 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rbas`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `11` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` int(11) NOT NULL,
  `bi_id` int(11) NOT NULL,
  `city` varchar(60) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `applicant_name` varchar(100) NOT NULL,
  `mobile_number` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `district` varchar(60) NOT NULL,
  `localbody_type` varchar(255) NOT NULL,
  `localbody_name` varchar(255) NOT NULL,
  `ward` varchar(10) NOT NULL,
  `application_id` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `plan` varchar(60) NOT NULL,
  `time_stamp` int(11) NOT NULL,
  `deedcopy` varchar(60) NOT NULL,
  `tax_recipt` varchar(60) NOT NULL,
  `pes_certificate` varchar(60) NOT NULL,
  `encumb_cer` varchar(60) NOT NULL,
  `noc_cer` varchar(60) NOT NULL,
  `aadhar_no` varchar(60) NOT NULL,
  `survey_no` varchar(20) NOT NULL,
  `build_usage` varchar(2000) NOT NULL,
  `build_category` varchar(200) NOT NULL,
  `plot_number` varchar(20) NOT NULL,
  `locality` varchar(200) NOT NULL,
  `street` varchar(100) NOT NULL,
  `block_number` varchar(20) NOT NULL,
  `build_height` varchar(20) NOT NULL,
  `build_size` varchar(20) NOT NULL,
  `plinth_area` varchar(20) NOT NULL,
  `open_area` varchar(20) NOT NULL,
  `still_floorarea` varchar(20) NOT NULL,
  `upper_floorarea` varchar(20) NOT NULL,
  `ground_floorarea` varchar(20) NOT NULL,
  `parking_area` varchar(20) NOT NULL,
  `totalbuild_area` varchar(20) NOT NULL,
  `agree_box` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `bi_id`, `city`, `gender`, `pincode`, `applicant_name`, `mobile_number`, `email`, `name`, `address`, `district`, `localbody_type`, `localbody_name`, `ward`, `application_id`, `password`, `plan`, `time_stamp`, `deedcopy`, `tax_recipt`, `pes_certificate`, `encumb_cer`, `noc_cer`, `aadhar_no`, `survey_no`, `build_usage`, `build_category`, `plot_number`, `locality`, `street`, `block_number`, `build_height`, `build_size`, `plinth_area`, `open_area`, `still_floorarea`, `upper_floorarea`, `ground_floorarea`, `parking_area`, `totalbuild_area`, `agree_box`, `status`) VALUES
(2, 8, '', '', '', '', '80890', 'shamonsha665@gmail.com', 'test', 'hello', 'alapuzha', 'Municipality', 'tttt', '2', '1e', 'a', '873457cec7922e67235257753b6ee697.jpg', 1470536577, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1800', 0, 3),
(3, 8, 'kollam', 'male', '690504', 'Nithesh', '80890', 'shamonsha665@gmail.com', 'Application for building approval', 'shamon nooranad', 'alapuzha', 'Municipality', 'Alpapuzha', '2', '26', 'n', '81d87a123665888e9a5d68e1330ee783.jpg', 1470536577, '7130a11e6fbf64d86bd8279192f9fb1b.doc', '07fc1e65b0eb5b3e540159d06a4aec64.doc', 'c2161d05db913b326da4b32464ac21b5.jpg', '2e2d341dbf15782c268938caf3a681f0.jpg', '', '9798', 'jjk', 'kjk', 'Residential', 'jk', 'jkj', 'kjk', 'j', 'jk', 'jkj', 'j', 'kj', 'jkj', 'kj', 'kj', 'kjk', '500', 0, 3),
(4, 8, '', '', '', '', '8989', 'hhjh', 'kjk', 'jhj', 'hj', 'Municipality', 'kj', '12', '3095aaa7', 'adbce', '52111542d03d52c47e167374efa8f378.jpg', 1470536577, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0),
(5, 8, 'jkj', 'Male', '8989', 'shamon', '7736527089', 'shamonsha665@gmail.com', 'shamon', 'hello', 'kollam', 'Panchayyath', 'puramattom', '10', '4f805d22', 'fiecn', '6333df894f1b54b7f9b5003527d01fc1.jpg', 1478190840, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `application_forwarder`
--

CREATE TABLE `application_forwarder` (
  `id` int(11) NOT NULL,
  `application_id` int(11) NOT NULL,
  `forwarder_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application_forwarder`
--

INSERT INTO `application_forwarder` (`id`, `application_id`, `forwarder_id`) VALUES
(1, 3, 7);

-- --------------------------------------------------------

--
-- Table structure for table `application_payments`
--

CREATE TABLE `application_payments` (
  `id` int(11) NOT NULL,
  `application_id` int(11) NOT NULL,
  `amount_topay` varchar(10) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application_payments`
--

INSERT INTO `application_payments` (`id`, `application_id`, `amount_topay`, `status`) VALUES
(1, 3, '200', 0);

-- --------------------------------------------------------

--
-- Table structure for table `application_remarks`
--

CREATE TABLE `application_remarks` (
  `id` int(11) NOT NULL,
  `application_id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `added_by` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `time_stamp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application_remarks`
--

INSERT INTO `application_remarks` (`id`, `application_id`, `sender_id`, `content`, `added_by`, `status`, `time_stamp`) VALUES
(3, 3, 7, '                             test', 'Building Inspector', 0, 1478205945),
(4, 3, 7, '                             test again', 'Building Inspector', 0, 1478205981),
(6, 3, 7, '              hello                   ', 'Building Inspector', 0, 1478207047),
(9, 3, 9, 'Application approved', 'AE', 0, 1478208624),
(10, 3, 3, 'Uploaded the noc certificate', 'Applicant', 0, 1478230932),
(11, 3, 3, 'test', 'Applicant', 0, 1478230972),
(12, 3, 3, 'no reply', 'Applicant', 0, 1478231058),
(13, 2, 9, 'Application Approved', 'AE', 0, 1478234779),
(14, 3, 10, 'Application approved', 'AEE', 0, 1478239548),
(15, 2, 10, 'Forwarded to EE', 'AEE', 0, 1478240220),
(16, 2, 10, 'test approve', 'AEE', 0, 1478240449),
(17, 2, 10, 'Please do the needfull', 'AEE', 0, 1478240465),
(18, 2, 10, 'Please do the needfull', 'AEE', 0, 1478240534),
(19, 3, 11, 'Application approved', 'EE', 0, 1478242628),
(20, 2, 11, 'Noc required', 'EE', 0, 1478242687),
(21, 2, 6, 'hello', 'Secretary', 0, 1478248595),
(22, 2, 6, 'test', 'Secretary', 0, 1478248713),
(23, 2, 6, 'hello test', 'Secretary', 0, 1478248726),
(24, 2, 4, 'hello', 'DTO', 0, 1478250852),
(25, 3, 2, 'test ct', 'CTO', 0, 1478251983);

-- --------------------------------------------------------

--
-- Table structure for table `application_upload_status`
--

CREATE TABLE `application_upload_status` (
  `id` int(11) NOT NULL,
  `application_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application_upload_status`
--

INSERT INTO `application_upload_status` (`id`, `application_id`) VALUES
(2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE `header` (
  `id` int(11) NOT NULL,
  `title` varchar(60) NOT NULL,
  `link` varchar(60) NOT NULL,
  `user_type` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `header`
--

INSERT INTO `header` (`id`, `title`, `link`, `user_type`) VALUES
(1, 'View logins', 'super-14create', 1),
(2, 'View Report', 'super-report', 1),
(3, 'Home', 'super-home', 1),
(4, 'Add Logins', 'super-addlogin', 1),
(5, ' District Town Planners ', 'townplan-viewlogins', 2),
(6, 'Create Login', 'townplan-createlogin', 2),
(7, 'Create Logins', 'distplanner-createlogin', 3),
(8, 'View Logins', 'distplanner-viewlogin', 3),
(9, 'Create Logins', 'localbody-createlogin', 4),
(10, 'View Logins', 'localbody-viewlogin', 4),
(11, 'Home', 'localbody-home', 4),
(12, 'Upload Plan', 'arch-uploadplan', 6),
(13, 'Home', 'arch-home', 6),
(14, 'Home', 'townplanner-home', 2),
(15, 'Home', 'distplanner-home', 3),
(16, 'View Plans', 'arch-viewallplans', 6),
(17, 'Home', 'bi-home', 5),
(18, 'Pending Applications', 'bi-pendingapps', 5),
(20, 'Home', 'ae-home', 7),
(22, 'Aplications', 'ae-pendingapps', 7),
(23, 'Home', 'aee-home', 8),
(24, 'Pending Applications', 'aee-pendingapps', 8),
(25, 'Approved Applications', 'aee-approvedapps', 8),
(26, 'Home', 'ee-home', 9),
(27, 'Pending Application', 'ee-pendingapps', 9),
(28, 'Approved Applications', 'ee-approvedapps', 9),
(29, 'Pending Applications', 'se-pendingapps', 4),
(30, 'Approved Applications', 'se-approvedapps', 4),
(31, 'Pending Applications', 'dt-pendingapps', 3),
(32, 'Approved Applications', 'dt-approvedapps', 3),
(33, 'Pending Applications', 'ct-pendingapps', 2),
(34, 'Approved Applications', 'ct-approvedapps', 2),
(35, 'Pending Applications', 'super-pendingapps', 1),
(36, 'Approved Applications', 'super-approvedapps', 1),
(37, 'Approved applications', 'bi-approvedapps', 5);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `added_by` varchar(20) NOT NULL,
  `time_stamp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `receiver_id`, `sender_id`, `message`, `added_by`, `time_stamp`) VALUES
(1, 0, 9, 'Noc certificate required', 'AE', 1478200469),
(2, 0, 9, 'test', 'AE', 1478200526);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `local_bodytype` varchar(255) NOT NULL,
  `local_bodyname` varchar(255) NOT NULL,
  `localbody_usertype` varchar(255) NOT NULL,
  `user_type` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `district`, `username`, `password`, `local_bodytype`, `local_bodyname`, `localbody_usertype`, `user_type`, `status`) VALUES
(1, 'Chief Secretary', '', 'superadmin', 'super', '', '', '', 1, 1),
(2, 'Joseph', 'Kollam', 'joseph', 'super', '', '', '', 2, 1),
(4, 'Blessan', 'Kollam', 'blessan', 'super', '', '', '', 3, 1),
(6, 'Prince', '', 'prince', 'super', 'Panchayath', 'Puramattom', '', 4, 1),
(7, 'Manu', '', 'manu', 'super', '', '', 'BI', 5, 1),
(8, 'Harikrishnan', '', 'hari', 'super', '', '', 'BL', 6, 1),
(9, 'kiran', 'Pathanamthitta', 'kiran', 'super', 'Panchayath', 'Puramattom', 'AE', 7, 1),
(10, 'abhi', 'Pathanamthitta', 'abhi', 'super', 'Panchayath', 'Puramattom', 'AEE', 8, 1),
(11, 'jeevan', 'pathanamthitta', 'jeevan', 'super', 'Panchayath', 'Puramattom', 'EE', 9, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`11`);

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `application_forwarder`
--
ALTER TABLE `application_forwarder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `application_payments`
--
ALTER TABLE `application_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `application_remarks`
--
ALTER TABLE `application_remarks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `application_upload_status`
--
ALTER TABLE `application_upload_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `11` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `application_forwarder`
--
ALTER TABLE `application_forwarder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `application_payments`
--
ALTER TABLE `application_payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `application_remarks`
--
ALTER TABLE `application_remarks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `application_upload_status`
--
ALTER TABLE `application_upload_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `header`
--
ALTER TABLE `header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
