CREATE DATABASE  IF NOT EXISTS `mydb` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `mydb`;
-- MySQL dump 10.13  Distrib 5.6.10, for Win32 (x86)
--
-- Host: localhost    Database: mydb
-- ------------------------------------------------------
-- Server version	5.6.10

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `idadmin` int(4) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idadmin`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES ('admin','admin',1);
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `harakteristika igrachi`
--

DROP TABLE IF EXISTS `harakteristika igrachi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `harakteristika igrachi` (
  `idHI` int(4) NOT NULL,
  `Nomer v igra` int(11) NOT NULL,
  `idIgrachi` int(11) DEFAULT NULL,
  `idOtbori` int(11) DEFAULT NULL,
  `idPostove` int(11) DEFAULT NULL,
  PRIMARY KEY (`idHI`),
  KEY `idIgrachi3_idx` (`idIgrachi`),
  KEY `idPostove_idx` (`idPostove`),
  CONSTRAINT `idIgrachi3` FOREIGN KEY (`idIgrachi`) REFERENCES `igrachi` (`idIgrachi`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `idPostove` FOREIGN KEY (`idPostove`) REFERENCES `postove` (`idPostove`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `harakteristika igrachi`
--

LOCK TABLES `harakteristika igrachi` WRITE;
/*!40000 ALTER TABLE `harakteristika igrachi` DISABLE KEYS */;
INSERT INTO `harakteristika igrachi` VALUES (1001,17,2001,4001,3003),(1002,1,2002,4001,3001),(1003,27,2003,4001,3003),(1004,5,2004,4002,3002),(1005,23,2005,4002,3004),(1006,1,2006,4002,3001),(1007,23,2007,4003,3004),(1008,11,2008,4003,3002),(1009,66,2009,4003,3002),(1010,23,2010,4004,3001),(1011,45,2011,4004,3003),(1012,19,2012,4004,3004),(1013,18,2013,4005,3002),(1014,6,2014,4005,3004),(1015,99,2015,4005,3002);
/*!40000 ALTER TABLE `harakteristika igrachi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `igrachi`
--

DROP TABLE IF EXISTS `igrachi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `igrachi` (
  `idIgrachi` int(11) NOT NULL,
  `idPostove` int(11) DEFAULT NULL,
  `idOtbori` int(11) DEFAULT NULL,
  `Ime` varchar(45) NOT NULL,
  `Familiq` varchar(45) DEFAULT NULL,
  `Data na rajdane` date DEFAULT NULL,
  `Grad` varchar(45) DEFAULT NULL,
  `Nacionalnost` varchar(45) DEFAULT NULL,
  `Visochina` int(11) DEFAULT NULL,
  `Teglo` int(11) DEFAULT NULL,
  PRIMARY KEY (`idIgrachi`),
  KEY `idOtbori_idx` (`idOtbori`),
  CONSTRAINT `idotbor` FOREIGN KEY (`idOtbori`) REFERENCES `otbori` (`idOtbori`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `igrachi`
--

LOCK TABLES `igrachi` WRITE;
/*!40000 ALTER TABLE `igrachi` DISABLE KEYS */;
INSERT INTO `igrachi` VALUES (2001,3001,4001,'Georgi','Milanov','1992-02-19','Levski','Bulgaria',184,68),(2002,3002,4001,'Ilko','Prigov','1986-05-23','Gocedelchev','Bulgaria',182,78),(2003,3003,4001,'Momchil ','Cvetanov','1990-12-02','Pleven','Bulgaria',174,65),(2004,3002,4002,'Aleksander','Barthe','1986-03-05','Avignion','France',184,78),(2005,3004,4002,'Emil','Gurgorov','1981-02-15','Sofia','Bulgaria',168,64),(2006,3001,4002,'Urush','Golubovish','1976-08-19','Belgrad','Ugoslavia',190,82),(2007,3004,4003,'Michael ','Platini','1983-09-08','Brasil','Brasil',187,79),(2008,3002,4003,'Ivan','Bandalovski','1986-11-23','Sofia','Bulgaria',182,77),(2009,3002,4003,'Plamen','Krachunov','1989-01-11','Plovdiv','Bulgaria',189,76),(2010,3001,4004,'Plamen','Iliev','1991-11-30','Botevgrad','Bulgaria',180,70),(2011,3003,4004,'Vladimir','Gadjev','1987-07-18','Velingrad','Bulgaia',182,73),(2012,3004,4004,'Bazil De','Kurvalio','1981-10-31','Zingichor','Sinegal',183,72),(2013,3002,4005,'Filip','Filipov','1988-08-02','Lovech','Bulgaria',175,70),(2014,3004,4005,'Daniel','Zlatkov','1989-01-01','Pernik','Bulgaria',183,76),(2015,3003,4005,'Martin','Toshev','1990-04-17','Krupnik','Bulgaria',177,70);
/*!40000 ALTER TABLE `igrachi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `otbori`
--

DROP TABLE IF EXISTS `otbori`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `otbori` (
  `idOtbori` int(11) NOT NULL AUTO_INCREMENT,
  `Ime` varchar(45) NOT NULL,
  `Grad` varchar(45) DEFAULT NULL,
  `Godina_na_osnovavane` year(4) DEFAULT NULL,
  `idTitli` int(11) DEFAULT NULL,
  PRIMARY KEY (`idOtbori`),
  KEY `idTitli_idx` (`idTitli`),
  CONSTRAINT `idtitli` FOREIGN KEY (`idTitli`) REFERENCES `titli` (`idTitli`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6007 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `otbori`
--

LOCK TABLES `otbori` WRITE;
/*!40000 ALTER TABLE `otbori` DISABLE KEYS */;
INSERT INTO `otbori` VALUES (4001,'Litex','Lovech',1922,6001),(4002,'Ludogorets','Razgrad',1945,6002),(4003,'Cska','Sofia',1948,6003),(4004,'Levski','Sofia',1914,6004),(4005,'Slavia','Sofia',1913,6005);
/*!40000 ALTER TABLE `otbori` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `postove`
--

DROP TABLE IF EXISTS `postove`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `postove` (
  `idPostove` int(11) NOT NULL,
  `Postove` varchar(45) NOT NULL,
  PRIMARY KEY (`idPostove`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `postove`
--

LOCK TABLES `postove` WRITE;
/*!40000 ALTER TABLE `postove` DISABLE KEYS */;
INSERT INTO `postove` VALUES (3001,'Vratar'),(3002,'Zashtitnik'),(3003,'Half'),(3004,'Napadatel');
/*!40000 ALTER TABLE `postove` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `titli`
--

DROP TABLE IF EXISTS `titli`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `titli` (
  `idTitli` int(11) NOT NULL,
  `ChampionsCup` int(11) DEFAULT NULL,
  `BulgarianCup` int(11) DEFAULT NULL,
  `BulgarianSupercup` int(11) DEFAULT NULL,
  PRIMARY KEY (`idTitli`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `titli`
--

LOCK TABLES `titli` WRITE;
/*!40000 ALTER TABLE `titli` DISABLE KEYS */;
INSERT INTO `titli` VALUES (6001,4,4,1),(6002,1,1,1),(6003,31,10,4),(6004,26,25,3),(6005,7,11,0);
/*!40000 ALTER TABLE `titli` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `treniori`
--

DROP TABLE IF EXISTS `treniori`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `treniori` (
  `idTreniori` int(11) NOT NULL,
  `Ime` varchar(45) NOT NULL,
  `Familiq` varchar(45) DEFAULT NULL,
  `Data na rajdane` date NOT NULL,
  `Grad` varchar(45) DEFAULT NULL,
  `idOtbori` int(11) DEFAULT NULL,
  PRIMARY KEY (`idTreniori`),
  KEY `idOtbori_idx` (`idOtbori`),
  CONSTRAINT `idotbori` FOREIGN KEY (`idOtbori`) REFERENCES `otbori` (`idOtbori`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `treniori`
--

LOCK TABLES `treniori` WRITE;
/*!40000 ALTER TABLE `treniori` DISABLE KEYS */;
INSERT INTO `treniori` VALUES (5001,'Hristo','Stoichkov','1966-02-08','Plovdiv',4001),(5002,'Ivailo','Petev','1975-07-09','Lovech',4002),(5003,'Stoicho','Mladenov','1957-04-12','Sandanski',4003),(5004,'Iliqn','Iliev','1968-07-02','Barna',4004),(5005,'Vili','Vucov','1967-07-19','Sofia',4005);
/*!40000 ALTER TABLE `treniori` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-05-19 15:54:56
