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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`a_id`,`role_id`,`a_email_id`,`a_username`,`a_password`,`a_org_password`,`a_name`,`a_mobile`,`a_profile_pic`,`a_status`,`a_create_at`,`a_updated_at`) values (1,1,'admin@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Admin','8500050944',NULL,1,'2018-02-21 11:15:43',NULL),(3,2,'vasu@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456',NULL,'8500050944',NULL,1,'2018-02-22 15:26:03','2018-02-23 13:11:20'),(4,3,'rec@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Receptionist','9874563211',NULL,1,'2018-02-22 19:01:23',NULL),(5,3,'rec1@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Receptionist','6745674674',NULL,1,'2018-02-22 19:03:01','2018-02-23 12:37:24'),(6,3,'rec2@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Receptionist','9874563211',NULL,1,'2018-02-22 19:05:59',NULL),(7,4,'phr1@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Resource','9874563211',NULL,1,'2018-02-23 12:38:14',NULL),(8,5,'lab@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Resource','9874563211',NULL,1,'2018-02-23 12:40:59',NULL),(9,6,'doc@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Resource','9874563211',NULL,1,'2018-02-23 12:45:32',NULL),(10,2,'bayapu@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Hospital Admin','8500226782',NULL,1,'2018-02-23 12:46:16',NULL),(11,3,'bayph1@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Resource','9874563211',NULL,1,'2018-02-23 12:49:59',NULL),(12,6,'doc2@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Resource','9874563211',NULL,1,'2018-02-23 13:13:08',NULL),(13,6,'doc3@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Resource','9874563211',NULL,1,'2018-02-23 13:13:48',NULL),(14,NULL,NULL,NULL,'d41d8cd98f00b204e9800998ecf8427e',NULL,'Resource',NULL,NULL,1,'2018-02-23 14:26:38',NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `hospital` */

insert  into `hospital`(`hos_id`,`a_id`,`hos_con_number`,`hos_email_id`,`hos_representative`,`hos_rep_contact`,`mob_country_code`,`hos_rep_mobile`,`hos_rep_email`,`hos_rep_nationali_id`,`hos_rep_add1`,`hos_rep_add2`,`hos_rep_zipcode`,`hos_rep_city`,`hos_rep_state`,`hos_rep_country`,`hos_bas_name`,`hos_bas_contact`,`hos_bas_email`,`hos_bas_nationali_id`,`hos_bas_add1`,`hos_bas_add2`,`hos_bas_zipcode`,`hos_bas_city`,`hos_bas_state`,`hos_bas_country`,`hos_bas_document`,`bank_holder_name`,`bank_acc_no`,`bank_name`,`bank_ifsc`,`bank_document`,`kyc_doc1`,`kyc_doc2`,`kyc_doc3`,`kyc_file1`,`kyc_file2`,`kyc_file3`,`hos_status`,`hos_created`,`hos_updated_at`,`hos_curent_login`,`hos_undo`) values (9,3,'8500050944','vasu@gmail.com','Representative','1234567899','+91','8019345212','vasurep@gmail.com','12345678987','6767','6756','516172','kadapa','ap','india','vasu hosp','7896541236','vashos@gmail.com','9874563214562','op','opoi','123456','kadapa','ap','india','','ooi','32473655713','opio','SBIN0002672',NULL,'test','test1','test2',NULL,NULL,NULL,1,'2018-02-22 15:26:03','2018-02-22 17:44:38',0,0),(10,10,'8500226782','bayapu@gmail.com','Representative','1234567899','+91','8019345212','vasurep@gmail.com','12345678987','sdfdd','gfdg','516172','kadapa','ap','india','vasu hosp','7896541236','vashos@gmail.com','9874563214562','hgfh','ghfg','516172','kadapa','ap','india','','ooi','32473655713','SBI','SBIN0002672','','test','test1','test2','1519370232.xlsx','','',1,'2018-02-23 12:46:16','2018-02-23 12:49:06',0,0);

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
  `resource_other_details` text,
  `resource_contatnumber` varchar(45) DEFAULT NULL,
  `resource_email` varchar(250) DEFAULT NULL,
  `r_status` int(11) DEFAULT NULL,
  `r_created_at` datetime DEFAULT NULL,
  `r_updated_at` datetime DEFAULT NULL,
  `r_create_by` int(11) DEFAULT NULL,
  `r_undo` int(11) DEFAULT '1',
  PRIMARY KEY (`r_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `resource_list` */

insert  into `resource_list`(`r_id`,`a_id`,`role_id`,`hos_id`,`resource_name`,`resource_mobile`,`resource_add1`,`resource_add2`,`resource_city`,`resource_state`,`resource_other_details`,`resource_contatnumber`,`resource_email`,`r_status`,`r_created_at`,`r_updated_at`,`r_create_by`,`r_undo`) values (1,4,3,9,'res1',NULL,NULL,'fghd','hyd','ts','fnjhdf','8527418527','rec@gmail.com',2,'2018-02-22 19:01:23','2018-02-23 10:42:37',3,2),(2,5,3,9,'res2','6745674674','hjfghj','jgfhj','fgfdg','ts','fnjhdf','8527418527','rec1@gmail.com',0,'2018-02-23 12:37:24','2018-02-23 12:28:20',3,1),(3,6,3,9,'res3',NULL,NULL,'yuopyo','fgfdg','ts','fnjhdf','8527418527','rec2@gmail.com',1,'2018-02-22 19:05:59',NULL,3,1),(4,7,4,9,'pharamcy','9874563211','pharamcy','pharamcy','hyd','ta','fnjhdf','8527418527','phr1@gmail.com',1,'2018-02-23 12:38:14',NULL,3,1),(5,8,5,9,'lab ass','9874563211','gfgd','ghfgdhfgh','kadapa','ap','ntg','8500050944','lab@gmail.com',1,'2018-02-23 12:40:59',NULL,3,1),(6,9,6,9,'doctor','9874563211','dfdg','fgdfg','fgfdg','ts','fnjhdf','8527418527','doc@gmail.com',1,'2018-02-23 12:45:32',NULL,3,1),(7,11,3,10,'bayares2','9874563211','ytuytu','tyuu','fgfdg','ts','fnjhdf','8527418527','bayph1@gmail.com',1,'2018-02-23 12:49:59',NULL,10,1),(8,12,6,9,'doc2','9874563211','fggj','jghj','hjfgj','hjfghj','hjfgh','8527418527','doc2@gmail.com',1,'2018-02-23 13:13:08',NULL,3,1),(9,13,6,9,'doc3','9874563211','add','add3','hyd','ts','ntg','8500050944','doc3@gmail.com',1,'2018-02-23 13:13:48',NULL,3,1),(10,14,NULL,9,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2018-02-23 14:26:38',NULL,3,1);

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

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
