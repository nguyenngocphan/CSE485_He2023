-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               11.2.0-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.3.0.6589
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for xproject
CREATE DATABASE IF NOT EXISTS `xproject` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `xproject`;

-- Dumping structure for table xproject.employees
CREATE TABLE IF NOT EXISTS `employees` (
  `id` int(11) DEFAULT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `Salary` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table xproject.employees: ~50 rows (approximately)
INSERT INTO `employees` (`id`, `Name`, `Address`, `Salary`) VALUES
	(1, 'Miguelita Rasell', '94528 Utah Drive', 2139),
	(2, 'Casper Taks', '8811 Grayhawk Road', 3285),
	(3, 'Maye Faveryear', '6364 Northwestern Pass', 4560),
	(4, 'Barris Montfort', '1 Dahle Hill', 5784),
	(5, 'Genevra Elcum', '1 Canary Hill', 8805),
	(6, 'Blaine Bompas', '68315 Golf Trail', 3580),
	(7, 'Jermaine Mettrick', '2 Kensington Alley', 9326),
	(8, 'Jacki Fyfield', '943 Oak Valley Avenue', 3661),
	(9, 'Arvin Perulli', '9 Fuller Hill', 5935),
	(10, 'Kennett Huckerbe', '2226 Ohio Street', 5291),
	(11, 'Broderic Pinock', '63 Almo Plaza', 4474),
	(12, 'Burg Esposito', '4 Butterfield Pass', 8568),
	(13, 'Oneida Sweeney', '001 Shasta Plaza', 9414),
	(14, 'Bendick Pescod', '27 Golden Leaf Circle', 8741),
	(15, 'Maryrose Downse', '8 Moulton Trail', 9263),
	(16, 'Donall Vevers', '65 Veith Center', 8248),
	(17, 'Alexei Banishevitz', '2 Norway Maple Park', 2370),
	(18, 'Erasmus Lapidus', '95734 Clyde Gallagher Crossing', 6855),
	(19, 'Lek Furtado', '2752 Forster Parkway', 7262),
	(20, 'Waring Ginger', '1247 Stuart Parkway', 6989),
	(21, 'Suki Alliot', '5 Gulseth Court', 8822),
	(22, 'Randi Haeslier', '734 Nova Center', 9490),
	(23, 'Law Acey', '564 Forest Center', 5664),
	(24, 'Elset Bowsher', '267 Bartelt Trail', 1596),
	(25, 'Tann Rosekilly', '31 Gateway Junction', 3647),
	(26, 'Jacky Sneller', '2825 Oneill Point', 4673),
	(27, 'Roobbie Sail', '2845 Prairie Rose Avenue', 6789),
	(28, 'Joyann Yeell', '58804 Shoshone Plaza', 7053),
	(29, 'May Minmagh', '01273 Monica Alley', 7742),
	(30, 'Arturo Howels', '724 Lillian Road', 8327),
	(31, 'Shantee Dudney', '50278 Ruskin Crossing', 7260),
	(32, 'Nichols Prisley', '01873 Old Shore Circle', 7262),
	(33, 'Estel Cunliffe', '3 Mallard Pass', 8508),
	(34, 'Tess Yegorev', '3717 Hollow Ridge Plaza', 6432),
	(35, 'Caryl Bedinham', '7716 Declaration Lane', 7234),
	(36, 'Aline Passie', '3141 Onsgard Way', 2744),
	(37, 'Jerrome Petz', '96 Fairfield Hill', 1787),
	(38, 'Britta Drust', '3820 Del Mar Alley', 2324),
	(39, 'Aluin Fairfoul', '26 Miller Place', 4339),
	(40, 'Adina Conachie', '720 Truax Terrace', 6586),
	(41, 'Odette Rochelle', '54 Lakeland Court', 4192),
	(42, 'Darci Ephgrave', '463 Maple Place', 7987),
	(43, 'Hector Semple', '23365 Grover Street', 1764),
	(44, 'Molly Pedel', '46 Saint Paul Avenue', 4299),
	(45, 'Jenelle Sandars', '65 Sage Avenue', 2589),
	(46, 'Nannette Searchwell', '48 Dorton Avenue', 3386),
	(47, 'Gilly Monnery', '87832 Aberg Drive', 1789),
	(48, 'Karrah Vizor', '515 Service Center', 7360),
	(49, 'Artemas De Filippis', '40918 Sundown Street', 2379),
	(50, 'Dorthea Belhome', '1528 Northridge Point', 3115);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
