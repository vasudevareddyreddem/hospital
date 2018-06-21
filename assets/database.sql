/*
SQLyog Community v11.52 (64 bit)
MySQL - 5.6.39-cll-lve : Database - e_healthinfra
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
) ENGINE=InnoDB AUTO_INCREMENT=188 DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`a_id`,`role_id`,`a_email_id`,`a_username`,`a_password`,`a_org_password`,`a_name`,`a_mobile`,`a_profile_pic`,`a_status`,`a_create_at`,`a_updated_at`,`out_source`,`create_by`) values (1,1,'admin@gmail.com',NULL,'4c3531e9a3ee1e3e6b94aab960834451','123456','Admin','8500050944','1527914484.jpg',1,'2018-02-21 11:15:43',NULL,0,NULL),(2,8,'team@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Software Team','8500050944','1523699376.png',1,NULL,NULL,0,NULL),(168,2,'arya@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Hospital Admin','9550252384',NULL,1,'2018-06-14 15:33:06',NULL,0,NULL),(169,2,'hosptial@gmail.com',NULL,'3fc0a7acf087f549ac2b266baf94b8b1','qwerty123',NULL,'7877787877',NULL,1,'2018-06-14 15:33:15','2018-06-14 16:59:38',0,NULL),(170,2,'anu@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Hospital Admin','9502710179',NULL,1,'2018-06-14 15:35:13',NULL,0,NULL),(171,5,'outlab1@gmail.com',NULL,'3fc0a7acf087f549ac2b266baf94b8b1','qwerty123','sai','9887877878',NULL,1,'2018-06-14 15:46:05',NULL,1,1),(172,5,'sravya@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','sravya','9502710179',NULL,1,'2018-06-14 15:47:21','2018-06-18 13:20:54',1,1),(173,5,'nani@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Nani','9511546312',NULL,1,'2018-06-14 15:47:55',NULL,1,1),(174,3,'recp@gmail.com',NULL,'3fc0a7acf087f549ac2b266baf94b8b1','qwerty123','raghuu','87878778787',NULL,1,'2018-06-14 15:53:39',NULL,0,NULL),(175,3,'sruthi@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','sruthi','9502710179',NULL,1,'2018-06-14 15:54:55',NULL,0,NULL),(176,4,'pharmacy@gmail.com',NULL,'3fc0a7acf087f549ac2b266baf94b8b1','qwerty123','ramesh','95676545545',NULL,1,'2018-06-14 15:55:18',NULL,0,NULL),(177,5,'inlab@gmail.com',NULL,'3fc0a7acf087f549ac2b266baf94b8b1','qwerty123','inlab','7878787878',NULL,1,'2018-06-14 15:57:26',NULL,0,NULL),(178,4,'prema@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','prema','9502710179',NULL,1,'2018-06-14 15:57:34',NULL,0,NULL),(179,6,'doctor@gmail.com',NULL,'3fc0a7acf087f549ac2b266baf94b8b1','qwerty123','prasad','9089878787',NULL,1,'2018-06-14 15:58:43',NULL,0,NULL),(180,6,'aarav@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Aarav','9875458785',NULL,1,'2018-06-14 15:59:04',NULL,0,NULL),(181,5,'priya@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','priya','9502710179',NULL,1,'2018-06-14 16:01:11',NULL,0,NULL),(182,3,'kavya@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Kavya','9875965225',NULL,1,'2018-06-14 16:01:45',NULL,0,NULL),(183,6,'sow@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','sow','9502710179',NULL,1,'2018-06-14 16:03:53',NULL,0,NULL),(184,5,'keerthi@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Keerthi','9578254545',NULL,1,'2018-06-14 16:04:38',NULL,0,NULL),(185,4,'mouni@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Mouni','9875426562',NULL,1,'2018-06-14 16:12:19',NULL,0,NULL),(186,6,'taruni@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','taruni','09502710179',NULL,1,'2018-06-15 11:37:35','2018-06-18 13:09:33',0,NULL),(187,2,'ns@gmail.com',NULL,'159e17556b7e209ee8b41081335474e4','nsgmail','Hospital Admin','7095103103',NULL,1,'2018-06-16 10:02:53',NULL,0,NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=98 DEFAULT CHARSET=latin1;

/*Data for the table `bidding_test` */

insert  into `bidding_test`(`id`,`b_id`,`test_id`,`p_l_t_id`,`lab_id`,`status`,`create_at`,`amount`,`duration`,`send_by`,`create_by`) values (78,187,93,191,171,4,'2018-06-14 16:30:34','500','23',171,177),(80,189,95,193,172,4,'2018-06-14 16:46:48','500','10',172,181),(81,188,92,194,173,4,'2018-06-14 16:48:32','500','10',173,184),(82,190,93,195,171,4,'2018-06-14 16:52:11','400','10',171,181),(84,191,93,199,171,1,'2018-06-14 17:07:47',NULL,NULL,NULL,181),(85,191,95,202,172,4,'2018-06-14 17:07:47','250','15',172,181),(86,195,95,204,172,4,'2018-06-15 10:47:16','400','20',172,181),(88,200,92,207,173,4,'2018-06-15 11:39:13','100','10',173,184),(91,200,92,207,173,1,'2018-06-15 16:37:09',NULL,NULL,NULL,184),(95,203,95,216,172,4,'2018-06-15 16:59:34','250','5',172,181),(96,205,95,223,172,1,'2018-06-15 17:23:50',NULL,NULL,NULL,181),(97,207,96,236,172,4,'2018-06-18 12:24:12','600','30',172,184);

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
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

/*Data for the table `coupon_codes` */

insert  into `coupon_codes`(`id`,`coupon_code`,`type`,`percentage_amount`,`create_at`,`create_by`,`status`,`updated_time`) values (31,'raghu','Amount','132','2018-06-14 15:40:13',1,1,NULL),(32,'anu','Percentage','2','2018-06-14 15:41:57',1,1,'2018-06-18 12:39:20');

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

insert  into `hospital`(`hos_id`,`a_id`,`hos_con_number`,`reschedule_date`,`hos_email_id`,`hos_representative`,`hos_rep_contact`,`mob_country_code`,`hos_rep_mobile`,`hos_rep_email`,`hos_rep_nationali_id`,`hos_rep_add1`,`hos_rep_add2`,`hos_rep_zipcode`,`hos_rep_city`,`hos_rep_state`,`hos_rep_country`,`hos_bas_name`,`hos_bas_contact`,`hos_bas_email`,`hos_bas_nationali_id`,`hos_bas_add1`,`hos_bas_add2`,`hos_bas_zipcode`,`hos_bas_city`,`hos_bas_state`,`hos_bas_country`,`hos_bas_document`,`hos_bas_logo`,`bank_holder_name`,`bank_acc_no`,`bank_name`,`bank_ifsc`,`bank_document`,`kyc_doc1`,`kyc_doc2`,`kyc_doc3`,`kyc_file1`,`kyc_file2`,`kyc_file3`,`hos_status`,`hos_created`,`hos_updated_at`,`hos_curent_login`,`hos_undo`,`out_source_lab`,`barcode`) values (50,168,'9550252384',NULL,'arya@gmail.com','Arya','04712755957','+91','9550255384','arya@gmail.com','859702587541','7-41/45','APHB','502548','Hyderabad','Telangana','India','Arya','9875214996','arya@gmail.com','879542587469','7-42/4','APHB','547894','Hyderabad','Telangana','India','1528970780.docx',NULL,'Arya','845254656565','SBI','acde1452697','1528970827.docx','abc','def','qwe','1528970883.docx','501528970883.docx','5011528970883.doc',1,'2018-06-14 15:33:06','2018-06-20 17:11:05',0,0,0,'1528970586168.png'),(51,169,'8328579782',NULL,'hospital@gmail.com','raghuu','08554234434','+91','9581758358','raghu@gmail.com','597146569026','flat 55','flat 44 ','500072','hyd','Telangana','india','pracha','7877787877','PRACHA@GMAIL.COM','5665656576','plot no 67','plot no 98','50072','hyd','Telangana','india','',NULL,'raghu','299410102622','raghuu','cnrb0002994','','aadhar','','','1528970920.pdf','','',1,'2018-06-14 15:33:15','2018-06-14 16:59:38',0,0,0,'1528970595169.png'),(52,170,'9502710179',NULL,'anu@gmail.com','anu','9502710179','+91','9502710179','anu@gmail.com','12345678912345','nagole','nagole','500035','hyderabad','Telangana','india','anu','9502710179','anu@gmail.com','12345678912345','nagole','nagole','500035','hyderabad','Telangana','india','1528970911.xlsx',NULL,'anu','123456789123456','hdfc','hdfc1234567','','test1','','','1528970983.xlsx','','',1,'2018-06-14 15:35:13','2018-06-20 16:49:30',0,1,0,'1528970713170.png'),(53,187,'7095103103',NULL,'ns@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2018-06-16 10:02:53','2018-06-20 16:47:57',0,1,0,'1529123573187.png');

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
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

/*Data for the table `hospital_admin_chating` */

insert  into `hospital_admin_chating`(`id`,`user_id`,`replay_user_id`,`from`,`comment`,`image`,`type`,`create_at`,`updated_by`,`hos_id`) values (24,177,0,0,'hello','','Replay','2018-06-16 09:53:25','2018-06-16 09:53:25',51);

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
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=latin1;

/*Data for the table `investigation_patient_list` */

insert  into `investigation_patient_list`(`id`,`p_id`,`b_id`,`investigation_type`,`countrycode`,`contact_number`,`frequency`,`priority`,`investigation_formdate`,`investigation_todate`,`associate_diagnosis`,`associate_problems`,`create_at`,`create_by`,`date`) values (67,111,187,'lab','','','4 hours','Medium','','','hh','dd','2018-06-14 16:28:53',179,'2018-06-14'),(68,112,189,'lab','','','12 hours','Medium','','','test3','test4','2018-06-14 16:43:13',183,'2018-06-14'),(69,113,188,'lab','','','6 hours','Medium','','','def','headache','2018-06-14 16:45:42',180,'2018-06-14'),(70,112,190,'lab','','','4 hours','Medium','','','test1','test2','2018-06-14 16:51:06',183,'2018-06-14'),(71,112,191,'lab','','','4 hours','Low','','','test4','test5','2018-06-14 17:04:57',183,'2018-06-14'),(72,112,195,'lab','','','6 hours','Low','','','t3','t4','2018-06-15 10:42:10',183,'2018-06-15'),(73,112,196,'lab','','','24 hours','Low','','','se','ffr','2018-06-15 11:08:30',183,'2018-06-15'),(74,113,194,'lab','','','24 hours','Medium','','','gf','nj','2018-06-15 11:23:56',180,'2018-06-15'),(75,116,200,'lab','','','6 hours','Medium','','','ggf','bv','2018-06-15 11:38:05',180,'2018-06-15'),(76,112,197,'lab','','','4 hours','Low','','','t5','t6','2018-06-15 11:55:20',183,'2018-06-15'),(77,112,199,'lab','','','4 hours','Low','','','bn','h','2018-06-15 11:56:22',183,'2018-06-15'),(78,112,197,'lab','','','6 hours','Medium','','','t5','t4','2018-06-15 12:02:12',186,'2018-06-15'),(79,117,201,'lab','','','6 hours','Low','','','hj','b','2018-06-15 12:12:19',183,'2018-06-15'),(80,117,201,'lab','','','24 hours','Low','','','mj','bj','2018-06-15 12:14:20',186,'2018-06-15'),(81,117,202,'lab','','','4 hours','Low','','','t5','t4','2018-06-15 16:52:44',183,'2018-06-15'),(82,117,203,'lab','','','4 hours','Low','','','t3','t4','2018-06-15 16:58:46',183,'2018-06-15'),(83,116,204,'lab','','','12 hours','Medium','','','gfg','jhj','2018-06-15 17:16:15',180,'2018-06-15'),(84,115,205,'lab','','','6 hours','Low','','','bn','t6','2018-06-15 17:22:51',183,'2018-06-15'),(85,115,206,'lab','','','6 hours','Low','','','t5','t6','2018-06-15 17:47:46',183,'2018-06-15'),(86,118,207,'lab','','','4 hours','Low','','','gv','pain','2018-06-18 12:07:51',180,'2018-06-18'),(87,117,210,'lab','','','4 hours','Medium','','','test','t4','2018-06-18 12:19:11',183,'2018-06-18'),(88,115,215,'lab','','','12 hours','Low','','','test','test1','2018-06-18 17:11:28',186,'2018-06-18'),(89,121,218,'lab','','','4 hours','Low','','','uu','gg','2018-06-20 16:23:59',180,'2018-06-20'),(90,121,219,'lab','','','4 hours','Low','','','hh','GG','2018-06-20 16:35:18',180,'2018-06-20');

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
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=latin1;

/*Data for the table `lab_test_list` */

insert  into `lab_test_list`(`t_id`,`hos_id`,`t_name`,`test_type`,`type`,`duration`,`amuont`,`t_short_form`,`t_description`,`t_department`,`create_at`,`status`,`create_by`,`update_by`,`out_source`) values (92,0,'CBCT',44,'Lab','15 min','500','fg','bh','','2018-06-14 15:52:11',1,173,NULL,1),(93,0,'scan',45,'Lab','50','500','gg','ff','','2018-06-14 16:24:30',1,171,NULL,1),(94,0,'pt scan',43,'Radiology','50','400','gg','dd','','2018-06-14 16:25:01',1,171,NULL,1),(95,0,'X Ray1',45,'Lab','10','500','test','test2','','2018-06-14 16:42:08',1,172,NULL,1),(96,0,'cbct test',44,'Lab','10','200','test1','test2','','2018-06-14 18:17:12',1,172,NULL,1),(97,52,'MRI',43,'Lab','30 min','1000','fr','hg','','2018-06-15 11:05:58',1,181,NULL,0),(98,50,'Haematology',46,'Lab','10 min','500','as','de','','2018-06-15 11:22:49',1,184,NULL,0),(99,0,'cb',46,'Lab','500','500','ff','ff','','2018-06-20 16:22:39',1,173,NULL,1),(100,0,'ct',46,'Lab','500','500','tt','ff','','2018-06-20 16:25:22',1,173,NULL,1);

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
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

/*Data for the table `lab_test_type` */

insert  into `lab_test_type`(`id`,`type_name`,`type`,`create_at`,`status`,`created_by`,`updated_time`) values (43,'mri','Lab','2018-06-14 15:41:40',1,1,'2018-06-16 17:29:12'),(44,'cbct','Lab','2018-06-14 15:42:02',1,1,NULL),(45,'x ray','Lab','2018-06-14 15:42:54',1,1,NULL),(46,'haematology','Lab','2018-06-14 15:43:03',1,1,NULL),(47,'PET CT','Lab','2018-06-14 15:43:27',1,1,'2018-06-18 13:20:30');

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
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=latin1;

/*Data for the table `medicine_list` */

insert  into `medicine_list`(`id`,`hos_id`,`hsn`,`othercode`,`medicine_name`,`dosage`,`qty`,`amount`,`total_amount`,`sgst`,`cgst`,`other`,`create_at`,`status`,`added_by`,`updated_at`) values (68,51,'1','r','crocin','150','9','10','10.8','4','4',NULL,'2018-06-14 16:12:38',1,176,NULL),(70,52,'10','101','crocin','20','10','50','52.5','2','3',NULL,'2018-06-14 16:17:59',1,178,'2018-06-15 11:18:15'),(71,50,'45','24','Amlovas','50mg','35','350','385','5','5',NULL,'2018-06-14 16:29:08',1,185,NULL),(72,52,'1','2','fepanil','','0','10','10.5','2','3',NULL,'2018-06-14 17:19:14',1,178,NULL),(73,52,'5','40','antibio','250','29','60','63','2','3',NULL,'2018-06-15 11:20:27',1,178,NULL),(74,52,'4','3','gelusil','150','10','40','42','2','3',NULL,'2018-06-15 11:20:53',1,178,NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

/*Data for the table `medicine_name` */

insert  into `medicine_name`(`id`,`hos_id`,`medicine_name`,`added_by`,`create_at`,`status`) values (43,51,'crocin',176,'2018-06-14 16:12:38',1),(44,51,'PRACTMAL',176,'2018-06-14 16:13:19',1),(45,50,'Amlovas',185,'2018-06-14 16:29:08',1),(46,52,'fepanil',178,'2018-06-14 17:19:14',1),(47,52,'antibio',178,'2018-06-15 11:20:27',1),(48,52,'gelusil',178,'2018-06-15 11:20:53',1);

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
) ENGINE=InnoDB AUTO_INCREMENT=96 DEFAULT CHARSET=latin1;

/*Data for the table `out_source_lab_test_lists` */

insert  into `out_source_lab_test_lists`(`id`,`lab_id`,`p_l_t_id`,`p_id`,`b_id`,`status`,`create_at`,`create_BY`) values (74,171,191,111,187,0,'2018-06-14 16:31:43',177),(75,172,193,112,189,0,'2018-06-14 16:48:40',181),(76,173,194,113,188,0,'2018-06-14 16:49:41',184),(77,171,195,112,190,0,'2018-06-14 16:53:42',181),(78,172,202,112,191,0,'2018-06-14 17:10:04',181),(79,172,204,112,195,0,'2018-06-15 10:48:09',181),(80,173,207,116,200,0,'2018-06-15 11:40:15',184),(81,172,208,116,200,0,'2018-06-15 11:49:40',184),(82,173,207,116,200,0,'2018-06-15 16:38:40',184),(83,173,207,116,200,0,'2018-06-15 16:38:52',184),(84,172,216,117,203,0,'2018-06-15 17:05:18',181),(85,172,236,118,207,0,'2018-06-18 12:25:57',184),(86,172,244,120,216,0,'2018-06-18 17:19:11',184),(87,173,243,120,216,0,'2018-06-18 17:19:11',184),(88,172,221,116,204,0,'2018-06-20 16:17:29',184),(89,173,250,121,218,0,'2018-06-20 16:26:32',184),(90,173,252,121,219,0,'2018-06-20 16:36:23',184),(91,173,253,121,219,0,'2018-06-20 16:36:23',184),(92,173,255,121,219,0,'2018-06-20 16:36:23',184),(93,173,256,121,219,0,'2018-06-20 16:36:23',184),(94,173,258,121,219,0,'2018-06-20 16:36:23',184),(95,173,259,121,219,0,'2018-06-20 16:36:23',184);

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
) ENGINE=InnoDB AUTO_INCREMENT=222 DEFAULT CHARSET=latin1;

/*Data for the table `patient_billing` */

insert  into `patient_billing`(`b_id`,`p_id`,`visit_no`,`visit_desc`,`date_of_visit`,`department`,`docotr_name`,`no_of_visits`,`last_visiting_date`,`service_type`,`service`,`visit_type`,`doctor`,`payer`,`price`,`qty`,`amount`,`bill`,`patient_payer_deposit_amount`,`payment_mode`,`bill_amount`,`received_form`,`treatment_id`,`doct_id`,`completed`,`create_at`,`updated_at`,`doctor_status`,`assign_doctor_to`,`assign_doctor_by`,`completed_type`,`type`,`create_by`,`medicine_payment_mode`,`payment_updated_by`,`payment_createed_by`,`report_completed`,`sheet_prescription`,`sheet_prescription_file`,`coupon_code`,`coupon_code_amount`,`with_out_coupon_code`) values (184,111,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'500','Cash','368','raghu','108','179',1,'2018-06-14 16:03:32','2018-06-14 16:04:26',1,0,0,1,'new',179,'Swipe',176,'2018-06-14 16:17:57',0,0,NULL,'raghu','132','500'),(185,112,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'200','Cash','200','anu','110','183',1,'2018-06-14 16:13:20','2018-06-14 16:14:15',1,0,0,1,'new',183,'Cash Payment',178,'2018-06-14 16:23:55',0,0,NULL,NULL,NULL,NULL),(186,113,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'450','Cash','450','arya','118','180',1,'2018-06-14 16:15:23','2018-06-14 16:18:38',1,0,0,1,'new',180,'Swipe',185,'2018-06-18 11:41:37',0,0,NULL,NULL,NULL,NULL),(187,111,'454454554','op','2018-06-14  ','56556','prasad','2','2018-06-14  ','lab','','op','reddy','raghu','450','','','','500','Cash','500','raghu','114','179',1,'2018-06-14 16:20:51','2018-06-14 16:22:05',1,0,0,2,'new',179,NULL,0,NULL,1,0,NULL,NULL,NULL,NULL),(188,113,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'200','Cash','200','ammu','118','180',1,'2018-06-14 16:27:07','2018-06-14 16:27:39',1,0,0,2,'Reschedule',180,NULL,0,NULL,1,0,NULL,NULL,NULL,NULL),(189,112,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'250','Online','250','anu','109','183',1,'2018-06-14 16:27:21','2018-06-14 16:28:00',1,0,0,2,'Reschedule',183,NULL,0,NULL,0,0,NULL,NULL,NULL,NULL),(190,112,'2','test','2018-06-11  ','test2','sow','2','2018-06-02  ','test3','','ip','sow','anu','100','','','','100','Online','100','anu','110','183',1,'2018-06-14 16:32:19','2018-06-14 16:33:13',1,0,0,2,'new',183,NULL,0,NULL,0,0,NULL,NULL,NULL,NULL),(191,112,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'600','Online','600','anu','111','183',1,'2018-06-14 17:00:54','2018-06-14 17:01:20',1,0,0,2,'Reschedule',183,NULL,0,NULL,0,0,NULL,NULL,NULL,NULL),(192,112,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'200','Cash','200','anu','111','183',1,'2018-06-14 17:14:20','2018-06-14 17:14:44',1,0,0,1,'Reschedule',183,NULL,0,NULL,0,0,NULL,NULL,NULL,NULL),(193,114,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'500','Cash','500','babu','108','select',1,'2018-06-15 08:48:52','2018-06-15 08:53:50',0,NULL,NULL,0,'new',NULL,NULL,0,NULL,0,0,NULL,NULL,NULL,NULL),(194,113,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'300','Cash','300','arya','118','180',1,'2018-06-15 10:31:30','2018-06-15 10:31:53',1,0,0,2,'Reschedule',180,NULL,0,NULL,1,0,NULL,NULL,NULL,NULL),(195,112,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'200','Cash','200','anu','109','183',1,'2018-06-15 10:34:42','2018-06-15 10:35:11',1,0,0,2,'Reschedule',183,NULL,0,NULL,0,0,NULL,NULL,NULL,NULL),(196,112,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'120','Online','120','anu','110','183',1,'2018-06-15 11:07:02','2018-06-15 11:07:23',1,0,0,2,'Reschedule',183,NULL,0,NULL,1,0,NULL,NULL,NULL,NULL),(197,112,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'200','Cash','200','anu','110','183',1,'2018-06-15 11:10:59','2018-06-15 11:11:16',1,0,0,2,'Reschedule',186,NULL,0,NULL,0,0,NULL,NULL,NULL,NULL),(198,115,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'55','Online','55','anu','109','183',1,'2018-06-15 11:23:32','2018-06-15 11:24:15',1,0,0,1,'new',183,'Cash Payment',178,'2018-06-15 11:31:07',0,0,NULL,NULL,NULL,NULL),(199,112,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'550','Other','550','anu','110','183',1,'2018-06-15 11:25:18','2018-06-15 11:25:42',1,0,0,2,'Reschedule',183,NULL,0,NULL,0,0,NULL,NULL,NULL,NULL),(200,116,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'250','Cash','250','arya','118','180',1,'2018-06-15 11:35:36','2018-06-15 11:36:38',1,0,0,2,'new',180,NULL,0,NULL,0,0,NULL,NULL,NULL,NULL),(201,117,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'250','Online','250','as','109','183',1,'2018-06-15 12:10:01','2018-06-15 12:11:10',1,0,0,2,'new',186,NULL,0,NULL,1,0,NULL,NULL,NULL,NULL),(202,117,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'200','Online','200','anu','109','183',1,'2018-06-15 16:49:51','2018-06-15 16:50:20',1,0,0,2,'Reschedule',183,NULL,0,NULL,0,0,NULL,NULL,NULL,NULL),(203,117,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'300','Cash','300','anu','110','183',1,'2018-06-15 16:55:36','2018-06-15 16:55:54',1,0,0,2,'Reschedule',183,NULL,0,NULL,0,0,NULL,NULL,NULL,NULL),(204,116,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'120','Online','55','anu','118','180',1,'2018-06-15 17:13:49','2018-06-15 17:14:08',1,0,0,2,'Reschedule',180,NULL,0,NULL,0,0,NULL,NULL,NULL,NULL),(205,115,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'200','Online','120','anu','111','183',1,'2018-06-15 17:20:35','2018-06-15 17:20:48',1,0,0,2,'Reschedule',183,NULL,0,NULL,0,0,NULL,NULL,NULL,NULL),(206,115,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'55','Cash','55','anu','110','183',1,'2018-06-15 17:44:10','2018-06-15 17:44:25',1,0,0,2,'Reschedule',183,NULL,0,NULL,0,0,NULL,NULL,NULL,NULL),(207,118,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'250','Cash','110.74','arya','115','180',1,'2018-06-18 11:38:24','2018-06-18 11:41:38',1,0,0,2,'new',180,NULL,0,NULL,0,1,NULL,'anu','110.74','113'),(208,117,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'2018-06-18 12:01:19',NULL,0,NULL,NULL,0,'Reschedule',NULL,NULL,0,NULL,0,0,NULL,NULL,NULL,NULL),(209,111,'55','gg','2018-06-18  ','DD','g','5','2018-06-05  ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'2018-06-18 12:05:18',NULL,0,NULL,NULL,0,'new',NULL,NULL,0,NULL,0,0,NULL,NULL,NULL,NULL),(210,117,'20','test','2018-06-15  ','test','sow','2','2018-06-14  ','test','','test','sow','anu','400','','','','400','Cash','400','anu','110','183',1,'2018-06-18 12:12:20','2018-06-18 12:12:53',1,0,0,2,'new',183,NULL,0,NULL,0,1,NULL,NULL,NULL,NULL),(211,113,'3345','resech','2018-06-19  ','heart','aarav','1','2018-06-11  ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'2018-06-18 12:43:32',NULL,0,NULL,NULL,0,'new',NULL,NULL,0,NULL,0,0,NULL,NULL,NULL,NULL),(212,113,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'2018-06-18 13:06:54',NULL,0,NULL,NULL,0,'Reschedule',NULL,NULL,0,NULL,0,0,NULL,NULL,NULL,NULL),(213,113,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'2018-06-18 13:07:07',NULL,0,NULL,NULL,0,'Reschedule',NULL,NULL,0,NULL,0,0,NULL,NULL,NULL,NULL),(214,119,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'500','Cash','500','raghu','115','180',1,'2018-06-18 13:10:22','2018-06-18 13:11:12',1,0,0,1,'new',180,'Swipe',185,'2018-06-18 16:43:59',0,0,NULL,NULL,NULL,NULL),(215,115,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'120','Online','120','anu','109','183',1,'2018-06-18 16:01:23','2018-06-18 16:02:02',1,0,0,2,'Reschedule',186,NULL,0,NULL,0,1,NULL,NULL,NULL,NULL),(216,120,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'300','Cash','300','arya','118','180',1,'2018-06-18 16:16:25','2018-06-18 16:17:20',1,0,0,2,'new',180,NULL,0,NULL,0,0,NULL,NULL,NULL,NULL),(217,117,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'200','Online','200','anu','109','183',1,'2018-06-19 10:06:10','2018-06-19 10:06:33',1,0,0,2,'Reschedule',183,NULL,0,NULL,1,0,NULL,NULL,NULL,NULL),(218,121,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'500','Cash','500','RAGHU','116','180',1,'2018-06-20 16:19:51','2018-06-20 16:20:27',1,0,0,2,'new',180,NULL,0,NULL,0,0,NULL,NULL,NULL,NULL),(219,121,'4555655','55','2018-06-13  ','dd','aarav','4','2018-06-21  ','op','','rr','aarav','raghu','500','','','','500','Cash','500','raghu','115','180',1,'2018-06-20 16:28:55','2018-06-20 16:29:28',1,0,0,2,'new',180,NULL,0,NULL,0,0,NULL,NULL,NULL,NULL),(220,121,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'2018-06-20 17:22:05',NULL,0,NULL,NULL,0,'Reschedule',NULL,NULL,0,NULL,0,0,NULL,NULL,NULL,NULL),(221,121,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'500','Cash','500','raghu','115','180',1,'2018-06-20 17:44:32','2018-06-20 17:45:17',0,NULL,NULL,0,'Reschedule',NULL,NULL,0,NULL,0,0,NULL,NULL,NULL,NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

/*Data for the table `patient_lab_reports` */

insert  into `patient_lab_reports`(`id`,`test_id`,`p_id`,`b_id`,`hos_id`,`problem`,`symptoms`,`image`,`create_at`,`status`,`create_by`) values (29,'93',111,187,0,'cough','sever','1528974155.docx','2018-06-14 16:32:35',1,171),(30,'92',113,188,0,'cbct','headache','1528975297.docx','2018-06-14 16:51:37',1,173),(31,'93',112,190,0,'test','headache','1528975640.docx','2018-06-14 16:57:19',1,171),(32,'95',112,191,0,'t1','t2','1528976474.doc','2018-06-14 17:11:13',1,172),(33,'95',112,195,0,'de','pain','1529039955.docx','2018-06-15 10:49:15',1,172),(34,'97',112,196,52,'gf','hgg','1529041167.docx','2018-06-15 11:09:27',1,181),(35,'98',113,194,50,'sd','cbc','1529042399.docx','2018-06-15 11:29:58',1,184),(36,'92',116,200,0,'fever','se','1529043065.docx','2018-06-15 11:41:04',1,173),(37,'97',117,201,52,'headache','dre','1529045406.docx','2018-06-15 12:20:06',1,181),(38,'98',117,201,52,'test1','fr','1529045406.docx','2018-06-15 12:20:06',1,181),(39,'95',117,203,0,'sad','ss','1529062657.docx','2018-06-15 17:07:37',1,172),(40,'96',118,207,0,'test','test1','1529305309.xlsx','2018-06-18 12:31:49',1,172),(41,'98',117,217,52,'test','test1','1529383209.xlsx','2018-06-19 10:10:08',1,181),(42,'98',121,218,50,'cough','sever','1529492155.doc','2018-06-20 16:25:55',1,184);

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
) ENGINE=InnoDB AUTO_INCREMENT=260 DEFAULT CHARSET=latin1;

/*Data for the table `patient_lab_test_list` */

insert  into `patient_lab_test_list`(`id`,`p_id`,`b_id`,`test_id`,`create_at`,`date`,`create_by`,`status`,`report_completed`,`out_source`) values (190,113,186,92,'2018-06-14 16:24:54','2018-06-14',180,1,'0',1),(191,111,187,93,'2018-06-14 16:28:38','2018-06-14',179,1,'1',1),(192,112,189,93,'2018-06-14 16:38:31','2018-06-14',183,1,'0',1),(193,112,189,95,'2018-06-14 16:42:46','2018-06-14',183,1,'0',1),(194,113,188,92,'2018-06-14 16:45:21','2018-06-14',180,1,'1',1),(195,112,190,93,'2018-06-14 16:50:48','2018-06-14',183,1,'1',1),(196,112,190,95,'2018-06-14 16:50:48','2018-06-14',183,1,'0',1),(197,112,191,95,'2018-06-14 17:03:33','2018-06-14',183,1,'1',1),(198,112,191,95,'2018-06-14 17:03:51','2018-06-14',183,1,'1',1),(199,112,191,93,'2018-06-14 17:04:01','2018-06-14',183,1,'0',1),(200,112,191,95,'2018-06-14 17:04:01','2018-06-14',183,1,'1',1),(201,112,191,95,'2018-06-14 17:04:07','2018-06-14',183,1,'1',1),(202,112,191,95,'2018-06-14 17:04:23','2018-06-14',183,1,'1',1),(203,112,195,96,'2018-06-15 10:38:10','2018-06-15',183,1,'0',1),(204,112,195,95,'2018-06-15 10:38:27','2018-06-15',183,1,'1',1),(205,112,196,97,'2018-06-15 11:08:09','2018-06-15',183,1,'1',0),(206,113,194,98,'2018-06-15 11:23:17','2018-06-15',180,1,'1',0),(207,116,200,92,'2018-06-15 11:37:50','2018-06-15',180,1,'1',1),(208,116,200,96,'2018-06-15 11:37:50','2018-06-15',180,1,'0',1),(209,112,197,98,'2018-06-15 11:54:46','2018-06-15',183,1,'0',0),(210,112,199,98,'2018-06-15 11:56:09','2018-06-15',183,1,'0',0),(211,112,197,98,'2018-06-15 12:00:41','2018-06-15',186,1,'0',0),(212,112,197,97,'2018-06-15 12:01:05','2018-06-15',186,1,'0',0),(213,117,201,97,'2018-06-15 12:12:06','2018-06-15',183,1,'1',0),(214,117,201,98,'2018-06-15 12:13:21','2018-06-15',186,1,'1',0),(215,117,202,95,'2018-06-15 16:52:13','2018-06-15',183,1,'0',1),(216,117,203,95,'2018-06-15 16:57:29','2018-06-15',183,1,'1',1),(217,117,203,96,'2018-06-15 16:57:55','2018-06-15',183,1,'0',1),(218,117,203,97,'2018-06-15 16:58:07','2018-06-15',183,1,'0',0),(219,117,203,98,'2018-06-15 16:58:21','2018-06-15',183,1,'0',0),(220,117,203,96,'2018-06-15 16:58:36','2018-06-15',183,1,'0',1),(221,116,204,95,'2018-06-15 17:15:48','2018-06-15',180,1,'0',1),(222,115,205,97,'2018-06-15 17:21:42','2018-06-15',183,1,'0',0),(223,115,205,95,'2018-06-15 17:21:56','2018-06-15',183,1,'0',1),(224,115,205,96,'2018-06-15 17:22:34','2018-06-15',183,1,'0',1),(225,115,206,95,'2018-06-15 17:46:09','2018-06-15',183,1,'0',1),(226,115,206,95,'2018-06-15 17:46:33','2018-06-15',183,1,'0',1),(227,115,206,95,'2018-06-15 17:46:53','2018-06-15',183,1,'0',1),(228,115,206,95,'2018-06-15 17:47:00','2018-06-15',183,1,'0',1),(229,115,206,95,'2018-06-15 17:47:11','2018-06-15',183,1,'0',1),(230,115,206,97,'2018-06-15 17:47:27','2018-06-15',183,1,'0',0),(231,115,206,95,'2018-06-15 17:47:37','2018-06-15',183,1,'0',1),(232,118,207,92,'2018-06-18 12:06:34','2018-06-18',180,1,'0',1),(233,118,207,92,'2018-06-18 12:06:42','2018-06-18',180,1,'0',1),(234,118,207,92,'2018-06-18 12:06:50','2018-06-18',180,1,'0',1),(235,118,207,92,'2018-06-18 12:07:06','2018-06-18',180,1,'0',1),(236,118,207,96,'2018-06-18 12:07:06','2018-06-18',180,1,'1',1),(237,118,207,92,'2018-06-18 12:07:36','2018-06-18',180,1,'0',1),(238,117,210,95,'2018-06-18 12:17:31','2018-06-18',183,1,'0',1),(239,117,210,95,'2018-06-18 12:17:36','2018-06-18',183,1,'0',1),(240,117,210,96,'2018-06-18 12:17:54','2018-06-18',183,1,'0',1),(241,117,210,97,'2018-06-18 12:18:14','2018-06-18',183,1,'0',0),(242,117,210,98,'2018-06-18 12:18:34','2018-06-18',183,1,'0',0),(243,120,216,92,'2018-06-18 17:03:55','2018-06-18',180,1,'0',1),(244,120,216,96,'2018-06-18 17:03:55','2018-06-18',180,1,'0',1),(245,115,215,93,'2018-06-18 17:10:12','2018-06-18',186,1,'0',1),(246,115,215,95,'2018-06-18 17:10:12','2018-06-18',186,1,'0',1),(247,115,215,95,'2018-06-18 17:10:52','2018-06-18',186,1,'0',1),(248,117,217,98,'2018-06-19 10:08:37','2018-06-19',183,1,'1',0),(249,121,218,98,'2018-06-20 16:23:44','2018-06-20',180,1,'1',0),(250,121,218,99,'2018-06-20 16:23:44','2018-06-20',180,1,'0',1),(251,121,219,98,'2018-06-20 16:34:06','2018-06-20',180,1,'0',0),(252,121,219,99,'2018-06-20 16:34:06','2018-06-20',180,1,'0',1),(253,121,219,100,'2018-06-20 16:34:06','2018-06-20',180,1,'0',1),(254,121,219,98,'2018-06-20 16:34:06','2018-06-20',180,1,'0',0),(255,121,219,99,'2018-06-20 16:34:06','2018-06-20',180,1,'0',1),(256,121,219,100,'2018-06-20 16:34:06','2018-06-20',180,1,'0',1),(257,121,219,98,'2018-06-20 16:35:02','2018-06-20',180,1,'0',0),(258,121,219,99,'2018-06-20 16:35:02','2018-06-20',180,1,'0',1),(259,121,219,100,'2018-06-20 16:35:02','2018-06-20',180,1,'0',1);

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
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

/*Data for the table `patient_medicine_list` */

insert  into `patient_medicine_list`(`m_id`,`p_id`,`b_id`,`type_of_medicine`,`medicine_name`,`substitute_name`,`condition`,`dosage`,`route`,`frequency`,`directions`,`formdate`,`todate`,`qty`,`org_amount`,`units`,`comments`,`create_at`,`date`,`create_by`,`edit_reason`,`edited`,`edited_by`,`amount`) values (46,111,184,'Brand','PRACTMAL','Yes','Chronic','120','Mouth','6 hours','hh ','','','10','318','tablet','ee','2018-06-14 16:15:41','2018-06-14',179,NULL,0,NULL,32),(47,112,185,'Generic','crocin','Yes','Chronic','150','Mouth','6 hours','twice a day','','','10','110','mg','test','2018-06-14 16:20:41','2018-06-14',183,'test1',1,178,11),(48,113,186,'Generic','Amlovas','Yes','Chronic','50mg','Mouth','4 hours','daily once','','','5','1925','tablet','sd','2018-06-14 16:32:37','2018-06-14',180,NULL,0,NULL,385),(49,112,192,'Generic','fepanil','No','Chronic','','Mouth','4 hours','test1','','','10','105','ounce','test','2018-06-14 17:22:07','2018-06-14',183,NULL,0,NULL,11),(50,112,192,'Brand','fepanil','Yes','Chronic','','Mouth','4 hours','t1','','','10','105','tablet','t2','2018-06-14 17:26:06','2018-06-14',183,NULL,0,NULL,11),(51,112,197,'Generic','crocin','Yes','Chronic','150','Mouth','6 hours','once at night','','','1','10.8','tablet','hg','2018-06-15 11:15:56','2018-06-15',183,NULL,0,NULL,11),(52,115,198,'Generic','antibio','Yes','Chronic','250','Mouth','6 hours','gg','','','1','63','mg','hh','2018-06-15 11:29:27','2018-06-15',183,NULL,0,NULL,63),(53,119,214,'Brand','Amlovas','Yes','Chronic','50mg','Mouth','4 hours','tt','','','10','3850','device','gg','2018-06-18 16:38:07','2018-06-18',180,NULL,0,NULL,385);

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
) ENGINE=InnoDB AUTO_INCREMENT=113 DEFAULT CHARSET=latin1;

/*Data for the table `patient_vitals_list` */

insert  into `patient_vitals_list`(`id`,`p_id`,`b_id`,`assessment_type`,`vitaltype`,`tep_actuals`,`tep_range`,`temp_site_positioning`,`notes`,`pulse_actuals`,`pulse_range`,`pulse_rate_rhythm`,`pulse_rate_vol`,`notes1`,`create_at`,`date`) values (81,111,184,NULL,NULL,'22','33','44','33','44','44','33','44','ee','2018-06-14 16:03:56','2018-06-14'),(82,112,185,NULL,NULL,'20','20 40','20','20','30','20 40','10','20','30','2018-06-14 16:13:57','2018-06-14'),(83,113,186,NULL,NULL,'42','30 to 100','cf','cf','70','35 to 110','12','45','acd','2018-06-14 16:18:10','2018-06-14'),(84,111,187,NULL,NULL,'22','33','44','33','44','44','33','44','ee','2018-06-14 16:22:17','2018-06-14'),(85,113,188,NULL,NULL,'42','30 to 100','cf','cf','70','35 to 110','12','45','acd','2018-06-14 16:27:12','2018-06-14'),(86,112,189,NULL,NULL,'20','20 40','20','20','30','20 40','10','20','30','2018-06-14 16:27:39','2018-06-14'),(87,112,190,NULL,NULL,'20','20 40','20','20','30','20 40','10','20','30','2018-06-14 16:33:27','2018-06-14'),(88,112,191,NULL,NULL,'20','20 40','20','20','30','20 40','10','20','30','2018-06-14 17:00:59','2018-06-14'),(89,112,192,NULL,NULL,'20','20 40','20','20','30','20 40','10','20','30','2018-06-14 17:14:31','2018-06-14'),(90,112,0,NULL,NULL,'20','40','20','12','20','20','10','25','12','2018-06-14 18:23:59','2018-06-14'),(91,114,193,NULL,NULL,'95','98','122','12','120','140','122','12','12','2018-06-15 08:52:56','2018-06-15'),(92,113,194,NULL,NULL,'42','30 to 100','cf','cf','70','35 to 110','12','45','acd','2018-06-15 10:31:38','2018-06-15'),(93,112,195,NULL,NULL,'20','40','20','12','20','20','10','25','12','2018-06-15 10:34:52','2018-06-15'),(94,112,196,NULL,NULL,'20','40','20','12','20','20','10','25','12','2018-06-15 11:07:07','2018-06-15'),(95,112,197,NULL,NULL,'20','40','20','12','20','20','10','25','12','2018-06-15 11:11:03','2018-06-15'),(96,115,198,NULL,NULL,'20','40','20','40','20','60','20','30','40','2018-06-15 11:23:56','2018-06-15'),(97,112,199,NULL,NULL,'20','40','20','12','20','20','10','25','12','2018-06-15 11:25:22','2018-06-15'),(98,116,200,NULL,NULL,'74','30 to 100','24','154','57','20 to100','df','165','872','2018-06-15 11:36:21','2018-06-15'),(99,117,201,NULL,NULL,'74','54 to 100','48','124','40','20 to100','25','51','vcf','2018-06-15 12:10:56','2018-06-15'),(100,117,202,NULL,NULL,'74','54 to 100','48','124','40','20 to100','25','51','vcf','2018-06-15 16:49:58','2018-06-15'),(101,117,203,NULL,NULL,'74','54 to 100','48','124','40','20 to100','25','51','vcf','2018-06-15 16:55:40','2018-06-15'),(102,116,204,NULL,NULL,'74','30 to 100','24','154','57','20 to100','df','165','872','2018-06-15 17:13:57','2018-06-15'),(103,115,205,NULL,NULL,'20','40','20','40','20','60','20','30','40','2018-06-15 17:20:38','2018-06-15'),(104,115,206,NULL,NULL,'20','40','20','40','20','60','20','30','40','2018-06-15 17:44:14','2018-06-15'),(105,118,207,NULL,NULL,'70','50 to 110','45','nh','60','50 to 100','35','54','sd','2018-06-18 11:40:18','2018-06-18'),(106,117,210,NULL,NULL,'74','54 to 100','48','124','40','20 to100','25','51','vcf','2018-06-18 12:14:58','2018-06-18'),(107,119,214,NULL,NULL,'22','33','33','22','22','33','33','22','44','2018-06-18 13:10:43','2018-06-18'),(108,115,215,NULL,NULL,'20','40','20','40','20','60','20','30','40','2018-06-18 16:01:34','2018-06-18'),(109,120,216,NULL,NULL,'54','50 to 110','47','dsd','60','50 to 120','12','78','sa','2018-06-18 16:17:06','2018-06-18'),(110,117,217,NULL,NULL,'74','54 to 100','48','124','40','20 to100','25','51','vcf','2018-06-19 10:06:15','2018-06-19'),(111,121,218,NULL,NULL,'22','44','33','44','33','33','44','44','44','2018-06-20 16:20:07','2018-06-20'),(112,121,219,NULL,NULL,'22','44','33','44','33','33','44','44','44','2018-06-20 16:29:39','2018-06-20');

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
) ENGINE=InnoDB AUTO_INCREMENT=122 DEFAULT CHARSET=latin1;

/*Data for the table `patients_list_1` */

insert  into `patients_list_1`(`pid`,`hos_id`,`card_number`,`registrationtype`,`patient_category`,`problem`,`name`,`mobile`,`email`,`dob`,`age`,`bloodgroup`,`martial_status`,`nationali_id`,`perment_address`,`p_c_name`,`p_s_name`,`p_zipcode`,`p_country_name`,`temp_address`,`t_c_name`,`t_s_name`,`t_zipcode`,`t_country_name`,`religion`,`caste`,`mothername`,`language`,`primarylanguage`,`preferred_language`,`occupation`,`education`,`birth_place`,`work_phone`,`home_phone`,`citizen_proof`,`patient_identifier`,`relation`,`first_name`,`middel_name`,`last_name`,`next_address1`,`next_address2`,`next_pincode`,`next_city`,`next_state`,`next_country`,`next_email`,`next_mobile`,`next_occupation`,`referred`,`internal_external`,`search_doctor`,`relationship`,`g_first_name`,`g_middel_name`,`g_last_name`,`gender`,`nationality`,`g_language`,`living`,`g_address1`,`g_address2`,`g_pincode`,`g_city`,`g_state`,`g_country`,`payer_name`,`payer_mobile`,`payer_address`,`dependency`,`arrangement`,`incomegroup`,`description`,`confidential`,`student`,`barcode`,`create_at`,`create_by`,`updated_at`) values (111,51,'123434545454','New','Pay Patient','fever','raghu','9898886787','raghu@gmail.com','1995-11-07','22','O+','Single','58777676767','hno 99','hyd','ts','50076','india','','','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'raghu',NULL,NULL,NULL,NULL,NULL,NULL,'Male',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1528972412111.png','2018-06-14 16:03:32',174,NULL),(112,52,'456789123456','New','Staff','fever','prem','9502710179','prem@gmail.com','2018-06-07','24','O+','Single','12345678912345','boduppal','hyd','ts','500035','india','','','','','','hindu','gen','swetha','Telugu','English','Telugu','test','test1','hyderabad','1234567891','1234567998','No','1528980668.xlsx',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,'Male',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1528973000112.png','2018-06-15 11:25:18',175,'2018-06-14 18:21:08'),(113,50,'578154578254','New','Pay Patient','headache','Ramya','9874154588','ram@gmail.com','1997-02-12','20','O+','Single','547896547895','14-48/45','Hyderabad','Telangana','502287','India','','','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'arya',NULL,NULL,NULL,NULL,NULL,NULL,'Female',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1528973123113.png','2018-06-18 13:07:07',182,NULL),(114,51,'212325445214','New','VIP','faver','madhu','7095103103','dcareclinic63@gmail.com','1990-01-31','31','O+','Single','1234567891','tpt','tpt','ap','517502','ind','','','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'med space',NULL,NULL,NULL,NULL,NULL,NULL,'Male',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1529032732114.png','2018-06-15 08:48:52',174,NULL),(115,52,'4567891235467','New','VIP','cough','ajay','9502710179','ajay@gmail.com','2018-06-04','21','B+','Single','123456789123','nagole','hyd','ts','500035','india','','','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'anu',NULL,NULL,NULL,NULL,NULL,NULL,'Male',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1529042012115.png','2018-06-18 16:01:23',175,NULL),(116,50,'784121545221','New','VIP','fever','karuna','8985454945','kar@gmail.com','1999-01-06','18','O+','Single','788554548774','sr nagar','hyderabad','Telangana','502478','India','','','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'arya',NULL,NULL,NULL,NULL,NULL,NULL,'Female',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1529042736116.png','2018-06-15 17:13:49',182,NULL),(117,52,'984215485455','New','Insurance','fever','sindu','9554851215','sin@gmail.com','2009-02-11','15','B-','Single','41324875454','sr nagar','hyderabad','Telangana','53235','India','','','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'as',NULL,NULL,NULL,NULL,NULL,NULL,'Male',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1529044801117.png','2018-06-19 10:06:10',175,NULL),(118,50,'45856596556458','New','Corporate','pain','shruthi','9587585978','sru@gmail.com','1997-03-07','20','B+','Single','897755556774','8-78/74','Hyderabad','Telangana','502184','India','','','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'arya',NULL,NULL,NULL,NULL,NULL,NULL,'Female',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1529302104118.png','2018-06-18 11:38:24',182,NULL),(119,50,'594545445454','New','Pay Patient','heart','raghuram','9581758358','raghu@gmail.com','2018-01-02','34','O+','Single','587787776666','flat 55','hyd','ts','500072','india','','','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'raghu',NULL,NULL,NULL,NULL,NULL,NULL,'Male',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1529307622119.png','2018-06-18 13:10:22',182,NULL),(120,50,'984554485545','New','Pay Patient','fever','dev','9887545554','dev@gmail.com','1996-01-02','21','A+','Single','857465455545','7-42/45','Hyderabad','Telangana','502485','India','','','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'arya',NULL,NULL,NULL,NULL,NULL,NULL,'Male',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1529318785120.png','2018-06-18 16:16:24',182,NULL),(121,50,'565656565656','New','Pay Patient','fever','raghu','9581758358','raghu@gmail.com','2018-06-21','22','O-','Single','597146569026','FLAT 55','hyd','TS','500072','INDIA','','','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'raghu',NULL,NULL,NULL,NULL,NULL,NULL,'Male',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1529491791121.png','2018-06-20 17:44:32',182,NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `resource_chating` */

insert  into `resource_chating`(`id`,`user_id`,`replay_user_id`,`to`,`comment`,`image`,`type`,`create_at`,`updated_by`) values (2,177,0,177,'hello','','Replay','2018-06-16 09:53:12','2018-06-16 09:53:12');

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
) ENGINE=InnoDB AUTO_INCREMENT=137 DEFAULT CHARSET=latin1;

/*Data for the table `resource_list` */

insert  into `resource_list`(`r_id`,`a_id`,`role_id`,`hos_id`,`resource_name`,`resource_mobile`,`resource_add1`,`resource_add2`,`resource_city`,`resource_state`,`resource_zipcode`,`resource_other_details`,`resource_contatnumber`,`resource_email`,`resource_photo`,`resource_document`,`resource_bank_holdername`,`resource_bank_accno`,`resource_ifsc_code`,`resource_other_document`,`r_status`,`r_created_at`,`r_updated_at`,`r_create_by`,`current_status`,`out_source_lab`) values (121,171,5,0,'sai','9887877878','plot 66','plot 7','hyd','ts ','500072','no','78787878878','outlab1@gmail.com','',NULL,NULL,NULL,NULL,NULL,1,'2018-06-14 15:46:05',NULL,1,NULL,1),(122,172,5,0,'sravya','9502710179','kphb','kphb','hyderabad','ts','500035','test','9502710179','sravya@gmail.com','1528971442.jpg',NULL,NULL,NULL,NULL,NULL,1,'2018-06-14 15:47:21','2018-06-18 13:20:54',1,NULL,1),(123,173,5,0,'Nani','9511546312','8-24/78','Shanthinagar','Hyderabad','Telangana','502478','Kphb','9875425595','nani@gmail.com','1528971476.jpg',NULL,NULL,NULL,NULL,NULL,1,'2018-06-14 15:47:55',NULL,1,NULL,1),(124,174,3,51,'raghuu','87878778787','plot  8','plot 32','hyd','ts','50073','no','8989878666','recp@gmail.com','','','raghuu','877656554','cntb7777787','',1,'2018-06-14 15:53:39',NULL,169,NULL,0),(125,175,3,52,'sruthi','9502710179','dsnr','dsnr','hyd','ts','500035','test1','9502710179','sruthi@gmail.com','1528971895.jpg','11528971895.xlsx','sruthi','789456123789','hdfc1234567','1528971895.xlsx',1,'2018-06-14 15:54:55',NULL,170,NULL,0),(126,176,4,51,'ramesh','95676545545','hno 6','hno 55','hyd',' ts','500072','no','9878778787','pharmacy@gmail.com','','','gt','987757556565','sbin0099988','',1,'2018-06-14 15:55:18',NULL,169,NULL,0),(127,177,5,51,'inlab','7878787878','hno 99','hno 88','hyd','ts','500087','no','9898787878','inlab@gmail.com','','','ram','87878787878','cbyt6666776','',1,'2018-06-14 15:57:26',NULL,169,NULL,0),(128,178,4,52,'prema','9502710179','lbngr','lbngr','hyd','ts','500035','test2','9502710179','prema@gmail.com','1528972054.jpg','11528972054.xlsx','prema','123456789123546','hdfc1234567','1528972054.xlsx',1,'2018-06-14 15:57:34',NULL,170,NULL,0),(129,179,6,51,'prasad','9089878787','hno 9','hno33','hyd','ts','500087','no','8876565432','doctor@gmail.com','','','ravi','6778767676','cbyt7787878','',1,'2018-06-14 15:58:43',NULL,169,NULL,0),(130,180,6,50,'Aarav','9875458785','2-87/57','Vidhyanagar','Hyderabad','Telangana','5024789','gyh','9874526656','aarav@gmail.com','1528972144.jpg','11528972144.docx','Aarav','789456256489','asfr4513545','1528972144.docx',1,'2018-06-14 15:59:04',NULL,168,NULL,0),(131,181,5,52,'priya','9502710179','uppal','uppal','hyderabad','ts','500035','test1','9502710179','priya@gmail.com','1528972271.jpg','11528972271.xlsx','priya','123456789456','sbi12345678','1528972271.xlsx',1,'2018-06-14 16:01:11',NULL,170,NULL,0),(132,182,3,50,'Kavya','9875965225','8-74/2','Vasanthnagar','Hyderabad','Telangana','502487','kug','9875412356','kavya@gmail.com','1528972305.jpg','11528972305.docx','Kavya','87952355625','edrs5487206','1528972305.docx',1,'2018-06-14 16:01:45',NULL,168,NULL,0),(133,183,6,52,'sow','9502710179','nagole','nagole','hyderabad','ts','500035','test1','9502710179','sow@gmail.com','1528972434.jpg','11528972434.xlsx','sow','123456789123456','sbi12345678','1528972434.xlsx',1,'2018-06-14 16:03:53',NULL,170,NULL,0),(134,184,5,50,'Keerthi','9578254545','7-84/3','RC puram','Hyderabad','Telangana','502487','hyt','9872441544','keerthi@gmail.com','1528972479.jpeg','11528972479.doc','keerthi','78962862465','gtyr1547896','1528972479.doc',1,'2018-06-14 16:04:38',NULL,168,NULL,0),(135,185,4,50,'Mouni','9875426562','7-47/8','Chandanagar','Hyderabad','Telangana','578878','gry','9875232624','mouni@gmail.com','1528972940.jpg','11528972940.docx','Mouni','896326448454','bgtr1457896','1528972940.docx',1,'2018-06-14 16:12:19',NULL,168,NULL,0),(136,186,6,52,'taruni','09502710179','nagole','nagole','hyd','ts','500035','test1','09502710179','taruni@gmail.com','','','taruni','123456789456123','and12345678','',1,'2018-06-15 11:37:35','2018-06-18 13:09:33',170,NULL,0);

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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `team_chating` */

insert  into `team_chating`(`id`,`user_id`,`replay_user_id`,`from`,`comment`,`image`,`type`,`create_at`,`updated_by`) values (16,1,0,0,'Hi','','Replay','2018-06-15 18:24:21','2018-06-15 18:24:21'),(17,177,0,0,'hello','','Replay','2018-06-16 09:53:35','2018-06-16 09:53:35');

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
) ENGINE=InnoDB AUTO_INCREMENT=119 DEFAULT CHARSET=latin1;

/*Data for the table `treament` */

insert  into `treament`(`t_id`,`hos_id`,`t_name`,`t_status`,`t_create_at`,`t_updated_at`,`t_create_by`) values (108,51,'ent',1,'2018-06-14 15:49:44',NULL,169),(109,52,'ENT',1,'2018-06-14 15:49:51',NULL,170),(110,52,'general surgery',1,'2018-06-14 15:50:22',NULL,170),(111,52,'dental',1,'2018-06-14 15:50:34',NULL,170),(112,51,'general surgery',1,'2018-06-14 15:50:35',NULL,169),(113,52,'radiology',1,'2018-06-14 15:51:30','2018-06-18 13:09:21',170),(114,51,'urology',1,'2018-06-14 15:51:32',NULL,169),(115,50,'Physiotheraphy',1,'2018-06-14 15:53:23',NULL,168),(116,50,'Obstetrics and Gynaecology',1,'2018-06-14 15:54:46',NULL,168),(117,50,'Psychiatry',1,'2018-06-14 15:55:11',NULL,168),(118,50,'Tuberculosis and Respiratory Diseases',1,'2018-06-14 15:55:36',NULL,168);

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
) ENGINE=InnoDB AUTO_INCREMENT=124 DEFAULT CHARSET=latin1;

/*Data for the table `treatmentwise_doctors` */

insert  into `treatmentwise_doctors`(`t_d_id`,`hos_id`,`t_d_doc_id`,`t_d_name`,`t_d_status`,`t_d_create_at`,`t_d_updated_at`,`t_d_create_by`) values (113,52,183,'109',1,'2018-06-14 16:05:05','2018-06-14 16:05:05',170),(114,51,179,'112',1,'2018-06-14 16:05:32','2018-06-14 16:05:32',169),(115,52,183,'110',1,'2018-06-14 16:05:38','2018-06-14 16:05:38',170),(116,51,179,'114',1,'2018-06-14 16:05:46','2018-06-14 16:05:46',169),(117,52,183,'111',1,'2018-06-14 16:06:29','2018-06-18 13:14:00',170),(118,52,183,'113',1,'2018-06-14 16:06:40','2018-06-14 16:06:40',170),(119,51,179,'108',1,'2018-06-14 16:07:16','2018-06-14 16:07:16',169),(120,50,180,'118',2,'2018-06-14 16:21:00','2018-06-18 11:32:38',168),(121,50,180,'115',2,'2018-06-18 11:31:41','2018-06-18 11:32:12',168),(122,50,180,'115',1,'2018-06-18 11:32:24','2018-06-18 11:32:24',168),(123,50,180,'118',1,'2018-06-18 11:32:32','2018-06-18 11:32:32',168);

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
