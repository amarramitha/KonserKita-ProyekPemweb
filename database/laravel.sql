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

-- Dumping structure for table laravel.absens
CREATE TABLE IF NOT EXISTS `absens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ticket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `konser` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.absens: ~0 rows (approximately)

-- Dumping structure for table laravel.cache
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.cache: ~0 rows (approximately)

-- Dumping structure for table laravel.cache_locks
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.cache_locks: ~0 rows (approximately)

-- Dumping structure for table laravel.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table laravel.jobs
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.jobs: ~0 rows (approximately)

-- Dumping structure for table laravel.job_batches
CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.job_batches: ~0 rows (approximately)

-- Dumping structure for table laravel.konsers
CREATE TABLE IF NOT EXISTS `konsers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_start` date NOT NULL,
  `date_end` date NOT NULL,
  `time` time NOT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `konsers_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.konsers: ~0 rows (approximately)

-- Dumping structure for table laravel.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.migrations: ~9 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '0001_01_01_000000_create_users_table', 1),
	(2, '0001_01_01_000001_create_cache_table', 1),
	(3, '0001_01_01_000002_create_jobs_table', 1),
	(4, '2024_05_31_040222_create_konsers_table', 1),
	(5, '2024_05_31_040314_create_tickets_table', 1),
	(6, '2024_05_31_040459_create_purchases_table', 1),
	(7, '2024_05_31_040602_create_syaratketentuans_table', 1),
	(8, '2024_06_01_033620_create_talents_table', 1),
	(9, '2024_06_20_171826_create_absens_table', 1);

-- Dumping structure for table laravel.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.password_reset_tokens: ~0 rows (approximately)

-- Dumping structure for table laravel.sessions
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.sessions: ~0 rows (approximately)

-- Dumping structure for table laravel.syaratketentuans
CREATE TABLE IF NOT EXISTS `syaratketentuans` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `konser_id` bigint unsigned NOT NULL,
  `syaratketentuan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `syaratketentuans_konser_id_foreign` (`konser_id`),
  CONSTRAINT `syaratketentuans_konser_id_foreign` FOREIGN KEY (`konser_id`) REFERENCES `konsers` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.syaratketentuans: ~0 rows (approximately)

-- Dumping structure for table laravel.talents
CREATE TABLE IF NOT EXISTS `talents` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `konser_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `talents_konser_id_foreign` (`konser_id`),
  CONSTRAINT `talents_konser_id_foreign` FOREIGN KEY (`konser_id`) REFERENCES `konsers` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.talents: ~0 rows (approximately)

-- Dumping structure for table laravel.tickets
CREATE TABLE IF NOT EXISTS `tickets` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `konser_id` bigint unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `kuota` int NOT NULL,
  `status` enum('On Sale','Sold Out') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tickets_konser_id_foreign` (`konser_id`),
  CONSTRAINT `tickets_konser_id_foreign` FOREIGN KEY (`konser_id`) REFERENCES `konsers` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.tickets: ~0 rows (approximately)

-- Dumping structure for table laravel.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_refresh_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nik` int DEFAULT NULL,
  `nohp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.users: ~3 rows (approximately)
INSERT INTO `users` (`id`, `name`, `email`, `google_id`, `google_token`, `google_refresh_token`, `role`, `email_verified_at`, `password`, `image`, `nik`, `nohp`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Admin User', 'ivandarmawan2020@gmail.com', NULL, NULL, NULL, 'admin', '2024-06-22 19:35:57', '$2y$12$vCkACRkIaxKqt99qADzxl.AAzf.AstdNNqmq4IQVjVVhyPVn8z6Fe', NULL, NULL, NULL, 'UO9mak7KjE', '2024-06-22 19:35:58', '2024-06-22 19:35:58'),
	(2, 'Admin User', 'amarramitha.thantawi@mhs.unsoed.ac.id', NULL, NULL, NULL, 'admin', '2024-06-22 19:35:58', '$2y$12$acXouvh8HJasZEuVNj7nD.6.8mqHoNkn2QrOT8ccIPYPSENFCpRTy', NULL, NULL, NULL, 'urhw89n5bq', '2024-06-22 19:35:58', '2024-06-22 19:35:58'),
	(3, 'Admin User', 'adila.hasyati@mhs.unsoed.ac.id', NULL, NULL, NULL, 'admin', '2024-06-22 19:35:58', '$2y$12$Zf0l.USJYtMte3sm0U1Uje9TAkWUGKZr.YPeLoP0RhCiYX6wyu.8y', NULL, NULL, NULL, '1cTUWVNpG7', '2024-06-22 19:35:58', '2024-06-22 19:35:58');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
