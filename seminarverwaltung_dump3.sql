-- MariaDB dump 10.19  Distrib 10.4.32-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: seminarverwaltung
-- ------------------------------------------------------
-- Server version	10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `exercises`
--

DROP TABLE IF EXISTS `exercises`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `exercises` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `seminar_id` int(11) NOT NULL,
  `exercise_nr` int(11) NOT NULL,
  `description` text NOT NULL,
  `difficulty` decimal(3,2) NOT NULL,
  `solution` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `exercises`
--

LOCK TABLES `exercises` WRITE;
/*!40000 ALTER TABLE `exercises` DISABLE KEYS */;
INSERT INTO `exercises` VALUES (1,'RUBY ON RIALS',1,1,'Ruby on Rails ist das neue, sensationelle Webframework aus den USA.',1.00,'Ruby on Rails ist ein Webframework, das die Entwicklung von Webanwendungen erleichtert.'),(2,'AJAX & DOM',2,1,'In diesem Seminar lernen Sie, wie Sie mit Ajax und dem Document Object Model (DOM) interaktive Webanwendungen entwickeln.',1.00,'Ajax ist eine Technik, mit der Webseiten dynamisch geladen werden können.'),(3,'HTML & CSS',3,1,'HTML und CSS sind die Grundlagen des Webdesigns. In diesem Seminar lernen Sie, wie Sie mit HTML und CSS moderne Webseiten erstellen.',1.00,'HTML ist eine Auszeichnungssprache, die die Struktur von Webseiten definiert.'),(4,'PHP & Laravel',4,1,'Laravel ist ein modernes PHP-Framework, das die Entwicklung von Webanwendungen erleichtert.',1.00,'Laravel ist ein PHP-Framework, das die Entwicklung von Webanwendungen erleichtert.'),(5,'Datenbanken & SQL',5,1,'Moderne Webentwicklung',1.00,'Datenbanken sind ein wichtiger Bestandteil moderner Webanwendungen.'),(6,'JAVA',6,1,'Java ist eine objektorientierte Programmiersprache und eine eingetragene Marke des Unternehmens Sun Microsystems',1.00,'Java ist eine objektorientierte Programmiersprache.');
/*!40000 ALTER TABLE `exercises` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `seminare`
--

DROP TABLE IF EXISTS `seminare`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `seminare` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(120) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `seminare`
--

LOCK TABLES `seminare` WRITE;
/*!40000 ALTER TABLE `seminare` DISABLE KEYS */;
INSERT INTO `seminare` VALUES (1,'RUBY ON RIALS','Ruby on Rails ist das neue, sensationelle Webframework aus den USA.',2500.00),(2,'AJAX & DOM','In diesem Seminar lernen Sie, wie Sie mit Ajax und dem Document Object Model (DOM) interaktive Webanwendungen entwickeln.',1699.99),(3,'HTML & CSS','HTML und CSS sind die Grundlagen des Webdesigns. In diesem Seminar lernen Sie, wie Sie mit HTML und CSS moderne Webseiten erstellen.',975.00),(4,'PHP & Laravel','Laravel ist ein modernes PHP-Framework, das die Entwicklung von Webanwendungen erleichtert.',1799.87),(5,'Datenbanken & SQL','Moderne Webentwicklung',975.00),(6,'JAVA','Java ist eine objektorientierte Programmiersprache und eine eingetragene Marke des Unternehmens Sun Microsystems',3000.23);
/*!40000 ALTER TABLE `seminare` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `salutation` varchar(5) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `registered_since` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `birthday` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'mrs','Alice','Adams','2024-04-22','alice@example.com','12345','1990-01-01'),(2,'mr','Bob','Baker','2024-04-23','bob@example.com','54321','1990-01-02'),(3,'mr','Carl','Berthold','2024-04-24','carl@example.com','12345','1990-01-03'),(4,'mrs','Diana','Doe','2024-04-25','diana@example.com','54321','1990-01-04');
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

-- Dump completed on 2024-04-26  9:16:08
