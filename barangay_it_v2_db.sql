-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2019 at 07:05 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barangay_it_v2_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `r_barangay_information`
--

CREATE TABLE `r_barangay_information` (
  `BARANGAY_ID` int(11) NOT NULL,
  `BARANGAY_NAME` varchar(255) DEFAULT NULL,
  `BARANGAY_SEAL` varchar(150) DEFAULT NULL,
  `LAND_AREA` double(255,0) DEFAULT NULL,
  `CREATED_AT` datetime DEFAULT CURRENT_TIMESTAMP,
  `UPDATED_AT` datetime DEFAULT CURRENT_TIMESTAMP,
  `ACTIVE_FLAG` int(11) DEFAULT '1',
  `USER_ID` int(11) DEFAULT NULL,
  `MUNICIPAL_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `r_barangay_information`
--

INSERT INTO `r_barangay_information` (`BARANGAY_ID`, `BARANGAY_NAME`, `BARANGAY_SEAL`, `LAND_AREA`, `CREATED_AT`, `UPDATED_AT`, `ACTIVE_FLAG`, `USER_ID`, `MUNICIPAL_ID`) VALUES
(1, 'Cayabu', 'PUPLogo.png', 177, '2019-07-29 19:58:45', '2019-07-29 19:58:45', 1, 32, 1),
(2, 'Cuyambay', NULL, 177, '2019-07-29 19:58:45', '2019-07-29 19:58:45', 1, NULL, 1),
(3, 'Daraitan', NULL, 177, '2019-07-29 19:58:45', '2019-07-29 19:58:45', 1, NULL, 1),
(4, 'Katipunan-Bayani', NULL, 177, '2019-07-29 19:58:45', '2019-07-29 19:58:45', 1, NULL, 1),
(5, 'Kay Buto', NULL, 177, '2019-07-29 19:58:45', '2019-07-29 19:58:45', 1, NULL, 1),
(6, 'Laiban', NULL, 177, '2019-07-29 19:58:45', '2019-07-29 19:58:45', 1, NULL, 1),
(7, 'Mag-Ampon ', NULL, 177, '2019-07-29 19:58:45', '2019-07-29 19:58:45', 1, NULL, 1),
(8, 'Mamuyao', NULL, 177, '2019-07-29 19:58:45', '2019-07-29 19:58:45', 1, NULL, 1),
(9, 'Pinagkamaligan', NULL, 177, '2019-07-29 19:58:45', '2019-07-29 19:58:45', 1, NULL, 1),
(10, 'Plaza Aldea', NULL, 177, '2019-07-29 19:58:45', '2019-07-29 19:58:45', 1, NULL, 1),
(11, 'Sampaloc', NULL, 177, '2019-07-29 19:58:45', '2019-07-29 19:58:45', 1, NULL, 1),
(12, 'SAMPLE', '26-266186_ocr-a-char-left-curly-bracket-left-curly.png', 177, '2019-08-03 02:14:57', '2019-08-03 02:14:57', 1, 35, 1);

-- --------------------------------------------------------

--
-- Table structure for table `r_barangay_zone`
--

CREATE TABLE `r_barangay_zone` (
  `BARANGAY_ZONE_ID` int(11) NOT NULL,
  `BARANGAY_ZONE_NAME` varchar(250) DEFAULT NULL,
  `BARANGAY_ZONE_DESC` varchar(250) DEFAULT NULL,
  `BARANGAY_ID` int(11) DEFAULT NULL,
  `CREATED_AT` datetime DEFAULT CURRENT_TIMESTAMP,
  `UPDATED_AT` datetime DEFAULT CURRENT_TIMESTAMP,
  `ACTIVE_FLAG` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `r_barangay_zone`
--

INSERT INTO `r_barangay_zone` (`BARANGAY_ZONE_ID`, `BARANGAY_ZONE_NAME`, `BARANGAY_ZONE_DESC`, `BARANGAY_ID`, `CREATED_AT`, `UPDATED_AT`, `ACTIVE_FLAG`) VALUES
(1, 'Cayabu Zone 1', NULL, 1, '2019-07-29 00:00:00', '2019-07-29 00:00:00', 1),
(2, 'Cayabu Zone 2', NULL, 1, '2019-07-29 00:00:00', '2019-07-29 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `r_bf_facilities_equipment`
--

CREATE TABLE `r_bf_facilities_equipment` (
  `FACILITY_EQUIPMENT_ID` int(11) NOT NULL,
  `FACILITY_EQUIPMENT_NAME` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `r_bf_facilities_equipment`
--

INSERT INTO `r_bf_facilities_equipment` (`FACILITY_EQUIPMENT_ID`, `FACILITY_EQUIPMENT_NAME`) VALUES
(1, 'Chair'),
(2, 'Table'),
(3, 'Tent'),
(4, 'Vehicle'),
(5, 'Microphone'),
(6, 'Sound System'),
(7, 'Ambulance'),
(8, 'Covered Court'),
(9, 'Light');

-- --------------------------------------------------------

--
-- Table structure for table `r_bf_line_of_business`
--

CREATE TABLE `r_bf_line_of_business` (
  `LINE_OF_BUSINESS_ID` int(11) NOT NULL,
  `LINE_OF_BUSINESS_NAME` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `r_bf_line_of_business`
--

INSERT INTO `r_bf_line_of_business` (`LINE_OF_BUSINESS_ID`, `LINE_OF_BUSINESS_NAME`) VALUES
(1, 'Agriculture'),
(2, 'Forestry'),
(3, 'Fishery'),
(4, 'Mining'),
(5, 'Food Processing Industry'),
(6, 'Textile and Clothing Industry'),
(7, 'Leather Industry'),
(8, 'Wood Processing Industry'),
(9, 'Paper Industry'),
(10, 'Printing Industry'),
(11, 'Chemical Industry'),
(12, 'Glass and Ceramic'),
(13, 'Machine and Metal-Working Industry'),
(14, 'Production of Electricity and Gas'),
(15, 'Building Industry'),
(16, 'Retail Sale and Wholesale'),
(17, 'Storage and Complementary Services'),
(18, 'Accommodation and Catering Services'),
(19, 'Information, Communication and Publishing'),
(20, 'Financial Activities'),
(21, 'Education'),
(22, 'Health Care and Social Services'),
(23, 'Cultural, Entertainment, Recreational, Sport Activ'),
(24, 'Real Estate and Renting'),
(25, 'Scientific and Technic Testing and  Analyses'),
(26, 'Sewage System, Waste, Services in Waste Removal');

-- --------------------------------------------------------

--
-- Table structure for table `r_blotter_subjects`
--

CREATE TABLE `r_blotter_subjects` (
  `BLOTTER_SUBJECT_ID` int(11) NOT NULL,
  `BLOTTER_NAME` varchar(50) DEFAULT NULL,
  `CREATED_AT` datetime DEFAULT NULL,
  `UPDATED_AT` datetime DEFAULT NULL,
  `ACTIVE_FLAG` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `r_blotter_subjects`
--

INSERT INTO `r_blotter_subjects` (`BLOTTER_SUBJECT_ID`, `BLOTTER_NAME`, `CREATED_AT`, `UPDATED_AT`, `ACTIVE_FLAG`) VALUES
(3, 'Missing Person', '2019-08-03 04:20:00', '2019-08-01 05:38:53', 1);

-- --------------------------------------------------------

--
-- Table structure for table `r_business_nature`
--

CREATE TABLE `r_business_nature` (
  `BUSINESS_NATURE_ID` int(11) NOT NULL,
  `BUSINESS_NATURE_NAME` varchar(100) DEFAULT NULL,
  `BUSINESS_NATURE_DESCRIPTION` varchar(250) DEFAULT NULL,
  `CREATED_AT` datetime DEFAULT CURRENT_TIMESTAMP,
  `UPDATED_AT` datetime DEFAULT CURRENT_TIMESTAMP,
  `ACTIVE_FLAG` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `r_business_nature`
--

INSERT INTO `r_business_nature` (`BUSINESS_NATURE_ID`, `BUSINESS_NATURE_NAME`, `BUSINESS_NATURE_DESCRIPTION`, `CREATED_AT`, `UPDATED_AT`, `ACTIVE_FLAG`) VALUES
(1, 'Service Business', 'A service type of business provides intangible products (products with no physical form). Service type firms offer professional skills, expertise, advice, and other similar products.\r\n\r\nExamples of service businesses are: salons, repair shops, school', '2019-07-29 19:53:14', '2019-07-29 19:53:14', 1),
(2, 'Merchandising Business', 'This type of business buys products at wholesale price and sells the same at retail price. They are known as \"buy and sell\" businesses. They make profit by selling the products at prices higher than their purchase costs.\r\n\r\nA merchandising business s', '2019-07-29 19:53:14', '2019-07-29 19:53:14', 1),
(3, 'Manufacturing Business', 'Unlike a merchandising business, a manufacturing business buys products with the intention of using them as materials in making a new product. Thus, there is a transformation of the products purchased.\r\n\r\nA manufacturing business combines raw materia', '2019-07-29 19:53:14', '2019-07-29 19:53:14', 1),
(4, 'Hybrid Business', 'Hybrid businesses are companies that may be classified in more than one type of business. A restaurant, for example, combines ingredients in making a fine meal (manufacturing), sells a cold bottle of wine (merchandising), and fills customer orders (s', '2019-07-29 19:53:14', '2019-08-02 19:00:28', 1);

-- --------------------------------------------------------

--
-- Table structure for table `r_issuance_category`
--

CREATE TABLE `r_issuance_category` (
  `ISSUANCE_CATEGORY_ID` int(11) NOT NULL,
  `ISSUANCE_NAME` varchar(50) DEFAULT NULL,
  `ISSUANCE_DESCRIPTION` varchar(250) DEFAULT NULL,
  `CREATED_AT` datetime DEFAULT CURRENT_TIMESTAMP,
  `UPDATED_AT` datetime DEFAULT CURRENT_TIMESTAMP,
  `ACTIVE_FLAG` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `r_issuance_category`
--

INSERT INTO `r_issuance_category` (`ISSUANCE_CATEGORY_ID`, `ISSUANCE_NAME`, `ISSUANCE_DESCRIPTION`, `CREATED_AT`, `UPDATED_AT`, `ACTIVE_FLAG`) VALUES
(1, 'Application Barangay Business Permit Form', NULL, '2019-07-29 00:00:00', '2019-07-29 00:00:00', 1),
(2, 'Application Barangay Clearance Form', NULL, '2019-07-29 00:00:00', '2019-07-29 00:00:00', 1),
(3, 'Request Barangay Certification Form', NULL, '2019-07-29 00:00:00', '2019-07-29 00:00:00', 1),
(4, 'Request Certified Records', NULL, '2019-07-29 00:00:00', '2019-07-23 00:00:00', 1),
(5, 'Application Use Of Barangay Property Facilities', NULL, '2019-07-22 00:00:00', '2019-07-30 00:00:00', 1),
(6, 'Transient Registration Form', NULL, '2019-07-30 00:00:00', '2019-07-30 00:00:00', 1),
(7, 'Barangay Business Permit', NULL, '2019-07-30 00:00:00', '2019-07-17 00:00:00', 1),
(8, 'Barangay Clearance Building', NULL, '2019-07-16 00:00:00', '2019-07-11 00:00:00', 1),
(9, 'Barangay Clearance Business', NULL, '2019-07-18 00:00:00', '2019-07-10 00:00:00', 1),
(10, 'Barangay Clearance Zonal', NULL, '2019-07-12 00:00:00', '2019-07-03 00:00:00', 1),
(11, 'Barangay Clearance Tricycle', NULL, '2019-07-23 00:00:00', '2019-07-09 00:00:00', 1),
(12, 'Barangay Clearance General Purposes', NULL, '2019-08-05 18:40:21', '2019-08-05 18:40:21', 1),
(13, 'Barangay Certificate Residency', NULL, '2019-08-04 11:50:09', '2019-08-04 11:50:09', 1),
(14, 'Barangay Certificate Calamity Loan SSS-GSIS', NULL, '2019-08-04 11:50:31', '2019-08-04 11:50:31', 1),
(15, 'Barangay Certificate Calamity Loan OFW', NULL, '2019-08-04 11:50:56', '2019-08-04 11:50:56', 1),
(16, 'Barangay Certificate SPES', NULL, '2019-08-04 11:51:18', '2019-08-04 11:51:18', 1),
(17, 'Barangay Certificate Solo Parent', NULL, '2019-08-04 11:51:36', '2019-08-04 11:51:36', 1),
(18, 'Barangay Certificate Indigency', NULL, '2019-08-04 11:51:45', '2019-08-04 11:51:45', 1);

-- --------------------------------------------------------

--
-- Table structure for table `r_municipal_information`
--

CREATE TABLE `r_municipal_information` (
  `MUNICIPAL_ID` int(11) NOT NULL,
  `MUNICIPAL_NAME` varchar(50) NOT NULL,
  `PROVINCE_NAME` varchar(50) NOT NULL,
  `MUNICIPAL_SEAL` varchar(50) NOT NULL,
  `CREATED_AT` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UPDATED_AT` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `r_municipal_information`
--

INSERT INTO `r_municipal_information` (`MUNICIPAL_ID`, `MUNICIPAL_NAME`, `PROVINCE_NAME`, `MUNICIPAL_SEAL`, `CREATED_AT`, `UPDATED_AT`) VALUES
(1, 'Tanay', 'Rizal', 'PUPLogo.png', '2019-09-26 23:08:22', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `r_ordinance_category`
--

CREATE TABLE `r_ordinance_category` (
  `ORDINANCE_CATEGORY_ID` int(11) NOT NULL,
  `ORDINANCE_CATEGORY_NAME` varchar(100) DEFAULT NULL,
  `CREATED_AT` datetime DEFAULT NULL,
  `UPDATED_AT` datetime DEFAULT NULL,
  `ACTIVE_FLAG` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `r_ordinance_category`
--

INSERT INTO `r_ordinance_category` (`ORDINANCE_CATEGORY_ID`, `ORDINANCE_CATEGORY_NAME`, `CREATED_AT`, `UPDATED_AT`, `ACTIVE_FLAG`) VALUES
(1, 'Fare Increase', '2019-08-02 19:07:10', '2019-08-01 05:32:17', 1),
(2, 'Missing person', '2019-08-02 19:08:16', '2019-08-02 19:15:36', 1);

-- --------------------------------------------------------

--
-- Table structure for table `r_position`
--

CREATE TABLE `r_position` (
  `POSITION_ID` int(11) NOT NULL,
  `POSITION_NAME` varchar(50) DEFAULT NULL,
  `CREATED_AT` datetime DEFAULT NULL,
  `UPDATED_AT` datetime DEFAULT NULL,
  `ACTIVE_FLAG` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `r_position`
--

INSERT INTO `r_position` (`POSITION_ID`, `POSITION_NAME`, `CREATED_AT`, `UPDATED_AT`, `ACTIVE_FLAG`) VALUES
(2, 'Barangay Chairman', '2019-07-30 12:14:56', '2019-08-03 04:57:43', 1),
(3, 'Secretary', '2019-07-30 12:14:59', NULL, 1),
(4, 'Chief Tanod', '2019-07-30 12:15:02', NULL, 1),
(5, 'Data Protection Officer', '2019-07-30 12:15:04', NULL, 1),
(6, 'Admin', '2019-07-30 12:15:06', NULL, 1),
(16, 'Census Officer', '2019-09-19 10:29:06', NULL, NULL),
(17, 'Kagawad', '2019-09-19 10:29:06', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `r_resident_type`
--

CREATE TABLE `r_resident_type` (
  `TYPE_ID` int(11) NOT NULL,
  `TYPE_NAME` varchar(50) DEFAULT NULL,
  `CREATED_AT` datetime DEFAULT NULL,
  `UPDATED_AT` datetime DEFAULT NULL,
  `ACTIVE_FLAG` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `r_resident_type`
--

INSERT INTO `r_resident_type` (`TYPE_ID`, `TYPE_NAME`, `CREATED_AT`, `UPDATED_AT`, `ACTIVE_FLAG`) VALUES
(1, 'Native Residents', '2019-08-05 04:48:04', NULL, 1),
(2, 'Migrants', '2019-08-05 04:49:10', NULL, 1),
(3, 'Transients', '2019-08-05 04:49:27', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_barangay_official`
--

CREATE TABLE `t_barangay_official` (
  `BARANGAY_OFFICIAL_ID` int(11) NOT NULL,
  `RESIDENT_ID` int(11) DEFAULT NULL,
  `BARANGAY_ID` int(11) DEFAULT NULL,
  `START_TERM` date DEFAULT NULL,
  `END_TERM` date DEFAULT NULL,
  `CREATED_AT` datetime DEFAULT NULL,
  `UPDATED_AT` datetime DEFAULT NULL,
  `ACTIVE_FLAG` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `t_barangay_official`
--

INSERT INTO `t_barangay_official` (`BARANGAY_OFFICIAL_ID`, `RESIDENT_ID`, `BARANGAY_ID`, `START_TERM`, `END_TERM`, `CREATED_AT`, `UPDATED_AT`, `ACTIVE_FLAG`) VALUES
(1, 2444, 1, '2019-08-05', '2020-06-05', '2019-08-05 22:19:55', NULL, 1),
(2, 2443, 1, '2019-08-05', '2020-06-05', '2019-08-09 01:18:43', NULL, 1),
(3, 2445, 1, '2019-09-17', '2022-09-17', '2019-09-18 13:09:08', NULL, 1),
(4, 2440, 1, '2019-09-16', '2022-09-16', '2019-09-18 23:35:19', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_bf_barangay_certification`
--

CREATE TABLE `t_bf_barangay_certification` (
  `BARANGAY_CERTIFICATION_ID` int(11) NOT NULL,
  `RESIDENT_ID` int(11) DEFAULT NULL,
  `BF_MAIN_LGU_ID` int(11) DEFAULT NULL,
  `PAYMENT_DETAILS_ID` int(11) DEFAULT NULL,
  `ID_PRESENTED` varchar(50) DEFAULT NULL,
  `DATE_ISSUE` date DEFAULT NULL,
  `VALIDITY` varchar(50) DEFAULT NULL,
  `CREATED_AT` datetime DEFAULT NULL,
  `UPDATED_AT` datetime DEFAULT NULL,
  `ACTIVE_FLAG` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `t_bf_barangay_clearance`
--

CREATE TABLE `t_bf_barangay_clearance` (
  `BARANGAY_CLEARANCE_ID` int(11) NOT NULL,
  `BUSINESS_ID` int(11) DEFAULT NULL,
  `BF_MAIN_LGU_ID` int(11) DEFAULT NULL,
  `PAYMENT_DETAILS_ID` int(11) DEFAULT NULL,
  `REGISTERED_NAME` varchar(150) DEFAULT NULL,
  `KIND_OF_BUSINESS` varchar(50) DEFAULT NULL,
  `CONSTRUCTION_ADDRESS` varchar(100) DEFAULT NULL,
  `SCOPE_OF_WORK_ID` int(11) DEFAULT NULL,
  `OCCUPANCY_TYPE` varchar(50) DEFAULT NULL,
  `KIND_OF_SIGNAGE` varchar(50) DEFAULT NULL,
  `SIGNAGE_WORDINGS` varchar(50) DEFAULT NULL,
  `NO_STOREYS_BUILDING` varchar(50) DEFAULT NULL,
  `START_DATE_INSTALLATION` date DEFAULT NULL,
  `END_COMPLETION` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `t_bf_barangay_clearance`
--

INSERT INTO `t_bf_barangay_clearance` (`BARANGAY_CLEARANCE_ID`, `BUSINESS_ID`, `BF_MAIN_LGU_ID`, `PAYMENT_DETAILS_ID`, `REGISTERED_NAME`, `KIND_OF_BUSINESS`, `CONSTRUCTION_ADDRESS`, `SCOPE_OF_WORK_ID`, `OCCUPANCY_TYPE`, `KIND_OF_SIGNAGE`, `SIGNAGE_WORDINGS`, `NO_STOREYS_BUILDING`, `START_DATE_INSTALLATION`, `END_COMPLETION`) VALUES
(3, 1, 15, 25, 'SCOPE_OF_WORK_ID', 'SCOPE_OF_WORK_ID', NULL, 10, 'Residential', 'Installed', 'SCOPE_OF_WORK_ID', '12', '2019-08-16', '2019-08-08'),
(4, 1, 16, 26, NULL, NULL, NULL, 11, '-- Occupancy Type --', '-- Kind of Signage --', NULL, NULL, NULL, NULL),
(5, 8, 17, 27, 'FSD', 'FDSA', NULL, 12, 'Commercial', 'Attached', 'FDAS', '2', '2019-08-07', '2019-08-03'),
(6, 4, 19, 29, 'fdsa', 'fdsa', NULL, 13, 'Commercial', 'Installed', 'fdsa', '1', '2019-08-10', '2019-08-23');

-- --------------------------------------------------------

--
-- Table structure for table `t_bf_business_activity`
--

CREATE TABLE `t_bf_business_activity` (
  `BUSINESS_ACTIVITY_ID` int(11) NOT NULL,
  `LINE_OF_BUSINESS_ID` int(11) NOT NULL,
  `NO_OF_UNITS` varchar(50) DEFAULT NULL,
  `CAPITALIZATION` varchar(50) DEFAULT NULL,
  `GROSS_RECEIPTS_ESSENTIAL` varchar(50) DEFAULT NULL,
  `GROSS_RECEIPTS_NON_ESSENTIAL` varchar(50) DEFAULT NULL,
  `BUSINESS_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `t_bf_business_activity`
--

INSERT INTO `t_bf_business_activity` (`BUSINESS_ACTIVITY_ID`, `LINE_OF_BUSINESS_ID`, `NO_OF_UNITS`, `CAPITALIZATION`, `GROSS_RECEIPTS_ESSENTIAL`, `GROSS_RECEIPTS_NON_ESSENTIAL`, `BUSINESS_ID`) VALUES
(22, 5, '1', '43234', NULL, NULL, 4),
(23, 6, NULL, NULL, NULL, NULL, 5),
(24, 6, NULL, NULL, NULL, NULL, 6),
(25, 2, '1', '50000', NULL, NULL, 7);

-- --------------------------------------------------------

--
-- Table structure for table `t_bf_business_permit`
--

CREATE TABLE `t_bf_business_permit` (
  `BUSINESS_PERMIT_ID` int(11) NOT NULL,
  `BUSINESS_ID` int(11) DEFAULT NULL,
  `BF_MAIN_LGU_ID` int(11) DEFAULT NULL,
  `PAYMENT_DETAILS_ID` int(11) DEFAULT NULL,
  `AMENDMENT_FROM` varchar(50) DEFAULT NULL,
  `AMENDMENT_TO` varchar(50) DEFAULT NULL,
  `IS_ENJOYING_TAZ_INCENTIVE` tinyint(4) DEFAULT NULL,
  `SPECIFY_REASON` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `t_bf_business_permit`
--

INSERT INTO `t_bf_business_permit` (`BUSINESS_PERMIT_ID`, `BUSINESS_ID`, `BF_MAIN_LGU_ID`, `PAYMENT_DETAILS_ID`, `AMENDMENT_FROM`, `AMENDMENT_TO`, `IS_ENJOYING_TAZ_INCENTIVE`, `SPECIFY_REASON`) VALUES
(6, 1, 5, 5, 'Single', 'Single', 1, 'Enjoying the Tax'),
(7, 2, 5, 5, 'Corporate', 'Corporate', 0, NULL),
(9, 2, 9, 16, 'Partnership', 'Partnership', 1, 'LOREM'),
(10, 4, 10, 17, 'Partnership', 'Partnership', 1, 'BarangayBusinessPermit'),
(11, 6, 11, 18, 'Partnership', 'Corporation', 1, 'Of course it\'s an incentive, everybody enjoys it'),
(12, 4, 18, 28, 'Corporation', 'Partnership', 1, 'fds'),
(13, 2, 20, 30, 'Partnership', 'Partnership', 1, 'fds'),
(14, 5, 21, 31, 'Partnership', 'Partnership', 1, 'fdsa'),
(15, 2, 22, 32, 'Single', 'Single', 0, NULL),
(16, 7, 23, 33, 'Single', 'Partnership', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_bf_certified_record`
--

CREATE TABLE `t_bf_certified_record` (
  `CERTIFIED_RECORD_ID` int(11) NOT NULL,
  `RESIDENT_ID` int(11) DEFAULT NULL,
  `BF_MAIN_LGU_ID` int(11) DEFAULT NULL,
  `PAYMENT_DETAILS_ID` int(11) DEFAULT NULL,
  `RECORD_TYPE_REQUEST` varchar(50) DEFAULT NULL,
  `CREATED_AT` datetime DEFAULT NULL,
  `UPDATED_AT` datetime DEFAULT NULL,
  `ACTIVE_FLAG` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `t_bf_main_lgu`
--

CREATE TABLE `t_bf_main_lgu` (
  `BF_MAIN_LGU_ID` int(11) NOT NULL,
  `ORIGINAL_TRANSFER_CERTIFICATE_AGENCY` varchar(50) DEFAULT NULL,
  `ORIGINAL_TRANSFER_CERTIFICATE_FLAG` varchar(50) DEFAULT NULL,
  `TAX_DECLARATION_AGENCY` varchar(50) DEFAULT NULL,
  `TAX_DECLARATION_FLAG` varchar(50) DEFAULT NULL,
  `CONTRACT_OF_LEASE_AGENCY` varchar(50) DEFAULT NULL,
  `CONTRACT_OF_LEASE_FLAG` varchar(50) DEFAULT NULL,
  `GROSS_RECEIPT_AGENCY` varchar(50) DEFAULT NULL,
  `GROSS_RECEIPT_FLAG` varchar(50) DEFAULT NULL,
  `SET_OF_MAP_AGENCY` varchar(50) DEFAULT NULL,
  `SET_OF_MAP_FLAG` varchar(50) DEFAULT NULL,
  `BILLS_OF_MATERIALS_AGENCY` varchar(50) DEFAULT NULL,
  `BILLS_OF_MATERIALS_FLAG` varchar(50) DEFAULT NULL,
  `OCCUPANCY_PERMIT_AGENCY` varchar(50) DEFAULT NULL,
  `OCCUPANCY_PERMIT_FLAG` varchar(50) DEFAULT NULL,
  `OR_OF_TRICYCLE_AGENCY` varchar(50) DEFAULT NULL,
  `OR_OF_TRICYCLE_FLAG` varchar(50) DEFAULT NULL,
  `PAYMENT_TODA_MEMBERSHIP_AGENCY` varchar(50) DEFAULT NULL,
  `PAYMENT_TODA_MEMBERSHIP_FLAG` varchar(50) DEFAULT NULL,
  `CTC_AGENCY` varchar(50) DEFAULT NULL,
  `CTC_FLAG` varchar(50) DEFAULT NULL,
  `BP_BUSINESS_REGISTRATION_AGENCY` varchar(50) DEFAULT NULL,
  `BP_BUSINESS_REGISTRATION_FLAG` varchar(50) DEFAULT NULL,
  `BP_BUSINESS_CAPITALIZATION_AGENCY` varchar(50) DEFAULT NULL,
  `BP_BUSINESS_CAPITALIZATION_FLAG` varchar(50) DEFAULT NULL,
  `GROSS_SALES_TAX_AMOUNT` varchar(50) DEFAULT NULL,
  `GROSS_SALES_TAX_SURCHARGE` varchar(50) DEFAULT NULL,
  `TAX_OR_SIGNBOARD_AMOUNT` varchar(50) DEFAULT NULL,
  `TAX_OR_SIGNBOARD_SURCHARGE` varchar(50) DEFAULT NULL,
  `PERMIT_FEE_AMOUNT` varchar(50) DEFAULT NULL,
  `PERMIT_FEE_SURCHARGE` varchar(50) DEFAULT NULL,
  `GARBAGE_CHARGE_AMOUNT` varchar(50) DEFAULT NULL,
  `GARBAGE_CHARGE_SURCHARGE` varchar(50) DEFAULT NULL,
  `SIGNBOARD_RENEWAL_FEE_AMOUNT` varchar(50) DEFAULT NULL,
  `SIGNBOARD_RENEWAL_FEE_SURCHARGE` varchar(50) DEFAULT NULL,
  `CTC_AMOUNT` varchar(50) DEFAULT NULL,
  `CTC_SURCHARGE` varchar(50) DEFAULT NULL,
  `OTHERS_AMOUNT` varchar(50) DEFAULT NULL,
  `OTHERS_SURCHARGE` varchar(50) DEFAULT NULL,
  `BC_DOCUMENTARY_STAMPS_AMOUNT` varchar(50) DEFAULT NULL,
  `BC_DOCUMENTARY_STAMPS_SURCHARGE` varchar(50) DEFAULT NULL,
  `BUSINESS_CLUB_AMOUNT` varchar(50) DEFAULT NULL,
  `BUSINESS_CLUB_SURCHARGE` varchar(50) DEFAULT NULL,
  `CLEARANCE_FEE_AMOUNT` varchar(50) DEFAULT NULL,
  `CLEARANCE_FEE_SURCHARGE` varchar(50) DEFAULT NULL,
  `VERIFIED_BY` varchar(150) DEFAULT NULL,
  `ASSESSED_BY` varchar(150) DEFAULT NULL,
  `CREATED_AT` datetime DEFAULT NULL,
  `UPDATED_AT` datetime DEFAULT NULL,
  `ACTIVE_FLAG` tinyint(255) NOT NULL,
  `TAX_CLEARANCE_AGENCY` varchar(50) DEFAULT NULL,
  `TAX_CLEARANCE_FLAG` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `t_bf_main_lgu`
--

INSERT INTO `t_bf_main_lgu` (`BF_MAIN_LGU_ID`, `ORIGINAL_TRANSFER_CERTIFICATE_AGENCY`, `ORIGINAL_TRANSFER_CERTIFICATE_FLAG`, `TAX_DECLARATION_AGENCY`, `TAX_DECLARATION_FLAG`, `CONTRACT_OF_LEASE_AGENCY`, `CONTRACT_OF_LEASE_FLAG`, `GROSS_RECEIPT_AGENCY`, `GROSS_RECEIPT_FLAG`, `SET_OF_MAP_AGENCY`, `SET_OF_MAP_FLAG`, `BILLS_OF_MATERIALS_AGENCY`, `BILLS_OF_MATERIALS_FLAG`, `OCCUPANCY_PERMIT_AGENCY`, `OCCUPANCY_PERMIT_FLAG`, `OR_OF_TRICYCLE_AGENCY`, `OR_OF_TRICYCLE_FLAG`, `PAYMENT_TODA_MEMBERSHIP_AGENCY`, `PAYMENT_TODA_MEMBERSHIP_FLAG`, `CTC_AGENCY`, `CTC_FLAG`, `BP_BUSINESS_REGISTRATION_AGENCY`, `BP_BUSINESS_REGISTRATION_FLAG`, `BP_BUSINESS_CAPITALIZATION_AGENCY`, `BP_BUSINESS_CAPITALIZATION_FLAG`, `GROSS_SALES_TAX_AMOUNT`, `GROSS_SALES_TAX_SURCHARGE`, `TAX_OR_SIGNBOARD_AMOUNT`, `TAX_OR_SIGNBOARD_SURCHARGE`, `PERMIT_FEE_AMOUNT`, `PERMIT_FEE_SURCHARGE`, `GARBAGE_CHARGE_AMOUNT`, `GARBAGE_CHARGE_SURCHARGE`, `SIGNBOARD_RENEWAL_FEE_AMOUNT`, `SIGNBOARD_RENEWAL_FEE_SURCHARGE`, `CTC_AMOUNT`, `CTC_SURCHARGE`, `OTHERS_AMOUNT`, `OTHERS_SURCHARGE`, `BC_DOCUMENTARY_STAMPS_AMOUNT`, `BC_DOCUMENTARY_STAMPS_SURCHARGE`, `BUSINESS_CLUB_AMOUNT`, `BUSINESS_CLUB_SURCHARGE`, `CLEARANCE_FEE_AMOUNT`, `CLEARANCE_FEE_SURCHARGE`, `VERIFIED_BY`, `ASSESSED_BY`, `CREATED_AT`, `UPDATED_AT`, `ACTIVE_FLAG`, `TAX_CLEARANCE_AGENCY`, `TAX_CLEARANCE_FLAG`) VALUES
(5, 'Lorem ipsum dolor', '1', 'Lorem ipsum dolor', '1', 'Lorem ipsum dolor', '1', 'Lorem ipsum dolor', '1', 'Lorem ipsum dolor', '2', 'Lorem ipsum dolor', '2', 'Lorem ipsum dolor', '2', 'Lorem ipsum dolor', '2', 'Lorem ipsum dolor', '3', 'Lorem ipsum dolor', '3', 'Lorem ipsum dolor', '3', 'Lorem ipsum dolor', '3', '999', '999', '999', '999', '999', '999', '999', '999', '999', '999', '999', '999', '999', '999', '999', '999', '999', '999', '999', '999', 'India Denisa Collins Carrasco', 'India Denisa Collins Carrasco', '2019-07-30 01:38:42', '2019-07-30 01:38:42', 1, NULL, NULL),
(6, 'Lorem ipsum', '1', 'Lorem ipsum', '1', 'Lorem ipsum', '1', 'Lorem ipsum', '1', 'Lorem ipsum', '1', 'Lorem ipsum', '2', 'Lorem ipsum', '2', 'Lorem ipsum', '2', 'Lorem ipsum', '3', 'Lorem ipsum', '3', 'Lorem ipsum', '3', 'Lorem ipsum', '3', '999', '999', '999', '999', '999', '999', '999', '999', '999', '999', '999', '999', '999', '999', '999', '999', '999', '999', '999', '999', 'Verify', 'Assessed', '2019-07-30 12:09:25', '2019-07-30 12:09:25', 1, NULL, NULL),
(9, NULL, NULL, NULL, NULL, 'LOREM', 'Not Needed', 'LOREM', 'Not Needed', NULL, NULL, NULL, NULL, 'LOREM', 'Not Needed', NULL, NULL, NULL, NULL, NULL, NULL, 'LOREM', 'Not Needed', 'LOREM', 'Not Needed', 'LOREM', 'LOREM', 'LOREM', 'LOREM', 'LOREM', 'LOREM', 'LOREM', 'LOREM', 'LOREM', 'LOREM', 'LOREM', 'LOREM', 'LOREM', 'LOREM', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-08-07 00:00:00', NULL, 1, NULL, NULL),
(10, NULL, NULL, NULL, NULL, 'BarangayBusinessPermit', 'Not Needed', 'BarangayBusinessPermit', 'Not Needed', NULL, NULL, NULL, NULL, 'BarangayBusinessPermit', 'Not Needed', NULL, NULL, NULL, NULL, NULL, NULL, 'BarangayBusinessPermit', 'Not Needed', 'BarangayBusinessPermit', 'Not Needed', 'BarangayBusinessPermit', 'BarangayBusinessPermit', 'BarangayBusinessPermit', 'BarangayBusinessPermit', 'BarangayBusinessPermit', 'BarangayBusinessPermit', 'BarangayBusinessPermit', 'BarangayBusinessPermit', 'BarangayBusinessPermit', 'BarangayBusinessPermit', 'BarangayBusinessPermit', 'BarangayBusinessPermit', 'BarangayBusinessPermit', 'BarangayBusinessPermit', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-08-07 00:00:00', NULL, 1, NULL, NULL),
(11, NULL, NULL, NULL, NULL, 'N/A', 'Not Needed', 'N/A', 'Not Needed', NULL, NULL, NULL, NULL, 'N/A', 'Not Needed', NULL, NULL, NULL, NULL, NULL, NULL, 'N/A', 'Not Needed', 'N/A', 'Not Needed', '1,239.00', 'N/A', '89.87', 'N/A', '5,423.00', 'N/A', '543.22', 'N/A', '43.32', 'N/A', '454.00', 'N/A', 'N/A', 'N/A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-08-07 00:00:00', NULL, 1, NULL, NULL),
(13, 'AKEA', 'No', 'AKEA', 'No', 'AKEA', 'Not Needed', 'AKEA', 'Not Needed', 'AKEA', 'Not Needed', 'AKEA', 'Yes', 'AKEA', 'No', 'AKEA', NULL, 'AKEA', 'Not Needed', NULL, 'Not Needed', NULL, NULL, NULL, NULL, 'AKEA', 'AKEA', 'AKEA', 'AKEA', 'AKEA', 'AKEA', 'AKEA', 'AKEA', 'AKEA', 'AKEA', 'AKEA', 'AKEA', 'AKEA', 'AKEA', NULL, NULL, NULL, NULL, NULL, 'AKEA', NULL, NULL, NULL, NULL, 1, NULL, NULL),
(14, 'AKEA', 'Not Needed', 'AKEA', 'Not Needed', 'AKEA', 'Not Needed', 'AKEA', 'Not Needed', 'AKEA', 'Not Needed', 'AKEA', 'Not Needed', 'AKEA', 'Not Needed', 'AKEA', NULL, 'AKEA', 'Not Needed', 'AKEA', 'Not Needed', NULL, NULL, NULL, NULL, 'AKEA', 'AKEA', 'AKEA', 'AKEA', 'AKEA', 'AKEA', 'AKEA', 'AKEA', 'AKEA', 'AKEA', 'AKEA', 'AKEA', 'AKEA', 'AKEA', NULL, NULL, NULL, NULL, 'AKEA', 'AKEA', NULL, NULL, NULL, NULL, 1, NULL, NULL),
(15, 'SCOPE_OF_WORK_ID', 'Not Needed', 'SCOPE_OF_WORK_ID', 'Not Needed', 'SCOPE_OF_WORK_ID', 'Not Needed', 'SCOPE_OF_WORK_ID', 'Not Needed', 'SCOPE_OF_WORK_ID', 'Not Needed', 'SCOPE_OF_WORK_ID', 'Not Needed', 'SCOPE_OF_WORK_ID', 'Not Needed', 'SCOPE_OF_WORK_ID', NULL, 'SCOPE_OF_WORK_ID', 'Not Needed', 'v', 'Not Needed', NULL, NULL, NULL, NULL, 'SCOPE_OF_WORK_ID', 'SCOPE_OF_WORK_ID', 'SCOPE_OF_WORK_ID', 'SCOPE_OF_WORK_ID', 'SCOPE_OF_WORK_ID', 'SCOPE_OF_WORK_ID', 'v', 'SCOPE_OF_WORK_ID', 'SCOPE_OF_WORK_ID', 'SCOPE_OF_WORK_ID', 'SCOPE_OF_WORK_ID', 'SCOPE_OF_WORK_ID', 'SCOPE_OF_WORK_ID', 'SCOPE_OF_WORK_ID', NULL, NULL, NULL, NULL, 'v', 'SCOPE_OF_WORK_ID', NULL, NULL, NULL, NULL, 1, NULL, NULL),
(16, NULL, 'Not Needed', NULL, 'Not Needed', NULL, 'Not Needed', NULL, 'Not Needed', NULL, 'Not Needed', NULL, 'Not Needed', NULL, 'Not Needed', NULL, NULL, NULL, 'Not Needed', NULL, 'Not Needed', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL),
(17, '43', 'Not Needed', '43', 'Not Needed', '43', 'Not Needed', '43', 'Not Needed', '43', 'Not Needed', '43', 'Not Needed', '43', 'Not Needed', '43', NULL, '43', 'Not Needed', '43', 'Not Needed', NULL, NULL, NULL, NULL, '43', '43', '43', '43', '43', '43', '43', '43', '43', '43', '43', '43', '43', '43', NULL, NULL, NULL, NULL, '43', '43', NULL, NULL, NULL, NULL, 1, NULL, NULL),
(18, NULL, NULL, NULL, NULL, 'fdsa', 'Not Needed', 'dfsa', 'Not Needed', NULL, NULL, NULL, NULL, 'fdsa', 'Not Needed', NULL, NULL, NULL, NULL, NULL, NULL, 'fds', 'Not Needed', 'fdsa', 'Not Needed', 'fdsa', 'fdsa', 'fsaf', 'dsa', 'af', 's', 'fsa', 'fs', 'fdsa', 'fsa', 'fds', 'fas', 'sadfds', 'fdsa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-08-08 00:00:00', NULL, 1, NULL, NULL),
(19, 'fdsa', 'Not Needed', 'fdsa', 'Not Needed', 'f', 'Not Needed', 'fdsa', 'Not Needed', 'fsda', 'Not Needed', 'fsda', 'Not Needed', 'fdsa', 'Not Needed', 'fsda', NULL, 'fdsa', 'Not Needed', 'fdsa', 'Not Needed', NULL, NULL, NULL, NULL, 'fdsa', 'fd', 'fdsa', 'as', 'fsa', 'f', 'fsaf', 'sdf', 'sda', 'ads', 'sa', 'f', 'dfsa', 'sdf', NULL, NULL, NULL, NULL, 'fsda', 'asd', NULL, NULL, NULL, NULL, 1, NULL, NULL),
(20, NULL, NULL, NULL, NULL, 'sda', 'Not Needed', 'fdsa', 'Not Needed', NULL, NULL, NULL, NULL, 'af', 'Not Needed', NULL, NULL, NULL, NULL, NULL, NULL, 'fds', 'Not Needed', 'afds', 'Not Needed', '32', '23', '2', '23', '2', '32', '23', '32', '433', '43', '43', '43', '43', '43', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-08-08 00:00:00', NULL, 1, NULL, NULL),
(21, NULL, NULL, NULL, NULL, 'fdsa', 'Not Needed', 'fdsa', 'Not Needed', NULL, NULL, NULL, NULL, 'fdas', 'Not Needed', NULL, NULL, NULL, NULL, NULL, NULL, 'fdsa', 'Not Needed', 'fdsa', 'Not Needed', 'fdsa', 'fds', 'saf', 'afd', 'dsa', 'fdsa', 'fd', 'fdsa', 'saf', 'd', 'fdsa', 'fdsa', 'fdsa', 'fd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-08-08 00:00:00', NULL, 1, NULL, NULL),
(22, NULL, NULL, NULL, NULL, NULL, 'Not Needed', NULL, 'Not Needed', NULL, NULL, NULL, NULL, NULL, 'Not Needed', NULL, NULL, NULL, NULL, NULL, NULL, 'Sapphire Agency', 'Not Needed', NULL, 'Not Needed', '1000', '1000', '200', '200', '90', '90', '30', '30', '40', '40', '50', '50', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-19 00:00:00', NULL, 1, NULL, NULL),
(23, NULL, NULL, NULL, NULL, NULL, 'Not Needed', NULL, 'Not Needed', NULL, NULL, NULL, NULL, NULL, 'Not Needed', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'No', NULL, 'Not Needed', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', '100', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-19 00:00:00', NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_bf_payment_details`
--

CREATE TABLE `t_bf_payment_details` (
  `PAYMENT_DETAILS_ID` int(11) NOT NULL,
  `RELEASED_DATE` date DEFAULT NULL,
  `OR_NUMBER` varchar(50) DEFAULT NULL,
  `AMOUNT` varchar(50) DEFAULT NULL,
  `OR_DATE` date DEFAULT NULL,
  `PAYMENT_RECEIVED_BY` varchar(150) DEFAULT NULL,
  `PAYMENT_DATE_RECEIVED` date DEFAULT NULL,
  `CREATED_AT` datetime DEFAULT NULL,
  `UPDATED_AT` datetime DEFAULT NULL,
  `ACTIVE_FLAG` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `t_bf_payment_details`
--

INSERT INTO `t_bf_payment_details` (`PAYMENT_DETAILS_ID`, `RELEASED_DATE`, `OR_NUMBER`, `AMOUNT`, `OR_DATE`, `PAYMENT_RECEIVED_BY`, `PAYMENT_DATE_RECEIVED`, `CREATED_AT`, `UPDATED_AT`, `ACTIVE_FLAG`) VALUES
(5, '2019-07-31', 'OR-0001', '4,314.00', '2019-07-17', 'Dylon Cesar Simangan Quiñones', '2019-07-16', '2019-07-30 01:39:33', '2019-07-30 01:39:33', 1),
(6, '2019-07-30', 'OR-0002', '9,324.02', '2019-07-16', 'Shiela Mae Velga', '2019-07-23', '2019-07-30 12:10:15', '2019-07-29 00:00:00', 1),
(16, '2019-08-08', 'LOREM', 'LOREM', '2019-08-07', 'LOREM', '2019-08-16', '2019-08-07 00:00:00', NULL, 1),
(17, '2019-08-13', 'BarangayBusinessPermit', 'BarangayBusinessPermit', '2019-08-07', 'BarangayBusinessPermit', '2019-08-13', '2019-08-07 00:00:00', NULL, 1),
(18, '2019-08-23', 'OR-0003', '9,431', '2019-08-07', 'Shiela', '2019-08-15', '2019-08-07 00:00:00', NULL, 1),
(23, '2019-08-16', 'AKEA', 'AKEA', '2019-08-08', 'AKEA', '2019-08-31', '2019-08-08 00:00:00', NULL, 1),
(24, '2019-08-29', 'AKEA', 'AKEA', '2019-08-08', 'AKEA', '2019-08-22', '2019-08-08 00:00:00', NULL, 1),
(25, '2019-08-07', 'SCOPE_OF_WORK_ID', 'SCOPE_OF_WORK_ID', '2019-08-08', 'SCOPE_OF_WORK_ID', '2019-08-14', '2019-08-08 00:00:00', NULL, 1),
(26, NULL, NULL, NULL, '2019-08-08', NULL, NULL, '2019-08-08 00:00:00', NULL, 1),
(27, '2019-08-23', '43', '43', '2019-08-08', '43', '2019-08-17', '2019-08-08 00:00:00', NULL, 1),
(28, '2019-08-15', 'fdsa', 'fdsa', '2019-08-08', 'fds', '2019-08-09', '2019-08-08 00:00:00', NULL, 1),
(29, '2019-08-23', 'fdsa', 'fdsa', '2019-08-08', 'fdsa', '2019-08-22', '2019-08-08 00:00:00', NULL, 1),
(30, '2019-08-07', '4eww', 'fdsfd', '2019-08-08', 'fds', NULL, '2019-08-08 00:00:00', NULL, 1),
(31, '2019-08-22', 'fds', 'fdsa', '2019-08-08', 'fdsa', '2019-08-15', '2019-08-08 00:00:00', NULL, 1),
(32, '2019-09-18', '00110', '2000', '2019-09-19', 'Rodel Duterte', '2019-09-08', '2019-09-19 00:00:00', NULL, 1),
(33, '2019-09-20', NULL, NULL, '2019-09-19', NULL, NULL, '2019-09-19 00:00:00', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_bf_scope_of_work`
--

CREATE TABLE `t_bf_scope_of_work` (
  `SCOPE_OF_WORK_ID` int(11) NOT NULL,
  `SCOPE_OF_WORK_NAME` varchar(50) NOT NULL,
  `SCOPE_OF_WORK_SPECIFY` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `t_bf_scope_of_work`
--

INSERT INTO `t_bf_scope_of_work` (`SCOPE_OF_WORK_ID`, `SCOPE_OF_WORK_NAME`, `SCOPE_OF_WORK_SPECIFY`) VALUES
(1, 'Repair', 'For the benifit of the other'),
(8, 'Repair', 'AKEA'),
(9, 'Demolition', 'AKEA'),
(10, 'Repair', 'SCOPE_OF_WORK_ID'),
(11, 'Repair', 'dsad'),
(12, 'Repair', 'FDSA'),
(13, 'Repair', 'fdsa');

-- --------------------------------------------------------

--
-- Table structure for table `t_bf_uof_facility_equipment`
--

CREATE TABLE `t_bf_uof_facility_equipment` (
  `UOF_FACILITY_ID` int(11) NOT NULL,
  `FACILITY_ID` int(11) NOT NULL,
  `NO_OF_FACILITY` int(50) NOT NULL,
  `REMARKS` varchar(255) NOT NULL,
  `USE_OF_FACILITY_EQUIPMENT_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `t_bf_use_of_facility_equipment`
--

CREATE TABLE `t_bf_use_of_facility_equipment` (
  `USE_OF_FACILITY_EQUIPMENT_ID` int(11) NOT NULL,
  `ORGANIZATION_NAME` varchar(50) DEFAULT NULL,
  `AUTHORIZED_REPRESENTATIVE` varchar(150) DEFAULT NULL,
  `REPRESENTATIVE_ADDRESS` varchar(150) DEFAULT NULL,
  `REPRESENTATIVE_CONTACT_NO` varchar(150) DEFAULT NULL,
  `REPRESENTATIVE_EMAIL` varchar(150) DEFAULT NULL,
  `PERSON_PRESENT_AT_EVENT` varchar(150) DEFAULT NULL,
  `PERSON_ADDRESS` varchar(150) DEFAULT NULL,
  `PERSON_CONTACT_NO` varchar(150) DEFAULT NULL,
  `PERSON_EMAIL` varchar(150) DEFAULT NULL,
  `ACTIVITY` varchar(150) DEFAULT NULL,
  `PURPOSE` varchar(150) DEFAULT NULL,
  `DATE_NEEDED` date DEFAULT NULL,
  `TIME_NEEDED` time DEFAULT NULL,
  `PARTICIPANTS` varchar(150) DEFAULT NULL,
  `HOURS_OF_USE` varchar(150) DEFAULT NULL,
  `HAVE_ADMISSION_FEE` tinyint(4) DEFAULT NULL,
  `VENUE` varchar(150) DEFAULT NULL,
  `IS_SECURITY_REQUIRED` tinyint(4) DEFAULT NULL,
  `NO_OF_SECURITY` int(11) DEFAULT NULL,
  `DATE_SECURITY` date DEFAULT NULL,
  `CREATED_AT` datetime DEFAULT NULL,
  `UPDATED_AT` datetime DEFAULT NULL,
  `ACTIVE_FLAG` tinyint(4) DEFAULT NULL,
  `ISSUANCE_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `t_blotter`
--

CREATE TABLE `t_blotter` (
  `BLOTTER_ID` int(10) UNSIGNED NOT NULL,
  `BLOTTER_SUBJECT_ID` int(11) NOT NULL,
  `USER_ID` int(11) DEFAULT NULL,
  `BARANGAY_ID` int(11) DEFAULT NULL,
  `BLOTTER_CODE` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `INCIDENT_DATE` date NOT NULL,
  `INCIDENT_AREA` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `COMPLAINT_NAME` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ACCUSED_RESIDENT` int(11) DEFAULT NULL,
  `COMPLAINT_STATEMENT` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `RESOLUTION` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `COMPLAINT_DATE` date NOT NULL,
  `CLOSED_DATE` date DEFAULT NULL,
  `STATUS` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `ACTIVE_FLAG` int(11) NOT NULL DEFAULT '1',
  `CREATED_AT` timestamp NULL DEFAULT NULL,
  `UPDATED_AT` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `t_blotter`
--

INSERT INTO `t_blotter` (`BLOTTER_ID`, `BLOTTER_SUBJECT_ID`, `USER_ID`, `BARANGAY_ID`, `BLOTTER_CODE`, `INCIDENT_DATE`, `INCIDENT_AREA`, `COMPLAINT_NAME`, `ACCUSED_RESIDENT`, `COMPLAINT_STATEMENT`, `RESOLUTION`, `COMPLAINT_DATE`, `CLOSED_DATE`, `STATUS`, `ACTIVE_FLAG`, `CREATED_AT`, `UPDATED_AT`) VALUES
(2, 3, NULL, NULL, 'BLOT-2', '2019-08-07', 'veterans', 'ralph', 2445, 'noen', 'good na', '2019-08-12', '2019-08-12', 'Closed', 1, NULL, NULL),
(3, 3, NULL, NULL, 'BLOT-3', '2019-08-10', 'here at coronadal street', '{{session('session_full_name')}}', 2440, 'none', NULL, '2019-08-12', NULL, 'Pending', 1, '2019-08-12 12:34:36', NULL),
(4, 3, NULL, NULL, 'BLOT-4', '2019-09-03', 'in the parking area', 'Panda', 2622, 'missnig person', NULL, '2019-09-18', NULL, 'Pending', 1, '2019-09-18 16:42:50', NULL),
(5, 3, NULL, NULL, 'BLOT-5', '2019-09-01', 'in the parking area', 'Shiela Mae Velga', 2661, 'Robbery', NULL, '2019-09-19', NULL, 'Pending', 1, '2019-09-19 02:09:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_business_approval`
--

CREATE TABLE `t_business_approval` (
  `APPROVAL_ID` int(11) NOT NULL,
  `BUSINESS_ID` int(11) DEFAULT NULL,
  `STATUS` varchar(50) DEFAULT NULL,
  `APPROVED_BY` varchar(255) DEFAULT NULL,
  `DATE_APPROVED` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `t_business_approval`
--

INSERT INTO `t_business_approval` (`APPROVAL_ID`, `BUSINESS_ID`, `STATUS`, `APPROVED_BY`, `DATE_APPROVED`) VALUES
(9, 4, 'Evaluated', 'fdsa', '2019-08-08 00:00:00'),
(10, 5, 'Evaluated', 'Shiela', '2019-08-08 00:00:00'),
(11, 6, 'Evaluated', 'Shiela Mae Velga', '2019-09-18 00:00:00'),
(12, 7, 'Evaluated', 'Rodel', '2019-09-19 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `t_business_information`
--

CREATE TABLE `t_business_information` (
  `BUSINESS_ID` int(11) NOT NULL,
  `BUSINESS_NAME` varchar(50) DEFAULT NULL,
  `TRADE_NAME` varchar(50) DEFAULT NULL,
  `BUSINESS_NATURE_ID` int(11) DEFAULT NULL,
  `BUSINESS_OWNER_FIRSTNAME` varchar(150) DEFAULT NULL,
  `BUSINESS_OWNER_MIDDLENAME` varchar(50) DEFAULT NULL,
  `BUSINESS_OWNER_LASTNAME` varchar(50) DEFAULT NULL,
  `BUSINESS_ADDRESS` varchar(255) DEFAULT NULL,
  `BUSINESS_OR_NUMBER` varchar(50) DEFAULT NULL,
  `BUSINESS_OR_ACQUIRED_DATE` date DEFAULT NULL,
  `BARANGAY_ZONE_ID` int(11) DEFAULT NULL,
  `TIN_NO` varchar(50) DEFAULT NULL,
  `DTI_REGISTRATION_NO` varchar(50) DEFAULT NULL,
  `TYPE_OF_BUSINESS` varchar(50) DEFAULT NULL,
  `BUSINESS_POSTAL_CODE` varchar(50) DEFAULT NULL,
  `BUSINESS_EMAIL_ADD` varchar(100) DEFAULT NULL,
  `BUSINESS_TELEPHONE_NO` varchar(50) DEFAULT NULL,
  `BUSINESS_MOBILE_NO` varchar(50) DEFAULT NULL,
  `OWNER_ADDRESS` varchar(150) DEFAULT NULL,
  `OWNER_POSTAL_CODE` varchar(50) DEFAULT NULL,
  `OWNER_EMAIL_ADD` varchar(100) DEFAULT NULL,
  `OWNER_TELEPHONE_NO` varchar(50) DEFAULT NULL,
  `OWNER_MOBILE_NO` varchar(50) DEFAULT NULL,
  `EMERGENCY_CONTACT_PERSON` varchar(150) DEFAULT NULL,
  `EMERGENCY_PERSON_CONTACT_NO` varchar(50) DEFAULT NULL,
  `EMERGENCY_PERSON_EMAIL_ADD` varchar(50) DEFAULT NULL,
  `BUSINESS_AREA` varchar(50) DEFAULT NULL,
  `NO_EMPLOYEE_ESTABLISHMENT` int(11) DEFAULT NULL,
  `NO_EMPLOYEE_LGU` int(11) DEFAULT NULL,
  `LESSOR_NAME` varchar(150) DEFAULT NULL,
  `LESSOR_ADDRESS` varchar(150) DEFAULT NULL,
  `LESSOR_CONTACT_NO` varchar(50) DEFAULT NULL,
  `LESSOR_EMAIL_ADD` varchar(100) DEFAULT NULL,
  `MONTHLY_RENTAL` varchar(50) DEFAULT NULL,
  `CREATED_AT` datetime DEFAULT NULL,
  `UPDATED_AT` datetime DEFAULT NULL,
  `ACTIVE_FLAG` int(11) DEFAULT NULL,
  `STATUS` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `t_business_information`
--

INSERT INTO `t_business_information` (`BUSINESS_ID`, `BUSINESS_NAME`, `TRADE_NAME`, `BUSINESS_NATURE_ID`, `BUSINESS_OWNER_FIRSTNAME`, `BUSINESS_OWNER_MIDDLENAME`, `BUSINESS_OWNER_LASTNAME`, `BUSINESS_ADDRESS`, `BUSINESS_OR_NUMBER`, `BUSINESS_OR_ACQUIRED_DATE`, `BARANGAY_ZONE_ID`, `TIN_NO`, `DTI_REGISTRATION_NO`, `TYPE_OF_BUSINESS`, `BUSINESS_POSTAL_CODE`, `BUSINESS_EMAIL_ADD`, `BUSINESS_TELEPHONE_NO`, `BUSINESS_MOBILE_NO`, `OWNER_ADDRESS`, `OWNER_POSTAL_CODE`, `OWNER_EMAIL_ADD`, `OWNER_TELEPHONE_NO`, `OWNER_MOBILE_NO`, `EMERGENCY_CONTACT_PERSON`, `EMERGENCY_PERSON_CONTACT_NO`, `EMERGENCY_PERSON_EMAIL_ADD`, `BUSINESS_AREA`, `NO_EMPLOYEE_ESTABLISHMENT`, `NO_EMPLOYEE_LGU`, `LESSOR_NAME`, `LESSOR_ADDRESS`, `LESSOR_CONTACT_NO`, `LESSOR_EMAIL_ADD`, `MONTHLY_RENTAL`, `CREATED_AT`, `UPDATED_AT`, `ACTIVE_FLAG`, `STATUS`) VALUES
(1, 'AKEA de Salon', 'AKEA Corporation', 1, 'Kellen ', 'Diuata ', 'Concepción', 'ROOM 112 Phoenix Building Recoleto Street1000', 'B-OR-190729-01', '2019-07-01', 1, '4916345067428 ', '4539973601742869', 'Single', '0408', 'amya84@hyatt.com', '453-173-106', '0912-239-2312', '0902 Yosemite South, Parkhomes Subdivision, Tunasan', '0902 ', 'gislason.rex@ullrich.com', '496-198-405', '496-198-405', 'Graham Schoen', ' 322-875-392', 'dare.angelita@yahoo.com', '213.32', 1, 1, 'Royal Emmerich', '35/27 Halvorson Lodge, Poblacion, Mandaue 6123 Aklan', '827-802-527', 'carmine.reilly@gmail.com', '31.12', '2019-07-16 00:00:00', '2019-07-09 00:00:00', 1, 'Declined'),
(2, 'Purple 8 Grocery', 'Purple 8 Corporation', 3, 'Angel ', 'Malubay ', 'Belmonte', 'Project 3, cubao, Quezon city', 'B-OR-190729-02', '2019-07-28', 2, '5266880743818471', '5438970019392690', 'Proprietor', '0919', 'carmine.reilly@gmail.com', '827-802-527', '827-802-527', 'S-2202-A Textite Tower West Exchange Road Ortigas Center 1600', '0110', 'mbosco@feeney.com', '621-575-608', '621-575-608', 'Nerita Taryn Nakamura Arancel', '159-700-500', 'kovacek.luciano@zboncak.org', '32.21', 1, 1, 'Eusebio Hackett', '64A/02 Kiehn Hollow Suite 440, Poblacion, Bayawan 4885 Zamboanga del Sur', '6363726', 'hacket@gmail.com', '32312.52', '2019-07-23 00:00:00', '2019-07-10 00:00:00', 1, 'Approved'),
(4, 'Archery Mart', 'Archery Mart Inc', 2, 'Shiela', 'Mae', 'Velga', 'L13 Blk 167', 'BSN-0237', '2019-08-16', NULL, '4737861273', '4123424345', 'Single', '4322', NULL, '5432', '3214', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 1, 1, NULL, NULL, NULL, NULL, NULL, '2019-08-08 00:00:00', NULL, NULL, 'Approved'),
(5, 'bvxc', 'bvxc', 4, 'bvc', 'bv', 'bvx', 'bxc', 'bvcx', NULL, NULL, NULL, NULL, 'Partnership', 'bvxc', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-08-08 00:00:00', NULL, NULL, 'Approved'),
(6, 'SMAV', 'SMAV', 2, 'Shiela', 'Aureus', 'VElga', '321', 'BSN-12', NULL, NULL, NULL, NULL, 'Cooperative', 'f233', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-18 00:00:00', NULL, NULL, 'Approved'),
(7, 'AKea', 'AKea', 1, 'Rodel', NULL, 'Duterte', '146 Area 2 Oriole Street', 'BS-123', '2019-09-18', NULL, '1121', 'reg-11', 'Single', '0010', 'rodlduterteb@gmail.com', NULL, '09223441629', '146 Area 2 Oriole Street', '0011', 'rodlduterteb@gmail.com', NULL, '09223441629', '09223441629', '09223441629', 'rodlduterteb@gmail.com', 'Quezon City', 0, 2, NULL, NULL, NULL, NULL, NULL, '2019-09-19 00:00:00', NULL, NULL, 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `t_children_profile`
--

CREATE TABLE `t_children_profile` (
  `CHILDREN_ID` int(11) NOT NULL,
  `RESIDENT_ID` int(11) DEFAULT NULL,
  `BIRTH_ORDER` int(11) DEFAULT NULL,
  `IS_REGISTERED` int(11) DEFAULT NULL,
  `BORN_AT` varchar(50) DEFAULT NULL,
  `CHILDER_MOTHER_TONGUE` varchar(25) DEFAULT NULL,
  `CHILDREN_OTHER_DIALECT` varchar(50) DEFAULT NULL,
  `CHILDREN_HEIGHT` decimal(10,0) DEFAULT NULL,
  `CHILDREN_WEIGHT` decimal(10,0) DEFAULT NULL,
  `DOES_IT_HAVE_ECCD_CARD` varchar(11) DEFAULT NULL,
  `DOES_IT_HAVE_MOTHER_CHILD_BOOK` varchar(11) DEFAULT NULL,
  `DOES_IT_HAVE_OTHERS` varchar(50) DEFAULT NULL,
  `VACCINATION_BCG` varchar(10) DEFAULT NULL,
  `VACCINATION_DPT` varchar(11) DEFAULT NULL,
  `VACCINATION_ORAL_POLIO` varchar(11) DEFAULT NULL,
  `VACCINATION_HEPA_B` varchar(11) DEFAULT NULL,
  `VACCINATION_MEASLES` varchar(11) DEFAULT NULL,
  `VACCINATION_OTHERS` varchar(50) DEFAULT NULL,
  `DEFORMITY_HARE_LIP` int(11) DEFAULT NULL,
  `DEFORMITY_DISABLE_LEG` int(11) DEFAULT NULL,
  `DEFORMITY_CROSS_EYED` int(11) DEFAULT NULL,
  `DEFORMITY_DISABLE_ARM_LEG` int(11) DEFAULT NULL,
  `DEFORMITY_FINGER_TOES` int(11) DEFAULT NULL,
  `DEFORMITY_DEAF` int(11) DEFAULT NULL,
  `DEFORMITY_BLIND` int(11) DEFAULT NULL,
  `PROBLEMS_WITH_BEHAVIOR` int(11) DEFAULT NULL,
  `PROBLEMS_WITH_SPEAKING` int(11) DEFAULT NULL,
  `PROBLEMS_WITH_HEARING` int(11) DEFAULT NULL,
  `PROBLEMS_WITH_VISION` int(11) DEFAULT NULL,
  `IS_LEFT_HANDED` int(11) DEFAULT NULL,
  `CHILDHOOD_EXP_NURSERY` int(11) DEFAULT NULL,
  `CHILDHOOD_EXP_KINDERGARTEN` int(11) DEFAULT NULL,
  `CHILDHOOD_EXP_PREPARATORY` int(11) DEFAULT NULL,
  `LEARNS_AT_HOME_W_PARENTS` int(11) DEFAULT NULL,
  `LEARNS_AT_HOME_W_NOBODY` int(11) DEFAULT NULL,
  `LEARNS_AT_HOME_W_SIBLINGS` int(11) DEFAULT NULL,
  `LEARNS_AT_HOME_W_RELATIVES` int(11) DEFAULT NULL,
  `LEARNS_AT_HOME_W_MAID` int(11) DEFAULT NULL,
  `LEARNS_AT_HOME_TUTOR` int(11) DEFAULT NULL,
  `LEARNS_AT_HOME_W_OTHERS` varchar(50) DEFAULT NULL,
  `INTERACTS_W_OLDER_SIBLINGS` int(11) DEFAULT NULL,
  `INTERACTS_W_YOUNGER_SIBLINGS` int(11) DEFAULT NULL,
  `INTERACTS_W_SAME_AGE` int(11) DEFAULT NULL,
  `EATS_MEAL_BEFORE_SCHOOL` varchar(50) DEFAULT NULL,
  `HAS_BAON` varchar(50) DEFAULT NULL,
  `FOOD_NORMALLY_EATEN` varchar(50) DEFAULT NULL,
  `TRAVEL_TIME_TO_DCC` varchar(25) DEFAULT NULL,
  `MODE_TRANSPORTATION_TO_DCC` varchar(25) DEFAULT NULL,
  `TRAVEL_TIME_TO_NCDC` varchar(25) DEFAULT NULL,
  `MODE_TRANSPORTATION_TO_NCDC` varchar(25) DEFAULT NULL,
  `PUBLIC_TRANSPORTATION_ID` varchar(50) DEFAULT NULL,
  `TRANSPORTATION_FARE` varchar(50) DEFAULT NULL,
  `GOES_TO_SCHOOL_WITH` varchar(25) DEFAULT NULL,
  `CHILD_DEVELOPMENT_TEACHER` varchar(50) DEFAULT NULL,
  `CREATED_AT` datetime DEFAULT NULL,
  `UPDATED_AT` datetime DEFAULT NULL,
  `ACTIVE_FLAG` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `t_fathers_profile`
--

CREATE TABLE `t_fathers_profile` (
  `FATHERS_ID` int(11) NOT NULL,
  `FATHER_MOTHER_TONGUE` varchar(25) DEFAULT NULL,
  `FATHER_OTHER_DIALECTS` varchar(50) DEFAULT NULL,
  `FATHER_EDUCATIONAL_ATTAINMENT` varchar(50) DEFAULT NULL,
  `RESIDENT_ID` int(11) DEFAULT NULL,
  `CREATED_AT` datetime DEFAULT NULL,
  `UPDATED_AT` datetime DEFAULT NULL,
  `ACTIVE_FLAG` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `t_fathers_profile`
--

INSERT INTO `t_fathers_profile` (`FATHERS_ID`, `FATHER_MOTHER_TONGUE`, `FATHER_OTHER_DIALECTS`, `FATHER_EDUCATIONAL_ATTAINMENT`, `RESIDENT_ID`, `CREATED_AT`, `UPDATED_AT`, `ACTIVE_FLAG`) VALUES
(1, 'Tagalog', 'Ilokano', 'College Graduate', 2440, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_food_eaten`
--

CREATE TABLE `t_food_eaten` (
  `FOOD_EATEN_ID` int(11) NOT NULL,
  `CHILDREN_ID` int(11) DEFAULT NULL,
  `VEGETABLE` int(11) DEFAULT NULL,
  `RICE` int(11) DEFAULT NULL,
  `CEREAL` int(11) DEFAULT NULL,
  `PORK` int(11) DEFAULT NULL,
  `NOODLE` int(11) DEFAULT NULL,
  `FRUIT_JUICE` int(11) DEFAULT NULL,
  `CHICKEN` int(11) DEFAULT NULL,
  `SOUP` int(11) DEFAULT NULL,
  `MILK` int(11) DEFAULT NULL,
  `BEEF` int(11) DEFAULT NULL,
  `BREAD` int(11) DEFAULT NULL,
  `FISH` int(11) DEFAULT NULL,
  `FRUIT` int(11) DEFAULT NULL,
  `CREATED_AT` datetime DEFAULT NULL,
  `UPDATED_AT` datetime DEFAULT NULL,
  `ACTIVE_FLAG` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `t_household_information`
--

CREATE TABLE `t_household_information` (
  `HOUSEHOLD_ID` int(11) NOT NULL,
  `HOME_OWNERSHIP` varchar(50) DEFAULT NULL,
  `PERSON_STAYING_IN_HOUSEHOLD` varchar(50) DEFAULT NULL,
  `HOME_MATERIALS` varchar(10) DEFAULT NULL,
  `STREET_ADDRESS` varchar(50) DEFAULT NULL,
  `BARANGAY_ZONE_ADDRESS` varchar(150) DEFAULT NULL,
  `BARANGAY_ID` int(11) DEFAULT NULL,
  `NUMBER_OF_ROOMS` int(11) DEFAULT NULL,
  `TOILET_HOME` int(11) DEFAULT NULL,
  `PLAY_AREA_HOME` int(11) DEFAULT NULL,
  `BEDROOM_HOME` int(11) DEFAULT NULL,
  `DINING_ROOM_HOME` int(11) DEFAULT NULL,
  `SALA_HOME` int(11) DEFAULT NULL,
  `KITCHEN_HOME` int(11) DEFAULT NULL,
  `WATER_UTILITIES` int(11) DEFAULT NULL,
  `ELECTRICITY_UTILITIES` int(11) DEFAULT NULL,
  `AIRCON_UTILITIES` int(11) DEFAULT NULL,
  `PHONE_UTILITIES` int(11) DEFAULT NULL,
  `COMPUTER_UTILITIES` int(11) DEFAULT NULL,
  `INTERNET_UTILITIES` int(11) DEFAULT NULL,
  `TV_UTILITIES` int(11) DEFAULT NULL,
  `CD_PLAYER_UTILITIES` int(11) DEFAULT NULL,
  `RADIO_UTILITIES` int(11) DEFAULT NULL,
  `COMICS_ENTERTAINMENT` int(11) DEFAULT NULL,
  `NEWS_PAPER_ENTERTAINMENT` int(11) DEFAULT NULL,
  `PETS_ENTERTAINMENT` int(11) DEFAULT NULL,
  `BOOKS_ENTERTAINMENT` int(11) DEFAULT NULL,
  `STORY_BOOKS_ENTERTAINMENT` int(11) DEFAULT NULL,
  `TOYS_ENTERTAINMENT` int(11) DEFAULT NULL,
  `BOARD_GAMES_ENTERTAINMENT` int(11) DEFAULT NULL,
  `PUZZLES_ENTERTAINMENT` int(11) DEFAULT NULL,
  `CREATED_AT` datetime DEFAULT NULL,
  `UPDATED_AT` datetime DEFAULT NULL,
  `ACTIVE_FLAG` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `t_household_information`
--

INSERT INTO `t_household_information` (`HOUSEHOLD_ID`, `HOME_OWNERSHIP`, `PERSON_STAYING_IN_HOUSEHOLD`, `HOME_MATERIALS`, `STREET_ADDRESS`, `BARANGAY_ZONE_ADDRESS`, `BARANGAY_ID`, `NUMBER_OF_ROOMS`, `TOILET_HOME`, `PLAY_AREA_HOME`, `BEDROOM_HOME`, `DINING_ROOM_HOME`, `SALA_HOME`, `KITCHEN_HOME`, `WATER_UTILITIES`, `ELECTRICITY_UTILITIES`, `AIRCON_UTILITIES`, `PHONE_UTILITIES`, `COMPUTER_UTILITIES`, `INTERNET_UTILITIES`, `TV_UTILITIES`, `CD_PLAYER_UTILITIES`, `RADIO_UTILITIES`, `COMICS_ENTERTAINMENT`, `NEWS_PAPER_ENTERTAINMENT`, `PETS_ENTERTAINMENT`, `BOOKS_ENTERTAINMENT`, `STORY_BOOKS_ENTERTAINMENT`, `TOYS_ENTERTAINMENT`, `BOARD_GAMES_ENTERTAINMENT`, `PUZZLES_ENTERTAINMENT`, `CREATED_AT`, `UPDATED_AT`, `ACTIVE_FLAG`) VALUES
(1, 'Rented', 'Parents', 'Concrete', '2326 Juan Luna Street Tondo 1000', '45 8th Avenue', 1, 20, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, '2019-07-29 00:00:00', '2019-09-17 20:05:43', 1),
(2, 'Joint Tenancy', 'Fernando Conor Akbar Dulay', 'Bamboo', '9449 Baticulin Street San Antonio Village 1203', '6784 Ayala Ave., cor. Herrera St., NCR', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-07-29 00:00:00', '2019-07-29 00:00:00', 1),
(3, 'Owned', 'Non-Relatives', 'Concrete', '123', NULL, 1, 12, 1, 1, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, NULL, NULL, NULL),
(4, 'With Parents', 'Relatives', 'Wood', '146', NULL, 1, 12, 0, 1, 0, 0, 0, 0, 0, 1, 1, 0, 1, 0, 0, 0, 0, 0, 1, 1, 1, 0, 0, 0, 0, NULL, NULL, NULL),
(5, 'Owned', 'Parents', 'Concrete', '145', NULL, 1, 5, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 1, NULL, '2019-08-09 23:13:57', 1),
(6, 'Owned', 'Parents', 'Concrete', '145', NULL, 1, 12, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2019-08-05 06:39:58', '2019-08-07 01:18:10', 1),
(274, 'Owned', 'Parents', 'Concrete', NULL, NULL, 1, 4, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2019-09-24 15:19:49', NULL, NULL),
(275, 'Retired', 'Relatives', 'Concrete', NULL, NULL, 1, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2019-09-24 15:19:49', NULL, NULL),
(276, 'With Parents', 'Non-Relatives', 'Concrete', NULL, NULL, 1, 7, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, '2019-09-24 15:19:49', NULL, NULL),
(277, 'With Relatives', 'Parents', 'Concrete', NULL, NULL, 1, 8, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, '2019-09-24 15:19:49', NULL, NULL),
(278, 'Owned', 'Relatives', 'Nipa', NULL, NULL, 1, 9, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 0, 0, 1, 0, 1, 0, 1, 1, 1, 0, 1, 0, '2019-09-24 15:19:49', NULL, NULL),
(279, 'Retired', 'Non-Relatives', 'Concrete', NULL, NULL, 1, 4, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2019-09-24 15:19:49', NULL, NULL),
(280, 'With Parents', 'Parents', 'Concrete', NULL, NULL, 1, 5, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 0, 1, 1, 1, 0, 1, 0, 1, '2019-09-24 15:19:49', NULL, NULL),
(281, 'With Relatives', 'Relatives', 'Concrete', NULL, NULL, 1, 7, 1, 1, 0, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2019-09-24 15:19:49', NULL, NULL),
(282, 'Owned', 'Non-Relatives', 'Concrete', NULL, NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 0, 1, 1, '2019-09-24 15:19:49', NULL, NULL),
(283, 'Retired', 'Parents', 'Wood', NULL, NULL, 1, 4, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 0, 0, 1, 0, 1, 1, 1, 1, 0, 1, 1, 0, '2019-09-24 15:19:49', NULL, NULL),
(284, 'With Parents', 'Relatives', 'Concrete', NULL, NULL, 1, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2019-09-24 15:19:49', NULL, NULL),
(285, 'With Relatives', 'Non-Relatives', 'Concrete', NULL, NULL, 1, 5, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2019-09-24 15:19:49', NULL, NULL),
(286, 'Owned', 'Parents', 'Concrete', NULL, NULL, 1, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 0, 1, 1, '2019-09-24 15:19:49', NULL, NULL),
(287, 'Retired', 'Relatives', 'Nipa', NULL, NULL, 1, 6, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2019-09-24 15:19:49', NULL, NULL),
(288, 'With Parents', 'Non-Relatives', 'Concrete', NULL, NULL, 1, 4, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 0, 1, 1, 1, '2019-09-24 15:19:49', NULL, NULL),
(289, 'With Relatives', 'Parents', 'Concrete', NULL, NULL, 1, 4, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 0, '2019-09-24 15:19:49', NULL, NULL),
(290, 'Owned', 'Relatives', 'Concrete', NULL, NULL, 1, 6, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2019-09-24 15:19:50', NULL, NULL),
(291, 'Retired', 'Non-Relatives', 'Concrete', NULL, NULL, 1, 4, 1, 1, 1, 1, 1, 0, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, '2019-09-24 15:19:50', NULL, NULL),
(292, 'With Parents', 'Parents', 'Concrete', NULL, NULL, 1, 7, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 0, 1, 1, 1, 1, 0, 1, 1, 1, '2019-09-24 15:19:50', NULL, NULL),
(293, 'With Relatives', 'Relatives', 'Wood', NULL, NULL, 1, 4, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2019-09-24 15:19:50', NULL, NULL),
(294, 'Owned', 'Non-Relatives', 'Concrete', NULL, NULL, 1, 9, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 0, 1, 0, '2019-09-24 15:19:50', NULL, NULL),
(295, 'Retired', 'Parents', 'Concrete', NULL, NULL, 1, 5, 1, 0, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, '2019-09-24 15:19:50', NULL, NULL),
(296, 'With Parents', 'Relatives', 'Concrete', NULL, NULL, 1, 2, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, '2019-09-24 15:19:50', NULL, NULL),
(297, 'With Relatives', 'Non-Relatives', 'Concrete', NULL, NULL, 1, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2019-09-24 15:19:50', NULL, NULL),
(298, 'Owned', 'Parents', 'Concrete', NULL, NULL, 1, 6, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 0, 1, 1, 1, 1, 0, 1, 1, '2019-09-24 15:19:50', NULL, NULL),
(299, 'Retired', 'Relatives', 'Nipa', NULL, NULL, 1, 4, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, '2019-09-24 15:19:50', NULL, NULL),
(300, 'With Parents', 'Non-Relatives', 'Concrete', NULL, NULL, 1, 9, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 0, 1, 1, 0, 1, 0, 1, 1, 1, 1, 1, 1, '2019-09-24 15:19:50', NULL, NULL),
(301, 'With Relatives', 'Parents', 'Concrete', NULL, NULL, 1, 8, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2019-09-24 15:19:50', NULL, NULL),
(302, 'Owned', 'Relatives', 'Wood', NULL, NULL, 1, 6, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2019-09-24 15:19:50', NULL, NULL),
(303, 'Retired', 'Non-Relatives', 'Concrete', NULL, NULL, 1, 6, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 0, 1, 1, '2019-09-24 15:19:50', NULL, NULL),
(304, 'With Parents', 'Parents', 'Concrete', NULL, NULL, 1, 4, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, '2019-09-24 15:19:50', NULL, NULL),
(305, 'With Relatives', 'Relatives', 'Concrete', NULL, NULL, 1, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 0, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, '2019-09-24 15:19:50', NULL, NULL),
(306, 'Owned', 'Non-Relatives', 'Concrete', NULL, NULL, 1, 9, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, '2019-09-24 15:19:50', NULL, NULL),
(307, 'Retired', 'Parents', 'Nipa', NULL, NULL, 1, 9, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 0, 0, 1, 1, 1, '2019-09-24 15:19:50', NULL, NULL),
(308, 'With Parents', 'Relatives', 'Concrete', NULL, NULL, 1, 5, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, '2019-09-24 15:19:50', NULL, NULL),
(309, 'With Relatives', 'Non-Relatives', 'Concrete', NULL, NULL, 1, 7, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, '2019-09-24 15:19:50', NULL, NULL),
(310, 'Owned', 'Parents', 'Wood', NULL, NULL, 1, 7, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2019-09-24 15:19:50', NULL, NULL),
(311, 'Retired', 'Relatives', 'Concrete', NULL, NULL, 1, 6, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2019-09-24 15:19:50', NULL, NULL),
(312, 'With Parents', 'Non-Relatives', 'Concrete', NULL, NULL, 1, 8, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, '2019-09-24 15:19:50', NULL, NULL),
(313, 'With Relatives', 'Parents', 'Concrete', NULL, NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 0, 0, 1, 1, 0, '2019-09-24 15:19:50', NULL, NULL),
(314, 'Owned', 'Relatives', 'Concrete', NULL, NULL, 1, 4, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, '2019-09-24 15:19:50', NULL, NULL),
(315, 'Retired', 'Non-Relatives', 'Concrete', NULL, NULL, 1, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2019-09-24 15:19:50', NULL, NULL),
(316, 'With Parents', 'Parents', 'Wood', NULL, NULL, 1, 9, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 0, 1, 1, 0, 1, 1, 1, 1, 1, '2019-09-24 15:19:50', NULL, NULL),
(317, 'With Relatives', 'Relatives', 'Concrete', NULL, NULL, 1, 6, 1, 0, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 1, 0, '2019-09-24 15:19:50', NULL, NULL),
(318, 'Owned', 'Non-Relatives', 'Concrete', NULL, NULL, 1, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 0, 1, '2019-09-24 15:19:50', NULL, NULL),
(319, 'Retired', 'Parents', 'Concrete', NULL, NULL, 1, 4, 1, 1, 1, 1, 1, 1, 1, 0, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2019-09-24 15:19:50', NULL, NULL),
(320, 'With Parents', 'Relatives', 'Concrete', NULL, NULL, 1, 9, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 0, 0, 1, 1, 1, '2019-09-24 15:19:50', NULL, NULL),
(321, 'With Relatives', 'Non-Relatives', 'Concrete', NULL, NULL, 1, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, '2019-09-24 15:19:50', NULL, NULL),
(322, 'With Parents', 'Relatives', 'Concrete', NULL, NULL, 1, 7, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, '2019-09-24 15:19:51', NULL, NULL),
(323, 'With Relatives', 'Non-Relatives', 'Wood', NULL, NULL, 1, 3, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, '2019-09-24 15:19:51', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_hs_adolescent`
--

CREATE TABLE `t_hs_adolescent` (
  `ADOLESCENT_ID` int(11) NOT NULL,
  `RESIDENT_ID` int(11) DEFAULT NULL,
  `MMRTD_DATE` date DEFAULT NULL,
  `IS_REFERRED` int(11) DEFAULT NULL,
  `DATE_OF_VISIT` date DEFAULT NULL,
  `REMARKS` varchar(50) DEFAULT NULL,
  `CS_DIABETIC` int(11) DEFAULT NULL,
  `CS_MATAAS_PRESYON` int(11) DEFAULT NULL,
  `CS_CANCER` int(11) DEFAULT NULL,
  `CS_BUKOL` int(11) DEFAULT NULL,
  `CREATED_AT` datetime DEFAULT NULL,
  `UPDATED_AT` datetime DEFAULT NULL,
  `ACTIVE_FLAG` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `t_hs_child`
--

CREATE TABLE `t_hs_child` (
  `CHILD_ID` int(11) NOT NULL,
  `TYPE_OF_HOME_RECORD` varchar(100) DEFAULT NULL,
  `DANGERS_OBSERVED` varchar(25) DEFAULT NULL,
  `SOURCE_OF_SERVICE_RESERVED` varchar(100) DEFAULT NULL,
  `HAD_DEWORMING` int(11) DEFAULT NULL,
  `HAD_MMR_12_15_MO` int(11) DEFAULT NULL,
  `HAD_VITAMIN_A_12_59_MO` int(11) DEFAULT NULL,
  `OPT_DATE` date DEFAULT NULL,
  `OPT_WEIGHT` varchar(25) DEFAULT NULL,
  `OPT_HEIGHT` varchar(25) DEFAULT NULL,
  `GP_APRIL_DEWORMING` int(11) DEFAULT NULL,
  `GP_OCTOBER_DEWORMING` int(11) DEFAULT NULL,
  `DO_A` int(11) DEFAULT '0',
  `DO_B` int(11) DEFAULT '0',
  `DO_C` int(11) DEFAULT '0',
  `INFANT_ID` int(11) DEFAULT NULL,
  `CREATED_AT` datetime DEFAULT NULL,
  `UPDATED_AT` datetime DEFAULT NULL,
  `ACTIVE_FLAG` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `t_hs_chronic_cough`
--

CREATE TABLE `t_hs_chronic_cough` (
  `CHRONIC_COUGH_ID` int(11) NOT NULL,
  `RESIDENT_ID` int(11) DEFAULT NULL,
  `HAD_MORE_THAN_2_WEEKS` int(11) DEFAULT NULL,
  `DATE_OF_VISIT` datetime DEFAULT NULL,
  `REMARKS` varchar(50) DEFAULT NULL,
  `CREATED_AT` datetime DEFAULT NULL,
  `UPDATED_AT` datetime DEFAULT NULL,
  `ACTIVE_FLAG` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `t_hs_chronic_disease`
--

CREATE TABLE `t_hs_chronic_disease` (
  `CHRONIC_DISEASE_ID` int(11) NOT NULL,
  `RESIDENT_ID` int(11) DEFAULT NULL,
  `CHRONIC_DISEASE_NAME` varchar(100) DEFAULT NULL,
  `HAD_HIGH_FEVER` int(11) DEFAULT NULL,
  `DATE_OF_VISIT` datetime DEFAULT NULL,
  `REMARKS` varchar(50) DEFAULT NULL,
  `CREATED_AT` datetime DEFAULT NULL,
  `UPDATED_AT` datetime DEFAULT NULL,
  `ACTIVE_FLAG` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `t_hs_elderly`
--

CREATE TABLE `t_hs_elderly` (
  `ELDERLY_ID` int(11) NOT NULL,
  `RESIDENT_ID` int(10) DEFAULT NULL,
  `HAD_FLUE_VACCINE` int(11) DEFAULT '0',
  `HAD_PNEUMOCCOCAL` int(11) DEFAULT '0',
  `REMARKS` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CREATED_AT` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UPDATED_AT` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `t_hs_family_planning`
--

CREATE TABLE `t_hs_family_planning` (
  `FD_ID` int(11) NOT NULL,
  `RESIDENT_ID` int(11) DEFAULT NULL,
  `FP_METHOD` varchar(50) DEFAULT NULL,
  `FP_SOURCE` varchar(100) DEFAULT NULL,
  `CREATED_AT` datetime DEFAULT NULL,
  `UPDATED_AT` datetime DEFAULT NULL,
  `ACTIVE_FLAG` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `t_hs_family_planning_users_visitations`
--

CREATE TABLE `t_hs_family_planning_users_visitations` (
  `VISITATION_ID` int(11) NOT NULL,
  `FP_ID` int(11) DEFAULT NULL,
  `VISITATION_DATE` date DEFAULT NULL,
  `VISITATION_REMARKS` varchar(255) DEFAULT NULL,
  `CREATED_AT` datetime DEFAULT NULL,
  `UPDATED_AT` datetime DEFAULT NULL,
  `ACTIVE_FLAG` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `t_hs_infant`
--

CREATE TABLE `t_hs_infant` (
  `INFANT_ID` int(11) NOT NULL,
  `NEW_BORN_ID` int(11) DEFAULT NULL,
  `TYPE_OF_HOME_RECORD` varchar(50) DEFAULT NULL,
  `OPT_DATE` date DEFAULT NULL,
  `OPT_WEIGHT` decimal(10,0) DEFAULT NULL,
  `OPT_HEIGHT` decimal(10,0) DEFAULT NULL,
  `GP_APRIL_VIT_A` int(11) DEFAULT NULL,
  `GP_OCTOBER_VIT_A` int(11) DEFAULT NULL,
  `DANGERS_OBSERVED` varchar(300) DEFAULT NULL,
  `SOURCE_OF_SERVICE_RECEIVED` varchar(100) DEFAULT NULL,
  `HAD_BREASTFEED` int(11) DEFAULT NULL,
  `HAD_PENTA_1` int(11) DEFAULT NULL,
  `HAD_PENTA_2` int(11) DEFAULT NULL,
  `HAD_PENTA_3` int(11) DEFAULT NULL,
  `HAD_OPV_1` int(11) DEFAULT NULL,
  `HAD_OPV_2` int(11) DEFAULT NULL,
  `HAD_OPV_3` int(11) DEFAULT NULL,
  `HAD_ROTA_1` int(11) DEFAULT NULL,
  `HAD_ROTA_2` int(11) DEFAULT NULL,
  `HAD_MEASLES` int(11) DEFAULT NULL,
  `HAD_VITAMIN_A` int(11) DEFAULT NULL,
  `CREATED_AT` datetime DEFAULT NULL,
  `UPDATED_AT` datetime DEFAULT NULL,
  `ACTIVE_FLAG` int(11) DEFAULT NULL,
  `DO_A` tinyint(4) DEFAULT '0',
  `DO_B` tinyint(4) DEFAULT '0',
  `DO_C` tinyint(4) DEFAULT '0',
  `DO_D` tinyint(4) DEFAULT '0',
  `DO_E` tinyint(4) DEFAULT '0',
  `DO_F` tinyint(4) DEFAULT '0',
  `DO_G` tinyint(4) DEFAULT '0',
  `DO_H` tinyint(4) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `t_hs_newborn`
--

CREATE TABLE `t_hs_newborn` (
  `NEWBORN_ID` int(11) NOT NULL,
  `RESIDENT_ID` int(11) DEFAULT NULL,
  `TYPE_OF_HOME_RECORD` varchar(100) DEFAULT NULL,
  `BIRTH_WEIGHT` varchar(25) DEFAULT NULL,
  `BIRTH_LENGTH` varchar(25) DEFAULT NULL,
  `HAD_BCG` int(11) DEFAULT NULL,
  `HAD_HEPA_B` int(11) DEFAULT NULL,
  `HAD_NEWBORN_SCREENING` int(11) DEFAULT NULL,
  `HAD_BREASTFEED` int(11) DEFAULT NULL,
  `DANGERS_OBSERVED` varchar(25) DEFAULT NULL,
  `DO_A` tinyint(4) DEFAULT '0',
  `DO_B` tinyint(4) DEFAULT '0',
  `DO_C` tinyint(4) DEFAULT '0',
  `DO_D` tinyint(4) DEFAULT '0',
  `DO_E` tinyint(4) DEFAULT '0',
  `DO_F` tinyint(4) DEFAULT '0',
  `SOURCE_OF_SERVICE_RESERVED` varchar(100) DEFAULT NULL,
  `CREATED_AT` datetime DEFAULT NULL,
  `UPDATED_AT` datetime DEFAULT NULL,
  `ACTIVE_FLAG` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `t_hs_newborn`
--

INSERT INTO `t_hs_newborn` (`NEWBORN_ID`, `RESIDENT_ID`, `TYPE_OF_HOME_RECORD`, `BIRTH_WEIGHT`, `BIRTH_LENGTH`, `HAD_BCG`, `HAD_HEPA_B`, `HAD_NEWBORN_SCREENING`, `HAD_BREASTFEED`, `DANGERS_OBSERVED`, `DO_A`, `DO_B`, `DO_C`, `DO_D`, `DO_E`, `DO_F`, `SOURCE_OF_SERVICE_RESERVED`, `CREATED_AT`, `UPDATED_AT`, `ACTIVE_FLAG`) VALUES
(1, 2442, 'Immunization Card (ECCD)', '40', '156', 1, 1, 1, 1, NULL, 1, 0, 1, 0, 0, 0, 'Barangay Health Station', '2019-08-16 00:00:00', NULL, 1),
(2, 2440, 'Immunization Card (ECCD)', '7', '7', 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 'Barangay Health Station', '2019-09-18 00:00:00', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_hs_non_family_planning_users`
--

CREATE TABLE `t_hs_non_family_planning_users` (
  `NON_FP_ID` int(11) NOT NULL,
  `RESIDENT_ID` int(11) DEFAULT NULL,
  `IS_INTERESTED_IN_FP` int(11) DEFAULT NULL,
  `REASONS_NOT_USING` varchar(100) DEFAULT NULL,
  `DATE_OF_VISIT` date DEFAULT NULL,
  `CREATED_AT` datetime DEFAULT NULL,
  `UPDATED_AT` datetime DEFAULT NULL,
  `ACTIVE_FLAG` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `t_hs_post_partum`
--

CREATE TABLE `t_hs_post_partum` (
  `POST_PATRUM_ID` int(11) NOT NULL,
  `PREGNANT_ID` int(11) DEFAULT NULL,
  `BIRTH_PLACE` varchar(50) DEFAULT NULL,
  `BIRTH_COORDINATOR` varchar(50) DEFAULT NULL,
  `DANGERS_OBSERVED` varchar(50) DEFAULT NULL,
  `IS_FP_USER` int(11) DEFAULT NULL,
  `INTERESTED_IN_FP` int(11) DEFAULT NULL,
  `SOURCE_OF_SERVICE_RECEIVED` varchar(100) DEFAULT NULL,
  `BIRH_DATE` date DEFAULT NULL,
  `HAD_BREASTFEED_1_HR` int(11) DEFAULT NULL,
  `HAD_POSTNATAL_24_HRS` int(11) DEFAULT NULL,
  `HAD_POSTNATAL_72_HRS` int(11) DEFAULT NULL,
  `HAD_POSTNATAL_7_DAYS` int(11) DEFAULT NULL,
  `DO_A` int(11) DEFAULT NULL,
  `DO_B` int(11) DEFAULT NULL,
  `DO_C` int(11) DEFAULT NULL,
  `DO_D` int(11) DEFAULT NULL,
  `FERROUS_SULFATE` tinyint(255) DEFAULT NULL,
  `VITAMIN_A` varchar(255) DEFAULT NULL,
  `CREATED_AT` datetime DEFAULT NULL,
  `UPDATED_AT` datetime DEFAULT NULL,
  `ACTIVE_FLAG` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `t_hs_pregnant`
--

CREATE TABLE `t_hs_pregnant` (
  `PREGNANT_ID` int(11) NOT NULL,
  `RESIDENT_ID` int(11) DEFAULT NULL,
  `TYPE_OF_HOME_RECORD` varchar(100) DEFAULT NULL,
  `NUMBER_OF_MONTHS_PREGNANT` int(11) DEFAULT NULL,
  `HAD_BIRTH_PLAN` int(11) DEFAULT NULL,
  `BLOOD_TYPE` varchar(5) DEFAULT NULL,
  `DANGERS_OBSERVED` varchar(25) DEFAULT NULL,
  `DUE_DATE` date DEFAULT NULL,
  `PREGNANCY_CONCLUSION` varchar(100) DEFAULT NULL,
  `HAD_FERRO_SULFATE_FOLIC_ACID` int(11) DEFAULT NULL,
  `HAD_TETANOUS_TOXOID_1` int(11) DEFAULT NULL,
  `HAD_TETANOUS_TOXOID_2` int(11) DEFAULT NULL,
  `HAD_TETANOUS_TOXOID_3` int(11) DEFAULT NULL,
  `HAD_TETANOUS_TOXOID_4` int(11) DEFAULT NULL,
  `HAD_TETANOUS_TOXOID_5` int(11) DEFAULT NULL,
  `PRENATAL_CHECKUP_1TRI` int(11) DEFAULT NULL,
  `PRENATAL_CHECKUP_2TRI` int(11) DEFAULT NULL,
  `PRENATAL_CHECKUP_3TRI` int(11) DEFAULT NULL,
  `DO_A` tinyint(4) DEFAULT '0',
  `DO_B` tinyint(4) DEFAULT '0',
  `DO_C` tinyint(4) DEFAULT '0',
  `DO_D` tinyint(4) DEFAULT '0',
  `DO_E` tinyint(4) DEFAULT '0',
  `DO_F` tinyint(4) DEFAULT '0',
  `DO_G` tinyint(4) DEFAULT '0',
  `CREATED_AT` datetime DEFAULT NULL,
  `UPDATED_AT` datetime DEFAULT NULL,
  `ACTIVE_FLAG` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `t_hs_pregnant`
--

INSERT INTO `t_hs_pregnant` (`PREGNANT_ID`, `RESIDENT_ID`, `TYPE_OF_HOME_RECORD`, `NUMBER_OF_MONTHS_PREGNANT`, `HAD_BIRTH_PLAN`, `BLOOD_TYPE`, `DANGERS_OBSERVED`, `DUE_DATE`, `PREGNANCY_CONCLUSION`, `HAD_FERRO_SULFATE_FOLIC_ACID`, `HAD_TETANOUS_TOXOID_1`, `HAD_TETANOUS_TOXOID_2`, `HAD_TETANOUS_TOXOID_3`, `HAD_TETANOUS_TOXOID_4`, `HAD_TETANOUS_TOXOID_5`, `PRENATAL_CHECKUP_1TRI`, `PRENATAL_CHECKUP_2TRI`, `PRENATAL_CHECKUP_3TRI`, `DO_A`, `DO_B`, `DO_C`, `DO_D`, `DO_E`, `DO_F`, `DO_G`, `CREATED_AT`, `UPDATED_AT`, `ACTIVE_FLAG`) VALUES
(1, 2446, 'Mother and Child Book (MCB)', 3, 1, 'B', NULL, '2019-08-29', 'Namatay ang sanggol', 1, 1, 1, 1, 1, 1, 2, 2, 2, 1, 1, 1, 1, 1, 1, 1, '2019-08-16 16:52:12', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_hs_pwd`
--

CREATE TABLE `t_hs_pwd` (
  `PWD_ID` int(11) NOT NULL,
  `RESIDENT_ID` int(11) DEFAULT NULL,
  `DISABILITY` varchar(100) DEFAULT NULL,
  `DATE_OF_DEATH` date DEFAULT NULL,
  `REASON_OF_DEATH` varchar(100) DEFAULT NULL,
  `CREATED_AT` datetime DEFAULT NULL,
  `UPDATED_AT` datetime DEFAULT NULL,
  `ACTIVE_FLAG` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `t_issuance`
--

CREATE TABLE `t_issuance` (
  `ISSUANCE_ID` int(11) NOT NULL,
  `ISSUANCE_TYPE_ID` int(11) DEFAULT NULL,
  `RESIDENT_ID` int(11) DEFAULT NULL,
  `BUSINESS_ID` int(11) DEFAULT NULL,
  `ISSUANCE_PURPOSE` varchar(100) DEFAULT NULL,
  `ISSUANCE_DATE` date DEFAULT NULL,
  `ISSUANCE_NUMBER` varchar(50) DEFAULT NULL,
  `TIME_RECEIVED` datetime DEFAULT NULL,
  `RECEIVED_BY` varchar(255) DEFAULT NULL,
  `STATUS` varchar(50) DEFAULT NULL,
  `REMARKS` varchar(150) DEFAULT NULL,
  `CREATED_AT` datetime DEFAULT CURRENT_TIMESTAMP,
  `UPDATED_AT` datetime DEFAULT CURRENT_TIMESTAMP,
  `ACTIVE_FLAG` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `t_issuance`
--

INSERT INTO `t_issuance` (`ISSUANCE_ID`, `ISSUANCE_TYPE_ID`, `RESIDENT_ID`, `BUSINESS_ID`, `ISSUANCE_PURPOSE`, `ISSUANCE_DATE`, `ISSUANCE_NUMBER`, `TIME_RECEIVED`, `RECEIVED_BY`, `STATUS`, `REMARKS`, `CREATED_AT`, `UPDATED_AT`, `ACTIVE_FLAG`) VALUES
(7, 2, NULL, 2, ' Est pellentesque elit ullamcorper dignissim cras tincidunt lobortis feugiat.', '2019-07-10', 'CTRL-0002', '2019-07-12 00:00:00', 'Chayo Rafael Iitaoka Villaromán', 'Pending', 'Mauris nunc congue nisi vitae suscipit tellus. Pha', '2019-07-30 01:36:21', '2019-07-30 01:36:21', 1),
(18, 13, 3, NULL, 'fdas', '2019-08-03', 'CTRL-0003', NULL, 'Shiela Mae Velga', 'Issued', 'Anabel Altenwerth requested Barangay Certificate Residency for fdas', NULL, NULL, NULL),
(19, 13, 2, NULL, 'dvsfd', '2019-08-03', 'CTRL-0004', NULL, 'Shiela Mae Velga', 'Issued', 'Angel Belmonte requested Barangay Certificate Residency for dvsfd', NULL, NULL, NULL),
(20, 13, 2, NULL, 'PINAGTAGPO NGUNIT HINDI TINADHANA', '2019-08-03', 'CTRL-0005', NULL, 'Shiela Mae Velga', 'Issued', 'Angel Belmonte requested Barangay Certificate Residency for PINAGTAGPO NGUNIT HINDI TINADHANA', NULL, NULL, NULL),
(21, 13, 4, NULL, 'fdsa', '2019-08-03', 'CTRL-0006', NULL, 'Shiela Mae Velga', 'Issued', 'Ariane  Weber requested Barangay Certificate Residency for fdsa', NULL, NULL, NULL),
(22, 13, 5, NULL, 'Calamity Purposes', '2019-08-03', 'CTRL-0007', NULL, 'Shiela Mae Velga', 'Issued', 'Darrel  Concepción requested Barangay Certificate Residency for Calamity Purposes', NULL, NULL, NULL),
(23, 14, 2, NULL, 'calmity nga', '2019-08-03', 'CTRL-0008', NULL, 'Shiela Mae Velga', 'Issued', 'Angel Belmonte requested Barangay Certificate Calamity Loan SSS-GSIS for calmity nga', NULL, NULL, NULL),
(24, 15, 3, NULL, 'Calamity loan of OFW', '2019-08-03', 'CTRL-0009', NULL, 'Shiela Mae Velga', 'Issued', 'Anabel Altenwerth requested Barangay Certificate Calamity Loan OFW for Calamity loan of OFW', NULL, NULL, NULL),
(25, 17, 6, NULL, 'solo parenting', '2019-08-03', 'CTRL-0010', NULL, 'Shiela Mae Velga', 'Issued', 'Cipriano   Galleros requested Barangay Certificate Solo Parent for solo parenting', NULL, NULL, NULL),
(26, 17, 3, NULL, 'Solo Parenting', '2019-08-03', 'CTRL-0011', NULL, 'Shiela Mae Velga', 'Issued', 'Anabel Altenwerth requested Barangay Certificate Solo Parent for Solo Parenting', NULL, NULL, NULL),
(27, 17, 5, NULL, 'Solo Parenting', '2019-08-03', 'CTRL-0012', NULL, 'Shiela Mae Velga', 'Issued', 'Darrel  Concepción requested Barangay Certificate Solo Parent for Solo Parenting', NULL, NULL, NULL),
(28, 18, 3, NULL, 'Indigency', '2019-08-03', 'CTRL-0013', NULL, 'Shiela Mae Velga', 'Issued', 'Anabel Altenwerth requested Barangay Certificate Indigency for Indigency', NULL, NULL, NULL),
(29, 18, 3, NULL, 'For Schooling Purposes', '2019-08-03', 'CTRL-0014', NULL, 'Shiela Mae Velga', 'Issued', 'Anabel Altenwerth requested Barangay Certificate Indigency for For Schooling Purposes', NULL, NULL, NULL),
(30, 18, 3, NULL, 'For Job oppurtunity', '2019-08-03', 'CTRL-0015', NULL, 'Shiela Mae Velga', 'Issued', 'Anabel Altenwerth requested Barangay Certificate Indigency for For Job oppurtunity', NULL, NULL, NULL),
(31, 13, 3, NULL, 'NOTHING', '2019-08-03', 'CTRL-0016', NULL, 'Shiela Mae Velga', 'Issued', 'Anabel Altenwerth requested Barangay Certificate Residency for NOTHING', NULL, NULL, NULL),
(32, 14, 3, NULL, 'NOTHING', '2019-08-03', 'CTRL-0017', NULL, 'Shiela Mae Velga', 'Issued', 'Anabel Altenwerth requested Barangay Certificate Calamity Loan SSS-GSIS for NOTHING', NULL, NULL, NULL),
(33, 15, 3, NULL, 'NOTHING', '2019-08-03', 'CTRL-0018', NULL, 'Shiela Mae Velga', 'Issued', 'Anabel Altenwerth requested Barangay Certificate Calamity Loan OFW for NOTHING', NULL, NULL, NULL),
(34, 16, 3, NULL, 'NOTHING', '2019-08-03', 'CTRL-0019', NULL, 'Shiela Mae Velga', 'Issued', 'Anabel Altenwerth requested Barangay Certificate SPES for NOTHING', NULL, NULL, NULL),
(35, 17, 3, NULL, 'NOTHING', '2019-08-03', 'CTRL-0020', NULL, 'Shiela Mae Velga', 'Issued', 'Anabel Altenwerth requested Barangay Certificate Solo Parent for NOTHING', NULL, NULL, NULL),
(36, 18, 3, NULL, 'NOTHING', '2019-08-03', 'CTRL-0021', NULL, 'Shiela Mae Velga', 'Issued', 'Anabel Altenwerth requested Barangay Certificate Indigency for NOTHING', NULL, NULL, NULL),
(37, 13, 3, NULL, 'Pang 20 dapat to', '2019-08-05', 'CTRL-0003', NULL, 'Shiela Mae Velga', 'Issued', 'Anabel Altenwerth requested Barangay Certificate Residency for Pang 20 dapat to', '2019-08-05 12:53:34', '2019-08-05 12:53:34', NULL),
(38, 13, 3, NULL, 'Sana nakikinig ka', '2019-08-05', 'CTRL-0003', NULL, 'Shiela Mae Velga', 'Issued', 'Anabel Altenwerth requested Barangay Certificate Residency for Sana nakikinig ka', '2019-08-05 15:24:33', '2019-08-05 15:24:33', NULL),
(39, 13, 3, NULL, 'fdsa', '2019-08-05', 'CTRL-0003', NULL, 'Shiela Mae Velga', 'Issued', 'Anabel Altenwerth requested Barangay Certificate Residency for fdsa', '2019-08-05 15:31:45', '2019-08-05 15:31:45', NULL),
(40, 13, 2, NULL, 'fdsa', '2019-08-05', 'CTRL-0022', NULL, 'Shiela Mae Velga', 'Issued', 'Angel Belmonte requested Barangay Certificate Residency for fdsa', '2019-08-05 15:32:38', '2019-08-05 15:32:38', NULL),
(41, 13, 3, NULL, 'fdd', '2019-08-05', 'CTRL-0003', NULL, 'Shiela Mae Velga', 'Issued', 'Anabel Altenwerth requested Barangay Certificate Residency for fdd', '2019-08-05 16:13:47', '2019-08-05 16:13:47', NULL),
(48, 7, NULL, 1, '$PURPOSE', '2019-08-05', 'CTRL-0431', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-08-05 16:55:16', '2019-08-05 16:55:16', NULL),
(49, 7, NULL, 2, '$PURPOSE', '2019-08-05', 'CTRL-0431', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-08-05 17:17:03', '2019-08-05 17:17:03', NULL),
(50, 7, NULL, 2, '$PURPOSE', '2019-08-05', 'CTRL-0431', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-08-05 17:19:16', '2019-08-05 17:19:16', NULL),
(51, 8, NULL, 2, '$PURPOSE', '2019-08-05', 'CTRL-0431', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Building', '2019-08-05 17:21:47', '2019-08-05 17:21:47', NULL),
(52, 7, NULL, 2, '$PURPOSE', '2019-08-05', 'CTRL-0431', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-08-05 18:14:51', '2019-08-05 18:14:51', NULL),
(53, 8, NULL, 2, '$PURPOSE', '2019-08-05', 'CTRL-0431', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Building', '2019-08-05 18:15:15', '2019-08-05 18:15:15', NULL),
(54, 9, NULL, 2, '$PURPOSE', '2019-08-05', 'CTRL-0431', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Business', '2019-08-05 18:16:41', '2019-08-05 18:16:41', NULL),
(55, 10, NULL, 2, '$PURPOSE', '2019-08-05', 'CTRL-0923', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Zonal', '2019-08-05 18:30:56', '2019-08-05 18:30:56', NULL),
(56, 11, NULL, 2, '$PURPOSE', '2019-08-05', 'CTRL-0923', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Tricycle', '2019-08-05 18:39:02', '2019-08-05 18:39:02', NULL),
(57, 11, NULL, 2, '$PURPOSE', '2019-08-05', 'CTRL-0923', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Tricycle', '2019-08-05 18:50:32', '2019-08-05 18:50:32', NULL),
(58, 11, NULL, 2, '$PURPOSE', '2019-08-05', 'CTRL-0923-BCD', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Tricycle', '2019-08-05 18:53:10', '2019-08-05 18:53:10', NULL),
(59, 11, NULL, 2, '$PURPOSE', '2019-08-05', 'CTRL-0923-BCD', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Tricycle', '2019-08-05 18:53:16', '2019-08-05 18:53:16', NULL),
(60, 11, NULL, 2, '$PURPOSE', '2019-08-05', '0923-BCD', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Tricycle', '2019-08-05 18:54:33', '2019-08-05 18:54:33', NULL),
(61, 7, NULL, 1, '$PURPOSE', '2019-08-05', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-08-05 18:54:55', '2019-08-05 18:54:55', NULL),
(62, 8, NULL, 2, '$PURPOSE', '2019-08-05', '0431-BCA', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Building', '2019-08-05 18:55:05', '2019-08-05 18:55:05', NULL),
(63, 9, NULL, 2, '$PURPOSE', '2019-08-05', '0431-BCB', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Business', '2019-08-05 18:55:20', '2019-08-05 18:55:20', NULL),
(64, 10, NULL, 2, '$PURPOSE', '2019-08-05', '0923-BCC', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Zonal', '2019-08-05 18:55:35', '2019-08-05 18:55:35', NULL),
(65, 11, NULL, 2, '$PURPOSE', '2019-08-05', '0923-BCD', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Tricycle', '2019-08-05 18:55:44', '2019-08-05 18:55:44', NULL),
(66, 11, NULL, 2, '$PURPOSE', '2019-08-05', '0923-BCD', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Tricycle', '2019-08-05 18:55:53', '2019-08-05 18:55:53', NULL),
(67, 11, NULL, 2, '$PURPOSE', '2019-08-05', '0923-BCD', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Tricycle', '2019-08-05 18:57:57', '2019-08-05 18:57:57', NULL),
(68, 11, NULL, 2, '$PURPOSE', '2019-08-05', '0923-BCD', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Tricycle', '2019-08-05 18:58:55', '2019-08-05 18:58:55', NULL),
(69, 11, NULL, 2, '$PURPOSE', '2019-08-05', '0923-BCD', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Tricycle', '2019-08-05 18:59:57', '2019-08-05 18:59:57', NULL),
(70, 12, NULL, 2, '$PURPOSE', '2019-08-05', '0892-BCE', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance General Purposes', '2019-08-05 19:09:56', '2019-08-05 19:09:56', NULL),
(71, 7, NULL, 4, '$PURPOSE', '2019-08-07', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-08-07 17:02:54', '2019-08-07 17:02:54', NULL),
(72, 7, NULL, 6, '$PURPOSE', '2019-08-07', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-08-07 17:18:28', '2019-08-07 17:18:28', NULL),
(73, 8, NULL, 1, '$PURPOSE', '2019-08-08', '0431-BCA', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Building', '2019-08-08 14:44:36', '2019-08-08 14:44:36', NULL),
(74, 8, NULL, 1, '$PURPOSE', '2019-08-08', '0431-BCA', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Building', '2019-08-08 14:44:39', '2019-08-08 14:44:39', NULL),
(75, 7, NULL, 4, '$PURPOSE', '2019-08-08', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-08-08 14:45:03', '2019-08-08 14:45:03', NULL),
(76, 9, NULL, 1, '$PURPOSE', '2019-08-08', '0431-BCB', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Business', '2019-08-08 14:45:18', '2019-08-08 14:45:18', NULL),
(77, 9, NULL, 1, '$PURPOSE', '2019-08-08', '0431-BCB', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Business', '2019-08-08 14:45:25', '2019-08-08 14:45:25', NULL),
(78, 9, NULL, 1, '$PURPOSE', '2019-08-08', '0431-BCB', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Business', '2019-08-08 14:47:29', '2019-08-08 14:47:29', NULL),
(79, 9, NULL, 1, '$PURPOSE', '2019-08-08', '0431-BCB', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Business', '2019-08-08 14:49:25', '2019-08-08 14:49:25', NULL),
(80, 8, NULL, 8, '$PURPOSE', '2019-08-08', '0431-BCA', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Building', '2019-08-08 14:51:38', '2019-08-08 14:51:38', NULL),
(81, 9, NULL, 1, '$PURPOSE', '2019-08-08', '0431-BCB', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Business', '2019-08-08 15:00:29', '2019-08-08 15:00:29', NULL),
(82, 8, NULL, 1, '$PURPOSE', '2019-08-08', '0431-BCA', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Building', '2019-08-08 15:00:44', '2019-08-08 15:00:44', NULL),
(83, 10, NULL, 1, '$PURPOSE', '2019-08-08', '0923-BCC', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Zonal', '2019-08-08 15:01:18', '2019-08-08 15:01:18', NULL),
(84, 10, NULL, 1, '$PURPOSE', '2019-08-08', '0923-BCC', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Zonal', '2019-08-08 15:01:55', '2019-08-08 15:01:55', NULL),
(85, 11, NULL, 8, '$PURPOSE', '2019-08-08', '0923-BCD', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Tricycle', '2019-08-08 15:02:09', '2019-08-08 15:02:09', NULL),
(86, 11, NULL, 8, '$PURPOSE', '2019-08-08', '0923-BCD', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Tricycle', '2019-08-08 15:02:19', '2019-08-08 15:02:19', NULL),
(87, 12, NULL, 8, '$PURPOSE', '2019-08-08', '0892-BCE', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance General Purposes', '2019-08-08 15:02:28', '2019-08-08 15:02:28', NULL),
(88, 12, NULL, 1, '$PURPOSE', '2019-08-08', '0892-BCE', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance General Purposes', '2019-08-08 15:02:39', '2019-08-08 15:02:39', NULL),
(89, 12, NULL, 1, '$PURPOSE', '2019-08-08', '0892-BCE', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance General Purposes', '2019-08-08 15:02:50', '2019-08-08 15:02:50', NULL),
(90, 12, NULL, 1, '$PURPOSE', '2019-08-08', '0892-BCE', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance General Purposes', '2019-08-08 15:03:31', '2019-08-08 15:03:31', NULL),
(91, 7, NULL, 4, '$PURPOSE', '2019-08-08', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-08-08 16:53:54', '2019-08-08 16:53:54', NULL),
(93, 8, NULL, 4, '$PURPOSE', '2019-08-08', '0431-BCA', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Building', '2019-08-08 16:56:23', '2019-08-08 16:56:23', NULL),
(94, 7, NULL, 5, '$PURPOSE', '2019-08-08', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-08-08 17:27:24', '2019-08-08 17:27:24', NULL),
(101, 7, NULL, 1, '$PURPOSE', '2019-08-08', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-08-08 17:31:45', '2019-08-08 17:31:45', NULL),
(102, 7, NULL, 1, '$PURPOSE', '2019-08-08', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-08-08 17:31:57', '2019-08-08 17:31:57', NULL),
(103, 7, NULL, 1, '$PURPOSE', '2019-08-08', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-08-08 18:52:12', '2019-08-08 18:52:12', NULL),
(104, 7, NULL, 1, '$PURPOSE', '2019-08-08', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-08-08 18:53:25', '2019-08-08 18:53:25', NULL),
(105, 7, NULL, 1, '$PURPOSE', '2019-08-08', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-08-08 18:55:08', '2019-08-08 18:55:08', NULL),
(106, 7, NULL, 1, '$PURPOSE', '2019-08-08', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-08-08 18:55:20', '2019-08-08 18:55:20', NULL),
(107, 7, NULL, 1, '$PURPOSE', '2019-08-08', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-08-08 18:58:10', '2019-08-08 18:58:10', NULL),
(108, 7, NULL, 1, '$PURPOSE', '2019-08-08', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-08-08 18:59:10', '2019-08-08 18:59:10', NULL),
(109, 7, NULL, 1, '$PURPOSE', '2019-08-08', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-08-08 19:00:36', '2019-08-08 19:00:36', NULL),
(110, 7, NULL, 1, '$PURPOSE', '2019-08-08', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-08-08 19:01:15', '2019-08-08 19:01:15', NULL),
(111, 7, NULL, 1, '$PURPOSE', '2019-08-08', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-08-08 19:05:40', '2019-08-08 19:05:40', NULL),
(112, 7, NULL, 1, '$PURPOSE', '2019-08-08', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-08-08 19:05:58', '2019-08-08 19:05:58', NULL),
(113, 7, NULL, 2, '$PURPOSE', '2019-08-08', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-08-08 19:06:12', '2019-08-08 19:06:12', NULL),
(114, 7, NULL, 1, '$PURPOSE', '2019-08-08', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-08-08 19:06:45', '2019-08-08 19:06:45', NULL),
(115, 7, NULL, 1, '$PURPOSE', '2019-08-08', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-08-08 19:07:59', '2019-08-08 19:07:59', NULL),
(116, 7, NULL, 1, '$PURPOSE', '2019-08-08', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-08-08 19:14:05', '2019-08-08 19:14:05', NULL),
(117, 7, NULL, 1, '$PURPOSE', '2019-08-08', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-08-08 19:20:18', '2019-08-08 19:20:18', NULL),
(118, 7, NULL, 1, '$PURPOSE', '2019-08-08', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-08-08 19:21:14', '2019-08-08 19:21:14', NULL),
(119, 9, NULL, 4, '$PURPOSE', '2019-08-08', '0431-BCB', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Business', '2019-08-08 23:10:07', '2019-08-08 23:10:07', NULL),
(120, 7, NULL, 1, '$PURPOSE', '2019-08-09', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-08-09 14:00:02', '2019-08-09 14:00:02', NULL),
(121, 7, NULL, 1, '$PURPOSE', '2019-08-09', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-08-09 14:00:12', '2019-08-09 14:00:12', NULL),
(122, 7, NULL, 1, '$PURPOSE', '2019-08-09', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-08-09 14:01:12', '2019-08-09 14:01:12', NULL),
(123, 7, NULL, 2, '$PURPOSE', '2019-08-09', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-08-09 14:01:15', '2019-08-09 14:01:15', NULL),
(124, 7, NULL, 2, '$PURPOSE', '2019-08-09', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-08-09 14:01:20', '2019-08-09 14:01:20', NULL),
(125, 13, 2442, NULL, 'for sample', '2019-08-16', 'CTRL-0003', NULL, 'Shiela Mae Velga', 'Issued', 'John Don requested Barangay Certificate Residency for for sample', '2019-08-16 14:04:34', '2019-08-16 14:04:34', NULL),
(126, 7, NULL, 1, '$PURPOSE', '2019-08-16', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-08-16 14:12:22', '2019-08-16 14:12:22', NULL),
(127, 10, NULL, 4, '$PURPOSE', '2019-08-16', '0923-BCC', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Zonal', '2019-08-16 14:18:20', '2019-08-16 14:18:20', NULL),
(128, 11, NULL, 4, '$PURPOSE', '2019-08-16', '0923-BCD', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Tricycle', '2019-08-16 14:19:22', '2019-08-16 14:19:22', NULL),
(129, 12, NULL, 4, '$PURPOSE', '2019-08-16', '0892-BCE', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance General Purposes', '2019-08-16 14:19:40', '2019-08-16 14:19:40', NULL),
(130, 8, NULL, 4, '$PURPOSE', '2019-09-18', '0431-BCA', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Building', '2019-09-19 00:45:11', '2019-09-19 00:45:11', NULL),
(131, 7, NULL, 7, '$PURPOSE', '2019-09-19', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-19 11:27:16', '2019-09-19 11:27:16', NULL),
(132, 7, NULL, 1, '$PURPOSE', '2019-09-19', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-19 16:49:01', '2019-09-19 16:49:01', NULL),
(133, 8, NULL, 4, '$PURPOSE', '2019-09-19', '0431-BCA', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Building', '2019-09-19 18:03:13', '2019-09-19 18:03:13', NULL),
(134, 9, NULL, 4, '$PURPOSE', '2019-09-19', '0431-BCB', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Business', '2019-09-19 18:04:14', '2019-09-19 18:04:14', NULL),
(135, 7, NULL, 1, '$PURPOSE', '2019-09-23', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-23 15:18:51', '2019-09-23 15:18:51', NULL),
(136, 8, NULL, 4, '$PURPOSE', '2019-09-23', '0431-BCA', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Building', '2019-09-23 15:19:09', '2019-09-23 15:19:09', NULL),
(137, 8, NULL, 4, '$PURPOSE', '2019-09-23', '0431-BCA', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Building', '2019-09-23 15:19:09', '2019-09-23 15:19:09', NULL),
(138, 8, NULL, 4, '$PURPOSE', '2019-09-23', '0431-BCA', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Building', '2019-09-23 15:19:27', '2019-09-23 15:19:27', NULL),
(139, 9, NULL, 4, '$PURPOSE', '2019-09-23', '0431-BCB', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Business', '2019-09-23 15:19:50', '2019-09-23 15:19:50', NULL),
(140, 8, NULL, 4, '$PURPOSE', '2019-09-23', '0431-BCA', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Building', '2019-09-23 15:20:17', '2019-09-23 15:20:17', NULL),
(141, 10, NULL, 4, '$PURPOSE', '2019-09-23', '0923-BCC', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Zonal', '2019-09-23 15:20:29', '2019-09-23 15:20:29', NULL),
(142, 10, NULL, 4, '$PURPOSE', '2019-09-23', '0923-BCC', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Zonal', '2019-09-23 15:20:29', '2019-09-23 15:20:29', NULL),
(143, 10, NULL, 4, '$PURPOSE', '2019-09-23', '0923-BCC', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Zonal', '2019-09-23 15:20:29', '2019-09-23 15:20:29', NULL),
(144, 11, NULL, 4, '$PURPOSE', '2019-09-23', '0923-BCD', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Tricycle', '2019-09-23 15:20:52', '2019-09-23 15:20:52', NULL),
(145, 12, NULL, 4, '$PURPOSE', '2019-09-23', '0892-BCE', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance General Purposes', '2019-09-23 15:21:15', '2019-09-23 15:21:15', NULL),
(146, 7, NULL, 1, '$PURPOSE', '2019-09-25', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 00:46:33', '2019-09-26 00:46:33', NULL),
(147, 7, NULL, 1, '$PURPOSE', '2019-09-25', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 00:46:38', '2019-09-26 00:46:38', NULL),
(148, 7, NULL, 1, '$PURPOSE', '2019-09-25', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 00:49:50', '2019-09-26 00:49:50', NULL),
(149, 7, NULL, 1, '$PURPOSE', '2019-09-25', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 00:50:31', '2019-09-26 00:50:31', NULL),
(150, 7, NULL, 1, '$PURPOSE', '2019-09-25', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 00:50:55', '2019-09-26 00:50:55', NULL),
(151, 7, NULL, 1, '$PURPOSE', '2019-09-25', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 00:52:37', '2019-09-26 00:52:37', NULL),
(152, 7, NULL, 1, '$PURPOSE', '2019-09-25', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 00:53:15', '2019-09-26 00:53:15', NULL),
(153, 7, NULL, 1, '$PURPOSE', '2019-09-25', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 00:53:15', '2019-09-26 00:53:15', NULL),
(154, 7, NULL, 1, '$PURPOSE', '2019-09-25', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 00:54:55', '2019-09-26 00:54:55', NULL),
(155, 7, NULL, 1, '$PURPOSE', '2019-09-25', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 00:55:10', '2019-09-26 00:55:10', NULL),
(156, 7, NULL, 1, '$PURPOSE', '2019-09-25', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 00:55:40', '2019-09-26 00:55:40', NULL),
(157, 7, NULL, 1, '$PURPOSE', '2019-09-25', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 00:56:21', '2019-09-26 00:56:21', NULL),
(158, 7, NULL, 1, '$PURPOSE', '2019-09-25', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 00:56:56', '2019-09-26 00:56:56', NULL),
(159, 7, NULL, 1, '$PURPOSE', '2019-09-25', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 00:56:59', '2019-09-26 00:56:59', NULL),
(160, 7, NULL, 1, '$PURPOSE', '2019-09-25', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 00:57:41', '2019-09-26 00:57:41', NULL),
(161, 7, NULL, 1, '$PURPOSE', '2019-09-25', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 00:58:11', '2019-09-26 00:58:11', NULL),
(162, 7, NULL, 1, '$PURPOSE', '2019-09-25', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 00:58:33', '2019-09-26 00:58:33', NULL),
(163, 7, NULL, 1, '$PURPOSE', '2019-09-25', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 00:58:56', '2019-09-26 00:58:56', NULL),
(164, 7, NULL, 1, '$PURPOSE', '2019-09-25', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 00:59:24', '2019-09-26 00:59:24', NULL),
(165, 7, NULL, 1, '$PURPOSE', '2019-09-25', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 00:59:25', '2019-09-26 00:59:25', NULL),
(166, 7, NULL, 1, '$PURPOSE', '2019-09-25', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 00:59:50', '2019-09-26 00:59:50', NULL),
(167, 7, NULL, 1, '$PURPOSE', '2019-09-25', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 00:59:51', '2019-09-26 00:59:51', NULL),
(168, 7, NULL, 7, '$PURPOSE', '2019-09-25', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 00:59:54', '2019-09-26 00:59:54', NULL),
(169, 7, NULL, 1, '$PURPOSE', '2019-09-25', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 01:00:42', '2019-09-26 01:00:42', NULL),
(170, 7, NULL, 1, '$PURPOSE', '2019-09-25', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 01:00:44', '2019-09-26 01:00:44', NULL),
(171, 7, NULL, 1, '$PURPOSE', '2019-09-25', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 01:01:01', '2019-09-26 01:01:01', NULL),
(172, 7, NULL, 1, '$PURPOSE', '2019-09-25', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 01:01:04', '2019-09-26 01:01:04', NULL),
(173, 7, NULL, 1, '$PURPOSE', '2019-09-25', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 01:02:12', '2019-09-26 01:02:12', NULL),
(174, 7, NULL, 1, '$PURPOSE', '2019-09-25', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 01:02:35', '2019-09-26 01:02:35', NULL),
(175, 7, NULL, 1, '$PURPOSE', '2019-09-25', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 01:03:03', '2019-09-26 01:03:03', NULL),
(176, 7, NULL, 1, '$PURPOSE', '2019-09-25', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 01:03:03', '2019-09-26 01:03:03', NULL),
(177, 7, NULL, 1, '$PURPOSE', '2019-09-25', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 01:03:36', '2019-09-26 01:03:36', NULL),
(178, 7, NULL, 1, '$PURPOSE', '2019-09-25', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 01:03:53', '2019-09-26 01:03:53', NULL),
(179, 7, NULL, 1, '$PURPOSE', '2019-09-25', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 01:04:15', '2019-09-26 01:04:15', NULL),
(180, 7, NULL, 1, '$PURPOSE', '2019-09-25', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 01:04:32', '2019-09-26 01:04:32', NULL),
(181, 7, NULL, 1, '$PURPOSE', '2019-09-25', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 01:04:49', '2019-09-26 01:04:49', NULL),
(182, 7, NULL, 1, '$PURPOSE', '2019-09-25', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 01:05:11', '2019-09-26 01:05:11', NULL),
(183, 7, NULL, 1, '$PURPOSE', '2019-09-26', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 09:19:41', '2019-09-26 09:19:41', NULL),
(184, 7, NULL, 1, '$PURPOSE', '2019-09-26', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 09:21:08', '2019-09-26 09:21:08', NULL),
(185, 7, NULL, 1, '$PURPOSE', '2019-09-26', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 09:21:46', '2019-09-26 09:21:46', NULL),
(186, 7, NULL, 1, '$PURPOSE', '2019-09-26', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 09:22:29', '2019-09-26 09:22:29', NULL),
(187, 7, NULL, 1, '$PURPOSE', '2019-09-26', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 09:22:30', '2019-09-26 09:22:30', NULL),
(188, 7, NULL, 1, '$PURPOSE', '2019-09-26', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 09:23:07', '2019-09-26 09:23:07', NULL),
(189, 7, NULL, 1, '$PURPOSE', '2019-09-26', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 09:23:47', '2019-09-26 09:23:47', NULL),
(190, 7, NULL, 1, '$PURPOSE', '2019-09-26', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 09:24:29', '2019-09-26 09:24:29', NULL),
(191, 7, NULL, 1, '$PURPOSE', '2019-09-26', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 09:25:07', '2019-09-26 09:25:07', NULL),
(192, 7, NULL, 1, '$PURPOSE', '2019-09-26', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 09:25:35', '2019-09-26 09:25:35', NULL),
(193, 7, NULL, 1, '$PURPOSE', '2019-09-26', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 09:25:59', '2019-09-26 09:25:59', NULL),
(194, 7, NULL, 1, '$PURPOSE', '2019-09-26', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 09:26:54', '2019-09-26 09:26:54', NULL),
(195, 7, NULL, 1, '$PURPOSE', '2019-09-26', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 09:27:36', '2019-09-26 09:27:36', NULL),
(196, 7, NULL, 1, '$PURPOSE', '2019-09-26', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 09:28:43', '2019-09-26 09:28:43', NULL),
(197, 7, NULL, 1, '$PURPOSE', '2019-09-26', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 09:30:00', '2019-09-26 09:30:00', NULL),
(198, 7, NULL, 1, '$PURPOSE', '2019-09-26', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 09:30:37', '2019-09-26 09:30:37', NULL),
(199, 7, NULL, 1, '$PURPOSE', '2019-09-26', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 09:31:08', '2019-09-26 09:31:08', NULL),
(200, 7, NULL, 1, '$PURPOSE', '2019-09-26', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 09:31:27', '2019-09-26 09:31:27', NULL),
(201, 7, NULL, 1, '$PURPOSE', '2019-09-26', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 09:33:54', '2019-09-26 09:33:54', NULL),
(202, 7, NULL, 1, '$PURPOSE', '2019-09-26', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 09:34:13', '2019-09-26 09:34:13', NULL),
(203, 7, NULL, 1, '$PURPOSE', '2019-09-26', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 09:34:44', '2019-09-26 09:34:44', NULL),
(204, 7, NULL, 1, '$PURPOSE', '2019-09-26', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 09:36:38', '2019-09-26 09:36:38', NULL),
(205, 7, NULL, 1, '$PURPOSE', '2019-09-26', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 09:37:14', '2019-09-26 09:37:14', NULL),
(206, 7, NULL, 1, '$PURPOSE', '2019-09-26', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 09:37:58', '2019-09-26 09:37:58', NULL),
(207, 7, NULL, 1, '$PURPOSE', '2019-09-26', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 09:38:26', '2019-09-26 09:38:26', NULL),
(208, 7, NULL, 1, '$PURPOSE', '2019-09-26', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 09:39:04', '2019-09-26 09:39:04', NULL),
(209, 7, NULL, 1, '$PURPOSE', '2019-09-26', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 09:40:26', '2019-09-26 09:40:26', NULL),
(210, 7, NULL, 1, '$PURPOSE', '2019-09-26', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 09:41:15', '2019-09-26 09:41:15', NULL),
(211, 7, NULL, 1, '$PURPOSE', '2019-09-26', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 09:41:53', '2019-09-26 09:41:53', NULL),
(212, 7, NULL, 1, '$PURPOSE', '2019-09-26', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 09:42:14', '2019-09-26 09:42:14', NULL),
(213, 7, NULL, 1, '$PURPOSE', '2019-09-26', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 09:42:54', '2019-09-26 09:42:54', NULL),
(214, 7, NULL, 1, '$PURPOSE', '2019-09-26', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 09:43:17', '2019-09-26 09:43:17', NULL),
(215, 7, NULL, 1, '$PURPOSE', '2019-09-26', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 09:44:01', '2019-09-26 09:44:01', NULL),
(216, 7, NULL, 1, '$PURPOSE', '2019-09-26', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 09:49:50', '2019-09-26 09:49:50', NULL),
(217, 8, NULL, 4, '$PURPOSE', '2019-09-26', '0431-BCA', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Building', '2019-09-26 09:52:09', '2019-09-26 09:52:09', NULL),
(218, 8, NULL, 4, '$PURPOSE', '2019-09-26', '0431-BCA', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Building', '2019-09-26 09:53:17', '2019-09-26 09:53:17', NULL),
(219, 8, NULL, 4, '$PURPOSE', '2019-09-26', '0431-BCA', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Building', '2019-09-26 09:54:44', '2019-09-26 09:54:44', NULL),
(220, 8, NULL, 4, '$PURPOSE', '2019-09-26', '0431-BCA', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Building', '2019-09-26 09:54:47', '2019-09-26 09:54:47', NULL),
(221, 8, NULL, 4, '$PURPOSE', '2019-09-26', '0431-BCA', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Building', '2019-09-26 09:56:45', '2019-09-26 09:56:45', NULL),
(222, 8, NULL, 4, '$PURPOSE', '2019-09-26', '0431-BCA', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Building', '2019-09-26 09:57:25', '2019-09-26 09:57:25', NULL),
(223, 8, NULL, 4, '$PURPOSE', '2019-09-26', '0431-BCA', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Building', '2019-09-26 09:57:41', '2019-09-26 09:57:41', NULL),
(224, 8, NULL, 4, '$PURPOSE', '2019-09-26', '0431-BCA', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Building', '2019-09-26 09:58:20', '2019-09-26 09:58:20', NULL),
(225, 8, NULL, 4, '$PURPOSE', '2019-09-26', '0431-BCA', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Building', '2019-09-26 09:58:21', '2019-09-26 09:58:21', NULL),
(226, 8, NULL, 4, '$PURPOSE', '2019-09-26', '0431-BCA', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Building', '2019-09-26 09:58:42', '2019-09-26 09:58:42', NULL),
(227, 8, NULL, 4, '$PURPOSE', '2019-09-26', '0431-BCA', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Building', '2019-09-26 09:58:58', '2019-09-26 09:58:58', NULL),
(228, 8, NULL, 4, '$PURPOSE', '2019-09-26', '0431-BCA', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Building', '2019-09-26 09:59:45', '2019-09-26 09:59:45', NULL),
(229, 8, NULL, 4, '$PURPOSE', '2019-09-26', '0431-BCA', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Building', '2019-09-26 10:00:09', '2019-09-26 10:00:09', NULL),
(230, 8, NULL, 4, '$PURPOSE', '2019-09-26', '0431-BCA', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Building', '2019-09-26 10:02:21', '2019-09-26 10:02:21', NULL),
(231, 8, NULL, 4, '$PURPOSE', '2019-09-26', '0431-BCA', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Building', '2019-09-26 10:03:46', '2019-09-26 10:03:46', NULL),
(232, 8, NULL, 4, '$PURPOSE', '2019-09-26', '0431-BCA', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Building', '2019-09-26 10:04:32', '2019-09-26 10:04:32', NULL),
(233, 8, NULL, 4, '$PURPOSE', '2019-09-26', '0431-BCA', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Building', '2019-09-26 10:04:32', '2019-09-26 10:04:32', NULL),
(234, 8, NULL, 4, '$PURPOSE', '2019-09-26', '0431-BCA', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Building', '2019-09-26 10:05:02', '2019-09-26 10:05:02', NULL),
(235, 8, NULL, 4, '$PURPOSE', '2019-09-26', '0431-BCA', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Building', '2019-09-26 10:05:28', '2019-09-26 10:05:28', NULL),
(236, 8, NULL, 4, '$PURPOSE', '2019-09-26', '0431-BCA', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Building', '2019-09-26 10:05:42', '2019-09-26 10:05:42', NULL),
(237, 8, NULL, 4, '$PURPOSE', '2019-09-26', '0431-BCA', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Building', '2019-09-26 10:05:45', '2019-09-26 10:05:45', NULL),
(238, 8, NULL, 4, '$PURPOSE', '2019-09-26', '0431-BCA', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Building', '2019-09-26 10:05:59', '2019-09-26 10:05:59', NULL),
(239, 8, NULL, 4, '$PURPOSE', '2019-09-26', '0431-BCA', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Building', '2019-09-26 10:06:02', '2019-09-26 10:06:02', NULL),
(240, 9, NULL, 4, '$PURPOSE', '2019-09-26', '0431-BCB', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Business', '2019-09-26 10:06:54', '2019-09-26 10:06:54', NULL),
(241, 9, NULL, 4, '$PURPOSE', '2019-09-26', '0431-BCB', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Business', '2019-09-26 10:07:22', '2019-09-26 10:07:22', NULL),
(242, 9, NULL, 4, '$PURPOSE', '2019-09-26', '0431-BCB', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Business', '2019-09-26 10:08:13', '2019-09-26 10:08:13', NULL),
(243, 9, NULL, 4, '$PURPOSE', '2019-09-26', '0431-BCB', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Business', '2019-09-26 10:08:15', '2019-09-26 10:08:15', NULL),
(244, 10, NULL, 4, '$PURPOSE', '2019-09-26', '0923-BCC', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Zonal', '2019-09-26 10:09:59', '2019-09-26 10:09:59', NULL),
(245, 10, NULL, 4, '$PURPOSE', '2019-09-26', '0923-BCC', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Zonal', '2019-09-26 10:12:09', '2019-09-26 10:12:09', NULL),
(246, 10, NULL, 4, '$PURPOSE', '2019-09-26', '0923-BCC', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Zonal', '2019-09-26 10:12:50', '2019-09-26 10:12:50', NULL),
(247, 11, NULL, 4, '$PURPOSE', '2019-09-26', '0923-BCD', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance Tricycle', '2019-09-26 10:14:08', '2019-09-26 10:14:08', NULL),
(248, 12, NULL, 4, '$PURPOSE', '2019-09-26', '0892-BCE', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance General Purposes', '2019-09-26 10:14:24', '2019-09-26 10:14:24', NULL),
(249, 12, NULL, 4, '$PURPOSE', '2019-09-26', '0892-BCE', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance General Purposes', '2019-09-26 10:15:09', '2019-09-26 10:15:09', NULL),
(250, 12, NULL, 4, '$PURPOSE', '2019-09-26', '0892-BCE', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Clearance General Purposes', '2019-09-26 10:15:38', '2019-09-26 10:15:38', NULL),
(251, 18, 2751, NULL, 'for school', '2019-09-26', 'CTRL-0003', NULL, 'Shiela Mae Velga', 'Issued', 'Alyssa Valdez requested Barangay Certificate Indigency for for school', '2019-09-26 10:20:00', '2019-09-26 10:20:00', NULL),
(252, 13, 2751, NULL, 'sample', '2019-09-26', 'CTRL-0003', NULL, 'Shiela Mae Velga', 'Issued', 'Alyssa Valdez requested Barangay Certificate Residency for sample', '2019-09-26 10:21:27', '2019-09-26 10:21:27', NULL),
(253, 13, 2751, NULL, 'purpose', '2019-09-26', 'CTRL-0003', NULL, 'Shiela Mae Velga', 'Issued', 'Alyssa Valdez requested Barangay Certificate Residency for purpose', '2019-09-26 10:22:16', '2019-09-26 10:22:16', NULL),
(254, 14, 2751, NULL, 'sample', '2019-09-26', 'CTRL-0003', NULL, 'Shiela Mae Velga', 'Issued', 'Alyssa Valdez requested Barangay Certificate Calamity Loan SSS-GSIS for sample', '2019-09-26 10:23:46', '2019-09-26 10:23:46', NULL),
(255, 14, 2751, NULL, 'purpose', '2019-09-26', 'CTRL-0003', NULL, 'Shiela Mae Velga', 'Issued', 'Alyssa Valdez requested Barangay Certificate Calamity Loan SSS-GSIS for purpose', '2019-09-26 10:25:00', '2019-09-26 10:25:00', NULL),
(256, 16, 2751, NULL, NULL, '2019-09-26', 'CTRL-0003', NULL, 'Shiela Mae Velga', 'Issued', 'Alyssa Valdez requested Barangay Certificate SPES for ', '2019-09-26 10:30:28', '2019-09-26 10:30:28', NULL),
(257, 16, 2751, NULL, 'asd', '2019-09-26', 'CTRL-0003', NULL, 'Shiela Mae Velga', 'Issued', 'Alyssa Valdez requested Barangay Certificate SPES for asd', '2019-09-26 10:31:45', '2019-09-26 10:31:45', NULL),
(258, 17, 2751, NULL, 'hello', '2019-09-26', 'CTRL-0003', NULL, 'Shiela Mae Velga', 'Issued', 'Alyssa Valdez requested Barangay Certificate Solo Parent for hello', '2019-09-26 10:34:18', '2019-09-26 10:34:18', NULL),
(259, 18, 2751, NULL, 'asmple', '2019-09-26', 'CTRL-0003', NULL, 'Shiela Mae Velga', 'Issued', 'Alyssa Valdez requested Barangay Certificate Indigency for asmple', '2019-09-26 10:35:04', '2019-09-26 10:35:04', NULL),
(260, 18, 2751, NULL, 'asgas', '2019-09-26', 'CTRL-0003', NULL, 'Shiela Mae Velga', 'Issued', 'Alyssa Valdez requested Barangay Certificate Indigency for asgas', '2019-09-26 10:35:22', '2019-09-26 10:35:22', NULL),
(261, 13, 2751, NULL, 'asgasasd', '2019-09-26', 'CTRL-0003', NULL, 'Shiela Mae Velga', 'Issued', 'Alyssa Valdez requested Barangay Certificate Residency for asgasasd', '2019-09-26 10:35:36', '2019-09-26 10:35:36', NULL),
(262, 7, NULL, 1, '$PURPOSE', '2019-09-26', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 23:19:35', '2019-09-26 23:19:35', NULL),
(263, 7, NULL, 1, '$PURPOSE', '2019-09-26', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 23:19:39', '2019-09-26 23:19:39', NULL),
(264, 7, NULL, 1, '$PURPOSE', '2019-09-26', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 23:19:41', '2019-09-26 23:19:41', NULL),
(265, 7, NULL, 1, '$PURPOSE', '2019-09-26', '0431-BP', NULL, 'Shiela Mae Velga', 'Issued', 'Barangay Business Permit', '2019-09-26 23:20:48', '2019-09-26 23:20:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_mothers_profile`
--

CREATE TABLE `t_mothers_profile` (
  `MOTHERS_ID` int(11) NOT NULL,
  `IS_PREGNANT` int(11) DEFAULT NULL,
  `MOTHER_MOTHER_TONGUE` varchar(25) DEFAULT NULL,
  `MOTHER_OTHER_DIALECTS` varchar(50) DEFAULT NULL,
  `MOTHER_EDUCATIONAL_ATTAINMENT` varchar(50) DEFAULT NULL,
  `RESIDENT_ID` int(11) DEFAULT NULL,
  `CREATED_AT` datetime DEFAULT NULL,
  `UPDATED_AT` datetime DEFAULT NULL,
  `ACTIVE_FLAG` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `t_mothers_profile`
--

INSERT INTO `t_mothers_profile` (`MOTHERS_ID`, `IS_PREGNANT`, `MOTHER_MOTHER_TONGUE`, `MOTHER_OTHER_DIALECTS`, `MOTHER_EDUCATIONAL_ATTAINMENT`, `RESIDENT_ID`, `CREATED_AT`, `UPDATED_AT`, `ACTIVE_FLAG`) VALUES
(1, 0, 'Bicolnon', NULL, 'High School Graduate', 2661, '2019-09-19 02:04:45', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_ordinance`
--

CREATE TABLE `t_ordinance` (
  `ORDINANCE_ID` int(11) NOT NULL,
  `BARANGAY_OFFICIAL_ID` int(11) DEFAULT NULL,
  `ORDINANCE_TITLE` varchar(50) DEFAULT NULL,
  `ORDINANCE_CATEGORY_ID` int(11) DEFAULT NULL,
  `ORDINANCE_DESCRIPTION` varchar(100) DEFAULT NULL,
  `ORDINANCE_REMARKS` varchar(50) DEFAULT NULL,
  `ORDINANCE_SANCTION` varchar(50) DEFAULT NULL,
  `ORDINANCE_AUTHOR` varchar(50) DEFAULT NULL,
  `FILE_NAME` varchar(50) NOT NULL DEFAULT 'NONE',
  `CREATED_AT` datetime DEFAULT CURRENT_TIMESTAMP,
  `UPDATED_AT` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `ACTIVE_FLAG` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `t_ordinance`
--

INSERT INTO `t_ordinance` (`ORDINANCE_ID`, `BARANGAY_OFFICIAL_ID`, `ORDINANCE_TITLE`, `ORDINANCE_CATEGORY_ID`, `ORDINANCE_DESCRIPTION`, `ORDINANCE_REMARKS`, `ORDINANCE_SANCTION`, `ORDINANCE_AUTHOR`, `FILE_NAME`, `CREATED_AT`, `UPDATED_AT`, `ACTIVE_FLAG`) VALUES
(1, 1, 'Taas Pasahe sa Pedicab', 1, 'Increase of fare', 'Sample', 'undefined', 'Edzel Zenarosa', 'NONE', '2019-08-09 00:28:30', '2019-09-28 01:04:16', 1),
(3, 1, 'Title', 1, 'desc', 'reamrs', '500 pesos', 'Shiela Mae Velga', 'NONE', '2019-09-25 00:00:00', NULL, 1),
(4, 3, 'Taas Presyo', 1, 'Ordinance Description', 'Ordinance Remarks', '500 pesos', 'Shiela Mae Velga', 'NONE', '2019-09-25 00:00:00', NULL, 1),
(5, 1, 'Taas pasahe sa jeep', 1, 'nothing', 'none', '500 pesos', 'Lea Mae Gonzales Cervantes', 'Screenshot (2).png', '2019-09-28 00:00:00', '2019-09-29 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_patawag`
--

CREATE TABLE `t_patawag` (
  `PATAWAG_ID` int(10) UNSIGNED NOT NULL,
  `BLOTTER_ID` int(10) UNSIGNED NOT NULL,
  `PATAWAG_SCHED_DATETIME` datetime NOT NULL,
  `PATAWAG_SCHED_PLACE` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `STATUS` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `ACTIVE_FLAG` int(11) NOT NULL DEFAULT '1',
  `CREATED_AT` timestamp NULL DEFAULT NULL,
  `UPDATED_AT` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `t_patawag`
--

INSERT INTO `t_patawag` (`PATAWAG_ID`, `BLOTTER_ID`, `PATAWAG_SCHED_DATETIME`, `PATAWAG_SCHED_PLACE`, `STATUS`, `ACTIVE_FLAG`, `CREATED_AT`, `UPDATED_AT`) VALUES
(2, 2, '2019-09-21 08:30:00', 'Barngay barrio', 'Pending', 1, NULL, NULL),
(3, 3, '2019-09-19 08:00:00', 'Barangay Greater Lagro', 'Pending', 1, '2019-09-18 18:11:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_resident_basic_info`
--

CREATE TABLE `t_resident_basic_info` (
  `RESIDENT_ID` int(11) NOT NULL,
  `HOUSEHOLD_ID` int(11) DEFAULT NULL,
  `LASTNAME` varchar(50) DEFAULT NULL,
  `MIDDLENAME` varchar(50) DEFAULT NULL,
  `FIRSTNAME` varchar(50) DEFAULT NULL,
  `ADDRESS_UNIT_NO` varchar(50) DEFAULT NULL,
  `ADDRESS_PHASE` varchar(50) DEFAULT NULL,
  `ADDRESS_BLOCK_NO` varchar(50) DEFAULT NULL,
  `ADDRESS_HOUSE_NO` varchar(50) DEFAULT NULL,
  `ADDRESS_STREET` varchar(50) DEFAULT NULL,
  `ADDRESS_SUBDIVISION` varchar(50) DEFAULT NULL,
  `ADDRESS_BUILDING` varchar(50) DEFAULT NULL,
  `QUALIFIER` varchar(25) DEFAULT NULL,
  `DATE_OF_BIRTH` date DEFAULT NULL,
  `PLACE_OF_BIRTH` varchar(50) DEFAULT NULL,
  `SEX` varchar(8) DEFAULT NULL,
  `CIVIL_STATUS` varchar(25) DEFAULT NULL,
  `IS_OFW` int(11) DEFAULT NULL,
  `OCCUPATION` varchar(50) DEFAULT NULL,
  `WORK_STATUS` varchar(25) DEFAULT NULL,
  `DATE_STARTED_WORKING` date DEFAULT NULL,
  `CITIZENSHIP` varchar(25) DEFAULT NULL,
  `RELATION_TO_HOUSEHOLD_HEAD` varchar(25) DEFAULT NULL,
  `DATE_OF_ARRIVAL` date DEFAULT NULL,
  `ARRIVAL_STATUS` int(11) DEFAULT NULL,
  `IS_INDIGENOUS` int(11) DEFAULT NULL,
  `CONTACT_NUMBER` varchar(25) DEFAULT NULL,
  `TIN_NO` varchar(50) DEFAULT NULL,
  `SSS_NO` varchar(255) DEFAULT NULL,
  `GSIS_NO` int(11) DEFAULT NULL,
  `EMAIL_ADDRESS` varchar(255) DEFAULT NULL,
  `EDUCATIONAL_ATTAINMENT` varchar(255) DEFAULT NULL,
  `CREATED_AT` datetime DEFAULT CURRENT_TIMESTAMP,
  `UPDATED_AT` datetime DEFAULT CURRENT_TIMESTAMP,
  `ACTIVE_FLAG` int(11) UNSIGNED DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `t_resident_basic_info`
--

INSERT INTO `t_resident_basic_info` (`RESIDENT_ID`, `HOUSEHOLD_ID`, `LASTNAME`, `MIDDLENAME`, `FIRSTNAME`, `ADDRESS_UNIT_NO`, `ADDRESS_PHASE`, `ADDRESS_BLOCK_NO`, `ADDRESS_HOUSE_NO`, `ADDRESS_STREET`, `ADDRESS_SUBDIVISION`, `ADDRESS_BUILDING`, `QUALIFIER`, `DATE_OF_BIRTH`, `PLACE_OF_BIRTH`, `SEX`, `CIVIL_STATUS`, `IS_OFW`, `OCCUPATION`, `WORK_STATUS`, `DATE_STARTED_WORKING`, `CITIZENSHIP`, `RELATION_TO_HOUSEHOLD_HEAD`, `DATE_OF_ARRIVAL`, `ARRIVAL_STATUS`, `IS_INDIGENOUS`, `CONTACT_NUMBER`, `TIN_NO`, `SSS_NO`, `GSIS_NO`, `EMAIL_ADDRESS`, `EDUCATIONAL_ATTAINMENT`, `CREATED_AT`, `UPDATED_AT`, `ACTIVE_FLAG`) VALUES
(2440, 1, 'Fernadez', 'B', 'Jhern', NULL, NULL, NULL, '146', NULL, NULL, NULL, 'a', '2013-03-13', 'tondo', 'Male', 'Single', 0, 'None', 'NotApplicable', '2019-08-04', 'filipino', 'none', '2019-08-04', 1, 1, '1232', NULL, NULL, NULL, NULL, 'Elementary School Graduate', '2019-08-05 05:29:17', '2019-09-16 15:09:35', 0),
(2441, 2, 'Chaknu', 'F', 'Bolante', NULL, NULL, NULL, '146', NULL, NULL, NULL, 'JR', '2019-07-01', 'TONDO MANILA', 'Male', 'Single', 0, 'NONE', 'NotApplicable', '2019-08-03', 'FILIPINO', 'FATHERS', '2019-08-04', 1, 1, '9123212', NULL, NULL, NULL, NULL, 'Elementary School Graduate', '2019-08-05 06:39:59', '2019-09-16 14:34:55', 1),
(2442, 3, 'Don', 'J', 'John', '12', 'Sitio Veterans', NULL, '146', 'Area 2 Oriole', NULL, NULL, 'jr', '2019-08-04', 'sa', 'Male', 'Single', 0, 'none', 'NotApplicable', '2019-08-04', 'fiilli', 'cousin', '2019-08-04', 1, 1, '123', NULL, NULL, NULL, NULL, 'Elementary School Graduate', '2019-08-05 07:57:07', '2019-08-01 10:03:40', 1),
(2443, 4, 'Edcel', 'Z', 'Zenarosa', NULL, 'sample', NULL, '146', 'sample', NULL, NULL, 'sample', '2019-08-04', 'sample', 'Male', 'Single', 0, 'sample', 'NotApplicable', '2019-08-04', 'sample', 'sample', '2019-08-04', 1, 1, '12323', NULL, NULL, NULL, NULL, 'Elementary School Graduate', '2019-08-05 08:35:10', '2019-08-01 10:04:12', 1),
(2444, 5, 'Duterte', 'B', 'Rodel', NULL, 'Stito Veterans', NULL, '123', 'Oriole Street', NULL, NULL, 'sample', '1996-02-03', 'Tondo Manila', 'Male', 'Single', 0, 'sample', 'NotApplicable', '2019-08-05', 'sample', 'sample', '2019-08-04', 1, 1, '91232', NULL, NULL, NULL, NULL, 'Doctoral/Unit Degree', '2019-08-05 08:37:17', '2019-08-05 12:18:00', 1),
(2445, 6, 'Avena', 'E', 'Ian', NULL, 'Veterans', NULL, '156', 'Ilang ilang', NULL, NULL, NULL, '2019-08-21', 'tonoo', 'Male', 'Single', 0, 'NOne', 'NotApplicable', '2019-08-04', 'dasd', 'Parents', '2019-08-15', 1, 1, '2344324', NULL, NULL, NULL, NULL, 'Elementary School Graduate', '2019-08-09 12:52:39', '2019-08-01 10:03:59', 1),
(2713, 274, 'Duterte', 'Bautista', 'Rodel', '146', 'Phase 1', NULL, '146', 'Oriole Street', NULL, NULL, 'Jr', '2019-01-01', 'Tondo Manila', 'Male', 'Single', 1, 'None', 'Not Applicable', '1970-01-01', 'Filipino', 'Parents', '2019-01-01', 1, 1, '9187781278', NULL, NULL, NULL, NULL, NULL, '2019-09-24 15:19:49', '2019-09-24 15:19:49', 1),
(2714, 275, 'Cervantes', 'Gonzales', 'Lea Mae', '68', 'Phase 2', NULL, '68', 'Aspen Street', NULL, NULL, NULL, '1999-01-11', 'Polangui Albay', 'Female', 'Single', 0, 'Software Engineer', 'Employed', '2019-07-09', 'Filipino', 'Parents', '2003-02-07', 1, 1, '9091232879', NULL, NULL, NULL, NULL, 'College', '2019-09-24 15:19:49', '2019-09-24 15:19:49', 1),
(2715, 276, 'Zenarosa', NULL, 'John Edcel', '12', 'Phase 7', NULL, '12', 'Gaya Gaya Street', NULL, NULL, 'Jr', '1999-04-27', 'Quezon City', 'Male', 'Single', 0, 'Programmer', 'Employed', '2018-04-27', 'Filipino', 'Parents', '2000-03-09', 1, 1, '9127348732', NULL, NULL, NULL, NULL, 'College', '2019-09-24 15:19:49', '2019-09-24 15:19:49', 1),
(2716, 277, 'Cabatana', 'Ozcan', 'Rediyn', '30', 'Phase 8', NULL, '30', 'Astor Street', NULL, NULL, NULL, '1980-07-07', 'Quezon City', 'Female', 'Single', 0, 'Graphic Artist', 'Employed', '2001-02-03', 'Filipino', 'Parents', '1998-09-04', 1, 1, '9438924982', NULL, NULL, NULL, NULL, 'College', '2019-09-24 15:19:49', '2019-09-24 15:19:49', 1),
(2717, 278, 'Espiridion', 'Delos Santos', 'Relyn', '20', 'Phase 8', NULL, '20', 'Astor Street', NULL, NULL, NULL, '1980-03-03', 'Quezon City', 'Female', 'Single', 0, 'Programmer', 'Employed', '2004-09-03', 'Filipino', 'Parents', '1999-02-08', 1, 1, '9324722219', NULL, NULL, NULL, NULL, 'College', '2019-09-24 15:19:49', '2019-09-24 15:19:49', 1),
(2718, 279, 'Fernandez', 'Uy', 'John Henry', '17', 'Phase 4', NULL, '17', 'Yen Street', NULL, NULL, NULL, '2018-02-09', 'Quezon City', 'Male', 'Single', 0, NULL, 'Unemployed', '1970-01-01', 'Filipino', 'Parents', '2001-09-09', 1, 1, '9187791200', NULL, NULL, NULL, NULL, 'College', '2019-09-24 15:19:49', '2019-09-24 15:19:49', 1),
(2719, 280, 'Telesforo', 'Tiu', 'Renna Jane', '39', 'Phase 1', NULL, '39', 'Baht Street', NULL, NULL, NULL, '1980-02-02', 'Quezon City', 'Female', 'Married', 0, 'Data Engineer', 'Employed', '2000-03-03', 'Filipino', 'Parents', '2004-03-02', 2, 0, '9294798123', NULL, NULL, NULL, NULL, 'College', '2019-09-24 15:19:49', '2019-09-24 15:19:49', 1),
(2720, 281, 'Ramos', 'Sanchez', 'Jean Ann', '19', 'Phase 1', NULL, '19', 'Baht Street', NULL, NULL, NULL, '1990-08-08', 'Quezon City', 'Female', 'Single', 0, 'Database Administrator', 'Employed', '2010-04-09', 'Filipino', 'Parents', '1999-09-03', 1, 1, '9284319801', NULL, NULL, NULL, NULL, 'High School', '2019-09-24 15:19:49', '2019-09-24 15:19:49', 1),
(2721, 282, 'Dela Cruz', 'Santos', 'Joshua Marie', '12', 'Phase 1', NULL, '12', 'Baht Street', NULL, NULL, NULL, '1989-08-09', 'Quezon City', 'Female', 'Single', 1, 'Data Analyst', 'Employed', '2011-03-02', 'Filipino', 'Sibling', '2007-08-09', 1, 1, '9287349029', NULL, NULL, NULL, NULL, 'College', '2019-09-24 15:19:49', '2019-09-24 15:19:49', 1),
(2722, 283, 'Gaden', 'Arcega', 'John', '28', 'Phase 1', NULL, '28', 'Peso Street', NULL, NULL, NULL, '1980-07-03', 'Quezon City', 'Male', 'Single', 0, 'Software Engineer', 'Employed', '2002-04-07', 'Filipino', 'Parents', '2008-02-01', 1, 1, '9189903312', NULL, NULL, NULL, NULL, 'College', '2019-09-24 15:19:49', '2019-09-24 15:19:49', 1),
(2723, 284, 'Cervantes', 'Gonzales', 'Sarah Jane', '27', 'Phase 2', NULL, '27', 'Peso Street', NULL, NULL, NULL, '1990-09-09', 'Quezon City', 'Female', 'Widowed', 0, 'Doctor', 'Employed', '2001-03-02', 'Filipino', 'Parents', '2001-04-04', 1, 1, '9170932417', NULL, NULL, NULL, NULL, 'College', '2019-09-24 15:19:49', '2019-09-24 15:19:49', 1),
(2724, 285, 'Cervantes', 'Gonzales', 'Maria', '32', 'Phase 2', NULL, '32', 'Peso Street', NULL, NULL, NULL, '2019-04-02', 'Quezon City', 'Female', 'Single', 0, NULL, 'Not Applicable', '1970-01-01', 'Filipino', 'Parents', '1997-02-01', 1, 1, '9213083438', NULL, NULL, NULL, NULL, 'College', '2019-09-24 15:19:49', '2019-09-24 15:19:49', 1),
(2725, 286, 'Yacap', 'Busante', 'John Norry', '34', 'Phase 3', NULL, '34', 'Pound Street', NULL, NULL, NULL, '1987-03-09', 'Quezon City', 'Male', 'Single', 0, 'Chef', 'Employed', '2007-09-09', 'Filipino', 'Sibling', '1999-03-02', 1, 1, '9241098327', NULL, NULL, NULL, NULL, 'College', '2019-09-24 15:19:49', '2019-09-24 15:19:49', 1),
(2726, 287, 'Abuda', 'Cervantes', 'Jairah', '43', 'Phase 7', NULL, '43', 'Namapa Street', NULL, NULL, NULL, '1980-04-08', 'Quezon City', 'Female', 'Single', 0, 'Teacher', 'Employed', '2003-03-04', 'Filipino', 'Parents', '2010-04-04', 2, 0, '9380821839', NULL, NULL, NULL, NULL, 'College', '2019-09-24 15:19:49', '2019-09-24 15:19:49', 1),
(2727, 288, 'Talagtag', 'Gonzales', 'Randy', '70', 'Phase 8', NULL, '70', 'Astor Street', NULL, NULL, NULL, '1980-09-02', 'Quezon City', 'Male', 'Single', 0, 'Programmer', 'Employed', '2001-02-08', 'Filipino', 'Parents', '2008-04-02', 1, 1, '9132732922', NULL, NULL, NULL, NULL, 'College', '2019-09-24 15:19:49', '2019-09-24 15:19:49', 1),
(2728, 289, 'Abuda', 'Cervantes', 'Josalyn', '47', 'Phase 7', NULL, '47', 'Namapa Street', NULL, NULL, NULL, '1980-04-02', 'Tondo Manila', 'Female', 'Single', 1, 'Doctor', 'Employed', '2002-09-03', 'Filipino', 'Parents', '2018-03-02', 1, 1, '9213987273', NULL, NULL, NULL, NULL, 'High School', '2019-09-24 15:19:50', '2019-09-24 15:19:50', 1),
(2729, 290, 'Cervantes', 'Gonzales', 'Ela', '70', 'Phase 2', NULL, '70', 'Aspen Street', NULL, NULL, NULL, '1981-08-01', 'Quezon City', 'Female', 'Married', 0, 'Software Engineer', 'Employed', '2003-07-08', 'Filipino', 'Parents', '2014-04-09', 1, 1, '9322329272', NULL, NULL, NULL, NULL, 'College', '2019-09-24 15:19:50', '2019-09-24 15:19:50', 1),
(2730, 291, 'Ozcan', 'Cervantes', 'Ellie Lauraine', '73', 'Phase 2', NULL, '73', 'Aspen Street', NULL, NULL, NULL, '1982-03-09', 'Polangui Albay', 'Female', 'Single', 0, 'Document Analyst', 'Employed', '2001-09-07', 'Filipino', 'Parents', '2000-03-02', 1, 1, '9993243432', NULL, NULL, NULL, NULL, 'College', '2019-09-24 15:19:50', '2019-09-24 15:19:50', 1),
(2731, 292, 'Cervantes', 'Balang', 'Martin', '69', 'Phase 2', NULL, '69', 'Ames Street', NULL, NULL, 'Jr', '2019-09-09', 'Polangui Albay', 'Male', 'Single', 0, NULL, 'Not Applicable', '1970-01-01', 'Filipino', 'Cousin', '1999-09-02', 1, 1, '9242247232', NULL, NULL, NULL, NULL, 'College', '2019-09-24 15:19:50', '2019-09-24 15:19:50', 1),
(2732, 293, 'Cardinas', 'Gumabao', 'Hazelle Anne', '21', 'Phase 4', NULL, '21', 'Yen Street', NULL, NULL, NULL, '1981-04-02', 'Quezon City', 'Female', 'Single', 0, 'Teacher', 'Employed', '2004-04-09', 'Filipino', 'Parents', '2009-02-08', 1, 1, '9342143094', NULL, NULL, NULL, NULL, 'College', '2019-09-24 15:19:50', '2019-09-24 15:19:50', 1),
(2733, 294, 'Lupaz', 'Reys', 'Kaisha', '24', 'Phase 4', NULL, '24', 'Yen Street', NULL, NULL, NULL, '1987-08-09', 'Quezon City', 'Female', 'Single', 0, 'Document Analyst', 'Employed', '2008-08-07', 'Filipino', 'Parents', '2010-03-03', 1, 1, '9123223209', NULL, NULL, NULL, NULL, 'College', '2019-09-24 15:19:50', '2019-09-24 15:19:50', 1),
(2734, 295, 'Macapans', 'Lazo', 'Christine', '74', 'Phase 9', NULL, '74', 'Gomez Street', NULL, NULL, NULL, '1987-07-03', 'Tondo Manila', 'Female', 'Single', 0, NULL, 'Unemployed', '1970-01-01', 'Filipino', 'Parents', '2002-02-01', 1, 1, '9389029328', NULL, NULL, NULL, NULL, 'High School', '2019-09-24 15:19:50', '2019-09-24 15:19:50', 1),
(2735, 296, 'Flores', 'Tan', 'Hannah', '16', 'Phase 2', NULL, '16', 'Narra Street', NULL, NULL, NULL, '1982-07-09', 'Quezon City', 'Female', 'Married', 0, 'Data Scientist', 'Employed', '2004-02-07', 'Filipino', 'Parents', '2002-09-07', 1, 1, '9114432324', NULL, NULL, NULL, NULL, 'College', '2019-09-24 15:19:50', '2019-09-24 15:19:50', 1),
(2736, 297, 'Rubio', 'Gonzales', 'Dennis', '99', 'Phase 3', NULL, '99', 'Jaena Street', NULL, NULL, NULL, '1981-04-04', 'Tondo Manila', 'Male', 'Single', 1, 'Nurse', 'Employed', '2003-09-09', 'Filipino', 'Sibling', '2001-08-08', 1, 1, '9224348434', NULL, NULL, NULL, NULL, 'College', '2019-09-24 15:19:50', '2019-09-24 15:19:50', 1),
(2737, 298, 'Pinca', 'Cervantes', 'Reysha', '33', 'Phase 4', NULL, '33', 'Alden Street', NULL, NULL, NULL, '1981-03-02', 'Quezon City', 'Female', 'Single', 0, 'Chef', 'Employed', '2003-02-09', 'Filipino', 'Parents', '1999-04-02', 1, 1, '9994334273', NULL, NULL, NULL, NULL, 'College', '2019-09-24 15:19:50', '2019-09-24 15:19:50', 1),
(2738, 299, 'Gomez', 'Reyes', 'Luis', '27', 'Phase 1', NULL, '27', 'Ilang Ilang Street', NULL, NULL, NULL, '1987-07-09', 'Quezon City', 'Male', 'Single', 0, 'Teacher', 'Employed', '2009-07-07', 'Filipino', 'Parents', '2000-07-09', 1, 1, '9322318323', NULL, NULL, NULL, NULL, 'College', '2019-09-24 15:19:50', '2019-09-24 15:19:50', 1),
(2739, 300, 'Miraflor', 'Perez', 'Warren', '71', 'Phase 3', NULL, '71', 'Sampaguita Street', NULL, NULL, NULL, '1999-01-09', 'Quezon City', 'Male', 'Single', 0, NULL, 'Unemployed', '1970-01-01', 'Filipino', 'Parents', '2009-03-02', 1, 1, '9442342318', NULL, NULL, NULL, NULL, 'College', '2019-09-24 15:19:50', '2019-09-24 15:19:50', 1),
(2740, 301, 'Pinca', 'Cervantes', 'Renoah Dae', '3', 'Phase 4', NULL, '3', 'Alden Street', NULL, NULL, NULL, '1989-09-03', 'Quezon City', 'Female', 'Widowed', 0, 'Doctor', 'Employed', '2007-09-07', 'Filipino', 'Parents', '2007-07-02', 1, 1, '9213243982', NULL, NULL, NULL, NULL, 'College', '2019-09-24 15:19:50', '2019-09-24 15:19:50', 1),
(2741, 302, 'Mendoza', 'Lao', 'Paul Vincent', '32', 'Phase 2', NULL, '32', 'Rizal Street', NULL, NULL, NULL, '1989-03-09', 'Quezon City', 'Male', 'Single', 0, 'Programmer', 'Employed', '2010-08-07', 'Filipino', 'Parents', '2000-03-03', 1, 1, '9724342397', NULL, NULL, NULL, NULL, 'College', '2019-09-24 15:19:50', '2019-09-24 15:19:50', 1),
(2742, 303, 'Siguan', 'Victoria', 'Manuelle', '74', 'Phase 9', NULL, '74', 'Gomez Street', NULL, NULL, NULL, '1989-07-07', 'Quezon City', 'Female', 'Single', 0, 'Software Engineer', 'Employed', '2010-03-03', 'Filipino', 'Parents', '1998-09-09', 2, 0, '9231428742', NULL, NULL, NULL, NULL, 'College', '2019-09-24 15:19:50', '2019-09-24 15:19:50', 1),
(2743, 304, 'Sanoy', 'Quinto', 'Micah', '70', 'Phase 9', NULL, '70', 'Gomez Street', NULL, NULL, NULL, '1981-02-13', 'Quezon City', 'Female', 'Single', 1, 'Nurse', 'Employed', '2003-04-02', 'Filipino', 'Parents', '2008-02-07', 1, 1, '9324343797', NULL, NULL, NULL, NULL, 'College', '2019-09-24 15:19:50', '2019-09-24 15:19:50', 1),
(2744, 305, 'Lopez', 'Teodoro', 'Mateo', '39', 'Phase 3', NULL, '39', 'Lapu Lapu Street', NULL, NULL, NULL, '1987-03-28', 'Tondo Manila', 'Male', 'Single', 0, 'Document Analyst', 'Employed', '2009-07-08', 'Filipino', 'Parents', '2011-03-09', 1, 1, '9214334944', NULL, NULL, NULL, NULL, 'College', '2019-09-24 15:19:50', '2019-09-24 15:19:50', 1),
(2745, 306, 'Reyes', 'Cruz', 'Paulo', '10', 'Phase 2', NULL, '10', 'Narra Street', NULL, NULL, NULL, '1982-04-21', 'Quezon City', 'Male', 'Single', 0, 'Teacher', 'Employed', '2003-04-03', 'Filipino', 'Parents', '2001-09-08', 1, 1, '9327443473', NULL, NULL, NULL, NULL, 'College', '2019-09-24 15:19:50', '2019-09-24 15:19:50', 1),
(2746, 307, 'Cruz', 'Tan', 'Charlene', '7', 'Phase 4', NULL, '7', 'Alden Street', NULL, NULL, NULL, '1981-02-19', 'Quezon City', 'Female', 'Single', 0, 'Lawyer', 'Employed', '2002-02-09', 'Filipino', 'Sibling', '1998-09-02', 1, 1, '9243423244', NULL, NULL, NULL, NULL, 'College', '2019-09-24 15:19:50', '2019-09-24 15:19:50', 1),
(2747, 308, 'Alobog', 'Rubio', 'Vince', '72', 'Phase 9', NULL, '72', 'Gomez Street', NULL, NULL, NULL, '1980-01-19', 'Quezon City', 'Male', 'Single', 0, 'Teacher', 'Employed', '2001-03-09', 'Filipino', 'Parents', '2000-03-09', 1, 1, '9723202213', NULL, NULL, NULL, NULL, 'College', '2019-09-24 15:19:50', '2019-09-24 15:19:50', 1),
(2748, 309, 'Lapore', 'Lapuz', 'Rolando', '29', 'Phase 2', NULL, '29', 'Peso Street', NULL, NULL, NULL, '1989-08-07', 'Quezon City', 'Male', 'Single', 0, 'Teacher', 'Employed', '2007-01-04', 'Filipino', 'Parents', '2009-04-04', 1, 1, '9193442021', NULL, NULL, NULL, NULL, 'College', '2019-09-24 15:19:50', '2019-09-24 15:19:50', 1),
(2749, 310, 'Daquiz', 'Lazaro', 'Rachel Anne', '11', 'Phase 4', NULL, '11', 'Alden Street', NULL, NULL, NULL, '1981-04-27', 'Quezon City', 'Female', 'Single', 0, 'Software Engineer', 'Employed', '2003-04-09', 'Filipino', 'Parents', '2004-02-10', 1, 1, '9923242397', NULL, NULL, NULL, NULL, 'High School', '2019-09-24 15:19:50', '2019-09-24 15:19:50', 1),
(2750, 311, 'Casimiro', 'Tiu', 'Jerald', '89', 'Phase 1', NULL, '89', 'Baht Street', NULL, NULL, NULL, '1987-07-21', 'Quezon City', 'Male', 'Single', 0, 'Programmer', 'Employed', '2009-03-03', 'Filipino', 'Parents', '2011-03-09', 1, 1, '9220129923', NULL, NULL, NULL, NULL, 'College', '2019-09-24 15:19:50', '2019-09-24 15:19:50', 1),
(2751, 312, 'Valdez', 'Dela Cruz', 'Alyssa', '22', 'Phase 4', NULL, '22', 'Avon Street', NULL, NULL, NULL, '1987-04-19', 'Quezon City', 'Female', 'Single', 0, 'Data Engineer', 'Employed', '2009-09-04', 'Filipino', 'Parents', '2000-04-10', 1, 1, '9992434389', NULL, NULL, NULL, NULL, 'College', '2019-09-24 15:19:50', '2019-09-24 15:19:50', 1),
(2752, 313, 'Gumabao', 'Chua', 'Michelle', '27', 'Phase 4', NULL, '27', 'Avon Street', NULL, NULL, NULL, '1989-03-17', 'Quezon City', 'Female', 'Single', 0, 'Nurse', 'Employed', '2010-02-01', 'Filipino', 'Parents', '2012-02-01', 1, 1, '9231982724', NULL, NULL, NULL, NULL, 'College', '2019-09-24 15:19:50', '2019-09-24 15:19:50', 1),
(2753, 314, 'Laure', 'Tomas', 'Eya', '23', 'Phase 4', NULL, '23', 'Avon Street', NULL, NULL, NULL, '1980-01-12', 'Polangui Albay', 'Female', 'Widowed', 0, NULL, 'Unemployed', '1970-01-01', 'Filipino', 'Parents', '2007-09-02', 1, 1, '9217478989', NULL, NULL, NULL, NULL, 'College', '2019-09-24 15:19:50', '2019-09-24 15:19:50', 1),
(2754, 315, 'Galang', 'Tiu', 'Victonara', '13', 'Phase 4', NULL, '13', 'Alden Street', NULL, NULL, NULL, '1987-02-24', 'Quezon City', 'Female', 'Single', 0, 'Data Analyst', 'Employed', '2008-02-08', 'Filipino', 'Parents', '2001-08-07', 2, 0, '9987243291', NULL, NULL, NULL, NULL, 'College', '2019-09-24 15:19:50', '2019-09-24 15:19:50', 1),
(2755, 316, 'Panaligan', 'Rosales', 'Jerico', '30', 'Phase 4', NULL, '30', 'Alden Street', NULL, NULL, NULL, '1981-03-19', 'Quezon City', 'Male', 'Single', 0, 'Business Administrator', 'Employed', '2003-09-02', 'Filipino', 'Parents', '2011-09-09', 1, 1, '9983234112', NULL, NULL, NULL, NULL, 'College', '2019-09-24 15:19:50', '2019-09-24 15:19:50', 1),
(2756, 317, 'Dy', 'Tan', 'Kim', '18', 'Phase 2', NULL, '18', 'Peso Street', NULL, NULL, NULL, '1987-03-17', 'Quezon City', 'Female', 'Single', 0, 'Data Scientist', 'Employed', '2008-08-07', 'Filipino', 'Cousin', '2004-02-01', 1, 1, '9134373234', NULL, NULL, NULL, NULL, 'College', '2019-09-24 15:19:50', '2019-09-24 15:19:50', 1),
(2757, 318, 'Baron', 'Cortez', 'Majoy', '9', 'Phase 2', NULL, '9', 'Peso Street', NULL, NULL, NULL, '1989-03-23', 'Quezon City', 'Female', 'Single', 0, 'Business Administrator', 'Employed', '2007-07-02', 'Filipino', 'Parents', '1999-04-01', 1, 1, '9281239193', NULL, NULL, NULL, NULL, 'College', '2019-09-24 15:19:50', '2019-09-24 15:19:50', 1),
(2758, 319, 'Halcon', 'Oscar', 'Nhadley', '40', 'Phase 7', NULL, '40', 'Namapa Street', NULL, NULL, NULL, '1989-04-12', 'Quezon City', 'Male', 'Single', 0, 'Software Engineer', 'Employed', '2007-03-07', 'Filipino', 'Parents', '2013-03-08', 1, 1, '9279172329', NULL, NULL, NULL, NULL, 'College', '2019-09-24 15:19:50', '2019-09-24 15:19:50', 1),
(2759, 320, 'Mau', 'Santos', 'Kalei', '30', 'Phase 1', NULL, '30', 'Ilang Ilang Street', NULL, NULL, NULL, '1987-03-29', 'Quezon City', 'Female', 'Single', 0, 'Programmer', 'Employed', '2008-09-08', 'Filipino', 'Parents', '2010-02-09', 1, 1, '9323823129', NULL, NULL, NULL, NULL, 'High School', '2019-09-24 15:19:50', '2019-09-24 15:19:50', 1),
(2760, 321, 'Macandili', 'Tiamzon', 'Dawn', '27', 'Phase 1', NULL, '27', 'Ilang Ilang Street', NULL, NULL, NULL, '1981-02-12', 'Tondo Manila', 'Female', 'Single', 0, 'Lawyer', 'Employed', '2003-02-09', 'Filipino', 'Parents', '2003-03-09', 1, 1, '9390219823', NULL, NULL, NULL, NULL, 'College', '2019-09-24 15:19:50', '2019-09-24 15:19:50', 1),
(2761, 322, 'Tiamzon', 'Ho', 'Christine', '27', 'Phase 1', NULL, '27', 'Ilang Ilang Street', NULL, NULL, NULL, '1981-07-19', 'Quezon City', 'Female', 'Married', 0, 'Teacher', 'Employed', '2003-09-09', 'Filipino', 'Parents', '2011-09-02', 1, 1, '9123084290', NULL, NULL, NULL, NULL, 'College', '2019-09-24 15:19:51', '2019-09-24 15:19:51', 1),
(2762, 323, 'Lazo', 'Dawe', 'Arron Paul', '28', 'Phase 4', NULL, '28', 'Avon Street', NULL, NULL, NULL, '1999-03-11', 'Polangui Albay', 'Male', 'Single', 0, NULL, 'Unemployed', '1970-01-01', 'Filipino', 'Parents', '2009-02-01', 1, 1, '9322123329', NULL, NULL, NULL, NULL, 'College', '2019-09-24 15:19:51', '2019-09-24 15:19:51', 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_transient_record`
--

CREATE TABLE `t_transient_record` (
  `TRANSIENT_RECORD_ID` int(11) NOT NULL,
  `RESIDENT_ID` int(11) DEFAULT NULL,
  `CITIZENSHIP_ACQUISITION` varchar(50) DEFAULT NULL,
  `NATURALIZED_DATE` date DEFAULT NULL,
  `CERTIFICATE_NO` varchar(50) DEFAULT NULL,
  `PERIOD_OF_STAY_START_DATE` date DEFAULT NULL,
  `PERIOD_OF_STAY_END_DATE` date DEFAULT NULL,
  `REASON_FOR_COMING` varchar(255) DEFAULT NULL,
  `CREATED_AT` date DEFAULT NULL,
  `UPDATED_AT` datetime DEFAULT NULL,
  `ACTIVE_FLAG` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `t_transient_record`
--

INSERT INTO `t_transient_record` (`TRANSIENT_RECORD_ID`, `RESIDENT_ID`, `CITIZENSHIP_ACQUISITION`, `NATURALIZED_DATE`, `CERTIFICATE_NO`, `PERIOD_OF_STAY_START_DATE`, `PERIOD_OF_STAY_END_DATE`, `REASON_FOR_COMING`, `CREATED_AT`, `UPDATED_AT`, `ACTIVE_FLAG`) VALUES
(1, NULL, NULL, '2019-08-05', NULL, '2019-08-05', '2019-10-31', NULL, NULL, NULL, NULL),
(2, 2444, NULL, '2019-08-05', NULL, '2019-08-04', '2019-08-22', 'for my beloved girlfriend', '2019-08-05', '2019-08-05 12:18:00', NULL),
(3, 2445, NULL, '2019-08-01', NULL, '2019-08-01', '2019-08-09', 'for mother', '2019-08-09', '2019-08-01 10:03:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_users`
--

CREATE TABLE `t_users` (
  `USER_ID` int(11) NOT NULL,
  `BARANGAY_ID` int(11) DEFAULT NULL,
  `BARANGAY_OFFICIAL_ID` int(11) DEFAULT NULL,
  `POSITION_ID` int(11) DEFAULT NULL,
  `FIRSTNAME` varchar(25) DEFAULT NULL,
  `MIDDLENAME` varchar(25) DEFAULT NULL,
  `LASTNAME` varchar(25) DEFAULT NULL,
  `USERNAME` varchar(100) DEFAULT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `EMAIL_VERIFIED_AT` date DEFAULT NULL,
  `PASSWORD` varchar(100) DEFAULT NULL,
  `SECRET_QUESTION` varchar(100) DEFAULT NULL,
  `SECRET_ANSWER` varchar(100) DEFAULT NULL,
  `PERMIS_RESIDENT_BASIC_INFO` int(11) DEFAULT NULL,
  `PERMIS_FAMILY_PROFILE` int(11) DEFAULT NULL,
  `PERMIS_COMMUNITY_PROFILE` int(11) DEFAULT NULL,
  `PERMIS_BARANGAY_OFFICIAL` int(11) DEFAULT NULL,
  `PERMIS_BUSINESSES` int(11) DEFAULT NULL,
  `PERMIS_ISSUANCE_OF_FORMS` int(11) DEFAULT NULL,
  `PERMIS_ORDINANCES` int(11) DEFAULT NULL,
  `PERMIS_BLOTTER` int(11) DEFAULT NULL,
  `PERMIS_PATAWAG` int(11) DEFAULT NULL,
  `PERMIS_SYSTEM_REPORT` int(11) DEFAULT NULL,
  `PERMIS_HEALTH_SERVICES` int(11) DEFAULT NULL,
  `PERMIS_DATA_MIGRATION` int(11) DEFAULT NULL,
  `PERMIS_USER_ACCOUNTS` int(11) DEFAULT NULL,
  `PERMIS_BARANGAY_CONFIG` int(11) DEFAULT NULL,
  `REMEMBER_TOKEN` varchar(50) DEFAULT NULL,
  `CREATED_AT` datetime DEFAULT NULL,
  `UPDATED_AT` datetime DEFAULT NULL,
  `ACTIVE_FLAG` int(11) DEFAULT NULL,
  `PERMIS_BUSINESS_APPROVAL` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `t_users`
--

INSERT INTO `t_users` (`USER_ID`, `BARANGAY_ID`, `BARANGAY_OFFICIAL_ID`, `POSITION_ID`, `FIRSTNAME`, `MIDDLENAME`, `LASTNAME`, `USERNAME`, `EMAIL`, `EMAIL_VERIFIED_AT`, `PASSWORD`, `SECRET_QUESTION`, `SECRET_ANSWER`, `PERMIS_RESIDENT_BASIC_INFO`, `PERMIS_FAMILY_PROFILE`, `PERMIS_COMMUNITY_PROFILE`, `PERMIS_BARANGAY_OFFICIAL`, `PERMIS_BUSINESSES`, `PERMIS_ISSUANCE_OF_FORMS`, `PERMIS_ORDINANCES`, `PERMIS_BLOTTER`, `PERMIS_PATAWAG`, `PERMIS_SYSTEM_REPORT`, `PERMIS_HEALTH_SERVICES`, `PERMIS_DATA_MIGRATION`, `PERMIS_USER_ACCOUNTS`, `PERMIS_BARANGAY_CONFIG`, `REMEMBER_TOKEN`, `CREATED_AT`, `UPDATED_AT`, `ACTIVE_FLAG`, `PERMIS_BUSINESS_APPROVAL`) VALUES
(31, 1, NULL, 6, 'Duterte', 'B', 'Rodel', 'admin', 'rodlduterteb@gmail.com', NULL, '$2y$10$QMvLhsa2Ch6ZE9OFvD13uOcYNLr3D4oiZVtkEcNxlcFyUpqeRoEza', 'null', 'nulllang', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, '', '2019-08-02 17:18:40', NULL, 1, NULL),
(32, 1, NULL, 5, 'Shiela', 'A', 'Velga', 'dpo', 'rodlduterteb@gmail.com', NULL, '$2y$10$qovkQQ34o/nKaE6psSVhh..f.932muu33om9tEEL7h.9Nis.kxd1u', 'cute ka', 'oo cute ka', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, '', '2019-08-02 18:45:24', NULL, 1, NULL),
(33, NULL, 1, 3, '', '', '', 's-5', 'rodlduterteb@gmail.com', NULL, '$2y$10$yD/q7OauzYpj4un.OqEGmew7n6vabLKp08729eG4I7PoVo8MvfreS', 'cute ka', 'uu cute ka', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, NULL, '2019-08-05 22:21:36', NULL, 1, 0),
(34, NULL, 3, 2, NULL, NULL, NULL, 'ian@gmail.com', 'ian@gmail.com', NULL, '$2y$10$0dIOYo4gGrdxnH4qI6XqTeTaW6oiEkelIHrCjiUJTZwQ3WslKD.Qe', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-18 13:09:08', NULL, 1, 1),
(36, NULL, 7, 17, NULL, NULL, NULL, 'Kagawad-87', 'rodel@gmail.com', NULL, '$2y$10$uSn6lUsBFFJSuK216RSc1.osdscjNZpCFV2EzlRCnrBrob.rgbZ12', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-19 11:06:29', NULL, 1, 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_adminaccount`
-- (See below for the actual view)
--
CREATE TABLE `v_adminaccount` (
`USER_ID` int(11)
,`BARANGAY_ID` int(11)
,`FULL_NAME` varchar(76)
,`POSITION_NAME` varchar(50)
,`USERNAME` varchar(100)
,`PASSWORD` varchar(100)
,`EMAIL` varchar(50)
,`BARANGAY_NAME` varchar(255)
,`BARANGAY_SEAL` varchar(150)
,`ACTIVE_FLAG` int(11)
,`MUNICIPAL_SEAL` varchar(50)
,`MUNICIPAL_NAME` varchar(50)
,`PROVINCE_NAME` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_dpoaccount`
-- (See below for the actual view)
--
CREATE TABLE `v_dpoaccount` (
`USER_ID` int(11)
,`BARANGAY_ID` int(11)
,`DPO_Name` varchar(76)
,`POSITION_NAME` varchar(50)
,`USERNAME` varchar(100)
,`PASSWORD` varchar(100)
,`EMAIL` varchar(50)
,`BARANGAY_NAME` varchar(255)
,`BARANGAY_SEAL` varchar(150)
,`ACTIVE_FLAG` int(11)
,`PERMIS_BARANGAY_CONFIG` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_realbarangayofficialsaccount`
-- (See below for the actual view)
--
CREATE TABLE `v_realbarangayofficialsaccount` (
`BARANGAY_OFFICIAL_ID` int(11)
,`BARANGAY_ID` int(11)
,`USER_ID` int(11)
,`FULLNAME` varchar(152)
,`USERNAME` varchar(100)
,`PASSWORD` varchar(100)
,`BARANGAY_NAME` varchar(255)
,`POSITION_NAME` varchar(50)
,`EMAIL` varchar(50)
,`START_TERM` date
,`END_TERM` date
,`PERMIS_RESIDENT_BASIC_INFO` int(11)
,`PERMIS_FAMILY_PROFILE` int(11)
,`PERMIS_COMMUNITY_PROFILE` int(11)
,`PERMIS_BLOTTER` int(11)
,`PERMIS_PATAWAG` int(11)
,`PERMIS_BARANGAY_OFFICIAL` int(11)
,`PERMIS_BUSINESSES` int(11)
,`PERMIS_ISSUANCE_OF_FORMS` int(11)
,`PERMIS_ORDINANCES` int(11)
,`PERMIS_SYSTEM_REPORT` int(11)
,`PERMIS_HEALTH_SERVICES` int(11)
,`PERMIS_DATA_MIGRATION` int(11)
,`PERMIS_USER_ACCOUNTS` int(11)
,`PERMIS_BARANGAY_CONFIG` int(11)
,`PERMIS_BUSINESS_APPROVAL` int(11)
,`ACTIVE_FLAG` int(11)
,`BARANGAY_SEAL` varchar(150)
,`MUNICIPAL_SEAL` varchar(50)
,`MUNICIPAL_NAME` varchar(50)
,`PROVINCE_NAME` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_useraccount`
-- (See below for the actual view)
--
CREATE TABLE `v_useraccount` (
`POSITION_NAME` varchar(50)
,`BARANGAY_NAME` varchar(255)
,`FIRSTNAME` varchar(25)
,`MIDDLENAME` varchar(25)
,`LASTNAME` varchar(25)
,`USERNAME` varchar(100)
,`PASSWORD` varchar(100)
,`EMAIL` varchar(50)
,`ACTIVE_FLAG` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_useraccounts`
-- (See below for the actual view)
--
CREATE TABLE `v_useraccounts` (
`BARANGAY_OFFICIAL_ID` int(11)
,`POSITION_NAME` varchar(50)
,`BARANGAY_NAME` varchar(255)
,`LASTNAME` varchar(25)
,`FIRSTNAME` varchar(25)
,`MIDDLENAME` varchar(25)
,`USERNAME` varchar(100)
,`PASSWORD` varchar(100)
,`ACTIVE_FLAG` int(11)
);

-- --------------------------------------------------------

--
-- Structure for view `v_adminaccount`
--
DROP TABLE IF EXISTS `v_adminaccount`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_adminaccount`  AS  select `u`.`USER_ID` AS `USER_ID`,`bs`.`BARANGAY_ID` AS `BARANGAY_ID`,concat(`u`.`FIRSTNAME`,' ',`u`.`MIDDLENAME`,`u`.`LASTNAME`) AS `FULL_NAME`,`p`.`POSITION_NAME` AS `POSITION_NAME`,`u`.`USERNAME` AS `USERNAME`,`u`.`PASSWORD` AS `PASSWORD`,`u`.`EMAIL` AS `EMAIL`,`bs`.`BARANGAY_NAME` AS `BARANGAY_NAME`,`bs`.`BARANGAY_SEAL` AS `BARANGAY_SEAL`,`bs`.`ACTIVE_FLAG` AS `ACTIVE_FLAG`,`mi`.`MUNICIPAL_SEAL` AS `MUNICIPAL_SEAL`,`mi`.`MUNICIPAL_NAME` AS `MUNICIPAL_NAME`,`mi`.`PROVINCE_NAME` AS `PROVINCE_NAME` from (((`t_users` `u` join `r_barangay_information` `bs` on((`u`.`BARANGAY_ID` = `bs`.`BARANGAY_ID`))) join `r_position` `p` on((`p`.`POSITION_ID` = `u`.`POSITION_ID`))) join `r_municipal_information` `mi` on((`mi`.`MUNICIPAL_ID` = `bs`.`MUNICIPAL_ID`))) ;

-- --------------------------------------------------------

--
-- Structure for view `v_dpoaccount`
--
DROP TABLE IF EXISTS `v_dpoaccount`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_dpoaccount`  AS  select `u`.`USER_ID` AS `USER_ID`,`bs`.`BARANGAY_ID` AS `BARANGAY_ID`,concat(`u`.`FIRSTNAME`,' ',`u`.`MIDDLENAME`,`u`.`LASTNAME`) AS `DPO_Name`,`p`.`POSITION_NAME` AS `POSITION_NAME`,`u`.`USERNAME` AS `USERNAME`,`u`.`PASSWORD` AS `PASSWORD`,`u`.`EMAIL` AS `EMAIL`,`bs`.`BARANGAY_NAME` AS `BARANGAY_NAME`,`bs`.`BARANGAY_SEAL` AS `BARANGAY_SEAL`,`bs`.`ACTIVE_FLAG` AS `ACTIVE_FLAG`,`u`.`PERMIS_BARANGAY_CONFIG` AS `PERMIS_BARANGAY_CONFIG` from ((`t_users` `u` join `r_barangay_information` `bs` on((`u`.`USER_ID` = `bs`.`USER_ID`))) join `r_position` `p` on((`p`.`POSITION_ID` = `u`.`POSITION_ID`))) ;

-- --------------------------------------------------------

--
-- Structure for view `v_realbarangayofficialsaccount`
--
DROP TABLE IF EXISTS `v_realbarangayofficialsaccount`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_realbarangayofficialsaccount`  AS  select `bo`.`BARANGAY_OFFICIAL_ID` AS `BARANGAY_OFFICIAL_ID`,`bo`.`BARANGAY_ID` AS `BARANGAY_ID`,`u`.`USER_ID` AS `USER_ID`,concat(`rbi`.`FIRSTNAME`,' ',`rbi`.`MIDDLENAME`,' ',`rbi`.`LASTNAME`) AS `FULLNAME`,`u`.`USERNAME` AS `USERNAME`,`u`.`PASSWORD` AS `PASSWORD`,`bs`.`BARANGAY_NAME` AS `BARANGAY_NAME`,`p`.`POSITION_NAME` AS `POSITION_NAME`,`u`.`EMAIL` AS `EMAIL`,`bo`.`START_TERM` AS `START_TERM`,`bo`.`END_TERM` AS `END_TERM`,`u`.`PERMIS_RESIDENT_BASIC_INFO` AS `PERMIS_RESIDENT_BASIC_INFO`,`u`.`PERMIS_FAMILY_PROFILE` AS `PERMIS_FAMILY_PROFILE`,`u`.`PERMIS_COMMUNITY_PROFILE` AS `PERMIS_COMMUNITY_PROFILE`,`u`.`PERMIS_BLOTTER` AS `PERMIS_BLOTTER`,`u`.`PERMIS_PATAWAG` AS `PERMIS_PATAWAG`,`u`.`PERMIS_BARANGAY_OFFICIAL` AS `PERMIS_BARANGAY_OFFICIAL`,`u`.`PERMIS_BUSINESSES` AS `PERMIS_BUSINESSES`,`u`.`PERMIS_ISSUANCE_OF_FORMS` AS `PERMIS_ISSUANCE_OF_FORMS`,`u`.`PERMIS_ORDINANCES` AS `PERMIS_ORDINANCES`,`u`.`PERMIS_SYSTEM_REPORT` AS `PERMIS_SYSTEM_REPORT`,`u`.`PERMIS_HEALTH_SERVICES` AS `PERMIS_HEALTH_SERVICES`,`u`.`PERMIS_DATA_MIGRATION` AS `PERMIS_DATA_MIGRATION`,`u`.`PERMIS_USER_ACCOUNTS` AS `PERMIS_USER_ACCOUNTS`,`u`.`PERMIS_BARANGAY_CONFIG` AS `PERMIS_BARANGAY_CONFIG`,`u`.`PERMIS_BUSINESS_APPROVAL` AS `PERMIS_BUSINESS_APPROVAL`,`bo`.`ACTIVE_FLAG` AS `ACTIVE_FLAG`,`bs`.`BARANGAY_SEAL` AS `BARANGAY_SEAL`,`mi`.`MUNICIPAL_SEAL` AS `MUNICIPAL_SEAL`,`mi`.`MUNICIPAL_NAME` AS `MUNICIPAL_NAME`,`mi`.`PROVINCE_NAME` AS `PROVINCE_NAME` from (((((`t_users` `u` join `t_barangay_official` `bo` on((`bo`.`BARANGAY_OFFICIAL_ID` = `u`.`BARANGAY_OFFICIAL_ID`))) join `r_barangay_information` `bs` on((`bs`.`BARANGAY_ID` = `bo`.`BARANGAY_ID`))) join `t_resident_basic_info` `rbi` on((`bo`.`RESIDENT_ID` = `rbi`.`RESIDENT_ID`))) join `r_position` `p` on((`p`.`POSITION_ID` = `u`.`POSITION_ID`))) join `r_municipal_information` `mi` on((`mi`.`MUNICIPAL_ID` = `bs`.`MUNICIPAL_ID`))) ;

-- --------------------------------------------------------

--
-- Structure for view `v_useraccount`
--
DROP TABLE IF EXISTS `v_useraccount`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_useraccount`  AS  select `p`.`POSITION_NAME` AS `POSITION_NAME`,`bs`.`BARANGAY_NAME` AS `BARANGAY_NAME`,`u`.`FIRSTNAME` AS `FIRSTNAME`,`u`.`MIDDLENAME` AS `MIDDLENAME`,`u`.`LASTNAME` AS `LASTNAME`,`u`.`USERNAME` AS `USERNAME`,`u`.`PASSWORD` AS `PASSWORD`,`u`.`EMAIL` AS `EMAIL`,`u`.`ACTIVE_FLAG` AS `ACTIVE_FLAG` from (((`t_users` `u` join `r_position` `p` on((`p`.`POSITION_ID` = `u`.`POSITION_ID`))) left join `r_barangay_information` `bs` on((`u`.`USER_ID` = `bs`.`USER_ID`))) left join `t_barangay_official` `bo` on((`u`.`BARANGAY_OFFICIAL_ID` = `bo`.`BARANGAY_OFFICIAL_ID`))) ;

-- --------------------------------------------------------

--
-- Structure for view `v_useraccounts`
--
DROP TABLE IF EXISTS `v_useraccounts`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_useraccounts`  AS  select `u`.`BARANGAY_OFFICIAL_ID` AS `BARANGAY_OFFICIAL_ID`,`p`.`POSITION_NAME` AS `POSITION_NAME`,ifnull(`bi`.`BARANGAY_NAME`,'Null') AS `BARANGAY_NAME`,`u`.`LASTNAME` AS `LASTNAME`,`u`.`FIRSTNAME` AS `FIRSTNAME`,`u`.`MIDDLENAME` AS `MIDDLENAME`,`u`.`USERNAME` AS `USERNAME`,`u`.`PASSWORD` AS `PASSWORD`,`u`.`ACTIVE_FLAG` AS `ACTIVE_FLAG` from (((`t_users` `u` left join `t_barangay_official` `bo` on((`u`.`BARANGAY_OFFICIAL_ID` = `bo`.`BARANGAY_OFFICIAL_ID`))) join `r_position` `p` on((`u`.`POSITION_ID` = `p`.`POSITION_ID`))) left join `r_barangay_information` `bi` on((`bo`.`BARANGAY_ID` = `bi`.`BARANGAY_ID`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `r_barangay_information`
--
ALTER TABLE `r_barangay_information`
  ADD PRIMARY KEY (`BARANGAY_ID`) USING BTREE;

--
-- Indexes for table `r_barangay_zone`
--
ALTER TABLE `r_barangay_zone`
  ADD PRIMARY KEY (`BARANGAY_ZONE_ID`) USING BTREE,
  ADD KEY `FK_B_ID_BRGY_INFO` (`BARANGAY_ID`) USING BTREE;

--
-- Indexes for table `r_bf_facilities_equipment`
--
ALTER TABLE `r_bf_facilities_equipment`
  ADD PRIMARY KEY (`FACILITY_EQUIPMENT_ID`) USING BTREE,
  ADD KEY `FACILITY_EQUIPMENT_ID` (`FACILITY_EQUIPMENT_ID`) USING BTREE,
  ADD KEY `FACILITY_EQUIPMENT_ID_2` (`FACILITY_EQUIPMENT_ID`) USING BTREE,
  ADD KEY `FACILITY_EQUIPMENT_ID_3` (`FACILITY_EQUIPMENT_ID`) USING BTREE;

--
-- Indexes for table `r_bf_line_of_business`
--
ALTER TABLE `r_bf_line_of_business`
  ADD PRIMARY KEY (`LINE_OF_BUSINESS_ID`) USING BTREE,
  ADD KEY `LINE_OF_BUSINESS_ID` (`LINE_OF_BUSINESS_ID`) USING BTREE,
  ADD KEY `LINE_OF_BUSINESS_ID_2` (`LINE_OF_BUSINESS_ID`) USING BTREE,
  ADD KEY `LINE_OF_BUSINESS_ID_3` (`LINE_OF_BUSINESS_ID`) USING BTREE,
  ADD KEY `LINE_OF_BUSINESS_ID_4` (`LINE_OF_BUSINESS_ID`) USING BTREE,
  ADD KEY `LINE_OF_BUSINESS_ID_5` (`LINE_OF_BUSINESS_ID`) USING BTREE;

--
-- Indexes for table `r_blotter_subjects`
--
ALTER TABLE `r_blotter_subjects`
  ADD PRIMARY KEY (`BLOTTER_SUBJECT_ID`) USING BTREE;

--
-- Indexes for table `r_business_nature`
--
ALTER TABLE `r_business_nature`
  ADD PRIMARY KEY (`BUSINESS_NATURE_ID`) USING BTREE;

--
-- Indexes for table `r_issuance_category`
--
ALTER TABLE `r_issuance_category`
  ADD PRIMARY KEY (`ISSUANCE_CATEGORY_ID`) USING BTREE;

--
-- Indexes for table `r_municipal_information`
--
ALTER TABLE `r_municipal_information`
  ADD PRIMARY KEY (`MUNICIPAL_ID`);

--
-- Indexes for table `r_ordinance_category`
--
ALTER TABLE `r_ordinance_category`
  ADD PRIMARY KEY (`ORDINANCE_CATEGORY_ID`) USING BTREE;

--
-- Indexes for table `r_position`
--
ALTER TABLE `r_position`
  ADD PRIMARY KEY (`POSITION_ID`) USING BTREE;

--
-- Indexes for table `r_resident_type`
--
ALTER TABLE `r_resident_type`
  ADD PRIMARY KEY (`TYPE_ID`) USING BTREE;

--
-- Indexes for table `t_barangay_official`
--
ALTER TABLE `t_barangay_official`
  ADD PRIMARY KEY (`BARANGAY_OFFICIAL_ID`) USING BTREE,
  ADD KEY `FK_BO_ID_BRGY_INFO` (`BARANGAY_ID`) USING BTREE,
  ADD KEY `FK_R_ID_T_RESIDENTS` (`RESIDENT_ID`) USING BTREE;

--
-- Indexes for table `t_bf_barangay_certification`
--
ALTER TABLE `t_bf_barangay_certification`
  ADD PRIMARY KEY (`BARANGAY_CERTIFICATION_ID`) USING BTREE,
  ADD KEY `fk_BarangayCertification_MainLgu` (`BF_MAIN_LGU_ID`) USING BTREE,
  ADD KEY `fk_BarangayCertification_PaymentDetails` (`PAYMENT_DETAILS_ID`) USING BTREE,
  ADD KEY `fk_BarangayCertufication_Resident` (`RESIDENT_ID`) USING BTREE;

--
-- Indexes for table `t_bf_barangay_clearance`
--
ALTER TABLE `t_bf_barangay_clearance`
  ADD PRIMARY KEY (`BARANGAY_CLEARANCE_ID`) USING BTREE,
  ADD KEY `fk_BarangayClearance_MainLgu` (`BF_MAIN_LGU_ID`) USING BTREE,
  ADD KEY `fk_BarangayClearance_PaymentDetails` (`PAYMENT_DETAILS_ID`) USING BTREE,
  ADD KEY `fk_BarangayClearance_ScopeOfWork` (`SCOPE_OF_WORK_ID`) USING BTREE,
  ADD KEY `fk_BarangayClearance_Business` (`BUSINESS_ID`) USING BTREE;

--
-- Indexes for table `t_bf_business_activity`
--
ALTER TABLE `t_bf_business_activity`
  ADD PRIMARY KEY (`BUSINESS_ACTIVITY_ID`) USING BTREE,
  ADD KEY `fk_BusinessActivity_LineOfBusiness` (`LINE_OF_BUSINESS_ID`) USING BTREE,
  ADD KEY `fk_BusinessActivity_Issuance` (`BUSINESS_ID`) USING BTREE;

--
-- Indexes for table `t_bf_business_permit`
--
ALTER TABLE `t_bf_business_permit`
  ADD PRIMARY KEY (`BUSINESS_PERMIT_ID`) USING BTREE,
  ADD KEY `fk_BusinessPermit_BfMainLgu` (`BF_MAIN_LGU_ID`) USING BTREE,
  ADD KEY `fk_BusinessPermit_PaymentDetails` (`PAYMENT_DETAILS_ID`) USING BTREE,
  ADD KEY `fk_BusinessPermit_Business` (`BUSINESS_ID`) USING BTREE;

--
-- Indexes for table `t_bf_certified_record`
--
ALTER TABLE `t_bf_certified_record`
  ADD PRIMARY KEY (`CERTIFIED_RECORD_ID`) USING BTREE,
  ADD KEY `fk_CertifiedRecord_MainLgu` (`BF_MAIN_LGU_ID`) USING BTREE,
  ADD KEY `fk_CertifiedRecord_PaymentDetails` (`PAYMENT_DETAILS_ID`) USING BTREE,
  ADD KEY `fk_CertifiedRecord_Resident` (`RESIDENT_ID`) USING BTREE;

--
-- Indexes for table `t_bf_main_lgu`
--
ALTER TABLE `t_bf_main_lgu`
  ADD PRIMARY KEY (`BF_MAIN_LGU_ID`) USING BTREE,
  ADD KEY `BF_MAIN_LGU_ID` (`BF_MAIN_LGU_ID`) USING BTREE,
  ADD KEY `BF_MAIN_LGU_ID_2` (`BF_MAIN_LGU_ID`) USING BTREE,
  ADD KEY `BF_MAIN_LGU_ID_3` (`BF_MAIN_LGU_ID`) USING BTREE,
  ADD KEY `BF_MAIN_LGU_ID_4` (`BF_MAIN_LGU_ID`) USING BTREE,
  ADD KEY `BF_MAIN_LGU_ID_5` (`BF_MAIN_LGU_ID`) USING BTREE,
  ADD KEY `BF_MAIN_LGU_ID_6` (`BF_MAIN_LGU_ID`) USING BTREE,
  ADD KEY `BF_MAIN_LGU_ID_7` (`BF_MAIN_LGU_ID`) USING BTREE,
  ADD KEY `BF_MAIN_LGU_ID_8` (`BF_MAIN_LGU_ID`) USING BTREE,
  ADD KEY `BF_MAIN_LGU_ID_9` (`BF_MAIN_LGU_ID`) USING BTREE,
  ADD KEY `BF_MAIN_LGU_ID_10` (`BF_MAIN_LGU_ID`) USING BTREE;

--
-- Indexes for table `t_bf_payment_details`
--
ALTER TABLE `t_bf_payment_details`
  ADD PRIMARY KEY (`PAYMENT_DETAILS_ID`) USING BTREE,
  ADD KEY `PAYMENT_DETAILS_ID` (`PAYMENT_DETAILS_ID`) USING BTREE,
  ADD KEY `PAYMENT_DETAILS_ID_2` (`PAYMENT_DETAILS_ID`) USING BTREE,
  ADD KEY `PAYMENT_DETAILS_ID_3` (`PAYMENT_DETAILS_ID`) USING BTREE,
  ADD KEY `PAYMENT_DETAILS_ID_4` (`PAYMENT_DETAILS_ID`) USING BTREE,
  ADD KEY `PAYMENT_DETAILS_ID_5` (`PAYMENT_DETAILS_ID`) USING BTREE,
  ADD KEY `PAYMENT_DETAILS_ID_6` (`PAYMENT_DETAILS_ID`) USING BTREE,
  ADD KEY `PAYMENT_DETAILS_ID_7` (`PAYMENT_DETAILS_ID`) USING BTREE,
  ADD KEY `PAYMENT_DETAILS_ID_8` (`PAYMENT_DETAILS_ID`) USING BTREE,
  ADD KEY `PAYMENT_DETAILS_ID_9` (`PAYMENT_DETAILS_ID`) USING BTREE;

--
-- Indexes for table `t_bf_scope_of_work`
--
ALTER TABLE `t_bf_scope_of_work`
  ADD PRIMARY KEY (`SCOPE_OF_WORK_ID`) USING BTREE,
  ADD KEY `SCOPE_OF_WORK_ID` (`SCOPE_OF_WORK_ID`) USING BTREE,
  ADD KEY `SCOPE_OF_WORK_ID_2` (`SCOPE_OF_WORK_ID`) USING BTREE;

--
-- Indexes for table `t_bf_uof_facility_equipment`
--
ALTER TABLE `t_bf_uof_facility_equipment`
  ADD PRIMARY KEY (`UOF_FACILITY_ID`) USING BTREE,
  ADD KEY `fk_UOFFacilityEquipment_UOF` (`USE_OF_FACILITY_EQUIPMENT_ID`) USING BTREE,
  ADD KEY `fk_UOFFacilityEquipment_RFacilityEquipment` (`FACILITY_ID`) USING BTREE;

--
-- Indexes for table `t_bf_use_of_facility_equipment`
--
ALTER TABLE `t_bf_use_of_facility_equipment`
  ADD PRIMARY KEY (`USE_OF_FACILITY_EQUIPMENT_ID`) USING BTREE,
  ADD KEY `fk_UseOfFacilityEquipment_Issuance` (`ISSUANCE_ID`) USING BTREE;

--
-- Indexes for table `t_blotter`
--
ALTER TABLE `t_blotter`
  ADD PRIMARY KEY (`BLOTTER_ID`) USING BTREE,
  ADD KEY `t_blotter_blotter_subject_foreign` (`BLOTTER_SUBJECT_ID`) USING BTREE,
  ADD KEY `t_blotter_accused_resident_foreign` (`ACCUSED_RESIDENT`) USING BTREE;

--
-- Indexes for table `t_business_approval`
--
ALTER TABLE `t_business_approval`
  ADD PRIMARY KEY (`APPROVAL_ID`) USING BTREE,
  ADD KEY `fk_Approval_Business` (`BUSINESS_ID`) USING BTREE;

--
-- Indexes for table `t_business_information`
--
ALTER TABLE `t_business_information`
  ADD PRIMARY KEY (`BUSINESS_ID`) USING BTREE,
  ADD KEY `FK_B_N_ID_TBINFO` (`BUSINESS_NATURE_ID`) USING BTREE,
  ADD KEY `FK_B_Z_ID_TBZONE` (`BARANGAY_ZONE_ID`) USING BTREE;

--
-- Indexes for table `t_children_profile`
--
ALTER TABLE `t_children_profile`
  ADD PRIMARY KEY (`CHILDREN_ID`) USING BTREE,
  ADD KEY `FK_CP_R_ID` (`RESIDENT_ID`) USING BTREE;

--
-- Indexes for table `t_fathers_profile`
--
ALTER TABLE `t_fathers_profile`
  ADD PRIMARY KEY (`FATHERS_ID`) USING BTREE,
  ADD KEY `FK_FP_R_ID` (`RESIDENT_ID`) USING BTREE;

--
-- Indexes for table `t_food_eaten`
--
ALTER TABLE `t_food_eaten`
  ADD PRIMARY KEY (`FOOD_EATEN_ID`) USING BTREE,
  ADD KEY `FK_C_ID_CPROFILE` (`CHILDREN_ID`) USING BTREE;

--
-- Indexes for table `t_household_information`
--
ALTER TABLE `t_household_information`
  ADD PRIMARY KEY (`HOUSEHOLD_ID`) USING BTREE,
  ADD KEY `FK_B_ID_HOUSEHOLDINFO` (`BARANGAY_ID`) USING BTREE;

--
-- Indexes for table `t_hs_adolescent`
--
ALTER TABLE `t_hs_adolescent`
  ADD PRIMARY KEY (`ADOLESCENT_ID`) USING BTREE,
  ADD KEY `FK_HS_A_R_ID` (`RESIDENT_ID`) USING BTREE;

--
-- Indexes for table `t_hs_child`
--
ALTER TABLE `t_hs_child`
  ADD PRIMARY KEY (`CHILD_ID`) USING BTREE,
  ADD KEY `FK_HS_C_INFANT_ID` (`INFANT_ID`) USING BTREE;

--
-- Indexes for table `t_hs_chronic_cough`
--
ALTER TABLE `t_hs_chronic_cough`
  ADD PRIMARY KEY (`CHRONIC_COUGH_ID`) USING BTREE,
  ADD KEY `FK_HS_CC_R_ID` (`RESIDENT_ID`) USING BTREE;

--
-- Indexes for table `t_hs_chronic_disease`
--
ALTER TABLE `t_hs_chronic_disease`
  ADD PRIMARY KEY (`CHRONIC_DISEASE_ID`) USING BTREE,
  ADD KEY `FK_HS_CD_R_ID` (`RESIDENT_ID`) USING BTREE;

--
-- Indexes for table `t_hs_elderly`
--
ALTER TABLE `t_hs_elderly`
  ADD PRIMARY KEY (`ELDERLY_ID`) USING BTREE,
  ADD KEY `fk_elderly_resident_id` (`RESIDENT_ID`) USING BTREE;

--
-- Indexes for table `t_hs_family_planning`
--
ALTER TABLE `t_hs_family_planning`
  ADD PRIMARY KEY (`FD_ID`) USING BTREE,
  ADD KEY `FK_HS_FP_R_ID` (`RESIDENT_ID`) USING BTREE;

--
-- Indexes for table `t_hs_family_planning_users_visitations`
--
ALTER TABLE `t_hs_family_planning_users_visitations`
  ADD PRIMARY KEY (`VISITATION_ID`) USING BTREE,
  ADD KEY `FK_FPUV_FP_ID` (`FP_ID`) USING BTREE;

--
-- Indexes for table `t_hs_infant`
--
ALTER TABLE `t_hs_infant`
  ADD PRIMARY KEY (`INFANT_ID`) USING BTREE,
  ADD KEY `FK_HS_INFT_NB_ID` (`NEW_BORN_ID`) USING BTREE;

--
-- Indexes for table `t_hs_newborn`
--
ALTER TABLE `t_hs_newborn`
  ADD PRIMARY KEY (`NEWBORN_ID`) USING BTREE,
  ADD KEY `FK_HS_NB_R_ID` (`RESIDENT_ID`) USING BTREE;

--
-- Indexes for table `t_hs_non_family_planning_users`
--
ALTER TABLE `t_hs_non_family_planning_users`
  ADD PRIMARY KEY (`NON_FP_ID`) USING BTREE,
  ADD KEY `FK_HS_NON_FPU_R_ID` (`RESIDENT_ID`) USING BTREE;

--
-- Indexes for table `t_hs_post_partum`
--
ALTER TABLE `t_hs_post_partum`
  ADD PRIMARY KEY (`POST_PATRUM_ID`) USING BTREE,
  ADD KEY `FK_HS_PP_P_ID` (`PREGNANT_ID`) USING BTREE;

--
-- Indexes for table `t_hs_pregnant`
--
ALTER TABLE `t_hs_pregnant`
  ADD PRIMARY KEY (`PREGNANT_ID`) USING BTREE,
  ADD KEY `FK_HS_PRG_R_ID` (`RESIDENT_ID`) USING BTREE;

--
-- Indexes for table `t_hs_pwd`
--
ALTER TABLE `t_hs_pwd`
  ADD PRIMARY KEY (`PWD_ID`) USING BTREE,
  ADD KEY `FK_HS_PWD_R_ID` (`RESIDENT_ID`) USING BTREE;

--
-- Indexes for table `t_issuance`
--
ALTER TABLE `t_issuance`
  ADD PRIMARY KEY (`ISSUANCE_ID`) USING BTREE,
  ADD KEY `FK_IS_TYPE_ID` (`ISSUANCE_TYPE_ID`) USING BTREE,
  ADD KEY `FK_IS_R_ID` (`RESIDENT_ID`) USING BTREE,
  ADD KEY `FK_IS_B_ID` (`BUSINESS_ID`) USING BTREE;

--
-- Indexes for table `t_mothers_profile`
--
ALTER TABLE `t_mothers_profile`
  ADD PRIMARY KEY (`MOTHERS_ID`) USING BTREE,
  ADD KEY `FK_M_R_ID` (`RESIDENT_ID`) USING BTREE;

--
-- Indexes for table `t_ordinance`
--
ALTER TABLE `t_ordinance`
  ADD PRIMARY KEY (`ORDINANCE_ID`) USING BTREE,
  ADD KEY `FK_O_BO_ID` (`BARANGAY_OFFICIAL_ID`) USING BTREE,
  ADD KEY `FK_ORNIDANCE_CATEGORY` (`ORDINANCE_CATEGORY_ID`) USING BTREE;

--
-- Indexes for table `t_patawag`
--
ALTER TABLE `t_patawag`
  ADD PRIMARY KEY (`PATAWAG_ID`) USING BTREE,
  ADD KEY `t_patawag_blotter_id_foreign` (`BLOTTER_ID`) USING BTREE;

--
-- Indexes for table `t_resident_basic_info`
--
ALTER TABLE `t_resident_basic_info`
  ADD PRIMARY KEY (`RESIDENT_ID`) USING BTREE,
  ADD KEY `FK_RBI_HS_ID` (`HOUSEHOLD_ID`) USING BTREE;

--
-- Indexes for table `t_transient_record`
--
ALTER TABLE `t_transient_record`
  ADD PRIMARY KEY (`TRANSIENT_RECORD_ID`) USING BTREE;

--
-- Indexes for table `t_users`
--
ALTER TABLE `t_users`
  ADD PRIMARY KEY (`USER_ID`) USING BTREE,
  ADD KEY `FK_U_BO_ID` (`BARANGAY_OFFICIAL_ID`) USING BTREE,
  ADD KEY `FK_U_POS_ID` (`POSITION_ID`) USING BTREE,
  ADD KEY `FK_BRGY_ID` (`BARANGAY_ID`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `r_barangay_information`
--
ALTER TABLE `r_barangay_information`
  MODIFY `BARANGAY_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `r_barangay_zone`
--
ALTER TABLE `r_barangay_zone`
  MODIFY `BARANGAY_ZONE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `r_bf_facilities_equipment`
--
ALTER TABLE `r_bf_facilities_equipment`
  MODIFY `FACILITY_EQUIPMENT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `r_bf_line_of_business`
--
ALTER TABLE `r_bf_line_of_business`
  MODIFY `LINE_OF_BUSINESS_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `r_blotter_subjects`
--
ALTER TABLE `r_blotter_subjects`
  MODIFY `BLOTTER_SUBJECT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `r_business_nature`
--
ALTER TABLE `r_business_nature`
  MODIFY `BUSINESS_NATURE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `r_issuance_category`
--
ALTER TABLE `r_issuance_category`
  MODIFY `ISSUANCE_CATEGORY_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `r_municipal_information`
--
ALTER TABLE `r_municipal_information`
  MODIFY `MUNICIPAL_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `r_ordinance_category`
--
ALTER TABLE `r_ordinance_category`
  MODIFY `ORDINANCE_CATEGORY_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `r_position`
--
ALTER TABLE `r_position`
  MODIFY `POSITION_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `r_resident_type`
--
ALTER TABLE `r_resident_type`
  MODIFY `TYPE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_barangay_official`
--
ALTER TABLE `t_barangay_official`
  MODIFY `BARANGAY_OFFICIAL_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `t_bf_barangay_certification`
--
ALTER TABLE `t_bf_barangay_certification`
  MODIFY `BARANGAY_CERTIFICATION_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_bf_barangay_clearance`
--
ALTER TABLE `t_bf_barangay_clearance`
  MODIFY `BARANGAY_CLEARANCE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `t_bf_business_activity`
--
ALTER TABLE `t_bf_business_activity`
  MODIFY `BUSINESS_ACTIVITY_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `t_bf_business_permit`
--
ALTER TABLE `t_bf_business_permit`
  MODIFY `BUSINESS_PERMIT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `t_bf_certified_record`
--
ALTER TABLE `t_bf_certified_record`
  MODIFY `CERTIFIED_RECORD_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_bf_main_lgu`
--
ALTER TABLE `t_bf_main_lgu`
  MODIFY `BF_MAIN_LGU_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `t_bf_payment_details`
--
ALTER TABLE `t_bf_payment_details`
  MODIFY `PAYMENT_DETAILS_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `t_bf_scope_of_work`
--
ALTER TABLE `t_bf_scope_of_work`
  MODIFY `SCOPE_OF_WORK_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `t_bf_uof_facility_equipment`
--
ALTER TABLE `t_bf_uof_facility_equipment`
  MODIFY `UOF_FACILITY_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_bf_use_of_facility_equipment`
--
ALTER TABLE `t_bf_use_of_facility_equipment`
  MODIFY `USE_OF_FACILITY_EQUIPMENT_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_blotter`
--
ALTER TABLE `t_blotter`
  MODIFY `BLOTTER_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `t_business_approval`
--
ALTER TABLE `t_business_approval`
  MODIFY `APPROVAL_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `t_business_information`
--
ALTER TABLE `t_business_information`
  MODIFY `BUSINESS_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `t_children_profile`
--
ALTER TABLE `t_children_profile`
  MODIFY `CHILDREN_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_fathers_profile`
--
ALTER TABLE `t_fathers_profile`
  MODIFY `FATHERS_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_food_eaten`
--
ALTER TABLE `t_food_eaten`
  MODIFY `FOOD_EATEN_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_household_information`
--
ALTER TABLE `t_household_information`
  MODIFY `HOUSEHOLD_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=324;

--
-- AUTO_INCREMENT for table `t_hs_adolescent`
--
ALTER TABLE `t_hs_adolescent`
  MODIFY `ADOLESCENT_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_hs_child`
--
ALTER TABLE `t_hs_child`
  MODIFY `CHILD_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_hs_chronic_cough`
--
ALTER TABLE `t_hs_chronic_cough`
  MODIFY `CHRONIC_COUGH_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_hs_chronic_disease`
--
ALTER TABLE `t_hs_chronic_disease`
  MODIFY `CHRONIC_DISEASE_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_hs_elderly`
--
ALTER TABLE `t_hs_elderly`
  MODIFY `ELDERLY_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_hs_family_planning`
--
ALTER TABLE `t_hs_family_planning`
  MODIFY `FD_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_hs_family_planning_users_visitations`
--
ALTER TABLE `t_hs_family_planning_users_visitations`
  MODIFY `VISITATION_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_hs_infant`
--
ALTER TABLE `t_hs_infant`
  MODIFY `INFANT_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_hs_newborn`
--
ALTER TABLE `t_hs_newborn`
  MODIFY `NEWBORN_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_hs_non_family_planning_users`
--
ALTER TABLE `t_hs_non_family_planning_users`
  MODIFY `NON_FP_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_hs_post_partum`
--
ALTER TABLE `t_hs_post_partum`
  MODIFY `POST_PATRUM_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_hs_pregnant`
--
ALTER TABLE `t_hs_pregnant`
  MODIFY `PREGNANT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_hs_pwd`
--
ALTER TABLE `t_hs_pwd`
  MODIFY `PWD_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_issuance`
--
ALTER TABLE `t_issuance`
  MODIFY `ISSUANCE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=266;

--
-- AUTO_INCREMENT for table `t_mothers_profile`
--
ALTER TABLE `t_mothers_profile`
  MODIFY `MOTHERS_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_ordinance`
--
ALTER TABLE `t_ordinance`
  MODIFY `ORDINANCE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `t_patawag`
--
ALTER TABLE `t_patawag`
  MODIFY `PATAWAG_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_resident_basic_info`
--
ALTER TABLE `t_resident_basic_info`
  MODIFY `RESIDENT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2763;

--
-- AUTO_INCREMENT for table `t_transient_record`
--
ALTER TABLE `t_transient_record`
  MODIFY `TRANSIENT_RECORD_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_users`
--
ALTER TABLE `t_users`
  MODIFY `USER_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `r_barangay_zone`
--
ALTER TABLE `r_barangay_zone`
  ADD CONSTRAINT `FK_B_ID_BRGY_INFO` FOREIGN KEY (`BARANGAY_ID`) REFERENCES `r_barangay_information` (`BARANGAY_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t_barangay_official`
--
ALTER TABLE `t_barangay_official`
  ADD CONSTRAINT `FK_BO_ID_BRGY_INFO` FOREIGN KEY (`BARANGAY_ID`) REFERENCES `r_barangay_information` (`BARANGAY_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_R_ID_T_RESIDENTS` FOREIGN KEY (`RESIDENT_ID`) REFERENCES `t_resident_basic_info` (`RESIDENT_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t_bf_barangay_certification`
--
ALTER TABLE `t_bf_barangay_certification`
  ADD CONSTRAINT `fk_BarangayCertification_MainLgu` FOREIGN KEY (`BF_MAIN_LGU_ID`) REFERENCES `t_bf_main_lgu` (`BF_MAIN_LGU_ID`),
  ADD CONSTRAINT `fk_BarangayCertification_PaymentDetails` FOREIGN KEY (`PAYMENT_DETAILS_ID`) REFERENCES `t_bf_payment_details` (`PAYMENT_DETAILS_ID`),
  ADD CONSTRAINT `fk_BarangayCertufication_Resident` FOREIGN KEY (`RESIDENT_ID`) REFERENCES `t_resident_basic_info` (`RESIDENT_ID`);

--
-- Constraints for table `t_bf_business_activity`
--
ALTER TABLE `t_bf_business_activity`
  ADD CONSTRAINT `fk_BusinessActivity_Business` FOREIGN KEY (`BUSINESS_ID`) REFERENCES `t_business_information` (`BUSINESS_ID`),
  ADD CONSTRAINT `fk_BusinessActivity_LineOfBusiness` FOREIGN KEY (`LINE_OF_BUSINESS_ID`) REFERENCES `r_bf_line_of_business` (`LINE_OF_BUSINESS_ID`);

--
-- Constraints for table `t_hs_elderly`
--
ALTER TABLE `t_hs_elderly`
  ADD CONSTRAINT `sfk_Elderly_Resident` FOREIGN KEY (`RESIDENT_ID`) REFERENCES `t_resident_basic_info` (`RESIDENT_ID`);

--
-- Constraints for table `t_resident_basic_info`
--
ALTER TABLE `t_resident_basic_info`
  ADD CONSTRAINT `fk_Resident_Household` FOREIGN KEY (`HOUSEHOLD_ID`) REFERENCES `t_household_information` (`HOUSEHOLD_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
