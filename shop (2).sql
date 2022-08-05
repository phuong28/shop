-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 03, 2022 lúc 06:02 PM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`admin_id`, `email`, `password`) VALUES
(1, 'ninhanh@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `categories_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`categories_id`, `name`, `slug`) VALUES
(12, 'Áo cộc tay', 'ao_coc_tay'),
(13, 'Quần dài', 'quan_bo'),
(17, 'Giày adidas', 'giay_the_thao'),
(18, 'Áo hai dây', 'ao_hai_day'),
(19, 'Áo dai', 'ao dai');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`contact_id`, `name`, `email`, `subject`) VALUES
(1, 'Ninh Thị Phượng', 'ninhphuong2k1nb@gmail.com', 'jjk'),
(2, 'Ninh Thị Phượng', 'ninhphuong2k1nb@gmail.com', 'jjk'),
(3, 'Ninh Thị Phượng', 'ninhphuong2k1nb@gmail.com', 'jjk'),
(4, 'angel', 'ninhphuong2k1nb@gmail.com', 'jjk'),
(5, 'Ninh Thị Phượng', 'ninhphuong2k1nb@gmail.com', 'jjk'),
(6, 'Ninh Thị Phượng', 'ninhphuong2k1nb@gmail.com', 'jjk'),
(7, 'Ninh Thị Phượng', 'ninhphuong2k1nb@gmail.com', 'booj nayf xaasu quas'),
(8, 'Ninh Thị Phượng', 'ninhphuong2k1nb@gmail.com', 'shop có tâm lắm'),
(9, 'Ninh Thị Phượng', 'ninhphuong2k3nb@gmail.com', 'shop cần phải cải thiện tính năng nữa nhé');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `oder`
--

CREATE TABLE `oder` (
  `order_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `address_street` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `subtotal` varchar(255) NOT NULL,
  `payment` varchar(255) NOT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `oder`
--

INSERT INTO `oder` (`order_id`, `name`, `phone_number`, `address_street`, `address`, `subtotal`, `payment`, `users_id`) VALUES
(47, 'Ninh Thị Phượng', '0773337669', '112 Trần Phú, Hà Đông', 'Ninh Bình', '240000', 'online', 3),
(48, 'adem', '0773337669', '112 Trần Phú, Hà Đông', 'Thái Bình', '360000', 'online', 3),
(49, 'Ninh Thị Phượng', '0773337669', '112 Trần Phú, Hà Đông', 'Ninh Bình', '140000', 'online', 3),
(50, 'Phạm Đoài', '0773337669', '112 Trần Phú, Hà Đông', 'Hà nội', '80000', 'cod', 3),
(52, 'Ninh Thị Phượng', '0773337669', '112 Trần Phú, Hà Đông', 'Nam Định', '240000', 'online', 8),
(53, 'Ninh Thị Phượng', '0773337669', '112 Trần Phú, Hà Đông', 'Nam Định', '240000', 'online', 3),
(54, 'Ninhh', '0773337669', '112 Trần Phú, Hà Đông', 'Ninh Bình', '480000', 'online', 10),
(55, '', '', '', 'Hà nội', '120000', 'cod', 3),
(56, 'Ninh Thị Phượng', '0773337669', '112 Trần Phú, Hà Đông', 'Ninh Bình', '400000', 'online', 3),
(57, 'Ninh Thị Phượng', '0773337669', '112 Trần Phú, Hà Đông', 'Ninh Bình', '0', 'online', 3),
(58, 'Ninh Thị Phượng', '0773337669', '112 Trần Phú, Hà Đông', 'Ninh Bình', '0', 'online', 3),
(59, 'Ninh Thị Phượng', '0773337669', '112 Trần Phú, Hà Đông', 'Ninh Bình', '0', 'online', 3),
(60, '', '', '', 'Hà nội', '120000', 'cod', 3),
(61, '', '', '', 'Hà nội', '0', 'cod', 3),
(62, '', '', '', 'Hà nội', '0', 'cod', 3),
(63, 'Ninh Thị Phượng', '0773337669', '112 Trần Phú, Hà Đông', 'Hà nội', '120000', 'online', 3),
(64, 'Ninh Thị Phượng', '0773337669', '112 Trần Phú, Hà Đông', 'Hà nội', '380000', 'cod', 3),
(65, 'Ninh Thị Phượng', '0773337669', '112 Trần Phú, Hà Đông', 'Hà nội', '380000', 'cod', 3),
(66, 'Ninh Thị Phượng', '0773337669', '112 Trần Phú, Hà Đông', 'Hà nội', '320000', 'cod', 3),
(67, 'Ninh Thị Phượng', '0773337669', '112 Trần Phú, Hà Đông', 'Hà nội', '320000', 'cod', 3),
(68, 'Ninh Thị Phượng', '0773337669', '112 Trần Phú, Hà Đông', 'Hà nội', '320000', 'cod', 3),
(69, 'Ninh Thị Phượng', '0773337669', '112 Trần Phú, Hà Đông', 'Hà nội', '0', 'cod', 3),
(70, 'Ninh Thị Phượng', '0773337669', '112 Trần Phú, Hà Đông', 'Hà nội', '280000', 'cod', 3),
(71, 'Ninh Thị Phượng', '0773337669', '112 Trần Phú, Hà Đông', 'Ninh Bình', '600000', 'online', 3),
(72, 'Ninh Thị Phượng', '0773337669', '112 Trần Phú, Hà Đông', 'Ninh Bình', '600000', 'online', 3),
(73, 'Ninh Thị Phượng', '0773337669', '112 Trần Phú, Hà Đông', 'Ninh Bình', '600000', 'online', 3),
(74, 'Ninh Thị Phượng', '0773337669', '112 Trần Phú, Hà Đông', 'Hà nội', '370000', 'online', 3),
(75, 'Ninh Thị Phượng', '0773337669', '112 Trần Phú, Hà Đông', 'Ninh Bình', '370000', 'online', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `order_detail`
--

INSERT INTO `order_detail` (`order_id`, `product_id`, `quantity`, `product_name`, `total`) VALUES
(47, 23, 2, 'Áo REAL MADRID màu đen', 240000),
(48, 25, 3, 'quần dài tao bao', 360000),
(49, 22, 1, 'Áo REAL MADRID', 140000),
(50, 24, 1, 'quần đi ngủ', 80000),
(52, 25, 2, 'quần dài tao bao', 240000),
(53, 23, 2, 'Áo REAL MADRID màu đen', 240000),
(54, 23, 2, 'Áo REAL MADRID màu đen', 240000),
(54, 24, 3, 'quần đi ngủ', 240000),
(55, 23, 1, 'Áo REAL MADRID màu đen', 120000),
(56, 23, 1, 'Áo REAL MADRID màu đen', 120000),
(56, 28, 2, 'giày nike fake', 280000),
(60, 23, 1, 'Áo REAL MADRID màu đen', 120000),
(63, 23, 1, 'Áo REAL MADRID màu đen', 120000),
(64, 28, 1, 'giày nike fake', 140000),
(64, 23, 2, 'Áo REAL MADRID màu đen', 240000),
(65, 28, 1, 'giày nike fake', 140000),
(65, 23, 2, 'Áo REAL MADRID màu đen', 240000),
(66, 29, 2, 'Áo hai dây cô gái', 320000),
(67, 29, 2, 'Áo hai dây cô gái', 320000),
(68, 29, 2, 'Áo hai dây cô gái', 320000),
(70, 28, 2, 'giày nike fake', 280000),
(71, 25, 5, 'quần dài tao bao', 550000),
(72, 25, 5, 'quần dài tao bao', 550000),
(73, 25, 5, 'quần dài tao bao', 550000),
(74, 28, 3, 'giày nike fake', 370000),
(75, 22, 3, 'Áo REAL MADRID', 370000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `products_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `images` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `addtional_information` varchar(1000) DEFAULT NULL,
  `categories_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`products_id`, `name`, `slug`, `images`, `description`, `size`, `color`, `price`, `quantity`, `addtional_information`, `categories_id`) VALUES
(22, 'Áo REAL MADRID', 'ao_coc_tay', 'images/real21_1024x1024.jpg', 'mẫu hót mới ra trong mùa giải 2022', 'M', 'Trắng', 140000, 4, 'giặt bằng tay , giặt bằng máy dễ hỏng áo', 12),
(23, 'Áo REAL MADRID màu đen', 'ao_coc_tay', 'images/ao-bong-da-real-madrid-2021-2022-phien-ban-fan-60c027f83497c.jpg', 'mẫu áo của mùa giải 2017', 'M', 'đen', 120000, 5, 'giặt bằng tay , giặt bằng máy dễ hỏng áo', 12),
(24, 'quần đi ngủ', 'ao_coc_tay', 'images/quandai.png', 'quần bằng vải thun cao cấp ', 'M', 'xám', 80000, 10, 'quần này bằng vải', 13),
(25, 'quần dài tao bao', 'quan_bo', 'images/quandai.png', 'quần mẫu đẹp , giá rẻ', 'L', 'nhiều màu', 120000, 10, 'giặt bằng mọi công cụ', 13),
(28, 'giày nike fake', 'giay_the_thao', 'images/product-1.jpg', 'mẫu hót mới ra trong mùa giải 2022', '39', 'đen', 140000, 4, 'giặt bằng mọi công cụ', 17),
(29, 'Áo hai dây cô gái', 'ao_hai_day', 'images/z3220278799372_2690bfcdc43dbaf1530caba078076f19.jpg', 'Màu xanh thể hiện sự già dặn', 'M', 'Xanh đậm', 160000, 3, 'giặt bằng máy', 18);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`users_id`, `email`, `name`, `password`) VALUES
(1, 'ninh@gmail.com', 'aa', '202cb962ac59075b964b07152d234b70'),
(2, 'b@gmail.com', 'Phượng', 'c4ca4238a0b923820dcc509a6f75849b'),
(3, 'ninhphuong2k1nb@gmail.com', 'Phượng', 'e10adc3949ba59abbe56e057f20f883e'),
(4, 'a@gmail.com', 'Ninh Thị Phượng', 'c4ca4238a0b923820dcc509a6f75849b'),
(5, 'ab@gmail.com', 'angel', 'c4ca4238a0b923820dcc509a6f75849b'),
(6, 'abc@gmail.com', 'bebe', 'c4ca4238a0b923820dcc509a6f75849b'),
(7, 'abc123@gmail.com', 'Ninh Thị Phượng', 'e10adc3949ba59abbe56e057f20f883e'),
(8, 'ngoc@gmail.com', 'ngoc', 'c4ca4238a0b923820dcc509a6f75849b'),
(9, 'ninhphuong2k2nb@gmail.com', 'Ninh Thị Phượng', 'c4ca4238a0b923820dcc509a6f75849b'),
(10, 'ninhphuong2k3nb@gmail.com', 'Phượng', 'c4ca4238a0b923820dcc509a6f75849b'),
(11, '1234@gmail.com', 'Phượng', 'c4ca4238a0b923820dcc509a6f75849b');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categories_id`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Chỉ mục cho bảng `oder`
--
ALTER TABLE `oder`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `users_id` (`users_id`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`products_id`),
  ADD KEY `categories_id` (`categories_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `categories_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `oder`
--
ALTER TABLE `oder`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `products_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `oder` (`order_id`),
  ADD CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`products_id`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`categories_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
