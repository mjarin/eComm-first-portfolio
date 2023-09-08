-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2022 at 09:10 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecomm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `role_as`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Naznin Nahar', 'admin@gmail.com', '2022-03-24 10:21:40', '$2y$10$LqN9TAR1KScikv73ouIkcuivFmxBdwKOQB57GZLfNwHreoG6ZB.9a', '0174526987', 1, NULL, '2022-03-21 04:18:05', '2022-03-21 04:18:05');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_id` int(191) NOT NULL,
  `prod_qty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `popular` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keywords` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `status`, `popular`, `image`, `meta_title`, `meta_description`, `meta_keywords`, `created_at`, `updated_at`) VALUES
(15, 'Women Clothing & Fashion', 'women', 'women clothing & fashion', '1', '1', '1645867379.jpg', 'women clothing & fashion', 'women clothing & fashion', 'women clothing & fashion', '2022-02-26 03:22:59', '2022-02-26 03:22:59'),
(16, 'Men\'s Clothing & Fashion', 'men', 'men clothing & fashion', '1', '1', '1645867427.jpg', 'men clothing & fashion', 'men clothing & fashion', 'men clothing & fashion', '2022-02-26 03:23:47', '2022-02-26 03:23:47'),
(21, 'Electronics', 'electronics', 'electronics', '1', '1', '1645869247.PNG', 'electronics', 'electronics', 'electronics', '2022-02-26 03:54:07', '2022-02-26 03:54:07'),
(23, 'Home & Lifestyle', 'home', 'home & lifestyle', '1', '1', '1646113443.jpg', 'home & lifestyle', 'home & lifestyle', 'home & lifestyle', '2022-02-28 23:44:03', '2022-02-28 23:44:03'),
(24, 'Watches & Accessories', 'watch', 'watches & accessories', '1', '0', '1648101152.jpg', 'watches & accessories', 'watches & accessories', 'watches & accessories', '2022-03-01 00:27:52', '2022-03-23 23:52:32'),
(25, 'Health & Beauty', 'health & beauty', 'Health and beauty', '1', '0', '1648101821.jpg', 'health & beauty', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'health & beauty', '2022-03-24 00:03:41', '2022-03-24 00:03:41'),
(26, 'Babies & Toys', 'babies & toyes', 'Baby toys', '1', '0', '1648102576.jpg', 'babies & toyes', 'babies & toyes', 'babies & toyes', '2022-03-24 00:16:16', '2022-03-24 00:16:16');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_02_06_112108_create_products_table', 1),
(6, '2022_02_10_064527_create_cart_table', 1),
(7, '2022_02_14_100336_create_order_table', 1),
(8, '2022_02_16_064428_create_orders_table', 2),
(9, '2022_02_24_065322_create_categories_table', 3),
(10, '2022_02_27_045954_create_products_table', 4),
(11, '2022_03_02_060240_create_carts_table', 5),
(12, '2022_03_05_094517_create_orders_table', 6),
(13, '2022_03_05_095825_create_order_items_table', 6),
(14, '2022_03_13_101548_create_wishlists_table', 7),
(15, '2022_03_20_054729_create_admins_table', 8),
(16, '2022_03_28_103501_create_sub_categories_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pincode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_mode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `transaction_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tracking_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `fname`, `lname`, `email`, `phone`, `address`, `address1`, `address2`, `city`, `state`, `country`, `pincode`, `total_price`, `amount`, `payment_mode`, `payment_id`, `status`, `transaction_id`, `currency`, `message`, `tracking_no`, `created_at`, `updated_at`) VALUES
(61, '2', NULL, 'Naznin', 'Nahar', 'demo2@gmail.com', '012364587', NULL, 'abc, xyz', 'xyz', 'cccc', 'ssss', 'Bangladesh', '1205', '105650', NULL, 'COD', NULL, 1, NULL, NULL, NULL, '1493', '2022-04-07 00:24:41', '2022-04-07 00:25:32');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `prod_id`, `qty`, `unit_price`, `created_at`, `updated_at`) VALUES
(17, '10', '5', '2', '1000', '2022-03-06 00:12:57', '2022-03-06 00:12:57'),
(21, '18', '8', '2', '24500', '2022-03-07 01:21:13', '2022-03-07 01:21:13'),
(22, '18', '3', '1', '1150', '2022-03-07 01:21:13', '2022-03-07 01:21:13'),
(23, '19', '5', '1', '1000', '2022-03-12 03:12:00', '2022-03-12 03:12:00'),
(24, '19', '6', '2', '1200', '2022-03-12 03:12:00', '2022-03-12 03:12:00'),
(25, '20', '5', '1', '1000', '2022-03-16 00:49:12', '2022-03-16 00:49:12'),
(26, '20', '6', '2', '1200', '2022-03-16 00:49:12', '2022-03-16 00:49:12'),
(27, '21', '8', '2', '24500', '2022-03-16 01:21:17', '2022-03-16 01:21:17'),
(28, '22', '3', '2', '1150', '2022-03-16 02:19:35', '2022-03-16 02:19:35'),
(29, '23', '6', '1', '1200', '2022-03-17 03:16:28', '2022-03-17 03:16:28'),
(30, '23', '5', '1', '1000', '2022-03-17 03:16:29', '2022-03-17 03:16:29'),
(31, '23', '7', '1', '78890', '2022-03-17 03:16:29', '2022-03-17 03:16:29'),
(32, '23', '2', '1', '1150', '2022-03-17 03:16:29', '2022-03-17 03:16:29'),
(33, '24', '3', '1', '1150', '2022-03-17 03:25:57', '2022-03-17 03:25:57'),
(34, '25', '5', '1', '1000', '2022-03-17 03:31:42', '2022-03-17 03:31:42'),
(35, '26', '8', '1', '24500', '2022-03-17 03:33:28', '2022-03-17 03:33:28'),
(36, '27', '7', '1', '78890', '2022-03-17 03:50:34', '2022-03-17 03:50:34'),
(37, '27', '8', '2', '24500', '2022-03-17 03:50:34', '2022-03-17 03:50:34'),
(38, '28', '7', '1', '78890', '2022-03-22 04:07:31', '2022-03-22 04:07:31'),
(39, '28', '8', '2', '24500', '2022-03-22 04:07:31', '2022-03-22 04:07:31'),
(40, '29', '6', '1', '1200', '2022-03-22 04:17:55', '2022-03-22 04:17:55'),
(41, '30', '6', '1', '1200', '2022-03-23 03:17:22', '2022-03-23 03:17:22'),
(42, '30', '5', '1', '1000', '2022-03-23 03:17:23', '2022-03-23 03:17:23'),
(43, '31', '3', '1', '1150', '2022-03-24 03:22:01', '2022-03-24 03:22:01'),
(44, '32', '3', '1', '1150', '2022-03-24 05:27:45', '2022-03-24 05:27:45'),
(45, '33', '3', '2', '1150', '2022-03-24 05:32:31', '2022-03-24 05:32:31'),
(46, '34', '3', '2', '1150', '2022-03-30 23:22:28', '2022-03-30 23:22:28'),
(47, '35', '10', '1', '25220', '2022-03-31 00:10:57', '2022-03-31 00:10:57'),
(48, '36', '3', '2', '1150', '2022-03-31 00:15:28', '2022-03-31 00:15:28'),
(49, '37', '3', '2', '1150', '2022-03-31 00:19:05', '2022-03-31 00:19:05'),
(50, '37', '8', '1', '24500', '2022-03-31 00:19:05', '2022-03-31 00:19:05'),
(51, '38', '3', '3', '1150', '2022-03-31 00:25:51', '2022-03-31 00:25:51'),
(52, '39', '10', '1', '25220', '2022-03-31 00:32:51', '2022-03-31 00:32:51'),
(53, '40', '9', '1', '549900', '2022-03-31 01:20:56', '2022-03-31 01:20:56'),
(54, '40', '10', '1', '25220', '2022-03-31 01:20:56', '2022-03-31 01:20:56'),
(55, '40', '3', '2', '1150', '2022-03-31 01:20:56', '2022-03-31 01:20:56'),
(56, '40', '8', '1', '24500', '2022-03-31 01:20:56', '2022-03-31 01:20:56'),
(57, '41', '10', '2', '25220', '2022-03-31 02:52:29', '2022-03-31 02:52:29'),
(58, '42', '3', '1', '1150', '2022-03-31 05:30:59', '2022-03-31 05:30:59'),
(59, '43', '9', '1', '549900', '2022-04-01 23:03:33', '2022-04-01 23:03:33'),
(60, '44', '8', '1', '24500', '2022-04-02 02:36:58', '2022-04-02 02:36:58'),
(61, '45', '3', '1', '1150', '2022-04-04 02:27:45', '2022-04-04 02:27:45'),
(62, '46', '3', '1', '1150', '2022-04-04 02:33:32', '2022-04-04 02:33:32'),
(63, '47', '3', '1', '1150', '2022-04-04 02:34:18', '2022-04-04 02:34:18'),
(64, '48', '3', '1', '1150', '2022-04-04 02:53:30', '2022-04-04 02:53:30'),
(65, '49', '10', '1', '25220', '2022-04-04 02:58:15', '2022-04-04 02:58:15'),
(66, '50', '3', '2', '1150', '2022-04-04 23:49:31', '2022-04-04 23:49:31'),
(67, '50', '32', '2', '950', '2022-04-04 23:49:31', '2022-04-04 23:49:31'),
(68, '50', '34', '2', '2350', '2022-04-04 23:49:31', '2022-04-04 23:49:31'),
(69, '51', '34', '2', '2350', '2022-04-05 00:26:30', '2022-04-05 00:26:30'),
(70, '52', '40', '5', '750', '2022-04-05 02:07:33', '2022-04-05 02:07:33'),
(71, '53', '35', '3', '2650', '2022-04-05 03:38:06', '2022-04-05 03:38:06'),
(72, '54', '32', '2', '950', '2022-04-05 22:23:01', '2022-04-05 22:23:01'),
(73, '54', '33', '4', '980', '2022-04-05 22:23:01', '2022-04-05 22:23:01'),
(74, '55', '9', '3', '549900', '2022-04-05 23:07:06', '2022-04-05 23:07:06'),
(75, '56', '3', '3', '1150', '2022-04-05 23:07:58', '2022-04-05 23:07:58'),
(76, '57', '40', '3', '750', '2022-04-05 23:08:58', '2022-04-05 23:08:58'),
(77, '58', '34', '3', '2350', '2022-04-05 23:10:36', '2022-04-05 23:10:36'),
(78, '59', '8', '2', '24500', '2022-04-05 23:26:04', '2022-04-05 23:26:04'),
(79, '61', '4', '3', '1800', '2022-04-07 00:24:41', '2022-04-07 00:24:41'),
(80, '61', '40', '3', '750', '2022-04-07 00:24:42', '2022-04-07 00:24:42'),
(81, '61', '8', '4', '24500', '2022-04-07 00:24:42', '2022-04-07 00:24:42');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cate_id` bigint(20) NOT NULL,
  `sub_cate_id` int(191) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `small_description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `original_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selling_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` int(191) NOT NULL,
  `tax` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trending` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `cate_id`, `sub_cate_id`, `name`, `slug`, `small_description`, `description`, `original_price`, `selling_price`, `image`, `qty`, `tax`, `status`, `trending`, `meta_title`, `meta_keyword`, `meta_description`, `created_at`, `updated_at`) VALUES
(2, 15, 5, 'Salwar Kameez', 'salwar kameez', 'Salwar Kameez.', 'Salwar Kameez', '1200', '1150', '1645954524.jpg', 1, '20', '1', '1', 'Salwar Kameez', NULL, 'Salwar Kameez', '2022-02-27 03:35:24', '2022-03-17 03:16:29'),
(3, 16, 3, 'Shirt1', 'shirt for men', 'Shirt for men.', 'shirt for men,shirt for men', '1500', '1150', '1645954711.jpg', 21, '20', '1', '1', 'shirt for men', NULL, 'shirt for men', '2022-02-27 03:38:31', '2022-04-05 23:07:58'),
(4, 16, 4, 'T-Shirt1', 't-shirt for men', 't-shirt for men.', 'Awesome t-shirt for men !', '1950', '1800', '1645954796.jpeg', 7, '20', '1', '1', 't-shirt for men', NULL, 't-shirt for men', '2022-02-27 03:39:56', '2022-04-07 00:24:41'),
(7, 21, 15, 'Freeze1', 'freeze', 'Freeze', 'freezefreeze', '80000', '78890', '1645958564.PNG', 22, '500', '1', '1', 'freeze', NULL, 'freeze', '2022-02-27 04:42:44', '2022-03-22 04:07:31'),
(8, 21, 11, 'Oppo Pro 7', 'opp', 'Oppo Pro 7', 'Oppo Pro 7', '25000', '24500', '1646128297.jpg', 12, '200', '1', '1', 'Oppo Pro 7', 'Oppo Pro 7', 'Oppo Pro 7', '2022-03-01 03:51:37', '2022-04-07 00:24:42'),
(9, 23, 14, 'Sofa Set1', 'home-entertainment-system', ' Home Entertainment System.Details mean everything. So we compromised on nothing.', 'Beauty’s in the eye—and ear—of the beholder. So we designed the Lifestyle 650 home entertainment system to be beautiful in every way. Acoustics. Aesthetics. Craftsmanship. Simplicity. For your movies and music, it’s the most uncompromising 5-speaker home theater system we’ve ever made.', '549990', '549900', '1646216817.png', 10, '250', NULL, NULL, 'bose-ifestyle650-home-entertainment-system', 'bose-ifestyle650-home-entertainment-system', 'bose-ifestyle650-home-entertainment-system', '2022-03-02 04:26:57', '2022-04-05 23:07:06'),
(10, 21, 11, 'Samsung Galaxy Phone', 'samsung phones', 'samsung.', 'phonessamsung', '25520', '25220', '1648115050.webp', 9, '10', NULL, NULL, 'samsung phones', 'samsung phones', 'samsung phones', '2022-03-24 03:44:10', '2022-04-04 02:58:15'),
(32, 26, 6, 'Baby  Frock Red', 'baby-frock-red', 'Baby  Frock Red', 'Baby  Frock Red', '1000', '950', '1648976983.jpg', 0, '1', '1', '1', 'Baby  Frock Red', 'Baby  Frock Red', 'Baby  Frock Red', '2022-04-03 03:09:43', '2022-04-05 22:23:01'),
(33, 26, 6, 'Baby Frock Black', 'baby-frock-black', 'baby-frock', 'baby-frock', '1000', '980', '1648977123.jpg', 16, '10', '1', '1', 'baby-frock', 'baby-frock', 'baby-frock', '2022-04-03 03:12:03', '2022-04-05 22:23:01'),
(34, 15, 2, 'Saree Black', 'saree-black', 'Saree Black', 'Saree Black', '2500', '2350', '1649048806.jpg', 38, '1', '1', '1', 'Saree Black', 'Saree Black', 'Saree Black', '2022-04-03 23:06:46', '2022-04-05 23:10:36'),
(35, 15, 2, 'Saree2', 'saree2', 'Saree2', 'Saree2', '2800', '2650', '1649048880.jpg', 23, '20', '1', '1', 'Saree2', 'Saree2', 'Saree2', '2022-04-03 23:08:00', '2022-04-05 03:38:06'),
(36, 15, 2, 'Saree3', 'saree3', 'Saree3', 'Saree3', '2750', '2650', '1649049042.jpg', 24, '10', '1', '1', 'Saree3', 'Saree3', 'Saree3', '2022-04-03 23:10:42', '2022-04-03 23:10:42'),
(37, 15, 13, 'Tops1', 'tops1', 'Tops1', 'Tops1', '750', '650', '1649049707.jpg', 20, '1', '1', '1', 'Tops1', 'Tops1', 'Tops1', '2022-04-03 23:21:48', '2022-04-03 23:21:48'),
(38, 15, 13, 'Tops2', 'tops2', 'Tops2', 'Tops2', '850', '750', '1649051103.jpg', 23, '1', '1', '1', 'Tops2', 'Tops2', 'Tops2', '2022-04-03 23:45:03', '2022-04-03 23:45:03'),
(39, 15, 13, 'Tops3', 'tops3', 'Tops3', 'Tops3', '800', '750', '1649051155.jpg', 25, '1', '1', '1', 'Tops3', 'Tops3', 'Tops3', '2022-04-03 23:45:55', '2022-04-03 23:45:55'),
(40, 15, 13, 'Tops4', 'tops4', 'Tops4', 'Tops4', '850', '750', '1649051248.jpg', 13, '1', '1', '1', 'Tops4', 'Tops4', 'Tops4', '2022-04-03 23:47:28', '2022-04-07 00:24:42'),
(41, 25, NULL, 'Bullet Matte Lipstick', 'bullet-matte-lipstick', 'Bullet Matte Lipstick', 'Bullet Matte Lipstick', '1200', '1050', '1649317054.webp', 25, '12', '1', '1', 'Bullet Matte Lipstick', 'Bullet Matte Lipstick', 'Bullet Matte Lipstick', '2022-04-07 01:37:34', '2022-04-07 01:37:34'),
(42, 25, NULL, 'Liquid Matte Lipstick - 02', 'liquid-matte-lipstick - 02', 'Liquid Matte Lipstick - 02', 'Liquid Matte Lipstick - 02', '550', '450', '1649317228.webp', 26, '13', '1', '1', 'Liquid Matte Lipstick - 02', 'Liquid Matte Lipstick - 02', 'Liquid Matte Lipstick - 02', '2022-04-07 01:40:28', '2022-04-07 01:40:28'),
(43, 25, NULL, 'Health and Beauty Products03', 'health and beauty products03', 'Health and Beauty Products03', 'Health and Beauty Products03', '2500', '2010', '1649317422.webp', 41, '20', '1', '1', 'Health and Beauty Products03', 'Health and Beauty Products03', 'Health and Beauty Products03', '2022-04-07 01:43:42', '2022-04-07 01:43:42'),
(44, 25, NULL, 'Natural cosmetics', 'natural-cosmetics', 'Natural cosmetics', 'Natural cosmetics', '2150', '2100', '1649317607.jpg', 43, '12', '1', '1', 'Natural cosmetics', 'Natural cosmetics', 'Natural cosmetics', '2022-04-07 01:46:47', '2022-04-07 01:46:47'),
(45, 24, NULL, 'Watch1', 'watch1', 'Watch1', 'Watch1', '750', '550', '1649318964.jpg', 21, '11', '1', '1', 'Watch1', 'Watch1', 'Watch1', '2022-04-07 02:09:24', '2022-04-07 02:09:24'),
(46, 24, NULL, 'Watch2', 'watch2', 'Watch2', 'Watch2', '1200', '1000', '1649319030.jpg', 29, '1', '1', '1', 'Watch2', 'Watch2', 'Watch2', '2022-04-07 02:10:30', '2022-04-07 02:10:30'),
(47, 24, NULL, 'Wallet', 'wallet', 'Wallet', 'Wallet', '850', '500', '1649319125.jpg', 32, '1', '1', '1', 'Wallet', 'Wallet', 'Wallet', '2022-04-07 02:12:05', '2022-04-07 02:12:05'),
(48, 24, NULL, 'Watch3', 'watch3', 'Watch3', 'Watch3', '1200', '850', '1649319208.jpg', 11, '1', '1', '1', 'Watch3', 'Watch3', 'Watch3', '2022-04-07 02:13:28', '2022-04-07 02:13:28');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cate_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `cate_id`, `name`, `slug`, `description`, `status`, `created_at`, `updated_at`) VALUES
(2, 15, 'Saree', 'saree', 'Saree ', '1', '2022-03-28 23:27:06', '2022-03-29 04:42:13'),
(3, 16, 'Shirt for Men', 'shirt for men', 'shirt', '1', '2022-03-28 23:30:50', '2022-03-29 04:03:14'),
(4, 16, 'T-shirt for Men', 't-shirt for men', 't-shirt for men', '1', '2022-03-28 23:35:02', '2022-03-29 03:58:44'),
(5, 15, 'Salwar Kameez', 'salwar kameez', 'Salwar Kameez', '1', '2022-03-28 23:37:53', '2022-03-28 23:37:53'),
(6, 26, 'Baby Frock', 'faby frock', 'baby frock', '1', '2022-03-28 23:38:33', '2022-03-28 23:38:33'),
(7, 26, 'Baby Toy', 'baby toy', 'Baby Toy', '1', '2022-03-28 23:39:10', '2022-03-28 23:39:10'),
(9, 24, 'Watches', 'watches', 'Watches', '1', '2022-03-28 23:41:31', '2022-03-28 23:41:31'),
(10, 25, 'Lipsticks', 'lipsticks', 'Lipsticks', '1', '2022-03-28 23:43:43', '2022-03-29 04:41:45'),
(11, 21, 'Mobile phone', 'mobile', 'Mobile phone', '1', '2022-03-29 04:49:54', '2022-03-29 04:49:54'),
(13, 15, 'Tops', 'tops', 'Tops', '1', '2022-04-05 03:07:55', '2022-04-05 03:07:55'),
(14, 23, 'Furniture', 'furniture', 'Furniture', '1', '2022-04-05 03:14:19', '2022-04-05 03:14:19'),
(15, 21, 'Refrigerator & Freezer', 'refrigerator & freezer', 'Refrigerator & Freezer', '1', '2022-04-05 03:16:57', '2022-04-05 03:16:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pincode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `lname`, `phone`, `address1`, `address2`, `city`, `state`, `country`, `pincode`, `role_as`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Naznin', 'demo2@gmail.com', NULL, '$2y$10$QoP732mcXx3zqao/pnxjGO0foGSMtoG6qAkWgmPWl44m0UQ2jhAO2', 'Nahar', '012364587', 'abc, xyz', 'xyz', 'cccc', 'ssss', 'Bangladesh', '1205', 0, NULL, NULL, '2022-03-05 23:37:18'),
(11, 'user1', 'user1@gmail.com', NULL, '$2y$10$zc0W2zR12uyu9fyNWhIItuNpTv4Gz2TcGJ0VhKJE9qz5kb3UInOq2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-03-22 04:43:08', '2022-03-22 04:43:08');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_categories_cate_id_foreign` (`cate_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=221;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_cate_id_foreign` FOREIGN KEY (`cate_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
