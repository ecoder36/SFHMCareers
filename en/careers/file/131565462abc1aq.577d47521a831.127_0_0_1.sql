-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 18 يونيو 2016 الساعة 22:23
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `chart`
--

-- --------------------------------------------------------

--
-- بنية الجدول `googlechart`
--

CREATE TABLE IF NOT EXISTS `googlechart` (
  `weekly_task` varchar(200) NOT NULL,
  `percentage` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `googlechart`
--

INSERT INTO `googlechart` (`weekly_task`, `percentage`) VALUES
('Sleep ', 30),
('Watching Movie', 10),
('job', 40),
('Exercise', 20),
('NEW', 100),
('job', 30),
('job', 40);
--
-- Database: `form`
--

-- --------------------------------------------------------

--
-- بنية الجدول `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `mail` varchar(200) DEFAULT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `city` varchar(200) DEFAULT NULL,
  `state` varchar(200) DEFAULT NULL,
  `fname` text,
  `fname2` text,
  `date` varchar(200) DEFAULT NULL,
  `received` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- إرجاع أو استيراد بيانات الجدول `files`
--

INSERT INTO `files` (`id`, `name`, `mail`, `phone`, `city`, `state`, `fname`, `fname2`, `date`, `received`) VALUES
(1, 'test', 'aaa@aaa.com', '123456', 'makkah', 'alawali', 'uploads/57090dcab5a0e7.87013335.png', NULL, 'Saturday 2016-04-09 05:12:26 PM', NULL),
(2, 'test1', 'aaa@aaa.com', '123456', 'makkah', 'alawali', 'uploads/57090ea37d84f1.60135320.png', NULL, 'Saturday 2016-04-09 05:16:03 PM', NULL),
(3, 'test2', 'aaa@aaa.com', '123456', 'makkah', 'alawali', 'uploads/57090efdc510c1.68748842.png', NULL, 'Saturday 2016-04-09 05:17:33 PM', NULL),
(4, 'test4', 'aaa@aaa.com', '123456', 'makkah', 'alawali', 'uploads/57090f45e3c193.08551656.png', NULL, 'Saturday 2016-04-09 05:18:45 PM', NULL),
(5, 'test3', 'aaa@aaa.com', '123456', 'makkah', 'alawali', 'uploads/57090fb5420239.41961781.png', NULL, 'Saturday 2016-04-09 05:20:37 PM', NULL),
(6, 'سلطان', 'aaa@aaa.com', '123456', 'مكة', 'alawali', 'uploads/57091d6e287945.66115473.mp4', NULL, 'Saturday 2016-04-09 06:19:10 PM', NULL),
(7, 'test323', 'aaa@aaa.com', '1233', 'مكة', 'alawali', 'uploads/570d69552c3716.98319965.png', NULL, 'Wednesday 2016-04-13 12:32:05 AM', NULL),
(8, 'test4545', 'aaa@aaa.com', '4545', 'مكة', 'alawali', 'uploads/570d6ae9b86274.62452397.png', '', 'Wednesday 2016-04-13 12:38:49 AM', NULL),
(9, 'test45f45', 'aaa@aaa.com', '4545', 'مكة', 'alawali', 'uploads/570d6b235009e6.37966845.png', 'uploads/570d6b23500b55.79436970.png', 'Wednesday 2016-04-13 12:39:47 AM', NULL),
(10, 'testjh', 'aaa@aaa.com', '55554', 'مكة', 'alawali', 'uploads/570d6c4d490554.64698453.png', 'uploads/570d6c4d490a95.93647273.jpg', 'Wednesday 2016-04-13 12:44:45 AM', NULL),
(11, 'test535', 'aaa@aaa.com', '555', 'مكة', 'alawali', 'uploads/570d6dcfe46934.77676641.png', 'uploads/570d6dcfe46f93.62358357.jpg', 'Wednesday 2016-04-13 12:51:12 AM', NULL),
(12, 'test1211', 'aaa@aaa.com', '1212', 'مكة', 'alawali', 'uploads/570d730846ea00.56758018.jpg', 'uploads/570d7308475c63.12110311.', 'Wednesday 2016-04-13 01:13:28 AM', NULL),
(13, 'test12111', 'aaa@aaa.com', '1212', 'مكة', 'alawali', 'uploads/570d7395eac5e0.69200474.jpg', 'uploads/570d7395eb47a5.96037584.', 'Wednesday 2016-04-13 01:15:49 AM', NULL),
(14, 'test121111', 'aaa@aaa.com', '1212', 'مكة', 'alawali', 'uploads/570d73b5464a73.94273480.jpg', '', 'Wednesday 2016-04-13 01:16:21 AM', NULL),
(15, 'test121811', 'aaa@aaa.com', '1212', 'مكة', 'alawali', 'uploads/570d74ae4b06a7.76838914.jpg', '', 'Wednesday 2016-04-13 01:20:30 AM', NULL),
(16, 'test12911', 'aaa@aaa.com', '1212', 'مكة', 'alawali', 'uploads/570d74bd7e8443.63621762.jpg', 'uploads/570d74bd7ee696.87354090.png', 'Wednesday 2016-04-13 01:20:45 AM', NULL),
(17, 'test1291g1', 'aaa@aaa.com', '1212', 'مكة', 'alawali', '', 'uploads/570d767c50b714.38668847.png', 'Wednesday 2016-04-13 01:28:12 AM', NULL),
(18, 'test129w1g1', 'aaa@aaa.com', '1212', 'مكة', 'alawali', '', '', 'Wednesday 2016-04-13 01:28:50 AM', NULL),
(19, 'test121g1', 'aaa@aaa.com', '1212', 'مكة', 'alawali', '', '', 'Wednesday 2016-04-13 01:30:40 AM', NULL),
(20, 'test121gy1', 'aaa@aaa.com', '1212', 'مكة', 'alawali', 'uploads/570d771f742567.20764435.jpg', '', 'Wednesday 2016-04-13 01:30:55 AM', NULL),
(21, 'test171', 'aaa@aaa.com', '1212', 'مكة', 'alawali', 'uploads/570d772cac63b9.55639658.jpg', 'uploads/570d772cacf131.24935418.png', 'Wednesday 2016-04-13 01:31:08 AM', NULL),
(22, 'test1891', 'aaa@aaa.com', '1212', 'مكة', 'alawali', '', 'uploads/570d7735748dd9.62911395.png', 'Wednesday 2016-04-13 01:31:17 AM', NULL),
(23, 'testt4', 'aaa@aaa.com', '444', 'مكة', 'alawali', 'uploads/570d80aef0bb88.47918473.png', 'uploads/570d80aef1b0a1.09407611.jpg', 'Wednesday 2016-04-13 02:11:43 AM', 'RECEIVED'),
(24, '5testt4', 'aaa@aaa.com', '444', 'مكة', 'alawali', 'uploads/570d828453aa35.53859666.png', 'uploads/570d8284552d37.27775158.jpg', 'Wednesday 2016-04-13 02:19:32 AM', NULL),
(25, 'test1234', 'aaa@aaa.com', '1', 'مكة', 'alawali', '', '', 'Friday 2016-04-15 07:09:36 PM', 'RECEIVED'),
(26, 'test3456', 'aaa@aaa.com', '1', 'مكة', 'alawali', '', '', 'Friday 2016-04-15 07:29:43 PM', 'RECEIVED'),
(27, 'test456', 'aaa@aaa.com', '45645', 'مكة', 'alawali', 'uploads/571126868b3157.98917289.png', '', 'Friday 2016-04-15 08:36:06 PM', 'RECEIVED'),
(28, 'test456456', 'aaa@aaa.com', '45645', 'مكة', 'alawali', '', '', 'Friday 2016-04-15 08:42:20 PM', 'RECEIVED'),
(29, 'testdsf', 'aaa@aaa.com', '23432', 'مكة', 'alawali', 'uploads/5715a5fedfc6b1.21026011.gif', 'uploads/5715a5fee11b51.08289374.gif', 'Tuesday 2016-04-19 06:29:03 AM', 'RECEIVED');
--
-- Database: `links`
--

-- --------------------------------------------------------

--
-- بنية الجدول `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `link` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `ip` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=40 ;

--
-- إرجاع أو استيراد بيانات الجدول `files`
--

INSERT INTO `files` (`id`, `link`, `date`, `ip`, `time`) VALUES
(1, 'file/574a00e1b6aa0.image1s.jpg', '2016-05-28', '::1', '1464467681'),
(2, 'file/574a00e8cc21f.image1s.jpg', '2016-05-28', '::1', '1464467688'),
(3, 'file/574a01397dc03.image1s.jpg', '2016-05-28', '::1', '1464467769'),
(4, 'file/574a015632c92.image1s.jpg', '2016-05-28', '::1', '1464467798'),
(5, 'file/574a01a070945.image1s.jpg', '2016-05-28', '::1', '1464467872'),
(6, 'file/574a01a642b12.image1s.jpg', '2016-05-28', '::1', '1464467878'),
(7, 'file/574a01ade0b3e.image1s.jpg', '2016-05-28', '::1', '1464467885'),
(8, 'file/574a02ad4aaa3.image1s.jpg', '2016-05-28', '::1', '1464468141'),
(9, 'file/574a02f630f94.image1s.jpg', '2016-05-28', '::1', '1464468214'),
(10, 'file/574a038a4c6b7.image1s.jpg', '2016-05-28', '::1', '1464468362'),
(11, 'file/574a03f8da21f.image1s.jpg', '2016-05-28', '::1', '1464468473'),
(12, 'file/574a0491cfd8e.image1s.jpg', '2016-05-28', '::1', '1464468625'),
(13, 'file/574a04af84246.image1s.jpg', '2016-05-28', '::1', '1464468655'),
(14, 'file/574a04be0ddf0.image1s.jpg', '2016-05-28', '::1', '1464468670'),
(15, 'file/574a068d33d74.image1s.jpg', '2016-05-28', '::1', '1464469133'),
(16, 'file/574a06ed4be4b.image1s.jpg', '2016-05-29', '::1', '1464469229'),
(17, 'file/574a06fea9c75.image1s.jpg', '2016-05-29', '::1', '1464469246'),
(18, 'file/574a0755f0871.image1s.jpg', '2016-05-29', '::1', '1464469334'),
(19, 'file/574a079e8e480.image1s.jpg', '2016-05-29', '::1', '1464469406'),
(20, 'file/574a07d469252.image1s.jpg', '2016-05-29', '::1', '1464469460'),
(21, 'file/574a07fe4fb13.image1s.jpg', '2016-05-29', '::1', '1464469502'),
(22, 'file/574a083d5dc61.image1s.jpg', '2016-05-29', '::1', '1464469565'),
(23, 'file/574a087556803.image1s.jpg', '2016-05-29', '::1', '1464469621'),
(24, 'file/574a08998e704.image1s.jpg', '2016-05-29', '::1', '1464469657'),
(25, 'file/574a08b7e2a3e.image1s.jpg', '2016-05-29', '::1', '1464469688'),
(26, 'file/574a0918b90f1.image1s.jpg', '2016-05-29', '::1', '1464469784'),
(27, 'file/574a0b6592848.Untitled.camproj', '2016-05-29', '192.168.1.2', '1464470373'),
(28, 'file/574a0b82ad988.how to create website shortcut.mp4', '2016-05-29', '192.168.1.2', '1464470402'),
(29, 'file/574a0bc3cdef5.image1s.jpg', '2016-05-29', '192.168.1.2', '1464470468'),
(30, 'file/574a0e2915274.how to create website shortcut.mp4', '2016-05-29', '::1', '1464471081'),
(31, 'file/574a0e3b4b3a8.how to create website shortcut.mp4', '2016-05-29', '::1', '1464471099'),
(32, 'file/574a0e3e34c69.how to create website shortcut.mp4', '2016-05-29', '::1', '1464471102'),
(33, 'file/574a121353a54.image1s.jpg', '2016-05-29', '::1', '1464472083'),
(34, 'file/574a1289e6c11.image1s.jpg', '2016-05-29', '::1', '1464472202'),
(35, 'file/574a18f53b29a.574a0e3e34c69.how to create website shortcut.mp4', '2016-05-29', '::1', '1464473845'),
(36, 'file/574a1bbfb7d87.574a0e3e34c69.how to create website shortcut.mp4', '2016-05-29', '::1', '1464474559'),
(37, 'file/574a1bc641ce0.574a01a642b12.image1s.jpg', '2016-05-29', '::1', '1464474566'),
(38, 'file/574a1bd1a6c34.574a01a642b12.image1s.jpg', '2016-05-29', '::1', '1464474578'),
(39, 'file/574a1beb16ec1.574a0e2915274.how to create website shortcut.mp4', '2016-05-29', '::1', '1464474603');
--
-- Database: `phone`
--

-- --------------------------------------------------------

--
-- بنية الجدول `phone`
--

CREATE TABLE IF NOT EXISTS `phone` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `ext` varchar(32) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `dept` varchar(200) DEFAULT NULL,
  `position` varchar(27) DEFAULT NULL,
  `bleeb` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=578 ;

--
-- إرجاع أو استيراد بيانات الجدول `phone`
--

INSERT INTO `phone` (`id`, `ext`, `name`, `dept`, `position`, `bleeb`) VALUES
(2, '', '', 'HOSPITAL ADMINISTRATION', '', ''),
(3, '8300', 'Dr. Meshari Alotaibi', 'HOSPITAL ADMIN', 'G.D of SFHM program \n ', ''),
(4, '8306', 'Dr. Dakil Alsaedi', 'HOSPITAL ADMIN', 'Asst.hospital.G.D', ''),
(5, '8310', 'Sara Masoud', 'HOSPITAL ADMIN', 'ADMIN ASSISTANT', ''),
(6, '8303', 'Mansor  Alsaidi', 'HOSPITAL ADMIN', 'Supervisor of G.D Office', ' '),
(7, '8301', 'WALEED ALADWANI', 'HOSPITAL ADMIN', 'Manager of G.D Office', ''),
(8, '8308', 'Sarhan / Naif', 'HOSPITAL ADMIN', 'SECRETARY', ''),
(9, '8304', 'Junaira', 'HOSPITAL ADMIN', 'ADMIN ASSISTANT', ''),
(10, '8305', 'Darwissa', 'HOSPITAL ADMIN', 'ADMIN ASSISTANT', ''),
(11, '9000', 'ADMIN FAX MACHINE', 'HOSPITAL ADMIN', '', ''),
(12, '', '', 'MEDICAL ADMINISTRATION', '', ''),
(13, '8355', 'DR.Khalid Alzahrani', 'MED ADMIN', 'MED.DIRECTOR', '1020'),
(14, '8352', 'Amal Hakami', 'MED ADMIN', 'ADMIN ASSISTANT', ''),
(15, '8359', 'SALEHA AL-SAQABI', 'MED ADMIN', 'ADMIN ASSISTANT', ''),
(16, '8353', 'DR.TURKI AL-QURASHI', 'SURGICAL', 'CONSULTANT', ''),
(17, '8354', 'Asnia Pangcoga', 'MED ADMIN', 'ADMIN ASSISTANT', ''),
(18, '8360', 'Burhan ', 'PEDIATRIC', 'DIRECTOR', ''),
(19, '8363', 'Abudallah / Mofarh', 'PEDIATRIC', '', ''),
(20, '8361', 'SHEILA Y. NASALUDDIN', 'SURGICAL', 'ADMIN ASISSTANT', ''),
(21, '9150', 'Dr.Mohammad Attas', 'CARDIOLOGY', 'CONSULTANT', '1055'),
(22, '8366', 'Norheda', 'Ancillary service', 'SECRETARY', ''),
(23, '8362', 'shalemah Sulaiman', 'MED ADMIN', 'ADMIN ASSISTANT', ''),
(24, '8365', 'Jamal Alsaid', 'N.I.C.U', '', '1095'),
(25, '8367', 'Abdrubo Abdallah', 'P.I.C.U', '', ''),
(26, '', '', 'Quality And Patint Safty', '', ''),
(27, '8313', 'Ahmed Sheikh', 'Quality', 'Quality DIRECTOR', '1080'),
(28, '8312', 'DR.Mohammed sherif', 'Quality', 'Quality', ''),
(29, '8316', 'Carmin', 'QPS', 'Secretary', ''),
(30, '8317', 'Sultanah Alshareef', 'QPS', 'Quality Coordinator', ''),
(31, '8318', 'Dr.Nahla', 'QPS', 'Quality Coordinator', ''),
(32, '8319', 'Mohammed Twansi', 'QPS', 'Quality Coordinator', ''),
(33, '8320', 'Mohammed', 'QPS', 'Safety Manager', ''),
(34, '', '', 'Academic Affair', '', ''),
(35, '8340', 'Dr. Ali Alzahrani', 'Academic Affairs ', 'DIRECTOR', ''),
(36, '8343', 'Nur-Ana Alih Mohammad ', 'Academic Affairs ', 'Secretary', ''),
(37, '8344', 'Ahlam Alghamdi', 'Health Education', 'Health Educator', '1417'),
(38, '8345', 'Ahlam Alghamdi', 'Health Education', 'Health Educator', ''),
(39, '8346', 'Iman mandily', 'medical library', '', ''),
(40, '8347', 'Amal Sabr', 'Academic Affairs ', 'SUPERVISOR', ''),
(41, '8348', 'Arwa AL Azwari', 'Academic Affairs ', 'Officer asst', ''),
(42, '9051', 'Raad', 'Audio Visual', 'Audio Visual Tech', ''),
(43, '', '', 'COMMAND ROOM PHONE DIRECTOR', '', ''),
(44, '8333', 'MAIN FAX MACHINE', 'COMMAND ROOM', '', ''),
(45, '8334', 'PHONE 1', 'COMMAND ROOM', '', ''),
(46, '8335', 'PHONE 2', 'COMMAND ROOM', '', ''),
(47, '8336', 'PHONE 3', 'COMMAND ROOM', '', ''),
(48, '8337', 'PHONE 4', 'COMMAND ROOM', '', ''),
(49, '', '', 'ADMINISTRATION COMMUNICATIONS', '', ''),
(50, '8323', 'Abdullah ALGarni', 'ADMIN COMMUNICATIONS', 'Manager', ''),
(51, '8321', 'Husain Alqahtani', 'ADMIN COMMUNICATIONS', 'ADMINISTRATIVE', ''),
(52, '8322', 'Ibrahim AL Zahrani', 'ADMIN COMMUNICATIONS', 'ADMINISTRATIVE', ''),
(53, '8324', 'Hassan', '', 'ADMINISTRATIVE', ''),
(54, '8326', 'Irene', '', 'ADMIN ASSISTANT', ''),
(55, '8325', 'FAX', 'ADMIN COMMUNICATIONS', '', ''),
(56, '', '', 'NURSING', '', ''),
(57, '8401', 'BASSEM SALEH', 'NURSING ADMIN', 'DIRECTOR', '1212'),
(58, '8405', 'Tariq', 'NURSING ADMIN', 'Nursing Education manager', ''),
(59, '8406', '', 'CRN-3F', '', ''),
(60, '8407', '', 'CRN-4F', '', ''),
(61, '8404', 'Nadeen', 'Staff Nursing', '', ''),
(62, '8402', 'Wiwik', 'Asisstant Dirocter', '', ''),
(63, '8403', 'Arma/Nidal/Amjad', 'Nursing Supervisor', '', '1202'),
(64, '8408', 'Monalinda', 'Director Assistant', '', ''),
(65, '8410', 'Caryl', 'CRN', '', ''),
(66, '8411', '', 'Quality Nursing Supervisor', '', ''),
(67, '8413', 'Aysha', '', 'Admain Assistant', ''),
(68, '', '', 'C.S.S.D', '', ''),
(69, '8415', 'Storage', 'C.S.S.D', '', ''),
(70, '8416', '', 'C.S.S.D', '', ''),
(71, '8417', 'Sylvia', 'C.S.S.D', 'Head Nurse', '1322'),
(72, '8418', 'Packing Area', 'C.S.S.D', '', '1321'),
(73, '8419', 'Decontamination', 'C.S.S.D', '', ''),
(74, '', '', 'Infectin Control', '', ''),
(75, '8440', 'Dr. Ahmed Farouk', 'Infectin control', 'Manager', ''),
(76, '8441', 'Dr.Asmaa', 'IPC', 'Infection Control Officer', ''),
(77, '8442', 'Safa Mohammad', 'IPC', 'Infection Control Nurse', '1086'),
(78, '8445', 'Marivee Agman', 'IPC', 'Secretary', ''),
(79, '8314', 'Infection control fax machine', 'IPC', '', ''),
(80, '', '', 'ADMINISTRATIVE FINANCIAL AFFAIRS', '', ''),
(81, '8500', 'Ahmad Alzahrani', 'ADMIN FINANCIAL AFFAIRS', 'DIRETOR ', ''),
(82, '', '', 'H.R', '', ''),
(83, '8450', '', 'HR', 'DIRETOR ', ''),
(84, '8451', 'Abdullah alamri', ' RECRUITMENT HR', 'manager', ''),
(85, '8452', 'Abdulrahman Al Khaybari', 'Personnel', 'HR SPECIALIST', ''),
(86, '8453', 'MOHAMMED Kelabi', 'RECRUITMENT', 'Supervisor', ''),
(87, '8454', 'AHMAD ALZAHRANI', 'RECRUITMENT', 'Admin Asst', ''),
(88, '8455', 'MOHAMMED ALTHOMALI', 'GOV. RELATIONS', 'Manager', ''),
(89, '8456', 'DHAFER ALGARNI', 'Personnel', 'HR SPECIALIST 1', ''),
(90, '8457', 'Talal Al-Shammari', 'Personnel', 'HR SPECIALIST 1', ''),
(91, '8458', 'OMAR ALZAHRANI', 'RECRUITMENT', 'Senior Recruitment sv', ''),
(92, '8459', 'OMAR BA OTHMAN', 'GOV. RELATIONS', 'HR SPECIALIST', ''),
(93, '8460', 'Azizah sahibon', 'Planning', 'Admin Asst', ''),
(94, '8461', 'Mylyn', 'HR', 'Adminn Asst.', ''),
(95, '8462', 'Abduaziz ALSHARIF', 'GOV. RELATIONS', ' ', ''),
(96, '8463', 'Alsarh Airlines', 'Travel Agency', '', ''),
(97, '8464', 'YASER Sadiq', 'Planning', 'HR SPECIALIST 1', ''),
(98, '8466', 'FAX', 'RECRUITMENT', '', ''),
(99, '8467', 'RECRUITMENT OFFICE', 'RECRUITMENT', '', ''),
(100, '8468', 'Jafar AL Shreef', 'Personnel', 'Senior Personnel Specialist', ''),
(101, '', '', 'FINANCE', '', ''),
(102, '8508', 'Ahamad Alzahrani', 'FINANCE', 'DIRECTOR', ''),
(103, '8509', 'Raghdah.a.Kalantan', 'FINANCE ', 'secretary', ''),
(104, '8502', 'Abdullaha  Alghamdi', 'FINANCE', 'PAYROLLE manager ', ''),
(105, '8503', 'Wail  Alzaidi', 'FINANCE ', 'Payrolle Accountant', ''),
(106, '8504', 'Manar Banjar', 'FINANCE ', 'Company Accountant 1', ''),
(107, '8505', 'DALIA ALMOTERI', 'FINANCE ', 'Payrolle Accountant', ''),
(108, '8506', 'Finance fax machine', 'FINANCE ', '', ''),
(109, '8507', 'Yousra alhakami', 'FINANCE ', 'Payrolle Accountant', ''),
(110, '8510', 'Jehana', 'FINANCE ', 'Admin asst', ''),
(111, '8511', 'Mohammad alosimi', 'FINANCE ', 'Company Accountant sv', ''),
(112, '8513', 'Malath fairaq', 'FINANCE ', ' Budget Accountant', ''),
(113, '8514', 'Ahlam Alzahrani', 'FINANCE ', ' Budget Accountant', ''),
(114, '8515', 'Manal', 'FINANCE ', ' Budget Accountant', ''),
(115, '8516', 'Majdwalen ', 'FINANCE ', ' Budget Accountant', ''),
(116, '', '', 'IT', '', ''),
(117, '8550', 'Ahmad alosimi', 'IT/com', 'DIRECTOR', ''),
(118, '8551', 'Fatima bikimj', 'ADMIN ASST', 'Secretary', ''),
(119, '8557', 'Ali Alsefri', 'IT', 'Supervisor', ''),
(120, '8552', 'Bader Alomairi', 'NETWORKS', 'IT TECH 2', ''),
(121, '8554', 'Salim Alrashidi', 'NETWORKS', 'IT TECH 2', ''),
(122, '8556', 'Mohammed Alkariemy', 'WORKSHOP', 'IT TECH 1', ''),
(123, '8558', 'Saeed Alsefri', 'APPLICATION', 'PROGRAMMER', ''),
(124, '8559', 'Faris Alotaibi', 'APPLICATION', 'PROGRAMMER', ''),
(125, '8560', 'Abdulrahman Albladi', 'APPLICATION', 'PROGRAMMER', ''),
(126, '8555', 'YAHYA', 'WORKSHOP', 'IT TECH 1', ''),
(127, '8561', 'IT LAB', '', '', ''),
(128, '8562', 'Mansor Al Rebaae', 'IT LAB', '', ''),
(129, '8580', 'Yassir Al Kenani', 'IT Manager', '', ''),
(130, '8563', 'Bandar Alhakami', 'APPLICATION', 'Senior PROGRAMMER', ''),
(131, '', '', 'PATIENT AFFAIRS', '', ''),
(132, '8600', 'AbuL Qassm Sako', 'PATIENT AFFAIRS', 'Director', '1410'),
(133, '8650', 'Hassan Ahmed Sayed ', 'PATIENT AFFAIRS', 'Coordination manager', ''),
(134, '8601', 'Shatha AL Hothali', 'PATIENT AFFAIRS', 'Admin Asst', ''),
(135, '8606', 'Patient Affairs fax machine', 'PATIENT AFFAIRS', '', ''),
(136, '8604', '', ' Medical Coordination', '', ''),
(137, '8603', 'Sohilah Galib', 'Social Services', 'Social Worker', ''),
(138, '8663', 'Wala Bamahmoud', 'PATIENT AFFAIRS', 'Admin Clerk', ''),
(139, '8610', 'Elham A. Howsawi', 'MEDICAL RECORD', 'Manager', '1411'),
(140, '8611', 'Mina A. Luy', 'MEDICAL RECORD', 'Admin. Assistant', ''),
(141, '8612', 'Encoding', 'MEDICAL RECORD', '', ''),
(142, '8613', 'Medical Translation', 'MEDICAL RECORD', '', ''),
(143, '8614', 'Fayza A. Batooq   ', 'MEDICAL RECORD', 'Transcription Supervisor', ''),
(144, '8693', 'IN PT Assembly&Anlysis 1', 'MEDICAL RECORD', '', ''),
(145, '8627', 'IN PT Assembly&Anlysis 2', 'MEDICAL RECORD', '', ''),
(146, '8615', 'DEFICIENCY&DR.Review 2', 'MEDICAL RECORD', '', ''),
(147, '8692', 'DEFICIENCY&DR.Review 1', 'MEDICAL RECORD', '', ''),
(148, '8619', 'Haifa Halawani', 'MEDICAL RECORD  Reception', 'Admin. Clerk', ''),
(149, '8620', 'Supervisor OFFICE', 'MEDICAL RECORD', '', ''),
(150, '8621', 'Out patient Ass&Anlysis 1', 'MEDICAL RECORD', '', ''),
(151, '8622', 'Out patient Ass&Anlysis 2', 'MEDICAL RECORD', '', ''),
(152, '8623', 'Rawam Alamri', 'MEDICAL RECORD', 'Tech', ''),
(153, '8627', 'Hadel', 'MEDICAL RECORD', ' Translator', ''),
(154, '8628', 'Medical Translation', 'MEDICAL RECORD', '', ''),
(155, '8629', 'Ahmalin', 'MEDICAL RECORD-Coding', '', ''),
(156, '8630', '', 'MEDICAL RECORD-Coding', '', ''),
(157, '8631', 'Emilen', 'MEDICAL RECORD-Coding', 'Coder', ''),
(158, '8632', 'Reem', 'Medical Reports', 'Medical Record clerk', ''),
(159, '8693', 'Rowida Alharthi', 'MEDICAL RECORD', 'Medical Record Tech', ''),
(160, '8660', 'Abudallah Howsawi', 'Registration & admission', 'Registration Supervisor', ''),
(161, '8661', 'Rakan S. Alwethainani', 'Registration & admission', '', ''),
(162, '8662', 'Osama Binabdulrahman', 'Registration & admission', '', ''),
(163, '8663', 'Main Registration 4', 'Registration & admission', '', ''),
(164, '8664', 'Admission Office Reception', 'Registration & admission', '', ''),
(165, '8665', '', 'Registration & admission', '', ''),
(166, '8688', 'Appointments office', 'Registration & admission', '', ''),
(167, '8667', ' ER RECEPTION ', 'Registration & admission', '', ''),
(168, '8668', 'Medical coordination fax', 'Registration & admission', '', ''),
(169, '8669', 'OPD 1 Registration', 'PATIENT AFFAIRS', '', ''),
(170, '8670', 'OPD 1 Registration', 'PATIENT AFFAIRS', '', ''),
(171, '8671', 'Dental Reception', 'PATIENT AFFAIRS', '', ''),
(172, '8672', 'Dental Reception', 'PATIENT AFFAIRS', '', ''),
(173, '8673', 'OPD 1 Registration', 'PATIENT AFFAIRS', '', ''),
(174, '8680', 'OPD 1 Registration', '', 'Asma', ''),
(175, '8674', ' Medical Coordination', 'PATIENT AFFAIRS', 'Amal A. Alzailae', ''),
(176, '8675', 'khlood alzeqibi', ' Medical Coordination', '', ''),
(177, '8677', 'Mohammad ALGarni', 'OPD Registration', 'Supervisor', ''),
(178, '8678', '', 'Social Service', '', ''),
(179, '8602', 'Maha Bakish', 'Social Service', 'Unit Asst', ''),
(180, '8681', 'Walaa Bamahmoud', 'Social Service', 'Patient Relation.REP', ''),
(181, '8682', '', 'Social Service', '', ''),
(182, '9100', 'Hassan Kelabi', '', 'Patient Relation.REP', ''),
(183, '8686', 'Abdulrahman Gaffas', 'Main Admition Office', 'Supervisor', ''),
(184, '8689', 'Hatan', 'Mortuary Attendant', '', ''),
(185, '8690', 'Zohor', 'Patient Affairs', 'Admin Clerk', ''),
(186, '8691', 'Ibrahim Alawedi', 'Patient Relation', 'Manager', ''),
(187, '8699', 'FAYEZ AL-SHEHRI', 'PATIENT AFFAIRS', 'ASSISTANT Director', ''),
(188, '', '', 'ENGINERING', '', ''),
(189, '8700', 'AHMAD AL-SALMI', ' ENGINERING ', 'DIRECTOR', ''),
(190, '8702', 'Anas Tojar Alshahi', 'MAINTINANCE', 'Manager', ''),
(191, '8703', 'ENG.MAHER ', 'DAR MEDICAL EQUIMPMENT', 'Manager', ''),
(192, '8704', 'ENG.MOHAMMED ALHARTHI', 'Architect', 'ENGINEER', ''),
(193, '8705', 'ENG.NAWAF ALSHEHRI', 'MECHANICAL', 'ENGINEER', '1388'),
(194, '8706', 'ENG. Abdullah ALZahrani', 'ELECTICAL', 'ENGINEER', ''),
(195, '8707', 'ENG.Hesham ALGhamdi', 'BIO MED', 'Manager', '1366'),
(196, '8708', 'BMS', 'BMS', '', ''),
(197, '8709', 'MAINTINANCE ORDER ', 'MAINTINANCE COMPANY', '', ''),
(198, '8710', '', 'BIO MED WORKSHOP', '', ''),
(199, '8711', 'BAILIANANG', 'ENGINERING', 'SECRETARY', ''),
(200, '8712', '', 'Workshop Electical', '', ''),
(201, '8714', 'sattam', 'MECHANICAL', 'Supervisor', ''),
(202, '', '', 'SUPPORT SERVICES', '', ''),
(203, '8808', 'Rayed', 'Kitchen  ', 'Manager', ''),
(204, '8810', 'CATERING MANAGER', 'Kitchen  ', '', ''),
(205, '8813', 'Women Area ', 'Kitchen  ', '', ''),
(206, '8814', 'Women Area ', 'Kitchen  ', '', ''),
(207, '9504', 'Area ER ', 'Kitchen', '', ''),
(208, '8815', ' MEN Area CASHER', 'Kitchen  ', '', ''),
(209, '8816', 'Laundry Order', 'laundry', '', ''),
(210, '8817', 'Tailor', 'laundry', '', ''),
(211, '8818', 'Mohammed kifi ', 'Housekeeping', 'Supervisor ', ''),
(212, '8819', 'Bassam Alshehri', 'laundry', 'Manager', ''),
(213, '8820', 'Mohammed  Awaji', 'Transportation', ' Manager ', '1390'),
(214, '8822', 'Depatcher  Supervisor', 'Transportation', 'Supervisor ', ''),
(215, '', '', ' MATERIALS', '', ''),
(216, '8800', 'Fawaz Alzaidi ', 'MATERILS', 'DIRECTOR', ''),
(217, '8855', 'Mosab Assohaimi', 'Warehouse', 'Manager', '1455'),
(218, '8512', 'Mohammed ALSHEHRI', 'PURCHASING', 'Manager', ''),
(219, '8852', 'MAHDI ALABDALI', 'PURCHASING', '', ''),
(220, '8853', 'ADEL ALTWIRQIE', 'Warehouse', 'SUPERVISOR', ''),
(221, '8854', 'Ahmad Alharbi', 'PURCHASING', '', ''),
(222, '8851', 'Mazin Abdallmalik', 'Warehouse', 'SUPERVISOR', ''),
(223, '8856', 'SHAHADAH ', 'Warehouse', 'SECRETARY', ''),
(224, '8858', 'fax', 'Warehouse', '', ''),
(225, '8859', 'MAJED ALQOURASHI', 'PURCHASING', 'Senior MED', ''),
(226, '8850', 'Zakarya Altorkstani', 'PURCHASING', 'Manager', ''),
(227, '8861', 'Ibrahim Hazzazy', 'PURCHASING', '', ''),
(228, '8862', 'Dhaia Alshreef', 'PURCHASING', '', ''),
(229, '8863', 'Fareed', 'PURCHASING', 'Asst Warehouse Manager', ''),
(230, '8864', 'Ibrahim', 'PURCHASING', 'Data entry', ''),
(231, '8865', 'Khalid Fardous', 'PURCHASING', 'Planning Manager', ''),
(232, '8866', 'Naif Alghamdi', 'Property', 'SUPERVISOR', ''),
(233, '8867', 'Noor', '', '', ''),
(234, '', '', 'CONTRACTES  MANAGMENT', '', ''),
(235, '8857', 'Ahmad ALZahrani', '', 'SPECIALIST', ''),
(236, '', '', 'COMMUNICATIONS', '', ''),
(237, '8893', 'ALI ALSHEHRI', '', 'MANAGER', '1330'),
(238, '8895', 'COMMUNICATIONS WORKSHOP', 'TECHNICAL', 'THE TECHNICIAN 1', ''),
(239, '8896', 'Khaled ALKHAIBARI', 'TECHNICAL', 'CHIEF', '1331'),
(240, '8899', 'FAX', 'COMMUNICATIONS', '', ''),
(241, '', '', 'SECURITY', '', ''),
(242, '8951', 'ABDUALLAH ALGARNI', 'SECURITY AND SAFETY', 'Manager', ''),
(243, '9001', '', 'Main Reception', '', ''),
(244, '2222', 'Control Room', 'SECURITY AND SAFETY', '', '1432'),
(245, '8955', 'Ali Alshomrani', 'SECURITY', 'Supervisor', '1433'),
(246, '8956', '', 'MAIN GATE', '', ''),
(247, '8957', 'SECURITY GUARD', 'ER', '', ''),
(248, '8958', 'SECURITY GUARD', 'OPD 1', '', ''),
(249, '8959', 'Riyadh', '', 'Supervisor', ''),
(250, '8950', 'YAHYA Alzahrani', 'Military Affairs', '', ''),
(251, '', '', 'VIP AND EMPLOYEE CLINIC', '', ''),
(252, '9002', 'Nurse Station', '', '', ''),
(253, '9003', '', 'VIP CLINIC', '', ''),
(254, '9004', 'DR.Khalid Aboarqoub', ' EMPLOYEE CLINIC', 'Family Medical', '1090'),
(255, '', '', 'MEDIA Office', '', ''),
(256, '9009', 'DR.ALI  Alqarni', 'MEDIA Office', 'Manager', ''),
(257, '', '', 'Dietitian Clinic ', '', ''),
(258, '9029', 'Amani al dajani', 'Dietitian', '', ''),
(259, '9049', 'Aisha Farsi ', 'Dietitian', '', ''),
(260, '9047', 'LYILA', 'Dietitian', '', ''),
(261, '9048', 'Hanan', 'Dietitian', '', ''),
(262, '8809', 'Dietary Room', 'Dietitian', '', ''),
(263, '', '', 'OPD ', '', ''),
(264, '9028', 'NIHMAH', 'OPD head nurse', '', '1206'),
(265, '8683', 'FEMALE Registration', '', '', ''),
(266, '', '', 'OB GYN ', '', ''),
(267, '9008', 'Nurse Station', 'OB GYN ', '', ''),
(268, '9010', 'CLINIC ', 'OB GYN ', '', ''),
(269, '9011', 'CLINIC ', 'OB GYN ', '', ''),
(270, '9012', 'CLINIC ', 'OB GYN ', '', ''),
(271, '9013', 'CLINIC ', 'OB GYN ', '', ''),
(272, '9014', 'CLINIC ', 'OB GYN ', '', ''),
(273, '', '', ' PEDIATRIC', '', ''),
(274, '9022', 'Nurse Station', 'PEDIATRIC', '', ''),
(275, '9018', 'Dr. Abdulsalam ', 'PEDIATRIC', '', '1044'),
(276, '9019', 'CLINIC 2', 'PEDIATRIC', '', ''),
(277, '9020', 'CLINIC 3', 'PEDIATRIC', '', ''),
(278, '9021', '', ' WELL BABY & VACCINATION', '', ''),
(279, '', '', '  E.N.T ', '', ''),
(280, '9030', ' Nurse Station', '', '', ''),
(281, '9034', 'Dr.Imtiaz Ahmad Khan ', 'CLINIC 1', 'REGISTRAR', '1037'),
(282, '9035', '', 'CLINIC 2', '', ''),
(283, '9036', '', 'CLINIC 4', '', ''),
(284, '9037', ' ', 'AUDOLOGY', '', ''),
(285, '', '', 'ORTHOPEDIC', '', ''),
(286, '9579', 'DR Mazin Taib', '', 'Acting Director', '1039'),
(287, '8475', 'Mohammd Abo hife', '', '', ''),
(288, '9038', 'Nurse Station', '', '', ''),
(289, '9039', 'Nurse Station', '', '', ''),
(290, '9042', '', ' CLINIC 3', '', ''),
(291, '9043', '', 'CLINIC 4', '', ''),
(292, '', '', 'neurology', '', ''),
(293, '9045', 'Tech.Ayesha', 'E.M.G', '', '1096'),
(294, '9046', 'Tech.Wahby', 'E.E.G', '', ''),
(295, '', '', 'Medical + Endocrine ', '', ''),
(296, '9104', 'Nurse Station', '', '', ''),
(297, '9105', 'Nurse Station', '', '', ''),
(298, '9106', '', ' CLINIC 1', '', ''),
(299, '9107', '', ' CLINIC 2', '', ''),
(300, '', '', 'CARDIOLOGY', '', ''),
(301, '9150', 'Dr.Mohammad Attas', 'CARDIOLOGY', 'CONSULTANT', '1055'),
(302, '9024', 'Nurse Station', 'CARDIOLOGY', '', ''),
(303, '9027', 'Nurse Station', 'CARDIOLOGY', '', ''),
(304, '9025', 'ECHO HEART', 'CARDIOLOGY', '', ''),
(305, '9026', 'STRESS ECHO', 'CARDIOLOGY', '', ''),
(306, '', '', 'UROLOGY', '', ''),
(307, '9120', ' Nurse Station', 'UROLOGY', '', ''),
(308, '9121', ' Nurse Station', 'UROLOGY', '', ''),
(309, '9116', '', 'CLINIC', '', ''),
(310, '9117', 'Dr.Sakher', 'UROLOGY LABORATORY', '', '1137'),
(311, '9118', 'Dr. Ala Alddin Barham', 'UROLOGY LABORATORY', '', '1092'),
(312, '', '', 'ENDOSCOPY', '', ''),
(313, '9119', 'Nurse Station ', 'ENDOSCOPY', '', ''),
(314, '', '', ' CYSTOSCOPY ', '', ''),
(315, '9122', '', ' DIGESTIVE TELESCOPE', '', ''),
(316, '9123', '', ' BRONCHOSCOPY', '', ''),
(317, '9124', '', ' Respiratory Telescope', '', ''),
(318, '', '', 'DIALISYS', '', ''),
(319, '9125', 'Head Nurse', '', '', ''),
(320, '9126', 'Dr. Hasnah', 'Nephrologist', '', ''),
(321, '9127', 'Nurse Station', '', '', ''),
(322, '', '', 'DERMA', '', ''),
(323, '9130', 'Nurse satation', ' ', '', ''),
(324, '9131', 'Nurse satation', '', '', ''),
(325, '9132', 'Khaled saadaldeen', 'CLINIC 1', '', '1089'),
(326, '9133', '', ' CLINIC 2', '', ''),
(327, '9134', '', 'CLINIC 3', '', ''),
(328, '9135', '', 'CLINIC 4', '', ''),
(329, '', '', 'OPTHA', '', ''),
(330, '9130', 'Nurse satation', ' ', '', ''),
(331, '9131', 'Nurse satation', '', '', ''),
(332, '9138', 'Nurse Station', 'OPTHA', '', ''),
(333, '9140', '', 'OPTICIAN OPHTHALMOLOGY ', '', ''),
(334, '9110', '', 'CLINIC 1', '', ''),
(335, '9143', 'Monir Osman', ' CLINIC 1', 'CONSULTANT', ''),
(336, '9142', 'MOHAMED NAGEB', 'CLINIC 2', 'Registrar', ''),
(337, '9141', 'Arif Khan', 'CLINIC 3', '', ''),
(338, '9144', '', 'CLINIC 4', '', ''),
(339, '9145', 'Dr.Rami', ' CLINIC 1', '', ''),
(340, '', '', 'DENTAL', '', ''),
(341, '8671', '', 'Reservation', '', ''),
(342, '8672', 'RZAZ', 'Reservation', '', ''),
(343, '9581', 'Ali AL Zahrani', '', 'CONSULTANT', ''),
(344, '9148', 'DR.MOHAMMD MAHFOUZ', ' DENTAL CINIC  1', 'CONSULTANT', ''),
(345, '9149', 'DR. IMRAN KHAN', 'DENTAL CINIC 2', 'Resident', ''),
(346, '9156', 'DR.MUHAMMED AZMATULAAH', ' DENTAL CINIC 3', 'Resident', ''),
(347, '9157', '', 'DENTAL LAB', '', ''),
(348, '9151', 'DR.SHOAIB', 'DENTAL CINIC 4', 'Resident', ''),
(349, '9152', 'DR.SHAJETH', 'DENTAL CINIC 5', 'Resident', ''),
(350, '9153', 'DR.SAMRA', 'DENTAL CINIC 6', 'Resident', '1047'),
(351, '9154', 'DR.FARHEEN', 'DENTAL CINIC 7', 'Resident', ''),
(352, '9155', 'DR.SHAMEEN', 'DENTAL CINIC 8', '', ''),
(353, '9160', 'Medical Resident Doctor', 'OPD2', 'Resident', ''),
(354, '', '', ' PHARMACY', '', ''),
(355, '9080', 'Dr. Abdelkarim H. Eisa', 'BASEMENT', 'PHARMACY MANAGER', ''),
(356, '9081', 'Majed M. jaweed', 'BASEMENT', 'IN-PATIENT SUPERVISOR', ''),
(357, '9083', 'MOHAMMED AL NUFAIE', 'BASEMENT', 'PHARMACIST', ''),
(358, '9070', 'HASSAN BARAYAN', 'NARCOTIC UNIT', 'NARCOTIC SUPERVISOR???', '1266'),
(359, '9071', 'ROAA AL-SAGGA', 'BASEMENT', 'OUT PATIENT SUPERVISOR', '1206'),
(360, '9074', '', 'OPD 1', '', ''),
(361, '9075', '', 'OPD 1', 'PHARMACIST', ''),
(362, '9076', 'ER PHARMACY', 'ER', '', ''),
(363, '9077', 'ROAA AL-SAGGA', 'OPD 1', 'Supervisor', ''),
(364, '9078', 'Shouq', 'BASEMENT', 'QUALITY OFFICER', ''),
(365, '', '', ' LABORTARY ', '', ''),
(366, '9573', 'Dr. Heba Raslan', 'LAB', 'LAB DIRECTOR', '1252'),
(367, '9124', 'Yahya Alzahrani', 'LAB', 'LAB SPECIALIST', ''),
(368, '9115', 'Mansor  Alsaidi', 'LAB STORE', 'LAB SPECIALIST', ''),
(369, '9561', 'Laboratory Staff', '', '', ''),
(370, '9562', 'Dr.Jamal Thabit', 'HEMATOLOGY', 'Consultant', ''),
(371, '9564', ' TOXICOLOGY', 'LAB', '', ''),
(372, '9565', 'Parasitology', 'MAIN LAB', '', ''),
(373, '9566', 'SERLOLOGY', 'MAIN LAB', '', ''),
(374, '9567', 'HEMATOLOGY', 'MAIN LAB', '', ''),
(375, '9568', 'BIO CHEMISTRY', 'MAIN LAB', '', ''),
(376, '9569', 'Histopatholog', 'MAIN LAB', 'Consultant Histopathologist', ''),
(377, '9584', 'Histopatholog', 'MAIN LAB', '', ''),
(378, '9570', 'Dr.Eman Alsobaie', ' MAIN LAB', 'Consultant Microbiologist', ''),
(379, '9571', 'Microbiolog', 'MAIN LAB', ' ', ''),
(380, '9574', 'BLOOD BANK ', 'BLOOD BANK ', '', ''),
(381, '9575', 'Blood Donation', '', '', ''),
(382, '9576', 'Dr.Ahmad Nehad', 'BLOOD BANK ', 'Consultant', ''),
(383, '9577', 'OPD Phlebotomy Reception', 'BLOOD BANK ', '', ''),
(384, '9578', ' PCR ROOM', 'MAIN LAB', '', ''),
(385, '9580', 'Fax', 'MAIN LAB', '', ''),
(386, '9582', 'Dr: Abdulnabi', 'MAIN LAB', 'Histopathology', ''),
(387, '9585', 'Mohammad Alghamdi', '', '', ''),
(388, '9587', 'Female Phlebotomy Reception', '', 'Lab Technicians Supervisor', ''),
(389, '9588', 'Dr: Hani M Alafghani', '', 'Consultant', ''),
(390, '', '', 'PHYSIOTHERAPY', '', ''),
(391, '9590', ' ABDAN BIN SAYEED', 'Physiotherapy', 'Specialist', ''),
(392, '9591', 'Muna Yousef ', 'Physiotherapy', 'Specialist', '1175'),
(393, '9589', 'Dr.Heba', 'Physiotherapy', 'Specialist', ''),
(394, '', '', 'RADIOLOGY ', '', ''),
(395, '9536', ' Nurse Station', 'RADIOLOGY', '', ''),
(396, '', ' Nurse Station', 'RADIOLOGY', '', ''),
(397, '9556', ' FAX', 'RADIOLOGY', '', ''),
(398, '9550', 'DR.Ayman Iskandar', 'RADIOLOGY', 'Consultant', ''),
(399, '9549', 'Faidah', 'RADIOLOGY', 'SECRETARY', ''),
(400, '9557', 'Mai M. Jezani', 'RADIOLOGY', 'Physicist ', '1288'),
(401, '9545', 'Omar abubaker ', 'RADIOLOGY', 'Supervisor', ''),
(402, '9546', 'OFFICE ', 'X-RAY', '', ''),
(403, '9544', 'Dr.Nisreen', 'Mammography Station', '', ''),
(404, '9558', '', 'BMD ROOM', '', ''),
(405, '9548', 'Fluorscopy Room', '', '', ''),
(406, '9539', 'Room 1', 'GENERAL X-RAY 1', '', ''),
(407, '9540', 'Room 2', 'GENERAL X-RAY 2', '', ''),
(408, '9541', '', 'CT-SCANN Room', '', ''),
(409, '9596', 'Dr.Wail  ', 'CT SCANN OFFICE', '', ''),
(410, '9542', 'Dr.AymanTahan', '', 'Consultant', ''),
(411, '9552', 'Room 1', 'Ultra Sound 1', '', ''),
(412, '9553', 'Room 2', 'Ultra Sound 2', '', ''),
(413, '9597', 'Dr.Haitham', 'CT/MRI', 'Consultant', ''),
(414, '9554', '', 'MRI UNIT ROOM', '', ''),
(415, '9598', 'Dr.Tamir', 'MRI OFFICE', '', ''),
(416, '9533', '', 'ER X-RAY', '', ''),
(417, '9592', '', 'DOCTORS ROOM', '', ''),
(418, '9592', 'DR.Hazem Shalbi', 'RADIOLOGY', 'Resident', ''),
(419, '9593', 'DR.Ahmed Elaryan', '', 'Registrar', ''),
(420, '9594', 'Dr.Hassan', '', 'Registrar', ''),
(421, '9502', 'RASWL', ' ', 'ASSISTANT', ''),
(422, '9595', 'DR.Mohammed Elfahmi', '', '', ''),
(423, '', '', ' ER', '', ''),
(424, '9508', '', 'ER', 'ON DUTY MANAGER', ''),
(425, '9514', '', 'ER', ' DIRECTORY', ''),
(426, '9515', 'Pediatric Doctors Office', 'ER', '', ''),
(427, '9509', 'Resuscitation area  ', 'ER', '', ''),
(428, '9518', 'NURSE STATION', 'ER', '', ''),
(429, '9519', 'NURSE STATION', 'ER', '', ''),
(430, '9526', '', 'ER', 'HEAD NURSE OFFICE', ''),
(431, '9527', 'ER Reception', 'ER', '', ''),
(432, '9532', 'RAPID ASSISSTENT ZONE', 'ER', '', ''),
(433, '9534', 'RAPID ASSISSTENT ZONE', 'ER', '', ''),
(434, '9535', 'ER PEDIATRIC', 'ER', '', ''),
(435, '', '', 'SURGERY', '', ''),
(436, '9108', 'Nurse Station', 'SURGERY', '', ''),
(437, '9109', 'Nurse Station', 'SURGERY', '', ''),
(438, '9112', 'DR.ABDULL MAJEED', 'CLINIC 2', '', '1132'),
(439, '9114', '', 'CLINIC 3', '', ''),
(440, '9113', '', 'WOUND CARE', '', ''),
(441, '', '', 'OR', '', ''),
(442, '9601', 'Nurse Station', 'ON CALL TEAM', '', '1211'),
(443, '9602', 'Nurse Station', '', '', ''),
(444, '9603', 'Meeting Room', 'Anesthesia', 'Anesthesia Doctors RM', ''),
(445, '9604', 'Head Nurse Office', '', 'Julaila Rosli', '1208'),
(446, '9608', 'NURSE STATION ', 'RECOVARY ', '', ''),
(447, '9609', 'NURSE STATION ', 'RECOVARY ', '', ''),
(448, '9612', 'Anesthesia Tech', 'Anesthesia', '', ''),
(449, '9614', 'MOHAMMAD AL-FAHMI', 'Anesthesia', 'SUPERVISOR ANESTHESIA', ''),
(450, '9615', 'Receving', 'Day surgery', '', ''),
(451, '9617', 'Receving', 'Day surgery', '', ''),
(452, '9641', 'NURSE STATION ', 'Day surgery', '', ''),
(453, '9642', 'NURSE STATION ', 'Day surgery', '', ''),
(454, '9643', 'Day surgery', 'Day surgery', '', ''),
(455, '9644', 'Day surgery', 'Day surgery', '', ''),
(456, '9645', 'ANESTHESIA OFFICE', 'ANESTHESIA', '', ''),
(457, '9648', 'Dr Ehab', 'Doctors Room', ' ANESTHESIA', ''),
(458, '9649', 'Dr.Tariq', 'Doctors Room', ' ANESTHESIA', ''),
(459, '9646', 'Day surgery', 'Day surgery', '', ''),
(460, '', '', 'A.I.C.U', '', ''),
(461, '9620', 'Nurse Station', '', '', ''),
(462, '9621', 'Nurse Station', '', '', ''),
(463, '9627', 'SAMI JARWAN', '', 'HEAD NURSE', '1204'),
(464, '9629', 'DR. Sayed Ahmed Mohamed', 'Consultant', 'Consultant', ''),
(465, '', '', 'P.I.C.U', '', ''),
(466, '9630', 'NURSE STATION', '', '', ''),
(467, '9631', 'NURSE STATION', '', '', ''),
(468, '9632', '', 'OBSERVATION 1', '', ''),
(469, '9633', '', 'OBSERVATION 2', '', ''),
(470, '9634', '', '', '', ''),
(471, '9640', 'Nour', 'HEAD NURSE', '', ''),
(472, '', '', 'C.C.U', '', ''),
(473, '9635', 'NURSE STATION', ' ', '', ''),
(474, '9636', 'NURSE STATION', '', '', ''),
(475, '9637', '', 'C.C.U HEAD NURSE OFFICE', '', ''),
(476, '', '', 'Second Floor', '', ''),
(477, '9238', 'NURSE STATION', 'OB GYN', '', ''),
(478, '9239', 'NURSE STATION', 'OB GYN', '', ''),
(479, '9202', 'Consultant on Call', '', '', ''),
(480, '9203', 'Consultant on Call', '', '', ''),
(481, '9204', ' Dr. nahed khalfan', 'OB GYN', '', ''),
(482, '9205', 'Dr. Tahera', 'OB GYN', '', ''),
(483, '9206', 'Consultant on Call', 'OB GYN', '', ''),
(484, '9207', ' Dr. Sufia Mohammad', 'OB GYN', '', ''),
(485, '9208', 'Dr. Yassen ', 'OB GYN', 'Consultant', ''),
(486, '9209', 'Consultant Room', 'OB GYN', '', ''),
(487, '9210', 'Consultant Room', 'OB GYN', '', ''),
(488, '9211', 'Consultant Room', 'OB GYN', '', ''),
(489, '9212', 'Dr.Shahen', 'OB GYN', '', ''),
(490, '9240', 'Nur.Sharefah', 'OB GYN', 'Head Nurse', ''),
(491, '9241', 'Nur.Sharefah', 'OB GYN', 'Head Nurse', ''),
(492, '9245', 'Doctors ', '', '', ''),
(493, '9246', '', '', '', ''),
(494, '9247', '', '', '', ''),
(495, '9251', ' Nurse station delivery room', '', '', ''),
(496, '9252', ' Nurse station delivery room', '', '', ''),
(497, '9254', 'OR Room', 'OB GYN', '', ''),
(498, '9255', 'RECOVARY  DELIVERY ', '', '', ''),
(499, '9256', 'DELIVERY 4', '', '', ''),
(500, '9257', 'DELIVERY 3', '', '', ''),
(501, '9258', 'DELIVERY 2', 'OB GYN', '', ''),
(502, '9259', 'DELIVERY 1', '', '', ''),
(503, '9260', 'Claas Room', '', '', ''),
(504, '9292', '', '', '', ''),
(505, '', '', 'THIRD FLOOR(FEMALE )', '', ''),
(506, '9301', 'Public phone ', '', '', ''),
(507, '9302', 'PEDIATRIC NURSE STATION', 'Female medical ', '', ''),
(508, '9303', 'PEDIATRIC NURSE STATION', 'Female medical ', '', ''),
(509, '9304', 'Nurse station', 'Female Sergical', '', ''),
(510, '9305', 'Nurse station', 'Female Sergical', '', ''),
(511, '9306', 'Head Nurse Office', 'Female medical / Sergical', '', ''),
(512, '9309', 'Head Nurse Office', '', '', ''),
(513, '9308', 'Doctors Office', 'Female medical / Sergical', '', ''),
(514, '9381', 'Doctors Office', 'Female Doctors Office', '', ''),
(515, '9382', 'Hanan Hakami', 'Female Doctors Office', '', ''),
(516, '9383', 'Fawsiyah Basher', 'Female Doctors Office', '', ''),
(517, '9384', 'Alaa Manjed', 'Female Doctors Office', '', ''),
(518, '9385', 'Abdulrahman Idris', 'Male Doctors Office', '', ''),
(519, '9371', '', 'Male Doctors Office', '', ''),
(520, '9372', 'Dr. osaama', 'Male Doctors Office', '', ''),
(521, '9373', '', 'Male Doctors Office', '', ''),
(522, '9374', 'Dr.Mohammed Azam', 'Male Doctors Office', 'Registrar Office', ''),
(523, '9375', '', 'Male Doctors Office', '', ''),
(524, '9376', '', 'Male Doctors Office', '', ''),
(525, '9377', '', 'Male Doctors Office', '', ''),
(526, '9378', '', 'Male Doctors Office', '', ''),
(527, '9379', 'Dr. ESAAM', 'Male Doctors Office', '', ''),
(528, '9380', '', 'Male Doctors Office', '', ''),
(529, '', '', 'FOURTH FLOOR(MALE )', '', ''),
(530, '9401', 'NURSE STATION', '', '', ''),
(531, '9402', 'NURSE STATION', 'MALE MEDICAL', '', ''),
(532, '9403', 'NURSE STATION', 'MALE MEDICAL', '', ''),
(533, '9404', 'NURSE STATION', 'MALE Surgical', '', ''),
(534, '9405', 'NURSE STATION', 'MALE Surgical', '', ''),
(535, '9406', '', 'Doctors Office ', '', ''),
(536, '9407', 'Ahmad Alnoayrat', 'Head Nurse Office', 'Head Nurse', ''),
(537, '9408', '', 'Doctors Office', '', ''),
(538, '9409', '', 'Doctors Office', '', ''),
(539, '9411', 'Surgary Resident Doctor', 'Doctors Office', '', ''),
(540, '9470', 'Mohammod Abo Hif', 'Doctors Office', '', ''),
(541, '9473', 'Dr. ISHAQ MADAWI', 'Doctors Office', 'SURGARY CUNSULTANT', ''),
(542, '9474', 'Dr. AHMAD ALWAN', 'Doctors Office', 'E.N.T CUNSULTANT', ''),
(543, '9476', 'Dr.ADBULLMAJED JAT', 'Doctors Office', 'SURGARY CUNSULTANT', ''),
(544, '9479', 'Dr. MUNEER OTHMAN', 'Doctors Office', 'OPTHA CUNSULTANT ', ''),
(545, '9480', 'saif aldean abdulrhman', 'Doctors Office', '', ''),
(546, '9481', 'Dr. Yasseen', 'Doctors Office', 'GYN', ''),
(576, '8306', 'Dr. Dakil Alsaedih', 'HOSPITAL ADMIN', '', ''),
(577, '112', 'test', 'test', '', 'bleeb');
--
-- Database: `stores`
--

-- --------------------------------------------------------

--
-- بنية الجدول `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL,
  `item` varchar(20) NOT NULL,
  `aname` varchar(20) DEFAULT NULL,
  `num` int(20) DEFAULT NULL,
  `used` int(20) DEFAULT NULL,
  `total` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `item` (`item`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=88 ;

--
-- إرجاع أو استيراد بيانات الجدول `items`
--

INSERT INTO `items` (`id`, `type`, `item`, `aname`, `num`, `used`, `total`) VALUES
(1, '', 'PC-dell_AIO', 'adminuser', 24, NULL, NULL),
(2, '', 'PC-dell_7010', NULL, 39, NULL, NULL),
(3, '', 'PC-dell_9010', NULL, 80, NULL, NULL),
(4, '', 'PC-dell_9020', NULL, 134, NULL, NULL),
(5, '', 'PC-dell_9030', NULL, 35, NULL, NULL),
(6, '', 'PC-dell_9040', NULL, 120, NULL, NULL),
(7, '', 'PC-dell_2012', NULL, 21, NULL, NULL),
(8, '', '2PC-dell_AIO', NULL, 28, NULL, NULL),
(9, '', 'printer 600', NULL, 11, NULL, NULL),
(10, '', 'pc_test', NULL, 10, NULL, NULL),
(11, '', 'PC-dell_AIO1', NULL, -7, NULL, NULL),
(12, '', 'PC-dell_AIO2', NULL, 40, NULL, NULL),
(13, '', '5PC-dell_AIO', NULL, 75, NULL, NULL),
(14, '', 'PC-dell_AIO5', NULL, 10, NULL, NULL),
(15, '', 'PC-dell_AIO7', NULL, 15, NULL, NULL),
(16, 'pc', '20', NULL, 52, NULL, NULL),
(17, 'pc', 'dell_AIO', NULL, 6, 10, 16),
(18, 'pc', 'dell_AIO2', NULL, 22, NULL, NULL),
(19, 'pc', 'adminuser', NULL, 8, 1, 9),
(20, 'printer', '400', NULL, 19, NULL, NULL),
(21, 'pc', 'dell_9020', NULL, 0, NULL, NULL),
(22, 'printer', '600', NULL, 8, NULL, NULL),
(23, 'scanner', '160', NULL, 9, NULL, NULL),
(24, 'scanner', '140', '-10', 8, NULL, NULL),
(25, 'pc', 'dell-9030', 'adminuser', 8, 2, 10),
(26, 'pc', 'PC-dell-9020', 'adminuser', 8, 2, 10),
(27, 'printer', 'color  200', 'adminuser', -1, NULL, NULL),
(28, 'Photocopier', 'canon', '10', 10, NULL, NULL),
(29, 'screen', '21112', 'adminuser', 39, 8, 47),
(30, 'AIO', '2014', 'adminuser', 14, NULL, NULL),
(31, 'other', 'hp', 'adminuser', 18, 0, 18),
(32, 'pc', 'Dell', 'adminuser', 100, NULL, NULL),
(33, '', 'PC-dell_AIO8', 'adminuser', 0, NULL, NULL),
(34, 'printer', '200', 'adminuser', 0, NULL, NULL),
(35, 'printer', '200c', 'adminuser', 0, NULL, NULL),
(36, 'pc', 'PC-dell_AIO89', 'adminuser', 0, NULL, NULL),
(37, 'pc', 'PC-dell_AIO897', 'adminuser', 4, NULL, NULL),
(38, 'pc', 'PC-dell_AIO8971', 'adminuser', 0, NULL, NULL),
(39, 'pc', 'PC-dell_AIO89717', 'adminuser', 0, NULL, NULL),
(40, 'pc', 'PC-dell_AIO897171', 'adminuser', 0, NULL, NULL),
(41, 'printer', '400d', 'adminuser', 0, NULL, NULL),
(42, 'scanner', '160d', 'adminuser', 30, NULL, NULL),
(43, 'Photocopier', 'canon 1', 'adminuser', 0, NULL, NULL),
(44, 'Photocopier', 'canon 12', 'adminuser', 0, NULL, NULL),
(45, 'Photocopier', 'canon 123', 'adminuser', 0, NULL, NULL),
(46, 'Photocopier', 'canon 1234', 'adminuser', 0, NULL, NULL),
(47, 'Photocopier', 'canon 12341', 'adminuser', 0, NULL, NULL),
(48, 'Photocopier', 'canon 1231', 'adminuser', 0, NULL, NULL),
(49, 'scanner', 'canon 18', 'adminuser', 10, NULL, NULL),
(50, 'pc', 'dell2', 'adminuser', 0, NULL, NULL),
(51, 'printer', '400co1', 'adminuser', -1, NULL, NULL),
(52, 'Printer', '400 co', 'adminuser', 100, NULL, NULL),
(53, 'printer', 'o400col', 'adminuser', 0, NULL, NULL),
(54, 'labtop', '15', 'adminuser', 92, 0, 92),
(55, 'pc', 'PC-dell_AIO55', 'adminuser', 0, NULL, NULL),
(56, 'pc', 'PC-dell_AIO54', 'adminuser', 10, NULL, NULL),
(57, 'printer', 'canon 187', 'adminuser', 160, NULL, NULL),
(58, 'printer', '400co1l2', 'adminuser', 0, NULL, NULL),
(59, 'ALL-IN-ONE', 'AIO', 'adminuser', 54, 5, 59),
(60, 'pc', 'PC-dell_ne', 'adminuser', 12, 1, 13),
(61, 'pc', '400co1l', 'adminuser', 4, NULL, NULL),
(62, 'pc', 'PC-dell_AI', 'adminuser', 0, NULL, NULL),
(63, 'scanner', 'canon 182', 'adminuser', 0, NULL, NULL),
(64, 'scanner', 'canon 1822', 'adminuser', 0, NULL, NULL),
(65, 'scanner', 'canon 189', 'adminuser', 0, NULL, NULL),
(66, 'scanner', 'canon 1896', 'adminuser', 1, NULL, NULL),
(67, '2', 'canon 181', 'adminuser', 0, NULL, NULL),
(68, 'pc', 'canon 1d', 'adminuser', 140, NULL, NULL),
(69, '', 'canon 184', 'adminuser', 0, NULL, NULL),
(70, 'pc', 'canon 1855', 'adminuser', 1, 0, 1),
(71, 'scanner', 'canon 181l', 'adminuser', 19, 1, 20),
(72, 'scanner', 'canon 188', 'adminuser', 20, NULL, NULL),
(73, 'pc', 'canon 18767', 'adminuser', 30, NULL, NULL),
(74, 'pc', 'canon 18747', 'adminuser', 60, NULL, NULL),
(75, '21', 'canon 1887', 'adminuser', 25, NULL, NULL),
(77, 'printer', '400co1l6', 'adminuser', 154, 154, 154),
(78, 'printer', 'canon 18m', 'adminuser', 0, 0, 0),
(79, 'printer', 'canon 18v', 'adminuser', 0, 0, 0),
(80, 'ALL-IN-ONE', 'AIOa', 'adminuser', 10, -10, 10),
(81, 'pc', 'PC-dell_AIOq', 'adminuser', 25, 15, 40),
(82, 'other', 'fa', 'adminuser', 5, 0, 5),
(83, 'other', 'far', 'adminuser', 20, 40, 60),
(84, 'other', 'fare', 'adminuser', 24, 0, 24),
(85, 'other', 'last', 'adminuser', 17, -1, 16),
(86, 'Photocopier', 'last2', 'adminuser', 8, 0, 8),
(87, '1233', 'canon 18oo', 'adminuser', 22, 0, 22);

-- --------------------------------------------------------

--
-- بنية الجدول `store`
--

CREATE TABLE IF NOT EXISTS `store` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `type` varchar(200) DEFAULT NULL,
  `item` varchar(20) NOT NULL,
  `oldnum` int(20) DEFAULT NULL,
  `status` varchar(19) NOT NULL,
  `event` varchar(500) DEFAULT NULL,
  `dept` varchar(200) DEFAULT NULL,
  `number` int(20) NOT NULL,
  `newnum` int(20) DEFAULT NULL,
  `cdate` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `note` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=302 ;

--
-- إرجاع أو استيراد بيانات الجدول `store`
--

INSERT INTO `store` (`id`, `type`, `item`, `oldnum`, `status`, `event`, `dept`, `number`, `newnum`, `cdate`, `date`, `name`, `note`) VALUES
(1, NULL, 'PC-dell_2012', NULL, 'add', NULL, NULL, 10, 0, '10/11/2015', 'Tue 02:12 AM', 'adminuser ', ''),
(2, NULL, 'pc_test', NULL, 'add', NULL, NULL, 10, 0, '10/11/2015', 'Tue 02:23 AM', 'adminuser ', ''),
(3, NULL, 'PC-dell_9030', NULL, 'add', NULL, NULL, 10, 0, '10/11/2015', 'Tue 02:54 AM', 'sultan ', ''),
(4, NULL, 'PC-dell_9010', NULL, 'add', NULL, NULL, 10, 0, '10/11/2015', 'Tue 03:58 AM', 'adminuser', ''),
(5, NULL, 'PC-dell_9010', NULL, 'remove', NULL, NULL, 5, 0, '10/11/2015', 'Tue 05:27 AM', 'adminuser', ''),
(6, NULL, 'PC-dell_7010', NULL, 'add', NULL, NULL, 130, 0, '10/11/2015', 'Tue 05:33 AM', 'adminuser', ''),
(7, NULL, 'PC-dell_7010', NULL, 'remove', NULL, NULL, 129, 0, '10/11/2015', 'Tue 05:33 AM', 'adminuser', ''),
(8, NULL, 'PC-dell_7010', NULL, 'add', NULL, NULL, 20, 0, '10/11/2015', 'Tue 05:36 AM', 'adminuser', ''),
(9, NULL, 'PC-dell_7010', NULL, 'remove', NULL, NULL, 19, 0, '10/11/2015', 'Tue 05:36 AM', 'adminuser', ''),
(10, NULL, 'PC-dell_9020', NULL, 'add', NULL, NULL, 115, 0, '10/11/2015', 'Tue 06:29 AM', 'adminuser', ''),
(11, NULL, 'PC-dell_9020', NULL, 'remove', NULL, NULL, 114, 0, '10/11/2015', 'Tue 06:30 AM', 'adminuser', ''),
(12, NULL, 'PC-dell_9030', NULL, 'add', NULL, NULL, 55, 0, '10/11/2015', 'Tue 06:49 AM', 'adminuser', ''),
(13, NULL, 'PC-dell_7010', NULL, 'add', NULL, NULL, 29, 0, '10/11/2015', 'Tue 06:50 AM', 'adminuser', ''),
(14, NULL, '5PC-dell_AIO', NULL, 'add', NULL, NULL, 25, 0, '10/11/2015', 'Tue 06:50 AM', 'adminuser', ''),
(15, NULL, 'PC-dell_AIO1', NULL, 'remove', NULL, NULL, -20, 0, '10/11/2015', 'Tue 06:50 AM', 'adminuser', ''),
(16, NULL, '5PC-dell_AIO', NULL, 'add', NULL, NULL, 35, 0, '11/11/2015', 'Wed 07:40 PM', 'adminuser', ''),
(17, NULL, '5PC-dell_AIO', NULL, 'add', NULL, NULL, 45, 0, '11/11/2015', 'Wed 10:51 PM', 'adminuser', ''),
(18, NULL, 'dell_AIO', NULL, 'add', NULL, NULL, 10, 0, '12/11/2015', 'Thu 01:23 AM', 'adminuser', ''),
(19, NULL, '10', NULL, 'add', NULL, NULL, 20, 0, '12/11/2015', 'Thu 01:24 AM', 'adminuser', ''),
(20, NULL, '20', NULL, 'add', NULL, NULL, 10, 0, '12/11/2015', 'Thu 01:25 AM', 'adminuser', ''),
(21, NULL, 'dell_AIO', NULL, 'add', NULL, NULL, 10, 0, '12/11/2015', 'Thu 01:26 AM', 'adminuser', ''),
(22, NULL, 'dell_AIO', NULL, 'remove', NULL, NULL, 0, 0, '12/11/2015', 'Thu 01:26 AM', 'adminuser', ''),
(23, NULL, 'dell_AIO', NULL, 'add', NULL, NULL, 0, 0, '12/11/2015', 'Thu 01:26 AM', 'adminuser', ''),
(24, NULL, 'dell_AIO', NULL, 'remove', NULL, NULL, 0, 0, '12/11/2015', 'Thu 01:26 AM', 'adminuser', ''),
(25, NULL, 'dell_AIO', NULL, 'remove', NULL, NULL, -50, 0, '12/11/2015', 'Thu 01:31 AM', 'adminuser', ''),
(26, NULL, 'PC-dell_AIO1', NULL, 'add', NULL, NULL, 5, 0, '12/11/2015', 'Thu 01:36 AM', 'adminuser', ''),
(27, NULL, 'dell_AIO2', NULL, 'add', NULL, NULL, 10, 0, '12/11/2015', 'Thu 02:55 AM', 'adminuser', ''),
(28, NULL, 'PC-dell_AIO5', NULL, 'remove', NULL, NULL, -10, 0, '12/11/2015', 'Thu 03:05 AM', 'adminuser', ''),
(29, NULL, 'PC-dell_AIO5', NULL, 'remove', NULL, NULL, -20, 0, '12/11/2015', 'Thu 03:05 AM', 'adminuser', ''),
(30, NULL, 'dell_AIO', NULL, 'add', NULL, NULL, -40, 0, '12/11/2015', 'Thu 03:05 AM', 'adminuser', ''),
(31, NULL, 'PC-dell_AIO5', NULL, 'remove', NULL, NULL, 0, 0, '12/11/2015', 'Thu 03:15 AM', 'adminuser', ''),
(32, NULL, 'dell_AIO', NULL, 'add', NULL, NULL, -30, 0, '12/11/2015', 'Thu 03:17 AM', 'adminuser', ''),
(33, NULL, 'dell_AIO', NULL, 'add', NULL, NULL, 0, 0, '12/11/2015', 'Thu 03:17 AM', 'adminuser', ''),
(34, NULL, 'dell_AIO', NULL, 'add', NULL, NULL, 0, 0, '12/11/2015', 'Thu 03:17 AM', 'adminuser', ''),
(35, NULL, 'dell_AIO', NULL, 'add', NULL, NULL, 0, 0, '12/11/2015', 'Thu 03:17 AM', 'adminuser', ''),
(36, NULL, 'dell_AIO', NULL, 'remove', NULL, NULL, -10, 0, '12/11/2015', 'Thu 03:18 AM', 'adminuser', ''),
(37, NULL, 'dell_AIO', NULL, 'add', NULL, NULL, 0, 0, '12/11/2015', 'Thu 03:18 AM', 'adminuser', ''),
(38, NULL, 'dell_AIO', NULL, 'add', NULL, NULL, 10, 0, '12/11/2015', 'Thu 03:18 AM', 'adminuser', ''),
(39, NULL, 'dell_AIO2', NULL, 'add', NULL, NULL, 35, 0, '12/11/2015', 'Thu 03:19 AM', 'adminuser', ''),
(40, NULL, 'dell_AIO2', NULL, 'remove', NULL, NULL, 15, 0, '12/11/2015', 'Thu 03:19 AM', 'adminuser', ''),
(41, NULL, 'dell_AIO2', NULL, 'add', NULL, NULL, 25, 0, '12/11/2015', 'Thu 03:24 AM', 'adminuser', ''),
(42, NULL, '20', NULL, 'add', NULL, NULL, 35, 0, '12/11/2015', 'Thu 03:24 AM', 'adminuser', ''),
(43, NULL, '20', NULL, 'remove', NULL, NULL, 34, 0, '12/11/2015', 'Thu 03:24 AM', 'adminuser', ''),
(44, NULL, '20', NULL, 'remove', NULL, NULL, 33, 0, '12/11/2015', 'Thu 03:24 AM', 'adminuser', ''),
(45, NULL, '20', NULL, 'add', NULL, NULL, 34, 0, '12/11/2015', 'Thu 03:24 AM', 'adminuser', ''),
(46, NULL, 'PC-dell_7010', NULL, 'add', NULL, NULL, 39, 0, '12/11/2015', 'Thu 03:29 AM', 'adminuser', ''),
(47, NULL, 'PC-dell_AIO1', NULL, 'add', NULL, NULL, 6, 0, '12/11/2015', 'Thu 03:29 AM', 'adminuser', ''),
(48, NULL, 'PC-dell_AIO1', NULL, 'remove', NULL, NULL, 4, 0, '12/11/2015', 'Thu 03:30 AM', 'adminuser', ''),
(49, NULL, 'PC-dell_AIO7', NULL, 'add', NULL, NULL, 10, 0, '12/11/2015', 'Thu 03:37 AM', 'adminuser', ''),
(50, NULL, 'PC-dell_AIO7', NULL, 'add', NULL, NULL, 20, 0, '12/11/2015', 'Thu 03:37 AM', 'adminuser', ''),
(51, NULL, 'PC-dell_AIO7', NULL, 'remove', NULL, NULL, 25, 0, '12/11/2015', 'Thu 03:38 AM', 'adminuser', ''),
(52, NULL, 'PC-dell_AIO7', NULL, 'remove', NULL, NULL, 1, 0, '12/11/2015', 'Thu 03:38 AM', 'adminuser', ''),
(53, NULL, 'PC-dell_AIO1', NULL, 'remove', NULL, NULL, 1, 0, '12/11/2015', 'Thu 03:38 AM', 'adminuser', ''),
(54, NULL, 'PC-dell_AIO7', NULL, 'add', NULL, NULL, 1, 0, '12/11/2015', 'Thu 03:38 AM', 'adminuser', ''),
(55, NULL, 'PC-dell_9020', NULL, 'add', NULL, NULL, 10, 0, '12/11/2015', 'Thu 03:48 AM', 'adminuser', '124</br>'),
(56, NULL, 'PC-dell_AIO', NULL, 'add', NULL, NULL, 10, 20, '12/11/2015', 'Thu 03:58 AM', 'adminuser', ''),
(57, NULL, 'PC-dell_9040', NULL, 'add', NULL, NULL, 0, 120, '12/11/2015', 'Thu 04:01 AM', 'adminuser', ''),
(58, NULL, 'PC-dell_AIO1', NULL, 'add', NULL, NULL, 0, 3, '12/11/2015', 'Thu 04:05 AM', 'adminuser', ''),
(59, NULL, 'PC-dell_AIO5', NULL, 'add', NULL, NULL, 1, 1, '12/11/2015', 'Thu 04:06 AM', 'adminuser', ''),
(60, NULL, 'PC-dell_AIO1', NULL, 'remove', NULL, NULL, 1, 2, '12/11/2015', 'Thu 04:06 AM', 'adminuser', ''),
(61, NULL, 'PC-dell_AIO7', NULL, 'remove', NULL, NULL, 10, -5, '12/11/2015', 'Thu 04:06 AM', 'adminuser', ''),
(62, NULL, 'PC-dell_9040', NULL, 'add', NULL, NULL, 10, 130, '12/11/2015', 'Thu 04:14 AM', 'adminuser', ''),
(63, NULL, 'PC-dell_9040', NULL, 'remove', NULL, NULL, 10, 120, '12/11/2015', 'Thu 04:16 AM', 'adminuser', '130'),
(64, NULL, 'dell_AIO2', NULL, 'add', NULL, NULL, 8, 33, '12/11/2015', 'Thu 04:18 AM', 'adminuser', '25'),
(65, NULL, '20', NULL, 'remove', NULL, NULL, 1, 33, '12/11/2015', 'Thu 04:18 AM', 'adminuser', '34'),
(66, NULL, 'PC-dell_9020', NULL, 'add', NULL, NULL, 10, 134, '12/11/2015', 'Thu 04:20 AM', 'adminuser', '124'),
(67, NULL, '20', NULL, 'add', NULL, NULL, 10, 43, '12/11/2015', 'Thu 02:14 PM', 'adminuser', '33'),
(68, NULL, 'PC-dell_AIO7', NULL, 'add', NULL, NULL, 10, 5, '12/11/2015', 'Thu 03:12 PM', 'admin', ''),
(69, NULL, 'printer 600', NULL, 'add', NULL, NULL, 10, 20, '12/11/2015', 'Thu 03:17 PM', 'admin', ''),
(70, NULL, '5PC-dell_AIO', NULL, 'add', NULL, NULL, 10, 55, '12/11/2015', 'Thu 03:20 PM', 'i am admin', ''),
(71, NULL, 'PC-dell_2012', NULL, 'remove', NULL, NULL, 20, 21, '12/11/2015', 'Thu 03:20 PM', 'i am admin', ''),
(72, NULL, '5PC-dell_AIO', 65, 'add', NULL, NULL, 10, 75, '12/11/2015', 'Thu 03:44 PM', 'i am admin', ''),
(73, NULL, 'PC-dell_AIO2', 39, 'add', NULL, NULL, 1, 40, '12/11/2015', 'Thu 03:44 PM', 'i am admin', ''),
(74, NULL, 'PC-dell_AIO5', 1, 'remove', NULL, NULL, 1, 0, '12/11/2015', 'Thu 03:45 PM', 'i am admin', ''),
(75, NULL, 'PC-dell_AIO5', 0, 'add', NULL, NULL, 0, 0, '12/11/2015', 'Thu 03:46 PM', 'i am admin', ''),
(76, NULL, 'PC-dell_AIO5', 0, 'remove', NULL, NULL, 0, 0, '12/11/2015', 'Thu 03:46 PM', 'i am admin', ''),
(77, NULL, 'printer 600', 20, 'remove', NULL, NULL, 10, 10, '12/11/2015', 'Thu 05:50 PM', 'adminuser', ''),
(78, NULL, 'PC-dell_AIO5', 0, 'remove', NULL, NULL, 10, -10, '12/11/2015', 'Thu 06:14 PM', 'adminuser', ''),
(79, NULL, 'PC-dell_AIO5', -10, 'add', NULL, NULL, 10, 0, '12/11/2015', 'Thu 06:14 PM', 'adminuser', ''),
(80, NULL, 'PC-dell_AIO7', 5, 'add', NULL, NULL, 10, 15, '12/11/2015', 'Thu 06:14 PM', 'adminuser', ''),
(81, NULL, 'PC-dell_AIO5', 0, 'add', NULL, NULL, 10, 10, '12/11/2015', 'Thu 06:14 PM', 'adminuser', ''),
(82, NULL, '20', 43, 'add', NULL, NULL, 10, 53, '12/11/2015', 'Thu 06:29 PM', 'adminuser', ''),
(83, NULL, 'printer 600', 10, 'add', NULL, NULL, 1, 11, '12/11/2015', 'Thu 06:30 PM', 'adminuser', ''),
(84, NULL, 'PC-dell_9030', 55, 'remove', NULL, NULL, 20, 35, '12/11/2015', 'Thu 06:30 PM', 'adminuser', ''),
(85, NULL, 'PC-dell_AIO1', 2, 'remove', NULL, NULL, 10, -8, '12/11/2015', 'Thu 08:53 PM', 'adminuser', ''),
(86, NULL, 'PC-dell_AIO1', -8, 'add', NULL, NULL, 1, -7, '12/11/2015', 'Thu 08:53 PM', 'adminuser', ''),
(87, NULL, 'dell_AIO', 10, 'add', NULL, NULL, 10, 20, '12/11/2015', 'Thu 10:46 PM', 'adminuser', ''),
(88, NULL, 'dell_AIO', 20, 'remove', NULL, NULL, 0, 20, '12/11/2015', 'Thu 10:50 PM', 'adminuser', ''),
(89, NULL, 'dell_AIO', 20, 'remove', NULL, NULL, 0, 20, '12/11/2015', 'Thu 10:52 PM', 'adminuser', ''),
(90, NULL, 'dell_AIO', 20, 'remove', NULL, NULL, 1, 19, '12/11/2015', 'Thu 11:18 PM', 'adminuser', ''),
(91, NULL, 'dell_AIO', 19, 'remove', NULL, NULL, 1, 18, '12/11/2015', 'Thu 11:18 PM', 'adminuser', ''),
(92, NULL, 'adminuser', 0, 'add', NULL, NULL, 10, 10, '12/11/2015', 'Thu 11:19 PM', 'adminuser', ''),
(93, NULL, 'dell_AIO', 18, 'remove', NULL, NULL, 10, 8, '12/11/2015', 'Thu 11:21 PM', 'adminuser', ''),
(94, NULL, 'dell_AIO', 8, 'add', NULL, NULL, 10, 18, '12/11/2015', 'Thu 11:24 PM', 'adminuser', ''),
(95, NULL, '600', 0, 'remove', NULL, NULL, 1, -1, '12/11/2015', 'Thu 11:26 PM', 'adminuser', ''),
(96, NULL, 'dell_AIO2', 33, 'remove', NULL, NULL, 10, 23, '13/11/2015', 'Fri 12:15 AM', 'adminuser', ''),
(97, NULL, 'dell_AIO', 18, 'remove', NULL, NULL, 1, 17, '13/11/2015', 'Fri 12:17 AM', 'adminuser', ''),
(98, NULL, '400', 0, 'add', NULL, NULL, 10, 10, '13/11/2015', 'Fri 01:10 AM', 'adminuser', ''),
(99, NULL, 'PC-dell_AIO5', 10, 'add', NULL, NULL, 1, 11, '13/11/2015', 'Fri 01:26 AM', 'adminuser', ''),
(100, NULL, '400', 10, 'add', NULL, NULL, 12, 22, '13/11/2015', 'Fri 02:14 AM', 'Sultan', ''),
(101, NULL, '600', -1, 'add', NULL, NULL, 10, 9, '13/11/2015', 'Fri 03:09 AM', 'adminuser', ''),
(102, NULL, '20', 53, 'remove', NULL, NULL, 1, 52, '13/11/2015', 'Fri 03:14 AM', 'adminuser', ''),
(103, NULL, 'canon', 0, 'add', NULL, NULL, 10, 10, '13/11/2015', 'Fri 05:39 AM', 'adminuser', ''),
(104, NULL, '140', 0, 'remove', NULL, NULL, 10, -10, '13/11/2015', 'Fri 05:40 AM', 'adminuser', ''),
(105, NULL, 'dell-9030', 0, 'remove', NULL, NULL, 10, -10, '13/11/2015', 'Fri 05:41 AM', 'adminuser', ''),
(106, NULL, 'dell-9030', -10, 'add', NULL, NULL, 10, 0, '13/11/2015', 'Fri 05:41 AM', 'adminuser', ''),
(107, NULL, '140', 0, 'add', NULL, NULL, 10, 10, '13/11/2015', 'Fri 05:41 AM', 'adminuser', ''),
(108, NULL, '21112', 0, 'add', NULL, NULL, 50, 50, '13/11/2015', 'Fri 05:42 AM', 'adminuser', ''),
(109, NULL, 'hp', 0, 'add', NULL, NULL, 20, 20, '13/11/2015', 'Fri 05:50 AM', 'adminuser', ''),
(110, NULL, 'PC-dell-9020', 0, 'add', NULL, NULL, 10, 10, '13/11/2015', 'Fri 06:20 PM', 'adminuser', ''),
(111, NULL, 'dell-9030', 0, 'add', NULL, NULL, 10, 10, '13/11/2015', 'Fri 08:41 PM', 'adminuser', ''),
(112, NULL, 'dell_AIO2', 23, 'remove', NULL, NULL, 1, 22, '13/11/2015', 'Fri 08:48 PM', 'adminuser', ''),
(113, NULL, 'PC-dell_AIO5', 11, 'remove', NULL, NULL, 1, 10, '14/11/2015', 'Sat 03:43 AM', 'adminuser', ''),
(114, NULL, '400', 22, 'remove', NULL, NULL, 1, 21, '14/11/2015', 'Sat 04:27 AM', 'adminuser', ''),
(115, NULL, '160', 0, 'add', NULL, NULL, 1, 1, '14/11/2015', 'Sat 05:23 PM', 'adminuser', ''),
(116, NULL, '600', 9, 'remove', NULL, NULL, 1, 8, '14/11/2015', 'Sat 05:25 PM', 'adminuser', ''),
(117, NULL, 'hp', 20, 'remove', NULL, NULL, 1, 19, '14/11/2015', 'Sat 10:12 PM', 'adminuser', ''),
(118, NULL, '21112', 50, 'remove', NULL, NULL, 1, 49, '14/11/2015', 'Sat 10:22 PM', 'adminuser', ''),
(119, NULL, '21112', 49, 'remove', NULL, NULL, 1, 48, '14/11/2015', 'Sat 10:31 PM', 'adminuser', ''),
(120, NULL, '2014', 0, 'remove', NULL, NULL, 1, -1, '14/11/2015', 'Sat 10:48 PM', 'adminuser', ''),
(121, NULL, '21112', 48, 'remove', NULL, NULL, 1, 47, '14/11/2015', 'Sat 10:50 PM', 'adminuser', ''),
(122, NULL, 'canon', 0, 'add', NULL, NULL, 10, 10, '14/11/2015', 'Sat 10:51 PM', 'adminuser', ''),
(123, NULL, 'color  200', 0, 'remove', NULL, NULL, 1, -1, '14/11/2015', 'Sat 10:52 PM', 'adminuser', ''),
(124, NULL, 'Dell', 0, 'add', NULL, NULL, 100, 100, '14/11/2015', 'Sat 10:57 PM', 'adminuser', ''),
(125, NULL, '400', 21, 'remove', NULL, NULL, 1, 20, '14/11/2015', 'Sat 11:49 PM', 'adminuser', ''),
(126, NULL, '2014', -1, 'add', NULL, NULL, 15, 14, '14/11/2015', 'Sat 11:57 PM', 'adminuser', ''),
(127, NULL, 'adminuser', 10, 'remove', NULL, NULL, 1, 9, '17/11/2015', 'Tue 02:56 AM', 'adminuser', ''),
(128, NULL, 'PC-dell_AIO89', 0, 'remove', NULL, NULL, 1, -1, '17/11/2015', 'Tue 05:59 AM', 'adminuser', ''),
(129, NULL, 'PC-dell_AIO89', -1, 'add', NULL, NULL, 100, 99, '17/11/2015', 'Tue 05:59 AM', 'adminuser', ''),
(130, NULL, 'PC-dell_AIO89', 99, 'remove', NULL, NULL, 99, 0, '17/11/2015', 'Tue 05:59 AM', 'adminuser', ''),
(131, NULL, 'PC-dell_AIO89', 0, 'remove', NULL, NULL, 0, 0, '17/11/2015', 'Tue 06:00 AM', 'adminuser', ''),
(132, NULL, 'PC-dell_AIO89', 0, 'add', NULL, NULL, 0, 0, '17/11/2015', 'Tue 06:00 AM', 'adminuser', ''),
(133, NULL, 'dell_AIO', 17, 'remove', NULL, NULL, 1, 16, '17/11/2015', 'Tue 06:02 AM', 'adminuser', ''),
(134, NULL, '160d', 0, 'add', NULL, NULL, 30, 30, '17/11/2015', 'Tue 06:36 AM', 'adminuser', ''),
(135, NULL, 'canon 18', 0, 'remove', NULL, NULL, 0, 0, '18/11/2015', 'Wed 02:20 AM', 'adminuser', ''),
(136, 'printer', '400', 20, 'remove', NULL, NULL, 1, 19, '18/11/2015', 'Wed 03:23 AM', 'adminuser', ''),
(137, 'Printer', '400co', 0, 'add', NULL, NULL, 100, 100, '18/11/2015', 'Wed 09:27 PM', 'adminuser', ''),
(138, 'labtop', '15', 0, 'add', NULL, NULL, 100, 100, '19/11/2015', 'Thu 08:35 PM', 'test', ''),
(139, 'scanner', '160', 1, 'remove', NULL, NULL, 0, 1, '20/11/2015', 'Fri 03:11 AM', 'adminuser', ''),
(140, 'scanner', '140', 10, 'remove', NULL, NULL, 1, 9, '20/11/2015', 'Fri 03:12 AM', 'adminuser', ''),
(141, 'scanner', '160', 1, 'add', NULL, NULL, 10, 11, '20/11/2015', 'Fri 03:12 AM', 'adminuser', ''),
(142, 'printer', 'canon 187', 0, 'add', NULL, NULL, 150, 150, '21/11/2015', 'Sat 12:33 AM', 'adminuser', ''),
(143, 'printer', 'canon 187', 150, 'remove', NULL, NULL, 1, 149, '21/11/2015', 'Sat 12:34 AM', 'adminuser', ''),
(144, 'printer', '400co1', 0, 'remove', NULL, NULL, 1, -1, '21/11/2015', 'Sat 01:58 AM', 'adminuser', ''),
(145, 'Printer', '400 co', 100, 'remove', NULL, NULL, 0, 100, '8/12/2015', 'Tue 12:06 AM', 'adminuser', ''),
(146, 'labtop', '15', 100, 'remove', NULL, NULL, 1, 99, '8/12/2015', 'Tue 07:56 PM', 'adminuser', ''),
(147, 'labtop', '15', 99, 'remove', NULL, NULL, 1, 98, '8/12/2015', 'Tue 07:57 PM', 'adminuser', ''),
(148, 'labtop', '15', 98, 'remove', NULL, NULL, 1, 97, '8/12/2015', 'Tue 07:58 PM', 'adminuser', ''),
(149, 'scanner', '160', 11, 'remove', '0', NULL, 1, 10, '8/12/2015', 'Tue 09:33 PM', 'adminuser', ''),
(150, 'labtop', '15', 97, 'remove', '', NULL, 1, 96, '8/12/2015', 'Tue 09:39 PM', 'adminuser', ''),
(151, 'labtop', '15', 96, 'remove', '0', NULL, 1, 95, '8/12/2015', 'Tue 09:40 PM', 'adminuser', ''),
(152, 'scanner', '140', 9, 'remove', '0', NULL, 1, 8, '8/12/2015', 'Tue 09:41 PM', 'adminuser', ''),
(153, 'scanner', '160', 10, 'remove', '0', NULL, 1, 9, '8/12/2015', 'Tue 09:56 PM', 'adminuser', ''),
(154, 'labtop', '15', 95, 'remove', '0', NULL, 1, 94, '8/12/2015', 'Tue 10:04 PM', 'adminuser', ''),
(155, 'labtop', '15', 94, 'add', '0', NULL, 1, 95, '8/12/2015', 'Tue 10:04 PM', 'adminuser', ''),
(156, 'labtop', '15', 95, 'remove', '', NULL, 1, 94, '8/12/2015', 'Tue 10:05 PM', 'adminuser', ''),
(157, 'labtop', '15', 94, 'remove', '', NULL, 1, 93, '8/12/2015', 'Tue 10:06 PM', 'adminuser', ''),
(158, 'labtop', '15', 93, 'remove', '', NULL, 1, 92, '8/12/2015', 'Tue 10:07 PM', 'adminuser', ''),
(159, 'labtop', '15', 92, 'remove', 'a', NULL, 1, 91, '8/12/2015', 'Tue 10:07 PM', 'adminuser', ''),
(160, 'labtop', '15', 91, 'remove', '0', NULL, 1, 90, '8/12/2015', 'Tue 10:08 PM', 'adminuser', ''),
(161, 'labtop', '15', 90, 'remove', '', NULL, 1, 89, '8/12/2015', 'Tue 10:09 PM', 'adminuser', ''),
(162, 'labtop', '15', 89, 'remove', '', NULL, 1, 88, '8/12/2015', 'Tue 10:09 PM', 'adminuser', ''),
(163, 'labtop', '15', 88, 'remove', 'Going To', NULL, 1, 87, '8/12/2015', 'Tue 10:10 PM', 'adminuser', ''),
(164, 'labtop', '15', 87, 'add', 'Going To', NULL, 1, 88, '8/12/2015', 'Tue 10:10 PM', 'adminuser', ''),
(165, 'labtop', '15', 88, 'remove', '0', NULL, 1, 87, '8/12/2015', 'Tue 10:14 PM', 'adminuser', ''),
(166, 'labtop', '15', 87, 'remove', 'a', NULL, 1, 86, '8/12/2015', 'Tue 10:39 PM', 'adminuser', ''),
(167, 'labtop', '15', 86, 'remove', '', NULL, 1, 85, '8/12/2015', 'Tue 10:39 PM', 'adminuser', ''),
(168, 'labtop', '15', 85, 'remove', 'a', NULL, 1, 84, '8/12/2015', 'Tue 10:42 PM', 'adminuser', ''),
(169, 'labtop', '15', 84, 'remove', 'a', NULL, 1, 83, '8/12/2015', 'Tue 10:42 PM', 'adminuser', ''),
(170, 'labtop', '15', 83, 'remove', 'Going To', NULL, 1, 82, '8/12/2015', 'Tue 10:47 PM', 'adminuser', ''),
(171, 'labtop', '15', 82, 'remove', 'Returned From', NULL, 1, 81, '8/12/2015', 'Tue 10:47 PM', 'adminuser', ''),
(172, 'labtop', '15', 81, 'remove', 'aGoing To', NULL, 1, 80, '8/12/2015', 'Tue 10:54 PM', 'adminuser', ''),
(173, 'labtop', '15', 80, 'add', 'Returned Froma', NULL, 1, 81, '8/12/2015', 'Tue 10:55 PM', 'adminuser', ''),
(174, 'labtop', '15', 81, 'add', 'Returned Froma', NULL, 1, 82, '8/12/2015', 'Tue 10:55 PM', 'adminuser', ''),
(175, 'labtop', '15', 82, 'add', 'Returned Froma', NULL, 1, 83, '8/12/2015', 'Tue 10:56 PM', 'adminuser', ''),
(176, 'labtop', '15', 83, 'remove', 'Going To a', NULL, 1, 82, '8/12/2015', 'Tue 10:57 PM', 'adminuser', ''),
(177, 'labtop', '15', 82, 'remove', 'Going To b', NULL, 1, 81, '9/12/2015', 'Wed 05:01 PM', 'adminuser', ''),
(178, 'labtop', '15', 81, 'add', 'Returned From c', NULL, 1, 82, '9/12/2015', 'Wed 05:01 PM', 'adminuser', ''),
(179, 'labtop', '15', 82, 'add', 'Going To a', NULL, 1, 83, '9/12/2015', 'Wed 05:51 PM', 'adminuser', ''),
(180, 'labtop', '15', 83, 'remove', 'Returned From a', NULL, 1, 82, '9/12/2015', 'Wed 06:06 PM', 'adminuser', ''),
(181, 'labtop', '15', 82, 'remove', 'Returned From b', NULL, 1, 81, '9/12/2015', 'Wed 06:29 PM', 'adminuser', ''),
(182, 'labtop', '15', 81, 'remove', 'Returned From a', NULL, 1, 80, '9/12/2015', 'Wed 06:34 PM', 'adminuser', ''),
(183, 'labtop', '15', 80, 'remove', 'Returned From a', NULL, 1, 79, '9/12/2015', 'Wed 06:35 PM', 'adminuser', ''),
(184, 'labtop', '15', 79, 'remove', 'Going To a', NULL, 1, 78, '9/12/2015', 'Wed 06:36 PM', 'adminuser', ''),
(185, 'labtop', '15', 78, 'add', 'Going To a', NULL, 1, 79, '9/12/2015', 'Wed 06:37 PM', 'adminuser', ''),
(186, 'labtop', '15', 79, 'remove', 'Returned From a', NULL, 1, 78, '9/12/2015', 'Wed 06:39 PM', 'adminuser', ''),
(187, 'labtop', '15', 78, 'remove', 'Going To a', NULL, 1, 77, '9/12/2015', 'Wed 06:40 PM', 'adminuser', ''),
(188, 'labtop', '15', 77, 'add', 'Going To a', NULL, 1, 78, '9/12/2015', 'Wed 06:40 PM', 'adminuser', ''),
(189, 'other', 'hp', 19, 'remove', 'Going To b', NULL, 1, 18, '9/12/2015', 'Wed 06:53 PM', 'adminuser', ''),
(190, 'labtop', '15', 78, 'add', 'Going To b', NULL, 1, 79, '9/12/2015', 'Wed 06:54 PM', 'adminuser', ''),
(191, 'labtop', '15', 79, 'add', 'Going To a', NULL, 1, 80, '9/12/2015', 'Wed 06:57 PM', 'adminuser', ''),
(192, 'labtop', '15', 80, 'add', 'Going To a', NULL, 1, 81, '9/12/2015', 'Wed 07:00 PM', 'adminuser', ''),
(193, 'labtop', '15', 81, 'add', 'Returned From a', NULL, 1, 82, '9/12/2015', 'Wed 07:01 PM', 'adminuser', ''),
(194, 'labtop', '15', 82, 'remove', 'Returned From b', NULL, 1, 81, '9/12/2015', 'Wed 07:02 PM', 'adminuser', ''),
(195, 'labtop', '15', 81, 'add', 'b', NULL, 1, 82, '9/12/2015', 'Wed 07:04 PM', 'adminuser', ''),
(196, 'labtop', '15', 91, 'add', 'Going To a', NULL, 1, 92, '9/12/2015', 'Wed 08:40 PM', 'adminuser', ''),
(197, 'labtop', '15', 92, 'add', 'Returned From b', NULL, 1, 93, '9/12/2015', 'Wed 08:41 PM', 'adminuser', ''),
(198, 'labtop', '15', 93, 'remove', 'Going To a', NULL, 1, 92, '9/12/2015', 'Wed 09:28 PM', 'adminuser', ''),
(199, 'labtop', '15', 92, 'add', 'Returned From d', NULL, 1, 93, '9/12/2015', 'Wed 09:28 PM', 'adminuser', ''),
(200, 'labtop', '15', 93, 'remove', 'Going To a', NULL, 1, 92, '9/12/2015', 'Wed 10:14 PM', 'adminuser', ''),
(201, 'labtop', '15', 92, 'add', 'Returned From ', NULL, 1, 93, '9/12/2015', 'Wed 11:16 PM', 'adminuser', ''),
(202, 'printer', 'canon 187', 149, 'add', 'Going To ', NULL, 1, 150, '9/12/2015', 'Wed 11:25 PM', 'adminuser', ''),
(203, 'labtop', '15', 93, 'remove', 'Going To b', NULL, 1, 92, '9/12/2015', 'Wed 11:27 PM', 'adminuser', ''),
(204, 'labtop', '15', 92, 'add', 'Returned From b', NULL, 1, 93, '9/12/2015', 'Wed 11:27 PM', 'adminuser', ''),
(205, 'labtop', '15', 93, 'remove', 'Going To b', NULL, 1, 92, '10/12/2015', 'Thu 07:35 PM', 'adminuser', ''),
(206, 'printer', '400co1l2', 0, 'remove', 'Going To a', NULL, 1, -1, '10/12/2015', 'Thu 07:40 PM', 'adminuser', ''),
(207, 'printer', '400co1l2', -1, 'add', 'Returned From b', NULL, 1, 0, '10/12/2015', 'Thu 07:40 PM', 'adminuser', ''),
(208, 'printer', '400co1l2', 0, 'add', 'Returned From a', NULL, 1, 1, '10/12/2015', 'Thu 08:02 PM', 'adminuser', ''),
(209, 'printer', '400co1l2', 1, 'remove', 'Going To a', NULL, 1, 0, '10/12/2015', 'Thu 08:02 PM', 'adminuser', ''),
(210, 'printer', '400co1l2', 0, 'add', 'Returned From a', NULL, 1, 1, '10/12/2015', 'Thu 08:03 PM', 'adminuser', ''),
(211, 'printer', '400co1l2', 1, 'add', 'Returned From a', NULL, 10, 11, '10/12/2015', 'Thu 08:18 PM', 'adminuser', ''),
(212, 'printer', '400co1l2', 11, 'remove', 'Going To a', NULL, 11, 0, '10/12/2015', 'Thu 08:19 PM', 'adminuser', ''),
(213, 'pc', 'PC-dell_AIO897', 0, 'add', 'Returned From a', NULL, 4, 4, '16/12/2015', 'Wed 10:36 AM', 'adminuser', ''),
(214, 'ALL-IN-ONE', 'AIO', 60, 'remove', 'Going To ali alsefri', NULL, 1, 59, '18/12/2015', 'Fri 12:07 AM', 'adminuser', ''),
(215, 'printer', '400co1l6', 150, 'add', 'Returned From 1223', NULL, 1, 151, '22/12/2015', 'Tue 02:44 AM', 'adminuser', ''),
(216, 'printer', '400co1l6', 151, 'remove', 'Going To b', NULL, 1, 150, '22/12/2015', 'Tue 02:46 AM', 'adminuser', ''),
(217, 'printer', '400co1l6', 150, 'remove', 'Going To 444', NULL, 4, 146, '22/12/2015', 'Tue 02:47 AM', 'adminuser', ''),
(218, 'printer', '400co1l6', 150, 'add', 'Returned From 42', NULL, 2, 152, '22/12/2015', 'Tue 02:51 AM', 'adminuser', ''),
(219, 'printer', '400co1l6', 152, 'remove', 'Going To 1', NULL, 152, 0, '22/12/2015', 'Tue 05:58 PM', 'adminuser', ''),
(220, 'printer', '400co1l6', 0, 'add', 'Returned From 12', NULL, 154, 154, '22/12/2015', 'Tue 05:58 PM', 'adminuser', ''),
(221, 'ALL-IN-ONE', 'AIOa', 10, 'remove', 'Going To a', NULL, 10, 0, '22/12/2015', 'Tue 06:01 PM', 'adminuser', ''),
(222, 'ALL-IN-ONE', 'AIOa', 0, 'add', 'Returned From b', NULL, 10, 10, '22/12/2015', 'Tue 06:02 PM', 'adminuser', ''),
(223, 'ALL-IN-ONE', 'AIOa', 10, 'add', 'Returned From a', NULL, 10, 20, '22/12/2015', 'Tue 06:04 PM', 'adminuser', ''),
(224, 'ALL-IN-ONE', 'AIOa', 20, 'remove', 'Going To a', NULL, 10, 10, '22/12/2015', 'Tue 06:05 PM', 'adminuser', ''),
(225, 'pc', 'PC-dell_AIOq', 25, 'remove', 'Going To a', NULL, 10, 15, '22/12/2015', 'Tue 06:21 PM', 'adminuser', ''),
(226, 'pc', 'PC-dell_AIOq', 15, 'add', 'Returned From a', NULL, 10, 25, '22/12/2015', 'Tue 06:23 PM', 'adminuser', ''),
(227, 'other', 'fa', 10, 'remove', 'Going To b', NULL, 5, 5, '22/12/2015', 'Tue 06:25 PM', 'adminuser', ''),
(228, 'other', 'far', 30, 'remove', 'Going To a', NULL, 10, 20, '22/12/2015', 'Tue 06:33 PM', 'adminuser', ''),
(229, 'other', 'fare', 10, 'remove', 'Going To b', NULL, 5, 5, '22/12/2015', 'Tue 06:38 PM', 'adminuser', ''),
(230, 'other', 'fare', 5, 'remove', 'Going To a', NULL, 4, 1, '22/12/2015', 'Tue 06:38 PM', 'adminuser', ''),
(231, 'other', 'fare', 1, 'remove', 'Going To a', NULL, 1, 0, '22/12/2015', 'Tue 06:44 PM', 'adminuser', ''),
(232, 'other', 'fare', 1, 'remove', 'Going To b', NULL, 1, 0, '22/12/2015', 'Tue 06:45 PM', 'adminuser', ''),
(233, 'other', 'fare', 1, 'remove', 'Going To a', NULL, 1, 0, '22/12/2015', 'Tue 06:49 PM', 'adminuser', ''),
(234, 'other', 'fare', 0, 'add', 'Returned From a', NULL, 12, 12, '22/12/2015', 'Tue 06:50 PM', 'adminuser', ''),
(235, 'other', 'fare', 12, 'remove', 'Going To b', NULL, 12, 0, '22/12/2015', 'Tue 06:53 PM', 'adminuser', ''),
(236, 'other', 'fare', 0, 'add', 'Returned From a', NULL, 24, 24, '22/12/2015', 'Tue 06:54 PM', 'adminuser', ''),
(237, 'other', 'last', 15, 'remove', 'Going To a', NULL, 1, 14, '22/12/2015', 'Tue 06:56 PM', 'adminuser', ''),
(238, 'other', 'last', 14, 'remove', 'Going To 12', NULL, 14, 0, '22/12/2015', 'Tue 06:56 PM', 'adminuser', ''),
(239, 'other', 'last', 0, 'add', 'Returned From b', NULL, 1, 1, '22/12/2015', 'Tue 06:57 PM', 'adminuser', ''),
(240, 'other', 'last', 1, 'add', 'Returned From b', NULL, 14, 15, '22/12/2015', 'Tue 06:57 PM', 'adminuser', ''),
(241, 'other', 'last', 15, 'add', 'Returned From a', NULL, 1, 16, '22/12/2015', 'Tue 06:58 PM', 'adminuser', ''),
(242, 'Photocopier', 'last2', 10, 'remove', 'Going To a', NULL, 9, 1, '22/12/2015', 'Tue 07:08 PM', 'adminuser', ''),
(243, 'Photocopier', 'last2', 1, 'add', 'Returned From a', NULL, 2, 3, '22/12/2015', 'Tue 07:09 PM', 'adminuser', ''),
(244, 'Photocopier', 'last2', 3, 'add', 'Returned From 7', NULL, 7, 10, '22/12/2015', 'Tue 07:10 PM', 'adminuser', ''),
(245, 'ALL-IN-ONE', 'AIO', 59, 'remove', 'Going To a', NULL, 1, 58, '24/12/2015', 'Thu 07:29 PM', 'adminuser', ''),
(246, 'ALL-IN-ONE', 'AIO', 58, 'add', 'Returned From b', NULL, 1, 59, '25/12/2015', 'Fri 01:08 PM', 'adminuser', ''),
(247, '1233', 'canon 18oo', 1, 'remove', 'Going To a', NULL, 1, 0, '25/12/2015', 'Fri 01:18 PM', 'adminuser', ''),
(248, '1233', 'canon 18oo', 0, 'add', 'Returned From a', NULL, 1, 1, '25/12/2015', 'Fri 01:18 PM', 'adminuser', ''),
(249, 'scanner', 'canon 181l', 20, 'remove', 'a', 'it', 1, 19, '25/12/2015', 'Fri 03:52 PM', 'adminuser', ''),
(250, 'ALL-IN-ONE', 'AIO', 59, 'remove.GoingTo', 'a', 'it', 1, 58, '25/12/2015', 'Fri 04:02 PM', 'adminuser', ''),
(251, 'ALL-IN-ONE', 'AIO', 58, 'add.ReturnedFrom', 'a', 'it', 1, 59, '25/12/2015', 'Fri 04:02 PM', 'adminuser', ''),
(252, 'pc', 'dell_AIO', 16, 'remove.GoingTo', 'a', 'it', 6, 10, '25/12/2015', 'Fri 04:35 PM', 'adminuser', ''),
(253, 'ALL-IN-ONE', 'AIO', 59, 'remove.GoingTo', '0', 'it', 1, 58, '25/12/2015', 'Fri 04:36 PM', 'adminuser', ''),
(254, 'ALL-IN-ONE', 'AIO', 58, 'remove.GoingTo', 'a', '', 1, 57, '25/12/2015', 'Fri 08:08 PM', 'adminuser', ''),
(255, 'scanner', 'canon 181l', 19, 'remove.GoingTo', 'a', 'IT', 1, 18, '25/12/2015', 'Fri 11:29 PM', 'adminuser', ''),
(256, 'other', 'hp', 18, 'remove.GoingTo', 'a', 'Medical Imaging and nuclear Medicine', 1, 17, '25/12/2015', 'Fri 11:40 PM', 'adminuser', ''),
(257, 'other', 'hp', 17, 'add.ReturnedFrom', 'a', 'Other', 1, 18, '25/12/2015', 'Fri 11:41 PM', 'adminuser', ''),
(258, 'labtop', '15', 92, 'remove.GoingTo', 'a', 'IT', 1, 91, '25/12/2015', 'Fri 11:42 PM', 'adminuser', ''),
(259, 'ALL-IN-ONE', 'AIO', 57, 'add.ReturnedFrom', 'a', 'IT', 1, 58, '26/12/2015', 'Sat 08:15 PM', 'adminuser', ''),
(260, 'ALL-IN-ONE', 'AIO', 58, 'remove.GoingTo', 'b', 'Education and Training', 1, 57, '26/12/2015', 'Sat 08:15 PM', 'adminuser', ''),
(261, 'Photocopier', 'last2', 10, 'remove.GoingTo', 'a', 'Follow-up And Administrative Development ', 1, 9, '26/12/2015', 'Sat 08:17 PM', 'adminuser', ''),
(262, 'Photocopier', 'last2', 9, 'add.ReturnedFrom', 'a', 'Education and Training', 1, 10, '26/12/2015', 'Sat 08:17 PM', 'adminuser', ''),
(263, 'pc', 'dell-9030', 10, 'remove.GoingTo', 'a', 'Support Services', 1, 9, '30/12/2015', 'Wed 03:52 PM', 'adminuser', ''),
(264, 'pc', 'dell_AIO', 10, 'remove.GoingTo', '1223', 'Support Services', 1, 9, '21/2/2016', 'Sun 03:59 AM', 'test555', ''),
(265, 'labtop', '15', 91, 'add.ReturnedFrom', '1223', 'Education and Training', 1, 92, '29/2/2016', 'Mon 06:42 AM', 'adminuser', ''),
(266, 'screen', '21112', 47, 'remove.GoingTo', '1223', 'Follow-up And Administrative Development ', 1, 46, '29/2/2016', 'Mon 06:43 AM', 'adminuser', ''),
(267, 'ALL-IN-ONE', 'AIO', 57, 'remove.GoingTo', '1223', 'Follow-up And Administrative Development ', 1, 56, '29/2/2016', 'Mon 06:43 AM', 'adminuser', ''),
(268, 'screen', '21112', 46, 'remove.GoingTo', '1223', 'Follow-up And Administrative Development ', 1, 45, '29/2/2016', 'Mon 06:44 AM', 'adminuser', ''),
(269, 'pc', 'PC-dell_ne', 13, 'remove.GoingTo', '1223', 'Education and Training', 1, 12, '29/2/2016', 'Mon 06:57 AM', 'adminuser', ''),
(270, 'screen', '21112', 45, 'remove.GoingTo', '1223', 'Follow-up And Administrative Development ', 1, 44, '29/2/2016', 'Mon 06:58 AM', 'adminuser', ''),
(271, 'pc', 'dell_AIO', 9, 'remove.GoingTo', 'aaa', 'Education and Training', 1, 8, '29/2/2016', 'Mon 06:59 AM', 'adminuser', ''),
(272, 'pc', 'canon 1855', 1, 'remove.GoingTo', 'aaa', 'Dental', 1, 0, '29/2/2016', 'Mon 06:59 AM', 'adminuser', ''),
(273, 'pc', 'canon 1855', 0, 'add.ReturnedFrom', 'aaa', 'Education and Training', 1, 1, '29/2/2016', 'Mon 07:01 AM', 'adminuser', ''),
(274, 'pc', 'canon 1855', 1, 'remove.GoingTo', 'aaa', 'Education and Training', 1, 0, '29/2/2016', 'Mon 07:02 AM', 'adminuser', ''),
(275, 'ALL-IN-ONE', 'AIO', 56, 'remove.GoingTo', '1223', 'Education and Training', 1, 55, '29/2/2016', 'Mon 07:06 AM', 'adminuser', ''),
(276, 'ALL-IN-ONE', 'AIO', 56, 'remove.GoingTo', '1223', 'Education and Training', 1, 55, '29/2/2016', 'Mon 07:06 AM', 'adminuser', ''),
(277, 'pc', 'canon 1855', 0, 'add.ReturnedFrom', 'aaa', 'Library', 1, 1, '29/2/2016', 'Mon 07:07 AM', 'adminuser', ''),
(278, 'pc', 'canon 1855', 0, 'add.ReturnedFrom', 'aaa', 'Library', 1, 1, '29/2/2016', 'Mon 07:07 AM', 'adminuser', ''),
(279, 'screen', '21112', 44, 'remove.GoingTo', 'aaa', 'Education and Training', 1, 43, '29/2/2016', 'Mon 07:07 AM', 'adminuser', ''),
(280, 'screen', '21112', 44, 'remove.GoingTo', 'aaa', 'Education and Training', 1, 43, '29/2/2016', 'Mon 07:07 AM', 'adminuser', ''),
(281, 'screen', '21112', 43, 'remove.GoingTo', '1223', 'Library', 1, 42, '29/2/2016', 'Mon 07:08 AM', 'adminuser', ''),
(282, 'screen', '21112', 43, 'remove.GoingTo', '1223', 'Library', 1, 42, '29/2/2016', 'Mon 07:08 AM', 'adminuser', ''),
(283, 'screen', '21112', 42, 'remove.GoingTo', '1223', 'Emergency', 1, 41, '29/2/2016', 'Mon 07:10 AM', 'adminuser', 'aa'),
(284, 'screen', '21112', 42, 'remove.GoingTo', '1223', 'Emergency', 1, 41, '29/2/2016', 'Mon 07:10 AM', 'adminuser', ''),
(285, 'screen', '21112', 41, 'remove.GoingTo', '1223', 'Follow-up And Administrative Development ', 1, 40, '29/2/2016', 'Mon 07:10 AM', 'adminuser', 'aa'),
(286, 'screen', '21112', 41, 'remove.GoingTo', '1223', 'Follow-up And Administrative Development ', 1, 40, '29/2/2016', 'Mon 07:10 AM', 'adminuser', ''),
(287, 'pc', 'dell_AIO', 8, 'remove.GoingTo', '1223', 'Library', 1, 7, '29/2/2016', 'Mon 07:14 AM', 'adminuser', ''),
(288, 'pc', 'dell_AIO', 8, 'remove.GoingTo', '1223', 'Library', 1, 7, '29/2/2016', 'Mon 07:14 AM', 'adminuser', ''),
(289, 'screen', '21112', 40, 'remove.GoingTo', '1223', 'Dental', 1, 39, '29/2/2016', 'Mon 07:15 AM', 'adminuser', '1'),
(290, 'screen', '21112', 40, 'remove.GoingTo', '1223', 'Dental', 1, 39, '29/2/2016', 'Mon 07:15 AM', 'adminuser', ''),
(291, 'pc', 'PC-dell-9020', 10, 'remove.GoingTo', 'aaa', 'Dental', 1, 9, '29/2/2016', 'Mon 07:17 AM', 'adminuser', ''),
(292, 'pc', 'PC-dell-9020', 10, 'remove.GoingTo', 'aaa', 'Dental', 1, 9, '29/2/2016', 'Mon 07:17 AM', 'adminuser', ''),
(293, 'pc', 'dell-9030', 9, 'remove.GoingTo', 'aaa', 'Library', 1, 8, '29/2/2016', 'Mon 07:17 AM', 'adminuser', '1\r\n'),
(294, 'pc', 'dell-9030', 9, 'remove.GoingTo', 'aaa', 'Library', 1, 8, '29/2/2016', 'Mon 07:17 AM', 'adminuser', ''),
(295, 'pc', 'PC-dell-9020', 9, 'remove.GoingTo', '1223', 'Family & Community Medicine', 1, 8, '29/2/2016', 'Mon 07:17 AM', 'adminuser', ''),
(296, 'pc', 'PC-dell-9020', 9, 'remove.GoingTo', '1223', 'Family & Community Medicine', 1, 8, '29/2/2016', 'Mon 07:17 AM', 'adminuser', ''),
(297, 'pc', 'dell_AIO', 7, 'remove.GoingTo', 'aaa', 'Education and Training', 1, 6, '29/2/2016', 'Mon 07:18 AM', 'adminuser', ''),
(298, 'pc', 'dell_AIO', 7, 'remove.GoingTo', 'aaa', 'Education and Training', 1, 6, '29/2/2016', 'Mon 07:18 AM', 'adminuser', ''),
(299, 'ALL-IN-ONE', 'AIO', 55, 'remove.GoingTo', '1223', 'Engineering', 1, 54, '1/3/2016', 'Tue 12:31 AM', 'adminuser', ''),
(300, 'pc', 'adminuser', 9, 'remove.GoingTo', '1223', 'High Medical Committee', 1, 8, '1/3/2016', 'Tue 12:38 AM', 'adminuser', ''),
(301, 'scanner', 'canon 181l', 18, 'add.ReturnedFrom', '1223', 'Library', 1, 19, '1/3/2016', 'Tue 12:38 AM', 'adminuser', '');

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `eid` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `isadmin` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`id`, `name`, `uname`, `eid`, `password`, `isadmin`) VALUES
(1, 'adminuser', 'admin', 'm123', '202cb962ac59075b964b07152d234b70', 1),
(2, 'adminuser2', 'admin2', 'm1234', '202cb962ac59075b964b07152d234b70', 1),
(3, 'admin', 'admin3', 'm12342', '202cb962ac59075b964b07152d234b70', 0),
(4, 'sultan', 'admin4', 'm12344', '202cb962ac59075b964b07152d234b70', 0),
(5, 'sultan', 'admin5', 'm12356', '202cb962ac59075b964b07152d234b70', 0),
(6, 'admin9', 'admin44', 'm123u', '202cb962ac59075b964b07152d234b70', 0),
(7, 'sultan t', 'test32', '1', '202cb962ac59075b964b07152d234b70', 0),
(8, 'sultan', 'admin54', 'm12345', 'c4ca4238a0b923820dcc509a6f75849b', 0),
(9, 'i am admin', 'my admin', 'm1231', '202cb962ac59075b964b07152d234b70', 0),
(10, 'Sultan', 'sultan', '1004', 'caf1a3dfb505ffed0d024130f58c5cfa', 0),
(11, 'sultan 2', 'ss', '2311', '202cb962ac59075b964b07152d234b70', 0),
(12, 'ali al', 'aal1', '32342', '202cb962ac59075b964b07152d234b70', 1),
(13, 'sultan77', 'sultan77', '77', '202cb962ac59075b964b07152d234b70', 1),
(17, 'test', 'rtest', '111', '202cb962ac59075b964b07152d234b70', 0),
(18, 'bteq1', 'bteq', '1213', '202cb962ac59075b964b07152d234b70', 0),
(19, 'sultan5', 'admin1', 'M1004', '9fc3d7152ba9336a670e36d0ed79bc43', 0),
(20, 'sultan', 'admin85', 'm1230', '202cb962ac59075b964b07152d234b70', 0),
(21, '1122', '1122', '1122', '202cb962ac59075b964b07152d234b70', 1);
--
-- Database: `support`
--

-- --------------------------------------------------------

--
-- بنية الجدول `rform`
--

CREATE TABLE IF NOT EXISTS `rform` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `eid` varchar(11) NOT NULL,
  `ename` varchar(100) NOT NULL,
  `ext` varchar(200) NOT NULL,
  `dept` varchar(150) NOT NULL,
  `ptype` varchar(100) NOT NULL,
  `desc` longtext NOT NULL,
  `date` varchar(50) NOT NULL,
  `rciv` varchar(50) DEFAULT NULL,
  `rstatus` varchar(50) DEFAULT NULL,
  `cmnt` longtext,
  `dated` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=333 ;

--
-- إرجاع أو استيراد بيانات الجدول `rform`
--

INSERT INTO `rform` (`id`, `eid`, `ename`, `ext`, `dept`, `ptype`, `desc`, `date`, `rciv`, `rstatus`, `cmnt`, `dated`) VALUES
(274, 'M1004', 'sultan', '8554', 'it', 'Telephone', 'a', 'Thursday 2015-04-02 02:55:36 PM', 'Sultan', 'RECEIVED', 'a', '2015-04-02'),
(273, 'M1004', 'sultan', '8554', 'it', 'HIS', '1', 'Wednesday 2015-04-01 03:14:11 PM', 'Sultan', 'DONE', NULL, '2015-04-01'),
(272, 'M1004', 'sultan', '8554', 'it', 'Other', '1', 'Wednesday 2015-04-01 03:11:50 PM', 'adminuser', 'RECEIVED', 'a', '2015-04-01'),
(271, 'M1004', 'sultan', '8554', 'it', 'Other', '1', 'Wednesday 2015-04-01 03:09:20 PM', 'karimi', 'RECEIVED', NULL, '2015-04-01'),
(270, 'M1004', 'sultan', '8554', 'it', 'Other', 'aaaa', 'Wednesday 2015-04-01 11:51:15 AM', 'Salem', 'UNDER PROCEDURE', NULL, '2015-04-01'),
(269, 'M1004', 'sultan', '8555', 'it', 'Network', '1', 'Wednesday 2015-04-01 11:50:00 AM', 'Sultan', 'UNDER PROCEDURE', NULL, '2015-04-01'),
(268, 'M1004', 'sultan', '8554', 'it', 'Scanner', '1', 'Wednesday 2015-04-01 11:49:43 AM', 'yahya', 'RECEIVED', NULL, '2015-04-01'),
(267, 'M1004', 'sultan', '8554', 'it', 'Printer', '1', 'Wednesday 2015-04-01 11:21:18 AM', 'yahya', 'RECEIVED', NULL, '2015-04-01'),
(266, 'M1004', 'sultan', '8554', 'it', 'Printer', 'a', 'Tuesday 2015-03-31 09:37:36 AM', 'Sultan', 'DONE', NULL, '2015-03-31'),
(265, 'M1004', 'sultan', '8554', 'it', 'Email', '1', 'Tuesday 2015-03-31 09:35:03 AM', 'yahya', 'DONE', NULL, '2015-03-31'),
(264, 'M1004', 'sultan', '8554', 'it', 'Printer', 'a', 'Tuesday 2015-03-31 09:34:40 AM', 'adminuser', 'RECEIVED', NULL, '2015-03-31'),
(263, 'M1004', 'sultan', '8554', 'it', 'PC', '1', 'Tuesday 2015-03-31 09:22:23 AM', 'adminuser', 'RECEIVED', NULL, '2015-03-31'),
(261, 'M1004', 'sultan', '8554', 'it', 'PC', '1', 'Tuesday 2015-03-31 09:22:15 AM', 'adminuser', 'RECEIVED', NULL, '2015-03-31'),
(260, 'M1004', 'sultan', '8554', 'it', 'PC', 'a', 'Tuesday 2015-03-31 09:22:05 AM', 'Sultan', 'RECEIVED', NULL, '2015-03-31'),
(259, 'M1004', 'sultan', '8554', 'it', 'PC', 'a', 'Tuesday 2015-03-31 09:21:40 AM', 'adminuser', 'RECEIVED', NULL, '2015-03-31'),
(258, 'M1004', 'sultan', '8554', 'it', 'PC', 'a', 'Tuesday 2015-03-31 09:20:24 AM', NULL, 'NEW', NULL, '2015-03-31'),
(257, 'M1004', 'sultan', '8554', 'it', 'PC', 'a', 'Tuesday 2015-03-31 09:20:18 AM', NULL, 'NEW', NULL, '2015-03-31'),
(256, 'M1004', 'sultan', '8554', 'it', 'PC', 'a', 'Tuesday 2015-03-31 09:18:57 AM', NULL, 'NEW', NULL, '2015-03-31'),
(255, 'M1004', 'sultan', '8554', 'it', 'PC', 'a', 'Tuesday 2015-03-31 09:18:54 AM', NULL, 'NEW', NULL, '2015-03-31'),
(254, 'M1004', 'sultan', '8554', 'it', 'PC', 'a', 'Tuesday 2015-03-31 09:18:49 AM', NULL, 'NEW', NULL, '2015-03-31'),
(253, 'M1004', 'sultan', '8555', 'it', 'PC', 'n fd', 'Monday 2015-03-30 03:57:13 PM', 'adminuser', 'RECEIVED', NULL, '2015-03-30'),
(252, 'M0535', 'mohamed', '8554', 'it', 'Printer', '1', 'Monday 2015-03-30 03:22:42 PM', NULL, 'NEW', NULL, '2015-03-30'),
(251, 'M0529', 'yahya', '8554', 'it', 'Scanner', 'a', 'Monday 2015-03-30 03:17:19 PM', NULL, 'NEW', NULL, '2015-03-30'),
(250, 'M1004', 'sultan', '8554', 'it', 'Printer', 'a', 'Monday 2015-03-30 03:16:48 PM', 'Sultan', 'NEW', NULL, '2015-03-30'),
(249, 'M1004', 'sultan', '8554', 'it', 'Scanner', 'a', 'Monday 2015-03-30 03:06:44 PM', 'Sultan', 'CANCELED', NULL, '2015-03-30'),
(248, 'M1004', 'sultan', '8554', 'it', 'Printer', 'b', 'Monday 2015-03-30 02:20:18 PM', 'Sultan', 'NEW', NULL, '2015-03-30'),
(247, 'M1004', 'sultan', '8554', 'it', 'PC', 'a', 'Monday 2015-03-30 02:19:32 PM', NULL, 'NEW', NULL, '2015-03-30'),
(275, 'M1068', 'bandar', '8554', 'Information Technology', 'HIS', 'gsagsag', 'Thursday 2015-04-09 03:29:07 PM', 'Sultan', 'CANCELED', 'sag', '2015-04-09'),
(276, 'M1068', 'bandar', '8536', 'Information Technology', 'Scanner', 'dfhsdhd', 'Thursday 2015-04-09 03:46:06 PM', 'yahya', 'DONE', NULL, '2015-04-09'),
(277, 'M1004', 'sultan', '8554', 'Information Technology', 'HIS', 'a', 'Monday 2015-04-13 09:02:13 AM', 'Sultan', 'RECEIVED', NULL, '2015-04-13'),
(278, 'M1004', 'sultan', '8554', 'Information Technology', 'HIS', 'a', 'Monday 2015-04-13 09:05:33 AM', 'Sultan', 'RECEIVED', NULL, '2015-04-13'),
(279, 'M1004', 'sultan', '8554', 'Information Technology', 'HIS', 'a', 'Monday 2015-04-13 09:07:26 AM', 'Salem', 'RECEIVED', NULL, '2015-04-13'),
(280, 'M1004', 'sultan', '8554', 'Information Technology', 'HIS', 'a', 'Monday 2015-04-13 09:10:37 AM', 'Sultan', 'RECEIVED', NULL, '2015-04-13'),
(281, 'M1004', 'sultan', '8554', 'Information Technology', 'HIS', 'a', 'Monday 2015-04-13 09:34:30 AM', 'adminuser', 'DONE', NULL, '2015-04-13'),
(282, 'M1004', 'sultan', '8554', 'Information Technology', 'HIS', 'a', 'Monday 2015-04-13 09:37:18 AM', 'adminuser', 'NEW', NULL, '2015-04-13'),
(283, 'M10041', 'sultan', '8554', 'Information Technology', 'Printer', '1', 'Tuesday 2015-04-21 12:25:07 PM', 'adminuser', 'NEW', NULL, '2015-04-21'),
(284, 'm10042', 'sultan', '8554', 'Information Technology', 'Telephone', '1', 'Thursday 2015-04-23 03:24:57 PM', 'adminuser', 'NEW', NULL, '2015-04-23'),
(285, 'M10040', 'sultan', '8554', 'Information Technology', 'Network', 'a', 'Thursday 2015-04-23 03:32:49 PM', 'adminuser', 'CANCELED', NULL, '2015-04-23'),
(286, 'M', 'wejdan', '8888', 'Dental', 'Network', 'ghfdhg', 'Thursday 2015-04-23 03:49:33 PM', 'adminuser', 'NEW', NULL, '2015-04-23'),
(287, 'M1004', 'sultan', '8554', 'Information Technology', 'Telephone', '1', 'Thursday 2015-04-30 08:07:11 AM', 'adminuser', 'CANCELED', 'cancel', '2015-04-30'),
(288, 'M1004', 'sultan', '8554', 'Information Technology', 'Telephone', '1', 'Thursday 2015-04-30 08:07:50 AM', 'yahya', 'CANCELED', NULL, '2015-04-30'),
(289, 'M1', 'sultan', '8554', 'Information Technology', 'Telephone', '1', 'Monday 2015-05-04 07:53:05 AM', 'yahya', 'DONE', NULL, '2015-05-04'),
(290, 'M100111', 'sultan', '2858', 'Information Technology', 'Other', '*', 'Thursday 2016-01-28 12:33:35 PM', 'adminuser', 'DONE', NULL, '2016-01-28'),
(291, 'M1004', 'sultan', '2858', 'Follow-up And Administrative Development ', 'id', '11', 'Wednesday 2016-02-03 12:45:23 PM', NULL, 'NEW', NULL, '2016-02-03'),
(292, 'M1004', 'sultan', '2858', 'Education and Training', 'Other', '2', 'Wednesday 2016-02-03 01:07:21 PM', NULL, 'NEW', NULL, '2016-02-03'),
(293, 'M1004', 'sultan', '2858', 'Education and Training', 'Other2', '2', 'Wednesday 2016-02-03 01:07:33 PM', NULL, 'NEW', NULL, '2016-02-03'),
(294, 'M1004', 'sultan', '2147480000', 'Education and Training', 'Other5', '2', 'Wednesday 2016-02-03 02:13:49 PM', NULL, 'NEW', NULL, '2016-02-03'),
(295, 'M1004', 'sultan', '2147480000', 'Education and Training', 'Other9', '2', 'Wednesday 2016-02-03 02:33:16 PM', NULL, 'NEW', NULL, '2016-02-03'),
(296, 'M1004', 'sultan', '2147480000', 'Education and Training', 'Other99', '2', 'Wednesday 2016-02-03 02:34:18 PM', NULL, 'NEW', NULL, '2016-02-03'),
(297, 'M1004', 'sultan', '2147480000', 'Education and Training', 'Other999', '2', 'Wednesday 2016-02-03 02:35:22 PM', NULL, 'NEW', NULL, '2016-02-03'),
(298, 'M1004', 'sultan', '2147480000', 'Education and Training', 'Other998', '9', 'Wednesday 2016-02-03 02:35:47 PM', NULL, 'NEW', NULL, '2016-02-03'),
(299, 'M1004', 'sultan', '2147480000', 'Education and Training', 'Other988', '9', 'Wednesday 2016-02-03 02:36:43 PM', NULL, 'NEW', NULL, '2016-02-03'),
(300, 'M1004', 'sultan', '2147480000', 'Education and Training', 'Otherh', '9', 'Wednesday 2016-02-03 02:38:14 PM', NULL, 'NEW', NULL, '2016-02-03'),
(301, 'M1004', 'sultan', '2147483647', 'Education and Training', 'Other9998', '9', 'Wednesday 2016-02-03 02:39:38 PM', NULL, 'NEW', NULL, '2016-02-03'),
(302, 'M1004', 'sultan', '2147483647', 'Education and Training', 'Otherjl', 'kk', 'Wednesday 2016-02-03 02:40:39 PM', NULL, 'NEW', NULL, '2016-02-03'),
(303, '99999999999', 'sultan', '2147483647', 'Education and Training', 'Other9', 'kk', 'Wednesday 2016-02-03 02:41:00 PM', NULL, 'NEW', NULL, '2016-02-03'),
(304, '9999999999', 'sultan', '2147483647', 'Education and Training', 'Other9', 'kk', 'Wednesday 2016-02-03 02:42:12 PM', NULL, 'NEW', NULL, '2016-02-03'),
(305, '99999999', 'sultan', '0', 'Education and Training', 'Other9', 'kk', 'Wednesday 2016-02-03 02:43:05 PM', NULL, 'NEW', NULL, '2016-02-03'),
(306, '999999', 'sultan', '0.000000', 'Education and Training', 'Other9', 'kk', 'Wednesday 2016-02-03 02:44:45 PM', NULL, 'NEW', NULL, '2016-02-03'),
(307, '9999', 'sultan', '0', 'Education and Training', 'Other9', 'kk', 'Wednesday 2016-02-03 02:45:11 PM', 'adminuser', 'RECEIVED', NULL, '2016-02-03'),
(308, '999', 'sultan', '1.0e+10', 'Education and Training', 'Other9', 'kk', 'Wednesday 2016-02-03 02:45:20 PM', 'adminuser', 'DONE', 'تم حل المشكلة', '2016-02-03'),
(309, '99', 'sultan', '2147483647', 'Education and Training', 'Other9', 'kk', 'Wednesday 2016-02-03 02:47:32 PM', 'adminuser', 'DONE', NULL, '2016-02-03'),
(310, '99l', 'sultan', '599999999', 'Education and Training', 'Other9', 'kk', 'Wednesday 2016-02-03 02:49:08 PM', 'adminuser', 'DONE', NULL, '2016-02-03'),
(311, '99lj', 'sultan', '599999999', 'Education and Training', 'Other9', 'kk', 'Wednesday 2016-02-03 02:49:56 PM', 'adminuser', 'NEW', NULL, '2016-02-03'),
(312, '99ljk', 'sultan', '599999999', 'Education and Training', 'Other9', 'kk', 'Wednesday 2016-02-03 02:50:07 PM', 'adminuser', 'DONE', NULL, '2016-02-03'),
(313, '99ljkj', 'sultan', '599999999', 'Education and Training', 'Other9', 'kk', 'Wednesday 2016-02-03 02:50:42 PM', 'adminuser', 'CANCELED', NULL, '2016-02-03'),
(316, 'M1004', 'sultan', '2858', 'Education and Training', 'Internet', ' aaa', 'Thursday 2016-02-04 10:50:35 PM', 'adminuser', 'DONE', NULL, '2016-02-04'),
(317, 'M1004', 'sultan', '2858', 'Dental', 'Scanner', ' ', 'Thursday 2016-02-04 10:55:03 PM', 'adminuser', 'DONE', NULL, '2016-02-04'),
(318, 'M1004', 'sultan', '2858', 'Library', 'Network', '111', 'Friday 2016-02-05 01:16:09 PM', 'adminuser', 'DONE', NULL, '2016-02-05'),
(322, 'M1004525', 'sultan', '2858', 'Education and Training', 'Printer', '2', 'Saturday 2016-02-06 12:15:54 AM', 'adminuser', 'DONE', NULL, '2016-02-06'),
(323, 'M1004525', 'sultan', '2858', 'Education and Training', 'PC', '25', 'Saturday 2016-02-06 12:55:45 AM', 'adminuser', 'DONE', NULL, '2016-02-06'),
(320, 'M100445', 'sultan', '2858', 'Laboratory and Blood Bank', 'Network', '123', 'Friday 2016-02-05 11:17:46 PM', 'adminuser', 'DONE', NULL, '2016-02-05'),
(321, 'M100423', 'sultan', '2858', 'Follow-up And Administrative Development ', 'PC', '3\r\n2', 'Friday 2016-02-05 11:58:14 PM', 'adminuser', 'DONE', NULL, '2016-02-05'),
(331, 'M10042', 'sultan', '2858', 'Engineering', 'Email', 'qqqq', 'Wednesday 2016-02-17 03:41:56 AM', 'adminuser', 'DONE', NULL, '2016-02-17'),
(332, '111', 'test', '123', 'Information Technology', 'Pacs', 'pacs', 'Thursday 2016-04-07 04:32:20 AM', NULL, 'NEW', NULL, '2016-04-07');
--
-- Database: `tfile`
--

-- --------------------------------------------------------

--
-- بنية الجدول `advertising`
--

CREATE TABLE IF NOT EXISTS `advertising` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `adsPosition` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adsPage` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adsContent` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- إرجاع أو استيراد بيانات الجدول `advertising`
--

INSERT INTO `advertising` (`id`, `adsPosition`, `adsPage`, `adsContent`, `created_at`, `updated_at`) VALUES
(1, 'top', 'home', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'bottom', 'home', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'top', 'profile', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'bottom', 'profile', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'top', 'download', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'bottom', 'download', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- بنية الجدول `emailsettings`
--

CREATE TABLE IF NOT EXISTS `emailsettings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `emailFromName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `emailFromEmail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SMTPHostAddress` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SMTPHostPort` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `EMailEncryptionProtocol` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SMTPServerUsername` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SMTPServerPassword` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- إرجاع أو استيراد بيانات الجدول `emailsettings`
--

INSERT INTO `emailsettings` (`id`, `emailFromName`, `emailFromEmail`, `SMTPHostAddress`, `SMTPHostPort`, `EMailEncryptionProtocol`, `SMTPServerUsername`, `SMTPServerPassword`, `created_at`, `updated_at`) VALUES
(1, 'Example', 'example@domain.com', '', '', '', '', '', '0000-00-00 00:00:00', '2015-06-29 22:00:36');

-- --------------------------------------------------------

--
-- بنية الجدول `emailtemplates`
--

CREATE TABLE IF NOT EXISTS `emailtemplates` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `emailSubject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `emailContent` longtext COLLATE utf8_unicode_ci NOT NULL,
  `emailType` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- إرجاع أو استيراد بيانات الجدول `emailtemplates`
--

INSERT INTO `emailtemplates` (`id`, `emailSubject`, `emailContent`, `emailType`, `created_at`, `updated_at`) VALUES
(1, 'You have Received new File/s! ', '', 'sendFilesTemplate', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Welcome to Zfiles Upload Center', '', 'welcomeTemplate', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Password Reset Request ', '', 'recoverPasswordTemplate', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- بنية الجدول `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `filePath` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fileName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fileExt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `userID` int(11) NOT NULL,
  `fileDesc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fileSize` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fileStatus` int(11) NOT NULL,
  `fileDownloadCounter` int(11) NOT NULL,
  `userIp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- بنية الجدول `lockedfiles`
--

CREATE TABLE IF NOT EXISTS `lockedfiles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fileId` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `userID` int(11) NOT NULL,
  `filePassword` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- بنية الجدول `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2015_06_01_155428_Create_Users_Table', 1),
('2015_06_01_175908_Create_Settings_Table', 1),
('2015_06_03_113914_Create_Uploaded_Files_Table', 1),
('2015_06_09_233030_Locked_Files_Table', 1),
('2015_06_20_203635_Create_Upload_Settings_Table', 1),
('2015_06_21_164952_Create_Social_Links_Table', 1),
('2015_06_24_201803_Create_Email_Settings_Table', 1),
('2015_06_25_182256_Create_Email_Templates_Table', 1),
('2015_06_25_222037_create_password_reminders_table', 1),
('2015_06_27_015842_Create_Template_Themes_Table', 1),
('2015_06_27_071847_Create_Advertising_Settings_Table', 1),
('2015_06_29_020432_Create_Theme_Customize_Table', 1),
('2015_06_30_011221_Create_Pages_Table', 1);

-- --------------------------------------------------------

--
-- بنية الجدول `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pageOrder` int(11) NOT NULL,
  `pageName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pageTitle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pageContent` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- بنية الجدول `password_reminders`
--

CREATE TABLE IF NOT EXISTS `password_reminders` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_reminders_email_index` (`email`),
  KEY `password_reminders_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sitename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `site_status` int(11) NOT NULL,
  `site_favicon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `site_logo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- إرجاع أو استيراد بيانات الجدول `settings`
--

INSERT INTO `settings` (`id`, `sitename`, `email`, `description`, `keywords`, `site_status`, `site_favicon`, `site_logo`, `created_at`, `updated_at`) VALUES
(1, 'Z-Files Upload Center', 'zfiles@shicosoft.com', 'Website Description For SEO', 'Website,Keywords,For,SEO', 1, '', '', '0000-00-00 00:00:00', '2015-06-29 22:53:36');

-- --------------------------------------------------------

--
-- بنية الجدول `social`
--

CREATE TABLE IF NOT EXISTS `social` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `facebookLink` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `twitterLink` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `googlePlusLink` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- إرجاع أو استيراد بيانات الجدول `social`
--

INSERT INTO `social` (`id`, `facebookLink`, `twitterLink`, `googlePlusLink`, `created_at`, `updated_at`) VALUES
(1, '', '', '', '0000-00-00 00:00:00', '2015-06-23 01:13:11');

-- --------------------------------------------------------

--
-- بنية الجدول `themecustomize`
--

CREATE TABLE IF NOT EXISTS `themecustomize` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `welcomeText` longtext COLLATE utf8_unicode_ci NOT NULL,
  `someHtml` longtext COLLATE utf8_unicode_ci NOT NULL,
  `someCss` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- إرجاع أو استيراد بيانات الجدول `themecustomize`
--

INSERT INTO `themecustomize` (`id`, `welcomeText`, `someHtml`, `someCss`, `created_at`, `updated_at`) VALUES
(1, '<h1>The easiest way to Upload & send large files fast ...</h1><p>You Can Upload Your Files Directly It''s Free, Also You Can Signup and Get 5GB !</p>', '', '', '0000-00-00 00:00:00', '2015-06-29 00:44:56');

-- --------------------------------------------------------

--
-- بنية الجدول `themes`
--

CREATE TABLE IF NOT EXISTS `themes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `themeStatus` int(11) NOT NULL,
  `themeName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `themeFileName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- إرجاع أو استيراد بيانات الجدول `themes`
--

INSERT INTO `themes` (`id`, `themeStatus`, `themeName`, `themeFileName`, `created_at`, `updated_at`) VALUES
(1, 0, 'Defualt', 'defualt', '0000-00-00 00:00:00', '2015-06-27 02:17:01'),
(2, 1, 'z-Responsive', 'z-Responsive', '0000-00-00 00:00:00', '2015-07-03 08:08:31');

-- --------------------------------------------------------

--
-- بنية الجدول `uploadsettings`
--

CREATE TABLE IF NOT EXISTS `uploadsettings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `maxFileSize` bigint(20) unsigned NOT NULL,
  `maxUploadsFiles` int(11) NOT NULL,
  `allowedFilesExt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `userDiskSpace` bigint(20) unsigned NOT NULL,
  `fileExpireLimit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- إرجاع أو استيراد بيانات الجدول `uploadsettings`
--

INSERT INTO `uploadsettings` (`id`, `maxFileSize`, `maxUploadsFiles`, `allowedFilesExt`, `userDiskSpace`, `fileExpireLimit`, `created_at`, `updated_at`) VALUES
(1, 1073741824, 3, 'png,zip,exe,rar,pdf,docx,jpg', 2147483648, '10', '0000-00-00 00:00:00', '2015-06-29 20:52:16');

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `level`, `last_login`, `created_at`, `updated_at`, `remember_token`) VALUES
(1, 'admin', '$2y$10$MieTnVE910cRILaa3VVZuOUTXRwirHl5EA1O50Yp/wD0viQ47Jt8O', 'ecoder360@gmail.com', 'admin', '', '2015-06-17 12:15:15', '2016-06-03 22:38:42', 'QI4uTtxVMQ05SUJLfBdh14XJd3UitSgZ7CuveemWMYrovoUD0OjGTNt5zFXH');
--
-- Database: `tinyforum`
--

-- --------------------------------------------------------

--
-- بنية الجدول `forums`
--

CREATE TABLE IF NOT EXISTS `forums` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` mediumtext NOT NULL,
  `desc` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- إرجاع أو استيراد بيانات الجدول `forums`
--

INSERT INTO `forums` (`id`, `title`, `desc`) VALUES
(1, 'المنتدى العام', 'يمكنك وضع كل ما تريده من مواضيع لا تتناسب مع عناوين المنتديات الأخرى'),
(8, 'منتدى', 'للتجربة'),
(9, '111', '1111'),
(6, 'منتدى جديد', 'جديد للتجربة'),
(7, 'منتدى دعم البرامج المجانية', 'كل ما يخص البرامج المجانية'),
(5, 'المنتدى العام التقني', 'يمكنك وضع كل ما تريده من مواضيع لا تتناسب مع عناوين المنتديات الأخرى التقنية'),
(10, '111', '1111');

-- --------------------------------------------------------

--
-- بنية الجدول `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `title` mediumtext CHARACTER SET utf8mb4 NOT NULL,
  `content` longtext CHARACTER SET utf8mb4 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- إرجاع أو استيراد بيانات الجدول `posts`
--

INSERT INTO `posts` (`id`, `fid`, `pid`, `uid`, `title`, `content`) VALUES
(7, 0, 6, 0, 'ممتاز', 'عمل جيد'),
(8, 0, 6, 0, 'كيف احصل علي', 'هل من الممكن'),
(9, 0, 6, 0, 'good', 'good good'),
(10, 0, 6, 0, 'good', 'nice'),
(11, 0, 6, 0, 'a', 'a'),
(6, 7, 0, 0, 'برنامج المنتديات البسيط المجاني', 'برنامج خفيف يعمل كسكربتت للمنتديات ويفيد في رفع العمل والطلاب والمناقشة'),
(12, 8, 0, 0, 'منتدى', 'تجربة'),
(13, 0, 12, 0, 'تجربة', 'الرد'),
(14, 9, 0, 0, 'a', 'aa'),
(15, 0, 12, 0, 'منتدى', '2222');

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `isadmin` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `isadmin`) VALUES
(1, 'sultan', 'e10adc3949ba59abbe56e057f20f883e', 's@h.com', 1),
(2, 'test', '202cb962ac59075b964b07152d234b70', 'aa@a.com', 0),
(3, 'admin', '202cb962ac59075b964b07152d234b70', 'aaa@a.com', 1),
(6, 'user', 'e10adc3949ba59abbe56e057f20f883e', 'aaa@aa.com', 0);
--
-- Database: `tport`
--

-- --------------------------------------------------------

--
-- بنية الجدول `trtport`
--

CREATE TABLE IF NOT EXISTS `trtport` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `from` varchar(90) NOT NULL,
  `to` varchar(90) NOT NULL,
  `plate` varchar(90) NOT NULL,
  `time` varchar(200) NOT NULL,
  `wday` varchar(90) NOT NULL,
  `status` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=52 ;

--
-- إرجاع أو استيراد بيانات الجدول `trtport`
--

INSERT INTO `trtport` (`id`, `from`, `to`, `plate`, `time`, `wday`, `status`) VALUES
(6, 'sfh', 'mall2', '14', '02:15', 'every day', 'SCHEDULED'),
(8, 'sfh', 'mall', '321', '02:59', 'every day', 'SCHEDULED'),
(9, 'sfh', 'mall', '14', '01:17', 'every day', 'SCHEDULED'),
(12, 'sfh', 'mall', '14', '01:56', 'Thu', 'SCHEDULED'),
(13, 'sfh', 'mall', '123', '23:59', 'every day', 'SCHEDULED'),
(14, 'sfh', 'mall', '14', '01:56', 'sun - thu', 'SCHEDULED'),
(15, 'sfh', 'mall', '123', '11:11', 'every day', 'SCHEDULED'),
(16, 'sfh', 'mall', '123', '14:22', 'Tue', 'SCHEDULED'),
(17, 'sfh', 'mall', '123', '14:22', 'Mon', 'SCHEDULED'),
(18, 'sfh', 'mall', '123', '14:22', 'sun - thu', 'SCHEDULED'),
(19, 'sfh', 'mall', '321', '11:11', 'every day', 'SCHEDULED'),
(20, 'sfh', 'mall2', '123', '11:11', 'Fri', 'SCHEDULED'),
(22, 'sfh', 'mall2', '123', '11:11', 'Mon', 'SCHEDULED'),
(23, 'sfh', 'mall2', '123', '11:11', 'every day', 'SCHEDULED'),
(24, 'sfh', 'mall2', '123', '11:11', 'Wed', 'SCHEDULED'),
(25, 'sfh', 'mall2', '123', '11:11', 'sun - thu', 'SCHEDULED'),
(26, 'mall', 'sfh', '123', '11:11', 'Fri', 'SCHEDULED'),
(27, 'mall', 'sfh', '123', '11:11', 'Sat', 'SCHEDULED'),
(28, 'mall', 'sfh', '123', '11:11', 'every day', 'SCHEDULED'),
(29, 'sfh', 'mall2', '14', '02:56', 'sun - thu', 'SCHEDULED'),
(30, 'mall', 'mall2', '1238', '19:20', 'every day', 'SCHEDULED'),
(31, 'sfh', 'sfh2', '14', '15:25', 'Thu', 'SCHEDULED'),
(32, 'sfh', 'mall', '123', '15:35', 'every day', 'SCHEDULED'),
(33, 'sfh', 'mall', '123', '15:34', 'every day', 'SCHEDULED'),
(34, 'sfh', 'mall4', '123 abc', '15:23', 'every day', 'SCHEDULED'),
(35, 'sfh', 'mall2', '123', '15:31', 'Thu', 'SCHEDULED'),
(36, 'sfh', 'mall', '123', '15:32', 'every day', 'SCHEDULED'),
(37, 'sfh', 'mall', '14', '17:05', 'every day', 'SCHEDULED'),
(38, 'sfh', 'mall', '123 abc', '16:55', 'every day', 'SCHEDULED'),
(39, 'sfh', 'mall4', '123 abc', '22:55', 'every day', 'SCHEDULED'),
(40, 'sfh', 'sfh2', '14', '22:22', 'every day', 'SCHEDULED'),
(41, 'sfh', 'mall2', '123', '22:25', 'every day', 'SCHEDULED'),
(42, 'sfh', 'mall5', '123 abc', '22:20', 'every day', 'SCHEDULED'),
(43, 'sfh', 'sfh2', '14', '01:10', 'every day', 'SCHEDULED'),
(44, 'sfh', 'mall', '123', '13:14', 'every day', 'SCHEDULED'),
(45, 'sfh', 'mall', '123', '12:05', 'every day', 'SCHEDULED'),
(47, 'sfh', 'mall', '123', '04:45', 'Sat', 'SCHEDULED'),
(48, 'mall', 'sfh', '125', '12:50', 'every day', 'SCHEDULED'),
(49, 'sfh', 'mall', '321', '08:48', 'every day', 'SCHEDULED'),
(50, 'sfh', 'mall', '125', '20:48', 'every day', 'SCHEDULED'),
(51, 'sfh', 'mall', '211', '00:24', 'Mon', 'SCHEDULED');
--
-- Database: `tvtc`
--

-- --------------------------------------------------------

--
-- بنية الجدول `colleges`
--

CREATE TABLE IF NOT EXISTS `colleges` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `colleges` varchar(100) DEFAULT NULL,
  `sections` varchar(100) DEFAULT NULL,
  `specialties` varchar(100) DEFAULT NULL,
  `courseName` varchar(100) DEFAULT NULL,
  `courseNo` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- إرجاع أو استيراد بيانات الجدول `colleges`
--

INSERT INTO `colleges` (`id`, `colleges`, `sections`, `specialties`, `courseName`, `courseNo`) VALUES
(1, 'الكلية التقنية بمكة', '', '', '', ''),
(2, 'الكلية التقنية بمكة', 'الحاسب الآلي', 'علوم ادارية', 'ادارة 1001', '111211'),
(3, 'الكلية التقنية بمكة4532521', '', '', '', ''),
(4, 'الكلية التقنية بمكة4532521', 'الحاسب الآلي', '', '', ''),
(5, 'الكلية التقنية بمكة4532521', 'الحاسب الآلي2', '', '', ''),
(6, 'الكلية التقنية بمكة4532521', 'الحاسب الآلي3', '', '', ''),
(7, 'الكلية التقنية بمكة4532521', 'الحاسب الآلي3', 'علوم ادارية', '', ''),
(8, 'الكلية التقنية بمكة', 'الحاسب الآلي', 'علوم ادارية', 'ادارة 10011ت', '111211'),
(9, 'الكلية التقنية بمكة', 'الحاسب الآلي', 'علوم ادارية', 'ادارة 10011ت1', '1112111'),
(10, 'الكلية التقنية بمكة', 'الحاسب الآلي', 'علوم ادارية2', 'ادارة 1001', '111');

-- --------------------------------------------------------

--
-- بنية الجدول `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `courseName` varchar(100) NOT NULL,
  `courseNo` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `trainer` varchar(100) DEFAULT NULL,
  `students` varchar(100) DEFAULT NULL,
  `time` varchar(100) DEFAULT NULL,
  `student` varchar(100) DEFAULT NULL,
  `grade` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `trainer` (`trainer`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- بنية الجدول `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `ename` varchar(100) NOT NULL,
  `sid` varchar(100) NOT NULL,
  `jobtitle` varchar(100) DEFAULT NULL,
  `dept` varchar(100) DEFAULT NULL,
  `mob` int(100) DEFAULT NULL,
  `ext` int(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- بنية الجدول `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `sName` varchar(100) NOT NULL,
  `sNo` varchar(100) NOT NULL,
  `mobile` varchar(100) DEFAULT NULL,
  `specialty` varchar(100) DEFAULT NULL,
  `sections` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- بنية الجدول `wplans`
--

CREATE TABLE IF NOT EXISTS `wplans` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `course` varchar(100) NOT NULL,
  `courseNo` varchar(100) NOT NULL,
  `trainer` varchar(100) DEFAULT NULL,
  `year` varchar(100) DEFAULT NULL,
  `semester` varchar(100) DEFAULT NULL,
  `time` varchar(100) DEFAULT NULL,
  `week` varchar(100) DEFAULT NULL,
  `plan` varchar(2000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `uname` varchar(200) NOT NULL,
  `eid` varchar(200) DEFAULT NULL,
  `password` varchar(200) NOT NULL,
  `mobile` int(200) DEFAULT NULL,
  `isadmin` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`id`, `name`, `uname`, `eid`, `password`, `mobile`, `isadmin`) VALUES
(1, 'adminuser', 'admin', 'm123', '202cb962ac59075b964b07152d234b70', NULL, 1),
(2, 'adminuser2', 'admin2', 'm1234', '202cb962ac59075b964b07152d234b70', NULL, 1),
(3, 'admin', 'admin3', 'm12342', '202cb962ac59075b964b07152d234b70', NULL, 0),
(4, 'sultan', 'admin4', 'm12344', '202cb962ac59075b964b07152d234b70', NULL, 0),
(5, 'sultan', 'admin5', 'm12356', '202cb962ac59075b964b07152d234b70', NULL, 0),
(6, 'admin9', 'admin44', 'm123u', '202cb962ac59075b964b07152d234b70', NULL, 0),
(7, 'sultan t', 'test32', '1', '202cb962ac59075b964b07152d234b70', NULL, 0),
(8, 'sultan', 'admin54', 'm12345', 'c4ca4238a0b923820dcc509a6f75849b', NULL, 0),
(9, 'i am admin', 'my admin', 'm1231', '202cb962ac59075b964b07152d234b70', NULL, 0),
(10, 'Sultan', 'sultan', '1004', 'caf1a3dfb505ffed0d024130f58c5cfa', NULL, 0),
(11, 'sultan 2', 'ss', '2311', '202cb962ac59075b964b07152d234b70', NULL, 0),
(12, 'ali al', 'aal1', '32342', '202cb962ac59075b964b07152d234b70', NULL, 1),
(13, 'sultan77', 'sultan77', '77', '202cb962ac59075b964b07152d234b70', NULL, 1),
(17, 'test', 'rtest', '111', '202cb962ac59075b964b07152d234b70', NULL, 0),
(18, 'bteq1', 'bteq', '1213', '202cb962ac59075b964b07152d234b70', NULL, 0),
(19, 'sultan5', 'admin1', 'M1004', '9fc3d7152ba9336a670e36d0ed79bc43', NULL, 0),
(20, 'sultan', 'admin85', 'm1230', '202cb962ac59075b964b07152d234b70', NULL, 0),
(21, 'test21', 'test21', '1211', '202cb962ac59075b964b07152d234b70', 0, 0),
(22, 'testa12', 'test121', '11211', '202cb962ac59075b964b07152d234b70', 0, 0),
(23, 'test45', 'test45', '454', '202cb962ac59075b964b07152d234b70', 0, 0),
(24, 'test44', 'test44', '4444', 'dbc4d84bfcfe2284ba11beffb853a8c4', 0, 0),
(25, 'test88', 'test88', '88', '202cb962ac59075b964b07152d234b70', 1, 0),
(26, 'test888', '898', '888', '202cb962ac59075b964b07152d234b70', 0, 1),
(27, 'test555', '1122', 'M10042', '202cb962ac59075b964b07152d234b70', 0, 1),
(28, 'usert', 'usert', '12233', '81dc9bdb52d04dc20036dbd8313ed055', 0, 1),
(29, 'usert1', 'user1', '1111', '202cb962ac59075b964b07152d234b70', 0, 1);

-- --------------------------------------------------------

--
-- بنية الجدول `visitors`
--

CREATE TABLE IF NOT EXISTS `visitors` (
  `ip` varchar(20) NOT NULL,
  `timestamp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `visitors`
--

INSERT INTO `visitors` (`ip`, `timestamp`) VALUES
('::1', '1461903184'),
('::1', '1461903502'),
('::1', '1461903506'),
('::1', '1461903507'),
('::1', '1461903712'),
('::1', '1461903717'),
('::1', '1461903956'),
('::1', '1461903957'),
('::1', '1461903958'),
('::1', '1461903958'),
('::1', '1461904860'),
('::1', '1461905004'),
('::1', '1461905005');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
