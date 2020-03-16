-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2020 at 07:50 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gpnapo`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_item`
--

CREATE TABLE `category_item` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_item`
--

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
(34, 24, 4),
(36, 10, 1),
(37, 25, 3),
(38, 26, 3),
(39, 26, 2),
(40, 27, 3),
(41, 27, 2),
(42, 27, 1),
(43, 28, 3),
(44, 28, 2),
(45, 29, 3),
(46, 29, 2),
(47, 30, 3),
(48, 30, 2),
(49, 31, 3),
(50, 31, 2),
(51, 32, 3),
(52, 33, 3),
(53, 33, 2),
(54, 34, 2),
(55, 34, 3),
(56, 35, 3),
(57, 35, 2),
(58, 36, 1),
(59, 37, 1),
(60, 38, 1),
(61, 39, 1),
(62, 40, 4),
(63, 41, 4),
(64, 42, 4),
(65, 43, 4),
(66, 43, 1),
(67, 44, 4),
(68, 44, 1),
(69, 45, 3),
(70, 45, 4),
(71, 46, 2),
(72, 47, 1),
(73, 48, 2),
(74, 49, 1),
(75, 50, 4),
(76, 51, 4),
(77, 52, 2),
(78, 53, 1),
(79, 54, 3),
(81, 55, 3),
(82, 56, 3),
(83, 57, 2),
(84, 57, 3),
(85, 58, 1),
(86, 59, 1),
(87, 60, 1),
(88, 60, 4),
(89, 61, 2),
(90, 61, 3),
(91, 62, 1),
(92, 63, 1),
(93, 64, 1),
(94, 64, 4),
(95, 65, 1),
(96, 65, 4),
(97, 66, 2),
(98, 66, 3),
(99, 67, 4),
(100, 67, 1),
(101, 68, 3),
(102, 68, 2),
(103, 69, 3),
(104, 69, 2),
(105, 69, 1),
(106, 70, 1),
(107, 71, 1),
(108, 72, 1),
(109, 73, 1),
(110, 74, 1),
(111, 75, 1),
(112, 76, 1),
(113, 76, 3),
(114, 77, 2),
(115, 77, 3),
(116, 78, 2),
(117, 78, 3),
(118, 79, 1),
(119, 79, 4),
(120, 79, 3),
(121, 79, 2),
(122, 80, 2),
(123, 80, 3),
(124, 81, 2),
(125, 81, 3),
(126, 82, 3),
(127, 82, 2),
(128, 83, 1);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

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
(74, '2020_01_25_121548_add_icon_to_category_table', 2),
(76, '2020_02_22_144510_add_is_featured_column_in_items_table', 3),
(78, '2020_03_14_110200_add_archived_and_replied_to_quotes_table', 4),
(79, '2020_03_14_122222_add_views_to_t_items_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE `quotes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `request_message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `archived` int(11) NOT NULL DEFAULT '0',
  `replied` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quotes`
--

INSERT INTO `quotes` (`id`, `first_name`, `last_name`, `email`, `phone`, `company_name`, `request_message`, `created_at`, `updated_at`, `archived`, `replied`) VALUES
(2, 'Jueves', 'Angels', 'admin@gmail.com', '09090662146', NULL, 'Test Quote 1', '2020-03-14 03:53:02', '2020-03-14 04:10:37', 1, 0),
(3, 'Jueves', 'Angels', 'mjt.fajardo@gmail.com', '09090662146', NULL, 'Test Quote 2', '2020-03-14 03:53:16', '2020-03-14 04:00:35', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_categories`
--

CREATE TABLE `t_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_dir` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `archived` bigint(20) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_categories`
--

INSERT INTO `t_categories` (`id`, `name`, `slug`, `description`, `icon`, `img_dir`, `archived`, `created_at`, `updated_at`) VALUES
(1, 'Meat Processing', 'meat-processing', 'Machines and Equipment for Making Hotdogs, Sausages, Burger patties, Canned meat products, Hams, Salami, Chorizo, Tocinos, Beef Tapa, Smoke Fish & Machines for Meat Shops.', 'flaticon-031-machine', 'public/photos/categories/gW1ZIeWhLEpSPC3tFuy0KLGgxkoSWPsNmSAUVgKX.jpeg', 0, '2020-01-17 11:19:24', '2020-02-01 07:22:52'),
(2, 'Hotel and Restaurant', 'hotel-and-restaurant', 'Hotel and restaurant equipment like steamers, fryers, meat slicer, blender and other equipment that is commonly used in kitchen', 'flaticon-038-food', 'public/photos/categories/SKhYZePawxUEvbrR9TYyL8nfEihIpGanXQ65WtfF.jpeg', 0, '2020-01-17 11:24:15', '2020-01-30 05:29:42'),
(3, 'Bakeshops & Commissary', 'bakeshops-commissary', 'Equipment for pastry dough. Commonly use for pizza cake donuts making', 'flaticon-025-meter', 'public/photos/categories/XQ6ruHqeK07yLwFg3Qq55bdNdUC7RVdmOqAIDi6b.jpeg', 0, '2020-01-17 11:27:11', '2020-01-30 05:59:26'),
(4, 'Industrial Mixer', 'industrial-mixer', 'Equipment for factories. Gas, oil, liquid blender and chemical mixing machines', 'flaticon-022-tank', 'public/photos/categories/8Qv5lP6y1szbBjA2DKpdXa4Lb2JgWnymVM7EBEcf.jpeg', 0, '2020-01-17 11:29:26', '2020-01-30 05:32:09');

-- --------------------------------------------------------

--
-- Table structure for table `t_items`
--

CREATE TABLE `t_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) NOT NULL,
  `item_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_brand` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_qty` bigint(20) NOT NULL,
  `item_short_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_dir` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `archived` bigint(20) NOT NULL DEFAULT '0',
  `is_featured` bigint(20) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `views` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_items`
--

INSERT INTO `t_items` (`id`, `users_id`, `item_name`, `item_brand`, `item_qty`, `item_short_description`, `item_description`, `slug`, `img_dir`, `archived`, `is_featured`, `created_at`, `updated_at`, `views`) VALUES
(28, 1, 'Henny Penny Combi Steamer', 'Henny Penny', 1, 'Steamer , Oven', '<p><strong>Henny Penny Combi Steamer&nbsp;</strong><br><br>- Oven For Roasting Chicken, Turkey, Pig&nbsp;<br>- Baking of Breads and Pastries&nbsp;<br>- Steaming Rice, Veggies, Siopao, Puto ETC.&nbsp;<br>-Capacity: 10 Trays</p>', 'henny-penny-combi-steamer', '[\"public/photos/items/ta0UeZmgWCAqqC0ouUmXz0fKVEz2mN7jeE2C4OM4.jpeg\", \"public/photos/items/ZdZpvBZvNxyUgItOx5CVC1p4AZAIGuCXV4zumN3n.jpeg\"]', 0, 0, '2020-02-18 05:04:37', '2020-02-22 07:32:14', 0),
(29, 1, 'Kitchen Aid Cake Mixers', 'Kitchen Aid', 10, 'Mixer', '<p><strong>Kitchen Aid Cake Mixer</strong><br>- Cake Mixers&nbsp;<br>-Made in USA&nbsp;<br>- Capacity: 5 quarts / 5 liters<br>&nbsp;</p>', 'kitchen-aid-cake-mixers', '[\"public/photos/items/ytOUUl90JB5vbIxdyrpMeJEL2tt1QuBp1ZneZ5H4.jpeg\", \"public/photos/items/9skjiRXKx7iJl9baTVqaOiDz48YklC63CzS1hQws.jpeg\"]', 0, 0, '2020-02-18 05:08:47', '2020-02-18 05:08:47', 0),
(30, 1, 'Convection Oven with Built-in Exhaust Hood And Proofer', 'Branded', 1, 'Oven', '<p><strong>Convection Oven with Built-in Exhaust Hood And Proofer underneath&nbsp;</strong><br><br>-Electric Type&nbsp;<br>-Made in Europe&nbsp;<br>- 8 to 10 trays capacity</p>', 'convection-oven-with-built-in-exhaust-hood-and-proofer', '[\"public/photos/items/r4YIrJAb3yRdGfBVSOv3Wu8MVWOqBu2kBMePYVGF.jpeg\", \"public/photos/items/XJhyjIb1Wr1iH0jbcH6ZcuAe4E0CoYVMJDS333zc.jpeg\"]', 0, 0, '2020-02-18 05:50:16', '2020-02-18 05:50:16', 0),
(31, 1, 'Blodgett Conveyor Type pizza Oven', 'Blodgett', 1, 'Oven', '<p><strong>Conveyor Type pizza Oven</strong><br><br>-LPG Type&nbsp;<br>-“Impinge Ovens “ can be set it up as Tunnel ovens&nbsp;<br>-For cooking of: Hopia ,Nachos ,Cookies and Biscuits&nbsp;<br>-Can be use for drying purposes</p>', 'blodgett-conveyor-type-pizza-oven', '[\"public/photos/items/0DAXLwoGIRwR1wxnyTr0lWGXi06KGk7GQLQIiIpg.jpeg\", \"public/photos/items/PRLtdX1562O30mhBLh9QetgzpfYupvOTsUgzt6xD.jpeg\", \"public/photos/items/q11vqdITCda3Gy3yBhUkwgdh4LaWaNcReqmqMbli.jpeg\"]', 0, 0, '2020-02-18 05:52:36', '2020-03-09 06:34:01', 0),
(32, 1, 'Baker Perkins Twin Paddle Planetary Mixer', 'Baker Perkins', 1, 'Mixer', '<p><strong>Baker Perkins Twin Paddle Planetary Mixer&nbsp;</strong><br><br>-Twin paddle -Hydrolic Type&nbsp;<br>-630 Liters Capacity&nbsp;<br>-Made In UK / London&nbsp;<br>-Ideal for making , cookies , biscuits , chips ahoy , brownies and other soft breads and pastries</p>', 'baker-perkins-twin-paddle-planetary-mixer', '[\"public/photos/items/iPb9bWUAyVrcETW8niNVE6wLkszfNnSmFimzvj9K.jpeg\", \"public/photos/items/aqc3b1esvbd6pbslUlIY4u0yKm4Gf2ax6wdUG1X0.jpeg\"]', 0, 1, '2020-02-18 05:54:03', '2020-03-15 21:31:24', 0),
(33, 1, 'Mondial Forni Convection Oven with Built-in Proofer and Hood (Gas Type)', 'Mondial Forni', 1, 'Oven', '<p><strong>Convection Oven with Built-in Proofer and Hood&nbsp;</strong><br><br>-Brand : Mondial Forni&nbsp;<br>-Made in Italy&nbsp;<br>-LPG gas type</p>', 'mondial-forni-convection-oven-with-built-in-proofer-and-hood-gas-type', '[\"public/photos/items/ggYUDGuaJUqgq397fXhkedxPAj7XhwW7UT930mtg.jpeg\", \"public/photos/items/T1j5yYqnwRgZyzp7gx3setO29Zlf7EnkAm4HuR6f.jpeg\"]', 0, 0, '2020-02-18 05:55:45', '2020-02-18 05:55:45', 0),
(34, 1, 'Esmach Bread Stick Machine', 'Esmach', 1, 'Bread Stick Machine', '<p><strong>Esmach Bread Stick Machine</strong><br><br>-Brand: Esmach&nbsp;<br>-Made in Italy</p>', 'esmach-bread-stick-machine', '[\"public/photos/items/sOWuLksSdBGEX8Ofs7GlimQKK1tsckEoYiQjvu1W.jpeg\", \"public/photos/items/9fOHV3l0V4ZefDX3OjSCMjszHbnUT2K5DMv6JzO0.jpeg\"]', 0, 0, '2020-02-18 05:57:40', '2020-02-18 05:57:40', 0),
(35, 1, 'Proofing Cabinet / Fermentation Room for Breads', 'Branded', 1, 'Cabinet', '<p><strong>Proofing Cabinet / Fermentation Room for Breads</strong><br><br>-Made in Taiwan</p>', 'proofing-cabinet-fermentation-room-for-breads', '[\"public/photos/items/BDHPyo47Q8Rncu3tL5ZGIeaPwq7mThNYHGqGigLP.jpeg\"]', 0, 0, '2020-02-18 05:58:59', '2020-02-18 05:58:59', 0),
(36, 1, 'Paddle type Mixer (80 - 10 Liters)', 'Branded', 1, 'Mixer', '<p><strong>Paddle type Mixer&nbsp;</strong><br><br>- 80 -100 Liters Capacity&nbsp;<br>- Use for Meat mixing, powder Mixing, Dough &amp; Bread mixing &nbsp;<br>-Tilting Type&nbsp;<br>- Made in Japan</p>', 'paddle-type-mixer-80-10-liters', '[\"public/photos/items/RXrLQCpxZzURpntsjt43r8Xyf0KXWaQLhgUD0E1p.jpeg\", \"public/photos/items/yzsAKAI0l14al0x9beJUTXWiKoOTKbg6l0fWAgrq.jpeg\"]', 0, 0, '2020-02-18 06:02:50', '2020-02-18 06:02:50', 0),
(37, 1, 'Ribbon Blender / Ribbon Mixer - 240 Liters Capacity', 'Branded', 1, 'Mixer , Blender', '<p><strong>Ribbon Blender / Ribbon Mixer - 240 Liters Capacity</strong></p><p>- Use for mixing all kinds of powders like Flour, coffee powder, Cream powder, spices, salt, sugar, etc&nbsp;<br>- Can mix all kinds of liquid products like Milk, vinegar, sugar syrup, petroleum oils, liquid detergent, vinegar, soy sauce, etc&nbsp;<br>- Available units 500 L / 750 L / 850 L, 1000 L / 1200 L, 2000 L / 2500 / 3000 L</p>', 'ribbon-blender-ribbon-mixer-240-liters-capacity', '[\"public/photos/items/Bjonawv0eWEwne21qZ4mGIf2BJEV84aJYhTSCbvC.jpeg\", \"public/photos/items/GC3BcZFEyg1BLI7gOKIpKuU5y7cCp5CnJd3fVPpX.jpeg\", \"public/photos/items/3YeMuT4RPMvmKtwjm4cL1W8z1Ze4qdhsyOsYc6vg.jpeg\"]', 0, 0, '2020-02-18 06:04:20', '2020-03-14 04:30:22', 2),
(38, 1, 'Hobart & Berkel Multi Cutter Meat Grinder', 'Hobart & Berkel', 1, 'Grinder , Cutter', '<p><strong>Multi Cutter Meat Grinder</strong><br><br>- For cutting vegetables, Fine cutting of meat products for making sausages &amp; Hams / Hotdogs, etc.&nbsp;<br>- Can be used for making desserts like Brownies, Ube Halaya And Making of Bread crumbs&nbsp;<br>- Capacity: 45 liters with Power supply: 5hp Motor, 220v, 60hz, 3 phase</p>', 'hobart-berkel-multi-cutter-meat-grinder', '[\"public/photos/items/KB4VGshw2MFQI9wpYxhXd7PlvuZJpLXgiB8Cr5pd.jpeg\", \"public/photos/items/8Ial3tgshCfdhP5XIbXKyFCV6z3Ogl7EuVFRzpaQ.jpeg\"]', 0, 0, '2020-02-18 06:05:53', '2020-02-18 06:05:53', 0),
(39, 1, 'Kramer Grebe Silent Cutter and Bowl Chopper 500 liters', 'Kramer Grebe', 1, 'Cutter , Chopper', '<p><strong>Silent Cutter / Bowl Chopper 500 liters</strong></p><p>-Brand: Kramer Grebe&nbsp;<br>-Capacity, Vacuum Type with loading &amp; unloading attachments<br>-Made in Germany - all stainless</p>', 'kramer-grebe-silent-cutter-and-bowl-chopper-500-liters', '[\"public/photos/items/ew2UCwn6AaPnBpTHIQ6J2mwDR6iTZS83hIkZ3YMi.jpeg\", \"public/photos/items/Y7u3KZHwVuWvJuBwbPYuPg9nTRGfSxoQ2RnUMUsh.jpeg\"]', 0, 1, '2020-02-18 06:07:52', '2020-02-22 07:32:32', 0),
(41, 1, 'Ribbon Blender / Ribbon mixer 3,000 liters Capacity', 'Branded', 1, 'Mixer', '<p><strong>Ribbon Blender / Ribbon mixer 3,000 liters Capacity</strong><br><br>Ribbon Blender / Ribbon mixer 3,000 liters Capacity<br>-Made in USA for all kinds of powder and liquid products<br>-For Mixing of flour , powder milk , sugar , coffee, feeds , beans. rice grains , liquid detergent, tide powder , petroleum products, oils , etc<br><br>&nbsp;</p>', 'ribbon-blender-ribbon-mixer-3-000-liters-capacity', '[\"public/photos/items/YjVdpN4r1WkC3QGVIhyfGnYgeapZTEoNsCvkmvRt.jpeg\", \"public/photos/items/qgTunpaN8l0JOZpp3vAl3syT1oA3RRLIOoxnQ3Rs.jpeg\"]', 0, 0, '2020-02-18 06:13:23', '2020-02-18 06:13:23', 0),
(42, 1, 'Dorit Vacuum Tumbler  Meat Marinator', 'Dorit', 1, 'Marinator , Tumbler', '<p><strong>Vacuum Tumbler &nbsp;Meat Marinator</strong><br><br>- Brand: Dorit<br>- Curing Machine&nbsp;<br>- For Tocinos &amp; Beef tapas<br>- Made in Europe<br>- Capacity: 600 Liters</p>', 'dorit-vacuum-tumbler-meat-marinator', '[\"public/photos/items/PxNqZDXwKJtFDufIfOX5I7m0nGMsn4QbVa4iNHRn.jpeg\", \"public/photos/items/l3vCIGYOOrJtaVF2xvjIVbiqI8PDzlS3s5xExSge.jpeg\"]', 0, 0, '2020-02-18 06:16:07', '2020-02-18 06:16:07', 0),
(43, 1, 'Rhule Meat Marinator / Vacuum tumbler', 'Rhule', 1, 'Marinator , Tumbler', '<p><strong>Meat Marinator / Vacuum tumbler&nbsp;</strong><br><br>- Brand : Rhule&nbsp;<br>- Curing Machines for Tocinos / Beef tapas&nbsp;<br>- Made in Europe&nbsp;<br>-200 liters Capacity</p>', 'rhule-meat-marinator-vacuum-tumbler', '[\"public/photos/items/WRhQl3GKiMaadQ7KMH6gVdryFRawFvTJK3Lw2bYT.jpeg\", \"public/photos/items/jUrRtgKk28jx2Cdaywmzs8iiImDIcK5GAHBqQIb4.jpeg\"]', 0, 1, '2020-02-18 06:18:21', '2020-02-22 07:32:47', 0),
(44, 1, 'Dual Paddle Type Meat Mixer', 'Branded', 1, 'Mixer', '<p><strong>Dual paddle type Meat Mixer&nbsp;</strong></p><p>- Made In USA<br>- 240 liters Capacity</p>', 'dual-paddle-type-meat-mixer', '[\"public/photos/items/RVPKyi1favpCO6t82mEX3gTJiXOsnoQeeECJUB8V.jpeg\", \"public/photos/items/uIlhqS9n9P44lK1IGc3MUmR0fmiJjwgNr5ufKXeD.jpeg\"]', 0, 1, '2020-02-18 06:21:30', '2020-02-22 07:33:03', 0),
(45, 1, 'Hobart Dough Mixer / Cake mixer', 'Hobart', 1, 'Mixer', '<p><strong>Dough Mixer / Cake mixer</strong><br><br>- Brand : Hobart&nbsp;<br>- 3 in one<br>- For mixing of Breads , cakes and cookies</p>', 'hobart-dough-mixer-cake-mixer', '[\"public/photos/items/SAoCRngRzxqGnQDnIFsa4FrdzGBY7QcRyA9qB3lG.jpeg\", \"public/photos/items/XS1xRXK2jPBMvaWjHljPo8yyEROLpcYrPyxoFCac.jpeg\"]', 0, 0, '2020-02-18 06:23:25', '2020-02-18 06:23:25', 0),
(56, 1, 'Hobart planetary Mixer', 'Hobart', 3, 'Mixer', '<p><strong>Hobart planetary Mixer</strong><br><br>&nbsp;-For Dough / cakes &amp; pastries / dry ingredients.<br>-Complete Accessories, stainless bowl , padle and Wire Whip<br>-140 quarts , 80 quarts , 60quarts ,40quarts , 30quarts &amp; 20quarts&nbsp;</p>', 'hobart-planetary-mixer', '[\"public/photos/items/Tt9J4jtmj44BatF65JUDQZBk6swWmMkSEun6lluA.jpeg\", \"public/photos/items/igoacuWcbflUZQcOLlHDSHjwk85Ev1IIfO0QL8ug.jpeg\"]', 0, 1, '2020-03-09 06:00:37', '2020-03-15 21:20:53', 1),
(57, 1, 'Ice Cube Machine (1000 - 1300 series)', 'Branded', 5, 'Ice Cube Maker', '<p><strong>Ice cube machine</strong><br><br>-1000 to 1300 series<br>&nbsp;-Made in USA<br>-For Bakeshop / Restaurant/ Hotel &amp; meat processing use .</p>', 'ice-cube-machine-1000-1300-series', '[\"public/photos/items/goH4DgyhEitzYg83dw0ZuxhNbnw1LROASKKMKe6l.jpeg\"]', 0, 0, '2020-03-09 06:05:29', '2020-03-15 21:23:20', 1),
(58, 1, 'LASKA 200 liters Bowl Chopper / Silent Cutter', 'Laska', 1, 'Cutter Copper', '<p><strong>LASKA 200 liters Bowl Chopper / Silent Cutter&nbsp;</strong><br><br>-Made In Austria Power Supply&nbsp;<br>-50hp to 75hp Motor&nbsp;<br>-80v/ 440v , 60/50hz ,<br>-3phase&nbsp;</p>', 'laska-200-liters-bowl-chopper-silent-cutter', '[\"public/photos/items/oTVbU3R6AGCRMNiTI78sgHCaExIUk1taDyJQXjb1.jpeg\", \"public/photos/items/g3v3PCI5ryCRqCSVCKkBrTBPaQBpYEydvS4r6ZTL.jpeg\"]', 0, 1, '2020-03-09 06:11:47', '2020-03-09 06:11:47', 0),
(59, 1, 'Braising Pans', 'Branded', 1, 'Braising Pan', '<p><strong>Braising Pans&nbsp;</strong><br><br>- 100 liter to 120 liters&nbsp;<br>-LPG Type&nbsp;<br>-Made In USA</p>', 'braising-pans', '[\"public/photos/items/zUqVWdrn8p5BBeGp0Qy17q3hkoiCOljxoodpLH8Y.jpeg\", \"public/photos/items/TPZvT5EZsepm3iuGpnaTLDUzuzvaUCGCnpksHLgI.jpeg\"]', 0, 1, '2020-03-09 06:18:00', '2020-03-09 06:18:00', 0),
(60, 1, 'Multi purpose Industrial Type Heavy Duty Mixers', 'Branded', 1, 'Mixer', '<p><strong>Multi purpose - Industrial Type Mixers&nbsp;</strong>&nbsp;<br>-Ribbon Blenders And meat mixers&nbsp;<br>-200 liters to 3000 liters Capacities&nbsp;<br>-Made in Europe&nbsp;</p>', 'multi-purpose-industrial-type-heavy-duty-mixers', '[\"public/photos/items/M9zdegHR1URf1I6T4J64aohzkGv8RGR15p9y68t6.jpeg\", \"public/photos/items/jeVuSf066A1FBtU8sGl6ZIcAgaMpSqdaanX5zrzF.jpeg\", \"public/photos/items/WFaRJS20ryQlCKMx9buUaucnNQOnGt61uvPvC2WP.jpeg\"]', 0, 1, '2020-03-09 06:23:13', '2020-03-09 06:23:13', 0),
(61, 1, 'SOTTORIVA Rack Oven (32 trays))', 'SOTTORIVA', 3, 'Oven', '<p><strong>SOTTORIVA- Rack Oven</strong>&nbsp;<br><br>-Made In Italy&nbsp;<br>-32 trays capacity&nbsp;<br>-LPG Type</p>', 'sottoriva-rack-oven-32-trays', '[\"public/photos/items/ZhGvZbQQavnEmvdEb4xp3DTSqkirXqYMSggpwqDC.jpeg\"]', 0, 1, '2020-03-15 21:31:11', '2020-03-15 21:31:11', 0),
(62, 1, 'Wolfking Meat Grinder (3 Phase)', 'Wolfking', 5, 'Grinder', '<p><strong>Wolfking Meat Grinder</strong><br>&nbsp;</p><p>-All Stainless Body</p><p>-50HP motor<br>-3 Phrase<br>-220V<br>-60hz<br>-Made in Denmark</p>', 'wolfking-meat-grinder-3-phase', '[\"public/photos/items/IKTymoeezPXnjpMvvBBgOHKOAWf5mUF2qNlogSbZ.jpeg\", \"public/photos/items/zd4xhMQRxE3uULr1aRFfJPLeOTtDgmqBgzP9A6DA.jpeg\"]', 0, 1, '2020-03-15 21:40:36', '2020-03-15 21:40:36', 0),
(63, 1, 'Townsend Hotdog and Chorizo TY linker', 'Townsend', 2, 'Linker', '<p><strong>Townsend TY linker&nbsp;</strong><br><br>-for Chorizo, and Hotdogs</p>', 'townsend-hotdog-and-chorizo-ty-linker', '[\"public/photos/items/ioT8DoQUfvFspK3UAsb4PKNtAygups1lMyflw3B2.jpeg\"]', 0, 1, '2020-03-15 21:42:38', '2020-03-15 21:42:38', 0),
(64, 1, 'Horizontal Dough / Bread Mixer', 'Branded', 2, 'Mixer', '<p><strong>Horizontal Dough / Bread Mixer</strong></p><p>-Made in USA<br>-Tilting Type<br>-450 Liters Capacity</p>', 'horizontal-dough-bread-mixer', '[\"public/photos/items/hAuGsi7Wh4xGtu7JdWues42tSziPUlwuwtflCliH.jpeg\"]', 0, 1, '2020-03-15 21:48:57', '2020-03-15 21:48:57', 0),
(65, 1, 'Hobart mixer grinder', 'Hobart', 2, 'Mixer', '<p><strong>Hobart mixer grinder&nbsp;</strong><br><br>-180 liters capacity&nbsp;<br>-With # 32 “ grinding plates&nbsp;<br>-7.5hp Motor</p>', 'hobart-mixer-grinder', '[\"public/photos/items/WnYD0uTP9iFNxV5dB0gu9n6r8aE1tPFzydLYN6d4.jpeg\"]', 0, 1, '2020-03-15 21:50:32', '2020-03-15 21:50:32', 0),
(66, 1, 'LPG & Electric Type Convection And Rack Ovens', 'Branded', 10, 'Oven', '<p><strong>Convection Ovens And Rack Ovens</strong><br><br>- LPG &amp; electric type</p>', 'lpg-electric-type-convection-and-rack-ovens', '[\"public/photos/items/9ijEkw5oU9ckFfOmRxaxb0fLuJV6tHof6UDeNDEI.jpeg\", \"public/photos/items/B7Gq2aZ5JeVp97uOTAb4s6PUzpaMP7byZPvoVqjh.jpeg\"]', 0, 1, '2020-03-15 21:52:59', '2020-03-15 21:52:59', 0),
(67, 1, 'AMF Planetary Mixer', 'AMF', 2, 'Mixer', '<p><strong>AMF Planetary Mixer&nbsp;</strong><br><br>&nbsp;- 150 quart / 150 liters</p>', 'amf-planetary-mixer', '[\"public/photos/items/RA60faVzX6QVJqvdGdrCQw2116NdgKxjP3UsFEz7.jpeg\"]', 0, 1, '2020-03-15 21:55:35', '2020-03-15 21:55:35', 0),
(68, 1, 'Walk-in Chiller Combi Freezer', 'Branded', 3, 'Freezer', '<p><strong>Walk-in Chiller Combi Freezer</strong></p><p>-Small / Big Type</p><p>- BIG TYPE with negative 20 to 30 Degrees<br>- 2000kg to 3000kg</p>', 'walk-in-chiller-combi-freezer', '[\"public/photos/items/Q0Hi6nfivfu4LjZH1gk5VB5trTu41hQohmBWWBAT.jpeg\"]', 0, 1, '2020-03-15 21:58:49', '2020-03-15 21:58:49', 0),
(69, 1, '2 Doors Smokehouse', 'Branded', 2, 'Smokehouse', '<p><strong>2 Doors Smokehouse</strong><br>&nbsp;</p><p>- Made in Europe<br>- 4 carts capacity</p>', '2-doors-smokehouse', '[\"public/photos/items/Bxj7aZiLL4Rn8aJKbwo5qS4Bi6QxiYB1UNh7ke34.jpeg\"]', 0, 1, '2020-03-15 22:02:07', '2020-03-15 22:02:07', 0),
(70, 1, 'Brandnew Flaker 10hp Motor', 'Branded', 2, 'Flaker', '<p><strong>Brandnew 10hp Motor Flaker</strong><br>&nbsp;</p><p>- Brandnew Locally Assembled<br>- 10hp Motor<br>- 19 seconds per Frozen block of meat</p>', 'brandnew-flaker-10hp-motor', '[\"public/photos/items/PSahbacHhMwjxPbOWAkfMrpyRzGL4w0xfEl8pAy6.jpeg\"]', 0, 1, '2020-03-15 22:04:14', '2020-03-15 22:04:14', 0),
(71, 1, 'Frozen Meat Slicer / Dicer / Flaker', 'Branded', 2, 'Flaker, Slicer, Dicer', '<p><strong>Frozen Meat Slicer / Dicer / Flaker</strong><br>&nbsp;</p><p>-20hp Motor<br>-Made in USA</p>', 'frozen-meat-slicer-dicer-flaker', '[\"public/photos/items/gnZ9XWV1y7ZPv7slatGDlmtuUszEVpUGHV9O5aQC.jpeg\"]', 0, 1, '2020-03-15 22:06:12', '2020-03-15 22:06:12', 0),
(72, 1, 'Vemag Vacuum Stuffer', 'Vemag', 3, 'Stuffer', '<p><strong>Vemag Vacuum Stuffer</strong></p><p>-Straight Stuffing for Ham / Canned Meat / Sausages / Salami etc.</p>', 'vemag-vacuum-stuffer', '[\"public/photos/items/F7H8BrrxnoY0kklAMxPBEZQly0QQoIVVcZL3s0fL.jpeg\"]', 0, 1, '2020-03-15 22:09:44', '2020-03-15 22:09:44', 0),
(73, 1, 'Koppens Fryers Conveyor', 'Koppens', 2, 'Conveyor', '<p><strong>Koppens Fryers Conveyor</strong></p><p>-Electric Type<br>-Made in USA<br>-Ideal for cooking of Burger patties and nuggets</p>', 'koppens-fryers-conveyor', '[\"public/photos/items/O6y5RQoGXTtx1XmVfFIFEH0B5NDCXXnh6sPzvdFE.jpeg\"]', 0, 1, '2020-03-15 22:12:51', '2020-03-15 22:12:51', 0),
(74, 1, 'Bacon Press / Ham Press', 'Branded', 2, 'Ham Press', '<p><strong>Bacon Press / Ham Press</strong><br><br>Injector Machines with conveyor<br>-102 needles&nbsp;<br>-Made in Europe</p>', 'bacon-press-ham-press', '[\"public/photos/items/xIH4QGEiqqYPXFAX5SFa8iOWKBsCfcEPEHUD3rOD.jpeg\"]', 0, 1, '2020-03-15 22:14:18', '2020-03-15 22:14:18', 0),
(75, 1, 'Paddle Type Steam Jacket Cooker Mixer', 'Branded', 2, 'Mixer', '<p><strong>Paddle Type Steam Jacket Cooker Mixer</strong><br>&nbsp;</p><p>-For making corned beef / tuna<br>-For Mixing of siomai &amp; dimsum etc<br>-500 to 600 liters Capacity<br>-Tilting Type for unloading purposes<br>-All Stainless<br>-Made in Japan</p>', 'paddle-type-steam-jacket-cooker-mixer', '[\"public/photos/items/JRtozxQdZ0B9J4UJ5ah5N1gInK7GIg93qMXAxucr.jpeg\"]', 0, 1, '2020-03-15 22:23:25', '2020-03-15 22:23:25', 0),
(76, 1, 'Meat Carts with Caster Wheels', 'Branded', 17, 'Cart', '<p><strong>Meat Carts with Caster Wheels</strong></p><p>-All Stainless</p>', 'meat-carts-with-caster-wheels', '[\"public/photos/items/sGOQ91zH6fdcW6CZ2kJ4lP1bbRpjI2YR6bh99ass.jpeg\"]', 0, 1, '2020-03-15 22:26:02', '2020-03-15 22:26:02', 0),
(77, 1, 'Electric Type Oven with built-I Exhaust Hood and Proofer', 'EUROFORS', 2, 'Oven', '<p><strong>Oven with built-I Exhaust hood and Proofer / warmer underneath..</strong><br><br>Made In Italy / France&nbsp;<br>-Electric type&nbsp;</p>', 'electric-type-oven-with-built-i-exhaust-hood-and-proofer', '[\"public/photos/items/aCnJNkUJTZhkrN35TQ838toziYpyhdC6PWHF217u.jpeg\"]', 0, 1, '2020-03-15 22:28:48', '2020-03-15 22:28:48', 0),
(78, 1, 'Sewer Rondo Dough Sheeter', 'Branded', 2, 'Sheeter', '<p><strong>Sewer Rondo Dough Sheeter Depositor</strong><br>&nbsp;</p>', 'sewer-rondo-dough-sheeter', '[\"public/photos/items/OvHnmJFKsARct1Kr8HIihHcAhlsGo7ceepYrnLEo.jpeg\", \"public/photos/items/PAYcsPEVrE54bzIjmCrnImiawD6TvmbQbIQUMe5E.jpeg\"]', 0, 1, '2020-03-15 22:31:09', '2020-03-15 22:31:09', 0),
(79, 1, 'Hobart Planetary Mixer', 'Hobart', 10, 'Mixer', '<p><strong>Hobart Planetary Mixer &nbsp;</strong><br>&nbsp;</p><p>-With complete bowl accessories, paddle and wire whip<br>-40 quarts capacity</p>', 'hobart-planetary-mixer-1', '[\"public/photos/items/C1XRg8ep3KoTFY56DuAU3tiXJgcYHYO3NPAx8pCS.jpeg\"]', 0, 1, '2020-03-15 22:33:31', '2020-03-15 22:33:31', 0),
(80, 1, 'Multi-layer Deck Oven', 'Blodgette', 10, 'Oven', '<p><strong>Multi-layer Deck Oven</strong></p><p>-Electric Type / LGP Gas type</p>', 'multi-layer-deck-oven', '[\"public/photos/items/H5yEZpqC0XnvaRsU8PZP1bfUkNequL4AZicN0CXV.jpeg\"]', 0, 1, '2020-03-15 22:35:40', '2020-03-15 22:36:39', 0),
(81, 1, 'Sveba Dahlen Deck Oven with proofer', 'Sveba Dahlen', 4, 'Oven', '<p><strong>Sveba Dahlen Deck Oven with proofer</strong><br>&nbsp;</p><p>-3 Layers &nbsp;<br>-Electric Type</p>', 'sveba-dahlen-deck-oven-with-proofer', '[\"public/photos/items/QWHttcotYA4JgtlcXzdLQ7xgKYKewyB4Urg491Op.jpeg\"]', 0, 1, '2020-03-15 22:38:18', '2020-03-15 22:38:18', 0),
(82, 1, 'Sewer Rondo Reversible Type Dough Sheeters / Rollers', 'Sewer Rondo', 2, 'Sheeter', '<p><strong>Sewer Rondo Reversible Type Dough Sheeters / Rollers</strong></p><p>-For Donuts, Pizza, Pita Breads, Empanadas &amp; pastries<br>-Fritchs from Europe</p><p>&nbsp;</p>', 'sewer-rondo-reversible-type-dough-sheeters-rollers', '[\"public/photos/items/XfSwRIJdfh2Sdst7rupVjwP1LzytvoSdTbHE6j2D.jpeg\", \"public/photos/items/Ud6JskYOUAaqr8TNC2eA9RyKpKFisSiGb8zlt83N.jpeg\", \"public/photos/items/WhmeZjFhcMpmOH7L6Rx4jkNJ3Lo5FguaDvEwFV4C.jpeg\"]', 0, 1, '2020-03-15 22:46:29', '2020-03-15 22:46:29', 0),
(83, 1, 'KRAMER GREBE Bowl Silent Cutter', 'Kramer Grebe', 5, 'Slicer', '<p><strong>KRAMER GREBE Bowl Silent Cutter&nbsp;</strong><br><br>-Made In Germany&nbsp;<br>-Automatic Meat Slicers with variable speed&nbsp;<br>-Floor type heavy duty</p>', 'kramer-grebe-bowl-silent-cutter', '[\"public/photos/items/r2rKFd4Xj9t1vX6Wy2fsyTobTvjBmO0Ytl7HsG9q.jpeg\", \"public/photos/items/wFZeOANlmwrMAm8LmbS6JeaMGQxt58pVxwbwKkP5.jpeg\"]', 0, 1, '2020-03-15 22:47:55', '2020-03-15 22:47:55', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$oOI6p7I7ffs372CUf7Msa.cPdzZ8uk9gUzU0IH2hqCatHBi1u6YMa', 'O2gC09Eeu8FoMA0hSatAnnHYx3JXYMmus3KvdZZtUaGmMSyCkCLOfTzo1js4', '2020-01-17 11:12:49', '2020-01-17 11:12:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_item`
--
ALTER TABLE `category_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_categories`
--
ALTER TABLE `t_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_items`
--
ALTER TABLE `t_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category_item`
--
ALTER TABLE `category_item`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_categories`
--
ALTER TABLE `t_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `t_items`
--
ALTER TABLE `t_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
