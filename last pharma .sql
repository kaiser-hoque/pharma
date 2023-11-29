-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2023 at 07:48 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharma`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `medicine_category` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `medicine_category`, `created_at`, `updated_at`) VALUES
(1, 'Aerosol Inhalationy', '2023-11-28 10:55:36', '2023-11-28 10:55:36'),
(3, 'Antibiotics', '2023-11-28 21:53:33', '2023-11-28 21:53:39'),
(4, 'Antihistamines', '2023-11-28 21:54:01', '2023-11-28 21:54:01'),
(5, 'Antidepressants', '2023-11-28 21:54:16', '2023-11-28 21:54:16'),
(6, 'Antacids', '2023-11-28 21:54:32', '2023-11-28 21:54:32'),
(7, 'Antipyretics', '2023-11-28 21:54:52', '2023-11-28 21:54:52'),
(8, 'Bronchodilators', '2023-11-28 21:55:11', '2023-11-28 21:55:11');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact_num` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `division` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `contact_num`, `email`, `address`, `status`, `division`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Novartis', '123444', 'gabc@gamil.com', 'asdas', 0, 'Chittagong', 'sdfsdf', '2023-11-28 10:51:22', '2023-11-28 22:17:53'),
(2, 'Johnson & Johnson', '123', 'abu@gmail.com', 'sdsdfsd', 0, 'Khulna', 'sfsdfsd', '2023-11-28 10:56:32', '2023-11-28 22:18:23'),
(3, 'Pfizer', '0164', 'isdbstudent@gmail.com', 'sfsdfsd', 1, 'Chittagong', 'sdfsdfsd', '2023-11-28 22:14:11', '2023-11-28 22:14:11'),
(4, 'kaiser', '123', 'kaisgger@gamil.com', 'fhfghf', 1, 'Chittagong', 'fghfhfg', '2023-11-28 22:16:33', '2023-11-28 22:16:33'),
(5, 'GlaxoSmithKline (GSK)', '01856', 'Glaxo@mail.com', 'sdfsdf', 1, 'Khulna', 'sdfsdf', '2023-11-28 22:19:05', '2023-11-28 22:19:05'),
(6, 'Eli Lilly and Company', '0123', 'Company@gmail.com', 'sfsdf', 1, 'Barisal', 'sdfsd', '2023-11-28 22:19:56', '2023-11-28 22:19:56'),
(7, 'Novo Nordisk', '0454', 'nordisk@gmail.com', 'dfgdfg', 1, 'Barisal', 'dgdfgdf', '2023-11-28 22:20:47', '2023-11-28 22:20:47'),
(8, 'Boehringer Ingelheim', '034465', 'boehringer@gmail.com', 'dfgdfg', 1, 'Barisal', 'sdfgfd', '2023-11-28 22:21:53', '2023-11-28 22:21:53');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact_num` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` enum('male','female') DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=>active 2=>inactive',
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `contact_num`, `email`, `gender`, `address`, `status`, `description`, `created_at`, `updated_at`) VALUES
(1, 'kaiser', '0186', 'kaisgger@gamil.com', 'male', NULL, 0, '>dfgdfgdfg', '2023-11-28 09:53:09', '2023-11-28 22:12:50'),
(2, 'SAfira', '345', 'safira@gamil.com', 'male', 'satkira', 0, 'hi', '2023-11-28 09:58:54', '2023-11-28 22:12:28'),
(3, 'SAfira', '123', 'safira@gamil.com', 'female', 'dfgdf', 1, 'dfgdf', '2023-11-28 10:31:21', '2023-11-28 10:31:21'),
(4, 'kaiser', '01856635067', 'isdbstudent@gmail.com', 'male', 'dfgdfg', 1, 'sdffg', '2023-11-28 22:08:16', '2023-11-28 22:08:16');

-- --------------------------------------------------------

--
-- Table structure for table `doses`
--

CREATE TABLE `doses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dose_description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doses`
--

INSERT INTO `doses` (`id`, `dose_description`, `created_at`, `updated_at`) VALUES
(1, 'Drops', '2023-11-28 10:56:01', '2023-11-28 10:56:01'),
(2, 'Blood Tubing Set', '2023-11-28 10:56:09', '2023-11-28 22:05:05'),
(3, 'Blood Bag', '2023-11-28 22:04:27', '2023-11-28 22:04:27'),
(4, 'Boluse', '2023-11-28 22:05:25', '2023-11-28 22:05:25'),
(5, 'Butterfly', '2023-11-28 22:05:46', '2023-11-28 22:05:46'),
(6, 'Cr Capsule', '2023-11-28 22:06:08', '2023-11-28 22:06:08'),
(7, 'Cr Tablet', '2023-11-28 22:06:20', '2023-11-28 22:06:20'),
(8, 'Cream', '2023-11-28 22:06:28', '2023-11-28 22:06:28'),
(9, 'Dialysis Solution', '2023-11-28 22:06:47', '2023-11-28 22:06:47'),
(10, 'Dispersible Tablet', '2023-11-28 22:07:13', '2023-11-28 22:07:13');

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

CREATE TABLE `medicines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `companie_id` bigint(20) UNSIGNED NOT NULL,
  `bname` varchar(255) NOT NULL,
  `gname` varchar(255) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `supplier_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `dose_id` bigint(20) UNSIGNED DEFAULT NULL,
  `price` decimal(8,2) NOT NULL,
  `status` int(11) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medicines`
--

INSERT INTO `medicines` (`id`, `companie_id`, `bname`, `gname`, `category_id`, `supplier_id`, `image`, `dose_id`, `price`, `status`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'fgdgdrtre', 'fgdgdrtre', 4, 1, '6181701192673.jpg', 2, '344.00', 0, 'gdfg', '2023-11-28 11:31:13', '2023-11-28 22:30:13'),
(2, 3, 'fsdfds', 'fsdfds', 4, 2, '7701701237832.jpg', 3, '623.00', 0, 'fdgfg', '2023-11-28 22:28:39', '2023-11-29 00:03:52'),
(3, 3, 'gdgdsg', 'gdsgdg', 5, 3, NULL, 5, '23.00', 1, 'dfgdfg', '2023-11-28 23:58:05', '2023-11-28 23:58:05');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_11_14_081209_create_roles_table', 1),
(3, '2023_11_14_081343_create_users_table', 1),
(4, '2023_11_14_083129_create_permissions_table', 1),
(5, '2023_11_25_192418_create_categories_table', 1),
(6, '2023_11_26_061531_create_customers_table', 1),
(7, '2023_11_26_111702_create_doses_table', 1),
(8, '2023_11_26_174219_create_companies_table', 1),
(9, '2023_11_27_035102_create_suppliers_table', 1),
(10, '2023_11_27_061650_create_medicines_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `role_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 3, 'user.show', '2023-11-29 00:12:27', '2023-11-29 00:12:27'),
(2, 3, 'role.show', '2023-11-29 00:12:27', '2023-11-29 00:12:27'),
(3, 3, 'customer.show', '2023-11-29 00:12:27', '2023-11-29 00:12:27'),
(4, 3, 'category.show', '2023-11-29 00:12:27', '2023-11-29 00:12:27'),
(5, 3, 'dose.show', '2023-11-29 00:12:27', '2023-11-29 00:12:27'),
(6, 3, 'companies.show', '2023-11-29 00:12:27', '2023-11-29 00:12:27'),
(7, 3, 'supplier.show', '2023-11-29 00:12:27', '2023-11-29 00:12:27'),
(8, 3, 'medicine.show', '2023-11-29 00:12:27', '2023-11-29 00:12:27'),
(9, 3, 'medicineCategory.show', '2023-11-29 00:12:27', '2023-11-29 00:12:27');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `identity` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `identity`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', '2023-11-28 09:40:56', NULL),
(2, 'Sales Manager', 'salesmanager', '2023-11-28 09:40:56', NULL),
(3, 'Sales Man', 'salesman', '2023-11-28 09:40:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact_num` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=>active 2=>inactive',
  `supplier` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `contact_num`, `email`, `address`, `status`, `supplier`, `description`, `created_at`, `updated_at`) VALUES
(1, 'kaiser', '1234566', 'kaisedddr@gamil.com', 'dfgdf', 0, 'Common', 'dfgdf', '2023-11-28 10:09:18', '2023-11-28 22:23:16'),
(2, 'josim', '012344', 'josim@gmail.com', 'dfgdfgd', 1, 'Very Regular', 'sdfdsf', '2023-11-28 22:22:49', '2023-11-28 22:22:49'),
(3, 'Mojahid', '0123', 'josim@gmail.com', 'dfgdfg', 1, 'Regular', 'fdgdfg', '2023-11-28 22:23:49', '2023-11-28 22:23:49'),
(4, 'Noman', '345', 'noman@gmail.com', 'fdhfg', 1, 'Regular', 'fdgdf', '2023-11-28 22:24:30', '2023-11-28 22:24:30'),
(5, 'Salman', '012345', 'galib@gmail.com', 'dfgdfg', 1, 'Common', 'dfgd', '2023-11-28 22:24:58', '2023-11-28 22:25:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_bn` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact_no_en` varchar(255) NOT NULL,
  `contact_no_bn` varchar(255) DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `password` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL DEFAULT 'en',
  `image` varchar(255) DEFAULT NULL,
  `full_access` tinyint(1) NOT NULL DEFAULT 0 COMMENT '1=>yes 0=>no',
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=>active 2=>inactive',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name_en`, `name_bn`, `email`, `contact_no_en`, `contact_no_bn`, `role_id`, `password`, `language`, `image`, `full_access`, `status`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(5, 'kaiser', NULL, 'k@gmail.com', '2', NULL, 1, '$2y$12$0V58N/ukLtquhcrSmID0MOneAWr.YIyD5Mdx2SyGfHCrB2EPmjJMu', 'en', '7401701238600.jpg', 1, 1, NULL, '2023-11-29 00:05:30', '2023-11-29 00:16:41', NULL),
(6, 'salman', NULL, 'l@gmail.com', '3', NULL, 2, '$2y$12$6GcOBUlrJktiYG771Q59U.yIBdt5csCkC53Hm8mqdi1oUpa448gMK', 'en', '8221701238128.jpg', 1, 1, NULL, '2023-11-29 00:08:48', '2023-11-29 00:08:48', NULL),
(7, 'Tarif', NULL, 't@gmail.com', '4', NULL, 3, '$2y$12$FctdPVSSd4YwnlyZ8UtPceuHFcC3a/h0e4z8YfzZCrUmtopY29mKm', 'en', '1301701238259.jpg', 0, 1, NULL, '2023-11-29 00:10:59', '2023-11-29 00:10:59', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doses`
--
ALTER TABLE `doses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicines`
--
ALTER TABLE `medicines`
  ADD PRIMARY KEY (`id`),
  ADD KEY `medicines_companies_id_index` (`companie_id`),
  ADD KEY `medicines_category_id_index` (`category_id`),
  ADD KEY `medicines_supplier_id_index` (`supplier_id`),
  ADD KEY `medicines_dose_id_index` (`dose_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_role_id_index` (`role_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`),
  ADD UNIQUE KEY `roles_identity_unique` (`identity`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_contact_no_en_unique` (`contact_no_en`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_contact_no_bn_unique` (`contact_no_bn`),
  ADD KEY `users_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `doses`
--
ALTER TABLE `doses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `medicines`
--
ALTER TABLE `medicines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `medicines`
--
ALTER TABLE `medicines`
  ADD CONSTRAINT `medicines_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `medicines_companies_id_foreign` FOREIGN KEY (`companie_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `medicines_dose_id_foreign` FOREIGN KEY (`dose_id`) REFERENCES `doses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `medicines_supplier_id_foreign` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permissions`
--
ALTER TABLE `permissions`
  ADD CONSTRAINT `permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
