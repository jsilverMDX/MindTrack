-- MySQL dump 10.11
--
-- Host: localhost    Database: mindynamics
-- ------------------------------------------------------
-- Server version	5.0.75-0ubuntu10.5

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
-- Table structure for table `acos`
--

DROP TABLE IF EXISTS `acos`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `acos` (
  `id` int(10) NOT NULL auto_increment,
  `parent_id` int(10) default NULL,
  `model` varchar(255) default NULL,
  `foreign_key` int(10) default NULL,
  `alias` varchar(255) default NULL,
  `lft` int(10) default NULL,
  `rght` int(10) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=116 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `acos`
--

LOCK TABLES `acos` WRITE;
/*!40000 ALTER TABLE `acos` DISABLE KEYS */;
INSERT INTO `acos` VALUES (1,NULL,NULL,NULL,'controllers',1,230),(2,1,NULL,NULL,'Pages',2,21),(3,2,NULL,NULL,'welcome',3,4),(4,2,NULL,NULL,'index',5,6),(5,2,NULL,NULL,'view',7,8),(6,2,NULL,NULL,'add',9,10),(7,2,NULL,NULL,'edit',11,12),(8,2,NULL,NULL,'delete',13,14),(9,2,NULL,NULL,'build_acl',15,16),(10,1,NULL,NULL,'Users',22,43),(11,10,NULL,NULL,'index',23,24),(12,10,NULL,NULL,'view',25,26),(13,10,NULL,NULL,'add',27,28),(14,10,NULL,NULL,'edit',29,30),(15,10,NULL,NULL,'delete',31,32),(16,10,NULL,NULL,'build_acl',33,34),(17,1,NULL,NULL,'Groups',44,57),(18,17,NULL,NULL,'index',45,46),(19,17,NULL,NULL,'view',47,48),(20,17,NULL,NULL,'add',49,50),(21,17,NULL,NULL,'edit',51,52),(22,17,NULL,NULL,'delete',53,54),(23,17,NULL,NULL,'build_acl',55,56),(24,1,NULL,NULL,'Members',58,101),(25,24,NULL,NULL,'index',59,60),(26,24,NULL,NULL,'view',61,62),(27,24,NULL,NULL,'add',63,64),(28,24,NULL,NULL,'edit',65,66),(29,24,NULL,NULL,'delete',67,68),(30,24,NULL,NULL,'build_acl',69,70),(31,1,NULL,NULL,'Clients',102,145),(32,31,NULL,NULL,'index',103,104),(33,31,NULL,NULL,'view',105,106),(34,31,NULL,NULL,'add',107,108),(35,31,NULL,NULL,'edit',109,110),(36,31,NULL,NULL,'delete',111,112),(37,31,NULL,NULL,'build_acl',113,114),(38,1,NULL,NULL,'StatusMessages',146,159),(39,38,NULL,NULL,'index',147,148),(40,38,NULL,NULL,'view',149,150),(41,38,NULL,NULL,'add',151,152),(42,38,NULL,NULL,'edit',153,154),(43,38,NULL,NULL,'delete',155,156),(44,38,NULL,NULL,'build_acl',157,158),(45,1,NULL,NULL,'Projects',160,173),(46,45,NULL,NULL,'index',161,162),(47,45,NULL,NULL,'view',163,164),(48,45,NULL,NULL,'add',165,166),(49,45,NULL,NULL,'edit',167,168),(50,45,NULL,NULL,'delete',169,170),(51,45,NULL,NULL,'build_acl',171,172),(52,1,NULL,NULL,'TicketComments',174,187),(53,52,NULL,NULL,'index',175,176),(54,52,NULL,NULL,'view',177,178),(55,52,NULL,NULL,'add',179,180),(56,52,NULL,NULL,'edit',181,182),(57,52,NULL,NULL,'delete',183,184),(58,52,NULL,NULL,'build_acl',185,186),(59,1,NULL,NULL,'CommentReplies',188,201),(60,59,NULL,NULL,'index',189,190),(61,59,NULL,NULL,'view',191,192),(62,59,NULL,NULL,'add',193,194),(63,59,NULL,NULL,'edit',195,196),(64,59,NULL,NULL,'delete',197,198),(65,59,NULL,NULL,'build_acl',199,200),(66,1,NULL,NULL,'Tickets',202,215),(67,66,NULL,NULL,'index',203,204),(68,66,NULL,NULL,'view',205,206),(69,66,NULL,NULL,'add',207,208),(70,66,NULL,NULL,'edit',209,210),(71,66,NULL,NULL,'delete',211,212),(72,66,NULL,NULL,'build_acl',213,214),(73,2,NULL,NULL,'display',17,18),(74,2,NULL,NULL,'notfound',19,20),(75,10,NULL,NULL,'login',35,36),(76,10,NULL,NULL,'logout',37,38),(77,24,NULL,NULL,'member_landing',71,72),(78,10,NULL,NULL,'login_redirect',39,40),(79,31,NULL,NULL,'client_landing',115,116),(80,31,NULL,NULL,'new_ticket',117,118),(81,31,NULL,NULL,'add_ticket',119,120),(82,24,NULL,NULL,'reply_to_comment',73,74),(83,31,NULL,NULL,'add_comment',121,122),(84,24,NULL,NULL,'post_status_message',75,76),(85,10,NULL,NULL,'admin_landing',41,42),(86,31,NULL,NULL,'edit_my_project',123,124),(87,24,NULL,NULL,'post_comment',77,78),(88,31,NULL,NULL,'post_status_message',125,126),(89,31,NULL,NULL,'reply_to_comment',127,128),(90,1,NULL,NULL,'Images',216,229),(91,90,NULL,NULL,'index',217,218),(92,90,NULL,NULL,'view',219,220),(93,90,NULL,NULL,'add',221,222),(94,90,NULL,NULL,'edit',223,224),(95,90,NULL,NULL,'delete',225,226),(96,90,NULL,NULL,'build_acl',227,228),(97,31,NULL,NULL,'add_file_to_ticket',129,130),(98,24,NULL,NULL,'add_file_to_ticket',79,80),(99,24,NULL,NULL,'add_comment',81,82),(100,24,NULL,NULL,'mark_as_done',83,84),(101,24,NULL,NULL,'done_tickets',85,86),(102,24,NULL,NULL,'mark_as_not_done',87,88),(103,24,NULL,NULL,'my_tickets',89,90),(104,24,NULL,NULL,'assign_ticket',91,92),(105,24,NULL,NULL,'unassign_ticket',93,94),(106,24,NULL,NULL,'ticket_master',95,96),(107,31,NULL,NULL,'done_tickets',131,132),(108,31,NULL,NULL,'mark_as_done',133,134),(109,31,NULL,NULL,'mark_as_not_done',135,136),(110,31,NULL,NULL,'edit_ticket',137,138),(111,31,NULL,NULL,'show_ticket',139,140),(112,31,NULL,NULL,'doc_store',141,142),(113,31,NULL,NULL,'add_file_to_project',143,144),(114,24,NULL,NULL,'doc_store',97,98),(115,24,NULL,NULL,'add_file_to_project',99,100);
/*!40000 ALTER TABLE `acos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aros`
--

DROP TABLE IF EXISTS `aros`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `aros` (
  `id` int(10) NOT NULL auto_increment,
  `parent_id` int(10) default NULL,
  `model` varchar(255) default NULL,
  `foreign_key` int(10) default NULL,
  `alias` varchar(255) default NULL,
  `lft` int(10) default NULL,
  `rght` int(10) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `aros`
--

LOCK TABLES `aros` WRITE;
/*!40000 ALTER TABLE `aros` DISABLE KEYS */;
INSERT INTO `aros` VALUES (1,NULL,'Group',1,NULL,1,4),(2,NULL,'Group',2,NULL,5,8),(3,NULL,'Group',3,NULL,9,12),(4,1,'User',1,NULL,2,3),(10,2,'User',8,NULL,6,7),(11,3,'User',9,NULL,10,11);
/*!40000 ALTER TABLE `aros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aros_acos`
--

DROP TABLE IF EXISTS `aros_acos`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `aros_acos` (
  `id` int(10) NOT NULL auto_increment,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) NOT NULL default '0',
  `_read` varchar(2) NOT NULL default '0',
  `_update` varchar(2) NOT NULL default '0',
  `_delete` varchar(2) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `ARO_ACO_KEY` (`aro_id`,`aco_id`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `aros_acos`
--

LOCK TABLES `aros_acos` WRITE;
/*!40000 ALTER TABLE `aros_acos` DISABLE KEYS */;
INSERT INTO `aros_acos` VALUES (1,1,1,'1','1','1','1'),(5,2,77,'1','1','1','1'),(8,3,79,'1','1','1','1'),(9,3,80,'1','1','1','1'),(10,3,81,'1','1','1','1'),(11,3,83,'1','1','1','1'),(12,2,82,'1','1','1','1'),(13,2,84,'1','1','1','1'),(14,3,86,'1','1','1','1'),(15,2,83,'1','1','1','1'),(20,3,87,'1','1','1','1'),(19,3,88,'1','1','1','1'),(21,3,89,'1','1','1','1'),(22,3,97,'1','1','1','1'),(23,2,98,'1','1','1','1'),(24,2,99,'1','1','1','1'),(25,2,100,'1','1','1','1'),(26,2,101,'1','1','1','1'),(27,2,102,'1','1','1','1'),(28,2,106,'1','1','1','1'),(29,2,104,'1','1','1','1'),(30,2,105,'1','1','1','1'),(31,2,103,'1','1','1','1'),(33,3,107,'1','1','1','1'),(34,3,108,'1','1','1','1'),(35,3,109,'1','1','1','1'),(36,3,110,'1','1','1','1'),(37,3,111,'1','1','1','1'),(38,3,112,'1','1','1','1'),(39,3,113,'1','1','1','1'),(40,2,114,'1','1','1','1'),(41,2,115,'1','1','1','1');
/*!40000 ALTER TABLE `aros_acos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2010-12-31  8:13:29
