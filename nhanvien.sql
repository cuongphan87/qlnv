-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 22, 2018 lúc 02:39 AM
-- Phiên bản máy phục vụ: 10.1.34-MariaDB
-- Phiên bản PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlnv`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `id` int(11) NOT NULL,
  `manv` text NOT NULL,
  `hoten` text NOT NULL,
  `ngaysinh` date NOT NULL,
  `diachi` text NOT NULL,
  `phone` int(11) NOT NULL,
  `email` text NOT NULL,
  `luongcb` double NOT NULL,
  `phucap` double NOT NULL,
  `tongluong` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`id`, `manv`, `hoten`, `ngaysinh`, `diachi`, `phone`, `email`, `luongcb`, `phucap`, `tongluong`) VALUES
(27, 'nv001', 'anh hoang', '2018-08-16', 'da nang  viet nam', 989123789, 'anh@g.m', 2015, 2052, 100),
(30, '', '', '0000-00-00', '', 0, '', 0, 0, 0),
(31, 'nv003', 'hung', '2018-08-21', 'hanh', 989252322, 'hung@gmail.com', 12, 12, 0),
(32, 'nv004', 'phan anh han', '2018-08-21', 'da nang', 989252322, 'hanmap@gmail.com', 2300000, 700000, 3000000);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
