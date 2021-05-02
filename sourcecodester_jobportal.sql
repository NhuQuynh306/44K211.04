-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 01, 2021 at 11:54 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `jfd`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `a_id` int(4) NOT NULL,
  `a_ee_id` int(4) NOT NULL,
  `a_j_id` varchar(30) NOT NULL,
  `a_er_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `cont_id` int(4) NOT NULL,
  `cont_fnm` varchar(30) NOT NULL,
  `cont_email` varchar(64) NOT NULL,
  `cont_query` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `ee_id` int(4) NOT NULL,
  `ee_email` varchar(64) NOT NULL,
  `ee_password` varchar(64) NOT NULL,
  `ee_fname` varchar(30) NOT NULL,
  `ee_lname` varchar(30) NOT NULL,
  `ee_day` varchar(10) NOT NULL,
  `ee_month` varchar(10) NOT NULL,
  `ee_year` varchar(10) NOT NULL,
  `ee_gender` varchar(30) NOT NULL,
  `ee_city` varchar(1000) NOT NULL,
  `ee_education` varchar(1000) NOT NULL,
  `ee_mnumber` varchar(30) NOT NULL,
  `ee_experience` varchar(1000) NOT NULL,
  `ee_skills` varchar(1000) NOT NULL,
  `ee_industry` varchar(1000) NOT NULL,
  `ee_certification` varchar(1000) NOT NULL,
  `ee_path` varchar(130) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `employers`
--

CREATE TABLE `employers` (
  `er_id` int(6) NOT NULL,
  `er_company` varchar(128) NOT NULL,
  `er_companytype` varchar(128) NOT NULL,
  `er_sector` varchar(128) DEFAULT NULL,
  `er_category` varchar(128) DEFAULT NULL,
  `er_companyemail` varchar(64) NOT NULL,
  `er_password` varchar(64) NOT NULL,
  `er_address` varchar(255) NOT NULL,
  `er_city` varchar(128) NOT NULL,
  `er_country` varchar(128) DEFAULT NULL,
  `er_website` varchar(128) NOT NULL,
  `er_TNumber` varchar(64) NOT NULL,
  `er_title` varchar(64) DEFAULT NULL,
  `er_fname` varchar(64) NOT NULL,
  `er_lname` varchar(64) NOT NULL,
  `er_designation` varchar(64) NOT NULL,
  `er_contactemail` varchar(64) NOT NULL,
  `er_MNumber` varchar(64) NOT NULL,
  `er_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `j_id` int(4) NOT NULL COMMENT 'id',
  `j_er_id` int(30) NOT NULL COMMENT 'mã công việc',
  `j_category` varchar(128) NOT NULL COMMENT 'ngành-nghề',
  `j_owner_name` varchar(128) NOT NULL COMMENT 'tên công ty',
  `j_title` varchar(128) NOT NULL COMMENT 'tiêu đề công việc',
  `j_hours` float(3,1) DEFAULT NULL,
  `j_salary` int(64) NOT NULL COMMENT 'lương',
  `j_date` date NOT NULL COMMENT 'ngày hết hạn ',
  `j_sector` varchar(128) NOT NULL COMMENT 'địa điểm làm việc',
  `j_type` varchar(128) NOT NULL COMMENT 'loại ngành-nghề',
  `j_country` varchar(128) DEFAULT NULL COMMENT 'quốc gia',
  `j_vacancy` int(10) NOT NULL COMMENT 'số lượng tuyển',
  `j_company` varchar(128) NOT NULL COMMENT 'tên cty',
  `j_experience` enum('2','3','4','5','greater_5','less_1','0','1') NOT NULL COMMENT 'yêu cầu kinh nghiệm',
  `j_description` varchar(300) NOT NULL COMMENT 'mô tả công việc ',
  `j_city` varchar(128) NOT NULL COMMENT 'thành phố',
  `j_active` int(1) NOT NULL DEFAULT '0' COMMENT 'trạng thái công việc',
  `date_d` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `temp_employees`
--

CREATE TABLE `temp_employees` (
  `ee_id` int(4) NOT NULL,
  `ee_email` varchar(64) NOT NULL,
  `ee_password` varchar(64) NOT NULL,
  `ee_fname` varchar(30) NOT NULL,
  `ee_lname` varchar(30) NOT NULL,
  `ee_day` varchar(10) NOT NULL,
  `ee_month` varchar(10) NOT NULL,
  `ee_year` varchar(10) NOT NULL,
  `ee_gender` varchar(30) NOT NULL,
  `ee_country` varchar(130) NOT NULL,
  `ee_city` varchar(30) NOT NULL,
  `ee_education` varchar(20) NOT NULL,
  `ee_master` varchar(20) NOT NULL,
  `ee_mcode` varchar(10) NOT NULL,
  `ee_mnumber` varchar(30) NOT NULL,
  `ee_experience` varchar(30) NOT NULL,
  `ee_skills` varchar(130) NOT NULL,
  `ee_industry` varchar(130) NOT NULL,
  `ee_certification` varchar(130) NOT NULL,
  `ee_path` varchar(130) NOT NULL,
  `confirm_code` varchar(65) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `validity`
--

CREATE TABLE `validity` (
  `employer_id` int(4) NOT NULL,
  `plan` varchar(30) NOT NULL,
  `number` int(4) NOT NULL,
  `validity1` int(4) NOT NULL,
  `downloads` int(4) NOT NULL,
  `validity2` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`cont_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`ee_id`);

--
-- Indexes for table `employers`
--
ALTER TABLE `employers`
  ADD PRIMARY KEY (`er_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`j_id`);

--
-- Indexes for table `temp_employees`
--
ALTER TABLE `temp_employees`
  ADD PRIMARY KEY (`ee_id`);

--
-- Indexes for table `validity`
--
ALTER TABLE `validity`
  ADD PRIMARY KEY (`employer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `a_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `cont_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `ee_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `employers`
--
ALTER TABLE `employers`
  MODIFY `er_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `j_id` int(4) NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `temp_employees`
--
ALTER TABLE `temp_employees`
  MODIFY `ee_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `validity`
--
ALTER TABLE `validity`
  MODIFY `employer_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
