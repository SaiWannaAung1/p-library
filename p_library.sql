-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2019 at 05:45 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `p_library`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(10) UNSIGNED NOT NULL,
  `Title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pdf` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_search` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `Title`, `slug`, `type`, `img`, `pdf`, `post_search`, `author`, `created_at`, `updated_at`) VALUES
(1, 'TarTay', '5d4dacc5cbb6a', 'Business', '5d4f029b187d5_19-04-04-ghost-girl-landscape.jpg', '5d4f029b187d5_19-04-04-ghost-girl-landscape.jpg', 'TarTay', 'Tech World', '2019-08-09 10:56:29', '2019-08-10 11:14:59'),
(2, 'TarTay', '5d4ee4e433dcf', 'Business', '5d4ee4e433dda_19-04-04-ghost-girl-landscape.jpg', '5d4ee4e4349fc_Market-research.pdf', 'TarTay', 'Tech World', '2019-08-10 09:08:12', '2019-08-10 09:08:12');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(2, 'Business', '2019-08-07 03:25:24', '2019-08-07 03:25:24'),
(3, 'TaYel', '2019-08-11 06:48:09', '2019-08-11 06:48:09'),
(4, 'Software Engineer', '2019-08-11 06:48:24', '2019-08-11 06:48:24'),
(5, 'Network Administrator', '2019-08-11 06:48:35', '2019-08-11 06:48:35'),
(6, 'System Analysis', '2019-08-11 06:48:46', '2019-08-11 06:48:46');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'non_user',
  `Content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `email`, `Content`, `created_at`, `updated_at`) VALUES
(6, 'non_user', 'Hello', '2019-08-14 09:12:29', '2019-08-14 09:12:29'),
(7, 'non_user', 'Tranfar', '2019-08-14 09:13:09', '2019-08-14 09:13:09'),
(8, 'non_user', 'Data', '2019-08-14 09:13:51', '2019-08-14 09:13:51'),
(9, 'non_user', 'DD', '2019-08-14 09:35:20', '2019-08-14 09:35:20'),
(10, 'saiwannaaung095@gmail.com', 'ee', '2019-08-14 09:37:38', '2019-08-14 09:37:38');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(233) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `answer`, `question`, `slug`, `created_at`, `updated_at`) VALUES
(2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Hello World1', '5d48f8b4c93ce', '2019-08-05 21:19:08', '2019-08-07 03:13:00'),
(3, 'Laravel applications which depend heavily on database interaction using Laravel Eloquent often create performance issues.', 'Hello World111', '5d5becb6b9e11', '2019-08-20 06:21:02', '2019-08-20 06:21:02');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_04_055756_create_post_table', 2),
(5, '2019_08_06_022645_create_faqs_table', 3),
(6, '2014_10_12_000000_create_users_table', 4),
(7, '2019_08_07_041807_create_categories_table', 5),
(8, '2019_08_07_164659_create_contacts_table', 6),
(10, '2019_08_09_130438_create_books_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('maisoneka@gmail.com', '$2y$10$VSDBUv.arDRfWzp2ACSUHeO1hZFW73RyFwJ3XMD2uxPR.7bAC7lIa', '2019-08-06 00:07:19');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `imgs` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_content2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_search` varchar(222) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_summery` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `slug`, `type`, `imgs`, `post_content2`, `post_search`, `post_summery`, `author`, `created_at`, `updated_at`) VALUES
(4, 'TarTay', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', '5d4daa847f3cc', 'Business', '5d4daa847f3d6_19-04-04-ghost-girl-landscape.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'Lorem Ipsum', 'Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions', 'Tech World', '2019-08-09 10:46:52', '2019-08-09 10:46:52'),
(5, 'TarTay', 'We have situation in our company where we want to redirect users who are looking to sign in through another username but the problem is that we have an SSL certificate and an .htaccess rule that is redirecting all user requests from HTTP to HTTPs (index.php). So to reiterate, we have the following rules:', '5d581d7b3c79a', 'Business', '5d581d7b3c7a4_Screenshot (206).png', 'We have situation in our company where we want to redirect users who are looking to sign in through another username but the problem is that we have an SSL certificate and an .htaccess rule that is redirecting all user requests from HTTP to HTTPs (index.php). So to reiterate, we have the following rules:', 'Lorem Ipsum', '.htaccess rule that is redirecting all user requests from HTTP to HTTPs (index.php). So to reiterate, we have the following rules:', 'dkfjkasjfkldaf', '2019-08-17 09:00:03', '2019-08-17 09:00:03'),
(6, 'TarTay2', 'Now, what we have just done above?\r\n\r\n    Firstly we target the product based on the productId, exactly same query as the first one.\r\n    Next, we join the results with category table using the category to product’s category. First query grabbed the Product model which provides us with the access to the catgeory attribute.\r\n    We select the product id and category name.\r\n    Finally, we use first() method, which ensures that once it finds a single category which statisfy the requirement, it will resturn the category name instantly.\r\n\r\nThat’s it. You know have a better understanding of how left join works and you can combine the query to make a single request to the database. It looks fairly simple but using the same method you can optimize the complex queries dealing with multiple tables.\r\n\r\nIf you have any comments or suggestion, or you find any mistake please let me know by submitting a comment below.', '5d5bf17512283', 'Business', '5d5bf1751228d_19-04-04-ghost-girl-landscape.jpg', 'Now, what we have just done above?\r\n\r\n    Firstly we target the product based on the productId, exactly same query as the first one.\r\n    Next, we join the results with category table using the category to product’s category. First query grabbed the Product model which provides us with the access to the catgeory attribute.\r\n    We select the product id and category name.\r\n    Finally, we use first() method, which ensures that once it finds a single category which statisfy the requirement, it will resturn the category name instantly.\r\n\r\nThat’s it. You know have a better understanding of how left join works and you can combine the query to make a single request to the database. It looks fairly simple but using the same method you can optimize the complex queries dealing with multiple tables.\r\n\r\nIf you have any comments or suggestion, or you find any mistake please let me know by submitting a comment below.', 'simple', 'If you have any comments or suggestion, or you find any mistake please let me know by submitting a comment below.', 'suggestion', '2019-08-20 06:41:17', '2019-08-20 06:41:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `admin`) VALUES
(1, 'saiwannaaung', 'saiwannaaung095@gmail.com', NULL, '$2y$10$ow.cAO6iko9Q7SduezBtgeqynNo83VDbJ4Tp57dsHMrh0ovdb1cw6', 'n386hDkFPeJqgNQql9j0Q59hjWcPL5bOGmiqX1ChHdSWcrshejRQ9ibAYGkC', '2019-08-06 08:10:57', '2019-08-06 08:10:57', 1),
(2, 'Maisone', 'maisoneka@gmail.com', NULL, '$2y$10$9Ai/O4QptmC2UQCnMeBvu.mx/8JAxjGXTNGHrt88/L9z6Lvv78/7m', NULL, '2019-08-15 05:51:33', '2019-08-15 05:51:33', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
