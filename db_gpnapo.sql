-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.36-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for gpnapo
CREATE DATABASE IF NOT EXISTS `gpnapo` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `gpnapo`;

-- Dumping structure for table gpnapo.category_item
CREATE TABLE IF NOT EXISTS `category_item` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table gpnapo.category_item: ~34 rows (approximately)
/*!40000 ALTER TABLE `category_item` DISABLE KEYS */;
INSERT INTO `category_item` (`id`, `item_id`, `category_id`) VALUES
	(1, 1, 1),
	(2, 2, 3),
	(3, 3, 1),
	(4, 4, 1),
	(5, 5, 2),
	(6, 6, 2),
	(7, 7, 3),
	(8, 8, 4),
	(9, 8, 3),
	(10, 9, 4),
	(11, 9, 3),
	(12, 10, 1),
	(13, 10, 1),
	(14, 11, 1),
	(15, 12, 1),
	(16, 13, 1),
	(17, 14, 2),
	(18, 14, 3),
	(19, 15, 2),
	(20, 15, 3),
	(21, 16, 3),
	(22, 17, 2),
	(23, 17, 3),
	(24, 18, 2),
	(25, 18, 3),
	(26, 19, 4),
	(27, 20, 4),
	(28, 21, 4),
	(29, 22, 4),
	(30, 23, 4),
	(31, 23, 1),
	(32, 24, 2),
	(33, 24, 3),
	(34, 24, 4);
/*!40000 ALTER TABLE `category_item` ENABLE KEYS */;

-- Dumping structure for table gpnapo.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table gpnapo.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table gpnapo.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table gpnapo.migrations: ~11 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(64, '2014_10_12_000000_create_users_table', 1),
	(65, '2014_10_12_100000_create_password_resets_table', 1),
	(66, '2019_08_19_000000_create_failed_jobs_table', 1),
	(67, '2020_01_04_090428_create_items_table', 1),
	(68, '2020_01_07_134927_create_categories_table', 1),
	(69, '2020_01_12_050937_add_slug_to_items_table', 1),
	(70, '2020_01_12_054257_add_slug_to_categories_table', 1),
	(71, '2020_01_14_150357_create_items_categories_pivot_table', 1),
	(72, '2020_01_16_125529_create_quote_table', 1),
	(73, '2020_01_17_173327_add_description_to_item_table', 1),
	(74, '2020_01_25_121548_add_icon_to_category_table', 2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table gpnapo.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table gpnapo.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table gpnapo.quotes
CREATE TABLE IF NOT EXISTS `quotes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `request_message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table gpnapo.quotes: ~0 rows (approximately)
/*!40000 ALTER TABLE `quotes` DISABLE KEYS */;
/*!40000 ALTER TABLE `quotes` ENABLE KEYS */;

-- Dumping structure for table gpnapo.t_categories
CREATE TABLE IF NOT EXISTS `t_categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_dir` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `archived` bigint(20) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table gpnapo.t_categories: ~4 rows (approximately)
/*!40000 ALTER TABLE `t_categories` DISABLE KEYS */;
INSERT INTO `t_categories` (`id`, `name`, `slug`, `description`, `icon`, `img_dir`, `archived`, `created_at`, `updated_at`) VALUES
	(1, 'Meat Processing', 'meat-processing', 'Machines and Equipment for Making Hotdogs , Sausages, Burger patties , Canned meat products , Hams , Salami , Chorizo, Tocinos , Beef Tapa , Smoke Fish & Machines for Meat Shops .', 'flaticon-031-machine', 'public/photos/categories/gW1ZIeWhLEpSPC3tFuy0KLGgxkoSWPsNmSAUVgKX.jpeg', 0, '2020-01-17 19:19:24', '2020-01-30 13:29:07'),
	(2, 'Hotel and Restaurant', 'hotel-and-restaurant', 'Hotel and restaurant equipment like steamers, fryers, meat slicer, blender and other equipment that is commonly used in kitchen', 'flaticon-038-food', 'public/photos/categories/SKhYZePawxUEvbrR9TYyL8nfEihIpGanXQ65WtfF.jpeg', 0, '2020-01-17 19:24:15', '2020-01-30 13:29:42'),
	(3, 'Bakeshops & Commissary', 'bakeshops-commissary', 'Equipment for pastry dough. Commonly use for pizza cake donuts making', 'flaticon-025-meter', 'public/photos/categories/XQ6ruHqeK07yLwFg3Qq55bdNdUC7RVdmOqAIDi6b.jpeg', 0, '2020-01-17 19:27:11', '2020-01-30 13:59:26'),
	(4, 'Industrial Mixer', 'industrial-mixer', 'Equipment for factories. Gas, oil, liquid blender and chemical mixing machines', 'flaticon-022-tank', 'public/photos/categories/8Qv5lP6y1szbBjA2DKpdXa4Lb2JgWnymVM7EBEcf.jpeg', 0, '2020-01-17 19:29:26', '2020-01-30 13:32:09');
/*!40000 ALTER TABLE `t_categories` ENABLE KEYS */;

-- Dumping structure for table gpnapo.t_items
CREATE TABLE IF NOT EXISTS `t_items` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `users_id` bigint(20) NOT NULL,
  `item_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_brand` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_qty` bigint(20) NOT NULL,
  `item_short_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_dir` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `archived` bigint(20) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table gpnapo.t_items: ~15 rows (approximately)
/*!40000 ALTER TABLE `t_items` DISABLE KEYS */;
INSERT INTO `t_items` (`id`, `users_id`, `item_name`, `item_brand`, `item_qty`, `item_short_description`, `item_description`, `slug`, `img_dir`, `archived`, `created_at`, `updated_at`) VALUES
	(10, 1, 'Ribbon Blender / Ribbon Mixer', 'Branded', 1, '2 in 1 Mixer/Blender', '<p><strong>Ribbon Blender / Ribbon Mixer</strong></p><p>-Use for mixing all kinds of powders like Flour, coffee powder, Cream powder, spices, salt, sugar, etc&nbsp;<br>- Can mix all kinds of liquid products like Milk, vinegar, sugar syrup, petroleum oils, liquid detergent, vinegar, soy sauce, etc&nbsp;<br>- Available units 500 L / 750 L / 850 L, 1000 L / 1200 L, 2000 L / 2500 / 3000 L</p>', 'ribbon-blender-ribbon-mixer', '["public/photos/items/1JXuMgOZYELA1U9GaBlFCJKLWmOJB1914QVO8uL9.jpeg", "public/photos/items/V2F678J4jTGQrkKbDQ4xINaETXxvy3jJ0fvxQRG8.jpeg", "public/photos/items/JXSktE0XAoyvsRRPsDaDtaFC7dGIGMknBgcQrUOS.jpeg"]', 0, '2020-01-30 15:15:48', '2020-01-30 15:15:48'),
	(11, 1, 'Silent Cutter and Bowl Chopper', 'KramerGrebe', 1, 'Cutter and Chopper', '<p><strong>Silent Cutter and Bowl Chopper</strong></p><p>-500 liters Capacity<br>-Vacuum Type with loading &amp; unloading attachments<br>-Made in Germany&nbsp;<br>-All stainless&nbsp;<br>&nbsp;</p>', 'silent-cutter-and-bowl-chopper', '["public/photos/items/HzS7wYUJUyzL33zrNvTASSoLUB2sN1j7bDafl9Qy.jpeg", "public/photos/items/aUAJqeUPAVF4w6jIsLZ4k8vOBUdhJ9RDtcZ0prYM.jpeg"]', 0, '2020-01-30 15:18:48', '2020-01-30 15:18:48');
INSERT INTO `t_items` (`id`, `users_id`, `item_name`, `item_brand`, `item_qty`, `item_short_description`, `item_description`, `slug`, `img_dir`, `archived`, `created_at`, `updated_at`) VALUES
	(12, 1, 'Multi Cutter, Meat Grinder Cutter', 'Hobart & Berkel', 1, 'Mullti-Cutter', '<p><strong>Multi Cutter, Meat Grinder Cutter</strong></p><p>- For cutting vegetables, Fine cutting of meat products for making sausages &amp; Hams / Hotdogs, etc.&nbsp;<br>- Can be used for making desserts like Brownies, Ube Halaya And Making of Bread crumbs&nbsp;<br>- Capacity: 45 liters with Power supply: 5hp Motor, 220v, 60hz, 3 phase</p>', 'multi-cutter-meat-grinder-cutter', '["public/photos/items/vj0HT9ltTcuTfnS125k4TNsWB30mdR5XyqinvRfm.jpeg", "public/photos/items/vSgStEk8VnW4scKyBU9xZKM6ylooonZa9KWT2Qq5.jpeg", "public/photos/items/rxE2N3aPb45176f9y3MyUO4AsxLqNhcbXrop9w5y.jpeg", "public/photos/items/x2X0q4x8d60t0b9qUlleJGZmoBbqPnIbQMVwFBQC.jpeg"]', 0, '2020-01-30 15:23:44', '2020-01-30 15:23:44'),
	(13, 1, 'Paddle type Mixer', 'Branded', 1, 'Meat Mixer', '<p><strong>Paddle type Mixer&nbsp;</strong><br><br>- 80 -100 Liters Capacity&nbsp;<br>- Use for Meat mixing, powder Mixing, Dough &amp; Bread mixing&nbsp;<br>-Tilting Type&nbsp;<br>- Made in Japan</p>', 'paddle-type-mixer', '["public/photos/items/ZYGLQp6XcRxjAFloplqTbE6UcTDwZagQtg392djX.jpeg", "public/photos/items/0fBOnmydR2Ydkf88WAgQQBej6zb31zCBqSTMjLuT.jpeg", "public/photos/items/0wD5fgJU8NZbe8wsa1MwTNywMOmFLPaIWrnk4P4r.jpeg", "public/photos/items/FjKMtnXutPbRmVcvK838bjPSfggkT50RG3JcntGX.jpeg", "public/photos/items/jeUotmG6dCvvWckbv4aBGseEYgJKPq2c0qrkp0Qp.jpeg", "public/photos/items/SJOG3aA1JyBJWQV2ibcNqgHFy6ZZ96a0M0dYxNnG.jpeg"]', 0, '2020-01-30 15:28:38', '2020-01-30 15:28:38');
INSERT INTO `t_items` (`id`, `users_id`, `item_name`, `item_brand`, `item_qty`, `item_short_description`, `item_description`, `slug`, `img_dir`, `archived`, `created_at`, `updated_at`) VALUES
	(14, 1, 'Kitchen Aid - Cake Mixers', 'Kitchen Aid', 10, 'Mixer', '<p><strong>Kitchen Aid - Cake Mixers</strong><br><br>-Made in USA&nbsp;<br>- Capacity: 5 quarts / 5 liters&nbsp;</p>', 'kitchen-aid-cake-mixers', '["public/photos/items/JNWYOpZFogtkgk3ANe4GfEfj10UoOCkTegAnAs2x.jpeg", "public/photos/items/4CJERlHOknSDBlU8Yqh8AJ8u3pagKE9VCOUVvjfA.jpeg"]', 0, '2020-01-30 15:33:40', '2020-01-30 15:38:21'),
	(15, 1, 'Convection Oven with Built-In Exhaust Hood And Proofer', 'Branded', 1, 'Oven', '<p><strong>Convection Oven with Built-In Exhaust Hood And Proofer</strong><br><br>-Electric Type&nbsp;<br>-Made in Europe&nbsp;<br>- 8 to 10 trays capacity</p>', 'convection-oven-with-built-in-exhaust-hood-and-proofer', '["public/photos/items/sBtsJhgxmJ4klKuBWhfe6yNWQRoRnx3vi8bJ9QDi.jpeg", "public/photos/items/wVS01ac1BTGIslR30nO2fvtiwiuE9AedECcXYMDh.jpeg"]', 0, '2020-01-30 15:38:01', '2020-01-30 15:38:01'),
	(16, 1, 'Baker Perkins Twin Paddle Planetary Mixer', 'Baker Perkins', 1, 'Mixer', '<p><strong>Baker Perkins Twin Paddle Planetary Mixer</strong><br><br>-Twin paddle -Hydrolic Type&nbsp;<br>-630 Liters Capacity&nbsp;<br>-Made In UK / London&nbsp;<br>-Ideal for making , cookies , biscuits , chips ahoy , Brownies and other soft breads and pastries</p>', 'baker-perkins-twin-paddle-planetary-mixer', '["public/photos/items/9VPIPW3hxHpYz95qQMQ8LXxk0SttcxEbAyKH1e7N.jpeg", "public/photos/items/88RWdoBOoutWcTw94PQvCghnjxfvr5zXUbGofg8i.jpeg"]', 0, '2020-01-30 15:40:46', '2020-01-30 15:40:46');
INSERT INTO `t_items` (`id`, `users_id`, `item_name`, `item_brand`, `item_qty`, `item_short_description`, `item_description`, `slug`, `img_dir`, `archived`, `created_at`, `updated_at`) VALUES
	(17, 1, 'Mondial Forni Convection Oven with Built-in Proofer and Hood (Gas Type)', 'Mondial Forni', 1, 'Oven', '<p><strong>Mondial Forni Convection Oven with Built-in Proofer and Hood (Gas Type)</strong></p><p>-Made in Italy&nbsp;<br>-LPG gas type</p>', 'mondial-forni-convection-oven-with-built-in-proofer-and-hood-gas-type', '["public/photos/items/pwIeL06ikRxBTqVmmkq7lyPqc2ka6fjWwlBWf0pq.jpeg", "public/photos/items/JYNWHBQv0GEdIyx5CbN4ZBxzRgBua9W52GQUqWwu.jpeg"]', 0, '2020-01-30 15:42:54', '2020-01-30 15:42:54'),
	(18, 1, 'Henny Penny Combi Steamer', 'Henny Penny', 1, 'Steamer', '<p><strong>Henny Penny Combi Steamer</strong></p><p>- Oven For Roasting Chicken, Turkey,Pig&nbsp;<br>- Baking of Breads and Pastries<br>&nbsp;- Steaming Rice, Veggies, Siopao,Puto ETC.&nbsp;<br>-Capacity: 10 Trays&nbsp;<br>&nbsp;</p>', 'henny-penny-combi-steamer', '["public/photos/items/zXuyVXv9hYRv5e4Bdm8KKmwSVRHpqhpSMCVDrcyw.jpeg", "public/photos/items/K9pfoD1hNugTtv6QcToWEe7Za9J48nAGWwR03FYA.jpeg"]', 0, '2020-01-30 15:45:01', '2020-01-30 15:45:01');
INSERT INTO `t_items` (`id`, `users_id`, `item_name`, `item_brand`, `item_qty`, `item_short_description`, `item_description`, `slug`, `img_dir`, `archived`, `created_at`, `updated_at`) VALUES
	(19, 1, 'Ribbon Blender / Ribbon mixer', 'Branded', 1, 'Mixer / Blender', '<p><strong>Ribbon Blender / Ribbon mixer</strong><br>-3,000 liters Capacity<br>-Made in USA&nbsp;<br>-For all kinds of powder and liquid products<br>-For Mixing of flour , powder milk , Sugar , coffee, feeds , beans. Rice grains , liquid detergent, tide powder , petroleum products, oils , etc<br><br><br>&nbsp;</p>', 'ribbon-blender-ribbon-mixer-1', '["public/photos/items/nz8NFo0nWcLn5JroRQ922IUAGmgekuLHcItIdOTT.jpeg", "public/photos/items/KYKYWX9wWBsQj6UWuFcno3Q3YwAGeMews0BHMmbc.jpeg"]', 0, '2020-01-30 16:05:49', '2020-01-30 16:05:49'),
	(20, 1, 'Dorit Vacuum tumbler / Meat Marinator', 'Dorit', 1, 'Marinator / Tumbler', '<p><strong>Dorit Vacuum tumbler / Meat Marinator</strong><br><br>-Curing machine<br>-For Tocinos &amp; Beef tapas&nbsp;<br>-Made in Europe&nbsp;<br>-600 Liter Capacity&nbsp;</p>', 'dorit-vacuum-tumbler-meat-marinator', '["public/photos/items/yrFt0p9Z8YrSkkAETWGc7PQjbJHF4GDLifaNaRpM.jpeg", "public/photos/items/BlsctvLqXy2M4Vg63hQErZNQ0qOYzpzvQW8E2oVB.jpeg"]', 0, '2020-01-30 16:08:30', '2020-01-30 16:08:30'),
	(21, 1, 'Rhule Meat Marinator / Vacuum tumbler', 'Rhule', 1, 'Marinator / Tumbler', '<p><strong>Rhule Meat Marinator / Vacuum tumbler</strong></p><p>-Curing machines for Tocinos / Beef tapas<br>-Made in Europe&nbsp;<br>-200 liters Capacity&nbsp;</p>', 'rhule-meat-marinator-vacuum-tumbler', '["public/photos/items/zfgQhtGdJ4Uy2xQJdne7y7ImkEJXb4urwWKGh7fR.jpeg"]', 0, '2020-01-30 16:11:17', '2020-01-30 16:11:17');
INSERT INTO `t_items` (`id`, `users_id`, `item_name`, `item_brand`, `item_qty`, `item_short_description`, `item_description`, `slug`, `img_dir`, `archived`, `created_at`, `updated_at`) VALUES
	(22, 1, 'Meat tumbler / Vacuum Type Meat Marinator', 'Branded', 1, 'Marinator / Tumbler', '<p><strong>Meat tumbler /Vacuum Type Meat Marinator</strong></p><p>- Curing machine&nbsp;<br>-Made in japan&nbsp;<br>- 500 liters Capacity</p>', 'meat-tumbler-vacuum-type-meat-marinator', '["public/photos/items/jaymftqBUzWyhbIA3NX5CbcJ25epkjraRuYsf4qT.jpeg"]', 0, '2020-01-30 16:12:51', '2020-01-30 16:12:51'),
	(23, 1, 'Dual Paddle Type Meat Mixer', 'Branded', 1, 'Mixer', '<p><strong>Dual paddle type Meat Mixer&nbsp;</strong></p><p>-Made In USA<br>-240 liters Capacity&nbsp;<br>&nbsp;</p>', 'dual-paddle-type-meat-mixer', '["public/photos/items/4yXELfhHHOFMdeKJg6iM7VUfFrUSTQmfri4L77wr.jpeg", "public/photos/items/VfVo65DkqbF4X6gV7Kq3Li5Y3TeTko82zXI3eteZ.jpeg"]', 0, '2020-01-30 16:14:32', '2020-01-30 16:14:32'),
	(24, 1, 'Hobart Dough Mixer/ Cake Mixer', 'Hobart', 1, 'Mixer', '<p><strong>Hobart Dough Mixer/ Cake Mixer&nbsp;</strong><br><br>-3 in one&nbsp;<br>-For mixing of Breads , Cakes and Cookies</p>', 'hobart-dough-mixer-cake-mixer', '["public/photos/items/IUx5Kdil6hOlEZzHDv4OYVF44XNPSGn0ng3yWTGc.jpeg", "public/photos/items/szkYWUbdpuKXef4JqGR7r3VDAuwEhME1mNVYsrU5.jpeg"]', 0, '2020-01-30 16:16:12', '2020-01-30 16:16:12');
/*!40000 ALTER TABLE `t_items` ENABLE KEYS */;

-- Dumping structure for table gpnapo.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table gpnapo.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$oOI6p7I7ffs372CUf7Msa.cPdzZ8uk9gUzU0IH2hqCatHBi1u6YMa', NULL, '2020-01-17 19:12:49', '2020-01-17 19:12:49');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
