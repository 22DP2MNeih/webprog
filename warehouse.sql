-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for db
CREATE DATABASE IF NOT EXISTS `db` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `db`;

-- Dumping structure for table db.carparts
CREATE TABLE IF NOT EXISTS `carparts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Part_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Part_description` varchar(200) NOT NULL,
  `Image` binary(50) DEFAULT NULL,
  `VIN` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Count` int NOT NULL,
  `Part_type` enum('Engine','Tire','Battery','Anti-roll bar','Springs','Rims','Car body') NOT NULL,
  `Color` varchar(20) DEFAULT NULL,
  `Weight` float NOT NULL,
  `Width` float NOT NULL,
  `Hight` float NOT NULL,
  `Depth` float NOT NULL,
  `Size` float DEFAULT NULL,
  `Voltage` float DEFAULT NULL,
  `Capacity` float DEFAULT NULL,
  `Tire code` varchar(50) DEFAULT NULL,
  `Stiffness_min` float DEFAULT NULL,
  `Stiffness_max` float DEFAULT NULL,
  `Stiffness_adjustable` bit(1) DEFAULT NULL,
  `Hight_min` float DEFAULT NULL,
  `Hight_max` float DEFAULT NULL,
  `Hight_adjustable` float DEFAULT NULL,
  `Egine_type` enum('V-type','Wankel','Flat engine','Inline','Disel','Electric motor') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Max_pressure` float DEFAULT NULL,
  `Cylidders` float DEFAULT NULL,
  `HP` float DEFAULT NULL,
  `Displacement` float DEFAULT NULL,
  `Torqe` float DEFAULT NULL,
  `Max_rpm` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db.carparts: ~7 rows (approximately)
INSERT INTO `carparts` (`id`, `Part_name`, `Part_description`, `Image`, `VIN`, `Count`, `Part_type`, `Color`, `Weight`, `Width`, `Hight`, `Depth`, `Size`, `Voltage`, `Capacity`, `Tire code`, `Stiffness_min`, `Stiffness_max`, `Stiffness_adjustable`, `Hight_min`, `Hight_max`, `Hight_adjustable`, `Egine_type`, `Max_pressure`, `Cylidders`, `HP`, `Displacement`, `Torqe`, `Max_rpm`) VALUES
	(1, 'Sudraba krāsas diski', 'Liela izmēra pelēkie diski', NULL, 'JN3MS37AP', 24, 'Rims', 'Sudraba', 0, 0, 0, 0, 17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(2, 'Pielāgojamas atsperes', 'Pielāgojamas sporta atsperes', NULL, NULL, 64, 'Springs', 'Melnas', 0, 0, 0, 0, NULL, NULL, NULL, NULL, 20, 40, b'1', 30, 40, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(3, 'Hellcat motors', 'Hellcat V8 motors', NULL, NULL, 16, 'Engine', NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'V-type', NULL, 8, 700, 6.4, 820, 8000),
	(4, 'Mazda rotormotors', 'Mazda RX7 orģinālais rotormotors', NULL, 'J--------', 10, 'Engine', NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Wankel', NULL, 2, 110, 2.4, 135, 7000),
	(5, 'Sporta Stabilizators', 'Pielāgojams stabilizātors sprta mašīnām', NULL, NULL, 42, 'Anti-roll bar', NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, 20, 35, b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(6, 'Akumulātors', '12V akumulātors jebkuram auto', NULL, NULL, 1086, 'Battery', NULL, 0, 0, 0, 0, NULL, 12, 100, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(7, 'Riepas', 'Vasaras riepas', NULL, NULL, 0, 'Tire', NULL, 0, 0, 0, 0, NULL, NULL, NULL, 'P215/65R15 95H', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3.4, NULL, NULL, NULL, NULL, NULL);

-- Dumping structure for table db.companies
CREATE TABLE IF NOT EXISTS `companies` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Company_name` varchar(50) NOT NULL,
  `Location` varchar(50) NOT NULL,
  `Latitude` float NOT NULL DEFAULT '0',
  `Longitude` float NOT NULL DEFAULT '0',
  `Has_import` bit(1) NOT NULL,
  `Has_export` bit(1) NOT NULL,
  `Has_shipping` bit(1) NOT NULL,
  `Export_tax` decimal(20,6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db.companies: ~8 rows (approximately)
INSERT INTO `companies` (`id`, `Company_name`, `Location`, `Latitude`, `Longitude`, `Has_import`, `Has_export`, `Has_shipping`, `Export_tax`) VALUES
	(1, 'BMW', 'On Earth', 0, 0, b'1', b'1', b'1', 0.200000),
	(2, 'WV', 'Someweare', 0, 0, b'1', b'1', b'1', 0.150000),
	(3, 'Audi', '?', 0, 0, b'1', b'1', b'1', 0.180000),
	(4, 'Kkads pārvadājumu uzņēmums', '??', 0, 0, b'0', b'0', b'1', NULL),
	(5, 'Sikais mekaniku kantoris 0', '??', 0, 0, b'1', b'0', b'0', NULL),
	(6, 'Sikais makaniku kantoris 1', '??', 0, 0, b'1', b'0', b'0', NULL),
	(7, 'Mustang', '??', 0, 0, b'1', b'1', b'0', 0.220000),
	(8, 'Mazda', '???', 0, 0, b'0', b'1', b'0', 0.180000);

-- Dumping structure for table db.exporting
CREATE TABLE IF NOT EXISTS `exporting` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Company` int NOT NULL DEFAULT '0',
  `Part` int NOT NULL DEFAULT '0',
  `Price` decimal(20,6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Company` (`Company`),
  KEY `Part` (`Part`),
  CONSTRAINT `FK__companies1` FOREIGN KEY (`Company`) REFERENCES `companies` (`id`),
  CONSTRAINT `FK_exporting_carparts` FOREIGN KEY (`Part`) REFERENCES `carparts` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db.exporting: ~0 rows (approximately)
INSERT INTO `exporting` (`id`, `Company`, `Part`, `Price`) VALUES
	(1, 1, 2, 276.000000),
	(2, 1, 5, 252.000000),
	(3, 1, 1, 67.200000),
	(4, 3, 6, 89.680000),
	(5, 2, 6, 82.800000);

-- Dumping structure for table db.importing
CREATE TABLE IF NOT EXISTS `importing` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Company` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`) USING BTREE,
  KEY `Company` (`Company`) USING BTREE,
  CONSTRAINT `FK__companies2` FOREIGN KEY (`Company`) REFERENCES `companies` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db.importing: ~0 rows (approximately)

-- Dumping structure for table db.pardosanas_dokuments
CREATE TABLE IF NOT EXISTS `pardosanas_dokuments` (
  `id` int NOT NULL,
  `Part` int NOT NULL,
  `Seller` int NOT NULL,
  `Buyer` int NOT NULL,
  `Transport` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Part` (`Part`),
  KEY `Seller` (`Seller`),
  KEY `Buyer` (`Buyer`),
  KEY `Transport` (`Transport`),
  CONSTRAINT `FK__carparts1` FOREIGN KEY (`Part`) REFERENCES `carparts` (`id`),
  CONSTRAINT `FK_pardosanas_dokuments_companies` FOREIGN KEY (`Seller`) REFERENCES `companies` (`id`),
  CONSTRAINT `FK_pardosanas_dokuments_companies_2` FOREIGN KEY (`Buyer`) REFERENCES `companies` (`id`),
  CONSTRAINT `FK_pardosanas_dokuments_companies_3` FOREIGN KEY (`Transport`) REFERENCES `companies` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db.pardosanas_dokuments: ~0 rows (approximately)

-- Dumping structure for table db.part_display_colums
CREATE TABLE IF NOT EXISTS `part_display_colums` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Part_type` varchar(10) NOT NULL DEFAULT '0',
  `Display_columns` varchar(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db.part_display_colums: ~0 rows (approximately)

-- Dumping structure for table db.transporting
CREATE TABLE IF NOT EXISTS `transporting` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Company` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`) USING BTREE,
  KEY `Company` (`Company`) USING BTREE,
  CONSTRAINT `FK__companies3` FOREIGN KEY (`Company`) REFERENCES `companies` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db.transporting: ~0 rows (approximately)

-- Dumping structure for table db.warehouse
CREATE TABLE IF NOT EXISTS `warehouse` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Company` int NOT NULL,
  `Car_part` int NOT NULL,
  `Count` int NOT NULL,
  `Price` decimal(20,6) NOT NULL DEFAULT '0.000000',
  PRIMARY KEY (`id`),
  KEY `Company` (`Company`),
  KEY `Car_part` (`Car_part`),
  CONSTRAINT `FK__carparts` FOREIGN KEY (`Car_part`) REFERENCES `carparts` (`id`),
  CONSTRAINT `FK__companies` FOREIGN KEY (`Company`) REFERENCES `companies` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db.warehouse: ~7 rows (approximately)
INSERT INTO `warehouse` (`id`, `Company`, `Car_part`, `Count`, `Price`) VALUES
	(1, 8, 4, 5, 550.000000),
	(2, 1, 5, 21, 210.000000),
	(3, 1, 1, 12, 56.000000),
	(4, 1, 2, 32, 230.000000),
	(5, 3, 6, 543, 76.000000),
	(6, 2, 6, 678, 72.000000),
	(7, 7, 3, 8, 12400.000000);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
