-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Version du serveur: 5.5.16
-- Version de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `e-commerce`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `user` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `tel` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user` (`user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`id`, `nom`, `prenom`, `user`, `password`, `tel`) VALUES
(1, 'nassiri', 'badr', 'admin', 'admin', '0677667766');



-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(200) NOT NULL,
  `categorie` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `prix` double NOT NULL,
  `description` varchar(200) NOT NULL,
  `ar_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id`, `nom`, `categorie`, `image`, `prix`, `description`, `ar_date`) VALUES
(5, 'huawei nova 20', 'telephone', 's-l300.jpg', 4500, 'Un design élégant et fin, un bel écran bien contrasté, de bonnes performances en 3D... le smartphone', '2023-05-1'),
(7, 'Samsung Galaxy A71', 'telephone', '1.jpg', 4500, '6.7" (128Go, 6Go) Android 64MP+12MP+5MP+5MP/32MP ', '2023-05-1'),
(8, 'Samsung Galaxy S20+', 'telephone', '1 (1).jpg', 9750.3, '+ 6.7" (128Go, 8Go) Android 10 12MP+64MP+12MP+0.3MP/10MP - Bleu - 1 an de garantie', '2023-05-1'),
(9, 'XIAOMI Redmi Note 9S', 'telephone', '1 (2).jpg', 2900, '6.67" (4Go, 64Go) 48MP+8MP+5MP+2MP/16MP Android - Bleu', '2020-05-21'),
(10, 'Samsung Galaxy Z Flip', 'telephone', '1 (3).jpg', 13500, '6.7" (256Go, 8Go) Android 12MP+12MP/10MP - Miroir Noir - 1 an de garantie', '2023-05-1'),
(11, 'Apple iPhone 11 PRO', 'telephone', '1 (4).jpg', 15300, '5.8" - 4Go - 256Go - 4K - Wireless Fast Charging - Argent', '2023-05-1'),
(12, 'Samsung Galaxy Fold ', 'telephone', '1 (5).jpg', 19000, '7.3" (512Go, 12Go) Android 9.0 - Noir - 1 an de garantie', '2023-05-1'),
(13, 'Samsung Galaxy S20 Ultra', 'telephone', '1 (6).jpg', 12900, '6.9" (128Go,12Go) Android 10 -Gris - 1 an de garantie', '2023-05-1'),
(14, 'XIAOMI Mi 10', 'telephone', '1 (7).jpg', 8990, '6.67" (256Go, 8Go) 108MP+13MP+2MP+2MP/20MP Android - Vert', '2023-05-1'),
(15, 'Apple iPhone 8 Plus', 'telephone', '1 (8).jpg', 6000, '5.5" -Reconditionné Premium - 256GB - IOS - 3Go - Space grey', '2023-05-1'),
(16, 'Oppo F1 Plus', 'telephone', '1 (9).jpg', 4300, ' – 64 Go – Android 5.1 – 4 Go RAM – 5.5'' – Gold', '2023-05-1'),
(17, 'Huawei P20 PRO ', 'telephone', '1 (10).jpg', 4700.99, '6Go RAM - 128Go - 6.1 Pouces HD - Triple Camera - Noir', '2023-05-1'),
(18, '  Lenovo LENOVO IDEAPAD 330', 'ordinateur', '1 (11).jpg', 3000.99, ' -15IGM CELERON N4000 15,6 (1To, 4Go) Noir Onyx', '2023-05-1'),
(19, 'Toshiba 6eme generation', 'ordinateur', '1 (12).jpg', 3400.99, '14" Tecra Z40-C-105 - i5 - 8 Go RAM 128Go SSD IPS Full HD', '2023-05-1'),
(20, 'Apple MacBook Pro 16', 'ordinateur', '1 (13).jpg', 39999.99, '_2,3GHz-2019 / 1TB_Silver', '2023-05-1'),
(21, 'DELL Précision 7730', 'ordinateur', '1 (14).jpg', 28900.5, 'Ecran17.3"- i7-8850H- 2TSSD-RAM64G- NVIDIA Quadro P5200 GDDR5 de 16 GB- Noir', '2023-05-1'),
(22, 'Hp Zbook 17', 'ordinateur', '1 (15).jpg', 25800, 'G6-17,3"Full HD- i7 9850H- 512G SSD- RAM32GB-Win 10 Pro- Argent', '2023-05-1'),
(23, 'Apple MacBook Pro', 'ordinateur', '1 (16).jpg', 22700, '13.3'' Touch Bar 2019', '2023-05-21'),
(24, 'Hp Elitebook 830', 'ordinateur', '1 (17).jpg', 10500, '13.3" Tactile- i5 8350u- 256 SSD- RAM 16G- Win10 Pro- Azerty', '2023-05-1'),
(26, 'Hp Probook 430 G6', 'ordinateur', '3.jpg', 8200.22, '13,3"- i5 8265u- RAM 8G- 256SSD- Win10Pro- Azerty- Argent', '2023-05-1'),
(27, 'Lenovo Thinkpad T570', 'ordinateur', '1 (19).jpg', 7900, '15,6"- i5 7300u- RAM 8GB- 512G SSD- Garantie 2 ans - Noir\r\n', '2023-05-1'),
(28, 'Lenovo S340-15IML', 'ordinateur', '1 (20).jpg', 7300.99, ' 15,6" LED IPS , i5-10210U, 8GB, 512GB, GEFORCE MX250', '2023-05-1'),
(29, ' Samsung TAB S6', 'tablette', '1 (21).jpg', 7700.99, '10.5" (128Go, 6Go) Android 13MP+5MP/8MP - Argent - 1 an de garantie', '2023-05-1'),
(30, 'Samsung Galaxy Tab A ', 'tablette', '1 (22).jpg', 1690, '8.0", QUAD 2 Ghz 2GB / 32Go LTE - NOIR', '2023-05-1'),
(31, 'Hp ', 'tablette', '1 (23).jpg', 6990, 'Pro x2 612 G2 - Gris', '2023-05-1'),
(32, 'Samsung Galaxy Tab S5e', 'tablette', '1 (24).jpg', 4800, '2019 10.5" LTE (64Go, 4Go) Android 13MP/8MP - Argent', '2020-05-1'),
(33, 'Samsung Galaxy Tab E', 'tablette', '11.jpg', 1750, '(9.6) black t561', '2023-05-22'),
(34, 'Zatec ZKIDS ', 'tablette', '1 (25).jpg', 650, '3,0 7" Wifi (16Go, 1Go) Dual caméra - Bleu', '2023-05-22'),
(35, 'Logicom Tablette ', 'tablette', '1 (26).jpg', 990, 'Tab Link 71P- 3G - 1G Ram - 16G Rom - 7.0" TFT - Blanc', '2023-05-2'),
(36, 'Huawei Tablette', 'tablette', '1 (27).jpg', 2099, 'Mediapad T3 10 9.6" - 32Go, 2Go - 4G -Wifi - 5MP/2MP Android N- Gris', '2023-05-2'),
(37, 'Canon M50', 'camera', '1 (28).jpg', 6800, '+ 15-45mm + carte mémoire 16G', '2023-05-2'),
(38, 'Canon Reflex EOS 4000D', 'camera', '1 (29).jpg', 3200, '+ Objectif Canon EF-S 18-55mm + Sacoche CB-HL100', '2023-05-2'),
(39, 'Canon XA40', 'camera', '1 (30).jpg', 18000, '+ 1an de garantie\r\n', '2020-05-22'),
(40, 'AgfaPhoto Realipix Square S ', 'camera', '2.jpg', 1450, 'Appareil Photo Numérique - 10Mp - Bluetooth', '2023-05-2'),
(41, 'Canon EOS 250D', 'camera', '1 (31).jpg', 6500, '+18-55mm STM + trépied offert', '2023-05-2'),
(42, 'Canon 6D', 'camera', '1 (32).jpg', 16400, 'mark II boitier + 2ans de garantie', '2023-05-2'),
(43, 'Canon Eos 4000D ', 'camera', '1 (33).jpg', 3600, '+ 18-55mm + 2ans de garantie', '2023-05-2'),
(44, 'Nikon B600', 'camera', '1 (34).jpg', 3800, ' (carte 16GB + sac offert)', '2023-05-22'),
(45, 'Nikon D3500', 'camera', '1 (35).jpg', 5100, 'Kit+Objectif AF-P DX Nikkor 18-55mm f/3.5-5.6G VR (carte 16GB + sac offert)', '2023-05-2'),
(46, 'Universal V19 In-Ear', 'accessoire', '1 (37).jpg', 200, 'Bluetooth 4.1 Ear-piece Headphone Stereo Headset', '2023-05-7'),
(47, 'Apple Watch Series 5', 'accessoire', '1 (38).jpg', 8300, 'Cellular 44 mm Bo&#238;tier en Aluminium Gris Sidéral avec Bracelet Sport Noir', '2023-05-7'),
(48, 'Cellular 44 ', 'accessoire', '1 (39).jpg', 4899, 'mm Bo&#238;tier en Aluminium Gris Sidéral avec Bracelet Sport Noir Limited Edition + Etui de recharge - Eclipes', '2023-05-7'),
(49, 'Apple Airpods Pro', 'accessoire', '1 (40).jpg', 3900, ' Ecouteurs sans fil True Wireless - Blanc', '2023-05-27'),
(50, 'Samsung Galaxy Watch Active2', 'accessoire', '1 (42).jpg', 2900, '44mm 1.4"(4Go, 0.75Go) Tizen - Argent - 1 an de garantie', '2023-05-7'),
(51, 'TWS i11', 'accessoire', '1 (43).jpg', 2899, 'pi&#232;ces écouteurs bluetooth i11 TWs', '2023-05-27'),
(52, 'Bang & Olufsen', 'accessoire', '1 (44).jpg', 2800, 'Écouteurs sans fil BeoPlay E8 2.0 de Bang & Olufsen (Noir)', '2023-05-7'),
(53, 'Bang & Olufsen', 'accessoire', '1 (45).jpg', 1800, 'Écouteurs Bluetooth intra-auriculaires Play H5', '2023-05-27'),
(54, 'Toshiba 14', 'ordinateur', '1111.jpg', 2899, 'Tecra Z40-A-18R - Core i5 4Go RAM - 128Go SSD - 4eme Gen - reconditionné', '2023-05-9'),
(55, 'Asus ZenBook Pro', 'ordinateur', '1 (46).jpg', 20000.99, 'Duo UX481FL I7-10510U 14"16G 512G PCIE G3X2 SSD WIN10 CELESTIAL BLUE', '2023-05-09');

-- --------------------------------------------------------

--
-- Structure de la table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `ar_id` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `c_ref` int(11) NOT NULL,
  PRIMARY KEY (`ar_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `commmande`
--

CREATE TABLE IF NOT EXISTS `commmande` (
  `ref` int(11) NOT NULL AUTO_INCREMENT,
  `cl_id` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`ref`,`cl_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Contenu de la table `commmande`
--

INSERT INTO `commmande` (`ref`, `cl_id`, `date`) VALUES
(1, 1, '2022-06-05'),
(2, 1, '2022-06-05'),
(3, 1, '2022-06-05'),
(4, 3, '2022-06-05'),
(5, 1, '2022-06-05'),
(6, 2, '2022-06-05'),
(7, 3, '2022-06-05'),
(8, 4, '2022-06-05'),
(9, 1, '2022-06-05'),
(10, 2, '2022-06-06'),
(11, 1, '2022-06-06'),
(12, 2, '2022-06-06'),
(13, 1, '2022-06-06'),
(14, 1, '2022-06-06'),
(15, 1, '2022-06-06'),
(16, 2, '2022-06-06'),
(17, 2, '2022-06-06'),
(18, 2, '2022-06-06'),
(19, 2, '2022-06-06'),
(20, 1, '2022-06-06');


-- --------------------------------------------------------

--
-- Structure de la table `lignedecommande`
--

CREATE TABLE IF NOT EXISTS `lignedecommande` (
  `ar_id` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `c_ref` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `lignedecommande`
--

INSERT INTO `lignedecommande` (`ar_id`, `quantite`, `c_ref`) VALUES
(27, 1, 25),
(16, 1, 26),
(17, 1, 26),
(17, 3, 27),
(55, 1, 28),
(33, 1, 30),
(50, 1, 30),
(54, 2, 30),
(44, 2, 31),
(46, 1, 31),
(17, 2, 32),
(27, 1, 32),
(35, 1, 32);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `password` varchar(20) CHARACTER SET utf8 NOT NULL,
  `tel` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `email`, `password`, `tel`) VALUES
(2, 'natij', 'amal', 'amalnatij@gmail.com', 'amal', '0610505000'),
(3, 'tahiri', 'ayman', 'aymantahiri@gmail.com', 'ayman', '0625770100'),
(4, 'ouhaddi', 'nassima', 'nassimaouhaddi@gmail.com', 'nassima', '0688223450'),
(5, 'oussama', 'azougagh', 'oussama@gmail.com', 'oussama', '0611141381'),
(6, 'hamdaoui', 'ahmed', 'ahmed@gmail.com', 'ahmed', '0631323232'),
(7, 'moujar', 'ali', 'ali@gmail.com', 'ali', '0600247798'),
(8, 'ababssi', 'mohammed', 'med@gmail.com', 'med', '0626322632'),
(9, 'roukaya', 'naiima', 'naiima@gmail.com', 'naiima', '0652455987');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
