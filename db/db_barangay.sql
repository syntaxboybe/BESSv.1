-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2024 at 03:48 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_barangay`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblactivity`
--

CREATE TABLE `tblactivity` (
  `id` int(11) NOT NULL,
  `dateofactivity` date NOT NULL,
  `activity` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblactivity`
--

INSERT INTO `tblactivity` (`id`, `dateofactivity`, `activity`, `description`) VALUES
(10, '2024-01-03', 'Free Health Checkup', 'Free Health Checkup \r\nfor kids and adult'),
(11, '2024-01-28', 'Farmers Annual Meeting', 'Meeting for the members of Farmers Association');

-- --------------------------------------------------------

--
-- Table structure for table `tblactivityphoto`
--

CREATE TABLE `tblactivityphoto` (
  `id` int(11) NOT NULL,
  `activityid` int(11) NOT NULL,
  `filename` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblactivityphoto`
--

INSERT INTO `tblactivityphoto` (`id`, `activityid`, `filename`) VALUES
(18, 7, '1485255503893ChibiMaker.jpg'),
(19, 7, '1485255504014dental.jpg'),
(20, 7, '1485255504108images.jpg'),
(21, 8, '1485255608251dfxfxfxdfxfxfxdf.png'),
(22, 8, '1485255608315easy-nail-art-designs-for-beginners-youtube.jpg'),
(23, 8, '1485255608404Easy-Winter-Nail-Art-Tutorials-2013-2014-For-Beginners-Learners-10.jpg'),
(24, 8, '1485255608513motherboard.png'),
(25, 9, '148525575293111041019_1012143402147589_9043399646875097729_n.jpg'),
(26, 9, '1485255753089bg.PNG'),
(39, 11, '1703229506491farmers.PNG'),
(40, 10, '1703229519653healthcheck.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblblotter`
--

CREATE TABLE `tblblotter` (
  `id` int(11) NOT NULL,
  `yearRecorded` varchar(4) NOT NULL,
  `dateRecorded` date NOT NULL,
  `complainant` text NOT NULL,
  `cage` int(11) NOT NULL,
  `caddress` text NOT NULL,
  `ccontact` int(11) NOT NULL,
  `personToComplain` text NOT NULL,
  `page` int(11) NOT NULL,
  `paddress` text NOT NULL,
  `pcontact` int(11) NOT NULL,
  `complaint` text NOT NULL,
  `actionTaken` varchar(50) NOT NULL,
  `sStatus` varchar(50) NOT NULL,
  `locationOfIncidence` text NOT NULL,
  `recordedby` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblblotter`
--

INSERT INTO `tblblotter` (`id`, `yearRecorded`, `dateRecorded`, `complainant`, `cage`, `caddress`, `ccontact`, `personToComplain`, `page`, `paddress`, `pcontact`, `complaint`, `actionTaken`, `sStatus`, `locationOfIncidence`, `recordedby`) VALUES
(3, '2016', '2016-10-15', 'sda, as das', 2132, 'asda', 213, '11', 3213, 'dasda', 2123, '213asd', '1st Option', 'Closed', 'asdsa', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tblclearance`
--

CREATE TABLE `tblclearance` (
  `id` int(11) NOT NULL,
  `clearanceNo` int(11) NOT NULL,
  `residentid` int(11) NOT NULL,
  `findings` text NOT NULL,
  `purpose` text NOT NULL,
  `orNo` int(11) NOT NULL,
  `samount` int(11) NOT NULL,
  `dateRecorded` date NOT NULL,
  `recordedBy` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblclearance`
--

INSERT INTO `tblclearance` (`id`, `clearanceNo`, `residentid`, `findings`, `purpose`, `orNo`, `samount`, `dateRecorded`, `recordedBy`, `status`) VALUES
(8, 1214, 11, 'CLEAN RECORD', 'asd', 12412421, 500, '2017-01-20', 'User1', 'Approved'),
(9, 1234, 15, 'asdada', 'local employment', 12, 3434, '2017-01-22', 'admin', 'Approved'),
(10, 123, 11, 'qwe', 'qwe', 213, 2123, '2017-01-24', 'admin', 'Approved'),
(11, 0, 12, 'BAD RECORD', 'For Scholarship', 0, 0, '2023-12-22', 'Ahri', 'Disapproved'),
(12, 2468, 12, 'CLEAN RECORD', 'For Scholarship', 12221213, 250, '2023-12-22', 'admin', 'Approved'),
(13, 0, 12, 'BAD RECORD', 'For Scholarship', 0, 0, '2023-12-23', 'Ahri', 'Disapproved');

-- --------------------------------------------------------

--
-- Table structure for table `tblhousehold`
--

CREATE TABLE `tblhousehold` (
  `id` int(11) NOT NULL,
  `householdno` int(11) NOT NULL,
  `zone` varchar(11) NOT NULL,
  `totalhouseholdmembers` int(2) NOT NULL,
  `headoffamily` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblhousehold`
--

INSERT INTO `tblhousehold` (`id`, `householdno`, `zone`, `totalhouseholdmembers`, `headoffamily`) VALUES
(3, 2, '2', 0, '12');

-- --------------------------------------------------------

--
-- Table structure for table `tbllogs`
--

CREATE TABLE `tbllogs` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `logdate` datetime NOT NULL,
  `action` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbllogs`
--

INSERT INTO `tbllogs` (`id`, `user`, `logdate`, `action`) VALUES
(2, 'asd', '2017-01-04 00:00:00', 'Added Resident namedjayjay, asd asd'),
(3, 'asd', '2017-01-04 19:13:40', 'Update Resident named Sample1, User1 Brgy1'),
(4, 'sad', '2017-01-05 13:22:10', 'Update Official named eliezer a. vacalares, jr.'),
(7, 'sad', '2017-01-05 13:54:40', 'Update Household Number 1'),
(8, 'sad', '2017-01-05 14:00:08', 'Update Blotter Request sda, as das'),
(9, 'sad', '2017-01-05 14:15:39', 'Update Clearance with clearance number of 123131'),
(10, 'sad', '2017-01-05 14:25:03', 'Update Permit with business name of asda'),
(11, 'sad', '2017-01-05 14:25:25', 'Update Resident named Sample1, User1 Brgy1'),
(12, 'Administrator', '2017-01-24 16:32:40', 'Added Permit with business name of hahaha'),
(13, 'Administrator', '2017-01-24 16:35:41', 'Added Clearance with clearance number of 123'),
(14, 'Administrator', '2017-01-24 18:43:35', 'Added Activity sad'),
(15, 'Administrator', '2017-01-24 18:45:49', 'Added Activity qwe'),
(16, 'Administrator', '2017-01-24 18:46:20', 'Added Activity ss'),
(17, 'Administrator', '2017-01-24 18:47:39', 'Added Activity e'),
(18, 'Administrator', '2017-01-24 18:55:20', 'Added Activity activity'),
(19, 'Administrator', '2017-01-24 18:58:23', 'Added Activity Activity'),
(20, 'Administrator', '2017-01-24 19:00:07', 'Added Activity activity'),
(21, 'Administrator', '2017-01-24 19:02:32', 'Added Activity Activity'),
(22, 'Administrator', '2017-01-24 19:04:54', 'Added Activity activity'),
(23, 'Administrator', '2017-01-24 19:08:40', 'Update Activity activity'),
(24, 'Administrator', '2017-01-27 23:23:40', 'Added Activity teets'),
(25, 'Administrator', '2017-01-27 23:24:14', 'Update Resident named Sample1, User1 Brgy1'),
(26, 'Administrator', '2017-01-27 23:25:10', 'Update Resident named sda, as das'),
(27, 'Administrator', '2017-01-30 10:45:13', 'Added Resident named 2, 2 2'),
(28, 'Administrator', '2017-01-30 10:45:54', 'Added Resident named 2, 2 2'),
(29, 'Administrator', '2017-02-06 08:58:23', 'Update Resident named sda, as das'),
(30, 'Administrator', '2017-02-06 09:00:14', 'Update Resident named sda, as das'),
(31, 'Administrator', '2017-02-06 09:03:57', 'Added Household Number 2'),
(32, 'Administrator', '2017-02-06 09:04:25', 'Added Household Number 2'),
(33, 'Administrator', '2023-12-22 13:18:40', 'Update Official named Galeo, Man Jean'),
(34, 'Administrator', '2023-12-22 13:19:24', 'Added Official named Akali Ahri Medusa'),
(35, 'Administrator', '2023-12-22 13:20:02', 'Added Zone number 1'),
(36, 'Administrator', '2023-12-22 13:20:25', 'Added Zone number 2'),
(37, 'Administrator', '2023-12-22 13:20:39', 'Added Zone number 2'),
(38, 'Administrator', '2023-12-22 13:21:01', 'Added Zone number 2'),
(39, 'Administrator', '2023-12-22 13:21:24', 'Added Zone number 2'),
(40, 'Administrator', '2023-12-22 13:21:31', 'Added Zone number 2'),
(41, 'Administrator', '2023-12-22 13:22:14', 'Update Zone number '),
(42, 'Administrator', '2023-12-22 13:22:26', 'Update Zone number '),
(43, 'Administrator', '2023-12-22 13:22:45', 'Update Zone number '),
(44, 'Administrator', '2023-12-22 13:23:05', 'Added Zone number 3'),
(45, 'Administrator', '2023-12-22 13:23:11', 'Added Zone number 3'),
(46, 'Administrator', '2023-12-22 13:24:48', 'Update Staff with name of staff'),
(47, 'Administrator', '2023-12-22 13:25:01', 'Added Staff with name of rbi'),
(48, 'Administrator', '2023-12-22 13:25:18', 'Added Staff with name of sec'),
(49, 'Administrator', '2023-12-22 13:31:51', 'Update Resident named Akali, Ahri Akshan'),
(50, 'Administrator', '2023-12-22 14:20:04', 'Update Permit with business name of hahaha'),
(51, 'Administrator', '2023-12-22 14:20:16', 'Update Permit with business name of hahaha'),
(52, 'Administrator', '2023-12-22 14:20:28', 'Update Permit with business name of hahaha'),
(53, 'Administrator', '2023-12-22 14:22:06', 'Update Permit with business name of hahaha'),
(54, 'Administrator', '2023-12-22 14:35:02', 'Added Clearance with clearance number of 2468'),
(55, 'Administrator', '2023-12-22 14:47:07', 'Update Permit with business name of asda'),
(56, 'Administrator', '2023-12-22 14:48:04', 'Update Resident named a, asd das'),
(57, 'Administrator', '2023-12-22 14:48:21', 'Update Resident named sdf, das das'),
(58, 'Administrator', '2023-12-22 14:49:15', 'Update Resident named Sample1, User1 Brgy1'),
(59, 'Administrator', '2023-12-22 14:49:26', 'Update Resident named Sample1, User1 Brgy1'),
(60, 'Administrator', '2023-12-22 14:49:46', 'Update Resident named jay, dsf asdf'),
(61, 'Administrator', '2023-12-22 14:49:54', 'Update Resident named jayjay, asd asd'),
(62, 'Administrator', '2023-12-22 14:50:33', 'Update Resident named gwen, style hero'),
(63, 'Administrator', '2023-12-22 14:51:18', 'Update Resident named gwen, stacy gil'),
(64, 'Administrator', '2023-12-22 14:59:04', 'Update Resident named jayjay, asd asd'),
(65, 'Administrator', '2023-12-22 15:06:38', 'Update Resident named Kali, Sample Sample'),
(66, 'Administrator', '2023-12-22 15:08:54', 'Update Resident named Ashe, Asheen Ashes'),
(67, 'Administrator', '2023-12-22 15:09:53', 'Update Official named Ashe, Asheen A'),
(68, 'Administrator', '2023-12-22 15:10:11', 'Update Official named Lee, Sin K.'),
(69, 'Administrator', '2023-12-22 15:10:32', 'Update Official named Khazix, K6 K.'),
(70, 'Administrator', '2023-12-22 15:10:56', 'Update Official named Penduko, Pedro SSR.'),
(71, 'Administrator', '2023-12-22 15:11:20', 'Update Official named Delulu, Tristana M.'),
(72, 'Administrator', '2023-12-22 15:11:44', 'Update Official named Yusuke, Eugine P.'),
(73, 'Administrator', '2023-12-22 15:12:11', 'Update Official named Jayce, Zeus M.'),
(74, 'Administrator', '2023-12-22 15:13:23', 'Update Activity Free Health Checkup'),
(75, 'Administrator', '2023-12-22 15:19:41', 'Update Resident named gwen, stacy gil'),
(76, 'Administrator', '2023-12-22 15:26:47', 'Update Blotter Request by sda, as das'),
(77, 'Administrator', '2023-12-22 15:26:55', 'Update Blotter Request by sda, as das'),
(78, 'Administrator', '2023-12-22 15:26:59', 'Update Blotter Request by sda, as das'),
(79, 'Administrator', '2023-12-22 15:27:06', 'Update Blotter Request by sda, as das'),
(80, 'Administrator', '2023-12-22 15:29:43', 'Update Blotter Request by sda, as das'),
(81, 'Administrator', '2023-12-22 15:29:54', 'Update Blotter Request by sda, as das'),
(82, 'Administrator', '2023-12-22 15:32:27', 'Update Zone number '),
(83, 'Administrator', '2023-12-22 15:33:04', 'Added Zone number 3'),
(84, 'Administrator', '2023-12-22 15:33:10', 'Added Zone number 3'),
(85, 'Administrator', '2023-12-22 15:33:14', 'Added Zone number 3'),
(86, 'Administrator', '2023-12-22 15:37:32', 'Update Official named Galeo, Man Jean'),
(87, 'Administrator', '2023-12-22 15:37:37', 'Update Official named Ashe, Asheen A'),
(88, 'Administrator', '2023-12-22 15:37:43', 'Update Official named Lee, Sin K.'),
(89, 'Administrator', '2023-12-22 15:37:47', 'Update Official named Khazix, K6 K.'),
(90, 'Administrator', '2023-12-22 15:37:53', 'Update Official named Penduko, Pedro SSR.'),
(91, 'Administrator', '2023-12-22 15:37:57', 'Update Official named Delulu, Tristana M.'),
(92, 'Administrator', '2023-12-22 15:38:01', 'Update Official named Yusuke, Eugine P.'),
(93, 'Administrator', '2023-12-22 15:38:05', 'Update Official named Jayce, Zeus M.'),
(94, 'Administrator', '2023-12-22 15:39:19', 'Update Activity Farmers Annual Meeting'),
(95, 'Administrator', '2023-12-22 15:40:11', 'Update Activity Free Health Checkup'),
(96, 'Administrator', '2023-12-22 15:40:28', 'Update Activity Farmers Annual Meeting'),
(97, 'Administrator', '2023-12-22 15:51:33', 'Update Resident named sona, nami swan'),
(98, 'Administrator', '2023-12-22 15:51:46', 'Update Resident named gwen, stacy gil'),
(99, 'Administrator', '2023-12-22 15:53:58', 'Added Resident named Jarvan, Darius IV'),
(100, 'Administrator', '2023-12-22 15:54:24', 'Update Resident named gwen, stacy gil'),
(101, 'Administrator', '2023-12-22 15:54:30', 'Update Resident named sdf, das das'),
(102, 'Administrator', '2023-12-22 15:54:34', 'Update Resident named Kali, Sample Sample'),
(103, 'Administrator', '2023-12-22 15:54:39', 'Update Resident named Akali, Ahri Akshan'),
(104, 'Administrator', '2023-12-22 15:54:44', 'Update Resident named sona, nami swan'),
(105, 'Administrator', '2023-12-22 15:55:23', 'Update Resident named Jarvan, Darius IV'),
(106, 'Administrator', '2023-12-22 15:55:33', 'Update Resident named Ashe, Asheen Ashes'),
(107, 'Administrator', '2023-12-22 15:56:51', 'Update Resident named Gnar, Grud GG'),
(108, 'Administrator', '2023-12-22 15:59:00', 'Update Resident named gwen, stacy gil'),
(109, 'Administrator', '2023-12-22 15:59:06', 'Update Resident named Gnar, Grud GG'),
(110, 'Administrator', '2023-12-22 15:59:11', 'Update Resident named Kali, Sample Sample'),
(111, 'Administrator', '2023-12-22 15:59:17', 'Update Resident named Ashe, Asheen Ashes'),
(112, 'Administrator', '2023-12-22 15:59:27', 'Update Resident named Akali, Ahri Akshan'),
(113, 'Administrator', '2023-12-22 15:59:41', 'Update Resident named sona, nami swan'),
(114, 'Administrator', '2023-12-22 16:00:21', 'Update Resident named Jarvan, Darius IV'),
(115, 'Administrator', '2023-12-22 19:35:01', 'Update Resident named gwen, stacy gil'),
(116, 'Administrator', '2023-12-23 20:09:23', 'Update Resident named sona, nami swan'),
(117, 'Administrator', '2023-12-25 09:27:39', 'Update Permit with business name of asda'),
(118, 'Administrator', '2023-12-25 09:27:49', 'Update Permit with business name of asda'),
(119, 'Administrator', '2023-12-25 09:27:56', 'Update Permit with business name of asda'),
(120, 'Administrator', '2023-12-25 09:28:06', 'Update Permit with business name of asda'),
(121, 'Administrator', '2023-12-25 09:39:00', 'Update Permit with business name of asda'),
(122, 'Administrator', '2023-12-25 09:39:07', 'Update Permit with business name of 23'),
(123, 'Administrator', '2023-12-25 09:40:37', 'Update Blotter Request by sda, as das'),
(124, 'Administrator', '2023-12-25 09:40:43', 'Update Blotter Request by sda, as das'),
(125, 'Administrator', '2023-12-25 09:40:57', 'Update Permit with business name of sa'),
(126, 'Administrator', '2023-12-25 09:41:02', 'Update Permit with business name of hahaha'),
(127, 'Administrator', '2023-12-25 09:41:10', 'Update Permit with business name of Computech'),
(128, 'Administrator', '2023-12-25 09:41:15', 'Update Permit with business name of sarisari');

-- --------------------------------------------------------

--
-- Table structure for table `tblofficial`
--

CREATE TABLE `tblofficial` (
  `id` int(11) NOT NULL,
  `sPosition` varchar(50) NOT NULL,
  `completeName` text NOT NULL,
  `pcontact` varchar(20) NOT NULL,
  `paddress` text NOT NULL,
  `termStart` date NOT NULL,
  `termEnd` date NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblofficial`
--

INSERT INTO `tblofficial` (`id`, `sPosition`, `completeName`, `pcontact`, `paddress`, `termStart`, `termEnd`, `status`) VALUES
(4, 'Captain', 'Galeo, Man Jean', '8978768761', 'Poblacion Naawan', '2016-10-03', '2016-10-06', 'Ongoing Term'),
(5, 'Kagawad(Ordinance)', 'Ashe, Asheen A', '4234', 'Poblacion Naawan', '2016-10-31', '2016-11-17', 'Ongoing Term'),
(6, 'Kagawad(Public Safety)', 'Lee, Sin K.', '234234', 'Poblacion Naawan', '2016-10-31', '2016-11-24', 'Ongoing Term'),
(7, 'Kagawad(Tourism)', 'Khazix, K6 K.', '67567', 'Poblacion Naawan', '2016-11-13', '2016-12-01', 'Ongoing Term'),
(8, 'Kagawad(Budget & Finance)', 'Penduko, Pedro SSR.', '35454', 'Poblacion Naawan', '2016-11-06', '2016-11-30', 'Ongoing Term'),
(9, 'Kagawad(Agriculture)', 'Delulu, Tristana M.', '3453545', 'Poblacion Naawan', '2016-11-06', '2016-11-22', 'Ongoing Term'),
(10, 'Kagawad(Education)', 'Yusuke, Eugine P.', '4245', 'Poblacion Naawan', '2016-11-06', '2016-11-25', 'Ongoing Term'),
(11, 'Kagawad(Infrastracture)', 'Jayce, Zeus M.', '231', 'Poblacion Naawan', '2016-10-31', '2016-11-28', 'Ongoing Term');

-- --------------------------------------------------------

--
-- Table structure for table `tblpermit`
--

CREATE TABLE `tblpermit` (
  `id` int(11) NOT NULL,
  `residentid` int(11) NOT NULL,
  `businessName` text NOT NULL,
  `businessAddress` text NOT NULL,
  `typeOfBusiness` varchar(50) NOT NULL,
  `orNo` int(11) NOT NULL,
  `samount` int(11) NOT NULL,
  `dateRecorded` date NOT NULL,
  `recordedBy` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpermit`
--

INSERT INTO `tblpermit` (`id`, `residentid`, `businessName`, `businessAddress`, `typeOfBusiness`, `orNo`, `samount`, `dateRecorded`, `recordedBy`, `status`) VALUES
(2, 11, 'test', 'test', 'Option 2', 213, 2132131, '2016-10-15', '', 'Disapproved'),
(3, 11, 'asda', 'sdfs', 'Computer Shop ', 43434, 45454, '2016-10-15', 'admin', 'Approved'),
(4, 11, '23', 'asda', 'Hardware Store ', 342, 434543, '2016-10-15', 'admin', 'Approved'),
(5, 11, 'Business ', 'Address', 'Option 1', 0, 0, '2016-12-04', 'a', 'Disapproved'),
(6, 11, 'sa', 'sa', 'Commercial ', 2, 12, '2017-01-20', 'a', 'Approved'),
(7, 11, 'sad', 'asd', 'Option 2', 0, 0, '2017-01-20', 'a', 'Disapproved'),
(8, 12, 'hahaha', 'hehe', 'Store ', 1234, 1234, '2017-01-24', 'admin', 'Approved'),
(9, 12, 'Computech', 'Barangay Poblacion', 'Commercial ', 121314, 5000, '2023-12-22', 'akali', 'Approved'),
(10, 12, 'sarisari', 'n/a', 'Computer Shop ', 24526, 10, '2023-12-22', 'akali', 'Approved'),
(11, 11, 'Computer Shop', 'Barangay Poblacion', 'Option 2', 0, 0, '2023-12-23', 'kali', 'Disapproved');

-- --------------------------------------------------------

--
-- Table structure for table `tblresident`
--

CREATE TABLE `tblresident` (
  `id` int(11) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `bdate` varchar(20) NOT NULL,
  `bplace` text NOT NULL,
  `age` int(11) NOT NULL,
  `barangay` varchar(120) NOT NULL,
  `zone` varchar(5) NOT NULL,
  `totalhousehold` int(5) NOT NULL,
  `differentlyabledperson` varchar(100) NOT NULL,
  `relationtohead` varchar(50) NOT NULL,
  `maritalstatus` varchar(50) NOT NULL,
  `bloodtype` varchar(10) NOT NULL,
  `civilstatus` varchar(20) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `monthlyincome` int(12) NOT NULL,
  `householdnum` int(11) NOT NULL,
  `lengthofstay` int(11) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `skills` text NOT NULL,
  `igpitID` int(11) NOT NULL,
  `philhealthNo` int(12) NOT NULL,
  `highestEducationalAttainment` varchar(50) NOT NULL,
  `houseOwnershipStatus` varchar(50) NOT NULL,
  `landOwnershipStatus` varchar(20) NOT NULL,
  `dwellingtype` varchar(20) NOT NULL,
  `waterUsage` varchar(20) NOT NULL,
  `lightningFacilities` varchar(20) NOT NULL,
  `sanitaryToilet` varchar(20) NOT NULL,
  `formerAddress` text NOT NULL,
  `remarks` text NOT NULL,
  `image` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblresident`
--

INSERT INTO `tblresident` (`id`, `lname`, `fname`, `mname`, `bdate`, `bplace`, `age`, `barangay`, `zone`, `totalhousehold`, `differentlyabledperson`, `relationtohead`, `maritalstatus`, `bloodtype`, `civilstatus`, `occupation`, `monthlyincome`, `householdnum`, `lengthofstay`, `religion`, `nationality`, `gender`, `skills`, `igpitID`, `philhealthNo`, `highestEducationalAttainment`, `houseOwnershipStatus`, `landOwnershipStatus`, `dwellingtype`, `waterUsage`, `lightningFacilities`, `sanitaryToilet`, `formerAddress`, `remarks`, `image`, `username`, `password`) VALUES
(11, 'Kali', 'Sample', 'Sample', '2019-12-01', 'dfsd1', 4, 'Poblacion', '2', 3, 'asdf', 'asdf', 'saf', 'sadf', 'fsd', 'adfs', 1, 1, 7, 'asd', 'asd', 'Female', 'asda1', 2, 2211, 'Doctorate degree', 'Own Home', '1st Option', '1st Option', 'Faucet', '2211', 'Water-sealed', 'Poblacion Naawan', '', '1703228798068_akali.jpg', 'kali', 'kali'),
(12, 'Akali', 'Ahri', 'Akshan', '2016-01-01', 'Poblacion Naawan', 7, 'Poblacion', '2', 5, '', 'Mother', '', 'O', '', 'Programmer', 1000, 2, 6, 'Inc', 'Filipino', 'Female', 'sasda', 2, 3, 'Elementary', 'Own Home', '2nd Option', '1st Option', 'Faucet', '3', 'Water-sealed', 'Poblacion Naawan', 'n/a', '1703223111204_akali.jpg', 'akali', 'akali'),
(13, 'gwen', 'stacy', 'gil', '2016-12-31', 'asdf', 6, 'Poblacion', '0', 6, '', '', '', '', '', '', 234, 1, 1, 'asd', 'asdf', 'Female', 'saf', 1092334, 3, 'No schooling completed', 'Own Home', '1st Option', '1st Option', 'asdf', '3', 'asdf', 'Poblacion Naawan', 'asdf', '1703229581044_poblacionlogo.png', '1', '1'),
(14, 'Gnar', 'Grud', 'GG', '2016-01-01', 'dsf', 7, 'Poblacion', '0', 2, '', '', '', '', '', '', 234, 2, 3, 'asdf', 'asdf', 'Male', 'asf', 2, 2, 'No schooling completed', 'Own Home', '1st Option', '1st Option', 'asf', '2', 'asdf', 'Poblacion Naawan', 'asd', '1703231811073_jarvan.jpg', 'asdf', 'asdf'),
(15, 'sona', 'nami', 'swan', '2017-01-19', 'sdfa', 6, 'Poblacion', '23', 23, 'sdf', 'adf', 'asd', 'asdf', 'adf', 'adsf', 23123, 23, 23, 'asd', 'dsf', 'Female', 'asdf', 23, 23, 'College, undergrad', 'Own Home', 'Owned', '1st Option', 'Faucet', '23', 'Water-sealed', 'Poblacion Naawan', 'asfa', '1703227786131_ahri.jpg', 'qwe', 'qwe'),
(16, 'Ashe', 'Asheen', 'Ashes', '2000-07-12', 'Poblacion Naawan', 23, 'Poblacion', '5', 5, 'ad', 'n/a', '', 'as', 'asd', 'N/A', 5000, 23, 23, 'Inc', 'asd', 'Female', 'sad', 23, 23, 'College, undergrad', 'Own Home', 'Owned', '2nd Option', 'Faucet', '23', 'Water-sealed', 'Poblacion Naawan', 'asd', '1703228934969_poblacionlogo.png', 'a', 'sa'),
(17, 'Jarvan', 'Darius', 'IV', '1999-12-24', '', 23, 'Poblacion', '3', 7, '', '', '', '', '', '', 1497, 4, 40, '', '', 'Male', '', 120, 1220, 'Elementary', 'Own Home', 'Owned', '1st Option', 'Faucet', '1220', 'Water-sealed', 'Poblacion Naawan', '', '1703231638846_jarvan.jpg', 'jarvan', 'jarvan');

-- --------------------------------------------------------

--
-- Table structure for table `tblstaff`
--

CREATE TABLE `tblstaff` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstaff`
--

INSERT INTO `tblstaff` (`id`, `name`, `username`, `password`) VALUES
(1, 'staff', 'rbi', 'rbi'),
(2, 'rbi', 'rbi', 'rbi'),
(3, 'sec', 'sec', 'sec');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`id`, `username`, `password`, `type`) VALUES
(1, 'admin', 'admin', 'administrator'),
(2, 'zone', '1234', 'zoneleader');

-- --------------------------------------------------------

--
-- Table structure for table `tblzone`
--

CREATE TABLE `tblzone` (
  `id` int(5) NOT NULL,
  `zone` varchar(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblzone`
--

INSERT INTO `tblzone` (`id`, `zone`, `username`, `password`) VALUES
(0, '1', 'zone', 'zone'),
(2, '8', 'zone', 'zone');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblactivity`
--
ALTER TABLE `tblactivity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblactivityphoto`
--
ALTER TABLE `tblactivityphoto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblblotter`
--
ALTER TABLE `tblblotter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblclearance`
--
ALTER TABLE `tblclearance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblhousehold`
--
ALTER TABLE `tblhousehold`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbllogs`
--
ALTER TABLE `tbllogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblofficial`
--
ALTER TABLE `tblofficial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpermit`
--
ALTER TABLE `tblpermit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblresident`
--
ALTER TABLE `tblresident`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblstaff`
--
ALTER TABLE `tblstaff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblzone`
--
ALTER TABLE `tblzone`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblactivity`
--
ALTER TABLE `tblactivity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tblactivityphoto`
--
ALTER TABLE `tblactivityphoto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tblblotter`
--
ALTER TABLE `tblblotter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblclearance`
--
ALTER TABLE `tblclearance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tblhousehold`
--
ALTER TABLE `tblhousehold`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbllogs`
--
ALTER TABLE `tbllogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `tblofficial`
--
ALTER TABLE `tblofficial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tblpermit`
--
ALTER TABLE `tblpermit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tblresident`
--
ALTER TABLE `tblresident`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tblstaff`
--
ALTER TABLE `tblstaff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
