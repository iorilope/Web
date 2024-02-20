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
-- Table structure for table `piraguista`
--

DROP TABLE IF EXISTS `piraguista`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `piraguista` (
  `Nan` char(9) NOT NULL,
  `Izena` varchar(30) NOT NULL,
  `Abizena` varchar(30) NOT NULL,
  `Generoa` char(1) DEFAULT NULL,
  `Telefonoa` char(9) DEFAULT NULL,
  `Herria` varchar(20) NOT NULL,
  `Taldea_Kodea` int unsigned NOT NULL,
  `Txapelketa_kantitatea` int NOT NULL,
  PRIMARY KEY (`Nan`),
  KEY `fk_Piraguista_Taldea1_idx` (`Taldea_Kodea`),
  CONSTRAINT `fk_Piraguista_Taldea1` FOREIGN KEY (`Taldea_Kodea`) REFERENCES `taldea` (`Kodea`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `piraguista`
--

LOCK TABLES `piraguista` WRITE;
/*!40000 ALTER TABLE `piraguista` DISABLE KEYS */;
INSERT INTO `piraguista` VALUES ('01234567X','Marta','Díaz','E','789456123','Vitoria-Gasteiz',2,1),('12345678A','Ana','González','E','654321098','Vitoria-Gasteiz',1,1),('23456789Y','Iñigo','Ruiz','G','543210987','Amurrio',3,0),('34567890Z','Laura','Gómez','E','654321098','Llodio',4,0),('45678901D','Juan','Pérez','G','456789012','Llodio',5,1),('87654321B','Pedro','Fernández','G','987654321','Vitoria-Gasteiz',3,0),('98765432C','María','López','E','123456789','Amurrio',2,0);
/*!40000 ALTER TABLE `piraguista` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `piraguista_AFTER_DELETE` AFTER DELETE ON `piraguista` FOR EACH ROW BEGIN
	INSERT INTO historikoa VALUES(old.Nan,old.Izena,old.Abizena,old.Telefonoa,old.Generoa,old.Herria);
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-02-20 13:19:38
