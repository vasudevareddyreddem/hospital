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
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`a_id`,`role_id`,`a_email_id`,`a_username`,`a_password`,`a_org_password`,`a_name`,`a_mobile`,`a_profile_pic`,`a_status`,`a_create_at`,`a_updated_at`) values (1,1,'admin@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Admin','8500050944',NULL,1,'2018-02-21 11:15:43',NULL),(3,2,'vasu@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','hospital admin','8500050944',NULL,1,'2018-02-22 15:26:03','2018-02-23 13:11:20'),(4,3,'rec@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Receptionist','9874563211',NULL,1,'2018-02-22 19:01:23',NULL),(5,3,'rec1@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Receptionist','6745674674',NULL,1,'2018-02-22 19:03:01','2018-02-23 12:37:24'),(6,3,'rec2@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Receptionist','9874563211',NULL,1,'2018-02-22 19:05:59','2018-02-23 16:31:46'),(7,4,'phr1@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Resource','9874563211',NULL,1,'2018-02-23 12:38:14',NULL),(8,5,'lab@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Resource','9874563211',NULL,1,'2018-02-23 12:40:59','2018-04-09 12:02:29'),(9,6,'doc@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Resource','9874563211',NULL,1,'2018-02-23 12:45:32',NULL),(10,2,'bayapu@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Hospital Admin','8500226782',NULL,1,'2018-02-23 12:46:16',NULL),(11,3,'bayph1@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Resource','9874563211',NULL,1,'2018-02-23 12:49:59',NULL),(12,6,'doc2@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Resource','9874563211',NULL,1,'2018-02-23 13:13:08',NULL),(13,6,'doc3@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Resource','9874563211',NULL,1,'2018-02-23 13:13:48','2018-03-26 11:18:08'),(15,3,'phrtytry1@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Resource','9874563211',NULL,1,'2018-02-23 15:07:33','2018-02-23 16:24:56'),(16,6,'doctor6@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Resource','6745674674',NULL,1,'2018-02-26 11:17:08','2018-02-26 17:32:01'),(17,5,'labassistent@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','1234567','Resource','8500050944',NULL,1,'2018-02-26 12:12:35','2018-02-26 16:32:21'),(18,6,'vasu1234567@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Resource','1234567896',NULL,1,'2018-03-21 14:56:55',NULL),(19,6,'vasu1234fgfh567@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Resource','1234567896',NULL,1,'2018-03-21 14:57:48',NULL),(20,6,'vasu1234567ghfg@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Resource','1234567896',NULL,1,'2018-03-21 14:58:20',NULL),(21,2,'reddemvasu@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Hospital Admin','8500001236',NULL,1,'2018-04-09 10:20:26',NULL);

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `admin_chating` */

insert  into `admin_chating`(`id`,`sender_id`,`comments`,`image`,`reciver_id`,`create_at`,`type`) values (1,1,'testing','1523508857.csv','11','2018-04-12 10:24:16','Replay'),(2,1,'ffdhg','1523508915.xlsx','11,10,9','2018-04-12 10:25:15','Replay'),(3,1,'yrty','1523508977.docx','11,10,9','2018-04-12 10:26:17','Replay');

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `hospital` */

insert  into `hospital`(`hos_id`,`a_id`,`hos_con_number`,`hos_email_id`,`hos_representative`,`hos_rep_contact`,`mob_country_code`,`hos_rep_mobile`,`hos_rep_email`,`hos_rep_nationali_id`,`hos_rep_add1`,`hos_rep_add2`,`hos_rep_zipcode`,`hos_rep_city`,`hos_rep_state`,`hos_rep_country`,`hos_bas_name`,`hos_bas_contact`,`hos_bas_email`,`hos_bas_nationali_id`,`hos_bas_add1`,`hos_bas_add2`,`hos_bas_zipcode`,`hos_bas_city`,`hos_bas_state`,`hos_bas_country`,`hos_bas_document`,`hos_bas_logo`,`bank_holder_name`,`bank_acc_no`,`bank_name`,`bank_ifsc`,`bank_document`,`kyc_doc1`,`kyc_doc2`,`kyc_doc3`,`kyc_file1`,`kyc_file2`,`kyc_file3`,`hos_status`,`hos_created`,`hos_updated_at`,`hos_curent_login`,`hos_undo`) values (9,3,'8500050944','vasu@gmail.com','Representative','1234567899','+91','8019345212','vasurep@gmail.com','12345678987','6767','6756','516172','kadapa','ap','india','vasu hosp','7896541236','vashos@gmail.com','9874563214562','op','opoi','123456','kadapa','ap','india','','1521722289.jpg','ooi','32473655713','opio','SBIN0002672',NULL,'test','test1','test2',NULL,NULL,NULL,1,'2018-02-22 15:26:03','2018-03-22 18:08:08',0,0),(10,10,'8500226782','bayapu@gmail.com','Representative','1234567899','+91','8019345212','vasurep@gmail.com','12345678987','sdfdd','gfdg','516172','kadapa','ap','india','reddem','7896541236','vashos@gmail.com','9874563214562','hgfh','ghfg','516172','kadapa','ap','india','','1521718441.png','ooi','32473655713','SBI','SBIN0002672','','test','test1','test2','1519370232.xlsx','','',1,'2018-02-23 12:46:16','2018-02-23 12:49:06',0,0),(11,21,'8585585858','reddemvasu@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'bayapu',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2018-04-09 10:20:26','2018-04-09 10:22:03',0,0);

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
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

/*Data for the table `hospital_admin_chating` */

insert  into `hospital_admin_chating`(`id`,`user_id`,`replay_user_id`,`from`,`comment`,`image`,`type`,`create_at`,`updated_by`) values (15,12,0,0,'hello','','Replay','2018-04-06 17:33:19','2018-04-06 17:33:19'),(16,12,3,3,'hiii','','Replayed','2018-04-06 17:33:44','2018-04-06 17:33:44'),(17,12,3,3,'hjfg','','Replayed','2018-04-06 17:39:42','2018-04-06 17:39:42'),(18,12,0,0,'ghfgh','','Replay','2018-04-06 17:41:25','2018-04-06 17:41:25'),(19,12,3,3,'jkj','','Replayed','2018-04-06 17:41:31','2018-04-06 17:41:31'),(20,8,0,0,'heoll','','Replay','2018-04-07 17:43:26','2018-04-07 17:43:26');

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `investigation_patient_list` */

insert  into `investigation_patient_list`(`id`,`p_id`,`b_id`,`investigation_type`,`countrycode`,`contact_number`,`frequency`,`priority`,`investigation_formdate`,`investigation_todate`,`associate_diagnosis`,`associate_problems`,`create_at`,`create_by`,`date`) values (1,8,3,'lab','+91','85000050944','testyt','Low','2018-04-05','2018-04-05','TESTING','likethat','2018-04-05 16:53:44',12,'2018-04-05'),(2,8,3,'Radiology','+91','6767686788','testyt','Low','2018-04-05','2018-04-05','TESTING','likethat','2018-04-07 11:04:18',12,'2018-04-07'),(3,8,5,'lab','+91','6546546456','ghdfg','Medium','2018-04-09','2018-04-09','ghgf','ghdfg','2018-04-09 17:20:53',12,'2018-04-09'),(4,11,9,'lab','+91','85000050944','testyt','High','2018-04-05','2018-04-05','TESTING','likethat','2018-04-09 17:59:47',12,'2018-04-09');

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `lab_detailes` */

insert  into `lab_detailes`(`l_id`,`hos_id`,`l_investigation`,`l_code`,`l_name`,`l_assistent_id`,`l_status`,`l_create_at`,`l_updated_at`,`l_create_by`) values (1,9,'Lab','12345','test1',13,1,'2018-02-26 12:31:35','2018-02-26 12:42:13',3),(2,9,'Lab','67890','test2',13,1,'2018-02-26 12:31:35','2018-02-26 12:31:35',3),(3,9,'Lab','1','name1',13,1,'2018-04-05 14:14:40','2018-04-05 14:14:40',3),(4,9,'Lab','2','name2',13,1,'2018-04-05 14:14:40','2018-04-05 14:14:40',3),(5,9,'Lab','3','kghjk',13,1,'2018-04-05 14:23:41','2018-04-05 14:30:11',3),(6,9,'Lab','jkg','hkghj',13,1,'2018-04-05 15:12:51','2018-04-05 15:12:51',3);

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
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

/*Data for the table `lab_test_list` */

insert  into `lab_test_list`(`t_id`,`hos_id`,`t_name`,`t_short_form`,`t_description`,`t_department`,`create_at`,`status`,`create_by`,`update_by`) values (1,9,'tpa','tpa short','tpa des','tpa dep','2018-04-05 15:16:28',1,13,NULL),(2,9,'ttt','tt short','tt des','tt dep','2018-04-05 15:16:58',1,13,NULL),(3,9,'name','short name','description','department','2018-04-09 11:24:18',0,8,'0000-00-00 00:00:00'),(5,9,'jkgjk','jkghjk','jhk','kghjk','2018-04-09 12:00:00',1,8,NULL),(6,9,'vasudevareddy','jkjk','jk','kghjk','2018-04-09 12:01:41',1,8,NULL),(18,9,'vasudevareddy','utyu','hgjfgh','hjfgh','2018-04-09 14:20:25',1,8,NULL),(23,9,'vaasu','bnvn','vbnvbn','vbn','2018-04-09 14:33:45',1,8,NULL),(24,9,'hjghj','ghfjgh','gfhjfg','hgfj','2018-04-09 14:35:51',1,8,NULL),(25,9,'ghfg','ghfg','ghfdgh','fgfdg','2018-04-09 17:13:12',1,8,NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `medicine_list` */

insert  into `medicine_list`(`id`,`hos_id`,`hsn`,`othercode`,`medicine_name`,`qty`,`sgst`,`cgst`,`other`,`create_at`,`status`,`added_by`,`updated_at`) values (3,9,'1','jfgj','ghjfgh','7','77','7','7','2018-03-29 14:26:01',1,21,NULL),(4,9,'hjh','fgfg','fgdf','12','12','12','21','2018-03-29 14:41:37',1,21,NULL),(5,9,'hjh','fgfg','fgdf','12','12','12','21','2018-03-29 14:42:09',1,21,NULL),(6,9,'yty','yty','vasu','7','87','78','8','2018-03-29 14:42:32',1,21,NULL),(7,9,'yuyt','ytu','vasu','12','12','12','1','2018-03-29 14:43:08',1,21,NULL),(8,9,'yuyt','ytu','vasu','12','12','12','1','2018-03-29 14:43:52',1,21,NULL),(9,9,'12','21','vasu','1','1','1','1','2018-03-29 14:46:38',1,21,NULL),(10,9,'123','212','vasu12','2','2','2','2','2018-03-29 14:47:22',1,21,'2018-03-29 16:12:26'),(11,9,'2','rt','deva','10','10','10','145','2018-03-29 14:48:09',1,21,'2018-03-29 16:12:26'),(12,9,'testing','fg','reddy','10','101','010','12','2018-03-29 14:48:10',1,21,NULL),(13,9,'f','fdg','vasu','10','23','31','21','2018-03-29 14:48:10',1,21,NULL),(14,9,'ghdfg','hfgh','fghfghf','10','10','10','10','2018-03-29 14:49:38',1,21,NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `medicine_name` */

insert  into `medicine_name`(`id`,`hos_id`,`medicine_name`,`added_by`,`create_at`,`status`) values (1,9,'vasu',21,'2018-03-29 14:42:09',1),(2,9,'vasu',21,'2018-03-29 14:42:32',1),(3,9,'deva',21,'2018-03-29 14:48:09',1),(4,9,'reddy',21,'2018-03-29 14:48:10',1),(5,9,'fghfghf',21,'2018-03-29 14:49:38',1);

/*Table structure for table `notifications` */

DROP TABLE IF EXISTS `notifications`;

CREATE TABLE `notifications` (
  `int_id` int(11) NOT NULL AUTO_INCREMENT,
  `hos_id` int(11) DEFAULT NULL,
  `comment` text,
  `create_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `sent_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`int_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `notifications` */

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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `patient_billing` */

insert  into `patient_billing`(`b_id`,`p_id`,`visit_no`,`visit_desc`,`date_of_visit`,`department`,`docotr_name`,`no_of_visits`,`last_visiting_date`,`service_type`,`service`,`visit_type`,`doctor`,`payer`,`price`,`qty`,`amount`,`bill`,`patient_payer_deposit_amount`,`payment_mode`,`bill_amount`,`received_form`,`treatment_id`,`doct_id`,`completed`,`create_at`,`updated_at`,`doctor_status`,`assign_doctor_to`,`assign_doctor_by`,`completed_type`,`type`,`create_by`,`medicine_payment_mode`,`payment_updated_by`,`payment_createed_by`,`report_completed`) values (1,8,'klk','kl','2018-03-20  ','kl','kl','12','2018-03-20  ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2018-03-20 18:43:59',NULL,0,NULL,NULL,NULL,'new',NULL,NULL,0,NULL,0),(2,8,'klk','yty','2018-03-20','kl','kl','12','2018-03-20',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2018-03-20 18:45:31',NULL,0,NULL,NULL,1,'reschedule',NULL,NULL,0,NULL,0),(3,8,'klk','yty','2018-03-20','kl','kl','12','2018-03-20',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'cash','45000','vasudevareddy','1','12',1,'2018-03-20 18:52:04','2018-03-21 15:54:33',1,0,0,2,'new',12,NULL,0,NULL,1),(4,8,'46456','ff','2018-03-20','phy','ttt','df','2018-03-21  ','testing','staff','yty','test','vaasudevareddy','456321','10','25000','due','45000','cash','45000','vasudevareddy','1','12',1,'2018-03-21 10:34:22','2018-03-21 15:54:33',1,0,0,2,'reschedule',12,'Cash Payment',7,'2018-04-07 15:35:10',0),(5,8,'12','12','1899-12-21  ','df','dfsdf','sdfds','2018-04-04  ','dfds','fsdfd','sdf','fsdf','dfasdf','df','34','4343','34343','343432','4234','34234','34234','2','12',1,'2018-04-03 11:29:17','2018-04-03 11:30:01',1,0,0,2,'reschedule',12,NULL,0,NULL,0),(6,8,'12','uiyui','2018-04-26  ','tyuiyt','yuiytui','uyi','1899-12-13  ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'2018-04-03 11:37:08',NULL,0,NULL,NULL,NULL,'reschedule',NULL,NULL,0,NULL,0),(7,8,'gd','ghdfg','2018-04-03  ','df','gdg','ghd','2018-04-03  ','gdfgh','ghdfg','hfgh','ghdfg','dfghdf','ghdfgh','gdg','45000','gdgh','250000','netbanking','1233456','ffg',NULL,NULL,0,'2018-04-03 12:37:28','2018-04-03 13:56:18',0,NULL,NULL,NULL,'new',NULL,NULL,0,NULL,0),(8,10,'fghh','dfgh','2018-04-09  ','fgdfg','fgdf','fgfd','2018-04-10  ','fgdfg','fgdfg','fg','fdgdfg','fgdfg','fgdf','65','56546','5656','6767','cashmode','454656','hgh',NULL,NULL,0,'2018-04-09 17:44:17','2018-04-09 17:44:58',0,NULL,NULL,NULL,'new',NULL,NULL,0,NULL,0),(9,11,'123456','visit','2018-04-09  ','yuty','kl','12','2018-03-20','testing','staff','yty','test','vaasudevareddy','456321','12','25000','25000','45000','cash','45000','vasudevareddy','1','12',1,'2018-04-09 17:52:31','2018-04-09 17:53:41',1,0,0,2,'new',12,NULL,0,NULL,0);

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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `patient_lab_reports` */

insert  into `patient_lab_reports`(`id`,`p_id`,`b_id`,`hos_id`,`problem`,`symptoms`,`image`,`create_at`,`status`,`create_by`) values (1,8,3,9,'2','22','1523273542.docx','2018-04-09 17:02:22',1,8),(5,8,3,9,'fgfd','fg','1523274144.docx','2018-04-09 17:12:23',1,8),(6,8,3,9,'blood test','fgfg',NULL,'2018-04-09 17:12:23',1,8),(7,8,3,9,'uytyu','ytutyu','1523274175.docx','2018-04-09 17:12:55',1,8),(9,8,4,9,'cvxcv','xcvxzcv','1523274704.docx','2018-04-09 17:21:44',1,8),(10,8,5,9,'vbxcvb','vcbxcv','1523274729.docx','2018-04-09 17:22:09',1,8),(11,8,5,9,'gg','hfgh','1523275182.docx','2018-04-09 17:29:42',1,8),(12,11,9,9,'DFDSF','SDFSDF','1523277017.pdf','2018-04-09 18:00:16',1,8),(13,8,3,9,'hjgh','hgjgh','1523278691.docx','2018-04-09 18:28:11',1,8),(14,8,3,9,'hjgh','hgjgh','1523278734.docx','2018-04-09 18:28:53',1,8),(15,8,3,9,'ghdfg','gfhfdg','1523278920.docx','2018-04-09 18:32:00',1,8);

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
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

/*Data for the table `patient_lab_test_list` */

insert  into `patient_lab_test_list`(`it`,`p_id`,`b_id`,`test_id`,`create_at`,`date`,`create_by`,`status`) values (1,8,3,1,'2018-04-05 16:13:39','2018-04-05',12,1),(2,8,3,1,'2018-04-05 16:17:22','2018-04-05',12,1),(3,8,3,1,'2018-04-05 16:20:45','2018-04-05',12,1),(4,8,3,1,'2018-04-05 16:22:00','2018-04-05',12,1),(6,8,3,1,'2018-04-05 16:29:25','2018-04-05',12,1),(7,8,3,1,'2018-04-05 16:29:40','2018-04-05',12,1),(8,8,3,1,'2018-04-05 16:29:44','2018-04-05',12,1),(9,8,3,2,'2018-04-05 16:29:44','2018-04-05',12,1),(10,8,3,1,'2018-04-05 16:31:47','2018-04-05',12,1),(11,8,3,1,'2018-04-05 16:36:42','2018-04-05',12,1),(12,8,3,1,'2018-04-05 16:38:17','2018-04-05',12,1),(13,8,3,1,'2018-04-05 16:40:17','2018-04-05',12,1),(14,8,3,2,'2018-04-05 16:40:17','2018-04-05',12,1),(15,8,3,1,'2018-04-05 16:53:14','2018-04-05',12,1),(16,8,3,1,'2018-04-05 17:33:51','2018-04-05',12,1),(17,8,3,2,'2018-04-05 17:33:51','2018-04-05',12,1),(18,8,3,1,'2018-04-05 17:34:51','2018-04-05',12,1),(19,8,3,2,'2018-04-05 17:34:51','2018-04-05',12,1),(20,8,3,1,'2018-04-07 11:02:14','2018-04-07',12,1),(21,8,5,1,'2018-04-09 17:20:36','2018-04-09',12,1),(22,8,5,2,'2018-04-09 17:20:36','2018-04-09',12,1),(23,11,9,1,'2018-04-09 17:59:29','2018-04-09',12,1),(24,11,9,2,'2018-04-09 17:59:29','2018-04-09',12,1);

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `patient_medicine_list` */

insert  into `patient_medicine_list`(`m_id`,`p_id`,`b_id`,`type_of_medicine`,`medicine_name`,`substitute_name`,`condition`,`dosage`,`route`,`frequency`,`directions`,`formdate`,`todate`,`qty`,`units`,`comments`,`create_at`,`date`,`create_by`,`edit_reason`,`edited`,`edited_by`,`amount`) values (3,8,4,'Brand','AK','Yes','PRN','350 g','Mouth','Write Your Own','dfsd','03 April 2018','03 April 2018','45','es','fd','2018-04-03 18:31:58','2018-04-03',12,'ghg',1,7,458),(4,8,4,'Brand','HI','Yes','Chronic','350 g','Mouth','At Bedtime','hj','06 April 2018','07 April 2018','12','suppository','g','2018-04-05 11:27:44','2018-04-05',12,'hjfghj',1,7,45),(5,8,4,'Generic','fgdf','Yes','Chronic','350 g','Mouth','Every Three Hours','tyrt','07 April 2018','07 April 2018','34','mg','dfsdfds','2018-04-07 10:46:29','2018-04-07',12,'ghjfgh',1,7,456),(6,8,3,'Generic','fgdf','Yes','PRN','550 g','Mouth','Every Three Hours While Awake','hjfgh','07 April 2018','06 April 2018','67','pound','uytu','2018-04-07 10:57:48','2018-04-07',12,NULL,0,NULL,NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `patient_vitals_list` */

insert  into `patient_vitals_list`(`id`,`p_id`,`b_id`,`assessment_type`,`vitaltype`,`tep_actuals`,`tep_range`,`temp_site_positioning`,`notes`,`pulse_actuals`,`pulse_range`,`pulse_rate_rhythm`,`pulse_rate_vol`,`notes1`,`create_at`,`date`) values (3,8,7,'Infection','Chief complaint','1','2','5','11','2','21','2','2','2','2018-04-03 14:17:58','2018-04-03'),(4,8,7,'Infection','Chief complaint','55','55','555','22','11','33','44','99','88','2018-04-03 14:25:43','2018-04-03'),(11,8,3,'Infection','Chief complaint','1','2','3','4','5','6','7','8','9','2018-04-07 10:55:36','2018-04-07'),(12,0,0,NULL,NULL,'1','1','1','1','1','1','11','1','1','2018-04-09 17:45:20','2018-04-09'),(13,0,0,NULL,NULL,'1','2','3','4','5','6','7','8','9','2018-04-09 17:56:05','2018-04-09'),(14,11,9,NULL,NULL,'1','2','3','4','5','6','7','8','9','2018-04-09 17:57:47','2018-04-09'),(15,11,9,'Infection','Chief complaint','1','2','3','4','5','6','6','6','8','2018-04-09 17:59:03','2018-04-09');

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `patients_list_1` */

insert  into `patients_list_1`(`pid`,`hos_id`,`registrationtype`,`patient_category`,`name`,`mobile`,`email`,`dob`,`age`,`bloodgroup`,`martial_status`,`nationali_id`,`perment_address`,`p_c_name`,`p_s_name`,`p_zipcode`,`p_country_name`,`temp_address`,`t_c_name`,`t_s_name`,`t_zipcode`,`t_country_name`,`religion`,`caste`,`mothername`,`language`,`primarylanguage`,`preferred_language`,`occupation`,`education`,`birth_place`,`work_phone`,`home_phone`,`citizen_proof`,`patient_identifier`,`relation`,`first_name`,`middel_name`,`last_name`,`next_address1`,`next_address2`,`next_pincode`,`next_city`,`next_state`,`next_country`,`next_email`,`next_mobile`,`next_occupation`,`referred`,`internal_external`,`search_doctor`,`relationship`,`g_first_name`,`g_middel_name`,`g_last_name`,`gender`,`nationality`,`g_language`,`living`,`g_address1`,`g_address2`,`g_pincode`,`g_city`,`g_state`,`g_country`,`payer_name`,`payer_mobile`,`payer_address`,`dependency`,`arrangement`,`incomegroup`,`description`,`confidential`,`student`,`barcode`,`create_at`,`create_by`,`updated_at`) values (8,9,'New','Staff','testtttt','85000050944','vasu@gmail.com','2018-03-19','27','o','Single','123456789014444','kothappli','mydukur','ap','516172','india','kukatpalli village','hyd','ts','50007','india','hj','oc','lakshmi','English','English','Telugu','job','btech','kothappli','8500050944','8019345212','Yes','','Relation','vasu','deve','reddy','test','test','516172','hyd',' ts','india','vasu@gmail.com','8500050944','job','vasu','internal','somethig','Relationship','First name','Last name','Last name','Female','Nationality','Telugu','Living dependency','XGFD','FGFD','516172','CITY','TS','FHF','jhgh','85222000212','ghjghjfgh','ytutyu','yutyu','ytutyu','yturtyu','yturtyu','ytuytu','15214532188.png','2018-04-03 12:37:01',15,'2018-04-03 12:37:12'),(9,9,'','','','','','0000-00-00','','','','','','','','','','','','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'15232635149.png','2018-04-09 14:15:14',8,NULL),(10,9,'New','VIP','gh','6756767777','utyuty@gmail.com','0000-00-00','56','b','Single','67546767567','fghfg','gfhfg','hf','65555','india','gfhfgh','gfgh','fghdfg','563456','india','tyty','tyerty','tyty','English','English','Telugu','ghdfg','hdfgh','67567','6756745667','6756767666','Yes','1523275514.png','hfgj','fghjfgh','jgfhj','jfgh','gfhjfg','hjfgh','666666','jfgh','hgjfg','hjgfh','hgfjg@gmail.com','67657677767','jfghjgfh','fgfdg','fdgdf','fdgdf','fgsdfg','fdgdfg','gfdg','fgdf','Other','567676765','English','gfhfdgh','ghdfg','hfghdf','676756','ghdfgh','6756','6765','gfhhf','6767657677','ghfg','gfhfg','hdfghf','hfdgh','ghdfg','fghfdg','hfghfd','152327549310.png','2018-04-09 17:34:52',5,'2018-04-09 17:43:57'),(11,9,'New','International cash','bayapureddy','85000226782','bayapu@gmail.com','1992-04-09','27','o positive','Single','96321458741','kothappla','mydukur','ap','516172','india','hyd','hyd','ts','516172','india','indin','oc','test','Telugu','Telugu','Telugu','emp','btech','kothapalli','1236547895','7412589632','Yes','','Relation','bayapu','reddy','test','likethat','address','516172','hyd','ts','inid','india@gmail.com','7412589632','emp','vasu','internal','somethig','Relationship','First name','Last name','Last name','Male','Nationality','Telugu','Living dependency','test','testing','516172','CITY','TS','FHF','jhgh','85222000212','ghfgh','ytutyu','yutyu','ytutyu','ytu','yturtyu','ytuytu','152327635111.png','2018-04-09 17:49:11',6,'2018-04-09 17:51:32');

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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

/*Data for the table `resource_list` */

insert  into `resource_list`(`r_id`,`a_id`,`role_id`,`hos_id`,`resource_name`,`resource_mobile`,`resource_add1`,`resource_add2`,`resource_city`,`resource_state`,`resource_zipcode`,`resource_other_details`,`resource_contatnumber`,`resource_email`,`resource_photo`,`resource_document`,`resource_bank_holdername`,`resource_bank_accno`,`resource_ifsc_code`,`resource_other_document`,`r_status`,`r_created_at`,`r_updated_at`,`r_create_by`,`current_status`) values (1,4,3,9,'res1',NULL,NULL,'fghd','hyd','ts',NULL,'fnjhdf','8527418527','rec@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,2,'2018-02-22 19:01:23','2018-02-23 10:42:37',3,NULL),(2,5,3,9,'res2','6745674674','hjfghj','jgfhj','fgfdg','ts',NULL,'fnjhdf','8527418527','rec1@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,2,'2018-02-23 12:37:24','2018-02-23 15:44:33',3,NULL),(3,6,3,9,'res3','9874563211','uyi','yuopyo','fgfdg','ts','516172','fnjhdf','8527418527','rec2@gmail.com',NULL,NULL,'vasudevareddy','32472655713','SBIN0002671',NULL,2,'2018-02-23 16:31:46','2018-02-23 16:33:53',3,NULL),(4,7,4,9,'pharamcy','9874563211','pharamcy','pharamcy','hyd','ta',NULL,'fnjhdf','8527418527','phr1@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,1,'2018-02-23 12:38:14',NULL,3,NULL),(5,8,5,9,'lab ass','9874563211','gfgd','ghfgdhfgh','kadapa','ap','516172','ntg','8500050944','lab@gmail.com',NULL,NULL,'vasu','1234567896','SBIN0002612',NULL,1,'2018-04-09 12:02:29',NULL,3,NULL),(6,9,6,9,'doctor','9874563211','dfdg','fgdfg','fgfdg','ts',NULL,'fnjhdf','8527418527','doc@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,0,'2018-02-23 12:45:32','2018-02-23 16:32:47',3,NULL),(7,11,3,10,'bayares2','9874563211','ytuytu','tyuu','fgfdg','ts',NULL,'fnjhdf','8527418527','bayph1@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,1,'2018-02-23 12:49:59',NULL,10,NULL),(8,12,6,9,'doc2','9874563211','fggj','jghj','hjfgj','hjfghj',NULL,'hjfgh','8527418527','doc2@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,1,'2018-02-23 13:13:08',NULL,3,NULL),(9,13,6,9,'doc0','9874563211','add','add3','hyd','ts','32216','ntg','8500050944','doc3@gmail.com',NULL,NULL,'fgfdg','1234567896','SBIN0002612',NULL,0,'2018-03-26 11:18:08','2018-02-23 16:30:24',3,NULL),(11,15,3,9,'res4','9874563211','tyrt','ytyt','fgfdg','ts','516172','fnjhdf','8527418527','phrtytry1@gmail.com','1519382821.jpg','11519382633.xlsx','vasudevareddy','32472655713','SBIN0002671','1519382733.docx',1,'2018-02-23 16:24:56',NULL,3,NULL),(12,16,6,9,'doctor6','6745674674','test','test4','fgfdg','ts','516172','fnjhdf','8527418527','doctor6@gmail.com','1519645893.jpg','11519624028.docx','vasudevareddy','32473655712','SBIN0002671','1519645871.docx',1,'2018-02-26 17:32:01',NULL,3,NULL),(13,17,5,9,'lab assistent','8500050944','kothapalli','testing','hyd','ap','516172','tg','8500050944','labassistent@gmail.com','1519627355.jpg','','vasudevareddy','32472655713','SBIN0002671','',1,'2018-02-26 12:12:35',NULL,3,NULL),(14,18,6,9,'doct1','1234567896','fg','gfdg','fdfgh','gfhfg','12345','ghfgh','6456756767','vasu1234567@gmail.com','','','vasudevareddy','1236547896','SBIN0002672','',1,'2018-03-21 14:56:55',NULL,3,NULL),(15,19,6,9,'doct4','1234567896','uiyu','uui','u','gfhfg','12345','ghfgh','146355676577','vasu1234fgfh567@gmail.com','','','vasudevareddy','1236547896','SBIN0002672','',1,'2018-03-21 14:57:48',NULL,3,NULL),(16,20,6,9,'doct3','1234567896','dgdf','gdfg','fdfgh','gfhfg','12345','ghfgh','6456756767','vasu1234567ghfg@gmail.com','','','vasudevareddy','1236547896','SBIN0002672','',1,'2018-03-21 14:58:20',NULL,3,NULL);

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `r_id` int(11) NOT NULL AUTO_INCREMENT,
  `r_name` varchar(250) DEFAULT NULL,
  `r_status` int(11) DEFAULT '1',
  PRIMARY KEY (`r_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `roles` */

insert  into `roles`(`r_id`,`r_name`,`r_status`) values (1,'Admin',1),(2,'Hospital Admin',1),(3,'Receptionist',1),(4,'Pharmacy',1),(5,'lab coordinator',1),(6,'Doctor',1),(7,'Patient',1);

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
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

/*Data for the table `team_chating` */

insert  into `team_chating`(`id`,`user_id`,`replay_user_id`,`from`,`comment`,`image`,`type`,`create_at`,`updated_by`) values (1,21,NULL,21,'testing purpose','','Replay','2018-03-26 13:11:02',NULL),(2,21,NULL,21,'ghdfgh','','Replay','2018-03-26 13:11:39',NULL),(3,21,NULL,21,'fgsdfgfd','','Replay','2018-03-26 13:11:52',NULL),(4,21,NULL,21,'kljkl','1522052350.docx','Replay','2018-03-26 13:49:10',NULL),(5,21,NULL,21,'vvcn','1522053124.jpg','Replay','2018-03-26 14:02:03','2018-03-26 14:02:03'),(6,21,1,1,'tytryrty','','Replayed','2018-03-26 15:22:42','2018-03-26 15:22:42'),(8,21,1,1,'fgutyuty','','Replayed','2018-03-26 15:27:03','2018-03-26 15:27:03'),(9,21,1,1,'ghfghfgh','1522058243.docx','Replayed','2018-03-26 15:27:23','2018-03-26 15:27:23'),(10,21,1,1,'fgfdgf','','Replayed','2018-03-26 16:42:12','2018-03-26 16:42:12'),(11,21,1,1,'testing purpose','1522063096.docx','Replayed','2018-03-26 16:48:15','2018-03-26 16:48:15'),(12,21,1,1,'','','Replayed','2018-03-26 16:51:33','2018-03-26 16:51:33'),(13,21,0,0,'yuytu','','Replay','2018-03-26 16:55:50','2018-03-26 16:55:50'),(14,21,1,1,'jhgh','','Replayed','2018-03-26 16:58:36','2018-03-26 16:58:36'),(15,21,0,0,'yutyu','','Replay','2018-03-26 16:59:05','2018-03-26 16:59:05'),(16,21,0,0,'fgfg','','Replay','2018-03-26 16:59:24','2018-03-26 16:59:24'),(17,21,1,1,'ghgf','','Replayed','2018-03-26 17:24:30','2018-03-26 17:24:30'),(23,12,0,0,'hello hi','','Replay','2018-04-06 10:55:25','2018-04-06 10:55:25'),(24,12,3,3,'hello','','Replayed','2018-04-06 10:55:48','2018-04-06 10:55:48'),(25,12,3,3,'hello','1522994134.png','Replayed','2018-04-06 11:25:34','2018-04-06 11:25:34'),(26,12,3,3,'hello','','Replayed','2018-04-06 11:28:06','2018-04-06 11:28:06'),(27,12,3,3,'yt','','Replayed','2018-04-06 11:29:12','2018-04-06 11:29:12'),(28,12,0,0,'hjgh','','Replay','2018-04-06 17:43:21','2018-04-06 17:43:21'),(29,12,3,3,'ljhkljk','','Replayed','2018-04-06 17:43:40','2018-04-06 17:43:40'),(30,8,0,0,'hello','','Replay','2018-04-07 17:43:39','2018-04-07 17:43:39'),(31,8,3,3,'gdfg','1523106222.png','Replayed','2018-04-07 18:33:42','2018-04-07 18:33:42');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `treament` */

insert  into `treament`(`t_id`,`hos_id`,`t_name`,`t_status`,`t_create_at`,`t_updated_at`,`t_create_by`) values (1,9,'anglogyi',1,'2018-02-23 17:14:24','2018-02-23 17:49:23',3),(2,9,'test166',1,'2018-02-23 17:15:29','2018-02-23 17:49:46',3),(3,9,'test166',1,'2018-02-23 17:50:01','2018-02-23 17:50:11',3);

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
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

/*Data for the table `treatmentwise_doctors` */

insert  into `treatmentwise_doctors`(`t_d_id`,`hos_id`,`t_d_doc_id`,`t_d_name`,`t_d_status`,`t_d_create_at`,`t_d_updated_at`,`t_d_create_by`) values (19,9,12,'1',1,'2018-03-21 16:40:51','2018-03-21 16:40:51',3),(20,9,18,'2',1,'2018-03-21 16:45:38','2018-03-21 16:45:38',3),(21,9,16,'1',1,'2018-04-05 11:45:33','2018-04-05 11:45:33',3);

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
