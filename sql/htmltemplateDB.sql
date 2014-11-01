-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.16 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             8.3.0.4774
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for htmltemplate
CREATE DATABASE IF NOT EXISTS `htmltemplate` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `htmltemplate`;


-- Dumping structure for table htmltemplate.download
CREATE TABLE IF NOT EXISTS `download` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `size` varchar(50) NOT NULL DEFAULT '0',
  `file` varchar(50) NOT NULL DEFAULT '0',
  `path` varchar(500) NOT NULL DEFAULT '0',
  `uploader` varchar(50) NOT NULL DEFAULT '0',
  `post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `type` smallint(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

-- Dumping data for table htmltemplate.download: ~2 rows (approximately)
/*!40000 ALTER TABLE `download` DISABLE KEYS */;
INSERT INTO `download` (`id`, `size`, `file`, `path`, `uploader`, `post_date`, `update_date`, `type`) VALUES
	(1, '741kb', 'patch-A.mpq', '../htmltemplate/files/patch-A.mpq', 'tok124', '2014-10-29 02:22:00', '2014-10-29 16:21:15', 1),
	(24, '416kb', 'Recount.rar', '../htmltemplate/files/Recount.zip', 'tok124', '2014-10-29 12:50:19', '2014-10-29 16:59:40', 2);
/*!40000 ALTER TABLE `download` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
