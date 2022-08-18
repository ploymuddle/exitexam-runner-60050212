-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2021 at 10:26 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project6005212`
--

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
(1, '2021_03_20_183308_create_students_table', 1),
(2, '2021_03_21_072936_create_runners_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `runners`
--

CREATE TABLE `runners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `runnerid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `old` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `km` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `runners`
--

INSERT INTO `runners` (`id`, `runnerid`, `fname`, `lname`, `old`, `km`, `created_at`, `updated_at`) VALUES
(1, 'GYG255', 'พลอยไพลิน', 'ทองมาก', '17', 0, '2021-03-21 01:04:03', '2021-03-21 01:04:03'),
(2, 'MCJ120', 'ศศิวิมล', 'บุญประเสริฐ', '17', 10, '2021-03-21 01:20:39', '2021-03-21 01:20:39'),
(3, 'IEV906', 'พลอยไพลิน', 'ทองมาก', '17', 0, '2021-03-21 01:23:35', '2021-03-21 01:23:35'),
(4, 'HCU378', 'พลอยไพลิน', 'บุญประเสริฐ', '17', 0, '2021-03-21 01:24:03', '2021-03-21 01:24:03'),
(5, 'OPR333', 'พลอยไพลิน', 'บุญประเสริฐ', '17', 0, '2021-03-21 01:24:56', '2021-03-21 01:24:56'),
(6, 'OWN601', 'พลอยไพลิน', 'บุญประเสริฐ', '17', 0, '2021-03-21 01:26:02', '2021-03-21 01:26:02'),
(7, 'IVG211', '10', 'บุญประเสริฐ', '17', 0, '2021-03-21 01:29:02', '2021-03-21 01:29:02'),
(8, 'QHY418', 'ศศิวิมล', 'ทองมาก', '17', 10, '2021-03-21 01:29:40', '2021-03-21 01:29:40'),
(9, 'INX239', 'ศศิวิมล', 'ทองมาก', '17', 0, '2021-03-21 01:30:18', '2021-03-21 01:30:18'),
(10, 'AJJ702', 'พลอยไพลิน', 'บุญประเสริฐ', '17', 0, '2021-03-21 01:53:40', '2021-03-21 01:53:40'),
(11, 'CCY025', 'พลอยไพลิน', 'บุญประเสริฐ', '17', 0, '2021-03-21 01:53:46', '2021-03-21 01:53:46'),
(12, 'SEW893', '1234', 'บุญประเสริฐ', '17', 0, '2021-03-21 02:03:50', '2021-03-21 02:03:50');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `student_id`, `fname`, `lname`, `year`) VALUES
(1, '60050111', 'อานันท์', 'หว่อง', 4),
(2, '63050222', 'วนรัตน์', 'รัศมีรัตน์', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `runners`
--
ALTER TABLE `runners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_student_id_unique` (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `runners`
--
ALTER TABLE `runners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
