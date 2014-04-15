# ************************************************************
# Sequel Pro SQL dump
# Version 4135
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.34)
# Database: antiscam
# Generation Time: 2014-04-15 18:21:42 +0000
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
	('2014_04_15_020933_create_session_table',1);

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
	(4,2,'Perodua Viva Elite 1.0 (Manual) - 2009','Evalisa Andria','Amirol Ahmad','Damansara Perdana, Selangor','Malaysia','0195151707',2147483647,'Maybank','2014-04-15 16:45:44','2014-04-15 16:45:44');

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
	('bd38f751e9bb6237322301fc8e16c6b231a84dbe','YTozOntzOjY6Il90b2tlbiI7czo0MDoiVEF4UHM2WUxVeEF0NHMwMzh1dzBUeVV4cVJsQ1pGamZFNFVNYXRweiI7czo1OiJmbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjk6Il9zZjJfbWV0YSI7YTozOntzOjE6InUiO2k6MTM5NzU4NTExNjtzOjE6ImMiO2k6MTM5NzU3NjgxMDtzOjE6ImwiO3M6MToiMCI7fX0=',1397585116);

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
  `password_temp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `fullname`, `password`, `password_temp`, `email`, `code`, `active`, `created_at`, `updated_at`)
VALUES
	(1,'AmirolAhmad','Amirol Ahmad','$2y$10$JNCs1I7VF8imWDpc0M8TGOIg9ZFkOuZ5C7CfPbuznNhzY/jrH1y8e','','test@testmail.com','',0,'0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(2,'lisha','Evalisa Andria','$2y$10$FyJ0l2ztfAVODCplmC5t3elm7Lf88lwnPxqa3kWLD.fA8CWCuy7ZC','','lisa.andria11@gmail.com','',1,'2014-04-15 15:47:10','2014-04-15 16:32:30');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
