-- MySQL dump 10.16  Distrib 10.1.19-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: localhost
-- ------------------------------------------------------
-- Server version	10.1.19-MariaDB

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
-- Current Database: `gomanager`
--

/*!40000 DROP DATABASE IF EXISTS `gomanager`*/;

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `gomanager` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci */;

USE `gomanager`;

--
-- Table structure for table `pokemon`
--

DROP TABLE IF EXISTS `pokemon`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pokemon` (
  `pokemon_id` int(11) NOT NULL AUTO_INCREMENT,
  `necesary_candys` int(3) DEFAULT NULL,
  `pokemon_name` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `pokemon_evolution` int(3) DEFAULT NULL,
  `pokemon_preevolution` int(3) DEFAULT NULL,
  `pokemon_active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`pokemon_id`)
) ENGINE=InnoDB AUTO_INCREMENT=241 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pokemon`
--

LOCK TABLES `pokemon` WRITE;
/*!40000 ALTER TABLE `pokemon` DISABLE KEYS */;
INSERT INTO `pokemon` VALUES (1,25,'Bulbasaur',2,NULL,1),(2,100,'Ivysaur',3,1,1),(3,0,'Venusaur',NULL,2,1),(4,25,'Charmander',5,NULL,1),(5,100,'Charmeleon',6,4,1),(6,0,'Charizard',NULL,5,1),(7,25,'Squirtle',8,NULL,1),(8,100,'Wartortle',9,7,1),(9,0,'Blastoise',NULL,8,1),(10,12,'Caterpie',11,NULL,1),(11,50,'Metapod',12,10,1),(12,0,'Butterfree',NULL,11,1),(13,12,'Weedle',14,NULL,1),(14,50,'Kakuna',15,13,1),(15,0,'Beedrill',NULL,14,1),(16,12,'Pidgey',17,NULL,1),(17,50,'Pidgeotto',18,16,1),(18,0,'Pidgeot',NULL,17,1),(19,25,'Rattata',20,NULL,1),(20,0,'Raticate',NULL,19,1),(21,50,'Spearow',22,NULL,1),(22,0,'Fearow',NULL,21,1),(23,50,'Ekans',24,NULL,1),(24,0,'Arbok',NULL,23,1),(25,50,'Pikachu',26,172,1),(26,0,'Raichu',NULL,25,1),(27,50,'Sandshrew',28,NULL,1),(28,0,'Sandslash',NULL,27,1),(29,25,'Nidoran F',30,NULL,1),(30,100,'Nidorina',31,29,1),(31,0,'Nidoqueen',NULL,30,1),(32,25,'Nidoran M',33,NULL,1),(33,100,'Nidorino',34,32,1),(34,0,'Nidoking',NULL,33,1),(35,50,'Clefairy',36,173,1),(36,0,'Clefable',NULL,35,1),(37,50,'Vulpix',38,NULL,1),(38,0,'Ninetales',NULL,37,1),(39,50,'Gigglypuff',40,174,1),(40,0,'Wigglytuff',NULL,39,1),(41,50,'Zubat',42,NULL,1),(42,0,'Golbat',NULL,41,1),(43,25,'Oddish',44,NULL,1),(44,100,'Gloom',45,43,1),(45,0,'Vileplume',NULL,44,1),(46,50,'Paras',47,NULL,1),(47,0,'Parasect',NULL,46,1),(48,50,'Venonat',49,NULL,1),(49,0,'Venomoth',NULL,48,1),(50,50,'Diglett',51,NULL,1),(51,0,'Dugtrio',NULL,50,1),(52,50,'Meowth',53,NULL,1),(53,0,'Persian',NULL,52,1),(54,50,'Psyduck',55,NULL,1),(55,0,'Golduck',NULL,54,1),(56,50,'Mankey',57,NULL,1),(57,0,'Primeape',NULL,56,1),(58,50,'Growlithe',59,NULL,1),(59,0,'Arcanine',NULL,58,1),(60,25,'Poliwag',61,NULL,1),(61,100,'Poliwhirl',62,60,1),(62,0,'Poliwrath',NULL,61,1),(63,25,'Abra',64,NULL,1),(64,100,'Kadabra',65,63,1),(65,0,'Alakazam',NULL,64,1),(66,25,'Machop',67,NULL,1),(67,100,'Machoke',68,66,1),(68,0,'Machamp',NULL,67,1),(69,25,'Bellsprout',70,NULL,1),(70,100,'Weepinbell',71,69,1),(71,0,'Victreebel',NULL,70,1),(72,50,'Tentacool',73,NULL,1),(73,0,'Tentacruel',NULL,72,1),(74,25,'Geodude',75,NULL,1),(75,100,'Graveler',76,74,1),(76,0,'Golem',NULL,75,1),(77,50,'Ponyta',78,NULL,1),(78,0,'Rapidash',NULL,77,1),(79,50,'Slowpoke',80,NULL,1),(80,0,'Slowbro',NULL,79,1),(81,50,'Magnemite',82,NULL,1),(82,0,'Magneton',NULL,81,1),(83,0,'Farfetch d',NULL,NULL,1),(84,50,'Doduo',85,NULL,1),(85,0,'Dodrio',NULL,84,1),(86,50,'Seel',87,NULL,1),(87,0,'Dewgong',NULL,86,1),(88,50,'Grimer',89,NULL,1),(89,0,'Muk',NULL,88,1),(90,50,'Shellder',91,NULL,1),(91,0,'Cloyster',NULL,90,1),(92,25,'Gastly',93,NULL,1),(93,100,'Haunter',94,92,1),(94,0,'Gengar',NULL,93,1),(95,0,'Onyx',NULL,NULL,1),(96,50,'Drowzee',97,NULL,1),(97,0,'Hypno',NULL,96,1),(98,50,'Krabby',99,NULL,1),(99,0,'Kingler',NULL,98,1),(100,50,'Voltorb',101,NULL,1),(101,0,'Electrode',NULL,100,1),(102,50,'Exeggcute',103,NULL,1),(103,0,'Exeggcutor',NULL,102,1),(104,50,'Cubone',105,NULL,1),(105,0,'Marowak',NULL,104,1),(106,0,'Hitmonlee',NULL,NULL,1),(107,0,'Hitmonchan',NULL,NULL,1),(108,0,'Lickitung',NULL,NULL,1),(109,50,'Koffing',110,NULL,1),(110,0,'Weezing',NULL,109,1),(111,50,'Rhyhorn',112,NULL,1),(112,0,'Rhydon',NULL,111,1),(113,0,'Chansey',NULL,NULL,1),(114,0,'Tangela',NULL,NULL,1),(115,0,'Kangaskhan',NULL,NULL,1),(116,50,'Horsea',117,NULL,1),(117,0,'Seadra',NULL,116,1),(118,50,'Goldeen',119,NULL,1),(119,0,'Seaking',NULL,118,1),(120,50,'Staryu',121,NULL,1),(121,0,'Starmie',NULL,120,1),(122,0,'Mr.Mime',NULL,NULL,1),(123,0,'Scyther',NULL,NULL,1),(124,0,'Jynx',NULL,238,1),(125,0,'Electabuzz',NULL,239,1),(126,0,'Magmar',NULL,240,1),(127,0,'Pinsir',NULL,NULL,1),(128,0,'Tauros ',NULL,NULL,1),(129,400,'Magikarp',130,NULL,1),(130,0,'Gyarados',NULL,129,1),(131,0,'Lapras',NULL,NULL,1),(132,0,'Ditto ',NULL,NULL,1),(133,25,'Eevee',134,NULL,1),(134,0,'Vaporeon',135,133,1),(135,0,'Jolteon',136,134,1),(136,0,'Flareon',NULL,135,1),(137,0,'Porygon',NULL,NULL,1),(138,50,'Omanyte',139,NULL,1),(139,0,'Omastar',NULL,138,1),(140,50,'Kabuto',141,NULL,1),(141,0,'Kabutops',NULL,140,1),(142,0,'Aerodactyl',NULL,NULL,1),(143,0,'Snorlax',NULL,NULL,1),(144,0,'Articuno ',NULL,NULL,0),(145,0,'Zapdos',NULL,NULL,0),(146,0,'Moltres ',NULL,NULL,0),(147,25,'Dratini',148,NULL,1),(148,100,'Dragonair',149,147,1),(149,0,'Dragonite',NULL,148,1),(150,0,'Mewtwo ',NULL,NULL,0),(151,0,'Mew',NULL,NULL,0),(172,25,'Pichu',25,NULL,1),(173,25,'Cleffa',35,NULL,1),(174,25,'Igglybuff',39,NULL,1),(175,25,'Togepi',176,NULL,1),(176,25,'Togetic',NULL,175,1),(238,25,'Smoochum',124,NULL,1),(239,25,'Elekid',125,NULL,1),(240,25,'Magby',126,NULL,1);
/*!40000 ALTER TABLE `pokemon` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `record`
--

DROP TABLE IF EXISTS `record`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `record` (
  `record_id` int(11) NOT NULL AUTO_INCREMENT,
  `record_user` int(3) NOT NULL,
  `record_candys` int(3) NOT NULL DEFAULT '0',
  `record_pokedex` tinyint(1) NOT NULL DEFAULT '0',
  `record_pokemon` int(4) NOT NULL,
  `record_date` date NOT NULL,
  PRIMARY KEY (`record_id`)
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `record`
--

LOCK TABLES `record` WRITE;
/*!40000 ALTER TABLE `record` DISABLE KEYS */;
INSERT INTO `record` VALUES (1,0,17,0,1,'2017-02-04'),(5,0,83,0,4,'2017-02-04'),(8,0,84,0,7,'2017-02-04'),(9,0,83,0,10,'2017-02-04'),(10,0,198,0,13,'2017-02-04'),(11,0,574,0,16,'2017-02-04'),(12,0,136,0,19,'2017-02-04'),(13,0,147,0,21,'2017-02-04'),(14,0,266,0,23,'2017-02-04'),(15,0,40,0,172,'2017-02-04'),(16,0,74,0,27,'2017-02-04'),(17,0,71,0,29,'2017-02-04'),(18,0,105,0,32,'2017-02-04'),(19,0,51,0,173,'2017-02-04'),(20,0,2,0,37,'2017-02-04'),(21,0,80,0,174,'2017-02-04'),(22,0,173,0,41,'2017-02-04'),(23,0,55,0,43,'2017-02-04'),(24,0,182,0,46,'2017-02-04'),(25,0,148,0,48,'2017-02-04'),(26,0,55,0,50,'2017-02-04'),(27,0,171,0,52,'2017-02-04'),(28,0,136,0,54,'2017-02-04'),(29,0,28,0,56,'2017-02-04'),(30,0,54,0,58,'2017-02-04'),(31,0,192,0,60,'2017-02-04'),(32,0,121,0,63,'2017-02-04'),(33,0,23,0,66,'2017-02-04'),(34,0,60,0,69,'2017-02-04'),(35,0,89,0,72,'2017-02-04'),(36,0,19,0,74,'2017-02-04'),(37,0,79,0,77,'2017-02-04'),(38,0,101,0,79,'2017-02-04'),(39,0,71,0,81,'2017-02-04'),(40,0,54,0,84,'2017-02-04'),(41,0,57,0,86,'2017-02-04'),(42,0,37,0,88,'2017-02-04'),(43,0,18,0,90,'2017-02-04'),(44,0,50,0,92,'2017-02-04'),(45,0,54,0,96,'2017-02-04'),(46,0,175,0,98,'2017-02-04'),(47,0,66,0,100,'2017-02-04'),(48,0,1,0,102,'2017-02-04'),(49,0,24,0,104,'2017-02-04'),(50,0,69,0,109,'2017-02-04'),(51,0,46,0,111,'2017-02-04'),(52,0,91,0,116,'2017-02-04'),(53,0,151,0,118,'2017-02-04'),(54,0,181,0,120,'2017-02-04'),(55,0,83,0,238,'2017-02-04'),(56,0,1,0,239,'2017-02-04'),(57,0,149,0,240,'2017-02-04'),(58,0,237,0,129,'2017-02-04'),(59,0,233,0,133,'2017-02-04'),(60,0,43,0,138,'2017-02-04'),(61,0,18,0,140,'2017-02-04'),(62,0,75,0,147,'2017-02-04'),(63,0,0,0,175,'2017-02-04'),(64,0,0,0,83,'2017-02-04'),(65,0,36,0,95,'2017-02-04'),(66,0,15,0,106,'2017-02-04'),(67,0,45,0,107,'2017-02-04'),(68,0,28,0,108,'2017-02-04'),(69,0,39,0,113,'2017-02-04'),(70,0,42,0,114,'2017-02-04'),(71,0,0,0,115,'2017-02-04'),(72,0,166,0,122,'2017-02-04'),(73,0,11,0,123,'2017-02-04'),(74,0,57,0,127,'2017-02-04'),(75,0,0,0,128,'2017-02-04'),(76,0,0,0,131,'2017-02-04'),(77,0,11,0,132,'2017-02-04'),(78,0,13,0,137,'2017-02-04'),(79,0,78,0,142,'2017-02-04'),(80,0,28,0,143,'2017-02-04');
/*!40000 ALTER TABLE `record` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `user_id` int(3) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `user_pass` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'santii810','gvs689');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-02-10 17:10:25
