/*
SQLyog Trial v13.1.8 (64 bit)
MySQL - 10.4.21-MariaDB : Database - lc
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `agent` */

DROP TABLE IF EXISTS `agent`;

CREATE TABLE `agent` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `agent_name` varchar(255) NOT NULL,
  `agent_branch_address` text NOT NULL,
  `agent_country` varchar(255) NOT NULL,
  `agent_state` varchar(255) NOT NULL,
  `agent_city` varchar(255) NOT NULL,
  `agent_contact_person_name` varchar(255) NOT NULL,
  `agent_contact_person_phone` varchar(255) NOT NULL,
  `agent_business_start_date` datetime NOT NULL,
  `agent_business_end_date` datetime NOT NULL,
  `agent_score` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_by` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `agent` */

/*Table structure for table `bank` */

DROP TABLE IF EXISTS `bank`;

CREATE TABLE `bank` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `bank_name` varchar(255) NOT NULL,
  `bank_branch_address` text NOT NULL,
  `bank_country` varchar(255) NOT NULL,
  `limit_structure` varchar(255) NOT NULL,
  `bank_state` varchar(255) NOT NULL,
  `pricing_with_bank` varchar(255) NOT NULL,
  `bank_city` varchar(255) NOT NULL,
  `bank_contact_person_name` varchar(255) NOT NULL,
  `available_limit` varchar(255) NOT NULL,
  `bank_contact_person_phone` varchar(255) NOT NULL,
  `limit_used` varchar(255) NOT NULL,
  `bank_business_start_date` datetime NOT NULL,
  `bank_business_end_date` datetime NOT NULL,
  `service_level` varchar(255) NOT NULL,
  `bank_score` varchar(255) NOT NULL,
  `leniency` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_by` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `bank` */

insert  into `bank`(`id`,`bank_name`,`bank_branch_address`,`bank_country`,`limit_structure`,`bank_state`,`pricing_with_bank`,`bank_city`,`bank_contact_person_name`,`available_limit`,`bank_contact_person_phone`,`limit_used`,`bank_business_start_date`,`bank_business_end_date`,`service_level`,`bank_score`,`leniency`,`created_by`,`created_at`,`updated_by`,`updated_at`) values 
(1,'MCB Bank','Gulberg Lahroe','Pakistan','100M','Punjab','3000000','Lahore','Muhammad Asif','3000000','03001234567','0','2021-11-19 00:00:00','2021-11-19 00:00:00','New','10','5','1','2021-11-19 00:00:00','','0000-00-00 00:00:00');

/*Table structure for table `ci_activity_log` */

DROP TABLE IF EXISTS `ci_activity_log`;

CREATE TABLE `ci_activity_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `activity_id` tinyint(4) NOT NULL,
  `user_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

/*Data for the table `ci_activity_log` */

insert  into `ci_activity_log`(`id`,`activity_id`,`user_id`,`admin_id`,`created_at`) values 
(1,10,0,1,'2021-09-27 13:08:31'),
(2,11,0,1,'2021-09-27 15:16:46'),
(3,11,0,1,'2021-09-27 15:21:44'),
(4,10,0,1,'2021-09-27 15:24:56'),
(5,12,0,1,'2021-09-27 15:25:04'),
(6,11,0,1,'2021-09-27 15:52:09'),
(7,10,0,1,'2021-09-27 17:16:04'),
(8,10,0,1,'2021-10-23 02:45:29'),
(9,10,0,1,'2021-10-23 02:46:20'),
(10,10,0,1,'2021-10-23 22:36:26'),
(11,11,0,1,'2021-10-23 23:40:29'),
(12,10,0,1,'2021-10-24 15:00:38'),
(13,10,0,1,'2021-10-24 15:04:34'),
(14,10,0,1,'2021-10-31 00:11:54'),
(15,10,0,1,'2021-10-31 00:31:24'),
(16,10,0,1,'2021-10-31 00:31:57'),
(17,10,0,1,'2021-10-31 00:33:11'),
(18,10,0,1,'2021-10-31 01:27:09'),
(19,10,0,1,'2021-10-31 01:40:56'),
(20,10,0,1,'2021-10-31 01:42:08'),
(21,10,0,1,'2021-10-31 01:53:18'),
(22,10,0,1,'2021-10-31 02:08:34'),
(23,10,0,1,'2021-10-31 02:08:57'),
(24,10,0,1,'2021-10-31 02:09:52'),
(25,10,0,1,'2021-10-31 02:10:34'),
(26,10,0,1,'2021-10-31 02:10:50'),
(27,10,0,1,'2021-10-31 02:11:00'),
(28,10,0,1,'2021-10-31 02:11:17'),
(29,10,0,1,'2021-10-31 02:15:27'),
(30,10,0,1,'2021-10-31 02:26:17'),
(31,10,0,1,'2021-10-31 02:41:54'),
(32,10,0,1,'2021-10-31 03:03:54'),
(33,10,0,1,'2021-10-31 03:06:37'),
(34,10,0,1,'2021-10-31 03:07:21'),
(35,10,0,1,'2021-10-31 03:07:54'),
(36,10,0,1,'2021-10-31 03:08:14'),
(37,10,0,1,'2021-11-06 16:34:39'),
(38,10,0,1,'2021-11-11 12:18:39'),
(39,10,0,1,'2021-11-11 12:20:13'),
(40,10,0,1,'2021-11-11 12:20:42'),
(41,10,0,1,'2021-11-17 22:13:02'),
(42,10,0,1,'2021-11-17 22:21:08'),
(43,10,0,1,'2021-11-19 01:04:59'),
(44,10,0,1,'2021-11-19 01:45:13');

/*Table structure for table `ci_activity_status` */

DROP TABLE IF EXISTS `ci_activity_status`;

CREATE TABLE `ci_activity_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `ci_activity_status` */

insert  into `ci_activity_status`(`id`,`description`) values 
(1,'User Created'),
(2,'User Edited'),
(3,'User Deleted'),
(4,'User Created'),
(5,'User Edited'),
(6,'User Deleted'),
(7,'Invoice Created'),
(8,'Invoice Edited'),
(9,'Invoice Deleted'),
(10,'Supplier Added'),
(11,'Supplier Updated'),
(12,'Supplier Deleted');

/*Table structure for table `ci_admin` */

DROP TABLE IF EXISTS `ci_admin`;

CREATE TABLE `ci_admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_role_id` int(11) NOT NULL,
  `username` varchar(100) CHARACTER SET utf8 NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `image` varchar(300) NOT NULL,
  `password` varchar(255) NOT NULL,
  `last_login` datetime NOT NULL,
  `is_verify` tinyint(4) NOT NULL DEFAULT 1,
  `is_admin` tinyint(4) NOT NULL DEFAULT 1,
  `is_active` tinyint(4) NOT NULL DEFAULT 0,
  `is_supper` tinyint(4) NOT NULL DEFAULT 0,
  `token` varchar(255) NOT NULL,
  `password_reset_code` varchar(255) NOT NULL,
  `last_ip` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `parentId` int(11) DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

/*Data for the table `ci_admin` */

insert  into `ci_admin`(`admin_id`,`admin_role_id`,`username`,`firstname`,`lastname`,`email`,`mobile_no`,`image`,`password`,`last_login`,`is_verify`,`is_admin`,`is_active`,`is_supper`,`token`,`password_reset_code`,`last_ip`,`created_at`,`updated_at`,`created_by`,`updated_by`,`parentId`) values 
(1,1,'husnain.rafaqat','Husnain','Rafaqat','husnain.rafaqat@gmail.com','12345','','$2y$10$v2P7L8GH1Zocj8ru1aT.d.eSdOZXi8mMxPix.94dCfuXgiRHlavUu','0000-00-00 00:00:00',1,1,1,1,'','8e6b42f1644ecb1327dc03ab345e618b','','2019-01-16 06:01:58','2021-07-14 00:00:00',NULL,NULL,NULL),
(41,2,'nasir.rao','Nasir','Rao','rao.nasir@live.com','12345','','$2y$10$v2P7L8GH1Zocj8ru1aT.d.eSdOZXi8mMxPix.94dCfuXgiRHlavUu','0000-00-00 00:00:00',1,1,1,0,'','','','2021-09-24 00:00:00','2021-09-24 00:00:00',1,NULL,0),
(42,2,'asif.zahoor','Asif','Zahoor','asif.zahoor@gmail.com','12345','','$2y$10$CFVMSoi1r3bxZLaGui/Q9O1XCJlBkafhrMAPWiBM7RCEg1q08M.S6','0000-00-00 00:00:00',1,1,1,0,'','','','2021-09-24 00:00:00','2021-09-24 00:00:00',1,NULL,0);

/*Table structure for table `ci_admin_roles` */

DROP TABLE IF EXISTS `ci_admin_roles`;

CREATE TABLE `ci_admin_roles` (
  `admin_role_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_role_title` varchar(30) CHARACTER SET utf8 NOT NULL,
  `admin_role_status` int(11) NOT NULL,
  `admin_role_created_by` int(1) NOT NULL,
  `admin_role_created_on` datetime NOT NULL,
  `admin_role_modified_by` int(11) NOT NULL,
  `admin_role_modified_on` datetime NOT NULL,
  PRIMARY KEY (`admin_role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `ci_admin_roles` */

insert  into `ci_admin_roles`(`admin_role_id`,`admin_role_title`,`admin_role_status`,`admin_role_created_by`,`admin_role_created_on`,`admin_role_modified_by`,`admin_role_modified_on`) values 
(1,'Super Admin',1,0,'2018-03-15 12:48:04',0,'2018-03-17 12:53:16'),
(2,'Admin',1,0,'2018-03-15 12:53:19',0,'2019-01-26 08:27:34');

/*Table structure for table `ci_cities` */

DROP TABLE IF EXISTS `ci_cities`;

CREATE TABLE `ci_cities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `state_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `ci_cities` */

insert  into `ci_cities`(`id`,`name`,`slug`,`state_id`,`status`) values 
(1,'Lahore','lahore',1,1),
(2,'Rawalpindi','rawalpindi',1,1),
(3,'Islamabad','islamabad',2,1),
(4,'Karachi','karachi',3,1),
(5,'Peshawar','peshawar',4,1),
(6,'Quetta','quetta',5,1),
(7,'Multan','multan',1,1);

/*Table structure for table `ci_companies` */

DROP TABLE IF EXISTS `ci_companies`;

CREATE TABLE `ci_companies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile_no` varchar(50) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

/*Data for the table `ci_companies` */

insert  into `ci_companies`(`id`,`name`,`email`,`mobile_no`,`address1`,`address2`,`created_date`) values 
(9,'Codeglamour','codeglamour1@gmail.com','44785566952','27 new jersey - Level 58 - CA 444 United State ','','2019-11-17 10:11:52'),
(8,'Codeglamour','codeglamour1@gmail.com','44785566952','27 new jersey - Level 58 - CA 444 United State ','','2018-04-26 09:04:30'),
(7,'Codeglamour','codeglamour1@gmail.com','44785566952','27 new jersey - Level 58 - CA 444 United State ','','2019-03-13 10:03:41'),
(6,'Codeglamour','codeglamour1@gmail.com','44785566952','27 new jersey - Level 58 - CA 444  United State LLC','','2017-12-11 08:12:15'),
(10,'Codeglamour','codeglamour1@gmail.com','44785566952','27 new jersey - Level 58 - CA 444 United State ','','2019-01-27 10:01:18'),
(11,'Codeglamour','codeglamour1@gmail.com','44785566952','27 new jersey - Level 58 - CA 444 United State ','','2019-11-26 09:11:45'),
(12,'Codeglamour','codeglamour1@gmail.com','44785566952','27 new jersey - Level 58 - CA 444 United State ','','2019-11-26 09:11:48'),
(13,'Codeglamour','codeglamour1@gmail.com','44785566952','27 new jersey - Level 58 - CA 444 United State ','','2019-11-26 09:11:50'),
(14,'Codeglamour','codeglamour1@gmail.com','44785566952','27 new jersey - Level 58 - CA 444 United State ','','2019-11-26 09:11:42');

/*Table structure for table `ci_countries` */

DROP TABLE IF EXISTS `ci_countries`;

CREATE TABLE `ci_countries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sortname` varchar(3) NOT NULL,
  `name` varchar(150) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `phonecode` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `ci_countries` */

insert  into `ci_countries`(`id`,`sortname`,`name`,`slug`,`phonecode`,`status`) values 
(1,'PK','Pakistan','pakistan',92,1),
(2,'','United States of America','united-states-of-america',0,1);

/*Table structure for table `ci_dropdown_vals` */

DROP TABLE IF EXISTS `ci_dropdown_vals`;

CREATE TABLE `ci_dropdown_vals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `module_form_id` int(11) DEFAULT NULL,
  `value` text DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

/*Data for the table `ci_dropdown_vals` */

insert  into `ci_dropdown_vals`(`id`,`module_form_id`,`value`,`created_by`,`created_at`,`updated_by`,`updated_at`) values 
(40,63,'Local,Internal','1','2021-09-28 05:09:43','1','2021-09-28 06:09:27'),
(44,67,'Transportation,Duty,Tax,IncomeTax,FumigationCharges,Wharfage,Insurance,ClearingAgent,SalesTax,OtherExpClearningAgent,LocalFreight,ControllingCharges,Import','1','2021-09-28 06:09:33',NULL,NULL),
(45,79,'Cotton,Machine,Machine-Parts','1','2021-10-23 00:00:00','1','2021-10-24 00:00:00'),
(46,80,'Fixed,Non-Fixed','1','2021-10-23 00:00:00','1','2021-10-24 00:00:00');

/*Table structure for table `ci_email_template_variables` */

DROP TABLE IF EXISTS `ci_email_template_variables`;

CREATE TABLE `ci_email_template_variables` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `template_id` int(11) NOT NULL,
  `variable_name` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `ci_email_template_variables` */

insert  into `ci_email_template_variables`(`id`,`template_id`,`variable_name`) values 
(1,1,'{FULLNAME}'),
(2,1,'{VERIFICATION_LINK}'),
(3,2,'{RESET_LINK}'),
(4,2,'{FULLNAME}');

/*Table structure for table `ci_email_templates` */

DROP TABLE IF EXISTS `ci_email_templates`;

CREATE TABLE `ci_email_templates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `last_update` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `ci_email_templates` */

insert  into `ci_email_templates`(`id`,`name`,`slug`,`subject`,`body`,`last_update`) values 
(1,'Email Verification','email-verification','Activate Your Account','<p></p>\n\n<p>Hi  <b>{FULLNAME}</b>,<br><br></p><p>Welcome to Chak92 LMS!<br>Active your account with the link above and start using our portal.</p><p>To verify your email, please click the link below:<br>Â {VERIFICATION_LINK}</p><p>\n\n</p><div><b>Regards,</b></div><div><b>Team</b></div><div><b>CHAK92</b></div>\n\n<p></p>','2021-08-08 23:14:23'),
(2,'Forget Password','forget-password','Recover your password','<p>\n\n</p><p>Hi  <b>{FULLNAME}</b>,<br><br></p><p>Welcome to Chak92 LMS!<br></p><p>We have received a request to reset your password. If you did not initiate this request, you can simply ignore this message and no action will be taken.</p><p><br>To reset your password, please click the link below:<br>Â {RESET_LINK}</p>\n\n<p></p>','2021-08-08 23:15:07'),
(3,'General Notification','','Test Email','<p>This is a test email.</p>','2021-08-08 23:15:24');

/*Table structure for table `ci_form_fields` */

DROP TABLE IF EXISTS `ci_form_fields`;

CREATE TABLE `ci_form_fields` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

/*Data for the table `ci_form_fields` */

insert  into `ci_form_fields`(`id`,`type`) values 
(1,'text'),
(2,'number'),
(3,'email'),
(4,'textarea'),
(5,'file'),
(6,'select'),
(7,'date'),
(8,'phone'),
(9,'country'),
(10,'state'),
(11,'city');

/*Table structure for table `ci_general_settings` */

DROP TABLE IF EXISTS `ci_general_settings`;

CREATE TABLE `ci_general_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `favicon` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `application_name` varchar(255) DEFAULT NULL,
  `timezone` varchar(255) DEFAULT NULL,
  `currency` varchar(100) DEFAULT NULL,
  `default_language` int(11) NOT NULL,
  `copyright` tinytext DEFAULT NULL,
  `email_from` varchar(100) NOT NULL,
  `smtp_host` varchar(255) DEFAULT NULL,
  `smtp_port` int(11) DEFAULT NULL,
  `smtp_user` varchar(50) DEFAULT NULL,
  `smtp_pass` varchar(50) DEFAULT NULL,
  `facebook_link` varchar(255) DEFAULT NULL,
  `twitter_link` varchar(255) DEFAULT NULL,
  `google_link` varchar(255) DEFAULT NULL,
  `youtube_link` varchar(255) DEFAULT NULL,
  `linkedin_link` varchar(255) DEFAULT NULL,
  `instagram_link` varchar(255) DEFAULT NULL,
  `recaptcha_secret_key` varchar(255) DEFAULT NULL,
  `recaptcha_site_key` varchar(255) DEFAULT NULL,
  `recaptcha_lang` varchar(50) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `ci_general_settings` */

insert  into `ci_general_settings`(`id`,`favicon`,`logo`,`application_name`,`timezone`,`currency`,`default_language`,`copyright`,`email_from`,`smtp_host`,`smtp_port`,`smtp_user`,`smtp_pass`,`facebook_link`,`twitter_link`,`google_link`,`youtube_link`,`linkedin_link`,`instagram_link`,`recaptcha_secret_key`,`recaptcha_site_key`,`recaptcha_lang`,`created_date`,`updated_date`) values 
(1,'','','LC','Asia/Karachi','PKR',2,'Copyright © 2021 All rights reserved.','','',0,'','','https://facebook.com','https://twitter.com','https://google.com','https://youtube.com','https://linkedin.com','https://instagram.com','','','en','2021-09-28 01:09:47','2021-09-28 01:09:47');

/*Table structure for table `ci_language` */

DROP TABLE IF EXISTS `ci_language`;

CREATE TABLE `ci_language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `short_name` varchar(15) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `ci_language` */

insert  into `ci_language`(`id`,`name`,`short_name`,`status`,`created_at`) values 
(2,'English','en',1,'2019-09-16 01:13:17');

/*Table structure for table `ci_module_form` */

DROP TABLE IF EXISTS `ci_module_form`;

CREATE TABLE `ci_module_form` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `module_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `is_required` int(11) NOT NULL,
  `sort_order` int(11) NOT NULL,
  `show_on_datatable` varchar(3) DEFAULT 'Yes',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=utf8mb4;

/*Data for the table `ci_module_form` */

insert  into `ci_module_form`(`id`,`module_id`,`name`,`type`,`is_required`,`sort_order`,`show_on_datatable`) values 
(2,34,'Supplier Name','text',0,2,'Yes'),
(5,34,'Supplier Address','textarea',0,3,'Yes'),
(6,34,'Owner Name','text',0,7,'Yes'),
(7,34,'Owner Email Address','email',0,8,'Yes'),
(8,34,'Owner Phone Number','text',1,9,'Yes'),
(9,34,'Supplier Country','country',0,4,'No'),
(10,34,'Supplier State','state',0,5,'No'),
(11,34,'Supplier City','city',0,6,'Yes'),
(14,35,'Shipper Name','text',0,2,'Yes'),
(15,35,'Shipper Address','textarea',0,3,'Yes'),
(16,35,'Shipper City','city',0,6,'Yes'),
(17,35,'Shipper Country','country',0,4,'No'),
(18,35,'Shipper State','state',0,5,'No'),
(19,35,'Shipper Email Address','email',0,7,'Yes'),
(20,35,'Shipper Phone Number','phone',1,8,'Yes'),
(25,36,'Transporter Name','text',0,2,'Yes'),
(26,36,'Transporter Address','textarea',0,3,'Yes'),
(27,36,'Transporter City','city',0,6,'Yes'),
(28,36,'Transporter Country','country',0,4,'No'),
(29,36,'Transporter State','state',0,5,'No'),
(30,36,'Transporter Email Address','email',0,7,'Yes'),
(31,36,'Transporter Phone Number','text',2,8,'Yes'),
(32,36,'Transporter Score','text',1,9,'Yes'),
(34,37,'Insurance Company Name','text',0,2,'Yes'),
(35,37,'Company Address','textarea',0,3,'Yes'),
(36,37,'Company Country','country',0,4,'No'),
(37,37,'Company State','state',0,5,'No'),
(38,37,'Company City','city',0,6,'Yes'),
(39,37,'Company Email Address','email',0,7,'Yes'),
(40,37,'Company Phone Number','text',1,8,'Yes'),
(41,37,'Company Score','number',1,9,'Yes'),
(42,38,'Bank Name','text',0,1,'Yes'),
(43,38,'Bank Branch Address','textarea',0,2,'Yes'),
(44,38,'Bank Country','country',0,3,'No'),
(45,38,'Bank State','state',0,4,'No'),
(46,38,'Bank City','city',0,5,'Yes'),
(47,38,'Bank Contact Person Name','text',0,6,'No'),
(48,38,'Bank Contact Person Phone','text',1,7,'Yes'),
(49,38,'Bank Business Start Date','date',1,8,'No'),
(50,38,'Bank Business End Date','date',1,8,'No'),
(51,38,'Bank Score','text',1,9,'Yes'),
(52,39,'Agent Name','text',0,1,'Yes'),
(53,39,'Agent Branch Address','textarea',0,2,'Yes'),
(54,39,'Agent Country','country',0,3,'No'),
(55,39,'Agent State','state',0,4,'No'),
(56,39,'Agent City','city',0,5,'Yes'),
(57,39,'Agent Contact Person Name','text',0,6,'No'),
(58,39,'Agent Contact Person Phone','text',1,7,'Yes'),
(59,39,'Agent Business Start Date','date',1,8,'Yes'),
(60,39,'Agent Business End Date','date',1,9,'Yes'),
(61,39,'Agent Score','text',1,10,'Yes'),
(62,40,'Expanse Name','text',0,1,'Yes'),
(63,40,'Expanse Flag','select',0,2,'Yes'),
(64,40,'Expanse Country','country',0,3,'No'),
(65,40,'Expanse State','state',0,4,'No'),
(66,40,'Expanse City','city',1,5,'Yes'),
(67,40,'Expanse Category','select',0,7,'Yes'),
(68,41,'Contract Number','text',0,1,'Yes'),
(69,41,'Contract Name','text',0,2,'Yes'),
(70,41,'Contract Created Country','country',0,3,'No'),
(71,41,'Contract Created State','state',0,4,'No'),
(72,41,'Contract Created City','city',0,5,'Yes'),
(73,41,'Goods ID','text',0,6,'Yes'),
(74,41,'HS Code','text',0,7,'Yes'),
(75,41,'Rate (Non Fixed Contract Rate)','text',0,8,'No'),
(76,41,'Fixed Contract Date','date',0,9,'No'),
(77,41,'Contract Fixed Rate','text',0,10,'No'),
(78,41,'On Value Percentage','text',0,11,'No'),
(79,41,'Product Type','select',1,2,'Yes'),
(80,41,'Contract Type','select',1,2,'Yes'),
(81,38,'Limit Structure','text',1,3,'No'),
(82,38,'Pricing With Bank*','text',1,4,'No'),
(83,38,'Available Limit*','text',1,6,'Yes'),
(84,38,'Limit Used*','text',1,7,'No'),
(85,38,'Service Level','text',1,8,'Yes'),
(86,38,'Leniency','text',1,9,'Yes');

/*Table structure for table `ci_payments` */

DROP TABLE IF EXISTS `ci_payments`;

CREATE TABLE `ci_payments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `invoice_no` varchar(30) NOT NULL,
  `txn_id` varchar(255) NOT NULL,
  `items_detail` longtext NOT NULL,
  `sub_total` decimal(10,2) NOT NULL,
  `total_tax` decimal(10,2) NOT NULL,
  `discount` decimal(10,2) NOT NULL,
  `grand_total` decimal(10,2) NOT NULL,
  `currency` varchar(20) NOT NULL,
  `payment_method` varchar(50) NOT NULL,
  `payment_status` varchar(30) NOT NULL,
  `client_note` longtext NOT NULL,
  `termsncondition` longtext NOT NULL,
  `due_date` date NOT NULL,
  `created_date` date NOT NULL,
  `updated_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

/*Data for the table `ci_payments` */

insert  into `ci_payments`(`id`,`admin_id`,`user_id`,`company_id`,`invoice_no`,`txn_id`,`items_detail`,`sub_total`,`total_tax`,`discount`,`grand_total`,`currency`,`payment_method`,`payment_status`,`client_note`,`termsncondition`,`due_date`,`created_date`,`updated_date`) values 
(4,31,3,9,'INV-2001','','a:5:{s:19:\"product_description\";a:1:{i:0;s:17:\"Samsung Galaxy S3\";}s:8:\"quantity\";a:1:{i:0;s:1:\"1\";}s:5:\"price\";a:1:{i:0;s:4:\"1000\";}s:3:\"tax\";a:1:{i:0;s:1:\"2\";}s:5:\"total\";a:1:{i:0;s:7:\"1000.00\";}}',1000.00,20.00,5.00,1015.00,'USD','','Paid','Will be delivered within next 24 hours','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','2017-11-29','2017-12-06','2019-11-17'),
(2,24,32,7,'INV-1001','','a:5:{s:19:\"product_description\";a:1:{i:0;s:9:\"Galaxy S6\";}s:8:\"quantity\";a:1:{i:0;s:1:\"1\";}s:5:\"price\";a:1:{i:0;s:4:\"1000\";}s:3:\"tax\";a:1:{i:0;s:1:\"5\";}s:5:\"total\";a:1:{i:0;s:7:\"1000.00\";}}',1000.00,50.00,2.00,1048.00,'USD','','Paid','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','2017-12-20','2017-12-12','2019-03-13'),
(3,3,33,8,'INV-2002','','a:5:{s:19:\"product_description\";a:1:{i:0;s:17:\"Samsung Galaxy S3\";}s:8:\"quantity\";a:1:{i:0;s:1:\"1\";}s:5:\"price\";a:1:{i:0;s:2:\"10\";}s:3:\"tax\";a:1:{i:0;s:1:\"2\";}s:5:\"total\";a:1:{i:0;s:5:\"10.00\";}}',10.00,0.20,1.00,9.20,'USD','','Paid','test','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','2017-12-06','2017-12-06','2018-04-26'),
(5,24,3,10,'10021','','a:5:{s:19:\"product_description\";a:2:{i:0;s:9:\"Galaxy S7\";i:1;s:9:\"Galaxy S8\";}s:8:\"quantity\";a:2:{i:0;s:1:\"1\";i:1;s:1:\"3\";}s:5:\"price\";a:2:{i:0;s:3:\"300\";i:1;s:3:\"700\";}s:3:\"tax\";a:2:{i:0;s:1:\"0\";i:1;s:1:\"2\";}s:5:\"total\";a:2:{i:0;s:6:\"300.00\";i:1;s:7:\"2100.00\";}}',2400.00,42.00,1.00,2441.00,'USD','','Paid','Will be delivered on next Friday','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','2018-04-20','2018-04-11','2019-01-27'),
(6,31,3,11,'INV-100012','','a:5:{s:19:\"product_description\";a:1:{i:0;s:9:\"dfwwertw`\";}s:8:\"quantity\";a:1:{i:0;s:1:\"1\";}s:5:\"price\";a:1:{i:0;s:3:\"300\";}s:3:\"tax\";a:1:{i:0;s:2:\"90\";}s:5:\"total\";a:1:{i:0;s:6:\"300.00\";}}',300.00,270.00,0.00,570.00,'USD','','Paid','','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','2019-11-06','2019-11-04',NULL),
(7,31,3,12,'INV0991','','a:5:{s:19:\"product_description\";a:1:{i:0;s:7:\"asdfasd\";}s:8:\"quantity\";a:1:{i:0;s:1:\"3\";}s:5:\"price\";a:1:{i:0;s:2:\"20\";}s:3:\"tax\";a:1:{i:0;s:1:\"0\";}s:5:\"total\";a:1:{i:0;s:5:\"60.00\";}}',60.00,0.00,0.00,60.00,'USD','','Unpaid','','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','2019-10-29','2019-04-25',NULL),
(8,31,33,13,'222','','a:5:{s:19:\"product_description\";a:1:{i:0;s:6:\"asdfq`\";}s:8:\"quantity\";a:1:{i:0;s:2:\"27\";}s:5:\"price\";a:1:{i:0;s:2:\"50\";}s:3:\"tax\";a:1:{i:0;s:1:\"0\";}s:5:\"total\";a:1:{i:0;s:7:\"1350.00\";}}',1350.00,0.00,0.00,1350.00,'USD','','Unpaid','','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','2019-10-30','2019-04-10',NULL),
(9,31,33,14,'1333','','a:5:{s:19:\"product_description\";a:1:{i:0;s:7:\"asdfasd\";}s:8:\"quantity\";a:1:{i:0;s:2:\"30\";}s:5:\"price\";a:1:{i:0;s:2:\"59\";}s:3:\"tax\";a:1:{i:0;s:1:\"0\";}s:5:\"total\";a:1:{i:0;s:7:\"1770.00\";}}',1770.00,0.00,0.00,1770.00,'USD','','Unpaid','','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','2019-11-14','2019-11-01',NULL);

/*Table structure for table `ci_states` */

DROP TABLE IF EXISTS `ci_states`;

CREATE TABLE `ci_states` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `status` int(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `ci_states` */

insert  into `ci_states`(`id`,`name`,`slug`,`country_id`,`status`) values 
(1,'Punjab','punjab',1,1),
(2,'Islamabad','islamabad',1,1),
(3,'Sindh','sindh',1,1),
(4,'Khyber Pakhtunkha','kp',1,1),
(5,'Balochistan','balochistan',1,1);

/*Table structure for table `ci_uploaded_files` */

DROP TABLE IF EXISTS `ci_uploaded_files`;

CREATE TABLE `ci_uploaded_files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(225) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=latin1;

/*Data for the table `ci_uploaded_files` */

insert  into `ci_uploaded_files`(`id`,`name`,`created_at`) values 
(81,'uploads/0fe0382a27bbc4336939a4dd4b3acee2.jpg','2019-11-26 21:07:49');

/*Table structure for table `ci_users_old` */

DROP TABLE IF EXISTS `ci_users_old`;

CREATE TABLE `ci_users_old` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile_no` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 1,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `is_verify` tinyint(4) NOT NULL DEFAULT 0,
  `is_admin` tinyint(4) NOT NULL DEFAULT 0,
  `token` varchar(255) NOT NULL,
  `password_reset_code` varchar(255) NOT NULL,
  `last_ip` varchar(30) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;

/*Data for the table `ci_users_old` */

insert  into `ci_users_old`(`id`,`username`,`firstname`,`lastname`,`email`,`mobile_no`,`password`,`address`,`role`,`is_active`,`is_verify`,`is_admin`,`token`,`password_reset_code`,`last_ip`,`created_at`,`updated_at`) values 
(3,'admin','admin','admin','admin@admin.com','12345','$2y$10$qlAzDhBEqkKwP3OykqA7N.ZQk6T67fxD9RHfdv3zToxa9Mtwu9C/e','27 new jersey - Level 58 - CA 444 \r\nUnited State ',1,1,1,1,'','','','2017-09-29 10:09:44','2017-12-14 10:12:41'),
(32,'user','user','user','user@user.com','44897866462','$2y$10$sU5msVdifYie7cZbCEnyku6hLH8Sef0VCHqO9UIOg6rsBsDtsLcyS','',1,1,1,0,'352fe25daf686bdb4edca223c921acea','','','2018-04-24 07:04:07','2019-01-26 03:01:30'),
(33,'john123','john','smith','johnsmith@gmail.com','445889654656','$2y$10$qlAzDhBEqkKwP3OykqA7N.ZQk6T67fxD9RHfdv3zToxa9Mtwu9C/e','USA',7,1,1,0,'','','','2018-04-25 06:04:25','2019-01-24 04:01:33'),
(38,'john','smith','johan','johnsmith@gmail.com','123456','$2y$10$5wXvKkhMTEatZ7aUHE/RU.lQbeXdURME8Br9Noxn802epBPoFz7wu','asdfdasfdsfds',1,1,0,0,'','','','2019-07-15 09:07:24','2019-07-15 09:07:24'),
(39,'techesprit','zain','khan','zain@gmail.com','03004596000','$2y$10$F14///ug4J6WNd0selNJguZ2ib4ugER8u4n09Z787nz2g6j4gJZva','111asdfasd',1,1,0,0,'','','','2019-11-25 00:00:00','2019-11-25 00:00:00'),
(40,'techesprit','zain','khan','zain@gmail.com','03004596000','$2y$10$UbljVrMhHmqRYhJBumzmVOfXYmaOeZRMAEkBn0uF68Nj3VL4ACiHC','111asdfasd',1,1,0,0,'','','','2019-11-25 00:00:00','2019-11-25 00:00:00'),
(41,'husnain','Hus','Raf','husnain.dev1@gmail.com','12345','$2y$10$DRhyvfPCiOZAldVHEdpHuOh84Ro/VIaqIksPwaz.KLwB/54DllKkC','Test',1,1,1,0,'','','','2021-07-14 00:00:00','2021-07-14 00:00:00');

/*Table structure for table `contract` */

DROP TABLE IF EXISTS `contract`;

CREATE TABLE `contract` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `contract_number` varchar(255) NOT NULL,
  `contract_name` varchar(255) NOT NULL,
  `product_type` varchar(255) NOT NULL,
  `contract_type` varchar(255) NOT NULL,
  `contract_created_city` varchar(255) NOT NULL,
  `goods_id` varchar(255) NOT NULL,
  `hs_code` varchar(255) NOT NULL,
  `rate_non_fixed_contract_rate` varchar(255) NOT NULL,
  `fixed_contract_date` datetime NOT NULL,
  `contract_fixed_rate` varchar(255) NOT NULL,
  `on_value_percentage` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_by` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `contract` */

insert  into `contract`(`id`,`contract_number`,`contract_name`,`product_type`,`contract_type`,`contract_created_city`,`goods_id`,`hs_code`,`rate_non_fixed_contract_rate`,`fixed_contract_date`,`contract_fixed_rate`,`on_value_percentage`,`created_by`,`created_at`,`updated_by`,`updated_at`) values 
(1,'ct86','Husnain','Cotton','Fixed','Rawalpindi','89','55','556','2021-10-23 00:00:00','676','5','1','2021-10-23 00:00:00','1','2021-10-23 00:00:00');

/*Table structure for table `insurance_company` */

DROP TABLE IF EXISTS `insurance_company`;

CREATE TABLE `insurance_company` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `insurance_company_name` varchar(255) NOT NULL,
  `company_address` text NOT NULL,
  `company_country` varchar(255) NOT NULL,
  `company_state` varchar(255) NOT NULL,
  `company_city` varchar(255) NOT NULL,
  `company_email_address` varchar(255) NOT NULL,
  `company_phone_number` varchar(255) NOT NULL,
  `company_score` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_by` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `insurance_company` */

insert  into `insurance_company`(`id`,`insurance_company_name`,`company_address`,`company_country`,`company_state`,`company_city`,`company_email_address`,`company_phone_number`,`company_score`,`created_by`,`created_at`,`updated_by`,`updated_at`) values 
(1,'Test insurance Company','test','Pakistan','Punjab','Lahore','test@test.com','23453','5','1','2021-10-24 00:00:00','','0000-00-00 00:00:00');

/*Table structure for table `lc_details` */

DROP TABLE IF EXISTS `lc_details`;

CREATE TABLE `lc_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lc_id` int(11) NOT NULL,
  `contract_no` varchar(150) NOT NULL,
  `temporary_lc_no` varchar(150) NOT NULL,
  `Performa_invoice` varchar(150) NOT NULL,
  `invoice_date` varchar(150) NOT NULL,
  `proforma_invoice_amount_in_` varchar(150) NOT NULL,
  `lc_signed_date` varchar(150) NOT NULL,
  `lc_open_date` varchar(150) NOT NULL,
  `lc_issue_date` varchar(150) NOT NULL,
  `lc_shipment_date` varchar(150) NOT NULL,
  `lc_expire_date` varchar(150) NOT NULL,
  `shippments_allowed` varchar(150) NOT NULL,
  `container_free_days_allowed` varchar(150) NOT NULL,
  `no_of_quarters_for_lc` varchar(150) NOT NULL,
  `created_by` varchar(150) NOT NULL,
  `created_at` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

/*Data for the table `lc_details` */

insert  into `lc_details`(`id`,`lc_id`,`contract_no`,`temporary_lc_no`,`Performa_invoice`,`invoice_date`,`proforma_invoice_amount_in_`,`lc_signed_date`,`lc_open_date`,`lc_issue_date`,`lc_shipment_date`,`lc_expire_date`,`shippments_allowed`,`container_free_days_allowed`,`no_of_quarters_for_lc`,`created_by`,`created_at`) values 
(1,0,'','','','','','','','','','','','','','1','2021-10-31 : 12:10:54'),
(2,8,'ct86','','','','','','','','','','Select Value','Select Value','','1','2021-10-31 : 12:10:23'),
(3,9,'ct86','','','','','','','','','','Select Value','Select Value','','1','2021-10-31 : 12:10:57'),
(4,10,'ct86','','','','','','','','','','Select Value','Select Value','','1','2021-10-31 : 12:10:10'),
(5,11,'ct86','','','','','','','','','','Select Value','Select Value','','1','2021-10-31 : 01:10:08'),
(6,12,'ct86','','','','','','','','','','Select Value','Select Value','','1','2021-10-31 : 02:10:57'),
(7,13,'ct86','','','','','','','','','','Select Value','Select Value','','1','2021-10-31 : 02:10:34'),
(8,14,'ct86','','','','','','','','','','Select Value','Select Value','','1','2021-10-31 : 02:10:50'),
(9,15,'ct86','4555','','','','','','','','','Select Value','Select Value','','1','2021-10-31 : 03:10:54'),
(10,16,'ct86','4555','','','','','','','','','Select Value','Select Value','','1','2021-10-31 : 03:10:37'),
(11,17,'ct86','','','','','','','','','','Select Value','Select Value','','1','2021-11-06 : 04:11:39'),
(12,18,'ct86','','','','','','','','','','Select Value','Select Value','','1','2021-11-11 : 12:11:39'),
(13,19,'ct86','','','','','','','','','','Select Value','Select Value','','1','2021-11-11 : 12:11:13'),
(14,20,'ct86','','','','','','','','','','Select Value','Select Value','','1','2021-11-11 : 12:11:42'),
(15,21,'ct86','','','','','','','','','','Select Value','Select Value','','1','2021-11-17 : 10:11:02'),
(16,22,'test222','','','','','','','','','','Select Value','Select Value','','1','2021-11-17 : 10:11:08');

/*Table structure for table `lc_expanses` */

DROP TABLE IF EXISTS `lc_expanses`;

CREATE TABLE `lc_expanses` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `expanse_name` varchar(255) NOT NULL,
  `expanse_flag` varchar(255) NOT NULL,
  `expanse_country` varchar(255) NOT NULL,
  `expanse_state` varchar(255) NOT NULL,
  `expanse_city` varchar(255) NOT NULL,
  `expanse_category` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_by` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `lc_expanses` */

/*Table structure for table `lc_gen_bank` */

DROP TABLE IF EXISTS `lc_gen_bank`;

CREATE TABLE `lc_gen_bank` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lc_id` int(11) NOT NULL,
  `bank` varchar(150) NOT NULL,
  `limit_structure` varchar(150) NOT NULL,
  `pricing_with_bank` varchar(255) NOT NULL,
  `available_limit` varchar(255) NOT NULL,
  `limit_used` varchar(255) NOT NULL,
  `service_level` varchar(255) NOT NULL,
  `leniency` varchar(255) NOT NULL,
  `relationship` varchar(255) NOT NULL,
  `markup` varchar(255) NOT NULL,
  `lc_doc_sub_date` varchar(255) NOT NULL,
  `bank_draft` varchar(255) DEFAULT NULL,
  `bank_draft_rec_date` varchar(255) NOT NULL,
  `lc_no` varchar(255) NOT NULL,
  `field_1` varchar(255) NOT NULL,
  `field_2` varchar(255) NOT NULL,
  `field_3` varchar(255) NOT NULL,
  `file1` varchar(255) NOT NULL,
  `file2` varchar(255) NOT NULL,
  `file3` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `lc_gen_bank` */

insert  into `lc_gen_bank`(`id`,`lc_id`,`bank`,`limit_structure`,`pricing_with_bank`,`available_limit`,`limit_used`,`service_level`,`leniency`,`relationship`,`markup`,`lc_doc_sub_date`,`bank_draft`,`bank_draft_rec_date`,`lc_no`,`field_1`,`field_2`,`field_3`,`file1`,`file2`,`file3`,`created_by`,`created_at`) values 
(1,0,'1','','','','','','','','','',NULL,'','','','Select Value','','','','','1','2021-10-31 : 01:10:56'),
(2,0,'1','','','','','','','','','',NULL,'','','','Select Value','','','','','1','2021-10-31 : 01:10:18'),
(3,0,'1','fg','bvb','gfh','','','','','','',NULL,'','','','Select Value','','','','','1','2021-10-31 : 02:10:17'),
(4,14,'1','1121','bvb','gfh','','','','54545','','',NULL,'','','','Select Value','','','','','1','2021-10-31 : 02:10:27'),
(5,16,'1','fg','bvb','gfh','','','','','','',NULL,'','','','Select Value','','','','','1','2021-10-31 : 03:10:54');

/*Table structure for table `lc_gen_contract` */

DROP TABLE IF EXISTS `lc_gen_contract`;

CREATE TABLE `lc_gen_contract` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lc_id` int(11) DEFAULT NULL,
  `contract_no` varchar(255) DEFAULT NULL,
  `contract_date` datetime DEFAULT NULL,
  `supplier_name` varchar(255) DEFAULT NULL,
  `shipper` varchar(255) DEFAULT NULL,
  `temp_lc_no` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `temporary_lc_no` varchar(100) NOT NULL,
  `Performa_invoice` varchar(100) NOT NULL,
  `invoice_date` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `lc_gen_contract` */

insert  into `lc_gen_contract`(`id`,`lc_id`,`contract_no`,`contract_date`,`supplier_name`,`shipper`,`temp_lc_no`,`created_by`,`created_at`,`updated_by`,`updated_at`,`temporary_lc_no`,`Performa_invoice`,`invoice_date`) values 
(1,1,'husni','2021-10-23 00:00:00','2','1','yoyo','1','2021-10-23 00:00:00',NULL,NULL,'','','');

/*Table structure for table `lc_gen_insurance` */

DROP TABLE IF EXISTS `lc_gen_insurance`;

CREATE TABLE `lc_gen_insurance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lc_id` int(11) NOT NULL,
  `insurance_company` varchar(150) NOT NULL,
  `insurance_premium_rate` varchar(150) NOT NULL,
  `insurance_value` varchar(255) NOT NULL,
  `markup` varchar(255) NOT NULL,
  `field_2` varchar(255) NOT NULL,
  `field_3` varchar(255) NOT NULL,
  `file1` varchar(255) NOT NULL,
  `file2` varchar(255) NOT NULL,
  `file3` varchar(255) NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `created_at` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `lc_gen_insurance` */

insert  into `lc_gen_insurance`(`id`,`lc_id`,`insurance_company`,`insurance_premium_rate`,`insurance_value`,`markup`,`field_2`,`field_3`,`file1`,`file2`,`file3`,`created_by`,`created_at`) values 
(1,11,'1','','','','Select Value','','','','','1','2021-10-31 : 01:10:09'),
(2,0,'Select Value','','','','Select Value','','','','','1','2021-10-31 : 02:10:34'),
(3,12,'1','','','','Select Value','','','','','1','2021-10-31 : 02:10:52'),
(4,14,'1','','','','Select Value','','','','','1','2021-10-31 : 02:10:00'),
(5,16,'1','111','','','Select Value','','','','','1','2021-10-31 : 03:10:21');

/*Table structure for table `lc_gen_shipper` */

DROP TABLE IF EXISTS `lc_gen_shipper`;

CREATE TABLE `lc_gen_shipper` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lc_id` int(11) NOT NULL,
  `shipper_information` varchar(150) NOT NULL,
  `rate` varchar(150) NOT NULL,
  `freight_charges` varchar(255) NOT NULL,
  `internal` varchar(255) NOT NULL,
  `taxes` varchar(255) NOT NULL,
  `port_of_dispatch` varchar(255) NOT NULL,
  `date_of_dispatch` varchar(255) NOT NULL,
  `expected_shipment_date` varchar(255) NOT NULL,
  `actual_shipment_date` varchar(255) NOT NULL,
  `expected_rec_date` varchar(100) NOT NULL,
  `actual_rec_date` varchar(100) NOT NULL,
  `expected_landing_port` varchar(100) NOT NULL,
  `actual_landing_port` varchar(100) NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `created_at` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `lc_gen_shipper` */

insert  into `lc_gen_shipper`(`id`,`lc_id`,`shipper_information`,`rate`,`freight_charges`,`internal`,`taxes`,`port_of_dispatch`,`date_of_dispatch`,`expected_shipment_date`,`actual_shipment_date`,`expected_rec_date`,`actual_rec_date`,`expected_landing_port`,`actual_landing_port`,`created_by`,`created_at`) values 
(1,14,'1','44','44','44','\\\\45','54','','2021-10-21','','','','','','1','2021-10-31 : 02:10:54'),
(2,16,'1','','','','','','','','','','','','','1','2021-10-31 : 03:10:14');

/*Table structure for table `lc_gen_supplier` */

DROP TABLE IF EXISTS `lc_gen_supplier`;

CREATE TABLE `lc_gen_supplier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lc_id` int(11) NOT NULL,
  `supplier_company` varchar(150) NOT NULL,
  `bank_draft_sent_date` varchar(150) NOT NULL,
  `bank_draft` varchar(255) NOT NULL,
  `field_1` varchar(255) NOT NULL,
  `field_2` varchar(255) NOT NULL,
  `field_3` varchar(255) NOT NULL,
  `ammendment_in_bank_draft` varchar(255) NOT NULL,
  `ammendment_bank daft` varchar(255) NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `created_at` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `lc_gen_supplier` */

insert  into `lc_gen_supplier`(`id`,`lc_id`,`supplier_company`,`bank_draft_sent_date`,`bank_draft`,`field_1`,`field_2`,`field_3`,`ammendment_in_bank_draft`,`ammendment_bank daft`,`created_by`,`created_at`) values 
(1,14,'2','','','','Select Value','','Select Value','','1','2021-10-31 : 02:10:17');

/*Table structure for table `lc_generation` */

DROP TABLE IF EXISTS `lc_generation`;

CREATE TABLE `lc_generation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_by` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` varchar(100) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `current_step` varchar(1) DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4;

/*Data for the table `lc_generation` */

insert  into `lc_generation`(`id`,`created_by`,`created_at`,`updated_by`,`updated_at`,`current_step`,`status`) values 
(1,'1','2021-10-23 00:00:00',NULL,NULL,'1','1'),
(2,'1','2021-10-31 00:00:00',NULL,NULL,'1','1'),
(3,'1','2021-10-31 00:00:00',NULL,NULL,'1','1'),
(4,'1','2021-10-31 00:00:00',NULL,NULL,'2','1'),
(5,'1','2021-10-31 00:00:00',NULL,NULL,'1','1'),
(6,'1','2021-10-31 00:00:00',NULL,NULL,'1','1'),
(7,'1','2021-10-31 00:00:00',NULL,NULL,'1','1'),
(8,'1','2021-10-31 00:00:00',NULL,NULL,'1','1'),
(9,'1','2021-10-31 00:00:00',NULL,NULL,'1','1'),
(10,'1','2021-10-31 00:00:00',NULL,NULL,'4','1'),
(11,'1','2021-10-31 00:00:00',NULL,NULL,'1','1'),
(12,'1','2021-10-31 00:00:00',NULL,NULL,'2','1'),
(13,'1','2021-10-31 00:00:00',NULL,NULL,'1','1'),
(14,'1','2021-10-31 00:00:00',NULL,NULL,'5','1'),
(15,'1','2021-10-31 03:10:54',NULL,NULL,'1','1'),
(16,'1','2021-10-31 03:10:14',NULL,NULL,'5','1'),
(17,'1','2021-11-06 04:11:39',NULL,NULL,'1','1'),
(18,'1','2021-11-11 12:11:39',NULL,NULL,'1','1'),
(19,'1','2021-11-11 12:11:13',NULL,NULL,'1','1'),
(20,'1','2021-11-11 12:11:42',NULL,NULL,'1','1'),
(21,'1','2021-11-17 00:00:00',NULL,NULL,'1','1'),
(22,'1','2021-11-17 00:00:00',NULL,NULL,'1','1');

/*Table structure for table `module` */

DROP TABLE IF EXISTS `module`;

CREATE TABLE `module` (
  `module_id` int(11) NOT NULL AUTO_INCREMENT,
  `module_name` varchar(255) NOT NULL,
  `controller_name` varchar(255) NOT NULL,
  `fa_icon` varchar(100) NOT NULL,
  `operation` text NOT NULL,
  `sort_order` tinyint(4) NOT NULL,
  `status` enum('A','D') DEFAULT 'A',
  `group_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`module_id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

/*Data for the table `module` */

insert  into `module`(`module_id`,`module_name`,`controller_name`,`fa_icon`,`operation`,`sort_order`,`status`,`group_id`) values 
(1,'users','admin','fa-users','view|add|edit|delete|change_status|access',3,'A',NULL),
(2,'role_and_permissions','admin_roles','fa-book','view|add|edit|delete|change_status|access',4,'A',NULL),
(3,'users2','users','fa-users','view|add|edit|delete|change_status|access',4,'D',NULL),
(7,'backup_and_export','export','fa-database','access',12,'A',NULL),
(8,'settings','general_settings','fa-cogs','view|add|edit|access',13,'A',NULL),
(9,'dashboard','dashboard','fa-dashboard','view|index_2|index_3|access',1,'A',NULL),
(10,'codeigniter_examples','example','fa-snowflake-o','access',6,'D',NULL),
(11,'invoicing_system','invoices','fa-files-o','access',9,'D',NULL),
(12,'database_joins_example','joins','fa-external-link-square','access',7,'D',NULL),
(13,'language_setting','languages','fa-language','access',14,'D',NULL),
(14,'locations','location','fa-map-pin','access',11,'A',2),
(15,'widgets','widgets','fa-th','access',19,'D',NULL),
(16,'charts','charts','fa-line-chart','access',17,'D',NULL),
(17,'ui_elements','ui','fa-tree','access',18,'D',NULL),
(18,'forms','forms','fa-edit','access',20,'D',NULL),
(19,'tables','tables','fa-table','access',21,'D',NULL),
(21,'mailbox','mailbox','fa-envelope-o','access',23,'D',NULL),
(22,'pages','pages','fa-book','access',24,'D',NULL),
(23,'extras','extras','fa-plus-square-o','access',25,'D',NULL),
(25,'profile','profile','fa-user','access',2,'A',NULL),
(26,'activity_log','activity','fa-flag-o','access',11,'A',NULL),
(34,'Supplier','supplier','fa fa-list','add|edit|delete|access',5,'A',2),
(35,'Shipper','shipper','fa fa-list','add|edit|delete|access',6,'A',2),
(36,'Transporter','transporter','fa fa-list','add|edit|delete|access',7,'A',2),
(37,'Insurance Company','insurance_company','fa fa-list','add|edit|delete|access',8,'A',2),
(38,'Bank','bank','fa fa-list','add|edit|delete|access',9,'A',2),
(39,'Agent','agent','fa fa-list','add|edit|delete|access',5,'A',2),
(40,'LC Expanses','lc_expanses','fa fa-list','add|edit|delete|access',9,'A',2),
(41,'Contract','contract','fa fa-list','add|edit|delete|access',4,'A',NULL),
(42,'LC Generation','lc_generation','fa fa-list','add|edit|delete|access',4,'A',NULL);

/*Table structure for table `module_access` */

DROP TABLE IF EXISTS `module_access`;

CREATE TABLE `module_access` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_role_id` int(11) NOT NULL,
  `module` varchar(255) NOT NULL,
  `operation` varchar(255) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  PRIMARY KEY (`id`),
  KEY `RoleId` (`admin_role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=177 DEFAULT CHARSET=latin1;

/*Data for the table `module_access` */

insert  into `module_access`(`id`,`admin_role_id`,`module`,`operation`,`status`) values 
(1,1,'users','view','active'),
(2,1,'users','add','active'),
(3,1,'users','edit','active'),
(5,1,'users','access','active'),
(6,1,'users','change_status','active'),
(8,1,'general_settings','view','active'),
(9,1,'general_settings','add','active'),
(10,1,'general_settings','edit','active'),
(11,1,'general_settings','access','active'),
(36,2,'calendar','access','active'),
(55,5,'profile','access','active'),
(57,5,'users','view','active'),
(58,5,'users','add','active'),
(59,5,'users','change_status','active'),
(61,5,'users','edit','active'),
(62,5,'users','delete','active'),
(65,5,'dashboard','access','active'),
(73,5,'dashboard','view','active'),
(83,2,'admin','view','active'),
(84,2,'admin','change_status','active'),
(85,2,'admin','add','active'),
(87,2,'admin','edit','active'),
(89,2,'admin','delete','active'),
(95,6,'dashboard','view','active'),
(96,6,'dashboard','access','active'),
(97,6,'profile','access','active'),
(103,2,'admin_roles','view','active'),
(104,2,'admin_roles','add','active'),
(105,2,'admin_roles','edit','active'),
(106,2,'admin_roles','delete','active'),
(109,1,'export','access','active'),
(110,2,'admin_roles','change_status','active'),
(111,2,'export','access','active'),
(112,2,'activity','access','active'),
(113,2,'general_settings','view','active'),
(114,2,'general_settings','access','active'),
(115,2,'general_settings','add','active'),
(116,2,'general_settings','edit','active'),
(117,2,'languages','access','active'),
(118,2,'admin_roles','access','active'),
(119,2,'admin','access','active'),
(120,2,'profile','access','active'),
(121,2,'dashboard','access','active'),
(122,2,'dashboard','view','active'),
(126,2,'location','access','active'),
(127,7,'dashboard','view','active'),
(128,7,'dashboard','access','active'),
(129,7,'profile','access','active'),
(155,8,'dashboard','view','active'),
(156,8,'dashboard','access','active'),
(157,8,'profile','access','active'),
(158,8,'admin','view','active'),
(159,8,'admin','add','active'),
(160,8,'admin','edit','active'),
(161,8,'admin','delete','active'),
(162,8,'admin','access','active'),
(163,8,'admin','change_status','active'),
(169,9,'dashboard','view','active'),
(170,9,'dashboard','access','active'),
(171,9,'profile','access','active');

/*Table structure for table `shipper` */

DROP TABLE IF EXISTS `shipper`;

CREATE TABLE `shipper` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `shipper_name` varchar(255) NOT NULL,
  `shipper_address` text NOT NULL,
  `shipper_country` varchar(255) NOT NULL,
  `shipper_state` varchar(255) NOT NULL,
  `shipper_city` varchar(255) NOT NULL,
  `shipper_email_address` varchar(255) NOT NULL,
  `shipper_phone_number` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_by` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `shipper` */

insert  into `shipper`(`id`,`shipper_name`,`shipper_address`,`shipper_country`,`shipper_state`,`shipper_city`,`shipper_email_address`,`shipper_phone_number`,`created_by`,`created_at`,`updated_by`,`updated_at`) values 
(1,'Test','Test address','Pakistan','Islamabad','Islamabad','test@shipper.com','123','1','2021-09-27 05:09:04','','0000-00-00 00:00:00');

/*Table structure for table `sub_module` */

DROP TABLE IF EXISTS `sub_module`;

CREATE TABLE `sub_module` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `sort_order` int(11) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  PRIMARY KEY (`id`),
  KEY `Parent Module ID` (`parent`)
) ENGINE=InnoDB AUTO_INCREMENT=106 DEFAULT CHARSET=latin1;

/*Data for the table `sub_module` */

insert  into `sub_module`(`id`,`parent`,`name`,`link`,`sort_order`,`status`) values 
(2,2,'module_setting','module',1,'active'),
(3,2,'role_and_permissions','',2,'active'),
(4,1,'add_new_user','add',2,'active'),
(6,1,'users_list','',1,'active'),
(26,9,'dashboard_v1','',1,'inactive'),
(27,9,'dashboard_v2','index_2',2,'inactive'),
(28,9,'dashboard_v3','index_3',3,'inactive'),
(30,3,'users2_list','',1,'active'),
(31,3,'add_new_user2','add',2,'active'),
(32,10,'simple_datatable','simple_datatable',1,'active'),
(33,10,'ajax_datatable','ajax_datatable',2,'active'),
(34,10,'pagination','pagination',3,'active'),
(35,10,'advance_search','advance_search',4,'active'),
(36,10,'file_upload','file_upload',5,'active'),
(37,11,'invoice_list','',1,'active'),
(38,11,'add_new_invoice','add',2,'active'),
(39,12,'serverside_join','',1,'active'),
(40,12,'simple_join','simple',2,'active'),
(41,14,'country','',1,'active'),
(42,14,'state','state',2,'active'),
(43,14,'city','city',3,'active'),
(44,16,'charts_js','chartjs',1,'active'),
(45,16,'charts_flot','flot',2,'active'),
(46,16,'charts_inline','inline',3,'active'),
(47,17,'general','general',1,'active'),
(48,17,'icons','icons',2,'active'),
(49,17,'buttons','buttons',3,'active'),
(50,18,'general_elements','general',1,'active'),
(51,18,'advanced_elements','advanced',2,'active'),
(52,18,'editors','editors',3,'active'),
(53,19,'simple_tables','simple',1,'active'),
(54,19,'data_tables','data',2,'active'),
(55,21,'inbox','inbox',1,'active'),
(56,21,'compose','compose',2,'active'),
(57,21,'read','read_mail',3,'active'),
(58,22,'invoice','invoice',1,'active'),
(59,22,'profile','profile',2,'active'),
(60,22,'login','login',3,'active'),
(61,22,'register','register',4,'active'),
(62,22,'lock_screen','Lockscreen',4,'active'),
(63,23,'error_404','error404',1,'active'),
(64,23,'error_500','error500',2,'active'),
(65,23,'blank_page','blank',3,'active'),
(66,23,'starter_page','starter',4,'active'),
(67,8,'general_settings','',1,'active'),
(68,8,'email_template_settings','email_templates',2,'active'),
(69,25,'view_profile','',1,'active'),
(70,25,'change_password','change_pwd',2,'active'),
(71,10,'multiple_files_upload','multi_file_upload',6,'active'),
(72,10,'dynamic_charts','charts',7,'active'),
(73,10,'locations','locations',8,'active'),
(88,34,'Add Supplier','add',1,'active'),
(89,34,'List Supplier','',2,'active'),
(90,35,'Add Shipper','add',1,'active'),
(91,35,'List Shipper','',2,'active'),
(92,36,'Add Transporter','add',1,'active'),
(93,36,'List Transporter','',2,'active'),
(94,37,'Add Insurance Company','add',1,'active'),
(95,37,'List Insurance Company','',2,'active'),
(96,38,'Add Bank','add',1,'active'),
(97,38,'List Bank','',2,'active'),
(98,39,'Add Agent','add',1,'active'),
(99,39,'List Agent','',2,'active'),
(100,40,'Add LC Expanses','add',1,'active'),
(101,40,'List LC Expanses','',2,'active'),
(102,41,'Add Contract','add',1,'active'),
(103,41,'List Contract','',2,'active'),
(104,42,'Add LC','add',1,'active'),
(105,42,'List LC','',2,'active');

/*Table structure for table `supplier` */

DROP TABLE IF EXISTS `supplier`;

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `supplier_name` varchar(255) DEFAULT NULL,
  `supplier_address` text DEFAULT NULL,
  `supplier_city` varchar(255) DEFAULT NULL,
  `supplier_state` varchar(255) DEFAULT NULL,
  `supplier_country` varchar(255) DEFAULT NULL,
  `owner_name` varchar(255) DEFAULT NULL,
  `owner_email_address` varchar(255) DEFAULT NULL,
  `owner_phone_number` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `supplier` */

insert  into `supplier`(`id`,`supplier_name`,`supplier_address`,`supplier_city`,`supplier_state`,`supplier_country`,`owner_name`,`owner_email_address`,`owner_phone_number`,`created_by`,`created_at`,`updated_by`,`updated_at`) values 
(2,'123','123','Lahore','Punjab','Pakistan','123','123@123.com','123','1','2021-09-27 03:09:56','1','2021-09-27 03:09:09');

/*Table structure for table `transporter` */

DROP TABLE IF EXISTS `transporter`;

CREATE TABLE `transporter` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `transporter_name` varchar(255) NOT NULL,
  `transporter_address` text NOT NULL,
  `transporter_country` varchar(255) NOT NULL,
  `transporter_state` varchar(255) NOT NULL,
  `transporter_city` varchar(255) NOT NULL,
  `transporter_email_address` varchar(255) NOT NULL,
  `transporter_phone_number` varchar(255) NOT NULL,
  `transporter_score` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_by` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `transporter` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
