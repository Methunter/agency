SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `masteract`
--
CREATE DATABASE IF NOT EXISTS `masteract` DEFAULT CHARACTER SET cp1251 COLLATE cp1251_general_ci;
USE `masteract`;


-- Table structure for table `photos`
--

DROP TABLE IF EXISTS `photos`;
CREATE TABLE IF NOT EXISTS `photos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `gender` varchar(255) NOT NULL DEFAULT '',
  `surname` varchar(255) NOT NULL DEFAULT '',
  `name` varchar(255) NOT NULL DEFAULT '',
  `patronymic` varchar(255) NOT NULL DEFAULT '',
  `alias` varchar(255) NOT NULL DEFAULT '',
  `image` varchar(255) NOT NULL DEFAULT '',
  `B_date`  datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `B_place` varchar(50) NOT NULL DEFAULT '',
  `education` varchar(50) NOT NULL DEFAULT '',
  `image_position` varchar(30) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `checked_out` int(11) unsigned NOT NULL DEFAULT '0',
  `editor` varchar(50) DEFAULT NULL,
  `ordering` int(11) NOT NULL DEFAULT '0',
  `access` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `count` int(11) NOT NULL DEFAULT '0',
  `params` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cat_idx` (`section`,`published`,`access`),
  KEY `idx_access` (`access`),
  KEY `idx_checkout` (`checked_out`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` 	
|====|===========|===========|=========|============|=================|=========|===========|====================|=======|
| id | parent_id |  surname  |   name  | patronymic |      B_date     | B_place | education | theatre_expirience | photo |
| ## | ######### | ######### | ####### | ########## | ############### | ####### | ######### | ################## | ##### |
|----|-----------|-----------|---------|------------|-----------------|---------|-----------|--------------------|-------|
| 1  |     0     | ВИНИЧЕНКО |  ОЛЬГА  |    null    | 27 августа 1975 | Кишинёв |           |                    |       |
|----|-----------|-----------|---------|------------|-----------------|---------|-----------|--------------------|-------|
| 2  |     0     | Буданкова | валерия |  олеговна  |  23 марта 1988  |  Москва |           |                    |       |
|----|-----------|-----------|---------|------------|-----------------|---------|-----------|--------------------|-------|
| 3  |     0     | Охотников | дмитрий |  олегович  |   4 июля 1991   |  Москва |           |                    |       |
|----|-----------|-----------|---------|------------|-----------------|---------|-----------|--------------------|-------|
|    |           |           |         |            |                 |         |           |                    |       |
|----|-----------|-----------|---------|------------|-----------------|---------|-----------|--------------------|-------|
|----|-----------|-----------|---------|------------|-----------------|---------|-----------|--------------------|-------|
|----|-----------|-----------|---------|------------|-----------------|---------|-----------|--------------------|-------|
|----|-----------|-----------|---------|------------|-----------------|---------|-----------|--------------------|-------|
|----|-----------|-----------|---------|------------|-----------------|---------|-----------|--------------------|-------|
|----|-----------|-----------|---------|------------|-----------------|---------|-----------|--------------------|-------|
|----|-----------|-----------|---------|------------|-----------------|---------|-----------|--------------------|-------|


|======|=============|===============|=====|======|=============|======================|=====|======|=============|===============|
|  id  |  parent_id  |   education   | === |  id  |  parent_id  |  theatre_expirience  | === |  id  |  parent_id  |     photo     |
| #### | ########### | ############# | ### | #### | ########### | #################### | ### | #### | ########### | ############# |
|------|-------------|---------------|-----|------|-------------|----------------------|-----|------|-------------|---------------|
|  1   |      1      |  Детский сад  | === |  1   |      1      |     Детский сад      | === |  1   |      1      |  Детский сад  |
|  2   |      1      |     школа     | === |  2   |      1      |        школа         | === |  2   |      1      |     школа     |
|  3   |      1      |    институт   | === |  3   |      1      |       институт       | === |  3   |      1      |    институт   |
| ---- | ----------- | ------------- | === | ---- | ----------- | -------------------- | === | ---- | ----------- | ------------- |
|  4   |      2      |  Детский сад  | === |  4   |      2      |     Детский сад      | === |  4   |      2      |  Детский сад  |
|  5   |      2      |     школа     | === |  5   |      2      |        школа         | === |  5   |      2      |     школа     |
|  6   |      2      |    институт   | === |  6   |      2      |       институт       | === |  6   |      2      |    институт   |
| ---- | ----------- | ------------- | === | ---- | ----------- | -------------------- | === | ---- | ----------- | ------------- |
|  7   |      3      |  Детский сад  | === |  7   |      3      |     Детский сад      | === |  7   |      3      |  Детский сад  |
|  8   |      3      |     школа     | === |  8   |      3      |        школа         | === |  8   |      3      |     школа     |
|  9   |      3      |    институт   | === |  9   |      3      |       институт       | === |  9   |      3      |    институт   |
|======|=============|===============|=====|======|=============|======================|=====|======|=============|===============|

|====|===========|======|=============|=======|
| id | site_name | link | description | users |
| ## | ######### | #### | ########### | ##### |
|----|-----------|------|-------------|-------|
|    |           |      |             |       |
|    |           |      |             |       |
|====|===========|======|=============|=======|

DROP TABLE IF EXISTS `site`;
CREATE TABLE IF NOT EXISTS `site` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `site_name` int(11) NOT NULL DEFAULT '0',
  `link` varchar(255) NOT NULL DEFAULT '',
  `description` varchar(255) NOT NULL DEFAULT '',
  `users` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `cat_idx` (`section`,`published`,`access`),
  KEY `idx_access` (`access`),
  KEY `idx_checkout` (`checked_out`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;







