-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 10, 2023 lúc 05:11 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlkh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id` int(10) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`id`, `username`, `password`) VALUES
(20, 'hao@gmail.com', '123456'),
(21, 'khanh@gmail.com', '123456'),
(30, 'admin@gmail.com', '1111'),
(32, 'hau@gmail.com', '111111');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongtinhotro`
--

CREATE TABLE `thongtinhotro` (
  `id` int(10) NOT NULL,
  `hoten` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sotien` double NOT NULL,
  `dienthoai` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ghichu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idtre` int(11) NOT NULL,
  `hotentre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tinhthanh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quanhuyen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thongtinhotro`
--

INSERT INTO `thongtinhotro` (`id`, `hoten`, `sotien`, `dienthoai`, `diachi`, `ghichu`, `idtre`, `hotentre`, `tinhthanh`, `quanhuyen`, `hinh`) VALUES
(49, 'Lê vĩnh hảo', 10000000, '0123456789', '145', 'Tiền hỗ trợ trẻ em nghèo', 75, 'Huỳnh Tấn Đạt', 'Trà Vinh', 'Trà Vinh', 'images/z3937882630817_7a81b7c823914b46870a1d45157a'),
(50, 'Đặng Ngọc Thanh', 5000000, '0123456789', '145', 'Tiền hỗ trợ trẻ em nghèo', 81, 'Nguyễn Văn A', 'Trà Vinh', 'Trà Vinh', 'images/z3937882661857_4ece414be3f9a161158d65a8bef2'),
(51, 'lê vĩnh hảo', 1000, '0981026490', '', '', 75, 'Huỳnh Tấn Đạt', 'Long An', '', 'images/z3937882630817_7a81b7c823914b46870a1d45157a'),
(52, 'sdfs', 1000000, '02131222002', 'sdfasdf', 'ádfsdf', 75, 'Huỳnh Tấn Đạt', 'ádfa', 'ádfsf', 'images/z3937882630817_7a81b7c823914b46870a1d45157a');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `treem`
--

CREATE TABLE `treem` (
  `matre` int(10) NOT NULL,
  `hoten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sodt` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioitinh` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chitiet` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `treem`
--

INSERT INTO `treem` (`matre`, `hoten`, `hinh`, `diachi`, `sodt`, `gioitinh`, `chitiet`) VALUES
(76, 'Phạm Minh Hậu', 'images/z3937882633490_a3b229697a7b62b4a704bbb611d67381.jpg', 'Bình Chánh', ' 012345678', 'Nam', ''),
(77, 'Phạm Tuấn Kiệt', 'images/z3937882640859_3f59640d23be6ff1e5d21f68911de192.jpg', 'Long An', ' 0123456789', 'Nam', ''),
(78, 'Nguyễn Thị Hoàng Hảo', 'images/z3937882668760_761659b0dd52fb065887879c7255ae01.jpg', 'Long An', ' 0123456789', 'Nam', ''),
(79, 'Hoàng Thiên Bảo Khánh', 'images/z3937882641976_70d1dcd21c4d21eb81165c5904f46553.jpg', 'Tp.HCM', ' 0123456789', 'Nam', ''),
(80, 'Nguyễn Trần Tấn Đạt', 'images/z3937882644745_d70014fe42afad5f773a9fdbeacbcf32.jpg', 'Bình Chánh', ' 0123456789', 'Nam', ''),
(81, 'Nguyễn Văn A', 'images/z3937882661857_4ece414be3f9a161158d65a8bef2c228.jpg', 'Bình Dương', ' 0123456789', 'Nam', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thongtinhotro`
--
ALTER TABLE `thongtinhotro`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `treem`
--
ALTER TABLE `treem`
  ADD PRIMARY KEY (`matre`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `thongtinhotro`
--
ALTER TABLE `thongtinhotro`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT cho bảng `treem`
--
ALTER TABLE `treem`
  MODIFY `matre` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
