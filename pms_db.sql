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
INSERT INTO `tbl_access` VALUES (1,'SYSTEM ADMIN','2022-08-12 19:48:56','2022-08-12 19:48:56',0),(2,'OFFICER','2022-08-12 19:48:56','2022-08-12 19:48:56',0),(3,'ENLISTED PERSONNEL','2022-08-12 19:48:56','2022-08-12 19:48:56',0);
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
INSERT INTO `tbl_local` VALUES (1,'2022-11-20 20:54:39','2022-11-20 20:54:39',0,'LOCAL 1'),(2,'2022-11-20 20:54:39','2022-11-20 20:54:39',0,'LOCAL 2'),(3,'2022-11-20 20:54:39','2022-11-20 20:54:39',0,'LOCAL 3');
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_pabac`
--

LOCK TABLES `tbl_pabac` WRITE;
/*!40000 ALTER TABLE `tbl_pabac` DISABLE KEYS */;
INSERT INTO `tbl_pabac` VALUES (1,'ARMORSBAC','2022-11-20 20:23:17','2022-11-20 20:23:17',0),(2,'PABAC1','2022-11-20 20:23:17','2022-11-20 20:23:17',0),(3,'PABAC2','2022-11-20 20:23:17','2022-11-20 20:23:17',0),(4,'PABAC3','2022-11-20 20:23:17','2022-11-20 20:23:17',0);
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
  `epa` int(11) DEFAULT NULL,
  `implementing_unit_id` int(11) DEFAULT NULL,
  `pabac_id` int(11) DEFAULT NULL,
  `pabac_nr` text DEFAULT NULL,
  `upr_nr` text DEFAULT NULL,
  `upr_date` date DEFAULT NULL,
  `comodity_id` int(11) DEFAULT NULL,
  `program_manager_id` int(11) DEFAULT NULL,
  `asa_nr` varchar(255) DEFAULT NULL,
  `asa_date` date DEFAULT NULL,
  `object_code` varchar(255) DEFAULT NULL,
  `asa_amount` varchar(255) DEFAULT NULL,
  `expense_class_id` int(11) DEFAULT NULL,
  `project_description` text DEFAULT NULL,
  `qty` varchar(255) DEFAULT NULL,
  `unit_id` int(11) DEFAULT NULL,
  `abc` varchar(255) DEFAULT NULL,
  `end_user` varchar(255) DEFAULT NULL,
  `mode_of_proc_id` int(11) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  `app_file` varchar(255) DEFAULT NULL,
  `ppmp_file` varchar(255) DEFAULT NULL,
  `procurement_file` varchar(255) DEFAULT NULL,
  `tech_specs_file` varchar(255) DEFAULT NULL,
  `bidding_file` varchar(255) DEFAULT NULL,
  `upr_file` varchar(255) DEFAULT NULL,
  `other_file` varchar(255) DEFAULT NULL,
  `officer_id` int(11) DEFAULT NULL,
  `personell_ids` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT current_timestamp(),
  `deleted_flag` tinyint(4) DEFAULT 0,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_project`
--

LOCK TABLES `tbl_project` WRITE;
/*!40000 ALTER TABLE `tbl_project` DISABLE KEYS */;
INSERT INTO `tbl_project` VALUES (21,1,1,1,'test','test','2022-11-09',1,1,'',NULL,'','',1,'test','78',1,'','test',1,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2,348','2022-11-20 23:20:59','2022-11-20 23:20:59',0,1);
/*!40000 ALTER TABLE `tbl_project` ENABLE KEYS */;
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
  `remarks` text DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT current_timestamp(),
  `deleted_flag` tinyint(4) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_project_history`
--

LOCK TABLES `tbl_project_history` WRITE;
/*!40000 ALTER TABLE `tbl_project_history` DISABLE KEYS */;
INSERT INTO `tbl_project_history` VALUES (1,21,1,NULL,1,'2022-11-20 23:20:59','2022-11-20 23:20:59',0);
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_project_status`
--

LOCK TABLES `tbl_project_status` WRITE;
/*!40000 ALTER TABLE `tbl_project_status` DISABLE KEYS */;
INSERT INTO `tbl_project_status` VALUES (1,'2022-11-20 20:28:14','2022-11-20 20:28:14',0,'NOT STARTED'),(2,'2022-11-20 20:28:14','2022-11-20 20:28:14',0,'UPR'),(3,'2022-11-20 20:28:14','2022-11-20 20:28:14',0,'PRE-PROC'),(4,'2022-11-20 20:28:14','2022-11-20 20:28:14',0,'PRE-BID'),(5,'2022-11-20 20:28:14','2022-11-20 20:28:14',0,'SOBE'),(6,'2022-11-20 20:28:14','2022-11-20 20:28:14',0,'PQ'),(7,'2022-11-20 20:28:14','2022-11-20 20:28:14',0,'PQR'),(8,'2022-11-20 20:28:14','2022-11-20 20:28:14',0,'NOA'),(9,'2022-11-20 20:28:14','2022-11-20 20:28:14',0,'ORS'),(10,'2022-11-20 20:28:14','2022-11-20 20:28:14',0,'NTP'),(11,'2022-11-20 20:28:14','2022-11-20 20:28:14',0,'DELIVERY'),(12,'2022-11-20 20:28:14','2022-11-20 20:28:14',0,'TIAC'),(13,'2022-11-20 20:28:14','2022-11-20 20:28:14',0,'ACCEPTED');
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
  `price` varchar(255) DEFAULT NULL,
  `local_id` int(11) DEFAULT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT current_timestamp(),
  `deleted_flag` tinyint(4) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_project_supplier`
--

LOCK TABLES `tbl_project_supplier` WRITE;
/*!40000 ALTER TABLE `tbl_project_supplier` DISABLE KEYS */;
INSERT INTO `tbl_project_supplier` VALUES (1,21,'123',2,1,'2022-11-20 23:20:59','2022-11-20 23:20:59',0),(2,21,'123',1,1,'2022-11-20 23:20:59','2022-11-20 23:20:59',0);
/*!40000 ALTER TABLE `tbl_project_supplier` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_rank`
--

DROP TABLE IF EXISTS `tbl_rank`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_rank` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT current_timestamp(),
  `deleted_flag` tinyint(4) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_rank`
--

LOCK TABLES `tbl_rank` WRITE;
/*!40000 ALTER TABLE `tbl_rank` DISABLE KEYS */;
INSERT INTO `tbl_rank` VALUES (1,'OFFICER','2022-11-20 10:54:13','2022-11-20 10:54:13',0),(2,'ENLISTED PERSONNEL','2022-11-20 10:54:13','2022-11-20 10:54:13',0);
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
-- Table structure for table `tbl_supplier`
--

DROP TABLE IF EXISTS `tbl_supplier`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_supplier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_date` datetime DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT current_timestamp(),
  `deleted_flag` tinyint(4) DEFAULT 0,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_supplier`
--

LOCK TABLES `tbl_supplier` WRITE;
/*!40000 ALTER TABLE `tbl_supplier` DISABLE KEYS */;
INSERT INTO `tbl_supplier` VALUES (1,'2022-11-20 20:54:07','2022-11-20 20:54:07',0,'SUPPLIER 1'),(2,'2022-11-20 20:54:07','2022-11-20 20:54:07',0,'SUPPLIER 2'),(3,'2022-11-20 20:54:07','2022-11-20 20:54:07',0,'SUPPLIER 3');
/*!40000 ALTER TABLE `tbl_supplier` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=351 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_users`
--

LOCK TABLES `tbl_users` WRITE;
/*!40000 ALTER TABLE `tbl_users` DISABLE KEYS */;
INSERT INTO `tbl_users` VALUES (1,2,'123','admin','$2y$10$0wT9y123kN7PasG4NBqQf.QmKwpnPcWR01.b9bYvL20ZTznZqFaqO',1,1,1,'2022-08-13 18:16:03','2022-11-12 18:06:41',0,NULL,1),(2,2,'456','officer','$2y$10$0wT9y123kN7PasG4NBqQf.QmKwpnPcWR01.b9bYvL20ZTznZqFaqO',2,1,1,'2022-08-13 18:17:02','2022-08-24 14:46:04',0,NULL,1),(3,2,'789','personnel','$2y$10$0wT9y123kN7PasG4NBqQf.QmKwpnPcWR01.b9bYvL20ZTznZqFaqO',3,1,2,'2022-08-13 18:17:02','2022-11-15 23:45:25',0,NULL,1),(347,1,'123456','test','test',1,1,1,'2022-11-20 19:29:54','2022-11-20 19:29:54',0,NULL,NULL),(348,1,'999999999','testasd','test',1,1,1,'2022-11-20 19:33:04','2022-11-20 19:33:04',0,NULL,NULL),(349,1,'dasdadas','jimenez31396','asdasdsa',1,1,1,'2022-11-20 19:36:21','2022-11-20 19:36:21',0,NULL,NULL),(350,1,'asdasdasdsa','testest','testest',1,1,1,'2022-11-20 19:42:35','2022-11-20 19:42:35',0,1,NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=351 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_users_info`
--

LOCK TABLES `tbl_users_info` WRITE;
/*!40000 ALTER TABLE `tbl_users_info` DISABLE KEYS */;
INSERT INTO `tbl_users_info` VALUES (1,'admin','admin','admin','09217635295',NULL,'default.jpg',1,'2022-08-13 18:17:51','2022-11-12 18:06:41',0),(2,'officer','officer','officer','09217635295',NULL,'default.jpg',1,'2022-08-13 18:17:51','2022-08-24 14:46:04',0),(3,'personnel','personnel','personnel','09217635295',NULL,'default.jpg',1,'2022-08-13 18:17:51','2022-08-24 14:46:04',0),(347,'test','test','test',NULL,'','default.jpg',1,'2022-11-20 19:29:54','2022-11-20 19:29:54',0),(348,'customer4','','customer4',NULL,'test','default.jpg',1,'2022-11-20 19:33:04','2022-11-20 19:33:04',0),(349,'testestes','testest','testes',NULL,'tsetes','default.jpg',1,'2022-11-20 19:36:21','2022-11-20 19:36:21',0),(350,'customer4asd','test','customer4',NULL,'test','default.jpg',1,'2022-11-20 19:42:35','2022-11-20 19:42:35',0);
/*!40000 ALTER TABLE `tbl_users_info` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-11-20 23:41:24
