# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.1.25-MariaDB)
# Database: KbuSahaf
# Generation Time: 2017-08-14 14:18:24 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table kitaplar
# ------------------------------------------------------------

DROP TABLE IF EXISTS `kitaplar`;

CREATE TABLE `kitaplar` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `adi` varchar(255) DEFAULT NULL,
  `yazar` varchar(255) DEFAULT NULL,
  `turu` varchar(255) DEFAULT NULL,
  `kategori_id` int(11) DEFAULT NULL,
  `aciklama` text,
  `keyword` varchar(255) DEFAULT NULL,
  `adet` int(11) DEFAULT NULL,
  `fiyat` float DEFAULT NULL,
  `resim` varchar(255) DEFAULT NULL,
  `tarih` timestamp NULL DEFAULT NULL,
  `durum` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `kitaplar` WRITE;
/*!40000 ALTER TABLE `kitaplar` DISABLE KEYS */;

INSERT INTO `kitaplar` (`id`, `adi`, `yazar`, `turu`, `kategori_id`, `aciklama`, `keyword`, `adet`, `fiyat`, `resim`, `tarih`, `durum`)
VALUES
	(1,'kasagi','ömer seyfettin','hikaye',1,'türkiye klasikleri','hikaye, ömer seyfettin, kasagi',1,10,'1.jpg','2017-08-22 00:00:00','ikinci el');

/*!40000 ALTER TABLE `kitaplar` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table kitaplar_resim
# ------------------------------------------------------------

DROP TABLE IF EXISTS `kitaplar_resim`;

CREATE TABLE `kitaplar_resim` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `kitap_id` int(11) DEFAULT NULL,
  `resim` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;



# Dump of table kullanicilar
# ------------------------------------------------------------

DROP TABLE IF EXISTS `kullanicilar`;

CREATE TABLE `kullanicilar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adsoy` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sifre` varchar(50) NOT NULL,
  `yetki` varchar(50) NOT NULL,
  `durum` varchar(50) NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `resim` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `kullanicilar` WRITE;
/*!40000 ALTER TABLE `kullanicilar` DISABLE KEYS */;

INSERT INTO `kullanicilar` (`id`, `adsoy`, `email`, `sifre`, `yetki`, `durum`, `tarih`, `resim`)
VALUES
	(8,'adem','adem28_17@windowslive.com','1','admin','aktif','2017-08-13 02:12:36','');

/*!40000 ALTER TABLE `kullanicilar` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table musteriler
# ------------------------------------------------------------

DROP TABLE IF EXISTS `musteriler`;

CREATE TABLE `musteriler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adsoy` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sifre` varchar(255) NOT NULL,
  `yetki` varchar(255) NOT NULL,
  `durum` varchar(255) NOT NULL,
  `resim` varchar(255) NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ip` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `cinsiyet` varchar(255) NOT NULL,
  `adres` varchar(255) NOT NULL,
  `sehir` varchar(255) NOT NULL,
  `aciklama` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table yorumlar
# ------------------------------------------------------------

DROP TABLE IF EXISTS `yorumlar`;

CREATE TABLE `yorumlar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kitap_id` int(11) NOT NULL,
  `musteri_id` int(11) NOT NULL,
  `yorum` varchar(255) NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `durum` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `yorumlar` WRITE;
/*!40000 ALTER TABLE `yorumlar` DISABLE KEYS */;

INSERT INTO `yorumlar` (`id`, `kitap_id`, `musteri_id`, `yorum`, `tarih`, `durum`, `ip`)
VALUES
	(1,0,0,'','2017-08-14 00:57:49','','');

/*!40000 ALTER TABLE `yorumlar` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
