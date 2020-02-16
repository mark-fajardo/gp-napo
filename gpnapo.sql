-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2020 at 07:56 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

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
(37, 25, 2),
(38, 26, 1),
(39, 27, 1),
(40, 28, 1);

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
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
(74, '2020_01_25_121548_add_icon_to_category_table', 2);

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `archived` bigint(20) NOT NULL DEFAULT 0,
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
  `archived` bigint(20) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$oOI6p7I7ffs372CUf7Msa.cPdzZ8uk9gUzU0IH2hqCatHBi1u6YMa', NULL, '2020-01-17 11:12:49', '2020-01-17 11:12:49');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_categories`
--
ALTER TABLE `t_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `t_items`
--
ALTER TABLE `t_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
