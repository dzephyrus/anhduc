-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 16, 2019 lúc 04:34 AM
-- Phiên bản máy phục vụ: 10.4.6-MariaDB
-- Phiên bản PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id_cate` int(11) NOT NULL,
  `name_cate` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id_cate`, `name_cate`) VALUES
(1, 'choádfsdf'),
(2, 'meo'),
(5, 'xdsfsdfsdf'),
(7, 'á');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id_cmt` int(11) NOT NULL,
  `name_u` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `detail` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `date` date NOT NULL,
  `id_p` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order1`
--

CREATE TABLE `order1` (
  `id_order` int(11) NOT NULL,
  `name_u` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `id_p` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `order1`
--

INSERT INTO `order1` (`id_order`, `name_u`, `phone`, `address`, `quantity`, `id_p`) VALUES
(1, 'long van', 967861842, 'ad', 0, 0),
(2, 'ad', 23, 'ad', 0, 0),
(3, 'long van', 967861842, 'Vĩnh Thịnh - Vĩnh Lộc - Thanh Hóa', 0, 0),
(4, 'long van', 967861842, 'Vĩnh Thịnh - Vĩnh Lộc - Thanh Hóa', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id_p` int(11) NOT NULL,
  `name_p` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `image_p` text COLLATE utf8_vietnamese_ci NOT NULL,
  `price` int(11) NOT NULL,
  `sale_p` int(11) NOT NULL,
  `sl_p` int(11) NOT NULL,
  `date` date NOT NULL,
  `detail` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `view` int(11) NOT NULL,
  `id_cate` int(11) NOT NULL,
  `name_cate` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id_p`, `name_p`, `image_p`, `price`, `sale_p`, `sl_p`, `date`, `detail`, `view`, `id_cate`, `name_cate`) VALUES
(3, 'product milk', 'co4la.jpg', 200001, 101, 900000, '2019-12-06', '<p>okl7777777</p>\r\n', 3, 1, 'cho '),
(4, 'van long2', '22.jpg', 200002, 12, 12, '2019-12-05', '<p>ol2</p>\r\n', 2, 1, 'cho '),
(5, 'Trần Văn Long', 'ok1.jpg', 12, 1, 1, '2019-12-05', '<p>ok</p>\r\n', 0, 1, 'cho '),
(6, 'Trần Văn Long', 'thuc-an-me-o.jpg', 12, 1, 1, '2019-12-05', '<p>ok</p>\r\n', 3, 1, 'cho '),
(7, 'Manh', 'thucawn1.jpg', 200000, 198000, 12, '2019-12-05', '<p>ok1</p>\r\n', 0, 1, 'cho '),
(8, 'Anh Duc', 'thcan3.jpg', 20000, 18000, 12, '2019-12-05', '<p>okq</p>\r\n', 29, 2, 'meo'),
(10, 'love', 'oka2.png', 2000, 1, 1, '2019-12-06', '<p>1</p>\r\n', 0, 1, 'cho ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `setting`
--

CREATE TABLE `setting` (
  `id_st` int(11) NOT NULL,
  `logo` text COLLATE utf8_vietnamese_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `id_slide` int(11) NOT NULL,
  `image_slide` text COLLATE utf8_vietnamese_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `slide`
--

INSERT INTO `slide` (`id_slide`, `image_slide`, `status`, `link`, `title`) VALUES
(2, 'slideshow_1.jpg', 'fsdffsfsdf', 'FPT Poly', 'on'),
(4, 'ok1.jpg', 'voucher', 'FPT Poly', 'on');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id_u` int(11) NOT NULL,
  `name_u` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `quyen` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id_u`, `name_u`, `phone`, `email`, `pass`, `quyen`) VALUES
(1, 'abc', 967861842, 'tranlong25262@gmail.com', 'a', 'admin'),
(2, 'a1', 967861842, 'tranlong25262@gmail.com', 'a', 'user'),
(3, 'a2', 967861842, 'tranhuong.th@gmail.com', '1', 'user'),
(4, 'a3', 967861842, 'tranlong25262@gmail.com', '1', 'user'),
(5, 'as', 12344566, '1233536@xn--q13-18a', 'a', 'kh'),
(6, 'sdfsdf', 2147483647, 'tranlong25262@gmail.com', '1', 'kh'),
(7, 'qưqwe', 1231231, 'tranlong25262@gmail.com', '1', 'kh'),
(8, 'ádasd', 967861842, 'tranlong25262@gmail.com', '1', 'kh'),
(9, 'ia', 967861842, 'tranlong25262@gmail.com', 'a', 'kh'),
(10, 'ie', 967861842, 'tranlong25262@gmail.com', 'a', 'kh'),
(11, '', 0, '', '', 'kh'),
(12, 'ytak al', 0, '', '', 'kh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `voucher`
--

CREATE TABLE `voucher` (
  `id_vc` int(11) NOT NULL,
  `code` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `discount_price` int(11) NOT NULL,
  `detail` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `voucher`
--

INSERT INTO `voucher` (`id_vc`, `code`, `start`, `end`, `discount_price`, `detail`) VALUES
(3, '12345', '2019-12-04', '2019-12-19', 1, 'nd');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_cate`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_cmt`);

--
-- Chỉ mục cho bảng `order1`
--
ALTER TABLE `order1`
  ADD PRIMARY KEY (`id_order`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_p`);

--
-- Chỉ mục cho bảng `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id_st`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id_slide`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_u`);

--
-- Chỉ mục cho bảng `voucher`
--
ALTER TABLE `voucher`
  ADD PRIMARY KEY (`id_vc`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id_cate` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id_cmt` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `order1`
--
ALTER TABLE `order1`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id_p` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `setting`
--
ALTER TABLE `setting`
  MODIFY `id_st` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `id_slide` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id_u` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `voucher`
--
ALTER TABLE `voucher`
  MODIFY `id_vc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
