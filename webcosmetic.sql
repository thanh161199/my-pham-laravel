-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2022 at 10:13 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webcosmetic`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `name`, `email`, `phone`, `address`, `password`, `status`, `created_at`, `updated_at`) VALUES
(1, 'khach hang 1', 'admin1@gmail.com', '0123456789', '11 abc', '$2y$10$4ljdjJWlQka6SUh5XAvxt.HAszbW2a4JsYn.QZcWzMm7D4m.dh3XC', 1, '2022-05-23 02:00:54', '2022-05-23');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `descriptions` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Chăm sóc da', 1, '2022-03-08 09:26:00', '2022-05-25'),
(3, 'Son', 1, '2022-03-08 09:26:00', '2022-05-25'),
(9, 'Trang điểm', 1, '2022-03-28 02:23:37', '2022-05-24'),
(10, 'Nước tẩy trang', 1, '2022-05-25 04:50:40', '2022-05-25');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order_note` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `payment_method` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_method` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` date DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `account_id`, `name`, `address`, `order_note`, `payment_method`, `shipping_method`, `status`, `created_at`, `updated_at`, `email`, `phone`) VALUES
(2, 1, 'khach hang 1', '11 abc', '123', 'ONline qua thẻ visa', 'CHuyển Fax nhanh', 1, '2022-05-23 11:59:53', '2022-05-23', 'admin1@gmail.com', '0123456789'),
(3, 1, 'khach hang 1', '11 abc', '123', 'ONline qua thẻ visa', 'CHuyển Fax nhanh', 1, '2022-05-23 12:01:29', '2022-05-23', 'admin1@gmail.com', '0123456789'),
(4, 1, 'khach hang 1', '11 abc', '123', 'ONline qua thẻ visa', 'CHuyển Fax nhanh', 1, '2022-05-23 12:09:03', '2022-05-23', 'admin1@gmail.com', '0123456789'),
(5, 1, 'khach hang 1', '11 abc', '123', 'ONline qua thẻ visa', 'CHuyển Fax nhanh', 1, '2022-05-23 12:14:52', '2022-05-23', 'admin1@gmail.com', '0123456789'),
(6, 1, 'khach hang 1', '11 abc', '123', 'ONline qua thẻ visa', 'CHuyển Fax nhanh', 2, '2022-05-23 12:21:23', '2022-05-24', 'admin1@gmail.com', '0123456789'),
(7, 1, 'khach hang 1', '11 abc', '123', 'ONline qua thẻ visa', 'CHuyển Fax nhanh', 1, '2022-05-24 08:24:34', '2022-05-24', 'admin1@gmail.com', '0123456789'),
(8, 1, 'khach hang 1', '11 abc', '12', 'ONline qua thẻ visa', 'CHuyển Fax nhanh', 2, '2022-05-27 18:35:44', '2022-05-28', 'admin1@gmail.com', '0123456789');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`product_id`, `order_id`, `quantity`, `price`) VALUES
(5, 6, 1, 500000),
(5, 7, 1, 500000),
(6, 6, 1, 10000);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `sale_price` float NOT NULL,
  `descriptions` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `price`, `sale_price`, `descriptions`, `status`, `category_id`, `created_at`, `updated_at`) VALUES
(5, 'biore', 'product5_1653479410.jpg', 500000, 0, NULL, 1, 1, '2022-04-07 03:17:37', '2022-05-25'),
(6, 'son back rouge A8', 'th_1653479376.jpg', 360000, 10000, NULL, 1, 3, '2022-05-02 09:21:46', '2022-05-25'),
(7, 'lorea', 'product9_1653479479.jpg', 50000, 0, NULL, 1, 10, '2022-05-25 04:51:19', '2022-05-25'),
(8, 'phấn nền', 'product6_1653479507.jpg', 123000, 23000, NULL, 1, 9, '2022-05-25 04:51:47', '2022-05-25'),
(9, 'kem nền', 'product8_1653479560.jpg', 450000, 120000, NULL, 0, 9, '2022-05-25 04:52:40', '2022-05-25'),
(10, 'rio A12', '1759-0-thumbnail-3_1653479618.png', 230000, 0, NULL, 1, 3, '2022-05-25 04:53:38', '2022-05-25'),
(11, 'lore xanh nhạt', 'product3_1653479692.jpg', 152000, 2000, NULL, 1, 10, '2022-05-25 04:54:52', '2022-05-25'),
(12, 'kem phủ', 'product_1653479849.jpg', 124000, 23000, NULL, 1, 1, '2022-05-25 04:57:29', '2022-05-25'),
(13, 'son dưỡng hồng', '1759-0-thumbnail-3_1653479900.png', 59000, 12000, NULL, 1, 3, '2022-05-25 04:58:20', '2022-05-25'),
(14, 'loria', 'product-detail3_1653700989.jpg', 50000, 6000, NULL, 1, 10, '2022-05-27 18:23:09', '2022-05-28'),
(15, 'black rougeA16666', 'th_1653701112.jpg', 50000, 10000, NULL, 1, 3, '2022-05-27 18:25:12', '2022-05-28'),
(16, 'sản phẩm mới', 'anh_1653701277.gif', 100000, 0, NULL, 1, 9, '2022-05-27 18:27:57', '2022-05-28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Admin Manager', 'admin@example.com', '$2y$10$p8asf0O6wE3v515NHHW.nuplP7yxNJY99MN/quSQYbGV5IIscuFHK', 1, '2022-03-29 01:42:21', '2022-03-29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `account_id` (`account_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`product_id`,`order_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `category_id` (`category_id`);

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
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`id`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
