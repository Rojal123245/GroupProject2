-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2018 at 05:30 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `woodland`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `announcement_id` int(10) NOT NULL,
  `title` varchar(30) NOT NULL,
  `descript` varchar(2000) NOT NULL,
  `staffId` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`announcement_id`, `title`, `descript`, `staffId`) VALUES
(1, 'holiday tomorrow', 'Strike', 4501),
(2, 'Deadline of AI assignment 2', '22-Apr-2018', 4501),
(3, 'Deadline of AI assignment 1', '05-Jan-2018', 4503),
(5, 'AI Dev Nepal', 'Coming on our university on 30-Apr-2018', 4503);

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `assignment_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `attendance_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `concernletter`
--

CREATE TABLE `concernletter` (
  `letter_id` int(10) NOT NULL,
  `reportDate` date NOT NULL,
  `cause` varchar(30) NOT NULL,
  `day` varchar(50) NOT NULL,
  `instruct` varchar(50) NOT NULL,
  `toStudent` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `concernletter`
--

INSERT INTO `concernletter` (`letter_id`, `reportDate`, `cause`, `day`, `instruct`, `toStudent`) VALUES
(1, '2018-04-02', 'classIssue', '2018-04-05', 'Ganesh Khatri', 'sunil.thapa16@my.northampton.ac.uk');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(10) NOT NULL,
  `courseName` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `courseName`, `degree`) VALUES
(3, 'Computer', 'Bsc.(Hons)');

-- --------------------------------------------------------

--
-- Table structure for table `diary`
--

CREATE TABLE `diary` (
  `diary_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `discussion`
--

CREATE TABLE `discussion` (
  `discussion_id` int(9) NOT NULL,
  `qs_student_id` int(9) NOT NULL,
  `question` varchar(2000) NOT NULL,
  `staff_id` int(9) DEFAULT NULL,
  `ans_student_id` int(9) NOT NULL,
  `ans` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discussion`
--

INSERT INTO `discussion` (`discussion_id`, `qs_student_id`, `question`, `staff_id`, `ans_student_id`, `ans`) VALUES
(1, 17421492, 'What is machine learning?', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `module`
--

CREATE TABLE `module` (
  `module_id` int(10) NOT NULL,
  `course_id` int(10) NOT NULL,
  `moduleName` varchar(255) NOT NULL,
  `level` int(5) NOT NULL,
  `pts` int(10) NOT NULL,
  `ass1` varchar(255) NOT NULL,
  `ass2` varchar(255) NOT NULL,
  `exam` varchar(255) NOT NULL,
  `moduleCode` varchar(255) NOT NULL,
  `tutor_id` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `module`
--

INSERT INTO `module` (`module_id`, `course_id`, `moduleName`, `level`, `pts`, `ass1`, `ass2`, `exam`, `moduleCode`, `tutor_id`) VALUES
(1, 3, 'Web Programming', 5, 20, 'Assessment', 'Assessment', '3', 'CSY2028', 4501),
(2, 3, 'Processing', 5, 20, 'TCA', 'Assessment', '2', 'CSY2045', 4502),
(3, 3, 'Artificial Intelligence', 5, 40, 'Assessment', 'Assessment', '2', 'CSY2054', 4503);

-- --------------------------------------------------------

--
-- Table structure for table `patmanagement`
--

CREATE TABLE `patmanagement` (
  `pat_id` int(10) NOT NULL,
  `staffId` int(10) NOT NULL,
  `Stid` int(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patmanagement`
--

INSERT INTO `patmanagement` (`pat_id`, `staffId`, `Stid`) VALUES
(2, 4501, 17421492),
(3, 4502, 17421493);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `report_id` int(10) NOT NULL,
  `reportDate` date NOT NULL,
  `cause` varchar(30) NOT NULL,
  `day` varchar(50) NOT NULL,
  `instruct` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staffId` int(9) NOT NULL,
  `staffFirstName` varchar(255) NOT NULL,
  `staffMiddleName` varchar(255) NOT NULL,
  `staffSurName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'Teacher',
  `specialistSubject` varchar(100) NOT NULL,
  `status` varchar(40) NOT NULL,
  `dormacyReason` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `pwd` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staffId`, `staffFirstName`, `staffMiddleName`, `staffSurName`, `email`, `address`, `phone`, `role`, `specialistSubject`, `status`, `dormacyReason`, `gender`, `pwd`) VALUES
(4501, 'Ganesh', 'Kumar', 'Khatri', 'ganesh_khatri02@outlook.com', 'Kathmandu', '981234454', 'admin', 'Web Programming', 'Married', 'Don\'t know', 'M', 'ganeshkhatri'),
(4502, 'Raj', 'Kumar', 'Phagami', 'raju@woodland.uni.co.uk', 'asdf', '6846516', 'Teacher', 'Java Programming', 'live', 'none', 'M', 'rajphagami'),
(4503, 'Sunil', '', 'Thapa', 'sunil.thapa@woodland.uni.co.uk', 'Silicon Valley', '9860740002', 'Teacher', 'Artificial Intelligence', 'live', 'none', 'M', 'sunilthapa'),
(4504, 'Surya', 'Pratap', 'Limbu', 'surya.pratap@woodland.ac.uk', 'Thali', '9840339562', 'Teacher', 'Software Engineering', 'live', 'none', 'M', 'suryalimbu'),
(4505, 'Rojal', 'Kumar', 'Prsdhan', 'rozalpra@gmail.com', 'imadol', '982348978', 'Teacher', 'Software Engineering', 'live', 'none', 'M', 'rojalprsdhan');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Stid` int(9) NOT NULL,
  `studentFirstName` varchar(255) NOT NULL,
  `studentMiddleName` varchar(255) NOT NULL,
  `studentSurName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `addressTermTime` varchar(255) NOT NULL,
  `addressNonTT` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `currentCoursCode` int(10) NOT NULL,
  `entryQualification` varchar(999) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `status` varchar(40) NOT NULL,
  `dormacyReason` varchar(30) NOT NULL,
  `pwd` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Stid`, `studentFirstName`, `studentMiddleName`, `studentSurName`, `email`, `addressTermTime`, `addressNonTT`, `phone`, `currentCoursCode`, `entryQualification`, `gender`, `status`, `dormacyReason`, `pwd`) VALUES
(17421492, 'Sunil', '', 'Thapa', 'sunil.thapa16@my.northampton.ac.uk', 'Nayabazar', 'apt2', '9860740002', 3, 'fgdg', 'M', 'zxc', 'qwe', 'sunilthapa'),
(17421493, 'John', 'Smith', 'David', 'john@example.com', 'adfasf', 'adfasdfg', '3243', 3, 'hhdf', 'M', 'qweqwe', 'zxczx', 'johndavid');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `timetable_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`announcement_id`),
  ADD KEY `staff_announcement_id` (`staffId`);

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`assignment_id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`attendance_id`);

--
-- Indexes for table `concernletter`
--
ALTER TABLE `concernletter`
  ADD PRIMARY KEY (`letter_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `course_id_2` (`course_id`);

--
-- Indexes for table `diary`
--
ALTER TABLE `diary`
  ADD PRIMARY KEY (`diary_id`);

--
-- Indexes for table `discussion`
--
ALTER TABLE `discussion`
  ADD PRIMARY KEY (`discussion_id`);

--
-- Indexes for table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`module_id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `tutor_id` (`tutor_id`);

--
-- Indexes for table `patmanagement`
--
ALTER TABLE `patmanagement`
  ADD PRIMARY KEY (`pat_id`),
  ADD KEY `staff_id` (`staffId`),
  ADD KEY `student_id` (`Stid`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staffId`),
  ADD UNIQUE KEY `staffId` (`staffId`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Stid`),
  ADD KEY `currentCoursCode` (`currentCoursCode`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`timetable_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `announcement_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `assignment_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `attendance_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `concernletter`
--
ALTER TABLE `concernletter`
  MODIFY `letter_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `diary`
--
ALTER TABLE `diary`
  MODIFY `diary_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `discussion`
--
ALTER TABLE `discussion`
  MODIFY `discussion_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `module`
--
ALTER TABLE `module`
  MODIFY `module_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `patmanagement`
--
ALTER TABLE `patmanagement`
  MODIFY `pat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `report_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staffId` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4506;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `Stid` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17421494;

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `timetable_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `announcement`
--
ALTER TABLE `announcement`
  ADD CONSTRAINT `staff_announcement_id` FOREIGN KEY (`staffId`) REFERENCES `staff` (`staffId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `module`
--
ALTER TABLE `module`
  ADD CONSTRAINT `course_module_id` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tutor_module_id` FOREIGN KEY (`tutor_id`) REFERENCES `staff` (`staffId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `patmanagement`
--
ALTER TABLE `patmanagement`
  ADD CONSTRAINT `staff_pat_id` FOREIGN KEY (`staffId`) REFERENCES `staff` (`staffId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_pat_id` FOREIGN KEY (`Stid`) REFERENCES `student` (`Stid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `course_student_id` FOREIGN KEY (`currentCoursCode`) REFERENCES `course` (`course_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
