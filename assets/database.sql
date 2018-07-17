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
) ENGINE=InnoDB AUTO_INCREMENT=184 DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`a_id`,`role_id`,`a_email_id`,`a_username`,`a_password`,`a_org_password`,`a_name`,`a_mobile`,`a_profile_pic`,`a_status`,`a_create_at`,`a_updated_at`,`out_source`,`create_by`) values (1,1,'admin@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Admin','8500050944','1527914484.jpg',1,'2018-02-21 11:15:43',NULL,0,NULL),(2,8,'team@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Software Team','8500050944','1523699376.png',1,NULL,NULL,0,NULL),(172,2,'vasu@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Hospital Admin','8500050944',NULL,2,'2018-06-14 11:50:40','2018-07-16 15:07:16',0,NULL),(173,5,'outlab@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','out sources lab','8500050944',NULL,1,'2018-06-14 11:57:38',NULL,1,1),(174,5,'outlab2@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','out sources lab2','8500050944',NULL,1,'2018-06-14 11:58:27',NULL,1,1),(175,3,'recp@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','recption','8500226782',NULL,1,'2018-06-14 12:01:47',NULL,0,NULL),(176,4,'phar@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Pharmacy','86785678678',NULL,1,'2018-06-14 12:02:33',NULL,0,NULL),(177,5,'lab@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','lab','1234567890123',NULL,1,'2018-06-14 12:03:12','2018-07-13 12:22:26',0,NULL),(178,6,'doct@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','vasudevareddy','8500050944',NULL,1,'2018-06-14 12:04:07',NULL,0,NULL),(179,6,'bbbb@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','tyyt','8019345212',NULL,1,'2018-07-13 12:00:07','2018-07-13 12:21:32',0,NULL),(180,2,'vasu@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Hospital Admin','8500050944',NULL,2,'2018-07-16 15:09:04','2018-07-16 15:09:47',0,NULL),(181,2,'vasu@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Hospital Admin','8500050944',NULL,1,'2018-07-16 15:09:57',NULL,0,NULL),(182,6,'',NULL,'d41d8cd98f00b204e9800998ecf8427e','','','',NULL,1,'2018-07-16 18:08:16',NULL,0,NULL),(183,6,'87@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','tyyt','675676576756',NULL,1,'2018-07-16 18:09:59','2018-07-16 18:10:30',0,NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

/*Data for the table `admin_chating` */

insert  into `admin_chating`(`id`,`sender_id`,`comments`,`image`,`reciver_id`,`create_at`,`type`,`create_by`) values (36,1,'hi','','45','2018-06-04 12:21:29','Replay',1),(37,1,'hello','','45','2018-06-06 15:40:01','Replay',1),(38,160,'hi','','49','2018-06-07 12:27:29','Replayed',160),(39,1,'hi','','47','2018-06-11 14:38:12','Replay',1),(40,1,'hi','','47','2018-06-11 14:38:16','Replay',1),(41,1,'hello','','45','2018-06-11 14:58:57','Replayed',144);

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `announcements` */

insert  into `announcements`(`int_id`,`hos_id`,`comment`,`create_at`,`status`,`sent_by`,`readcount`) values (1,47,'hi','2018-06-11 14:39:44',1,1,1);

/*Table structure for table `appointments` */

DROP TABLE IF EXISTS `appointments`;

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hos_id` int(11) DEFAULT NULL,
  `patinet_name` varchar(250) DEFAULT NULL,
  `age` varchar(250) DEFAULT NULL,
  `mobile` varchar(45) DEFAULT NULL,
  `department` varchar(250) DEFAULT NULL,
  `specialist` varchar(45) DEFAULT NULL,
  `doctor_id` varchar(45) DEFAULT NULL,
  `date` varchar(250) DEFAULT NULL,
  `time` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '0' COMMENT '1= confirm, 0=pending,2 reject',
  `create_at` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  `coming_through` int(11) DEFAULT NULL,
  `patient_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `appointments` */

insert  into `appointments`(`id`,`hos_id`,`patinet_name`,`age`,`mobile`,`department`,`specialist`,`doctor_id`,`date`,`time`,`status`,`create_at`,`create_by`,`coming_through`,`patient_id`) values (1,51,'vasudevareddy','27','85000050944','108','110','178','2018-07-13  ','09:30 am',1,'2018-07-13 16:10:26',175,1,NULL),(2,51,'reddem','27','8019345212','108','112','178','2018-07-13  ','02:30 pm',1,'2018-07-13 16:19:08',175,1,125);

/*Table structure for table `bidding_test` */

DROP TABLE IF EXISTS `bidding_test`;

CREATE TABLE `bidding_test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `b_id` int(11) DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=117 DEFAULT CHARSET=latin1;

/*Data for the table `bidding_test` */

insert  into `bidding_test`(`id`,`b_id`,`test_id`,`p_l_t_id`,`lab_id`,`status`,`create_at`,`amount`,`duration`,`send_by`,`create_by`) values (97,181,97,172,173,4,'2018-06-14 12:54:35','140',' 10 min',173,177),(102,181,100,174,173,4,'2018-06-14 12:54:35','120','10',173,177),(104,179,98,169,173,4,'2018-06-14 15:21:32','150','555',173,177),(106,179,99,170,173,4,'2018-06-14 15:21:32','200','120',173,177),(113,181,98,173,173,1,'2018-06-15 16:36:32',NULL,NULL,NULL,177),(114,181,98,173,174,1,'2018-06-15 16:36:32',NULL,NULL,NULL,177),(115,181,100,174,173,1,'2018-06-15 16:36:32',NULL,NULL,NULL,177),(116,181,100,174,174,1,'2018-06-15 16:36:32',NULL,NULL,NULL,177);

/*Table structure for table `coupon_codes` */

DROP TABLE IF EXISTS `coupon_codes`;

CREATE TABLE `coupon_codes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hospital_id` int(11) DEFAULT NULL,
  `coupon_code` varchar(250) DEFAULT NULL,
  `type` varchar(250) DEFAULT NULL,
  `percentage_amount` varchar(250) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `updated_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

/*Data for the table `coupon_codes` */

insert  into `coupon_codes`(`id`,`hospital_id`,`coupon_code`,`type`,`percentage_amount`,`create_at`,`create_by`,`status`,`updated_time`) values (25,51,'raghu','Percentage','25','2018-06-04 12:18:48',1,1,'2018-07-13 12:56:28'),(27,51,'arya','Percentage','25','2018-06-11 14:28:46',1,0,'2018-07-13 12:55:54'),(28,51,'testing','Percentage','10','2018-07-13 12:42:20',1,1,'2018-07-13 12:53:54');

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
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

/*Data for the table `hospital` */

insert  into `hospital`(`hos_id`,`a_id`,`hos_con_number`,`reschedule_date`,`hos_email_id`,`hos_representative`,`hos_rep_contact`,`mob_country_code`,`hos_rep_mobile`,`hos_rep_email`,`hos_rep_nationali_id`,`hos_rep_add1`,`hos_rep_add2`,`hos_rep_zipcode`,`hos_rep_city`,`hos_rep_state`,`hos_rep_country`,`hos_bas_name`,`hos_bas_contact`,`hos_bas_email`,`hos_bas_nationali_id`,`hos_bas_add1`,`hos_bas_add2`,`hos_bas_zipcode`,`hos_bas_city`,`hos_bas_state`,`hos_bas_country`,`hos_bas_document`,`hos_bas_logo`,`bank_holder_name`,`bank_acc_no`,`bank_name`,`bank_ifsc`,`bank_document`,`kyc_doc1`,`kyc_doc2`,`kyc_doc3`,`kyc_file1`,`kyc_file2`,`kyc_file3`,`hos_status`,`hos_created`,`hos_updated_at`,`hos_curent_login`,`hos_undo`,`out_source_lab`,`barcode`) values (51,172,'8500050944',NULL,'vasu@gmail.com','Representative','8500050944','+91','8500050944','vasu@gmail.com','12345678999','hyderabad','hyderabad','516172','kadapa','Andhra Pradesh','india','vaasu Hospital','8500050944','vaasuhospital@gmail.com','1234567897','kafdapa','kadapa','516172','kadapa','Andhra Pradesh','india','',NULL,'vasudevareddy','32473655713','SBI','SBIN0002671','','another detals purpose','','','1528957609.docx','','',0,'2018-06-14 11:50:40','2018-07-16 15:07:16',1,1,0,'1528957240172.png'),(52,180,'8500050944',NULL,'vasu@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'2018-07-16 15:09:04','2018-07-16 15:09:47',0,1,0,'1531733944180.png'),(53,181,'8500050944',NULL,'vasu@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2018-07-16 15:09:57','2018-07-16 15:09:57',1,0,0,'1531733997181.png');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `hospital_admin_chating` */

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `hospital_announcements` */

insert  into `hospital_announcements`(`int_id`,`res_id`,`comment`,`create_at`,`status`,`sent_by`,`readcount`) values (1,177,'hiiii ','2018-07-16 10:50:52',1,172,1),(2,176,'hiiii ','2018-07-16 10:50:52',1,172,1),(3,175,'hiiii ','2018-07-16 10:50:52',1,172,1),(4,179,'hiiii ','2018-07-16 10:50:52',1,172,1),(5,178,'hiiii ','2018-07-16 10:50:52',1,172,1),(6,182,'ghdfghdfgh','2018-07-17 14:55:47',1,181,1),(7,183,'ghdfghdfgh','2018-07-17 14:55:47',1,181,1);

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
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=latin1;

/*Data for the table `investigation_patient_list` */

insert  into `investigation_patient_list`(`id`,`p_id`,`b_id`,`investigation_type`,`countrycode`,`contact_number`,`frequency`,`priority`,`investigation_formdate`,`investigation_todate`,`associate_diagnosis`,`associate_problems`,`create_at`,`create_by`,`date`) values (66,115,179,'lab','','','6 hours','Medium','','','diagnois','heart','2018-06-14 12:18:46',178,'2018-06-14'),(67,117,181,'lab','','','4 hours','Medium','','','diagnois','heart','2018-06-14 12:20:31',178,'2018-06-14');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `lab_detailes` */

/*Table structure for table `lab_test_list` */

DROP TABLE IF EXISTS `lab_test_list`;

CREATE TABLE `lab_test_list` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `hos_id` int(11) DEFAULT NULL,
  `t_name` varchar(250) DEFAULT NULL,
  `test_type` int(11) DEFAULT NULL,
  `type` varchar(250) DEFAULT NULL,
  `modality` varchar(250) DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=latin1;

/*Data for the table `lab_test_list` */

insert  into `lab_test_list`(`t_id`,`hos_id`,`t_name`,`test_type`,`type`,`modality`,`duration`,`amuont`,`t_short_form`,`t_description`,`t_department`,`create_at`,`status`,`create_by`,`update_by`,`out_source`) values (95,51,'blood',39,'Lab','','10 min','120','Short form','Description','','2018-06-14 12:06:29',1,177,NULL,0),(96,51,'heart check',34,'Lab','','2 hrs','5000','Short form','Description','','2018-06-14 12:06:48',1,177,NULL,0),(97,0,'heart check',39,'Lab','','20 min','120','Short form','Description','','2018-06-14 12:07:27',1,173,NULL,1),(98,0,'cbc test',39,'Lab','','10 min','563','short','desc','','2018-06-14 12:07:50',1,173,NULL,1),(99,0,'heart check',39,'Lab','','20 min','120','Short form','desc','','2018-06-14 12:08:33',1,174,NULL,1),(100,0,'cbc test',39,'Lab','','10 min','5000','Short form','Description','','2018-06-14 12:08:53',1,174,NULL,1),(101,51,'tsting',34,'Radiology','oultrasound','10','20','110','Description','','2018-06-25 10:43:05',1,177,NULL,0);

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
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

/*Data for the table `lab_test_type` */

insert  into `lab_test_type`(`id`,`type_name`,`type`,`create_at`,`status`,`created_by`,`updated_time`) values (34,'heart','Lab','2018-06-04 11:04:32',1,1,NULL),(39,'CBC','Lab','2018-06-04 17:34:07',1,1,NULL);

/*Table structure for table `manual_prescription_list` */

DROP TABLE IF EXISTS `manual_prescription_list`;

CREATE TABLE `manual_prescription_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hos_id` varchar(250) DEFAULT NULL,
  `p_id` int(11) DEFAULT NULL,
  `expirydate` varchar(250) DEFAULT NULL,
  `medicine_name` varchar(250) DEFAULT NULL,
  `dosage` varchar(250) DEFAULT NULL,
  `usage_instructions` text,
  `qty` varchar(250) DEFAULT NULL,
  `amount` varchar(250) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `manual_prescription_list` */

insert  into `manual_prescription_list`(`id`,`hos_id`,`p_id`,`expirydate`,`medicine_name`,`dosage`,`usage_instructions`,`qty`,`amount`,`create_at`,`status`,`create_by`) values (1,'51',1,NULL,'22','22',NULL,'2222','22','2018-06-25 15:40:20',1,176),(2,'51',1,NULL,'11','11',NULL,'11','11','2018-06-25 15:40:20',1,176),(3,'51',2,NULL,'crosine','100 mg',NULL,'12','120','2018-06-25 15:49:03',1,176),(4,'51',3,NULL,'hjfghj','100 mg',NULL,'7','11','2018-06-25 15:53:11',1,176),(5,'51',4,NULL,'crosine','120 ml','like  that','20','2580','2018-06-25 16:14:02',1,176),(6,'51',4,NULL,'test','100mg','test','12','120','2018-06-25 16:14:02',1,176),(7,'51',5,NULL,'parasitemal',NULL,'','','','2018-07-06 18:25:52',1,176),(8,'51',5,NULL,'parasitemal',NULL,'','','','2018-07-06 18:25:52',1,176),(9,'51',6,NULL,'parasitemal',NULL,'','22','200','2018-07-06 18:26:16',1,176),(10,'51',6,NULL,'crosine',NULL,'','12','120','2018-07-06 18:26:16',1,176),(11,'51',7,NULL,'crosine',NULL,'klhkl','5','120','2018-07-10 17:36:47',1,176),(12,'51',7,NULL,'parasitemal',NULL,'lkl','10','110','2018-07-10 17:36:47',1,176),(13,'51',8,NULL,'crosine',NULL,'7','10','120','2018-07-10 17:37:19',1,176),(14,'51',9,NULL,'parasitemal',NULL,'','10','130','2018-07-10 17:37:48',1,176),(15,'51',9,NULL,'crosine',NULL,'','10','120','2018-07-10 17:37:48',1,176),(16,'51',12,'11-11-2018','crosine',NULL,'10','10','120','2018-07-10 18:17:44',1,176),(17,'51',12,'',NULL,NULL,'','','','2018-07-10 18:17:44',1,176);

/*Table structure for table `medicine_list` */

DROP TABLE IF EXISTS `medicine_list`;

CREATE TABLE `medicine_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hos_id` int(11) DEFAULT NULL,
  `hsn` varchar(250) DEFAULT NULL,
  `othercode` varchar(250) DEFAULT NULL,
  `medicine_name` varchar(250) DEFAULT NULL,
  `medicine_type` varchar(250) DEFAULT NULL,
  `expiry_date` varchar(250) DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=latin1;

/*Data for the table `medicine_list` */

insert  into `medicine_list`(`id`,`hos_id`,`hsn`,`othercode`,`medicine_name`,`medicine_type`,`expiry_date`,`dosage`,`qty`,`amount`,`total_amount`,`sgst`,`cgst`,`other`,`create_at`,`status`,`added_by`,`updated_at`) values (70,51,'1','11','crosine','this','12/12/2020','250mg','443','10','10.3','1','2',NULL,'2018-06-14 12:05:04',1,176,'2018-06-25 11:55:37'),(71,51,'2','22','parasitemal','like','12/12/2020','100mg','360','10','11','5','5',NULL,'2018-06-14 12:05:48',1,176,'2018-06-25 11:55:36'),(72,51,'111','11','11','11','12/12/2020','11','111','11','13.2','10','10',NULL,'2018-06-25 11:44:53',1,176,'2018-06-25 11:55:39'),(73,51,'22','222','222','test','12/12/2020','22','22','2','2.08','2','2',NULL,'2018-06-25 11:44:53',1,176,'2018-06-25 11:55:40'),(74,51,'','','','','','','','','0','','',NULL,'2018-06-25 14:23:44',1,176,NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

/*Data for the table `medicine_name` */

insert  into `medicine_name`(`id`,`hos_id`,`medicine_name`,`added_by`,`create_at`,`status`) values (45,51,'crosine',176,'2018-06-14 12:05:04',1),(46,51,'parasitemal',176,'2018-06-14 12:05:48',1),(47,51,'11',176,'2018-06-25 11:44:53',1),(48,51,'222',176,'2018-06-25 11:44:53',1),(49,51,'',176,'2018-06-25 14:23:44',1);

/*Table structure for table `notifications` */

DROP TABLE IF EXISTS `notifications`;

CREATE TABLE `notifications` (
  `int_id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` text,
  `create_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `create_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`int_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `notifications` */

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `out_source_lab_chating` */

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `out_source_lab_search` */

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
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=latin1;

/*Data for the table `out_source_lab_test_lists` */

insert  into `out_source_lab_test_lists`(`id`,`lab_id`,`p_l_t_id`,`p_id`,`b_id`,`status`,`create_at`,`create_BY`) values (67,173,174,117,181,0,'2018-06-14 12:59:41',177),(68,173,172,117,181,0,'2018-06-14 13:05:59',177),(69,173,169,115,179,0,'2018-06-14 15:22:02',177),(70,173,170,115,179,0,'2018-06-14 15:22:04',177),(72,173,97,123,199,1,'2018-07-06 17:47:38',177),(73,173,97,123,199,1,'2018-07-06 18:03:05',177),(74,173,97,123,199,1,'2018-07-06 18:04:08',177);

/*Table structure for table `patient_billing` */

DROP TABLE IF EXISTS `patient_billing`;

CREATE TABLE `patient_billing` (
  `b_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` int(11) DEFAULT NULL,
  `visit_no` varchar(250) DEFAULT NULL,
  `visit_desc` varchar(250) DEFAULT NULL,
  `service_type` varchar(250) DEFAULT NULL,
  `service` varchar(250) DEFAULT NULL,
  `visit_type` varchar(250) DEFAULT NULL,
  `qty` varchar(250) DEFAULT NULL,
  `amount` varchar(250) DEFAULT NULL,
  `bill` varchar(250) DEFAULT NULL,
  `patient_payer_deposit_amount` varchar(250) DEFAULT NULL,
  `payment_mode` varchar(250) DEFAULT NULL,
  `bill_amount` varchar(250) DEFAULT NULL,
  `received_form` varchar(250) DEFAULT NULL,
  `treatment_id` varchar(250) DEFAULT NULL,
  `doct_id` varchar(250) DEFAULT NULL,
  `specialist_id` int(11) DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=205 DEFAULT CHARSET=latin1;

/*Data for the table `patient_billing` */

insert  into `patient_billing`(`b_id`,`p_id`,`visit_no`,`visit_desc`,`service_type`,`service`,`visit_type`,`qty`,`amount`,`bill`,`patient_payer_deposit_amount`,`payment_mode`,`bill_amount`,`received_form`,`treatment_id`,`doct_id`,`specialist_id`,`completed`,`create_at`,`updated_at`,`doctor_status`,`assign_doctor_to`,`assign_doctor_by`,`completed_type`,`type`,`create_by`,`medicine_payment_mode`,`payment_updated_by`,`payment_createed_by`,`report_completed`,`sheet_prescription`,`sheet_prescription_file`,`coupon_code`,`coupon_code_amount`,`with_out_coupon_code`) values (179,115,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'500','Cash','50000','vasudevareddy','108','178',NULL,1,'2018-06-14 12:10:06','2018-06-14 12:11:27',1,0,0,2,'new',178,NULL,0,NULL,1,0,NULL,NULL,NULL,NULL),(180,116,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'50000','Cash','50000','vasudevareddy','108','178',NULL,1,'2018-06-14 12:14:14','2018-06-14 12:14:29',1,0,0,1,'new',178,'Cash Payment',176,'2018-06-14 12:21:17',0,0,NULL,NULL,NULL,NULL),(181,117,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'150','Cash','200','vasu',NULL,'178',NULL,1,'2018-06-14 12:15:32','2018-06-14 12:15:54',1,0,0,0,'new',178,NULL,0,NULL,0,0,NULL,NULL,NULL,NULL),(182,117,'123','testing','fghdfgh','','fghdfgh','','','','767','Cash','6756','6756','108','178',NULL,1,'2018-06-15 16:22:51','2018-06-15 16:23:11',1,178,178,3,'reschedule',178,'Swipe',176,'2018-07-12 17:28:31',0,0,NULL,NULL,NULL,NULL),(183,118,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'675677','Cash','6767','6767','108','178',NULL,1,'2018-06-23 10:56:06','2018-06-23 11:22:37',0,NULL,NULL,0,'new',NULL,NULL,0,NULL,0,0,NULL,NULL,NULL,NULL),(184,119,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'675677','Cash','6767','6767','108','178',NULL,1,'2018-06-23 11:28:11','2018-06-23 11:28:38',0,NULL,NULL,0,'new',NULL,NULL,0,NULL,0,0,NULL,NULL,NULL,NULL),(185,119,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'2018-06-23 11:34:00',NULL,0,NULL,NULL,0,'Reschedule',NULL,NULL,0,NULL,0,0,NULL,NULL,NULL,NULL),(187,119,'23434','fgdffdg','ghdfghg',NULL,'ip',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'108','178',NULL,0,'2018-06-23 13:01:38',NULL,0,NULL,NULL,0,'new',NULL,NULL,0,NULL,0,0,NULL,NULL,NULL,NULL),(188,119,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'675677','Cash','6767','6767','108','178',NULL,1,'2018-06-23 12:55:13','2018-06-23 12:55:25',0,NULL,NULL,0,'Reschedule',NULL,NULL,0,NULL,0,0,NULL,NULL,NULL,NULL),(189,120,'7657','67567','67567',NULL,'6756756',NULL,NULL,NULL,'250','Cash','667567','tyuytu','108','178',NULL,1,'2018-06-23 13:58:39','2018-06-23 14:06:46',0,NULL,NULL,0,'new',NULL,NULL,0,NULL,0,0,NULL,NULL,NULL,NULL),(190,120,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,0,NULL,NULL,0,NULL,NULL,NULL,0,NULL,0,0,NULL,NULL,NULL,NULL),(191,120,'23434','fgdffdg','ghdfghg',NULL,'ip',NULL,NULL,NULL,'250','Cash','6767','vasu','108','178',NULL,1,'2018-06-23 14:27:31','2018-06-23 14:27:40',0,NULL,NULL,0,'new',NULL,NULL,0,NULL,0,0,NULL,NULL,NULL,NULL),(192,121,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','',0,0,'2018-06-23 17:13:18',NULL,0,NULL,NULL,0,'new',NULL,NULL,0,NULL,0,0,NULL,NULL,NULL,NULL),(193,121,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'250','Cash','6767','vasudevareddy','108','178',110,1,'2018-06-25 10:23:30','2018-06-25 10:26:02',0,NULL,NULL,0,'Reschedule',NULL,NULL,0,NULL,0,1,NULL,NULL,NULL,NULL),(194,122,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'250','Cash','6767','vasudevareddy','108','178',110,1,'2018-06-25 12:43:36','2018-06-25 12:46:22',0,NULL,NULL,0,'new',NULL,NULL,0,NULL,0,0,NULL,NULL,NULL,NULL),(195,122,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'250','Cash','6767','vasudevareddy','108','178',112,1,'2018-06-25 13:02:34','2018-06-25 13:03:01',0,NULL,NULL,0,'Reschedule',NULL,NULL,0,NULL,0,0,NULL,NULL,NULL,NULL),(196,123,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'250','Cash','6767','vasudevareddy','108','178',110,1,'2018-07-06 17:19:57','2018-07-06 17:20:21',1,0,0,1,'new',178,'Swipe',176,'2018-07-06 18:14:08',0,0,NULL,NULL,NULL,NULL),(197,123,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'2018-07-06 17:22:18',NULL,0,NULL,NULL,0,'Reschedule',NULL,NULL,0,NULL,0,0,NULL,NULL,NULL,NULL),(198,123,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'2018-07-06 17:25:17',NULL,0,NULL,NULL,0,'Reschedule',NULL,NULL,0,NULL,0,0,NULL,NULL,NULL,NULL),(199,123,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'250','Cash','6767','vasudevareddy','108','178',110,1,'2018-07-06 17:27:57','2018-07-06 17:28:17',1,0,0,2,'Repeated',178,NULL,0,NULL,0,0,NULL,NULL,NULL,NULL),(200,123,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'500','Cash','500','vasu','108','178',110,1,'2018-07-06 17:33:40','2018-07-06 17:34:01',0,NULL,NULL,0,'Repeated',NULL,NULL,0,NULL,0,0,NULL,NULL,NULL,NULL),(201,123,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'250','Cash','6767','vasudevareddy','108','178',110,1,'2018-07-06 17:34:52','2018-07-06 17:35:08',0,NULL,NULL,0,'Reschedule',NULL,NULL,0,NULL,0,0,NULL,NULL,NULL,NULL),(202,125,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'2018-07-13 17:19:27',NULL,0,NULL,NULL,0,'new',NULL,NULL,0,NULL,0,0,NULL,NULL,NULL,NULL),(203,125,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'2018-07-13 17:27:02',NULL,0,NULL,NULL,0,'Repeated',NULL,NULL,0,NULL,0,0,NULL,NULL,NULL,NULL),(204,125,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'2018-07-13 17:27:07',NULL,0,NULL,NULL,0,'Repeated',NULL,NULL,0,NULL,0,0,NULL,NULL,NULL,NULL);

/*Table structure for table `patient_lab_reports` */

DROP TABLE IF EXISTS `patient_lab_reports`;

CREATE TABLE `patient_lab_reports` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `test_id` varchar(250) DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

/*Data for the table `patient_lab_reports` */

insert  into `patient_lab_reports`(`id`,`test_id`,`p_id`,`b_id`,`hos_id`,`problem`,`symptoms`,`image`,`create_at`,`status`,`create_by`) values (30,'95',115,179,51,'like that','vaasudevareddy','1528959158.docx','2018-06-14 12:22:38',1,177),(31,'100',117,181,0,'cbc test','serious','1528961466.docx','2018-06-14 13:01:06',1,173),(32,'97',117,181,0,'cbc test','tng','1528965731.docx','2018-06-14 14:12:10',1,173),(33,'95',117,181,51,'like that','vaasudevareddy','1528966189.docx','2018-06-14 14:19:49',1,177),(34,'98',115,179,0,'heart','tng','1528969959.docx','2018-06-14 15:22:38',1,173),(35,'99',115,179,0,'cbc test','tng','1528969968.docx','2018-06-14 15:22:48',1,173),(38,'97',123,199,0,'test','test','1530880466.docx','2018-07-06 18:04:25',1,173);

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
  `report_completed` varchar(45) DEFAULT '0',
  `out_source` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=180 DEFAULT CHARSET=latin1;

/*Data for the table `patient_lab_test_list` */

insert  into `patient_lab_test_list`(`id`,`p_id`,`b_id`,`test_id`,`create_at`,`date`,`create_by`,`status`,`report_completed`,`out_source`) values (168,115,179,95,'2018-06-14 12:18:29','2018-06-14',178,1,'1',0),(169,115,179,98,'2018-06-14 12:18:29','2018-06-14',178,1,'1',1),(170,115,179,99,'2018-06-14 12:18:29','2018-06-14',178,1,'1',1),(171,117,181,95,'2018-06-14 12:20:22','2018-06-14',178,1,'1',0),(172,117,181,97,'2018-06-14 12:20:22','2018-06-14',178,1,'1',1),(173,117,181,98,'2018-06-14 12:20:22','2018-06-14',178,1,'0',1),(174,117,181,100,'2018-06-14 12:20:22','2018-06-14',178,1,'1',1),(175,123,199,95,'2018-07-06 17:29:49','2018-07-06',178,1,'0',0),(176,123,199,97,'2018-07-06 17:29:49','2018-07-06',178,1,'1',1),(177,123,199,98,'2018-07-06 17:29:49','2018-07-06',178,1,'0',1),(178,123,199,99,'2018-07-06 17:29:49','2018-07-06',178,1,'0',1),(179,123,199,100,'2018-07-06 17:29:49','2018-07-06',178,1,'0',1);

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
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

/*Data for the table `patient_medicine_list` */

insert  into `patient_medicine_list`(`m_id`,`p_id`,`b_id`,`type_of_medicine`,`medicine_name`,`substitute_name`,`condition`,`dosage`,`route`,`frequency`,`directions`,`formdate`,`todate`,`qty`,`org_amount`,`units`,`comments`,`create_at`,`date`,`create_by`,`edit_reason`,`edited`,`edited_by`,`amount`) values (52,116,180,'Generic','crosine','Yes','Chronic','250mg','Mouth','6 hours','test','','','20','200','mg','test','2018-06-14 12:17:19','2018-06-14',178,'amount changed',1,176,10),(53,116,180,'Generic','parasitemal','Yes','Chronic','100mg','Mouth','6 hours','test','','','10','110','tablet','test','2018-06-14 12:17:42','2018-06-14',178,NULL,0,NULL,11),(54,117,182,'Generic','crosine','Yes','Chronic','250mg','Mouth','6 hours','test','','','10','103','pound','test','2018-06-15 16:28:23','2018-06-15',178,NULL,0,NULL,10),(55,122,194,'','parasitemal','','','100mg','','15 hours','yutyu','','','10','110','','','2018-06-26 15:35:55','2018-06-26',178,NULL,0,NULL,11),(56,123,196,'','crosine','','','250mg','','18 hours','g','','','12','123.6','','','2018-07-06 17:21:51','2018-07-06',178,NULL,0,NULL,10);

/*Table structure for table `patient_vitals_list` */

DROP TABLE IF EXISTS `patient_vitals_list`;

CREATE TABLE `patient_vitals_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` int(11) DEFAULT NULL,
  `b_id` int(11) DEFAULT NULL,
  `assessment_type` varchar(250) DEFAULT NULL,
  `vitaltype` varchar(250) DEFAULT NULL,
  `bp` varchar(250) DEFAULT NULL,
  `pulse` varchar(250) DEFAULT NULL,
  `fbs_rbs` varchar(250) DEFAULT NULL,
  `temp` text,
  `weight` varchar(250) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=96 DEFAULT CHARSET=latin1;

/*Data for the table `patient_vitals_list` */

insert  into `patient_vitals_list`(`id`,`p_id`,`b_id`,`assessment_type`,`vitaltype`,`bp`,`pulse`,`fbs_rbs`,`temp`,`weight`,`create_at`,`date`) values (87,120,191,NULL,NULL,'1','12','1','12','121','2018-06-23 14:27:12','2018-06-23'),(88,121,193,NULL,NULL,'1','1','11','11','1','2018-06-25 10:25:51','2018-06-25'),(89,122,194,NULL,NULL,'20','220','10','20','10','2018-06-25 12:43:58','2018-06-25'),(90,122,195,NULL,NULL,'20','120','110','255','35','2018-06-25 13:02:52','2018-06-25'),(91,123,196,NULL,NULL,'2','120','10','255','10','2018-07-06 17:20:14','2018-07-06'),(92,123,199,NULL,NULL,'2','120','10','255','10','2018-07-06 17:28:06','2018-07-06'),(93,123,200,NULL,NULL,'2','120','10','255','10','2018-07-06 17:33:48','2018-07-06'),(94,123,201,NULL,NULL,'2','120','10','255','10','2018-07-06 17:35:01','2018-07-06'),(95,123,0,NULL,NULL,'2','120','10','255','10','2018-07-13 14:01:12','2018-07-13');

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
  `occupation` varchar(250) DEFAULT NULL,
  `education` varchar(250) DEFAULT NULL,
  `birth_place` varchar(250) DEFAULT NULL,
  `home_phone` varchar(250) DEFAULT NULL,
  `citizen_proof` varchar(250) DEFAULT NULL,
  `patient_identifier` varchar(250) DEFAULT NULL,
  `relation` varchar(250) DEFAULT NULL,
  `first_name` varchar(250) DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=126 DEFAULT CHARSET=latin1;

/*Data for the table `patients_list_1` */

insert  into `patients_list_1`(`pid`,`hos_id`,`card_number`,`registrationtype`,`patient_category`,`problem`,`name`,`mobile`,`email`,`dob`,`age`,`bloodgroup`,`martial_status`,`nationali_id`,`perment_address`,`p_c_name`,`p_s_name`,`p_zipcode`,`p_country_name`,`temp_address`,`t_c_name`,`t_s_name`,`t_zipcode`,`t_country_name`,`religion`,`caste`,`mothername`,`language`,`occupation`,`education`,`birth_place`,`home_phone`,`citizen_proof`,`patient_identifier`,`relation`,`first_name`,`next_address1`,`next_address2`,`next_pincode`,`next_city`,`next_state`,`next_country`,`next_email`,`next_mobile`,`next_occupation`,`referred`,`internal_external`,`search_doctor`,`relationship`,`g_first_name`,`g_middel_name`,`g_last_name`,`gender`,`nationality`,`g_language`,`living`,`g_address1`,`g_address2`,`g_pincode`,`g_city`,`g_state`,`g_country`,`payer_name`,`payer_mobile`,`payer_address`,`dependency`,`arrangement`,`incomegroup`,`description`,`confidential`,`student`,`barcode`,`create_at`,`create_by`,`updated_at`) values (115,51,'','New','Pay Patient','heart pain','vasudevareddy','8500050944','vasudevareddy@gmail.com','2018-06-01','27','AB+','Single','1234567890','kadapa dist kothapalli village','mydukur','ap','516172','india','','','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,'Male',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1528958406115.png','2018-06-14 12:10:06',175,NULL),(116,51,'','New','Corporate','check up','k siva','6745674567','ksiva@gmail.com','2018-06-01','27','A+','Single','1234567890','testing','hyderabad','ts','500072','india','','','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,'Male',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1528958654116.png','2018-06-14 12:14:14',175,NULL),(117,51,'1234569874566','New','Pay Patient','heart pain','bhavya','9874563214','bhavy@gmail.com','2018-06-14','20','B+','Single','1234567890','likethat','rangareddy','ts','500072','india','','','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'vasudevareddy',NULL,NULL,NULL,NULL,NULL,NULL,'Female',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1528958732117.png','2018-06-14 12:15:32',175,NULL),(118,51,'','New','Sponsor','hkhjkhjk','jkhjkhj','6867878678','chinnjhjkki@gmail.com','2018-06-23','67','AB-','Other','6756756767','jhjgj','hjghj','ghjghj','67667','bnvnvb','','','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,'Male',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1529731566118.png','2018-06-23 10:56:06',175,NULL),(119,51,'','Emergency','Pay Patient','fgf','ghdfgh','6867878678','chinni444@gmail.com','2018-06-23','67','B+','Single','6756756767','m,bnm,','jkjk','Jharkhand','767667','bnvnvb','','','','','','uiyuiui','uiyui','uiyui','Telugu','uityui','degree',NULL,'6767677777','No','','Relation','Name of Kin','Address1','Address2','516172','kadapa','Manipur','fghfgh','6546@gmail.com','6546546566','tyrty','',NULL,NULL,'yuytu','yuy','','','Male','yutyu','English','','tyutyu','yuyt','67676','ghfghfgh','Karnataka','ingfh','ghfghfgh','6546456456','645645645','tytryert','tytyrtyt','ytyety','trytryt','ytyer','tyetryrt','1529733490119.png','2018-06-23 12:55:13',175,'2018-06-23 12:31:39'),(120,51,'','New','International cash','','nnnnnn','6867878678','chinni4bnvb44@gmail.com','2018-06-23','67','O+','Single','6756756767','ghgfh','ghfg','Karnataka','67667','ghfg','fgh','ghfg','Meghalaya','67567','ghfg','fghfghgh','ghfg','ghfgh','Telugu','ghfg','ghfg',NULL,'6767677777','Yes','','ghj','hjfghj','gfjfgjh','ghjfg','516172','kadapa','Kerala','fghfgh','6546@gmail.com','6546546566','jfhgjfg','uityui',NULL,NULL,'hjfghj','fghjfgh','','','Male','jfghj','Telugu','','hjfgh','hjfgh','67765','6767','Kerala','67567','uiyui','67676767576','jfgghj','hjfghj','ghjfgh','hgjfgh','jfghj','jgfh','ghfjfghj','1529742205120.png','2018-06-23 13:53:25',175,'2018-06-23 13:54:29'),(121,51,'','Emergency','Sponsor','','chinna reddy reddem','6867878678','chinni447774@gmail.com','2018-06-23','67','A-','Married','6756756767','yytu','test','Manipur','67667','bnvnvb','','','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'uiuyi',NULL,NULL,NULL,NULL,NULL,NULL,'Male',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1529754198121.png','2018-06-25 10:23:30',175,NULL),(122,51,'','Emergency','Pay Patient','','yutyu','6867878678','administration@gmail.com','2018-06-25','67','A-','Married','76756756767','yuytu','ghfg','Madhya Pradesh','67667','bnvnvb','','','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,'Female',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1529910816122.png','2018-06-25 13:02:34',175,NULL),(123,51,'','New','Sponsor','','chandhu','6867878678','chandu@gmail.com','2018-07-06','67','B+','Single','6756756767','test','test','Telangana','500072','india','','','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,'Male',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1530877797123.png','2018-07-06 17:34:52',175,NULL),(124,51,'','Emergency','Sponsor','','pushkar','85000050944','pushkar@gmail.com','2018-07-13','26','O-','Single','6756756767','sff','ghfg','Manipur','67667','india','','','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,'Male',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-07-13 17:17:55',175,NULL),(125,51,'','Emergency','Sponsor','','pushkar','85000050944','pushkar@gmail.com','2018-07-13','26','O-','Single','6756756767','sff','ghfg','Manipur','67667','india','','','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,'Male',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1531482567125.png','2018-07-13 17:27:07',175,NULL);

/*Table structure for table `prescription_manual` */

DROP TABLE IF EXISTS `prescription_manual`;

CREATE TABLE `prescription_manual` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hos_id` varchar(250) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `p_id` varchar(250) DEFAULT NULL,
  `mobile` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `prescription_manual` */

insert  into `prescription_manual`(`id`,`hos_id`,`name`,`p_id`,`mobile`,`status`,`create_at`,`create_by`) values (1,'51','vasu','115','85000050944',1,'2018-06-25 15:40:20',176),(2,'51','reddem','112','85000050944',1,'2018-06-25 15:49:03',176),(3,'51','chinna','112','7675467467',1,'2018-06-25 15:53:11',176),(4,'51','test','117','8019345212',1,'2018-06-25 16:14:02',176),(5,'51','','125','',1,'2018-07-06 18:25:52',176),(6,'51','','117','',1,'2018-07-06 18:26:16',176),(7,'51','','112','',1,'2018-07-10 17:36:47',176),(8,'51','','117','',1,'2018-07-10 17:37:19',176),(9,'51','','117','',1,'2018-07-10 17:37:48',176),(10,'51','','117','',1,'2018-07-10 18:16:30',176),(11,'51','','117','',1,'2018-07-10 18:16:41',176),(12,'51','','117','',1,'2018-07-10 18:17:44',176);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `resource_chating` */

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
) ENGINE=InnoDB AUTO_INCREMENT=133 DEFAULT CHARSET=latin1;

/*Data for the table `resource_list` */

insert  into `resource_list`(`r_id`,`a_id`,`role_id`,`hos_id`,`resource_name`,`resource_mobile`,`resource_add1`,`resource_add2`,`resource_city`,`resource_state`,`resource_zipcode`,`resource_other_details`,`resource_contatnumber`,`resource_email`,`resource_photo`,`resource_document`,`resource_bank_holdername`,`resource_bank_accno`,`resource_ifsc_code`,`resource_other_document`,`r_status`,`r_created_at`,`r_updated_at`,`r_create_by`,`current_status`,`out_source_lab`) values (124,173,5,0,'out sources lab','8500050944','hyderabad','hyderabad','hyderabad','ts','500072','ntg','8500050944','outlab@gmail.com','',NULL,NULL,NULL,NULL,NULL,1,'2018-06-14 11:57:38',NULL,1,NULL,1),(125,174,5,0,'out sources lab2','8500050944','kadapa','kadapa','kadapa','ap','516172','ntg','8019345212','outlab2@gmail.com','',NULL,NULL,NULL,NULL,NULL,1,'2018-06-14 11:58:27',NULL,1,NULL,1),(126,175,3,51,'recption','8500226782','hyderabad','hyd','kukatpalli','ts','500072','ntg','6767676577','recp@gmail.com','','','vasu','5464565767','sbin0002671','',1,'2018-06-14 12:01:47',NULL,172,NULL,0),(127,176,4,51,'Pharmacy','86785678678','test','test','kadapa','ts','516172','ntg','6767676577','phar@gmail.com','','','vasu','5464565767','sbin0002671','',1,'2018-06-14 12:02:33',NULL,172,NULL,0),(128,177,5,51,'lab','1234567890123','test','test','hyderabad','ts','500072','ntg','6767676577','lab@gmail.com','','','vasu','5464565767','sbin0002671','',1,'2018-06-14 12:03:12','2018-07-13 12:22:26',172,NULL,0),(129,178,6,51,'vasudevareddy','8500050944','test','test','kukatpalli','ts','500072','jfghj','6767676577','doct@gmail.com','','','vasu','5464565767','sbin0002671','',1,'2018-06-14 12:04:07',NULL,172,NULL,0),(130,179,6,51,'tyyt','8019345212','gh','ghdfgh','fgdfg','gfdfg','516172',NULL,'8522587411','bbbb@gmail.com','','','vasudevareddy','1234567890','SBIN0002671','',2,'2018-07-13 12:15:21','2018-07-13 12:21:38',172,NULL,0),(131,182,6,53,'','','','','','','',NULL,'','','','','','','','',1,'2018-07-16 18:08:16',NULL,181,NULL,0),(132,183,6,53,'tyyt','675676576756','jhgj','','hjfg','hj','516172',NULL,'78887887878','87@gmail.com','','','','','','',1,'2018-07-16 18:10:30',NULL,181,NULL,0);

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

/*Table structure for table `specialist` */

DROP TABLE IF EXISTS `specialist`;

CREATE TABLE `specialist` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `hos_id` int(11) DEFAULT NULL,
  `d_id` varchar(250) DEFAULT NULL,
  `specialist_name` varchar(250) DEFAULT NULL,
  `t_status` int(11) DEFAULT NULL,
  `t_create_at` datetime DEFAULT NULL,
  `t_updated_at` datetime DEFAULT NULL,
  `t_create_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB AUTO_INCREMENT=114 DEFAULT CHARSET=latin1;

/*Data for the table `specialist` */

insert  into `specialist`(`s_id`,`hos_id`,`d_id`,`specialist_name`,`t_status`,`t_create_at`,`t_updated_at`,`t_create_by`) values (110,51,'108','vasu',1,'2018-06-23 14:49:27','2018-06-23 15:26:54',172),(112,51,'108','raghu',1,'2018-06-23 14:54:40',NULL,172),(113,51,'108','haert surgon',1,'2018-06-23 16:09:47',NULL,172);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `team_chating` */

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
) ENGINE=InnoDB AUTO_INCREMENT=110 DEFAULT CHARSET=latin1;

/*Data for the table `treament` */

insert  into `treament`(`t_id`,`hos_id`,`t_name`,`t_status`,`t_create_at`,`t_updated_at`,`t_create_by`) values (94,45,'Diabetes',1,'2018-06-04 11:37:04',NULL,144),(95,45,'BP',1,'2018-06-04 11:37:10','2018-06-08 11:04:04',144),(96,45,'TB',1,'2018-06-04 11:57:15',NULL,144),(97,45,'heart',1,'2018-06-04 12:24:22',NULL,144),(98,48,'TB',1,'2018-06-04 16:41:55',NULL,155),(99,45,'sugar',1,'2018-06-05 10:25:13',NULL,144),(100,49,'Md Genaralmedicin ',1,'2018-06-05 21:38:16',NULL,160),(101,49,'Eye surgan',1,'2018-06-05 21:39:23',NULL,160),(102,45,'fever',1,'2018-06-06 15:42:42','2018-06-08 11:06:57',144),(103,49,'low-bp',1,'2018-06-07 12:31:04','2018-06-07 12:31:19',160),(104,45,'acidity',1,'2018-06-11 14:43:49','2018-06-11 15:45:22',144),(105,45,'Malaria',1,'2018-06-11 16:56:11',NULL,144),(106,50,'likethat',1,'2018-06-12 13:03:03',NULL,167),(107,50,'jjgj',1,'2018-06-13 17:54:26',NULL,167),(108,51,'heart',1,'2018-06-14 12:11:49',NULL,172),(109,51,'hjfghjfg',1,'2018-06-23 14:36:49',NULL,172);

/*Table structure for table `treatmentwise_doctors` */

DROP TABLE IF EXISTS `treatmentwise_doctors`;

CREATE TABLE `treatmentwise_doctors` (
  `t_d_id` int(11) NOT NULL AUTO_INCREMENT,
  `hos_id` int(11) DEFAULT NULL,
  `s_id` int(11) DEFAULT NULL,
  `t_d_doc_id` int(11) DEFAULT NULL,
  `t_d_name` varchar(250) DEFAULT NULL,
  `t_d_status` int(11) DEFAULT NULL,
  `t_d_create_at` datetime DEFAULT NULL,
  `t_d_updated_at` datetime DEFAULT NULL,
  `t_d_create_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`t_d_id`)
) ENGINE=InnoDB AUTO_INCREMENT=121 DEFAULT CHARSET=latin1;

/*Data for the table `treatmentwise_doctors` */

insert  into `treatmentwise_doctors`(`t_d_id`,`hos_id`,`s_id`,`t_d_doc_id`,`t_d_name`,`t_d_status`,`t_d_create_at`,`t_d_updated_at`,`t_d_create_by`) values (118,51,110,178,'108',1,'2018-06-23 16:33:07','2018-06-23 16:33:07',172),(119,51,112,178,'108',1,'2018-06-23 17:02:00','2018-06-23 17:02:00',172),(120,51,113,178,'108',1,'2018-06-23 17:02:07','2018-06-23 17:02:07',172);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `vital_comments` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
