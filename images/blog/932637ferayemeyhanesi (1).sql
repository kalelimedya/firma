-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 28 Şub 2023, 07:32:53
-- Sunucu sürümü: 10.4.27-MariaDB
-- PHP Sürümü: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `ferayemeyhanesi`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `afis`
--

CREATE TABLE `afis` (
  `id` int(11) NOT NULL,
  `title` varchar(60) NOT NULL,
  `content` text NOT NULL,
  `img` varchar(300) NOT NULL,
  `datee` varchar(300) NOT NULL,
  `durum` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `afis`
--

INSERT INTO `afis` (`id`, `title`, `content`, `img`, `datee`, `durum`) VALUES
(1, 'asdasdsadasd', '<p>sadasdasdas</p>\r\n', '884542ca-times.brightspotcdn.jpg', '2023-02-09', '0'),
(3, 'asgasd', '<p>asdasdasd</p>\r\n', '6295401.jpg', '2023-02-09', '0'),
(4, 'asfasfas', '<p>fasdasdasgasdas</p>\r\n', '782162maxresdefault.jpg', '2023-02-24', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `afiseski`
--

CREATE TABLE `afiseski` (
  `id` int(11) NOT NULL,
  `title` varchar(60) NOT NULL,
  `content` text NOT NULL,
  `img` varchar(300) NOT NULL,
  `date` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE `ayarlar` (
  `ayar_id` int(11) NOT NULL,
  `site_logo` varchar(400) NOT NULL,
  `site_baslik` varchar(350) NOT NULL,
  `site_aciklama` varchar(300) NOT NULL,
  `site_link` varchar(100) NOT NULL,
  `site_sahip_mail` varchar(100) NOT NULL,
  `site_mail_host` varchar(100) NOT NULL,
  `site_mail_mail` varchar(100) NOT NULL,
  `site_mail_port` int(11) NOT NULL,
  `site_mail_sifre` varchar(100) NOT NULL,
  `site_konum` varchar(300) NOT NULL,
  `site_telefon` varchar(300) NOT NULL,
  `footer_aciklama` text NOT NULL,
  `site_facebook` varchar(300) NOT NULL,
  `site_twitter` varchar(300) NOT NULL,
  `site_linkedin` varchar(300) NOT NULL,
  `site_instagram` varchar(300) NOT NULL,
  `site_tanim` text NOT NULL,
  `site_keywords` text NOT NULL,
  `site_yazari` text NOT NULL,
  `site_harita` varchar(500) NOT NULL,
  `github` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`ayar_id`, `site_logo`, `site_baslik`, `site_aciklama`, `site_link`, `site_sahip_mail`, `site_mail_host`, `site_mail_mail`, `site_mail_port`, `site_mail_sifre`, `site_konum`, `site_telefon`, `footer_aciklama`, `site_facebook`, `site_twitter`, `site_linkedin`, `site_instagram`, `site_tanim`, `site_keywords`, `site_yazari`, `site_harita`, `github`) VALUES
(1, 'logo.png', 'Feraye', 'Gameoloji', 'https://gameoloji.com', 'info@gameloji.com', '0000', 'info@gameloji.com', 587, '0000', '', '', 'developer by yigithangumus', '', '', 'https://www.linkedin.com/in/yiğithan-gümüş-b66060228/', 'https://www.instagram.com/yigithangumus/', 'Gameoloji', 'Gameoloji', 'Yiğithan Gümüş, Eren Ekmekçi', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3195.727173114944!2d31.393723315289193!3d36.777111979953354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c35979a0b90cd1%3A0x89698813ba20692d!2sSide%2C%20%C3%96zal%20Cd.%20No%3A6%2C%2007330%20Manavgat%2FAntalya!5e0!3m2!1str!2str!4v1676976629502!5m2!1str!2str', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `mail` varchar(300) NOT NULL,
  `business` varchar(300) NOT NULL,
  `message` text NOT NULL,
  `project` varchar(300) NOT NULL,
  `tel` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `contact`
--

INSERT INTO `contact` (`id`, `name`, `mail`, `business`, `message`, `project`, `tel`) VALUES
(19, 'asdsadsadsa', 'yigithangumuss@gmail.com', '', 'asdsadsa', '', 'asdasd');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `kul_id` int(11) NOT NULL,
  `kul_isim` varchar(100) NOT NULL,
  `kul_mail` varchar(300) NOT NULL,
  `kul_ad` varchar(100) NOT NULL,
  `kul_sifre` varchar(300) NOT NULL,
  `kul_yetki` varchar(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`kul_id`, `kul_isim`, `kul_mail`, `kul_ad`, `kul_sifre`, `kul_yetki`) VALUES
(2, 'Admin', 'admin@admin.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `img` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`id`, `img`) VALUES
(1, '934487Ekran görüntüsü 2023-02-04 234534.png'),
(3, '2414626e9e418a8c7140003caef4cd2647f7cd.jpg');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `afis`
--
ALTER TABLE `afis`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `afiseski`
--
ALTER TABLE `afiseski`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `ayarlar`
--
ALTER TABLE `ayarlar`
  ADD PRIMARY KEY (`ayar_id`);

--
-- Tablo için indeksler `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`kul_id`);

--
-- Tablo için indeksler `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `afis`
--
ALTER TABLE `afis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `afiseski`
--
ALTER TABLE `afiseski`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `ayarlar`
--
ALTER TABLE `ayarlar`
  MODIFY `ayar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `kul_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
