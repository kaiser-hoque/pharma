-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2023 at 03:24 AM
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
-- Table structure for table `advancedsalaries`
--

CREATE TABLE `advancedsalaries` (
  `id` int(11) NOT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `month` varchar(191) DEFAULT NULL,
  `year` text DEFAULT NULL,
  `advanced_salary` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `advancedsalaries`
--

INSERT INTO `advancedsalaries` (`id`, `emp_id`, `month`, `year`, `advanced_salary`, `created_at`, `updated_at`) VALUES
(1, 3, 'April', '2002', '3000', '2023-12-10 15:14:20', '2023-12-10 15:14:20'),
(2, 6, 'January', '2002', '2000', '2023-12-10 15:34:03', '2023-12-10 15:34:03'),
(3, 1, 'January', '2002', '2000', '2023-12-10 15:34:37', '2023-12-10 15:34:37');

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

CREATE TABLE `attendances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `attendance_date` date NOT NULL,
  `status` int(11) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'Aerosol Inhalationy', '2023-11-28 04:55:36', '2023-11-28 04:55:36'),
(3, 'Antibiotics', '2023-11-28 15:53:33', '2023-11-28 15:53:39'),
(4, 'Antihistamines', '2023-11-28 15:54:01', '2023-11-28 15:54:01'),
(5, 'Antidepressants', '2023-11-28 15:54:16', '2023-11-28 15:54:16'),
(6, 'Antacids', '2023-11-28 15:54:32', '2023-11-28 15:54:32'),
(7, 'Antipyretics', '2023-11-28 15:54:52', '2023-11-28 15:54:52'),
(8, 'Bronchodilators', '2023-11-28 15:55:11', '2023-11-28 15:55:11'),
(12, 'Aerosol Inhalationy', '2023-11-29 02:50:14', '2023-11-29 02:50:14'),
(13, 'Analgesics/Pain Relievers:', '2023-12-02 17:19:36', '2023-12-02 17:19:36'),
(14, 'Tablet', '2023-12-02 18:26:17', '2023-12-02 18:26:17'),
(15, 'Inhealer', '2023-12-02 18:26:40', '2023-12-02 18:26:40');

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
(9, 'HealthMeds Inc.', '(555) 123-4567', 'info@healthmeds.com', '123 Pharma Lane, Cityville, State, 12345', 1, 'Chittagong', 'Leading provider of generic and specialty medications.', '2023-12-06 13:51:47', '2023-12-06 13:51:47'),
(10, 'VitalCure Pharmaceuticals', '(555) 345-6789', 'info@vitalcurepharma.com', '789 Wellness Avenue, Villagetown, State, 67890', 0, 'Khulna', 'Formerly a major OTC medicine supplier.', '2023-12-06 13:52:47', '2023-12-06 13:52:47'),
(11, 'CurePharma Ltd.', '(555) 234-5678', 'contact@curepharma.com', '456 Health Street, Townsville, State, 54321', 1, 'Sylhet', 'Specializing in cutting-edge biopharmaceuticals.', '2023-12-06 13:53:46', '2023-12-06 13:53:46'),
(12, 'MedTech Solutions', '(555) 456-7890', 'contact@medtechsolutions.com', '101 Medical Park, Hamletville, State, 54321', 1, 'Barisal', 'Innovators in advanced medical technology.', '2023-12-06 14:08:08', '2023-12-06 14:08:08'),
(13, 'BioHeal Innovations', '(555) 567-8901', 'info@bioheal.com', '202 Bio Lane, Suburbia, State, 98765', 0, 'Khulna', 'Pioneering solutions in bioinformatics and personalized medicine.', '2023-12-06 14:08:56', '2023-12-06 14:08:56'),
(14, 'GlobalRemedy Corp.', '(555) 678-9012', 'contact@globalremedy.com', '303 Panacea Street, Downtown, State, 13579', 0, 'Chittagong', 'Formerly known for herbal and natural health products.', '2023-12-06 14:09:39', '2023-12-06 14:09:39'),
(15, 'TechMed Solutions', '(555) 789-0123', 'info@techmedsolutions.com', '404 HealthTech Plaza, Uptown, State, 24680', 1, 'Sylhet', 'Leaders in telehealth solutions and medical technology.', '2023-12-06 14:10:26', '2023-12-06 14:10:26'),
(16, 'Precision Pharma Analytics', '(555) 890-1234', 'contact@precisionpharma.com', '505 Pharma Drive, Outskirts, State, 35791', 1, 'Barisal', 'Experts in pharmaceutical data analytics and research.', '2023-12-06 14:11:10', '2023-12-06 14:11:10'),
(17, 'MedSupply Logistics', '(555) 901-2345', 'info@medsupplylogistics.com', '606 Pharma Street, Countryside, State, 46802', 0, 'Rangpur', 'Formerly managed pharmaceutical supply chain logistics', '2023-12-06 14:11:52', '2023-12-06 14:11:52'),
(18, 'CureGenix Therapeutics', '(555) 012-3456', 'info@curegenix.com', '707 Genix Avenue, Seaside, State, 57913', 0, 'Dhaka', 'Advancing breakthroughs in gene-based therapeutics.', '2023-12-06 14:12:31', '2023-12-06 14:12:31');

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
(9, 'Alice Johnson', '(555) 789-0123', 'alice.j@email.com', 'female', '456 Oak St, Cityville, State, 12345', 0, 'Preferred customer, frequent purchases.', '2023-12-06 13:17:27', '2023-12-06 13:17:27'),
(10, 'Bob Smith', '(555) 123-4567', 'bob.smith@email.com', 'male', '789 Pine St, Townsville, State, 54321', 1, 'Tech enthusiast, subscribed to newsletter.', '2023-12-06 13:19:21', '2023-12-06 13:19:21'),
(11, 'Carol Martinez', '(555) 234-5678', 'carol.m@email.com', 'female', '101 Cedar St, Villagetown, State, 67890', 1, 'Fitness enthusiast, interested in sports products.', '2023-12-06 13:20:22', '2023-12-06 13:20:22'),
(12, 'David Wilson', '(555) 345-6789', 'david.w@email.com', 'male', '202 Maple St, Hamletville, State, 54321', 1, 'Occasional shopper, price-conscious.', '2023-12-06 13:38:30', '2023-12-06 13:38:30'),
(13, 'Davis', '(555) 456-7890', 'emily.d@email.com', 'female', '303 Elm St, Suburbia, State, 98765', 0, 'Fashionista, follows latest trends.', '2023-12-06 13:39:29', '2023-12-06 13:39:29'),
(14, 'Frank Thompson', '(555) 567-8901', 'frank.t@email.com', 'male', '404 Birch St, Downtown, State, 13579', 1, 'DIY enthusiast, interested in home', '2023-12-06 13:40:09', '2023-12-06 13:40:09'),
(15, 'Grace Turner', '(555) 678-9012', 'grace.t@email.com', 'female', '505 Walnut St, Uptown, State, 24680', 0, 'Book lover, frequently buys books and', '2023-12-06 13:40:51', '2023-12-06 13:40:51'),
(16, 'Harry Lee', '(555) 789-0123', 'harry.l@email.com', 'male', '606 Oak St, Outskirts, State, 35791', 0, 'Outdoor enthusiast, interested in', '2023-12-06 13:41:33', '2023-12-06 13:41:33'),
(17, 'Irene Kim', '(555) 890-1234', 'irene.k@email.com', 'female', '707 Pine St, Countryside, State, 46802', 1, 'Health-conscious, buys organic', '2023-12-06 13:42:19', '2023-12-06 13:42:19'),
(18, 'Jake Evans', '(555) 901-2345', 'jake.e@email.com', 'male', '808 Cedar St, Seaside, State, 57913', 0, 'Tech-savvy, interested in the latest', '2023-12-06 13:43:04', '2023-12-06 13:43:04'),
(19, 'Olivia Brown', '(555) 012-3456', 'olivia.b@email.com', 'female', '909 Maple St, Riverside, State, 13579', 0, 'College student, interested in educational materials.', '2023-12-06 13:43:53', '2023-12-06 13:43:53'),
(20, 'kaiser', '(555) 789-0123', 'kaiser@gamil.com', 'male', 'satkania, chittagong', 1, 'regular customer', '2023-12-06 14:00:27', '2023-12-06 14:00:27');

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
(1, 'Acetaminophen', '2023-12-01 03:55:18', '2023-12-01 03:55:18'),
(2, 'Blood Tubing Set', '2023-11-28 04:56:09', '2023-11-28 16:05:05'),
(3, 'Blood Bag', '2023-11-28 16:04:27', '2023-11-28 16:04:27'),
(4, 'Boluse', '2023-11-28 16:05:25', '2023-11-28 16:05:25'),
(5, 'Butterfly', '2023-11-28 16:05:46', '2023-11-28 16:05:46'),
(6, 'Cr Capsule', '2023-11-28 16:06:08', '2023-11-28 16:06:08'),
(7, 'Cr Tablet', '2023-11-28 16:06:20', '2023-11-28 16:06:20'),
(8, 'Cream', '2023-11-28 16:06:28', '2023-11-28 16:06:28'),
(9, 'Dialysis Solution', '2023-11-28 16:06:47', '2023-11-28 16:06:47'),
(10, 'Dispersible Tablet', '2023-11-28 16:07:13', '2023-11-28 16:07:13');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact_num` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `joindate` date DEFAULT NULL,
  `gender` enum('male','female') DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=>active 2=>inactive',
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `contact_num`, `email`, `joindate`, `gender`, `address`, `status`, `description`, `created_at`, `updated_at`) VALUES
(1, 'SAfira', '1234', 'kaiser@gamil.com', '2023-12-04', 'female', 'treter', 1, 'ertert', '2023-12-04 13:32:59', '2023-12-04 13:32:59'),
(2, 'SAfira', '1234', 'kaiser@gamil.com', '2023-12-04', 'female', 'treter', 1, 'ertert', '2023-12-04 13:36:27', '2023-12-04 13:36:27'),
(3, 'jasim', '345', 'safira@gamil.com', '2023-12-04', 'male', 'yuitut', 1, 'tyutyu', '2023-12-04 13:41:23', '2023-12-04 13:41:23'),
(4, 'jasim', '345', 'safira@gamil.com', '2023-12-04', 'male', 'yuitut', 1, 'tyutyu', '2023-12-04 13:44:00', '2023-12-04 13:44:00'),
(5, 'jasim', '345', 'safira@gamil.com', '2023-12-04', 'male', 'yuitut', 1, 'tyutyu', '2023-12-04 13:44:05', '2023-12-04 13:44:05'),
(6, 'kamal', '34556', 'sagggfira@gamil.com', '2023-12-03', 'female', 'gdfd', 0, 'ghg', '2023-12-04 13:45:43', '2023-12-04 13:45:43'),
(7, 'kamal', '34556', 'sagggfira@gamil.com', '2023-12-03', 'female', 'gdfd', 0, 'ghg', '2023-12-04 13:46:42', '2023-12-04 13:46:42'),
(8, 'kamal', '34556', 'sagggfira@gamil.com', '2023-12-03', 'female', 'gdfd', 0, 'ghg', '2023-12-04 13:47:45', '2023-12-04 13:47:45'),
(9, 'jasim', '123', 'kaiser@gamil.com', '2023-12-03', 'female', 'rtyry', 1, 'gdfgdfg', '2023-12-04 13:48:12', '2023-12-04 13:48:12'),
(10, 'jasim', '123', 'kaiser@gamil.com', '2023-12-03', 'female', 'rtyry', 1, 'gdfgdfg', '2023-12-04 13:50:03', '2023-12-04 13:50:03');

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

CREATE TABLE `medicines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `companie_id` bigint(20) UNSIGNED NOT NULL,
  `bname` varchar(255) NOT NULL,
  `gname` varchar(255) NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `product_code` varchar(50) NOT NULL,
  `supplier_id` bigint(20) UNSIGNED DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `dose_id` bigint(20) UNSIGNED NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `status` int(11) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `manufacturedate` date NOT NULL,
  `expiredate` date NOT NULL,
  `strength` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medicines`
--

INSERT INTO `medicines` (`id`, `companie_id`, `bname`, `gname`, `category_id`, `product_code`, `supplier_id`, `image`, `dose_id`, `price`, `status`, `description`, `created_at`, `updated_at`, `manufacturedate`, `expiredate`, `strength`) VALUES
(10, 11, 'Panadol', 'Paracetamol', 6, '1234', NULL, NULL, 4, '455.00', 1, 'Fever and pain relief medication.', '2023-12-06 14:25:33', '2023-12-06 14:25:33', '2022-05-02', '2023-12-29', '500mg'),
(11, 13, 'Amoxil', 'Amoxicillin', 13, 'AMX002', 5, NULL, 2, '300.00', 1, 'Antibiotic for bacterial infections.', '2023-12-06 14:31:18', '2023-12-06 14:31:18', '2023-11-26', '2023-12-29', '250mg'),
(12, 15, 'Lipitor', 'Atorvastatin', 7, 'LPT003', 4, NULL, 7, '122.00', 1, 'Cholesterol-lowering medication.', '2023-12-06 19:45:09', '2023-12-06 19:45:09', '2023-12-03', '2023-12-29', '250mg'),
(13, 15, 'Ibuprofen', 'Ibuprofen', 3, 'IBP004', 1, NULL, 8, '670.00', 1, 'Nonsteroidal anti-inflammatory drug (NSAID).', '2023-12-06 19:46:22', '2023-12-06 19:46:22', '2023-11-26', '2023-12-30', '500mg'),
(14, 14, 'Aspirin', 'Acetylsalicylic Acid', 7, 'ASP005', NULL, NULL, 2, '90.00', 1, 'Pain reliever and anti-inflammatory medication.', '2023-12-06 19:47:34', '2023-12-06 19:47:34', '2023-12-04', '2023-12-28', '500mg'),
(15, 18, 'Advil', 'Ibuprofen', 15, 'ADV001', 5, NULL, 2, '455.00', 1, 'Over-the-counter pain reliever and anti-inflammatory drug.', '2023-12-06 19:50:49', '2023-12-06 19:50:49', '2023-11-29', '2023-12-23', '100mg'),
(16, 17, 'Zyrtec', 'Cetirizine', 7, 'ZYR002', 3, NULL, 8, '330.00', 0, 'Antihistamine used for allergy relief.', '2023-12-06 19:52:23', '2023-12-06 19:52:23', '2024-01-01', '2023-12-28', '250mg'),
(17, 11, 'Prozac', 'Fluoxetine', 6, 'PRO003', 7, NULL, 5, '200.00', 1, 'SSRI used for depression and anxiety.', '2023-12-06 19:53:50', '2023-12-06 19:53:50', '2023-11-22', '2023-12-28', '500mg'),
(18, 9, 'Nexium', 'Esomeprazole', 12, 'NEX005', 8, NULL, 2, '100.00', 1, 'PPI used to treat acid reflux.', '2023-12-06 19:55:03', '2023-12-06 19:55:03', '2023-10-23', '2023-12-29', '250mg'),
(19, 16, 'Nexium', 'Esomeprazole', 6, 'NEX005', 7, NULL, 4, '235.00', 1, 'PPI used to treat acid reflux.', '2023-12-06 21:10:15', '2023-12-06 21:10:15', '2023-12-10', '2023-12-29', '25mg'),
(20, 16, 'Tylenol', 'Acetaminophen', 15, 'TYL004', 1, NULL, 6, '555.00', 1, 'Commonly used for pain and fever relief.', '2023-12-06 21:11:51', '2023-12-06 21:11:51', '2023-08-09', '2024-03-14', '500MG');

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
(10, '2023_11_27_061650_create_medicines_table', 1),
(13, '2023_12_03_145820_create_purchases_table', 2),
(14, '2023_12_03_191258_create_salaries_table', 2),
(15, '2023_12_03_192039_create_attendances_table', 3),
(16, '2023_12_04_135719_create_stocks_table', 3),
(17, '2023_12_04_140410_create_purchase_details_table', 3),
(18, '2023_12_04_185737_create_employees_table', 3);

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
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `supplier_id` bigint(20) UNSIGNED DEFAULT NULL,
  `purchase_date` date NOT NULL,
  `reference_no` varchar(255) DEFAULT NULL,
  `total_quantity` varchar(255) DEFAULT NULL,
  `sub_amount` decimal(10,2) NOT NULL DEFAULT 0.00,
  `tax` decimal(10,2) DEFAULT 0.00,
  `discount_type` int(11) DEFAULT 0 COMMENT '0 amount, 1 percent',
  `discount` decimal(10,2) DEFAULT 0.00,
  `other_charge` decimal(10,2) DEFAULT 0.00,
  `round_of` decimal(10,2) DEFAULT 0.00,
  `grand_total` decimal(10,2) NOT NULL DEFAULT 0.00,
  `note` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) NOT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `payment_status` int(11) DEFAULT 0 COMMENT '0 unpaid, 1 paid, 2 partial_paid',
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 parches, 2 return, 3 partial_return, 4 cancel',
  `status_note` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`id`, `supplier_id`, `purchase_date`, `reference_no`, `total_quantity`, `sub_amount`, `tax`, `discount_type`, `discount`, `other_charge`, `round_of`, `grand_total`, `note`, `created_by`, `updated_by`, `payment_status`, `status`, `status_note`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '2023-12-05', '123', '4', '67.00', '5.00', 7, '5.00', '4.00', '45.00', '45.00', 'hi', '', NULL, 0, 1, 'hi', NULL, NULL, NULL),
(2, 1, '2023-12-05', '128', '7', '67.00', '5.00', 9, '6.00', '5.00', '55.00', '95.00', 'hi', '', NULL, 0, 1, 'hlw', NULL, NULL, NULL),
(4, 2, '2023-11-27', '11111', '2', '185.60', '0.00', 1, '5.00', NULL, '0.60', '203.00', 'hhhh', '1', NULL, 0, 1, NULL, '2023-12-07 00:14:37', '2023-12-07 00:14:37', NULL),
(5, 4, '2023-12-13', '34', '8', '457.60', '0.00', 1, '34.00', NULL, '0.60', '446.00', 'kamal', '1', NULL, 0, 1, NULL, '2023-12-07 01:04:28', '2023-12-07 01:04:28', NULL),
(6, 4, '2023-12-13', '34', '67', '-2653.20', '0.00', 1, '34.00', NULL, '0.80', '-2665.00', 'kamal', '1', NULL, 0, 1, NULL, '2023-12-07 01:05:57', '2023-12-07 01:05:57', NULL),
(8, 4, '2023-12-04', '454', '2', '99.00', '0.00', 1, '5.00', NULL, '0.00', '99.00', 'jhwgw', '1', NULL, 0, 1, NULL, '2023-12-07 01:18:37', '2023-12-07 01:18:37', NULL),
(9, 2, '2023-12-04', '43543', '23', '1055.24', '0.00', 0, '23.00', NULL, '0.53', '835.00', 'lll', '1', NULL, 0, 1, NULL, '2023-12-08 11:45:19', '2023-12-08 11:45:19', NULL),
(10, 3, '2023-12-07', NULL, '1', '440.00', '0.00', 0, '23.00', NULL, '0.80', '372.00', 'good', '1', NULL, 0, 1, NULL, '2023-12-09 10:46:03', '2023-12-09 10:46:03', NULL),
(11, 3, '2023-12-10', NULL, '1', '66.00', '0.00', 1, '10.00', NULL, '0.00', '79.00', NULL, '1', NULL, 0, 1, NULL, '2023-12-09 10:58:17', '2023-12-09 10:58:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `purchase_details`
--

CREATE TABLE `purchase_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `purchase_id` bigint(20) UNSIGNED NOT NULL,
  `medicine_id` bigint(20) UNSIGNED DEFAULT NULL,
  `quantity` decimal(10,2) NOT NULL DEFAULT 0.00,
  `unit_price` decimal(10,2) NOT NULL DEFAULT 0.00,
  `sub_amount` decimal(10,2) NOT NULL DEFAULT 0.00,
  `tax` decimal(10,2) NOT NULL DEFAULT 0.00,
  `discount_type` int(11) NOT NULL DEFAULT 0 COMMENT '0 amount, 1 percent',
  `discount` decimal(10,2) NOT NULL DEFAULT 0.00,
  `total_amount` decimal(10,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purchase_details`
--

INSERT INTO `purchase_details` (`id`, `purchase_id`, `medicine_id`, `quantity`, `unit_price`, `sub_amount`, `tax`, `discount_type`, `discount`, `total_amount`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 2, '23.00', '23.00', '23.00', '4.00', 1, '3.00', '23.00', '2023-12-04 23:17:33', '2023-12-04 23:17:33', NULL),
(2, 3, 3, '3.00', '3.00', '3.00', '2.00', 1, '1.00', '56.00', '2023-12-04 23:31:56', '2023-12-04 23:31:56', NULL),
(3, 4, 13, '2.00', '88.00', '96.80', '10.00', 1, '4.00', '185.60', '2023-12-07 00:14:37', '2023-12-07 00:14:37', NULL),
(4, 5, 13, '8.00', '55.00', '60.50', '10.00', 0, '6.00', '457.60', '2023-12-07 01:04:28', '2023-12-07 01:04:28', NULL),
(5, 5, 13, '0.00', '0.00', '0.00', '0.00', 0, '0.00', '0.00', '2023-12-07 01:04:28', '2023-12-07 01:04:28', NULL),
(6, 6, 13, '67.00', '4.00', '4.40', '10.00', 1, '44.00', '-2653.20', '2023-12-07 01:05:57', '2023-12-07 01:05:57', NULL),
(7, 8, 12, '2.00', '45.00', '49.50', '10.00', 0, '0.00', '99.00', '2023-12-07 01:18:37', '2023-12-07 01:18:37', NULL),
(8, 9, 14, '23.00', '56.00', '68.88', '23.00', 1, '23.00', '1055.24', '2023-12-08 11:45:19', '2023-12-08 11:45:19', NULL),
(9, 10, 14, '1.00', '400.00', '440.00', '10.00', 1, '0.00', '440.00', '2023-12-09 10:46:03', '2023-12-09 10:46:03', NULL),
(10, 11, 12, '1.00', '60.00', '66.00', '10.00', 1, '0.00', '66.00', '2023-12-09 10:58:17', '2023-12-09 10:58:17', NULL);

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
(1, 'Admin', 'admin', '2023-11-30 23:59:21', NULL),
(2, 'Sales Manager', 'salesmanager', '2023-11-30 23:59:21', NULL),
(3, 'Sales Man', 'salesman', '2023-11-30 23:59:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `salaries`
--

CREATE TABLE `salaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `salary_type` enum('regular','advance') NOT NULL,
  `payment_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `medicine_id` bigint(20) UNSIGNED DEFAULT NULL,
  `purchase_id` bigint(20) UNSIGNED DEFAULT NULL,
  `sales_id` bigint(20) UNSIGNED DEFAULT NULL,
  `transfer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `quantity` decimal(10,2) NOT NULL DEFAULT 0.00,
  `unit_price` decimal(10,2) NOT NULL DEFAULT 0.00,
  `tax` decimal(10,2) DEFAULT 0.00,
  `discount` decimal(10,2) DEFAULT 0.00,
  `batch_id` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`id`, `medicine_id`, `purchase_id`, `sales_id`, `transfer_id`, `quantity`, `unit_price`, `tax`, `discount`, `batch_id`, `created_at`, `updated_at`) VALUES
(1, 13, 4, NULL, NULL, '2.00', '92.80', '10.00', '4.00', 1, '2023-12-07 00:14:37', '2023-12-07 00:14:37'),
(2, 13, 5, NULL, NULL, '8.00', '57.20', '10.00', '6.00', 1, '2023-12-07 01:04:28', '2023-12-07 01:04:28'),
(3, 13, 6, NULL, NULL, '67.00', '-39.60', '10.00', '44.00', 1, '2023-12-07 01:05:57', '2023-12-07 01:05:57'),
(4, 12, 8, NULL, NULL, '2.00', '49.50', '10.00', '0.00', 1, '2023-12-07 01:18:37', '2023-12-07 01:18:37'),
(5, 14, 9, NULL, NULL, '23.00', '45.88', '23.00', '23.00', 1, '2023-12-08 11:45:19', '2023-12-08 11:45:19'),
(6, 14, 10, NULL, NULL, '1.00', '440.00', '10.00', '0.00', 1, '2023-12-09 10:46:03', '2023-12-09 10:46:03'),
(7, 12, 11, NULL, NULL, '1.00', '66.00', '10.00', '0.00', 1, '2023-12-09 10:58:17', '2023-12-09 10:58:17');

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
(1, 'jakariya', '1234', 'safira@gamil.com', NULL, 1, 'Common', NULL, '2023-12-01 03:56:41', '2023-12-04 10:16:20'),
(2, 'salman', '45', 'abu@gmail.com', 'gdgf', 1, 'Regular', 'dgdfgf', '2023-12-04 10:16:00', '2023-12-04 10:16:00'),
(3, 'Mojahid', '0123', 'josim@gmail.com', 'dfgdfg', 1, 'Regular', 'fdgdfg', '2023-11-28 16:23:49', '2023-11-28 16:23:49'),
(4, 'Noman', '345', 'noman@gmail.com', 'fdhfg', 1, 'Regular', 'fdgdf', '2023-11-28 16:24:30', '2023-11-28 16:24:30'),
(5, 'Salman', '012345', 'galib@gmail.com', 'dfgdfg', 1, 'Common', 'dfgd', '2023-11-28 16:24:58', '2023-11-28 16:25:13'),
(6, 'kabir', '0123', 'kabir@gmail.com', 'sdfsdf', 1, 'Regular', 'sdfsdfsd', '2023-12-02 17:38:03', '2023-12-02 17:38:03'),
(7, 'Shefayet', '97', 'Shefayet@gmail.com', 'sdfsfs', 0, 'Very Regular', 'sdffsd', '2023-12-02 17:38:51', '2023-12-02 17:38:51'),
(8, 'kamal', '0123', 'isdbstudent@gmail.com', 'dsfsd', 1, 'Regular', 'dsfsd', '2023-12-02 18:05:37', '2023-12-02 18:05:37');

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
(1, 'kaiser', NULL, 'kaiser@gmail.com', '1', NULL, 1, '$2y$12$jMuFd4OykQBnGkUPj3LcrO7oZN54g0jezVDKhRIgFOJIILcQLJU9i', 'en', NULL, 1, 1, NULL, '2023-12-01 00:00:46', '2023-12-01 00:00:46', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advancedsalaries`
--
ALTER TABLE `advancedsalaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendances`
--
ALTER TABLE `attendances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attendances_user_id_index` (`user_id`);

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
-- Indexes for table `employees`
--
ALTER TABLE `employees`
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
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `purchases_supplier_id_index` (`supplier_id`);

--
-- Indexes for table `purchase_details`
--
ALTER TABLE `purchase_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`),
  ADD UNIQUE KEY `roles_identity_unique` (`identity`);

--
-- Indexes for table `salaries`
--
ALTER TABLE `salaries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `salaries_user_id_index` (`user_id`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `advancedsalaries`
--
ALTER TABLE `advancedsalaries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `attendances`
--
ALTER TABLE `attendances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `doses`
--
ALTER TABLE `doses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `medicines`
--
ALTER TABLE `medicines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

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
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `purchase_details`
--
ALTER TABLE `purchase_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `salaries`
--
ALTER TABLE `salaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendances`
--
ALTER TABLE `attendances`
  ADD CONSTRAINT `attendances_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

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
-- Constraints for table `purchases`
--
ALTER TABLE `purchases`
  ADD CONSTRAINT `purchases_supplier_id_foreign` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `salaries`
--
ALTER TABLE `salaries`
  ADD CONSTRAINT `salaries_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
