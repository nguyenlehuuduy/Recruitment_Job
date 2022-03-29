-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th12 01, 2021 lúc 02:55 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `doancoso`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `user_id` int(11) NOT NULL,
  `user_ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_namecongty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_nhanvien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_soluot` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_diachi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_thanhpho` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_lienhe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_quocgia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_sodienthoai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`user_id`, `user_ten`, `user_email`, `user_password`, `user_phone`, `user_namecongty`, `user_nhanvien`, `user_soluot`, `user_diachi`, `user_thanhpho`, `user_lienhe`, `user_quocgia`, `user_sodienthoai`) VALUES
(1, 'Nguyá»…n', 'nguyenlehuuduy.tienphuoc@gmail.com', '$2y$10$WHk8QoCo6KGFK255wPyHQul1KHXtH/6YeuPusekEpbbyuD84aiSfa', '0358650975', '2', 'Tá»« 25 - 100 nhÃ¢n viÃªn', '2', '2', 'Äáº¯k Láº¯k', '2', 'ThÃ¡i Lan', '2'),
(2, 'Nguyá»…n', 'nguyexnlehuuduy.tienphuoc@gmail.com', '$2y$10$ay9NzfP.wRc7.c4evCmASuEzIUrWzHZgjlSGpLL0hHxzlkaFOCf7C', '0358650975', 'kkkkkkkkkkkk', 'Ãt hÆ¡n 10 nhÃ¢n viÃªn', '1', 'oooooooo', 'Äiá»‡n BiÃªn', '2', 'Má»¹', '111111111111'),
(3, 'Nguyá»…n', 'nguyenlehuuduy1.tienphuoc@gmail.com', '$2y$10$Qr5AhEXsJmmfpe5W7yGI5ODk.N6CzcGx.bzJF1VOlvQ3nOd5OBjjy', '0358650975', 'kkkkkkkkkkkk', 'Tá»« 1500 - 5000 nhÃ¢n viÃªn', '1', 'a', 'Äiá»‡n BiÃªn', 'kkkkkkkkk', 'Má»¹', 'ooooooooo'),
(4, 'Nguyá»…n', 'nguyenlehuuduy2.tienphuoc@gmail.com', '$2y$10$FMHzsAp38ShrZGVgERG22eDfUr2YFt1jv5.7StEiaYDamdu0G5OpG', '0358650975', 'kkkkkkkkkkkk', 'Tá»« 10 - 20 nhÃ¢n viÃªn', '1', 'oooooooo', 'Äiá»‡n BiÃªn', 'oooooooo', 'Má»¹', 'ooooooooo'),
(5, 'Nguyá»…n', '123nguyenlehuuduy.tienphuoc@gmail.com', '$2y$10$l5n3CPiALrw/TN9uHEWas.pyiEJaFtNlKG8ZU7QI7.asDscS6aHyC', '0358650975', 'kkkkkkkkkkkk', 'Ãt hÆ¡n 10 nhÃ¢n viÃªn', '1', '1', 'Báº¯c Giang', 'kkkkkkkkk', 'ThÃ¡i Lan', '99999999999999999');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baidang`
--

CREATE TABLE `baidang` (
  `user_id` int(11) NOT NULL,
  `user_tieude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_dienthoai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_chucdanh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_tencongty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_mota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_diadiem` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_dangtuyen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_noidung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_dongy` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `baidang`
--

INSERT INTO `baidang` (`user_id`, `user_tieude`, `user_dienthoai`, `user_email`, `user_chucdanh`, `user_tencongty`, `user_mota`, `user_diadiem`, `user_dangtuyen`, `user_noidung`, `user_dongy`) VALUES
(1, 'nguyenlehuuduy.tienphuoc@gmail.com', '1', 'nguyenlehuuduy.tienphuoc@gmail.com', '1', '1', '1', 'HÃ  Ná»™i', 'TÃ¬m Há»“ SÆ¡ á»¨ng ViÃªn', '1', 'on'),
(2, 'Huu Duy', '0366626161', 'nguyenlehuuduy.tienphuoc@gmail.com', '1', '1', 'a', 'ÄÃ  Náºµng', 'TÃ¬m Há»“ SÆ¡ á»¨ng ViÃªn', 'Ã¢', 'on'),
(3, 'Tuyá»ƒn Dá»¥ng PHP', '0366626161', 'nguyenlehuuduy.tienphuoc@gmail.com', 'GiÃ¡m Ä‘á»‘c', 'CÃ´ng TY TNHH 1 thÃ nh viÃªn', 'CÃ´ng ty abcxyz', 'ÄÃ  Náºµng', 'ÄÄƒng Tuyá»ƒn Dá»¥ng', 'CÃ´ng Ty hiá»‡n Ä‘ang/...........', 'on'),
(4, 'nguyenlehuuduy.tienphuoc@gmail.com', '0366626161', 'nguyenlehuuduy.tienphuoc@gmail.com', '1', '1', 'sssssss', 'ÄÃ  Náºµng', 'ÄÄƒng Tuyá»ƒn Dá»¥ng', 'sssssssssss', 'on'),
(5, 'nguyenlehuuduy.tienphuoc@gmail.com', '0366626161', 'nguyenlehuuduy.tienphuoc@gmail.com', '1', 'CÃ´ng TY TNHH 1 thÃ nh viÃªn', 'ssssssssss', 'ÄÃ  Náºµng', 'ÄÄƒng Tuyá»ƒn Dá»¥ng', 'sssssssssssssss', 'on'),
(6, 'nguyenlehuuduy.tienphuoc@gmail.com', '0366626161', 'nguyenlehuuduy.tienphuoc@gmail.com', '1', '1', 'k', 'ÄÃ  Náºµng', 'ÄÄƒng Tuyá»ƒn Dá»¥ng', 'k', 'on'),
(7, 'Tuyá»ƒn Dá»¥ng PHP', '0366626161', 'nguyenlehuuduy.tienphuoc@gmail.com', 'GiÃ¡m Ä‘á»‘c', 'CÃ´ng TY TNHH 1 thÃ nh viÃªn', '1111111111', 'ThÃ¡i BÃ¬nh', 'Quáº£ng CÃ¡o Tuyá»ƒn Dá»¥ng', '11111111', 'on'),
(8, 'ÄÄƒng Tuyá»ƒn Láº­p TrÃ¬nh ViÃªn WEB', '0366626161', 'nguyenlehuuduy.tienphuoc@gmail.com', 'Tester', 'CÃ´ng TY TNHH 1 thÃ nh viÃªn', 'CÃ´ng TY blalba', 'HÃ  Ná»™i', 'ÄÄƒng Tuyá»ƒn Dá»¥ng', 'ÄÄƒng Tuyá»ƒn Dá»¥ng', 'on'),
(9, 'nguyenlehuuduy.tienphuoc@gmail.com', '0366626161', 'nguyenlehuuduy.tienphuoc@gmail.com', 'GiÃ¡m Ä‘á»‘c', 'CÃ´ng TY TNHH 1 thÃ nh viÃªn', '1', 'ÄÃ  Náºµng', 'ÄÄƒng Tuyá»ƒn Dá»¥ng', '12', 'on');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dangtuyen`
--

CREATE TABLE `dangtuyen` (
  `user_id` int(11) NOT NULL,
  `user_ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_ho` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_hinhthuc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dangtuyen`
--

INSERT INTO `dangtuyen` (`user_id`, `user_ten`, `user_ho`, `user_email`, `user_hinhthuc`) VALUES
(1, '1', 'Duy', 'nguyenlehuuduy.tienphuoc@gmail.com', 'ÄÄƒng Tin CÆ¡ Báº£n'),
(2, 'Nguyá»…n', 'Duy', 'nguyenlehuuduy.tienphuoc@gmail.com', 'ÄÄƒng Tin CÆ¡ Báº£n'),
(3, 'Nguyá»…n', 'Duy', 'nguyenlehuuduy.tienphuoc@gmail.com', 'ÄÄƒng Tin CÆ¡ Báº£n'),
(4, 'Nguyá»…n', 'Duy', 'nguyenlehuuduy.tienphuoc@gmail.com', 'ÄÄƒng Tin CÆ¡ Báº£n'),
(5, 'Nguyá»…n', 'Duy', 'nguyenlehuuduy.tienphuoc@gmail.com', 'ÄÄƒng Tin CÆ¡ Báº£n'),
(6, 'Nguyá»…n', 'Duy', 'nguyenlehuuduy.tienphuoc@gmail.com', 'ÄÄƒng Tin Ná»•i Báº­c'),
(7, 'Nguyá»…n', 'Duy', 'nguyenlehuuduy.tienphuoc@gmail.com', 'ÄÄƒng Tin Ná»•i Báº­c');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dichvu`
--

CREATE TABLE `dichvu` (
  `user_id` int(11) NOT NULL,
  `user_ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_ho` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dichvu`
--

INSERT INTO `dichvu` (`user_id`, `user_ten`, `user_ho`, `user_email`, `user_phone`) VALUES
(1, 'Duy', 'nguyenlehuuduy.tienphuoc@gmail.com', '0358650975', ''),
(2, 'Nguyá»…n', 'Duy', 'nguyenlehuuduy.tienphuoc@gmail.com', '0358650975'),
(3, 'Nguyá»…n', 'Duy', 'nguyenlehuuduy.tienphuoc@gmail.com', '0358650975'),
(4, 'Nguyá»…n', 'Duy', 'nguyenlehuuduy.tienphuoc@gmail.com', '0358650975'),
(5, 'Nguyá»…n', 'Duy', 'nguyenlehuuduy.tienphuoc@gmail.com', '0358650975'),
(6, 'Nguyá»…n', 'Duy', 'nguyenlehuuduy.tienphuoc@gmail.com', '0358650975'),
(7, 'Nguyá»…n', 'Duy', 'nguyenlehuuduy.tienphuoc@gmail.com', '0358650975');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `images`
--

INSERT INTO `images` (`id`, `image`) VALUES
(1, '261816433_301938418602865_6253033571411793620_n.png'),
(2, '261816433_301938418602865_6253033571411793620_n.png'),
(3, '261816433_301938418602865_6253033571411793620_n.png'),
(4, '261816433_301938418602865_6253033571411793620_n.png'),
(5, '261816433_301938418602865_6253033571411793620_n.png'),
(6, '261816433_301938418602865_6253033571411793620_n.png'),
(7, '261816433_301938418602865_6253033571411793620_n.png'),
(8, '261816433_301938418602865_6253033571411793620_n.png'),
(9, '261816433_301938418602865_6253033571411793620_n.png'),
(10, '261816433_301938418602865_6253033571411793620_n.png'),
(11, '261816433_301938418602865_6253033571411793620_n.png'),
(12, '261816433_301938418602865_6253033571411793620_n.png'),
(13, '261816433_301938418602865_6253033571411793620_n.png'),
(14, '261816433_301938418602865_6253033571411793620_n.png'),
(15, '261816433_301938418602865_6253033571411793620_n.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `job`
--

CREATE TABLE `job` (
  `user_id` int(11) NOT NULL,
  `user_ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_ho` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `job`
--

INSERT INTO `job` (`user_id`, `user_ten`, `user_ho`, `user_email`, `user_phone`) VALUES
(1, 'Nguyá»…n', 'Duy', 'nguyenlehuuduy.tienphuoc@gmail.com', '0358650975'),
(2, 'Nguyá»…n', 'Duy', 'nguyenlehuuduy.tienphuoc@gmail.com', '0358650975'),
(3, 'Nguyá»…n', 'Duy', 'nguyenlehuuduy.tienphuoc@gmail.com', '0358650975'),
(4, 'Nguyá»…n', 'Duy', 'nguyenlehuuduy.tienphuoc@gmail.com', '0358650975'),
(5, 'Nguyá»…n', 'Duy', 'nguyenlehuuduy.tienphuoc@gmail.com', '0358650975'),
(6, 'Nguyá»…n', 'Duy', 'nguyenlehuuduy.tienphuoc@gmail.com', '0358650975'),
(7, 'Nguyá»…n', 'Duy', 'nguyenlehuuduy.tienphuoc@gmail.com', '0358650975'),
(8, 'Nguyá»…n', 'Duy', 'nguyenlehuuduy.tienphuoc@gmail.com', '0358650975');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nghe`
--

CREATE TABLE `nghe` (
  `user_id` int(11) NOT NULL,
  `user_nn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_ho` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nghe`
--

INSERT INTO `nghe` (`user_id`, `user_nn`, `user_ten`, `user_ho`, `user_email`) VALUES
(1, 'ChÆ°a CÃ³ Kinh Nghiá»‡m', 'Nguyá»…n', 'Duy', 'nguyenlehuuduy.tienphuoc@gmail.com'),
(2, 'CÃ³ kinh nghiá»‡p trÃªn 3 nÄƒm', 'Nguyá»…n', 'Duy', 'nguyenlehuuduy.tienphuoc@gmail.com'),
(3, 'Lá»±a chá»n lá»™ trÃ¬nh nghá» nghiá»‡p', 'Nguyá»…n', 'Duy', 'nguyenlehuuduy.tienphuoc@gmail.com'),
(4, 'CÃ³ kinh nghiá»‡m tá»« 1-3 nÄƒm', 'Nguyá»…n', 'Duy', 'nguyenlehuuduy.tienphuoc@gmail.com'),
(5, 'CÃ³ kinh nghiá»‡m tá»« 1-3 nÄƒm', 'Nguyá»…n', 'Duy', 'nguyenlehuuduy.tienphuoc@gmail.com'),
(6, 'CÃ³ kinh nghiá»‡m tá»« 1-3 nÄƒm', 'Nguyá»…n', 'Duy', 'nguyenlehuuduy.tienphuoc@gmail.com'),
(7, 'ChÆ°a CÃ³ Kinh Nghiá»‡m', 'Nguyá»…n', 'Duy', 'nguyenlehuuduy.tienphuoc@gmail.com'),
(8, 'CÃ³ kinh nghiá»‡m tá»« 1-3 nÄƒm', 'Nguyá»…n', 'Duy', 'nguyenlehuuduy.tienphuoc@gmail.com'),
(9, 'CÃ³ kinh nghiá»‡m tá»« 1-3 nÄƒm', 'Nguyá»…n', 'Duy', 'nguyenlehuuduy.tienphuoc@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_ho` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `check_html` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`user_id`, `user_ten`, `user_ho`, `user_email`, `user_password`, `user_phone`, `gender`, `city`, `check_html`, `message1`) VALUES
(7, 'Nguyá»…n', '', 'nguyenlehuuduy.tienphuoc1@gmail.com', '$2y$10$.OvnPqECmR96fip73uHK2ua3UkLpuFBvuM2mecMqOlxT.34aq2KKC', '', '', '', '0', ''),
(8, 'Nguyá»…n', 'Duy', 'nguyenlehuuduy.tienph1uoc@gmail.com', '$2y$10$tiJqonHv7WJ6MIv1NQSPO.bvQM0SnKJaVAhKRI3/M1Lyu/FCbd6be', '0358650975', '', '', '0', ''),
(9, 'Nguyá»…n', 'Duy1', '1nguyenlehuuduy.tienphuoc@gmail.com', '$2y$10$u1P4bVDTEcmkcYJnA1AOguW/KOCL4pFhdQa9G46HbdzICQ7j.6vn2', '0358650975', '', '', '0', ''),
(10, '1', '1', '11@gmail.com', '$2y$10$eYKFyylA17VS/jW9z.IrZeQsLIzWpoTUw9t7snwMbmyPAsSIIcUBq', '1', '', '', '0', ''),
(11, 'Nguyá»…n', 'Duy', 'nguyenlehuuduy.tienphuoc@gmail.com', '$2y$10$YlsjVnEzleuyG6G4nHDQDOjHCvuY0FYps7eXM79nVQkbxoMybRxxq', '0358650975', '', '', '0', ''),
(12, 'Nguyá»…n', 'Duy', '123nguyenlehuuduy.tienphuoc@gmail.com', '$2y$10$WASVmvCYoOuAzxxc4dvxl.qt0tEf8hDSuBL0VhE71tnYIryQs54yq', '0358650975', 'male', '', '0', ''),
(13, 'Nguyá»…n', 'Duy', '2222nguyenlehuuduy.tienphuoc@gmail.com', '$2y$10$tTsa6wok3ZB05L1.Z83FLOP8oQxRCSv7/T7eeATGo.GSTMhVs.E2u', '0358650975', 'male', 'Há»“ ChÃ­ Minh', '0', ''),
(14, 'Nguyá»…n', 'Duy', 'nguyenlehuuduy.1tienphuoc@gmail.com', '$2y$10$KGLB7faLYSUgYNpDJ3k0l.l9PK3iNt3P9Uf.T769ydG9.6z.2hvQa', '0358650975', 'male', 'Há»“ ChÃ­ Minh', '0', ''),
(15, 'Nguyá»…n', 'Duy', '5nguyenlehuuduy.tienphuoc@gmail.com', '$2y$10$15coxDXoiODl9pOKsbWPG.XSy85tejCqdT0neSZHjFFqsuDRX.fEC', '0358650975', 'male', 'Há»“ ChÃ­ Minh', '', ''),
(16, 'Nguyá»…n', 'Duy', 'nguyenlehuuduy.22tienphuoc@gmail.com', '$2y$10$PUpjBNJhQ/wG5cTHRSof/.kSJkwoIm/Jv0H5OUncb0/CipezNELiu', '0358650975', 'male', 'ÄÃ  Náºµng', 'HTML', ''),
(17, 'Nguyá»…n', 'Duy', 'nguyenlehu2uduy.tienphuoc@gmail.com', '$2y$10$X3ev9gGShRiYNLCgk/Ty7egSSuG3F7AxDlboyz1TMVfwcS.jpwfFW', '0358650975', 'male', 'Há»“ ChÃ­ Minh', '111', ''),
(18, 'Nguyá»…n', 'Duy', 'nguyenleh1uudu1y.tienphuoc@gmail.com', '$2y$10$0EEQFUPl20QX2kRyyTI.Aed9WKomC3a1XVASZkW8mkwg72quAK5NW', '0358650975', 'male', 'ÄÃ  Náºµng', 'HTML', '111'),
(19, 'Nguyá»…n', '1', 'nguyenlehuxxxxxuduy.tienphuoc@gmail.com', '$2y$10$zhcva7jJ9GY1kUl.yAMhKuipUOL1qhsXutaUpRmVALCPGtmj20/fK', '0358650975', 'male', 'Há»“ ChÃ­ Minh', 'HTML', 's'),
(20, 'Nguyá»…n', 'Duy', 'nguyenlehussssssuduy.tienphuoc@gmail.com', '$2y$10$HZry4WoXIvoWhbAbjZAAVeFRfJwAtineWu2MkJoSAbCOZtseLh312', '0358650975', 'male', 'Há»“ ChÃ­ Minh', 'HTML', '111111111'),
(21, 'Nguyá»…n', 'Duy', 'nguyenxxxxxlehuuduy.tienphuoc@gmail.com', '$2y$10$cGLiC/pLekrWNiHL8fB1Q.4m6ZL8InSOe4bE5YMs5lvej9ippDsLW', '0358650975', 'male', 'Há»“ ChÃ­ Minh', 'HTML', 'a'),
(22, 'Nguyá»…n', 'Duy', 'nguyenlehuuduxy.tienphuoc@gmail.com', '$2y$10$xE3IS9a3v2SR9EqBuSwjSOkIZikCa1D6RccO25N82FJZAVWk124Ty', '0358650975', 'Ná»¯', 'ÄÃ  Náºµng', 'on', ''),
(23, 'Nguyá»…n', 'Duy', 'nguyenlehuuduy@gmail.com', '$2y$10$JSmFWPnX32IK7cDJWvhmYO2PUZKoNPewhDu7ngq38bhezec21KgoS', '0358650975', 'Nam', 'HÃ  Ná»™i', 'on', ''),
(24, 'Nguyá»…n', 'Duy', 'nguxyenlehuuxduy.tienphuoc@gmail.com', '$2y$10$LihUKKhv8vUrF92SNPW/WeulolihX2nWY2vb/1h.NxtQZKlHNwU2u', '0358650975', 'Nam', 'Quáº£ng Nam', 'on', ''),
(25, 'Nguyá»…n', 'Duy', 'nguyen1le1huuduy.tienphuoc@gmail.com', '$2y$10$E4Mf63XzHk5mKrSD0WMfOuCCghRu3tcfhTXVrJTf8m5HAik9aZiDu', '0358650975', 'Nam', 'Quáº£ng Nam', 'on', ''),
(26, 'Nguyá»…n', 'Duy', 'nguyenlehuuxduy.tienphuoc@gmail.com', '$2y$10$CsokBIhmitQLjX5DgGzmw.hOtmbs2MitGU/YlnM54Xk.Vikwvpwle', '0358650975', 'male', 'Quáº£ng Nam', 'on', ''),
(27, 'Nguyá»…n', 'Duy', 'ngxxxxxxxxxxxxxxxxxxxxxxuyenlehuuduy.tienphuoc@gmail.com', '$2y$10$G018KLUVhEpY0z0BokGxZ.stRLsgyY1bdshQd8yM69mK7wBVb20au', '0358650975', 'male', 'Quáº£ng Nam', 'on', ''),
(28, '1', 'Duy', 'nguyenxlehxxuuduy.tienphuoc@gmail.com', '$2y$10$cX/eV.SlIu79faBIjLY62.kGf53b.RX2dLOZPr53qjJf35kmvOdXK', '0358650975', 'male', 'ÄÃ  Náºµng', 'on', ''),
(29, 'Nguyá»…n', 'Duy', 'nnguyenlehuuduy.tienphuoc@gmail.com', '$2y$10$SlspTL2PUm5bEIMD1i8VieiHGTSefAObqgYTBNVaYMhKmpgdM6g42', '0358650975', 'Nam', 'ÄÃ  Náºµng', 'on', ''),
(30, 'Nguyá»…n', 'Duy', 'nguyenlehuuduyy.tienphuoc@gmail.com', '$2y$10$wLPStR.i9KRsuQEOnwmXCOpMlg6kFeB.RlVOvG/zDY3VYpKdR8MKS', '0358650975', 'Nam', 'Quáº£ng Nam', 'on', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Chỉ mục cho bảng `baidang`
--
ALTER TABLE `baidang`
  ADD PRIMARY KEY (`user_id`);

--
-- Chỉ mục cho bảng `dangtuyen`
--
ALTER TABLE `dangtuyen`
  ADD PRIMARY KEY (`user_id`);

--
-- Chỉ mục cho bảng `dichvu`
--
ALTER TABLE `dichvu`
  ADD PRIMARY KEY (`user_id`);

--
-- Chỉ mục cho bảng `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`user_id`);

--
-- Chỉ mục cho bảng `nghe`
--
ALTER TABLE `nghe`
  ADD PRIMARY KEY (`user_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `baidang`
--
ALTER TABLE `baidang`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `dangtuyen`
--
ALTER TABLE `dangtuyen`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `dichvu`
--
ALTER TABLE `dichvu`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `job`
--
ALTER TABLE `job`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `nghe`
--
ALTER TABLE `nghe`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
