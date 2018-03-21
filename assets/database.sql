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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`a_id`,`role_id`,`a_email_id`,`a_username`,`a_password`,`a_org_password`,`a_name`,`a_mobile`,`a_profile_pic`,`a_status`,`a_create_at`,`a_updated_at`) values (1,1,'admin@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Admin','8500050944',NULL,1,'2018-02-21 11:15:43',NULL),(3,2,'vasu@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456',NULL,'8500050944',NULL,1,'2018-02-22 15:26:03','2018-02-23 13:11:20'),(4,3,'rec@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Receptionist','9874563211',NULL,1,'2018-02-22 19:01:23',NULL),(5,3,'rec1@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Receptionist','6745674674',NULL,1,'2018-02-22 19:03:01','2018-02-23 12:37:24'),(6,3,'rec2@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Receptionist','9874563211',NULL,1,'2018-02-22 19:05:59','2018-02-23 16:31:46'),(7,4,'phr1@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Resource','9874563211',NULL,1,'2018-02-23 12:38:14',NULL),(8,5,'lab@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Resource','9874563211',NULL,1,'2018-02-23 12:40:59',NULL),(9,6,'doc@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Resource','9874563211',NULL,1,'2018-02-23 12:45:32',NULL),(10,2,'bayapu@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Hospital Admin','8500226782',NULL,1,'2018-02-23 12:46:16',NULL),(11,3,'bayph1@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Resource','9874563211',NULL,1,'2018-02-23 12:49:59',NULL),(12,6,'doc2@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Resource','9874563211',NULL,1,'2018-02-23 13:13:08',NULL),(13,6,'doc3@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Resource','9874563211',NULL,1,'2018-02-23 13:13:48',NULL),(15,3,'phrtytry1@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Resource','9874563211',NULL,1,'2018-02-23 15:07:33','2018-02-23 16:24:56'),(16,6,'doctor6@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Resource','6745674674',NULL,1,'2018-02-26 11:17:08','2018-02-26 17:32:01'),(17,5,'labassistent@gmail.com',NULL,'fcea920f7412b5da7be0cf42b8c93759','1234567','Resource','8500050944',NULL,1,'2018-02-26 12:12:35','2018-02-26 16:32:21');

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

/*Table structure for table `lab_detailes` */

DROP TABLE IF EXISTS `lab_detailes`;

CREATE TABLE `lab_detailes` (
  `l_id` int(11) NOT NULL AUTO_INCREMENT,
  `hos_id` int(11) DEFAULT NULL,
  `l_code` varchar(250) DEFAULT NULL,
  `l_name` varchar(250) DEFAULT NULL,
  `l_assistent_id` int(11) DEFAULT NULL,
  `l_status` int(11) DEFAULT NULL,
  `l_create_at` datetime DEFAULT NULL,
  `l_updated_at` datetime DEFAULT NULL,
  `l_create_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`l_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `lab_detailes` */

insert  into `lab_detailes`(`l_id`,`hos_id`,`l_code`,`l_name`,`l_assistent_id`,`l_status`,`l_create_at`,`l_updated_at`,`l_create_by`) values (1,9,'12345','test1',5,1,'2018-02-26 12:31:35','2018-02-26 12:42:13',3),(2,9,'67890','test2',13,1,'2018-02-26 12:31:35','2018-02-26 12:31:35',3);

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
  `completed` int(11) DEFAULT '0',
  `create_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`b_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `patient_billing` */

insert  into `patient_billing`(`b_id`,`p_id`,`visit_no`,`visit_desc`,`date_of_visit`,`department`,`docotr_name`,`no_of_visits`,`last_visiting_date`,`service_type`,`service`,`visit_type`,`doctor`,`payer`,`price`,`qty`,`amount`,`bill`,`patient_payer_deposit_amount`,`payment_mode`,`bill_amount`,`received_form`,`completed`,`create_at`,`updated_at`) values (1,8,'klk','kl','2018-03-20  ','kl','kl','12','2018-03-20  ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'2018-03-20 18:43:59',NULL),(2,8,'klk','yty','2018-03-20','kl','kl','12','2018-03-20',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'2018-03-20 18:45:31',NULL),(3,8,'klk','yty','2018-03-20','kl','kl','12','2018-03-20',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'2018-03-20 18:52:04',NULL),(4,8,'46456','ff','2018-03-20','phy','ttt','df','2018-03-21  ','testing','staff','yty','test','vaasudevareddy','456321','10','25000','due','45000','cash','45000','vasudevareddy',1,'2018-03-21 10:34:22','2018-03-21 12:40:05');

/*Table structure for table `patient_details_2` */

DROP TABLE IF EXISTS `patient_details_2`;

CREATE TABLE `patient_details_2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT NULL,
  `hos_id` int(11) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `patient_details_2` */

insert  into `patient_details_2`(`id`,`pid`,`hos_id`,`create_at`) values (2,8,NULL,'2018-03-19 15:23:38');

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `patients_list_1` */

insert  into `patients_list_1`(`pid`,`hos_id`,`registrationtype`,`patient_category`,`name`,`mobile`,`email`,`dob`,`age`,`bloodgroup`,`martial_status`,`nationali_id`,`perment_address`,`p_c_name`,`p_s_name`,`p_zipcode`,`p_country_name`,`temp_address`,`t_c_name`,`t_s_name`,`t_zipcode`,`t_country_name`,`religion`,`caste`,`mothername`,`language`,`primarylanguage`,`preferred_language`,`occupation`,`education`,`birth_place`,`work_phone`,`home_phone`,`citizen_proof`,`patient_identifier`,`relation`,`first_name`,`middel_name`,`last_name`,`next_address1`,`next_address2`,`next_pincode`,`next_city`,`next_state`,`next_country`,`next_email`,`next_mobile`,`next_occupation`,`referred`,`internal_external`,`search_doctor`,`relationship`,`g_first_name`,`g_middel_name`,`g_last_name`,`gender`,`nationality`,`g_language`,`living`,`g_address1`,`g_address2`,`g_pincode`,`g_city`,`g_state`,`g_country`,`payer_name`,`payer_mobile`,`payer_address`,`dependency`,`arrangement`,`incomegroup`,`description`,`confidential`,`student`,`barcode`,`create_at`,`create_by`,`updated_at`) values (8,9,'New','Staff','testtttt','85000050944','vasu@gmail.com','2018-03-19','27','o','Single','123456789014444','kothappli','mydukur','ap','516172','india','kukatpalli village','hyd','ts','50007','india','hj','oc','lakshmi','English','English','Telugu','job','btech','kothappli','8500050944','8019345212','Yes','','Relation','vasu','deve','reddy','test','test','516172','hyd',' ts','india','vasu@gmail.com','8500050944','job','vasu','internal','somethig','Relationship','First name','Last name','Last name','Female','Nationality','Telugu','Living dependency','XGFD','FGFD','516172','CITY','TS','FHF','jhgh','85222000212','ghjghjfgh','ytutyu','yutyu','ytutyu','yturtyu','yturtyu','ytuytu','15214532188.png','2018-03-20 10:50:54',6,'2018-03-21 10:33:55');

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
  PRIMARY KEY (`r_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `resource_list` */

insert  into `resource_list`(`r_id`,`a_id`,`role_id`,`hos_id`,`resource_name`,`resource_mobile`,`resource_add1`,`resource_add2`,`resource_city`,`resource_state`,`resource_zipcode`,`resource_other_details`,`resource_contatnumber`,`resource_email`,`resource_photo`,`resource_document`,`resource_bank_holdername`,`resource_bank_accno`,`resource_ifsc_code`,`resource_other_document`,`r_status`,`r_created_at`,`r_updated_at`,`r_create_by`) values (1,4,3,9,'res1',NULL,NULL,'fghd','hyd','ts',NULL,'fnjhdf','8527418527','rec@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,2,'2018-02-22 19:01:23','2018-02-23 10:42:37',3),(2,5,3,9,'res2','6745674674','hjfghj','jgfhj','fgfdg','ts',NULL,'fnjhdf','8527418527','rec1@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,2,'2018-02-23 12:37:24','2018-02-23 15:44:33',3),(3,6,3,9,'res3','9874563211','uyi','yuopyo','fgfdg','ts','516172','fnjhdf','8527418527','rec2@gmail.com',NULL,NULL,'vasudevareddy','32472655713','SBIN0002671',NULL,2,'2018-02-23 16:31:46','2018-02-23 16:33:53',3),(4,7,4,9,'pharamcy','9874563211','pharamcy','pharamcy','hyd','ta',NULL,'fnjhdf','8527418527','phr1@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,1,'2018-02-23 12:38:14',NULL,3),(5,8,5,9,'lab ass','9874563211','gfgd','ghfgdhfgh','kadapa','ap',NULL,'ntg','8500050944','lab@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,1,'2018-02-23 12:40:59',NULL,3),(6,9,6,9,'doctor','9874563211','dfdg','fgdfg','fgfdg','ts',NULL,'fnjhdf','8527418527','doc@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,0,'2018-02-23 12:45:32','2018-02-23 16:32:47',3),(7,11,3,10,'bayares2','9874563211','ytuytu','tyuu','fgfdg','ts',NULL,'fnjhdf','8527418527','bayph1@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,1,'2018-02-23 12:49:59',NULL,10),(8,12,6,9,'doc2','9874563211','fggj','jghj','hjfgj','hjfghj',NULL,'hjfgh','8527418527','doc2@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,1,'2018-02-23 13:13:08',NULL,3),(9,13,6,9,'doc3','9874563211','add','add3','hyd','ts',NULL,'ntg','8500050944','doc3@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,0,'2018-02-23 13:13:48','2018-02-23 16:30:24',3),(11,15,3,9,'pharamcy','9874563211','tyrt','ytyt','fgfdg','ts','516172','fnjhdf','8527418527','phrtytry1@gmail.com','1519382821.jpg','11519382633.xlsx','vasudevareddy','32472655713','SBIN0002671','1519382733.docx',1,'2018-02-23 16:24:56',NULL,3),(12,16,6,9,'doctor6','6745674674','test','test4','fgfdg','ts','516172','fnjhdf','8527418527','doctor6@gmail.com','1519645893.jpg','11519624028.docx','vasudevareddy','32473655712','SBIN0002671','1519645871.docx',1,'2018-02-26 17:32:01',NULL,3),(13,17,5,9,'lab assistent','8500050944','kothapalli','testing','hyd','ap','516172','tg','8500050944','labassistent@gmail.com','1519627355.jpg','','vasudevareddy','32472655713','SBIN0002671','',1,'2018-02-26 12:12:35',NULL,3);

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `treatmentwise_doctors` */

insert  into `treatmentwise_doctors`(`t_d_id`,`hos_id`,`t_d_doc_id`,`t_d_name`,`t_d_status`,`t_d_create_at`,`t_d_updated_at`,`t_d_create_by`) values (1,9,8,'test166',0,'2018-02-26 11:15:52','2018-02-26 11:47:57',3),(2,9,8,'anglogyi',0,'2018-02-26 11:15:52','2018-02-26 11:47:59',3),(3,9,12,'test166',0,'2018-02-26 11:17:22','2018-02-26 11:45:15',3),(4,9,8,'anglogyi',0,'2018-02-26 11:19:51','2018-02-26 11:45:17',3);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
