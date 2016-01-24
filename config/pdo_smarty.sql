CREATE DATABASE  IF NOT EXISTS `laravel_blog` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `laravel_blog`;
-- MySQL dump 10.13  Distrib 5.6.13, for osx10.6 (i386)
--
-- Host: 127.0.0.1    Database: laravel_blog
-- ------------------------------------------------------
-- Server version	5.6.26

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
-- Table structure for table `ROLE`
--

DROP TABLE IF EXISTS `ROLE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ROLE` (
  `rol_id` int(11) NOT NULL AUTO_INCREMENT,
  `rol_name` varchar(45) NOT NULL,
  `rol_desc` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`rol_id`),
  UNIQUE KEY `rol_name_UNIQUE` (`rol_name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ROLE`
--

LOCK TABLES `ROLE` WRITE;
/*!40000 ALTER TABLE `ROLE` DISABLE KEYS */;
INSERT INTO `ROLE` VALUES (1,'admin','Administrator'),(2,'editor','Editor'),(3,'player','Player');
/*!40000 ALTER TABLE `ROLE` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `USERS`
--

DROP TABLE IF EXISTS `USERS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `USERS` (
  `usr_id` int(11) NOT NULL AUTO_INCREMENT,
  `usr_name` varchar(100) NOT NULL,
  `usr_firstname` varchar(45) DEFAULT NULL,
  `usr_lastname` varchar(45) DEFAULT NULL,
  `usr_email` varchar(100) DEFAULT NULL,
  `usr_password` varchar(100) DEFAULT NULL,
  `usr_active_fg` tinyint(1) DEFAULT '0',
  `usr_pwd_change_fg` tinyint(1) DEFAULT NULL,
  `usr_access_token` varchar(45) DEFAULT NULL,
  `usr_reset_token` varchar(45) DEFAULT NULL,
  `usr_uuid` varchar(45) DEFAULT NULL,
  `rol_id` int(11) DEFAULT NULL,
  `usr_last_login_dt` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`usr_id`),
  UNIQUE KEY `usr_name_UNIQUE` (`usr_name`),
  UNIQUE KEY `usr_email_UNIQUE` (`usr_email`),
  UNIQUE KEY `usr_password_UNIQUE` (`usr_password`),
  UNIQUE KEY `usr_status_UNIQUE` (`usr_active_fg`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `USERS`
--

LOCK TABLES `USERS` WRITE;
/*!40000 ALTER TABLE `USERS` DISABLE KEYS */;
INSERT INTO `USERS` VALUES (2,'Frank',NULL,NULL,'me.sochea@gmail.com','$2y$10$T7fw55d.cuKEm8WdACGD/OSwsKzdI/6mYjEP/NQRwBbQI.ZoiKcJe',1,NULL,'09896387a4f0e399c722b4c5e3988784','3f119997da9fa0ca2785cb05537e6e3b',NULL,1,'2015-12-09 13:35:28','2015-09-19 09:21:50','2015-12-09 13:35:28');
/*!40000 ALTER TABLE `USERS` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-01-23 16:23:13
