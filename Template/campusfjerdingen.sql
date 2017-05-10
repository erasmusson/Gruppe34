-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:8889
-- Generation Time: May 10, 2017 at 10:35 AM
-- Server version: 5.6.34-log
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `campusfjerdingen`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `name` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`name`) VALUES
('butikk'),
('Campus'),
('Helse'),
('Musikk'),
('personlig utveckling'),
('trening'),
('uteliv');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `description` text,
  `starts_at` datetime DEFAULT NULL,
  `image_path` text CHARACTER SET latin1,
  `category` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `location` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `highlighted` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `starts_at`, `image_path`, `category`, `location`, `highlighted`) VALUES
(1, 'Radiohead', 'Radiohead har siden debutalbumet ”Pablo Honey” fra 1992 tatt fansen med storm.', '2017-06-07 19:30:00', 'pic/musikk.png', 'Musikk', 'Sentrum Scene', 1),
(2, 'John Legend', 'John Legend har til nå solgt millioner av album verden over og vunnet en rekke priser i løpet av sin karriere. ', '2017-09-27 19:30:00', 'pic/musikk.png', 'Musikk', 'Oslo Spektrum', 1),
(3, 'J. Cole 4 Your Eyez Only Tour', 'J. Cole er encprofilead artister, med stor suksess som produsent, komponist tekstforfatter, og selvfølgelig rapper. ', '2017-09-30 20:00:00', 'pic/musikk.png', 'Musikk', 'Oslo Spektrum', 1),
(4, 'Ricky Gervais', 'Den prisbelønte komikeren, Ricky Gervais, gjester med Humanity World Tour.', '2017-09-26 19:30:00', 'pic/masks.png', 'personlig utveckling', 'Oslo Spektrum', 1),
(5, 'Diana Krall', 'Diana Krall, den berømte sangeren og jazzpianisten, kommende verdensturné i forbindelse med nytt album.', '2017-10-01 19:30:00', 'pic/musikk.png', 'Musikk', 'Oslo Spektrum', 1),
(6, 'Gabriel Iglesias', 'I 2017 legger Gabriel Iglesias, en av verdens mest kjente komikere, ut på sin største verdensturné. ', '2017-10-04 19:30:00', 'pic/masks.png', 'personlig utveckling', 'Oslo Spektrum', 1),
(7, 'Zucchero', '', '2017-09-04 20:00:00', 'pic/musikk.png', 'Musikk', 'Sentrum Scene', 1),
(8, 'Gabrielle', 'Gabrielle tok et år «fri» fra offentligheten, og har brukt tiden til å være i studio for å lage nye ting. ', '2017-10-07 19:00:00', 'pic/musikk.png', 'Musikk', 'Sentrum Scene', NULL),
(9, 'Radioresepsjonen Live', NULL, '2017-11-23 19:00:00', 'pic/masks.png', 'Musikk', 'Sentrum Scene', NULL),
(10, 'Harm & Hegseth', NULL, '2017-06-15 19:00:00', 'pic/masks.png', 'personlig utveckling', 'John Dee', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `eventseng`
--

CREATE TABLE IF NOT EXISTS `eventseng` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `description` text,
  `starts_at` datetime DEFAULT NULL,
  `image_path` text CHARACTER SET latin1,
  `category` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `location` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `highlighted` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `eventseng`
--

INSERT INTO `eventseng` (`id`, `title`, `description`, `starts_at`, `image_path`, `category`, `location`, `highlighted`) VALUES
(1, 'Radiohead', 'Radiohead has since their debutalbum from 1992 taken the fans by storm.', '2017-06-07 19:30:00', 'pic/musikk.png', 'Musikk', 'Sentrum Scene', 1),
(2, 'John Legend', 'John Legend has sold millions of album world wide and won multiple prices.', '2017-09-27 19:30:00', 'pic/musikk.png', 'Musikk', 'Oslo Spektrum', 1),
(3, 'J. Cole 4 Your Eyez Only Tour', 'J.Cole is a artist with huge success and a producent, componist, writer and rapper. ', '2017-09-30 20:00:00', 'pic/musikk.png', 'Musikk', 'Oslo Spektrum', 1),
(4, 'Ricky Gervais', 'The award winning comedian is hosting Humanity World Tour.', '2017-09-26 19:30:00', 'pic/masks.png', 'personlig utveckling', 'Oslo Spektrum', 1),
(5, 'Diana Krall', 'Diana Krall, famous singer and jazzpianist, is touring world wide.', '2017-10-01 19:30:00', 'pic/musikk.png', 'Musikk', 'Oslo Spektrum', 1),
(6, 'Gabriel Iglesias', 'In 2017 Gabriel Inglesis, one of the most known comedians, tours world wide.', '2017-10-04 19:30:00', 'pic/masks.png', 'personlig utveckling', 'Oslo Spektrum', 1),
(7, 'Zucchero', '', '2017-09-04 20:00:00', 'pic/musikk.png', 'Musikk', 'Sentrum Scene', 1),
(8, 'Gabrielle', 'Gabrielle had one year of to make songs. Now she is back!', '2017-10-07 19:00:00', 'pic/musikk.png', 'Musikk', 'Sentrum Scene', NULL),
(9, 'Radioresepsjonen Live', NULL, '2017-11-23 19:00:00', 'pic/masks.png', 'Musikk', 'Sentrum Scene', NULL),
(10, 'Harm & Hegseth', NULL, '2017-06-15 19:00:00', 'pic/masks.png', 'personlig utveckling', 'John Dee', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE IF NOT EXISTS `location` (
  `name` varchar(255) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `directions` text CHARACTER SET latin1,
  `openinghours` text,
  `category` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `cssid` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`name`, `directions`, `openinghours`, `category`, `cssid`) VALUES
('4Sound Schous Plass', 'https://www.google.no/maps/dir/''''/4Sound+Schous+Plass,+Trondheimsveien+2,+0560+Oslo/@59.9184789,10.7519753,15z/data=!4m8!4m7!1m0!1m5!1m1!1s0x4641da3cff5a56df:0x5ce389b143411c3c!2m2!1d10.7607316!2d59.9184975', '10-19, Lørdag 10:00 - 16:00', 'Musikk', 'a'),
('Actic Storgata', 'https://www.google.no/maps/dir//Actic+Storgata,+Storgata+38,+0182+Oslo/@59.9161814,10.7574309,19.25z/data=!4m15!1m6!3m5!1s0x0:0x9e9cd85ca6018069!2sActic+Storgata!8m2!3d59.916182!4d10.7575458!4m7!1m0!1m5!1m1!1s0x46416e60d8b925a3:0x9e9cd85ca6018069!2m2!1d10.757546!2d59.916182?hl=en', 'M-F: 5-11, L-S: 8-10', 'trening', 'e'),
('Apotektet Gunerius', 'https://www.google.no/maps/dir//Apotek+1+Gunerius,+Storgata+32,+0184+Oslo/@59.9145991,10.7542846,16.04z/data=!4m15!1m6!3m5!1s0x0:0xc25272efa012012d!2sApotek+1+Gunerius!8m2!3d59.9139302!4d10.7532401!4m7!1m0!1m5!1m1!1s0x46416e619a7762a5:0xc25272efa012012d!2m2!1d10.7532404!2d59.91393?hl=en', 'M-F: 9-20, L: 10-18', 'Helse', 'f'),
('Byporten', 'https://www.google.no/maps/dir//Byporten+Shopping,+Jernbanetorget+6,+0154+Oslo/@59.9125546,10.7510445,17z/data=!4m15!1m6!3m5!1s0x0:0x342f2ca6da0e19e9!2sByporten+Shopping!8m2!3d59.91177!4d10.751551!4m7!1m0!1m5!1m1!1s0x46416e8a076d4dcf:0x342f2ca6da0e19e9!2m2!1d10.7515508!2d59.9117697?hl=en', 'M-F: 10-21, L: 10-20', 'butikk', 'g'),
('Campus Brenneriveien', 'https://www.google.no/maps/dir/''''/Brenneriveien+9,+Oslo/@59.9203519,10.7484207,16z/data=!3m1!4b1!4m8!4m7!1m0!1m5!1m1!1s0x46416e6433784157:0x2bdd2c0930d805a3!2m2!1d10.7527981!2d59.920352', '07.30 – 24.00, lørdag og søndag, 10.00 – 23.00', 'Campus', 'b'),
('Campus Fjerdingen', 'https://www.google.no/maps/dir/''''/campus+fjerdingen+westerdals/@59.9160353,10.6899531,12z/data=!3m1!4b1!4m8!4m7!1m0!1m5!1m1!1s0x46416e60b902ae21:0x8b7ccf98f6ed393c!2m2!1d10.7599923!2d59.9160539', '07.30 – 24.00, lørdag og søndag, 10.00 – 23.00', 'Campus', 'c'),
('Campus Vulkan', 'https://www.google.no/maps/dir/''''/Westerdals+Oslo+ACT,+Vulkan,+Oslo/@59.9223308,10.7454934,15z/data=!4m8!4m7!1m0!1m5!1m1!1s0x46416e649635af45:0xaabd74df8a4d5dde!2m2!1d10.7524968!2d59.9233391', '08.00 – 22.00, lørdag 10.00-18.00 og søndag 10.00 – 20.00', 'Campus', 'd'),
('Ditt apotek Grunerlokka', 'https://www.google.no/maps/dir//Ditt+Apotek+Gr%C3%BCnerl%C3%B8kka,+Thorvald+Meyers+gate+78C,+0550+Oslo/@59.9172033,10.7572763,16.5z/data=!4m15!1m6!3m5!1s0x0:0x9536944951709475!2sDitt+Apotek+Gr%C3%BCnerl%C3%B8kka!8m2!3d59.9187327!4d10.7595594!4m7!1m0!1m5!1m1!1s0x46416e6719c86243:0x9536944951709475!2m2!1d10.7595588!2d59.9187335?hl=en', 'M-F: 10-19, L: 11-21, S: 11-20', 'Helse', 'h'),
('EVO Grunerlokka', 'https://www.google.no/maps/dir//EVO+Gr%C3%BCnerl%C3%B8kka,+Thorvald+Meyers+gate+72,+0552+Oslo/@59.9191494,10.7596829,17.5z/data=!4m15!1m6!3m5!1s0x0:0x63f5dc46f62414d4!2zRVZPIEdyw7xuZXJsw7hra2E!8m2!3d59.919991!4d10.7598712!4m7!1m0!1m5!1m1!1s0x46416e6700ce72fb:0x63f5dc46f62414d4!2m2!1d10.7598709!2d59.9199906?hl=en', '5-00', 'trening', 'i'),
('Filter Musikk Sentralbord', 'https://www.google.no/maps/dir//Filter+Musikk+Sentralbord,+Skippergata+33,+0154+Oslo/@59.9142787,10.7537974,16z/data=!4m15!1m6!3m5!1s0x0:0xb8b0072a825014af!2sFilter+Musikk+Sentralbord!8m2!3d59.9127409!4d10.7493322!4m7!1m0!1m5!1m1!1s0x46416e620dfa791f:0xb8b0072a825014af!2m2!1d10.7493316!2d59.9127411?hl=en', 'M-F: 11-18, L: 11-17', 'Musikk', 'j'),
('Fitness24Seven', 'https://www.google.no/maps/dir//Fitness24Seven,+Markveien+35,+0554+Oslo/@59.9209723,10.7569256,17z/data=!4m15!1m6!3m5!1s0x0:0x22aead9cd844325c!2sFitness24Seven!8m2!3d59.9217171!4d10.7569342!4m7!1m0!1m5!1m1!1s0x46416e66153c4253:0x22aead9cd844325c!2m2!1d10.7569336!2d59.9217167?hl=en', '24/7', 'trening', 'k'),
('Gitarhuset', 'https://www.google.no/maps/dir//Gitarhuset,+Lybekkergata+3,+0184+Oslo/@59.9148057,10.7551063,16z/data=!4m15!1m6!3m5!1s0x0:0xd91e5fbdd41f8cb2!2sGitarhuset!8m2!3d59.9135463!4d10.7528096!4m7!1m0!1m5!1m1!1s0x46416e61921a25b9:0xd91e5fbdd41f8cb2!2m2!1d10.7528097!2d59.9135457?hl=en', 'M-F: 10-18, L: 10-16', 'Musikk', 'm'),
('GlasMagasinet StorTorvet', 'https://www.google.no/maps/dir//GlasMagasinet+Stortorvet,+Stortorvet+9,+0155+Oslo/@59.9134405,10.7463724,17.5z/data=!4m15!1m6!3m5!1s0x0:0x94e4b22d10054d49!2sGlasMagasinet+Stortorvet!8m2!3d59.9132811!4d10.7453283!4m7!1m0!1m5!1m1!1s0x46416e628ffa3d43:0x94e4b22d10054d49!2m2!1d10.7453278!2d59.9132813?hl=en', 'M-F: 10-19, L: 10-18', 'butikk', 'n'),
('Gunerius Shoppingsenter', 'https://www.google.no/maps/dir//Gunerius+Shoppingsenter,+Storgata+32,+0184+Oslo/@59.9134313,10.7522891,17z/data=!4m15!1m6!3m5!1s0x0:0xfeae9917819c93b9!2sGunerius+Shoppingsenter!8m2!3d59.9142371!4d10.7530899!4m7!1m0!1m5!1m1!1s0x46416e6184dbd55b:0xfeae9917819c93b9!2m2!1d10.7530902!2d59.9142366?hl=en', 'M-F: 9-20, L: 10-18', 'butikk', 'o'),
('Haralds Gym', 'https://www.google.no/maps/dir//Harald''s+Gym,+Hausmanns+gate+6,+0186+Oslo/@59.9160053,10.7591336,19z/data=!4m15!1m6!3m5!1s0x0:0xb74756ec051ce3f0!2sHarald''s+Gym!8m2!3d59.9157867!4d10.7587025!4m7!1m0!1m5!1m1!1s0x46416e60c2636a03:0xb74756ec051ce3f0!2m2!1d10.7587026!2d59.9157868?hl=en', 'M-F: 9-22, L-S: 12-18', 'trening', 'p'),
('Hoornas musikk ', 'https://www.google.no/maps/dir//Hornaas+musikk+AS,+Storgata+43,+0182+Oslo/@59.9146767,10.7541407,16z/data=!4m15!1m6!3m5!1s0x0:0xb07ad48f71421770!2sHornaas+musikk+AS!8m2!3d59.9153036!4d10.7552223!4m7!1m0!1m5!1m1!1s0x46416e611190d18b:0xb07ad48f71421770!2m2!1d10.7552215!2d59.9153038?hl=en', 'M-F: 9-17, L: 10-15', 'Musikk', 'q'),
('John Dee', 'https://www.google.no/maps/dir//John+Dee+Live+Club+%26+pub,+Torggata+16,+0181+Oslo/@59.9149653,10.7534975,16.25z/data=!4m15!1m6!3m5!1s0x0:0x33ef37cbcde374a4!2sJohn+Dee+Live+Club+%26+pub!8m2!3d59.916025!4d10.7500041!4m7!1m0!1m5!1m1!1s0x46416e63c6a40423:0x33ef37cbcde374a4!2m2!1d10.7500038!2d59.9160245?hl=en', 'M-F: 9-20 samt vid evenemang', 'Musikk', 'r'),
('KJ10', 'https://www.google.no/maps/dir/''/''/@59.9117935,10.676421,12z/data=!3m1!4b1!4m8!4m7!1m0!1m5!1m1!1s0x46416e89d3be7c65:0x28b2ffe94e12b4f6!2m2!1d10.7464602!2d59.9118121', 'M-O: Stengt, T-F: 22:00 – 03:00 (18+), L: 22:00 – 03:00 (20+)', 'uteliv', 's'),
('Klatresenter', 'https://www.google.no/maps/dir//Vulkan+Klatresenter+%2F+Kols%C3%A5s+Klatreklubb,+Vulkan+13,+0178+Oslo/@59.9215046,10.7528873,17z/data=!4m15!1m6!3m5!1s0x0:0x79d4cf1a47d3d7ca!2sVulkan+Klatresenter+%2F+Kols%C3%A5s+Klatreklubb!8m2!3d59.9229441!4d10.7519647!4m7!1m0!1m5!1m1!1s0x46416e657fc7a629:0x79d4cf1a47d3d7ca!2m2!1d10.7519648!2d59.9229439?hl=en', 'M, O: 10-23, T,T: 7-23, F: 10-22, L,S: 10-20', 'trening', 't'),
('Legevakt Oslo', 'https://www.google.no/maps/dir/''''/legevakta+grunerl%C3%B8kka/@59.917586,10.7528332,15.5z/data=!4m8!4m7!1m0!1m5!1m1!1s0x46416e60d268daeb:0x278d2aa274e06d5b!2m2!1d10.7588002!2d59.9169887', 'Døgnåpent', 'Helse', 'u'),
('Mathallen', 'https://www.google.no/maps/dir//Mathallen+Oslo/@59.9213037,10.7480466,16z/data=!4m8!4m7!1m0!1m5!1m1!1s0x0:0xa5a63004da75d5c3!2m2!1d10.7519997!2d59.9222213', 'Tirsdag og onsdag: 10-19, Torsdag og fredag: 10-20, Lørdag: 10-19, Søndag: 11-18, Mandag: Stengt', 'butikk', 'v'),
('Mysore Yoga Oslo', 'https://www.google.no/maps/dir//Mysore+Yoga+Oslo,+Maridalsveien+15+b,+0175+Oslo/@59.9223997,10.7517835,18.08z/data=!4m15!1m6!3m5!1s0x0:0x669270457fbfd573!2sMysore+Yoga+Oslo!8m2!3d59.92291!4d10.751657!4m7!1m0!1m5!1m1!1s0x46416e6584ea9695:0x669270457fbfd573!2m2!1d10.7516566!2d59.9229098?hl=en', 'M-T: 6.30 – 10.55, F: 7-8.30, S:9-11', 'trening', 'w'),
('Nedre Lokka', 'https://www.google.no/maps/dir/''/''/@59.9189319,10.6874281,12z/data=!3m1!4b1!4m8!4m7!1m0!1m5!1m1!1s0x46416e66e62219db:0x11c461df3678b8c7!2m2!1d10.7574673!2d59.9189505', 'M-T: 16:00 – 01:00, O-L: 16:00 – 03:00, S: 16:00 – 01:00', 'uteliv', 'aa'),
('Oslo Bonanza', 'https://www.google.no/maps/dir/''/''/@59.9149814,10.6785198,12z/data=!3m1!4b1!4m8!4m7!1m0!1m5!1m1!1s0x46416e6252ae3ea5:0x912b7f0981bbda18!2m2!1d10.748559!2d59.915', 'M-S: 15:00 – 03:30', 'uteliv', 'ab'),
('Oslo City', 'https://www.google.no/maps/dir//Oslo+City,+Stenersgata+1,+0050+Oslo/@59.9126837,10.750669,17z/data=!4m15!1m6!3m5!1s0x0:0x3c7c2249bb653fd8!2sOslo+City!8m2!3d59.9126061!4d10.7527352!4m7!1m0!1m5!1m1!1s0x46416e62300dada1:0x3c7c2249bb653fd8!2m2!1d10.7527348!2d59.9126064?hl=en', 'M-F: 10 – 22, L:10-20', 'butikk', 'ad'),
('Oslo Kettlebell Gym', 'https://www.google.no/maps/dir//Oslo+Kettlebell+Gym,+Toftes+Gate+60B,+0552+Oslo/@59.9217353,10.7558823,15.75z/data=!4m15!1m6!3m5!1s0x0:0x5a7fd9dc6cc51aa1!2sOslo+Kettlebell+Gym!8m2!3d59.9246086!4d10.761551!4m7!1m0!1m5!1m1!1s0x46416e6859463837:0x5a7fd9dc6cc51aa1!2m2!1d10.7615496!2d59.9246084?hl=en', 'M, O, :16-20, T, T: 5-19, F: 16-18, L: 10-12, S: 10-12 ', 'trening', 'al'),
('Oslo Performance Center', 'https://www.google.no/maps/dir//Oslo+Performance+Center,+Ole+Deviks+vei+6C,+0666+Oslo/@59.9186853,10.7564521,16.25z/data=!4m15!1m6!3m5!1s0x0:0x478891c853db377e!2sOslo+Performance+Center!8m2!3d59.9191031!4d10.7603936!4m7!1m0!1m5!1m1!1s0x46416fa46622a9eb:0x478891c853db377e!2m2!1d10.7603942!2d59.9191033?hl=en', '6-22', 'trening', 'ao'),
('Oslo Spektrum', 'https://www.google.no/maps/dir//Oslo+Spektrum,+Sonja+Henies+plass+2,+0185+Oslo/@59.9131472,10.7556808,16.25z/data=!4m15!1m6!3m5!1s0x0:0xeaab41e737da924c!2sOslo+Spektrum!8m2!3d59.9129849!4d10.7547422!4m7!1m0!1m5!1m1!1s0x46416e61cee4e1bf:0xeaab41e737da924c!2m2!1d10.7547424!2d59.9129853?hl=en', 'Vid evenemang', 'Musikk', 'ah'),
('Sats Schouss Plass', 'https://www.google.no/maps/dir//SATS+Schous+plass,+Trondheimsveien+2D,+0560+Oslo/@59.9192347,10.7595827,17.5z/data=!4m15!1m6!3m5!1s0x0:0x48a89b750cc8457d!2sSATS+Schous+plass!8m2!3d59.9191918!4d10.7606853!4m7!1m0!1m5!1m1!1s0x46416e676ed41215:0x48a89b750cc8457d!2m2!1d10.7606847!2d59.9191925?hl=en', 'M-T: 6-22:30, F:6-21, L:8,30 – 19, S: 10-20', 'trening', 'ak'),
('Sats Spektrum', 'https://www.google.no/maps/dir//SATS+Spektrum,+Sonja+Henies+plass+4,+0185+Oslo/@59.9137754,10.7546228,16.33z/data=!4m15!1m6!3m5!1s0x0:0x610613367814e879!2sSATS+Spektrum!8m2!3d59.9128303!4d10.7549286!4m7!1m0!1m5!1m1!1s0x46416e676ed41215:0x610613367814e879!2m2!1d10.7549286!2d59.9128297?hl=en', 'M-T: 6.15-21.30, F: 6.15-19.00, L: 10-17, S: 11-18', 'trening', 'ai'),
('Sentrum Scene', 'https://www.google.no/maps/dir//Sentrum+Scene,+Arbeidersamfunnets+plass+1,+0181+Oslo/@59.9148025,10.754111,16.25z/data=!4m15!1m6!3m5!1s0x0:0x889fc4a02b060b4d!2sSentrum+Scene!8m2!3d59.915504!4d10.7518065!4m7!1m0!1m5!1m1!1s0x46416e63d9f8b72d:0x889fc4a02b060b4d!2m2!1d10.751807!2d59.9155044?hl=en', 'Vid evenemang', 'Musikk', 'aj'),
('SIO Vulkan', 'https://www.google.no/maps/dir//SiO+Vulkan,+Vulkan+15,+0178+Oslo/@59.9218688,10.7526382,17z/data=!4m15!1m6!3m5!1s0x0:0x667bd5fbc8575432!2sSiO+Vulkan!8m2!3d59.9231488!4d10.7521981!4m7!1m0!1m5!1m1!1s0x46416e65862ca5fb:0x667bd5fbc8575432!2m2!1d10.752198!2d59.923149?hl=en', 'M-T: 6-22, F: 6-20, L: 10-18, S: 10-19', 'trening', 'ae'),
('Skuret Bar og Scene', 'https://www.google.no/maps/dir/''/''/data=!4m5!4m4!1m0!1m2!1m1!1s0x46416e6057bf3f39:0xb0c5a4c41a92d20d?sa=X&ved=0ahUKEwjqz7Xov8TTAhVEM5oKHdfaDakQ9RcICzAA', 'M-T: 16:00 – 01:00, F: 15:00 – 03:30, L: 16:00 – 03:30, S: 18:00 – 01:00', 'uteliv', 'am'),
('Stamnia Key Bjorvika', 'https://www.google.no/maps/dir//Stamina+KEY+Bj%C3%B8rvika,+Mandalls+gate+18,+0190+Oslo/@59.9128096,10.757273,16.33z/data=!4m15!1m6!3m5!1s0x0:0x5ea1a8a1d0f65a2a!2sStamina+KEY+Bj%C3%B8rvika!8m2!3d59.9106089!4d10.7626748!4m7!1m0!1m5!1m1!1s0x46416ef563fa429f:0x5ea1a8a1d0f65a2a!2m2!1d10.7626749!2d59.9106087?hl=en', 'M-F: 24-24, L: 5-00, S: 5-00', 'trening', 'an'),
('SYNG', 'https://www.google.no/maps/dir/''/''/@59.9189319,10.6874281,12z/data=!3m1!4b1!4m8!4m7!1m0!1m5!1m1!1s0x46416e66e62219db:0x11c461df3678b8c7!2m2!1d10.7574673!2d59.9189505', 'M-T: 14:00 – 01:00, F: 14:00 – 03:30 L: 12:00 – 03:30, S: 12:00 – 01:00', 'uteliv', 'ac'),
('Territoriet', 'https://www.google.no/maps/dir/''/''/@59.9189319,10.6874281,12z/data=!3m1!4b1!4m8!4m7!1m0!1m5!1m1!1s0x46416e66e62219db:0x11c461df3678b8c7!2m2!1d10.7574673!2d59.9189505', 'M-F: 16:00 – 01:00, L-S: 12:00 – 01:00', 'uteliv', 'ag'),
('Torggata Bad Treningssenter', 'https://www.google.no/maps/dir//Torggata+Bad+Treningssenter,+Torggata+16,+0181+Oslo/@59.9161051,10.7542244,16.33z/data=!4m15!1m6!3m5!1s0x0:0x409fda4a4a2796ec!2sTorggata+Bad+Treningssenter!8m2!3d59.9158798!4d10.7507376!4m7!1m0!1m5!1m1!1s0x46416e63c6a40423:0x409fda4a4a2796ec!2m2!1d10.7507381!2d59.9158796?hl=en', 'M-T: 6.45 – 21, F: 6,30 – 19, L: 13-17, S: 13-17', 'trening', 'ap'),
('Verkstedet', 'https://www.google.no/maps/dir/''/''/@59.9176979,10.6839495,12z/data=!3m1!4b1!4m8!4m7!1m0!1m5!1m1!1s0x46416e66acf2ba6d:0xf403a8803411967c!2m2!1d10.7539887!2d59.9177165', 'M-T: Stengt, O: 17:00 – 01:00, T: 19:00 – 01:00, F-L: 19:00 – 03:00, S: Stengt ', 'uteliv', 'af'),
('Vitus Apoteket Jernbanetorget', 'https://www.google.no/maps/dir//Vitusapotek+Jernbanetorget,+Jernbanetorget+4B,+0154+Oslo/@59.9122334,10.7508249,17.25z/data=!4m15!1m6!3m5!1s0x0:0x94f87cf622d32cfd!2sVitusapotek+Jernbanetorget!8m2!3d59.9117589!4d10.7499062!4m7!1m0!1m5!1m1!1s0x46416e89fc85818b:0x94f87cf622d32cfd!2m2!1d10.7499056!2d59.9117594?hl=en', '24/7', 'Helse', 'aq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`name`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `category` (`category`),
  ADD KEY `location` (`location`);

--
-- Indexes for table `eventseng`
--
ALTER TABLE `eventseng`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `category` (`category`),
  ADD KEY `location` (`location`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`name`),
  ADD KEY `category` (`category`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `eventseng`
--
ALTER TABLE `eventseng`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `eventseng`
--
ALTER TABLE `eventseng`
  ADD CONSTRAINT `eventseng_ibfk_1` FOREIGN KEY (`category`) REFERENCES `category` (`name`),
  ADD CONSTRAINT `eventseng_ibfk_2` FOREIGN KEY (`location`) REFERENCES `location` (`name`);

--
-- Constraints for table `location`
--
ALTER TABLE `location`
  ADD CONSTRAINT `location_ibfk_1` FOREIGN KEY (`category`) REFERENCES `category` (`name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
