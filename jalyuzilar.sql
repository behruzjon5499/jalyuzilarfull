-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 28, 2020 at 05:38 AM
-- Server version: 10.3.13-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jalyuzilar`
--

-- --------------------------------------------------------

--
-- Table structure for table `abdualiym_cms_articles`
--

CREATE TABLE `abdualiym_cms_articles` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title_0` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content_0` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `content_1` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `content_2` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `content_3` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` int(11) UNSIGNED DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(3) NOT NULL,
  `created_at` int(11) UNSIGNED NOT NULL,
  `updated_at` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `abdualiym_cms_article_categories`
--

CREATE TABLE `abdualiym_cms_article_categories` (
  `id` int(11) NOT NULL,
  `title_0` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description_0` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `description_1` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `description_2` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `description_3` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) UNSIGNED NOT NULL,
  `updated_at` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `abdualiym_cms_menu`
--

CREATE TABLE `abdualiym_cms_menu` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `title_0` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` tinyint(3) NOT NULL,
  `type_helper` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sort` int(11) NOT NULL DEFAULT 1,
  `created_at` int(11) UNSIGNED NOT NULL,
  `updated_at` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `abdualiym_cms_menu`
--

INSERT INTO `abdualiym_cms_menu` (`id`, `parent_id`, `title_0`, `title_1`, `title_2`, `title_3`, `type`, `type_helper`, `sort`, `created_at`, `updated_at`) VALUES
(1, 0, 'Главная', 'Home', 'Bosh sahifa', NULL, 2, '', 1, 1593794313, 1593794313),
(2, 0, 'Gallery', 'Gallery', 'Gallery', NULL, 2, 'site/gallery', 4, 1593794497, 1593794813),
(3, 0, 'Контакт', 'Contacts', 'Bog\'lanish', NULL, 2, 'feedback/create', 7, 1593794549, 1593794772),
(4, 0, 'Новости', 'News', 'Yangiliklar', NULL, 2, 'news/index', 5, 1593794579, 1593794787),
(5, 0, 'Продукты', 'Products', 'Products', NULL, 2, 'products/index', 3, 1593794627, 1593794822),
(6, 0, 'О нас', 'About', 'Biz haqimizda', NULL, 2, 'site/about', 6, 1593794679, 1593794797),
(7, 0, 'Категори', 'Categories', 'Kategoriyalar', NULL, 2, 'categories/index', 2, 1593794757, 1593801216);

-- --------------------------------------------------------

--
-- Table structure for table `abdualiym_cms_pages`
--

CREATE TABLE `abdualiym_cms_pages` (
  `id` int(11) NOT NULL,
  `title_0` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content_0` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `content_1` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `content_2` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `content_3` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) UNSIGNED NOT NULL,
  `updated_at` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `abdualiym_slider_categories`
--

CREATE TABLE `abdualiym_slider_categories` (
  `id` int(11) NOT NULL,
  `common_image` tinyint(1) NOT NULL,
  `common_link` tinyint(1) NOT NULL,
  `common_text` tinyint(1) NOT NULL,
  `use_tags` tinyint(1) NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_0` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description_0` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `description_1` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `description_2` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `description_3` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) UNSIGNED NOT NULL,
  `updated_at` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `abdualiym_slider_categories`
--

INSERT INTO `abdualiym_slider_categories` (`id`, `common_image`, `common_link`, `common_text`, `use_tags`, `slug`, `title_0`, `title_1`, `title_2`, `title_3`, `description_0`, `description_1`, `description_2`, `description_3`, `created_at`, `updated_at`) VALUES
(1, 0, 0, 0, 0, 'homeslider', 'homeslider', 'homeslider', 'homeslider', NULL, '', '', '', NULL, 1593795115, 1593795115),
(2, 0, 0, 0, 0, 'contactslider', 'contactslider', 'contactslider', 'contactslider', NULL, '', '', '', NULL, 1593795191, 1593795191),
(3, 0, 0, 0, 0, 'galleryslider', 'galleryslider', 'galleryslider', 'galleryslider', NULL, '', '', '', NULL, 1593795203, 1593795203),
(4, 0, 0, 0, 0, 'aboutslider', 'aboutslider', 'aboutslider', 'aboutslider', NULL, '', '', '', NULL, 1593795215, 1593795215),
(5, 0, 0, 0, 0, 'newsslider', 'newsslider', 'newsslider', 'newsslider', NULL, '', '', '', NULL, 1593795227, 1593795227),
(6, 0, 0, 0, 0, 'newsviewslider', 'newsviewslider', 'newsviewslider', 'newsviewslider', NULL, '', '', '', NULL, 1593795241, 1593795241),
(7, 0, 0, 0, 0, 'categoriesslider', 'categoriesslider', 'categoriesslider', 'categoriesslider', NULL, '', '', '', NULL, 1593795253, 1593795253),
(8, 0, 0, 0, 0, 'productslider', 'productslider', 'productslider', 'productslider', NULL, '', '', '', NULL, 1593795266, 1593795266),
(9, 1, 1, 1, 0, 'gallery', 'gallery', 'gallery', 'gallery', NULL, '', '', '', NULL, 1593801498, 1593801518),
(10, 1, 1, 1, 0, 'partner', 'partner', 'partner', 'partner', NULL, '', '', '', NULL, 1593839120, 1593839120),
(11, 1, 1, 1, 0, 'costumers', 'costumers', 'costumers', 'costumers', NULL, '', '', '', NULL, 1593839279, 1593839279);

-- --------------------------------------------------------

--
-- Table structure for table `abdualiym_slider_slides`
--

CREATE TABLE `abdualiym_slider_slides` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `active` tinyint(3) NOT NULL,
  `sort` tinyint(3) NOT NULL,
  `photo_0` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo_1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo_2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo_3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link_0` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link_1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link_2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link_3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_0` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content_0` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `content_1` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `content_2` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `content_3` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) UNSIGNED NOT NULL,
  `updated_at` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `abdualiym_slider_slides`
--

INSERT INTO `abdualiym_slider_slides` (`id`, `category_id`, `active`, `sort`, `photo_0`, `photo_1`, `photo_2`, `photo_3`, `link_0`, `link_1`, `link_2`, `link_3`, `title_0`, `title_1`, `title_2`, `title_3`, `content_0`, `content_1`, `content_2`, `content_3`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 'MALAYSIA.jpg', 'korea.jpg', 'ITALY.jpg', NULL, '', '', '', NULL, 'Jalyuzilar ', 'Jalyuzilar ', 'Jalyuzilar ', NULL, 'Jalyuzilar ', 'Jalyuzilar ', 'Jalyuzilar ', NULL, 1593795169, 1594733095),
(3, 2, 1, 1, 'xitoy.jpg', 'xitoy.jpg', 'xitoy.jpg', NULL, '', '', '', NULL, 'Contacts', 'Contacts', 'Contacts', NULL, 'Contacts', 'Contacts', 'Contacts', NULL, 1593798617, 1593798617),
(4, 4, 1, 1, 'MALAYSIA.jpg', 'MALAYSIA.jpg', 'MALAYSIA.jpg', NULL, '', '', '', NULL, 'About', 'About', 'About', NULL, 'About', 'About', 'About', NULL, 1593800942, 1593800942),
(5, 3, 1, 1, 'IRLANDIA.jpg', 'IRLANDIA.jpg', 'IRLANDIA.jpg', NULL, '', '', '', NULL, 'Gallery', 'Gallery', 'Gallery', NULL, 'Gallery', 'Gallery', 'Gallery', NULL, 1593801070, 1593801070),
(6, 8, 1, 1, 'singa[ur.jpg', 'singa[ur.jpg', 'singa[ur.jpg', NULL, '', '', '', NULL, 'Products', 'Products', 'Products', NULL, 'Products', 'Products', 'Products', NULL, 1593801292, 1593801292),
(7, 9, 1, 1, 'images (10).jpg', NULL, NULL, NULL, '', NULL, NULL, NULL, 'Gallery', NULL, NULL, NULL, 'gallery', NULL, NULL, NULL, 1593801535, 1593834218),
(8, 9, 1, 2, 'images (4).jpg', NULL, NULL, NULL, '', NULL, NULL, NULL, 'Gallery', NULL, NULL, NULL, 'Gallery', NULL, NULL, NULL, 1593806751, 1593806751),
(9, 9, 1, 3, 'images (3).jpg', NULL, NULL, NULL, '', NULL, NULL, NULL, 'Gallery', NULL, NULL, NULL, 'Gallery', NULL, NULL, NULL, 1593806765, 1593806765),
(10, 9, 1, 4, 'images (5).jpg', NULL, NULL, NULL, '', NULL, NULL, NULL, 'Gallery', NULL, NULL, NULL, 'Gallery', NULL, NULL, NULL, 1593834120, 1593834120),
(11, 9, 1, 5, 'images (3).jpg', NULL, NULL, NULL, '', NULL, NULL, NULL, 'Gallery', NULL, NULL, NULL, 'Gallery', NULL, NULL, NULL, 1593834137, 1593834137),
(12, 9, 1, 6, 'images (2).jpg', NULL, NULL, NULL, '', NULL, NULL, NULL, 'Gallery', NULL, NULL, NULL, 'Gallery', NULL, NULL, NULL, 1593834157, 1593834157),
(13, 9, 1, 7, 'images (1).jpg', NULL, NULL, NULL, '', NULL, NULL, NULL, 'Gallery', NULL, NULL, NULL, 'Gallery', NULL, NULL, NULL, 1593834171, 1593834171),
(14, 9, 1, 8, '35136788_1_261x203_zamonaviy-jalyuzilar-tashkent_rev004.jpg', NULL, NULL, NULL, '', NULL, NULL, NULL, 'Gallery', NULL, NULL, NULL, 'Gallery', NULL, NULL, NULL, 1593834188, 1593834188),
(15, 9, 1, 9, '36309018_1_261x203_zhalyuzi-kombo-decor-combo-sifati-kafolatlangan-jalyuzilar-toshkent_rev010.jpg', NULL, NULL, NULL, '', NULL, NULL, NULL, 'Gallery', NULL, NULL, NULL, 'Gallery', NULL, NULL, NULL, 1593834201, 1593834201),
(16, 9, 1, 10, 'images (4).jpg', NULL, NULL, NULL, '', NULL, NULL, NULL, 'Gallery', NULL, NULL, NULL, 'Gallery', NULL, NULL, NULL, 1593836382, 1593836382),
(17, 9, 1, 11, 'images (8).jpg', NULL, NULL, NULL, '', NULL, NULL, NULL, 'Gallery', NULL, NULL, NULL, 'Gallery', NULL, NULL, NULL, 1593836398, 1593836398),
(18, 9, 1, 12, 'images.jpg', NULL, NULL, NULL, '', NULL, NULL, NULL, 'Gallery', NULL, NULL, NULL, 'Gallery', NULL, NULL, NULL, 1593836411, 1593836411),
(19, 5, 1, 1, 'new.jpg', 'new.jpg', 'new.jpg', NULL, '', '', '', NULL, 'News', 'News', 'News', NULL, 'News', 'News', 'News', NULL, 1593837327, 1593837327),
(20, 6, 1, 1, 'news.jpg', 'news.jpg', 'news.jpg', NULL, '', '', '', NULL, 'News', 'News', 'News', NULL, 'News', 'News', 'News', NULL, 1593837358, 1593837358),
(21, 10, 1, 1, 'gol.jpg', NULL, NULL, NULL, '', NULL, NULL, NULL, 'partner', NULL, NULL, NULL, 'partner', NULL, NULL, NULL, 1593839135, 1593839135),
(22, 10, 1, 2, 'ispania.png', NULL, NULL, NULL, '', NULL, NULL, NULL, 'partner', NULL, NULL, NULL, 'partner', NULL, NULL, NULL, 1593839149, 1593839149),
(23, 10, 1, 3, 'mal.jpg', NULL, NULL, NULL, '', NULL, NULL, NULL, 'partner', NULL, NULL, NULL, 'partner', NULL, NULL, NULL, 1593839163, 1593839163),
(24, 10, 1, 4, 'kana.png', NULL, NULL, NULL, '', NULL, NULL, NULL, 'partner', NULL, NULL, NULL, 'partner', NULL, NULL, NULL, 1593839177, 1593839177),
(25, 10, 1, 5, 'sin.jpg', NULL, NULL, NULL, '', NULL, NULL, NULL, 'partner', NULL, NULL, NULL, 'partner', NULL, NULL, NULL, 1593839199, 1593839199),
(26, 10, 1, 6, 'xiyot.jpg', NULL, NULL, NULL, '', NULL, NULL, NULL, 'partner', NULL, NULL, NULL, 'partner', NULL, NULL, NULL, 1593839215, 1593839215),
(27, 11, 1, 1, 'ddd.jpg', NULL, NULL, NULL, '', NULL, NULL, NULL, 'Textil MCHJ', NULL, NULL, NULL, 'Watch Our Intro Video', NULL, NULL, NULL, 1593839306, 1593839317),
(28, 11, 1, 2, '888.jpg', NULL, NULL, NULL, '', NULL, NULL, NULL, 'Textil MCHJ', NULL, NULL, NULL, 'Watch Our Intro Video', NULL, NULL, NULL, 1593839339, 1593839339),
(29, 7, 1, 1, 'NIDERLANDIA.jpg', 'NIDERLANDIA.jpg', 'NIDERLANDIA.jpg', NULL, '', '', '', NULL, 'Categories', 'Categories', 'Categories', NULL, 'Categories', 'Categories', 'Categories', NULL, 1593841392, 1593841392);

-- --------------------------------------------------------

--
-- Table structure for table `abdualiym_slider_slides_and_tags`
--

CREATE TABLE `abdualiym_slider_slides_and_tags` (
  `slide_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `abdualiym_slider_tags`
--

CREATE TABLE `abdualiym_slider_tags` (
  `id` int(11) NOT NULL,
  `sort` tinyint(3) NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_0` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) UNSIGNED NOT NULL,
  `updated_at` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_assignments`
--

CREATE TABLE `auth_assignments` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_items`
--

CREATE TABLE `auth_items` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` smallint(6) NOT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` blob DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_item_children`
--

CREATE TABLE `auth_item_children` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_rules`
--

CREATE TABLE `auth_rules` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` blob DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `session_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `count` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_id`, `session_id`, `count`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(11, 1, '73qkiacpugbltjgkr8m3ta2di3', '10', NULL, NULL, 1594452903, 1595825589),
(14, 2, '73qkiacpugbltjgkr8m3ta2di3', '20', NULL, NULL, 1595824369, 1595825740);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title_ru` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_uz` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_en` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description_ru` text COLLATE utf8_unicode_ci NOT NULL,
  `description_uz` text COLLATE utf8_unicode_ci NOT NULL,
  `description_en` text COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title_ru`, `title_uz`, `title_en`, `photo`, `description_ru`, `description_uz`, `description_en`, `parent_id`) VALUES
(1, 'combo', 'combo', 'combo', 'AUSTRALIA.png', '<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>\r\n\r\n<p>Vivamus ac ultrices diam, vitae accumsan tellus. Integer sollicitudin vulputate lacus, congue .</p>\r\n', '<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>\r\n\r\n<p>Vivamus ac ultrices diam, vitae accumsan tellus. Integer sollicitudin vulputate lacus, congue .</p>\r\n', '<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>\r\n\r\n<p>Vivamus ac ultrices diam, vitae accumsan tellus. Integer sollicitudin vulputate lacus, congue .</p>\r\n', 1),
(2, 'rollo', 'rollo', 'rollo', '3333.jpg', '<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>\r\n\r\n<p>Vivamus ac ultrices diam, vitae accumsan tellus. Integer sollicitudin vulputate lacus, congue .</p>\r\n\r\n<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>\r\n\r\n<p>Vivamus ac ultrices diam, vitae accumsan tellus. Integer sollicitudin vulputate lacus, congue .</p>\r\n', '<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>\r\n\r\n<p>Vivamus ac ultrices diam, vitae accumsan tellus. Integer sollicitudin vulputate lacus, congue .</p>\r\n', '<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>\r\n\r\n<p>Vivamus ac ultrices diam, vitae accumsan tellus. Integer sollicitudin vulputate lacus, congue .</p>\r\n', 1),
(3, 'rollo', 'rollo', 'rollo', '1.jpg', '<p>rollo</p>\r\n', '<p>rollo</p>\r\n', '<p>rollo</p>\r\n', 1),
(4, 'rollo', 'rollo', 'rollo', '1.jpg', '<p>rollo</p>\r\n', '<p>rollo</p>\r\n', '<p>rollo</p>\r\n', 0),
(5, 'combo', 'combo', 'combo', '33426655_1_261x203_barcha-turdagi-jalyuzilar-sz-hohlagan-narhlarda-tashkent_rev008.jpg', '<p>combo</p>\r\n', '<p>combo</p>\r\n', '<p>combo</p>\r\n', 0),
(6, 'rollo', 'rollo', 'rollo', 'images (4).jpg', '<p>rollo</p>\r\n', '<p>rollo</p>\r\n', '<p>rollo</p>\r\n', 3),
(7, 'vertikal', 'vertikal', 'vertikal', 'images (4).jpg', '<p>vertikal</p>\r\n', '<p>vertikal</p>\r\n', '<p>vertikal</p>\r\n', 4),
(8, 'vertikak', 'vertikak', 'vertikak', '35136788_1_261x203_zamonaviy-jalyuzilar-tashkent_rev004.jpg', '<p>vertikak</p>\r\n', '<p>vertikak</p>\r\n', '<p>vertikak</p>\r\n', 2);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `massage` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) DEFAULT 0,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `full_name`, `phone_email`, `massage`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Toxirov Behruz', '+998909515499', 'jalyuzi\r\n', 10, 1593800641, 1593800786);

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1593794172),
('m130524_201442_init', 1593794183),
('m140506_102106_rbac_init', 1593794186),
('m170907_052038_rbac_add_index_on_auth_assignment_user_id', 1593794187),
('m180523_151638_rbac_updates_indexes_without_prefix', 1593794188),
('m190124_110200_add_verification_token_column_to_user_table', 1593794188),
('m191004_071012_create_pages_table', 1593794189),
('m191004_071721_create_article_categories_table', 1593794190),
('m191004_071728_create_articles_table', 1593794193),
('m191004_071826_create_slider_categories_table', 1593794194),
('m191004_071827_create_slider_slides_table', 1593794195),
('m191004_071828_create_slider_tags_table', 1593794197),
('m191004_071838_create_slider_slides_and_tags_table', 1593794199),
('m191004_072253_create_menu_table', 1593794200),
('m191009_124151_create_links_table', 1593794200),
('m191019_085546_create_feedback_table', 1593794201),
('m200320_182607_create_categories_table', 1593794202),
('m200320_182619_create_products_table', 1593794205),
('m200320_182630_create_product_photos_table', 1593794207),
('m200320_182646_create_product_feedback_table', 1593794209),
('m200325_063608_create_site_links_table', 1593794210),
('m200704_043838_create_news_table', 1593837612),
('m200704_055656_create_cart_table', 1593866761),
('m200704_125424_create_cart_table', 1593867280),
('m200704_125524_create_cart_table', 1593867374),
('m200704_130419_create_cart_table', 1593867919),
('m200704_131228_create_cart_table', 1593868414),
('m200705_062733_create_orders_table', 1593931182);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title_ru` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_uz` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` int(11) NOT NULL,
  `description_ru` text COLLATE utf8_unicode_ci NOT NULL,
  `description_uz` text COLLATE utf8_unicode_ci NOT NULL,
  `description_en` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title_ru`, `title_uz`, `title_en`, `photo`, `date`, `description_ru`, `description_uz`, `description_en`, `created_at`, `updated_at`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'new.jpg', 1593837780, '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>\r\n', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>\r\n', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>\r\n', 1593837909, 1593837909),
(2, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'london.jpg', 1593838800, '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>\r\n', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>\r\n', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>\r\n', 1593838850, 1593838850);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `count` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` int(11) DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_id`, `count`, `address`, `location`, `date`, `phone`, `email`, `description`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 1, '1', 'buxoro', 'ewgrqgrqeg', 0, '23151235123', 'vsdfgbeg', 'wgerhgweth', NULL, NULL, 1593958998, 1593958998),
(2, 1, '1', 'buxoro', 'ewgrqgrqeg', 0, '23151235123', 'vsdfgbeg', 'wgerhgweth', NULL, NULL, 1593959047, 1593959047),
(3, 1, '18', 'buxoro', 'ewgrqgrqeg', 0, '2442', 'vsdfgbeg', 'fqrbgwrg', NULL, NULL, 1593964984, 1593964984),
(4, 1, '18', 'buxoro', 'ewgrqgrqeg', 0, '2442', 'vsdfgbeg', 'fqrbgwrg', NULL, NULL, 1593965005, 1593965005),
(5, 2, '20', 'buxoro', NULL, 0, '998909515499', 'behruz@gmail.com', 'tezlashiringla', NULL, NULL, 1595825867, 1595825867),
(6, 1, '10', 'buxoro', NULL, 0, '23151235123', 'vsdfgbeg', 'efgfds', NULL, NULL, 1595826127, 1595826127),
(7, 2, '20', 'buxoro', NULL, 0, '23151235123', 'vsdfgbeg', 'efgfds', NULL, NULL, 1595826127, 1595826127);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title_ru` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_uz` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_en` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `main_photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description_ru` text COLLATE utf8_unicode_ci NOT NULL,
  `description_uz` text COLLATE utf8_unicode_ci NOT NULL,
  `description_en` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) DEFAULT 0,
  `view` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title_ru`, `title_uz`, `title_en`, `category_id`, `price`, `main_photo`, `description_ru`, `description_uz`, `description_en`, `status`, `view`, `created_at`, `updated_at`) VALUES
(1, 'Combos', 'Combos', 'Combos', 7, 55000, 'images (3).jpg', '<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>\r\n\r\n<p>Vivamus ac ultrices diam, vitae accumsan tellus. Integer sollicitudin vulputate lacus, congue .</p>\r\n', '<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>\r\n\r\n<p>Vivamus ac ultrices diam, vitae accumsan tellus. Integer sollicitudin vulputate lacus, congue .</p>\r\n', '<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>\r\n\r\n<p>Vivamus ac ultrices diam, vitae accumsan tellus. Integer sollicitudin vulputate lacus, congue .</p>\r\n', 0, NULL, 1593841464, 1593841464),
(2, 'rollo', 'rollo', 'rollo', 4, 5000, 'images (2).jpg', '<p>rollo</p>\r\n', '<p>rollo</p>\r\n', '<p>rollo</p>\r\n', 0, NULL, 1594134001, 1594134001);

-- --------------------------------------------------------

--
-- Table structure for table `product_feedback`
--

CREATE TABLE `product_feedback` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `full_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `massage` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) DEFAULT 0,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_feedback`
--

INSERT INTO `product_feedback` (`id`, `product_id`, `full_name`, `massage`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'toxirov behruz', 'Zor pardalar ekan\r\n', 10, 1593841488, 1593841503);

-- --------------------------------------------------------

--
-- Table structure for table `product_photos`
--

CREATE TABLE `product_photos` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sort` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `site_links`
--

CREATE TABLE `site_links` (
  `id` int(11) NOT NULL,
  `link_id` int(11) NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone_reserve` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `request_ids` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `address`, `phone`, `phone_reserve`, `request_ids`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(1, 'Admin', 'Administrator', 'Site', '998973377733', NULL, NULL, 'admin', 'Y7kWRT0iInzFhhz33bZoO9wTLJagh6iA', '$2y$13$bPm0R0lKPvryrnoWFoIK3exLecVVPwwohI20mqEjVbBzbUyBQNumO', NULL, NULL, 10, 1593794183, 1593794183, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abdualiym_cms_articles`
--
ALTER TABLE `abdualiym_cms_articles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD UNIQUE KEY `index-abdualiym_cms_articles-slug` (`slug`),
  ADD KEY `index-abdualiym_cms_articles-status` (`status`),
  ADD KEY `index-abdualiym_cms_articles-category_id` (`category_id`);

--
-- Indexes for table `abdualiym_cms_article_categories`
--
ALTER TABLE `abdualiym_cms_article_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD UNIQUE KEY `index-abdualiym_cms_article_categories-slug` (`slug`);

--
-- Indexes for table `abdualiym_cms_menu`
--
ALTER TABLE `abdualiym_cms_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `abdualiym_cms_pages`
--
ALTER TABLE `abdualiym_cms_pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `index-abdualiym_cms_pages-slug` (`slug`);

--
-- Indexes for table `abdualiym_slider_categories`
--
ALTER TABLE `abdualiym_slider_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD UNIQUE KEY `index-abdualiym_slider_categories-slug` (`slug`);

--
-- Indexes for table `abdualiym_slider_slides`
--
ALTER TABLE `abdualiym_slider_slides`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index-abdualiym_slider_slides-active` (`active`),
  ADD KEY `index-abdualiym_slider_slides-category_id` (`category_id`);

--
-- Indexes for table `abdualiym_slider_slides_and_tags`
--
ALTER TABLE `abdualiym_slider_slides_and_tags`
  ADD PRIMARY KEY (`slide_id`,`tag_id`);

--
-- Indexes for table `abdualiym_slider_tags`
--
ALTER TABLE `abdualiym_slider_tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD UNIQUE KEY `index-abdualiym_slider_tags-slug` (`slug`);

--
-- Indexes for table `auth_assignments`
--
ALTER TABLE `auth_assignments`
  ADD PRIMARY KEY (`item_name`,`user_id`),
  ADD KEY `idx-auth_assignment-user_id` (`user_id`);

--
-- Indexes for table `auth_items`
--
ALTER TABLE `auth_items`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `idx-auth_item-type` (`type`);

--
-- Indexes for table `auth_item_children`
--
ALTER TABLE `auth_item_children`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Indexes for table `auth_rules`
--
ALTER TABLE `auth_rules`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index-cart-product_id` (`product_id`),
  ADD KEY `index-cart-created_by` (`created_by`),
  ADD KEY `index-cart-updated_by` (`updated_by`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index-orders-product_id` (`product_id`),
  ADD KEY `index-orders-created_by` (`created_by`),
  ADD KEY `index-orders-updated_by` (`updated_by`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index-products-category_id` (`category_id`);

--
-- Indexes for table `product_feedback`
--
ALTER TABLE `product_feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index-product_feedback-product_id` (`product_id`);

--
-- Indexes for table `product_photos`
--
ALTER TABLE `product_photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index-product_photos-product_id` (`product_id`);

--
-- Indexes for table `site_links`
--
ALTER TABLE `site_links`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index-site_links-link_id` (`link_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abdualiym_cms_articles`
--
ALTER TABLE `abdualiym_cms_articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `abdualiym_cms_article_categories`
--
ALTER TABLE `abdualiym_cms_article_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `abdualiym_cms_menu`
--
ALTER TABLE `abdualiym_cms_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `abdualiym_cms_pages`
--
ALTER TABLE `abdualiym_cms_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `abdualiym_slider_categories`
--
ALTER TABLE `abdualiym_slider_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `abdualiym_slider_slides`
--
ALTER TABLE `abdualiym_slider_slides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `abdualiym_slider_tags`
--
ALTER TABLE `abdualiym_slider_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_feedback`
--
ALTER TABLE `product_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_photos`
--
ALTER TABLE `product_photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `site_links`
--
ALTER TABLE `site_links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `abdualiym_cms_articles`
--
ALTER TABLE `abdualiym_cms_articles`
  ADD CONSTRAINT `fkey-abdualiym_cms_articles-category_id` FOREIGN KEY (`category_id`) REFERENCES `abdualiym_cms_article_categories` (`id`);

--
-- Constraints for table `abdualiym_slider_slides`
--
ALTER TABLE `abdualiym_slider_slides`
  ADD CONSTRAINT `fkey-abdualiym_slider_slides-category_id` FOREIGN KEY (`category_id`) REFERENCES `abdualiym_slider_categories` (`id`);

--
-- Constraints for table `auth_assignments`
--
ALTER TABLE `auth_assignments`
  ADD CONSTRAINT `auth_assignments_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_items` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `auth_items`
--
ALTER TABLE `auth_items`
  ADD CONSTRAINT `auth_items_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rules` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `auth_item_children`
--
ALTER TABLE `auth_item_children`
  ADD CONSTRAINT `auth_item_children_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_items` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_children_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_items` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `fkey-cart-created_by` FOREIGN KEY (`created_by`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `fkey-cart-product_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `fkey-cart-updated_by` FOREIGN KEY (`updated_by`) REFERENCES `user` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fkey-orders-created_by` FOREIGN KEY (`created_by`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `fkey-orders-product_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `fkey-orders-updated_by` FOREIGN KEY (`updated_by`) REFERENCES `user` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fkey-products-category_id` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `product_feedback`
--
ALTER TABLE `product_feedback`
  ADD CONSTRAINT `fkey-product_feedback-product_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `product_photos`
--
ALTER TABLE `product_photos`
  ADD CONSTRAINT `fkey-product_photos-product_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `site_links`
--
ALTER TABLE `site_links`
  ADD CONSTRAINT `fkey-site_links-link_id` FOREIGN KEY (`link_id`) REFERENCES `links` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
