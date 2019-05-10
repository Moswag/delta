-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 29, 2019 at 08:23 AM
-- Server version: 10.0.35-MariaDB
-- PHP Version: 7.2.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `delta`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonenumber` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `national_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `surname`, `phonenumber`, `national_id`, `address`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Webster', 'Moswa', '0771407147', '2020', '1450 Woodlands park', '12345678', '2019-04-27 10:02:12', '2019-04-27 10:02:12'),
(2, 'Portia', 'Moswa', '0772590173', '2010', '1450 Woodlands', '12345678', '2019-04-27 10:37:00', '2019-04-27 10:37:00'),
(3, 'Popo', 'Moswa', '0712590173', '24567', '1234 Woodlands Park', '12345678', '2019-04-27 10:39:50', '2019-04-27 10:39:50'),
(4, 'Shiggy', 'Moswa', '0712590170', '24567', '1234 Woodlands Park', '12345678', '2019-04-27 10:39:50', '2019-04-27 10:39:50'),
(5, 'Alex', 'Moswa', '07126789', '24567', '1234 Woodlands Park', '12345678', '2019-04-27 10:39:50', '2019-04-27 10:39:50'),
(6, 'Alice', 'Moswa', '0712590177', '24567', '1234 Woodlands Park', '12345678', '2019-04-27 10:39:50', '2019-04-27 10:39:50'),
(7, 'simba', 'machaks', '0782686331', '2956778874006', 'senga 4', '12345', '2019-04-29 06:01:26', '2019-04-29 06:01:26'),
(8, 'blessing', 'matere', '0775200385', '75424963e50', '3862 mutare', 'Ldiesman217', '2019-04-29 06:02:51', '2019-04-29 06:02:51');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_04_26_084817_create_clients_table', 1),
(4, '2019_04_26_084935_create_products_table', 1),
(5, '2019_04_26_084943_create_points_table', 1),
(6, '2019_04_26_084956_create_tokens_table', 1),
(7, '2019_04_26_085015_create_sales_table', 1),
(8, '2019_04_26_091607_create_winner_prices_table', 1),
(9, '2019_04_26_092203_create_promotions_table', 1),
(10, '2019_04_26_092421_create_winners_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `employee_id` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `points`
--

CREATE TABLE `points` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `points` int(11) NOT NULL,
  `promotion_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `promotion_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Black Label', 'A champion men deserves a champion beer', '5', '2019-04-26 12:45:40', '2019-04-27 03:06:44'),
(2, 'Coke Drinks', 'Drinks for refreshment', '3', '2019-04-27 02:57:34', '2019-04-27 02:57:34'),
(3, 'maheu', 'masuper', '20', '2019-04-29 05:47:23', '2019-04-29 05:47:23');

-- --------------------------------------------------------

--
-- Table structure for table `promotions`
--

CREATE TABLE `promotions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `promotion_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_of_winners` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `amount_for_point` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `receipt_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `has_token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `receipt_number`, `order`, `amount`, `has_token`, `created_at`, `updated_at`) VALUES
(8, '18467770', 'Black Label 5,Coke Drinks 3', '76', 'true', '2019-04-27 05:53:50', '2019-04-27 05:53:50'),
(9, '67839603', 'Black Label 5', '900', 'true', '2019-04-27 06:51:53', '2019-04-27 06:51:53'),
(10, '66382909', 'Black Label 5', '200', 'true', '2019-04-27 06:54:13', '2019-04-27 06:54:13'),
(11, '88006141', 'Coke Drinks 3', '300', 'true', '2019-04-27 06:57:12', '2019-04-27 06:57:12'),
(12, '87597136', 'Black Label 5,Coke Drinks 3', '860', 'true', '2019-04-27 13:34:42', '2019-04-27 13:34:42'),
(13, '34289797', 'Black Label 5', '20', 'false', '2019-04-27 13:38:23', '2019-04-27 13:38:23'),
(14, '63809710', 'maheu 20', '40', 'true', '2019-04-29 05:52:02', '2019-04-29 05:52:02'),
(15, '96612239', 'maheu 20', '200', 'true', '2019-04-29 05:53:24', '2019-04-29 05:53:24');

-- --------------------------------------------------------

--
-- Table structure for table `tokens`
--

CREATE TABLE `tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `token_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `promotion_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `points` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receipt_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tokens`
--

INSERT INTO `tokens` (`id`, `token_id`, `promotion_name`, `points`, `receipt_number`, `status`, `created_at`, `updated_at`) VALUES
(1, '73018188', 'Grand Challenge', '4', '66382909', 'used', '2019-04-27 06:54:13', '2019-04-27 10:56:13'),
(2, '59433877', 'Grand Challenge', '6', '88006141', 'used', '2019-04-27 06:57:12', '2019-04-27 10:10:50'),
(3, '25733371', 'Grand Challenge', '17.2', '87597136', 'unused', '2019-04-27 13:34:43', '2019-04-27 13:34:43'),
(4, '93385576', 'Mondy', '8', '63809710', 'unused', '2019-04-29 05:52:02', '2019-04-29 05:52:02'),
(5, '58037423', 'Mondy', '40', '96612239', 'used', '2019-04-29 05:53:24', '2019-04-29 06:03:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `national_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_id` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `national_id`, `employee_id`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Alvin', 'Changara', '292929', '3030', 't@g.com', NULL, '$2y$10$uG0NuYmWT537Rvlrnj6Sc.glSYpB05YngllIKC7oou6jEuZQ18xkK', NULL, '2019-04-27 02:56:05', '2019-04-27 02:56:05'),
(4, 'Takunda', 'Makotore', '2345678', '162248', 'bmakotore@gmail.com', NULL, '$2y$10$9D62dXk2RPUHmlzHjOioeOuGkb19OeMYOjcPTNWwTc4e5DJ9Xbgxe', NULL, '2019-04-29 06:06:29', '2019-04-29 06:06:29');

-- --------------------------------------------------------

--
-- Table structure for table `winners`
--

CREATE TABLE `winners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `national_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `promotion_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `winner_prices`
--

CREATE TABLE `winner_prices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `promotion_id` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `promotion_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `winner_number` int(11) NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `winner_prices`
--

INSERT INTO `winner_prices` (`id`, `promotion_id`, `promotion_name`, `winner_number`, `price`, `created_at`, `updated_at`) VALUES
(1, '3', 'Grand Challenge', 5, '800', '2019-04-27 07:20:17', '2019-04-27 07:20:17'),
(2, '3', 'Grand Challenge', 3, '23', '2019-04-27 07:24:12', '2019-04-27 07:24:12'),
(3, '3', 'Grand Challenge', 7, '700', '2019-04-27 07:27:59', '2019-04-27 07:27:59'),
(4, '3', 'Grand Challenge', 1, '200', '2019-04-29 05:49:40', '2019-04-29 05:49:40'),
(5, '4', 'Mondy', 1, '566', '2019-04-29 05:50:47', '2019-04-29 05:50:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `clients_phonenumber_unique` (`phonenumber`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_employee_id_index` (`employee_id`);

--
-- Indexes for table `points`
--
ALTER TABLE `points`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promotions`
--
ALTER TABLE `promotions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_employee_id_unique` (`employee_id`);

--
-- Indexes for table `winners`
--
ALTER TABLE `winners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `winner_prices`
--
ALTER TABLE `winner_prices`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `points`
--
ALTER TABLE `points`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `promotions`
--
ALTER TABLE `promotions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `winners`
--
ALTER TABLE `winners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `winner_prices`
--
ALTER TABLE `winner_prices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
