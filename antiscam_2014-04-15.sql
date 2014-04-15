# ************************************************************
# Sequel Pro SQL dump
# Version 4135
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.34)
# Database: antiscam
# Generation Time: 2014-04-15 10:01:07 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`migration`, `batch`)
VALUES
	('2014_04_14_131457_create_users_table',1),
	('2014_04_14_135449_create_reports_table',1),
	('2014_04_15_020933_create_session_table',2);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table reports
# ------------------------------------------------------------

DROP TABLE IF EXISTS `reports`;

CREATE TABLE `reports` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `owner_id` int(11) NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reporter` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `scammer_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `acc_bank_number` int(11) NOT NULL,
  `bank_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `reports` WRITE;
/*!40000 ALTER TABLE `reports` DISABLE KEYS */;

INSERT INTO `reports` (`id`, `owner_id`, `subject`, `reporter`, `scammer_name`, `location`, `country`, `contact_number`, `acc_bank_number`, `bank_name`, `created_at`, `updated_at`)
VALUES
	(1,1,'Mencuri hati aku','Amirol Ahmad','Evalisa Andria','P. Pinang','Malaysia','60107152123',2147483647,'Maybank','0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(2,1,'Beli barang tak dapat','Amirol Ahmad','Johan Kamil','Perak','Malaysia','60196452235',2147483647,'CIMB','0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(3,1,'Lepas bayar RM10k terus hilang','Amirol Ahmad','Syaza Arina','Selangor','Malaysia','60136635264',2147483647,'Maybank','0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(5,1,'untuk test','Amirol Ahmad','kamal adli','Johor','Malaysia','60195151707',123456,'Bank Rakyat','2014-04-14 15:51:28','2014-04-14 15:51:28'),
	(6,1,'no money no talk','Amirol Ahmad','kumar','katmandu','nepal','0102354432',2147483647,'CIMB','2014-04-15 01:03:00','2014-04-15 01:03:00'),
	(7,3,'Fall in love','Kumar Dev Shrestha','Binit','Kelana Jaya','Malaysia','0195543223',2147483647,'Ambank','2014-04-15 04:16:09','2014-04-15 04:16:09');

/*!40000 ALTER TABLE `reports` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table sessions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `sessions`;

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payload` text COLLATE utf8_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  UNIQUE KEY `sessions_id_unique` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;

INSERT INTO `sessions` (`id`, `payload`, `last_activity`)
VALUES
	('de70a8be5782c56eb6ae6a5b5049335d5edeb1cb','YTozOntzOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NjoiX3Rva2VuIjtzOjQwOiJFcU9VWXY5V1J6b3ZhY0hZTWNhbkp5dTFMWXVtcVlkblE4aGV2Qks1IjtzOjk6Il9zZjJfbWV0YSI7YTozOntzOjE6InUiO2k6MTM5NzU1NTI2NDtzOjE6ImMiO2k6MTM5NzUyODExNztzOjE6ImwiO3M6MToiMCI7fX0=',1397555264);

/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `fullname`, `password`, `email`, `created_at`, `updated_at`)
VALUES
	(1,'AmirolAhmad','Amirol Ahmad','$2y$10$83djjP7ed6YfduHbnzbfhuzxrpi8hPi5yN94knGrkcL6GjzU..Vyi','9w2pdf@gmail.com','0000-00-00 00:00:00','2014-04-15 09:03:26'),
	(3,'kumar','Kumar Dev Shrestha','$2y$10$TlyQ6iC5BpKVbQEJonPkVONIXweahAQwRIkGJUTJLJ5aOpGpP5DQ6','kdevshr9@gmail.com','2014-04-15 04:14:43','2014-04-15 09:08:43');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
