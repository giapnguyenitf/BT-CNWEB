-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2017 at 11:15 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlda`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `username` varchar(20) COLLATE utf32_vietnamese_ci NOT NULL,
  `password` varchar(100) COLLATE utf32_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_vietnamese_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`username`, `password`) VALUES
('giapnguyen', 'fae02003aa19645a0538bb442c877de5'),
('hoangphuc', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `detai`
--

CREATE TABLE `detai` (
  `iddetai` int(11) NOT NULL,
  `tendetai` varchar(500) COLLATE utf32_vietnamese_ci NOT NULL,
  `iddoan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_vietnamese_ci;

--
-- Dumping data for table `detai`
--

INSERT INTO `detai` (`iddetai`, `tendetai`, `iddoan`) VALUES
(4, 'Tìm hiểu giao thức UDP và viết chương trình truyền file dựa vào giao thức UDP trên môi trường Mạng LAN', 5),
(5, 'Tìm hiểu RMI. Ứng dụng xây dựng chương trình giám sát LAN', 5),
(8, 'Xây dựng chương trình download và upload file dựa vào giao thức HTTP và FTP', 5);

-- --------------------------------------------------------

--
-- Table structure for table `doan`
--

CREATE TABLE `doan` (
  `iddoan` int(11) NOT NULL,
  `tendoan` varchar(50) COLLATE utf32_vietnamese_ci NOT NULL,
  `hocky` int(11) NOT NULL,
  `idkhoa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_vietnamese_ci;

--
-- Dumping data for table `doan`
--

INSERT INTO `doan` (`iddoan`, `tendoan`, `hocky`, `idkhoa`) VALUES
(2, 'Đồ án Giải thuật & Lập trình', 6, 1),
(3, 'Đồ án Lập trình HT & Vi điều khiển', 7, 1),
(4, 'Đồ án P.Tích & T.Kế H.Thống thông tin', 8, 1),
(5, 'Đồ án Cơ sở ngành mạng', 8, 1),
(6, 'Đồ án chuyên ngành CNPM', 9, 1);

-- --------------------------------------------------------

--
-- Table structure for table `giangvien`
--

CREATE TABLE `giangvien` (
  `idgv` int(11) NOT NULL,
  `hoten` varchar(50) COLLATE utf32_vietnamese_ci NOT NULL,
  `gioitinh` tinyint(1) NOT NULL,
  `idkhoa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_vietnamese_ci;

--
-- Dumping data for table `giangvien`
--

INSERT INTO `giangvien` (`idgv`, `hoten`, `gioitinh`, `idkhoa`) VALUES
(1, 'Nguyễn Thanh Bình', 1, 1),
(2, 'Huỳnh Hữu Hưng', 1, 1),
(3, 'Nguyễn Tấn Khôi', 1, 1),
(4, 'Lê Thị Mỹ Hạnh', 0, 1),
(5, 'Nguyễn Văn Nguyên', 1, 1),
(6, 'Đặng Thiên Bình', 1, 1),
(7, 'Nguyễn Thanh Bình', 1, 1),
(8, 'Trương ngọc châu', 1, 1),
(9, 'Nguyễn Văn Hiệu', 1, 1),
(10, 'Đỗ Thị Tuyết Hoa', 0, 1),
(11, 'Nguyễn Thị Minh Hỷ', 0, 1),
(12, 'Phan Huy Khánh', 1, 1),
(13, 'Lê Quý Lộc', 1, 1),
(14, 'Đặng Hoài Phương', 1, 1),
(15, 'Phan Thanh Tao', 1, 1),
(16, 'Phan Chí Tùng', 1, 1),
(17, 'Võ Đức Hoàng', 1, 1),
(18, 'Ninh Khánh Duy', 1, 1),
(19, 'Nguyễn Thị Nhật Ánh', 0, 1),
(20, 'Phạm Công Thắng', 1, 1),
(21, 'Mai Văn Hà', 1, 1),
(22, 'Nguyễ Thế Xuân Ly', 1, 1),
(23, 'Trần Hồ Thủy Tiên', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `khoa`
--

CREATE TABLE `khoa` (
  `idkhoa` int(11) NOT NULL,
  `tenkhoa` varchar(50) COLLATE utf32_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_vietnamese_ci;

--
-- Dumping data for table `khoa`
--

INSERT INTO `khoa` (`idkhoa`, `tenkhoa`) VALUES
(1, 'Khoa Công nghệ thông tin'),
(2, 'Khoa Cơ Khí'),
(4, 'Khoa Điện'),
(5, 'Khoa Điện Tử Viễn Thông'),
(6, 'Khoa Hóa'),
(7, 'Khoa Sư Phạm Kỹ Thuật'),
(8, 'Khoa Xây Dựng Cầu Đường'),
(9, 'Khoa Xây Dựng Dân Dụng Và Công Nghiệp'),
(10, 'Khoa XD Thủy lợi - Thủy Điện'),
(11, 'Khoa Môi trường'),
(12, 'Khoa Quản lý dự án'),
(13, 'Khoa Kiến trúc'),
(14, 'Khoa CN Nhiệt - Điện lạnh'),
(15, 'Khoa Cơ khí Giao thông');

-- --------------------------------------------------------

--
-- Table structure for table `sinhvien`
--

CREATE TABLE `sinhvien` (
  `mssv` varchar(10) COLLATE utf32_vietnamese_ci NOT NULL,
  `idsv` int(11) NOT NULL,
  `hoten` varchar(50) COLLATE utf32_vietnamese_ci NOT NULL,
  `gioitinh` tinyint(1) NOT NULL,
  `ngaysinh` date NOT NULL,
  `email` varchar(50) COLLATE utf32_vietnamese_ci NOT NULL,
  `sdt` varchar(11) COLLATE utf32_vietnamese_ci NOT NULL,
  `lop` varchar(10) COLLATE utf32_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_vietnamese_ci;

--
-- Dumping data for table `sinhvien`
--

INSERT INTO `sinhvien` (`mssv`, `idsv`, `hoten`, `gioitinh`, `ngaysinh`, `email`, `sdt`, `lop`) VALUES
('102130002', 1, 'Phan Thanh An', 1, '1995-10-10', 'thanhan@gmail.com', '01638507914', '13T1'),
('102130003', 2, 'Nguyễn Quốc Anh', 1, '1995-10-10', 'quocanh@gmail.com', '0969210986', '13T1'),
('102130005', 3, 'Nguyễn Quốc Cường', 1, '1995-10-10', 'quoccuong@gmail.com', '01664191601', '13T1'),
('102130006', 4, 'Võ Văn Danh', 0, '1995-10-12', 'vandanh@gmail.com', '01699862766', '13T1'),
('102130007', 5, 'Nguyễn Duy Đạt', 1, '1995-10-10', 'duydat@gmail.com', '01215924015', '13T1'),
('102130010', 6, 'Nguyễn Văn Giáp', 1, '1995-10-10', 'giapnguyen@gmail.com', '0976353194', '13T1'),
('102130012', 7, 'Nguyễn Thị Hạnh', 0, '1995-10-10', 'thihanh@gmail.com', '0976790996', '13T1'),
('103130023', 8, 'Đặng Văn Giáp', 1, '1995-10-10', 'danggiap@gmail.com', '0966618748', '13C4A');

-- --------------------------------------------------------

--
-- Table structure for table `thuchiendoan`
--

CREATE TABLE `thuchiendoan` (
  `idthda` int(11) NOT NULL,
  `mssv` varchar(100) COLLATE utf32_vietnamese_ci NOT NULL,
  `iddetai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_vietnamese_ci;

--
-- Dumping data for table `thuchiendoan`
--

INSERT INTO `thuchiendoan` (`idthda`, `mssv`, `iddetai`) VALUES
(2, '102130003', 5),
(3, '102130005', 5),
(4, '102130002', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `detai`
--
ALTER TABLE `detai`
  ADD PRIMARY KEY (`iddetai`),
  ADD UNIQUE KEY `iddetai` (`iddetai`),
  ADD KEY `iddoan` (`iddoan`);

--
-- Indexes for table `doan`
--
ALTER TABLE `doan`
  ADD PRIMARY KEY (`iddoan`),
  ADD KEY `idkhoa` (`idkhoa`);

--
-- Indexes for table `giangvien`
--
ALTER TABLE `giangvien`
  ADD PRIMARY KEY (`idgv`),
  ADD KEY `idkhoa` (`idkhoa`);

--
-- Indexes for table `khoa`
--
ALTER TABLE `khoa`
  ADD PRIMARY KEY (`idkhoa`);

--
-- Indexes for table `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`mssv`),
  ADD UNIQUE KEY `idsv` (`idsv`);

--
-- Indexes for table `thuchiendoan`
--
ALTER TABLE `thuchiendoan`
  ADD PRIMARY KEY (`idthda`),
  ADD KEY `mssv` (`mssv`),
  ADD KEY `iddetai` (`iddetai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detai`
--
ALTER TABLE `detai`
  MODIFY `iddetai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `doan`
--
ALTER TABLE `doan`
  MODIFY `iddoan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `giangvien`
--
ALTER TABLE `giangvien`
  MODIFY `idgv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `khoa`
--
ALTER TABLE `khoa`
  MODIFY `idkhoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `sinhvien`
--
ALTER TABLE `sinhvien`
  MODIFY `idsv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `thuchiendoan`
--
ALTER TABLE `thuchiendoan`
  MODIFY `idthda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `detai`
--
ALTER TABLE `detai`
  ADD CONSTRAINT `detai_ibfk_1` FOREIGN KEY (`iddoan`) REFERENCES `doan` (`iddoan`);

--
-- Constraints for table `doan`
--
ALTER TABLE `doan`
  ADD CONSTRAINT `doan_ibfk_1` FOREIGN KEY (`idkhoa`) REFERENCES `khoa` (`idkhoa`);

--
-- Constraints for table `giangvien`
--
ALTER TABLE `giangvien`
  ADD CONSTRAINT `giangvien_ibfk_1` FOREIGN KEY (`idkhoa`) REFERENCES `khoa` (`idkhoa`);

--
-- Constraints for table `thuchiendoan`
--
ALTER TABLE `thuchiendoan`
  ADD CONSTRAINT `thuchiendoan_ibfk_1` FOREIGN KEY (`mssv`) REFERENCES `sinhvien` (`mssv`),
  ADD CONSTRAINT `thuchiendoan_ibfk_2` FOREIGN KEY (`iddetai`) REFERENCES `detai` (`iddetai`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
