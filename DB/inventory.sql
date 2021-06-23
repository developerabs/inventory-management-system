-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2021 at 09:06 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_models`
--

CREATE TABLE `category_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_models`
--

INSERT INTO `category_models` (`id`, `name`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Fashion', '1', '1', '1', '2021-03-28 11:45:57', '2021-03-28 11:51:06'),
(2, 'Mobile', '1', '1', '1', '2021-03-28 11:46:53', '2021-03-28 12:01:15'),
(7, 'Bike', '1', '1', NULL, '2021-04-01 11:08:00', '2021-04-01 11:08:00'),
(8, 'Car', '1', '1', NULL, '2021-04-01 11:08:24', '2021-04-01 11:08:24'),
(9, 'Electronic', '1', '1', NULL, '2021-04-03 11:38:57', '2021-04-03 11:38:57');

-- --------------------------------------------------------

--
-- Table structure for table `customer_models`
--

CREATE TABLE `customer_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_models`
--

INSERT INTO `customer_models` (`id`, `name`, `mobile_no`, `email`, `address`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'dsfgdsaff', 'sdfdsaf', 'bokkor3256@gmail.com', 'dsgfdsaf', '1', '1', '1', '2021-03-28 08:58:30', '2021-03-28 09:07:11');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(10, '2019_08_19_000000_create_failed_jobs_table', 1),
(11, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(12, '2021_03_18_175104_create_sessions_table', 1),
(13, '2021_03_25_084000_create_supplier_models_table', 2),
(14, '2021_03_28_114010_create_customer_models_table', 3),
(15, '2021_03_28_153545_create_unites_models_table', 4),
(16, '2021_03_28_171703_create_category_models_table', 5),
(17, '2021_03_29_055549_create_products_models_table', 6),
(18, '2021_04_03_065616_create_purchase_models_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products_models`
--

CREATE TABLE `products_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `supplier_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products_models`
--

INSERT INTO `products_models` (`id`, `supplier_id`, `category_id`, `unit_id`, `name`, `quantity`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, '1', '2', '4', 'vivo s1 pro', '3', '1', '1', NULL, '2021-03-29 01:12:58', '2021-04-24 12:32:29'),
(2, '3', '2', '4', 'Walton mobile', '28', '1', '1', NULL, '2021-03-29 01:14:20', '2021-04-24 12:30:50'),
(3, '7', '7', '4', 'Yamaha MT 15', '0', '1', '1', NULL, '2021-04-01 11:14:32', '2021-04-01 11:14:32'),
(4, '7', '7', '4', 'Yamaha R15', '0', '1', '1', NULL, '2021-04-01 11:15:25', '2021-04-01 11:15:25'),
(5, '7', '7', '4', 'Yamaha FZ v3', '0', '1', '1', NULL, '2021-04-01 11:16:39', '2021-04-01 11:16:39'),
(6, '7', '7', '4', 'Yamaha FZ v2', '0', '1', '1', NULL, '2021-04-01 22:56:57', '2021-04-01 23:01:04'),
(9, '1', '2', '4', 'vivo S1', '0', '1', '1', NULL, '2021-04-02 21:37:24', '2021-04-02 21:37:24'),
(10, '9', '2', '4', 'iphone x', '0', '1', '1', NULL, '2021-04-02 21:45:08', '2021-04-02 21:45:08'),
(11, '9', '2', '4', 'iphone 11', '0', '1', '1', NULL, '2021-04-02 21:45:41', '2021-04-02 21:46:39'),
(12, '3', '9', '4', 'Washing macien', '0', '1', '1', NULL, '2021-04-03 11:40:51', '2021-04-03 11:40:51');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_models`
--

CREATE TABLE `purchase_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `supplier_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `purchase_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `buying_qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `buying_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '0=Panding,1=Approved',
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purchase_models`
--

INSERT INTO `purchase_models` (`id`, `supplier_id`, `category_id`, `unit_id`, `product_id`, `purchase_no`, `date`, `description`, `buying_qty`, `unit_price`, `buying_price`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, '1', '1', '1', '1', 'dfgd', '0000-00-00', 'xdfsdf', '41', '41', '414', '1', '1', NULL, NULL, NULL),
(2, '1', '2', NULL, '1', '44', '2021-04-15', 'dsgdfsg', '3', '54', '162', '1', '1', NULL, '2021-04-05 01:01:24', '2021-04-05 01:01:24'),
(4, '3', '2', NULL, '2', '445788', '2021-04-14', NULL, '3', '15000', '45000', '1', '1', NULL, '2021-04-24 05:39:55', '2021-04-24 05:39:55'),
(5, '1', '2', NULL, '2', '35165', '2021-06-10', NULL, '1', '3211', '3211', '0', '1', NULL, '2021-06-21 01:38:58', '2021-06-21 01:38:58');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('JdC0AY7KnmoefanvxVgCFjVw7RO7hI1QPsXXeCN7', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiRHhLNlZkenhQbnRic0xCNlAyVjhrQzdOT1RJNm1KSEFUYzBWTjl3WCI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyMToiaHR0cDovLzEyNy4wLjAuMTo4MDAwIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1624260202),
('QCGlLfWu2L5gb8HfcJtJPHEV0icGzA2DUinUE2c9', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiNnNDUjNmVE9kNm5CRVNpZDByTVN5RVpnWHg4dmlDU2Vsb2dCdk00biI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM0OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvcHVyY2hhc2UvYWRkIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJHdXVXZuUTh1aC5KLnZrTTJ5QVVtd092bXFiWS9tRDBIYklJMk1ub1E5ejRkeUVkNUlWL0xpIjt9', 1624266692);

-- --------------------------------------------------------

--
-- Table structure for table `supplier_models`
--

CREATE TABLE `supplier_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ststus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `supplier_models`
--

INSERT INTO `supplier_models` (`id`, `name`, `mobile_no`, `email`, `address`, `ststus`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Vivo', '324165435', 'vivo@gmail.com', 'India', '1', NULL, NULL, NULL, '2021-03-28 04:35:59'),
(3, 'Walton', '021654684', 'walton@gmail.com', 'Dhaka', '1', '1', NULL, '2021-03-29 00:54:08', '2021-03-29 00:54:08'),
(5, 'Xaoimi', '02154984', 'xaoimi@gmail.com', 'Dhaka', '1', '1', NULL, '2021-04-01 11:01:22', '2021-04-01 11:01:22'),
(6, 'Samsung', '6498498', 'samsung@gmail.com', 'Indiea', '1', '1', '1', '2021-04-01 11:02:45', '2021-04-01 11:03:16'),
(7, 'Yamaha', '346464', 'yamaha@gmail.com', 'Indo', '1', '1', '1', '2021-04-01 11:10:55', '2021-04-01 11:13:41'),
(8, 'Suzuki', '5626234', 'suzuki@gmail.com', 'India', '1', '1', NULL, '2021-04-01 11:12:01', '2021-04-01 11:12:01'),
(9, 'Apple', '56262346', 'infoapple@gmail.com', 'sfred', '1', '1', NULL, '2021-04-02 21:44:31', '2021-04-02 21:44:31');

-- --------------------------------------------------------

--
-- Table structure for table `unites_models`
--

CREATE TABLE `unites_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `unites_models`
--

INSERT INTO `unites_models` (`id`, `name`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'kg', '1', '1', '1', '2021-03-28 10:47:31', '2021-03-29 00:59:14'),
(2, 'gm', '1', '1', NULL, '2021-03-28 10:55:13', '2021-03-28 10:55:13'),
(4, 'pcs', '1', '1', '1', '2021-03-28 10:57:49', '2021-03-29 00:59:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `mobile`, `address`, `gender`, `image`, `status`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Md Abu Bakkar siddik', 'bokkor3256@gmail.com', NULL, '$2y$10$wWUvnQ8uh.J.vkM2yAUmwOvmqbY/mD0HbII2MnoQ9z4dyEd5IV/Li', NULL, NULL, '01751477336', 'Thakurgaon, Thakugaon sodor', 'Mail', '1.jpg', 0, NULL, NULL, NULL, NULL, '2021-03-24 11:53:28'),
(5, 'User', 'Al Mamun', 'mamun4@gmail.com', NULL, 'siddik3256', NULL, NULL, 'sdafsaf', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2021-03-23 01:20:01', '2021-03-23 10:37:43'),
(6, 'User', 'Shakil', 'shakil64544@gmail.com', NULL, 'dfsgdfg', NULL, NULL, 'sdafsaf', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2021-03-23 01:22:22', '2021-03-23 07:15:11'),
(7, 'User', 'Saiful', 'saiful687@gmail.com', NULL, 'siddik3256', NULL, NULL, '45736758', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2021-03-23 03:34:37', '2021-03-23 10:40:34'),
(8, 'User', 'Roban', 'roban56@gmail.com', NULL, 'asfas', NULL, NULL, 'dfgdgs', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2021-03-23 03:38:46', '2021-03-23 10:43:24'),
(21, 'User', 'Ruhul Amin', 'ruhul3256@gmail.com', NULL, '$2y$10$l0AdWtHcBgE5wmYTaM9S/ODXMWbxTiTThTtzHyceukK.hRwHXPUN.', NULL, NULL, '01564654', 'Thakurgaon', 'Mail', '21.jpg', 0, NULL, NULL, NULL, '2021-03-24 08:09:41', '2021-03-24 11:55:06'),
(22, 'User', 'fdgdfs', 'dfgdfr3256@gmail.com', NULL, '$2y$10$LKJfiijOAcmdoaJBdoto4ugSPV2iksxqVAmzPFoqNIvgSAc75HoDq', NULL, NULL, 'fdgdfg', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2021-03-24 09:46:19', '2021-03-24 09:46:19'),
(23, 'User', 'Hossin Ali', 'roverhossinali@gmail.com', NULL, '$2y$10$iYp1MZLJOHidpiqtqhFNYe6HZ96r1kWipJkAzswb8vSfTSQ4/VFeW', NULL, NULL, '01303628149', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2021-04-02 21:40:06', '2021-04-02 21:40:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_models`
--
ALTER TABLE `category_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_models`
--
ALTER TABLE `customer_models`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customer_models_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products_models`
--
ALTER TABLE `products_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_models`
--
ALTER TABLE `purchase_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `supplier_models`
--
ALTER TABLE `supplier_models`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `supplier_models_email_unique` (`email`);

--
-- Indexes for table `unites_models`
--
ALTER TABLE `unites_models`
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
-- AUTO_INCREMENT for table `category_models`
--
ALTER TABLE `category_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customer_models`
--
ALTER TABLE `customer_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products_models`
--
ALTER TABLE `products_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `purchase_models`
--
ALTER TABLE `purchase_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `supplier_models`
--
ALTER TABLE `supplier_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `unites_models`
--
ALTER TABLE `unites_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
