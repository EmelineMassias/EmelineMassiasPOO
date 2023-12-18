-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           8.0.30 - MySQL Community Server - GPL
-- SE du serveur:                Win64
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


-- Listage de la structure de la base pour parc_motos
CREATE DATABASE IF NOT EXISTS `parc_motos` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `parc_motos`;

-- Listage de la structure de table parc_motos. motos
CREATE TABLE IF NOT EXISTS `motos` (
  `id_moto` int NOT NULL AUTO_INCREMENT,
  `marque` varchar(250) NOT NULL,
  `modele` varchar(250) NOT NULL,
  `type` varchar(250) NOT NULL,
  `image` varchar(2500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id_moto`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table parc_motos.motos : ~3 rows (environ)
INSERT INTO `motos` (`id_moto`, `marque`, `modele`, `type`, `image`) VALUES
	(10, 'Honda', 'Fireblade', 'Sportive', '657c7312396c8fireblade.png'),
	(11, 'KTM', '250 EXC-F', 'Enduro', '657c753dead76KTM.png'),
	(12, 'Honda', 'CB500', 'Roadster', '657c760088b19Honda.png');

-- Listage de la structure de table parc_motos. users
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `identifiant` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  PRIMARY KEY (`id_user`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table parc_motos.users : ~0 rows (environ)
INSERT INTO `users` (`id_user`, `identifiant`, `password`) VALUES
	(1, 'admin', '$2y$10$LUv/SDNwXt78s/Qn4Hai/uof1xppry0BLfovRevel0.5bqYjC0zzK');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
