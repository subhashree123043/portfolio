-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2021 at 07:16 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `personal_info`
--

CREATE TABLE `personal_info` (
  `user_id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mob` bigint NOT NULL,
  `git` varchar(100) NOT NULL,
  `linkedin` varchar(100) NOT NULL,
  `obj` text NOT NULL,
  `adrs` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `personal_info`
--

INSERT INTO `personal_info` (`user_id`, `name`, `email`, `mob`, `git`, `linkedin`, `obj`, `adrs`) VALUES
(3, 'Subhashree panda', 'subha123@gmail.com', 8673459878, 'subhagitio.com', 'subha123.com', 'A result-oriented professional willing to work as a software engineer in a globally reputed company. Offering excellence in communication skills with team spirit and expertise in computer tech languages like Java, C, C++, Python, HTML, PHP & XML.', '');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `pid` int NOT NULL,
  `pmail` varchar(255) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `pdesc` varchar(255) NOT NULL,
  `pimg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`pid`, `pmail`, `pname`, `pdesc`, `pimg`) VALUES
(8, 'subha123@gmail.com', 'food order', 'Online food ordering is a process of ordering food from a local restaurant or food cooperative through a web page', 'prj2.jpeg'),
(9, 'subha123@gmail.com', 'travel Agency', 'All information a client leaves on the website (their name, email, location, etc.) is carefully documented in a CRM system. ', 'prj1.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `qualification`
--

CREATE TABLE `qualification` (
  `qid` int NOT NULL,
  `email` varchar(50) NOT NULL,
  `highest_qual` varchar(255) NOT NULL,
  `hclg_name` varchar(255) NOT NULL,
  `hpassing_year` varchar(20) NOT NULL,
  `hmark` int NOT NULL,
  `grad` varchar(50) NOT NULL,
  `grad_clg` varchar(255) NOT NULL,
  `grad_passing_year` varchar(20) NOT NULL,
  `grad_mark` int NOT NULL,
  `xii_stream` varchar(255) NOT NULL,
  `xii_clg` varchar(255) NOT NULL,
  `xii_passing_year` varchar(20) NOT NULL,
  `xii_mark` int NOT NULL,
  `x_board` varchar(255) NOT NULL,
  `x_school` varchar(255) NOT NULL,
  `x_passing_year` varchar(20) NOT NULL,
  `x_mark` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `qualification`
--

INSERT INTO `qualification` (`qid`, `email`, `highest_qual`, `hclg_name`, `hpassing_year`, `hmark`, `grad`, `grad_clg`, `grad_passing_year`, `grad_mark`, `xii_stream`, `xii_clg`, `xii_passing_year`, `xii_mark`, `x_board`, `x_school`, `x_passing_year`, `x_mark`) VALUES
(4, 'subha123@gmail.com', 'MCA', 'College of engineering', '2022', 95, 'B.Sc comp.sc..', 'B.J.B autonomous college', '2020', 78, 'Science', 'Gayatri womens college', '2017', 71, 'state board', 'Saraswati vidya mandira', '2015', 75);

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `skid` int NOT NULL,
  `email` varchar(50) NOT NULL,
  `skill` varchar(50) NOT NULL,
  `skillrate` int NOT NULL,
  `skil2` varchar(50) NOT NULL,
  `sklrt2` int NOT NULL,
  `skil3` varchar(50) NOT NULL,
  `sklrt3` int NOT NULL,
  `skil4` varchar(50) NOT NULL,
  `sklrt4` int NOT NULL,
  `skil5` varchar(50) NOT NULL,
  `sklrt5` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`skid`, `email`, `skill`, `skillrate`, `skil2`, `sklrt2`, `skil3`, `sklrt3`, `skil4`, `sklrt4`, `skil5`, `sklrt5`) VALUES
(5, 'subha123@gmail.com', 'Java', 60, 'css', 80, 'html', 90, 'mySQL', 40, 'javascript', 50);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `pass`) VALUES
(4, 'subha123@gmail.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `personal_info`
--
ALTER TABLE `personal_info`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `qualification`
--
ALTER TABLE `qualification`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`skid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `personal_info`
--
ALTER TABLE `personal_info`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `pid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `qualification`
--
ALTER TABLE `qualification`
  MODIFY `qid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `skid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
