-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 24, 2022 lúc 11:20 AM
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
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `image`) VALUES
(6, 'Đêm Tối Rực Rỡ', 'demtoirucro.jpg'),
(7, 'Minions', 'minion.jpg'),
(8, 'Mắt biếc', 'matbiec.png'),
(9, 'az', 'docter.png');

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
(1, 'DTRR', 'ND', 'T7', 'suat2', 'hangi', 'suat22'),
(2, 'DTRR', 'ND', 'T7', 'suat2', 'hangi', 'suat22'),
(3, 'ĐÊN TỐI RỰC RỠ', 'Cine Nguyễn Du', 'Thứ 7, 30/07/202', '9:00, 2D- Phụ đề', 'A', '14'),
(4, 'chonphim', 'Chọn Rạp', 'Chọn Ngày', 'Chọn Suất', 'Chọn Hàng Ghế', 'Chọn Số Ghế'),
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
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`uid`, `username`, `email`, `password`, `status`) VALUES
(1, 'duong.197ct31283', 'doudaung0504@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1);

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
(88, 'VIRUS: 32', 'Cine Quang Trung', 'Chủ Nhật, 31/07/2022', 'Chọn Suất', 'Chọn Hàng Ghế', 'Chọn Số Ghế', '80.000 VNĐ'),
(90, 'ĐÊN TỐI RỰC RỠ', 'Cine Nguyễn Du', 'Thứ 7, 30/07/2022', '9:00, 2D- Phụ đề', 'B', '14', '80.000 VNĐ'),
(91, 'Chọn Phim', 'Chọn Rạp', 'Chọn Ngày', 'Chọn Suất', 'Chọn Hàng Ghế', 'Chọn Số Ghế', '80.000 VNĐ'),
(92, 'Chọn Phim', 'Chọn Rạp', 'Chọn Ngày', 'Chọn Suất', 'Chọn Hàng Ghế', 'Chọn Số Ghế', '80.000 VNĐ'),
(93, 'ĐÊN TỐI RỰC RỠ', 'Cine Kinh Dương Vương', 'Thứ 2, 08/08/2022', '17:30, 2D- Phụ đề', 'J', '14', '80.000 VNĐ'),
(94, 'Chọn Phim', 'Chọn Rạp', 'Chọn Ngày', 'Chọn Suất', 'Chọn Hàng Ghế', 'Chọn Số Ghế', '80.000 VNĐ'),
(95, 'Chọn Phim', 'Chọn Rạp', 'Chọn Ngày', 'Chọn Suất', 'Chọn Hàng Ghế', 'Chọn Số Ghế', '80.000 VNĐ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vechieuphim`
--

CREATE TABLE `vechieuphim` (
  `id` int(255) NOT NULL,
  `tenphim` varchar(255) NOT NULL,
  `tenrap` varchar(255) NOT NULL,
  `ngay` varchar(255) NOT NULL,
  `suat` varchar(255) NOT NULL,
  `hangghe` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Chỉ mục cho bảng `vechieuphim`
--
ALTER TABLE `vechieuphim`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `soghe` (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `vechieufilm`
--
ALTER TABLE `vechieufilm`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT cho bảng `vechieuphim`
--
ALTER TABLE `vechieuphim`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
