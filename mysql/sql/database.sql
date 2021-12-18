-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2021 at 10:22 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `companymanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `briefemployeeinfo`
--

CREATE TABLE `briefemployeeinfo` (
  `EmpID` int(11) NOT NULL,
  `FullName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `UserName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Department` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Role` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `briefemployeeinfo`
--

INSERT INTO `briefemployeeinfo` (`EmpID`, `FullName`, `UserName`, `Password`, `Department`, `Role`) VALUES
(4, 'Nguyen Chief B', 'nguyenchiefb', 'nguyenchiefb', 'Dep B', 'Chief'),
(5, 'Test Ham Add', 'testhamadd', 'testhamadd', 'Dep A', 'Employee'),
(6, 'Test Ham Add', 'testhamadd', '$2y$10$ju8QfTtws/uQ32.uCZkj9.lDE8Qzc1A7jzqkslgxaLgPcHMAsaZEO', 'Dep A', 'Employee'),
(7, 'Test Ham Add 1 lan nua', 'testhamadd', 'testhamadd', 'Dep A', 'Employee'),
(8, 'Test API add\n', 'testapiadd', 'testapiadd', 'Dep B', 'Employee'),
(9, 'Test Ham Add 1 lan nua', 'testhamadd', 'testhamadd', 'Dep A', 'Employee'),
(10, 'Test hashed pass\n', 'testhashpass', '$2y$10$eUulLu2UYOVyA4WfxX1KPuC92t1Xx9XlKZEAsifiDZuHD1SudhkV2', 'Dep B', 'Employee'),
(11, 'test main login', 'testmainlogin', '$2a$10$cEW.NUFWdJVWFiMvRSDDcOkxKj5n6F1XpFIbl/5eot8/w/meUljr6', 'Dep B', 'Employee'),
(12, 'Test Ham Add 1 lan nua', 'testhamadd', '$2y$10$NzTdbS9aE4tAfgOQcSKPXOnfjGd4EZAuMTnh1YXOCikRhDIgZVQEG', 'Dep A', 'Employee'),
(13, 'test redirect', 'testredirect', '$2y$10$tTfVTgEUZSchAdL9P8vg7eWB5Hy95lwrhxjrPtn98.SYsYzAU4MTO', 'Dep A', 'Employee'),
(14, 'Nguyen Van C', 'nguyenvanc', '$2y$10$uBDZbpIDkoaOSCmJqKfVlOkegDIBgT/Ku1r41dnv4ahgorVwz9qru', 'Dep C', 'Employee');

-- --------------------------------------------------------

--
-- Table structure for table `employeeinfo`
--

CREATE TABLE `employeeinfo` (
  `EmpID` int(11) NOT NULL,
  `UserName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FullName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Department` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DateJoined` date DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `Gender` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Role` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DateBirth` date DEFAULT NULL,
  `ImgDir` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `employeeinfo`
--

INSERT INTO `employeeinfo` (`EmpID`, `UserName`, `Password`, `FullName`, `Email`, `Address`, `Department`, `DateJoined`, `Age`, `Gender`, `Phone`, `Role`, `DateBirth`, `ImgDir`) VALUES
(1, 'nguyenvana', '$2y$10$qL0O2QcWQ.tq4NckvuPS2u/SuC/SXyob1XWbouue67kph63Ie7g.6', 'Nguyen Van A', NULL, NULL, 'Dep A', NULL, NULL, NULL, NULL, 'Employee', NULL, NULL),
(2, 'nguyenchiefa', '$2y$10$eOmkC1YcE.TQUlTouOg5SOoz3UB8hEBaEYo3wd/bqDhrxh7o1f81m', 'Nguyen Chief A', NULL, NULL, 'Dep A', NULL, NULL, NULL, NULL, 'Chief', NULL, NULL),
(3, 'nguyenchiefb', '$2y$10$7HNYNCkWYLaYIYmo6MbT9eT.3iBAmpgRfBQr0aslUg75mJSoXC1Em', 'Nguyen Chief B', 'nguyenbchief@gmail.com', '12 Aloha Str.', 'Dep B', '2002-12-12', 20, 'Male', '09635267', 'Chief', '1989-12-03', 'uploads/dipu.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `fullemployeeinfo`
--

CREATE TABLE `fullemployeeinfo` (
  `OrdinalID` int(11) NOT NULL,
  `EmpID` int(11) DEFAULT NULL,
  `FullName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Department` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DateJoined` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `Gender` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Role` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DateBirth` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ImgDir` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `fullemployeeinfo`
--

INSERT INTO `fullemployeeinfo` (`OrdinalID`, `EmpID`, `FullName`, `Email`, `Address`, `Department`, `DateJoined`, `Age`, `Gender`, `Phone`, `Role`, `DateBirth`, `ImgDir`) VALUES
(1, NULL, 'ádfvgbnhmjascdvfb', 'sxcdvhnbmXzscdvbnm', 'zXCdvbhnmszcxdvbn', 'aZSxdcfvbnszcxdvb nm', 'szxcdvbnscdvb n', NULL, 'sxzcdvbnscdvfbg hn', 'sczxdvbnhscdvfnb', 'dcvxbnmdsvfbgn', 'zxscdvbnscxzdvb n', 'asdfghcszdvxb nm'),
(3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `taskmanagement`
--

CREATE TABLE `taskmanagement` (
  `TaskID` int(11) NOT NULL,
  `TaskTitle` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TaskDesc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Deadline` datetime DEFAULT NULL,
  `Status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `AssignTo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CompleteLevel` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `briefemployeeinfo`
--
ALTER TABLE `briefemployeeinfo`
  ADD PRIMARY KEY (`EmpID`);

--
-- Indexes for table `employeeinfo`
--
ALTER TABLE `employeeinfo`
  ADD PRIMARY KEY (`EmpID`);

--
-- Indexes for table `fullemployeeinfo`
--
ALTER TABLE `fullemployeeinfo`
  ADD PRIMARY KEY (`OrdinalID`),
  ADD KEY `noact` (`EmpID`);

--
-- Indexes for table `taskmanagement`
--
ALTER TABLE `taskmanagement`
  ADD PRIMARY KEY (`TaskID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `briefemployeeinfo`
--
ALTER TABLE `briefemployeeinfo`
  MODIFY `EmpID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `employeeinfo`
--
ALTER TABLE `employeeinfo`
  MODIFY `EmpID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fullemployeeinfo`
--
ALTER TABLE `fullemployeeinfo`
  MODIFY `OrdinalID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `taskmanagement`
--
ALTER TABLE `taskmanagement`
  MODIFY `TaskID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fullemployeeinfo`
--
ALTER TABLE `fullemployeeinfo`
  ADD CONSTRAINT `EmpID_relate` FOREIGN KEY (`EmpID`) REFERENCES `briefemployeeinfo` (`EmpID`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `cascade` FOREIGN KEY (`EmpID`) REFERENCES `briefemployeeinfo` (`EmpID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `noact` FOREIGN KEY (`EmpID`) REFERENCES `briefemployeeinfo` (`EmpID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `res` FOREIGN KEY (`EmpID`) REFERENCES `briefemployeeinfo` (`EmpID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
