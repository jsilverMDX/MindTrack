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
) ENGINE=MyISAM AUTO_INCREMENT=155 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `acos`
--

LOCK TABLES `acos` WRITE;
/*!40000 ALTER TABLE `acos` DISABLE KEYS */;
INSERT INTO `acos` VALUES (1,NULL,NULL,NULL,'controllers',1,308),(2,1,NULL,NULL,'Pages',2,21),(3,2,NULL,NULL,'welcome',3,4),(4,2,NULL,NULL,'index',5,6),(5,2,NULL,NULL,'view',7,8),(6,2,NULL,NULL,'add',9,10),(7,2,NULL,NULL,'edit',11,12),(8,2,NULL,NULL,'delete',13,14),(9,2,NULL,NULL,'build_acl',15,16),(10,1,NULL,NULL,'Users',22,43),(11,10,NULL,NULL,'index',23,24),(12,10,NULL,NULL,'view',25,26),(13,10,NULL,NULL,'add',27,28),(14,10,NULL,NULL,'edit',29,30),(15,10,NULL,NULL,'delete',31,32),(16,10,NULL,NULL,'build_acl',33,34),(17,1,NULL,NULL,'Groups',44,57),(18,17,NULL,NULL,'index',45,46),(19,17,NULL,NULL,'view',47,48),(20,17,NULL,NULL,'add',49,50),(21,17,NULL,NULL,'edit',51,52),(22,17,NULL,NULL,'delete',53,54),(23,17,NULL,NULL,'build_acl',55,56),(24,1,NULL,NULL,'Members',58,115),(25,24,NULL,NULL,'index',59,60),(26,24,NULL,NULL,'view',61,62),(27,24,NULL,NULL,'add',63,64),(28,24,NULL,NULL,'edit',65,66),(29,24,NULL,NULL,'delete',67,68),(30,24,NULL,NULL,'build_acl',69,70),(31,1,NULL,NULL,'Clients',116,161),(32,31,NULL,NULL,'index',117,118),(33,31,NULL,NULL,'view',119,120),(34,31,NULL,NULL,'add',121,122),(35,31,NULL,NULL,'edit',123,124),(36,31,NULL,NULL,'delete',125,126),(37,31,NULL,NULL,'build_acl',127,128),(38,1,NULL,NULL,'StatusMessages',162,175),(39,38,NULL,NULL,'index',163,164),(40,38,NULL,NULL,'view',165,166),(41,38,NULL,NULL,'add',167,168),(42,38,NULL,NULL,'edit',169,170),(43,38,NULL,NULL,'delete',171,172),(44,38,NULL,NULL,'build_acl',173,174),(45,1,NULL,NULL,'Projects',176,189),(46,45,NULL,NULL,'index',177,178),(47,45,NULL,NULL,'view',179,180),(48,45,NULL,NULL,'add',181,182),(49,45,NULL,NULL,'edit',183,184),(50,45,NULL,NULL,'delete',185,186),(51,45,NULL,NULL,'build_acl',187,188),(52,1,NULL,NULL,'TicketComments',190,203),(53,52,NULL,NULL,'index',191,192),(54,52,NULL,NULL,'view',193,194),(55,52,NULL,NULL,'add',195,196),(56,52,NULL,NULL,'edit',197,198),(57,52,NULL,NULL,'delete',199,200),(58,52,NULL,NULL,'build_acl',201,202),(59,1,NULL,NULL,'CommentReplies',204,217),(60,59,NULL,NULL,'index',205,206),(61,59,NULL,NULL,'view',207,208),(62,59,NULL,NULL,'add',209,210),(63,59,NULL,NULL,'edit',211,212),(64,59,NULL,NULL,'delete',213,214),(65,59,NULL,NULL,'build_acl',215,216),(66,1,NULL,NULL,'Tickets',218,233),(67,66,NULL,NULL,'index',219,220),(68,66,NULL,NULL,'view',221,222),(69,66,NULL,NULL,'add',223,224),(70,66,NULL,NULL,'edit',225,226),(71,66,NULL,NULL,'delete',227,228),(72,66,NULL,NULL,'build_acl',229,230),(73,2,NULL,NULL,'display',17,18),(74,2,NULL,NULL,'notfound',19,20),(75,10,NULL,NULL,'login',35,36),(76,10,NULL,NULL,'logout',37,38),(77,24,NULL,NULL,'member_landing',71,72),(78,10,NULL,NULL,'login_redirect',39,40),(79,31,NULL,NULL,'client_landing',129,130),(80,31,NULL,NULL,'new_ticket',131,132),(81,31,NULL,NULL,'add_ticket',133,134),(82,24,NULL,NULL,'reply_to_comment',73,74),(83,31,NULL,NULL,'add_comment',135,136),(84,24,NULL,NULL,'post_status_message',75,76),(85,10,NULL,NULL,'admin_landing',41,42),(86,31,NULL,NULL,'edit_my_project',137,138),(87,24,NULL,NULL,'post_comment',77,78),(88,31,NULL,NULL,'post_status_message',139,140),(89,31,NULL,NULL,'reply_to_comment',141,142),(90,1,NULL,NULL,'Images',234,247),(91,90,NULL,NULL,'index',235,236),(92,90,NULL,NULL,'view',237,238),(93,90,NULL,NULL,'add',239,240),(94,90,NULL,NULL,'edit',241,242),(95,90,NULL,NULL,'delete',243,244),(96,90,NULL,NULL,'build_acl',245,246),(97,31,NULL,NULL,'add_file_to_ticket',143,144),(98,24,NULL,NULL,'add_file_to_ticket',79,80),(99,24,NULL,NULL,'add_comment',81,82),(100,24,NULL,NULL,'mark_as_done',83,84),(101,24,NULL,NULL,'done_tickets',85,86),(102,24,NULL,NULL,'mark_as_not_done',87,88),(103,24,NULL,NULL,'my_tickets',89,90),(104,24,NULL,NULL,'assign_ticket',91,92),(105,24,NULL,NULL,'unassign_ticket',93,94),(106,24,NULL,NULL,'ticket_master',95,96),(107,31,NULL,NULL,'done_tickets',145,146),(108,31,NULL,NULL,'mark_as_done',147,148),(109,31,NULL,NULL,'mark_as_not_done',149,150),(110,31,NULL,NULL,'edit_ticket',151,152),(111,31,NULL,NULL,'show_ticket',153,154),(112,31,NULL,NULL,'doc_store',155,156),(113,31,NULL,NULL,'add_file_to_project',157,158),(114,24,NULL,NULL,'doc_store',97,98),(115,24,NULL,NULL,'add_file_to_project',99,100),(116,24,NULL,NULL,'track_time',101,102),(117,24,NULL,NULL,'punch_timeclock',103,104),(118,1,NULL,NULL,'TimeEntries',248,259),(119,118,NULL,NULL,'index',249,250),(120,118,NULL,NULL,'view',251,252),(121,118,NULL,NULL,'add',253,254),(122,118,NULL,NULL,'edit',255,256),(123,118,NULL,NULL,'delete',257,258),(124,1,NULL,NULL,'Rates',260,271),(125,124,NULL,NULL,'index',261,262),(126,124,NULL,NULL,'view',263,264),(127,124,NULL,NULL,'add',265,266),(128,124,NULL,NULL,'edit',267,268),(129,124,NULL,NULL,'delete',269,270),(130,1,NULL,NULL,'Invoices',272,293),(131,130,NULL,NULL,'index',273,274),(132,130,NULL,NULL,'view',275,276),(133,130,NULL,NULL,'add',277,278),(134,130,NULL,NULL,'edit',279,280),(135,130,NULL,NULL,'delete',281,282),(136,1,NULL,NULL,'LineItems',294,305),(137,136,NULL,NULL,'index',295,296),(138,136,NULL,NULL,'view',297,298),(139,136,NULL,NULL,'add',299,300),(140,136,NULL,NULL,'edit',301,302),(141,136,NULL,NULL,'delete',303,304),(142,130,NULL,NULL,'new_invoice',283,284),(143,130,NULL,NULL,'generate_invoice',285,286),(144,130,NULL,NULL,'show_invoice',287,288),(145,130,NULL,NULL,'download',289,290),(146,1,NULL,NULL,'FileImages',306,307),(147,130,NULL,NULL,'email_client_invoice',291,292),(148,24,NULL,NULL,'create_invoice',105,106),(149,24,NULL,NULL,'generate_invoice',107,108),(150,24,NULL,NULL,'download',109,110),(151,24,NULL,NULL,'email_client_invoice',111,112),(152,31,NULL,NULL,'my_invoices',159,160),(153,24,NULL,NULL,'member_project',113,114),(154,66,NULL,NULL,'ticket_redirect',231,232);
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
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `aros_acos`
--

LOCK TABLES `aros_acos` WRITE;
/*!40000 ALTER TABLE `aros_acos` DISABLE KEYS */;
INSERT INTO `aros_acos` VALUES (1,1,1,'1','1','1','1'),(5,2,77,'1','1','1','1'),(8,3,79,'1','1','1','1'),(9,3,80,'1','1','1','1'),(10,3,81,'1','1','1','1'),(11,3,83,'1','1','1','1'),(12,2,82,'1','1','1','1'),(13,2,84,'1','1','1','1'),(14,3,86,'1','1','1','1'),(15,2,83,'1','1','1','1'),(20,3,87,'1','1','1','1'),(19,3,88,'1','1','1','1'),(21,3,89,'1','1','1','1'),(22,3,97,'1','1','1','1'),(23,2,98,'1','1','1','1'),(24,2,99,'1','1','1','1'),(25,2,100,'1','1','1','1'),(26,2,101,'1','1','1','1'),(27,2,102,'1','1','1','1'),(28,2,106,'1','1','1','1'),(29,2,104,'1','1','1','1'),(30,2,105,'1','1','1','1'),(31,2,103,'1','1','1','1'),(33,3,107,'1','1','1','1'),(34,3,108,'1','1','1','1'),(35,3,109,'1','1','1','1'),(36,3,110,'1','1','1','1'),(37,3,111,'1','1','1','1'),(38,3,112,'1','1','1','1'),(39,3,113,'1','1','1','1'),(40,2,114,'1','1','1','1'),(41,2,115,'1','1','1','1'),(42,2,116,'1','1','1','1'),(43,2,117,'1','1','1','1'),(44,2,148,'1','1','1','1'),(45,2,149,'1','1','1','1'),(46,2,150,'1','1','1','1'),(47,2,151,'1','1','1','1'),(48,3,152,'1','1','1','1'),(49,3,145,'1','1','1','1'),(50,3,144,'1','1','1','1'),(51,2,24,'1','1','1','1'),(52,2,154,'1','1','1','1'),(53,3,154,'1','1','1','1');
/*!40000 ALTER TABLE `aros_acos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `clients` (
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `phone` varchar(45) NOT NULL,
  `skype` varchar(45) default NULL,
  `company` varchar(45) NOT NULL,
  `link` varchar(45) NOT NULL,
  `id` int(11) NOT NULL auto_increment,
  `user_id` int(11) NOT NULL,
  `created` datetime default NULL,
  `updated` datetime default NULL,
  PRIMARY KEY  (`id`),
  KEY `fk_clients_users1` (`user_id`),
  CONSTRAINT `fk_clients_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `clients`
--

LOCK TABLES `clients` WRITE;
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
INSERT INTO `clients` VALUES ('Keyvan Fatehi','keyvan@mindynamics.com','7277539826','jsilverman2','Mindynamics','http://mindynamics.com',3,9,'2010-12-29 14:13:55','2011-01-03 00:34:40');
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comment_replies`
--

DROP TABLE IF EXISTS `comment_replies`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `comment_replies` (
  `id` int(11) NOT NULL auto_increment,
  `reply` text NOT NULL,
  `ticket_comment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime default NULL,
  `updated` datetime default NULL,
  PRIMARY KEY  (`id`),
  KEY `fk_comment_replies_2` (`ticket_comment_id`),
  KEY `fk_comment_replies_1` (`user_id`),
  CONSTRAINT `fk_comment_replies_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_comment_replies_2` FOREIGN KEY (`ticket_comment_id`) REFERENCES `ticket_comments` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `comment_replies`
--

LOCK TABLES `comment_replies` WRITE;
/*!40000 ALTER TABLE `comment_replies` DISABLE KEYS */;
INSERT INTO `comment_replies` VALUES (5,'WE\'RE ALREADY LATE ON THIS',6,9,'2011-02-21 02:17:01','2011-02-21 02:17:01');
/*!40000 ALTER TABLE `comment_replies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `groups` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `created` datetime default NULL,
  `modified` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `groups`
--

LOCK TABLES `groups` WRITE;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` VALUES (1,'admin','2010-12-20 05:31:36','2010-12-20 05:31:36'),(2,'member','2010-12-20 05:31:49','2010-12-20 05:31:49'),(3,'client','2010-12-20 05:32:12','2010-12-20 05:32:12');
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `images` (
  `id` int(11) NOT NULL auto_increment,
  `s3_url` varchar(120) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created` datetime default NULL,
  `updated` datetime default NULL,
  PRIMARY KEY  (`id`),
  KEY `u_id` (`user_id`),
  KEY `fk_Image_1` (`user_id`),
  CONSTRAINT `fk_Image_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` VALUES (1,'/mindynamics.com/0290614001294185053.jpg',9,'scene-desktop-wallpaper-1280x800-0382.jpg','2011-01-04 15:50:54','2011-01-04 15:50:54'),(2,'/mindynamics.com/0068361001294185557.jpg',9,'scene-desktop-wallpaper-1280x800-0382.jpg','2011-01-04 15:59:17','2011-01-04 15:59:17'),(3,'/mindynamics.com/0702109001294185682.jpg',9,'scene-desktop-wallpaper-1280x800-0382.jpg','2011-01-04 16:01:23','2011-01-04 16:01:23'),(4,'/mindynamics.com/0644468001294185821.jpg',9,'hdr-logo.jpg','2011-01-04 16:03:41','2011-01-04 16:03:41'),(5,'/mindynamics.com/0238103001297662903.png',8,'tileset.png','2011-02-13 23:55:05','2011-02-13 23:55:05');
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images_projects`
--

DROP TABLE IF EXISTS `images_projects`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `images_projects` (
  `id` int(11) NOT NULL auto_increment,
  `project_id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`,`project_id`,`image_id`),
  KEY `fk_images_projects_1` (`image_id`),
  KEY `fk_images_projects_2` (`project_id`),
  CONSTRAINT `fk_images_projects_1` FOREIGN KEY (`image_id`) REFERENCES `images` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_images_projects_2` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `images_projects`
--

LOCK TABLES `images_projects` WRITE;
/*!40000 ALTER TABLE `images_projects` DISABLE KEYS */;
INSERT INTO `images_projects` VALUES (1,4,1),(2,4,2),(3,4,3),(4,4,4);
/*!40000 ALTER TABLE `images_projects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images_tickets`
--

DROP TABLE IF EXISTS `images_tickets`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `images_tickets` (
  `id` int(11) NOT NULL auto_increment,
  `ticket_id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`,`ticket_id`,`image_id`),
  KEY `fk_images_tickets_1` (`image_id`),
  KEY `fk_images_tickets_2` (`ticket_id`),
  CONSTRAINT `fk_images_tickets_1` FOREIGN KEY (`image_id`) REFERENCES `images` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_images_tickets_2` FOREIGN KEY (`ticket_id`) REFERENCES `tickets` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `images_tickets`
--

LOCK TABLES `images_tickets` WRITE;
/*!40000 ALTER TABLE `images_tickets` DISABLE KEYS */;
/*!40000 ALTER TABLE `images_tickets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `invoices`
--

DROP TABLE IF EXISTS `invoices`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `invoices` (
  `id` int(11) NOT NULL auto_increment,
  `client_id` int(11) default NULL,
  `user_id` int(11) default NULL,
  `paid` binary(1) default '0',
  `amt_due` decimal(10,0) default NULL,
  `amt_paid` decimal(10,0) default '0',
  `notes` text,
  `subtotal` decimal(10,0) default NULL,
  `total` decimal(10,0) default NULL,
  `balance` decimal(10,0) default '0',
  `project_id` int(11) default NULL,
  `created` datetime default NULL,
  `updated` datetime default NULL,
  PRIMARY KEY  (`id`),
  KEY `fk_invoices_1` (`user_id`),
  KEY `fk_invoices_2` (`client_id`),
  KEY `fk_invoices_3` (`project_id`),
  CONSTRAINT `fk_invoices_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_invoices_2` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_invoices_3` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `invoices`
--

LOCK TABLES `invoices` WRITE;
/*!40000 ALTER TABLE `invoices` DISABLE KEYS */;
INSERT INTO `invoices` VALUES (3,3,8,'0','249750','0','I LOVE CONSULTING!!!!!!!!!! sell your time','249750','249750','249750',4,'2011-01-04 12:46:18','2011-01-04 12:46:18');
/*!40000 ALTER TABLE `invoices` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `line_items`
--

DROP TABLE IF EXISTS `line_items`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `line_items` (
  `id` int(11) NOT NULL auto_increment,
  `invoice_id` int(11) default NULL,
  `notes` text,
  `rate` decimal(10,0) default NULL,
  `hours` decimal(10,0) default NULL,
  `line_total` decimal(10,0) default NULL,
  `created` datetime default NULL,
  `updated` datetime default NULL,
  PRIMARY KEY  (`id`),
  KEY `fk_line_items_1` (`invoice_id`),
  CONSTRAINT `fk_line_items_1` FOREIGN KEY (`invoice_id`) REFERENCES `invoices` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `line_items`
--

LOCK TABLES `line_items` WRITE;
/*!40000 ALTER TABLE `line_items` DISABLE KEYS */;
INSERT INTO `line_items` VALUES (2,3,NULL,'375','666','249750','2011-01-04 12:46:19','2011-01-04 12:46:19');
/*!40000 ALTER TABLE `line_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `members` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(45) NOT NULL,
  `karma_points` varchar(45) NOT NULL,
  `user_rank` varchar(45) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime default NULL,
  `updated` datetime default NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  KEY `fk_members_users1` (`user_id`),
  CONSTRAINT `fk_members_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `members`
--

LOCK TABLES `members` WRITE;
/*!40000 ALTER TABLE `members` DISABLE KEYS */;
INSERT INTO `members` VALUES (3,'jsilver','1000','ninja master',8,'2010-12-29 14:15:06','2010-12-29 14:15:06');
/*!40000 ALTER TABLE `members` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `members_projects`
--

DROP TABLE IF EXISTS `members_projects`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `members_projects` (
  `id` int(11) NOT NULL auto_increment,
  `member_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`,`member_id`,`project_id`),
  KEY `fk_members_projects_members1` (`member_id`),
  KEY `fk_members_projects_projects1` (`project_id`),
  CONSTRAINT `fk_members_projects_members1` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_members_projects_projects1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `members_projects`
--

LOCK TABLES `members_projects` WRITE;
/*!40000 ALTER TABLE `members_projects` DISABLE KEYS */;
INSERT INTO `members_projects` VALUES (9,3,4);
/*!40000 ALTER TABLE `members_projects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `members_tickets`
--

DROP TABLE IF EXISTS `members_tickets`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `members_tickets` (
  `id` int(11) NOT NULL auto_increment,
  `member_id` int(11) NOT NULL,
  `ticket_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`,`member_id`,`ticket_id`),
  KEY `fk_members_tickets_members1` (`member_id`),
  KEY `fk_members_tickets_tickets1` (`ticket_id`),
  CONSTRAINT `fk_members_tickets_members1` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_members_tickets_tickets1` FOREIGN KEY (`ticket_id`) REFERENCES `tickets` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `members_tickets`
--

LOCK TABLES `members_tickets` WRITE;
/*!40000 ALTER TABLE `members_tickets` DISABLE KEYS */;
/*!40000 ALTER TABLE `members_tickets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `pages` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(45) NOT NULL,
  `page` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `public` binary(1) NOT NULL default '0',
  `created` datetime default NULL,
  `updated` datetime default NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  KEY `fk_pages_1` (`user_id`),
  CONSTRAINT `fk_pages_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` VALUES (1,'services','	<div class=\"prelist\">\r\n	What can we do? Well, for starters...\r\n</div>\r\n\r\n	<div id=\"services\">\r\n		<ul class=\"serviceslist\">\r\n		<li><div id=\"graph\"></div>realize your app\'s full <b>potential</b></li>\r\n		<hr class=\"hrfade\">\r\n		<li><div id=\"flag\"></div><b>complete</b> your app to spec</li>\r\n		<hr class=\"hrfade\">\r\n		<li><div id=\"bandaid\"></div><b>fix and modify</b> your existing code</li>\r\n		<hr class=\"hrfade\">\r\n		<li><div id=\"barcode\"></div>turn your project into a <b>product</b></li>\r\n		<hr class=\"hrfade\">\r\n		<li><div id=\"help\"></div>provide <b>help and answers</b></li>\r\n		</ul>\r\n	</div>\r\n	',1,'1','2010-12-29 14:16:08','2011-02-03 20:21:25'),(3,'clients','<div style=\"font-size:18pt;\">\r\nYou have a project.\r\n<br /><br />\r\nYou have a deadline.\r\n<br /><br />\r\nWe\'re a team of highly skilled code ninjas.\r\n<br /><br />\r\nLet us help you exceed your spec. and beat the deadline.\r\n<br /><br />\r\n<a href=\'mailto&#58;%6A&#115;&#105;lve&#114;&#64;&#109;i%6Edy%&#54;Eam&#105;&#37;&#54;3&#115;&#46;%6&#51;&#111;&#37;6D\'>jsilv&#101;r&#64;m&#105;&#110;dyn&#97;mics&#46;c&#111;m</a>\r\n</div>',1,'0','2010-12-29 14:16:08','2011-01-17 03:54:36'),(4,'jobs','<div style=\"font-family: monospace\">\r\nAre you really a coding prodigy?\r\n<br /><br />\r\nDid they turn you down in a lame interview? Did they even ask you non-coding related questions?\r\n<br /><br />\r\nBut secretly, nobody can beat you at chess?\r\n<br /><br />\r\nWe understand.\r\n<br /><br />\r\nHelp us provide the best web development services in the world?\r\n<br /><br />\r\n<a href=\'&#109;&#97;ilto&#58;j%&#54;F%69n%&#52;0min&#100;%79n&#97;mic&#115;&#46;&#99;o&#37;&#54;&#68;\'>j&#111;in&#64;mind&#121;namics&#46;com</a>\r\n</div>',1,'0','2010-12-29 14:16:08','2011-01-16 00:37:26'),(6,'mindynamics','<h1>our story</h1>\r\n\r\n<p>Mindynamics was born shortly after the beginning of 2010 when keyvan and jsilver joined forces because they knew that they would make a great team. And we think that we have been very correct!</p>\r\n\r\n<p>After working together for some time, we found out that we actually did work very well together and we have grown our skills an amazing amount.</p>\r\n\r\n<p>And we have been able to grow the team a couple members as well, and to start sharing our knowledge with these new members, which has been an amazing experience, teaching.</p>\r\n\r\n<p>Mindynamics is our dreamchild prodigy based on how we roll: webcollaboration.</p>',1,'0','2010-12-29 14:16:08','2011-01-16 00:37:31'),(7,'platform','<h1>MDX Platform</h1>\r\n<p>Mindynamics.com is a custom project management tool.</p>\r\n<p>It contains a built in ticket tracker written from scratch for tracking progress every step of the way.</p>\r\n<p>If you\'re a client, we\'ll give you a login to this system so that you can interact with us.</p>\r\n<p>Access to the system is not available to the general public at this time. Feel free to contact us if you\'d like to learn more. :)</p>',1,'0','2010-12-29 14:16:08','2011-01-16 00:37:37'),(8,'incubation','<div style=\"padding:0px 100px;\">\r\nOur team will take a genuine interest in what it is you\'re trying to accomplish with your application and help you to realize that potential.<br><br>\r\n\r\nIf you\'ve already got an app, but it just needs some fixing, we will read the code and complete the specs.<br><br>\r\n\r\nIf you just have an idea and need our help to fill in the gaps of what to do next, we are here to help.<br><br>\r\n\r\nWe\'ve gained an exorbitant amount of knowledge and acquired a vast skill-set in our careers, and know how to put it to good use in helping you do your project today.\r\n<br><br>\r\nWe\'ve helped clients go from a business idea into a robust web application deployed on VPS and the cloud--complete with billing systems and CMS. <br>Our code services have what it takes to make your project into product.<br>\r\n</div>',1,'1','2011-01-16 00:49:33','2011-02-03 20:33:32'),(9,'training','<div style=\"padding:0px 100px;\">\r\nWe Mindynamics value knowledge and information, and the spread of these two things.<br><br>\r\n\r\nOur members must acquire the skills to survive (by mastering) any obstacle--as a collaborative agency, we do this together. As a result, we feel we have have witnessed and learned the art of teaching and spreading knowledge and information.<br><br>\r\n\r\nThose that have experienced this style of development will know that it is not as important that you have some piece of information, but that you are able to acquire this information and use it effectively.<br><br>\r\n\r\nAnyone can learn to harness and mold the web the way we do. For more info about training: <a href=\'mailto&#58;%6A&#115;&#105;lve&#114;&#64;&#109;i%6Edy%&#54;Eam&#105;&#37;&#54;3&#115;&#46;%6&#51;&#111;&#37;6D\'>jsilv&#101;r&#64;m&#105;&#110;dyn&#97;mics&#46;c&#111;m</a>\r\n</div>',1,'1','2011-01-16 01:00:10','2011-02-03 20:34:45'),(10,'Services_old','<style>\r\n.support-list {\r\n  list-style-type:square;\r\n}\r\n</style>\r\n\r\n<h1>We support:</h1>\r\n\r\n<ul class=\"support-list\">\r\n<li>Linux configuration, administration and auditing</li>\r\n<li>Databases</li>\r\n<li>PHP / CakePHP, Wordpress, Drupal</li>\r\n<li>Ruby / Ruby on Rails / RJS</li>\r\n<li>Deployment Services (LAMP, Passenger, REE, etc)</li>\r\n<li>General Web Code Services (HTML, CSS, Javascript, jQuery, Prototype)</li>\r\n<li>Experimental (GAE, NodeJS, Coffeescript, Javascript)</li>\r\n</ul>\r\n\r\nWe can handle such projects with 0 downtime as we are working with these technologies on a daily basis, however we may be interested in projects that use other technologies not listed here as well.<br><br>\r\n\r\nWe understand that your need is likely to be an amalgam of the above technologies. We do not list rates on our website, but you may get in contact with us via live chat or by emailing jsilver [at] mindynamics [dot] com\r\n',1,'0','2011-01-16 01:12:20','2011-02-03 20:19:09'),(11,'portfolio','<div style=\"padding: 0px 100px;\">\r\n<ul>\r\n<li>http://www.sponsorpitch.com</li>\r\n<li>http://www.weddingfutures.com</li>\r\n<li>http://www.latinpulsemusic.com</li>\r\n<li>http://www.latinpulsemedia.com</li>\r\n<li>http://www.technical-college.org</li>\r\n<li>http://www.technical-institute.com</li>\r\n<li>http://www.technicalschoolscareers.com</li>\r\n</ul>\r\n</div>',1,'1','2011-01-16 01:24:03','2011-02-03 20:35:12'),(12,'the team','<div style=\"padding: 0px 100px;\">\r\n<style>\r\n.member-bio img {\r\n  width: 80px;\r\n  height:80px;\r\n  float:left;\r\n  border:1px solid black;\r\n}\r\n.member-bio {\r\n  width:45%;\r\n  float:left;\r\n  font-size: 16px;\r\n  margin:5px;\r\n  padding:5px;\r\n}\r\n.member-bio strong {\r\n  padding: 5px;\r\n}\r\n.member-bio .imgbox {\r\n  height:88px;\r\n}\r\n.member-bio .blurb {\r\n  font-size:12px;\r\n  line-height:12px;\r\n}\r\n.member-bio .inactive {\r\n  color:red;\r\n}\r\n.member-bio .active {\r\n  color: #0FAB07;\r\n}\r\n</style>\r\n\r\n<strong>The Mindynamics</strong><br><br>\r\n\r\n<div class=\"member-bio\">\r\n  <div class=\"imgbox\">\r\n    <img src=\"/img/members/keyvan.jpg\"/>\r\n    <strong>Keyvan</strong><br>\r\n    <strong><em>(Nox)</em></strong><br>\r\n    <strong class=\"active\">Active</strong>\r\n  </div>\r\n  <em class=\"blurb\">Has an addiction to monitors. Refuses to work at anything less than 5760x1080 resolution. Likes to teach. Prefers to write a program than do something manually.</em>\r\n</div>\r\n\r\n<div class=\"member-bio\">\r\n  <div class=\"imgbox\">\r\n    <img src=\"/img/members/jon.jpg\"/>\r\n    <strong>Jon</strong><br>\r\n    <strong><em>(jsilver)</em></strong><br>\r\n    <strong class=\"active\">Active</strong>\r\n  </div>\r\n  <em class=\"blurb\">A zen master of programming. Jon\'s expertise is known throughout the Kingdom. He has coded since he was real young, always producing things that were useful (and still in use). Likes to create electronic music in his spare time.</em>\r\n</div>\r\n\r\n<div style=\"clear:both\"></div>\r\n\r\n<div class=\"member-bio\">\r\n  <div class=\"imgbox\">\r\n    <img src=\"/img/members/jacob.jpg\"/>\r\n    <strong>Jacob</strong><br>\r\n    <strong><em>(Jay Hamma)</em></strong><br>\r\n    <strong class=\"active\">Active</strong>\r\n  </div>\r\n  <em class=\"blurb\">A Mindynamics trainee turned hacker, Jacob is now an integral part of our team and harnesses a wide range of skills that is growing everyday. He is a student of Computer Science at some school in New York. We used to get paid to teach him HTML/CSS from an old client, now Jacob teaches us stuff. Jacob\'s favorite tech is CakePHP and he\'s written two production apps from scratch in that framework.</em>\r\n</div>\r\n\r\n<div class=\"member-bio\">\r\n  <div class=\"imgbox\">\r\n    <img src=\"/img/members/carl.jpg\"/>\r\n    <strong>Carl</strong><br>\r\n    <strong><em>(Capt.Proton)</em></strong><br>\r\n    <strong class=\"active\">Active</strong>\r\n  </div>\r\n  <em class=\"blurb\">Carl is our quiet, elite zen master rubyist that uses Git much better than all of us. Typically we watch in awe as he silently carves masterpiece Ruby on Rails code skyscrapers. He is often seen indoctrinating newbies with valuable PDFs of information to get them started in the ways of programming.</em>\r\n</div>\r\n\r\n<div style=\"clear:both\"></div>\r\n\r\n\r\n<div class=\"member-bio\">\r\n  <div class=\"imgbox\">\r\n    <img src=\"/img/members/malte.jpg\"/>\r\n    <strong>Malte</strong><br>\r\n    <strong><em>(mouse)</em></strong><br>\r\n    <strong class=\"active\">Active</strong>\r\n  </div>\r\n  <em class=\"blurb\">Malte is our German Rubyist friend. He\'s an experienced Project Manager and doubles as a Ruby on Rails paratrooper, ready to drop in to any project. He\'s our other expert Rubyist that helps us with our Rails-related overflow, which brings us to 4 experienced Rails developers. Malte is always interesting to talk to and brainstorm with over Skype.</em>\r\n</div>\r\n<div style=\"clear:both;\"></div>\r\n</div>',1,'1','2011-01-16 01:26:04','2011-02-04 13:57:28');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `projects` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(140) NOT NULL,
  `git_remote` varchar(45) NOT NULL,
  `link` varchar(140) NOT NULL,
  `description` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime default NULL,
  `updated` datetime default NULL,
  PRIMARY KEY  (`id`),
  KEY `fk_projects_1` (`user_id`),
  CONSTRAINT `fk_projects_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `projects`
--

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
INSERT INTO `projects` VALUES (4,'Mindynamics','git@mindynamics.com:mindynamics.git','http://mindynamics.com','It\'s my stupid PHP app that I wrote Brosef',9,'2011-01-04 12:35:39','2011-01-04 12:35:39');
/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rates`
--

DROP TABLE IF EXISTS `rates`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `rates` (
  `id` int(11) NOT NULL auto_increment,
  `user_id` int(11) default NULL,
  `amt_per_hour` float default NULL,
  `project_id` int(11) default NULL,
  PRIMARY KEY  (`id`),
  KEY `fk_rates_1` (`project_id`),
  KEY `fk_rates_2` (`user_id`),
  CONSTRAINT `fk_rates_1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_rates_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `rates`
--

LOCK TABLES `rates` WRITE;
/*!40000 ALTER TABLE `rates` DISABLE KEYS */;
INSERT INTO `rates` VALUES (2,8,375,4);
/*!40000 ALTER TABLE `rates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `status_messages`
--

DROP TABLE IF EXISTS `status_messages`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `status_messages` (
  `id` int(11) NOT NULL auto_increment,
  `message` varchar(255) NOT NULL,
  `project_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime default NULL,
  `updated` datetime default NULL,
  PRIMARY KEY  (`id`),
  KEY `fk_status_messages_1` (`project_id`),
  KEY `fk_status_messages_2` (`user_id`),
  CONSTRAINT `fk_status_messages_1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_status_messages_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `status_messages`
--

LOCK TABLES `status_messages` WRITE;
/*!40000 ALTER TABLE `status_messages` DISABLE KEYS */;
INSERT INTO `status_messages` VALUES (1,'what\'s this do?',4,8,'2011-02-06 00:34:22','2011-02-06 00:34:22'),(2,'how about another test!',4,8,'2011-02-10 00:54:57','2011-02-10 00:54:57'),(3,'test',4,8,'2011-02-17 18:25:17','2011-02-17 18:25:17'),(4,'omg',4,8,'2011-02-17 18:29:33','2011-02-17 18:29:33'),(5,'hm',4,8,'2011-02-17 18:30:35','2011-02-17 18:30:35'),(6,'test',4,8,'2011-02-17 18:52:19','2011-02-17 18:52:19'),(7,'YAY HOLY CRAP THIS CRAP WORKS!!',4,8,'2011-02-17 19:22:22','2011-02-17 19:22:22'),(8,'Heh, here\'s a blast!',4,8,'2011-02-17 20:46:23','2011-02-17 20:46:23'),(9,'What about this?',4,8,'2011-02-17 20:52:27','2011-02-17 20:52:27'),(10,'test',4,8,'2011-02-19 20:17:15','2011-02-19 20:17:15');
/*!40000 ALTER TABLE `status_messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ticket_comments`
--

DROP TABLE IF EXISTS `ticket_comments`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `ticket_comments` (
  `id` int(11) NOT NULL auto_increment,
  `comment` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `ticket_id` int(11) NOT NULL,
  `status` varchar(100) default NULL,
  `created` datetime default NULL,
  `updated` datetime default NULL,
  PRIMARY KEY  (`id`),
  KEY `fk_ticket_comments_2` (`ticket_id`),
  KEY `fk_ticket_comments_1` (`user_id`),
  CONSTRAINT `fk_ticket_comments_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_ticket_comments_2` FOREIGN KEY (`ticket_id`) REFERENCES `tickets` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `ticket_comments`
--

LOCK TABLES `ticket_comments` WRITE;
/*!40000 ALTER TABLE `ticket_comments` DISABLE KEYS */;
INSERT INTO `ticket_comments` VALUES (6,'he doesnt care that hes a jerk ooh girl we got our man yes sir he listen to music and hear voices in his head all day',9,5,'stupid','2011-02-21 02:16:28','2011-02-21 02:16:28');
/*!40000 ALTER TABLE `ticket_comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tickets`
--

DROP TABLE IF EXISTS `tickets`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `tickets` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(140) NOT NULL,
  `description` text NOT NULL,
  `project_id` int(11) NOT NULL,
  `status` varchar(45) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime default NULL,
  `updated` datetime default NULL,
  `num` int(11) default '1',
  PRIMARY KEY  (`id`),
  KEY `fk_tickets_1` (`project_id`),
  KEY `fk_tickets_2` (`user_id`),
  CONSTRAINT `fk_tickets_1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_tickets_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `tickets`
--

LOCK TABLES `tickets` WRITE;
/*!40000 ALTER TABLE `tickets` DISABLE KEYS */;
INSERT INTO `tickets` VALUES (5,'tsts','teste',4,'not done',9,'2011-02-21 01:59:32','2011-02-21 01:59:32',1);
/*!40000 ALTER TABLE `tickets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `time_entries`
--

DROP TABLE IF EXISTS `time_entries`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `time_entries` (
  `id` int(11) NOT NULL auto_increment,
  `hours` float default NULL,
  `billed` binary(1) default '0',
  `created` timestamp NULL default NULL,
  `updated` timestamp NULL default NULL,
  `project_id` int(11) default NULL,
  `user_id` int(11) default NULL,
  PRIMARY KEY  (`id`),
  KEY `fk_time_entries_1` (`project_id`),
  KEY `fk_time_entries_2` (`user_id`),
  CONSTRAINT `fk_time_entries_1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_time_entries_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `time_entries`
--

LOCK TABLES `time_entries` WRITE;
/*!40000 ALTER TABLE `time_entries` DISABLE KEYS */;
INSERT INTO `time_entries` VALUES (8,666,'1','2011-01-04 20:40:39','2011-01-04 20:46:18',4,8);
/*!40000 ALTER TABLE `time_entries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(255) NOT NULL,
  `password` varchar(40) NOT NULL,
  `group_id` int(11) NOT NULL,
  `created` datetime default NULL,
  `modified` datetime default NULL,
  `email` varchar(255) default NULL,
  `address_line1` varchar(45) default NULL,
  `address_line2` varchar(45) default NULL,
  `city` varchar(45) default NULL,
  `state` varchar(45) default NULL,
  `zip` varchar(45) default NULL,
  `full_name` varchar(45) default NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `login_UNIQUE` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','d42f672d33b7c2cb798eeb2b55af7869618a6fb7',1,'2010-12-20 05:32:37','2011-01-04 12:06:39','mindbot@mindynamics.com','14870 Los Gatos Bvld','','Los Gatos','CA','95032','Jonathan Silverman'),(8,'jsilver','057c4763f4c548cd5fe4f046d9241da0074cfb8b',2,'2010-12-24 18:33:20','2011-01-04 12:00:19','jsilver@mindynamics.com','14870 Los Gatos Bvld','','Los Gatos','CA','95032','Jonathan Silverman'),(9,'keyvan','057c4763f4c548cd5fe4f046d9241da0074cfb8b',3,'2010-12-24 18:33:29','2011-01-26 21:30:00','keyvan@mindynamics.com','7 Almond Tree Lane','','Irvine','CA','12345','Keyvan Fatehi');
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

-- Dump completed on 2011-02-21  3:06:13
