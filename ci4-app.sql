-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2023 at 06:46 PM
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
(8, 'In Nhanh Hóa Đơn', 'in-nhanh-hoa-don', 1, 0, 'normal', 'In Nhanh Hóa Đơn báo biểu với bản in chất lượng cao', 'In Nhanh Hóa Đơn báo biểu, dịch vụ in nhanh cho cá nhân doanh nghiệp', '2020-07-23 15:12:15', '2023-09-15 07:04:08', NULL),
(14, 'Blog', 'blog', 0, 0, 'blog', 'Blog Tin Tức Thiết Kế, Sản Phẩm', 'Blog Tin Tức Thiết Kế, Sản Phẩm', '2020-07-23 17:19:57', '2023-09-12 10:09:56', NULL),
(18, 'In Offset', 'in-offset', 0, 0, 'normal', 'In Offset, dịch vụ in nhanh bằng offset', 'In Offset, dịch vụ in nhanh bằng offset, offset 1 màu, offset 4 màu', '2022-12-13 04:34:44', '2023-08-22 09:03:01', NULL),
(26, 'Bộ Sưu Tập', 'bo-suu-tap', 0, 0, 'cate_gallery', 'Bộ sưu tập ảnh PNG JPG chất lượng cao dung lượng thấp dành cho thiết kế tham khảo', 'Bộ sưu tập ảnh PNG JPG chất lượng cao dung lượng thấp dành cho thiết kế tham khảo', '2023-06-12 06:37:52', '2023-06-12 06:37:52', NULL),
(27, 'Bạt Hiflex - Decal', 'bat-hiflex---decal', 1, 0, 'normal', 'Bạt Hiflex - Decal  PP', 'Bạt Hiflex - Decal  PP', '2023-09-14 03:50:37', '2023-09-14 03:50:37', NULL);

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
-- Table structure for table `gallery_image`
--

CREATE TABLE `gallery_image` (
  `id` int(11) NOT NULL,
  `gallery_type_id` int(10) DEFAULT NULL,
  `gallery_type_name` varchar(100) DEFAULT NULL,
  `gallery_type_slug` varchar(100) DEFAULT NULL,
  `gallery_title` varchar(200) DEFAULT NULL,
  `gallery_title_slug` varchar(200) DEFAULT NULL,
  `gallery_cate_id` int(3) DEFAULT NULL,
  `gallery_cate_slug` varchar(50) DEFAULT NULL,
  `gallery_image` varchar(500) DEFAULT NULL,
  `gallery_img_download_times` int(100) DEFAULT NULL,
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
-- Dumping data for table `gallery_image`
--

INSERT INTO `gallery_image` (`id`, `gallery_type_id`, `gallery_type_name`, `gallery_type_slug`, `gallery_title`, `gallery_title_slug`, `gallery_cate_id`, `gallery_cate_slug`, `gallery_image`, `gallery_img_download_times`, `gallery_post_url`, `gallery_file_download`, `gallery_post_id`, `gallery_view`, `gallery_compress_times`, `gallery_meta_key`, `gallery_meta_desc`, `created_at`, `updated_at`) VALUES
(1, 2, 'phương tiện - xe cộ', 'phuong-tien---xe-co', 'test và xóa', 'test-va-xoa', 26, 'bo-suu-tap', 'test-va-xoa-LYV2UJWfpdORZP6t.jpg', NULL, NULL, NULL, NULL, 1, 4, 'test và xóa 2', 'test và xóa', '2023-06-15 21:52:07', '2023-09-16 09:18:47'),
(2, 1, 'ẩm thực', 'am-thuc', 'Ảnh mới 2', 'anh-moi-2', 26, 'bo-suu-tap', 'anh-moi-2-umAtOzgrxs0pBMF9.png', NULL, NULL, NULL, NULL, 1, 4, 'Ảnh mới 2', 'Ảnh mới 2', '2023-06-15 22:07:18', '2023-09-16 10:20:14'),
(3, 1, 'ẩm thực', 'am-thuc', 'có post id 2 moi sua', 'co-post-id-2-moi-sua', 26, 'bo-suu-tap', 'co-post-id-2-moi-sua-RzMPpS4vtfqLysQ8.png', NULL, 'http://localhost/CI4_App/dich-vu-du-lich/bai-viet-ban-hang-2-42.html', NULL, 42, 3, 4, 'ertyn sfdhgjg', 'ertyn sfdhgjg', '2023-06-16 02:39:26', '2023-09-16 09:20:22'),
(4, 1, 'ẩm thực', 'am-thuc', 'bài mới test gallery', 'bai-moi-test-gallery', 26, 'bo-suu-tap', 'bai-moi-test-gallery-j6pvkyzSPwMeWIas.jpg', 2, NULL, 'https://getbootstrap.com/docs/5.0/content/tables/', NULL, 25, 4, 'bài mới nhé', 'bài mới nhé', '2023-06-16 09:10:04', '2023-09-18 08:52:48'),
(5, 2, 'phương tiện - xe cộ', 'phuong-tien---xe-co', 'bài test có type', 'bai-test-co-type', 26, 'bo-suu-tap', 'bai-test-co-type-LG0cOaVPDqt7U8Hh.jpg', NULL, NULL, NULL, NULL, 19, 0, 'bài test có type', 'bài test có type', '2023-09-10 05:07:08', '2023-09-19 09:17:20'),
(6, 1, 'ẩm thực', 'am-thuc', 'bài viết có ảnh và link', 'bai-viet-co-anh-va-link', 26, 'bo-suu-tap', 'bai-viet-co-anh-va-link-LAKUDoC9khjOvTFe.png', NULL, 'http://localhost/CI4_App/in-nhanh-hoa-don/hoa-don-bao-bieu-48.html', '48', 48, 40, 0, 'bài viết có ảnh và link', 'bài viết có ảnh và link', '2023-09-16 09:42:00', '2023-09-18 08:52:46');

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
(36, 'favicon_admin-FrRLo.png', 3, '3062', '2891', 'tinymce', '2023-09-07 17:46:02', '2023-09-13 04:09:25'),
(37, 'user_tran-huu-phu-2-pkbwK.png', 3, '437012', '400218', 'tinymce', '2023-09-07 17:46:16', '2023-09-13 04:09:36'),
(38, '1200222-dWYBqo1xIFALTtPp.jpg', 3, '780831', '125339', 'image_asset', '2023-09-07 17:46:42', '2023-09-13 04:09:43'),
(39, 'bai-nay-co-anh-1200x900-IaVqzN6cuFXfrSkJ.jpg', 3, '595284', '94547', 'image_asset', '2023-09-07 17:46:51', '2023-09-13 04:09:48'),
(40, 'bai-viet-ban-hang-2-5FEGdH4RUA3j1rPW.jpg', 3, '780831', '125339', 'image_asset', '2023-09-07 17:47:01', '2023-09-13 04:09:53'),
(41, 'bai-viet-ban-hang-co-bo-anh-nDBe7YdVkLy908CO.jpg', 3, '1351534', '360019', 'image_asset', '2023-09-07 17:47:13', '2023-09-13 04:10:04'),
(42, 'bai-viet-ban-hang-kA98NiMmybvSTG50.jpg', 3, '267801', '137935', 'image_asset', '2023-09-07 17:47:21', '2023-09-13 04:10:09'),
(43, 'user_tran-huu-phu-ewP7q.jpg', 3, '1009168', '322846', 'image_asset', '2023-09-07 17:47:32', '2023-09-13 04:10:24'),
(44, 'bai-viet-ban-hang-co-bo-anh-oEkXcybM7JK1tzTA.jpeg', 3, '220648', '69052', 'image_asset', '2023-09-07 17:47:40', '2023-09-13 04:10:36'),
(45, 'favicon_admin-FJlfT.png', 2, '564317', '186045', 'image_asset', '2023-09-07 17:47:47', '2023-09-13 04:10:42');

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
(1, NULL, 'Trang Chủ', 'trang-chu', 'Trang Chủ Công Ty Đại Long', 'trang-chu-0oKds8QMBNptjXFk.jpg', 'favicon_trang-chu-QF8ujlY3NqzaiSbc.png', 1, '<p>Noi dung</p>', NULL, 1, 'https://www.facebook.com/profile.php?id=100070762602051', 'https://www.youtube.com/channel/UCSvNFyqDpZ-Jd3M7kkaAmmw', 'Twitter', 'Pinterest', 'https://www.google.com/maps/place/Curie+Viet+Nam+Limited+Company/@11.096299,106.6651825,15z/data=!4m2!3m1!1s0x0:0xe5bc84542907690d?sa=X&ved=2ahUKEwifiZDH35z8AhUpGbcAHYymBWEQ_BJ6BAhXEAg', '1', '1', '0974953600', NULL, 'page chủ k', 'page chủ d', '2022-12-23 23:13:14', '2023-09-14 04:01:47'),
(2, NULL, 'About Us', 'about-us', 'Giới thiệu về chúng tôi dailong.asia', 'about-us-1YUEjZNCVdT4vm7f.png', NULL, 0, '<div class=\"mce-toc\">\r\n<h2>T&oacute;m tắt b&agrave;i viết</h2>\r\n<ul>\r\n<li><a href=\"#mcetoc_1ha9mubbpn\">Phương Ch&acirc;m Hoạt Động</a></li>\r\n<li><a href=\"#mcetoc_1ha9mubbpo\">Sứ mệnh v&agrave; tầm nh&igrave;n</a></li>\r\n<li><a href=\"#mcetoc_1ha9mubbpp\">Tại sao lựa chọn t&ecirc;n miền&nbsp;dailong.asia</a></li>\r\n<li><a href=\"#mcetoc_1ha9mubbpq\">Dịch Vụ In v&agrave; Thi C&ocirc;ng Chủ Yếu</a></li>\r\n</ul>\r\n</div>\r\n<p><span style=\"font-size: 18px;\"><em>C&ocirc;ng Ty TNHH Curie Việt Nam (Curie Vietnam Ltd.,) h&igrave;nh th&agrave;nh v&agrave; ph&aacute;t triển từ năm 2010, ban đầu l&agrave; cơ sở Photocopy v&agrave; Record, trải qua thời gian ph&aacute;t triển, C&ocirc;ng ty đầu tư nh&acirc;n lực v&agrave; m&aacute;y m&oacute;c đ&aacute;p ứng nhu cầu in ấn của kh&aacute;ch h&agrave;ng, đến nay C&ocirc;ng ty đ&atilde; đầu tư đầy đủ m&aacute;y m&oacute;c cho c&aacute;c lĩnh vực như: in kỹ thuật số (KTS), in Hiflex, in UV, đặc biệt l&agrave; in 3D v&agrave; in Offset, v&agrave; ch&uacute;ng t&ocirc;i c&oacute; thể đ&aacute;p ứng nhanh nhất tất cả nhu cầu của Kh&aacute;ch h&agrave;ng</em></span></p>\r\n<h2 id=\"mcetoc_1ha9mubbpn\"><span style=\"font-size: 18px;\"><em><strong>Phương Ch&acirc;m Hoạt Động</strong></em></span></h2>\r\n<p><span style=\"font-size: 18px;\"><em>Với ng&agrave;nh nghề ch&iacute;nh l&agrave; in ấn c&ocirc;ng ty đ&atilde; khẳng định được m&igrave;nh l&agrave; một trong những địa chỉ tin cậy của c&aacute; nh&acirc;n tổ chức khi sử dụng dịch vụ, l&agrave;m h&agrave;i l&ograve;ng mọi đối tượng khi sử dụng dịch vụ, trong tương lai c&ocirc;ng ty ph&aacute;t triển th&ecirc;m nhiều ng&agrave;nh nghề kh&aacute;c nữa như: x&acirc;y dựng, robot c&ocirc;ng nghiệp,...</em></span></p>\r\n<p><span style=\"font-size: 18px;\"><em>Định hướng của c&ocirc;ng ty trong ng&agrave;nh in ấn tại B&igrave;nh Dương: trở th&agrave;nh nh&agrave; cung cấp, c&ocirc;ng ty dịch vụ số một trong lĩnh vực in offset, in thẻ nhựa, in hiflex, decal, led, alu chữ nổi, mica, inox, in b&aacute;o biểu, tờ rơi, h&oacute;a đơn chất lượng cao,... với mong muốn l&agrave;m h&agrave;i long mọi kh&aacute;ch h&agrave;ng với chất lượng v&agrave; gi&aacute; cả ph&ugrave; hợp nhất.</em></span></p>\r\n<h2 id=\"mcetoc_1ha9mubbpo\"><span style=\"font-size: 18px;\"><em><strong>Sứ mệnh v&agrave; tầm nh&igrave;n</strong></em></span></h2>\r\n<p><span style=\"font-size: 18px;\"><em>L&agrave; thương hiệu lớn trong ng&agrave;nh in ấn tại B&igrave;nh Dương cũng như khu vực l&acirc;n cận, với đội ngũ nh&acirc;n vi&ecirc;n thiết kế chuy&ecirc;n nghiệp, thời gian phục vụ tăng l&ecirc;n, thời gian phục vụ cho từng kh&aacute;ch h&agrave;ng với tiến độ nhanh nhất, với tầm nh&igrave;n như vậy trong thời gian tới c&ocirc;ng ty sẽ kh&ocirc;ng ngừng n&acirc;ng cao tay nghề đội ngũ thiết kế cũng như thi c&ocirc;ng, hơn thế nữa đầu tư th&ecirc;m thiết bị m&aacute;y m&oacute;c hiện đại, để chất lượng ng&agrave;y c&agrave;ng tăng.</em></span></p>\r\n<h2 id=\"mcetoc_1ha9mubbpp\"><span style=\"font-size: 18px;\"><em><strong>Tại sao lựa chọn t&ecirc;n miền&nbsp;<a href=\"https://www.dailong.asia/admin/page/dailong.asia\" target=\"_blank\" rel=\"noopener\">dailong.asia</a></strong></em></span></h2>\r\n<p><span style=\"font-size: 18px;\"><em>Tiền th&acirc;n x&acirc;y dựng ch&uacute;ng t&ocirc;i ban đầu l&agrave; tiệm quảng c&aacute;o nhỏ lẻ với t&ecirc;n tiện l&agrave; Quảng C&aacute;o Đại Long với mong muốn giữ lại thương hiệu cũ d&ugrave; c&ocirc;ng ty đ&atilde; l&agrave; C&Ocirc;NG TY TNHH CURIE VIỆT NAM, với hoạt động chủ yếu về thiết kế quảng c&aacute;o, in ấn số lượng lớn, kh&aacute;ch h&agrave;ng từ c&aacute; nh&acirc;n hộ gia đ&igrave;nh cho tới doanh nghiệp lớn nhỏ tại khu vực B&igrave;nh Dương cũng như c&aacute;c khu vực l&acirc;n cận, vậy n&ecirc;n ch&uacute;ng t&ocirc;i đ&atilde; lấy t&ecirc;n miền&nbsp;<a href=\"https://www.dailong.asia/admin/page/dailong.asia\" target=\"_blank\" rel=\"noopener\">dailong.asia</a>&nbsp;để l&agrave;m thương hiệu giới thiệu sản phẩm của&nbsp;<a title=\"C&Ocirc;NG TY TNHH CURIE VIỆT NAM\" href=\"https://www.dailong.asia/\" target=\"_blank\" rel=\"noopener\">C&Ocirc;NG TY TNHH CURIE VIỆT NAM</a>, với những sản phẩm chủ lực về in ấn v&agrave; quảng c&aacute;o bao gồm:</em></span></p>\r\n<h2 id=\"mcetoc_1ha9mubbpq\"><span style=\"font-size: 18px;\"><em>Dịch Vụ In v&agrave; Thi C&ocirc;ng Chủ Yếu</em></span></h2>\r\n<p><em><strong>IN H&Oacute;A ĐƠN B&Aacute;O BIỂU</strong></em></p>\r\n<p><em><strong>THIẾT KẾ THI C&Ocirc;NG QUẢNG C&Aacute;O</strong></em></p>\r\n<p><em><strong>THI C&Ocirc;NG CHỮ NỔI ALU</strong></em></p>\r\n<p><em><strong>THI C&Ocirc;NG MICA - LED - INOX</strong></em></p>\r\n<p><em><strong>IN OFFSET DECAL</strong></em></p>\r\n<p><em><strong>IN BĂNG R&Ocirc;N - DECAL SỮA</strong></em></p>\r\n<p><em><strong>L&Agrave;M DẤU MỘC C&Aacute; NH&Acirc;N, DOANH NGHIỆP</strong></em></p>\r\n<p><em><strong>IN BẾ TEM NH&Atilde;N OFFSET, HOẶC M&Aacute;Y IN KTS</strong></em></p>\r\n<p><em><strong>IN SI&Ecirc;U TỐC KỸ THUẬT SỐ</strong></em></p>\r\n<p><em><strong>TEM NH&Atilde;N -&nbsp; THẺ - TEM 7 M&Agrave;U - TEM XI BẠC - TEM CUỘN</strong></em></p>\r\n<p><em><strong>V&Agrave; C&Aacute;C DỊCH VỤ IN TỔNG HỢP KH&Aacute;C</strong></em></p>\r\n<p><em><strong><u>LI&Ecirc;N HỆ:</u></strong></em></p>\r\n<p><em><strong><u>ĐỊA CHỈ: KHU PHỐ AN H&Ograve;A, PHƯỜNG H&Ograve;A LỢI, BẾN C&Aacute;T, B&Igrave;NH DƯƠNG</u></strong></em></p>\r\n<p><em><strong><u>HOTLINE: 0974 953 600 &ndash; Mr Ph&uacute;</u></strong></em></p>\r\n<p><em><strong><u>Email: phuth.me@gmail.com</u></strong></em></p>', 10, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'decal, PP, bạt Hiflex, dailong, asia, in nhanh chất lượng dailong.asia', 'gioi thieu ve chung toi Dailong VN cung cấp các sản phẩm in offset, in decal chất lượng cao dailong.asia', '2022-12-24 05:06:50', '2023-09-16 10:22:53'),
(3, NULL, 'ád', 'ad', 'aef', 'ad-I6wDjU3ElmPK2oST.jpg', NULL, 0, '<p>&agrave;</p>', 55, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ad-DcCBso4SZIVrPdez.png', 'ádwe', 'á', '2022-12-24 05:55:46', '2023-09-14 04:21:40');

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
(47, 14, NULL, 'blog', 'GIẤY DÙNG IN HÓA ĐƠN – BÁO BIỂU', 'giay-dung-in-hoa-don-–-bao-bieu', 'Mọi sản phẩm tới tay người tiêu dùng đều phải có nguyên liệu mới tạo được sản phẩm hoàn chỉnh, với mục đích phục vụ hoạt động kinh doanh sản xuất', 'giay-dung-in-hoa-don-–-bao-bieu-NmDWayK3xqObhzkL.jpg', 'normal', 0, '<div class=\"separator\"><em><strong>Mọi sản phẩm tới tay người ti&ecirc;u d&ugrave;ng đều phải c&oacute; nguy&ecirc;n liệu mới tạo được sản phẩm ho&agrave;n chỉnh, với mục đ&iacute;ch phục vụ hoạt động kinh doanh sản xuất, trong b&agrave;i viết n&agrave;y ch&uacute;ng ta sẽ t&igrave;m hiểu giấy dụng&nbsp;in h&oacute;a đơn &ndash; b&aacute;o biểu, l&agrave; nguy&ecirc;n liệu đầu ti&ecirc;n để phục vụ qu&aacute; tr&igrave;nh tạo n&ecirc;n cuốn&nbsp;h&oacute;a đơn. Ngo&agrave;i giấy th&igrave; th&igrave; c&ograve;n sử dụng c&aacute;c dụng cụ m&aacute;y m&oacute;c kh&aacute;c như: m&aacute;y in Riso MD5, m&aacute;y x&eacute;n, m&aacute;y cấn &hellip;, trong b&agrave;i viết n&agrave;y ch&uacute;ng ta chỉ t&igrave;m hiểu c&aacute;c loại giấy được sử dụng trong qu&aacute; tr&igrave;nh&nbsp;<a href=\"https://dailong.asia/\">in ấn</a>.</strong></em></div>\r\n<div class=\"separator\">&nbsp;</div>\r\n<div class=\"separator\"><em><a href=\"https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjeIB9EqG7ESBAV4Ol0bSpDvGRL0GRWhqI-MDrxs8brusU1mV9Q6LsQOds69hIPjpzOQWYnNFkUeeWKY5AxJV9ZoJxEGDcS55YaxBHKlMxNuA7CRJozYEs5TO3EdlyDJcMKlRGFynEJ-DWCv_KCFp74CpaZOu8Ho_o_dkg2jwR5gQjSRibPTGb5IsWu/s2560/gi%E1%BA%A5y%20for%20in%20h%C3%B3a%20%C4%91%C6%A1n.jpg\"><img src=\"https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjeIB9EqG7ESBAV4Ol0bSpDvGRL0GRWhqI-MDrxs8brusU1mV9Q6LsQOds69hIPjpzOQWYnNFkUeeWKY5AxJV9ZoJxEGDcS55YaxBHKlMxNuA7CRJozYEs5TO3EdlyDJcMKlRGFynEJ-DWCv_KCFp74CpaZOu8Ho_o_dkg2jwR5gQjSRibPTGb5IsWu/s320/gi%E1%BA%A5y%20for%20in%20h%C3%B3a%20%C4%91%C6%A1n.jpg\" width=\"320\" height=\"240\" border=\"0\" data-original-height=\"1920\" data-original-width=\"2560\" /></a></em></div>\r\n<h2 id=\"mcetoc_1ggfmn16714\">Thế n&agrave;o l&agrave; giấy in h&oacute;a đơn</h2>\r\n<p>L&agrave; loại giấy c&oacute; k&iacute;ch thước lớn hơn giấy in A4 th&ocirc;ng thường, định lượng thấp hơn giấy A4 thường d&ugrave;ng 70Gram, mục đ&iacute;ch của việc k&iacute;ch thước lớn hơn giấy in A4 th&ocirc;ng thường để cắt x&eacute;n ra 2 cuốn A5 m&agrave; kh&ocirc;ng bị thiếu k&iacute;ch thước khi cắt đ&ocirc;i tờ giấy A4, bởi v&igrave; th&ocirc;ng thường để c&oacute; 1 cuốn h&oacute;a đơn c&oacute; 4 g&oacute;c phẳng đẹp th&igrave; việc xếp bằng l&agrave; kh&ocirc;ng thể, thay v&agrave;o đ&oacute; người thợ l&agrave;m giấy sẽ cắt từng g&oacute;c cạnh. Với k&iacute;ch thước lớn hơn khổ giấy A4 th&igrave; sau khi cắt đ&ocirc;i để được khổ A5 th&igrave; xung quanh viền vẫn dư thừa 1 khoảng nhỏ để cắt gọt vu&ocirc;ng vức. Vậy n&ecirc;n l&yacute; do của việc d&ugrave;ng giấy c&oacute; k&iacute;ch thước lớn hơn khổ A4.</p>\r\n<p>&nbsp;</p>\r\n<div class=\"separator\"><a href=\"https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgUjlVfOYeK-lfEwmODHCOlYB7V0HIZyBKr6WuIUkgab4DYIyuPjxUUPS91pRBFSrPMF43dX41LC1lbM0J-z--Q5UQcUYoGJW4rtgpfydqDODcOLV71VkYcO7Ygg1fBFPpyOKaMrazADTBd-vOcgXzgvxehOdjjLvWsimyFJwQ13nkzL9wAvG_7Wysa/s2560/H%C3%B3a%20%C4%91%C6%A1n.jpg\"><img src=\"https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgUjlVfOYeK-lfEwmODHCOlYB7V0HIZyBKr6WuIUkgab4DYIyuPjxUUPS91pRBFSrPMF43dX41LC1lbM0J-z--Q5UQcUYoGJW4rtgpfydqDODcOLV71VkYcO7Ygg1fBFPpyOKaMrazADTBd-vOcgXzgvxehOdjjLvWsimyFJwQ13nkzL9wAvG_7Wysa/s320/H%C3%B3a%20%C4%91%C6%A1n.jpg\" width=\"320\" height=\"240\" border=\"0\" data-original-height=\"1920\" data-original-width=\"2560\" /></a></div>\r\n<h2 id=\"mcetoc_1ggfmn16715\">Giấy Ford</h2>\r\n<p>L&agrave; loại giấy d&ugrave;ng phổ biến nhất bởi v&igrave; bất cứ cuốn h&oacute;a đơn &ndash; b&aacute;o biểu n&agrave;o đều sử dụng, giấy n&agrave;y với mục đ&iacute;ch ghi trực tiếp l&ecirc;n đối với h&oacute;a đơn 1 li&ecirc;n, v&agrave; l&agrave; li&ecirc;n cuối c&ugrave;ng đối với h&oacute;a đơn từ 2 li&ecirc;n trở l&ecirc;n.</p>\r\n<p>K&iacute;ch thước: lớn hơn khổ giấy A4, định lượng thấp hơn 70 gram.</p>\r\n<p>&nbsp;</p>\r\n<div class=\"separator\"><a href=\"https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjZmyokviZTdtkiUHsiSu6RSxKdwIS7Ch5OlJSEYMkWs4sTEYAC29LG4Nw0zDsLPaf26tr7GxyQLe290FVAuW0Sf_RkVQPyEtCf6YwqWDMVVF70sgfN7UmNA8lH7TwPubp09ra_pNbG3aUa2IKoeObrJQzdAxcpPTy5ucROvroRpuu4JlO-BvNKhMfe/s2560/gi%E1%BA%A5y%20for%20in%20h%C3%B3a%20%C4%91%C6%A1n.jpg\"><img src=\"https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjZmyokviZTdtkiUHsiSu6RSxKdwIS7Ch5OlJSEYMkWs4sTEYAC29LG4Nw0zDsLPaf26tr7GxyQLe290FVAuW0Sf_RkVQPyEtCf6YwqWDMVVF70sgfN7UmNA8lH7TwPubp09ra_pNbG3aUa2IKoeObrJQzdAxcpPTy5ucROvroRpuu4JlO-BvNKhMfe/s320/gi%E1%BA%A5y%20for%20in%20h%C3%B3a%20%C4%91%C6%A1n.jpg\" width=\"320\" height=\"240\" border=\"0\" data-original-height=\"1920\" data-original-width=\"2560\" /></a></div>\r\n<h2 id=\"mcetoc_1ggfmn16716\">Giấy Carbonless</h2>\r\n<p>L&agrave; giấy được sử dụng cho h&oacute;a đơn từ 2 li&ecirc;n trở l&ecirc;n, với h&oacute;a đơn 2 li&ecirc;n th&igrave; sử dụng giấy carbonless m&agrave;u v&agrave;ng, nhiều hơn 2 li&ecirc;n th&igrave; d&ugrave;ng th&ecirc;m giấy m&agrave;u v&agrave;ng, m&agrave;u trắng. Với chức năng như giấy than copy nội dung từ bản tr&ecirc;n xuống bản dưới c&ugrave;ng l&agrave; giấy ford</p>\r\n<p>&nbsp;</p>\r\n<div class=\"separator\"><a href=\"https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjlaP65H7zaoE452eBZktlaj2K9s_Xgnt1L1hCAKvi7p60DeHX8gyN7nAg7ioPOOjprjIx74Rgf7ijS8aoxmbi8PHBDcDVwWmZlLjd6BFPOmRjHj6lUg08IuP1HBan1huI6krPGEvotQ7hdkGZ0jATWdJ7f4uw0kmHMsGNtbb1m5VHvdpKPSS5yFa5L/s2048/Giay%20in%20h%C3%B3a%20%C4%91%C6%A1n%20carbonless.jpg\"><img src=\"https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjlaP65H7zaoE452eBZktlaj2K9s_Xgnt1L1hCAKvi7p60DeHX8gyN7nAg7ioPOOjprjIx74Rgf7ijS8aoxmbi8PHBDcDVwWmZlLjd6BFPOmRjHj6lUg08IuP1HBan1huI6krPGEvotQ7hdkGZ0jATWdJ7f4uw0kmHMsGNtbb1m5VHvdpKPSS5yFa5L/s320/Giay%20in%20h%C3%B3a%20%C4%91%C6%A1n%20carbonless.jpg\" width=\"320\" height=\"240\" border=\"0\" data-original-height=\"1536\" data-original-width=\"2048\" /></a></div>\r\n<h2 id=\"mcetoc_1ggfmn16717\">Giấy b&igrave;a</h2>\r\n<p>Chỉ c&oacute; chức năng l&agrave;m b&igrave;a cuốn h&oacute;a đơn, ghi th&ocirc;ng tin cuốn h&oacute;a đơn g&igrave;, như: h&oacute;a đơn b&aacute;n lẻ, phiếu xuất kho, sổ nhập xuất, b&aacute;o biểu h&agrave;ng h&oacute;a,&hellip;</p>\r\n<p><em>M&agrave;u sắc:</em>&nbsp;tại C&ocirc;ng Ty Curie Việt Nam sử dụng m&agrave;u xanh da trời, m&agrave;u hồng nh&aacute;m.</p>\r\n<p>Như vậy qua b&agrave;i viết n&agrave;y c&aacute;c bạn đ&atilde; c&oacute; ch&uacute;t th&ocirc;ng tin về giấy in trong lĩnh vực in H&oacute;a Đơn &ndash; B&aacute;o Biểu</p>\r\n<p><strong>Li&ecirc;n hệ in h&oacute;a đơn &ndash; b&aacute;o biểu</strong></p>\r\n<p><em><strong>C&Ocirc;NG TY TNHH CURIE VIỆT NAM</strong></em></p>\r\n<p><em><strong>ĐỊA CHỈ: KHU PHỐ AN H&Ograve;A, PHƯỜNG H&Ograve;A LỢI, BẾN C&Aacute;T, B&Igrave;NH DƯƠNG</strong></em></p>\r\n<p><em><strong>HOTLINE: 0974 953 600 &ndash; Mr Ph&uacute;</strong></em></p>\r\n<p><em><strong>Email: phuth.me@gmail.com</strong></em></p>', NULL, NULL, 8, '1', 'Mọi sản phẩm tới tay người tiêu dùng đều phải có nguyên liệu mới tạo được sản phẩm hoàn chỉnh, với mục đích phục vụ hoạt động kinh doanh sản xuất', 'Mọi sản phẩm tới tay người tiêu dùng đều phải có nguyên liệu mới tạo được sản phẩm hoàn chỉnh, với mục đích phục vụ hoạt động kinh doanh sản xuất', '2023-09-13 03:02:31', '2023-09-19 08:44:27', NULL),
(48, 8, 'In Nhanh Hóa Đơn', 'in-nhanh-hoa-don', 'Hóa đơn báo biểu', 'hoa-don-bao-bieu', '- 50 Cặp\r\n- 100 tờ\r\n- Số lượng order: từ 10 cuốn', 'hoa-don-bt9u1cFAsJYz2vKB.jpg', 'san-pham', 0, '<p>Cam kết cung cấp số lượng lớn v&agrave; số lượng từ 10 cuốn với thời gian nhanh nhất</p>', 21000, 0, 12, '1', 'hóa đơn viết tay, hóa đơn bán lẻ cung cấp sản phẩm lớn cho khách hàng cá nhân hoặc doanh nghiệp', 'hóa đơn viết tay, hóa đơn bán lẻ', '2023-09-14 03:18:49', '2023-09-19 08:57:31', NULL),
(51, 8, 'In Nhanh Hóa Đơn', 'in-nhanh-hoa-don', 'QUY TRÌNH HOÀN THIỆN HÓA ĐƠN - BÁO BIỂU 1 LIÊN', 'quy-trinh-hoan-thien-hoa-don---bao-bieu-1-lien', 'Quy trình hoàn thiện hóa đơn 1 liên là một quy trình khép kín từ việc thiết kế, điều chỉnh, hoàn thiện mẫu thiết kế với khách hàng cho tới việc tạo ra cuốn...', 'quy-trinh-hoan-thien-hoa-don---bao-bieu-1-lien-pAhwjZrgEuvWXRJO.jpg', 'normal', 0, '<div class=\"mce-toc\">\r\n<h2>Nội dung ch&iacute;nh</h2>\r\n<ul>\r\n<li><a href=\"#mcetoc_1han30m851a\">Mục đ&iacute;ch</a></li>\r\n<li><a href=\"#mcetoc_1han30m851b\">Chi tiết thiết kế</a></li>\r\n<li><a href=\"#mcetoc_1han30m851c\">Quy c&aacute;ch sản phẩm</a></li>\r\n<li><a href=\"#mcetoc_1han30m851d\">Ưu Nhược điểm</a></li>\r\n</ul>\r\n</div>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-size: 24px;\"><em>Quy tr&igrave;nh ho&agrave;n thiện h&oacute;a đơn 1 li&ecirc;n l&agrave; một quy tr&igrave;nh kh&eacute;p k&iacute;n từ việc thiết kế, điều chỉnh, ho&agrave;n thiện mẫu thiết kế với kh&aacute;ch h&agrave;ng cho tới việc tạo ra cuốn h&oacute;a đơn ho&agrave;n chỉnh. Ch&uacute;ng t&ocirc;i in h&oacute;a đơn b&aacute;n lẻ số lượng &iacute;t 1 li&ecirc;n, 2 li&ecirc;n, v&agrave; 3 li&ecirc;n, l&agrave; qu&aacute; tr&igrave;nh từ c&ocirc;ng t&aacute;c thiết kế cho tới ho&agrave;n thiện sản phẩm in h&oacute;a đơn, offset. Nhằm đ&aacute;p ứng mọi nhu cầu kh&aacute;ch h&agrave;ng từ số lượng 10 cuốn cho tới h&agrave;ng trăm cuốn h&oacute;a đơn.</em></span></p>\r\n<h2 id=\"mcetoc_1han30m851a\"><span style=\"text-decoration: underline; font-size: 24px;\"><span style=\"color: #000000; text-decoration: underline;\"><strong>Mục đ&iacute;ch</strong></span></span></h2>\r\n<p><span style=\"font-size: 24px;\">H&oacute;a Đơn &ndash; B&aacute;o Biểu 1 Li&ecirc;n được sử dụng nhiều cho c&aacute;c đại l&yacute; với mục đ&iacute;ch k&ecirc; khai h&agrave;ng h&oacute;a, sản phẩm v&agrave;o kho, b&aacute;n h&agrave;ng cho kh&aacute;ch h&agrave;ng kh&ocirc;ng c&oacute; mục đ&iacute;ch lưu trữ, d&ugrave;ng cho c&aacute;c nh&agrave; h&agrave;ng để order m&oacute;n ăn, k&ecirc; khai sản phẩm thanh to&aacute;n. Sản phẩm n&agrave;y cũng được một v&agrave;i C&ocirc;ng ty, Doanh nghiệp sử dụng cho nh&acirc;n vi&ecirc;n, c&ocirc;ng nh&acirc;n khi c&oacute; c&ocirc;ng việc như xin tạm thanh to&aacute;n, ứng lương, giấy ra ngo&agrave;i khi c&oacute; việc cần hoặc v&agrave;o những mục đ&iacute;ch c&oacute; hoặc kh&ocirc;ng c&oacute; t&iacute;nh chất đối chiếu về sau.</span></p>\r\n<p><span style=\"font-size: 24px;\"><em><img title=\"H&oacute;a đơn 1 li&ecirc;n\" src=\"https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEihqpYju2aTeec4g2vUV9UOTPKFAaTJBYsPv6swbBmrloIJ5OztJPr_M6LDMEB1iBT-uHK4HTiRnxtplNontuQ6HtOq6eKuR57xCbEEyTrlINl8v16AGrn-VuRU4JVaYcFeVN6LTVIzDWQJX-ZmJS2vWJxlYU4rdKmXX7gdHCamPRMpe6mg3uUa39SL/s2560/H%C3%B3a%20%C4%91%C6%A1n.jpg\" width=\"100%\" height=\"100%\" /></em></span></p>\r\n<h2 id=\"mcetoc_1han30m851b\"><span style=\"text-decoration: underline; font-size: 24px;\"><strong>Chi tiết thiết kế</strong></span></h2>\r\n<p><span style=\"font-size: 24px;\">Với những sản phẩm in h&oacute;a đơn b&aacute;o biểu th&igrave; thiết kế kh&aacute; đơn giản, ch&uacute;ng t&ocirc;i sử dụng phần mềm chuy&ecirc;n dụng l&agrave; Corel để tạo n&ecirc;n bản thiết kế gửi cho kh&aacute;ch h&agrave;ng, th&ocirc;ng thường sẽ c&oacute; những nội dung m&agrave; n&oacute; phụ thuộc v&agrave;o nhu cầu kh&aacute;ch h&agrave;ng nhưng th&ocirc;ng thường với đại l&yacute; th&igrave; sẽ l&agrave;: t&ecirc;n đại l&yacute;, địa chỉ, số điện thoại, logo (nếu c&oacute;), t&ecirc;n sản phẩm (quy c&aacute;ch), đơn vị t&iacute;nh, số lượng, đơn gi&aacute; (nếu c&oacute;), tổng (th&agrave;nh tiền), phần k&yacute; x&aacute;c nhận, &hellip; T&ugrave;y thuộc v&agrave; đặc th&ugrave; m&agrave; số lượng nội dung c&oacute; thể &iacute;t hoặc nhiều, v&agrave; ch&uacute;ng t&ocirc;i sẽ hỗ trợ 100% chi ph&iacute; thiết kế cũng như thay đổi nội dung cũng như h&igrave;nh thức cho kh&aacute;ch h&agrave;ng, để kh&aacute;ch h&agrave;ng h&agrave;i l&ograve;ng với bản thiết kế cuối c&ugrave;ng.</span></p>\r\n<p><span style=\"font-size: 24px;\"><em>Với c&aacute;c doanh nghiệp, c&ocirc;ng ty nội dung sẽ c&oacute; th&ecirc;m ng&ocirc;n ngữ kh&aacute;c ngo&agrave;i tiếng Việt (d&ugrave;ng cho người Việt), ng&ocirc;n ngữ c&ograve;n lại cho chủ Doanh nghiệp, t&ugrave;y v&agrave;o y&ecirc;u cầu từng bộ phận m&agrave; sẽ c&oacute; những nội dung kh&aacute;c nhau đ&aacute;p ứng nhu cầu thống k&ecirc; của bộ phận đ&oacute;.</em></span></p>\r\n<h2 id=\"mcetoc_1han30m851c\"><span style=\"text-decoration: underline; font-size: 24px;\"><strong>Quy c&aacute;ch sản phẩm</strong></span></h2>\r\n<p><span style=\"font-size: 24px;\">Chủ yếu l&agrave; k&iacute;ch thước khổ in l&agrave; A5, một v&agrave;i trường hợp l&agrave; A6 để tiết kiệm chi ph&iacute; cũng như nội dung &iacute;t. Sản phẩm sẽ được đ&oacute;ng g&aacute;y hoặc vết keo v&agrave; được cấn răng cưa phần g&aacute;y dễ d&agrave;ng cho việc x&eacute; bi&ecirc;n lai, c&oacute; một v&agrave;i trường hợp 1 li&ecirc;n như 2 nội dung tr&ecirc;n 1 li&ecirc;n với mục đ&iacute;ch giữ li&ecirc;n 2, li&ecirc;n 1 kh&aacute;ch h&agrave;ng giữ, trường hợp n&agrave;y sẽ cấn răng cưa giữa tờ giấy.</span></p>\r\n<h2 id=\"mcetoc_1han30m851d\"><span style=\"text-decoration: underline; font-size: 24px;\">Ưu Nhược điểm</span></h2>\r\n<p><span style=\"font-size: 24px;\">- Ưu điểm của h&oacute;a đơn n&agrave;y l&agrave; số lượng lớn v&igrave; chỉ d&ugrave;ng duy nhất 1 li&ecirc;n</span></p>\r\n<p><span style=\"font-size: 24px;\">- Thời gian sử dụng nhiều v&igrave; chỉ d&ugrave;ng 1 li&ecirc;n cho 1 lần ghi ch&eacute;p.</span></p>\r\n<p><span style=\"font-size: 24px;\">- Chi ph&iacute; rẻ so với thời gian sử dụng</span></p>\r\n<p><span style=\"font-size: 24px;\">Nhược điểm chỉ ghi ch&eacute;p cho c&aacute; nh&acirc;n sử dụng kh&ocirc;ng c&oacute; t&iacute;nh đối chứng hoặc bản sao gửi lại cho kh&aacute;ch h&agrave;ng.</span></p>\r\n<p><span style=\"font-size: 24px;\">Li&ecirc;n hệ để đặt h&oacute;a đơn 1 li&ecirc;n hoặc nhiều li&ecirc;n</span></p>\r\n<p><span style=\"font-size: 24px;\"><strong>Li&ecirc;n hệ in h&oacute;a đơn &ndash; b&aacute;o biểu</strong></span></p>\r\n<p><span style=\"font-size: 24px;\"><em><strong>C&Ocirc;NG TY TNHH CURIE VIỆT NAM</strong></em></span></p>\r\n<p><span style=\"font-size: 24px;\"><em><strong>ĐỊA CHỈ: KHU PHỐ AN H&Ograve;A, PHƯỜNG H&Ograve;A LỢI, BẾN C&Aacute;T, B&Igrave;NH DƯƠNG</strong></em></span></p>\r\n<p><span style=\"font-size: 24px;\"><em><strong>HOTLINE: 0974 953 600 &ndash; Mr Ph&uacute;</strong></em></span></p>\r\n<p><span style=\"font-size: 24px;\"><em><strong>Email: phuth.me@gmail.com</strong></em></span></p>', 0, 0, 1, '1', 'Quy trình hoàn thiện hóa đơn 1 liên là một quy trình khép kín từ việc thiết kế, điều chỉnh', 'Quy trình hoàn thiện hóa đơn 1 liên là một quy trình khép kín từ việc thiết kế, điều chỉnh', '2023-09-19 09:06:17', '2023-09-19 09:26:31', NULL);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cate`
--
ALTER TABLE `cate`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `don-hang`
--
ALTER TABLE `don-hang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `gallery_image`
--
ALTER TABLE `gallery_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
