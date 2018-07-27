-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 27, 2018 at 08:47 AM
-- Server version: 5.7.19
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
) ENGINE=InnoDB AUTO_INCREMENT=416 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `document_logs`
--

INSERT INTO `document_logs` (`doc_log_id`, `log_id`, `project_document_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(7, 1, 7),
(8, 2, 1),
(9, 2, 2),
(10, 2, 3),
(11, 2, 4),
(12, 2, 5),
(13, 2, 6),
(14, 2, 7),
(15, 3, 1),
(16, 3, 2),
(17, 3, 3),
(18, 3, 4),
(19, 3, 5),
(20, 3, 6),
(21, 4, 1),
(22, 4, 2),
(23, 4, 3),
(24, 4, 4),
(25, 4, 5),
(26, 4, 6),
(27, 5, 5),
(28, 5, 6),
(29, 11, 8),
(30, 11, 9),
(31, 11, 10),
(32, 11, 11),
(33, 11, 12),
(34, 11, 13),
(35, 11, 14),
(36, 11, 15),
(37, 11, 16),
(38, 11, 17),
(39, 11, 18),
(40, 11, 19),
(41, 11, 20),
(42, 11, 21),
(43, 11, 22),
(44, 11, 23),
(45, 11, 24),
(46, 11, 25),
(47, 11, 26),
(48, 11, 27),
(49, 11, 28),
(50, 11, 29),
(51, 11, 30),
(52, 12, 7),
(53, 13, 8),
(54, 13, 9),
(55, 13, 10),
(56, 13, 11),
(57, 13, 12),
(58, 13, 13),
(59, 13, 14),
(60, 13, 15),
(61, 13, 16),
(62, 13, 17),
(63, 13, 18),
(64, 13, 19),
(65, 13, 20),
(66, 13, 21),
(67, 13, 22),
(68, 13, 23),
(69, 13, 24),
(70, 13, 25),
(71, 13, 26),
(72, 13, 27),
(73, 13, 28),
(74, 13, 29),
(75, 13, 30),
(76, 14, 7),
(77, 15, 7),
(78, 15, 8),
(79, 15, 9),
(80, 15, 10),
(81, 15, 11),
(82, 15, 12),
(83, 15, 13),
(84, 15, 14),
(85, 15, 15),
(86, 15, 16),
(87, 15, 17),
(88, 15, 18),
(89, 15, 19),
(90, 15, 20),
(91, 15, 21),
(92, 15, 22),
(93, 15, 23),
(94, 15, 24),
(95, 15, 25),
(96, 15, 26),
(97, 15, 27),
(98, 15, 28),
(99, 15, 29),
(100, 15, 30),
(101, 16, 7),
(102, 16, 8),
(103, 16, 9),
(104, 16, 10),
(105, 16, 11),
(106, 17, 7),
(107, 17, 8),
(108, 17, 9),
(109, 17, 10),
(110, 17, 11),
(111, 18, 7),
(112, 18, 8),
(113, 18, 9),
(114, 18, 10),
(115, 18, 11),
(116, 18, 12),
(117, 18, 13),
(118, 18, 14),
(119, 18, 15),
(120, 18, 16),
(121, 18, 17),
(122, 18, 18),
(123, 18, 19),
(124, 18, 20),
(125, 18, 21),
(126, 18, 22),
(127, 18, 23),
(128, 18, 24),
(129, 18, 25),
(130, 18, 26),
(131, 18, 27),
(132, 18, 28),
(133, 18, 29),
(134, 18, 30),
(135, 18, 31),
(136, 19, 7),
(137, 19, 8),
(138, 19, 9),
(139, 19, 10),
(140, 19, 11),
(141, 19, 12),
(142, 19, 13),
(143, 19, 14),
(144, 19, 15),
(145, 19, 16),
(146, 19, 17),
(147, 19, 18),
(148, 19, 19),
(149, 19, 20),
(150, 19, 21),
(151, 19, 22),
(152, 19, 23),
(153, 19, 24),
(154, 19, 25),
(155, 19, 26),
(156, 19, 27),
(157, 19, 28),
(158, 19, 29),
(159, 19, 30),
(160, 19, 31),
(161, 23, 1),
(162, 23, 2),
(163, 23, 3),
(164, 23, 4),
(165, 23, 5),
(166, 23, 6),
(167, 23, 7),
(168, 23, 8),
(169, 23, 9),
(170, 23, 10),
(171, 23, 11),
(172, 23, 12),
(173, 23, 13),
(174, 23, 14),
(175, 23, 15),
(176, 23, 16),
(177, 23, 17),
(178, 23, 18),
(179, 23, 19),
(180, 23, 20),
(181, 23, 21),
(182, 23, 22),
(183, 23, 23),
(184, 23, 24),
(185, 23, 25),
(186, 23, 26),
(187, 23, 27),
(188, 23, 28),
(189, 23, 29),
(190, 23, 30),
(191, 23, 31),
(192, 24, 1),
(193, 24, 2),
(194, 24, 3),
(195, 24, 4),
(196, 24, 5),
(197, 24, 6),
(198, 24, 7),
(199, 24, 8),
(200, 24, 9),
(201, 24, 10),
(202, 24, 11),
(203, 24, 12),
(204, 24, 13),
(205, 24, 14),
(206, 24, 15),
(207, 24, 16),
(208, 24, 17),
(209, 24, 18),
(210, 24, 19),
(211, 24, 20),
(212, 24, 21),
(213, 24, 22),
(214, 24, 23),
(215, 24, 24),
(216, 24, 25),
(217, 24, 26),
(218, 24, 27),
(219, 24, 28),
(220, 24, 29),
(221, 24, 30),
(222, 24, 31),
(223, 25, 1),
(224, 25, 2),
(225, 25, 3),
(226, 25, 4),
(227, 25, 5),
(228, 25, 6),
(229, 25, 7),
(230, 25, 8),
(231, 25, 9),
(232, 25, 10),
(233, 25, 11),
(234, 25, 12),
(235, 25, 13),
(236, 25, 14),
(237, 25, 15),
(238, 25, 16),
(239, 25, 17),
(240, 25, 18),
(241, 25, 19),
(242, 25, 20),
(243, 25, 21),
(244, 25, 22),
(245, 25, 23),
(246, 25, 24),
(247, 25, 25),
(248, 25, 26),
(249, 25, 27),
(250, 25, 28),
(251, 25, 29),
(252, 25, 30),
(253, 25, 31),
(254, 26, 32),
(255, 26, 33),
(256, 27, 1),
(257, 27, 2),
(258, 27, 3),
(259, 27, 4),
(260, 27, 5),
(261, 27, 6),
(262, 27, 7),
(263, 27, 8),
(264, 27, 9),
(265, 27, 10),
(266, 27, 11),
(267, 27, 12),
(268, 27, 13),
(269, 27, 14),
(270, 27, 15),
(271, 27, 16),
(272, 27, 17),
(273, 27, 18),
(274, 27, 19),
(275, 27, 20),
(276, 27, 21),
(277, 27, 22),
(278, 27, 23),
(279, 27, 24),
(280, 27, 25),
(281, 27, 26),
(282, 27, 27),
(283, 27, 28),
(284, 27, 29),
(285, 27, 30),
(286, 27, 31),
(287, 28, 32),
(288, 28, 33),
(289, 29, 34),
(290, 29, 35),
(291, 29, 36),
(292, 29, 37),
(293, 30, 34),
(294, 30, 35),
(295, 30, 36),
(296, 30, 37),
(297, 31, 38),
(298, 31, 39),
(299, 31, 40),
(300, 32, 38),
(301, 32, 39),
(302, 32, 40),
(303, 33, 41),
(304, 33, 42),
(305, 33, 43),
(306, 33, 44),
(307, 33, 45),
(308, 33, 46),
(309, 34, 32),
(310, 34, 33),
(311, 35, 41),
(312, 35, 42),
(313, 35, 43),
(314, 35, 44),
(315, 35, 45),
(316, 35, 46),
(317, 36, 41),
(318, 36, 42),
(319, 36, 43),
(320, 36, 44),
(321, 36, 45),
(322, 36, 46),
(323, 37, 47),
(324, 37, 48),
(325, 37, 49),
(326, 37, 50),
(327, 37, 51),
(328, 38, 1),
(329, 38, 2),
(330, 38, 3),
(331, 38, 4),
(332, 38, 5),
(333, 38, 8),
(334, 38, 10),
(335, 38, 11),
(336, 38, 12),
(337, 38, 13),
(338, 38, 15),
(339, 38, 16),
(340, 38, 17),
(341, 38, 18),
(342, 38, 19),
(343, 38, 20),
(344, 38, 21),
(345, 38, 22),
(346, 38, 23),
(347, 38, 24),
(348, 38, 25),
(349, 38, 26),
(350, 38, 27),
(351, 38, 28),
(352, 38, 29),
(353, 38, 30),
(354, 38, 31),
(355, 38, 38),
(356, 38, 39),
(357, 38, 40),
(358, 39, 1),
(359, 39, 2),
(360, 39, 3),
(361, 39, 4),
(362, 39, 5),
(363, 39, 8),
(364, 39, 10),
(365, 39, 11),
(366, 39, 12),
(367, 39, 13),
(368, 39, 15),
(369, 39, 16),
(370, 39, 17),
(371, 39, 18),
(372, 39, 19),
(373, 39, 20),
(374, 39, 21),
(375, 39, 22),
(376, 39, 23),
(377, 39, 24),
(378, 39, 25),
(379, 39, 26),
(380, 39, 27),
(381, 39, 28),
(382, 39, 29),
(383, 39, 30),
(384, 39, 31),
(385, 39, 38),
(386, 39, 39),
(387, 39, 40),
(388, 40, 32),
(389, 40, 33),
(390, 41, 52),
(391, 41, 53),
(392, 41, 54),
(393, 41, 55),
(394, 42, 56),
(395, 42, 57),
(396, 44, 58),
(397, 44, 59),
(398, 45, 60),
(399, 45, 61),
(400, 45, 62),
(401, 46, 60),
(402, 46, 61),
(403, 46, 62),
(404, 47, 60),
(405, 47, 61),
(406, 47, 62),
(407, 48, 60),
(408, 48, 61),
(409, 48, 62),
(410, 49, 6),
(411, 49, 7),
(412, 49, 9),
(413, 49, 14),
(414, 50, 34),
(415, 50, 37);

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
(44, 0, 'Letter of Protest', 'active');

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
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

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
(27, 'Support', 'active', 'Supplemental');

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
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`log_id`, `remark`, `log_type`, `sender`, `receiver`, `log_date`) VALUES
(1, 'for signature of gov', 'send', 2, NULL, '2018-07-26 15:49:20'),
(2, NULL, 'receive', NULL, 3, '2018-07-26 15:51:34'),
(3, 'For procurement', 'send', 3, NULL, '2018-07-26 15:53:28'),
(4, NULL, 'receive', NULL, 1, '2018-07-26 16:03:27'),
(5, NULL, 'receive', NULL, 1, '2018-07-26 16:04:54'),
(6, NULL, 'receive', NULL, 1, '2018-07-26 16:05:17'),
(7, NULL, 'receive', NULL, 1, '2018-07-26 16:05:17'),
(8, NULL, 'receive', NULL, 1, '2018-07-26 16:05:28'),
(9, NULL, 'receive', NULL, 1, '2018-07-26 16:05:31'),
(10, NULL, 'receive', NULL, 1, '2018-07-26 16:05:39'),
(11, 'for evaluation', 'send', 1, NULL, '2018-07-26 16:10:55'),
(12, 'additional for evaluation', 'send', 3, NULL, '2018-07-26 16:13:30'),
(13, NULL, 'receive', NULL, 4, '2018-07-26 16:22:45'),
(14, NULL, 'receive', NULL, 4, '2018-07-26 16:22:58'),
(15, 'evaluated', 'send', 4, NULL, '2018-07-26 16:24:13'),
(16, 'pahabol', 'send', 4, NULL, '2018-07-26 16:36:48'),
(17, '', 'send', 4, NULL, '2018-07-26 16:42:05'),
(18, '', 'send', 4, NULL, '2018-07-26 16:44:54'),
(19, NULL, 'receive', NULL, 1, '2018-07-26 16:55:04'),
(20, NULL, 'receive', NULL, 1, '2018-07-26 16:56:16'),
(21, NULL, 'receive', NULL, 1, '2018-07-26 16:56:18'),
(22, NULL, 'receive', NULL, 1, '2018-07-26 16:56:18'),
(23, 'for you know testing adi ', 'send', 1, NULL, '2018-07-27 10:25:29'),
(24, NULL, 'receive', NULL, 2, '2018-07-27 10:40:52'),
(25, 'wdafafwafawf', 'send', 2, NULL, '2018-07-27 10:41:10'),
(26, 'this is a forstateementewkiansdoifaspdmfas;df\r\n', 'send', 3, NULL, '2018-07-27 10:44:53'),
(27, 'gdyhfluyf', 'send', 2, NULL, '2018-07-27 10:54:35'),
(28, NULL, 'receive', NULL, 2, '2018-07-27 11:09:09'),
(29, 'hell cyeah', 'send', 3, NULL, '2018-07-27 11:12:11'),
(30, NULL, 'receive', NULL, 2, '2018-07-27 11:15:29'),
(31, 'testing wenks', 'send', 3, NULL, '2018-07-27 11:19:10'),
(32, NULL, 'receive', NULL, 2, '2018-07-27 11:20:13'),
(33, 'oiyiutaas;\'', 'send', 3, NULL, '2018-07-27 11:24:44'),
(34, 'basta kasjy', 'send', 2, NULL, '2018-07-27 11:27:26'),
(35, 'asxcvbnm,l.;\'dfghjkl;\'\r\ndfghjkl;\'dertfgyvbuhnjimk,l\r\niougytfduyfioj[ie0o4u0273942174-0aios]dfspdighfozpsadfkaspdofjoizhcvzcxvzkcvlkzjcvoiasdf', 'send', 3, NULL, '2018-07-27 12:41:03'),
(36, NULL, 'receive', NULL, 2, '2018-07-27 13:10:49'),
(37, 'obet is the best', 'send', 1, NULL, '2018-07-27 13:15:41'),
(38, 'GO LANG', 'send', 2, NULL, '2018-07-27 13:21:49'),
(39, NULL, 'receive', NULL, 3, '2018-07-27 13:22:43'),
(40, NULL, 'receive', NULL, 3, '2018-07-27 13:22:58'),
(41, 'hoyhoyhoyhoyhohyohoyhoyoyhohyohyooyoyhohyohyo', 'send', 3, NULL, '2018-07-27 13:25:31'),
(42, 'uytrwylkjhgfdsasdrftyuiop[zxcvfgbhjkl;', 'send', 1, NULL, '2018-07-27 13:26:22'),
(43, '', 'send', 2, NULL, '2018-07-27 14:12:02'),
(44, 'ahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushv', 'send', 1, NULL, '2018-07-27 14:19:36'),
(45, 'ahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushv', 'send', 1, NULL, '2018-07-27 14:21:41'),
(46, 'ahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushvahsgfdasyggdasgiuduasidhfuioasufhdasihviushviushv', 'send', 1, NULL, '2018-07-27 14:22:36'),
(47, 'pekekekekekeke', 'send', 1, NULL, '2018-07-27 14:23:11'),
(48, 'hi', 'send', 1, NULL, '2018-07-27 14:24:05'),
(49, '', 'send', 2, NULL, '2018-07-27 14:25:12'),
(50, '', 'send', 2, NULL, '2018-07-27 14:49:42');

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
  UNIQUE KEY `plan_id` (`plan_id`),
  KEY `plan_activity` (`plan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `procact`
--

INSERT INTO `procact` (`plan_id`, `pre_proc`, `advertisement`, `pre_bid`, `eligibility_check`, `open_bid`, `bid_evaluation`, `post_qual`, `award_notice`, `contract_signing`, `proceed_notice`, `delivery_completion`, `acceptance_turnover`) VALUES
(1, '2018-07-26', '2018-08-02', '2018-08-03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `procurement_mode`
--

INSERT INTO `procurement_mode` (`mode_id`, `mode`, `status`) VALUES
(1, 'Bidding', 'inactive'),
(2, 'SVP', 'active'),
(3, 'Negotiated', 'active'),
(4, 'z', 'active');

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
  `proceed_notice` enum('pending','finished','not_needed') NOT NULL,
  `delivery_completion` enum('pending','finished','not_needed') NOT NULL,
  `acceptance_turnover` enum('pending','finished','not_needed') NOT NULL,
  UNIQUE KEY `plan_id` (`plan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_activity_status`
--

INSERT INTO `project_activity_status` (`plan_id`, `pre_proc`, `advertisement`, `pre_bid`, `eligibility_check`, `open_bid`, `bid_evaluation`, `post_qual`, `award_notice`, `contract_signing`, `proceed_notice`, `delivery_completion`, `acceptance_turnover`) VALUES
(1, 'finished', 'finished', 'finished', 'pending', 'finished', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(2, 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(3, 'not_needed', 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(4, 'not_needed', 'not_needed', 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(5, 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(6, 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(7, 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(8, 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(9, 'not_needed', 'not_needed', 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(10, 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(11, 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(12, 'not_needed', 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(13, 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(14, 'not_needed', 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(15, 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(16, 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(17, 'not_needed', 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(18, 'not_needed', 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending'),
(19, 'not_needed', 'not_needed', 'not_needed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `project_document`
--

DROP TABLE IF EXISTS `project_document`;
CREATE TABLE IF NOT EXISTS `project_document` (
  `project_document_id` int(11) NOT NULL AUTO_INCREMENT,
  `plan_id` int(11) NOT NULL,
  `doc_type_id` int(11) NOT NULL,
  `added_by` int(11) NOT NULL,
  `previous_doc_loc` varchar(255) DEFAULT NULL,
  `current_doc_loc` varchar(255) DEFAULT NULL,
  `receiver` varchar(255) DEFAULT NULL,
  `status` enum('sent','received') DEFAULT NULL,
  `img_url` varchar(255) NOT NULL,
  PRIMARY KEY (`project_document_id`),
  KEY `plan_id` (`plan_id`),
  KEY `added_by` (`added_by`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_document`
--

INSERT INTO `project_document` (`project_document_id`, `plan_id`, `doc_type_id`, `added_by`, `previous_doc_loc`, `current_doc_loc`, `receiver`, `status`, `img_url`) VALUES
(1, 15, 37, 2, 'PEO', 'PGO', NULL, 'received', ''),
(2, 15, 38, 2, 'PEO', 'PGO', NULL, 'received', ''),
(3, 15, 39, 2, 'PEO', 'PGO', NULL, 'received', ''),
(4, 15, 40, 2, 'PEO', 'PGO', NULL, 'received', ''),
(5, 15, 41, 2, 'PEO', 'PGO', NULL, 'received', ''),
(6, 15, 42, 2, 'BAC_SEC', 'PEO', 'BAC_SEC', 'sent', ''),
(7, 15, 43, 2, 'BAC_SEC', 'PEO', 'BAC_SEC', 'sent', ''),
(8, 15, 14, 1, 'PEO', 'PGO', NULL, 'received', ''),
(9, 15, 15, 1, 'BAC_SEC', 'PEO', 'BAC_SEC', 'sent', ''),
(10, 15, 16, 1, 'PEO', 'PGO', NULL, 'received', ''),
(11, 15, 17, 1, 'PEO', 'PGO', NULL, 'received', ''),
(12, 15, 18, 1, 'PEO', 'PGO', NULL, 'received', ''),
(13, 15, 19, 1, 'PEO', 'PGO', NULL, 'received', ''),
(14, 15, 20, 1, 'BAC_SEC', 'PEO', 'BAC_SEC', 'sent', ''),
(15, 15, 21, 1, 'PEO', 'PGO', NULL, 'received', ''),
(16, 15, 22, 1, 'PEO', 'PGO', NULL, 'received', ''),
(17, 15, 23, 1, 'PEO', 'PGO', NULL, 'received', ''),
(18, 15, 24, 1, 'PEO', 'PGO', NULL, 'received', ''),
(19, 15, 25, 1, 'PEO', 'PGO', NULL, 'received', ''),
(20, 15, 26, 1, 'PEO', 'PGO', NULL, 'received', ''),
(21, 15, 27, 1, 'PEO', 'PGO', NULL, 'received', ''),
(22, 15, 28, 1, 'PEO', 'PGO', NULL, 'received', ''),
(23, 15, 29, 1, 'PEO', 'PGO', NULL, 'received', ''),
(24, 15, 30, 1, 'PEO', 'PGO', NULL, 'received', ''),
(25, 15, 31, 1, 'PEO', 'PGO', NULL, 'received', ''),
(26, 15, 32, 1, 'PEO', 'PGO', NULL, 'received', ''),
(27, 15, 33, 1, 'PEO', 'PGO', NULL, 'received', ''),
(28, 15, 34, 1, 'PEO', 'PGO', NULL, 'received', ''),
(29, 15, 35, 1, 'PEO', 'PGO', NULL, 'received', ''),
(30, 15, 36, 1, 'PEO', 'PGO', NULL, 'received', ''),
(31, 15, 44, 4, 'PEO', 'PGO', NULL, 'received', ''),
(32, 4, 5, 3, 'PEO', 'PGO', NULL, 'received', ''),
(33, 4, 6, 3, 'PEO', 'PGO', NULL, 'received', ''),
(34, 1, 7, 3, 'PGO', 'PEO', 'BAC_TWG', 'sent', ''),
(35, 1, 8, 3, 'PGO', 'PEO', NULL, 'received', ''),
(36, 1, 9, 3, 'PGO', 'PEO', NULL, 'received', ''),
(37, 1, 10, 3, 'PGO', 'PEO', 'BAC_TWG', 'sent', ''),
(38, 15, 11, 3, 'PEO', 'PGO', NULL, 'received', ''),
(39, 15, 12, 3, 'PEO', 'PGO', NULL, 'received', ''),
(40, 15, 13, 3, 'PEO', 'PGO', NULL, 'received', ''),
(41, 3, 1, 3, 'PGO', 'PEO', NULL, 'received', ''),
(42, 3, 2, 3, 'PGO', 'PEO', NULL, 'received', ''),
(43, 3, 3, 3, 'PGO', 'PEO', NULL, 'received', ''),
(44, 3, 4, 3, 'PGO', 'PEO', NULL, 'received', ''),
(45, 3, 5, 3, 'PGO', 'PEO', NULL, 'received', ''),
(46, 3, 6, 3, 'PGO', 'PEO', NULL, 'received', ''),
(47, 4, 13, 1, NULL, 'BAC_SEC', 'PEO', 'sent', ''),
(48, 4, 14, 1, NULL, 'BAC_SEC', 'PEO', 'sent', ''),
(49, 4, 30, 1, NULL, 'BAC_SEC', 'PEO', 'sent', ''),
(50, 4, 31, 1, NULL, 'BAC_SEC', 'PEO', 'sent', ''),
(51, 4, 32, 1, NULL, 'BAC_SEC', 'PEO', 'sent', ''),
(52, 3, 14, 3, NULL, 'PGO', 'PEO', 'sent', ''),
(53, 3, 15, 3, NULL, 'PGO', 'PEO', 'sent', ''),
(54, 3, 16, 3, NULL, 'PGO', 'PEO', 'sent', ''),
(55, 3, 17, 3, NULL, 'PGO', 'PEO', 'sent', ''),
(56, 3, 13, 1, NULL, 'BAC_SEC', 'PEO', 'sent', ''),
(57, 3, 18, 1, NULL, 'BAC_SEC', 'PEO', 'sent', ''),
(58, 19, 9, 1, NULL, 'BAC_SEC', 'PEO', 'sent', ''),
(59, 19, 10, 1, NULL, 'BAC_SEC', 'PEO', 'sent', ''),
(60, 7, 5, 1, NULL, 'BAC_SEC', 'PEO', 'sent', ''),
(61, 7, 6, 1, NULL, 'BAC_SEC', 'PEO', 'sent', ''),
(62, 7, 7, 1, NULL, 'BAC_SEC', 'PEO', 'sent', ''),
(63, 10, 4, 2, NULL, 'PEO', NULL, 'received', ''),
(64, 10, 5, 2, NULL, 'PEO', NULL, 'received', ''),
(65, 10, 6, 2, NULL, 'PEO', NULL, 'received', ''),
(66, 10, 7, 2, NULL, 'PEO', NULL, 'received', '');

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
-- Table structure for table `project_plan`
--

DROP TABLE IF EXISTS `project_plan`;
CREATE TABLE IF NOT EXISTS `project_plan` (
  `plan_id` int(11) NOT NULL AUTO_INCREMENT,
  `project_no` int(11) NOT NULL,
  `project_title` varchar(255) NOT NULL,
  `project_year` year(4) DEFAULT NULL,
  `project_type` enum('regular','supplementary') DEFAULT NULL,
  `municipality_id` int(11) NOT NULL,
  `barangay_id` int(11) NOT NULL,
  `projtype_id` int(11) NOT NULL,
  `mode_id` int(11) NOT NULL,
  `fund_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `abc` double(25,2) NOT NULL,
  `status` enum('pending','onprocess','for_implementation','for_rebid','for_review','completed') NOT NULL DEFAULT 'pending',
  `re_bid_count` int(11) NOT NULL DEFAULT '0',
  `date_added` date DEFAULT NULL,
  `pow_ready` enum('true','false') NOT NULL DEFAULT 'false',
  `date_pow_added` datetime DEFAULT NULL,
  `contractor_id` int(11) DEFAULT NULL,
  `proposed_bid` double(25,2) DEFAULT NULL,
  PRIMARY KEY (`plan_id`),
  KEY `plan_municipality` (`municipality_id`),
  KEY `plan_barangay` (`barangay_id`),
  KEY `plan_type` (`projtype_id`),
  KEY `plan_mode` (`mode_id`),
  KEY `plan_fund` (`fund_id`),
  KEY `plan_account` (`account_id`),
  KEY `project_plan_ibfk_1` (`contractor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_plan`
--

INSERT INTO `project_plan` (`plan_id`, `project_no`, `project_title`, `project_year`, `project_type`, `municipality_id`, `barangay_id`, `projtype_id`, `mode_id`, `fund_id`, `account_id`, `abc`, `status`, `re_bid_count`, `date_added`, `pow_ready`, `date_pow_added`, `contractor_id`, `proposed_bid`) VALUES
(1, 9999, 'Stairway to Heaven', 2018, 'regular', 1, 7, 1, 1, 2, 1, 6000000.00, 'onprocess', 0, '2018-07-26', 'true', NULL, NULL, NULL),
(2, 9998, 'Highway to Hell', 2018, 'regular', 9, 92, 9, 1, 7, 1, 5000000.00, 'onprocess', 0, '2018-07-26', 'true', '0000-00-00 00:00:00', NULL, NULL),
(3, 9997, 'Bridge over the sky', 2018, 'regular', 7, 73, 2, 1, 4, 1, 2000000.00, 'onprocess', 0, '2018-07-26', 'true', NULL, NULL, NULL),
(4, 9996, 'Vila de Caliway', 2018, 'regular', 10, 138, 3, 2, 4, 1, 900000.00, 'onprocess', 0, '2018-07-26', 'true', NULL, NULL, NULL),
(5, 6678, 'Cafe De Turo-Turo', 2017, 'regular', 1, 8, 15, 1, 4, 1, 6500000.00, 'onprocess', 0, '2018-07-26', 'true', NULL, NULL, NULL),
(6, 9987, 'Town\'s Portal', 2017, 'regular', 2, 15, 2, 2, 2, 1, 68000222.00, 'pending', 0, '2018-07-26', 'false', NULL, NULL, NULL),
(7, 5543, 'Heaven\'s Castle', 2017, 'regular', 13, 136, 5, 2, 13, 1, 8000000.00, 'onprocess', 0, '2018-07-26', 'true', NULL, NULL, NULL),
(8, 666, 'Simon\'s Town of Valley', 2017, 'regular', 9, 92, 3, 3, 11, 1, 54000000.00, 'pending', 0, '2018-07-26', 'false', NULL, NULL, NULL),
(9, 6667, 'Simon\'s Town Pizza', 2017, 'regular', 10, 138, 5, 2, 12, 1, 545000.00, 'pending', 0, '2018-07-26', 'false', NULL, NULL, NULL),
(10, 2718, 'Gin Valley', 2017, 'regular', 8, 80, 10, 1, 5, 2, 8004000.00, 'onprocess', 0, '2018-07-26', 'true', NULL, NULL, NULL),
(11, 27181, 'Lorencia Buiding', 2017, 'regular', 13, 136, 3, 1, 5, 2, 8004000.00, 'pending', 0, '2018-07-26', 'false', NULL, NULL, NULL),
(12, 99931, 'Julia\'s Building', 2017, 'regular', 1, 5, 1, 1, 4, 1, 4000000.00, 'onprocess', 0, '2018-07-26', 'true', '2018-07-27 08:23:46', NULL, NULL),
(13, 1, 'Reuel\'s Farmland', 2018, 'regular', 5, 45, 6, 3, 1, 1, 7999999.00, 'pending', 0, '2018-07-26', 'false', NULL, NULL, NULL),
(14, 2, 'Reuel\'s Gin Building', 2018, 'regular', 10, 138, 5, 3, 2, 2, 2000000.00, 'pending', 0, '2018-07-26', 'false', NULL, NULL, NULL),
(15, 3000, 'Bigo\'s National Highway', 2018, 'regular', 2, 15, 2, 2, 2, 2, 240000000.00, 'onprocess', 0, '2018-07-26', 'true', NULL, NULL, NULL),
(16, 6546, 'Kiki\'s Footbridge', 2018, 'regular', 4, 139, 8, 1, 11, 1, 7900000.00, 'pending', 0, '2018-07-26', 'false', NULL, NULL, NULL),
(17, 20001, 'Sunguan Building', 2018, 'regular', 9, 96, 15, 2, 2, 2, 4000400.00, 'pending', 0, '2018-07-26', 'false', NULL, NULL, NULL),
(18, 2100, 'Kapitan Building', 2016, 'regular', 7, 73, 1, 3, 2, 2, 4020010.00, 'pending', 0, '2018-07-26', 'false', NULL, NULL, NULL),
(19, 987, 'Bahay na Bato', 2018, 'regular', 13, 135, 2, 2, 13, 1, 900000.00, 'onprocess', 0, '2018-07-26', 'true', NULL, NULL, NULL);

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
(1, 'set', '2018-07-26', '2018-07-26', '2018-08-02', '2018-08-03', '2018-08-03', '2018-08-15', '2018-08-15', '2018-08-16', '2018-08-16', '2018-08-17', '2018-08-17', '2018-08-18', '2018-08-18', '2018-08-19', '2018-08-19', '2018-08-20', '2018-08-20', '2018-08-21', '2018-08-21'),
(2, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projtype`
--

INSERT INTO `projtype` (`projtype_id`, `type`, `status`) VALUES
(1, 'FMP', 'active'),
(2, 'Bridge', 'active'),
(3, 'Munti-Purpose Building/Hall/Outpost', 'active'),
(5, 'School Building', 'active'),
(6, 'Senior Citizen\'s Building', 'active'),
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
(18, 'reuel', 'active');

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
(5, 'asdasasdasdasd', 'asdasd', 'asdas', '5asdas', 'capitol', 'BAC_TWG', 'active'),
(6, 'fd', 'd', 'da', '6da', 'capitol', 'BAC_TWG', 'active');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barangays`
--
ALTER TABLE `barangays`
  ADD CONSTRAINT `selected_municipality` FOREIGN KEY (`municipality_id`) REFERENCES `municipalities` (`municipality_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `plan_activity` FOREIGN KEY (`plan_id`) REFERENCES `project_plan` (`plan_id`) ON UPDATE CASCADE;

--
-- Constraints for table `project_activity_status`
--
ALTER TABLE `project_activity_status`
  ADD CONSTRAINT `project_activity_status_ibfk_1` FOREIGN KEY (`plan_id`) REFERENCES `project_plan` (`plan_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `project_document`
--
ALTER TABLE `project_document`
  ADD CONSTRAINT `project_document_ibfk_1` FOREIGN KEY (`plan_id`) REFERENCES `project_plan` (`plan_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `project_document_ibfk_2` FOREIGN KEY (`added_by`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `project_logs`
--
ALTER TABLE `project_logs`
  ADD CONSTRAINT `project_logs_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `project_logs_ibfk_3` FOREIGN KEY (`plan_id`) REFERENCES `project_plan` (`plan_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `project_timeline_ibfk_1` FOREIGN KEY (`plan_id`) REFERENCES `project_plan` (`plan_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
