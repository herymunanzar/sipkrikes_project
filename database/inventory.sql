/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.4.22-MariaDB : Database - inventory
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`inventory` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `inventory`;

/*Table structure for table `aset` */

DROP TABLE IF EXISTS `aset`;

CREATE TABLE `aset` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cabang` varchar(11) DEFAULT NULL,
  `tanggal_pembelian` date DEFAULT NULL,
  `id_jenis_barang` varchar(11) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `sn` varchar(100) DEFAULT NULL,
  `imei` varchar(100) DEFAULT NULL,
  `license` varchar(100) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `model` varchar(100) DEFAULT NULL,
  `os_fimware` varchar(50) DEFAULT NULL,
  `processor` varchar(50) DEFAULT NULL,
  `kapasitas_memory` varchar(20) DEFAULT NULL,
  `jenis_memory` varchar(10) DEFAULT NULL,
  `kapasitas_hdd` varchar(20) DEFAULT NULL,
  `jenis_hdd` varchar(10) DEFAULT NULL,
  `tanggal_expired_license` date DEFAULT NULL,
  `no_purchasing` varchar(50) DEFAULT NULL,
  `harga_pembelian` varchar(50) DEFAULT NULL,
  `id_status_aset` varchar(11) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `id_user` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Data for the table `aset` */

insert  into `aset`(`id`,`id_cabang`,`tanggal_pembelian`,`id_jenis_barang`,`nama`,`sn`,`imei`,`license`,`type`,`model`,`os_fimware`,`processor`,`kapasitas_memory`,`jenis_memory`,`kapasitas_hdd`,`jenis_hdd`,`tanggal_expired_license`,`no_purchasing`,`harga_pembelian`,`id_status_aset`,`keterangan`,`id_user`) values 
(1,'1','2022-01-02','1','MPDW001','MPDW001','-','-','DELL INSPIRON 3280','DELL INSPIRON','Windows 10','Intel i5-8265U','8 GB','DDR-3','1 TB','HDD','0000-00-00','-','10000000','1',NULL,NULL),
(2,'1','2022-01-03','1','MPDW002','MPDW002','MPDW002','-','DELL INSPIRON 3280','DELL PC','Windows 10','i5-8265U','8GB','DDR-3','1TB','HDD','0000-00-00','MPDW002','10000000','1',NULL,NULL),
(3,'1','2022-01-04','1','MPDW12','MPDW12','MPDW12','-','DELL OPTIPLEX 390','Dell PC','Windows 10','i3-2100','6GB','DDR-3','500GB','SSD','0000-00-00','MPDW12','15000000','1',NULL,NULL),
(4,'1','2022-01-05','1','MPD-ACC1','MPD-ACC1','-','-','DELL OPTIPLEX 390','DELL PC','Windows 10','i3-2100','6GB','DDR-4','500GB','SSD','0000-00-00','MPD-ACC1','15000000','1',NULL,NULL),
(5,'2','2022-01-06','2','Cisco','1234567890qwerty','-','qwertyuiop1234567','','','Cisco9090','','',NULL,'',NULL,'0000-00-00','PO809090','5000000','2',NULL,NULL),
(6,'3','2022-01-08','3','0000','90909090','8989898989','asdasdasd','DELL','R740','idrac6','xeon','256GB','DDR-4','5TB','SSD','0000-00-00','PO011100','100000000','2',NULL,NULL),
(7,'4','2022-01-09','4','access point','121212','1212','-','aasd','asd','5343','','',NULL,'',NULL,'0000-00-00','asdasdasd','23123','1',NULL,NULL);

/*Table structure for table `cabang` */

DROP TABLE IF EXISTS `cabang`;

CREATE TABLE `cabang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode` varchar(10) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `telefon` varchar(15) DEFAULT NULL,
  `area` enum('area-1','area-2') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

/*Data for the table `cabang` */

insert  into `cabang`(`id`,`kode`,`nama`,`alamat`,`telefon`,`area`) values 
(1,'MPD','Mayapada','Mayapada Tower, 11th floor','(021) 75999999','area-1'),
(2,'MKY','Menara Karya','Menara Karya Tower, 28th Floor','(021) 75999999','area-1'),
(3,'CYB','Cyber 2','Cyber 2 Tower 17th-18th Floor','(021) 75999999','area-1'),
(4,'EQY','Equity','Equity Tower Building 35-37th floor','(021) 75999999','area-1'),
(5,'PLZ','The Plaza','The Plaza Office Tower 41st Floor','(021) 75999999','area-1'),
(6,'TLV','Talavera','Talavera Office Park 28th floor','(021) 75999999','area-2'),
(7,'SOV','Sovereign','Sovereign Plaza 21th floor','(021) 75999999','area-2'),
(8,'PIO','Pondok Indah Office Tower (PIOT)','Pondok Indah Office Tower 3, 17th floor','(021) 75999999','area-2'),
(9,'ALD','Alamanda',' Alamanda Tower 25th floor','(021) 75999999','area-2'),
(10,'ALB','Alamanda Bali','Alamanda Office 5th floor','(0361) 2003199','area-2');

/*Table structure for table `jenis_barang` */

DROP TABLE IF EXISTS `jenis_barang`;

CREATE TABLE `jenis_barang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jenis` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Data for the table `jenis_barang` */

insert  into `jenis_barang`(`id`,`nama_jenis`) values 
(1,'Personal Computer'),
(2,'Router'),
(3,'Server'),
(4,'Access Point'),
(5,'Switch Hub'),
(6,'Switch Management'),
(7,'Software / License');

/*Table structure for table `jenis_hdd` */

DROP TABLE IF EXISTS `jenis_hdd`;

CREATE TABLE `jenis_hdd` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `jenis_hdd` */

insert  into `jenis_hdd`(`id`,`nama`) values 
(1,'HDD'),
(2,'SSD');

/*Table structure for table `jenis_memory` */

DROP TABLE IF EXISTS `jenis_memory`;

CREATE TABLE `jenis_memory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `jenis_memory` */

insert  into `jenis_memory`(`id`,`nama`) values 
(1,'DDR-1'),
(2,'DDR-2'),
(3,'DDR-3'),
(4,'DDR-4');

/*Table structure for table `status_aset` */

DROP TABLE IF EXISTS `status_aset`;

CREATE TABLE `status_aset` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `status_aset` */

insert  into `status_aset`(`id`,`nama`) values 
(1,'good and used'),
(2,'good and not used'),
(3,'broken and used'),
(4,'broken and not used');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `telefon` varchar(15) DEFAULT NULL,
  `ktp` varchar(30) DEFAULT NULL,
  `role` enum('admin','staff') DEFAULT NULL,
  `status` enum('aktif','non-aktif') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `user` */

insert  into `user`(`id`,`nama`,`email`,`password`,`telefon`,`ktp`,`role`,`status`) values 
(1,'Hery Munanzar','hery@marqueeoffices.com','$2y$10$UBpSa8Hl07HyfR5CF.RlvOQDmsh6X/aKJPUriqmv99pxjlMwBerv.','085360012246','11111','admin','aktif'),
(2,'Ady Setiawan','ady@marqueeoffices.com','$2y$10$yxSIBjKbBEH5gznJ3m54uOcfd655V0WNv/epzTkjBFP3mvNjEnkFu','081336668601','22222','admin','aktif');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
