-- phpMyAdmin SQL Dump
-- version 2.11.8.1deb5+lenny9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 01. Mai 2012 um 15:20
-- Server Version: 5.0.51
-- PHP-Version: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Datenbank: `db2037455-main`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `formular_basis`
--

CREATE TABLE IF NOT EXISTS `formular_basis` (
  `id` int(11) NOT NULL auto_increment,
  `name` text,
  `chara` text,
  `server` text,
  `serverlink` text,
  `armorylink` text,
  `screen` text,
  `level` int(11) default '0',
  `gold` int(11) default '0',
  `reiten` int(11) default '0',
  `cold_weather` int(11) default '0',
  `beruf1` text,
  `beruf1skill` int(11) default '0',
  `beruf2` text,
  `beruf2skill` int(11) default '0',
  `erstehilfe` int(11) default '0',
  `angeln` int(11) default '0',
  `kochen` int(11) default '0',
  `datum` text,
  `gm` text,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Daten für Tabelle `formular_basis`
--

INSERT INTO `formular_basis` (`id`, `name`, `chara`, `server`, `serverlink`, `armorylink`, `screen`, `level`, `gold`, `reiten`, `cold_weather`, `beruf1`, `beruf1skill`, `beruf2`, `beruf2skill`, `erstehilfe`, `angeln`, `kochen`, `datum`, `gm`) VALUES
(1, 'TestACC', 'TestACC', 'ass', 'http://nemesis-gaming.eu', 'http://', './upload/', 20, 0, 0, 0, 'Alchemie', 0, 'Alchemie', 0, 0, 0, 0, 'Dienstag, 1. May 2012. 15.13 Uhr', 'nicht bearbeitet');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `formular_item`
--

CREATE TABLE IF NOT EXISTS `formular_item` (
  `id` int(11) NOT NULL default '0',
  `chara` text,
  `kopf` int(11) default '0',
  `hals` int(11) default '0',
  `schulter` int(11) default '0',
  `ruecken` int(11) default '0',
  `brust` int(11) default '0',
  `wappenrock` int(11) default '0',
  `handgelenke` int(11) default '0',
  `haende` int(11) default '0',
  `taille` int(11) default '0',
  `beine` int(11) default '0',
  `fuesse` int(11) default '0',
  `ring1` int(11) default '0',
  `ring2` int(11) default '0',
  `schmuck1` int(11) default '0',
  `schmuck2` int(11) default '0',
  `waffenhand` int(11) default '0',
  `nebenhand` int(11) default '0',
  `distanzwaffe` int(11) default '0',
  `mount_b` int(11) default '0',
  `mount_f` int(11) default '0',
  `AbGerechtigkeit` int(11) default '0',
  `EmEhre` int(11) default '0',
  `EmEroberung` int(11) default '0',
  `EmFrosts` int(11) default '0',
  `EmHeldentums` int(11) default '0',
  `EmTriumphs` int(11) default '0',
  `SpSteinbewahrers` int(11) default '0',
  `EhrenabzeichenEroberung` int(11) default '0',
  `EhrenabzeichenUralten` int(11) default '0',
  `EhrenabzeichenTausendwinter` int(11) default '0',
  `JuwelierssymbolDalaran` int(11) default '0',
  `KochpreisDalaran` int(11) default '0',
  `MuenzeVenture_Co` int(11) default '0',
  `SiegelChampions` int(11) default '0',
  `Arenapunkte` int(11) default '0',
  `Ehrenpunkte` int(11) default '0',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `formular_item`
--

INSERT INTO `formular_item` (`id`, `chara`, `kopf`, `hals`, `schulter`, `ruecken`, `brust`, `wappenrock`, `handgelenke`, `haende`, `taille`, `beine`, `fuesse`, `ring1`, `ring2`, `schmuck1`, `schmuck2`, `waffenhand`, `nebenhand`, `distanzwaffe`, `mount_b`, `mount_f`, `AbGerechtigkeit`, `EmEhre`, `EmEroberung`, `EmFrosts`, `EmHeldentums`, `EmTriumphs`, `SpSteinbewahrers`, `EhrenabzeichenEroberung`, `EhrenabzeichenUralten`, `EhrenabzeichenTausendwinter`, `JuwelierssymbolDalaran`, `KochpreisDalaran`, `MuenzeVenture_Co`, `SiegelChampions`, `Arenapunkte`, `Ehrenpunkte`) VALUES
(1, 'TestACC', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `formular_randomitem`
--

CREATE TABLE IF NOT EXISTS `formular_randomitem` (
  `id` int(11) NOT NULL,
  `chara` text,
  `ri1` int(11) default '0',
  `ri1a` int(11) default '0',
  `ri2` int(11) default '0',
  `ri2a` int(11) default '0',
  `ri3` int(11) default '0',
  `ri3a` int(11) default '0',
  `ri4` int(11) default '0',
  `ri4a` int(11) default '0',
  `ri5` int(11) default '0',
  `ri5a` int(11) default '0',
  `ri6` int(11) default '0',
  `ri6a` int(11) default '0',
  `ri7` int(11) default '0',
  `ri7a` int(11) default '0',
  `ri8` int(11) default '0',
  `ri8a` int(11) default '0',
  `ri9` int(11) default '0',
  `ri9a` int(11) default '0',
  `ri10` int(11) default '0',
  `ri10a` int(11) default '0',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `formular_randomitem`
--

INSERT INTO `formular_randomitem` (`id`, `chara`, `ri1`, `ri1a`, `ri2`, `ri2a`, `ri3`, `ri3a`, `ri4`, `ri4a`, `ri5`, `ri5a`, `ri6`, `ri6a`, `ri7`, `ri7a`, `ri8`, `ri8a`, `ri9`, `ri9a`, `ri10`, `ri10a`) VALUES
(1, 'TestACC', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `account` text,
  `passwort` text,
  `admin` int(11) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `login`
--

INSERT INTO `login` (`account`, `passwort`, `admin`) VALUES
('admin', 'admin', 3);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `adminbutton` int(1) default NULL,
  `autobutton` int(1) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `settings`
--

