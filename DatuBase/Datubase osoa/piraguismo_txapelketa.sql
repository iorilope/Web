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
-- Table structure for table `txapelketa`
--

DROP TABLE IF EXISTS `txapelketa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `txapelketa` (
  `ID_T` int unsigned NOT NULL AUTO_INCREMENT,
  `Data_Hasi` date NOT NULL,
  `Data_Bukatu` date DEFAULT NULL,
  `Kokapena` varchar(30) NOT NULL,
  `Izena` varchar(50) NOT NULL,
  `Zailtasun_Maila` varchar(3) DEFAULT NULL,
  `Modalitatea_ID_M` int unsigned NOT NULL,
  PRIMARY KEY (`ID_T`),
  KEY `fk_Txapelketa_Modalitatea1_idx` (`Modalitatea_ID_M`),
  CONSTRAINT `fk_Txapelketa_Modalitatea1` FOREIGN KEY (`Modalitatea_ID_M`) REFERENCES `modalitatea` (`ID_M`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `txapelketa`
--

LOCK TABLES `txapelketa` WRITE;
/*!40000 ALTER TABLE `txapelketa` DISABLE KEYS */;
INSERT INTO `txapelketa` VALUES (1,'2024-03-10','2024-03-12','Vitoria-Gasteiz','Campeonato de Euskadi de Sprint','III',1),(2,'2024-04-01','2024-04-05','Llodio','Copa del Rey de Maratón','V',2),(3,'2024-05-15','2024-05-18','Amurrio','Campeonato del Mundo de Slalom','VI',3),(4,'2024-06-22','2024-06-25','Zarautz','Liga vasca de Aguas Tranquilas','II',4);
/*!40000 ALTER TABLE `txapelketa` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-02-20 13:19:38
