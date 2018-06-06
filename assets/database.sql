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
  `out_source` int(11) DEFAULT '0',
  `create_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`a_id`,`role_id`,`a_email_id`,`a_username`,`a_password`,`a_org_password`,`a_name`,`a_mobile`,`a_profile_pic`,`a_status`,`a_create_at`,`a_updated_at`,`out_source`,`create_by`) values (60,1,'admin@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Admin','8500050944','1527833238.jpg',1,'2018-05-21 11:58:34','2018-06-01 13:21:04',0,NULL),(71,8,'team@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Team','8500050944',NULL,1,NULL,NULL,0,NULL),(74,2,'vasu@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456',NULL,'8500050944',NULL,1,'2018-06-01 17:15:42','2018-06-04 16:26:11',0,NULL),(75,3,'recption@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','recption','86785678678',NULL,1,'2018-06-01 17:19:19','2018-06-01 17:20:08',0,NULL),(76,6,'doc@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Doctor siva','8500050944',NULL,1,'2018-06-01 17:22:34','2018-06-02 11:52:41',0,NULL),(77,5,'lab@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','lab','86785678678',NULL,1,'2018-06-01 17:43:34','2018-06-04 17:16:19',0,NULL),(78,4,'phar@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Pharmacy','8500050944',NULL,1,'2018-06-02 10:45:58',NULL,0,NULL),(79,5,'outlab@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','out sources lab','8500050944',NULL,1,'2018-06-02 12:49:23','2018-06-04 17:38:25',1,60),(80,6,'recp@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Doctor siva','86785678678',NULL,1,'2018-06-02 17:27:34','2018-06-04 17:22:21',0,NULL),(81,5,'outlab2@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','out sources lab2','8500050944',NULL,1,'2018-06-04 16:21:52',NULL,1,60);

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
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

/*Data for the table `admin_chating` */

insert  into `admin_chating`(`id`,`sender_id`,`comments`,`image`,`reciver_id`,`create_at`,`type`,`create_by`) values (43,79,'hello','',NULL,'2018-06-04 13:07:32','Replayed',79),(44,79,'hi','',NULL,'2018-06-04 13:12:51','Replayed',79),(45,74,'hi','','27','2018-06-04 13:15:04','Replayed',74);

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
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

/*Data for the table `announcements` */

insert  into `announcements`(`int_id`,`hos_id`,`comment`,`create_at`,`status`,`sent_by`,`readcount`) values (26,11,'fhfgh','2018-04-13 10:37:24',1,1,1),(27,10,'fhfgh','2018-04-13 10:37:24',1,1,0),(28,12,'fhfgh','2018-04-13 10:37:24',1,1,0),(29,9,'fhfgh','2018-04-13 10:37:24',1,1,0),(30,11,'hh','2018-04-13 10:43:17',1,1,1),(31,10,'hh','2018-04-13 10:43:17',1,1,1),(32,12,'hh','2018-04-13 10:43:17',1,1,1),(33,9,'hh','2018-04-13 10:43:17',1,1,0),(34,9,'fgfdg','2018-04-14 10:45:33',1,1,0),(35,11,'fdgdf','2018-04-14 14:27:17',1,1,1),(36,13,'fdgdf','2018-04-14 14:27:17',1,1,1),(37,10,'fdgdf','2018-04-14 14:27:17',1,1,1),(38,12,'fdgdf','2018-04-14 14:27:17',1,1,1),(39,9,'fdgdf','2018-04-14 14:27:17',1,1,1),(40,16,'your hospital is active','2018-04-14 16:31:44',1,1,0),(41,17,'your  hospital is active','2018-04-18 18:30:58',1,1,0),(42,25,'hi  hello','2018-05-31 14:55:38',1,1,0),(43,26,'hi  hello','2018-05-31 14:55:38',1,1,1),(44,25,'hello','2018-05-31 16:44:28',1,1,0),(45,26,'hello','2018-05-31 16:44:28',1,1,1),(46,25,'hello','2018-06-01 12:13:19',1,1,0),(47,26,'hello','2018-06-01 12:13:19',1,1,0),(48,25,'ghgh','2018-06-01 12:17:08',1,1,0),(49,26,'ghgh','2018-06-01 12:17:08',1,1,1),(50,25,'uiui','2018-06-01 12:19:39',1,1,0),(51,26,'uiui','2018-06-01 12:19:39',1,1,0),(52,25,'iuiuiuiyu','2018-06-01 12:19:46',1,1,0),(53,26,'iuiuiuiyu','2018-06-01 12:19:46',1,1,1),(54,27,'hi  vasu','2018-06-02 15:28:24',1,60,1),(55,27,'test','2018-06-02 15:29:47',1,60,0),(56,27,'jfghj','2018-06-02 16:25:38',1,60,1),(57,27,'ououio','2018-06-02 16:26:29',1,60,1);

/*Table structure for table `bidding_test` */

DROP TABLE IF EXISTS `bidding_test`;

CREATE TABLE `bidding_test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `test_id` int(11) DEFAULT NULL,
  `p_l_t_id` int(11) DEFAULT NULL,
  `lab_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT '0' COMMENT '2= accept 3=decline',
  `create_at` datetime DEFAULT NULL,
  `amount` varchar(250) DEFAULT NULL,
  `duration` varchar(250) DEFAULT NULL,
  `send_by` int(11) DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

/*Data for the table `bidding_test` */

insert  into `bidding_test`(`id`,`test_id`,`p_l_t_id`,`lab_id`,`status`,`create_at`,`amount`,`duration`,`send_by`,`create_by`) values (20,26,62,32,1,'2018-04-18 17:43:23',NULL,NULL,NULL,8),(21,26,62,39,4,'2018-04-18 17:43:23','20','5 min',39,8),(22,37,57,32,1,'2018-04-18 17:43:23',NULL,NULL,NULL,8),(23,37,57,39,4,'2018-04-18 17:43:23','34','10 min',39,8),(24,37,54,32,1,'2018-05-14 12:24:03',NULL,NULL,NULL,8),(25,37,54,40,1,'2018-05-14 12:24:03',NULL,NULL,NULL,8),(26,38,55,40,1,'2018-05-14 12:24:03',NULL,NULL,NULL,8),(27,44,77,62,1,'2018-05-22 10:17:22',NULL,NULL,NULL,62),(28,44,77,65,1,'2018-05-22 10:17:22',NULL,NULL,NULL,62),(29,46,86,79,4,'2018-06-04 17:24:29','140','12',79,77),(30,42,83,NULL,1,'2018-06-04 17:24:29',NULL,NULL,NULL,77),(31,43,84,NULL,1,'2018-06-04 17:24:29',NULL,NULL,NULL,77),(32,43,84,NULL,1,'2018-06-04 17:24:29',NULL,NULL,NULL,77);

/*Table structure for table `coupon_codes` */

DROP TABLE IF EXISTS `coupon_codes`;

CREATE TABLE `coupon_codes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `coupon_code` varchar(250) DEFAULT NULL,
  `type` varchar(250) DEFAULT NULL,
  `percentage_amount` varchar(250) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `updated_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `coupon_codes` */

insert  into `coupon_codes`(`id`,`coupon_code`,`type`,`percentage_amount`,`create_at`,`create_by`,`status`,`updated_time`) values (2,'percen','Percentage','10','2018-05-09 15:12:05',1,1,'2018-05-23 18:22:44'),(3,'vasudevareddy','Amount','50','2018-05-09 15:30:23',1,1,NULL),(4,'xaragar','Percentage','10','2018-05-14 11:26:15',1,1,NULL),(5,'vasu','Percentage','10','2018-06-02 12:13:03',60,1,'2018-06-02 12:33:23'),(8,'redbus','Percentage','12','2018-06-02 12:42:08',60,0,'2018-06-02 13:36:42');

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
  `reschedule_date` varchar(250) DEFAULT NULL,
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
  `out_source_lab` int(11) DEFAULT '0',
  `barcode` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`hos_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

/*Data for the table `hospital` */

insert  into `hospital`(`hos_id`,`a_id`,`hos_con_number`,`reschedule_date`,`hos_email_id`,`hos_representative`,`hos_rep_contact`,`mob_country_code`,`hos_rep_mobile`,`hos_rep_email`,`hos_rep_nationali_id`,`hos_rep_add1`,`hos_rep_add2`,`hos_rep_zipcode`,`hos_rep_city`,`hos_rep_state`,`hos_rep_country`,`hos_bas_name`,`hos_bas_contact`,`hos_bas_email`,`hos_bas_nationali_id`,`hos_bas_add1`,`hos_bas_add2`,`hos_bas_zipcode`,`hos_bas_city`,`hos_bas_state`,`hos_bas_country`,`hos_bas_document`,`hos_bas_logo`,`bank_holder_name`,`bank_acc_no`,`bank_name`,`bank_ifsc`,`bank_document`,`kyc_doc1`,`kyc_doc2`,`kyc_doc3`,`kyc_file1`,`kyc_file2`,`kyc_file3`,`hos_status`,`hos_created`,`hos_updated_at`,`hos_curent_login`,`hos_undo`,`out_source_lab`,`barcode`) values (27,74,'8500050944','5 days','vasu@gmail.com','Representative','8500050944','+91','8500050944','Representative@gmail.com','12345678999','test','test','516172','kadapa','Andhra Pradesh','india','vaasu Hospital','8500050944','vaasuhospital@gmail.com','1234567897','test','test','516172','kadapa','Madhya Pradesh','indiA','1527924849.docx','1527924849.jpg','vasudevareddy','32473655713','SBI','SBIN0002671','1527924854.docx','another detals purpose','','','1527853651.docx','','',1,'2018-06-01 17:15:42','2018-06-04 16:26:11',1,0,0,'152785354274.png');

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
  `hos_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=latin1;

/*Data for the table `hospital_admin_chating` */

insert  into `hospital_admin_chating`(`id`,`user_id`,`replay_user_id`,`from`,`comment`,`image`,`type`,`create_at`,`updated_by`,`hos_id`) values (67,76,74,74,'hii','','Replayed','2018-06-04 14:50:48','2018-06-04 14:50:48',27),(68,80,74,74,'hii','','Replayed','2018-06-04 14:50:48','2018-06-04 14:50:48',27),(69,77,74,74,'hii','','Replayed','2018-06-04 14:50:48','2018-06-04 14:50:48',27),(70,78,74,74,'hii','','Replayed','2018-06-04 14:50:48','2018-06-04 14:50:48',27),(71,75,74,74,'hii','','Replayed','2018-06-04 14:50:48','2018-06-04 14:50:48',27),(72,52,60,60,'hhhiii','','Replayed','2018-06-04 15:19:09','2018-06-04 15:19:09',NULL),(73,52,60,60,'hiii','','Replayed','2018-06-04 15:57:27','2018-06-04 15:57:27',NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=latin1;

/*Data for the table `hospital_announcements` */

insert  into `hospital_announcements`(`int_id`,`res_id`,`comment`,`create_at`,`status`,`sent_by`,`readcount`) values (75,76,'ytu','2018-06-02 15:58:18',1,74,1),(76,77,'ytu','2018-06-02 15:58:18',1,74,1),(77,78,'ytu','2018-06-02 15:58:18',1,74,1),(78,75,'ytu','2018-06-02 15:58:18',1,74,1),(79,76,'hi','2018-06-02 16:01:20',1,74,1),(80,77,'hi','2018-06-02 16:01:20',1,74,1),(81,78,'hi','2018-06-02 16:01:20',1,74,1),(82,75,'hi','2018-06-02 16:01:20',1,74,1);

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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `investigation_patient_list` */

insert  into `investigation_patient_list`(`id`,`p_id`,`b_id`,`investigation_type`,`countrycode`,`contact_number`,`frequency`,`priority`,`investigation_formdate`,`investigation_todate`,`associate_diagnosis`,`associate_problems`,`create_at`,`create_by`,`date`) values (1,8,3,'lab','+91','85000050944','testyt','Low','2018-04-05','2018-04-05','TESTING','likethat','2018-04-05 16:53:44',12,'2018-04-05'),(2,8,3,'Radiology','+91','6767686788','testyt','Low','2018-04-05','2018-04-05','TESTING','likethat','2018-04-07 11:04:18',12,'2018-04-07'),(3,8,5,'lab','+91','6546546456','ghdfg','Medium','2018-04-09','2018-04-09','ghgf','ghdfg','2018-04-09 17:20:53',12,'2018-04-09'),(4,11,9,'lab','+91','85000050944','testyt','High','2018-04-05','2018-04-05','TESTING','likethat','2018-04-09 17:59:47',12,'2018-04-09'),(5,8,3,'lab','+91','1234567899','11','Medium','2018-04-14','2018-04-14','test','test','2018-04-14 17:24:00',12,'2018-04-14'),(6,13,14,'lab','+91','5756756767','676','Low','1899-12-14','2018-04-06','6767','67','2018-04-14 18:11:00',33,'2018-04-14'),(7,12,10,'lab','+91','5756756767','676','Low','2018-04-10','2018-04-17','6767','67','2018-04-17 12:05:40',12,'2018-04-17'),(8,14,16,'lab','+91','5756756767','676','High','1899-12-14','2018-04-17','6767','67','2018-04-17 12:25:15',12,'2018-04-17'),(9,30,24,'lab','+91','8500045621','test','Medium','2018-05-12','2018-05-12','test','test','2018-05-12 15:07:19',12,'2018-05-12'),(10,28,22,'lab','+91','8500045621','test','Medium','2018-05-12','2018-05-12','ere','reewr','2018-05-12 15:08:19',12,'2018-05-12'),(11,40,30,'lab','+91','8500050944','6','Low','2018-05-21','2018-05-21','test','test','2018-05-21 15:55:27',64,'2018-05-21'),(12,54,43,'lab','+91','8500050944','4 hours','Low','2018-06-04','2018-06-04','diagnois','heart','2018-06-04 17:13:55',76,'2018-06-04'),(13,57,47,'lab','+91','8500050944','4 hours','Medium','2018-06-04','2018-06-04','diagnois','heart','2018-06-04 17:23:22',76,'2018-06-04'),(14,60,51,'lab','+91','8500050944','4 hours','Medium','2018-06-05','2018-06-05','diagnois','heart','2018-06-05 16:10:57',76,'2018-06-05'),(15,60,52,'lab','+91','8500050944','4 hours','Low','2018-06-04','2018-06-04','diagnois','heart','2018-06-05 16:14:56',76,'2018-06-05');

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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `lab_detailes` */

insert  into `lab_detailes`(`l_id`,`hos_id`,`l_investigation`,`l_code`,`l_name`,`l_assistent_id`,`l_status`,`l_create_at`,`l_updated_at`,`l_create_by`) values (1,9,'Lab','12345','test1',13,1,'2018-02-26 12:31:35','2018-02-26 12:42:13',3),(2,9,'Lab','67890','test2',13,1,'2018-02-26 12:31:35','2018-02-26 12:31:35',3),(3,9,'Lab','1','name1',13,1,'2018-04-05 14:14:40','2018-04-05 14:14:40',3),(4,9,'Lab','2','name2',13,1,'2018-04-05 14:14:40','2018-04-05 14:14:40',3),(5,9,'Lab','3','kghjk',13,1,'2018-04-05 14:23:41','2018-04-05 14:30:11',3),(6,9,'Lab','jkg','hkghj',13,1,'2018-04-05 15:12:51','2018-04-05 15:12:51',3),(7,16,'Lab','lab1','lab1',19,1,'2018-04-14 16:01:23','2018-04-14 16:01:23',25),(8,16,'Lab','vasu 11','vasulab',23,1,'2018-04-14 17:48:41','2018-04-14 17:48:41',29),(9,16,'Lab','vas lab2','vas lab2',23,1,'2018-04-14 17:49:28','2018-04-14 17:49:28',29),(10,17,'Lab','1234','Health Infra',30,1,'2018-04-19 11:55:35','2018-04-19 11:55:35',43),(11,17,'Radiology','1234','Pracha',30,1,'2018-04-20 14:24:13','2018-04-20 14:24:13',43),(12,17,'Radiology','123456','Pracha',35,1,'2018-04-20 14:32:46','2018-04-20 14:32:46',43),(13,9,'Lab','gfdgsdfg','fdgsdfg',5,2,'2018-04-30 14:20:55','2018-04-30 14:21:00',3),(14,9,'Lab','<script>alert(\'hello\')</script>','<script>alert(\'hddello\')</script>',5,1,'2018-04-30 14:21:46','2018-04-30 14:21:46',3);

/*Table structure for table `lab_test_list` */

DROP TABLE IF EXISTS `lab_test_list`;

CREATE TABLE `lab_test_list` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `hos_id` int(11) DEFAULT NULL,
  `t_name` varchar(250) DEFAULT NULL,
  `test_type` int(11) DEFAULT NULL,
  `type` varchar(250) DEFAULT NULL,
  `duration` varchar(250) DEFAULT NULL,
  `amuont` varchar(250) DEFAULT NULL,
  `t_short_form` varchar(250) DEFAULT NULL,
  `t_description` varchar(250) DEFAULT NULL,
  `t_department` varchar(250) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  `update_by` datetime DEFAULT NULL,
  `out_source` int(11) DEFAULT '0',
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

/*Data for the table `lab_test_list` */

insert  into `lab_test_list`(`t_id`,`hos_id`,`t_name`,`test_type`,`type`,`duration`,`amuont`,`t_short_form`,`t_description`,`t_department`,`create_at`,`status`,`create_by`,`update_by`,`out_source`) values (42,25,'ferver',7,'Lab','12','120','short','description','dep','2018-05-21 15:49:57',1,62,NULL,0),(43,25,'blood',7,'Lab','30','120','short','description','dep','2018-05-21 15:50:20',1,62,NULL,0),(44,0,'blood',7,'Lab','12','120','short','description','dep','2018-05-21 15:51:35',1,65,NULL,1),(45,0,'test rad',9,'Radiology','11','123','shrt','des','dep','2018-05-22 18:11:25',1,69,NULL,1),(46,0,'vasu vasu',7,'Lab','10 min','5000','Short form','Description','department','2018-06-04 17:13:10',1,79,NULL,1),(47,27,'test',7,'Lab',' 10 min','120','Short Form','Description','Department','2018-06-04 17:21:43',1,77,NULL,0);

/*Table structure for table `lab_test_type` */

DROP TABLE IF EXISTS `lab_test_type`;

CREATE TABLE `lab_test_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(250) DEFAULT NULL,
  `type` varchar(250) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_by` int(11) DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `lab_test_type` */

insert  into `lab_test_type`(`id`,`type_name`,`type`,`create_at`,`status`,`created_by`,`updated_time`) values (4,'Sugar','Lab','2018-04-16 13:25:44',1,1,NULL),(5,'Heart','Lab','2018-04-16 14:15:33',2,1,'2018-04-16 19:20:24'),(7,'Heart','Lab','2018-04-16 15:41:00',1,1,NULL),(8,'aids','Lab','2018-04-18 18:25:34',1,1,'2018-06-01 10:14:25'),(9,'test','Radiology','2018-05-22 18:09:44',1,1,NULL),(10,'test','Lab','2018-06-01 10:14:10',2,1,NULL);

/*Table structure for table `medicine_list` */

DROP TABLE IF EXISTS `medicine_list`;

CREATE TABLE `medicine_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hos_id` int(11) DEFAULT NULL,
  `hsn` varchar(250) DEFAULT NULL,
  `othercode` varchar(250) DEFAULT NULL,
  `medicine_name` varchar(250) DEFAULT NULL,
  `dosage` varchar(250) DEFAULT NULL,
  `qty` varchar(250) DEFAULT NULL,
  `amount` varchar(250) DEFAULT NULL,
  `total_amount` varchar(250) DEFAULT NULL,
  `sgst` varchar(250) DEFAULT NULL,
  `cgst` varchar(250) DEFAULT NULL,
  `other` varchar(250) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `added_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

/*Data for the table `medicine_list` */

insert  into `medicine_list`(`id`,`hos_id`,`hsn`,`othercode`,`medicine_name`,`dosage`,`qty`,`amount`,`total_amount`,`sgst`,`cgst`,`other`,`create_at`,`status`,`added_by`,`updated_at`) values (30,27,'1','11','parasitmall','12 mg','165','10','11.2','6','6',NULL,'2018-06-01 17:47:49',1,77,NULL),(31,27,'11','11','like that','20 mg','93','10','10.4','2','2',NULL,'2018-06-04 18:06:33',1,78,NULL),(32,27,'22','22','crosin','300mg','474','10','10.7','1','6',NULL,'2018-06-04 18:06:58',1,78,NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

/*Data for the table `medicine_name` */

insert  into `medicine_name`(`id`,`hos_id`,`medicine_name`,`added_by`,`create_at`,`status`) values (17,27,'',77,'2018-06-01 17:45:51',1),(18,27,'parasitmall',77,'2018-06-01 17:47:49',1),(19,27,'like that',78,'2018-06-04 18:06:33',1),(20,27,'crosin',78,'2018-06-04 18:06:58',1);

/*Table structure for table `notifications` */

DROP TABLE IF EXISTS `notifications`;

CREATE TABLE `notifications` (
  `int_id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` text,
  `create_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `create_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`int_id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

/*Data for the table `notifications` */

insert  into `notifications`(`int_id`,`comment`,`create_at`,`status`,`create_by`) values (34,'hello','2018-06-02 16:17:12',1,71),(35,'hello','2018-06-02 16:22:23',1,71),(36,'hi','2018-06-02 16:22:29',1,71),(37,'ghgh','2018-06-02 16:22:50',1,71);

/*Table structure for table `out_source_lab_chating` */

DROP TABLE IF EXISTS `out_source_lab_chating`;

CREATE TABLE `out_source_lab_chating` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `replay_user_id` int(11) DEFAULT NULL,
  `from` int(11) DEFAULT NULL,
  `comment` text,
  `image` varchar(250) DEFAULT NULL,
  `type` enum('Replay','Replayed') DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `updated_by` datetime DEFAULT NULL,
  `lab_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=93 DEFAULT CHARSET=latin1;

/*Data for the table `out_source_lab_chating` */

insert  into `out_source_lab_chating`(`id`,`user_id`,`replay_user_id`,`from`,`comment`,`image`,`type`,`create_at`,`updated_by`,`lab_id`) values (82,79,0,0,'hello  hiii','','Replay','2018-06-04 15:57:39','2018-06-04 15:57:39',79),(83,79,60,60,'jhj','','Replayed','2018-06-04 15:58:20','2018-06-04 15:58:20',52),(84,79,60,60,'hhhiiii','','Replayed','2018-06-04 16:01:08','2018-06-04 16:01:08',79),(85,79,0,0,'hiiii','','Replay','2018-06-04 16:01:23','2018-06-04 16:01:23',79),(86,79,60,60,'gjghjghj','','Replayed','2018-06-04 16:20:11','2018-06-04 16:20:11',79),(87,79,0,0,'hi','','Replay','2018-06-04 16:20:19','2018-06-04 16:20:19',79),(88,79,60,60,'kl','','Replayed','2018-06-04 16:20:25','2018-06-04 16:20:25',79),(89,79,60,60,'hi team','','Replayed','2018-06-04 16:22:05','2018-06-04 16:22:05',79),(90,81,60,60,'hi team','','Replayed','2018-06-04 16:22:05','2018-06-04 16:22:05',81),(91,81,0,0,'hi','','Replay','2018-06-04 16:22:19','2018-06-04 16:22:19',81),(92,81,60,60,'ghgf','','Replayed','2018-06-04 16:22:27','2018-06-04 16:22:27',81);

/*Table structure for table `out_source_lab_search` */

DROP TABLE IF EXISTS `out_source_lab_search`;

CREATE TABLE `out_source_lab_search` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(250) DEFAULT NULL,
  `p_id` int(11) DEFAULT NULL,
  `b_id` int(11) DEFAULT NULL,
  `location` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `create_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `out_source_lab_search` */

insert  into `out_source_lab_search`(`id`,`ip_address`,`p_id`,`b_id`,`location`,`status`,`create_at`,`created_by`) values (4,'::1',40,30,'',1,'2018-05-21 16:19:42',62);

/*Table structure for table `out_source_lab_test_lists` */

DROP TABLE IF EXISTS `out_source_lab_test_lists`;

CREATE TABLE `out_source_lab_test_lists` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lab_id` int(11) DEFAULT NULL,
  `p_l_t_id` int(11) DEFAULT NULL,
  `p_id` int(11) DEFAULT NULL,
  `b_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `create_at` datetime DEFAULT NULL,
  `create_BY` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

/*Data for the table `out_source_lab_test_lists` */

insert  into `out_source_lab_test_lists`(`id`,`lab_id`,`p_l_t_id`,`p_id`,`b_id`,`status`,`create_at`,`create_BY`) values (9,32,62,14,16,0,'2018-04-18 17:31:30',8),(10,39,57,14,16,0,'2018-04-18 17:47:45',8),(11,39,62,14,16,0,'2018-04-18 18:19:20',8),(12,39,57,14,16,0,'2018-04-18 18:58:04',8),(13,39,57,14,16,0,'2018-04-18 19:01:00',8),(14,39,57,12,10,0,'2018-05-14 12:24:45',8),(15,39,57,12,10,0,'2018-05-14 12:26:28',8),(16,39,57,12,10,0,'2018-05-14 12:26:42',8),(17,62,77,40,30,0,'2018-05-22 10:16:51',62),(18,65,77,40,30,0,'2018-05-22 10:16:51',62),(19,79,86,57,47,0,'2018-06-04 17:24:19',77),(20,0,83,57,47,0,'2018-06-04 17:24:19',77),(21,0,84,57,47,0,'2018-06-04 17:24:19',77),(22,0,84,57,47,0,'2018-06-04 17:24:19',77),(23,0,85,57,47,0,'2018-06-04 17:24:19',77),(24,79,86,57,47,0,'2018-06-04 17:24:56',77),(25,79,86,57,47,0,'2018-06-04 17:25:55',77),(26,79,86,57,47,0,'2018-06-04 17:25:59',77);

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
  `completed_type` int(11) DEFAULT '0',
  `type` varchar(250) DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  `medicine_payment_mode` varchar(250) DEFAULT NULL,
  `payment_updated_by` int(11) DEFAULT '0',
  `payment_createed_by` datetime DEFAULT NULL,
  `report_completed` int(11) DEFAULT '0',
  `sheet_prescription` int(11) DEFAULT '0',
  `sheet_prescription_file` varchar(250) DEFAULT NULL,
  `coupon_code` varchar(250) DEFAULT NULL,
  `coupon_code_amount` varchar(250) DEFAULT NULL,
  `with_out_coupon_code` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`b_id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

/*Data for the table `patient_billing` */

insert  into `patient_billing`(`b_id`,`p_id`,`visit_no`,`visit_desc`,`date_of_visit`,`department`,`docotr_name`,`no_of_visits`,`last_visiting_date`,`service_type`,`service`,`visit_type`,`doctor`,`payer`,`price`,`qty`,`amount`,`bill`,`patient_payer_deposit_amount`,`payment_mode`,`bill_amount`,`received_form`,`treatment_id`,`doct_id`,`completed`,`create_at`,`updated_at`,`doctor_status`,`assign_doctor_to`,`assign_doctor_by`,`completed_type`,`type`,`create_by`,`medicine_payment_mode`,`payment_updated_by`,`payment_createed_by`,`report_completed`,`sheet_prescription`,`sheet_prescription_file`,`coupon_code`,`coupon_code_amount`,`with_out_coupon_code`) values (42,54,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'50000','Cash','50000','vasudevareddy','58','76',1,'2018-06-01 17:34:55','2018-06-01 17:36:09',1,0,0,1,'new',76,'Cash Payment',77,'2018-06-01 18:02:13',0,0,NULL,NULL,NULL,NULL),(43,54,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'500','Other','500','vasu','58','76',1,'2018-05-30 18:11:44','2018-06-01 18:12:14',1,0,0,2,'reschedule',76,NULL,0,NULL,1,0,NULL,NULL,NULL,NULL),(44,54,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'58','76',1,'2018-06-02 11:38:11',NULL,1,0,0,1,'verify',76,NULL,0,NULL,0,0,NULL,NULL,NULL,NULL),(45,54,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'2018-06-02 18:32:51',NULL,0,NULL,NULL,0,'Reschedule',NULL,NULL,0,NULL,0,0,NULL,NULL,NULL,NULL),(46,54,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'2018-06-02 18:33:02',NULL,0,NULL,NULL,0,'Reschedule',NULL,NULL,0,NULL,0,0,NULL,NULL,NULL,NULL),(47,57,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'50000','Cash','50000','vasudevareddy','58','76',1,'2018-06-04 17:02:17','2018-06-04 17:02:31',1,0,0,2,'new',76,NULL,0,NULL,0,0,NULL,NULL,NULL,NULL),(48,58,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'50000','Cash','50000','vasudevareddy','58','76',1,'2018-06-04 18:05:05','2018-06-04 18:05:18',1,0,0,1,'new',76,'Cash Payment',78,'2018-06-04 18:08:46',0,0,NULL,NULL,NULL,NULL),(49,54,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'50000','Online','50000','vasudevareddy','58','76',1,'2018-06-04 18:23:45','2018-06-04 18:23:55',1,0,0,1,'Reschedule',76,'Cash Payment',78,'2018-06-04 18:25:49',0,0,NULL,NULL,NULL,NULL),(50,59,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'50000','Cash','50000','vasudevareddy','58','76',1,'2018-06-05 15:55:58','2018-06-05 15:56:19',0,NULL,NULL,0,'new',NULL,NULL,0,NULL,0,0,NULL,NULL,NULL,NULL),(51,60,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'50000','Online','50000','vasudevareddy','58','76',1,'2018-06-05 15:57:29','2018-06-05 15:57:48',1,0,0,1,'new',76,NULL,0,NULL,0,0,NULL,NULL,NULL,NULL),(52,60,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'58','76',1,'2018-06-05 16:12:06',NULL,1,0,0,2,'Reschedule',76,NULL,0,NULL,0,0,NULL,NULL,NULL,NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

/*Data for the table `patient_lab_reports` */

insert  into `patient_lab_reports`(`id`,`p_id`,`b_id`,`hos_id`,`problem`,`symptoms`,`image`,`create_at`,`status`,`create_by`) values (1,8,3,9,'2','22','1523273542.docx','2018-04-09 17:02:22',1,8),(5,8,3,9,'fgfd','fg','1523274144.docx','2018-04-09 17:12:23',1,8),(6,8,3,9,'blood test','fgfg',NULL,'2018-04-09 17:12:23',1,8),(7,8,3,9,'uytyu','ytutyu','1523274175.docx','2018-04-09 17:12:55',1,8),(9,8,4,9,'cvxcv','xcvxzcv','1523274704.docx','2018-04-09 17:21:44',1,8),(10,8,5,9,'vbxcvb','vcbxcv','1523274729.docx','2018-04-09 17:22:09',1,8),(11,8,5,9,'gg','hfgh','1523275182.docx','2018-04-09 17:29:42',1,8),(12,11,9,9,'DFDSF','SDFSDF','1523277017.pdf','2018-04-09 18:00:16',1,8),(13,8,3,9,'hjgh','hgjgh','1523278691.docx','2018-04-09 18:28:11',1,8),(14,8,3,9,'hjgh','hgjgh','1523278734.docx','2018-04-09 18:28:53',1,8),(15,8,3,9,'ghdfg','gfhfdg','1523278920.docx','2018-04-09 18:32:00',1,8),(16,8,4,9,'test2','test','1523706923.docx','2018-04-14 17:25:23',1,8),(17,13,14,16,'test','trest','1523710801.docx','2018-04-14 18:30:01',1,32),(18,54,43,27,'like that','like  that','1528112758.docx','2018-06-04 17:15:57',1,77);

/*Table structure for table `patient_lab_test_list` */

DROP TABLE IF EXISTS `patient_lab_test_list`;

CREATE TABLE `patient_lab_test_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` int(11) DEFAULT NULL,
  `b_id` int(11) DEFAULT NULL,
  `test_id` int(11) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `date` date DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=98 DEFAULT CHARSET=latin1;

/*Data for the table `patient_lab_test_list` */

insert  into `patient_lab_test_list`(`id`,`p_id`,`b_id`,`test_id`,`create_at`,`date`,`create_by`,`status`) values (21,8,5,1,'2018-04-09 17:20:36','2018-04-09',12,1),(22,8,5,2,'2018-04-09 17:20:36','2018-04-09',12,1),(23,11,9,1,'2018-04-09 17:59:29','2018-04-09',12,1),(24,11,9,2,'2018-04-09 17:59:29','2018-04-09',12,1),(29,13,14,26,'2018-04-14 18:10:40','2018-04-14',33,1),(30,13,14,27,'2018-04-14 18:10:40','2018-04-14',33,1),(31,13,14,28,'2018-04-14 18:10:40','2018-04-14',33,1),(32,13,14,30,'2018-04-14 18:10:40','2018-04-14',33,1),(49,8,3,23,'2018-04-16 17:13:17','2018-04-16',12,1),(50,8,3,24,'2018-04-16 17:13:17','2018-04-16',12,1),(51,8,3,25,'2018-04-16 17:13:17','2018-04-16',12,1),(52,8,3,32,'2018-04-16 17:13:17','2018-04-16',12,1),(53,8,3,23,'2018-04-16 17:17:00','2018-04-16',12,1),(54,12,10,37,'2018-04-17 12:05:23','2018-04-17',12,1),(55,12,10,38,'2018-04-17 12:05:23','2018-04-17',12,1),(56,12,10,40,'2018-04-17 12:05:23','2018-04-17',12,1),(57,14,16,37,'2018-04-17 12:24:06','2018-04-17',12,1),(58,14,16,38,'2018-04-17 12:24:06','2018-04-17',12,1),(59,14,16,40,'2018-04-17 12:24:06','2018-04-17',12,1),(60,14,16,1,'2018-04-17 12:24:59','2018-04-17',12,1),(61,14,16,2,'2018-04-17 12:24:59','2018-04-17',12,1),(62,14,16,26,'2018-04-17 12:24:59','2018-04-17',12,1),(63,30,24,37,'2018-05-12 15:07:04','2018-05-12',12,1),(64,30,24,38,'2018-05-12 15:07:04','2018-05-12',12,1),(65,30,24,40,'2018-05-12 15:07:04','2018-05-12',12,1),(66,28,22,37,'2018-05-12 15:08:07','2018-05-12',12,1),(67,28,22,38,'2018-05-12 15:08:07','2018-05-12',12,1),(68,15,17,1,'2018-05-14 12:19:41','2018-05-14',12,1),(69,15,17,2,'2018-05-14 12:19:41','2018-05-14',12,1),(70,15,17,26,'2018-05-14 12:19:41','2018-05-14',12,1),(71,15,17,27,'2018-05-14 12:19:41','2018-05-14',12,1),(72,15,17,28,'2018-05-14 12:19:41','2018-05-14',12,1),(73,15,17,39,'2018-05-14 12:19:41','2018-05-14',12,1),(74,15,17,41,'2018-05-14 12:19:41','2018-05-14',12,1),(75,40,30,42,'2018-05-21 15:55:09','2018-05-21',64,1),(76,40,30,43,'2018-05-21 15:55:09','2018-05-21',64,1),(77,40,30,44,'2018-05-21 15:55:09','2018-05-21',64,1),(78,42,31,45,'2018-05-22 18:23:18','2018-05-22',68,1),(79,54,43,42,'2018-06-04 17:13:38','2018-06-04',76,1),(80,54,43,43,'2018-06-04 17:13:38','2018-06-04',76,1),(81,54,43,44,'2018-06-04 17:13:39','2018-06-04',76,1),(82,54,43,46,'2018-06-04 17:13:39','2018-06-04',76,1),(83,57,47,42,'2018-06-04 17:23:09','2018-06-04',76,1),(84,57,47,43,'2018-06-04 17:23:09','2018-06-04',76,1),(85,57,47,44,'2018-06-04 17:23:09','2018-06-04',76,1),(86,57,47,46,'2018-06-04 17:23:09','2018-06-04',76,1),(87,57,47,47,'2018-06-04 17:23:09','2018-06-04',76,1),(88,60,51,42,'2018-06-05 16:09:59','2018-06-05',76,1),(89,60,51,43,'2018-06-05 16:09:59','2018-06-05',76,1),(90,60,51,44,'2018-06-05 16:09:59','2018-06-05',76,1),(91,60,51,46,'2018-06-05 16:09:59','2018-06-05',76,1),(92,60,51,47,'2018-06-05 16:09:59','2018-06-05',76,1),(93,60,52,42,'2018-06-05 16:14:41','2018-06-05',76,1),(94,60,52,43,'2018-06-05 16:14:41','2018-06-05',76,1),(95,60,52,44,'2018-06-05 16:14:41','2018-06-05',76,1),(96,60,52,46,'2018-06-05 16:14:41','2018-06-05',76,1),(97,60,52,47,'2018-06-05 16:14:41','2018-06-05',76,1);

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
  `org_amount` varchar(250) DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

/*Data for the table `patient_medicine_list` */

insert  into `patient_medicine_list`(`m_id`,`p_id`,`b_id`,`type_of_medicine`,`medicine_name`,`substitute_name`,`condition`,`dosage`,`route`,`frequency`,`directions`,`formdate`,`todate`,`qty`,`org_amount`,`units`,`comments`,`create_at`,`date`,`create_by`,`edit_reason`,`edited`,`edited_by`,`amount`) values (3,8,4,'Brand','AK','Yes','PRN','350 g','Mouth','Write Your Own','dfsd','03 April 2018','03 April 2018','45',NULL,'es','fd','2018-04-03 18:31:58','2018-04-03',12,'ghg',1,7,458),(4,8,4,'Brand','HI','Yes','Chronic','350 g','Mouth','At Bedtime','hj','06 April 2018','07 April 2018','12',NULL,'suppository','g','2018-04-05 11:27:44','2018-04-05',12,'hjfghj',1,7,45),(5,8,4,'Generic','fgdf','Yes','Chronic','350 g','Mouth','Every Three Hours','tyrt','07 April 2018','07 April 2018','34',NULL,'mg','dfsdfds','2018-04-07 10:46:29','2018-04-07',12,'ghjfgh',1,7,456),(6,8,3,'Generic','fgdf','Yes','PRN','550 g','Mouth','Every Three Hours While Awake','hjfgh','07 April 2018','06 April 2018','67',NULL,'pound','uytu','2018-04-07 10:57:48','2018-04-07',12,'ghg',1,7,120),(8,13,13,'Generic','tablet2','Yes','Chronic','350 g','Mouth','Four Times Per Day','test','21 April 2018','22 April 2018','12',NULL,'suppository','ntg','2018-04-14 17:18:44','2018-04-14',33,NULL,0,NULL,NULL),(9,8,3,'Generic','fgdf','Yes','PRN','150 g','Mouth','Single Dose','test','14 April 2018','14 April 2018','34',NULL,'suppository','test','2018-04-14 17:28:47','2018-04-14',12,NULL,1,7,250),(10,8,12,'Generic','fgdf','No','Chronic','350 g','Mouth','Every Two Hours','test','16 April 2018','31 December 1899','12',NULL,'es','tyrt','2018-04-16 17:23:57','2018-04-16',12,NULL,0,NULL,NULL),(11,12,11,'Generic','vasu','Yes','PRN','250 g','Mouth','Single Dose','test','30 April 2018','30 April 2018','12',NULL,'ounce','test','2018-04-30 12:56:32','2018-04-30',12,NULL,1,7,234),(15,42,31,'Generic','test21','Yes','Chronic','150 g','Mouth','Single Dose','gfdg','23 May 2018','15 May, 2018','12',NULL,'vial','fgsd','2018-05-24 12:42:11','2018-05-24',68,NULL,0,NULL,NULL),(16,42,31,'Generic','parasitmall','Yes','Chronic','350 g','Mouth','Twice Per Day','testtesting','24 May 2018','24 May 2018','23',NULL,'bottle','testing','2018-05-24 12:43:47','2018-05-24',68,NULL,0,NULL,NULL),(17,42,31,'Generic','parasitmall','Yes','PRN','350 g','Mouth','Every Three Hours','hgfhj','24 May 2018','15 May, 2018','23',NULL,'bottle','hjfgh','2018-05-24 12:45:33','2018-05-24',68,NULL,0,NULL,NULL),(18,42,31,'Generic','parasitmall','Yes','PRN','350 g','Mouth','Every Three Hours','hgfhj','24 May 2018','15 May, 2018','23',NULL,'bottle','hjfgh','2018-05-24 12:46:20','2018-05-24',68,NULL,0,NULL,NULL),(19,42,31,'Generic','parasitmall','Yes','PRN','350 g','Mouth','Every Three Hours','hgfhj','24 May 2018','15 May, 2018','23',NULL,'bottle','hjfgh','2018-05-24 12:46:40','2018-05-24',68,NULL,0,NULL,NULL),(20,42,31,'Generic','parasitmall','Yes','Chronic','550 g','Mouth','Every Three Hours While Awake','dfgdfg','24 May 2018','15 May, 2018','12',NULL,'device','fgsdfg','2018-05-24 13:01:12','2018-05-24',68,NULL,0,NULL,NULL),(21,44,33,'Generic','1','Yes','Chronic','350 g','Mouth','Every Three Hours While Awake','test','24 May 2018','15 May, 2018','4','120','vial','testing','2018-05-24 13:10:31','2018-05-24',68,NULL,1,70,30),(22,44,33,'Generic','parasitmall','Yes','PRN','350 g','Mouth','Every Three Hours','testin','24 May 2018','15 May, 2018','12','120','patch','testing','2018-05-24 13:11:35','2018-05-24',68,NULL,1,70,10),(23,45,34,'Generic','parasitmall','Yes','Chronic','550 g','Mouth','Every Two Hours While Awake','test','24 May 2018','15 May, 2018','10','18600','vial','test','2018-05-24 15:31:34','2018-05-24',68,NULL,1,70,1860),(24,46,35,'Generic','chorm','Yes','Chronic','550 g','Mouth','Every Three Hours While Awake','fgsdgf','24 May 2018','15 May, 2018','5','780','suppository','test','2018-05-24 15:38:13','2018-05-24',68,NULL,0,NULL,156),(25,54,42,'Generic','parasitmall','Yes','Chronic','20 mg','Mouth','4 hours','test','','','10','112','suppository','like that','2018-06-01 17:52:20','2018-06-01',76,NULL,0,NULL,11),(26,54,42,'Generic','parasitmall','Yes','Chronic','12 mg','Mouth','4 hours','test','','','10','112','vial','fgfg','2018-06-01 17:55:52','2018-06-01',76,NULL,0,NULL,11),(27,54,44,'Generic','parasitmall','Yes','Chronic','12 mg','Mouth','4 hours','test','','','10','2000','suppository','testing','2018-06-02 11:51:40','2018-06-02',76,NULL,1,74,200),(28,58,48,'Generic','parasitmall','Yes','Chronic','12 mg','Mouth','4 hours','','','','20','400','suppository','test','2018-06-04 18:07:32','2018-06-04',76,NULL,1,78,20),(29,58,48,'Generic','like that','No','Chronic','20 mg','Mouth','6 hours','yty','','','10','300','vial','yttr','2018-06-04 18:07:50','2018-06-04',76,NULL,1,78,30),(30,58,48,'Brand','crosin','Yes','Chronic','300mg','Mouth','6 hours','uu','','','20','800','patch','like that','2018-06-04 18:08:11','2018-06-04',76,NULL,1,78,40),(31,54,49,'Generic','parasitmall','No','Chronic','12 mg','Mouth','4 hours','','','','5','75','vial','test','2018-06-04 18:24:43','2018-06-04',76,NULL,1,78,15),(32,54,49,'Generic','like that','Yes','PRN','20 mg','Mouth','6 hours','te','','','2','24','suppository','test','2018-06-04 18:24:59','2018-06-04',76,NULL,1,78,12),(33,54,49,'Generic','crosin','Yes','Chronic','300mg','Mouth','4 hours','','','','6','78','vial','g','2018-06-04 18:25:14','2018-06-04',76,NULL,1,78,13),(34,60,52,'Generic','like that','Yes','Chronic','20 mg','Mouth','6 hours','','','','20','208','suppository','test','2018-06-05 16:13:55','2018-06-05',76,NULL,0,NULL,10);

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
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

/*Data for the table `patient_vitals_list` */

insert  into `patient_vitals_list`(`id`,`p_id`,`b_id`,`assessment_type`,`vitaltype`,`tep_actuals`,`tep_range`,`temp_site_positioning`,`notes`,`pulse_actuals`,`pulse_range`,`pulse_rate_rhythm`,`pulse_rate_vol`,`notes1`,`create_at`,`date`) values (36,53,41,NULL,NULL,'12','121','21','2','12','121','1212','121','212','2018-06-01 17:29:40','2018-06-01'),(37,54,42,NULL,NULL,'12','21','21','121','12','121','21','2121','212','2018-06-01 17:35:16','2018-06-01'),(38,54,43,NULL,NULL,'12','121','212','12121','1212','21','212','1212','121','2018-06-01 18:12:01','2018-06-01'),(39,57,47,NULL,NULL,'12','12','121','2121','212','21','212','121','2','2018-06-04 17:02:25','2018-06-04'),(40,58,48,NULL,NULL,'12','12','121','121','12','21','12','2','121','2018-06-04 18:05:11','2018-06-04'),(41,54,49,NULL,NULL,'12','121','212','12121','1212','21','212','1212','121','2018-06-04 18:23:48','2018-06-04'),(42,59,50,NULL,NULL,'1','21212','1','221','2','2','2','2','2','2018-06-05 15:56:12','2018-06-05'),(43,60,51,NULL,NULL,'12','121','23','3','3','4','44','4','4','2018-06-05 15:57:41','2018-06-05');

/*Table structure for table `patients_list_1` */

DROP TABLE IF EXISTS `patients_list_1`;

CREATE TABLE `patients_list_1` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `hos_id` int(11) DEFAULT NULL,
  `card_number` varchar(250) DEFAULT NULL,
  `registrationtype` varchar(250) DEFAULT NULL,
  `patient_category` varchar(250) DEFAULT NULL,
  `problem` text,
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
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

/*Data for the table `patients_list_1` */

insert  into `patients_list_1`(`pid`,`hos_id`,`card_number`,`registrationtype`,`patient_category`,`problem`,`name`,`mobile`,`email`,`dob`,`age`,`bloodgroup`,`martial_status`,`nationali_id`,`perment_address`,`p_c_name`,`p_s_name`,`p_zipcode`,`p_country_name`,`temp_address`,`t_c_name`,`t_s_name`,`t_zipcode`,`t_country_name`,`religion`,`caste`,`mothername`,`language`,`primarylanguage`,`preferred_language`,`occupation`,`education`,`birth_place`,`work_phone`,`home_phone`,`citizen_proof`,`patient_identifier`,`relation`,`first_name`,`middel_name`,`last_name`,`next_address1`,`next_address2`,`next_pincode`,`next_city`,`next_state`,`next_country`,`next_email`,`next_mobile`,`next_occupation`,`referred`,`internal_external`,`search_doctor`,`relationship`,`g_first_name`,`g_middel_name`,`g_last_name`,`gender`,`nationality`,`g_language`,`living`,`g_address1`,`g_address2`,`g_pincode`,`g_city`,`g_state`,`g_country`,`payer_name`,`payer_mobile`,`payer_address`,`dependency`,`arrangement`,`incomegroup`,`description`,`confidential`,`student`,`barcode`,`create_at`,`create_by`,`updated_at`) values (54,27,'1234569874566','Emergency','Pay Patient','test','vasudevareddy','6768876867','admin@gmail.com','2018-06-01','20','AB-','Single','1234567890','78','hyderabad','ts','500072','t6s','','','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'vasu',NULL,NULL,NULL,NULL,NULL,NULL,'Male',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'152785469554.png','2018-06-04 18:23:45',75,NULL),(55,27,'1234569874567','New','VIP','','vasudeva','8500050944','vasu@gmail.com','2018-06-02','20','O-','Single','1234567890','fgfh','ghdfg','hgfh','519172','india','test','ghg','hghgh','516172','india',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,'Male',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'152794493555.png','2018-06-02 18:38:55',75,NULL),(56,27,'1234569874566','New','Pay Patient','','vasudevareddy','8500050944','admin@gmail.com','2018-06-01','20','O+','Single','1234567890','tryrty','hyderabad','ts','500072','india','ytrty','gfgfd','ts','516172','india',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,'Female',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'152811068956.png','2018-06-04 16:41:29',75,NULL),(57,27,'1234569874512','New','Pay Patient','heart pain','vasudevareddy','8500050944','admin@gmail.com','2018-06-01','29','O-','Single','1234567890','hgfh','hyderabad','ts','500072','india','','','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'vasudevareddy',NULL,NULL,NULL,NULL,NULL,NULL,'Male',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'152811193757.png','2018-06-04 17:02:17',75,NULL),(58,27,'1234569123456','Emergency','Pay Patient','Leg pain','like ','8019345212','80193@gmail.com','2018-06-04','20','O+','Single','1234567890','hyderabad','kukatpalli','ts','500072','india','','','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'doctor',NULL,NULL,NULL,NULL,NULL,NULL,'Male',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'152811570458.png','2018-06-04 18:05:04',75,NULL),(59,27,'','New','Staff','leg pain','vasudevareddy','8500050944','ksiva@gmail.com','2018-06-05','20','AB-','Married','1234567890','testing','kadapa','ts','516172','india','','','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,'Male',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'152819435859.png','2018-06-05 15:55:58',75,NULL),(60,27,'1234569874500','Temporary','Pay Patient','check up','shiv ios','8521253555','shiv@gmail.com','2018-06-05','20','O+','Single','1234567890','test','hyderabad','ts','500072','india','','','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'doctor',NULL,NULL,NULL,NULL,NULL,NULL,'Male',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'152819444960.png','2018-06-05 16:12:06',75,NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

/*Data for the table `resource_chating` */

insert  into `resource_chating`(`id`,`user_id`,`replay_user_id`,`to`,`comment`,`image`,`type`,`create_at`,`updated_by`) values (34,12,0,5,'hi','','Replay','2018-04-06 15:55:16','2018-04-06 15:55:16'),(35,5,0,12,'hello','','Replay','2018-04-06 15:55:33','2018-04-06 15:55:33'),(36,12,0,5,'how are you','','Replay','2018-04-06 15:57:54','2018-04-06 15:57:54'),(39,5,0,12,'gud u ','','Replay','2018-04-06 15:59:40','2018-04-06 15:59:40'),(40,8,0,17,'helo','','Replay','2018-04-07 17:43:13','2018-04-07 17:43:13'),(41,59,0,12,'hiii','','Replay','2018-05-14 11:57:58','2018-05-14 11:57:58'),(42,61,0,61,'hello','','Replay','2018-05-21 12:29:58','2018-05-21 12:29:58'),(43,75,0,76,'hello','','Replay','2018-06-02 15:16:39','2018-06-02 15:16:39'),(44,76,0,75,'hi','','Replay','2018-06-02 15:17:01','2018-06-02 15:17:01'),(45,75,0,75,'hru','','Replay','2018-06-02 15:17:33','2018-06-02 15:17:33'),(46,75,0,76,'h r u','','Replay','2018-06-02 15:17:59','2018-06-02 15:17:59'),(47,76,0,75,'gud u ','','Replay','2018-06-02 15:18:13','2018-06-02 15:18:13');

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
  `out_source_lab` int(11) DEFAULT '0',
  PRIMARY KEY (`r_id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

/*Data for the table `resource_list` */

insert  into `resource_list`(`r_id`,`a_id`,`role_id`,`hos_id`,`resource_name`,`resource_mobile`,`resource_add1`,`resource_add2`,`resource_city`,`resource_state`,`resource_zipcode`,`resource_other_details`,`resource_contatnumber`,`resource_email`,`resource_photo`,`resource_document`,`resource_bank_holdername`,`resource_bank_accno`,`resource_ifsc_code`,`resource_other_document`,`r_status`,`r_created_at`,`r_updated_at`,`r_create_by`,`current_status`,`out_source_lab`) values (48,75,3,27,'recption','86785678678','test','test','kapdap','hyd','500072','ntg','6767676577','recption@gmail.com','','','vasu','5464565767','sbin0002671','',1,'2018-06-01 17:19:19','2018-06-01 17:20:08',74,NULL,0),(49,76,6,27,'Doctor siva','8500050944','test','test2','hyderabad','ap','500072','ntg','8500050944','doc@gmail.com','1527920561.jpg','','sbi','32473655713','SBIN0002671','',1,'2018-06-02 11:52:41',NULL,74,NULL,0),(50,77,4,27,'lab','86785678678','test','test','kapdap','hyd','676567','jfghj','6767676577','lab@gmail.com','','','vasu','5464565767','sbin0002671','',1,'2018-06-01 17:43:34',NULL,74,NULL,0),(51,78,4,27,'Pharmacy','8500050944','test','test','kadapa','hyd','500072','ntg','6767676577','phar@gmail.com','','','vasu','5464565767','sbin0002671','',1,'2018-06-02 10:45:58',NULL,74,NULL,0),(52,79,5,0,'out sources lab','8500050944','fgfdg','fgfdg','kadapa','ts','50002','ntg','8500050944','outlab@gmail.com','1528114106.jpg',NULL,NULL,NULL,NULL,NULL,1,'2018-06-04 17:38:25',NULL,60,NULL,1),(53,80,6,27,'Doctor siva','86785678678','yutuytyu','yurtyu','yurtyu','yurtyu','67467','ntg','6674676777','recp@gmail.com','','','vasu','5464565767','sbin0002671','',1,'2018-06-04 17:22:21',NULL,74,NULL,0),(54,81,5,0,'out sources lab2','8500050944','ghfg','hfg','hyd','ts','50002','ntg','8500050944','outlab2@gmail.com','',NULL,NULL,NULL,NULL,NULL,1,'2018-06-04 16:21:52',NULL,60,NULL,1);

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
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=latin1;

/*Data for the table `team_chating` */

insert  into `team_chating`(`id`,`user_id`,`replay_user_id`,`from`,`comment`,`image`,`type`,`create_at`,`updated_by`) values (78,0,71,71,'ji','','Replayed','2018-06-04 12:15:31','2018-06-04 12:15:31'),(79,79,0,0,'hi','','Replay','2018-06-04 12:15:39','2018-06-04 12:15:39'),(80,79,71,71,'ji','','Replayed','2018-06-04 12:15:53','2018-06-04 12:15:53'),(81,79,0,0,'hello','','Replay','2018-06-04 12:16:00','2018-06-04 12:16:00'),(82,79,71,71,'ghdfg','','Replayed','2018-06-04 12:16:07','2018-06-04 12:16:07'),(83,79,0,0,'hello','','Replay','2018-06-04 13:06:03','2018-06-04 13:06:03'),(84,79,71,71,'fgdfgfdg','','Replayed','2018-06-04 13:06:26','2018-06-04 13:06:26'),(85,79,71,71,'llll','','Replayed','2018-06-04 13:06:35','2018-06-04 13:06:35'),(86,79,0,0,'hello','','Replay','2018-06-04 13:06:43','2018-06-04 13:06:43');

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
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

/*Data for the table `treament` */

insert  into `treament`(`t_id`,`hos_id`,`t_name`,`t_status`,`t_create_at`,`t_updated_at`,`t_create_by`) values (1,9,'anglogyi',1,'2018-02-23 17:14:24','2018-02-23 17:49:23',3),(2,9,'test166',1,'2018-02-23 17:15:29','2018-02-23 17:49:46',3),(3,9,'test166',1,'2018-02-23 17:50:01','2018-02-23 17:50:11',3),(4,14,'treatment1',1,'2018-04-14 15:27:43',NULL,25),(5,14,'treatment2',1,'2018-04-14 15:27:49',NULL,25),(6,14,'treatment3',1,'2018-04-14 15:27:54',NULL,25),(7,16,'Treatment1',1,'2018-04-14 16:51:36',NULL,29),(8,16,'Treatment2',1,'2018-04-14 16:51:48',NULL,29),(9,NULL,'',1,'2018-04-16 12:52:06',NULL,NULL),(10,17,'Blood Pressure',1,'2018-04-19 10:29:19','2018-04-19 15:07:00',43),(11,17,'Sugar',1,'2018-04-19 10:29:45','2018-04-19 10:49:13',43),(12,17,'Chest Pain',1,'2018-04-19 10:30:42','2018-04-19 10:47:25',43),(13,17,'Headache',1,'2018-04-19 10:31:07','2018-04-19 10:47:54',43),(14,17,'Cancer',1,'2018-04-19 10:31:43','2018-04-19 10:46:17',43),(15,17,'Viral Fever',1,'2018-04-19 10:32:55','2018-04-19 10:49:44',43),(16,17,'HIV/AIDS',1,'2018-04-19 10:33:11','2018-04-19 15:11:19',43),(17,17,'Laser Treatment',1,'2018-04-19 10:34:12','2018-04-19 10:48:57',43),(18,17,'Hair Transplantation',1,'2018-04-19 10:34:34','2018-04-19 10:48:33',43),(19,17,'Compound Fracture',1,'2018-04-19 10:35:10','2018-04-19 10:47:09',43),(20,17,'Fracture',1,'2018-04-19 10:38:01',NULL,43),(21,17,'Skin Disease',1,'2018-04-19 10:39:04',NULL,43),(22,17,'Hair Treatment',1,'2018-04-19 10:40:22',NULL,43),(23,17,'Dengue Fever',1,'2018-04-19 15:04:33',NULL,43),(24,17,'Malaria',1,'2018-04-19 15:04:53',NULL,43),(25,17,'Allergies',1,'2018-04-19 15:05:32',NULL,43),(26,17,'Asthma',1,'2018-04-19 15:05:41',NULL,43),(27,17,'Arthritis',1,'2018-04-19 15:06:27',NULL,43),(28,17,'Cholesterol',1,'2018-04-19 15:07:54',NULL,43),(29,17,'Chronic Pain',1,'2018-04-19 15:08:18',NULL,43),(30,17,'Cold and Flu',1,'2018-04-19 15:08:55',NULL,43),(31,17,'Migraine',1,'2018-04-19 15:12:15',NULL,43),(32,17,'Mental Health',1,'2018-04-19 15:12:50',NULL,43),(33,17,'Thyroid',1,'2018-04-19 15:13:23',NULL,43),(34,17,'Urology',1,'2018-04-19 15:13:57',NULL,43),(35,17,'Weight Loss And Management',1,'2018-04-19 15:14:29',NULL,43),(36,17,'Womens Health',1,'2018-04-19 15:14:57',NULL,43),(37,17,'Neurology',1,'2018-04-19 15:15:59',NULL,43),(38,17,'Depression',1,'2018-04-19 15:16:24',NULL,43),(39,17,'Diabetes',1,'2018-04-19 15:16:43',NULL,43),(40,17,'Eyesight',1,'2018-04-19 15:17:28',NULL,43),(41,17,'Oral Health',1,'2018-04-19 15:17:48',NULL,43),(42,17,'Pregnancy',1,'2018-04-19 15:17:55',NULL,43),(43,17,'Sexual Health',1,'2018-04-19 15:18:13',NULL,43),(44,17,'Brain Tumor',1,'2018-04-19 15:20:10',NULL,43),(45,17,'Swine Flu',1,'2018-04-19 15:21:51',NULL,43),(46,17,'Panic Disorder',1,'2018-04-19 15:22:29',NULL,43),(47,17,'Stress',1,'2018-04-19 15:22:42',NULL,43),(48,17,'Digestion',1,'2018-04-19 15:23:44',NULL,43),(49,17,'Constipation',1,'2018-04-19 15:24:06',NULL,43),(50,17,'Heart Attack',1,'2018-04-19 15:25:25',NULL,43),(51,17,'Hepatitis',1,'2018-04-19 15:25:49',NULL,43),(52,17,'Dengue Fever',2,'2018-04-19 15:27:35','2018-04-19 15:27:47',43),(53,17,'Pneumonia',1,'2018-04-19 15:28:49',NULL,43),(54,17,'Panic Attacks',1,'2018-04-19 15:29:50',NULL,43),(55,17,'Neumonia',2,'2018-04-20 14:20:40','2018-04-20 14:22:37',43),(56,25,'test',1,'2018-05-21 15:52:26',NULL,60),(57,26,'test',1,'2018-05-22 17:09:23',NULL,66),(58,27,'ferver',1,'2018-06-01 17:21:40','2018-06-02 17:15:16',74),(59,27,'likethat',1,'2018-06-02 16:47:31',NULL,74),(60,27,'jjgj',1,'2018-06-02 17:21:52',NULL,74);

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
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

/*Data for the table `treatmentwise_doctors` */

insert  into `treatmentwise_doctors`(`t_d_id`,`hos_id`,`t_d_doc_id`,`t_d_name`,`t_d_status`,`t_d_create_at`,`t_d_updated_at`,`t_d_create_by`) values (19,9,12,'1',1,'2018-03-21 16:40:51','2018-03-21 16:40:51',3),(20,9,18,'2',1,'2018-03-21 16:45:38','2018-03-21 16:45:38',3),(21,9,16,'1',1,'2018-04-05 11:45:33','2018-04-05 11:45:33',3),(22,14,26,'4',1,'2018-04-14 15:58:20','2018-04-14 15:58:20',25),(23,14,28,'5',1,'2018-04-14 15:58:29','2018-04-14 15:58:29',25),(24,16,33,'7',1,'2018-04-14 16:52:04','2018-04-14 16:52:04',29),(25,16,33,'8',1,'2018-04-14 16:52:10','2018-04-14 16:52:10',29),(26,16,33,'7',1,'2018-04-14 17:49:01','2018-04-14 17:49:01',29),(27,17,44,'16',1,'2018-04-19 11:21:10','2018-04-19 11:21:10',43),(28,17,44,'11',2,'2018-04-19 11:21:32','2018-04-20 11:55:31',43),(29,17,44,'14',2,'2018-04-19 11:21:58','2018-04-20 11:55:24',43),(30,17,49,'23',1,'2018-04-20 11:55:00','2018-04-20 11:55:00',43),(31,17,48,'24',1,'2018-04-20 11:55:19','2018-04-20 11:55:19',43),(32,17,49,'53',1,'2018-04-20 14:21:11','2018-04-20 14:21:11',43),(33,25,64,'56',1,'2018-05-21 15:52:35','2018-05-21 15:52:35',60),(34,26,68,'57',1,'2018-05-22 17:14:19','2018-05-22 17:14:19',66),(35,27,76,'58',1,'2018-06-01 17:22:45','2018-06-02 17:17:05',74),(36,27,76,'58',1,'2018-06-02 17:28:44','2018-06-02 17:28:44',74);

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `vital_comments` */

insert  into `vital_comments`(`id`,`p_id`,`b_id`,`comments`,`created_at`,`create_by`) values (1,8,3,'hjfgh','2018-04-07 10:48:16',12),(2,8,3,'jkgjhk','2018-04-07 10:50:39',12),(3,8,3,'hjhg','2018-04-07 10:54:11',12),(4,12,10,'testing','2018-04-17 12:04:56',12);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
