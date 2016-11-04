-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2016 at 06:51 PM
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
(2, 8, '', '', '', '', '80890', 'shamonsha665@gmail.com', 'test', 'hello', 'alapuzha', 'Municipality', 'tttt', '2', '1ee35368', 'afdbd', '873457cec7922e67235257753b6ee697.jpg', 1470536577, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0),
(3, 8, 'kollam', 'male', '690504', 'Nithesh', '80890', 'shamonsha665@gmail.com', 'Application for building approval', 'shamon nooranad', 'alapuzha', 'Municipality', 'Alpapuzha', '2', '26', 'n', '81d87a123665888e9a5d68e1330ee783.jpg', 1470536577, '78dd3ae7b5f244319315bc293bd21f45.jpg', 'f5726eea819d7d83adb3b865bf8b98f3.jpg', 'c2161d05db913b326da4b32464ac21b5.jpg', '2e2d341dbf15782c268938caf3a681f0.jpg', '', '9798', 'jjk', 'kjk', 'Residential', 'jk', 'jkj', 'kjk', 'j', 'jk', 'jkj', 'j', 'kj', 'jkj', 'kj', 'kj', 'kjk', '300', 0, 2),
(4, 8, '', '', '', '', '8989', 'hhjh', 'kjk', 'jhj', 'hj', 'Municipality', 'kj', '12', '3095aaa7', 'adbce', '52111542d03d52c47e167374efa8f378.jpg', 1470536577, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0),
(5, 8, 'jkj', 'Male', '8989', 'shamon', '7736527089', 'shamonsha665@gmail.com', 'shamon', 'hello', 'kollam', 'Panchayyath', 'puramattom', '10', '4f805d22', 'fiecn', '6333df894f1b54b7f9b5003527d01fc1.jpg', 1478190840, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `application_remarks`
--

CREATE TABLE `application_remarks` (
  `id` int(11) NOT NULL,
  `application_id` int(11) NOT NULL,
  `content_type` varchar(15) NOT NULL,
  `content` text NOT NULL,
  `added_by` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `time_stamp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application_remarks`
--

INSERT INTO `application_remarks` (`id`, `application_id`, `content_type`, `content`, `added_by`, `status`, `time_stamp`) VALUES
(1, 3, 'request', 'Site visit requested', 'Building Inspector', 0, 1478112176),
(3, 3, 'remarks', 'Application forwaded to AE', 'Building Inspector', 0, 1478194077);

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
(2, 3),
(3, 3);

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
(19, 'Messages', 'bi-messages', 5),
(20, 'Home', 'ae-home', 7),
(21, 'Messages', 'ae-messages', 7),
(22, 'Aplications', 'ae-pendingapps', 7);

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
(3, 'Mohan', 'Trivanrum', 'mohan', 'super', '', '', '', 2, 1),
(4, 'Blessan', 'Kollam', 'blessan', 'super', '', '', '', 3, 1),
(5, 'Shamon', 'Trivandrum', 'shamon', 'super', '', '', '', 3, 1),
(6, 'Prince', '', 'prince', 'super', 'Panchayath', 'Puramattom', '', 4, 1),
(7, 'Manu', '', 'manu', 'super', '', '', 'BI', 5, 1),
(8, 'Harikrishnan', '', 'hari', 'super', '', '', 'BL', 6, 1),
(9, 'kiran', 'Pathanamthitta', 'kiran', 'super', 'Panchayath', 'Puramattom', 'AE', 7, 1),
(10, 'abhi', 'Pathanamthitta', 'abhi', 'super', 'Panchayath', 'Puramattom', 'AEE', 8, 1);

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
-- AUTO_INCREMENT for table `application_remarks`
--
ALTER TABLE `application_remarks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `application_upload_status`
--
ALTER TABLE `application_upload_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `header`
--
ALTER TABLE `header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
