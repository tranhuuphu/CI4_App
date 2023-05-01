-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th5 01, 2023 lúc 03:44 PM
-- Phiên bản máy phục vụ: 10.5.19-MariaDB-cll-lve
-- Phiên bản PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `u561632352_dailong`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `carousel`
--

CREATE TABLE `carousel` (
  `carousel_id` int(10) UNSIGNED NOT NULL,
  `carousel_title` varchar(255) NOT NULL,
  `carousel_intro` varchar(255) NOT NULL,
  `carousel_post_id` int(11) NOT NULL,
  `carousel_post_title` varchar(255) NOT NULL,
  `carousel_post_slug` varchar(255) NOT NULL,
  `carousel_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cate`
--

CREATE TABLE `cate` (
  `id` int(10) UNSIGNED NOT NULL,
  `cate_name` varchar(255) NOT NULL,
  `cate_slug` varchar(255) NOT NULL,
  `cate_parent_id` int(11) NOT NULL,
  `cate_image` varchar(255) NOT NULL,
  `cate_image_status` int(2) DEFAULT NULL,
  `cate_status` int(11) NOT NULL,
  `cate_meta_key` varchar(255) NOT NULL,
  `cate_meta_desc` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cate`
--

INSERT INTO `cate` (`id`, `cate_name`, `cate_slug`, `cate_parent_id`, `cate_image`, `cate_image_status`, `cate_status`, `cate_meta_key`, `cate_meta_desc`, `created_at`, `updated_at`) VALUES
(1, 'In Kỹ Thuật Số', 'in-ky-thuat-so', 0, 'in-ky-thuat-so-n31Iup.jpg', 0, 0, 'In Nhanh Kỹ Thuật Số, In Decal, Bat Hiflex, PP Cán Màng', 'In Nhanh Kỹ Thuật Số, In Decal, Bat Hiflex, PP Cán Màng', '2022-10-23 22:29:44', '2022-10-23 22:29:44'),
(2, 'In Offset', 'in-offset', 0, 'in-offset-fIZrc6.jpg', 0, 0, 'In Offset, dịch vụ in siêu tốc Dai Long, In Offset 1 màu, offset 4 màu', 'In Offset, dịch vụ in siêu tốc Dai Long, In Offset 1 màu, offset 4 màu, in nhanh', '2022-10-24 11:23:51', '2022-10-24 11:23:51'),
(3, 'Tư Vấn Thiết Kế', 'tu-van-thiet-ke', 0, 'tu-van-thiet-ke-cUyevm.png', 0, 1, 'Tư Vấn Thiết Kế Quảng Cáo, In Ấn, In Decal, PP, Hóa Đơn Báo Biểu Offset', 'Tư Vấn Thiết Kế Quảng Cáo, In Ấn, In Decal, PP, Hóa Đơn Báo Biểu Offset', '2022-10-28 00:28:42', '2022-10-30 09:14:18'),
(4, 'Thi Công', 'thi-cong', 0, 'dich-vu-in-nhanh-kOgFng.png', 0, 0, 'Dịch Vụ Thi Công, cung cấp dịch vụ thi công công trình cơ khí, công trình trong doanh nghiệp, bảng hiệu led', 'Dịch Vụ Thi Công, cung cấp dịch vụ thi công công trình cơ khí, công trình trong doanh nghiệp, bảng hiệu led', '2022-10-28 10:59:05', '2022-11-24 22:58:12'),
(5, 'Sản Phẩm', 'san-pham', 0, 'san-pham-kfd65l.jpg', 0, 0, 'Danh mục sản phẩm cung cấp báo giá chi tiết giá các sản phẩm in với số lượng lớn, hoặc đơn hàng thường xuyên', 'Danh mục sản phẩm cung cấp báo giá chi tiết giá các sản phẩm in với số lượng lớn, hoặc đơn hàng thường xuyên, cung cấp các dòng máy in cũ cũng như tư vấn dòng máy in', '2022-10-28 22:23:27', '2022-10-28 22:23:27'),
(6, 'Blog', 'blog', 0, 'blog-OTujyn.jpg', 0, 0, 'Blog tin tức của đại long về các sản phẩm in, các tin tức ngành in và các hoạt động liên quan về thủ thuật thi công', 'Blog tin tức của đại long về các sản phẩm in, các tin tức ngành in và các hoạt động liên quan về thủ thuật thi công', '2022-10-28 22:26:44', '2022-10-28 22:26:44');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `home_page_info`
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
-- Cấu trúc bảng cho bảng `image_tinycme`
--

CREATE TABLE `image_tinycme` (
  `id` int(11) NOT NULL,
  `image_TinyCME_name` varchar(1000) DEFAULT NULL,
  `image_TinyCME_status` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_10_09_135640_create_permission_tables', 1),
(5, '2020_10_09_135732_create_post_table', 1),
(6, '2021_01_06_151740_create_cate_table', 1),
(7, '2021_01_06_152318_create_tags_table', 1),
(8, '2021_01_06_165549_create_carousel_table', 1),
(9, '2021_01_06_165922_create_page_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `page`
--

CREATE TABLE `page` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `page_name` varchar(255) NOT NULL,
  `page_slug` varchar(255) NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `page_image` varchar(255) NOT NULL,
  `page_image_status` int(2) DEFAULT NULL,
  `page_status` int(11) NOT NULL,
  `page_content` text NOT NULL,
  `facebook` varchar(200) DEFAULT NULL,
  `youtube` varchar(200) DEFAULT NULL,
  `twitter` varchar(200) DEFAULT NULL,
  `pinterest` varchar(255) DEFAULT NULL,
  `maps` varchar(300) DEFAULT NULL,
  `f_app` varchar(100) DEFAULT NULL,
  `g_app` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `google_image` varchar(200) DEFAULT NULL,
  `page_meta_key` varchar(255) NOT NULL,
  `page_meta_desc` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `page`
--

INSERT INTO `page` (`id`, `user_id`, `page_name`, `page_slug`, `page_title`, `page_image`, `page_image_status`, `page_status`, `page_content`, `facebook`, `youtube`, `twitter`, `pinterest`, `maps`, `f_app`, `g_app`, `phone`, `google_image`, `page_meta_key`, `page_meta_desc`, `created_at`, `updated_at`) VALUES
(1, 1, 'Trang Chủ', 'trang-chu', 'Trang Chủ Dịch Vụ In Ấn Đại Long', 'trang-chu-G4znZj.png', 0, 1, '<p>CHUY&Ecirc;N CUNG CẤP C&Aacute;C GIẢI PH&Aacute;P IN KỸ THUẬT SỐ CHẤT LƯỢNG CAO, GIẢI PH&Aacute;P IN OFFSET, IN C&Ocirc;NG NGHIỆP SỐ LƯỢNG LỚN, ĐẶC BIỆT C&Aacute;C SẢN PHẨM IN ẤN NHƯ: IN BẠT HIFLEX, IN DECAL, IN PP, V&Agrave; C&Aacute;C SẢN PHẨM IN OFFSET NHƯ IN TEM NH&Atilde;N, IN DANH THIẾP CARD VISIT, IN H&Oacute;A ĐƠN SỐ LƯỢNG LỚN GIAO NGAY, IN GIA C&Ocirc;NG CHO C&Aacute;C C&Ocirc;NG TY, ĐƠN VỊ QUẢNG C&Aacute;O. THI C&Ocirc;NG KỸ THUẬT, CƠ KH&Iacute; V&Agrave; C&Aacute;C GIẢI PH&Aacute;P THIẾT KẾ CƠ KH&Iacute;. <span style=\"color: #e03e2d;\"><strong>DAILONG.ASIA</strong></span> L&Agrave; TRANG WEB CH&Iacute;NH THỨC CỦA <span style=\"color: #3598db;\"><strong>C&Ocirc;NG TY TNHH CURIE VIỆT NAM.</strong></span></p>\r\n<p>Địa Chỉ: Đường N14, KP. An H&ograve;a, P. H&ograve;a Lợi, TX. Bến C&aacute;t, B&igrave;nh Dương, VN</p>\r\n<p>MST: 3702594617</p>\r\n<p>Email: <a href=\"mailto:phuth.me@gmail.com\" target=\"_blank\" rel=\"noopener\">phuth.me@gmail.com</a></p>\r\n<p>ĐT: 0974 953 600</p>\r\n<p>Website: <a title=\"Website Curie Viet Nam Limited Company, Đường N14, Khu Phố An H&ograve;a, Thị x&atilde; Bến C&aacute;t, B&igrave;nh Dương\" href=\"/\" target=\"_blank\" rel=\"noopener\">dailong.asia/</a></p>', 'https://www.facebook.com/profile.php?id=100070762602051', 'https://www.youtube.com/channel/UCSvNFyqDpZ-Jd3M7kkaAmmw', NULL, NULL, 'https://goo.gl/maps/1eDCJdfzXsJho7iv9', NULL, 'o6x2SHaesCPj0RTs6wGM5hsOIRvHt9nCXI-aTtZZi00', '0974953600', 'google_image-zzePuO.png', 'Chuyên cung cấp các giải pháp in kỹ thuật số chất lượng cao, giải pháp in offset, in công nghiệp số lượng lớn, Dailong, Dailong.com, Dailong.asia', 'Chuyên cung cấp các giải pháp in kỹ thuật số chất lượng cao, giải pháp in offset, in công nghiệp số lượng lớn, cơ khí chất lượng cao. Dailong, Dailong.com, Dailong.asia', '2022-10-23 21:17:27', '2022-12-03 18:20:15'),
(2, 1, 'About Us', 'about-us', 'Giới Thiệu Về Đại Long Curie Viet Nam LTD', 'about-us-tTaBN1.png', NULL, 0, '<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\"><em>C&ocirc;ng Ty TNHH Curie Việt Nam (Curie Vietnam Ltd.,) h&igrave;nh th&agrave;nh v&agrave; ph&aacute;t triển từ năm 2010, ban đầu l&agrave; cơ sở Photocopy v&agrave; Record, trải qua thời gian ph&aacute;t triển, C&ocirc;ng ty đầu tư nh&acirc;n lực v&agrave; m&aacute;y m&oacute;c đ&aacute;p ứng nhu cầu in ấn của kh&aacute;ch h&agrave;ng, đến nay C&ocirc;ng ty đ&atilde; đầu tư đầy đủ m&aacute;y m&oacute;c cho c&aacute;c lĩnh vực như: in kỹ thuật số (KTS), in Hiflex, in UV, đặc biệt l&agrave; in 3D v&agrave; in Offset, v&agrave; ch&uacute;ng t&ocirc;i c&oacute; thể đ&aacute;p ứng nhanh nhất tất cả nhu cầu của Kh&aacute;ch h&agrave;ng</em></span></p>\r\n<p>&lt;h3 data-original-attrs=\"{\"style\":\"\"}\"&gt;<span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\"><em><strong>Phương Ch&acirc;m Hoạt Động</strong></em></span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\"><em>Với ng&agrave;nh nghề ch&iacute;nh l&agrave; in ấn c&ocirc;ng ty đ&atilde; khẳng định được m&igrave;nh l&agrave; một trong những địa chỉ tin cậy của c&aacute; nh&acirc;n tổ chức khi sử dụng dịch vụ, l&agrave;m h&agrave;i l&ograve;ng mọi đối tượng khi sử dụng dịch vụ, trong tương lai c&ocirc;ng ty ph&aacute;t triển th&ecirc;m nhiều ng&agrave;nh nghề kh&aacute;c nữa như: x&acirc;y dựng, robot c&ocirc;ng nghiệp,...</em></span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\"><em>Định hướng của c&ocirc;ng ty trong ng&agrave;nh in ấn tại B&igrave;nh Dương: trở th&agrave;nh nh&agrave; cung cấp, c&ocirc;ng ty dịch vụ số một trong lĩnh vực in offset, in thẻ nhựa, in hiflex, decal, led, alu chữ nổi, mica, inox, in b&aacute;o biểu, tờ rơi, h&oacute;a đơn chất lượng cao,... với mong muốn l&agrave;m h&agrave;i long mọi kh&aacute;ch h&agrave;ng với chất lượng v&agrave; gi&aacute; cả ph&ugrave; hợp nhất.</em></span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\"><em>&nbsp;</em></span></p>\r\n<p>&lt;h2 data-original-attrs=\"{\"style\":\"\"}\"&gt;<span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\"><em><strong>Sứ mệnh v&agrave; tầm nh&igrave;n</strong></em></span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\"><em>L&agrave; thương hiệu lớn trong ng&agrave;nh in ấn tại B&igrave;nh Dương cũng như khu vực l&acirc;n cận, với đội ngũ nh&acirc;n vi&ecirc;n thiết kế chuy&ecirc;n nghiệp, thời gian phục vụ tăng l&ecirc;n, thời gian phục vụ cho từng kh&aacute;ch h&agrave;ng với tiến độ nhanh nhất, với tầm nh&igrave;n như vậy trong thời gian tới c&ocirc;ng ty sẽ kh&ocirc;ng ngừng n&acirc;ng cao tay nghề đội ngũ thiết kế cũng như thi c&ocirc;ng, hơn thế nữa đầu tư th&ecirc;m thiết bị m&aacute;y m&oacute;c hiện đại, để chất lượng ng&agrave;y c&agrave;ng tăng.</em></span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\"><em>&nbsp;</em></span></p>\r\n<p>&lt;h2 data-original-attrs=\"{\"style\":\"\"}\"&gt;&lt;span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\" data-keep-original-tag=\"false\" data-original-attrs=\"{\"style\":\"\"}\"&gt;<em>Tại sao lựa chọn t&ecirc;n miền <a href=\"/admin/page/dailong.asia\" target=\"_blank\" rel=\"noopener\">dailong.asia</a></em></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\">Tiền th&acirc;n x&acirc;y dựng ch&uacute;ng t&ocirc;i ban đầu l&agrave; tiệm quảng c&aacute;o nhỏ lẻ với t&ecirc;n tiện l&agrave; Quảng C&aacute;o Đại Long với mong muốn giữ lại thương hiệu cũ d&ugrave; c&ocirc;ng ty đ&atilde; l&agrave; C&Ocirc;NG TY TNHH CURIE VIỆT NAM, với hoạt động chủ yếu về thiết kế quảng c&aacute;o, in ấn số lượng lớn, kh&aacute;ch h&agrave;ng từ c&aacute; nh&acirc;n hộ gia đ&igrave;nh cho tới doanh nghiệp lớn nhỏ tại khu vực B&igrave;nh Dương cũng như c&aacute;c khu vực l&acirc;n cận, vậy n&ecirc;n ch&uacute;ng t&ocirc;i đ&atilde; lấy t&ecirc;n miền <em><a href=\"/admin/page/dailong.asia\" target=\"_blank\" rel=\"noopener\">dailong.asia</a></em>&nbsp;để l&agrave;m thương hiệu giới thiệu sản phẩm của <a title=\"C&Ocirc;NG TY TNHH CURIE VIỆT NAM\" href=\"/\" target=\"_blank\" rel=\"noopener\">C&Ocirc;NG TY TNHH CURIE VIỆT NAM</a>, với những sản phẩm chủ lực về in ấn v&agrave; quảng c&aacute;o bao gồm</span></p>\r\n<p>&lt;span style=\"font-size: 16px; font-family: arial, helvetica, sans-serif;\" data-keep-original-tag=\"false\" data-original-attrs=\"{\"style\":\"\"}\"&gt;IN H&Oacute;A ĐƠN B&Aacute;O BIỂU</p>\r\n<p>&lt;span style=\"font-size: 16px; font-family: arial, helvetica, sans-serif;\" data-keep-original-tag=\"false\" data-original-attrs=\"{\"style\":\"\"}\"&gt;THIẾT KẾ THI C&Ocirc;NG QUẢNG C&Aacute;O</p>\r\n<p>&lt;span style=\"font-size: 16px; font-family: arial, helvetica, sans-serif;\" data-keep-original-tag=\"false\" data-original-attrs=\"{\"style\":\"\"}\"&gt;THI C&Ocirc;NG CHỮ NỔI ALU</p>\r\n<p>&lt;span style=\"font-size: 16px; font-family: arial, helvetica, sans-serif;\" data-keep-original-tag=\"false\" data-original-attrs=\"{\"style\":\"\"}\"&gt;THI C&Ocirc;NG MICA - LED - INOX</p>\r\n<p>&lt;span style=\"font-size: 16px; font-family: arial, helvetica, sans-serif;\" data-keep-original-tag=\"false\" data-original-attrs=\"{\"style\":\"\"}\"&gt;IN OFFSET DECAL</p>\r\n<p>&lt;span style=\"font-size: 16px; font-family: arial, helvetica, sans-serif;\" data-keep-original-tag=\"false\" data-original-attrs=\"{\"style\":\"\"}\"&gt;IN BĂNG R&Ocirc;N - DECAL SỮA</p>\r\n<p>&lt;span style=\"font-size: 16px; font-family: arial, helvetica, sans-serif;\" data-keep-original-tag=\"false\" data-original-attrs=\"{\"style\":\"\"}\"&gt;L&Agrave;M DẤU MỘC C&Aacute; NH&Acirc;N C&Ocirc;NG TY</p>\r\n<p>&lt;span style=\"font-size: 16px; font-family: arial, helvetica, sans-serif;\" data-keep-original-tag=\"false\" data-original-attrs=\"{\"style\":\"\"}\"&gt;IN BẾ TEM NH&Atilde;N OFFSET</p>\r\n<p>&lt;span style=\"font-size: 16px; font-family: arial, helvetica, sans-serif;\" data-keep-original-tag=\"false\" data-original-attrs=\"{\"style\":\"\"}\"&gt;IN SI&Ecirc;U TỐC KỸ THUẬT SỐ</p>\r\n<p>&lt;span style=\"font-size: 16px; font-family: arial, helvetica, sans-serif;\" data-keep-original-tag=\"false\" data-original-attrs=\"{\"style\":\"\"}\"&gt;TEM NH&Atilde;N -&nbsp; THẺ - TEM 7 M&Agrave;U - TEM XI BẠC - TEM CUỘN</p>\r\n<p>&lt;span style=\"font-size: 16px; font-family: arial, helvetica, sans-serif;\" data-keep-original-tag=\"false\" data-original-attrs=\"{\"style\":\"\"}\"&gt;V&Agrave; C&Aacute;C DỊCH VỤ IN TỔNG HỢP KH&Aacute;C</p>\r\n<p>&lt;span style=\"font-size: 16px; font-family: arial, helvetica, sans-serif;\" data-keep-original-tag=\"false\" data-original-attrs=\"{\"style\":\"\"}\"&gt;......</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\"><em>&nbsp;</em></span></p>\r\n<p>&lt;h2 data-original-attrs=\"{\"style\":\"\"}\"&gt;&lt;span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\" data-keep-original-tag=\"false\" data-original-attrs=\"{\"style\":\"\"}\"&gt;&lt;strong data-original-attrs=\"{\"style\":\"\"}\"&gt;&lt;span style=\"color: #2b00fe;\" data-keep-original-tag=\"false\" data-original-attrs=\"{\"style\":\"\"}\"&gt;<u>LI&Ecirc;N HỆ:</u> &lt;p data-original-attrs=\"{\"style\":\"\"}\"&gt;<a href=\"/\" target=\"_blank\" rel=\"noopener\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\">&lt;em data-original-attrs=\"{\"style\":\"\"}\"&gt;&lt;strong data-original-attrs=\"{\"style\":\"\"}\"&gt;&lt;span style=\"color: #2b00fe;\" data-keep-original-tag=\"false\" data-original-attrs=\"{\"style\":\"\"}\"&gt;C&Ocirc;NG TY TNHH CURIE VIỆT NAM</span></a> &lt;p data-original-attrs=\"{\"style\":\"\"}\"&gt;<span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\">&lt;em data-original-attrs=\"{\"style\":\"\"}\"&gt;&lt;strong data-original-attrs=\"{\"style\":\"\"}\"&gt;&lt;span style=\"color: #2b00fe;\" data-keep-original-tag=\"false\" data-original-attrs=\"{\"style\":\"\"}\"&gt;ĐỊA CHỈ: KHU PHỐ AN H&Ograve;A, PHƯỜNG H&Ograve;A LỢI, BẾN C&Aacute;T, B&Igrave;NH DƯƠNG</span> &lt;p data-original-attrs=\"{\"style\":\"\"}\"&gt;<span style=\"font-family: arial, helvetica, sans-serif; font-size: 16px;\">&lt;em data-original-attrs=\"{\"style\":\"\"}\"&gt;&lt;strong data-original-attrs=\"{\"style\":\"\"}\"&gt;&lt;span style=\"color: #2b00fe;\" data-keep-original-tag=\"false\" data-original-attrs=\"{\"style\":\"\"}\"&gt;HOTLINE: 0974 953 600 &ndash; Mr Ph&uacute;</span> &lt;p data-original-attrs=\"{\"style\":\"\"}\"&gt;<span style=\"color: #2b00fe; font-family: arial, helvetica, sans-serif;\"><span style=\"font-size: 16px;\"><strong><em>Email: phuth.me@gmail.com</em></strong></span></span></p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'decal, PP, bạt Hiflex, dailong, asia, in nhanh chất lượng', 'Dailong VN cung cấp các sản phẩm in offset, in decal', '2022-10-24 18:22:23', '2022-11-25 11:47:02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'role-list', 'web', '2021-01-07 08:38:58', '2021-01-07 08:38:58'),
(2, 'role-create', 'web', '2021-01-07 08:38:58', '2021-01-07 08:38:58'),
(3, 'role-edit', 'web', '2021-01-07 08:38:58', '2021-01-07 08:38:58'),
(4, 'role-delete', 'web', '2021-01-07 08:38:58', '2021-01-07 08:38:58'),
(5, 'post-list', 'web', '2021-01-07 08:38:58', '2021-01-07 08:38:58'),
(6, 'post-create', 'web', '2021-01-07 08:38:58', '2021-01-07 08:38:58'),
(7, 'post-edit', 'web', '2021-01-07 08:38:58', '2021-01-07 08:38:58'),
(8, 'post-delete', 'web', '2021-01-07 08:38:58', '2021-01-07 08:38:58'),
(9, 'user-list', 'web', '2021-01-07 08:38:58', '2021-01-07 08:38:58'),
(10, 'user-create', 'web', '2021-01-07 08:38:58', '2021-01-07 08:38:58'),
(11, 'user-edit', 'web', '2021-01-07 08:38:58', '2021-01-07 08:38:58'),
(12, 'user-delete', 'web', '2021-01-07 08:38:58', '2021-01-07 08:38:58');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post`
--

CREATE TABLE `post` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_cate_id` int(11) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_slug` varchar(255) NOT NULL,
  `post_intro` varchar(255) NOT NULL,
  `post_image` varchar(255) NOT NULL,
  `post_thumb_image` varchar(100) DEFAULT NULL,
  `post_cate_slug` varchar(100) DEFAULT NULL,
  `post_image_status` int(2) DEFAULT NULL,
  `post_image_thumb_status` int(2) DEFAULT NULL,
  `post_status` varchar(20) DEFAULT NULL,
  `post_featured` int(11) DEFAULT NULL,
  `post_content` text NOT NULL,
  `post_price` int(12) DEFAULT NULL,
  `post_sale` int(12) DEFAULT NULL,
  `post_view` int(11) NOT NULL,
  `post_meta_key` varchar(255) NOT NULL,
  `post_meta_desc` varchar(255) NOT NULL,
  `post_user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `post`
--

INSERT INTO `post` (`id`, `post_cate_id`, `post_title`, `post_slug`, `post_intro`, `post_image`, `post_thumb_image`, `post_cate_slug`, `post_image_status`, `post_image_thumb_status`, `post_status`, `post_featured`, `post_content`, `post_price`, `post_sale`, `post_view`, `post_meta_key`, `post_meta_desc`, `post_user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'In Decal Sữa', 'in-decal-sua', 'Decal sữa hay trong suốt là lớp màng nhựa PP trong có bề 2 mặt trong suốt, có thể nhìn xuyên thấu qua 2 mặt, có thể in xuôi chiều hoặc in ngược chiều', 'in-decal-sua-qQYhhq.jpg', 'thumb_in-decal-sua-qQYhhq.jpg', 'in-ky-thuat-so', 0, 0, 'normal', 0, '<div class=\"mce-toc\">\r\n<h2>Nội Dung</h2>\r\n<ul>\r\n<li><a href=\"#mcetoc_1gg4mqnb6d\">Đặc Điểm Mực In Decal</a></li>\r\n<li><a href=\"#mcetoc_1gg4mqnb6e\">Chất Liệu In</a></li>\r\n<li><a href=\"#mcetoc_1gg4mqnb6f\">LI&Ecirc;N HỆ:</a></li>\r\n</ul>\r\n</div>\r\n<p><span style=\"font-size: 16px;\"><em data-original-attrs=\"{&quot;style&quot;:&quot;&quot;}\">Decal sữa hay trong suốt l&agrave; lớp m&agrave;ng nhựa PP trong c&oacute; bề 2 mặt trong suốt, c&oacute; thể nh&igrave;n xuy&ecirc;n thấu qua 2 mặt, c&oacute; thể in xu&ocirc;i chiều hoặc in ngược chiều (đế d&aacute;n l&ecirc;n c&aacute;c mặt k&iacute;nh, mica trong). Bề mặt sau c&oacute; lớp keo d&iacute;nh, độ b&aacute;m d&iacute;nh chắc chắn, ứng dụng kh&aacute; phổ biến trong c&ocirc;ng nghệ in ấn, thiết kế quảng c&aacute;o, được in bằng mực dầu Pigment UV k&eacute;m chất lượng hơn c&oacute; thể d&ugrave;ng mực nước gi&aacute; th&agrave;nh rẻ hơn, cho n&ecirc;n m&agrave;u sắc được bảo to&agrave;n theo d&ograve;ng thời gian.</em></span></p>\r\n<p><span style=\"font-size: 16px;\"><em data-original-attrs=\"{&quot;style&quot;:&quot;&quot;}\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjagKQ4QFxagsKVU0U-Bwi23m3O8R4DHBZC1UAZbC5y9T_IPK6XXuponcVPiUaXRBTHFjOMTrAsfYTQ306MiQ_yFeoOCW9-j1WdGJkjvIkHMWNujnmlnkIL9huPP6uUUfrLc6rVqrC1r9SEbkfRXL30rQMloxhkdEukneJ7D24b5x_tcqMMvixJDMXE/s320/in%20decal%20s%E1%BB%AFa.jpg\" /></em></span></p>\r\n<h2 id=\"mcetoc_1gg4mqnb6d\"><span style=\"font-size: 16px;\" data-keep-original-tag=\"false\" data-original-attrs=\"{&quot;style&quot;:&quot;&quot;}\"><em>Đặc Điểm Mực In Decal</em></span></h2>\r\n<p><span style=\"font-size: 16px;\" data-keep-original-tag=\"false\" data-original-attrs=\"{&quot;style&quot;:&quot;&quot;}\"><em>Decal được in bằng mực dầu n&ecirc;n c&oacute; độ bền m&agrave;u cao. Decal sữa thường được sử dụng trong lĩnh vực thực phẩm, mỹ phẩm hay trang tr&iacute; nội thất,&hellip; tạo n&ecirc;n sản phẩm đẹp v&igrave; t&iacute;nh b&aacute;m chắc kh&ocirc;ng tạo b&oacute;ng kh&iacute;, gồ ghề của sản phẩm m&agrave; sẽ tạo h&igrave;nh theo khung mica hay kiếng.</em></span><br /><span style=\"font-size: 16px;\" data-keep-original-tag=\"false\" data-original-attrs=\"{&quot;style&quot;:&quot;&quot;}\">M&agrave;u trắng sữa gi&uacute;p l&agrave;m nổi bật c&aacute;c m&agrave;u sắc kh&aacute;c bởi sự kết hợp m&agrave;u sắc dễ d&agrave;ng của m&agrave;u trắng với những m&agrave;u sắc kh&aacute;c như m&agrave;u v&agrave;ng, xanh, t&iacute;m,... của tấm decal, m&agrave;u trắng kh&ocirc;ng qu&aacute; b&oacute;ng như m&agrave;u trắng tinh gi&uacute;p dễ d&agrave;ng quan s&aacute;t hơn.</span></p>\r\n<h2 id=\"mcetoc_1gg4mqnb6e\"><em><span style=\"font-size: 16px;\" data-keep-original-tag=\"false\" data-original-attrs=\"{&quot;style&quot;:&quot;&quot;}\">Chất Liệu In</span></em></h2>\r\n<p><span style=\"font-size: 16px;\" data-keep-original-tag=\"false\" data-original-attrs=\"{&quot;style&quot;:&quot;&quot;}\">Chất liệu cho in decal sữa ch&iacute;nh l&agrave; decal (PVC &ndash; HV &ndash; Glossy) c&oacute; m&agrave;u trắng sữa, được phủ một lớp glossy chuy&ecirc;n dụng cho m&aacute;y in phun. C&oacute; dạng cuộn với khổ in th&ocirc;ng dụng l&agrave; A3 v&agrave; A4 chuy&ecirc;n cho in tem nh&atilde;n. In decal sữa thường sử dụng hai loại mực ch&iacute;nh l&agrave; mực Pigment UV cho in ấn th&ocirc;ng thường v&agrave; mực Eco cho in ấn chất lượng cao.</span></p>\r\n<p><span style=\"font-size: 16px;\" data-keep-original-tag=\"false\" data-original-attrs=\"{&quot;style&quot;:&quot;&quot;}\">- Mực Pigment UV chuy&ecirc;n cho in ấn, gi&uacute;p chống nước, sau khi in xong n&ecirc;n c&aacute;ng th&ecirc;m m&agrave;ng trong để tr&aacute;nh bay m&agrave;u. Gia c&ocirc;ng c&aacute;n m&agrave;ng tức l&agrave; việc c&aacute;n một lớp m&agrave;ng mỏng l&ecirc;n tr&ecirc;n bề mặt th&agrave;nh phẩm sau khi in xong v&agrave; đ&atilde; kh&ocirc; mực</span></p>\r\n<p><span style=\"font-size: 16px;\" data-keep-original-tag=\"false\" data-original-attrs=\"{&quot;style&quot;:&quot;&quot;}\">- Mực cao cấp hơn l&agrave; mực Eco cho h&igrave;nh ảnh sắc n&eacute;t v&agrave; bền m&agrave;u hơn.</span></p>\r\n<h2 id=\"mcetoc_1gg4mqnb6f\" data-original-attrs=\"{&quot;style&quot;:&quot;&quot;}\"><span style=\"font-size: 16px;\" data-keep-original-tag=\"false\" data-original-attrs=\"{&quot;style&quot;:&quot;&quot;}\"><strong data-original-attrs=\"{&quot;style&quot;:&quot;&quot;}\"><span style=\"color: #2b00fe; font-family: helvetica;\" data-keep-original-tag=\"false\" data-original-attrs=\"{&quot;style&quot;:&quot;&quot;}\"><u data-original-attrs=\"{&quot;style&quot;:&quot;&quot;}\">LI&Ecirc;N HỆ:</u></span></strong></span></h2>\r\n<p data-original-attrs=\"{&quot;style&quot;:&quot;&quot;}\"><span style=\"font-size: 16px;\"><em data-original-attrs=\"{&quot;style&quot;:&quot;&quot;}\"><strong data-original-attrs=\"{&quot;style&quot;:&quot;&quot;}\"><span style=\"color: #2b00fe; font-family: helvetica;\" data-keep-original-tag=\"false\" data-original-attrs=\"{&quot;style&quot;:&quot;&quot;}\">C&Ocirc;NG TY TNHH CURIE VIỆT NAM</span></strong></em></span></p>\r\n<p data-original-attrs=\"{&quot;style&quot;:&quot;&quot;}\"><span style=\"font-size: 16px;\"><em data-original-attrs=\"{&quot;style&quot;:&quot;&quot;}\"><strong data-original-attrs=\"{&quot;style&quot;:&quot;&quot;}\"><span style=\"color: #2b00fe; font-family: helvetica;\" data-keep-original-tag=\"false\" data-original-attrs=\"{&quot;style&quot;:&quot;&quot;}\">ĐỊA CHỈ: KHU PHỐ AN H&Ograve;A, PHƯỜNG H&Ograve;A LỢI, BẾN C&Aacute;T, B&Igrave;NH DƯƠNG</span></strong></em></span></p>\r\n<p data-original-attrs=\"{&quot;style&quot;:&quot;&quot;}\"><span style=\"font-size: 16px;\"><em data-original-attrs=\"{&quot;style&quot;:&quot;&quot;}\"><strong data-original-attrs=\"{&quot;style&quot;:&quot;&quot;}\"><span style=\"color: #2b00fe; font-family: helvetica;\" data-keep-original-tag=\"false\" data-original-attrs=\"{&quot;style&quot;:&quot;&quot;}\">HOTLINE: 0974 953 600 &ndash; Mr Ph&uacute;</span></strong></em></span></p>\r\n<p data-original-attrs=\"{&quot;style&quot;:&quot;&quot;}\"><span style=\"font-size: 16px;\"><em data-original-attrs=\"{&quot;style&quot;:&quot;&quot;}\"><strong data-original-attrs=\"{&quot;style&quot;:&quot;&quot;}\"><span style=\"color: #2b00fe; font-family: helvetica;\" data-keep-original-tag=\"false\" data-original-attrs=\"{&quot;style&quot;:&quot;&quot;}\">Email: phuth.me@gmail.com</span></strong></em></span></p>\r\n<p data-original-attrs=\"{&quot;style&quot;:&quot;&quot;}\">&nbsp;</p>', NULL, NULL, 53, 'Decal sữa hay trong suốt là lớp màng nhựa PP trong có bề 2 mặt trong suốt, có thể nhìn xuyên thấu qua 2 mặt', 'Decal sữa hay trong suốt là lớp màng nhựa PP trong có bề 2 mặt trong suốt, có thể nhìn xuyên thấu qua 2 mặt', 1, '2022-10-23 22:59:02', '2023-04-28 09:46:40'),
(2, 1, 'In Băng rôn bạt Hiflex', 'in-bang-ron-bat-hiflex', 'Hiện nay trên thị trường quảng cáo, các sản phẩm xuất xứ từ in Hiflex đang dần chiếm đa số ...', 'in-bang-ron-bat-hiflex-lmThjK.jpg', 'thumb_in-bang-ron-bat-hiflex-lmThjK.jpg', 'in-ky-thuat-so', 0, 0, 'normal', 0, '<p>&nbsp;</p>\r\n<p><span style=\"font-size: 16px;\"><em>Hiện nay tr&ecirc;n thị trường quảng c&aacute;o, c&aacute;c sản phẩm xuất xứ từ&nbsp;<strong>in Hiflex</strong>&nbsp;đang dần chiếm đa số, chỉ cần dạo qua bất kỳ con đường n&agrave;o c&oacute; hoạt động kinh doanh diễn ra l&agrave; bạn đ&atilde; thấy rất nhiều bảng hiệu, Banner hay bảng hiệu hộp đ&egrave;n được l&agrave;m từ chất liệu hiflex n&agrave;y.</em></span></p>\r\n<h2><span style=\"font-size: 16px;\">Ưu điểm chất liệu Hiflex</span></h2>\r\n<p><span style=\"font-size: 16px;\">Với ưu điểm nổi trội nhất l&agrave; độ bền, dẻo dai, chịu được thời tiết mưa nắng thất thường như ở Việt Nam c&ugrave;ng chất lượng in đảm bảo y&ecirc;u cầu của hoạt động quảng c&aacute;o, do đ&oacute;, kh&ocirc;ng lạ g&igrave; khi đ&acirc;y l&agrave; chất liệu được lựa chọn cho quảng c&aacute;o cũng như thi c&ocirc;ng hộp đ&egrave;n.</span></p>\r\n<p><span style=\"font-size: 16px;\"><img src=\"https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiwmkkePJgXACy3B9_-nOZwh3wFbaYSbmVzdAFGOSct3ZC4OFg23MqAImKYZ-vuhJovOsfl7k5wOJQrLZXSQtsLMCNLYOnqSG0VO56Qh8Kp6W8pYqun9K2y6vQOzKOSG5SETsPWcT5Fi6K6PBv9eg7-PKjatGGlLXX8AZExhjDsN3QTuj02oqxZvxf0/s320/in%20b%C4%83ng%20r%C3%B4n.jpg\" /></span></p>\r\n<h2><span style=\"font-size: 16px;\"><strong><em>Băng r&ocirc;n được sử dụng chủ yếu tại c&aacute;c cơ sở quảng c&aacute;o.</em></strong></span></h2>\r\n<p><span style=\"font-size: 16px;\">Để c&oacute; được sản phẩm ưng &yacute; về thiết kế, đẹp v&agrave; chất lượng về sản phẩm thực tế th&igrave; ch&uacute;ng t&ocirc;i t&ocirc;i l&agrave; đơn vị đảm bảo l&agrave;m h&agrave;i l&ograve;ng những g&igrave; bạn đang cần.</span></p>\r\n<p><span style=\"font-size: 16px;\">Ch&uacute;ng t&ocirc;i tạo mọi điều kiện thuận lợi cho kh&aacute;ch h&agrave;ng trong qu&aacute; tr&igrave;nh xử l&yacute; đơn h&agrave;ng: d&ugrave;ng c&ocirc;ng cụ nhắn tin chụp ảnh để gưi mẫu như Zalo, mail, hoặc facebook.</span></p>\r\n<p><span style=\"font-size: 16px;\">Ngo&agrave;i ra để đ&aacute;p ứng tốt hơn nhu cầu của qu&yacute; kh&aacute;ch ch&uacute;ng t&ocirc;i sẵn s&agrave;ng giao h&agrave;ng tận nơi với số lượng lớn hoặc c&oacute; y&ecirc;u cầu nếu khoảng c&aacute;ch gần, hỗ trộ giao h&agrave;ng trong khu vực B&igrave;nh Dương hoặc TP HCM.</span></p>\r\n<h2><span style=\"font-size: 16px;\"><strong>Ưu điểm của băng r&ocirc;n bạt Hiflex</strong></span></h2>\r\n<p><span style=\"font-size: 16px;\"><em>Gi&aacute; th&agrave;nh rẻ</em></span></p>\r\n<p><span style=\"font-size: 16px;\"><em>Gấp gọn dễ d&agrave;ng</em></span></p>\r\n<p><span style=\"font-size: 16px;\"><em>M&agrave;u sắc đẹp khi in bằng kts</em></span></p>\r\n<p><span style=\"font-size: 16px;\"><em>Đa dạng về k&iacute;ch thước</em></span></p>\r\n<p><span style=\"font-size: 16px;\"><em>Độ bền kh&aacute; tốt khi sử dụng ngo&agrave;i trời hoặc trong nh&agrave;</em></span></p>\r\n<p><span style=\"font-size: 16px;\"><em>Dễ thi c&ocirc;ng....</em></span></p>\r\n<h2><span style=\"font-size: 16px;\"><strong>In băng r&ocirc;n (bạt) hiflex được sử dụng cho những đối tượng n&agrave;o?</strong></span></h2>\r\n<p><span style=\"font-size: 16px;\">Hầu như mọi đối tượng c&oacute; thể sử dụng bạt hiflex n&agrave;y bao gồm:</span></p>\r\n<p><span style=\"font-size: 16px;\">C&aacute; nh&acirc;n cần đăng tải th&ocirc;ng tin tuyển dụng c&aacute; nh&acirc;n</span></p>\r\n<p><span style=\"font-size: 16px;\">Nh&agrave; h&agrave;ng qu&aacute;n ăn tạp h&oacute;a cửa h&agrave;ng hiệu s&aacute;ch</span></p>\r\n<p><span style=\"font-size: 16px;\">C&aacute;c doanh nghiệp sử dụng để ch&agrave;o mừng ng&agrave;y lễ, hội hoặc sự kiện n&agrave;o đ&oacute; của c&ocirc;ng ty</span></p>\r\n<p><span style=\"font-size: 16px;\">....</span></p>\r\n<p><span style=\"font-size: 16px;\"><strong>Mọi chi tiết vui l&ograve;ng li&ecirc;n hệ:</strong></span></p>\r\n<p><span style=\"font-size: 16px;\"><em><strong>C&Ocirc;NG TY TNHH CURIE VIỆT NAM</strong></em></span></p>\r\n<p><span style=\"font-size: 16px;\"><em><strong>ĐỊA CHỈ: KHU PHỐ AN H&Ograve;A, PHƯỜNG H&Ograve;A LỢI, BẾN C&Aacute;T, B&Igrave;NH DƯƠNG</strong></em></span></p>\r\n<p><span style=\"font-size: 16px;\"><em><strong>HOTLINE: 0974 953 600 &ndash; Mr Ph&uacute;</strong></em></span></p>\r\n<p><span style=\"font-size: 16px;\"><em><strong>Email: phuth.me@gmail.com</strong></em></span></p>\r\n<p>&nbsp;</p>', NULL, NULL, 28, 'Hiện nay trên thị trường quảng cáo, các sản phẩm xuất xứ từ in Hiflex đang dần chiếm đa số, chỉ cần dạo qua bất kỳ con đường nào có hoạt động kinh doanh diễn ra là bạn đã thấy rất nhiều bảng hiệu, Banner hay bảng hiệu hộp đèn được làm từ chất liệu hiflex', 'Hiện nay trên thị trường quảng cáo, các sản phẩm xuất xứ từ in Hiflex đang dần chiếm đa số, chỉ cần dạo qua bất kỳ con đường nào có hoạt động kinh doanh diễn ra là bạn đã thấy rất nhiều bảng hiệu, Banner hay bảng hiệu hộp đèn được làm từ chất liệu hiflex', 1, '2022-10-28 22:57:42', '2023-04-28 09:46:40'),
(3, 6, 'GIẤY DÙNG IN HÓA ĐƠN – BÁO BIỂU', 'giay-dung-in-hoa-don-bao-bieu', 'Mọi sản phẩm tới tay người tiêu dùng đều phải có nguyên liệu mới tạo được sản phẩm hoàn chỉnh, với mục đích phục vụ hoạt động kinh doanh sản xuất...', 'giay-dung-in-hoa-don-bao-bieu-gNMHqS.jpg', 'thumb_giay-dung-in-hoa-don-bao-bieu-gNMHqS.jpg', 'blog', 0, 0, 'normal', 0, '<div class=\"separator\">\r\n<div class=\"mce-toc\">\r\n<h2>Nội Dung</h2>\r\n<ul>\r\n<li><a href=\"#mcetoc_1ggfmn16714\">Thế n&agrave;o l&agrave; giấy in h&oacute;a đơn</a></li>\r\n<li><a href=\"#mcetoc_1ggfmn16715\">Giấy Ford</a></li>\r\n<li><a href=\"#mcetoc_1ggfmn16716\">Giấy Carbonless</a></li>\r\n<li><a href=\"#mcetoc_1ggfmn16717\">Giấy b&igrave;a</a></li>\r\n</ul>\r\n</div>\r\n</div>\r\n<div class=\"separator\"><span style=\"font-size: 16px;\"><em><strong>Mọi sản phẩm tới tay người ti&ecirc;u d&ugrave;ng đều phải c&oacute; nguy&ecirc;n liệu mới tạo được sản phẩm ho&agrave;n chỉnh, với mục đ&iacute;ch phục vụ hoạt động kinh doanh sản xuất, trong b&agrave;i viết n&agrave;y ch&uacute;ng ta sẽ t&igrave;m hiểu giấy dụng&nbsp;in h&oacute;a đơn &ndash; b&aacute;o biểu, l&agrave; nguy&ecirc;n liệu đầu ti&ecirc;n để phục vụ qu&aacute; tr&igrave;nh tạo n&ecirc;n cuốn&nbsp;h&oacute;a đơn. Ngo&agrave;i giấy th&igrave; th&igrave; c&ograve;n sử dụng c&aacute;c dụng cụ m&aacute;y m&oacute;c kh&aacute;c như: m&aacute;y in Riso MD5, m&aacute;y x&eacute;n, m&aacute;y cấn &hellip;, trong b&agrave;i viết n&agrave;y ch&uacute;ng ta chỉ t&igrave;m hiểu c&aacute;c loại giấy được sử dụng trong qu&aacute; tr&igrave;nh&nbsp;<a href=\"/\">in ấn</a>.</strong></em></span></div>\r\n<div class=\"separator\">&nbsp;</div>\r\n<div class=\"separator\"><span style=\"font-size: 16px;\"><em><a href=\"https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjeIB9EqG7ESBAV4Ol0bSpDvGRL0GRWhqI-MDrxs8brusU1mV9Q6LsQOds69hIPjpzOQWYnNFkUeeWKY5AxJV9ZoJxEGDcS55YaxBHKlMxNuA7CRJozYEs5TO3EdlyDJcMKlRGFynEJ-DWCv_KCFp74CpaZOu8Ho_o_dkg2jwR5gQjSRibPTGb5IsWu/s2560/gi%E1%BA%A5y%20for%20in%20h%C3%B3a%20%C4%91%C6%A1n.jpg\"><img src=\"https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjeIB9EqG7ESBAV4Ol0bSpDvGRL0GRWhqI-MDrxs8brusU1mV9Q6LsQOds69hIPjpzOQWYnNFkUeeWKY5AxJV9ZoJxEGDcS55YaxBHKlMxNuA7CRJozYEs5TO3EdlyDJcMKlRGFynEJ-DWCv_KCFp74CpaZOu8Ho_o_dkg2jwR5gQjSRibPTGb5IsWu/s320/gi%E1%BA%A5y%20for%20in%20h%C3%B3a%20%C4%91%C6%A1n.jpg\" width=\"320\" height=\"240\" border=\"0\" data-original-height=\"1920\" data-original-width=\"2560\" /></a></em></span></div>\r\n<h2 id=\"mcetoc_1ggfmn16714\"><span style=\"font-size: 16px;\">Thế n&agrave;o l&agrave; giấy in h&oacute;a đơn</span></h2>\r\n<p><span style=\"font-size: 16px;\">L&agrave; loại giấy c&oacute; k&iacute;ch thước lớn hơn giấy in A4 th&ocirc;ng thường, định lượng thấp hơn giấy A4 thường d&ugrave;ng 70Gram, mục đ&iacute;ch của việc k&iacute;ch thước lớn hơn giấy in A4 th&ocirc;ng thường để cắt x&eacute;n ra 2 cuốn A5 m&agrave; kh&ocirc;ng bị thiếu k&iacute;ch thước khi cắt đ&ocirc;i tờ giấy A4, bởi v&igrave; th&ocirc;ng thường để c&oacute; 1 cuốn h&oacute;a đơn c&oacute; 4 g&oacute;c phẳng đẹp th&igrave; việc xếp bằng l&agrave; kh&ocirc;ng thể, thay v&agrave;o đ&oacute; người thợ l&agrave;m giấy sẽ cắt từng g&oacute;c cạnh. Với k&iacute;ch thước lớn hơn khổ giấy A4 th&igrave; sau khi cắt đ&ocirc;i để được khổ A5 th&igrave; xung quanh viền vẫn dư thừa 1 khoảng nhỏ để cắt gọt vu&ocirc;ng vức. Vậy n&ecirc;n l&yacute; do của việc d&ugrave;ng giấy c&oacute; k&iacute;ch thước lớn hơn khổ A4.</span></p>\r\n<p>&nbsp;</p>\r\n<div class=\"separator\"><span style=\"font-size: 16px;\"><a href=\"https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgUjlVfOYeK-lfEwmODHCOlYB7V0HIZyBKr6WuIUkgab4DYIyuPjxUUPS91pRBFSrPMF43dX41LC1lbM0J-z--Q5UQcUYoGJW4rtgpfydqDODcOLV71VkYcO7Ygg1fBFPpyOKaMrazADTBd-vOcgXzgvxehOdjjLvWsimyFJwQ13nkzL9wAvG_7Wysa/s2560/H%C3%B3a%20%C4%91%C6%A1n.jpg\"><img src=\"https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgUjlVfOYeK-lfEwmODHCOlYB7V0HIZyBKr6WuIUkgab4DYIyuPjxUUPS91pRBFSrPMF43dX41LC1lbM0J-z--Q5UQcUYoGJW4rtgpfydqDODcOLV71VkYcO7Ygg1fBFPpyOKaMrazADTBd-vOcgXzgvxehOdjjLvWsimyFJwQ13nkzL9wAvG_7Wysa/s320/H%C3%B3a%20%C4%91%C6%A1n.jpg\" width=\"320\" height=\"240\" border=\"0\" data-original-height=\"1920\" data-original-width=\"2560\" /></a></span></div>\r\n<h2 id=\"mcetoc_1ggfmn16715\"><span style=\"font-size: 16px;\">Giấy Ford</span></h2>\r\n<p><span style=\"font-size: 16px;\">L&agrave; loại giấy d&ugrave;ng phổ biến nhất bởi v&igrave; bất cứ cuốn h&oacute;a đơn &ndash; b&aacute;o biểu n&agrave;o đều sử dụng, giấy n&agrave;y với mục đ&iacute;ch ghi trực tiếp l&ecirc;n đối với h&oacute;a đơn 1 li&ecirc;n, v&agrave; l&agrave; li&ecirc;n cuối c&ugrave;ng đối với h&oacute;a đơn từ 2 li&ecirc;n trở l&ecirc;n.</span></p>\r\n<p><span style=\"font-size: 16px;\">K&iacute;ch thước: lớn hơn khổ giấy A4, định lượng thấp hơn 70 gram.</span></p>\r\n<p>&nbsp;</p>\r\n<div class=\"separator\"><span style=\"font-size: 16px;\"><a href=\"https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjZmyokviZTdtkiUHsiSu6RSxKdwIS7Ch5OlJSEYMkWs4sTEYAC29LG4Nw0zDsLPaf26tr7GxyQLe290FVAuW0Sf_RkVQPyEtCf6YwqWDMVVF70sgfN7UmNA8lH7TwPubp09ra_pNbG3aUa2IKoeObrJQzdAxcpPTy5ucROvroRpuu4JlO-BvNKhMfe/s2560/gi%E1%BA%A5y%20for%20in%20h%C3%B3a%20%C4%91%C6%A1n.jpg\"><img src=\"https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjZmyokviZTdtkiUHsiSu6RSxKdwIS7Ch5OlJSEYMkWs4sTEYAC29LG4Nw0zDsLPaf26tr7GxyQLe290FVAuW0Sf_RkVQPyEtCf6YwqWDMVVF70sgfN7UmNA8lH7TwPubp09ra_pNbG3aUa2IKoeObrJQzdAxcpPTy5ucROvroRpuu4JlO-BvNKhMfe/s320/gi%E1%BA%A5y%20for%20in%20h%C3%B3a%20%C4%91%C6%A1n.jpg\" width=\"320\" height=\"240\" border=\"0\" data-original-height=\"1920\" data-original-width=\"2560\" /></a></span></div>\r\n<h2 id=\"mcetoc_1ggfmn16716\"><span style=\"font-size: 16px;\">Giấy Carbonless</span></h2>\r\n<p><span style=\"font-size: 16px;\">L&agrave; giấy được sử dụng cho h&oacute;a đơn từ 2 li&ecirc;n trở l&ecirc;n, với h&oacute;a đơn 2 li&ecirc;n th&igrave; sử dụng giấy carbonless m&agrave;u v&agrave;ng, nhiều hơn 2 li&ecirc;n th&igrave; d&ugrave;ng th&ecirc;m giấy m&agrave;u v&agrave;ng, m&agrave;u trắng. Với chức năng như giấy than copy nội dung từ bản tr&ecirc;n xuống bản dưới c&ugrave;ng l&agrave; giấy ford</span></p>\r\n<p>&nbsp;</p>\r\n<div class=\"separator\"><span style=\"font-size: 16px;\"><a href=\"https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjlaP65H7zaoE452eBZktlaj2K9s_Xgnt1L1hCAKvi7p60DeHX8gyN7nAg7ioPOOjprjIx74Rgf7ijS8aoxmbi8PHBDcDVwWmZlLjd6BFPOmRjHj6lUg08IuP1HBan1huI6krPGEvotQ7hdkGZ0jATWdJ7f4uw0kmHMsGNtbb1m5VHvdpKPSS5yFa5L/s2048/Giay%20in%20h%C3%B3a%20%C4%91%C6%A1n%20carbonless.jpg\"><img src=\"https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjlaP65H7zaoE452eBZktlaj2K9s_Xgnt1L1hCAKvi7p60DeHX8gyN7nAg7ioPOOjprjIx74Rgf7ijS8aoxmbi8PHBDcDVwWmZlLjd6BFPOmRjHj6lUg08IuP1HBan1huI6krPGEvotQ7hdkGZ0jATWdJ7f4uw0kmHMsGNtbb1m5VHvdpKPSS5yFa5L/s320/Giay%20in%20h%C3%B3a%20%C4%91%C6%A1n%20carbonless.jpg\" width=\"320\" height=\"240\" border=\"0\" data-original-height=\"1536\" data-original-width=\"2048\" /></a></span></div>\r\n<h2 id=\"mcetoc_1ggfmn16717\"><span style=\"font-size: 16px;\">Giấy b&igrave;a</span></h2>\r\n<p><span style=\"font-size: 16px;\">Chỉ c&oacute; chức năng l&agrave;m b&igrave;a cuốn h&oacute;a đơn, ghi th&ocirc;ng tin cuốn h&oacute;a đơn g&igrave;, như: h&oacute;a đơn b&aacute;n lẻ, phiếu xuất kho, sổ nhập xuất, b&aacute;o biểu h&agrave;ng h&oacute;a,&hellip;</span></p>\r\n<p><span style=\"font-size: 16px;\"><em>M&agrave;u sắc:</em>&nbsp;tại C&ocirc;ng Ty Curie Việt Nam sử dụng m&agrave;u xanh da trời, m&agrave;u hồng nh&aacute;m.</span></p>\r\n<p><span style=\"font-size: 16px;\">Như vậy qua b&agrave;i viết n&agrave;y c&aacute;c bạn đ&atilde; c&oacute; ch&uacute;t th&ocirc;ng tin về giấy in trong lĩnh vực in H&oacute;a Đơn &ndash; B&aacute;o Biểu</span></p>\r\n<p><span style=\"font-size: 16px;\"><strong>Li&ecirc;n hệ in h&oacute;a đơn &ndash; b&aacute;o biểu</strong></span></p>\r\n<p><span style=\"font-size: 16px;\"><em><strong>C&Ocirc;NG TY TNHH CURIE VIỆT NAM</strong></em></span></p>\r\n<p><span style=\"font-size: 16px;\"><em><strong>ĐỊA CHỈ: KHU PHỐ AN H&Ograve;A, PHƯỜNG H&Ograve;A LỢI, BẾN C&Aacute;T, B&Igrave;NH DƯƠNG</strong></em></span></p>\r\n<p><span style=\"font-size: 16px;\"><em><strong>HOTLINE: 0974 953 600 &ndash; Mr Ph&uacute;</strong></em></span></p>\r\n<p><span style=\"font-size: 16px;\"><em><strong>Email: phuth.me@gmail.com</strong></em></span></p>', NULL, NULL, 55, 'Mọi sản phẩm tới tay người tiêu dùng đều phải có nguyên liệu mới tạo được sản phẩm hoàn chỉnh, với mục đích phục vụ hoạt động kinh doanh sản xuất, trong bài viết này chúng ta sẽ tìm hiểu giấy dụng in hóa đơn', 'Mọi sản phẩm tới tay người tiêu dùng đều phải có nguyên liệu mới tạo được sản phẩm hoàn chỉnh, với mục đích phục vụ hoạt động kinh doanh sản xuất, trong bài viết này chúng ta sẽ tìm hiểu giấy dụng in hóa đơn', 1, '2022-10-28 23:28:52', '2023-04-28 09:46:39'),
(4, 1, 'In PP Cán mờ', 'in-pp-can-mo', 'Lĩnh vực quảng cáo có nhiều sản phẩm hỗ trợ in ấn như bạt Hiflex, decal, canvas và PP', 'in-pp-can-mo-pgqSen.jpg', 'thumb_in-pp-can-mo-pgqSen.jpg', 'in-ky-thuat-so', 0, 0, 'normal', 0, '<div class=\"mce-toc\">\r\n<h2>Nội dung</h2>\r\n<ul>\r\n<li><a href=\"#mcetoc_1ghh2thiau\">PP c&oacute; 2 loại th&ocirc;ng dụng tr&ecirc;n thị trường l&agrave;:</a></li>\r\n<li><a href=\"#mcetoc_1ghh2thiav\">Vậy mục đ&iacute;ch của PP l&agrave; g&igrave;?</a></li>\r\n<li><a href=\"#mcetoc_1ghh2thia10\">Gi&aacute; th&agrave;nh in PP c&oacute; keo v&agrave; kh&ocirc;ng keo</a></li>\r\n<li><a href=\"#mcetoc_1ghh2thia11\">In c&aacute;n PP c&oacute; bao nhi&ecirc;u loại</a></li>\r\n<li><a href=\"#mcetoc_1ghh2thia12\">Đặt h&agrave;ng hoặc y&ecirc;u cầu b&aacute;o gi&aacute; số lượng lớn vui l&ograve;ng liện hệ:</a></li>\r\n</ul>\r\n</div>\r\n<p><em><strong>Lĩnh vực quảng c&aacute;o c&oacute; nhiều sản phẩm hỗ trợ in ấn như bạt Hiflex, decal, canvas v&agrave; PP</strong></em></p>\r\n<p><em><strong>In PP l&agrave; việc sử dụng m&aacute;y in kỹ thuật số để in l&ecirc;n chất liệu PP.</strong></em></p>\r\n<h2 id=\"mcetoc_1ghh2thiau\">PP c&oacute; 2 loại th&ocirc;ng dụng tr&ecirc;n thị trường l&agrave;:</h2>\r\n<ul>\r\n<li>PP c&oacute; keo v&agrave;</li>\r\n<li>Pp kh&ocirc;ng keo</li>\r\n</ul>\r\n<p>PP c&oacute; keo th&igrave; d&ugrave;ng được như PP kh&ocirc;ng keo, bởi th&ocirc;ng thường PP sẽ được d&ugrave;ng để treo tr&ecirc;n standee, hoặc tương tự standee.</p>\r\n<p>C&aacute;c bạn c&oacute; thể tham khảo h&igrave;nh ảnh b&ecirc;n dưới để biết về sản phẩm</p>\r\n<p><img src=\"http://dailong.asia/public/image/1/z3847116800187_499ade92887cd1a8d92c3e1a4cea4898.jpg\" alt=\"\" width=\"50%\" height=\"100%\" /></p>\r\n<h2 id=\"mcetoc_1ghh2thiav\"><strong>Vậy mục đ&iacute;ch của PP l&agrave; g&igrave;?</strong></h2>\r\n<p>Để quảng c&aacute;o cho chiến dịch v&igrave; độ bền đẹp, sắc n&eacute;t cũng như dễ sử dụng, bền so với decal, đẹp so với in bằng chất liệu decal hoặc bạt Hiflex.</p>\r\n<p>Đối với PP c&oacute; keo th&igrave; d&ugrave;ng dể c&aacute;n fomex hoặc d&aacute;n l&ecirc;n alu mica hoặc chất liệu tương đương.</p>\r\n<h2 id=\"mcetoc_1ghh2thia10\"><strong>Gi&aacute; th&agrave;nh in PP c&oacute; keo v&agrave; kh&ocirc;ng keo</strong></h2>\r\n<p>L&agrave; chất liệu cao cấp v&agrave; được in bằng mực dầu cho độ b&aacute;m d&iacute;nh cao th&igrave; gi&aacute; th&agrave;nh in PP tương đương với in decal,</p>\r\n<p>Với gi&aacute; in kh&aacute;ch lẻ: <strong>150.000/m2</strong> (Đ&atilde; c&aacute;n m&agrave;ng)</p>\r\n<h2 id=\"mcetoc_1ghh2thia11\"><strong>In c&aacute;n PP c&oacute; bao nhi&ecirc;u loại</strong></h2>\r\n<p>Th&ocirc;ng thường PP tương tự decal khi c&aacute;n m&agrave;ng c&oacute; thể d&ugrave;ng m&agrave;ng trong hoặc m&agrave;ng c&aacute;n mờ</p>\r\n<p>Sự kh&aacute;c biệt của 2 loại n&agrave;y l&agrave; độ trong suốt của m&agrave;ng c&aacute;n, để sản phẩm sắc n&eacute;t v&agrave; b&oacute;ng hơn th&igrave; d&ugrave;ng m&agrave;ng trong, nhưng để l&agrave;m nổi bật v&agrave; sự sang trọng khi quảng c&aacute;o sản phẩm th&igrave; sử dụng m&agrave;ng mờ c&aacute;n l&ecirc;n tấm PP.</p>\r\n<p>Gi&aacute; th&agrave;nh của 2 loại sản phẩm n&agrave;y bằng gi&aacute; nhau với kh&aacute;ch in lẻ.</p>\r\n<h2 id=\"mcetoc_1ghh2thia12\"><strong>Đặt h&agrave;ng hoặc y&ecirc;u cầu b&aacute;o gi&aacute; số lượng lớn vui l&ograve;ng liện hệ:</strong></h2>\r\n<p><strong>Hotline: 0974 953 600</strong></p>\r\n<p><strong>Email: <a href=\"mailto:phuth.me@gmail.com\" target=\"_blank\" rel=\"noopener\">phuth.me@gmail.com</a></strong></p>\r\n<p><em><strong>C&Ocirc;NG TY TNHH CURIE VIỆT NAM</strong></em></p>\r\n<p><em><strong>ĐỊA CHỈ: KHU PHỐ AN H&Ograve;A, PHƯỜNG H&Ograve;A LỢI, BẾN C&Aacute;T, B&Igrave;NH DƯƠNG</strong></em></p>\r\n<p>&nbsp;</p>', NULL, NULL, 34, 'Lĩnh vực quảng cáo có nhiều sản phẩm hỗ trợ in ấn như bạt Hiflex, decal, canvas và PP', 'Lĩnh vực quảng cáo có nhiều sản phẩm hỗ trợ in ấn như bạt Hiflex, decal, canvas và PP', 1, '2022-11-10 19:21:23', '2023-04-28 09:46:40'),
(5, 1, 'In Băng rôn - Bảng hiệu', 'in-bang-ron-bang-hieu', 'Hiện nay trên thị trường quảng cáo, các sản phẩm xuất xứ từ in Hiflex đang dần chiếm đa số, chỉ cần dạo qua bất kỳ con đường nào có hoạt động kinh doanh', 'in-bang-ron-bang-hieu-y6ORuj.jpg', 'thumb_in-bang-ron-bang-hieu-y6ORuj.jpg', 'in-ky-thuat-so', 0, 0, 'normal', 0, '<p><em>Hiện nay tr&ecirc;n thị trường quảng c&aacute;o, c&aacute;c sản phẩm xuất xứ từ&nbsp;<strong>in Hiflex</strong>&nbsp;đang dần chiếm đa số, chỉ cần dạo qua bất kỳ con đường n&agrave;o c&oacute; hoạt động kinh doanh diễn ra l&agrave; bạn đ&atilde; thấy rất nhiều bảng hiệu, Banner hay bảng hiệu hộp đ&egrave;n được l&agrave;m từ chất liệu hiflex n&agrave;y.</em></p>\r\n<p>Với ưu điểm nổi trội nhất l&agrave; độ bền, dẻo dai, chịu được thời tiết mưa nắng thất thường như ở Việt Nam c&ugrave;ng chất lượng in đảm bảo y&ecirc;u cầu của hoạt động quảng c&aacute;o, do đ&oacute;, kh&ocirc;ng lạ g&igrave; khi đ&acirc;y l&agrave; chất liệu được lựa chọn cho quảng c&aacute;o cũng như thi c&ocirc;ng hộp đ&egrave;n.</p>\r\n<h2><strong><em>Băng r&ocirc;n được sử dụng chủ yếu tại c&aacute;c cơ sở quảng c&aacute;o.</em></strong></h2>\r\n<p>Để c&oacute; được sản phẩm ưng &yacute; về thiết kế, đẹp v&agrave; chất lượng về sản phẩm thực tế th&igrave; ch&uacute;ng t&ocirc;i t&ocirc;i l&agrave; đơn vị đảm bảo l&agrave;m h&agrave;i l&ograve;ng những g&igrave; bạn đang cần.</p>\r\n<p>Ch&uacute;ng t&ocirc;i tạo mọi điều kiện thuận lợi cho kh&aacute;ch h&agrave;ng trong qu&aacute; tr&igrave;nh xử l&yacute; đơn h&agrave;ng: d&ugrave;ng c&ocirc;ng cụ nhắn tin chụp ảnh để gưi mẫu như Zalo, mail, hoặc facebook.</p>\r\n<p>Ngo&agrave;i ra để đ&aacute;p ứng tốt hơn nhu cầu của qu&yacute; kh&aacute;ch ch&uacute;ng t&ocirc;i sẵn s&agrave;ng giao h&agrave;ng tận nơi với số lượng lớn hoặc c&oacute; y&ecirc;u cầu nếu khoảng c&aacute;ch gần, hỗ trộ giao h&agrave;ng trong khu vực B&igrave;nh Dương hoặc TP HCM.</p>\r\n<h2><strong>Ưu điểm của băng r&ocirc;n bạt Hiflex</strong></h2>\r\n<p><em>Gi&aacute; th&agrave;nh rẻ</em></p>\r\n<p><em>Gấp gọn dễ d&agrave;ng</em></p>\r\n<p><em>M&agrave;u sắc đẹp khi in bằng kts</em></p>\r\n<p><em>Đa dạng về k&iacute;ch thước</em></p>\r\n<p><em>Độ bền kh&aacute; tốt khi sử dụng ngo&agrave;i trời hoặc trong nh&agrave;</em></p>\r\n<p><em>Dễ thi c&ocirc;ng....</em></p>\r\n<h2><strong>In băng r&ocirc;n (bạt) hiflex được sử dụng cho những đối tượng n&agrave;o?</strong></h2>\r\n<p>Hầu như mọi đối tượng c&oacute; thể sử dụng bạt hiflex n&agrave;y bao gồm:</p>\r\n<p>C&aacute; nh&acirc;n cần đăng tải th&ocirc;ng tin tuyển dụng c&aacute; nh&acirc;n</p>\r\n<p>Nh&agrave; h&agrave;ng qu&aacute;n ăn tạp h&oacute;a cửa h&agrave;ng hiệu s&aacute;ch</p>\r\n<p>C&aacute;c doanh nghiệp sử dụng để ch&agrave;o mừng ng&agrave;y lễ, hội hoặc sự kiện n&agrave;o đ&oacute; của c&ocirc;ng ty</p>\r\n<p>....</p>\r\n<p><strong>Mọi chi tiết vui l&ograve;ng li&ecirc;n hệ:</strong></p>\r\n<p><em><strong>C&Ocirc;NG TY TNHH CURIE VIỆT NAM</strong></em></p>\r\n<p><em><strong>ĐỊA CHỈ: KHU PHỐ AN H&Ograve;A, PHƯỜNG H&Ograve;A LỢI, BẾN C&Aacute;T, B&Igrave;NH DƯƠNG</strong></em></p>\r\n<p><em><strong>HOTLINE: 0974 953 600 &ndash; Mr Ph&uacute;</strong></em></p>\r\n<p><em><strong>Email b&aacute;o gi&aacute;: phuth.me@gmail.com</strong></em></p>', NULL, NULL, 27, 'Hiện nay trên thị trường quảng cáo, các sản phẩm xuất xứ từ in Hiflex', 'Hiện nay trên thị trường quảng cáo, các sản phẩm xuất xứ từ in Hiflex', 1, '2022-11-10 22:58:14', '2023-04-28 09:46:40'),
(6, 2, 'In Name Card - Danh thiếp', 'in-name-card-danh-thiep', 'Name card - Danh Thiếp có vai trò rất quan trọng dùng để giới thiệu bản thân, công ty, dịch vụ kinh doanh. Nó thể hiện sự chuyên nghiệp, tinh tế và là tác nhân', 'in-name-card-danh-thiep-ZOPbR9.jpg', 'thumb_in-name-card-danh-thiep-ZOPbR9.jpg', 'in-offset', 0, 0, 'normal', 0, '<div class=\"separator\"><em>Name card - Danh Thiếp c&oacute; vai tr&ograve; rất quan trọng d&ugrave;ng để giới thiệu bản th&acirc;n, c&ocirc;ng ty, dịch vụ kinh doanh. N&oacute; thể hiện sự chuy&ecirc;n nghiệp, tinh tế v&agrave; l&agrave; t&aacute;c nh&acirc;n g&acirc;y ấn tượng ban đầu với kh&aacute;ch h&agrave;ng, đối t&aacute;c&hellip;</em></div>\r\n<div class=\"separator\">&nbsp;</div>\r\n<div class=\"separator\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEh9veckIEzXckWD-ktNdMI8m6twWV-fHw4HYbc-uSqrRxjFb01eHxPZtltQr2EqXcpqk7F5P4OJVKovu-Q1a1-5ETyPnQvoFisHuQVfOF9i6jG0LbOiWxqBIlH6c6_tzU3-NGxd1-6WeKgFaDy-jHb11Gb_H7J7DuIhmaQ-0zH3IOTVfEJPSldZQ1J_/s320/name%20card%20m%E1%BA%A1t%20tr%C6%B0%E1%BB%9Bc%20%C4%91%E1%BA%A1i%20long.jpg\" width=\"320\" height=\"196\" border=\"0\" data-original-height=\"1065\" data-original-width=\"1741\" /></div>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>Nếu danh thiếp của bạn được l&agrave;m từ loại giấy cao cấp v&agrave; c&oacute; thiết kế hấp dẫn, bắt mắt, dễ nh&igrave;n, sẽ để lại ấn tượng đối với người nhận n&oacute;. Đồng thời h&igrave;nh ảnh th&ocirc;ng tin của bạn cũng như c&ocirc;ng ty c&oacute; thể dễ d&agrave;ng được quảng b&aacute; rộng khắp hơn. Bện cạnh đ&oacute; sẽ l&agrave;m cho người nhận n&oacute; cảm thấy được tr&acirc;n trọng v&agrave; giữ n&oacute; để sử dụng trong tương lai.</p>\r\n<p>Qu&yacute; kh&aacute;ch muốn name card, danh thiếp của m&igrave;nh kh&aacute;c lạ, h&igrave;nh dạng kh&aacute;c để g&acirc;y thiện cảm với kh&aacute;ch h&agrave;ng hoặc sẽ l&agrave; một c&aacute;i g&igrave; đ&oacute; khiến đối phương phải &nbsp;lưu giữ, điều ấy kh&ocirc;ng c&oacute; g&igrave; kh&oacute; khăn v&igrave; với c&ocirc;ng nghệ khu&ocirc;n bế, c&aacute;c h&igrave;nh dạng kh&aacute;c lạ đều c&oacute; thể l&agrave;m ra được, bo g&oacute;c, bo 2 g&oacute;c, h&igrave;nh chiếc quần, h&igrave;nh chiếc l&aacute;...</p>\r\n<div class=\"separator\"><a href=\"https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhn8gjIDo7LzT8n0_OKRr8L85DUPOrsr8TIoshtXuhoZypLWjVoLoIUlAuMrV_icSfZNFgrypw4tIEQIwrOGjMPFUU92dZ3fuKLY-vIcB_wBrdmnRSPODwKM_K5xxzUZ0ni9TE6MpC1RyJI3HyNuo-0rVgkgIlYhaqs23FcOLF52-oVSBCAjJG9QIox/s2059/name%20card%20m%E1%BA%A1t%20sau%20%C4%91%E1%BA%A1i%20long.jpg\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhn8gjIDo7LzT8n0_OKRr8L85DUPOrsr8TIoshtXuhoZypLWjVoLoIUlAuMrV_icSfZNFgrypw4tIEQIwrOGjMPFUU92dZ3fuKLY-vIcB_wBrdmnRSPODwKM_K5xxzUZ0ni9TE6MpC1RyJI3HyNuo-0rVgkgIlYhaqs23FcOLF52-oVSBCAjJG9QIox/s320/name%20card%20m%E1%BA%A1t%20sau%20%C4%91%E1%BA%A1i%20long.jpg\" width=\"320\" height=\"197\" border=\"0\" data-original-height=\"1269\" data-original-width=\"2059\" /></a></div>\r\n<p>&nbsp;</p>\r\n<p>In danh thiếp cao cấp đ&ograve;i hỏi khắt khe về từ kh&acirc;u thiết kế, in ấn cũng như th&agrave;nh phẩm sau in. Nếu danh thiếp của bạn được l&agrave;m từ loại giấy cao cấp v&agrave; c&oacute; thiết kế hấp dẫn, bắt mắt, dễ nh&igrave;n, sẽ để lại ấn tượng đối với người nhận n&oacute;.</p>\r\n<p>Quy tr&igrave;nh in danh thiếp cao cấp chủ yếu sử dụng phương ph&aacute;p v&agrave; c&ocirc;ng nghệ in lưới thủ c&ocirc;ng, in phun kỹ thuật số hay in offset. Mỗi một phương ph&aacute;p in sẽ c&oacute; một đặc điểm về kỹ thuật ri&ecirc;ng v&agrave; gi&aacute; cả kh&aacute;c nhau.<br />Kh&ocirc;ng giới hạn về tone m&agrave;u cũng như k&iacute;ch thước, phần tử in được thể hiện một c&aacute;ch r&otilde; r&agrave;ng sắc n&eacute;t, độ s&acirc;u v&agrave; trung thực của h&igrave;nh ảnh cao, chất liệu v&agrave; kiểu c&aacute;ch danh thiếp của bạn c&oacute; thể được thực hiện một c&aacute;ch đa dạng v&agrave; c&aacute; nh&acirc;n h&oacute;a cao&hellip; do vậy in danh thiếp bằng hai phương ph&aacute;p tr&ecirc;n được rất nhiều c&aacute;c tổ chức doanh nghiệp v&agrave; c&aacute; nh&acirc;n lựa chọn ưu ti&ecirc;n sử dụng h&agrave;ng đầu cho nhu cầu về in namecard chất lượng cao của m&igrave;nh.<br />C&ocirc;ng đoạn gia c&ocirc;ng ho&agrave;n thiện sau in bao gồm bế cắt, c&aacute;n m&agrave;ng nhiệt tr&ecirc;n bản in sẽ gi&uacute;p tấm danh thiếp của bạn cứng c&aacute;p, bền m&agrave;u, kh&ocirc;ng thấm nước.</p>\r\n<p><strong>Li&ecirc;n hệ in Name Card</strong></p>\r\n<p><em><strong>C&Ocirc;NG TY TNHH CURIE VIỆT NAM</strong></em></p>\r\n<p><em><strong>ĐỊA CHỈ: KHU PHỐ AN H&Ograve;A, PHƯỜNG H&Ograve;A LỢI, BẾN C&Aacute;T, B&Igrave;NH DƯƠNG</strong></em></p>\r\n<p><em><strong>HOTLINE: 0974 953 600 &ndash; Mr Ph&uacute;</strong></em></p>\r\n<p><em><strong>Email: phuth.me@gmail.com</strong></em></p>', NULL, NULL, 61, 'Name card - Danh Thiếp có vai trò rất quan trọng dùng để giới thiệu bản thân, công ty, dịch vụ kinh doanh', 'Name card - Danh Thiếp có vai trò rất quan trọng dùng để giới thiệu bản thân, công ty, dịch vụ kinh doanh', 1, '2022-11-10 23:06:11', '2023-04-28 09:46:40'),
(7, 1, 'Dịch Vụ In Hóa Đơn Bán Lẻ', 'dich-vu-in-hoa-don-ban-le', 'Nhu cầu của bạn cần in hóa đơn bán lẻ, phiếu chi, phiếu thu, biên lai, giấy biên nhận, giấy tờ xuất hàng, báo biểu, sổ liên hệ, công văn,...', 'dich-vu-in-hoa-don-ban-le-aaWQdh.jpg', 'thumb_dich-vu-in-hoa-don-ban-le-aaWQdh.jpg', 'in-ky-thuat-so', 0, 0, 'normal', 0, '<p><em><strong>Nhu cầu của bạn cần in h&oacute;a đơn b&aacute;n lẻ, phiếu chi, phiếu thu, bi&ecirc;n lai, giấy bi&ecirc;n nhận, giấy tờ xuất h&agrave;ng, b&aacute;o biểu, sổ li&ecirc;n hệ, c&ocirc;ng văn,... v&agrave; nhiều loại giấy tờ kh&aacute;c li&ecirc;n quan tới in ấn. Ch&uacute;ng t&ocirc;i, dịch vụ in của C&ocirc;ng Ty TNHH Curie Việt Nam đ&aacute;p ứng mọi nhu cầu đặt in h&oacute;a đơn, b&aacute;o biểu carbonless cho c&aacute; nh&acirc;n, c&ocirc;ng ty, doanh nghiệp.</strong></em></p>\r\n<p><em>H&oacute;a đơn 1 li&ecirc;n, 2 li&ecirc;n, 3 li&ecirc;n hoặc nhiều hơn nữa,... với chi ph&iacute; thiết kế 0 đồng, b&aacute;o gi&aacute; trực tiếp, nhận order v&agrave; giao h&agrave;ng trong v&ograve;ng 3 ng&agrave;y với số lượng dưới 100 cuốn, chủng loại đa dạng, từ A4 cho tới A6, theo y&ecirc;u cầu kh&aacute;ch h&agrave;ng, với những m&agrave;u sắc phổ biến đỏ v&agrave; đen, chất lượng giấy đảm bảo, sản phẩm bền đẹp, thiết kế chuy&ecirc;n nghiệp, mức gi&aacute; hợp l&yacute; hay l&agrave; mức gi&aacute; tốt nhất tại xưởng, hỗ trợ kh&aacute;ch h&agrave;ng trong qu&aacute; tr&igrave;nh giao h&agrave;ng, hỗ trợ thiết kế, gửi mẫu duyệt qua zalo cũng như c&aacute;c phương tiện kh&aacute;c gi&uacute;p l&agrave;m h&agrave;i l&ograve;ng kh&aacute;ch h&agrave;ng.</em></p>\r\n<p><em>&nbsp;</em></p>\r\n<div class=\"separator\"><em><a href=\"https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEil8aWdCRy9WRsEMa203y6Btq5-X8dlptfuSKn0TAsu3Y1ipXD8RCKyK4wzMNEpuhHhQi2riGfOscrhbAeUQ0pE0fu5SckJ5YV7VfVGN9eiYRjiAi-YlKYiu4El34Fa3FdDAXYfsoT-YsuvTOy7BA8cJqRxZqk4ee8VmIgn8Kjym6_-ue04zmQ8tRsJ/s2560/H%C3%B3a%20%C4%91%C6%A1n.jpg\"><img src=\"https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEil8aWdCRy9WRsEMa203y6Btq5-X8dlptfuSKn0TAsu3Y1ipXD8RCKyK4wzMNEpuhHhQi2riGfOscrhbAeUQ0pE0fu5SckJ5YV7VfVGN9eiYRjiAi-YlKYiu4El34Fa3FdDAXYfsoT-YsuvTOy7BA8cJqRxZqk4ee8VmIgn8Kjym6_-ue04zmQ8tRsJ/s320/H%C3%B3a%20%C4%91%C6%A1n.jpg\" width=\"320\" height=\"240\" border=\"0\" data-original-height=\"1920\" data-original-width=\"2560\" /></a></em></div>\r\n<p><em><br /><strong><br /></strong></em></p>\r\n<p>&nbsp;</p>\r\n<h3>Dịch vụ ch&uacute;ng t&ocirc;i cung cấp cho c&aacute;c kh&aacute;ch h&agrave;ng như:</h3>\r\n<p>Shop thời trang</p>\r\n<p>C&ocirc;ng ty may mặc</p>\r\n<p>Nh&agrave; h&agrave;ng, đại l&yacute; bu&ocirc;n b&aacute;n</p>\r\n<p>Qu&aacute;n nhậu, bia hơi</p>\r\n<p>C&aacute;c doanh nghiệp tại khu c&ocirc;ng nghiệp</p>\r\n<p>....</p>\r\n<h2>C&aacute;c loại h&oacute;a đơn, b&aacute;o biểu th&ocirc;ng thường</h2>\r\n<h3>H&oacute;a đơn, biểu 1 li&ecirc;n</h3>\r\n<p>Mục đ&iacute;ch: th&ocirc;ng thường loại n&agrave;y chỉ mang t&iacute;nh chất liệt k&ecirc; sản phẩm, người d&ugrave;ng l&agrave; chủ qu&aacute;n, chủ đại l&yacute;, mục đ&iacute;ch liệt k&ecirc; những sản phẩm b&aacute;n cho kh&aacute;ch h&agrave;ng, kh&ocirc;ng lưu lại để đối chứng.</p>\r\n<p>K&iacute;ch thước: chủ yếu l&agrave; mẫu A5 dọc hoặc ngang t&ugrave;y theo mục đ&iacute;ch v&agrave; số lượng liệt k&ecirc; sản phẩm.</p>\r\n<p>Quy c&aacute;ch sản phẩm: 100 tờ/cuốn, đ&oacute;ng g&aacute;y, cấn răng cưa dễ d&agrave;ng t&aacute;ch bỏ</p>\r\n<p>Số lượng in tối thiểu: 10 cuốn</p>\r\n<h3>H&oacute;a đơn b&aacute;n lẻ 2 li&ecirc;n</h3>\r\n<p>Mục đ&iacute;ch: D&ugrave;ng l&agrave;m h&oacute;a đơn, b&aacute;o biểu liệt k&ecirc; sản phẩm bu&ocirc;n b&aacute;n hoặc quy c&aacute;ch h&agrave;ng h&oacute;a l&uacute;c xuất nhập kho. V&agrave; hơn nữa l&agrave; để đối chiếu sau khi b&agrave;n giao h&agrave;ng h&oacute;a, cũng như l&agrave;m căn cứ số lượng h&agrave;ng đ&atilde; giao, thời gian bảo h&agrave;nh cũng như check so với số lượng thực tế giao.<br />Đối tượng sử dụng: C&ocirc;ng ty, Doanh nghiệp, đại l&yacute;, cửa h&agrave;ng c&oacute; tỷ lệ xuất h&agrave;ng ra v&agrave;o cao, hoặc kh&aacute;ch h&agrave;ng mua b&aacute;n nhiều.<br />Loại giấy: Giấy carbonless.</p>\r\n<p>K&iacute;ch thước - quy c&aacute;ch: Khổ in A5, đ&oacute;ng g&oacute;i th&agrave;nh cuốn 100 tờ, c&oacute; đ&oacute;ng g&aacute;y v&agrave; cấn răng cưa dễ sử dụng.</p>\r\n<h3><span id=\"c_Hoa_don_ban_le_3_lien\" class=\"ez-toc-section\">H&oacute;a đơn b&aacute;n lẻ 3, 4 li&ecirc;n</span></h3>\r\n<p>Mục đ&iacute;ch: C&aacute;c c&ocirc;ng ty, doanh nghiệp, người b&aacute;n h&agrave;ng c&oacute; t&iacute;nh chất đối chiếu 3 b&ecirc;n để tr&aacute;nh gian dối sau khi giao h&agrave;ng. Nh&igrave;n chung n&oacute; tương tự như giấy 2 li&ecirc;n nhưng để mục đ&iacute;ch lưu kho cũng như giao cho người chuyển h&agrave;ng để đối chiếu kh&aacute;ch h&agrave;ng cũng như đối chiếu lại với c&ocirc;ng ty xuất h&agrave;ng.<br />Đối tương: Những doanh nghiệp c&oacute; nhiều h&agrave;ng xuất v&agrave; nhập, hoặc phụ thuộc v&agrave;o mục đ&iacute;ch kh&aacute;ch h&agrave;ng&hellip;.<br />Loại giấy: Giấy c&aacute;c bon (c&oacute; 3 li&ecirc;n viết kh&ocirc;ng cần k&ecirc; giấy than)<br />K&iacute;ch thước: C&oacute; 2 loại k&iacute;ch thước th&ocirc;ng dụng A5, A4. Một v&agrave;i trường hợp l&agrave; A6.<br />Quy c&aacute;ch: Đ&oacute;ng quyển 150tờ/quyển (50 li&ecirc;n); Cũng giống như loại 2 li&ecirc;n c&oacute; r&atilde;nh x&eacute; răng cưa; đ&oacute;ng số nhảy.</p>\r\n<p><strong>Li&ecirc;n hệ in h&oacute;a đơn &ndash; b&aacute;o biểu</strong></p>\r\n<p><em><strong>C&Ocirc;NG TY TNHH CURIE VIỆT NAM</strong></em></p>\r\n<p><em><strong>ĐỊA CHỈ: KHU PHỐ AN H&Ograve;A, PHƯỜNG H&Ograve;A LỢI, BẾN C&Aacute;T, B&Igrave;NH DƯƠNG</strong></em></p>\r\n<p><em><strong>HOTLINE: 0974 953 600 &ndash; Mr Ph&uacute;</strong></em></p>\r\n<p><em><strong>Email: phuth.me@gmail.com</strong></em></p>', NULL, NULL, 47, 'Nhu cầu của bạn cần in hóa đơn bán lẻ, phiếu chi, phiếu thu, biên lai, giấy biên nhận, giấy tờ xuất hàng, báo biểu, sổ liên hệ, công văn', 'Nhu cầu của bạn cần in hóa đơn bán lẻ, phiếu chi, phiếu thu, biên lai, giấy biên nhận, giấy tờ xuất hàng, báo biểu, sổ liên hệ, công văn', 1, '2022-11-10 23:14:12', '2023-04-28 09:46:39'),
(8, 2, 'QUY TRÌNH HOÀN THIỆN HÓA ĐƠN - BÁO BIỂU 1 LIÊN', 'quy-trinh-hoan-thien-hoa-don-bao-bieu-1-lien', 'Quy trình hoàn thiện hóa đơn 1 liên là một quy trình khép kín từ việc thiết kế, điều chỉnh, hoàn thiện mẫu thiết kế với khách hàng cho tới việc...', 'quy-trinh-hoan-thien-hoa-don-bao-bieu-1-lien-iHP1Wa.jpg', 'thumb_quy-trinh-hoan-thien-hoa-don-bao-bieu-1-lien-iHP1Wa.jpg', 'in-offset', 0, 0, 'normal', 0, '<p><em>Quy tr&igrave;nh ho&agrave;n thiện h&oacute;a đơn 1 li&ecirc;n l&agrave; một quy tr&igrave;nh kh&eacute;p k&iacute;n từ việc thiết kế, điều chỉnh, ho&agrave;n thiện mẫu thiết kế với kh&aacute;ch h&agrave;ng cho tới việc tạo ra cuốn h&oacute;a đơn ho&agrave;n chỉnh. Ch&uacute;ng t&ocirc;i in h&oacute;a đơn b&aacute;n lẻ số lượng &iacute;t 1 li&ecirc;n, 2 li&ecirc;n, v&agrave; 3 li&ecirc;n, l&agrave; qu&aacute; tr&igrave;nh từ c&ocirc;ng t&aacute;c thiết kế cho tới ho&agrave;n thiện sản phẩm in h&oacute;a đơn, offset. Nhằm đ&aacute;p ứng mọi nhu cầu kh&aacute;ch h&agrave;ng từ số lượng 10 cuốn cho tới h&agrave;ng trăm cuốn h&oacute;a đơn.</em></p>\r\n<p><em>H&oacute;a Đơn &ndash; B&aacute;o Biểu 1 Li&ecirc;n được sử dụng nhiều cho c&aacute;c đại l&yacute; với mục đ&iacute;ch k&ecirc; khai h&agrave;ng h&oacute;a, sản phẩm v&agrave;o kho, b&aacute;n h&agrave;ng cho kh&aacute;ch h&agrave;ng kh&ocirc;ng c&oacute; mục đ&iacute;ch lưu trữ, d&ugrave;ng cho c&aacute;c nh&agrave; h&agrave;ng để order m&oacute;n ăn, k&ecirc; khai sản phẩm thanh to&aacute;n. Sản phẩm n&agrave;y cũng được một v&agrave;i C&ocirc;ng ty, Doanh nghiệp sử dụng cho nh&acirc;n vi&ecirc;n, c&ocirc;ng nh&acirc;n khi c&oacute; c&ocirc;ng việc như xin tạm thanh to&aacute;n, ứng lương, giấy ra ngo&agrave;i khi c&oacute; việc cần hoặc v&agrave;o những mục đ&iacute;ch c&oacute; hoặc kh&ocirc;ng c&oacute; t&iacute;nh chất đối chiếu về sau.</em></p>\r\n<p>&nbsp;</p>\r\n<div class=\"separator\"><em><a href=\"https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEihqpYju2aTeec4g2vUV9UOTPKFAaTJBYsPv6swbBmrloIJ5OztJPr_M6LDMEB1iBT-uHK4HTiRnxtplNontuQ6HtOq6eKuR57xCbEEyTrlINl8v16AGrn-VuRU4JVaYcFeVN6LTVIzDWQJX-ZmJS2vWJxlYU4rdKmXX7gdHCamPRMpe6mg3uUa39SL/s2560/H%C3%B3a%20%C4%91%C6%A1n.jpg\"><img src=\"https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEihqpYju2aTeec4g2vUV9UOTPKFAaTJBYsPv6swbBmrloIJ5OztJPr_M6LDMEB1iBT-uHK4HTiRnxtplNontuQ6HtOq6eKuR57xCbEEyTrlINl8v16AGrn-VuRU4JVaYcFeVN6LTVIzDWQJX-ZmJS2vWJxlYU4rdKmXX7gdHCamPRMpe6mg3uUa39SL/s320/H%C3%B3a%20%C4%91%C6%A1n.jpg\" width=\"320\" height=\"240\" border=\"0\" data-original-height=\"1920\" data-original-width=\"2560\" /></a></em></div>\r\n<p><em>&nbsp;</em></p>\r\n<p><strong>Chi tiết thiết kế</strong>: với những sản phẩm in h&oacute;a đơn b&aacute;o biểu th&igrave; thiết kế kh&aacute; đơn giản, ch&uacute;ng t&ocirc;i sử dụng phần mềm chuy&ecirc;n dụng l&agrave; Corel để tạo n&ecirc;n bản thiết kế gửi cho kh&aacute;ch h&agrave;ng, th&ocirc;ng thường sẽ c&oacute; những nội dung m&agrave; n&oacute; phụ thuộc v&agrave;o nhu cầu kh&aacute;ch h&agrave;ng nhưng th&ocirc;ng thường với đại l&yacute; th&igrave; sẽ l&agrave;: t&ecirc;n đại l&yacute;, địa chỉ, số điện thoại, logo (nếu c&oacute;), t&ecirc;n sản phẩm (quy c&aacute;ch), đơn vị t&iacute;nh, số lượng, đơn gi&aacute; (nếu c&oacute;), tổng (th&agrave;nh tiền), phần k&yacute; x&aacute;c nhận, &hellip; T&ugrave;y thuộc v&agrave; đặc th&ugrave; m&agrave; số lượng nội dung c&oacute; thể &iacute;t hoặc nhiều, v&agrave; ch&uacute;ng t&ocirc;i sẽ hỗ trợ 100% chi ph&iacute; thiết kế cũng như thay đổi nội dung cũng như h&igrave;nh thức cho kh&aacute;ch h&agrave;ng, để kh&aacute;ch h&agrave;ng h&agrave;i l&ograve;ng với bản thiết kế cuối c&ugrave;ng.</p>\r\n<p><em>Với c&aacute;c doanh nghiệp, c&ocirc;ng ty nội dung sẽ c&oacute; th&ecirc;m ng&ocirc;n ngữ kh&aacute;c ngo&agrave;i tiếng Việt (d&ugrave;ng cho người Việt), ng&ocirc;n ngữ c&ograve;n lại cho chủ Doanh nghiệp, t&ugrave;y v&agrave;o y&ecirc;u cầu từng bộ phận m&agrave; sẽ c&oacute; những nội dung kh&aacute;c nhau đ&aacute;p ứng nhu cầu thống k&ecirc; của bộ phận đ&oacute;.</em></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Quy c&aacute;ch sản phẩm</strong>: chủ yếu l&agrave; k&iacute;ch thước khổ in l&agrave; A5, một v&agrave;i trường hợp l&agrave; A6 để tiết kiệm chi ph&iacute; cũng như nội dung &iacute;t. Sản phẩm sẽ được đ&oacute;ng g&aacute;y hoặc vết keo v&agrave; được cấn răng cưa phần g&aacute;y dễ d&agrave;ng cho việc x&eacute; bi&ecirc;n lai, c&oacute; một v&agrave;i trường hợp 1 li&ecirc;n như 2 nội dung tr&ecirc;n 1 li&ecirc;n với mục đ&iacute;ch giữ li&ecirc;n 2, li&ecirc;n 1 kh&aacute;ch h&agrave;ng giữ, trường hợp n&agrave;y sẽ cấn răng cưa giữa tờ giấy.</p>\r\n<p>&nbsp;</p>\r\n<p>- Ưu điểm của h&oacute;a đơn n&agrave;y l&agrave; số lượng lớn v&igrave; chỉ d&ugrave;ng duy nhất 1 li&ecirc;n</p>\r\n<p>- Thời gian sử dụng nhiều v&igrave; chỉ d&ugrave;ng 1 li&ecirc;n cho 1 lần ghi ch&eacute;p.</p>\r\n<p>- Chi ph&iacute; rẻ so với thời gian sử dụng</p>\r\n<p>Nhược điểm chỉ ghi ch&eacute;p cho c&aacute; nh&acirc;n sử dụng kh&ocirc;ng c&oacute; t&iacute;nh đối chứng hoặc bản sao gửi lại cho kh&aacute;ch h&agrave;ng.</p>\r\n<p>Li&ecirc;n hệ để đặt h&oacute;a đơn 1 li&ecirc;n hoặc nhiều li&ecirc;n</p>\r\n<p><strong>Li&ecirc;n hệ in h&oacute;a đơn &ndash; b&aacute;o biểu</strong></p>\r\n<p><em><strong>C&Ocirc;NG TY TNHH CURIE VIỆT NAM</strong></em></p>\r\n<p><em><strong>ĐỊA CHỈ: KHU PHỐ AN H&Ograve;A, PHƯỜNG H&Ograve;A LỢI, BẾN C&Aacute;T, B&Igrave;NH DƯƠNG</strong></em></p>\r\n<p><em><strong>HOTLINE: 0974 953 600 &ndash; Mr Ph&uacute;</strong></em></p>\r\n<p><em><strong>Email: phuth.me@gmail.com</strong></em></p>', NULL, NULL, 51, 'Quy trình hoàn thiện hóa đơn 1 liên là một quy trình khép kín từ việc thiết kế, điều chỉnh, hoàn thiện mẫu thiết kế với khách hàng cho tới việc tạo ra cuốn hóa đơn hoàn chỉnh', 'Quy trình hoàn thiện hóa đơn 1 liên là một quy trình khép kín từ việc thiết kế, điều chỉnh, hoàn thiện mẫu thiết kế với khách hàng cho tới việc tạo ra cuốn hóa đơn hoàn chỉnh', 1, '2022-11-10 23:17:54', '2023-04-28 09:46:40');
INSERT INTO `post` (`id`, `post_cate_id`, `post_title`, `post_slug`, `post_intro`, `post_image`, `post_thumb_image`, `post_cate_slug`, `post_image_status`, `post_image_thumb_status`, `post_status`, `post_featured`, `post_content`, `post_price`, `post_sale`, `post_view`, `post_meta_key`, `post_meta_desc`, `post_user_id`, `created_at`, `updated_at`) VALUES
(9, 1, 'IN DECAL PP CÁC LOẠI', 'in-decal-pp-cac-loai', 'Decal là tên một loại giấy trong ngành in ấn kỹ thuật số. Là một chất liệu nhựa tổng hợp mà có thể in phun nội dung, hình ảnh lên đó...', 'in-decal-pp-cac-loai-u7etyT.jpg', 'thumb_in-decal-pp-cac-loai-u7etyT.jpg', 'in-ky-thuat-so', 0, 0, 'normal', 0, '<p><em>Decal l&agrave; t&ecirc;n một loại giấy trong ng&agrave;nh in ấn kỹ thuật số. L&agrave; một chất liệu nhựa tổng hợp m&agrave; c&oacute; thể in phun nội dung, h&igrave;nh ảnh l&ecirc;n đ&oacute;, th&ocirc;ng thường với sự trợ gi&uacute;p của nhiệt hoặc nước. Decal l&agrave; viết tắt của decalcomania từ c&oacute; nguồn gốc từ decalquer trong tiếng Ph&aacute;p ra đời vảo khoảng những năm 1750. Ng&agrave;y nay decal được sử dụng rộng r&atilde;i trong lĩnh vực in ấn quảng c&aacute;o</em></p>\r\n<h2><strong>C&aacute;c loại decal</strong></h2>\r\n<ul>\r\n<li>Decal giấy: l&agrave; bề măt in (lớp 1) l&agrave;m bằng giấy</li>\r\n<li>Decal Nhựa: l&agrave; bề măt in (lớp 1) l&agrave;m bằng nhựa (c&oacute; 2 loại: nhựa trong v&agrave; nhựa trắng sữa)</li>\r\n<li>Decal bể: l&agrave; loại decal m&agrave; mặt in được l&agrave;m bằng 1 loại giấy đặt biệt, rất dễ vỡ. Khi d&aacute;n v&agrave;o sản phẩm th&igrave; kh&ocirc;ng thể th&aacute;o ra được nguy&ecirc;n vẹn. sử dụng để in c&aacute;c loại tem bảo h&agrave;nh</li>\r\n<li>Decal 7 m&agrave;u: l&agrave; loại decal b&oacute;ng, khi nh&igrave;n v&agrave;o decal sẽ thấy thật nhiều m&agrave;u sắc chiếu l&ecirc;n, thường d&ugrave;ng l&agrave;m tem chống h&agrave;ng giả</li>\r\n<li>Decal Mỹ thuật: l&agrave; Decal của giấy mỹ thuật.</li>\r\n</ul>\r\n<h2><strong>Giới thiệu PP v&agrave; ứng dụng PP trong quảng c&aacute;o</strong></h2>\r\n<p><em>L&agrave; từ viết tắt của từ paper plastic (PP). L&agrave; chất liệu được sử dụng phổ biến để in ấn c&aacute;c vật phẩm quảng c&aacute;o.</em></p>\r\n<p>Do lợi thế cho h&igrave;nh ảnh sắc n&eacute;t, m&agrave;u sắc trung thực như ảnh chụp, in PP được ứng dụng nhiều trong việc in poster quảng c&aacute;o, banner standee quảng c&aacute;o, in h&igrave;nh ảnh trang tr&iacute;</p>\r\n<div class=\"separator\">&nbsp;</div>\r\n<p><br />&hellip;</p>\r\n<p>&nbsp;</p>\r\n<p>Là m&ocirc;̣t loai ch&acirc;́t li&ecirc;̣u gi&acirc;́y tráng nhựa n&ecirc;n dai hơn các loại gi&acirc;́y thường, có đ&ocirc;̣ trắng bóng cao, loại gi&acirc;́y này được làm thành cu&ocirc;̣n có những kích chi&ecirc;̣u r&ocirc;̣ng lớn nh&acirc;́t là 1,5m n&ecirc;n được dùng nhi&ecirc;̀u đ&ecirc;̉ in quảng cáo, in tranh trang trí. Loại để can pp này cũng có 2 loại, 1 loại có th&ecirc;̉ đ&ecirc;̉ ở ngoài trời chịu được mưa nắng mà màu sắc &nbsp;v&acirc;̃n ổn định với thời gian dài loại này được gọi là decal pp ngoài trời, 1 loai kh&ocirc;ng chịu được mưa nắng, chỉ đ&ecirc;̉ trong nhà nhưng thời gian ngắn ngày gọi là Decal PP trong nhà, Decal pp ngoài vi&ecirc;̣c dùng đ&ecirc;̉ in quảng cáo với những kích thước lớn ra người ta v&acirc;̃n có th&ecirc;̉ dùng đ&ecirc;̉ in menu nhà hàng, in nhãn mác, in hướng d&acirc;̃n sử dụng với kích thước chữ r&acirc;́t nhỏ mà đ&ocirc;̣ sắc nét r&acirc;́t rõ ràng qua h&ecirc;̣ th&ocirc;́ng máy in PP chuy&ecirc;n dụng ch&acirc;́t lượng cao.</p>\r\n<p>Với nhiều năm kinh nghiệm trong lĩnh vực quảng c&aacute;o in ấn, in kỹ thuật số tốc độ cao, Curie đảm bảo cung cấp c&aacute;c sản phẩm PP, decal chất lượng tuyệt hảo, sản phẩm đẹp như thiết kế, gi&aacute; th&agrave;nh cạnh tranh, hỗ trợ kh&aacute;ch h&agrave;ng 24h/24h tại c&aacute;c khu vực B&igrave;nh Dương, TP HCM</p>\r\n<p><strong>Để biết th&ocirc;ng tin sản phẩm vui l&ograve;ng li&ecirc;n hệ: 0974 953 600 &ndash; Mr Ph&uacute; hoặc y&ecirc;u cầu b&aacute;o gi&aacute; qua Email: phuth.me@gmail.com</strong></p>', NULL, NULL, 49, 'Decal là tên một loại giấy trong ngành in ấn kỹ thuật số. Là một chất liệu nhựa tổng hợp mà có thể in phun nội dung, hình ảnh lên đó', 'Decal là tên một loại giấy trong ngành in ấn kỹ thuật số. Là một chất liệu nhựa tổng hợp mà có thể in phun nội dung, hình ảnh lên đó', 1, '2022-11-10 23:45:11', '2023-04-28 09:46:40');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post_image`
--

CREATE TABLE `post_image` (
  `id` int(11) NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `post_image` varchar(200) DEFAULT NULL,
  `post_image_status` int(11) DEFAULT NULL,
  `post_image_compress_status` int(2) DEFAULT NULL,
  `post_image_title` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `redirect`
--

CREATE TABLE `redirect` (
  `id` int(11) NOT NULL,
  `redirect_title` varchar(200) DEFAULT NULL,
  `redirect_title_slug` varchar(200) DEFAULT NULL,
  `redirect_link` varchar(200) DEFAULT NULL,
  `redirect_refresh_time` int(11) DEFAULT NULL,
  `redirect_meta_desc` varchar(500) DEFAULT NULL,
  `redirect_meta_key` varchar(500) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2021-01-07 08:39:47', '2021-01-07 08:39:47');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
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
(12, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `tags_cate_id` int(11) DEFAULT NULL,
  `tags_cate_slug` varchar(50) DEFAULT NULL,
  `post_id` int(11) NOT NULL,
  `tags_post` text NOT NULL,
  `tags_post_slug` varchar(80) NOT NULL,
  `tags_view` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tags`
--

INSERT INTO `tags` (`id`, `tags_cate_id`, `tags_cate_slug`, `post_id`, `tags_post`, `tags_post_slug`, `tags_view`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 2, 'băng rôn hiflex', 'bang-ron-hiflex', 0, '2022-10-28 22:57:44', '2022-10-28 22:57:44'),
(2, NULL, NULL, 2, 'in băng rôn giá rẻ', 'in-bang-ron-gia-re', 0, '2022-10-28 22:57:44', '2022-10-28 22:57:44'),
(3, NULL, NULL, 2, 'ưu điểm in hiflex', 'uu-diem-in-hiflex', 0, '2022-10-28 22:57:44', '2022-10-28 22:57:44');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `isAdmin` int(11) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `isAdmin`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Tran Huu Phu', 'phuth.site@gmail.com', 1, NULL, '$2y$10$Lso04Ne4N7TY7TQKFr8cUO5Mh/EV4aC1htYwWsDutID.g81IsrUOm', 'ATzVtYGRZWTqNqBqlbKIx4PZDCQ1cQXOc8InRCBeOm3JtxXGzSrMpjdLlNB6', '2021-01-07 08:39:47', '2021-01-07 08:39:47');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`carousel_id`);

--
-- Chỉ mục cho bảng `cate`
--
ALTER TABLE `cate`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `home_page_info`
--
ALTER TABLE `home_page_info`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `image_tinycme`
--
ALTER TABLE `image_tinycme`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Chỉ mục cho bảng `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Chỉ mục cho bảng `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `post_image`
--
ALTER TABLE `post_image`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `redirect`
--
ALTER TABLE `redirect`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Chỉ mục cho bảng `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cate`
--
ALTER TABLE `cate`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `home_page_info`
--
ALTER TABLE `home_page_info`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `image_tinycme`
--
ALTER TABLE `image_tinycme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `page`
--
ALTER TABLE `page`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `post`
--
ALTER TABLE `post`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `post_image`
--
ALTER TABLE `post_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `redirect`
--
ALTER TABLE `redirect`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
