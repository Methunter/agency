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
--
-- Table structure for `photos`
--

CREATE TABLE if NOT EXISTS  `masteract`.`photos` (
 `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
 `parent_id` int(11) NOT NULL DEFAULT '0', 
 `path` VARCHAR( 255 ) , 
 `data` BLOB ,
  `gender` varchar(255) NOT NULL DEFAULT 'male',
) ENGINE = FILES


--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`parent_id`, `path`, `data`, `gender` ) VALUES
(`parent_id`, `path`, `data`, `gender` ),
(`parent_id`, `path`, `data`, `gender` ),
(`parent_id`, `path`, `data`, `gender` ),
(`parent_id`, `path`, `data`, `gender` );