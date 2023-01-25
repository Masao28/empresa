/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.4.24-MariaDB : Database - maquinaria
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`maquinaria` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `maquinaria`;

/*Table structure for table `cambiosmaquinaria` */

DROP TABLE IF EXISTS `cambiosmaquinaria`;

CREATE TABLE `cambiosmaquinaria` (
  `id_cambio` int(11) NOT NULL,
  `id_renta` int(11) NOT NULL,
  `id_vehiculo` int(11) NOT NULL,
  `fecha_cambio` date DEFAULT NULL,
  PRIMARY KEY (`id_cambio`),
  KEY `id_renta` (`id_renta`),
  KEY `id_vehiculo` (`id_vehiculo`),
  CONSTRAINT `cambiosmaquinaria_ibfk_1` FOREIGN KEY (`id_renta`) REFERENCES `rentas` (`id_renta`),
  CONSTRAINT `cambiosmaquinaria_ibfk_2` FOREIGN KEY (`id_vehiculo`) REFERENCES `vehiculos` (`id_vehiculo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `cambiosmaquinaria` */

/*Table structure for table `detallerentas` */

DROP TABLE IF EXISTS `detallerentas`;

CREATE TABLE `detallerentas` (
  `id_detallerenta` int(11) NOT NULL,
  `id_renta` int(11) NOT NULL,
  `fecha_salida` date DEFAULT NULL,
  `personaRecive` varchar(50) NOT NULL,
  `personaEntrega` varchar(50) NOT NULL,
  `fecha_entrega` date DEFAULT NULL,
  PRIMARY KEY (`id_detallerenta`),
  KEY `id_renta` (`id_renta`),
  CONSTRAINT `detallerentas_ibfk_1` FOREIGN KEY (`id_renta`) REFERENCES `rentas` (`id_renta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `detallerentas` */

/*Table structure for table `empresas` */

DROP TABLE IF EXISTS `empresas`;

CREATE TABLE `empresas` (
  `id_empresa` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_empresa`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `empresas` */

insert  into `empresas`(`id_empresa`,`nombre`,`created_at`,`updated_at`) values (1,'Gutierres','2023-01-25 17:10:52','2023-01-25 17:10:52');

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1);

/*Table structure for table `motores` */

DROP TABLE IF EXISTS `motores`;

CREATE TABLE `motores` (
  `id_motor` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_motor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `motores` */

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `rentas` */

DROP TABLE IF EXISTS `rentas`;

CREATE TABLE `rentas` (
  `id_renta` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `fecha_pedido` date DEFAULT NULL,
  `tipo_renta` varchar(50) DEFAULT NULL,
  `id_vehiculo` int(11) NOT NULL,
  `rendatario` varchar(50) NOT NULL,
  PRIMARY KEY (`id_renta`),
  KEY `id_empresa` (`id_empresa`),
  KEY `id_vehiculo` (`id_vehiculo`),
  CONSTRAINT `rentas_ibfk_1` FOREIGN KEY (`id_empresa`) REFERENCES `empresas` (`id_empresa`),
  CONSTRAINT `rentas_ibfk_2` FOREIGN KEY (`id_vehiculo`) REFERENCES `vehiculos` (`id_vehiculo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `rentas` */

/*Table structure for table `tipovehiculos` */

DROP TABLE IF EXISTS `tipovehiculos`;

CREATE TABLE `tipovehiculos` (
  `id_tipoVehiculo` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`id_tipoVehiculo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tipovehiculos` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`email_verified_at`,`password`,`role`,`remember_token`,`created_at`,`updated_at`) values (1,'Areli','areli123@gmail.com',NULL,'$2y$10$.iXWDPyDlGI0sTwCBZeluOuNKGaDIlvd2o9PZTFncFbQqfls.v7pi',NULL,NULL,'2023-01-25 16:26:34','2023-01-25 16:26:34'),(2,'Admin','montacargasgutierrez3@gmail.com',NULL,'$2y$10$XE0O8vq1y8M7hIR28T.U/enT2vWPLjIDQBG477C0ZBXCmNuXXNtoW','admin',NULL,'2023-01-25 16:32:27','2023-01-25 16:32:27');

/*Table structure for table `vehiculos` */

DROP TABLE IF EXISTS `vehiculos`;

CREATE TABLE `vehiculos` (
  `id_vehiculo` int(11) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `capacidad` float DEFAULT NULL,
  `mastil` varchar(50) NOT NULL,
  `Serie` varchar(10) NOT NULL,
  `status` varchar(50) NOT NULL,
  `id_motor` int(11) NOT NULL,
  `id_tipoVehiculo` int(11) NOT NULL,
  PRIMARY KEY (`id_vehiculo`),
  KEY `id_motor` (`id_motor`),
  KEY `id_tipoVehiculo` (`id_tipoVehiculo`),
  CONSTRAINT `vehiculos_ibfk_1` FOREIGN KEY (`id_motor`) REFERENCES `motores` (`id_motor`),
  CONSTRAINT `vehiculos_ibfk_2` FOREIGN KEY (`id_tipoVehiculo`) REFERENCES `tipovehiculos` (`id_tipoVehiculo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `vehiculos` */

/*Table structure for table `ventas` */

DROP TABLE IF EXISTS `ventas`;

CREATE TABLE `ventas` (
  `id_venta` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `fecha_pedido` date DEFAULT NULL,
  `id_vehiculo` int(11) NOT NULL,
  `vendedor` varchar(50) NOT NULL,
  PRIMARY KEY (`id_venta`),
  KEY `id_empresa` (`id_empresa`),
  KEY `id_vehiculo` (`id_vehiculo`),
  CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`id_empresa`) REFERENCES `empresas` (`id_empresa`),
  CONSTRAINT `ventas_ibfk_2` FOREIGN KEY (`id_vehiculo`) REFERENCES `vehiculos` (`id_vehiculo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `ventas` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
