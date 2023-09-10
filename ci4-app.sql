-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2023 at 04:07 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
  `status` int(10) NOT NULL,
  `carousel_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carousel`
--

INSERT INTO `carousel` (`id`, `carousel_title`, `carousel_slug`, `status`, `carousel_image`, `created_at`, `updated_at`) VALUES
(2, 'Slide Test 1', 'slide-test-1', 0, 'slide-test-1-qYpJJr.png', '2020-04-25 16:21:45', '2020-04-25 16:21:45'),
(3, 'Carousel 2', 'carousel-2', 1, 'carousel-2-MiX7vR.jpg', '2020-04-26 15:02:38', '2020-04-26 15:02:38'),
(4, 'Liên Hệ', 'lien-he', 0, 'lin-h-48jlnD.jpg', '2020-06-29 15:24:00', '2020-06-29 15:24:00');

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
(1, 'In Kỹ Thuật Số', 'in-ky-thuat-so', 0, 1, 'normal', 'In Kỹ Thuật Số', 'In Kỹ Thuật Số, in, ngành in KTS', '2020-05-30 04:29:07', '2023-08-22 09:02:13', '2020-07-23 15:00:58'),
(8, 'Dịch Vụ Du Lịch', 'dich-vu-du-lich', 1, 0, 'normal', 'Dịch Vụ Du Lịch', 'Dịch Vụ Du Lịch', '2020-07-23 15:12:15', '2023-09-10 07:01:57', NULL),
(14, 'Blog', 'blog', 0, 0, 'blog', 'Blog Tin Tức Thiết Kế, Sản Phẩm', 'Blog Tin Tức Thiết Kế, Sản Phẩm', '2020-07-23 17:19:57', '2023-08-22 09:04:17', NULL),
(18, 'In Offset', 'in-offset', 0, 0, 'normal', 'In Offset, dịch vụ in nhanh bằng offset', 'In Offset, dịch vụ in nhanh bằng offset, offset 1 màu, offset 4 màu', '2022-12-13 04:34:44', '2023-08-22 09:03:01', NULL),
(26, 'Bộ Sưu Tập', 'bo-suu-tap', 0, 0, 'cate_gallery', 'Bộ sưu tập ảnh PNG JPG chất lượng cao dung lượng thấp dành cho thiết kế tham khảo', 'Bộ sưu tập ảnh PNG JPG chất lượng cao dung lượng thấp dành cho thiết kế tham khảo', '2023-06-12 06:37:52', '2023-06-12 06:37:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `don-hang`
--

CREATE TABLE `don-hang` (
  `id` int(11) NOT NULL,
  `order_name` varchar(200) DEFAULT NULL,
  `order_phone` varchar(20) DEFAULT NULL,
  `order_adress` text DEFAULT NULL,
  `order_content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`order_content`)),
  `order_total` float DEFAULT NULL,
  `checked_order` int(2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `gallery_type_id` int(10) DEFAULT NULL,
  `gallery_type_name` varchar(100) DEFAULT NULL,
  `gallery_type_slug` varchar(100) DEFAULT NULL,
  `gallery_title` varchar(200) DEFAULT NULL,
  `gallery_title_slug` varchar(200) DEFAULT NULL,
  `gallery_cate_id` int(3) DEFAULT NULL,
  `gallery_image` varchar(500) DEFAULT NULL,
  `gallery_post_url` varchar(100) DEFAULT NULL,
  `gallery_file_download` varchar(1000) DEFAULT NULL,
  `gallery_post_id` int(20) DEFAULT NULL,
  `gallery_view` int(10) DEFAULT NULL,
  `gallery_compress_times` int(5) DEFAULT NULL,
  `gallery_meta_key` varchar(300) DEFAULT NULL,
  `gallery_meta_desc` varchar(300) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `gallery_type_id`, `gallery_type_name`, `gallery_type_slug`, `gallery_title`, `gallery_title_slug`, `gallery_cate_id`, `gallery_image`, `gallery_post_url`, `gallery_file_download`, `gallery_post_id`, `gallery_view`, `gallery_compress_times`, `gallery_meta_key`, `gallery_meta_desc`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, 'test và xóa', 'test-va-xoa', 26, 'test-va-xoa-LYV2UJWfpdORZP6t.jpg', NULL, NULL, NULL, NULL, 4, 'test và xóa 2', 'test và xóa', '2023-06-15 21:52:07', '2023-08-23 12:34:19'),
(2, NULL, NULL, NULL, 'Ảnh mới 2', 'anh-moi-2', 26, 'anh-moi-2-umAtOzgrxs0pBMF9.png', 'http://localhost/CI4_App/dich-vu-du-lich/Xe-tai-cho-thue-tai-binh-duong-2-24.html', NULL, NULL, 0, 4, 'Ảnh mới 2', 'Ảnh mới 2', '2023-06-15 22:07:18', '2023-08-23 12:34:25'),
(3, NULL, NULL, NULL, 'có post id 2 moi sua', 'co-post-id-2-moi-sua', 26, 'co-post-id-2-moi-sua-RzMPpS4vtfqLysQ8.png', 'http://localhost/CI4_App/dich-vu-du-lich/Xe-tai-cho-thue-tai-binh-duong-2-24.html', NULL, 24, 0, 4, 'ertyn sfdhgjg', 'ertyn sfdhgjg', '2023-06-16 02:39:26', '2023-08-23 12:34:30'),
(4, NULL, NULL, NULL, 'bài mới test gallery', 'bai-moi-test-gallery', 26, 'bai-moi-test-gallery-j6pvkyzSPwMeWIas.jpg', NULL, NULL, NULL, 0, 4, 'bài mới nhé', 'bài mới nhé', '2023-06-16 09:10:04', '2023-08-23 12:37:12'),
(5, 2, 'phương tiện - xe cộ', 'phuong-tien---xe-co', 'bài test có type', 'bai-test-co-type', 26, 'bai-test-co-type-LG0cOaVPDqt7U8Hh.jpg', NULL, NULL, NULL, 0, 0, 'bài test có type', 'bài test có type', '2023-09-10 05:07:08', '2023-09-10 06:06:21');

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

--
-- Dumping data for table `gallery_type`
--

INSERT INTO `gallery_type` (`id`, `gallery_type_name`, `gallery_type_slug`, `created_at`, `updated_at`) VALUES
(1, 'ẩm thực', 'am-thuc', '2023-09-09 09:44:01', '2023-09-10 05:21:11'),
(2, 'phương tiện - xe cộ', 'phuong-tien---xe-co', '2023-09-09 10:24:18', '2023-09-10 05:29:11');

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
  `image_size_compress` varchar(20) DEFAULT NULL,
  `image_folder` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `image_tinycme`
--

INSERT INTO `image_tinycme` (`id`, `image_TinyCME_name`, `image_TinyCME_status`, `image_size_original`, `image_size_compress`, `image_folder`, `created_at`, `updated_at`) VALUES
(17, '0_0002_DSC02725.jpg', 4, '520519', '520519', 'tinymce', '2022-12-24 20:57:34', '2022-12-26 02:50:25'),
(18, 'Giay in hóa đơn carbonless.jpg', 4, '305005', '118619', 'tinymce', '2022-12-24 20:57:44', '2022-12-26 02:50:42'),
(31, 'bai-viet-show-last-id-insert.jpg', 4, '795994', '87651', 'image_asset', '2022-12-24 23:51:06', '2022-12-26 02:50:56'),
(32, 'bai-viets-success.jpg', 3, '630726', '148053', 'image_asset', '2022-12-24 23:51:11', '2022-12-26 02:51:14'),
(33, 'favicon_admin-TLGvH.jpg', 3, '163170', '69885', 'image_asset', '2022-12-24 23:51:17', '2022-12-26 02:51:25'),
(34, 'fsad-adfasdf-sd.jpg', 2, '305005', '122965', 'image_asset', '2022-12-24 23:51:22', '2022-12-26 02:51:39'),
(35, 'fsad-adfasdf-sd_1.jpg', 2, '305005', '122965', 'image_asset', '2022-12-24 23:51:28', '2022-12-26 02:51:43'),
(36, 'favicon_admin-FrRLo.png', 1, '3062', '3008', 'tinymce', '2023-09-07 17:46:02', '2023-09-07 17:46:02'),
(37, 'user_tran-huu-phu-2-pkbwK.png', 1, '437012', '419849', 'tinymce', '2023-09-07 17:46:16', '2023-09-07 17:46:16'),
(38, '1200222-dWYBqo1xIFALTtPp.jpg', 1, '780831', '143469', 'image_asset', '2023-09-07 17:46:42', '2023-09-07 17:46:42'),
(39, 'bai-nay-co-anh-1200x900-IaVqzN6cuFXfrSkJ.jpg', 1, '595284', '118152', 'image_asset', '2023-09-07 17:46:51', '2023-09-07 17:46:51'),
(40, 'bai-viet-ban-hang-2-5FEGdH4RUA3j1rPW.jpg', 1, '780831', '143469', 'image_asset', '2023-09-07 17:47:01', '2023-09-07 17:47:01'),
(41, 'bai-viet-ban-hang-co-bo-anh-nDBe7YdVkLy908CO.jpg', 1, '1351534', '387330', 'image_asset', '2023-09-07 17:47:13', '2023-09-07 17:47:13'),
(42, 'bai-viet-ban-hang-kA98NiMmybvSTG50.jpg', 1, '267801', '152967', 'image_asset', '2023-09-07 17:47:21', '2023-09-07 17:47:21'),
(43, 'user_tran-huu-phu-ewP7q.jpg', 1, '1009168', '350284', 'image_asset', '2023-09-07 17:47:32', '2023-09-07 17:47:32'),
(44, 'bai-viet-ban-hang-co-bo-anh-oEkXcybM7JK1tzTA.jpeg', 1, '220648', '103685', 'image_asset', '2023-09-07 17:47:40', '2023-09-07 17:47:40'),
(45, 'favicon_admin-FJlfT.png', 1, '564317', '198135', 'image_asset', '2023-09-07 17:47:47', '2023-09-07 17:47:47');

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
  `page_content` text NOT NULL,
  `page_view` int(10) DEFAULT NULL,
  `page_show` int(3) DEFAULT NULL,
  `facebook` varchar(200) DEFAULT NULL,
  `youtube` varchar(200) DEFAULT NULL,
  `twitter` varchar(200) DEFAULT NULL,
  `pinterest` varchar(255) DEFAULT NULL,
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

INSERT INTO `page` (`id`, `user_id`, `page_name`, `page_slug`, `page_title`, `page_image`, `page_favicon`, `page_status`, `page_content`, `page_view`, `page_show`, `facebook`, `youtube`, `twitter`, `pinterest`, `maps`, `f_app`, `g_app`, `phone`, `google_image_maps`, `page_meta_key`, `page_meta_desc`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Trang Chủ', 'trang-chu', 'Trang Chủ Công Ty Đại Long', 'trang-chu-0oKds8QMBNptjXFk.jpg', 'favicon_ad-BAlrOnm5CpHYRbe3.png', 1, '<p>Noi dung</p>', NULL, 1, 'https://www.facebook.com/profile.php?id=100070762602051', 'https://www.youtube.com/channel/UCSvNFyqDpZ-Jd3M7kkaAmmw', 'Twitter', 'Pinterest', 'https://www.google.com/maps/place/Curie+Viet+Nam+Limited+Company/@11.096299,106.6651825,15z/data=!4m2!3m1!1s0x0:0xe5bc84542907690d?sa=X&ved=2ahUKEwifiZDH35z8AhUpGbcAHYymBWEQ_BJ6BAhXEAg', '1', '1', '0974953600', NULL, 'page chủ k', 'page chủ d', '2022-12-23 23:13:14', '2023-06-11 23:18:51'),
(2, NULL, 'About Us', 'about-us', 'Giới thiệu về chúng tôi', 'about-us-ybnDzwcLfMJsjV0W.', NULL, 0, '<p>C&ocirc;ng ty ch&uacute;ng t&ocirc;i</p>', 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'gioi thieu, chung toi, hướng dẫn', 'gioi thieu ve chung toi', '2022-12-24 05:06:50', '2022-12-24 05:55:17'),
(3, NULL, 'ád', 'ad', 'aef', 'ad-I6wDjU3ElmPK2oST.jpg', NULL, 0, '<p>&agrave;</p>', 55, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ad-DcCBso4SZIVrPdez.png', 'ádwe', 'á', '2022-12-24 05:55:46', '2023-06-11 23:18:51');

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
  `post_slug` varchar(255) DEFAULT NULL,
  `post_intro` varchar(255) NOT NULL,
  `post_image` varchar(255) NOT NULL,
  `post_status` varchar(20) NOT NULL,
  `post_featured` int(4) NOT NULL,
  `post_content` mediumtext NOT NULL,
  `post_price` double DEFAULT NULL,
  `post_sale` double DEFAULT NULL,
  `post_view` int(10) NOT NULL,
  `post_show` varchar(2) DEFAULT NULL,
  `post_meta_desc` varchar(255) NOT NULL,
  `post_meta_key` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `post_cate_id`, `post_cate_name`, `post_cate_slug`, `post_title`, `post_slug`, `post_intro`, `post_image`, `post_status`, `post_featured`, `post_content`, `post_price`, `post_sale`, `post_view`, `post_show`, `post_meta_desc`, `post_meta_key`, `created_at`, `updated_at`, `deleted_at`) VALUES
(42, 8, 'Dịch Vụ Du Lịch', 'dich-vu-du-lich', 'bài viết bán hàng 2', 'bai-viet-ban-hang-2', 'bài viết bán hàng 2', 'bai-viet-ban-hang-2-5FEGdH4RUA3j1rPW.jpg', 'san-pham', 0, '<p>b&agrave;i viết b&aacute;n h&agrave;ng 2</p>', 5000, 0, 19, '0', 'bài viết bán hàng 2bài viết bán hàng 2', 'bài viết bán hàng 2', '2023-06-17 01:45:40', '2023-09-10 06:57:05', NULL);

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
(71, '12', 'dich-vu-du-lich', 32, 'tag 7', 'tag-8', 1, 0, '2022-12-19 15:34:54', '2022-12-19 15:34:54'),
(72, '14', 'dich-vu-du-lich', 26, 'tag 8', 'tag-8', 1, 0, '2022-12-19 15:34:54', '2022-12-19 15:34:54'),
(73, '8', 'dich-vu-du-lich', 33, 'tag 5', 'tag-5', 1, 0, '2022-12-19 15:34:54', '2022-12-19 15:34:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
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

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `user_image`, `favicon_image`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(14, 'a', 'admin@gmail.com', NULL, NULL, '', '$2y$10$zr6rimIAaDj4GUaX4sA2PuQ/mfH9hdyXK6Aio5R0M0lTRsaDnmz9C', NULL, '2020-07-20 13:03:50', '2020-07-20 13:03:50'),
(17, 'Trần Hữu Phú', 'phuth.site@gmail.com', NULL, 'user_tran-huu-phu-ewP7q.jpg', 'favicon_admin-FJlfT.png', '$2y$10$Wvc/6e8IP6neL5/nKzze4e91wecy0.sk3iuv1x7oTZupvUHfH62kq', NULL, NULL, NULL);

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
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cate`
--
ALTER TABLE `cate`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `don-hang`
--
ALTER TABLE `don-hang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gallery_type`
--
ALTER TABLE `gallery_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `home_page_info`
--
ALTER TABLE `home_page_info`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `image_tinycme`
--
ALTER TABLE `image_tinycme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `post_images`
--
ALTER TABLE `post_images`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
