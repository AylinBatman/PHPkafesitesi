# Host: 127.0.0.1  (Version 5.5.5-10.1.10-MariaDB)
# Date: 2017-08-17 03:49:25
# Generator: MySQL-Front 5.3  (Build 5.39)

/*!40101 SET NAMES latin5 */;

#
# Structure for table "firma"
#

DROP TABLE IF EXISTS `firma`;
CREATE TABLE `firma` (
  `firma_id` int(11) NOT NULL AUTO_INCREMENT,
  `firma_adi` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `firma_telefon` varchar(15) COLLATE utf8_turkish_ci DEFAULT NULL,
  `firma_fax` varchar(15) COLLATE utf8_turkish_ci DEFAULT NULL,
  `firma_email` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `firma_adres` varchar(300) COLLATE utf8_turkish_ci DEFAULT NULL,
  `firma_misyon` longtext COLLATE utf8_turkish_ci,
  `firma_vizyon` longtext COLLATE utf8_turkish_ci,
  `firma_sembolsoz` longtext COLLATE utf8_turkish_ci,
  `firma_hakkinda` longtext COLLATE utf8_turkish_ci,
  PRIMARY KEY (`firma_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

#
# Data for table "firma"
#

INSERT INTO `firma` VALUES (1,'Beyaz Esya Ltd.Sti','0370 370 19 07','0370 060 19 07','info@slhbeyazesya.com','Karab�k Merkez','   Misyonumuz, faaliyet b�lgemizde en �ok arzu edilen markalar�m�zla en y�ksek m��teri memnuniyetini sa�lamakt�r\r\nHedeflerimize ancak, y�ksek motivitasyona sahip, tak�m ruhu ta��yan ve donan�ml� �al��anlarla ula�abilece�imize inan�r�z ki.\r\nTopluma ve �evreye kar�� sorumlulu�umuzun bilinciyle hareket ederiz.\r\nMarkalar�m�z temel de�erlerimizdir, onlar�n kendi konumlar�nda �ilk tercih edilen� olmalar� i�in �al���r�z.\r\n                                                                            \r\n                                                                            \r\n                                                                            \r\n                                                                            \r\n                                        ','                              M��terilerin, tedarik�ilerin ve �al��anlar�n ilk tercihi olmak.                                       \r\n                                                                               \r\n                                                                               \r\n                                        ','                                 T�m masraf�na kar��, ya�am hala pop�ler.                                      \r\n                                                                              \r\n                                                                              \r\n                                        ','');

#
# Structure for table "haberler"
#

DROP TABLE IF EXISTS `haberler`;
CREATE TABLE `haberler` (
  `haber_id` int(11) NOT NULL AUTO_INCREMENT,
  `haber_baslik` varchar(100) COLLATE utf8_turkish_ci NOT NULL DEFAULT '',
  `haber_tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `haber_detay` varchar(1000) COLLATE utf8_turkish_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`haber_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

#
# Data for table "haberler"
#

INSERT INTO `haberler` VALUES (18,'Kahvalt� Organizasyonu','2017-08-17 03:46:11','<p>&Uuml;niversitemizde okuyan t&uuml;m &ouml;�rencilerimiz ve halk�m�z i&ccedil;in &ouml;zel kahvalt� organizasyonlar� yap�lmaya ba�lanm��t�r.</p>\r\n'),(19,'Rezervasyon Uygulamas�','2017-08-17 03:48:13','<p>De�erli m&uuml;�terilerimiz;</p>\r\n\r\n<p>&Ccedil;ardak Cafe firmas� olarak &nbsp;rezervasyon i�lemlerimizi www.cardakcafe.com adresimizden de verebilirsiniz..</p>\r\n');

#
# Structure for table "mesaj"
#

DROP TABLE IF EXISTS `mesaj`;
CREATE TABLE `mesaj` (
  `mesaj_id` int(11) NOT NULL AUTO_INCREMENT,
  `mesaj_tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `mesaj_detay` varchar(1000) COLLATE utf8_turkish_ci DEFAULT NULL,
  `mesaj_gonderen` varchar(75) COLLATE utf8_turkish_ci DEFAULT NULL,
  `mesaj_gonderenemail` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`mesaj_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

#
# Data for table "mesaj"
#

INSERT INTO `mesaj` VALUES (14,'2017-08-17 03:41:02','deneme mesaj� 2','Aylin BATMAN','aylin@batman.com'),(15,'2017-08-17 03:41:36','elif in mesaj� 1','Elif Elmaz','elif@elmas.com'),(16,'2017-08-17 03:42:28','dadadfdfds','Elif Elmaz','elif@elmas.com');

#
# Structure for table "settings"
#

DROP TABLE IF EXISTS `settings`;
CREATE TABLE `settings` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `keywords` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `smtpserver` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `smtpport` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `smtpemail` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `adres` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `sehir` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tel` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `fax` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

#
# Data for table "settings"
#

INSERT INTO `settings` VALUES (1,'SLH Beyaz E�ya','beyaz e�ya , �ama��r makinesi, f�r�n,  buzdolab�, bosch, ar�elik, vestel, beko, profilo, vestel  ','Firmam�z Beyaz E�ya Al�m Sat�m ��leri Yapmaktad�r.','SLH Beyaz E�ya Ltd.�ti','ssl://smtp.googlemail.com','465','info@slhbeyazesya.com','Slh123!&','100.Y�l Mah. Karab�k','Merkez / Karab�k','555 555 55 55','555 1 555','salihmik60@gmail.com');

#
# Structure for table "urunler"
#

DROP TABLE IF EXISTS `urunler`;
CREATE TABLE `urunler` (
  `urun_id` int(11) NOT NULL AUTO_INCREMENT,
  `urun_marka` varchar(50) COLLATE utf8_turkish_ci NOT NULL DEFAULT '',
  `urun_model` varchar(70) COLLATE utf8_turkish_ci NOT NULL DEFAULT '',
  `urun_uretimtarihi` varchar(15) COLLATE utf8_turkish_ci NOT NULL DEFAULT '',
  `urun_fiyat` varchar(10) COLLATE utf8_turkish_ci NOT NULL DEFAULT '',
  `urun_detay` varchar(1000) COLLATE utf8_turkish_ci NOT NULL DEFAULT '',
  `urun_resim` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `urun_slider` varchar(5) COLLATE utf8_turkish_ci NOT NULL DEFAULT '',
  `urun_tipi` varchar(15) COLLATE utf8_turkish_ci NOT NULL DEFAULT '',
  `urun_slider2` varchar(5) COLLATE utf8_turkish_ci DEFAULT NULL,
  `urun_tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `urun_ekran` varchar(10) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`urun_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

#
# Data for table "urunler"
#

INSERT INTO `urunler` VALUES (21,'SERPME KAHVALTI','SERPME KAHVALTI','2017','29.90','<h4><strong>SERPME KAHVALTIDA NELER VAR?</strong></h4>\r\n\r\n<p>Beyaz peynir, tel peynir, eski ka�ar, k&ouml;y peyniri, dil peynir, domates, salatal�k, ye�il k&ouml;y biberi, roka, maydanoz, s&ouml;�&uuml;�, tereya�l� k&ouml;y yumurtas�, 2 &ccedil;e�it re&ccedil;el, bal, tahin pekmez, nutella siyah zeytin, ye�il zeytin, sigara b&ouml;re�i, dana jambon, tavuk jambon, kuru incir, kuru kay�s�, pancake,s�n�rs�z &ccedil;ay</p>\r\n','NFUACafeOPSIYON8097_525-2771.jpg','Evet','Kahvalt�','Evet','2017-08-17 03:31:10','Evet'),(22,'Serpme Kahvalt�','Kahvalt�','2017','30','','IMG_9783-460x330.jpg','Hayir','Kahvalt�','Hayir','2017-08-17 03:35:28','Hayir');

#
# Structure for table "uyeler"
#

DROP TABLE IF EXISTS `uyeler`;
CREATE TABLE `uyeler` (
  `uye_id` int(11) NOT NULL AUTO_INCREMENT,
  `uye_adsoyad` varchar(40) COLLATE utf8_turkish_ci NOT NULL DEFAULT '',
  `uye_cinsiyet` varchar(5) COLLATE utf8_turkish_ci NOT NULL DEFAULT '',
  `uye_email` varchar(50) COLLATE utf8_turkish_ci NOT NULL DEFAULT '',
  `uye_sifre` varchar(30) COLLATE utf8_turkish_ci NOT NULL DEFAULT '',
  `uye_yetki` varchar(15) COLLATE utf8_turkish_ci NOT NULL DEFAULT 'kullanici',
  `uye_tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`uye_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

#
# Data for table "uyeler"
#

INSERT INTO `uyeler` VALUES (8,'Aylin BATMAN','Bayan','aylin@batman.com','1234','admin','2017-08-17 03:38:13'),(9,'Elif Elmaz','Erkek','elif@elmas.com','12345','kullanici','2017-08-17 03:38:51');
