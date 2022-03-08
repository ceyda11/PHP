-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 07 Eki 2021, 06:30:36
-- Sunucu sürümü: 5.7.23
-- PHP Sürümü: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `urunler`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunbilgileri`
--

DROP TABLE IF EXISTS `urunbilgileri`;
CREATE TABLE IF NOT EXISTS `urunbilgileri` (
  `urunId` int(11) NOT NULL AUTO_INCREMENT,
  `urunAdi` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `urunGorsel` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `urunFiyat` int(11) NOT NULL,
  PRIMARY KEY (`urunId`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `urunbilgileri`
--

INSERT INTO `urunbilgileri` (`urunId`, `urunAdi`, `urunGorsel`, `urunFiyat`) VALUES
(1, 'LG 4K Ultra HD', 'resimler/tv/LG4KUltraHD.jpg', 5000),
(2, 'Samsung 4K Ultra HD', 'resimler/tv/samsung4KUltraHD.jpg', 6500),
(3, 'Sony 4K Ultra HD', 'resimler/tv/sony4KUltraHD.jpg', 7000),
(4, 'Vestel Smart', 'resimler/tv/vestelSmart.jpg', 4000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
