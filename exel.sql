-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2023 at 07:11 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exel`
--

-- --------------------------------------------------------

--
-- Table structure for table `active_clients_table`
--

CREATE TABLE `active_clients_table` (
  `CID` varchar(255) NOT NULL,
  `F(FY)` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `active_clients_table`
--

INSERT INTO `active_clients_table` (`CID`, `F(FY)`) VALUES
('', ''),
('1', 'vraj'),
('100', 'dax'),
('1212', 'vraj'),
('20', 'vraj'),
('2000', 'vraj'),
('20020', ''),
('520', 'vraj');

-- --------------------------------------------------------

--
-- Table structure for table `audit_report_table`
--

CREATE TABLE `audit_report_table` (
  `FY` varchar(255) NOT NULL,
  `CID` varchar(255) NOT NULL,
  `ACBASE` varchar(255) NOT NULL,
  `FAI` varchar(255) NOT NULL,
  `OPN` varchar(255) NOT NULL,
  `QLF` varchar(255) NOT NULL,
  `EOM` varchar(255) NOT NULL,
  `AOM` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `audit_report_table`
--

INSERT INTO `audit_report_table` (`FY`, `CID`, `ACBASE`, `FAI`, `OPN`, `QLF`, `EOM`, `AOM`) VALUES
('12', 'g46', 'ge6u', '', '', '', '', ''),
('20', 'vraj', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `clients_table`
--

CREATE TABLE `clients_table` (
  `CID` varchar(255) NOT NULL,
  `FILENO` varchar(255) NOT NULL,
  `CNAME` varchar(255) NOT NULL,
  `CTYPE` varchar(255) NOT NULL,
  `PID` varchar(255) NOT NULL,
  `TRGNO` varchar(255) NOT NULL,
  `TRGDT` varchar(255) NOT NULL,
  `TPAN` varchar(255) NOT NULL,
  `OEDU` varchar(255) NOT NULL,
  `OMED` varchar(255) NOT NULL,
  `CADDRESS` varchar(255) NOT NULL,
  `CITY` varchar(255) NOT NULL,
  `DISTRICT` varchar(255) NOT NULL,
  `PINCODE` varchar(255) NOT NULL,
  `STATE` varchar(255) NOT NULL,
  `BANK` varchar(255) NOT NULL,
  `BRANCH` varchar(255) NOT NULL,
  `BADDRESS` varchar(255) NOT NULL,
  `FCRGNO` varchar(255) NOT NULL,
  `FCRGDT` varchar(255) NOT NULL,
  `FCBANK` varchar(255) NOT NULL,
  `FCACTYPE` varchar(255) NOT NULL,
  `FCACNO` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clients_table`
--

INSERT INTO `clients_table` (`CID`, `FILENO`, `CNAME`, `CTYPE`, `PID`, `TRGNO`, `TRGDT`, `TPAN`, `OEDU`, `OMED`, `CADDRESS`, `CITY`, `DISTRICT`, `PINCODE`, `STATE`, `BANK`, `BRANCH`, `BADDRESS`, `FCRGNO`, `FCRGDT`, `FCBANK`, `FCACTYPE`, `FCACNO`) VALUES
('11', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `firms_table`
--

CREATE TABLE `firms_table` (
  `FID` varchar(255) NOT NULL,
  `FNAME` varchar(255) NOT NULL,
  `ADD1` varchar(255) NOT NULL,
  `ADD2` varchar(255) NOT NULL,
  `CITY` varchar(255) NOT NULL,
  `STATE` varchar(255) NOT NULL,
  `PINCODE` varchar(255) NOT NULL,
  `FRN` varchar(255) NOT NULL,
  `PHONE` varchar(255) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `BRANCH1` varchar(255) NOT NULL,
  `BRANCH2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `firms_table`
--

INSERT INTO `firms_table` (`FID`, `FNAME`, `ADD1`, `ADD2`, `CITY`, `STATE`, `PINCODE`, `FRN`, `PHONE`, `EMAIL`, `BRANCH1`, `BRANCH2`) VALUES
('', '', '', '', '', '', '', '', '', '', '', ']'),
('9664860627', 'Vraj Prajapati', 'B-27 rajdeep society', 'Waghodia dabhoi road', 'Vadodara', 'Gujarat', '', '', '', '', '', ']'),
('thfn', 'htrsn', 'hrn', 'hnmr', '753', 'nx', 'xb', 'xee', 'yseh', 'sh7h', 'hs7', 'hrsn57]'),
('vfxb', 'bxt', 'bgn ', '', '', '', '', '', '', '', '', ']');

-- --------------------------------------------------------

--
-- Table structure for table `heads_sequence_table`
--

CREATE TABLE `heads_sequence_table` (
  `CTYPE` varchar(255) NOT NULL,
  `RTYPE` varchar(255) NOT NULL,
  `SIDE` varchar(255) NOT NULL,
  `SRN` varchar(255) NOT NULL,
  `HID` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `heads_sequence_table`
--

INSERT INTO `heads_sequence_table` (`CTYPE`, `RTYPE`, `SIDE`, `SRN`, `HID`) VALUES
('', 'bts', 'vae', '', ''),
('', 'vraj', 'v', 'vraj', '');

-- --------------------------------------------------------

--
-- Table structure for table `heads_table`
--

CREATE TABLE `heads_table` (
  `HID` varchar(255) NOT NULL,
  `HNAME` varchar(255) NOT NULL,
  `HTYPE` varchar(255) NOT NULL,
  `HSIDE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `heads_table`
--

INSERT INTO `heads_table` (`HID`, `HNAME`, `HTYPE`, `HSIDE`) VALUES
('', '', '', ''),
('12', 'vraj', 'vadodara', '2313'),
('121', 'vraj', '12313', '2313');

-- --------------------------------------------------------

--
-- Table structure for table `items_table_(entry items)`
--

CREATE TABLE `items_table_(entry items)` (
  `IID` varchar(255) NOT NULL,
  `LID` varchar(255) NOT NULL,
  `INAME` varchar(255) NOT NULL,
  `ISIDE` varchar(255) NOT NULL,
  `CID` varchar(255) NOT NULL,
  `ACTIVE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items_table_(entry items)`
--

INSERT INTO `items_table_(entry items)` (`IID`, `LID`, `INAME`, `ISIDE`, `CID`, `ACTIVE`) VALUES
('', '', '', '', '', ''),
('12', '0', '', '', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `ledgers_table_(level 2 grouping)`
--

CREATE TABLE `ledgers_table_(level 2 grouping)` (
  `LID` varchar(255) NOT NULL,
  `HID` varchar(255) NOT NULL,
  `LNAME` varchar(255) NOT NULL,
  `CID` varchar(255) NOT NULL,
  `ACTIVE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('vraj', 'vraj@#1234');

-- --------------------------------------------------------

--
-- Table structure for table `report_information_table`
--

CREATE TABLE `report_information_table` (
  `FY` varchar(255) NOT NULL,
  `CID` varchar(255) NOT NULL,
  `RPDT` varchar(255) NOT NULL,
  `RPLACE` varchar(255) NOT NULL,
  `TRUSTEE` varchar(255) NOT NULL,
  `UDIN` varchar(255) NOT NULL,
  `MID` varchar(255) NOT NULL,
  `FID` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schedule_note_numbers_table`
--

CREATE TABLE `schedule_note_numbers_table` (
  `FY` varchar(255) NOT NULL,
  `CID` varchar(255) NOT NULL,
  `RTYPE` varchar(255) NOT NULL,
  `NOTE` varchar(255) NOT NULL,
  `HID` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedule_note_numbers_table`
--

INSERT INTO `schedule_note_numbers_table` (`FY`, `CID`, `RTYPE`, `NOTE`, `HID`) VALUES
('2023', '5454', 'pdf', '999797', '9797984941');

-- --------------------------------------------------------

--
-- Table structure for table `signing_partner(auditor)_table`
--

CREATE TABLE `signing_partner(auditor)_table` (
  `MID` varchar(255) NOT NULL,
  `MNAME` varchar(255) NOT NULL,
  `(FIRMS.FID)` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signing_partner(auditor)_table`
--

INSERT INTO `signing_partner(auditor)_table` (`MID`, `MNAME`, `(FIRMS.FID)`) VALUES
('', '', ''),
('46758', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `transactions_table (entries)`
--

CREATE TABLE `transactions_table (entries)` (
  `FY` varchar(255) NOT NULL,
  `CID` varchar(255) NOT NULL,
  `TTYPE` varchar(255) NOT NULL,
  `IID` varchar(255) NOT NULL,
  `LID` varchar(255) NOT NULL,
  `TID` varchar(255) NOT NULL,
  `TSIDE` varchar(255) NOT NULL,
  `TAMT` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `active_clients_table`
--
ALTER TABLE `active_clients_table`
  ADD PRIMARY KEY (`CID`) USING BTREE;

--
-- Indexes for table `audit_report_table`
--
ALTER TABLE `audit_report_table`
  ADD UNIQUE KEY `FY` (`FY`),
  ADD UNIQUE KEY `CID` (`CID`);

--
-- Indexes for table `clients_table`
--
ALTER TABLE `clients_table`
  ADD PRIMARY KEY (`CID`),
  ADD UNIQUE KEY `FILENO` (`FILENO`),
  ADD UNIQUE KEY `FCRGNO` (`FCRGNO`),
  ADD UNIQUE KEY `TPAN` (`TPAN`),
  ADD UNIQUE KEY `TRGNO` (`TRGNO`),
  ADD UNIQUE KEY `FCACNO` (`FCACNO`);

--
-- Indexes for table `firms_table`
--
ALTER TABLE `firms_table`
  ADD PRIMARY KEY (`FID`);

--
-- Indexes for table `heads_sequence_table`
--
ALTER TABLE `heads_sequence_table`
  ADD UNIQUE KEY `RTYPE` (`RTYPE`),
  ADD UNIQUE KEY `SRN` (`SRN`),
  ADD KEY `CTYPE` (`CTYPE`) USING BTREE,
  ADD KEY `SIDE` (`SIDE`) USING BTREE,
  ADD KEY `HID` (`HID`) USING BTREE;

--
-- Indexes for table `heads_table`
--
ALTER TABLE `heads_table`
  ADD PRIMARY KEY (`HID`);

--
-- Indexes for table `items_table_(entry items)`
--
ALTER TABLE `items_table_(entry items)`
  ADD PRIMARY KEY (`IID`);

--
-- Indexes for table `ledgers_table_(level 2 grouping)`
--
ALTER TABLE `ledgers_table_(level 2 grouping)`
  ADD PRIMARY KEY (`LID`);

--
-- Indexes for table `report_information_table`
--
ALTER TABLE `report_information_table`
  ADD UNIQUE KEY `FY` (`FY`),
  ADD UNIQUE KEY `CID` (`CID`),
  ADD UNIQUE KEY `UDIN` (`UDIN`);

--
-- Indexes for table `schedule_note_numbers_table`
--
ALTER TABLE `schedule_note_numbers_table`
  ADD UNIQUE KEY `FY` (`FY`),
  ADD UNIQUE KEY `CID` (`CID`),
  ADD UNIQUE KEY `RTYPE` (`RTYPE`),
  ADD UNIQUE KEY `NOTE` (`NOTE`);

--
-- Indexes for table `signing_partner(auditor)_table`
--
ALTER TABLE `signing_partner(auditor)_table`
  ADD PRIMARY KEY (`MID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
