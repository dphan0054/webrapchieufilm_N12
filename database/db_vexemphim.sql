-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 24, 2022 lúc 03:38 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_vexemphim`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `image`) VALUES
(6, 'LIÊN MINH SIÊU THÚ', 'superpet.jpg'),
(7, 'THE BRIDE OF HALLOWEEN', 'conan.jpg'),
(8, 'ĐÊM TỐI RỰC RỠ!', 'demtoirucro1.jpg'),
(13, 'Em và Trịnh', 'emvatrinh1.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ticket`
--

CREATE TABLE `ticket` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `chair` varchar(255) NOT NULL,
  `numberchair` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `ticket`
--

INSERT INTO `ticket` (`id`, `name`, `address`, `date`, `time`, `chair`, `numberchair`) VALUES
(3, 'ĐÊN TỐI RỰC RỠ', 'Cine Nguyễn Du', 'Thứ 7, 30/07/202', '9:00, 2D- Phụ đề', 'A', '14'),
(5, 'THOR: LOVE AND THUNDER', 'Cine Nguyễn Du', 'Thứ 7, 30/07/2022', '9:00, 2D- Phụ đề', 'C', '14'),
(6, 'THOR: LOVE AND THUNDER', 'Cine Tân Bình', 'Chủ Nhật, 31/07/2022', '15:30, 2D- Phụ đề', 'C', '4'),
(7, 'THOR: LOVE AND THUNDER', 'Cine Quang Trung', '80.000 VNĐ', '19:30, 2D- Phụ đề', 'E', '5'),
(8, 'THOR: LOVE AND THUNDER', 'Cine Quang Trung', '80.000 VNĐ', '19:30, 2D- Phụ đề', 'E', '5'),
(9, 'MINIONS: THE RISE OF GRU', 'Cine Kinh Dương Vương', '80.000 VNĐ', '14:00, 2D- Phụ đề', 'E', '5');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `username` varchar(60) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(60) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `password` varchar(60) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`uid`, `username`, `email`, `password`, `status`) VALUES
(1, 'vyvy0112', 'vyvyne0112@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1),
(4, 'loveu112', 'nguyendinhthi158@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0),
(5, 'duong.197ct31283', 'doudaung0504@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vechieufilm`
--

CREATE TABLE `vechieufilm` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `chair` varchar(255) NOT NULL,
  `numberchair` varchar(11) NOT NULL,
  `giave` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `vechieufilm`
--

INSERT INTO `vechieufilm` (`id`, `name`, `address`, `date`, `time`, `chair`, `numberchair`, `giave`) VALUES
(84, 'MINIONS: THE RISE OF GRU', 'Cine Nguyễn Du', 'Thứ 7, 30/07/2022', '12:00, 2D- Phụ đề', 'B', '15', '80.000 VNĐ'),
(86, 'EM VÀ TRỊNH', 'Cine Kinh Dương Vương', 'Thứ 7, 30/07/2022', '12:00, 2D- Phụ đề', 'C', '15', '80.000 VNĐ'),
(88, 'ĐÊN TỐI RỰC RỠ', 'Cine Kinh Dương Vương', 'Chủ Nhật, 31/07/2022', '12:00, 2D- Phụ đề', 'B', '14', '80.000 VNĐ'),
(89, 'THOR: LOVE AND THUNDER', 'Cine Kinh Dương Vương', 'Chủ Nhật, 31/07/2022', '12:00, 2D- Phụ đề', 'B', '3', '80.000 VNĐ'),
(90, 'THOR: LOVE AND THUNDER', 'Cine Kinh Dương Vương', 'Chủ Nhật, 31/07/2022', '12:00, 2D- Phụ đề', 'B', '3', '80.000 VNĐ'),
(91, 'THOR: LOVE AND THUNDER', 'Cine Kinh Dương Vương', 'Chủ Nhật, 31/07/2022', '14:00, 2D- Phụ đề', 'B', '3', '80.000 VNĐ'),
(92, 'ĐÊN TỐI RỰC RỠ', 'Cine Nguyễn Du', 'Thứ 7, 30/07/2022', '12:00, 2D- Phụ đề', 'B', '4', '80.000 VNĐ'),
(93, 'THOR: LOVE AND THUNDER', 'Cine Kinh Dương Vương', 'Thứ 7, 30/07/2022', '12:00, 2D- Phụ đề', 'C', 'Chọn Số Ghế', '80.000 VNĐ'),
(94, 'VIRUS: 32', 'Cine Quang Trung', 'Thứ 2, 08/08/2022', '14:00, 2D- Phụ đề', 'B', '6', '80.000 VNĐ'),
(95, 'Chọn Phim', 'Chọn Rạp', 'Chọn Ngày', 'Chọn Suất', 'Chọn Hàng Ghế', 'Chọn Số Ghế', '80.000 VNĐ'),
(96, 'ĐÊN TỐI RỰC RỠ', 'Cine Nguyễn Du', 'Thứ 7, 30/07/2022', '12:00, 2D- Phụ đề', 'H', '12', '80.000 VNĐ');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- Chỉ mục cho bảng `vechieufilm`
--
ALTER TABLE `vechieufilm`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `vechieufilm`
--
ALTER TABLE `vechieufilm`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
