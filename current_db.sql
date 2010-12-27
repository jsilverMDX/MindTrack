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
) ENGINE=MyISAM AUTO_INCREMENT=103 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acos`
--

LOCK TABLES `acos` WRITE;
/*!40000 ALTER TABLE `acos` DISABLE KEYS */;
INSERT INTO `acos` VALUES (1,NULL,NULL,NULL,'controllers',1,204),(2,1,NULL,NULL,'Pages',2,21),(3,2,NULL,NULL,'welcome',3,4),(4,2,NULL,NULL,'index',5,6),(5,2,NULL,NULL,'view',7,8),(6,2,NULL,NULL,'add',9,10),(7,2,NULL,NULL,'edit',11,12),(8,2,NULL,NULL,'delete',13,14),(9,2,NULL,NULL,'build_acl',15,16),(10,1,NULL,NULL,'Users',22,43),(11,10,NULL,NULL,'index',23,24),(12,10,NULL,NULL,'view',25,26),(13,10,NULL,NULL,'add',27,28),(14,10,NULL,NULL,'edit',29,30),(15,10,NULL,NULL,'delete',31,32),(16,10,NULL,NULL,'build_acl',33,34),(17,1,NULL,NULL,'Groups',44,57),(18,17,NULL,NULL,'index',45,46),(19,17,NULL,NULL,'view',47,48),(20,17,NULL,NULL,'add',49,50),(21,17,NULL,NULL,'edit',51,52),(22,17,NULL,NULL,'delete',53,54),(23,17,NULL,NULL,'build_acl',55,56),(24,1,NULL,NULL,'Members',58,89),(25,24,NULL,NULL,'index',59,60),(26,24,NULL,NULL,'view',61,62),(27,24,NULL,NULL,'add',63,64),(28,24,NULL,NULL,'edit',65,66),(29,24,NULL,NULL,'delete',67,68),(30,24,NULL,NULL,'build_acl',69,70),(31,1,NULL,NULL,'Clients',90,119),(32,31,NULL,NULL,'index',91,92),(33,31,NULL,NULL,'view',93,94),(34,31,NULL,NULL,'add',95,96),(35,31,NULL,NULL,'edit',97,98),(36,31,NULL,NULL,'delete',99,100),(37,31,NULL,NULL,'build_acl',101,102),(38,1,NULL,NULL,'StatusMessages',120,133),(39,38,NULL,NULL,'index',121,122),(40,38,NULL,NULL,'view',123,124),(41,38,NULL,NULL,'add',125,126),(42,38,NULL,NULL,'edit',127,128),(43,38,NULL,NULL,'delete',129,130),(44,38,NULL,NULL,'build_acl',131,132),(45,1,NULL,NULL,'Projects',134,147),(46,45,NULL,NULL,'index',135,136),(47,45,NULL,NULL,'view',137,138),(48,45,NULL,NULL,'add',139,140),(49,45,NULL,NULL,'edit',141,142),(50,45,NULL,NULL,'delete',143,144),(51,45,NULL,NULL,'build_acl',145,146),(52,1,NULL,NULL,'TicketComments',148,161),(53,52,NULL,NULL,'index',149,150),(54,52,NULL,NULL,'view',151,152),(55,52,NULL,NULL,'add',153,154),(56,52,NULL,NULL,'edit',155,156),(57,52,NULL,NULL,'delete',157,158),(58,52,NULL,NULL,'build_acl',159,160),(59,1,NULL,NULL,'CommentReplies',162,175),(60,59,NULL,NULL,'index',163,164),(61,59,NULL,NULL,'view',165,166),(62,59,NULL,NULL,'add',167,168),(63,59,NULL,NULL,'edit',169,170),(64,59,NULL,NULL,'delete',171,172),(65,59,NULL,NULL,'build_acl',173,174),(66,1,NULL,NULL,'Tickets',176,189),(67,66,NULL,NULL,'index',177,178),(68,66,NULL,NULL,'view',179,180),(69,66,NULL,NULL,'add',181,182),(70,66,NULL,NULL,'edit',183,184),(71,66,NULL,NULL,'delete',185,186),(72,66,NULL,NULL,'build_acl',187,188),(73,2,NULL,NULL,'display',17,18),(74,2,NULL,NULL,'notfound',19,20),(75,10,NULL,NULL,'login',35,36),(76,10,NULL,NULL,'logout',37,38),(77,24,NULL,NULL,'member_landing',71,72),(78,10,NULL,NULL,'login_redirect',39,40),(79,31,NULL,NULL,'client_landing',103,104),(80,31,NULL,NULL,'new_ticket',105,106),(81,31,NULL,NULL,'add_ticket',107,108),(82,24,NULL,NULL,'reply_to_comment',73,74),(83,31,NULL,NULL,'add_comment',109,110),(84,24,NULL,NULL,'post_status_message',75,76),(85,10,NULL,NULL,'admin_landing',41,42),(86,31,NULL,NULL,'edit_my_project',111,112),(87,24,NULL,NULL,'post_comment',77,78),(88,31,NULL,NULL,'post_status_message',113,114),(89,31,NULL,NULL,'reply_to_comment',115,116),(90,1,NULL,NULL,'Images',190,203),(91,90,NULL,NULL,'index',191,192),(92,90,NULL,NULL,'view',193,194),(93,90,NULL,NULL,'add',195,196),(94,90,NULL,NULL,'edit',197,198),(95,90,NULL,NULL,'delete',199,200),(96,90,NULL,NULL,'build_acl',201,202),(97,31,NULL,NULL,'add_file_to_ticket',117,118),(98,24,NULL,NULL,'add_file_to_ticket',79,80),(99,24,NULL,NULL,'add_comment',81,82),(100,24,NULL,NULL,'mark_as_done',83,84),(101,24,NULL,NULL,'done_tickets',85,86),(102,24,NULL,NULL,'mark_as_not_done',87,88);
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
INSERT INTO `aros` VALUES (1,NULL,'Group',1,NULL,1,4),(2,NULL,'Group',2,NULL,5,8),(3,NULL,'Group',3,NULL,9,12),(4,1,'User',1,NULL,2,3),(10,2,'User',8,NULL,6,7),(11,3,'User',9,NULL,10,11);
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
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aros_acos`
--

LOCK TABLES `aros_acos` WRITE;
/*!40000 ALTER TABLE `aros_acos` DISABLE KEYS */;
INSERT INTO `aros_acos` VALUES (1,1,1,'1','1','1','1'),(5,2,77,'1','1','1','1'),(8,3,79,'1','1','1','1'),(9,3,80,'1','1','1','1'),(10,3,81,'1','1','1','1'),(11,3,83,'1','1','1','1'),(12,2,82,'1','1','1','1'),(13,2,84,'1','1','1','1'),(14,3,86,'1','1','1','1'),(15,2,83,'1','1','1','1'),(20,3,87,'1','1','1','1'),(19,3,88,'1','1','1','1'),(21,3,89,'1','1','1','1'),(22,3,97,'1','1','1','1'),(23,2,98,'1','1','1','1'),(24,2,99,'1','1','1','1'),(25,2,100,'1','1','1','1'),(26,2,101,'1','1','1','1'),(27,2,102,'1','1','1','1');
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
INSERT INTO `clients` VALUES ('Keyvan Fatehi','keyvan@mindynamics.com','7277539826','jsilverman2','Mindynamics','http://mindynamics.com',3,9);
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comment_replies`
--

LOCK TABLES `comment_replies` WRITE;
/*!40000 ALTER TABLE `comment_replies` DISABLE KEYS */;
INSERT INTO `comment_replies` VALUES (1,'not good\r\n',13,8);
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
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `s3_url` varchar(120) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `u_id` (`user_id`),
  KEY `fk_Image_1` (`user_id`),
  CONSTRAINT `fk_Image_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` VALUES (10,'/mindynamics.com/0806240001293263690.jpg',8,'hdr-logo.jpg');
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images_tickets`
--

DROP TABLE IF EXISTS `images_tickets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images_tickets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ticket_id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`image_id`,`ticket_id`),
  KEY `ticket_id` (`ticket_id`),
  KEY `image_id` (`image_id`),
  KEY `fk_tickets_images_1` (`ticket_id`),
  KEY `fk_tickets_images_2` (`image_id`),
  CONSTRAINT `fk_tickets_images_1` FOREIGN KEY (`ticket_id`) REFERENCES `tickets` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tickets_images_2` FOREIGN KEY (`image_id`) REFERENCES `images` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images_tickets`
--

LOCK TABLES `images_tickets` WRITE;
/*!40000 ALTER TABLE `images_tickets` DISABLE KEYS */;
INSERT INTO `images_tickets` VALUES (2,7,10);
/*!40000 ALTER TABLE `images_tickets` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `members_projects`
--

LOCK TABLES `members_projects` WRITE;
/*!40000 ALTER TABLE `members_projects` DISABLE KEYS */;
INSERT INTO `members_projects` VALUES (8,3,3);
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
INSERT INTO `pages` VALUES (1,'welcome','<h1>So what exactly is Mindynamics?</h1>\r\n<strong>by jsilver</strong>\r\n\r\n<p>This seems to be the most widely asked question of us right now. WTF is Mindynamics?!</p>\r\n\r\n<p>Well, plainly, it\'s our startup incubator. You let us play with your project for a bit and we put our blood, sweat and hard work into realizing it\'s full potential.</p>\r\n\r\n<p>Not only that, we are an open source collaboration group. We constantly seek ways in which we can give back to the community, the Internet community, the fabric from which we grew.</p>\r\n\r\n<p>Mindynamics is many things to us and other people. It grew from late night talks about what we thought OUR style was, our PASSION, our love for things hacking. It is a way for us to express ourselves to the world while providing an invaluable service.</p>\r\n\r\n<p>But really we believe that the client is doing a service to us, trusting us with their code and their time, and providing us with a means to make a living doing what we love. And that\'s why we started Mindynamics.</p>\r\n\r\n',1,'1'),(2,'services','<style>\r\n.support-list {\r\n  list-style-type: regular;\r\n  padding-bottom: 20px;\r\n}\r\n</style>\r\n\r\n<h1>We support:</h1>\r\n\r\n<ul class=\"support-list\">\r\n<li>Linux</li>\r\n<li><a href=\"http://apache.org\">Apache</a></li>\r\n<li><a href=\"http://mysql.com\">MySQL</a></li>\r\n<li><a href=\"http://php.net\">PHP</a></li>\r\n<li><a href=\"http://ruby-lang.org\">Ruby</a> (all versions)</li>\r\n<li><a href=\"http://rubyonrails.org\">Ruby on Rails</a> (RoR, all versions)</li>\r\n<li><a href=\"http://cakephp.org\">CakePHP</a> (1.3)</li>\r\n<li><a href=\"http://phusionpassenger.com\">Phusion</a> Passenger, REE</li>\r\n<li><a href=\"http://w3.org\">HTML+CSS</a> (layouts, designs, templates, PSD2HTML)</li>\r\n<li><a href=\"http://nodejs.com\">NodeJS</a></li>\r\n<li><a href=\"http://jquery.com\">JQuery</a></li>\r\n<li><a href=\"http://prototypejs.org\">Prototype</a></li>\r\n<li><a href=\"http://stackoverflow.com/questions/459647/rails-what-is-rjs\">RJS</a></li>\r\n<li><a href=\"http://jashkenas.github.com/coffee-script/\">CoffeeScript</a></li>\r\n<li>JavaScript</li>\r\n</ul>\r\n\r\n<div class=\"method\">\r\nWe use all POSIX compliant systems to write all of our code, meaning Mac and Linux. We do MVC-based semi-agile local development. We use Git to merge our code. We have a very open philsophy about our business and we actively seek really great collaboration tools, which is what brought us to having some parts of our style. We are also currently working on ways of relearning that information back to the community that helped us develop these methods.\r\n</div>',1,'1'),(3,'clients','<div style=\"font-size:18pt;\">\r\nNeed help with an app or project?\r\n<br /><br />\r\nGot deadlines?\r\n<br /><br />\r\nWe\'re here to help.\r\n<br /><br />\r\nInfact, it\'s our job!\r\n<br /><br />\r\nEmail jsilver if you think it\'s right.\r\n<br /><br />\r\n<a href=\'mailto&#58;%6A&#115;&#105;lve&#114;&#64;&#109;i%6Edy%&#54;Eam&#105;&#37;&#54;3&#115;&#46;%6&#51;&#111;&#37;6D\'>jsilv&#101;r&#64;m&#105;&#110;dyn&#97;mics&#46;c&#111;m</a>\r\n</div>',1,'1'),(4,'jobs','<div style=\"font-family: monospace\">\r\nAre you really a coding prodigy?\r\n<br /><br />\r\nDid they turn you down in a lame interview? Did they even ask you non-coding related questions?\r\n<br /><br />\r\nBut secretly, nobody can beat you at chess?\r\n<br /><br />\r\nWe understand.\r\n<br /><br />\r\nHelp us provide the best web development services in the world?\r\n<br /><br />\r\n<a href=\'&#109;&#97;ilto&#58;j%&#54;F%69n%&#52;0min&#100;%79n&#97;mic&#115;&#46;&#99;o&#37;&#54;&#68;\'>j&#111;in&#64;mind&#121;namics&#46;com</a>\r\n</div>',1,'1'),(6,'mindynamics','<h1>our story</h1>\r\n\r\n<p>Mindynamics was born shortly after the beginning of 2010 when keyvan and jsilver joined forces because they knew that they would make a great team. And we think that we have been very correct!</p>\r\n\r\n<p>After working together for some time, we found out that we actually did work very well together and we have grown our skills an amazing amount.</p>\r\n\r\n<p>And we have been able to grow the team a couple members as well, and to start sharing our knowledge with these new members, which has been an amazing experience, teaching.</p>\r\n\r\n<p>Mindynamics is our dreamchild prodigy based on how we roll: webcollaboration.</p>',1,'1'),(7,'platform','<h1>MDX Platform</h1>\r\n<p>Mindynamics.com is a custom project management tool.</p>\r\n<p>It contains a built in ticket tracker written from scratch for tracking progress every step of the way.</p>\r\n<p>If you\'re a client, we\'ll give you a login to this system so that you can interact with us.</p>\r\n<p>Access to the system is not available to the general public at this time. Feel free to contact us if you\'d like to learn more. :)</p>',1,'1');
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
INSERT INTO `projects` VALUES (3,'Mindynamics','git@mindynamics.com:mindynamics.git','http://mindynamics.com','Mindynamics Project',9);
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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ticket_comments`
--

LOCK TABLES `ticket_comments` WRITE;
/*!40000 ALTER TABLE `ticket_comments` DISABLE KEYS */;
INSERT INTO `ticket_comments` VALUES (12,'lol',8,7,'lol'),(13,'status?',8,7,'');
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tickets`
--

LOCK TABLES `tickets` WRITE;
/*!40000 ALTER TABLE `tickets` DISABLE KEYS */;
INSERT INTO `tickets` VALUES (7,'Add Ability to Upload Files','Okay, seriously guys.',3,'done',9);
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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','9f7beb373d6f3104f36dd47f6d82ff3a0380067a',1,'2010-12-20 05:32:37','2010-12-21 15:39:15'),(8,'jsilver','4304df8c06d116640852508849d4e86090025411',2,'2010-12-24 18:33:20','2010-12-24 18:33:20'),(9,'keyvan','d8a5e7128cd899a0b7070638d76603ec4c9a3d55',3,'2010-12-24 18:33:29','2010-12-24 23:03:42');
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

-- Dump completed on 2010-12-27 15:55:15
