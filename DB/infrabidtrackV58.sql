-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 12, 2018 at 12:42 AM
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
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

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
(31, '20% PDF 2018', 'active', 'Supplemental'),
(32, 'SB NO. 1', 'active', 'Supplemental'),
(33, 'SB NO. 2', 'active', 'Supplemental'),
(34, 'SB NO. 3', 'active', 'Supplemental'),
(35, 'SB NO. 4', 'active', 'Supplemental'),
(36, 'SB NO. 5', 'active', 'Supplemental'),
(37, 'GF', 'active', 'Supplemental'),
(38, 'SEF', 'active', 'Supplemental'),
(39, 'Trust Fund', 'active', 'Supplemental'),
(40, 'Trust Fund', 'active', 'Supplemental'),
(41, 'Supp\'l Budget', 'active', 'Supplemental'),
(42, 'LDRRMF', 'active', 'Supplemental');

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
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(34, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(35, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(36, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
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
(64, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(65, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(66, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(68, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(69, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(70, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(71, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(72, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(73, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(74, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(75, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(76, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(77, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(79, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(80, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(81, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(82, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(83, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(84, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
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
(97, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(98, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(99, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(100, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(101, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(102, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(103, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(104, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(105, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(108, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
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
(129, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(130, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(131, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(132, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(133, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(134, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(135, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(136, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(137, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(138, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(139, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(140, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(141, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(142, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(143, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(145, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(148, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(149, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(150, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(151, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(152, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(153, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(154, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(156, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(157, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(158, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(159, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(160, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(161, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(162, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(163, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(164, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(165, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(166, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(167, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(168, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(169, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(170, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(172, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(173, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(174, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(175, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(176, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(177, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(178, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(179, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(180, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(181, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(182, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(183, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(184, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(185, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(186, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(187, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(188, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(189, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(190, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(191, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(192, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(193, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(194, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(195, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(196, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(197, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(198, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(199, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(200, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(202, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(203, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(204, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(205, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(207, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(208, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(209, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(210, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(211, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(212, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(213, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(214, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(215, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(216, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(217, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(218, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(219, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(220, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(221, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(222, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(223, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(224, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(225, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(226, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(227, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(228, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(229, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(230, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(231, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(232, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(233, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(234, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(235, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(236, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(237, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(238, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(239, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(240, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(241, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(242, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(243, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(244, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(245, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(246, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(247, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(248, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(249, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(250, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(251, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(252, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(253, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(254, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(255, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(256, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(257, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(258, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(259, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(260, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(261, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(262, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(263, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(264, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(265, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(266, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(267, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(268, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(269, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(270, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(271, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(272, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(273, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(274, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(275, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(276, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(277, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(278, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(279, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(280, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(281, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(282, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(283, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(284, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(285, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(286, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(287, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(288, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(289, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(290, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(291, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(292, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(293, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(294, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(295, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(296, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(297, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(298, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(299, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(300, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(301, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(302, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(303, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(304, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(305, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(306, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(307, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(308, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(309, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(310, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(311, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(312, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(313, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(314, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(315, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(316, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(317, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
(1, 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(2, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(3, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(4, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(5, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(6, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(7, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(8, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(10, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(11, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(12, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(13, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(14, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(15, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(16, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(17, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(18, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(19, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(20, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(21, 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(22, 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(23, 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(24, 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(25, 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(26, 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(27, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(28, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(29, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(30, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(31, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(32, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(33, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(34, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(35, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(36, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(37, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(39, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(40, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
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
(64, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(65, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(66, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(68, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(69, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(70, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(71, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(72, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(73, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(74, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(75, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(76, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(77, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(78, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(79, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(80, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(81, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(82, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(83, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(84, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(85, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(86, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(87, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(88, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(89, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(90, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(91, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(92, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(93, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(94, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(95, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(97, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(98, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(99, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(100, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(101, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(102, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(103, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(104, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(105, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(108, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(110, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(111, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(112, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(113, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(114, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(115, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(116, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(117, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(118, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(119, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(120, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(121, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(122, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(123, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(124, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(125, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(126, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(127, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(129, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(130, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(131, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(132, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(133, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(134, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(135, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(136, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(137, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(138, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(139, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(140, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(141, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(142, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(143, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(145, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(148, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(149, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(150, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(151, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(152, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(153, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(154, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(156, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(157, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(158, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(159, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(160, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(161, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(162, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(163, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(164, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(165, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(166, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(167, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(168, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(169, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(170, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(172, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(173, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(174, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(175, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(176, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(177, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(178, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(179, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(180, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(181, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(182, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(183, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(184, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(185, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(186, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(187, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(188, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(189, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(190, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(191, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(192, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(193, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(194, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(195, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(196, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(197, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(198, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(199, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(200, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(201, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(202, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(203, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(204, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(205, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(207, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(208, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(209, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(210, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(211, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(212, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(213, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(214, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(215, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(216, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(217, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(218, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(219, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(220, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(221, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(222, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(223, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(224, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(225, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(226, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(227, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(228, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(229, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(230, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(231, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(232, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(233, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(234, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(235, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(236, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(237, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(238, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(239, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(240, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(241, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(242, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(243, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(244, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(245, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(246, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(247, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(248, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(249, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(250, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(251, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(252, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(253, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(254, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(255, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(256, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(257, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(258, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(259, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(260, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(261, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(262, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(263, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(264, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(265, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(266, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(267, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(268, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(269, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(270, 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(271, 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(272, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(273, 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(274, 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(275, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(276, 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(277, 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(278, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(279, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(280, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(281, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(282, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(283, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(284, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(285, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(286, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(287, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(288, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(289, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(290, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(291, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(292, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(293, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(294, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(295, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(296, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(297, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(298, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(299, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(300, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(301, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(302, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(303, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(304, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(305, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(306, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(307, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(308, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(309, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(310, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(311, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(312, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(313, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(314, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(315, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(316, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(317, 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending');

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
  `date_added` date DEFAULT NULL,
  `sector_id` int(11) DEFAULT NULL,
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
  KEY `project_plan_ibfk_1` (`contractor_id`),
  KEY `sector_id` (`sector_id`)
) ENGINE=InnoDB AUTO_INCREMENT=318 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_plan`
--

INSERT INTO `project_plan` (`plan_id`, `project_no`, `project_title`, `project_year`, `year_funded`, `project_type`, `date_added`, `sector_id`, `municipality_id`, `barangay_id`, `projtype_id`, `mode_id`, `fund_id`, `account_id`, `abc`, `abc_post_date`, `sub_open_date`, `award_notice_date`, `contract_signing_date`, `status`, `re_bid_count`, `pow_ready`, `date_pow_added`, `contractor_id`, `proposed_bid`, `pre_bid_invite_date`, `eligibility_check_invite_date`, `sub_open_invite_date`, `bid_evaluation_invite_date`, `post_qual_invite_date`, `delivery_completion_invite_date`, `remark`) VALUES
(1, 'SN-2018-1', 'Construction of 3-classroom building with basic facilities at Pacalso Elementary School', 2018, 2018, 'regular', '0001-02-18', 1, 5, 41, 5, 1, 4, 1, 6786346.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(2, 'GF 2018-55', 'Construction of Child Development Center at Otbong, Bobok-Bisal Bokod', 2018, 2018, 'regular', '0001-02-18', 1, 1, 1, 10, 1, 30, 1, 1500000.00, 'Jul-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(3, 'GF 2018-56', 'Construction of Palpaltogan Child Development Center, Paco, Mankayan (additional fund)', 2018, 2018, 'regular', '0001-02-18', 1, 10, 102, 10, 2, 30, 1, 410000.00, 'Jul-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(4, 'GF 2018-58', 'Construction of One-room Kinder School Building, Labilab E/S, Loacan, Itogon', 2018, 2018, 'regular', '0001-02-18', 1, 5, 40, 5, 1, 30, 1, 1200000.00, 'Jul-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(5, '18070', 'Rehabilitation of Gueday Water Works System, Suyoc, Mankayan', 2018, 2018, 'regular', '0001-02-18', 1, 10, 104, 7, 2, 10, 2, 800000.00, 'Feb-2018', 'Feb-2018', 'Mar-2018', 'Mar-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(6, '15011', 'Construction of Hospital Morgue Garage, Outside Male and Female CR Upgrading of Facility, IMH', 2018, 2015, 'supplementary', '0001-02-18', 10, 5, 38, 20, 2, 29, 1, 1000000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(7, '15010', 'Construction of Day Care Center Cayapes, Kapangan', 2018, 2012, 'supplementary', '0001-02-18', 12, 7, 62, 5, 2, 29, 1, 329673.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(8, '18071', 'Rahabilitation of Water Works System, Balili E/S, Mankayan', 2018, 2018, 'regular', '0001-02-18', 1, 10, 104, 7, 2, 10, 2, 500000.00, 'Feb-2018', 'Feb-2018', 'Mar-2018', 'Mar-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(10, '18072', 'Rehabilitation of Nawal E/S Water Works System, Nawal, Bokod', 2018, 2018, 'regular', '0001-02-18', 1, 3, 22, 7, 2, 10, 2, 500000.00, 'Feb-2018', 'Feb-2018', 'Mar-2018', 'Mar-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(11, '18073', 'Rehabilitation of Pilpiloy Water Works System, Pito, Bokod', 2018, 2018, 'regular', '0001-02-18', 1, 3, 23, 7, 2, 10, 2, 500000.00, 'Feb-2018', 'Feb-2018', 'Mar-2018', 'Mar-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(12, '15094', 'Construction of Perimeter and divisional Fence, San Pascual', 2018, 2015, 'supplementary', '0001-02-18', 3, 12, 122, 21, 2, 29, 1, 1000000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(13, '18074', 'Rehabilitation of Danis Water Works System, Basil, Tublay', 2018, 2018, 'regular', '0001-02-18', NULL, 13, 132, 7, 2, 10, 2, 800000.00, 'Feb-2018', 'Feb-2018', 'Mar-2018', 'Mar-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(14, '18075', 'Improvement of Water Works System, Ambuklao, Bokod', 2018, 2018, 'regular', '0001-02-18', 1, 3, 16, 7, 2, 10, 1, 1000000.00, 'Apr-2018', 'Apr-2018', 'May-2018', 'May-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(15, '18076', 'Construction of Water Works System, Caew, Bulalacao, Mankayan', 2018, 2018, 'regular', '0001-02-18', 1, 10, 99, 7, 2, 10, 1, 500000.00, 'Apr-2018', 'Apr-2018', 'May-2018', 'May-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(16, '18077', 'Improvement of FBB AWASAI Water Works System, Banangan, Sablan', 2018, 2018, 'regular', '0001-02-18', 1, 11, 110, 7, 1, 10, 1, 2600000.00, 'Apr-2018', 'Apr-2018', 'May-2018', 'May-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(17, '18078', 'Construction of Apni-Colon Water Works System, San Pascual, Tuba', 2018, 2018, 'regular', '0001-02-18', 1, 12, 122, 7, 2, 10, 1, 500000.00, 'Apr-2018', 'Apr-2018', 'May-2018', 'May-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(18, '18002', 'Bulala Warehouse ground improvement, agri-Eco Farm, Bulala, Sablan', 2018, 2018, 'regular', '0001-02-18', 2, 11, 115, 16, 1, 28, 1, 1500000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(19, '18003', 'Perimeter Fencing at Agri-Eco Farm(P-IV)', 2018, 2018, 'regular', '0001-02-18', 2, 11, 115, 16, 2, 28, 1, 1000000.00, 'Jul-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(20, '18004', 'Improvement of Nursery Site  Access Road at Agri-Eco Farm, Bulala, Bayabas, Sablan', 2018, 2018, 'regular', '0001-02-18', 2, 11, 115, 16, 1, 28, 1, 1500000.00, 'Apr-2018', 'Apr-2018', 'May-2018', 'May-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(21, '18005', 'Construction of PCCP along National Road Jct. – Diboong – Bangao Provincial Road', 2018, 2018, 'regular', '0001-02-18', 2, 6, 57, 14, 1, 28, 1, 5000000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(22, '18006', 'Improvement along Pico-Stockfarm(Puguis – Buyagan- Poblacion ) Provincial Road, La Trinidad, Benguet', 2018, 2018, 'regular', '0001-02-18', 2, 9, 92, 14, 1, 28, 1, 10000000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(23, '18007', 'Improvement along  La Trinidad – Capitol – Bineng Provincial Road', 2018, 2018, 'regular', '2018-10-05', 2, 9, 88, 14, 1, 28, 1, 5000000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(24, '18008', 'Improvement along Yagyaggan – Ampusa Provincial Road', 2018, 2018, 'regular', '0001-02-18', 2, 12, 121, 14, 1, 28, 1, 5000000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(25, '18009', 'Improvement along Mankayan – Bato Provincial Road', 2018, 2018, 'regular', '0001-02-18', 2, 10, 104, 14, 1, 28, 1, 5000000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(26, '18010', 'Improvement along Bad-ayan – Manhuyuhuy Provincial Road', 2018, 2018, 'regular', '0001-02-18', 2, 4, 35, 14, 1, 28, 1, 5000000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(27, '18011', 'Rhabilitation of Barangay health Station at Ba-ayan Proper, Ba-ayan, Tublay', 2018, 2018, 'regular', '0001-02-18', 1, 13, 131, 19, 1, 28, 2, 1500000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(28, '18012', 'Rehabilitation of Canal and Riprapping along Upper Mangga Provincial Road, Tuding, Itogon, Benguet', 2018, 2018, 'regular', '0001-02-18', 2, 5, 43, 14, 2, 28, 2, 500000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(29, '18013', 'Rehabilitation of Badiwan Road, Poblacion, Tuba', 2018, 2018, 'regular', '0001-02-18', 2, 12, 121, 14, 2, 28, 2, 500000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(30, '18014', 'Construction of grouted riprap along the area of Rural Health Center (RHC) Bila, Bokod', 2018, 2018, 'regular', '0001-02-18', 1, 3, 24, 15, 3, 28, 1, 300000.00, 'Apr-2018', 'May-2018', 'May-2018', 'May-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(31, '15099', 'Construction of Forage Nursery and Potting Area, Tuba', 2018, 2015, 'supplementary', '0001-02-18', 2, 12, 121, 16, 2, 29, 1, 300000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(32, '18015', 'Construction of dirty kitchen at the Barangay Health Sub-Station, Sitio Poodan, Ekip, Bokod', 2018, 2018, 'regular', '0001-02-18', 1, 3, 20, 19, 2, 28, 1, 500000.00, 'Apr-2018', 'May-2018', 'May-2018', 'May-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(33, '18016', 'Construction of Barangay Health Station, Km. 24, Caliking, Atok', 2018, 2018, 'regular', '0001-02-18', 1, 1, 2, 19, 1, 28, 1, 2500000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(34, '15084', 'Construction of Sante Footbridge, Tublay Central', 2018, 2015, 'supplementary', '0001-02-18', 1, 13, 135, 8, 2, 29, 1, 150000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(35, '16055', 'Completion of Sub-Clinic, Bocao, Abiang, Atok', 2018, 2016, 'supplementary', '0001-02-18', 1, 1, 1, 20, 2, 29, 1, 300000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(36, '16008', 'Replacement of Roofing of Garage and Ramp, ADH', 2018, 2016, 'supplementary', '0001-02-18', 1, 1, 5, 10, 2, 29, 1, 100000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(37, '18017', 'Construction of Barangay Health Station, Karao, Bokod', 2018, 2018, 'regular', '0001-02-18', 1, 3, 21, 19, 1, 28, 1, 2500000.00, 'Apr-2018', 'May-2018', 'May-2018', 'May-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(39, '16007', 'Improvement/Extension of Stockroom, ADH, Paoay', 2018, 2016, 'supplementary', '0001-02-18', 8, 1, 5, 20, 2, 29, 1, 350000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(40, '18018', 'Completion of Barangay Health Station,', 2018, 2018, 'regular', '0001-02-18', 1, 6, 52, 20, 1, 28, 1, 2500000.00, 'Jul-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(41, '16006', 'Improvement of E.R and Shade, Atok district Hospital', 2016, 2018, 'supplementary', '0001-02-18', 8, 1, 7, 20, 2, 29, 1, 200000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(42, '18019', 'Construction of Barangay Health Station at Ambassador, Tublay', 2018, 2018, 'regular', '0001-02-18', 1, 13, 129, 20, 1, 28, 1, 2500000.00, 'Apr-2018', 'May-2018', 'May-2018', 'May-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(43, '16005', 'Tilling of Wall of the O.R/D.R, Paoay, Atok', 2016, 2018, 'supplementary', '0001-02-18', 8, 1, 5, 20, 2, 29, 1, 500000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(44, '18020', 'Completion of Barangay Abatan Health Station and Child Development Center Building, Abatan, Buguias', 2018, 2018, 'regular', '0001-02-18', 1, 4, 35, 20, 1, 28, 1, 2000000.00, 'Jul-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(45, '16011', 'Construction of Shade Leading Towarads the E.R, Itogon Municipal Hospital', 2016, 2018, 'supplementary', '0001-02-18', 10, 5, 41, 20, 2, 29, 1, 1000000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(46, '18021', 'Construction of Multi-purpose building at Sitio Sabdang, Poblacion, Sablan', 2018, 2018, 'regular', '0001-02-18', 1, 11, 115, 3, 1, 28, 1, 2000000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(47, '16223', 'Construction of Basketball Court in Besocol, Ballay, Kabayan', 2018, 2016, 'supplementary', '0001-02-18', 1, 6, 48, 11, 2, 29, 1, 300000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(48, '18022', 'Completion of Guinaoang Multi-Purpose Hall, Guinaoang, Mankayan', 2018, 2018, 'regular', '0001-02-18', 1, 10, 103, 3, 2, 28, 1, 1000000.00, 'Apr-2018', 'May-2018', 'May-2018', 'May-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(49, '16326', 'Improvement of Minac-Batuan FMR Ballay', 2018, 2016, 'supplementary', '0001-02-18', 2, 6, 48, 1, 2, 29, 1, 800000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(50, '16006', 'Improvement of E.R and Shade, Atok district Hospital', 2018, 2016, 'supplementary', '0001-02-18', 8, 1, 7, 10, 2, 29, 1, 200000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(51, '18023', 'Completion of Lubas Multi-Purpose Building, Ansagan, Tuba', 2018, 2018, 'regular', '0001-02-18', 1, 12, 116, 3, 1, 28, 1, 1200000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(52, '16005', 'Tilling of Wall of the O.R/D.R, Paoay, Atok', 2018, 2016, 'supplementary', '0001-02-18', 8, 1, 5, 20, 2, 29, 1, 500000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(53, '17014', 'Construction of Irrigation Tank at CTS, Puguis, La Trinidad', 2018, 2017, 'supplementary', '0001-02-18', 2, 9, 93, 7, 2, 29, 1, 200000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This ammends Supp\'l APP No. 2 CY 2018 from 1st qtr to 2nd &amp; 3rd Qtr CY 2018'),
(54, '16011', 'Construction of Shade Leading Towards the E.R, Itogon Municipal Hospital', 2018, 2016, 'supplementary', '0001-02-18', 10, 5, 41, 10, 2, 29, 1, 1000000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(55, '17015', 'Construction of a Quarantine Checkpoint along Kennon Road, TUba', 2018, 2017, 'supplementary', '0001-02-18', 2, 12, 121, 14, 2, 29, 1, 400000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends APP CY 2017 to Supp\'l APP No. 8 2nd &amp; 3rd Qtr CY 2018'),
(56, '17034', 'Construction of Grouted Riprap in School Boundaries, Cayapes', 2018, 2017, 'supplementary', '0001-02-18', 1, 7, 62, 13, 2, 29, 1, 500000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This ammends Supp\'l APP No. 2 CY 2018 from 1st qtr to 2nd &amp; 3rd Qtr CY 2018'),
(57, '17035', 'Improvement of Badeo School Ground and Fencing, Badeo', 2018, 2017, 'supplementary', '0001-02-18', 1, 8, 74, 5, 2, 29, 1, 500000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends Supp\'l APP No. 3 CY 2018 from 1st qtr to 2nd &amp; 3rd Qtr CY 2018'),
(58, '18024', 'Improvement of Multipurpose Hall at Central, Kamog, Sablan', 2018, 2018, 'regular', '0001-02-18', 3, 11, 113, 3, 1, 28, 1, 1200000.00, 'Apr-2018', 'May-2018', 'May-2018', 'May-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(59, '17039', 'Construction of Comfort Room at Kapangan National High School Sagubo Annex, Sagubo, Kapangan', 2018, 2017, 'supplementary', '0001-02-18', 1, 7, 72, 5, 2, 29, 1, 500000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends APP CY 2017 to Supp\'l APP No.8 2nd &amp; 3rd Qtr CY 2018'),
(60, '17062', 'Concreting along Alimuyos FT (Bacattey Toplac), Proper, Pudong', 2018, 2017, 'supplementary', '0001-02-18', 2, 7, 71, 9, 2, 29, 1, 300000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends Supp\'l APP No. 1 CY 2018 from 1st qtr to 2nd &amp; 3rd Qtr CY 2018'),
(61, '16215', 'Construction of Federation of Senior Citizens Building, Phase II, Poblacion', 2018, 2016, 'supplementary', '0001-02-18', 1, 6, 57, 6, 2, 29, 1, 1000000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(62, '17080', 'Completion of Concreting/Improvement ay SItio Kagiskis Brgy. ROad Bineng', 2018, 2017, 'supplementary', '0001-02-18', 2, 9, 88, 14, 2, 29, 1, 500000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends Supp\'l APP No. 1 CY 2018 from 1st qtr to 2nd &amp; 3rd Qtr CY 2018'),
(64, '16181', 'Completion of Tawangan Multi-Purpose Building or Hall, Tawangan', 2018, 2016, 'supplementary', '0001-02-18', 3, 6, 58, 3, 2, 29, 1, 100000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(65, '17091', 'Construction of Additional Water Tank Taloy Sur, Tuba', 2018, 2017, 'supplementary', '2018-10-05', 1, 12, 127, 7, 2, 29, 1, 300000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends Supp\'l APP No. 1 CY 2018 from 1st qtr to 2nd &amp; 3rd Qtr CY 2018'),
(66, '16087', 'Construction of Polis Barrio School Cottage Building, Poblacion', 2018, 2016, 'supplementary', '0001-02-18', 1, 8, 78, 5, 2, 29, 1, 1000000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(68, '17132', 'Construction of Tirepath along Anchokey FMR, Abat, Anchokey', 2018, 2017, 'supplementary', '0001-02-18', 2, 6, 47, 14, 2, 29, 1, 500000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends Supp\'l APP No. 1 CY 2018 from 1st qtr to 2nd &amp; 3rd Qtr CY 2018'),
(69, '17137', 'Improvement of Apanberang-Washington Access Road, Pacso, Kabayan', 2018, 2017, 'supplementary', '0001-02-18', 2, 6, 56, 14, 3, 29, 1, 500000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends Supp\'l APP No. 1 CY 2018 from 1st qtr to 2nd &amp; 3rd Qtr CY 2018'),
(70, '17159', 'Improvement of Ballulay-Perel FMR, Ballulay', 2018, 2017, 'supplementary', '0001-02-18', 2, 11, 109, 1, 2, 29, 1, 500000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends Supp\'l APP No. 3 CY 2018 from 1st qtr to 2nd &amp; 3rd Qtr CY 2018'),
(71, '17171', 'Improvement of Indaoao-Pasiday FMR, Tabaan Sur, Tuba', 2018, 2017, 'supplementary', '0001-02-18', 2, 12, 124, 1, 2, 29, 1, 500000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends Supp\'l APP No. 1 CY 2018 from 1st qtr to 2nd &amp; 3rd Qtr CY 2018'),
(72, '17180', 'Development of Historical Sites and Prospective Tourist Destination of Barangay Ambuklao', 2018, 2017, 'supplementary', '0001-02-18', 2, 3, 16, 19, 2, 29, 1, 500000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends Supp\'l APP No. 3 CY 2018 from 1st qtr to 2nd &amp; 3rd Qtr CY 2018'),
(73, '17181', 'Construction of C.R. at Japas Poblacion, Bokod', 2018, 2017, 'supplementary', '0001-02-18', 1, 3, 24, 18, 2, 29, 1, 500000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends Supp\'l APP No. 2 CY 2018 from 1st qtr to 2nd &amp; 3rd Qtr CY 2018'),
(74, '17182', 'Construction of Public Toilet Geweng, Loacan, Itogon', 2018, 2017, 'supplementary', '0001-02-18', 1, 5, 40, 18, 2, 29, 1, 200000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends Supp\'l APP No. 4 CY 2018 from 1st qtr to 2nd &amp; 3rd Qtr CY 2018'),
(75, '17183', 'Fencing of Heritage Park, Balakbak E/S, Balakbak, Kapangan', 2018, 2017, 'supplementary', '0001-02-18', 1, 7, 59, 3, 2, 29, 1, 200000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends Supp\'l APP No. 1 CY 2018 from 1st qtr to 2nd &amp; 3rd Qtr CY 2018'),
(76, '18025', 'Completion of Km. 73 Multi-purpose Hall, Amgaleyguey, Buguias', 2018, 2018, 'regular', '0001-02-18', 3, 4, 25, 3, 1, 28, 1, 1500000.00, 'Apr-2018', 'May-2018', 'May-2018', 'May-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(77, '18026', 'Improvement of Gymnasium at Tadiangan, Tuba', 2018, 2018, 'regular', '0001-02-18', 1, 12, 125, 11, 2, 28, 1, 500000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(78, '18027', 'Completion of Multi-pupose Open Gymnasium, Coacan, Itogon', 2018, 2018, 'regular', '0001-02-18', 1, 5, 40, 11, 1, 28, 1, 1500000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(79, '17184', 'Construction of Watertank, Nagawaan, Balili(additional)', 2018, 2017, 'supplementary', '0001-02-18', 1, 10, 97, 7, 2, 29, 1, 150000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends APP CY 2017 to Supp\'l APP No. 8 2nd &amp; #rd Qtr CY 2018'),
(80, '18028', 'Construction of Multi-purpose Open Gym at Simpa, Ampucao, Itogon (Phase II)', 2018, 2018, 'regular', '0001-02-18', 1, 5, 37, 11, 1, 28, 1, 4000000.00, 'Jul-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(81, '17185', 'Improvement of Farm to Market Road at Maebat, Gusaran', 2018, 2017, 'supplementary', '2018-10-05', 2, 6, 53, 1, 2, 29, 1, 597701.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amend APP CY 2017 to Suppl APP No. 8 2nd &amp; 3rd Qtr CY 2018'),
(82, '18029', 'Construction of Multi-purpose Open Gym, Sombrero, Ambuclao, Bokod', 2018, 2018, 'regular', '0001-02-18', 1, 3, 16, 11, 1, 28, 1, 4000000.00, 'Jul-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(83, '16013', 'Improvement of School Fence and ENtrance Gate with Ground Improvement', 2018, 2016, 'supplementary', '0001-02-18', 1, 9, 92, 5, 2, 29, 1, 600000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends Supp\'l APP No. 1 CY 2018 from 1st qtr to 2nd &amp; 3rd Qtr CY 2018'),
(84, '16016', 'Finishing of Waiting Lounge at CTS Puguis, La Trinidad', 2018, 2016, 'supplementary', '0001-02-18', 1, 9, 93, 10, 2, 29, 1, 200000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends Supp\'l APP No. 2 CY 2018 from 1st qtr to 2nd &amp; 3rd Qtr CY 2018'),
(85, '18030', 'Construction of Clipper footbridge, Lasigan, Cabiten, Mankayan', 2018, 2018, 'regular', '0001-02-18', 2, 10, 100, 2, 2, 28, 1, 250000.00, 'Jul-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(86, '16024', 'Establishm,ent of Provincial Organic Swine and Poultry Demo, San Pascual, Tuba', 2018, 2016, 'supplementary', '0001-02-18', 2, 12, 122, 16, 2, 29, 1, 100000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends Supp\'l APP No. 1 CY 2018 from 1st qtr to 2nd &amp; 3rd Qtr CY 2018'),
(87, '16088', 'Construction of Teachers Cottage Langbis Primary School Ambongdolan', 2018, 2016, 'supplementary', '0001-02-18', 1, 13, 130, 5, 2, 29, 1, 800000.00, 'Jun-2018', 'Jul-2018', 'Jul-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends Supp\'l APP No. 2 CY 2018 from 1st qtr to 2nd &amp; 3rd Qtr CY 2018'),
(88, '18031', 'Construction of Footbridge, Sitio Limingaling, Ampucao, Itogon', 2018, 2018, 'regular', '0001-02-18', 2, 5, 37, 2, 1, 28, 1, 2000000.00, 'Jul-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(89, '16089', 'Construction of Enrique Jose E/S Water Works System, Madaymen', 2018, 2016, 'supplementary', '0001-02-18', 1, 8, 76, 7, 2, 29, 1, 800000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends Supp\'l APP No. 2 CY 2018 from 1st qtr to 2nd &amp; 3rd Qtr CY 2018'),
(90, '18032', 'Construction of Footbridge at Meril, Daclan, Tublay', 2018, 2018, 'regular', '0001-02-18', 2, 13, 134, 2, 2, 28, 1, 500000.00, 'Oct-2018', 'Oct-2018', 'Nov-2018', 'Nov-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(91, '18033', 'Concreting of Cotocot-Abiang Foot Trail, Taba-ao, Kapangan', 2018, 2018, 'regular', '0001-02-18', 1, 7, 73, 9, 2, 28, 1, 250000.00, 'Oct-2018', 'Oct-2018', 'Nov-2018', 'Nov-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(92, '16122', 'Construction of Spelin Hanging Bridge, Uyoc, Gadang', 2018, 2016, 'supplementary', '0001-02-18', 1, 7, 65, 2, 2, 29, 1, 500000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends Supp\'l APP No. 2 CY 2018 from 1st qtr to 2nd &amp; 3rd Qtr CY 2018'),
(93, '16228', 'Construction of Centralize Drainage Canal, Central Beckel, La Trinidad', 2018, 2016, 'supplementary', '0001-02-18', 2, 9, 86, 12, 2, 29, 1, 200000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(94, '16126', 'Construction of Footbridge - Bileng 1 in Tacadag, Kibungan', 2018, 2016, 'supplementary', '0001-02-18', 1, 8, 80, 8, 2, 29, 1, 350000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends Supp\'l APP No. 2 CY 2018 from 1st qtr to 2nd &amp; 3rd Qtr CY 2018'),
(95, '18033', 'Concreting of Cotocot-Abiang Foot Trail, Taba-ao, Kapangan', 2018, 2018, 'regular', '2018-10-05', 1, 7, 73, 9, 2, 28, 1, 250000.00, 'Oct-2018', 'Oct-2018', 'Nov-2018', 'Nov-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(97, '16168', 'Concreting of Sucong Footpath Banangan, Sablan', 2018, 2016, 'supplementary', '0001-02-18', 1, 11, 110, 9, 2, 29, 1, 150000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends Supp\'l APP No. 2 CY 2018 from 2nd qtr to 2nd &amp; 3rd Qtr CY 2018'),
(98, '18034', 'Concreting of Bocao Foot Trail, Cuba, Kapangan', 2018, 2018, 'regular', '0001-02-18', 1, 7, 63, 9, 2, 28, 1, 250000.00, 'Oct-2018', 'Oct-2018', 'Nov-2018', 'Nov-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(99, '16169', 'Concreting of Banangan Footpath, Ambacuag', 2018, 2016, 'supplementary', '0001-02-18', 1, 11, 110, 9, 2, 29, 1, 200000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends Supp\'l APP No. 2 CY 2018 from 2nd qtr to 2nd &amp; 3rd Qtr CY 2018'),
(100, '18035', 'Construction of footpath from Gwetig going to Poodan, Ekip, Bokod', 2018, 2018, 'regular', '0001-02-18', 1, 3, 20, 9, 2, 28, 1, 500000.00, 'Jul-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(101, '16390', 'Construction of Farmers Bodega, Mankengaw, Balili', 2018, 2016, 'supplementary', '2018-10-05', 1, 10, 97, 10, 2, 29, 1, 250000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(102, '16180', 'Construction of Barangay Multi - Purpose Building/ Hall Comfort Room', 2018, 2016, 'supplementary', '0001-02-18', 2, 6, 57, 3, 2, 29, 1, 500000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends APP CY 2017 to Suppl APP No. 8, 2nd &amp; 3rd Qtr CY 2018'),
(103, '16362', 'Concreting of Siksiko Road, Cabiten, Mankayan', 2018, 2016, 'supplementary', '0001-02-18', 2, 10, 100, 14, 2, 29, 1, 600000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(104, '16189', 'Construction of Waterworks System, Dalipey', 2018, 2016, 'supplementary', '0001-02-18', 1, 2, 11, 7, 2, 29, 1, 150000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends Supp\'l APP No. 4 CY 2018 from 2nd qtr to 2nd &amp; 3rd Qtr CY 2018'),
(105, '16198', 'Improvement of Inuman Water Works, Ballay, Kabayan', 2018, 2016, 'supplementary', '0001-02-18', 1, 6, 48, 7, 2, 29, 1, 100000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends Supp\'l APP No. 2 CY 2018 from 2nd qtr to 2nd &amp; 3rd Qtr CY 2018'),
(108, '18036', 'Improvement of pathway with shed leading to Lower Green Valley to Millsite, Camp 6, Tuba', 2018, 2018, 'regular', '0001-02-18', 1, 12, 121, 9, 2, 28, 1, 1000000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(110, '18037', 'Improvement of Macbas to Beyeng FMR, Sinacbat, Bakun', 2018, 2018, 'regular', '0001-02-18', 2, 2, 15, 14, 2, 28, 1, 1000000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(111, '16227', 'Construction of Drainage Canal with Cover, Central Balili, La Trinidad', 2018, 2016, 'supplementary', '0001-02-18', 2, 9, 85, 12, 2, 29, 1, 150000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends Supp\'l APP No. 2 CY 2018 from 2nd qtr to 2nd &amp; 3rd Qtr CY 2018'),
(112, '18038', 'Improvement of Kayapa to Bulisay FMR, Kayapa, Bakun', 2018, 2018, 'regular', '0001-02-18', 2, 2, 13, 14, 1, 28, 1, 2000000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(113, '16207', 'Construction of Water Tank at Sitio Payacpac Nangalisan, Tuba', 2018, 2016, 'supplementary', '0001-02-18', 1, 12, 120, 7, 2, 29, 1, 100000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(114, '15167', 'Construction of Tirepath at Simbonan, Pito', 2018, 2016, 'supplementary', '0001-02-18', 1, 3, 23, 14, 2, 29, 1, 500000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends Supp\'l APP No. 5 CY 2018 from 1st qtr to 2nd &amp; 3rd Qtr CY 2018'),
(115, '16134', 'Construction of Tanibao Footbridge, Tublay Central', 2018, 2016, 'supplementary', '0001-02-18', 1, 13, 135, 8, 2, 29, 1, 100000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(116, '14068', 'Construction of Watertank, Nagawaan, Balili', 2018, 2014, 'supplementary', '0001-02-18', 1, 10, 97, 7, 2, 29, 1, 50000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends APP CY 2014 to S APP CY 2018, 2nd &amp; 3rd Qtr CY 2018'),
(117, '18039', 'Improvement of Guitley Barangay Road, Lubas, La Trinidad', 2018, 2018, 'regular', '0001-02-18', 2, 9, 90, 14, 2, 28, 1, 500000.00, 'Apr-2018', 'Apr-2018', 'May-2018', 'May-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(118, '13033', 'COnstruction of Water Distribution Tank at Lower Ampusa, Yagyagan, Tadiangan, Tuba', 2018, 2013, 'supplementary', '0001-02-18', 1, 12, 125, 7, 2, 29, 1, 201408.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends Supp\'l APP No. 1 CY 2018 from 1st qtr to 2nd &amp; 3rd Qtr CY 2018'),
(119, '17109', 'Improvement of Dituan Barangay Road, Pasdong, Atok', 2018, 2017, 'supplementary', '0001-02-18', 2, 1, 6, 14, 2, 29, 1, 500000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(120, '18040', 'Improvement of Boted Tawang FMR, Tawang La Trinidad', 2018, 2018, 'regular', '0001-02-18', 2, 9, 95, 1, 2, 28, 1, 500000.00, 'Apr-2018', 'Apr-2018', 'May-2018', 'May-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(121, '12019', 'Construction of Day Care Center(Completion) Cayapes, Paykek, Kapangan', 2018, 2012, 'supplementary', '0001-02-18', 1, 7, 68, 5, 2, 29, 1, 329673.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends Supp\'l APP No. 1 CY 2018 from 1st qtr to 2nd &amp; 3rd Qtr CY 2018'),
(122, '18041', 'Improvement of Pasbol-Impugong FMR, Sebang, Buguias', 2018, 2018, 'regular', '0001-02-18', 2, 4, 139, 1, 2, 28, 1, 500000.00, 'Apr-2018', 'Apr-2018', 'May-2018', 'May-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(123, '14108', 'Construction of Tirepath along Sawiingan to Bua Barangay Road, Naguey', 2018, 2017, 'supplementary', '0001-02-18', 1, 1, 4, 9, 2, 29, 1, 500000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(124, '18042', 'Improvement of Balintag-DekanRoad(Makbas Section), Buguias', 2018, 2018, 'regular', '0001-02-18', 2, 4, 35, 14, 2, 28, 1, 500000.00, 'Apr-2018', 'Apr-2018', 'May-2018', 'May-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(125, '17182', 'Improvement and Widening of the Foot trail Leading to DMMH bejeng to Mariano Lake-Asin Hot Spring, Daclan, Bokod', 2018, 2017, 'supplementary', '0001-02-18', 1, 3, 19, 9, 2, 29, 1, 300000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends Supp\'l APP No. 2 CY 2018 from 1st qtr to 2nd &amp; 3rd Qtr CY 2018'),
(126, '18043', 'Improvement of Ballay Liang To Taaw FMR, Ballay, Kabayan', 2018, 2018, 'regular', '0001-02-18', 2, 6, 48, 1, 1, 28, 1, 2000000.00, 'Apr-2018', 'Apr-2018', 'May-2018', 'May-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(127, '17031', 'Construction of Stage for Bokod NHS, Ambangeg Campus, Daclan, Bokod', 2018, 2017, 'supplementary', '0001-02-18', 1, 3, 19, 5, 2, 29, 1, 400000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(129, 'SB1 17082', 'Construction of Septic Tank and Installation of Pipeline System &amp; Improvement of Ramp and Handrails NBDH', 2018, 2017, 'supplementary', '0001-02-18', 2, 4, 35, 7, 2, 29, 1, 346400.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends APP CY 2017 to Suppl APP No. 8 2nd &amp; 3rd Qtr CY 2018'),
(130, 'SB1 17170', 'Improvement of Binungbong - Toybungan FMR, Tabaan Norte', 2018, 2017, 'supplementary', '0001-02-18', 2, 12, 123, 1, 2, 29, 1, 500000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends APP CY 2017 to Suppl APP No. 8 2nd &amp; 3rd Qtr CY 2018'),
(131, '17023-SB1', 'Construction of Comfort Room at the Heritage Park, Balakbak, Kapangan', 2018, 2017, 'supplementary', '0001-02-18', 1, 7, 59, 18, 2, 29, 1, 500000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends Supp\'l APP No. 1 CY 2018 from 1st qtr to 2nd &amp; 3rd Qtr CY 2018'),
(132, '17084', 'Construction of domestic Water System for Tikey proper', 2018, 2017, 'supplementary', '0001-02-18', 1, 3, 137, 7, 2, 29, 1, 500000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(133, 'SB1 2017-0623', 'Construction of Waiting Shed, Cayapes FMR, Bagong, Sablan', 2018, 2017, 'supplementary', '0001-02-18', 1, 11, 108, 10, 2, 29, 1, 250000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends APP CY 2017 to Suppl APP No. 8 2nd &amp; 3rd Qtr CY 2018'),
(134, '17026', 'COnstruction of Lamagan - Litalit View Deck at Batangan, Tacadang, Kibungan', 2018, 2017, 'supplementary', '0001-02-18', 2, 8, 80, 19, 2, 29, 1, 600000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends APP CY 2017 to Suppl APP No. 8 2nd &amp; 3rd Qtr CY 2018'),
(135, 'SB1 17085', 'Construction of Mabilig - Aquili Footbridge, Taneg, Mankayan(Additional)', 2018, 2017, 'supplementary', '0001-02-18', 1, 10, 107, 8, 2, 29, 1, 880000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends APP CY 2017 to Suppl APP No. 8 2nd &amp; 3rd Qtr CY 2018'),
(136, 'SB1 17095', 'Establishment of Provl Organic Swine &amp; Poultry Farm, San Pascual, Tuba(Const. of Phase I Storage Building for Feeds Supplies and Tools for Organic/Native Swine Demo Farm, San Pascual, Tuba', 2018, 2017, 'supplementary', '0001-02-18', 2, 12, 122, 16, 2, 29, 1, 300000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends Suppl APP No. 1 CY 2018 from 1st qtr to 2nd qtr &amp; 3rd Qtr CY 2018'),
(137, '17121', 'Construction of Caman-beey, Calamagan Road Pavement or Tirepath Calamagan, Buguias', 2018, 2017, 'supplementary', '0001-02-18', 2, 4, 31, 24, 2, 29, 1, 500000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(138, '17122', 'Improvement of Bot-oan-Ponopon FMR, Catlubong', 2018, 2017, 'supplementary', '0001-02-18', 2, 4, 36, 1, 2, 29, 1, 500000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(139, '17089', 'Construction of Waterworks System Binga Riverside,Tinongdan', 2018, 2017, 'supplementary', '0001-02-18', 1, 5, 42, 7, 2, 29, 1, 500000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(140, 'SB1 17033', 'Const. of Footbridge at Riverside, Camp 6, Tuba (additional)', 2018, 2017, 'supplementary', '0001-02-18', 1, 12, 121, 8, 2, 32, 1, 170000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amend Suppl APP No. 1 CY 2018 from 1st qtr to 2nd qtr &amp; 3rd Qtr CY 2018'),
(141, '17135', 'Improvement of Balang-Sokong-Penanchay-Talukip-Cabel FMR, Eddet', 2018, 2017, 'supplementary', '0001-02-18', 2, 6, 52, 1, 2, 29, 1, 500000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(142, 'SB4 2017-061', 'Completion of Tabbacan Barangay Health Station of Birthing Facility', 2018, 2017, 'supplementary', '0001-02-18', 1, 4, 35, 19, 2, 35, 1, 600000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends APP CY 2017 to Suppl APP No. 8 2nd &amp; 3rd Qtr CY 2018'),
(143, 'SB2 2016-77', 'Fencing of Balili National High School in Balili, Mankayan', 2018, 2016, 'supplementary', '0001-02-18', 1, 10, 97, 23, 2, 33, 1, 100000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends APP CY 2016 to Supp\'l APP No. 8 2nd &amp; 3rd Qtr CY 2018'),
(145, '18044', 'Improvement of Guitley Barangay Road, Lubas, La Trinidad', 2018, 2018, 'regular', '0001-02-18', 2, 9, 90, 14, 1, 28, 1, 2000000.00, 'Apr-2018', 'Apr-2018', 'May-2018', 'May-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(148, '18045', 'Improvement of Pagal Barangay Road, Beckel, La Trinidad', 2018, 2018, 'regular', '0001-02-18', 2, 9, 86, 14, 1, 28, 1, 2000000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(149, 'SB2 16061', 'Improvement of Guioeng Kimpit FMR, Amlimay, Buguias', 2018, 2016, 'supplementary', '0001-02-18', 2, 4, 26, 1, 2, 33, 1, 200000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends APP CY 2016 to Supp\'l APP No. 8 2nd &amp; 3rd Qtr CY 2018'),
(150, '18046', 'Improvement of Barangay Road of Toneleg, Ballay, Kabayan', 2018, 2018, 'regular', '0001-02-18', 2, 6, 48, 14, 2, 28, 1, 500000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(151, 'SB2 2016-0621', 'Abatan - Kabayan - Gurel National Road to Alapang Elementary Schoold Road Opening', 2018, 2016, 'supplementary', '0001-02-18', 2, 4, 35, 14, 2, 33, 1, 500000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends APP CY 2016 to Supp\'l APP No. 8 2nd &amp; 3rd Qtr CY 2018'),
(152, 'SB5 2015-5', 'Concreting of Keddeng - Batag Footpath in Banangan, Sablan', 2018, 2015, 'supplementary', '0001-02-18', 1, 11, 110, 9, 2, 36, 1, 150000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends APP CY 2017 to Supp\'l APP No. 8 2nd &amp; 3rd Qtr CY 2018'),
(153, '17139', 'Improvement of Barangay road, Boklaoan, Kapangan', 2018, 2017, 'supplementary', '0001-02-18', 2, 7, 61, 14, 2, 29, 1, 500000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(154, 'SB5 2015-3', 'Const. of Footbridge at Riverside, Camp 6, Tuba', 2018, 2015, 'supplementary', '0001-02-18', 1, 12, 121, 9, 2, 36, 1, 200000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends Supp\'l APP No. 1 CY 2018 from 1st qtr to 2nd &amp; 3rd Qtr CY 2018'),
(156, '18047', 'Improvement of Tawangan-Pacac Road, Tadiangan, Tuba', 2018, 2018, 'regular', '0001-02-18', 2, 12, 125, 14, 2, 28, 1, 500000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(157, 'SB5 2015-67', 'Construction of Bageng Waterworks System, Batan', 2018, 2015, 'supplementary', '0001-02-18', 1, 6, 50, 7, 2, 36, 1, 200000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends Supp\'l APP No. 1 CY 2018 from 1st qtr to 2nd &amp; 3rd Qtr CY 2018'),
(158, '18048', 'Improvement of Bacaog-Bayating to Bawek FMR, Twin Peaks, Tuba', 2018, 2018, 'regular', '0001-02-18', 2, 12, 128, 1, 2, 28, 1, 750000.00, 'Apr-2018', 'May-2018', 'May-2018', 'May-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(159, '17101', 'Construction of Slope Protection and Drainage Canal at Acbab, Sagpat', 2018, 2017, 'supplementary', '0001-02-18', 2, 8, 79, 13, 2, 29, 1, 300000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(160, '18049', 'Improvement of Obanga Crossing FMR, Baculongan Sur, Buguias', 2018, 2018, 'regular', '0001-02-18', 2, 4, 28, 1, 2, 28, 1, 500000.00, 'Apr-2018', 'May-2018', 'May-2018', 'May-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(161, 'SB2 2015-062', 'Construction of Hospital Morgue of Abatan Emergency Hospital (Additional), Abatan', 2018, 2015, 'supplementary', '0001-02-18', 1, 4, 35, 15, 2, 33, 1, 500000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends APP CY 2015 to Supp\'l APP No. 8 2nd &amp; 3rd Qtr CY 2018'),
(162, '18050', 'Improvement of Liwang-Bolbolo- FMR, Gambang, Bakun', 2018, 2018, 'regular', '0001-02-18', 2, 2, 12, 1, 2, 28, 1, 1000000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(163, '17004', 'Construction of Septic Tank Drainage, La Trinidad, BeGH', 2018, 2017, 'supplementary', '0001-02-18', 2, 9, 92, 12, 2, 29, 1, 1000000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(164, '18051', 'Improvement of Halsema-Upper Nakiangan FMR, Abatan, Buguias', 2018, 2018, 'regular', '0001-02-18', 2, 4, 35, 1, 2, 28, 1, 500000.00, 'Apr-2018', 'May-2018', 'May-2018', 'May-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(165, 'GF 2018-06-1', 'Construction of Pavement, Topdac Elementary School, Atok', 2018, 2018, 'supplementary', '0001-02-18', 2, 1, 8, 24, 2, 37, 1, 500000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends Supp\'l APP No. 4 CY 2018 from 1st qtr to 2nd &amp; 3rd Qtr CY 2018'),
(166, '17147', 'Improvement of Buhaw Road in Puguis La Trinidad, Puguis', 2018, 2016, 'supplementary', '0001-02-18', 2, 9, 93, 14, 2, 29, 1, 500000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(167, '18052', 'Tirepathing of Limosan-Tenging FMR, Poblacion, Bakun', 2018, 2018, 'regular', '0001-02-18', 2, 2, 14, 1, 2, 28, 1, 500000.00, 'Apr-2018', 'May-2018', 'May-2018', 'May-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(168, '17013', 'Construction of Barn House, OPAG, Bayabas, Sablan', 2018, 2017, 'supplementary', '0001-02-18', 2, 11, 112, 16, 2, 29, 1, 1000000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(169, '18053', 'Improvement of Loo-Pan-Ayaoan FMR, Loo, Buguias', 2018, 2018, 'regular', '0001-02-18', 2, 4, 33, 1, 2, 28, 1, 250000.00, 'Jul-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(170, 'SB2 2015- 062', 'Construction of Hospital Morgue of Abatan Emergency Hospital (Additional) Abatan', 2018, 2015, 'supplementary', '0001-02-18', 1, 4, 35, 15, 2, 33, 1, 500000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends APP CY 2015 to SUPP\'l APP No. 8 2nd &amp; 3rd Qtr CY 2018'),
(172, '17038', 'Improvement of School Ground at TSHI Extension, Tublay Central', 2018, 2017, 'supplementary', '0001-02-18', 1, 13, 135, 5, 2, 29, 1, 250000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '');
INSERT INTO `project_plan` (`plan_id`, `project_no`, `project_title`, `project_year`, `year_funded`, `project_type`, `date_added`, `sector_id`, `municipality_id`, `barangay_id`, `projtype_id`, `mode_id`, `fund_id`, `account_id`, `abc`, `abc_post_date`, `sub_open_date`, `award_notice_date`, `contract_signing_date`, `status`, `re_bid_count`, `pow_ready`, `date_pow_added`, `contractor_id`, `proposed_bid`, `pre_bid_invite_date`, `eligibility_check_invite_date`, `sub_open_invite_date`, `bid_evaluation_invite_date`, `post_qual_invite_date`, `delivery_completion_invite_date`, `remark`) VALUES
(173, 'GF 2017-15', 'Improvement of Trail and Provision of Handrail at Paterno Cav, Ambongdolan, Tublay', 2018, 2017, 'supplementary', '0001-02-18', 2, 13, 130, 9, 2, 37, 1, 400000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends Supp\'l APP No. 4 CY 2018 from 1st qtr to 2nd &amp; 3rd Qtr CY 2018'),
(174, 'GF 2017-17', 'Completion of Comfort Room, Bobok, BIsal', 2018, 2017, 'supplementary', '0001-02-18', 1, 3, 18, 18, 2, 37, 1, 400000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends Supp\'l APP No. 4 CY 2018 from 1st qtr to 2nd &amp; 3rd Qtr CY 2018'),
(175, '17033', 'Construction of Perimeter Fence at Palew E/S, Caponga, Tublay', 2018, 2017, 'supplementary', '0001-02-18', 1, 13, 133, 23, 2, 29, 1, 500000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(176, '18054', 'Improvement of Asham-Cayapes FMR, Bagong, Sablan', 2018, 2018, 'regular', '0001-02-18', 2, 11, 108, 1, 2, 28, 1, 500000.00, 'Oct-2018', 'Oct-2018', 'Nov-2018', 'Nov-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(177, 'GF 2017-19', 'Completion of Multi - Purpose BLdg (Phase ll), Tawangan Elem. School Compound', 2018, 2017, 'supplementary', '0001-02-18', 1, 6, 58, 3, 2, 37, 1, 500000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends Supp\'l APP No. 1 CY 2018 from 1st qtr to 2nd &amp; 3rd Qtr CY 2018'),
(178, 'GF 2017-24', 'Completion of Obanga CDC Building, Bac. Sur', 2018, 2017, 'supplementary', '0001-02-18', 1, 4, 35, 3, 2, 37, 1, 700000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends Supp\'l APP No. 5 CY 2018 from 2nd qtr to 2nd &amp; 3rd Qtr CY 2018'),
(179, 'GF 2017-0622', 'Completion of Cabiten Elementary School Stage, Moling, Cabiten', 2018, 2017, 'supplementary', '0001-02-18', 1, 10, 100, 5, 2, 37, 1, 200000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends APP CY 2017 to SUPP\'l APP No. 8 2nd &amp; 3rd Qtr CY 2018'),
(180, '18055', 'Construction of pavement of Aliwandey FMR, Bedbed, Mankayan', 2018, 2018, 'regular', '0001-02-18', 2, 10, 98, 1, 2, 28, 1, 500000.00, 'Jul-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(181, 'SB2 2014-1', 'Construction of Garage and Morgue and OPD Comfort Room Itogon Municipal Hospital', 2018, 2014, 'supplementary', '0001-02-18', 10, 5, 41, 25, 2, 33, 1, 800000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(182, 'SB1 17066', 'Const. of Loading platform and Waiting Shed at Tadayan Proper, Pudong, Kapangan', 2018, 2017, 'supplementary', '0001-02-18', 1, 7, 71, 10, 2, 37, 1, 500000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends Supp\'l APP No. 1 CY 2018 from 1st qtr to 2nd &amp; 3rd Qtr CY 2018'),
(183, '18056', 'Improvement of Baguingey to Piled Panay Road, Tabio, Mankayan', 2018, 2018, 'regular', '0001-02-18', 2, 10, 106, 14, 2, 28, 1, 300000.00, 'Oct-2018', 'Oct-2018', 'Nov-2018', 'Nov-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(184, '18057', 'Concreting along Paneg-an Tamangan(Lutaan Section) FMR, Sebang, Buguias', 2018, 2018, 'regular', '0001-02-18', 2, 4, 139, 1, 1, 28, 1, 2000000.00, 'Jul-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(185, 'GF 17013', 'Completion of Brgy Health Station Birthing Facility Napsong, Madaymen', 2018, 2017, 'supplementary', '0001-02-18', 1, 4, 35, 19, 2, 37, 1, 700000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends Supp\'l APP No. 1 CY 2018 from 2nd qtr to 2nd &amp; 3rd Qtr CY 2018'),
(186, '18058', 'Improvement of Ampusongan to Nakanga Road, Ampusongan, Bakud', 2018, 2018, 'regular', '0001-02-18', 2, 2, 9, 14, 2, 28, 1, 1000000.00, 'Jul-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(187, 'GF 2016-06', 'Construction of Toilet and Water Works System at mayos, Palina, Kibungan, Benguet', 2018, 2016, 'supplementary', '0001-02-18', 1, 8, 77, 7, 3, 37, 1, 700000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends Supp\'l APP No. 1 CY 2018 from 1st qtr to 2nd &amp; 3rd Qtr CY 2018'),
(188, '18059', 'Improvement along Nkagang-Sayangan-Beleng-Paing FMR Baculongan Sur, Buguias', 2018, 2018, 'regular', '0001-02-18', 2, 4, 28, 1, 2, 28, 1, 1000000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(189, 'SB2 2014-2', 'Improvement of Buguias Federation Senior Citizen\'s Building, Abatan', 2018, 2014, 'supplementary', '0001-02-18', 5, 4, 35, 6, 2, 33, 1, 100000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(190, '18060', 'Completion of Dagway Bailey Bridge concrete flooring, Amlimay, Buguias', 2018, 2018, 'regular', '0001-02-18', 2, 4, 26, 8, 2, 28, 1, 200000.00, 'Apr-2018', 'May-2018', 'May-2018', 'May-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(191, 'SEF 18001', 'Repair of Camp 30 Elementary School, Atok 3 Classrooms, Camp 30', 2018, 2018, 'supplementary', '0001-02-18', 1, 1, 7, 5, 2, 38, 1, 900000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends procurement activity from 1st qtr to 2nd and 3rd qtr CY 2018'),
(192, 'SB5 2015-1', 'Improvement of Balangabang-Paglayto FMR, Ballay, Kabayan', 2018, 2015, 'supplementary', '0001-02-18', 2, 6, 48, 1, 2, 36, 1, 180000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(193, 'SEF 18007', 'Repair of Catiaoan Barrio School, Kapangan - 3 Classrooms', 2018, 2018, 'supplementary', '0001-02-18', 1, 7, 69, 5, 2, 38, 2, 900000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends procurement activity from 1st qtr to 2nd and 3rd qtr CY 2018'),
(194, '18061', 'Improvement of Access Road at Buhaw Puguis, La Trinidad, Benguet', 2018, 2018, 'regular', '0001-02-18', 2, 9, 93, 14, 2, 28, 1, 1000000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(195, 'SEF 18018', 'Completion of Ewa - Bokes Elementary School Building in Sagpat', 2018, 2018, 'supplementary', '0001-02-18', 1, 8, 79, 5, 2, 38, 1, 450000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends procurement activity from 2nd qtr to 2nd and 3rd qtr CY 2018'),
(196, '18062', 'Improvement of Cagam-is to Ingaan Farm to Market Road, Gambang Bakun, Benguet', 2018, 2018, 'regular', '0001-02-18', 2, 2, 12, 1, 2, 28, 1, 400000.00, 'Jul-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(197, 'SB5 2015-2', 'Construction of Bageng Water Works system, Batan', 2018, 2015, 'supplementary', '0001-02-18', 1, 6, 50, 7, 2, 36, 1, 200000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(198, 'PSBF 2017-1', 'Const. of Fence at Ansagan Elementary School, Ansagan', 2018, 2017, 'supplementary', '0001-02-18', 1, 12, 116, 23, 2, 13, 1, 300000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amend Supp\'l APP No. 1 CY 2018 from 1st qtr to 2nd &amp; 3rd Qtr CY 2018'),
(199, 'NOAAA l-2015', 'Improvement/Extension of Provincial Concoction Center, Wangal', 2018, 2018, 'supplementary', '0001-02-18', 1, 9, 96, 21, 2, 39, 1, 121650.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends procurement activity from 1st qtr to 2nd and 3rd qtr CY 2018'),
(200, 'LDRRMF 2016-6', 'Reconstruction of Battalion WWS, Bagong', 2018, 2017, 'supplementary', '0001-02-18', 1, 11, 108, 21, 2, 38, 1, 292145.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amedns Supp\'l APP No. 2 CY 2018 from 1st qtr to 2nd &amp; 3rd Qtr CY 2018'),
(201, 'SEF 18001', 'Repair of Camp 30 Elementary School, Atok 3 Classrooms, Camp 30', 2018, 2018, 'supplementary', '0001-02-18', 1, 1, 7, 5, 2, 38, 2, 900000.00, 'Jun-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends procurement activity from 1st qtr to 2nd and 3rd qtr CY 2018'),
(202, '17071', 'Improvement of Multi Purpose Building, Pethal, ekip', 2018, 2017, 'supplementary', '0001-02-18', 1, 3, 20, 3, 2, 29, 1, 500000.00, 'Aug-2018', 'Aug-2018', 'Sep-2018', 'Sep-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends Annual Procurement Plan (APP) issued on previous year'),
(203, '18063', 'Improvement of Nabellang FMR (Nangutikan Section), Loo, Buguias', 2018, 2018, 'regular', '0001-02-18', 2, 4, 33, 1, 1, 28, 1, 1500000.00, 'Jul-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(204, '17094', 'Completion of Open Gymnasium, Twin Peaks, Tuba', 2018, 2017, 'supplementary', '0001-02-18', 1, 12, 128, 11, 2, 29, 1, 500000.00, 'Aug-2018', 'Aug-2018', 'Sep-2018', 'Sep-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends Annual Procurement Plan (APP) issued on previous year'),
(205, '18064', 'Construction of PCCP along Tagpaya Matikid FMR, Madaymen, Kibungan', 2018, 2018, 'regular', '0001-02-18', 2, 8, 76, 1, 1, 28, 1, 1500000.00, 'Apr-2018', 'May-2018', 'May-2018', 'May-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(207, '18065', 'Construction of PCCP with drainage canal at Provincial Housing Project, Phase 2, Wangal, La Trinidad', 2018, 2018, 'regular', '0001-02-18', 2, 9, 96, 12, 1, 28, 1, 2000000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(208, '16187', 'Construction of Multi-Purpose Hall, Tabaan Sur - completion', 2018, 2016, 'supplementary', '0001-02-18', 3, 12, 124, 3, 2, 29, 1, 500000.00, 'Aug-2018', 'Aug-2018', 'Sep-2018', 'Sep-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends Annual Procurement Plan (APP) issued on previous year'),
(209, '18066', 'Construction of Flood Control at Kubo-Ballay, Kabayan, Benguet', 2018, 2018, 'regular', '0001-02-18', 2, 6, 48, 13, 2, 28, 1, 250000.00, 'Oct-2018', 'Oct-2018', 'Nov-2018', 'Nov-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(210, '18067', 'Construction of Terterem, Flood Control, Ansagan Proper, Ansagan, Tuba', 2018, 2018, 'regular', '0001-02-18', 2, 12, 116, 13, 1, 28, 1, 1200000.00, 'Jul-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(211, 'SB2 2016-2', 'Construction of Sidewalk Shed-Halsema Road to UCCP Church, Balili', 2018, 2016, 'supplementary', '0001-02-18', 1, 9, 85, 9, 2, 33, 1, 700000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(212, '18068', 'Construction of Obanga Drainage Canal(Bad-ayan-Obanga- Paing FMR) Baculongan Sur, Buguias', 2018, 2018, 'regular', '0001-02-18', 2, 4, 28, 1, 2, 28, 1, 1000000.00, 'Jul-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(213, 'GF 2018-23', 'Improvement of PEO Bldg/Extension Phrase ll (Planning RROW, Survey Section and Motorpool Division)', 2018, 2018, 'supplementary', '0001-02-18', 1, 9, 92, 21, 1, 37, 1, 3500000.00, 'Aug-2018', 'Aug-2018', 'Sep-2018', 'Sep-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends Annual Procurement Plan (APP) issued on previous year'),
(214, 'SB2 160102', 'Improvement of Access Road in Puguis, L.T.B. (DSWD Lingap Center to Veterans Building Area)', 2018, 2016, 'supplementary', '0001-02-18', 2, 9, 93, 14, 2, 33, 1, 500000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(215, 'GF 2018-24', 'Extension of Motorpool Shed, Parking area &amp; Working Area, Wangal, La Trinidad, Benguet', 2018, 2018, 'supplementary', '0001-02-18', 1, 9, 96, 10, 1, 37, 1, 3000000.00, 'Aug-2018', 'Aug-2018', 'Sep-2018', 'Sep-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends Annual Procurement Plan (APP) issued on previous year'),
(216, '18069', 'Completion of 3-Storey Tublay Agri-Marketing Building and Food Processing Center,Tublay,Benguet', 2018, 2018, 'regular', '0001-02-18', 1, 13, 135, 3, 2, 28, 1, 1000000.00, 'Apr-2018', 'May-2018', 'May-2018', 'May-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(217, 'GF 2018-12', 'Perimeter Fencing of Benguet Sports Complex', 2018, 2018, 'supplementary', '0001-02-18', 1, 9, 92, 23, 2, 37, 2, 4000000.00, 'Aug-2018', 'Aug-2018', 'Sep-2018', 'Sep-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends Annual Procurement Plan (APP) issued on previous year'),
(218, 'GF 2018-0711', 'Completion of Lamut Elementary School Perimeter Fence, Lamut, Beckel, La Trinidad', 2018, 2018, 'supplementary', '0001-02-18', 1, 9, 86, 23, 2, 37, 1, 1000000.00, 'Aug-2018', 'Aug-2018', 'Sep-2018', 'Sep-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends Annual Procurement Plan (APP) issued on previous year'),
(219, 'SB2 2016-4', 'Completion of Sheep Barn at the Benguet Animal, Fish Apiary Learning Site and Farm Tourism, San Pascual', 2018, 2016, 'supplementary', '0001-02-18', 2, 12, 122, 16, 2, 33, 1, 230000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(220, '18080', 'Installation of Solar Powered Irrigation System and additional water supply distribution system at Kabayan demo farm', 2018, 2018, 'regular', '0001-02-18', 2, 6, 57, 7, 1, 28, 1, 3300000.00, 'Apr-2018', 'May-2018', 'May-2018', 'May-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(221, 'GF 2017', 'Construction of Senior Citizen\'s Building (Phase ll) Dalicno', 2018, 2017, 'supplementary', '0001-02-18', 1, 5, 41, 6, 2, 37, 1, 500000.00, 'Aug-2018', 'Aug-2018', 'Sep-2018', 'Sep-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends Annual Procurement Plan (APP) issued on previous year'),
(222, 'SB1 2017-1', 'Construction of C.R. BNHS, Poodan Ekip', 2018, 2017, 'supplementary', '0001-02-18', 1, 3, 20, 18, 2, 32, 1, 1000000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(223, 'GF 2017', 'Perimeter Fencing of Benguet Sports Complex', 2018, 2017, 'supplementary', '0001-02-18', 1, 9, 92, 23, 2, 37, 1, 1000000.00, 'Aug-2018', 'Aug-2018', 'Sep-2018', 'Sep-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends Annual Procurement Plan (APP) issued on previous year'),
(224, 'GF 2017-4', 'Construction of Barangay Hall with Tourism Information Center of Barangay Tacadang, Kibungan', 2018, 2017, 'supplementary', '0001-02-18', 3, 8, 80, 3, 2, 37, 1, 1000000.00, 'Aug-2018', 'Aug-2018', 'Sep-2018', 'Sep-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends Annual Procurement Plan (APP) issued on previous year'),
(225, 'SB1 2017-2', 'Improvement of Badayan-Manhuyuhuy Provincial Road, Buguias', 2018, 2017, 'supplementary', '0001-02-18', 2, 4, 35, 14, 2, 32, 1, 1000000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(226, 'GF 2017-1', 'Fencing of water tank', 2018, 2017, 'supplementary', '0001-02-18', 1, 9, 92, 23, 2, 37, 1, 50000.00, 'Aug-2018', 'Aug-2018', 'Sep-2018', 'Sep-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends Annual Procurement Plan (APP) issued on previous year'),
(227, 'SB1 2017-3', 'Construction of Laurencio Fianza NHS Annex TLE Classroom, Bantic, Daluprip', 2018, 2017, 'supplementary', '0001-02-18', 1, 5, 38, 5, 2, 32, 1, 960000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(228, '18081', 'Construction of Quarantine checkpoints/outposts, Tuba', 2018, 2018, 'regular', '0001-02-18', 1, 12, 121, 26, 1, 28, 1, 3000000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(229, '18082', 'Establishment of fishpond, San Pascual, Tuba', 2018, 2018, 'regular', '0001-02-18', 1, 12, 122, 10, 1, 28, 1, 2000000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(230, 'SB1 17023', 'Construction of C.R. at the Heritage Park, Balakbak, Kapangan', 2018, 2017, 'supplementary', '0001-02-18', 1, 7, 59, 18, 2, 32, 1, 500000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(231, 'GF 2017', 'Improvement and Upgrading of Electrical System (PGSO)', 2018, 2017, 'supplementary', '0001-02-18', 3, 9, 92, 21, 2, 37, 1, 1000000.00, 'Aug-2018', 'Aug-2018', 'Sep-2018', 'Sep-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends Annual Procurement Plan (APP) issued on previous year'),
(232, 'GF 2017-0712', 'Improvement/Extension of Senior Citizens Multi Purpose Bulding, Sapid, Mankayan', 2018, 2017, 'supplementary', '0001-02-18', 1, 10, 105, 6, 2, 37, 1, 500000.00, 'Aug-2018', 'Aug-2018', 'Sep-2018', 'Sep-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends Annual Procurement Plan (APP) issued on previous year'),
(233, 'SB1 170101', 'Improvement of Benguet General Hospital &quot;Annex&quot; Building', 2018, 2017, 'supplementary', '0001-02-18', 7, 9, 92, 20, 2, 32, 1, 150000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(234, 'GF 2016-0810', 'Improvement of foot trail and provision of hand drail at Mt. Oten, Tacadang, Kibungan', 2018, 2016, 'supplementary', '0001-02-18', 1, 8, 80, 9, 2, 37, 1, 700000.00, 'Aug-2018', 'Aug-2018', 'Sep-2018', 'Sep-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends Annual Procurement Plan (APP) issued on previous year'),
(235, 'SEF 2018', 'Construction of Two Storey Building for Calasipan Elementary School in Calasipan', 2018, 2018, 'supplementary', '0001-02-18', 1, 1, 7, 5, 1, 38, 1, 3293218.00, 'Aug-2018', 'Aug-2018', 'Sep-2018', 'Sep-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends Annual Procurement Plan (APP) issued on previous year'),
(236, 'SEF 2018-0708', 'Construction of Administrative Building with CR, Bokod NHS, Pito, Bokod', 2018, 2018, 'supplementary', '0001-02-18', 3, 3, 23, 21, 2, 38, 1, 980000.00, 'Aug-2018', 'Aug-2018', 'Sep-2018', 'Sep-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends Annual Procurement Plan (APP) issued on previous year'),
(237, 'SB1 2017-1', 'Establishment of Provincial Organic Swine and Poultry Farm, San Pascual, Tuba (Construction of Phase 1 Storage Building for Feeds Supplies and tools for organic/native swine Demo Farm, San Pascual, Tuba', 2018, 2017, 'supplementary', '0001-02-18', 2, 12, 122, 16, 2, 32, 1, 300000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(238, 'SB1 17081', 'Construction of four bath rooms (2 male bathrooms, 2 female bathrooms) and laundry area with water tank at Benghuet Bahay Pag-asa Center', 2018, 2017, 'supplementary', '0001-02-18', 1, 9, 92, 18, 2, 32, 1, 1000000.00, 'Aug-2018', 'Aug-2018', 'Sep-2018', 'Sep-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends Annual Procurement Plan (APP) issued on previous year'),
(239, 'SB1 2017-7', 'Improvement/Construction along Mankayan-Bato Provincial Road', 2018, 2017, 'supplementary', '0001-02-18', 2, 10, 104, 14, 1, 32, 1, 1500000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(240, '15028', 'Construction of Tirepath at Simbonan', 2018, 2015, 'supplementary', '0001-02-18', 2, 3, 24, 14, 2, 29, 1, 500000.00, 'Feb-2018', 'Feb-2018', 'Mar-2018', 'Mar-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(241, '16065', 'Construction of Classroom(building) at Adaoay National High School Adaoay, Kabayan', 2018, 2014, 'supplementary', '0001-02-18', 1, 6, 46, 5, 2, 29, 1, 1000000.00, 'Feb-2018', 'Feb-2018', 'Mar-2018', 'Mar-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(242, '16066', 'Construction of School Ground and Fencing, Badeo', 2018, 2014, 'supplementary', '0001-02-18', 1, 8, 74, 23, 2, 29, 1, 500000.00, 'Feb-2018', 'Feb-2018', 'Mar-2018', 'Mar-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(243, 'SB1 2017-8', 'Construction of Footbridge at Riverside, Camp 6, Tuba (additional)', 2018, 2017, 'supplementary', '0001-02-18', 1, 12, 121, 8, 2, 32, 1, 170000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(244, '17180', 'Develpoment  of Historical Site and Prospective Tourist Destination of Barangay Ambuklao', 2018, 2017, 'supplementary', '0001-02-18', 2, 3, 16, 19, 2, 29, 1, 500000.00, 'Feb-2018', 'Feb-2018', 'Mar-2018', 'Mar-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(245, 'SB1 2017-9', 'Improvement of Binungbong-Toybungan FMR, Taba-an Norte', 2018, 2017, 'supplementary', '0001-02-18', 2, 12, 123, 1, 2, 32, 1, 500000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(246, '17035', 'Improvement of Badeo School Geound and Fencing, Badeo', 2018, 2017, 'supplementary', '0001-02-18', 1, 8, 74, 23, 2, 29, 1, 500000.00, 'Feb-2018', 'Feb-2018', 'Mar-2018', 'Mar-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(247, '17159', 'Improvement of Balluay-Perel FMR, Balluay', 2018, 2017, 'supplementary', '0001-02-18', 2, 11, 109, 1, 2, 29, 1, 500000.00, 'Feb-2018', 'Feb-2018', 'Mar-2018', 'Mar-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(248, 'SB1 2017-10', 'Construction of Sante Footbridge Ambongdolan, Tublay (additional)', 2018, 2017, 'supplementary', '0001-02-18', 1, 13, 130, 8, 2, 32, 1, 235000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(249, 'SB5-2015-5', 'Concreting of Keddeng-Batag Footpath in Banangan', 2018, 2015, 'supplementary', '0001-02-18', 1, 11, 110, 9, 2, 29, 1, 150000.00, 'Feb-2018', 'Feb-2018', 'Mar-2018', 'Mar-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(250, 'SB1 2017-11', 'Construction of Tanibao footbridge, Tublay Central (additional)', 2018, 2017, 'supplementary', '0001-02-18', 1, 13, 135, 8, 2, 29, 1, 400000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(251, 'SB6-2015-1', 'Construction of Police Outpost &amp; Tourism Information &amp; Assistant Center, Tadiangan Tuba', 2018, 2015, 'supplementary', '0001-02-18', 1, 12, 125, 3, 2, 41, 1, 1000000.00, 'Feb-2018', 'Feb-2018', 'Mar-2018', 'Mar-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(252, 'SB1-2017-26', 'Construction of Septic Tank and Installation of Pipeline System &amp; Improvement of Ramp and Handrails NBDH', 2018, 2017, 'supplementary', '0001-02-18', 1, 4, 35, 7, 2, 41, 1, 346400.00, 'Feb-2018', 'Feb-2018', 'Mar-2018', 'Mar-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(253, 'GF 2015-1', 'Construction of Public Comfort Room @ Bangho Junction, Tublay', 2018, 2015, 'supplementary', '0001-02-18', 1, 13, 133, 18, 2, 29, 1, 700000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(254, 'SB1-2017-27', 'Construction of Classroom (Building) at Adaoay National High School Adaoay, Kabayan', 2018, 2017, 'supplementary', '0001-02-18', 1, 6, 46, 5, 2, 41, 1, 360000.00, 'Feb-2018', 'Feb-2018', 'Mar-2018', 'Mar-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(255, 'Sb1-2017-28', 'Improvement of Lusod Proper-Landing FMR, Kabayan', 2018, 2017, 'supplementary', '0001-02-18', 2, 6, 55, 1, 1, 41, 1, 2000000.00, 'Feb-2018', 'Feb-2018', 'Mar-2018', 'Mar-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(256, 'GF 2016-1', 'Construction of cr(W/pwd Room) and Ramp w/ Handrails at Pakpakitan', 2018, 2017, 'supplementary', '0001-02-18', 1, 4, 35, 18, 2, 29, 1, 1000000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(257, 'SB1-2017-29', 'Construction of Loading Platform and Waiting Shed at Tadayan Proper Pudong, Kapangan', 2018, 2017, 'supplementary', '0001-02-18', 1, 7, 71, 10, 2, 41, 1, 500000.00, 'Feb-2018', 'Feb-2018', 'Mar-2018', 'Mar-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(258, 'GF 2016-2', 'Extension of Provincial Water Analysis Laboratory Phase 1 PHO', 2018, 2016, 'supplementary', '0001-02-18', 1, 9, 92, 7, 2, 29, 1, 700000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(259, 'GF-NO 2015-3', 'Renovation of Police Outpost at Tadiangan', 2018, 2015, 'supplementary', '0001-02-18', 1, 12, 125, 19, 2, 37, 1, 500000.00, 'Feb-2018', 'Feb-2018', 'Mar-2018', 'Mar-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(260, 'SEF 2016-2', 'Re-construction of Walk w/ shed from the main road to BeNHS, Benguet Sped Center and Benguet Sports Center Multi-Purpose Gym, Wangal', 2018, 2016, 'supplementary', '0001-02-18', 2, 9, 96, 9, 1, 38, 1, 1500000.00, 'Feb-2018', 'Feb-2018', 'Mar-2018', 'Mar-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(261, 'GF - 170101', 'Completion of Multi - Purpose Building (Phase 1), Tawangan, Kabayan', 2018, 2017, 'supplementary', '0001-02-18', 1, 6, 58, 3, 2, 29, 1, 500000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(262, 'GF 170101A', 'Completion of Barangay Health Station Birthing Facility Napsong, Madaymen', 2018, 2017, 'supplementary', '0001-02-18', 4, 8, 76, 20, 2, 29, 1, 300000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(263, 'LDRRMF 2016-8', 'Construction of Retainig wall and restoration of concrete pavement along Lanas-Tabao FMR, Loo', 2018, 2018, 'supplementary', '0001-02-18', 2, 4, 33, 1, 2, 42, 1, 700000.00, 'Feb-2018', 'Feb-2018', 'Mar-2018', 'Mar-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(264, 'PSBF 2017-1', 'Construction of Fence at Ansagan E/S, Ansagan', 2018, 2017, 'supplementary', '0001-02-18', 1, 12, 116, 23, 2, 29, 1, 300000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(265, 'LDRRMF 2016-9', 'Construction of Six(6)-Class Room Building at Mt. Pulag E/S-Phase l Bashoy, Kabayan', 2018, 2018, 'supplementary', '0001-02-18', 1, 6, 49, 5, 1, 42, 1, 2885000.00, 'Feb-2018', 'Feb-2018', 'Mar-2018', 'Mar-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(266, 'LDRRMF 2016-10', 'Construction of Slope Protection at Agri-Eco Farm Bulala, Bayabas', 2018, 2018, 'supplementary', '0001-02-18', 2, 11, 112, 16, 1, 42, 1, 1300199.00, 'Feb-2018', 'Feb-2018', 'Mar-2018', 'Mar-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(267, '17108', 'Construction f Tirepath along Sawiingan to Bua Barangay Road, Naguey', 2018, 2017, 'supplementary', '0001-02-18', 1, 1, 7, 24, 2, 29, 1, 500000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(268, '18002', 'Bulala Warehouse ground improvement Agri-Eco Farm, Bulala, Sablan', 2018, 2018, 'supplementary', '0001-02-18', 2, 11, 115, 16, 1, 29, 1, 1500000.00, 'Apr-2018', 'Apr-2018', 'May-2018', 'Jun-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends procurement activity from 1st qtr to 2nd qtr'),
(269, '18004', 'Improvement of Nursery Site Access Road at Agri-Eco Farm, Bulala, Bayabas, Sablan', 2018, 2018, 'supplementary', '0001-02-18', 2, 11, 112, 16, 1, 29, 1, 1500000.00, 'Apr-2018', 'Apr-2018', 'May-2018', 'Jun-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends procurement activity from 3rd qtr to 2nd qtr'),
(270, '18005', 'Construction of PCCP along National Road Jct. - Diboong - Bangao Provincial Road', 2018, 2018, 'supplementary', '0001-02-18', 2, 6, 57, 14, 1, 29, 1, 5000000.00, 'Apr-2018', 'Apr-2018', 'May-2018', 'Jun-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends procurement activity from 1st qtr to 2nd qtr'),
(271, '18006', 'Improvement along Pico-Stockfarm(Puguis-Buyagan-Poblacion)Provincial Road, La Trinidad, Benguet', 2018, 2018, 'supplementary', '0001-02-18', 2, 9, 91, 14, 1, 29, 1, 10000000.00, 'Jul-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends procurement activity from 1st qtr to 3rd qtr'),
(272, 'LDRRMF 160102', 'Construction of Drainage and Riprap at Bacung Poblacion', 2018, 2016, 'supplementary', '0001-02-18', 2, 2, 14, 12, 2, 39, 1, 350000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(273, '18007', 'Improvement along La Trinidad - Capitol - Bineng Provincial Road', 2018, 2018, 'supplementary', '0001-02-18', 2, 9, 88, 14, 1, 29, 1, 5000000.00, 'Apr-2018', 'Apr-2018', 'May-2018', 'Jun-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends procurement activity from 1st qtr to 2nd qtr'),
(274, '18008', 'Improvement along Yagyagan - Ampusa Provincial Road', 2018, 2018, 'supplementary', '0001-02-18', 2, 12, 121, 14, 1, 29, 1, 5000000.00, 'Apr-2018', 'Apr-2018', 'May-2018', 'Jun-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends procurement activity from 1st qtr to 2nd qtr'),
(275, 'LDRRMF', 'Construction of Concrete Drainage Canal and Footpath at Wagangan, Poblacion', 2018, 2016, 'supplementary', '0001-02-18', 2, 2, 14, 12, 2, 29, 1, 350000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(276, '18009', 'Improvement along Mankayan - Bato Provincial Road', 2018, 2018, 'supplementary', '0001-02-18', 2, 10, 104, 14, 1, 29, 1, 5000000.00, 'Apr-2018', 'Apr-2018', 'May-2018', 'Jun-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends procurement activity from 1st qtr to 2nd qtr'),
(277, '18010', 'Improvement along Bad-ayan - Manhuyhuy Provincial Road', 2018, 2018, 'supplementary', '0001-02-18', 2, 4, 35, 14, 1, 29, 1, 5000000.00, 'Apr-2018', 'Apr-2018', 'May-2018', 'Jun-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends procurement activity from 1st qtr to 2nd qtr'),
(278, 'LDRRMF 160103', 'Construction of Slope Protection at the Dennis Molintas Memorial Hospital', 2018, 2016, 'supplementary', '0001-02-18', 2, 3, 24, 13, 2, 39, 1, 350000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(279, 'LDRRMF 2016-4', 'Construction of Drainage Canal along Padang - Mangkilet FMR, Catlubong', 2018, 2016, 'supplementary', '0001-02-18', 2, 4, 36, 12, 2, 39, 1, 350000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(280, '18011', 'Rehabilitation of Barangay Health Station at Ba-ayan, Proper, Ba-ayan, Tublay', 2018, 2018, 'supplementary', '0001-02-18', 1, 13, 131, 20, 1, 29, 2, 1500000.00, 'Oct-2018', 'Oct-2018', 'Nov-2018', 'Nov-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends procurement activity from 1st qtr to 4th qtr;w/ report for change of title'),
(281, '18012', 'Rehablitation of Canal and Riprapping along Upper Mangga Provincial Road, Tuding, Itogon, Benguet', 2018, 2018, 'supplementary', '0001-02-18', 2, 5, 43, 13, 2, 29, 2, 500000.00, 'Oct-2018', 'Oct-2018', 'Nov-2018', 'Nov-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends procurement activity from 1st qtr to 4th qtr;w/ report for change of title'),
(282, 'LDRRMF 160104', 'Construction of Retaining Wall along Liang - Taaw FMR, Ballay, Kabayan', 2018, 2016, 'supplementary', '0001-02-18', 2, 6, 48, 27, 2, 39, 1, 350000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(283, '18016', 'Construction of Barangay Health Station, Km. 24, Caliking, Atok', 2018, 2018, 'supplementary', '0001-02-18', 1, 1, 2, 20, 1, 29, 1, 2500000.00, 'Apr-2018', 'May-2018', 'May-2018', 'Jun-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends procurement activity from 1st qtr to 2nd qtr'),
(284, 'LDRRMF 2016-5', 'Construction of Retaining Wall at Guinaoang, Mankayan', 2018, 2016, 'supplementary', '0001-02-18', 2, 10, 103, 27, 2, 39, 1, 767000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(285, '18021', 'Construction of Multi-Purpose building at Sitio Sabdang, Poblacion, Sablan', 2018, 2018, 'supplementary', '0001-02-18', 3, 11, 115, 3, 1, 29, 1, 2000000.00, 'Oct-2018', 'Oct-2018', 'Nov-2018', 'Nov-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'his amends procurement activity from 1st qtr to 4th qtr;w/ report for change of title'),
(286, 'LDRRMF 170105', 'Restoration of the Retaining Wall along Timoy-Paswek Road, Puguis', 2018, 2016, 'supplementary', '0001-02-18', 2, 9, 93, 27, 2, 37, 1, 300000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(287, '18023', 'Completion of Guinaoang, Multi-Purpose Hall,Guinaoang, Mankayan', 2018, 2018, 'supplementary', '0001-02-18', 3, 10, 103, 3, 2, 29, 1, 1000000.00, 'Jul-2018', 'Jul-2018', 'Aug-2018', 'Sep-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'his amends procurement activity from 1st qtr to 4th qtr;w/ report for change of title'),
(288, '18023', 'Completion of Lubas Multi-Purpose Building, Ansagan, Tuba', 2018, 2018, 'supplementary', '0001-02-18', 3, 12, 116, 3, 1, 29, 1, 1200000.00, 'Oct-2018', 'Oct-2018', 'Nov-2018', 'Nov-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'his amends procurement activity from 1st qtr to 4th qtr;w/ report for change of title'),
(289, '18025', 'Completion of Km. 73 Multi-Purpose Hall, Amgaleygey, Buguias', 2018, 2018, 'supplementary', '0001-02-18', 3, 4, 25, 3, 1, 29, 1, 1500000.00, 'Jul-2018', 'Jul-2018', 'Aug-2018', 'Sep-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends procurement activity from 2nd qtr to 3rd qtr'),
(290, '18026', 'Improvement of Gymnasium at Tadiangan, Tuba', 2018, 2018, 'supplementary', '0001-02-18', 1, 12, 125, 11, 2, 29, 1, 500000.00, 'Jul-2018', 'Jul-2018', 'Aug-2018', 'Sep-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends procurement activity from 1st qtr to 3rd qtr;w/ report Mun. to be implemented'),
(291, '18027', 'Completion of Multi-Purpose Open Gymnasium, Loacan, Itogon', 2018, 2018, 'supplementary', '0001-02-18', 1, 5, 40, 11, 1, 29, 1, 1500000.00, 'Jul-2018', 'Jul-2018', 'Aug-2018', 'Sep-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends procurement activity from 1st qtr to 3rd qtr'),
(292, '18032', 'Construction of Footbridge at Meril, Daclan, Tublay', 2018, 2018, 'supplementary', '0001-02-18', 1, 13, 134, 8, 2, 29, 1, 500000.00, 'Jul-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends procurement activity from 4th qtr to 3rd qtr'),
(293, '18033', 'Concreting of COtocot-Abiang Foot Trail, Taba-ao, Kapangan', 2018, 2018, 'supplementary', '0001-02-18', 1, 7, 73, 9, 2, 29, 1, 250000.00, 'Apr-2018', 'May-2018', 'May-2018', 'Jun-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends procurement activity from 4th qtr to 2nd qtr'),
(294, '18034', 'Concreting of Bocao Foot Trail, Cuba, Kapangan', 2018, 2018, 'supplementary', '0001-02-18', 1, 7, 63, 9, 2, 29, 1, 250000.00, 'Jul-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends procurement activity from 4th qtr to 3rd qtr'),
(295, '18035', 'Construction of footpath from Gwetig going to Poodan, Ekip, Bokod', 2018, 2018, 'supplementary', '0001-02-18', 1, 3, 20, 9, 2, 29, 1, 500000.00, 'Apr-2018', 'May-2018', 'May-2018', 'Jun-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends procurement activity from 3rd qtr to 2nd qtr'),
(296, '18036', 'Improvement of pathway with shed leading to Lower Green Valley to Millsite, Camp 6, Tuba', 2018, 2018, 'supplementary', '0001-02-18', 1, 12, 121, 9, 2, 29, 1, 1000000.00, 'Apr-2018', 'May-2018', 'May-2018', 'Jun-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends procurement activity from 3rd qtr to 2nd qtr'),
(297, '18039', 'Improvement of Guitley Barangay Road, Lubas, La Trinidad', 2018, 2018, 'supplementary', '0001-02-18', 2, 9, 90, 14, 2, 29, 1, 500000.00, 'Oct-2018', 'Oct-2018', 'Nov-2018', 'Nov-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends procurement activity from 1st qtr to 4th qtr;w/ report for change of title'),
(298, '18045', 'Improvement of Pagal Barangay Road, Beckel La Trinidad', 2018, 2018, 'supplementary', '0001-02-18', 2, 9, 86, 14, 1, 29, 1, 2000000.00, 'Apr-2018', 'May-2018', 'May-2018', 'Jun-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends procurement activity from 1st qtr to 2nd qtr'),
(299, '18046', 'Improvement of Barangay Road of Toneleg, Ballay, Kabayan', 2018, 2018, 'supplementary', '0001-02-18', 2, 6, 48, 14, 2, 29, 1, 500000.00, 'Apr-2018', 'May-2018', 'May-2018', 'Jun-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends procurement activity from 1st qtr to 2nd qtr'),
(300, '18048', 'Improvement of Bacaog-Bayating to Bawek FMR, Twin Peaks, Tuba', 2018, 2018, 'supplementary', '0001-02-18', 2, 12, 128, 1, 2, 29, 1, 750000.00, 'Feb-2018', 'Feb-2018', 'Mar-2018', 'Mar-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends procurement activity from 2nd qtr to 1st qtr'),
(301, '18050', 'Improvement of Liwang-Bolbolo-FMR,Gambang, Bakun', 2018, 2018, 'supplementary', '0001-02-18', 2, 2, 12, 1, 2, 29, 1, 1000000.00, 'Jul-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends procurement activity from 1st qtr to 3rd qtr'),
(302, '18052', 'Tirepathing of Limosan-Tenging FMR, Poblacion, Bakun', 2018, 2018, 'supplementary', '0001-02-18', 2, 2, 14, 14, 2, 29, 1, 500000.00, 'Feb-2018', 'Feb-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends procurement activity from 2nd qtr to 1st qtr'),
(303, '18053', 'Improvement of Loo-Pan_ayaoan FMR, Loo, Buguias', 2018, 2018, 'supplementary', '0001-02-18', 2, 4, 33, 1, 2, 29, 1, 250000.00, 'Apr-2018', 'May-2018', 'May-2018', 'Jun-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends procurement activity from 3rd qtr to 2nd qtr'),
(304, '18054', 'Improvement of Asham-Cayapes FMR, Bagong, Sablan', 2018, 2018, 'supplementary', '0001-02-18', 2, 11, 108, 1, 2, 29, 1, 500000.00, 'Apr-2018', 'Apr-2018', 'May-2018', 'Jun-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends procurement activity from 4th qtr to 2nd qtr'),
(305, '18055', 'Construction of pavement of Aliwandey FMR, Bedbed, Mankayan', 2018, 2018, 'supplementary', '0001-02-18', 2, 10, 98, 1, 2, 29, 1, 500000.00, 'Apr-2018', 'Apr-2018', 'May-2018', 'Jun-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends procurement activity from 3rd qtr to 2nd qtr'),
(306, '18056', 'Improvement oof Baguingey to Piled Panad Road, Tabio, Mankayan', 2018, 2018, 'supplementary', '0001-02-18', 2, 10, 106, 14, 2, 29, 1, 300000.00, 'Jul-2018', 'Jul-2018', 'Aug-2018', 'Aug-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends procurement activity from 4th qtr to 3rd qtr'),
(307, '18057', 'Concreting along Paneg-an Tamangan(lutaan Section) FMR, Sebang, Buguias', 2018, 2018, 'supplementary', '0001-02-18', 2, 4, 139, 1, 1, 29, 1, 2000000.00, 'Oct-2018', 'Oct-2018', 'Nov-2018', 'Nov-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends procurement activity from 1st qtr to 4th qtr;w/ report for change of title'),
(308, '18060', 'Completion of Dagway Balley Bridge concrete flooring, Amlimay, Buguias', 2018, 2018, 'supplementary', '2018-10-08', 1, 4, 26, 2, 2, 29, 1, 200000.00, 'Oct-2018', 'Oct-2018', 'Nov-2018', 'Nov-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends procurement activity from 1st qtr to 4th qtr;w/ report for change of title'),
(309, '18062', 'Improvement of Cagam-is to Ingaan Farm to Market Road, Gambang, Bakun, Benguet', 2018, 2018, 'supplementary', '0001-02-18', 2, 2, 12, 14, 2, 29, 1, 400000.00, 'Apr-2018', 'Apr-2018', 'May-2018', 'Jun-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends procurement activity from 3rd qtr to 2nd qtr'),
(310, '18063', 'Improvement of Nabellang FMR(Nangutikan Section), Loo, Buguias', 2018, 2018, 'supplementary', '0001-02-18', 2, 4, 33, 1, 1, 29, 1, 1500000.00, 'Apr-2018', 'Apr-2018', 'May-2018', 'Jun-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends procurement activity from 3rd qtr to 2nd qtr'),
(311, '18065', 'Construction of PCCP w/ drainage canal at Provincial Housing Project, Phase 2, Wangal, La Trinidad', 2018, 2018, 'supplementary', '0001-02-18', 2, 9, 96, 12, 1, 29, 1, 2000000.00, 'Apr-2018', 'Apr-2018', 'May-2018', 'Jun-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends procurement activity from 3rd qtr to 2nd qtr'),
(312, '18066', 'Construction of Flood Control at Kubo-Ballay, Kabayan, Benguet', 2018, 2018, 'supplementary', '0001-02-18', 2, 6, 48, 13, 2, 29, 1, 250000.00, 'Apr-2018', 'Apr-2018', 'May-2018', 'Jun-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends procurement activity from 4th qtr to 2nd qtr'),
(313, '18067', 'Construction of Terterem, Flood Control, Ansagan Proper, Ansagan, Tuba', 2018, 2018, 'supplementary', '0001-02-18', 2, 12, 116, 13, 1, 29, 1, 1200000.00, 'Apr-2018', 'Apr-2018', 'May-2018', 'Jun-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends procurement activity from 3rd qtr to 2nd qtr'),
(314, '18080', 'Installation of Solar Powered Irrigation System and additional water supply distribution system at Kabayan demo farm', 2018, 2018, 'supplementary', '0001-02-18', 1, 6, 57, 7, 1, 29, 1, 3300000.00, 'Apr-2018', 'May-2018', 'May-2018', 'May-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'For amendmend of procurement committee'),
(315, '18081', 'Construction of Quarantine checkpoints/outpost, Tuba', 2018, 2018, 'supplementary', '0001-02-18', 2, 12, 121, 3, 1, 29, 1, 3000000.00, 'Oct-2018', 'Oct-2018', 'Nov-2018', 'Nov-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'This amends procurement activity from 2nd qtr to 4th qtr;w/ report for change of title'),
(316, '18082', 'Establishment of fishpod, San Pascual, Tuba', 2018, 2018, 'supplementary', '0001-02-18', 2, 12, 122, 16, 1, 29, 1, 2000000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'REFERRED BY PVET TO BFAR'),
(317, 'LDRRMF 160101', 'Construction of Concrete Drainage Canal and Footpath at Wagangan, Poblacion', 2018, 2016, 'supplementary', '0001-02-18', 2, 2, 14, 12, 2, 39, 1, 350000.00, 'Jan-2018', 'Jan-2018', 'Feb-2018', 'Feb-2018', 'pending', 0, 'false', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '');

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
(1, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(34, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(35, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(36, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
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
(64, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(65, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(66, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(68, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(69, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(70, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(71, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(72, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(73, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(74, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(75, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(76, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(77, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(79, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(80, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(81, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(82, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(83, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(84, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
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
(97, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(98, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(99, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(100, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(101, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(102, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(103, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(104, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(105, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(108, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
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
(129, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(130, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(131, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(132, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(133, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(134, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(135, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(136, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(137, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(138, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(139, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(140, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(141, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(142, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(143, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(145, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(148, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(149, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(150, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(151, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(152, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(153, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(154, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(156, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(157, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(158, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(159, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(160, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(161, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(162, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(163, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(164, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(165, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(166, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(167, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(168, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(169, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(170, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(172, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(173, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(174, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(175, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(176, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(177, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(178, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(179, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(180, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(181, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(182, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(183, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(184, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(185, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(186, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(187, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(188, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(189, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(190, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(191, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(192, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(193, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(194, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(195, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(196, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(197, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(198, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(199, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(200, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(202, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(203, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(204, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(205, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(207, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(208, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(209, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(210, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(211, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(212, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(213, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(214, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(215, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(216, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(217, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(218, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(219, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(220, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(221, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(222, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(223, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(224, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(225, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(226, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(227, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(228, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(229, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(230, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(231, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(232, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(233, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(234, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(235, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(236, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(237, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(238, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(239, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(240, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(241, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(242, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(243, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(244, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(245, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(246, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(247, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(248, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(249, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(250, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(251, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(252, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(253, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(254, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(255, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(256, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(257, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(258, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(259, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(260, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(261, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(262, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(263, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(264, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(265, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(266, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(267, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(268, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(269, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(270, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(271, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(272, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(273, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(274, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(275, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(276, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(277, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(278, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(279, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(280, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(281, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(282, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(283, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(284, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(285, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(286, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(287, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(288, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(289, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(290, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(291, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(292, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(293, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(294, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(295, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(296, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(297, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(298, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(299, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(300, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(301, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(302, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(303, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(304, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(305, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(306, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(307, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(308, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(309, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(310, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(311, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(312, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(313, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(314, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(315, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(316, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(317, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

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
(22, 'Training Center', 'active'),
(23, 'Fencing', 'active'),
(24, 'Road Pavement/Tire-path', 'active'),
(25, 'Garage/Morgue', 'active'),
(26, 'Checkpoints/Outposts', 'active'),
(27, 'Retaining Wall', 'active');

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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sectors`
--

INSERT INTO `sectors` (`sector_id`, `sector_name`, `sector_type`, `sector_status`) VALUES
(1, 'Support to Social', 'barangay_development', 'active'),
(2, 'Support to Economic', 'barangay_development', 'active'),
(3, 'Support to Dev-Ad', 'barangay_development', 'active'),
(4, 'Support to Health', 'barangay_development', 'active'),
(5, 'Support to Special Projects', 'barangay_development', 'active'),
(6, 'General Services', 'office', 'active'),
(7, 'Benguet General Hospital', 'office', 'active'),
(8, 'Atok District Hospital', 'office', 'active'),
(9, 'Northern Benguet District Hospital', 'office', 'active'),
(10, 'Itogon District Hospital', 'office', 'active'),
(11, 'Kapangan District Hospital', 'office', 'active'),
(12, 'Social Welfare and Development', 'office', 'active');

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
  ADD CONSTRAINT `project_plan_ibfk_1` FOREIGN KEY (`contractor_id`) REFERENCES `contractors` (`contractor_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `project_plan_ibfk_2` FOREIGN KEY (`sector_id`) REFERENCES `sectors` (`sector_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `project_timeline`
--
ALTER TABLE `project_timeline`
  ADD CONSTRAINT `project_timeline_ibfk_1` FOREIGN KEY (`plan_id`) REFERENCES `project_plan` (`plan_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;