-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 05 Kas 2021, 07:36:17
-- Sunucu sürümü: 10.1.26-MariaDB
-- PHP Sürümü: 7.1.9

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

CREATE TABLE `urunbilgileri` (
  `urunId` int(11) NOT NULL,
  `urunAciklama` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `urunGorsel` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `urunFiyat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `urunbilgileri`
--

INSERT INTO `urunbilgileri` (`urunId`, `urunAciklama`, `urunGorsel`, `urunFiyat`) VALUES
(1, 'LG 4K UltraHD TV', 'resimler/tv/LG4KUltraHD.jpg', 500),
(2, 'Samsung 4K Ultra HD TV', 'resimler/tv/samsung4KUltraHD.jpg', 1500),
(3, 'Sony 4K Ultra HD TV', 'resimler/tv/sony4KUltraHD.jpg', 2500),
(4, 'Vestel Smart TV', 'resimler/tv/vestelSmart.jpg', 3500),
(5, 'Vestel Smart TV', 'resimler/tv/vestelSmart.jpg', 4500);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `urunbilgileri`
--
ALTER TABLE `urunbilgileri`
  ADD PRIMARY KEY (`urunId`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `urunbilgileri`
--
ALTER TABLE `urunbilgileri`
  MODIFY `urunId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
