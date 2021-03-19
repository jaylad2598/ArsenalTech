-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2021 at 01:37 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `city` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `first_name`, `last_name`, `city`) VALUES
(1, 'CUstomer1', 'CUstomer1', 'nvs'),
(2, 'CUstomer2', 'CUstomer2', 'sut'),
(3, 'gfgg', 'hghg', 'vapi');

-- --------------------------------------------------------

--
-- Table structure for table `demo1`
--

CREATE TABLE `demo1` (
  `demoid` int(4) NOT NULL,
  `demoname` varchar(20) DEFAULT NULL,
  `democity` varchar(10) DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `country` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `demo1`
--

INSERT INTO `demo1` (`demoid`, `demoname`, `democity`, `age`, `country`) VALUES
(1, 'jay', 'navsari', 23, 'ind'),
(2, 'jayneel', 'surat', 23, 'aus');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `empid` int(3) NOT NULL,
  `empname` varchar(20) DEFAULT NULL,
  `empemail` varchar(30) DEFAULT NULL,
  `salary` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`empid`, `empname`, `empemail`, `salary`) VALUES
(1, 'jay', 'jay123@gmail.com', '50000');

-- --------------------------------------------------------

--
-- Table structure for table `extra`
--

CREATE TABLE `extra` (
  `extid` int(4) NOT NULL,
  `extdate` date DEFAULT NULL,
  `extname` varchar(20) DEFAULT NULL,
  `extcity` varchar(10) DEFAULT NULL,
  `demoid` int(5) DEFAULT NULL,
  `stdid` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `extra`
--

INSERT INTO `extra` (`extid`, `extdate`, `extname`, `extcity`, `demoid`, `stdid`) VALUES
(1, '2021-02-02', 'harsh', 'vapi', 2, 1),
(2, '2021-01-31', 'aman', 'anand', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `customer_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`customer_id`, `order_id`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `userid` int(5) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(15) DEFAULT NULL,
  `useremail` varchar(30) DEFAULT NULL,
  `gender` varchar(7) DEFAULT NULL,
  `contact` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`userid`, `username`, `password`, `useremail`, `gender`, `contact`) VALUES
(1, 'Jay ', '12345', 'jaylad32@gmail.com', 'Male', '9106362351'),
(2, 'Aman', '123456', 'aman42@gmail.com', 'Male', '9874563210'),
(3, '105 OR 1=1', '1234', 'aman42@gmail.com', 'Male', '9630214599');

-- --------------------------------------------------------

--
-- Table structure for table `sample`
--

CREATE TABLE `sample` (
  `id` int(5) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `stdid` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sample`
--

INSERT INTO `sample` (`id`, `name`, `stdid`) VALUES
(1, 'abc', 2),
(2, 'pqr', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stdid` int(5) NOT NULL,
  `stdname` varchar(20) DEFAULT NULL,
  `passwd` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `city` varchar(15) DEFAULT NULL,
  `gender` varchar(8) DEFAULT NULL,
  `contact` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stdid`, `stdname`, `passwd`, `email`, `address`, `city`, `gender`, `contact`) VALUES
(1, 'jay', '12345', 'jaylad432@gmail.com', 'navsari', 'navsari', 'male', '9874563210'),
(2, 'jayneel', '12345', 'jayneel@gmail.com', 'navsari', 'navsari', 'male', '9876545632'),
(3, 'Aman', '12345', 'aman@gmail.com', 'navsari', 'navsari', 'male', '9874563210'),
(4, 'xyz', '12345', 'xyz@gmail.com', 'vapi', 'navsari', 'male', '9874563210'),
(5, 'pqr', '12345', 'pqr321@gmail.com', 'valsad', 'ahmedabad', 'female', '9123875467'),
(6, 'abc', '12345', 'abc67@gmail.com', 'vapi', 'Navsari', 'female', '9874563210'),
(7, 'harsh', '12345', 'harsh@gmail.com', 'xyz', 'mumbai', 'male', '9123875467');

-- --------------------------------------------------------

--
-- Table structure for table `studentdata`
--

CREATE TABLE `studentdata` (
  `stdname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentdata`
--

INSERT INTO `studentdata` (`stdname`, `email`, `address`, `city`) VALUES
('jay', 'jaylad432@gmail.com', 'navsari', 'navsari'),
('jayneel', 'jayneel@gmail.com', 'navsari', 'navsari'),
('Aman', 'aman@gmail.com', 'navsari', 'navsari'),
('xyz', 'xyz@gmail.com', 'vapi', 'navsari'),
('pqr', 'pqr321@gmail.com', 'valsad', 'ahmedabad'),
('abc', 'abc67@gmail.com', 'vapi', 'Navsari'),
('harsh', 'harsh@gmail.com', 'xyz', 'mumbai');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(5) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `city` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `name`, `city`) VALUES
(1, 'abc', 'Navsari'),
(2, 'pqr', 'ahmedabad'),
(3, 'xyz', 'surat'),
(4, 'qwe', 'vapi');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(3) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `useremail` varchar(30) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `useremail`, `mobile`) VALUES
(3, 'Jay', 'jaylad432@gmail.com', '9874563204'),
(4, 'parth', 'parth123@gmail.com', '9874563204'),
(5, 'aman', 'aman321@gmail.com', '9874563204'),
(6, NULL, NULL, NULL),
(7, 'Jay', 'jaylad432@gmail.com', '9874563204'),
(8, 'parth', 'parth123@gmail.com', '9874563204'),
(9, 'aman', 'aman321@gmail.com', '9874563204');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `demo1`
--
ALTER TABLE `demo1`
  ADD PRIMARY KEY (`demoid`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`empid`);

--
-- Indexes for table `extra`
--
ALTER TABLE `extra`
  ADD PRIMARY KEY (`extid`),
  ADD KEY `demoid` (`demoid`),
  ADD KEY `stdid` (`stdid`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `sample`
--
ALTER TABLE `sample`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stdid` (`stdid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stdid`),
  ADD UNIQUE KEY `stdname` (`stdname`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `demo1`
--
ALTER TABLE `demo1`
  MODIFY `demoid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `empid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `extra`
--
ALTER TABLE `extra`
  MODIFY `extid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `userid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sample`
--
ALTER TABLE `sample`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `stdid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `extra`
--
ALTER TABLE `extra`
  ADD CONSTRAINT `extra_ibfk_1` FOREIGN KEY (`demoid`) REFERENCES `demo1` (`demoid`),
  ADD CONSTRAINT `extra_ibfk_2` FOREIGN KEY (`stdid`) REFERENCES `student` (`stdid`);

--
-- Constraints for table `sample`
--
ALTER TABLE `sample`
  ADD CONSTRAINT `sample_ibfk_1` FOREIGN KEY (`stdid`) REFERENCES `student` (`stdid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
