-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2023 at 07:12 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_access`
--

CREATE TABLE `tbl_access` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT current_timestamp(),
  `deleted_flag` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_access`
--

INSERT INTO `tbl_access` (`id`, `name`, `created_date`, `updated_date`, `deleted_flag`) VALUES
(1, 'SYSTEM ADMIN', '2022-08-12 19:48:56', '2022-08-12 19:48:56', 0),
(2, 'MAKER', '2022-08-12 19:48:56', '2022-08-12 19:48:56', 0),
(3, 'CHECKER', '2022-08-12 19:48:56', '2022-08-12 19:48:56', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_branch`
--

CREATE TABLE `tbl_branch` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT current_timestamp(),
  `deleted_flag` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_branch`
--

INSERT INTO `tbl_branch` (`id`, `name`, `created_date`, `updated_date`, `deleted_flag`) VALUES
(1, 'ARMY', '2022-11-20 10:57:25', '2022-11-20 10:57:25', 0),
(2, 'NAVY', '2022-11-20 10:57:25', '2022-11-20 10:57:25', 0),
(3, 'AIR FORCE', '2022-11-20 10:57:25', '2022-11-20 10:57:25', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_classification`
--

CREATE TABLE `tbl_classification` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT current_timestamp(),
  `deleted_flag` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_classification`
--

INSERT INTO `tbl_classification` (`id`, `name`, `created_date`, `updated_date`, `deleted_flag`) VALUES
(1, 'OFFICER', '2022-11-20 10:54:13', '2022-11-20 10:54:13', 0),
(2, 'ENLISTED PERSONNEL', '2022-11-20 10:54:13', '2022-11-20 10:54:13', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comodity`
--

CREATE TABLE `tbl_comodity` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT current_timestamp(),
  `deleted_flag` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_comodity`
--

INSERT INTO `tbl_comodity` (`id`, `name`, `created_date`, `updated_date`, `deleted_flag`) VALUES
(1, 'ENG', '2022-11-20 20:21:03', '2022-11-20 20:21:03', 0),
(2, 'FP', '2022-11-20 20:21:03', '2022-11-20 20:21:03', 0),
(3, 'MED', '2022-11-20 20:21:03', '2022-11-20 20:21:03', 0),
(4, 'MOB', '2022-11-20 20:21:03', '2022-11-20 20:21:03', 0),
(5, 'MOB(Aircraft Spares)', '2022-11-20 20:21:03', '2022-11-20 20:21:03', 0),
(6, 'MOB(Armor Spares)', '2022-11-20 20:21:03', '2022-11-20 20:21:03', 0),
(7, 'QM', '2022-11-20 20:21:03', '2022-11-20 20:21:03', 0),
(8, 'SERVICES', '2022-11-20 20:21:03', '2022-11-20 20:21:03', 0),
(9, 'SERVICES(PCHT)', '2022-11-20 20:21:03', '2022-11-20 20:21:03', 0),
(10, 'SIG', '2022-11-20 20:21:03', '2022-11-20 20:21:03', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_designation`
--

CREATE TABLE `tbl_designation` (
  `id` int(11) NOT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT current_timestamp(),
  `deleted_flag` tinyint(4) DEFAULT 0,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_designation`
--

INSERT INTO `tbl_designation` (`id`, `created_date`, `updated_date`, `deleted_flag`, `name`) VALUES
(1, '2022-11-23 11:34:36', '2022-11-23 11:34:36', 0, 'DESIGNATION 1'),
(2, '2022-11-23 11:34:36', '2022-11-23 11:34:36', 0, 'DESIGNATION 2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_end_user`
--

CREATE TABLE `tbl_end_user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT current_timestamp(),
  `deleted_flag` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_end_user`
--

INSERT INTO `tbl_end_user` (`id`, `name`, `created_date`, `updated_date`, `deleted_flag`) VALUES
(1, 'AGH', '2022-11-25 14:47:50', '2022-11-25 14:47:50', 0),
(2, 'ARMOR DIV', '2022-11-25 14:47:50', '2022-11-25 14:47:50', 0),
(3, 'HPA', '2022-11-25 14:47:50', '2022-11-25 14:47:50', 0),
(4, 'PAMUs', '2022-11-25 14:47:50', '2022-11-25 14:47:50', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_expense_class`
--

CREATE TABLE `tbl_expense_class` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT current_timestamp(),
  `deleted_flag` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_expense_class`
--

INSERT INTO `tbl_expense_class` (`id`, `name`, `created_date`, `updated_date`, `deleted_flag`) VALUES
(1, 'CO', '2022-11-20 20:25:09', '2022-11-20 20:25:09', 0),
(2, 'MODE', '2022-11-20 20:25:09', '2022-11-20 20:25:09', 0),
(3, 'PS', '2022-11-20 20:25:09', '2022-11-20 20:25:09', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_implementing_unit`
--

CREATE TABLE `tbl_implementing_unit` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT current_timestamp(),
  `deleted_flag` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_implementing_unit`
--

INSERT INTO `tbl_implementing_unit` (`id`, `name`, `created_date`, `updated_date`, `deleted_flag`) VALUES
(1, 'ARMOR', '2022-11-20 20:19:37', '2022-11-20 20:19:37', 0),
(2, 'ASCOM', '2022-11-20 20:19:37', '2022-11-20 20:19:37', 0),
(3, 'HHSG', '2022-11-20 20:19:37', '2022-11-20 20:19:37', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_local`
--

CREATE TABLE `tbl_local` (
  `id` int(11) NOT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT current_timestamp(),
  `deleted_flag` tinyint(4) DEFAULT 0,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_local`
--

INSERT INTO `tbl_local` (`id`, `created_date`, `updated_date`, `deleted_flag`, `name`) VALUES
(1, '2022-11-20 20:54:39', '2022-11-20 20:54:39', 0, 'LC'),
(2, '2022-11-20 20:54:39', '2022-11-20 20:54:39', 0, 'LOCAL');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mode_of_proc`
--

CREATE TABLE `tbl_mode_of_proc` (
  `id` int(11) NOT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT current_timestamp(),
  `deleted_flag` tinyint(4) DEFAULT 0,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_mode_of_proc`
--

INSERT INTO `tbl_mode_of_proc` (`id`, `created_date`, `updated_date`, `deleted_flag`, `name`) VALUES
(1, '2022-11-20 20:26:57', '2022-11-20 20:26:57', 0, 'PUBLIC BIDDING'),
(2, '2022-11-20 20:26:57', '2022-11-20 20:26:57', 0, 'NEGOTATION');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pabac`
--

CREATE TABLE `tbl_pabac` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT current_timestamp(),
  `deleted_flag` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_pabac`
--

INSERT INTO `tbl_pabac` (`id`, `name`, `created_date`, `updated_date`, `deleted_flag`) VALUES
(1, 'ARMORSBAC', '2022-11-20 20:23:17', '2022-11-20 20:23:17', 0),
(2, 'PABAC1', '2022-11-20 20:23:17', '2022-11-20 20:23:17', 0),
(3, 'PABAC2', '2022-11-20 20:23:17', '2022-11-20 20:23:17', 0),
(4, 'PABAC3', '2022-11-20 20:23:17', '2022-11-20 20:23:17', 0),
(5, 'test', '2022-11-28 15:19:28', '2022-11-28 15:19:28', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_program_manager`
--

CREATE TABLE `tbl_program_manager` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT current_timestamp(),
  `deleted_flag` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_program_manager`
--

INSERT INTO `tbl_program_manager` (`id`, `name`, `created_date`, `updated_date`, `deleted_flag`) VALUES
(1, 'HPAG1', '2022-11-20 20:23:35', '2022-11-20 20:23:35', 0),
(2, 'HPAG4', '2022-11-20 20:23:35', '2022-11-20 20:23:35', 0),
(3, 'HPAG6', '2022-11-20 20:23:35', '2022-11-20 20:23:35', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project`
--

CREATE TABLE `tbl_project` (
  `id` int(11) NOT NULL,
  `status_id` int(11) DEFAULT NULL,
  `epa` int(11) DEFAULT NULL,
  `implementing_unit_id` int(11) DEFAULT NULL,
  `pabac_id` int(11) DEFAULT NULL,
  `pabac_nr` text DEFAULT NULL,
  `upr_nr` text DEFAULT NULL,
  `upr_date` text DEFAULT NULL,
  `comodity_id` int(11) DEFAULT NULL,
  `program_manager_id` int(11) DEFAULT NULL,
  `project_description` text DEFAULT NULL,
  `qty` varchar(255) DEFAULT NULL,
  `unit_id` int(11) DEFAULT NULL,
  `abc` decimal(13,2) DEFAULT NULL,
  `gaa` varchar(256) DEFAULT NULL,
  `contract_nr` varchar(255) DEFAULT NULL,
  `contract_price` decimal(13,2) DEFAULT NULL,
  `residuals` decimal(13,2) DEFAULT NULL,
  `end_user` varchar(255) DEFAULT NULL,
  `mode_of_proc_id` int(11) DEFAULT NULL,
  `preproc_target_date` date DEFAULT NULL,
  `preproc_conducted_date` date DEFAULT NULL,
  `prebid_target_date` date DEFAULT NULL,
  `prebid_conducted_date` date DEFAULT NULL,
  `sobe_target_date` date DEFAULT NULL,
  `sobe_conducted_date` date DEFAULT NULL,
  `no_bidder` tinyint(4) DEFAULT 0,
  `pq_target_date` date DEFAULT NULL,
  `pq_conducted_date` date DEFAULT NULL,
  `pqr_conducted_date` date DEFAULT NULL,
  `noa_conducted_date` date DEFAULT NULL,
  `ors_conducted_date` date DEFAULT NULL,
  `ntp_conducted_date` date DEFAULT NULL,
  `ntp_conforme_conducted_date` date DEFAULT NULL,
  `delivery_period` varchar(255) DEFAULT NULL,
  `ldd` date DEFAULT NULL,
  `delivery_conducted_date` varchar(255) DEFAULT NULL,
  `inspected_conducted_date` varchar(255) DEFAULT NULL,
  `accepted_conducted_date` varchar(255) DEFAULT NULL,
  `dv` int(11) DEFAULT NULL,
  `amount` decimal(13,2) DEFAULT NULL,
  `accepted_date_1` date DEFAULT NULL,
  `retention_percent` varchar(255) DEFAULT NULL,
  `retention_amount` varchar(255) DEFAULT NULL,
  `accepted_date_2` date DEFAULT NULL,
  `ld_amount` decimal(13,2) DEFAULT NULL,
  `total` decimal(13,2) DEFAULT NULL,
  `app_file` varchar(255) DEFAULT NULL,
  `ppmp_file` varchar(255) DEFAULT NULL,
  `procurement_file` varchar(255) DEFAULT NULL,
  `tech_specs_file` varchar(255) DEFAULT NULL,
  `bidding_file` varchar(255) DEFAULT NULL,
  `upr_file` varchar(255) DEFAULT NULL,
  `other_file` varchar(255) DEFAULT NULL,
  `officer_id` varchar(255) DEFAULT NULL,
  `personell_ids` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT current_timestamp(),
  `deleted_flag` tinyint(4) DEFAULT 0,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_project`
--

INSERT INTO `tbl_project` (`id`, `status_id`, `epa`, `implementing_unit_id`, `pabac_id`, `pabac_nr`, `upr_nr`, `upr_date`, `comodity_id`, `program_manager_id`, `project_description`, `qty`, `unit_id`, `abc`, `gaa`, `contract_nr`, `contract_price`, `residuals`, `end_user`, `mode_of_proc_id`, `preproc_target_date`, `preproc_conducted_date`, `prebid_target_date`, `prebid_conducted_date`, `sobe_target_date`, `sobe_conducted_date`, `no_bidder`, `pq_target_date`, `pq_conducted_date`, `pqr_conducted_date`, `noa_conducted_date`, `ors_conducted_date`, `ntp_conducted_date`, `ntp_conforme_conducted_date`, `delivery_period`, `ldd`, `delivery_conducted_date`, `inspected_conducted_date`, `accepted_conducted_date`, `dv`, `amount`, `accepted_date_1`, `retention_percent`, `retention_amount`, `accepted_date_2`, `ld_amount`, `total`, `app_file`, `ppmp_file`, `procurement_file`, `tech_specs_file`, `bidding_file`, `upr_file`, `other_file`, `officer_id`, `personell_ids`, `created_date`, `updated_date`, `deleted_flag`, `created_by`, `updated_by`) VALUES
(21, 1, 0, 1, 1, '', 'test', '2022-11-09', 1, 1, 'test', '78', 1, '5000.00', NULL, 'test', '3000.00', '2000.00', '2,3', 1, '2022-12-06', '2022-11-24', '2022-12-01', '2022-11-16', '2022-11-21', '2022-11-16', 1, '2022-11-21', '2022-11-16', '2022-11-16', '2022-11-18', '2022-11-16', '2022-11-16', '2022-11-16', '1970-01-01', '2022-11-23', '01-01-1970', '1970-01-01', '1970-01-01', 0, '0.00', '2022-11-16', '10', '300.00', '2022-11-16', '0.00', '0.00', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '2', '3', '2022-11-20 23:20:59', '2022-11-30 18:54:02', 0, 1, 1),
(22, 1, 1, 1, 1, 'test', 'test', '2022-11-16', 1, 1, 'test', '123', 1, '0.00', NULL, NULL, NULL, NULL, '2', 1, '2022-11-16', '2022-11-16', '2022-12-05', '2022-11-04', '2022-11-18', '0000-00-00', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'null', 'null', 'null', 'null', 'null', 'null', 'null', '1', '3', '2022-11-21 00:34:06', '2022-11-28 17:32:40', 0, 1, 1),
(23, 1, 1, 1, 1, 'asd', 'asdas', '2022-11-16', 1, 1, 'asdas', '123', 1, '0.00', NULL, NULL, NULL, NULL, 'tes', 1, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'file_20221121004643.xlsx', NULL, NULL, NULL, NULL, NULL, NULL, '1', '3', '2022-11-21 00:46:43', '2022-11-21 00:46:43', 0, 1, NULL),
(24, 1, 1, 1, 1, 'asd', 'asdas', '2022-11-16', 1, 1, 'asdas', '123', 1, '0.00', NULL, NULL, NULL, NULL, 'tes', 1, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'file_20221121004728.xlsx', NULL, NULL, NULL, NULL, NULL, NULL, '1', '3', '2022-11-21 00:47:28', '2022-11-21 00:47:28', 0, 1, NULL),
(25, 1, 1, 1, 1, 'asd', 'asdas', '2022-11-16', 1, 1, 'asdas', '123', 1, '0.00', NULL, NULL, NULL, NULL, 'tes', 1, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'file_20221121004824.xlsx', NULL, NULL, NULL, NULL, NULL, NULL, '1', '3', '2022-11-21 00:48:24', '2022-11-21 00:48:24', 0, 1, NULL),
(26, 1, 1, 1, 1, 'test', 'test', '2022-11-02', 1, 1, 'test', '23', 1, '0.00', NULL, NULL, NULL, NULL, 'test', 1, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '3', '2022-11-23 14:59:20', '2022-11-23 14:59:20', 0, 1, NULL),
(27, 1, 1, 1, 1, 'test', 'test', '2022-11-02', 1, 1, 'test', '23', 1, '0.00', NULL, NULL, NULL, NULL, 'test', 1, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '3', '2022-11-23 15:45:31', '2022-11-23 15:45:31', 1, 1, NULL),
(28, 1, 1, 1, 1, 'test', 'test', '2022-11-11', 1, 1, 'test', '232', 1, '200.00', NULL, '', '12.00', '0.00', '4', 1, '2022-11-16', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '', '2022-11-25 18:06:59', '2022-11-25 18:06:59', 0, 0, NULL),
(33, 1, 1, 1, 1, 'test', 'test', '2022-11-11', 1, 1, 'test', '232', 1, '200.00', NULL, '', '12.00', '0.00', '4', 1, '2022-11-16', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '3', '2022-11-25 18:23:28', '2022-11-25 18:23:28', 1, 1, NULL),
(34, 1, 1, 1, 1, 'aasd', '', NULL, 1, 1, 'sdsad', '23', 1, '0.00', NULL, '', '0.00', '0.00', '3', 1, '2022-11-16', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '3', '2022-11-28 14:26:51', '2022-11-28 14:26:51', 0, 1, NULL),
(35, 4, 1, 1, 1, 'test', '', NULL, 1, 1, 'test', '23', 1, NULL, NULL, NULL, NULL, NULL, '4', 1, '2022-12-02', '2022-11-16', '2022-12-05', NULL, '2022-12-12', NULL, 0, '0000-00-00', NULL, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '0000-00-00', '11/28/2022 - 11/28/2022', '11/28/2022 - 11/28/2022', '11/28/2022 - 11/28/2022', 0, '0.00', '0000-00-00', '1', '', '0000-00-00', '0.00', '0.00', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '1', '3', '2022-11-28 14:30:54', '2022-11-28 16:09:13', 0, 1, 1),
(36, 4, 1, 1, 1, 'test', '', NULL, 1, 1, 'test', '233', 1, NULL, NULL, NULL, NULL, NULL, '3,4', 1, '2022-11-17', '2022-11-17', '2022-12-05', '0000-00-00', '2022-12-12', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'null', 'null', 'null', 'null', 'null', 'null', 'null', '1', '3', '2022-11-28 17:24:39', '2022-11-28 17:26:43', 0, 1, 1),
(37, 1, 1, 1, 1, 'test', '', NULL, 1, 1, 'test', '23', 1, '0.00', NULL, '', '0.00', '0.00', '3', 1, '2022-11-28', '0000-00-00', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', '3', '2022-11-28 18:37:30', '2022-11-28 18:37:30', 0, 1, NULL),
(38, 1, 1, 1, 1, 'test', '', NULL, 1, 1, 'test', '23', 1, '0.00', NULL, '', '0.00', '0.00', '3', 1, '2022-11-28', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', '3', '2022-11-28 18:38:13', '2022-11-28 18:38:13', 0, 1, NULL),
(41, 1, 0, 1, 1, 'assdasd', '', NULL, 1, 1, 'test', '23', 1, '0.00', NULL, '', '0.00', '0.00', '3', 1, '2022-11-28', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '350,351,352', '3', '2022-11-30 19:50:01', '2022-11-30 19:50:01', 0, 3, NULL),
(43, 1, 0, 1, 1, 'assdasd', '', NULL, 1, 1, 'test', '23', 1, '0.00', NULL, '', '0.00', '0.00', '3', 1, '2022-11-28', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '350,351,352', '3', '2022-11-30 19:51:50', '2022-11-30 19:51:50', 0, 3, NULL),
(50, 1, 0, 1, 1, 'assdasd', '', NULL, 1, 1, 'test', '23', 1, '0.00', NULL, '', '0.00', '0.00', '3', 1, '2022-11-28', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '350,351,352', '3', '2022-11-30 19:58:52', '2022-11-30 19:58:52', 0, 3, NULL),
(51, 1, 0, 1, 1, 'assdasd', '', NULL, 1, 1, 'test', '23', 1, '0.00', NULL, '', '0.00', '0.00', '3', 1, '2022-11-28', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '350,351,352', '3', '2022-11-30 19:59:34', '2022-11-30 19:59:34', 0, 3, NULL),
(52, 15, 1, 1, 1, '', '', '1970-01-01', 1, 1, 'test', '23', 1, '900.00', NULL, 'test', '100.00', '800.00', '3', 1, '2022-11-28', '2022-12-28', '2023-01-04', '2022-11-24', '2022-12-02', '2022-12-14', 1, '2022-12-19', '2022-12-13', '2022-07-14', '1970-01-15', '1970-01-22', '1970-01-22', '1970-01-01', '1970-01-01', '2022-12-14', '2022-12-15', '1970-01-01', '1970-01-01', 0, '0.00', '1970-01-01', '10', '10.00', '1970-01-01', '0.00', '0.00', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '352', '3', '2022-11-30 19:59:58', '2022-12-01 14:31:54', 0, 3, 3),
(53, 7, 1, 1, 1, '', '', '06-12-2022,23-12-2022,09-12-2022', 1, 1, 'test', '23', 1, '9000.00', NULL, '343434', '500.00', '8500.00', '2,4', 1, '2022-12-13', '2022-12-22', '2022-12-29', '2022-12-01', '2022-12-14', '2022-12-15', 0, '2022-12-20', '2022-12-13', '2022-12-21', '2022-12-15', '2022-12-21', '2022-12-23', '2022-12-15', '3', '2022-12-26', '2022-12-15', '2022-12-08', '2022-12-09', 1, '300.00', '2022-12-14', '10', '50.00', '2022-12-24', '600.00', '350.00', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '350,351,352', '3', '2022-12-02 10:03:20', '2022-12-04 13:49:47', 0, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project_asa`
--

CREATE TABLE `tbl_project_asa` (
  `id` int(11) NOT NULL,
  `project_id` int(11) DEFAULT NULL,
  `asa_nr` varchar(255) DEFAULT NULL,
  `asa_date` date DEFAULT NULL,
  `object_code` varchar(255) DEFAULT NULL,
  `asa_amount` varchar(255) DEFAULT NULL,
  `expense_class_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT current_timestamp(),
  `deleted_flag` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_project_asa`
--

INSERT INTO `tbl_project_asa` (`id`, `project_id`, `asa_nr`, `asa_date`, `object_code`, `asa_amount`, `expense_class_id`, `created_by`, `created_date`, `updated_date`, `deleted_flag`) VALUES
(1, 1, 'asd', '2022-12-01', 'asd', '2323', 1, 1, '2022-11-25 18:12:39', '2022-11-25 18:12:39', 0),
(6, 33, 'asd', '2022-12-01', 'asd', '2323', 1, 1, '2022-11-25 18:23:28', '2022-11-25 18:23:28', 0),
(49, 21, 'test', '2022-11-20', 'test', '123', 1, 1, '2022-11-30 18:54:02', '2022-11-30 18:54:02', 0),
(50, 50, 'asa 1', '1901-11-29', 'asa 1', '3333333.33', 1, 3, '2022-11-30 19:58:52', '2022-11-30 19:58:52', 0),
(51, 51, 'asa 1', '1901-11-29', 'asa 1', '3333333.33', 1, 3, '2022-11-30 19:59:34', '2022-11-30 19:59:34', 0),
(87, 52, 'asa 1', '1901-11-29', 'asa 1', '3333333.33', 1, 3, '2022-12-01 14:31:54', '2022-12-01 14:31:54', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project_bidder`
--

CREATE TABLE `tbl_project_bidder` (
  `id` int(11) NOT NULL,
  `project_id` int(11) DEFAULT NULL,
  `rank` varchar(255) DEFAULT NULL,
  `supplier` varchar(255) DEFAULT NULL,
  `local_id` int(11) DEFAULT NULL,
  `price` decimal(13,2) DEFAULT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT current_timestamp(),
  `deleted_flag` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_project_bidder`
--

INSERT INTO `tbl_project_bidder` (`id`, `project_id`, `rank`, `supplier`, `local_id`, `price`, `created_date`, `updated_date`, `deleted_flag`) VALUES
(14, 53, '1', 'SUPPLIER 1', 1, '3232.32', '2022-12-04 13:45:30', '2022-12-04 13:45:30', 0),
(15, 53, '2', 'SUPPLIER 2', 1, '2323.32', '2022-12-04 13:45:30', '2022-12-04 13:45:30', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project_history`
--

CREATE TABLE `tbl_project_history` (
  `id` int(11) NOT NULL,
  `project_id` int(11) DEFAULT NULL,
  `project_status_id` int(11) DEFAULT NULL,
  `conducted_date` text DEFAULT NULL,
  `remarks` text DEFAULT NULL,
  `other_details` text DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT current_timestamp(),
  `deleted_flag` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_project_history`
--

INSERT INTO `tbl_project_history` (`id`, `project_id`, `project_status_id`, `conducted_date`, `remarks`, `other_details`, `created_by`, `created_date`, `updated_date`, `deleted_flag`) VALUES
(1, 21, 1, NULL, NULL, NULL, 1, '2022-11-20 23:20:59', '2022-11-20 23:20:59', 0),
(2, 22, 1, NULL, NULL, NULL, 1, '2022-11-21 00:34:06', '2022-11-21 00:34:06', 0),
(3, 23, 1, NULL, NULL, NULL, 1, '2022-11-21 00:46:43', '2022-11-21 00:46:43', 0),
(4, 24, 1, NULL, NULL, NULL, 1, '2022-11-21 00:47:28', '2022-11-21 00:47:28', 0),
(5, 25, 1, NULL, NULL, NULL, 1, '2022-11-21 00:48:24', '2022-11-21 00:48:24', 0),
(6, 26, 1, NULL, NULL, NULL, 1, '2022-11-23 14:59:20', '2022-11-23 14:59:20', 0),
(7, 27, 1, NULL, NULL, NULL, 1, '2022-11-23 15:45:31', '2022-11-23 15:45:31', 0),
(13, 33, 1, NULL, 'Project Initialize', NULL, 1, '2022-11-25 18:23:28', '2022-11-25 18:23:28', 0),
(17, 21, 2, NULL, 'test', NULL, 1, '2022-11-28 10:17:48', '2022-11-28 10:17:48', 0),
(20, 21, 4, NULL, 'test', NULL, 1, '2022-11-28 10:20:51', '2022-11-28 10:20:51', 0),
(21, 21, 5, NULL, 'rwar', NULL, 1, '2022-11-28 10:21:34', '2022-11-28 10:21:34', 0),
(22, 21, 4, NULL, 'test', NULL, 1, '2022-11-28 10:50:08', '2022-11-28 10:50:08', 0),
(23, 21, 6, NULL, 'mali', NULL, 1, '2022-11-28 10:50:15', '2022-11-28 10:50:15', 0),
(24, 21, 2, NULL, 'test', NULL, 1, '2022-11-28 10:50:31', '2022-11-28 10:50:31', 0),
(25, 34, 1, NULL, 'Project Initialize', NULL, 1, '2022-11-28 14:26:51', '2022-11-28 14:26:51', 0),
(26, 35, 1, NULL, 'Project Initialize', NULL, 1, '2022-11-28 14:30:54', '2022-11-28 14:30:54', 0),
(27, 35, 2, NULL, '', NULL, 1, '2022-11-28 16:09:04', '2022-11-28 16:09:04', 0),
(28, 35, 4, NULL, '', NULL, 1, '2022-11-28 16:09:13', '2022-11-28 16:09:13', 0),
(29, 22, 2, NULL, '', NULL, 1, '2022-11-28 16:38:04', '2022-11-28 16:38:04', 0),
(30, 22, 4, NULL, '', NULL, 1, '2022-11-28 16:39:09', '2022-11-28 16:39:09', 0),
(31, 36, 1, NULL, 'Project Initialize', NULL, 1, '2022-11-28 17:24:39', '2022-11-28 17:24:39', 0),
(32, 36, 2, NULL, '', NULL, 1, '2022-11-28 17:24:50', '2022-11-28 17:24:50', 0),
(33, 36, 4, NULL, '', NULL, 1, '2022-11-28 17:26:43', '2022-11-28 17:26:43', 0),
(34, 22, 1, NULL, '', NULL, 1, '2022-11-28 17:32:01', '2022-11-28 17:32:01', 0),
(35, 22, 2, NULL, '', NULL, 1, '2022-11-28 17:32:40', '2022-11-28 17:32:40', 0),
(36, 37, 1, NULL, 'Project Initialize', NULL, 1, '2022-11-28 18:37:30', '2022-11-28 18:37:30', 0),
(37, 38, 1, NULL, 'Project Initialize', NULL, 1, '2022-11-28 18:38:13', '2022-11-28 18:38:13', 0),
(38, 21, 2, NULL, '', NULL, 1, '2022-11-30 14:39:08', '2022-11-30 14:39:08', 0),
(39, 21, 4, NULL, '', NULL, 1, '2022-11-30 15:09:41', '2022-11-30 15:09:41', 0),
(40, 21, 6, '2022-11-30', '', NULL, 1, '2022-11-30 15:28:29', '2022-11-30 15:28:29', 0),
(41, 21, 6, '2022-11-30', '', NULL, 1, '2022-11-30 15:29:01', '2022-11-30 15:29:01', 0),
(42, 21, 4, '30/11/-0001', '', NULL, 1, '2022-11-30 15:30:04', '2022-11-30 15:30:04', 0),
(43, 21, 5, '30/11/-0001', '', NULL, 1, '2022-11-30 15:49:00', '2022-11-30 15:49:00', 0),
(44, 21, 6, '2022-11-30', '', NULL, 1, '2022-11-30 16:21:23', '2022-11-30 16:21:23', 0),
(45, 21, 3, '2022-11-30', '', NULL, 1, '2022-11-30 16:38:28', '2022-11-30 16:38:28', 0),
(46, 21, 3, '2022-11-30', '', NULL, 1, '2022-11-30 16:38:48', '2022-11-30 16:38:48', 0),
(47, 21, 1, '2022-11-30', '', NULL, 1, '2022-11-30 16:39:20', '2022-11-30 16:39:20', 0),
(48, 21, 2, '2022-11-24', '', NULL, 1, '2022-11-30 16:51:43', '2022-11-30 16:51:43', 0),
(49, 21, 4, '2022-11-16', '', NULL, 1, '2022-11-30 16:53:01', '2022-11-30 16:53:01', 0),
(50, 21, 5, '2022-11-16', '', NULL, 1, '2022-11-30 16:53:24', '2022-11-30 16:53:24', 0),
(51, 21, 7, '2022-11-16', '', NULL, 1, '2022-11-30 16:53:36', '2022-11-30 16:53:36', 0),
(52, 21, 8, '2022-11-16', '', NULL, 1, '2022-11-30 16:53:41', '2022-11-30 16:53:41', 0),
(53, 21, 9, '2022-11-16', '', NULL, 1, '2022-11-30 16:54:07', '2022-11-30 16:54:07', 0),
(54, 21, 10, '2022-11-30', '', NULL, 1, '2022-11-30 16:54:12', '2022-11-30 16:54:12', 0),
(55, 21, 11, '2022-11-30', '', NULL, 1, '2022-11-30 16:54:16', '2022-11-30 16:54:16', 0),
(56, 21, 12, '2022-11-16', '', NULL, 1, '2022-11-30 16:57:48', '2022-11-30 16:57:48', 0),
(57, 21, 13, '11/28/2022 - 11/28/2022', '', NULL, 1, '2022-11-30 17:03:54', '2022-11-30 17:03:54', 0),
(58, 21, 14, '2022-11-30', '', NULL, 1, '2022-11-30 17:08:09', '2022-11-30 17:08:09', 0),
(59, 21, 15, '1970-01-01', '', NULL, 1, '2022-11-30 17:12:59', '2022-11-30 17:12:59', 0),
(60, 21, 1, '2022-11-30', '', NULL, 1, '2022-11-30 18:54:02', '2022-11-30 18:54:02', 0),
(70, 50, 1, '2022-11-30', 'Project Initialize', NULL, 3, '2022-11-30 19:58:52', '2022-11-30 19:58:52', 0),
(71, 51, 1, '2022-11-30', 'Project Initialize', NULL, 3, '2022-11-30 19:59:34', '2022-11-30 19:59:34', 0),
(72, 52, 1, '2022-11-30', 'Project Initialize', NULL, 3, '2022-11-30 19:59:58', '2022-11-30 19:59:58', 0),
(73, 52, 2, '2022-11-23', '', NULL, 3, '2022-11-30 20:25:56', '2022-11-30 20:25:56', 0),
(74, 52, 4, '2022-11-24', '', NULL, 3, '2022-11-30 20:32:11', '2022-11-30 20:32:11', 0),
(75, 52, 5, '2022-12-14', '', NULL, 3, '2022-12-01 10:16:43', '2022-12-01 10:16:43', 0),
(76, 52, 7, '2022-12-21', '', NULL, 3, '2022-12-01 10:45:33', '2022-12-01 10:45:33', 0),
(77, 52, 8, '2022-07-14', '', NULL, 3, '2022-12-01 10:46:25', '2022-12-01 10:46:25', 0),
(78, 52, 9, '1970-01-15', '', NULL, 3, '2022-12-01 10:48:02', '2022-12-01 10:48:02', 0),
(79, 52, 10, '2022-12-01', '', NULL, 3, '2022-12-01 10:48:14', '2022-12-01 10:48:14', 0),
(80, 52, 11, '2022-12-01', '', NULL, 3, '2022-12-01 10:48:23', '2022-12-01 10:48:23', 0),
(81, 52, 12, '1970-01-22', '', NULL, 3, '2022-12-01 10:50:23', '2022-12-01 10:50:23', 0),
(82, 52, 13, '2022-12-15', '', NULL, 3, '2022-12-01 10:51:16', '2022-12-01 10:51:16', 0),
(83, 52, 14, '1970-01-01', '', NULL, 3, '2022-12-01 10:51:26', '2022-12-01 10:51:26', 0),
(84, 52, 15, '1970-01-01', '', NULL, 3, '2022-12-01 10:53:55', '2022-12-01 10:53:55', 0),
(85, 52, 6, '2022-12-01', '', NULL, 3, '2022-12-01 14:27:32', '2022-12-01 14:27:32', 0),
(86, 52, 3, '2022-12-01', '', NULL, 3, '2022-12-01 14:28:48', '2022-12-01 14:28:48', 0),
(87, 52, 3, '2022-12-01', '', NULL, 3, '2022-12-01 14:29:07', '2022-12-01 14:29:07', 0),
(88, 52, 1, '2022-12-01', '', NULL, 3, '2022-12-01 14:29:27', '2022-12-01 14:29:27', 0),
(89, 52, 2, '2022-12-28', '', NULL, 3, '2022-12-01 14:29:32', '2022-12-01 14:29:32', 0),
(90, 52, 4, '2022-11-24', '', NULL, 3, '2022-12-01 14:29:36', '2022-12-01 14:29:36', 0),
(91, 52, 6, '2022-12-01', '', NULL, 3, '2022-12-01 14:29:41', '2022-12-01 14:29:41', 0),
(92, 52, 5, '2022-12-14', '', NULL, 3, '2022-12-01 14:30:16', '2022-12-01 14:30:16', 0),
(93, 52, 7, '2022-12-13', '', '01-12-2022', 3, '2022-12-01 14:30:44', '2022-12-01 14:30:44', 0),
(94, 52, 17, '2022-12-01', 'test', NULL, 3, '2022-12-01 14:31:54', '2022-12-01 14:31:54', 0),
(95, 53, 1, '2022-12-02', 'Project Initialize', NULL, 3, '2022-12-02 10:03:20', '2022-12-02 10:03:20', 0),
(96, 53, 2, '2022-12-22', '', NULL, 3, '2022-12-02 10:08:02', '2022-12-02 10:08:02', 0),
(97, 53, 2, '2022-12-22', '', NULL, 3, '2022-12-02 10:09:04', '2022-12-02 10:09:04', 0),
(98, 53, 4, '2022-12-22', '', NULL, 3, '2022-12-02 10:09:21', '2022-12-02 10:09:21', 0),
(99, 53, 6, '2022-12-15', '', NULL, 3, '2022-12-02 10:09:40', '2022-12-02 10:09:40', 0),
(100, 53, 2, '2022-12-22', '', 'No Bidder', 3, '2022-12-02 10:15:13', '2022-12-02 10:15:13', 0),
(101, 53, 4, '2022-12-22', '', NULL, 3, '2022-12-02 10:15:29', '2022-12-02 10:15:29', 0),
(102, 53, 6, '2022-12-15', '', 'No Bidder', 3, '2022-12-02 10:17:28', '2022-12-02 10:17:28', 0),
(103, 53, 4, '2022-12-22', '', NULL, 3, '2022-12-02 10:17:34', '2022-12-02 10:17:34', 0),
(104, 53, 5, '2022-12-15', '', NULL, 3, '2022-12-02 10:20:11', '2022-12-02 10:20:11', 0),
(105, 53, 7, '2022-12-22', '', 'test', 3, '2022-12-02 10:20:34', '2022-12-02 10:20:34', 0),
(106, 53, 8, '2022-12-02', '', '', 3, '2022-12-02 10:21:56', '2022-12-02 10:21:56', 0),
(107, 53, 8, '2022-12-21', '', '', 3, '2022-12-02 10:24:16', '2022-12-02 10:24:16', 0),
(108, 53, 9, '2022-12-15', '', NULL, 3, '2022-12-02 10:25:00', '2022-12-02 10:25:00', 0),
(109, 53, 10, '2022-12-21', '', NULL, 3, '2022-12-02 10:25:14', '2022-12-02 10:25:14', 0),
(110, 53, 11, '2022-12-23', '', NULL, 3, '2022-12-02 10:25:21', '2022-12-02 10:25:21', 0),
(111, 53, 12, '2022-12-15', '', NULL, 3, '2022-12-02 10:42:45', '2022-12-02 10:42:45', 0),
(112, 53, 13, '2022-12-15', '', NULL, 3, '2022-12-02 10:45:45', '2022-12-02 10:45:45', 0),
(113, 53, 14, '2022-12-08', '', NULL, 3, '2022-12-02 10:45:53', '2022-12-02 10:45:53', 0),
(114, 53, 15, '2022-12-09', '', NULL, 3, '2022-12-02 10:52:24', '2022-12-02 10:52:24', 0),
(115, 53, 7, '2022-12-14', '', '6', 3, '2022-12-04 13:39:42', '2022-12-04 13:39:42', 0),
(116, 53, 7, '2022-12-14', '', '6', 3, '2022-12-04 13:40:10', '2022-12-04 13:40:10', 0),
(117, 53, 8, '2022-12-21', '', '10', 3, '2022-12-04 13:43:58', '2022-12-04 13:43:58', 0),
(118, 53, 17, '2022-12-22', '', NULL, 3, '2022-12-04 13:45:30', '2022-12-04 13:45:30', 0),
(119, 53, 7, '2022-12-14', '', '15', 3, '2022-12-04 13:47:04', '2022-12-04 13:47:04', 0),
(120, 53, 5, '2022-12-15', '', NULL, 3, '2022-12-04 13:49:37', '2022-12-04 13:49:37', 0),
(121, 53, 7, '2022-12-13', '', '14', 3, '2022-12-04 13:49:47', '2022-12-04 13:49:47', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project_status`
--

CREATE TABLE `tbl_project_status` (
  `id` int(11) NOT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT current_timestamp(),
  `deleted_flag` tinyint(4) DEFAULT 0,
  `name` varchar(255) DEFAULT NULL,
  `next_ids` varchar(45) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `color` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_project_status`
--

INSERT INTO `tbl_project_status` (`id`, `created_date`, `updated_date`, `deleted_flag`, `name`, `next_ids`, `type`, `color`) VALUES
(1, '2022-11-20 20:28:14', '2022-11-20 20:28:14', 0, 'FOR PREPROC', '2,3', '1', 'success'),
(2, '2022-11-20 20:28:14', '2022-11-20 20:28:14', 0, 'PREPROC - PASSED', '4', '1', 'success'),
(3, '2022-11-20 20:28:14', '2022-11-20 20:28:14', 0, 'PREPROC - FAILED', '1', '0', 'danger'),
(4, '2022-11-20 20:28:14', '2022-11-20 20:28:14', 0, 'PRE-BID', '5,6', '1', 'success'),
(5, '2022-11-20 20:28:14', '2022-11-20 20:28:14', 0, 'SOBE - PASSED', '7,17', '1', 'success'),
(6, '2022-11-20 20:28:14', '2022-11-20 20:28:14', 0, 'SOBE - FAILED', '2,3,4,5', '0', 'danger'),
(7, '2022-11-20 20:28:14', '2022-11-20 20:28:14', 0, 'PQ - PASSED', '8', '1', 'success'),
(8, '2022-11-20 20:28:14', '2022-11-20 20:28:14', 0, 'PQR', '9', '1', 'success'),
(9, '2022-11-20 20:28:14', '2022-11-20 20:28:14', 0, 'NOA', '10', '1', 'success'),
(10, '2022-11-20 20:28:14', '2022-11-20 20:28:14', 0, 'ORS', '11', '1', 'success'),
(11, '2022-11-20 20:28:14', '2022-11-20 20:28:14', 0, 'NTP', '12', '1', 'success'),
(12, '2022-11-20 20:28:14', '2022-11-20 20:28:14', 0, 'NTP CONFORME', '13', '1', 'success'),
(13, '2022-11-20 20:28:14', '2022-11-20 20:28:14', 0, 'DELIVERY', '14', '1', 'success'),
(14, '2022-11-25 10:47:30', '2022-11-25 10:47:30', 0, 'INSPECTED', '15', '1', 'success'),
(15, '2022-11-28 16:30:56', '2022-11-28 16:30:56', 0, 'ACCEPTED', '0', '1', 'success'),
(17, '2022-12-01 10:34:02', '2022-12-01 10:34:02', 0, 'PQ - FAILED', '7,17', '1', 'danger');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project_supplier`
--

CREATE TABLE `tbl_project_supplier` (
  `id` int(11) NOT NULL,
  `project_id` int(11) DEFAULT NULL,
  `price` decimal(13,2) DEFAULT NULL,
  `local_id` int(11) DEFAULT NULL,
  `supplier` varchar(255) DEFAULT NULL,
  `rank` varchar(255) DEFAULT NULL,
  `status_id` int(11) DEFAULT 1,
  `conducted_date` date DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT current_timestamp(),
  `deleted_flag` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_project_supplier`
--

INSERT INTO `tbl_project_supplier` (`id`, `project_id`, `price`, `local_id`, `supplier`, `rank`, `status_id`, `conducted_date`, `created_by`, `created_date`, `updated_date`, `deleted_flag`) VALUES
(4, 23, '123.00', 1, 'supplier 1', '1', 5, '2022-11-30', NULL, '2022-11-21 00:46:43', '2022-11-21 00:46:43', 0),
(5, 24, '123.00', 1, 'supplier 1', '1', 5, '2022-11-30', NULL, '2022-11-21 00:47:28', '2022-11-21 00:47:28', 0),
(6, 25, '123.00', 1, 'supplier 1', '1', 5, '2022-11-30', NULL, '2022-11-21 00:48:24', '2022-11-21 00:48:24', 0),
(7, 33, '2323.00', 1, 'supplier 1', '1', 5, '2022-11-30', 1, '2022-11-25 18:23:28', '2022-11-25 18:23:28', 0),
(74, 21, '12.12', 1, 'supplier 1', '1', 5, '2022-11-30', 1, '2022-11-30 18:54:02', '2022-11-30 18:54:02', 0),
(83, 52, '0.00', 1, 'supplier 1', '1', 5, '2022-11-30', 3, '2022-12-01 10:53:55', '2022-12-01 10:53:55', 0),
(84, 52, '3243.43', 1, '01-12-2022', NULL, 7, '2022-12-13', 3, '2022-12-01 14:30:44', '2022-12-01 14:30:44', 0),
(85, 53, '33.33', 1, 'test', NULL, 7, '2022-12-22', 3, '2022-12-02 10:20:34', '2022-12-02 10:20:34', 0),
(86, 53, '0.00', 0, '', NULL, 7, '2022-12-14', 3, '2022-12-04 13:39:42', '2022-12-04 13:39:42', 0),
(87, 53, '0.00', 0, '', NULL, 7, '2022-12-14', 3, '2022-12-04 13:40:10', '2022-12-04 13:40:10', 0),
(88, 53, '0.00', 0, '', NULL, 17, '2022-12-22', 3, '2022-12-04 13:45:30', '2022-12-04 13:45:30', 0),
(89, 53, '0.00', 0, '', NULL, 7, '2022-12-14', 3, '2022-12-04 13:47:04', '2022-12-04 13:47:04', 0),
(90, 53, '3232.32', 1, 'SUPPLIER 1', NULL, 7, '2022-12-13', 3, '2022-12-04 13:49:47', '2022-12-04 13:49:47', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project_twg`
--

CREATE TABLE `tbl_project_twg` (
  `id` int(11) NOT NULL,
  `project_id` int(11) DEFAULT NULL,
  `rank_id` int(11) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `suffix_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL,
  `serial_no` varchar(255) DEFAULT NULL,
  `designation_id` int(11) DEFAULT NULL,
  `authority` text DEFAULT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT current_timestamp(),
  `deleted_flag` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_project_twg`
--

INSERT INTO `tbl_project_twg` (`id`, `project_id`, `rank_id`, `first_name`, `middle_name`, `last_name`, `suffix_id`, `branch_id`, `serial_no`, `designation_id`, `authority`, `created_date`, `updated_date`, `deleted_flag`) VALUES
(4, 27, 1, 'tes', 'test', 'tes', 1, 1, '123123', 1, NULL, '2022-11-23 15:45:31', '2022-11-23 15:45:31', 0),
(5, 1, 1, 'asdas', '', 'asd', 1, 1, 'asd', 1, 'asd', '2022-11-25 18:13:46', '2022-11-25 18:13:46', 0),
(6, 33, 1, 'asdas', '', 'asd', 1, 1, 'asd', 1, 'asd', '2022-11-25 18:23:28', '2022-11-25 18:23:28', 0),
(178, 21, 1, 'test', 'test', 'test', 1, 1, '1231232', 1, '', '2022-11-30 18:54:02', '2022-11-30 18:54:02', 0),
(179, 21, 1, 'tes', 'test', 'tes', 1, 1, '123123', 1, '', '2022-11-30 18:54:02', '2022-11-30 18:54:02', 0),
(180, 21, 1, 'test', 'test', 'test', 1, 1, '1231232', 1, '', '2022-11-30 18:54:02', '2022-11-30 18:54:02', 0),
(223, 53, 1, 'test', 'test', 'test', 1, 1, '2323', 1, 'test', '2022-12-04 13:49:47', '2022-12-04 13:49:47', 0),
(224, 53, 1, 'test', 'test', 'test', 1, 1, '23232', 1, 'test', '2022-12-04 13:49:47', '2022-12-04 13:49:47', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rank`
--

CREATE TABLE `tbl_rank` (
  `id` int(11) NOT NULL,
  `classification_id` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT current_timestamp(),
  `deleted_flag` tinyint(4) DEFAULT 0,
  `name` varchar(255) DEFAULT NULL,
  `color` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_rank`
--

INSERT INTO `tbl_rank` (`id`, `classification_id`, `created_date`, `updated_date`, `deleted_flag`, `name`, `color`) VALUES
(1, 2, '2022-11-22 17:22:04', '2022-11-22 17:22:04', 0, 'Private First Class', 'black'),
(2, 2, '2022-11-22 17:22:04', '2022-11-22 17:22:04', 0, 'Corporal', 'black'),
(3, 2, '2022-11-22 17:22:04', '2022-11-22 17:22:04', 0, 'Sergeant', 'black'),
(4, 2, '2022-11-22 17:22:04', '2022-11-22 17:22:04', 0, 'Staff Sergeant', 'black'),
(5, 2, '2022-11-22 17:22:04', '2022-11-22 17:22:04', 0, 'Technical Sergeant', 'black'),
(6, 2, '2022-11-22 17:22:04', '2022-11-22 17:22:04', 0, 'Master Sergeant', 'black'),
(7, 2, '2022-11-22 17:22:04', '2022-11-22 17:22:04', 0, 'Senior Master Sergeant', 'black'),
(8, 2, '2022-11-22 17:22:04', '2022-11-22 17:22:04', 0, 'Chief Master Sergeant', 'black'),
(9, 2, '2022-11-22 17:22:04', '2022-11-22 17:22:04', 0, 'First Chief Master Sergeant', 'black'),
(10, 1, '2022-11-22 17:22:04', '2022-11-22 17:22:04', 0, 'Second Lieutenant', 'red'),
(11, 1, '2022-11-22 17:22:04', '2022-11-22 17:22:04', 0, 'First Lieutenant', 'red'),
(12, 1, '2022-11-22 17:22:04', '2022-11-22 17:22:04', 0, 'Captain', 'red'),
(13, 1, '2022-11-22 17:22:04', '2022-11-22 17:22:04', 0, 'Major', 'red'),
(14, 1, '2022-11-22 17:22:04', '2022-11-22 17:22:04', 0, 'Lieutenant Colonel', 'red'),
(15, 1, '2022-11-22 17:22:04', '2022-11-22 17:22:04', 0, 'Colonel', 'red'),
(16, 1, '2022-11-22 17:22:04', '2022-11-22 17:22:04', 0, 'Brigadier General', 'red'),
(17, 1, '2022-11-22 17:22:04', '2022-11-22 17:22:04', 0, 'Major General', 'red'),
(18, 1, '2022-11-22 17:22:04', '2022-11-22 17:22:04', 0, 'Lieutenant General', 'red'),
(19, 1, '2022-11-22 17:22:04', '2022-11-22 17:22:04', 0, 'General', 'red');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_suffix`
--

CREATE TABLE `tbl_suffix` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `deleted_flag` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_suffix`
--

INSERT INTO `tbl_suffix` (`id`, `name`, `deleted_flag`) VALUES
(1, 'None', 0),
(2, 'Jr.', 0),
(3, 'Jr. II', 0),
(4, 'Sr.', 0),
(5, 'II', 0),
(6, 'III', 0),
(7, 'IV', 0),
(8, 'V', 0),
(9, 'VI', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_supplier_status`
--

CREATE TABLE `tbl_supplier_status` (
  `id` int(11) NOT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT current_timestamp(),
  `deleted_flag` tinyint(4) DEFAULT 0,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_supplier_status`
--

INSERT INTO `tbl_supplier_status` (`id`, `created_date`, `updated_date`, `deleted_flag`, `name`) VALUES
(1, '2022-11-23 10:55:56', '2022-11-23 10:55:56', 1, 'FOR PQ'),
(2, '2022-11-23 10:55:56', '2022-11-23 10:55:56', 0, 'PASSED'),
(3, '2022-11-26 19:10:18', '2022-11-26 19:10:18', 0, 'FAILED');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_unit`
--

CREATE TABLE `tbl_unit` (
  `id` int(11) NOT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT current_timestamp(),
  `deleted_flag` tinyint(4) DEFAULT 0,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_unit`
--

INSERT INTO `tbl_unit` (`id`, `created_date`, `updated_date`, `deleted_flag`, `name`) VALUES
(1, '2022-11-20 20:26:08', '2022-11-20 20:26:08', 0, 'EA'),
(2, '2022-11-20 20:26:08', '2022-11-20 20:26:08', 0, 'LOT'),
(3, '2022-11-20 20:26:08', '2022-11-20 20:26:08', 0, 'PCS'),
(4, '2022-11-20 20:26:08', '2022-11-20 20:26:08', 0, 'PRS'),
(5, '2022-11-20 20:26:08', '2022-11-20 20:26:08', 0, 'RDS'),
(6, '2022-11-20 20:26:08', '2022-11-20 20:26:08', 0, 'SET'),
(7, '2022-11-20 20:26:08', '2022-11-20 20:26:08', 0, 'UNIT');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `verified_flag` tinyint(4) DEFAULT 0,
  `status_id` int(11) DEFAULT 1,
  `serial_no` varchar(255) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `access_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL,
  `rank_id` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT current_timestamp(),
  `deleted_flag` tinyint(4) DEFAULT 0,
  `created_by` int(11) DEFAULT NULL,
  `approved_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `verified_flag`, `status_id`, `serial_no`, `username`, `password`, `access_id`, `branch_id`, `rank_id`, `created_date`, `updated_date`, `deleted_flag`, `created_by`, `approved_by`) VALUES
(1, 1, 1, '123', 'admin', '$2y$10$0wT9y123kN7PasG4NBqQf.QmKwpnPcWR01.b9bYvL20ZTznZqFaqO', 1, 2, 14, '2022-08-13 18:16:03', '2022-11-12 18:06:41', 0, NULL, 1),
(2, 1, 1, '456', 'officer', '$2y$10$0wT9y123kN7PasG4NBqQf.QmKwpnPcWR01.b9bYvL20ZTznZqFaqO', 2, 1, 10, '2022-08-13 18:17:02', '2022-08-24 14:46:04', 0, NULL, 1),
(3, 1, 1, '789', 'personnel', '$2y$10$0wT9y123kN7PasG4NBqQf.QmKwpnPcWR01.b9bYvL20ZTznZqFaqO', 2, 1, 2, '2022-08-13 18:17:02', '2022-11-15 23:45:25', 0, NULL, 1),
(347, 1, 1, '123456', 'test', '$2y$10$0wT9y123kN7PasG4NBqQf.QmKwpnPcWR01.b9bYvL20ZTznZqFaqO', 2, 1, 10, '2022-11-20 19:29:54', '2022-11-20 19:29:54', 0, NULL, NULL),
(348, 1, 1, '999999999', 'testasd', '$2y$10$0wT9y123kN7PasG4NBqQf.QmKwpnPcWR01.b9bYvL20ZTznZqFaqO', 2, 1, 10, '2022-11-20 19:33:04', '2022-11-20 19:33:04', 0, NULL, NULL),
(349, 1, 1, 'dasdadas', 'jimenez31396', '$2y$10$0wT9y123kN7PasG4NBqQf.QmKwpnPcWR01.b9bYvL20ZTznZqFaqO', 2, 1, 10, '2022-11-20 19:36:21', '2022-11-20 19:36:21', 0, NULL, NULL),
(350, 1, 1, 'asdasdasdsa', 'testest', '$2y$10$0wT9y123kN7PasG4NBqQf.QmKwpnPcWR01.b9bYvL20ZTznZqFaqO', 3, 1, 1, '2022-11-20 19:42:35', '2022-11-20 19:42:35', 0, 1, NULL),
(351, 1, 1, 'yrd', 'yrdy', '$2y$10$0wT9y123kN7PasG4NBqQf.QmKwpnPcWR01.b9bYvL20ZTznZqFaqO', 3, 1, 1, '2022-11-22 18:21:58', '2022-11-22 18:21:58', 0, 1, NULL),
(352, 1, 3, '123213213', '123213213', '$2y$10$7IDGYwpkq9P7MPATn.FtQO0A1IVmtR50df3/YMqmjhyDXSKhHmMKu', 3, 1, 1, '2022-11-28 14:08:25', '2022-11-28 14:08:25', 0, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users_info`
--

CREATE TABLE `tbl_users_info` (
  `id` int(11) NOT NULL COMMENT 'calculate age',
  `first_name` varchar(45) DEFAULT NULL,
  `middle_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `contact_no` varchar(45) DEFAULT NULL,
  `suffix` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT 'default.jpg',
  `suffix_id` int(11) DEFAULT 1,
  `created_date` datetime DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT current_timestamp(),
  `deleted_flag` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_users_info`
--

INSERT INTO `tbl_users_info` (`id`, `first_name`, `middle_name`, `last_name`, `contact_no`, `suffix`, `image`, `suffix_id`, `created_date`, `updated_date`, `deleted_flag`) VALUES
(1, 'admin', 'admin', 'admin', '09217635295', NULL, 'default.jpg', 1, '2022-08-13 18:17:51', '2022-11-12 18:06:41', 0),
(2, 'officer', 'officer', 'officer', '09217635295', NULL, 'default.jpg', 1, '2022-08-13 18:17:51', '2022-08-24 14:46:04', 0),
(3, 'personnel', 'personnel', 'personnel', '09217635295', NULL, 'default.jpg', 1, '2022-08-13 18:17:51', '2022-08-24 14:46:04', 0),
(347, 'test', 'test', 'test', NULL, '', 'default.jpg', 1, '2022-11-20 19:29:54', '2022-11-20 19:29:54', 0),
(348, 'customer4', '', 'customer4', NULL, 'test', 'default.jpg', 1, '2022-11-20 19:33:04', '2022-11-20 19:33:04', 0),
(349, 'testestes', 'testest', 'testes', NULL, 'tsetes', 'default.jpg', 1, '2022-11-20 19:36:21', '2022-11-20 19:36:21', 0),
(350, 'customer4asd', 'test', 'customer4', NULL, 'test', 'default.jpg', 1, '2022-11-20 19:42:35', '2022-11-20 19:42:35', 0),
(351, 'yrdy', 'yrdy', 'yrd', NULL, NULL, 'default.jpg', 1, '2022-11-22 18:21:58', '2022-11-22 18:21:58', 0),
(352, 'test123213', 'test123213', 'test123213', NULL, NULL, 'default.jpg', 4, '2022-11-28 14:08:25', '2022-11-28 14:08:25', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users_status`
--

CREATE TABLE `tbl_users_status` (
  `id` int(11) NOT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT current_timestamp(),
  `deleted_flag` tinyint(4) DEFAULT 0,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_users_status`
--

INSERT INTO `tbl_users_status` (`id`, `created_date`, `updated_date`, `deleted_flag`, `name`) VALUES
(1, '2022-11-22 17:37:24', '2022-11-22 17:37:24', 0, 'ACTIVE'),
(2, '2022-11-22 17:37:24', '2022-11-22 17:37:24', 0, 'IN-ACTIVE'),
(3, '2022-11-22 17:37:24', '2022-11-22 17:37:24', 0, 'DELETED');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_status`
--

CREATE TABLE `tbl_user_status` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT current_timestamp(),
  `deleted_flag` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user_status`
--

INSERT INTO `tbl_user_status` (`id`, `name`, `created_date`, `updated_date`, `deleted_flag`) VALUES
(1, 'PENDING', '2022-11-20 15:54:56', '2022-11-20 15:54:56', 0),
(2, 'VERIFIED', '2022-11-20 15:54:56', '2022-11-20 15:54:56', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_verify_status`
--

CREATE TABLE `tbl_verify_status` (
  `id` int(11) NOT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT current_timestamp(),
  `deleted_flag` tinyint(4) DEFAULT 0,
  `name` varchar(255) DEFAULT NULL,
  `tbl_verify_statuscol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_verify_status`
--

INSERT INTO `tbl_verify_status` (`id`, `created_date`, `updated_date`, `deleted_flag`, `name`, `tbl_verify_statuscol`) VALUES
(0, '2022-11-22 17:38:11', '2022-11-22 17:38:11', 0, 'PENDING', 1),
(1, '2022-11-22 17:38:11', '2022-11-22 17:38:11', 0, 'VERIFIED', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_access`
--
ALTER TABLE `tbl_access`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_branch`
--
ALTER TABLE `tbl_branch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_classification`
--
ALTER TABLE `tbl_classification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_comodity`
--
ALTER TABLE `tbl_comodity`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `tbl_designation`
--
ALTER TABLE `tbl_designation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_end_user`
--
ALTER TABLE `tbl_end_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `tbl_expense_class`
--
ALTER TABLE `tbl_expense_class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_implementing_unit`
--
ALTER TABLE `tbl_implementing_unit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_local`
--
ALTER TABLE `tbl_local`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_mode_of_proc`
--
ALTER TABLE `tbl_mode_of_proc`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `tbl_pabac`
--
ALTER TABLE `tbl_pabac`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `tbl_program_manager`
--
ALTER TABLE `tbl_program_manager`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `tbl_project`
--
ALTER TABLE `tbl_project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_project_asa`
--
ALTER TABLE `tbl_project_asa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_project_bidder`
--
ALTER TABLE `tbl_project_bidder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_project_history`
--
ALTER TABLE `tbl_project_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_project_status`
--
ALTER TABLE `tbl_project_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_project_supplier`
--
ALTER TABLE `tbl_project_supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_project_twg`
--
ALTER TABLE `tbl_project_twg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_rank`
--
ALTER TABLE `tbl_rank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_suffix`
--
ALTER TABLE `tbl_suffix`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_supplier_status`
--
ALTER TABLE `tbl_supplier_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_unit`
--
ALTER TABLE `tbl_unit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users_info`
--
ALTER TABLE `tbl_users_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users_status`
--
ALTER TABLE `tbl_users_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user_status`
--
ALTER TABLE `tbl_user_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_verify_status`
--
ALTER TABLE `tbl_verify_status`
  ADD PRIMARY KEY (`tbl_verify_statuscol`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_access`
--
ALTER TABLE `tbl_access`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_branch`
--
ALTER TABLE `tbl_branch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_classification`
--
ALTER TABLE `tbl_classification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_comodity`
--
ALTER TABLE `tbl_comodity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_designation`
--
ALTER TABLE `tbl_designation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_end_user`
--
ALTER TABLE `tbl_end_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_expense_class`
--
ALTER TABLE `tbl_expense_class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_implementing_unit`
--
ALTER TABLE `tbl_implementing_unit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_local`
--
ALTER TABLE `tbl_local`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_mode_of_proc`
--
ALTER TABLE `tbl_mode_of_proc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_pabac`
--
ALTER TABLE `tbl_pabac`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_program_manager`
--
ALTER TABLE `tbl_program_manager`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_project`
--
ALTER TABLE `tbl_project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `tbl_project_asa`
--
ALTER TABLE `tbl_project_asa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `tbl_project_bidder`
--
ALTER TABLE `tbl_project_bidder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_project_history`
--
ALTER TABLE `tbl_project_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `tbl_project_status`
--
ALTER TABLE `tbl_project_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_project_supplier`
--
ALTER TABLE `tbl_project_supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `tbl_project_twg`
--
ALTER TABLE `tbl_project_twg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=225;

--
-- AUTO_INCREMENT for table `tbl_suffix`
--
ALTER TABLE `tbl_suffix`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_supplier_status`
--
ALTER TABLE `tbl_supplier_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_unit`
--
ALTER TABLE `tbl_unit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=353;

--
-- AUTO_INCREMENT for table `tbl_users_info`
--
ALTER TABLE `tbl_users_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'calculate age', AUTO_INCREMENT=353;

--
-- AUTO_INCREMENT for table `tbl_users_status`
--
ALTER TABLE `tbl_users_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_user_status`
--
ALTER TABLE `tbl_user_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_verify_status`
--
ALTER TABLE `tbl_verify_status`
  MODIFY `tbl_verify_statuscol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
