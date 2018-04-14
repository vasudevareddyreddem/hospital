/*
SQLyog Community v11.52 (64 bit)
MySQL - 10.1.21-MariaDB : Database - hospital
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`hospital` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `hospital`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) DEFAULT NULL,
  `a_email_id` varchar(250) DEFAULT NULL,
  `a_username` varchar(250) DEFAULT NULL,
  `a_password` varchar(250) DEFAULT NULL,
  `a_org_password` varchar(250) DEFAULT NULL,
  `a_name` varchar(250) DEFAULT NULL,
  `a_mobile` varchar(250) DEFAULT NULL,
  `a_profile_pic` varchar(250) DEFAULT NULL,
  `a_status` int(11) DEFAULT '0',
  `a_create_at` datetime DEFAULT NULL,
  `a_updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`a_id`,`role_id`,`a_email_id`,`a_username`,`a_password`,`a_org_password`,`a_name`,`a_mobile`,`a_profile_pic`,`a_status`,`a_create_at`,`a_updated_at`) values (1,1,'admin@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Admin','8500050944','1523699251.png',1,'2018-02-21 11:15:43',NULL),(2,8,'team@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Software Team','8500050944','1523699376.png',1,NULL,NULL),(3,2,'vasu@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','vasu hosp',NULL,'',1,'2018-02-22 15:26:03','2018-04-14 15:20:11'),(4,3,'rec@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Receptionist','9874563211',NULL,1,'2018-02-22 19:01:23',NULL),(5,3,'rec1@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','res2','6745674674',NULL,1,'2018-02-22 19:03:01','2018-02-23 12:37:24'),(6,3,'rec2@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Receptionist','9874563211',NULL,1,'2018-02-22 19:05:59','2018-02-23 16:31:46'),(7,4,'phr1@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','pharamcy','9874563211',NULL,1,'2018-02-23 12:38:14','2018-04-12 15:00:45'),(8,5,'lab@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','lab ass','9874563211',NULL,1,'2018-02-23 12:40:59','2018-04-12 15:04:33'),(9,6,'doc@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','doctor','9874563211',NULL,1,'2018-02-23 12:45:32','2018-04-12 15:02:37'),(10,2,'bayapu@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Hospital Admin','8500226782',NULL,1,'2018-02-23 12:46:16',NULL),(11,3,'bayph1@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Resource','9874563211',NULL,1,'2018-02-23 12:49:59',NULL),(12,6,'doc2@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','doc2','9874563211',NULL,1,'2018-02-23 13:13:08','2018-04-12 15:02:57'),(13,6,'doc3@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','doc0','9874563211',NULL,1,'2018-02-23 13:13:48','2018-04-12 15:03:18'),(15,3,'phrtytry1@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','res4','9874563211',NULL,1,'2018-02-23 15:07:33','2018-04-12 14:59:05'),(16,6,'doctor6@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','doctor6','6745674674',NULL,1,'2018-02-26 11:17:08','2018-04-12 15:03:35'),(20,6,'vasu1234567ghfg@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','doct3','1234567896',NULL,1,'2018-03-21 14:58:20','2018-04-12 15:04:23'),(21,2,'reddemvasu@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Hospital Admin','8500001236',NULL,1,'2018-04-09 10:20:26',NULL),(22,3,'siva@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','k siva','7896541235',NULL,1,'2018-04-12 14:49:29','2018-04-12 14:55:53'),(23,2,'nn@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','utyu',NULL,NULL,1,'2018-04-12 15:14:07','2018-04-12 15:22:32'),(24,2,'reddemchinna@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Hospital Admin','8521478965',NULL,1,'2018-04-13 16:04:55',NULL),(25,2,'siva2@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456',NULL,NULL,NULL,1,'2018-04-14 15:24:49','2018-04-14 16:01:59'),(26,5,'Resources1@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Resources1','6756767777',NULL,1,'2018-04-14 15:36:35','2018-04-14 16:00:44'),(27,2,'674567@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Hospital Admin','6474657456',NULL,1,'2018-04-14 15:42:37',NULL),(28,6,'Resources2@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Resources 2','06756767777',NULL,1,'2018-04-14 15:54:13',NULL),(29,2,'tirupati@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456',NULL,NULL,NULL,1,'2018-04-14 16:26:53','2018-04-14 16:33:54'),(30,3,'tirupathires1@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','tirupathi resources 1','8500050944',NULL,1,'2018-04-14 16:35:55',NULL),(31,4,'tirupathires2@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','tirupathires2','8688683222',NULL,1,'2018-04-14 16:37:37',NULL),(32,5,'tirupathires3@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','k siva66','7896541235',NULL,1,'2018-04-14 16:38:38',NULL),(33,6,'tirupathires4@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','tirupathires3','8500050944',NULL,1,'2018-04-14 16:39:42',NULL);

/*Table structure for table `admin_chating` */

DROP TABLE IF EXISTS `admin_chating`;

CREATE TABLE `admin_chating` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sender_id` int(11) DEFAULT NULL,
  `comments` text,
  `image` varchar(250) DEFAULT NULL,
  `reciver_id` varchar(250) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `type` enum('Replay','Replayed') DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

/*Data for the table `admin_chating` */

insert  into `admin_chating`(`id`,`sender_id`,`comments`,`image`,`reciver_id`,`create_at`,`type`,`create_by`) values (7,1,'testing like this','1523511916.csv','11','2018-04-12 11:15:15','Replay',1),(8,1,'testing like this','1523511916.csv','10','2018-04-12 11:15:15','Replay',1),(9,1,'testing like this','1523511916.csv','9','2018-04-12 11:15:15','Replay',1),(11,1,'gud u ','1523513512.docx','9','2018-04-12 11:41:52','Replayed',3),(12,1,'testing','','9','2018-04-12 11:43:00','Replayed',3),(16,1,'testing purpose','','11','2018-04-12 12:40:33','Replay',1),(17,1,'testing purpose','','10','2018-04-12 12:40:33','Replay',1),(18,1,'testing purpose','','9','2018-04-12 12:40:33','Replay',1),(19,1,'testing lethat ','','','2018-04-12 12:44:47','Replay',1),(20,1,'hello admin garu','','11','2018-04-12 12:45:30','Replayed',21),(21,1,'ghdfghdfgh','','9','2018-04-12 16:53:50','Replayed',3),(22,3,'hellooo 5656','','13','2018-04-12 17:32:15','Replay',3),(23,3,'hellooo 5656','','12','2018-04-12 17:32:15','Replay',3),(24,1,'hjgh','','11','2018-04-13 17:03:02','Replay',1),(25,1,'hello tirupathi','','16','2018-04-14 16:31:02','Replay',1),(26,1,'hi ','','16','2018-04-14 16:33:29','Replayed',29);

/*Table structure for table `announcements` */

DROP TABLE IF EXISTS `announcements`;

CREATE TABLE `announcements` (
  `int_id` int(11) NOT NULL AUTO_INCREMENT,
  `hos_id` int(11) DEFAULT NULL,
  `comment` text,
  `create_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `sent_by` int(11) DEFAULT NULL,
  `readcount` int(11) DEFAULT '1',
  PRIMARY KEY (`int_id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

/*Data for the table `announcements` */

insert  into `announcements`(`int_id`,`hos_id`,`comment`,`create_at`,`status`,`sent_by`,`readcount`) values (26,11,'fhfgh','2018-04-13 10:37:24',1,1,1),(27,10,'fhfgh','2018-04-13 10:37:24',1,1,0),(28,12,'fhfgh','2018-04-13 10:37:24',1,1,0),(29,9,'fhfgh','2018-04-13 10:37:24',1,1,0),(30,11,'hh','2018-04-13 10:43:17',1,1,1),(31,10,'hh','2018-04-13 10:43:17',1,1,1),(32,12,'hh','2018-04-13 10:43:17',1,1,1),(33,9,'hh','2018-04-13 10:43:17',1,1,0),(34,9,'fgfdg','2018-04-14 10:45:33',1,1,0),(35,11,'fdgdf','2018-04-14 14:27:17',1,1,1),(36,13,'fdgdf','2018-04-14 14:27:17',1,1,1),(37,10,'fdgdf','2018-04-14 14:27:17',1,1,1),(38,12,'fdgdf','2018-04-14 14:27:17',1,1,1),(39,9,'fdgdf','2018-04-14 14:27:17',1,1,1),(40,16,'your hospital is active','2018-04-14 16:31:44',1,1,0);

/*Table structure for table `customers` */

DROP TABLE IF EXISTS `customers`;

CREATE TABLE `customers` (
  `cust_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) DEFAULT NULL,
  `cust_email_id` varchar(250) DEFAULT NULL,
  `cust_password` varchar(250) DEFAULT NULL,
  `cust_org_password` varchar(250) DEFAULT NULL,
  `cust_name` varchar(250) DEFAULT NULL,
  `cust_mobile` varchar(250) DEFAULT NULL,
  `cust_status` int(11) DEFAULT '0',
  `cust_create_at` datetime DEFAULT NULL,
  PRIMARY KEY (`cust_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `customers` */

/*Table structure for table `hospital` */

DROP TABLE IF EXISTS `hospital`;

CREATE TABLE `hospital` (
  `hos_id` int(11) NOT NULL AUTO_INCREMENT,
  `a_id` int(11) DEFAULT NULL,
  `hos_con_number` varchar(250) DEFAULT NULL,
  `hos_email_id` varchar(250) DEFAULT NULL,
  `hos_representative` varchar(250) DEFAULT NULL,
  `hos_rep_contact` varchar(250) DEFAULT NULL,
  `mob_country_code` varchar(250) DEFAULT NULL,
  `hos_rep_mobile` varchar(250) DEFAULT NULL,
  `hos_rep_email` varchar(250) DEFAULT NULL,
  `hos_rep_nationali_id` varchar(250) DEFAULT NULL,
  `hos_rep_add1` varchar(250) DEFAULT NULL,
  `hos_rep_add2` varchar(250) DEFAULT NULL,
  `hos_rep_zipcode` varchar(250) DEFAULT NULL,
  `hos_rep_city` varchar(250) DEFAULT NULL,
  `hos_rep_state` varchar(250) DEFAULT NULL,
  `hos_rep_country` varchar(250) DEFAULT NULL,
  `hos_bas_name` varchar(250) DEFAULT NULL,
  `hos_bas_contact` varchar(250) DEFAULT NULL,
  `hos_bas_email` varchar(250) DEFAULT NULL,
  `hos_bas_nationali_id` varchar(250) DEFAULT NULL,
  `hos_bas_add1` varchar(250) DEFAULT NULL,
  `hos_bas_add2` varchar(250) DEFAULT NULL,
  `hos_bas_zipcode` varchar(250) DEFAULT NULL,
  `hos_bas_city` varchar(250) DEFAULT NULL,
  `hos_bas_state` varchar(250) DEFAULT NULL,
  `hos_bas_country` varchar(250) DEFAULT NULL,
  `hos_bas_document` varchar(250) DEFAULT NULL,
  `hos_bas_logo` varchar(250) DEFAULT NULL,
  `bank_holder_name` varchar(250) DEFAULT NULL,
  `bank_acc_no` varchar(250) DEFAULT NULL,
  `bank_name` varchar(250) DEFAULT NULL,
  `bank_ifsc` varchar(250) DEFAULT NULL,
  `bank_document` varchar(250) DEFAULT NULL,
  `kyc_doc1` varchar(250) DEFAULT NULL,
  `kyc_doc2` varchar(250) DEFAULT NULL,
  `kyc_doc3` varchar(250) DEFAULT NULL,
  `kyc_file1` varchar(250) DEFAULT NULL,
  `kyc_file2` varchar(250) DEFAULT NULL,
  `kyc_file3` varchar(250) DEFAULT NULL,
  `hos_status` int(11) DEFAULT '1',
  `hos_created` datetime DEFAULT NULL,
  `hos_updated_at` datetime DEFAULT NULL,
  `hos_curent_login` int(11) DEFAULT '0',
  `hos_undo` int(11) DEFAULT '0',
  PRIMARY KEY (`hos_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

/*Data for the table `hospital` */

insert  into `hospital`(`hos_id`,`a_id`,`hos_con_number`,`hos_email_id`,`hos_representative`,`hos_rep_contact`,`mob_country_code`,`hos_rep_mobile`,`hos_rep_email`,`hos_rep_nationali_id`,`hos_rep_add1`,`hos_rep_add2`,`hos_rep_zipcode`,`hos_rep_city`,`hos_rep_state`,`hos_rep_country`,`hos_bas_name`,`hos_bas_contact`,`hos_bas_email`,`hos_bas_nationali_id`,`hos_bas_add1`,`hos_bas_add2`,`hos_bas_zipcode`,`hos_bas_city`,`hos_bas_state`,`hos_bas_country`,`hos_bas_document`,`hos_bas_logo`,`bank_holder_name`,`bank_acc_no`,`bank_name`,`bank_ifsc`,`bank_document`,`kyc_doc1`,`kyc_doc2`,`kyc_doc3`,`kyc_file1`,`kyc_file2`,`kyc_file3`,`hos_status`,`hos_created`,`hos_updated_at`,`hos_curent_login`,`hos_undo`) values (9,3,'8500050944','vasu@gmail.com','Representative','1234567899','+91','8019345212','vasurep@gmail.com','12345678987','6767','6756','516172','kadapa','ap','india','vasu hosp','7896541236','vashos@gmail.com','9874563214562','op','opoi','123456','kadapa','ap','india','','1523699412.jpg','ooi','32473655713','opio','SBIN0002672',NULL,'test','test1','test2',NULL,NULL,NULL,1,'2018-02-22 15:26:03','2018-04-14 15:20:11',0,0),(10,10,'8500226782','bayapu@gmail.com','Representative','1234567899','+91','8019345212','vasurep@gmail.com','12345678987','sdfdd','gfdg','516172','kadapa','ap','india','reddem','7896541236','vashos@gmail.com','9874563214562','hgfh','ghfg','516172','kadapa','ap','india','','1521718441.png','ooi','32473655713','SBI','SBIN0002672','','test','test1','test2','1519370232.xlsx','','',1,'2018-02-23 12:46:16','2018-02-23 12:49:06',0,0),(11,21,'8585585858','reddemvasu@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'bayapu',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2018-03-09 10:20:26','2018-04-09 10:22:03',0,0),(12,23,'1236547896','nn@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'utyu','6745658888','gghg@gmail.com','67456756756756','67546','67467','674567','6756','g','ty',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2018-04-12 15:14:07','2018-04-12 15:22:32',0,0),(13,24,'8521478965','reddemchinna@gmail.com','chinna','85000050944','+91','8500050944','CHIINA@GMAI.COM','45678954454','5','test','516172','testing','jkfdfjg','jkjb','chinna','6745658888','gghg@gmail.com','67456756756756','tgtr','tre','674567','6756','g','ty','',NULL,'rtert','675475477','sbi','SBIN0002671','','dfsdfsdf','','','1523618543.docx','','',1,'2018-04-13 16:04:55','2018-04-13 16:52:22',0,0),(14,25,'8688683222','siva2@gmail.com','sivareddy','8688683222','+91','8688683222','siva2@gmail.com','868868322212','test','testtesting','500072','hyd','8688683222','india','sivareddy','8688683222','siva2@gmail.com','8688683222','testing','testing','516172','hyd','8688683222','india','',NULL,'sivareddy','3247365513','sivareddy','SBIN0002671','','testing','','','1523701951.docx','','',1,'2018-04-14 15:24:49','2018-04-14 16:02:30',0,0),(16,29,'8019345212','tirupati@gmail.com','tirupai','8019345212','+91','8019345212','tirupathi1@gmail.com','1234567899','tirupathi','tirupathi','500072','tirupathi','ap','india','Tirupathi','8019345212','tirupatjihos@gmail.com','1234567899','tirupathi','test','500072','tirupathi','ap','india','',NULL,'vasudevareddy','32473655713','sbi','SBIN0002671','','test','','','1523703585.docx','','',1,'2018-04-14 16:26:53','2018-04-14 16:33:54',0,0);

/*Table structure for table `hospital_admin_chating` */

DROP TABLE IF EXISTS `hospital_admin_chating`;

CREATE TABLE `hospital_admin_chating` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `replay_user_id` int(11) DEFAULT NULL,
  `from` int(11) DEFAULT NULL,
  `comment` text,
  `image` varchar(250) DEFAULT NULL,
  `type` enum('Replay','Replayed') DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `updated_by` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

/*Data for the table `hospital_admin_chating` */

insert  into `hospital_admin_chating`(`id`,`user_id`,`replay_user_id`,`from`,`comment`,`image`,`type`,`create_at`,`updated_by`) values (15,12,0,0,'hello','','Replay','2018-04-06 17:33:19','2018-04-06 17:33:19'),(16,12,3,3,'hiii','','Replayed','2018-04-06 17:33:44','2018-04-06 17:33:44'),(17,12,3,3,'hjfg','','Replayed','2018-04-06 17:39:42','2018-04-06 17:39:42'),(18,12,0,0,'ghfgh','','Replay','2018-04-06 17:41:25','2018-04-06 17:41:25'),(19,12,3,3,'jkj','','Replayed','2018-04-06 17:41:31','2018-04-06 17:41:31'),(20,8,0,0,'heoll','','Replay','2018-04-07 17:43:26','2018-04-07 17:43:26'),(21,12,0,0,'ghdfg','','Replay','2018-04-12 16:09:46','2018-04-12 16:09:46'),(22,12,0,0,'yutyu','1523529741.jpg','Replay','2018-04-12 16:12:20','2018-04-12 16:12:20'),(23,16,0,0,'gfhfgh','','Replay','2018-04-12 16:37:17','2018-04-12 16:37:17'),(24,18,3,3,'ggg','','Replayed','2018-04-12 17:37:17','2018-04-12 17:37:17'),(25,20,3,3,'ggg','','Replayed','2018-04-12 17:37:17','2018-04-12 17:37:17'),(26,20,3,3,'nmnbmn','','Replayed','2018-04-12 17:37:42','2018-04-12 17:37:42'),(27,13,3,3,'hhh','','Replayed','2018-04-12 17:39:56','2018-04-12 17:39:56'),(28,12,3,3,'hhh','','Replayed','2018-04-12 17:39:56','2018-04-12 17:39:56'),(29,13,3,3,'hjfghj','','Replayed','2018-04-12 17:40:06','2018-04-12 17:40:06'),(30,13,3,3,'ghfgh','','Replayed','2018-04-12 17:40:12','2018-04-12 17:40:12'),(31,12,3,3,'ghfgh','','Replayed','2018-04-12 17:40:42','2018-04-12 17:40:42'),(32,12,0,0,'jjj','','Replay','2018-04-12 17:41:03','2018-04-12 17:41:03'),(33,12,3,3,'kkkk','','Replayed','2018-04-12 17:41:10','2018-04-12 17:41:10'),(34,13,3,3,'fgfg','1523535179.png','Replayed','2018-04-12 17:42:58','2018-04-12 17:42:58'),(35,13,3,3,'fgdfgfg','','Replayed','2018-04-13 10:46:31','2018-04-13 10:46:31'),(36,12,3,3,'fgdfgfg','','Replayed','2018-04-13 10:46:31','2018-04-13 10:46:31'),(37,18,3,3,'fgdfgfg','','Replayed','2018-04-13 10:46:31','2018-04-13 10:46:31'),(38,20,3,3,'fgdfgfg','','Replayed','2018-04-13 10:46:31','2018-04-13 10:46:31'),(39,19,3,3,'fgdfgfg','','Replayed','2018-04-13 10:46:31','2018-04-13 10:46:31'),(40,9,3,3,'fgdfgfg','','Replayed','2018-04-13 10:46:31','2018-04-13 10:46:31'),(41,16,3,3,'fgdfgfg','','Replayed','2018-04-13 10:46:31','2018-04-13 10:46:31'),(42,22,3,3,'fgdfgfg','','Replayed','2018-04-13 10:46:31','2018-04-13 10:46:31'),(43,8,3,3,'fgdfgfg','','Replayed','2018-04-13 10:46:31','2018-04-13 10:46:31'),(44,17,3,3,'fgdfgfg','','Replayed','2018-04-13 10:46:31','2018-04-13 10:46:31'),(45,30,0,0,'hii hello','','Replay','2018-04-14 16:41:15','2018-04-14 16:41:15'),(46,30,29,29,'hi','','Replayed','2018-04-14 16:41:39','2018-04-14 16:41:39');

/*Table structure for table `hospital_announcements` */

DROP TABLE IF EXISTS `hospital_announcements`;

CREATE TABLE `hospital_announcements` (
  `int_id` int(11) NOT NULL AUTO_INCREMENT,
  `res_id` int(11) DEFAULT NULL,
  `comment` text,
  `create_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `sent_by` int(11) DEFAULT NULL,
  `readcount` int(11) DEFAULT '1',
  PRIMARY KEY (`int_id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

/*Data for the table `hospital_announcements` */

insert  into `hospital_announcements`(`int_id`,`res_id`,`comment`,`create_at`,`status`,`sent_by`,`readcount`) values (34,13,'testing','2018-04-14 10:39:54',1,3,1),(35,12,'testing','2018-04-14 10:39:54',1,3,0),(36,18,'testing','2018-04-14 10:39:54',1,3,1),(37,20,'testing','2018-04-14 10:39:54',1,3,1),(38,19,'testing','2018-04-14 10:39:54',1,3,1),(39,9,'testing','2018-04-14 10:39:54',1,3,1),(40,16,'testing','2018-04-14 10:39:54',1,3,1),(41,22,'testing','2018-04-14 10:39:54',1,3,1),(42,8,'testing','2018-04-14 10:39:54',1,3,1),(43,17,'testing','2018-04-14 10:39:54',1,3,1),(44,30,'hello','2018-04-14 16:40:53',1,29,0);

/*Table structure for table `investigation_patient_list` */

DROP TABLE IF EXISTS `investigation_patient_list`;

CREATE TABLE `investigation_patient_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` int(11) DEFAULT NULL,
  `b_id` int(11) DEFAULT NULL,
  `investigation_type` varchar(250) DEFAULT NULL,
  `countrycode` varchar(250) DEFAULT NULL,
  `contact_number` varchar(250) DEFAULT NULL,
  `frequency` varchar(250) DEFAULT NULL,
  `priority` varchar(250) DEFAULT NULL,
  `investigation_formdate` varchar(250) DEFAULT NULL,
  `investigation_todate` varchar(250) DEFAULT NULL,
  `associate_diagnosis` varchar(250) DEFAULT NULL,
  `associate_problems` varchar(250) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `investigation_patient_list` */

insert  into `investigation_patient_list`(`id`,`p_id`,`b_id`,`investigation_type`,`countrycode`,`contact_number`,`frequency`,`priority`,`investigation_formdate`,`investigation_todate`,`associate_diagnosis`,`associate_problems`,`create_at`,`create_by`,`date`) values (1,8,3,'lab','+91','85000050944','testyt','Low','2018-04-05','2018-04-05','TESTING','likethat','2018-04-05 16:53:44',12,'2018-04-05'),(2,8,3,'Radiology','+91','6767686788','testyt','Low','2018-04-05','2018-04-05','TESTING','likethat','2018-04-07 11:04:18',12,'2018-04-07'),(3,8,5,'lab','+91','6546546456','ghdfg','Medium','2018-04-09','2018-04-09','ghgf','ghdfg','2018-04-09 17:20:53',12,'2018-04-09'),(4,11,9,'lab','+91','85000050944','testyt','High','2018-04-05','2018-04-05','TESTING','likethat','2018-04-09 17:59:47',12,'2018-04-09'),(5,8,3,'lab','+91','1234567899','11','Medium','2018-04-14','2018-04-14','test','test','2018-04-14 17:24:00',12,'2018-04-14'),(6,13,14,'lab','+91','5756756767','676','Low','1899-12-14','2018-04-06','6767','67','2018-04-14 18:11:00',33,'2018-04-14');

/*Table structure for table `lab_detailes` */

DROP TABLE IF EXISTS `lab_detailes`;

CREATE TABLE `lab_detailes` (
  `l_id` int(11) NOT NULL AUTO_INCREMENT,
  `hos_id` int(11) DEFAULT NULL,
  `l_investigation` varchar(250) DEFAULT NULL,
  `l_code` varchar(250) DEFAULT NULL,
  `l_name` varchar(250) DEFAULT NULL,
  `l_assistent_id` int(11) DEFAULT NULL,
  `l_status` int(11) DEFAULT NULL,
  `l_create_at` datetime DEFAULT NULL,
  `l_updated_at` datetime DEFAULT NULL,
  `l_create_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`l_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `lab_detailes` */

insert  into `lab_detailes`(`l_id`,`hos_id`,`l_investigation`,`l_code`,`l_name`,`l_assistent_id`,`l_status`,`l_create_at`,`l_updated_at`,`l_create_by`) values (1,9,'Lab','12345','test1',13,1,'2018-02-26 12:31:35','2018-02-26 12:42:13',3),(2,9,'Lab','67890','test2',13,1,'2018-02-26 12:31:35','2018-02-26 12:31:35',3),(3,9,'Lab','1','name1',13,1,'2018-04-05 14:14:40','2018-04-05 14:14:40',3),(4,9,'Lab','2','name2',13,1,'2018-04-05 14:14:40','2018-04-05 14:14:40',3),(5,9,'Lab','3','kghjk',13,1,'2018-04-05 14:23:41','2018-04-05 14:30:11',3),(6,9,'Lab','jkg','hkghj',13,1,'2018-04-05 15:12:51','2018-04-05 15:12:51',3),(7,16,'Lab','lab1','lab1',19,1,'2018-04-14 16:01:23','2018-04-14 16:01:23',25),(8,16,'Lab','vasu 11','vasulab',23,1,'2018-04-14 17:48:41','2018-04-14 17:48:41',29),(9,16,'Lab','vas lab2','vas lab2',23,1,'2018-04-14 17:49:28','2018-04-14 17:49:28',29);

/*Table structure for table `lab_test_list` */

DROP TABLE IF EXISTS `lab_test_list`;

CREATE TABLE `lab_test_list` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `hos_id` int(11) DEFAULT NULL,
  `t_name` varchar(250) DEFAULT NULL,
  `t_short_form` varchar(250) DEFAULT NULL,
  `t_description` varchar(250) DEFAULT NULL,
  `t_department` varchar(250) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  `update_by` datetime DEFAULT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

/*Data for the table `lab_test_list` */

insert  into `lab_test_list`(`t_id`,`hos_id`,`t_name`,`t_short_form`,`t_description`,`t_department`,`create_at`,`status`,`create_by`,`update_by`) values (1,9,'tpa','tpa short','tpa des','tpa dep','2018-04-05 15:16:28',1,13,NULL),(2,9,'ttt','tt short','tt des','tt dep','2018-04-05 15:16:58',1,13,NULL),(3,9,'name','short name','description','department','2018-04-09 11:24:18',0,8,'0000-00-00 00:00:00'),(5,9,'jkgjk','jkghjk','jhk','kghjk','2018-04-09 12:00:00',1,8,NULL),(6,9,'vasudevareddy','jkjk','jk','kghjk','2018-04-09 12:01:41',1,8,NULL),(18,9,'vasudevareddy','utyu','hgjfgh','hjfgh','2018-04-09 14:20:25',1,8,NULL),(23,9,'vaasu','bnvn','vbnvbn','vbn','2018-04-09 14:33:45',1,8,NULL),(24,9,'hjghj','ghfjgh','gfhjfg','hgfj','2018-04-09 14:35:51',1,8,NULL),(25,9,'ghfg','ghfg','ghfdgh','fgfdg','2018-04-09 17:13:12',1,8,NULL),(26,16,'blood','short form','Description','dep','2018-04-14 17:10:21',1,32,NULL),(27,16,'sugar','short form','Description','dep','2018-04-14 17:10:45',1,32,NULL),(28,16,'vasu test1','jfhj','hjhjh','jhjkhh','2018-04-14 17:50:25',1,32,NULL),(29,16,'fgh','ghfg','ghfg','hfgh','2018-04-14 17:59:18',1,32,NULL),(30,16,'ghfgh','gfhfg','fghfgh','gghgf','2018-04-14 18:01:02',1,32,NULL);

/*Table structure for table `medicine_list` */

DROP TABLE IF EXISTS `medicine_list`;

CREATE TABLE `medicine_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hos_id` int(11) DEFAULT NULL,
  `hsn` varchar(250) DEFAULT NULL,
  `othercode` varchar(250) DEFAULT NULL,
  `medicine_name` varchar(250) DEFAULT NULL,
  `qty` varchar(250) DEFAULT NULL,
  `sgst` varchar(250) DEFAULT NULL,
  `cgst` varchar(250) DEFAULT NULL,
  `other` varchar(250) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `added_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

/*Data for the table `medicine_list` */

insert  into `medicine_list`(`id`,`hos_id`,`hsn`,`othercode`,`medicine_name`,`qty`,`sgst`,`cgst`,`other`,`create_at`,`status`,`added_by`,`updated_at`) values (3,9,'1','jfgj','ghjfgh','7','77','7','7','2018-03-29 14:26:01',1,21,NULL),(4,9,'hjh','fgfg','fgdf','12','12','12','21','2018-03-29 14:41:37',1,21,NULL),(5,9,'hjh','fgfg','fgdf','12','12','12','21','2018-03-29 14:42:09',1,21,NULL),(6,9,'yty','yty','vasu','7','87','78','8','2018-03-29 14:42:32',1,21,NULL),(7,9,'yuyt','ytu','vasu','12','12','12','1','2018-03-29 14:43:08',1,21,NULL),(8,9,'yuyt','ytu','vasu','12','12','12','1','2018-03-29 14:43:52',1,21,NULL),(9,9,'12','21','vasu','1','1','1','1','2018-03-29 14:46:38',1,21,NULL),(10,9,'123','212','vasu12','2','2','2','2','2018-03-29 14:47:22',1,21,'2018-03-29 16:12:26'),(11,9,'2','rt','deva','10','10','10','145','2018-03-29 14:48:09',1,21,'2018-03-29 16:12:26'),(12,9,'testing','fg','reddy','10','101','010','12','2018-03-29 14:48:10',1,21,NULL),(13,9,'f','fdg','vasu','10','23','31','21','2018-03-29 14:48:10',1,21,NULL),(14,9,'ghdfg','hfgh','fghfghf','10','10','10','10','2018-03-29 14:49:38',1,21,NULL),(15,16,'1','code','tablet1','18','10','10','ntg','2018-04-14 17:15:12',1,31,'2018-04-14 17:21:05'),(16,16,'2','code2','tablet2','250','12','13','ntg','2018-04-14 17:15:13',1,31,NULL);

/*Table structure for table `medicine_name` */

DROP TABLE IF EXISTS `medicine_name`;

CREATE TABLE `medicine_name` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hos_id` int(11) DEFAULT NULL,
  `medicine_name` varchar(250) DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `medicine_name` */

insert  into `medicine_name`(`id`,`hos_id`,`medicine_name`,`added_by`,`create_at`,`status`) values (1,9,'vasu',21,'2018-03-29 14:42:09',1),(2,9,'vasu',21,'2018-03-29 14:42:32',1),(3,9,'deva',21,'2018-03-29 14:48:09',1),(4,9,'reddy',21,'2018-03-29 14:48:10',1),(5,9,'fghfghf',21,'2018-03-29 14:49:38',1),(6,16,'tablet1',31,'2018-04-14 17:15:12',1),(7,16,'tablet2',31,'2018-04-14 17:15:13',1);

/*Table structure for table `notifications` */

DROP TABLE IF EXISTS `notifications`;

CREATE TABLE `notifications` (
  `int_id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` text,
  `create_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `create_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`int_id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

/*Data for the table `notifications` */

insert  into `notifications`(`int_id`,`comment`,`create_at`,`status`,`create_by`) values (27,'nbcvnvbn','2018-04-13 10:56:39',1,2),(28,'yyyy','2018-04-13 11:00:10',1,2),(29,'yuty','2018-04-13 11:04:14',1,2),(30,'testig purpose','2018-04-14 11:41:17',1,2);

/*Table structure for table `patient_billing` */

DROP TABLE IF EXISTS `patient_billing`;

CREATE TABLE `patient_billing` (
  `b_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` int(11) DEFAULT NULL,
  `visit_no` varchar(250) DEFAULT NULL,
  `visit_desc` varchar(250) DEFAULT NULL,
  `date_of_visit` varchar(250) DEFAULT NULL,
  `department` varchar(250) DEFAULT NULL,
  `docotr_name` varchar(250) DEFAULT NULL,
  `no_of_visits` varchar(250) DEFAULT NULL,
  `last_visiting_date` varchar(250) DEFAULT NULL,
  `service_type` varchar(250) DEFAULT NULL,
  `service` varchar(250) DEFAULT NULL,
  `visit_type` varchar(250) DEFAULT NULL,
  `doctor` varchar(250) DEFAULT NULL,
  `payer` varchar(250) DEFAULT NULL,
  `price` varchar(250) DEFAULT NULL,
  `qty` varchar(250) DEFAULT NULL,
  `amount` varchar(250) DEFAULT NULL,
  `bill` varchar(250) DEFAULT NULL,
  `patient_payer_deposit_amount` varchar(250) DEFAULT NULL,
  `payment_mode` varchar(250) DEFAULT NULL,
  `bill_amount` varchar(250) DEFAULT NULL,
  `received_form` varchar(250) DEFAULT NULL,
  `treatment_id` varchar(250) DEFAULT NULL,
  `doct_id` varchar(250) DEFAULT NULL,
  `completed` int(11) DEFAULT '0',
  `create_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `doctor_status` int(11) DEFAULT '0',
  `assign_doctor_to` int(11) DEFAULT NULL,
  `assign_doctor_by` int(11) DEFAULT NULL,
  `completed_type` int(11) DEFAULT NULL,
  `type` varchar(250) DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  `medicine_payment_mode` varchar(250) DEFAULT NULL,
  `payment_updated_by` int(11) DEFAULT '0',
  `payment_createed_by` datetime DEFAULT NULL,
  `report_completed` int(11) DEFAULT '0',
  PRIMARY KEY (`b_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `patient_billing` */

insert  into `patient_billing`(`b_id`,`p_id`,`visit_no`,`visit_desc`,`date_of_visit`,`department`,`docotr_name`,`no_of_visits`,`last_visiting_date`,`service_type`,`service`,`visit_type`,`doctor`,`payer`,`price`,`qty`,`amount`,`bill`,`patient_payer_deposit_amount`,`payment_mode`,`bill_amount`,`received_form`,`treatment_id`,`doct_id`,`completed`,`create_at`,`updated_at`,`doctor_status`,`assign_doctor_to`,`assign_doctor_by`,`completed_type`,`type`,`create_by`,`medicine_payment_mode`,`payment_updated_by`,`payment_createed_by`,`report_completed`) values (1,8,'klk','kl','2018-03-20  ','kl','kl','12','2018-03-20  ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2018-03-20 18:43:59',NULL,0,NULL,NULL,NULL,'new',NULL,NULL,0,NULL,0),(2,8,'klk','yty','2018-03-20','kl','kl','12','2018-03-20',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2018-03-20 18:45:31',NULL,0,NULL,NULL,1,'reschedule',NULL,NULL,0,NULL,0),(3,8,'klk','yty','2018-03-20','kl','kl','12','2018-03-20',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'cash','45000','vasudevareddy','1','12',1,'2018-03-20 18:52:04','2018-03-21 15:54:33',1,0,0,1,'new',12,'Swipe',7,'2018-04-14 17:31:09',1),(4,8,'46456','ff','2018-03-20','phy','ttt','df','2018-03-21  ','testing','staff','yty','test','vaasudevareddy','456321','10','25000','due','45000','cash','45000','vasudevareddy','1','12',1,'2018-03-21 10:34:22','2018-03-21 15:54:33',1,0,0,2,'reschedule',12,'Cash Payment',7,'2018-04-07 15:35:10',1),(5,8,'12','12','1899-12-21  ','df','dfsdf','sdfds','2018-04-04  ','dfds','fsdfd','sdf','fsdf','dfasdf','df','34','4343','34343','343432','4234','34234','34234','2','12',1,'2018-04-03 11:29:17','2018-04-03 11:30:01',1,0,0,2,'reschedule',12,NULL,0,NULL,0),(9,11,'123456','visit','2018-04-09  ','yuty','kl','12','2018-03-20','testing','staff','yty','test','vaasudevareddy','456321','12','25000','25000','45000','cash','45000','vasudevareddy','1','12',1,'2018-04-09 17:52:31','2018-04-09 17:53:41',1,0,0,2,'new',12,NULL,0,NULL,0),(10,12,'1234566','visit des','2018-04-13  ','test','vasudevareddy','10','2014-06-04  ','Service type','Service','Visit type','Doctor','Payer','Price','12','25000','50000','250000','cash',' 25000','vasudevareddy','1','12',1,'2018-04-13 17:41:10','2018-04-13 17:42:41',0,NULL,NULL,NULL,'new',NULL,NULL,0,NULL,0),(11,12,'1234566',' Visit description','2018-04-13  ','test','vasudevareddy','10','2018-04-13  ','Service type','Service','Visit type','Doctor','Payer','Price','12','25000','50000','250000','cash','25000','vasudevareddy','1','12',1,'2018-04-13 17:44:15','2018-04-13 17:44:37',0,NULL,NULL,NULL,'reschedule',NULL,NULL,0,NULL,0),(12,8,'12','hfgh','2018-04-14  ','df','dfsdf','sdfds','2018-04-15  ','dfds','fsdfd','sdf','fsdf','dfasdf','df','34','4343','34343','343432','4234','34234','ffg','1','12',1,'2018-04-14 12:51:07','2018-04-14 12:51:26',0,NULL,NULL,NULL,'reschedule',NULL,NULL,0,NULL,0),(13,13,'vasu','test','2018-04-14  ','test','vasu','123','2018-04-14  ','test','test','test','test','test','25000','12','25888','vasu','250000','cashmode','2500','vasudevareddy','7','33',1,'2018-04-14 16:48:23','2018-04-14 16:49:01',1,0,0,1,'new',33,NULL,0,NULL,0),(14,13,'123','test','2018-04-14  ','test','vasu','123','2018-04-14  ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'300','cash ','300','casu','7','33',1,'2018-04-14 17:06:09','2018-04-14 17:07:00',1,0,0,2,'new',33,NULL,0,NULL,1);

/*Table structure for table `patient_lab_reports` */

DROP TABLE IF EXISTS `patient_lab_reports`;

CREATE TABLE `patient_lab_reports` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` int(11) DEFAULT NULL,
  `b_id` int(11) DEFAULT NULL,
  `hos_id` int(11) DEFAULT NULL,
  `problem` varchar(250) DEFAULT NULL,
  `symptoms` varchar(250) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `create_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `patient_lab_reports` */

insert  into `patient_lab_reports`(`id`,`p_id`,`b_id`,`hos_id`,`problem`,`symptoms`,`image`,`create_at`,`status`,`create_by`) values (1,8,3,9,'2','22','1523273542.docx','2018-04-09 17:02:22',1,8),(5,8,3,9,'fgfd','fg','1523274144.docx','2018-04-09 17:12:23',1,8),(6,8,3,9,'blood test','fgfg',NULL,'2018-04-09 17:12:23',1,8),(7,8,3,9,'uytyu','ytutyu','1523274175.docx','2018-04-09 17:12:55',1,8),(9,8,4,9,'cvxcv','xcvxzcv','1523274704.docx','2018-04-09 17:21:44',1,8),(10,8,5,9,'vbxcvb','vcbxcv','1523274729.docx','2018-04-09 17:22:09',1,8),(11,8,5,9,'gg','hfgh','1523275182.docx','2018-04-09 17:29:42',1,8),(12,11,9,9,'DFDSF','SDFSDF','1523277017.pdf','2018-04-09 18:00:16',1,8),(13,8,3,9,'hjgh','hgjgh','1523278691.docx','2018-04-09 18:28:11',1,8),(14,8,3,9,'hjgh','hgjgh','1523278734.docx','2018-04-09 18:28:53',1,8),(15,8,3,9,'ghdfg','gfhfdg','1523278920.docx','2018-04-09 18:32:00',1,8),(16,8,4,9,'test2','test','1523706923.docx','2018-04-14 17:25:23',1,8),(17,13,14,16,'test','trest','1523710801.docx','2018-04-14 18:30:01',1,32);

/*Table structure for table `patient_lab_test_list` */

DROP TABLE IF EXISTS `patient_lab_test_list`;

CREATE TABLE `patient_lab_test_list` (
  `it` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` int(11) DEFAULT NULL,
  `b_id` int(11) DEFAULT NULL,
  `test_id` int(11) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `date` date DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`it`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

/*Data for the table `patient_lab_test_list` */

insert  into `patient_lab_test_list`(`it`,`p_id`,`b_id`,`test_id`,`create_at`,`date`,`create_by`,`status`) values (1,8,3,1,'2018-04-05 16:13:39','2018-04-05',12,1),(2,8,3,1,'2018-04-05 16:17:22','2018-04-05',12,1),(3,8,3,1,'2018-04-05 16:20:45','2018-04-05',12,1),(4,8,3,1,'2018-04-05 16:22:00','2018-04-05',12,1),(6,8,3,1,'2018-04-05 16:29:25','2018-04-05',12,1),(7,8,3,1,'2018-04-05 16:29:40','2018-04-05',12,1),(8,8,3,1,'2018-04-05 16:29:44','2018-04-05',12,1),(9,8,3,2,'2018-04-05 16:29:44','2018-04-05',12,1),(10,8,3,1,'2018-04-05 16:31:47','2018-04-05',12,1),(11,8,3,1,'2018-04-05 16:36:42','2018-04-05',12,1),(12,8,3,1,'2018-04-05 16:38:17','2018-04-05',12,1),(13,8,3,1,'2018-04-05 16:40:17','2018-04-05',12,1),(14,8,3,2,'2018-04-05 16:40:17','2018-04-05',12,1),(15,8,3,1,'2018-04-05 16:53:14','2018-04-05',12,1),(16,8,3,1,'2018-04-05 17:33:51','2018-04-05',12,1),(17,8,3,2,'2018-04-05 17:33:51','2018-04-05',12,1),(18,8,3,1,'2018-04-05 17:34:51','2018-04-05',12,1),(19,8,3,2,'2018-04-05 17:34:51','2018-04-05',12,1),(20,8,3,1,'2018-04-07 11:02:14','2018-04-07',12,1),(21,8,5,1,'2018-04-09 17:20:36','2018-04-09',12,1),(22,8,5,2,'2018-04-09 17:20:36','2018-04-09',12,1),(23,11,9,1,'2018-04-09 17:59:29','2018-04-09',12,1),(24,11,9,2,'2018-04-09 17:59:29','2018-04-09',12,1),(25,8,3,1,'2018-04-14 17:23:24','2018-04-14',12,1),(26,8,3,2,'2018-04-14 17:23:28','2018-04-14',12,1),(27,8,3,1,'2018-04-14 17:23:28','2018-04-14',12,1),(28,8,3,2,'2018-04-14 17:23:28','2018-04-14',12,1),(29,13,14,26,'2018-04-14 18:10:40','2018-04-14',33,1),(30,13,14,27,'2018-04-14 18:10:40','2018-04-14',33,1),(31,13,14,28,'2018-04-14 18:10:40','2018-04-14',33,1),(32,13,14,30,'2018-04-14 18:10:40','2018-04-14',33,1);

/*Table structure for table `patient_medicine_list` */

DROP TABLE IF EXISTS `patient_medicine_list`;

CREATE TABLE `patient_medicine_list` (
  `m_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` int(11) DEFAULT NULL,
  `b_id` int(11) DEFAULT NULL,
  `type_of_medicine` varchar(250) DEFAULT NULL,
  `medicine_name` varchar(250) DEFAULT NULL,
  `substitute_name` varchar(250) DEFAULT NULL,
  `condition` varchar(250) DEFAULT NULL,
  `dosage` varchar(250) DEFAULT NULL,
  `route` varchar(250) DEFAULT NULL,
  `frequency` varchar(250) DEFAULT NULL,
  `directions` varchar(250) DEFAULT NULL,
  `formdate` varchar(250) DEFAULT NULL,
  `todate` varchar(250) DEFAULT NULL,
  `qty` varchar(250) DEFAULT NULL,
  `units` varchar(250) DEFAULT NULL,
  `comments` text,
  `create_at` datetime DEFAULT NULL,
  `date` date DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  `edit_reason` text,
  `edited` int(11) DEFAULT '0',
  `edited_by` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `patient_medicine_list` */

insert  into `patient_medicine_list`(`m_id`,`p_id`,`b_id`,`type_of_medicine`,`medicine_name`,`substitute_name`,`condition`,`dosage`,`route`,`frequency`,`directions`,`formdate`,`todate`,`qty`,`units`,`comments`,`create_at`,`date`,`create_by`,`edit_reason`,`edited`,`edited_by`,`amount`) values (3,8,4,'Brand','AK','Yes','PRN','350 g','Mouth','Write Your Own','dfsd','03 April 2018','03 April 2018','45','es','fd','2018-04-03 18:31:58','2018-04-03',12,'ghg',1,7,458),(4,8,4,'Brand','HI','Yes','Chronic','350 g','Mouth','At Bedtime','hj','06 April 2018','07 April 2018','12','suppository','g','2018-04-05 11:27:44','2018-04-05',12,'hjfghj',1,7,45),(5,8,4,'Generic','fgdf','Yes','Chronic','350 g','Mouth','Every Three Hours','tyrt','07 April 2018','07 April 2018','34','mg','dfsdfds','2018-04-07 10:46:29','2018-04-07',12,'ghjfgh',1,7,456),(6,8,3,'Generic','fgdf','Yes','PRN','550 g','Mouth','Every Three Hours While Awake','hjfgh','07 April 2018','06 April 2018','67','pound','uytu','2018-04-07 10:57:48','2018-04-07',12,'ghg',1,7,120),(8,13,13,'Generic','tablet2','Yes','Chronic','350 g','Mouth','Four Times Per Day','test','21 April 2018','22 April 2018','12','suppository','ntg','2018-04-14 17:18:44','2018-04-14',33,NULL,0,NULL,NULL),(9,8,3,'Generic','fgdf','Yes','PRN','150 g','Mouth','Single Dose','test','14 April 2018','14 April 2018','34','suppository','test','2018-04-14 17:28:47','2018-04-14',12,NULL,1,7,250);

/*Table structure for table `patient_vitals_list` */

DROP TABLE IF EXISTS `patient_vitals_list`;

CREATE TABLE `patient_vitals_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` int(11) DEFAULT NULL,
  `b_id` int(11) DEFAULT NULL,
  `assessment_type` varchar(250) DEFAULT NULL,
  `vitaltype` varchar(250) DEFAULT NULL,
  `tep_actuals` varchar(250) DEFAULT NULL,
  `tep_range` varchar(250) DEFAULT NULL,
  `temp_site_positioning` varchar(250) DEFAULT NULL,
  `notes` text,
  `pulse_actuals` varchar(250) DEFAULT NULL,
  `pulse_range` varchar(250) DEFAULT NULL,
  `pulse_rate_rhythm` varchar(250) DEFAULT NULL,
  `pulse_rate_vol` varchar(250) DEFAULT NULL,
  `notes1` varchar(250) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

/*Data for the table `patient_vitals_list` */

insert  into `patient_vitals_list`(`id`,`p_id`,`b_id`,`assessment_type`,`vitaltype`,`tep_actuals`,`tep_range`,`temp_site_positioning`,`notes`,`pulse_actuals`,`pulse_range`,`pulse_rate_rhythm`,`pulse_rate_vol`,`notes1`,`create_at`,`date`) values (3,8,7,'Infection','Chief complaint','1','2','5','11','2','21','2','2','2','2018-04-03 14:17:58','2018-04-03'),(4,8,7,'Infection','Chief complaint','55','55','555','22','11','33','44','99','88','2018-04-03 14:25:43','2018-04-03'),(11,8,3,'Infection','Chief complaint','1','2','3','4','5','6','7','8','9','2018-04-07 10:55:36','2018-04-07'),(12,0,0,NULL,NULL,'1','1','1','1','1','1','11','1','1','2018-04-09 17:45:20','2018-04-09'),(13,0,0,NULL,NULL,'1','2','3','4','5','6','7','8','9','2018-04-09 17:56:05','2018-04-09'),(14,11,9,NULL,NULL,'1','2','3','4','5','6','7','8','9','2018-04-09 17:57:47','2018-04-09'),(15,11,9,'Infection','Chief complaint','1','2','3','4','5','6','6','6','8','2018-04-09 17:59:03','2018-04-09'),(16,12,10,NULL,NULL,'1','2','3','4','5','6','7','8','9','2018-04-13 17:43:07','2018-04-13'),(17,12,11,NULL,NULL,'1','2','3','4','5','6','7','8','9','2018-04-13 17:44:52','2018-04-13'),(18,8,12,NULL,NULL,'1','2','3','4','5','6','7','8','9','2018-04-14 12:51:32','2018-04-14'),(19,13,13,NULL,NULL,'1','2','3','4','56','45','8','9','10','2018-04-14 16:50:32','2018-04-14'),(20,13,14,NULL,NULL,'1','2','3','4','56','45','8','9','10','2018-04-14 17:07:07','2018-04-14');

/*Table structure for table `patients_list_1` */

DROP TABLE IF EXISTS `patients_list_1`;

CREATE TABLE `patients_list_1` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `hos_id` int(11) DEFAULT NULL,
  `registrationtype` varchar(250) DEFAULT NULL,
  `patient_category` varchar(250) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `mobile` varchar(45) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `age` varchar(250) DEFAULT NULL,
  `bloodgroup` varchar(250) DEFAULT NULL,
  `martial_status` varchar(250) DEFAULT NULL,
  `nationali_id` varchar(250) DEFAULT NULL,
  `perment_address` varchar(250) DEFAULT NULL,
  `p_c_name` varchar(250) DEFAULT NULL,
  `p_s_name` varchar(250) DEFAULT NULL,
  `p_zipcode` varchar(250) DEFAULT NULL,
  `p_country_name` varchar(250) DEFAULT NULL,
  `temp_address` varchar(250) DEFAULT NULL,
  `t_c_name` varchar(250) DEFAULT NULL,
  `t_s_name` varchar(250) DEFAULT NULL,
  `t_zipcode` varchar(250) DEFAULT NULL,
  `t_country_name` varchar(250) DEFAULT NULL,
  `religion` varchar(250) DEFAULT NULL,
  `caste` varchar(250) DEFAULT NULL,
  `mothername` varchar(250) DEFAULT NULL,
  `language` varchar(250) DEFAULT NULL,
  `primarylanguage` varchar(250) DEFAULT NULL,
  `preferred_language` varchar(250) DEFAULT NULL,
  `occupation` varchar(250) DEFAULT NULL,
  `education` varchar(250) DEFAULT NULL,
  `birth_place` varchar(250) DEFAULT NULL,
  `work_phone` varchar(250) DEFAULT NULL,
  `home_phone` varchar(250) DEFAULT NULL,
  `citizen_proof` varchar(250) DEFAULT NULL,
  `patient_identifier` varchar(250) DEFAULT NULL,
  `relation` varchar(250) DEFAULT NULL,
  `first_name` varchar(250) DEFAULT NULL,
  `middel_name` varchar(250) DEFAULT NULL,
  `last_name` varchar(250) DEFAULT NULL,
  `next_address1` varchar(250) DEFAULT NULL,
  `next_address2` varchar(250) DEFAULT NULL,
  `next_pincode` varchar(250) DEFAULT NULL,
  `next_city` varchar(250) DEFAULT NULL,
  `next_state` varchar(250) DEFAULT NULL,
  `next_country` varchar(250) DEFAULT NULL,
  `next_email` varchar(250) DEFAULT NULL,
  `next_mobile` varchar(250) DEFAULT NULL,
  `next_occupation` varchar(250) DEFAULT NULL,
  `referred` varchar(250) DEFAULT NULL,
  `internal_external` varchar(250) DEFAULT NULL,
  `search_doctor` varchar(250) DEFAULT NULL,
  `relationship` varchar(250) DEFAULT NULL,
  `g_first_name` varchar(250) DEFAULT NULL,
  `g_middel_name` varchar(250) DEFAULT NULL,
  `g_last_name` varchar(250) DEFAULT NULL,
  `gender` varchar(250) DEFAULT NULL,
  `nationality` varchar(250) DEFAULT NULL,
  `g_language` varchar(250) DEFAULT NULL,
  `living` varchar(250) DEFAULT NULL,
  `g_address1` varchar(250) DEFAULT NULL,
  `g_address2` varchar(250) DEFAULT NULL,
  `g_pincode` varchar(250) DEFAULT NULL,
  `g_city` varchar(250) DEFAULT NULL,
  `g_state` varchar(250) DEFAULT NULL,
  `g_country` varchar(250) DEFAULT NULL,
  `payer_name` varchar(250) DEFAULT NULL,
  `payer_mobile` varchar(250) DEFAULT NULL,
  `payer_address` varchar(250) DEFAULT NULL,
  `dependency` varchar(250) DEFAULT NULL,
  `arrangement` varchar(250) DEFAULT NULL,
  `incomegroup` varchar(250) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `confidential` varchar(250) DEFAULT NULL,
  `student` varchar(250) DEFAULT NULL,
  `barcode` varchar(250) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `patients_list_1` */

insert  into `patients_list_1`(`pid`,`hos_id`,`registrationtype`,`patient_category`,`name`,`mobile`,`email`,`dob`,`age`,`bloodgroup`,`martial_status`,`nationali_id`,`perment_address`,`p_c_name`,`p_s_name`,`p_zipcode`,`p_country_name`,`temp_address`,`t_c_name`,`t_s_name`,`t_zipcode`,`t_country_name`,`religion`,`caste`,`mothername`,`language`,`primarylanguage`,`preferred_language`,`occupation`,`education`,`birth_place`,`work_phone`,`home_phone`,`citizen_proof`,`patient_identifier`,`relation`,`first_name`,`middel_name`,`last_name`,`next_address1`,`next_address2`,`next_pincode`,`next_city`,`next_state`,`next_country`,`next_email`,`next_mobile`,`next_occupation`,`referred`,`internal_external`,`search_doctor`,`relationship`,`g_first_name`,`g_middel_name`,`g_last_name`,`gender`,`nationality`,`g_language`,`living`,`g_address1`,`g_address2`,`g_pincode`,`g_city`,`g_state`,`g_country`,`payer_name`,`payer_mobile`,`payer_address`,`dependency`,`arrangement`,`incomegroup`,`description`,`confidential`,`student`,`barcode`,`create_at`,`create_by`,`updated_at`) values (8,9,'New','Staff','testtttt','85000050944','vasu@gmail.com','2018-03-19','27','o','Single','123456789014444','kothappli','mydukur','ap','516172','india','kukatpalli village','hyd','ts','50007','india','hj','oc','lakshmi','English','English','Telugu','job','btech','kothappli','8500050944','8019345212','Yes','','Relation','vasu','deve','reddy','test','test','516172','hyd',' ts','india','vasu@gmail.com','8500050944','job','vasu','internal','somethig','Relationship','First name','Last name','Last name','Female','Nationality','Telugu','Living dependency','XGFD','FGFD','516172','CITY','TS','FHF','jhgh','85222000212','ghjghjfgh','ytutyu','yutyu','ytutyu','yturtyu','yturtyu','ytuytu','15214532188.png','2018-04-03 12:37:01',15,'2018-04-03 12:37:12'),(9,9,'','','','','','0000-00-00','','','','','','','','','','','','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'15232635149.png','2018-04-09 14:15:14',8,NULL),(10,9,'New','VIP','gh','6756767777','utyuty@gmail.com','0000-00-00','56','b','Single','67546767567','fghfg','gfhfg','hf','65555','india','gfhfgh','gfgh','fghdfg','563456','india','tyty','tyerty','tyty','English','English','Telugu','ghdfg','hdfgh','67567','6756745667','6756767666','Yes','1523275514.png','hfgj','fghjfgh','jgfhj','jfgh','gfhjfg','hjfgh','666666','jfgh','hgjfg','hjgfh','hgfjg@gmail.com','67657677767','jfghjgfh','fgfdg','fdgdf','fdgdf','fgsdfg','fdgdfg','gfdg','fgdf','Other','567676765','English','gfhfdgh','ghdfg','hfghdf','676756','ghdfgh','6756','6765','gfhhf','6767657677','ghfg','gfhfg','hdfghf','hfdgh','ghdfg','fghfdg','hfghfd','152327549310.png','2018-04-09 17:34:52',5,'2018-04-09 17:43:57'),(11,9,'New','International cash','bayapureddy','85000226782','bayapu@gmail.com','1992-04-09','27','o positive','Single','96321458741','kothappla','mydukur','ap','516172','india','hyd','hyd','ts','516172','india','indin','oc','test','Telugu','Telugu','Telugu','emp','btech','kothapalli','1236547895','7412589632','Yes','','Relation','bayapu','reddy','test','likethat','address','516172','hyd','ts','inid','india@gmail.com','7412589632','emp','vasu','internal','somethig','Relationship','First name','Last name','Last name','Male','Nationality','Telugu','Living dependency','test','testing','516172','CITY','TS','FHF','jhgh','85222000212','ghfgh','ytutyu','yutyu','ytutyu','ytu','yturtyu','ytuytu','152327635111.png','2018-04-09 17:49:11',6,'2018-04-09 17:51:32'),(12,9,'New','Pay Patient','chinnareddem','8500050944','chinnna@gmail.com','2018-04-13','25','B positive','Single','1234567899','fdgfdg','fgdfg','gdfg','516172','india','dfhsjh','jjkhj','hjhj','516172','india','Religion','Caste','Mothers maiden name','Telugu','Telugu','Telugu','emp','btech','kothapalli','8500050944','8019345212','No','','Relation','reddem','Middle name','Last name','Address1','Address2','516172','hyd','ap','india','india@gmail.com','8500050944','emp','vaasu','vassudevareddy','vasudevareddy','Relationship','First name','Middle name','Last name','Male','Nationality','Telugu','Living dependency','Address1','Address2','516172','City','State','Country','vasudevareddy','8500050944','address','Living dependency','Living arrangement','Income group','Description','Confidential','studen','152362119912.png','2018-04-13 17:36:39',6,'2018-04-13 17:40:23'),(13,16,'New','VIP','vasudevareddy','8500050944','vasuforu@gmail.com','2018-04-14','25','b positive','Single','1234567895','test','tirupathi','AP','516172','India','test','kadapa','AP','51172','INDIA','Religion','Caste','laskshmi','Telugu','Telugu','Telugu','emp','btech','kothapalli','8019345212','8500050944','Yes','','Relation','First name','Middle name','Last name','test','test','516172','tirupathi','AP','India','vasuforu@gmail.com','08500050944','emp','vasu','internal','vasu','Relationship','First name','Middle name','Last name','Male','12345678','Telugu','test','test','test','516172','tirupathi','AP','India','vasu','08500050944','test','Living dependency','Living arrangement','Income group','Description','Confidential','student','152370445413.png','2018-04-14 16:44:13',30,'2018-04-14 16:48:04');

/*Table structure for table `resource_chating` */

DROP TABLE IF EXISTS `resource_chating`;

CREATE TABLE `resource_chating` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `replay_user_id` int(11) DEFAULT NULL,
  `to` int(11) DEFAULT NULL,
  `comment` text,
  `image` varchar(250) DEFAULT NULL,
  `type` enum('Replay','Replayed') DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `updated_by` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

/*Data for the table `resource_chating` */

insert  into `resource_chating`(`id`,`user_id`,`replay_user_id`,`to`,`comment`,`image`,`type`,`create_at`,`updated_by`) values (34,12,0,5,'hi','','Replay','2018-04-06 15:55:16','2018-04-06 15:55:16'),(35,5,0,12,'hello','','Replay','2018-04-06 15:55:33','2018-04-06 15:55:33'),(36,12,0,5,'how are you','','Replay','2018-04-06 15:57:54','2018-04-06 15:57:54'),(39,5,0,12,'gud u ','','Replay','2018-04-06 15:59:40','2018-04-06 15:59:40'),(40,8,0,17,'helo','','Replay','2018-04-07 17:43:13','2018-04-07 17:43:13');

/*Table structure for table `resource_list` */

DROP TABLE IF EXISTS `resource_list`;

CREATE TABLE `resource_list` (
  `r_id` int(11) NOT NULL AUTO_INCREMENT,
  `a_id` int(11) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `hos_id` int(11) DEFAULT NULL,
  `resource_name` varchar(250) DEFAULT NULL,
  `resource_mobile` varchar(45) DEFAULT NULL,
  `resource_add1` varchar(250) DEFAULT NULL,
  `resource_add2` varchar(250) DEFAULT NULL,
  `resource_city` varchar(250) DEFAULT NULL,
  `resource_state` varchar(250) DEFAULT NULL,
  `resource_zipcode` varchar(250) DEFAULT NULL,
  `resource_other_details` text,
  `resource_contatnumber` varchar(45) DEFAULT NULL,
  `resource_email` varchar(250) DEFAULT NULL,
  `resource_photo` varchar(250) DEFAULT NULL,
  `resource_document` varchar(250) DEFAULT NULL,
  `resource_bank_holdername` varchar(250) DEFAULT NULL,
  `resource_bank_accno` varchar(250) DEFAULT NULL,
  `resource_ifsc_code` varchar(250) DEFAULT NULL,
  `resource_other_document` varchar(250) DEFAULT NULL,
  `r_status` int(11) DEFAULT NULL,
  `r_created_at` datetime DEFAULT NULL,
  `r_updated_at` datetime DEFAULT NULL,
  `r_create_by` int(11) DEFAULT NULL,
  `current_status` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

/*Data for the table `resource_list` */

insert  into `resource_list`(`r_id`,`a_id`,`role_id`,`hos_id`,`resource_name`,`resource_mobile`,`resource_add1`,`resource_add2`,`resource_city`,`resource_state`,`resource_zipcode`,`resource_other_details`,`resource_contatnumber`,`resource_email`,`resource_photo`,`resource_document`,`resource_bank_holdername`,`resource_bank_accno`,`resource_ifsc_code`,`resource_other_document`,`r_status`,`r_created_at`,`r_updated_at`,`r_create_by`,`current_status`) values (1,2,3,9,'res1',NULL,NULL,'fghd','hyd','ts',NULL,'fnjhdf','8527418527','rec@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,2,'2018-02-22 19:01:23','2018-02-23 10:42:37',3,NULL),(2,5,3,9,'res2','6745674674','hjfghj','jgfhj','fgfdg','ts',NULL,'fnjhdf','8527418527','rec1@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,2,'2018-02-23 12:37:24','2018-02-23 15:44:33',3,NULL),(3,6,3,9,'res3','9874563211','uyi','yuopyo','fgfdg','ts','516172','fnjhdf','8527418527','rec2@gmail.com',NULL,NULL,'vasudevareddy','32472655713','SBIN0002671',NULL,2,'2018-02-23 16:31:46','2018-02-23 16:33:53',3,NULL),(4,7,4,9,'pharamcy','9874563211','pharamcy','pharamcy','hyd','ta','516172','fnjhdf','8527418527','phr1@gmail.com',NULL,NULL,'ghgfh','6547657567','SBIN0002671',NULL,1,'2018-04-12 15:00:45',NULL,3,NULL),(5,8,5,9,'lab ass','9874563211','gfgd','ghfgdhfgh','kadapa','ap','516172','ntg','8500050944','lab@gmail.com',NULL,NULL,'vasu','1234567896','SBIN0002612',NULL,1,'2018-04-12 15:04:33',NULL,3,NULL),(6,9,6,9,'doctor','9874563211','dfdg','fgdfg','fgfdg','ts','516172','fnjhdf','8527418527','doc@gmail.com',NULL,NULL,'ghgfh','6547657567','SBIN0002671',NULL,0,'2018-04-12 15:02:37','2018-02-23 16:32:47',3,NULL),(7,11,3,10,'bayares2','9874563211','ytuytu','tyuu','fgfdg','ts',NULL,'fnjhdf','8527418527','bayph1@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,1,'2018-02-23 12:49:59',NULL,10,NULL),(8,12,6,9,'doc2','9874563211','fggj','jghj','hjfgj','hjfghj','516172','hjfgh','8527418527','doc2@gmail.com',NULL,NULL,'ghgfh','6547657567','SBIN0002671',NULL,1,'2018-04-12 15:02:57',NULL,3,NULL),(9,13,6,9,'doc0','9874563211','add','add3','hyd','ts','32216','ntg','8500050944','doc3@gmail.com',NULL,NULL,'fgfdg','1234567896','SBIN0002612',NULL,0,'2018-04-12 15:03:18','2018-02-23 16:30:24',3,NULL),(11,15,3,9,'res4','9874563211','tyrt','ytyt','fgfdg','ts','516172','fnjhdf','8527418527','phrtytry1@gmail.com','1519382821.jpg','11519382633.xlsx','vasudevareddy','32472655713','SBIN0002671','1519382733.docx',1,'2018-04-12 14:59:05',NULL,3,NULL),(12,16,6,9,'doctor6','6745674674','test','test4','fgfdg','ts','516172','fnjhdf','8527418527','doctor6@gmail.com','1519645893.jpg','11519624028.docx','vasudevareddy','32473655712','SBIN0002671','1519645871.docx',1,'2018-04-12 15:03:35',NULL,3,NULL),(13,17,5,9,'lab assistent','8500050944','kothapalli','testing','hyd','ap','516172','tg','8500050944','labassistent@gmail.com','1519627355.jpg','','vasudevareddy','32472655713','SBIN0002671','',1,'2018-04-12 15:01:50',NULL,3,NULL),(14,18,6,9,'doct1','1234567896','fg','gfdg','fdfgh','gfhfg','12345','ghfgh','6456756767','vasu1234567@gmail.com','','','vasudevareddy','1236547896','SBIN0002672','',1,'2018-04-12 15:03:49',NULL,3,NULL),(15,19,6,9,'doct4','1234567896','uiyu','uui','u','gfhfg','12345','ghfgh','146355676577','vasu1234fgfh567@gmail.com','','','vasudevareddy','1236547896','SBIN0002672','',1,'2018-04-12 15:03:58',NULL,3,NULL),(16,20,6,9,'doct3','1234567896','dgdf','gdfg','fdfgh','gfhfg','12345','ghfgh','6456756767','vasu1234567ghfg@gmail.com','','','vasudevareddy','1236547896','SBIN0002672','',1,'2018-04-12 15:04:23',NULL,3,NULL),(18,22,3,9,'k siva','7896541235','cvxcv','xzcvzxcv','kadapa','ap','516172','testing','75166767678','siva@gmail.com','','','ghgfh','6547657567','SBIN0002671','',1,'2018-04-12 14:55:53',NULL,3,NULL),(19,26,5,14,'Resources1','6756767777','test','test','city','state','500072','Other Details)','6756767777','Resources1@gmail.com','','','vasudevareddy','123456789','SBIN0002671','',1,'2018-04-14 16:00:44',NULL,25,NULL),(20,28,6,14,'Resources 2','06756767777','fghfg','fghfg','gfhfg','hf','65555','','06756767777','Resources2@gmail.com','','','gfg','1236547896','SBIN0002671','',1,'2018-04-14 15:54:13',NULL,25,NULL),(21,30,3,16,'tirupathi resources 1','8500050944','test','test','tirupathi','ap','500072','ntg','8500050944','tirupathires1@gmail.com','','','ghgfh','6547657567','SBIN0002671','',1,'2018-04-14 16:35:55',NULL,29,NULL),(22,31,4,16,'tirupathires2','8688683222','test','test','tirupathi','ap','500072','ntg','8500050944','tirupathires2@gmail.com','','','test','4546675677','SBIN0002671','',1,'2018-04-14 16:37:37',NULL,29,NULL),(23,32,5,16,'k siva66','7896541235','test','test','tirupathi','ap','516172','ntg','8500050944','tirupathires3@gmail.com','','','ghgfh','6547657567','SBIN0002671','',1,'2018-04-14 16:38:38',NULL,29,NULL),(24,33,6,16,'tirupathires3','8500050944','test','test','tirupathi','ap','516172','ntg','8500050944','tirupathires4@gmail.com','','','ghgfh','6547657567','SBIN0002671','',1,'2018-04-14 16:39:42',NULL,29,NULL);

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `r_id` int(11) NOT NULL AUTO_INCREMENT,
  `r_name` varchar(250) DEFAULT NULL,
  `r_status` int(11) DEFAULT '1',
  PRIMARY KEY (`r_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `roles` */

insert  into `roles`(`r_id`,`r_name`,`r_status`) values (1,'Admin',1),(2,'Hospital Admin',1),(3,'Receptionist',1),(4,'Pharmacy',1),(5,'lab coordinator',1),(6,'Doctor',1),(7,'Patient',1),(8,'Software team',1);

/*Table structure for table `team_chating` */

DROP TABLE IF EXISTS `team_chating`;

CREATE TABLE `team_chating` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `replay_user_id` int(11) DEFAULT NULL,
  `from` int(11) DEFAULT NULL,
  `comment` text,
  `image` varchar(250) DEFAULT NULL,
  `type` enum('Replay','Replayed') DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `updated_by` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

/*Data for the table `team_chating` */

insert  into `team_chating`(`id`,`user_id`,`replay_user_id`,`from`,`comment`,`image`,`type`,`create_at`,`updated_by`) values (50,3,0,0,'hello','','Replay','2018-04-12 15:23:42','2018-04-12 15:23:42'),(51,3,2,2,'hi','','Replayed','2018-04-12 15:24:34','2018-04-12 15:24:34'),(52,12,0,0,'hello 777','','Replay','2018-04-12 15:39:30','2018-04-12 15:39:30'),(53,3,2,2,'hjfghj','','Replayed','2018-04-12 15:44:36','2018-04-12 15:44:36'),(54,3,2,2,'fgdfg','1523528106.csv','Replayed','2018-04-12 15:45:05','2018-04-12 15:45:05'),(55,3,2,2,'hgjgh','','Replayed','2018-04-12 15:46:29','2018-04-12 15:46:29'),(56,3,0,0,'hey','','Replay','2018-04-12 15:52:44','2018-04-12 15:52:44'),(57,3,0,0,'hello','','Replay','2018-04-12 15:59:59','2018-04-12 15:59:59'),(58,3,0,0,'uityui','1523529335.docx','Replay','2018-04-12 16:05:34','2018-04-12 16:05:34'),(59,12,0,0,'tyrt','','Replay','2018-04-12 16:09:36','2018-04-12 16:09:36'),(60,15,0,0,'yuytuy','','Replay','2018-04-12 16:36:15','2018-04-12 16:36:15');

/*Table structure for table `treament` */

DROP TABLE IF EXISTS `treament`;

CREATE TABLE `treament` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `hos_id` int(11) DEFAULT NULL,
  `t_name` varchar(250) DEFAULT NULL,
  `t_status` int(11) DEFAULT NULL,
  `t_create_at` datetime DEFAULT NULL,
  `t_updated_at` datetime DEFAULT NULL,
  `t_create_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `treament` */

insert  into `treament`(`t_id`,`hos_id`,`t_name`,`t_status`,`t_create_at`,`t_updated_at`,`t_create_by`) values (1,9,'anglogyi',1,'2018-02-23 17:14:24','2018-02-23 17:49:23',3),(2,9,'test166',1,'2018-02-23 17:15:29','2018-02-23 17:49:46',3),(3,9,'test166',1,'2018-02-23 17:50:01','2018-02-23 17:50:11',3),(4,14,'treatment1',1,'2018-04-14 15:27:43',NULL,25),(5,14,'treatment2',1,'2018-04-14 15:27:49',NULL,25),(6,14,'treatment3',1,'2018-04-14 15:27:54',NULL,25),(7,16,'Treatment1',1,'2018-04-14 16:51:36',NULL,29),(8,16,'Treatment2',1,'2018-04-14 16:51:48',NULL,29);

/*Table structure for table `treatmentwise_doctors` */

DROP TABLE IF EXISTS `treatmentwise_doctors`;

CREATE TABLE `treatmentwise_doctors` (
  `t_d_id` int(11) NOT NULL AUTO_INCREMENT,
  `hos_id` int(11) DEFAULT NULL,
  `t_d_doc_id` int(11) DEFAULT NULL,
  `t_d_name` varchar(250) DEFAULT NULL,
  `t_d_status` int(11) DEFAULT NULL,
  `t_d_create_at` datetime DEFAULT NULL,
  `t_d_updated_at` datetime DEFAULT NULL,
  `t_d_create_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`t_d_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

/*Data for the table `treatmentwise_doctors` */

insert  into `treatmentwise_doctors`(`t_d_id`,`hos_id`,`t_d_doc_id`,`t_d_name`,`t_d_status`,`t_d_create_at`,`t_d_updated_at`,`t_d_create_by`) values (19,9,12,'1',1,'2018-03-21 16:40:51','2018-03-21 16:40:51',3),(20,9,18,'2',1,'2018-03-21 16:45:38','2018-03-21 16:45:38',3),(21,9,16,'1',1,'2018-04-05 11:45:33','2018-04-05 11:45:33',3),(22,14,26,'4',1,'2018-04-14 15:58:20','2018-04-14 15:58:20',25),(23,14,28,'5',1,'2018-04-14 15:58:29','2018-04-14 15:58:29',25),(24,16,33,'7',1,'2018-04-14 16:52:04','2018-04-14 16:52:04',29),(25,16,33,'8',1,'2018-04-14 16:52:10','2018-04-14 16:52:10',29),(26,16,33,'7',1,'2018-04-14 17:49:01','2018-04-14 17:49:01',29);

/*Table structure for table `vital_comments` */

DROP TABLE IF EXISTS `vital_comments`;

CREATE TABLE `vital_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` int(11) DEFAULT NULL,
  `b_id` int(11) DEFAULT NULL,
  `comments` varchar(250) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `vital_comments` */

insert  into `vital_comments`(`id`,`p_id`,`b_id`,`comments`,`created_at`,`create_by`) values (1,8,3,'hjfgh','2018-04-07 10:48:16',12),(2,8,3,'jkgjhk','2018-04-07 10:50:39',12),(3,8,3,'hjhg','2018-04-07 10:54:11',12);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
