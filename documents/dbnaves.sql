-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.1.26-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura para tabla db_navejd.juego
CREATE TABLE IF NOT EXISTS `juego` (
  `idJuego` int(11) NOT NULL AUTO_INCREMENT,
  `idUsuario` int(11) NOT NULL DEFAULT '0',
  `score` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idJuego`),
  KEY `Índice 2` (`idUsuario`),
  CONSTRAINT `FK_juego_usuario` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- Volcando datos para la tabla db_navejd.juego: ~20 rows (aproximadamente)
DELETE FROM `juego`;
/*!40000 ALTER TABLE `juego` DISABLE KEYS */;
INSERT INTO `juego` (`idJuego`, `idUsuario`, `score`, `created_at`, `updated_at`) VALUES
	(17, 3, 766, '2018-01-11 21:47:26', '2018-01-11 21:47:26'),
	(18, 3, 721, '2018-01-11 21:47:57', '2018-01-11 21:47:57'),
	(19, 3, 654, '2018-01-11 21:48:43', '2018-01-11 21:48:43'),
	(20, 3, 656, '2018-01-11 21:49:02', '2018-01-11 21:49:02'),
	(21, 3, 758, '2018-01-11 21:49:34', '2018-01-11 21:49:34'),
	(22, 3, 727, '2018-01-11 21:50:36', '2018-01-11 21:50:36'),
	(23, 3, 742, '2018-01-11 21:51:55', '2018-01-11 21:51:55'),
	(24, 3, 2498, '2018-01-11 22:11:58', '2018-01-11 22:11:58'),
	(25, 9, 1020, '2018-01-11 22:22:34', '2018-01-11 22:22:34'),
	(26, 3, 958, '2018-01-11 22:28:04', '2018-01-11 22:28:04'),
	(27, 22, 846, '2018-01-11 22:44:48', '2018-01-11 22:44:48'),
	(28, 22, 3110, '2018-01-11 22:46:10', '2018-01-11 22:46:10'),
	(29, 9, 822, '2018-01-12 14:45:07', '2018-01-12 14:45:07'),
	(30, 9, 755, '2018-01-12 14:47:27', '2018-01-12 14:47:27'),
	(31, 24, 965, '2018-01-12 15:06:34', '2018-01-12 15:06:34'),
	(32, 24, 992, '2018-01-12 15:07:34', '2018-01-12 15:07:34'),
	(33, 24, 690, '2018-01-12 15:08:01', '2018-01-12 15:08:01'),
	(34, 24, 714, '2018-01-12 15:08:57', '2018-01-12 15:08:57'),
	(35, 25, 1591, '2018-01-12 15:12:26', '2018-01-12 15:12:26'),
	(36, 3, 800, '2018-01-12 15:53:20', '2018-01-12 15:53:20');
/*!40000 ALTER TABLE `juego` ENABLE KEYS */;

-- Volcando estructura para tabla db_navejd.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla db_navejd.migrations: ~2 rows (aproximadamente)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2018_01_10_220627_create_naves_tabla', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Volcando estructura para tabla db_navejd.navetabla
CREATE TABLE IF NOT EXISTS `navetabla` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tiempo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla db_navejd.navetabla: ~5 rows (aproximadamente)
DELETE FROM `navetabla`;
/*!40000 ALTER TABLE `navetabla` DISABLE KEYS */;
INSERT INTO `navetabla` (`id`, `nombre`, `tiempo`) VALUES
	(1, 'Juan Diego', '300'),
	(2, 'Alice', '5524'),
	(3, 'asdsad', 'asdas'),
	(4, 'Yisus', 'De la Cruz'),
	(5, 'Guillermo', 'Anto');
/*!40000 ALTER TABLE `navetabla` ENABLE KEYS */;

-- Volcando estructura para tabla db_navejd.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla db_navejd.users: ~0 rows (aproximadamente)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Volcando estructura para tabla db_navejd.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `dni` varchar(8) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- Volcando datos para la tabla db_navejd.usuario: ~26 rows (aproximadamente)
DELETE FROM `usuario`;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`idUsuario`, `nombre`, `dni`, `created_at`, `updated_at`) VALUES
	(2, 'el mono', '451221', '2018-01-11 15:37:10', '2018-01-11 15:37:10'),
	(3, 'Diego', '451222', '2018-01-11 15:55:20', '2018-01-11 15:55:20'),
	(4, 'Juan', '159357', '2018-01-11 15:56:23', '2018-01-11 15:56:23'),
	(5, 'Juan', '1593572', '2018-01-11 15:56:37', '2018-01-11 15:56:37'),
	(6, 'Cell', '14789632', '2018-01-11 15:57:43', '2018-01-11 15:57:43'),
	(7, 'Diego', '12345678', '2018-01-11 16:06:43', '2018-01-11 16:06:43'),
	(8, 'Monster INC', '12589852', '2018-01-11 16:15:48', '2018-01-11 16:15:48'),
	(9, 'Selena', '14789652', '2018-01-11 16:16:29', '2018-01-11 16:16:29'),
	(10, 'Elena', '32147896', '2018-01-11 16:17:02', '2018-01-11 16:17:02'),
	(11, 'dasdasdd', '1596784', '2018-01-11 16:44:29', '2018-01-11 16:44:29'),
	(12, 'Diegoxd', '32587416', '2018-01-11 16:50:15', '2018-01-11 16:50:15'),
	(13, 'Selena', '96325874', '2018-01-11 16:53:45', '2018-01-11 16:53:45'),
	(14, 'asdasdasd', '96332587', '2018-01-11 16:55:23', '2018-01-11 16:55:23'),
	(15, 'asdasddzczx', '1111111', '2018-01-11 16:57:09', '2018-01-11 16:57:09'),
	(16, 'zxczxczxc', '9999999', '2018-01-11 17:08:48', '2018-01-11 17:08:48'),
	(17, 'asddasdasd', '575', '2018-01-11 17:09:29', '2018-01-11 17:09:29'),
	(18, 'asdasd', 'asd', '2018-01-11 17:10:46', '2018-01-11 17:10:46'),
	(19, 'Magaly', '98745632', '2018-01-11 17:42:17', '2018-01-11 17:42:17'),
	(20, 'dasad', 'adasdas', '2018-01-11 17:56:47', '2018-01-11 17:56:47'),
	(21, 'asdasda', 'asdasd', '2018-01-11 22:11:36', '2018-01-11 22:11:36'),
	(22, 'Alice', '74185236', '2018-01-11 22:44:35', '2018-01-11 22:44:35'),
	(23, 'SELENA', '96385274', '2018-01-12 14:44:54', '2018-01-12 14:44:54'),
	(24, 'Melisa', '98745698', '2018-01-12 15:06:22', '2018-01-12 15:06:22'),
	(25, 'goku', '45219439', '2018-01-12 15:12:08', '2018-01-12 15:12:08'),
	(26, 'adasdsadasdasd', '95147863', '2018-01-12 15:27:44', '2018-01-12 15:27:44'),
	(28, 'asdasdas', '23232323', '2018-01-12 15:33:52', '2018-01-12 15:33:52');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
