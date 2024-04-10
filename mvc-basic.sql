-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 09, 2024 at 12:32 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvc-basic`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `name`, `avatar`) VALUES
(1, 'Cantona', 'uploads/authors/1711812944-OT_LR_2_1080x5661611683583510_large.jpg'),
(3, 'Messi', 'uploads/authors/1712223512-banner.jpg'),
(4, 'CR7', 'uploads/authors/1712227561-Manchester-United-badge.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`) VALUES
(1, 'Casio'),
(2, 'Rolex'),
(3, 'G-Shock'),
(4, 'Apple'),
(5, 'Titan'),
(6, 'Citizen');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int NOT NULL,
  `user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`) VALUES
(6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

CREATE TABLE `cart_items` (
  `id` int NOT NULL,
  `cart_id` int NOT NULL,
  `product_id` int NOT NULL,
  `quantity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cart_items`
--

INSERT INTO `cart_items` (`id`, `cart_id`, `product_id`, `quantity`) VALUES
(15, 6, 23, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Đồng hồ Rolex'),
(2, 'Đồng hồ Casio'),
(3, 'Đồng hồ Calvin Klein'),
(4, 'Đồng hồ Cartier'),
(5, 'Đồng hồ Citizen'),
(6, 'Đồng hồ G-Shock'),
(7, 'Đồng hồ Apple'),
(8, 'Đồng hồ Titan');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` int NOT NULL,
  `name` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `name`) VALUES
(6, 'Đen'),
(2, 'Đỏ'),
(5, 'Hồng'),
(3, 'Tím'),
(7, 'Trắng'),
(4, 'Vàng'),
(1, 'Xanh');

-- --------------------------------------------------------

--
-- Table structure for table `glasses`
--

CREATE TABLE `glasses` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `glasses`
--

INSERT INTO `glasses` (`id`, `name`) VALUES
(1, 'Kính nhựa'),
(2, 'Kính thủy tinh'),
(3, 'Kính cường lực');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_phone` varchar(255) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `total_bill` int NOT NULL,
  `status_delivery` varchar(255) NOT NULL COMMENT 'Trang thái vận chuyển đơn hàng: Dưới đây đang lấy theo trạng thái của shopee. 0: chờ xác nhận 1: chờ lấy hàng 2: chờ giao hàng 3: đã giao -1: đã hủy',
  `status_payment` varchar(255) NOT NULL COMMENT 'Trạng thái thanh toán: 0: chưa thanh toán 1: đã thanh toán -1: đơn hàng đã hủy',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Ngày tạo đơn hàng',
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Ngày cập nhật cuối cùng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `user_name`, `user_email`, `user_phone`, `user_address`, `total_bill`, `status_delivery`, `status_payment`, `created_at`, `updated_at`) VALUES
(1, 1, 'Đinh Văn Tùng', 'tungph46171@fpt.edu.vn', '0123456789', 'Nam Tu Liem, Ha Noi', 178000, 'Đã giao', 'Đã thanh toán', '2024-04-08 08:04:00', '2024-04-08 21:37:49'),
(2, 1, 'Cô 2 báo', 'co2bao@fpt.edu.vn', '0366833338', 'Bình Dương, Việt Nam', 899000, 'Đơn hàng đã hủy', 'Đã hủy đặt hàng', '2024-04-08 08:12:11', '2024-04-08 21:37:02'),
(3, 1, 'Hòa Minzy', 'hoaminzy@gmail.com', '0222666222', 'Từ Sơn, Bắc Ninh, Việt Nam', 899000, 'Đã giao', 'Đã thanh toán', '2024-04-09 02:30:24', '2024-04-08 21:34:54'),
(4, 1, 'Đinh Văn Tùng', 'tungph46171@fpt.edu.vn', '0123456789', 'Nam Tu Liem, Ha Noi', 35997000, '0', '0', '2024-04-09 04:46:11', '2024-04-09 04:46:11'),
(5, 2, 'Nguyễn Văn A', 'a@gmail.com', '0999666999', 'Bắc Từ Liêm, Hà Nội', 21999000, '0', '0', '2024-04-09 04:57:44', '2024-04-09 04:57:44');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int NOT NULL,
  `order_id` int NOT NULL,
  `product_id` int NOT NULL,
  `quantity` int NOT NULL,
  `price` int NOT NULL COMMENT 'ưu tiên lưu "price" hơn "regular".'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`, `price`) VALUES
(1, 1, 1, 2, 89000),
(2, 2, 22, 1, 899000),
(3, 3, 22, 1, 899000),
(4, 4, 20, 3, 11999000),
(5, 5, 23, 2, 5000000),
(6, 5, 20, 1, 11999000);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int NOT NULL,
  `category_id` int NOT NULL,
  `author_id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `excerpt` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `img_thumnail` varchar(255) NOT NULL,
  `img_cover` varchar(255) DEFAULT NULL,
  `content` text,
  `is_trending` tinyint(1) NOT NULL DEFAULT '0',
  `view_count` int NOT NULL DEFAULT '0',
  `status` enum('draff','published') NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `author_id`, `title`, `excerpt`, `img_thumnail`, `img_cover`, `content`, `is_trending`, `view_count`, `status`, `created_at`, `updated_at`) VALUES
(1, 6, 1, 'Đấm bốc rực lửa trận chung kết SEAGAMES', 'Ủy ban kỷ luật của Liên đoàn Bóng đá châu Á (AFC) đã có án phạt nặng dành cho U22 Thái Lan và U22 Indonesia sau vụ ẩu đả ở chung kết bóng đá nam SEA Games 32.', 'uploads/posts/1711820676-meme quỳ.png', 'uploads/posts/1712424139-Manchester-United-badge.jpg', '<p>C&oacute; tổng cộng 14 người phải nhận &aacute;n phạt từ&nbsp;AFC. Trong đ&oacute; ph&iacute;a Indonesia c&oacute; 3 cầu thủ v&agrave; 4 th&agrave;nh vi&ecirc;n ban huấn luyện bị phạt. C&ograve;n&nbsp;<a class=\"link-inline-content\" title=\"Th&aacute;i Lan\" href=\"https://tuoitre.vn/thai-lan.html\" data-rel=\"follow\">Th&aacute;i Lan</a> c&oacute; 2 cầu thủ v&agrave; 5 th&agrave;nh vi&ecirc;n ban huấn luyện bị phạt. Cụ thể, 3 cầu thủ<a class=\"link-inline-content\" title=\" Indonesia\" href=\"https://tuoitre.vn/nhung-pha-vao-bong-tho-bao-cua-cau-thu-indonesia-va-argentina-20230620080521465.htm\" data-rel=\"follow\">&nbsp;Indonesia</a> l&agrave; tiền đạo Titan Agung v&agrave; hậu vệ Komang Teguh bị treo gi&ograve; 6 trận, nộp phạt 1.000 USD mỗi người. Tiền vệ Taufany Muslihuddin chỉ bị treo gi&ograve; 6 trận. C&ograve;n 4 th&agrave;nh vi&ecirc;n ban huấn luyện Indonesia l&agrave; Sahari Gultom, Tegar Diokta, Ahmad Nizar, Toid Sarnadi cũng bị cấm 6 trận v&agrave; nộp phạt tổng cộng 3.000 USD.</p>\r\n<p>Ph&iacute;a Th&aacute;i Lan, thủ m&ocirc;n&nbsp;<a class=\"link-inline-content\" title=\"Soponwit Rakyart \" href=\"https://tuoitre.vn/cau-thu-thai-lan-dam-guc-thu-mon-doi-phuong-roi-an-mung-nhu-the-ghi-ban-20230222164608062.htm\" data-rel=\"follow\">Soponwit Rakyart&nbsp;</a>bị phạt nặng nhất khi bị cấm thi đấu 6 trận v&agrave; nộp phạt 1.000 USD.&nbsp;</p>\r\n<p>Ri&ecirc;ng tiền vệ Chayapipat Supunpasuch cũng bị cấm thi đấu 6 trận nhưng kh&ocirc;ng bị phạt tiền. C&ograve;n lại 5 th&agrave;nh vi&ecirc;n ban huấn luyện U22 Th&aacute;i Lan l&agrave; Pattarawut Wongsriphuek, Mayeid Mad-Adam, Purachet Todsanit, Thirapak Prueangna, Bamrung Boonprom đều bị cấm 6 trận v&agrave; nộp phạt số tiền tổng cộng 2.000 USD.&nbsp;</p>\r\n<p><a class=\"link-inline-content\" title=\"Hiệp hội b&oacute;ng đ&aacute; Th&aacute;i Lan\" href=\"https://tuoitre.vn/thua-kien-siam-sports-hiep-hoi-bong-da-thai-lan-phai-boi-thuong-hon-38-ti-dong-20190824153503115.htm\" data-rel=\"follow\">Hiệp hội B&oacute;ng đ&aacute; Th&aacute;i Lan</a>&nbsp;(FAT) cũng phải nộp phạt 10.000 USD v&igrave; đ&atilde; vi phạm điều 51.1 của Bộ quy tắc kỷ luật v&agrave; đạo đức AFC.</p>\r\n<p>Chung kết b&oacute;ng đ&aacute; nam<a class=\"link-inline-content\" title=\" SEA Games 32 \" href=\"https://tuoitre.vn/tong-ket-sea-games-32-the-thao-viet-nam-khong-duoc-ngu-quen-tren-chien-thang-20230706201006736.htm\" data-rel=\"follow\">&nbsp;SEA Games 32&nbsp;</a>giữa U22 Th&aacute;i Lan với U22 Indonesia diễn ra ng&agrave;y 16-5 tại Campuchia. Trận đấu đ&atilde; diễn ra hết sức hấp dẫn v&agrave; kịch t&iacute;nh, với chiến thắng chung cuộc 5-2 nghi&ecirc;ng về Indonesia sau 120 ph&uacute;t.&nbsp;</p>\r\n<p>Nhưng trận cầu được đ&aacute;nh gi&aacute; l&agrave; \"kịch t&iacute;nh nhất lịch sử\" giải đấu đ&atilde; bị vấy bẩn với m&agrave;n đ&aacute;nh nhau dữ dội giữa hai đội v&agrave;o cuối hiệp hai v&agrave; đầu hiệp phụ thứ nhất.&nbsp;</p>\r\n<p>Vụ đ&aacute;nh nhau n&agrave;y sau đ&oacute; đ&atilde; được b&aacute;o ch&iacute; thế giới đưa tin v&agrave; ch&iacute;nh chủ tịch&nbsp;<a class=\"link-inline-content\" title=\"FIFA\" href=\"https://tuoitre.vn/fifa-thay-doi-luat-viet-vi-tran-dau-se-co-them-nhieu-ban-thang-20230703160255404.htm\" data-rel=\"follow\">FIFA</a> Gianni Infantino đ&atilde; l&ecirc;n tiếng chỉ tr&iacute;ch hai đội. Điều n&agrave;y l&agrave;m cho h&igrave;nh ảnh b&oacute;ng đ&aacute; Đ&ocirc;ng Nam &Aacute; cũng trở n&ecirc;n xấu đi.&nbsp;</p>', 1, 0, 'published', '2024-03-31 00:44:36', '2024-04-06 17:22:19'),
(2, 3, 3, 'Huấn hoa hòe bị mất nick FB', 'Dạo gần đây, một số sờ-chim-mơ cũng như yang hồ mạng có tiếng bất ngờ bị hack tài khoản FB mà không rõ nguyên do...', 'uploads/posts/1712172067-id card_huấn hh.jpg', 'uploads/posts/1712172067-phấn đào.jpg', '<p class=\"Normal\">Đ&acirc;y kh&ocirc;ng phải lần đầu c&aacute;c k&ecirc;nh YouTube lớn ở Việt Nam bị chiếm quyền quản l&yacute; v&agrave; livestream dự &aacute;n tiền số. Th&aacute;ng 5/2022, k&ecirc;nh YouTube FapTV với 13 triệu lượt theo d&otilde;i&nbsp;<a href=\"https://vnexpress.net/kenh-youtube-viet-13-trieu-sub-bi-hack-de-lua-tien-dien-tu-4469162.html\" rel=\"dofollow\" data-itm-source=\"#vn_source=Detail-SoHoa_CongNghe_BaoMat-4729453&amp;vn_campaign=Box-InternalLink&amp;vn_medium=Link-BiDoiTen&amp;vn_term=Desktop&amp;vn_thumb=0\" data-itm-added=\"1\">bị đổi t&ecirc;n</a>&nbsp;th&agrave;nh \"Tesla US\" v&agrave; ph&aacute;t video phỏng vấn giả mạo một số l&atilde;nh đạo tiền số. K&ecirc;nh n&agrave;y cũng để lại đường link, lừa người d&ugrave;ng về việc tặng tiền số.</p>\r\n<p class=\"Normal\">Một số người nổi tiếng như Trấn Th&agrave;nh, Hồ Quang Hiếu, Lynklee, L&yacute; Hải cũng từng bị chiếm quyền điều khiển k&ecirc;nh v&agrave; ph&aacute;t những nội dung về tiền số.</p>\r\n<p class=\"Normal\">Độ Mixi, sinh năm 1989, bắt đầu l&agrave;m streamer từ năm 2017 v&agrave; nhanh ch&oacute;ng trở th&agrave;nh c&aacute;i t&ecirc;n nổi bật tại Việt Nam. Năm 2020, anh lập kỷ lục người xem trực tuyến c&ugrave;ng l&uacute;c trong một buổi stream với hơn 240.000. Ngo&agrave;i c&ocirc;ng việc ch&iacute;nh, anh c&ograve;n ph&aacute;t h&agrave;nh MV, tham gia chương tr&igrave;nh thực tế&nbsp;<em>Sao nhập ngũ.</em></p>\r\n<div class=\"width_common box-tinlienquanv2 \">\r\n<article class=\"item-news\">\r\n<div class=\"thumb-art\"><a class=\"thumb thumb-5x3\" title=\"K&ecirc;nh YouTube Việt 13 triệu sub bị hack để lừa tiền điện tử\" href=\"https://vnexpress.net/kenh-youtube-viet-13-trieu-sub-bi-hack-de-lua-tien-dien-tu-4469162.html\" data-itm-source=\"#vn_source=Detail-SoHoa_CongNghe_BaoMat-4729453&amp;vn_campaign=Box-TinXemThem&amp;vn_medium=Item-1&amp;vn_term=Desktop&amp;vn_thumb=1\" data-itm-added=\"1\"><picture><source srcset=\"https://i1-sohoa.vnecdn.net/2022/05/28/img2475-1653725586-1653725607-5415-1653725708.jpg?w=180&amp;h=108&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=-MyuzHt22XeWWI4wr9qFvQ 1x, https://i1-sohoa.vnecdn.net/2022/05/28/img2475-1653725586-1653725607-5415-1653725708.jpg?w=180&amp;h=108&amp;q=100&amp;dpr=2&amp;fit=crop&amp;s=Wmbc768GtHL9FV1t4_RoIg 2x\" data-srcset=\"https://i1-sohoa.vnecdn.net/2022/05/28/img2475-1653725586-1653725607-5415-1653725708.jpg?w=180&amp;h=108&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=-MyuzHt22XeWWI4wr9qFvQ 1x, https://i1-sohoa.vnecdn.net/2022/05/28/img2475-1653725586-1653725607-5415-1653725708.jpg?w=180&amp;h=108&amp;q=100&amp;dpr=2&amp;fit=crop&amp;s=Wmbc768GtHL9FV1t4_RoIg 2x\"></picture></a></div>\r\n</article>\r\n</div>', 1, 0, 'published', '2024-04-04 02:21:07', '2024-04-03 19:23:37'),
(3, 8, 3, 'Quang Hải đeo đồng hồ 700 triệu, thảnh thơi chơi cờ khi chờ Chu Thanh Huyền trang điểm, thái độ thế nào sau ồn ào với studio ảnh cưới?', 'Gần trưa 6/4, tiền vệ ĐT Việt Nam xuất hiện tại sảnh khách sạn JW Marriot - nơi sẽ diễn ra tiệc cưới của anh và bà xã Chu Thanh Huyền vào tối cùng ngày. Quang Hải đã làm kiểu tóc thời thượng, sẵn sàng làm chú rể bảnh bao. Trong khi chờ cô dâu Chu Thanh Huyền, Quang Hải ngồi tại sảnh, thảnh thơi trò chuyện cùng người quen.', 'uploads/posts/1712424437-Manchester-United-badge.jpg', 'uploads/posts/1712424497-Manchester-United-badge.jpg', '<p>Gần trưa 6/4, tiền vệ ĐT Việt Nam xuất hiện tại sảnh kh&aacute;ch sạn JW Marriot - nơi sẽ diễn ra tiệc cưới của anh v&agrave; b&agrave; x&atilde; Chu Thanh Huyền v&agrave;o tối c&ugrave;ng ng&agrave;y. Quang Hải đ&atilde; l&agrave;m kiểu t&oacute;c thời thượng, sẵn s&agrave;ng l&agrave;m ch&uacute; rể bảnh bao. Trong khi chờ c&ocirc; d&acirc;u Chu Thanh Huyền, Quang Hải ngồi tại sảnh, thảnh thơi tr&ograve; chuyện c&ugrave;ng người quen.</p>\r\n<p>Cầu thủ sinh năm 1997 diện một bộ đồ b&ograve; thoải m&aacute;i với m&agrave;u xanh y&ecirc;u th&iacute;ch. Tr&ecirc;n tay anh l&agrave; chiếc đồng hồ Rolex với gi&aacute; hơn 700 triệu đồng. Quang Hải nở nụ cười hạnh ph&uacute;c. Khoảnh khắc kh&aacute;c, Quang Hải c&ugrave;ng một người kh&aacute;c ngồi đ&aacute;nh cờ thảnh thơi tại kh&aacute;ch sạn trong khi c&ocirc; d&acirc;u Chu Thanh Huyền vẫn chưa lộ diện. Theo kế hoạch, Quang Hải v&agrave; Chu Thanh Huyền sẽ c&ugrave;ng bố mẹ tổng duyệt s&acirc;n khấu, khớp chương tr&igrave;nh c&ugrave;ng MC trước rồi cặp đ&ocirc;i mới trở về ph&ograve;ng kh&aacute;ch sạn nghỉ ngơi v&agrave; chuẩn bị đ&oacute;n kh&aacute;ch v&agrave;o buổi chiều. C&ocirc; d&acirc;u ch&uacute; rể được kh&aacute;ch sạn sắp xếp một ph&ograve;ng ri&ecirc;ng sang trọng, nằm trong g&oacute;i tổ chức tiệc cưới tại đ&acirc;y.</p>\r\n<p>Đ&acirc;y l&agrave; lần đầu Quang Hải v&agrave; Chu Thanh Huyền xuất hiện trước truyền th&ocirc;ng sau drama với studio chụp ảnh cưới đang g&acirc;y tranh c&atilde;i tr&ecirc;n mạng x&atilde; hội. Quang Hải giữ th&aacute;i độ b&igrave;nh thản, tập trung cho ng&agrave;y vui của anh. Vốn tiền vệ sinh năm 1997 cũng kh&aacute; k&iacute;n tiếng v&agrave; &iacute;t khi chia sẻ về những thị phi quanh m&igrave;nh. Tuy nhi&ecirc;n, người th&acirc;n, bạn b&egrave; xung quanh Quang Hải cũng đ&atilde; l&ecirc;n tiếng để bảo vệ h&igrave;nh ảnh của anh c&ugrave;ng c&ocirc; d&acirc;u Chu Thanh Huyền trước lời ẩn &yacute; \"x&oacute;a ảnh hay nhận tiền\" đến từ studio nọ.</p>', 0, 0, 'published', '2024-04-07 00:27:17', '2024-04-06 17:28:17'),
(4, 6, 1, 'Samsung đang phát triển mẫu Galaxy Watch FE giá rẻ và đây là bằng chứng', 'Samsung là một trong những nhà sản xuất điện thoại lớn nhất thế giới. Bên cạnh điện thoại, họ còn sản xuất đồng hồ thông minh, tai nghe và nhiều sản phẩm khác. Đặc biệt dòng Galaxy Watch rất được ưa chuộng.\r\nMột lý do khiến những chiếc đồng hồ này bán chạy là vì chúng có nhiều tính năng thú vị. Giờ đây, một tin đồn mới cho biết Samsung đang phát triển model Galaxy Watch FE (Fan Edition) đi kèm các tính năng tương tự như Galaxy Watch 4 và giá phải chăng.', 'uploads/posts/1712424719-nike đen.png', NULL, '<p>Nguồn tin h&ocirc;m nay cho biết, Galaxy Watch FE chuẩn bị ra mắt tại c&aacute;c thị trường to&agrave;n cầu, bao gồm cả Mỹ v&agrave; H&agrave;n Quốc với số model l&agrave; SM-R866F, SM-R866U, SM-R866N. C&aacute;c số model n&agrave;y kh&aacute; giống với Galaxy Watch 4 n&ecirc;n khả năng cao hai thiết bị n&agrave;y l&agrave; phi&ecirc;n bản đổi thương hiệu của nhau.</p>\r\n<p>&nbsp;</p>\r\n<p>Do đ&oacute;, khả năng cao Galaxy Watch FE sẽ tr&ocirc;ng rất giống Galaxy Watch 4 với mặt đồng hồ tr&ograve;n v&agrave; viền xoay. Đồng hồ th&ocirc;ng minh c&oacute; thể sẽ chạy tr&ecirc;n hệ điều h&agrave;nh Google Wear.</p>\r\n<p>Về mặt t&iacute;ch cực, Galaxy Watch FE dự kiến sẽ c&oacute; nhiều t&iacute;nh năng theo d&otilde;i sức khỏe cao cấp với mức gi&aacute; phải chăng hơn. Đ&acirc;y l&agrave; chiếc smartwatch d&agrave;nh cho những người h&acirc;m mộ Samsung muốn c&oacute;&nbsp;<a title=\"c&ocirc;ng nghệ\" href=\"https://cellphones.com.vn/sforum\">c&ocirc;ng nghệ</a> mới nhất m&agrave; kh&ocirc;ng phải tốn nhiều tiền. C&ugrave;ng chờ xem nh&eacute;!</p>', 0, 0, 'published', '2024-04-07 00:31:59', '2024-04-07 00:31:59');

-- --------------------------------------------------------

--
-- Table structure for table `post_tag`
--

CREATE TABLE `post_tag` (
  `post_id` int NOT NULL,
  `tag_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `post_tag`
--

INSERT INTO `post_tag` (`post_id`, `tag_id`) VALUES
(1, 10),
(2, 7),
(3, 1),
(4, 10);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `size_id` int NOT NULL,
  `glass_id` int NOT NULL,
  `gender` tinyint(1) DEFAULT NULL,
  `origin` varchar(255) NOT NULL,
  `description` text,
  `warranty_id` int NOT NULL,
  `diameter` varchar(50) NOT NULL,
  `thickness` varchar(50) NOT NULL,
  `strap_id` int NOT NULL,
  `color_id` int NOT NULL,
  `price` float NOT NULL,
  `brand_id` int NOT NULL,
  `price_sale` float DEFAULT NULL,
  `tag_id` int DEFAULT NULL,
  `category_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `img`, `size_id`, `glass_id`, `gender`, `origin`, `description`, `warranty_id`, `diameter`, `thickness`, `strap_id`, `color_id`, `price`, `brand_id`, `price_sale`, `tag_id`, `category_id`) VALUES
(1, 'Đồng hồ Casio 34 mm Nam MTP-M305L-7AVDF', 'uploads/products/1712226129-nike.jpg', 3, 3, 1, 'Nhật Bản', 'Thương hiệu đồng hồ nổi tiếng đến từ Nhật Bản không ngừng cải tiến và cho ra mắt những dòng sản phẩm chất lượng phù hợp với nhiều đối tượng khách hàng. Những dòng sản phẩm nổi tiếng của Casio là: G-Shock với thiết kế mạnh mẽ cùng độ bền cao, Edifice thiết kế hiện đại cùng nhiều tính năng vượt trội, Sheen với thiết kế cổ điển và sang trọng,…', 2, '36', '9', 2, 6, 100000, 1, 89000, 2, 2),
(20, 'Citizen Tsuyosa NJ0154', 'uploads/products/1712226851-sp1.jpg', 4, 2, 1, 'Thụy Sĩ', 'Mẫu Citizen NJ0154-80H phiên bản mặt kính chất liệu kính Sapphire với kích thước nam tính 40mm, kết hợp cùng mẫu dây đeo kim loại dây vàng demi phong cách thời trang sang trọng.', 3, '40', '8', 4, 7, 12000000, 6, 11999000, 9, 5),
(22, 'Casio LTP-V006L-4BUDF', 'uploads/products/1712227257-sp1.jpg', 1, 3, 0, 'Thái Lan', 'Mẫu Casio LTP-V006L-4BUDF mặt số tròn nhỏ nữ tính size 25mm thiết kế đơn giản trẻ trung chức năng 3 kim, phối cùng bộ dây da phiên bản da trơn phối tone màu hồng.', 1, '35', '7', 2, 5, 930000, 1, 899000, 2, 2),
(23, 'Đồng hồ G-SHOCK 2100 45.4 mm Nam GM-2100-1ADR', 'uploads/products/1712613252-Manchester-United-badge.jpg', 5, 3, 1, 'Nhật Bản', 'Khỏe khoắn, cuốn hút và dũng mãnh\r\nChữ G trong từ G-Shock được bắt nguồn từ chữ cái đầu của từ Gravity, nghĩa là không trọng lực. G-Shock được hiểu với khả năng chống va đập, rơi vỡ. Cái tên đã nói rõ về tính năng và thiết kế của chiếc đồng hồ.', 3, '45.4', '12', 1, 2, 5400000, 3, 5000000, 10, 6);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int NOT NULL,
  `key` varchar(50) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` int NOT NULL,
  `name` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `name`) VALUES
(1, 'S'),
(2, 'M'),
(3, 'L'),
(4, 'XL'),
(5, 'XXL');

-- --------------------------------------------------------

--
-- Table structure for table `status_delivery`
--

CREATE TABLE `status_delivery` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `status_delivery`
--

INSERT INTO `status_delivery` (`id`, `name`) VALUES
(1, 'Chờ xác nhận'),
(2, 'Chờ lấy hàng'),
(3, 'Đơn hàng đang vận chuyển'),
(4, 'Đã giao'),
(5, 'Đơn hàng đã hủy');

-- --------------------------------------------------------

--
-- Table structure for table `status_payment`
--

CREATE TABLE `status_payment` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `status_payment`
--

INSERT INTO `status_payment` (`id`, `name`) VALUES
(1, 'Chưa thanh toán'),
(2, 'Đã thanh toán'),
(3, 'Đã hủy đặt hàng');

-- --------------------------------------------------------

--
-- Table structure for table `straps`
--

CREATE TABLE `straps` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `straps`
--

INSERT INTO `straps` (`id`, `name`) VALUES
(1, 'Dây nhựa'),
(2, 'Dây da'),
(3, 'Dây đồng'),
(4, 'Dây bạc'),
(5, 'Dây vàng');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`) VALUES
(1, '#rolex'),
(2, '#casio'),
(3, '#apple'),
(4, '#titan'),
(5, '#watch'),
(6, '#applewatch'),
(7, '#calvinklein'),
(8, '#cartier'),
(9, '#citizen'),
(10, '#g-shock');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'true(1):admin, false(0):member '
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `type`) VALUES
(1, 'Đinh Văn Tùng', 'tungph46171@fpt.edu.vn', '12345678', 1),
(2, 'Nguyễn Văn A', 'a@gmail.com', '12345678', 1),
(3, 'Nguyễn Văn B', 'b@gmail.com', '12345678', 0),
(4, 'Nguyễn Văn C', 'c@gmail.com', '12345678', 0),
(5, 'Nguyễn Văn D', 'd@gmail.com', '12345678', 0);

-- --------------------------------------------------------

--
-- Table structure for table `warranties`
--

CREATE TABLE `warranties` (
  `id` int NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `warranties`
--

INSERT INTO `warranties` (`id`, `name`) VALUES
(1, '1 năm'),
(2, '2 năm'),
(3, '3 năm'),
(4, '4 năm'),
(5, '5 năm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_id` (`cart_id`,`product_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `glasses`
--
ALTER TABLE `glasses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `status_delivery` (`status_delivery`),
  ADD KEY `status_delivery_2` (`status_delivery`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`,`product_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `author_id` (`author_id`);

--
-- Indexes for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD KEY `post_id` (`post_id`,`tag_id`),
  ADD KEY `tag_id` (`tag_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `strap_id` (`strap_id`,`glass_id`,`size_id`,`warranty_id`,`color_id`,`brand_id`,`tag_id`),
  ADD KEY `brand_id` (`brand_id`),
  ADD KEY `color_id` (`color_id`),
  ADD KEY `glass_id` (`glass_id`),
  ADD KEY `size_id` (`size_id`),
  ADD KEY `tag_id` (`tag_id`),
  ADD KEY `warranty_id` (`warranty_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status_delivery`
--
ALTER TABLE `status_delivery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status_payment`
--
ALTER TABLE `status_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `straps`
--
ALTER TABLE `straps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `warranties`
--
ALTER TABLE `warranties`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `glasses`
--
ALTER TABLE `glasses`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `status_delivery`
--
ALTER TABLE `status_delivery`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `status_payment`
--
ALTER TABLE `status_payment`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `straps`
--
ALTER TABLE `straps`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `warranties`
--
ALTER TABLE `warranties`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD CONSTRAINT `cart_items_ibfk_1` FOREIGN KEY (`cart_id`) REFERENCES `carts` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `cart_items_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `order_items_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD CONSTRAINT `post_tag_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `post_tag_ibfk_2` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`color_id`) REFERENCES `colors` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `products_ibfk_3` FOREIGN KEY (`glass_id`) REFERENCES `glasses` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `products_ibfk_4` FOREIGN KEY (`size_id`) REFERENCES `sizes` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `products_ibfk_5` FOREIGN KEY (`strap_id`) REFERENCES `straps` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `products_ibfk_6` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `products_ibfk_7` FOREIGN KEY (`warranty_id`) REFERENCES `warranties` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `products_ibfk_8` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
