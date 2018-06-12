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
) ENGINE=InnoDB AUTO_INCREMENT=89 DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`a_id`,`role_id`,`a_email_id`,`a_username`,`a_password`,`a_org_password`,`a_name`,`a_mobile`,`a_profile_pic`,`a_status`,`a_create_at`,`a_updated_at`,`out_source`,`create_by`) values (60,1,'admin@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Admin','8500050944','1527833238.jpg',1,'2018-05-21 11:58:34','2018-06-01 13:21:04',0,NULL),(71,8,'team@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Team','8500050944',NULL,1,NULL,NULL,0,NULL),(82,2,'vasu@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Hospital Admin','8500050944',NULL,1,'2018-06-09 10:31:46',NULL,0,NULL),(83,5,'outlab@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','out sources lab','8500050944',NULL,1,'2018-06-09 10:46:07','2018-06-11 13:32:46',1,60),(84,5,'outlab2@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','out sources lab2','8500050944',NULL,1,'2018-06-09 10:47:17',NULL,1,60),(85,3,'recp@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','reception','08500050944',NULL,1,'2018-06-09 11:14:27',NULL,0,NULL),(86,4,'phar@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','pharmacy','08500050944',NULL,1,'2018-06-09 11:15:02',NULL,0,NULL),(87,5,'lab@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','lab','08500050944',NULL,1,'2018-06-09 11:15:30',NULL,0,NULL),(88,6,'doc@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','doctor','08500050944',NULL,1,'2018-06-09 11:16:05',NULL,0,NULL);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `admin_chating` */

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `announcements` */

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
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;

/*Data for the table `bidding_test` */

insert  into `bidding_test`(`id`,`b_id`,`test_id`,`p_l_t_id`,`lab_id`,`status`,`create_at`,`amount`,`duration`,`send_by`,`create_by`) values (51,56,48,106,83,4,'2018-06-09 11:33:16','150','10 min',83,87),(52,56,49,107,83,4,'2018-06-09 11:33:16','120','20 min',83,87),(53,56,50,108,84,4,'2018-06-09 11:33:17','200','10',84,87),(54,56,51,109,84,4,'2018-06-09 11:33:17','400 min','20 min',84,87),(59,58,50,120,84,1,'2018-06-09 13:09:01',NULL,NULL,NULL,87),(60,58,51,121,84,1,'2018-06-09 13:09:01',NULL,NULL,NULL,87),(61,58,54,124,83,1,'2018-06-09 13:09:01',NULL,NULL,NULL,87),(62,58,54,124,84,1,'2018-06-09 13:09:01',NULL,NULL,NULL,87),(63,58,55,125,83,1,'2018-06-09 13:09:01',NULL,NULL,NULL,87),(64,58,55,125,84,1,'2018-06-09 13:09:01',NULL,NULL,NULL,87),(65,58,48,118,83,1,'2018-06-09 14:16:32',NULL,NULL,NULL,87),(66,58,48,118,84,1,'2018-06-09 14:16:32',NULL,NULL,NULL,87);

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `coupon_codes` */

insert  into `coupon_codes`(`id`,`coupon_code`,`type`,`percentage_amount`,`create_at`,`create_by`,`status`,`updated_time`) values (2,'percen','Percentage','10','2018-05-09 15:12:05',1,1,'2018-05-23 18:22:44'),(3,'vasudevareddy','Amount','50','2018-05-09 15:30:23',1,1,NULL),(4,'xaragar','Percentage','10','2018-05-14 11:26:15',1,1,NULL),(5,'vasu','Percentage','10','2018-06-02 12:13:03',60,1,'2018-06-02 12:33:23');

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
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

/*Data for the table `hospital` */

insert  into `hospital`(`hos_id`,`a_id`,`hos_con_number`,`reschedule_date`,`hos_email_id`,`hos_representative`,`hos_rep_contact`,`mob_country_code`,`hos_rep_mobile`,`hos_rep_email`,`hos_rep_nationali_id`,`hos_rep_add1`,`hos_rep_add2`,`hos_rep_zipcode`,`hos_rep_city`,`hos_rep_state`,`hos_rep_country`,`hos_bas_name`,`hos_bas_contact`,`hos_bas_email`,`hos_bas_nationali_id`,`hos_bas_add1`,`hos_bas_add2`,`hos_bas_zipcode`,`hos_bas_city`,`hos_bas_state`,`hos_bas_country`,`hos_bas_document`,`hos_bas_logo`,`bank_holder_name`,`bank_acc_no`,`bank_name`,`bank_ifsc`,`bank_document`,`kyc_doc1`,`kyc_doc2`,`kyc_doc3`,`kyc_file1`,`kyc_file2`,`kyc_file3`,`hos_status`,`hos_created`,`hos_updated_at`,`hos_curent_login`,`hos_undo`,`out_source_lab`,`barcode`) values (28,82,'8500050944',NULL,'vasu@gmail.com','Representative','8500050944','+91','8500050944','vasu@gmail.com','12345678999','hyderabad1','hyd','516172','kadapa','Andhra Pradesh','india','vaasu Hospital','8500050944','vaasuhospital@gmail.com','1234567897','hyderanad','kutkatpalli','500072','hyderabad','Telangana','india','',NULL,'vasudevareddy','32473655713','SBI','SBIN0002671','','another detals purpose','','','1528520611.docx','','',1,'2018-06-09 10:31:46','2018-06-09 10:33:31',0,0,0,'152852050682.png');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `hospital_announcements` */

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
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

/*Data for the table `investigation_patient_list` */

insert  into `investigation_patient_list`(`id`,`p_id`,`b_id`,`investigation_type`,`countrycode`,`contact_number`,`frequency`,`priority`,`investigation_formdate`,`investigation_todate`,`associate_diagnosis`,`associate_problems`,`create_at`,`create_by`,`date`) values (18,63,56,'lab','+91','8500050944','4 hours','Low','2018-06-04','2018-06-05','diagnois','heart','2018-06-09 11:24:46',88,'2018-06-09'),(19,64,57,'lab','+91','8500050944','4 hours','Low','2018-06-04','2018-06-04','diagnois','heart','2018-06-09 11:26:11',88,'2018-06-09'),(20,65,58,'lab','+91','8500050944','6 hours','Low','2018-06-04','2018-06-04','diagnois','heart','2018-06-09 13:08:08',88,'2018-06-09'),(21,66,59,'lab','+91','8500050944','4 hours','Medium','2018-06-04','2018-06-04','diagnois','heart','2018-06-11 10:58:27',88,'2018-06-11');

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
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

/*Data for the table `lab_test_list` */

insert  into `lab_test_list`(`t_id`,`hos_id`,`t_name`,`test_type`,`type`,`duration`,`amuont`,`t_short_form`,`t_description`,`t_department`,`create_at`,`status`,`create_by`,`update_by`,`out_source`) values (48,0,'heart check',11,'Lab',' 1 day','10000','Short Form','Description','','2018-06-09 11:00:03',1,83,NULL,1),(49,0,'blood',11,'Lab','10 min','120','Short Form','Description','','2018-06-09 11:00:36',1,83,NULL,1),(50,0,'test',11,'Lab',' 10 min','10000','Short Form','Description','','2018-06-09 11:01:10',1,84,NULL,1),(51,0,'test1',11,'Lab',' 10 min','120','Short Form','Description','','2018-06-09 11:01:38',1,84,NULL,1),(52,28,'lab test',11,'Lab',' 10 min','120','Short Form','Description','','2018-06-09 11:23:13',1,87,NULL,0),(53,28,'lab test 2',11,'Lab','20 min','250','Short Form','Description','','2018-06-09 11:23:38',1,87,NULL,0),(54,0,'blood',11,'Lab','10 min','120','Short form','Description','','2018-06-09 13:05:30',1,84,NULL,1),(55,0,'heart check',11,'Lab','10 min','120','Short form','Description','','2018-06-09 13:05:58',1,84,NULL,1);

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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `lab_test_type` */

insert  into `lab_test_type`(`id`,`type_name`,`type`,`create_at`,`status`,`created_by`,`updated_time`) values (11,'heart','Lab','2018-06-09 10:33:48',1,60,'2018-06-09 10:59:38'),(13,'heart','Radiology','2018-06-09 10:44:15',2,60,'0000-00-00 00:00:00');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `medicine_list` */

insert  into `medicine_list`(`id`,`hos_id`,`hsn`,`othercode`,`medicine_name`,`dosage`,`qty`,`amount`,`total_amount`,`sgst`,`cgst`,`other`,`create_at`,`status`,`added_by`,`updated_at`) values (1,28,'','','','','','','0','','',NULL,'2018-06-11 10:48:59',1,86,NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `medicine_name` */

insert  into `medicine_name`(`id`,`hos_id`,`medicine_name`,`added_by`,`create_at`,`status`) values (1,28,'',86,'2018-06-11 10:48:59',1);

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
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

/*Data for the table `out_source_lab_test_lists` */

insert  into `out_source_lab_test_lists`(`id`,`lab_id`,`p_l_t_id`,`p_id`,`b_id`,`status`,`create_at`,`create_BY`) values (29,83,107,63,56,0,'2018-06-09 11:33:48',87),(30,83,106,63,56,0,'2018-06-09 11:33:52',87),(31,83,106,63,56,0,'2018-06-09 11:35:53',87),(32,83,106,63,56,0,'2018-06-09 11:35:57',87),(33,83,107,63,56,0,'2018-06-09 11:36:01',87),(34,84,108,63,56,0,'2018-06-09 11:36:17',87),(35,84,109,63,56,0,'2018-06-09 11:36:20',87);

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
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

/*Data for the table `patient_billing` */

insert  into `patient_billing`(`b_id`,`p_id`,`visit_no`,`visit_desc`,`date_of_visit`,`department`,`docotr_name`,`no_of_visits`,`last_visiting_date`,`service_type`,`service`,`visit_type`,`doctor`,`payer`,`price`,`qty`,`amount`,`bill`,`patient_payer_deposit_amount`,`payment_mode`,`bill_amount`,`received_form`,`treatment_id`,`doct_id`,`completed`,`create_at`,`updated_at`,`doctor_status`,`assign_doctor_to`,`assign_doctor_by`,`completed_type`,`type`,`create_by`,`medicine_payment_mode`,`payment_updated_by`,`payment_createed_by`,`report_completed`,`sheet_prescription`,`sheet_prescription_file`,`coupon_code`,`coupon_code_amount`,`with_out_coupon_code`) values (56,63,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'500','Cash','500','vasudevareddy','61','88',1,'2018-06-09 11:17:31','2018-06-09 11:17:46',1,0,0,2,'new',88,NULL,0,NULL,1,0,NULL,NULL,NULL,NULL),(57,64,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'50000','Online','50000','vasudevareddy','63','88',1,'2018-06-09 11:18:28','2018-06-09 11:18:49',1,0,0,2,'new',88,NULL,0,NULL,0,0,NULL,NULL,NULL,NULL),(58,65,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'50000','Cash','50000','vasudevareddy','63','88',1,'2018-06-09 13:06:57','2018-06-09 13:07:11',1,0,0,2,'new',88,NULL,0,NULL,0,0,NULL,NULL,NULL,NULL),(59,66,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'50000','Cash','50000','vasudevareddy','61','88',1,'2018-06-11 10:46:43','2018-06-11 10:46:59',1,0,0,2,'new',88,NULL,0,NULL,0,0,NULL,NULL,NULL,NULL),(60,67,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'500','Cash','50000','vasudevareddy','63','88',1,'2018-06-11 11:05:35','2018-06-11 11:05:48',0,NULL,NULL,0,'new',NULL,NULL,0,NULL,0,0,NULL,NULL,NULL,NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=latin1;

/*Data for the table `patient_lab_reports` */

insert  into `patient_lab_reports`(`id`,`test_id`,`p_id`,`b_id`,`hos_id`,`problem`,`symptoms`,`image`,`create_at`,`status`,`create_by`) values (61,'52',63,56,28,'heart','tng','1528524145.docx','2018-06-09 11:32:25',1,87),(62,'53',63,56,28,'heart','tng','1528524154.docx','2018-06-09 11:32:34',1,87),(65,'50',63,56,0,'like that','like  that','1528524418.docx','2018-06-09 11:36:58',1,84),(66,'51',63,56,0,'like that','like  that','1528524429.docx','2018-06-09 11:37:08',1,84),(67,'52',65,58,28,'heart','tng','1528529913.docx','2018-06-09 13:08:33',1,87),(68,'53',65,58,28,'heart','tng','1528529921.docx','2018-06-09 13:08:40',1,87),(70,'48',63,56,0,'like that','like  that','1528532425.docx','2018-06-09 13:50:25',1,83),(71,'49',63,56,0,'like that','like  that','1528532453.docx','2018-06-09 13:50:53',1,83);

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
) ENGINE=InnoDB AUTO_INCREMENT=130 DEFAULT CHARSET=latin1;

/*Data for the table `patient_lab_test_list` */

insert  into `patient_lab_test_list`(`id`,`p_id`,`b_id`,`test_id`,`create_at`,`date`,`create_by`,`status`,`report_completed`,`out_source`) values (106,63,56,48,'2018-06-09 11:24:03','2018-06-09',88,1,'1',1),(107,63,56,49,'2018-06-09 11:24:03','2018-06-09',88,1,'1',1),(108,63,56,50,'2018-06-09 11:24:03','2018-06-09',88,1,'1',1),(109,63,56,51,'2018-06-09 11:24:03','2018-06-09',88,1,'1',1),(110,63,56,52,'2018-06-09 11:24:03','2018-06-09',88,1,'1',0),(111,63,56,53,'2018-06-09 11:24:03','2018-06-09',88,1,'1',0),(112,64,57,48,'2018-06-09 11:25:56','2018-06-09',88,1,'0',1),(113,64,57,49,'2018-06-09 11:25:56','2018-06-09',88,1,'0',1),(114,64,57,50,'2018-06-09 11:25:56','2018-06-09',88,1,'0',1),(115,64,57,51,'2018-06-09 11:25:56','2018-06-09',88,1,'0',1),(116,64,57,52,'2018-06-09 11:25:56','2018-06-09',88,1,'0',0),(117,64,57,53,'2018-06-09 11:25:56','2018-06-09',88,1,'0',0),(118,65,58,48,'2018-06-09 13:07:51','2018-06-09',88,1,'0',1),(119,65,58,49,'2018-06-09 13:07:51','2018-06-09',88,1,'0',1),(120,65,58,50,'2018-06-09 13:07:51','2018-06-09',88,1,'0',1),(121,65,58,51,'2018-06-09 13:07:51','2018-06-09',88,1,'0',1),(122,65,58,52,'2018-06-09 13:07:51','2018-06-09',88,1,'1',0),(123,65,58,53,'2018-06-09 13:07:51','2018-06-09',88,1,'1',0),(124,65,58,54,'2018-06-09 13:07:51','2018-06-09',88,1,'0',1),(125,65,58,55,'2018-06-09 13:07:51','2018-06-09',88,1,'0',1),(126,66,59,48,'2018-06-11 10:58:10','2018-06-11',88,1,'0',1),(127,66,59,49,'2018-06-11 10:58:10','2018-06-11',88,1,'0',1),(128,66,59,52,'2018-06-11 10:58:10','2018-06-11',88,1,'0',0),(129,66,59,53,'2018-06-11 10:58:10','2018-06-11',88,1,'0',0);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `patient_medicine_list` */

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
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

/*Data for the table `patient_vitals_list` */

insert  into `patient_vitals_list`(`id`,`p_id`,`b_id`,`assessment_type`,`vitaltype`,`tep_actuals`,`tep_range`,`temp_site_positioning`,`notes`,`pulse_actuals`,`pulse_range`,`pulse_rate_rhythm`,`pulse_rate_vol`,`notes1`,`create_at`,`date`) values (47,63,56,NULL,NULL,'1','1','1','1','1','1','1','1','1','2018-06-09 11:17:38','2018-06-09'),(48,64,57,NULL,NULL,'2','22','2','22','2','22','2','2','2','2018-06-09 11:18:41','2018-06-09'),(49,65,58,NULL,NULL,'5','5','5','5','55','5','5','5','5','2018-06-09 13:07:04','2018-06-09'),(50,66,59,NULL,NULL,'2','2','2','2','2','2','2','2','2','2018-06-11 10:46:52','2018-06-11'),(51,67,60,NULL,NULL,'2','2','2','2','2','2','2','2','2','2018-06-11 11:05:42','2018-06-11');

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
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=latin1;

/*Data for the table `patients_list_1` */

insert  into `patients_list_1`(`pid`,`hos_id`,`card_number`,`registrationtype`,`patient_category`,`problem`,`name`,`mobile`,`email`,`dob`,`age`,`bloodgroup`,`martial_status`,`nationali_id`,`perment_address`,`p_c_name`,`p_s_name`,`p_zipcode`,`p_country_name`,`temp_address`,`t_c_name`,`t_s_name`,`t_zipcode`,`t_country_name`,`religion`,`caste`,`mothername`,`language`,`primarylanguage`,`preferred_language`,`occupation`,`education`,`birth_place`,`work_phone`,`home_phone`,`citizen_proof`,`patient_identifier`,`relation`,`first_name`,`middel_name`,`last_name`,`next_address1`,`next_address2`,`next_pincode`,`next_city`,`next_state`,`next_country`,`next_email`,`next_mobile`,`next_occupation`,`referred`,`internal_external`,`search_doctor`,`relationship`,`g_first_name`,`g_middel_name`,`g_last_name`,`gender`,`nationality`,`g_language`,`living`,`g_address1`,`g_address2`,`g_pincode`,`g_city`,`g_state`,`g_country`,`payer_name`,`payer_mobile`,`payer_address`,`dependency`,`arrangement`,`incomegroup`,`description`,`confidential`,`student`,`barcode`,`create_at`,`create_by`,`updated_at`) values (63,28,'','New','Pay Patient','heart pain','vasudevareddy','8500050944','vasudevareddy@gmail.com','2018-06-09','28','B+','Single','1234567890','hyd','hyderabad','ts','500072','india','','','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'vasudevareddy',NULL,NULL,NULL,NULL,NULL,NULL,'Male',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'152852325163.png','2018-06-09 11:17:31',85,NULL),(64,28,'','Emergency','Staff','check up','kalyan','8500050944','8500050944@gmail.com','2018-06-01','20','O+','Single','1234567890','hyd','hyderabad','ts','500072','india','','','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'doctor',NULL,NULL,NULL,NULL,NULL,NULL,'Male',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'152852330864.png','2018-06-09 11:18:28',85,NULL),(65,28,'','Temporary','Pay Patient','leg pain','sivak','9494422779','admin@gmail.com','2018-06-09','20','AB-','Single','1234567890','test','hyderabad','ts','500072','india','','','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'vasudevareddy',NULL,NULL,NULL,NULL,NULL,NULL,'Male',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'152852981765.png','2018-06-09 13:06:56',85,NULL),(66,28,'','New','VIP','leg pain','bhavya','8500050944','bhavya@gmail.com','2018-06-01','20','B+','Single','1234567890','testing','hyderabad','ts','500072','india','','','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'vasudevareddy',NULL,NULL,NULL,NULL,NULL,NULL,'Male',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'152869420366.png','2018-06-11 10:46:43',85,NULL),(67,28,'','New','Pay Patient','heart pain','kalyan','8500050944','kalyannew@gmail.com','2018-06-01','20','O-','Single','1234567890','test','hyderabad','ts','500072','india','','','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'vasudevareddy',NULL,NULL,NULL,NULL,NULL,NULL,'Male',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'152869533567.png','2018-06-11 11:05:35',85,NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

/*Data for the table `resource_list` */

insert  into `resource_list`(`r_id`,`a_id`,`role_id`,`hos_id`,`resource_name`,`resource_mobile`,`resource_add1`,`resource_add2`,`resource_city`,`resource_state`,`resource_zipcode`,`resource_other_details`,`resource_contatnumber`,`resource_email`,`resource_photo`,`resource_document`,`resource_bank_holdername`,`resource_bank_accno`,`resource_ifsc_code`,`resource_other_document`,`r_status`,`r_created_at`,`r_updated_at`,`r_create_by`,`current_status`,`out_source_lab`) values (55,83,5,0,'out sources lab','8500050944','kadapa','mydukur','kothapalli','ap','516172','ntg','8500050944','outlab@gmail.com','',NULL,NULL,NULL,NULL,NULL,1,'2018-06-11 13:32:46',NULL,60,NULL,1),(56,84,5,0,'out sources lab2','8500050944','tirupathi','kadapa','tirupathi','ap','516172','ntg','8019345212','outlab2@gmail.com','',NULL,NULL,NULL,NULL,NULL,1,'2018-06-09 10:47:17',NULL,60,NULL,1),(57,85,3,28,'reception','08500050944','test','test','hyd','ts','516172','ntg','08500050944','recp@gmail.com','','','sbi','32473655713','SBIN0002671','',1,'2018-06-09 11:14:27',NULL,82,NULL,0),(58,86,4,28,'pharmacy','08500050944','test','test','hyd','ts','516172','ntg','08500050944','phar@gmail.com','','','sbi','32473655713','SBIN0002671','',1,'2018-06-09 11:15:02',NULL,82,NULL,0),(59,87,5,28,'lab','08500050944','test','test','hyd','ts','516172','ntg','08500050944','lab@gmail.com','','','sbi','32473655713','SBIN0002671','',1,'2018-06-09 11:15:30',NULL,82,NULL,0),(60,88,6,28,'doctor','08500050944','test','test','hyd','ts','516172','ntg','08500050944','doc@gmail.com','','','sbi','32473655713','SBIN0002671','',1,'2018-06-09 11:16:05',NULL,82,NULL,0);

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
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;

/*Data for the table `treament` */

insert  into `treament`(`t_id`,`hos_id`,`t_name`,`t_status`,`t_create_at`,`t_updated_at`,`t_create_by`) values (61,28,'heart',1,'2018-06-09 11:01:55','2018-06-09 11:12:40',82),(62,28,'heart',2,'2018-06-09 11:02:02','2018-06-09 11:03:26',82),(63,28,'test',1,'2018-06-09 11:12:19',NULL,82);

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
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

/*Data for the table `treatmentwise_doctors` */

insert  into `treatmentwise_doctors`(`t_d_id`,`hos_id`,`t_d_doc_id`,`t_d_name`,`t_d_status`,`t_d_create_at`,`t_d_updated_at`,`t_d_create_by`) values (37,28,88,'61',1,'2018-06-09 11:16:19','2018-06-09 11:16:19',82),(38,28,88,'63',1,'2018-06-09 11:16:25','2018-06-09 11:16:25',82);

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
