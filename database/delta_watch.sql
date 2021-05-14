-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th5 14, 2021 lúc 08:39 PM
-- Phiên bản máy phục vụ: 8.0.25-0ubuntu0.20.04.1
-- Phiên bản PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `delta_watch`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brands`
--

CREATE TABLE `brands` (
  `id` bigint UNSIGNED NOT NULL,
  `br_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `br_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `br_logo` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `brands`
--

INSERT INTO `brands` (`id`, `br_name`, `br_description`, `br_logo`, `created_at`, `updated_at`) VALUES
(1, 'Apple', '', 'brands/March2021/brand0.png', '2021-04-06 09:55:23', '2021-04-06 09:55:23'),
(2, 'Fitbit', '', 'brands/March2021/brand1.png', '2021-04-06 09:55:23', '2021-04-06 09:55:23'),
(3, 'Gearfit', '', 'brands/March2021/brand2.png', '2021-04-06 09:55:23', '2021-04-06 09:55:23'),
(4, 'Huawei', '', 'brands/March2021/brand3.png', '2021-04-06 09:55:23', '2021-04-06 09:55:23'),
(5, 'Samsung', '', 'brands/March2021/brand4.png', '2021-04-06 09:55:23', '2021-04-06 09:55:23'),
(6, 'Xiaomi', '', 'brands/March2021/brand5.png', '2021-04-06 09:55:23', '2021-04-06 09:55:23');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int UNSIGNED NOT NULL,
  `parent_id` int UNSIGNED DEFAULT NULL,
  `order` int NOT NULL DEFAULT '1',
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `order`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 0, 1, 'Đồng hồ nam', 'dong-ho-nam', '2021-04-06 09:55:23', NULL),
(2, 0, 1, 'Đồng hồ nữ', 'dong-ho-nu', '2021-04-06 09:55:23', NULL),
(3, 0, 1, 'Đồng hồ đôi', 'dong-ho-doi', '2021-04-06 09:55:23', NULL),
(4, 0, 1, 'Đồng hồ trẻ em', 'dong-ho-tre-em', '2021-04-06 09:55:23', NULL),
(5, 1, 1, 'Đồng hồ Philips', 'dong-ho-philips', '2021-04-06 09:55:23', NULL),
(6, 1, 1, 'Đồng hồ Epos swi', 'dong-ho-epos-swi', '2021-04-06 09:55:23', NULL),
(7, 1, 1, 'Đồng hồ Eries go', 'dong-ho-eries-go', '2021-04-06 09:55:23', NULL),
(8, 1, 1, 'Đồng hồ Citizen', 'dong-ho-citizen', '2021-04-06 09:55:23', NULL),
(9, 1, 1, 'Đồng hồ Tourbill', 'dong-ho-tourbill', '2021-04-06 09:55:23', NULL),
(10, 1, 1, 'Đồng hồ Du manoir', 'dong-ho-du-manoir', '2021-04-06 09:55:23', NULL),
(11, 2, 1, 'Đồng hồ nữ Casio', 'dong-ho-nu-casio', '2021-04-06 09:55:23', NULL),
(12, 2, 1, 'Đồng hồ nữ QQ', 'dong-ho-nu-qq', '2021-04-06 09:55:23', NULL),
(13, 2, 1, 'Đồng hồ Orginal', 'dong-ho-orginal', '2021-04-06 09:55:23', NULL),
(14, 2, 1, 'Đồng hồ Fosill', 'dong-ho-fosill', '2021-04-06 09:55:23', NULL),
(15, 2, 1, 'Đồng hồ Maceur', 'dong-ho-maceur', '2021-04-06 09:55:23', NULL),
(16, 2, 1, 'Đồng hồ Seiko', 'dong-ho-seiko', '2021-04-06 09:55:23', NULL),
(17, 3, 1, 'Đồng hồ đôi Eros', 'dong-ho-doi-eros', '2021-04-06 09:55:23', NULL),
(18, 3, 1, 'Đông ht_description', 'dong-ht-description', '2021-04-06 09:55:23', NULL),
(19, 3, 1, 'Đồng hồ đôi Casio', 'dong-ho-doi-casio', '2021-04-06 09:55:23', NULL),
(20, 3, 1, 'Đồng hồ đôi Emoji', 'dong-ho-doi-emoji', '2021-04-06 09:55:23', NULL),
(21, 3, 1, 'Đồng hồ Omega', 'dong-ho-omega', '2021-04-06 09:55:23', NULL),
(22, 3, 1, 'Đồng hồ Kazien', 'dong-ho-kazien', '2021-04-06 09:55:23', NULL),
(23, 4, 1, 'Đồng hồ báo thức', 'dong-ho-bao-thuc', '2021-04-06 09:55:23', NULL),
(24, 4, 1, 'Đồng hồ định vị', 'dong-ho-dinh-vi', '2021-04-06 09:55:23', NULL),
(25, 4, 1, 'Đồng hồ định vị 1', 'dong-ho-dinh-vi-1', '2021-04-06 09:55:23', NULL),
(26, 4, 1, 'Đồng hồ sức khỏe', 'dong-ho-suc-khoe', '2021-04-06 09:55:23', NULL),
(27, 4, 1, 'Đồng hồ để bàn', 'dong-ho-de-ban', '2021-04-06 09:55:23', NULL),
(28, 4, 1, 'Đồng hồ đồ chơi', 'dong-ho-do-choi', '2021-04-06 09:55:23', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Đình Giang', 'giang9x@gmail.com', '$2y$10$/X3AcR0j6M.Cc6ddqgKmfO/b303MbZvYa4x1pd4lLezeERhWdHFT.', NULL, NULL),
(2, 'Đặng Quang Hà', 'ha2k@gmail@gmail.com', '$2y$10$9Q8gLo/ClEkwPX7hpuOCIeLBZ/iyUUWOJfr20w.LBR7I3vH/ZBsbK', NULL, NULL),
(3, 'Đặng Quang Hà', 'quangha2611@gmail.com', '$2y$10$8lIlkNco7TYSl4RlFhg3Du288p3LM1GJP5G24QCKtJabKb2LmKXRu', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int UNSIGNED NOT NULL,
  `data_type_id` int UNSIGNED NOT NULL,
  `field` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `order` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '{}', 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, '{}', 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, '{}', 4),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, '{}', 5),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, '{}', 6),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, '{}', 8),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Vai trò chính', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":\"0\",\"taggable\":\"0\"}', 10),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Vai trò phụ', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 11),
(11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, '{}', 12),
(12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '{}', 1),
(13, 2, 'name', 'text', 'Tên menu', 1, 1, 1, 1, 1, 1, '{}', 2),
(14, 2, 'created_at', 'timestamp', 'Tạo ngày', 0, 1, 1, 0, 0, 0, '{}', 3),
(15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 4),
(16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '{}', 1),
(17, 3, 'name', 'text', 'Tên', 1, 1, 1, 1, 1, 1, '{}', 2),
(18, 3, 'created_at', 'timestamp', 'Tạo ngày', 0, 1, 1, 0, 0, 0, '{}', 3),
(19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 4),
(20, 3, 'display_name', 'text', 'Tên hiển thị', 1, 1, 1, 1, 1, 1, '{}', 5),
(21, 1, 'role_id', 'select_dropdown', 'Vai trò', 0, 1, 1, 1, 1, 1, '{}', 9),
(22, 4, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '{}', 1),
(23, 4, 'parent_id', 'select_dropdown', 'Parent', 0, 0, 1, 1, 1, 1, '{\"default\":\"\",\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}', 2),
(24, 4, 'order', 'number', 'Order', 1, 1, 1, 1, 1, 1, '{\"default\":1}', 3),
(25, 4, 'name', 'text', 'Tên danh mục', 1, 1, 1, 1, 1, 1, '{}', 4),
(26, 4, 'slug', 'text', 'Slug', 1, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"name\"}}', 5),
(27, 4, 'created_at', 'timestamp', 'Tạo ngày', 0, 1, 1, 0, 0, 0, '{}', 6),
(28, 4, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7),
(29, 5, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '{}', 1),
(30, 5, 'author_id', 'text', 'Tác giả', 1, 0, 1, 1, 0, 1, '{}', 2),
(31, 5, 'category_id', 'text', 'Danh mục', 0, 0, 1, 1, 1, 0, '{}', 3),
(32, 5, 'title', 'text', 'Tiêu đề', 1, 1, 1, 1, 1, 1, '{}', 4),
(33, 5, 'excerpt', 'text_area', 'Đoạn trích', 0, 0, 1, 1, 1, 1, '{}', 5),
(34, 5, 'body', 'rich_text_box', 'Nội dung', 1, 0, 1, 1, 1, 1, '{}', 6),
(35, 5, 'image', 'image', 'Ảnh bài viết', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 7),
(36, 5, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}', 8),
(37, 5, 'meta_description', 'text_area', 'Meta Description', 0, 0, 1, 1, 1, 1, '{}', 9),
(38, 5, 'meta_keywords', 'text_area', 'Meta Keywords', 0, 0, 1, 1, 1, 1, '{}', 10),
(39, 5, 'status', 'select_dropdown', 'Trạng thái', 1, 1, 1, 1, 1, 1, '{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\",\"PENDING\":\"pending\"}}', 11),
(40, 5, 'created_at', 'timestamp', 'Tạo ngày', 0, 1, 1, 0, 0, 0, '{}', 12),
(41, 5, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 13),
(42, 5, 'seo_title', 'text', 'SEO Title', 0, 1, 1, 1, 1, 1, '{}', 14),
(43, 5, 'featured', 'checkbox', 'Featured', 1, 1, 1, 1, 1, 1, '{}', 15),
(56, 7, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(57, 7, 'br_name', 'text', 'Tên thương hiệu', 1, 1, 1, 1, 1, 1, '{}', 2),
(58, 7, 'br_description', 'text', 'Mô tả', 1, 1, 1, 1, 1, 1, '{}', 3),
(59, 7, 'br_logo', 'image', 'Logo', 1, 1, 1, 1, 1, 1, '{}', 4),
(60, 7, 'created_at', 'timestamp', 'Tạo ngày', 0, 1, 1, 1, 0, 1, '{}', 5),
(61, 7, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(62, 4, 'category_belongsto_category_relationship', 'relationship', 'Danh mục cha', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Category\",\"table\":\"categories\",\"type\":\"belongsTo\",\"column\":\"parent_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"brands\",\"pivot\":\"0\",\"taggable\":\"0\"}', 8),
(63, 8, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(64, 8, 'po_name', 'text', 'Tên sản phẩm', 1, 1, 1, 1, 1, 1, '{}', 2),
(65, 8, 'po_description', 'text', 'Mô tả', 1, 0, 1, 1, 1, 1, '{}', 3),
(66, 8, 'po_image', 'image', 'Ảnh sản phẩm', 1, 1, 1, 1, 1, 1, '{}', 4),
(67, 8, 'po_gender', 'select_dropdown', 'Giới tính', 1, 0, 0, 1, 1, 1, '{\"default\":\"Nam\",\"options\":{\"0\":\"Nam\",\"1\":\"N\\u1eef\"}}', 5),
(68, 8, 'po_hot', 'select_dropdown', 'Nổi bật', 1, 0, 0, 1, 1, 1, '{\"default\":\"\",\"options\":{\"0\":\"C\\u00f3\",\"1\":\"Kh\\u00f4ng\"}}', 6),
(69, 8, 'po_info', 'text', 'Thông tin', 1, 1, 1, 1, 1, 1, '{}', 7),
(70, 8, 'po_policy', 'text', 'Chính sách', 0, 0, 0, 1, 1, 1, '{}', 8),
(71, 8, 'po_quantity', 'number', 'Số lượng', 1, 1, 1, 1, 1, 1, '{}', 9),
(72, 8, 'po_brand', 'text', 'Thương hiệu', 1, 1, 1, 1, 1, 1, '{}', 10),
(73, 8, 'po_category', 'text', 'Danh mục', 1, 1, 1, 1, 1, 1, '{}', 11),
(74, 8, 'po_provider', 'text', 'Nhà cung cấp', 1, 1, 1, 1, 1, 1, '{}', 12),
(75, 8, 'po_price', 'number', 'Giá', 1, 1, 1, 1, 1, 1, '{}', 13),
(76, 8, 'created_at', 'timestamp', 'Tạo ngày', 0, 1, 1, 0, 0, 0, '{}', 14),
(77, 8, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 15),
(79, 8, 'product_belongsto_brand_relationship', 'relationship', 'Thương hiệu', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Brand\",\"table\":\"brands\",\"type\":\"belongsTo\",\"column\":\"po_brand\",\"key\":\"id\",\"label\":\"br_name\",\"pivot_table\":\"brands\",\"pivot\":\"0\",\"taggable\":\"0\"}', 16),
(80, 8, 'product_belongsto_category_relationship', 'relationship', 'Danh mục', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Category\",\"table\":\"categories\",\"type\":\"belongsTo\",\"column\":\"po_category\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"brands\",\"pivot\":\"0\",\"taggable\":\"0\"}', 17),
(81, 8, 'product_belongsto_provider_relationship', 'relationship', 'Nhà cung cấp', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Provider\",\"table\":\"providers\",\"type\":\"belongsTo\",\"column\":\"po_provider\",\"key\":\"id\",\"label\":\"prov_name\",\"pivot_table\":\"brands\",\"pivot\":\"0\",\"taggable\":\"0\"}', 18),
(82, 9, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(83, 9, 'prov_name', 'text', 'Tên nhà cung cấp', 1, 1, 1, 1, 1, 1, '{}', 2),
(84, 9, 'prov_address', 'text', 'Địa chỉ nhà cung cấp', 1, 1, 1, 1, 1, 1, '{}', 3),
(85, 9, 'prov_phone', 'number', 'Số điện thoại', 1, 1, 1, 1, 1, 1, '{}', 4),
(86, 9, 'prov_email', 'text', 'Email', 1, 1, 1, 1, 1, 1, '{}', 5),
(87, 9, 'prov_represent', 'text', 'Người đại diện', 1, 1, 1, 1, 1, 1, '{}', 6),
(88, 9, 'created_at', 'timestamp', 'Tạo ngày', 0, 1, 1, 1, 0, 1, '{}', 7),
(89, 9, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 8),
(90, 1, 'email_verified_at', 'timestamp', 'Email xác minh vào', 0, 1, 1, 0, 0, 0, '{}', 6),
(91, 13, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(92, 13, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 2),
(93, 13, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, '{}', 3),
(94, 13, 'password', 'password', 'Password', 1, 1, 1, 1, 1, 1, '{}', 4),
(95, 13, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 5),
(96, 13, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(98, 14, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(99, 14, 'customer_id', 'text', 'Khách hàng', 1, 0, 0, 0, 0, 0, '{}', 2),
(100, 14, 'name', 'text', 'Người nhận', 1, 1, 1, 1, 1, 1, '{}', 3),
(101, 14, 'address', 'text', 'Địa chỉ', 1, 1, 1, 1, 1, 1, '{}', 4),
(102, 14, 'phone', 'text', 'Số điện thoại', 1, 1, 1, 1, 1, 1, '{}', 5),
(103, 14, 'created_at', 'timestamp', 'Thời gian đặt', 0, 1, 1, 1, 0, 1, '{}', 6),
(104, 14, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7),
(105, 14, 'order_hasone_customer_relationship', 'relationship', 'Người đặt', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Customer\",\"table\":\"customers\",\"type\":\"belongsTo\",\"column\":\"customer_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"brands\",\"pivot\":\"0\",\"taggable\":\"0\"}', 8),
(106, 14, 'order_hasmany_order_detail_relationship', 'relationship', 'Chi tiết đơn hàng', 0, 0, 1, 1, 1, 1, '{\"model\":\"App\\\\OrderDetail\",\"table\":\"order_details\",\"type\":\"hasMany\",\"column\":\"order_id\",\"key\":\"id\",\"label\":\"id\",\"pivot_table\":\"brands\",\"pivot\":\"0\",\"taggable\":\"0\"}', 9);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `data_types`
--

CREATE TABLE `data_types` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint NOT NULL DEFAULT '0',
  `details` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'Nguời dùng', 'Nguời dùng', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2021-04-03 01:06:34', '2021-04-25 08:37:28'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2021-04-03 01:06:34', '2021-04-06 09:48:53'),
(3, 'roles', 'roles', 'Vai trò', 'Vai trò', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController', NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2021-04-03 01:06:34', '2021-04-08 10:50:36'),
(4, 'categories', 'danh-muc', 'Danh mục', 'Danh mục', 'voyager-categories', 'TCG\\Voyager\\Models\\Category', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2021-04-03 01:07:26', '2021-04-08 10:26:40'),
(5, 'posts', 'posts', 'Bài viết', 'Bài viết', 'voyager-news', 'TCG\\Voyager\\Models\\Post', 'TCG\\Voyager\\Policies\\PostPolicy', NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2021-04-03 01:07:26', '2021-04-08 10:38:31'),
(7, 'brands', 'thuong-hieu', 'Thương hiệu', 'Thương hiệu', 'voyager-star-two', 'App\\Brand', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2021-04-03 01:13:13', '2021-04-08 10:25:54'),
(8, 'products', 'san-pham', 'Sản phẩm', 'Sản phẩm', 'voyager-watch', 'App\\Product', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2021-04-03 01:28:20', '2021-04-19 08:48:13'),
(9, 'providers', 'nha-cung-cap', 'Nhà cung cấp', 'Nhà cung cấp', 'voyager-truck', 'App\\Provider', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2021-04-03 09:33:47', '2021-04-08 10:33:20'),
(13, 'customers', 'khach-hang', 'Khách hàng', 'Khách hàng', 'voyager-people', 'App\\Customer', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2021-04-08 10:04:20', '2021-04-08 10:29:00'),
(14, 'orders', 'orders', 'Đơn hàng', 'Đơn hàng', 'voyager-basket', 'App\\Order', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2021-05-07 20:55:47', '2021-05-07 21:23:11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menus`
--

CREATE TABLE `menus` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2021-04-06 09:55:16', '2021-04-06 09:55:16');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int UNSIGNED NOT NULL,
  `menu_id` int UNSIGNED DEFAULT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int DEFAULT NULL,
  `order` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Bảng điều khiển', '', '_self', 'voyager-boat', '#000000', NULL, 1, '2021-04-03 01:06:35', '2021-04-03 01:08:54', 'voyager.dashboard', 'null'),
(2, 1, 'Media', '', '_self', 'voyager-images', '#000000', NULL, 6, '2021-04-03 01:06:35', '2021-04-08 10:06:00', 'voyager.media.index', 'null'),
(3, 1, 'Người dùng', '/admin/users', '_self', 'voyager-person', '#000000', NULL, 3, '2021-04-03 01:06:35', '2021-04-08 10:40:30', NULL, ''),
(4, 1, 'Vai trò', '/admin/roles', '_self', 'voyager-lock', '#000000', NULL, 2, '2021-04-03 01:06:35', '2021-04-08 10:50:50', NULL, ''),
(5, 1, 'Công cụ', '', '_self', 'voyager-tools', '#000000', NULL, 14, '2021-04-03 01:06:35', '2021-05-07 20:56:01', NULL, ''),
(6, 1, 'Xây dựng Menu', '', '_self', 'voyager-list', '#000000', 5, 2, '2021-04-03 01:06:35', '2021-04-08 10:05:21', 'voyager.menus.index', 'null'),
(7, 1, 'CSDL', '', '_self', 'voyager-data', '#000000', 5, 1, '2021-04-03 01:06:35', '2021-04-08 10:05:21', 'voyager.database.index', 'null'),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 3, '2021-04-03 01:06:35', '2021-04-08 10:04:56', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 4, '2021-04-03 01:06:35', '2021-04-08 10:04:56', 'voyager.bread.index', NULL),
(10, 1, 'Cài đặt', '', '_self', 'voyager-settings', '#000000', NULL, 13, '2021-04-03 01:06:35', '2021-05-07 20:56:01', 'voyager.settings.index', 'null'),
(11, 1, 'Danh mục', '/admin/danh-muc', '_self', 'voyager-categories', '#000000', NULL, 8, '2021-04-03 01:07:26', '2021-04-08 10:27:25', NULL, ''),
(14, 1, 'Hooks', '', '_self', 'voyager-hook', NULL, 5, 5, '2021-04-03 01:07:27', '2021-04-08 10:04:56', 'voyager.hooks', NULL),
(17, 1, 'Nhà cung cấp', '/admin/nha-cung-cap', '_self', 'voyager-truck', '#000000', NULL, 9, '2021-04-03 09:33:47', '2021-04-08 10:33:39', NULL, ''),
(18, 1, 'Bài viết', '/admin/posts', '_self', 'voyager-news', '#000000', NULL, 10, '2021-04-06 08:45:23', '2021-04-08 10:39:12', NULL, ''),
(19, 1, 'Sản phẩm', '/admin/san-pham', '_self', 'voyager-watch', '#000000', NULL, 5, '2021-04-06 08:51:51', '2021-04-08 10:32:03', NULL, ''),
(20, 1, 'Thương hiệu', '/admin/thuong-hieu', '_self', 'voyager-star-two', '#000000', NULL, 7, '2021-04-06 09:05:58', '2021-04-08 10:19:19', NULL, ''),
(21, 1, 'Khách hàng', '/admin/khach-hang', '_self', 'voyager-people', '#000000', NULL, 4, '2021-04-08 10:04:20', '2021-04-08 10:29:31', NULL, ''),
(23, 1, 'Báo cáo', '', '_self', 'voyager-bar-chart', '#000000', NULL, 12, '2021-04-18 09:19:18', '2021-05-07 20:56:01', 'get.admin.report', NULL),
(24, 1, 'Đơn hàng', '', '_self', 'voyager-basket', NULL, NULL, 11, '2021-05-07 20:55:47', '2021-05-07 20:56:01', 'voyager.orders.index', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(32, '2014_10_12_000000_create_users_table', 1),
(33, '2014_10_12_100000_create_password_resets_table', 1),
(34, '2016_01_01_000000_add_voyager_user_fields', 1),
(35, '2016_01_01_000000_create_data_types_table', 1),
(36, '2016_01_01_000000_create_pages_table', 1),
(37, '2016_01_01_000000_create_posts_table', 1),
(38, '2016_02_15_204651_create_categories_table', 1),
(39, '2016_05_19_173453_create_menu_table', 1),
(40, '2016_10_21_190000_create_roles_table', 1),
(41, '2016_10_21_190000_create_settings_table', 1),
(42, '2016_11_30_135954_create_permission_table', 1),
(43, '2016_11_30_141208_create_permission_role_table', 1),
(44, '2016_12_26_201236_data_types__add__server_side', 1),
(45, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(46, '2017_01_14_005015_create_translations_table', 1),
(47, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(48, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(49, '2017_04_11_000000_alter_post_nullable_fields_table', 1),
(50, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(51, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(52, '2017_08_05_000000_add_group_to_settings_table', 1),
(53, '2017_11_26_013050_add_user_role_relationship', 1),
(54, '2017_11_26_015000_create_user_roles_table', 1),
(55, '2018_03_11_000000_add_user_settings', 1),
(56, '2018_03_14_000000_add_details_to_data_types_table', 1),
(57, '2018_03_16_000000_make_settings_value_nullable', 1),
(58, '2019_08_19_000000_create_failed_jobs_table', 1),
(59, '2021_03_06_040351_create_products_table', 1),
(60, '2021_03_06_040409_create_brands_table', 1),
(61, '2021_03_06_040417_create_providers_table', 1),
(62, '2021_03_12_152704_create_customers_table', 1),
(63, '2021_04_14_154414_create_reports_table', 2),
(64, '2021_04_12_134947_create_statistics_table', 3),
(68, '2021_04_19_092117_create_orders_table', 4),
(70, '2021_04_19_092211_create_order_details_table', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `customer_id` int NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `name`, `address`, `phone`, `created_at`, `updated_at`) VALUES
(1, 3, 'Đặng Quang Hà', '22/169 Phạm Hữu Điều', '0794139561', '2021-05-07 21:11:49', '2021-05-07 21:11:49'),
(2, 3, 'Nguyễn Đình Giang', '22/169 Phạm Hữu Điều', '0794139561', '2021-05-14 06:20:50', '2021-05-14 06:20:50'),
(3, 3, 'Bùi Huy Hoàng', '22/169 Phạm Hữu Điều', '0794139561', '2021-05-14 06:21:20', '2021-05-14 06:21:20'),
(4, 3, 'Nguyễn Việt Hoàng', '22/169 Phạm Hữu Điều', '0794139561', '2021-05-10 06:34:23', '2021-05-14 06:34:23'),
(5, 3, 'Phạm Xuân Hòa', '22/169 Phạm Hữu Điều', '0794139561', '2021-05-12 06:34:47', '2021-05-14 06:34:47');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint UNSIGNED NOT NULL,
  `order_id` int NOT NULL,
  `product_id` int NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_quantity` int NOT NULL,
  `product_price` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `product_name`, `product_quantity`, `product_price`, `created_at`, `updated_at`) VALUES
(1, 1, 18, 'Apple Watch Series5 nhôm', 1, 4800000, '2021-05-07 21:11:49', '2021-05-07 21:11:49'),
(2, 1, 4, 'Samsung Gear Pro', 1, 4000000, '2021-05-07 21:11:49', '2021-05-07 21:11:49'),
(3, 2, 17, 'Apple Watch Series4', 1, 18888888, '2021-05-14 06:20:50', '2021-05-14 06:20:50'),
(4, 2, 15, 'Xiaomi Amazfit GTS', 1, 29999999, '2021-05-14 06:20:50', '2021-05-14 06:20:50'),
(5, 2, 4, 'Samsung Gear Pro', 1, 4000000, '2021-05-14 06:20:50', '2021-05-14 06:20:50'),
(6, 3, 17, 'Apple Watch Series4', 1, 18888888, '2021-05-14 06:21:20', '2021-05-14 06:21:20'),
(7, 3, 5, 'Huawei Watch Fit', 1, 12000000, '2021-05-14 06:21:20', '2021-05-14 06:21:20'),
(8, 4, 15, 'Xiaomi Amazfit GTS', 1, 29999999, '2021-05-14 06:34:23', '2021-05-14 06:34:23'),
(9, 5, 3, 'Fitbit Verrsa Pro', 1, 3000000, '2021-05-14 06:34:47', '2021-05-14 06:34:47'),
(10, 5, 2, 'Gear Pro Series 5', 1, 2000000, '2021-05-14 06:34:47', '2021-05-14 06:34:47');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pages`
--

CREATE TABLE `pages` (
  `id` int UNSIGNED NOT NULL,
  `author_id` int NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `body` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` enum('ACTIVE','INACTIVE') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `key` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2021-04-06 08:32:21', '2021-04-06 08:32:21'),
(2, 'browse_bread', NULL, '2021-04-06 08:32:21', '2021-04-06 08:32:21'),
(3, 'browse_database', NULL, '2021-04-06 08:32:21', '2021-04-06 08:32:21'),
(4, 'browse_media', NULL, '2021-04-06 08:32:21', '2021-04-06 08:32:21'),
(5, 'browse_compass', NULL, '2021-04-06 08:32:21', '2021-04-06 08:32:21'),
(6, 'browse_menus', 'menus', '2021-04-06 08:32:21', '2021-04-06 08:32:21'),
(7, 'read_menus', 'menus', '2021-04-06 08:32:21', '2021-04-06 08:32:21'),
(8, 'edit_menus', 'menus', '2021-04-06 08:32:21', '2021-04-06 08:32:21'),
(9, 'add_menus', 'menus', '2021-04-06 08:32:21', '2021-04-06 08:32:21'),
(10, 'delete_menus', 'menus', '2021-04-06 08:32:21', '2021-04-06 08:32:21'),
(11, 'browse_roles', 'roles', '2021-04-06 08:32:21', '2021-04-06 08:32:21'),
(12, 'read_roles', 'roles', '2021-04-06 08:32:21', '2021-04-06 08:32:21'),
(13, 'edit_roles', 'roles', '2021-04-06 08:32:21', '2021-04-06 08:32:21'),
(14, 'add_roles', 'roles', '2021-04-06 08:32:21', '2021-04-06 08:32:21'),
(15, 'delete_roles', 'roles', '2021-04-06 08:32:21', '2021-04-06 08:32:21'),
(16, 'browse_users', 'users', '2021-04-06 08:32:21', '2021-04-06 08:32:21'),
(17, 'read_users', 'users', '2021-04-06 08:32:21', '2021-04-06 08:32:21'),
(18, 'edit_users', 'users', '2021-04-06 08:32:21', '2021-04-06 08:32:21'),
(19, 'add_users', 'users', '2021-04-06 08:32:21', '2021-04-06 08:32:21'),
(20, 'delete_users', 'users', '2021-04-06 08:32:21', '2021-04-06 08:32:21'),
(21, 'browse_settings', 'settings', '2021-04-06 08:32:21', '2021-04-06 08:32:21'),
(22, 'read_settings', 'settings', '2021-04-06 08:32:21', '2021-04-06 08:32:21'),
(23, 'edit_settings', 'settings', '2021-04-06 08:32:21', '2021-04-06 08:32:21'),
(24, 'add_settings', 'settings', '2021-04-06 08:32:21', '2021-04-06 08:32:21'),
(25, 'delete_settings', 'settings', '2021-04-06 08:32:21', '2021-04-06 08:32:21'),
(26, 'browse_posts', 'posts', '2021-04-06 08:45:23', '2021-04-06 08:45:23'),
(27, 'read_posts', 'posts', '2021-04-06 08:45:23', '2021-04-06 08:45:23'),
(28, 'edit_posts', 'posts', '2021-04-06 08:45:23', '2021-04-06 08:45:23'),
(29, 'add_posts', 'posts', '2021-04-06 08:45:23', '2021-04-06 08:45:23'),
(30, 'delete_posts', 'posts', '2021-04-06 08:45:23', '2021-04-06 08:45:23'),
(31, 'browse_providers', 'providers', '2021-04-06 08:49:19', '2021-04-06 08:49:19'),
(32, 'read_providers', 'providers', '2021-04-06 08:49:19', '2021-04-06 08:49:19'),
(33, 'edit_providers', 'providers', '2021-04-06 08:49:19', '2021-04-06 08:49:19'),
(34, 'add_providers', 'providers', '2021-04-06 08:49:19', '2021-04-06 08:49:19'),
(35, 'delete_providers', 'providers', '2021-04-06 08:49:19', '2021-04-06 08:49:19'),
(41, 'browse_products', 'products', '2021-04-06 08:51:51', '2021-04-06 08:51:51'),
(42, 'read_products', 'products', '2021-04-06 08:51:51', '2021-04-06 08:51:51'),
(43, 'edit_products', 'products', '2021-04-06 08:51:51', '2021-04-06 08:51:51'),
(44, 'add_products', 'products', '2021-04-06 08:51:51', '2021-04-06 08:51:51'),
(45, 'delete_products', 'products', '2021-04-06 08:51:51', '2021-04-06 08:51:51'),
(51, 'browse_categories', 'categories', '2021-04-06 08:59:17', '2021-04-06 08:59:17'),
(52, 'read_categories', 'categories', '2021-04-06 08:59:17', '2021-04-06 08:59:17'),
(53, 'edit_categories', 'categories', '2021-04-06 08:59:17', '2021-04-06 08:59:17'),
(54, 'add_categories', 'categories', '2021-04-06 08:59:17', '2021-04-06 08:59:17'),
(55, 'delete_categories', 'categories', '2021-04-06 08:59:17', '2021-04-06 08:59:17'),
(56, 'browse_brands', 'brands', '2021-04-06 09:05:02', '2021-04-06 09:05:02'),
(57, 'read_brands', 'brands', '2021-04-06 09:05:02', '2021-04-06 09:05:02'),
(58, 'edit_brands', 'brands', '2021-04-06 09:05:02', '2021-04-06 09:05:02'),
(59, 'add_brands', 'brands', '2021-04-06 09:05:02', '2021-04-06 09:05:02'),
(60, 'delete_brands', 'brands', '2021-04-06 09:05:02', '2021-04-06 09:05:02'),
(61, 'browse_customers', 'customers', '2021-04-08 10:04:20', '2021-04-08 10:04:20'),
(62, 'read_customers', 'customers', '2021-04-08 10:04:20', '2021-04-08 10:04:20'),
(63, 'edit_customers', 'customers', '2021-04-08 10:04:20', '2021-04-08 10:04:20'),
(64, 'add_customers', 'customers', '2021-04-08 10:04:20', '2021-04-08 10:04:20'),
(65, 'delete_customers', 'customers', '2021-04-08 10:04:20', '2021-04-08 10:04:20'),
(66, 'browse_orders', 'orders', '2021-05-07 20:55:47', '2021-05-07 20:55:47'),
(67, 'read_orders', 'orders', '2021-05-07 20:55:47', '2021-05-07 20:55:47'),
(68, 'edit_orders', 'orders', '2021-05-07 20:55:47', '2021-05-07 20:55:47'),
(69, 'add_orders', 'orders', '2021-05-07 20:55:47', '2021-05-07 20:55:47'),
(70, 'delete_orders', 'orders', '2021-05-07 20:55:47', '2021-05-07 20:55:47');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(68, 1),
(69, 1),
(70, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` int UNSIGNED NOT NULL,
  `author_id` int NOT NULL,
  `category_id` int DEFAULT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `body` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` enum('PUBLISHED','DRAFT','PENDING') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `author_id`, `category_id`, `title`, `seo_title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `featured`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Đồng hồ thông minh Apple Watch mới ra mắt', '', 'TTO - Apple từng công bố sẽ đưa các tính năng về tim mạch vào Apple Watch trong tháng 9, nhưng mới đây mới chính thức được áp dụng. Theo đó, đồn...', '', 'posts/March2021/post1.jpg', 'dong-ho-thong-minh-apple-watch-moi-ra-mat', '', '', 'PUBLISHED', 0, '2021-04-06 09:55:23', '2021-04-06 09:55:23'),
(2, 1, 3, 'Đồng hồ Apple Watch chính hãng bán ra tại VN', '', 'Bạn cũng sẽ kết nối với bác sĩ của mình một cách liên tục và được đánh giá tình trạng sức khỏe một cách thường xuyên hơn. Một trong những thiết ...', '', 'posts/March2021/post2.jpg', 'dong-ho-apple-watch-chinh-hang-ban-ra-tai-vn', '', '', 'PUBLISHED', 0, '2021-04-06 09:55:23', '2021-04-06 09:55:23'),
(3, 1, 5, 'Thị trường smartwatch: khi Fitbit và Google động thủ', '', 'Apple Watch Series 5 vừa mới được ra mắt có nhiều tính năng sức khỏe mới, trong đó bao gồm cả một App Store dành riêng cho thiết bị này. Apple W...', '', 'posts/March2021/post3.jpg', 'thi-truong-smartwatch-khi-fitbit-va-google-dong-thu', '', '', 'PUBLISHED', 0, '2021-04-06 09:55:23', '2021-04-06 09:55:23'),
(4, 1, 2, 'Đồng hồ thông minh nào nâng cấp Android Wear 2.0', '', 'TTO - Apple từng công bố sẽ đưa các tính năng về tim mạch vào Apple Watch trong tháng 9, nhưng mới đây mới chính thức được áp dụng. Theo đó, đồn...', '', 'posts/March2021/post4.jpg', 'dong-ho-thong-minh-nao-nang-cap-android-wear-20', '', '', 'PUBLISHED', 0, '2021-04-06 09:55:23', '2021-04-06 09:55:23'),
(5, 1, 1, 'Đức cấm đồng hồ thông minh cho trẻ em', '', 'Apple Watch Series 5 vừa mới được ra mắt có nhiều tính năng sức khỏe mới, trong đó bao gồm cả một App Store dành riêng cho thiết bị này. Apple W...', '', 'posts/March2021/post5.jpg', 'duc-cam-dong-ho-thong-minh-cho-tre-em', '', '', 'PUBLISHED', 0, '2021-04-06 09:55:23', '2021-04-06 09:55:23'),
(6, 1, 4, 'Thiết bị đeo tay thông minh cảnh báo tiểu đường đúng tới 85%', '', 'Bạn cũng sẽ kết nối với bác sĩ của mình một cách liên tục và được đánh giá tình trạng sức khỏe một cách thường xuyên hơn. Một trong những thiết ...', '', 'posts/March2021/post6.jpg', 'thiet-bi-deo-tay-thong-minh-canh-bao-tieu-duong-dung-toi-85', '', '', 'PUBLISHED', 0, '2021-04-06 09:55:23', '2021-04-06 09:55:23');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `po_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `po_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `po_image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `po_gender` tinyint NOT NULL DEFAULT '0',
  `po_hot` tinyint NOT NULL DEFAULT '0',
  `po_info` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `po_policy` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `po_quantity` int NOT NULL,
  `po_brand` int NOT NULL,
  `po_category` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `po_provider` int NOT NULL,
  `po_price` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `po_name`, `po_description`, `po_image`, `po_gender`, `po_hot`, `po_info`, `po_policy`, `po_quantity`, `po_brand`, `po_category`, `po_provider`, `po_price`, `created_at`, `updated_at`) VALUES
(1, 'Samsung Gear Fit', 'Theo dõi giấc ngủ, Đo nhịp tim, Tính lượng Calories tiêu thụ, Đếm số bước chân, Tính quãng đường chạy, Chế độ luyện tập, Nghe nhạc với tai nghe Bluetooth, Màn hình luôn hiển thị, Gọi điện trên đồng hồ,Từ chối cuộc gọi, Dự báo thời tiết, La bàn, Thay mặt đồng hồ, Nhận cuộc gọi, Tìm điện thoại', 'products/March2021/product1.jpg', 1, 1, 'Đồng hồ info', 'Bảo hành 1 năm', 20, 5, '1', 1, 1000000, '2021-04-06 09:55:23', '2021-04-06 09:55:23'),
(2, 'Gear Pro Series 5', 'Theo dõi giấc ngủ, Đo nhịp tim, Tính lượng Calories tiêu thụ, Đếm số bước chân, Tính quãng đường chạy, Chế độ luyện tập, Nghe nhạc với tai nghe Bluetooth, Màn hình luôn hiển thị, Gọi điện trên đồng hồ,Từ chối cuộc gọi, Dự báo thời tiết, La bàn, Thay mặt đồng hồ, Nhận cuộc gọi, Tìm điện thoại', 'products/March2021/product2.jpg', 0, 1, 'Đồng hồ info', 'Bảo hành 1 năm', 29, 3, '20', 4, 2000000, '2021-04-06 09:55:23', '2021-05-14 06:34:47'),
(3, 'Fitbit Verrsa Pro', 'Theo dõi giấc ngủ, Đo nhịp tim, Tính lượng Calories tiêu thụ, Đếm số bước chân, Tính quãng đường chạy, Chế độ luyện tập, Nghe nhạc với tai nghe Bluetooth, Màn hình luôn hiển thị, Gọi điện trên đồng hồ,Từ chối cuộc gọi, Dự báo thời tiết, La bàn, Thay mặt đồng hồ, Nhận cuộc gọi, Tìm điện thoại', 'products/March2021/product3.jpg', 1, 1, 'Đồng hồ info', 'Bảo hành 1 năm', 32, 2, '3', 14, 3000000, '2021-04-06 09:55:23', '2021-05-14 06:34:47'),
(4, 'Samsung Gear Pro', 'Theo dõi giấc ngủ, Đo nhịp tim, Tính lượng Calories tiêu thụ, Đếm số bước chân, Tính quãng đường chạy, Chế độ luyện tập, Nghe nhạc với tai nghe Bluetooth, Màn hình luôn hiển thị, Gọi điện trên đồng hồ,Từ chối cuộc gọi, Dự báo thời tiết, La bàn, Thay mặt đồng hồ, Nhận cuộc gọi, Tìm điện thoại', 'products/March2021/product4.jpg', 0, 0, 'Đồng hồ info', 'Bảo hành 1 năm', 8, 5, '18', 11, 4000000, '2021-04-06 09:55:23', '2021-05-14 06:20:50'),
(5, 'Huawei Watch Fit', 'Theo dõi giấc ngủ, Đo nhịp tim, Tính lượng Calories tiêu thụ, Đếm số bước chân, Tính quãng đường chạy, Chế độ luyện tập, Nghe nhạc với tai nghe Bluetooth, Màn hình luôn hiển thị, Gọi điện trên đồng hồ,Từ chối cuộc gọi, Dự báo thời tiết, La bàn, Thay mặt đồng hồ, Nhận cuộc gọi, Tìm điện thoại', 'products/March2021/product5.jpg', 0, 0, 'Đồng hồ info', 'Bảo hành 1 năm', 14, 4, '19', 15, 12000000, '2021-04-06 09:55:23', '2021-05-14 06:21:20'),
(6, 'Huawei Watch Pro', 'Theo dõi giấc ngủ, Đo nhịp tim, Tính lượng Calories tiêu thụ, Đếm số bước chân, Tính quãng đường chạy, Chế độ luyện tập, Nghe nhạc với tai nghe Bluetooth, Màn hình luôn hiển thị, Gọi điện trên đồng hồ,Từ chối cuộc gọi, Dự báo thời tiết, La bàn, Thay mặt đồng hồ, Nhận cuộc gọi, Tìm điện thoại', 'products/March2021/product6.jpg', 0, 0, 'Đồng hồ info', 'Bảo hành 1 năm', 6, 4, '20', 9, 22000000, '2021-04-06 09:55:23', '2021-04-06 09:55:23'),
(7, 'Huawei Watch GT2', 'Theo dõi giấc ngủ, Đo nhịp tim, Tính lượng Calories tiêu thụ, Đếm số bước chân, Tính quãng đường chạy, Chế độ luyện tập, Nghe nhạc với tai nghe Bluetooth, Màn hình luôn hiển thị, Gọi điện trên đồng hồ,Từ chối cuộc gọi, Dự báo thời tiết, La bàn, Thay mặt đồng hồ, Nhận cuộc gọi, Tìm điện thoại', 'products/March2021/product7.jpg', 1, 0, 'Đồng hồ info', 'Bảo hành 1 năm', 43, 4, '11', 7, 11000000, '2021-04-06 09:55:23', '2021-05-07 20:25:06'),
(8, 'Amazfit Gts nội địa', 'Theo dõi giấc ngủ, Đo nhịp tim, Tính lượng Calories tiêu thụ, Đếm số bước chân, Tính quãng đường chạy, Chế độ luyện tập, Nghe nhạc với tai nghe Bluetooth, Màn hình luôn hiển thị, Gọi điện trên đồng hồ,Từ chối cuộc gọi, Dự báo thời tiết, La bàn, Thay mặt đồng hồ, Nhận cuộc gọi, Tìm điện thoại', 'products/March2021/product8.jpg', 1, 1, 'Đồng hồ info', 'Bảo hành 1 năm', 99, 2, '6', 5, 30000000, '2021-04-06 09:55:23', '2021-05-07 20:25:06'),
(9, 'Amazfit Gts quốc tế', 'Theo dõi giấc ngủ, Đo nhịp tim, Tính lượng Calories tiêu thụ, Đếm số bước chân, Tính quãng đường chạy, Chế độ luyện tập, Nghe nhạc với tai nghe Bluetooth, Màn hình luôn hiển thị, Gọi điện trên đồng hồ,Từ chối cuộc gọi, Dự báo thời tiết, La bàn, Thay mặt đồng hồ, Nhận cuộc gọi, Tìm điện thoại', 'products/March2021/product9.jpg', 1, 1, 'Đồng hồ info', 'Bảo hành 1 năm', 19, 2, '15', 6, 1000000, '2021-04-06 09:55:23', '2021-05-07 20:25:06'),
(10, 'Xiaomi Amazfit Gts Vàng', 'Theo dõi giấc ngủ, Đo nhịp tim, Tính lượng Calories tiêu thụ, Đếm số bước chân, Tính quãng đường chạy, Chế độ luyện tập, Nghe nhạc với tai nghe Bluetooth, Màn hình luôn hiển thị, Gọi điện trên đồng hồ,Từ chối cuộc gọi, Dự báo thời tiết, La bàn, Thay mặt đồng hồ, Nhận cuộc gọi, Tìm điện thoại', 'products/March2021/product10.jpg', 0, 1, 'Đồng hồ info', 'Bảo hành 1 năm', 24, 6, '17', 2, 18000000, '2021-04-06 09:55:23', '2021-04-06 09:55:23'),
(11, 'Huami Amazfit Gts', 'Theo dõi giấc ngủ, Đo nhịp tim, Tính lượng Calories tiêu thụ, Đếm số bước chân, Tính quãng đường chạy, Chế độ luyện tập, Nghe nhạc với tai nghe Bluetooth, Màn hình luôn hiển thị, Gọi điện trên đồng hồ,Từ chối cuộc gọi, Dự báo thời tiết, La bàn, Thay mặt đồng hồ, Nhận cuộc gọi, Tìm điện thoại', 'products/March2021/product11.jpg', 1, 1, 'Đồng hồ info', 'Bảo hành 1 năm', 14, 3, '18', 1, 23500000, '2021-04-06 09:55:23', '2021-05-07 20:40:20'),
(12, 'Xiaomi Amazfit Pink', 'Theo dõi giấc ngủ, Đo nhịp tim, Tính lượng Calories tiêu thụ, Đếm số bước chân, Tính quãng đường chạy, Chế độ luyện tập, Nghe nhạc với tai nghe Bluetooth, Màn hình luôn hiển thị, Gọi điện trên đồng hồ,Từ chối cuộc gọi, Dự báo thời tiết, La bàn, Thay mặt đồng hồ, Nhận cuộc gọi, Tìm điện thoại', 'products/March2021/product12.jpg', 1, 0, 'Đồng hồ info', 'Bảo hành 1 năm', 76, 6, '13', 15, 45000000, '2021-04-06 09:55:23', '2021-04-06 09:55:23'),
(13, 'Xiaomi Amazfit gold', 'Theo dõi giấc ngủ, Đo nhịp tim, Tính lượng Calories tiêu thụ, Đếm số bước chân, Tính quãng đường chạy, Chế độ luyện tập, Nghe nhạc với tai nghe Bluetooth, Màn hình luôn hiển thị, Gọi điện trên đồng hồ,Từ chối cuộc gọi, Dự báo thời tiết, La bàn, Thay mặt đồng hồ, Nhận cuộc gọi, Tìm điện thoại', 'products/March2021/product13.jpg', 1, 0, 'Đồng hồ info', 'Bảo hành 1 năm', 45, 6, '12', 3, 5500000, '2021-04-06 09:55:23', '2021-04-06 09:55:23'),
(14, 'Xiaomi Amazfit Gts đen', 'Theo dõi giấc ngủ, Đo nhịp tim, Tính lượng Calories tiêu thụ, Đếm số bước chân, Tính quãng đường chạy, Chế độ luyện tập, Nghe nhạc với tai nghe Bluetooth, Màn hình luôn hiển thị, Gọi điện trên đồng hồ,Từ chối cuộc gọi, Dự báo thời tiết, La bàn, Thay mặt đồng hồ, Nhận cuộc gọi, Tìm điện thoại', 'products/March2021/product14.jpg', 1, 0, 'Đồng hồ info', 'Bảo hành 1 năm', 67, 6, '11', 8, 6600000, '2021-04-06 09:55:23', '2021-04-06 09:55:23'),
(15, 'Xiaomi Amazfit GTS', 'Theo dõi giấc ngủ, Đo nhịp tim, Tính lượng Calories tiêu thụ, Đếm số bước chân, Tính quãng đường chạy, Chế độ luyện tập, Nghe nhạc với tai nghe Bluetooth, Màn hình luôn hiển thị, Gọi điện trên đồng hồ,Từ chối cuộc gọi, Dự báo thời tiết, La bàn, Thay mặt đồng hồ, Nhận cuộc gọi, Tìm điện thoại', 'products/March2021/product15.jpg', 0, 0, 'Đồng hồ info', 'Bảo hành 1 năm', 40, 6, '22', 11, 29999999, '2021-04-06 09:55:23', '2021-05-14 06:34:23'),
(16, 'Apple Watch Series3', 'Theo dõi giấc ngủ, Đo nhịp tim, Tính lượng Calories tiêu thụ, Đếm số bước chân, Tính quãng đường chạy, Chế độ luyện tập, Nghe nhạc với tai nghe Bluetooth, Màn hình luôn hiển thị, Gọi điện trên đồng hồ,Từ chối cuộc gọi, Dự báo thời tiết, La bàn, Thay mặt đồng hồ, Nhận cuộc gọi, Tìm điện thoại', 'products/March2021/product16.jpg', 0, 0, 'Đồng hồ info', 'Bảo hành 1 năm', 20, 1, '21', 5, 39999999, '2021-04-06 09:55:23', '2021-05-07 21:02:36'),
(17, 'Apple Watch Series4', 'Theo dõi giấc ngủ, Đo nhịp tim, Tính lượng Calories tiêu thụ, Đếm số bước chân, Tính quãng đường chạy, Chế độ luyện tập, Nghe nhạc với tai nghe Bluetooth, Màn hình luôn hiển thị, Gọi điện trên đồng hồ,Từ chối cuộc gọi, Dự báo thời tiết, La bàn, Thay mặt đồng hồ, Nhận cuộc gọi, Tìm điện thoại', 'products/March2021/product17.jpg', 0, 0, 'Đồng hồ info', 'Bảo hành 1 năm', 33, 1, '3', 12, 18888888, '2021-04-06 09:55:23', '2021-05-14 06:21:20'),
(18, 'Apple Watch Series5 nhôm', 'Theo dõi giấc ngủ, Đo nhịp tim, Tính lượng Calories tiêu thụ, Đếm số bước chân, Tính quãng đường chạy, Chế độ luyện tập, Nghe nhạc với tai nghe Bluetooth, Màn hình luôn hiển thị, Gọi điện trên đồng hồ,Từ chối cuộc gọi, Dự báo thời tiết, La bàn, Thay mặt đồng hồ, Nhận cuộc gọi, Tìm điện thoại', 'products/March2021/product18.jpg', 0, 0, 'Đồng hồ info', 'Bảo hành 1 năm', 40, 1, '9', 14, 4800000, '2021-04-06 09:55:23', '2021-05-07 21:11:49');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `providers`
--

CREATE TABLE `providers` (
  `id` bigint UNSIGNED NOT NULL,
  `prov_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `prov_address` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `prov_phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `prov_email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `prov_represent` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `providers`
--

INSERT INTO `providers` (`id`, `prov_name`, `prov_address`, `prov_phone`, `prov_email`, `prov_represent`, `created_at`, `updated_at`) VALUES
(1, 'Đồng Hồ Thông Minh Giá Rẻ', ' Tòa Nhà CT5A, KĐT Xa La, Quận Hà Đông, TP Hà Nội (TPHN)', '0914 511 530', 'donghothongminh70@gmail.com', 'Phạm Tú Anh', '2021-04-06 09:55:23', NULL),
(2, 'Công Ty TNHH Phân Phối Sản Phẩm Cao Cấp LPD', ' Số 41, Thi Sách, P. Ngô Thì Nhậm, Q. Hai Bà Trưng, TP Hà Nội (TPHN)', '(024) 39766202', 'hamex@hn.vnn.vn', 'Nguyễn Đình Giang', '2021-04-06 09:55:23', NULL),
(3, 'Công Ty TNHH Sao Hỏa', ' Số 11, Đường Số 10, Trần Não, P. Bình An, Quận 2, TP Hồ Chí Minh (TPHCM)', '(028) 37407155 - 0903 731 769', 'info@mars-vn.com', 'Đặng Quang Hà', '2021-04-06 09:55:23', NULL),
(4, 'Công Ty TNHH Thương Mại Dịch Vụ XNK Hưng Việt Phát', ' 262/4A Cách Mạng Tháng 8, Phường 10, Quận 3, TP. Hồ Chí Minh (TPHCM)', '(028) 62587345, 0938.097.568', 'usbquatang@gmail.com', 'Vũ Ngọc Hải', '2021-04-06 09:55:23', NULL),
(5, 'Công Ty TNHH MTV Thương Mại Dịch Vụ Quà Tặng Thiên Minh', ' 75/9 Nguyễn Tư Giản, Phường 12, Quận Gò Vấp, TP. Hồ Chí Minh (TPHCM)', '(028) 36028858, 090 246 28 20', 'thienminhgifts@gmail.com', 'Bùi Huy Hoàng', '2021-04-06 09:55:23', NULL),
(6, 'Công Ty TNHH MTV Thương Mại Dịch Vụ Phong Kim Anh', ' 13 Nguyễn Duy Dương, P. 8, Q. 5, Tp. Hồ Chí Minh (TPHCM)', '(028) 39238427, 0903 976 887', 'info@phongkimanh.com', 'Vũ Xuân Trọng', '2021-04-06 09:55:23', NULL),
(7, 'Công Ty CP XNK Hàng Hiệu Hoa Kỳ (HHHK JSC)', ' 331 Nguyễn Đình Chiểu, Phường 5, Quận 3, Tp. Hồ Chí Minh (TPHCM)', '(028) 39293969, 39293993', 'contact@luxshopping.vn', 'Nguyễn Xuân Quang', '2021-04-06 09:55:23', NULL),
(8, 'Công Ty Cổ Phần TYP Việt Nam', ' Số 4, Ngõ 105/47 Phố Vọng Hà, P. Chương Dương, Q. Hoàn Kiếm, TP. Hà Nội (TP.HN)', '(024) 39991686', 'marketing@typvietnam.vn', 'Phạm Sơn Việt', '2021-04-06 09:55:23', NULL),
(9, 'Công Ty TNHH Một Thành Viên XD TM SX Dịch Vụ Xuất Khẩu Phương Đức', ' 35 Xuân Hồng, P. 12, Q. Tân Bình Tp. Hồ Chí Minh (TPHCM)', '(028) 38119134', 'donghoasia@yahoo.com', 'Phùng Thị Hải Yến', '2021-04-06 09:55:23', NULL),
(10, 'Công Ty TNHH Thương Mại Dịch Vụ Quốc Tế Hưng Thịnh', ' 256 Nguyễn Thiện Thuật, Phường 03, Quận 3, TP Hồ Chí Minh (TPHCM)', '0918 795 589', 'donghohunghtinh@yahoo.com.vn', 'Nguyễn Thế Vinh', '2021-04-06 09:55:23', NULL),
(11, 'Công Ty TNHH Thời Gian Thành Phố', ' 68 Nguyễn Huệ, Phường Bến Nghé, Quận 1, Tp. Hồ Chí Minh (TPHCM)', '0903 333 354', 'info@atenwatch.vn', 'Nguyễn Việt Hoàng', '2021-04-06 09:55:23', NULL),
(12, 'Công Ty Cổ Phần ENSA', ' Số 2, Ngách 4/13, Ngõ 13, Đường Thanh Lãm, Phường Phú Lãm, Quận Hà Đông, Thành Phố Hà Nội', '(024) 66556485', 'sales@ensa.vn', 'Nguyễn Thế Chiến', '2021-04-06 09:55:23', NULL),
(13, 'Cửa Hàng KTWatch', ' 115/25 Tân Thới Nhất 1, P. Tân Thới Nhất, Q. 12, Tp. Hồ Chí Minh (TPHCM)', '0974 068 739', 'ktwatch.vn@gmail.com', 'Chu Công Đan Trường', '2021-04-06 09:55:23', NULL),
(14, 'Công Ty TNHH Thương Mại Lê Anh', ' 36 Phạm Ngọc Thạch, Q. Đống Đa, TP Hà Nội (TPHN)', '0912 423 538', 'minhtu012000@gmail.com', 'Dương Ngô Hùng', '2021-04-06 09:55:23', NULL),
(15, 'Công Ty TNHH Phát Triển & Thương Mại Duy Anh', ' 200A Phồ  Huế, Quận Hai Bà Trưng, Thành Phố Hà Nội (TPHN)', '(024) 22148336', 'donghoduyanh@gmail.com', 'Vũ Xuân Khánh', '2021-04-06 09:55:23', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2021-04-06 09:55:16', '2021-04-06 09:55:16'),
(2, 'user', 'Normal User', '2021-04-06 09:55:16', '2021-04-06 09:55:16');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `settings`
--

CREATE TABLE `settings` (
  `id` int UNSIGNED NOT NULL,
  `key` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `details` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int NOT NULL DEFAULT '1',
  `group` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'Site Title', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Site Description', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', '', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', NULL, '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', '', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'Delta Watch', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Welcome to Voyager. The Missing Admin for Laravel', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', NULL, '', 'text', 1, 'Admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `translations`
--

CREATE TABLE `translations` (
  `id` int UNSIGNED NOT NULL,
  `table_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int UNSIGNED NOT NULL,
  `locale` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED DEFAULT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin', 'admin@admin.com', 'users/default.png', NULL, '$2y$10$iLSJZQ/Obn/XndXOYjk/TuJ1FPPvH78mEQZ2LNRhg3uEFLmQUCGwu', 'ZvuBOEUEPQ2oahw63T92rbYk4xxWZTECbE6wUiC7Xp6QmtSzP9NMBG66s9bB', '{\"locale\":\"vi\"}', '2021-04-06 09:55:23', '2021-04-08 10:52:49'),
(2, 2, 'Nguyễn Văn A', 'nguyenvana@gmail.com', 'users/default.png', NULL, '$2y$10$fdmi917eRlut9UX3gzZEmOIWdbX2w2rI4rYvsLqnp7Un90gcL9JZe', NULL, '{\"locale\":\"vi\"}', '2021-04-25 08:39:33', '2021-04-25 08:39:33');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user_roles`
--

INSERT INTO `user_roles` (`user_id`, `role_id`) VALUES
(1, 1),
(2, 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Chỉ mục cho bảng `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Chỉ mục cho bảng `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Chỉ mục cho bảng `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `providers`
--
ALTER TABLE `providers`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Chỉ mục cho bảng `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Chỉ mục cho bảng `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Chỉ mục cho bảng `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT cho bảng `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `providers`
--
ALTER TABLE `providers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Các ràng buộc cho bảng `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
