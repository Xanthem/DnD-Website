-- MySQL dump 10.13  Distrib 5.7.9, for Win64 (x86_64)
--
-- Host: localhost    Database: character_db
-- ------------------------------------------------------
-- Server version	5.7.11-log

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
-- Table structure for table `character_equipped`
--

DROP TABLE IF EXISTS `character_equipped`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `character_equipped` (
  `char_id_FK` int(11) NOT NULL,
  `equipped_head` varchar(45) DEFAULT NULL,
  `equipped_chest` varchar(45) DEFAULT NULL,
  `equipped_legs` varchar(45) DEFAULT NULL,
  `equipped_feet` varchar(45) DEFAULT NULL,
  `equipped_back` varchar(45) DEFAULT NULL,
  `equipped_neck` varchar(45) DEFAULT NULL,
  `equipped_finger` varchar(45) DEFAULT NULL,
  `equipped_weapon_type` varchar(45) DEFAULT NULL,
  `equipped_mainhand` varchar(45) DEFAULT NULL,
  `equipped_offhand` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`char_id_FK`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `character_equipped`
--

LOCK TABLES `character_equipped` WRITE;
/*!40000 ALTER TABLE `character_equipped` DISABLE KEYS */;
/*!40000 ALTER TABLE `character_equipped` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `character_inventory`
--

DROP TABLE IF EXISTS `character_inventory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `character_inventory` (
  `char_id_FK` int(11) NOT NULL,
  `char_inventory` varchar(4096) DEFAULT NULL,
  PRIMARY KEY (`char_id_FK`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `character_inventory`
--

LOCK TABLES `character_inventory` WRITE;
/*!40000 ALTER TABLE `character_inventory` DISABLE KEYS */;
/*!40000 ALTER TABLE `character_inventory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `character_spells`
--

DROP TABLE IF EXISTS `character_spells`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `character_spells` (
  `char_id_FK` int(11) NOT NULL,
  `char_spells` varchar(4096) DEFAULT NULL,
  PRIMARY KEY (`char_id_FK`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `character_spells`
--

LOCK TABLES `character_spells` WRITE;
/*!40000 ALTER TABLE `character_spells` DISABLE KEYS */;
/*!40000 ALTER TABLE `character_spells` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `character_stats`
--

DROP TABLE IF EXISTS `character_stats`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `character_stats` (
  `char_id_FK` int(11) NOT NULL,
  `char_alignment` varchar(45) NOT NULL DEFAULT 'neutral',
  `char_speed` int(11) DEFAULT NULL,
  `char_CHA` int(11) NOT NULL DEFAULT '0',
  `char_STR` int(11) NOT NULL DEFAULT '0',
  `char_CON` int(11) NOT NULL DEFAULT '0',
  `char_INT` int(11) NOT NULL DEFAULT '0',
  `char_WIS` int(11) NOT NULL DEFAULT '0',
  `char_DEX` int(11) NOT NULL DEFAULT '0',
  `char_perception` int(11) NOT NULL DEFAULT '0',
  `char_proficiency` int(11) NOT NULL DEFAULT '1',
  `char_AC` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`char_id_FK`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `character_stats`
--

LOCK TABLES `character_stats` WRITE;
/*!40000 ALTER TABLE `character_stats` DISABLE KEYS */;
/*!40000 ALTER TABLE `character_stats` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `characters`
--

DROP TABLE IF EXISTS `characters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `characters` (
  `char_id` int(11) NOT NULL,
  `char_owner` int(11) NOT NULL,
  `char_name` varchar(64) NOT NULL,
  `char_class` varchar(45) DEFAULT NULL,
  `char_race` varchar(45) NOT NULL,
  `char_lvl` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`char_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `characters`
--

LOCK TABLES `characters` WRITE;
/*!40000 ALTER TABLE `characters` DISABLE KEYS */;
/*!40000 ALTER TABLE `characters` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-07-07 13:16:22
