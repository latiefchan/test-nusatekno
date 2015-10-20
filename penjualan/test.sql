-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.24 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             9.2.0.4947
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table test.penjualan
CREATE TABLE IF NOT EXISTS `penjualan` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `kode` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `kode` (`kode`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table test.penjualan: ~5 rows (approximately)
/*!40000 ALTER TABLE `penjualan` DISABLE KEYS */;
INSERT INTO `penjualan` (`id`, `kode`, `tanggal`) VALUES
	(1, 'TRX/2005/01', '2015-01-25'),
	(2, 'TRX/2005/02', '2015-01-31'),
	(3, 'TRX/2005/03', '2015-02-10'),
	(4, 'TRX/2005/04', '2015-03-03'),
	(5, 'TRX/2005/05', '2015-05-17');
/*!40000 ALTER TABLE `penjualan` ENABLE KEYS */;


-- Dumping structure for table test.penjualan_detil
CREATE TABLE IF NOT EXISTS `penjualan_detil` (
  `id_penjualan` int(3) NOT NULL,
  `id_barang` int(3) NOT NULL,
  `harga_satuan` int(6) NOT NULL,
  `jumlah_dijual` int(2) NOT NULL,
  KEY `FK_Penjualan` (`id_penjualan`),
  CONSTRAINT `FK_Penjualan` FOREIGN KEY (`id_penjualan`) REFERENCES `penjualan` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table test.penjualan_detil: ~10 rows (approximately)
/*!40000 ALTER TABLE `penjualan_detil` DISABLE KEYS */;
INSERT INTO `penjualan_detil` (`id_penjualan`, `id_barang`, `harga_satuan`, `jumlah_dijual`) VALUES
	(1, 1, 20000, 3),
	(1, 2, 25000, 5),
	(1, 3, 12000, 1),
	(2, 2, 25000, 2),
	(3, 3, 12000, 2),
	(4, 2, 25000, 4),
	(4, 3, 12000, 1),
	(5, 1, 20000, 3),
	(5, 2, 25000, 1),
	(5, 3, 12000, 2);
/*!40000 ALTER TABLE `penjualan_detil` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
