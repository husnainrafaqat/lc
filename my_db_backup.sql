#
# TABLE STRUCTURE FOR: ci_activity_log
#

DROP TABLE IF EXISTS `ci_activity_log`;

CREATE TABLE `ci_activity_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `activity_id` tinyint(4) NOT NULL,
  `user_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: ci_activity_status
#

DROP TABLE IF EXISTS `ci_activity_status`;

CREATE TABLE `ci_activity_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO `ci_activity_status` (`id`, `description`) VALUES (1, 'User Created');
INSERT INTO `ci_activity_status` (`id`, `description`) VALUES (2, 'User Edited');
INSERT INTO `ci_activity_status` (`id`, `description`) VALUES (3, 'User Deleted');
INSERT INTO `ci_activity_status` (`id`, `description`) VALUES (4, 'User Created');
INSERT INTO `ci_activity_status` (`id`, `description`) VALUES (5, 'User Edited');
INSERT INTO `ci_activity_status` (`id`, `description`) VALUES (6, 'User Deleted');
INSERT INTO `ci_activity_status` (`id`, `description`) VALUES (7, 'Invoice Created');
INSERT INTO `ci_activity_status` (`id`, `description`) VALUES (8, 'Invoice Edited');
INSERT INTO `ci_activity_status` (`id`, `description`) VALUES (9, 'Invoice Deleted');


#
# TABLE STRUCTURE FOR: ci_admin
#

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

INSERT INTO `ci_admin` (`admin_id`, `admin_role_id`, `username`, `firstname`, `lastname`, `email`, `mobile_no`, `image`, `password`, `last_login`, `is_verify`, `is_admin`, `is_active`, `is_supper`, `token`, `password_reset_code`, `last_ip`, `created_at`, `updated_at`, `created_by`, `updated_by`, `parentId`) VALUES (1, 1, 'husnain.rafaqat', 'Husnain', 'Rafaqat', 'husnain.rafaqat@gmail.com', '12345', '', '$2y$10$8WjFb/bAdZxOB1zUi6/2W.NQp60/ImaWOgNMwx5TNasqQ.vASQOXq', '0000-00-00 00:00:00', 1, 1, 1, 1, '', '8e6b42f1644ecb1327dc03ab345e618b', '', '2019-01-16 06:01:58', '2021-07-14 00:00:00', NULL, NULL, NULL);
INSERT INTO `ci_admin` (`admin_id`, `admin_role_id`, `username`, `firstname`, `lastname`, `email`, `mobile_no`, `image`, `password`, `last_login`, `is_verify`, `is_admin`, `is_active`, `is_supper`, `token`, `password_reset_code`, `last_ip`, `created_at`, `updated_at`, `created_by`, `updated_by`, `parentId`) VALUES (41, 2, 'nasir.rao', 'Nasir', 'Rao', 'rao.nasir@live.com', '12345', '', '$2y$10$v2P7L8GH1Zocj8ru1aT.d.eSdOZXi8mMxPix.94dCfuXgiRHlavUu', '0000-00-00 00:00:00', 1, 1, 1, 0, '', '', '', '2021-09-24 00:00:00', '2021-09-24 00:00:00', 1, NULL, 0);
INSERT INTO `ci_admin` (`admin_id`, `admin_role_id`, `username`, `firstname`, `lastname`, `email`, `mobile_no`, `image`, `password`, `last_login`, `is_verify`, `is_admin`, `is_active`, `is_supper`, `token`, `password_reset_code`, `last_ip`, `created_at`, `updated_at`, `created_by`, `updated_by`, `parentId`) VALUES (42, 2, 'asif.zahoor', 'Asif', 'Zahoor', 'asif.zahoor@gmail.com', '12345', '', '$2y$10$CFVMSoi1r3bxZLaGui/Q9O1XCJlBkafhrMAPWiBM7RCEg1q08M.S6', '0000-00-00 00:00:00', 1, 1, 1, 0, '', '', '', '2021-09-24 00:00:00', '2021-09-24 00:00:00', 1, NULL, 0);


#
# TABLE STRUCTURE FOR: ci_admin_roles
#

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

INSERT INTO `ci_admin_roles` (`admin_role_id`, `admin_role_title`, `admin_role_status`, `admin_role_created_by`, `admin_role_created_on`, `admin_role_modified_by`, `admin_role_modified_on`) VALUES (1, 'Super Admin', 1, 0, '2018-03-15 12:48:04', 0, '2018-03-17 12:53:16');
INSERT INTO `ci_admin_roles` (`admin_role_id`, `admin_role_title`, `admin_role_status`, `admin_role_created_by`, `admin_role_created_on`, `admin_role_modified_by`, `admin_role_modified_on`) VALUES (2, 'Admin', 1, 0, '2018-03-15 12:53:19', 0, '2019-01-26 08:27:34');


#
# TABLE STRUCTURE FOR: ci_cities
#

DROP TABLE IF EXISTS `ci_cities`;

CREATE TABLE `ci_cities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `state_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO `ci_cities` (`id`, `name`, `slug`, `state_id`, `status`) VALUES (1, 'Lahore', 'lahore', 6, 1);
INSERT INTO `ci_cities` (`id`, `name`, `slug`, `state_id`, `status`) VALUES (2, 'Rawalpindi', 'rawalpindi', 6, 1);
INSERT INTO `ci_cities` (`id`, `name`, `slug`, `state_id`, `status`) VALUES (3, 'Islamabad', 'islamabad', 2, 1);
INSERT INTO `ci_cities` (`id`, `name`, `slug`, `state_id`, `status`) VALUES (4, 'Karachi', 'karachi', 7, 1);
INSERT INTO `ci_cities` (`id`, `name`, `slug`, `state_id`, `status`) VALUES (5, 'Peshawar', 'peshawar', 4, 1);
INSERT INTO `ci_cities` (`id`, `name`, `slug`, `state_id`, `status`) VALUES (6, 'Quetta', 'quetta', 1, 1);


#
# TABLE STRUCTURE FOR: ci_companies
#

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

INSERT INTO `ci_companies` (`id`, `name`, `email`, `mobile_no`, `address1`, `address2`, `created_date`) VALUES (9, 'Codeglamour', 'codeglamour1@gmail.com', '44785566952', '27 new jersey - Level 58 - CA 444 United State ', '', '2019-11-17 10:11:52');
INSERT INTO `ci_companies` (`id`, `name`, `email`, `mobile_no`, `address1`, `address2`, `created_date`) VALUES (8, 'Codeglamour', 'codeglamour1@gmail.com', '44785566952', '27 new jersey - Level 58 - CA 444 United State ', '', '2018-04-26 09:04:30');
INSERT INTO `ci_companies` (`id`, `name`, `email`, `mobile_no`, `address1`, `address2`, `created_date`) VALUES (7, 'Codeglamour', 'codeglamour1@gmail.com', '44785566952', '27 new jersey - Level 58 - CA 444 United State ', '', '2019-03-13 10:03:41');
INSERT INTO `ci_companies` (`id`, `name`, `email`, `mobile_no`, `address1`, `address2`, `created_date`) VALUES (6, 'Codeglamour', 'codeglamour1@gmail.com', '44785566952', '27 new jersey - Level 58 - CA 444  United State LLC', '', '2017-12-11 08:12:15');
INSERT INTO `ci_companies` (`id`, `name`, `email`, `mobile_no`, `address1`, `address2`, `created_date`) VALUES (10, 'Codeglamour', 'codeglamour1@gmail.com', '44785566952', '27 new jersey - Level 58 - CA 444 United State ', '', '2019-01-27 10:01:18');
INSERT INTO `ci_companies` (`id`, `name`, `email`, `mobile_no`, `address1`, `address2`, `created_date`) VALUES (11, 'Codeglamour', 'codeglamour1@gmail.com', '44785566952', '27 new jersey - Level 58 - CA 444 United State ', '', '2019-11-26 09:11:45');
INSERT INTO `ci_companies` (`id`, `name`, `email`, `mobile_no`, `address1`, `address2`, `created_date`) VALUES (12, 'Codeglamour', 'codeglamour1@gmail.com', '44785566952', '27 new jersey - Level 58 - CA 444 United State ', '', '2019-11-26 09:11:48');
INSERT INTO `ci_companies` (`id`, `name`, `email`, `mobile_no`, `address1`, `address2`, `created_date`) VALUES (13, 'Codeglamour', 'codeglamour1@gmail.com', '44785566952', '27 new jersey - Level 58 - CA 444 United State ', '', '2019-11-26 09:11:50');
INSERT INTO `ci_companies` (`id`, `name`, `email`, `mobile_no`, `address1`, `address2`, `created_date`) VALUES (14, 'Codeglamour', 'codeglamour1@gmail.com', '44785566952', '27 new jersey - Level 58 - CA 444 United State ', '', '2019-11-26 09:11:42');


#
# TABLE STRUCTURE FOR: ci_countries
#

DROP TABLE IF EXISTS `ci_countries`;

CREATE TABLE `ci_countries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sortname` varchar(3) NOT NULL,
  `name` varchar(150) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `phonecode` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `ci_countries` (`id`, `sortname`, `name`, `slug`, `phonecode`, `status`) VALUES (1, 'PK', 'Pakistan', 'pakistan', 92, 1);


#
# TABLE STRUCTURE FOR: ci_email_template_variables
#

DROP TABLE IF EXISTS `ci_email_template_variables`;

CREATE TABLE `ci_email_template_variables` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `template_id` int(11) NOT NULL,
  `variable_name` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO `ci_email_template_variables` (`id`, `template_id`, `variable_name`) VALUES (1, 1, '{FULLNAME}');
INSERT INTO `ci_email_template_variables` (`id`, `template_id`, `variable_name`) VALUES (2, 1, '{VERIFICATION_LINK}');
INSERT INTO `ci_email_template_variables` (`id`, `template_id`, `variable_name`) VALUES (3, 2, '{RESET_LINK}');
INSERT INTO `ci_email_template_variables` (`id`, `template_id`, `variable_name`) VALUES (4, 2, '{FULLNAME}');


#
# TABLE STRUCTURE FOR: ci_email_templates
#

DROP TABLE IF EXISTS `ci_email_templates`;

CREATE TABLE `ci_email_templates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `last_update` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO `ci_email_templates` (`id`, `name`, `slug`, `subject`, `body`, `last_update`) VALUES (1, 'Email Verification', 'email-verification', 'Activate Your Account', '<p></p>\n\n<p>Hi  <b>{FULLNAME}</b>,<br><br></p><p>Welcome to Chak92 LMS!<br>Active your account with the link above and start using our portal.</p><p>To verify your email, please click the link below:<br> {VERIFICATION_LINK}</p><p>\n\n</p><div><b>Regards,</b></div><div><b>Team</b></div><div><b>CHAK92</b></div>\n\n<p></p>', '2021-08-08 23:14:23');
INSERT INTO `ci_email_templates` (`id`, `name`, `slug`, `subject`, `body`, `last_update`) VALUES (2, 'Forget Password', 'forget-password', 'Recover your password', '<p>\n\n</p><p>Hi  <b>{FULLNAME}</b>,<br><br></p><p>Welcome to Chak92 LMS!<br></p><p>We have received a request to reset your password. If you did not initiate this request, you can simply ignore this message and no action will be taken.</p><p><br>To reset your password, please click the link below:<br> {RESET_LINK}</p>\n\n<p></p>', '2021-08-08 23:15:07');
INSERT INTO `ci_email_templates` (`id`, `name`, `slug`, `subject`, `body`, `last_update`) VALUES (3, 'General Notification', '', 'Test Email', '<p>This is a test email.</p>', '2021-08-08 23:15:24');


#
# TABLE STRUCTURE FOR: ci_form_fields
#

DROP TABLE IF EXISTS `ci_form_fields`;

CREATE TABLE `ci_form_fields` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

INSERT INTO `ci_form_fields` (`id`, `type`) VALUES (1, 'text');
INSERT INTO `ci_form_fields` (`id`, `type`) VALUES (2, 'number');
INSERT INTO `ci_form_fields` (`id`, `type`) VALUES (3, 'email');
INSERT INTO `ci_form_fields` (`id`, `type`) VALUES (4, 'textarea');
INSERT INTO `ci_form_fields` (`id`, `type`) VALUES (5, 'file');
INSERT INTO `ci_form_fields` (`id`, `type`) VALUES (6, 'select');
INSERT INTO `ci_form_fields` (`id`, `type`) VALUES (7, 'date');


#
# TABLE STRUCTURE FOR: ci_general_settings
#

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

INSERT INTO `ci_general_settings` (`id`, `favicon`, `logo`, `application_name`, `timezone`, `currency`, `default_language`, `copyright`, `email_from`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `facebook_link`, `twitter_link`, `google_link`, `youtube_link`, `linkedin_link`, `instagram_link`, `recaptcha_secret_key`, `recaptcha_site_key`, `recaptcha_lang`, `created_date`, `updated_date`) VALUES (1, '', '', 'LC', 'Asia/Karachi', 'PKR', 2, 'Copyright © 2021 All rights reserved.', '', '', 0, '', '', 'https://facebook.com', 'https://twitter.com', 'https://google.com', 'https://youtube.com', 'https://linkedin.com', 'https://instagram.com', '', '', 'en', '2021-09-24 00:00:00', '2021-09-24 00:00:00');


#
# TABLE STRUCTURE FOR: ci_language
#

DROP TABLE IF EXISTS `ci_language`;

CREATE TABLE `ci_language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `short_name` varchar(15) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO `ci_language` (`id`, `name`, `short_name`, `status`, `created_at`) VALUES (2, 'English', 'en', 1, '2019-09-16 01:13:17');


#
# TABLE STRUCTURE FOR: ci_module_form
#

DROP TABLE IF EXISTS `ci_module_form`;

CREATE TABLE `ci_module_form` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `module_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `is_required` int(11) NOT NULL,
  `sort_order` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

INSERT INTO `ci_module_form` (`id`, `module_id`, `name`, `type`, `is_required`, `sort_order`) VALUES (1, 34, 'Shipper Id', 'number', 1, 1);
INSERT INTO `ci_module_form` (`id`, `module_id`, `name`, `type`, `is_required`, `sort_order`) VALUES (2, 34, 'Shipper Name', 'text', 0, 2);
INSERT INTO `ci_module_form` (`id`, `module_id`, `name`, `type`, `is_required`, `sort_order`) VALUES (3, 34, 'Shipper email Address', 'email', 0, 3);


#
# TABLE STRUCTURE FOR: ci_payments
#

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

INSERT INTO `ci_payments` (`id`, `admin_id`, `user_id`, `company_id`, `invoice_no`, `txn_id`, `items_detail`, `sub_total`, `total_tax`, `discount`, `grand_total`, `currency`, `payment_method`, `payment_status`, `client_note`, `termsncondition`, `due_date`, `created_date`, `updated_date`) VALUES (4, 31, 3, 9, 'INV-2001', '', 'a:5:{s:19:\"product_description\";a:1:{i:0;s:17:\"Samsung Galaxy S3\";}s:8:\"quantity\";a:1:{i:0;s:1:\"1\";}s:5:\"price\";a:1:{i:0;s:4:\"1000\";}s:3:\"tax\";a:1:{i:0;s:1:\"2\";}s:5:\"total\";a:1:{i:0;s:7:\"1000.00\";}}', '1000.00', '20.00', '5.00', '1015.00', 'USD', '', 'Paid', 'Will be delivered within next 24 hours', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2017-11-29', '2017-12-06', '2019-11-17');
INSERT INTO `ci_payments` (`id`, `admin_id`, `user_id`, `company_id`, `invoice_no`, `txn_id`, `items_detail`, `sub_total`, `total_tax`, `discount`, `grand_total`, `currency`, `payment_method`, `payment_status`, `client_note`, `termsncondition`, `due_date`, `created_date`, `updated_date`) VALUES (2, 24, 32, 7, 'INV-1001', '', 'a:5:{s:19:\"product_description\";a:1:{i:0;s:9:\"Galaxy S6\";}s:8:\"quantity\";a:1:{i:0;s:1:\"1\";}s:5:\"price\";a:1:{i:0;s:4:\"1000\";}s:3:\"tax\";a:1:{i:0;s:1:\"5\";}s:5:\"total\";a:1:{i:0;s:7:\"1000.00\";}}', '1000.00', '50.00', '2.00', '1048.00', 'USD', '', 'Paid', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2017-12-20', '2017-12-12', '2019-03-13');
INSERT INTO `ci_payments` (`id`, `admin_id`, `user_id`, `company_id`, `invoice_no`, `txn_id`, `items_detail`, `sub_total`, `total_tax`, `discount`, `grand_total`, `currency`, `payment_method`, `payment_status`, `client_note`, `termsncondition`, `due_date`, `created_date`, `updated_date`) VALUES (3, 3, 33, 8, 'INV-2002', '', 'a:5:{s:19:\"product_description\";a:1:{i:0;s:17:\"Samsung Galaxy S3\";}s:8:\"quantity\";a:1:{i:0;s:1:\"1\";}s:5:\"price\";a:1:{i:0;s:2:\"10\";}s:3:\"tax\";a:1:{i:0;s:1:\"2\";}s:5:\"total\";a:1:{i:0;s:5:\"10.00\";}}', '10.00', '0.20', '1.00', '9.20', 'USD', '', 'Paid', 'test', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2017-12-06', '2017-12-06', '2018-04-26');
INSERT INTO `ci_payments` (`id`, `admin_id`, `user_id`, `company_id`, `invoice_no`, `txn_id`, `items_detail`, `sub_total`, `total_tax`, `discount`, `grand_total`, `currency`, `payment_method`, `payment_status`, `client_note`, `termsncondition`, `due_date`, `created_date`, `updated_date`) VALUES (5, 24, 3, 10, '10021', '', 'a:5:{s:19:\"product_description\";a:2:{i:0;s:9:\"Galaxy S7\";i:1;s:9:\"Galaxy S8\";}s:8:\"quantity\";a:2:{i:0;s:1:\"1\";i:1;s:1:\"3\";}s:5:\"price\";a:2:{i:0;s:3:\"300\";i:1;s:3:\"700\";}s:3:\"tax\";a:2:{i:0;s:1:\"0\";i:1;s:1:\"2\";}s:5:\"total\";a:2:{i:0;s:6:\"300.00\";i:1;s:7:\"2100.00\";}}', '2400.00', '42.00', '1.00', '2441.00', 'USD', '', 'Paid', 'Will be delivered on next Friday', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2018-04-20', '2018-04-11', '2019-01-27');
INSERT INTO `ci_payments` (`id`, `admin_id`, `user_id`, `company_id`, `invoice_no`, `txn_id`, `items_detail`, `sub_total`, `total_tax`, `discount`, `grand_total`, `currency`, `payment_method`, `payment_status`, `client_note`, `termsncondition`, `due_date`, `created_date`, `updated_date`) VALUES (6, 31, 3, 11, 'INV-100012', '', 'a:5:{s:19:\"product_description\";a:1:{i:0;s:9:\"dfwwertw`\";}s:8:\"quantity\";a:1:{i:0;s:1:\"1\";}s:5:\"price\";a:1:{i:0;s:3:\"300\";}s:3:\"tax\";a:1:{i:0;s:2:\"90\";}s:5:\"total\";a:1:{i:0;s:6:\"300.00\";}}', '300.00', '270.00', '0.00', '570.00', 'USD', '', 'Paid', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2019-11-06', '2019-11-04', NULL);
INSERT INTO `ci_payments` (`id`, `admin_id`, `user_id`, `company_id`, `invoice_no`, `txn_id`, `items_detail`, `sub_total`, `total_tax`, `discount`, `grand_total`, `currency`, `payment_method`, `payment_status`, `client_note`, `termsncondition`, `due_date`, `created_date`, `updated_date`) VALUES (7, 31, 3, 12, 'INV0991', '', 'a:5:{s:19:\"product_description\";a:1:{i:0;s:7:\"asdfasd\";}s:8:\"quantity\";a:1:{i:0;s:1:\"3\";}s:5:\"price\";a:1:{i:0;s:2:\"20\";}s:3:\"tax\";a:1:{i:0;s:1:\"0\";}s:5:\"total\";a:1:{i:0;s:5:\"60.00\";}}', '60.00', '0.00', '0.00', '60.00', 'USD', '', 'Unpaid', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2019-10-29', '2019-04-25', NULL);
INSERT INTO `ci_payments` (`id`, `admin_id`, `user_id`, `company_id`, `invoice_no`, `txn_id`, `items_detail`, `sub_total`, `total_tax`, `discount`, `grand_total`, `currency`, `payment_method`, `payment_status`, `client_note`, `termsncondition`, `due_date`, `created_date`, `updated_date`) VALUES (8, 31, 33, 13, '222', '', 'a:5:{s:19:\"product_description\";a:1:{i:0;s:6:\"asdfq`\";}s:8:\"quantity\";a:1:{i:0;s:2:\"27\";}s:5:\"price\";a:1:{i:0;s:2:\"50\";}s:3:\"tax\";a:1:{i:0;s:1:\"0\";}s:5:\"total\";a:1:{i:0;s:7:\"1350.00\";}}', '1350.00', '0.00', '0.00', '1350.00', 'USD', '', 'Unpaid', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2019-10-30', '2019-04-10', NULL);
INSERT INTO `ci_payments` (`id`, `admin_id`, `user_id`, `company_id`, `invoice_no`, `txn_id`, `items_detail`, `sub_total`, `total_tax`, `discount`, `grand_total`, `currency`, `payment_method`, `payment_status`, `client_note`, `termsncondition`, `due_date`, `created_date`, `updated_date`) VALUES (9, 31, 33, 14, '1333', '', 'a:5:{s:19:\"product_description\";a:1:{i:0;s:7:\"asdfasd\";}s:8:\"quantity\";a:1:{i:0;s:2:\"30\";}s:5:\"price\";a:1:{i:0;s:2:\"59\";}s:3:\"tax\";a:1:{i:0;s:1:\"0\";}s:5:\"total\";a:1:{i:0;s:7:\"1770.00\";}}', '1770.00', '0.00', '0.00', '1770.00', 'USD', '', 'Unpaid', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2019-11-14', '2019-11-01', NULL);


#
# TABLE STRUCTURE FOR: ci_uploaded_files
#

DROP TABLE IF EXISTS `ci_uploaded_files`;

CREATE TABLE `ci_uploaded_files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(225) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=latin1;

INSERT INTO `ci_uploaded_files` (`id`, `name`, `created_at`) VALUES (81, 'uploads/0fe0382a27bbc4336939a4dd4b3acee2.jpg', '2019-11-26 21:07:49');


#
# TABLE STRUCTURE FOR: ci_users_old
#

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

INSERT INTO `ci_users_old` (`id`, `username`, `firstname`, `lastname`, `email`, `mobile_no`, `password`, `address`, `role`, `is_active`, `is_verify`, `is_admin`, `token`, `password_reset_code`, `last_ip`, `created_at`, `updated_at`) VALUES (3, 'admin', 'admin', 'admin', 'admin@admin.com', '12345', '$2y$10$qlAzDhBEqkKwP3OykqA7N.ZQk6T67fxD9RHfdv3zToxa9Mtwu9C/e', '27 new jersey - Level 58 - CA 444 \r\nUnited State ', 1, 1, 1, 1, '', '', '', '2017-09-29 10:09:44', '2017-12-14 10:12:41');
INSERT INTO `ci_users_old` (`id`, `username`, `firstname`, `lastname`, `email`, `mobile_no`, `password`, `address`, `role`, `is_active`, `is_verify`, `is_admin`, `token`, `password_reset_code`, `last_ip`, `created_at`, `updated_at`) VALUES (32, 'user', 'user', 'user', 'user@user.com', '44897866462', '$2y$10$sU5msVdifYie7cZbCEnyku6hLH8Sef0VCHqO9UIOg6rsBsDtsLcyS', '', 1, 1, 1, 0, '352fe25daf686bdb4edca223c921acea', '', '', '2018-04-24 07:04:07', '2019-01-26 03:01:30');
INSERT INTO `ci_users_old` (`id`, `username`, `firstname`, `lastname`, `email`, `mobile_no`, `password`, `address`, `role`, `is_active`, `is_verify`, `is_admin`, `token`, `password_reset_code`, `last_ip`, `created_at`, `updated_at`) VALUES (33, 'john123', 'john', 'smith', 'johnsmith@gmail.com', '445889654656', '$2y$10$qlAzDhBEqkKwP3OykqA7N.ZQk6T67fxD9RHfdv3zToxa9Mtwu9C/e', 'USA', 7, 1, 1, 0, '', '', '', '2018-04-25 06:04:25', '2019-01-24 04:01:33');
INSERT INTO `ci_users_old` (`id`, `username`, `firstname`, `lastname`, `email`, `mobile_no`, `password`, `address`, `role`, `is_active`, `is_verify`, `is_admin`, `token`, `password_reset_code`, `last_ip`, `created_at`, `updated_at`) VALUES (38, 'john', 'smith', 'johan', 'johnsmith@gmail.com', '123456', '$2y$10$5wXvKkhMTEatZ7aUHE/RU.lQbeXdURME8Br9Noxn802epBPoFz7wu', 'asdfdasfdsfds', 1, 1, 0, 0, '', '', '', '2019-07-15 09:07:24', '2019-07-15 09:07:24');
INSERT INTO `ci_users_old` (`id`, `username`, `firstname`, `lastname`, `email`, `mobile_no`, `password`, `address`, `role`, `is_active`, `is_verify`, `is_admin`, `token`, `password_reset_code`, `last_ip`, `created_at`, `updated_at`) VALUES (39, 'techesprit', 'zain', 'khan', 'zain@gmail.com', '03004596000', '$2y$10$F14///ug4J6WNd0selNJguZ2ib4ugER8u4n09Z787nz2g6j4gJZva', '111asdfasd', 1, 1, 0, 0, '', '', '', '2019-11-25 00:00:00', '2019-11-25 00:00:00');
INSERT INTO `ci_users_old` (`id`, `username`, `firstname`, `lastname`, `email`, `mobile_no`, `password`, `address`, `role`, `is_active`, `is_verify`, `is_admin`, `token`, `password_reset_code`, `last_ip`, `created_at`, `updated_at`) VALUES (40, 'techesprit', 'zain', 'khan', 'zain@gmail.com', '03004596000', '$2y$10$UbljVrMhHmqRYhJBumzmVOfXYmaOeZRMAEkBn0uF68Nj3VL4ACiHC', '111asdfasd', 1, 1, 0, 0, '', '', '', '2019-11-25 00:00:00', '2019-11-25 00:00:00');
INSERT INTO `ci_users_old` (`id`, `username`, `firstname`, `lastname`, `email`, `mobile_no`, `password`, `address`, `role`, `is_active`, `is_verify`, `is_admin`, `token`, `password_reset_code`, `last_ip`, `created_at`, `updated_at`) VALUES (41, 'husnain', 'Hus', 'Raf', 'husnain.dev1@gmail.com', '12345', '$2y$10$DRhyvfPCiOZAldVHEdpHuOh84Ro/VIaqIksPwaz.KLwB/54DllKkC', 'Test', 1, 1, 1, 0, '', '', '', '2021-07-14 00:00:00', '2021-07-14 00:00:00');


#
# TABLE STRUCTURE FOR: module
#

DROP TABLE IF EXISTS `module`;

CREATE TABLE `module` (
  `module_id` int(11) NOT NULL AUTO_INCREMENT,
  `module_name` varchar(255) NOT NULL,
  `controller_name` varchar(255) NOT NULL,
  `fa_icon` varchar(100) NOT NULL,
  `operation` text NOT NULL,
  `sort_order` tinyint(4) NOT NULL,
  `status` enum('A','D') DEFAULT 'A',
  PRIMARY KEY (`module_id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

INSERT INTO `module` (`module_id`, `module_name`, `controller_name`, `fa_icon`, `operation`, `sort_order`, `status`) VALUES (1, 'users', 'admin', 'fa-users', 'view|add|edit|delete|change_status|access', 3, 'A');
INSERT INTO `module` (`module_id`, `module_name`, `controller_name`, `fa_icon`, `operation`, `sort_order`, `status`) VALUES (2, 'role_and_permissions', 'admin_roles', 'fa-book', 'view|add|edit|delete|change_status|access', 4, 'A');
INSERT INTO `module` (`module_id`, `module_name`, `controller_name`, `fa_icon`, `operation`, `sort_order`, `status`) VALUES (3, 'users2', 'users', 'fa-users', 'view|add|edit|delete|change_status|access', 4, 'D');
INSERT INTO `module` (`module_id`, `module_name`, `controller_name`, `fa_icon`, `operation`, `sort_order`, `status`) VALUES (7, 'backup_and_export', 'export', 'fa-database', 'access', 12, 'A');
INSERT INTO `module` (`module_id`, `module_name`, `controller_name`, `fa_icon`, `operation`, `sort_order`, `status`) VALUES (8, 'settings', 'general_settings', 'fa-cogs', 'view|add|edit|access', 13, 'A');
INSERT INTO `module` (`module_id`, `module_name`, `controller_name`, `fa_icon`, `operation`, `sort_order`, `status`) VALUES (9, 'dashboard', 'dashboard', 'fa-dashboard', 'view|index_2|index_3|access', 1, 'A');
INSERT INTO `module` (`module_id`, `module_name`, `controller_name`, `fa_icon`, `operation`, `sort_order`, `status`) VALUES (10, 'codeigniter_examples', 'example', 'fa-snowflake-o', 'access', 6, 'D');
INSERT INTO `module` (`module_id`, `module_name`, `controller_name`, `fa_icon`, `operation`, `sort_order`, `status`) VALUES (11, 'invoicing_system', 'invoices', 'fa-files-o', 'access', 9, 'D');
INSERT INTO `module` (`module_id`, `module_name`, `controller_name`, `fa_icon`, `operation`, `sort_order`, `status`) VALUES (12, 'database_joins_example', 'joins', 'fa-external-link-square', 'access', 7, 'D');
INSERT INTO `module` (`module_id`, `module_name`, `controller_name`, `fa_icon`, `operation`, `sort_order`, `status`) VALUES (13, 'language_setting', 'languages', 'fa-language', 'access', 14, 'D');
INSERT INTO `module` (`module_id`, `module_name`, `controller_name`, `fa_icon`, `operation`, `sort_order`, `status`) VALUES (14, 'locations', 'location', 'fa-map-pin', 'access', 11, 'D');
INSERT INTO `module` (`module_id`, `module_name`, `controller_name`, `fa_icon`, `operation`, `sort_order`, `status`) VALUES (15, 'widgets', 'widgets', 'fa-th', 'access', 19, 'D');
INSERT INTO `module` (`module_id`, `module_name`, `controller_name`, `fa_icon`, `operation`, `sort_order`, `status`) VALUES (16, 'charts', 'charts', 'fa-line-chart', 'access', 17, 'D');
INSERT INTO `module` (`module_id`, `module_name`, `controller_name`, `fa_icon`, `operation`, `sort_order`, `status`) VALUES (17, 'ui_elements', 'ui', 'fa-tree', 'access', 18, 'D');
INSERT INTO `module` (`module_id`, `module_name`, `controller_name`, `fa_icon`, `operation`, `sort_order`, `status`) VALUES (18, 'forms', 'forms', 'fa-edit', 'access', 20, 'D');
INSERT INTO `module` (`module_id`, `module_name`, `controller_name`, `fa_icon`, `operation`, `sort_order`, `status`) VALUES (19, 'tables', 'tables', 'fa-table', 'access', 21, 'D');
INSERT INTO `module` (`module_id`, `module_name`, `controller_name`, `fa_icon`, `operation`, `sort_order`, `status`) VALUES (21, 'mailbox', 'mailbox', 'fa-envelope-o', 'access', 23, 'D');
INSERT INTO `module` (`module_id`, `module_name`, `controller_name`, `fa_icon`, `operation`, `sort_order`, `status`) VALUES (22, 'pages', 'pages', 'fa-book', 'access', 24, 'D');
INSERT INTO `module` (`module_id`, `module_name`, `controller_name`, `fa_icon`, `operation`, `sort_order`, `status`) VALUES (23, 'extras', 'extras', 'fa-plus-square-o', 'access', 25, 'D');
INSERT INTO `module` (`module_id`, `module_name`, `controller_name`, `fa_icon`, `operation`, `sort_order`, `status`) VALUES (25, 'profile', 'profile', 'fa-user', 'access', 2, 'A');
INSERT INTO `module` (`module_id`, `module_name`, `controller_name`, `fa_icon`, `operation`, `sort_order`, `status`) VALUES (26, 'activity_log', 'activity', 'fa-flag-o', 'access', 11, 'A');
INSERT INTO `module` (`module_id`, `module_name`, `controller_name`, `fa_icon`, `operation`, `sort_order`, `status`) VALUES (34, 'Supplier', 'supplier', 'fa fa-list', 'add|edit|delete|access', 5, 'A');


#
# TABLE STRUCTURE FOR: module_access
#

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

INSERT INTO `module_access` (`id`, `admin_role_id`, `module`, `operation`, `status`) VALUES (1, 1, 'users', 'view', 'active');
INSERT INTO `module_access` (`id`, `admin_role_id`, `module`, `operation`, `status`) VALUES (2, 1, 'users', 'add', 'active');
INSERT INTO `module_access` (`id`, `admin_role_id`, `module`, `operation`, `status`) VALUES (3, 1, 'users', 'edit', 'active');
INSERT INTO `module_access` (`id`, `admin_role_id`, `module`, `operation`, `status`) VALUES (5, 1, 'users', 'access', 'active');
INSERT INTO `module_access` (`id`, `admin_role_id`, `module`, `operation`, `status`) VALUES (6, 1, 'users', 'change_status', 'active');
INSERT INTO `module_access` (`id`, `admin_role_id`, `module`, `operation`, `status`) VALUES (8, 1, 'general_settings', 'view', 'active');
INSERT INTO `module_access` (`id`, `admin_role_id`, `module`, `operation`, `status`) VALUES (9, 1, 'general_settings', 'add', 'active');
INSERT INTO `module_access` (`id`, `admin_role_id`, `module`, `operation`, `status`) VALUES (10, 1, 'general_settings', 'edit', 'active');
INSERT INTO `module_access` (`id`, `admin_role_id`, `module`, `operation`, `status`) VALUES (11, 1, 'general_settings', 'access', 'active');
INSERT INTO `module_access` (`id`, `admin_role_id`, `module`, `operation`, `status`) VALUES (36, 2, 'calendar', 'access', 'active');
INSERT INTO `module_access` (`id`, `admin_role_id`, `module`, `operation`, `status`) VALUES (55, 5, 'profile', 'access', 'active');
INSERT INTO `module_access` (`id`, `admin_role_id`, `module`, `operation`, `status`) VALUES (57, 5, 'users', 'view', 'active');
INSERT INTO `module_access` (`id`, `admin_role_id`, `module`, `operation`, `status`) VALUES (58, 5, 'users', 'add', 'active');
INSERT INTO `module_access` (`id`, `admin_role_id`, `module`, `operation`, `status`) VALUES (59, 5, 'users', 'change_status', 'active');
INSERT INTO `module_access` (`id`, `admin_role_id`, `module`, `operation`, `status`) VALUES (61, 5, 'users', 'edit', 'active');
INSERT INTO `module_access` (`id`, `admin_role_id`, `module`, `operation`, `status`) VALUES (62, 5, 'users', 'delete', 'active');
INSERT INTO `module_access` (`id`, `admin_role_id`, `module`, `operation`, `status`) VALUES (65, 5, 'dashboard', 'access', 'active');
INSERT INTO `module_access` (`id`, `admin_role_id`, `module`, `operation`, `status`) VALUES (73, 5, 'dashboard', 'view', 'active');
INSERT INTO `module_access` (`id`, `admin_role_id`, `module`, `operation`, `status`) VALUES (83, 2, 'admin', 'view', 'active');
INSERT INTO `module_access` (`id`, `admin_role_id`, `module`, `operation`, `status`) VALUES (84, 2, 'admin', 'change_status', 'active');
INSERT INTO `module_access` (`id`, `admin_role_id`, `module`, `operation`, `status`) VALUES (85, 2, 'admin', 'add', 'active');
INSERT INTO `module_access` (`id`, `admin_role_id`, `module`, `operation`, `status`) VALUES (87, 2, 'admin', 'edit', 'active');
INSERT INTO `module_access` (`id`, `admin_role_id`, `module`, `operation`, `status`) VALUES (89, 2, 'admin', 'delete', 'active');
INSERT INTO `module_access` (`id`, `admin_role_id`, `module`, `operation`, `status`) VALUES (95, 6, 'dashboard', 'view', 'active');
INSERT INTO `module_access` (`id`, `admin_role_id`, `module`, `operation`, `status`) VALUES (96, 6, 'dashboard', 'access', 'active');
INSERT INTO `module_access` (`id`, `admin_role_id`, `module`, `operation`, `status`) VALUES (97, 6, 'profile', 'access', 'active');
INSERT INTO `module_access` (`id`, `admin_role_id`, `module`, `operation`, `status`) VALUES (103, 2, 'admin_roles', 'view', 'active');
INSERT INTO `module_access` (`id`, `admin_role_id`, `module`, `operation`, `status`) VALUES (104, 2, 'admin_roles', 'add', 'active');
INSERT INTO `module_access` (`id`, `admin_role_id`, `module`, `operation`, `status`) VALUES (105, 2, 'admin_roles', 'edit', 'active');
INSERT INTO `module_access` (`id`, `admin_role_id`, `module`, `operation`, `status`) VALUES (106, 2, 'admin_roles', 'delete', 'active');
INSERT INTO `module_access` (`id`, `admin_role_id`, `module`, `operation`, `status`) VALUES (109, 1, 'export', 'access', 'active');
INSERT INTO `module_access` (`id`, `admin_role_id`, `module`, `operation`, `status`) VALUES (110, 2, 'admin_roles', 'change_status', 'active');
INSERT INTO `module_access` (`id`, `admin_role_id`, `module`, `operation`, `status`) VALUES (111, 2, 'export', 'access', 'active');
INSERT INTO `module_access` (`id`, `admin_role_id`, `module`, `operation`, `status`) VALUES (112, 2, 'activity', 'access', 'active');
INSERT INTO `module_access` (`id`, `admin_role_id`, `module`, `operation`, `status`) VALUES (113, 2, 'general_settings', 'view', 'active');
INSERT INTO `module_access` (`id`, `admin_role_id`, `module`, `operation`, `status`) VALUES (114, 2, 'general_settings', 'access', 'active');
INSERT INTO `module_access` (`id`, `admin_role_id`, `module`, `operation`, `status`) VALUES (115, 2, 'general_settings', 'add', 'active');
INSERT INTO `module_access` (`id`, `admin_role_id`, `module`, `operation`, `status`) VALUES (116, 2, 'general_settings', 'edit', 'active');
INSERT INTO `module_access` (`id`, `admin_role_id`, `module`, `operation`, `status`) VALUES (117, 2, 'languages', 'access', 'active');
INSERT INTO `module_access` (`id`, `admin_role_id`, `module`, `operation`, `status`) VALUES (118, 2, 'admin_roles', 'access', 'active');
INSERT INTO `module_access` (`id`, `admin_role_id`, `module`, `operation`, `status`) VALUES (119, 2, 'admin', 'access', 'active');
INSERT INTO `module_access` (`id`, `admin_role_id`, `module`, `operation`, `status`) VALUES (120, 2, 'profile', 'access', 'active');
INSERT INTO `module_access` (`id`, `admin_role_id`, `module`, `operation`, `status`) VALUES (121, 2, 'dashboard', 'access', 'active');
INSERT INTO `module_access` (`id`, `admin_role_id`, `module`, `operation`, `status`) VALUES (122, 2, 'dashboard', 'view', 'active');
INSERT INTO `module_access` (`id`, `admin_role_id`, `module`, `operation`, `status`) VALUES (126, 2, 'location', 'access', 'active');
INSERT INTO `module_access` (`id`, `admin_role_id`, `module`, `operation`, `status`) VALUES (127, 7, 'dashboard', 'view', 'active');
INSERT INTO `module_access` (`id`, `admin_role_id`, `module`, `operation`, `status`) VALUES (128, 7, 'dashboard', 'access', 'active');
INSERT INTO `module_access` (`id`, `admin_role_id`, `module`, `operation`, `status`) VALUES (129, 7, 'profile', 'access', 'active');
INSERT INTO `module_access` (`id`, `admin_role_id`, `module`, `operation`, `status`) VALUES (155, 8, 'dashboard', 'view', 'active');
INSERT INTO `module_access` (`id`, `admin_role_id`, `module`, `operation`, `status`) VALUES (156, 8, 'dashboard', 'access', 'active');
INSERT INTO `module_access` (`id`, `admin_role_id`, `module`, `operation`, `status`) VALUES (157, 8, 'profile', 'access', 'active');
INSERT INTO `module_access` (`id`, `admin_role_id`, `module`, `operation`, `status`) VALUES (158, 8, 'admin', 'view', 'active');
INSERT INTO `module_access` (`id`, `admin_role_id`, `module`, `operation`, `status`) VALUES (159, 8, 'admin', 'add', 'active');
INSERT INTO `module_access` (`id`, `admin_role_id`, `module`, `operation`, `status`) VALUES (160, 8, 'admin', 'edit', 'active');
INSERT INTO `module_access` (`id`, `admin_role_id`, `module`, `operation`, `status`) VALUES (161, 8, 'admin', 'delete', 'active');
INSERT INTO `module_access` (`id`, `admin_role_id`, `module`, `operation`, `status`) VALUES (162, 8, 'admin', 'access', 'active');
INSERT INTO `module_access` (`id`, `admin_role_id`, `module`, `operation`, `status`) VALUES (163, 8, 'admin', 'change_status', 'active');
INSERT INTO `module_access` (`id`, `admin_role_id`, `module`, `operation`, `status`) VALUES (169, 9, 'dashboard', 'view', 'active');
INSERT INTO `module_access` (`id`, `admin_role_id`, `module`, `operation`, `status`) VALUES (170, 9, 'dashboard', 'access', 'active');
INSERT INTO `module_access` (`id`, `admin_role_id`, `module`, `operation`, `status`) VALUES (171, 9, 'profile', 'access', 'active');


#
# TABLE STRUCTURE FOR: sub_module
#

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
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=latin1;

INSERT INTO `sub_module` (`id`, `parent`, `name`, `link`, `sort_order`, `status`) VALUES (2, 2, 'module_setting', 'module', 1, 'active');
INSERT INTO `sub_module` (`id`, `parent`, `name`, `link`, `sort_order`, `status`) VALUES (3, 2, 'role_and_permissions', '', 2, 'active');
INSERT INTO `sub_module` (`id`, `parent`, `name`, `link`, `sort_order`, `status`) VALUES (4, 1, 'add_new_user', 'add', 2, 'active');
INSERT INTO `sub_module` (`id`, `parent`, `name`, `link`, `sort_order`, `status`) VALUES (6, 1, 'users_list', '', 1, 'active');
INSERT INTO `sub_module` (`id`, `parent`, `name`, `link`, `sort_order`, `status`) VALUES (26, 9, 'dashboard_v1', '', 1, 'inactive');
INSERT INTO `sub_module` (`id`, `parent`, `name`, `link`, `sort_order`, `status`) VALUES (27, 9, 'dashboard_v2', 'index_2', 2, 'inactive');
INSERT INTO `sub_module` (`id`, `parent`, `name`, `link`, `sort_order`, `status`) VALUES (28, 9, 'dashboard_v3', 'index_3', 3, 'inactive');
INSERT INTO `sub_module` (`id`, `parent`, `name`, `link`, `sort_order`, `status`) VALUES (30, 3, 'users2_list', '', 1, 'active');
INSERT INTO `sub_module` (`id`, `parent`, `name`, `link`, `sort_order`, `status`) VALUES (31, 3, 'add_new_user2', 'add', 2, 'active');
INSERT INTO `sub_module` (`id`, `parent`, `name`, `link`, `sort_order`, `status`) VALUES (32, 10, 'simple_datatable', 'simple_datatable', 1, 'active');
INSERT INTO `sub_module` (`id`, `parent`, `name`, `link`, `sort_order`, `status`) VALUES (33, 10, 'ajax_datatable', 'ajax_datatable', 2, 'active');
INSERT INTO `sub_module` (`id`, `parent`, `name`, `link`, `sort_order`, `status`) VALUES (34, 10, 'pagination', 'pagination', 3, 'active');
INSERT INTO `sub_module` (`id`, `parent`, `name`, `link`, `sort_order`, `status`) VALUES (35, 10, 'advance_search', 'advance_search', 4, 'active');
INSERT INTO `sub_module` (`id`, `parent`, `name`, `link`, `sort_order`, `status`) VALUES (36, 10, 'file_upload', 'file_upload', 5, 'active');
INSERT INTO `sub_module` (`id`, `parent`, `name`, `link`, `sort_order`, `status`) VALUES (37, 11, 'invoice_list', '', 1, 'active');
INSERT INTO `sub_module` (`id`, `parent`, `name`, `link`, `sort_order`, `status`) VALUES (38, 11, 'add_new_invoice', 'add', 2, 'active');
INSERT INTO `sub_module` (`id`, `parent`, `name`, `link`, `sort_order`, `status`) VALUES (39, 12, 'serverside_join', '', 1, 'active');
INSERT INTO `sub_module` (`id`, `parent`, `name`, `link`, `sort_order`, `status`) VALUES (40, 12, 'simple_join', 'simple', 2, 'active');
INSERT INTO `sub_module` (`id`, `parent`, `name`, `link`, `sort_order`, `status`) VALUES (41, 14, 'country', '', 1, 'active');
INSERT INTO `sub_module` (`id`, `parent`, `name`, `link`, `sort_order`, `status`) VALUES (42, 14, 'state', 'state', 2, 'active');
INSERT INTO `sub_module` (`id`, `parent`, `name`, `link`, `sort_order`, `status`) VALUES (43, 14, 'city', 'city', 3, 'active');
INSERT INTO `sub_module` (`id`, `parent`, `name`, `link`, `sort_order`, `status`) VALUES (44, 16, 'charts_js', 'chartjs', 1, 'active');
INSERT INTO `sub_module` (`id`, `parent`, `name`, `link`, `sort_order`, `status`) VALUES (45, 16, 'charts_flot', 'flot', 2, 'active');
INSERT INTO `sub_module` (`id`, `parent`, `name`, `link`, `sort_order`, `status`) VALUES (46, 16, 'charts_inline', 'inline', 3, 'active');
INSERT INTO `sub_module` (`id`, `parent`, `name`, `link`, `sort_order`, `status`) VALUES (47, 17, 'general', 'general', 1, 'active');
INSERT INTO `sub_module` (`id`, `parent`, `name`, `link`, `sort_order`, `status`) VALUES (48, 17, 'icons', 'icons', 2, 'active');
INSERT INTO `sub_module` (`id`, `parent`, `name`, `link`, `sort_order`, `status`) VALUES (49, 17, 'buttons', 'buttons', 3, 'active');
INSERT INTO `sub_module` (`id`, `parent`, `name`, `link`, `sort_order`, `status`) VALUES (50, 18, 'general_elements', 'general', 1, 'active');
INSERT INTO `sub_module` (`id`, `parent`, `name`, `link`, `sort_order`, `status`) VALUES (51, 18, 'advanced_elements', 'advanced', 2, 'active');
INSERT INTO `sub_module` (`id`, `parent`, `name`, `link`, `sort_order`, `status`) VALUES (52, 18, 'editors', 'editors', 3, 'active');
INSERT INTO `sub_module` (`id`, `parent`, `name`, `link`, `sort_order`, `status`) VALUES (53, 19, 'simple_tables', 'simple', 1, 'active');
INSERT INTO `sub_module` (`id`, `parent`, `name`, `link`, `sort_order`, `status`) VALUES (54, 19, 'data_tables', 'data', 2, 'active');
INSERT INTO `sub_module` (`id`, `parent`, `name`, `link`, `sort_order`, `status`) VALUES (55, 21, 'inbox', 'inbox', 1, 'active');
INSERT INTO `sub_module` (`id`, `parent`, `name`, `link`, `sort_order`, `status`) VALUES (56, 21, 'compose', 'compose', 2, 'active');
INSERT INTO `sub_module` (`id`, `parent`, `name`, `link`, `sort_order`, `status`) VALUES (57, 21, 'read', 'read_mail', 3, 'active');
INSERT INTO `sub_module` (`id`, `parent`, `name`, `link`, `sort_order`, `status`) VALUES (58, 22, 'invoice', 'invoice', 1, 'active');
INSERT INTO `sub_module` (`id`, `parent`, `name`, `link`, `sort_order`, `status`) VALUES (59, 22, 'profile', 'profile', 2, 'active');
INSERT INTO `sub_module` (`id`, `parent`, `name`, `link`, `sort_order`, `status`) VALUES (60, 22, 'login', 'login', 3, 'active');
INSERT INTO `sub_module` (`id`, `parent`, `name`, `link`, `sort_order`, `status`) VALUES (61, 22, 'register', 'register', 4, 'active');
INSERT INTO `sub_module` (`id`, `parent`, `name`, `link`, `sort_order`, `status`) VALUES (62, 22, 'lock_screen', 'Lockscreen', 4, 'active');
INSERT INTO `sub_module` (`id`, `parent`, `name`, `link`, `sort_order`, `status`) VALUES (63, 23, 'error_404', 'error404', 1, 'active');
INSERT INTO `sub_module` (`id`, `parent`, `name`, `link`, `sort_order`, `status`) VALUES (64, 23, 'error_500', 'error500', 2, 'active');
INSERT INTO `sub_module` (`id`, `parent`, `name`, `link`, `sort_order`, `status`) VALUES (65, 23, 'blank_page', 'blank', 3, 'active');
INSERT INTO `sub_module` (`id`, `parent`, `name`, `link`, `sort_order`, `status`) VALUES (66, 23, 'starter_page', 'starter', 4, 'active');
INSERT INTO `sub_module` (`id`, `parent`, `name`, `link`, `sort_order`, `status`) VALUES (67, 8, 'general_settings', '', 1, 'active');
INSERT INTO `sub_module` (`id`, `parent`, `name`, `link`, `sort_order`, `status`) VALUES (68, 8, 'email_template_settings', 'email_templates', 2, 'active');
INSERT INTO `sub_module` (`id`, `parent`, `name`, `link`, `sort_order`, `status`) VALUES (69, 25, 'view_profile', '', 1, 'active');
INSERT INTO `sub_module` (`id`, `parent`, `name`, `link`, `sort_order`, `status`) VALUES (70, 25, 'change_password', 'change_pwd', 2, 'active');
INSERT INTO `sub_module` (`id`, `parent`, `name`, `link`, `sort_order`, `status`) VALUES (71, 10, 'multiple_files_upload', 'multi_file_upload', 6, 'active');
INSERT INTO `sub_module` (`id`, `parent`, `name`, `link`, `sort_order`, `status`) VALUES (72, 10, 'dynamic_charts', 'charts', 7, 'active');
INSERT INTO `sub_module` (`id`, `parent`, `name`, `link`, `sort_order`, `status`) VALUES (73, 10, 'locations', 'locations', 8, 'active');
INSERT INTO `sub_module` (`id`, `parent`, `name`, `link`, `sort_order`, `status`) VALUES (88, 34, 'Add Supplier', 'add', 1, 'active');
INSERT INTO `sub_module` (`id`, `parent`, `name`, `link`, `sort_order`, `status`) VALUES (89, 34, 'List Supplier', '', 2, 'active');


