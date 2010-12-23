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
) ENGINE=MyISAM AUTO_INCREMENT=84 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `acos`
--

LOCK TABLES `acos` WRITE;
/*!40000 ALTER TABLE `acos` DISABLE KEYS */;
INSERT INTO `acos` VALUES (1,NULL,NULL,NULL,'controllers',1,166),(2,1,NULL,NULL,'Pages',2,21),(3,2,NULL,NULL,'welcome',3,4),(4,2,NULL,NULL,'index',5,6),(5,2,NULL,NULL,'view',7,8),(6,2,NULL,NULL,'add',9,10),(7,2,NULL,NULL,'edit',11,12),(8,2,NULL,NULL,'delete',13,14),(9,2,NULL,NULL,'build_acl',15,16),(10,1,NULL,NULL,'Users',22,41),(11,10,NULL,NULL,'index',23,24),(12,10,NULL,NULL,'view',25,26),(13,10,NULL,NULL,'add',27,28),(14,10,NULL,NULL,'edit',29,30),(15,10,NULL,NULL,'delete',31,32),(16,10,NULL,NULL,'build_acl',33,34),(17,1,NULL,NULL,'Groups',42,55),(18,17,NULL,NULL,'index',43,44),(19,17,NULL,NULL,'view',45,46),(20,17,NULL,NULL,'add',47,48),(21,17,NULL,NULL,'edit',49,50),(22,17,NULL,NULL,'delete',51,52),(23,17,NULL,NULL,'build_acl',53,54),(24,1,NULL,NULL,'Members',56,73),(25,24,NULL,NULL,'index',57,58),(26,24,NULL,NULL,'view',59,60),(27,24,NULL,NULL,'add',61,62),(28,24,NULL,NULL,'edit',63,64),(29,24,NULL,NULL,'delete',65,66),(30,24,NULL,NULL,'build_acl',67,68),(31,1,NULL,NULL,'Clients',74,95),(32,31,NULL,NULL,'index',75,76),(33,31,NULL,NULL,'view',77,78),(34,31,NULL,NULL,'add',79,80),(35,31,NULL,NULL,'edit',81,82),(36,31,NULL,NULL,'delete',83,84),(37,31,NULL,NULL,'build_acl',85,86),(38,1,NULL,NULL,'StatusMessages',96,109),(39,38,NULL,NULL,'index',97,98),(40,38,NULL,NULL,'view',99,100),(41,38,NULL,NULL,'add',101,102),(42,38,NULL,NULL,'edit',103,104),(43,38,NULL,NULL,'delete',105,106),(44,38,NULL,NULL,'build_acl',107,108),(45,1,NULL,NULL,'Projects',110,123),(46,45,NULL,NULL,'index',111,112),(47,45,NULL,NULL,'view',113,114),(48,45,NULL,NULL,'add',115,116),(49,45,NULL,NULL,'edit',117,118),(50,45,NULL,NULL,'delete',119,120),(51,45,NULL,NULL,'build_acl',121,122),(52,1,NULL,NULL,'TicketComments',124,137),(53,52,NULL,NULL,'index',125,126),(54,52,NULL,NULL,'view',127,128),(55,52,NULL,NULL,'add',129,130),(56,52,NULL,NULL,'edit',131,132),(57,52,NULL,NULL,'delete',133,134),(58,52,NULL,NULL,'build_acl',135,136),(59,1,NULL,NULL,'CommentReplies',138,151),(60,59,NULL,NULL,'index',139,140),(61,59,NULL,NULL,'view',141,142),(62,59,NULL,NULL,'add',143,144),(63,59,NULL,NULL,'edit',145,146),(64,59,NULL,NULL,'delete',147,148),(65,59,NULL,NULL,'build_acl',149,150),(66,1,NULL,NULL,'Tickets',152,165),(67,66,NULL,NULL,'index',153,154),(68,66,NULL,NULL,'view',155,156),(69,66,NULL,NULL,'add',157,158),(70,66,NULL,NULL,'edit',159,160),(71,66,NULL,NULL,'delete',161,162),(72,66,NULL,NULL,'build_acl',163,164),(73,2,NULL,NULL,'display',17,18),(74,2,NULL,NULL,'notfound',19,20),(75,10,NULL,NULL,'login',35,36),(76,10,NULL,NULL,'logout',37,38),(77,24,NULL,NULL,'member_landing',69,70),(78,10,NULL,NULL,'login_redirect',39,40),(79,31,NULL,NULL,'client_landing',87,88),(80,31,NULL,NULL,'new_ticket',89,90),(81,31,NULL,NULL,'add_ticket',91,92),(82,24,NULL,NULL,'reply_to_comment',71,72),(83,31,NULL,NULL,'add_comment',93,94);
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
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `aros`
--

LOCK TABLES `aros` WRITE;
/*!40000 ALTER TABLE `aros` DISABLE KEYS */;
INSERT INTO `aros` VALUES (1,NULL,'Group',1,NULL,1,4),(2,NULL,'Group',2,NULL,5,8),(3,NULL,'Group',3,NULL,9,12),(4,1,'User',1,NULL,2,3),(5,2,'User',2,NULL,6,7),(6,3,'User',3,NULL,10,11);
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
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `aros_acos`
--

LOCK TABLES `aros_acos` WRITE;
/*!40000 ALTER TABLE `aros_acos` DISABLE KEYS */;
INSERT INTO `aros_acos` VALUES (1,1,1,'1','1','1','1'),(5,2,77,'1','1','1','1'),(8,3,79,'1','1','1','1'),(9,3,80,'1','1','1','1'),(10,3,81,'1','1','1','1'),(11,3,83,'1','1','1','1'),(12,2,82,'1','1','1','1');
/*!40000 ALTER TABLE `aros_acos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `clients` (
  `name` varchar(45) default NULL,
  `email` varchar(45) default NULL,
  `phone` varchar(45) default NULL,
  `skype` varchar(45) default NULL,
  `company` varchar(45) default NULL,
  `link` varchar(45) default NULL,
  `id` int(11) NOT NULL auto_increment,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `fk_clients_users1` (`user_id`),
  CONSTRAINT `fk_clients_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `clients`
--

LOCK TABLES `clients` WRITE;
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
INSERT INTO `clients` VALUES ('Keyvan Fatehi','keyvan@mindynamics.com','408-647-6463','keyvan.fatehi','Mindynamics','http://mindynamics.com',1,3);
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
  `reply` text,
  `ticket_comment_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `fk_comment_replies_1` (`member_id`),
  KEY `fk_comment_replies_2` (`ticket_comment_id`),
  CONSTRAINT `fk_comment_replies_1` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_comment_replies_2` FOREIGN KEY (`ticket_comment_id`) REFERENCES `ticket_comments` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `comment_replies`
--

LOCK TABLES `comment_replies` WRITE;
/*!40000 ALTER TABLE `comment_replies` DISABLE KEYS */;
INSERT INTO `comment_replies` VALUES (1,'Well have you tried learning how to fucking code then?',1,1);
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
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `members` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(45) default NULL,
  `karma_points` varchar(45) default NULL,
  `user_rank` varchar(45) default NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  KEY `fk_members_users1` (`user_id`),
  CONSTRAINT `fk_members_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `members`
--

LOCK TABLES `members` WRITE;
/*!40000 ALTER TABLE `members` DISABLE KEYS */;
INSERT INTO `members` VALUES (1,'jsilver','0','Newbie',2);
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `members_projects`
--

LOCK TABLES `members_projects` WRITE;
/*!40000 ALTER TABLE `members_projects` DISABLE KEYS */;
INSERT INTO `members_projects` VALUES (1,1,1);
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `members_tickets`
--

LOCK TABLES `members_tickets` WRITE;
/*!40000 ALTER TABLE `members_tickets` DISABLE KEYS */;
INSERT INTO `members_tickets` VALUES (1,1,1);
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
  `member_id` int(11) NOT NULL,
  `public` binary(1) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  KEY `fk_pages_1` (`member_id`),
  CONSTRAINT `fk_pages_1` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` VALUES (1,'welcome','<style>\r\n.heading {\r\n  font-size: 72pt;\r\n  text-align: center;\r\n  font-family: sans-serif;\r\n  font-weight: bold;\r\n}\r\n.poem {\r\nborder: 4px dashed #ccc;\r\npadding: 15px;\r\nbackground: black;\r\ncolor: white;\r\n\r\n}\r\n</style>\r\n<h1 class=\"heading\">Mindynamics</h1>\r\n<div class=\"poem\">\r\n<h4>by jsilver</h4>\r\n\r\n<p>\r\n<strong><i>Mindynamics</i></strong> is strong.<br />\r\nLike valiant hero that slays dragon.<br />\r\n<strong><i>Mindynamics</i></strong> wants to slay your <span style=\"color: red\">dragon</span>.<br />\r\nLet <strong><i>Mindynamics</i></strong> slay your <span style=\"color: red\">dragon</span> today.<br />\r\nIt has a great big <span style=\"color: blue\">sword</span>.<br />\r\nTrust us.\r\n</p>\r\n</div>',1,'1'),(2,'info','Mindynamics is a hacker collective ...',1,'1'),(3,'clients','demonstrating the cms',1,'1'),(4,'jobs','demonstrating the cms',1,'1'),(6,'about','<h1>About</h1>\r\n\r\n<p>Mindynamics was born shortly after the dawn of 2010 when 2 hackishly inclined young men joined forces. It happened when one of them suddenly remembered that lesson from first grade--the one that said 2 heads are usually better than one!</p>\r\n\r\n<p>After making the suggestion to the other guy, (secretly hoping the more experienced guy would solve a code problem for him), realized these wise words were indeed true.</p>\r\n\r\n<p>Seeing the power of openness and collaboration, Mindynamics quickly became a nesting ground of good ideas and progress. If you feel like you\'d make a healthy addition to our team, or would just like to drop in and say hello, feel free to log in to our <a href=\"http://www.teamspeak.com\">teamspeak</a> server (mindynamics.com) and ping someone for talk privileges.</p>\r\n\r\n<p>If you\'re interested in our services, <a href=\"_services\">go there now</a>.</p>',1,'1');
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
  `name` varchar(45) default NULL,
  `git_remote` varchar(45) default NULL,
  `link` varchar(45) default NULL,
  `description` varchar(45) default NULL,
  `client_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `fk_projects_1` (`client_id`),
  CONSTRAINT `fk_projects_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `projects`
--

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
INSERT INTO `projects` VALUES (1,'Mindynamics.com','git@mindynamics.com:mindynamics.git','http://mindynamics.com','Mindynamics is a startup incubator.',1);
/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `status_messages`
--

DROP TABLE IF EXISTS `status_messages`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `status_messages` (
  `id` int(11) NOT NULL auto_increment,
  `message` varchar(255) default NULL,
  `project_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `fk_status_messages_1` (`project_id`),
  KEY `fk_status_messages_2` (`member_id`),
  CONSTRAINT `fk_status_messages_1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_status_messages_2` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `status_messages`
--

LOCK TABLES `status_messages` WRITE;
/*!40000 ALTER TABLE `status_messages` DISABLE KEYS */;
INSERT INTO `status_messages` VALUES (1,'SoS. SoS. This project is fubar.',1,1);
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
  `comment` text,
  `client_id` int(11) NOT NULL,
  `ticket_id` int(11) NOT NULL,
  `status` varchar(45) default NULL,
  PRIMARY KEY  (`id`),
  KEY `fk_ticket_comments_1` (`client_id`),
  KEY `fk_ticket_comments_2` (`ticket_id`),
  CONSTRAINT `fk_ticket_comments_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_ticket_comments_2` FOREIGN KEY (`ticket_id`) REFERENCES `tickets` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `ticket_comments`
--

LOCK TABLES `ticket_comments` WRITE;
/*!40000 ALTER TABLE `ticket_comments` DISABLE KEYS */;
INSERT INTO `ticket_comments` VALUES (1,'I am very displeased with the work that has been done on this ticket. Sike.',1,1,'poor');
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
  `name` varchar(45) default NULL,
  `description` text,
  `project_id` int(11) NOT NULL,
  `status` varchar(45) default NULL,
  PRIMARY KEY  (`id`),
  KEY `fk_tickets_1` (`project_id`),
  CONSTRAINT `fk_tickets_1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `tickets`
--

LOCK TABLES `tickets` WRITE;
/*!40000 ALTER TABLE `tickets` DISABLE KEYS */;
INSERT INTO `tickets` VALUES (1,'Test Ticket #1','Test Description.',1,'incomplete'),(2,'ffff','ffff',1,'fffff');
/*!40000 ALTER TABLE `tickets` ENABLE KEYS */;
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
  PRIMARY KEY  (`id`),
  UNIQUE KEY `login_UNIQUE` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','9f7beb373d6f3104f36dd47f6d82ff3a0380067a',1,'2010-12-20 05:32:37','2010-12-21 15:39:15'),(2,'jsilver','4304df8c06d116640852508849d4e86090025411',2,'2010-12-22 13:20:06','2010-12-22 13:20:06'),(3,'keyvan','d8a5e7128cd899a0b7070638d76603ec4c9a3d55',3,'2010-12-23 02:32:05','2010-12-23 02:32:05');
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

-- Dump completed on 2010-12-23 21:33:05
