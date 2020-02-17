-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2020 at 12:49 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ticketapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `agency`
--

CREATE TABLE `agency` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agency`
--

INSERT INTO `agency` (`id`, `name`, `address`, `contact`, `image_name`, `created_at`, `updated_at`) VALUES
(1, 'SR Travels', 'Dhaka', '017XXXXXXXX', 'srtravelsLogo.png', '2020-02-17 04:44:12', NULL),
(2, 'TR Travels', 'Dhaka', '017XXXXXXXX', 'trtravelsLogo.png', '2020-02-17 04:44:12', NULL),
(3, 'Manik', 'Dhaka', '017XXXXXXXX', 'maniktravelsLogo.png', '2020-02-17 04:44:12', NULL),
(4, 'Nabil', 'Dhaka', '017XXXXXXXX', 'nabiltravelsLogo.png', '2020-02-17 04:44:12', NULL),
(5, 'Hanif', 'Dhaka', '017XXXXXXXX', 'haniftravelsLogo.png', '2020-02-17 04:44:12', NULL),
(6, 'Alhamra', 'Dhaka', '017XXXXXXXX', 'alhamraLogo.png', '2020-02-17 04:44:12', NULL),
(7, 'Desh Travels', 'Dhaka', '017XXXXXXXX', 'deshtravelsLogo.png', '2020-02-17 04:44:12', NULL),
(8, 'Eagle Travels', 'Dhaka', '017XXXXXXXX', 'eagletravelsLogo.png', '2020-02-17 04:44:12', NULL),
(9, 'Ena Travels', 'Dhaka', '017XXXXXXXX', 'enatravelsLogo.png', '2020-02-17 04:44:12', NULL),
(10, 'Green Line Interprise', 'Dhaka', '017XXXXXXXX', 'greenlineLogo.png', '2020-02-17 04:44:12', NULL),
(11, 'Sakura Travels', 'Dhaka', '017XXXXXXXX', 'sakuratravelsLogo.png', '2020-02-17 04:44:12', NULL),
(12, 'S.Alom Travels', 'Dhaka', '017XXXXXXXX', 'salomtravelsLogo.png', '2020-02-17 04:44:12', NULL),
(13, 'Shohag Travels', 'Dhaka', '017XXXXXXXX', 'shohagtravelsLogo.png', '2020-02-17 04:44:12', NULL),
(14, 'Shymoli Travels', 'Dhaka', '017XXXXXXXX', 'shymolitravelsLogo.png', '2020-02-17 04:44:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `agency_id` bigint(20) NOT NULL,
  `route_id` bigint(20) NOT NULL,
  `bus_id` bigint(20) NOT NULL,
  `seat_id` bigint(20) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `persons_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `persons_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fare` int(11) NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Open',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `agency_id`, `route_id`, `bus_id`, `seat_id`, `date`, `time`, `persons_name`, `persons_number`, `fare`, `status`, `created_at`, `updated_at`) VALUES
(23, 1, 2, 10, 2, '2020-01-02', '10:10:00', 'Mr. Gentel Man', '01723659050', 650, 'Booked', '2020-02-17 05:05:21', '2020-02-17 05:05:21'),
(24, 1, 2, 10, 3, '2020-01-02', '10:10:00', 'Mr. Gentel Man', '01723659050', 650, 'Booked', '2020-02-17 05:05:21', '2020-02-17 05:05:21'),
(25, 1, 2, 10, 2, '2020-01-03', '10:10:00', 'Mr. Gentel Man', '01723659050', 650, 'Booked', '2020-02-17 05:05:25', '2020-02-17 05:05:25'),
(26, 1, 2, 10, 3, '2020-01-03', '10:10:00', 'Mr. Gentel Man', '01723659050', 650, 'Booked', '2020-02-17 05:05:25', '2020-02-17 05:05:25'),
(27, 1, 2, 10, 4, '2020-01-03', '10:10:00', 'Mr. Gentel Man', '01723659050', 650, 'Booked', '2020-02-17 05:05:25', '2020-02-17 05:05:25'),
(28, 1, 2, 10, 2, '2020-01-04', '10:10:00', 'Mr. Gentel Man', '01723659050', 650, 'Booked', '2020-02-17 05:05:28', '2020-02-17 05:05:28'),
(29, 1, 2, 10, 3, '2020-01-04', '10:10:00', 'Mr. Gentel Man', '01723659050', 650, 'Booked', '2020-02-17 05:05:28', '2020-02-17 05:05:28'),
(30, 1, 2, 10, 4, '2020-01-04', '10:10:00', 'Mr. Gentel Man', '01723659050', 650, 'Booked', '2020-02-17 05:05:28', '2020-02-17 05:05:28'),
(31, 1, 2, 10, 2, '2020-01-05', '10:10:00', 'Mr. Gentel Man', '01723659050', 650, 'Booked', '2020-02-17 05:05:33', '2020-02-17 05:05:33'),
(32, 1, 2, 10, 3, '2020-01-05', '10:10:00', 'Mr. Gentel Man', '01723659050', 650, 'Booked', '2020-02-17 05:05:33', '2020-02-17 05:05:33'),
(33, 1, 2, 10, 2, '2020-01-08', '10:10:00', 'Mr. Gentel Man', '01723659050', 650, 'Booked', '2020-02-17 05:05:45', '2020-02-17 05:05:45'),
(34, 1, 2, 10, 2, '2020-01-09', '10:10:00', 'Mr. Gentel Man', '01723659050', 650, 'Booked', '2020-02-17 05:05:49', '2020-02-17 05:05:49'),
(35, 1, 2, 10, 2, '2020-01-10', '10:10:00', 'Mr. Gentel Man', '01723659050', 650, 'Booked', '2020-02-17 05:07:09', '2020-02-17 05:07:09'),
(36, 1, 2, 10, 3, '2020-01-10', '10:10:00', 'Mr. Gentel Man', '01723659050', 650, 'Booked', '2020-02-17 05:07:09', '2020-02-17 05:07:09'),
(37, 1, 2, 10, 4, '2020-01-10', '10:10:00', 'Mr. Gentel Man', '01723659050', 650, 'Booked', '2020-02-17 05:07:09', '2020-02-17 05:07:09'),
(38, 1, 2, 10, 2, '2020-02-01', '10:10:00', 'Mr. Gentel Man', '01723659050', 650, 'Booked', '2020-02-17 05:07:16', '2020-02-17 05:07:16'),
(39, 1, 2, 10, 2, '2020-02-02', '10:10:00', 'Mr. Gentel Man', '01723659050', 650, 'Booked', '2020-02-17 05:07:19', '2020-02-17 05:07:19'),
(40, 1, 2, 10, 2, '2020-02-03', '10:10:00', 'Mr. Gentel Man', '01723659050', 650, 'Booked', '2020-02-17 05:07:22', '2020-02-17 05:07:22'),
(41, 1, 2, 10, 2, '2020-02-05', '10:10:00', 'Mr. Gentel Man', '01723659050', 650, 'Booked', '2020-02-17 05:07:28', '2020-02-17 05:07:28'),
(42, 1, 2, 10, 3, '2020-02-05', '10:10:00', 'Mr. Gentel Man', '01723659050', 650, 'Booked', '2020-02-17 05:07:28', '2020-02-17 05:07:28'),
(43, 1, 2, 10, 4, '2020-02-05', '10:10:00', 'Mr. Gentel Man', '01723659050', 650, 'Booked', '2020-02-17 05:07:28', '2020-02-17 05:07:28'),
(44, 1, 2, 10, 2, '2020-02-08', '10:10:00', 'Mr. Gentel Man', '01723659050', 650, 'Booked', '2020-02-17 05:07:39', '2020-02-17 05:07:39'),
(45, 2, 2, 10, 2, '2020-01-02', '10:10:00', 'Mr. Gentel Man', '01723659050', 650, 'Booked', '2020-02-17 05:08:07', '2020-02-17 05:08:07'),
(46, 2, 2, 10, 3, '2020-01-02', '10:10:00', 'Mr. Gentel Man', '01723659050', 650, 'Booked', '2020-02-17 05:08:07', '2020-02-17 05:08:07'),
(47, 2, 2, 10, 4, '2020-01-02', '10:10:00', 'Mr. Gentel Man', '01723659050', 650, 'Booked', '2020-02-17 05:08:07', '2020-02-17 05:08:07'),
(48, 2, 2, 10, 2, '2020-01-03', '10:10:00', 'Mr. Gentel Man', '01723659050', 650, 'Booked', '2020-02-17 05:08:10', '2020-02-17 05:08:10'),
(49, 2, 2, 10, 2, '2020-01-04', '10:10:00', 'Mr. Gentel Man', '01723659050', 650, 'Booked', '2020-02-17 05:08:13', '2020-02-17 05:08:13'),
(50, 2, 2, 10, 3, '2020-01-04', '10:10:00', 'Mr. Gentel Man', '01723659050', 650, 'Booked', '2020-02-17 05:08:13', '2020-02-17 05:08:13'),
(51, 2, 2, 10, 4, '2020-01-04', '10:10:00', 'Mr. Gentel Man', '01723659050', 650, 'Booked', '2020-02-17 05:08:13', '2020-02-17 05:08:13'),
(52, 2, 2, 10, 2, '2020-01-05', '10:10:00', 'Mr. Gentel Man', '01723659050', 650, 'Booked', '2020-02-17 05:08:16', '2020-02-17 05:08:16'),
(53, 2, 2, 10, 3, '2020-01-05', '10:10:00', 'Mr. Gentel Man', '01723659050', 650, 'Booked', '2020-02-17 05:08:16', '2020-02-17 05:08:16'),
(54, 2, 2, 10, 2, '2020-01-06', '10:10:00', 'Mr. Gentel Man', '01723659050', 650, 'Booked', '2020-02-17 05:08:21', '2020-02-17 05:08:21'),
(55, 2, 2, 10, 2, '2020-01-07', '10:10:00', 'Mr. Gentel Man', '01723659050', 650, 'Booked', '2020-02-17 05:08:24', '2020-02-17 05:08:24'),
(56, 2, 2, 10, 2, '2020-01-09', '10:10:00', 'Mr. Gentel Man', '01723659050', 650, 'Booked', '2020-02-17 05:08:31', '2020-02-17 05:08:31'),
(57, 2, 2, 10, 2, '2020-01-10', '10:10:00', 'Mr. Gentel Man', '01723659050', 650, 'Booked', '2020-02-17 05:08:34', '2020-02-17 05:08:34'),
(58, 2, 2, 10, 2, '2020-02-01', '10:10:00', 'Mr. Gentel Man', '01723659050', 650, 'Booked', '2020-02-17 05:08:44', '2020-02-17 05:08:44'),
(59, 2, 2, 10, 2, '2020-02-02', '10:10:00', 'Mr. Gentel Man', '01723659050', 650, 'Booked', '2020-02-17 05:08:48', '2020-02-17 05:08:48'),
(60, 2, 2, 10, 3, '2020-02-02', '10:10:00', 'Mr. Gentel Man', '01723659050', 650, 'Booked', '2020-02-17 05:08:48', '2020-02-17 05:08:48'),
(61, 2, 2, 10, 4, '2020-02-02', '10:10:00', 'Mr. Gentel Man', '01723659050', 650, 'Booked', '2020-02-17 05:08:48', '2020-02-17 05:08:48'),
(62, 2, 2, 10, 2, '2020-02-03', '10:10:00', 'Mr. Gentel Man', '01723659050', 650, 'Booked', '2020-02-17 05:08:51', '2020-02-17 05:08:51'),
(63, 2, 2, 10, 3, '2020-02-03', '10:10:00', 'Mr. Gentel Man', '01723659050', 650, 'Booked', '2020-02-17 05:08:51', '2020-02-17 05:08:51'),
(64, 2, 2, 10, 4, '2020-02-03', '10:10:00', 'Mr. Gentel Man', '01723659050', 650, 'Booked', '2020-02-17 05:08:51', '2020-02-17 05:08:51'),
(65, 2, 2, 10, 2, '2020-02-04', '10:10:00', 'Mr. Gentel Man', '01723659050', 650, 'Booked', '2020-02-17 05:08:53', '2020-02-17 05:08:53'),
(66, 2, 2, 10, 2, '2020-02-05', '10:10:00', 'Mr. Gentel Man', '01723659050', 650, 'Booked', '2020-02-17 05:08:57', '2020-02-17 05:08:57'),
(67, 2, 2, 10, 2, '2020-02-06', '10:10:00', 'Mr. Gentel Man', '01723659050', 650, 'Booked', '2020-02-17 05:09:00', '2020-02-17 05:09:00'),
(68, 2, 2, 10, 3, '2020-02-06', '10:10:00', 'Mr. Gentel Man', '01723659050', 650, 'Booked', '2020-02-17 05:09:00', '2020-02-17 05:09:00'),
(69, 2, 2, 10, 2, '2020-02-08', '10:10:00', 'Mr. Gentel Man', '01723659050', 650, 'Booked', '2020-02-17 05:09:07', '2020-02-17 05:09:07'),
(70, 2, 2, 10, 2, '2020-02-09', '10:10:00', 'Mr. Gentel Man', '01723659050', 650, 'Booked', '2020-02-17 05:09:10', '2020-02-17 05:09:10'),
(71, 2, 2, 10, 2, '2020-02-10', '10:10:00', 'Mr. Gentel Man', '01723659050', 650, 'Booked', '2020-02-17 05:09:14', '2020-02-17 05:09:14'),
(72, 2, 2, 10, 3, '2020-02-10', '10:10:00', 'Mr. Gentel Man', '01723659050', 650, 'Booked', '2020-02-17 05:09:14', '2020-02-17 05:09:14');

-- --------------------------------------------------------

--
-- Table structure for table `buses`
--

CREATE TABLE `buses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `agency_id` bigint(20) NOT NULL,
  `route_id` bigint(20) NOT NULL,
  `number` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `break` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seats` int(11) NOT NULL,
  `fare` int(11) NOT NULL,
  `departure_time` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buses`
--

INSERT INTO `buses` (`id`, `agency_id`, `route_id`, `number`, `model`, `type`, `break`, `seats`, `fare`, `departure_time`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'KH-2028', 'Hino RM2', 'AC', NULL, 30, 1000, '08:20:00', NULL, NULL),
(2, 1, 1, 'KH-2029', 'Hino RM2', 'AC', NULL, 30, 1000, '11:50:00', NULL, NULL),
(3, 1, 1, 'KH-2030', 'Hino RM2', 'AC', NULL, 30, 1000, '20:50:00', NULL, NULL),
(4, 2, 1, 'KH-4028', 'Hino', 'NON-AC', NULL, 40, 700, '08:03:00', NULL, NULL),
(5, 2, 1, 'KH-4029', 'Hino', 'NON-AC', NULL, 40, 700, '12:00:00', NULL, NULL),
(6, 2, 1, 'KH-4030', 'Hino', 'NON-AC', NULL, 40, 700, '20:00:00', NULL, NULL),
(7, 3, 1, 'KH-6028', 'Hyundai', 'AC', NULL, 30, 1800, '08:03:00', NULL, NULL),
(8, 3, 1, 'KH-6029', 'Hyundai', 'AC', NULL, 30, 1800, '12:00:00', NULL, NULL),
(9, 3, 1, 'KH-6030', 'Hyundai', 'AC', NULL, 30, 1800, '20:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apix` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apiy` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `name`, `description`, `link`, `apix`, `apiy`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka', 'Dhaka (/ˈdɑːkə/ DAH-kə or /ˈdækə/ DAK-ə; Bengali: ঢাকা, pronounced [ɖʱaka]), formerly known as Dacca,[10] is the capital and largest city of Bangladesh. It is one of the largest and most densely populated cities in the world,[6][11] with a population of 18.2 million people in the Greater Dhaka Area as of 2016', 'https://en.wikipedia.org/wiki/Dhaka', NULL, NULL, NULL, NULL),
(2, 'Bogura', 'Bogra, officially known as Bogura, is a major city located in the Bogra District, Rajshahi Division, Bangladesh. It is major commercial hub. The Bogra bridge connects the Rajshahi Division and Rangpur Division. This city is also known as the capital of North Bengal of Bangladesh. Shatmatha is the heart of this city', 'https://en.wikipedia.org/wiki/Bogra', NULL, NULL, NULL, NULL),
(3, 'Rangpur', 'Rangpur (Bengali: রংপুর) is one of the major cities in Bangladesh and Rangpur Division. Rangpur was declared a district headquarters on 16 December 1769, and established as a municipality in 1869, making it one of the oldest municipalities in Bangladesh.[3][4] The municipal office building was erected in 1892 under the precedence Raja Janaki Ballav, Sen. Chairman of the municipality. During the period of 1890, \"Shyama sundari khal\" was excavated for improvement of the town.', 'https://en.wikipedia.org/wiki/Rangpur,_Bangladesh', NULL, NULL, NULL, NULL),
(4, 'Chittagong', 'Chittagong (/tʃɪtəɡɒŋ/), officially known as Chattogram,[4] is a major coastal city and financial centre in southeastern Bangladesh. The city has a population of more than 2.5 million[1] while the metropolitan area had a population of 4,009,423 in 2011,[1] making it the second-largest city in the country. It is the capital of an eponymous District and Division. The city is located on the banks of the Karnaphuli River between the Chittagong Hill Tracts and the Bay of Bengal. Modern Chittagong is Bangladesh\'s second most significant urban center after Dhaka.', 'https://en.wikipedia.org/wiki/Chittagong', NULL, NULL, NULL, NULL),
(5, 'Khulna', 'Khulna (Bengali: খুলনা [ˈkʰulna]) is the third-largest city of Bangladesh.[5] It is the administrative seat of Khulna District and Khulna Division. As of the 2011 census, the city has a population of 663,342.[2] The encompassing Khulna metro area had an estimated population of 1.022 million as of 2014.', 'https://en.wikipedia.org/wiki/Khulna', NULL, NULL, NULL, NULL),
(6, 'Barisal', 'Barisal District, officially known as Barishal District,[1] is a district in south-central Bangladesh, formerly called Bakerganj district, established in 1797.[2] Its headquarters are in the city of Barisal, which is also the headquarters of Barisal Division', 'https://en.wikipedia.org/wiki/Barisal_District', NULL, NULL, NULL, NULL);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_05_08_235355_create_ticket_booking_table', 1),
(4, '2019_07_28_014832_crate_city_table', 1),
(5, '2019_07_29_010855_create_agency_table', 1),
(6, '2019_07_29_011835_create_buses_table', 1),
(7, '2019_07_29_012239_create_routes_table', 1),
(8, '2019_08_08_145807_create_seats_table', 1),
(9, '2019_08_14_004623_create_booking_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

CREATE TABLE `routes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `departure_id` bigint(20) UNSIGNED NOT NULL,
  `arrival_id` bigint(20) UNSIGNED NOT NULL,
  `est_distance` int(11) NOT NULL,
  `est_time` int(11) NOT NULL,
  `est_price` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`id`, `departure_id`, `arrival_id`, `est_distance`, `est_time`, `est_price`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 300, 7, '550-1500', NULL, NULL),
(2, 1, 2, 200, 7, '350-1000', NULL, NULL),
(3, 1, 4, 200, 7, '550-1500', NULL, NULL),
(4, 1, 5, 200, 7, '550-1500', NULL, NULL),
(5, 1, 6, 200, 7, '550-1500', NULL, NULL),
(6, 2, 4, 200, 7, '800-1800', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

CREATE TABLE `seats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `column` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `row` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seat_type` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seats`
--

INSERT INTO `seats` (`id`, `column`, `row`, `seat_type`, `created_at`, `updated_at`) VALUES
(1, 'A', '1', 30, NULL, NULL),
(2, 'B', '1', 30, NULL, NULL),
(3, 'C', '1', 30, NULL, NULL),
(4, 'A', '2', 30, NULL, NULL),
(5, 'B', '2', 30, NULL, NULL),
(6, 'C', '2', 30, NULL, NULL),
(7, 'A', '3', 30, NULL, NULL),
(8, 'B', '3', 30, NULL, NULL),
(9, 'C', '3', 30, NULL, NULL),
(10, 'A', '4', 30, NULL, NULL),
(11, 'B', '4', 30, NULL, NULL),
(12, 'C', '4', 30, NULL, NULL),
(13, 'A', '5', 30, NULL, NULL),
(14, 'B', '5', 30, NULL, NULL),
(15, 'C', '5', 30, NULL, NULL),
(16, 'A', '6', 30, NULL, NULL),
(17, 'B', '6', 30, NULL, NULL),
(18, 'C', '6', 30, NULL, NULL),
(19, 'A', '7', 30, NULL, NULL),
(20, 'B', '7', 30, NULL, NULL),
(21, 'C', '7', 30, NULL, NULL),
(22, 'A', '8', 30, NULL, NULL),
(23, 'B', '8', 30, NULL, NULL),
(24, 'C', '8', 30, NULL, NULL),
(25, 'A', '9', 30, NULL, NULL),
(26, 'B', '9', 30, NULL, NULL),
(27, 'C', '9', 30, NULL, NULL),
(28, 'A', '10', 30, NULL, NULL),
(29, 'B', '10', 30, NULL, NULL),
(30, 'C', '10', 30, NULL, NULL),
(31, 'A', '1', 40, NULL, NULL),
(32, 'B', '1', 40, NULL, NULL),
(33, 'C', '1', 40, NULL, NULL),
(34, 'D', '1', 40, NULL, NULL),
(35, 'A', '2', 40, NULL, NULL),
(36, 'B', '2', 40, NULL, NULL),
(37, 'C', '2', 40, NULL, NULL),
(38, 'D', '2', 40, NULL, NULL),
(39, 'A', '3', 40, NULL, NULL),
(40, 'B', '3', 40, NULL, NULL),
(41, 'C', '3', 40, NULL, NULL),
(42, 'D', '3', 40, NULL, NULL),
(43, 'A', '4', 40, NULL, NULL),
(44, 'B', '4', 40, NULL, NULL),
(45, 'C', '4', 40, NULL, NULL),
(46, 'D', '4', 40, NULL, NULL),
(47, 'A', '5', 40, NULL, NULL),
(48, 'B', '5', 40, NULL, NULL),
(49, 'C', '5', 40, NULL, NULL),
(50, 'D', '5', 40, NULL, NULL),
(51, 'A', '6', 40, NULL, NULL),
(52, 'B', '6', 40, NULL, NULL),
(53, 'C', '6', 40, NULL, NULL),
(54, 'D', '6', 40, NULL, NULL),
(55, 'A', '7', 40, NULL, NULL),
(56, 'B', '7', 40, NULL, NULL),
(57, 'C', '7', 40, NULL, NULL),
(58, 'D', '7', 40, NULL, NULL),
(59, 'A', '8', 40, NULL, NULL),
(60, 'B', '8', 40, NULL, NULL),
(61, 'C', '8', 40, NULL, NULL),
(62, 'D', '8', 40, NULL, NULL),
(63, 'A', '9', 40, NULL, NULL),
(64, 'B', '9', 40, NULL, NULL),
(65, 'C', '9', 40, NULL, NULL),
(66, 'D', '9', 40, NULL, NULL),
(67, 'A', '10', 40, NULL, NULL),
(68, 'B', '10', 40, NULL, NULL),
(69, 'C', '10', 40, NULL, NULL),
(70, 'D', '10', 40, NULL, NULL),
(71, 'A', '1', 50, NULL, NULL),
(72, 'B', '1', 50, NULL, NULL),
(73, 'C', '1', 50, NULL, NULL),
(74, 'D', '1', 50, NULL, NULL),
(75, 'A', '2', 50, NULL, NULL),
(76, 'B', '2', 50, NULL, NULL),
(77, 'C', '2', 50, NULL, NULL),
(78, 'D', '2', 50, NULL, NULL),
(79, 'A', '3', 50, NULL, NULL),
(80, 'B', '3', 50, NULL, NULL),
(81, 'C', '3', 50, NULL, NULL),
(82, 'D', '3', 50, NULL, NULL),
(83, 'A', '4', 50, NULL, NULL),
(84, 'B', '4', 50, NULL, NULL),
(85, 'C', '4', 50, NULL, NULL),
(86, 'D', '4', 50, NULL, NULL),
(87, 'A', '5', 50, NULL, NULL),
(88, 'B', '5', 50, NULL, NULL),
(89, 'C', '5', 50, NULL, NULL),
(90, 'D', '5', 50, NULL, NULL),
(91, 'A', '6', 50, NULL, NULL),
(92, 'B', '6', 50, NULL, NULL),
(93, 'C', '6', 50, NULL, NULL),
(94, 'D', '6', 50, NULL, NULL),
(95, 'A', '7', 50, NULL, NULL),
(96, 'B', '7', 50, NULL, NULL),
(97, 'C', '7', 50, NULL, NULL),
(98, 'D', '7', 50, NULL, NULL),
(99, 'A', '8', 50, NULL, NULL),
(100, 'B', '8', 50, NULL, NULL),
(101, 'C', '8', 50, NULL, NULL),
(102, 'D', '8', 50, NULL, NULL),
(103, 'A', '9', 50, NULL, NULL),
(104, 'B', '9', 50, NULL, NULL),
(105, 'C', '9', 50, NULL, NULL),
(106, 'D', '9', 50, NULL, NULL),
(107, 'A', '10', 50, NULL, NULL),
(108, 'B', '10', 50, NULL, NULL),
(109, 'C', '10', 50, NULL, NULL),
(110, 'D', '10', 50, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ticket_booking`
--

CREATE TABLE `ticket_booking` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `agency` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `route` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `to` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Open',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ticket_booking`
--

INSERT INTO `ticket_booking` (`id`, `user_id`, `agency`, `route`, `from`, `to`, `price`, `date`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'Romana', 'air', 'Australia', 'Brazil', '150', '2019-05-11', 'Open', NULL, NULL),
(2, 2, 'Royel', 'air', 'England', 'Canada', '180', '2019-05-15', 'Open', NULL, NULL),
(3, 2, 'Romana', 'air', 'USA', 'Peru', '110', '2019-05-12', 'Open', NULL, NULL),
(4, 2, 'Romana', 'air', 'Australia', 'Brazil', '150', '2019-05-15', 'Open', NULL, NULL),
(5, 2, 'Romana', 'air', 'Japan', 'Canada', '150', '2019-05-17', 'Open', NULL, NULL),
(6, 2, 'Romana', 'air', 'Peru', 'Brazil', '20', '2019-05-15', 'Pending', NULL, NULL),
(7, 2, 'Romana', 'air', 'Peru', 'Brazil', '20', '2019-05-15', 'Pending', NULL, NULL),
(8, 2, 'Romana', 'air', 'Peru', 'Brazil', '20', '2019-05-15', 'Sold', NULL, NULL);

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@g.com', NULL, '$2y$10$4MBCRP6Mw83M5AB43Okqe.Roa13r3jthWIiTSHPDxUwcA125aNp.a', NULL, NULL, NULL),
(2, 'User', 'user@g.com', NULL, '$2y$10$kdL.S2yz6eLwyWioa9UMzex0hCYsnc7JO1KJL0Q8rQTkOw1Ur1Plu', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agency`
--
ALTER TABLE `agency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buses`
--
ALTER TABLE `buses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
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
-- Indexes for table `routes`
--
ALTER TABLE `routes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `routes_departure_id_foreign` (`departure_id`),
  ADD KEY `routes_arrival_id_foreign` (`arrival_id`);

--
-- Indexes for table `seats`
--
ALTER TABLE `seats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket_booking`
--
ALTER TABLE `ticket_booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ticket_booking_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `agency`
--
ALTER TABLE `agency`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `buses`
--
ALTER TABLE `buses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `routes`
--
ALTER TABLE `routes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `seats`
--
ALTER TABLE `seats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `ticket_booking`
--
ALTER TABLE `ticket_booking`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `routes`
--
ALTER TABLE `routes`
  ADD CONSTRAINT `routes_arrival_id_foreign` FOREIGN KEY (`arrival_id`) REFERENCES `city` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `routes_departure_id_foreign` FOREIGN KEY (`departure_id`) REFERENCES `city` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `ticket_booking`
--
ALTER TABLE `ticket_booking`
  ADD CONSTRAINT `ticket_booking_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
