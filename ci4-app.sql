-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2025 at 06:15 PM
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
-- Database: `ci4-app`
--

-- --------------------------------------------------------

--
-- Table structure for table `carousel`
--

CREATE TABLE `carousel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `carousel_title` varchar(255) NOT NULL,
  `carousel_slug` varchar(255) NOT NULL,
  `carousel_status` int(10) NOT NULL,
  `carousel_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carousel`
--

INSERT INTO `carousel` (`id`, `carousel_title`, `carousel_slug`, `carousel_status`, `carousel_image`, `created_at`, `updated_at`) VALUES
(2, 'Slide Test 1', 'slide-test-1', 0, 'slide-test-1-qYpJJr.png', '2020-04-25 16:21:45', '2020-04-25 16:21:45'),
(3, 'Carousel 2', 'carousel-2', 0, 'carousel-2-MiX7vR.jpg', '2020-04-26 15:02:38', '2024-11-29 10:06:25'),
(4, 'Liên Hệ', 'lien-he', 0, 'lin-h-48jlnD.jpg', '2020-06-29 15:24:00', '2020-06-29 15:24:00'),
(5, 'Bảo Nam 2', 'bao-nam-2', 1, 'bao-nam-2-ho7dJs.jpg', '2024-11-28 09:51:45', '2024-11-29 10:06:02'),
(6, 'ản moisws nhat', 'an-moisws-nhat', 0, 'an-moisws-nhat-37m9S0.png', '2024-11-28 10:02:02', '2024-11-28 10:02:02'),
(7, '02 222', '02-222', 1, '02-222-U9qdcK.jpg', '2024-11-28 10:04:14', '2024-11-29 10:04:53'),
(8, 'Bảo Nam', 'bao-nam', 1, 'bao-nam-yhp7D5.jpg', '2024-11-29 10:09:15', '2024-11-29 10:09:15');

-- --------------------------------------------------------

--
-- Table structure for table `cate`
--

CREATE TABLE `cate` (
  `id` int(10) NOT NULL,
  `cate_name` varchar(255) NOT NULL,
  `cate_slug` varchar(255) NOT NULL,
  `cate_parent_id` int(10) NOT NULL,
  `cate_status` int(11) NOT NULL,
  `cate_type` varchar(50) DEFAULT NULL,
  `cate_meta_desc` varchar(255) NOT NULL,
  `cate_meta_key` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cate`
--

INSERT INTO `cate` (`id`, `cate_name`, `cate_slug`, `cate_parent_id`, `cate_status`, `cate_type`, `cate_meta_desc`, `cate_meta_key`, `created_at`, `updated_at`, `deleted_at`) VALUES
(29, 'Dịch Vụ', 'dich-vu', 0, 0, 'normal', 'Dịch Vụ vá vỏ thành công bình dương, vá vỏ nhanh, an toàn hiệu quả, chi phí thấp', 'Dịch Vụ vá vỏ thành công bình dương, vá vỏ nhanh, an toàn hiệu quả, chi phí thấp', '2025-03-14 09:59:30', '2025-03-14 09:59:30', NULL),
(30, 'Sản Phẩm', 'san-pham', 0, 0, 'normal', 'Sản Phẩm vá vỏ thành công vá vỏ Nam Lâm 68 Bình Dương Đa Dạng về chức năng hiệu quả sử dụng, độ bền cao', 'Sản Phẩm vá vỏ thành công vá vỏ Nam Lâm 68 Bình Dương Đa Dạng về chức năng hiệu quả sử dụng, độ bền cao', '2025-03-14 10:00:55', '2025-03-14 10:00:55', NULL),
(31, 'Vá Vỏ Xe Lưu Động', 'va-vo-xe-luu-dong', 29, 1, 'normal', 'Vá Vỏ Xe Lưu Động Nam Lâm 68', 'Vá Vỏ Xe Lưu Động Nam Lâm 68', '2025-03-14 10:01:41', '2025-03-14 10:03:25', NULL),
(32, 'Mua Bán Vỏ Xe', 'mua-ban-vo-xe', 30, 0, 'normal', 'Mua Bán Vỏ Xe', 'Mua Bán Vỏ Xe', '2025-03-14 10:02:13', '2025-03-14 10:02:13', NULL),
(33, 'Tin Tức', 'tin-tuc', 0, 0, 'blog', 'Tin Tức kiến thức về vỏ xe, vá vỏ đời mới, chi tiết sản phẩm về vỏ xe', 'Tin Tức kiến thức về vỏ xe, vá vỏ đời mới, chi tiết sản phẩm về vỏ xe', '2025-03-14 10:02:54', '2025-03-23 08:06:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `don-hang`
--

CREATE TABLE `don-hang` (
  `id` int(11) NOT NULL,
  `order_name` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `order_phone` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `order_adress` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `order_content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `order_total` varchar(30) DEFAULT NULL,
  `checked_order` int(3) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery_image`
--

CREATE TABLE `gallery_image` (
  `id` int(11) NOT NULL,
  `gallery_type_id` int(10) DEFAULT NULL,
  `gallery_type_name` varchar(300) DEFAULT NULL,
  `gallery_type_slug` varchar(300) DEFAULT NULL,
  `gallery_title` varchar(300) DEFAULT NULL,
  `gallery_alias` varchar(300) DEFAULT NULL,
  `gallery_title_slug` varchar(300) DEFAULT NULL,
  `gallery_topic` varchar(100) DEFAULT NULL,
  `gallery_topic_slug` varchar(100) DEFAULT NULL,
  `gallery_bg_topic` varchar(50) DEFAULT NULL,
  `gallery_cate_id` int(3) DEFAULT NULL,
  `gallery_cate_slug` varchar(50) DEFAULT NULL,
  `gallery_account` varchar(100) DEFAULT NULL,
  `gallery_image` varchar(500) DEFAULT NULL,
  `gallery_img_download_times` int(100) DEFAULT NULL,
  `gallery_post_url` varchar(250) DEFAULT NULL,
  `gallery_link_file_origin` varchar(1000) DEFAULT NULL,
  `gallery_link_file_short` varchar(200) DEFAULT NULL,
  `gallery_type_file` varchar(20) DEFAULT NULL,
  `gallery_post_id` int(20) DEFAULT NULL,
  `gallery_view` int(10) DEFAULT NULL,
  `gallery_compress_times` int(5) DEFAULT NULL,
  `gallery_meta_key` varchar(300) DEFAULT NULL,
  `gallery_meta_desc` varchar(300) DEFAULT NULL,
  `time_view_newest` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery_type`
--

CREATE TABLE `gallery_type` (
  `id` int(11) NOT NULL,
  `gallery_type_name` varchar(100) DEFAULT NULL,
  `gallery_type_slug` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home_page_info`
--

CREATE TABLE `home_page_info` (
  `id` int(2) NOT NULL,
  `home_title` varchar(50) NOT NULL,
  `home_info` varchar(200) NOT NULL,
  `home_icon` varchar(200) NOT NULL,
  `home_page_image` varchar(250) DEFAULT NULL,
  `home_page_image_status` int(2) DEFAULT NULL,
  `home_order` int(2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `image_tinycme`
--

CREATE TABLE `image_tinycme` (
  `id` int(11) NOT NULL,
  `image_TinyCME_name` varchar(1000) DEFAULT NULL,
  `image_TinyCME_status` int(2) DEFAULT NULL,
  `image_size_original` varchar(20) DEFAULT NULL,
  `image_size_compressed` varchar(20) DEFAULT NULL,
  `image_size_compressed_2` varchar(20) DEFAULT NULL,
  `image_size_compressed_3` varchar(20) DEFAULT NULL,
  `image_folder` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `page_name` varchar(255) NOT NULL,
  `page_slug` varchar(255) NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `page_image` varchar(255) NOT NULL,
  `page_favicon` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `page_status` int(11) NOT NULL,
  `page_home_content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `page_content` text NOT NULL,
  `page_view` int(10) DEFAULT NULL,
  `page_show` int(3) DEFAULT NULL,
  `facebook` varchar(200) DEFAULT NULL,
  `youtube` varchar(200) DEFAULT NULL,
  `twitter` varchar(200) DEFAULT NULL,
  `pinterest` varchar(255) DEFAULT NULL,
  `name_co` varchar(200) DEFAULT NULL,
  `tax_code` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `address` varchar(400) DEFAULT NULL,
  `maps` varchar(300) DEFAULT NULL,
  `f_app` varchar(100) DEFAULT NULL,
  `g_app` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `google_image_maps` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `page_meta_key` varchar(255) NOT NULL,
  `page_meta_desc` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `user_id`, `page_name`, `page_slug`, `page_title`, `page_image`, `page_favicon`, `page_status`, `page_home_content`, `page_content`, `page_view`, `page_show`, `facebook`, `youtube`, `twitter`, `pinterest`, `name_co`, `tax_code`, `email`, `address`, `maps`, `f_app`, `g_app`, `phone`, `google_image_maps`, `page_meta_key`, `page_meta_desc`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Trang Chủ', 'trang-chu', 'Trang Chủ Công Ty Đại Long', 'trang-chu-0oKds8QMBNptjXFk.jpg', 'favicon_trang-chu-QF8ujlY3NqzaiSbc.png', 1, 'Dịch vụ Vá vỏ lưu động Thành Công tại Bình Dương với tính tiện lợi, nhanh chóng, an toàn, giá cả thương lương, chất lượng tốt nhất, nhân viên chuyên nghiệp, nhiệt tình.\r\n\r\nVá vỏ, vá lốp, vá ruột tất cả các loại: xe hơi, xe du lịch, xe tải, xe khách, xe xúc ', '<p><span style=\"color: #ffffff;\">Chuy&ecirc;n cung cấp c&aacute;c giải ph&aacute;p in kỹ thuật số chất lượng cao, giải ph&aacute;p in offset, in c&ocirc;ng nghiệp số lượng lớn, đặc biệt c&aacute;c sản phẩm in ấn như: In bạt hiflex, in decal, in PP, v&agrave; c&aacute;c sản phẩm in Offset như in tem nh&atilde;n, in danh thiếp card visit, in h&oacute;a đơn số lượng lớn giao ngay, in gia c&ocirc;ng cho c&aacute;c c&ocirc;ng ty, đơn vị quảng c&aacute;o. Thi c&ocirc;ng kỹ thuật, cơ kh&iacute; v&agrave; c&aacute;c giải ph&aacute;p thiết kế cơ kh&iacute;</span><span style=\"color: #ffffff;\"><span style=\"font-size: 13.5pt; font-family: Arial, \'sans-serif\';\">. </span><span style=\"color: #e03e2d;\"><a style=\"color: #e03e2d;\" href=\"https://dailong.asia/\" target=\"_blank\" rel=\"noopener\"><strong><span style=\"font-size: 13.5pt; font-family: Arial, \'sans-serif\';\">DAILONG.ASIA</span></strong></a></span><span style=\"font-size: 13.5pt; font-family: Arial, \'sans-serif\';\"> l&agrave; trang web ch&iacute;nh thức của </span><strong><span style=\"font-size: 13.5pt; font-family: Arial, \'sans-serif\';\"><span style=\"color: #236fa1;\"><a style=\"color: #236fa1;\" href=\"https://dailong.asia/\" target=\"_blank\" rel=\"noopener\">C&Ocirc;NG TY TNHH CURIE VIỆT NAM</a></span>.</span></strong></span></p>\r\n<p style=\"font-variant-ligatures: normal; font-variant-caps: normal; orphans: 2; text-align: start; widows: 2; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; word-spacing: 0px;\"><span style=\"font-size: 13.5pt; font-family: Arial, \'sans-serif\'; color: #ffffff;\">Địa Chỉ: Đường N14, KP. An H&ograve;a, P. H&ograve;a Lợi, TX. Bến C&aacute;t, B&igrave;nh Dương, VN</span></p>\r\n<p style=\"font-variant-ligatures: normal; font-variant-caps: normal; orphans: 2; text-align: start; widows: 2; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; word-spacing: 0px;\"><span style=\"font-size: 13.5pt; font-family: Arial, \'sans-serif\'; color: #ffffff;\">MST: 3702594617</span></p>\r\n<p><span style=\"font-size: 13.5pt; font-family: Arial, \'sans-serif\'; color: #ffffff;\">Email:&nbsp;<span style=\"color: #e03e2d;\"><a style=\"color: #e03e2d;\" href=\"mailto:phuth.me@gmail.com\" target=\"_blank\" rel=\"noopener\">phuth.me@gmail.com</a></span></span></p>\r\n<p style=\"font-variant-ligatures: normal; font-variant-caps: normal; orphans: 2; text-align: start; widows: 2; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; word-spacing: 0px;\"><span style=\"font-size: 13.5pt; font-family: Arial, \'sans-serif\'; color: #ffffff;\">ĐT: 0974 953 600</span></p>\r\n<p style=\"font-variant-ligatures: normal; font-variant-caps: normal; orphans: 2; text-align: start; widows: 2; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; word-spacing: 0px;\"><span style=\"font-size: 13.5pt; font-family: Arial, \'sans-serif\'; color: #ffffff;\">Website:&nbsp;<span style=\"color: #e03e2d;\"><a style=\"color: #e03e2d;\" title=\"Website Curie Viet Nam Limited Company, Đường N14, Khu Phố An H&ograve;a, Thị x&atilde; Bến C&aacute;t, B&igrave;nh Dương\" href=\"https://dailong.asia/\">dailong.asia/</a></span></span></p>', 8, 1, 'https://www.facebook.com/profile.php?id=100070762602051', 'https://www.youtube.com/channel/UCSvNFyqDpZ-Jd3M7kkaAmmw', 'https://twitter.com/huu_phu', 'https://www.pinterest.com/tranhuuphu9x/', '', '', '', 'địa chỉ cụ thể', 'https://www.google.com/maps/place/Curie+Viet+Nam+Limited+Company/@11.096299,106.6651825,15z/data=!4m2!3m1!1s0x0:0xe5bc84542907690d?sa=X&ved=2ahUKEwifiZDH35z8AhUpGbcAHYymBWEQ_BJ6BAhXEAg', 'New', 'New', '0974953600', NULL, 'Trang Chủ Đại Long Asia Công TY TNHH Curie Viet Nam, cung cấp các sản phẩm về in và vật tư ngành in, mực in giấy in, decal bạt hiflex, in offset, hóa đơn nhanh', 'Trang Chủ Đại Long Asia Công TY TNHH Curie Viet Nam, cung cấp các sản phẩm về in và vật tư ngành in, mực in giấy in, decal bạt hiflex, in offset, hóa đơn nhanh', '2022-12-23 23:13:14', '2025-01-06 09:35:36');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'role-list', 'web', '2020-04-19 06:43:01', '2020-04-19 06:43:01'),
(2, 'role-create', 'web', '2020-04-19 06:43:01', '2020-04-19 06:43:01'),
(3, 'role-edit', 'web', '2020-04-19 06:43:01', '2020-04-19 06:43:01'),
(4, 'role-delete', 'web', '2020-04-19 06:43:01', '2020-04-19 06:43:01'),
(5, 'post-list', 'web', '2020-04-19 06:43:01', '2020-04-19 06:43:01'),
(6, 'post-create', 'web', '2020-04-19 06:43:01', '2020-04-19 06:43:01'),
(7, 'post-edit', 'web', '2020-04-19 06:43:01', '2020-04-19 06:43:01'),
(8, 'post-delete', 'web', '2020-04-19 06:43:01', '2020-04-19 06:43:01');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(10) NOT NULL,
  `post_cate_id` int(10) NOT NULL,
  `post_cate_name` varchar(100) DEFAULT NULL,
  `post_cate_slug` varchar(100) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_title_slug` varchar(300) DEFAULT NULL,
  `post_slug` varchar(255) DEFAULT NULL,
  `post_intro` varchar(255) NOT NULL,
  `post_image` varchar(255) NOT NULL,
  `post_background` varchar(500) DEFAULT NULL,
  `post_status` varchar(20) NOT NULL,
  `post_finish` varchar(10) DEFAULT NULL,
  `post_featured` int(4) NOT NULL,
  `post_content` mediumtext NOT NULL,
  `post_price` double DEFAULT NULL,
  `post_sale` double DEFAULT NULL,
  `post_view` int(10) NOT NULL,
  `post_show` varchar(2) DEFAULT NULL,
  `post_meta_desc` varchar(255) NOT NULL,
  `post_meta_key` varchar(255) NOT NULL,
  `time_view_newest` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `post_cate_id`, `post_cate_name`, `post_cate_slug`, `post_title`, `post_title_slug`, `post_slug`, `post_intro`, `post_image`, `post_background`, `post_status`, `post_finish`, `post_featured`, `post_content`, `post_price`, `post_sale`, `post_view`, `post_show`, `post_meta_desc`, `post_meta_key`, `time_view_newest`, `created_at`, `updated_at`, `deleted_at`) VALUES
(89, 31, 'Vá Vỏ Xe Lưu Động', 'va-vo-xe-luu-dong', 'Vá Vỏ Xe Lưu Động tại Bình Dương', 'Vá Vỏ Xe Lưu Động tại Bình Dương', 'va-vo-xe-luu-dong-tai-binh-duong', 'Vá vỏ tại nơi của khách hàng hoặc nơi xe đang có vấn đề', 'thay-va-vo-lop-o-to-xe-hoi-gia-re-tot-nhat-o-tai-hcm.jpg', 'va-vo-xe-luu-dong-tai-binh-duong-obvckt.jpg', 'normal', 'finish', 1, '<p>V&aacute; vỏ xe lưu động tại Nam L&acirc;m 68 sẽ đ&aacute;p ứng c&aacute;c y&ecirc;u cầu về chất lượng v&agrave; thời gian</p>\r\n<p><strong>Về mặt chất lượng</strong></p>\r\n<p>- Cam kết vỏ xe đạt ti&ecirc;u chuẩn v&agrave; ng&agrave;y sản xuất mới nhất</p>\r\n<p>- Sử dụng phương tiện kỹ thuật ti&ecirc;n tiến đảm bảo kh&aacute;ch h&agrave;ng h&agrave;i l&ograve;ng trong qu&aacute; tr&igrave;nh ch&uacute;ng t&ocirc;i t&aacute;c nghiệp</p>\r\n<p>- Đội ngũ thi c&ocirc;ng c&ocirc;ng sửa chữa v&aacute; vỏ l&agrave;nh nghề c&oacute; nhiều năm kinh nghiệm</p>\r\n<p>- Cam kết lượng cao nhất đối với sản phẩm</p>\r\n<p>Về mặt thời gian</p>\r\n<p>- Đối với kh&aacute;ch h&agrave;ng gặp sự cố tại khu vực B&igrave;nh Dương th&igrave; ch&uacute;ng t&ocirc;i sẽ c&oacute; mặt trong v&ograve;ng 30 ph&uacute;t khi nhận được th&ocirc;ng tin</p>\r\n<p>- Thi c&ocirc;ng nhanh nhất trong v&ograve;ng 30 ph&uacute;t cho 1 lần sửa chữa thay thế</p>\r\n<ul>\r\n<li>Cam kết thời gian sử dụng tối thiểu đối với vỏ xe theo quy định của cơ sở</li>\r\n<li>\r\n<p>Dịch&nbsp;vụ&nbsp;<strong><em>V&aacute; vỏ lưu động tại B&igrave;nh Dương</em></strong> với cam kết sự tiện lợi, nhanh ch&oacute;ng khi tiếp nhận th&ocirc;ng tin, an to&agrave;n khi sử dụng, gi&aacute; cả cạnh tranh, đ&aacute;p ứng chất lượng tốt nhất, nh&acirc;n vi&ecirc;n chuy&ecirc;n nghiệp, vui vẻ h&ograve;a đồng khi bạn sử dụng dịch vụ của ch&uacute;ng t&ocirc;i.</p>\r\n<p>V&aacute; vỏ, v&aacute; lốp, v&aacute; ruột tất cả c&aacute;c loại phương tiện: xe hơi 4 - 7 - 16 - 32... chỗ, c&aacute;c loại xe du lịch, xe tải, xe ben, xe kh&aacute;ch, xe x&uacute;c lật, xe chở r&aacute;c, xe h&uacute;t bồn cầu, xe lu, xe 3 g&aacute;c, c&aacute;c loại xe cơ giới.</p>\r\n<p>C&aacute;c dịch vụ như sau: thay b&aacute;nh sơ cua, thay lốp sơ cua, thay b&aacute;nh lốp dự ph&ograve;ng, cứu hộ lốp c&aacute;c h&atilde;ng: Toyota, xe Honda, xe Acura, xe Mitsubishi, Porche, xe Lexus, xe Suzuki, xe Mazda, xe KIA, xe Chevrolet, xe Hyundai, xe Mercedes, xe BMW, xe Audi,&hellip;. d&ograve;ng xe 4 chỗ, xe 5 chỗ, xe 7 chỗ, xe 9 chỗ, xe 12 chỗ, xe 16 chỗ, xe 29 chỗ, xe 32 chỗ v&agrave; c&aacute;c loại xe c&oacute; chỗ ngồi nhiều hơn 32 chỗ....</p>\r\n<p>Cam kết thay lốp xe mới, thay vỏ xe mới chinh h&atilde;ng, thay ruột xe c&aacute;c thương hiệu: Lốp xe &ocirc; t&ocirc; Dunlop, lốp xe &ocirc; t&ocirc; Yokohama, lốp xe &ocirc; t&ocirc; Continental, lốp xe &ocirc; t&ocirc; Michelin,... hoặc c&aacute;c loại vỏ lốp ruột xe kh&aacute;ch h&agrave;ng y&ecirc;u cầu</p>\r\n<p>C&aacute;m ơn c&aacute;c bạn đ&atilde; đọc b&agrave;i</p>\r\n<p>Để li&ecirc;n hệ tới ch&uacute;ng t&ocirc;i vui l&ograve;ng li&ecirc;n hệ theo th&ocirc;ng tin</p>\r\n<p>ĐT:</p>\r\n</li>\r\n</ul>', 0, 0, 1, '1', 'vá vỏ lưu động thành công nam lâm 68 mang lại dịch vụ hài lòng với mọi khách hàng, thay mới bánh lốp vỏ xe nhanh nhất, giá cả phải chăng, của nhiều thương hiệu theo yêu cầu, thay vỏ xe ruột xe gần đây', 'vá vỏ lưu động thành công nam lâm 68 mang lại dịch vụ hài lòng với mọi khách hàng, thay mới bánh lốp vỏ xe nhanh nhất, giá cả phải chăng, của nhiều thương hiệu theo yêu cầu, thay vỏ xe ruột xe gần đây', '2025-03-22 20:06:40', '2025-03-14 10:21:29', '2025-04-27 10:27:13', NULL),
(90, 33, 'Tin Tức', 'tin-tuc', 'Các nguyên tắc thay lốp xe ô tô nhanh chóng và hiệu quả', '5 nguyên tắc thay lốp xe ô tô nhanh chóng và hiệu quả', '5-nguyen-tac-thay-lop-xe-o-to-nhanh-chong-va-hieu-qua', 'Nguyên tắc áp dụng để việc thay thế một cách dễ dàng hơn với 5 bước đơn giản', 'thay vo xe bang 5 buoc.png', NULL, 'normal', 'finish', 0, '<p><em>Xe bị xịt lốp hay nổ lốp giữa đường l&agrave; t&igrave;nh huống bất ngờ dễ xảy ra, do đ&oacute;, người l&aacute;i xe cần biết những nguy&ecirc;n tắc thay lốp dự ph&ograve;ng... Dưới đ&acirc;y l&agrave; những c&aacute;ch gi&uacute;p cho bạn thực hiện c&ocirc;ng việc nhanh hơn, cũng như ch&uacute; &yacute; tr&aacute;nh được c&aacute;c rủi ro xảy ra trong qu&aacute; tr&igrave;nh thay.</em><br /><em>Với 5 bước được tr&igrave;nh b&agrave;y chi tiết hi vọng c&aacute;c bạn c&oacute; thể tự xử l&yacute; t&igrave;nh huống.</em></p>\r\n<h3><strong>1. Tập trung v&agrave; di chuyển xe đến nơi hợp l&yacute;</strong></h3>\r\n<p>Khi ph&aacute;t hiện lốp xe bị hư hỏng cần thay thế cần thực hiện c&aacute;c thao sau: Bật đ&egrave;n xi nhan để di chuyển v&agrave;o m&eacute;p đường hoặc nơi cho ph&eacute;p dừng đỗ, quan s&aacute;t v&agrave; t&igrave;m chỗ đỗ xe hợp l&yacute;; Hạn chế đậu xe những nơi g&acirc;y ra t&igrave;nh trạng kh&oacute; khăn như c&aacute;c đoạn cua, dốc hoặc khu vực đường nghi&ecirc;ng, hoặc nơi kh&ocirc;ng chắc chắn...&nbsp;</p>\r\n<p>Khi xe đ&atilde; dừng hẳn cần bật đ&egrave;n&nbsp;cảnh b&aacute;o&nbsp;khẩn cấp để b&aacute;o hiệu từ xa cho người kh&aacute;c; cho cần số về vị tr&iacute; P, k&eacute;o thắng tay.</p>\r\n<p>Với những đoạn đường vị tr&iacute; đậu xe s&aacute;t l&ograve;ng đường n&ecirc;n đặt cảnh b&aacute;o nguy hiểm, hoặc c&aacute;c vật thể cảnh b&aacute;o ở một khoảng c&aacute;ch đủ xa với xe để đảm bảm an to&agrave;n.</p>\r\n<p>&nbsp;<strong>2. Ch&egrave;n b&aacute;nh, kh&oacute;a cửa, bật đ&egrave;n cảnh b&aacute;o nguy hiểm</strong></p>\r\n<p>Khi thay lốp dự ph&ograve;ng, t&agrave;i xế cần đỗ xe ở nơi bằng phẳng nhưng vẫn lưu &yacute; ch&egrave;n b&aacute;nh để tr&aacute;nh xe kh&ocirc;ng dịch chuyển khi thao t&aacute;c.</p>\r\n<p>Bật đ&egrave;n cảnh b&aacute;o hazard hoặc nếu c&oacute; biển b&aacute;o nguy hiểm th&igrave; đặt c&aacute;ch xa xe v&agrave;i chục m&eacute;t khi phải đỗ ngo&agrave;i đường, th&ocirc;ng b&aacute;o cho c&aacute;c phương tiện chủ động giảm tốc độ v&agrave; ch&uacute; &yacute; tay l&aacute;i. Cuối c&ugrave;ng, kh&oacute;a hết c&aacute;c cửa xe v&igrave; khi chăm ch&uacute; thay lốp, rất c&oacute; thể kẻ gian lợi dụng lấy cắp đồ đạc tr&ecirc;n xe.</p>\r\n<p><strong>3. Vị tr&iacute; đặt k&iacute;ch n&acirc;ng xe</strong></p>\r\n<p>Để c&oacute; thể n&acirc;ng b&aacute;nh xe l&ecirc;n cao phục vụ cho việc th&aacute;o b&aacute;nh ra khỏi trục th&igrave; k&iacute;ch phải được đặt tr&uacute;ng phần khung xe chắc chắn. Nếu bạn đặt k&iacute;ch v&agrave;o phần vỏ xe bằng nhựa sẽ khiến cho phần vỏ nhựa n&agrave;y bị dập, g&atilde;y m&agrave; kh&ocirc;ng n&acirc;ng được xe l&ecirc;n.</p>\r\n<p>Th&ocirc;ng thường, sau b&aacute;nh trước hoặc b&aacute;nh sau khoảng 15-20 cm tr&ecirc;n khung xe được đ&aacute;nh dấu l&agrave; nơi đặt k&iacute;ch. Bạn c&oacute; thể thấy vị tr&iacute; n&agrave;y qua quan s&aacute;t bằng mắt hoặc sờ bằng tay. Bạn cũng c&oacute; thể xem th&ecirc;m vị tr&iacute; cần đặt k&iacute;ch trong s&aacute;ch hướng dẫn.</p>\r\n<h3><strong>4. Th&aacute;o ốc theo đường ch&eacute;o</strong></h3>\r\n<p>Quy tắc khi th&aacute;o, lắp ốc b&aacute;nh xe l&agrave; theo đường ch&eacute;o tức kiểu c&aacute;nh sao như trong ảnh tr&ecirc;n, kh&ocirc;ng xoay thứ tự theo kim đồng. C&aacute;ch th&aacute;o hoặc lắp ốc theo đường ch&eacute;o sẽ gi&uacute;p b&aacute;nh xe kh&ocirc;ng bị lệch về một b&ecirc;n n&agrave;o đ&oacute; m&agrave; v&agrave;o, ra đều đặn ở mọi hướng.</p>\r\n<h3><strong>5. Thay thế b&aacute;nh bằng b&aacute;nh xe sơ cua</strong></h3>\r\n<p>Nếu c&oacute; b&aacute;nh sơ cua th&igrave; sau khi thay thế b&aacute;nh bị lỗi th&igrave; lắp lại theo bước 4 đ&atilde; hướng d&acirc;n</p>\r\n<p><em><strong>Ch&uacute;c c&aacute;c bạn th&agrave;nh c&ocirc;ng!</strong></em></p>\r\n<p><em>Nếu trường hợp c&aacute;c bạn kh&ocirc;ng c&oacute; c&ocirc;ng cụ dụng cụ hoặc để đảm bảo an to&agrave;n khi sử dụng th&igrave; c&aacute;c bạn c&oacute; thể lựa chọn li&ecirc;n hệ với ch&uacute;ng t&ocirc;i để xử l&yacute; với chi ph&iacute; v&agrave; thời gian hợp l&yacute; nhất.</em></p>\r\n<p><span style=\"text-decoration: underline;\"><strong><em>C&aacute;m ơn c&aacute;c bạn đ&atilde; đọc b&agrave;i v&agrave; gh&eacute; thăm trang web của ch&uacute;ng t&ocirc;i.</em></strong></span></p>', NULL, NULL, 0, '1', 'với 5 bước đơn giản hi vọng các bạn có thể thay vỏ xe tạm thời để tiếp tục hành trình, chúc các bạn thành công', 'với 5 bước đơn giản hi vọng các bạn có thể thay vỏ xe tạm thời để tiếp tục hành trình, chúc các bạn thành công', NULL, '2025-03-14 10:36:15', '2025-04-27 10:28:00', NULL),
(91, 33, 'Tin Tức', 'tin-tuc', 'Vá vỏ xe lưu động Bình Dương', 'Vá vỏ xe lưu động Bình Dương tận nơi', 'va-vo-xe-luu-dong-binh-duong-tan-noi', 'Chúng tôi là dịch vụ chuyên vá vỏ, thay lốp dự phòng, kéo rơ móc, và hỗ trợ cứu hộ xe oto, tải. Kéo ro mooc xe, và kích bình ắc quy tại chỗ giá rẻ và nhanh chón', 'va vo xe luu dong.jpg', NULL, 'normal', 'finish', 0, '<p>V&aacute; vỏ xe lưu động tận nơi ở tại s&oacute;ng thần 550, quận 2, quận 9, đồng nai, thủ đức, hcm, ph&uacute; h&ograve;a, ph&uacute; lợi, thủ dầu một, b&igrave;nh dương nhanh v&agrave; gi&aacute; rẻ. Ch&uacute;ng t&ocirc;i l&agrave; dịch vụ chuy&ecirc;n v&aacute; vỏ, thay lốp dự ph&ograve;ng, k&eacute;o rơ m&oacute;c, v&agrave; hỗ trợ cứu hộ xe oto, tải. K&eacute;o ro mooc xe, v&agrave; k&iacute;ch b&igrave;nh ắc quy tại chỗ gi&aacute; rẻ v&agrave; nhanh ch&oacute;ng. Li&ecirc;n hệ ngay cho ch&uacute;ng t&ocirc;i để nhận được hỗ trợ sớm nhất.</p>\r\n<h2>V&aacute; vỏ xe lưu động l&agrave; g&igrave;?</h2>\r\n<p>V&aacute; vỏ xe lưu động l&agrave; một dịch vụ nhanh ch&oacute;ng v&agrave; tiện lợi trong ng&agrave;nh &ocirc; t&ocirc;, xe hơi. Khi xe gặp sự cố như lốp bị thủng hoặc hỏng, kh&ocirc;ng cần phải tự di chuyển xe đến cửa h&agrave;ng sửa chữa. Thay v&agrave;o đ&oacute;, kh&aacute;ch h&agrave;ng c&oacute; thể y&ecirc;u cầu dịch vụ tại bất kỳ địa điểm n&agrave;o. Đội ngũ kỹ thuật vi&ecirc;n thực hiện v&aacute; vỏ tại chỗ với c&aacute;c c&ocirc;ng cụ v&agrave; vật tư cần thiết. Dịch vụ n&agrave;y gi&uacute;p tiết kiệm thời gian v&agrave; c&ocirc;ng sức của kh&aacute;ch h&agrave;ng. Hơn nữa, dịch vụ v&aacute; vỏ xe lưu động thường cung cấp c&aacute;c phụ t&ugrave;ng, linh kiện v&agrave; lốp ch&iacute;nh h&atilde;ng để đảm bảo chất lượng v&agrave; hiệu suất tốt nhất cho xe.</p>\r\n<h2>C&oacute; bao nhi&ecirc;u loại vỏ xe thường được v&aacute; vỏ xe lưu động tận nơi?</h2>\r\n<p>Ch&uacute;ng t&ocirc;i đ&aacute;p ứng mọi nhu cầu v&agrave; d&ograve;ng xe, đảm bảo xe hoạt động tốt v&agrave; an to&agrave;n. Ch&uacute;ng t&ocirc;i cung cấp đa dạng c&aacute;c loại vỏ, lốp xe như:</p>\r\n<ol>\r\n<li>Nhận cứu hộ k&iacute;ch b&igrave;nh, v&aacute; vỏ xe lưu động, thay lốp,&hellip; vỏ xe &ocirc; t&ocirc;.</li>\r\n<li>Nhận cứu hộ k&iacute;ch b&igrave;nh, v&aacute; vỏ xe lưu động, thay lốp,&hellip; vỏ xe tải v&agrave; xe bu&yacute;t.</li>\r\n<li>Nhận cứu hộ k&iacute;ch b&igrave;nh, v&aacute; vỏ xe lưu động, thay lốp,&hellip; vỏ xe c&ocirc;ng n&ocirc;ng.</li>\r\n<li>Nhận cứu hộ k&iacute;ch b&igrave;nh, v&aacute; vỏ xe lưu động, thay lốp,&hellip; vỏ xe địa h&igrave;nh.</li>\r\n</ol>\r\n<p>Dịch vụ ch&uacute;ng t&ocirc;i gi&uacute;p bạn lựa chọn ph&ugrave; hợp với nhu cầu sử dụng. Đồng thời đảm bảo an to&agrave;n v&agrave; hiệu suất tối ưu cho xe của bạn.</p>\r\n<h2>Lợi &iacute;ch khi lựa chọn ch&uacute;ng t&ocirc;i?</h2>\r\n<p>Dịch vụ v&aacute; vỏ xe lưu động tận nơi của ch&uacute;ng t&ocirc;i l&agrave; lựa chọn tốt với nhiều lợi &iacute;ch:</p>\r\n<ol>\r\n<li>Tiện lợi: Kh&aacute;ch h&agrave;ng kh&ocirc;ng cần di chuyển xe đến cửa h&agrave;ng, dịch vụ tận nơi gi&uacute;p tiết kiệm thời gian v&agrave; c&ocirc;ng sức.</li>\r\n<li>Linh hoạt: Kh&aacute;ch h&agrave;ng c&oacute; thể y&ecirc;u cầu dịch vụ ở bất kỳ địa điểm n&agrave;o, từ nh&agrave; ri&ecirc;ng đến nơi l&agrave;m việc.</li>\r\n<li>Chất lượng: Dịch vụ cung cấp phụ t&ugrave;ng, linh kiện v&agrave; lốp ch&iacute;nh h&atilde;ng đảm bảo chất lượng v&agrave; đ&aacute;ng tin cậy.</li>\r\n<li>Tiết kiệm chi ph&iacute;: Gi&aacute; cả hợp l&yacute; v&agrave; dịch vụ di chuyển nhanh ch&oacute;ng gi&uacute;p tiết kiệm chi ph&iacute; bảo dưỡng xe.</li>\r\n<li>Đội ngũ thợ chuy&ecirc;n nghiệp: Được đ&agrave;o tạo nhiệt t&igrave;nh v&agrave; tay nghề cao, đảm bảo c&ocirc;ng việc được thực hiện ch&iacute;nh x&aacute;c v&agrave; tin cậy.</li>\r\n<li>Lốp ch&iacute;nh h&atilde;ng: Chỉ cung cấp lốp xe chất lượng cao từ c&aacute;c thương hiệu uy t&iacute;n, đảm bảo độ bền v&agrave; an to&agrave;n.</li>\r\n</ol>\r\n<p>H&atilde;y lựa chọn dịch vụ v&aacute; vỏ xe lưu động của ch&uacute;ng t&ocirc;i để trải nghiệm những lợi &iacute;ch tuyệt vời n&agrave;y v&agrave; duy tr&igrave; xe một c&aacute;ch hiệu quả v&agrave; an to&agrave;n.</p>\r\n<h2>C&aacute;c dịch vụ kh&aacute;c tại V&aacute; vỏ xe lưu động tận nơi của ch&uacute;ng t&ocirc;i</h2>\r\n<p>Ch&uacute;ng t&ocirc;i mang đến cho kh&aacute;ch h&agrave;ng những dịch vụ chất lượng v&agrave; tiện &iacute;ch nhất. Đảm bảo đồng h&agrave;nh c&ugrave;ng với b&aacute;c t&agrave;i tr&ecirc;n mọi cung đường. Tất cả mọi sự cố đ&atilde; c&oacute; ch&uacute;ng t&ocirc;i hỗ trợ bạn. Dịch vụ v&aacute; vỏ tận nơi ch&uacute;ng t&ocirc;i tự h&agrave;o cung cấp dịch vụ:</p>\r\n<ol>\r\n<li>V&aacute; vỏ xe oto, tải, bu&yacute;t, lu,&hellip;. nhanh ch&oacute;ng v&agrave; gi&aacute; tốt.</li>\r\n<li>Thay thế lốp xe, thay lốp xe dự ph&ograve;ng nhanh.</li>\r\n<li>C&acirc;n bằng v&agrave; kiểm tra lốp xe.</li>\r\n<li>Thay nhớt lưu động tận nơi tại chỗ gi&aacute; tốt nhất thị trường.</li>\r\n<li>K&eacute;o romooc, nhận cứu hộ xe, v&agrave; chở xe về gara.</li>\r\n<li>K&iacute;ch nổ, sạc điện, k&iacute;ch b&igrave;nh ắc quy lưu động tận nơi.</li>\r\n<li>Tư vấn v&agrave; hỗ trợ kỹ thuật tại chỗ.</li>\r\n</ol>\r\n<p>Dịch vụ chuy&ecirc;n nghiệp v&agrave; tiện lợi của ch&uacute;ng t&ocirc;i đảm bảo trải nghiệm tr&ecirc;n mọi nẻo đường. Kh&ocirc;ng những vậy, trong qu&aacute; tr&igrave;nh sửa chữa ch&uacute;ng t&ocirc;i c&ograve;n n&acirc;ng cấp xe của bạn. H&atilde;y trao cho ch&uacute;ng t&ocirc;i cơ hội được phục vụ v&agrave; chia sẻ kh&oacute; khăn c&ugrave;ng bạn.</p>', NULL, NULL, 0, '1', 'Vá vỏ xe lưu động là gì? Vá vỏ xe lưu động là một dịch vụ nhanh chóng và tiện lợi trong ngành ô tô, xe hơi. Khi xe gặp sự cố như lốp bị thủng hoặc hỏng, không cần phải tự di chuyển xe đến cửa hàng sửa chữa. Thay vào đó, khách hàng có thể yêu cầu dịch vụ t', 'vá vỏ lưu động, tại sao lại là vá vỏ lưu động, dịch vụ vá vỏ tại bình dương, vá vỏ nhanh gần đây, sự cố gì thì cần gọi dịch vụ vá vỏ, sửa chữa thay thế vỏ xe lốp xe', NULL, '2025-03-23 07:53:23', '2025-04-27 10:26:41', NULL),
(92, 33, 'Tin Tức', 'tin-tuc', 'giá vỏ xe trên thị trường', 'giá vỏ xe trên thị trường và tại bình dương', 'gia-vo-xe-tren-thi-truong-va-tai-binh-duong', 'Thay vỏ xe hết bao nhiêu tiền? Hay giá vỏ xe ô tô bao nhiêu? là những thắc mắc không còn xa lạ với những ai đang có nhu cầu thay lốp xe', 'vo va thay vo va gia thi truong vo xe.jpg', NULL, 'normal', 'finish', 0, '<p>Thay vỏ xe hết bao nhi&ecirc;u tiền? Hay gi&aacute; vỏ xe &ocirc; t&ocirc; bao nhi&ecirc;u? l&agrave; những thắc mắc kh&ocirc;ng c&ograve;n xa lạ với những ai đang c&oacute; nhu cầu thay lốp xe. Thực tế, mức gi&aacute; n&agrave;y sẽ phụ thuộc v&agrave;o rất nhiều yếu tố như h&atilde;ng sản xuất, chất lượng của lốp, thời điểm thay lốp hay đơn vị thực hiện thay lốp... Lốp xe l&agrave; bộ phận duy nhất của xe tiếp x&uacute;c với bề mặt đường, ảnh hưởng trực tiếp đến khả năng vận h&agrave;nh v&agrave; hệ thống l&aacute;i của xe. Do đ&oacute;, chủ xe cần quan s&aacute;t v&agrave; kiểm tra định kỳ để đảm bảo độ m&ograve;n lốp đều, kh&ocirc;ng bị đ&acirc;m thủng bởi c&aacute;c vật lạ hay hiện tượng căng lốp, non lốp kh&ocirc;ng thường xuy&ecirc;n xảy ra.</p>\r\n<p>Dưới đ&acirc;y l&agrave; bảng gi&aacute; vỏ xe của một số h&atilde;ng phổ biến hiện nay tr&ecirc;n thị trường m&agrave; bạn c&oacute; thể tham khảo cũng như một số lưu &yacute; chọn vỏ xe kh&ocirc;ng n&ecirc;n bỏ qua!</p>\r\n<p><strong>1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Khi n&agrave;o cần thay vỏ xe?</strong></p>\r\n<p>Thực tế, kh&ocirc;ng c&oacute; c&aacute;ch n&agrave;o để n&oacute;i ch&iacute;nh x&aacute;c vỏ xe c&oacute; tuổi thọ bao l&acirc;u. Bởi tuổi thọ v&agrave; qu&atilde;ng đường đi được của lốp xe sẽ phụ thuộc v&agrave;o rất nhiều yếu tố như thiết kế của lốp, sự chăm s&oacute;c d&agrave;nh cho lốp, th&oacute;i quen l&aacute;i xe của t&agrave;i xế hay kh&iacute; hậu nơi lốp xe vận h&agrave;nh, điều kiện đường x&aacute;... Song, b&aacute;c t&agrave;i vẫn c&oacute; thể dựa v&agrave;o một số cột mốc v&agrave; mẹo để biết được khi n&agrave;o cần thay lốp xe, chẳng hạn như:</p>\r\n<p>●&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Đến hạn 5 năm từ ng&agrave;y sản xuất.</p>\r\n<p>●&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Độ s&acirc;u r&atilde;nh lốp nhỏ hơn 1.6mm.</p>\r\n<p>●&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mặt lốp xuất hiện hư hại.</p>\r\n<p>●&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Lốp bị thủng lỗ c&oacute; đường k&iacute;nh lớn hơn 6mm.</p>\r\n<p>●&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Van lốp, tanh lốp bị hư hỏng.</p>\r\n<p><strong>2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Gi&aacute; vỏ xe của một số h&atilde;ng phổ biến tr&ecirc;n thị trường</strong></p>\r\n<p><strong>2.1. Một số h&atilde;ng lốp xe phổ biến tr&ecirc;n thị trường hiện nay</strong></p>\r\n<p><strong>Pirelli</strong></p>\r\n<p>Pirelli l&agrave; một trong 5 h&atilde;ng lốp xe lớn nhất thế thới đến từ &Yacute;. Lốp xe Pirelli c&oacute; ưu điểm hiệu suất sao, an to&agrave;n, &ecirc;m &aacute;i v&agrave; độ bền tuyệt đối v&agrave; l&agrave; nh&agrave; ph&acirc;n phối lốp xe độc quyền cho Giải đua F1 đ&igrave;nh đ&aacute;m.</p>\r\n<p><strong>Bridgestone</strong></p>\r\n<p>Bridgestone l&agrave; thương hiệu lốp xe h&agrave;ng đầu Nhật Bản v&agrave; cũng l&agrave; một trong những nh&agrave; sản xuất lốp uy t&iacute;n tr&ecirc;n thị trường.&nbsp;Lốp xe Bridgestone&nbsp;nổi bật với ưu điểm độ bền cao, chống đinh, vật nhọn tốt, ổn định khi chạy đường d&agrave;i, khả năng c&acirc;n bằng tốt, cũng như nhiều d&ograve;ng sản phẩm chuy&ecirc;n biệt cho từng loại đường s&aacute;, d&ograve;ng xe... Đặc biệt, Bridgestone c&ograve;n l&agrave; thương hiệu lốp xe d&agrave;nh cho xe c&aacute; nh&acirc;n, xe gia đ&igrave;nh, xe du lịch rất được ưa chuộng tại Việt Nam.</p>\r\n<p><strong>Michelin</strong></p>\r\n<p>Michelin l&agrave; thương hiệu sản xuất lốp đến từ Ph&aacute;p, chuy&ecirc;n cung cấp lốp &ocirc; t&ocirc; cao cấp cho hơn 170 quốc gia tr&ecirc;n thế giới. C&aacute;c sản phẩm từ Michelin nổi bật với độ &ecirc;m &aacute;i, nhiều k&iacute;ch cỡ, hạn chế m&agrave;i m&ograve;n v&agrave; b&aacute;m đường tốt.</p>\r\n<p><strong>Continental</strong></p>\r\n<p>Continental l&agrave; h&atilde;ng lốp xe h&agrave;ng đầu của Đức, được th&agrave;nh lập v&agrave;o năm 1871. Với điểm nổi bật đ&oacute; l&agrave; sự &ecirc;m &aacute;i, vận h&agrave;nh đằm v&agrave; ổn định cao.</p>\r\n<p><strong>Dunlop</strong></p>\r\n<p>Lốp xe Dunlop ra đời v&agrave;o năm 1880, l&agrave; một trong những thương hiệu lốp xe h&agrave;ng đầu thế giới đến từ Anh. Điểm nổi bật của lốp xe Dunlop đ&oacute; l&agrave; độ bền cao, chống trượt tốt, thế mạnh l&agrave; vận h&agrave;nh đường trường, đường xấu, đường địa h&igrave;nh...</p>\r\n<p><strong>2.2. Gi&aacute; vỏ xe của c&aacute;c h&atilde;ng</strong></p>\r\n<p>Gi&aacute; vỏ xe bao nhi&ecirc;u l&agrave; vấn đề m&agrave; rất nhiều chủ xe quan t&acirc;m. Tuy nhi&ecirc;n, gi&aacute; vỏ xe của c&aacute;c thương hiệu sẽ c&oacute; sự kh&aacute;c nhau khi mỗi h&atilde;ng đều c&oacute; những thế mạnh ri&ecirc;ng. V&igrave; vậy kh&oacute; c&oacute; thể đ&ograve;i hỏi một d&ograve;ng lốp ho&agrave;n hảo với mức gi&aacute; b&aacute;n phổ th&ocirc;ng. Nhưng nh&igrave;n chung, gi&aacute; vỏ xe sẽ dao động trong khoảng từ 1 đến 10 triệu đồng, tuỳ thuộc v&agrave;o d&ograve;ng xe, k&iacute;ch thước, cấu tr&uacute;c hay thiết kế theo mục đ&iacute;ch sử dụng của lốp.</p>\r\n<p>Chẳng hạn lốp Michelin c&oacute; mức gi&aacute; dao động trong khoảng từ 2.4 &ndash; 10.7 triệu đồng, tuỳ theo k&iacute;ch thước của lốp. Hay&nbsp;lốp Bridgestone&nbsp;- d&ograve;ng lốp được thiết kế c&oacute; khả năng chịu t&aacute;c động lớn với độ bền cao, dẻo dai v&agrave; l&acirc;u m&ograve;n. C&ugrave;ng với đ&oacute; l&agrave; độ b&aacute;m đường tốt, nhất l&agrave; khi chạy trời mưa, nhưng vẫn đảm bảo ổn định khi chạy với tốc độ cao v&agrave; tương đối &ecirc;m &aacute;i. Lốp Bridgestone sẽ c&oacute; mức gi&aacute; dao động từ 1.6 - 7.8 triệu đồng đối với c&aacute;c d&ograve;ng xe du lịch, hay từ 4.2 &ndash; 10.8 triệu đồng đối với lốp xe tải, xe bu&yacute;t (tuỳ theo k&iacute;ch thước, thiết kế lốp).</p>\r\n<p><strong>Một số lưu &yacute; khi chọn vỏ xe</strong></p>\r\n<p><strong>K&iacute;ch cỡ lốp</strong></p>\r\n<p>&nbsp;</p>\r\n<p>Mua đ&uacute;ng k&iacute;ch cỡ lốp l&agrave; một trong những điều quan trọng nhất để qu&aacute; tr&igrave;nh l&aacute;i xe diễn ra &ecirc;m &aacute;i v&agrave; an to&agrave;n. Bởi c&aacute;c bộ phận vận h&agrave;nh v&agrave; hệ thống treo được nh&agrave; sản xuất &ocirc; t&ocirc; thiết kế theo từng k&iacute;ch thước của lốp v&agrave; m&acirc;m xe nguy&ecirc;n bản. V&igrave; vậy chủ xe cần nắm r&otilde; về&nbsp;k&iacute;ch thước của lốp xe&nbsp;nguy&ecirc;n bản cũng như k&iacute;ch thước m&acirc;m đang gắn tr&ecirc;n xe l&agrave; bao nhi&ecirc;u để c&oacute; thể chọn được lốp xe đ&uacute;ng chuẩn nhất.</p>\r\n<p><strong>Tỉ lệ chống sốc</strong></p>\r\n<p>Tr&ecirc;n mỗi lốp xe &ocirc; t&ocirc; đều sẽ được quy định về điều kiện vận h&agrave;nh cũng như vận tốc. C&oacute; những lốp c&oacute; thể sử dụng được trong tất cả điều kiện kh&iacute; hậu kh&aacute;c nhau nhưng cũng c&oacute; những loại lốp chỉ chuy&ecirc;n sử dụng cho m&ugrave;a h&egrave; hoặc m&ugrave;a đ&ocirc;ng. B&ecirc;n cạnh đ&oacute;, mỗi lốp xe cũng sẽ c&oacute; một th&ocirc;ng số cho biết tốc độ tối đa của lốp xe ở một mức tải trọng nhất định. C&oacute; những lốp c&oacute; khả năng duy tr&igrave; ở tốc độ 239 - 299km/h như V với 240 km/h, W với 270 km/h, Y với 299 km/h hay Z nghĩa l&agrave; tr&ecirc;n 240 km/h. Do đ&oacute;, tỷ lệ chống sốc cũng l&agrave; yếu tố m&agrave; chủ xe cần phải nắm r&otilde; để c&oacute; những lựa chọn thay thế cho xe ph&ugrave; hợp.</p>\r\n<p><strong>Mục đ&iacute;ch sử dụng</strong></p>\r\n<p>Mỗi d&ograve;ng xe sẽ c&oacute; những mục đ&iacute;ch sử dụng kh&aacute;c nhau, v&igrave; vậy b&ecirc;n cạnh gi&aacute; vỏ xe chủ xe cũng cần căn cứ v&agrave;o nhu cầu sử dụng m&agrave;&nbsp;lựa chọn loại lốp&nbsp;c&oacute; đặc điểm ph&ugrave; hợp, chẳng hạn như:</p>\r\n<p>●&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; C&aacute;c d&ograve;ng xe từ 4 đến 7 chỗ ngồi như Hatchback, Sedan hoặc xe gia đ&igrave;nh MPV thường hướng đến sự &ecirc;m &aacute;i khi di chuyển n&ecirc;n lốp xe sử dụng thường c&oacute; t&iacute;nh đ&agrave;n hồi cao v&agrave; đường k&iacute;nh m&acirc;m xe vừa phải.</p>\r\n<p>●&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Đối với d&ograve;ng SUV hoặc B&aacute;n tải, Crossover đề cao khả năng off-road n&ecirc;n thường d&ugrave;ng những loại lốp cứng, bền v&agrave; b&aacute;m đường tốt. Đồng thời, m&acirc;m xe v&agrave; bề d&agrave;y của lốp cũng thường lớn hơn những d&ograve;ng xe kh&aacute;c.</p>\r\n<p>●&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hay c&aacute;c d&ograve;ng xe thể thao mui trần với trọng t&acirc;m hạ thấp, vận h&agrave;nh ở tốc độ cao sẽ sử dụng những loại lốp c&oacute; chiều rộng b&aacute;nh nhỏ v&agrave; m&acirc;m k&iacute;ch thước lớn để tăng khả năng b&aacute;m đường, cũng như giảm độ rung lắc.</p>\r\n<p>Tr&ecirc;n đ&acirc;y l&agrave; những chia sẻ về một số d&ograve;ng&nbsp;lốp &ocirc; t&ocirc;&nbsp;cũng như bảng gi&aacute; vỏ xe tham khảo của c&aacute;c thương hiệu lốp xe ti&ecirc;u biểu hiện nay. C&ugrave;ng với đ&oacute; l&agrave; những lưu &yacute; kh&ocirc;ng thể bỏ qua khi lựa chọn lốp xe. Hy vọng b&agrave;i viết c&oacute; thể gi&uacute;p bạn c&oacute; thể lựa chọn cho m&igrave;nh một chiếc lốp ph&ugrave; hợp với xe của m&igrave;nh.</p>', NULL, NULL, 0, '1', 'Khi nào cần thay vỏ xe? Giá vỏ xe ô tô bao nhiêu tiền? Và khi thay lốp xe cần lưu ý những gì, hãy cùng tìm hiểu trong bài viết sau!', 'các loại vỏ xe trên thị trường, giá vỏ xe biến động, lưu ý khi chọn vỏ xe và chọn thương thiệu', NULL, '2025-03-23 07:58:53', '2025-04-27 10:26:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `post_images`
--

CREATE TABLE `post_images` (
  `id` int(20) NOT NULL,
  `post_image_id` int(20) DEFAULT NULL,
  `post_image_title` varchar(300) DEFAULT NULL,
  `post_image_slug` varchar(300) DEFAULT NULL,
  `post_image_meta_desc` varchar(1000) DEFAULT NULL,
  `post_image_meta_key` varchar(1000) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2020-04-19 06:45:16', '2020-04-19 06:45:16'),
(2, 'Writer', 'web', '2020-04-19 06:45:16', '2020-04-19 06:45:16');

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `id` int(11) NOT NULL,
  `tag_cate_id` varchar(5) DEFAULT NULL,
  `tag_cate_slug` varchar(50) DEFAULT NULL,
  `tag_post_id` int(10) DEFAULT NULL,
  `tag_post_title` varchar(200) DEFAULT NULL,
  `tag_post_slug` varchar(200) DEFAULT NULL,
  `tag_show` int(2) DEFAULT NULL,
  `tag_view` int(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tag`
--

INSERT INTO `tag` (`id`, `tag_cate_id`, `tag_cate_slug`, `tag_post_id`, `tag_post_title`, `tag_post_slug`, `tag_show`, `tag_view`, `created_at`, `updated_at`) VALUES
(102, '33', 'tin-tuc', 91, 'vỏ xe lưu động', 'vo-xe-luu-dong', 1, 0, '2025-04-27 10:26:41', '2025-04-27 10:26:41'),
(103, '33', 'tin-tuc', 91, 'dịch vụ vá vỏ nhanh rẻ', 'dich-vu-va-vo-nhanh-re', 1, 0, '2025-04-27 10:26:41', '2025-04-27 10:26:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `power_admin` int(11) DEFAULT NULL,
  `user_image` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `favicon_image` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `power_admin`, `user_image`, `favicon_image`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(14, 'a', 'admin@gmail.com', NULL, NULL, NULL, '', '$2y$10$zr6rimIAaDj4GUaX4sA2PuQ/mfH9hdyXK6Aio5R0M0lTRsaDnmz9C', NULL, '2020-07-20 13:03:50', '2020-07-20 13:03:50'),
(17, 'Trần Hữu Phú', 'phuth.site@gmail.com', NULL, 1, 'user_tran-huu-phu-ewP7q.jpg', 'favicon_admin-FJlfT.png', '$2y$10$ljhohOAzOKPkOwb/.XFTAObjJgXlUH0QWwWKFRDyHaKT3MnMd3jBC', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cate`
--
ALTER TABLE `cate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `don-hang`
--
ALTER TABLE `don-hang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_image`
--
ALTER TABLE `gallery_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_type`
--
ALTER TABLE `gallery_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_page_info`
--
ALTER TABLE `home_page_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image_tinycme`
--
ALTER TABLE `image_tinycme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_images`
--
ALTER TABLE `post_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cate`
--
ALTER TABLE `cate`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `don-hang`
--
ALTER TABLE `don-hang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery_image`
--
ALTER TABLE `gallery_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=960;

--
-- AUTO_INCREMENT for table `gallery_type`
--
ALTER TABLE `gallery_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `home_page_info`
--
ALTER TABLE `home_page_info`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `image_tinycme`
--
ALTER TABLE `image_tinycme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=219;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `post_images`
--
ALTER TABLE `post_images`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
