-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2018 at 03:27 PM
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
  `assignment_id` int(10) NOT NULL,
  `filePath` varchar(2000) NOT NULL,
  `module_id` int(9) NOT NULL,
  `descrip` varchar(2000) NOT NULL,
  `link` varchar(3) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`assignment_id`, `filePath`, `module_id`, `descrip`, `link`) VALUES
(1, 'assignment/CSY2030_assignment_1718.docx', 1, 'Deadline is 22nd April 2018.', 'yes'),
(4, 'assignment/2340086.pdf', 1, 'Rubrics for assignment 1.', 'no'),
(7, 'assignment/csy1020Ass2DEMO.docx', 3, 'This is assessment description. Your deadline is 22nd Apr 2018.', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `attendance_id` int(10) NOT NULL,
  `student_id` int(9) NOT NULL,
  `module_id` int(9) NOT NULL,
  `week1` varchar(3) DEFAULT NULL,
  `week2` varchar(3) DEFAULT NULL,
  `week3` varchar(3) DEFAULT NULL,
  `week4` varchar(3) DEFAULT NULL,
  `week5` varchar(3) DEFAULT NULL,
  `week6` varchar(3) DEFAULT NULL,
  `week7` varchar(3) DEFAULT NULL,
  `week8` varchar(3) DEFAULT NULL,
  `week9` varchar(3) DEFAULT NULL,
  `week10` varchar(3) DEFAULT NULL,
  `week11` varchar(3) DEFAULT NULL,
  `week12` varchar(3) DEFAULT NULL,
  `totalDays` int(10) NOT NULL DEFAULT '60'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`attendance_id`, `student_id`, `module_id`, `week1`, `week2`, `week3`, `week4`, `week5`, `week6`, `week7`, `week8`, `week9`, `week10`, `week11`, `week12`, `totalDays`) VALUES
(23, 17421492, 1, '4', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 60),
(24, 17421493, 1, '3', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 60);

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
-- Table structure for table `discussion`
--

CREATE TABLE `discussion` (
  `discussion_id` int(9) NOT NULL,
  `qs_student_id` int(9) NOT NULL,
  `question` varchar(2000) NOT NULL,
  `staff_id` int(9) DEFAULT NULL,
  `ans_student_id` int(9) DEFAULT NULL,
  `ans` varchar(50000) NOT NULL,
  `dis_ans_id` int(9) DEFAULT NULL,
  `module_id` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discussion`
--

INSERT INTO `discussion` (`discussion_id`, `qs_student_id`, `question`, `staff_id`, `ans_student_id`, `ans`, `dis_ans_id`, `module_id`) VALUES
(1, 17421492, 'What is machine learning?', 0, 0, '', NULL, 2),
(2, 17421493, 'What is tuple?', NULL, 0, '', NULL, 2),
(5, 17421492, '', NULL, 17421493, 'Machine learning is an application of AI that learns itself. This eliminates hard-core coding.', 1, 2),
(7, 17421492, 'What is meant by canvas?', NULL, NULL, '', NULL, 3),
(17, 17421493, '', NULL, 17421492, 'Tuple is a set of data.', 2, 2),
(19, 17421492, '', 4503, NULL, 'Canvas is a frame.', 7, 3);

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
  `Stid` int(9) DEFAULT NULL,
  `tutorialSummary` varchar(200) NOT NULL,
  `meetingDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patmanagement`
--

INSERT INTO `patmanagement` (`pat_id`, `staffId`, `Stid`, `tutorialSummary`, `meetingDate`) VALUES
(1, 4501, 17421492, 'for kafef', '2018-04-02');

-- --------------------------------------------------------

--
-- Table structure for table `pdfdata`
--

CREATE TABLE `pdfdata` (
  `pdf_id` int(11) NOT NULL,
  `pdf_name` varchar(255) NOT NULL,
  `week` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pdfdata`
--

INSERT INTO `pdfdata` (`pdf_id`, `pdf_name`, `week`) VALUES
(1, '5ad34c0e135134.87085762CSY2006 C++ Lab Exercises Week 6.pdf', 'Week1'),
(2, '5ad34c2ebd4666.04485645CSY2006_C++_Week6.pdf', 'Week2'),
(3, '5ad34c45e1adb8.38139352CSY2006_C++_Week8.pdf', 'Week3'),
(4, '5ad34c5ccf1973.09887421CSY2006 C++ Lab Exercises Week 8.pdf', 'Week4'),
(5, '5ad34c8d707014.81013638CSY2006 Week 9 Lab Exercises.pdf', 'Week5'),
(6, '5ad34cee0b9296.38863544CSY2006_C++_Week9 v1(1).pdf', 'Week6'),
(7, '5ad34d041bd963.48425757CSY2006_C++_Week7.pdf', 'Week7'),
(8, '5ad34d16b689a8.71508541CSY2006 C++ Lab Exercises Week 7.pdf', 'Week8'),
(9, '5ad34d3f50b562.26122371CSY2006 C++ Lab Exercises Week 6.pdf', 'Week9'),
(10, '5ad34d4e79d8d1.10303912CSY2006_C++_Week6.pdf', 'Week10'),
(11, '5ad34d61cf0fd7.78034807CSY2006_C++_Week5.pdf', 'Week11'),
(12, '5ad34d6ee14484.65670137CSY2006 Week 5 Lab Exercises.pdf', 'Week12');

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
(4501, 'Ganesh', 'Kumar', 'Khatri', 'ganesh_khatri02@outlook.com', 'Kathmandu', '981233545', 'admin', 'Web Programming', 'Married', 'Don\'t know', 'M', 'ganeshkhatri'),
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
(17421493, 'John', 'Smith', 'David', 'john@example.com', 'adfasf', 'adfasdfg', '981234324', 3, 'hhdf', 'M', 'qweqwe', 'zxczx', 'johndavid');

-- --------------------------------------------------------

--
-- Table structure for table `submit`
--

CREATE TABLE `submit` (
  `submission_id` int(9) NOT NULL,
  `student_id` int(9) NOT NULL,
  `file_Path` varchar(2555) NOT NULL,
  `assignment_id` int(9) NOT NULL,
  `grade` varchar(20) NOT NULL,
  `staff_id` int(9) NOT NULL,
  `descrip` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `submit`
--

INSERT INTO `submit` (`submission_id`, `student_id`, `file_Path`, `assignment_id`, `grade`, `staff_id`, `descrip`) VALUES
(1, 17421492, 'submit/report.docx', 1, 'A', 4501, 'This is submission.'),
(3, 17421492, 'submit/report.docx', 7, 'A', 4503, 'This is report.');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `timetable_id` int(10) NOT NULL,
  `tutorId` int(9) NOT NULL,
  `moduleId` int(9) NOT NULL,
  `time` varchar(20) NOT NULL,
  `roomNo` int(5) NOT NULL,
  `day` varchar(20) NOT NULL,
  `level` int(5) NOT NULL,
  `lectureOrTutorial` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`timetable_id`, `tutorId`, `moduleId`, `time`, `roomNo`, `day`, `level`, `lectureOrTutorial`) VALUES
(1, 4501, 1, '8:10', 102, 'Sunday', 5, 'turorial');

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
  ADD PRIMARY KEY (`attendance_id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `module_id` (`module_id`);

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
-- Indexes for table `pdfdata`
--
ALTER TABLE `pdfdata`
  ADD PRIMARY KEY (`pdf_id`);

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
-- Indexes for table `submit`
--
ALTER TABLE `submit`
  ADD PRIMARY KEY (`submission_id`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`timetable_id`),
  ADD KEY `moduleId` (`moduleId`),
  ADD KEY `fk_s_timetable` (`tutorId`);

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
  MODIFY `assignment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `attendance_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

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
-- AUTO_INCREMENT for table `discussion`
--
ALTER TABLE `discussion`
  MODIFY `discussion_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `module`
--
ALTER TABLE `module`
  MODIFY `module_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `patmanagement`
--
ALTER TABLE `patmanagement`
  MODIFY `pat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pdfdata`
--
ALTER TABLE `pdfdata`
  MODIFY `pdf_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
-- AUTO_INCREMENT for table `submit`
--
ALTER TABLE `submit`
  MODIFY `submission_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `timetable_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `announcement`
--
ALTER TABLE `announcement`
  ADD CONSTRAINT `staff_announcement_id` FOREIGN KEY (`staffId`) REFERENCES `staff` (`staffId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `module_attendance` FOREIGN KEY (`module_id`) REFERENCES `module` (`module_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_attendance` FOREIGN KEY (`student_id`) REFERENCES `student` (`Stid`) ON DELETE CASCADE ON UPDATE CASCADE;

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

--
-- Constraints for table `timetable`
--
ALTER TABLE `timetable`
  ADD CONSTRAINT `fk_m_timetable` FOREIGN KEY (`moduleId`) REFERENCES `module` (`module_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_s_timetable` FOREIGN KEY (`tutorId`) REFERENCES `staff` (`staffId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
