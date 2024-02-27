CREATE DATABASE  IF NOT EXISTS `piraguismo` /*!40100 DEFAULT CHARACTER SET utf8mb3 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `piraguismo`;
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
-- Table structure for table `dragoi_barkua`
--

DROP TABLE IF EXISTS `dragoi_barkua`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `dragoi_barkua` (
  `Partaideak` int unsigned NOT NULL,
  `Modalitatea_ID_M` int unsigned NOT NULL,
  PRIMARY KEY (`Modalitatea_ID_M`),
  CONSTRAINT `fk_Dragoi_Barkua_Modalitatea1` FOREIGN KEY (`Modalitatea_ID_M`) REFERENCES `modalitatea` (`ID_M`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dragoi_barkua`
--

LOCK TABLES `dragoi_barkua` WRITE;
/*!40000 ALTER TABLE `dragoi_barkua` DISABLE KEYS */;
INSERT INTO `dragoi_barkua` VALUES (10,5),(20,6);
/*!40000 ALTER TABLE `dragoi_barkua` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `entrenatzailea`
--

DROP TABLE IF EXISTS `entrenatzailea`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `entrenatzailea` (
  `Nan` char(9) NOT NULL,
  `Izena` varchar(30) NOT NULL,
  `Abizena` varchar(30) NOT NULL,
  `Telefonoa` char(9) DEFAULT NULL,
  `Taldea_Kodea` int unsigned NOT NULL,
  PRIMARY KEY (`Nan`),
  KEY `fk_Entrenatzailea_Taldea1_idx` (`Taldea_Kodea`),
  CONSTRAINT `fk_Entrenatzailea_Taldea1` FOREIGN KEY (`Taldea_Kodea`) REFERENCES `taldea` (`Kodea`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entrenatzailea`
--

LOCK TABLES `entrenatzailea` WRITE;
/*!40000 ALTER TABLE `entrenatzailea` DISABLE KEYS */;
INSERT INTO `entrenatzailea` VALUES ('12345678A','Juan','Pérez','654321098',1),('45678901D','Ana','Martínez','456789012',4),('87654321B','María','López','987654321',2),('98765432C','Pedro','García','123456789',3);
/*!40000 ALTER TABLE `entrenatzailea` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `erabiltzailea`
--

DROP TABLE IF EXISTS `erabiltzailea`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `erabiltzailea` (
  `Id` int unsigned NOT NULL AUTO_INCREMENT,
  `Izena` varchar(20) NOT NULL,
  `Abizena` varchar(25) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Pasahitza` varchar(20) NOT NULL,
  `Mota` varchar(10) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `erabiltzailea`
--

LOCK TABLES `erabiltzailea` WRITE;
/*!40000 ALTER TABLE `erabiltzailea` DISABLE KEYS */;
INSERT INTO `erabiltzailea` VALUES (1,'admin','admin','admin@gmail.com','admin','Admin');
/*!40000 ALTER TABLE `erabiltzailea` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eslalon`
--

DROP TABLE IF EXISTS `eslalon`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `eslalon` (
  `Saiakerak` int NOT NULL,
  `Modalitatea_ID_M` int unsigned NOT NULL,
  PRIMARY KEY (`Modalitatea_ID_M`),
  CONSTRAINT `fk_Eslalon_Modalitatea1` FOREIGN KEY (`Modalitatea_ID_M`) REFERENCES `modalitatea` (`ID_M`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eslalon`
--

LOCK TABLES `eslalon` WRITE;
/*!40000 ALTER TABLE `eslalon` DISABLE KEYS */;
INSERT INTO `eslalon` VALUES (4,4);
/*!40000 ALTER TABLE `eslalon` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `historikoa`
--

DROP TABLE IF EXISTS `historikoa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `historikoa` (
  `NAN` char(9) NOT NULL,
  `Izena` varchar(45) NOT NULL,
  `Abizena` varchar(45) NOT NULL,
  `Telefonoa` char(9) NOT NULL,
  `Generoa` char(1) NOT NULL,
  `Herria` varchar(45) NOT NULL,
  PRIMARY KEY (`NAN`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `historikoa`
--

LOCK TABLES `historikoa` WRITE;
/*!40000 ALTER TABLE `historikoa` DISABLE KEYS */;
INSERT INTO `historikoa` VALUES ('73369981K','Asier','Larreta','932112323','G','Tolosa');
/*!40000 ALTER TABLE `historikoa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lehiatu`
--

DROP TABLE IF EXISTS `lehiatu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lehiatu` (
  `Piraguista_Nan` char(9) NOT NULL,
  `Txapelketa_ID_T` int unsigned NOT NULL,
  `Denbora` time NOT NULL,
  PRIMARY KEY (`Piraguista_Nan`,`Txapelketa_ID_T`),
  KEY `fk_Piraguista_has_Txapelketa_Txapelketa1_idx` (`Txapelketa_ID_T`),
  KEY `fk_Piraguista_has_Txapelketa_Piraguista_idx` (`Piraguista_Nan`),
  CONSTRAINT `fk_Piraguista_has_Txapelketa_Piraguista` FOREIGN KEY (`Piraguista_Nan`) REFERENCES `piraguista` (`Nan`),
  CONSTRAINT `fk_Piraguista_has_Txapelketa_Txapelketa1` FOREIGN KEY (`Txapelketa_ID_T`) REFERENCES `txapelketa` (`ID_T`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lehiatu`
--

LOCK TABLES `lehiatu` WRITE;
/*!40000 ALTER TABLE `lehiatu` DISABLE KEYS */;
INSERT INTO `lehiatu` VALUES ('01234567X',1,'01:20:12'),('01234567X',2,'01:00:10'),('12345678A',1,'01:24:33'),('45678901D',2,'01:02:45');
/*!40000 ALTER TABLE `lehiatu` ENABLE KEYS */;
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
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `lehiatu_AFTER_INSERT` AFTER INSERT ON `lehiatu` FOR EACH ROW BEGIN
UPDATE piraguista
	SET Txapelketa_kantitatea=Txapelketa_kantitatea+1 where Nan = new.Piraguista_Nan;
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `modalitatea`
--

DROP TABLE IF EXISTS `modalitatea`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `modalitatea` (
  `ID_M` int unsigned NOT NULL AUTO_INCREMENT,
  `Mota` varchar(45) NOT NULL,
  PRIMARY KEY (`ID_M`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modalitatea`
--

LOCK TABLES `modalitatea` WRITE;
/*!40000 ALTER TABLE `modalitatea` DISABLE KEYS */;
INSERT INTO `modalitatea` VALUES (1,'Sprin'),(2,'Sprin'),(3,'Sprin'),(4,'Eslalon'),(5,'Dragoi_Barkua'),(6,'Dragoi_Barkua');
/*!40000 ALTER TABLE `modalitatea` ENABLE KEYS */;
UNLOCK TABLES;

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
INSERT INTO `piraguista` VALUES ('01234567X','Marta','Díaz','E','789456123','Vitoria-Gasteiz',2,2),('12345678A','Ana','González','E','654321098','Vitoria-Gasteiz',1,1),('23456789Y','Iñigo','Ruiz','G','543210987','Amurrio',3,0),('34567890Z','Laura','Gómez','E','654321098','Llodio',4,0),('45678901D','Juan','Pérez','G','456789012','Llodio',5,1),('87654321B','Pedro','Fernández','G','987654321','Vitoria-Gasteiz',3,0),('98765432C','María','López','E','123456789','Amurrio',2,0);
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

--
-- Temporary view structure for view `piraguisten_taldea_gizonak`
--

DROP TABLE IF EXISTS `piraguisten_taldea_gizonak`;
/*!50001 DROP VIEW IF EXISTS `piraguisten_taldea_gizonak`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `piraguisten_taldea_gizonak` AS SELECT 
 1 AS `Piraguista`,
 1 AS `Taldea`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `sprin`
--

DROP TABLE IF EXISTS `sprin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sprin` (
  `Distantzia` int unsigned NOT NULL,
  `Modalitatea_ID_M` int unsigned NOT NULL,
  PRIMARY KEY (`Modalitatea_ID_M`),
  CONSTRAINT `fk_Sprin_Modalitatea1` FOREIGN KEY (`Modalitatea_ID_M`) REFERENCES `modalitatea` (`ID_M`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sprin`
--

LOCK TABLES `sprin` WRITE;
/*!40000 ALTER TABLE `sprin` DISABLE KEYS */;
INSERT INTO `sprin` VALUES (200,1),(500,2),(1000,3);
/*!40000 ALTER TABLE `sprin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `taldea`
--

DROP TABLE IF EXISTS `taldea`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `taldea` (
  `Kodea` int unsigned NOT NULL AUTO_INCREMENT,
  `Herria` varchar(20) NOT NULL,
  `Izena` varchar(30) NOT NULL,
  PRIMARY KEY (`Kodea`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `taldea`
--

LOCK TABLES `taldea` WRITE;
/*!40000 ALTER TABLE `taldea` DISABLE KEYS */;
INSERT INTO `taldea` VALUES (1,'Vitoria-Gasteiz','Deportivo Alavés'),(2,'Vitoria-Gasteiz','Baskonia'),(3,'Vitoria-Gasteiz','Araski AES'),(4,'Vitoria-Gasteiz','CD San Viator'),(5,'Vitoria-Gasteiz','Club Deportivo Vitoria'),(6,'Salvatierra','SD Salvatierra'),(7,'Amurrio','Amurrio Club'),(8,'Llodio','Ilcapo Sporting');
/*!40000 ALTER TABLE `taldea` ENABLE KEYS */;
UNLOCK TABLES;

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

--
-- Dumping events for database 'piraguismo'
--

--
-- Dumping routines for database 'piraguismo'
--
/*!50003 DROP FUNCTION IF EXISTS `Entrenatzilea_sortu` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `Entrenatzilea_sortu`(Nan char(9),Izena VARCHAR(30),Abizena VARCHAR(30),Telefonoa CHAR(9),Entrena_taldea INT) RETURNS varchar(50) CHARSET utf8mb3
    DETERMINISTIC
BEGIN
	Declare temp INT;
    set temp=0;
    
    SELECT Taldea_kodea into temp FROM entrenatzailea WHERE Taldea_kodea=Entrena_taldea;
    
    if temp <>0 then
        RETURN 'Talde hori iada entrenatzailea du';
	ELSE
		INSERT INTO entrenatzailea VALUES (Nan,Izena,Abizena,Telefonoa,Entrena_taldea);
        RETURN 'Entrenatzailea sortu da eta taldeari gehitu zaio';
	END IF;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP FUNCTION IF EXISTS `Lehiaketa_indibidual_emaitza_sortu` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `Lehiaketa_indibidual_emaitza_sortu`(Piraguista_Nan Char(9),Txapelketa_kodea Int, Denbora_ordu_minutu_segundo TIME) RETURNS varchar(50) CHARSET utf8mb3
    DETERMINISTIC
BEGIN
	INSERT INTO lehiatu VALUES(Piraguista_NAN,Txapelketa_kodea,Denbora_ordu_minutu_segundo);
RETURN "Emaitza berria gorde da";
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `Piraguista_sartu` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `Piraguista_sartu`(in Nan Char(9),in Izena varchar(30),Abizena varchar(30), Generoa CHAR(1), Telefonoa CHAR(9), Herria varchar(40), Talde_Kod INT )
BEGIN
	Declare gen Char(1);
    Select Generoa into gen FROM Piraguista WHERE Taldea_kodea=Talde_Kod;
    
    If gen=Generoa or gen is null then
		Insert into piraguista VALUES (Nan,Izena,Abizena,Generoa,Telefonoa,Herria,Talde_Kod);
	else
		Select 'Ez da genero egokia taldearentzat';
	END IF;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `Talde_Lehiaketa_gorde` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `Talde_Lehiaketa_gorde`(in Txapelketa_ID INT, in Talde_kodea int, Denbora_ordu_minutu_segundo time)
BEGIN
	INSERT INTO parte_hartu VALUES(Txapelketa_ID,Talde_kodea,Denbora_ordu_minutu_segundo);
    SELECT 'Denbora berria gorde da!';
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Final view structure for view `piraguisten_taldea_gizonak`
--

/*!50001 DROP VIEW IF EXISTS `piraguisten_taldea_gizonak`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `piraguisten_taldea_gizonak` AS select `piraguista`.`Izena` AS `Piraguista`,`taldea`.`Izena` AS `Taldea` from (`piraguista` join `taldea` on((`piraguista`.`Taldea_Kodea` = `taldea`.`Kodea`))) where (`piraguista`.`Generoa` = 'G') */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-02-21  8:33:16
