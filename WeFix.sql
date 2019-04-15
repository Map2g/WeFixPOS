-- MySQL dump 10.13  Distrib 5.5.62, for Linux (x86_64)
--
-- Host: localhost    Database: WeFix
-- ------------------------------------------------------
-- Server version	5.5.62

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
-- Table structure for table `CUSTOMER`
--

DROP TABLE IF EXISTS `CUSTOMER`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `CUSTOMER` (
  `CUS_ID` int(11) NOT NULL AUTO_INCREMENT,
  `CUS_FNAME` varchar(45) NOT NULL,
  `CUS_LNAME` varchar(45) NOT NULL,
  `CUS_EMAIL` varchar(45) NOT NULL,
  `CUS_PHONE` varchar(10) NOT NULL,
  PRIMARY KEY (`CUS_ID`),
  UNIQUE KEY `unique_entry` (`CUS_EMAIL`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `CUSTOMER`
--

LOCK TABLES `CUSTOMER` WRITE;
/*!40000 ALTER TABLE `CUSTOMER` DISABLE KEYS */;
INSERT INTO `CUSTOMER` VALUES (1,'Melissa','Palmer','melpalmer421@gmail.com','2486220777'),(2,'Happy','Gilmore','Happy@yahoo.com','2487008888'),(3,'test','test','test@gmail.com','2486005555'),(4,'Brad','Richards','brich@yahoo.com','3132906867'),(5,'Nunj','Shergill','nunj@test.com','2345678911'),(6,'Roger','Rogers','rogerrrrrr@gmail.com','2485555557'),(7,'Mario','Saad','msaad@gmail.com','2484782947'),(8,'Kyle','Masiak','kmasiak@oakland.edu','2480739573'),(9,'Tony','Stark','tony@starkindustries.com','7482047395'),(10,'Bruce','Banner','Hulk@avengers.com','9374830000'),(11,'Thor','Odinson','godofthunder@avengers.com','3741251993'),(12,'Clint','Barton','HawkeyeRonin@avengers.com','4730284730'),(13,'Steve','Rogers','TheRealCaptain@avengers.com','5730274025'),(14,'Natasha','Romanoff','BlackWidow@avengers.com','4834056394'),(15,'Peter','Parker','IDontFeelSoGood@avengers.com','2746782374'),(16,'Thanos','Eternal','OhSnap@IgotTheStones.com','4449384958'),(17,'Luigi','Saad','itsaluigi@gmail.com','9008007000'),(18,'Marty','Sen','martysen@oakland.edu','2486458525');
/*!40000 ALTER TABLE `CUSTOMER` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `DEVICE`
--

DROP TABLE IF EXISTS `DEVICE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `DEVICE` (
  `DEV_ID` int(11) NOT NULL AUTO_INCREMENT,
  `DEV_MODEL` varchar(45) NOT NULL,
  `DEV_PHONE` varchar(10) NOT NULL,
  `CUS_ID` int(11) NOT NULL,
  PRIMARY KEY (`DEV_ID`),
  UNIQUE KEY `unique_device` (`DEV_MODEL`,`DEV_PHONE`),
  UNIQUE KEY `unique_dev` (`DEV_MODEL`,`DEV_PHONE`),
  KEY `CUS_ID` (`CUS_ID`),
  CONSTRAINT `DEVICE_ibfk_1` FOREIGN KEY (`CUS_ID`) REFERENCES `CUSTOMER` (`CUS_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `DEVICE`
--

LOCK TABLES `DEVICE` WRITE;
/*!40000 ALTER TABLE `DEVICE` DISABLE KEYS */;
INSERT INTO `DEVICE` VALUES (2,'iPhone 5s','2486222078',1),(3,'iPhone 7','2484782947',10),(8,'iPhone 6','3894375037',1),(9,'iPhone 6s','4728495729',2),(10,'iPhone X','2846496720',2),(11,'Galaxy s8','1248676563',1),(12,'Samsung Galaxy s8','2487900454',8),(13,'iPad Pro','2484782947',10),(14,'Mjolnir','4792783859',11),(15,'Stormbreaker','2947505739',11),(16,'iPhone 5s','2488009000',10);
/*!40000 ALTER TABLE `DEVICE` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `EMPLOYEE`
--

DROP TABLE IF EXISTS `EMPLOYEE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `EMPLOYEE` (
  `EMP_ID` int(11) NOT NULL AUTO_INCREMENT,
  `EMP_FNAME` varchar(45) NOT NULL,
  `EMP_LNAME` varchar(45) NOT NULL,
  `EMP_PHONE` varchar(10) NOT NULL,
  `EMP_EMAIL` varchar(45) NOT NULL,
  PRIMARY KEY (`EMP_ID`),
  UNIQUE KEY `unique_entry` (`EMP_EMAIL`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `EMPLOYEE`
--

LOCK TABLES `EMPLOYEE` WRITE;
/*!40000 ALTER TABLE `EMPLOYEE` DISABLE KEYS */;
INSERT INTO `EMPLOYEE` VALUES (1,'Amartya','Sen','2489008657','martyman@yahoo.com'),(2,'Harry','Palmer','2484321929','cooldad@gmail.com'),(11,'Tad','Wilson','2487006767','twilson@yahoo.com'),(12,'Stephen','Strange','2487651234','doctorcool@avengers.com'),(13,'admin','YaBoy','1234567891','admin@gmail.com'),(14,'Alex','Wardia','2484782947','amwardia@oakland.edu'),(15,'Nunj','Shergill','2488889852','gnunj@gmail.com');
/*!40000 ALTER TABLE `EMPLOYEE` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `PRODUCT`
--

DROP TABLE IF EXISTS `PRODUCT`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `PRODUCT` (
  `PROD_ID` int(11) NOT NULL AUTO_INCREMENT,
  `PROD_PRICE` decimal(9,2) NOT NULL,
  `PROD_NAME` varchar(100) NOT NULL,
  `PROD_RETAIL` decimal(9,2) NOT NULL,
  `PROD_STOCK` int(3) NOT NULL,
  PRIMARY KEY (`PROD_ID`),
  UNIQUE KEY `PROD_NAME` (`PROD_NAME`),
  UNIQUE KEY `PROD_NAME_2` (`PROD_NAME`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PRODUCT`
--

LOCK TABLES `PRODUCT` WRITE;
/*!40000 ALTER TABLE `PRODUCT` DISABLE KEYS */;
INSERT INTO `PRODUCT` VALUES (1,14.99,'iPhone 5s White LCD',79.99,4),(2,1.00,'Popsocket - Marble',0.50,30),(3,129.99,'Samsung Galaxy S9 LCD',299.99,3),(4,699.99,'Apple iPhone X 64GB Space Gray',750.00,9),(5,1.89,'Samsung Galaxy S4 Camera Lens + Cover &amp; Adhesive',1.95,48),(6,1.00,'Popsocket - Blue',0.50,48),(7,1.00,'Popsocket - Green',0.50,45),(8,1.00,'Popsocket - Pink',0.50,0),(9,18.00,'iPhone 7 Black LCD',99.99,6),(10,18.00,'iPhone 7 White LCD',99.99,8),(11,19.00,'iPhone 7 Plus White LCD',109.99,9),(12,19.00,'iPhone 7 Plus Black LCD',109.99,30),(13,17.00,'iPhone 6 Black LCD',89.99,8),(14,17.00,'iPhone 6 White LCD',89.99,6),(15,18.00,'iPhone 6 Plus White LCD',99.99,4),(16,18.00,'iPhone 6 Plus Black LCD',99.99,4),(17,18.00,'iPhone 6s White LCD',89.99,5),(18,18.00,'iPhone 6s Black LCD',89.99,4),(19,18.00,'iPhone 6s Plus LCD',89.99,5),(20,25.00,'iPhone 8 White LCD',119.99,5),(21,25.00,'iPhone 8 Black LCD',119.99,3),(22,30.00,'iPhone 8 Plus White LCD',129.99,3),(23,30.00,'iPhone 8 Plus Black LCD',129.99,3),(24,149.99,'Samsung Galaxy S7 LCD',199.99,1),(25,169.99,'Samsung Galaxy S8 LCD',229.99,1),(26,15.00,'Speck Case - iPhone 8/7/6',34.99,6),(27,12.00,'Tech21 Case - iPhone 8/7/6',29.99,5),(28,29.99,'OtterBox Commuter - iPhone 8/7/6',49.99,0),(29,150.00,'iPhone X OLED',229.99,0),(30,180.00,'iPhone XS OLED',299.99,1),(31,129.99,'iPhone XR LCD',199.99,0),(32,249.99,'iPhone XS Max OLED',349.99,1),(33,3.00,'iPhone 7 Cellular Antenna',5.00,10);
/*!40000 ALTER TABLE `PRODUCT` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `PURCHASE`
--

DROP TABLE IF EXISTS `PURCHASE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `PURCHASE` (
  `PUR_ID` int(11) NOT NULL AUTO_INCREMENT,
  `PUR_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `CUS_ID` int(11) DEFAULT NULL,
  `EMP_ID` int(11) DEFAULT NULL,
  PRIMARY KEY (`PUR_ID`),
  KEY `CUS_ID` (`CUS_ID`),
  KEY `EMP_ID` (`EMP_ID`),
  CONSTRAINT `PURCHASE_ibfk_1` FOREIGN KEY (`CUS_ID`) REFERENCES `CUSTOMER` (`CUS_ID`) ON UPDATE CASCADE,
  CONSTRAINT `PURCHASE_ibfk_2` FOREIGN KEY (`CUS_ID`) REFERENCES `CUSTOMER` (`CUS_ID`),
  CONSTRAINT `PURCHASE_ibfk_3` FOREIGN KEY (`EMP_ID`) REFERENCES `EMPLOYEE` (`EMP_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PURCHASE`
--

LOCK TABLES `PURCHASE` WRITE;
/*!40000 ALTER TABLE `PURCHASE` DISABLE KEYS */;
INSERT INTO `PURCHASE` VALUES (16,'2019-04-08 00:00:00',5,2),(20,'2019-04-08 00:00:00',6,14),(25,'2019-04-08 00:00:00',8,1),(28,'2019-04-08 21:53:53',3,13),(29,'2019-04-08 22:49:57',2,14),(30,'2019-04-09 14:22:30',2,14),(31,'2019-04-09 15:58:02',8,1),(32,'2019-04-09 19:08:45',1,14),(33,'2019-04-09 19:10:05',15,2),(34,'2019-04-09 23:45:00',13,14),(35,'2019-04-10 18:38:03',16,2),(36,'2019-04-10 22:56:23',10,14),(37,'2019-04-11 13:59:08',10,14),(38,'2019-04-11 15:00:52',10,2);
/*!40000 ALTER TABLE `PURCHASE` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `PURCHASE_INVOICE`
--

DROP TABLE IF EXISTS `PURCHASE_INVOICE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `PURCHASE_INVOICE` (
  `PINV_LINE` int(11) NOT NULL AUTO_INCREMENT,
  `PUR_ID` int(11) NOT NULL,
  `PROD_ID` int(11) NOT NULL,
  `PROD_PRICE` decimal(9,2) NOT NULL,
  `PROD_QUANTITY` int(3) NOT NULL DEFAULT '1',
  PRIMARY KEY (`PINV_LINE`),
  UNIQUE KEY `unique_prod` (`PUR_ID`,`PROD_ID`),
  KEY `PROD_ID` (`PROD_ID`),
  CONSTRAINT `PURCHASE_INVOICE_ibfk_1` FOREIGN KEY (`PROD_ID`) REFERENCES `PRODUCT` (`PROD_ID`),
  CONSTRAINT `PURCHASE_INVOICE_ibfk_2` FOREIGN KEY (`PUR_ID`) REFERENCES `PURCHASE` (`PUR_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PURCHASE_INVOICE`
--

LOCK TABLES `PURCHASE_INVOICE` WRITE;
/*!40000 ALTER TABLE `PURCHASE_INVOICE` DISABLE KEYS */;
INSERT INTO `PURCHASE_INVOICE` VALUES (22,16,2,1.00,5),(23,16,4,699.99,1),(24,20,1,12.30,1),(25,20,11,19.00,1),(30,25,4,750.00,1),(31,28,20,119.99,2),(32,29,29,229.99,1),(33,30,7,0.50,10),(34,30,27,29.99,3),(35,30,29,229.99,1),(36,31,28,49.99,1),(37,31,26,34.99,1),(38,31,27,29.99,1),(39,32,1,79.99,1),(40,33,4,750.00,1),(41,34,7,0.50,873),(42,35,7,0.50,4),(43,36,28,49.99,2),(44,36,6,0.50,1),(45,37,5,1.95,2),(46,38,8,0.50,1);
/*!40000 ALTER TABLE `PURCHASE_INVOICE` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER decrease_stock 
AFTER INSERT ON PURCHASE_INVOICE
FOR EACH ROW
BEGIN
UPDATE PRODUCT
SET PROD_STOCK = PROD_STOCK - NEW.PROD_QUANTITY
WHERE PROD_ID = NEW.PROD_ID;
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `REPAIR`
--

DROP TABLE IF EXISTS `REPAIR`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `REPAIR` (
  `REP_ID` int(11) NOT NULL AUTO_INCREMENT,
  `REP_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `REP_LOCKRNO` varchar(2) NOT NULL,
  `REP_DESC` varchar(200) DEFAULT 'No description',
  `DEV_ID` int(11) NOT NULL,
  `EMP_ID` int(11) NOT NULL,
  PRIMARY KEY (`REP_ID`),
  KEY `DEV_ID` (`DEV_ID`),
  KEY `EMP_ID` (`EMP_ID`),
  CONSTRAINT `REPAIR_ibfk_1` FOREIGN KEY (`DEV_ID`) REFERENCES `DEVICE` (`DEV_ID`),
  CONSTRAINT `REPAIR_ibfk_2` FOREIGN KEY (`EMP_ID`) REFERENCES `EMPLOYEE` (`EMP_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `REPAIR`
--

LOCK TABLES `REPAIR` WRITE;
/*!40000 ALTER TABLE `REPAIR` DISABLE KEYS */;
INSERT INTO `REPAIR` VALUES (2,'2019-04-07 00:00:00','20','Screen replacement',2,11),(18,'2019-04-08 00:00:00','19','Why so many repairs?',2,11),(25,'2019-04-08 23:04:39','1','I broke it',10,12),(26,'2019-04-09 16:25:55','7','Cracked screen. Needs repair done by Monday 4/15.',12,11),(34,'2019-04-10 22:54:17','22','Dropped it in the washing machine. Repairing water damage.',8,12),(36,'2019-04-11 13:58:13','10','Cracked screen',13,2),(37,'2019-04-11 14:59:23','12','Cracked screen.',16,1);
/*!40000 ALTER TABLE `REPAIR` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `REPAIR_INVOICE`
--

DROP TABLE IF EXISTS `REPAIR_INVOICE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `REPAIR_INVOICE` (
  `RINV_LINE` int(11) NOT NULL AUTO_INCREMENT,
  `REP_ID` int(11) NOT NULL,
  `PROD_ID` int(11) NOT NULL,
  `PROD_PRICE` decimal(9,2) NOT NULL,
  `PROD_QUANTITY` int(3) NOT NULL DEFAULT '1',
  PRIMARY KEY (`RINV_LINE`),
  UNIQUE KEY `unique_prod` (`REP_ID`,`PROD_ID`),
  KEY `PROD_ID` (`PROD_ID`),
  CONSTRAINT `REPAIR_INVOICE_ibfk_1` FOREIGN KEY (`PROD_ID`) REFERENCES `PRODUCT` (`PROD_ID`),
  CONSTRAINT `REPAIR_INVOICE_ibfk_2` FOREIGN KEY (`REP_ID`) REFERENCES `REPAIR` (`REP_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `REPAIR_INVOICE`
--

LOCK TABLES `REPAIR_INVOICE` WRITE;
/*!40000 ALTER TABLE `REPAIR_INVOICE` DISABLE KEYS */;
INSERT INTO `REPAIR_INVOICE` VALUES (8,2,1,12.30,1),(10,18,4,699.99,1),(11,25,29,229.99,1),(12,26,24,199.99,1),(15,34,18,89.99,1),(16,34,7,0.50,1),(17,36,31,199.99,1),(18,37,1,79.99,1);
/*!40000 ALTER TABLE `REPAIR_INVOICE` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER decrease_stock_rep 
AFTER INSERT ON REPAIR_INVOICE
FOR EACH ROW
BEGIN
UPDATE PRODUCT
SET PROD_STOCK = PROD_STOCK - NEW.PROD_QUANTITY
WHERE PROD_ID = NEW.PROD_ID;
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

-- Dump completed on 2019-04-11 17:45:52
