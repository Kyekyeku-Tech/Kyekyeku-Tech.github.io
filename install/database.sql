-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: shareddb-d.hosting.stackcp.net
-- Generation Time: Jul 11, 2024 at 10:00 PM
-- Server version: 10.4.26-MariaDB-log
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cloudminers-36353248`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `username`, `email_verified_at`, `image`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Viser Store', 'aksoftwereedevlopment@gmail.com', 'admin', NULL, '6559a37555e641700373365.png', '$2y$10$nxtVMopNAVmCIRg0eD8vqefJHpRKXIdz50qedPF2ekzrWwSTxj/TS', 'mAFnJiu8zLJD36CAyAHfbNMmtgOEZdNJS4RvbjxdSSrFUWyrg7MaBu1xVUBc', NULL, '2023-11-20 23:09:17');

-- --------------------------------------------------------

--
-- Table structure for table `admin_notifications`
--

CREATE TABLE `admin_notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT 0,
  `click_url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_notifications`
--

INSERT INTO `admin_notifications` (`id`, `user_id`, `title`, `is_read`, `click_url`, `created_at`, `updated_at`) VALUES
(1, 1, 'New member registered', 0, '/admin/users/detail/1', '2023-11-20 22:08:41', '2023-11-20 22:08:41'),
(2, 2, 'New member registered', 0, '/admin/users/detail/2', '2023-11-20 22:27:11', '2023-11-20 22:27:11'),
(3, 3, 'New member registered', 0, '/admin/users/detail/3', '2023-11-20 22:28:46', '2023-11-20 22:28:46'),
(4, 4, 'New member registered', 0, '/admin/users/detail/4', '2023-11-20 23:08:53', '2023-11-20 23:08:53'),
(5, 5, 'New member registered', 0, '/admin/users/detail/5', '2023-11-20 23:09:12', '2023-11-20 23:09:12'),
(6, 6, 'New member registered', 0, '/admin/users/detail/6', '2023-11-20 23:09:38', '2023-11-20 23:09:38'),
(7, 7, 'New member registered', 0, '/admin/users/detail/7', '2023-11-20 23:09:57', '2023-11-20 23:09:57'),
(8, 8, 'New member registered', 0, '/admin/users/detail/8', '2023-11-20 23:10:14', '2023-11-20 23:10:14'),
(9, 9, 'New member registered', 0, '/admin/users/detail/9', '2023-11-20 23:11:15', '2023-11-20 23:11:15'),
(10, 10, 'New member registered', 0, '/admin/users/detail/10', '2023-11-20 23:12:01', '2023-11-20 23:12:01'),
(11, 11, 'New member registered', 0, '/admin/users/detail/11', '2023-11-20 23:12:58', '2023-11-20 23:12:58'),
(12, 12, 'New member registered', 0, '/admin/users/detail/12', '2023-11-20 23:15:28', '2023-11-20 23:15:28'),
(13, 13, 'New member registered', 0, '/admin/users/detail/13', '2023-11-20 23:16:29', '2023-11-20 23:16:29'),
(14, 14, 'New member registered', 0, '/admin/users/detail/14', '2023-11-20 23:16:43', '2023-11-20 23:16:43'),
(15, 15, 'New member registered', 0, '/admin/users/detail/15', '2023-11-20 23:16:45', '2023-11-20 23:16:45'),
(16, 16, 'New member registered', 0, '/admin/users/detail/16', '2023-11-20 23:17:18', '2023-11-20 23:17:18'),
(17, 17, 'New member registered', 0, '/admin/users/detail/17', '2023-11-20 23:19:24', '2023-11-20 23:19:24'),
(18, 14, 'Deposit request from 901550166', 0, '/admin/deposit/details/11', '2023-11-20 23:19:49', '2023-11-20 23:19:49'),
(19, 18, 'New member registered', 0, '/admin/users/detail/18', '2023-11-20 23:20:50', '2023-11-20 23:20:50'),
(20, 19, 'New member registered', 0, '/admin/users/detail/19', '2023-11-20 23:22:21', '2023-11-20 23:22:21'),
(21, 20, 'New member registered', 0, '/admin/users/detail/20', '2023-11-20 23:23:32', '2023-11-20 23:23:32'),
(22, 21, 'New member registered', 0, '/admin/users/detail/21', '2023-11-20 23:23:40', '2023-11-20 23:23:40'),
(23, 22, 'New member registered', 0, '/admin/users/detail/22', '2023-11-20 23:24:39', '2023-11-20 23:24:39'),
(24, 23, 'New member registered', 0, '/admin/users/detail/23', '2023-11-20 23:25:16', '2023-11-20 23:25:16'),
(25, 14, 'Deposit successful via USDT', 0, '/admin/deposit/successful', '2023-11-20 23:26:17', '2023-11-20 23:26:17'),
(26, 24, 'New member registered', 0, '/admin/users/detail/24', '2023-11-20 23:26:23', '2023-11-20 23:26:23'),
(27, 25, 'New member registered', 0, '/admin/users/detail/25', '2023-11-20 23:27:01', '2023-11-20 23:27:01'),
(28, 26, 'New member registered', 0, '/admin/users/detail/26', '2023-11-20 23:47:27', '2023-11-20 23:47:27'),
(29, 27, 'New member registered', 0, '/admin/users/detail/27', '2024-07-11 07:59:46', '2024-07-11 07:59:46'),
(30, 27, 'Deposit request from 3042324661', 0, '/admin/deposit/details/27', '2024-07-11 09:45:17', '2024-07-11 09:45:17'),
(31, 27, 'Deposit request from 3042324661', 0, '/admin/deposit/details/33', '2024-07-11 20:01:37', '2024-07-11 20:01:37'),
(32, 27, 'Deposit successful via Binance', 0, '/admin/deposit/successful', '2024-07-11 20:02:10', '2024-07-11 20:02:10'),
(33, 28, 'New member registered', 0, '/admin/users/detail/28', '2024-07-11 20:34:31', '2024-07-11 20:34:31'),
(34, 29, 'New member registered', 0, '/admin/users/detail/29', '2024-07-11 20:36:39', '2024-07-11 20:36:39'),
(35, 30, 'New member registered', 0, '/admin/users/detail/30', '2024-07-11 20:47:46', '2024-07-11 20:47:46'),
(36, 31, 'New member registered', 0, '/admin/users/detail/31', '2024-07-11 20:52:46', '2024-07-11 20:52:46'),
(37, 32, 'New member registered', 0, '/admin/users/detail/32', '2024-07-11 21:06:29', '2024-07-11 21:06:29'),
(38, 33, 'New member registered', 0, '/admin/users/detail/33', '2024-07-11 21:10:26', '2024-07-11 21:10:26'),
(39, 33, 'Deposit request from 3075515533', 0, '/admin/deposit/details/36', '2024-07-11 21:11:23', '2024-07-11 21:11:23');

-- --------------------------------------------------------

--
-- Table structure for table `admin_password_resets`
--

CREATE TABLE `admin_password_resets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `commission_logs`
--

CREATE TABLE `commission_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `to_id` int(11) NOT NULL DEFAULT 0,
  `from_id` int(11) NOT NULL DEFAULT 0,
  `level` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` decimal(11,2) NOT NULL,
  `type` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trx` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `commission_logs`
--

INSERT INTO `commission_logs` (`id`, `to_id`, `from_id`, `level`, `amount`, `type`, `details`, `trx`, `created_at`, `updated_at`) VALUES
(1, 1, 3, '1', '5.00', 'plan_subscribe_commission', '1st level referral commission from 7894561205', '8G1UQTGJXSNR', '2023-11-20 23:00:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `deposits`
--

CREATE TABLE `deposits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `plan_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `method_code` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `amount` decimal(28,8) NOT NULL DEFAULT 0.00000000,
  `method_currency` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `charge` decimal(28,8) NOT NULL DEFAULT 0.00000000,
  `rate` decimal(28,8) NOT NULL DEFAULT 0.00000000,
  `final_amo` decimal(28,8) NOT NULL DEFAULT 0.00000000,
  `transaction_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btc_amo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btc_wallet` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trx` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_try` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '1=>success, 2=>pending, 3=>cancel',
  `from_api` tinyint(1) NOT NULL DEFAULT 0,
  `admin_feedback` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `extensions`
--

CREATE TABLE `extensions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `act` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `script` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shortcode` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'object',
  `support` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'help section',
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=>enable, 2=>disable',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `extensions`
--

INSERT INTO `extensions` (`id`, `act`, `name`, `description`, `image`, `script`, `shortcode`, `support`, `status`, `created_at`, `updated_at`) VALUES
(1, 'tawk-chat', 'Tawk.to', 'Key location is shown bellow', 'tawky_big.png', '<script>\r\n                        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();\r\n                        (function(){\r\n                        var s1=document.createElement(\"script\"),s0=document.getElementsByTagName(\"script\")[0];\r\n                        s1.async=true;\r\n                        s1.src=\"https://embed.tawk.to/{{app_key}}\";\r\n                        s1.charset=\"UTF-8\";\r\n                        s1.setAttribute(\"crossorigin\",\"*\");\r\n                        s0.parentNode.insertBefore(s1,s0);\r\n                        })();\r\n                    </script>', '{\"app_key\":{\"title\":\"App Key\",\"value\":\"------\"}}', 'twak.png', 0, '2019-10-18 23:16:05', '2022-10-27 03:34:32'),
(2, 'google-recaptcha2', 'Google Recaptcha 2', 'Key location is shown bellow', 'recaptcha3.png', '\n<script src=\"https://www.google.com/recaptcha/api.js\"></script>\n<div class=\"g-recaptcha\" data-sitekey=\"{{site_key}}\" data-callback=\"verifyCaptcha\"></div>\n<div id=\"g-recaptcha-error\"></div>', '{\"site_key\":{\"title\":\"Site Key\",\"value\":\"6LdPC88fAAAAADQlUf_DV6Hrvgm-pZuLJFSLDOWV\"},\"secret_key\":{\"title\":\"Secret Key\",\"value\":\"6LdPC88fAAAAAG5SVaRYDnV2NpCrptLg2XLYKRKB\"}}', 'recaptcha.png', 0, '2019-10-18 23:16:05', '2022-10-25 00:46:25'),
(3, 'custom-captcha', 'Custom Captcha', 'Just put any random string', 'customcaptcha.png', NULL, '{\"random_key\":{\"title\":\"Random String\",\"value\":\"-----\"}}', 'na', 0, '2019-10-18 23:16:05', '2022-05-08 00:25:27'),
(4, 'google-analytics', 'Google Analytics', 'Key location is shown bellow', 'google_analytics.png', '<script async src=\"https://www.googletagmanager.com/gtag/js?id={{app_key}}\"></script>\r\n                <script>\r\n                  window.dataLayer = window.dataLayer || [];\r\n                  function gtag(){dataLayer.push(arguments);}\r\n                  gtag(\"js\", new Date());\r\n                \r\n                  gtag(\"config\", \"{{app_key}}\");\r\n                </script>', '{\"app_key\":{\"title\":\"App Key\",\"value\":\"------\"}}', 'ganalytics.png', 0, NULL, '2021-05-04 10:19:12'),
(5, 'fb-comment', 'Facebook Comment ', 'Key location is shown bellow', 'Facebook.png', '<div id=\"fb-root\"></div><script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v4.0&appId={{app_key}}&autoLogAppEvents=1\"></script>', '{\"app_key\":{\"title\":\"App Key\",\"value\":\"----\"}}', 'fb_com.PNG', 0, NULL, '2022-10-26 02:46:35');

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `act` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `form_data` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`id`, `act`, `form_data`, `created_at`, `updated_at`) VALUES
(3, 'kyc', '{\"nid_number\":{\"name\":\"NID Number\",\"label\":\"nid_number\",\"is_required\":\"required\",\"extensions\":null,\"options\":[],\"type\":\"text\"}}', '2022-08-13 23:26:31', '2022-10-24 06:05:13'),
(6, 'manual_deposit', '{\"image\":{\"name\":\"image\",\"label\":\"image\",\"is_required\":\"required\",\"extensions\":\"jpeg,png\",\"options\":[],\"type\":\"file\"}}', '2023-08-10 16:28:54', '2024-07-11 09:41:06'),
(7, 'withdraw_method', '{\"hi\":{\"name\":\"Hi\",\"label\":\"hi\",\"is_required\":\"required\",\"extensions\":\"\",\"options\":[],\"type\":\"text\"}}', '2023-09-30 18:32:10', '2023-11-20 22:50:40'),
(8, 'withdraw_method', '[]', '2023-09-30 19:04:51', '2023-09-30 19:04:51'),
(9, 'manual_deposit', '{\"transaction_id\":{\"name\":\"Transaction ID\",\"label\":\"transaction_id\",\"is_required\":\"required\",\"extensions\":null,\"options\":[],\"type\":\"text\"}}', '2023-10-23 18:09:44', '2023-11-20 23:39:23');

-- --------------------------------------------------------

--
-- Table structure for table `frontends`
--

CREATE TABLE `frontends` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `data_keys` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_values` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `template_name` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `view` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `frontends`
--

INSERT INTO `frontends` (`id`, `data_keys`, `data_values`, `template_name`, `view`, `created_at`, `updated_at`) VALUES
(1, 'seo.data', '{\"seo_image\":\"1\",\"keywords\":[\"miningjs\",\"mining\",\"js\"],\"description\":\"Mining Apps\",\"social_title\":\"Mining Apps\",\"social_description\":\"Mining Apps\",\"image\":\"6559b847b9d271700378695.png\"}', 'global', 0, '2020-07-04 23:42:52', '2023-11-19 18:24:55'),
(41, 'cookie.data', '{\"short_desc\":\"We may use cookies or any other tracking technologies when you visit our website, including any other media form, mobile website, or mobile application related or connected to help customize the Site and improve your experience.\",\"description\":\"<div class=\\\"mb-5\\\" style=\\\"color: rgb(111, 111, 111); font-family: Nunito, sans-serif; margin-bottom: 3rem !important;\\\"><h3 class=\\\"mb-3\\\" style=\\\"font-weight: 600; line-height: 1.3; font-size: 24px; font-family: Exo, sans-serif; color: rgb(54, 54, 54);\\\">What information do we collect?<\\/h3><p class=\\\"font-18\\\" style=\\\"margin-right: 0px; margin-left: 0px; font-size: 18px !important;\\\">We gather data from you when you register on our site, submit a request, buy any services, react to an overview, or round out a structure. At the point when requesting any assistance or enrolling on our site, as suitable, you might be approached to enter your: name, email address, or telephone number. You may, nonetheless, visit our site anonymously.<\\/p><\\/div><div class=\\\"mb-5\\\" style=\\\"color: rgb(111, 111, 111); font-family: Nunito, sans-serif; margin-bottom: 3rem !important;\\\"><h3 class=\\\"mb-3\\\" style=\\\"font-weight: 600; line-height: 1.3; font-size: 24px; font-family: Exo, sans-serif; color: rgb(54, 54, 54);\\\">How do we protect your information?<\\/h3><p class=\\\"font-18\\\" style=\\\"margin-right: 0px; margin-left: 0px; font-size: 18px !important;\\\">All provided delicate\\/credit data is sent through Stripe.<br>After an exchange, your private data (credit cards, social security numbers, financials, and so on) won\'t be put away on our workers.<\\/p><\\/div><div class=\\\"mb-5\\\" style=\\\"color: rgb(111, 111, 111); font-family: Nunito, sans-serif; margin-bottom: 3rem !important;\\\"><h3 class=\\\"mb-3\\\" style=\\\"font-weight: 600; line-height: 1.3; font-size: 24px; font-family: Exo, sans-serif; color: rgb(54, 54, 54);\\\">Do we disclose any information to outside parties?<\\/h3><p class=\\\"font-18\\\" style=\\\"margin-right: 0px; margin-left: 0px; font-size: 18px !important;\\\">We don\'t sell, exchange, or in any case move to outside gatherings by and by recognizable data. This does exclude confided in outsiders who help us in working our site, leading our business, or adjusting you, since those gatherings consent to keep this data private. We may likewise deliver your data when we accept discharge is suitable to follow the law, implement our site strategies, or ensure our own or others\' rights, property, or wellbeing.<\\/p><\\/div><div class=\\\"mb-5\\\" style=\\\"color: rgb(111, 111, 111); font-family: Nunito, sans-serif; margin-bottom: 3rem !important;\\\"><h3 class=\\\"mb-3\\\" style=\\\"font-weight: 600; line-height: 1.3; font-size: 24px; font-family: Exo, sans-serif; color: rgb(54, 54, 54);\\\">Children\'s Online Privacy Protection Act Compliance<\\/h3><p class=\\\"font-18\\\" style=\\\"margin-right: 0px; margin-left: 0px; font-size: 18px !important;\\\">We are consistent with the prerequisites of COPPA (Children\'s Online Privacy Protection Act), we don\'t gather any data from anybody under 13 years old. Our site, items, and administrations are completely coordinated to individuals who are in any event 13 years of age or more established.<\\/p><\\/div><div class=\\\"mb-5\\\" style=\\\"color: rgb(111, 111, 111); font-family: Nunito, sans-serif; margin-bottom: 3rem !important;\\\"><h3 class=\\\"mb-3\\\" style=\\\"font-weight: 600; line-height: 1.3; font-size: 24px; font-family: Exo, sans-serif; color: rgb(54, 54, 54);\\\">Changes to our Privacy Policy<\\/h3><p class=\\\"font-18\\\" style=\\\"margin-right: 0px; margin-left: 0px; font-size: 18px !important;\\\">If we decide to change our privacy policy, we will post those changes on this page.<\\/p><\\/div><div class=\\\"mb-5\\\" style=\\\"color: rgb(111, 111, 111); font-family: Nunito, sans-serif; margin-bottom: 3rem !important;\\\"><h3 class=\\\"mb-3\\\" style=\\\"font-weight: 600; line-height: 1.3; font-size: 24px; font-family: Exo, sans-serif; color: rgb(54, 54, 54);\\\">How long we retain your information?<\\/h3><p class=\\\"font-18\\\" style=\\\"margin-right: 0px; margin-left: 0px; font-size: 18px !important;\\\">At the point when you register for our site, we cycle and keep your information we have about you however long you don\'t erase the record or withdraw yourself (subject to laws and guidelines).<\\/p><\\/div><div class=\\\"mb-5\\\" style=\\\"color: rgb(111, 111, 111); font-family: Nunito, sans-serif; margin-bottom: 3rem !important;\\\"><h3 class=\\\"mb-3\\\" style=\\\"font-weight: 600; line-height: 1.3; font-size: 24px; font-family: Exo, sans-serif; color: rgb(54, 54, 54);\\\">What we don\\u2019t do with your data<\\/h3><p class=\\\"font-18\\\" style=\\\"margin-right: 0px; margin-left: 0px; font-size: 18px !important;\\\">We don\'t and will never share, unveil, sell, or in any case give your information to different organizations for the promoting of their items or administrations.<\\/p><\\/div>\",\"status\":1}', 'global', 0, '2020-07-04 23:42:52', '2022-03-30 11:23:12'),
(44, 'maintenance.data', '{\"description\":\"<div class=\\\"mb-5\\\" style=\\\"color: rgb(111, 111, 111); font-family: Nunito, sans-serif; margin-bottom: 3rem !important;\\\"><h3 class=\\\"mb-3\\\" style=\\\"font-weight: 600; line-height: 1.3; font-size: 24px; font-family: Exo, sans-serif; color: rgb(54, 54, 54);\\\">What information do we collect?<\\/h3><p class=\\\"font-18\\\" style=\\\"margin-right: 0px; margin-left: 0px; font-size: 18px !important;\\\">We gather data from you when you register on our site, submit a request, buy any services, react to an overview, or round out a structure. At the point when requesting any assistance or enrolling on our site, as suitable, you might be approached to enter your: name, email address, or telephone number. You may, nonetheless, visit our site anonymously.<\\/p><\\/div>\"}', 'global', 0, '2020-07-04 23:42:52', '2022-10-25 03:05:57'),
(47, 'about.content', '{\"has_image\":\"1\",\"heading\":\"Make more than ever before Join Us\",\"description\":\"<p style=\\\"margin-top:15px;margin-right:0px;margin-left:0px;font-size:16px;color:rgb(111,111,111);font-family:Roboto, Bangla745, sans-serif;\\\">\\u00a0Best Possible Way for Earn From Home. Temporibus eveniet commodi obcaecati voluptates reiciendis quis ipsum incidunt quibusdam aperiam autem suscipit maiores temporTemporibus eveniet commodi obcaecati voluptates reiciendis quis ipsum incidunt quibusdam aperiam autem suscipit maiores tempora impedit, exercitationem ratione distinctio nulla magni nemo cumque inventore sapiente nisi at vel. Laborum suscipit fuga.<\\/p>\",\"video_url\":\"https:\\/\\/www.youtube.com\\/embed\\/WOb4cj7izpE\",\"image\":\"64d521f6864df1691689462.png\"}', 'basic', 0, '2022-04-23 07:05:59', '2023-08-10 17:51:23'),
(48, 'features.content', '{\"heading\":\"Benefits And Facilities\",\"subheading\":\"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus necessitatibus repudiandae porro reprehenderit, beatae perferendis repellat quo ipsa omnis, vitae!\"}', 'basic', 0, '2022-04-23 07:17:22', '2022-11-05 06:45:08'),
(49, 'features.element', '{\"icon\":\"<i class=\\\"las la-globe-americas\\\"><\\/i>\",\"title\":\"We\'re Global\",\"content\":\"Voluptatibus at vero, amet sit esse sequi quam odio debitis. Nulla porro tenetur adipisci laborum sunt repellendus error, asperiores quam nobis sit!\"}', 'basic', 0, '2022-04-23 07:17:55', '2022-10-22 03:20:56'),
(50, 'features.element', '{\"icon\":\"<i class=\\\"las la-headset\\\"><\\/i>\",\"title\":\"Best Support\",\"content\":\"Voluptatibus at vero, amet sit esse sequi quam odio debitis. Nulla porro tenetur adipisci laborum sunt repellendus error, asperiores quam nobis sit!\"}', 'basic', 0, '2022-04-23 07:19:04', '2022-10-22 03:20:27'),
(51, 'features.element', '{\"icon\":\"<i class=\\\"lab la-bitcoin\\\"><\\/i>\",\"title\":\"We Accept Crypto\",\"content\":\"Voluptatibus at vero, amet sit esse sequi quam odio debitis. Nulla porro tenetur adipisci laborum sunt repellendus error, asperiores quam nobis sit!\"}', 'basic', 0, '2022-04-23 07:20:19', '2022-04-23 07:20:20'),
(52, 'features.element', '{\"icon\":\"<i class=\\\"las la-chart-bar\\\"><\\/i>\",\"title\":\"We\'re Profitable\",\"content\":\"Voluptatibus at vero, amet sit esse sequi quam odio debitis. Nulla porro tenetur adipisci laborum sunt repellendus error, asperiores quam nobis sit!\"}', 'basic', 0, '2022-04-23 07:21:09', '2022-10-22 03:19:35'),
(53, 'features.element', '{\"icon\":\"<i class=\\\"las la-lock\\\"><\\/i>\",\"title\":\"We\'re Secure\",\"content\":\"Voluptatibus at vero, amet sit esse sequi quam odio debitis. Nulla porro tenetur adipisci laborum sunt repellendus error, asperiores quam nobis sit!\"}', 'basic', 0, '2022-04-23 07:21:25', '2022-10-22 03:19:13'),
(54, 'features.element', '{\"icon\":\"<i class=\\\"lar la-copy\\\"><\\/i>\",\"title\":\"We\'re Certified\",\"content\":\"Voluptatibus at vero, amet sit esse sequi quam odio debitis. Nulla porro tenetur adipisci laborum sunt repellendus error, asperiores quam nobis sit!\"}', 'basic', 0, '2022-04-23 07:21:43', '2022-10-22 03:18:51'),
(55, 'plan.content', '{\"heading\":\"Choose The Best Plan\",\"subheading\":\"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus necessitatibus repudiandae porro reprehenderit, beatae perferendis repellat quo ipsa omnis, vitae!\"}', 'basic', 0, '2022-04-23 07:24:18', '2022-11-05 06:45:33'),
(56, 'counter.content', '{\"has_image\":\"1\",\"heading\":\"Best Place To Earn Money Online\",\"sub_heading\":\"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus necessitatibus repudiandae porro reprehenderit, beatae perferendis repellat quo ipsa omnis, vitae!\",\"image\":\"63665b25c426e1667652389.png\"}', 'basic', 0, '2022-04-23 07:29:00', '2022-11-05 06:46:30'),
(61, 'testimonial.content', '{\"heading\":\"What Our Clients Say\",\"subheading\":\"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus necessitatibus repudiandae porro reprehenderit, beatae perferendis repellat quo ipsa omnis, vitae!\"}', 'basic', 0, '2022-04-23 07:40:32', '2022-11-05 06:46:57'),
(62, 'testimonial.element', '{\"has_image\":\"1\",\"name\":\"Chris Hamsorth\",\"designation\":\"PTC Player\",\"comment\":\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus fuga, lauda ium odio dolor ut  iusto,  pariatur neque ique quod ratione tempore velit iure sapiente beatae id dolores.\",\"reason\":\"Design Quality\",\"image\":\"6263c2b65eb0b1650705078.jpg\"}', 'basic', 0, '2022-04-23 07:41:18', '2022-10-22 00:58:10'),
(63, 'testimonial.element', '{\"has_image\":\"1\",\"name\":\"John Doe\",\"designation\":\"Businessman\",\"comment\":\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus fuga, lauda ium odio dolor ut  iusto,  pariatur neque ique quod ratione tempore velit iure sapiente beatae id dolores.\",\"reason\":\"For Support\",\"image\":\"6263c2c7a0f131650705095.jpg\"}', 'basic', 0, '2022-04-23 07:41:35', '2022-10-22 00:58:28'),
(64, 'testimonial.element', '{\"has_image\":\"1\",\"name\":\"Rajendra\",\"designation\":\"Web Developer\",\"comment\":\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus fuga, lauda ium odio dolor ut  iusto,  pariatur neque ique quod ratione tempore velit iure sapiente beatae id dolores.v\",\"reason\":\"Code Quality\",\"image\":\"6263c2dd9b0931650705117.jpg\"}', 'basic', 0, '2022-04-23 07:41:57', '2022-10-22 00:58:49'),
(65, 'faq.content', '{\"heading\":\"Frequently Asked Question\",\"subheading\":\"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus necessitatibus repudiandae porro reprehenderit, beatae perferendis repellat quo ipsa omnis, vitae!\"}', 'basic', 0, '2022-04-23 07:44:21', '2022-11-05 06:46:47'),
(66, 'faq.element', '{\"question\":\"What constitutes a quorum in a PTC?\",\"answer\":\"The standard definition of a quorum in Robert\'s Rules of Order is that the majority of an assembly must be present to conduct business. That is, if there are twenty members of a group, eleven must be present to constitute a quorum. The same requirement for a quorum applies to PTCs, with one additional provision. The Handbook (4.1.8.3) provides that absentee votes will be counted in PTCs, whereas Robert\'s Rules really do not provide for a mixture of absentee and in-person votes in an assembly\"}', 'basic', 0, '2022-04-23 07:44:36', '2022-04-23 07:44:36'),
(67, 'faq.element', '{\"question\":\"What constitutes a positive or negative vote in PTCs?\",\"answer\":\"The standard definition of a quorum in Robert\'s Rules of Order is that the majority of an assembly must be present to conduct business. That is, if there are twenty members of a group, eleven must be present to constitute a quorum. The same requirement for a quorum applies to PTCs, with one additional provision. The Handbook (4.1.8.3) provides that absentee votes will be counted in PTCs, whereas Robert\'s Rules really do not provide for a mixture of absentee and in-person votes in an assembly\"}', 'basic', 0, '2022-04-23 07:44:51', '2022-04-23 07:44:51'),
(68, 'faq.element', '{\"question\":\"Can an abstention vote be cast at a PTC meeting?\",\"answer\":\"The standard definition of a quorum in Robert\'s Rules of Order is that the majority of an assembly must be present to conduct business. That is, if there are twenty members of a group, eleven must be present to constitute a quorum. The same requirement for a quorum applies to PTCs, with one additional provision. The Handbook (4.1.8.3) provides that absentee votes will be counted in PTCs, whereas Robert\'s Rules really do not provide for a mixture of absentee and in-person votes in an assembly\"}', 'basic', 0, '2022-04-23 07:45:04', '2022-04-23 07:45:04'),
(69, 'faq.element', '{\"question\":\"Can a faculty member on OCSA or FML serve on a PTC?\",\"answer\":\"The standard definition of a quorum in Robert\'s Rules of Order is that the majority of an assembly must be present to conduct business. That is, if there are twenty members of a group, eleven must be present to constitute a quorum. The same requirement for a quorum applies to PTCs, with one additional provision. The Handbook (4.1.8.3) provides that absentee votes will be counted in PTCs, whereas Robert\'s Rules really do not provide for a mixture of absentee and in-person votes in an assembly\"}', 'basic', 0, '2022-04-23 07:45:19', '2022-04-23 07:45:19'),
(70, 'faq.element', '{\"question\":\"How will additional members of PTCs be elected in departments with fewer than four tenured faculty members?\",\"answer\":\"The standard definition of a quorum in Robert\'s Rules of Order is that the majority of an assembly must be present to conduct business. That is, if there are twenty members of a group, eleven must be present to constitute a quorum. The same requirement for a quorum applies to PTCs, with one additional provision. The Handbook (4.1.8.3) provides that absentee votes will be counted in PTCs, whereas Robert\'s Rules really do not provide for a mixture of absentee and in-person votes in an assembly\"}', 'basic', 0, '2022-04-23 07:45:34', '2022-04-23 07:45:34'),
(71, 'faq.element', '{\"question\":\"How can absentee ballots be cast?\",\"answer\":\"The standard definition of a quorum in Robert\'s Rules of Order is that the majority of an assembly must be present to conduct business. That is, if there are twenty members of a group, eleven must be present to constitute a quorum. The same requirement for a quorum applies to PTCs, with one additional provision. The Handbook (4.1.8.3) provides that absentee votes will be counted in PTCs, whereas Robert\'s Rules really do not provide for a mixture of absentee and in-person votes in an assembly\"}', 'basic', 0, '2022-04-23 07:45:48', '2022-04-23 07:45:48'),
(72, 'faq.element', '{\"question\":\"Why should members of the PTC fill out vote justification forms explaining their votes?\",\"answer\":\"The standard definition of a quorum in Robert\'s Rules of Order is that the majority of an assembly must be present to conduct business. That is, if there are twenty members of a group, eleven must be present to constitute a quorum. The same requirement for a quorum applies to PTCs, with one additional provision. The Handbook (4.1.8.3) provides that absentee votes will be counted in PTCs, whereas Robert\'s Rules really do not provide for a mixture of absentee and in-person votes in an assembly\"}', 'basic', 0, '2022-04-23 07:46:00', '2022-04-23 07:46:01'),
(73, 'policy_pages.element', '{\"title\":\"Privacy and Policy\",\"details\":\"<div class=\\\"mb-5\\\" style=\\\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\\\"><h3 class=\\\"mb-3\\\" style=\\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\\\">What information do we collect?<\\/h3><p class=\\\"font-18\\\" style=\\\"margin-right:0px;margin-left:0px;font-size:18px;\\\">We gather data from you when you register on our site, submit a request, buy any services, react to an overview, or round out a structure. At the point when requesting any assistance or enrolling on our site, as suitable, you might be approached to enter your: name, email address, or telephone number. You may, nonetheless, visit our site anonymously.<\\/p><\\/div><div class=\\\"mb-5\\\" style=\\\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\\\"><h3 class=\\\"mb-3\\\" style=\\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\\\">How do we protect your information?<\\/h3><p class=\\\"font-18\\\" style=\\\"margin-right:0px;margin-left:0px;font-size:18px;\\\">All provided delicate\\/credit data is sent through Stripe.<br \\/>After an exchange, your private data (credit cards, social security numbers, financials, and so on) won\'t be put away on our workers.<\\/p><\\/div><div class=\\\"mb-5\\\" style=\\\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\\\"><h3 class=\\\"mb-3\\\" style=\\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\\\">Do we disclose any information to outside parties?<\\/h3><p class=\\\"font-18\\\" style=\\\"margin-right:0px;margin-left:0px;font-size:18px;\\\">We don\'t sell, exchange, or in any case move to outside gatherings by and by recognizable data. This does exclude confided in outsiders who help us in working our site, leading our business, or adjusting you, since those gatherings consent to keep this data private. We may likewise deliver your data when we accept discharge is suitable to follow the law, implement our site strategies, or ensure our own or others\' rights, property, or wellbeing.<\\/p><\\/div><div class=\\\"mb-5\\\" style=\\\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\\\"><h3 class=\\\"mb-3\\\" style=\\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\\\">Children\'s Online Privacy Protection Act Compliance<\\/h3><p class=\\\"font-18\\\" style=\\\"margin-right:0px;margin-left:0px;font-size:18px;\\\">We are consistent with the prerequisites of COPPA (Children\'s Online Privacy Protection Act), we don\'t gather any data from anybody under 13 years old. Our site, items, and administrations are completely coordinated to individuals who are in any event 13 years of age or more established.<\\/p><\\/div><div class=\\\"mb-5\\\" style=\\\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\\\"><h3 class=\\\"mb-3\\\" style=\\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\\\">Changes to our Privacy Policy<\\/h3><p class=\\\"font-18\\\" style=\\\"margin-right:0px;margin-left:0px;font-size:18px;\\\">If we decide to change our privacy policy, we will post those changes on this page.<\\/p><\\/div><div class=\\\"mb-5\\\" style=\\\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\\\"><h3 class=\\\"mb-3\\\" style=\\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\\\">How long we retain your information?<\\/h3><p class=\\\"font-18\\\" style=\\\"margin-right:0px;margin-left:0px;font-size:18px;\\\">At the point when you register for our site, we cycle and keep your information we have about you however long you don\'t erase the record or withdraw yourself (subject to laws and guidelines).<\\/p><\\/div><div class=\\\"mb-5\\\" style=\\\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\\\"><h3 class=\\\"mb-3\\\" style=\\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\\\">What we don\\u2019t do with your data<\\/h3><p class=\\\"font-18\\\" style=\\\"margin-right:0px;margin-left:0px;font-size:18px;\\\">We don\'t and will never share, unveil, sell, or in any case give your information to different organizations for the promoting of their items or administrations.<\\/p><\\/div>\"}', 'basic', 0, '2022-04-23 07:49:43', '2022-04-23 08:37:03'),
(74, 'policy_pages.element', '{\"title\":\"Payment Policy\",\"details\":\"<div class=\\\"mb-5\\\" style=\\\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\\\"><h3 class=\\\"mb-3\\\" style=\\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\\\">What information do we collect?<\\/h3><p class=\\\"font-18\\\" style=\\\"margin-right:0px;margin-left:0px;font-size:18px;\\\">We gather data from you when you register on our site, submit a request, buy any services, react to an overview, or round out a structure. At the point when requesting any assistance or enrolling on our site, as suitable, you might be approached to enter your: name, email address, or telephone number. You may, nonetheless, visit our site anonymously.<\\/p><\\/div><div class=\\\"mb-5\\\" style=\\\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\\\"><h3 class=\\\"mb-3\\\" style=\\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\\\">How do we protect your information?<\\/h3><p class=\\\"font-18\\\" style=\\\"margin-right:0px;margin-left:0px;font-size:18px;\\\">All provided delicate\\/credit data is sent through Stripe.<br \\/>After an exchange, your private data (credit cards, social security numbers, financials, and so on) won\'t be put away on our workers.<\\/p><\\/div><div class=\\\"mb-5\\\" style=\\\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\\\"><h3 class=\\\"mb-3\\\" style=\\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\\\">Do we disclose any information to outside parties?<\\/h3><p class=\\\"font-18\\\" style=\\\"margin-right:0px;margin-left:0px;font-size:18px;\\\">We don\'t sell, exchange, or in any case move to outside gatherings by and by recognizable data. This does exclude confided in outsiders who help us in working our site, leading our business, or adjusting you, since those gatherings consent to keep this data private. We may likewise deliver your data when we accept discharge is suitable to follow the law, implement our site strategies, or ensure our own or others\' rights, property, or wellbeing.<\\/p><\\/div><div class=\\\"mb-5\\\" style=\\\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\\\"><h3 class=\\\"mb-3\\\" style=\\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\\\">Children\'s Online Privacy Protection Act Compliance<\\/h3><p class=\\\"font-18\\\" style=\\\"margin-right:0px;margin-left:0px;font-size:18px;\\\">We are consistent with the prerequisites of COPPA (Children\'s Online Privacy Protection Act), we don\'t gather any data from anybody under 13 years old. Our site, items, and administrations are completely coordinated to individuals who are in any event 13 years of age or more established.<\\/p><\\/div><div class=\\\"mb-5\\\" style=\\\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\\\"><h3 class=\\\"mb-3\\\" style=\\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\\\">Changes to our Privacy Policy<\\/h3><p class=\\\"font-18\\\" style=\\\"margin-right:0px;margin-left:0px;font-size:18px;\\\">If we decide to change our privacy policy, we will post those changes on this page.<\\/p><\\/div><div class=\\\"mb-5\\\" style=\\\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\\\"><h3 class=\\\"mb-3\\\" style=\\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\\\">How long we retain your information?<\\/h3><p class=\\\"font-18\\\" style=\\\"margin-right:0px;margin-left:0px;font-size:18px;\\\">At the point when you register for our site, we cycle and keep your information we have about you however long you don\'t erase the record or withdraw yourself (subject to laws and guidelines).<\\/p><\\/div><div class=\\\"mb-5\\\" style=\\\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\\\"><h3 class=\\\"mb-3\\\" style=\\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\\\">What we don\\u2019t do with your data<\\/h3><p class=\\\"font-18\\\" style=\\\"margin-right:0px;margin-left:0px;font-size:18px;\\\">We don\'t and will never share, unveil, sell, or in any case give your information to different organizations for the promoting of their items or administrations.<\\/p><\\/div>\"}', 'basic', 0, '2022-04-23 07:50:04', '2022-04-23 07:50:04'),
(75, 'blog.content', '{\"heading\":\"Our Latest Blog\",\"subheading\":\"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus necessitatibus repudiandae porro reprehenderit, beatae perferendis repellat quo ipsa omnis, vitae!\"}', 'basic', 0, '2022-04-23 07:51:10', '2022-11-05 06:47:10'),
(76, 'blog.element', '{\"has_image\":[\"1\"],\"title\":\"Dit boek is een verhand eling over de\",\"description\":\"<p style=\\\"margin:20px 0px 21px;font-size:16px;color:rgb(102,102,102);line-height:30px;font-family:\'Noto Sans\', sans-serif;\\\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered that the alteration in some form by injected humour or the an randomised words which don\'t look even evry is and slightly believable. If you are going to use a passage of Lorem Ipsum you need to be sure there isn\'t is the anything aembarrassing hidden in the middle of text.Ipsum available but the majority have that suffered is alteration in some form by injected humour or randomised words.<\\/p><p class=\\\"marked\\\" style=\\\"margin:20px 0px 21px;font-size:16px;color:rgb(0,0,80);line-height:30px;font-style:italic;font-family:\'Noto Sans\', sans-serif;\\\">All their equipment and instruments are alive.All their equipment and instruments are alive. I the that about to watched storm, so beautiful terrific.Silver mist suffused the deck the ship.The are recorded voice the a dumm a scratched the Tthst speaker. Almost before we knew it.Almost is before we knew it we had left the dummy is ground.<\\/p><p style=\\\"margin:20px 0px 6px;font-size:16px;color:rgb(102,102,102);line-height:30px;font-family:\'Noto Sans\', sans-serif;\\\">The face of the moon was in shadow.The spectacle before us was indeed sublime.All their equipment tha is and instruments are alive.All their equipment and instruments are alive.I watched the storm so beautiful yet terrific.Silver mist suffused the deck of the ship.<\\/p>\",\"image\":\"6263c534d4d551650705716.jpg\"}', 'basic', 3, '2022-04-23 07:51:56', '2022-04-23 08:30:57'),
(77, 'blog.element', '{\"has_image\":[\"1\"],\"title\":\"Dit boek is een verhand eling over de\",\"description\":\"<p style=\\\"margin:20px 0px 21px;font-size:16px;color:rgb(102,102,102);line-height:30px;font-family:\'Noto Sans\', sans-serif;\\\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered that the alteration in some form by injected humour or the an randomised words which don\'t look even evry is and slightly believable. If you are going to use a passage of Lorem Ipsum you need to be sure there isn\'t is the anything aembarrassing hidden in the middle of text.Ipsum available but the majority have that suffered is alteration in some form by injected humour or randomised words.<\\/p><p class=\\\"marked\\\" style=\\\"margin:20px 0px 21px;font-size:16px;color:rgb(0,0,80);line-height:30px;font-style:italic;font-family:\'Noto Sans\', sans-serif;\\\">All their equipment and instruments are alive.All their equipment and instruments are alive. I the that about to watched storm, so beautiful terrific.Silver mist suffused the deck the ship.The are recorded voice the a dumm a scratched the Tthst speaker. Almost before we knew it.Almost is before we knew it we had left the dummy is ground.<\\/p><p style=\\\"margin:20px 0px 6px;font-size:16px;color:rgb(102,102,102);line-height:30px;font-family:\'Noto Sans\', sans-serif;\\\">The face of the moon was in shadow.The spectacle before us was indeed sublime.All their equipment tha is and instruments are alive.All their equipment and instruments are alive.I watched the storm so beautiful yet terrific.Silver mist suffused the deck of the ship.<\\/p>\",\"image\":\"6263c5776573b1650705783.jpg\"}', 'basic', 0, '2022-04-23 07:53:03', '2022-04-23 07:53:03'),
(78, 'blog.element', '{\"has_image\":[\"1\"],\"title\":\"Er zijn vele variaties van passages van\",\"description\":\"<p style=\\\"margin:20px 0px 21px;font-size:16px;color:rgb(102,102,102);line-height:30px;font-family:\'Noto Sans\', sans-serif;\\\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered that the alteration in some form by injected humour or the an randomised words which don\'t look even evry is and slightly believable. If you are going to use a passage of Lorem Ipsum you need to be sure there isn\'t is the anything aembarrassing hidden in the middle of text.Ipsum available but the majority have that suffered is alteration in some form by injected humour or randomised words.<\\/p><p class=\\\"marked\\\" style=\\\"margin:20px 0px 21px;font-size:16px;color:rgb(0,0,80);line-height:30px;font-style:italic;font-family:\'Noto Sans\', sans-serif;\\\">All their equipment and instruments are alive.All their equipment and instruments are alive. I the that about to watched storm, so beautiful terrific.Silver mist suffused the deck the ship.The are recorded voice the a dumm a scratched the Tthst speaker. Almost before we knew it.Almost is before we knew it we had left the dummy is ground.<\\/p><p style=\\\"margin:20px 0px 6px;font-size:16px;color:rgb(102,102,102);line-height:30px;font-family:\'Noto Sans\', sans-serif;\\\">The face of the moon was in shadow.The spectacle before us was indeed sublime.All their equipment tha is and instruments are alive.All their equipment and instruments are alive.I watched the storm so beautiful yet terrific.Silver mist suffused the deck of the ship.<\\/p>\",\"image\":\"6263c5ca845e61650705866.jpg\"}', 'basic', 3, '2022-04-23 07:54:26', '2022-04-23 08:30:45'),
(79, 'blog.element', '{\"has_image\":[\"1\"],\"title\":\"Het is al geruime tijd een bekend geg\",\"description\":\"<p style=\\\"margin:20px 0px 21px;font-size:16px;color:rgb(102,102,102);line-height:30px;font-family:\'Noto Sans\', sans-serif;\\\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered that the alteration in some form by injected humour or the an randomised words which don\'t look even evry is and slightly believable. If you are going to use a passage of Lorem Ipsum you need to be sure there isn\'t is the anything aembarrassing hidden in the middle of text.Ipsum available but the majority have that suffered is alteration in some form by injected humour or randomised words.<\\/p><p class=\\\"marked\\\" style=\\\"margin:20px 0px 21px;font-size:16px;color:rgb(0,0,80);line-height:30px;font-style:italic;font-family:\'Noto Sans\', sans-serif;\\\">All their equipment and instruments are alive.All their equipment and instruments are alive. I the that about to watched storm, so beautiful terrific.Silver mist suffused the deck the ship.The are recorded voice the a dumm a scratched the Tthst speaker. Almost before we knew it.Almost is before we knew it we had left the dummy is ground.<\\/p><p style=\\\"margin:20px 0px 6px;font-size:16px;color:rgb(102,102,102);line-height:30px;font-family:\'Noto Sans\', sans-serif;\\\">The face of the moon was in shadow.The spectacle before us was indeed sublime.All their equipment tha is and instruments are alive.All their equipment and instruments are alive.I watched the storm so beautiful yet terrific.Silver mist suffused the deck of the ship.<\\/p>\",\"image\":\"6263c5e6ee3281650705894.jpg\"}', 'basic', 2, '2022-04-23 07:54:54', '2022-10-19 23:45:26'),
(80, 'blog.element', '{\"has_image\":[\"1\"],\"title\":\"Law firm opened near to that gonig to\",\"description\":\"<p style=\\\"margin:20px 0px 21px;font-size:16px;color:rgb(102,102,102);line-height:30px;font-family:\'Noto Sans\', sans-serif;\\\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered that the alteration in some form by injected humour or the an randomised words which don\'t look even evry is and slightly believable. If you are going to use a passage of Lorem Ipsum you need to be sure there isn\'t is the anything aembarrassing hidden in the middle of text.Ipsum available but the majority have that suffered is alteration in some form by injected humour or randomised words.<\\/p><p class=\\\"marked\\\" style=\\\"margin:20px 0px 21px;font-size:16px;color:rgb(0,0,80);line-height:30px;font-style:italic;font-family:\'Noto Sans\', sans-serif;\\\">All their equipment and instruments are alive.All their equipment and instruments are alive. I the that about to watched storm, so beautiful terrific.Silver mist suffused the deck the ship.The are recorded voice the a dumm a scratched the Tthst speaker. Almost before we knew it.Almost is before we knew it we had left the dummy is ground.<\\/p><p style=\\\"margin:20px 0px 6px;font-size:16px;color:rgb(102,102,102);line-height:30px;font-family:\'Noto Sans\', sans-serif;\\\">The face of the moon was in shadow.The spectacle before us was indeed sublime.All their equipment tha is and instruments are alive.All their equipment and instruments are alive.I watched the storm so beautiful yet terrific.Silver mist suffused the deck of the ship.<\\/p>\",\"image\":\"6263c5ff668751650705919.jpg\"}', 'basic', 4, '2022-04-23 07:55:19', '2022-10-21 23:37:58'),
(81, 'blog.element', '{\"has_image\":[\"1\"],\"title\":\"Law firm opened near to that gonig to\",\"description\":\"<p style=\\\"margin:20px 0px 21px;font-size:16px;color:rgb(102,102,102);line-height:30px;font-family:\'Noto Sans\', sans-serif;\\\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered that the alteration in some form by injected humour or the an randomised words which don\'t look even evry is and slightly believable. If you are going to use a passage of Lorem Ipsum you need to be sure there isn\'t is the anything aembarrassing hidden in the middle of text.Ipsum available but the majority have that suffered is alteration in some form by injected humour or randomised words.<\\/p><p class=\\\"marked\\\" style=\\\"margin:20px 0px 21px;font-size:16px;color:rgb(0,0,80);line-height:30px;font-style:italic;font-family:\'Noto Sans\', sans-serif;\\\">All their equipment and instruments are alive.All their equipment and instruments are alive. I the that about to watched storm, so beautiful terrific.Silver mist suffused the deck the ship.The are recorded voice the a dumm a scratched the Tthst speaker. Almost before we knew it.Almost is before we knew it we had left the dummy is ground.<\\/p><p style=\\\"margin:20px 0px 6px;font-size:16px;color:rgb(102,102,102);line-height:30px;font-family:\'Noto Sans\', sans-serif;\\\">The face of the moon was in shadow.The spectacle before us was indeed sublime.All their equipment tha is and instruments are alive.All their equipment and instruments are alive.I watched the storm so beautiful yet terrific.Silver mist suffused the deck of the ship.<\\/p>\",\"image\":\"6263c61391bf31650705939.jpg\"}', 'basic', 17, '2022-04-23 07:55:39', '2022-11-05 06:47:38'),
(82, 'breadcrumb.content', '{\"has_image\":\"1\",\"image\":\"6353c06cde98b1666433132.png\"}', 'basic', 0, '2022-04-23 08:25:32', '2022-10-22 04:05:33'),
(83, 'contact.content', '{\"heading\":\"Send Your Messages\",\"subheading\":\"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus necessitatibus repudiandae porro reprehenderit, beatae perferendis repellat quo ipsa omnis, vitae!\"}', 'basic', 0, '2022-04-23 08:42:01', '2022-11-05 06:51:39'),
(84, 'contact.element', '{\"icon\":\"<i class=\\\"far fa-envelope\\\"><\\/i>\",\"title\":\"Email Address\",\"content\":\"contact@ptcl.com\"}', 'basic', 0, '2022-04-23 08:42:19', '2022-04-23 08:42:19'),
(85, 'contact.element', '{\"icon\":\"<i class=\\\"fas fa-phone\\\"><\\/i>\",\"title\":\"Phone Number\",\"content\":\"+012-345-67890\"}', 'basic', 0, '2022-04-23 08:42:36', '2022-04-23 08:42:36'),
(86, 'contact.element', '{\"icon\":\"<i class=\\\"fas fa-map-marker-alt\\\"><\\/i>\",\"title\":\"Office Address\",\"content\":\"ABC road street, Cool City\"}', 'basic', 0, '2022-04-23 08:42:51', '2022-04-23 08:42:51'),
(87, 'login.content', '{\"has_image\":\"1\",\"heading\":\"Sign In\",\"image\":\"63510e8a10d051666256522.png\"}', 'basic', 0, '2022-04-24 07:43:31', '2022-10-20 03:34:11'),
(88, 'register.content', '{\"has_image\":\"1\",\"heading\":\"Register New Account\",\"image\":\"635117e2a9f501666258914.png\"}', 'basic', 0, '2022-04-24 07:43:48', '2022-10-20 03:41:55'),
(89, 'kyc_info.content', '{\"verification_content\":\"Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic officia quod natus, non dicta perspiciatis, quae repellendus ea illum aut debitis sint amet? Ratione voluptates beatae numquam.\",\"pending_content\":\"Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic officia quod natus, non dicta perspiciatis, quae repellendus ea illum aut debitis sint amet? Ratione voluptates beatae numquam.\"}', 'basic', 0, '2022-04-24 22:29:41', '2022-04-24 22:29:41'),
(90, 'registration.content', '{\"has_image\":\"1\",\"heading\":\"Sign Up\",\"image\":\"63511719c50ce1666258713.png\"}', 'basic', 0, '2022-10-20 03:38:33', '2022-10-20 03:38:34'),
(91, 'header.content', '{\"phone\":\"880 123 5656 345\",\"email\":\"support@mail.com\"}', 'basic', 0, '2022-10-20 05:12:50', '2022-10-20 05:12:50'),
(92, 'banner.content', '{\"has_image\":\"1\",\"heading\":\"Earn and Make Money Online Per Click\",\"subheading\":\"Paid to click is an online business model that draws online traffic from people aiming to earn money from home\",\"button_name\":\"Get Started\",\"button_link\":\"user\\/login\",\"video_link\":\"https:\\/\\/www.youtube.com\\/embed\\/WOb4cj7izpE\",\"background_image\":\"6351329203b081666265746.png\",\"image\":\"635132927697f1666265746.png\"}', 'basic', 0, '2022-10-20 05:33:35', '2022-10-20 06:11:26'),
(93, 'client.element', '{\"has_image\":\"1\",\"image\":\"6353862f5e5fa1666418223.png\"}', 'basic', 0, '2022-10-21 23:57:03', '2022-10-21 23:57:03'),
(94, 'client.element', '{\"has_image\":\"1\",\"image\":\"63538648e9f781666418248.png\"}', 'basic', 0, '2022-10-21 23:57:28', '2022-10-21 23:57:28'),
(95, 'client.element', '{\"has_image\":\"1\",\"image\":\"635386503c90c1666418256.png\"}', 'basic', 0, '2022-10-21 23:57:36', '2022-10-21 23:57:36'),
(96, 'client.element', '{\"has_image\":\"1\",\"image\":\"6353865adc39f1666418266.png\"}', 'basic', 0, '2022-10-21 23:57:46', '2022-10-21 23:57:46'),
(97, 'client.element', '{\"has_image\":\"1\",\"image\":\"63538663133bb1666418275.png\"}', 'basic', 0, '2022-10-21 23:57:55', '2022-10-21 23:57:55'),
(98, 'client.element', '{\"has_image\":\"1\",\"image\":\"635386680ee031666418280.png\"}', 'basic', 0, '2022-10-21 23:58:00', '2022-10-21 23:58:00'),
(99, 'client.element', '{\"has_image\":\"1\",\"image\":\"6353866c566fc1666418284.png\"}', 'basic', 0, '2022-10-21 23:58:04', '2022-10-21 23:58:04'),
(100, 'client.element', '{\"has_image\":\"1\",\"image\":\"635386710f8d41666418289.png\"}', 'basic', 0, '2022-10-21 23:58:09', '2022-10-21 23:58:09'),
(101, 'testimonial.element', '{\"has_image\":\"1\",\"name\":\"Peter Parker\",\"designation\":\"Microtech, Inc.\",\"comment\":\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus fuga, lauda ium odio dolor ut  iusto,  pariatur neque ique quod ratione tempore velit iure sapiente beatae id dolores.\",\"reason\":\"Design Quality\",\"image\":\"635394f08fc271666422000.png\"}', 'basic', 0, '2022-10-22 01:00:00', '2022-10-22 01:00:00'),
(104, 'footer.content', '{\"heading\":\"About Us\",\"description\":\"Maecenas tempus tellus egondime honcus sequam seitmet dipiscing sem eque sedipsuNam quam egondime honcus sequam\"}', 'basic', 0, '2022-10-22 04:29:55', '2022-10-22 04:29:55'),
(109, 'social_icon.element', '{\"title\":\"Instagram\",\"icon\":\"<i class=\\\"lab la-instagram\\\"><\\/i>\",\"url\":\"https:\\/\\/www.instagram.com\"}', 'basic', 0, '2022-10-22 04:57:55', '2022-10-22 04:57:55'),
(110, 'social_icon.element', '{\"title\":\"LinkedIn\",\"icon\":\"<i class=\\\"lab la-linkedin-in\\\"><\\/i>\",\"url\":\"https:\\/\\/www.linkedin.com\"}', 'basic', 0, '2022-10-22 04:58:26', '2022-10-22 04:58:26'),
(111, 'social_icon.element', '{\"title\":\"Twitter\",\"icon\":\"<i class=\\\"lab la-twitter\\\"><\\/i>\",\"url\":\"https:\\/\\/twitter.com\"}', 'basic', 0, '2022-10-22 04:58:51', '2022-10-22 04:58:51'),
(112, 'social_icon.element', '{\"title\":\"Facebook\",\"icon\":\"<i class=\\\"lab la-facebook-f\\\"><\\/i>\",\"url\":\"https:\\/\\/www.facebook.com\"}', 'basic', 0, '2022-10-22 04:59:15', '2022-10-22 04:59:15'),
(113, 'about.content', '{\"has_image\":\"1\",\"heading\":\"Make more than ever before Join Us\",\"subheading\":\"About Us\",\"description\":\"<p style=\\\"margin-bottom:1rem;color:rgb(95,125,149);font-family:\'Open Sans\', sans-serif;font-size:16px;\\\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque natus, repellendus consequatur, animi minima ex quidem temporibus ab odio, eaque aliquid consectetur vel adipisci.<\\/p><ul class=\\\"list list--check\\\" style=\\\"color:rgb(95,125,149);font-family:\'Open Sans\', sans-serif;\\\"><li>PPC Keyword Research<\\/li><li>Managing Your PPC Campaigns<\\/li><li>Review Costly PPC Keywords<\\/li><li>Refine Landing Pages<\\/li><\\/ul>\",\"image\":\"6353d54ba02d11666438475.png\"}', 'ptc_diamond', 0, '2022-10-22 05:12:01', '2022-10-22 05:34:35'),
(114, 'banner.content', '{\"has_image\":\"1\",\"heading\":\"Earn and Make Money Online Per Click\",\"subheading\":\"Paid to click is an online business model that draws online traffic from people aiming to earn money from home\",\"button_name\":\"Get Started\",\"button_link\":\"user\\/login\",\"video_link\":\"https:\\/\\/www.youtube.com\\/watch?v=WOb4cj7izpE\",\"background_image\":\"6353d4d0413691666438352.png\",\"image\":\"6353d4d0b3de01666438352.png\"}', 'ptc_diamond', 0, '2022-10-22 05:13:08', '2022-11-05 00:42:08'),
(115, 'blog.content', '{\"heading\":\"Blog Section\",\"subheading\":\"Blog\"}', 'ptc_diamond', 0, '2022-10-22 05:13:15', '2022-10-22 05:13:15'),
(116, 'blog.element', '{\"has_image\":[\"1\"],\"title\":\"Dit boek is een verhand eling over de\",\"description\":\"<p style=\\\"margin:20px 0px 21px;font-size:16px;color:rgb(102,102,102);line-height:30px;font-family:\'Noto Sans\', sans-serif;\\\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered that the alteration in some form by injected humour or the an randomised words which don\'t look even evry is and slightly believable. If you are going to use a passage of Lorem Ipsum you need to be sure there isn\'t is the anything aembarrassing hidden in the middle of text.Ipsum available but the majority have that suffered is alteration in some form by injected humour or randomised words.<\\/p><p class=\\\"marked\\\" style=\\\"margin:20px 0px 21px;font-size:16px;color:rgb(0,0,80);line-height:30px;font-style:italic;font-family:\'Noto Sans\', sans-serif;\\\">All their equipment and instruments are alive.All their equipment and instruments are alive. I the that about to watched storm, so beautiful terrific.Silver mist suffused the deck the ship.The are recorded voice the a dumm a scratched the Tthst speaker. Almost before we knew it.Almost is before we knew it we had left the dummy is ground.<\\/p><p style=\\\"margin:20px 0px 6px;font-size:16px;color:rgb(102,102,102);line-height:30px;font-family:\'Noto Sans\', sans-serif;\\\">The face of the moon was in shadow.The spectacle before us was indeed sublime.All their equipment tha is and instruments are alive.All their equipment and instruments are alive.I watched the storm so beautiful yet terrific.Silver mist suffused the deck of the ship.<\\/p>\",\"image\":\"6353da51703671666439761.png\"}', 'ptc_diamond', 0, '2022-10-22 05:13:15', '2022-10-22 05:56:01'),
(117, 'blog.element', '{\"has_image\":[\"1\"],\"title\":\"Dit boek is een verhand eling over de\",\"description\":\"<p style=\\\"margin:20px 0px 21px;font-size:16px;color:rgb(102,102,102);line-height:30px;font-family:\'Noto Sans\', sans-serif;\\\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered that the alteration in some form by injected humour or the an randomised words which don\'t look even evry is and slightly believable. If you are going to use a passage of Lorem Ipsum you need to be sure there isn\'t is the anything aembarrassing hidden in the middle of text.Ipsum available but the majority have that suffered is alteration in some form by injected humour or randomised words.<\\/p><p class=\\\"marked\\\" style=\\\"margin:20px 0px 21px;font-size:16px;color:rgb(0,0,80);line-height:30px;font-style:italic;font-family:\'Noto Sans\', sans-serif;\\\">All their equipment and instruments are alive.All their equipment and instruments are alive. I the that about to watched storm, so beautiful terrific.Silver mist suffused the deck the ship.The are recorded voice the a dumm a scratched the Tthst speaker. Almost before we knew it.Almost is before we knew it we had left the dummy is ground.<\\/p><p style=\\\"margin:20px 0px 6px;font-size:16px;color:rgb(102,102,102);line-height:30px;font-family:\'Noto Sans\', sans-serif;\\\">The face of the moon was in shadow.The spectacle before us was indeed sublime.All their equipment tha is and instruments are alive.All their equipment and instruments are alive.I watched the storm so beautiful yet terrific.Silver mist suffused the deck of the ship.<\\/p>\",\"image\":\"6353da5e5f0c71666439774.png\"}', 'ptc_diamond', 27, '2022-10-22 05:13:15', '2022-10-26 02:46:42'),
(118, 'blog.element', '{\"has_image\":[\"1\"],\"title\":\"Er zijn vele variaties van passages van\",\"description\":\"<p style=\\\"margin:20px 0px 21px;font-size:16px;color:rgb(102,102,102);line-height:30px;font-family:\'Noto Sans\', sans-serif;\\\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered that the alteration in some form by injected humour or the an randomised words which don\'t look even evry is and slightly believable. If you are going to use a passage of Lorem Ipsum you need to be sure there isn\'t is the anything aembarrassing hidden in the middle of text.Ipsum available but the majority have that suffered is alteration in some form by injected humour or randomised words.<\\/p><p class=\\\"marked\\\" style=\\\"margin:20px 0px 21px;font-size:16px;color:rgb(0,0,80);line-height:30px;font-style:italic;font-family:\'Noto Sans\', sans-serif;\\\">All their equipment and instruments are alive.All their equipment and instruments are alive. I the that about to watched storm, so beautiful terrific.Silver mist suffused the deck the ship.The are recorded voice the a dumm a scratched the Tthst speaker. Almost before we knew it.Almost is before we knew it we had left the dummy is ground.<\\/p><p style=\\\"margin:20px 0px 6px;font-size:16px;color:rgb(102,102,102);line-height:30px;font-family:\'Noto Sans\', sans-serif;\\\">The face of the moon was in shadow.The spectacle before us was indeed sublime.All their equipment tha is and instruments are alive.All their equipment and instruments are alive.I watched the storm so beautiful yet terrific.Silver mist suffused the deck of the ship.<\\/p>\",\"image\":\"6353da6f575171666439791.png\"}', 'ptc_diamond', 2, '2022-10-22 05:13:15', '2022-11-05 07:00:30');
INSERT INTO `frontends` (`id`, `data_keys`, `data_values`, `template_name`, `view`, `created_at`, `updated_at`) VALUES
(119, 'blog.element', '{\"has_image\":[\"1\"],\"title\":\"Het is al geruime tijd een bekend geg\",\"description\":\"<p style=\\\"margin:20px 0px 21px;font-size:16px;color:rgb(102,102,102);line-height:30px;font-family:\'Noto Sans\', sans-serif;\\\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered that the alteration in some form by injected humour or the an randomised words which don\'t look even evry is and slightly believable. If you are going to use a passage of Lorem Ipsum you need to be sure there isn\'t is the anything aembarrassing hidden in the middle of text.Ipsum available but the majority have that suffered is alteration in some form by injected humour or randomised words.<\\/p><p class=\\\"marked\\\" style=\\\"margin:20px 0px 21px;font-size:16px;color:rgb(0,0,80);line-height:30px;font-style:italic;font-family:\'Noto Sans\', sans-serif;\\\">All their equipment and instruments are alive.All their equipment and instruments are alive. I the that about to watched storm, so beautiful terrific.Silver mist suffused the deck the ship.The are recorded voice the a dumm a scratched the Tthst speaker. Almost before we knew it.Almost is before we knew it we had left the dummy is ground.<\\/p><p style=\\\"margin:20px 0px 6px;font-size:16px;color:rgb(102,102,102);line-height:30px;font-family:\'Noto Sans\', sans-serif;\\\">The face of the moon was in shadow.The spectacle before us was indeed sublime.All their equipment tha is and instruments are alive.All their equipment and instruments are alive.I watched the storm so beautiful yet terrific.Silver mist suffused the deck of the ship.<\\/p>\",\"image\":\"6353da79b93f71666439801.png\"}', 'ptc_diamond', 24, '2022-10-22 05:13:15', '2022-11-05 07:00:27'),
(120, 'blog.element', '{\"has_image\":[\"1\"],\"title\":\"Law firm opened near to that gonig to\",\"description\":\"<p style=\\\"margin:20px 0px 21px;font-size:16px;color:rgb(102,102,102);line-height:30px;font-family:\'Noto Sans\', sans-serif;\\\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered that the alteration in some form by injected humour or the an randomised words which don\'t look even evry is and slightly believable. If you are going to use a passage of Lorem Ipsum you need to be sure there isn\'t is the anything aembarrassing hidden in the middle of text.Ipsum available but the majority have that suffered is alteration in some form by injected humour or randomised words.<\\/p><p class=\\\"marked\\\" style=\\\"margin:20px 0px 21px;font-size:16px;color:rgb(0,0,80);line-height:30px;font-style:italic;font-family:\'Noto Sans\', sans-serif;\\\">All their equipment and instruments are alive.All their equipment and instruments are alive. I the that about to watched storm, so beautiful terrific.Silver mist suffused the deck the ship.The are recorded voice the a dumm a scratched the Tthst speaker. Almost before we knew it.Almost is before we knew it we had left the dummy is ground.<\\/p><p style=\\\"margin:20px 0px 6px;font-size:16px;color:rgb(102,102,102);line-height:30px;font-family:\'Noto Sans\', sans-serif;\\\">The face of the moon was in shadow.The spectacle before us was indeed sublime.All their equipment tha is and instruments are alive.All their equipment and instruments are alive.I watched the storm so beautiful yet terrific.Silver mist suffused the deck of the ship.<\\/p>\",\"image\":\"6353da8e4db201666439822.png\"}', 'ptc_diamond', 12, '2022-10-22 05:13:15', '2022-11-04 23:50:02'),
(121, 'blog.element', '{\"has_image\":[\"1\"],\"title\":\"Law firm opened near to that gonig to\",\"description\":\"<p style=\\\"margin:20px 0px 21px;font-size:16px;color:rgb(102,102,102);line-height:30px;font-family:\'Noto Sans\', sans-serif;\\\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered that the alteration in some form by injected humour or the an randomised words which don\'t look even evry is and slightly believable. If you are going to use a passage of Lorem Ipsum you need to be sure there isn\'t is the anything aembarrassing hidden in the middle of text.Ipsum available but the majority have that suffered is alteration in some form by injected humour or randomised words.<\\/p><p class=\\\"marked\\\" style=\\\"margin:20px 0px 21px;font-size:16px;color:rgb(0,0,80);line-height:30px;font-style:italic;font-family:\'Noto Sans\', sans-serif;\\\">All their equipment and instruments are alive.All their equipment and instruments are alive. I the that about to watched storm, so beautiful terrific.Silver mist suffused the deck the ship.The are recorded voice the a dumm a scratched the Tthst speaker. Almost before we knew it.Almost is before we knew it we had left the dummy is ground.<\\/p><p style=\\\"margin:20px 0px 6px;font-size:16px;color:rgb(102,102,102);line-height:30px;font-family:\'Noto Sans\', sans-serif;\\\">The face of the moon was in shadow.The spectacle before us was indeed sublime.All their equipment tha is and instruments are alive.All their equipment and instruments are alive.I watched the storm so beautiful yet terrific.Silver mist suffused the deck of the ship.<\\/p>\",\"image\":\"6353daa14a4121666439841.png\"}', 'ptc_diamond', 16, '2022-10-22 05:13:15', '2022-10-25 00:47:39'),
(122, 'breadcrumb.content', '{\"has_image\":\"1\",\"image\":\"6353da0bc1a7a1666439691.png\"}', 'ptc_diamond', 0, '2022-10-22 05:13:20', '2022-10-22 05:54:51'),
(131, 'contact.content', '{\"has_image\":\"1\",\"heading\":\"Send Your Messages\",\"image\":\"6353db3012f591666439984.png\"}', 'ptc_diamond', 0, '2022-10-22 05:20:10', '2022-10-22 05:59:44'),
(132, 'contact.element', '{\"icon\":\"<i class=\\\"far fa-envelope\\\"><\\/i>\",\"title\":\"Email Address\",\"content\":\"contact@ptcl.com\"}', 'ptc_diamond', 0, '2022-10-22 05:20:10', '2022-10-22 05:20:10'),
(133, 'contact.element', '{\"icon\":\"<i class=\\\"fas fa-phone\\\"><\\/i>\",\"title\":\"Phone Number\",\"content\":\"+012-345-67890\"}', 'ptc_diamond', 0, '2022-10-22 05:20:10', '2022-10-22 05:20:10'),
(134, 'contact.element', '{\"icon\":\"<i class=\\\"fas fa-map-marker-alt\\\"><\\/i>\",\"title\":\"Office Address\",\"content\":\"ABC road street, Cool City\"}', 'ptc_diamond', 0, '2022-10-22 05:20:10', '2022-10-22 05:20:10'),
(135, 'counter.content', '{\"has_image\":\"1\",\"heading\":\"Best Place To Earn Money Online Join Us\",\"subheading\":\"Discover More\",\"description\":\"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque natus, repellendus consequatur, animi minima ex quidem temporibus ab odio, eaque aliquid consectetur.\",\"background_image\":\"6353d5cdce1e71666438605.png\"}', 'ptc_diamond', 0, '2022-10-22 05:20:16', '2022-10-22 05:36:46'),
(136, 'counter.element', '{\"title\":\"Withdraw\",\"number\":\"$50\",\"range\":\"K+\"}', 'ptc_diamond', 0, '2022-10-22 05:20:16', '2022-10-23 05:07:42'),
(137, 'counter.element', '{\"title\":\"Users\",\"number\":\"30\",\"range\":\"K+\"}', 'ptc_diamond', 0, '2022-10-22 05:20:16', '2022-10-23 05:08:04'),
(138, 'counter.element', '{\"title\":\"Impression\",\"number\":\"20\",\"range\":\"M+\"}', 'ptc_diamond', 0, '2022-10-22 05:20:16', '2022-10-23 05:08:15'),
(139, 'counter.element', '{\"title\":\"Advertisement\",\"number\":\"568\",\"range\":\"K+\"}', 'ptc_diamond', 0, '2022-10-22 05:20:16', '2022-10-23 05:08:24'),
(140, 'faq.content', '{\"heading\":\"Frequently Asked Question\",\"subheading\":\"FAQ\"}', 'ptc_diamond', 0, '2022-10-22 05:20:22', '2022-10-22 05:20:22'),
(141, 'faq.element', '{\"question\":\"What constitutes a quorum in a PTC?\",\"answer\":\"The standard definition of a quorum in Robert\'s Rules of Order is that the majority of an assembly must be present to conduct business. That is, if there are twenty members of a group, eleven must be present to constitute a quorum. The same requirement for a quorum applies to PTCs, with one additional provision. The Handbook (4.1.8.3) provides that absentee votes will be counted in PTCs, whereas Robert\'s Rules really do not provide for a mixture of absentee and in-person votes in an assembly\"}', 'ptc_diamond', 0, '2022-10-22 05:20:22', '2022-10-22 05:20:22'),
(142, 'faq.element', '{\"question\":\"What constitutes a positive or negative vote in PTCs?\",\"answer\":\"The standard definition of a quorum in Robert\'s Rules of Order is that the majority of an assembly must be present to conduct business. That is, if there are twenty members of a group, eleven must be present to constitute a quorum. The same requirement for a quorum applies to PTCs, with one additional provision. The Handbook (4.1.8.3) provides that absentee votes will be counted in PTCs, whereas Robert\'s Rules really do not provide for a mixture of absentee and in-person votes in an assembly\"}', 'ptc_diamond', 0, '2022-10-22 05:20:22', '2022-10-22 05:20:22'),
(143, 'faq.element', '{\"question\":\"Can an abstention vote be cast at a PTC meeting?\",\"answer\":\"The standard definition of a quorum in Robert\'s Rules of Order is that the majority of an assembly must be present to conduct business. That is, if there are twenty members of a group, eleven must be present to constitute a quorum. The same requirement for a quorum applies to PTCs, with one additional provision. The Handbook (4.1.8.3) provides that absentee votes will be counted in PTCs, whereas Robert\'s Rules really do not provide for a mixture of absentee and in-person votes in an assembly\"}', 'ptc_diamond', 0, '2022-10-22 05:20:22', '2022-10-22 05:20:22'),
(144, 'faq.element', '{\"question\":\"Can a faculty member on OCSA or FML serve on a PTC?\",\"answer\":\"The standard definition of a quorum in Robert\'s Rules of Order is that the majority of an assembly must be present to conduct business. That is, if there are twenty members of a group, eleven must be present to constitute a quorum. The same requirement for a quorum applies to PTCs, with one additional provision. The Handbook (4.1.8.3) provides that absentee votes will be counted in PTCs, whereas Robert\'s Rules really do not provide for a mixture of absentee and in-person votes in an assembly\"}', 'ptc_diamond', 0, '2022-10-22 05:20:22', '2022-10-22 05:20:22'),
(145, 'faq.element', '{\"question\":\"How will additional members of PTCs be elected in departments with fewer than four tenured faculty members?\",\"answer\":\"The standard definition of a quorum in Robert\'s Rules of Order is that the majority of an assembly must be present to conduct business. That is, if there are twenty members of a group, eleven must be present to constitute a quorum. The same requirement for a quorum applies to PTCs, with one additional provision. The Handbook (4.1.8.3) provides that absentee votes will be counted in PTCs, whereas Robert\'s Rules really do not provide for a mixture of absentee and in-person votes in an assembly\"}', 'ptc_diamond', 0, '2022-10-22 05:20:22', '2022-10-22 05:20:22'),
(146, 'faq.element', '{\"question\":\"How can absentee ballots be cast?\",\"answer\":\"The standard definition of a quorum in Robert\'s Rules of Order is that the majority of an assembly must be present to conduct business. That is, if there are twenty members of a group, eleven must be present to constitute a quorum. The same requirement for a quorum applies to PTCs, with one additional provision. The Handbook (4.1.8.3) provides that absentee votes will be counted in PTCs, whereas Robert\'s Rules really do not provide for a mixture of absentee and in-person votes in an assembly\"}', 'ptc_diamond', 0, '2022-10-22 05:20:22', '2022-10-22 05:20:22'),
(147, 'faq.element', '{\"question\":\"Why should members of the PTC fill out vote justification forms explaining their votes?\",\"answer\":\"The standard definition of a quorum in Robert\'s Rules of Order is that the majority of an assembly must be present to conduct business. That is, if there are twenty members of a group, eleven must be present to constitute a quorum. The same requirement for a quorum applies to PTCs, with one additional provision. The Handbook (4.1.8.3) provides that absentee votes will be counted in PTCs, whereas Robert\'s Rules really do not provide for a mixture of absentee and in-person votes in an assembly\"}', 'ptc_diamond', 0, '2022-10-22 05:20:22', '2022-10-22 05:20:22'),
(148, 'features.content', '{\"heading\":\"Features Which Helps You Earn More\",\"subheading\":\"Our Features\"}', 'ptc_diamond', 0, '2022-10-22 05:20:28', '2022-10-22 05:20:28'),
(149, 'features.element', '{\"icon\":\"<i class=\\\"las la-globe-americas\\\"><\\/i>\",\"title\":\"We\'re Global\",\"content\":\"Voluptatibus at vero, amet sit esse sequi quam odio debitis. Nulla porro tenetur adipisci laborum sunt repellendus error, asperiores quam nobis sit!\"}', 'ptc_diamond', 0, '2022-10-22 05:20:28', '2022-10-22 05:20:28'),
(150, 'features.element', '{\"icon\":\"<i class=\\\"las la-headset\\\"><\\/i>\",\"title\":\"Best Support\",\"content\":\"Voluptatibus at vero, amet sit esse sequi quam odio debitis. Nulla porro tenetur adipisci laborum sunt repellendus error, asperiores quam nobis sit!\"}', 'ptc_diamond', 0, '2022-10-22 05:20:28', '2022-10-22 05:20:28'),
(151, 'features.element', '{\"icon\":\"<i class=\\\"lab la-bitcoin\\\"><\\/i>\",\"title\":\"We Accept Crypto\",\"content\":\"Voluptatibus at vero, amet sit esse sequi quam odio debitis. Nulla porro tenetur adipisci laborum sunt repellendus error, asperiores quam nobis sit!\"}', 'ptc_diamond', 0, '2022-10-22 05:20:28', '2022-10-22 05:20:28'),
(152, 'features.element', '{\"icon\":\"<i class=\\\"las la-chart-bar\\\"><\\/i>\",\"title\":\"We\'re Profitable\",\"content\":\"Voluptatibus at vero, amet sit esse sequi quam odio debitis. Nulla porro tenetur adipisci laborum sunt repellendus error, asperiores quam nobis sit!\"}', 'ptc_diamond', 0, '2022-10-22 05:20:28', '2022-10-22 05:20:28'),
(153, 'features.element', '{\"icon\":\"<i class=\\\"las la-lock\\\"><\\/i>\",\"title\":\"We\'re Secure\",\"content\":\"Voluptatibus at vero, amet sit esse sequi quam odio debitis. Nulla porro tenetur adipisci laborum sunt repellendus error, asperiores quam nobis sit!\"}', 'ptc_diamond', 0, '2022-10-22 05:20:28', '2022-10-22 05:20:28'),
(154, 'features.element', '{\"icon\":\"<i class=\\\"lar la-copy\\\"><\\/i>\",\"title\":\"We\'re Certified\",\"content\":\"Voluptatibus at vero, amet sit esse sequi quam odio debitis. Nulla porro tenetur adipisci laborum sunt repellendus error, asperiores quam nobis sit!\"}', 'ptc_diamond', 0, '2022-10-22 05:20:28', '2022-10-22 05:20:28'),
(155, 'features.element', '{\"icon\":\"<i class=\\\"las la-file-invoice-dollar\\\"><\\/i>\",\"title\":\"Earning Statement\",\"content\":\"Search engine advertising, also known as search engine marketing (SEM), allows you to show ads to users based on the keywords.\"}', 'ptc_diamond', 0, '2022-10-22 05:20:28', '2022-10-22 05:20:28'),
(156, 'features.element', '{\"icon\":\"<i class=\\\"lar la-credit-card\\\"><\\/i>\",\"title\":\"Secure Transection\",\"content\":\"Search engine advertising, also known as search engine marketing (SEM), allows you to show ads to users based on the keywords.\"}', 'ptc_diamond', 0, '2022-10-22 05:20:28', '2022-10-22 05:20:28'),
(157, 'testimonial.content', '{\"heading\":\"What Our Clients Say\",\"subheading\":\"Testimonial\"}', 'ptc_diamond', 0, '2022-10-22 05:24:43', '2022-10-22 05:24:43'),
(158, 'testimonial.element', '{\"has_image\":\"1\",\"name\":\"Chris Hamsorth\",\"designation\":\"PTC Player\",\"comment\":\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus fuga, lauda ium odio dolor ut  iusto,  pariatur neque ique quod ratione tempore velit iure sapiente beatae id dolores.\",\"reason\":\"Design Quality\",\"image\":\"6353da1fdaed41666439711.png\"}', 'ptc_diamond', 0, '2022-10-22 05:24:43', '2022-10-22 05:55:11'),
(159, 'testimonial.element', '{\"has_image\":\"1\",\"name\":\"John Doe\",\"designation\":\"Businessman\",\"comment\":\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus fuga, lauda ium odio dolor ut  iusto,  pariatur neque ique quod ratione tempore velit iure sapiente beatae id dolores.\",\"reason\":\"For Support\",\"image\":\"6353da26117611666439718.png\"}', 'ptc_diamond', 0, '2022-10-22 05:24:43', '2022-10-22 05:55:18'),
(160, 'testimonial.element', '{\"has_image\":\"1\",\"name\":\"Rajendra\",\"designation\":\"Web Developer\",\"comment\":\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus fuga, lauda ium odio dolor ut  iusto,  pariatur neque ique quod ratione tempore velit iure sapiente beatae id dolores.v\",\"reason\":\"Code Quality\",\"image\":\"6353da2be597b1666439723.png\"}', 'ptc_diamond', 0, '2022-10-22 05:24:43', '2022-10-22 05:55:23'),
(161, 'testimonial.element', '{\"has_image\":\"1\",\"name\":\"Peter Parker\",\"designation\":\"Microtech, Inc.\",\"comment\":\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus fuga, lauda ium odio dolor ut  iusto,  pariatur neque ique quod ratione tempore velit iure sapiente beatae id dolores.\",\"reason\":\"Design Quality\",\"image\":\"6353da31690f01666439729.png\"}', 'ptc_diamond', 0, '2022-10-22 05:24:43', '2022-10-22 05:55:29'),
(162, 'header.content', '{\"phone\":\"+1212121245545\",\"email\":\"company@email.com\"}', 'ptc_diamond', 0, '2022-10-22 05:26:04', '2022-10-22 05:26:04'),
(163, 'footer.content', '{\"heading\":\"About Us\",\"description\":\"Maecenas tempus tellus egondime honcus sequam seitmet dipiscing sem eque sedipsuNam quam egondime honcus sequam\"}', 'ptc_diamond', 0, '2022-10-22 05:26:20', '2022-10-22 05:26:20'),
(164, 'client.element', '{\"has_image\":\"1\",\"image\":\"6353d507b0c481666438407.png\"}', 'ptc_diamond', 0, '2022-10-22 05:33:27', '2022-10-22 05:33:27'),
(165, 'client.element', '{\"has_image\":\"1\",\"image\":\"6353d50cc10a11666438412.png\"}', 'ptc_diamond', 0, '2022-10-22 05:33:32', '2022-10-22 05:33:32'),
(166, 'client.element', '{\"has_image\":\"1\",\"image\":\"6353d512b35a71666438418.png\"}', 'ptc_diamond', 0, '2022-10-22 05:33:38', '2022-10-22 05:33:38'),
(167, 'client.element', '{\"has_image\":\"1\",\"image\":\"6353d51b1e5f31666438427.png\"}', 'ptc_diamond', 0, '2022-10-22 05:33:47', '2022-10-22 05:33:47'),
(168, 'client.element', '{\"has_image\":\"1\",\"image\":\"6353d524125c01666438436.png\"}', 'ptc_diamond', 0, '2022-10-22 05:33:56', '2022-10-22 05:33:56'),
(169, 'client.element', '{\"has_image\":\"1\",\"image\":\"6353d528dcbf81666438440.png\"}', 'ptc_diamond', 0, '2022-10-22 05:34:00', '2022-10-22 05:34:00'),
(170, 'client.element', '{\"has_image\":\"1\",\"image\":\"6353d52e3b1601666438446.png\"}', 'ptc_diamond', 0, '2022-10-22 05:34:06', '2022-10-22 05:34:06'),
(171, 'client.element', '{\"has_image\":\"1\",\"image\":\"6353d533830ce1666438451.png\"}', 'ptc_diamond', 0, '2022-10-22 05:34:11', '2022-10-22 05:34:11'),
(172, 'login.content', '{\"has_image\":\"1\",\"heading\":\"Sign In\",\"image\":\"6353d5f00b9aa1666438640.png\"}', 'ptc_diamond', 0, '2022-10-22 05:37:10', '2022-10-22 05:37:20'),
(173, 'register.content', '{\"has_image\":\"1\",\"heading\":\"Register New Account\",\"image\":\"6353d9d75dec21666439639.png\"}', 'ptc_diamond', 0, '2022-10-22 05:53:31', '2022-10-22 05:53:59'),
(174, 'plan.content', '{\"heading\":\"Choose The Best Plan\",\"subheading\":\"Our Plan Packages\"}', 'ptc_diamond', 0, '2022-10-22 05:57:34', '2022-10-22 05:57:34'),
(179, 'policy_pages.element', '{\"title\":\"Privacy and Policy\",\"details\":\"<div class=\\\"mb-5\\\" style=\\\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\\\"><h3 class=\\\"mb-3\\\" style=\\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\\\">What information do we collect?<\\/h3><p class=\\\"font-18\\\" style=\\\"margin-right:0px;margin-left:0px;font-size:18px;\\\">We gather data from you when you register on our site, submit a request, buy any services, react to an overview, or round out a structure. At the point when requesting any assistance or enrolling on our site, as suitable, you might be approached to enter your: name, email address, or telephone number. You may, nonetheless, visit our site anonymously.<\\/p><\\/div><div class=\\\"mb-5\\\" style=\\\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\\\"><h3 class=\\\"mb-3\\\" style=\\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\\\">How do we protect your information?<\\/h3><p class=\\\"font-18\\\" style=\\\"margin-right:0px;margin-left:0px;font-size:18px;\\\">All provided delicate\\/credit data is sent through Stripe.<br \\/>After an exchange, your private data (credit cards, social security numbers, financials, and so on) won\'t be put away on our workers.<\\/p><\\/div><div class=\\\"mb-5\\\" style=\\\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\\\"><h3 class=\\\"mb-3\\\" style=\\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\\\">Do we disclose any information to outside parties?<\\/h3><p class=\\\"font-18\\\" style=\\\"margin-right:0px;margin-left:0px;font-size:18px;\\\">We don\'t sell, exchange, or in any case move to outside gatherings by and by recognizable data. This does exclude confided in outsiders who help us in working our site, leading our business, or adjusting you, since those gatherings consent to keep this data private. We may likewise deliver your data when we accept discharge is suitable to follow the law, implement our site strategies, or ensure our own or others\' rights, property, or wellbeing.<\\/p><\\/div><div class=\\\"mb-5\\\" style=\\\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\\\"><h3 class=\\\"mb-3\\\" style=\\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\\\">Children\'s Online Privacy Protection Act Compliance<\\/h3><p class=\\\"font-18\\\" style=\\\"margin-right:0px;margin-left:0px;font-size:18px;\\\">We are consistent with the prerequisites of COPPA (Children\'s Online Privacy Protection Act), we don\'t gather any data from anybody under 13 years old. Our site, items, and administrations are completely coordinated to individuals who are in any event 13 years of age or more established.<\\/p><\\/div><div class=\\\"mb-5\\\" style=\\\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\\\"><h3 class=\\\"mb-3\\\" style=\\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\\\">Changes to our Privacy Policy<\\/h3><p class=\\\"font-18\\\" style=\\\"margin-right:0px;margin-left:0px;font-size:18px;\\\">If we decide to change our privacy policy, we will post those changes on this page.<\\/p><\\/div><div class=\\\"mb-5\\\" style=\\\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\\\"><h3 class=\\\"mb-3\\\" style=\\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\\\">How long we retain your information?<\\/h3><p class=\\\"font-18\\\" style=\\\"margin-right:0px;margin-left:0px;font-size:18px;\\\">At the point when you register for our site, we cycle and keep your information we have about you however long you don\'t erase the record or withdraw yourself (subject to laws and guidelines).<\\/p><\\/div><div class=\\\"mb-5\\\" style=\\\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\\\"><h3 class=\\\"mb-3\\\" style=\\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\\\">What we don\\u2019t do with your data<\\/h3><p class=\\\"font-18\\\" style=\\\"margin-right:0px;margin-left:0px;font-size:18px;\\\">We don\'t and will never share, unveil, sell, or in any case give your information to different organizations for the promoting of their items or administrations.<\\/p><\\/div>\"}', 'ptc_diamond', 0, '2022-10-22 06:24:11', '2022-10-22 06:24:11'),
(180, 'policy_pages.element', '{\"title\":\"Payment Policy\",\"details\":\"<div class=\\\"mb-5\\\" style=\\\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\\\"><h3 class=\\\"mb-3\\\" style=\\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\\\">What information do we collect?<\\/h3><p class=\\\"font-18\\\" style=\\\"margin-right:0px;margin-left:0px;font-size:18px;\\\">We gather data from you when you register on our site, submit a request, buy any services, react to an overview, or round out a structure. At the point when requesting any assistance or enrolling on our site, as suitable, you might be approached to enter your: name, email address, or telephone number. You may, nonetheless, visit our site anonymously.<\\/p><\\/div><div class=\\\"mb-5\\\" style=\\\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\\\"><h3 class=\\\"mb-3\\\" style=\\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\\\">How do we protect your information?<\\/h3><p class=\\\"font-18\\\" style=\\\"margin-right:0px;margin-left:0px;font-size:18px;\\\">All provided delicate\\/credit data is sent through Stripe.<br \\/>After an exchange, your private data (credit cards, social security numbers, financials, and so on) won\'t be put away on our workers.<\\/p><\\/div><div class=\\\"mb-5\\\" style=\\\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\\\"><h3 class=\\\"mb-3\\\" style=\\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\\\">Do we disclose any information to outside parties?<\\/h3><p class=\\\"font-18\\\" style=\\\"margin-right:0px;margin-left:0px;font-size:18px;\\\">We don\'t sell, exchange, or in any case move to outside gatherings by and by recognizable data. This does exclude confided in outsiders who help us in working our site, leading our business, or adjusting you, since those gatherings consent to keep this data private. We may likewise deliver your data when we accept discharge is suitable to follow the law, implement our site strategies, or ensure our own or others\' rights, property, or wellbeing.<\\/p><\\/div><div class=\\\"mb-5\\\" style=\\\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\\\"><h3 class=\\\"mb-3\\\" style=\\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\\\">Children\'s Online Privacy Protection Act Compliance<\\/h3><p class=\\\"font-18\\\" style=\\\"margin-right:0px;margin-left:0px;font-size:18px;\\\">We are consistent with the prerequisites of COPPA (Children\'s Online Privacy Protection Act), we don\'t gather any data from anybody under 13 years old. Our site, items, and administrations are completely coordinated to individuals who are in any event 13 years of age or more established.<\\/p><\\/div><div class=\\\"mb-5\\\" style=\\\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\\\"><h3 class=\\\"mb-3\\\" style=\\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\\\">Changes to our Privacy Policy<\\/h3><p class=\\\"font-18\\\" style=\\\"margin-right:0px;margin-left:0px;font-size:18px;\\\">If we decide to change our privacy policy, we will post those changes on this page.<\\/p><\\/div><div class=\\\"mb-5\\\" style=\\\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\\\"><h3 class=\\\"mb-3\\\" style=\\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\\\">How long we retain your information?<\\/h3><p class=\\\"font-18\\\" style=\\\"margin-right:0px;margin-left:0px;font-size:18px;\\\">At the point when you register for our site, we cycle and keep your information we have about you however long you don\'t erase the record or withdraw yourself (subject to laws and guidelines).<\\/p><\\/div><div class=\\\"mb-5\\\" style=\\\"color:rgb(111,111,111);font-family:Nunito, sans-serif;margin-bottom:3rem;\\\"><h3 class=\\\"mb-3\\\" style=\\\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\\\">What we don\\u2019t do with your data<\\/h3><p class=\\\"font-18\\\" style=\\\"margin-right:0px;margin-left:0px;font-size:18px;\\\">We don\'t and will never share, unveil, sell, or in any case give your information to different organizations for the promoting of their items or administrations.<\\/p><\\/div>\"}', 'ptc_diamond', 0, '2022-10-22 06:24:11', '2022-10-22 06:24:11'),
(181, 'policy_pages.element', '{\"title\":\"Support Policy\",\"details\":\"<div class=\\\"mb-5\\\" style=\\\"margin-bottom:3rem;color:rgb(111,111,111);font-family:Nunito, sans-serif;\\\"><h3 class=\\\"mb-3\\\" style=\\\"font-weight:600;line-height:1.3;font-size:24px;color:rgb(54,54,54);font-family:Exo, sans-serif;\\\">What information do we collect?<\\/h3><p class=\\\"font-18\\\" style=\\\"margin-right:0px;margin-left:0px;font-size:18px;\\\">We gather data from you when you register on our site, submit a request, buy any services, react to an overview, or round out a structure. At the point when requesting any assistance or enrolling on our site, as suitable, you might be approached to enter your: name, email address, or telephone number. You may, nonetheless, visit our site anonymously.<\\/p><\\/div><div class=\\\"mb-5\\\" style=\\\"margin-bottom:3rem;color:rgb(111,111,111);font-family:Nunito, sans-serif;\\\"><h3 class=\\\"mb-3\\\" style=\\\"font-weight:600;line-height:1.3;font-size:24px;color:rgb(54,54,54);font-family:Exo, sans-serif;\\\">How do we protect your information?<\\/h3><p class=\\\"font-18\\\" style=\\\"margin-right:0px;margin-left:0px;font-size:18px;\\\">All provided delicate\\/credit data is sent through Stripe.<br \\/>After an exchange, your private data (credit cards, social security numbers, financials, and so on) won\'t be put away on our workers.<\\/p><\\/div><div class=\\\"mb-5\\\" style=\\\"margin-bottom:3rem;color:rgb(111,111,111);font-family:Nunito, sans-serif;\\\"><h3 class=\\\"mb-3\\\" style=\\\"font-weight:600;line-height:1.3;font-size:24px;color:rgb(54,54,54);font-family:Exo, sans-serif;\\\">Do we disclose any information to outside parties?<\\/h3><p class=\\\"font-18\\\" style=\\\"margin-right:0px;margin-left:0px;font-size:18px;\\\">We don\'t sell, exchange, or in any case move to outside gatherings by and by recognizable data. This does exclude confided in outsiders who help us in working our site, leading our business, or adjusting you, since those gatherings consent to keep this data private. We may likewise deliver your data when we accept discharge is suitable to follow the law, implement our site strategies, or ensure our own or others\' rights, property, or wellbeing.<\\/p><\\/div><div class=\\\"mb-5\\\" style=\\\"margin-bottom:3rem;color:rgb(111,111,111);font-family:Nunito, sans-serif;\\\"><h3 class=\\\"mb-3\\\" style=\\\"font-weight:600;line-height:1.3;font-size:24px;color:rgb(54,54,54);font-family:Exo, sans-serif;\\\">Children\'s Online Privacy Protection Act Compliance<\\/h3><p class=\\\"font-18\\\" style=\\\"margin-right:0px;margin-left:0px;font-size:18px;\\\">We are consistent with the prerequisites of COPPA (Children\'s Online Privacy Protection Act), we don\'t gather any data from anybody under 13 years old. Our site, items, and administrations are completely coordinated to individuals who are in any event 13 years of age or more established.<\\/p><\\/div><div class=\\\"mb-5\\\" style=\\\"margin-bottom:3rem;color:rgb(111,111,111);font-family:Nunito, sans-serif;\\\"><h3 class=\\\"mb-3\\\" style=\\\"font-weight:600;line-height:1.3;font-size:24px;color:rgb(54,54,54);font-family:Exo, sans-serif;\\\">Changes to our Privacy Policy<\\/h3><p class=\\\"font-18\\\" style=\\\"margin-right:0px;margin-left:0px;font-size:18px;\\\">If we decide to change our privacy policy, we will post those changes on this page.<\\/p><\\/div><div class=\\\"mb-5\\\" style=\\\"margin-bottom:3rem;color:rgb(111,111,111);font-family:Nunito, sans-serif;\\\"><h3 class=\\\"mb-3\\\" style=\\\"font-weight:600;line-height:1.3;font-size:24px;color:rgb(54,54,54);font-family:Exo, sans-serif;\\\">How long we retain your information?<\\/h3><p class=\\\"font-18\\\" style=\\\"margin-right:0px;margin-left:0px;font-size:18px;\\\">At the point when you register for our site, we cycle and keep your information we have about you however long you don\'t erase the record or withdraw yourself (subject to laws and guidelines).<\\/p><\\/div><div class=\\\"mb-5\\\" style=\\\"margin-bottom:3rem;color:rgb(111,111,111);font-family:Nunito, sans-serif;\\\"><h3 class=\\\"mb-3\\\" style=\\\"font-weight:600;line-height:1.3;font-size:24px;color:rgb(54,54,54);font-family:Exo, sans-serif;\\\">What we don\\u2019t do with your data<\\/h3><p class=\\\"font-18\\\" style=\\\"margin-right:0px;margin-left:0px;font-size:18px;\\\">We don\'t and will never share, unveil, sell, or in any case give your information to different organizations for the promoting of their items or administrations.<\\/p><\\/div>\"}', 'ptc_diamond', 0, '2022-10-22 06:34:15', '2022-10-22 06:34:15'),
(182, 'brand.element', '{\"has_image\":\"1\",\"image\":\"6354ede4936a71666510308.png\"}', 'ptc_diamond', 0, '2022-10-23 01:31:48', '2022-10-23 01:31:48'),
(183, 'brand.element', '{\"has_image\":\"1\",\"image\":\"6354edead8ff11666510314.png\"}', 'ptc_diamond', 0, '2022-10-23 01:31:54', '2022-10-23 01:31:54'),
(184, 'brand.element', '{\"has_image\":\"1\",\"image\":\"6354edf23219d1666510322.png\"}', 'ptc_diamond', 0, '2022-10-23 01:32:02', '2022-10-23 01:32:02'),
(185, 'brand.element', '{\"has_image\":\"1\",\"image\":\"6354fed25f39c1666514642.png\"}', 'ptc_diamond', 0, '2022-10-23 02:44:02', '2022-10-23 02:44:02'),
(186, 'brand.element', '{\"has_image\":\"1\",\"image\":\"6354fed9845dc1666514649.png\"}', 'ptc_diamond', 0, '2022-10-23 02:44:09', '2022-10-23 02:44:09'),
(187, 'brand.element', '{\"has_image\":\"1\",\"image\":\"6354fedf6ecd71666514655.png\"}', 'ptc_diamond', 0, '2022-10-23 02:44:15', '2022-10-23 02:44:15'),
(188, 'brand.element', '{\"has_image\":\"1\",\"image\":\"6354fee3d220e1666514659.png\"}', 'ptc_diamond', 0, '2022-10-23 02:44:19', '2022-10-23 02:44:19'),
(189, 'brand.element', '{\"has_image\":\"1\",\"image\":\"6354fee8ba3d21666514664.png\"}', 'ptc_diamond', 0, '2022-10-23 02:44:24', '2022-10-23 02:44:24'),
(190, 'kyc_info.content', '{\"verification_content\":\"Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic officia quod natus, non dicta perspiciatis, quae repellendus ea illum aut debitis sint amet? Ratione voluptates beatae numquam.\",\"pending_content\":\"Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic officia quod natus, non dicta perspiciatis, quae repellendus ea illum aut debitis sint amet? Ratione voluptates beatae numquam.\"}', 'ptc_diamond', 0, '2022-10-24 06:11:25', '2022-10-24 06:11:25'),
(191, 'counter.element', '{\"icon\":null,\"title\":\"Withdraw\",\"number\":\"$50\"}', 'basic', 0, '2022-10-25 03:34:38', '2022-10-25 03:34:38'),
(192, 'counter.element', '{\"icon\":null,\"title\":\"Users\",\"number\":\"30\"}', 'basic', 0, '2022-10-25 03:34:38', '2022-10-25 03:34:38'),
(193, 'counter.element', '{\"icon\":null,\"title\":\"Impression\",\"number\":\"20\"}', 'basic', 0, '2022-10-25 03:34:38', '2022-10-25 03:34:38'),
(194, 'counter.element', '{\"icon\":null,\"title\":\"Advertisement\",\"number\":\"568\"}', 'basic', 0, '2022-10-25 03:34:38', '2022-10-25 03:34:38'),
(195, 'social_icon.element', '{\"title\":\"Facebook\",\"icon\":\"<i class=\\\"lab la-facebook-f\\\"><\\/i>\",\"url\":\"https:\\/\\/www.facebook.com\"}', 'ptc_diamond', 0, '2022-11-03 02:44:14', '2022-11-03 02:44:14'),
(196, 'social_icon.element', '{\"title\":\"Twitter\",\"icon\":\"<i class=\\\"lab la-twitter\\\"><\\/i>\",\"url\":\"https:\\/\\/twitter.com\"}', 'ptc_diamond', 0, '2022-11-03 02:44:31', '2022-11-03 02:44:31'),
(197, 'social_icon.element', '{\"title\":\"LinkedIn\",\"icon\":\"<i class=\\\"lab la-linkedin-in\\\"><\\/i>\",\"url\":\"https:\\/\\/www.linkedin.com\"}', 'ptc_diamond', 0, '2022-11-03 02:45:13', '2022-11-03 02:45:13'),
(198, 'social_icon.element', '{\"title\":\"Instagram\",\"icon\":\"<i class=\\\"lab la-instagram\\\"><\\/i>\",\"url\":\"https:\\/\\/www.instagram.com\"}', 'ptc_diamond', 0, '2022-11-03 02:45:32', '2022-11-03 02:45:32'),
(199, 'notice.content', '{\"scroling_notice\":\"Here is some scrolling text... right to left!\",\"invite_page_notice\":\"<h5 class=\\\"small-font-lg text-light\\\"><font color=\\\"#f8f9fa\\\" face=\\\"Poppins, Bangla113, sans-serif\\\"><span style=\\\"font-size:14px;\\\"><b>Award of registration:<\\/b><\\/span><\\/font><\\/h5><h5 class=\\\"small-font-lg text-light\\\"><font color=\\\"#f8f9fa\\\" face=\\\"Poppins, Bangla113, sans-serif\\\"><span style=\\\"font-size:14px;\\\"><b>New user registration will receive 18 BDT registration<\\/b><\\/span><\\/font><\\/h5><h5 class=\\\"small-font-lg text-light\\\"><font color=\\\"#f8f9fa\\\" face=\\\"Poppins, Bangla113, sans-serif\\\"><span style=\\\"font-size:14px;\\\"><b>bonus. After successfully registering and inviting friends,<\\/b><\\/span><\\/font><\\/h5><h5 class=\\\"small-font-lg text-light\\\"><font color=\\\"#f8f9fa\\\" face=\\\"Poppins, Bangla113, sans-serif\\\"><span style=\\\"font-size:14px;\\\"><b>you will receive invitation rewards and daily task commissions<\\/b><\\/span><\\/font><\\/h5><h5 class=\\\"small-font-lg text-light\\\"><font face=\\\"Poppins, Bangla113, sans-serif\\\"><span style=\\\"font-size:14px;\\\"><b><br \\/><\\/b><\\/span><\\/font><\\/h5><h5 class=\\\"small-font-lg text-light\\\"><font color=\\\"#f8f9fa\\\" face=\\\"Poppins, Bangla113, sans-serif\\\"><span style=\\\"font-size:14px;\\\"><b>Invite friends to earn money:<\\/b><\\/span><\\/font><\\/h5><h5 class=\\\"small-font-lg text-light\\\"><font color=\\\"#f8f9fa\\\" face=\\\"Poppins, Bangla113, sans-serif\\\"><span style=\\\"font-size:14px;\\\"><b>If you invite friends to join, you can get 10% of the<\\/b><\\/span><\\/font><\\/h5><h5 class=\\\"small-font-lg text-light\\\"><font color=\\\"#f8f9fa\\\" face=\\\"Poppins, Bangla113, sans-serif\\\"><span style=\\\"font-size:14px;\\\"><b>subscription amount.<\\/b><\\/span><\\/font><\\/h5><h5 class=\\\"small-font-lg text-light\\\"><font face=\\\"Poppins, Bangla113, sans-serif\\\"><span style=\\\"font-size:14px;\\\"><b><br \\/><\\/b><\\/span><\\/font><\\/h5><h5 class=\\\"small-font-lg text-light\\\"><font color=\\\"#f8f9fa\\\" face=\\\"Poppins, Bangla113, sans-serif\\\"><span style=\\\"font-size:14px;\\\"><b>Read Articles to Earn:<\\/b><\\/span><\\/font><\\/h5><h5 class=\\\"small-font-lg text-light\\\"><font color=\\\"#f8f9fa\\\" face=\\\"Poppins, Bangla113, sans-serif\\\"><span style=\\\"font-size:14px;\\\"><b>Reading can profit from Level 1 Acquisition (5%),<\\/b><\\/span><\\/font><\\/h5><h5 class=\\\"small-font-lg text-light\\\"><font color=\\\"#f8f9fa\\\" face=\\\"Poppins, Bangla113, sans-serif\\\"><span style=\\\"font-size:14px;\\\"><b>Level 2 Acquisition (2%) and Level 3 Acquisition (1%).<\\/b><\\/span><\\/font><\\/h5>\",\"invite_notice\":\"Gog shu \'I, very lucky. 10 minutes a day, easily earn 2,000 and 100,000, share with friends, find bonuses:\",\"recharge_notice\":\"Reminder: The platform bank account changes any time, every deposit, go to top page to get the last account number, no liability for us if you deposit into overdue account.\",\"withdraw_notice\":\"Minimum withdrawal \\u2013 Rs 200\\nDates: Mon-Rabbi, 8am to 6pm\\n\\nIt is available for maximum 24 hours\\n\\nIf your application is unsuccessful, please contact Online Customer Service.\"}', 'basic', 0, '2023-10-09 19:37:05', '2023-11-19 13:19:45'),
(200, 'links.content', '{\"apps_link\":\"#\",\"customer_service_telegram\":\"https:\\/\\/t.me\\/webdeveloper_sun\",\"telegram_group\":\"https:\\/\\/t.me\\/webdeveloper_sun\"}', 'basic', 0, '2023-10-10 17:36:09', '2023-11-20 22:15:44'),
(201, 'popup.content', '{\"notice\":\"Welcome to BHP_mine View products and invest\\n\\n Product- 200 BDT\\n Income- 100 BDT\\n Duration is 3 days\\n\\n The product will be sold out very soon.  It can buy 500 members.\"}', 'basic', 0, '2023-10-23 18:06:44', '2023-10-25 15:52:41'),
(202, 'banner.element', '{\"has_image\":\"1\",\"image\":\"655b49228fb291700481314.jpeg\"}', 'basic', 0, '2023-11-20 22:55:14', '2023-11-20 22:55:14'),
(203, 'banner.element', '{\"has_image\":\"1\",\"image\":\"655b492b55f971700481323.jpeg\"}', 'basic', 0, '2023-11-20 22:55:23', '2023-11-20 22:55:23');

-- --------------------------------------------------------

--
-- Table structure for table `gateways`
--

CREATE TABLE `gateways` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `form_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `code` int(11) DEFAULT NULL,
  `name` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alias` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NULL',
  `admin_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=>enable, 2=>disable',
  `gateway_parameters` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `supported_currencies` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `crypto` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0: fiat currency, 1: crypto currency',
  `extra` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gateways`
--

INSERT INTO `gateways` (`id`, `form_id`, `code`, `name`, `alias`, `admin_number`, `image`, `status`, `gateway_parameters`, `supported_currencies`, `crypto`, `extra`, `description`, `created_at`, `updated_at`) VALUES
(1, 0, 101, 'Paypal', 'Paypal', NULL, '5f6f1bd8678601601117144.jpg', 1, '{\"paypal_email\":{\"title\":\"PayPal Email\",\"global\":true,\"value\":\"sb-owud61543012@business.example.com\"}}', '{\"AUD\":\"AUD\",\"BRL\":\"BRL\",\"CAD\":\"CAD\",\"CZK\":\"CZK\",\"DKK\":\"DKK\",\"EUR\":\"EUR\",\"HKD\":\"HKD\",\"HUF\":\"HUF\",\"INR\":\"INR\",\"ILS\":\"ILS\",\"JPY\":\"JPY\",\"MYR\":\"MYR\",\"MXN\":\"MXN\",\"TWD\":\"TWD\",\"NZD\":\"NZD\",\"NOK\":\"NOK\",\"PHP\":\"PHP\",\"PLN\":\"PLN\",\"GBP\":\"GBP\",\"RUB\":\"RUB\",\"SGD\":\"SGD\",\"SEK\":\"SEK\",\"CHF\":\"CHF\",\"THB\":\"THB\",\"USD\":\"$\"}', 0, NULL, NULL, '2019-09-14 13:14:22', '2021-05-21 00:04:38'),
(2, 0, 102, 'Perfect Money', 'PerfectMoney', NULL, '5f6f1d2a742211601117482.jpg', 1, '{\"passphrase\":{\"title\":\"ALTERNATE PASSPHRASE\",\"global\":true,\"value\":\"hR26aw02Q1eEeUPSIfuwNypXX\"},\"wallet_id\":{\"title\":\"PM Wallet\",\"global\":false,\"value\":\"\"}}', '{\"USD\":\"$\",\"EUR\":\"\\u20ac\"}', 0, NULL, NULL, '2019-09-14 13:14:22', '2021-05-21 01:35:33'),
(3, 0, 103, 'Stripe Hosted', 'Stripe', NULL, '5f6f1d4bc69e71601117515.jpg', 1, '{\"secret_key\":{\"title\":\"Secret Key\",\"global\":true,\"value\":\"sk_test_51I6GGiCGv1sRiQlEi5v1or9eR0HVbuzdMd2rW4n3DxC8UKfz66R4X6n4yYkzvI2LeAIuRU9H99ZpY7XCNFC9xMs500vBjZGkKG\"},\"publishable_key\":{\"title\":\"PUBLISHABLE KEY\",\"global\":true,\"value\":\"pk_test_51I6GGiCGv1sRiQlEOisPKrjBqQqqcFsw8mXNaZ2H2baN6R01NulFS7dKFji1NRRxuchoUTEDdB7ujKcyKYSVc0z500eth7otOM\"}}', '{\"USD\":\"USD\",\"AUD\":\"AUD\",\"BRL\":\"BRL\",\"CAD\":\"CAD\",\"CHF\":\"CHF\",\"DKK\":\"DKK\",\"EUR\":\"EUR\",\"GBP\":\"GBP\",\"HKD\":\"HKD\",\"INR\":\"INR\",\"JPY\":\"JPY\",\"MXN\":\"MXN\",\"MYR\":\"MYR\",\"NOK\":\"NOK\",\"NZD\":\"NZD\",\"PLN\":\"PLN\",\"SEK\":\"SEK\",\"SGD\":\"SGD\"}', 0, NULL, NULL, '2019-09-14 13:14:22', '2021-05-21 00:48:36'),
(4, 0, 104, 'Skrill', 'Skrill', NULL, '5f6f1d41257181601117505.jpg', 1, '{\"pay_to_email\":{\"title\":\"Skrill Email\",\"global\":true,\"value\":\"merchant@skrill.com\"},\"secret_key\":{\"title\":\"Secret Key\",\"global\":true,\"value\":\"---\"}}', '{\"AED\":\"AED\",\"AUD\":\"AUD\",\"BGN\":\"BGN\",\"BHD\":\"BHD\",\"CAD\":\"CAD\",\"CHF\":\"CHF\",\"CZK\":\"CZK\",\"DKK\":\"DKK\",\"EUR\":\"EUR\",\"GBP\":\"GBP\",\"HKD\":\"HKD\",\"HRK\":\"HRK\",\"HUF\":\"HUF\",\"ILS\":\"ILS\",\"INR\":\"INR\",\"ISK\":\"ISK\",\"JOD\":\"JOD\",\"JPY\":\"JPY\",\"KRW\":\"KRW\",\"KWD\":\"KWD\",\"MAD\":\"MAD\",\"MYR\":\"MYR\",\"NOK\":\"NOK\",\"NZD\":\"NZD\",\"OMR\":\"OMR\",\"PLN\":\"PLN\",\"QAR\":\"QAR\",\"RON\":\"RON\",\"RSD\":\"RSD\",\"SAR\":\"SAR\",\"SEK\":\"SEK\",\"SGD\":\"SGD\",\"THB\":\"THB\",\"TND\":\"TND\",\"TRY\":\"TRY\",\"TWD\":\"TWD\",\"USD\":\"USD\",\"ZAR\":\"ZAR\",\"COP\":\"COP\"}', 0, NULL, NULL, '2019-09-14 13:14:22', '2021-05-21 01:30:16'),
(5, 0, 105, 'PayTM', 'Paytm', NULL, '5f6f1d1d3ec731601117469.jpg', 1, '{\"MID\":{\"title\":\"Merchant ID\",\"global\":true,\"value\":\"DIY12386817555501617\"},\"merchant_key\":{\"title\":\"Merchant Key\",\"global\":true,\"value\":\"bKMfNxPPf_QdZppa\"},\"WEBSITE\":{\"title\":\"Paytm Website\",\"global\":true,\"value\":\"DIYtestingweb\"},\"INDUSTRY_TYPE_ID\":{\"title\":\"Industry Type\",\"global\":true,\"value\":\"Retail\"},\"CHANNEL_ID\":{\"title\":\"CHANNEL ID\",\"global\":true,\"value\":\"WEB\"},\"transaction_url\":{\"title\":\"Transaction URL\",\"global\":true,\"value\":\"https:\\/\\/pguat.paytm.com\\/oltp-web\\/processTransaction\"},\"transaction_status_url\":{\"title\":\"Transaction STATUS URL\",\"global\":true,\"value\":\"https:\\/\\/pguat.paytm.com\\/paytmchecksum\\/paytmCallback.jsp\"}}', '{\"AUD\":\"AUD\",\"ARS\":\"ARS\",\"BDT\":\"BDT\",\"BRL\":\"BRL\",\"BGN\":\"BGN\",\"CAD\":\"CAD\",\"CLP\":\"CLP\",\"CNY\":\"CNY\",\"COP\":\"COP\",\"HRK\":\"HRK\",\"CZK\":\"CZK\",\"DKK\":\"DKK\",\"EGP\":\"EGP\",\"EUR\":\"EUR\",\"GEL\":\"GEL\",\"GHS\":\"GHS\",\"HKD\":\"HKD\",\"HUF\":\"HUF\",\"INR\":\"INR\",\"IDR\":\"IDR\",\"ILS\":\"ILS\",\"JPY\":\"JPY\",\"KES\":\"KES\",\"MYR\":\"MYR\",\"MXN\":\"MXN\",\"MAD\":\"MAD\",\"NPR\":\"NPR\",\"NZD\":\"NZD\",\"NGN\":\"NGN\",\"NOK\":\"NOK\",\"PKR\":\"PKR\",\"PEN\":\"PEN\",\"PHP\":\"PHP\",\"PLN\":\"PLN\",\"RON\":\"RON\",\"RUB\":\"RUB\",\"SGD\":\"SGD\",\"ZAR\":\"ZAR\",\"KRW\":\"KRW\",\"LKR\":\"LKR\",\"SEK\":\"SEK\",\"CHF\":\"CHF\",\"THB\":\"THB\",\"TRY\":\"TRY\",\"UGX\":\"UGX\",\"UAH\":\"UAH\",\"AED\":\"AED\",\"GBP\":\"GBP\",\"USD\":\"USD\",\"VND\":\"VND\",\"XOF\":\"XOF\"}', 0, NULL, NULL, '2019-09-14 13:14:22', '2021-05-21 03:00:44'),
(6, 0, 106, 'Payeer', 'Payeer', NULL, '5f6f1bc61518b1601117126.jpg', 0, '{\"merchant_id\":{\"title\":\"Merchant ID\",\"global\":true,\"value\":\"866989763\"},\"secret_key\":{\"title\":\"Secret key\",\"global\":true,\"value\":\"7575\"}}', '{\"USD\":\"USD\",\"EUR\":\"EUR\",\"RUB\":\"RUB\"}', 0, '{\"status\":{\"title\": \"Status URL\",\"value\":\"ipn.Payeer\"}}', NULL, '2019-09-14 13:14:22', '2020-12-28 01:26:58'),
(7, 0, 107, 'PayStack', 'Paystack', NULL, '5f7096563dfb71601214038.jpg', 1, '{\"public_key\":{\"title\":\"Public key\",\"global\":true,\"value\":\"pk_test_cd330608eb47970889bca397ced55c1dd5ad3783\"},\"secret_key\":{\"title\":\"Secret key\",\"global\":true,\"value\":\"sk_test_8a0b1f199362d7acc9c390bff72c4e81f74e2ac3\"}}', '{\"USD\":\"USD\",\"NGN\":\"NGN\"}', 0, '{\"callback\":{\"title\": \"Callback URL\",\"value\":\"ipn.Paystack\"},\"webhook\":{\"title\": \"Webhook URL\",\"value\":\"ipn.Paystack\"}}\r\n', NULL, '2019-09-14 13:14:22', '2021-05-21 01:49:51'),
(8, 0, 108, 'VoguePay', 'Voguepay', NULL, '5f6f1d5951a111601117529.jpg', 1, '{\"merchant_id\":{\"title\":\"MERCHANT ID\",\"global\":true,\"value\":\"demo\"}}', '{\"USD\":\"USD\",\"GBP\":\"GBP\",\"EUR\":\"EUR\",\"GHS\":\"GHS\",\"NGN\":\"NGN\",\"ZAR\":\"ZAR\"}', 0, NULL, NULL, '2019-09-14 13:14:22', '2021-05-21 01:22:38'),
(9, 0, 109, 'Flutterwave', 'Flutterwave', NULL, '5f6f1b9e4bb961601117086.jpg', 1, '{\"public_key\":{\"title\":\"Public Key\",\"global\":true,\"value\":\"----------------\"},\"secret_key\":{\"title\":\"Secret Key\",\"global\":true,\"value\":\"-----------------------\"},\"encryption_key\":{\"title\":\"Encryption Key\",\"global\":true,\"value\":\"------------------\"}}', '{\"BIF\":\"BIF\",\"CAD\":\"CAD\",\"CDF\":\"CDF\",\"CVE\":\"CVE\",\"EUR\":\"EUR\",\"GBP\":\"GBP\",\"GHS\":\"GHS\",\"GMD\":\"GMD\",\"GNF\":\"GNF\",\"KES\":\"KES\",\"LRD\":\"LRD\",\"MWK\":\"MWK\",\"MZN\":\"MZN\",\"NGN\":\"NGN\",\"RWF\":\"RWF\",\"SLL\":\"SLL\",\"STD\":\"STD\",\"TZS\":\"TZS\",\"UGX\":\"UGX\",\"USD\":\"USD\",\"XAF\":\"XAF\",\"XOF\":\"XOF\",\"ZMK\":\"ZMK\",\"ZMW\":\"ZMW\",\"ZWD\":\"ZWD\"}', 0, NULL, NULL, '2019-09-14 13:14:22', '2021-06-05 11:37:45'),
(10, 0, 110, 'RazorPay', 'Razorpay', NULL, '5f6f1d3672dd61601117494.jpg', 1, '{\"key_id\":{\"title\":\"Key Id\",\"global\":true,\"value\":\"rzp_test_kiOtejPbRZU90E\"},\"key_secret\":{\"title\":\"Key Secret \",\"global\":true,\"value\":\"osRDebzEqbsE1kbyQJ4y0re7\"}}', '{\"INR\":\"INR\"}', 0, NULL, NULL, '2019-09-14 13:14:22', '2021-05-21 02:51:32'),
(11, 0, 111, 'Stripe Storefront', 'StripeJs', NULL, '5f7096a31ed9a1601214115.jpg', 1, '{\"secret_key\":{\"title\":\"Secret Key\",\"global\":true,\"value\":\"sk_test_51I6GGiCGv1sRiQlEi5v1or9eR0HVbuzdMd2rW4n3DxC8UKfz66R4X6n4yYkzvI2LeAIuRU9H99ZpY7XCNFC9xMs500vBjZGkKG\"},\"publishable_key\":{\"title\":\"PUBLISHABLE KEY\",\"global\":true,\"value\":\"pk_test_51I6GGiCGv1sRiQlEOisPKrjBqQqqcFsw8mXNaZ2H2baN6R01NulFS7dKFji1NRRxuchoUTEDdB7ujKcyKYSVc0z500eth7otOM\"}}', '{\"USD\":\"USD\",\"AUD\":\"AUD\",\"BRL\":\"BRL\",\"CAD\":\"CAD\",\"CHF\":\"CHF\",\"DKK\":\"DKK\",\"EUR\":\"EUR\",\"GBP\":\"GBP\",\"HKD\":\"HKD\",\"INR\":\"INR\",\"JPY\":\"JPY\",\"MXN\":\"MXN\",\"MYR\":\"MYR\",\"NOK\":\"NOK\",\"NZD\":\"NZD\",\"PLN\":\"PLN\",\"SEK\":\"SEK\",\"SGD\":\"SGD\"}', 0, NULL, NULL, '2019-09-14 13:14:22', '2021-05-21 00:53:10'),
(12, 0, 112, 'Instamojo', 'Instamojo', NULL, '5f6f1babbdbb31601117099.jpg', 1, '{\"api_key\":{\"title\":\"API KEY\",\"global\":true,\"value\":\"test_2241633c3bc44a3de84a3b33969\"},\"auth_token\":{\"title\":\"Auth Token\",\"global\":true,\"value\":\"test_279f083f7bebefd35217feef22d\"},\"salt\":{\"title\":\"Salt\",\"global\":true,\"value\":\"19d38908eeff4f58b2ddda2c6d86ca25\"}}', '{\"INR\":\"INR\"}', 0, NULL, NULL, '2019-09-14 13:14:22', '2021-05-21 02:56:20'),
(13, 0, 501, 'Blockchain', 'Blockchain', NULL, '5f6f1b2b20c6f1601116971.jpg', 1, '{\"api_key\":{\"title\":\"API Key\",\"global\":true,\"value\":\"55529946-05ca-48ff-8710-f279d86b1cc5\"},\"xpub_code\":{\"title\":\"XPUB CODE\",\"global\":true,\"value\":\"xpub6CKQ3xxWyBoFAF83izZCSFUorptEU9AF8TezhtWeMU5oefjX3sFSBw62Lr9iHXPkXmDQJJiHZeTRtD9Vzt8grAYRhvbz4nEvBu3QKELVzFK\"}}', '{\"BTC\":\"BTC\"}', 1, NULL, NULL, '2019-09-14 13:14:22', '2022-03-21 07:41:56'),
(15, 0, 503, 'CoinPayments', 'Coinpayments', NULL, '5f6f1b6c02ecd1601117036.jpg', 1, '{\"public_key\":{\"title\":\"Public Key\",\"global\":true,\"value\":\"----------------------------------\"},\"private_key\":{\"title\":\"Private Key\",\"global\":true,\"value\":\"----------------------------------------\"},\"merchant_id\":{\"title\":\"Merchant ID\",\"global\":true,\"value\":\"--------------------------\"}}', '{\"BTC\":\"Bitcoin\",\"BTC.LN\":\"Bitcoin (Lightning Network)\",\"LTC\":\"Litecoin\",\"CPS\":\"CPS Coin\",\"VLX\":\"Velas\",\"APL\":\"Apollo\",\"AYA\":\"Aryacoin\",\"BAD\":\"Badcoin\",\"BCD\":\"Bitcoin Diamond\",\"BCH\":\"Bitcoin Cash\",\"BCN\":\"Bytecoin\",\"BEAM\":\"BEAM\",\"BITB\":\"Bean Cash\",\"BLK\":\"BlackCoin\",\"BSV\":\"Bitcoin SV\",\"BTAD\":\"Bitcoin Adult\",\"BTG\":\"Bitcoin Gold\",\"BTT\":\"BitTorrent\",\"CLOAK\":\"CloakCoin\",\"CLUB\":\"ClubCoin\",\"CRW\":\"Crown\",\"CRYP\":\"CrypticCoin\",\"CRYT\":\"CryTrExCoin\",\"CURE\":\"CureCoin\",\"DASH\":\"DASH\",\"DCR\":\"Decred\",\"DEV\":\"DeviantCoin\",\"DGB\":\"DigiByte\",\"DOGE\":\"Dogecoin\",\"EBST\":\"eBoost\",\"EOS\":\"EOS\",\"ETC\":\"Ether Classic\",\"ETH\":\"Ethereum\",\"ETN\":\"Electroneum\",\"EUNO\":\"EUNO\",\"EXP\":\"EXP\",\"Expanse\":\"Expanse\",\"FLASH\":\"FLASH\",\"GAME\":\"GameCredits\",\"GLC\":\"Goldcoin\",\"GRS\":\"Groestlcoin\",\"KMD\":\"Komodo\",\"LOKI\":\"LOKI\",\"LSK\":\"LSK\",\"MAID\":\"MaidSafeCoin\",\"MUE\":\"MonetaryUnit\",\"NAV\":\"NAV Coin\",\"NEO\":\"NEO\",\"NMC\":\"Namecoin\",\"NVST\":\"NVO Token\",\"NXT\":\"NXT\",\"OMNI\":\"OMNI\",\"PINK\":\"PinkCoin\",\"PIVX\":\"PIVX\",\"POT\":\"PotCoin\",\"PPC\":\"Peercoin\",\"PROC\":\"ProCurrency\",\"PURA\":\"PURA\",\"QTUM\":\"QTUM\",\"RES\":\"Resistance\",\"RVN\":\"Ravencoin\",\"RVR\":\"RevolutionVR\",\"SBD\":\"Steem Dollars\",\"SMART\":\"SmartCash\",\"SOXAX\":\"SOXAX\",\"STEEM\":\"STEEM\",\"STRAT\":\"STRAT\",\"SYS\":\"Syscoin\",\"TPAY\":\"TokenPay\",\"TRIGGERS\":\"Triggers\",\"TRX\":\" TRON\",\"UBQ\":\"Ubiq\",\"UNIT\":\"UniversalCurrency\",\"USDT.TRC20\":\"Tether USD (Omni Layer)\",\"VTC\":\"Vertcoin\",\"WAVES\":\"Waves\",\"XCP\":\"Counterparty\",\"XEM\":\"NEM\",\"XMR\":\"Monero\",\"XSN\":\"Stakenet\",\"XSR\":\"SucreCoin\",\"XVG\":\"VERGE\",\"XZC\":\"ZCoin\",\"ZEC\":\"ZCash\",\"ZEN\":\"Horizen\"}', 1, NULL, NULL, '2019-09-14 13:14:22', '2022-05-08 08:15:32'),
(16, 0, 504, 'CoinPayments Fiat', 'CoinpaymentsFiat', NULL, '5f6f1b94e9b2b1601117076.jpg', 1, '{\"merchant_id\":{\"title\":\"Merchant ID\",\"global\":true,\"value\":\"6515561\"}}', '{\"USD\":\"USD\",\"AUD\":\"AUD\",\"BRL\":\"BRL\",\"CAD\":\"CAD\",\"CHF\":\"CHF\",\"CLP\":\"CLP\",\"CNY\":\"CNY\",\"DKK\":\"DKK\",\"EUR\":\"EUR\",\"GBP\":\"GBP\",\"HKD\":\"HKD\",\"INR\":\"INR\",\"ISK\":\"ISK\",\"JPY\":\"JPY\",\"KRW\":\"KRW\",\"NZD\":\"NZD\",\"PLN\":\"PLN\",\"RUB\":\"RUB\",\"SEK\":\"SEK\",\"SGD\":\"SGD\",\"THB\":\"THB\",\"TWD\":\"TWD\"}', 0, NULL, NULL, '2019-09-14 13:14:22', '2021-05-21 02:07:44'),
(17, 0, 505, 'Coingate', 'Coingate', NULL, '5f6f1b5fe18ee1601117023.jpg', 1, '{\"api_key\":{\"title\":\"API Key\",\"global\":true,\"value\":\"6354mwVCEw5kHzRJ6thbGo-N\"}}', '{\"USD\":\"USD\",\"EUR\":\"EUR\"}', 0, NULL, NULL, '2019-09-14 13:14:22', '2022-03-30 09:24:57'),
(18, 0, 506, 'Coinbase Commerce', 'CoinbaseCommerce', NULL, '5f6f1b4c774af1601117004.jpg', 1, '{\"api_key\":{\"title\":\"API Key\",\"global\":true,\"value\":\"c47cd7df-d8e8-424b-a20a\"},\"secret\":{\"title\":\"Webhook Shared Secret\",\"global\":true,\"value\":\"55871878-2c32-4f64-ab66\"}}', '{\"USD\":\"USD\",\"EUR\":\"EUR\",\"JPY\":\"JPY\",\"GBP\":\"GBP\",\"AUD\":\"AUD\",\"CAD\":\"CAD\",\"CHF\":\"CHF\",\"CNY\":\"CNY\",\"SEK\":\"SEK\",\"NZD\":\"NZD\",\"MXN\":\"MXN\",\"SGD\":\"SGD\",\"HKD\":\"HKD\",\"NOK\":\"NOK\",\"KRW\":\"KRW\",\"TRY\":\"TRY\",\"RUB\":\"RUB\",\"INR\":\"INR\",\"BRL\":\"BRL\",\"ZAR\":\"ZAR\",\"AED\":\"AED\",\"AFN\":\"AFN\",\"ALL\":\"ALL\",\"AMD\":\"AMD\",\"ANG\":\"ANG\",\"AOA\":\"AOA\",\"ARS\":\"ARS\",\"AWG\":\"AWG\",\"AZN\":\"AZN\",\"BAM\":\"BAM\",\"BBD\":\"BBD\",\"BDT\":\"BDT\",\"BGN\":\"BGN\",\"BHD\":\"BHD\",\"BIF\":\"BIF\",\"BMD\":\"BMD\",\"BND\":\"BND\",\"BOB\":\"BOB\",\"BSD\":\"BSD\",\"BTN\":\"BTN\",\"BWP\":\"BWP\",\"BYN\":\"BYN\",\"BZD\":\"BZD\",\"CDF\":\"CDF\",\"CLF\":\"CLF\",\"CLP\":\"CLP\",\"COP\":\"COP\",\"CRC\":\"CRC\",\"CUC\":\"CUC\",\"CUP\":\"CUP\",\"CVE\":\"CVE\",\"CZK\":\"CZK\",\"DJF\":\"DJF\",\"DKK\":\"DKK\",\"DOP\":\"DOP\",\"DZD\":\"DZD\",\"EGP\":\"EGP\",\"ERN\":\"ERN\",\"ETB\":\"ETB\",\"FJD\":\"FJD\",\"FKP\":\"FKP\",\"GEL\":\"GEL\",\"GGP\":\"GGP\",\"GHS\":\"GHS\",\"GIP\":\"GIP\",\"GMD\":\"GMD\",\"GNF\":\"GNF\",\"GTQ\":\"GTQ\",\"GYD\":\"GYD\",\"HNL\":\"HNL\",\"HRK\":\"HRK\",\"HTG\":\"HTG\",\"HUF\":\"HUF\",\"IDR\":\"IDR\",\"ILS\":\"ILS\",\"IMP\":\"IMP\",\"IQD\":\"IQD\",\"IRR\":\"IRR\",\"ISK\":\"ISK\",\"JEP\":\"JEP\",\"JMD\":\"JMD\",\"JOD\":\"JOD\",\"KES\":\"KES\",\"KGS\":\"KGS\",\"KHR\":\"KHR\",\"KMF\":\"KMF\",\"KPW\":\"KPW\",\"KWD\":\"KWD\",\"KYD\":\"KYD\",\"KZT\":\"KZT\",\"LAK\":\"LAK\",\"LBP\":\"LBP\",\"LKR\":\"LKR\",\"LRD\":\"LRD\",\"LSL\":\"LSL\",\"LYD\":\"LYD\",\"MAD\":\"MAD\",\"MDL\":\"MDL\",\"MGA\":\"MGA\",\"MKD\":\"MKD\",\"MMK\":\"MMK\",\"MNT\":\"MNT\",\"MOP\":\"MOP\",\"MRO\":\"MRO\",\"MUR\":\"MUR\",\"MVR\":\"MVR\",\"MWK\":\"MWK\",\"MYR\":\"MYR\",\"MZN\":\"MZN\",\"NAD\":\"NAD\",\"NGN\":\"NGN\",\"NIO\":\"NIO\",\"NPR\":\"NPR\",\"OMR\":\"OMR\",\"PAB\":\"PAB\",\"PEN\":\"PEN\",\"PGK\":\"PGK\",\"PHP\":\"PHP\",\"PKR\":\"PKR\",\"PLN\":\"PLN\",\"PYG\":\"PYG\",\"QAR\":\"QAR\",\"RON\":\"RON\",\"RSD\":\"RSD\",\"RWF\":\"RWF\",\"SAR\":\"SAR\",\"SBD\":\"SBD\",\"SCR\":\"SCR\",\"SDG\":\"SDG\",\"SHP\":\"SHP\",\"SLL\":\"SLL\",\"SOS\":\"SOS\",\"SRD\":\"SRD\",\"SSP\":\"SSP\",\"STD\":\"STD\",\"SVC\":\"SVC\",\"SYP\":\"SYP\",\"SZL\":\"SZL\",\"THB\":\"THB\",\"TJS\":\"TJS\",\"TMT\":\"TMT\",\"TND\":\"TND\",\"TOP\":\"TOP\",\"TTD\":\"TTD\",\"TWD\":\"TWD\",\"TZS\":\"TZS\",\"UAH\":\"UAH\",\"UGX\":\"UGX\",\"UYU\":\"UYU\",\"UZS\":\"UZS\",\"VEF\":\"VEF\",\"VND\":\"VND\",\"VUV\":\"VUV\",\"WST\":\"WST\",\"XAF\":\"XAF\",\"XAG\":\"XAG\",\"XAU\":\"XAU\",\"XCD\":\"XCD\",\"XDR\":\"XDR\",\"XOF\":\"XOF\",\"XPD\":\"XPD\",\"XPF\":\"XPF\",\"XPT\":\"XPT\",\"YER\":\"YER\",\"ZMW\":\"ZMW\",\"ZWL\":\"ZWL\"}\r\n\r\n', 0, '{\"endpoint\":{\"title\": \"Webhook Endpoint\",\"value\":\"ipn.CoinbaseCommerce\"}}', NULL, '2019-09-14 13:14:22', '2021-05-21 02:02:47'),
(24, 0, 113, 'Paypal Express', 'PaypalSdk', NULL, '5f6f1bec255c61601117164.jpg', 1, '{\"clientId\":{\"title\":\"Paypal Client ID\",\"global\":true,\"value\":\"Ae0-tixtSV7DvLwIh3Bmu7JvHrjh5EfGdXr_cEklKAVjjezRZ747BxKILiBdzlKKyp-W8W_T7CKH1Ken\"},\"clientSecret\":{\"title\":\"Client Secret\",\"global\":true,\"value\":\"EOhbvHZgFNO21soQJT1L9Q00M3rK6PIEsdiTgXRBt2gtGtxwRer5JvKnVUGNU5oE63fFnjnYY7hq3HBA\"}}', '{\"AUD\":\"AUD\",\"BRL\":\"BRL\",\"CAD\":\"CAD\",\"CZK\":\"CZK\",\"DKK\":\"DKK\",\"EUR\":\"EUR\",\"HKD\":\"HKD\",\"HUF\":\"HUF\",\"INR\":\"INR\",\"ILS\":\"ILS\",\"JPY\":\"JPY\",\"MYR\":\"MYR\",\"MXN\":\"MXN\",\"TWD\":\"TWD\",\"NZD\":\"NZD\",\"NOK\":\"NOK\",\"PHP\":\"PHP\",\"PLN\":\"PLN\",\"GBP\":\"GBP\",\"RUB\":\"RUB\",\"SGD\":\"SGD\",\"SEK\":\"SEK\",\"CHF\":\"CHF\",\"THB\":\"THB\",\"USD\":\"$\"}', 0, NULL, NULL, '2019-09-14 13:14:22', '2021-05-20 23:01:08'),
(25, 0, 114, 'Stripe Checkout', 'StripeV3', NULL, '5f709684736321601214084.jpg', 1, '{\"secret_key\":{\"title\":\"Secret Key\",\"global\":true,\"value\":\"sk_test_51I6GGiCGv1sRiQlEi5v1or9eR0HVbuzdMd2rW4n3DxC8UKfz66R4X6n4yYkzvI2LeAIuRU9H99ZpY7XCNFC9xMs500vBjZGkKG\"},\"publishable_key\":{\"title\":\"PUBLISHABLE KEY\",\"global\":true,\"value\":\"pk_test_51I6GGiCGv1sRiQlEOisPKrjBqQqqcFsw8mXNaZ2H2baN6R01NulFS7dKFji1NRRxuchoUTEDdB7ujKcyKYSVc0z500eth7otOM\"},\"end_point\":{\"title\":\"End Point Secret\",\"global\":true,\"value\":\"whsec_lUmit1gtxwKTveLnSe88xCSDdnPOt8g5\"}}', '{\"USD\":\"USD\",\"AUD\":\"AUD\",\"BRL\":\"BRL\",\"CAD\":\"CAD\",\"CHF\":\"CHF\",\"DKK\":\"DKK\",\"EUR\":\"EUR\",\"GBP\":\"GBP\",\"HKD\":\"HKD\",\"INR\":\"INR\",\"JPY\":\"JPY\",\"MXN\":\"MXN\",\"MYR\":\"MYR\",\"NOK\":\"NOK\",\"NZD\":\"NZD\",\"PLN\":\"PLN\",\"SEK\":\"SEK\",\"SGD\":\"SGD\"}', 0, '{\"webhook\":{\"title\": \"Webhook Endpoint\",\"value\":\"ipn.StripeV3\"}}', NULL, '2019-09-14 13:14:22', '2021-05-21 00:58:38'),
(27, 0, 115, 'Mollie', 'Mollie', NULL, '5f6f1bb765ab11601117111.jpg', 1, '{\"mollie_email\":{\"title\":\"Mollie Email \",\"global\":true,\"value\":\"vi@gmail.com\"},\"api_key\":{\"title\":\"API KEY\",\"global\":true,\"value\":\"test_cucfwKTWfft9s337qsVfn5CC4vNkrn\"}}', '{\"AED\":\"AED\",\"AUD\":\"AUD\",\"BGN\":\"BGN\",\"BRL\":\"BRL\",\"CAD\":\"CAD\",\"CHF\":\"CHF\",\"CZK\":\"CZK\",\"DKK\":\"DKK\",\"EUR\":\"EUR\",\"GBP\":\"GBP\",\"HKD\":\"HKD\",\"HRK\":\"HRK\",\"HUF\":\"HUF\",\"ILS\":\"ILS\",\"ISK\":\"ISK\",\"JPY\":\"JPY\",\"MXN\":\"MXN\",\"MYR\":\"MYR\",\"NOK\":\"NOK\",\"NZD\":\"NZD\",\"PHP\":\"PHP\",\"PLN\":\"PLN\",\"RON\":\"RON\",\"RUB\":\"RUB\",\"SEK\":\"SEK\",\"SGD\":\"SGD\",\"THB\":\"THB\",\"TWD\":\"TWD\",\"USD\":\"USD\",\"ZAR\":\"ZAR\"}', 0, NULL, NULL, '2019-09-14 13:14:22', '2021-05-21 02:44:45'),
(30, 0, 116, 'Cashmaal', 'Cashmaal', NULL, '60d1a0b7c98311624350903.png', 1, '{\"web_id\":{\"title\":\"Web Id\",\"global\":true,\"value\":\"3748\"},\"ipn_key\":{\"title\":\"IPN Key\",\"global\":true,\"value\":\"546254628759524554647987\"}}', '{\"PKR\":\"PKR\",\"USD\":\"USD\"}', 0, '{\"webhook\":{\"title\": \"IPN URL\",\"value\":\"ipn.Cashmaal\"}}', NULL, NULL, '2021-06-22 08:05:04'),
(36, 0, 119, 'Mercado Pago', 'MercadoPago', NULL, '60f2ad85a82951626516869.png', 1, '{\"access_token\":{\"title\":\"Access Token\",\"global\":true,\"value\":\"3Vee5S2F\"}}', '{\"USD\":\"USD\",\"CAD\":\"CAD\",\"CHF\":\"CHF\",\"DKK\":\"DKK\",\"EUR\":\"EUR\",\"GBP\":\"GBP\",\"NOK\":\"NOK\",\"PLN\":\"PLN\",\"SEK\":\"SEK\",\"AUD\":\"AUD\",\"NZD\":\"NZD\"}', 0, NULL, NULL, NULL, '2021-07-17 09:44:29'),
(49, 0, 120, 'Authorize.net', 'Authorize', NULL, NULL, 1, '{\"login_id\":{\"title\":\"Login ID\",\"global\":true,\"value\":\"3Vee5S2F\"},\"transaction_key\":{\"title\":\"Transaction Key\",\"global\":true,\"value\":\"3Vee5S2F\"}}', '{\"USD\":\"USD\",\"CAD\":\"CAD\",\"CHF\":\"CHF\",\"DKK\":\"DKK\",\"EUR\":\"EUR\",\"GBP\":\"GBP\",\"NOK\":\"NOK\",\"PLN\":\"PLN\",\"SEK\":\"SEK\",\"AUD\":\"AUD\",\"NZD\":\"NZD\"}', 0, NULL, NULL, NULL, '2021-07-17 09:44:29'),
(50, 0, 121, 'NMI', 'NMI', NULL, NULL, 1, '{\"api_key\":{\"title\":\"API Key\",\"global\":true,\"value\":\"-------\"}}', '{\"AED\":\"AED\",\"ARS\":\"ARS\",\"AUD\":\"AUD\",\"BOB\":\"BOB\",\"BRL\":\"BRL\",\"CAD\":\"CAD\",\"CHF\":\"CHF\",\"CLP\":\"CLP\",\"CNY\":\"CNY\",\"COP\":\"COP\",\"DKK\":\"DKK\",\"EUR\":\"EUR\",\"GBP\":\"GBP\",\"HKD\":\"HKD\",\"IDR\":\"IDR\",\"ILS\":\"ILS\",\"INR\":\"INR\",\"JPY\":\"JPY\",\"KRW\":\"KRW\",\"MXN\":\"MXN\",\"MYR\":\"MYR\",\"NOK\":\"NOK\",\"NZD\":\"NZD\",\"PEN\":\"PEN\",\"PHP\":\"PHP\",\"PLN\":\"PLN\",\"PYG\":\"PYG\",\"RUB\":\"RUB\",\"SEC\":\"SEC\",\"SGD\":\"SGD\",\"THB\":\"THB\",\"TRY\":\"TRY\",\"TWD\":\"TWD\",\"USD\":\"USD\",\"ZAR\":\"ZAR\"}', 0, NULL, NULL, NULL, '2022-08-28 10:12:37'),
(56, 0, 510, 'BTCPay', 'BTCPay', NULL, NULL, 1, '{\"store_id\":{\"title\":\"Store Id\",\"global\":true,\"value\":\"-------\"},\"api_key\":{\"title\":\"Api Key\",\"global\":true,\"value\":\"------\"},\"server_name\":{\"title\":\"Server Name\",\"global\":true,\"value\":\"https:\\/\\/yourbtcpaserver.lndyn.com\"},\"secret_code\":{\"title\":\"Secret Code\",\"global\":true,\"value\":\"----------\"}}', '{\"BTC\":\"Bitcoin\",\"LTC\":\"Litecoin\"}', 1, '{\"webhook\":{\"title\": \"IPN URL\",\"value\":\"ipn.BTCPay\"}}', NULL, NULL, NULL),
(57, 0, 511, 'Now payments hosted', 'NowPaymentsHosted', NULL, NULL, 1, '{\"api_key\":{\"title\":\"API Key\",\"global\":true,\"value\":\"-------------------\"},\"secret_key\":{\"title\":\"Secret Key\",\"global\":true,\"value\":\"--------------\"}}', '{\"BTG\":\"BTG\",\"ETH\":\"ETH\",\"XMR\":\"XMR\",\"ZEC\":\"ZEC\",\"XVG\":\"XVG\",\"ADA\":\"ADA\",\"LTC\":\"LTC\",\"BCH\":\"BCH\",\"QTUM\":\"QTUM\",\"DASH\":\"DASH\",\"XLM\":\"XLM\",\"XRP\":\"XRP\",\"XEM\":\"XEM\",\"DGB\":\"DGB\",\"LSK\":\"LSK\",\"DOGE\":\"DOGE\",\"TRX\":\"TRX\",\"KMD\":\"KMD\",\"REP\":\"REP\",\"BAT\":\"BAT\",\"ARK\":\"ARK\",\"WAVES\":\"WAVES\",\"BNB\":\"BNB\",\"XZC\":\"XZC\",\"NANO\":\"NANO\",\"TUSD\":\"TUSD\",\"VET\":\"VET\",\"ZEN\":\"ZEN\",\"GRS\":\"GRS\",\"FUN\":\"FUN\",\"NEO\":\"NEO\",\"GAS\":\"GAS\",\"PAX\":\"PAX\",\"USDC\":\"USDC\",\"ONT\":\"ONT\",\"XTZ\":\"XTZ\",\"LINK\":\"LINK\",\"RVN\":\"RVN\",\"BNBMAINNET\":\"BNBMAINNET\",\"ZIL\":\"ZIL\",\"BCD\":\"BCD\",\"USDT\":\"USDT\",\"USDTERC20\":\"USDTERC20\",\"CRO\":\"CRO\",\"DAI\":\"DAI\",\"HT\":\"HT\",\"WABI\":\"WABI\",\"BUSD\":\"BUSD\",\"ALGO\":\"ALGO\",\"USDTTRC20\":\"USDTTRC20\",\"GT\":\"GT\",\"STPT\":\"STPT\",\"AVA\":\"AVA\",\"SXP\":\"SXP\",\"UNI\":\"UNI\",\"OKB\":\"OKB\",\"BTC\":\"BTC\"}', 1, '', NULL, NULL, '2023-02-14 10:42:09'),
(58, 0, 509, 'Now payments checkout', 'NowPaymentsCheckout', NULL, NULL, 1, '{\"api_key\":{\"title\":\"API Key\",\"global\":true,\"value\":\"-------------------\"},\"secret_key\":{\"title\":\"Secret Key\",\"global\":true,\"value\":\"--------------\"}}', '{\"BTG\":\"BTG\",\"ETH\":\"ETH\",\"XMR\":\"XMR\",\"ZEC\":\"ZEC\",\"XVG\":\"XVG\",\"ADA\":\"ADA\",\"LTC\":\"LTC\",\"BCH\":\"BCH\",\"QTUM\":\"QTUM\",\"DASH\":\"DASH\",\"XLM\":\"XLM\",\"XRP\":\"XRP\",\"XEM\":\"XEM\",\"DGB\":\"DGB\",\"LSK\":\"LSK\",\"DOGE\":\"DOGE\",\"TRX\":\"TRX\",\"KMD\":\"KMD\",\"REP\":\"REP\",\"BAT\":\"BAT\",\"ARK\":\"ARK\",\"WAVES\":\"WAVES\",\"BNB\":\"BNB\",\"XZC\":\"XZC\",\"NANO\":\"NANO\",\"TUSD\":\"TUSD\",\"VET\":\"VET\",\"ZEN\":\"ZEN\",\"GRS\":\"GRS\",\"FUN\":\"FUN\",\"NEO\":\"NEO\",\"GAS\":\"GAS\",\"PAX\":\"PAX\",\"USDC\":\"USDC\",\"ONT\":\"ONT\",\"XTZ\":\"XTZ\",\"LINK\":\"LINK\",\"RVN\":\"RVN\",\"BNBMAINNET\":\"BNBMAINNET\",\"ZIL\":\"ZIL\",\"BCD\":\"BCD\",\"USDT\":\"USDT\",\"USDTERC20\":\"USDTERC20\",\"CRO\":\"CRO\",\"DAI\":\"DAI\",\"HT\":\"HT\",\"WABI\":\"WABI\",\"BUSD\":\"BUSD\",\"ALGO\":\"ALGO\",\"USDTTRC20\":\"USDTTRC20\",\"GT\":\"GT\",\"STPT\":\"STPT\",\"AVA\":\"AVA\",\"SXP\":\"SXP\",\"UNI\":\"UNI\",\"OKB\":\"OKB\",\"BTC\":\"BTC\"}', 1, '', NULL, NULL, '2023-02-14 10:42:09'),
(59, 0, 122, '2Checkout', 'TwoCheckout', NULL, NULL, 1, '{\"merchant_code\": {\"title\": \"Merchant Code\",\"global\": true,\"value\": \"---------\"},\"secret_key\": {\"title\": \"Secret Key\",\"global\": true,\"value\": \"--------\"}}', '{\"AFN\": \"AFN\",\"ALL\": \"ALL\",\"DZD\": \"DZD\",\"ARS\": \"ARS\",\"AUD\": \"AUD\",\"AZN\": \"AZN\",\"BSD\": \"BSD\",\"BDT\": \"BDT\",\"BBD\": \"BBD\",\"BZD\": \"BZD\",\"BMD\": \"BMD\",\"BOB\": \"BOB\",\"BWP\": \"BWP\",\"BRL\": \"BRL\",\"GBP\": \"GBP\",\"BND\": \"BND\",\"BGN\": \"BGN\",\"CAD\": \"CAD\",\"CLP\": \"CLP\",\"CNY\": \"CNY\",\"COP\": \"COP\",\"CRC\": \"CRC\",\"HRK\": \"HRK\",\"CZK\": \"CZK\",\"DKK\": \"DKK\",\"DOP\": \"DOP\",\"XCD\": \"XCD\",\"EGP\": \"EGP\",\"EUR\": \"EUR\",\"FJD\": \"FJD\",\"GTQ\": \"GTQ\",\"HKD\": \"HKD\",\"HNL\": \"HNL\",\"HUF\": \"HUF\",\"INR\": \"INR\",\"IDR\": \"IDR\",\"ILS\": \"ILS\",\"JMD\": \"JMD\",\"JPY\": \"JPY\",\"KZT\": \"KZT\",\"KES\": \"KES\",\"LAK\": \"LAK\",\"MMK\": \"MMK\",\"LBP\": \"LBP\",\"LRD\": \"LRD\",\"MOP\": \"MOP\",\"MYR\": \"MYR\",\"MVR\": \"MVR\",\"MRO\": \"MRO\",\"MUR\": \"MUR\",\"MXN\": \"MXN\",\"MAD\": \"MAD\",\"NPR\": \"NPR\",\"TWD\": \"TWD\",\"NZD\": \"NZD\",\"NIO\": \"NIO\",\"NOK\": \"NOK\",\"PKR\": \"PKR\",\"PGK\": \"PGK\",\"PEN\": \"PEN\",\"PHP\": \"PHP\",\"PLN\": \"PLN\",\"QAR\": \"QAR\",\"RON\": \"RON\",\"RUB\": \"RUB\",\"WST\": \"WST\",\"SAR\": \"SAR\",\"SCR\": \"SCR\",\"SGD\": \"SGD\",\"SBD\": \"SBD\",\"ZAR\": \"ZAR\",\"KRW\": \"KRW\",\"LKR\": \"LKR\",\"SEK\": \"SEK\",\"CHF\": \"CHF\",\"SYP\": \"SYP\",\"THB\": \"THB\",\"TOP\": \"TOP\",\"TTD\": \"TTD\",\"TRY\": \"TRY\",\"UAH\": \"UAH\",\"AED\": \"AED\",\"USD\": \"USD\",\"VUV\": \"VUV\",\"VND\": \"VND\",\"XOF\": \"XOF\",\"YER\": \"YER\"}', 1, '{\"approved_url\":{\"title\": \"Approved URL\",\"value\":\"ipn.TwoCheckout\"}}', NULL, NULL, '2023-02-14 10:42:09'),
(60, 0, 123, 'Checkout', 'Checkout', NULL, NULL, 1, '{\"secret_key\":{\"title\":\"Secret Key\",\"global\":true,\"value\":\"sk_f7f9a069-dcc5-45d8-aa72-e60f605c9514\"},\"public_key\":{\"title\":\"PUBLIC KEY\",\"global\":true,\"value\":\"pk_66e19b3f-a431-44ff-823f-d773d960f6b9\"},\"processing_channel_id\":{\"title\":\"PROCESSING CHANNEL\",\"global\":true,\"value\":\"---\"}}', '{\"USD\":\"USD\",\"EUR\":\"EUR\",\"GBP\":\"GBP\",\"HKD\":\"HKD\",\"AUD\":\"AUD\",\"CAN\":\"CAN\",\"CHF\":\"CHF\",\"SGD\":\"SGD\",\"JPY\":\"JPY\",\"NZD\":\"NZD\"}', 0, NULL, NULL, NULL, NULL),
(61, 6, 1000, 'Binance', 'binance', '01610273785', NULL, 1, '[]', '[]', 0, NULL, 'TBBKZzHadfTkHV9scGuZf', '2023-08-10 16:28:54', '2024-07-11 09:41:06'),
(62, 9, 1001, 'USDT', 'usdt', '017xxxxxx66', NULL, 1, '[]', '[]', 0, NULL, 'Address : TBBKZzHadfTkH***********V9scGuZff', '2023-10-23 18:09:44', '2023-11-20 23:39:23');

-- --------------------------------------------------------

--
-- Table structure for table `gateway_currencies`
--

CREATE TABLE `gateway_currencies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `symbol` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method_code` int(11) DEFAULT NULL,
  `gateway_alias` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `min_amount` decimal(28,8) NOT NULL DEFAULT 0.00000000,
  `max_amount` decimal(28,8) NOT NULL DEFAULT 0.00000000,
  `percent_charge` decimal(5,2) NOT NULL DEFAULT 0.00,
  `fixed_charge` decimal(28,8) NOT NULL DEFAULT 0.00000000,
  `rate` decimal(28,8) NOT NULL DEFAULT 0.00000000,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gateway_parameter` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gateway_currencies`
--

INSERT INTO `gateway_currencies` (`id`, `name`, `currency`, `symbol`, `method_code`, `gateway_alias`, `admin_number`, `min_amount`, `max_amount`, `percent_charge`, `fixed_charge`, `rate`, `image`, `gateway_parameter`, `created_at`, `updated_at`) VALUES
(1, 'Binance', 'USDT', '', 1000, 'binance', '01610273785', '250.00000000', '25000.00000000', '0.00', '0.00000000', '1.00000000', NULL, NULL, '2023-08-10 16:28:54', '2024-07-11 09:41:06'),
(2, 'USDT', 'USDT', '', 1001, 'usdt', '017xxxxxx66', '10.00000000', '25000.00000000', '0.00', '0.00000000', '1.00000000', NULL, NULL, '2023-10-23 18:09:44', '2023-11-20 23:39:23');

-- --------------------------------------------------------

--
-- Table structure for table `general_settings`
--

CREATE TABLE `general_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_name` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cur_text` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'currency text',
  `cur_sym` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'currency symbol',
  `email_from` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_template` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sms_body` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sms_from` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `base_color` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secondary_color` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail_config` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'email configuration',
  `sms_config` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `global_shortcodes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kv` tinyint(1) NOT NULL DEFAULT 0,
  `ev` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'email verification, 0 - dont check, 1 - check',
  `en` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'email notification, 0 - dont send, 1 - send',
  `sv` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'mobile verication, 0 - dont check, 1 - check',
  `sn` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'sms notification, 0 - dont send, 1 - send',
  `force_ssl` tinyint(1) NOT NULL DEFAULT 0,
  `maintenance_mode` tinyint(1) NOT NULL DEFAULT 0,
  `secure_password` tinyint(1) NOT NULL DEFAULT 0,
  `agree` tinyint(1) NOT NULL DEFAULT 0,
  `multi_language` tinyint(1) NOT NULL DEFAULT 1,
  `registration` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0: Off	, 1: On',
  `active_template` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deposit_commission` tinyint(1) NOT NULL DEFAULT 0,
  `plan_subscribe_commission` tinyint(1) NOT NULL DEFAULT 0,
  `ptc_view_commission` tinyint(1) NOT NULL DEFAULT 0,
  `system_info` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `registration_bonus` decimal(28,8) NOT NULL DEFAULT 0.00000000,
  `bt_fixed` decimal(28,8) NOT NULL DEFAULT 0.00000000,
  `bt_percent` decimal(11,2) NOT NULL DEFAULT 0.00,
  `balance_transfer` tinyint(1) NOT NULL DEFAULT 0,
  `default_plan` int(11) NOT NULL DEFAULT 0,
  `user_ads_post` tinyint(1) NOT NULL DEFAULT 0,
  `ad_auto_approve` tinyint(1) NOT NULL DEFAULT 0,
  `ads_setting` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `socialite_credentials` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `mv` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `general_settings`
--

INSERT INTO `general_settings` (`id`, `site_name`, `cur_text`, `cur_sym`, `email_from`, `email_template`, `sms_body`, `sms_from`, `base_color`, `secondary_color`, `mail_config`, `sms_config`, `global_shortcodes`, `kv`, `ev`, `en`, `sv`, `sn`, `force_ssl`, `maintenance_mode`, `secure_password`, `agree`, `multi_language`, `registration`, `active_template`, `deposit_commission`, `plan_subscribe_commission`, `ptc_view_commission`, `system_info`, `registration_bonus`, `bt_fixed`, `bt_percent`, `balance_transfer`, `default_plan`, `user_ads_post`, `ad_auto_approve`, `ads_setting`, `socialite_credentials`, `created_at`, `updated_at`, `mv`) VALUES
(1, 'Mining JS', 'USDT', '$', 'info@gmail.com', '<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">\r\n  <!--[if !mso]><!-->\r\n  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">\r\n  <!--<![endif]-->\r\n  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\r\n  <title></title>\r\n  <style type=\"text/css\">\r\n.ReadMsgBody { width: 100%; background-color: #ffffff; }\r\n.ExternalClass { width: 100%; background-color: #ffffff; }\r\n.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div { line-height: 100%; }\r\nhtml { width: 100%; }\r\nbody { -webkit-text-size-adjust: none; -ms-text-size-adjust: none; margin: 0; padding: 0; }\r\ntable { border-spacing: 0; table-layout: fixed; margin: 0 auto;border-collapse: collapse; }\r\ntable table table { table-layout: auto; }\r\n.yshortcuts a { border-bottom: none !important; }\r\nimg:hover { opacity: 0.9 !important; }\r\na { color: #0087ff; text-decoration: none; }\r\n.textbutton a { font-family: \'open sans\', arial, sans-serif !important;}\r\n.btn-link a { color:#FFFFFF !important;}\r\n\r\n@media only screen and (max-width: 480px) {\r\nbody { width: auto !important; }\r\n*[class=\"table-inner\"] { width: 90% !important; text-align: center !important; }\r\n*[class=\"table-full\"] { width: 100% !important; text-align: center !important; }\r\n/* image */\r\nimg[class=\"img1\"] { width: 100% !important; height: auto !important; }\r\n}\r\n</style>\r\n\r\n\r\n\r\n  <table bgcolor=\"#414a51\" width=\"100%\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">\r\n    <tbody><tr>\r\n      <td height=\"50\"></td>\r\n    </tr>\r\n    <tr>\r\n      <td align=\"center\" style=\"text-align:center;vertical-align:top;font-size:0;\">\r\n        <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\r\n          <tbody><tr>\r\n            <td align=\"center\" width=\"600\">\r\n              <!--header-->\r\n              <table class=\"table-inner\" width=\"95%\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">\r\n                <tbody><tr>\r\n                  <td bgcolor=\"#0087ff\" style=\"border-top-left-radius:6px; border-top-right-radius:6px;text-align:center;vertical-align:top;font-size:0;\" align=\"center\">\r\n                    <table width=\"90%\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">\r\n                      <tbody><tr>\r\n                        <td height=\"20\"></td>\r\n                      </tr>\r\n                      <tr>\r\n                        <td align=\"center\" style=\"font-family: &quot;Open sans&quot;, Arial, Bangla1060, sans-serif; color: rgb(255, 255, 255); font-size: 16px; font-weight: bold;\">This is a System Generated Email</td>\r\n                      </tr>\r\n                      <tr>\r\n                        <td height=\"20\"></td>\r\n                      </tr>\r\n                    </tbody></table>\r\n                  </td>\r\n                </tr>\r\n              </tbody></table>\r\n              <!--end header-->\r\n              <table class=\"table-inner\" width=\"95%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\r\n                <tbody><tr>\r\n                  <td bgcolor=\"#FFFFFF\" align=\"center\" style=\"text-align:center;vertical-align:top;font-size:0;\">\r\n                    <table align=\"center\" width=\"90%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\r\n                      <tbody><tr>\r\n                        <td height=\"35\"></td>\r\n                      </tr>\r\n                      <!--logo-->\r\n                      <tr>\r\n                        <td align=\"center\" style=\"vertical-align:top;font-size:0;\">\r\n                          <a href=\"#\">\r\n                            <br>\r\n                          </a>\r\n                        </td>\r\n                      </tr>\r\n                      <!--end logo-->\r\n                      <tr>\r\n                        <td height=\"40\"></td>\r\n                      </tr>\r\n                      <!--headline-->\r\n                      <tr>\r\n                        <td align=\"center\" style=\"font-family: &quot;Open Sans&quot;, Arial, Bangla1060, sans-serif; font-size: 22px; color: rgb(65, 74, 81); font-weight: bold;\">Hello {{fullname}} ({{username}})</td>\r\n                      </tr>\r\n                      <!--end headline-->\r\n                      <tr>\r\n                        <td align=\"center\" style=\"text-align:center;vertical-align:top;font-size:0;\">\r\n                          <table width=\"40\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">\r\n                            <tbody><tr>\r\n                              <td height=\"20\" style=\" border-bottom:3px solid #0087ff;\"></td>\r\n                            </tr>\r\n                          </tbody></table>\r\n                        </td>\r\n                      </tr>\r\n                      <tr>\r\n                        <td height=\"20\"></td>\r\n                      </tr>\r\n                      <!--content-->\r\n                      <tr>\r\n                        <td align=\"left\" style=\"font-family: &quot;Open sans&quot;, Arial, Bangla1060, sans-serif; color: rgb(127, 140, 141); font-size: 16px; line-height: 28px;\">{{message}}</td>\r\n                      </tr>\r\n                      <!--end content-->\r\n                      <tr>\r\n                        <td height=\"40\"></td>\r\n                      </tr>\r\n              \r\n                    </tbody></table>\r\n                  </td>\r\n                </tr>\r\n                <tr>\r\n                  <td height=\"45\" align=\"center\" bgcolor=\"#f4f4f4\" style=\"border-bottom-left-radius:6px;border-bottom-right-radius:6px;\">\r\n                    <table align=\"center\" width=\"90%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\r\n                      <tbody><tr>\r\n                        <td height=\"10\"></td>\r\n                      </tr>\r\n                      <!--preference-->\r\n                      <tr>\r\n                        <td class=\"preference-link\" align=\"center\" style=\"font-family: &quot;Open sans&quot;, Arial, Bangla1060, sans-serif; color: rgb(149, 165, 166); font-size: 14px;\">\r\n                          © 2021 <a href=\"#\">{{site_name}}</a>&nbsp;. All Rights Reserved. \r\n                        </td>\r\n                      </tr>\r\n                      <!--end preference-->\r\n                      <tr>\r\n                        <td height=\"10\"></td>\r\n                      </tr>\r\n                    </tbody></table>\r\n                  </td>\r\n                </tr>\r\n              </tbody></table>\r\n            </td>\r\n          </tr>\r\n        </tbody></table>\r\n      </td>\r\n    </tr>\r\n    <tr>\r\n      <td height=\"60\"></td>\r\n    </tr>\r\n  </tbody></table>', 'hi {{fullname}} ({{username}}), {{message}}', 'INFORMATION', '00D093', '00160F', '{\"name\":\"php\"}', '{\"name\":\"infobip\",\"clickatell\":{\"api_key\":\"----------------\"},\"infobip\":{\"username\":\"----------------\",\"password\":\"-----------------\"},\"message_bird\":{\"api_key\":\"-------------------\"},\"nexmo\":{\"api_key\":\"----------------------\",\"api_secret\":\"----------------------\"},\"sms_broadcast\":{\"username\":\"----------------------\",\"password\":\"-----------------------------\"},\"twilio\":{\"account_sid\":\"-----------------------\",\"auth_token\":\"---------------------------\",\"from\":\"----------------------\"},\"text_magic\":{\"username\":\"-----------------------\",\"apiv2_key\":\"-------------------------------\"},\"custom\":{\"method\":\"get\",\"url\":\"https:\\/\\/hostname\\/demo-api-v1\",\"headers\":{\"name\":[\"api_key\"],\"value\":[\"test_api 555\"]},\"body\":{\"name\":[\"from_number\"],\"value\":[\"5657545757\"]}}}', '{\n    \"site_name\":\"Name of your site\",\n    \"site_currency\":\"Currency of your site\",\n    \"currency_symbol\":\"Symbol of currency\"\n}', 0, 0, 1, 0, 0, 0, 9, 0, 1, 1, 1, 'basic', 0, 1, 1, '[]', '0.00000000', '2.00000000', '2.00', 1, 0, 1, 0, '{\"ad_price\":{\"script\":\"0.25\",\"image\":\"0.25\",\"url\":\"0.25\",\"youtube\":\"0.25\"},\"amount_for_user\":{\"script\":\"0.15\",\"image\":\"0.15\",\"url\":\"0.15\",\"youtube\":\"0.15\"}}', '{\"google\":{\"client_id\":\"--------------\",\"client_secret\":\"------------\",\"status\":1},\"facebook\":{\"client_id\":\"---------------\",\"client_secret\":\"----------------\",\"status\":1},\"linkedin\":{\"client_id\":\"--------------\",\"client_secret\":\"--------------\",\"status\":1}}', NULL, '2024-07-11 20:01:54', '1');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_default` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0: not default language, 1: default language',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `code`, `is_default`, `created_at`, `updated_at`) VALUES
(1, 'English', 'en', 1, '2020-07-06 03:47:55', '2022-04-09 03:47:04'),
(5, 'Hindi', 'hn', 0, '2020-12-29 02:20:07', '2022-04-09 03:47:04'),
(9, 'Bangla', 'bn', 0, '2021-03-14 04:37:41', '2022-03-30 12:31:55'),
(11, 'Spanish', 'es', 0, '2022-04-28 04:39:33', '2022-04-28 04:39:33');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_10_01_233530_create_runing_plans_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notification_logs`
--

CREATE TABLE `notification_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `sender` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sent_from` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sent_to` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notification_type` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notification_templates`
--

CREATE TABLE `notification_templates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `act` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subj` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_body` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sms_body` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shortcodes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_status` tinyint(1) NOT NULL DEFAULT 1,
  `sms_status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notification_templates`
--

INSERT INTO `notification_templates` (`id`, `act`, `name`, `subj`, `email_body`, `sms_body`, `shortcodes`, `email_status`, `sms_status`, `created_at`, `updated_at`) VALUES
(1, 'BAL_ADD', 'Balance - Added', 'Your Account has been Credited', '<div><div style=\"font-family: Montserrat, sans-serif;\">{{amount}} {{site_currency}} has been added to your account .</div><div style=\"font-family: Montserrat, sans-serif;\"><br></div><div style=\"font-family: Montserrat, sans-serif;\">Transaction Number : {{trx}}</div><div style=\"font-family: Montserrat, sans-serif;\"><br></div><span style=\"color: rgb(33, 37, 41); font-family: Montserrat, sans-serif;\">Your Current Balance is :&nbsp;</span><font style=\"font-family: Montserrat, sans-serif;\"><span style=\"font-weight: bolder;\">{{post_balance}}&nbsp; {{site_currency}}&nbsp;</span></font><br></div><div><font style=\"font-family: Montserrat, sans-serif;\"><span style=\"font-weight: bolder;\"><br></span></font></div><div>Admin note:&nbsp;<span style=\"color: rgb(33, 37, 41); font-size: 12px; font-weight: 600; white-space: nowrap; text-align: var(--bs-body-text-align);\">{{remark}}</span></div>', '{{amount}} {{site_currency}} credited in your account. Your Current Balance {{post_balance}} {{site_currency}} . Transaction: #{{trx}}. Admin note is \"{{remark}}\"', '{\"trx\":\"Transaction number for the action\",\"amount\":\"Amount inserted by the admin\",\"remark\":\"Remark inserted by the admin\",\"post_balance\":\"Balance of the user after this transaction\"}', 0, 0, '2021-11-03 12:00:00', '2022-04-03 02:18:28'),
(2, 'BAL_SUB', 'Balance - Subtracted', 'Your Account has been Debited', '<div style=\"font-family: Montserrat, sans-serif;\">{{amount}} {{site_currency}} has been subtracted from your account .</div><div style=\"font-family: Montserrat, sans-serif;\"><br></div><div style=\"font-family: Montserrat, sans-serif;\">Transaction Number : {{trx}}</div><div style=\"font-family: Montserrat, sans-serif;\"><br></div><span style=\"color: rgb(33, 37, 41); font-family: Montserrat, sans-serif;\">Your Current Balance is :&nbsp;</span><font style=\"font-family: Montserrat, sans-serif;\"><span style=\"font-weight: bolder;\">{{post_balance}}&nbsp; {{site_currency}}</span></font><br><div><font style=\"font-family: Montserrat, sans-serif;\"><span style=\"font-weight: bolder;\"><br></span></font></div><div>Admin Note: {{remark}}</div>', '{{amount}} {{site_currency}} debited from your account. Your Current Balance {{post_balance}} {{site_currency}} . Transaction: #{{trx}}. Admin Note is {{remark}}', '{\"trx\":\"Transaction number for the action\",\"amount\":\"Amount inserted by the admin\",\"remark\":\"Remark inserted by the admin\",\"post_balance\":\"Balance of the user after this transaction\"}', 0, 1, '2021-11-03 12:00:00', '2022-04-03 02:24:11'),
(3, 'DEPOSIT_COMPLETE', 'Deposit - Automated - Successful', 'Deposit Completed Successfully', '<div>Your deposit of&nbsp;<span style=\"font-weight: bolder;\">{{amount}} {{site_currency}}</span>&nbsp;is via&nbsp;&nbsp;<span style=\"font-weight: bolder;\">{{method_name}}&nbsp;</span>has been completed Successfully.<span style=\"font-weight: bolder;\"><br></span></div><div><span style=\"font-weight: bolder;\"><br></span></div><div><span style=\"font-weight: bolder;\">Details of your Deposit :<br></span></div><div><br></div><div>Amount : {{amount}} {{site_currency}}</div><div>Charge:&nbsp;<font color=\"#000000\">{{charge}} {{site_currency}}</font></div><div><br></div><div>Conversion Rate : 1 {{site_currency}} = {{rate}} {{method_currency}}</div><div>Received : {{method_amount}} {{method_currency}}<br></div><div>Paid via :&nbsp; {{method_name}}</div><div><br></div><div>Transaction Number : {{trx}}</div><div><font size=\"5\"><span style=\"font-weight: bolder;\"><br></span></font></div><div><font size=\"5\">Your current Balance is&nbsp;<span style=\"font-weight: bolder;\">{{post_balance}} {{site_currency}}</span></font></div><div><br style=\"font-family: Montserrat, sans-serif;\"></div>', '{{amount}} {{site_currency}} Deposit successfully by {{method_name}}', '{\"trx\":\"Transaction number for the deposit\",\"amount\":\"Amount inserted by the user\",\"charge\":\"Gateway charge set by the admin\",\"rate\":\"Conversion rate between base currency and method currency\",\"method_name\":\"Name of the deposit method\",\"method_currency\":\"Currency of the deposit method\",\"method_amount\":\"Amount after conversion between base currency and method currency\",\"post_balance\":\"Balance of the user after this transaction\"}', 0, 1, '2021-11-03 12:00:00', '2022-04-03 02:25:43'),
(4, 'DEPOSIT_APPROVE', 'Deposit - Manual - Approved', 'Your Deposit is Approved', '<div style=\"font-family: Montserrat, sans-serif;\">Your deposit request of&nbsp;<span style=\"font-weight: bolder;\">{{amount}} {{site_currency}}</span>&nbsp;is via&nbsp;&nbsp;<span style=\"font-weight: bolder;\">{{method_name}}&nbsp;</span>is Approved .<span style=\"font-weight: bolder;\"><br></span></div><div style=\"font-family: Montserrat, sans-serif;\"><span style=\"font-weight: bolder;\"><br></span></div><div style=\"font-family: Montserrat, sans-serif;\"><span style=\"font-weight: bolder;\">Details of your Deposit :<br></span></div><div style=\"font-family: Montserrat, sans-serif;\"><br></div><div style=\"font-family: Montserrat, sans-serif;\">Amount : {{amount}} {{site_currency}}</div><div style=\"font-family: Montserrat, sans-serif;\">Charge:&nbsp;<font color=\"#FF0000\">{{charge}} {{site_currency}}</font></div><div style=\"font-family: Montserrat, sans-serif;\"><br></div><div style=\"font-family: Montserrat, sans-serif;\">Conversion Rate : 1 {{site_currency}} = {{rate}} {{method_currency}}</div><div style=\"font-family: Montserrat, sans-serif;\">Received : {{method_amount}} {{method_currency}}<br></div><div style=\"font-family: Montserrat, sans-serif;\">Paid via :&nbsp; {{method_name}}</div><div style=\"font-family: Montserrat, sans-serif;\"><br></div><div style=\"font-family: Montserrat, sans-serif;\">Transaction Number : {{trx}}</div><div style=\"font-family: Montserrat, sans-serif;\"><font size=\"5\"><span style=\"font-weight: bolder;\"><br></span></font></div><div style=\"font-family: Montserrat, sans-serif;\"><font size=\"5\">Your current Balance is&nbsp;<span style=\"font-weight: bolder;\">{{post_balance}} {{site_currency}}</span></font></div><div style=\"font-family: Montserrat, sans-serif;\"><br></div><div style=\"font-family: Montserrat, sans-serif;\"><br></div>', 'Admin Approve Your {{amount}} {{site_currency}} payment request by {{method_name}} transaction : {{trx}}', '{\"trx\":\"Transaction number for the deposit\",\"amount\":\"Amount inserted by the user\",\"charge\":\"Gateway charge set by the admin\",\"rate\":\"Conversion rate between base currency and method currency\",\"method_name\":\"Name of the deposit method\",\"method_currency\":\"Currency of the deposit method\",\"method_amount\":\"Amount after conversion between base currency and method currency\",\"post_balance\":\"Balance of the user after this transaction\"}', 0, 1, '2021-11-03 12:00:00', '2022-04-03 02:26:07'),
(5, 'DEPOSIT_REJECT', 'Deposit - Manual - Rejected', 'Your Deposit Request is Rejected', '<div style=\"font-family: Montserrat, sans-serif;\">Your deposit request of&nbsp;<span style=\"font-weight: bolder;\">{{amount}} {{site_currency}}</span>&nbsp;is via&nbsp;&nbsp;<span style=\"font-weight: bolder;\">{{method_name}} has been rejected</span>.<span style=\"font-weight: bolder;\"><br></span></div><div><br></div><div><br></div><div style=\"font-family: Montserrat, sans-serif;\">Conversion Rate : 1 {{site_currency}} = {{rate}} {{method_currency}}</div><div style=\"font-family: Montserrat, sans-serif;\">Received : {{method_amount}} {{method_currency}}<br></div><div style=\"font-family: Montserrat, sans-serif;\">Paid via :&nbsp; {{method_name}}</div><div style=\"font-family: Montserrat, sans-serif;\">Charge: {{charge}}</div><div style=\"font-family: Montserrat, sans-serif;\"><br></div><div style=\"font-family: Montserrat, sans-serif;\"><br></div><div style=\"font-family: Montserrat, sans-serif;\">Transaction Number was : {{trx}}</div><div style=\"font-family: Montserrat, sans-serif;\"><br></div><div style=\"font-family: Montserrat, sans-serif;\">if you have any queries, feel free to contact us.<br></div><br style=\"font-family: Montserrat, sans-serif;\"><div style=\"font-family: Montserrat, sans-serif;\"><br><br></div><span style=\"color: rgb(33, 37, 41); font-family: Montserrat, sans-serif;\">{{rejection_message}}</span><br>', 'Admin Rejected Your {{amount}} {{site_currency}} payment request by {{method_name}}\r\n\r\n{{rejection_message}}', '{\"trx\":\"Transaction number for the deposit\",\"amount\":\"Amount inserted by the user\",\"charge\":\"Gateway charge set by the admin\",\"rate\":\"Conversion rate between base currency and method currency\",\"method_name\":\"Name of the deposit method\",\"method_currency\":\"Currency of the deposit method\",\"method_amount\":\"Amount after conversion between base currency and method currency\",\"rejection_message\":\"Rejection message by the admin\"}', 0, 1, '2021-11-03 12:00:00', '2022-04-05 03:45:27'),
(6, 'DEPOSIT_REQUEST', 'Deposit - Manual - Requested', 'Deposit Request Submitted Successfully', '<div>Your deposit request of&nbsp;<span style=\"font-weight: bolder;\">{{amount}} {{site_currency}}</span>&nbsp;is via&nbsp;&nbsp;<span style=\"font-weight: bolder;\">{{method_name}}&nbsp;</span>submitted successfully<span style=\"font-weight: bolder;\">&nbsp;.<br></span></div><div><span style=\"font-weight: bolder;\"><br></span></div><div><span style=\"font-weight: bolder;\">Details of your Deposit :<br></span></div><div><br></div><div>Amount : {{amount}} {{site_currency}}</div><div>Charge:&nbsp;<font color=\"#FF0000\">{{charge}} {{site_currency}}</font></div><div><br></div><div>Conversion Rate : 1 {{site_currency}} = {{rate}} {{method_currency}}</div><div>Payable : {{method_amount}} {{method_currency}}<br></div><div>Pay via :&nbsp; {{method_name}}</div><div><br></div><div>Transaction Number : {{trx}}</div><div><br></div><div><br style=\"font-family: Montserrat, sans-serif;\"></div>', '{{amount}} {{site_currency}} Deposit requested by {{method_name}}. Charge: {{charge}} . Trx: {{trx}}', '{\"trx\":\"Transaction number for the deposit\",\"amount\":\"Amount inserted by the user\",\"charge\":\"Gateway charge set by the admin\",\"rate\":\"Conversion rate between base currency and method currency\",\"method_name\":\"Name of the deposit method\",\"method_currency\":\"Currency of the deposit method\",\"method_amount\":\"Amount after conversion between base currency and method currency\"}', 0, 1, '2021-11-03 12:00:00', '2022-04-03 02:29:19'),
(7, 'PASS_RESET_CODE', 'Password - Reset - Code', 'Password Reset', '<div style=\"font-family: Montserrat, sans-serif;\">We have received a request to reset the password for your account on&nbsp;<span style=\"font-weight: bolder;\">{{time}} .<br></span></div><div style=\"font-family: Montserrat, sans-serif;\">Requested From IP:&nbsp;<span style=\"font-weight: bolder;\">{{ip}}</span>&nbsp;using&nbsp;<span style=\"font-weight: bolder;\">{{browser}}</span>&nbsp;on&nbsp;<span style=\"font-weight: bolder;\">{{operating_system}}&nbsp;</span>.</div><div style=\"font-family: Montserrat, sans-serif;\"><br></div><br style=\"font-family: Montserrat, sans-serif;\"><div style=\"font-family: Montserrat, sans-serif;\"><div>Your account recovery code is:&nbsp;&nbsp;&nbsp;<font size=\"6\"><span style=\"font-weight: bolder;\">{{code}}</span></font></div><div><br></div></div><div style=\"font-family: Montserrat, sans-serif;\"><br></div><div style=\"font-family: Montserrat, sans-serif;\"><font size=\"4\" color=\"#CC0000\">If you do not wish to reset your password, please disregard this message.&nbsp;</font><br></div><div><font size=\"4\" color=\"#CC0000\"><br></font></div>', 'Your account recovery code is: {{code}}', '{\"code\":\"Verification code for password reset\",\"ip\":\"IP address of the user\",\"browser\":\"Browser of the user\",\"operating_system\":\"Operating system of the user\",\"time\":\"Time of the request\"}', 0, 0, '2021-11-03 12:00:00', '2022-03-20 20:47:05'),
(8, 'PASS_RESET_DONE', 'Password - Reset - Confirmation', 'You have reset your password', '<p style=\"font-family: Montserrat, sans-serif;\">You have successfully reset your password.</p><p style=\"font-family: Montserrat, sans-serif;\">You changed from&nbsp; IP:&nbsp;<span style=\"font-weight: bolder;\">{{ip}}</span>&nbsp;using&nbsp;<span style=\"font-weight: bolder;\">{{browser}}</span>&nbsp;on&nbsp;<span style=\"font-weight: bolder;\">{{operating_system}}&nbsp;</span>&nbsp;on&nbsp;<span style=\"font-weight: bolder;\">{{time}}</span></p><p style=\"font-family: Montserrat, sans-serif;\"><span style=\"font-weight: bolder;\"><br></span></p><p style=\"font-family: Montserrat, sans-serif;\"><span style=\"font-weight: bolder;\"><font color=\"#ff0000\">If you did not change that, please contact us as soon as possible.</font></span></p>', 'Your password has been changed successfully', '{\"ip\":\"IP address of the user\",\"browser\":\"Browser of the user\",\"operating_system\":\"Operating system of the user\",\"time\":\"Time of the request\"}', 0, 1, '2021-11-03 12:00:00', '2022-04-05 03:46:35'),
(9, 'ADMIN_SUPPORT_REPLY', 'Support - Reply', 'Reply Support Ticket', '<div><p><span data-mce-style=\"font-size: 11pt;\" style=\"font-size: 11pt;\"><span style=\"font-weight: bolder;\">A member from our support team has replied to the following ticket:</span></span></p><p><span style=\"font-weight: bolder;\"><span data-mce-style=\"font-size: 11pt;\" style=\"font-size: 11pt;\"><span style=\"font-weight: bolder;\"><br></span></span></span></p><p><span style=\"font-weight: bolder;\">[Ticket#{{ticket_id}}] {{ticket_subject}}<br><br>Click here to reply:&nbsp; {{link}}</span></p><p>----------------------------------------------</p><p>Here is the reply :<br></p><p>{{reply}}<br></p></div><div><br style=\"font-family: Montserrat, sans-serif;\"></div>', 'Your Ticket#{{ticket_id}} :  {{ticket_subject}} has been replied.', '{\"ticket_id\":\"ID of the support ticket\",\"ticket_subject\":\"Subject  of the support ticket\",\"reply\":\"Reply made by the admin\",\"link\":\"URL to view the support ticket\"}', 0, 1, '2021-11-03 12:00:00', '2022-03-20 20:47:51'),
(10, 'EVER_CODE', 'Verification - Email', 'Please verify your email address', '<br><div><div style=\"font-family: Montserrat, sans-serif;\">Thanks For joining us.<br></div><div style=\"font-family: Montserrat, sans-serif;\">Please use the below code to verify your email address.<br></div><div style=\"font-family: Montserrat, sans-serif;\"><br></div><div style=\"font-family: Montserrat, sans-serif;\">Your email verification code is:<font size=\"6\"><span style=\"font-weight: bolder;\">&nbsp;{{code}}</span></font></div></div>', '---', '{\"code\":\"Email verification code\"}', 0, 0, '2021-11-03 12:00:00', '2022-04-03 02:32:07'),
(11, 'SVER_CODE', 'Verification - SMS', 'Verify Your Mobile Number', '---', 'Your phone verification code is: {{code}}', '{\"code\":\"SMS Verification Code\"}', 0, 1, '2021-11-03 12:00:00', '2022-03-20 19:24:37'),
(12, 'WITHDRAW_APPROVE', 'Withdraw - Approved', 'Withdraw Request has been Processed and your money is sent', '<div style=\"font-family: Montserrat, sans-serif;\">Your withdraw request of&nbsp;<span style=\"font-weight: bolder;\">{{amount}} {{site_currency}}</span>&nbsp; via&nbsp;&nbsp;<span style=\"font-weight: bolder;\">{{method_name}}&nbsp;</span>has been Processed Successfully.<span style=\"font-weight: bolder;\"><br></span></div><div style=\"font-family: Montserrat, sans-serif;\"><span style=\"font-weight: bolder;\"><br></span></div><div style=\"font-family: Montserrat, sans-serif;\"><span style=\"font-weight: bolder;\">Details of your withdraw:<br></span></div><div style=\"font-family: Montserrat, sans-serif;\"><br></div><div style=\"font-family: Montserrat, sans-serif;\">Amount : {{amount}} {{site_currency}}</div><div style=\"font-family: Montserrat, sans-serif;\">Charge:&nbsp;<font color=\"#FF0000\">{{charge}} {{site_currency}}</font></div><div style=\"font-family: Montserrat, sans-serif;\"><br></div><div style=\"font-family: Montserrat, sans-serif;\">Conversion Rate : 1 {{site_currency}} = {{rate}} {{method_currency}}</div><div style=\"font-family: Montserrat, sans-serif;\">You will get: {{method_amount}} {{method_currency}}<br></div><div style=\"font-family: Montserrat, sans-serif;\">Via :&nbsp; {{method_name}}</div><div style=\"font-family: Montserrat, sans-serif;\"><br></div><div style=\"font-family: Montserrat, sans-serif;\">Transaction Number : {{trx}}</div><div style=\"font-family: Montserrat, sans-serif;\"><br></div><div style=\"font-family: Montserrat, sans-serif;\">-----</div><div style=\"font-family: Montserrat, sans-serif;\"><br></div><div style=\"font-family: Montserrat, sans-serif;\"><font size=\"4\">Details of Processed Payment :</font></div><div style=\"font-family: Montserrat, sans-serif;\"><font size=\"4\"><span style=\"font-weight: bolder;\">{{admin_details}}</span></font></div>', 'Admin Approve Your {{amount}} {{site_currency}} withdraw request by {{method_name}}. Transaction {{trx}}', '{\"trx\":\"Transaction number for the withdraw\",\"amount\":\"Amount requested by the user\",\"charge\":\"Gateway charge set by the admin\",\"rate\":\"Conversion rate between base currency and method currency\",\"method_name\":\"Name of the withdraw method\",\"method_currency\":\"Currency of the withdraw method\",\"method_amount\":\"Amount after conversion between base currency and method currency\",\"admin_details\":\"Details provided by the admin\"}', 0, 1, '2021-11-03 12:00:00', '2022-03-20 20:50:16'),
(13, 'WITHDRAW_REJECT', 'Withdraw - Rejected', 'Withdraw Request has been Rejected and your money is refunded to your account', '<div style=\"font-family: Montserrat, sans-serif;\">Your withdraw request of&nbsp;<span style=\"font-weight: bolder;\">{{amount}} {{site_currency}}</span>&nbsp; via&nbsp;&nbsp;<span style=\"font-weight: bolder;\">{{method_name}}&nbsp;</span>has been Rejected.<span style=\"font-weight: bolder;\"><br></span></div><div style=\"font-family: Montserrat, sans-serif;\"><span style=\"font-weight: bolder;\"><br></span></div><div style=\"font-family: Montserrat, sans-serif;\"><span style=\"font-weight: bolder;\">Details of your withdraw:<br></span></div><div style=\"font-family: Montserrat, sans-serif;\"><br></div><div style=\"font-family: Montserrat, sans-serif;\">Amount : {{amount}} {{site_currency}}</div><div style=\"font-family: Montserrat, sans-serif;\">Charge:&nbsp;<font color=\"#FF0000\">{{charge}} {{site_currency}}</font></div><div style=\"font-family: Montserrat, sans-serif;\"><br></div><div style=\"font-family: Montserrat, sans-serif;\">Conversion Rate : 1 {{site_currency}} = {{rate}} {{method_currency}}</div><div style=\"font-family: Montserrat, sans-serif;\">You should get: {{method_amount}} {{method_currency}}<br></div><div style=\"font-family: Montserrat, sans-serif;\">Via :&nbsp; {{method_name}}</div><div style=\"font-family: Montserrat, sans-serif;\"><br></div><div style=\"font-family: Montserrat, sans-serif;\">Transaction Number : {{trx}}</div><div style=\"font-family: Montserrat, sans-serif;\"><br></div><div style=\"font-family: Montserrat, sans-serif;\"><br></div><div style=\"font-family: Montserrat, sans-serif;\">----</div><div style=\"font-family: Montserrat, sans-serif;\"><font size=\"3\"><br></font></div><div style=\"font-family: Montserrat, sans-serif;\"><font size=\"3\">{{amount}} {{currency}} has been&nbsp;<span style=\"font-weight: bolder;\">refunded&nbsp;</span>to your account and your current Balance is&nbsp;<span style=\"font-weight: bolder;\">{{post_balance}}</span><span style=\"font-weight: bolder;\">&nbsp;{{site_currency}}</span></font></div><div style=\"font-family: Montserrat, sans-serif;\"><br></div><div style=\"font-family: Montserrat, sans-serif;\">-----</div><div style=\"font-family: Montserrat, sans-serif;\"><br></div><div style=\"font-family: Montserrat, sans-serif;\"><font size=\"4\">Details of Rejection :</font></div><div style=\"font-family: Montserrat, sans-serif;\"><font size=\"4\"><span style=\"font-weight: bolder;\">{{admin_details}}</span></font></div><div style=\"font-family: Montserrat, sans-serif;\"><br></div><div style=\"font-family: Montserrat, sans-serif;\"><br><br><br><br><br></div><div></div><div></div>', 'Admin Rejected Your {{amount}} {{site_currency}} withdraw request. Your Main Balance {{post_balance}}  {{method_name}} , Transaction {{trx}}', '{\"trx\":\"Transaction number for the withdraw\",\"amount\":\"Amount requested by the user\",\"charge\":\"Gateway charge set by the admin\",\"rate\":\"Conversion rate between base currency and method currency\",\"method_name\":\"Name of the withdraw method\",\"method_currency\":\"Currency of the withdraw method\",\"method_amount\":\"Amount after conversion between base currency and method currency\",\"post_balance\":\"Balance of the user after fter this action\",\"admin_details\":\"Rejection message by the admin\"}', 0, 1, '2021-11-03 12:00:00', '2022-03-20 20:57:46'),
(14, 'WITHDRAW_REQUEST', 'Withdraw - Requested', 'Withdraw Request Submitted Successfully', '<div style=\"font-family: Montserrat, sans-serif;\">Your withdraw request of&nbsp;<span style=\"font-weight: bolder;\">{{amount}} {{site_currency}}</span>&nbsp; via&nbsp;&nbsp;<span style=\"font-weight: bolder;\">{{method_name}}&nbsp;</span>has been submitted Successfully.<span style=\"font-weight: bolder;\"><br></span></div><div style=\"font-family: Montserrat, sans-serif;\"><span style=\"font-weight: bolder;\"><br></span></div><div style=\"font-family: Montserrat, sans-serif;\"><span style=\"font-weight: bolder;\">Details of your withdraw:<br></span></div><div style=\"font-family: Montserrat, sans-serif;\"><br></div><div style=\"font-family: Montserrat, sans-serif;\">Amount : {{amount}} {{site_currency}}</div><div style=\"font-family: Montserrat, sans-serif;\">Charge:&nbsp;<font color=\"#FF0000\">{{charge}} {{site_currency}}</font></div><div style=\"font-family: Montserrat, sans-serif;\"><br></div><div style=\"font-family: Montserrat, sans-serif;\">Conversion Rate : 1 {{site_currency}} = {{rate}} {{method_currency}}</div><div style=\"font-family: Montserrat, sans-serif;\">You will get: {{method_amount}} {{method_currency}}<br></div><div style=\"font-family: Montserrat, sans-serif;\">Via :&nbsp; {{method_name}}</div><div style=\"font-family: Montserrat, sans-serif;\"><br></div><div style=\"font-family: Montserrat, sans-serif;\">Transaction Number : {{trx}}</div><div style=\"font-family: Montserrat, sans-serif;\"><br></div><div style=\"font-family: Montserrat, sans-serif;\"><br></div><div style=\"font-family: Montserrat, sans-serif;\"><font size=\"5\">Your current Balance is&nbsp;<span style=\"font-weight: bolder;\">{{post_balance}} {{site_currency}}</span></font></div><div style=\"font-family: Montserrat, sans-serif;\"><br></div><div style=\"font-family: Montserrat, sans-serif;\"><br><br><br></div>', '{{amount}} {{site_currency}} withdraw requested by {{method_name}}. You will get {{method_amount}} {{method_currency}} Trx: {{trx}}', '{\"trx\":\"Transaction number for the withdraw\",\"amount\":\"Amount requested by the user\",\"charge\":\"Gateway charge set by the admin\",\"rate\":\"Conversion rate between base currency and method currency\",\"method_name\":\"Name of the withdraw method\",\"method_currency\":\"Currency of the withdraw method\",\"method_amount\":\"Amount after conversion between base currency and method currency\",\"post_balance\":\"Balance of the user after fter this transaction\"}', 0, 1, '2021-11-03 12:00:00', '2022-03-21 04:39:03'),
(15, 'DEFAULT', 'Default Template', '{{subject}}', '{{message}}', '{{message}}', '{\"subject\":\"Subject\",\"message\":\"Message\"}', 0, 1, '2019-09-14 13:14:22', '2021-11-04 09:38:55'),
(16, 'KYC_APPROVE', 'KYC Approved', 'KYC has been approved', NULL, NULL, '[]', 0, 1, NULL, NULL),
(17, 'KYC_REJECT', 'KYC Rejected Successfully', 'KYC has been rejected', NULL, NULL, '[]', 0, 1, NULL, NULL),
(19, 'BALANCE_TRANSFER', 'Balance Transfer', 'Balance Transfer', 'You\'ve sent {{amount}} {{site_currency}} to {{receiver}}. The transaction number was #{{trx}}. Your current balance is {{post_balance}} {{site_currency}}', 'You\'ve sent {{amount}} {{site_currency}} to {{receiver}}. The transaction number was #{{trx}}. Your current balance is {{post_balance}} {{site_currency}}', '{\"amount\":\"Amount\",\"trx\":\"Transaction Number\",\"charge\":\"Charge\",\"afterCharge\":\"After Charge\",\"post_balance\":\"Post Balance\",\"receiver\":\"Receiver\"}', 0, 1, NULL, '2022-04-28 02:55:03'),
(20, 'BALANCE_RECEIVE', 'Balance Receive', 'Balance Receive', 'You\'ve received {{amount}} {{site_currency}} from {{sender}}. The transaction number is #{{trx}}', 'You\'ve received {{amount}} {{site_currency}} from {{sender}}. The transaction number is #{{trx}}', '{\"amount\":\"Amount\",\"trx\":\"Transaction Number\",\"post_balance\":\"Post Balance\",\"sender\":\"Sender\"}', 0, 1, NULL, '2022-04-28 02:53:33'),
(21, 'REFERRAL_COMMISSION', 'Referral Commission', 'Referral commission got successfully', 'You have got {{amount}} {{site_currency}} referral commission as {{level}} position for {{type}} of your referral. Your current balance is {{post_balance}} {{site_currency}} and the transaction number is {{trx}}', 'You have got {{amount}} {{currency_symbol}} referral commission as {{level}} position for {{type}} of your referral. Your current balance is {{post_balance}} {{currency_symbol}} and the transaction number is {{trx}}', '{\"amount\":\"Amount of commission\",\"post_balance\":\"Balance after commission\",\"trx\":\"Transaction number\",\"level\":\"Level of referral\",\"type\":\"Type of commission\"}', 0, 0, NULL, '2022-04-28 03:02:43'),
(22, 'BUY_PLAN', 'Subscribed Plan', 'You\'ve subscribed successfully', 'You\'ve subscribed to {{plan_name}} plan. The price {{amount}} {{currency}}. The transaction number is #{{trx}}. Your current is {{post_balance}} {{currency}}', 'You\'ve subscribed to {{plan_name}} plan. The price {{amount}} {{currency}}. The transaction number is #{{trx}}. Your current is {{post_balance}} {{currency}}', '{\"amount\":\"Price of the plan\",\"plan_name\":\"Name of plan\",\"trx\":\"Transaction number\",\"post_balance\":\"Balance after transactions\"}', 0, 1, NULL, '2022-01-12 23:20:41'),
(23, 'PTC_APPROVE', 'PTC Approved', 'PTC Advertisement Approved', 'Your ad {{title}} has been approved successfully. There are {{quantity}} click is available for this ad. The duration was&nbsp; {{duration}} seconds', 'Your ad {{title}} has been approved successfully. There are {{quantity}} click is available for this ad. The duration was  {{duration}} seconds', '{\"title\":\"PTC title\",\"quantity\":\"PTC quantity\",\"duration\":\"PTC duration\"}', 0, 1, NULL, '2022-05-09 04:10:03'),
(24, 'PTC_REJECT', 'PTC Rejected', 'PTC Advertisement Rejected', 'Your ad {{title}} has been rejected. Your ad quantity was {{quantity}}. and duration was {{duration}} seconds. You\'ve got back {{back_amount}} {{site_currency}} after rejection. Your current balance is {{post_balance}} {{site_currencuy}}.The transaction number was {{trx}}', 'Your ad {{title}} has been rejected. Your ad quantity was {{quantity}}. and duration was {{duration}} seconds. You\'ve got back {{back_amount}} {{site_currency}} after rejection. Your current balance is {{post_balance}} {{site_currencuy}}.The transaction number was {{trx}}', '{\"title\":\"PTC title\",\"quantity\":\"PTC quantity\",\"duration\":\"PTC duration\",\"back_amount\":\"Backed amount after rejection\",\"trx\":\"Transaction number\",\"post_balance\":\"Balance after transaction\"}', 0, 1, NULL, '2022-05-09 04:09:35');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempname` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'template name',
  `secs` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_default` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `slug`, `tempname`, `secs`, `is_default`, `created_at`, `updated_at`) VALUES
(1, 'HOME', '/', 'templates.basic.', '[\"about\",\"features\",\"plan\",\"counter\",\"faq\",\"testimonial\",\"blog\"]', 1, '2020-07-11 06:23:58', '2022-04-23 08:01:20'),
(4, 'Blog', 'blog', 'templates.basic.', NULL, 1, '2020-10-22 01:14:43', '2020-10-22 01:14:43'),
(5, 'Contact', 'contact', 'templates.basic.', NULL, 1, '2020-10-22 01:14:53', '2020-10-22 01:14:53'),
(19, 'About', 'about-us', 'templates.basic.', '[\"about\"]', 0, '2022-05-08 03:18:46', '2023-08-10 17:34:31'),
(20, 'HOME', '/', 'templates.ptc_diamond.', '[\"brand\",\"about\",\"features\",\"faq\",\"plan\",\"counter\",\"testimonial\",\"blog\"]', 1, NULL, '2022-10-30 03:04:45'),
(21, 'Blog', 'blog', 'templates.ptc_diamond.', NULL, 1, NULL, NULL),
(22, 'Contact', 'contact', 'templates.ptc_diamond.', NULL, 1, NULL, NULL),
(23, 'About', 'about', 'templates.ptc_diamond.', '[\"about\",\"testimonial\",\"faq\"]', 0, '2022-10-20 02:38:45', '2022-10-22 03:27:58'),
(24, 'Plans', 'plans', 'templates.ptc_diamond.', '[\"faq\"]', 1, NULL, '2022-10-30 03:08:45'),
(25, 'Plans', 'plans', 'templates.basic.', '[\"counter\"]', 1, NULL, '2022-10-30 04:44:44');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('01865601138@gmail.com', '898295', '2023-10-23 20:33:54');

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
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(28,8) NOT NULL DEFAULT 0.00000000,
  `daily_limit` int(11) NOT NULL DEFAULT 0,
  `daily_profit` decimal(28,2) DEFAULT 0.00,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `ref_level` int(11) NOT NULL DEFAULT 0,
  `validity` int(11) NOT NULL DEFAULT 0,
  `tagline` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `highlight` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `name`, `image`, `price`, `daily_limit`, `daily_profit`, `status`, `ref_level`, `validity`, `tagline`, `highlight`, `created_at`, `updated_at`) VALUES
(1, 'VIP 1', '655b44c38bc811700480195.jpeg', '50.00000000', 1, '8.00', 1, 0, 10, 'new', 1, '2023-08-10 15:08:34', '2023-11-20 22:36:35'),
(2, 'VIP 2', '655b41ee5e9dd1700479470.jpeg', '100.00000000', 1, '10.00', 1, 1, 10, 'popular', 1, '2023-08-10 15:10:21', '2023-11-20 22:24:30'),
(3, 'VIP 3', '655b423368ee11700479539.jpeg', '200.00000000', 1, '20.00', 1, 3, 20, NULL, 0, '2023-09-08 18:15:14', '2023-11-20 22:25:39'),
(4, 'HOT BIKE', '65314f3f84dde1697730367.jpeg', '500.00000000', 1, '100.00', 0, 3, 7, NULL, 0, '2023-10-19 15:46:07', '2023-10-19 15:48:30'),
(5, 'HBP', '6534d4c3208461697961155.png', '200.00000000', 1, '100.00', 0, 3, 3, NULL, 0, '2023-10-22 07:52:35', '2023-10-22 07:57:45');

-- --------------------------------------------------------

--
-- Table structure for table `ptcs`
--

CREATE TABLE `ptcs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` tinyint(4) NOT NULL DEFAULT 0,
  `ads_type` tinyint(1) NOT NULL DEFAULT 0 COMMENT '1 = link | 2 = image | 3 = script',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ads_body` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` decimal(28,8) NOT NULL DEFAULT 0.00000000,
  `duration` int(11) NOT NULL DEFAULT 0,
  `max_show` int(11) NOT NULL DEFAULT 0,
  `showed` int(11) NOT NULL DEFAULT 0,
  `remain` int(11) NOT NULL DEFAULT 0,
  `reject_reason` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `schedule` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0 = inactive, 1 = active, 2 = pending, 3 = rejected',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ptc_engagements`
--

CREATE TABLE `ptc_engagements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ptc_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `click` datetime DEFAULT NULL,
  `confirm` datetime DEFAULT NULL,
  `duration` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ptc_reports`
--

CREATE TABLE `ptc_reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ptc_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `ptc_report_type_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `description` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ptc_report_types`
--

CREATE TABLE `ptc_report_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(40) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ptc_views`
--

CREATE TABLE `ptc_views` (
  `id` bigint(20) NOT NULL,
  `ptc_id` int(11) DEFAULT 0,
  `user_id` int(11) DEFAULT 0,
  `view_date` date DEFAULT NULL,
  `amount` decimal(28,8) DEFAULT 0.00000000,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `referrals`
--

CREATE TABLE `referrals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `level` int(11) NOT NULL,
  `percent` decimal(11,2) NOT NULL DEFAULT 0.00,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `commission_type` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `referrals`
--

INSERT INTO `referrals` (`id`, `level`, `percent`, `status`, `commission_type`, `created_at`, `updated_at`) VALUES
(1, 1, '10.00', 0, 'plan_subscribe_commission', '2023-11-20 22:23:55', '2023-11-20 22:23:55'),
(2, 2, '6.00', 0, 'plan_subscribe_commission', '2023-11-20 22:23:55', '2023-11-20 22:23:55'),
(3, 3, '3.00', 0, 'plan_subscribe_commission', '2023-11-20 22:23:55', '2023-11-20 22:23:55');

-- --------------------------------------------------------

--
-- Table structure for table `runing_plans`
--

CREATE TABLE `runing_plans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `plan_id` int(11) DEFAULT NULL,
  `amount` decimal(28,8) DEFAULT NULL,
  `daily_profit` decimal(28,2) DEFAULT 0.00,
  `validity` date DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL COMMENT '1=>Runing, 0=>Expire	',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `runing_plans`
--

INSERT INTO `runing_plans` (`id`, `user_id`, `plan_id`, `amount`, `daily_profit`, `validity`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, 1, '50.00000000', '8.00', '2023-11-30', 1, '2023-11-20 23:00:37', '2023-11-20 23:00:37'),
(2, 27, 1, '50.00000000', '8.00', '2024-07-21', 1, '2024-07-11 20:02:26', '2024-07-11 20:02:26'),
(3, 27, 2, '100.00000000', '10.00', '2024-07-21', 1, '2024-07-11 20:02:30', '2024-07-11 20:02:30'),
(4, 27, 2, '100.00000000', '10.00', '2024-07-21', 1, '2024-07-11 20:02:51', '2024-07-11 20:02:51'),
(5, 27, 3, '200.00000000', '20.00', '2024-07-31', 1, '2024-07-11 20:02:54', '2024-07-11 20:02:54'),
(6, 27, 3, '200.00000000', '20.00', '2024-07-31', 1, '2024-07-11 20:04:23', '2024-07-11 20:04:23');

-- --------------------------------------------------------

--
-- Table structure for table `support_attachments`
--

CREATE TABLE `support_attachments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `support_message_id` int(10) UNSIGNED DEFAULT NULL,
  `attachment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `support_messages`
--

CREATE TABLE `support_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `support_ticket_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `admin_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `message` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `support_tickets`
--

CREATE TABLE `support_tickets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT 0,
  `name` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ticket` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0: Open, 1: Answered, 2: Replied, 3: Closed',
  `priority` tinyint(1) NOT NULL DEFAULT 0 COMMENT '1 = Low, 2 = medium, 3 = heigh',
  `last_reply` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `amount` decimal(28,8) NOT NULL DEFAULT 0.00000000,
  `charge` decimal(28,8) NOT NULL DEFAULT 0.00000000,
  `post_balance` decimal(28,8) NOT NULL DEFAULT 0.00000000,
  `trx_type` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trx` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `user_id`, `amount`, `charge`, `post_balance`, `trx_type`, `trx`, `details`, `remark`, `created_at`, `updated_at`) VALUES
(1, 1, '0.00000000', '0.00000000', '0.00000000', '+', 'ANOECSD26COV', 'Earn amount from Mining', 'mining', '2023-11-20 22:21:07', '2023-11-20 22:21:07'),
(2, 3, '0.00000000', '0.00000000', '0.00000000', '+', 'B1H2KAVB62SH', 'Earn amount from Mining', 'mining', '2023-11-20 22:29:51', '2023-11-20 22:29:51'),
(3, 3, '1008.00000000', '0.00000000', '1008.00000000', '+', 'PTKS6QHUKDGN', 'Hi', 'balance_add', '2023-11-20 22:59:23', '2023-11-20 22:59:23'),
(4, 3, '50.00000000', '0.00000000', '958.00000000', '-', '8G1UQTGJXSNR', 'Subscribe VIP 1 Plan', 'subscribe_plan', '2023-11-20 23:00:37', '2023-11-20 23:00:37'),
(5, 1, '5.00000000', '0.00000000', '5.00000000', '+', '8G1UQTGJXSNR', '1st level referral commission from 7894561205', 'referral_commission', '2023-11-20 23:00:37', NULL),
(6, 7, '0.00000000', '0.00000000', '0.00000000', '+', '8E4XBYK5SRJ9', 'Earn amount from Mining', 'mining', '2023-11-20 23:10:27', '2023-11-20 23:10:27'),
(7, 8, '0.00000000', '0.00000000', '0.00000000', '+', 'AANF5MMORQSZ', 'Earn amount from Mining', 'mining', '2023-11-20 23:11:58', '2023-11-20 23:11:58'),
(8, 9, '0.00000000', '0.00000000', '0.00000000', '+', 'CE1K2RVDUJZ4', 'Earn amount from Mining', 'mining', '2023-11-20 23:12:16', '2023-11-20 23:12:16'),
(9, 10, '0.00000000', '0.00000000', '0.00000000', '+', 'YEOC8AV76ST7', 'Earn amount from Mining', 'mining', '2023-11-20 23:12:18', '2023-11-20 23:12:18'),
(10, 5, '0.00000000', '0.00000000', '0.00000000', '+', '4FUT94T35HMY', 'Earn amount from Mining', 'mining', '2023-11-20 23:13:13', '2023-11-20 23:13:13'),
(11, 12, '0.00000000', '0.00000000', '0.00000000', '+', 'EY214M7P9NQW', 'Earn amount from Mining', 'mining', '2023-11-20 23:16:26', '2023-11-20 23:16:26'),
(12, 13, '0.00000000', '0.00000000', '0.00000000', '+', '1U94SXAUGW2M', 'Earn amount from Mining', 'mining', '2023-11-20 23:16:45', '2023-11-20 23:16:45'),
(13, 15, '0.00000000', '0.00000000', '0.00000000', '+', '4GDQ6KCUPPUY', 'Earn amount from Mining', 'mining', '2023-11-20 23:17:55', '2023-11-20 23:17:55'),
(14, 14, '0.00000000', '0.00000000', '0.00000000', '+', '6SWEWPY49FOM', 'Earn amount from Mining', 'mining', '2023-11-20 23:18:32', '2023-11-20 23:18:32'),
(15, 17, '0.00000000', '0.00000000', '0.00000000', '+', '5DUF3QHUHSAW', 'Earn amount from Mining', 'mining', '2023-11-20 23:19:33', '2023-11-20 23:19:33'),
(16, 18, '0.00000000', '0.00000000', '0.00000000', '+', 'RNX41TT8SUJP', 'Earn amount from Mining', 'mining', '2023-11-20 23:21:16', '2023-11-20 23:21:16'),
(17, 14, '5000.00000000', '0.00000000', '5000.00000000', '+', 'NQBPWQQVP97H', 'Deposit Via USDT', 'deposit', '2023-11-20 23:26:17', '2023-11-20 23:26:17'),
(18, 19, '0.00000000', '0.00000000', '0.00000000', '+', 'MYW9JOENG1S4', 'Earn amount from Mining', 'mining', '2023-11-20 23:27:22', '2023-11-20 23:27:22'),
(19, 26, '0.00000000', '0.00000000', '0.00000000', '+', 'HH8X1XWMUHON', 'Earn amount from Mining', 'mining', '2023-11-20 23:48:04', '2023-11-20 23:48:04'),
(20, 27, '0.00000000', '0.00000000', '0.00000000', '+', 'ROTA8882VKUS', 'Earn amount from Mining', 'mining', '2024-07-11 19:03:28', '2024-07-11 19:03:28'),
(21, 27, '1000.00000000', '0.00000000', '1000.00000000', '+', 'M2699E5EPOJR', 'Deposit Via Binance', 'deposit', '2024-07-11 20:02:10', '2024-07-11 20:02:10'),
(22, 27, '50.00000000', '0.00000000', '950.00000000', '-', 'PJ3D7SQTRARA', 'Subscribe VIP 1 Plan', 'subscribe_plan', '2024-07-11 20:02:26', '2024-07-11 20:02:26'),
(23, 27, '100.00000000', '0.00000000', '850.00000000', '-', 'VKN12TXO8G7Q', 'Subscribe VIP 2 Plan', 'subscribe_plan', '2024-07-11 20:02:30', '2024-07-11 20:02:30'),
(24, 27, '100.00000000', '0.00000000', '750.00000000', '-', 'KMG66HRJK3QN', 'Subscribe VIP 2 Plan', 'subscribe_plan', '2024-07-11 20:02:51', '2024-07-11 20:02:51'),
(25, 27, '200.00000000', '0.00000000', '550.00000000', '-', 'PCSZF13R319J', 'Subscribe VIP 3 Plan', 'subscribe_plan', '2024-07-11 20:02:54', '2024-07-11 20:02:54'),
(26, 27, '200.00000000', '0.00000000', '350.00000000', '-', 'N4MUUVH1DAWE', 'Subscribe VIP 3 Plan', 'subscribe_plan', '2024-07-11 20:04:23', '2024-07-11 20:04:23'),
(27, 30, '0.00000000', '0.00000000', '0.00000000', '+', '2EA1679NJDO6', 'Earn amount from Mining', 'mining', '2024-07-11 20:49:30', '2024-07-11 20:49:30'),
(28, 33, '0.00000000', '0.00000000', '0.00000000', '+', 'W2Q2CSU7E5E1', 'Earn amount from Mining', 'mining', '2024-07-11 21:11:33', '2024-07-11 21:11:33');

-- --------------------------------------------------------

--
-- Table structure for table `update_logs`
--

CREATE TABLE `update_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `update_log` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `plan_id` int(11) NOT NULL DEFAULT 0,
  `ref_by` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `daily_limit` int(11) NOT NULL DEFAULT 0,
  `isCollect` tinyint(4) DEFAULT 0,
  `collect_date` date DEFAULT NULL,
  `bank_card` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstname` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fund_pass` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_code` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `balance` decimal(28,8) NOT NULL DEFAULT 0.00000000,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'contains full address',
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0: banned, 1: active',
  `kyc_data` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kv` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0: KYC Unverified, 2: KYC pending, 1: KYC verified',
  `ev` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0: email unverified, 1: email verified',
  `sv` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0: mobile unverified, 1: mobile verified',
  `profile_complete` tinyint(1) NOT NULL DEFAULT 0,
  `ver_code` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'stores verification code',
  `ver_code_send_at` datetime DEFAULT NULL COMMENT 'verification send time',
  `ts` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0: 2fa off, 1: 2fa on',
  `tv` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0: 2fa unverified, 1: 2fa verified',
  `tsc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ban_reason` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expire_date` datetime DEFAULT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_logins`
--

CREATE TABLE `user_logins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `user_ip` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_code` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longitude` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `browser` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `os` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_logins`
--

INSERT INTO `user_logins` (`id`, `user_id`, `user_ip`, `city`, `country`, `country_code`, `longitude`, `latitude`, `browser`, `os`, `created_at`, `updated_at`) VALUES
(1, 1, '103.111.226.42', '', 'Bangladesh', 'BD', '90.3742', '23.7018', 'Handheld Browser', 'Android', '2023-11-20 22:08:41', '2023-11-20 22:08:41'),
(2, 2, '154.80.126.254', 'Johannesburg', 'South Africa', 'ZA', '27.8376', '-26.3811', 'Handheld Browser', 'Android', '2023-11-20 22:27:11', '2023-11-20 22:27:11'),
(3, 3, '49.36.232.86', 'Jaipur', 'India', 'IN', '75.7105', '26.9525', 'Handheld Browser', 'Android', '2023-11-20 22:28:46', '2023-11-20 22:28:46'),
(4, 4, '154.80.94.150', 'Johannesburg', 'South Africa', 'ZA', '27.8376', '-26.3811', 'Handheld Browser', 'Android', '2023-11-20 23:08:54', '2023-11-20 23:08:54'),
(5, 5, '103.76.154.9', '', '', '', '', '', 'Handheld Browser', 'Android', '2023-11-20 23:09:13', '2023-11-20 23:09:13'),
(6, 6, '105.112.11.207', 'Kano', 'Nigeria', 'NG', '8.5173', '11.9924', 'Handheld Browser', 'iPhone', '2023-11-20 23:09:38', '2023-11-20 23:09:38'),
(7, 7, '156.219.175.169', 'Cairo', 'Egypt', 'EG', '31.2268', '30.0588', 'Handheld Browser', 'Android', '2023-11-20 23:09:57', '2023-11-20 23:09:57'),
(8, 8, '103.139.19.115', 'Gazipur', 'Bangladesh', 'BD', '88.9528', '24.3334', 'Handheld Browser', 'Android', '2023-11-20 23:10:14', '2023-11-20 23:10:14'),
(9, 9, '103.10.66.8', 'Jakarta', 'Indonesia', 'ID', '106.8446', '-6.2114', 'Handheld Browser', 'Android', '2023-11-20 23:11:16', '2023-11-20 23:11:16'),
(10, 10, '102.91.46.26', '', 'Nigeria', 'NG', '8', '10', 'Handheld Browser', 'Android', '2023-11-20 23:12:01', '2023-11-20 23:12:01'),
(11, 11, '202.67.40.231', 'Surabaya', 'Indonesia', 'ID', '112.7419', '-7.2484', 'Handheld Browser', 'Android', '2023-11-20 23:12:59', '2023-11-20 23:12:59'),
(12, 12, '82.194.29.59', 'Baku', 'Azerbaijan', 'AZ', '49.8759', '40.3909', 'Handheld Browser', 'Android', '2023-11-20 23:15:28', '2023-11-20 23:15:28'),
(13, 13, '114.79.4.174', 'Jakarta', 'Indonesia', 'ID', '106.8446', '-6.2114', 'Handheld Browser', 'Android', '2023-11-20 23:16:29', '2023-11-20 23:16:29'),
(14, 14, '197.211.58.106', 'Lagos', 'Nigeria', 'NG', '3.3903', '6.4474', 'Handheld Browser', 'Android', '2023-11-20 23:16:43', '2023-11-20 23:16:43'),
(15, 15, '154.188.195.242', 'Cairo', 'Egypt', 'EG', '31.2268', '30.0588', 'Handheld Browser', 'Android', '2023-11-20 23:16:45', '2023-11-20 23:16:45'),
(16, 16, '103.25.251.249', 'Dhaka', 'Bangladesh', 'BD', '90.404', '23.7571', 'Handheld Browser', 'Android', '2023-11-20 23:17:18', '2023-11-20 23:17:18'),
(17, 15, '108.181.27.225', '', 'Canada', 'CA', '-79.3716', '43.6319', 'Handheld Browser', 'Android', '2023-11-20 23:18:46', '2023-11-20 23:18:46'),
(18, 17, '105.112.210.112', '', 'Nigeria', 'NG', '7.067', '6.2132', 'Handheld Browser', 'Android', '2023-11-20 23:19:24', '2023-11-20 23:19:24'),
(19, 18, '120.89.105.8', 'Tulsipur', 'Nepal', 'NP', '82.2981', '28.1347', 'Handheld Browser', 'Android', '2023-11-20 23:20:50', '2023-11-20 23:20:50'),
(20, 15, '88.254.6.246', 'Istanbul', 'Turkey', 'TR', '28.9252', '41.0247', 'Handheld Browser', 'Android', '2023-11-20 23:20:54', '2023-11-20 23:20:54'),
(21, 19, '120.188.75.31', 'Surabaya', 'Indonesia', 'ID', '112.7419', '-7.2484', 'Handheld Browser', 'Android', '2023-11-20 23:22:22', '2023-11-20 23:22:22'),
(22, 15, '120.89.105.8', 'Tulsipur', 'Nepal', 'NP', '82.2981', '28.1347', 'Handheld Browser', 'Android', '2023-11-20 23:23:08', '2023-11-20 23:23:08'),
(23, 20, '108.181.27.225', '', 'Canada', 'CA', '-79.3716', '43.6319', 'Handheld Browser', 'Android', '2023-11-20 23:23:32', '2023-11-20 23:23:32'),
(24, 21, '120.188.75.31', 'Surabaya', 'Indonesia', 'ID', '112.7419', '-7.2484', 'Handheld Browser', 'Android', '2023-11-20 23:23:41', '2023-11-20 23:23:41'),
(25, 22, '120.188.75.31', 'Surabaya', 'Indonesia', 'ID', '112.7419', '-7.2484', 'Handheld Browser', 'Android', '2023-11-20 23:24:39', '2023-11-20 23:24:39'),
(26, 23, '120.188.75.31', 'Surabaya', 'Indonesia', 'ID', '112.7419', '-7.2484', 'Handheld Browser', 'Android', '2023-11-20 23:25:16', '2023-11-20 23:25:16'),
(27, 24, '120.188.75.31', 'Surabaya', 'Indonesia', 'ID', '112.7419', '-7.2484', 'Handheld Browser', 'Android', '2023-11-20 23:26:23', '2023-11-20 23:26:23'),
(28, 25, '120.188.75.31', 'Surabaya', 'Indonesia', 'ID', '112.7419', '-7.2484', 'Handheld Browser', 'Android', '2023-11-20 23:27:01', '2023-11-20 23:27:01'),
(29, 15, '152.58.185.201', 'Lucknow', 'India', 'IN', '80.9115', '26.8756', 'Handheld Browser', 'iPhone', '2023-11-20 23:33:16', '2023-11-20 23:33:16'),
(30, 15, '85.132.57.118', '', 'Azerbaijan', 'AZ', '47.4997', '40.504', 'Handheld Browser', 'Android', '2023-11-20 23:39:24', '2023-11-20 23:39:24'),
(31, 15, '37.155.234.48', 'Ankara', 'Turkey', 'TR', '32.8262', '39.9786', 'Handheld Browser', 'Android', '2023-11-20 23:43:15', '2023-11-20 23:43:15'),
(32, 26, '136.158.60.139', 'Marilao', 'Philippines', 'PH', '120.9493', '14.7585', 'Handheld Browser', 'Android', '2023-11-20 23:47:27', '2023-11-20 23:47:27'),
(33, 27, '154.80.80.116', '', '', '', '', '', 'Handheld Browser', 'Android', '2024-07-11 07:59:46', '2024-07-11 07:59:46'),
(34, 27, '154.80.80.116', '', '', '', '', '', 'Handheld Browser', 'Android', '2024-07-11 09:43:02', '2024-07-11 09:43:02'),
(35, 27, '154.80.80.116', '', '', '', '', '', 'Handheld Browser', 'Android', '2024-07-11 11:25:09', '2024-07-11 11:25:09'),
(36, 27, '154.80.80.116', '', '', '', '', '', 'Handheld Browser', 'Android', '2024-07-11 12:47:11', '2024-07-11 12:47:11'),
(37, 27, '154.80.69.238', '', '', '', '', '', 'Handheld Browser', 'Android', '2024-07-11 18:10:46', '2024-07-11 18:10:46'),
(38, 27, '154.80.69.238', '', '', '', '', '', 'Chrome', 'Windows 10', '2024-07-11 18:13:21', '2024-07-11 18:13:21'),
(39, 28, '202.86.218.218', '', '', '', '', '', 'Handheld Browser', 'Android', '2024-07-11 20:34:31', '2024-07-11 20:34:31'),
(40, 29, '154.81.251.186', '', '', '', '', '', 'Handheld Browser', 'Android', '2024-07-11 20:36:39', '2024-07-11 20:36:39'),
(41, 30, '103.111.226.83', '', '', '', '', '', 'Handheld Browser', 'Android', '2024-07-11 20:47:46', '2024-07-11 20:47:46'),
(42, 27, '217.76.48.55', '', '', '', '', '', 'Handheld Browser', 'Android', '2024-07-11 20:52:29', '2024-07-11 20:52:29'),
(43, 31, '103.106.239.249', '', '', '', '', '', 'Handheld Browser', 'Android', '2024-07-11 20:52:46', '2024-07-11 20:52:46'),
(44, 27, '217.76.48.55', '', '', '', '', '', 'Handheld Browser', 'Android', '2024-07-11 20:54:36', '2024-07-11 20:54:36'),
(45, 27, '154.80.69.238', '', '', '', '', '', 'Chrome', 'Windows 10', '2024-07-11 20:57:18', '2024-07-11 20:57:18'),
(46, 32, '103.198.133.55', '', '', '', '', '', 'Handheld Browser', 'Android', '2024-07-11 21:06:29', '2024-07-11 21:06:29'),
(47, 33, '154.80.69.238', '', '', '', '', '', 'Handheld Browser', 'Android', '2024-07-11 21:10:26', '2024-07-11 21:10:26');

-- --------------------------------------------------------

--
-- Table structure for table `withdrawals`
--

CREATE TABLE `withdrawals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `method_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `amount` decimal(28,8) NOT NULL DEFAULT 0.00000000,
  `currency` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rate` decimal(28,8) NOT NULL DEFAULT 0.00000000,
  `charge` decimal(28,8) NOT NULL DEFAULT 0.00000000,
  `trx` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `final_amount` decimal(28,8) NOT NULL DEFAULT 0.00000000,
  `after_charge` decimal(28,8) NOT NULL DEFAULT 0.00000000,
  `withdraw_information` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '1=>success, 2=>pending, 3=>cancel,  ',
  `admin_feedback` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `withdraw_methods`
--

CREATE TABLE `withdraw_methods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `form_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `name` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `min_limit` decimal(28,8) DEFAULT 0.00000000,
  `max_limit` decimal(28,8) NOT NULL DEFAULT 0.00000000,
  `fixed_charge` decimal(28,8) DEFAULT 0.00000000,
  `rate` decimal(28,8) DEFAULT 0.00000000,
  `percent_charge` decimal(5,2) DEFAULT NULL,
  `currency` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `withdraw_methods`
--

INSERT INTO `withdraw_methods` (`id`, `form_id`, `name`, `min_limit`, `max_limit`, `fixed_charge`, `rate`, `percent_charge`, `currency`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 7, 'USDT', '5.00000000', '500.00000000', '0.00000000', '1.00000000', '0.00', 'USDT', '&nbsp;', 1, '2023-09-30 18:32:10', '2023-11-20 22:50:40'),
(2, 8, 'Nagad', '5.00000000', '5000.00000000', '0.00000000', '1.00000000', '0.00', 'Taka', 'Nagad', 0, '2023-09-30 19:04:51', '2023-11-20 22:51:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`,`username`);

--
-- Indexes for table `admin_notifications`
--
ALTER TABLE `admin_notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_password_resets`
--
ALTER TABLE `admin_password_resets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commission_logs`
--
ALTER TABLE `commission_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deposits`
--
ALTER TABLE `deposits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `extensions`
--
ALTER TABLE `extensions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `frontends`
--
ALTER TABLE `frontends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gateways`
--
ALTER TABLE `gateways`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `gateway_currencies`
--
ALTER TABLE `gateway_currencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_settings`
--
ALTER TABLE `general_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification_logs`
--
ALTER TABLE `notification_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification_templates`
--
ALTER TABLE `notification_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ptcs`
--
ALTER TABLE `ptcs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ptc_engagements`
--
ALTER TABLE `ptc_engagements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ptc_reports`
--
ALTER TABLE `ptc_reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ptc_report_types`
--
ALTER TABLE `ptc_report_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ptc_views`
--
ALTER TABLE `ptc_views`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `referrals`
--
ALTER TABLE `referrals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `runing_plans`
--
ALTER TABLE `runing_plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `support_attachments`
--
ALTER TABLE `support_attachments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `support_messages`
--
ALTER TABLE `support_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `support_tickets`
--
ALTER TABLE `support_tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `update_logs`
--
ALTER TABLE `update_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`,`email`);

--
-- Indexes for table `user_logins`
--
ALTER TABLE `user_logins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `withdrawals`
--
ALTER TABLE `withdrawals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `withdraw_methods`
--
ALTER TABLE `withdraw_methods`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin_notifications`
--
ALTER TABLE `admin_notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `admin_password_resets`
--
ALTER TABLE `admin_password_resets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `commission_logs`
--
ALTER TABLE `commission_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `deposits`
--
ALTER TABLE `deposits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `extensions`
--
ALTER TABLE `extensions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `frontends`
--
ALTER TABLE `frontends`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;

--
-- AUTO_INCREMENT for table `gateways`
--
ALTER TABLE `gateways`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `gateway_currencies`
--
ALTER TABLE `gateway_currencies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `general_settings`
--
ALTER TABLE `general_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notification_logs`
--
ALTER TABLE `notification_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notification_templates`
--
ALTER TABLE `notification_templates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ptcs`
--
ALTER TABLE `ptcs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ptc_engagements`
--
ALTER TABLE `ptc_engagements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `ptc_reports`
--
ALTER TABLE `ptc_reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ptc_report_types`
--
ALTER TABLE `ptc_report_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ptc_views`
--
ALTER TABLE `ptc_views`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `referrals`
--
ALTER TABLE `referrals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `runing_plans`
--
ALTER TABLE `runing_plans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `support_attachments`
--
ALTER TABLE `support_attachments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `support_messages`
--
ALTER TABLE `support_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `support_tickets`
--
ALTER TABLE `support_tickets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `update_logs`
--
ALTER TABLE `update_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `user_logins`
--
ALTER TABLE `user_logins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `withdrawals`
--
ALTER TABLE `withdrawals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `withdraw_methods`
--
ALTER TABLE `withdraw_methods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
