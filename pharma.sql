-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2023 at 08:52 AM
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
(1, 'Pain Relief', '2023-11-25 21:44:22', '2023-11-25 23:02:54'),
(2, 'Antibiotics', '2023-11-25 21:56:32', '2023-11-25 23:03:13'),
(3, 'Antihistamines', '2023-11-25 22:56:31', '2023-11-25 23:03:29'),
(4, 'Anti-inflammatory', '2023-11-25 23:03:46', '2023-11-25 23:03:46'),
(5, 'Antacids', '2023-11-25 23:04:00', '2023-11-25 23:04:06'),
(6, 'Antipyretics', '2023-11-25 23:04:45', '2023-11-25 23:04:45'),
(7, 'Antidepressants', '2023-11-25 23:04:59', '2023-11-25 23:04:59'),
(8, 'Antipyretics', '2023-11-25 23:05:17', '2023-11-25 23:05:17'),
(9, 'Antivirals', '2023-11-25 23:05:30', '2023-11-25 23:05:30'),
(10, 'Cough and Cold Medications', '2023-11-25 23:05:59', '2023-11-25 23:05:59'),
(11, 'Allergy Medications', '2023-11-25 23:06:12', '2023-11-25 23:06:12'),
(12, 'kamal', '2023-11-26 02:42:21', '2023-11-26 02:42:21'),
(13, 'kamal', '2023-11-26 02:44:55', '2023-11-26 02:44:55');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact_num` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `division` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `contact_num`, `email`, `address`, `status`, `division`, `description`, `created_at`, `updated_at`) VALUES
(1, 'kaiser', '345', 'isdbstudent@gmail.com', 'erter', 1, 'Rajshahi', 'tryrt', '2023-11-26 21:21:18', '2023-11-26 21:21:18'),
(2, 'Josim saheb', '345', 'josim@gmail.com', 'rtyrty', 1, 'Khulna', 'rtyrty', '2023-11-26 23:00:32', '2023-11-26 23:00:32');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact_num` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `contact_num`, `email`, `gender`, `address`, `status`, `description`, `created_at`, `updated_at`) VALUES
(1, 'kaiser', '123', 'isdbstudent@gmail.com', '1', 'rtyr', 1, 'rtyrt', '2023-11-26 21:20:53', '2023-11-26 21:20:53');

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
(1, 'dfgdfg', '2023-11-26 21:21:59', '2023-11-26 21:21:59');

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

CREATE TABLE `medicines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `bname` varchar(255) NOT NULL,
  `gname` varchar(255) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `supplier_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `dose_id` bigint(20) UNSIGNED NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `status` int(11) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `medicinetypes`
--

CREATE TABLE `medicinetypes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `medityp` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_14_081209_create_roles_table', 1),
(6, '2023_11_14_081343_create_users_table', 1),
(7, '2023_11_19_062824_create_medicine_types_table', 2),
(8, '2023_11_14_083129_create_permissions_table', 3),
(9, '2023_11_19_073856_create_suppliers_controllers_table', 3),
(10, '2023_11_25_192418_create_categories_table', 4),
(11, '2023_11_26_061531_create_customers_table', 5),
(12, '2023_11_26_111702_create_doses_table', 6),
(13, '2023_11_26_174219_create_companies_table', 6),
(14, '2023_11_27_035102_create_suppliers_table', 7),
(15, '2023_11_27_061650_create_medicines_table', 8);

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
(1, 'Admin', 'admin', '2023-11-15 22:33:33', NULL),
(2, 'Sales Manager', 'salesmanager', '2023-11-15 22:33:33', NULL),
(3, 'Sales Man', 'salesman', '2023-11-15 22:33:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact_num` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `supplier` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `contact_num`, `email`, `address`, `status`, `supplier`, `description`, `created_at`, `updated_at`) VALUES
(1, 'kaiser', '123', 'fgfstudent@gmail.com', 'gdfg', 1, 'Common', 'dfgd', '2023-11-26 22:37:11', '2023-11-26 22:55:27'),
(2, 'pharma', '345', 'josimstudent@gmail.com', 'ryrtyr', 0, 'Common', 'rtyrtytr', '2023-11-26 22:56:06', '2023-11-26 23:14:04');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers_controllers`
--

CREATE TABLE `suppliers_controllers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact_no_en` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'kaiser', NULL, 'kaiser@gmail.com', '123454', NULL, 1, '$2y$12$s7Q.DmbbqQySueTR7Ot00.gyp2Lui1z4hpp3oQfJ4/cEvBoOVxEDe', 'en', NULL, 1, 1, NULL, '2023-11-15 23:10:43', '2023-11-18 23:58:59', '2023-11-18 23:58:59'),
(36, 'kaiser', NULL, 'g@gmail.com', '1', NULL, 1, '$2y$12$K/IKJz61A15kwlQ6kteSBuqRM0fxWbIaYAWX7HzMOxAjqGwa8EQRG', 'en', NULL, 1, 1, NULL, '2023-11-26 21:17:47', '2023-11-26 21:17:47', NULL);

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
  ADD KEY `medicines_brand_id_index` (`brand_id`),
  ADD KEY `medicines_category_id_index` (`category_id`),
  ADD KEY `medicines_supplier_id_index` (`supplier_id`),
  ADD KEY `medicines_dose_id_index` (`dose_id`);

--
-- Indexes for table `medicinetypes`
--
ALTER TABLE `medicinetypes`
  ADD PRIMARY KEY (`id`);

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
  ADD UNIQUE KEY `roles_type_unique` (`name`),
  ADD UNIQUE KEY `roles_identity_unique` (`identity`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers_controllers`
--
ALTER TABLE `suppliers_controllers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `suppliers_controllers_email_unique` (`email`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `doses`
--
ALTER TABLE `doses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `medicines`
--
ALTER TABLE `medicines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medicinetypes`
--
ALTER TABLE `medicinetypes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `suppliers_controllers`
--
ALTER TABLE `suppliers_controllers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `medicines`
--
ALTER TABLE `medicines`
  ADD CONSTRAINT `medicines_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `medicines_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
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
