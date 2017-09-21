-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 21, 2017 lúc 07:54 PM
-- Phiên bản máy phục vụ: 10.1.25-MariaDB
-- Phiên bản PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `evn-proj`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `company`
--

CREATE TABLE `company` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'company number',
  `company_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'company name',
  `active` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'status 1: active 0:inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `company`
--

INSERT INTO `company` (`id`, `company_name`, `active`, `created_at`, `updated_at`) VALUES
(1, 'EVN EPS', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `department`
--

CREATE TABLE `department` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'department number',
  `company_id` int(11) NOT NULL COMMENT 'company number',
  `dept_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'department name',
  `active` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'status 1: active 0:inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `department`
--

INSERT INTO `department` (`id`, `company_id`, `dept_name`, `active`, `created_at`, `updated_at`) VALUES
(1, 1, 'Tổ Chức Hành Chính', 1, NULL, NULL),
(2, 1, 'Tài Chính Kế Toán', 1, NULL, NULL),
(3, 1, 'Kế Hoạch - Vật Tư', 1, NULL, NULL),
(4, 1, 'Kỹ Thuật', 1, NULL, NULL),
(5, 1, 'Kinh Doanh', 1, NULL, NULL),
(6, 1, 'PXSC Cơ - Nhiệt 1 (Phú Mỹ)', 1, NULL, NULL),
(7, 1, 'PXSC Điện - Tự Động 1 (Phú Mỹ)', 1, NULL, NULL),
(8, 1, 'PXSC 2 (Vĩnh Tân)', 1, NULL, NULL),
(9, 1, 'PXSC 3 (Mông Dương)', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `document`
--

CREATE TABLE `document` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'document id',
  `doc_cate_id` int(11) NOT NULL COMMENT 'document category number',
  `doc_cd` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'document code',
  `doc_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'document name',
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'document description',
  `doc_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'document link',
  `doc_tp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'document format type',
  `download` int(11) DEFAULT NULL,
  `upload_user_id` int(11) DEFAULT NULL,
  `total_time` int(11) DEFAULT NULL,
  `start_date` date DEFAULT NULL COMMENT 'document start effect date',
  `end_date` date DEFAULT NULL COMMENT 'document end effect date',
  `active` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'document status 1: active 0:inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `document`
--

INSERT INTO `document` (`id`, `doc_cate_id`, `doc_cd`, `doc_name`, `description`, `doc_url`, `doc_tp`, `download`, `upload_user_id`, `total_time`, `start_date`, `end_date`, `active`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 'Tài Liệu Số 1', 'mô tả tài liệu 1', '/resources/assets/documents/doc_1/doc1.docx', 'docx', 0, 2, NULL, NULL, NULL, 1, '2017-09-06 21:41:28', NULL),
(2, 1, NULL, 'Tài Liệu Số 2', 'mô tả tài liệu 2', '/resources/assets/documents/doc_1/doc2.docx', 'docx', 0, 3, NULL, NULL, NULL, 1, '2017-09-06 21:41:28', NULL),
(3, 1, NULL, 'Tài Liệu Số 3', 'mô tả tài liệu 3', '/resources/assets/documents/doc_1/doc3.docx', 'docx', 0, 3, NULL, NULL, NULL, 1, '2017-09-06 21:41:28', '0000-00-00 00:00:00'),
(4, 1, NULL, 'Tài Liệu Số 4', 'mô tả tài liệu 4', '/resources/assets/documents/doc_1/tl1.xlsx', 'xlsx', 0, 3, NULL, NULL, NULL, 1, '2017-09-06 21:41:28', '0000-00-00 00:00:00'),
(5, 2, NULL, 'Tài Liệu Số 5', 'mô tả tài liệu 5', '/resources/assets/documents/doc_1/tl2.xlsx', 'xlsx', 0, 3, NULL, '2017-01-01', '2017-12-31', 1, '2017-09-06 21:41:28', '0000-00-00 00:00:00'),
(6, 2, NULL, 'Tài Liệu Số 6', 'mô tả tài liệu 7', '/resources/assets/documents/doc_1/tl3.xlsx', 'xlsx', 0, 4, NULL, '2017-01-01', '2017-12-31', 1, '2017-09-06 21:41:28', '0000-00-00 00:00:00'),
(7, 3, NULL, 'Tài Liệu Số 7', 'mô tả tài liệu 6', '/resources/assets/documents/doc_1/tl4.xslx', 'xlsx', 0, 4, NULL, NULL, NULL, 1, '2017-09-06 21:41:28', '0000-00-00 00:00:00'),
(8, 4, NULL, 'Tài Liệu Số 8', 'mô tả tài liệu 8', '/resources/assets/documents/doc_1/doc4.docx', 'docx', 0, 4, NULL, NULL, NULL, 1, '2017-09-06 21:41:28', '0000-00-00 00:00:00'),
(9, 9, NULL, 'Tài Liệu Số 9', 'mô tả tài liệu 9', '/resources/assets/documents/doc_3/doc5.docx', 'docx', 0, 4, NULL, NULL, NULL, 1, '2017-09-06 21:41:28', '0000-00-00 00:00:00'),
(10, 9, NULL, 'Tài Liệu Số 10', 'mô tả tài liệu 10', '/resources/assets/documents/doc_3/doc6.docx', 'docx', 0, 4, NULL, NULL, NULL, 1, '2017-09-06 21:41:28', '0000-00-00 00:00:00'),
(11, 11, NULL, 'Tài Liệu Số 11', 'mô tả tài liệu', '/resources/assets/documents/doc_4/tl5.xlsx', 'xlsx', 0, 5, NULL, NULL, NULL, 1, '2017-09-06 21:41:28', '0000-00-00 00:00:00'),
(12, 12, NULL, 'Tài Liệu Số 12', 'mô tả tài liệu', '/resources/assets/documents/doc_4/tl6.xlsx', 'xlsx', 0, 6, NULL, NULL, NULL, 1, '2017-09-06 21:41:28', '0000-00-00 00:00:00'),
(13, 13, NULL, 'Tài Liệu Số 13', 'mô tả tài liệu', '/resources/assets/documents/doc_4/tl7.xlsx', 'xlsx', 0, 6, NULL, NULL, NULL, 1, '2017-09-06 21:41:28', '0000-00-00 00:00:00'),
(14, 12, NULL, 'Tài Liệu Số 14', 'mô tả tài liệu', '/resources/assets/documents/doc_4/tl8.xlsx', 'xlsx', 0, 5, NULL, NULL, NULL, 1, '2017-09-06 21:41:28', '0000-00-00 00:00:00'),
(15, 13, NULL, 'Tài Liệu Số 15', 'mô tả tài liệu', '/resources/assets/documents/doc_4/doc7.docx', 'docx', 0, 2, NULL, NULL, NULL, 1, '2017-09-06 21:41:28', '0000-00-00 00:00:00'),
(16, 8, NULL, 'Tài Liệu Số 16', 'mô tả tài liệu', '/resources/assets/documents/doc_3/doc8.docx', 'docx', 0, 2, NULL, NULL, NULL, 1, '2017-09-06 21:41:28', '0000-00-00 00:00:00'),
(17, 5, NULL, 'Tai Lieu so 17', 'mô tả tài liệu', '/resources/assets/documents/doc_2/power-point-1.pptx', 'pptx', 0, 2, NULL, NULL, NULL, 1, '2017-09-06 21:41:28', '0000-00-00 00:00:00'),
(18, 5, NULL, 'Tai Lieu so 18', 'mô tả tài liệu', '/resources/assets/documents/doc_2/power-point-2.pptx', 'pptx', 0, 2, NULL, NULL, NULL, 1, '2017-09-06 21:41:28', '0000-00-00 00:00:00'),
(19, 7, NULL, 'Tai Lieu so 19', 'mô tả tài liệu', '/resources/assets/documents/doc_2/power-point-3.pptx', 'pptx', 0, 2, NULL, NULL, NULL, 1, '2017-09-06 21:41:28', '0000-00-00 00:00:00'),
(20, 8, NULL, 'Tai Lieu so 20', 'mô tả tài liệu', '/resources/assets/documents/doc_3/power-point-4.pptx', 'pptx', 0, 2, NULL, NULL, NULL, 1, '2017-09-06 21:41:28', '0000-00-00 00:00:00'),
(21, 8, NULL, 'Tai Lieu so 21', 'mô tả tài liệu', '/resources/assets/documents/doc_3/power-point-5.pptx', 'pptx', 0, 2, NULL, NULL, NULL, 1, '2017-09-06 21:41:28', '0000-00-00 00:00:00'),
(22, 5, NULL, 'test', 'mô tả tài liệu', 'documents/doc_2/Capture.JPG', 'jpeg', NULL, 2, 1, NULL, NULL, 1, '2017-09-12 21:11:45', '2017-09-12 21:11:45'),
(23, 5, NULL, 'test1', 'mô tả tài liệu', 'resources/assets/documents/doc_2/Capture.JPG', 'jpeg', NULL, 2, 2, NULL, NULL, 1, '2017-09-12 21:15:03', '2017-09-12 21:15:03'),
(24, 5, NULL, 'test3', 'mô tả tài liệu', 'resources/assets/documents/doc_2/Capture.JPG', 'jpeg', NULL, 2, NULL, '2017-09-11', '2017-09-30', 0, '2017-09-12 21:27:04', '2017-09-13 00:21:16'),
(26, 5, NULL, 't2', 'mô tả tài liệu', 'resources/assets/documents/doc_2/1505278027Capture.JPG', 'jpeg', NULL, 2, NULL, '2017-09-20', '2017-09-30', 1, '2017-09-12 21:47:07', '2017-09-12 21:47:07'),
(27, 11, NULL, 'admin test 1', 'mô tả tài liệu', 'resources/assets/documents/doc_4/150529376021245694_1553299418063578_86069438_o.png', 'png', NULL, 2, 1, NULL, NULL, 1, '2017-09-13 02:09:20', '2017-09-13 02:09:20'),
(28, 1, NULL, 'phieu dk', 'mô tả tài liệu', 'resources/assets/documents/doc_1/1505440858Capture.JPG', 'jpeg', NULL, 2, 3, NULL, NULL, 1, '2017-09-14 19:00:58', '2017-09-14 19:00:58'),
(35, 1, NULL, 'qwqwq', 'mô tả tài liệu', 'resources/assets/documents/doc_1/1505442703Capture.JPG', 'jpeg', NULL, 2, 3, '1970-01-01', '1970-01-01', 1, '2017-09-14 19:31:43', '2017-09-14 19:31:43'),
(36, 1, NULL, 'asas', 'mô tả tài liệu', 'resources/assets/documents/doc_1/1505442795Capture.JPG', 'jpeg', NULL, 2, 2, NULL, NULL, 1, '2017-09-14 19:33:15', '2017-09-14 19:33:15');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `document_cate`
--

CREATE TABLE `document_cate` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'document cate number',
  `srt_seq` int(11) DEFAULT '0' COMMENT 'sort sequence',
  `cate_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'document cate name',
  `cate_cd` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'prefix  code for document code',
  `cate_group` int(1) DEFAULT NULL,
  `folder_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'active status 1-active 0-inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `document_cate`
--

INSERT INTO `document_cate` (`id`, `srt_seq`, `cate_name`, `cate_cd`, `cate_group`, `folder_url`, `active`, `created_at`, `updated_at`) VALUES
(1, 1, 'Tờ Trình Nội Bộ', 'TNB', 1, 'documents/doc_1', 1, NULL, '2017-09-05 00:06:22'),
(2, 2, 'Tờ Trình Gửi Bên Ngoài', 'TBN', 1, 'documents/doc_1', 1, NULL, NULL),
(3, 3, 'Báo Cáo Nội Bộ', 'BNB', 1, 'documents/doc_1', 1, NULL, NULL),
(4, 4, 'Báo Cáo Bên Ngoài', 'BBN', 1, 'documents/doc_1', 1, NULL, NULL),
(5, 5, 'Quy Định EPS', 'QDE', 1, 'documents/doc_1', 1, NULL, NULL),
(6, 6, 'Mẫu Quyết Định', 'MQD', 1, 'documents/doc_1', 1, NULL, '2017-09-06 21:45:01'),
(7, 7, 'Mẫu iso 1', 'MOA', 2, 'documents/doc_2', 1, NULL, NULL),
(8, 8, 'Mẫu iso 2', 'MIB', 2, 'documents/doc_2', 1, NULL, NULL),
(9, 9, 'Mẫu iso 3', 'MIC', 2, 'documents/doc_2', 1, NULL, NULL),
(10, 10, 'Đánh Giá Khóa Học', 'DKH', 3, 'documents/doc_3', 1, NULL, NULL),
(11, 11, 'Đánh Giá Học Viên', 'DHV', 3, 'documents/doc_3', 1, NULL, NULL),
(12, 12, 'Đánh Giá Tổng Hợp', 'DTH', 3, 'documents/doc_3', 1, NULL, NULL),
(13, 13, 'Tài Liệu Phú Mỹ', 'KPM', 4, 'documents/doc_4', 1, NULL, NULL),
(14, 14, 'Tài Liệu Vĩnh Tân 2', 'KV2', 4, 'documents/doc_4', 1, NULL, NULL),
(15, 15, 'Tài Liệu Vĩnh Tân 4', 'KV4', 4, 'documents/doc_4', 1, NULL, NULL),
(16, 16, 'Tài Liệu Mông Dương', 'KMD', 4, 'documents/doc_4', 1, NULL, NULL),
(17, 17, 'Tài Liệu Thái Bình', 'KTB', 4, 'documents/doc_4', 1, NULL, NULL),
(18, 18, 'Thư Viện Ảnh', NULL, NULL, 'documents/others', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu`
--

CREATE TABLE `menu` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'menu number',
  `sequence` int(11) NOT NULL COMMENT 'menu sort sequence',
  `menu_lvl` int(11) NOT NULL COMMENT 'menu level',
  `menu_prt_id` int(11) NOT NULL COMMENT 'menu parent number',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'menu name',
  `menu-url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'menu link',
  `active` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'menu active status 1-active, 0-inactive',
  `role` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'edit role 0-only admin using, 1-user',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `menu`
--

INSERT INTO `menu` (`id`, `sequence`, `menu_lvl`, `menu_prt_id`, `name`, `menu-url`, `active`, `role`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 0, 'Quản Lý', 'quan-ly', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 2, 1, 0, 'Tài Liệu', 'tai-lieu', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 1, 1, 0, 'Tài Liệu', 'tai-lieu', 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 1, 2, 1, 'Tài Liệu', 'tai-lieu', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 2, 2, 1, 'Nhân Viên', 'nhan-vien', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 3, 2, 1, 'Danh Mục', 'danh-muc', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 4, 2, 1, 'Phân Quyền Tài Liệu', 'phan-quyen-tai-lieu', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 5, 2, 1, 'Công Ty - Chi Nhánh', 'cong-ty-chi-nhanh', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 1, 2, 2, 'Tờ Trình', 'to-trinh', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 2, 2, 2, 'Báo Cáo', 'bao-cao', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 3, 2, 2, 'Văn Bản', 'van-ban', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 4, 2, 2, 'ISO', 'iso', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 1, 2, 3, 'Tờ Trình', 'to-trinh', 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 2, 2, 3, 'Báo Cáo', 'bao-cao', 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 3, 2, 3, 'Văn Bản', 'van-ban', 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 4, 2, 3, 'ISO', 'iso', 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu_document_cate`
--

CREATE TABLE `menu_document_cate` (
  `menu_id` int(11) NOT NULL COMMENT 'menu number',
  `doc_cate_id` int(11) NOT NULL COMMENT 'document_cate_id'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2017_08_31_035513_create_evn_user_table', 1),
(25, '2017_09_01_030556_create_master_category_table', 4),
(49, '2014_10_12_000000_create_users_table', 5),
(50, '2014_10_12_100000_create_password_resets_table', 5),
(51, '2017_08_31_062808_create_company_table', 5),
(52, '2017_08_31_063129_create_department_table', 5),
(53, '2017_08_31_064751_create_document_table', 5),
(54, '2017_08_31_064813_create_document_category_table', 5),
(55, '2017_08_31_064926_create_user_document_category_table', 5),
(56, '2017_09_01_044926_create_menu_table', 5),
(57, '2017_09_01_060614_create_menu_document_cate_table', 5),
(58, '2017_09_02_052417_create_sessions_table', 5),
(61, '2017_09_13_115920_create_picture_library_table', 6),
(62, '2017_09_13_120742_create_picture_detail_table', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `picture_detail`
--

CREATE TABLE `picture_detail` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'picture detail id',
  `pic_lib_id` int(11) NOT NULL COMMENT 'picture library number',
  `pic_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'picture link',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `picture_detail`
--

INSERT INTO `picture_detail` (`id`, `pic_lib_id`, `pic_url`, `created_at`, `updated_at`) VALUES
(1, 1, 'resources/assets/images/picture_library/1.jpg', NULL, NULL),
(2, 1, 'resources/assets/images/picture_library/2.jpg', NULL, NULL),
(3, 1, 'resources/assets/images/picture_library/3.jpg', NULL, NULL),
(4, 1, 'resources/assets/images/picture_library/4.jpg', NULL, NULL),
(5, 1, 'resources/assets/images/picture_library/5.jpg', NULL, NULL),
(6, 1, 'resources/assets/images/picture_library/6.jpg', NULL, NULL),
(7, 1, 'resources/assets/images/picture_library/7.jpg', NULL, NULL),
(8, 1, 'resources/assets/images/picture_library/8.jpg', NULL, NULL),
(9, 1, 'resources/assets/images/picture_library/9.jpg', NULL, NULL),
(10, 2, 'resources/assets/images/picture_library/1.jpg', NULL, NULL),
(11, 2, 'resources/assets/images/picture_library/2.jpg', NULL, NULL),
(12, 2, 'resources/assets/images/picture_library/3.jpg', NULL, NULL),
(13, 2, 'resources/assets/images/picture_library/4.jpg', NULL, NULL),
(14, 3, 'resources/assets/images/picture_library/5.jpg', NULL, NULL),
(15, 3, 'resources/assets/images/picture_library/6.jpg', NULL, NULL),
(16, 4, 'resources/assets/images/picture_library/7.jpg', NULL, NULL),
(17, 4, 'resources/assets/images/picture_library/8.jpg', NULL, NULL),
(18, 4, 'resources/assets/images/picture_library/9.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `picture_library`
--

CREATE TABLE `picture_library` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'picture post id',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'picture post name',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `picture_library`
--

INSERT INTO `picture_library` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Hình ảnh thành lập công ty', NULL, NULL),
(2, 'Hình ảnh lễ 2-9', NULL, NULL),
(3, 'Hình ảnh mừng năm mới 2017', NULL, NULL),
(4, 'hình ảnh dự án nhiệt điện Phú Mỹ', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'employee fullname',
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'employee name',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'employee email',
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'employee telephone',
  `office_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'employee office phone',
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'employee address',
  `role` tinyint(1) DEFAULT '0',
  `emp_cd` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '2' COMMENT 'employee number',
  `dept_id` int(11) NOT NULL COMMENT 'department id',
  `position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'employee position',
  `join_date` datetime DEFAULT NULL,
  `img_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'employee avatar image link',
  `active` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'employee active status 1: active 0:inactive',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `email`, `phone`, `office_phone`, `address`, `role`, `emp_cd`, `dept_id`, `position`, `join_date`, `img_url`, `active`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Trung Thien', 'trungthien', '$2y$10$IsgcQvR6/d4YS6pfrAY44O8WwS.shmG59Q79fakMDFuVr4.NmR2tm', 'trungthien@gmail.com', '13321546', '1321323', 'vung tau', 1, '123123', 1, 'Giam Doc', NULL, '/resources/assets/images/profile/user-thumb.jpg', 1, 'uHMMXp0J5Brykx9d9PXeqnTJaUYx2huP4hXHIEFJgKfa5YIVEPiOGFI6x9BP', '2017-09-03 09:06:38', '2017-09-07 03:01:28'),
(3, 'Thien', 'thien', '$2y$10$cxWeGJNu0cNZmhlAYghs8eU/9/QUpV2VQlURUYEEr.bWoS2wdgzlq', 'thien@gmail.com', '1231234412', NULL, 'Vung Tau', 1, '123123', 2, 'Trợ Lý', NULL, '/resources/assets/images/profile/user-thumb.jpg', 1, '4eCA1cPO5bayNxKgiNiWnUg80MrV7o0BnIwvtppzhMo11Jl9VCZ0Oxtb2gUA', '2017-09-05 21:18:24', '2017-09-06 21:43:00'),
(4, 'user 1', 'user1', '$2y$10$nOv6y//4ojzq2K7hNi2PnejgjmgH.UilhYPucyN937oanfg7OlSPa', 'user1@gmail.com', '123123', '123', 'viet nam', 0, '1231', 3, 'nhan vien', NULL, '/resources/assets/images/profile/user-thumb.jpg', 1, NULL, '2017-09-07 01:45:36', '2017-09-11 19:23:21'),
(5, 'user 2', 'user2', '$2y$10$HvQTBueYWU/OWb5oyzqIAuNspxx96jY0J1lumxe0pGIYp7d7O33t6', 'user2@gmail.com', '112312', '12312', 'vung tau', 0, '123123', 1, 'nhan vien', NULL, '/resources/assets/images/profile/user-thumb.jpg', 1, NULL, '2017-09-11 19:24:15', '2017-09-11 19:24:15'),
(6, 'user 3', 'user3', '$2y$10$s0cP1vJmA1p.EsGw.a8T6.x0ZihZ8pSOEK6H7IuyJKa0C2dzEpB7W', 'user3@gmail.com', '112312', '12312', 'vung tau', 0, '123123', 2, 'nhan vien', NULL, '/resources/assets/images/profile/user-thumb.jpg', 1, NULL, '2017-09-11 19:25:40', '2017-09-11 19:25:40'),
(7, 'user 4', 'user4', '$2y$10$dGPc2j0RGQSFYopETVmdyOAuYl8pP43e3z6N3Rf32WNw4Ua3AXCqm', 'user4@gmail.com', '112312', '12312', 'vung tau', 0, '123123', 4, 'nhan vien', NULL, '/resources/assets/images/profile/user-thumb.jpg', 1, NULL, '2017-09-11 19:26:04', '2017-09-11 19:26:04'),
(8, 'user 5', 'user5', '$2y$10$eAQ0IaEQbXaP4OZEUvpzxeUcAmoETHnWAn/MEwrf0Ut/PuAqZQiOO', 'user5@gmail.com', '112312', '12312', 'vung tau', 0, '123123', 5, 'nhan vien', NULL, '/resources/assets/images/profile/user-thumb.jpg', 1, NULL, '2017-09-11 19:26:17', '2017-09-11 19:26:17'),
(9, 'user 6', 'user6', '$2y$10$8bESC8ZJgCM8STynbjVWXeg9/WbqjOBUi.LnOnVyt7FnlACQ3T182', 'user6@gmail.com', '112312', '12312', 'vung tau', 0, '123123', 3, 'nhan vien', NULL, '/resources/assets/images/profile/user-thumb.jpg', 1, NULL, '2017-09-11 19:26:26', '2017-09-11 19:26:26'),
(10, 'user 7', 'user7', '$2y$10$ZykXZypKCr.t4Z3JNOxUA.GIvYSTejrBQXkqvWpXPxXs00Lzec9bC', 'user7@gmail.com', '112312', '12312', 'vung tau', 0, '123123', 4, 'nhan vien', NULL, '/resources/assets/images/profile/user-thumb.jpg', 1, NULL, '2017-09-11 19:26:40', '2017-09-11 19:26:40'),
(11, 'user 8', 'user8', '$2y$10$AQG/gHC2HXeeq2wyU8v4.uPR1X.f.OlXsuQ8TgQ9EueJeiwNRa9j6', 'user8@gmail.com', '112312', '12312', 'vung tau', 0, '123123', 7, 'nhan vien', NULL, '/resources/assets/images/profile/user-thumb.jpg', 1, NULL, '2017-09-11 19:26:51', '2017-09-11 19:26:51'),
(12, 'user 9', 'user9', '$2y$10$deM14eIttTpXaTl0HHbPDOhY9i47KFnyb14C1qoYk1oMpGFuZrJ62', 'user9@gmail.com', '112312', '12312', 'vung tau', 0, '123123', 6, 'nhan vien', NULL, '/resources/assets/images/profile/user-thumb.jpg', 1, NULL, '2017-09-11 19:27:00', '2017-09-11 19:27:00'),
(13, 'user 10', 'user10', '$2y$10$ludUvmMxCHC5TaVzqfKbAOCkqN3EZkumUIWGvC4JkG22EddMqQELm', 'user10@gmail.com', '112312', '12312', 'vung tau', 0, '123123', 9, 'nhan vien', NULL, '/resources/assets/images/profile/user-thumb.jpg', 1, NULL, '2017-09-11 19:27:13', '2017-09-11 19:27:13'),
(14, 'user 11', 'user11', '$2y$10$YLeE9aQJVuKjVVCtmm2D.OlnWBbngRtu7QSVi8eCZVJPXLsFdBQdi', 'user11@gmail.com', '112312', '12312', 'vung tau', 0, '123123', 8, 'nhan vien', NULL, '/resources/assets/images/profile/user-thumb.jpg', 1, NULL, '2017-09-11 19:27:20', '2017-09-11 19:27:20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_doc_cate`
--

CREATE TABLE `user_doc_cate` (
  `user_id` int(11) NOT NULL COMMENT 'user number',
  `doc_cate_id` int(11) NOT NULL COMMENT 'document cate number',
  `upload_auth` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'upload authorities - 1-upload 0-not upload',
  `active` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'active status 1-active 0-inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user_doc_cate`
--

INSERT INTO `user_doc_cate` (`user_id`, `doc_cate_id`, `upload_auth`, `active`, `created_at`, `updated_at`) VALUES
(2, 1, 1, 1, NULL, '2017-09-06 21:41:28'),
(2, 2, 1, 1, NULL, '2017-09-07 20:58:09'),
(2, 3, 1, 1, NULL, '2017-09-07 20:58:04'),
(2, 4, 1, 1, NULL, '2017-09-07 20:58:07'),
(3, 9, 1, 1, NULL, '2017-09-06 21:54:09'),
(3, 12, 1, 1, NULL, '2017-09-06 21:54:10'),
(3, 13, 0, 1, NULL, '2017-09-07 21:48:10'),
(3, 8, 0, 1, NULL, NULL),
(2, 16, 0, 1, NULL, NULL),
(11, 11, 0, 1, NULL, NULL),
(11, 12, 0, 1, NULL, NULL),
(11, 13, 0, 1, NULL, NULL),
(11, 14, 0, 1, NULL, NULL),
(11, 15, 0, 1, NULL, NULL),
(11, 16, 0, 1, NULL, NULL),
(12, 16, 0, 1, NULL, NULL),
(3, 5, 1, 1, NULL, NULL),
(2, 5, 1, 1, NULL, NULL),
(2, 6, 1, 1, NULL, NULL),
(2, 7, 1, 1, NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `document_cate`
--
ALTER TABLE `document_cate`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `menu_document_cate`
--
ALTER TABLE `menu_document_cate`
  ADD KEY `menu_document_cate_index` (`menu_id`,`doc_cate_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `picture_detail`
--
ALTER TABLE `picture_detail`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `picture_library`
--
ALTER TABLE `picture_library`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sessions`
--
ALTER TABLE `sessions`
  ADD UNIQUE KEY `sessions_id_unique` (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `user_doc_cate`
--
ALTER TABLE `user_doc_cate`
  ADD KEY `user_doc_cate_index` (`user_id`,`doc_cate_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `company`
--
ALTER TABLE `company`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'company number', AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `department`
--
ALTER TABLE `department`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'department number', AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT cho bảng `document`
--
ALTER TABLE `document`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'document id', AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT cho bảng `document_cate`
--
ALTER TABLE `document_cate`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'document cate number', AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT cho bảng `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'menu number', AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT cho bảng `picture_detail`
--
ALTER TABLE `picture_detail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'picture detail id', AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT cho bảng `picture_library`
--
ALTER TABLE `picture_library`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'picture post id', AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
