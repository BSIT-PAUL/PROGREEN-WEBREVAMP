-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 17, 2023 at 05:19 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `progreen`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `updationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '2023-10-29 23:01:20');

-- --------------------------------------------------------

--
-- Table structure for table `admin_basic_info`
--

CREATE TABLE `admin_basic_info` (
  `id` int(11) NOT NULL,
  `preferredName` varchar(50) DEFAULT NULL,
  `adminID` int(11) DEFAULT NULL,
  `nationality` varchar(50) DEFAULT NULL,
  `dateOfBirth` date DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `bloodgroup` varchar(50) DEFAULT NULL,
  `phoneNumber` varchar(50) DEFAULT NULL,
  `secondaryNumber` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_basic_info`
--

INSERT INTO `admin_basic_info` (`id`, `preferredName`, `adminID`, `nationality`, `dateOfBirth`, `gender`, `bloodgroup`, `phoneNumber`, `secondaryNumber`) VALUES
(1, 'Adonis', 1, 'Filipino', '2023-11-16', 'Male', 'A+', '09817462412', '09176165926');

-- --------------------------------------------------------

--
-- Table structure for table `attendance_records`
--

CREATE TABLE `attendance_records` (
  `record_id` int(11) NOT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `check_in_time` datetime DEFAULT NULL,
  `check_out_time` datetime DEFAULT NULL,
  `attendance_status` enum('Not Checked In','Present','Absent') DEFAULT 'Not Checked In'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance_records`
--

INSERT INTO `attendance_records` (`record_id`, `employee_id`, `check_in_time`, `check_out_time`, `attendance_status`) VALUES
(1, 7, '2023-11-13 13:46:26', '2023-11-13 13:46:34', 'Present'),
(2, 8, '2023-11-16 09:41:24', NULL, 'Present'),
(3, 8, '2023-11-16 09:41:34', NULL, 'Present');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `companyID` int(11) NOT NULL,
  `deptID` int(11) DEFAULT NULL,
  `companyNum` int(11) DEFAULT NULL,
  `incDate` date DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `postalCode` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `deptID` int(11) NOT NULL,
  `deptName` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`deptID`, `deptName`) VALUES
(1, 'Engineering'),
(2, 'Production'),
(3, 'Warehouse'),
(4, 'LCS'),
(5, 'GHQ'),
(6, 'GSS');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employeeID` int(11) NOT NULL,
  `firstName` varchar(50) DEFAULT NULL,
  `lastName` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `departmentID` int(11) DEFAULT NULL,
  `jobID` int(11) DEFAULT NULL,
  `startDate` date DEFAULT NULL,
  `employmentType` varchar(50) DEFAULT NULL,
  `salary` decimal(10,2) DEFAULT NULL,
  `salaryFrequency` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employeeID`, `firstName`, `lastName`, `email`, `username`, `password`, `departmentID`, `jobID`, `startDate`, `employmentType`, `salary`, `salaryFrequency`) VALUES
(7, 'John Paul', 'Bayoneto', 'bayonetojohnpaul@gmail.com', 'bayoneto', '202cb962ac59075b964b07152d234b70', 1, 1, '2023-11-02', 'Regular', 10000.00, 'Annualy'),
(8, 'Arvin Jade', 'Villaluna', 'arvin.villaluna@yahoo.com.ph', 'Nightwalker5373', '7215bceb852a1d0fea095bf8f0471f88', 3, 4, '2023-11-16', 'Casual', 6999.00, 'Monthly');

-- --------------------------------------------------------

--
-- Table structure for table `employee_basic_info`
--

CREATE TABLE `employee_basic_info` (
  `id` int(11) NOT NULL,
  `preferredName` varchar(50) DEFAULT NULL,
  `employeeID` int(11) DEFAULT NULL,
  `nationality` varchar(50) DEFAULT NULL,
  `dateOfBirth` date DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `bloodgroup` varchar(50) DEFAULT NULL,
  `phoneNumber` varchar(50) DEFAULT NULL,
  `secondaryNumber` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_basic_info`
--

INSERT INTO `employee_basic_info` (`id`, `preferredName`, `employeeID`, `nationality`, `dateOfBirth`, `gender`, `bloodgroup`, `phoneNumber`, `secondaryNumber`) VALUES
(1, 'XeroXCopY', 8, 'Filipino', '2002-11-10', 'Male', 'AB+', '09534216078', '09677402662');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `jobID` int(11) NOT NULL,
  `jobTitle` varchar(100) DEFAULT NULL,
  `departmentID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`jobID`, `jobTitle`, `departmentID`) VALUES
(1, 'Engineering Manager', 1),
(2, 'Agricultural Engineer', 1),
(3, 'Aircon Technician', 1),
(4, 'Maintenance Supervisor', 1),
(5, 'Production Manager', 2),
(6, 'Agricultural Production Specialist', 2),
(7, 'Operations Coordinator', 2);

-- --------------------------------------------------------

--
-- Table structure for table `leave_application`
--

CREATE TABLE `leave_application` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `leave_type` varchar(50) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `additional_reasons` text DEFAULT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `leave_application`
--

INSERT INTO `leave_application` (`id`, `employee_id`, `leave_type`, `start_date`, `end_date`, `additional_reasons`, `Status`) VALUES
(8, 7, 'Sick Leave', '2023-11-12', '2023-11-13', '', 'Approved'),
(9, 7, 'Personal/Unpaid Leave', '2023-11-13', '2023-11-14', 'none', 'Reject'),
(10, 7, 'Sick Leave', '2023-11-14', '2023-11-14', '', 'Pending'),
(11, 8, 'Personal/Unpaid Leave', '2023-11-17', '2023-11-22', 'Natatae ako', 'Approved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_basic_info`
--
ALTER TABLE `admin_basic_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_info` (`adminID`);

--
-- Indexes for table `attendance_records`
--
ALTER TABLE `attendance_records`
  ADD PRIMARY KEY (`record_id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`companyID`),
  ADD KEY `deptID` (`deptID`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`deptID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employeeID`),
  ADD KEY `departmentID` (`departmentID`),
  ADD KEY `jobID` (`jobID`);

--
-- Indexes for table `employee_basic_info`
--
ALTER TABLE `employee_basic_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`jobID`),
  ADD KEY `departmentID` (`departmentID`);

--
-- Indexes for table `leave_application`
--
ALTER TABLE `leave_application`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_basic_info`
--
ALTER TABLE `admin_basic_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `attendance_records`
--
ALTER TABLE `attendance_records`
  MODIFY `record_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `companyID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `deptID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employeeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `employee_basic_info`
--
ALTER TABLE `employee_basic_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `jobID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `leave_application`
--
ALTER TABLE `leave_application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_basic_info`
--
ALTER TABLE `admin_basic_info`
  ADD CONSTRAINT `admin_info` FOREIGN KEY (`adminID`) REFERENCES `admin` (`id`);

--
-- Constraints for table `attendance_records`
--
ALTER TABLE `attendance_records`
  ADD CONSTRAINT `attendance_records_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`employeeID`);

--
-- Constraints for table `company`
--
ALTER TABLE `company`
  ADD CONSTRAINT `company_ibfk_1` FOREIGN KEY (`deptID`) REFERENCES `department` (`deptID`);

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`departmentID`) REFERENCES `department` (`deptID`),
  ADD CONSTRAINT `employee_ibfk_2` FOREIGN KEY (`jobID`) REFERENCES `job` (`jobID`);

--
-- Constraints for table `job`
--
ALTER TABLE `job`
  ADD CONSTRAINT `job_ibfk_1` FOREIGN KEY (`departmentID`) REFERENCES `department` (`deptID`);

--
-- Constraints for table `leave_application`
--
ALTER TABLE `leave_application`
  ADD CONSTRAINT `leave_application_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`employeeID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
