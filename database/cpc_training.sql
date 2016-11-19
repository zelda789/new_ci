-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versi server:                 5.1.41 - Source distribution
-- OS Server:                    Win32
-- HeidiSQL Versi:               9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for cpc_training
DROP DATABASE IF EXISTS `cpc_training`;
CREATE DATABASE IF NOT EXISTS `cpc_training` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `cpc_training`;


-- Dumping structure for table cpc_training.guru
DROP TABLE IF EXISTS `guru`;
CREATE TABLE IF NOT EXISTS `guru` (
  `id_guru` int(11) NOT NULL AUTO_INCREMENT,
  `nama_guru` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_guru`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table cpc_training.guru: 4 rows
DELETE FROM `guru`;
/*!40000 ALTER TABLE `guru` DISABLE KEYS */;
INSERT INTO `guru` (`id_guru`, `nama_guru`) VALUES
	(1, 'pak joko'),
	(2, 'pak suryadi'),
	(3, 'pak wahyudi'),
	(4, 'pak slamet');
/*!40000 ALTER TABLE `guru` ENABLE KEYS */;


-- Dumping structure for table cpc_training.kelas
DROP TABLE IF EXISTS `kelas`;
CREATE TABLE IF NOT EXISTS `kelas` (
  `id_kelas` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kelas` varchar(50) DEFAULT '0',
  PRIMARY KEY (`id_kelas`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table cpc_training.kelas: 4 rows
DELETE FROM `kelas`;
/*!40000 ALTER TABLE `kelas` DISABLE KEYS */;
INSERT INTO `kelas` (`id_kelas`, `nama_kelas`) VALUES
	(1, 'KELAS A'),
	(2, 'KELAS B'),
	(3, 'KELAS C'),
	(4, 'KELAS E');
/*!40000 ALTER TABLE `kelas` ENABLE KEYS */;


-- Dumping structure for table cpc_training.mapel
DROP TABLE IF EXISTS `mapel`;
CREATE TABLE IF NOT EXISTS `mapel` (
  `id_mapel` int(11) NOT NULL AUTO_INCREMENT,
  `nama_mapel` varchar(255) DEFAULT '0',
  `id_guru` int(11) DEFAULT '0',
  PRIMARY KEY (`id_mapel`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table cpc_training.mapel: 3 rows
DELETE FROM `mapel`;
/*!40000 ALTER TABLE `mapel` DISABLE KEYS */;
INSERT INTO `mapel` (`id_mapel`, `nama_mapel`, `id_guru`) VALUES
	(1, 'matematika', 1),
	(2, 'Bhs indo', 1),
	(3, 'ipa', 3);
/*!40000 ALTER TABLE `mapel` ENABLE KEYS */;


-- Dumping structure for table cpc_training.nilai
DROP TABLE IF EXISTS `nilai`;
CREATE TABLE IF NOT EXISTS `nilai` (
  `id_nilai` int(11) NOT NULL AUTO_INCREMENT,
  `id_mapel` int(11) DEFAULT NULL,
  `id_siswa` int(11) DEFAULT NULL,
  `total_nilai` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_nilai`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- Dumping data for table cpc_training.nilai: 3 rows
DELETE FROM `nilai`;
/*!40000 ALTER TABLE `nilai` DISABLE KEYS */;
INSERT INTO `nilai` (`id_nilai`, `id_mapel`, `id_siswa`, `total_nilai`) VALUES
	(1, 1, 1, 80),
	(3, 3, 3, 67),
	(2, 2, 2, 89);
/*!40000 ALTER TABLE `nilai` ENABLE KEYS */;


-- Dumping structure for table cpc_training.siswa
DROP TABLE IF EXISTS `siswa`;
CREATE TABLE IF NOT EXISTS `siswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `id_kelas` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=70 DEFAULT CHARSET=latin1;

-- Dumping data for table cpc_training.siswa: 3 rows
DELETE FROM `siswa`;
/*!40000 ALTER TABLE `siswa` DISABLE KEYS */;
INSERT INTO `siswa` (`id`, `nama`, `alamat`, `id_kelas`) VALUES
	(1, 'eka', 'blitar', 1),
	(2, 'gon', 'malang', 2),
	(3, 'Ariel', 'malang', 3);
/*!40000 ALTER TABLE `siswa` ENABLE KEYS */;


-- Dumping structure for table cpc_training.user
DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nama_user` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table cpc_training.user: 1 rows
DELETE FROM `user`;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `username`, `password`, `nama_user`) VALUES
	(1, 'admin', 'admin', 'supali');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
