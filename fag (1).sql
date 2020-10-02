-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2019 at 11:14 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fag`
--

-- --------------------------------------------------------

--
-- Table structure for table `apply_tbl`
--

CREATE TABLE `apply_tbl` (
  `apply_id` int(11) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `l_name` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `Crouse` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `award_tbl`
--

CREATE TABLE `award_tbl` (
  `a_id` int(11) NOT NULL,
  `Student_id` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `competition` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `class_tbl`
--

CREATE TABLE `class_tbl` (
  `class_id` int(11) NOT NULL,
  `teacher` varchar(100) NOT NULL,
  `batch_id` varchar(100) NOT NULL,
  `Student _id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comp_tbl`
--

CREATE TABLE `comp_tbl` (
  `comp_id` int(11) NOT NULL,
  `comp_name` varchar(100) NOT NULL,
  `end_date` date NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comp_tbl`
--

INSERT INTO `comp_tbl` (`comp_id`, `comp_name`, `end_date`, `photo`) VALUES
(1, 'Mind Art Competition ', '2019-10-16', ''),
(3, '', '0000-00-00', '2019-10-20');

-- --------------------------------------------------------

--
-- Table structure for table `crouse_tbl`
--

CREATE TABLE `crouse_tbl` (
  `c_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `degree` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crouse_tbl`
--

INSERT INTO `crouse_tbl` (`c_id`, `name`, `time`, `degree`) VALUES
(1, 'ACCP Prime', '2 Year', 'Diploma'),
(2, 'PSTC', '3 Year', 'Diploma'),
(3, 'sculpture', '3 Year', 'Bachelor'),
(4, 'painting', '3 Year', 'Diploma');

-- --------------------------------------------------------

--
-- Table structure for table `exam_tbl`
--

CREATE TABLE `exam_tbl` (
  `Std_id` int(11) NOT NULL,
  `sem` varchar(100) NOT NULL,
  `mark` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `exhibition_tbl`
--

CREATE TABLE `exhibition_tbl` (
  `e_id` int(11) NOT NULL,
  `tilte` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exhibition_tbl`
--

INSERT INTO `exhibition_tbl` (`e_id`, `tilte`, `date`, `location`) VALUES
(1, 'Artciti Art Gallery\r\n', '2019-10-30', 'Karahi'),
(2, 'Mind Art Gallary', '2019-10-14', 'Lahore');

-- --------------------------------------------------------

--
-- Table structure for table `mng_tbl`
--

CREATE TABLE `mng_tbl` (
  `manger_id` int(11) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `l_name` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mng_tbl`
--

INSERT INTO `mng_tbl` (`manger_id`, `f_name`, `l_name`, `mail`, `password`) VALUES
(2, 'ashan', 'Ghani', 'ashan@demo.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `stu_tbl`
--

CREATE TABLE `stu_tbl` (
  `stu_id` int(10) UNSIGNED NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `gender` char(10) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  `course` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `batch` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stu_tbl`
--

INSERT INTO `stu_tbl` (`stu_id`, `f_name`, `l_name`, `gender`, `dob`, `address`, `phone`, `email`, `course`, `photo`, `batch`) VALUES
(5, 'Qasim', 'Majeed', 'Female', '1995-05-15', 'karachi', '03222750160', 'qas@gmail.com', 'Painting', '', '10120'),
(6, 'Qasim', 'Majeed', 'Female', '1995-05-15', 'karachi', '03222750160', 'qas@gmail.com', 'Painting', 'ak.jpg', '10120'),
(7, 'Qasim', 'Majeed', 'Male', '1995-05-12', 'karachi', '03222750160', 'qas@gmail.com', 'Painting', 'ak.jpg', '10120');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `username`, `pass`, `mail`) VALUES
(1, 'admin', 'admin', 'admin@demo.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_batch`
--

CREATE TABLE `tbl_batch` (
  `batch_id` int(11) NOT NULL,
  `batch_teacher` int(11) NOT NULL,
  `batch_s_date` date NOT NULL,
  `batch_e_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_batch`
--

INSERT INTO `tbl_batch` (`batch_id`, `batch_teacher`, `batch_s_date`, `batch_e_date`) VALUES
(10120, 1, '2019-10-01', '2019-12-31');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dep`
--

CREATE TABLE `tbl_dep` (
  `d_id` int(11) NOT NULL,
  `d_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dep`
--

INSERT INTO `tbl_dep` (`d_id`, `d_name`) VALUES
(1, 'Teacher'),
(2, 'Manager');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faculty`
--

CREATE TABLE `tbl_faculty` (
  `e_id` int(11) NOT NULL,
  `e_name` varchar(100) NOT NULL,
  `e_address` varchar(100) NOT NULL,
  `d_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_faculty`
--

INSERT INTO `tbl_faculty` (`e_id`, `e_name`, `e_address`, `d_id`) VALUES
(1, 'QASIM', 'qasimmajeed@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_tbl`
--

CREATE TABLE `teacher_tbl` (
  `teacher_id` int(10) UNSIGNED NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `l_name` varchar(100) NOT NULL,
  `gender` varchar(60) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `degree` varchar(50) NOT NULL,
  `salary` varchar(100) NOT NULL,
  `married` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `NIC` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apply_tbl`
--
ALTER TABLE `apply_tbl`
  ADD PRIMARY KEY (`apply_id`);

--
-- Indexes for table `award_tbl`
--
ALTER TABLE `award_tbl`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `class_tbl`
--
ALTER TABLE `class_tbl`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `comp_tbl`
--
ALTER TABLE `comp_tbl`
  ADD PRIMARY KEY (`comp_id`);

--
-- Indexes for table `crouse_tbl`
--
ALTER TABLE `crouse_tbl`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `exam_tbl`
--
ALTER TABLE `exam_tbl`
  ADD PRIMARY KEY (`Std_id`);

--
-- Indexes for table `exhibition_tbl`
--
ALTER TABLE `exhibition_tbl`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `mng_tbl`
--
ALTER TABLE `mng_tbl`
  ADD PRIMARY KEY (`manger_id`);

--
-- Indexes for table `stu_tbl`
--
ALTER TABLE `stu_tbl`
  ADD PRIMARY KEY (`stu_id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_batch`
--
ALTER TABLE `tbl_batch`
  ADD PRIMARY KEY (`batch_id`),
  ADD KEY `batch_teacher` (`batch_teacher`);

--
-- Indexes for table `tbl_dep`
--
ALTER TABLE `tbl_dep`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `tbl_faculty`
--
ALTER TABLE `tbl_faculty`
  ADD PRIMARY KEY (`e_id`),
  ADD KEY `d_id` (`d_id`);

--
-- Indexes for table `teacher_tbl`
--
ALTER TABLE `teacher_tbl`
  ADD PRIMARY KEY (`teacher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apply_tbl`
--
ALTER TABLE `apply_tbl`
  MODIFY `apply_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `award_tbl`
--
ALTER TABLE `award_tbl`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `class_tbl`
--
ALTER TABLE `class_tbl`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comp_tbl`
--
ALTER TABLE `comp_tbl`
  MODIFY `comp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `crouse_tbl`
--
ALTER TABLE `crouse_tbl`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `exam_tbl`
--
ALTER TABLE `exam_tbl`
  MODIFY `Std_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exhibition_tbl`
--
ALTER TABLE `exhibition_tbl`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mng_tbl`
--
ALTER TABLE `mng_tbl`
  MODIFY `manger_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stu_tbl`
--
ALTER TABLE `stu_tbl`
  MODIFY `stu_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_batch`
--
ALTER TABLE `tbl_batch`
  MODIFY `batch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10121;

--
-- AUTO_INCREMENT for table `tbl_dep`
--
ALTER TABLE `tbl_dep`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_faculty`
--
ALTER TABLE `tbl_faculty`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teacher_tbl`
--
ALTER TABLE `teacher_tbl`
  MODIFY `teacher_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_batch`
--
ALTER TABLE `tbl_batch`
  ADD CONSTRAINT `tbl_batch_ibfk_1` FOREIGN KEY (`batch_teacher`) REFERENCES `tbl_faculty` (`e_id`);

--
-- Constraints for table `tbl_faculty`
--
ALTER TABLE `tbl_faculty`
  ADD CONSTRAINT `tbl_faculty_ibfk_1` FOREIGN KEY (`d_id`) REFERENCES `tbl_dep` (`d_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
