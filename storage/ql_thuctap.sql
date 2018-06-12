-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 12, 2018 lúc 03:42 PM
-- Phiên bản máy phục vụ: 10.1.31-MariaDB
-- Phiên bản PHP: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ql_thuctap`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `administrator`
--

CREATE TABLE `administrator` (
  `id_administrator` int(11) NOT NULL,
  `fullname` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `falculty` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` int(11) NOT NULL,
  `description` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `account_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feedback`
--

CREATE TABLE `feedback` (
  `id_feedback` int(10) NOT NULL,
  `partner_id` int(10) NOT NULL,
  `student_id` int(10) NOT NULL,
  `description` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `file` varchar(45) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `intern_post`
--

CREATE TABLE `intern_post` (
  `id_post` int(11) NOT NULL,
  `partner_id` int(11) NOT NULL,
  `description` varchar(225) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `follower_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lecturer`
--

CREATE TABLE `lecturer` (
  `id_lecturer` int(10) NOT NULL,
  `fullname` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `faculty` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(10) DEFAULT NULL,
  `account_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `partner`
--

CREATE TABLE `partner` (
  `id_partner` int(10) NOT NULL,
  `name` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `account_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `report`
--

CREATE TABLE `report` (
  `id_report` int(10) NOT NULL,
  `student_report` int(11) DEFAULT NULL,
  `lecturer_report` int(11) DEFAULT NULL,
  `partner_report` int(11) DEFAULT NULL,
  `description` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `file` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `id` int(11) NOT NULL,
  `name` varchar(225) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hinh` varchar(225) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `student`
--

CREATE TABLE `student` (
  `id_student` int(10) NOT NULL,
  `fullname` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `gmail` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `class` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `grad_year` varchar(45) COLLATE utf8_unicode_ci NOT NULL DEFAULT '2019',
  `major` varchar(45) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'infomation technology',
  `date_of_birth` date DEFAULT NULL,
  `gpa` float DEFAULT NULL,
  `phone` int(10) NOT NULL,
  `personality` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `internship_type` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `post_id` int(10) DEFAULT NULL,
  `lecturer_id` int(10) DEFAULT NULL,
  `account_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `faculty` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `remember_token` varchar(95) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_ad` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`id_administrator`),
  ADD KEY `account_id` (`account_id`);

--
-- Chỉ mục cho bảng `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id_feedback`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `partner_id` (`partner_id`);

--
-- Chỉ mục cho bảng `intern_post`
--
ALTER TABLE `intern_post`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `partner_id` (`partner_id`),
  ADD KEY `follower_id` (`follower_id`);

--
-- Chỉ mục cho bảng `lecturer`
--
ALTER TABLE `lecturer`
  ADD PRIMARY KEY (`id_lecturer`),
  ADD KEY `account_id` (`account_id`);

--
-- Chỉ mục cho bảng `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id_partner`),
  ADD KEY `account_id` (`account_id`);

--
-- Chỉ mục cho bảng `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id_report`),
  ADD KEY `student_report` (`student_report`),
  ADD KEY `lecturer_report` (`lecturer_report`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id_student`),
  ADD KEY `lecturer_id` (`lecturer_id`),
  ADD KEY `account_id` (`account_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `administrator`
--
ALTER TABLE `administrator`
  MODIFY `id_administrator` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id_feedback` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `intern_post`
--
ALTER TABLE `intern_post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `lecturer`
--
ALTER TABLE `lecturer`
  MODIFY `id_lecturer` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `partner`
--
ALTER TABLE `partner`
  MODIFY `id_partner` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `report`
--
ALTER TABLE `report`
  MODIFY `id_report` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `student`
--
ALTER TABLE `student`
  MODIFY `id_student` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `administrator`
--
ALTER TABLE `administrator`
  ADD CONSTRAINT `administrator_ibfk_2` FOREIGN KEY (`account_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`id_student`),
  ADD CONSTRAINT `feedback_ibfk_2` FOREIGN KEY (`partner_id`) REFERENCES `partner` (`id_partner`);

--
-- Các ràng buộc cho bảng `intern_post`
--
ALTER TABLE `intern_post`
  ADD CONSTRAINT `intern_post_ibfk_1` FOREIGN KEY (`partner_id`) REFERENCES `partner` (`id_partner`),
  ADD CONSTRAINT `intern_post_ibfk_2` FOREIGN KEY (`follower_id`) REFERENCES `student` (`id_student`);

--
-- Các ràng buộc cho bảng `lecturer`
--
ALTER TABLE `lecturer`
  ADD CONSTRAINT `lecturer_ibfk_2` FOREIGN KEY (`account_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `partner`
--
ALTER TABLE `partner`
  ADD CONSTRAINT `partner_ibfk_2` FOREIGN KEY (`account_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `report_ibfk_1` FOREIGN KEY (`student_report`) REFERENCES `student` (`id_student`),
  ADD CONSTRAINT `report_ibfk_2` FOREIGN KEY (`lecturer_report`) REFERENCES `lecturer` (`id_lecturer`);

--
-- Các ràng buộc cho bảng `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_3` FOREIGN KEY (`lecturer_id`) REFERENCES `lecturer` (`id_lecturer`),
  ADD CONSTRAINT `student_ibfk_5` FOREIGN KEY (`account_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
