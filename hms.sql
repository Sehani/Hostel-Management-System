-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2022 at 03:46 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms`
--

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
-- Table structure for table `hostels`
--

CREATE TABLE `hostels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hostel_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_of_rooms` int(11) NOT NULL,
  `number_of_beds` int(11) NOT NULL,
  `available_rooms` int(11) NOT NULL,
  `available_beds` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hostels`
--

INSERT INTO `hostels` (`id`, `hostel_name`, `number_of_rooms`, `number_of_beds`, `available_rooms`, `available_beds`, `created_at`, `updated_at`) VALUES
(5, 'Galaxy', 6, 2, 0, 0, '2022-09-05 22:30:28', '2022-09-06 01:37:53'),
(6, 'Catteliya', 4, 3, 0, 0, '2022-09-05 22:31:25', '2022-09-06 02:57:54'),
(7, 'Kedella', 5, 2, 0, 0, '2022-09-05 22:31:45', '2022-09-06 02:22:38'),
(8, 'Samanala', 12, 3, 5, 13, '2022-09-05 22:32:04', '2022-09-06 02:58:41'),
(9, 'walawwa', 5, 3, 3, 7, '2022-09-05 22:50:01', '2022-09-06 02:58:41'),
(13, 'abc', 12, 12, 10, 118, '2022-09-06 02:56:53', '2022-09-06 02:57:54');

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
(5, '2022_09_05_125707_create_hostels_table', 1),
(6, '2022_09_05_144848_create_students_table', 1),
(7, '2022_09_05_171533_create_student_appeals_table', 1);

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
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reg_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hostel_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `reg_id`, `name`, `year`, `email`, `course`, `hostel_id`, `created_at`, `updated_at`) VALUES
(79, 'UWU/IIT/18/024', 'Sithumi', '3', 'studentadmin@studentadmin.com', 'IIT', '6', '2022-09-06 02:57:54', '2022-09-06 02:57:54'),
(80, 'UWU/CST/18/004', 'Gihani', '3', 'gihani@gmail.com', 'CST', '8', '2022-09-06 02:57:54', '2022-09-06 02:57:54'),
(81, 'UWU/MRT/20/019', 'Mayumi', '1', 'mayumi@gmail.com', 'MRT', '6', '2022-09-06 02:57:54', '2022-09-06 02:57:54'),
(82, 'UWU/SCT/18/027', 'Neesha', '3', 'neesha@gmail.com', 'SCT', '8', '2022-09-06 02:57:54', '2022-09-06 02:58:41'),
(83, 'UWU/ENM/20/039', 'Piyumi', '1', 'piyumi@gmail.com', 'ENM', '9', '2022-09-06 02:57:54', '2022-09-06 02:57:54'),
(84, 'UWU/HTE/20/059', 'Nipuni', '1', 'nipuni@gmail.com', 'THE', '8', '2022-09-06 02:57:54', '2022-09-06 02:57:54'),
(85, 'UWU/EAG/18/023', 'Ishara', '3', 'ishara@gmail.com', 'EAG', '6', '2022-09-06 02:57:54', '2022-09-06 02:57:54'),
(86, 'UWU/TEA/18/045', 'Roja', '3', 'roja@gmail.com', 'TEA', '6', '2022-09-06 02:57:54', '2022-09-06 02:57:54'),
(87, 'UWU/PLT/20/021', 'Fathima', '1', 'fathima@gmail.com', 'PLT', '6', '2022-09-06 02:57:54', '2022-09-06 02:57:54'),
(88, 'UWU/AQT/18/024', 'Nisansala', '3', 'nisansala@gmail.com', 'AQT', '13', '2022-09-06 02:57:54', '2022-09-06 02:57:54'),
(89, 'UWU/ANS/20/005', 'Dimali', '1', 'dimali@gmail.com', 'ANS', '8', '2022-09-06 02:57:54', '2022-09-06 02:57:54'),
(90, 'UWU/ET/18/017', 'Sanjana', '3', 'sanjana@gmail.com', 'ET', '13', '2022-09-06 02:57:54', '2022-09-06 02:57:54'),
(91, 'UWU/BBST/18/062', 'Dilmi', '3', 'dilmi@gmail.com', 'BBST', '9', '2022-09-06 02:57:54', '2022-09-06 02:57:54');

-- --------------------------------------------------------

--
-- Table structure for table `student_appeals`
--

CREATE TABLE `student_appeals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL,
  `reason` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_appeals`
--

INSERT INTO `student_appeals` (`id`, `student_id`, `reason`, `status`, `created_at`, `updated_at`) VALUES
(1, 14, 'sczfdxgggcccccccc', 2, '2022-09-05 22:54:51', '2022-09-05 22:55:27'),
(2, 14, 'sfdddddddddddddddddddddddddddd', 1, '2022-09-05 22:56:50', '2022-09-05 22:57:25'),
(3, 27, 'dsddddddddddddddddddd', 2, '2022-09-05 23:46:41', '2022-09-05 23:49:31'),
(4, 41, 'eeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee', 2, '2022-09-06 01:58:11', '2022-09-06 01:59:24'),
(5, 80, 'test', 2, '2022-09-06 03:00:22', '2022-09-06 03:02:46');

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
  `role` int(11) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, '$2y$10$XjpQICs0ebc19jKuyilU9eX/62okopW0uh9lRr/GhWvqZefPEODRi', 0, NULL, '2022-09-05 22:01:27', '2022-09-05 22:01:27'),
(2, 'Gihani', 'gihani@gmail.com', NULL, '$2y$10$abdnBTaw9CHD5VHSayEBtOiKm1aaPAZEKwyyNiUKcSWJwuWGUDOIi', 1, NULL, '2022-09-05 22:01:28', '2022-09-05 22:01:28'),
(3, 'warden', 'warden@gmail.com', NULL, '$2y$10$abdnBTaw9CHD5VHSayEBtOiKm1aaPAZEKwyyNiUKcSWJwuWGUDOIi', 2, NULL, NULL, NULL),
(4, 'Mayumi', 'mayumi@gmail.com\r\n', NULL, '$2y$10$abdnBTaw9CHD5VHSayEBtOiKm1aaPAZEKwyyNiUKcSWJwuWGUDOIi', 1, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hostels`
--
ALTER TABLE `hostels`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_appeals`
--
ALTER TABLE `student_appeals`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hostels`
--
ALTER TABLE `hostels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `student_appeals`
--
ALTER TABLE `student_appeals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
