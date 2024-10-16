-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-10-2024 a las 02:49:33
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `laravel11db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `locality` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `landmark` varchar(255) DEFAULT NULL,
  `zip` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'home',
  `isdefault` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `addresses`
--

INSERT INTO `addresses` (`id`, `user_id`, `name`, `phone`, `locality`, `address`, `city`, `state`, `country`, `landmark`, `zip`, `type`, `isdefault`, `created_at`, `updated_at`) VALUES
(1, 4, 'Britney Villacorta', '123456789', 'calle zz', 'casa 1', 'Piura', 'Castilla', 'Perú', 'Tanqueee', '150223', 'home', 1, '2024-10-11 20:00:59', '2024-10-11 20:00:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `brands`
--

INSERT INTO `brands` (`id`, `name`, `slug`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Adidas', 'adidas', '1721934719.png', '2024-07-25 19:12:08', '2024-07-25 19:12:08'),
(2, 'Java', 'java', '1721934775.png', '2024-07-25 19:12:55', '2024-07-25 19:25:20'),
(3, 'Swift', 'swift', '1721934984.png', '2024-07-25 19:16:27', '2024-07-25 19:16:27'),
(4, 'Python', 'python', '1721935052.png', '2024-07-25 19:17:32', '2024-07-25 19:17:32'),
(5, 'PHP', 'php', '1721935096.png', '2024-07-25 19:18:16', '2024-07-25 19:18:16'),
(6, 'React', 'react', '1721935146.png', '2024-07-25 19:19:06', '2024-07-30 17:09:48'),
(7, 'MYSQL', 'mysql', '1721935225.png', '2024-07-25 19:20:25', '2024-07-25 19:20:25'),
(8, 'JavaScript', 'javascript', '1721935274.png', '2024-07-25 19:21:14', '2024-07-25 19:21:14'),
(9, 'Oracle', 'oracle', '1721935386.png', '2024-07-25 19:23:06', '2024-07-25 19:23:06'),
(10, 'Instagram', 'instagram', '1721935460.png', '2024-07-25 19:24:20', '2024-07-25 19:24:20'),
(11, 'CSS', 'css', '1721935554.png', '2024-07-25 19:25:54', '2024-07-25 19:25:54'),
(12, 'McLaren', 'mclaren', '1728407141.png', '2024-10-08 17:05:42', '2024-10-08 17:05:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('ana@gamil.com|127.0.0.1', 'i:2;', 1728402413),
('ana@gamil.com|127.0.0.1:timer', 'i:1728402412;', 1728402412),
('ana|127.0.0.1', 'i:1;', 1721787288),
('ana|127.0.0.1:timer', 'i:1721787288;', 1721787288),
('gustavo@gmail.com|127.0.0.1', 'i:1;', 1728402614),
('gustavo@gmail.com|127.0.0.1:timer', 'i:1728402613;', 1728402613);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `parent_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `image`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'Leches', 'leches', '1722303530.png', NULL, '2024-07-30 01:38:53', '2024-07-30 01:38:53'),
(2, 'Bebidas', 'bebidas', '1722303548.png', NULL, '2024-07-30 01:39:08', '2024-07-30 01:39:08'),
(3, 'Snacks', 'snacks', '1722303569.png', NULL, '2024-07-30 01:39:29', '2024-07-30 01:39:29'),
(4, 'Cafes', 'cafes', '1722303590.png', NULL, '2024-07-30 01:39:50', '2024-07-30 01:39:50'),
(5, 'Mermeladas', 'mermeladas', '1722303605.png', NULL, '2024-07-30 01:40:05', '2024-07-30 01:40:05'),
(6, 'Detergentes', 'detergentes', '1722303625.png', NULL, '2024-07-30 01:40:26', '2024-07-30 01:40:26'),
(7, 'Shampoos', 'shampoos', '1722303643.png', NULL, '2024-07-30 01:40:43', '2024-07-30 01:40:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `comment`, `created_at`, `updated_at`) VALUES
(1, 'Abraham Elias', 'ricoabraham879@gmail.com', '924575577', 'Test de message', '2024-10-14 23:15:10', '2024-10-14 23:15:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) NOT NULL,
  `type` enum('fixed','percent') NOT NULL,
  `value` decimal(8,2) NOT NULL,
  `cart_value` decimal(8,2) NOT NULL,
  `expiry_date` date NOT NULL DEFAULT cast(current_timestamp() as date),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `coupons`
--

INSERT INTO `coupons` (`id`, `code`, `type`, `value`, `cart_value`, `expiry_date`, `created_at`, `updated_at`) VALUES
(1, 'CUPON1', 'fixed', 30.00, 130.00, '2024-10-14', '2024-10-10 18:42:42', '2024-10-10 18:42:42'),
(2, 'CUPON2', 'percent', 30.00, 130.00, '2024-10-13', '2024-10-10 18:43:01', '2024-10-10 18:43:01'),
(3, 'cupon3', 'percent', 15.00, 55.00, '2024-10-19', '2024-10-11 16:30:05', '2024-10-11 20:12:49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '0001_01_01_000000_create_users_table', 1),
(8, '0001_01_01_000001_create_cache_table', 1),
(9, '0001_01_01_000002_create_jobs_table', 1),
(10, '2024_07_24_020925_create_brands_table', 2),
(11, '2024_07_25_203658_create_categories_table', 3),
(12, '2024_07_29_204342_create_products_table', 4),
(13, '2024_10_10_122125_create_coupuns_table', 5),
(14, '2024_10_11_121410_create_orders_table', 6),
(15, '2024_10_11_121454_create_order_items_table', 6),
(16, '2024_10_11_121527_create_addresses_table', 6),
(17, '2024_10_11_121617_create_transactions_table', 6),
(18, '2024_10_12_171535_create_slides_table', 7),
(19, '2024_10_13_151335_create_month_names_table', 8),
(20, '2024_10_13_183157_create_contacts_table', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `month_names`
--

CREATE TABLE `month_names` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `month_names`
--

INSERT INTO `month_names` (`id`, `name`) VALUES
(1, 'Enero'),
(2, 'Febrero'),
(3, 'Marzo'),
(4, 'Abril'),
(5, 'Mayo'),
(6, 'Junio'),
(7, 'Julio'),
(8, 'Agosto'),
(9, 'Septiembre'),
(10, 'Octubre'),
(11, 'Noviembre'),
(12, 'Diciembre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `subtotal` decimal(8,2) NOT NULL,
  `discount` decimal(8,2) NOT NULL DEFAULT 0.00,
  `tax` decimal(8,2) NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `locality` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `landmark` varchar(255) DEFAULT NULL,
  `zip` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'home',
  `status` enum('ordered','delivered','canceled') NOT NULL DEFAULT 'ordered',
  `is_shipping_different` tinyint(1) NOT NULL DEFAULT 0,
  `delivered_date` date DEFAULT NULL,
  `canceled_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `subtotal`, `discount`, `tax`, `total`, `name`, `phone`, `locality`, `address`, `city`, `state`, `country`, `landmark`, `zip`, `type`, `status`, `is_shipping_different`, `delivered_date`, `canceled_date`, `created_at`, `updated_at`) VALUES
(1, 4, 65.00, 0.00, 11.70, 76.70, 'Britney Villacorta', '123456789', 'calle zz', 'casa 1', 'Piura', 'Castilla', 'Perú', 'Tanqueee', '150223', 'home', 'delivered', 0, '2024-10-12', '2024-10-12', '2024-10-11 20:25:37', '2024-10-12 22:12:39'),
(2, 4, 28.00, 0.00, 5.04, 33.04, 'Britney Villacorta', '123456789', 'calle zz', 'casa 1', 'Piura', 'Castilla', 'Perú', 'Tanqueee', '150223', 'home', 'canceled', 0, NULL, '2024-10-13', '2024-10-13 21:26:23', '2024-10-13 21:27:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `options` longtext DEFAULT NULL,
  `rstatus` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `order_items`
--

INSERT INTO `order_items` (`id`, `product_id`, `order_id`, `price`, `quantity`, `options`, `rstatus`, `created_at`, `updated_at`) VALUES
(1, 4, 1, 65.00, 1, NULL, 0, '2024-10-11 20:25:37', '2024-10-11 20:25:37'),
(2, 5, 2, 14.00, 2, NULL, 0, '2024-10-13 21:26:23', '2024-10-13 21:26:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `short_description` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `regular_price` decimal(8,2) NOT NULL,
  `sale_price` decimal(8,2) DEFAULT NULL,
  `SKU` varchar(255) NOT NULL,
  `stock` enum('instock','outofstock') NOT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `quantity` int(10) UNSIGNED NOT NULL DEFAULT 10,
  `image` varchar(255) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `brand_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `short_description`, `description`, `regular_price`, `sale_price`, `SKU`, `stock`, `featured`, `quantity`, `image`, `images`, `category_id`, `brand_id`, `created_at`, `updated_at`) VALUES
(1, 'Chaqueta roja god xd', 'chaqueta-roja-god-xd', 'Chaqueta roja god', '<h3 class=\"block-title mb-4\">Sed do eiusmod tempor incididunt ut labore</h3>\r\n<p class=\"content\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n<div class=\"row\">\r\n<div class=\"col-lg-6\">\r\n<h3 class=\"block-title\">Why choose product?</h3>\r\n<ul class=\"list text-list\">\r\n<li>Creat by cotton fibric with soft and smooth</li>\r\n<li>Simple, Configurable (e.g. size, color, etc.), bundled</li>\r\n<li>Downloadable/Digital Products, Virtual Products</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-lg-6\">\r\n<h3 class=\"block-title\">Sample Number List</h3>\r\n<ol class=\"list text-list\">\r\n<li>Create Store-specific attrittbutes on the fly</li>\r\n<li>Simple, Configurable (e.g. size, color, etc.), bundled</li>\r\n<li>Downloadable/Digital Products, Virtual Products</li>\r\n</ol>\r\n</div>\r\n</div>\r\n<h3 class=\"block-title mb-0\">Lining</h3>\r\n<p class=\"content\">100% Polyester, Main: 100% Polyester.</p>', 50.50, 60.00, 'CR', 'instock', 1, 50, '1725163286.jpg', '1725163286-1.jpg,1725163286-2.jpg,1725163286-3.jpg', 4, 7, '2024-09-01 04:01:27', '2024-09-02 01:26:58'),
(2, 'Camisa verde godds', 'camisa-verde-godds', 'Camisa verde godds', 'Camisa verde godds', 55.00, 65.00, 'CVG', 'instock', 1, 34, '1725163478.jpg', '1725163478-1.jpg', 7, 6, '2024-09-01 04:04:38', '2024-09-01 04:04:38'),
(3, 'Vestido negro re god', 'vestido-negro-re-god', 'Vestido negro re god', 'Sed do eiusmod tempor incididunt ut labore\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.\r\n\r\nWhy choose product?\r\nCreat by cotton fibric with soft and smooth\r\nSimple, Configurable (e.g. size, color, etc.), bundled\r\nDownloadable/Digital Products, Virtual Products\r\nSample Number List\r\nCreate Store-specific attrittbutes on the fly\r\nSimple, Configurable (e.g. size, color, etc.), bundled\r\nDownloadable/Digital Products, Virtual Products\r\nLining\r\n100% Polyester, Main: 100% Polyester.', 46.00, 78.00, 'VNRG', 'instock', 1, 78, '1725163632.jpg', '1725163632-1.jpg', 7, 5, '2024-09-01 04:07:13', '2024-09-02 00:04:26'),
(4, 'McLaren 765 LT juguete', 'mclaren-765-lt-juguete', 'McLaren 765 LT juguete', '<p>McLaren 765 LT juguete</p>', 50.50, 65.00, 'MCLREAN-765', 'instock', 1, 78, '1728407667.jpg', '1728407667-1.jpg', 6, 12, '2024-10-08 17:13:11', '2024-10-08 17:14:33'),
(5, 'MCLARENS TEST', 'mclarens-test', 'MCLARENS TEST', 'MCLARENS TES', 12.00, 14.00, 'MCLTS', 'instock', 0, 78, '1728846924.png', '1728844994-1.png,1728844994-2.png', 2, 12, '2024-10-13 18:43:17', '2024-10-15 13:58:46');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('BkFH1nkMH7NO2ja1uwTH57JHVVpPwJqS3RkFFvw2', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiYjdqWHA0Q1Z5clVHV21YcDRHQ2wzUTc3TkltZ0xPRmxON3Flc2J4biI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czo0OiJhdXRoIjthOjE6e3M6MjE6InBhc3N3b3JkX2NvbmZpcm1lZF9hdCI7aToxNzI4OTQ0OTE5O319', 1728954149),
('s1cDWGgd6To0FbVOP3kvjuPLObanE13Rtc6c8Wwv', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiVjdjZFpaWThudzlLSUE0TG5ycExBT0VUc0JDbGUxT2RpRVZzYW1QNiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czo0OiJhdXRoIjthOjE6e3M6MjE6InBhc3N3b3JkX2NvbmZpcm1lZF9hdCI7aToxNzI5MDAwMDk0O319', 1729000893);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slides`
--

CREATE TABLE `slides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tagline` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `slides`
--

INSERT INTO `slides` (`id`, `tagline`, `title`, `subtitle`, `link`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Lema slide 1', 'Título slide  1', 'Subtítulo slide   1', 'http://127.0.0.1:8000/shop', '1728846904.png', 1, '2024-10-13 01:50:37', '2024-10-13 19:15:05'),
(2, 'Lema slide 2', 'Título slide 2', 'Subtítulo slide 2', 'http://127.0.0.1:8000/shop', '1728846462.png', 1, '2024-10-13 18:32:18', '2024-10-13 19:07:42'),
(3, 'Lema slide 3', 'Título slide 3', 'Subtítulo slide 3', 'http://127.0.0.1:8000/shop', '1728846449.png', 1, '2024-10-13 18:32:56', '2024-10-13 19:07:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `mode` enum('cod','card','paypal') NOT NULL,
  `status` enum('pending','approved','declined','refunded') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `transactions`
--

INSERT INTO `transactions` (`id`, `user_id`, `order_id`, `mode`, `status`, `created_at`, `updated_at`) VALUES
(1, 4, 1, 'cod', 'approved', '2024-10-11 20:25:37', '2024-10-12 21:59:14'),
(2, 4, 2, 'cod', 'pending', '2024-10-13 21:26:23', '2024-10-13 21:26:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `utype` varchar(255) NOT NULL DEFAULT 'USR' COMMENT 'ADM for admin and USR for user or customer',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `email_verified_at`, `password`, `utype`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Abraham Rico', 'ricoabraham879@gmail.com', '924575577', NULL, '$2y$12$vPWO6nDZ6hrDgw2cCkL7Me/hD76oarU2uSZBp1uJz91eEL3K70H3i', 'ADM', NULL, '2024-07-24 06:54:51', '2024-07-24 06:54:51'),
(2, 'Ana', 'ana@gmail.com', '123456789', NULL, '$2y$12$XQyfoajJS7AYkbvsdzwOeeAeFDBgt1J2Wor24Y63FQH9xrD.R7TXS', 'USR', NULL, '2024-07-24 07:05:59', '2024-07-24 07:05:59'),
(3, 'Gustavo', 'gustavo@gmail.com', '123456783', NULL, '$2y$12$NLr2qsyOLTJQGSDMcOMCBOksEIxjrXD75b6fym8boruAtWwSk9paC', 'USR', NULL, '2024-10-08 15:47:35', '2024-10-08 15:47:35'),
(4, 'Britney', 'britney@gmail.com', '234567812', NULL, '$2y$12$rikpSZ7s2FRT4bCgUxXagunPYzgWe0n1283gr.ZBBzayHLZzZXpjK', 'USR', NULL, '2024-10-08 15:49:44', '2024-10-08 15:49:44');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `addresses_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brands_slug_unique` (`slug`);

--
-- Indices de la tabla `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indices de la tabla `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indices de la tabla `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `coupuns_code_unique` (`code`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indices de la tabla `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `month_names`
--
ALTER TABLE `month_names`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_product_id_foreign` (`product_id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_brand_id_foreign` (`brand_id`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indices de la tabla `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_user_id_foreign` (`user_id`),
  ADD KEY `transactions_order_id_foreign` (`order_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_mobile_unique` (`mobile`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `month_names`
--
ALTER TABLE `month_names`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `slides`
--
ALTER TABLE `slides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `addresses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `transactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
