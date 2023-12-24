-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 17, 2023 lúc 03:20 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `hatnhua_db`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `carousel`
--

CREATE TABLE `carousel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `carousel_title` varchar(255) NOT NULL,
  `carousel_slug` varchar(255) NOT NULL,
  `status` int(10) DEFAULT NULL,
  `carousel_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `carousel`
--

INSERT INTO `carousel` (`id`, `carousel_title`, `carousel_slug`, `status`, `carousel_image`, `created_at`, `updated_at`) VALUES
(5, 'slider 1', 'slider-1', NULL, 'slider-1-xM7bUc.jpg', '2023-11-19 20:22:08', '2023-11-19 20:22:08'),
(6, 'Cung cấp nguyên phụ liệu', 'cung-cap-nguyen-phu-lieu', NULL, 'cung-cap-nguyen-phu-lieu-c5EtgF.jpg', '2023-11-20 03:57:37', '2023-11-20 03:57:37');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cate`
--

CREATE TABLE `cate` (
  `id` int(10) NOT NULL,
  `cate_name` varchar(255) NOT NULL,
  `cate_slug` varchar(255) NOT NULL,
  `cate_parent_id` int(10) NOT NULL,
  `cate_status` int(11) NOT NULL,
  `cate_type` varchar(50) DEFAULT NULL,
  `cate_image` varchar(100) DEFAULT NULL,
  `cate_meta_desc` varchar(255) NOT NULL,
  `cate_meta_key` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cate`
--

INSERT INTO `cate` (`id`, `cate_name`, `cate_slug`, `cate_parent_id`, `cate_status`, `cate_type`, `cate_image`, `cate_meta_desc`, `cate_meta_key`, `created_at`, `updated_at`, `deleted_at`) VALUES
(14, 'Blog', 'blog', 0, 0, 'blog', NULL, 'Blog Tin Tức Thiết Kế, Sản Phẩm', 'Blog Tin Tức Thiết Kế, Sản Phẩm', '2020-07-23 17:19:57', '2023-09-12 10:09:56', NULL),
(26, 'Bộ Sưu Tập', 'bo-suu-tap', 0, 0, 'cate_gallery', NULL, 'Bộ sưu tập ảnh PNG JPG chất lượng cao dung lượng thấp dành cho thiết kế tham khảo', 'Bộ sưu tập ảnh PNG JPG chất lượng cao dung lượng thấp dành cho thiết kế tham khảo', '2023-06-12 06:37:52', '2023-06-12 06:37:52', NULL),
(28, 'Máy Móc Thiết Bị Ngành Đúc', 'may-moc-thiet-bi-nganh-duc', 0, 0, 'normal', 'may-moc-thiet-bi-nganh-duc-9Sc8BN.jpg', 'Máy Móc Thiết Bị Ngành Đúc', 'Máy Móc Thiết Bị Ngành Đúc', '2023-11-20 09:14:11', '2023-11-20 09:45:47', NULL),
(29, 'Linh Phụ Kiện Ngành Đúc', 'linh-phu-kien-nganh-duc', 0, 1, 'normal', 'linh-phu-kien-nganh-duc-PQrcom.jpg', 'Linh Phụ Kiện Ngành Đúc', 'Linh Phụ Kiện Ngành Đúc', '2023-11-20 09:25:57', '2023-11-20 09:25:57', NULL),
(30, 'Nguyên Liệu Ngành Đúc', 'nguyen-lieu-nganh-duc', 0, 1, 'normal', 'nguyen-lieu-nganh-duc-ITA4k2.jpg', 'Nguyên Liệu Ngành Đúc', 'Nguyên Liệu Ngành Đúc', '2023-11-26 20:41:30', '2023-11-26 20:41:30', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `don-hang`
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
-- Cấu trúc bảng cho bảng `gallery_image`
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
-- Đang đổ dữ liệu cho bảng `gallery_image`
--

INSERT INTO `gallery_image` (`id`, `gallery_type_id`, `gallery_type_name`, `gallery_type_slug`, `gallery_title`, `gallery_title_slug`, `gallery_cate_id`, `gallery_cate_slug`, `gallery_image`, `gallery_img_download_times`, `gallery_post_url`, `gallery_file_download`, `gallery_post_id`, `gallery_view`, `gallery_compress_times`, `gallery_meta_key`, `gallery_meta_desc`, `created_at`, `updated_at`) VALUES
(1, 3, 'Hoạt Hình', 'hoat-hinh', 'Sa Tăng', 'sa-tang', 26, 'bo-suu-tap', 'test-va-xoa-LYV2UJWfpdORZP6t.jpg', 2, NULL, NULL, NULL, 1, 4, 'Sa Tăng', 'Sa Tăng', '2023-06-15 21:52:07', '2023-09-22 09:13:57'),
(2, 1, 'ẩm thực', 'am-thuc', 'Mì 3 Miền PNG', 'mi-3-mien-png', 26, 'bo-suu-tap', 'anh-moi-2-umAtOzgrxs0pBMF9.png', 2, NULL, NULL, NULL, 1, 4, 'Mì 3 Miền PNG, mì tôm, mì hảo hảo chua cay', 'Mì 3 Miền PNG', '2023-06-15 22:07:18', '2023-09-22 07:58:40'),
(3, 4, 'Thiết Kế', 'thiet-ke', 'Admin Image Design', 'admin-image-design', 26, 'bo-suu-tap', 'co-post-id-2-moi-sua-RzMPpS4vtfqLysQ8.png', 2, NULL, NULL, NULL, 3, 4, 'Admin Image Design', 'Admin Image Design', '2023-06-16 02:39:26', '2023-09-22 06:57:24'),
(4, 3, 'Hoạt Hình', 'hoat-hinh', 'ảnh tôn nghộ không', 'anh-ton-ngho-khong', 26, 'bo-suu-tap', 'bai-moi-test-gallery-j6pvkyzSPwMeWIas.jpg', 3, NULL, NULL, NULL, 25, 4, 'ảnh tôn nghộ không', 'ảnh tôn nghộ không', '2023-06-16 09:10:04', '2023-09-22 08:48:49'),
(5, 1, 'ẩm thực', 'am-thuc', 'Ly Cà Phê Sữa Thơm Ngon', 'ly-cà-phê-sữa-thơm-ngon', 26, 'bo-suu-tap', 'bai-test-co-type-LG0cOaVPDqt7U8Hh.jpg', 3, NULL, NULL, NULL, 20, 0, 'Ly Cà Phê Sữa Thơm Ngon', 'Ly Cà Phê Sữa Thơm Ngon, dùng làm cho thiết kế', '2023-09-10 05:07:08', '2023-09-23 10:51:59'),
(6, 5, 'Vector', 'vector', 'Logo Cơm Niêu Vector', 'logo-com-nieu-vector', 26, 'bo-suu-tap', 'bai-viet-co-anh-va-link-LAKUDoC9khjOvTFe.png', 4, NULL, NULL, NULL, 41, 0, 'Logo Cơm Niêu Vector', 'Logo Cơm Niêu Vector', '2023-09-16 09:42:00', '2023-09-22 08:43:29'),
(7, 4, 'Thiết Kế', 'thiet-ke', 'Đại Hội Công Đoàn', 'đại-hội-công-đoàn', 26, 'bo-suu-tap', 'trung-thu-vector-2023-QE9MKzY1ev34slGn.png', 24, NULL, 'https://drive.google.com/file/d/1AzTt4zAv4OsqnBElsX4iZ9lYCwvvrmaq/view?usp=sharing', NULL, 8, 0, 'Thiết kế file corel vector x7 đại hội công đoàn 2023, chia sẻ file corel vector, đại hội công đoàn, nhiệt liệt chào mừng', 'Thiết kế file corel vector x7 đại hội công đoàn 2023', '2023-09-21 03:50:04', '2023-09-22 04:22:23'),
(8, 5, 'Vector', 'vector', 'Trung Thu Cho Em - Đêm Hội Trăng Rằm Vector', 'trung-thu-cho-em---dem-hoi-trang-ram-vector', 26, 'bo-suu-tap', 'trung-thu-cho-em-đêm-hội-trăng-rằm-vector-SjHKbOPDLFfzMEgT.png', 11, NULL, 'https://drive.google.com/file/d/1l5FBSeASzA8h5wijBJYQyFU-Y3pmF3rX/view?usp=sharing', NULL, 20, 0, 'Trung Thu Cho Em - Đêm Hội Trăng Rằm Vector, file thiết kế corel dx7 vector', 'Trung Thu Cho Em - Đêm Hội Trăng Rằm Vector Corel x7', '2023-09-21 04:17:48', '2023-09-22 17:16:02'),
(9, 1, 'ẩm thực', 'am-thuc', 'Xúc xích chiên', 'xuc-xich-chien', 26, 'bo-suu-tap', 'xuc-xich-chien-spDNjV5ZGTUYyOfz.png', 3, NULL, NULL, NULL, 2, 0, 'Xúc xích chiên, ảnh chất lượng cao đã xóa font nền', 'Xúc xích chiên dành cho thiết kế chuyên nghiệp', '2023-09-21 16:07:28', '2023-09-22 08:46:05'),
(10, 4, 'Thiết Kế', 'thiet-ke', 'Đêm Hội Trăng Rằm Tiếng Trung', 'dem-hoi-trang-ram-tieng-trung', 26, 'bo-suu-tap', 'dem-hoi-trang-ram-02-zB2Zy0HMDGdSUP3N.png', NULL, NULL, 'https://drive.google.com/file/d/1W8J06fKY1h4Agm5D1xKGZ6dn6vCZzLgt/view?usp=sharing', NULL, 14, 0, 'đêm hội trăng rằm, file thiết kế trung thu cho em dạng vector corel x7 tiếng trung', 'đêm hội trăng rằm, file thiết kế trung thu cho em dạng vector corel x7 tiếng trung', '2023-09-22 03:24:02', '2023-09-24 13:33:41'),
(11, 1, 'ẩm thực', 'am-thuc', 'Nem Nướng Xiên Que Hấp Dẫn', 'nem-nuong-xien-que-hap-dan', 26, 'bo-suu-tap', 'nem-nuong-xien-que-hap-dan-uNJzCmDGFiO3qhxv.png', 2, NULL, NULL, NULL, 4, 0, 'Nem Nướng Xiên Que Hấp Dẫn PNG dành cho thiết kế', 'Nem Nướng Xiên Que Hấp Dẫn PNG dành cho thiết kế', '2023-09-22 03:33:36', '2023-09-24 13:36:50'),
(12, 1, 'ẩm thực', 'am-thuc', 'Chà Bông Heo đã tách nền PNG', 'cha-bong-heo-da-tach-nen-png', 26, 'bo-suu-tap', 'cha-bong-heo-da-tach-nen-png-z3M1AcmT8wgWSDVk.png', 2, NULL, NULL, NULL, 0, 0, 'Chà Bông Heo đã tách nền PNG, ảnh chất lượng cao dùng cho thiết kế', 'Chà Bông Heo đã tách nền PNG, ảnh chất lượng cao dùng cho thiết kế', '2023-09-22 03:38:17', '2023-09-24 11:53:35'),
(13, 1, 'ẩm thực', 'am-thuc', 'Bánh Mì Que Dài Ngon Đà Nẵng Hấp Dẫn', 'banh-mi-que-dai-ngon-da-nang-hap-dan', 26, 'bo-suu-tap', 'banh-mi-que-dai-ngon-da-nang-hap-dan-nFm0si1VSgEau2ec.png', 1, NULL, NULL, NULL, 0, 0, 'Bánh Mì Que Dài Ngon Đà Nẵng Hấp Dẫn, bánh mì pate, bánh mì kebab', 'Bánh Mì Que Dài Ngon Đà Nẵng Hấp Dẫn, bánh mì pate, bánh mì kebab', '2023-09-22 03:40:05', '2023-09-23 08:42:23'),
(14, 1, 'ẩm thực', 'am-thuc', 'Bánh Mì Heo Quay Hấp Dẫn', 'banh-mi-heo-quay-hap-dan', 26, 'bo-suu-tap', 'banh-mi-heo-quay-hap-dan-SC2O6by8Ag0UknJX.png', 1, NULL, NULL, NULL, 0, 0, 'Bánh Mì Heo Quay Hấp Dẫn đã tách nền cho người thiết kế', 'Bánh Mì Heo Quay Hấp Dẫn đã tách nền cho người thiết kế', '2023-09-22 03:41:18', '2023-09-23 07:25:43'),
(15, 4, 'Thiết Kế', 'thiet-ke', '5F Apollo Logo PNG', '5f-apollo-logo-png', 26, 'bo-suu-tap', '5f-apollo-logo-png-fNE0zFA2i9npQoxY.png', 2, NULL, NULL, NULL, 0, 0, '5F Apollo Logo PNG', '5F Apollo Logo PNG', '2023-09-22 05:21:56', '2023-09-22 21:48:57'),
(16, 4, 'Thiết Kế', 'thiet-ke', 'Logo Loto Show', 'logo-loto-show', 26, 'bo-suu-tap', 'logo-loto-show-1lZV58YtFnJa9obe.png', 1, NULL, NULL, NULL, 0, 0, 'Logo Loto Show PNG dành cho thiết kế và trang trí', 'Logo Loto Show PNG dành cho thiết kế và trang trí', '2023-09-22 05:23:18', '2023-09-23 07:16:08'),
(17, 6, 'Trang Sức - Jewelry', 'trang-suc---jewelry', 'Nhẫn Ring Golden Vàng Nhẫn Cưới', 'nhan-ring-golden-vang-nhan-cuoi', 26, 'bo-suu-tap', 'nhan-ring-golden-vang-nhan-cuoi-rBHDUTFqf8AOvalX.png', 1, NULL, NULL, NULL, 0, 0, 'Nhẫn Ring Golden Vàng đã tách nền PNG, Nhẫn Cưới', 'Nhẫn Ring Golden Vàng đã tách nền PNG, Nhẫn Cưới', '2023-09-22 05:26:39', '2023-09-23 07:51:43'),
(18, 4, 'Thiết Kế', 'thiet-ke', 'BỘ TRÒ CHƠI LOTO BINGO', 'bo-tro-choi-loto-bingo', 26, 'bo-suu-tap', 'bo-tro-choi-loto-bingo-USIiATV2hJx4P5HO.png', 1, NULL, NULL, NULL, 0, 0, 'BỘ TRÒ CHƠI LOTO BINGO', 'BỘ TRÒ CHƠI LOTO BINGO', '2023-09-22 05:29:14', '2023-09-23 00:18:56'),
(19, 4, 'Thiết Kế', 'thiet-ke', 'Logo Loto Show 2', 'logo-loto-show-2', 26, 'bo-suu-tap', 'logo-loto-show-2-NVeMrKbfmJ8pgFiw.png', 3, NULL, NULL, NULL, 0, 0, 'Logo Loto Show 2', 'Logo Loto Show 2', '2023-09-22 05:29:48', '2023-09-24 19:35:58'),
(20, 6, 'Trang Sức - Jewelry', 'trang-suc---jewelry', 'Nhẫn Đôi Vàng Đám Cưới', 'nhan-doi-vang-dam-cuoi', 26, 'bo-suu-tap', 'nhan-doi-vang-dam-cuoi-4GvWhLg70iaYIXpJ.png', 3, NULL, NULL, NULL, 0, 0, 'Nhẫn Đôi Vàng Đám Cưới', 'Nhẫn Đôi Vàng Đám Cưới', '2023-09-22 05:31:43', '2023-09-24 13:06:47'),
(21, 1, 'ẩm thực', 'am-thuc', 'Bếp Từ Bosh', 'bep-tu-bosh', 26, 'bo-suu-tap', 'bep-tu-bosh-zDtMxqOpwYAQ315Z.png', 2, NULL, NULL, NULL, 0, 0, 'Bếp Từ Bosh PNG đã tách nền', 'Bếp Từ Bosh', '2023-09-22 05:33:31', '2023-09-24 13:06:41'),
(22, 1, 'ẩm thực', 'am-thuc', 'Đầu Bếp Bánh Mì Chef Bread', 'dau-bep-banh-mi-chef-bread', 26, 'bo-suu-tap', 'dau-bep-banh-mi-chef-bread-ANHUaTJKRnpcXgkd.png', 2, NULL, NULL, NULL, 0, 0, 'Đầu Bếp Bánh Mì Chef Bread', 'Đầu Bếp Bánh Mì Chef Bread', '2023-09-22 05:36:32', '2023-09-24 13:06:35'),
(23, 7, 'Đồ Điện Tử Dân Dụng Electrical', 'do-dien-tu-dan-dung-electrical', 'Điều Hòa SamSung Air Conditioner', 'dieu-hoa-samsung-air-conditioner', 26, 'bo-suu-tap', 'dieu-hoa-samsung-air-conditioner-8MyH7wW3qjdkfOYT.png', 2, NULL, NULL, NULL, 0, 0, 'Điều Hòa SamSung Air Conditioner', 'Điều Hòa SamSung Air Conditioner', '2023-09-22 05:39:08', '2023-09-24 13:06:31'),
(24, 7, 'Đồ Điện Tử Dân Dụng Electrical', 'do-dien-tu-dan-dung-electrical', 'Máy Lạnh Âm Tường', 'may-lanh-am-tuong', 26, 'bo-suu-tap', 'may-lanh-am-tuong-FADmpvxkt2sRnZU6.jpg', 3, NULL, NULL, NULL, 0, 0, 'Máy Lạnh Âm Tường', 'Máy Lạnh Âm Tường', '2023-09-22 07:27:17', '2023-09-24 13:22:48'),
(25, 7, 'Đồ Điện Tử Dân Dụng Electrical', 'do-dien-tu-dan-dung-electrical', 'Tủ Lạnh Hitachi 2 Cánh PNG', 'tu-lanh-hitachi-2-canh-png', 26, 'bo-suu-tap', 'tu-lanh-hitachi-2-canh-png-f7PGioHmJ58xSFzy.png', 2, NULL, NULL, NULL, 0, 0, 'Tủ Lạnh Hitachi 2 Cánh PNG', 'Tủ Lạnh Hitachi 2 Cánh PNG', '2023-09-22 07:27:46', '2023-09-24 13:06:41'),
(26, 7, 'Đồ Điện Tử Dân Dụng Electrical', 'do-dien-tu-dan-dung-electrical', 'Bộ Điều Hòa Đôi', 'bo-dieu-hoa-doi', 26, 'bo-suu-tap', 'bo-dieu-hoa-doi-hjJI1fdNKWHk6vny.png', 2, NULL, NULL, NULL, 1, 0, 'Bộ Điều Hòa Đôi, điều hòa đã xử lý phông nền', 'Bộ Điều Hòa Đôi, điều hòa đã xử lý phông nền', '2023-09-22 07:28:46', '2023-09-24 13:22:56'),
(27, 3, 'Hoạt Hình', 'hoat-hinh', 'Tranh Hình Con Mèo Để Dán Kính Trang Trí - My Lovely Home', 'tranh-hinh-con-meo-de-dan-kinh-trang-tri---my-lovely-home', 26, 'bo-suu-tap', 'tranh-hinh-con-meo-de-dan-kinh-trang-tri---my-lovely-home-yzhkTKgSrvqAFf6l.jpg', 1, NULL, NULL, NULL, 1, 0, 'Tranh Hình Con Mèo Để Dán Kính Trang Trí - My Lovely Home Sweet Đẹp', 'Tranh Hình Con Mèo Để Dán Kính Trang Trí - My Lovely Home Sweet Đẹp', '2023-09-22 07:44:33', '2023-09-23 06:28:13'),
(28, 7, 'Đồ Điện Tử Dân Dụng Electrical', 'do-dien-tu-dan-dung-electrical', 'Máy Giặt Lồng Ngang Toshiba', 'may-giat-long-ngang-toshiba', 26, 'bo-suu-tap', 'may-giat-long-ngang-toshiba-oAtNwclgSfxKI1b8.png', 2, NULL, NULL, NULL, 0, 0, 'Máy Giặt Lồng Ngang Toshiba', 'Máy Giặt Lồng Ngang Toshiba', '2023-09-22 08:30:08', '2023-09-24 13:06:37'),
(29, 7, 'Đồ Điện Tử Dân Dụng Electrical', 'do-dien-tu-dan-dung-electrical', 'Điều Hòa Âm Tường', 'dieu-hoa-am-tuong', 26, 'bo-suu-tap', 'dieu-hoa-am-tuong-GdkQx2EJ4YjFAihy.png', 3, NULL, NULL, NULL, 0, 0, 'Điều Hòa Âm Tường', 'Điều Hòa Âm Tường', '2023-09-22 08:37:00', '2023-09-24 13:22:58'),
(30, 7, 'Đồ Điện Tử Dân Dụng Electrical', 'do-dien-tu-dan-dung-electrical', 'Điều Hòa Inverter Gree', 'dieu-hoa-inverter-gree', 26, 'bo-suu-tap', 'dieu-hoa-inverter-gree-8uofahMVZmzQA2Pg.png', 4, NULL, NULL, NULL, 0, 0, 'Điều Hòa Inverter Gree Đã Tách Nền PNG', 'Điều Hòa Inverter Gree Đã Tách Nền PNG', '2023-09-22 08:37:54', '2023-09-24 13:23:00'),
(31, 4, 'Thiết Kế', 'thiet-ke', 'Interview Messi 21.09.2023', 'interview-messi-21.09.2023', 26, 'bo-suu-tap', 'interview-messi-21.09.2023-KauTZSQthwneCpds.jpg', 3, NULL, NULL, NULL, 12, 0, 'Interview Messi 21.09.2023 After Out PSG', 'Interview Messi 21.09.2023 After Out PSG', '2023-09-22 09:26:05', '2023-09-24 17:17:02'),
(32, 1, 'ẩm thực', 'am-thuc', 'Heo Sữa Quay Cúng Lễ Thơm Ngon', 'heo-sua-quay-cung-le-thom-ngon', 26, 'bo-suu-tap', 'heo-sua-quay-cung-le-thom-ngon-t9cLiXl6HyhvQ7RB.jpg', 3, NULL, NULL, NULL, 1, 0, 'Heo Sữa Quay Cúng Lễ Thơm Ngon', 'Heo Sữa Quay Cúng Lễ Thơm Ngon', '2023-09-22 10:44:42', '2023-09-24 14:07:03'),
(33, 4, 'Thiết Kế', 'thiet-ke', 'Hastag Cầm Tay Vector File Thiết Kế', 'hastag-cam-tay-vector-file-thiet-ke', 26, 'bo-suu-tap', 'hastag-cam-tay-vector-file-thiet-ke-1OSBcnE6gTXjtQk5.png', 3, NULL, 'https://drive.google.com/file/d/14-oEMDkGc2_t6Wwn30mL_dxHtGns4Q49/view?usp=sharing', NULL, 2, 0, 'Hastag Cầm Tay Vector File Thiết Kế', 'Hastag Cầm Tay Vector File Thiết Kế', '2023-09-23 10:33:06', '2023-09-24 17:09:51'),
(34, 1, 'ẩm thực', 'am-thuc', 'Bánh Mì Má Hải Logo PNG - File Thiết Kế Vector', 'banh-mi-ma-hai-logo-png---file-thiet-ke-vector', 26, 'bo-suu-tap', 'banh-mi-ma-hai-logo-png---file-thiet-ke-vector-OEDSIMguo4zetvRN.png', 2, NULL, 'https://drive.google.com/file/d/1fqtGsVFmqegzwqwI2D2sFXfdZjEmZNHy/view?usp=sharing', NULL, 1, 0, 'Bánh Mì Má Hải Logo PNG - File Thiết Kế Vector', 'Bánh Mì Má Hải Logo PNG - File Thiết Kế Vector', '2023-09-23 12:45:11', '2023-09-24 16:31:45'),
(35, 4, 'Thiết Kế', 'thiet-ke', 'File Vector Sinh Nhật Khổ Lớn', 'file-vector-sinh-nhat-kho-lon', 26, 'bo-suu-tap', 'file-vector-sinh-nhat-kho-lon-PCs5eRDk9UYO8Krn.jpg', 3, NULL, 'https://drive.google.com/file/d/1NrrJ2zy1fwWUlNFu9M838o8Hh9of3k-X/view?usp=drive_link', NULL, 7, 0, 'File Vector Sinh Nhật Khổ Lớn', 'File Vector Sinh Nhật Khổ Lớn ', '2023-09-24 13:28:41', '2023-09-24 17:02:42'),
(36, 4, 'Thiết Kế', 'thiet-ke', 'Cá Rô Phi', 'ca-ro-phi', 26, 'bo-suu-tap', 'ca-ro-phi-0jKq9a.png', NULL, NULL, NULL, NULL, 0, 0, 'Cá Rô Phi tách nền dùng cho thiết kế in ấn, in decal, in bạt hiflex', 'Cá Rô Phi tách nền dùng cho thiết kế in ấn, in decal, in bạt hiflex', '2023-09-25 05:12:51', '2023-09-25 05:12:51');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gallery_type`
--

CREATE TABLE `gallery_type` (
  `id` int(11) NOT NULL,
  `gallery_type_name` varchar(100) DEFAULT NULL,
  `gallery_type_slug` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `gallery_type`
--

INSERT INTO `gallery_type` (`id`, `gallery_type_name`, `gallery_type_slug`, `created_at`, `updated_at`) VALUES
(1, 'ẩm thực', 'am-thuc', '2023-09-09 09:44:01', '2023-09-10 05:21:11'),
(2, 'phương tiện - xe cộ', 'phuong-tien---xe-co', '2023-09-09 10:24:18', '2023-09-10 05:29:11'),
(3, 'Hoạt Hình', 'hoat-hinh', '2023-09-20 04:34:46', '2023-09-20 04:34:46'),
(4, 'Thiết Kế', 'thiet-ke', '2023-09-20 04:36:45', '2023-09-20 04:36:45'),
(5, 'Vector', 'vector', '2023-09-20 04:37:38', '2023-09-20 04:37:38'),
(6, 'Trang Sức - Jewelry', 'trang-suc---jewelry', '2023-09-22 05:31:01', '2023-09-22 05:31:01'),
(7, 'Đồ Điện Tử Dân Dụng Electrical', 'do-dien-tu-dan-dung-electrical', '2023-09-22 05:32:49', '2023-09-22 05:32:49');

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
  `image_TinyCME_status` int(2) DEFAULT NULL,
  `image_size_original` varchar(20) DEFAULT NULL,
  `image_size_compressed` varchar(20) DEFAULT NULL,
  `image_size_compressed_2` varchar(20) DEFAULT NULL,
  `image_size_compressed_3` varchar(20) DEFAULT NULL,
  `image_folder` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `image_tinycme`
--

INSERT INTO `image_tinycme` (`id`, `image_TinyCME_name`, `image_TinyCME_status`, `image_size_original`, `image_size_compressed`, `image_size_compressed_2`, `image_size_compressed_3`, `image_folder`, `created_at`, `updated_at`) VALUES
(36, 'favicon_admin-FrRLo.png', 3, '3062', '2891', NULL, NULL, 'tinymce', '2023-09-07 17:46:02', '2023-09-13 04:09:25'),
(37, 'user_tran-huu-phu-2-pkbwK.png', 3, '437012', '400218', NULL, NULL, 'tinymce', '2023-09-07 17:46:16', '2023-09-13 04:09:36'),
(38, '1200222-dWYBqo1xIFALTtPp.jpg', 3, '780831', '125339', NULL, NULL, 'image_asset', '2023-09-07 17:46:42', '2023-09-13 04:09:43'),
(39, 'bai-nay-co-anh-1200x900-IaVqzN6cuFXfrSkJ.jpg', 3, '595284', '94547', NULL, NULL, 'image_asset', '2023-09-07 17:46:51', '2023-09-13 04:09:48'),
(40, 'bai-viet-ban-hang-2-5FEGdH4RUA3j1rPW.jpg', 3, '780831', '125339', NULL, NULL, 'image_asset', '2023-09-07 17:47:01', '2023-09-13 04:09:53'),
(41, 'bai-viet-ban-hang-co-bo-anh-nDBe7YdVkLy908CO.jpg', 3, '1351534', '360019', NULL, NULL, 'image_asset', '2023-09-07 17:47:13', '2023-09-13 04:10:04'),
(42, 'bai-viet-ban-hang-kA98NiMmybvSTG50.jpg', 3, '267801', '137935', NULL, NULL, 'image_asset', '2023-09-07 17:47:21', '2023-09-13 04:10:09'),
(43, 'user_tran-huu-phu-ewP7q.jpg', 3, '1009168', '322846', NULL, NULL, 'image_asset', '2023-09-07 17:47:32', '2023-09-13 04:10:24'),
(44, 'bai-viet-ban-hang-co-bo-anh-oEkXcybM7JK1tzTA.jpeg', 3, '220648', '69052', NULL, NULL, 'image_asset', '2023-09-07 17:47:40', '2023-09-13 04:10:36'),
(45, 'favicon_admin-FJlfT.png', 3, '564317', '174933', NULL, NULL, 'image_asset', '2023-09-07 17:47:47', '2023-09-21 17:46:26'),
(46, 'bai-viet-test-session-ebpTF9GhsKJkYlI1.jpg', 3, '401389', '68871', NULL, NULL, 'image_asset', '2023-09-21 17:44:24', '2023-09-21 18:05:43'),
(47, 'dich-vu-in-hoa-don-ban-le-tCoHxnIT8i0BOyVr.jpg', 3, '32306', '32306', NULL, NULL, 'image_asset', '2023-09-21 17:44:26', '2023-09-21 18:05:44'),
(48, 'giay-dung-in-hoa-don-–-bao-bieu-NmDWayK3xqObhzkL.jpg', 3, '17861', '17861', NULL, NULL, 'image_asset', '2023-09-21 17:44:28', '2023-09-21 18:05:46'),
(49, 'hoa-don-bao-bieu-XfaE7PoVkGAsMdwI.jpg', 3, '433004', '72230', NULL, NULL, 'image_asset', '2023-09-21 17:44:32', '2023-09-21 18:05:49'),
(50, 'in-bang-ron---bang-hieu-W5ydhopj9s3AlKuU.jpg', 3, '1124813', '288271', NULL, NULL, 'image_asset', '2023-09-21 17:44:40', '2023-09-21 18:05:53'),
(51, 'in-bang-ron-bat-hiflex-vrO8ul2hzfQCj4SE.jpg', 3, '2213182', '414347', '401303', NULL, 'image_asset', '2023-09-21 17:44:49', '2023-09-25 05:02:33'),
(52, 'in-name-card---danh-thiep-kd4jANzO1tVHxvrB.jpg', 3, '36011', '36011', NULL, NULL, 'image_asset', '2023-09-21 17:44:51', '2023-09-21 18:05:59'),
(53, 'in-pp-can-mo-n9BlrUJ2Pzev0MXh.jpg', 3, '66621', '44859', NULL, NULL, 'image_asset', '2023-09-21 17:44:54', '2023-09-21 18:06:02'),
(54, 'quy-trinh-hoan-thien-hoa-don---bao-bieu-1-lien-pAhwjZrgEuvWXRJO.jpg', 3, '1056976', '342784', NULL, NULL, 'image_asset', '2023-09-21 17:45:03', '2023-09-21 18:06:07'),
(55, 'about-us-1YUEjZNCVdT4vm7f.png', 3, '85193', '6752', NULL, NULL, 'image_asset', '2023-09-21 17:45:05', '2023-09-21 18:06:08'),
(56, 'favicon_trang-chu-QF8ujlY3NqzaiSbc.png', 3, '127827', '16978', NULL, NULL, 'image_asset', '2023-09-21 17:45:07', '2023-09-21 18:06:10'),
(57, 'bai-viet-ban-hang-co-bo-anh-CqLJfuMpNoBhSOR0.jpg', 1, '31508', '30700', NULL, NULL, 'post_images', '2023-09-24 11:22:08', '2023-09-24 11:22:08'),
(58, 'bai-viet-ban-hang-co-bo-anh-F4sjAdhTDKC8Gmb6.jpg', 1, '192477', '92700', NULL, NULL, 'post_images', '2023-09-24 11:22:13', '2023-09-24 11:22:13'),
(59, 'bai-viet-test-upload-sp-8bzkLBpwZu6JAFI9.jpeg', 1, '220648', '103685', NULL, NULL, 'post_images', '2023-09-24 11:22:17', '2023-09-24 11:22:17'),
(60, 'bai-viet-test-upload-sp-LQhk0waAlH1njEi3.jpeg', 1, '333457', '61828', NULL, NULL, 'post_images', '2023-09-24 11:22:20', '2023-09-24 11:22:20'),
(61, 'bai-viet-ban-hang-co-bo-anh-rA9whlkiQt3TfEUD.png', 1, '2222068', '382538', NULL, NULL, 'post_images', '2023-09-24 11:22:26', '2023-09-24 11:22:26'),
(62, 'bai-viet-test-upload-sp-OgcQYj0IhRPqyn69.png', 1, '2222068', '382538', NULL, NULL, 'post_images', '2023-09-24 11:22:29', '2023-09-24 11:22:29'),
(63, 'bai-moi-test-gallery-j6pvkyzSPwMeWIas.jpg', 1, '169456', '168148', NULL, NULL, 'gallery_asset', '2023-09-24 11:22:34', '2023-09-24 11:22:34'),
(64, 'bai-test-co-type-LG0cOaVPDqt7U8Hh.jpg', 1, '18764', '15835', NULL, NULL, 'gallery_asset', '2023-09-24 11:22:35', '2023-09-24 11:22:35'),
(65, 'heo-sua-quay-cung-le-thom-ngon-t9cLiXl6HyhvQ7RB.jpg', 1, '2584954', '219180', NULL, NULL, 'gallery_asset', '2023-09-24 11:22:42', '2023-09-24 11:22:42'),
(66, 'interview-messi-21.09.2023-KauTZSQthwneCpds.jpg', 1, '79702', '71941', NULL, NULL, 'gallery_asset', '2023-09-24 11:22:45', '2023-09-24 11:22:45'),
(67, 'may-lanh-am-tuong-FADmpvxkt2sRnZU6.jpg', 1, '499278', '86843', NULL, NULL, 'gallery_asset', '2023-09-24 11:22:48', '2023-09-24 11:22:48'),
(68, 'test-va-xoa-LYV2UJWfpdORZP6t.jpg', 1, '97007', '96157', NULL, NULL, 'gallery_asset', '2023-09-24 11:22:51', '2023-09-24 11:22:51'),
(69, 'tranh-hinh-con-meo-de-dan-kinh-trang-tri---my-lovely-home-yzhkTKgSrvqAFf6l.jpg', 1, '365795', '75109', NULL, NULL, 'gallery_asset', '2023-09-24 11:22:55', '2023-09-24 11:22:55'),
(70, '5f-apollo-logo-png-fNE0zFA2i9npQoxY.png', 1, '181687', '69306', NULL, NULL, 'gallery_asset', '2023-09-24 11:22:58', '2023-09-24 11:22:58'),
(71, 'anh-moi-2-umAtOzgrxs0pBMF9.png', 1, '335067', '321512', NULL, NULL, 'gallery_asset', '2023-09-24 11:23:02', '2023-09-24 11:23:02'),
(72, 'bai-viet-co-anh-va-link-LAKUDoC9khjOvTFe.png', 1, '47398', '13983', NULL, NULL, 'gallery_asset', '2023-09-24 11:23:03', '2023-09-24 11:23:03'),
(73, 'banh-mi-heo-quay-hap-dan-SC2O6by8Ag0UknJX.png', 2, '1433365', '244996', '236421', NULL, 'gallery_asset', '2023-09-24 11:23:08', '2023-09-24 15:48:03'),
(74, 'file-vector-sinh-nhat-kho-lon-PCs5eRDk9UYO8Krn.jpg', 1, '89535', '67458', NULL, NULL, 'gallery_asset', '2023-09-24 15:31:56', '2023-09-24 15:31:56'),
(75, 'dem-hoi-trang-ram-02-zB2Zy0HMDGdSUP3N.png', 1, '1994398', '375014', NULL, NULL, 'gallery_asset', '2023-09-24 16:52:09', '2023-09-24 16:52:09'),
(76, 'trung-thu-cho-em-đêm-hội-trăng-rằm-vector-SjHKbOPDLFfzMEgT.png', 1, '1567255', '305200', NULL, NULL, 'gallery_asset', '2023-09-24 16:53:38', '2023-09-24 16:53:38'),
(77, 'xuc-xich-chien-spDNjV5ZGTUYyOfz.png', 1, '1297942', '393138', NULL, NULL, 'gallery_asset', '2023-09-24 16:55:24', '2023-09-24 16:55:24'),
(78, 'nem-nuong-xien-que-hap-dan-uNJzCmDGFiO3qhxv.png', 1, '965670', '269743', NULL, NULL, 'gallery_asset', '2023-09-24 16:56:56', '2023-09-24 16:56:56'),
(79, 'banh-mi-que-dai-ngon-da-nang-hap-dan-nFm0si1VSgEau2ec.png', 2, '2709294', '829010', '797884', NULL, 'gallery_asset', '2023-09-25 04:23:53', '2023-09-25 05:01:41'),
(80, 'banh-mi-ma-hai-logo-png---file-thiet-ke-vector-OEDSIMguo4zetvRN.png', 3, '710269', '710269', '710269', '710269', 'gallery_asset', '2023-09-25 04:52:46', '2023-09-25 04:58:31'),
(81, 'ca-ro-phi-0jKq9a.png', 1, '766494', '326099', NULL, NULL, 'gallery_asset', '2023-09-25 05:14:44', '2023-09-25 05:14:44'),
(82, 'bo-tro-choi-loto-bingo-USIiATV2hJx4P5HO.png', 1, '531112', '118630', NULL, NULL, 'gallery_asset', '2023-09-25 05:19:15', '2023-09-25 05:19:15'),
(83, 'cha-bong-heo-da-tach-nen-png-z3M1AcmT8wgWSDVk.png', 1, '984434', '341307', NULL, NULL, 'gallery_asset', '2023-09-25 05:22:26', '2023-09-25 05:22:26');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `page`
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
  `name_co` varchar(100) DEFAULT NULL,
  `tax_code` varchar(20) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `google_image_maps` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `page_meta_key` varchar(255) NOT NULL,
  `page_meta_desc` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `page`
--

INSERT INTO `page` (`id`, `user_id`, `page_name`, `page_slug`, `page_title`, `page_image`, `page_favicon`, `page_status`, `page_content`, `page_view`, `page_show`, `facebook`, `youtube`, `twitter`, `pinterest`, `maps`, `f_app`, `g_app`, `name_co`, `tax_code`, `phone`, `address`, `email`, `google_image_maps`, `page_meta_key`, `page_meta_desc`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Trang Chủ', 'trang-chu', 'Trang Chủ Công Ty TNHH Phát Triển Bảo Nam Group', 'trang-chu-PLYV6m.jpg', 'favicon_trang-chu-sWorSH.jpg', 1, '<p>C&ocirc;ng Ty TNHH Ph&aacute;t Triển Bảo Nam Group l&agrave; c&ocirc;ng ty hoạt động trong lĩnh vực b&aacute;n bu&ocirc;n m&aacute;y m&oacute;c, thiết bị v&agrave; nguy&ecirc;n phụ liệu phục vụ cho ngh&agrave;nh sản xuất l&ograve; nung như: L&ograve; trung tần, l&ograve; nung điện, m&aacute;y bắn s&aacute;p, m&aacute;y t&aacute;ch s&aacute;p,...</p>', NULL, 1, '.', '.', '.', '.', 'https://maps.app.goo.gl/6RLxxTYpwtUwHtsUA', 'New', 'New', 'Công Ty TNHH Phát Triển Bảo Nam Group', '3603865464', '0964174062', 'Tổ 16, Ấp 5, Xã Sông Trầu, Huyện Trảng Bom, Tỉnh Đồng Nai, Việt Nam', 'email@gmail.com', 'trang-chu-GT8fAW.jpg', 'Công Ty TNHH Phát Triển Bảo Nam Group là công ty hoạt động trong lĩnh vực bán buôn máy móc, thiết bị và nguyên phụ liệu phục vụ cho nghành sản xuất lò nung như: Lò trung tần, lò nung điện, máy bắn sáp, máy tách sáp,...', 'Công Ty TNHH Phát Triển Bảo Nam Group là công ty hoạt động trong lĩnh vực bán buôn máy móc, thiết bị và nguyên phụ liệu phục vụ cho nghành sản xuất lò nung như: Lò trung tần, lò nung điện, máy bắn sáp, máy tách sáp,...', '2022-12-23 23:13:14', '2023-11-26 20:37:05'),
(2, NULL, 'About Us', 'about-us', 'Giới thiệu về chúng tôi dailong.asia', 'about-us-1YUEjZNCVdT4vm7f.png', NULL, 0, '<div class=\"mce-toc\">\r\n<h2>Nội Dung</h2>\r\n<ul>\r\n<li><a href=\"#mcetoc_1hap6f14f15\">Phương Ch&acirc;m Hoạt Động</a></li>\r\n<li><a href=\"#mcetoc_1hap6f14f16\">Sứ mệnh v&agrave; tầm nh&igrave;n</a></li>\r\n<li><a href=\"#mcetoc_1hap6f14f17\">Tại sao lựa chọn t&ecirc;n miền&nbsp;dailong.asia</a></li>\r\n<li><a href=\"#mcetoc_1hap6f14f18\">C&aacute;c dịch vụ ch&uacute;ng t&ocirc;i phục vụ</a></li>\r\n</ul>\r\n</div>\r\n<p><span style=\"font-size: 18px;\"><em>C&ocirc;ng Ty TNHH Curie Việt Nam (Curie Vietnam Ltd.,) h&igrave;nh th&agrave;nh v&agrave; ph&aacute;t triển từ năm 2010, ban đầu l&agrave; cơ sở Photocopy v&agrave; Record, trải qua thời gian ph&aacute;t triển, C&ocirc;ng ty đầu tư nh&acirc;n lực v&agrave; m&aacute;y m&oacute;c đ&aacute;p ứng nhu cầu in ấn của kh&aacute;ch h&agrave;ng, đến nay C&ocirc;ng ty đ&atilde; đầu tư đầy đủ m&aacute;y m&oacute;c cho c&aacute;c lĩnh vực như: in kỹ thuật số (KTS), in Hiflex, in UV, đặc biệt l&agrave; in 3D v&agrave; in Offset, v&agrave; ch&uacute;ng t&ocirc;i c&oacute; thể đ&aacute;p ứng nhanh nhất tất cả nhu cầu của Kh&aacute;ch h&agrave;ng</em></span></p>\r\n<h2 id=\"mcetoc_1hap6f14f15\"><span style=\"font-size: 18px;\"><em><strong>Phương Ch&acirc;m Hoạt Động</strong></em></span></h2>\r\n<p><span style=\"font-size: 18px;\"><em>Với ng&agrave;nh nghề ch&iacute;nh l&agrave; in ấn c&ocirc;ng ty đ&atilde; khẳng định được m&igrave;nh l&agrave; một trong những địa chỉ tin cậy của c&aacute; nh&acirc;n tổ chức khi sử dụng dịch vụ, l&agrave;m h&agrave;i l&ograve;ng mọi đối tượng khi sử dụng dịch vụ, trong tương lai c&ocirc;ng ty ph&aacute;t triển th&ecirc;m nhiều ng&agrave;nh nghề kh&aacute;c nữa như: x&acirc;y dựng, robot c&ocirc;ng nghiệp,...</em></span></p>\r\n<p><span style=\"font-size: 18px;\"><em>Định hướng của c&ocirc;ng ty trong ng&agrave;nh in ấn tại B&igrave;nh Dương: trở th&agrave;nh nh&agrave; cung cấp, c&ocirc;ng ty dịch vụ số một trong lĩnh vực in offset, in thẻ nhựa, in hiflex, decal, led, alu chữ nổi, mica, inox, in b&aacute;o biểu, tờ rơi, h&oacute;a đơn chất lượng cao,... với mong muốn l&agrave;m h&agrave;i long mọi kh&aacute;ch h&agrave;ng với chất lượng v&agrave; gi&aacute; cả ph&ugrave; hợp nhất.</em></span></p>\r\n<h2 id=\"mcetoc_1hap6f14f16\"><span style=\"font-size: 18px;\"><em><strong>Sứ mệnh v&agrave; tầm nh&igrave;n</strong></em></span></h2>\r\n<p><span style=\"font-size: 18px;\"><em>L&agrave; thương hiệu lớn trong ng&agrave;nh in ấn tại B&igrave;nh Dương cũng như khu vực l&acirc;n cận, với đội ngũ nh&acirc;n vi&ecirc;n thiết kế chuy&ecirc;n nghiệp, thời gian phục vụ tăng l&ecirc;n, thời gian phục vụ cho từng kh&aacute;ch h&agrave;ng với tiến độ nhanh nhất, với tầm nh&igrave;n như vậy trong thời gian tới c&ocirc;ng ty sẽ kh&ocirc;ng ngừng n&acirc;ng cao tay nghề đội ngũ thiết kế cũng như thi c&ocirc;ng, hơn thế nữa đầu tư th&ecirc;m thiết bị m&aacute;y m&oacute;c hiện đại, để chất lượng ng&agrave;y c&agrave;ng tăng.</em></span></p>\r\n<h2 id=\"mcetoc_1hap6f14f17\"><span style=\"font-size: 18px;\"><em><strong>Tại sao lựa chọn t&ecirc;n miền&nbsp;<a href=\"https://www.dailong.asia/admin/page/dailong.asia\" target=\"_blank\" rel=\"noopener\">dailong.asia</a></strong></em></span></h2>\r\n<p><span style=\"font-size: 18px;\"><em>Tiền th&acirc;n x&acirc;y dựng ch&uacute;ng t&ocirc;i ban đầu l&agrave; tiệm quảng c&aacute;o nhỏ lẻ với t&ecirc;n tiện l&agrave; Quảng C&aacute;o Đại Long với mong muốn giữ lại thương hiệu cũ d&ugrave; c&ocirc;ng ty đ&atilde; l&agrave; C&Ocirc;NG TY TNHH CURIE VIỆT NAM, với hoạt động chủ yếu về thiết kế quảng c&aacute;o, in ấn số lượng lớn, kh&aacute;ch h&agrave;ng từ c&aacute; nh&acirc;n hộ gia đ&igrave;nh cho tới doanh nghiệp lớn nhỏ tại khu vực B&igrave;nh Dương cũng như c&aacute;c khu vực l&acirc;n cận, vậy n&ecirc;n ch&uacute;ng t&ocirc;i đ&atilde; lấy t&ecirc;n miền&nbsp;<a href=\"https://www.dailong.asia/admin/page/dailong.asia\" target=\"_blank\" rel=\"noopener\">dailong.asia</a>&nbsp;để l&agrave;m thương hiệu giới thiệu sản phẩm của&nbsp;<a title=\"C&Ocirc;NG TY TNHH CURIE VIỆT NAM\" href=\"https://www.dailong.asia/\" target=\"_blank\" rel=\"noopener\">C&Ocirc;NG TY TNHH CURIE VIỆT NAM</a>, với những sản phẩm chủ lực về in ấn v&agrave; quảng c&aacute;o bao gồm</em></span></p>\r\n<h2 id=\"mcetoc_1hap6f14f18\"><span style=\"font-size: 18px;\"><em>C&aacute;c dịch vụ ch&uacute;ng t&ocirc;i phục vụ</em></span></h2>\r\n<p><span style=\"font-size: 18px;\">IN H&Oacute;A ĐƠN B&Aacute;O BIỂU</span></p>\r\n<p><span style=\"font-size: 18px;\">THIẾT KẾ THI C&Ocirc;NG QUẢNG C&Aacute;O</span></p>\r\n<p><span style=\"font-size: 18px;\">THI C&Ocirc;NG CHỮ NỔI ALU</span></p>\r\n<p><span style=\"font-size: 18px;\">THI C&Ocirc;NG MICA - LED - INOX</span></p>\r\n<p><span style=\"font-size: 18px;\">IN OFFSET DECAL</span></p>\r\n<p><span style=\"font-size: 18px;\">IN BĂNG R&Ocirc;N - DECAL SỮA</span></p>\r\n<p><span style=\"font-size: 18px;\">L&Agrave;M DẤU MỘC C&Aacute; NH&Acirc;N C&Ocirc;NG TY</span></p>\r\n<p><span style=\"font-size: 18px;\">IN BẾ TEM NH&Atilde;N OFFSET</span></p>\r\n<p><span style=\"font-size: 18px;\">IN SI&Ecirc;U TỐC KỸ THUẬT SỐ</span></p>\r\n<p><span style=\"font-size: 18px;\">TEM NH&Atilde;N -&nbsp; THẺ - TEM 7 M&Agrave;U - TEM XI BẠC - TEM CUỘN</span></p>\r\n<p><span style=\"font-size: 18px;\">V&Agrave; C&Aacute;C DỊCH VỤ IN TỔNG HỢP KH&Aacute;C</span></p>\r\n<p><span style=\"font-size: 18px;\">......</span></p>', 50, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'decal, PP, bạt Hiflex, dailong, asia, in nhanh chất lượng dailong.asia', 'gioi thieu ve chung toi Dailong VN cung cấp các sản phẩm in offset, in decal chất lượng cao dailong.asia', '2022-12-24 05:06:50', '2023-12-10 02:05:34'),
(3, NULL, 'ád', 'ad', 'aef', 'ad-I6wDjU3ElmPK2oST.jpg', NULL, 0, '<p>&agrave;</p>', 55, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ad-DcCBso4SZIVrPdez.png', 'ádwe', 'á', '2022-12-24 05:55:46', '2023-09-14 04:21:40');

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
-- Cấu trúc bảng cho bảng `post`
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
-- Đang đổ dữ liệu cho bảng `post`
--

INSERT INTO `post` (`id`, `post_cate_id`, `post_cate_name`, `post_cate_slug`, `post_title`, `post_slug`, `post_intro`, `post_image`, `post_status`, `post_featured`, `post_content`, `post_price`, `post_sale`, `post_view`, `post_show`, `post_meta_desc`, `post_meta_key`, `created_at`, `updated_at`, `deleted_at`) VALUES
(47, 14, NULL, 'blog', 'GIẤY DÙNG IN HÓA ĐƠN – BÁO BIỂU', 'giay-dung-in-hoa-don-–-bao-bieu', 'Mọi sản phẩm tới tay người tiêu dùng đều phải có nguyên liệu mới tạo được sản phẩm hoàn chỉnh, với mục đích phục vụ hoạt động kinh doanh sản xuất', 'giay-dung-in-hoa-don-–-bao-bieu-NmDWayK3xqObhzkL.jpg', 'normal', 0, '<div class=\"separator\"><em><strong>Mọi sản phẩm tới tay người ti&ecirc;u d&ugrave;ng đều phải c&oacute; nguy&ecirc;n liệu mới tạo được sản phẩm ho&agrave;n chỉnh, với mục đ&iacute;ch phục vụ hoạt động kinh doanh sản xuất, trong b&agrave;i viết n&agrave;y ch&uacute;ng ta sẽ t&igrave;m hiểu giấy dụng&nbsp;in h&oacute;a đơn &ndash; b&aacute;o biểu, l&agrave; nguy&ecirc;n liệu đầu ti&ecirc;n để phục vụ qu&aacute; tr&igrave;nh tạo n&ecirc;n cuốn&nbsp;h&oacute;a đơn. Ngo&agrave;i giấy th&igrave; th&igrave; c&ograve;n sử dụng c&aacute;c dụng cụ m&aacute;y m&oacute;c kh&aacute;c như: m&aacute;y in Riso MD5, m&aacute;y x&eacute;n, m&aacute;y cấn &hellip;, trong b&agrave;i viết n&agrave;y ch&uacute;ng ta chỉ t&igrave;m hiểu c&aacute;c loại giấy được sử dụng trong qu&aacute; tr&igrave;nh&nbsp;<a href=\"https://dailong.asia/\">in ấn</a>.</strong></em></div>\r\n<div class=\"separator\">&nbsp;</div>\r\n<div class=\"separator\"><em><a href=\"https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjeIB9EqG7ESBAV4Ol0bSpDvGRL0GRWhqI-MDrxs8brusU1mV9Q6LsQOds69hIPjpzOQWYnNFkUeeWKY5AxJV9ZoJxEGDcS55YaxBHKlMxNuA7CRJozYEs5TO3EdlyDJcMKlRGFynEJ-DWCv_KCFp74CpaZOu8Ho_o_dkg2jwR5gQjSRibPTGb5IsWu/s2560/gi%E1%BA%A5y%20for%20in%20h%C3%B3a%20%C4%91%C6%A1n.jpg\"><img src=\"https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjeIB9EqG7ESBAV4Ol0bSpDvGRL0GRWhqI-MDrxs8brusU1mV9Q6LsQOds69hIPjpzOQWYnNFkUeeWKY5AxJV9ZoJxEGDcS55YaxBHKlMxNuA7CRJozYEs5TO3EdlyDJcMKlRGFynEJ-DWCv_KCFp74CpaZOu8Ho_o_dkg2jwR5gQjSRibPTGb5IsWu/s320/gi%E1%BA%A5y%20for%20in%20h%C3%B3a%20%C4%91%C6%A1n.jpg\" width=\"320\" height=\"240\" border=\"0\" data-original-height=\"1920\" data-original-width=\"2560\" /></a></em></div>\r\n<h2 id=\"mcetoc_1ggfmn16714\">Thế n&agrave;o l&agrave; giấy in h&oacute;a đơn</h2>\r\n<p>L&agrave; loại giấy c&oacute; k&iacute;ch thước lớn hơn giấy in A4 th&ocirc;ng thường, định lượng thấp hơn giấy A4 thường d&ugrave;ng 70Gram, mục đ&iacute;ch của việc k&iacute;ch thước lớn hơn giấy in A4 th&ocirc;ng thường để cắt x&eacute;n ra 2 cuốn A5 m&agrave; kh&ocirc;ng bị thiếu k&iacute;ch thước khi cắt đ&ocirc;i tờ giấy A4, bởi v&igrave; th&ocirc;ng thường để c&oacute; 1 cuốn h&oacute;a đơn c&oacute; 4 g&oacute;c phẳng đẹp th&igrave; việc xếp bằng l&agrave; kh&ocirc;ng thể, thay v&agrave;o đ&oacute; người thợ l&agrave;m giấy sẽ cắt từng g&oacute;c cạnh. Với k&iacute;ch thước lớn hơn khổ giấy A4 th&igrave; sau khi cắt đ&ocirc;i để được khổ A5 th&igrave; xung quanh viền vẫn dư thừa 1 khoảng nhỏ để cắt gọt vu&ocirc;ng vức. Vậy n&ecirc;n l&yacute; do của việc d&ugrave;ng giấy c&oacute; k&iacute;ch thước lớn hơn khổ A4.</p>\r\n<p>&nbsp;</p>\r\n<div class=\"separator\"><a href=\"https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgUjlVfOYeK-lfEwmODHCOlYB7V0HIZyBKr6WuIUkgab4DYIyuPjxUUPS91pRBFSrPMF43dX41LC1lbM0J-z--Q5UQcUYoGJW4rtgpfydqDODcOLV71VkYcO7Ygg1fBFPpyOKaMrazADTBd-vOcgXzgvxehOdjjLvWsimyFJwQ13nkzL9wAvG_7Wysa/s2560/H%C3%B3a%20%C4%91%C6%A1n.jpg\"><img src=\"https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgUjlVfOYeK-lfEwmODHCOlYB7V0HIZyBKr6WuIUkgab4DYIyuPjxUUPS91pRBFSrPMF43dX41LC1lbM0J-z--Q5UQcUYoGJW4rtgpfydqDODcOLV71VkYcO7Ygg1fBFPpyOKaMrazADTBd-vOcgXzgvxehOdjjLvWsimyFJwQ13nkzL9wAvG_7Wysa/s320/H%C3%B3a%20%C4%91%C6%A1n.jpg\" width=\"320\" height=\"240\" border=\"0\" data-original-height=\"1920\" data-original-width=\"2560\" /></a></div>\r\n<h2 id=\"mcetoc_1ggfmn16715\">Giấy Ford</h2>\r\n<p>L&agrave; loại giấy d&ugrave;ng phổ biến nhất bởi v&igrave; bất cứ cuốn h&oacute;a đơn &ndash; b&aacute;o biểu n&agrave;o đều sử dụng, giấy n&agrave;y với mục đ&iacute;ch ghi trực tiếp l&ecirc;n đối với h&oacute;a đơn 1 li&ecirc;n, v&agrave; l&agrave; li&ecirc;n cuối c&ugrave;ng đối với h&oacute;a đơn từ 2 li&ecirc;n trở l&ecirc;n.</p>\r\n<p>K&iacute;ch thước: lớn hơn khổ giấy A4, định lượng thấp hơn 70 gram.</p>\r\n<p>&nbsp;</p>\r\n<div class=\"separator\"><a href=\"https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjZmyokviZTdtkiUHsiSu6RSxKdwIS7Ch5OlJSEYMkWs4sTEYAC29LG4Nw0zDsLPaf26tr7GxyQLe290FVAuW0Sf_RkVQPyEtCf6YwqWDMVVF70sgfN7UmNA8lH7TwPubp09ra_pNbG3aUa2IKoeObrJQzdAxcpPTy5ucROvroRpuu4JlO-BvNKhMfe/s2560/gi%E1%BA%A5y%20for%20in%20h%C3%B3a%20%C4%91%C6%A1n.jpg\"><img src=\"https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjZmyokviZTdtkiUHsiSu6RSxKdwIS7Ch5OlJSEYMkWs4sTEYAC29LG4Nw0zDsLPaf26tr7GxyQLe290FVAuW0Sf_RkVQPyEtCf6YwqWDMVVF70sgfN7UmNA8lH7TwPubp09ra_pNbG3aUa2IKoeObrJQzdAxcpPTy5ucROvroRpuu4JlO-BvNKhMfe/s320/gi%E1%BA%A5y%20for%20in%20h%C3%B3a%20%C4%91%C6%A1n.jpg\" width=\"320\" height=\"240\" border=\"0\" data-original-height=\"1920\" data-original-width=\"2560\" /></a></div>\r\n<h2 id=\"mcetoc_1ggfmn16716\">Giấy Carbonless</h2>\r\n<p>L&agrave; giấy được sử dụng cho h&oacute;a đơn từ 2 li&ecirc;n trở l&ecirc;n, với h&oacute;a đơn 2 li&ecirc;n th&igrave; sử dụng giấy carbonless m&agrave;u v&agrave;ng, nhiều hơn 2 li&ecirc;n th&igrave; d&ugrave;ng th&ecirc;m giấy m&agrave;u v&agrave;ng, m&agrave;u trắng. Với chức năng như giấy than copy nội dung từ bản tr&ecirc;n xuống bản dưới c&ugrave;ng l&agrave; giấy ford</p>\r\n<p>&nbsp;</p>\r\n<div class=\"separator\"><a href=\"https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjlaP65H7zaoE452eBZktlaj2K9s_Xgnt1L1hCAKvi7p60DeHX8gyN7nAg7ioPOOjprjIx74Rgf7ijS8aoxmbi8PHBDcDVwWmZlLjd6BFPOmRjHj6lUg08IuP1HBan1huI6krPGEvotQ7hdkGZ0jATWdJ7f4uw0kmHMsGNtbb1m5VHvdpKPSS5yFa5L/s2048/Giay%20in%20h%C3%B3a%20%C4%91%C6%A1n%20carbonless.jpg\"><img src=\"https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjlaP65H7zaoE452eBZktlaj2K9s_Xgnt1L1hCAKvi7p60DeHX8gyN7nAg7ioPOOjprjIx74Rgf7ijS8aoxmbi8PHBDcDVwWmZlLjd6BFPOmRjHj6lUg08IuP1HBan1huI6krPGEvotQ7hdkGZ0jATWdJ7f4uw0kmHMsGNtbb1m5VHvdpKPSS5yFa5L/s320/Giay%20in%20h%C3%B3a%20%C4%91%C6%A1n%20carbonless.jpg\" width=\"320\" height=\"240\" border=\"0\" data-original-height=\"1536\" data-original-width=\"2048\" /></a></div>\r\n<h2 id=\"mcetoc_1ggfmn16717\">Giấy b&igrave;a</h2>\r\n<p>Chỉ c&oacute; chức năng l&agrave;m b&igrave;a cuốn h&oacute;a đơn, ghi th&ocirc;ng tin cuốn h&oacute;a đơn g&igrave;, như: h&oacute;a đơn b&aacute;n lẻ, phiếu xuất kho, sổ nhập xuất, b&aacute;o biểu h&agrave;ng h&oacute;a,&hellip;</p>\r\n<p><em>M&agrave;u sắc:</em>&nbsp;tại C&ocirc;ng Ty Curie Việt Nam sử dụng m&agrave;u xanh da trời, m&agrave;u hồng nh&aacute;m.</p>\r\n<p>Như vậy qua b&agrave;i viết n&agrave;y c&aacute;c bạn đ&atilde; c&oacute; ch&uacute;t th&ocirc;ng tin về giấy in trong lĩnh vực in H&oacute;a Đơn &ndash; B&aacute;o Biểu</p>\r\n<p><strong>Li&ecirc;n hệ in h&oacute;a đơn &ndash; b&aacute;o biểu</strong></p>\r\n<p><em><strong>C&Ocirc;NG TY TNHH CURIE VIỆT NAM</strong></em></p>\r\n<p><em><strong>ĐỊA CHỈ: KHU PHỐ AN H&Ograve;A, PHƯỜNG H&Ograve;A LỢI, BẾN C&Aacute;T, B&Igrave;NH DƯƠNG</strong></em></p>\r\n<p><em><strong>HOTLINE: 0974 953 600 &ndash; Mr Ph&uacute;</strong></em></p>\r\n<p><em><strong>Email: phuth.me@gmail.com</strong></em></p>', NULL, NULL, 20, '1', 'Mọi sản phẩm tới tay người tiêu dùng đều phải có nguyên liệu mới tạo được sản phẩm hoàn chỉnh, với mục đích phục vụ hoạt động kinh doanh sản xuất', 'Mọi sản phẩm tới tay người tiêu dùng đều phải có nguyên liệu mới tạo được sản phẩm hoàn chỉnh, với mục đích phục vụ hoạt động kinh doanh sản xuất', '2023-09-13 03:02:31', '2023-12-10 02:33:07', NULL),
(48, 8, 'In Nhanh Hóa Đơn', 'in-nhanh-hoa-don', 'Hóa đơn báo biểu', 'hoa-don-bao-bieu', '- 50 Cặp\r\n- 100 tờ\r\n- Số lượng order: từ 10 cuốn', 'hoa-don-bao-bieu-XfaE7PoVkGAsMdwI.jpg', 'san-pham', 0, '<p>Cam kết cung cấp số lượng lớn v&agrave; số lượng từ 10 cuốn với thời gian nhanh nhất</p>', 21000, 0, 16, '1', 'hóa đơn viết tay, hóa đơn bán lẻ cung cấp sản phẩm lớn cho khách hàng cá nhân hoặc doanh nghiệp', 'hóa đơn viết tay, hóa đơn bán lẻ', '2023-09-14 03:18:49', '2023-09-22 04:01:38', NULL),
(51, 8, 'In Nhanh Hóa Đơn', 'in-nhanh-hoa-don', 'QUY TRÌNH HOÀN THIỆN HÓA ĐƠN - BÁO BIỂU 1 LIÊN', 'quy-trinh-hoan-thien-hoa-don---bao-bieu-1-lien', 'Quy trình hoàn thiện hóa đơn 1 liên là một quy trình khép kín từ việc thiết kế, điều chỉnh, hoàn thiện mẫu thiết kế với khách hàng cho tới việc tạo ra cuốn...', 'quy-trinh-hoan-thien-hoa-don---bao-bieu-1-lien-pAhwjZrgEuvWXRJO.jpg', 'normal', 0, '<div class=\"mce-toc\">\r\n<h2>Nội dung ch&iacute;nh</h2>\r\n<ul>\r\n<li><a href=\"#mcetoc_1han30m851a\">Mục đ&iacute;ch</a></li>\r\n<li><a href=\"#mcetoc_1han30m851b\">Chi tiết thiết kế</a></li>\r\n<li><a href=\"#mcetoc_1han30m851c\">Quy c&aacute;ch sản phẩm</a></li>\r\n<li><a href=\"#mcetoc_1han30m851d\">Ưu Nhược điểm</a></li>\r\n</ul>\r\n</div>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-size: 24px;\"><em>Quy tr&igrave;nh ho&agrave;n thiện h&oacute;a đơn 1 li&ecirc;n l&agrave; một quy tr&igrave;nh kh&eacute;p k&iacute;n từ việc thiết kế, điều chỉnh, ho&agrave;n thiện mẫu thiết kế với kh&aacute;ch h&agrave;ng cho tới việc tạo ra cuốn h&oacute;a đơn ho&agrave;n chỉnh. Ch&uacute;ng t&ocirc;i in h&oacute;a đơn b&aacute;n lẻ số lượng &iacute;t 1 li&ecirc;n, 2 li&ecirc;n, v&agrave; 3 li&ecirc;n, l&agrave; qu&aacute; tr&igrave;nh từ c&ocirc;ng t&aacute;c thiết kế cho tới ho&agrave;n thiện sản phẩm in h&oacute;a đơn, offset. Nhằm đ&aacute;p ứng mọi nhu cầu kh&aacute;ch h&agrave;ng từ số lượng 10 cuốn cho tới h&agrave;ng trăm cuốn h&oacute;a đơn.</em></span></p>\r\n<h2 id=\"mcetoc_1han30m851a\"><span style=\"text-decoration: underline; font-size: 24px;\"><span style=\"color: #000000; text-decoration: underline;\"><strong>Mục đ&iacute;ch</strong></span></span></h2>\r\n<p><span style=\"font-size: 24px;\">H&oacute;a Đơn &ndash; B&aacute;o Biểu 1 Li&ecirc;n được sử dụng nhiều cho c&aacute;c đại l&yacute; với mục đ&iacute;ch k&ecirc; khai h&agrave;ng h&oacute;a, sản phẩm v&agrave;o kho, b&aacute;n h&agrave;ng cho kh&aacute;ch h&agrave;ng kh&ocirc;ng c&oacute; mục đ&iacute;ch lưu trữ, d&ugrave;ng cho c&aacute;c nh&agrave; h&agrave;ng để order m&oacute;n ăn, k&ecirc; khai sản phẩm thanh to&aacute;n. Sản phẩm n&agrave;y cũng được một v&agrave;i C&ocirc;ng ty, Doanh nghiệp sử dụng cho nh&acirc;n vi&ecirc;n, c&ocirc;ng nh&acirc;n khi c&oacute; c&ocirc;ng việc như xin tạm thanh to&aacute;n, ứng lương, giấy ra ngo&agrave;i khi c&oacute; việc cần hoặc v&agrave;o những mục đ&iacute;ch c&oacute; hoặc kh&ocirc;ng c&oacute; t&iacute;nh chất đối chiếu về sau.</span></p>\r\n<p><span style=\"font-size: 24px;\"><em><img title=\"H&oacute;a đơn 1 li&ecirc;n\" src=\"https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEihqpYju2aTeec4g2vUV9UOTPKFAaTJBYsPv6swbBmrloIJ5OztJPr_M6LDMEB1iBT-uHK4HTiRnxtplNontuQ6HtOq6eKuR57xCbEEyTrlINl8v16AGrn-VuRU4JVaYcFeVN6LTVIzDWQJX-ZmJS2vWJxlYU4rdKmXX7gdHCamPRMpe6mg3uUa39SL/s2560/H%C3%B3a%20%C4%91%C6%A1n.jpg\" width=\"100%\" height=\"100%\" /></em></span></p>\r\n<h2 id=\"mcetoc_1han30m851b\"><span style=\"text-decoration: underline; font-size: 24px;\"><strong>Chi tiết thiết kế</strong></span></h2>\r\n<p><span style=\"font-size: 24px;\">Với những sản phẩm in h&oacute;a đơn b&aacute;o biểu th&igrave; thiết kế kh&aacute; đơn giản, ch&uacute;ng t&ocirc;i sử dụng phần mềm chuy&ecirc;n dụng l&agrave; Corel để tạo n&ecirc;n bản thiết kế gửi cho kh&aacute;ch h&agrave;ng, th&ocirc;ng thường sẽ c&oacute; những nội dung m&agrave; n&oacute; phụ thuộc v&agrave;o nhu cầu kh&aacute;ch h&agrave;ng nhưng th&ocirc;ng thường với đại l&yacute; th&igrave; sẽ l&agrave;: t&ecirc;n đại l&yacute;, địa chỉ, số điện thoại, logo (nếu c&oacute;), t&ecirc;n sản phẩm (quy c&aacute;ch), đơn vị t&iacute;nh, số lượng, đơn gi&aacute; (nếu c&oacute;), tổng (th&agrave;nh tiền), phần k&yacute; x&aacute;c nhận, &hellip; T&ugrave;y thuộc v&agrave; đặc th&ugrave; m&agrave; số lượng nội dung c&oacute; thể &iacute;t hoặc nhiều, v&agrave; ch&uacute;ng t&ocirc;i sẽ hỗ trợ 100% chi ph&iacute; thiết kế cũng như thay đổi nội dung cũng như h&igrave;nh thức cho kh&aacute;ch h&agrave;ng, để kh&aacute;ch h&agrave;ng h&agrave;i l&ograve;ng với bản thiết kế cuối c&ugrave;ng.</span></p>\r\n<p><span style=\"font-size: 24px;\"><em>Với c&aacute;c doanh nghiệp, c&ocirc;ng ty nội dung sẽ c&oacute; th&ecirc;m ng&ocirc;n ngữ kh&aacute;c ngo&agrave;i tiếng Việt (d&ugrave;ng cho người Việt), ng&ocirc;n ngữ c&ograve;n lại cho chủ Doanh nghiệp, t&ugrave;y v&agrave;o y&ecirc;u cầu từng bộ phận m&agrave; sẽ c&oacute; những nội dung kh&aacute;c nhau đ&aacute;p ứng nhu cầu thống k&ecirc; của bộ phận đ&oacute;.</em></span></p>\r\n<h2 id=\"mcetoc_1han30m851c\"><span style=\"text-decoration: underline; font-size: 24px;\"><strong>Quy c&aacute;ch sản phẩm</strong></span></h2>\r\n<p><span style=\"font-size: 24px;\">Chủ yếu l&agrave; k&iacute;ch thước khổ in l&agrave; A5, một v&agrave;i trường hợp l&agrave; A6 để tiết kiệm chi ph&iacute; cũng như nội dung &iacute;t. Sản phẩm sẽ được đ&oacute;ng g&aacute;y hoặc vết keo v&agrave; được cấn răng cưa phần g&aacute;y dễ d&agrave;ng cho việc x&eacute; bi&ecirc;n lai, c&oacute; một v&agrave;i trường hợp 1 li&ecirc;n như 2 nội dung tr&ecirc;n 1 li&ecirc;n với mục đ&iacute;ch giữ li&ecirc;n 2, li&ecirc;n 1 kh&aacute;ch h&agrave;ng giữ, trường hợp n&agrave;y sẽ cấn răng cưa giữa tờ giấy.</span></p>\r\n<h2 id=\"mcetoc_1han30m851d\"><span style=\"text-decoration: underline; font-size: 24px;\">Ưu Nhược điểm</span></h2>\r\n<p><span style=\"font-size: 24px;\">- Ưu điểm của h&oacute;a đơn n&agrave;y l&agrave; số lượng lớn v&igrave; chỉ d&ugrave;ng duy nhất 1 li&ecirc;n</span></p>\r\n<p><span style=\"font-size: 24px;\">- Thời gian sử dụng nhiều v&igrave; chỉ d&ugrave;ng 1 li&ecirc;n cho 1 lần ghi ch&eacute;p.</span></p>\r\n<p><span style=\"font-size: 24px;\">- Chi ph&iacute; rẻ so với thời gian sử dụng</span></p>\r\n<p><span style=\"font-size: 24px;\">Nhược điểm chỉ ghi ch&eacute;p cho c&aacute; nh&acirc;n sử dụng kh&ocirc;ng c&oacute; t&iacute;nh đối chứng hoặc bản sao gửi lại cho kh&aacute;ch h&agrave;ng.</span></p>\r\n<p><span style=\"font-size: 24px;\">Li&ecirc;n hệ để đặt h&oacute;a đơn 1 li&ecirc;n hoặc nhiều li&ecirc;n</span></p>\r\n<p><span style=\"font-size: 24px;\"><strong>Li&ecirc;n hệ in h&oacute;a đơn &ndash; b&aacute;o biểu</strong></span></p>\r\n<p><span style=\"font-size: 24px;\"><em><strong>C&Ocirc;NG TY TNHH CURIE VIỆT NAM</strong></em></span></p>\r\n<p><span style=\"font-size: 24px;\"><em><strong>ĐỊA CHỈ: KHU PHỐ AN H&Ograve;A, PHƯỜNG H&Ograve;A LỢI, BẾN C&Aacute;T, B&Igrave;NH DƯƠNG</strong></em></span></p>\r\n<p><span style=\"font-size: 24px;\"><em><strong>HOTLINE: 0974 953 600 &ndash; Mr Ph&uacute;</strong></em></span></p>\r\n<p><span style=\"font-size: 24px;\"><em><strong>Email: phuth.me@gmail.com</strong></em></span></p>', 0, 0, 4, '1', 'Quy trình hoàn thiện hóa đơn 1 liên là một quy trình khép kín từ việc thiết kế, điều chỉnh', 'Quy trình hoàn thiện hóa đơn 1 liên là một quy trình khép kín từ việc thiết kế, điều chỉnh', '2023-09-19 09:06:17', '2023-09-21 01:27:08', NULL),
(52, 18, 'In Offset', 'in-offset', 'IN NAME CARD - DANH THIẾP', 'in-name-card---danh-thiep', 'Name card - Danh Thiếp có vai trò rất quan trọng dùng để giới thiệu bản thân, công ty, dịch vụ kinh doanh. Nó thể hiện sự chuyên nghiệp, tinh tế và là tác nhân ', 'in-name-card---danh-thiep-kd4jANzO1tVHxvrB.jpg', 'normal', 1, '<p><em>Name card - Danh Thiếp c&oacute; vai tr&ograve; rất quan trọng d&ugrave;ng để giới thiệu bản th&acirc;n, c&ocirc;ng ty, dịch vụ kinh doanh. N&oacute; thể hiện sự chuy&ecirc;n nghiệp, tinh tế v&agrave; l&agrave; t&aacute;c nh&acirc;n g&acirc;y ấn tượng ban đầu với kh&aacute;ch h&agrave;ng, đối t&aacute;c&hellip;</em></p>\r\n<p>Nếu danh thiếp của bạn được l&agrave;m từ loại giấy cao cấp v&agrave; c&oacute; thiết kế hấp dẫn, bắt mắt, dễ nh&igrave;n, sẽ để lại ấn tượng đối với người nhận n&oacute;. Đồng thời h&igrave;nh ảnh th&ocirc;ng tin của bạn cũng như c&ocirc;ng ty c&oacute; thể dễ d&agrave;ng được quảng b&aacute; rộng khắp hơn. Bện cạnh đ&oacute; sẽ l&agrave;m cho người nhận n&oacute; cảm thấy được tr&acirc;n trọng v&agrave; giữ n&oacute; để sử dụng trong tương lai.</p>\r\n<p>Qu&yacute; kh&aacute;ch muốn name card, danh thiếp của m&igrave;nh kh&aacute;c lạ, h&igrave;nh dạng kh&aacute;c để g&acirc;y thiện cảm với kh&aacute;ch h&agrave;ng hoặc sẽ l&agrave; một c&aacute;i g&igrave; đ&oacute; khiến đối phương phải &nbsp;lưu giữ, điều ấy kh&ocirc;ng c&oacute; g&igrave; kh&oacute; khăn v&igrave; với c&ocirc;ng nghệ khu&ocirc;n bế, c&aacute;c h&igrave;nh dạng kh&aacute;c lạ đều c&oacute; thể l&agrave;m ra được, bo g&oacute;c, bo 2 g&oacute;c, h&igrave;nh chiếc l&aacute;...</p>\r\n<p>In danh thiếp cao cấp đ&ograve;i hỏi khắt khe về từ kh&acirc;u thiết kế, in ấn cũng như th&agrave;nh phẩm sau in. Nếu danh thiếp của bạn được l&agrave;m từ loại giấy cao cấp v&agrave; c&oacute; thiết kế hấp dẫn, bắt mắt, dễ nh&igrave;n, sẽ để lại ấn tượng đối với người nhận n&oacute;.</p>\r\n<p>Quy tr&igrave;nh in danh thiếp cao cấp chủ yếu sử dụng phương ph&aacute;p v&agrave; c&ocirc;ng nghệ in lưới thủ c&ocirc;ng, in phun kỹ thuật số hay in offset. Mỗi một phương ph&aacute;p in sẽ c&oacute; một đặc điểm về kỹ thuật ri&ecirc;ng v&agrave; gi&aacute; cả kh&aacute;c nhau.<br />Kh&ocirc;ng giới hạn về tone m&agrave;u cũng như k&iacute;ch thước, phần tử in được thể hiện một c&aacute;ch r&otilde; r&agrave;ng sắc n&eacute;t, độ s&acirc;u v&agrave; trung thực của h&igrave;nh ảnh cao, chất liệu v&agrave; kiểu c&aacute;ch danh thiếp của bạn c&oacute; thể được thực hiện một c&aacute;ch đa dạng v&agrave; c&aacute; nh&acirc;n h&oacute;a cao&hellip; do vậy in danh thiếp bằng hai phương ph&aacute;p tr&ecirc;n được rất nhiều c&aacute;c tổ chức doanh nghiệp v&agrave; c&aacute; nh&acirc;n lựa chọn ưu ti&ecirc;n sử dụng h&agrave;ng đầu cho nhu cầu về in namecard chất lượng cao của m&igrave;nh.<br />C&ocirc;ng đoạn gia c&ocirc;ng ho&agrave;n thiện sau in bao gồm bế cắt, c&aacute;n m&agrave;ng nhiệt tr&ecirc;n bản in sẽ gi&uacute;p tấm danh thiếp của bạn cứng c&aacute;p, bền m&agrave;u, kh&ocirc;ng thấm nước.</p>', 0, 0, 1, '1', 'Name card - Danh Thiếp có vai trò rất quan trọng dùng để giới thiệu bản thân, công ty, dịch vụ kinh doanh. Nó thể hiện sự chuyên nghiệp, tinh tế và là tác nhân ', 'Name card - Danh Thiếp có vai trò rất quan trọng dùng để giới thiệu bản thân, công ty, dịch vụ kinh doanh. Nó thể hiện sự chuyên nghiệp, tinh tế và là tác nhân ', '2023-09-20 03:47:59', '2023-09-20 05:03:29', NULL),
(53, 8, 'In Nhanh Hóa Đơn', 'in-nhanh-hoa-don', 'DỊCH VỤ IN HÓA ĐƠN BÁN LẺ', 'dich-vu-in-hoa-don-ban-le', 'Nhu cầu của bạn cần in hóa đơn bán lẻ, phiếu chi, phiếu thu, biên lai, giấy biên nhận, giấy tờ xuất hàng, báo biểu, sổ liên hệ, công văn', 'dich-vu-in-hoa-don-ban-le-tCoHxnIT8i0BOyVr.jpg', 'normal', 0, '<div class=\"mce-toc\">\r\n<h2>Nội dung</h2>\r\n<ul>\r\n<li><a href=\"#mcetoc_1hap46nkr18\">Dịch vụ ch&uacute;ng t&ocirc;i cung cấp cho c&aacute;c kh&aacute;ch h&agrave;ng như:</a></li>\r\n<li><a href=\"#mcetoc_1hap46nkr19\">C&aacute;c loại h&oacute;a đơn, b&aacute;o biểu th&ocirc;ng thường</a></li>\r\n<li><a href=\"#mcetoc_1hap46nkr1a\">H&oacute;a đơn, b&aacute;o biểu 1 li&ecirc;n</a></li>\r\n<li><a href=\"#mcetoc_1hap46nkr1b\">H&oacute;a đơn b&aacute;n lẻ 2 li&ecirc;n</a></li>\r\n<li><a href=\"#mcetoc_1hap46nkr1c\">H&oacute;a đơn b&aacute;n lẻ 3, 4 li&ecirc;n</a></li>\r\n</ul>\r\n</div>\r\n<p><span style=\"font-size: 18px;\"><em><strong>Nhu cầu của bạn cần in h&oacute;a đơn b&aacute;n lẻ, phiếu chi, phiếu thu, bi&ecirc;n lai, giấy bi&ecirc;n nhận, giấy tờ xuất h&agrave;ng, b&aacute;o biểu, sổ li&ecirc;n hệ, c&ocirc;ng văn,... v&agrave; nhiều loại giấy tờ kh&aacute;c li&ecirc;n quan tới in ấn. Ch&uacute;ng t&ocirc;i, dịch vụ in của C&ocirc;ng Ty TNHH Curie Việt Nam đ&aacute;p ứng mọi nhu cầu đặt in h&oacute;a đơn, b&aacute;o biểu carbonless cho c&aacute; nh&acirc;n, c&ocirc;ng ty, doanh nghiệp.</strong></em></span></p>\r\n<p><span style=\"font-size: 18px;\"><em>H&oacute;a đơn 1 li&ecirc;n, 2 li&ecirc;n, 3 li&ecirc;n hoặc nhiều hơn nữa,... với chi ph&iacute; thiết kế 0 đồng, b&aacute;o gi&aacute; trực tiếp, nhận order v&agrave; giao h&agrave;ng trong v&ograve;ng 3 ng&agrave;y với số lượng dưới 100 cuốn, chủng loại đa dạng, từ A4 cho tới A6, theo y&ecirc;u cầu kh&aacute;ch h&agrave;ng, với những m&agrave;u sắc phổ biến đỏ v&agrave; đen, chất lượng giấy đảm bảo, sản phẩm bền đẹp, thiết kế chuy&ecirc;n nghiệp, mức gi&aacute; hợp l&yacute; hay l&agrave; mức gi&aacute; tốt nhất tại xưởng, hỗ trợ kh&aacute;ch h&agrave;ng trong qu&aacute; tr&igrave;nh giao h&agrave;ng, hỗ trợ thiết kế, gửi mẫu duyệt qua zalo cũng như c&aacute;c phương tiện kh&aacute;c gi&uacute;p l&agrave;m h&agrave;i l&ograve;ng kh&aacute;ch h&agrave;ng.</em></span></p>\r\n<h2 id=\"mcetoc_1hap46nkr18\"><span style=\"font-size: 18px;\">Dịch vụ ch&uacute;ng t&ocirc;i cung cấp cho c&aacute;c kh&aacute;ch h&agrave;ng như:</span></h2>\r\n<p><span style=\"font-size: 18px;\">Shop thời trang</span></p>\r\n<p><span style=\"font-size: 18px;\">C&ocirc;ng ty may mặc</span></p>\r\n<p><span style=\"font-size: 18px;\">Nh&agrave; h&agrave;ng, đại l&yacute; bu&ocirc;n b&aacute;n</span></p>\r\n<p><span style=\"font-size: 18px;\">Qu&aacute;n nhậu, bia hơi</span></p>\r\n<p><span style=\"font-size: 18px;\">C&aacute;c doanh nghiệp tại khu c&ocirc;ng nghiệp</span></p>\r\n<p><span style=\"font-size: 18px;\">....</span></p>\r\n<h2 id=\"mcetoc_1hap46nkr19\"><span style=\"font-size: 18px;\">C&aacute;c loại h&oacute;a đơn, b&aacute;o biểu th&ocirc;ng thường</span></h2>\r\n<h2 id=\"mcetoc_1hap46nkr1a\"><span style=\"font-size: 18px;\">H&oacute;a đơn, b&aacute;o biểu 1 li&ecirc;n</span></h2>\r\n<p><span style=\"font-size: 18px;\">Mục đ&iacute;ch: th&ocirc;ng thường loại n&agrave;y chỉ mang t&iacute;nh chất liệt k&ecirc; sản phẩm, người d&ugrave;ng l&agrave; chủ qu&aacute;n, chủ đại l&yacute;, mục đ&iacute;ch liệt k&ecirc; những sản phẩm b&aacute;n cho kh&aacute;ch h&agrave;ng, kh&ocirc;ng lưu lại để đối chứng.</span></p>\r\n<p><span style=\"font-size: 18px;\">K&iacute;ch thước: chủ yếu l&agrave; mẫu A5 dọc hoặc ngang t&ugrave;y theo mục đ&iacute;ch v&agrave; số lượng liệt k&ecirc; sản phẩm.</span></p>\r\n<p><span style=\"font-size: 18px;\">Quy c&aacute;ch sản phẩm: 100 tờ/cuốn, đ&oacute;ng g&aacute;y, cấn răng cưa dễ d&agrave;ng t&aacute;ch bỏ</span></p>\r\n<p><span style=\"font-size: 18px;\">Số lượng in tối thiểu: 10 cuốn</span></p>\r\n<h2 id=\"mcetoc_1hap46nkr1b\"><span style=\"font-size: 18px;\">H&oacute;a đơn b&aacute;n lẻ 2 li&ecirc;n</span></h2>\r\n<p><span style=\"font-size: 18px;\">Mục đ&iacute;ch: D&ugrave;ng l&agrave;m h&oacute;a đơn, b&aacute;o biểu liệt k&ecirc; sản phẩm bu&ocirc;n b&aacute;n hoặc quy c&aacute;ch h&agrave;ng h&oacute;a l&uacute;c xuất nhập kho. V&agrave; hơn nữa l&agrave; để đối chiếu sau khi b&agrave;n giao h&agrave;ng h&oacute;a, cũng như l&agrave;m căn cứ số lượng h&agrave;ng đ&atilde; giao, thời gian bảo h&agrave;nh cũng như check so với số lượng thực tế giao.</span><br /><span style=\"font-size: 18px;\">Đối tượng sử dụng: C&ocirc;ng ty, Doanh nghiệp, đại l&yacute;, cửa h&agrave;ng c&oacute; tỷ lệ xuất h&agrave;ng ra v&agrave;o cao, hoặc kh&aacute;ch h&agrave;ng mua b&aacute;n nhiều.</span><br /><span style=\"font-size: 18px;\">Loại giấy: Giấy carbonless.</span></p>\r\n<p><span style=\"font-size: 18px;\">K&iacute;ch thước - quy c&aacute;ch: Khổ in A5, đ&oacute;ng g&oacute;i th&agrave;nh cuốn 100 tờ, c&oacute; đ&oacute;ng g&aacute;y v&agrave; cấn răng cưa dễ sử dụng.</span></p>\r\n<h2 id=\"mcetoc_1hap46nkr1c\"><span id=\"c_Hoa_don_ban_le_3_lien\" class=\"ez-toc-section\" style=\"font-size: 18px;\">H&oacute;a đơn b&aacute;n lẻ 3, 4 li&ecirc;n</span></h2>\r\n<p><span style=\"font-size: 18px;\">Mục đ&iacute;ch: C&aacute;c c&ocirc;ng ty, doanh nghiệp, người b&aacute;n h&agrave;ng c&oacute; t&iacute;nh chất đối chiếu 3 b&ecirc;n để tr&aacute;nh gian dối sau khi giao h&agrave;ng. Nh&igrave;n chung n&oacute; tương tự như giấy 2 li&ecirc;n nhưng để mục đ&iacute;ch lưu kho cũng như giao cho người chuyển h&agrave;ng để đối chiếu kh&aacute;ch h&agrave;ng cũng như đối chiếu lại với c&ocirc;ng ty xuất h&agrave;ng.</span><br /><span style=\"font-size: 18px;\">Đối tương: Những doanh nghiệp c&oacute; nhiều h&agrave;ng xuất v&agrave; nhập, hoặc phụ thuộc v&agrave;o mục đ&iacute;ch kh&aacute;ch h&agrave;ng&hellip;.</span><br /><span style=\"font-size: 18px;\">Loại giấy: Giấy c&aacute;c bon (c&oacute; 3 li&ecirc;n viết kh&ocirc;ng cần k&ecirc; giấy than)</span><br /><span style=\"font-size: 18px;\">K&iacute;ch thước: C&oacute; 2 loại k&iacute;ch thước th&ocirc;ng dụng A5, A4. Một v&agrave;i trường hợp l&agrave; A6.</span><br /><span style=\"font-size: 18px;\">Quy c&aacute;ch: Đ&oacute;ng quyển 150tờ/quyển (50 li&ecirc;n); Cũng giống như loại 2 li&ecirc;n c&oacute; r&atilde;nh x&eacute; răng cưa; đ&oacute;ng số nhảy.</span></p>', 0, 0, 0, '1', 'Nhu cầu của bạn cần in hóa đơn bán lẻ, phiếu chi, phiếu thu, biên lai, giấy biên nhận, giấy tờ xuất hàng, báo biểu, sổ liên hệ, công văn', 'Nhu cầu của bạn cần in hóa đơn bán lẻ, phiếu chi, phiếu thu, biên lai, giấy biên nhận, giấy tờ xuất hàng, báo biểu, sổ liên hệ, công văn', '2023-09-20 04:04:58', '2023-09-20 04:04:58', NULL),
(54, 27, 'Bạt Hiflex - Decal', 'bat-hiflex---decal', 'IN BĂNG RÔN - BẢNG HIỆU', 'in-bang-ron---bang-hieu', 'Hiện nay trên thị trường quảng cáo, các sản phẩm xuất xứ từ in Hiflex đang dần chiếm đa số, chỉ cần dạo qua bất kỳ con đường nào có hoạt động kinh doanh diễn ra', 'in-bang-ron---bang-hieu-W5ydhopj9s3AlKuU.jpg', 'normal', 0, '<div class=\"mce-toc\">\r\n<h2><span style=\"font-family: arial, helvetica, sans-serif;\">Nội dung</span></h2>\r\n<ul>\r\n<li><a href=\"#mcetoc_1hap4e495i\">Băng r&ocirc;n được sử dụng chủ yếu tại c&aacute;c cơ sở quảng c&aacute;o.</a></li>\r\n<li><a href=\"#mcetoc_1hap4e495j\">Ưu điểm của băng r&ocirc;n bạt Hiflex</a></li>\r\n<li><a href=\"#mcetoc_1hap4e495k\">In băng r&ocirc;n (bạt) hiflex được sử dụng cho những đối tượng n&agrave;o?</a></li>\r\n</ul>\r\n</div>\r\n<p><span style=\"font-size: 18px; font-family: arial, helvetica, sans-serif;\"><em>Hiện nay tr&ecirc;n thị trường quảng c&aacute;o, c&aacute;c sản phẩm xuất xứ từ&nbsp;<strong>in Hiflex</strong>&nbsp;đang dần chiếm đa số, chỉ cần dạo qua bất kỳ con đường n&agrave;o c&oacute; hoạt động kinh doanh diễn ra l&agrave; bạn đ&atilde; thấy rất nhiều bảng hiệu, Banner hay bảng hiệu hộp đ&egrave;n được l&agrave;m từ chất liệu hiflex n&agrave;y.</em></span></p>\r\n<p><span style=\"font-size: 18px; font-family: arial, helvetica, sans-serif;\">Với ưu điểm nổi trội nhất l&agrave; độ bền, dẻo dai, chịu được thời tiết mưa nắng thất thường như ở Việt Nam c&ugrave;ng chất lượng in đảm bảo y&ecirc;u cầu của hoạt động quảng c&aacute;o, do đ&oacute;, kh&ocirc;ng lạ g&igrave; khi đ&acirc;y l&agrave; chất liệu được lựa chọn cho quảng c&aacute;o cũng như thi c&ocirc;ng hộp đ&egrave;n.</span></p>\r\n<h2 id=\"mcetoc_1hap4e495i\"><span style=\"font-size: 18px; font-family: arial, helvetica, sans-serif;\"><strong><em>Băng r&ocirc;n được sử dụng chủ yếu tại c&aacute;c cơ sở quảng c&aacute;o.</em></strong></span></h2>\r\n<p><span style=\"font-size: 18px; font-family: arial, helvetica, sans-serif;\">Để c&oacute; được sản phẩm ưng &yacute; về thiết kế, đẹp v&agrave; chất lượng về sản phẩm thực tế th&igrave; ch&uacute;ng t&ocirc;i t&ocirc;i l&agrave; đơn vị đảm bảo l&agrave;m h&agrave;i l&ograve;ng những g&igrave; bạn đang cần.</span></p>\r\n<p><span style=\"font-size: 18px; font-family: arial, helvetica, sans-serif;\">Ch&uacute;ng t&ocirc;i tạo mọi điều kiện thuận lợi cho kh&aacute;ch h&agrave;ng trong qu&aacute; tr&igrave;nh xử l&yacute; đơn h&agrave;ng: d&ugrave;ng c&ocirc;ng cụ nhắn tin chụp ảnh để gưi mẫu như Zalo, mail, hoặc facebook.</span></p>\r\n<p><span style=\"font-size: 18px; font-family: arial, helvetica, sans-serif;\">Ngo&agrave;i ra để đ&aacute;p ứng tốt hơn nhu cầu của qu&yacute; kh&aacute;ch ch&uacute;ng t&ocirc;i sẵn s&agrave;ng giao h&agrave;ng tận nơi với số lượng lớn hoặc c&oacute; y&ecirc;u cầu nếu khoảng c&aacute;ch gần, hỗ trộ giao h&agrave;ng trong khu vực B&igrave;nh Dương hoặc TP HCM.</span></p>\r\n<h2 id=\"mcetoc_1hap4e495j\"><span style=\"font-size: 18px; font-family: arial, helvetica, sans-serif;\"><strong>Ưu điểm của băng r&ocirc;n bạt Hiflex</strong></span></h2>\r\n<p><span style=\"font-size: 18px; font-family: arial, helvetica, sans-serif;\"><em>Gi&aacute; th&agrave;nh rẻ</em></span></p>\r\n<p><span style=\"font-size: 18px; font-family: arial, helvetica, sans-serif;\"><em>Gấp gọn dễ d&agrave;ng</em></span></p>\r\n<p><span style=\"font-size: 18px; font-family: arial, helvetica, sans-serif;\"><em>M&agrave;u sắc đẹp khi in bằng kts</em></span></p>\r\n<p><span style=\"font-size: 18px; font-family: arial, helvetica, sans-serif;\"><em>Đa dạng về k&iacute;ch thước</em></span></p>\r\n<p><span style=\"font-size: 18px; font-family: arial, helvetica, sans-serif;\"><em>Độ bền kh&aacute; tốt khi sử dụng ngo&agrave;i trời hoặc trong nh&agrave;</em></span></p>\r\n<p><span style=\"font-size: 18px; font-family: arial, helvetica, sans-serif;\"><em>Dễ thi c&ocirc;ng....</em></span></p>\r\n<h2 id=\"mcetoc_1hap4e495k\"><span style=\"font-size: 18px; font-family: arial, helvetica, sans-serif;\"><strong>In băng r&ocirc;n (bạt) hiflex được sử dụng cho những đối tượng n&agrave;o?</strong></span></h2>\r\n<p><span style=\"font-size: 18px; font-family: arial, helvetica, sans-serif;\">Hầu như mọi đối tượng c&oacute; thể sử dụng bạt hiflex n&agrave;y bao gồm:</span></p>\r\n<p><span style=\"font-size: 18px; font-family: arial, helvetica, sans-serif;\">C&aacute; nh&acirc;n cần đăng tải th&ocirc;ng tin tuyển dụng c&aacute; nh&acirc;n</span></p>\r\n<p><span style=\"font-size: 18px; font-family: arial, helvetica, sans-serif;\">Nh&agrave; h&agrave;ng qu&aacute;n ăn tạp h&oacute;a cửa h&agrave;ng hiệu s&aacute;ch</span></p>\r\n<p><span style=\"font-size: 18px; font-family: arial, helvetica, sans-serif;\">C&aacute;c doanh nghiệp sử dụng để ch&agrave;o mừng ng&agrave;y lễ, hội hoặc sự kiện n&agrave;o đ&oacute; của c&ocirc;ng ty</span></p>\r\n<p><span style=\"font-size: 18px; font-family: arial, helvetica, sans-serif;\">....</span></p>', 0, 0, 3, '1', 'Hiện nay trên thị trường quảng cáo, các sản phẩm xuất xứ từ in Hiflex', 'Hiện nay trên thị trường quảng cáo, các sản phẩm xuất xứ từ in Hiflex', '2023-09-20 04:13:00', '2023-11-20 20:28:43', NULL),
(55, 27, 'Bạt Hiflex - Decal', 'bat-hiflex---decal', 'IN PP CÁN MỜ', 'in-pp-can-mo', 'Lĩnh vực quảng cáo có nhiều sản phẩm hỗ trợ in ấn như bạt Hiflex, decal, canvas và PP', 'in-pp-can-mo-n9BlrUJ2Pzev0MXh.jpg', 'normal', 0, '<div class=\"mce-toc\">\r\n<h2><span style=\"font-size: 18px;\">Nội dung</span></h2>\r\n<ul>\r\n<li><a href=\"#mcetoc_1ghh2thiau\">PP c&oacute; 2 loại th&ocirc;ng dụng tr&ecirc;n thị trường l&agrave;:</a></li>\r\n<li><a href=\"#mcetoc_1ghh2thiav\">Vậy mục đ&iacute;ch của PP l&agrave; g&igrave;?</a></li>\r\n<li><a href=\"#mcetoc_1ghh2thia10\">Gi&aacute; th&agrave;nh in PP c&oacute; keo v&agrave; kh&ocirc;ng keo</a></li>\r\n<li><a href=\"#mcetoc_1ghh2thia11\">In c&aacute;n PP c&oacute; bao nhi&ecirc;u loại</a></li>\r\n</ul>\r\n</div>\r\n<p><span style=\"font-size: 18px;\"><em><strong>Lĩnh vực quảng c&aacute;o c&oacute; nhiều sản phẩm hỗ trợ in ấn như bạt Hiflex, decal, canvas v&agrave; PP</strong></em></span></p>\r\n<p><span style=\"font-size: 18px;\"><em><strong>In PP l&agrave; việc sử dụng m&aacute;y in kỹ thuật số để in l&ecirc;n chất liệu PP.</strong></em></span></p>\r\n<h2 id=\"mcetoc_1ghh2thiau\"><span style=\"font-size: 18px;\">PP c&oacute; 2 loại th&ocirc;ng dụng tr&ecirc;n thị trường l&agrave;:</span></h2>\r\n<ul>\r\n<li><span style=\"font-size: 18px;\">PP c&oacute; keo v&agrave;</span></li>\r\n<li><span style=\"font-size: 18px;\">PP kh&ocirc;ng keo</span></li>\r\n</ul>\r\n<p><span style=\"font-size: 18px;\">PP c&oacute; keo th&igrave; d&ugrave;ng được như PP kh&ocirc;ng keo, bởi th&ocirc;ng thường PP sẽ được d&ugrave;ng để treo tr&ecirc;n standee, hoặc tương tự standee.</span></p>\r\n<p><span style=\"font-size: 18px;\">C&aacute;c bạn c&oacute; thể tham khảo h&igrave;nh ảnh b&ecirc;n dưới để biết về sản phẩm</span></p>\r\n<h2 id=\"mcetoc_1ghh2thiav\"><span style=\"font-size: 18px;\"><strong>Vậy mục đ&iacute;ch của PP l&agrave; g&igrave;?</strong></span></h2>\r\n<p><span style=\"font-size: 18px;\">Để quảng c&aacute;o cho chiến dịch v&igrave; độ bền đẹp, sắc n&eacute;t cũng như dễ sử dụng, bền so với decal, đẹp so với in bằng chất liệu decal hoặc bạt Hiflex.</span></p>\r\n<p><span style=\"font-size: 18px;\">Đối với PP c&oacute; keo th&igrave; d&ugrave;ng dể c&aacute;n fomex hoặc d&aacute;n l&ecirc;n alu mica hoặc chất liệu tương đương.</span></p>\r\n<h2 id=\"mcetoc_1ghh2thia10\"><span style=\"font-size: 18px;\"><strong>Gi&aacute; th&agrave;nh in PP c&oacute; keo v&agrave; kh&ocirc;ng keo</strong></span></h2>\r\n<p><span style=\"font-size: 18px;\">L&agrave; chất liệu cao cấp v&agrave; được in bằng mực dầu cho độ b&aacute;m d&iacute;nh cao th&igrave; gi&aacute; th&agrave;nh in PP tương đương với in decal,</span></p>\r\n<p><span style=\"font-size: 18px;\">Với gi&aacute; in kh&aacute;ch lẻ:&nbsp;<strong>150.000/m2</strong>&nbsp;(Đ&atilde; c&aacute;n m&agrave;ng)</span></p>\r\n<h2 id=\"mcetoc_1ghh2thia11\"><span style=\"font-size: 18px;\"><strong>In c&aacute;n PP c&oacute; bao nhi&ecirc;u loại</strong></span></h2>\r\n<p><span style=\"font-size: 18px;\">Th&ocirc;ng thường PP tương tự decal khi c&aacute;n m&agrave;ng c&oacute; thể d&ugrave;ng m&agrave;ng trong hoặc m&agrave;ng c&aacute;n mờ</span></p>\r\n<p><span style=\"font-size: 18px;\">Sự kh&aacute;c biệt của 2 loại n&agrave;y l&agrave; độ trong suốt của m&agrave;ng c&aacute;n, để sản phẩm sắc n&eacute;t v&agrave; b&oacute;ng hơn th&igrave; d&ugrave;ng m&agrave;ng trong, nhưng để l&agrave;m nổi bật v&agrave; sự sang trọng khi quảng c&aacute;o sản phẩm th&igrave; sử dụng m&agrave;ng mờ c&aacute;n l&ecirc;n tấm PP.</span></p>\r\n<p><span style=\"font-size: 18px;\">Gi&aacute; th&agrave;nh của 2 loại sản phẩm n&agrave;y bằng gi&aacute; nhau với kh&aacute;ch in lẻ.</span></p>', 0, 0, 2, '1', 'Lĩnh vực quảng cáo có nhiều sản phẩm hỗ trợ in ấn như bạt Hiflex, decal, canvas và PP', 'Lĩnh vực quảng cáo có nhiều sản phẩm hỗ trợ in ấn như bạt Hiflex, decal, canvas và PP', '2023-09-20 04:21:50', '2023-09-24 17:15:56', NULL),
(56, 27, 'Bạt Hiflex - Decal', 'bat-hiflex---decal', 'IN BĂNG RÔN BẠT HIFLEX', 'in-bang-ron-bat-hiflex', 'Hiện nay trên thị trường quảng cáo, các sản phẩm xuất xứ từ in Hiflex đang dần chiếm đa số, chỉ cần dạo qua bất kỳ con đường nào có hoạt động kinh doanh diễn ra', 'in-bang-ron-bat-hiflex-vrO8ul2hzfQCj4SE.jpg', 'normal', 0, '<p><em>Hiện nay tr&ecirc;n thị trường quảng c&aacute;o, c&aacute;c sản phẩm xuất xứ từ&nbsp;<strong>in Hiflex</strong>&nbsp;đang dần chiếm đa số, chỉ cần dạo qua bất kỳ con đường n&agrave;o c&oacute; hoạt động kinh doanh diễn ra l&agrave; bạn đ&atilde; thấy rất nhiều bảng hiệu, Banner hay bảng hiệu hộp đ&egrave;n được l&agrave;m từ chất liệu hiflex n&agrave;y.</em></p>\r\n<h2>Ưu điểm chất liệu Hiflex</h2>\r\n<p>Với ưu điểm nổi trội nhất l&agrave; độ bền, dẻo dai, chịu được thời tiết mưa nắng thất thường như ở Việt Nam c&ugrave;ng chất lượng in đảm bảo y&ecirc;u cầu của hoạt động quảng c&aacute;o, do đ&oacute;, kh&ocirc;ng lạ g&igrave; khi đ&acirc;y l&agrave; chất liệu được lựa chọn cho quảng c&aacute;o cũng như thi c&ocirc;ng hộp đ&egrave;n.</p>\r\n<h2><strong><em>Băng r&ocirc;n được sử dụng chủ yếu tại c&aacute;c cơ sở quảng c&aacute;o.</em></strong></h2>\r\n<p>Để c&oacute; được sản phẩm ưng &yacute; về thiết kế, đẹp v&agrave; chất lượng về sản phẩm thực tế th&igrave; ch&uacute;ng t&ocirc;i t&ocirc;i l&agrave; đơn vị đảm bảo l&agrave;m h&agrave;i l&ograve;ng những g&igrave; bạn đang cần.</p>\r\n<p>Ch&uacute;ng t&ocirc;i tạo mọi điều kiện thuận lợi cho kh&aacute;ch h&agrave;ng trong qu&aacute; tr&igrave;nh xử l&yacute; đơn h&agrave;ng: d&ugrave;ng c&ocirc;ng cụ nhắn tin chụp ảnh để gưi mẫu như Zalo, mail, hoặc facebook.</p>\r\n<p>Ngo&agrave;i ra để đ&aacute;p ứng tốt hơn nhu cầu của qu&yacute; kh&aacute;ch ch&uacute;ng t&ocirc;i sẵn s&agrave;ng giao h&agrave;ng tận nơi với số lượng lớn hoặc c&oacute; y&ecirc;u cầu nếu khoảng c&aacute;ch gần, hỗ trộ giao h&agrave;ng trong khu vực B&igrave;nh Dương hoặc TP HCM.</p>\r\n<h2><strong>Ưu điểm của băng r&ocirc;n bạt Hiflex</strong></h2>\r\n<p><em>Gi&aacute; th&agrave;nh rẻ</em></p>\r\n<p><em>Gấp gọn dễ d&agrave;ng</em></p>\r\n<p><em>M&agrave;u sắc đẹp khi in bằng kts</em></p>\r\n<p><em>Đa dạng về k&iacute;ch thước</em></p>\r\n<p><em>Độ bền kh&aacute; tốt khi sử dụng ngo&agrave;i trời hoặc trong nh&agrave;</em></p>\r\n<p><em>Dễ thi c&ocirc;ng....</em></p>\r\n<h2><strong>In băng r&ocirc;n (bạt) hiflex được sử dụng cho những đối tượng n&agrave;o?</strong></h2>\r\n<p>Hầu như mọi đối tượng c&oacute; thể sử dụng bạt hiflex n&agrave;y bao gồm:</p>\r\n<p>C&aacute; nh&acirc;n cần đăng tải th&ocirc;ng tin tuyển dụng c&aacute; nh&acirc;n</p>\r\n<p>Nh&agrave; h&agrave;ng qu&aacute;n ăn tạp h&oacute;a cửa h&agrave;ng hiệu s&aacute;ch</p>\r\n<p>C&aacute;c doanh nghiệp sử dụng để ch&agrave;o mừng ng&agrave;y lễ, hội hoặc sự kiện n&agrave;o đ&oacute; của c&ocirc;ng ty</p>\r\n<p>....</p>', 0, 0, 20, '1', 'Hiện nay trên thị trường quảng cáo, các sản phẩm xuất xứ từ in Hiflex đang dần chiếm đa số, chỉ cần dạo qua bất kỳ con đường nào có hoạt động kinh doanh diễn ra là bạn đã thấy rất nhiều bảng hiệu, Banner hay bảng hiệu hộp đèn được làm từ chất liệu hiflex', 'Hiện nay trên thị trường quảng cáo, các sản phẩm xuất xứ từ in Hiflex đang dần chiếm đa số, chỉ cần dạo qua bất kỳ con đường nào có hoạt động kinh doanh diễn ra là bạn đã thấy rất nhiều bảng hiệu, Banner hay bảng hiệu hộp đèn được làm từ chất liệu hiflex', '2023-09-20 04:31:53', '2023-11-20 19:41:34', NULL),
(57, 28, 'Máy Móc Thiết Bị Ngành Đúc', 'may-moc-thiet-bi-nganh-duc', 'Linh phụ kiện ngành đúc', 'linh-phu-kien-nganh-duc', 'Linh phụ kiện ngành đúc', 'linh-phu-kien-nganh-duc-lHjnNt.jpg', 'normal', 0, '<p>Linh phụ kiện ng&agrave;nh đ&uacute;c</p>', 0, 0, 1, '1', 'Linh phụ kiện ngành đúc', 'Linh phụ kiện ngành đúc', '2023-12-10 02:30:35', '2023-12-10 02:30:43', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post_images`
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
(1, 'Admin', 'web', '2020-04-19 06:45:16', '2020-04-19 06:45:16'),
(2, 'Writer', 'web', '2020-04-19 06:45:16', '2020-04-19 06:45:16');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tag`
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
-- Đang đổ dữ liệu cho bảng `tag`
--

INSERT INTO `tag` (`id`, `tag_cate_id`, `tag_cate_slug`, `tag_post_id`, `tag_post_title`, `tag_post_slug`, `tag_show`, `tag_view`, `created_at`, `updated_at`) VALUES
(71, '12', 'dich-vu-du-lich', 32, 'tag 7', 'tag-8', 1, 0, '2022-12-19 15:34:54', '2022-12-19 15:34:54'),
(72, '14', 'dich-vu-du-lich', 26, 'tag 8', 'tag-8', 1, 0, '2022-12-19 15:34:54', '2022-12-19 15:34:54'),
(73, '8', 'dich-vu-du-lich', 33, 'tag 5', 'tag-5', 1, 0, '2022-12-19 15:34:54', '2022-12-19 15:34:54'),
(76, '18', 'in-offset', 52, 'in nhanh name card', 'in-nhanh-name-card', 1, 0, '2023-09-20 03:47:59', '2023-09-20 03:47:59');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
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
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `user_image`, `favicon_image`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(14, 'a', 'admin@gmail.com', NULL, NULL, '', '$2y$10$zr6rimIAaDj4GUaX4sA2PuQ/mfH9hdyXK6Aio5R0M0lTRsaDnmz9C', NULL, '2020-07-20 13:03:50', '2020-07-20 13:03:50'),
(17, 'Trần Hữu Phú', 'phuth.site@gmail.com', NULL, 'user_tran-huu-phu-ewP7q.jpg', 'favicon_admin-FJlfT.png', '$2y$10$E4vm5uJwhV7n5Y/Itq4W1en6oa.bKRL9Tjbbs6Ei1TrHUyGj5PYjS', NULL, NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cate`
--
ALTER TABLE `cate`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `don-hang`
--
ALTER TABLE `don-hang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `gallery_image`
--
ALTER TABLE `gallery_image`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `gallery_type`
--
ALTER TABLE `gallery_type`
  ADD PRIMARY KEY (`id`);

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
-- Chỉ mục cho bảng `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

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
-- Chỉ mục cho bảng `post_images`
--
ALTER TABLE `post_images`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `cate`
--
ALTER TABLE `cate`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `don-hang`
--
ALTER TABLE `don-hang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `gallery_image`
--
ALTER TABLE `gallery_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `gallery_type`
--
ALTER TABLE `gallery_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `home_page_info`
--
ALTER TABLE `home_page_info`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `image_tinycme`
--
ALTER TABLE `image_tinycme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT cho bảng `page`
--
ALTER TABLE `page`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `post`
--
ALTER TABLE `post`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT cho bảng `post_images`
--
ALTER TABLE `post_images`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tag`
--
ALTER TABLE `tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
