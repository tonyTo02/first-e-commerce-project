-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 03, 2024 at 01:30 PM
-- Server version: 8.0.30
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sellphones`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `id` int NOT NULL,
  `admin_id` int NOT NULL,
  `activity` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `old_object` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `new_object` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `level` int NOT NULL,
  `status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `level`, `status`) VALUES
(1, 'admin1', 'admin@gmail.com', '123456', 1, 1),
(5, 'admin4', 'admin4', 'admin4', 2, 0),
(8, 'admin3', 'admin3', 'admin3', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int NOT NULL,
  `customer_id` int NOT NULL,
  `phoneNumber` varchar(11) COLLATE utf8mb4_general_ci NOT NULL,
  `order_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `note` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `status` int NOT NULL,
  `total` int NOT NULL,
  `payment_method` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `customer_id`, `phoneNumber`, `order_time`, `note`, `status`, `total`, `payment_method`) VALUES
(16, 8, '', '2023-11-27 08:50:35', 'Phiền shop giao nhanh dùm em', 2, 30980000, 1),
(17, 8, '0372173242', '2023-11-27 08:55:40', 'La La La', 0, 22990000, 1),
(19, 8, '0372173242', '2023-11-27 08:56:55', '', 2, 18990000, 1),
(20, 8, '0372173242', '2023-11-27 13:35:40', '', 0, 39970000, 1),
(21, 8, '0372173242', '2023-11-27 13:42:11', '123', 1, 19990000, 2),
(25, 14, '0372173242', '2023-11-28 10:52:48', '', 1, 11990000, 2),
(26, 15, '1234567890', '2023-11-28 11:24:12', 'Giao vào đầu tuần', 1, 13990000, 1),
(27, 15, '1234567890', '2023-11-28 11:24:53', '', 2, 28980000, 2),
(28, 17, '0372173242', '2023-11-28 13:09:13', '', 0, 20990000, 1),
(29, 17, '0372173242', '2023-11-28 13:09:51', '', 1, 13990000, 2);

-- --------------------------------------------------------

--
-- Table structure for table `bill_detail`
--

CREATE TABLE `bill_detail` (
  `bill_id` int NOT NULL,
  `product_id` int NOT NULL,
  `quantity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bill_detail`
--

INSERT INTO `bill_detail` (`bill_id`, `product_id`, `quantity`) VALUES
(15, 5, 1),
(16, 21, 1),
(16, 22, 1),
(17, 32, 1),
(19, 22, 1),
(20, 21, 1),
(20, 22, 1),
(20, 28, 1),
(21, 24, 1),
(22, 36, 1),
(23, 27, 1),
(25, 21, 1),
(26, 23, 1),
(27, 24, 1),
(27, 28, 1),
(28, 25, 1),
(29, 23, 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `gender` varchar(5) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `email` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `phoneNumber` varchar(11) COLLATE utf8mb4_general_ci NOT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `token` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `gender`, `dob`, `email`, `password`, `phoneNumber`, `address`, `token`) VALUES
(1, 'Tiến', '1', '2002-11-21', 'nhattien11789@gmail.com', '129837', '', 'Đồng Nai', NULL),
(3, 'Tân Tô', '1', '1993-05-19', 'ericnew63@gmail.com', '123123123', '', 'Đồng Nai', NULL),
(8, 'abc', '1', '2002-12-11', 'abc@gmail.com', '123', '0372173242', '123nhasd', NULL),
(10, 'Tô Nhật Tiến', '1', '2002-02-11', 'hayquastroi@gmail.com', '0372173242', '087189152', 'Đồng Nai', NULL),
(14, 'tiento', '1', '2002-02-21', 'hayquatroi@gmail.com', '087189152', '0372173242', 'Đồng Nai, Việt Nam', '$2y$10$iiNjGsigY702Yx2PDEDNUOkDD29poXIyeu9sNz.UaHU/SvqMMgBRy'),
(15, 'Nguyễn Văn A', '1', '2002-01-30', 'nguyenvana@gmail.com', '123456', '1234567890', 'Quận Gò Vấp, TP. HCM', '$2y$10$Hwq.XYqRo5xOjqljhtZpu.nyzJwwMh913PFVYFt0w9fdBA9CN76.q'),
(17, 'Nguyễn Văn B', '1', NULL, 'nguyenvanb@gmail.com', '123456', '0372173242', NULL, '$2y$10$wI8YtiSRZB8d62kdHlRkXePQeAxiRDSlwK/haGqv5Qm3T07eFthim'),
(18, 'Tiến Nhật', '1', NULL, 'mothaiba@gmail.copm', '123', '123', NULL, '$2y$10$OyMu6nOv0u8xrRd8ZDs7vuQHL1URsz78WzYLyT8qMfE7QmewjwIJS'),
(19, 'abc', '1', NULL, 'abcghjk@gmail.com', '123', '123', NULL, '$2y$10$Yb5WwIu7MY5oi50nDwRVzeoozcdsFnF4K2DuKBA.OU0pDbNsiJ4Qq');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturers`
--

CREATE TABLE `manufacturers` (
  `id` int NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `image` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manufacturers`
--

INSERT INTO `manufacturers` (`id`, `name`, `address`, `phone`, `image`) VALUES
(1, 'Apple', 'Mỹ', '0372173242', 'https://tse2.mm.bing.net/th?id=OIP.ZtrNE9GnhsrUDpGXFZ2gagHaJG&pid=Api&P=0&h=220'),
(2, 'SamSung', 'Korea', '1234567', 'https://logolook.net/wp-content/uploads/2021/06/Samsung-Logo-1993.png'),
(5, 'Xiaomi', 'Trung Quốc', '0123456789', 'https://tse1.mm.bing.net/th?id=OIP.jxjygKGgTrq1zgfSG_gf_QHaHa&pid=Api&P=0&h=220'),
(6, 'OPPO', 'Trung Quốc', '0123456789', 'https://pluspng.com/img-png/oppo-logo-png-img-oppo-logo-in-svg-vector-or-png-file-format-logo-wine-3000x2000.png');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  `price` int NOT NULL,
  `image` text COLLATE utf8mb4_general_ci NOT NULL,
  `manufacturer_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `image`, `manufacturer_id`) VALUES
(21, 'iPhone XR 64GB 8GB Chính hãng VN', 'Kích thước màn hình\n\n6.7 inches\nCông nghệ màn hình\n\nSuper Retina XDR OLED\nCamera sau\n\nCamera chính: 48MP, 24 mm, ƒ/1.78,\nCamera góc siêu rộng: 12 MP, 13 mm, ƒ/2.2\nCamera Tele 5x: 12 MP, 120 mm, ƒ/2.8\nCamera Tele 2x: 12 MP, 48 mm, ƒ/1.78\nCamera trước\n\n12MP, ƒ/1.9\nChipset\n\nA17 Pro\nDung lượng RAM\n\n8 GB\nBộ nhớ trong\n\n256 GB\nPin\n\n4422 mAh\nThẻ SIM\n\n2 SIM (nano‑SIM và eSIM)\nHệ điều hành\n\niOS 17\nĐộ phân giải màn hình\n\n2796 x 1290-pixel\nTính năng màn hình\n\nTốc độ làm mới 120Hz\n460 ppi\nHDR\nTrue Tone\nDải màu rộng (P3)\nHaptic Touch\nTỷ lệ tương phản 2.000.000:1', 11990000, '1701073813.webp', 1),
(22, 'iPhone 13 128GB', 'Màn hình:\niPhone 13 trang bị một màn hình Super Retina XDR OLED kích thước 6.1 inches, mang lại trải nghiệm hiển thị độ phân giải cao 2532 x 1170 pixel. Điều này đảm bảo hình ảnh rõ nét và sắc nét.\n\nHệ điều hành:\nSản phẩm chạy trên hệ điều hành iOS 15, phiên bản mới nhất của Apple với nhiều cải tiến về giao diện và tính năng.\n\nChipset:\niPhone 13 được trang bị bộ xử lý Apple A15 Bionic, giúp cung cấp hiệu suất mạnh mẽ và hiệu quả năng lượng.\n\nBộ nhớ:\nMặc dù dung lượng RAM chưa được công bố, nhưng người dùng có nhiều lựa chọn về bộ nhớ trong, từ phiên bản 128GB đến 512GB, giúp đáp ứng nhu cầu lưu trữ đa dạng.\n\nCamera:\nHệ thống camera của iPhone 13 bao gồm camera chính Dual 12 MP với khẩu độ f/1.6 và 12 MP với khẩu độ f/2.4, mang lại khả năng chụp ảnh sắc nét và chi tiết. Camera trước 12 MP với khẩu độ f/2.2 đảm bảo chất lượng ảnh selfie cao.\n\nKết nối:\niPhone 13 hỗ trợ kết nối 5G, Wi-Fi 6 (802.11ax), Bluetooth 5.0 và NFC, mang lại trải nghiệm kết nối nhanh chóng và ổn định.\n\nPin:\nThông tin về dung lượng pin chưa được công bố, nhưng Apple thường cải thiện hiệu suất pin để đảm bảo thời lượng sử dụng lâu dài.\n\nKhác:\nNgoài ra, iPhone 13 còn có tính năng hỗ trợ MagSafe, cho phép sử dụng các phụ kiện không dây. Nó cũng được chứng nhận chống nước và bụi với tiêu chuẩn IP68, tăng cường độ bền và độ tin cậy.', 18990000, '1701073849.webp', 1),
(23, 'iPhone 12 mini', 'Kích thước màn hình\n\n6.1 inches\nCông nghệ màn hình\n\nSuper Retina XDR OLED, HDR10, Dolby Vision, Wide color gamut, True-tone\nCông nghệ màn hình\n\nOLED\nCamera sau\n\n12 MP, f/1.6, 26mm (wide), 1.4µm, dual pixel PDAF, OIS\n12 MP, f/2.4, 120˚, 13mm (ultrawide), 1/3.6\"\nCamera trước\n\n12 MP, f/2.2, 23mm (wide), 1/3.6\"\nSL 3D, (depth/biometrics sensor)\nChipset\n\nApple A14 Bionic (5 nm)\nDung lượng RAM\n\n4 GB\nBộ nhớ trong\n\n128 GB', 13990000, '1701073880.webp', 1),
(24, 'iPhone 12 PRO 256GB', 'Mạnh mẽ, siêu nhanh với chip A14, RAM 6GB, mạng 5G tốc độ cao\nRực rỡ, sắc nét, độ sáng cao - Màn hình OLED cao cấp, Super Retina XDR hỗ trợ HDR10, Dolby Vision\nChụp ảnh siêu đỉnh - Night Mode , thuật toán Deep Fusion, Smart HDR 3, camera LiDar\nBền bỉ vượt trội - Kháng nước, kháng bụi IP68, mặt lưng Ceramic Shield', 19990000, '1701073924.webp', 1),
(25, 'iPhone 13 PRO', 'Mạnh mẽ, siêu nhanh với chip A14, RAM 6GB, mạng 5G tốc độ cao\n', 20990000, '1701073962.webp', 1),
(26, 'iPhone 14 PRO 128GB', 'Trải nghiệm thị giác ấn tượng - Màn hình Dynamic Island, sắc nét với công nghệ Super Retina XDR, mượt mà 120 Hz\nTuyệt đỉnh thiết kế, tỉ mỉ từng đường nét - Nâng cấp toàn diện với kiểu dáng mới, nhiều lựa chọn màu sắc trẻ trung\nHiệu năng hàng đầu thế giới - Apple A16 Bionic xử lí nhanh, ổn định mọi tác vụ\nCamera chuẩn nhiếp ảnh chuyên nghiệp - Camera sau 48MP trang bị nhiều công nghệ chụp đa dạng', 26990000, '1701073996.webp', 1),
(27, 'iPhone 15 PRO MAX', 'iPhone 15 Pro Max thiết kế mới với chất liệu titan chuẩn hàng không vũ trụ bền bỉ, trọng lượng nhẹ, đồng thời trang bị nút Action và cổng sạc USB-C tiêu chuẩn giúp nâng cao tốc độ sạc. Khả năng chụp ảnh đỉnh cao của iPhone 15 bản Pro Max đến từ camera chính 48MP, camera UltraWide 12MP và camera telephoto có khả năng zoom quang học đến 5x. Bên cạnh đó, iPhone 15 ProMax sử dụng chip A17 Pro mới mạnh mẽ. Xem thêm chi tiết những điểm nổi bật của sản phẩm qua thông tin sau!', 29990000, '1701074030.webp', 1),
(28, 'Samsung Galaxy A05', '- Thoả sức chìm đắm trong không gian giải trí sống động - Màn hình lớn 6.7\"\" IPS hiển thị sắc nét\nVận hành tác vụ mượt mà như mong đợi - Trải nghiệm chơi game tương đối tốt với chip Mediatek G85 và RAM 4GB\nSử dụng thoải mái cả ngày dài - Pin lớn 5000mAh và hỗ trợ sạc nhanh 25W\nGhi lại trọn vẹn mọi khoảnh khắc - Camera sau đến 50MP đi kèm nhiều chế độ chụp và tính năng cải tiến', 8990000, '1701074085.webp', 1),
(29, 'Samsung Galaxy A34', 'Thiết kế thu hút mọi góc nhìn với mặt lưng tráng gương cùng 3 gam màu hiện đại\nThoả sức chụp ảnh cùng cụm 3 camera chất lượng có độ phân giải lên đến 48 MP\nMàn hình Super AMOLED tràn viền vô cực mang đến không gian hiển thị tuyệt vời\nCân mọi tác vụ với chip Dimensity 1080 kết hợp cùng RAM 8 GB và ROM 128 GB', 9990000, '1701074119.webp', 2),
(30, 'Samsung Galaxy A54', 'Nâng tầm trải nghiệm chiến game cùng màn hình có tần số quét lên đến 120Hz\nChip Exynos 1380 độc quyền giúp xử lý tốt mọi tác vụ từ cơ bản đến nâng cao\nQuay video siêu chống rung và chụp đêm cực ấn tượng với bộ 3 camera 50MP\nThiết kế đặc trưng với mặt kính sang trọng, hỗ trợ kháng nước, bụi chuẩn IP67', 10990000, '1701074152.webp', 2),
(31, 'Samsung Galaxy M14', 'Kiểu dáng hiện đại cùng nhiều lựa chọn về màu sắc giúp phù hợp với nhiều người\nKhông gian hiển thị rộng lớn với màn hình 6.6 inch cùng tấm nền LCD thế hệ mới\nChip Exynos 1330 độc quyền cùng RAM 4 GB và kết nối 5G giúp xử lý nhanh và ổn định các tác vụ thông dụng\nVô tư trải nghiệm cả ngày dài với viên pin dung lượng siêu khủng đến 6000 mAh', 11990000, '1701074177.webp', 2),
(32, 'Samsung Galaxy S22 Ultra', 'Vi xử lý mạnh mẽ nhất Galaxy - Snapdragon 8 Gen 1 (4 nm)\nCamera mắt thần bóng đêm Nightography - Chụp đêm cực đỉnh\nS Pen đầu tiên trên Galaxy S - Độ trễ thấp, dễ thao tác\nDung lượng pin bất chấp ngày đêm - Viên pin 5000mAh, sạc nhanh 45W', 22990000, '1701074210.webp', 2),
(33, 'Samsung Galaxy S22 Ultra 12GB 256GB', 'Vi xử lý mạnh mẽ nhất Galaxy - Snapdragon 8 Gen 1 (4 nm)\nCamera mắt thần bóng đêm Nightography - Chụp đêm cực đỉnh\nS Pen đầu tiên trên Galaxy S - Độ trễ thấp, dễ thao tác\nDung lượng pin bất chấp ngày đêm - Viên pin 5000mAh, sạc nhanh 45W', 26990000, '1701074245.webp', 2),
(34, 'Samsung Galaxy S23 Ultra', 'Vi xử lý mạnh mẽ nhất Galaxy - Snapdragon 8 Gen 1 (4 nm)\nCamera mắt thần bóng đêm Nightography - Chụp đêm cực đỉnh\nS Pen đầu tiên trên Galaxy S - Độ trễ thấp, dễ thao tác\nDung lượng pin bất chấp ngày đêm - Viên pin 5000mAh, sạc nhanh 45W', 21900000, '1701074275.webp', 2),
(35, 'Samsung Galaxy S23 Ultra', 'Vi xử lý mạnh mẽ nhất Galaxy - Snapdragon 8 Gen 1 (4 nm)\nCamera mắt thần bóng đêm Nightography - Chụp đêm cực đỉnh\nS Pen đầu tiên trên Galaxy S - Độ trễ thấp, dễ thao tác\nDung lượng pin bất chấp ngày đêm - Viên pin 5000mAh, sạc nhanh 45W', 24900000, '1701074309.webp', 2),
(36, 'Samsung Galaxy Z-Flip 5 256GB ', 'Thần thái nổi bật, cân mọi phong cách- Lấy cảm hứng từ thiên nhiên với màu sắc thời thượng, xu hướng\nThiết kế thu hút ánh nhìn - Gập không kẽ hỡ, dẫn đầu công nghệ bản lề Flex\nTuyệt tác selfie thoả sức sáng tạo - Camera sau hỗ trợ AI xử lí cực sắc nét ngay cả trên màn hình ngoài\nBền bỉ bất chấp mọi tình huống - Đạt chuẩn kháng bụi và nước IP68 cùng chất liệu nhôm Armor Aluminum giúp hạn chế cong và xước', 18900000, '1701074447.webp', 2),
(37, 'Samsung Galaxy Z-Fold 5 256GB', 'Thiết kế tinh tế với nếp gấp vô hình - Cải tiến nếp gấp thẩm mĩ hơn và gập không kẽ hở\nBền bỉ bất chấp mọi tình huống - Đạt chuẩn kháng bụi và nước IP68 cùng chất liệu nhôm Armor Aluminum giúp hạn chế cong và xước\nMở ra không gian giải trí cực đại với màn hình trong 7.6\" cùng bản lề Flex dẫn đầu công nghệ\nThoải mái sáng tạo mọi lúc - Bút Spen tiện dụng giúp bạn phác hoạ và ghi chép không cần đến sổ tay\nHiệu năng cân mọi tác vụ - Snapdragon® 8 Gen 2 for Galaxy xử lí mượt mà, đa nhiệm mượt mà', 25900000, '1701074474.webp', 2),
(38, 'OPPO A18', 'Trang bị chip Helio G85 đáp ứng nhu cầu giải trí hàng ngày của bạn một cách dễ dàng hơn.\nNăng lượng bền bỉ từ sáng đến đêm với pin 5000mAh kết hợp cùng công nghệ sạc nhanh 33W.\nTrang bị cụm 2 camera với camera chính 50MP - Chụp ảnh sắc nét và quay video chất lượng tốt.\nTận hưởng cảm giác mượt mà với màn hình hiển thị sáng chân thực IPS LCD.', 6900000, '1701074548.webp', 6),
(39, 'OPPO A58', 'Trang bị chip Helio G85 đáp ứng nhu cầu giải trí hàng ngày của bạn một cách dễ dàng hơn.\nNăng lượng bền bỉ từ sáng đến đêm với pin 5000mAh kết hợp cùng công nghệ sạc nhanh 33W.\nTrang bị cụm 2 camera với camera chính 50MP - Chụp ảnh sắc nét và quay video chất lượng tốt.\nTận hưởng cảm giác mượt mà với màn hình hiển thị sáng chân thực IPS LCD.', 7900000, '1701074566.webp', 6),
(40, 'OPPO A78', 'Trang bị chip Helio G85 đáp ứng nhu cầu giải trí hàng ngày của bạn một cách dễ dàng hơn.\nNăng lượng bền bỉ từ sáng đến đêm với pin 5000mAh kết hợp cùng công nghệ sạc nhanh 33W.\nTrang bị cụm 2 camera với camera chính 50MP - Chụp ảnh sắc nét và quay video chất lượng tốt.\nTận hưởng cảm giác mượt mà với màn hình hiển thị sáng chân thực IPS LCD.', 7990000, '1701074591.webp', 6),
(41, 'OPPO Find N2 Flip', 'Bậc thầy thiết kế, siêu mỏng nhe - Mỏng chỉ 239g, nhẹ chỉ 5.8mm với nếp gấp tàng hình\nRực rõ mọi màn hình hiển thị - Kích thước lên đến 7.8mm, độ phân giải 2K+ cùng tần số quét 120Hz mượt mà\nBậc thầy nhiếp ảnh - 3 camera hàng đầu đến 64MP kết hợp cùng đa dạng chế độ chụp hoàn hảo\nNâng cao hiệu suất sử dụng - Chip MediaTek Dimensity 9200 5G mạnh mẽ cùng hàng loạt tính năng đa nhiệm thông tinh', 14900000, '1701074614.webp', 6),
(42, 'OPPO Reno 8T 4G 256GB', 'Bậc thầy thiết kế, siêu mỏng nhe - Mỏng chỉ 239g, nhẹ chỉ 5.8mm với nếp gấp tàng hình\nRực rõ mọi màn hình hiển thị - Kích thước lên đến 7.8mm, độ phân giải 2K+ cùng tần số quét 120Hz mượt mà\nBậc thầy nhiếp ảnh - 3 camera hàng đầu đến 64MP kết hợp cùng đa dạng chế độ chụp hoàn hảo\nNâng cao hiệu suất sử dụng - Chip MediaTek Dimensity 9200 5G mạnh mẽ cùng hàng loạt tính năng đa nhiệm thông tinh', 9900000, '1701074649.webp', 6),
(43, 'OPPO Reno 10 5G Blue', 'Bậc thầy thiết kế, siêu mỏng nhe - Mỏng chỉ 239g, nhẹ chỉ 5.8mm với nếp gấp tàng hình\nRực rõ mọi màn hình hiển thị - Kích thước lên đến 7.8mm, độ phân giải 2K+ cùng tần số quét 120Hz mượt mà\nBậc thầy nhiếp ảnh - 3 camera hàng đầu đến 64MP kết hợp cùng đa dạng chế độ chụp hoàn hảo\nNâng cao hiệu suất sử dụng - Chip MediaTek Dimensity 9200 5G mạnh mẽ cùng hàng loạt tính năng đa nhiệm thông tinh', 12900000, '1701074678.webp', 6),
(44, 'OPPO Find N3 Flip Yellow', 'Bậc thầy thiết kế, siêu mỏng nhe - Mỏng chỉ 239g, nhẹ chỉ 5.8mm với nếp gấp tàng hình\nRực rõ mọi màn hình hiển thị - Kích thước lên đến 7.8mm, độ phân giải 2K+ cùng tần số quét 120Hz mượt mà\nBậc thầy nhiếp ảnh - 3 camera hàng đầu đến 64MP kết hợp cùng đa dạng chế độ chụp hoàn hảo\nNâng cao hiệu suất sử dụng - Chip MediaTek Dimensity 9200 5G mạnh mẽ cùng hàng loạt tính năng đa nhiệm thông tinh', 16900000, '1701074704.webp', 6),
(45, 'Xiaomi Redmi Note 12 8GB 128GB', 'Trải nghiệm hình ảnh mượt mà và liền mạch nhờ tốc độ làm mới cao 120Hz.\nHiệu năng vượt trội và được tăng cường với chip xử lý Snapdragon® 685 6nm mạnh mẽ.\nNăng lượng cho cả ngày dài nhờ vào viên pin lên đến 5000mAh đi kèm sạc nhanh 33W\nBắt trọn mọi khoảnh khắc của bạn với bộ 3 camera 50MP.', 12900000, '1701074765.webp', 5),
(46, 'Xiaomi 13 8GB 256GB', 'Nhiếp ảnh chuyên ngiệp, nắm giữ tuyệt tác trong tầm tay - Cụm camera đến, ống kính Leica với 2 phong cách ảnh\nHiệu năng bất chấp mọi tác vụ - Bộ vi xử lý Dimensity 9200+ Ultra mạnh mẽ cùng RAM 12GB cho đa nhiệm mượt mà\nNăng lượng bất tận cả ngày - Pin 5000mAh cùng sạc nhanh 120W, sạc đầy chỉ trong 19 phút\nMàn hình sáng rực rỡ, cuộn lướt thật mượt mà - Màn hình 144hz cùng công nghệ AMOLED CrystalRes', 10900000, '1701074796.webp', 5),
(47, 'Xiaomi 13T PRO 5GB Thumb Xanh', 'Nhiếp ảnh chuyên ngiệp, nắm giữ tuyệt tác trong tầm tay - Cụm camera đến, ống kính Leica với 2 phong cách ảnh\nHiệu năng bất chấp mọi tác vụ - Bộ vi xử lý Dimensity 9200+ Ultra mạnh mẽ cùng RAM 12GB cho đa nhiệm mượt mà\nNăng lượng bất tận cả ngày - Pin 5000mAh cùng sạc nhanh 120W, sạc đầy chỉ trong 19 phút\nMàn hình sáng rực rỡ, cuộn lướt thật mượt mà - Màn hình 144hz cùng công nghệ AMOLED CrystalRes', 14900000, '1701074837.webp', 5),
(48, 'Xiaomi Redmi 13C 6GB 128GB', 'Nhiếp ảnh chuyên ngiệp, nắm giữ tuyệt tác trong tầm tay - Cụm camera đến, ống kính Leica với 2 phong cách ảnh\nHiệu năng bất chấp mọi tác vụ - Bộ vi xử lý Dimensity 9200+ Ultra mạnh mẽ cùng RAM 12GB cho đa nhiệm mượt mà\nNăng lượng bất tận cả ngày - Pin 5000mAh cùng sạc nhanh 120W, sạc đầy chỉ trong 19 phút\nMàn hình sáng rực rỡ, cuộn lướt thật mượt mà - Màn hình 144hz cùng công nghệ AMOLED CrystalRes', 8900000, '1701074873.webp', 5),
(49, 'Xiaomi Redmi Note 12S', 'Ổn định hiệu năng - Chip MediaTek Helio G85 mạnh mẽ xử lí tốt các tác vụ thường ngày\nSử dụng đa nhiệm nhiều ứng dụng, thao tác cùng lúc tốt hơn - Hỗ trợ bộ nhớ mở rộng\nGiải trí thả ga - Màn hình 6.71\" HD+ cho khung hình rõ nét\nẢnh sắc nét với chế độ chụp đêm - Camera kép AI 50MP', 8990000, '1701074895.webp', 5);

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `product_id` int NOT NULL,
  `type_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`product_id`, `type_id`) VALUES
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 2),
(29, 2),
(30, 2),
(31, 2),
(32, 2),
(33, 2),
(34, 2),
(35, 2),
(36, 2),
(37, 2),
(38, 3),
(39, 3),
(40, 3),
(41, 3),
(42, 3),
(43, 3),
(44, 3),
(45, 4),
(46, 4),
(47, 4),
(48, 4),
(49, 4);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id` int NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `name`, `image`) VALUES
(1, 'iPhone', 'https://tse3.mm.bing.net/th?id=OIP.vDLw4X1GRi7LLbtHGRQxPwHaHa&pid=Api&P=0&h=220'),
(2, 'Samsung', 'https://bachlongmobile.com/bnews/wp-content/uploads/2019/07/let3.jpg'),
(3, 'Xiaomi', 'https://tse1.mm.bing.net/th?id=OIP.eWHF_S4HnLCDGbhLJLQGdwHaFb&pid=Api&P=0&h=220'),
(4, 'OPPO', 'https://tse2.mm.bing.net/th?id=OIP.CZbmiNlxVbwTRO4pAuQxyAHaFj&pid=Api&P=0&h=220');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD PRIMARY KEY (`bill_id`,`product_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manufacturers`
--
ALTER TABLE `manufacturers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`product_id`,`type_id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `manufacturers`
--
ALTER TABLE `manufacturers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
