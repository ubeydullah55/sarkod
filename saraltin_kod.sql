-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 31 Oca 2025, 14:52:31
-- Sunucu sürümü: 10.6.20-MariaDB-cll-lve-log
-- PHP Sürümü: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `saraltin_kod`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bilezikler`
--

CREATE TABLE `bilezikler` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `bas_gr` double NOT NULL,
  `bit_gr` double NOT NULL,
  `bas_gen` double NOT NULL,
  `bit_gen` double NOT NULL,
  `cnc` text NOT NULL,
  `resim` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

--
-- Tablo döküm verisi `bilezikler`
--

INSERT INTO `bilezikler` (`id`, `name`, `bas_gr`, `bit_gr`, `bas_gen`, `bit_gen`, `cnc`, `resim`) VALUES
(15, 'Alyans', 10, 100, 6, 40, '-', '1212d704cd.jpeg'),
(16, 'Düz Kenarlı Hasır', 10, 100, 10, 40, '-', '52fe6e2fbf.jpeg'),
(17, 'Çavuş Ajda', 8, 50, 0, 0, '-', '99b0f16beb.jpeg'),
(18, 'Kobra', 10, 100, 10, 40, 'zemin 5000 devir ', 'fc438cdb67.jpeg'),
(19, 'Başak', 10, 50, 0, 0, '-', 'fa4ffb6520.jpeg'),
(20, 'Normal Ajda', 8, 50, 0, 0, '-', '1b3975227e.jpeg'),
(21, 'İkili Burma', 8, 50, 0, 0, '-', '5554eef6e3.jpeg'),
(22, 'Dalgalı Parlak Ajda', 8, 50, 0, 0, '-', '3409d59701.jpeg'),
(23, 'Parlak Alyans Ajda', 8, 50, 0, 0, '-', '0ecbd98a51.jpeg'),
(24, 'Oluklu Ajda', 8, 50, 0, 0, '-', 'a96a976c18.jpeg'),
(25, 'Dalgalı Kesik Ajda', 8, 50, 0, 0, '-', '5ea4e6dc64.jpeg'),
(26, 'Tarak Ajda', 8, 50, 0, 0, '-', '0fcaf74676.jpeg'),
(27, 'Dalgalı 2\'li Kesik Ajda', 8, 50, 0, 0, '-', 'ff33b3c246.jpeg'),
(28, 'Tekli Düğüm Ajda', 8, 50, 0, 0, '-', '9380cf6374.jpeg'),
(29, 'Ef-43 Şeritli', 10, 100, 10, 40, '5 eksen cnc zemin ', '91646e8054.jpg'),
(30, 'Y.Kod-541', 10, 100, 10, 40, '5 eksen cnc zemin açı 45 ', 'bafa0a53b5.jpg'),
(31, 'İçli Düğüm Alyans', 10, 50, 0, 0, '-', 'c6d1876304.jpg'),
(32, '2\'li Paftalı Yarmalı', 8, 50, 0, 0, '-', 'edb02b7a83.jpg'),
(33, '2\'li Paftalı Yarmalı', 8, 50, 0, 0, '-', 'cd13b0cb7a.jpg'),
(34, '2\'li Paftalı Parlak', 8, 50, 0, 0, '-', '84dac5ae67.jpg'),
(35, 'Eski 139 ', 10, 100, 10, 40, 'eski zemin makinası 6000 devir', 'aa24d29959.jpg'),
(36, '375', 10, 100, 10, 40, '-', '1a927b737d.jpg'),
(37, '25 MM 174 Benzeri', 10, 100, 10, 40, '8 ağızlı çelik kalem ', '4a14d933eb.jpg'),
(38, '20 mm 411', 10, 100, 10, 40, '-', 'a0f5a5e4bd.jpg'),
(42, 'Yeni Kod-547', 10, 100, 10, 40, 'zemin 5 eksen cnc model bekar 20 mm daraltıldı 8000 devir', 'f90cfbec8c.jpg'),
(43, 'Yeni Kod-545', 10, 100, 10, 40, '4.180 içeride atıldı gerisi cnc', 'd65721be76.jpg'),
(44, 'K.O.', 10, 100, 10, 40, 'zeminlazer 2 diş kalem 3.150 5 kesme', '2fd5066a8e.jpg'),
(45, 'Kibrit Çöpü', 10, 50, 6, 12, '-', '1605407003.jpg'),
(46, 'Tek Diş Kibrit Çöpü', 10, 50, 6, 10, 'tek diş kalem3.180 ', '400ef63d02.jpg'),
(47, '4 Dişli Kibrit Çöpü', 10, 50, 5, 10, '4 diş kalem 5.180 kenarı var', 'fda241aab9.jpg'),
(48, 'Kenarsız Merdiven', 10, 50, 5, 10, '-', 'f68c92e301.jpg'),
(49, 'Kesik Ajda', 10, 50, 0, 0, '-', '8e4b5d0449.jpg'),
(50, 'Yeni Kod-262', 10, 100, 10, 40, 'zemin 5 eksen amerikan 9 eksen gerisi kalem odası', '90f36e6651.jpg'),
(51, 'Şarnel -001', 12, 15, 15, 15, '-', '0950095d07.jpg'),
(52, 'Şarnel -002', 12, 15, 15, 15, '-', '08ebf55530.jpg'),
(53, '111 Benzeri', 10, 100, 10, 40, 'zemin 5 eksen bol simli', '8b67544a70.jpg'),
(54, 'Şarnel 24\'lü Hasır Kenarı Kalemli', 10, 15, 10, 25, '-', '647f8ba78f.jpg'),
(55, 'Nazar Modeli', 10, 100, 10, 40, '-', '110d5e7a63.jpg'),
(56, 'Model-86', 10, 100, 10, 40, '-', '88b7e45b9f.jpg'),
(57, 'Bombeli Hasır', 10, 100, 10, 40, '-', 'e10f576fd6.jpg'),
(58, 'Yeni Desen Modeli', 10, 100, 10, 40, '-', '47cd0ccd9f.jpg'),
(59, '15 MM 178', 10, 100, 10, 40, '050 zemin bol simli', '73c98e5557.jpg'),
(60, '24\'lü Hasır Kenarlı', 10, 100, 10, 40, '-', '6a28e1a1a4.jpg'),
(61, 'Düz Kenarsız Hasır', 10, 100, 10, 40, '-', '28e04b9838.jpg'),
(62, 'Kazayağı', 10, 100, 10, 40, '-', '6611fffb63.jpg'),
(63, 'Özyurt 1720', 10, 100, 10, 40, '-', 'b0cb9187fc.jpg'),
(64, '15 MM 160 Benzeri', 10, 100, 10, 40, 'eski makinada zemin atıldı standart devir kenarı var', 'e12f373e14.jpg'),
(65, 'Bekar Modeli', 10, 100, 10, 40, 'bekara atılan şarlaklı model zemini 5 eksen kalemi şarlak 10 eksen', '70649e7f53.jpg'),
(66, '15 MM 203 ', 10, 100, 10, 40, 'VİDA ZEMİNLİ STANDART ', 'a806942f9e.jpg'),
(67, 'Y.KOD 536', 10, 100, 10, 40, 'ZEMİNLAZER 3.140', 'a1168fcc59.jpg'),
(68, 'Y.KOD 548', 10, 100, 10, 40, 'NOKTASI KALEM ODASINDA 90 AÇILI', '3d85bbc399.jpg'),
(69, '15 MM 401', 10, 100, 10, 40, '-', 'f3c9ec8182.jpg'),
(70, 'Desen Örgü', 10, 100, 10, 40, '-', '4ed46cfb27.jpg'),
(71, 'Tekin Örgü', 10, 100, 10, 40, '-', '1f49afb1d3.jpg'),
(72, 'Y.KOD 498', 10, 100, 10, 40, '2.80 HALKA NOKTA', '1f6edff6ba.jpg'),
(73, '24\'lü Hasır Kenarı Kalemli', 10, 100, 10, 40, '-', 'f03e74f4dc.jpg'),
(74, 'Halka Nokta', 10, 100, 10, 40, '-', 'ff07add691.jpg'),
(75, '050 Zemin Şeritli', 10, 100, 10, 40, '-', 'f49de51bda.jpg'),
(76, 'Zeminli Şeritli', 10, 100, 10, 40, 'KEREM KLASÖRÜ İÇİNDE ŞERİTLERİ KASIM AĞA', '29f010d886.jpg'),
(77, 'Y.KOD 095', 10, 100, 10, 40, '2.80 HALKA KUMLU', '8804d7cf8c.jpg'),
(78, '2 Dişli Kristal', 10, 100, 10, 40, '-', 'f4a339ccc2.jpg'),
(79, 'Normal X Modeli', 10, 100, 10, 40, '-', 'f6d0c1dee7.jpg'),
(80, 'Düz Şarnel EF-43', 10, 20, 10, 30, '-', '3c2f32e6d1.jpg'),
(81, 'Yeni 139 El Kalemli', 10, 100, 10, 40, '5 eksen zemin açılı açı 45 gerisi elkalem devir 600', '5fd4d3155f.jpg'),
(82, '1B', 10, 100, 10, 40, '-', '7bcb661bdb.jpg'),
(83, 'Lazerli 2.180', 10, 100, 10, 40, '-', '2bcfcefd43.jpg'),
(84, 'Şarnel 232', 10, 50, 10, 30, '-', '958f201611.jpg'),
(85, 'Y.KOD 469', 10, 100, 10, 40, '-', '20d8e153be.jpg'),
(86, 'Y.KOD 514', 10, 100, 10, 40, '-*', '6fd86f4332.jpg'),
(87, 'Çapraz Zemin', 10, 100, 10, 40, '-', '2a37f090cf.jpg'),
(88, 'K.O. 001', 10, 100, 10, 40, '-', 'default-bilezik.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparisler`
--

CREATE TABLE `siparisler` (
  `id` int(11) NOT NULL,
  `bilezik_id` int(11) NOT NULL,
  `agirlik` double NOT NULL,
  `genislik` double NOT NULL,
  `tarih` datetime NOT NULL,
  `cnc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

--
-- Tablo döküm verisi `siparisler`
--

INSERT INTO `siparisler` (`id`, `bilezik_id`, `agirlik`, `genislik`, `tarih`, `cnc`) VALUES
(25, 15, 22, 12, '2025-01-28 13:16:08', '-'),
(26, 18, 45, 20, '2025-01-28 13:36:45', 'zemin 5000 devir '),
(27, 30, 20, 15, '2025-01-28 14:06:43', '5 eksen cnc zemin açı 45 '),
(28, 30, 25, 15, '2025-01-28 15:15:10', '5 eksen cnc zemin açı 45 '),
(29, 38, 20, 15, '2025-01-28 15:30:27', '-'),
(30, 18, 25, 15, '2025-01-28 17:20:14', 'zemin 5000 devir '),
(31, 53, 20, 15, '2025-01-29 10:51:16', 'zemin 5 eksen bol simli'),
(32, 37, 30, 20, '2025-01-29 10:52:08', '8 ağızlı çelik kalem '),
(33, 16, 10, 10, '2025-01-29 10:53:14', '-'),
(34, 18, 10, 10, '2025-01-29 10:53:40', 'zemin 5000 devir '),
(35, 29, 10, 10, '2025-01-29 10:54:00', '5 eksen cnc zemin '),
(36, 35, 10, 10, '2025-01-29 10:54:26', 'eski zemin makinası 6000 devir'),
(37, 36, 10, 10, '2025-01-29 10:55:03', '-'),
(38, 42, 10, 10, '2025-01-29 10:55:24', 'zemin 5 eksen cnc model bekar 20 mm daraltıldı 8000 devir'),
(39, 43, 10, 10, '2025-01-29 10:55:48', '4.180 içeride atıldı gerisi cnc'),
(40, 50, 10, 10, '2025-01-29 10:56:39', 'zemin 5 eksen amerikan 9 eksen gerisi kalem odası'),
(41, 54, 10, 10, '2025-01-29 11:11:59', '-'),
(42, 55, 10, 10, '2025-01-29 11:58:53', '-'),
(43, 56, 10, 10, '2025-01-29 13:22:15', '-'),
(44, 57, 10, 10, '2025-01-29 14:15:08', '-'),
(45, 58, 10, 10, '2025-01-29 14:15:59', '-'),
(46, 55, 10, 10, '2025-01-29 14:34:11', '-'),
(47, 59, 10, 10, '2025-01-29 14:50:15', '050 zemin bol simli'),
(48, 60, 10, 10, '2025-01-29 14:50:55', '-'),
(49, 61, 10, 10, '2025-01-29 14:51:37', '-'),
(50, 62, 10, 10, '2025-01-29 15:10:17', '-'),
(51, 63, 20, 15, '2025-01-30 09:45:22', '-'),
(52, 64, 20, 15, '2025-01-30 11:46:54', 'eski makinada zemin atıldı standart devir kenarı var'),
(53, 64, 10, 10, '2025-01-30 12:17:06', 'eski makinada zemin atıldı standart devir kenarı var'),
(54, 65, 30, 20, '2025-01-30 12:24:06', 'bekara atılan şarlaklı model zemini 5 eksen kalemi şarlak 10 eksen'),
(55, 65, 28, 20, '2025-01-30 12:24:27', 'bekara atılan şarlaklı model zemini 5 eksen kalemi şarlak 10 eksen'),
(56, 66, 50, 30, '2025-01-30 13:40:56', 'VİDA ZEMİNLİ STANDART '),
(57, 67, 30, 20, '2025-01-30 13:42:07', 'ZEMİNLAZER 3.140'),
(58, 68, 30, 20, '2025-01-30 13:44:14', 'NOKTASI KALEM ODASINDA 90 AÇILI'),
(59, 69, 20, 15, '2025-01-30 14:11:16', '-'),
(60, 70, 10, 10, '2025-01-30 14:42:15', '-'),
(61, 71, 10, 10, '2025-01-30 14:45:28', '-'),
(62, 72, 50, 30, '2025-01-30 14:48:07', '2.80 HALKA NOKTA'),
(63, 73, 20, 15, '2025-01-30 14:58:07', '-'),
(64, 73, 20, 15, '2025-01-30 14:58:23', '-'),
(65, 73, 20, 15, '2025-01-30 14:58:34', '-'),
(66, 74, 20, 15, '2025-01-30 15:03:07', '-'),
(67, 75, 20, 15, '2025-01-30 15:04:31', '-'),
(68, 15, 10, 6, '2025-01-30 15:07:10', '-'),
(69, 61, 17, 12, '2025-01-30 15:07:47', '-'),
(70, 30, 10, 10, '2025-01-30 15:10:03', '5 eksen cnc zemin açı 45 '),
(71, 76, 15, 12, '2025-01-30 15:53:29', 'KEREM KLASÖRÜ İÇİNDE ŞERİTLERİ KASIM AĞA'),
(72, 77, 35, 25, '2025-01-30 16:00:46', '2.80 HALKA KUMLU'),
(73, 78, 33, 20, '2025-01-30 16:04:23', '-'),
(74, 72, 10, 10, '2025-01-30 16:48:37', '2.80 HALKA NOKTA'),
(75, 79, 20, 15, '2025-01-30 17:01:08', '-'),
(76, 80, 15, 15, '2025-01-30 17:21:37', '-'),
(77, 81, 30, 20, '2025-01-31 11:59:11', '5 eksen zemin açılı açı 45 gerisi elkalem devir 6000'),
(78, 82, 20, 15, '2025-01-31 15:48:29', '-'),
(79, 83, 20, 15, '2025-01-31 15:51:19', '-'),
(80, 84, 15, 15, '2025-01-31 15:54:55', '-'),
(81, 85, 20, 15, '2025-01-31 15:57:26', '-'),
(82, 86, 40, 25, '2025-01-31 15:59:38', '-*'),
(83, 87, 20, 15, '2025-01-31 16:01:56', '-'),
(84, 88, 20, 15, '2025-01-31 16:05:59', '-'),
(85, 15, 10, 6, '2025-01-31 17:11:52', '-');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `yetki` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`user_id`, `yetki`, `username`, `password`, `status`) VALUES
(1, 1, 'ubeydullah', '$2y$10$2Ekh/qvV5GVgYtrwvVv3PuNSqSlQIkKcI/Ake.bQw9ATKbt6HidSq', b'1'),
(2, 2, 'bafranazar', '$2y$10$2Ekh/qvV5GVgYtrwvVv3PuNSqSlQIkKcI/Ake.bQw9ATKbt6HidSq', b'1'),
(3, 2, 'görele', '$2y$10$2Ekh/qvV5GVgYtrwvVv3PuNSqSlQIkKcI/Ake.bQw9ATKbt6HidSq', b'1'),
(4, 1, 'enes', '$2y$10$2Ekh/qvV5GVgYtrwvVv3PuNSqSlQIkKcI/Ake.bQw9ATKbt6HidSq', b'1');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `bilezikler`
--
ALTER TABLE `bilezikler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `siparisler`
--
ALTER TABLE `siparisler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `bilezikler`
--
ALTER TABLE `bilezikler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- Tablo için AUTO_INCREMENT değeri `siparisler`
--
ALTER TABLE `siparisler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
