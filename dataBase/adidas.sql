-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2025 at 09:50 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adidas`
--

-- --------------------------------------------------------

--
-- Table structure for table `advert_main`
--

CREATE TABLE `advert_main` (
  `id` int(3) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `body` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 10,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `advert_main`
--

INSERT INTO `advert_main` (`id`, `title`, `price`, `body`, `path`, `status`, `created_at`, `updated_at`) VALUES
(8, 'test', 23, '32', '/adidas/src/img/advertMain/2025_06_03_19_09_41.avif', 10, '2025-06-03 20:39:41', NULL),
(9, 'Performance', 90, 'Arsenal ADIDAS Z.N.E Anthem Jacket Kids', '/adidas/src/img/advertMain/2025_06_03_19_14_14.avif', 10, '2025-06-03 20:44:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `background`
--

CREATE TABLE `background` (
  `id` int(3) NOT NULL,
  `title` varchar(100) NOT NULL,
  `path` varchar(255) NOT NULL,
  `body` varchar(255) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `background`
--

INSERT INTO `background` (`id`, `title`, `path`, `body`, `caption`, `link`, `status`, `created_at`, `updated_at`) VALUES
(4, 'SPORTS', '/adidas/src/img/background/2025_06_05_21_27_34.avif', 'Fell fast. In all aspects of life.', 'ADIZERO EVO SL', 'SHOP MEN,SHOP WOMEN, SHOW BOYS', 10, '2025-06-05 22:52:04', '2025-06-05 22:59:53');

-- --------------------------------------------------------

--
-- Table structure for table `board_black`
--

CREATE TABLE `board_black` (
  `id` int(3) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` varchar(1000) NOT NULL,
  `caption` varchar(1000) NOT NULL,
  `icon` varchar(200) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `board_black`
--

INSERT INTO `board_black` (`id`, `title`, `body`, `caption`, `icon`, `status`, `created_at`, `updated_at`) VALUES
(8, 'Sneakers, Activewear and Sporting Goods', 'Founded on performance, adidas sporting goods equipment supports athletes at all levels. Men, women and kids will find their best form in sneakers and activewear made to perform under pressure. adidas sportswear breathes, manages sweat and helps support working muscles. Explore sport-specific clothes and gear for basketball, soccer, or the yoga studio. Runners will find a range of sneakers for training, racing and trail runs. Gym users will find tops, tees and tanks that support focused efforts with adidas CLIMACOOL to feel cool and dry. Explore warm-ups featuring four-way stretch to support mobility. Find a new outdoor jacket that helps protect against wind and rain. Lace up new athletic shoes that energize every step with adidas Boost cushioning. With sizes and styles for all ages, we have sporting goods for the whole family. Dedicated training demands dedicated workout clothes. Experience the latest performance fabrics and sneaker technologies to get the most out of your next traini', 'Calling all athletes. Gear up for your favorite sport with adidas sneakers and activewear for men and women. From running to soccer and the gym to the trail, performance workout clothes and shoes keep you feeling your best. Find sport-specific sneakers to support your passion, and shop versatile activewear and accessories that support everyday comfort. adidas has you covered with world-class performance, quality and unmatched comfort to fit your style. Explore the full range of adidas gear today.', 'bi bi-brilliance', 10, '2025-06-04 22:59:04', '2025-06-04 23:08:58');

-- --------------------------------------------------------

--
-- Table structure for table `footer_column`
--

CREATE TABLE `footer_column` (
  `id` int(3) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `footer_column`
--

INSERT INTO `footer_column` (`id`, `title`, `category`, `status`, `created_at`, `updated_at`) VALUES
(1, 'column Left', 'Help', 10, '2025-06-05 19:10:43', '2025-06-05 20:55:28'),
(2, 'column Right', ' adiClub', 10, '2025-06-05 19:10:43', '2025-06-05 20:55:38'),
(5, 'column Left', 'Returns & Exchanges', 10, '2025-06-05 20:55:46', NULL),
(6, 'column Right', 'Store Finder', 10, '2025-06-05 20:55:50', NULL),
(7, 'column Left', 'Order Tracker', 10, '2025-06-05 20:55:58', NULL),
(8, 'column Right', 'Gift Cards', 10, '2025-06-05 20:56:18', NULL),
(9, 'column Left', 'Shipping', 10, '2025-06-05 20:56:30', NULL),
(10, 'column Right', 'adidas Apps', 10, '2025-06-05 20:56:36', NULL),
(11, 'column Left', 'Promotions', 10, '2025-06-05 20:56:57', NULL),
(12, 'column Right', 'Size Charts', 10, '2025-06-05 20:57:06', NULL),
(13, 'column Left', 'Sitemap', 10, '2025-06-05 20:57:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE `header` (
  `id` int(3) NOT NULL,
  `title` varchar(150) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `header`
--

INSERT INTO `header` (`id`, `title`, `status`, `created_at`, `updated_at`) VALUES
(8, 'MEN', 10, '2025-06-01 23:52:09', NULL),
(9, 'WOMEN', 10, '2025-06-01 23:52:14', NULL),
(10, 'KIDS', 10, '2025-06-01 23:52:18', NULL),
(11, 'SALE', 10, '2025-06-01 23:52:21', NULL),
(12, 'NEW & TRENDING', 10, '2025-06-01 23:52:26', '2025-06-01 23:52:37');

-- --------------------------------------------------------

--
-- Table structure for table `item_header`
--

CREATE TABLE `item_header` (
  `id` int(3) NOT NULL,
  `title` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `item_header`
--

INSERT INTO `item_header` (`id`, `title`, `status`, `created_at`, `updated_at`) VALUES
(4, 'help', 10, '2025-06-05 21:54:57', '2025-06-05 22:04:06'),
(5, 'orders and returns', 10, '2025-06-05 22:04:17', NULL),
(6, 'gift cards', 10, '2025-06-05 22:04:27', NULL),
(7, 'join adiClud', 10, '2025-06-05 22:04:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `megamenu_footer`
--

CREATE TABLE `megamenu_footer` (
  `id` int(3) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 10,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `megamenu_footer`
--

INSERT INTO `megamenu_footer` (`id`, `title`, `category`, `status`, `created_at`, `updated_at`) VALUES
(1, 'PRODUCTS', 'Shoes', 10, '2025-06-04 22:13:26', '2025-06-04 23:55:20'),
(2, 'PRODUCTS', 'Clothing', 10, '2025-06-04 22:13:26', '2025-06-04 23:55:28'),
(3, 'PRODUCTS', 'Accessories', 10, '2025-06-04 23:45:37', '2025-06-04 23:55:37'),
(6, 'PRODUCTS', 'Gift Cards', 10, '2025-06-04 23:55:48', NULL),
(7, 'PRODUCTS', 'New Arrivals', 10, '2025-06-04 23:55:56', NULL),
(8, 'PRODUCTS', 'Best Sellers', 10, '2025-06-04 23:56:06', NULL),
(9, 'PRODUCTS', 'Release Dates', 10, '2025-06-04 23:56:14', NULL),
(10, 'PRODUCTS', 'Sale', 10, '2025-06-04 23:56:20', NULL),
(11, 'Sports', 'Soccer', 10, '2025-06-04 23:56:34', '2025-06-04 23:56:42'),
(12, 'Sports', 'Running', 10, '2025-06-04 23:56:50', NULL),
(13, 'Sports', 'Basketball', 10, '2025-06-04 23:57:00', NULL),
(14, 'Sports', 'Football', 10, '2025-06-04 23:57:09', NULL),
(15, 'Sports', 'Outdoor', 10, '2025-06-04 23:58:03', '2025-06-04 23:58:10'),
(16, 'Sports', 'Golf', 10, '2025-06-04 23:58:15', NULL),
(17, 'Sports', 'Baseball', 10, '2025-06-04 23:58:21', NULL),
(18, 'Sports', 'Tennis', 10, '2025-06-04 23:58:27', NULL),
(19, 'Sports', 'Skateboarding', 10, '2025-06-04 23:58:33', NULL),
(20, 'Sports', 'Training', 10, '2025-06-04 23:58:38', NULL),
(21, 'Collections', 'adicolor', 10, '2025-06-04 23:58:58', NULL),
(22, 'Collections', 'Ultraboost', 10, '2025-06-04 23:59:07', NULL),
(23, 'Collections', 'Forum', 10, '2025-06-04 23:59:14', NULL),
(24, 'Collections', 'Superstar', 10, '2025-06-04 23:59:23', NULL),
(25, 'Collections', 'Running Shoes', 10, '2025-06-04 23:59:30', NULL),
(26, 'Collections', 'adilette', 10, '2025-06-04 23:59:38', NULL),
(27, 'Collections', 'Stan Smith', 10, '2025-06-04 23:59:52', NULL),
(28, 'Collections', 'adizero', 10, '2025-06-05 00:00:01', NULL),
(29, 'Collections', 'Tiro', 10, '2025-06-05 00:00:12', NULL),
(30, 'Collections', 'Cloudfoam Pure', 10, '2025-06-05 00:00:28', NULL),
(31, 'SUPPORT', 'Help', 10, '2025-06-05 00:01:05', NULL),
(32, 'SUPPORT', 'Returns & Exchanges', 10, '2025-06-05 00:01:17', NULL),
(33, 'SUPPORT', 'Shipping', 10, '2025-06-05 00:01:30', NULL),
(34, 'SUPPORT', 'Order Tracker', 10, '2025-06-05 00:01:41', NULL),
(35, 'SUPPORT', 'Store Locator', 10, '2025-06-05 00:01:52', NULL),
(36, 'SUPPORT', 'Size Charts', 10, '2025-06-05 00:02:04', NULL),
(37, 'SUPPORT', 'Gift Card Balance', 10, '2025-06-05 00:02:23', NULL),
(38, 'SUPPORT', 'How to Clean Shoes', 10, '2025-06-05 00:02:39', NULL),
(39, 'SUPPORT', 'Bra Fit Guide', 10, '2025-06-05 00:02:50', NULL),
(40, 'SUPPORT', 'Breathing for Running', 10, '2025-06-05 00:03:02', NULL),
(41, 'SUPPORT', 'Promotions', 10, '2025-06-05 00:03:13', NULL),
(42, 'SUPPORT', 'Sitemap', 10, '2025-06-05 00:03:23', NULL),
(43, 'COMPANY INFO', 'About Us', 10, '2025-06-05 00:03:57', NULL),
(44, 'COMPANY INFO', 'Student Discount', 10, '2025-06-05 00:04:12', NULL),
(45, 'COMPANY INFO', 'Military & Healthcare Discount', 10, '2025-06-05 00:04:21', NULL),
(46, 'COMPANY INFO', 'adidas Stories', 10, '2025-06-05 00:04:30', NULL),
(47, 'COMPANY INFO', 'Impact', 10, '2025-06-05 00:04:41', '2025-06-05 00:04:58'),
(48, 'COMPANY INFO', 'People', 10, '2025-06-05 00:05:06', NULL),
(49, 'COMPANY INFO', 'Planet', 10, '2025-06-05 00:05:19', NULL),
(50, 'COMPANY INFO', 'adiClub', 10, '2025-06-05 00:05:30', NULL),
(51, 'COMPANY INFO', 'Affiliates', 10, '2025-06-05 00:05:38', NULL),
(52, 'COMPANY INFO', 'Press', 10, '2025-06-05 00:05:50', NULL),
(53, 'COMPANY INFO', 'Careers', 10, '2025-06-05 00:05:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `megamenu_main`
--

CREATE TABLE `megamenu_main` (
  `id` int(3) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 10,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `megamenu_main`
--

INSERT INTO `megamenu_main` (`id`, `title`, `category`, `status`, `created_at`, `updated_at`) VALUES
(1, 'GET FESTIVAL READY', 'All Festival Gear', 10, '2025-06-04 20:14:21', '2025-06-04 21:54:03'),
(4, 'GET FESTIVAL READY', 'Festival Shoes', 10, '2025-06-04 21:47:09', '2025-06-04 21:54:18'),
(5, 'GET FESTIVAL READY', 'Festival Clothing', 10, '2025-06-04 21:54:28', NULL),
(6, 'GET FESTIVAL READY', 'Street Wear', 10, '2025-06-04 21:54:37', NULL),
(7, 'GET FESTIVAL READY', 'Y2K', 10, '2025-06-04 21:54:50', NULL),
(8, 'SPRING WARDROBE REFRESH', 'Fresh Florals', 10, '2025-06-04 21:55:04', NULL),
(9, 'SPRING WARDROBE REFRESH', 'Matching Family Outfits', 10, '2025-06-04 21:55:21', NULL),
(10, 'SPRING WARDROBE REFRESH', 'Skirts & Dresses', 10, '2025-06-04 21:55:36', NULL),
(11, 'SPRING WARDROBE REFRESH', 'Animal Prints', 10, '2025-06-04 21:55:46', '2025-06-04 21:56:02'),
(12, 'SPRING WARDROBE REFRESH', 'Luscious Greens', 10, '2025-06-04 21:56:25', NULL),
(13, 'JERESEYS FOR ALL', 'All Jerseys', 10, '2025-06-04 21:56:42', NULL),
(14, 'JERESEYS FOR ALL', 'Lifestyle Jerseys', 10, '2025-06-04 21:56:56', NULL),
(15, 'JERESEYS FOR ALL', 'Authentic Lionel Messi Jerseys', 10, '2025-06-04 21:57:38', NULL),
(16, 'JERESEYS FOR ALL', 'MLS Jersey Shop', 10, '2025-06-04 21:57:53', NULL),
(17, 'JERESEYS FOR ALL', 'Basketball Jerseys', 10, '2025-06-04 21:58:01', NULL),
(18, 'SPORTY SPRING GEAR', 'Windbreakers', 10, '2025-06-04 21:58:14', NULL),
(19, 'SPORTY SPRING GEAR', 'Tights and Leggings', 10, '2025-06-04 21:58:28', NULL),
(20, 'SPORTY SPRING GEAR', 'Swim Gear', 10, '2025-06-04 21:58:38', NULL),
(21, 'SPORTY SPRING GEAR', 'Volleyball Shoes', 10, '2025-06-04 21:58:50', NULL),
(22, 'SPORTY SPRING GEAR', 'Cycling Shoes', 10, '2025-06-04 21:59:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `megamenu_product`
--

CREATE TABLE `megamenu_product` (
  `id` int(3) NOT NULL,
  `product` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 10,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `megamenu_product`
--

INSERT INTO `megamenu_product` (`id`, `product`, `category`, `title`, `status`, `created_at`, `updated_at`) VALUES
(7, 'All Men\'s Shoes', 'Shoes', 'MEN', 10, '2025-06-02 23:17:45', NULL),
(8, 'Sneakers', 'Shoes', 'MEN', 10, '2025-06-02 23:18:07', NULL),
(9, 'Running', 'Shoes', 'MEN', 10, '2025-06-02 23:18:14', NULL),
(10, 'Golf', 'Shoes', 'MEN', 10, '2025-06-02 23:18:21', NULL),
(11, 'Soccer', 'Shoes', 'MEN', 10, '2025-06-02 23:18:29', NULL),
(12, 'Basketball', 'Shoes', 'MEN', 10, '2025-06-02 23:18:39', NULL),
(13, 'Workout & Gym', 'Shoes', 'MEN', 10, '2025-06-02 23:18:48', '2025-06-02 23:18:57'),
(14, 'All Men\'s Shoes	', 'Clothing', 'MEN', 10, '2025-06-02 23:19:56', NULL),
(15, 'Pants', 'Clothing', 'MEN', 10, '2025-06-02 23:20:14', NULL),
(16, 'Shorts', 'Clothing', 'MEN', 10, '2025-06-02 23:20:24', NULL),
(17, 'Tracksuits', 'Clothing', 'MEN', 10, '2025-06-02 23:20:39', NULL),
(18, 'Jerseys', 'Clothing', 'MEN', 10, '2025-06-02 23:20:55', NULL),
(19, 'Hoodies & Sweatshirts', 'Clothing', 'MEN', 10, '2025-06-02 23:21:05', NULL),
(20, 'Tops & T-Shirts', 'Clothing', 'MEN', 10, '2025-06-02 23:21:20', NULL),
(21, 'Jackets & Coats', 'Clothing', 'MEN', 10, '2025-06-02 23:21:40', NULL),
(22, 'New Arrivals', 'New & Trending', 'WOMEN', 10, '2025-06-02 23:22:26', NULL),
(23, 'Best Sellers', 'New & Trending', 'WOMEN', 10, '2025-06-02 23:22:39', NULL),
(24, 'Gift Cards', 'New & Trending', 'WOMEN', 10, '2025-06-02 23:22:51', NULL),
(25, 'All Women\'s Sprot', 'Shop by Sport', 'WOMEN', 10, '2025-06-02 23:23:17', NULL),
(26, 'Basketball', 'Shop by Sport', 'WOMEN', 10, '2025-06-02 23:23:39', NULL),
(27, 'Cycling', 'Shop by Sport', 'WOMEN', 10, '2025-06-02 23:23:51', NULL),
(28, 'Hiking', 'Shop by Sport', 'WOMEN', 10, '2025-06-02 23:24:04', NULL),
(29, 'Motorsport', 'Shop by Sport', 'WOMEN', 10, '2025-06-02 23:24:21', NULL),
(30, 'Outdoor', 'Shop by Sport', 'WOMEN', 10, '2025-06-02 23:24:59', NULL),
(31, 'Running', 'Shop by Sport', 'WOMEN', 10, '2025-06-02 23:25:47', NULL),
(32, 'Soccer', 'Shop by Sport', 'WOMEN', 10, '2025-06-02 23:26:02', NULL),
(33, 'Softball', 'Shop by Sport', 'WOMEN', 10, '2025-06-02 23:26:20', NULL),
(34, 'Swim', 'Shop by Sport', 'WOMEN', 10, '2025-06-02 23:26:30', NULL),
(35, 'Tennis', 'Shop by Sport', 'WOMEN', 10, '2025-06-02 23:26:43', NULL),
(36, 'Volleyball', 'Shop by Sport', 'WOMEN', 10, '2025-06-02 23:27:08', NULL),
(37, 'Workout & Gym', 'Shop by Sport', 'WOMEN', 10, '2025-06-02 23:27:47', NULL),
(38, 'Yoga', 'Shop by Sport', 'WOMEN', 10, '2025-06-02 23:27:58', NULL),
(39, 'All Kids Accessories', 'Accessories', 'KIDS', 10, '2025-06-02 23:28:29', NULL),
(40, 'Bags & Backpacks', 'Accessories', 'KIDS', 10, '2025-06-02 23:29:07', NULL),
(41, 'Hats', 'Accessories', 'KIDS', 10, '2025-06-02 23:29:42', NULL),
(42, 'Socks', 'Accessories', 'KIDS', 10, '2025-06-02 23:29:58', NULL),
(43, 'All Sale', 'Sale', 'KIDS', 10, '2025-06-02 23:30:22', NULL),
(44, 'Shoes', 'Sale', 'KIDS', 10, '2025-06-02 23:30:48', NULL),
(45, 'Accessories', 'Sale', 'KIDS', 10, '2025-06-02 23:40:00', NULL),
(46, 'Final Sale', 'Sale', 'KIDS', 10, '2025-06-02 23:40:24', NULL),
(47, 'New Arrivals', 'What\'s New', 'NEW & TRENDING', 10, '2025-06-02 23:41:00', '2025-06-02 23:43:01'),
(48, 'Best Sellers', 'What\'s New', 'NEW & TRENDING', 10, '2025-06-02 23:41:12', '2025-06-02 23:43:09'),
(49, 'Release Dates', 'What\'s New', 'NEW & TRENDING', 10, '2025-06-02 23:41:31', '2025-06-02 23:43:14'),
(50, 'Blog', 'What\'s New', 'NEW & TRENDING', 10, '2025-06-02 23:41:40', '2025-06-02 23:43:21'),
(51, 'Shop All', 'Sports', 'NEW & TRENDING', 10, '2025-06-02 23:44:36', NULL),
(52, 'Men', 'Shop All', 'NEW & TRENDING', 10, '2025-06-02 23:44:48', NULL),
(53, 'Women', 'Shop All', 'NEW & TRENDING', 10, '2025-06-02 23:44:58', NULL),
(54, 'Kids', 'Shop All', 'NEW & TRENDING', 10, '2025-06-02 23:45:16', NULL),
(55, 'Shoes', 'Shop All', 'NEW & TRENDING', 10, '2025-06-02 23:45:29', '2025-06-02 23:45:40'),
(56, 'Clothing', 'Shop All', 'NEW & TRENDING', 10, '2025-06-02 23:45:58', NULL),
(57, 'Accessories', 'Shop All', 'NEW & TRENDING', 10, '2025-06-02 23:46:20', NULL),
(58, 'All Men\'s Accessories', 'Accessories', 'MEN', 10, '2025-06-03 13:58:57', NULL),
(59, 'Bags & Backpacks', 'Accessories', 'MEN', 10, '2025-06-03 13:59:25', NULL),
(60, 'Balls', 'Accessories', 'MEN', 10, '2025-06-03 14:00:36', NULL),
(61, 'Gloves', 'Accessories', 'MEN', 10, '2025-06-03 14:00:45', NULL),
(62, 'Socks', 'Accessories', 'MEN', 10, '2025-06-03 14:00:54', NULL),
(63, 'Underwear', 'Accessories', 'MEN', 10, '2025-06-03 14:01:03', NULL),
(64, 'Water Bottles', 'Accessories', 'MEN', 10, '2025-06-03 14:01:16', NULL),
(65, 'New Arrivals', 'New & Trending', 'MEN', 10, '2025-06-03 14:01:35', NULL),
(66, 'Best Sellers', 'New & Trending', 'MEN', 10, '2025-06-03 14:01:44', NULL),
(67, 'Gift Cards', 'New & Trending', 'MEN', 10, '2025-06-03 14:02:09', NULL),
(68, 'Graphic Tees', 'New & Trending', 'MEN', 10, '2025-06-03 14:02:27', NULL),
(69, 'The New Superstar', 'New & Trending', 'MEN', 10, '2025-06-03 14:02:50', NULL),
(70, 'Liberty London Florals', 'New & Trending', 'MEN', 10, '2025-06-03 14:03:12', NULL),
(71, 'All Men\'s Sport', 'Shop by Sport', 'MEN', 10, '2025-06-03 14:03:40', NULL),
(72, 'Basball', 'Shop by Sport', 'MEN', 10, '2025-06-03 14:03:49', NULL),
(73, 'Basketball', 'Shop by Sport', 'MEN', 10, '2025-06-03 14:04:00', NULL),
(74, 'Cycling', 'Shop by Sport', 'MEN', 10, '2025-06-03 14:04:09', NULL),
(75, 'Football', 'Shop by Sport', 'MEN', 10, '2025-06-03 14:04:22', NULL),
(76, 'Golf', 'Shop by Sport', 'MEN', 10, '2025-06-03 14:04:34', NULL),
(77, 'adicolor', 'Shop by Collection', 'MEN', 10, '2025-06-03 14:05:28', NULL),
(78, 'Premuim Collaborations', 'Shop by Collection', 'MEN', 10, '2025-06-03 14:05:48', NULL),
(79, 'Five Ten', 'Shop by Collection', 'MEN', 10, '2025-06-03 14:05:56', NULL),
(80, 'Gazelle', 'Shop by Collection', 'MEN', 10, '2025-06-03 14:06:08', NULL),
(81, 'Samba', 'Shop by Collection', 'MEN', 10, '2025-06-03 14:06:18', NULL),
(82, 'Sportswer', 'Shop by Collection', 'MEN', 10, '2025-06-03 14:06:30', '2025-06-03 14:07:08'),
(83, 'Sportsear', 'Shop by Collection', 'MEN', 10, '2025-06-03 14:06:43', NULL),
(84, 'Supernova', 'Shop by Collection', 'MEN', 10, '2025-06-03 14:07:32', NULL),
(85, 'All Sale: Up to 40% Off', 'Sale', 'MEN', 10, '2025-06-03 14:08:52', NULL),
(86, 'Shoes', 'Sale', 'MEN', 10, '2025-06-03 14:09:00', NULL),
(87, 'Clothing', 'Sale', 'MEN', 10, '2025-06-03 14:09:09', '2025-06-03 14:10:16'),
(88, 'Accessories', 'Sale', 'MEN', 10, '2025-06-03 14:09:19', '2025-06-03 14:10:05'),
(89, 'Final Sale', 'Sale', 'MEN', 10, '2025-06-03 14:09:31', NULL),
(90, 'All Women\'s Shoes', 'Shoes', 'WOMEN', 10, '2025-06-03 14:12:10', NULL),
(91, 'Sneakers', 'Shoes', 'WOMEN', 10, '2025-06-03 14:12:40', NULL),
(92, 'Running', 'Shoes', 'WOMEN', 10, '2025-06-03 14:12:48', '2025-06-03 14:13:05'),
(93, 'Soccer', 'Shoes', 'WOMEN', 10, '2025-06-03 14:12:57', NULL),
(94, 'Golf', 'Shoes', 'WOMEN', 10, '2025-06-03 14:13:32', NULL),
(95, 'Slides & Sandals', 'Shoes', 'WOMEN', 10, '2025-06-03 14:14:06', NULL),
(96, 'All Women\'s Clothing', 'Clothing', 'WOMEN', 10, '2025-06-03 14:14:29', NULL),
(97, 'Pants', 'Clothing', 'WOMEN', 10, '2025-06-03 14:14:44', NULL),
(98, 'Dresses & Skirts', 'Clothing', 'WOMEN', 10, '2025-06-03 14:15:01', NULL),
(99, 'Sports Bars', 'Clothing', 'WOMEN', 10, '2025-06-03 14:15:18', NULL),
(100, 'Plus Size', 'Clothing', 'WOMEN', 10, '2025-06-03 14:15:36', NULL),
(101, 'Tracksuits', 'Clothing', 'WOMEN', 10, '2025-06-03 14:15:52', NULL),
(102, 'All Womens\' Accessories', 'Accessories', 'WOMEN', 10, '2025-06-03 14:16:09', NULL),
(103, 'Bags & Backpacks', 'Accessories', 'WOMEN', 10, '2025-06-03 14:16:22', NULL),
(104, 'Balls', 'Accessories', 'WOMEN', 10, '2025-06-03 14:16:34', NULL),
(105, 'Gloves', 'Accessories', 'WOMEN', 10, '2025-06-03 14:16:49', '2025-06-03 14:29:42'),
(106, 'Hats', 'Accessories', 'WOMEN', 10, '2025-06-03 14:29:18', '2025-06-03 14:30:07'),
(107, 'Socks', 'Accessories', 'WOMEN', 10, '2025-06-03 14:30:16', NULL),
(108, 'Water Bottles', 'Accessories', 'MEN', 10, '2025-06-03 14:30:25', NULL),
(109, 'adicolor', 'Shop by Collection', 'WOMEN', 10, '2025-06-03 14:31:12', NULL),
(110, 'Premuim Collaborations', 'Shop by Collection', 'WOMEN', 10, '2025-06-03 14:31:30', NULL),
(111, 'adidas by Stella McCartney', 'Shop by Collection', 'WOMEN', 10, '2025-06-03 14:31:56', NULL),
(112, 'Gazelle', 'Shop by Collection', 'WOMEN', 10, '2025-06-03 14:32:18', NULL),
(113, 'Originals', 'Shop by Collection', 'WOMEN', 10, '2025-06-03 14:32:36', NULL),
(114, 'Superstar', 'Shop by Collection', 'WOMEN', 10, '2025-06-03 14:32:49', NULL),
(115, 'Spoortswear', 'Shop by Collection', 'WOMEN', 10, '2025-06-03 14:33:14', NULL),
(116, 'TERREX', 'Shop by Collection', 'WOMEN', 10, '2025-06-03 14:33:38', NULL),
(117, 'All Sale: Up to 40% Off', 'Sale', 'WOMEN', 10, '2025-06-03 14:35:39', NULL),
(118, 'Shoes', 'Sale', 'WOMEN', 10, '2025-06-03 14:35:59', NULL),
(119, 'Clothing', 'Clothing', 'WOMEN', 10, '2025-06-03 14:36:16', NULL),
(120, 'Accessories', 'Sale', 'WOMEN', 10, '2025-06-03 14:36:28', NULL),
(121, 'Final Sale', 'Sale', 'WOMEN', 10, '2025-06-03 14:36:43', NULL),
(122, 'Black', 'Shop by Color', 'WOMEN', 10, '2025-06-03 14:37:22', NULL),
(123, 'Grey', 'Shop by Color', 'WOMEN', 10, '2025-06-03 14:37:35', NULL),
(124, 'White', 'Shop by Color', 'WOMEN', 10, '2025-06-03 14:37:56', NULL),
(125, 'Brown', 'Shop by Color', 'WOMEN', 10, '2025-06-03 14:38:25', NULL),
(126, 'Pink', 'Shop by Color', 'WOMEN', 10, '2025-06-03 14:38:41', NULL),
(127, 'Orange', 'Shop by Color', 'WOMEN', 10, '2025-06-03 14:38:50', NULL),
(128, 'Shoes', 'Boys', 'KIDS', 10, '2025-06-03 14:41:35', NULL),
(129, 'Clothing', 'Shoes', 'KIDS', 10, '2025-06-03 14:41:59', NULL),
(130, 'Accessories', 'Boys', 'KIDS', 10, '2025-06-03 14:42:09', NULL),
(131, 'Shoes', 'Girls', 'KIDS', 10, '2025-06-03 14:42:39', NULL),
(132, 'Accessories', 'Girls', 'KIDS', 10, '2025-06-03 14:42:49', NULL),
(133, 'New Arrivals', 'New & Trending', 'KIDS', 10, '2025-06-03 14:43:10', NULL),
(134, 'Best Sellers', 'New & Trending', 'KIDS', 10, '2025-06-03 14:43:23', NULL),
(135, 'Disney Collection', 'New & Trending', 'KIDS', 10, '2025-06-03 14:43:44', NULL),
(136, 'Gift Cards', 'New & Trending', 'KIDS', 10, '2025-06-03 14:44:06', '2025-06-03 14:55:11'),
(137, 'Shoes Under $80', 'New & Trending', 'KIDS', 10, '2025-06-03 14:44:21', NULL),
(138, 'Graphic Tees', 'New & Trending', 'KIDS', 10, '2025-06-03 14:44:50', NULL),
(139, 'All Sale: Up to 40% Off', 'Sale', 'KIDS', 10, '2025-06-03 14:45:41', NULL),
(140, 'Shoes', 'Sale', 'KIDS', 10, '2025-06-03 14:45:53', NULL),
(141, 'Clothing', 'Sale', 'KIDS', 10, '2025-06-03 14:46:09', NULL),
(142, 'Youth & Tenns [8-16 years]', 'Shop By Age', 'KIDS', 10, '2025-06-03 14:48:38', '2025-06-03 14:49:44'),
(143, 'Babies & Toddlers [0-4 years]', 'Shop By Age', 'KIDS', 10, '2025-06-03 14:49:18', NULL),
(144, 'Purple', 'Shop by Color', 'KIDS', 10, '2025-06-03 14:51:32', NULL),
(145, 'Blue', 'Shop by Color', 'KIDS', 10, '2025-06-03 14:51:46', NULL),
(146, 'Green', 'Shop by Color', 'KIDS', 10, '2025-06-03 14:52:01', NULL),
(147, 'Yellow', 'Shop by Color', 'KIDS', 10, '2025-06-03 14:52:30', NULL),
(148, 'Orange', 'Shop by Color', 'KIDS', 10, '2025-06-03 14:52:46', '2025-06-03 14:54:55');

-- --------------------------------------------------------

--
-- Table structure for table `megamenu_title`
--

CREATE TABLE `megamenu_title` (
  `id` int(11) NOT NULL,
  `category` varchar(200) NOT NULL,
  `title` varchar(150) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `megamenu_title`
--

INSERT INTO `megamenu_title` (`id`, `category`, `title`, `status`, `created_at`, `updated_at`) VALUES
(8, 'Shoes', 'MEN', 10, '2025-06-02 18:55:42', NULL),
(9, 'Clothing', 'MEN', 10, '2025-06-02 18:55:54', NULL),
(10, 'Accessories', 'MEN', 10, '2025-06-02 18:55:59', NULL),
(11, 'New & Trending', 'MEN', 10, '2025-06-02 18:56:16', NULL),
(12, 'Shop by Sport', 'MEN', 10, '2025-06-02 18:56:27', NULL),
(13, 'Shop by Sport', 'MEN', 10, '2025-06-02 18:56:34', NULL),
(14, 'Shop by Collection', 'MEN', 10, '2025-06-02 18:56:43', NULL),
(15, 'Sale', 'MEN', 10, '2025-06-02 18:56:47', NULL),
(16, 'Shoes', 'WOMEN', 10, '2025-06-02 18:57:03', NULL),
(17, 'Clothing', 'WOMEN', 10, '2025-06-02 18:57:15', NULL),
(18, 'Accessories', 'WOMEN', 10, '2025-06-02 18:57:34', NULL),
(19, 'New & Trending', 'WOMEN', 10, '2025-06-02 18:58:01', NULL),
(20, 'Shop by Sport', 'WOMEN', 10, '2025-06-02 18:58:29', NULL),
(21, 'Shop by Collection', 'WOMEN', 10, '2025-06-02 18:58:48', NULL),
(22, 'Shop by Color', 'WOMEN', 10, '2025-06-02 18:59:00', NULL),
(23, 'Sale', 'WOMEN', 10, '2025-06-02 18:59:15', NULL),
(24, 'All Sale', 'SALE', 10, '2025-06-02 18:59:39', NULL),
(25, 'Mens Sale', 'SALE', 10, '2025-06-02 19:00:07', NULL),
(26, 'Womens Sale', 'SALE', 10, '2025-06-02 19:00:22', NULL),
(27, 'Kids Sale', 'SALE', 10, '2025-06-02 19:00:31', NULL),
(28, 'Final Sale', 'SALE', 10, '2025-06-02 19:00:50', NULL),
(29, 'Boys', 'KIDS', 10, '2025-06-02 19:01:14', NULL),
(30, 'Girls', 'KIDS', 10, '2025-06-02 19:01:23', NULL),
(31, 'New & Trending', 'KIDS', 10, '2025-06-02 19:01:40', NULL),
(32, 'Accessories', 'KIDS', 10, '2025-06-02 19:01:52', NULL),
(33, 'Shop By Age', 'KIDS', 10, '2025-06-02 19:02:03', NULL),
(34, 'Shop by Color', 'KIDS', 10, '2025-06-02 19:02:21', NULL),
(35, 'Sale', 'KIDS', 10, '2025-06-02 19:02:38', NULL),
(36, 'All Kids', 'KIDS', 0, '2025-06-02 19:02:47', NULL),
(37, 'What\'s New', 'NEW & TRENDING', 10, '2025-06-02 19:03:07', NULL),
(38, 'What\'s Trending', 'NEW & TRENDING', 10, '2025-06-02 19:03:22', NULL),
(39, 'Collaborations', 'NEW & TRENDING', 10, '2025-06-02 19:03:37', NULL),
(40, 'Our World', 'NEW & TRENDING', 10, '2025-06-02 19:03:47', NULL),
(41, 'Sports', 'NEW & TRENDING', 10, '2025-06-02 19:03:56', NULL),
(42, 'Originals', 'NEW & TRENDING', 10, '2025-06-02 19:04:04', NULL),
(43, 'Collections', 'NEW & TRENDING', 10, '2025-06-02 19:04:14', NULL),
(44, 'Shop All', 'NEW & TRENDING', 10, '2025-06-02 19:04:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menu_footer`
--

CREATE TABLE `menu_footer` (
  `id` int(3) NOT NULL,
  `title` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu_footer`
--

INSERT INTO `menu_footer` (`id`, `title`, `status`, `created_at`, `updated_at`) VALUES
(1, 'PRODUCTS', 10, '2025-06-04 21:55:32', '2025-06-04 23:35:39'),
(4, 'Sports', 10, '2025-06-04 23:35:44', NULL),
(5, 'Collections', 10, '2025-06-04 23:35:50', NULL),
(6, 'SUPPORT', 10, '2025-06-04 23:35:55', NULL),
(7, 'COMPANY INFO', 10, '2025-06-04 23:36:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menu_main`
--

CREATE TABLE `menu_main` (
  `id` int(3) NOT NULL,
  `title` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu_main`
--

INSERT INTO `menu_main` (`id`, `title`, `status`, `created_at`, `updated_at`) VALUES
(3, 'GET FESTIVAL READY', 10, '2025-06-04 21:24:05', '2025-06-04 21:34:36'),
(4, 'SPRING WARDROBE REFRESH', 10, '2025-06-04 21:24:10', '2025-06-04 21:34:55'),
(5, 'JERESEYS FOR ALL', 10, '2025-06-04 21:35:06', NULL),
(6, 'SPORTY SPRING GEAR', 10, '2025-06-04 21:35:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `page_move`
--

CREATE TABLE `page_move` (
  `id` int(3) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` varchar(255) NOT NULL,
  `link` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `page_move`
--

INSERT INTO `page_move` (`id`, `title`, `body`, `link`, `status`, `created_at`, `updated_at`) VALUES
(3, 'UP TO 40% OFF', 'Don\'t miss out on the deals of the season. Save up to 40% when you shop the sale.', 'SHOP NOW', 10, '2025-06-05 21:32:14', '2025-06-05 21:38:42'),
(4, 'FREE STANDARD SHIPPING WITH ADICLUB', 'Sign up for adiClub to enjoy free standard shipping and earn points on every order.\r\n', 'JOIN ADICLUB FOR FREE', 10, '2025-06-05 21:39:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `popular_title`
--

CREATE TABLE `popular_title` (
  `id` int(3) NOT NULL,
  `title` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 10,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `popular_title`
--

INSERT INTO `popular_title` (`id`, `title`, `status`, `created_at`, `updated_at`) VALUES
(3, 'ultraboost', 10, '2025-06-03 23:32:01', '2025-06-03 23:40:39'),
(4, 'samba', 10, '2025-06-03 23:35:54', '2025-06-03 23:40:47'),
(5, 'campus', 10, '2025-06-03 23:40:52', NULL),
(6, 'gazelle', 10, '2025-06-03 23:40:56', NULL),
(7, 'soccer', 10, '2025-06-03 23:41:04', NULL),
(8, 'spezial', 10, '2025-06-03 23:41:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `related_resources`
--

CREATE TABLE `related_resources` (
  `id` int(11) NOT NULL,
  `body` varchar(255) NOT NULL,
  `title` varchar(200) NOT NULL,
  `path` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 10,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `related_resources`
--

INSERT INTO `related_resources` (`id`, `body`, `title`, `path`, `status`, `created_at`, `updated_at`) VALUES
(5, 'Get down and dirty with adidas and learn how to clean your sneakers the right way.\r\n\r\n', 'How To Clean Shoes', '/adidas/src/img/related_resources/2025_06_04_19_29_42.avif', 10, '2025-06-04 20:48:51', '2025-06-04 20:59:42'),
(6, 'Discove classic adidas heritage theritage through the fit and feel of the one and only Samba.', 'The adidas Samba Size Guide', '/adidas/src/img/related_resources/2025_06_04_19_30_55.avif', 10, '2025-06-04 20:49:01', '2025-06-04 21:00:55'),
(7, 'Are you ready  to serve? Learn how to style your tennis skirt outfits with adidas.', 'Ace the Looks: How to Style a Tennis Skirt', '/adidas/src/img/related_resources/2025_06_04_19_32_10.avif', 10, '2025-06-04 21:02:10', NULL),
(8, 'Form sporty to flirty to polished, the soccer jersey is a surprisingly versatile wardrobe hero. Get  inspired on how to style a jersey in five totally unique ways.\r\n', 'How To Style A Soccer Jersey', '/adidas/src/img/related_resources/2025_06_04_19_34_02.avif', 10, '2025-06-04 21:04:02', NULL),
(9, 'Take your sneaker game to the next level with our guide on how to tie shoelaces in different styles. Form straight lacing to ladder lacing--we cover them all!', '6 Creative Ways To Lace Up Your Sneakers With Instructions', '/adidas/src/img/related_resources/2025_06_04_19_35_49.avif', 10, '2025-06-04 21:05:49', NULL),
(10, 'Feeling over the workout before even starting ? Learn the signs of gym burnout and how to avoid it so you can get back to enjoying your traning.\r\n', 'Ways To Avoid Exercise Burnout', '/adidas/src/img/related_resources/2025_06_04_19_37_27.avif', 10, '2025-06-04 21:07:27', NULL),
(11, 'Whether you have wide feet, numb toes, or a heel that lifts with every step, learng how to tie runnig shoes to alleviate these common running shoe issues.', 'How To Lace Runnig Shoes', '/adidas/src/img/related_resources/2025_06_04_19_40_19.avif', 10, '2025-06-04 21:10:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `scrollerimg_main`
--

CREATE TABLE `scrollerimg_main` (
  `id` int(3) NOT NULL,
  `title` varchar(150) NOT NULL,
  `price` float NOT NULL,
  `body` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 10,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `scrollerimg_main`
--

INSERT INTO `scrollerimg_main` (`id`, `title`, `price`, `body`, `path`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Performance', 30, 'Texas Tech Red Raiders Women\'s College World Series Participant\r\n', '/adidas/src/img/scroller/2025_06_03_20_13_45.avif', 10, '2025-06-03 21:33:41', '2025-06-03 21:43:59'),
(5, 'Sportswear', 55, 'Seasonal Essentials Adiraptor Fleece Track Suit Kids', '/adidas/src/img/scroller/2025_06_03_20_23_22.avif', 10, '2025-06-03 21:53:22', NULL),
(6, 'Performance', 30, 'Louisville Cardinals Dugout Postseason Tee', '/adidas/src/img/scroller/2025_06_03_20_24_08.avif', 10, '2025-06-03 21:54:08', NULL),
(7, 'Originals', 105, 'Samba_OG_X_Liberty_London_Shoes', '/adidas/src/img/scroller/2025_06_03_20_25_22.avif', 10, '2025-06-03 21:55:22', NULL),
(8, 'Performance', 120, 'Anthony_Edwards_1_Low_Shoes_Black\r\n', '/adidas/src/img/scroller/2025_06_03_20_26_11.avif', 10, '2025-06-03 21:56:11', NULL),
(9, 'Sportswear', 55, 'Essentials_3-Stripes_Fleece_Sweatshirt_Green', '/adidas/src/img/scroller/2025_06_03_20_26_43.avif', 10, '2025-06-03 21:56:43', NULL),
(10, 'Performance', 45, 'adidas_All_Me_Light_Support_Bra_Black\r\n', '/adidas/src/img/scroller/2025_06_03_20_28_08.avif', 10, '2025-06-03 21:58:08', NULL),
(11, 'Originals', 125, 'Gazelle_Bold_X_Liberty_London_Shoes_White', '/adidas/src/img/scroller/2025_06_03_20_28_48.avif', 10, '2025-06-03 21:58:48', NULL),
(12, 'Performance', 110, 'Anthony_Edwards_1_Low_Shoes_Grey_JS\r\n', '/adidas/src/img/scroller/2025_06_03_20_29_29.avif', 10, '2025-06-03 21:59:29', NULL),
(13, 'Performance', 150, 'Juventus_25-26_Home_Authentic_Jersey_White', '/adidas/src/img/scroller/2025_06_03_20_30_11.avif', 10, '2025-06-03 22:00:11', NULL),
(14, 'Performance', 150, 'FC_Bayern_25-26_Away_Authentic_Jersey_White\r\n', '/adidas/src/img/scroller/2025_06_03_20_31_17.avif', 10, '2025-06-03 22:01:17', NULL),
(15, 'Originals', 85, 'Samba_OG_x_Liberty_London_Shoes_Kids_Blue\r\n', '/adidas/src/img/scroller/2025_06_03_20_31_46.avif', 10, '2025-06-03 22:01:46', '2025-06-03 22:02:54'),
(16, 'titl1', 0, 'testeasdfa', '/adidas/src/img/related_resources/2025_06_04_19_13_14.avif', 10, '2025-06-04 20:43:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `scroller_video`
--

CREATE TABLE `scroller_video` (
  `id` int(3) NOT NULL,
  `title` varchar(150) NOT NULL,
  `link` varchar(150) NOT NULL,
  `body` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 10,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `scroller_video`
--

INSERT INTO `scroller_video` (`id`, `title`, `link`, `body`, `path`, `status`, `created_at`, `updated_at`) VALUES
(6, 'PLAY YOUR FASTEST', 'LEARN MORE', 'Ubersonic 5 tennis shoe. Made for speed.', '/adidas/src/img/video/2025_06_03_21_21_18.mp4', 10, '2025-06-03 22:50:42', '2025-06-03 23:07:12'),
(7, 'PAST, PRESENT, FUTURE', 'SHOP NOW', 'Explore the Superstar, now updated for the next generation.', '/adidas/src/img/video/2025_06_03_21_39_13.mp4', 10, '2025-06-03 23:09:13', NULL),
(8, 'ANTHONY EDWARDS 1', 'SHOP NOW', 'Built for speed. Strong as concrete. Believe that.', '/adidas/src/img/video/2025_06_03_21_40_15.mp4', 10, '2025-06-03 23:10:15', NULL),
(9, 'UNDENIABLY DAD', 'SHOP NOW', 'Shop 3-Stripes gifts that show your #1 supporter how much he means to you.', '/adidas/src/img/video/2025_06_03_21_41_22.mp4', 10, '2025-06-03 23:11:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` varchar(130) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `password` varchar(130) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `status`, `password`, `created_at`) VALUES
(1, 'test test', 'test@gmail.com', 10, '$2y$10$yAyKqv8Gm3wLg1/ueZSll.4qczNjZbSITj2x10c4BJq24C1R3x.pa', '2025-06-01 19:35:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advert_main`
--
ALTER TABLE `advert_main`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `background`
--
ALTER TABLE `background`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `board_black`
--
ALTER TABLE `board_black`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_column`
--
ALTER TABLE `footer_column`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_header`
--
ALTER TABLE `item_header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `megamenu_footer`
--
ALTER TABLE `megamenu_footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `megamenu_main`
--
ALTER TABLE `megamenu_main`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `megamenu_product`
--
ALTER TABLE `megamenu_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `megamenu_title`
--
ALTER TABLE `megamenu_title`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_footer`
--
ALTER TABLE `menu_footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_main`
--
ALTER TABLE `menu_main`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_move`
--
ALTER TABLE `page_move`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `popular_title`
--
ALTER TABLE `popular_title`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `related_resources`
--
ALTER TABLE `related_resources`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scrollerimg_main`
--
ALTER TABLE `scrollerimg_main`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scroller_video`
--
ALTER TABLE `scroller_video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advert_main`
--
ALTER TABLE `advert_main`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `background`
--
ALTER TABLE `background`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `board_black`
--
ALTER TABLE `board_black`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `footer_column`
--
ALTER TABLE `footer_column`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `header`
--
ALTER TABLE `header`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `item_header`
--
ALTER TABLE `item_header`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `megamenu_footer`
--
ALTER TABLE `megamenu_footer`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `megamenu_main`
--
ALTER TABLE `megamenu_main`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `megamenu_product`
--
ALTER TABLE `megamenu_product`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT for table `megamenu_title`
--
ALTER TABLE `megamenu_title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `menu_footer`
--
ALTER TABLE `menu_footer`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `menu_main`
--
ALTER TABLE `menu_main`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `page_move`
--
ALTER TABLE `page_move`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `popular_title`
--
ALTER TABLE `popular_title`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `related_resources`
--
ALTER TABLE `related_resources`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `scrollerimg_main`
--
ALTER TABLE `scrollerimg_main`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `scroller_video`
--
ALTER TABLE `scroller_video`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
