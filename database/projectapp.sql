-- MySQL dump 10.13  Distrib 8.0.38, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: projectapp
-- ------------------------------------------------------
-- Server version	8.0.39

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
INSERT INTO `cache` VALUES ('spatie.permission.cache','a:3:{s:5:\"alias\";a:4:{s:1:\"a\";s:2:\"id\";s:1:\"b\";s:4:\"name\";s:1:\"c\";s:10:\"guard_name\";s:1:\"r\";s:5:\"roles\";}s:11:\"permissions\";a:28:{i:0;a:4:{s:1:\"a\";i:2;s:1:\"b\";s:9:\"edit role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:4;}}i:1;a:4:{s:1:\"a\";i:4;s:1:\"b\";s:11:\"delete role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:4;}}i:2;a:4:{s:1:\"a\";i:8;s:1:\"b\";s:11:\"create role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:4;}}i:3;a:4:{s:1:\"a\";i:9;s:1:\"b\";s:9:\"view role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:4;}}i:4;a:4:{s:1:\"a\";i:10;s:1:\"b\";s:15:\"view permission\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:4;}}i:5;a:4:{s:1:\"a\";i:11;s:1:\"b\";s:17:\"update permission\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:4;}}i:6;a:4:{s:1:\"a\";i:12;s:1:\"b\";s:17:\"create permission\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:4;}}i:7;a:4:{s:1:\"a\";i:13;s:1:\"b\";s:17:\"delete permission\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:4;}}i:8;a:4:{s:1:\"a\";i:14;s:1:\"b\";s:9:\"view user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:4;}}i:9;a:4:{s:1:\"a\";i:15;s:1:\"b\";s:11:\"update user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:4;}}i:10;a:4:{s:1:\"a\";i:16;s:1:\"b\";s:11:\"create user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:4;}}i:11;a:4:{s:1:\"a\";i:17;s:1:\"b\";s:11:\"delete user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:4;}}i:12;a:4:{s:1:\"a\";i:19;s:1:\"b\";s:13:\"view incoming\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:4;i:1;i:6;}}i:13;a:4:{s:1:\"a\";i:20;s:1:\"b\";s:15:\"update incoming\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:4;i:1;i:6;}}i:14;a:4:{s:1:\"a\";i:21;s:1:\"b\";s:15:\"create incoming\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:4;i:1;i:6;}}i:15;a:4:{s:1:\"a\";i:22;s:1:\"b\";s:15:\"delete incoming\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:4;i:1;i:6;}}i:16;a:4:{s:1:\"a\";i:23;s:1:\"b\";s:9:\"view good\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:4;i:1;i:5;}}i:17;a:4:{s:1:\"a\";i:24;s:1:\"b\";s:11:\"create good\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:4;i:1;i:5;}}i:18;a:4:{s:1:\"a\";i:25;s:1:\"b\";s:11:\"update good\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:4;i:1;i:5;}}i:19;a:4:{s:1:\"a\";i:26;s:1:\"b\";s:11:\"delete good\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:4;i:1;i:5;}}i:20;a:4:{s:1:\"a\";i:27;s:1:\"b\";s:13:\"view operator\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:4;i:1;i:5;}}i:21;a:4:{s:1:\"a\";i:28;s:1:\"b\";s:15:\"create operator\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:4;i:1;i:5;}}i:22;a:4:{s:1:\"a\";i:29;s:1:\"b\";s:15:\"update operator\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:4;i:1;i:5;}}i:23;a:4:{s:1:\"a\";i:30;s:1:\"b\";s:15:\"delete operator\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:4;i:1;i:5;}}i:24;a:4:{s:1:\"a\";i:31;s:1:\"b\";s:14:\"view outcoming\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:4;i:1;i:6;}}i:25;a:4:{s:1:\"a\";i:32;s:1:\"b\";s:16:\"create outcoming\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:4;i:1;i:6;}}i:26;a:4:{s:1:\"a\";i:33;s:1:\"b\";s:16:\"update outcoming\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:4;i:1;i:6;}}i:27;a:4:{s:1:\"a\";i:34;s:1:\"b\";s:16:\"delete outcoming\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:4;i:1;i:6;}}}s:5:\"roles\";a:3:{i:0;a:3:{s:1:\"a\";i:4;s:1:\"b\";s:11:\"super admin\";s:1:\"c\";s:3:\"web\";}i:1;a:3:{s:1:\"a\";i:6;s:1:\"b\";s:4:\"user\";s:1:\"c\";s:3:\"web\";}i:2;a:3:{s:1:\"a\";i:5;s:1:\"b\";s:5:\"admin\";s:1:\"c\";s:3:\"web\";}}}',1731693819);
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `goods`
--

DROP TABLE IF EXISTS `goods`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `goods` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe_barang` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `merek_barang` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` smallint DEFAULT NULL,
  `satuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rak_barang` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_rak` smallint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `stok_alert` int DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `goods`
--

LOCK TABLES `goods` WRITE;
/*!40000 ALTER TABLE `goods` DISABLE KEYS */;
INSERT INTO `goods` VALUES (1,'Pressure Transducer','PT-141C','Cosmo',63,'pcs','E',1,'2024-09-20 06:13:42','2024-11-14 18:04:15',6,NULL,NULL),(2,'Sensor Reed Switch CKD','SW-T0H','CKD',24,'','E',2,'2024-09-20 06:13:42','2024-11-14 17:20:30',NULL,NULL,''),(3,'Sensor Reed Switch Omron','E3T-FT12','Omron',5,'','E',3,'2024-09-20 06:13:42','2024-09-20 06:13:42',NULL,NULL,''),(4,'Sensor Reed Switch CKD','F2H','CKD',22,'','E',4,'2024-09-20 06:13:42','2024-09-20 06:13:42',NULL,NULL,''),(5,'Sensor Reed Switch SMC','D-M9BV','SMC',4,'','E',5,'2024-09-20 06:13:42','2024-09-20 06:13:42',NULL,NULL,''),(6,'Sensor Reed Switch SMC','D-M9N','SMC',15,'','E',6,'2024-09-20 06:13:42','2024-09-20 06:13:42',NULL,NULL,''),(7,'Sensor Reed Switch SMC','D-M9P','SMC',10,'','E',7,'2024-09-20 06:13:42','2024-09-20 06:13:42',NULL,NULL,''),(8,'Sensor Reed Switch Misumi','CS4B','Misumi',6,'','E',8,'2024-09-20 06:13:42','2024-09-20 06:13:42',NULL,NULL,''),(9,'Sensor Reed Switch CKD','SW-T2H','CKD',19,'','E',9,'2024-09-20 06:13:42','2024-09-20 06:13:42',NULL,NULL,''),(10,'Sensor Reflective Omron','T2WV','CKD',5,'','E',10,'2024-09-20 06:13:42','2024-09-20 06:13:42',NULL,NULL,''),(11,'Sensor Photosensor Omron','EE-SX671','Omron',10,'','E',11,'2024-09-20 06:13:42','2024-09-20 06:13:42',NULL,NULL,''),(12,'Sensor Photosensor Omron','EE-SX672-WR','Omron',32,'','E',11,'2024-09-20 06:13:42','2024-09-20 06:13:42',NULL,NULL,''),(13,'Sensor Reed Switch CKD','SW-M2WV','CKD',8,'','E',12,'2024-09-20 06:13:42','2024-09-20 06:13:42',NULL,NULL,''),(14,'Sensor Proximity Omron','E2E-CO4S12-WC-C1','Omron',3,'','E',13,'2024-09-20 06:13:42','2024-09-20 06:13:42',NULL,NULL,''),(15,'Sensor Reed Switch SMC','D-M9B','SMC',7,'','E',14,'2024-09-20 06:13:42','2024-09-20 06:13:42',NULL,NULL,''),(16,'Sensor Reed Switch XCPC','XC-21R','XCPC',20,'','E',15,'2024-09-20 06:13:42','2024-09-20 06:13:42',NULL,NULL,''),(17,'Sensor Reed Switch Koganei','ZC 153A','Koganei',4,'','E',16,'2024-09-20 06:13:42','2024-09-20 06:13:42',NULL,NULL,''),(18,'Sensor Proximity Taiyo Parker','L3-245','Taiyo Parker',10,'','E',17,'2024-09-20 06:13:42','2024-09-20 06:13:42',NULL,NULL,''),(19,'Sensor Metrol','CS067A-B','Metro',1,'','E',18,'2024-09-20 06:13:42','2024-09-20 06:13:42',NULL,NULL,''),(20,'Sensor Reed Switch SMC','D-M9PW','SMC',2,'','E',19,'2024-09-20 06:13:42','2024-09-20 06:13:42',NULL,NULL,''),(21,'Sensor Reed Switch CKD','F2VH','CKD',2,'','E',20,'2024-09-20 06:13:42','2024-09-20 06:13:42',NULL,NULL,''),(22,'Sensor Reed Switch CKD','F2V','CKD',4,'','E',21,'2024-09-20 06:13:42','2024-09-20 06:13:42',NULL,NULL,''),(23,'Cylinder rotary SMC','MRHQ20D-180S-N','SMC',2,'','E',22,'2024-09-20 06:13:42','2024-09-20 06:13:42',NULL,NULL,''),(24,'Cylinder rotary SMC','CDRB2BW40-270SZ','SMC',3,'','E',23,'2024-09-20 06:13:42','2024-09-20 06:13:42',NULL,NULL,''),(25,'Cylinder SMC','MKB32-20LZ','SMC',2,'','E',24,'2024-09-20 06:13:42','2024-09-20 06:13:42',NULL,NULL,''),(26,'Cutter','XB108S','OLFA',9,'','E',25,'2024-09-20 06:13:42','2024-09-20 06:13:42',NULL,NULL,''),(31,'Sensor','TOK-000','SMC',15,'pcs','R',25,'2024-11-13 07:41:03','2024-11-13 07:43:43',5,NULL,'tester');
/*!40000 ALTER TABLE `goods` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_batches`
--

LOCK TABLES `job_batches` WRITE;
/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (10,'0001_01_01_000000_create_users_table',1),(11,'0001_01_01_000001_create_cache_table',1),(12,'0001_01_01_000002_create_jobs_table',1),(13,'2024_10_30_185908_create_goods_table',1),(14,'2024_10_30_185920_create_operators_table',1),(15,'2024_10_30_190934_drop_movements_table',1),(16,'2024_10_30_185934_create_movements_table',2),(17,'2024_10_31_054256_add_good_table',3),(20,'2024_11_01_140132_add_qty_to_movements_table',4),(21,'2024_11_02_201219_add_details_to_goods_table',4),(22,'2024_11_06_000056_create_permission_tables',5);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_permissions`
--

LOCK TABLES `model_has_permissions` WRITE;
/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_roles` (
  `role_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_roles`
--

LOCK TABLES `model_has_roles` WRITE;
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
INSERT INTO `model_has_roles` VALUES (6,'App\\Models\\User',1),(4,'App\\Models\\User',3),(4,'App\\Models\\User',4),(5,'App\\Models\\User',5),(5,'App\\Models\\User',6),(4,'App\\Models\\User',7),(5,'App\\Models\\User',7);
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `movements`
--

DROP TABLE IF EXISTS `movements`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `movements` (
  `id_proses` int unsigned NOT NULL AUTO_INCREMENT,
  `jumlah` smallint NOT NULL,
  `status` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barang_id` bigint unsigned NOT NULL,
  `operator_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_proses`),
  KEY `movements_barang_id_foreign` (`barang_id`),
  KEY `movements_operator_id_foreign` (`operator_id`),
  CONSTRAINT `movements_barang_id_foreign` FOREIGN KEY (`barang_id`) REFERENCES `goods` (`id`) ON DELETE CASCADE,
  CONSTRAINT `movements_operator_id_foreign` FOREIGN KEY (`operator_id`) REFERENCES `operators` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `movements`
--

LOCK TABLES `movements` WRITE;
/*!40000 ALTER TABLE `movements` DISABLE KEYS */;
INSERT INTO `movements` VALUES (1,1,'1',2,1,'2024-11-01 11:29:56','2024-11-01 11:29:56'),(2,1,'1',6,8,'2024-11-01 18:31:27','2024-11-01 18:31:27'),(3,1,'0',22,8,'2024-11-02 07:50:34','2024-11-02 07:50:34'),(4,1,'1',3,7,'2024-11-02 10:44:43','2024-11-02 10:44:43'),(5,1,'0',20,9,'2024-11-02 10:45:01','2024-11-02 10:45:01'),(6,1,'0',2,9,'2024-11-02 11:59:09','2024-11-02 11:59:09'),(9,1,'1',2,8,'2024-11-05 11:26:42','2024-11-05 11:26:42'),(10,1,'1',2,1,'2024-11-05 11:27:02','2024-11-05 11:27:02'),(11,1,'0',1,1,'2024-11-05 11:33:04','2024-11-05 11:33:04'),(12,1,'1',1,1,'2024-11-05 11:33:19','2024-11-05 11:33:19'),(13,15,'0',1,1,'2024-11-05 11:33:34','2024-11-05 11:33:34'),(14,15,'1',1,1,'2024-11-05 11:33:47','2024-11-05 11:33:47'),(15,15,'1',1,1,'2024-11-05 11:43:15','2024-11-05 11:43:15'),(16,15,'1',1,9,'2024-11-05 11:44:16','2024-11-05 11:44:16'),(17,15,'1',1,1,'2024-11-05 11:48:19','2024-11-05 11:48:19'),(18,1,'1',1,1,'2024-11-05 11:50:36','2024-11-05 11:50:36'),(19,1,'1',1,1,'2024-11-05 13:06:42','2024-11-05 13:06:42'),(20,1,'1',1,1,'2024-11-05 13:16:18','2024-11-05 13:16:18'),(21,1,'1',1,1,'2024-11-05 14:01:41','2024-11-05 14:01:41'),(22,1,'1',1,1,'2024-11-05 14:01:56','2024-11-05 14:01:56'),(23,1,'1',1,1,'2024-11-05 14:05:38','2024-11-05 14:05:38'),(24,1,'1',1,1,'2024-11-05 14:07:33','2024-11-05 14:07:33'),(25,1,'1',1,1,'2024-11-05 14:07:56','2024-11-05 14:07:56'),(26,1,'1',1,1,'2024-11-05 14:08:07','2024-11-05 14:08:07'),(27,1,'1',1,1,'2024-11-05 14:08:18','2024-11-05 14:08:18'),(28,1,'1',1,7,'2024-11-05 14:08:50','2024-11-05 14:08:50'),(29,1,'1',1,8,'2024-11-05 14:09:06','2024-11-05 14:09:06'),(30,1,'0',1,1,'2024-11-05 14:09:37','2024-11-05 14:09:37'),(31,1,'0',1,1,'2024-11-05 14:09:38','2024-11-05 14:09:38'),(32,1,'0',1,7,'2024-11-05 14:09:50','2024-11-05 14:09:50'),(33,3,'0',1,10,'2024-11-05 14:11:17','2024-11-05 14:11:17'),(34,3,'0',1,10,'2024-11-05 14:12:04','2024-11-05 14:12:04'),(35,3,'0',1,10,'2024-11-05 14:20:08','2024-11-05 14:20:08'),(36,1,'1',1,7,'2024-11-05 14:22:17','2024-11-05 14:22:17'),(37,1,'0',1,1,'2024-11-05 14:22:26','2024-11-05 14:22:26'),(38,1,'1',1,7,'2024-11-05 14:22:33','2024-11-05 14:22:33'),(39,1,'1',1,1,'2024-11-05 14:33:41','2024-11-05 14:33:41'),(40,1,'1',1,1,'2024-11-05 14:35:13','2024-11-05 14:35:13'),(41,1,'1',1,1,'2024-11-05 14:39:27','2024-11-05 14:39:27'),(42,8,'1',1,1,'2024-11-05 14:39:55','2024-11-05 14:39:55'),(43,30,'1',1,7,'2024-11-05 14:40:38','2024-11-05 14:40:38'),(44,1,'1',1,1,'2024-11-05 14:41:02','2024-11-05 14:41:02'),(45,1,'1',1,1,'2024-11-05 14:41:02','2024-11-05 14:41:02'),(46,1,'1',1,1,'2024-11-05 14:41:08','2024-11-05 14:41:08'),(47,1,'1',1,1,'2024-11-05 14:41:08','2024-11-05 14:41:08'),(48,1,'1',1,1,'2024-11-05 14:41:09','2024-11-05 14:41:09'),(49,64,'0',1,7,'2024-11-05 14:41:47','2024-11-05 14:41:47'),(50,30,'1',1,7,'2024-11-05 14:42:36','2024-11-05 14:42:36'),(51,1,'1',1,1,'2024-11-05 14:43:22','2024-11-05 14:43:22'),(52,64,'0',1,1,'2024-11-05 14:43:46','2024-11-05 14:43:46'),(53,200,'1',1,1,'2024-11-05 14:43:59','2024-11-05 14:43:59'),(54,200,'1',1,1,'2024-11-05 14:45:02','2024-11-05 14:45:02'),(55,1,'0',1,1,'2024-11-05 15:01:05','2024-11-05 15:01:05'),(56,1,'1',1,7,'2024-11-05 15:01:11','2024-11-05 15:01:11'),(57,1,'1',1,7,'2024-11-05 15:01:25','2024-11-05 15:01:25'),(58,1,'1',1,1,'2024-11-05 15:02:46','2024-11-05 15:02:46'),(59,52,'1',1,7,'2024-11-05 15:02:53','2024-11-05 15:02:53'),(60,6,'1',1,1,'2024-11-05 15:03:50','2024-11-05 15:03:50'),(61,1,'1',1,7,'2024-11-05 15:24:06','2024-11-05 15:24:06'),(62,1,'1',1,7,'2024-11-05 15:26:12','2024-11-05 15:26:12'),(63,1,'1',1,7,'2024-11-05 15:46:38','2024-11-05 15:46:38'),(64,100,'1',1,7,'2024-11-05 15:47:06','2024-11-05 15:47:06'),(65,400,'1',1,7,'2024-11-05 15:47:20','2024-11-05 15:47:20'),(66,15,'0',31,1,'2024-11-13 07:43:43','2024-11-13 07:43:43'),(67,1,'0',1,1,'2024-11-14 10:25:16','2024-11-14 10:25:16'),(68,1,'0',2,1,'2024-11-14 17:20:30','2024-11-14 17:20:30'),(69,1,'1',1,7,'2024-11-14 18:04:15','2024-11-14 18:04:15');
/*!40000 ALTER TABLE `movements` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `operators`
--

DROP TABLE IF EXISTS `operators`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `operators` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama_operator` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_operator` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `factory` smallint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_operator_UNIQUE` (`id_operator`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `operators`
--

LOCK TABLES `operators` WRITE;
/*!40000 ALTER TABLE `operators` DISABLE KEYS */;
INSERT INTO `operators` VALUES (1,'Andi','2010501062',1,'2024-11-01 08:12:13','2024-11-05 13:00:54'),(7,'David','2010501079',2,'2024-11-01 10:56:22','2024-11-02 07:49:39'),(8,'Amar','2010501078',2,'2024-11-01 10:58:33','2024-11-01 10:58:33'),(9,'John','2010501072',2,'2024-11-01 11:05:54','2024-11-01 11:05:54'),(10,'Aldo','2010501073',2,'2024-11-01 11:06:51','2024-11-01 11:06:51');
/*!40000 ALTER TABLE `operators` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (2,'edit role','web','2024-11-05 18:27:45','2024-11-05 22:55:11'),(4,'delete role','web','2024-11-05 22:53:05','2024-11-05 22:55:42'),(8,'create role','web','2024-11-06 07:36:04','2024-11-06 07:36:12'),(9,'view role','web','2024-11-06 11:02:12','2024-11-06 11:02:12'),(10,'view permission','web','2024-11-08 14:11:37','2024-11-08 14:11:37'),(11,'update permission','web','2024-11-08 14:11:49','2024-11-08 14:11:49'),(12,'create permission','web','2024-11-08 14:12:06','2024-11-08 14:12:06'),(13,'delete permission','web','2024-11-08 14:12:17','2024-11-08 14:12:17'),(14,'view user','web','2024-11-14 07:21:31','2024-11-14 07:21:31'),(15,'update user','web','2024-11-14 07:21:48','2024-11-14 07:21:48'),(16,'create user','web','2024-11-14 07:22:01','2024-11-14 07:22:01'),(17,'delete user','web','2024-11-14 07:22:11','2024-11-14 07:22:11'),(19,'view incoming','web','2024-11-14 07:41:10','2024-11-14 07:41:10'),(20,'update incoming','web','2024-11-14 07:41:19','2024-11-14 07:42:23'),(21,'create incoming','web','2024-11-14 07:41:29','2024-11-14 07:41:29'),(22,'delete incoming','web','2024-11-14 07:41:42','2024-11-14 07:41:42'),(23,'view good','web','2024-11-14 07:43:06','2024-11-14 07:43:06'),(24,'create good','web','2024-11-14 07:43:15','2024-11-14 07:43:15'),(25,'update good','web','2024-11-14 07:43:22','2024-11-14 07:43:22'),(26,'delete good','web','2024-11-14 07:43:33','2024-11-14 07:43:33'),(27,'view operator','web','2024-11-14 07:43:44','2024-11-14 07:43:44'),(28,'create operator','web','2024-11-14 07:43:58','2024-11-14 07:43:58'),(29,'update operator','web','2024-11-14 07:44:07','2024-11-14 07:44:07'),(30,'delete operator','web','2024-11-14 07:44:55','2024-11-14 07:44:55'),(31,'view outcoming','web','2024-11-14 07:45:31','2024-11-14 07:45:31'),(32,'create outcoming','web','2024-11-14 07:45:43','2024-11-14 07:45:43'),(33,'update outcoming','web','2024-11-14 07:45:55','2024-11-14 07:45:55'),(34,'delete outcoming','web','2024-11-14 07:46:04','2024-11-14 07:46:04');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `role_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_has_permissions`
--

LOCK TABLES `role_has_permissions` WRITE;
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
INSERT INTO `role_has_permissions` VALUES (2,4),(4,4),(8,4),(9,4),(10,4),(11,4),(12,4),(13,4),(14,4),(15,4),(16,4),(17,4),(19,4),(20,4),(21,4),(22,4),(23,4),(24,4),(25,4),(26,4),(27,4),(28,4),(29,4),(30,4),(31,4),(32,4),(33,4),(34,4),(23,5),(24,5),(25,5),(26,5),(27,5),(28,5),(29,5),(30,5),(19,6),(20,6),(21,6),(22,6),(31,6),(32,6),(33,6),(34,6);
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (4,'super admin','web','2024-11-06 07:33:37','2024-11-06 07:34:16'),(5,'admin','web','2024-11-06 07:34:25','2024-11-06 07:34:25'),(6,'user','web','2024-11-06 07:34:34','2024-11-06 07:34:34');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('qhrpNCIqFq5tYMcODMxxi0AXJDjLM1vGr6GMUde5',7,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36 Edg/130.0.0.0','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiNTNoc0p3a053UWY4UnRocjE3ejFpMkVBaURJSTAyRjRLc3lMQUpuZyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9yZXBvcnRzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6Nzt9',1731667994);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'operator','operator@gmail.com',NULL,'$2y$12$b5l9IaQD70AQwOKV0eULku93obvhzfHP37JGs8biKyFlslBt236gu','D9CvvcUkMj0T74ElHNMEtHonLkW8yWZNnZePVieZyLbGJ7ierKsklMkKraf0','2024-10-30 13:16:38','2024-10-30 13:16:38'),(5,'deka','admin@gmail.com',NULL,'$2y$12$1EPJv.4LWYgcaqRi3WK3N.GP1c2fvGKvun7ILYoBFwv47d4X0MWTG','QCbCJNvpnodYbBHbgbfWXThkiBFfa352NZ74bglVfrptBpNKgRQGKyOENBu7','2024-11-12 07:50:51','2024-11-12 07:50:51'),(6,'lorenzo','lorenzo@gmail.com',NULL,'$2y$12$zZvn/ZDiqd8kK7Ol.Z7avedNk2s18au.aoirT42sI0MSJiBWLx6Hq',NULL,'2024-11-12 07:52:36','2024-11-12 07:52:36'),(7,'Super-Admin','superadmin@gmail.com',NULL,'$2y$12$8k2wkIg52HNiA/72j38tLOQw7T0dAhCJzgc7MaLBUoSGS1rge1wmK','NNro098DWKKbxSNF00sE1su7eM1Vr7iuM5GRN1sGepArOFFDm5YMJCtVek2Z','2024-11-12 08:40:24','2024-11-13 19:13:05');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-11-16  1:40:39
