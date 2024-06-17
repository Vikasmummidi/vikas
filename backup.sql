-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2021 at 07:34 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `practice_vs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `admin_id` int(11) NOT NULL,
  `admin_email_address` varchar(150) NOT NULL,
  `admin_password` varchar(150) NOT NULL,
  `admin_verfication_code` varchar(100) NOT NULL,
  `admin_type` enum('master','sub_master') NOT NULL,
  `admin_created_on` datetime NOT NULL,
  `email_verified` enum('no','yes') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`admin_id`, `admin_email_address`, `admin_password`, `admin_verfication_code`, `admin_type`, `admin_created_on`, `email_verified`) VALUES
(1, 'vikasmummidi@gmail.com', '$2y$10$nA0gvU2aICOQMppfQMGVyOfvA7quGL2TA0LXfD.rbajOR2zVHWQuy', 'f46ac8773d5ed939d81eeb691c51f7c9', 'sub_master', '2021-06-29 14:33:58', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Id` int(11) DEFAULT NULL,
  `Name` varchar(8) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `Salary` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Id`, `Name`, `Age`, `Salary`) VALUES
(1, 'Aryan', 51, 56000),
(2, 'Arohi', 21, 25000),
(3, 'Vineet', 24, 31000),
(4, 'Ajeet', 23, 32000),
(5, 'Ravi', 23, 42000);

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE `dept` (
  `DEPT NO` int(2) NOT NULL,
  `DNAME` varchar(12) NOT NULL,
  `LOC` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`DEPT NO`, `DNAME`, `LOC`) VALUES
(10, 'ACCOUNTING', 'NEWYORK'),
(20, 'RESEARCH', 'SALES'),
(30, 'SALES', 'CHICAGO'),
(40, 'OPERATIONS', 'BOSTON');

-- --------------------------------------------------------

--
-- Table structure for table `emp_table`
--

CREATE TABLE `emp_table` (
  `EMPNO` int(4) NOT NULL,
  `ENAME` varchar(6) NOT NULL,
  `JOB` varchar(10) NOT NULL,
  `MGR` int(4) DEFAULT NULL,
  `HIREDATE` date NOT NULL,
  `SAL` int(11) NOT NULL,
  `COMM` int(11) DEFAULT NULL,
  `DEPTNO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_table`
--

INSERT INTO `emp_table` (`EMPNO`, `ENAME`, `JOB`, `MGR`, `HIREDATE`, `SAL`, `COMM`, `DEPTNO`) VALUES
(7499, 'ALLEN', 'SALESMAN', 7698, '1981-02-20', 1600, 300, 30),
(7369, 'SMITH', 'CLERK', 7902, '1980-12-17', 800, NULL, 20),
(7521, 'WARD', 'SALESMAN', 7698, '1981-02-22', 1250, 500, 30),
(7566, 'JONES', 'MANAGER', 7839, '1981-04-02', 2975, NULL, 20),
(7654, 'MARTIN', 'SALESMAN', 7698, '1981-08-28', 1250, 1400, 30),
(7698, 'BLAKE', 'MANAGER', 7839, '1981-05-01', 2850, NULL, 30),
(7782, 'CLARK', 'MANAGER', 7839, '1981-06-09', 2450, NULL, 10),
(7788, 'SCOTT', 'ANALYST', 7566, '1987-04-19', 3000, NULL, 20),
(7839, 'KING', 'PRESIDENT', NULL, '1981-11-17', 5000, NULL, 10),
(7844, 'TURNER', 'SALESMAN', 7698, '1981-09-08', 1500, 0, 30),
(7876, 'ADAMS', 'CLERK', 7788, '1987-05-23', 1100, NULL, 20),
(7900, 'JAMES', 'CLERK', 7698, '1981-12-03', 950, NULL, 30),
(7902, 'FORD', 'ANALYST', 7566, '1981-12-03', 3000, NULL, 20),
(7934, 'MILLER', 'CLERK', 7782, '1982-01-23', 300, NULL, 10);

-- --------------------------------------------------------

--
-- Table structure for table `online_exam_table`
--

CREATE TABLE `online_exam_table` (
  `online_exam_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `online_exam_title` varchar(250) NOT NULL,
  `online_exam_datetime` datetime NOT NULL,
  `online_exam_duration` varchar(30) NOT NULL,
  `total_question` int(5) NOT NULL,
  `marks_per_right_answer` varchar(30) NOT NULL,
  `marks_per_wrong_answer` varchar(30) NOT NULL,
  `online_exam_created_on` datetime NOT NULL,
  `online_exam_status` enum('Pending','Created','Started','Completed') NOT NULL,
  `online_exam_code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `online_exam_table`
--

INSERT INTO `online_exam_table` (`online_exam_id`, `admin_id`, `online_exam_title`, `online_exam_datetime`, `online_exam_duration`, `total_question`, `marks_per_right_answer`, `marks_per_wrong_answer`, `online_exam_created_on`, `online_exam_status`, `online_exam_code`) VALUES
(1, 1, 'JEE_online', '2021-06-29 18:15:00', '60', 10, '1', '1', '2021-06-29 14:38:16', 'Pending', '178d52cb015d8b5391b68e9d31c60d19'),
(2, 1, 'JEE_online', '2021-06-30 18:30:00', '30', 10, '1', '1.25', '2021-06-29 14:39:44', 'Pending', '88db3d3942d06f9b237a9b3ce764f802'),
(3, 1, 'JEE_online', '2021-06-30 18:25:00', '30', 5, '1', '1.25', '2021-06-29 14:50:52', 'Pending', '30a6573a3fe6a5a2e9d7904e612d3ec2');

-- --------------------------------------------------------

--
-- Table structure for table `option_table`
--

CREATE TABLE `option_table` (
  `option_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `option_number` int(2) NOT NULL,
  `option_title` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `option_table`
--

INSERT INTO `option_table` (`option_id`, `question_id`, `option_number`, `option_title`) VALUES
(1, 1, 1, ''),
(2, 1, 2, ''),
(3, 1, 3, ''),
(4, 1, 4, ''),
(5, 4, 1, ''),
(6, 4, 2, ''),
(7, 4, 3, ''),
(8, 4, 4, ''),
(9, 2, 1, ''),
(10, 2, 2, ''),
(11, 2, 3, ''),
(12, 2, 4, ''),
(13, 12, 1, ''),
(14, 12, 2, ''),
(15, 12, 3, ''),
(16, 12, 4, ''),
(17, 3, 1, ''),
(18, 3, 2, ''),
(19, 3, 3, ''),
(20, 3, 4, ''),
(21, 20, 1, ''),
(22, 20, 2, ''),
(23, 20, 3, ''),
(24, 20, 4, '');

-- --------------------------------------------------------

--
-- Table structure for table `ordertable`
--

CREATE TABLE `ordertable` (
  `O_Id` int(11) DEFAULT NULL,
  `Date` varchar(10) DEFAULT NULL,
  `Customer_Id` int(11) DEFAULT NULL,
  `Amount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ordertable`
--

INSERT INTO `ordertable` (`O_Id`, `Date`, `Customer_Id`, `Amount`) VALUES
(1, '20-01-2012', 2, 3000),
(2, '12-02-2O12', 2, 2000),
(3, '22-03-2012', 3, 4000),
(4, '11-04-2012', 4, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `payment_table`
--

CREATE TABLE `payment_table` (
  `Payment_ID` int(11) DEFAULT NULL,
  `Date` varchar(10) DEFAULT NULL,
  `Staff_ID` int(11) DEFAULT NULL,
  `Amount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_table`
--

INSERT INTO `payment_table` (`Payment_ID`, `Date`, `Staff_ID`, `Amount`) VALUES
(101, '30-12-2009', 1, 3000),
(102, '22-02-2010', 3, 2500),
(103, '23-02-2010', 4, 3500);

-- --------------------------------------------------------

--
-- Table structure for table `question_table`
--

CREATE TABLE `question_table` (
  `question_id` int(11) NOT NULL,
  `online_exam_id` int(11) NOT NULL,
  `question_title` text NOT NULL,
  `answer_option` enum('1','2','3','4') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff_table`
--

CREATE TABLE `staff_table` (
  `ID` int(11) DEFAULT NULL,
  `Staff_Name` varchar(6) DEFAULT NULL,
  `Staff_Address` varchar(10) DEFAULT NULL,
  `Monthlypackage` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff_table`
--

INSERT INTO `staff_table` (`ID`, `Staff_Name`, `Staff_Address`, `Monthlypackage`) VALUES
(1, 'Aryan', 'Mumbai', 18000),
(2, 'Sushil', 'Delhi', 20000),
(3, 'Monty', 'Mohali', 22000),
(4, 'Amit', 'Allahabad', 12000);

-- --------------------------------------------------------

--
-- Table structure for table `student_registration`
--

CREATE TABLE `student_registration` (
  `sid` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `sname` varchar(20) NOT NULL,
  `qualification` varchar(10) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `phno` varchar(10) NOT NULL,
  `marks` int(3) DEFAULT NULL,
  `Role` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_registration`
--

INSERT INTO `student_registration` (`sid`, `pwd`, `sname`, `qualification`, `branch`, `phno`, `marks`, `Role`) VALUES
('11MH5A0411', '97048051', 'VIKAS', 'Btech', 'MECHANICAL', '9704805154', NULL, 0),
('123456', '97048051', 'JAGADEESH', 'Mtech', 'MECHANICAL', '9704805154', NULL, 0),
('16A35A0303', '16A35A0303', 'Rajesh', 'Btech', 'ECE', '9676749843', NULL, 2),
('16A35A0304', '16A35A0304', 'AJAY', 'Btech', 'MECHANICAL', '9405402512', NULL, 2),
('16A35A0305', '16A35A0305', 'Sandeep', 'Mtech', 'ECE', '9676749848', NULL, 2),
('16A35A0306', '16A35A0306', 'Sridar', 'Mtech', 'ECE', '9676749840', NULL, 2),
('16A35A0307', '16A35A0307', 'VIKAS', 'Btech', 'MECHANICAL', '9676749844', 3, 1),
('16A35A0308', '16A35A0308', 'SivaKumar', 'Mtech', 'Mechanical', '7731076041', NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_exam_enroll_table`
--

CREATE TABLE `user_exam_enroll_table` (
  `user_exam_enroll_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `attendance_status` enum('Absent','Present') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_exam_question_answer`
--

CREATE TABLE `user_exam_question_answer` (
  `user_exam_question_answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `user_answer_option` enum('0','1','2','3','4') NOT NULL,
  `marks` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `user_id` int(11) NOT NULL,
  `user_email_address` varchar(250) NOT NULL,
  `user_password` varchar(150) NOT NULL,
  `user_verfication_code` varchar(100) NOT NULL,
  `user_name` varchar(150) NOT NULL,
  `user_gender` enum('Male','Female') NOT NULL,
  `user_address` text NOT NULL,
  `user_mobile_no` varchar(30) NOT NULL,
  `user_image` varchar(150) NOT NULL,
  `user_created_on` datetime NOT NULL,
  `user_email_verified` enum('no','yes') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`user_id`, `user_email_address`, `user_password`, `user_verfication_code`, `user_name`, `user_gender`, `user_address`, `user_mobile_no`, `user_image`, `user_created_on`, `user_email_verified`) VALUES
(1, 'vikas@gmail.com', '$2y$10$.bTAUJgHx4KDEC0sYMrTRePChKVnSR5ND2zs2GceWxHDCRYG5WiyG', '18a9dfe61a2afc562cd0b093ab5ace92', 'Vikas', 'Male', '1-12-24', '9676749844', '60db107e90309.png', '2021-06-29 14:22:22', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `online_exam_table`
--
ALTER TABLE `online_exam_table`
  ADD PRIMARY KEY (`online_exam_id`);

--
-- Indexes for table `option_table`
--
ALTER TABLE `option_table`
  ADD PRIMARY KEY (`option_id`);

--
-- Indexes for table `question_table`
--
ALTER TABLE `question_table`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `student_registration`
--
ALTER TABLE `student_registration`
  ADD UNIQUE KEY `sid` (`sid`);

--
-- Indexes for table `user_exam_enroll_table`
--
ALTER TABLE `user_exam_enroll_table`
  ADD PRIMARY KEY (`user_exam_enroll_id`);

--
-- Indexes for table `user_exam_question_answer`
--
ALTER TABLE `user_exam_question_answer`
  ADD PRIMARY KEY (`user_exam_question_answer_id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `online_exam_table`
--
ALTER TABLE `online_exam_table`
  MODIFY `online_exam_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `option_table`
--
ALTER TABLE `option_table`
  MODIFY `option_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `question_table`
--
ALTER TABLE `question_table`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_exam_enroll_table`
--
ALTER TABLE `user_exam_enroll_table`
  MODIFY `user_exam_enroll_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_exam_question_answer`
--
ALTER TABLE `user_exam_question_answer`
  MODIFY `user_exam_question_answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
