-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2020 at 09:32 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `campus`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_password` varchar(100) NOT NULL,
  `admin_type` int(11) NOT NULL COMMENT '1-admin'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `admin_type`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(10) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `code` varchar(100) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `slot` varchar(100) NOT NULL,
  `credits` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `semester`, `branch`, `code`, `course_name`, `slot`, `credits`) VALUES
(14, 'S1', 'CSE', 'MA101', 'CALCULUS', 'A', 4),
(15, 'S1', 'CSE', 'PH100', 'ENGINEERING PHYSICS', 'B', 4),
(16, 'S2', 'CSE', 'PH100', 'ENGINEERING PHYSICS', 'B', 4),
(17, 'S1', 'CSE', 'CY100', 'ENGINEERING CHEMISTRY', 'B', 4),
(18, 'S2', 'CSE', 'CY100', 'ENGINEERING CHEMISTRY', 'B', 4),
(19, 'S1', 'CSE', 'BE100', 'ENGINEERING MECHANICS', 'C', 4),
(20, 'S2', 'CSE', 'BE100', 'ENGINEERING MECHANICS', 'C', 4),
(21, 'S1', 'CSE', 'BE110', 'ENGINEERING GRAPHICS', 'C', 4),
(22, 'S2', 'CSE', 'BE110', 'ENGINEERING GRAPHICS', 'C', 4),
(23, 'S1', 'CSE', 'BE101', 'INTRODUCTION TO ELECTRICAL ENGINEERING', 'D', 3),
(24, 'S1', 'CSE', 'BE103', 'INTRODUCTION TO SUSTAINABLE ENGINEERING', 'E', 3),
(25, 'S2', 'CSE', 'EC100', 'BASICS OF ELECTRONICS ENGINEERING', 'F', 3),
(26, 'S1', 'CSE', 'PH110', 'ENGINEERING PHYSICS LAB', 'S', 1),
(27, 'S2', 'CSE', 'PH100', 'ENGINEERING PHYSICS LAB', 'S', 1),
(28, 'S1', 'CSE', 'CY110', 'ENGINEERING CHEMISTRY LAB', 'S', 1),
(29, 'S2', 'CSE', 'CY100', 'ENGINEERING CHEMISTRY LAB', 'S', 1),
(30, 'S2', 'CSE', 'EC110', 'ELECTRONICS WORKSHOP', 'T', 1),
(31, 'S3', 'CSE', 'MA201', 'LINEAR ALGEBRA AND COMPLEX ANALYSIS', 'A', 4),
(32, 'S3', 'CSE', 'CS201', 'DISCRETE COMPUTATIONAL STRUCTURES', 'B', 4),
(33, 'S3', 'CSE', 'CS203', 'SWITCHING THEORY AND LOGIC DESIGN', 'C', 4),
(34, 'S3', 'CSE', 'CS205', 'DATA STRUCTURES', 'D', 4),
(35, 'S3', 'CSE', 'CS207', 'ELECTRONIC DEVICES AND CIRCUITS', 'E', 3),
(36, 'S3', 'CSE', 'HS210', 'LIFE SKILLS', 'F', 3),
(37, 'S4', 'CSE', 'HS210', 'LIFE SKILLS', 'F', 3),
(38, 'S3', 'CSE', 'HS200', 'BUSINESS ECONOMICS', 'F', 3),
(39, 'S4', 'CSE', 'HS200', 'BUSINESS ECONOMICS', 'F', 3),
(40, 'S3', 'CSE', 'CS231', 'DATA STRUCTURES LAB', 'S', 1),
(41, 'S3', 'CSE', 'CS233', 'ELECTRONICS CIRCUITS LAB', 'T', 1),
(42, 'S4', 'CSE', 'MA202', 'PROBABILITY DISTRIBUTIONS, TRANSFORMS AND NUMERICAL METHODS', 'A', 4),
(43, 'S4', 'CSE', 'CS202', 'COMPUTER ORGANIZATION AND ARCHITECTURE', 'B', 4),
(44, 'S4', 'CSE', 'CS204', 'OPERATING SYSTEMS', 'C', 4),
(45, 'S4', 'CSE', 'CS206', 'OBJECT ORIENTED DESIGN AND PROGRAMMING', 'D', 3),
(46, 'S4', 'CSE', 'CS208', 'PRINCIPLES OF DATABASE DESIGN', 'E', 3),
(47, 'S4', 'CSE', 'CS232', 'FREE AND OPEN SOURCE SOFTWARE LAB', 'S', 1),
(48, 'S4', 'CSE', 'CS234', 'DIGITAL SYSTEMS LAB', 'T', 1),
(49, 'S5', 'CSE', 'CS301', 'THEORY OF COMPUTATION', 'A', 4),
(50, 'S5', 'CSE', 'CS303', 'SYSTEM SOFTWARE', 'B', 3),
(51, 'S5', 'CSE', 'CS305', 'MICROPROCESSORS AND MICROCONTROLLERS', 'C', 3),
(52, 'S5', 'CSE', 'CS307', 'DATA COMMUNICATION', 'D', 3),
(53, 'S5', 'CSE', 'CS309', 'GRAPH THEORY AND COMBINATORICS', 'E', 3),
(54, 'S5', 'CSE', 'CS361', 'SOFT COMPUTING', 'F', 3),
(55, 'S5', 'CSE', 'CS363', 'SIGNALS AND SYSTEMS', 'F', 3),
(56, 'S5', 'CSE', 'CS365', 'OPTIMIZATION TECHNIQUES', 'F', 3),
(57, 'S5', 'CSE', 'CS367', 'LOGIC FOR COMPUTER SCIENCE', 'F', 3),
(58, 'S5', 'CSE', 'CS369', 'DIGITAL SYSTEM TESTING AND TESTABLE DESIGN', 'F', 3),
(59, 'S5', 'CSE', 'CS341', 'DESIGN PROJECT', 'S', 2),
(60, 'S5', 'CSE', 'CS331', 'SYSTEM SOFTWARE LAB', 'T', 1),
(61, 'S5', 'CSE', 'CS333', 'APPLICATION SOFTWARE DEVELOPMENT LAB', 'U', 1),
(62, 'S6', 'CSE', 'CS302', 'DESIGN AND ANALYSIS OF ALGORITHMS', 'A', 4),
(63, 'S6', 'CSE', 'CS304', 'COMPILER DESIGN', 'B', 3),
(64, 'S6', 'CSE', 'CS306', 'COMPUTER NETWORKS', 'C', 3),
(65, 'S6', 'CSE', 'CS308', 'SOFWARE ENGINEERING AND PROJECT MANAGEMENT', 'D', 3),
(66, 'S6', 'CSE', 'HS300', 'PRINCIPLES OF MANAGEMENT', 'E', 3),
(67, 'S6', 'CSE', 'CS362', 'COMPUTER VISION', 'F', 3),
(68, 'S6', 'CSE', 'CS364', 'MOBILE COMPUTING', 'F', 3),
(69, 'S6', 'CSE', 'CS366', 'NATURAL LANGUAGE PROCESSING', 'F', 3),
(70, 'S6', 'CSE', 'CS368', 'WEB TECHNOLOGIES', 'F', 3),
(71, 'S6', 'CSE', 'CS372', 'HIGH PERFORMANCE COMPUTING', 'F', 3),
(72, 'S6', 'CSE', 'CS334', 'NETWORK PROGRAMMING LAB', 'T', 1),
(73, 'S6', 'CSE', 'CS332', 'MICROPROCESSOR LAB', 'S', 1),
(74, 'S6', 'CSE', 'CS352', 'COMPREHENSIVE EXAM', 'U', 2),
(75, 'S7', 'CSE', 'CS401', 'COMPUTER GRAPHICS', 'A', 4),
(76, 'S7', 'CSE', 'CS403', 'PROGRAMMING PARADIGMS', 'B', 3),
(77, 'S7', 'CSE', 'CS405', 'COMPUTER SYSTEM ARCHITECTURE', 'C', 3),
(78, 'S7', 'CSE', 'CS407', 'DISTRIBUTED COMPUTING', 'D', 3),
(79, 'S7', 'CSE', 'CS409', 'CRYPTOGRAPHY AND NETWORK SECURITY', 'E', 3),
(80, 'S7', 'CSE', 'CS461', 'COMPUTATIONAL GEOMETRY', 'F', 3),
(81, 'S7', 'CSE', 'CS463', 'DIGITAL IMAGE PROCESSING', 'F', 3),
(82, 'S7', 'CSE', 'CS465', 'BIO INFORMATICS', 'F', 3),
(83, 'S7', 'CSE', 'CS467', 'MACHINE LEARNING', 'F', 3),
(84, 'S7', 'CSE', 'CS469', 'COMPUTATIONAL COMPLEXITY', 'F', 3),
(85, 'S7', 'CSE', 'CS451', 'SEMINAR & PROJECT PRELIMINARY', 'S', 2),
(86, 'S7', 'CSE', 'CS431', 'COMPILER DESIGN LAB', 'T', 1),
(87, 'S8', 'CSE', 'CS402', 'DATA MINING AND WAREHOUSING', 'A', 3),
(88, 'S8', 'CSE', 'CS404', 'EMBEDDED SYSTEMS', 'B', 3),
(89, 'S8', 'CSE', 'CS462', 'FUZZY SET THEORY AND APPLICATIONS', 'C', 3),
(90, 'S8', 'CSE', 'CS464', 'ARTIFICIAL INTELLIGENCE', 'C', 3),
(91, 'S8', 'CSE', 'CS466', 'DATA SCIENCE', 'C', 3),
(92, 'S8', 'CSE', 'CS468', 'CLOUD COMPUTING', 'C', 3),
(93, 'S8', 'CSE', 'CS472', 'PRINCIPLES OF INFORMATION SECURITY', 'C', 3),
(94, 'S8', 'CSE', 'CS492', 'PROJECT', 'NO SLOT', 5),
(95, 'S8', 'CSE', 'ME482 ', 'ENERGY CONSERVATION AND MANAGEMENT', 'D', 3),
(96, 'S8', 'CSE', 'IT482 ', 'INFORMATION STORAGE MANAGEMENT', 'D', 3),
(97, 'S8', 'CSE', 'IE488', ' TOTAL QUALITY MANAGEMENT', 'D', 3),
(98, 'S8', 'CSE', 'EE488', ' INDUSTRIAL AUTOMATION', 'D', 3),
(99, 'S8', 'CSE', 'EC482', ' BIOMEDICAL ENGINEERING', 'D', 3),
(100, 'S8', 'CSE', 'CS488', ' C # AND .NET PROGRAMMING', 'D', 3),
(101, 'S8', 'CSE', 'CE488', ' DISASTER MANAGEMENT', 'D', 3),
(102, 'S8', 'CSE', 'AE482', ' INDUSTRIAL INSTRUMENTATION', 'D', 3);

-- --------------------------------------------------------

--
-- Table structure for table `credits`
--

CREATE TABLE `credits` (
  `id` int(10) NOT NULL,
  `std_id` int(10) NOT NULL,
  `first_sem` int(20) NOT NULL,
  `sec_sem` int(20) NOT NULL,
  `third_sem` int(20) NOT NULL,
  `forth_sem` int(20) NOT NULL,
  `fifth_sem` int(20) NOT NULL,
  `sixth_sem` int(20) NOT NULL,
  `seventh_sem` int(20) NOT NULL,
  `eighth_sem` int(20) NOT NULL,
  `cgpa` decimal(10,0) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `credits`
--

INSERT INTO `credits` (`id`, `std_id`, `first_sem`, `sec_sem`, `third_sem`, `forth_sem`, `fifth_sem`, `sixth_sem`, `seventh_sem`, `eighth_sem`, `cgpa`) VALUES
(1, 1, 24, 23, 24, 23, 23, 23, 22, 0, '0'),
(2, 2, 24, 23, 24, 23, 23, 23, 22, 0, '0'),
(3, 17, 18, 16, 19, 15, 14, 15, 11, 10, '0'),
(4, 4, 24, 23, 24, 23, 23, 23, 22, 0, '0'),
(5, 5, 24, 23, 24, 23, 23, 20, 22, 0, '0'),
(6, 64, 12, 23, 0, 0, 0, 0, 0, 0, '0'),
(7, 7, 24, 23, 24, 23, 23, 23, 22, 0, '0'),
(8, 8, 24, 23, 24, 23, 23, 23, 22, 0, '0'),
(9, 9, 24, 23, 24, 23, 23, 23, 22, 0, '0'),
(10, 10, 24, 23, 24, 23, 23, 23, 22, 0, '0'),
(11, 11, 17, 20, 24, 23, 20, 20, 16, 0, '0'),
(12, 12, 24, 23, 24, 23, 23, 23, 22, 0, '0'),
(13, 13, 24, 23, 24, 23, 23, 23, 22, 0, '0'),
(14, 14, 24, 23, 24, 23, 23, 23, 22, 0, '0'),
(15, 15, 24, 23, 24, 23, 23, 23, 22, 0, '0'),
(16, 16, 24, 23, 24, 23, 23, 23, 22, 0, '0'),
(18, 18, 24, 23, 18, 20, 20, 17, 16, 0, '0'),
(20, 20, 24, 23, 24, 23, 23, 23, 22, 0, '0'),
(21, 82, 23, 34, 23, 23, 0, 0, 0, 0, '0'),
(22, 85, 24, 24, 24, 24, 0, 0, 0, 0, '0'),
(23, 23, 24, 23, 24, 23, 23, 23, 22, 0, '0'),
(24, 24, 24, 23, 24, 23, 23, 23, 22, 0, '0'),
(25, 25, 24, 23, 24, 23, 23, 20, 22, 0, '0'),
(26, 26, 24, 23, 24, 23, 23, 20, 22, 0, '0'),
(27, 27, 24, 23, 24, 23, 23, 23, 22, 0, '0'),
(28, 28, 24, 23, 24, 23, 17, 20, 19, 0, '0'),
(29, 29, 24, 23, 24, 23, 23, 23, 22, 0, '0'),
(30, 30, 24, 23, 24, 20, 20, 16, 19, 0, '0'),
(31, 31, 24, 23, 24, 23, 23, 23, 22, 0, '0'),
(32, 32, 24, 23, 24, 23, 23, 23, 22, 0, '0'),
(33, 33, 24, 23, 24, 23, 23, 23, 22, 0, '0'),
(34, 34, 24, 23, 24, 23, 23, 20, 19, 0, '0'),
(35, 35, 24, 23, 24, 23, 23, 23, 22, 0, '0'),
(36, 36, 24, 23, 24, 23, 23, 23, 22, 0, '0'),
(37, 37, 24, 23, 24, 23, 23, 23, 22, 0, '0'),
(38, 38, 24, 23, 24, 23, 23, 23, 19, 0, '0'),
(39, 39, 24, 23, 24, 23, 23, 23, 16, 0, '0'),
(40, 40, 24, 23, 24, 23, 23, 23, 16, 0, '0'),
(41, 41, 24, 23, 24, 23, 20, 20, 16, 0, '0'),
(42, 42, 24, 23, 24, 23, 23, 23, 22, 0, '0'),
(43, 43, 24, 23, 24, 23, 23, 23, 22, 0, '0'),
(44, 44, 24, 23, 14, 20, 14, 16, 13, 0, '0'),
(45, 45, 24, 23, 24, 23, 23, 23, 22, 0, '0'),
(46, 46, 24, 23, 24, 23, 23, 23, 22, 0, '0'),
(47, 47, 24, 23, 24, 23, 23, 23, 22, 0, '0'),
(48, 48, 24, 23, 24, 23, 23, 23, 22, 0, '0'),
(49, 49, 24, 23, 24, 23, 23, 23, 22, 0, '0'),
(50, 50, 24, 23, 24, 23, 23, 23, 22, 0, '0'),
(51, 51, 24, 23, 24, 23, 23, 23, 22, 0, '0'),
(54, 77, 23, 23, 0, 0, 0, 0, 0, 0, '0');

-- --------------------------------------------------------

--
-- Table structure for table `due_amount`
--

CREATE TABLE `due_amount` (
  `id` int(10) NOT NULL,
  `due_id` varchar(10) NOT NULL,
  `student_id` varchar(10) NOT NULL,
  `amount` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `due_amount`
--

INSERT INTO `due_amount` (`id`, `due_id`, `student_id`, `amount`) VALUES
(1, '1', '1', '10'),
(5, '1', '2', '0'),
(9, '2', '79', '250'),
(10, '1', '77', '0'),
(12, '1', '3', '0');

-- --------------------------------------------------------

--
-- Table structure for table `due_dept`
--

CREATE TABLE `due_dept` (
  `dept_id` int(10) NOT NULL,
  `department` varchar(100) NOT NULL,
  `department_id` varchar(100) NOT NULL,
  `staffincharge` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `due_dept`
--

INSERT INTO `due_dept` (`dept_id`, `department`, `department_id`, `staffincharge`, `password`) VALUES
(1, 'SOFTWARE LAB', 'SR-101', 'SUBHASH', 'Subhash@123'),
(4, 'P T A', 'SR-102', 'YOSAF MOULAVI', 'Moulavi@123'),
(5, 'CCF', 'SR-103', 'BAIJU', 'Baiju@123'),
(6, 'SEMINAR HALL', 'SR-103', 'BAIJU', 'Baiju@123'),
(7, 'COMMON FINE', 'KTU-F25435', 'ANJU SUKUMAR', 'Anju@123'),
(8, 'CENTRAL LIBRARY', 'SR-104', 'SATHEESH', 'Satheesh@123'),
(9, 'COOPERATIVE SOCIETY', 'SR-105', 'SHINY', 'Shiny@123'),
(10, 'HOSTEL', 'SR-106', 'NIDHIN', 'Nidhin@123'),
(11, 'MESS', 'SR-106', 'NIDHIN', 'Nidhin@123'),
(12, 'SERGEANT', 'SR-107', 'BIJU', 'Biju@123'),
(13, 'CGPC', 'KTU-F2782', 'DILEESH E D', 'Dileesh@123'),
(14, 'BUS', 'SR-108', 'ABHIJITH', 'Abhijith@123');

-- --------------------------------------------------------

--
-- Table structure for table `due_type`
--

CREATE TABLE `due_type` (
  `id` int(5) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `due_type`
--

INSERT INTO `due_type` (`id`, `type`) VALUES
(1, 'Software Lab'),
(2, 'PTA'),
(3, 'CCF'),
(4, 'Seminar Hall'),
(5, 'Central Library'),
(6, 'Corporate Society'),
(7, 'Hostel'),
(8, 'Mess'),
(9, 'Sergant'),
(10, 'CGPC'),
(11, 'Bus');

-- --------------------------------------------------------

--
-- Table structure for table `hod`
--

CREATE TABLE `hod` (
  `hod_id` int(10) NOT NULL,
  `department` varchar(100) NOT NULL,
  `hod_name` varchar(100) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hod`
--

INSERT INTO `hod` (`hod_id`, `department`, `hod_name`, `user_id`, `password`) VALUES
(1, 'CSE', 'Dr. MADHU K P', 'madhukp', 'madhu123'),
(2, 'IT', 'Dr. SANGEETHA JOSE', 'sangeetha', 'Sangeetha123'),
(4, 'EEE', 'Dr. CHANDRABOSE', 'chandrabose', 'chandra123'),
(5, 'ME', 'Dr. BINDHUKUMAR', 'bindhukumar', 'bindhu123'),
(6, 'ECE', 'Dr. HARIS P A', 'harispa', 'haris123');

-- --------------------------------------------------------

--
-- Table structure for table `semsubjects`
--

CREATE TABLE `semsubjects` (
  `stud_id` int(11) NOT NULL,
  `subb_id` int(20) NOT NULL,
  `sub1` varchar(20) NOT NULL,
  `sub2` varchar(20) NOT NULL,
  `sub3` varchar(20) NOT NULL,
  `sub4` varchar(20) NOT NULL,
  `sub5` varchar(20) NOT NULL,
  `sub6` varchar(20) NOT NULL,
  `sub7` varchar(20) NOT NULL,
  `sub8` varchar(20) NOT NULL,
  `sub9` varchar(20) NOT NULL,
  `sub10` varchar(20) NOT NULL,
  `sem` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semsubjects`
--

INSERT INTO `semsubjects` (`stud_id`, `subb_id`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `sub6`, `sub7`, `sub8`, `sub9`, `sub10`, `sem`) VALUES
(82, 6, '49', '50', '54', '55', '58', '59', '', '', '', '', 'S5'),
(82, 7, '49', '50', '51', '54', '55', '56', '', '', '', '', 'S5'),
(85, 8, '49', '54', '58', '', '', '', '', '', '', '', 'S5'),
(77, 9, '31', '32', '33', '34', '35', '38', '40', '41', '', '', 'S3');

-- --------------------------------------------------------

--
-- Table structure for table `sem_display_date`
--

CREATE TABLE `sem_display_date` (
  `id` int(11) NOT NULL,
  `date` varchar(50) NOT NULL,
  `end_date` varchar(40) NOT NULL,
  `staff_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sem_display_date`
--

INSERT INTO `sem_display_date` (`id`, `date`, `end_date`, `staff_id`) VALUES
(16, '2020-07-16', '2020-07-30', '8'),
(17, '2020-07-16', '2020-07-30', '8'),
(18, '2020-07-20', '2020-07-11', '8'),
(19, '2020-07-16', '2020-07-27', '8'),
(20, '2020-07-16', '2020-07-29', '17');

-- --------------------------------------------------------

--
-- Table structure for table `sem_reg`
--

CREATE TABLE `sem_reg` (
  `sem_reg_id` int(10) NOT NULL,
  `std_id` int(10) NOT NULL,
  `course_id` varchar(100) NOT NULL,
  `hod_status` varchar(10) NOT NULL DEFAULT '0',
  `status` varchar(10) NOT NULL DEFAULT 'pending',
  `advisor_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sem_reg`
--

INSERT INTO `sem_reg` (`sem_reg_id`, `std_id`, `course_id`, `hod_status`, `status`, `advisor_id`) VALUES
(10, 82, 'S5', '0', 'approved', 17),
(11, 85, 'S5', '0', 'approved', 17);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `s_id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `ktu_id` varchar(10) NOT NULL,
  `department` varchar(100) NOT NULL,
  `advisor` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`s_id`, `name`, `ktu_id`, `department`, `advisor`, `username`, `password`, `status`) VALUES
(8, 'SANKARANARAYANAN P.N', 'KTU-F39330', 'CSE', 'First Year', 'KTU-F39330', 'sankara@123', 0),
(9, 'PHILUMON JOSEPH', 'KTU-F437', 'CSE', 'Second Year', 'KTU-F437', 'philumon@123', 0),
(14, 'PILLAI PRAVEEN THULASIDHARAN', 'KTU-F27260', 'CSE', 'Third Year', 'KTU-F27260', 'pillai@123', 0),
(15, 'ANJU SUKUMAR', 'KTU-F25435', 'CSE', 'Forth Year', 'KTU-F25435', 'anju@123', 0),
(16, 'DEEPA S S', 'KTU-F15171', 'CSE', 'Forth Year', 'KTU-F15171', 'deepa@123', 0),
(17, 'DILEESH E D', 'KTU-F2782', 'CSE', 'Second Year', 'KTU-F2782', 'dileesh@123', 0),
(18, 'LIYA JOSEPH', 'KTU-F35965', 'CSE', 'First Year', 'KTU-F35965', 'liya@123', 0),
(19, 'JABIN MATHEW', 'KTU-F22331', 'CSE', 'Third Year', 'KTU-F22331', 'jabin@123', 0);

-- --------------------------------------------------------

--
-- Table structure for table `stdpersonal`
--

CREATE TABLE `stdpersonal` (
  `std2_id` int(10) NOT NULL,
  `std_id` int(10) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `fath_moth` varchar(100) NOT NULL,
  `occupationfath_moth` varchar(100) NOT NULL,
  `phnofath_moth` varchar(100) NOT NULL,
  `emailfath_moth` varchar(100) NOT NULL,
  `lgname` varchar(100) NOT NULL,
  `lgrelation` varchar(100) NOT NULL,
  `lgoccupation` varchar(100) NOT NULL,
  `lgphone` varchar(100) NOT NULL,
  `admission_no` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stdpersonal`
--

INSERT INTO `stdpersonal` (`std2_id`, `std_id`, `phone`, `address`, `email`, `category`, `fath_moth`, `occupationfath_moth`, `phnofath_moth`, `emailfath_moth`, `lgname`, `lgrelation`, `lgoccupation`, `lgphone`, `admission_no`) VALUES
(64, 77, '8767563456', 'akshsshs sbshshsh', 'akshaya@gmail.com', 'wrer', 'rweter', 'reyreyr', '9876543211', 'akshayarenjith2017@gmail.com', 'reryer', 'reyreyr', 'dgdfgdf', '9876543210', '7323'),
(65, 0, '', '', '', '', '', '', '', '', '', '', '', '', '7456'),
(66, 79, '123333', 'qwq', 'anoop@gmail.com', 'aaa', 'aaa', 'aaa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', '7425'),
(67, 0, '', '', '', '', '', '', '', '', '', '', '', '', '7509'),
(68, 0, '', '', '', '', '', '', '', '', '', '', '', '', '7943'),
(69, 82, '8767563456', 'akshsshs sbshshsh', 'akshaya@gmail.com', 'wrer', 'rweter', 'reyreyr', '9876543211', 'akshaya@gmail.com', 'reryer', 'reyreyr', 'dgdfgdf', '7593044784', '8252'),
(70, 0, '', '', '', '', '', '', '', '', '', '', '', '', '8365'),
(71, 0, '', '', '', '', '', '', '', '', '', '', '', '', '8907'),
(72, 85, '9876543210', 'akshsshs sbshshsh', 'akshaya@gmail.com', 'wrer', 'rweter', 'reyreyr', '9876543211', 'akshaya@gmail.com', 'reryer', 'reyreyr', 'dgdfgdf', '9876543210', '8001'),
(73, 0, '', '', '', '', '', '', '', '', '', '', '', '', '8765'),
(74, 0, '', '', '', '', '', '', '', '', '', '', '', '', '9621'),
(75, 0, '', '', '', '', '', '', '', '', '', '', '', '', '9567'),
(76, 0, '', '', '', '', '', '', '', '', '', '', '', '', '9167'),
(77, 0, '', '', '', '', '', '', '', '', '', '', '', '', '9992'),
(78, 0, '', '', '', '', '', '', '', '', '', '', '', '', '9965');

-- --------------------------------------------------------

--
-- Table structure for table `stdreg`
--

CREATE TABLE `stdreg` (
  `std_id` int(10) NOT NULL,
  `std_name` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `admission_no` varchar(100) NOT NULL,
  `Course` varchar(50) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `dateofjoining` date NOT NULL,
  `dateofleaving` date NOT NULL,
  `universityregno` varchar(100) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `std_credits` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `staff_id` int(10) NOT NULL,
  `aprove` int(5) NOT NULL DEFAULT 0,
  `due` varchar(50) NOT NULL,
  `due_amount` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stdreg`
--

INSERT INTO `stdreg` (`std_id`, `std_name`, `dob`, `admission_no`, `Course`, `branch`, `dateofjoining`, `dateofleaving`, `universityregno`, `semester`, `std_credits`, `password`, `staff_id`, `aprove`, `due`, `due_amount`) VALUES
(1, 'ABHINAV K S', '1998-08-05', ' 6328', 'B.Tech', 'CSE', '2016-08-03', '2020-07-31', 'IDK16CS001', 'S8', '', 'Abhinav@123', 15, 0, '', ''),
(2, 'ADHIL AHAMED A P', '1998-07-09', '6079', 'B.Tech', 'CSE', '2016-08-03', '2020-07-31', 'IDK16CS002', 'S8', '', 'Adhil@123', 15, 0, '', ''),
(3, 'ADHITHYE T S', '1998-04-23', '6323', 'B.Tech', 'CSE', '2016-08-03', '2020-07-31', 'IDK16CS003', 'S8', '', 'Adhithye@123', 15, 0, '', ''),
(4, 'AGHIL P', '1997-05-08', '6344', 'B.Tech', 'CSE', '2016-08-03', '2020-07-31', 'IDK16CS004', 'S8', '', 'Aghil@123', 15, 0, '', ''),
(5, 'AL FATHIMA', '1998-01-30', '6099', 'B.Tech', 'CSE', '2016-12-03', '2020-07-31', 'IDK16CS009', 'S8', '', 'Alfathima@123', 15, 0, '', ''),
(6, 'AMAL BABY', '1997-09-09', '6245', 'B.Tech', 'CSE', '2016-08-03', '2020-07-31', 'IDK16CS010', 'S8', '', 'Amalbaby@123', 15, 0, '', ''),
(7, 'AMMAR AMEER', '1998-04-17', '6248', 'B.Tech', 'CSE', '2016-08-03', '2020-07-31', 'IDK16CS011', 'S8', '', 'Ammar@123', 15, 0, '', ''),
(8, 'AMRUTHA C S', '1998-08-11', '6095', 'B.Tech', 'CSE', '2016-08-03', '2020-07-31', 'IDK16CS012', 'S8', '', 'Amrutha@123', 15, 0, '', ''),
(9, 'ANANDU REJI', '1998-07-12', '6306', 'B.Tech', 'CSE', '2016-08-03', '2020-07-31', 'IDK16CS013', 'S8', '', 'Anandu@123', 15, 0, '', ''),
(10, 'ANJANA K S', '1998-08-18', '6392', 'B.Tech', 'CSE', '2016-08-03', '2020-07-31', 'IDK16CS016', 'S8', '', 'Anjana@123', 15, 0, '', ''),
(11, 'ANUMOL T M', '1998-06-07', '6276', 'B.Tech', 'CSE', '2016-12-03', '2020-07-31', 'IDK16CS019', 'S8', '', 'Anumol@123', 15, 0, '', ''),
(12, 'ARYA UTHAMAN', '1998-09-23', '6280', 'B.Tech', 'CSE', '2016-08-03', '2020-07-31', 'IDK16CS022', 'S8', '', 'Arya@123', 15, 0, '', ''),
(13, 'ASWATHY K V', '1998-04-01', '6124', 'B.Tech', 'CSE', '2016-08-03', '2020-07-31', 'IDK16CS23', 'S8', '', 'Aswathy@123', 15, 0, '', ''),
(14, 'ATHUL ALBERT', '1998-08-11', '6174', 'B.Tech', 'CSE', '2016-08-03', '2020-07-31', 'IDK16CS024', 'S8', '', 'Athul@1223', 15, 0, '', ''),
(15, 'ATHULYA KRISHNAN', '1998-06-25', '6337', 'B.Tech', 'CSE', '2016-12-02', '2020-07-31', 'IDK16CS025', 'S8', '', 'Athulya@123', 15, 0, '', ''),
(16, 'DONA JOSEPH', '1998-08-27', '6507', 'B.Tech', 'CSE', '2016-08-03', '2020-07-31', 'IDK16CS027', 'S8', '', 'Dona@123', 15, 0, '', ''),
(17, 'HAMITHA T K', '1998-01-31', '6083', 'B.Tech', 'CSE', '2016-08-03', '2020-07-31', 'IDK16CS028', 'S8', '', 'Hamitha@123', 15, 0, '', ''),
(18, 'HARIPRRIYA A', '1998-04-26', '6192', 'B.Tech', 'CSE', '2016-08-03', '2020-07-31', 'IDK16CS029', 'S8', '', 'Hari@123', 15, 0, '', ''),
(19, 'JAMSHINA P A', '1997-07-18', '6420', 'B.Tech', 'CSE', '2016-08-03', '2020-07-31', 'IDK16CS030', 'S8', '', 'Jamshi@123', 15, 0, '', ''),
(20, 'JESNA THOMAS', '1998-06-09', '6351', 'B.Tech', 'CSE', '2016-08-03', '2020-07-31', 'IDK16CS031', 'S8', '', 'Jesna@123', 15, 0, '', ''),
(21, 'JESWIN RAJ', '1998-08-26', '6191', 'B.Tech', 'CSE', '2016-08-03', '2020-07-31', 'IDK16CS032', 'S8', '', 'Jeswin@123', 15, 0, '', ''),
(22, 'JOSEPH MILAN M D', '1998-05-05', '6180', 'B.Tech', 'CSE', '2016-08-03', '2020-07-31', 'IDK16CS033', 'S8', '', 'Milan@123', 15, 0, '', ''),
(23, 'JOSEYMOL SIBI', '1997-08-01', '6210', 'B.Tech', 'CSE', '2016-08-03', '2020-07-31', 'IDK16CS034', 'S8', '', 'Joset@123', 15, 0, '', ''),
(24, 'KANCHANA C S', '1998-02-02', '6204', 'B.Tech', 'CSE', '2016-08-03', '2020-07-31', 'IDK16CS035', 'S8', '', 'Kanchana@123', 15, 0, '', ''),
(25, 'KRISHNAPRIYA N', '1997-02-13', '6195', 'B.Tech', 'CSE', '2016-08-03', '2020-07-31', 'IDK16CS036', 'S8', '', 'Krishna@123', 15, 0, '', ''),
(26, 'LAKSHMI G KRISHNAN', '1997-12-20', '6391', 'B.Tech', 'CSE', '2016-08-03', '2020-07-31', 'IDK16CS037', 'S8', '', 'Lakshmi@123', 15, 0, '', ''),
(27, 'MEENAKSHI M', '1997-09-28', '6113', 'B.Tech', 'CSE', '2016-08-03', '2020-07-31', 'IDK16CS039', 'S8', '', 'Meenakshi@123', 15, 0, '', ''),
(28, 'MOHAMMED IRFAN K', '1997-07-06', '6358', 'B.Tech', 'CSE', '2016-08-03', '2020-07-31', 'IDK16CS040', 'S8', '', 'Irfan@123', 15, 0, '', ''),
(29, 'NANDU SHAJI', '1998-09-05', '6154', 'B.Tech', 'CSE', '2016-08-03', '2020-07-31', 'IDK16CS041', 'S8', '', 'Nnadu@123', 15, 0, '', ''),
(30, 'NIDHIN NANDAKUMAR', '1998-03-29', '6457', 'B.Tech', 'CSE', '2016-08-03', '2020-07-31', 'IDK16CS042', 'S8', '', 'Nidhin@123', 15, 0, '', ''),
(31, 'RAJALAKSHMI P K', '1998-06-30', '6371', 'B.Tech', 'CSE', '2016-08-03', '2020-07-31', 'IDK16CS044', 'S8', '', 'Rajalakshmi@123', 15, 0, '', ''),
(32, 'RAWOOF S', '1998-12-26', '6320', 'B.Tech', 'CSE', '2016-08-03', '2020-07-31', 'IDK16CS45', 'S8', '', 'Rawoof@123', 15, 0, '', ''),
(33, 'REMEEZA RASHEED', '1998-03-16', '6179', 'B.Tech', 'CSE', '2016-08-03', '2020-07-31', 'IDK16CS046', 'S8', '', 'Remi@123', 15, 0, '', ''),
(34, 'ROHITH K', '1998-09-17', '6267', 'B.Tech', 'CSE', '2016-08-03', '2020-07-31', 'IDK16CS048', 'S8', '', 'Rohith@123', 15, 0, '', ''),
(35, 'RONIYA JOHNSON', '1997-10-10', '6127', 'B.Tech', 'CSE', '2016-08-03', '2020-07-31', 'IDK16CS049', 'S8', '', 'Roniya@123', 15, 0, '', ''),
(36, 'SAJID MUHAMMED', '1998-02-20', '6460', 'B.Tech', 'CSE', '2016-08-03', '2020-07-31', 'IDK16CS050', 'S8', '', 'Sajid@123', 15, 0, '', ''),
(37, 'SANDRA D COUTH', '1998-04-04', '6141', 'B.Tech', 'CSE', '2016-08-03', '2020-07-31', 'IDK16CS051', 'S8', '', 'Sandra@123', 15, 0, '', ''),
(38, 'SANDRA P S', '1998-12-31', '6342', 'B.Tech', 'CSE', '2016-08-03', '2020-07-31', 'IDK16CS052', 'S8', '', 'Sandrap@123', 15, 0, '', ''),
(39, 'SINEESHA P', '1997-11-12', '6225', 'B.Tech', 'CSE', '2016-08-03', '2020-07-31', 'IDK16CS053', 'S8', '', 'Sinesha@123', 15, 0, '', ''),
(40, 'SNEHA ANNIE JOSEPH', '1998-10-18', '6170', 'B.Tech', 'CSE', '2016-08-03', '2020-07-31', 'IDK16CS054', 'S8', '', 'Snesha@123', 15, 0, '', ''),
(41, 'SONIA NEENU A J', '1998-02-19', '6176', 'B.Tech', 'CSE', '2016-08-03', '2020-07-31', 'IDK16CS055', 'S8', '', 'Sonia@123', 15, 0, '', ''),
(42, 'SWATHI SATHEESH', '1998-12-13', '6508', 'B.Tech', 'CSE', '2016-08-03', '2020-07-31', 'IDK16CS056', 'S8', '', 'Swathi@123', 15, 0, '', ''),
(43, 'SYAMKUMAR C L', '1998-07-21', '6495', 'B.Tech', 'CSE', '2016-08-03', '2020-07-31', 'IDK16CS058', 'S8', '', 'Syam@123', 15, 0, '', ''),
(44, 'VISHNU P V', '1997-04-15', '6467', 'B.Tech', 'CSE', '2016-08-03', '2020-07-31', 'IDK16CS061', 'S8', '', 'Vishnupv2123', 15, 0, '', ''),
(45, 'VISHNU RAVI', '1997-05-31', '6394', 'B.Tech', 'CSE', '2016-08-03', '2020-07-31', 'IDK16CS062', 'S8', '', 'Vishnu@123', 15, 0, '', ''),
(46, 'RAHUL MURALI', '1998-06-07', '6449', 'B.Tech', 'CSE', '2016-08-03', '2020-07-30', 'IDK16IT042', 'S8', '', 'Rahul@123', 15, 0, '', ''),
(47, 'AJESH E J', '1996-11-14', '6546', 'B.Tech', 'CSE', '2017-08-01', '2020-07-31', 'LIDK16CS063', 'S8', '', 'Ajesh@123', 15, 0, '', ''),
(48, 'ANJALI VIJAYAN', '1996-12-12', '6555', 'B.Tech', 'CSE', '2017-08-01', '2020-07-31', 'LIDK16CS064', 'S8', '', 'Anjali@123', 15, 0, '', ''),
(49, 'ANUSHA RAJ', '1996-12-23', '6994', 'B.Tech', 'CSE', '2017-08-01', '1996-07-31', 'LIDK16CS065', 'S8', '', 'Anusha2123', 15, 0, '', ''),
(50, 'JISHA RAJ', '1996-06-14', '6948', 'B.Tech', 'CSE', '2017-08-01', '2020-07-31', 'LIDK16CS066', 'S8', '', 'Jisha@123', 15, 0, '', ''),
(51, 'NEHA THADEUS', '1996-12-25', '6953', 'B.Tech', 'CSE', '2017-08-01', '2020-07-31', 'LIDK16CS067', 'S8', '', 'Neha@123', 15, 0, '', ''),
(77, 'APARNA K P', '2001-01-01', '7323', 'B.Tech', 'CSE', '2019-08-01', '2023-07-31', 'IDK19CS001', 'S3', '46', 'Aparna@123', 8, 0, '', ''),
(78, 'CHRISTY JOSEPH', '2001-02-02', '7456', 'B.Tech', 'CSE', '2019-08-01', '2023-07-31', 'IDK19CS002', 'S2', '', 'Christy@123', 8, 0, '', ''),
(79, 'DEVIKA K P', '2001-03-03', '7425', 'B.Tech', 'CSE', '2019-08-01', '2023-07-31', 'IDK19CS003', 'S2', '', 'Deviak@123', 8, 0, '', ''),
(80, 'NEVIN PAUL', '2001-04-14', '7509', 'B.Tech', 'CSE', '2019-08-01', '2023-07-31', 'IDK19CS004', 'S2', '', 'Nevin123', 8, 0, '', ''),
(81, 'SARATH K P', '2001-03-05', '7943', 'B.Tech', 'CSE', '2019-08-01', '2023-07-31', 'IDK19CS005', 'S2', '', 'Srarh@123', 8, 0, '', ''),
(82, 'AKASH KRISHNA', '2000-09-11', '8252', 'B.Tech', 'CSE', '2018-08-02', '2022-07-31', 'IDK18CS001', 'S5', '103', 'Akash@123', 17, 0, '', ''),
(83, 'CATHERINE MARIYA', '2000-12-22', '8365', 'B.Tech', 'CSE', '2018-08-02', '2022-07-31', 'IDK18CS002', 'S4', '', 'Cathrine123', 17, 0, '', ''),
(84, 'MANEESHA M', '2000-10-30', '8907', 'B.Tech', 'CSE', '2018-08-02', '2022-07-31', 'IDK18CS003', 'S4', '', 'Maneesh123', 17, 0, '', ''),
(85, 'PRAVEEN T K', '2000-08-04', '8001', 'B.Tech', 'CSE', '2018-08-02', '2022-07-31', 'IDK18CS004', 'S4', '96', 'Pravwen123', 17, 0, '', ''),
(86, 'RESHMA P R', '2000-07-05', '8765', 'B.Tech', 'CSE', '2018-08-02', '2022-07-31', 'IDK18CS005', 'S4', '', 'Reshma123', 17, 0, '', ''),
(87, 'ABHIRAMYA A A', '1997-01-01', '9621', 'B.Tech', 'CSE', '2017-08-01', '2021-07-31', 'IDK17CS001', 'S6', '', 'Abhi@123', 19, 0, '', ''),
(88, 'BIBIN K B', '1997-02-02', '9567', 'B.Tech', 'CSE', '2017-08-01', '2021-07-31', 'IDK17CS002', 'S6', '', 'Bibin@123', 19, 0, '', ''),
(89, 'FELIX JOHN', '1997-03-03', '9167', 'B.Tech', 'CSE', '2017-08-01', '2021-07-31', 'IDK17CS003', 'S6', '', 'Felix123', 19, 0, '', ''),
(90, 'NIKHIL K S', '1997-04-04', '9992', 'B.Tech', 'CSE', '2017-08-01', '2021-07-31', 'IDK17CS004', 'S6', '', 'Nikhil123', 19, 0, '', ''),
(91, 'ZAHARA FATHIMA', '1997-05-05', '9965', 'B.Tech', 'CSE', '2017-08-01', '2021-07-31', 'IDK17CS005', 'S6', '', 'Zahara123', 19, 0, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `credits`
--
ALTER TABLE `credits`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `std_id` (`std_id`);

--
-- Indexes for table `due_amount`
--
ALTER TABLE `due_amount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `due_dept`
--
ALTER TABLE `due_dept`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `due_type`
--
ALTER TABLE `due_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hod`
--
ALTER TABLE `hod`
  ADD PRIMARY KEY (`hod_id`);

--
-- Indexes for table `semsubjects`
--
ALTER TABLE `semsubjects`
  ADD PRIMARY KEY (`subb_id`);

--
-- Indexes for table `sem_display_date`
--
ALTER TABLE `sem_display_date`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sem_reg`
--
ALTER TABLE `sem_reg`
  ADD PRIMARY KEY (`sem_reg_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `stdpersonal`
--
ALTER TABLE `stdpersonal`
  ADD PRIMARY KEY (`std2_id`),
  ADD UNIQUE KEY `admission_no` (`admission_no`);

--
-- Indexes for table `stdreg`
--
ALTER TABLE `stdreg`
  ADD PRIMARY KEY (`std_id`),
  ADD UNIQUE KEY `admission_no` (`admission_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `credits`
--
ALTER TABLE `credits`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `due_amount`
--
ALTER TABLE `due_amount`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `due_dept`
--
ALTER TABLE `due_dept`
  MODIFY `dept_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `due_type`
--
ALTER TABLE `due_type`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `hod`
--
ALTER TABLE `hod`
  MODIFY `hod_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `semsubjects`
--
ALTER TABLE `semsubjects`
  MODIFY `subb_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sem_display_date`
--
ALTER TABLE `sem_display_date`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `sem_reg`
--
ALTER TABLE `sem_reg`
  MODIFY `sem_reg_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `s_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `stdpersonal`
--
ALTER TABLE `stdpersonal`
  MODIFY `std2_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `stdreg`
--
ALTER TABLE `stdreg`
  MODIFY `std_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
