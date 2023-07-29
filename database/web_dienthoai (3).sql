-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 19, 2023 lúc 08:03 AM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web_dienthoai`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `acc_admin`
--

CREATE TABLE `acc_admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `acc_admin`
--

INSERT INTO `acc_admin` (`id`, `name`, `user`, `pass`, `role`) VALUES
(1, 'ADMINISTRATOR', 'admin', 'admin', 0),
(2, 'ninh', 'ninh', 'ninh', 1),
(3, '', '', '', 0),
(4, 'son', 'son', 'son', 0),
(5, 'minh', 'minh', 'minh', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dienthoai`
--

CREATE TABLE `dienthoai` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `img` varchar(50) NOT NULL,
  `gia` int(11) NOT NULL,
  `giagoc` int(11) NOT NULL,
  `baohanh` varchar(50) NOT NULL,
  `thongtin` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dienthoai`
--

INSERT INTO `dienthoai` (`id`, `name`, `img`, `gia`, `giagoc`, `baohanh`, `thongtin`) VALUES
(1, 'iPhone 14 Pro Max 128GB | Chính hãng VN/A', 'apple.png', 28000000, 30000000, '13 tháng', ''),
(2, 'iPhone 11 trắng 128GB | Chính hãng VN/A', 'apple_11_trang.png', 23000000, 25000000, '11 tháng', '34534'),
(3, 'iPhone 12 Đỏ 128GB | Chính hãng VN/A', 'apple_12_do.png', 23000000, 25000000, '12 tháng', ''),
(4, 'iPhone 13 đen 128GB | Chính hãng VN/A', 'apple_13_den.png', 25000000, 28000000, '12 tháng', ''),
(5, 'iPhone 13 hồng 128GB | Chính hãng VN/A', 'apple_13_hong.png', 25000000, 28000000, '12 tháng', ''),
(6, 'iPhone 14 đỏ 128GB | Chính hãng VN/A', 'apple_14_do.png', 28000000, 30000000, '12 tháng', ''),
(7, 'iPhone 14 vàng 128GB | Chính hãng VN/A', 'apple_14_vang1.png', 28000000, 30000000, '12 tháng', ''),
(8, 'Oppo Find N2 128GB | Chính hãng VN/A', 'oppo_find_n2.png', 30000000, 35000000, '12 tháng', ''),
(9, 'Oppo Reno 8 128GB | Chính hãng VN/A', 'oppo_reno8.png', 27000000, 30000000, '12 tháng', ''),
(10, 'Samsung Galaxy A34 128GB | Chính hãng VN/A', 'samsung_glx_a34.png', 17000000, 20000000, '12 tháng', ''),
(11, 'Samsung Galaxy S20 128GB | Chính hãng VN/A', 'samsung_glx_s20.png', 9000000, 13000000, '12 tháng', ''),
(12, 'Samsung Galaxy S23 128GB | Chính hãng VN/A', 'samsung_glx_s23.png', 37000000, 40000000, '13 tháng', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `don_hang`
--

CREATE TABLE `don_hang` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sdt` int(11) NOT NULL,
  `ngaydathang` date NOT NULL,
  `diachi` varchar(100) NOT NULL,
  `tongtien` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `don_hang`
--

INSERT INTO `don_hang` (`id`, `name`, `sdt`, `ngaydathang`, `diachi`, `tongtien`) VALUES
(56, '34', 34, '2023-05-19', '34', 25000000),
(57, '456', 456, '2023-05-19', '456', 50000000),
(58, '456', 456, '2023-05-19', '456', 50000000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don`
--

CREATE TABLE `hoa_don` (
  `id` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `id_hoadon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoa_don`
--

INSERT INTO `hoa_don` (`id`, `id_sp`, `soluong`, `id_hoadon`) VALUES
(62, 5, 1, 58),
(63, 4, 1, 58);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `maytinh`
--

CREATE TABLE `maytinh` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `img` varchar(50) NOT NULL,
  `gia` int(11) NOT NULL,
  `giagoc` int(11) NOT NULL,
  `baohanh` varchar(20) NOT NULL,
  `thongtin` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `maytinh`
--

INSERT INTO `maytinh` (`id`, `name`, `img`, `gia`, `giagoc`, `baohanh`, `thongtin`) VALUES
(1, 'Laptop Asus EX 12 | Chính hãng VN/A', 'asus_ex.png', 25000000, 30000000, '12 tháng ', ''),
(2, 'Laptop Asus ROG G15 | Chính hãng VN/A', 'asus_rog_g15.png', 30000000, 35000000, '12 tháng', ''),
(3, 'Laptop Asus TUF F15 | Chính hãng VN/A', 'asus_tuf_f15.png', 40000000, 45990000, '12 tháng', ''),
(4, 'Laptop Asus vivobook | Chính hãng VN/A', 'asus_vivo.png', 15990000, 25990000, '12 tháng', ''),
(5, 'Macbook Air M1| Chính hãng VN/A', 'macbook_air_m1.png', 45990000, 50000000, '12 tháng', ''),
(6, 'Macbook Pro 2023| Chính hãng VN/A', 'macbook_pro.png', 49999000, 50000000, '12 tháng ', ''),
(7, 'Macbook Pro 13 2023| Chính hãng VN/A', 'macbook_pro_13.png', 49000000, 50000000, '12 tháng', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tablet`
--

CREATE TABLE `tablet` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `img` varchar(50) NOT NULL,
  `gia` int(11) NOT NULL,
  `giagoc` int(11) NOT NULL,
  `baohanh` varchar(20) NOT NULL,
  `thongtin` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tablet`
--

INSERT INTO `tablet` (`id`, `name`, `img`, `gia`, `giagoc`, `baohanh`, `thongtin`) VALUES
(1, 'iPad 4.2 2021 WiFi 64GB | Chính hãng Apple Việt Nam', 'ipad4.png', 18990000, 20000000, '12 tháng ', ''),
(2, 'iPad 5.2 2021 WiFi 64GB | Chính hãng Apple Việt Nam', 'ipad5.png', 19990000, 21990000, '12 tháng ', ''),
(3, 'iPad 10.2 2021 WiFi 64GB | Chính hãng Apple Việt Nam', 'ipad10.png', 9990000, 11290000, '12 tháng ', ''),
(4, 'iPad 11 2022 WiFi 64GB | Chính hãng Apple Việt Nam', 'ipad11.png', 23990000, 25000000, '12 tháng ', ''),
(5, 'iPad 12 2023 WiFi 64GB | Chính hãng Apple Việt Nam', 'ipad12.png', 30990000, 35990000, '12 tháng ', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `name`, `user`, `pass`) VALUES
(1, 'Nguyễn Tiến Ninh', 'ntninh@gmail.com', 'ntninh123'),
(2, 'Lê Quang Minh', 'lqminh@gmail.com', 'lqminh123'),
(3, 'Nguyễn Hoài Sơn ', 'nhson@gmail.com', 'nhson123'),
(4, 'Nguyễn Mạnh Cường', 'nmcuong@gmail.com', 'nmcuong123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tainghe`
--

CREATE TABLE `tainghe` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `img` varchar(50) NOT NULL,
  `gia` int(11) NOT NULL,
  `giagoc` int(11) NOT NULL,
  `baohanh` varchar(20) NOT NULL,
  `thongtin` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tainghe`
--

INSERT INTO `tainghe` (`id`, `name`, `img`, `gia`, `giagoc`, `baohanh`, `thongtin`) VALUES
(1, 'Tai nghe Bluetooth Apple AirPods 2c 2022', 'air2.png', 5990000, 6990000, '12 tháng', ''),
(2, 'Tai nghe Bluetooth Apple AirPods 3 2022', 'air3.png', 7990000, 8990000, '12 tháng ', ''),
(3, 'Tai nghe  Apple Air Lightning 2021 | Chính hãng Apple ', 'airday.png', 990000, 1290000, '12 tháng ', ''),
(4, 'Tai nghe Bluetooth Apple Pro 2021 | Chính hãng Apple', 'airpro.png', 8990000, 9990000, '12 tháng ', ''),
(5, 'Tai nghe Bluetooth Apple Air 2 2022 | Chính hãng Apple ', 'air2.png', 9990000, 10000000, '12 tháng ', ''),
(6, 'Tai nghe Bluetooth Apple Air 3 2022 | Chính hãng Apple ', 'air3.png', 12000000, 12990000, '12 tháng ', ''),
(7, 'Tai nghe Bluetooth Apple Pro 2023 | Chính hãng Apple ', 'airpro.png', 14000000, 16000000, '12 tháng ', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `acc_admin`
--
ALTER TABLE `acc_admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `dienthoai`
--
ALTER TABLE `dienthoai`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_sp` (`id_sp`),
  ADD KEY `id_hoadon` (`id_hoadon`);

--
-- Chỉ mục cho bảng `maytinh`
--
ALTER TABLE `maytinh`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tablet`
--
ALTER TABLE `tablet`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tainghe`
--
ALTER TABLE `tainghe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `acc_admin`
--
ALTER TABLE `acc_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `dienthoai`
--
ALTER TABLE `dienthoai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT cho bảng `maytinh`
--
ALTER TABLE `maytinh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `tablet`
--
ALTER TABLE `tablet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tainghe`
--
ALTER TABLE `tainghe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD CONSTRAINT `hoa_don_ibfk_1` FOREIGN KEY (`id_sp`) REFERENCES `dienthoai` (`id`),
  ADD CONSTRAINT `hoa_don_ibfk_2` FOREIGN KEY (`id_hoadon`) REFERENCES `don_hang` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
