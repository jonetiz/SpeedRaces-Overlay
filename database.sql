-- --------------------------------------------------------
-- Host:                         haloruns.info
-- Server version:               10.4.14-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for hr-relay
CREATE DATABASE IF NOT EXISTS `hr-relay` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `hr-relay`;

-- Dumping structure for table hr-relay.currentdata
CREATE TABLE IF NOT EXISTS `currentdata` (
  `currentData` varchar(50) NOT NULL,
  `currentValue` text DEFAULT NULL,
  PRIMARY KEY (`currentData`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

-- Dumping structure for table hr-relay.facts
CREATE TABLE IF NOT EXISTS `facts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fact` text NOT NULL,
  `category` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

-- Dumping structure for table hr-relay.runnersdefault
CREATE TABLE IF NOT EXISTS `runnersdefault` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `team` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `twitch` varchar(50) NOT NULL,
  `displayTwitch` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
