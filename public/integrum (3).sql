-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 02, 2023 at 03:47 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `integrum`
--

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

CREATE TABLE `cases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `case_title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cases`
--

INSERT INTO `cases` (`id`, `case_title`, `description`, `user_id`, `employee_id`, `created_at`, `updated_at`) VALUES
(2, 'This is a new case from a user', 'This is a new case from a user', 1, 3, NULL, NULL),
(3, 'Road Accident Case From Masud Rana', 'Road Accident Case From Masud Rana', 1, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `case_files`
--

CREATE TABLE `case_files` (
  `id` int(11) NOT NULL,
  `case_id` int(11) NOT NULL,
  `meta` varchar(1000) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `case_files`
--

INSERT INTO `case_files` (`id`, `case_id`, `meta`, `employee_id`, `created_at`) VALUES
(6, 1, 'Tjónstilkynning', 4, '2023-02-02 11:39:58'),
(10, 1, 'Verkbeiðni', 4, '2023-02-02 11:39:58'),
(11, 2, 'Verkbeiðni', 4, '2023-02-02 14:15:51'),
(12, 2, 'Tjónstilkynning', 4, '2023-02-02 14:22:08'),
(13, 2, 'Lögregluskýrslur', 4, '2023-02-02 14:22:10'),
(14, 2, 'Áverkavottorð', 4, '2023-02-02 14:22:11'),
(15, 2, 'Skýrsla', 4, '2023-02-02 14:22:11'),
(16, 3, 'Verkbeiðni', 4, '2023-02-02 14:22:30');

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
-- Table structure for table `file_uploads`
--

CREATE TABLE `file_uploads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `file_extention` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `file_uploads`
--

INSERT INTO `file_uploads` (`id`, `title`, `file`, `file_extention`, `user_id`, `created_at`, `updated_at`) VALUES
(4, 'Verkbeiðni', 'uploads/fixations.pdf', 'pdf', 1, '2023-01-23 03:50:34', NULL),
(5, 'Tjónstilkynning', 'uploads/country-1.jpg', 'jpg', 1, '2023-01-23 04:03:21', NULL);

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
(21, '2014_10_12_000000_create_users_table', 1),
(22, '2014_10_12_100000_create_password_resets_table', 1),
(23, '2019_08_19_000000_create_failed_jobs_table', 1),
(24, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(25, '2023_01_19_104004_create_roles_table', 1),
(26, '2023_01_23_085552_create_file_uploads_table', 2),
(28, '2023_01_23_112509_create_cases_table', 3);

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
  `role_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`, `created_at`, `updated_at`) VALUES
(1, 'user', '2023-01-31 11:45:49', NULL),
(2, 'employee', '2023-01-31 11:45:49', NULL),
(3, 'Admin', '2023-01-31 11:46:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `timeline`
--

CREATE TABLE `timeline` (
  `id` int(11) NOT NULL,
  `case_id` int(11) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `approve_date` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `timeline`
--

INSERT INTO `timeline` (`id`, `case_id`, `title`, `approve_date`) VALUES
(3, 1, 'Mál stofnað', '02.02.23'),
(4, 1, 'Tjónsstilkynning send', '02.02.25'),
(5, 1, 'Lögregluskýrsla barst', '02.02.2027'),
(6, 1, 'Áverkavottorð sent', NULL),
(7, 2, 'Mál stofnað', '02-02-2023'),
(8, 2, 'Tjónsstilkynning send', NULL),
(9, 2, 'Lögregluskýrsla barst', NULL),
(10, 2, 'Áverkavottorð sent', NULL),
(11, 3, 'Mál stofnað', '02-02-2022'),
(12, 3, 'Tjónsstilkynning send', '02-03-2022'),
(13, 3, 'Lögregluskýrsla barst', NULL),
(14, 3, 'Áverkavottorð sent', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `date_of_birth` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `language` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `roles` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `date_of_birth`, `phone_number`, `email`, `email_verified_at`, `language`, `website`, `location`, `password`, `roles`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Riad Hossain', 'Khan', '2023-01-18', '01953655424', 'riadkhan2367@gmail.com', NULL, 'asdasd', 'asdasd', 'admin@admin.com', '$2y$10$.HXQ8.fMX0IlpNlNLfmBDuybgzE5nAQe626OFqbMRcYtmohhAPWwK', '1', NULL, '2023-01-19 06:17:48', '2023-01-19 06:17:48'),
(3, 'Jhon', 'Martin', '2016-02-16', '01953655424', 'employee@employee.com', NULL, NULL, NULL, NULL, '$2y$10$yIou7wEn6De94FCtm5W2Ke30BuzLxi2k3QcL59c4K4SMXj0xtRWfO', '2', NULL, '2023-01-31 02:50:28', '2023-01-31 02:50:28'),
(4, 'admin', 'admin', '2023-01-19', '01953655424', 'admin@admin.com', NULL, NULL, NULL, 'admin@admin.com', '$2y$10$l60VWGOcHfAkFU/iY6e4L.76KyQK62MGFL5CLI1wmPvq4fpzqGui6', '3', NULL, '2023-01-31 04:52:28', '2023-01-31 04:52:28'),
(6, 'Masud', 'Rana', '2023-01-18', '01628132705', 'masud@gmail.com', NULL, 'English(US)', 'www.riadhossain.me', NULL, '$2y$10$zcRhdII9ocyFbzPdTUECEOSSrIowr5B7OJfP2OTyAqZ9PU1pYIbSG', '1', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cases`
--
ALTER TABLE `cases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `case_files`
--
ALTER TABLE `case_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `file_uploads`
--
ALTER TABLE `file_uploads`
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
  ADD PRIMARY KEY (`email`);

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timeline`
--
ALTER TABLE `timeline`
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
-- AUTO_INCREMENT for table `cases`
--
ALTER TABLE `cases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `case_files`
--
ALTER TABLE `case_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `file_uploads`
--
ALTER TABLE `file_uploads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

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
-- AUTO_INCREMENT for table `timeline`
--
ALTER TABLE `timeline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
