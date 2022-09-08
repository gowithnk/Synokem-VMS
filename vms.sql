-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2022 at 12:00 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vms`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(100) NOT NULL,
  `department_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `department_name`) VALUES
(2, 'IT'),
(7, 'MAIN OFFICE'),
(11, 'Technical Head'),
(13, 'Accounts & Finance'),
(14, 'P2P'),
(15, 'Market Research'),
(16, 'CQA'),
(17, 'MIS'),
(18, 'DRA Exports '),
(19, 'PPIC'),
(20, 'PPIC & Costing'),
(21, 'Institutional'),
(22, 'DRA Domestic'),
(23, 'Purchase'),
(24, 'Packaging'),
(25, 'HRD'),
(26, 'Admin'),
(27, 'Site'),
(28, 'Legal'),
(29, 'Ethical'),
(30, 'BOD ');

-- --------------------------------------------------------

--
-- Table structure for table `emp_table`
--

CREATE TABLE `emp_table` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `code` int(10) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `department_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_table`
--

INSERT INTO `emp_table` (`id`, `name`, `phone`, `gender`, `code`, `email_id`, `department_name`) VALUES
(1, 'Niranjan kumar', '7837813388', 'Male', 3177, 'apps@synokempharma.com', 'IT'),
(3, 'Sanjay khurana', '9818596495', 'Male', 3164, 'skhurana@synokempharma.com', 'BOD '),
(4, 'Yoginder kumar arora', '9810315491', 'Male', 22, 'technical.head@synokempharma.com', 'Technical Head'),
(5, 'Danbeer singh', '9818575190', 'Male', 1, 'danveersingh@synokempharma.com', 'Accounts & Finance'),
(6, 'Vinay kumar purwar', '9999225361', 'Male', 982, 'cs@synokempharma.com', 'Accounts & Finance'),
(7, 'Mukesh tapadar', '9999225782', 'Male', 187, 'mukesh@synokempharma.com', 'Accounts & Finance'),
(9, 'Sumit kumar sharma', '9999225730', 'Male', 184, 'sumit@synokempharma.com', 'Accounts & Finance'),
(10, 'Ramesh kumar rana', '9312833693', 'Male', 114, 'ramesh@synokempharma.com', 'Accounts & Finance'),
(11, 'Christy k. george', '9899655388', 'Female', 515, 'accounts2@synokempharma.com', 'Accounts & Finance'),
(12, 'Tarun kumar vedi', '9999225423', 'Male', 191, 'accounts1@synokempharma.com', 'Accounts & Finance'),
(13, 'Alisha sharma', '9350106876', 'Female', 790, 'accounts6@synokempharma.com', 'Accounts & Finance'),
(14, 'Manju bhatt', '8375809088', 'Female', 775, 'accounts5@synokempharma.com', 'Accounts & Finance'),
(15, 'Sumit kumar gupta', '9999255058', 'Male', 616, 'accounts3@synokempharma.com', 'Accounts & Finance'),
(16, 'Devender kumar', '7011744208', 'Male', 674, 'export.accounts@synokempharma.com', 'Accounts & Finance'),
(17, 'Vinod kumar ', '9999632274', 'Male', 686, 'accounts@synokempharma.com', 'Accounts & Finance'),
(18, 'Manjeet singh', '9313233626', 'Male', 80, 'manjeet@synokempharma.com', 'P2P'),
(19, 'Sanjay tiwari', '9711635117', 'Male', 1111, 'bd@synokempharma.com', 'P2P'),
(20, 'Baby thomas', '9899884109', 'Male', 478, 'thomas@synokempharma.com', 'P2P'),
(21, 'Vineet verma', '9899315272', 'Male', 1108, 'bdm@synokempharma.com', 'P2P'),
(22, 'Charu arya', '9711617119', 'Female', 1053, 'p2p@synokempharma.com', 'P2P'),
(23, 'Varnita sandip hanchate', '9319987794', 'Female', 1062, 'response@synokempharma.com', 'P2P'),
(24, 'Umesh kumar', '9899692492', 'Male', 710, 'support@synokempharma.com', 'P2P'),
(25, 'Rohit kumar', '9999307410', 'Male', 675, 'coordination@synokempharma.com', 'P2P'),
(26, 'Anjali sharma ', '9319987795', 'Female', 1063, 'execution@synokempharma.com', 'P2P'),
(27, 'Piyush khurana ', '9319987796', 'Male', 1059, 'assistance@synokempharma.com', 'P2P'),
(28, 'Chirag sharma', '9711711021', 'Male', 992, 'advice@synokempharma.com', 'P2P'),
(29, 'Dishant kumar', '8595956140', 'Male', 1080, 'process@synokempharma.com', 'P2P'),
(30, 'Konika thakur ', '8929055844', 'Female', 1061, 'action@synokempharma.com', 'P2P'),
(31, 'Veer chauhan', '9319987792', 'Male', 1135, 'veerchauhan4197@gmail.com', 'P2P'),
(32, 'Simran farmah', '9971036074', 'Female', 685, 'growth@synokempharma.com', 'P2P'),
(33, 'Jatin sharma ', '9999703841', 'Male', 1065, 'analysis@synokempharma.com', 'Market Research'),
(34, 'Samridhi madan', '8929055866', 'Female', 1112, 'analysis1@synokempharma.com', 'Market Research'),
(35, 'Ruhi dutta', '9999225278', 'Female', 1089, 'cqa@synokempharma.com', 'CQA'),
(36, 'Shubham vishwas', '9289087222', 'Male', 1146, 'Cqa1@synokempharma.com', 'CQA'),
(37, 'Tarun juneja', '9953960383', 'Male', 656, 'mis@synokempharma.com', 'MIS'),
(38, 'Neha bajaj', '9873259593', 'Female', 531, 'neha1@synokempharma.com', 'MIS'),
(39, 'Stuti singh', '9891603514', 'Female', 540, 'stuti@synokempharma.com', 'MIS'),
(40, 'Mohit tyagi', '9868067675', 'Male', 1113, 'orders1@synokempharma.com', 'MIS'),
(41, 'Dipanshu', '9711960457', 'Male', 1129, 'orders1@synokempharma.com', 'MIS'),
(42, 'Atul kumar', '9871518162', 'Male', 1134, 'atulchaudhary1008@gmail.com', 'MIS'),
(43, 'Pankaj patial', '9821110067', 'Male', 553, 'pankaj@synokempharma.com', 'DRA Exports '),
(44, 'Manmohan juyal', '9711711021', 'Male', 984, 'exports.bd@synokempharma.com', 'DRA Exports '),
(45, 'Manju rawat', '9810332556', 'Female', 339, 'manju@synokempharma.com', 'DRA Exports '),
(46, 'Tarun sharma', '9868958238', 'Male', 475, 't.dra@synokempharma.com', 'DRA Exports '),
(47, 'Sandeep kumar', '9896706631', 'Male', 1077, 'a.dra@synokempharma.com', 'DRA Exports '),
(48, 'Vikram saini', '9034180722', 'Male', 1092, 'dra2.exp@synokempharma.com', 'DRA Exports '),
(49, 'Balbeer singh', '8448625087', 'Male', 945, 'art.exp@synokempharma.com', 'DRA Exports '),
(50, 'Rahul kumar', '9999633757', 'Male', 0, 'assitant@synokempharma.com', 'DRA Exports '),
(51, 'Awinash jha', '9311302328', 'Male', 135, 'awinash@synokempharma.com', 'PPIC'),
(52, 'Hemant singh ', '9999163878', 'Male', 1060, 'ppic3@synokempharma.com', 'PPIC'),
(53, 'Ganesh singh rana', '9899884169', 'Male', 930, 'ppic@synokempharma.com', 'PPIC'),
(54, 'Mohit agarwal', '9650077858', 'Male', 812, 'costing@synokempharma.com', 'PPIC'),
(55, 'Jay prakash', '9899884276', 'Male', 1043, 'ppic1@synokempharma.com', 'PPIC'),
(56, 'Nayan gupta', '9999220536', 'Male', 1022, 'ppicho@synokempharma.com', 'PPIC'),
(57, 'Rahul saxena', '9711886254', 'Male', 1094, 'ppic2@synokempharma.com', 'PPIC'),
(58, 'Ashok kumar mahra', '9103592982', 'Male', 1106, 'ppic4@synokempharma.com', 'PPIC'),
(59, 'Vishal khera', '9915819420', 'Male', 1116, 'costing1@synokempharma.com', 'PPIC & Costing'),
(60, 'Yudhvir anand', '9810015713', 'Male', 0, 'inst@synokempharma.com', 'Institutional'),
(61, 'Neeraj tyagi', '9319091433', 'Male', 697, 'institutional@synokempharma.com', 'Institutional'),
(62, 'Reeti marwah', '9311302324', 'Female', 84, 'reetimarwah@synokempharma.com', 'Institutional'),
(63, 'Deepti panwar', '9899884157', 'Female', 480, 'deepti@synokempharma.com', 'Institutional'),
(64, 'Ghanshyam das', '8588846712', 'Male', 541, 'account.ins@synokempharma.com', 'Institutional'),
(65, 'Rajeev kaushik', '7290088480', 'Male', 927, 'tenders@synokempharma.com', 'Institutional'),
(66, 'Shashank chaturvedi', '9911495912', 'Male', 999, 'logistics.ins@synokempharma.com', 'Institutional'),
(67, 'Anshu rawat', '9999633890', 'Female', 1086, 'ins.sales@synokempharma.com', 'Institutional'),
(68, 'Surender kumar arora', '9999225948', 'Male', 1114, 'dra.domestic@synokempharma.com', 'DRA Domestic'),
(69, 'Prashant kumar', '9811882440', 'Male', 924, 'dra1@synokempharma.com', 'DRA Domestic'),
(70, 'Akshat mittal', '9711618117', 'Male', 1073, 'dra2@synokempharma.com', 'DRA Domestic'),
(71, 'Rakesh babbar', '9311302326', 'Male', 363, 'rakesh@synokempharma.com', 'Purchase'),
(72, 'Saurabh nikunj mahato', '9899519591', 'Male', 1101, 'api@synokempharma.com', 'Purchase'),
(73, 'Trisha gupta', '9711887909', 'Female', 631, 'purchase@synokempharma.com', 'Purchase'),
(74, 'Anil joshi', '9999249703', 'Male', 810, 'purchase1@synokempharma.com', 'Purchase'),
(75, 'Savi sindhwani', '9311302327', 'Female', 1087, 'purchase3@synokempharma.com', 'Purchase'),
(76, 'Chirag sachdeva', '9899884219', 'Male', 979, 'purchase2@synokempharma.com', 'Purchase'),
(77, 'Ram parsad panda', '8588846713', 'Male', 429, 'ramprasad@synokempharma.com', 'Packaging'),
(78, 'Sunil kumar', '9654326356', 'Male', 895, 'packaging@synokempharma.com', 'Packaging'),
(79, 'Rajesh  bhargava', '9999363608', 'Male', 1066, 'packaging1@synokempharma.com', 'Packaging'),
(80, 'Deepak sharma', '9999121963', 'Male', 560, 'deepak@synokempharma.com', 'Packaging'),
(81, 'Ravish jasrotia', '9817027481', 'Male', 952, 'packaging2@synokempharma.com', 'Packaging'),
(82, 'Rajni sawanny', '7838925431', 'Female', 0, 'ARTWORK@SYNOKEMPHARMA.COM', 'Packaging'),
(83, 'Ranjeet sharma', '9990467049', 'Male', 444, 'ranjeet@synokempharma.com', 'Packaging'),
(84, 'Abhinav shukla', '9997647278', 'Male', 1067, 'design@synokempharma.com', 'Packaging'),
(85, 'Preeti jain ', '9999703890', 'Female', 618, 'hr@synokempharma.com', 'HRD'),
(86, 'Preeti pareva', '7290088483', 'Female', 946, 'ea@synokempharma.com', 'HRD'),
(87, 'Surbhi arora', '9289084222', 'Female', 1131, 'hr1@synokempharma.com', 'HRD'),
(88, 'Isha lakhanpal', '9999703841', 'Female', 3100, 'info@synokempharma.com', 'Admin'),
(89, 'Kuldip singh', '9897085558', 'Male', 1088, 'apps@synokempharma.com', 'Site'),
(90, 'Ketan kumar', '9899456748', 'Male', 673, 'legal@synokempharma.com', 'Legal'),
(91, 'Munish', '9899883991', 'Male', 1143, 'legal1@synokem.com', 'Legal'),
(92, 'Sanjeev kumar', '9899884197', 'Male', 961, 'it@synokempharma.com', 'IT'),
(93, 'Rahul dhawan', '9718837705', 'Male', 542, 'ithelpdesk@synokempharma.com', 'IT'),
(94, 'Laxman singh', '9971272911', 'Male', 1021, 'ithelpdesk@synokempharma.com', 'IT'),
(95, 'Naveen sharma', '9999756797', 'Male', 3503, 'ithelpdesk@synokempharma.com', 'IT'),
(96, 'Ravi tandon ', '9319091434', 'Male', 670, 'synokembdm@gmail.com', 'Ethical'),
(97, 'Devender narayan srivastava', '7838729312', 'Male', 1121, 'gm.sm@synokempharma.com', 'Ethical'),
(98, 'Monica kumar ', '9811228255', 'Female', 1058, 'mm@synokempharma.com', 'Ethical'),
(99, 'Rajender prasad bansal ', '9311302329', 'Male', 269, 'adminethical@synokempharma.com', 'Ethical'),
(100, 'Jyoti singh', '9311302329', 'Female', 605, 'effsethical@synokempharma.com', 'Ethical'),
(101, 'Mohit singh bhandari', '9205238718', 'Male', 1153, 'executiveethical@synokempharma.com', 'Ethical'),
(102, 'Anchal sethi', '9999306480', 'Female', 650, 'coordinatorpmtethical@synokempharma.com', 'Ethical'),
(103, 'Kanchan sethi', '9312833606', 'Female', 37, 'admin@synokempharma.com', 'Admin'),
(104, 'Geetika chauhan', '8376863061', 'Female', 100, 'info@synokempharma.com', 'Admin'),
(105, 'Sagar roy', '8920275148', 'Male', 694, 'admin1@synokempharma.com', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `forgot`
--

CREATE TABLE `forgot` (
  `id` int(10) NOT NULL,
  `username` varchar(200) NOT NULL,
  `OTP` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forgot`
--

INSERT INTO `forgot` (`id`, `username`, `OTP`) VALUES
(1, 'sanjay123', 6485),
(3, 'niranjan', 7338);

-- --------------------------------------------------------

--
-- Table structure for table `inquery`
--

CREATE TABLE `inquery` (
  `Id` int(100) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `Image` varchar(55555) NOT NULL,
  `Department` varchar(100) NOT NULL,
  `Person_Meet` varchar(100) NOT NULL,
  `In_Time` varchar(5) NOT NULL,
  `Out_Time` varchar(5) NOT NULL,
  `qr_code` varchar(2500) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inquery`
--

INSERT INTO `inquery` (`Id`, `Name`, `Gender`, `Phone`, `Image`, `Department`, `Person_Meet`, `In_Time`, `Out_Time`, `qr_code`, `Date`) VALUES
(1, 'kjghjkjl', 'male', '5454545454', 'upload/630d96cdee4d1.jpeg', 'IT', 'Niranjan', '10:19', '02:59', 'https://chart.googleapis.com/chart?cht=qr&chs=120x120&chl=1710971221&choe=&chld=|>', '2022-08-30'),
(5, 'Niranjan', 'male', '3245645145', 'upload/6315e6d79f288.jpeg', 'IT', 'Niranjan kumar', '05:38', '05:42', 'https://chart.googleapis.com/chart?cht=qr&chs=120x120&chl=1873136436&choe=&chld=|>', '2022-09-05');

-- --------------------------------------------------------

--
-- Table structure for table `login_user`
--

CREATE TABLE `login_user` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `image` varchar(500) NOT NULL,
  `user` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_user`
--

INSERT INTO `login_user` (`id`, `username`, `name`, `gender`, `password`, `phone`, `image`, `user`) VALUES
(1, 'guard', 'Guard', 'male', '123456', '9876543210', '', 'guard'),
(2, 'niranjan', 'Niranjan ', 'male', '0123456', '7837813388', '', 'admin'),
(5, 'niru', 'Niranjan k', 'Male', 'nk12345', '7894561230', 'download.jpg', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_name`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `emp_table`
--
ALTER TABLE `emp_table`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_name` (`department_name`);

--
-- Indexes for table `forgot`
--
ALTER TABLE `forgot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquery`
--
ALTER TABLE `inquery`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `login_user`
--
ALTER TABLE `login_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `emp_table`
--
ALTER TABLE `emp_table`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `forgot`
--
ALTER TABLE `forgot`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `inquery`
--
ALTER TABLE `inquery`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login_user`
--
ALTER TABLE `login_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `emp_table`
--
ALTER TABLE `emp_table`
  ADD CONSTRAINT `emp_table_ibfk_1` FOREIGN KEY (`department_name`) REFERENCES `department` (`department_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
