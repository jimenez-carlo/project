-- MariaDB dump 10.19  Distrib 10.4.22-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: pms_db
-- ------------------------------------------------------
-- Server version	10.4.22-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tbl_access`
--

DROP TABLE IF EXISTS `tbl_access`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_access` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT current_timestamp(),
  `deleted_flag` tinyint(4) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_access`
--

LOCK TABLES `tbl_access` WRITE;
/*!40000 ALTER TABLE `tbl_access` DISABLE KEYS */;
INSERT INTO `tbl_access` VALUES (1,'SYSTEM ADMIN','2022-08-12 19:48:56','2022-08-12 19:48:56',0),(2,'MAKER','2022-08-12 19:48:56','2022-08-12 19:48:56',0),(3,'CHECKER','2022-08-12 19:48:56','2022-08-12 19:48:56',0);
/*!40000 ALTER TABLE `tbl_access` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_branch`
--

DROP TABLE IF EXISTS `tbl_branch`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_branch` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT current_timestamp(),
  `deleted_flag` tinyint(4) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_branch`
--

LOCK TABLES `tbl_branch` WRITE;
/*!40000 ALTER TABLE `tbl_branch` DISABLE KEYS */;
INSERT INTO `tbl_branch` VALUES (1,'ARMY','2022-11-20 10:57:25','2022-11-20 10:57:25',0),(2,'NAVY','2022-11-20 10:57:25','2022-11-20 10:57:25',0),(3,'AIR FORCE','2022-11-20 10:57:25','2022-11-20 10:57:25',0);
/*!40000 ALTER TABLE `tbl_branch` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_classification`
--

DROP TABLE IF EXISTS `tbl_classification`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_classification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT current_timestamp(),
  `deleted_flag` tinyint(4) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_classification`
--

LOCK TABLES `tbl_classification` WRITE;
/*!40000 ALTER TABLE `tbl_classification` DISABLE KEYS */;
INSERT INTO `tbl_classification` VALUES (1,'OFFICER','2022-11-20 10:54:13','2022-11-20 10:54:13',0),(2,'ENLISTED PERSONNEL','2022-11-20 10:54:13','2022-11-20 10:54:13',0);
/*!40000 ALTER TABLE `tbl_classification` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_comodity`
--

DROP TABLE IF EXISTS `tbl_comodity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_comodity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT current_timestamp(),
  `deleted_flag` tinyint(4) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_comodity`
--

LOCK TABLES `tbl_comodity` WRITE;
/*!40000 ALTER TABLE `tbl_comodity` DISABLE KEYS */;
INSERT INTO `tbl_comodity` VALUES (1,'ENG','2022-11-20 20:21:03','2022-11-20 20:21:03',0),(2,'FP','2022-11-20 20:21:03','2022-11-20 20:21:03',0),(3,'MED','2022-11-20 20:21:03','2022-11-20 20:21:03',0),(4,'MOB','2022-11-20 20:21:03','2022-11-20 20:21:03',0),(5,'MOB(Aircraft Spares)','2022-11-20 20:21:03','2022-11-20 20:21:03',0),(6,'MOB(Armor Spares)','2022-11-20 20:21:03','2022-11-20 20:21:03',0),(7,'QM','2022-11-20 20:21:03','2022-11-20 20:21:03',0),(8,'SERVICES','2022-11-20 20:21:03','2022-11-20 20:21:03',0),(9,'SERVICES(PCHT)','2022-11-20 20:21:03','2022-11-20 20:21:03',0),(10,'SIG','2022-11-20 20:21:03','2022-11-20 20:21:03',0);
/*!40000 ALTER TABLE `tbl_comodity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_designation`
--

DROP TABLE IF EXISTS `tbl_designation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_designation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_date` datetime DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT current_timestamp(),
  `deleted_flag` tinyint(4) DEFAULT 0,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_designation`
--

LOCK TABLES `tbl_designation` WRITE;
/*!40000 ALTER TABLE `tbl_designation` DISABLE KEYS */;
INSERT INTO `tbl_designation` VALUES (1,'2022-11-23 11:34:36','2022-11-23 11:34:36',0,'DESIGNATION 1'),(2,'2022-11-23 11:34:36','2022-11-23 11:34:36',0,'DESIGNATION 2');
/*!40000 ALTER TABLE `tbl_designation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_end_user`
--

DROP TABLE IF EXISTS `tbl_end_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_end_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT current_timestamp(),
  `deleted_flag` tinyint(4) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_end_user`
--

LOCK TABLES `tbl_end_user` WRITE;
/*!40000 ALTER TABLE `tbl_end_user` DISABLE KEYS */;
INSERT INTO `tbl_end_user` VALUES (1,'AGH','2022-11-25 14:47:50','2022-11-25 14:47:50',0),(2,'ARMOR DIV','2022-11-25 14:47:50','2022-11-25 14:47:50',0),(3,'HPA','2022-11-25 14:47:50','2022-11-25 14:47:50',0),(4,'PAMUs','2022-11-25 14:47:50','2022-11-25 14:47:50',0);
/*!40000 ALTER TABLE `tbl_end_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_expense_class`
--

DROP TABLE IF EXISTS `tbl_expense_class`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_expense_class` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT current_timestamp(),
  `deleted_flag` tinyint(4) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_expense_class`
--

LOCK TABLES `tbl_expense_class` WRITE;
/*!40000 ALTER TABLE `tbl_expense_class` DISABLE KEYS */;
INSERT INTO `tbl_expense_class` VALUES (1,'CO','2022-11-20 20:25:09','2022-11-20 20:25:09',0),(2,'MODE','2022-11-20 20:25:09','2022-11-20 20:25:09',0),(3,'PS','2022-11-20 20:25:09','2022-11-20 20:25:09',0);
/*!40000 ALTER TABLE `tbl_expense_class` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_implementing_unit`
--

DROP TABLE IF EXISTS `tbl_implementing_unit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_implementing_unit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT current_timestamp(),
  `deleted_flag` tinyint(4) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_implementing_unit`
--

LOCK TABLES `tbl_implementing_unit` WRITE;
/*!40000 ALTER TABLE `tbl_implementing_unit` DISABLE KEYS */;
INSERT INTO `tbl_implementing_unit` VALUES (1,'ARMOR','2022-11-20 20:19:37','2022-11-20 20:19:37',0),(2,'ASCOM','2022-11-20 20:19:37','2022-11-20 20:19:37',0),(3,'HHSG','2022-11-20 20:19:37','2022-11-20 20:19:37',0);
/*!40000 ALTER TABLE `tbl_implementing_unit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_local`
--

DROP TABLE IF EXISTS `tbl_local`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_local` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_date` datetime DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT current_timestamp(),
  `deleted_flag` tinyint(4) DEFAULT 0,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_local`
--

LOCK TABLES `tbl_local` WRITE;
/*!40000 ALTER TABLE `tbl_local` DISABLE KEYS */;
INSERT INTO `tbl_local` VALUES (1,'2022-11-20 20:54:39','2022-11-20 20:54:39',0,'LC'),(2,'2022-11-20 20:54:39','2022-11-20 20:54:39',0,'LOCAL');
/*!40000 ALTER TABLE `tbl_local` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_mode_of_proc`
--

DROP TABLE IF EXISTS `tbl_mode_of_proc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_mode_of_proc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_date` datetime DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT current_timestamp(),
  `deleted_flag` tinyint(4) DEFAULT 0,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_mode_of_proc`
--

LOCK TABLES `tbl_mode_of_proc` WRITE;
/*!40000 ALTER TABLE `tbl_mode_of_proc` DISABLE KEYS */;
INSERT INTO `tbl_mode_of_proc` VALUES (1,'2022-11-20 20:26:57','2022-11-20 20:26:57',0,'PUBLIC BIDDING'),(2,'2022-11-20 20:26:57','2022-11-20 20:26:57',0,'NEGOTATION');
/*!40000 ALTER TABLE `tbl_mode_of_proc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_pabac`
--

DROP TABLE IF EXISTS `tbl_pabac`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_pabac` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT current_timestamp(),
  `deleted_flag` tinyint(4) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_pabac`
--

LOCK TABLES `tbl_pabac` WRITE;
/*!40000 ALTER TABLE `tbl_pabac` DISABLE KEYS */;
INSERT INTO `tbl_pabac` VALUES (1,'ARMORSBAC','2022-11-20 20:23:17','2022-11-20 20:23:17',0),(2,'PABAC1','2022-11-20 20:23:17','2022-11-20 20:23:17',0),(3,'PABAC2','2022-11-20 20:23:17','2022-11-20 20:23:17',0),(4,'PABAC3','2022-11-20 20:23:17','2022-11-20 20:23:17',0),(5,'test','2022-11-28 15:19:28','2022-11-28 15:19:28',0);
/*!40000 ALTER TABLE `tbl_pabac` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_program_manager`
--

DROP TABLE IF EXISTS `tbl_program_manager`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_program_manager` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT current_timestamp(),
  `deleted_flag` tinyint(4) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_program_manager`
--

LOCK TABLES `tbl_program_manager` WRITE;
/*!40000 ALTER TABLE `tbl_program_manager` DISABLE KEYS */;
INSERT INTO `tbl_program_manager` VALUES (1,'HPAG1','2022-11-20 20:23:35','2022-11-20 20:23:35',0),(2,'HPAG4','2022-11-20 20:23:35','2022-11-20 20:23:35',0),(3,'HPAG6','2022-11-20 20:23:35','2022-11-20 20:23:35',0);
/*!40000 ALTER TABLE `tbl_program_manager` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_project`
--

DROP TABLE IF EXISTS `tbl_project`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_project`
--

LOCK TABLES `tbl_project` WRITE;
/*!40000 ALTER TABLE `tbl_project` DISABLE KEYS */;
INSERT INTO `tbl_project` VALUES (21,1,0,1,1,'','test','2022-11-09',1,1,'test','78',1,5000.00,'test',3000.00,2000.00,'2,3',1,'2022-12-06','2022-11-24','2022-12-01','2022-11-16','2022-11-21','2022-11-16',1,'2022-11-21','2022-11-16','2022-11-16','2022-11-18','2022-11-16','2022-11-16','2022-11-16','1970-01-01','2022-11-23','01-01-1970','1970-01-01','1970-01-01',0,0.00,'2022-11-16','10','300.00','2022-11-16',0.00,0.00,'null','null','null','null','null','null','null','2','3','2022-11-20 23:20:59','2022-11-30 18:54:02',0,1,1),(22,1,1,1,1,'test','test','2022-11-16',1,1,'test','123',1,0.00,NULL,NULL,NULL,'2',1,'2022-11-16','2022-11-16','2022-12-05','2022-11-04','2022-11-18','0000-00-00',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'null','null','null','null','null','null','null','1','3','2022-11-21 00:34:06','2022-11-28 17:32:40',0,1,1),(23,1,1,1,1,'asd','asdas','2022-11-16',1,1,'asdas','123',1,0.00,NULL,NULL,NULL,'tes',1,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'file_20221121004643.xlsx',NULL,NULL,NULL,NULL,NULL,NULL,'1','3','2022-11-21 00:46:43','2022-11-21 00:46:43',0,1,NULL),(24,1,1,1,1,'asd','asdas','2022-11-16',1,1,'asdas','123',1,0.00,NULL,NULL,NULL,'tes',1,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'file_20221121004728.xlsx',NULL,NULL,NULL,NULL,NULL,NULL,'1','3','2022-11-21 00:47:28','2022-11-21 00:47:28',0,1,NULL),(25,1,1,1,1,'asd','asdas','2022-11-16',1,1,'asdas','123',1,0.00,NULL,NULL,NULL,'tes',1,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'file_20221121004824.xlsx',NULL,NULL,NULL,NULL,NULL,NULL,'1','3','2022-11-21 00:48:24','2022-11-21 00:48:24',0,1,NULL),(26,1,1,1,1,'test','test','2022-11-02',1,1,'test','23',1,0.00,NULL,NULL,NULL,'test',1,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1','3','2022-11-23 14:59:20','2022-11-23 14:59:20',0,1,NULL),(27,1,1,1,1,'test','test','2022-11-02',1,1,'test','23',1,0.00,NULL,NULL,NULL,'test',1,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1','3','2022-11-23 15:45:31','2022-11-23 15:45:31',1,1,NULL),(28,1,1,1,1,'test','test','2022-11-11',1,1,'test','232',1,200.00,'',12.00,0.00,'4',1,'2022-11-16',NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1','','2022-11-25 18:06:59','2022-11-25 18:06:59',0,0,NULL),(33,1,1,1,1,'test','test','2022-11-11',1,1,'test','232',1,200.00,'',12.00,0.00,'4',1,'2022-11-16',NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1','3','2022-11-25 18:23:28','2022-11-25 18:23:28',1,1,NULL),(34,1,1,1,1,'aasd','',NULL,1,1,'sdsad','23',1,0.00,'',0.00,0.00,'3',1,'2022-11-16',NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1','3','2022-11-28 14:26:51','2022-11-28 14:26:51',0,1,NULL),(35,4,1,1,1,'test','',NULL,1,1,'test','23',1,NULL,NULL,NULL,NULL,'4',1,'2022-12-02','2022-11-16','2022-12-05',NULL,'2022-12-12',NULL,0,'0000-00-00',NULL,'0000-00-00','0000-00-00','0000-00-00','0000-00-00','0000-00-00','','0000-00-00','11/28/2022 - 11/28/2022','11/28/2022 - 11/28/2022','11/28/2022 - 11/28/2022',0,0.00,'0000-00-00','1','','0000-00-00',0.00,0.00,'null','null','null','null','null','null','null','1','3','2022-11-28 14:30:54','2022-11-28 16:09:13',0,1,1),(36,4,1,1,1,'test','',NULL,1,1,'test','233',1,NULL,NULL,NULL,NULL,'3,4',1,'2022-11-17','2022-11-17','2022-12-05','0000-00-00','2022-12-12',NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'null','null','null','null','null','null','null','1','3','2022-11-28 17:24:39','2022-11-28 17:26:43',0,1,1),(37,1,1,1,1,'test','',NULL,1,1,'test','23',1,0.00,'',0.00,0.00,'3',1,'2022-11-28','0000-00-00',NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2','3','2022-11-28 18:37:30','2022-11-28 18:37:30',0,1,NULL),(38,1,1,1,1,'test','',NULL,1,1,'test','23',1,0.00,'',0.00,0.00,'3',1,'2022-11-28',NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2','3','2022-11-28 18:38:13','2022-11-28 18:38:13',0,1,NULL),(41,1,0,1,1,'assdasd','',NULL,1,1,'test','23',1,0.00,'',0.00,0.00,'3',1,'2022-11-28',NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'350,351,352','3','2022-11-30 19:50:01','2022-11-30 19:50:01',0,3,NULL),(43,1,0,1,1,'assdasd','',NULL,1,1,'test','23',1,0.00,'',0.00,0.00,'3',1,'2022-11-28',NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'350,351,352','3','2022-11-30 19:51:50','2022-11-30 19:51:50',0,3,NULL),(50,1,0,1,1,'assdasd','',NULL,1,1,'test','23',1,0.00,'',0.00,0.00,'3',1,'2022-11-28',NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'350,351,352','3','2022-11-30 19:58:52','2022-11-30 19:58:52',0,3,NULL),(51,1,0,1,1,'assdasd','',NULL,1,1,'test','23',1,0.00,'',0.00,0.00,'3',1,'2022-11-28',NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'350,351,352','3','2022-11-30 19:59:34','2022-11-30 19:59:34',0,3,NULL),(52,15,1,1,1,'','','1970-01-01',1,1,'test','23',1,900.00,'test',100.00,800.00,'3',1,'2022-11-28','2022-12-28','2023-01-04','2022-11-24','2022-12-02','2022-12-14',1,'2022-12-19','2022-12-13','2022-07-14','1970-01-15','1970-01-22','1970-01-22','1970-01-01','1970-01-01','2022-12-14','2022-12-15','1970-01-01','1970-01-01',0,0.00,'1970-01-01','10','10.00','1970-01-01',0.00,0.00,'null','null','null','null','null','null','null','352','3','2022-11-30 19:59:58','2022-12-01 14:31:54',0,3,3),(53,7,1,1,1,'','','06-12-2022,23-12-2022,09-12-2022',1,1,'test','23',1,9000.00,'343434',500.00,8500.00,'2,4',1,'2022-12-13','2022-12-22','2022-12-29','2022-12-01','2022-12-14','2022-12-15',0,'2022-12-20','2022-12-13','2022-12-21','2022-12-15','2022-12-21','2022-12-23','2022-12-15','3','2022-12-26','2022-12-15','2022-12-08','2022-12-09',1,300.00,'2022-12-14','10','50.00','2022-12-24',600.00,350.00,'null','null','null','null','null','null','null','350,351,352','3','2022-12-02 10:03:20','2022-12-04 13:49:47',0,3,3);
/*!40000 ALTER TABLE `tbl_project` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_project_asa`
--

DROP TABLE IF EXISTS `tbl_project_asa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_project_asa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) DEFAULT NULL,
  `asa_nr` varchar(255) DEFAULT NULL,
  `asa_date` date DEFAULT NULL,
  `object_code` varchar(255) DEFAULT NULL,
  `asa_amount` varchar(255) DEFAULT NULL,
  `expense_class_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT current_timestamp(),
  `deleted_flag` tinyint(4) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_project_asa`
--

LOCK TABLES `tbl_project_asa` WRITE;
/*!40000 ALTER TABLE `tbl_project_asa` DISABLE KEYS */;
INSERT INTO `tbl_project_asa` VALUES (1,1,'asd','2022-12-01','asd','2323',1,1,'2022-11-25 18:12:39','2022-11-25 18:12:39',0),(6,33,'asd','2022-12-01','asd','2323',1,1,'2022-11-25 18:23:28','2022-11-25 18:23:28',0),(49,21,'test','2022-11-20','test','123',1,1,'2022-11-30 18:54:02','2022-11-30 18:54:02',0),(50,50,'asa 1','1901-11-29','asa 1','3333333.33',1,3,'2022-11-30 19:58:52','2022-11-30 19:58:52',0),(51,51,'asa 1','1901-11-29','asa 1','3333333.33',1,3,'2022-11-30 19:59:34','2022-11-30 19:59:34',0),(87,52,'asa 1','1901-11-29','asa 1','3333333.33',1,3,'2022-12-01 14:31:54','2022-12-01 14:31:54',0);
/*!40000 ALTER TABLE `tbl_project_asa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_project_bidder`
--

DROP TABLE IF EXISTS `tbl_project_bidder`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_project_bidder` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) DEFAULT NULL,
  `rank` varchar(255) DEFAULT NULL,
  `supplier` varchar(255) DEFAULT NULL,
  `local_id` int(11) DEFAULT NULL,
  `price` decimal(13,2) DEFAULT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT current_timestamp(),
  `deleted_flag` tinyint(4) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_project_bidder`
--

LOCK TABLES `tbl_project_bidder` WRITE;
/*!40000 ALTER TABLE `tbl_project_bidder` DISABLE KEYS */;
INSERT INTO `tbl_project_bidder` VALUES (14,53,'1','SUPPLIER 1',1,3232.32,'2022-12-04 13:45:30','2022-12-04 13:45:30',0),(15,53,'2','SUPPLIER 2',1,2323.32,'2022-12-04 13:45:30','2022-12-04 13:45:30',0);
/*!40000 ALTER TABLE `tbl_project_bidder` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_project_history`
--

DROP TABLE IF EXISTS `tbl_project_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_project_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) DEFAULT NULL,
  `project_status_id` int(11) DEFAULT NULL,
  `conducted_date` text DEFAULT NULL,
  `remarks` text DEFAULT NULL,
  `other_details` text DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT current_timestamp(),
  `deleted_flag` tinyint(4) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=122 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_project_history`
--

LOCK TABLES `tbl_project_history` WRITE;
/*!40000 ALTER TABLE `tbl_project_history` DISABLE KEYS */;
INSERT INTO `tbl_project_history` VALUES (1,21,1,NULL,NULL,NULL,1,'2022-11-20 23:20:59','2022-11-20 23:20:59',0),(2,22,1,NULL,NULL,NULL,1,'2022-11-21 00:34:06','2022-11-21 00:34:06',0),(3,23,1,NULL,NULL,NULL,1,'2022-11-21 00:46:43','2022-11-21 00:46:43',0),(4,24,1,NULL,NULL,NULL,1,'2022-11-21 00:47:28','2022-11-21 00:47:28',0),(5,25,1,NULL,NULL,NULL,1,'2022-11-21 00:48:24','2022-11-21 00:48:24',0),(6,26,1,NULL,NULL,NULL,1,'2022-11-23 14:59:20','2022-11-23 14:59:20',0),(7,27,1,NULL,NULL,NULL,1,'2022-11-23 15:45:31','2022-11-23 15:45:31',0),(13,33,1,NULL,'Project Initialize',NULL,1,'2022-11-25 18:23:28','2022-11-25 18:23:28',0),(17,21,2,NULL,'test',NULL,1,'2022-11-28 10:17:48','2022-11-28 10:17:48',0),(20,21,4,NULL,'test',NULL,1,'2022-11-28 10:20:51','2022-11-28 10:20:51',0),(21,21,5,NULL,'rwar',NULL,1,'2022-11-28 10:21:34','2022-11-28 10:21:34',0),(22,21,4,NULL,'test',NULL,1,'2022-11-28 10:50:08','2022-11-28 10:50:08',0),(23,21,6,NULL,'mali',NULL,1,'2022-11-28 10:50:15','2022-11-28 10:50:15',0),(24,21,2,NULL,'test',NULL,1,'2022-11-28 10:50:31','2022-11-28 10:50:31',0),(25,34,1,NULL,'Project Initialize',NULL,1,'2022-11-28 14:26:51','2022-11-28 14:26:51',0),(26,35,1,NULL,'Project Initialize',NULL,1,'2022-11-28 14:30:54','2022-11-28 14:30:54',0),(27,35,2,NULL,'',NULL,1,'2022-11-28 16:09:04','2022-11-28 16:09:04',0),(28,35,4,NULL,'',NULL,1,'2022-11-28 16:09:13','2022-11-28 16:09:13',0),(29,22,2,NULL,'',NULL,1,'2022-11-28 16:38:04','2022-11-28 16:38:04',0),(30,22,4,NULL,'',NULL,1,'2022-11-28 16:39:09','2022-11-28 16:39:09',0),(31,36,1,NULL,'Project Initialize',NULL,1,'2022-11-28 17:24:39','2022-11-28 17:24:39',0),(32,36,2,NULL,'',NULL,1,'2022-11-28 17:24:50','2022-11-28 17:24:50',0),(33,36,4,NULL,'',NULL,1,'2022-11-28 17:26:43','2022-11-28 17:26:43',0),(34,22,1,NULL,'',NULL,1,'2022-11-28 17:32:01','2022-11-28 17:32:01',0),(35,22,2,NULL,'',NULL,1,'2022-11-28 17:32:40','2022-11-28 17:32:40',0),(36,37,1,NULL,'Project Initialize',NULL,1,'2022-11-28 18:37:30','2022-11-28 18:37:30',0),(37,38,1,NULL,'Project Initialize',NULL,1,'2022-11-28 18:38:13','2022-11-28 18:38:13',0),(38,21,2,NULL,'',NULL,1,'2022-11-30 14:39:08','2022-11-30 14:39:08',0),(39,21,4,NULL,'',NULL,1,'2022-11-30 15:09:41','2022-11-30 15:09:41',0),(40,21,6,'2022-11-30','',NULL,1,'2022-11-30 15:28:29','2022-11-30 15:28:29',0),(41,21,6,'2022-11-30','',NULL,1,'2022-11-30 15:29:01','2022-11-30 15:29:01',0),(42,21,4,'30/11/-0001','',NULL,1,'2022-11-30 15:30:04','2022-11-30 15:30:04',0),(43,21,5,'30/11/-0001','',NULL,1,'2022-11-30 15:49:00','2022-11-30 15:49:00',0),(44,21,6,'2022-11-30','',NULL,1,'2022-11-30 16:21:23','2022-11-30 16:21:23',0),(45,21,3,'2022-11-30','',NULL,1,'2022-11-30 16:38:28','2022-11-30 16:38:28',0),(46,21,3,'2022-11-30','',NULL,1,'2022-11-30 16:38:48','2022-11-30 16:38:48',0),(47,21,1,'2022-11-30','',NULL,1,'2022-11-30 16:39:20','2022-11-30 16:39:20',0),(48,21,2,'2022-11-24','',NULL,1,'2022-11-30 16:51:43','2022-11-30 16:51:43',0),(49,21,4,'2022-11-16','',NULL,1,'2022-11-30 16:53:01','2022-11-30 16:53:01',0),(50,21,5,'2022-11-16','',NULL,1,'2022-11-30 16:53:24','2022-11-30 16:53:24',0),(51,21,7,'2022-11-16','',NULL,1,'2022-11-30 16:53:36','2022-11-30 16:53:36',0),(52,21,8,'2022-11-16','',NULL,1,'2022-11-30 16:53:41','2022-11-30 16:53:41',0),(53,21,9,'2022-11-16','',NULL,1,'2022-11-30 16:54:07','2022-11-30 16:54:07',0),(54,21,10,'2022-11-30','',NULL,1,'2022-11-30 16:54:12','2022-11-30 16:54:12',0),(55,21,11,'2022-11-30','',NULL,1,'2022-11-30 16:54:16','2022-11-30 16:54:16',0),(56,21,12,'2022-11-16','',NULL,1,'2022-11-30 16:57:48','2022-11-30 16:57:48',0),(57,21,13,'11/28/2022 - 11/28/2022','',NULL,1,'2022-11-30 17:03:54','2022-11-30 17:03:54',0),(58,21,14,'2022-11-30','',NULL,1,'2022-11-30 17:08:09','2022-11-30 17:08:09',0),(59,21,15,'1970-01-01','',NULL,1,'2022-11-30 17:12:59','2022-11-30 17:12:59',0),(60,21,1,'2022-11-30','',NULL,1,'2022-11-30 18:54:02','2022-11-30 18:54:02',0),(70,50,1,'2022-11-30','Project Initialize',NULL,3,'2022-11-30 19:58:52','2022-11-30 19:58:52',0),(71,51,1,'2022-11-30','Project Initialize',NULL,3,'2022-11-30 19:59:34','2022-11-30 19:59:34',0),(72,52,1,'2022-11-30','Project Initialize',NULL,3,'2022-11-30 19:59:58','2022-11-30 19:59:58',0),(73,52,2,'2022-11-23','',NULL,3,'2022-11-30 20:25:56','2022-11-30 20:25:56',0),(74,52,4,'2022-11-24','',NULL,3,'2022-11-30 20:32:11','2022-11-30 20:32:11',0),(75,52,5,'2022-12-14','',NULL,3,'2022-12-01 10:16:43','2022-12-01 10:16:43',0),(76,52,7,'2022-12-21','',NULL,3,'2022-12-01 10:45:33','2022-12-01 10:45:33',0),(77,52,8,'2022-07-14','',NULL,3,'2022-12-01 10:46:25','2022-12-01 10:46:25',0),(78,52,9,'1970-01-15','',NULL,3,'2022-12-01 10:48:02','2022-12-01 10:48:02',0),(79,52,10,'2022-12-01','',NULL,3,'2022-12-01 10:48:14','2022-12-01 10:48:14',0),(80,52,11,'2022-12-01','',NULL,3,'2022-12-01 10:48:23','2022-12-01 10:48:23',0),(81,52,12,'1970-01-22','',NULL,3,'2022-12-01 10:50:23','2022-12-01 10:50:23',0),(82,52,13,'2022-12-15','',NULL,3,'2022-12-01 10:51:16','2022-12-01 10:51:16',0),(83,52,14,'1970-01-01','',NULL,3,'2022-12-01 10:51:26','2022-12-01 10:51:26',0),(84,52,15,'1970-01-01','',NULL,3,'2022-12-01 10:53:55','2022-12-01 10:53:55',0),(85,52,6,'2022-12-01','',NULL,3,'2022-12-01 14:27:32','2022-12-01 14:27:32',0),(86,52,3,'2022-12-01','',NULL,3,'2022-12-01 14:28:48','2022-12-01 14:28:48',0),(87,52,3,'2022-12-01','',NULL,3,'2022-12-01 14:29:07','2022-12-01 14:29:07',0),(88,52,1,'2022-12-01','',NULL,3,'2022-12-01 14:29:27','2022-12-01 14:29:27',0),(89,52,2,'2022-12-28','',NULL,3,'2022-12-01 14:29:32','2022-12-01 14:29:32',0),(90,52,4,'2022-11-24','',NULL,3,'2022-12-01 14:29:36','2022-12-01 14:29:36',0),(91,52,6,'2022-12-01','',NULL,3,'2022-12-01 14:29:41','2022-12-01 14:29:41',0),(92,52,5,'2022-12-14','',NULL,3,'2022-12-01 14:30:16','2022-12-01 14:30:16',0),(93,52,7,'2022-12-13','','01-12-2022',3,'2022-12-01 14:30:44','2022-12-01 14:30:44',0),(94,52,17,'2022-12-01','test',NULL,3,'2022-12-01 14:31:54','2022-12-01 14:31:54',0),(95,53,1,'2022-12-02','Project Initialize',NULL,3,'2022-12-02 10:03:20','2022-12-02 10:03:20',0),(96,53,2,'2022-12-22','',NULL,3,'2022-12-02 10:08:02','2022-12-02 10:08:02',0),(97,53,2,'2022-12-22','',NULL,3,'2022-12-02 10:09:04','2022-12-02 10:09:04',0),(98,53,4,'2022-12-22','',NULL,3,'2022-12-02 10:09:21','2022-12-02 10:09:21',0),(99,53,6,'2022-12-15','',NULL,3,'2022-12-02 10:09:40','2022-12-02 10:09:40',0),(100,53,2,'2022-12-22','','No Bidder',3,'2022-12-02 10:15:13','2022-12-02 10:15:13',0),(101,53,4,'2022-12-22','',NULL,3,'2022-12-02 10:15:29','2022-12-02 10:15:29',0),(102,53,6,'2022-12-15','','No Bidder',3,'2022-12-02 10:17:28','2022-12-02 10:17:28',0),(103,53,4,'2022-12-22','',NULL,3,'2022-12-02 10:17:34','2022-12-02 10:17:34',0),(104,53,5,'2022-12-15','',NULL,3,'2022-12-02 10:20:11','2022-12-02 10:20:11',0),(105,53,7,'2022-12-22','','test',3,'2022-12-02 10:20:34','2022-12-02 10:20:34',0),(106,53,8,'2022-12-02','','',3,'2022-12-02 10:21:56','2022-12-02 10:21:56',0),(107,53,8,'2022-12-21','','',3,'2022-12-02 10:24:16','2022-12-02 10:24:16',0),(108,53,9,'2022-12-15','',NULL,3,'2022-12-02 10:25:00','2022-12-02 10:25:00',0),(109,53,10,'2022-12-21','',NULL,3,'2022-12-02 10:25:14','2022-12-02 10:25:14',0),(110,53,11,'2022-12-23','',NULL,3,'2022-12-02 10:25:21','2022-12-02 10:25:21',0),(111,53,12,'2022-12-15','',NULL,3,'2022-12-02 10:42:45','2022-12-02 10:42:45',0),(112,53,13,'2022-12-15','',NULL,3,'2022-12-02 10:45:45','2022-12-02 10:45:45',0),(113,53,14,'2022-12-08','',NULL,3,'2022-12-02 10:45:53','2022-12-02 10:45:53',0),(114,53,15,'2022-12-09','',NULL,3,'2022-12-02 10:52:24','2022-12-02 10:52:24',0),(115,53,7,'2022-12-14','','6',3,'2022-12-04 13:39:42','2022-12-04 13:39:42',0),(116,53,7,'2022-12-14','','6',3,'2022-12-04 13:40:10','2022-12-04 13:40:10',0),(117,53,8,'2022-12-21','','10',3,'2022-12-04 13:43:58','2022-12-04 13:43:58',0),(118,53,17,'2022-12-22','',NULL,3,'2022-12-04 13:45:30','2022-12-04 13:45:30',0),(119,53,7,'2022-12-14','','15',3,'2022-12-04 13:47:04','2022-12-04 13:47:04',0),(120,53,5,'2022-12-15','',NULL,3,'2022-12-04 13:49:37','2022-12-04 13:49:37',0),(121,53,7,'2022-12-13','','14',3,'2022-12-04 13:49:47','2022-12-04 13:49:47',0);
/*!40000 ALTER TABLE `tbl_project_history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_project_status`
--

DROP TABLE IF EXISTS `tbl_project_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_project_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_date` datetime DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT current_timestamp(),
  `deleted_flag` tinyint(4) DEFAULT 0,
  `name` varchar(255) DEFAULT NULL,
  `next_ids` varchar(45) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `color` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_project_status`
--

LOCK TABLES `tbl_project_status` WRITE;
/*!40000 ALTER TABLE `tbl_project_status` DISABLE KEYS */;
INSERT INTO `tbl_project_status` VALUES (1,'2022-11-20 20:28:14','2022-11-20 20:28:14',0,'FOR PREPROC','2,3','1','success'),(2,'2022-11-20 20:28:14','2022-11-20 20:28:14',0,'PREPROC - PASSED','4','1','success'),(3,'2022-11-20 20:28:14','2022-11-20 20:28:14',0,'PREPROC - FAILED','1','0','danger'),(4,'2022-11-20 20:28:14','2022-11-20 20:28:14',0,'PRE-BID','5,6','1','success'),(5,'2022-11-20 20:28:14','2022-11-20 20:28:14',0,'SOBE - PASSED','7,17','1','success'),(6,'2022-11-20 20:28:14','2022-11-20 20:28:14',0,'SOBE - FAILED','2,3,4,5','0','danger'),(7,'2022-11-20 20:28:14','2022-11-20 20:28:14',0,'PQ - PASSED','8','1','success'),(8,'2022-11-20 20:28:14','2022-11-20 20:28:14',0,'PQR','9','1','success'),(9,'2022-11-20 20:28:14','2022-11-20 20:28:14',0,'NOA','10','1','success'),(10,'2022-11-20 20:28:14','2022-11-20 20:28:14',0,'ORS','11','1','success'),(11,'2022-11-20 20:28:14','2022-11-20 20:28:14',0,'NTP','12','1','success'),(12,'2022-11-20 20:28:14','2022-11-20 20:28:14',0,'NTP CONFORME','13','1','success'),(13,'2022-11-20 20:28:14','2022-11-20 20:28:14',0,'DELIVERY','14','1','success'),(14,'2022-11-25 10:47:30','2022-11-25 10:47:30',0,'INSPECTED','15','1','success'),(15,'2022-11-28 16:30:56','2022-11-28 16:30:56',0,'ACCEPTED','0','1','success'),(17,'2022-12-01 10:34:02','2022-12-01 10:34:02',0,'PQ - FAILED','7,17','1','danger');
/*!40000 ALTER TABLE `tbl_project_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_project_supplier`
--

DROP TABLE IF EXISTS `tbl_project_supplier`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_project_supplier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `deleted_flag` tinyint(4) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_project_supplier`
--

LOCK TABLES `tbl_project_supplier` WRITE;
/*!40000 ALTER TABLE `tbl_project_supplier` DISABLE KEYS */;
INSERT INTO `tbl_project_supplier` VALUES (4,23,123.00,1,'supplier 1','1',5,'2022-11-30',NULL,'2022-11-21 00:46:43','2022-11-21 00:46:43',0),(5,24,123.00,1,'supplier 1','1',5,'2022-11-30',NULL,'2022-11-21 00:47:28','2022-11-21 00:47:28',0),(6,25,123.00,1,'supplier 1','1',5,'2022-11-30',NULL,'2022-11-21 00:48:24','2022-11-21 00:48:24',0),(7,33,2323.00,1,'supplier 1','1',5,'2022-11-30',1,'2022-11-25 18:23:28','2022-11-25 18:23:28',0),(74,21,12.12,1,'supplier 1','1',5,'2022-11-30',1,'2022-11-30 18:54:02','2022-11-30 18:54:02',0),(83,52,0.00,1,'supplier 1','1',5,'2022-11-30',3,'2022-12-01 10:53:55','2022-12-01 10:53:55',0),(84,52,3243.43,1,'01-12-2022',NULL,7,'2022-12-13',3,'2022-12-01 14:30:44','2022-12-01 14:30:44',0),(85,53,33.33,1,'test',NULL,7,'2022-12-22',3,'2022-12-02 10:20:34','2022-12-02 10:20:34',0),(86,53,0.00,0,'',NULL,7,'2022-12-14',3,'2022-12-04 13:39:42','2022-12-04 13:39:42',0),(87,53,0.00,0,'',NULL,7,'2022-12-14',3,'2022-12-04 13:40:10','2022-12-04 13:40:10',0),(88,53,0.00,0,'',NULL,17,'2022-12-22',3,'2022-12-04 13:45:30','2022-12-04 13:45:30',0),(89,53,0.00,0,'',NULL,7,'2022-12-14',3,'2022-12-04 13:47:04','2022-12-04 13:47:04',0),(90,53,3232.32,1,'SUPPLIER 1',NULL,7,'2022-12-13',3,'2022-12-04 13:49:47','2022-12-04 13:49:47',0);
/*!40000 ALTER TABLE `tbl_project_supplier` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_project_twg`
--

DROP TABLE IF EXISTS `tbl_project_twg`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_project_twg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `deleted_flag` tinyint(4) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=225 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_project_twg`
--

LOCK TABLES `tbl_project_twg` WRITE;
/*!40000 ALTER TABLE `tbl_project_twg` DISABLE KEYS */;
INSERT INTO `tbl_project_twg` VALUES (4,27,1,'tes','test','tes',1,1,'123123',1,NULL,'2022-11-23 15:45:31','2022-11-23 15:45:31',0),(5,1,1,'asdas','','asd',1,1,'asd',1,'asd','2022-11-25 18:13:46','2022-11-25 18:13:46',0),(6,33,1,'asdas','','asd',1,1,'asd',1,'asd','2022-11-25 18:23:28','2022-11-25 18:23:28',0),(178,21,1,'test','test','test',1,1,'1231232',1,'','2022-11-30 18:54:02','2022-11-30 18:54:02',0),(179,21,1,'tes','test','tes',1,1,'123123',1,'','2022-11-30 18:54:02','2022-11-30 18:54:02',0),(180,21,1,'test','test','test',1,1,'1231232',1,'','2022-11-30 18:54:02','2022-11-30 18:54:02',0),(223,53,1,'test','test','test',1,1,'2323',1,'test','2022-12-04 13:49:47','2022-12-04 13:49:47',0),(224,53,1,'test','test','test',1,1,'23232',1,'test','2022-12-04 13:49:47','2022-12-04 13:49:47',0);
/*!40000 ALTER TABLE `tbl_project_twg` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_rank`
--

DROP TABLE IF EXISTS `tbl_rank`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_rank` (
  `id` int(11) NOT NULL,
  `classification_id` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT current_timestamp(),
  `deleted_flag` tinyint(4) DEFAULT 0,
  `name` varchar(255) DEFAULT NULL,
  `color` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_rank`
--

LOCK TABLES `tbl_rank` WRITE;
/*!40000 ALTER TABLE `tbl_rank` DISABLE KEYS */;
INSERT INTO `tbl_rank` VALUES (1,2,'2022-11-22 17:22:04','2022-11-22 17:22:04',0,'Private First Class','black'),(2,2,'2022-11-22 17:22:04','2022-11-22 17:22:04',0,'Corporal','black'),(3,2,'2022-11-22 17:22:04','2022-11-22 17:22:04',0,'Sergeant','black'),(4,2,'2022-11-22 17:22:04','2022-11-22 17:22:04',0,'Staff Sergeant','black'),(5,2,'2022-11-22 17:22:04','2022-11-22 17:22:04',0,'Technical Sergeant','black'),(6,2,'2022-11-22 17:22:04','2022-11-22 17:22:04',0,'Master Sergeant','black'),(7,2,'2022-11-22 17:22:04','2022-11-22 17:22:04',0,'Senior Master Sergeant','black'),(8,2,'2022-11-22 17:22:04','2022-11-22 17:22:04',0,'Chief Master Sergeant','black'),(9,2,'2022-11-22 17:22:04','2022-11-22 17:22:04',0,'First Chief Master Sergeant','black'),(10,1,'2022-11-22 17:22:04','2022-11-22 17:22:04',0,'Second Lieutenant','red'),(11,1,'2022-11-22 17:22:04','2022-11-22 17:22:04',0,'First Lieutenant','red'),(12,1,'2022-11-22 17:22:04','2022-11-22 17:22:04',0,'Captain','red'),(13,1,'2022-11-22 17:22:04','2022-11-22 17:22:04',0,'Major','red'),(14,1,'2022-11-22 17:22:04','2022-11-22 17:22:04',0,'Lieutenant Colonel','red'),(15,1,'2022-11-22 17:22:04','2022-11-22 17:22:04',0,'Colonel','red'),(16,1,'2022-11-22 17:22:04','2022-11-22 17:22:04',0,'Brigadier General','red'),(17,1,'2022-11-22 17:22:04','2022-11-22 17:22:04',0,'Major General','red'),(18,1,'2022-11-22 17:22:04','2022-11-22 17:22:04',0,'Lieutenant General','red'),(19,1,'2022-11-22 17:22:04','2022-11-22 17:22:04',0,'General','red');
/*!40000 ALTER TABLE `tbl_rank` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_suffix`
--

DROP TABLE IF EXISTS `tbl_suffix`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_suffix` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `deleted_flag` int(11) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_suffix`
--

LOCK TABLES `tbl_suffix` WRITE;
/*!40000 ALTER TABLE `tbl_suffix` DISABLE KEYS */;
INSERT INTO `tbl_suffix` VALUES (1,'None',0),(2,'Jr.',0),(3,'Jr. II',0),(4,'Sr.',0),(5,'II',0),(6,'III',0),(7,'IV',0),(8,'V',0),(9,'VI',0);
/*!40000 ALTER TABLE `tbl_suffix` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_supplier_status`
--

DROP TABLE IF EXISTS `tbl_supplier_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_supplier_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_date` datetime DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT current_timestamp(),
  `deleted_flag` tinyint(4) DEFAULT 0,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_supplier_status`
--

LOCK TABLES `tbl_supplier_status` WRITE;
/*!40000 ALTER TABLE `tbl_supplier_status` DISABLE KEYS */;
INSERT INTO `tbl_supplier_status` VALUES (1,'2022-11-23 10:55:56','2022-11-23 10:55:56',1,'FOR PQ'),(2,'2022-11-23 10:55:56','2022-11-23 10:55:56',0,'PASSED'),(3,'2022-11-26 19:10:18','2022-11-26 19:10:18',0,'FAILED');
/*!40000 ALTER TABLE `tbl_supplier_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_unit`
--

DROP TABLE IF EXISTS `tbl_unit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_unit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_date` datetime DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT current_timestamp(),
  `deleted_flag` tinyint(4) DEFAULT 0,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_unit`
--

LOCK TABLES `tbl_unit` WRITE;
/*!40000 ALTER TABLE `tbl_unit` DISABLE KEYS */;
INSERT INTO `tbl_unit` VALUES (1,'2022-11-20 20:26:08','2022-11-20 20:26:08',0,'EA'),(2,'2022-11-20 20:26:08','2022-11-20 20:26:08',0,'LOT'),(3,'2022-11-20 20:26:08','2022-11-20 20:26:08',0,'PCS'),(4,'2022-11-20 20:26:08','2022-11-20 20:26:08',0,'PRS'),(5,'2022-11-20 20:26:08','2022-11-20 20:26:08',0,'RDS'),(6,'2022-11-20 20:26:08','2022-11-20 20:26:08',0,'SET'),(7,'2022-11-20 20:26:08','2022-11-20 20:26:08',0,'UNIT');
/*!40000 ALTER TABLE `tbl_unit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_user_status`
--

DROP TABLE IF EXISTS `tbl_user_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_user_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT current_timestamp(),
  `deleted_flag` tinyint(4) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_user_status`
--

LOCK TABLES `tbl_user_status` WRITE;
/*!40000 ALTER TABLE `tbl_user_status` DISABLE KEYS */;
INSERT INTO `tbl_user_status` VALUES (1,'PENDING','2022-11-20 15:54:56','2022-11-20 15:54:56',0),(2,'VERIFIED','2022-11-20 15:54:56','2022-11-20 15:54:56',0);
/*!40000 ALTER TABLE `tbl_user_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_users`
--

DROP TABLE IF EXISTS `tbl_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `approved_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=353 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_users`
--

LOCK TABLES `tbl_users` WRITE;
/*!40000 ALTER TABLE `tbl_users` DISABLE KEYS */;
INSERT INTO `tbl_users` VALUES (1,1,1,'123','admin','$2y$10$0wT9y123kN7PasG4NBqQf.QmKwpnPcWR01.b9bYvL20ZTznZqFaqO',1,2,14,'2022-08-13 18:16:03','2022-11-12 18:06:41',0,NULL,1),(2,1,1,'456','officer','$2y$10$0wT9y123kN7PasG4NBqQf.QmKwpnPcWR01.b9bYvL20ZTznZqFaqO',2,1,10,'2022-08-13 18:17:02','2022-08-24 14:46:04',0,NULL,1),(3,1,1,'789','personnel','$2y$10$0wT9y123kN7PasG4NBqQf.QmKwpnPcWR01.b9bYvL20ZTznZqFaqO',2,1,2,'2022-08-13 18:17:02','2022-11-15 23:45:25',0,NULL,1),(347,1,1,'123456','test','$2y$10$0wT9y123kN7PasG4NBqQf.QmKwpnPcWR01.b9bYvL20ZTznZqFaqO',2,1,10,'2022-11-20 19:29:54','2022-11-20 19:29:54',0,NULL,NULL),(348,1,1,'999999999','testasd','$2y$10$0wT9y123kN7PasG4NBqQf.QmKwpnPcWR01.b9bYvL20ZTznZqFaqO',2,1,10,'2022-11-20 19:33:04','2022-11-20 19:33:04',0,NULL,NULL),(349,1,1,'dasdadas','jimenez31396','$2y$10$0wT9y123kN7PasG4NBqQf.QmKwpnPcWR01.b9bYvL20ZTznZqFaqO',2,1,10,'2022-11-20 19:36:21','2022-11-20 19:36:21',0,NULL,NULL),(350,1,1,'asdasdasdsa','testest','$2y$10$0wT9y123kN7PasG4NBqQf.QmKwpnPcWR01.b9bYvL20ZTznZqFaqO',3,1,1,'2022-11-20 19:42:35','2022-11-20 19:42:35',0,1,NULL),(351,1,1,'yrd','yrdy','$2y$10$0wT9y123kN7PasG4NBqQf.QmKwpnPcWR01.b9bYvL20ZTznZqFaqO',3,1,1,'2022-11-22 18:21:58','2022-11-22 18:21:58',0,1,NULL),(352,1,3,'123213213','123213213','$2y$10$7IDGYwpkq9P7MPATn.FtQO0A1IVmtR50df3/YMqmjhyDXSKhHmMKu',3,1,1,'2022-11-28 14:08:25','2022-11-28 14:08:25',0,1,NULL);
/*!40000 ALTER TABLE `tbl_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_users_info`
--

DROP TABLE IF EXISTS `tbl_users_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_users_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'calculate age',
  `first_name` varchar(45) DEFAULT NULL,
  `middle_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `contact_no` varchar(45) DEFAULT NULL,
  `suffix` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT 'default.jpg',
  `suffix_id` int(11) DEFAULT 1,
  `created_date` datetime DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT current_timestamp(),
  `deleted_flag` tinyint(4) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=353 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_users_info`
--

LOCK TABLES `tbl_users_info` WRITE;
/*!40000 ALTER TABLE `tbl_users_info` DISABLE KEYS */;
INSERT INTO `tbl_users_info` VALUES (1,'admin','admin','admin','09217635295',NULL,'default.jpg',1,'2022-08-13 18:17:51','2022-11-12 18:06:41',0),(2,'officer','officer','officer','09217635295',NULL,'default.jpg',1,'2022-08-13 18:17:51','2022-08-24 14:46:04',0),(3,'personnel','personnel','personnel','09217635295',NULL,'default.jpg',1,'2022-08-13 18:17:51','2022-08-24 14:46:04',0),(347,'test','test','test',NULL,'','default.jpg',1,'2022-11-20 19:29:54','2022-11-20 19:29:54',0),(348,'customer4','','customer4',NULL,'test','default.jpg',1,'2022-11-20 19:33:04','2022-11-20 19:33:04',0),(349,'testestes','testest','testes',NULL,'tsetes','default.jpg',1,'2022-11-20 19:36:21','2022-11-20 19:36:21',0),(350,'customer4asd','test','customer4',NULL,'test','default.jpg',1,'2022-11-20 19:42:35','2022-11-20 19:42:35',0),(351,'yrdy','yrdy','yrd',NULL,NULL,'default.jpg',1,'2022-11-22 18:21:58','2022-11-22 18:21:58',0),(352,'test123213','test123213','test123213',NULL,NULL,'default.jpg',4,'2022-11-28 14:08:25','2022-11-28 14:08:25',0);
/*!40000 ALTER TABLE `tbl_users_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_users_status`
--

DROP TABLE IF EXISTS `tbl_users_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_users_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_date` datetime DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT current_timestamp(),
  `deleted_flag` tinyint(4) DEFAULT 0,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_users_status`
--

LOCK TABLES `tbl_users_status` WRITE;
/*!40000 ALTER TABLE `tbl_users_status` DISABLE KEYS */;
INSERT INTO `tbl_users_status` VALUES (1,'2022-11-22 17:37:24','2022-11-22 17:37:24',0,'ACTIVE'),(2,'2022-11-22 17:37:24','2022-11-22 17:37:24',0,'IN-ACTIVE'),(3,'2022-11-22 17:37:24','2022-11-22 17:37:24',0,'DELETED');
/*!40000 ALTER TABLE `tbl_users_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_verify_status`
--

DROP TABLE IF EXISTS `tbl_verify_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_verify_status` (
  `id` int(11) NOT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT current_timestamp(),
  `deleted_flag` tinyint(4) DEFAULT 0,
  `name` varchar(255) DEFAULT NULL,
  `tbl_verify_statuscol` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`tbl_verify_statuscol`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_verify_status`
--

LOCK TABLES `tbl_verify_status` WRITE;
/*!40000 ALTER TABLE `tbl_verify_status` DISABLE KEYS */;
INSERT INTO `tbl_verify_status` VALUES (0,'2022-11-22 17:38:11','2022-11-22 17:38:11',0,'PENDING',1),(1,'2022-11-22 17:38:11','2022-11-22 17:38:11',0,'VERIFIED',2);
/*!40000 ALTER TABLE `tbl_verify_status` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-12-04 13:55:18
