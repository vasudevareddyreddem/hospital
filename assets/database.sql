/*
SQLyog Community v11.52 (64 bit)
MySQL - 10.1.32-MariaDB : Database - hospital
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
) ENGINE=InnoDB AUTO_INCREMENT=226 DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`a_id`,`role_id`,`a_email_id`,`a_username`,`a_password`,`a_org_password`,`a_name`,`a_mobile`,`a_profile_pic`,`a_status`,`a_create_at`,`a_updated_at`,`out_source`,`create_by`) values (1,1,'admin@gmail.com',NULL,'4c3531e9a3ee1e3e6b94aab960834451','qwerty@123!@#','Admin','8500050944','1534491244.jpg',1,'2018-02-21 11:15:43',NULL,0,NULL),(2,8,'team@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Software Team','8500050944','1523699376.png',1,NULL,NULL,0,NULL),(197,2,'skrnursinghome@gmail.com',NULL,'d73652e485e92342dd8a24fe9fd7f2f6','skrbasha','Hospital Admin','8584244976',NULL,1,'2018-07-16 14:43:17',NULL,0,NULL),(198,6,'skbasha@gmail.com',NULL,'5ff2ade1976f5c4e0b347d6f4a308743','skbasha','S K MAHABOOB BASHA','9440012629',NULL,1,'2018-07-16 15:17:44',NULL,0,NULL),(199,3,'jyothirecp@gmail.com',NULL,'261c9009c551ab7785ff22dc26289313','jyothi','JYOTHI','08584244976',NULL,1,'2018-07-16 15:24:52',NULL,0,NULL),(200,4,'pushpa@gmail.com',NULL,'4fabd1a9048486c0dd4e9ef91197e1a3','pushpa','PUSHPA','08584244976',NULL,1,'2018-07-16 15:28:20',NULL,0,NULL),(201,5,'danalakshmi@gmail.com',NULL,'21413bf454308b3d755d95e33c255610','danalakshmi','DANALAKSHMI','08584244976',NULL,1,'2018-07-16 15:31:20',NULL,0,NULL),(202,5,'lakshmiclinic@gmail.com',NULL,'1eaf7c068a250a38e3bab770053c14c3','lakshmi','LAKSHMI CLINICAL LAB','9985762646',NULL,1,'2018-07-16 15:35:51',NULL,1,1),(203,2,'arya@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','SUNRISE HOSPITAL','9550232384',NULL,1,'2018-07-18 16:10:56','2018-07-23 10:57:15',0,NULL),(204,2,'anu@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','BLUEMOON HOSPITAL','9502710179',NULL,1,'2018-07-18 16:11:51','2018-07-23 10:57:55',0,NULL),(205,2,'bhavya@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','BGS HOSPTAL','8023642369',NULL,1,'2018-07-18 16:21:22','2018-07-23 10:56:22',0,NULL),(206,2,'sow@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','BLK HOSPITAL','9502710178',NULL,1,'2018-07-18 16:21:29','2018-07-23 10:58:36',0,NULL),(207,6,'priya@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Priya','8654123356',NULL,1,'2018-07-18 16:28:45',NULL,0,NULL),(208,6,'prema@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','prema','9502710179',NULL,1,'2018-07-18 16:28:45',NULL,0,NULL),(209,6,'kavya@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','kavya','9852365456',NULL,1,'2018-07-18 16:57:07',NULL,0,NULL),(210,6,'keerthi@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','keerthi','9502710179',NULL,1,'2018-07-18 16:57:24',NULL,0,NULL),(211,6,'prem@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','prem','9502710179',NULL,1,'2018-07-18 17:00:39',NULL,0,NULL),(212,6,'tarun@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Tarun','85610365655',NULL,1,'2018-07-18 17:00:41',NULL,0,NULL),(213,6,'arun@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Arun','9502710179',NULL,1,'2018-07-18 17:02:56',NULL,0,NULL),(214,6,'sid@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','Sid','9856324452',NULL,1,'2018-07-18 17:03:01',NULL,0,NULL),(215,3,'reddy@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','sai','9898989898',NULL,1,'2018-07-20 12:40:12','2018-07-25 11:41:31',0,NULL),(216,4,'venu@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','venu','8328579782',NULL,1,'2018-07-20 12:42:17',NULL,0,NULL),(217,5,'raghu@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','RAGHU','9581758358',NULL,1,'2018-07-20 12:43:58',NULL,0,NULL),(218,5,'ramu@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','ramu','9291622365',NULL,1,'2018-07-20 17:05:37',NULL,1,1),(219,9,'ward@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','raghu','9898989787',NULL,1,'2018-07-23 13:20:04',NULL,0,NULL),(220,3,'reddy1@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','reddy','8988888787',NULL,1,'2018-07-23 14:18:19',NULL,0,NULL),(221,3,'recp9@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','recp','8500050944',NULL,1,'2018-07-23 17:04:20','2018-07-23 17:10:12',0,NULL),(222,3,'recp1@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','raghu','7676767676',NULL,1,'2018-07-25 11:45:46',NULL,0,NULL),(223,3,'recp2@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','sai','9898767676',NULL,1,'2018-07-25 11:50:20',NULL,0,NULL),(224,9,'ward1@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','ward','1234567890',NULL,1,'2018-07-27 17:50:49',NULL,0,NULL),(225,10,'nurse@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','nurse','8500050944',NULL,1,'2018-08-14 10:28:19',NULL,0,NULL);

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

/*Table structure for table `appointment_bidding_list` */

DROP TABLE IF EXISTS `appointment_bidding_list`;

CREATE TABLE `appointment_bidding_list` (
  `b_id` int(11) NOT NULL AUTO_INCREMENT,
  `hos_id` int(11) DEFAULT NULL,
  `city` varchar(250) DEFAULT NULL,
  `patinet_name` varchar(250) DEFAULT NULL,
  `age` varchar(45) DEFAULT NULL,
  `mobile` varchar(45) DEFAULT NULL,
  `department` varchar(250) DEFAULT NULL,
  `specialist` varchar(250) DEFAULT NULL,
  `date` varchar(250) DEFAULT NULL,
  `time` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '0' COMMENT '0=pending;1=accept;2=reject',
  `create_at` datetime DEFAULT NULL,
  `coming_through` int(11) DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`b_id`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=latin1;

/*Data for the table `appointment_bidding_list` */

insert  into `appointment_bidding_list`(`b_id`,`hos_id`,`city`,`patinet_name`,`age`,`mobile`,`department`,`specialist`,`date`,`time`,`status`,`create_at`,`coming_through`,`create_by`) values (49,60,'HYDERABAD','ramu','23','9951040423','132','135','2018-07-30 ','10:30 am',1,'2018-07-25 11:42:44',0,6),(50,61,'HYDERABAD','ramu','23','9951040423','133','136','2018-07-30  ','12:30 pm',1,'2018-07-25 11:42:44',0,6),(51,57,'CHITTOOR','ramu','25','9951040423','119','123','2018-07-13','09:30 am',0,'2018-07-30 18:16:37',0,6),(52,57,'CHITTOOR','ramu','25','9951040423','119','123','2018-07-13','09:30 am',0,'2018-07-30 18:16:50',0,6),(53,57,'CHITTOOR','ramu','25','9951040423','119','123','2018-07-13','09:30 am',0,'2018-07-30 18:17:29',0,6),(54,57,'CHITTOOR','ramu','25','9951040423','119','123','2018-07-13','09:30 am',0,'2018-07-30 18:18:09',0,6),(55,57,'CHITTOOR','ramu','25','9951040423','119','123','2018-07-13','09:30 am',0,'2018-07-30 18:18:33',0,6),(56,57,'CHITTOOR','ramu','25','9951040423','119','123','2018-07-13','09:30 am',0,'2018-07-30 18:18:48',0,6),(57,57,'CHITTOOR','ramu','25','9951040423','119','123','2018-07-13','09:30 am',0,'2018-07-30 18:20:20',0,6),(58,57,'CHITTOOR','ramu','25','9951040423','119','123','2018-07-13','09:30 am',0,'2018-07-30 18:21:21',0,6),(59,57,'CHITTOOR','ramu','25','9951040423','119','123','2018-07-13','09:30 am',0,'2018-07-30 18:22:34',0,6),(60,57,'CHITTOOR','ramu','25','9951040423','119','123','2018-07-13','09:30 am',0,'2018-07-30 18:23:08',0,6),(61,57,'CHITTOOR','ramu','25','9951040423','119','123','2018-07-13','09:30 am',0,'2018-07-30 18:24:42',0,6),(62,57,'CHITTOOR','ramu','25','9951040423','119','123','2018-07-13','09:30 am',0,'2018-07-30 18:24:46',0,6),(63,57,'CHITTOOR','ramu','25','9951040423','119','123','2018-07-13','09:30 am',0,'2018-07-30 18:25:00',0,6),(64,57,'CHITTOOR','ramu','25','9951040423','119','123','2018-07-13','09:30 am',0,'2018-07-30 18:25:08',0,6),(65,57,'CHITTOOR','ramu','25','9951040423','119','123','2018-07-13','09:30 am',0,'2018-07-30 18:25:10',0,6),(66,57,'CHITTOOR','ramu','25','9951040423','119','123','2018-07-13','09:30 am',0,'2018-07-30 18:25:17',0,6),(67,57,'CHITTOOR','ramu','25','9951040423','119','123','2018-07-13','09:30 am',0,'2018-07-30 18:27:50',0,6),(68,57,'CHITTOOR','ramu','25','9951040423','119','123','2018-07-13','09:30 am',0,'2018-07-30 18:28:03',0,6),(69,57,'CHITTOOR','ramu','25','9951040423','119','123','2018-07-13','09:30 am',0,'2018-07-30 18:29:48',0,6),(70,57,'CHITTOOR','ramu','25','9951040423','119','123','2018-07-13','09:30 am',0,'2018-07-30 18:30:03',0,6);

/*Table structure for table `appointment_users` */

DROP TABLE IF EXISTS `appointment_users`;

CREATE TABLE `appointment_users` (
  `a_u_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `mobile` varchar(45) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `org_password` varchar(250) DEFAULT NULL,
  `profile_pic` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `create_at` datetime DEFAULT NULL,
  `token` text,
  PRIMARY KEY (`a_u_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `appointment_users` */

insert  into `appointment_users`(`a_u_id`,`name`,`email`,`mobile`,`password`,`org_password`,`profile_pic`,`status`,`create_at`,`token`) values (1,'vasudevareddy','vas@gmail.com','8500050944','fcea920f7412b5da7be0cf42b8c93759','1234567',NULL,1,'2018-07-18 12:16:43',NULL),(2,'vasu','vasu@gmail.com','8500050944','e10adc3949ba59abbe56e057f20f883e','123456',NULL,1,'2018-07-18 12:25:51',NULL),(3,'vasu','vasu1@gmail.com','8500050944','e10adc3949ba59abbe56e057f20f883e','123456','',1,'2018-07-18 12:26:28',NULL),(4,'vasu','vasu12@gmail.com','8500050944','25d55ad283aa400af464c76d713c07ad','12345678','',1,'2018-07-18 12:26:54',NULL),(5,'siva','siva@gmail.com','9951041040','25d55ad283aa400af464c76d713c07ad','12345678','',1,'2018-07-19 18:06:05',NULL),(6,'ramu','ramu@gmail.com','9951040423','25d55ad283aa400af464c76d713c07ad','12345678','0.218156001532542111IMG-20180725-WA0026.jpg',1,'2018-07-23 14:16:00','e3dA-AW0SZI:APA91bE_osLUiZy3Yc7gu3pP2LikMnmeOwPFQjndsk-zsJcQkNMME7Yz9J9r73wo3Qr9C557rntaPx_I2BhdPl3U5Pg4fa2zxQDVKrfBBStzF0yCfPlg3l3mbuoEOY1Li8z-6bf0kuwPv_ylqUsmV45z9KJFzS5hZA'),(7,'raghuram','raghuram7577@gmail.com','9581758358','433e9f75a647687387eb607c821c6fc8','raghu123','',1,'2018-07-25 15:13:57',NULL);

/*Table structure for table `appointments` */

DROP TABLE IF EXISTS `appointments`;

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hos_id` int(11) DEFAULT NULL,
  `city` varchar(250) DEFAULT NULL,
  `patinet_name` varchar(250) DEFAULT NULL,
  `age` varchar(250) DEFAULT NULL,
  `mobile` varchar(45) DEFAULT NULL,
  `department` varchar(250) DEFAULT NULL,
  `specialist` varchar(45) DEFAULT NULL,
  `doctor_id` varchar(45) DEFAULT NULL,
  `date` varchar(250) DEFAULT NULL,
  `time` varchar(250) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '1= confirm, 0=pending,2 reject',
  `create_at` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  `coming_through` int(11) DEFAULT NULL,
  `patient_id` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `appointments` */

insert  into `appointments`(`id`,`hos_id`,`city`,`patinet_name`,`age`,`mobile`,`department`,`specialist`,`doctor_id`,`date`,`time`,`status`,`create_at`,`create_by`,`coming_through`,`patient_id`) values (1,59,NULL,'raghu','22','9898989898','131','134','210','2018-07-30  ','07:30 pm',1,'2018-07-23 16:39:35',220,1,0),(2,58,NULL,'vasu','26','8500050944','122','131','209','2018-07-23  ','01:00 am',1,'2018-07-23 17:09:10',221,1,0),(3,59,NULL,'ramu','22','9951040410','131','134','','2018-07-24','12:30 pm',1,'2018-07-24 11:35:56',6,0,0),(4,58,NULL,'ramu','22','9951040423','129','132','','2018-07-26','9:30 pm',1,'2018-07-24 11:37:07',6,0,0),(5,58,NULL,'ramu','25','9951040423','129','132','','2018-07-31','11:00 am',1,'2018-07-24 13:02:00',6,0,0),(6,59,NULL,'ramu','22','9951040423','131','134','','2018-07-25','09:00 am',1,'2018-07-24 17:08:46',6,0,0),(7,59,NULL,'ramu','22','9951040423','131','134','','2018-07-31 ','03:00 pm',1,'2018-07-25 11:40:04',6,0,0),(8,59,NULL,'ramu','23','9951040423','131','134','','2018-07-30 ','10:30 am',1,'2018-07-25 11:52:38',6,0,0),(9,58,NULL,'ramu','22','9951040423','130','133','','2018-07-29 ','10:00 am',1,'2018-07-27 11:21:22',6,0,0),(10,61,NULL,'bhavya','25','8500050944','126','124','213','2018-07-31  ','07:30 am',1,'2018-07-30 14:38:13',223,1,0);

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
) ENGINE=InnoDB AUTO_INCREMENT=123 DEFAULT CHARSET=latin1;

/*Data for the table `bidding_test` */

insert  into `bidding_test`(`id`,`b_id`,`test_id`,`p_l_t_id`,`lab_id`,`status`,`create_at`,`amount`,`duration`,`send_by`,`create_by`) values (122,231,118,201,202,1,'2018-07-16 16:40:06',NULL,NULL,NULL,201);

/*Table structure for table `card_numbers` */

DROP TABLE IF EXISTS `card_numbers`;

CREATE TABLE `card_numbers` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `card_number` varchar(250) DEFAULT NULL,
  `count` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `print_status` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `pdf_name` varchar(250) DEFAULT NULL,
  `assign_seller` int(11) DEFAULT '0',
  `updated_at` datetime DEFAULT NULL,
  `cust_name` varchar(250) DEFAULT NULL,
  `mobile` varchar(45) DEFAULT NULL,
  `whatsapp_number` varchar(45) DEFAULT NULL,
  `aadhar_number` varchar(250) DEFAULT NULL,
  `email_id` varchar(250) DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `assign_customer` int(11) DEFAULT '0' COMMENT '0=unassign;1=assign',
  `customer_assign_time` datetime DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=135 DEFAULT CHARSET=latin1;

/*Data for the table `card_numbers` */

insert  into `card_numbers`(`c_id`,`card_number`,`count`,`status`,`print_status`,`created_at`,`created_by`,`pdf_name`,`assign_seller`,`updated_at`,`cust_name`,`mobile`,`whatsapp_number`,`aadhar_number`,`email_id`,`gender`,`assign_customer`,`customer_assign_time`) values (1,'450054021000',NULL,1,1,'2018-08-11 18:10:43',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL),(74,'450054021001','2',1,1,'2018-08-13 13:11:06',1,'2018_08_13_13_11_06_2_Cardnumbers.pdf',2,'2018-08-17 15:27:13','vasu','1','1','1','1','Male',1,'2018-08-18 11:22:11'),(75,'450054021002','2',1,1,'2018-08-13 13:11:06',1,'2018_08_13_13_11_06_2_Cardnumbers.pdf',2,'2018-08-17 15:27:13',NULL,NULL,NULL,NULL,NULL,NULL,0,NULL),(76,'450054021003','4',1,1,'2018-08-13 13:11:32',1,'2018_08_13_13_11_32_4_Cardnumbers.pdf',2,'2018-08-17 15:27:13',NULL,NULL,NULL,NULL,NULL,NULL,0,NULL),(77,'450054021004','4',1,1,'2018-08-13 13:11:32',1,'2018_08_13_13_11_32_4_Cardnumbers.pdf',2,'2018-08-17 15:27:13',NULL,NULL,NULL,NULL,NULL,NULL,0,NULL),(78,'450054021005','4',1,1,'2018-08-13 13:11:32',1,'2018_08_13_13_11_32_4_Cardnumbers.pdf',2,'2018-08-17 15:27:13',NULL,NULL,NULL,NULL,NULL,NULL,0,NULL),(79,'450054021006','4',1,1,'2018-08-13 13:11:32',1,'2018_08_13_13_11_32_4_Cardnumbers.pdf',2,'2018-08-17 15:27:13',NULL,NULL,NULL,NULL,NULL,NULL,0,NULL),(80,'450054021007','6',1,1,'2018-08-13 13:12:18',1,'2018_08_13_13_12_17_6_Cardnumbers.pdf',2,'2018-08-17 15:27:13',NULL,NULL,NULL,NULL,NULL,NULL,0,NULL),(81,'450054021008','6',1,1,'2018-08-13 13:12:18',1,'2018_08_13_13_12_17_6_Cardnumbers.pdf',2,'2018-08-17 15:27:13',NULL,NULL,NULL,NULL,NULL,NULL,0,NULL),(82,'450054021009','6',1,1,'2018-08-13 13:12:18',1,'2018_08_13_13_12_17_6_Cardnumbers.pdf',2,'2018-08-17 15:27:13',NULL,NULL,NULL,NULL,NULL,NULL,0,NULL),(83,'450054021010','6',1,1,'2018-08-13 13:12:18',1,'2018_08_13_13_12_17_6_Cardnumbers.pdf',2,'2018-08-17 15:27:13',NULL,NULL,NULL,NULL,NULL,NULL,0,NULL),(84,'450054021011','6',1,1,'2018-08-13 13:12:18',1,'2018_08_13_13_12_17_6_Cardnumbers.pdf',1,'2018-08-17 15:26:53',NULL,NULL,NULL,NULL,NULL,NULL,0,NULL),(85,'450054021012','6',1,1,'2018-08-13 13:12:18',1,'2018_08_13_13_12_17_6_Cardnumbers.pdf',1,'2018-08-17 15:26:53',NULL,NULL,NULL,NULL,NULL,NULL,0,NULL),(86,'450054021013','4',1,1,'2018-08-13 18:34:08',1,'2018_08_13_18_34_08_4_Cardnumbers.pdf',1,'2018-08-17 15:26:53',NULL,NULL,NULL,NULL,NULL,NULL,0,NULL),(87,'450054021014','4',1,1,'2018-08-13 18:34:08',1,'2018_08_13_18_34_08_4_Cardnumbers.pdf',1,'2018-08-17 15:26:53',NULL,NULL,NULL,NULL,NULL,NULL,0,NULL),(88,'450054021015','4',1,1,'2018-08-13 18:34:08',1,'2018_08_13_18_34_08_4_Cardnumbers.pdf',1,'2018-08-17 15:26:53',NULL,NULL,NULL,NULL,NULL,NULL,0,NULL),(89,'450054021016','4',1,1,'2018-08-13 18:34:08',1,'2018_08_13_18_34_08_4_Cardnumbers.pdf',1,'2018-08-17 15:26:53',NULL,NULL,NULL,NULL,NULL,NULL,0,NULL),(90,'450054021017','5',1,1,'2018-08-13 18:34:34',1,'2018_08_13_18_34_34_5_Cardnumbers.pdf',1,'2018-08-17 15:26:53',NULL,NULL,NULL,NULL,NULL,NULL,0,NULL),(91,'450054021018','5',1,1,'2018-08-13 18:34:34',1,'2018_08_13_18_34_34_5_Cardnumbers.pdf',2,'2018-08-17 15:28:25',NULL,NULL,NULL,NULL,NULL,NULL,0,NULL),(92,'450054021019','5',1,1,'2018-08-13 18:34:34',1,'2018_08_13_18_34_34_5_Cardnumbers.pdf',2,'2018-08-17 15:28:25',NULL,NULL,NULL,NULL,NULL,NULL,0,NULL),(93,'450054021020','5',1,1,'2018-08-13 18:34:34',1,'2018_08_13_18_34_34_5_Cardnumbers.pdf',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL),(94,'450054021021','5',1,1,'2018-08-13 18:34:34',1,'2018_08_13_18_34_34_5_Cardnumbers.pdf',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL),(95,'450054021022','5',1,1,'2018-08-13 18:34:46',1,'2018_08_13_18_34_46_5_Cardnumbers.pdf',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL),(96,'450054021023','5',1,1,'2018-08-13 18:34:47',1,'2018_08_13_18_34_46_5_Cardnumbers.pdf',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL),(97,'450054021024','5',1,1,'2018-08-13 18:34:47',1,'2018_08_13_18_34_46_5_Cardnumbers.pdf',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL),(98,'450054021025','5',1,1,'2018-08-13 18:34:47',1,'2018_08_13_18_34_46_5_Cardnumbers.pdf',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL),(99,'450054021026','5',1,1,'2018-08-13 18:34:47',1,'2018_08_13_18_34_46_5_Cardnumbers.pdf',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL),(100,'450054021027','5',1,1,'2018-08-13 18:35:42',1,'2018_08_13_18_35_42_5_Cardnumbers.pdf',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL),(101,'450054021028','5',1,1,'2018-08-13 18:35:42',1,'2018_08_13_18_35_42_5_Cardnumbers.pdf',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL),(102,'450054021029','5',1,1,'2018-08-13 18:35:42',1,'2018_08_13_18_35_42_5_Cardnumbers.pdf',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL),(103,'450054021030','5',1,1,'2018-08-13 18:35:42',1,'2018_08_13_18_35_42_5_Cardnumbers.pdf',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL),(104,'450054021031','5',1,1,'2018-08-13 18:35:42',1,'2018_08_13_18_35_42_5_Cardnumbers.pdf',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL),(105,'450054021032','5',1,1,'2018-08-14 10:52:55',1,'2018_08_14_10_52_55_5_Cardnumbers.pdf',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL),(106,'450054021033','5',1,1,'2018-08-14 10:52:55',1,'2018_08_14_10_52_55_5_Cardnumbers.pdf',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL),(107,'450054021034','5',1,1,'2018-08-14 10:52:55',1,'2018_08_14_10_52_55_5_Cardnumbers.pdf',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL),(108,'450054021035','5',1,1,'2018-08-14 10:52:55',1,'2018_08_14_10_52_55_5_Cardnumbers.pdf',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL),(109,'450054021036','5',1,1,'2018-08-14 10:52:55',1,'2018_08_14_10_52_55_5_Cardnumbers.pdf',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL),(110,'450054021037','5',1,1,'2018-08-14 10:53:16',1,'2018_08_14_10_53_16_5_Cardnumbers.pdf',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL),(111,'450054021038','5',1,1,'2018-08-14 10:53:16',1,'2018_08_14_10_53_16_5_Cardnumbers.pdf',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL),(112,'450054021039','5',1,1,'2018-08-14 10:53:16',1,'2018_08_14_10_53_16_5_Cardnumbers.pdf',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL),(113,'450054021040','5',1,1,'2018-08-14 10:53:16',1,'2018_08_14_10_53_16_5_Cardnumbers.pdf',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL),(114,'450054021041','5',1,1,'2018-08-14 10:53:16',1,'2018_08_14_10_53_16_5_Cardnumbers.pdf',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL),(115,'450054021042','5',1,1,'2018-08-14 10:53:43',1,'2018_08_14_10_53_43_5_Cardnumbers.pdf',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL),(116,'450054021043','5',1,1,'2018-08-14 10:53:43',1,'2018_08_14_10_53_43_5_Cardnumbers.pdf',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL),(117,'450054021044','5',1,1,'2018-08-14 10:53:43',1,'2018_08_14_10_53_43_5_Cardnumbers.pdf',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL),(118,'450054021045','5',1,1,'2018-08-14 10:53:43',1,'2018_08_14_10_53_43_5_Cardnumbers.pdf',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL),(119,'450054021046','5',1,1,'2018-08-14 10:53:43',1,'2018_08_14_10_53_43_5_Cardnumbers.pdf',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL),(120,'450054021047','5',1,1,'2018-08-14 10:54:13',1,'2018_08_14_10_54_13_5_Cardnumbers.pdf',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL),(121,'450054021048','5',1,1,'2018-08-14 10:54:13',1,'2018_08_14_10_54_13_5_Cardnumbers.pdf',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL),(122,'450054021049','5',1,1,'2018-08-14 10:54:13',1,'2018_08_14_10_54_13_5_Cardnumbers.pdf',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL),(123,'450054021050','5',1,1,'2018-08-14 10:54:13',1,'2018_08_14_10_54_13_5_Cardnumbers.pdf',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL),(124,'450054021051','5',1,1,'2018-08-14 10:54:13',1,'2018_08_14_10_54_13_5_Cardnumbers.pdf',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL),(125,'450054021052','5',1,1,'2018-08-14 10:55:25',1,'2018_08_14_10_55_25_5_Cardnumbers.pdf',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL),(126,'450054021053','5',1,1,'2018-08-14 10:55:25',1,'2018_08_14_10_55_25_5_Cardnumbers.pdf',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL),(127,'450054021054','5',1,1,'2018-08-14 10:55:25',1,'2018_08_14_10_55_25_5_Cardnumbers.pdf',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL),(128,'450054021055','5',1,1,'2018-08-14 10:55:25',1,'2018_08_14_10_55_25_5_Cardnumbers.pdf',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL),(129,'450054021056','5',1,1,'2018-08-14 10:55:25',1,'2018_08_14_10_55_25_5_Cardnumbers.pdf',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL),(130,'450054021057','5',1,1,'2018-08-14 10:55:51',1,'2018_08_14_10_55_51_5_Cardnumbers.pdf',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL),(131,'450054021058','5',1,1,'2018-08-14 10:55:51',1,'2018_08_14_10_55_51_5_Cardnumbers.pdf',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL),(132,'450054021059','5',1,1,'2018-08-14 10:55:51',1,'2018_08_14_10_55_51_5_Cardnumbers.pdf',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL),(133,'450054021060','5',1,1,'2018-08-14 10:55:51',1,'2018_08_14_10_55_51_5_Cardnumbers.pdf',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL),(134,'450054021061','5',1,1,'2018-08-14 10:55:51',1,'2018_08_14_10_55_51_5_Cardnumbers.pdf',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL);

/*Table structure for table `card_sellers` */

DROP TABLE IF EXISTS `card_sellers`;

CREATE TABLE `card_sellers` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `mobile` varchar(250) DEFAULT NULL,
  `email_id` varchar(250) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `org_password` varchar(250) DEFAULT NULL,
  `address` text,
  `bank_account` varchar(250) DEFAULT NULL,
  `bank_name` varchar(250) DEFAULT NULL,
  `ifsccode` varchar(250) DEFAULT NULL,
  `bank_holder_name` varchar(250) DEFAULT NULL,
  `kyc` varchar(250) DEFAULT NULL,
  `profile_pic` varchar(250) DEFAULT NULL,
  `token` text,
  `status` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `card_sellers` */

insert  into `card_sellers`(`s_id`,`name`,`mobile`,`email_id`,`password`,`org_password`,`address`,`bank_account`,`bank_name`,`ifsccode`,`bank_holder_name`,`kyc`,`profile_pic`,`token`,`status`,`created_at`,`updated_at`,`created_by`) values (1,'vasudevareddy','8500050944','vasu@gmail.com','fcea920f7412b5da7be0cf42b8c93759','1234567','kothapalli village','32473655713','SBI','SBIN0002671','vasudevareddy REDDEm','','0.478604001534510418id_card.jpg','1234',1,'2018-08-17 12:57:16','2018-08-17 18:13:15',1),(2,'reddem','8019345212','reddem@gmail.com','e10adc3949ba59abbe56e057f20f883e','123456','kadapa','32473655713','reddem','SBIN0002671','VAsudevareddyReddem','1534490959.pdf',NULL,NULL,1,'2018-08-17 12:59:19','2018-08-17 12:59:19',1);

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `coupon_codes` */

insert  into `coupon_codes`(`id`,`hospital_id`,`coupon_code`,`type`,`percentage_amount`,`create_at`,`create_by`,`status`,`updated_time`) values (1,59,'vasu','Percentage','10','2018-07-30 14:50:00',1,1,NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=latin1;

/*Data for the table `hospital` */

insert  into `hospital`(`hos_id`,`a_id`,`hos_con_number`,`reschedule_date`,`hos_email_id`,`hos_representative`,`hos_rep_contact`,`mob_country_code`,`hos_rep_mobile`,`hos_rep_email`,`hos_rep_nationali_id`,`hos_rep_add1`,`hos_rep_add2`,`hos_rep_zipcode`,`hos_rep_city`,`hos_rep_state`,`hos_rep_country`,`hos_bas_name`,`hos_bas_contact`,`hos_bas_email`,`hos_bas_nationali_id`,`hos_bas_add1`,`hos_bas_add2`,`hos_bas_zipcode`,`hos_bas_city`,`hos_bas_state`,`hos_bas_country`,`hos_bas_document`,`hos_bas_logo`,`bank_holder_name`,`bank_acc_no`,`bank_name`,`bank_ifsc`,`bank_document`,`kyc_doc1`,`kyc_doc2`,`kyc_doc3`,`kyc_file1`,`kyc_file2`,`kyc_file3`,`hos_status`,`hos_created`,`hos_updated_at`,`hos_curent_login`,`hos_undo`,`out_source_lab`,`barcode`) values (57,197,'8584244976',NULL,'skrnursinghome@gmail.com','S.K.R HOSPITAL','08584244976','+91','8584244976','skrnursinghome@gmail.com','884937171370','D.NO.2-1715/1, S.V.Deluxe Road, Piler-517214, chittor(dt),A.P.','','517214','Chittoor','Andhra Pradesh','INDIA','SKR HOSPITAL','08584244976','skrnursinghome@gmail.com','884937171370','D.NO.2-1715/1, S.V.Deluxe Road, Piler-517214, chittor(dt),A.P.','','517214','CHITTOOR','Andhra Pradesh','INDIA','',NULL,'SKR HOSPITAL','044111100001398','ANDHRA BANK','ANDB0000441','','PANCARD','','','1531733864.docx','','',1,'2018-07-16 14:43:17','2018-07-16 15:07:43',0,0,0,'1531732397197.png'),(58,203,'9550252384','5 days','arya@gmail.com','Arya','04512488575','+91','9550232384','arya@gmail.com','856475265987','7-45','KPHB COLONY','502245','Hyderabad','Telangana','India','SUNRISE HOSPITAL','9550232384','arya@gmail.com','856974235623','7-57','KPHB COLONY','502458','HYDERABAD','Telangana','India','',NULL,'Arya','952241234567','SBI','asde1234568','','ade','bce','abc','1531910887.docx','','',1,'2018-07-18 16:10:57','2018-07-23 10:57:15',0,0,0,'1531910457203.png'),(59,204,'9502710179','4 days','anu@gmail.com','Anu','01234567894','+91','9502710179','anu@gmail.com','12345678912345','nagole','nagole','500035','warangal','Telangana','India','BLUEMOON HOSPITAL','9502710179','anu@gmail.com','12345678912345','nagole','nagole','500035','HYDERABAD','Telangana','India','',NULL,'anu','123456789','SBI','sbi12345678','','anu','','','1531910888.docx','','',1,'2018-07-18 16:11:51','2018-07-23 10:57:55',0,0,0,'1531910511204.png'),(60,205,'8019518339','2 days','bhavya@gmail.com','Bhavya','02147125587','+91','8019563771','bhavya@gmail.com','854213785412','4-25','SR NAGAR','5022474','Guntur','Andhra Pradesh','India','BGS HOSPTAL','8023642369','bhavya@gmail.com','89526652623','4-52','SR NGAR','5022481','HYDERABAD','Andhra Pradesh','India','',NULL,'Bhavya','89652323226','ICICI','sder1225553','','bhavya','fgh','klm','1531911287.docx','','',1,'2018-07-18 16:21:22','2018-07-23 10:56:22',0,0,0,'1531911082205.png'),(61,206,'9502710178','5 days','sow@gmail.com','sow','12356475555','+91','9502710178','sow@gmail.com','12345689745','kphb','kphb','500032','karimnagar','Telangana','India','BLK HOSPITAL','9502710178','sow@gmail.com','12345678912333','kphb','kphb','500032','HYDERABAD','Telangana','India','',NULL,'sow','5678912325555647','sbi','sbi78945612','','sow','','','1531911278.docx','','',1,'2018-07-18 16:21:29','2018-07-23 10:58:36',0,0,0,'1531911089206.png');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `hospital_admin_chating` */

insert  into `hospital_admin_chating`(`id`,`user_id`,`replay_user_id`,`from`,`comment`,`image`,`type`,`create_at`,`updated_by`,`hos_id`) values (1,215,203,203,'hiii','','Replayed','2018-07-26 17:50:11','2018-07-26 17:50:11',58),(2,215,203,203,'hello','','Replayed','2018-07-26 17:50:28','2018-07-26 17:50:28',NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=latin1;

/*Data for the table `investigation_patient_list` */

insert  into `investigation_patient_list`(`id`,`p_id`,`b_id`,`investigation_type`,`countrycode`,`contact_number`,`frequency`,`priority`,`investigation_formdate`,`investigation_todate`,`associate_diagnosis`,`associate_problems`,`create_at`,`create_by`,`date`) values (78,134,231,'lab','','','6 hours','Medium','','','','','2018-07-16 16:37:25',198,'2018-07-16');

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
) ENGINE=InnoDB AUTO_INCREMENT=125 DEFAULT CHARSET=latin1;

/*Data for the table `lab_test_list` */

insert  into `lab_test_list`(`t_id`,`hos_id`,`t_name`,`test_type`,`type`,`modality`,`duration`,`amuont`,`t_short_form`,`t_description`,`t_department`,`create_at`,`status`,`create_by`,`update_by`,`out_source`) values (117,57,'serum bilurubin total ',72,'Lab','','30 ','150','','','','2018-07-16 16:20:06',1,201,NULL,0),(118,58,'ELBOW',57,'Radiology','MRI','22','120','','','','2018-07-20 15:07:35',1,217,NULL,0),(119,58,'FACE',53,'Radiology','CT3D','22','125','','','','2018-07-20 15:08:43',1,217,NULL,0),(120,58,'Iron Studies',69,'Lab','','15','100','','','','2018-07-20 15:09:57',1,217,NULL,0),(121,58,'Vitamin B12',68,'Lab','','30','100','','','','2018-07-20 15:11:50',1,217,NULL,0),(122,0,'Calcium',77,'Lab','','10','120','','','','2018-07-20 17:06:53',1,218,NULL,1),(123,0,'Kidney Function Test',76,'Lab','','15','125','','','','2018-07-20 17:08:02',1,218,NULL,1),(124,0,'NECK',53,'Radiology','ULTRASOUND','15','200','','','','2018-07-20 17:09:06',1,218,NULL,1);

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
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=latin1;

/*Data for the table `lab_test_type` */

insert  into `lab_test_type`(`id`,`type_name`,`type`,`create_at`,`status`,`created_by`,`updated_time`) values (53,'HEAD AND NECK','Radiology','2018-07-16 14:54:20',1,1,NULL),(54,'BREAST','Radiology','2018-07-16 14:54:40',1,1,NULL),(55,'ABDOMEN','Radiology','2018-07-16 14:56:58',1,1,NULL),(56,'PELVIS','Radiology','2018-07-16 14:57:15',1,1,NULL),(57,'UPPER EXTERMITY','Radiology','2018-07-16 14:57:53',1,1,NULL),(58,'LOWER EXTERMITY','Radiology','2018-07-16 14:58:06',1,1,NULL),(59,'FINE NEEDLE ASPIRATION','Radiology','2018-07-16 14:58:42',1,1,NULL),(60,'SPINE','Radiology','2018-07-16 14:59:07',1,1,NULL),(61,'CHEST','Radiology','2018-07-16 14:59:17',1,1,NULL),(62,'COMBINATIONS EXAMINATIONS','Radiology','2018-07-16 14:59:58',1,1,NULL),(63,'CONTRAST','Radiology','2018-07-16 15:00:12',1,1,NULL),(64,'CT ANGIOGRAPHY','Radiology','2018-07-16 15:01:03',1,1,NULL),(65,'SPINE MYELOGRAM','Radiology','2018-07-16 15:02:00',1,1,NULL),(66,'BARIUM EXAMINATIONS','Radiology','2018-07-16 15:02:20',1,1,NULL),(67,'EXTREMITIES VENOGRAM','Radiology','2018-07-16 15:03:23',1,1,NULL),(68,'OTHERS','Radiology','2018-07-16 15:03:47',1,1,NULL),(69,'ANAEMIA','Lab','2018-07-16 15:16:39',1,1,NULL),(70,'HYPERTENSION','Lab','2018-07-16 15:17:01',1,1,NULL),(71,'ALLERGY','Lab','2018-07-16 15:17:20',1,1,NULL),(72,'JAUNDICE','Lab','2018-07-16 15:17:31',1,1,NULL),(73,'FEVER','Lab','2018-07-16 15:18:20',1,1,NULL),(74,'OBESITY','Lab','2018-07-16 15:18:49',1,1,NULL),(75,'THYROID','Lab','2018-07-16 15:19:20',1,1,NULL),(76,'KIDNEY','Lab','2018-07-16 15:20:06',1,1,NULL),(77,'BONE','Lab','2018-07-20 15:49:46',1,1,NULL),(78,'VITAMINS','Lab','2018-07-20 15:50:44',1,1,NULL);

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
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

/*Data for the table `manual_prescription_list` */

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
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=latin1;

/*Data for the table `medicine_list` */

insert  into `medicine_list`(`id`,`hos_id`,`hsn`,`othercode`,`medicine_name`,`medicine_type`,`expiry_date`,`dosage`,`qty`,`amount`,`total_amount`,`sgst`,`cgst`,`other`,`create_at`,`status`,`added_by`,`updated_at`) values (85,57,'','','','','','','','','0','','',NULL,'2018-07-16 16:03:29',1,200,NULL),(86,58,'11','GG','CROCIN','TABLET','2022','150G','25','5','5.2','2','2',NULL,'2018-07-20 15:15:51',1,216,NULL),(87,58,'03','22','PRACTEMOL','TABLET','2022','250','50','5','5.2','2','2',NULL,'2018-07-20 15:18:57',1,216,NULL),(88,58,'09','12','Robitussin','syrup','2024','00','10','25','26','2','2',NULL,'2018-07-20 15:31:36',1,216,NULL),(89,58,'10','13',' Delsym','syrup','2022','','87','30','31.2','2','2',NULL,'2018-07-20 15:31:36',1,216,'2018-07-20 16:47:10');

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
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=latin1;

/*Data for the table `medicine_name` */

insert  into `medicine_name`(`id`,`hos_id`,`medicine_name`,`added_by`,`create_at`,`status`) values (60,57,'',200,'2018-07-16 16:03:29',1),(61,58,'CROCIN',216,'2018-07-20 15:15:51',1),(62,58,'PRACTEMOL',216,'2018-07-20 15:18:57',1),(63,58,'Robitussin',216,'2018-07-20 15:31:36',1),(64,58,' Delsym',216,'2018-07-20 15:31:36',1);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `out_source_lab_test_lists` */

/*Table structure for table `patient_billing` */

DROP TABLE IF EXISTS `patient_billing`;

CREATE TABLE `patient_billing` (
  `b_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` int(11) DEFAULT NULL,
  `patient_type` int(11) DEFAULT '1' COMMENT '1=ip;0=op',
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
) ENGINE=InnoDB AUTO_INCREMENT=242 DEFAULT CHARSET=latin1;

/*Data for the table `patient_billing` */

insert  into `patient_billing`(`b_id`,`p_id`,`patient_type`,`visit_no`,`visit_desc`,`service_type`,`service`,`visit_type`,`qty`,`amount`,`bill`,`patient_payer_deposit_amount`,`payment_mode`,`bill_amount`,`received_form`,`treatment_id`,`doct_id`,`specialist_id`,`completed`,`create_at`,`updated_at`,`doctor_status`,`assign_doctor_to`,`assign_doctor_by`,`completed_type`,`type`,`create_by`,`medicine_payment_mode`,`payment_updated_by`,`payment_createed_by`,`report_completed`,`sheet_prescription`,`sheet_prescription_file`,`coupon_code`,`coupon_code_amount`,`with_out_coupon_code`) values (231,134,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'500','Cash','500','FATHER','119','198',123,1,'2018-07-16 16:23:49','2018-07-16 16:30:19',1,0,0,2,'new',198,NULL,0,NULL,0,0,NULL,NULL,NULL,NULL),(232,134,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'500','Cash','500','FATHER','119','198',123,1,'2018-07-16 16:32:10','2018-07-16 16:32:45',1,0,0,1,'Repeated',198,NULL,0,NULL,0,0,NULL,NULL,NULL,NULL),(233,135,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'500','Cash','500','raghu','121','208',128,1,'2018-07-26 12:21:30','2018-07-26 12:22:24',0,NULL,NULL,0,'new',NULL,NULL,0,NULL,0,0,NULL,NULL,NULL,NULL),(234,136,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'500','Cash','500','RAGHU','129','207',132,1,'2018-07-26 17:46:29','2018-07-26 17:47:16',1,0,0,1,'new',207,NULL,0,NULL,0,0,NULL,NULL,NULL,NULL),(236,138,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'2018-07-30 14:33:56',NULL,0,NULL,NULL,0,'new',NULL,NULL,0,NULL,0,0,NULL,NULL,NULL,NULL),(237,139,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'2018-07-30 15:53:13',NULL,0,NULL,NULL,0,'new',NULL,NULL,0,NULL,0,0,NULL,NULL,NULL,NULL),(238,138,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'2018-07-30 15:53:33',NULL,0,NULL,NULL,0,'Reschedule',NULL,NULL,0,NULL,0,0,NULL,NULL,NULL,NULL),(239,138,1,'23','323','3232',NULL,'323',NULL,NULL,NULL,'500','Cash','500','vasu','124','211',125,1,'2018-07-30 15:56:34','2018-07-30 15:57:01',0,NULL,NULL,0,'new',NULL,NULL,0,NULL,0,0,NULL,NULL,NULL,NULL),(240,140,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'500','Online','500','vas','125','212',126,1,'2018-07-31 14:29:06','2018-07-31 14:29:40',0,NULL,NULL,0,'new',NULL,NULL,0,NULL,0,0,NULL,NULL,NULL,NULL),(241,141,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'500','Online','500','vas','124','211',125,1,'2018-08-13 10:16:33','2018-08-13 10:17:09',0,NULL,NULL,0,'new',NULL,NULL,0,NULL,0,0,NULL,NULL,NULL,NULL);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `patient_lab_reports` */

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
) ENGINE=InnoDB AUTO_INCREMENT=203 DEFAULT CHARSET=latin1;

/*Data for the table `patient_lab_test_list` */

insert  into `patient_lab_test_list`(`id`,`p_id`,`b_id`,`test_id`,`create_at`,`date`,`create_by`,`status`,`report_completed`,`out_source`) values (199,134,231,117,'2018-07-16 16:35:24','2018-07-16',198,1,'0',0),(200,134,231,117,'2018-07-16 16:36:53','2018-07-16',198,1,'0',0),(201,134,231,118,'2018-07-16 16:37:15','2018-07-16',198,1,'0',1),(202,134,232,117,'2018-07-16 17:06:04','2018-07-16',198,1,'0',0);

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `patient_medicine_list` */

insert  into `patient_medicine_list`(`m_id`,`p_id`,`b_id`,`type_of_medicine`,`medicine_name`,`substitute_name`,`condition`,`dosage`,`route`,`frequency`,`directions`,`formdate`,`todate`,`qty`,`org_amount`,`units`,`comments`,`create_at`,`date`,`create_by`,`edit_reason`,`edited`,`edited_by`,`amount`) values (1,136,234,'',' Delsym','','','','','4 hours','after food','','','1','31.2','','','2018-07-26 18:03:05','2018-07-26',207,NULL,0,NULL,31);

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
) ENGINE=InnoDB AUTO_INCREMENT=133 DEFAULT CHARSET=latin1;

/*Data for the table `patient_vitals_list` */

insert  into `patient_vitals_list`(`id`,`p_id`,`b_id`,`assessment_type`,`vitaltype`,`bp`,`pulse`,`fbs_rbs`,`temp`,`weight`,`create_at`,`date`) values (126,134,231,NULL,NULL,'110/70','70','70','95','70','2018-07-16 16:29:55','2018-07-16'),(127,134,232,NULL,NULL,'110/70','70','70','95','70','2018-07-16 16:32:25','2018-07-16'),(128,135,233,NULL,NULL,'110/75','70','122','35','33','2018-07-26 12:22:07','2018-07-26'),(129,136,234,NULL,NULL,'110 /88','444','44','44','44','2018-07-26 17:47:01','2018-07-26'),(130,138,239,NULL,NULL,'1200','52','52','525','52','2018-07-30 15:56:20','2018-07-30'),(131,140,240,NULL,NULL,'250','120','120','120','67','2018-07-31 14:29:27','2018-07-31'),(132,141,241,NULL,NULL,'120','61','120','120','62','2018-08-13 10:17:00','2018-08-13');

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
) ENGINE=InnoDB AUTO_INCREMENT=142 DEFAULT CHARSET=latin1;

/*Data for the table `patients_list_1` */

insert  into `patients_list_1`(`pid`,`hos_id`,`card_number`,`registrationtype`,`patient_category`,`problem`,`name`,`mobile`,`email`,`dob`,`age`,`bloodgroup`,`martial_status`,`nationali_id`,`perment_address`,`p_c_name`,`p_s_name`,`p_zipcode`,`p_country_name`,`temp_address`,`t_c_name`,`t_s_name`,`t_zipcode`,`t_country_name`,`religion`,`caste`,`mothername`,`language`,`occupation`,`education`,`birth_place`,`home_phone`,`citizen_proof`,`patient_identifier`,`relation`,`first_name`,`next_address1`,`next_address2`,`next_pincode`,`next_city`,`next_state`,`next_country`,`next_email`,`next_mobile`,`next_occupation`,`referred`,`internal_external`,`search_doctor`,`relationship`,`g_first_name`,`g_middel_name`,`g_last_name`,`gender`,`nationality`,`g_language`,`living`,`g_address1`,`g_address2`,`g_pincode`,`g_city`,`g_state`,`g_country`,`payer_name`,`payer_mobile`,`payer_address`,`dependency`,`arrangement`,`incomegroup`,`description`,`confidential`,`student`,`barcode`,`create_at`,`create_by`,`updated_at`) values (134,57,'','New','Pay Patient','','srk','1234567891','no@gmail.com','0000-00-00','25','O+','Single','','piler','chitoor','Andhra Pradesh','517214','india','','','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,'Male',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1531738429134.png','2018-07-16 16:32:10',199,NULL),(135,59,'','New','Pay Patient','','raghu','98989787878','raghu@gmail.com','2018-07-02','1','A-','Single','565878787767','hyd','hyd','Telangana','500072','india','','','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,'Male',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1532587890135.png','2018-07-26 12:21:30',220,NULL),(136,58,'','Emergency','Staff','','ram','98878787878','raghu@gmail.com','2018-07-26','22','A-','Single','','hyd','hyd','Telangana','500072','india','','','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,'Male',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1532607389136.png','2018-07-26 17:46:29',215,NULL),(138,61,'','Emergency','Pay Patient','','testing purpose','85000509544','trsting@gmail.com','2018-07-30','26','O-','Single','1345678987878','tetsivmnm','hyd','Andhra Pradesh','516172','india','test','test','Andhra Pradesh','516172','india','Religion','Caste',' Guardian name','Telugu','Occupation','Education',NULL,'8500050944','Yes','','Relation','Name of Kin','Address1','Address2','516172','kadapa','Andhra Pradesh','inida','vasu@gmail.com','8019345212','Occupation ','test',NULL,NULL,'Relationship','Name','','','Male','Nationality','Telugu','','test','test2','516172','kadp','Andhra Pradesh','india','name','8500050944','testing','Living dependency','Living arrangement','Income group','Description','Confidential','Student','1532941436138.png','2018-07-30 15:54:08',223,'2018-07-30 15:56:08'),(139,61,'','New','VIP','','librarian','8500050944','vasu@gmail.com','2018-07-31','25','O-','Married','1345678987878','test','hyd','Andhra Pradesh','516172','125463','','','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'test',NULL,NULL,NULL,NULL,NULL,NULL,'Male',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1532946193139.png','2018-07-30 15:53:13',223,NULL),(140,60,'','New','VIP','','ramu','8500050944','vasu@gmail.com','2018-08-03','24','O+','Single','','test','test','Himachal Pradesh','516172','india','','','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,'Male',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1533027546140.png','2018-07-31 14:29:06',222,NULL),(141,61,'','Emergency','Pay Patient','','cvxcz','8500050944','reddy.55610@gmail.com','2018-08-03','24','B-','Single','12345678952','hyderabad','hyderbad','Andhra Pradesh','500072','india','','','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,'Male',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1534135593141.png','2018-08-13 10:16:33',223,NULL);

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
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `prescription_manual` */

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
) ENGINE=InnoDB AUTO_INCREMENT=167 DEFAULT CHARSET=latin1;

/*Data for the table `resource_list` */

insert  into `resource_list`(`r_id`,`a_id`,`role_id`,`hos_id`,`resource_name`,`resource_mobile`,`resource_add1`,`resource_add2`,`resource_city`,`resource_state`,`resource_zipcode`,`resource_other_details`,`resource_contatnumber`,`resource_email`,`resource_photo`,`resource_document`,`resource_bank_holdername`,`resource_bank_accno`,`resource_ifsc_code`,`resource_other_document`,`r_status`,`r_created_at`,`r_updated_at`,`r_create_by`,`current_status`,`out_source_lab`) values (143,198,6,57,'S K MAHABOOB BASHA','9440012629','PILER','','CHITOOR','ANDHRA PRADESH','517214',NULL,'9440012629','skbasha@gmail.com','','','SKR HOSPITAL','044111100001398','ANDB0000441','',1,'2018-07-16 15:17:44',NULL,197,NULL,0),(144,199,3,57,'JYOTHI','08584244976','SKR HOSPITAL ,PILER','','CHITOOR','ANDHRA PRADESH','517214',NULL,'08584244976','jyothirecp@gmail.com','','','SKR HOSPITAL','044111100001398','ANDB0000441','',1,'2018-07-16 15:24:52',NULL,197,NULL,0),(145,200,4,57,'PUSHPA','08584244976','PILER','','CHITTOR','ANDHRAPRADESH','517214',NULL,'08584244976','pushpa@gmail.com','','','skr hospital','044111100001398','ANDB0000441','',1,'2018-07-16 15:28:20',NULL,197,NULL,0),(146,201,5,57,'DANALAKSHMI','08584244976','piler','','chitoor','andhrapradesh','517214',NULL,'08584244976','danalakshmi@gmail.com','','','skr hospital','044111100001398','ANDB0000441','',1,'2018-07-16 15:31:20',NULL,197,NULL,0),(147,202,5,0,'LAKSHMI CLINICAL LAB','9985762646','PILERU','','CHITOOR','ANDHRAPRADESH','517214','','9985762646','lakshmiclinic@gmail.com','',NULL,NULL,NULL,NULL,NULL,1,'2018-07-16 15:35:51',NULL,1,NULL,1),(148,207,6,58,'Priya','8654123356','5-47','Shanthi Nagar','Hyderabad','Telangana','5022585',NULL,'8522555662','priya@gmail.com','','','Priya','8452369974','acde4523699','',1,'2018-07-18 16:28:45',NULL,203,NULL,0),(149,208,6,59,'prema','9502710179','uppal','uppal','Hyderabad','Telangana','500035',NULL,'95275555555','prema@gmail.com','','','prema','4668523158445','sbi12345678','',1,'2018-07-18 16:28:45',NULL,204,NULL,0),(150,209,6,58,'kavya','9852365456','8-24','Ashok Nagar','Hyderabad','Telangana','5023254',NULL,'9556321456','kavya@gmail.com','','','Kavya','84662256663','ased4523366','',1,'2018-07-18 16:57:07',NULL,203,NULL,0),(151,210,6,59,'keerthi','9502710179','uppal','uppal','hyderabad','Telangana','500035',NULL,'1234567895','keerthi@gmail.com','','','keerthi','123466899','sbi45678912','',1,'2018-07-18 16:57:24',NULL,204,NULL,0),(152,211,6,61,'prem','9502710179','uppal','uppal','Hyderabad','telangana','500035',NULL,'5698456123','prem@gmail.com','','','prem','1234567894','sbi78945612','',1,'2018-07-18 17:00:39',NULL,206,NULL,0),(153,212,6,60,'Tarun','85610365655','4-23','Balnagar','Hyderabad','Telangana','502369',NULL,'9563258896','tarun@gmail.com','','','Tarun','785236669','sedf2121254','',1,'2018-07-18 17:00:41',NULL,205,NULL,0),(154,213,6,61,'Arun','9502710179','nagole','nagole','hyderabad','telangana','500035',NULL,'4567891234','arun@gmail.com','','','arun','123564789122','sbi65789122','',1,'2018-07-18 17:02:56',NULL,206,NULL,0),(155,214,6,60,'Sid','9856324452','5-75','Prashanth Nagar','Hyderabad','Telangana','5202445',NULL,'8965663662','sid@gmail.com','','','Sid','89522555555','cder1234568','',1,'2018-07-18 17:03:01',NULL,205,NULL,0),(156,215,3,58,'sai','9898989898','hyd','','hyderabad','ts','500072',NULL,'9000908978','reddy@gmail.com','','','','','','',1,'2018-07-25 11:41:31',NULL,203,NULL,0),(157,216,4,58,'venu','8328579782','hyd','','KADAPA','ts','500072',NULL,'9581758358','venu@gmail.com','','','','','','',1,'2018-07-20 12:42:17',NULL,203,NULL,0),(158,217,5,58,'RAGHU','9581758358','hyd','','hyd','telangana','500072',NULL,'88787878787','raghu@gmail.com','','','','','','',1,'2018-07-20 12:43:58',NULL,203,NULL,0),(159,218,5,0,'ramu','9291622365','tpt','tpt','tiruapthi','andhra pradesh','500072','','8328579782','ramu@gmail.com','',NULL,NULL,NULL,NULL,NULL,1,'2018-07-20 17:05:37',NULL,1,NULL,1),(160,219,9,58,'raghu','9898989787','hyd','','hyd','ts','500072',NULL,'87878778788','ward@gmail.com','','','','','','',1,'2018-07-23 13:20:04',NULL,203,NULL,0),(161,220,3,59,'reddy','8988888787','hyd','','hyd','ts','565656',NULL,'87878787787','reddy1@gmail.com','','','','','','',1,'2018-07-23 14:18:19',NULL,204,NULL,0),(162,221,3,58,'recp','8500050944','test','test','hyd','ts','516172',NULL,'8019452210','recp9@gmail.com','','','','','','',1,'2018-07-23 17:10:12',NULL,203,NULL,0),(163,222,3,60,'raghu','7676767676','hyd','','hyd','ts','500072',NULL,'98989877787','recp1@gmail.com','','','','','','',1,'2018-07-25 11:45:46',NULL,205,NULL,0),(164,223,3,61,'sai','9898767676','hyd','','hyd','ts','500072',NULL,'9887878766','recp2@gmail.com','','','','','','',1,'2018-07-25 11:50:20',NULL,206,NULL,0),(165,224,9,58,'ward','1234567890','test','test','dfds','dfsd','516172',NULL,'8019345212','ward1@gmail.com','','','','','','',1,'2018-07-27 17:50:49',NULL,203,NULL,0),(166,225,10,58,'nurse','8500050944','test','testing','kadap','ts','500072',NULL,'8500050944','nurse@gmail.com','','','','','','',1,'2018-08-14 10:28:19',NULL,203,NULL,0);

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `r_id` int(11) NOT NULL AUTO_INCREMENT,
  `r_name` varchar(250) DEFAULT NULL,
  `r_status` int(11) DEFAULT '1',
  PRIMARY KEY (`r_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `roles` */

insert  into `roles`(`r_id`,`r_name`,`r_status`) values (1,'Admin',1),(2,'Hospital Admin',1),(3,'Receptionist',1),(4,'Pharmacy',1),(5,'lab coordinator',1),(6,'Doctor',1),(7,'Patient',1),(8,'Software team',1),(9,'Ward management',1),(10,'Nurse',1);

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
) ENGINE=InnoDB AUTO_INCREMENT=137 DEFAULT CHARSET=latin1;

/*Data for the table `specialist` */

insert  into `specialist`(`s_id`,`hos_id`,`d_id`,`specialist_name`,`t_status`,`t_create_at`,`t_updated_at`,`t_create_by`) values (123,57,'119','dental',1,'2018-07-16 16:28:28',NULL,197),(124,61,'126','opthalmologist',1,'2018-07-18 17:05:17',NULL,206),(125,61,'124','oncologist',1,'2018-07-18 17:05:38',NULL,206),(126,60,'125','Paediatrician',1,'2018-07-18 17:05:52',NULL,205),(127,60,'127','Dermatologist',1,'2018-07-18 17:06:08',NULL,205),(128,59,'121','ENT specialist',1,'2018-07-18 17:08:36',NULL,204),(129,58,'120','Cardiologist',1,'2018-07-18 17:08:39',NULL,203),(130,59,'123','Nephrologist',1,'2018-07-18 17:09:09',NULL,204),(131,58,'122','Neurologist',1,'2018-07-18 17:09:11',NULL,203),(132,58,'129','URO SURGERY',1,'2018-07-20 14:05:51',NULL,203),(133,58,'130','DENTAL',1,'2018-07-20 14:29:00',NULL,203),(134,59,'131','Uro surgeon',1,'2018-07-20 14:31:45',NULL,204),(135,60,'132','Uro Surgeon',1,'2018-07-20 14:32:03',NULL,205),(136,61,'133','Uro Surgeon',1,'2018-07-20 14:35:30',NULL,206);

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
) ENGINE=InnoDB AUTO_INCREMENT=134 DEFAULT CHARSET=latin1;

/*Data for the table `treament` */

insert  into `treament`(`t_id`,`hos_id`,`t_name`,`t_status`,`t_create_at`,`t_updated_at`,`t_create_by`) values (119,57,'dentist',1,'2018-07-16 16:28:13',NULL,197),(120,58,'Cardiology',2,'2018-07-18 16:53:46','2018-07-20 14:03:35',203),(121,59,'ENT',1,'2018-07-18 16:54:00',NULL,204),(122,58,'Neurology',1,'2018-07-18 16:54:14',NULL,203),(123,59,'Nephrology',1,'2018-07-18 16:54:32',NULL,204),(124,61,'oncology',1,'2018-07-18 17:03:42',NULL,206),(125,60,'Paediatrics',1,'2018-07-18 17:03:49',NULL,205),(126,61,'opthalmology',1,'2018-07-18 17:03:58',NULL,206),(127,60,'Dermatology',1,'2018-07-18 17:04:17',NULL,205),(128,58,'CARDIOLGY',1,'2018-07-20 12:54:04',NULL,203),(129,58,'UROLOGY',1,'2018-07-20 14:04:38',NULL,203),(130,58,'DENTAL',1,'2018-07-20 14:27:20',NULL,203),(131,59,'Urology',1,'2018-07-20 14:31:23',NULL,204),(132,60,'Urology',1,'2018-07-20 14:31:42',NULL,205),(133,61,'Urology',1,'2018-07-20 14:35:07',NULL,206);

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
) ENGINE=InnoDB AUTO_INCREMENT=138 DEFAULT CHARSET=latin1;

/*Data for the table `treatmentwise_doctors` */

insert  into `treatmentwise_doctors`(`t_d_id`,`hos_id`,`s_id`,`t_d_doc_id`,`t_d_name`,`t_d_status`,`t_d_create_at`,`t_d_updated_at`,`t_d_create_by`) values (127,57,123,198,'119',1,'2018-07-16 16:28:44','2018-07-16 16:28:44',197),(128,60,126,212,'125',1,'2018-07-18 17:06:34','2018-07-18 17:06:34',205),(129,60,127,214,'127',1,'2018-07-18 17:06:50','2018-07-18 17:06:50',205),(130,61,125,211,'124',1,'2018-07-18 17:06:50','2018-07-18 17:06:50',206),(131,61,124,213,'126',1,'2018-07-18 17:07:14','2018-07-18 17:07:14',206),(132,59,128,208,'121',1,'2018-07-18 17:09:30','2018-07-18 17:09:30',204),(133,58,129,207,'120',1,'2018-07-18 17:09:31','2018-07-18 17:09:31',203),(134,59,130,210,'123',1,'2018-07-18 17:09:39','2018-07-18 17:09:39',204),(135,58,131,209,'122',1,'2018-07-18 17:09:41','2018-07-18 17:09:41',203),(136,58,132,207,'129',1,'2018-07-20 14:09:51','2018-07-20 14:09:51',203),(137,59,134,210,'131',1,'2018-07-23 16:38:53','2018-07-23 16:38:53',204);

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

/*Table structure for table `ward_floors` */

DROP TABLE IF EXISTS `ward_floors`;

CREATE TABLE `ward_floors` (
  `w_f_id` int(11) NOT NULL AUTO_INCREMENT,
  `hos_id` int(11) DEFAULT NULL,
  `ward_floor` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `create_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`w_f_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `ward_floors` */

insert  into `ward_floors`(`w_f_id`,`hos_id`,`ward_floor`,`status`,`create_at`,`created_by`) values (1,58,'1',1,'2018-08-08 11:49:54',203);

/*Table structure for table `ward_name` */

DROP TABLE IF EXISTS `ward_name`;

CREATE TABLE `ward_name` (
  `w_id` int(11) NOT NULL AUTO_INCREMENT,
  `hos_id` int(11) DEFAULT NULL,
  `ward_name` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `create_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`w_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `ward_name` */

insert  into `ward_name`(`w_id`,`hos_id`,`ward_name`,`status`,`create_at`,`created_by`) values (1,58,'xfgsdfg',1,'2018-08-08 11:44:31',203);

/*Table structure for table `ward_room_beds` */

DROP TABLE IF EXISTS `ward_room_beds`;

CREATE TABLE `ward_room_beds` (
  `r_b_id` int(11) NOT NULL AUTO_INCREMENT,
  `hos_id` int(11) DEFAULT NULL,
  `w_r_n_id` int(11) DEFAULT NULL,
  `bed` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `create_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`r_b_id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

/*Data for the table `ward_room_beds` */

insert  into `ward_room_beds`(`r_b_id`,`hos_id`,`w_r_n_id`,`bed`,`status`,`create_at`,`created_by`,`updated_at`) values (28,58,3,'1',2,'2018-08-08 12:14:38',203,'2018-08-08 12:14:56'),(29,58,3,'2',2,'2018-08-08 12:14:38',203,'2018-08-08 12:14:56'),(30,58,3,'1',1,'2018-08-08 12:14:56',203,NULL),(31,58,3,'2',1,'2018-08-08 12:14:56',203,NULL),(32,58,3,'3',1,'2018-08-08 12:14:56',203,NULL);

/*Table structure for table `ward_room_number` */

DROP TABLE IF EXISTS `ward_room_number`;

CREATE TABLE `ward_room_number` (
  `w_r_n_id` int(11) NOT NULL AUTO_INCREMENT,
  `hos_id` int(11) DEFAULT NULL,
  `f_id` int(11) DEFAULT NULL,
  `room_num` varchar(250) DEFAULT NULL,
  `bed_count` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `create_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`w_r_n_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `ward_room_number` */

insert  into `ward_room_number`(`w_r_n_id`,`hos_id`,`f_id`,`room_num`,`bed_count`,`status`,`create_at`,`created_by`) values (3,58,1,'1','3',1,'2018-08-08 12:14:38',203);

/*Table structure for table `ward_room_type` */

DROP TABLE IF EXISTS `ward_room_type`;

CREATE TABLE `ward_room_type` (
  `w_r_t_id` int(11) NOT NULL AUTO_INCREMENT,
  `hos_id` int(11) DEFAULT NULL,
  `room_type` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `create_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`w_r_t_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `ward_room_type` */

insert  into `ward_room_type`(`w_r_t_id`,`hos_id`,`room_type`,`status`,`create_at`,`created_by`) values (1,58,'des',1,'2018-08-08 11:50:03',203);

/*Table structure for table `ward_type` */

DROP TABLE IF EXISTS `ward_type`;

CREATE TABLE `ward_type` (
  `ward_id` int(11) NOT NULL AUTO_INCREMENT,
  `hos_id` int(11) DEFAULT NULL,
  `ward_type` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `create_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`ward_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `ward_type` */

insert  into `ward_type`(`ward_id`,`hos_id`,`ward_type`,`status`,`create_at`,`created_by`) values (1,58,'cvcbxcvb',1,'2018-08-08 11:48:22',203),(2,58,'gffdgdsf',1,'2018-08-08 11:49:41',203);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
