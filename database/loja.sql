-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2023 at 09:03 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loja`
--
CREATE DATABASE IF NOT EXISTS `loja` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `loja`;

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

CREATE TABLE `clientes` (
  `id` int(4) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `sobrenome` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telefone` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `sobrenome`, `email`, `telefone`) VALUES
(1, 'Kim', 'Netherwood', 'knetherwood0@mediafire.com', '3551140092'),
(2, 'Lauritz', 'Cypler', 'lcypler1@thetimes.co.uk', '9621280698'),
(3, 'Gordy', 'Andrioni', 'gandrioni2@timesonline.co.uk', '8708532198'),
(4, 'Theodoric', 'Jurn', 'tjurn3@nbcnews.com', '7459880386'),
(5, 'Tiff', 'O\'Keaveny', 'tokeaveny4@google.pl', '7005475556'),
(6, 'Nikolas', 'Guiver', 'nguiver5@flickr.com', '9264218083'),
(7, 'Colver', 'Grzelak', 'cgrzelak6@census.gov', '1918652556'),
(8, 'Ulrica', 'Angeau', 'uangeau7@stanford.edu', '6787670973'),
(9, 'Claudia', 'Jiroutek', 'cjiroutek8@latimes.com', '7135498198'),
(10, 'Sarge', 'Lorimer', 'slorimer9@cbc.ca', '6673950667'),
(11, 'Toiboid', 'Brosio', 'tbrosioa@gnu.org', '8212427313'),
(12, 'Romeo', 'Lindstrom', 'rlindstromb@indiatimes.com', '2467173953'),
(13, 'Jilly', 'Mecozzi', 'jmecozzic@slate.com', '1538698661'),
(14, 'Elane', 'Loughlan', 'eloughland@mayoclinic.com', '7611145941'),
(15, 'Elladine', 'Santhouse', 'esanthousee@who.int', '1734024452'),
(16, 'David', 'Sposito', 'dspositof@gov.uk', '3968500436'),
(17, 'Miles', 'Joreau', 'mjoreaug@lulu.com', '7983636626'),
(18, 'Tisha', 'Peggram', 'tpeggramh@cloudflare.com', '6202822680'),
(19, 'Augie', 'Munby', 'amunbyi@mediafire.com', '6232559892'),
(20, 'Charlena', 'Causnett', 'ccausnettj@e-recht24.de', '6743066575'),
(21, 'Lilllie', 'Handke', 'lhandkek@stanford.edu', '3061944157'),
(22, 'Marylynne', 'Deverell', 'mdeverelll@illinois.edu', '1813770909'),
(23, 'Arden', 'Canadine', 'acanadinem@zimbio.com', '2266359171'),
(24, 'Andrus', 'Swalowe', 'aswalowen@cbsnews.com', '7931689833'),
(25, 'Babs', 'Lanegran', 'blanegrano@sfgate.com', '3399401311'),
(26, 'Isidoro', 'Szymanek', 'iszymanekp@timesonline.co.uk', '2697100539'),
(27, 'Buckie', 'Snassell', 'bsnassellq@vkontakte.ru', '8063853800'),
(28, 'Katerina', 'Glancey', 'kglanceyr@mapy.cz', '8176032726'),
(29, 'Ulla', 'McTaggart', 'umctaggarts@yandex.ru', '4107452533'),
(30, 'Yasmin', 'Cozzi', 'ycozzit@ucla.edu', '4188689996'),
(31, 'Morton', 'Fysh', 'mfyshu@geocities.com', '7548695464'),
(32, 'Christoffer', 'Ebbett', 'cebbettv@freewebs.com', '3615670611'),
(33, 'Mitchell', 'Bielefeld', 'mbielefeldw@gnu.org', '4759568176'),
(34, 'Xever', 'Hansill', 'xhansillx@google.nl', '3269956044'),
(35, 'Stanfield', 'Fetherston', 'sfetherstony@opera.com', '7821653798'),
(36, 'Giuditta', 'Glasspool', 'gglasspoolz@blogger.com', '9144566554'),
(37, 'Dione', 'Kynnd', 'dkynnd10@icq.com', '7689636320');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
