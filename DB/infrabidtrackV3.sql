-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 25, 2018 at 06:13 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infrabidtrack`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_classification`
--

DROP TABLE IF EXISTS `account_classification`;
CREATE TABLE IF NOT EXISTS `account_classification` (
  `account_id` int(11) NOT NULL AUTO_INCREMENT,
  `classification` varchar(255) NOT NULL,
  PRIMARY KEY (`account_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account_classification`
--

INSERT INTO `account_classification` (`account_id`, `classification`) VALUES
(1, 'Capitol Outlay'),
(2, 'MOOE');

-- --------------------------------------------------------

--
-- Table structure for table `barangays`
--

DROP TABLE IF EXISTS `barangays`;
CREATE TABLE IF NOT EXISTS `barangays` (
  `barangay_id` int(11) NOT NULL AUTO_INCREMENT,
  `barangay_code` varchar(11) NOT NULL,
  `barangay` varchar(225) NOT NULL,
  `municipality_id` int(11) NOT NULL,
  PRIMARY KEY (`barangay_id`),
  KEY `selected_municipality` (`municipality_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barangays`
--

INSERT INTO `barangays` (`barangay_id`, `barangay_code`, `barangay`, `municipality_id`) VALUES
(1, '1101001', 'Abiang', 1),
(2, '1101002', 'Caliking', 1),
(3, '1101003', 'Cattubo', 1),
(4, '1101004', 'Naguey', 1),
(5, '1101005', 'Paoay', 1),
(6, '1101006', 'Pasdong', 1),
(7, '1101007', 'Poblacion(Bakun)', 1),
(8, '1101008', 'Topdac', 1),
(9, '1103001', 'Ampusongan', 2),
(10, '1103002', 'Bagu', 2),
(11, '1103003', 'Dalipey', 2),
(12, '1103004', 'Gambang', 2),
(13, '1103005', 'Kayapa', 2),
(14, '1103006', 'Poblacion(Bakun)', 2),
(15, '1103007', 'Sinacbat', 2),
(16, '1104001', 'Ambuclao', 3),
(17, '1104002', 'Bila', 3),
(18, '1104003', 'Bokod-Bisal', 3),
(19, '1104004', 'Daclan(Bokod)', 3),
(20, '1104005', 'Ekip', 3),
(21, '1104006', 'Karao', 3),
(22, '1104007', 'Nawal', 3),
(23, '1104008', 'Pito', 3),
(24, '1104009', 'Poblacion(Bokod)', 3);

-- --------------------------------------------------------

--
-- Table structure for table `contractors`
--

DROP TABLE IF EXISTS `contractors`;
CREATE TABLE IF NOT EXISTS `contractors` (
  `contractor_id` int(11) NOT NULL AUTO_INCREMENT,
  `businessname` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contactnumber` varchar(13) NOT NULL,
  PRIMARY KEY (`contractor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contractors`
--

INSERT INTO `contractors` (`contractor_id`, `businessname`, `owner`, `address`, `contactnumber`) VALUES
(1, 'asdffds', 'asdfasdf', 'asdfasf1', '23');

-- --------------------------------------------------------

--
-- Table structure for table `document_remarks`
--

DROP TABLE IF EXISTS `document_remarks`;
CREATE TABLE IF NOT EXISTS `document_remarks` (
  `remark_id` int(11) NOT NULL AUTO_INCREMENT,
  `remark` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `plan_id` int(11) NOT NULL,
  PRIMARY KEY (`remark_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `document_type`
--

DROP TABLE IF EXISTS `document_type`;
CREATE TABLE IF NOT EXISTS `document_type` (
  `doc_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `document_name` varchar(255) NOT NULL,
  PRIMARY KEY (`doc_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `funds`
--

DROP TABLE IF EXISTS `funds`;
CREATE TABLE IF NOT EXISTS `funds` (
  `fund_id` int(11) NOT NULL AUTO_INCREMENT,
  `source` varchar(255) NOT NULL,
  PRIMARY KEY (`fund_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `funds`
--

INSERT INTO `funds` (`fund_id`, `source`) VALUES
(1, 'PSB'),
(2, 'Calamity Fund'),
(3, 'GF'),
(4, 'Trust'),
(5, 'PRDP'),
(6, 'SLRF'),
(7, 'PAMANA'),
(8, 'PRNDP'),
(9, 'DOE'),
(10, 'SEF'),
(11, 'CHARMP'),
(12, 'Supplemental Budget'),
(13, 'Other Funds');

-- --------------------------------------------------------

--
-- Table structure for table `municipalities`
--

DROP TABLE IF EXISTS `municipalities`;
CREATE TABLE IF NOT EXISTS `municipalities` (
  `municipality_id` int(11) NOT NULL AUTO_INCREMENT,
  `municipality_code` varchar(11) NOT NULL,
  `municipality` varchar(225) NOT NULL,
  PRIMARY KEY (`municipality_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `municipalities`
--

INSERT INTO `municipalities` (`municipality_id`, `municipality_code`, `municipality`) VALUES
(1, '1101000', 'Atok'),
(2, '1103000', 'Bakun'),
(3, '1104000', 'Bokod');

-- --------------------------------------------------------

--
-- Table structure for table `procact`
--

DROP TABLE IF EXISTS `procact`;
CREATE TABLE IF NOT EXISTS `procact` (
  `plan_id` int(11) NOT NULL,
  `pre_proc` date DEFAULT NULL,
  `advertisement` date DEFAULT NULL,
  `pre_bid` date DEFAULT NULL,
  `eligibility_check` date DEFAULT NULL,
  `open_bid` date DEFAULT NULL,
  `bid_evaluation` date DEFAULT NULL,
  `post_qual` date DEFAULT NULL,
  `award_notice` date DEFAULT NULL,
  `contract_signing` date DEFAULT NULL,
  `proceed_notice` date DEFAULT NULL,
  `delivery_completion` date DEFAULT NULL,
  `acceptance_turnover` date DEFAULT NULL,
  `remark` varchar(225) DEFAULT NULL,
  KEY `plan_activity` (`plan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `procurement_mode`
--

DROP TABLE IF EXISTS `procurement_mode`;
CREATE TABLE IF NOT EXISTS `procurement_mode` (
  `mode_id` int(11) NOT NULL AUTO_INCREMENT,
  `mode` varchar(255) NOT NULL,
  PRIMARY KEY (`mode_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `procurement_mode`
--

INSERT INTO `procurement_mode` (`mode_id`, `mode`) VALUES
(1, 'Bidding'),
(2, 'SVP'),
(3, 'Negotiated');

-- --------------------------------------------------------

--
-- Table structure for table `project_documents`
--

DROP TABLE IF EXISTS `project_documents`;
CREATE TABLE IF NOT EXISTS `project_documents` (
  `plan_id` int(11) NOT NULL,
  `doc_type_id` int(11) NOT NULL,
  `remark_id` int(11) NOT NULL,
  `document_name` varchar(255) NOT NULL,
  KEY `document_plan` (`plan_id`),
  KEY `document_type` (`doc_type_id`),
  KEY `document_remark` (`remark_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `project_plan`
--

DROP TABLE IF EXISTS `project_plan`;
CREATE TABLE IF NOT EXISTS `project_plan` (
  `plan_id` int(11) NOT NULL AUTO_INCREMENT,
  `project_no` int(11) NOT NULL,
  `project_title` varchar(255) NOT NULL,
  `municipality_id` int(11) NOT NULL,
  `barangay_id` int(11) NOT NULL,
  `projtype_id` int(11) NOT NULL,
  `mode_id` int(11) NOT NULL,
  `fund_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `abc` decimal(25,2) NOT NULL,
  `status` varchar(255) NOT NULL,
  `re-bid_count` int(11) DEFAULT NULL,
  PRIMARY KEY (`plan_id`),
  KEY `plan_municipality` (`municipality_id`),
  KEY `plan_barangay` (`barangay_id`),
  KEY `plan_type` (`projtype_id`),
  KEY `plan_mode` (`mode_id`),
  KEY `plan_fund` (`fund_id`),
  KEY `plan_account` (`account_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_plan`
--

INSERT INTO `project_plan` (`plan_id`, `project_no`, `project_title`, `municipality_id`, `barangay_id`, `projtype_id`, `mode_id`, `fund_id`, `account_id`, `abc`, `status`, `re-bid_count`) VALUES
(1, 3, 'new tittle', 3, 21, 15, 2, 4, 2, '90909023913.00', 'pending', NULL),
(2, 2, 'Tire Path for atok ', 1, 6, 9, 1, 7, 1, '50000000.00', 'pending', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `projtype`
--

DROP TABLE IF EXISTS `projtype`;
CREATE TABLE IF NOT EXISTS `projtype` (
  `projtype_id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`projtype_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projtype`
--

INSERT INTO `projtype` (`projtype_id`, `type`) VALUES
(1, 'FMP'),
(2, 'Bridge'),
(3, 'Munti-Purpose Building/Hall/Outpost'),
(4, 'Slope Protection'),
(5, 'School Building'),
(6, 'Senior Citizen\'s Building'),
(7, 'Domestic Water Supply/Irrigation/Waterworks'),
(8, 'Footbridges'),
(9, 'Footpath/Foot Trail'),
(10, 'Multi-Purpose Shed/Waiting Shed'),
(11, 'Multi-Purpose Gym/Basketball Count'),
(12, 'Drainage Canal'),
(13, 'Flood Control/Riprapping/Slope Protection'),
(14, 'Provincial Road'),
(15, 'Health &amp; PHO Facilities'),
(16, 'Agriculture Services'),
(17, 'Veterinary Services');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(25) NOT NULL,
  `middle_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `middle_name`, `last_name`, `username`, `password`, `user_type`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 'admin', 'secretariat');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barangays`
--
ALTER TABLE `barangays`
  ADD CONSTRAINT `selected_municipality` FOREIGN KEY (`municipality_id`) REFERENCES `municipalities` (`municipality_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `procact`
--
ALTER TABLE `procact`
  ADD CONSTRAINT `plan_activity` FOREIGN KEY (`plan_id`) REFERENCES `project_plan` (`plan_id`) ON UPDATE CASCADE;

--
-- Constraints for table `project_documents`
--
ALTER TABLE `project_documents`
  ADD CONSTRAINT `document_plan` FOREIGN KEY (`plan_id`) REFERENCES `project_plan` (`plan_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `document_remark` FOREIGN KEY (`remark_id`) REFERENCES `document_remarks` (`remark_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `document_type` FOREIGN KEY (`doc_type_id`) REFERENCES `document_type` (`doc_type_id`) ON UPDATE CASCADE;

--
-- Constraints for table `project_plan`
--
ALTER TABLE `project_plan`
  ADD CONSTRAINT `plan_account` FOREIGN KEY (`account_id`) REFERENCES `account_classification` (`account_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `plan_barangay` FOREIGN KEY (`barangay_id`) REFERENCES `barangays` (`barangay_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `plan_fund` FOREIGN KEY (`fund_id`) REFERENCES `funds` (`fund_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `plan_mode` FOREIGN KEY (`mode_id`) REFERENCES `procurement_mode` (`mode_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `plan_municipality` FOREIGN KEY (`municipality_id`) REFERENCES `municipalities` (`municipality_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `plan_type` FOREIGN KEY (`projtype_id`) REFERENCES `projtype` (`projtype_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
