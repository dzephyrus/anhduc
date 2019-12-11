-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 11, 2019 lúc 05:16 AM
-- Phiên bản máy phục vụ: 10.4.10-MariaDB
-- Phiên bản PHP: 7.3.12

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
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id_ban` int(200) NOT NULL,
  `image` varchar(200) COLLATE utf8_vietnamese_ci NOT NULL,
  `detail` varchar(200) COLLATE utf8_vietnamese_ci NOT NULL,
  `tt` varchar(200) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`id_ban`, `image`, `detail`, `tt`) VALUES
(3, 'hamster_tranvantieng_t4_02-7297.png', 'sản phẩm tốt', 'off'),
(4, 'e3000f05ee840fda5695-3436.jpg', 'voucher tưng bừng khuyến mãi', 'on');

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
(1, 'dog_food'),
(2, 'cat_food');

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

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id_cmt`, `name_u`, `detail`, `date`, `id_p`) VALUES
(1, 'duc', 'sdsdsasd', '2019-12-02', 1),
(3, 'duc', '321', '2019-12-10', 3),
(8, 'duc', 'đấ', '2019-12-10', 3),
(9, 'duc', 'đấ', '2019-12-10', 3),
(10, 'duc', 'mạnh', '2019-12-10', 3),
(11, 'duc', 'qưewqe', '2019-12-10', 3),
(12, 'duc', 'qưewqe', '2019-12-10', 3),
(17, 'duc', 'đẹp trai\r\n', '2019-12-10', 3),
(18, 'duc', 'ẻ', '2019-12-10', 3),
(19, 'duc', 'mạnh', '2019-12-10', 6),
(20, 'duc', 'hello', '2019-12-10', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id_p` int(11) NOT NULL,
  `name_p` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `image_p` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `price` int(11) NOT NULL,
  `sale_p` int(11) NOT NULL,
  `sl_p` int(11) NOT NULL,
  `date` date NOT NULL,
  `detail` varchar(700) COLLATE utf8_vietnamese_ci NOT NULL,
  `view` int(11) NOT NULL,
  `id_cate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id_p`, `name_p`, `image_p`, `price`, `sale_p`, `sl_p`, `date`, `detail`, `view`, `id_cate`) VALUES
(1, 'mạnh nguyễn', '89727e75c0b157c265ce356a6e58d460.jpg', 24424, 0, 43242, '2019-12-09', '<p>3fdsf</p>\r\n', 0, 2),
(2, 'mạnh nguyễn', 'thcan3.jpg', 13123, 0, 231, '2019-12-09', '<p>sản phẩm 2</p>\r\n', 2, 1),
(3, 'sản phẩm 2', 'thucan5.jpg', 12312, 121, 121, '2019-12-10', '<p>sản phẩm tốt nhất d&agrave;nh cho ch&oacute;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 52, 1),
(4, 'sản phẩm cho chó', 'thuc-an-me-o.jpg', 21, 21221, 212, '2019-12-10', '<p>sdsad</p>\r\n', 1, 1),
(5, 'mạnh nguyễn', 'thucawn1.jpg', 112313, 2123, 21313, '2019-12-10', '<p>2313</p>\r\n', 1, 1),
(6, 'mạnh nguyễn', 'thucan4.jpg', 1233, 1231, 31313, '2019-12-10', '<p>12331</p>\r\n', 4, 2),
(7, 'nguyen', 'thuc-an-me-o.jpg', 12313, 123123, 123213, '2019-12-10', '<p>12313</p>\r\n', 0, 2),
(8, 'mạnh nguyễn', '29ebbf8b3d9c3654c4206e333bd3535a_tn.jpg', 21313, 123213, 123, '2019-12-10', '<p>1231321</p>\r\n', 0, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `setting`
--

CREATE TABLE `setting` (
  `id_st` int(11) NOT NULL,
  `logo` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `setting`
--

INSERT INTO `setting` (`id_st`, `logo`, `email`, `phone`, `address`) VALUES
(1, '29ebbf8b3d9c3654c4206e333bd3535a_tn.jpg', 'manh112@gmail.com', 344560381, '2312');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `id_slide` int(11) NOT NULL,
  `image_slide` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `slide`
--

INSERT INTO `slide` (`id_slide`, `image_slide`, `status`, `link`, `title`) VALUES
(2, 'slideshow_1.jpg', 'ádsa', 'ádasdas', 'on'),
(3, 'ok1.jpg', 'tttt', 'dssadas ', 'on'),
(4, 'ok1.jpg', 'slide 1', 'auto.com', 'on'),
(5, 'ok1.jpg', 'slide 1', 'auto.com', 'on'),
(6, 'hamster_tranvantieng_t4_02-7297.png', 'ttt', '123213', 'on');

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
(1, 'duc', 344560381, 'manhnguyenhungthom@gmail.com', '123', 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `voucher`
--

CREATE TABLE `voucher` (
  `id_vc` int(11) NOT NULL,
  `ma_vc` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `sale` int(11) NOT NULL,
  `detail` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `voucher`
--

INSERT INTO `voucher` (`id_vc`, `ma_vc`, `start`, `end`, `sale`, `detail`) VALUES
(2, '132ff', '2019-12-04', '2019-12-08', 2131, 'chỉ áp dụng dưới 20000');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id_ban`);

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
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `id_ban` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id_cate` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id_cmt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id_p` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `setting`
--
ALTER TABLE `setting`
  MODIFY `id_st` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `id_slide` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id_u` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `voucher`
--
ALTER TABLE `voucher`
  MODIFY `id_vc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
