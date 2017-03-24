-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Vært: mysql32.unoeuro.com
-- Genereringstid: 24. 03 2017 kl. 12:47:21
-- Serverversion: 5.7.17-log
-- PHP-version: 7.0.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `peterrytter_com_db2`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `imagepath` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Data dump for tabellen `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `imagepath`, `created_at`, `updated_at`) VALUES
(1, 'Heating', 'Circulator pumps for circulation of water in central and district heating systems and circulation in domestic hot water service systems.', 'icon-gr-heat', NULL, NULL),
(2, 'Air-conditioning', 'Circulator pumps for circulation of cold water and other liquids in cooling and air-conditioning systems.', 'icon-gr-cold', '2017-03-21 10:00:19', '2017-03-21 10:00:19'),
(3, 'Pressure boosting', 'Vertical and horizontal, centrifugal pumps and pressure boosting systems for liquid transfer and boosting of hot and cold water.', 'icon-gr-gauge', NULL, NULL),
(4, 'Industrial applications', 'Pumps and pump systems for installation in industrial processes, industrial equipment and building utilities.', 'icon-gr-work', NULL, NULL),
(5, 'Domestic water supply and rain water', 'Submersible pumps, jet pumps, multistage centrifugal pumps and compact systems for water supply in homes, gardens and hobby applications.', 'icon-gr-liquid', NULL, NULL),
(6, 'Wastewater', 'Drainage, effluent and sewage pumps for a wide range of applications in building services as well as transfer of raw sewage in municipal sewage systems.', 'icon-gr-trash', NULL, NULL),
(7, 'Groundwater supply', 'Submersible pumps for groundwater supply, irrigation and groundwater lowering.', 'icon-gr-home', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `clients`
--

CREATE TABLE `clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagepath` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Data dump for tabellen `clients`
--

INSERT INTO `clients` (`id`, `name`, `phone`, `email`, `description`, `address`, `imagepath`, `user_id`, `created_at`, `updated_at`) VALUES
(7, 'Grundfos A/S', 87505050, 'info_gdk@grundfos.com', 'A lot of work - Many pumps', 'Martin Bachs Vej 3, 8850 Bjerringbro', NULL, 1, '2017-03-24 06:41:06', '2017-03-24 10:40:22');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `issues`
--

CREATE TABLE `issues` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagepath` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Data dump for tabellen `issues`
--

INSERT INTO `issues` (`id`, `name`, `description`, `imagepath`, `created_at`, `updated_at`) VALUES
(1, 'Leakage', 'A leakage occurs when fluid is lost through a leak.', '../images/issues/leakage.png', NULL, NULL),
(2, 'Noise', 'Noise is unwanted sound judged to be unpleasant, loud or disruptive to hearing. From a physics standpoint, noise is indistinguishable from sound, as both are vibrations through a medium, such as air or water.', '../images/issues/loudnoise.png', NULL, NULL),
(3, 'Doesn\'t work', 'For unknown reason the pump does not work and there no running water.', '../images/issues/donotwork.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `issue_pump`
--

CREATE TABLE `issue_pump` (
  `id` int(10) UNSIGNED NOT NULL,
  `pump_id` int(11) NOT NULL,
  `issue_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Data dump for tabellen `issue_pump`
--

INSERT INTO `issue_pump` (`id`, `pump_id`, `issue_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(3, 2, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `issue_tool`
--

CREATE TABLE `issue_tool` (
  `id` int(10) UNSIGNED NOT NULL,
  `issue_id` int(11) NOT NULL,
  `tool_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Data dump for tabellen `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(42, '2014_10_12_000000_create_users_table', 1),
(43, '2014_10_12_100000_create_password_resets_table', 1),
(44, '2017_03_21_074724_create_issues_table', 1),
(45, '2017_03_21_074739_create_tools_table', 1),
(46, '2017_03_21_074928_create_issue_tool_table', 1),
(47, '2017_03_21_075347_create_pumps_table', 1),
(48, '2017_03_21_075406_create_categories_table', 1),
(49, '2017_03_21_075535_create_upumps_table', 1),
(50, '2017_03_21_075600_create_clients_table', 1),
(51, '2017_03_21_075619_create_parts_table', 1),
(52, '2017_03_21_083656_create_pump_part_table', 1),
(53, '2017_03_21_083824_create_pump_issue_table', 1),
(54, '2017_03_21_083852_create_pump_tool_table', 1),
(55, '2017_03_21_083957_create_part_tool_table', 1),
(56, '2017_03_21_084018_create_part_issue_table', 1);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `parts`
--

CREATE TABLE `parts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagepath` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Data dump for tabellen `parts`
--

INSERT INTO `parts` (`id`, `name`, `description`, `imagepath`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Pumpvalve', '', 'valve/picture/awesome', 500, NULL, NULL),
(2, 'Pipe', 'Used for connecting parts', '', 150, NULL, NULL),
(3, 'Mechanical seal', '', '', 700, NULL, NULL),
(4, 'Flat Gasket', '', '', 25, NULL, NULL),
(5, 'Grease Nipple', '', '', 75, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `part_issue`
--

CREATE TABLE `part_issue` (
  `id` int(10) UNSIGNED NOT NULL,
  `part_id` int(11) NOT NULL,
  `issue_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `part_pump`
--

CREATE TABLE `part_pump` (
  `id` int(10) UNSIGNED NOT NULL,
  `pump_id` int(11) NOT NULL,
  `part_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Data dump for tabellen `part_pump`
--

INSERT INTO `part_pump` (`id`, `pump_id`, `part_id`, `created_at`, `updated_at`) VALUES
(2, 1, 1, NULL, NULL),
(3, 2, 1, NULL, NULL),
(4, 3, 1, NULL, NULL),
(5, 4, 1, NULL, NULL),
(6, 5, 1, NULL, NULL),
(7, 6, 1, NULL, NULL),
(8, 7, 1, NULL, NULL),
(9, 8, 1, NULL, NULL),
(10, 9, 1, NULL, NULL),
(11, 10, 1, NULL, NULL),
(12, 11, 1, NULL, NULL),
(13, 12, 1, NULL, NULL),
(14, 11, 5, NULL, NULL),
(15, 13, 1, NULL, NULL),
(16, 14, 1, NULL, NULL),
(17, 15, 1, NULL, NULL),
(18, 16, 1, NULL, NULL),
(19, 4, 2, NULL, NULL),
(20, 2, 2, NULL, NULL),
(21, 1, 2, NULL, NULL),
(22, 10, 2, NULL, NULL),
(23, 5, 2, NULL, NULL),
(24, 16, 5, NULL, NULL),
(25, 8, 0, NULL, NULL),
(26, 14, 4, NULL, NULL),
(27, 2, 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `part_tool`
--

CREATE TABLE `part_tool` (
  `id` int(10) UNSIGNED NOT NULL,
  `part_id` int(11) NOT NULL,
  `tool_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `pumps`
--

CREATE TABLE `pumps` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spec` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagepath` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Data dump for tabellen `pumps`
--

INSERT INTO `pumps` (`id`, `name`, `model`, `spec`, `imagepath`, `price`, `description`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'ALPHA 3', 'ALPHA3 15-80 130', 'Head max: 7.944 m\r\nLiquid temperature: 2 .. 110 °C\r\nMax flow: 3.93 m³/h\r\np max: 10 bar', '../images/pumps/alpha3.png', '', 'Electronically controlled circulator pumps for domestic building', 1, NULL, NULL),
(2, 'ALPHA 2', 'ALPHA2 15-80 120', 'Head max: 7.944 m\r\nLiquid temperature: 2 .. 110 °C\r\nMax flow: 3.93 m³/h\r\np max: 10 bar', '../images/pumps/alpha2.png', '', 'Electronically controlled circulator pumps for domestic building', 1, NULL, NULL),
(3, 'ALPHA 2 N', 'ALPHA2 20-40 N 150', 'Head max: 7.944 m\r\nLiquid temperature: 0 .. 110 °C\r\nMax flow: 3.93 m³/h\r\np max: 10 bar', '../images/pumps/alpha2n.png', '', 'Electronically controlled circulator pumps for domestic building', 1, NULL, NULL),
(4, 'Comfort', 'UP 15-14 B PM', 'FLOWMAX: 0.5 m³/h\r\nHEADMAXM: 1.17 m\r\nLiquid temperature: 2 .. 95 °C\r\nPMAXBAR: 10 bar', '../images/pumps/comfort.png', '', 'Domestic hot water pumps', 2, NULL, NULL),
(5, 'MAGNA 3', 'MAGNA3 25-40', 'Head max: 18.88 m\r\nLiquid temperature: -10 .. 110 °C\r\nMax flow: 76.6 m³/h\r\np max: 16 bar', '../images/pumps/magna3.png', '', 'The premium choice when system control and monitoring is key. The MAGNA3 supports fieldbus by optional CIM modules and has a TFT display for intuitive configuration of the intelligent features.', 2, NULL, NULL),
(6, 'MAGNA 3 N', 'MAGNA3 25-40 N', 'Head max: 18.88 m\r\nLiquid temperature: -10 .. 110 °C\r\nMax flow: 56.5 m³/h\r\np max: 10 bar', '../images/pumps/magna3n.png', '', 'Get all of the premium features and the best in class efficiency of MAGNA3 in a stainless steel variant if the media requires this (e.g. domestic hot water).', 2, NULL, NULL),
(7, 'NK', 'NK 32-125.1/100', 'Head max: 159 m\r\nLiquid temperature: -25 .. 120 °C\r\nMax flow: 1400 m³/h\r\np max: 16 bar', '../images/pumps/nk.png', '', 'Standard pumps according to EN 733', 3, NULL, NULL),
(8, 'NB', 'NB 32-125.1/100', 'FLOWMAX: 1400 m³/h\r\nHEADMAXM: 159 m\r\nLiquid temperature: -25 .. 120 °C\r\nPMAXBAR: 16 bar', '../images/pumps/nb.png', '', 'End-suction close-coupled pumps according to EN 733', 3, NULL, NULL),
(9, 'NBE', 'NBE 32-125.1/110', 'FLOWMAX: 509 m³/h\r\nHEADMAXM: 97.85 m\r\nLiquid temperature: -25 .. 120 °C\r\nPMAXBAR: 16 bar', '../images/pumps/nbe.png', '', 'End-suction close-coupled pumps according to EN 733 with MGE motor', 4, NULL, NULL),
(10, 'CM', 'CM1-2', 'Head max: 131.7 m\r\nLiquid temperature: -20 .. 120 °C\r\nMax flow: 30.7 m³/h\r\np max: 16 bar', '../images/pumps/cm.png', '', 'CM are reliable, quiet and compact horizontal end-suction pumps. The modular pump design makes it easy to make customised solutions. The CM pumps are available in cast iron and stainless steel', 5, NULL, NULL),
(11, 'CME', 'CME1-2', 'Head max: 120.5 m\r\nLiquid temperature: -20 .. 120 °C\r\nMax flow: 36.8 m³/h\r\np max: 16 bar', '../images/pumps/cme.png', '', 'CME are reliable, quiet and compact horizontal end-suction pumps. The modular pump design makes it easy to make customised solutions. The CME pumps are available in cast iron and stainless steel', 5, NULL, NULL),
(12, 'MTB', 'MTB 50-200/215', 'FLOWMAX: 90 m³/h\r\nHEADMAXM: 47.99 m\r\nLiquid temperature: 0 .. 90 °C\r\nPMAXBAR: 16 bar', '../images/pumps/mtb.png', '', 'Single-stage end-suction pumps with semi-open impeller', 4, NULL, NULL),
(13, 'APG', 'APG.50.48.3', 'FLOWMAX: 8.89 l/s\r\nHEADMAXM: 68 m\r\nLiquid temperature: 0 .. 40 °C', '../images/pumps/apg.png', '', 'Submersible Grundfos APG sewage grinder pumps (0.9-4 kW) are fitted with a patented grinder system designed to grind the media.', 6, NULL, NULL),
(14, 'DP', 'DP10.50.09.2.1.502', 'Head max: 25.05 m\r\nLiquid temperature: 0 .. 40 °C\r\nMax flow: 13.6 l/s\r\np max: 6 bar', '../images/pumps/dp.png', '', 'Submersible Grundfos Drainage Pumps (DP) cover a motor range of 0.9-2.6 kW. The pumps are fitted with a semi-open multi-vane impeller capable of handling solids up to 10 mm size.', 6, NULL, NULL),
(15, 'SP', 'SP 1A-9', 'Head max: 510.1 m\r\nLiquid temperature: 90 °C\r\nMax flow: 283 m³/h', '../images/pumps/sp.png', '', 'Submersible pumps in stainless steel. EN 1.4301 (AISI 304). EN 1.4401 (AISI 316). EN 1.4539 (AISI 904L). Typical application: Ground water, Irrigation, Mining, Fountain, Off-shore etc.', 7, NULL, NULL),
(16, 'SQ 1', 'SQ 1-35', 'Head max: 229.6 m\r\nLiquid temperature: 35 °C\r\nMax flow: 1.7 m³/h', '../images/pumps/sq1.png', '', 'Submersible pumps', 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `pump_tool`
--

CREATE TABLE `pump_tool` (
  `id` int(10) UNSIGNED NOT NULL,
  `pump_id` int(11) NOT NULL,
  `tool_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Data dump for tabellen `pump_tool`
--

INSERT INTO `pump_tool` (`id`, `pump_id`, `tool_id`, `created_at`, `updated_at`) VALUES
(1, 1, 3, NULL, NULL),
(2, 2, 2, NULL, NULL),
(3, 2, 2, NULL, NULL),
(4, 3, 4, NULL, NULL),
(5, 3, 5, NULL, NULL),
(6, 5, 2, NULL, NULL),
(7, 5, 4, NULL, NULL),
(8, 6, 2, NULL, NULL),
(9, 6, 4, NULL, NULL),
(10, 7, 2, NULL, NULL),
(11, 8, 3, NULL, NULL),
(12, 9, 1, NULL, NULL),
(13, 9, 5, NULL, NULL),
(14, 10, 2, NULL, NULL),
(15, 11, 5, NULL, NULL),
(16, 12, 3, NULL, NULL),
(17, 12, 4, NULL, NULL),
(18, 13, 2, NULL, NULL),
(19, 13, 4, NULL, NULL),
(20, 14, 4, NULL, NULL),
(21, 14, 2, NULL, NULL),
(22, 15, 4, NULL, NULL),
(23, 15, 3, NULL, NULL),
(24, 16, 5, NULL, NULL),
(25, 4, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `tools`
--

CREATE TABLE `tools` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagepath` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Data dump for tabellen `tools`
--

INSERT INTO `tools` (`id`, `name`, `imagepath`, `description`, `created_at`, `updated_at`) VALUES
(2, 'Hammer', '', 'Most hammers are hand tools used to drive nails, fit parts, forge metal, and break apart objects.', NULL, NULL),
(3, 'Duct tape', '', 'One variation is black gaffer tape, which is designed to be non-reflective and cleanly removed, unlike standard duct tape.', NULL, NULL),
(4, 'Screwdriver', '', 'A typical simple screwdriver has a handle and a shaft, and a tip that the user inserts into the screw head to turn it.', NULL, NULL),
(5, 'Wrench', '', 'Wrench is a tool used to provide grip and mechanical advantage in applying torque to turn objects—usually rotary fasteners, such as nuts and bolts—or keep them from turning.', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `upumps`
--

CREATE TABLE `upumps` (
  `id` int(10) UNSIGNED NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagepath` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pump_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` int(11) DEFAULT NULL,
  `pumpAddress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Data dump for tabellen `upumps`
--

INSERT INTO `upumps` (`id`, `model`, `imagepath`, `pump_id`, `user_id`, `client_id`, `description`, `year`, `pumpAddress`, `created_at`, `updated_at`) VALUES
(12, ' ', ' ', 2, 1, 5, 'At the roof for no reason', 2017, 'Someroad 123, city 123', '2017-03-22 08:00:15', '2017-03-23 14:06:53');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Data dump for tabellen `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `location`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'malthe Petersen', 'Malthe@intrace.dk', '$2y$10$dmNku6jOMQot6Op7q28fVepc.wCP.rkX8pO6oBLO2Mw8KCrft5yTe', NULL, 'jc3NFNGPtojAKPpJVbuIgbq4BYk9iuHXiGQJxVv0u9PZwhHzVce6D2gVsAsc', '2017-03-21 07:50:28', '2017-03-21 07:50:28');

--
-- Begrænsninger for dumpede tabeller
--

--
-- Indeks for tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `issues`
--
ALTER TABLE `issues`
  ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `issue_pump`
--
ALTER TABLE `issue_pump`
  ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `issue_tool`
--
ALTER TABLE `issue_tool`
  ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `parts`
--
ALTER TABLE `parts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `part_issue`
--
ALTER TABLE `part_issue`
  ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `part_pump`
--
ALTER TABLE `part_pump`
  ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `part_tool`
--
ALTER TABLE `part_tool`
  ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks for tabel `pumps`
--
ALTER TABLE `pumps`
  ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `pump_tool`
--
ALTER TABLE `pump_tool`
  ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `tools`
--
ALTER TABLE `tools`
  ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `upumps`
--
ALTER TABLE `upumps`
  ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Brug ikke AUTO_INCREMENT for slettede tabeller
--

--
-- Tilføj AUTO_INCREMENT i tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Tilføj AUTO_INCREMENT i tabel `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Tilføj AUTO_INCREMENT i tabel `issues`
--
ALTER TABLE `issues`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Tilføj AUTO_INCREMENT i tabel `issue_pump`
--
ALTER TABLE `issue_pump`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Tilføj AUTO_INCREMENT i tabel `issue_tool`
--
ALTER TABLE `issue_tool`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Tilføj AUTO_INCREMENT i tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- Tilføj AUTO_INCREMENT i tabel `parts`
--
ALTER TABLE `parts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Tilføj AUTO_INCREMENT i tabel `part_issue`
--
ALTER TABLE `part_issue`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Tilføj AUTO_INCREMENT i tabel `part_pump`
--
ALTER TABLE `part_pump`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- Tilføj AUTO_INCREMENT i tabel `part_tool`
--
ALTER TABLE `part_tool`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Tilføj AUTO_INCREMENT i tabel `pumps`
--
ALTER TABLE `pumps`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- Tilføj AUTO_INCREMENT i tabel `pump_tool`
--
ALTER TABLE `pump_tool`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- Tilføj AUTO_INCREMENT i tabel `tools`
--
ALTER TABLE `tools`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Tilføj AUTO_INCREMENT i tabel `upumps`
--
ALTER TABLE `upumps`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- Tilføj AUTO_INCREMENT i tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
