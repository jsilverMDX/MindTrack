-- MySQL dump 10.13  Distrib 5.1.37, for debian-linux-gnu (i486)
--
-- Host: localhost    Database: mindynamics
-- ------------------------------------------------------
-- Server version	5.1.37-1ubuntu5.4

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
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=90 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acos`
--

LOCK TABLES `acos` WRITE;
/*!40000 ALTER TABLE `acos` DISABLE KEYS */;
INSERT INTO `acos` VALUES (1,NULL,NULL,NULL,'controllers',1,178),(2,1,NULL,NULL,'Pages',2,21),(3,2,NULL,NULL,'welcome',3,4),(4,2,NULL,NULL,'index',5,6),(5,2,NULL,NULL,'view',7,8),(6,2,NULL,NULL,'add',9,10),(7,2,NULL,NULL,'edit',11,12),(8,2,NULL,NULL,'delete',13,14),(9,2,NULL,NULL,'build_acl',15,16),(10,1,NULL,NULL,'Users',22,43),(11,10,NULL,NULL,'index',23,24),(12,10,NULL,NULL,'view',25,26),(13,10,NULL,NULL,'add',27,28),(14,10,NULL,NULL,'edit',29,30),(15,10,NULL,NULL,'delete',31,32),(16,10,NULL,NULL,'build_acl',33,34),(17,1,NULL,NULL,'Groups',44,57),(18,17,NULL,NULL,'index',45,46),(19,17,NULL,NULL,'view',47,48),(20,17,NULL,NULL,'add',49,50),(21,17,NULL,NULL,'edit',51,52),(22,17,NULL,NULL,'delete',53,54),(23,17,NULL,NULL,'build_acl',55,56),(24,1,NULL,NULL,'Members',58,79),(25,24,NULL,NULL,'index',59,60),(26,24,NULL,NULL,'view',61,62),(27,24,NULL,NULL,'add',63,64),(28,24,NULL,NULL,'edit',65,66),(29,24,NULL,NULL,'delete',67,68),(30,24,NULL,NULL,'build_acl',69,70),(31,1,NULL,NULL,'Clients',80,107),(32,31,NULL,NULL,'index',81,82),(33,31,NULL,NULL,'view',83,84),(34,31,NULL,NULL,'add',85,86),(35,31,NULL,NULL,'edit',87,88),(36,31,NULL,NULL,'delete',89,90),(37,31,NULL,NULL,'build_acl',91,92),(38,1,NULL,NULL,'StatusMessages',108,121),(39,38,NULL,NULL,'index',109,110),(40,38,NULL,NULL,'view',111,112),(41,38,NULL,NULL,'add',113,114),(42,38,NULL,NULL,'edit',115,116),(43,38,NULL,NULL,'delete',117,118),(44,38,NULL,NULL,'build_acl',119,120),(45,1,NULL,NULL,'Projects',122,135),(46,45,NULL,NULL,'index',123,124),(47,45,NULL,NULL,'view',125,126),(48,45,NULL,NULL,'add',127,128),(49,45,NULL,NULL,'edit',129,130),(50,45,NULL,NULL,'delete',131,132),(51,45,NULL,NULL,'build_acl',133,134),(52,1,NULL,NULL,'TicketComments',136,149),(53,52,NULL,NULL,'index',137,138),(54,52,NULL,NULL,'view',139,140),(55,52,NULL,NULL,'add',141,142),(56,52,NULL,NULL,'edit',143,144),(57,52,NULL,NULL,'delete',145,146),(58,52,NULL,NULL,'build_acl',147,148),(59,1,NULL,NULL,'CommentReplies',150,163),(60,59,NULL,NULL,'index',151,152),(61,59,NULL,NULL,'view',153,154),(62,59,NULL,NULL,'add',155,156),(63,59,NULL,NULL,'edit',157,158),(64,59,NULL,NULL,'delete',159,160),(65,59,NULL,NULL,'build_acl',161,162),(66,1,NULL,NULL,'Tickets',164,177),(67,66,NULL,NULL,'index',165,166),(68,66,NULL,NULL,'view',167,168),(69,66,NULL,NULL,'add',169,170),(70,66,NULL,NULL,'edit',171,172),(71,66,NULL,NULL,'delete',173,174),(72,66,NULL,NULL,'build_acl',175,176),(73,2,NULL,NULL,'display',17,18),(74,2,NULL,NULL,'notfound',19,20),(75,10,NULL,NULL,'login',35,36),(76,10,NULL,NULL,'logout',37,38),(77,24,NULL,NULL,'member_landing',71,72),(78,10,NULL,NULL,'login_redirect',39,40),(79,31,NULL,NULL,'client_landing',93,94),(80,31,NULL,NULL,'new_ticket',95,96),(81,31,NULL,NULL,'add_ticket',97,98),(82,24,NULL,NULL,'reply_to_comment',73,74),(83,31,NULL,NULL,'add_comment',99,100),(84,24,NULL,NULL,'post_status_message',75,76),(85,10,NULL,NULL,'admin_landing',41,42),(86,31,NULL,NULL,'edit_my_project',101,102),(87,24,NULL,NULL,'post_comment',77,78),(88,31,NULL,NULL,'post_status_message',103,104),(89,31,NULL,NULL,'reply_to_comment',105,106);
/*!40000 ALTER TABLE `acos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aros`
--

DROP TABLE IF EXISTS `aros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aros` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aros`
--

LOCK TABLES `aros` WRITE;
/*!40000 ALTER TABLE `aros` DISABLE KEYS */;
INSERT INTO `aros` VALUES (1,NULL,'Group',1,NULL,1,4),(2,NULL,'Group',2,NULL,5,12),(3,NULL,'Group',3,NULL,13,16),(4,1,'User',1,NULL,2,3),(10,2,'User',8,NULL,6,7),(11,2,'User',9,NULL,8,9),(12,2,'User',10,NULL,10,11),(13,3,'User',11,NULL,14,15);
/*!40000 ALTER TABLE `aros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aros_acos`
--

DROP TABLE IF EXISTS `aros_acos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aros_acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ARO_ACO_KEY` (`aro_id`,`aco_id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aros_acos`
--

LOCK TABLES `aros_acos` WRITE;
/*!40000 ALTER TABLE `aros_acos` DISABLE KEYS */;
INSERT INTO `aros_acos` VALUES (1,1,1,'1','1','1','1'),(5,2,77,'1','1','1','1'),(8,3,79,'1','1','1','1'),(9,3,80,'1','1','1','1'),(10,3,81,'1','1','1','1'),(11,3,83,'1','1','1','1'),(12,2,82,'1','1','1','1'),(13,2,84,'1','1','1','1'),(14,3,86,'1','1','1','1'),(15,2,83,'1','1','1','1'),(20,3,87,'1','1','1','1'),(19,3,88,'1','1','1','1'),(21,3,89,'1','1','1','1');
/*!40000 ALTER TABLE `aros_acos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clients` (
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `phone` varchar(45) NOT NULL,
  `skype` varchar(45) DEFAULT NULL,
  `company` varchar(45) NOT NULL,
  `link` varchar(45) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_clients_users1` (`user_id`),
  CONSTRAINT `fk_clients_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clients`
--

LOCK TABLES `clients` WRITE;
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
INSERT INTO `clients` VALUES ('Jonathan Silverman','jsilver@mindynamics.com','408-647-6463','jsilverman2','Mindynamics','http://mindynamics.com',3,8);
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comment_replies`
--

DROP TABLE IF EXISTS `comment_replies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comment_replies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reply` text NOT NULL,
  `ticket_comment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_comment_replies_2` (`ticket_comment_id`),
  KEY `fk_comment_replies_1` (`user_id`),
  CONSTRAINT `fk_comment_replies_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_comment_replies_2` FOREIGN KEY (`ticket_comment_id`) REFERENCES `ticket_comments` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comment_replies`
--

LOCK TABLES `comment_replies` WRITE;
/*!40000 ALTER TABLE `comment_replies` DISABLE KEYS */;
/*!40000 ALTER TABLE `comment_replies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

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
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `karma_points` varchar(45) NOT NULL,
  `user_rank` varchar(45) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  KEY `fk_members_users1` (`user_id`),
  CONSTRAINT `fk_members_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `members`
--

LOCK TABLES `members` WRITE;
/*!40000 ALTER TABLE `members` DISABLE KEYS */;
INSERT INTO `members` VALUES (3,'jsilver','1000','ninja master',8);
/*!40000 ALTER TABLE `members` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `members_projects`
--

DROP TABLE IF EXISTS `members_projects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `members_projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`member_id`,`project_id`),
  KEY `fk_members_projects_members1` (`member_id`),
  KEY `fk_members_projects_projects1` (`project_id`),
  CONSTRAINT `fk_members_projects_members1` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_members_projects_projects1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `members_projects`
--

LOCK TABLES `members_projects` WRITE;
/*!40000 ALTER TABLE `members_projects` DISABLE KEYS */;
INSERT INTO `members_projects` VALUES (7,3,3);
/*!40000 ALTER TABLE `members_projects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `members_tickets`
--

DROP TABLE IF EXISTS `members_tickets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `members_tickets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `ticket_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`member_id`,`ticket_id`),
  KEY `fk_members_tickets_members1` (`member_id`),
  KEY `fk_members_tickets_tickets1` (`ticket_id`),
  CONSTRAINT `fk_members_tickets_members1` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_members_tickets_tickets1` FOREIGN KEY (`ticket_id`) REFERENCES `tickets` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

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
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `page` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `public` binary(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  KEY `fk_pages_1` (`user_id`),
  CONSTRAINT `fk_pages_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` VALUES (1,'welcome','Hi!\r\n<br /><br />\r\nWe\'re Mindynamics!\r\n<br /><br />\r\nWe\'re a talented and motivated group of like-minded individuals with the skills necessary to launch and execute your project successfully.\r\n<br /><br />\r\nWe do: web development, SEO, online marketing, design, administration, training and more!\r\n<br /><br />\r\nThis is our homepage, our portal to you.\r\n<br /><br />\r\nStay tuned for more info.\r\n<br /><br />\r\n<br /><br />\r\n-jsilver',1,'1'),(2,'info','We are a group of specialized *nix friendly programmers. We are familiar with Linux, Apache, MySQL, PHP and Ruby stacks. We have experience doing advanced deployments and advanced Git experience. Actually, it\'s a centerpiece of our ability to collaborate because of the way that it automatically merges files for us. We have a lot of consulting experience helping clients meet their specifications reasonably and without breaking the bank. We aim to be highly available and provide the best talent for your project. We are veteran developers with a skillset including LAMP, Ruby on Rails, node.JS, heroku and other technologies.',1,'1'),(3,'clients','<div style=\"font-size:18pt;\">\r\nNeed help with an app or project?\r\n<br /><br />\r\nGot deadlines?\r\n<br /><br />\r\nWe\'re here to help.\r\n<br /><br />\r\nInfact, it\'s our job!\r\n<br /><br />\r\nIf you think that you are <strike>a</strike> <!-- this type doesnt look so good when you\'re speakin of worthiness :P --> worthy of being a client and that our little firm might be a fit, email jsilver.\r\n<br /><br />\r\n<a href=\'mailto&#58;%6A&#115;&#105;lve&#114;&#64;&#109;i%6Edy%&#54;Eam&#105;&#37;&#54;3&#115;&#46;%6&#51;&#111;&#37;6D\'>jsilv&#101;r&#64;m&#105;&#110;dyn&#97;mics&#46;c&#111;m</a>\r\n</div>',1,'1'),(4,'jobs','<div style=\"font-family: monospace\">\r\nAre you really a coding prodigy?\r\n<br /><br />\r\nDid Facebook turn you down in a lame interview? Did Google ask you non-coding related questions?\r\n<br /><br />\r\nBut secretly, nobody can beat you at chess?\r\n<br /><br />\r\nWe understand.\r\n<br /><br />\r\nHelp us provide the best web development services in the world?\r\n<br /><br />\r\n<a href=\'&#109;&#97;ilto&#58;j%&#54;F%69n%&#52;0min&#100;%79n&#97;mic&#115;&#46;&#99;o&#37;&#54;&#68;\'>j&#111;in&#64;mind&#121;namics&#46;com</a>\r\n</div>',1,'1'),(6,'our story','<h1>say whaaat!?</h1>\r\n\r\n<p>Mindynamics was born shortly after the dawn of 2010 when 2 hackishly inclined young men joined forces. It happened when one of them suddenly remembered that lesson from first grade--the one that said 2 heads are usually better than one!</p>\r\n\r\n<p>After making the suggestion to the other guy, (secretly hoping the more experienced guy would solve a code problem for him), he quickly realised that these wise words were indeed true.</p>\r\n\r\n<p>Seeing the power of openness and collaboration, Mindynamics quickly became a nesting ground of good ideas and progress. If you feel like you\'d make a healthy addition to our team, or would just like to drop in and say hello, feel free to log in to our <a href=\"http://www.teamspeak.com\">teamspeak</a> server (mindynamics.com) and ping someone for talk privileges.</p>\r\n\r\n<p>If you\'re interested in our services, <a href=\"_services\">go there now</a>.</p>',1,'1'),(7,'platform','<style>\r\n .quote {\r\n		\r\n		background-image:url(\'http://www.keyvanfatehi.com/mdx/quotebg.png\');\r\n		border:2px solid #000;\r\n		-webkit-border-radius:15px;\r\n		-moz-border-radius:15px;\r\n		border-radius:15px;\r\n		margin:25px 15px;\r\n		padding:10px 10px;\r\n		font-size: 1.2em;\r\n  }\r\n	.quote em {\r\n		font-size: 0.8em;\r\n	}\r\n</style>\r\n\r\n<h1>About the MDX Platform</h1>\r\n<p>Mindynamics.com is not just your run of the mill \"who we are and what we offer\" website.</p>\r\n<p>It is a complete platform written from scratch for managing every aspect of your project.</p>\r\n<p>Once you\'re a client, you\'ll receive a login through which you can access this system and interact with mindynamics employees.</p>\r\n<p>Sorry, the platform is unavailable to outsiders at this time. Feel free to contact us if you\'d like to learn more about it.</p>\r\n<a href=\"login\">Click here to login</a>\r\n\r\n<div class=\"quote\">\r\n	<p>Mindynamics.com is a super mega project that actually contains a spaceship, a spaceship bunker, a secret government installation and a police department. When properly activated, Mindynamics.com will transform into a pony and gallop into the virtual dust wind.</p>\r\n	<em>~ these words do not originate from a celestial body, explainable by physics, but of a magical elephant explainable by null but null</em>\r\n</div>\r\n',1,'1'),(8,'services','This page needs to be filled.',1,'\0');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(140) NOT NULL,
  `git_remote` varchar(45) NOT NULL,
  `link` varchar(140) NOT NULL,
  `description` text NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_projects_1` (`user_id`),
  CONSTRAINT `fk_projects_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projects`
--

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
INSERT INTO `projects` VALUES (3,'Mindynamics','git@mindynamics.com:mindynamics.git','http://mindynamics.com','Mindynamics Project',11);
/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `status_messages`
--

DROP TABLE IF EXISTS `status_messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `status_messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message` varchar(255) NOT NULL,
  `project_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_status_messages_1` (`project_id`),
  KEY `fk_status_messages_2` (`user_id`),
  CONSTRAINT `fk_status_messages_1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_status_messages_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `status_messages`
--

LOCK TABLES `status_messages` WRITE;
/*!40000 ALTER TABLE `status_messages` DISABLE KEYS */;
INSERT INTO `status_messages` VALUES (7,'just started the project!',3,8);
/*!40000 ALTER TABLE `status_messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ticket_comments`
--

DROP TABLE IF EXISTS `ticket_comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ticket_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `ticket_id` int(11) NOT NULL,
  `status` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_ticket_comments_2` (`ticket_id`),
  KEY `fk_ticket_comments_1` (`user_id`),
  CONSTRAINT `fk_ticket_comments_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_ticket_comments_2` FOREIGN KEY (`ticket_id`) REFERENCES `tickets` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ticket_comments`
--

LOCK TABLES `ticket_comments` WRITE;
/*!40000 ALTER TABLE `ticket_comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `ticket_comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tickets`
--

DROP TABLE IF EXISTS `tickets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tickets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(140) NOT NULL,
  `description` text NOT NULL,
  `project_id` int(11) NOT NULL,
  `status` varchar(45) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_tickets_1` (`project_id`),
  KEY `fk_tickets_2` (`user_id`),
  CONSTRAINT `fk_tickets_1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_tickets_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tickets`
--

LOCK TABLES `tickets` WRITE;
/*!40000 ALTER TABLE `tickets` DISABLE KEYS */;
INSERT INTO `tickets` VALUES (6,'Somethings Broken','Someone needs to fix it',3,'Now',11);
/*!40000 ALTER TABLE `tickets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(40) NOT NULL,
  `group_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `login_UNIQUE` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','9f7beb373d6f3104f36dd47f6d82ff3a0380067a',1,'2010-12-20 05:32:37','2010-12-21 15:39:15'),(8,'jsilver','4304df8c06d116640852508849d4e86090025411',2,'2010-12-24 18:33:20','2010-12-24 18:33:20'),(9,'keyvan','d8a5e7128cd899a0b7070638d76603ec4c9a3d55',2,'2010-12-24 18:33:29','2010-12-24 18:33:29'),(10,'jacob','0acda1946f03348c5c8c5391f490bb52bb5a4fbc',2,'2010-12-24 18:33:38','2010-12-24 18:33:38'),(11,'kris','dbcb3df04e1158e3014e70b97cc28cecea71ed3d',3,'2010-12-24 18:33:47','2010-12-24 18:33:47');
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

-- Dump completed on 2010-12-24 20:51:37
