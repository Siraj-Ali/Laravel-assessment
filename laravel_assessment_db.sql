-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2025 at 03:05 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_assessment_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) DEFAULT 'text',
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Category1', 1, '2024-06-22 06:37:37', '2024-06-22 06:37:37'),
(2, 'Category2', 1, '2024-06-22 06:37:37', '2024-06-22 06:37:37'),
(3, 'Category4', 1, '2024-06-22 06:37:37', '2024-06-22 06:37:37'),
(4, 'Category5', 1, '2024-06-22 06:37:37', '2024-06-22 06:37:37'),
(5, 'Category6', 1, '2024-06-22 06:37:37', '2024-06-22 06:37:37'),
(6, 'Category7', 1, '2024-06-22 06:37:37', '2024-06-22 06:37:37'),
(7, 'Category8', 1, '2024-06-22 06:37:37', '2024-06-22 06:37:37'),
(8, 'Category9', 1, '2024-06-22 06:37:37', '2024-06-22 06:37:37'),
(9, 'Category10', 1, '2024-06-22 06:37:37', '2024-06-22 06:37:37'),
(10, 'Category11', 1, '2024-06-22 06:37:37', '2024-06-22 06:37:37'),
(11, 'Category12', 1, '2024-06-22 06:37:37', '2024-06-22 06:37:37');

-- --------------------------------------------------------

--
-- Table structure for table `category_tasks`
--

CREATE TABLE `category_tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `task_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_tasks`
--

INSERT INTO `category_tasks` (`id`, `category_id`, `task_id`, `created_at`, `updated_at`) VALUES
(1, 3, 8, '2024-06-23 09:12:40', '2024-06-23 09:12:40'),
(2, 4, 8, '2024-06-23 09:12:40', '2024-06-23 09:12:40'),
(3, 4, 9, '2024-06-23 09:13:52', '2024-06-23 09:13:52'),
(4, 5, 9, '2024-06-23 09:13:52', '2024-06-23 09:13:52'),
(5, 6, 9, '2024-06-23 09:13:52', '2024-06-23 09:13:52'),
(6, 7, 9, '2024-06-23 09:13:52', '2024-06-23 09:13:52'),
(7, 8, 9, '2024-06-23 09:13:52', '2024-06-23 09:13:52'),
(10, 11, 11, '2024-06-23 09:24:05', '2024-06-23 09:24:05'),
(12, 1, 10, '2024-06-23 12:56:18', '2024-06-23 12:56:18'),
(13, 2, 10, '2024-06-23 12:56:18', '2024-06-23 12:56:18');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `url` varchar(255) NOT NULL,
  `imagable_type` varchar(255) NOT NULL,
  `imagable_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `url`, `imagable_type`, `imagable_id`, `created_at`, `updated_at`) VALUES
(1, 'https://via.placeholder.com/550x550.png/00aa88?text=et', 'App\\Models\\User', 2, '2024-11-30 16:47:39', '2024-11-30 16:47:39'),
(2, 'https://via.placeholder.com/550x550.png/001144?text=qui', 'App\\Models\\User', 5, '2024-11-30 16:47:39', '2024-11-30 16:47:39'),
(3, 'https://via.placeholder.com/550x550.png/0000cc?text=nihil', 'App\\Models\\taskModel', 9, '2024-11-30 16:47:39', '2024-11-30 16:47:39'),
(4, 'https://via.placeholder.com/550x550.png/003311?text=ex', 'App\\Models\\taskModel', 8, '2024-11-30 16:47:39', '2024-11-30 16:47:39'),
(5, 'https://via.placeholder.com/550x550.png/008822?text=corrupti', 'App\\Models\\taskModel', 10, '2024-11-30 16:47:39', '2024-11-30 16:47:39'),
(6, 'https://via.placeholder.com/550x550.png/00dd00?text=tempora', 'App\\Models\\User', 5, '2024-11-30 16:47:39', '2024-11-30 16:47:39'),
(7, 'https://via.placeholder.com/550x550.png/002200?text=et', 'App\\Models\\User', 1, '2024-11-30 16:47:39', '2024-11-30 16:47:39'),
(8, 'https://via.placeholder.com/550x550.png/00ffff?text=dolore', 'App\\Models\\User', 5, '2024-11-30 16:47:39', '2024-11-30 16:47:39'),
(9, 'https://via.placeholder.com/550x550.png/0099dd?text=qui', 'App\\Models\\taskModel', 9, '2024-11-30 16:47:39', '2024-11-30 16:47:39'),
(10, 'https://via.placeholder.com/550x550.png/00cc22?text=reprehenderit', 'App\\Models\\taskModel', 9, '2024-11-30 16:47:39', '2024-11-30 16:47:39'),
(11, 'https://via.placeholder.com/550x550.png/00cc33?text=harum', 'App\\Models\\User', 6, '2024-11-30 16:47:39', '2024-11-30 16:47:39'),
(12, 'https://via.placeholder.com/550x550.png/00cc44?text=quos', 'App\\Models\\taskModel', 11, '2024-11-30 16:47:39', '2024-11-30 16:47:39'),
(13, 'https://via.placeholder.com/550x550.png/002233?text=ut', 'App\\Models\\User', 3, '2024-11-30 16:47:39', '2024-11-30 16:47:39'),
(14, 'https://via.placeholder.com/550x550.png/00ffdd?text=quod', 'App\\Models\\User', 2, '2024-11-30 16:47:39', '2024-11-30 16:47:39'),
(15, 'https://via.placeholder.com/550x550.png/0099aa?text=dicta', 'App\\Models\\User', 6, '2024-11-30 16:47:39', '2024-11-30 16:47:39'),
(16, 'https://via.placeholder.com/550x550.png/003344?text=accusantium', 'App\\Models\\taskModel', 8, '2024-11-30 16:47:39', '2024-11-30 16:47:39'),
(17, 'https://via.placeholder.com/550x550.png/00dd00?text=velit', 'App\\Models\\taskModel', 11, '2024-11-30 16:47:39', '2024-11-30 16:47:39'),
(18, 'https://via.placeholder.com/550x550.png/0022ff?text=esse', 'App\\Models\\User', 2, '2024-11-30 16:47:39', '2024-11-30 16:47:39'),
(19, 'https://via.placeholder.com/550x550.png/008822?text=nulla', 'App\\Models\\User', 1, '2024-11-30 16:47:39', '2024-11-30 16:47:39'),
(20, 'https://via.placeholder.com/550x550.png/005588?text=quis', 'App\\Models\\taskModel', 11, '2024-11-30 16:47:39', '2024-11-30 16:47:39'),
(21, 'https://via.placeholder.com/550x550.png/0099ee?text=recusandae', 'App\\Models\\taskModel', 9, '2024-11-30 16:47:39', '2024-11-30 16:47:39'),
(22, 'https://via.placeholder.com/550x550.png/00cc22?text=sunt', 'App\\Models\\taskModel', 11, '2024-11-30 16:47:39', '2024-11-30 16:47:39'),
(23, 'https://via.placeholder.com/550x550.png/0066dd?text=ut', 'App\\Models\\taskModel', 8, '2024-11-30 16:47:39', '2024-11-30 16:47:39'),
(24, 'https://via.placeholder.com/550x550.png/00aabb?text=est', 'App\\Models\\User', 5, '2024-11-30 16:47:39', '2024-11-30 16:47:39'),
(25, 'https://via.placeholder.com/550x550.png/00aaaa?text=impedit', 'App\\Models\\taskModel', 9, '2024-11-30 16:47:39', '2024-11-30 16:47:39'),
(26, 'https://via.placeholder.com/550x550.png/00bb22?text=animi', 'App\\Models\\User', 2, '2024-11-30 16:47:39', '2024-11-30 16:47:39'),
(27, 'https://via.placeholder.com/550x550.png/005511?text=dolorum', 'App\\Models\\User', 6, '2024-11-30 16:47:39', '2024-11-30 16:47:39'),
(28, 'https://via.placeholder.com/550x550.png/005577?text=sequi', 'App\\Models\\taskModel', 9, '2024-11-30 16:47:39', '2024-11-30 16:47:39'),
(29, 'https://via.placeholder.com/550x550.png/002233?text=voluptas', 'App\\Models\\User', 5, '2024-11-30 16:47:39', '2024-11-30 16:47:39'),
(30, 'https://via.placeholder.com/550x550.png/0099aa?text=officiis', 'App\\Models\\taskModel', 10, '2024-11-30 16:47:39', '2024-11-30 16:47:39'),
(31, 'https://via.placeholder.com/550x550.png/00cccc?text=maxime', 'App\\Models\\taskModel', 8, '2024-11-30 16:47:39', '2024-11-30 16:47:39'),
(32, 'https://via.placeholder.com/550x550.png/008855?text=facilis', 'App\\Models\\User', 2, '2024-11-30 16:47:39', '2024-11-30 16:47:39'),
(33, 'https://via.placeholder.com/550x550.png/00bb11?text=beatae', 'App\\Models\\User', 6, '2024-11-30 16:47:39', '2024-11-30 16:47:39'),
(34, 'https://via.placeholder.com/550x550.png/00eedd?text=architecto', 'App\\Models\\taskModel', 9, '2024-11-30 16:47:39', '2024-11-30 16:47:39'),
(35, 'https://via.placeholder.com/550x550.png/00bbee?text=debitis', 'App\\Models\\taskModel', 11, '2024-11-30 16:47:39', '2024-11-30 16:47:39'),
(36, 'https://via.placeholder.com/550x550.png/0066cc?text=non', 'App\\Models\\taskModel', 9, '2024-11-30 16:47:39', '2024-11-30 16:47:39'),
(37, 'https://via.placeholder.com/550x550.png/00ff99?text=molestiae', 'App\\Models\\User', 5, '2024-11-30 16:47:39', '2024-11-30 16:47:39'),
(38, 'https://via.placeholder.com/550x550.png/008888?text=ab', 'App\\Models\\taskModel', 10, '2024-11-30 16:47:39', '2024-11-30 16:47:39'),
(39, 'https://via.placeholder.com/550x550.png/001166?text=id', 'App\\Models\\User', 2, '2024-11-30 16:47:39', '2024-11-30 16:47:39'),
(40, 'https://via.placeholder.com/550x550.png/00cc66?text=vel', 'App\\Models\\taskModel', 8, '2024-11-30 16:47:39', '2024-11-30 16:47:39'),
(41, 'https://via.placeholder.com/550x550.png/00aa00?text=fugiat', 'App\\Models\\taskModel', 11, '2024-11-30 16:47:39', '2024-11-30 16:47:39'),
(42, 'https://via.placeholder.com/550x550.png/0011ff?text=fugiat', 'App\\Models\\taskModel', 11, '2024-11-30 16:47:39', '2024-11-30 16:47:39'),
(43, 'https://via.placeholder.com/550x550.png/00bb99?text=eum', 'App\\Models\\User', 5, '2024-11-30 16:47:39', '2024-11-30 16:47:39'),
(44, 'https://via.placeholder.com/550x550.png/002222?text=totam', 'App\\Models\\User', 4, '2024-11-30 16:47:39', '2024-11-30 16:47:39'),
(45, 'https://via.placeholder.com/550x550.png/00ddff?text=necessitatibus', 'App\\Models\\User', 5, '2024-11-30 16:47:39', '2024-11-30 16:47:39'),
(46, 'https://via.placeholder.com/550x550.png/00dd99?text=dolor', 'App\\Models\\taskModel', 9, '2024-11-30 16:47:39', '2024-11-30 16:47:39'),
(47, 'https://via.placeholder.com/550x550.png/0000dd?text=est', 'App\\Models\\User', 5, '2024-11-30 16:47:39', '2024-11-30 16:47:39'),
(48, 'https://via.placeholder.com/550x550.png/00bb88?text=neque', 'App\\Models\\taskModel', 8, '2024-11-30 16:47:39', '2024-11-30 16:47:39'),
(49, 'https://via.placeholder.com/550x550.png/0077ee?text=aperiam', 'App\\Models\\User', 6, '2024-11-30 16:47:39', '2024-11-30 16:47:39'),
(50, 'https://via.placeholder.com/550x550.png/00dd77?text=commodi', 'App\\Models\\taskModel', 9, '2024-11-30 16:47:39', '2024-11-30 16:47:39');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2023_09_29_192727_create_jobs_table', 1),
(9, '2024_06_22_093954_create_categories_table', 2),
(10, '2024_06_22_094353_create_tasks_table', 2),
(11, '2024_06_22_100612_create_category_tasks_table', 3),
(13, '2024_06_22_101544_add_priority_column_to_task', 4),
(15, '2024_06_22_162604_create_roles_table', 5),
(16, '2019_12_14_000001_create_personal_access_tokens_table', 6),
(17, '2024_06_22_162645_add_role_id_column_to_user', 7),
(18, '2024_11_30_172856_create_post_comments_table', 7),
(19, '2024_11_30_195508_create_images_table', 8),
(20, '2025_02_03_144754_create_table_products', 9);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
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
-- Table structure for table `post_comments`
--

CREATE TABLE `post_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `task_id` bigint(20) UNSIGNED NOT NULL,
  `comment` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_comments`
--

INSERT INTO `post_comments` (`id`, `task_id`, `comment`, `created_at`, `updated_at`) VALUES
(1, 8, 'Great Work on time delivered', '2024-11-30 19:10:03', '2024-11-30 19:10:03'),
(2, 9, 'Working fine now good', NULL, NULL),
(3, 8, 'We are happy with the task', '2024-11-30 19:10:03', '2024-11-30 19:10:03'),
(4, 11, 'Awesome', NULL, NULL),
(5, 10, 'Testing commnet', '2024-11-30 19:47:52', '2024-11-30 19:47:52'),
(6, 10, 'Nice Comment', '2024-11-29 19:47:52', '2024-11-29 19:47:52');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,0) NOT NULL,
  `quantity` int(250) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `price`, `quantity`) VALUES
(1, 'Shoes', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\n', 12, 5),
(2, 'Title', 'This is description', 11, 15);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2024-06-22 16:35:05', '2024-06-22 16:35:05'),
(2, 'Editor', '2024-06-22 16:35:05', '2024-06-22 16:35:05'),
(3, 'Viewer', '2024-06-22 16:35:56', '2024-06-22 16:35:56');

-- --------------------------------------------------------

--
-- Table structure for table `table_products`
--

CREATE TABLE `table_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `description` varchar(255) NOT NULL,
  `rating` double NOT NULL,
  `is_available` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `priority` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `user_id`, `title`, `description`, `priority`, `status`, `created_at`, `updated_at`) VALUES
(8, 1, 'Laravel Task', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in', 2, 1, '2024-06-23 09:12:40', '2024-06-23 09:12:40'),
(9, 1, 'Java Framework', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover', 1, 1, '2024-06-23 09:13:52', '2024-06-23 09:13:52'),
(10, 3, 'C++ Task', 'If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', 4, 0, '2024-06-23 09:23:14', '2024-06-23 12:56:18'),
(11, 1, 'Python Task', 'If you use this site regularly and would like to help keep the site on the Internet, please consider donating a small sum to help pay for the hosting and bandwidth bill. There is no minimum donation, any sum is appreciated - click here to donate using PayPal. Thank you for your support', 5, 1, '2024-06-23 09:24:05', '2024-06-23 09:24:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Siraj Ali', 'ali12@gmail.com', NULL, '$2y$10$tMqKLm6.ZcfRYwMX/Rls2uwYE9fBPXQmIndhcudzazBe4P2X9xi7.', 1, 'ZLipKvKWEljvL8M4vrvNUK4yPPv8OvDQ5hcmDNpqU1RTFHuVMo42UCdw4OtJ', '2024-06-22 06:49:21', '2024-06-22 06:49:21'),
(2, 'Asadd Ali', 'asad@gmail.com', NULL, '$2y$10$Vzx6HJTNNLXq8UoUvNwspeOiEzI7sPK8K.rV80z0CriE2lPPAIFV2', 2, NULL, '2024-06-22 14:44:05', '2024-06-22 16:31:09'),
(3, 'Admin', 'admin12@gmail.com', NULL, '$2y$10$WxjF9g9yOH5c7/700r.rEu/zLqZi3cT7kttxaIP6pMT8UkXYjL4KC', 1, NULL, '2024-06-23 12:55:49', '2024-06-23 12:55:49'),
(4, 'test', 'test@gmail.com', NULL, '$2y$10$HXzrM4XF4ihXJj1m/.40OerAAKeO84Du.5MqSrufwgrQxD8m18QTS', 2, NULL, '2024-10-04 06:52:46', '2024-10-04 06:52:46'),
(5, 'asad', 'asad12@gmail.com', NULL, '$2y$10$67NGJHihRqTvZmpz12IEMe5eSxdQgy1zUWAHfe5FuuF4Sc65/RlM6', 1, NULL, '2024-10-09 07:23:32', '2024-10-09 07:23:32'),
(6, 'admin12', 'admin@gmail.com', NULL, '$2y$10$qDe254AvAcCvuu1avGXsDukRMC.jx7J.pDp7eucepQtZKtH8CKghy', 1, NULL, '2024-11-09 10:13:47', '2024-11-09 10:13:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_tasks`
--
ALTER TABLE `category_tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_tasks_category_id_index` (`category_id`),
  ADD KEY `category_tasks_task_id_index` (`task_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_imagable_type_imagable_id_index` (`imagable_type`,`imagable_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `post_comments`
--
ALTER TABLE `post_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_comments_task_id_index` (`task_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_products`
--
ALTER TABLE `table_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tasks_user_id_index` (`user_id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `category_tasks`
--
ALTER TABLE `category_tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_comments`
--
ALTER TABLE `post_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `table_products`
--
ALTER TABLE `table_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category_tasks`
--
ALTER TABLE `category_tasks`
  ADD CONSTRAINT `category_tasks_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `category_tasks_task_id_foreign` FOREIGN KEY (`task_id`) REFERENCES `tasks` (`id`);

--
-- Constraints for table `post_comments`
--
ALTER TABLE `post_comments`
  ADD CONSTRAINT `post_comments_task_id_foreign` FOREIGN KEY (`task_id`) REFERENCES `tasks` (`id`);

--
-- Constraints for table `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `tasks_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
