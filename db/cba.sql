/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 10.4.18-MariaDB : Database - cba
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`cba` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

/*Table structure for table `ci_sessions` */

DROP TABLE IF EXISTS `ci_sessions`;

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT 0,
  `last_activity` int(10) unsigned NOT NULL DEFAULT 0,
  `user_id` int(11) DEFAULT NULL,
  `user_email` varchar(100) DEFAULT NULL,
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `ci_sessions` */

insert  into `ci_sessions`(`id`,`ip_address`,`timestamp`,`last_activity`,`user_id`,`user_email`,`data`) values 
('tsmhchuifcuvii5ojhsa9nk97uo98vbl','::1',1619986900,0,NULL,NULL,'__ci_last_regenerate|i:1619986900;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";first_name|s:9:\"Elizabeth\";last_name|s:6:\"Carver\";avatar|s:23:\"Testimonial-Girl-13.jpg\";group_name|s:5:\"admin\";user_id|s:1:\"1\";old_last_login|s:10:\"1619966788\";last_check|i:1619986900;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('83jlgnu9ddeupr5paetf08ncitac1rab','::1',1619987080,0,NULL,NULL,'__ci_last_regenerate|i:1619987080;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";first_name|s:9:\"Elizabeth\";last_name|s:6:\"Carver\";avatar|s:23:\"Testimonial-Girl-13.jpg\";group_name|s:5:\"admin\";user_id|s:1:\"1\";old_last_login|s:10:\"1619986900\";last_check|i:1619987080;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('h36o4m6rbqouvuo80qm4la37ibil4ibt','::1',1619987490,0,NULL,NULL,'__ci_last_regenerate|i:1619987490;requested_page|s:9:\"users/add\";'),
('bep7q1uma025aq5kibapcgc94e98brc0','::1',1619987791,0,NULL,NULL,'__ci_last_regenerate|i:1619987791;requested_page|s:13:\"contract/list\";'),
('ibi8el708mua7ht7nh6cndv5gsp92bcl','::1',1619988113,0,NULL,NULL,'__ci_last_regenerate|i:1619988113;requested_page|s:13:\"contract/list\";'),
('avn8d88kunk5lm1ckk2bqdq3etj6qdjt','::1',1619988433,0,NULL,NULL,'__ci_last_regenerate|i:1619988433;requested_page|s:13:\"contract/list\";'),
('rd678dg41ftbo16gd9q12u2anf5s6i12','::1',1619988746,0,NULL,NULL,'__ci_last_regenerate|i:1619988746;requested_page|s:13:\"contract/list\";'),
('09vme8tfdkspd1qhdrr8nrf4g3re54on','::1',1619989837,0,NULL,NULL,'__ci_last_regenerate|i:1619989837;requested_page|s:13:\"contract/list\";'),
('ogfabv24gmvjsameeumt61h5lla768bs','::1',1619990177,0,NULL,NULL,'__ci_last_regenerate|i:1619990177;requested_page|s:13:\"contract/list\";'),
('g5fkdbt4j3u6lqejt6ptfhma03fqda03','::1',1619990815,0,NULL,NULL,'__ci_last_regenerate|i:1619990815;requested_page|s:13:\"contract/list\";'),
('rq9el5rml00hpsf24jld8uv8lchdgt5b','::1',1619990853,0,NULL,NULL,'__ci_last_regenerate|i:1619990853;requested_page|s:13:\"contract/list\";message|s:35:\"<p>Account Successfully Created</p>\";__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}identity|s:15:\"erick@gmail.com\";email|s:15:\"erick@gmail.com\";first_name|N;last_name|N;avatar|s:11:\"default.jpg\";group_name|s:8:\"investor\";user_id|s:1:\"6\";old_last_login|N;last_check|i:1619990853;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('hb8l6j1qfpdlr4c66itbq8fik6i797vu','::1',1619991059,0,6,'erick@gmail.com','__ci_last_regenerate|i:1619991059;requested_page|s:13:\"contract/list\";__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}identity|s:15:\"erick@gmail.com\";email|s:15:\"erick@gmail.com\";first_name|s:14:\"Erick M Turley\";last_name|N;avatar|s:11:\"default.jpg\";group_name|s:8:\"investor\";user_id|s:1:\"6\";old_last_login|s:10:\"1619990853\";last_check|i:1619991059;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('g4k676ejho1oanljsbs924icidjj8iq3','::1',1619991126,0,6,'erick@gmail.com','__ci_last_regenerate|i:1619991126;requested_page|s:13:\"contract/list\";__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}identity|s:15:\"erick@gmail.com\";email|s:15:\"erick@gmail.com\";first_name|N;last_name|N;avatar|s:11:\"default.jpg\";group_name|s:8:\"investor\";user_id|s:1:\"6\";old_last_login|s:10:\"1619991059\";last_check|i:1619991126;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";message|s:29:\"<p>Logged In Successfully</p>\";full_name|s:14:\"Erick M Turley\";level|s:2:\"10\";'),
('vl2p2godp56upejsh69ro26b42h0ga12','::1',1619991232,0,6,'erick@gmail.com','__ci_last_regenerate|i:1619991232;requested_page|s:13:\"contract/list\";__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";first_name|s:9:\"Elizabeth\";last_name|s:6:\"Carver\";avatar|s:23:\"Testimonial-Girl-13.jpg\";group_name|s:5:\"admin\";user_id|s:1:\"1\";old_last_login|s:10:\"1619987080\";last_check|i:1619991232;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";full_name|N;level|s:1:\"1\";'),
('abgsemf7mp1bj9t9oamqoi28es80l77a','::1',1619991477,0,1,'admin@admin.com','__ci_last_regenerate|i:1619991477;requested_page|s:13:\"contract/list\";__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";first_name|s:9:\"Elizabeth\";last_name|s:6:\"Carver\";avatar|s:23:\"Testimonial-Girl-13.jpg\";group_name|s:5:\"admin\";user_id|s:1:\"1\";old_last_login|s:10:\"1619991232\";last_check|i:1619991477;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";full_name|s:4:\"Saad\";level|s:1:\"1\";'),
('66f92quuc1dmfpb5cf780oci6s20coh0','::1',1619991832,0,1,'admin@admin.com','__ci_last_regenerate|i:1619991832;requested_page|s:13:\"contract/list\";__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";first_name|s:9:\"Elizabeth\";last_name|s:6:\"Carver\";avatar|s:23:\"Testimonial-Girl-13.jpg\";group_name|s:5:\"admin\";user_id|s:1:\"1\";old_last_login|s:10:\"1619991232\";last_check|i:1619991477;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";full_name|s:4:\"Saad\";level|s:1:\"1\";'),
('scmt771utrkr9ncua1bc0m2fbkiaiclh','::1',1619992290,0,1,'admin@admin.com','__ci_last_regenerate|i:1619992290;requested_page|s:13:\"contract/list\";__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";first_name|s:9:\"Elizabeth\";last_name|s:6:\"Carver\";avatar|s:23:\"Testimonial-Girl-13.jpg\";group_name|s:5:\"admin\";user_id|s:1:\"1\";old_last_login|s:10:\"1619991232\";last_check|i:1619991477;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";full_name|s:4:\"Saad\";level|s:1:\"1\";'),
('3mldl1rt2hq65dinr5fsm90hibs860ma','::1',1619992595,0,1,'admin@admin.com','__ci_last_regenerate|i:1619992595;requested_page|s:13:\"contract/list\";__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";first_name|s:9:\"Elizabeth\";last_name|s:6:\"Carver\";avatar|s:23:\"Testimonial-Girl-13.jpg\";group_name|s:5:\"admin\";user_id|s:1:\"1\";old_last_login|s:10:\"1619991232\";last_check|i:1619991477;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";full_name|s:4:\"Saad\";level|s:1:\"1\";'),
('rghj67265lthl090n9b4f8tq3vd093uh','::1',1619992934,0,1,'admin@admin.com','__ci_last_regenerate|i:1619992934;requested_page|s:13:\"contract/list\";__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";first_name|s:9:\"Elizabeth\";last_name|s:6:\"Carver\";avatar|s:23:\"Testimonial-Girl-13.jpg\";group_name|s:5:\"admin\";user_id|s:1:\"1\";old_last_login|s:10:\"1619991232\";last_check|i:1619991477;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";full_name|s:4:\"Saad\";level|s:1:\"1\";'),
('o34vc6iki8vgrrpjue1srr33o4kgfdof','::1',1619993311,0,1,'admin@admin.com','__ci_last_regenerate|i:1619993311;requested_page|s:13:\"contract/list\";__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";first_name|s:9:\"Elizabeth\";last_name|s:6:\"Carver\";avatar|s:23:\"Testimonial-Girl-13.jpg\";group_name|s:5:\"admin\";user_id|s:1:\"1\";old_last_login|s:10:\"1619991232\";last_check|i:1619991477;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";full_name|s:4:\"Saad\";level|s:1:\"1\";'),
('vtbg05bdo190f7e9lf5ia23lnv7th3fb','::1',1619993518,0,NULL,NULL,'__ci_last_regenerate|i:1619993518;message|s:22:\"<p>Incorrect Login</p>\";__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";first_name|s:9:\"Elizabeth\";last_name|s:6:\"Carver\";avatar|s:23:\"Testimonial-Girl-13.jpg\";group_name|s:5:\"admin\";full_name|s:4:\"Saad\";level|s:1:\"1\";user_id|s:1:\"1\";old_last_login|s:10:\"1619991477\";last_check|i:1619993518;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('3a6dhd9bsrdifquto04hh3oc7okro87s','::1',1619993735,0,NULL,NULL,'__ci_last_regenerate|i:1619993735;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";first_name|s:9:\"Elizabeth\";last_name|s:6:\"Carver\";avatar|s:23:\"Testimonial-Girl-13.jpg\";group_name|s:5:\"admin\";full_name|s:4:\"Saad\";level|s:1:\"1\";user_id|s:1:\"1\";old_last_login|s:10:\"1619993518\";last_check|i:1619993735;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('j0smdb5umf0pg8aatmt67eic1i6876f6','::1',1619993793,0,NULL,NULL,'__ci_last_regenerate|i:1619993793;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";first_name|s:4:\"Saad\";last_name|s:5:\"El So\";avatar|s:23:\"Testimonial-Girl-13.jpg\";group_name|s:5:\"admin\";full_name|s:4:\"Saad\";level|s:1:\"1\";user_id|s:1:\"1\";old_last_login|s:10:\"1619993735\";last_check|i:1619993793;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('3ttdc537k7lmvntan7rs90jl9sia2s9r','::1',1619993907,0,NULL,NULL,'__ci_last_regenerate|i:1619993907;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";first_name|s:4:\"Saad\";last_name|s:5:\"El So\";avatar|s:23:\"Testimonial-Girl-13.jpg\";group_name|s:5:\"admin\";full_name|s:4:\"Saad\";level|s:1:\"1\";user_id|s:1:\"1\";old_last_login|s:10:\"1619993793\";last_check|i:1619993907;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('m100k86ls3kvkhc2cmbfjqnn0kkil1nr','::1',1619993923,0,NULL,NULL,'__ci_last_regenerate|i:1619993923;identity|s:15:\"erick@gmail.com\";email|s:15:\"erick@gmail.com\";first_name|N;last_name|N;avatar|s:11:\"default.jpg\";group_name|s:8:\"investor\";full_name|s:14:\"Erick M Turley\";level|s:2:\"10\";user_id|s:1:\"6\";old_last_login|s:10:\"1619991126\";last_check|i:1619993923;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('q60ea07vlo64gnnj7nheiv9bmntggupa','::1',1619994297,0,6,'erick@gmail.com','__ci_last_regenerate|i:1619994297;identity|s:15:\"erick@gmail.com\";email|s:15:\"erick@gmail.com\";first_name|N;last_name|N;avatar|s:11:\"default.jpg\";group_name|s:8:\"investor\";full_name|s:14:\"Erick M Turley\";level|s:2:\"10\";user_id|s:1:\"6\";old_last_login|s:10:\"1619991126\";last_check|i:1619993923;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}'),
('5915foppjj259vfdeblbbsttuhnbts2e','::1',1619994652,0,6,'erick@gmail.com','__ci_last_regenerate|i:1619994652;identity|s:15:\"erick@gmail.com\";email|s:15:\"erick@gmail.com\";first_name|N;last_name|N;avatar|s:11:\"default.jpg\";group_name|s:8:\"investor\";full_name|s:14:\"Erick M Turley\";level|s:2:\"10\";user_id|s:1:\"6\";old_last_login|s:10:\"1619991126\";last_check|i:1619993923;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}'),
('cpffgreii2fk0bvbff3lkmi2p91on3sg','::1',1619994963,0,6,'erick@gmail.com','__ci_last_regenerate|i:1619994963;identity|s:15:\"erick@gmail.com\";email|s:15:\"erick@gmail.com\";first_name|N;last_name|N;avatar|s:11:\"default.jpg\";group_name|s:8:\"investor\";full_name|s:14:\"Erick M Turley\";level|s:2:\"10\";user_id|s:1:\"6\";old_last_login|s:10:\"1619991126\";last_check|i:1619993923;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}'),
('mr8vnvfv8eieu07f4okh91uuil2p5kcq','::1',1619996344,0,6,'erick@gmail.com','__ci_last_regenerate|i:1619996344;identity|s:15:\"erick@gmail.com\";email|s:15:\"erick@gmail.com\";first_name|N;last_name|N;avatar|s:11:\"default.jpg\";group_name|s:8:\"investor\";full_name|s:14:\"Erick M Turley\";level|s:2:\"10\";user_id|s:1:\"6\";old_last_login|s:10:\"1619991126\";last_check|i:1619993923;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}'),
('91kc1d0upkcffhpn2fonl5o531f8r0jt','::1',1619996807,0,6,'erick@gmail.com','__ci_last_regenerate|i:1619996807;identity|s:15:\"erick@gmail.com\";email|s:15:\"erick@gmail.com\";first_name|N;last_name|N;avatar|s:11:\"default.jpg\";group_name|s:8:\"investor\";full_name|s:14:\"Erick M Turley\";level|s:2:\"10\";user_id|s:1:\"6\";old_last_login|s:10:\"1619991126\";last_check|i:1619993923;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}'),
('19j7f1a8h1tb37hnnvnemsfgb2cl68t1','::1',1619997157,0,6,'erick@gmail.com','__ci_last_regenerate|i:1619997157;identity|s:15:\"erick@gmail.com\";email|s:15:\"erick@gmail.com\";first_name|N;last_name|N;avatar|s:11:\"default.jpg\";group_name|s:8:\"investor\";full_name|s:14:\"Erick M Turley\";level|s:2:\"10\";user_id|s:1:\"6\";old_last_login|s:10:\"1619991126\";last_check|i:1619993923;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}'),
('mr3srlgfd725le1gelh687ac3rsvc7a4','::1',1619997460,0,6,'erick@gmail.com','__ci_last_regenerate|i:1619997460;identity|s:15:\"erick@gmail.com\";email|s:15:\"erick@gmail.com\";first_name|N;last_name|N;avatar|s:11:\"default.jpg\";group_name|s:8:\"investor\";full_name|s:14:\"Erick M Turley\";level|s:2:\"10\";user_id|s:1:\"6\";old_last_login|s:10:\"1619991126\";last_check|i:1619993923;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}'),
('ilvpfh8aa6f4fsjgnn39hcdp0thjqpii','::1',1619997876,0,6,'erick@gmail.com','__ci_last_regenerate|i:1619997876;identity|s:15:\"erick@gmail.com\";email|s:15:\"erick@gmail.com\";first_name|N;last_name|N;avatar|s:11:\"default.jpg\";group_name|s:8:\"investor\";full_name|s:14:\"Erick M Turley\";level|s:2:\"10\";user_id|s:1:\"6\";old_last_login|s:10:\"1619991126\";last_check|i:1619993923;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}'),
('jr3of90jkm5ateeqvrs7r5oh74gbi9aj','::1',1619998320,0,6,'erick@gmail.com','__ci_last_regenerate|i:1619998320;identity|s:15:\"erick@gmail.com\";email|s:15:\"erick@gmail.com\";first_name|N;last_name|N;avatar|s:11:\"default.jpg\";group_name|s:8:\"investor\";full_name|s:14:\"Erick M Turley\";level|s:2:\"10\";user_id|s:1:\"6\";old_last_login|s:10:\"1619991126\";last_check|i:1619993923;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}'),
('u60mnqaisq04r6h86a06bqbaapuh5sdd','::1',1619998657,0,6,'erick@gmail.com','__ci_last_regenerate|i:1619998657;identity|s:15:\"erick@gmail.com\";email|s:15:\"erick@gmail.com\";first_name|N;last_name|N;avatar|s:11:\"default.jpg\";group_name|s:8:\"investor\";full_name|s:14:\"Erick M Turley\";level|s:2:\"10\";user_id|s:1:\"6\";old_last_login|s:10:\"1619991126\";last_check|i:1619993923;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}'),
('k1kejtnhqbb5jv01dor6n4detk8mkqbh','::1',1619998960,0,6,'erick@gmail.com','__ci_last_regenerate|i:1619998960;identity|s:15:\"erick@gmail.com\";email|s:15:\"erick@gmail.com\";first_name|N;last_name|N;avatar|s:11:\"default.jpg\";group_name|s:8:\"investor\";full_name|s:14:\"Erick M Turley\";level|s:2:\"10\";user_id|s:1:\"6\";old_last_login|s:10:\"1619991126\";last_check|i:1619993923;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}'),
('a9u4nggc3skb7modeedmvf3l599s32o2','::1',1619999340,0,6,'erick@gmail.com','__ci_last_regenerate|i:1619999340;identity|s:15:\"erick@gmail.com\";email|s:15:\"erick@gmail.com\";first_name|N;last_name|N;avatar|s:11:\"default.jpg\";group_name|s:8:\"investor\";full_name|s:14:\"Erick M Turley\";level|s:2:\"10\";user_id|s:1:\"6\";old_last_login|s:10:\"1619991126\";last_check|i:1619993923;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}'),
('oohru14vlj52pdvgioarb9ciiribbaki','::1',1619999380,0,6,'erick@gmail.com','__ci_last_regenerate|i:1619999340;identity|s:15:\"erick@gmail.com\";email|s:15:\"erick@gmail.com\";first_name|N;last_name|N;avatar|s:11:\"default.jpg\";group_name|s:8:\"investor\";full_name|s:14:\"Erick M Turley\";level|s:2:\"10\";user_id|s:1:\"6\";old_last_login|s:10:\"1619991126\";last_check|i:1619993923;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}');

/*Table structure for table `contract` */

DROP TABLE IF EXISTS `contract`;

CREATE TABLE `contract` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `language` varchar(10) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `body` longblob DEFAULT NULL,
  `created_on` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `contract` */

insert  into `contract`(`id`,`language`,`type`,`body`,`created_on`) values 
(1,'English','email','<p><br></p><h2>One-Page Consulting and service contract</h2><p><br></p><p>CBA ApS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Company or Person: <strong>{Name}</strong></p><p>Gasværksvej 48A, 1.tv.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Address: <strong>{Address}</strong></p><p>Dk-9000 Aalborg&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;og&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;City: <strong> {City}</strong></p><p>VAT-no.: 41476575&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;VAT-no. <strong>{Vat}</strong></p><p><br></p><p>(herein known as <strong>”CBA”</strong>)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(herein known as ”customer”)</p><p><br></p><p>(herein known as <strong>”Party”</strong> or (herein known as <strong>”Parties”</strong>)</p><p><br></p><p>has today entered into the following agreement on concept development, assistance with creation and ongoing operation, administration and delivery of content to the YouTube channel (hereinafter referred to as the <strong>”Agreement”</strong>):</p><p><br></p><p>Project name/YouTube-channel name</p><p>{Channel}</p><p><br></p><p>For the Service, the Customer pays $ 1.000 incl. VAT pr. ideal ownership share of the Channel of 1%. If the Customer wishes to acquire an ideal share of 10%, $ 10.000 incl. VAT, for 50% $ 50.000 incl. VAT etc. This payment is the <strong>”Purchase price”</strong>. The payment deadline for the Pur-chase Price is immediately upon conclusion of the Agreement.</p><p>The customer has chosen to acquire: <strong>{Own}</strong></p><p>The purchase price is: <strong>$ {priceForSubTotal}</strong>.incl. VAT.</p><p><br></p><p>CBA is responsible for the day-to-day administration and operation of the Channel. For the first 2 years after the Start Date, no separate fee is calculated for this benefit. After the expiry of the first 2 years after the Start Date, this service is settled for the Channel in total with $. 2.000 per month, and this is distributed proportionally to the Customer in accordance with the Customer\'s ideal ownership percentage of the Channel - the <strong>”Service Fee”</strong>.</p><p><br></p><p>The Customer\'s Service Fee per. channel is: <strong> {Kr}</strong> incl. VAT every month after the first 24 month.</p><p><br></p><p>The final VAT ratio is stated in the submitted sales invoice.</p><p><br></p><p>hereby confirm that I have received, read and approved the attached / following Consulting and service contract as well as Terms and conditions.</p><p>For highlighted text (CBA, The Customer, Party, Parties, Agreement, Purchase Price, Service Fee), please refer to the attached / following consulting and service contract as well as terms and conditions.</p><p><br></p><p>The Agreement is signed by the Parties in two original copies, each of which shall receive one copy. If the Agreement is signed electronically, copies of each of the CBAs and the Customer must be considered as original copies.</p><p><br></p><p>Aalborg d. <strong>{{date}}</strong></p><p><br></p><p>For CBA ApS</p><p>{{Login_name}}</p><p><br></p><p>{Partner}</p><p><br></p><p>Location: {City} Date: {{date}}</p><p><br></p><p>The client (Authorised Signee)</p><p><br></p><p><strong style=\"color: rgb(77, 197, 27);\">APPROVED VIA DIGITAL VALIDATION</strong></p><p><br></p><p><strong>{Name}</strong> (Authorised Signee)</p>','2021-05-02 07:41:30'),
(2,'Danish','email','<p>\r\n		<h2>One-Page Konsulent- og servicekontrakt</h2>\r\n		<br>\r\n		CBA ApS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Firma / Person: <b><span class=\'text-warning\'>{Name}</span></b>\r\n		<br>\r\n		Gasværksvej 48A, 1.tv.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adresse: <b><span class=\'text-warning\'>{Address}</span></b>\r\n		<br>\r\n		9000 Aalborg&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;og&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;By: <b><span class=\'text-warning\'> {City}</span></b>\r\n		<br>\r\n		CVR-nr.: 41476575&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CVR nr.  <b><span class=\'text-warning\'>{Vat}</span></b>\r\n		<br>\r\n		<br>\r\n		(herefter benævnt <b>”CBA”</b>)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	(herefter benævnt ”Kunden”)	\r\n		<br>\r\n		<br>\r\n		(herefter hver for sig benævnt <b>”Part”</b> og samlet benævnt <b>”Parterne”</b>)\r\n		<br>\r\n		<br>\r\n		har dags dato indgået følgende aftale om konceptudvikling, bistand til oprettelse samt løbende drift, administration og leverance af indhold til YouTube kanal (herefter benævnt <b>”Aftalen”</b>):\r\n		<br>\r\n		<br>\r\n		Projektnavn/YouTube-kanal navn\r\n		<br>\r\n		{Channel}\r\n		<br>\r\n		<br>\r\n		For Ydelsen betaler Kunden $1.000 inkl moms pr. ideel ejerandel af Kanalen på 1 %. Ønsker Kunden at erhverve en ideel andel på 10 %, betales $10.000 inkl. moms, for 50 % betales $50.000 inkl. moms etc. Denne betaling er <b>”Købesummen”</b>. Betalingsfristen for Købesummen er straks ved indgåelse af Aftalen.\r\n		<br>\r\n		Kunden har valgt at erhverve: <b><span class=\'text-warning\'>{Own}</span></b>\r\n		<br>\r\n		Købesummen udgør: <b><span class=\'text-warning\'>{priceForTotal}</span></b>  inkl. moms.\r\n		<br>\r\n		<br>\r\n		CBA forestår den daglige administration og drift af Kanalen. I de første 2 år efter Startdatoen beregnes der ikke særskilt vederlag for denne ydelse. Efter udløbet af de første 2 år efter Startdatoen afregnes denne ydelse samlet for Kanalen med $2.000 pr. måned, og dette fordeles forholdsmæssigt på Kunden i henhold til Kundens ideelle ejerprocent af Kanalen – <b>”Servicegebyret”</b>.\r\n		<br>\r\n		<br>\r\n		Kundens Servicegebyr udgør:  <b><span class=\'text-warning\'>{Kr}</span></b>  inkl. moms pr. måned efter de første 2 år.\r\n		<br>\r\n		<br>\r\n		Endelig moms forhold fremgår af den fremsendte salgsfaktura.\r\n		<br>\r\n		<br>\r\n		Jeg bekræfter hermed, at jeg har modtaget, læst og godkendt den vedlagte/følgende konsulent- og servicekontrakt samt vilkår og betingelser.\r\n		<br>\r\n		For fremhævet tekst (CBA, Kunden, Part, Parterne, Aftalen, Købssummen, Servicegebyret), henvises til vedlagte/følgende konsulent- og servicekontrakt samt vilkår og betingelser. \r\n		<br>\r\n		<br>\r\n		Aftalen er underskrevet af Parterne i to originale eksemplarer, hvoraf hver Part har modtaget et eksemplar. Såfremt Aftalen er underskrevet elektronisk, skal hver af CBAs og Kundens kopier anses for originale eksemplarer. \r\n		<br>\r\n		<br>\r\n		Aalborg d. <b><span class=\'text-warning\'>{{Date}}</span></b>\r\n		<br>\r\n		<br>\r\n		For CBA ApS\r\n		<br>\r\n		<span class=\'text-warning\'>{{Login_name}}</span>	\r\n		<br>	\r\n		<br>\r\n		{Partner}\r\n		<br>\r\n		<br>\r\n		Sted: <span class=\'text-warning\'>{City} </span> Dato: <span class=\'text-warning\'>{{Date}}</span>\r\n		<br>\r\n		<br>\r\n		For Kunden (Tegningsberettiget)\r\n		<br>\r\n		<br>\r\n		<span style=\'font-weight: 700;font-size: 20px;color: #4dc51b !important\' >GODKENDT VIA DIGITAL VALIDERING</span>\r\n		<br>		\r\n		<br>		\r\n		<b><span class=\'text-warning\'>{Name}</span></b> (Tegningsberettiget)	\r\n	</p>','2021-05-02 07:41:43');

/*Table structure for table `groups` */

DROP TABLE IF EXISTS `groups`;

CREATE TABLE `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `groups` */

insert  into `groups`(`id`,`name`,`description`) values 
(1,'admin','Administrator'),
(2,'members','General Users'),
(3,'investor','Investor');

/*Table structure for table `login_attempts` */

DROP TABLE IF EXISTS `login_attempts`;

CREATE TABLE `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `login_attempts` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(254) NOT NULL,
  `activation_selector` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `forgotten_password_selector` varchar(255) DEFAULT NULL,
  `forgotten_password_code` varchar(255) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_selector` varchar(255) DEFAULT NULL,
  `remember_code` varchar(255) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT 'default.jpg',
  `group_name` varchar(15) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT 0,
  `created_date` datetime DEFAULT current_timestamp(),
  `address` varchar(255) DEFAULT NULL,
  `zip_code` varchar(20) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `level` tinyint(2) DEFAULT 10,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_email` (`email`),
  UNIQUE KEY `uc_activation_selector` (`activation_selector`),
  UNIQUE KEY `uc_forgotten_password_selector` (`forgotten_password_selector`),
  UNIQUE KEY `uc_remember_selector` (`remember_selector`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `users` */

insert  into `users`(`id`,`ip_address`,`username`,`password`,`email`,`activation_selector`,`activation_code`,`forgotten_password_selector`,`forgotten_password_code`,`forgotten_password_time`,`remember_selector`,`remember_code`,`created_on`,`last_login`,`active`,`first_name`,`last_name`,`company`,`phone`,`avatar`,`group_name`,`is_deleted`,`created_date`,`address`,`zip_code`,`city`,`country`,`full_name`,`level`) values 
(1,'127.0.0.1','administrator','$2y$12$1p1JveSFacSEXNrusb38z.FNAJyxpvSrzWxoHt01lYc5p1PsxHalW','admin@admin.com',NULL,'',NULL,NULL,NULL,NULL,NULL,1268889823,1619993907,1,'Saad','El So','ADMIN','0','Testimonial-Girl-13.jpg','admin',0,'2021-05-02 14:26:14','2783  Ash Avenue','63132','Olivette','Danmark','Saad',1),
(6,'::1',NULL,'$2y$10$NcDXN81jAcKP8wFapNi4xucfpH5pM29bK5uXLXPF33F8TOHz/1Ena','erick@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1619990815,1619993923,1,NULL,NULL,NULL,'314-880-4409','default.jpg','investor',0,'2021-05-02 14:26:55','2783  Ash Avenue','63132','Olivette','MO','Erick M Turley',10);

/*Table structure for table `users_groups` */

DROP TABLE IF EXISTS `users_groups`;

CREATE TABLE `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`),
  CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

/*Data for the table `users_groups` */

insert  into `users_groups`(`id`,`user_id`,`group_id`) values 
(1,1,1),
(9,6,2);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
