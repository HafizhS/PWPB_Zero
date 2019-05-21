/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 5.7.21-log : Database - pwpb_zero
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`pwpb_zero` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `pwpb_zero`;

/*Table structure for table `anime` */

DROP TABLE IF EXISTS `anime`;

CREATE TABLE `anime` (
  `id_anime` int(11) NOT NULL AUTO_INCREMENT,
  `judul` text,
  `sinopsis` text,
  `status` text,
  `popularity` int(11) DEFAULT NULL,
  `rating` double DEFAULT NULL,
  `image_url` text,
  `studio` text,
  `tahun_rilis` text,
  `musim_rilis` text,
  `episode` text,
  `durasi` text,
  `genre` text,
  `score` text,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_anime`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

/*Data for the table `anime` */

insert  into `anime`(`id_anime`,`judul`,`sinopsis`,`status`,`popularity`,`rating`,`image_url`,`studio`,`tahun_rilis`,`musim_rilis`,`episode`,`durasi`,`genre`,`score`,`updated_at`,`created_at`) values 
(7,'Anime Dummy 3',NULL,NULL,NULL,NULL,'php7E1F.tmp.png','Zero Studio','2019','Summer','12','23.00','Action','9.6','2019-05-15 13:31:13','2019-05-15 13:31:13'),
(8,'Anime Dummy 4',NULL,NULL,NULL,NULL,NULL,'Zero Studio','2019','Summer','-','11.00','Action','9.6','2019-05-16 03:35:40','2019-05-16 03:35:40'),
(9,'Anime Dummy 9',NULL,NULL,NULL,NULL,NULL,'Zero Studio','2019','Summer','12','23.00','Action','9.6','2019-05-21 03:57:05','2019-05-19 17:35:44');

/*Table structure for table `anime_episode` */

DROP TABLE IF EXISTS `anime_episode`;

CREATE TABLE `anime_episode` (
  `id_anime_episode` int(11) NOT NULL AUTO_INCREMENT,
  `id_anime` int(11) DEFAULT NULL,
  `episode` text,
  `url` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_anime_episode`),
  KEY `FK_id_anime` (`id_anime`),
  CONSTRAINT `FK_id_anime` FOREIGN KEY (`id_anime`) REFERENCES `anime` (`id_anime`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

/*Data for the table `anime_episode` */

insert  into `anime_episode`(`id_anime_episode`,`id_anime`,`episode`,`url`,`created_at`,`updated_at`) values 
(1,7,'1','MP100S2_01.mkv',NULL,NULL),
(2,7,'2',NULL,NULL,NULL),
(3,7,'3',NULL,'2019-05-20 09:22:40','2019-05-20 09:22:40'),
(4,7,'4',NULL,'2019-05-21 03:50:30','2019-05-21 03:50:30'),
(5,7,'4',NULL,'2019-05-21 03:50:37','2019-05-21 03:50:37'),
(6,7,'12',NULL,'2019-05-21 03:52:09','2019-05-21 03:52:09'),
(7,7,'5',NULL,'2019-05-21 03:57:43','2019-05-21 03:57:43'),
(8,7,'6',NULL,'2019-05-21 05:50:17','2019-05-21 05:50:17'),
(9,7,'7',NULL,'2019-05-21 05:55:35','2019-05-21 05:55:35'),
(10,7,'8',NULL,'2019-05-21 05:55:59','2019-05-21 05:55:59');

/*Table structure for table `anime_genre` */

DROP TABLE IF EXISTS `anime_genre`;

CREATE TABLE `anime_genre` (
  `id_anime` int(11) DEFAULT NULL,
  `id_genre` int(11) DEFAULT NULL,
  KEY `FK_anime` (`id_anime`),
  KEY `FK_genre` (`id_genre`),
  CONSTRAINT `FK_anime` FOREIGN KEY (`id_anime`) REFERENCES `anime` (`id_anime`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `FK_genre` FOREIGN KEY (`id_genre`) REFERENCES `genre` (`id_genre`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `anime_genre` */

/*Table structure for table `genre` */

DROP TABLE IF EXISTS `genre`;

CREATE TABLE `genre` (
  `id_genre` int(11) NOT NULL,
  `genre` text,
  PRIMARY KEY (`id_genre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `genre` */

insert  into `genre`(`id_genre`,`genre`) values 
(0,'Action'),
(1,'Comedy'),
(2,'Romance'),
(3,'Fantasy'),
(4,'Drama'),
(5,'Super Power');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`email_verified_at`,`password`,`remember_token`,`created_at`,`updated_at`) values 
(1,'Admin','admin321@admin.com',NULL,'$2y$10$gnt3KGZeThGFK3O9mk.jQesgbgWjNXAIdgDZC6W55sC/krVkzV6oO','gTOnETy31yobTiH5TOUSgTI7IkR1uc4Ymy2XTmE0PLWgim7ixvc4TvQiMMpx','2019-05-10 14:46:41','2019-05-10 14:46:41'),
(2,'Kirane','Kirenaiasakura@gmail.com',NULL,'$2y$10$k88voC3RpQC07jQNDm0KqOM8j9JcylVZL3aQ5KV6dfX8/X/2PCWjq',NULL,'2019-05-13 04:43:36','2019-05-13 04:43:36');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
