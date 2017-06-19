-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2017 at 07:10 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foleza`
--

-- --------------------------------------------------------

--
-- Table structure for table `ditari`
--

CREATE TABLE `ditari` (
  `Grupi` int(11) NOT NULL,
  `Data` date NOT NULL,
  `Programi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ditari`
--

INSERT INTO `ditari` (`Grupi`, `Data`, `Programi`) VALUES
(1, '2017-06-14', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');

-- --------------------------------------------------------

--
-- Table structure for table `femijet`
--

CREATE TABLE `femijet` (
  `Amza` varchar(10) NOT NULL,
  `Emri` varchar(50) NOT NULL,
  `Mbiemri` varchar(50) NOT NULL,
  `Datelindja` date NOT NULL,
  `Atesia` varchar(50) NOT NULL,
  `PunaeBabait` varchar(50) NOT NULL,
  `Memesia` varchar(50) NOT NULL,
  `PunaeNenes` varchar(50) NOT NULL,
  `Kontakt1` varchar(13) NOT NULL,
  `Kontakt2` varchar(13) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Qyteti` varchar(30) NOT NULL,
  `Rruga` varchar(100) NOT NULL,
  `No` int(11) NOT NULL,
  `KodiPostar` int(11) NOT NULL,
  `Vaksinimi` text NOT NULL,
  `Alergji` text NOT NULL,
  `Tetjera` text NOT NULL,
  `Grupi` varchar(30) NOT NULL,
  `EmriPerdoruesit` varchar(20) NOT NULL,
  `Fjalekalimi` varchar(20) NOT NULL,
  `Foto` longblob NOT NULL,
  `LlojiPageses` varchar(30) NOT NULL,
  `Statusi` varchar(30) NOT NULL,
  `Sasiapertupaguar` int(11) NOT NULL,
  `Ecuria` varchar(50) NOT NULL,
  `Mungesa` int(11) NOT NULL,
  `Level` int(11) NOT NULL DEFAULT '5'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `femijet`
--

INSERT INTO `femijet` (`Amza`, `Emri`, `Mbiemri`, `Datelindja`, `Atesia`, `PunaeBabait`, `Memesia`, `PunaeNenes`, `Kontakt1`, `Kontakt2`, `Email`, `Qyteti`, `Rruga`, `No`, `KodiPostar`, `Vaksinimi`, `Alergji`, `Tetjera`, `Grupi`, `EmriPerdoruesit`, `Fjalekalimi`, `Foto`, `LlojiPageses`, `Statusi`, `Sasiapertupaguar`, `Ecuria`, `Mungesa`, `Level`) VALUES
('00000001', 'Alban', 'Krasniqi', '2012-01-23', 'Dardan', 'Inxhinier ndertimi', 'Vlora', 'Mesuese', '066-60-60-666', '066-60-60-667', 'akrasniqi@gmail.com', 'Tirane', 'Rruga e Durresit', 28, 1039, 'Po', 'Nuk ka', '', '2', 'akrasniqi', 'krasniqi4@', '', 'Me ngrenie', 'Pa paguar', 12000, 'Shume e mire', 3, 5),
('00000002', 'Mira', 'Koka', '2012-12-06', 'Agim', 'vetepunsuart', 'Mimoza', 'shtepiake', '068-89-56-862', '068-89-56-862', 'mirakoka@gmail.com', 'Tirane', 'Gjegj Legisi', 23, 8523, 'po', 'jo', 'jo', '1', 'mirakoka', 'Miranew345', '', 'me ushqim', 'paguar', 123500, 'E mire', 6, 5),
('00000003', 'Orkid', 'Hoxha', '2011-11-07', 'Joakim', 'vetepunsuar', 'Diana', 'avokate', '068-50-56-862', '068-50-56-862', 'mirakoka@gmail.com', 'Tirane', 'Lunxheri', 96, 1039, 'po', 'jo', 'jo', '3', 'orkidhoxha', 'Orikidipass1', '', 'me ushqim', 'paguar', 123500, '', 0, 5),
('00000004', 'Ola', 'Peka', '2013-02-20', 'Jurgen', 'biznesmen', 'Klara', 'profesoreshe', '067-56-56-566', '067-56-56-566', 'sb@gmail.com', 'Tirane', 'Skenderbeu', 69, 1039, 'po', 'jo', 'jo', '2', 'olapeka', 'Olassaccount123', '', 'StudimUshqim', 'paguar', 12000, '', 0, 5),
('00000005', 'Dardan', 'Spahiu', '2013-09-23', 'Klodian', 'programues', 'Leandra', 'ekonomiste', '068-56-85-589', '067-56-56-500', 'sb1@gmail.com', 'Tirane', 'Kavajes', 20, 1039, 'Po', 'jo', 'Jo', '2', 'dspahiu', 'Dardanspass987', '', 'StudimUshqim', 'paguar', 12000, '', 0, 5),
('00000006', 'Klevin', 'Kercyku', '2011-07-23', 'Ilir', 'biznesmen', 'Edona', 'ekonomiste', '067-56-89-566', '067-89-56-566', 'sbt@gmail.com', 'Tirane', 'Durresit', 56, 1039, 'Po', 'jo', 'Jo', '1', 'kkercyku', 'Newfjale123', '', 'StudimUshqim', 'paguar', 12000, 'Shume e mire', 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `institucioni`
--

CREATE TABLE `institucioni` (
  `ID` int(11) NOT NULL,
  `Emri` varchar(60) NOT NULL,
  `Sheteti` varchar(60) NOT NULL,
  `Qyteti` varchar(60) NOT NULL,
  `Rruga` varchar(100) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Fb` varchar(60) NOT NULL,
  `Kontakti` varchar(30) NOT NULL,
  `Aministratori / CEO` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `institucioni`
--

INSERT INTO `institucioni` (`ID`, `Emri`, `Sheteti`, `Qyteti`, `Rruga`, `Email`, `Fb`, `Kontakti`, `Aministratori / CEO`) VALUES
(1, 'Foleza e Dijes', 'Shqiperi', 'Tirane', 'Teodor Keko', 'folezaedijes@gmail.com', '@folezaedijes', '+ (355) 69 27 07 855', 'Megi Alimucaj');

-- --------------------------------------------------------

--
-- Table structure for table `klasat`
--

CREATE TABLE `klasat` (
  `ID e Grupit` varchar(11) NOT NULL,
  `Emri i Grupit` varchar(50) NOT NULL,
  `Edukatorja Kujdestare` varchar(60) NOT NULL,
  `Asistentja` varchar(60) NOT NULL,
  `Programi Vjetor` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menujaditore`
--

CREATE TABLE `menujaditore` (
  `Data` date NOT NULL,
  `Menuja` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menujaditore`
--

INSERT INTO `menujaditore` (`Data`, `Menuja`) VALUES
('2017-06-14', 'Mengjesi:\r\nItem 1\r\nItem 2\r\nItem 3\r\n\r\nDreka:\r\nItem 1\r\nItem 2\r\nItem 3');

-- --------------------------------------------------------

--
-- Table structure for table `metodologji te reja`
--

CREATE TABLE `metodologji te reja` (
  `Tema` varchar(60) NOT NULL,
  `Date` date NOT NULL,
  `Autori ID` varchar(11) NOT NULL,
  `File` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(255) NOT NULL,
  `photo` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `photo`) VALUES
(1, 0x706c616e69312e706466),
(2, 0x706c616e69322e706466);

-- --------------------------------------------------------

--
-- Table structure for table `stafi`
--

CREATE TABLE `stafi` (
  `SSN` varchar(10) NOT NULL,
  `Emri` varchar(50) NOT NULL,
  `Mbiemri` varchar(50) NOT NULL,
  `Numri i Kontaktit` varchar(13) NOT NULL,
  `E-mail` varchar(50) NOT NULL,
  `Qyteti` varchar(30) NOT NULL,
  `Rruga` varchar(100) NOT NULL,
  `Lagjia` varchar(50) NOT NULL,
  `No.` int(11) NOT NULL,
  `Kodi Postar` int(11) NOT NULL,
  `Pozicioni` varchar(30) NOT NULL,
  `Data e fillimit` date NOT NULL,
  `Orari i punes` int(11) NOT NULL,
  `Oret e Punes` int(11) NOT NULL,
  `Ore Ekstra` int(11) NOT NULL,
  `Niveli i Pages` int(11) NOT NULL,
  `Paga` int(11) NOT NULL,
  `Statusi i Pages` varchar(30) NOT NULL,
  `Diploma` longblob NOT NULL,
  `CV` longblob NOT NULL,
  `Deshmi Penaliteti` longblob NOT NULL,
  `Vertetim Shendetesor` longblob NOT NULL,
  `Foto` longblob NOT NULL,
  `Perdoruesi` varchar(20) NOT NULL,
  `Fjalekalimi` varchar(20) NOT NULL,
  `Niveli` int(11) NOT NULL,
  `Grupi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stafi`
--

INSERT INTO `stafi` (`SSN`, `Emri`, `Mbiemri`, `Numri i Kontaktit`, `E-mail`, `Qyteti`, `Rruga`, `Lagjia`, `No.`, `Kodi Postar`, `Pozicioni`, `Data e fillimit`, `Orari i punes`, `Oret e Punes`, `Ore Ekstra`, `Niveli i Pages`, `Paga`, `Statusi i Pages`, `Diploma`, `CV`, `Deshmi Penaliteti`, `Vertetim Shendetesor`, `Foto`, `Perdoruesi`, `Fjalekalimi`, `Niveli`, `Grupi`) VALUES
('J12345678R', 'Manjola', 'Bendo', '067-56-98-753', 'manjolabendo@gmail.com', 'Tirane', 'Mine Peza', '', 56, 1039, 'Edukatore', '0000-00-00', 0, 0, 0, 0, 0, '', '', '', '', '', '', 'mbendo', 'manjola123@', 4, 1),
('J12684678E', 'Mira', 'Reka', '069-56-98-753', 'mirareka@gmail.com', 'Tirane', 'Kavajes', '', 36, 1039, 'Zyra e Regjistrimit', '0000-00-00', 0, 0, 0, 0, 0, 'Paguar', '', '', '', '', '', 'mreka', 'Newpass1234', 3, 0),
('J98346678G', 'Megi', 'Alimucaj', '068-56-98-753', 'malimucaj@gmail.com', 'Tirane', 'Teodor Keko', '', 36, 1039, 'CEO', '0000-00-00', 0, 0, 0, 0, 0, '', '', '', '', '', '', 'malimucaj', 'foleza321@', 1, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
