# Sequel Pro dump
# Version 2492
# http://code.google.com/p/sequel-pro
#
# Host: localhost (MySQL 5.1.45-log)
# Database: mindynamics
# Generation Time: 2011-02-11 17:54:07 -0800
# ************************************************************

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table pages
# ------------------------------------------------------------

DROP TABLE IF EXISTS `pages`;

CREATE TABLE `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `page` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `public` binary(1) NOT NULL DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  KEY `fk_pages_1` (`user_id`),
  CONSTRAINT `fk_pages_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` (`id`,`name`,`page`,`user_id`,`public`,`created`,`updated`)
VALUES
	(1,'splash','	<div class=\"prelist\">\r\n	What can we do? Well, for starters...\r\n</div>\r\n\r\n	<div id=\"services\">\r\n		<ul class=\"serviceslist\">\r\n		<li><div id=\"graph\"></div>realize your app\'s full <b>potential</b></li>\r\n		<hr class=\"hrfade\">\r\n		<li><div id=\"flag\"></div><b>complete</b> your app to spec</li>\r\n		<hr class=\"hrfade\">\r\n		<li><div id=\"bandaid\"></div><b>fix and modify</b> your existing code</li>\r\n		<hr class=\"hrfade\">\r\n		<li><div id=\"barcode\"></div>turn your project into a <b>product</b></li>\r\n		<hr class=\"hrfade\">\r\n		<li><div id=\"help\"></div>provide <b>help and answers</b></li>\r\n		</ul>\r\n	</div>\r\n	',1,X'30','2010-12-29 14:16:08','2011-02-10 05:24:21'),
	(3,'clients','<div style=\"font-size:18pt;\">\r\nYou have a project.\r\n<br /><br />\r\nYou have a deadline.\r\n<br /><br />\r\nWe\'re a team of highly skilled code ninjas.\r\n<br /><br />\r\nLet us help you exceed your spec. and beat the deadline.\r\n<br /><br />\r\n<a href=\'mailto&#58;%6A&#115;&#105;lve&#114;&#64;&#109;i%6Edy%&#54;Eam&#105;&#37;&#54;3&#115;&#46;%6&#51;&#111;&#37;6D\'>jsilv&#101;r&#64;m&#105;&#110;dyn&#97;mics&#46;c&#111;m</a>\r\n</div>',1,X'30','2010-12-29 14:16:08','2011-01-17 03:54:36'),
	(4,'jobs','<div style=\"font-family: monospace\">\r\nAre you really a coding prodigy?\r\n<br /><br />\r\nDid they turn you down in a lame interview? Did they even ask you non-coding related questions?\r\n<br /><br />\r\nBut secretly, nobody can beat you at chess?\r\n<br /><br />\r\nWe understand.\r\n<br /><br />\r\nHelp us provide the best web development services in the world?\r\n<br /><br />\r\n<a href=\'&#109;&#97;ilto&#58;j%&#54;F%69n%&#52;0min&#100;%79n&#97;mic&#115;&#46;&#99;o&#37;&#54;&#68;\'>j&#111;in&#64;mind&#121;namics&#46;com</a>\r\n</div>',1,X'30','2010-12-29 14:16:08','2011-01-16 00:37:26'),
	(6,'mindynamics','<h1>our story</h1>\r\n\r\n<p>Mindynamics was born shortly after the beginning of 2010 when keyvan and jsilver joined forces because they knew that they would make a great team. And we think that we have been very correct!</p>\r\n\r\n<p>After working together for some time, we found out that we actually did work very well together and we have grown our skills an amazing amount.</p>\r\n\r\n<p>And we have been able to grow the team a couple members as well, and to start sharing our knowledge with these new members, which has been an amazing experience, teaching.</p>\r\n\r\n<p>Mindynamics is our dreamchild prodigy based on how we roll: webcollaboration.</p>',1,X'30','2010-12-29 14:16:08','2011-01-16 00:37:31'),
	(7,'platform','<h1>MDX Platform</h1>\r\n<p>Mindynamics.com is a custom project management tool.</p>\r\n<p>It contains a built in ticket tracker written from scratch for tracking progress every step of the way.</p>\r\n<p>If you\'re a client, we\'ll give you a login to this system so that you can interact with us.</p>\r\n<p>Access to the system is not available to the general public at this time. Feel free to contact us if you\'d like to learn more. :)</p>',1,X'30','2010-12-29 14:16:08','2011-01-16 00:37:37'),
	(8,'incubation','Our team will take a genuine interest in what it is you\'re trying to accomplish with your application and help you to realize that potential.<br><br>\r\n\r\nIf you\'ve already got an app, but it just needs some fixing, we will read the code and complete the specs.<br><br>\r\n\r\nIf you just have an idea and need our help to fill in the gaps of what to do next, we are here to help.<br><br>\r\n\r\nWe\'ve gained an exorbitant amount of knowledge and acquired a vast skill-set in our careers, and know how to put it to good use in helping you do your project today.\r\n<br><br>\r\nWe\'ve helped clients go from a business idea into a robust web application deployed on VPS and the cloud--complete with billing systems and CMS. <br>Our code services have what it takes to make your project into product.<br>\r\n',1,X'31','2011-01-16 00:49:33','2011-02-10 05:38:10'),
	(9,'training','We Mindynamics value knowledge and information, and the spread of these two things.<br><br>\r\n\r\nOur members must acquire the skills to survive (by mastering) any obstacle--as a collaborative agency, we do this together. As a result, we feel we have have witnessed and learned the art of teaching and spreading knowledge and information.<br><br>\r\n\r\nThose that have experienced this style of development will know that it is not as important that you have some piece of information, but that you are able to acquire this information and use it effectively.<br><br>\r\n\r\nAnyone can learn to harness and mold the web the way we do. For more info about training: <a href=\'mailto&#58;%6A&#115;&#105;lve&#114;&#64;&#109;i%6Edy%&#54;Eam&#105;&#37;&#54;3&#115;&#46;%6&#51;&#111;&#37;6D\'>jsilv&#101;r&#64;m&#105;&#110;dyn&#97;mics&#46;c&#111;m</a>',1,X'31','2011-01-16 01:00:10','2011-02-10 05:38:49'),
	(10,'Services_old','<style>\r\n.support-list {\r\n  list-style-type:square;\r\n}\r\n</style>\r\n\r\n<h1>We support:</h1>\r\n\r\n<ul class=\"support-list\">\r\n<li>Linux configuration, administration and auditing</li>\r\n<li>Databases</li>\r\n<li>PHP / CakePHP, Wordpress, Drupal</li>\r\n<li>Ruby / Ruby on Rails / RJS</li>\r\n<li>Deployment Services (LAMP, Passenger, REE, etc)</li>\r\n<li>General Web Code Services (HTML, CSS, Javascript, jQuery, Prototype)</li>\r\n<li>Experimental (GAE, NodeJS, Coffeescript, Javascript)</li>\r\n</ul>\r\n\r\nWe can handle such projects with 0 downtime as we are working with these technologies on a daily basis, however we may be interested in projects that use other technologies not listed here as well.<br><br>\r\n\r\nWe understand that your need is likely to be an amalgam of the above technologies. We do not list rates on our website, but you may get in contact with us via live chat or by emailing jsilver [at] mindynamics [dot] com\r\n',1,X'30','2011-01-16 01:12:20','2011-02-03 20:19:09'),
	(11,'portfolio','<script type=\"text/javascript\" src=\"/js/jquery.lightbox-0.5.min.js\"></script>\r\n<link rel=\"stylesheet\" type=\"text/css\" href=\"/css/jquery.lightbox-0.5.css\" media=\"screen\" />\r\n<style>\r\n#portfolio-entries {\r\n  padding-left:50px;\r\n}\r\n#portfolio-entries li img {\r\n  width:200px;\r\n  height:auto;\r\n}\r\n#portfolio-entries li {\r\n  width:45%;\r\n  float:left;\r\n  text-align:center;\r\n  padding:15px;\r\n}\r\n</style>\r\n\r\n<script type=\"text/javascript\">\r\n$(function() {\r\n	// Use this example, or...\r\n	$(\'#portfolio-entries li .thumb\').lightBox();\r\n});\r\n</script>\r\n\r\n<ul id=\"portfolio-entries\">\r\n  <li>\r\n    <a href=\"http://www.sponsorpitch.com\">SponsorPitch</a><br>\r\n    <a class=\"thumb\" href=\"/img/sitecaps/sponsorpitch.png\"><img src=\"/img/sitecaps/sponsorpitch-thumb.png\"/></a>\r\n  </li>\r\n\r\n  <li>\r\n    <a href=\"http://www.weddingfutures.com\">Wedding Futures</a><br>\r\n    <a class=\"thumb\" href=\"/img/sitecaps/weddingfutures.png\"><img src=\"/img/sitecaps/weddingfutures-thumb.png\"/></a>\r\n  </li>\r\n\r\n  <li>\r\n    <a href=\"http://www.latinpulsemusic.com\">Latin Pulse Music</a><br>\r\n    <a class=\"thumb\" href=\"/img/sitecaps/latinpulsemusic.png\"><img src=\"/img/sitecaps/latinpulsemusic-thumb.png\"/></a>\r\n  </li>\r\n\r\n  <li>\r\n    <a href=\"http://www.latinpulsemedia.com\">Latin Pulse Media</a><br>\r\n    <a class=\"thumb\" href=\"/img/sitecaps/latinpulsemedia.png\"><img src=\"/img/sitecaps/latinpulsemedia-thumb.png\"/></a>\r\n  </li>\r\n\r\n  <li>\r\n    <a href=\"http://www.technical-college.org\">Technical College Directory</a><br>\r\n    <a class=\"thumb\" href=\"/img/sitecaps/technicalcollege.png\"><img src=\"/img/sitecaps/technicalcollege-thumb.png\"/></a>\r\n  </li>\r\n\r\n<div style=\"clear:both;\"></div>',1,X'31','2011-01-16 01:24:03','2011-02-12 01:08:50'),
	(12,'squad','<style>\r\n.member-bio img {\r\n  width: 80px;\r\n  height:80px;\r\n  float:left;\r\n  border:1px solid black;\r\n}\r\n.member-bio {\r\n  width:45%;\r\n  float:left;\r\n  font-size: 16px;\r\n  margin:5px;\r\n  padding:5px;\r\n}\r\n.member-bio strong {\r\n  padding: 5px;\r\n}\r\n.member-bio .imgbox {\r\n  height:88px;\r\n}\r\n.member-bio .blurb {\r\n  font-size:12px;\r\n  line-height:12px;\r\n}\r\n.member-bio .inactive {\r\n  color:red;\r\n}\r\n.member-bio .active {\r\n  color: #0FAB07;\r\n}\r\n.handle {\r\n  font-size:12px;\r\n  color:#c33;\r\n}\r\n</style>\r\n\r\n<strong>The Mindynamics</strong><br><br>\r\n\r\n<div class=\"member-bio\">\r\n  <div class=\"imgbox\">\r\n    <img src=\"/img/members/keyvan.jpg\"/>\r\n    <strong>Keyvan</strong><span class=\"handle\">Nox</span><br>\r\n    <strong class=\"active\">Active</strong>\r\n  </div>\r\n  <em class=\"blurb\">Web Developer</em>\r\n</div>\r\n\r\n<div class=\"member-bio\">\r\n  <div class=\"imgbox\">\r\n    <img src=\"/img/members/jon.jpg\"/>\r\n    <strong>Jon</strong><span class=\"handle\">jsilver</span><br>\r\n    <strong class=\"active\">Active</strong>\r\n  </div>\r\n  <em class=\"blurb\">Web Developer</em>\r\n</div>\r\n\r\n<div style=\"clear:both\"></div>\r\n\r\n<div class=\"member-bio\">\r\n  <div class=\"imgbox\">\r\n    <img src=\"/img/members/jacob.jpg\"/>\r\n    <strong>Jacob</strong><span class=\"handle\">Jay Hamma</span><br>\r\n    <strong class=\"active\">Active</strong>\r\n  </div>\r\n  <em class=\"blurb\">Web Developer</em>\r\n</div>\r\n\r\n<div class=\"member-bio\">\r\n  <div class=\"imgbox\">\r\n    <img src=\"/img/members/carl.jpg\"/>\r\n    <strong>Carl</strong><span class=\"handle\">Capt.Proton</span><br>\r\n    <strong class=\"active\">Active</strong>\r\n  </div>\r\n  <em class=\"blurb\">Web Developer</em>\r\n</div>\r\n\r\n<div style=\"clear:both\"></div>\r\n\r\n\r\n<div class=\"member-bio\">\r\n  <div class=\"imgbox\">\r\n    <img src=\"/img/members/malte.jpg\"/>\r\n    <strong>Malte</strong><span class=\"handle\">mouse</span><br>\r\n    <strong class=\"active\">Active</strong>\r\n  </div>\r\n  <em class=\"blurb\">Web Developer</em>\r\n</div>\r\n\r\n<div class=\"member-bio\">\r\n  <div class=\"imgbox\">\r\n    <img src=\"/img/members/tommy.jpg\"/>\r\n    <strong>Tommy</strong><span class=\"handle\">flowandcrash</span><br>\r\n    <strong class=\"active\">Active</strong>\r\n  </div>\r\n  <em class=\"blurb\">Mobile Developer</em>\r\n</div>\r\n\r\n<div style=\"clear:both;\"></div>',1,X'31','2011-01-16 01:26:04','2011-02-12 01:49:01');

/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;





/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
