-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: localhost    Database: piraguismo
-- ------------------------------------------------------
-- Server version	8.0.36

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
-- Table structure for table `parte_hartu`
--

DROP TABLE IF EXISTS `parte_hartu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `parte_hartu` (
  `Txapelketa_ID_T` int unsigned NOT NULL,
  `Taldea_Kodea` int unsigned NOT NULL,
  `Denbora` time NOT NULL,
  PRIMARY KEY (`Txapelketa_ID_T`,`Taldea_Kodea`),
  KEY `fk_Txapelketa_has_Taldea_Taldea1_idx` (`Taldea_Kodea`),
  KEY `fk_Txapelketa_has_Taldea_Txapelketa1_idx` (`Txapelketa_ID_T`),
  CONSTRAINT `fk_Txapelketa_has_Taldea_Taldea1` FOREIGN KEY (`Taldea_Kodea`) REFERENCES `taldea` (`Kodea`),
  CONSTRAINT `fk_Txapelketa_has_Taldea_Txapelketa1` FOREIGN KEY (`Txapelketa_ID_T`) REFERENCES `txapelketa` (`ID_T`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parte_hartu`
--

LOCK TABLES `parte_hartu` WRITE;
/*!40000 ALTER TABLE `parte_hartu` DISABLE KEYS */;
INSERT INTO `parte_hartu` VALUES (1,1,'01:02:00'),(2,3,'01:01:10'),(4,6,'01:03:20');
/*!40000 ALTER TABLE `parte_hartu` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-02-20 13:19:39
