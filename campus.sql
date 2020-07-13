-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2020 at 09:11 AM
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
(8, 'S6', 'ECE', 'cbnhjg', 'cvxbxvb', 'vbn', 4),
(9, 'S4', 'IT', 'MA202', 'PROBABILITY DISTRIBUTIONS,TRANSFORMS AND NUMERICAL METHODS', 'A', 4),
(11, 'S5', 'IT', 'IT301', 'SOFTWARE ARCHITECTURE AND DESIGN PATTERNS', 'A', 4),
(12, 'S5', 'IT', 'IT303', 'THEORY OF COMPUTATIONS', 'B', 3),
(13, 'S5', 'IT', 'CS305', 'MICROPROCESSORS AND MICROCONTROLLERS', 'C', 3);

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
  `eighth_sem` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `credits`
--

INSERT INTO `credits` (`id`, `std_id`, `first_sem`, `sec_sem`, `third_sem`, `forth_sem`, `fifth_sem`, `sixth_sem`, `seventh_sem`, `eighth_sem`) VALUES
(3, 17, 18, 16, 19, 15, 14, 15, 11, 10),
(5, 18, 16, 15, 14, 16, 12, 14, 0, 0);

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
(1, 'SOFTWARE LAB', 'SR-101', 'SUBHASH', 'Aqswde123'),
(4, 'P T A', 'SR-102', 'YOSAF MOULAVI', 'Qwerty123');

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
(1, 'CSE', 'Dr. MADHU K ', 'madhu1998', 'Qwerty123'),
(2, 'IT', 'Dr. SANGEETHA JOSE', 'sangeeth123', 'Sangeeth123'),
(4, 'EEE', 'Dr. CHANDRABOSE', 'chandra123', 'chandra123'),
(5, 'ME', 'Dr. BINDHUKUMAR', 'bindhu123', 'aqswde123'),
(6, 'ECE', 'Dr. HARIS P A', 'haris123', 'haris123');

-- --------------------------------------------------------

--
-- Table structure for table `sem_display_date`
--

CREATE TABLE `sem_display_date` (
  `id` int(11) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sem_display_date`
--

INSERT INTO `sem_display_date` (`id`, `date`) VALUES
(8, '2020-06-20'),
(9, '2020-06-26'),
(10, '2020-06-20'),
(11, '2020-06-20'),
(12, '2020-06-19');

-- --------------------------------------------------------

--
-- Table structure for table `sem_reg`
--

CREATE TABLE `sem_reg` (
  `sem_reg_id` int(10) NOT NULL,
  `std_id` int(10) NOT NULL,
  `course_id` int(10) NOT NULL,
  `hod_status` varchar(10) NOT NULL DEFAULT '0',
  `status` varchar(10) NOT NULL DEFAULT 'pending',
  `advisor_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sem_reg`
--

INSERT INTO `sem_reg` (`sem_reg_id`, `std_id`, `course_id`, `hod_status`, `status`, `advisor_id`) VALUES
(3, 17, 11, '0', '', 0),
(4, 17, 12, '0', '', 0),
(5, 17, 13, '0', '', 0),
(6, 17, 13, '0', '', 0),
(7, 17, 11, '0', '', 0),
(8, 17, 12, '0', '', 0),
(9, 17, 13, '0', '', 0),
(10, 17, 12, '0', '', 0),
(11, 17, 12, '0', '', 0),
(12, 17, 13, '0', '', 0),
(13, 17, 11, '0', '', 0),
(14, 17, 13, '0', 'pending', 0),
(15, 17, 13, 'pending', 'pending', 9),
(16, 17, 13, '0', 'pending', 9),
(17, 17, 12, '0', 'pending', 8),
(18, 17, 13, '0', 'pending', 8),
(19, 17, 12, '0', 'pending', 8),
(20, 17, 11, '0', 'pending', 9),
(21, 17, 12, '0', 'pending', 9),
(22, 17, 13, '0', 'pending', 9),
(23, 17, 11, '0', 'pending', 9),
(24, 17, 12, '0', 'pending', 9),
(25, 17, 13, '0', 'pending', 9),
(26, 17, 11, '0', 'pending', 9),
(27, 17, 12, '0', 'pending', 9),
(28, 17, 13, '0', 'pending', 9);

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
(8, 'SANKARANARAYANAN P.N', 'KTU-F39330', 'CSE', 'First Year', 'sankaranarayanan123', 'aqswde123', 0),
(9, 'PHILUMON JOSEPH', 'KTU-F437', 'CSE', 'Second Year', 'philumon123', 'aqswde123', 0),
(10, 'SUMAN JACOB', 'KTU-F15138', 'ECE', 'First Year', 'suman123', 'aqswde123', 0),
(11, 'ANESSH V A', 'KTU-F', 'EEE', 'First Year', 'anessh1980', 'anessh123', 0),
(12, 'AJINI A', 'KTU-F', 'IT', 'First Year', 'ajiniktu123', 'ajiniktu', 0),
(13, 'ARUN MATHEW', 'KTU-F', 'ME', 'Third Year', 'arunmathew', 'arun1980', 0);

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
(2, 17, '8212457896', 'Kakkanad Kochi', 'anjana1996@gmail.com', 'General', 'Prakash', 'bnmvnm', '9632587410', 'nbmvbmnvnm', 'Prakash S', 'vbnmvbbbbbbbbbbbbbbbbb', 'vnbmvnm', 'bnmbvnm', '6392'),
(3, 18, '9744269905', 'Peroorkada Trivandrum', 'rejith1998@gmail.com', 'General', 'Rajesh R nair', 'Business', '8150603212', 'rajesh152@gmail.com', 'Rajesh R nair', 'Father', 'Business', '8150603212', '131620'),
(4, 0, '', '', '', '', '', '', '', '', '', '', '', '', '6394');

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
(17, 'Anjana pk', '1997-11-20', '6392', 'B.Tech', 'IT', '2016-07-25', '2020-06-30', 'IDK16CS016', 'S4', '118', 'Qwerty123', 8, 1, '1', '30'),
(18, 'Rejith R Nair', '1998-08-20', '131620', 'B.Tech', 'EEE', '2019-07-20', '2023-05-18', '112034', 'S6', '100', 'Qwerty123', 11, 1, '', ''),
(19, 'VISHNU RAVI', '1997-05-31', '6394', 'B.Tech', 'CSE', '2016-07-25', '2020-06-30', 'IDK16CS062', 'S8', '87', 'Vishnu6394', 8, 0, '', '');

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
  MODIFY `course_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `credits`
--
ALTER TABLE `credits`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `due_dept`
--
ALTER TABLE `due_dept`
  MODIFY `dept_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
-- AUTO_INCREMENT for table `sem_display_date`
--
ALTER TABLE `sem_display_date`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sem_reg`
--
ALTER TABLE `sem_reg`
  MODIFY `sem_reg_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `s_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `stdpersonal`
--
ALTER TABLE `stdpersonal`
  MODIFY `std2_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `stdreg`
--
ALTER TABLE `stdreg`
  MODIFY `std_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
