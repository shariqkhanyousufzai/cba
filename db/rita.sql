/*
SQLyog Community v13.1.7 (64 bit)
MySQL - 10.4.11-MariaDB : Database - apprita
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`apprita` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `apprita`;

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
('8jbls7bujl70cpcn47frnd1vlvo6fi88','::1',1618036232,0,NULL,NULL,'__ci_last_regenerate|i:1618036232;requested_page|s:9:\"dashboard\";identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1618036159\";last_check|i:1618036232;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('cnar772sonsusf2olp83cm0330m9e1bg','::1',1618036543,0,1,'admin@admin.com','__ci_last_regenerate|i:1618036543;requested_page|s:9:\"dashboard\";identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1618036159\";last_check|i:1618036232;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('k1hkd3bmd450u4ok7v2sil3rteupdeq7','::1',1618036601,0,1,'admin@admin.com','__ci_last_regenerate|i:1618036601;requested_page|s:9:\"dashboard\";identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1618036159\";last_check|i:1618036232;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('6u8h043b2srme3dni4mm3ojjtis6diqm','::1',1618036605,0,1,'admin@admin.com','__ci_last_regenerate|i:1618036605;requested_page|s:9:\"dashboard\";identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1618036159\";last_check|i:1618036232;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('hjn1ojo7u1klo71und5ghpognvag65qi','::1',1618036608,0,1,'admin@admin.com','__ci_last_regenerate|i:1618036608;requested_page|s:9:\"dashboard\";identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1618036159\";last_check|i:1618036232;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('m3hieilak8tnp86mutsei2tt098risbd','::1',1618036909,0,1,'admin@admin.com','__ci_last_regenerate|i:1618036909;requested_page|s:9:\"dashboard\";identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1618036159\";last_check|i:1618036232;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('k230n076bc193fa42d1ssfl4i4mbc3b0','::1',1618037218,0,1,'admin@admin.com','__ci_last_regenerate|i:1618037218;requested_page|s:9:\"dashboard\";identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1618036159\";last_check|i:1618036232;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('nn16msi9nu2bq82nmvkv2ve7iu11ngb6','::1',1618037347,0,1,'admin@admin.com','__ci_last_regenerate|i:1618037218;requested_page|s:9:\"dashboard\";identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1618036159\";last_check|i:1618036232;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('ekdp6b3dl36ldhq576slvek0pkshib2t','::1',1618037290,0,NULL,NULL,'__ci_last_regenerate|i:1618037290;identity|s:22:\"hackbaby1996@gmail.com\";email|s:22:\"hackbaby1996@gmail.com\";user_id|s:1:\"2\";old_last_login|s:10:\"1618032630\";last_check|i:1618037290;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('e0hnfm9h62iu1e0jo2afnq3gheptt180','::1',1618037346,0,2,'hackbaby1996@gmail.com','__ci_last_regenerate|i:1618037290;identity|s:22:\"hackbaby1996@gmail.com\";email|s:22:\"hackbaby1996@gmail.com\";user_id|s:1:\"2\";old_last_login|s:10:\"1618032630\";last_check|i:1618037290;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('7diq9be7fvve82cel3onuidg9j3s0kii','::1',1618064326,0,NULL,NULL,'__ci_last_regenerate|i:1618064326;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1618036232\";last_check|i:1618064326;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('9v1v1qn8p8hdapmcd0cko91df6kge5ql','::1',1618064925,0,1,'admin@admin.com','__ci_last_regenerate|i:1618064925;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1618036232\";last_check|i:1618064326;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";message|s:29:\"<p>Logged In Successfully</p>\";__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}'),
('gal669ifq5h464vqlv8p8o1jm3kb1b4j','::1',1618065284,0,1,'admin@admin.com','__ci_last_regenerate|i:1618065284;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1618036232\";last_check|i:1618064326;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('vk3h5qb5rn52snplntjrmlgri95n4s4o','::1',1618065450,0,1,'admin@admin.com','__ci_last_regenerate|i:1618065450;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1618064326\";last_check|i:1618065450;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";first_name|N;last_name|N;avatar|N;'),
('me5u6h7ijcc7dgvq3cd1pjqhviamil70','::1',1618065459,0,1,'admin@admin.com','__ci_last_regenerate|i:1618065459;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1618065450\";last_check|i:1618065459;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";first_name|N;last_name|N;avatar|N;'),
('fs58ppm818v4i16h0mebl4rh25b75nud','::1',1618065574,0,1,'admin@admin.com','__ci_last_regenerate|i:1618065574;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1618065459\";last_check|i:1618065574;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";first_name|N;last_name|N;avatar|N;'),
('eih4jspgjdh945lcqm8i7165smprrt72','::1',1618065712,0,1,'admin@admin.com','__ci_last_regenerate|i:1618065712;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1618065574\";last_check|i:1618065712;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";first_name|N;last_name|N;avatar|N;'),
('pghj1ab3m4metvudherbgit2idll4rbq','::1',1618065749,0,1,'admin@admin.com','__ci_last_regenerate|i:1618065749;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1618065712\";last_check|i:1618065749;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";first_name|s:5:\"Admin\";last_name|s:8:\"istrator\";avatar|N;'),
('mpjbgj5abhrup65pqta3kjevdip564t8','::1',1618065767,0,1,'admin@admin.com','__ci_last_regenerate|i:1618065767;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1618065749\";last_check|i:1618065767;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";first_name|s:5:\"Admin\";last_name|s:8:\"istrator\";avatar|s:11:\"default.jpg\";'),
('qglfdlgu8rufqh7phsall42vn22rejq6','::1',1618066230,0,1,'admin@admin.com','__ci_last_regenerate|i:1618066230;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1618065749\";last_check|i:1618065767;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";first_name|s:5:\"Admin\";last_name|s:8:\"istrator\";avatar|s:11:\"default.jpg\";'),
('m9quqd7qe68b9k271qos9fepgudn0g55','::1',1618066781,0,1,'admin@admin.com','__ci_last_regenerate|i:1618066781;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1618065749\";last_check|i:1618065767;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";first_name|s:5:\"Admin\";last_name|s:8:\"istrator\";avatar|s:11:\"default.jpg\";'),
('pfrmjqu2polon9nu7m2f7t8fe0vg8n2u','::1',1618067134,0,1,'admin@admin.com','__ci_last_regenerate|i:1618067134;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1618065749\";last_check|i:1618065767;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";first_name|s:5:\"Admin\";last_name|s:8:\"istrator\";avatar|s:11:\"default.jpg\";'),
('kuvkch2jrtjgq10v6cvodfqlgjj61t5i','::1',1618067491,0,1,'admin@admin.com','__ci_last_regenerate|i:1618067491;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1618065749\";last_check|i:1618065767;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";first_name|s:5:\"Admin\";last_name|s:8:\"istrator\";avatar|s:11:\"default.jpg\";'),
('sc6h4eo1p5d2e8fea7v0o6a8f7umbis0','::1',1618067797,0,1,'admin@admin.com','__ci_last_regenerate|i:1618067797;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1618065749\";last_check|i:1618065767;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";first_name|s:5:\"Admin\";last_name|s:8:\"istrator\";avatar|s:11:\"default.jpg\";'),
('46s1uijek9hfsrgn1jfb21eook7s6bdm','::1',1618068125,0,1,'admin@admin.com','__ci_last_regenerate|i:1618068125;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1618065749\";last_check|i:1618065767;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";first_name|s:5:\"Admin\";last_name|s:8:\"istrator\";avatar|s:11:\"default.jpg\";'),
('3itpatkd4ilp39gtnbngm48h190dnhbd','::1',1618068453,0,1,'admin@admin.com','__ci_last_regenerate|i:1618068453;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1618065749\";last_check|i:1618065767;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";first_name|s:5:\"Admin\";last_name|s:8:\"istrator\";avatar|s:11:\"default.jpg\";'),
('6jhq7r34nh2n753j2b2jetcrtv18c257','::1',1618068762,0,1,'admin@admin.com','__ci_last_regenerate|i:1618068762;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1618065749\";last_check|i:1618065767;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";first_name|s:5:\"Admin\";last_name|s:8:\"istrator\";avatar|s:11:\"default.jpg\";'),
('0t790f8ecua514jl98ip9qqorj6d9vpo','::1',1618069068,0,1,'admin@admin.com','__ci_last_regenerate|i:1618069068;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1618065749\";last_check|i:1618065767;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";first_name|s:5:\"Admin\";last_name|s:8:\"istrator\";avatar|s:11:\"default.jpg\";'),
('04fqmehcmjiio6lmejgffmhr9ivfb89i','::1',1618069503,0,1,'admin@admin.com','__ci_last_regenerate|i:1618069503;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1618065749\";last_check|i:1618065767;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";first_name|s:5:\"Admin\";last_name|s:8:\"istrator\";avatar|s:11:\"default.jpg\";'),
('1aakpegr2ujmenkhpfavsvrj2i075cc3','::1',1618069859,0,1,'admin@admin.com','__ci_last_regenerate|i:1618069859;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1618065749\";last_check|i:1618065767;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";first_name|s:5:\"Admin\";last_name|s:8:\"istrator\";avatar|s:11:\"default.jpg\";'),
('9lncacjmpi9p70kf5hcd0tofu1fg7pj5','::1',1618070165,0,1,'admin@admin.com','__ci_last_regenerate|i:1618070165;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1618065749\";last_check|i:1618065767;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";first_name|s:5:\"Admin\";last_name|s:8:\"istrator\";avatar|s:11:\"default.jpg\";'),
('i7m98kto4htfjkgfh0hc7hclo39e60tg','::1',1618070525,0,1,'admin@admin.com','__ci_last_regenerate|i:1618070525;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1618065749\";last_check|i:1618065767;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";first_name|s:5:\"Admin\";last_name|s:8:\"istrator\";avatar|s:11:\"default.jpg\";'),
('hfaed2a405mcprjtf3ibh7dpb22hpdbq','::1',1618070836,0,1,'admin@admin.com','__ci_last_regenerate|i:1618070836;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1618065749\";last_check|i:1618065767;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";first_name|s:5:\"Admin\";last_name|s:8:\"istrator\";avatar|s:11:\"default.jpg\";'),
('v04bcnfttbja3u6bpng6j6t694th7c6l','::1',1618071138,0,1,'admin@admin.com','__ci_last_regenerate|i:1618071138;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1618065749\";last_check|i:1618065767;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";first_name|s:5:\"Admin\";last_name|s:8:\"istrator\";avatar|s:11:\"default.jpg\";'),
('eb8gc3fv7m8cp5483idjciubs7f061mu','::1',1618071549,0,1,'admin@admin.com','__ci_last_regenerate|i:1618071549;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";user_id|s:1:\"1\";old_last_login|s:10:\"1618065749\";last_check|i:1618065767;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";first_name|s:5:\"Admin\";last_name|s:8:\"istrator\";avatar|s:11:\"default.jpg\";'),
('nmr25c5h73ar5e86dk3bff5vajjg6417','::1',1618071744,0,NULL,NULL,'__ci_last_regenerate|i:1618071744;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";first_name|s:5:\"Admin\";last_name|s:8:\"istrator\";avatar|s:11:\"default.jpg\";user_id|s:1:\"1\";old_last_login|s:10:\"1618065767\";last_check|i:1618071744;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('tfb2ptircofl0u2o2f76qid938hqjarm','::1',1618071836,0,NULL,NULL,'__ci_last_regenerate|i:1618071836;identity|s:18:\"demo@president.com\";email|s:18:\"demo@president.com\";first_name|s:4:\"Ella\";last_name|s:4:\"Smit\";avatar|s:11:\"default.jpg\";user_id|s:1:\"5\";old_last_login|N;last_check|i:1618071836;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('nn7cek1edokc8010ke6a6aih15kv9vqi','::1',1618071913,0,NULL,NULL,'__ci_last_regenerate|i:1618071913;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";first_name|s:5:\"Admin\";last_name|s:8:\"istrator\";avatar|s:11:\"default.jpg\";user_id|s:1:\"1\";old_last_login|s:10:\"1618071744\";last_check|i:1618071913;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('uhin90sbccijalmu33of1o2iuohq8e8d','::1',1618072224,0,1,'admin@admin.com','__ci_last_regenerate|i:1618072224;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";first_name|s:5:\"Admin\";last_name|s:8:\"istrator\";avatar|s:11:\"default.jpg\";user_id|s:1:\"1\";old_last_login|s:10:\"1618071744\";last_check|i:1618071913;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('a55un6b2rcbutvsolu2bs0jl0tb7op18','::1',1618072283,0,1,'admin@admin.com','__ci_last_regenerate|i:1618072283;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";first_name|s:5:\"Admin\";last_name|s:8:\"istrator\";avatar|s:11:\"default.jpg\";user_id|s:1:\"1\";old_last_login|s:10:\"1618071913\";last_check|i:1618072283;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";group_name|s:5:\"admin\";'),
('ete62chlu3jok3pbgp5rb4a41hr79nh4','::1',1618072307,0,NULL,NULL,'__ci_last_regenerate|i:1618072307;identity|s:18:\"demo@president.com\";email|s:18:\"demo@president.com\";first_name|s:4:\"Ella\";last_name|s:4:\"Smit\";avatar|s:11:\"default.jpg\";group_name|s:12:\"rita_garrett\";user_id|s:1:\"5\";old_last_login|s:10:\"1618071836\";last_check|i:1618072307;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('dgh72h3uor5qi4fo2acgvtnmasm3ek0o','::1',1618072398,0,5,'demo@president.com','__ci_last_regenerate|i:1618072398;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";first_name|s:5:\"Admin\";last_name|s:8:\"istrator\";avatar|s:11:\"default.jpg\";group_name|s:5:\"admin\";user_id|s:1:\"1\";old_last_login|s:10:\"1618072283\";last_check|i:1618072398;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('tu3pqoj7m2a07hdm8g2ks1tv6cp617sv','::1',1618072815,0,1,'admin@admin.com','__ci_last_regenerate|i:1618072815;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";first_name|s:5:\"Admin\";last_name|s:8:\"istrator\";avatar|s:11:\"default.jpg\";group_name|s:5:\"admin\";user_id|s:1:\"1\";old_last_login|s:10:\"1618072283\";last_check|i:1618072398;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('fa86ug9q19c00q07eaehgu3npi6ghqpp','::1',1618073192,0,1,'admin@admin.com','__ci_last_regenerate|i:1618073192;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";first_name|s:5:\"Admin\";last_name|s:8:\"istrator\";avatar|s:11:\"default.jpg\";group_name|s:5:\"admin\";user_id|s:1:\"1\";old_last_login|s:10:\"1618072283\";last_check|i:1618072398;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('74co0h7g59ult91923jibqtm7ddd5i3l','::1',1618073423,0,1,'admin@admin.com','__ci_last_regenerate|i:1618073192;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";first_name|s:5:\"Admin\";last_name|s:8:\"istrator\";avatar|s:11:\"default.jpg\";group_name|s:5:\"admin\";user_id|s:1:\"1\";old_last_login|s:10:\"1618072283\";last_check|i:1618072398;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('5tu18j2uuuf0h7clin3842v4jkh31t7g','::1',1618217607,0,NULL,NULL,'__ci_last_regenerate|i:1618217607;'),
('id8p27tfvjtbdgmp9btpv5g0k82r5q8j','::1',1618217608,0,1,'admin@admin.com','__ci_last_regenerate|i:1618217608;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";first_name|s:5:\"Admin\";last_name|s:8:\"istrator\";avatar|s:11:\"default.jpg\";group_name|s:5:\"admin\";user_id|s:1:\"1\";old_last_login|s:10:\"1618072398\";last_check|i:1618217608;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('9qdl07qhree1n6hi5hm9dn0uusmc1hnu','::1',1618217608,0,1,'admin@admin.com','__ci_last_regenerate|i:1618217608;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";first_name|s:5:\"Admin\";last_name|s:8:\"istrator\";avatar|s:11:\"default.jpg\";group_name|s:5:\"admin\";user_id|s:1:\"1\";old_last_login|s:10:\"1618072398\";last_check|i:1618217608;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";message|s:29:\"<p>Logged In Successfully</p>\";__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}'),
('1ihmud0cpjlqklgb4ah1pf8ddob9geu0','::1',1618217896,0,NULL,NULL,'__ci_last_regenerate|i:1618217896;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";first_name|s:5:\"Admin\";last_name|s:8:\"istrator\";avatar|s:11:\"default.jpg\";group_name|s:5:\"admin\";user_id|s:1:\"1\";old_last_login|s:10:\"1618217608\";last_check|i:1618217896;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('0j61e128v8bucbt6g884l71bg8pn8h1h','::1',1618218400,0,1,'admin@admin.com','__ci_last_regenerate|i:1618218400;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";first_name|s:5:\"Admin\";last_name|s:8:\"istrator\";avatar|s:11:\"default.jpg\";group_name|s:5:\"admin\";user_id|s:1:\"1\";old_last_login|s:10:\"1618217608\";last_check|i:1618217896;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('m1qoves25oeb98iipbvcr2terp3p1p09','::1',1618218972,0,1,'admin@admin.com','__ci_last_regenerate|i:1618218972;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";first_name|s:5:\"Admin\";last_name|s:8:\"istrator\";avatar|s:11:\"default.jpg\";group_name|s:5:\"admin\";user_id|s:1:\"1\";old_last_login|s:10:\"1618217608\";last_check|i:1618217896;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('6488jq8m051u5kqo69rjvmqo51e78tve','::1',1618219290,0,1,'admin@admin.com','__ci_last_regenerate|i:1618219290;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";first_name|s:5:\"Admin\";last_name|s:8:\"istrator\";avatar|s:11:\"default.jpg\";group_name|s:5:\"admin\";user_id|s:1:\"1\";old_last_login|s:10:\"1618217608\";last_check|i:1618217896;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('t5tbegtqmqb5n91i9pb0u2m2ke30bsah','::1',1618219619,0,1,'admin@admin.com','__ci_last_regenerate|i:1618219619;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";first_name|s:5:\"Admin\";last_name|s:8:\"istrator\";avatar|s:11:\"default.jpg\";group_name|s:5:\"admin\";user_id|s:1:\"1\";old_last_login|s:10:\"1618217608\";last_check|i:1618217896;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('qo8janajt2kpf79tod0lf4mu629a678f','::1',1618219920,0,1,'admin@admin.com','__ci_last_regenerate|i:1618219920;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";first_name|s:5:\"Admin\";last_name|s:8:\"istrator\";avatar|s:11:\"default.jpg\";group_name|s:5:\"admin\";user_id|s:1:\"1\";old_last_login|s:10:\"1618217608\";last_check|i:1618217896;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";message|s:71:\"<p>The New Password field must be at least 8 characters in length.</p>\n\";__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}'),
('im6hd79op61tvcmtrq97i7aol79le0q7','::1',1618220203,0,NULL,NULL,'__ci_last_regenerate|i:1618220203;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";first_name|s:9:\"Elizabeth\";last_name|s:6:\"Carver\";avatar|s:23:\"Testimonial-Girl-13.jpg\";group_name|s:5:\"admin\";user_id|s:1:\"1\";old_last_login|s:10:\"1618217896\";last_check|i:1618220203;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('dfadic6dvudorlfpm82hc60n6gud3d75','::1',1618221405,0,1,'admin@admin.com','__ci_last_regenerate|i:1618221405;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";first_name|s:9:\"Elizabeth\";last_name|s:6:\"Carver\";avatar|s:23:\"Testimonial-Girl-13.jpg\";group_name|s:5:\"admin\";user_id|s:1:\"1\";old_last_login|s:10:\"1618217896\";last_check|i:1618220203;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('rpc2l4arem56sk39nfup6afn06vt9idf','::1',1618221719,0,1,'admin@admin.com','__ci_last_regenerate|i:1618221719;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";first_name|s:9:\"Elizabeth\";last_name|s:6:\"Carver\";avatar|s:23:\"Testimonial-Girl-13.jpg\";group_name|s:5:\"admin\";user_id|s:1:\"1\";old_last_login|s:10:\"1618217896\";last_check|i:1618220203;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('sln7j5893u5sqhi1jaujatqsqhqtl4tf','::1',1618222032,0,1,'admin@admin.com','__ci_last_regenerate|i:1618222032;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";first_name|s:9:\"Elizabeth\";last_name|s:6:\"Carver\";avatar|s:23:\"Testimonial-Girl-13.jpg\";group_name|s:5:\"admin\";user_id|s:1:\"1\";old_last_login|s:10:\"1618217896\";last_check|i:1618220203;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('qh0agf42q02bi34lllnh50jlqgs9hhrh','::1',1618222336,0,1,'admin@admin.com','__ci_last_regenerate|i:1618222336;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";first_name|s:9:\"Elizabeth\";last_name|s:6:\"Carver\";avatar|s:23:\"Testimonial-Girl-13.jpg\";group_name|s:5:\"admin\";user_id|s:1:\"1\";old_last_login|s:10:\"1618217896\";last_check|i:1618220203;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('8df6lrollftbsq4e8nosddl2pvhq4ipb','::1',1618222767,0,1,'admin@admin.com','__ci_last_regenerate|i:1618222767;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";first_name|s:9:\"Elizabeth\";last_name|s:6:\"Carver\";avatar|s:23:\"Testimonial-Girl-13.jpg\";group_name|s:5:\"admin\";user_id|s:1:\"1\";old_last_login|s:10:\"1618217896\";last_check|i:1618220203;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('irc9avr9o3k1egfoe3qdr7drhi6t5hf8','::1',1618223131,0,1,'admin@admin.com','__ci_last_regenerate|i:1618223131;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";first_name|s:9:\"Elizabeth\";last_name|s:6:\"Carver\";avatar|s:23:\"Testimonial-Girl-13.jpg\";group_name|s:5:\"admin\";user_id|s:1:\"1\";old_last_login|s:10:\"1618217896\";last_check|i:1618220203;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('tnljh60d3t18ea1e7mqkca32t5tt7v9u','::1',1618223549,0,1,'admin@admin.com','__ci_last_regenerate|i:1618223549;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";first_name|s:9:\"Elizabeth\";last_name|s:6:\"Carver\";avatar|s:23:\"Testimonial-Girl-13.jpg\";group_name|s:5:\"admin\";user_id|s:1:\"1\";old_last_login|s:10:\"1618217896\";last_check|i:1618220203;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('q4vhichgjkaamv4kmn8qba1p0l4iv7qo','::1',1618223926,0,1,'admin@admin.com','__ci_last_regenerate|i:1618223926;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";first_name|s:9:\"Elizabeth\";last_name|s:6:\"Carver\";avatar|s:23:\"Testimonial-Girl-13.jpg\";group_name|s:5:\"admin\";user_id|s:1:\"1\";old_last_login|s:10:\"1618217896\";last_check|i:1618220203;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('17mack9safr1eokrfkhinvqsncb9ecin','::1',1618224234,0,1,'admin@admin.com','__ci_last_regenerate|i:1618224234;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";first_name|s:9:\"Elizabeth\";last_name|s:6:\"Carver\";avatar|s:23:\"Testimonial-Girl-13.jpg\";group_name|s:5:\"admin\";user_id|s:1:\"1\";old_last_login|s:10:\"1618217896\";last_check|i:1618220203;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('k16dm73lu132v6f4am261m2uju6fen2p','::1',1618224973,0,1,'admin@admin.com','__ci_last_regenerate|i:1618224973;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";first_name|s:9:\"Elizabeth\";last_name|s:6:\"Carver\";avatar|s:23:\"Testimonial-Girl-13.jpg\";group_name|s:5:\"admin\";user_id|s:1:\"1\";old_last_login|s:10:\"1618217896\";last_check|i:1618220203;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('o39vgb4j8buoooq0ae1qe3l045sljunu','::1',1618225431,0,1,'admin@admin.com','__ci_last_regenerate|i:1618225431;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";first_name|s:9:\"Elizabeth\";last_name|s:6:\"Carver\";avatar|s:23:\"Testimonial-Girl-13.jpg\";group_name|s:5:\"admin\";user_id|s:1:\"1\";old_last_login|s:10:\"1618217896\";last_check|i:1618220203;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('autgh6ohu4jjs896e0cqfqffr6tuobho','::1',1618225847,0,1,'admin@admin.com','__ci_last_regenerate|i:1618225847;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";first_name|s:9:\"Elizabeth\";last_name|s:6:\"Carver\";avatar|s:23:\"Testimonial-Girl-13.jpg\";group_name|s:5:\"admin\";user_id|s:1:\"1\";old_last_login|s:10:\"1618217896\";last_check|i:1618220203;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";'),
('auqm9ngngmpo6ussqrta5k6ju1vsg3qn','::1',1618226146,0,1,'admin@admin.com','__ci_last_regenerate|i:1618225847;identity|s:15:\"admin@admin.com\";email|s:15:\"admin@admin.com\";first_name|s:9:\"Elizabeth\";last_name|s:6:\"Carver\";avatar|s:23:\"Testimonial-Girl-13.jpg\";group_name|s:5:\"admin\";user_id|s:1:\"1\";old_last_login|s:10:\"1618217896\";last_check|i:1618220203;ion_auth_session_hash|s:40:\"6583d6c4f205998ecacc9f51b68a2a2e44ea0006\";');

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
(3,'rita_garrett','President-Rita Garrett'),
(4,'lori_nichols','Vice President-Lori Nichols'),
(5,'ramesh_anand','Secretary/Treasurer-Ramesh Anand\r\n');

/*Table structure for table `login_attempts` */

DROP TABLE IF EXISTS `login_attempts`;

CREATE TABLE `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

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
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_email` (`email`),
  UNIQUE KEY `uc_activation_selector` (`activation_selector`),
  UNIQUE KEY `uc_forgotten_password_selector` (`forgotten_password_selector`),
  UNIQUE KEY `uc_remember_selector` (`remember_selector`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `users` */

insert  into `users`(`id`,`ip_address`,`username`,`password`,`email`,`activation_selector`,`activation_code`,`forgotten_password_selector`,`forgotten_password_code`,`forgotten_password_time`,`remember_selector`,`remember_code`,`created_on`,`last_login`,`active`,`first_name`,`last_name`,`company`,`phone`,`avatar`,`group_name`,`is_deleted`) values 
(1,'127.0.0.1','administrator','$2y$12$1p1JveSFacSEXNrusb38z.FNAJyxpvSrzWxoHt01lYc5p1PsxHalW','admin@admin.com',NULL,'',NULL,NULL,NULL,NULL,NULL,1268889823,1618220203,1,'Elizabeth','Carver','ADMIN','0','Testimonial-Girl-13.jpg','admin',0),
(5,'::1',NULL,'$2y$10$DURI4j/.rFFlJYMUdITuyu.ocR1gFQV1VkYniMk9SrKXk/GDoDGw2','demo@president.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1618071819,1618072307,1,'Ellaa','Smitson','none','123456789','default.jpg','rita_garrett',0);

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

/*Data for the table `users_groups` */

insert  into `users_groups`(`id`,`user_id`,`group_id`) values 
(1,1,1),
(8,5,2);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
