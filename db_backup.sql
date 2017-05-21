-- MySQL dump 10.13  Distrib 5.7.18, for Linux (x86_64)
--
-- Host: localhost    Database: msportfolio
-- ------------------------------------------------------
-- Server version	5.7.18-0ubuntu0.16.10.1

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
-- Table structure for table `project_images`
--

DROP TABLE IF EXISTS `project_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `project_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file_path` varchar(255) NOT NULL,
  `thumbnail` tinyint(1) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `project_images`
--

LOCK TABLES `project_images` WRITE;
/*!40000 ALTER TABLE `project_images` DISABLE KEYS */;
/*!40000 ALTER TABLE `project_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` mediumtext,
  `url` varchar(255) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `thumbnail_path` text,
  `thumbnail_containcenter` tinyint(1) DEFAULT NULL,
  `tags` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projects`
--

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
INSERT INTO `projects` VALUES (5,'Pebble QR Code Library','Digitised QR Code Business Card-like Smartwatch App','','2017-04-04','2017-04-04','/images/projects/qrcode/1.jpeg',1,'C,JSON'),(6,'Carbon Diary App','\nMobile App which analyses and visualises\nthe user’s carbon footprint (via automatic recording or manual\ninput of daily transport, food and drink use). We hoped to create\nawareness of individuals’ global warming effect, by enticing users\nto compete for the lowest stats amongst their friends\non social media.','https://twitter.com/Carbon_Diary','2017-04-04','2017-04-04','/images/projects/carbondiaries/2.png',1,'HTML,jQuery Mobile,CSS'),(7,'Naz Kebab House Website','Local fast-food restaurant','http://nazkebabhouse.com','2017-04-04','2017-04-04','/images/projects/nazkebabhouse/nazkebabhouse.png',NULL,'HTML,JS,CSS,PHP'),(8,'International Trading Data Assignment','----yolo----','https://github.com/martinshaw/InternationalTradingDataAssignment',NULL,NULL,'/images/projects/javainttrade/trade4.PNG',1,'C#,.Net'),(9,'Youtilities','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',NULL,NULL,NULL,'/images/projects/youtilities/1.png',0,'HTML,CSS,JS,PHP'),(10,'Adaptive Media Assignment','----yolo----',NULL,NULL,NULL,'/images/projects/adaptivemedia/1.png',1,'Java, Android'),(11,'Employee Information DB Assignment',NULL,'https://github.com/martinshaw/EmployeeRecordSystem',NULL,NULL,'/images/projects/empinformation/1.png',1,'Java,Android,HTML,CSS'),(12,'Rochdale Pioneers Trust File Sharing Site','During my second year at Hopwood Hall College, I was approached by the Rochdale Pioneers Trust (an organisation of the Rochdale Metropolitan Borough Council) whose mission statement is as follows: \'an co-operative venture set up to ensure that all young people across Rochdale Borough have access to high quality education\'.<br/><br/>They commisioned me to use my knowledge and experience to build a bespoke, private cloud file sharing service, with the purpose of allowing the area\'s schools and colleges to co-operate on and share confidential files.<br/><br/>It required the implementation of complex features, such as: file versioning, numerous file viewers (PDF, Word Document, HTML), fast and efficient search, and much more... A public-facing website was also required to communicate the Trust\'s activities to citiziens.<br/><br/>In the short period of a few months using Laravel and PHP on a self-maintained Linux server, I single-handedly completed the project to the client\'s specification and desires.','http://www.rochdalepioneerstrust.org/',NULL,NULL,'/images/projects/rochpioneerstrust/1.png',0,'PHP,MySql,HTML,CSS');
/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-05-21 18:28:01
