-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 03, 2018 at 04:02 AM
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
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  PRIMARY KEY (`account_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account_classification`
--

INSERT INTO `account_classification` (`account_id`, `classification`, `status`) VALUES
(1, 'Capital Outlay', 'active'),
(2, 'MOOE', 'active');

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
) ENGINE=InnoDB AUTO_INCREMENT=140 DEFAULT CHARSET=latin1;

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
(7, '1101007', 'Poblacion(Atok)', 1),
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
(19, '1104004', 'Daclan', 3),
(20, '1104005', 'Ekip', 3),
(21, '1104006', 'Karao', 3),
(22, '1104007', 'Nawal', 3),
(23, '1104008', 'Pito', 3),
(24, '1104009', 'Poblacion(Bokod)', 3),
(25, '1105002', 'Amgaleyguey', 4),
(26, '1105003 ', 'Amlimay', 4),
(27, '1105004', 'Baculongan Norte', 4),
(28, '1105014', 'Baculongan Sur', 4),
(29, '1105006', 'Bangao', 4),
(30, '1105007', 'Buyacaoan', 4),
(31, '1105008', 'Calamagan', 4),
(32, '1105015', 'Lengaoan', 4),
(33, '1105010', 'Loo', 4),
(34, '1105012', 'Natubleng', 4),
(35, '1105013', 'Poblacion(Buguias)', 4),
(36, '1105009', 'Catlubong', 4),
(37, '1106001', 'Ampucao', 5),
(38, '1106002', 'Dalupirip', 5),
(39, '1106003', 'Gumatdang', 5),
(40, '1106004', 'Loacan', 5),
(41, '1106005', 'Poblacion(Itogon)', 5),
(42, '1106006', 'Tinongdan', 5),
(43, '1106007', 'Tuding', 5),
(44, '1106008', 'Ucab', 5),
(45, '1106009', 'Virac', 5),
(46, '1107001', 'Adaoay', 6),
(47, '1107002', 'Anchukey', 6),
(48, '1107003', 'Ballay', 6),
(49, '1107004', 'Bashoy', 6),
(50, '1107005', 'Batan', 6),
(51, '1107009', 'Duacan', 6),
(52, '1107010', 'Eddet', 6),
(53, '1107012', 'Gusaran', 6),
(54, '1107013', 'Kabayan Barrio', 6),
(55, '1107014', 'Lusod', 6),
(56, '1107016', 'Pacso', 6),
(57, '1107017', 'Poblacion(Kabayan)', 6),
(58, '1107018', 'Tawangan', 6),
(59, '1108001', 'Balakbak', 7),
(60, '1108002', 'Beleng-Belis', 7),
(61, '1108003', 'Boklaoan', 7),
(62, '1108004', 'Cayapes', 7),
(63, '1108006', 'Cuba', 7),
(64, '1108008', 'Datakan', 7),
(65, '1108009', 'Gadang', 7),
(66, '1108010', 'Gaswiling', 7),
(67, '1108011', 'Labueg', 7),
(68, '1108013', 'Paykek', 7),
(69, '1108014', 'Poblacion(Kapangan)', 7),
(70, '1108016', 'Pongayan', 7),
(71, '1108015', 'Pudong', 7),
(72, '1108017', 'Sagubo', 7),
(73, '1108018', 'Tabao-ao', 7),
(74, '1109001', 'Badeo', 8),
(75, '1109002', 'Lubo', 8),
(76, '1109003', 'Madaymen', 8),
(77, '1109004', 'Palina', 8),
(78, '1109005', 'Poblacion(Kibungan)', 8),
(79, '1109006', 'Sagpat', 8),
(80, '1109007', 'Tacadang', 8),
(81, '1110001', 'Alapang', 9),
(82, '1110002', 'Alno', 9),
(83, '1110003', 'Ambiong', 9),
(84, '1110004', 'Bahong', 9),
(85, '1110005', 'Balili(La Trinidad)', 9),
(86, '1110006', 'Beckel', 9),
(87, '1110008', 'Betag', 9),
(88, '1110007', 'Bineng', 9),
(89, '1110009', 'Cruz', 9),
(90, '1110010', 'Lubas', 9),
(91, '1110011', 'Pico', 9),
(92, '1110012', 'Poblacion(LTB)', 9),
(93, '1110013', 'Puguis', 9),
(94, '1110014', 'Shilan', 9),
(95, '1110015', 'Tawang', 9),
(96, '1110016', 'Wangal', 9),
(97, '1111001', 'Balili(Mankayan)', 10),
(98, '1111002', 'Bedbed', 10),
(99, '1111003', 'Bulalacao', 10),
(100, '1111004', 'Cabiten', 10),
(101, '1111005', 'Colalo', 10),
(102, '1111008', 'Paco', 10),
(103, '1111006', 'Guinaoang', 10),
(104, '1111010', 'Poblacion(Mankayan)', 10),
(105, '1111011', 'Sapid', 10),
(106, '1111012', 'Tabio', 10),
(107, '1111013', 'Taneg', 10),
(108, '1112002', 'Bagong', 11),
(109, '1112003', 'Ballulay', 11),
(110, '1112004', 'Banangan', 11),
(111, '1112005', 'Banengbeng', 11),
(112, '1112006', 'Bayabas', 11),
(113, '1112007', 'Kamog', 11),
(114, '1112010', 'Pappa', 11),
(115, '1112011', 'Poblacion(Sablan)', 11),
(116, '1113001', 'Ansagan', 12),
(117, '1113003', 'Camp 3', 12),
(118, '1113004', 'Camp 4', 12),
(119, '1113002', 'Camp 1', 12),
(120, '1113006', 'Nangalisan', 12),
(121, '1113007', 'Poblacion(Tuba)', 12),
(122, '1113008', 'San Pascual', 12),
(123, '1113009', 'Tabaan Norte', 12),
(124, '1113010', 'Tabaan Sur', 12),
(125, '1113011', 'Tadiangan', 12),
(126, '1113012', 'Taloy Norte', 12),
(127, '1113013', 'Taloy Sur', 12),
(128, '1113014', 'Twin Peaks', 12),
(129, '1114001', 'Ambassador', 13),
(130, '1114002', 'Ambongdolan', 13),
(131, '1114003', 'Ba-ayan', 13),
(132, '1114004', 'Basil', 13),
(133, '1114006', 'Caponga(Pob.)', 13),
(134, '1114005', 'Daclan(Tublay)', 13),
(135, '1114007', 'Tublay Central', 13),
(136, '1114008', 'Tuel', 13),
(137, '1104010', 'Tikey', 3),
(138, '1111009', 'Palasaan', 10),
(139, '1105016', 'Sebang', 4);

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
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  PRIMARY KEY (`contractor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contractors`
--

INSERT INTO `contractors` (`contractor_id`, `businessname`, `owner`, `address`, `contactnumber`, `status`) VALUES
(1, 'Caliway COnst.', 'Jason Caliway', 'Wangal, La Trinidad, Benguet', '128566', 'active'),
(2, 'Bigo Const.', 'Reuel Bigo', 'Pusel', '09260878700', 'active'),
(3, 'Benguet Corps', 'Mr Benguet', 'benguet', '00938292932', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `disqualification_records`
--

DROP TABLE IF EXISTS `disqualification_records`;
CREATE TABLE IF NOT EXISTS `disqualification_records` (
  `record_id` int(11) NOT NULL AUTO_INCREMENT,
  `project_bid` int(11) NOT NULL,
  `project_log_id` int(11) NOT NULL,
  PRIMARY KEY (`record_id`),
  KEY `project_bid` (`project_bid`),
  KEY `project_log_id` (`project_log_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `document_logs`
--

DROP TABLE IF EXISTS `document_logs`;
CREATE TABLE IF NOT EXISTS `document_logs` (
  `doc_log_id` int(11) NOT NULL AUTO_INCREMENT,
  `log_id` int(11) NOT NULL,
  `project_document_id` int(11) NOT NULL,
  PRIMARY KEY (`doc_log_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `document_type`
--

DROP TABLE IF EXISTS `document_type`;
CREATE TABLE IF NOT EXISTS `document_type` (
  `doc_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `doc_no` int(11) NOT NULL,
  `document_name` varchar(255) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  PRIMARY KEY (`doc_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `document_type`
--

INSERT INTO `document_type` (`doc_type_id`, `doc_no`, `document_name`, `status`) VALUES
(1, 1, 'Notice to Proceed', 'active'),
(2, 2, 'Contract', 'active'),
(3, 3, 'Performance bond', 'active'),
(4, 4, 'Notice of Award', 'active'),
(5, 5, 'Notice of post Qualification', 'active'),
(6, 6, 'Resolution of Award', 'active'),
(7, 7, 'OBR/TFUS', 'active'),
(8, 8, 'Post Qualification Report', 'active'),
(9, 9, 'Bid Evaluation Report', 'active'),
(10, 10, 'Abstract of Bids', 'active'),
(11, 11, 'Notice of Meeting', 'active'),
(12, 12, 'Minutes of Meeting', 'active'),
(13, 13, 'PhilGEPS', 'active'),
(14, 14, 'DTI business name registration', 'active'),
(15, 15, 'Permit to engage in business', 'active'),
(16, 16, 'Statement of on-going and completed projects', 'active'),
(17, 17, 'PCAB license', 'active'),
(18, 18, 'Financial Statement', 'active'),
(19, 19, 'NFCC', 'active'),
(20, 20, 'Tax Clearance', 'active'),
(21, 21, 'Latest income & business tax returns', 'active'),
(22, 22, 'Certification of Philgeps registration', 'active'),
(23, 23, 'Provincial Permit', 'active'),
(24, 24, 'Bid Security', 'active'),
(25, 25, 'Organizational chart', 'active'),
(26, 26, 'List of contractor\'s personnel', 'active'),
(27, 27, 'List of contractor\'s equipment', 'active'),
(28, 28, 'Omnibus sworn affidavit', 'active'),
(29, 29, 'Bid Form', 'active'),
(30, 30, 'Bill of Quantities', 'active'),
(31, 31, 'Contactor\'s detailed estimates', 'active'),
(32, 32, 'Summary sheet of unit prices', 'active'),
(33, 33, 'Contruction schedule', 'active'),
(34, 34, 'Invitation to bid', 'active'),
(35, 35, 'Bid Data sheet', 'active'),
(36, 36, 'Special condition of the contract', 'active'),
(37, 37, 'Individual Program of work', 'active'),
(38, 38, 'Detailed Estimates', 'active'),
(39, 39, 'Quantity Take Off', 'active'),
(40, 40, 'Time Spot Schedule', 'active'),
(41, 41, 'Quantity Control Plan', 'active'),
(42, 42, 'Work Program Schedule', 'active'),
(43, 43, 'Plans and specifications', 'active'),
(44, 44, 'Letter of Protest', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `funds`
--

DROP TABLE IF EXISTS `funds`;
CREATE TABLE IF NOT EXISTS `funds` (
  `fund_id` int(11) NOT NULL AUTO_INCREMENT,
  `source` varchar(255) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `fund_type` enum('Supplemental','Regular') DEFAULT 'Regular',
  PRIMARY KEY (`fund_id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `funds`
--

INSERT INTO `funds` (`fund_id`, `source`, `status`, `fund_type`) VALUES
(1, 'PSB', 'active', 'Regular'),
(2, 'Calamity Fund', 'active', 'Regular'),
(3, 'GF', 'active', 'Regular'),
(4, 'Trust', 'active', 'Regular'),
(5, 'PRDP', 'active', 'Regular'),
(6, 'SLRF', 'active', 'Regular'),
(7, 'PAMANA', 'active', 'Regular'),
(8, 'PRNDP', 'active', 'Regular'),
(9, 'DOE', 'active', 'Regular'),
(10, 'SEF', 'active', 'Regular'),
(11, 'CHARMP', 'active', 'Regular'),
(12, 'Supplemental Budget', 'active', 'Regular'),
(13, 'Other Funds', 'active', 'Regular'),
(27, 'Support', 'active', 'Supplemental'),
(28, '20% PDF', 'active', 'Regular'),
(29, '20% PDF', 'active', 'Supplemental'),
(30, 'GENERAL FUND', 'active', 'Regular'),
(31, '20% PDF 2018', 'active', 'Supplemental');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

DROP TABLE IF EXISTS `logs`;
CREATE TABLE IF NOT EXISTS `logs` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `remark` mediumtext,
  `log_type` enum('send','receive') DEFAULT NULL,
  `sender` int(11) DEFAULT NULL,
  `receiver` int(11) DEFAULT NULL,
  `log_date` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`log_id`),
  KEY `user_id` (`sender`),
  KEY `receiver` (`receiver`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `municipalities`
--

DROP TABLE IF EXISTS `municipalities`;
CREATE TABLE IF NOT EXISTS `municipalities` (
  `municipality_id` int(11) NOT NULL AUTO_INCREMENT,
  `municipality_code` varchar(11) NOT NULL,
  `municipality` varchar(225) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  PRIMARY KEY (`municipality_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `municipalities`
--

INSERT INTO `municipalities` (`municipality_id`, `municipality_code`, `municipality`, `status`) VALUES
(1, '1101000', 'Atok', 'active'),
(2, '1103000', 'Bakun', 'active'),
(3, '1104000', 'Bokod', 'active'),
(4, '1105000', 'Buguias', 'active'),
(5, '1106000', 'Itogon', 'active'),
(6, '1107000', 'Kabayan', 'active'),
(7, '1108000', 'Kapangan', 'active'),
(8, '1109000', 'Kibungan', 'active'),
(9, '1110000', 'La Trinidad', 'active'),
(10, '1111000', 'Mankayan', 'active'),
(11, '1112000', 'Sablan', 'active'),
(12, '1113000', 'Tuba', 'active'),
(13, '1114000', 'Tublay', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `observers`
--

DROP TABLE IF EXISTS `observers`;
CREATE TABLE IF NOT EXISTS `observers` (
  `observer_id` int(11) NOT NULL AUTO_INCREMENT,
  `observer_dept_name` varchar(255) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  PRIMARY KEY (`observer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `observers`
--

INSERT INTO `observers` (`observer_id`, `observer_dept_name`, `status`) VALUES
(1, 'Observer 1', 'active'),
(2, 'Observer 2', 'active'),
(3, 'Observer 3', 'active'),
(4, 'Observer 4', 'active'),
(5, 'Observer 5', 'active');

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
  `authority_approval` date DEFAULT NULL,
  `proceed_notice` date DEFAULT NULL,
  `delivery_completion` date DEFAULT NULL,
  `acceptance_turnover` date DEFAULT NULL,
  UNIQUE KEY `plan_id` (`plan_id`),
  KEY `plan_activity` (`plan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `procact`
--

INSERT INTO `procact` (`plan_id`, `pre_proc`, `advertisement`, `pre_bid`, `eligibility_check`, `open_bid`, `bid_evaluation`, `post_qual`, `award_notice`, `contract_signing`, `authority_approval`, `proceed_notice`, `delivery_completion`, `acceptance_turnover`) VALUES
(19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(34, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(36, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(38, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(39, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(40, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(41, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(43, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(45, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(46, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(47, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(48, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(49, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(50, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(51, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(52, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(53, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(54, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(55, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(56, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(57, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(58, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(59, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(61, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(62, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(63, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(64, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(65, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(66, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(67, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(68, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(69, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(70, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(71, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(72, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(73, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(75, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(76, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(77, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(79, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(80, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(81, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(82, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(83, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(85, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(86, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(87, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(88, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(89, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(90, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(91, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(92, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(93, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(94, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(95, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(96, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(97, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(98, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(99, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(100, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(101, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(102, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(103, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(104, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(105, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(106, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(107, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(108, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(109, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(110, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(111, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(112, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(113, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(114, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(115, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(116, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(117, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(118, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(119, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(120, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(121, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(122, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(123, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(124, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(125, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(126, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(127, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(128, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(129, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(130, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(131, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(132, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(133, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(134, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(135, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(136, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(138, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(139, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(141, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(142, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(143, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `procurement_mode`
--

DROP TABLE IF EXISTS `procurement_mode`;
CREATE TABLE IF NOT EXISTS `procurement_mode` (
  `mode_id` int(11) NOT NULL AUTO_INCREMENT,
  `mode` varchar(255) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  PRIMARY KEY (`mode_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `procurement_mode`
--

INSERT INTO `procurement_mode` (`mode_id`, `mode`, `status`) VALUES
(1, 'Bidding', 'active'),
(2, 'SVP', 'active'),
(3, 'Negotiated', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `project_activity_status`
--

DROP TABLE IF EXISTS `project_activity_status`;
CREATE TABLE IF NOT EXISTS `project_activity_status` (
  `plan_id` int(11) NOT NULL,
  `pre_proc` enum('pending','finished','not_needed') NOT NULL,
  `advertisement` enum('pending','finished','not_needed') NOT NULL,
  `pre_bid` enum('pending','finished','not_needed') NOT NULL,
  `eligibility_check` enum('pending','finished','not_needed') NOT NULL,
  `open_bid` enum('pending','finished','not_needed') NOT NULL,
  `bid_evaluation` enum('pending','finished','not_needed') NOT NULL,
  `post_qual` enum('pending','finished','not_needed') NOT NULL,
  `award_notice` enum('pending','finished','not_needed') NOT NULL,
  `contract_signing` enum('pending','finished','not_needed') NOT NULL,
  `authority_approval` enum('pending','finished','not_needed') NOT NULL,
  `proceed_notice` enum('pending','finished','not_needed') NOT NULL,
  `delivery_completion` enum('pending','finished','not_needed') NOT NULL,
  `acceptance_turnover` enum('pending','finished','not_needed') NOT NULL,
  UNIQUE KEY `plan_id` (`plan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_activity_status`
--

INSERT INTO `project_activity_status` (`plan_id`, `pre_proc`, `advertisement`, `pre_bid`, `eligibility_check`, `open_bid`, `bid_evaluation`, `post_qual`, `award_notice`, `contract_signing`, `authority_approval`, `proceed_notice`, `delivery_completion`, `acceptance_turnover`) VALUES
(19, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(20, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(21, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(22, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(23, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(24, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(25, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(27, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(28, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(29, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(30, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(31, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(32, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(33, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(34, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(36, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(37, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(38, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(39, 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(40, 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(41, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(42, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(43, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(44, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(45, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(46, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(47, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(48, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(49, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(50, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(51, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(52, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(53, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(54, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(55, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(56, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(57, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(58, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(59, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(60, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(61, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(62, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(63, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(64, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(65, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(66, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(67, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(68, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(69, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(70, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(71, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(72, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(73, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(75, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(76, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(77, 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(78, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(79, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(80, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(81, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(82, 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(83, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(85, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(86, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(87, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(88, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(89, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(90, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(91, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(92, 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(93, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(94, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(95, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(96, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(97, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(98, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(99, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(100, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(101, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(102, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(103, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(104, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(105, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(106, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(107, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(108, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(109, 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(110, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(111, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(112, 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(113, 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(114, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(115, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(116, 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(117, 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(118, 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(119, 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(120, 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(121, 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(122, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(123, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(124, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(125, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(126, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(127, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(128, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(129, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(130, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(131, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(132, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(133, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(134, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(135, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(136, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(138, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(139, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(141, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(142, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(143, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `project_bidders`
--

DROP TABLE IF EXISTS `project_bidders`;
CREATE TABLE IF NOT EXISTS `project_bidders` (
  `project_bid` int(11) NOT NULL AUTO_INCREMENT,
  `plan_id` int(11) NOT NULL,
  `contractor_id` int(11) NOT NULL,
  `proposed_bid` double(25,2) NOT NULL,
  `bid_status` enum('disqualifide','active','inactive') NOT NULL DEFAULT 'active',
  PRIMARY KEY (`project_bid`),
  KEY `contractor_id` (`contractor_id`),
  KEY `plan_id` (`plan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `project_document`
--

DROP TABLE IF EXISTS `project_document`;
CREATE TABLE IF NOT EXISTS `project_document` (
  `project_document_id` int(11) NOT NULL AUTO_INCREMENT,
  `plan_id` int(11) NOT NULL,
  `doc_type_id` int(11) NOT NULL,
  `contractor_id` int(11) DEFAULT NULL,
  `added_by` int(11) NOT NULL,
  `previous_doc_loc` varchar(255) DEFAULT NULL,
  `current_doc_loc` varchar(255) DEFAULT NULL,
  `receiver` varchar(255) DEFAULT NULL,
  `status` enum('sent','received','disqualifide') DEFAULT NULL,
  `image_status` enum('true','false') NOT NULL DEFAULT 'false',
  PRIMARY KEY (`project_document_id`),
  KEY `plan_id` (`plan_id`),
  KEY `added_by` (`added_by`),
  KEY `contractor_id` (`contractor_id`),
  KEY `doc_type_id` (`doc_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `project_document_images`
--

DROP TABLE IF EXISTS `project_document_images`;
CREATE TABLE IF NOT EXISTS `project_document_images` (
  `document_image_id` int(11) NOT NULL AUTO_INCREMENT,
  `project_document_id` int(11) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `upload_path` varchar(255) NOT NULL,
  PRIMARY KEY (`document_image_id`),
  KEY `project_document_id` (`project_document_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `project_logs`
--

DROP TABLE IF EXISTS `project_logs`;
CREATE TABLE IF NOT EXISTS `project_logs` (
  `project_log_id` int(11) NOT NULL AUTO_INCREMENT,
  `plan_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `log_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `remark` text NOT NULL,
  PRIMARY KEY (`project_log_id`),
  KEY `user_id` (`user_id`),
  KEY `plan_id` (`plan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `project_observers`
--

DROP TABLE IF EXISTS `project_observers`;
CREATE TABLE IF NOT EXISTS `project_observers` (
  `activity_observer` int(11) NOT NULL AUTO_INCREMENT,
  `plan_id` int(11) NOT NULL,
  `observer_id` int(11) NOT NULL,
  `name_of_observer` varchar(255) NOT NULL,
  `activity_name` varchar(255) NOT NULL,
  `invite_date` date NOT NULL,
  `invite_class` enum('valid','renewed') NOT NULL DEFAULT 'valid',
  PRIMARY KEY (`activity_observer`),
  KEY `plan_id` (`plan_id`),
  KEY `observer_id` (`observer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `project_plan`
--

DROP TABLE IF EXISTS `project_plan`;
CREATE TABLE IF NOT EXISTS `project_plan` (
  `plan_id` int(11) NOT NULL AUTO_INCREMENT,
  `project_no` varchar(255) NOT NULL,
  `project_title` varchar(255) NOT NULL,
  `project_year` year(4) DEFAULT NULL,
  `year_funded` year(4) DEFAULT NULL,
  `project_type` enum('regular','supplementary') DEFAULT NULL,
  `office` varchar(255) DEFAULT NULL,
  `municipality_id` int(11) NOT NULL,
  `barangay_id` int(11) NOT NULL,
  `projtype_id` int(11) NOT NULL,
  `mode_id` int(11) NOT NULL,
  `fund_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `abc` double(25,2) NOT NULL,
  `abc_post_date` varchar(255) NOT NULL,
  `sub_open_date` varchar(255) NOT NULL,
  `award_notice_date` varchar(255) NOT NULL,
  `contract_signing_date` varchar(255) NOT NULL,
  `status` enum('pending','onprocess','for_implementation','for_rebid','for_review','completed') NOT NULL DEFAULT 'pending',
  `re_bid_count` int(11) NOT NULL DEFAULT '0',
  `date_added` date DEFAULT NULL,
  `pow_ready` enum('true','false') NOT NULL DEFAULT 'false',
  `date_pow_added` datetime DEFAULT NULL,
  `contractor_id` int(11) DEFAULT NULL,
  `proposed_bid` double(25,2) DEFAULT NULL,
  `pre_bid_invite_date` date DEFAULT NULL,
  `eligibility_check_invite_date` date DEFAULT NULL,
  `sub_open_invite_date` date DEFAULT NULL,
  `bid_evaluation_invite_date` date DEFAULT NULL,
  `post_qual_invite_date` date DEFAULT NULL,
  `delivery_completion_invite_date` date DEFAULT NULL,
  `remark` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`plan_id`),
  KEY `plan_municipality` (`municipality_id`),
  KEY `plan_barangay` (`barangay_id`),
  KEY `plan_type` (`projtype_id`),
  KEY `plan_mode` (`mode_id`),
  KEY `plan_fund` (`fund_id`),
  KEY `plan_account` (`account_id`),
  KEY `project_plan_ibfk_1` (`contractor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=156 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_plan`
--

INSERT INTO `project_plan` (`plan_id`, `project_no`, `project_title`, `project_year`, `year_funded`, `project_type`, `office`, `municipality_id`, `barangay_id`, `projtype_id`, `mode_id`, `fund_id`, `account_id`, `abc`, `abc_post_date`, `sub_open_date`, `award_notice_date`, `contract_signing_date`, `status`, `re_bid_count`, `date_added`, `pow_ready`, `date_pow_added`, `contractor_id`, `proposed_bid`, `pre_bid_invite_date`, `eligibility_check_invite_date`, `sub_open_invite_date`, `bid_evaluation_invite_date`, `post_qual_invite_date`, `delivery_completion_invite_date`, `remark`) VALUES
(19, 'SEF 18001', 'Repair of amp 30 elementary School, 3 classrooms', 2018, NULL, 'regular', NULL, 1, 7, 5, 2, 10, 2, 900000.00, 'Feb-2018', 'Feb-2018', 'Mar-2018', 'Mar-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(20, 'SEF18002', 'Repair of Bagtangan Elementary School, Bakun - 3 classrooms', 2018, NULL, 'regular', NULL, 2, 14, 5, 2, 10, 2, 900000.00, 'Feb-2018', 'Feb-2018', 'Mar-2018', 'Mar-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(21, 'SEF18003', 'Repair of Gasla Elementary School, Bokod - 3 classrooms', 2018, NULL, 'regular', NULL, 3, 24, 5, 2, 10, 2, 900000.00, 'Feb-2018', 'Feb-2018', 'Mar-2018', 'Mar-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(22, 'SEF18004', 'Repair of Bot-oan Elementary School, Buguias - 3 classrooms', 2018, NULL, 'regular', NULL, 4, 35, 5, 2, 10, 2, 900000.00, 'Feb-2018', 'Feb-2018', 'Mar-2018', 'Mar-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(23, 'SEF18005', 'Repair of Ucab Elementary School, Itogon - 3 classrooms', 2018, NULL, 'regular', NULL, 5, 44, 5, 2, 10, 2, 900000.00, 'Feb-2018', 'Feb-2018', 'Mar-2018', 'Mar-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(24, 'SEF18006', 'Repair of Asokong Pacso Elementary School, Kabayan - 3 classrooms', 2018, NULL, 'regular', NULL, 6, 56, 5, 2, 10, 2, 900000.00, 'Feb-2018', 'Feb-2018', 'Mar-2018', 'Mar-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(25, 'SEF18007', 'Repair of Catiaoan Barrio School, Kapangan - 3 classrooms', 2018, NULL, 'regular', NULL, 7, 69, 5, 2, 10, 2, 900000.00, 'Feb-2018', 'Feb-2018', 'Mar-2018', 'Mar-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(27, 'SEF18009', 'Repair of Pagal Elementary School, La Trinidad - 3 classrooms', 2018, NULL, 'regular', NULL, 9, 92, 5, 2, 10, 2, 820000.00, 'Feb-2018', 'Feb-2018', 'Mar-2018', 'Mar-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(28, 'SEF18008', 'Repair of Legleg Barrio School, Kibungan - 3 classrooms', 2018, NULL, 'regular', NULL, 8, 78, 5, 2, 10, 2, 980000.00, 'Feb-2018', 'Feb-2018', 'Mar-2018', 'Mar-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(29, 'SEF18010', 'Repair of Moagao Elementary School, Mankayan - 3 classrooms', 2018, NULL, 'regular', NULL, 10, 104, 5, 2, 10, 2, 900000.00, 'Feb-2018', 'Feb-2018', 'Mar-2018', 'Mar-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(30, 'SEF18011', 'Counterpart to the Construction of Three (3) classrooms School Building with Basic Facilities at the Pacalso Elementary School, Bua, Itogon', 2018, NULL, 'regular', NULL, 5, 41, 5, 1, 10, 2, 2686346.00, 'Feb-2018', 'Feb-2018', 'Mar-2018', 'Mar-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(31, 'SEF18012', 'Construction of Concrete Fence at Bulo Elementary School, Bokod', 2018, NULL, 'regular', NULL, 3, 24, 5, 2, 10, 1, 700000.00, 'Apr-2018', 'Apr-2018', 'May-2018', 'May-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(32, 'SEF18013', 'Installation of Semi- permanent Fence for the old Cagui-ing Elementary School in Caliking, Atok', 2018, NULL, 'regular', NULL, 1, 2, 5, 2, 10, 1, 800000.00, 'Apr-2018', 'Apr-2018', 'May-2018', 'May-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(33, 'SEF18014', 'Construction of Perimeter Fence of the 413 square meter proposed High School Lot located within Ambiong Elementary School in Ambiong, La Trinidad', 2018, NULL, 'regular', NULL, 9, 83, 5, 1, 10, 1, 1500000.00, 'Apr-2018', 'Apr-2018', 'Mar-2018', 'Mar-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(34, 'SFE18016', 'Reconstruction of Building for Bekes Elementary School at Buyacaoan, Buguias (additional)', 2018, NULL, 'regular', NULL, 4, 35, 5, 1, 10, 1, 1231000.00, 'Apr-2018', 'Apr-2018', 'May-2018', 'May-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(36, 'SEF18015', 'Improvement of Paoad Elementary School in Tublay (35 meters concrete perimeter fence and 48 x 5 meter riprap)', 2018, NULL, 'regular', NULL, 13, 133, 5, 1, 10, 1, 1500000.00, 'Apr-2018', 'Apr-2018', 'May-2018', 'May-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(37, 'SEF18017', 'Construction of Toplac Barrio School Building in Pudong, Kapangan', 2018, NULL, 'regular', NULL, 7, 69, 5, 1, 10, 1, 2200000.00, 'Apr-2018', 'Apr-2018', 'May-2018', 'May-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(38, 'SEF18018', 'Completion of Ewa - Bokes Elementary School Building in Sagpat, Kibungan', 2018, NULL, 'regular', NULL, 8, 78, 5, 2, 10, 1, 450000.00, 'Apr-2018', 'Apr-2018', 'May-2018', 'May-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(39, '18079', 'Improvement of access road and site development of Bahay Pag-asa Center, Wangal, La Trinidad', 2018, NULL, 'regular', NULL, 9, 96, 3, 1, 28, 1, 5000000.00, 'Feb-2018', 'Feb-2018', 'Mar-2018', 'Mar-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(40, '18084', 'Construction of a 4 storey Hospital Building (Phase I)', 2018, NULL, 'regular', NULL, 1, 7, 10, 1, 28, 1, 16600000.00, 'Feb-2018', 'Feb-2018', 'Mar-2018', 'Mar-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(41, '18083', 'Improvement of Hospital Building and annexes: ,- Const. of Dental Room with annexes ,- Const. of Gen-Expert Room', 2018, NULL, 'regular', NULL, 4, 35, 10, 1, 28, 1, 1800000.00, 'Feb-2018', 'Feb-2018', 'Mar-2018', 'Mar-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(42, '18085', 'Construction of Lavatory Building', 2018, NULL, 'regular', NULL, 5, 41, 10, 1, 28, 1, 1500000.00, 'Feb-2018', 'Feb-2018', 'Mar-2018', 'Mar-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(43, '18086', 'Improvement of BeGH Main Building', 2018, NULL, 'regular', NULL, 9, 92, 10, 1, 28, 1, 2000000.00, 'Feb-2018', 'Feb-2018', 'Mar-2018', 'Mar-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(44, '18086', 'Construction of a new building for automotive with ground improvement (Phase I)', 2018, NULL, 'regular', NULL, 9, 92, 10, 1, 28, 1, 4000000.00, 'Feb-2018', 'Feb-2018', 'Mar-2018', 'Mar-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(45, '18070', 'Rehabilitation of Gueday Water Works System, Suyoc, Mankayan', 2018, NULL, 'regular', NULL, 10, 104, 7, 2, 10, 2, 800000.00, 'Feb-2018', 'Feb-2018', 'Mar-2018', 'Mar-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(46, '18071', 'Rehabilitation of Water Works System, Balili E/S, Mankayan', 2018, NULL, 'regular', NULL, 10, 97, 7, 2, 10, 2, 500000.00, 'Feb-2018', 'Feb-2018', 'Mar-2018', 'Mar-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(47, '18072', 'Rehabilitation of Nawal E/S Water Works System, Nawal, Bokod', 2018, NULL, 'regular', NULL, 3, 22, 7, 2, 10, 2, 500000.00, 'Feb-2018', 'Feb-2018', 'Mar-2018', 'Mar-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(48, '18073', 'Rehabilitation of Pilpiloy Water Works System, Pito, Bokod', 2018, NULL, 'regular', NULL, 3, 23, 7, 2, 10, 2, 500000.00, 'Feb-2018', 'Feb-2018', 'Mar-2018', 'Mar-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(49, '18074', 'Rehabilitation of Danis Water Works System, Basil, Tublay', 2018, NULL, 'regular', NULL, 13, 132, 7, 2, 10, 2, 800000.00, 'Feb-2018', 'Feb-2018', 'Mar-2018', 'Mar-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(50, '18075', 'Improvement of Water Works System, Ambuklao, Bokod', 2018, NULL, 'regular', NULL, 3, 16, 7, 2, 10, 1, 1000000.00, 'Apr-2018', 'Apr-2018', 'May-2018', 'May-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(51, '18076', 'Construction of Water Works System, Caew, Bulalacao, Mankayan', 2018, NULL, 'regular', NULL, 10, 99, 7, 2, 10, 1, 500000.00, 'Apr-2018', 'Apr-2018', 'May-2018', 'May-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(52, '18077', 'Improvement of FBB AWASAI Water Works System, Banangan, Sablan', 2018, NULL, 'regular', NULL, 11, 110, 7, 1, 10, 1, 2600000.00, 'Apr-2018', 'Apr-2018', 'May-2018', 'May-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(53, '18078', 'Construction of Apni-Colon Water Works System, San Pascual, Tuba', 2018, NULL, 'regular', NULL, 12, 122, 7, 2, 10, 1, 500000.00, 'Apr-2018', 'Apr-2018', 'May-2018', 'May-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(54, '17014', 'Construction of Irrigation Tank at CTS, Puguis, La Trinidad', 2018, NULL, 'supplementary', NULL, 9, 93, 7, 2, 29, 1, 200000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends Suppl APP No.2 CY 2018 from 1st qtr to 2nd &amp; 3rd Qtr CY 2018'),
(55, '17015', 'Construction of a Quarantine Checkpoint along Kennon Road, Tuba', 2018, NULL, 'supplementary', NULL, 12, 121, 3, 2, 29, 1, 400000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(56, '17034', 'Construction of Grouted Riprap in School Boundaries, Cayapes', 2018, NULL, 'supplementary', NULL, 7, 62, 5, 2, 29, 1, 500000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(57, '17035', 'Improvement of Badeo School Ground and Fencing, Badeo', 2018, NULL, 'supplementary', NULL, 8, 74, 5, 2, 29, 1, 500000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(58, '17039', 'Construction of Comfort Room at Kapangan National High School Sagubo Annex, Sagubo, Kapangan', 2018, NULL, 'supplementary', NULL, 7, 72, 5, 2, 29, 1, 500000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends Suppl APP CY 2017 to Supp;l APP No. 8 2nd &amp; 3rd Qtr CY 2018'),
(59, '17062', 'Concreating along Alimuyos FT(Bacattey Toplac), Proper, Pudong', 2018, NULL, 'supplementary', NULL, 7, 71, 9, 2, 29, 1, 300000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This Amends Supp\\l APP No.1 CY 2018 from 1st qtr to 2nd &amp; 3rdQtr CY 2018'),
(60, '17080', 'Completion of Concreting/Improvement at Sitio Kagiskis Brgy. Road Bineng', 2018, NULL, 'supplementary', NULL, 9, 88, 9, 2, 29, 1, 500000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This Amends Supp\\l APP No.1 CY 2018 from 1st qtr to 2nd &amp; 3rdQtr CY 2018'),
(61, '17089', 'Construction of Waterworks System Binga Riverside, Tinongdan', 2018, NULL, 'supplementary', NULL, 5, 42, 7, 2, 29, 1, 500000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This Amends Supp\\l APP No.1 CY 2018 from 1st qtr to 2nd &amp; 3rdQtr CY 2018'),
(62, '17091', 'Construction of Additional Water Tank Taloy Sur, Tuba', 2018, NULL, 'supplementary', NULL, 12, 127, 7, 2, 29, 1, 300000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This Amends Supp\\l APP No.1 CY 2018 from 1st qtr to 2nd &amp; 3rdQtr CY 2018'),
(63, '17121', 'Construction of Caman-beey, Calamagan Road Pavement/Tirepath Calamagan, Buguias', 2018, NULL, 'supplementary', NULL, 4, 31, 9, 2, 29, 1, 500000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This Amends Supp\\l APP No.1 CY 2018 from 1st qtr to 2nd &amp; 3rdQtr CY 2018'),
(64, '17132', 'Construction of Tirepath along Anchokey FMR, Abat, Anchokey', 2018, NULL, 'supplementary', NULL, 6, 47, 9, 2, 29, 1, 500000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This Amends Supp\\l APP No.1 CY 2018 from 1st qtr to 2nd &amp; 3rdQtr CY 2018'),
(65, '17137', 'Improvement of Apanberang-Washington Access Road, Pacso, Kabayan', 2018, NULL, 'supplementary', NULL, 6, 56, 9, 2, 29, 1, 500000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This Amends Supp\\l APP No.1 CY 2018 from 1st qtr to 2nd &amp; 3rdQtr CY 2018'),
(66, '17159', 'Improvement of Balluay-Perel FMR, Balluay', 2018, NULL, 'supplementary', NULL, 11, 109, 1, 2, 29, 1, 500000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This Amends Supp\\l APP No.1 CY 2018 from 1st qtr to 2nd &amp; 3rdQtr CY 2018'),
(67, '17171', 'Improvement of Indaoac-Pasiday FMR, Tabaan Sur, Tuba', 2018, NULL, 'supplementary', NULL, 12, 124, 1, 2, 29, 1, 500000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This Amends Supp\\l APP No.1 CY 2018 from 1st qtr to 2nd &amp; 3rdQtr CY 2018'),
(68, '17180', 'Development if Historical Sites and Prospective Tourist Destination of Barangay Ambuklao', 2018, NULL, 'supplementary', NULL, 3, 16, 9, 2, 29, 1, 500000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This Amends Supp\\l APP No.1 CY 2018 from 1st qtr to 2nd &amp; 3rdQtr CY 2018'),
(69, '17181', 'Construction of C.R. at Japas Poblacion Bokod', 2018, NULL, 'supplementary', NULL, 3, 24, 3, 2, 29, 1, 500000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This Amends Supp\\l APP No.1 CY 2018 from 1st qtr to 2nd &amp; 3rdQtr CY 2018'),
(70, '17182', 'Construction of Public Toilet Geweng, Loacan, Itogon', 2018, NULL, 'supplementary', NULL, 5, 40, 3, 2, 29, 1, 200000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This Amends Supp\\l APP No.1 CY 2018 from 1st qtr to 2nd &amp; 3rdQtr CY 2018'),
(71, '17183', 'Fencing of Heritage Park, Balakbak E/S, Balakbak, Kapangan', 2018, NULL, 'supplementary', NULL, 7, 59, 3, 2, 29, 1, 200000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This Amends Supp\\l APP No.1 CY 2018 from 1st qtr to 2nd &amp; 3rdQtr CY 2018'),
(72, 'GF 2018-01', 'Construction of Power House, Benguet Cold Chain Project', 2018, NULL, 'regular', NULL, 9, 92, 10, 2, 30, 1, 500000.00, 'Jul-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(73, 'GF 2018-02', 'Construction of Public Comfort Rooms with Lavatory', 2018, NULL, 'regular', NULL, 9, 92, 10, 1, 30, 1, 2000000.00, 'Jul-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(75, 'GF 2018-04', 'Completion of Banayakew Multi-purpose Building/Livelihood Building, Banayakew, Atok, Benguet', 2018, NULL, 'regular', NULL, 1, 7, 3, 2, 30, 1, 800000.00, 'Apr-2018', 'Apr-2018', 'May-2018', 'May-2018', 'pending', 0, '2018-10-02', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(76, 'GF 2018-05', 'Construction of Reception Building and Comfort Room with Lavatory, Bulala Agri-Eco Farm, Bulal, Bayabas, Sablan', 2018, NULL, 'regular', NULL, 11, 112, 10, 1, 30, 1, 3000000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(77, 'GF 2018-06', 'Construction of Agri-Eci Farm Cottages at Bulala Agri-Eco Farm, Bulala, Bayabas, Sablan', 2018, NULL, 'regular', NULL, 11, 112, 16, 1, 30, 1, 5000000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(78, 'GF 2018-07', 'Construction of CTS Composing Facility, Puguis, La Trinidad', 2018, NULL, 'regular', NULL, 9, 93, 3, 2, 30, 1, 1000000.00, 'Oct-2018', 'Oct-2018', 'Nov-2018', 'Nov-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(79, 'GF 2018-03', 'Improvement of Access going to Mt, Pingingan, Dulpirip, Itogon, Bengue', 2018, NULL, 'regular', NULL, 5, 41, 1, 2, 30, 1, 500000.00, 'Apr-2018', 'Apr-2018', 'May-2018', 'May-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(80, 'GF 2018-08', 'Construction of Septic Vault, Capitol, La Trinidad, Benguet', 2018, NULL, 'regular', NULL, 9, 92, 7, 2, 30, 1, 300000.00, 'Oct-2018', 'Oct-2018', 'Nov-2018', 'Nov-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(81, 'GF 2018-09', 'Construction of Material Recovery Facility, Capitol, La Trinidad, Benguet', 2018, NULL, 'regular', NULL, 9, 92, 10, 2, 30, 1, 300000.00, 'Apr-2018', 'Apr-2018', 'May-2018', 'May-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(82, 'GF 2018-11', 'Construction of Annex Building, Capitol (Phase II)', 2018, NULL, 'regular', NULL, 9, 92, 3, 1, 30, 1, 18000000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(83, 'GF 2018-12', 'Perimeter Fencing of Benguet Sports Complex', 2018, NULL, 'regular', NULL, 9, 92, 11, 1, 30, 1, 4000000.00, 'Apr-2018', 'Apr-2018', 'May-2018', 'May-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(85, 'GF 2018-18', 'Improvement of Native Pig Multiplier Farm @ San Pascual, Tuba, Benguet', 2018, NULL, 'regular', NULL, 12, 122, 16, 2, 30, 1, 1000000.00, 'Apr-2018', 'Apr-2018', 'May-2018', 'May-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(86, 'GF 2018-19', 'Construcction of Comfort Rooms / Lavatories, San Pascual, Tuba', 2018, NULL, 'regular', NULL, 12, 122, 7, 1, 30, 1, 2000000.00, 'Apr-2018', 'Apr-2018', 'May-2018', 'May-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(87, 'GF 2018-20', 'Improvement of Hospital Building and Annexes, Bokod, Benguet', 2018, NULL, 'regular', NULL, 3, 24, 15, 1, 30, 1, 1200000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(88, 'GF 2018-21', 'Improvement of Alley Between Hospital Main Building and Dietary Area, Kapangan, Benguet', 2018, NULL, 'regular', NULL, 7, 69, 15, 2, 30, 1, 300000.00, 'Apr-2018', 'Apr-2018', 'May-2018', 'May-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(89, 'GF 2018-22', 'Construction of Extension of Provincial Water Analysis Laboratory(Additional', 2018, NULL, 'regular', NULL, 9, 92, 7, 2, 30, 1, 1000000.00, 'Apr-2018', 'Apr-2018', 'May-2018', 'May-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(90, 'GF 2018-23', 'Improvement of PEO Bldg./ Extension Phase II (Planning RROW, Survey Section and Motorpool Div.)', 2018, NULL, 'regular', NULL, 9, 96, 3, 1, 30, 1, 3500000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(91, 'GF 2018-24', 'Extension of Motorpool Shed, Parking Area Working Area, Wangal La Trinidad, Benguet', 2018, NULL, 'regular', NULL, 9, 96, 10, 1, 30, 1, 3000000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(92, 'GF 2018-13', 'Improvement of Legislative Building', 2018, NULL, 'regular', NULL, 9, 92, 3, 1, 30, 1, 5000000.00, 'Apr-2018', 'Apr-2018', 'May-2018', 'May-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(93, 'GF 2018-25', 'Construction of Concrete Canal along PEO Compound', 2018, NULL, 'regular', NULL, 9, 92, 12, 2, 30, 1, 1000000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(94, 'GF 2018-34', 'Extension of Benguet Indigenous Peoples Building, Wangal La Trinidad', 2018, NULL, 'regular', NULL, 9, 96, 3, 2, 30, 1, 1000000.00, 'Apr-2018', 'Apr-2018', 'May-2018', 'May-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(95, 'GF 2018-35', 'Construction of Basketball Court at Pasiday, Ampucao, Itogon (Additional)', 2018, NULL, 'regular', NULL, 5, 37, 11, 2, 30, 1, 250000.00, 'Apr-2018', 'Apr-2018', 'May-2018', 'May-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(96, 'GF 2018-36', 'Improvement of Agro-Eco Park Lomon, Kapangan, Benguet', 2018, NULL, 'regular', NULL, 7, 69, 16, 2, 30, 1, 1000000.00, 'Jul-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(97, 'GF 2018-38', 'Construction of Multi-Purpose Building Cattubo, Atok, Benguet', 2018, NULL, 'regular', NULL, 1, 3, 3, 1, 30, 1, 1500000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(98, 'GF 2018-39', 'Improvement of Comfort room, Barangay Hall, Daluprip, Itogon, Benguet', 2018, NULL, 'regular', NULL, 5, 38, 18, 2, 30, 1, 600000.00, 'Jul-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(99, 'GF 2018-40', 'Construction of Public Toilet(Near BPATS Outpost), Alumit, Gumatdang, Itogon, Benguet', 2018, NULL, 'regular', NULL, 5, 39, 18, 2, 30, 1, 500000.00, 'Jul-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(100, 'GF 2018-41', 'Construction of Kinejang Public Toilet, Adaoay, Kabayan, Benguet', 2018, NULL, 'regular', NULL, 6, 46, 18, 2, 30, 1, 500000.00, 'Jul-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(101, 'GF 2018-42', 'Construction of Waiting Shed, Sitio Proper, Datakan, Kapangan, Benguet', 2018, NULL, 'regular', NULL, 7, 64, 10, 2, 30, 1, 500000.00, 'Apr-2018', 'Apr-2018', 'May-2018', 'May-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(102, 'GF 2018-43', 'Completion of Senior Citizens Building Bulalacao, Mankayan, Benguet', 2018, NULL, 'regular', NULL, 10, 99, 6, 1, 30, 1, 2000000.00, 'Apr-2018', 'Apr-2018', 'May-2018', 'May-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(103, 'GF 2018-44', 'Construction of Comfort Room, Sagpat Proper, Sagpat, Kibungan, Benguet', 2018, NULL, 'regular', NULL, 8, 79, 18, 2, 30, 1, 500000.00, 'Apr-2018', 'Apr-2018', 'May-2018', 'May-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(104, 'GF 2018-45', 'Completion of Barangay Hall, Pappa, Sablan, Benguet', 2018, NULL, 'regular', NULL, 11, 114, 3, 2, 30, 1, 800000.00, 'Jul-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(105, 'GF 2018-46', 'Construction of BPATS Outpost, Bayacsan, taloy Norte, Tuba, Benguet', 2018, NULL, 'regular', NULL, 12, 126, 3, 2, 30, 1, 500000.00, 'Jul-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(106, 'GF 2018-47', 'Completion of Police Sub-station and Tourism Information/ Assistant Center, Natubleng Buguias', 2018, NULL, 'regular', NULL, 4, 34, 19, 2, 30, 1, 500000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(107, 'GF 2018-49', 'Improvement of alam-am Nasayotean, Gambang, Bakun, Benguet', 2018, NULL, 'regular', NULL, 2, 12, 14, 2, 30, 1, 1000000.00, 'Jul-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(108, 'GF 2018-50', 'Improvement along Marivic to Gravel Pit Road, Sagpat, Mankayan, Benguet', 2018, NULL, 'regular', NULL, 10, 104, 14, 2, 30, 1, 1000000.00, 'Apr-2018', 'Apr-2018', 'May-2018', 'May-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(109, 'GF 2018-51', 'Construction of PCL-LNB Multi-Purpose Building (Phase II), Wangal, La Trinidad, Benguet', 2018, NULL, 'regular', NULL, 9, 96, 3, 1, 30, 1, 6000000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(110, 'GF 2018-52', 'Improvement of Ligay E/S Ground, Camp 1, Tuba, Benguet', 2018, NULL, 'regular', NULL, 12, 119, 1, 2, 30, 1, 250000.00, 'Oct-2018', 'Oct-2018', 'Nov-2018', 'Nov-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(111, 'GF 2018-53', 'Construction of Shaded Walkway Connecting Registry of Deeds Building and Capitol Building - Main, La Trinidad, Benguet', 2018, NULL, 'regular', NULL, 9, 92, 8, 1, 30, 1, 1600000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(112, 'GF 2018-54', 'Construction of Training Center at Wangal (Phase II), La Trinidad, Benguet', 2018, NULL, 'regular', NULL, 9, 96, 22, 1, 30, 1, 10000000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(113, 'SN-2018-1', 'CONSTRUCTION OF 3-CLASSROOM BUILDING WITH BASIC FACILITIES AT PACALSO ELEMENTARY SCHOOL', 2018, NULL, 'regular', NULL, 5, 41, 5, 1, 4, 1, 6786346.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(114, '18002', 'Bulala Warehouse ground improvement, Agri-Eco Farm, Bulala, Sablan', 2018, NULL, 'supplementary', NULL, 11, 115, 16, 1, 31, 1, 1500000.00, 'Apr-2018', 'Apr-2018', 'May-2018', 'Jun-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This ammends procurement activity from 1st qtr to 2nd qtr'),
(115, '18004', 'Improvement of Nursery Site Access Road at Agri-Eco Farm, Bulala, Bayabas, Sablan', 2018, NULL, 'supplementary', NULL, 11, 115, 16, 1, 31, 1, 1500000.00, 'Apr-2018', 'Apr-2018', 'May-2018', 'Jun-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This ammends procurement activity from 3rd qtr to 2nd qtr'),
(116, '18005', 'Construction of PCCP along National Road Jct. - Diboong - Bangao Provincial Road', 2018, NULL, 'supplementary', NULL, 6, 57, 14, 1, 31, 1, 5000000.00, 'Apr-2018', 'Apr-2018', 'May-2018', 'Jun-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This ammends procurement activity from 1st qtr to 2nd qtr'),
(117, '18006', 'Improvement along Pico-Stockfarm(Puguis - Buyagan - Poblacion) Provincial Road, La Trinidad, Benguet', 2018, NULL, 'supplementary', NULL, 9, 91, 14, 1, 31, 2, 10000000.00, 'Jul-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This ammends procurement activity from 1st qtr to 3rd qtr'),
(118, '18007', 'Improvement along La Trinidad - Capitol - Bineng Provincial Road', 2018, NULL, 'supplementary', NULL, 9, 88, 14, 1, 31, 1, 5000000.00, 'Apr-2018', 'Apr-2018', 'May-2018', 'Jun-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This ammends procurement activity from 1st qtr to 2nd qtr'),
(119, '18008', 'Improvement along Yagyagan - Ampusa Provincial Road', 2018, NULL, 'supplementary', NULL, 12, 121, 14, 1, 31, 1, 5000000.00, 'Apr-2018', 'Apr-2018', 'May-2018', 'Jun-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This ammends procurement activity from 1st qtr to 2nd qtr'),
(120, '18009', 'Improvement along Mankayan - Bato Provincial Road', 2018, NULL, 'supplementary', NULL, 10, 104, 14, 1, 31, 1, 5000000.00, 'Apr-2018', 'Apr-2018', 'May-2018', 'Jun-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This ammends procurement activity from 1st qtr to 2nd qtr'),
(121, '18010', 'Improvement along Bad-ayan - Manhuyhuy Provincial Road', 2018, NULL, 'supplementary', NULL, 4, 35, 14, 1, 31, 1, 5000000.00, 'Apr-2018', 'Apr-2018', 'May-2018', 'Jun-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This ammends procurement activity from 1st qtr to 2nd qtr'),
(122, '18011', 'Rehabilitation of Barangay Health Station at Ba-ayan Proper, Ba-ayan, Tublay', 2018, NULL, 'supplementary', NULL, 13, 131, 20, 1, 31, 2, 1500000.00, 'Oct-2018', 'Oct-2018', 'Nov-2018', 'Nov-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This ammends procurement activity from 1st qtr to 4th qtr; w/ report for change of title'),
(123, '18012', 'Rehabilitation of Canal and Riprapping along Upper Mangga Provincial Road, Tuding, Itogon, Benguet', 2018, NULL, 'supplementary', NULL, 5, 43, 12, 2, 31, 2, 500000.00, 'Oct-2018', 'Oct-2018', 'Nov-2018', 'Nov-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This ammends procurement activity from 1st qtr to 4th qtr; w/ report for change of title'),
(124, '18016', 'Construction of Barangay Health Station, Km. 24, Caliking, Atok', 2018, NULL, 'supplementary', NULL, 1, 2, 19, 1, 31, 1, 2500000.00, 'Apr-2018', 'May-2018', 'May-2018', 'Jun-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This ammends procurement activity from 1st qtr to 2nd qtr'),
(125, '18021', 'Construction of Multi-purpose building at Sitio Sabdang, Poblacion, Sablan', 2018, NULL, 'supplementary', NULL, 11, 115, 3, 1, 31, 1, 2000000.00, 'Oct-2018', 'Oct-2018', 'Nov-2018', 'Nov-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This ammends procurement activity from 1st qtr to 4th qtr; w/ report for change of title'),
(126, '18022', 'Completion of Guinaoang Multi-Purpose Hall, Guinaoang, Mankayan', 2018, NULL, 'supplementary', NULL, 10, 103, 3, 2, 31, 1, 1000000.00, 'Jul-2018', 'Jul-2018', 'Aug-2018', 'Sep-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This ammends procurement activity from 2nd qtr to 3rd qtr'),
(127, '18023', 'Completion of Lubas Multi-Purpose Building, Ansagan, Tuba', 2018, NULL, 'supplementary', NULL, 12, 116, 3, 1, 31, 1, 1200000.00, 'Oct-2018', 'Oct-2018', 'Nov-2018', 'Nov-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This ammends procurement activity from 1st qtr to 4th qtr; w/ report for change of title'),
(128, '18025', 'Completion of Km. 73 Multi-Purpose Hall, Amgaleyguey, Bugiuas', 2018, NULL, 'supplementary', NULL, 4, 25, 3, 1, 31, 1, 1500000.00, 'Jul-2018', 'Jul-2018', 'Aug-2018', 'Sep-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This ammends procurement activity from 2nd qtr to 3rd qtr'),
(129, '18026', 'Improvement of Gymnasium at Tadiangan, Tuba', 2018, NULL, 'supplementary', NULL, 12, 125, 11, 2, 31, 1, 500000.00, 'Jul-2018', 'Jul-2018', 'Aug-2018', 'Sep-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This ammends procurement activity from 1st qtr to 3rd qtr; w/ report Mun. to be implemented'),
(130, '18027', 'Completion of Multi-Purpose Open Gymnasium, Loacan, Itogon', 2018, NULL, 'supplementary', NULL, 5, 40, 11, 1, 29, 1, 1500000.00, 'Jul-2018', 'Jul-2018', 'Aug-2018', 'Sep-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This ammends procurement activity from 1st qtr to 3rd qtr'),
(131, '18032', 'Construction of Footbridge at Meril, Daclan, Tublay', 2018, NULL, 'supplementary', NULL, 13, 134, 8, 2, 31, 1, 500000.00, 'Jul-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This ammends procurement activity from 4th qtr to 3rd qtr'),
(132, '18033', 'Concreting of Cotocot-Abiang Foot Trail, Taba-ao, Kapangan', 2018, NULL, 'supplementary', NULL, 7, 73, 9, 2, 31, 1, 250000.00, 'Apr-2018', 'May-2018', 'May-2018', 'Jun-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This ammends procurement activity from 4th qtr to 3rd qtr'),
(133, '18034', 'Concreting of Bocao Foot Trail, Cuba, Kapangan', 2018, NULL, 'supplementary', NULL, 7, 63, 9, 2, 31, 1, 250000.00, 'Jul-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This ammends procurement activity from 4th qtr to 3rd qtr'),
(134, '18035', 'Construction of footpath from Gwetig going to Poodan, Ekip, Bokod', 2018, NULL, 'supplementary', NULL, 3, 20, 9, 2, 31, 1, 500000.00, 'Apr-2018', 'May-2018', 'May-2018', 'Jun-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This ammends procurement activity from 3rd qtr to 2nd qtr'),
(135, '18036', 'Improvement of pathway with shed leading to Lower Green Valley to Millsite, Camp 6, Tuba', 2018, NULL, 'supplementary', NULL, 12, 121, 9, 2, 31, 1, 1000000.00, 'Apr-2018', 'May-2018', 'May-2018', 'Jun-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This ammends procurement activity from 3rd qtr to 2nd qtr'),
(136, '18039', 'Improvement of Guitley Barangay Road, Beckel, La Trinidad', 2018, NULL, 'supplementary', NULL, 9, 86, 14, 2, 31, 1, 500000.00, 'Oct-2018', 'Oct-2018', 'Nov-2018', 'Nov-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This ammends procurement activity from 1st qtr to 4th qtr; w/ report for change of title'),
(138, '18045', 'Improvement of Pagal Barangay Road,Beckel, Latrinidad', 2018, NULL, 'supplementary', NULL, 9, 86, 14, 1, 31, 1, 2000000.00, 'Apr-2018', 'May-2018', 'May-2018', 'Jun-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This ammends procurement activity from 1st qtr to 2nd qtr'),
(139, '18046', 'Improvement of Barangay Road of Toneleg, Ballay, Kabayan', 2018, NULL, 'supplementary', NULL, 6, 48, 14, 2, 31, 1, 500000.00, 'Apr-2018', 'May-2018', 'May-2018', 'Jun-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This ammends procurement activity from 1st qtr to 2nd qtr'),
(141, '18048', 'Improvement of Bacaog-Bayating to Bawek FMR, Twin Peaks, Tuba', 2018, NULL, 'supplementary', NULL, 12, 128, 14, 2, 31, 1, 750000.00, 'Feb-2018', 'Feb-2018', 'Mar-2018', 'Mar-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This ammends procurement activity from 2nd qtr to 1st qtr'),
(142, '18050', 'Improvement of Liwang-Bolbolo- FMR, Gambang, Bakun', 2018, NULL, 'supplementary', NULL, 2, 12, 14, 2, 31, 1, 1000000.00, 'Jul-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This ammends procurement activity from 1st qtr to 3rd qtr'),
(143, '18052', 'Tirepathing of Limosan- Tenging FMR, Poblacion, Bakun', 2018, NULL, 'supplementary', NULL, 2, 14, 14, 2, 31, 1, 500000.00, 'Feb-2018', 'Feb-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, '0000-00-00', 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This ammends procurement activity from 2nd qtr to 1st qtr');

-- --------------------------------------------------------

--
-- Table structure for table `project_timeline`
--

DROP TABLE IF EXISTS `project_timeline`;
CREATE TABLE IF NOT EXISTS `project_timeline` (
  `plan_id` int(11) NOT NULL,
  `timeline_status` enum('pending','set') NOT NULL DEFAULT 'pending',
  `pre_proc_date` date DEFAULT NULL,
  `advertisement_start` date DEFAULT NULL,
  `advertisement_end` date DEFAULT NULL,
  `pre_bid_start` date DEFAULT NULL,
  `pre_bid_end` date DEFAULT NULL,
  `bid_submission_start` date DEFAULT NULL,
  `bid_submission_end` date DEFAULT NULL,
  `bid_evaluation_start` date DEFAULT NULL,
  `bid_evaluation_end` date DEFAULT NULL,
  `post_qualification_start` date DEFAULT NULL,
  `post_qualification_end` date DEFAULT NULL,
  `award_notice_start` date DEFAULT NULL,
  `award_notice_end` date DEFAULT NULL,
  `contract_signing_start` date DEFAULT NULL,
  `contract_signing_end` date DEFAULT NULL,
  `authority_approval_start` date DEFAULT NULL,
  `authority_approval_end` date DEFAULT NULL,
  `proceed_notice_start` date DEFAULT NULL,
  `proceed_notice_end` date DEFAULT NULL,
  UNIQUE KEY `plan_id_2` (`plan_id`),
  KEY `plan_id` (`plan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_timeline`
--

INSERT INTO `project_timeline` (`plan_id`, `timeline_status`, `pre_proc_date`, `advertisement_start`, `advertisement_end`, `pre_bid_start`, `pre_bid_end`, `bid_submission_start`, `bid_submission_end`, `bid_evaluation_start`, `bid_evaluation_end`, `post_qualification_start`, `post_qualification_end`, `award_notice_start`, `award_notice_end`, `contract_signing_start`, `contract_signing_end`, `authority_approval_start`, `authority_approval_end`, `proceed_notice_start`, `proceed_notice_end`) VALUES
(19, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(34, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(36, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(38, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(39, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(40, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(41, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(43, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(45, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(46, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(47, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(48, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(49, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(50, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(51, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(52, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(53, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(54, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(55, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(56, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(57, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(58, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(59, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(60, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(61, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(62, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(63, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(64, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(65, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(66, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(67, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(68, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(69, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(70, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(71, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(72, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(73, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(75, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(76, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(77, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(79, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(80, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(81, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(82, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(83, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(85, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(86, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(87, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(88, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(89, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(90, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(91, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(92, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(93, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(94, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(95, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(96, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(97, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(98, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(99, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(100, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(101, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(102, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(103, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(104, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(105, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(106, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(107, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(108, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(109, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(110, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(111, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(112, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(113, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(114, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(115, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(116, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(117, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(118, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(119, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(120, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(121, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(122, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(123, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(124, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(125, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(126, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(127, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(128, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(129, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(130, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(131, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(132, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(133, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(134, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(135, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(136, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(138, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(139, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(141, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(142, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(143, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `projtype`
--

DROP TABLE IF EXISTS `projtype`;
CREATE TABLE IF NOT EXISTS `projtype` (
  `projtype_id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  PRIMARY KEY (`projtype_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projtype`
--

INSERT INTO `projtype` (`projtype_id`, `type`, `status`) VALUES
(1, 'FMR', 'active'),
(2, 'Bridge', 'active'),
(3, 'Multi-Purpose Building/Hall/Outpost', 'active'),
(5, 'School Building', 'active'),
(6, 'Senior Citizens Building', 'active'),
(7, 'Domestic Water Supply/Irrigation/Waterworks', 'active'),
(8, 'Footbridges', 'active'),
(9, 'Footpath/Foot Trail', 'active'),
(10, 'Multi-Purpose Shed/Waiting Shed', 'active'),
(11, 'Multi-Purpose Gym/Basketball Count', 'active'),
(12, 'Drainage Canal', 'active'),
(13, 'Flood Control/Riprapping/Slope Protection', 'active'),
(14, 'Provincial Road', 'active'),
(15, 'Health &amp; PHO Facilities', 'active'),
(16, 'Agriculture Services', 'active'),
(17, 'Veterinary Services', 'active'),
(18, 'Comfort Room/Public Toilet', 'active'),
(19, 'Station', 'active'),
(20, 'Health Infastructure', 'active'),
(21, 'Provincial Government Properties', 'active'),
(22, 'Training Center', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `sectors`
--

DROP TABLE IF EXISTS `sectors`;
CREATE TABLE IF NOT EXISTS `sectors` (
  `sector_id` int(11) NOT NULL AUTO_INCREMENT,
  `sector_name` varchar(255) NOT NULL,
  `sector_type` enum('barangay_development','office') NOT NULL,
  `sector_status` enum('active','inactive') NOT NULL DEFAULT 'active',
  PRIMARY KEY (`sector_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sectors`
--

INSERT INTO `sectors` (`sector_id`, `sector_name`, `sector_type`, `sector_status`) VALUES
(1, 'Agricultural Services', 'office', 'active'),
(2, 'Veterinary Services', 'office', 'active'),
(3, 'Engineering Services', 'office', 'active'),
(4, 'Tourism Services', 'office', 'active'),
(5, 'Benguet Cold Chain Project', 'office', 'active'),
(6, 'Coop Dev\'t Services', 'office', 'active'),
(7, 'Small-Medium Enterprises Development Services', 'office', 'active'),
(8, 'Natural Resources Services', 'office', 'active');

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
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `middle_name`, `last_name`, `username`, `password`, `user_type`, `status`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 'admin', 'BAC_SEC', 'active'),
(2, 'Reuel', 'Martinez', 'Bigo', '2Bigo', 'capitol', 'PEO', 'active'),
(3, 'Jayson', 'Velasco', 'Caliway', '3Caliway', 'capitol', 'PGO', 'active'),
(4, 'Ronnel', 'Martinez', 'Bigo', '4Bigo', 'capitol', 'BAC_TWG', 'active'),
(5, 'John', 'None', 'Deo', '5Deo', 'capitol', 'PPDO', 'active'),
(6, 'GUEST', 'GUEST', 'GUEST', '6GUEST', 'capitol', 'GUEST', 'active');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barangays`
--
ALTER TABLE `barangays`
  ADD CONSTRAINT `selected_municipality` FOREIGN KEY (`municipality_id`) REFERENCES `municipalities` (`municipality_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `disqualification_records`
--
ALTER TABLE `disqualification_records`
  ADD CONSTRAINT `disqualification_records_ibfk_1` FOREIGN KEY (`project_bid`) REFERENCES `project_bidders` (`project_bid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `disqualification_records_ibfk_2` FOREIGN KEY (`project_log_id`) REFERENCES `project_logs` (`project_log_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `logs_ibfk_1` FOREIGN KEY (`sender`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `logs_ibfk_2` FOREIGN KEY (`receiver`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `procact`
--
ALTER TABLE `procact`
  ADD CONSTRAINT `plan_activity` FOREIGN KEY (`plan_id`) REFERENCES `project_plan` (`plan_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `project_activity_status`
--
ALTER TABLE `project_activity_status`
  ADD CONSTRAINT `project_activity_status_ibfk_1` FOREIGN KEY (`plan_id`) REFERENCES `project_plan` (`plan_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `project_bidders`
--
ALTER TABLE `project_bidders`
  ADD CONSTRAINT `project_bidders_ibfk_1` FOREIGN KEY (`contractor_id`) REFERENCES `contractors` (`contractor_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `project_bidders_ibfk_2` FOREIGN KEY (`plan_id`) REFERENCES `project_plan` (`plan_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `project_document`
--
ALTER TABLE `project_document`
  ADD CONSTRAINT `project_document_ibfk_1` FOREIGN KEY (`plan_id`) REFERENCES `project_plan` (`plan_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `project_document_ibfk_2` FOREIGN KEY (`added_by`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `project_document_ibfk_3` FOREIGN KEY (`contractor_id`) REFERENCES `contractors` (`contractor_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `project_document_ibfk_4` FOREIGN KEY (`doc_type_id`) REFERENCES `document_type` (`doc_type_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `project_document_images`
--
ALTER TABLE `project_document_images`
  ADD CONSTRAINT `project_document_images_ibfk_1` FOREIGN KEY (`project_document_id`) REFERENCES `project_document` (`project_document_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `project_logs`
--
ALTER TABLE `project_logs`
  ADD CONSTRAINT `project_logs_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `project_logs_ibfk_3` FOREIGN KEY (`plan_id`) REFERENCES `project_plan` (`plan_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `project_observers`
--
ALTER TABLE `project_observers`
  ADD CONSTRAINT `project_observers_ibfk_1` FOREIGN KEY (`plan_id`) REFERENCES `project_plan` (`plan_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `project_observers_ibfk_2` FOREIGN KEY (`observer_id`) REFERENCES `observers` (`observer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `project_plan`
--
ALTER TABLE `project_plan`
  ADD CONSTRAINT `plan_account` FOREIGN KEY (`account_id`) REFERENCES `account_classification` (`account_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `plan_barangay` FOREIGN KEY (`barangay_id`) REFERENCES `barangays` (`barangay_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `plan_fund` FOREIGN KEY (`fund_id`) REFERENCES `funds` (`fund_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `plan_mode` FOREIGN KEY (`mode_id`) REFERENCES `procurement_mode` (`mode_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `plan_municipality` FOREIGN KEY (`municipality_id`) REFERENCES `municipalities` (`municipality_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `plan_type` FOREIGN KEY (`projtype_id`) REFERENCES `projtype` (`projtype_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `project_plan_ibfk_1` FOREIGN KEY (`contractor_id`) REFERENCES `contractors` (`contractor_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `project_timeline`
--
ALTER TABLE `project_timeline`
  ADD CONSTRAINT `project_timeline_ibfk_1` FOREIGN KEY (`plan_id`) REFERENCES `project_plan` (`plan_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
