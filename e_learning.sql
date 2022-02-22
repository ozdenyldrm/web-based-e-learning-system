-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 20 Şub 2022, 15:11:49
-- Sunucu sürümü: 10.4.17-MariaDB
-- PHP Sürümü: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `e_learning`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`admin_id`, `email`, `password`) VALUES
(1, 'ozdenylrm@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `answer`
--

CREATE TABLE `answer` (
  `qid` text NOT NULL,
  `ansid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `answer`
--

INSERT INTO `answer` (`qid`, `ansid`) VALUES
('5b13ed3a6e006', '5b13ed3a9436a'),
('5b13ed72489d8', '5b13ed7263d70'),
('60bf796a38208', '60bf796a384b2'),
('60bf817c49fa6', '60bf817c4a18e'),
('60bf851080cac', '60bf851099ee2'),
('60bf8510b3c18', '60bf8510b6a0a'),
('60bf8510cec98', '60bf8510d48aa'),
('60bf8510ebea9', '60bf8510f0b8f'),
('60bf851113031', '60bf851116098'),
('60bf9bc648ed7', '60bf9bc6641ac'),
('60bf9bc676965', '60bf9bc6802bc'),
('60bf9bc69b8e5', '60bf9bc6a808c'),
('60bf9bc6b9567', '60bf9bc6bca53'),
('60bf9bc6cd541', '60bf9bc6d0a21'),
('60bfa5bc35551', '60bfa5bc4d12b'),
('60bfa5bc603d0', '60bfa5bc6354a'),
('60bfa5bc79356', '60bfa5bc79858'),
('60bfa5bc89fbf', '60bfa5bc93253'),
('60bfa5bca9494', '60bfa5bcac609'),
('60bfeff793db3', '60bfeff7b2095'),
('60bfeff7c8463', '60bfeff7cbabe'),
('60bfeff7dcac8', '60bfeff7e04f1'),
('60bfeff808416', '60bfeff80b58b'),
('60bfeff81a81a', '60bfeff823728'),
('60bff522e88c5', '60bff522ebba3'),
('60bff5230c59d', '60bff5230f82c'),
('60bff52325897', '60bff52328d7d'),
('60bff5233913a', '60bff5234ee56'),
('60bff5235fa88', '60bff5236306c'),
('60bffa1371c39', '60bffa13833f7'),
('60bffa139b64f', '60bffa139e9c4'),
('60bffa13af4cb', '60bffa13b2938'),
('60bffa13c3776', '60bffa13ccd9c'),
('60bffa13ed421', '60bffa13f20cb'),
('60c003c6b305d', '60c003c6cb407'),
('60c003c6e697a', '60c003c6e9ada'),
('60c003c705230', '60c003c705a27'),
('60c003c71af8c', '60c003c7238bc'),
('60c003c733125', '60c003c735f4d'),
('60c0a15bdace6', '60c0a15be0aa9'),
('60c0a15bf3913', '60c0a15c02ad2'),
('60c0a15c1b1af', '60c0a15c1eba9'),
('60c0a15c3062c', '60c0a15c3ee1a'),
('60c0a15c4fb9a', '60c0a15c531b1'),
('60c0a467b0cbf', '60c0a467b41e5'),
('60c0a467c4f70', '60c0a467cdf16'),
('60c0a467dd800', '60c0a467e0b51'),
('60c0a467f0e9f', '60c0a467f4202'),
('60c0a46810400', '60c0a468136ee'),
('60c0a868a2459', '60c0a868a56d2'),
('60c0a868ba5bb', '60c0a868bd835'),
('60c0a868cd2a0', '60c0a868d082a'),
('60c0a868e120b', '60c0a868ea389'),
('60c0a869059d2', '60c0a8690867e');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contactus`
--

CREATE TABLE `contactus` (
  `c_id` int(11) NOT NULL,
  `c_content` text COLLATE utf8_turkish_ci NOT NULL,
  `c_subject` text COLLATE utf8_turkish_ci NOT NULL,
  `email` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `contactus`
--

INSERT INTO `contactus` (`c_id`, `c_content`, `c_subject`, `email`) VALUES
(2, 'I have problems about pointer. Can you help me?', '', 'ozdenylrm@gmail.com'),
(3, '', '', 'ozdenylrm@gmail.com'),
(4, 'I have problems about pointer. Can you help me?', 'c programming', 'ozdenylrm@gmail.com'),
(5, 'I have problem about pointer course.', 'c programming', 'ozdenylrm@gmail.com'),
(6, 'i have problem about pointers help me', 'c programming', 'ozdenylrm@gmail.com'),
(7, 'I have problem about pointers', 'c programming', 'ozdenylrm@gmail.com'),
(8, 'I have problem about pointers.', 'pointers', 'ozdenylrm@gmail.com'),
(9, 'I have problem about pointers', 'pointers', 'ozdenylrm@gmail.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(11) NOT NULL,
  `f_content` text COLLATE utf8_turkish_ci NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `feedback`
--

INSERT INTO `feedback` (`f_id`, `f_content`, `id`) VALUES
(2, 'merhaba ben c programlama öğreniyorum', 1),
(3, 'merhaba', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `history`
--

CREATE TABLE `history` (
  `email` varchar(50) NOT NULL,
  `eid` text NOT NULL,
  `score` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `good` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `history`
--

INSERT INTO `history` (`email`, `eid`, `score`, `level`, `good`, `wrong`, `date`) VALUES
('meryemyldrm@gmail.com', '60bf81fbee47b', -76, 5, 4, 1, '2021-06-29 12:19:27'),
('meryemyldrm@gmail.com', '60bf95a189db1', -76, 5, 4, 1, '2021-06-29 12:20:35'),
('buse@gmail.com', '60bf81fbee47b', 30, 5, 5, 0, '2021-06-29 12:23:21'),
('buse@gmail.com', '60bf95a189db1', -76, 5, 4, 1, '2021-06-29 12:23:46'),
('sezginn34@gmail.com', '60bf9ca80df8e', -182, 5, 3, 2, '2021-06-29 12:34:11'),
('sezginn34@gmail.com', '60bf81fbee47b', 30, 5, 5, 0, '2021-06-29 12:34:35'),
('sezginn34@gmail.com', '60bf95a189db1', -182, 5, 3, 2, '2021-06-29 12:34:53'),
('eyubogludeniz@icloud.com', '60bf81fbee47b', 30, 5, 5, 0, '2021-06-29 12:39:10'),
('eyubogludeniz@icloud.com', '60bf95a189db1', -76, 5, 4, 1, '2021-06-29 12:39:29'),
('ozdenylrm@gmail.com', '60bf95a189db1', -76, 5, 4, 1, '2021-06-29 13:33:48'),
('ozdenylrm@gmail.com', '60bf81fbee47b', 30, 5, 5, 0, '2021-06-29 13:34:08');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `options`
--

CREATE TABLE `options` (
  `qid` varchar(50) NOT NULL,
  `option` varchar(5000) NOT NULL,
  `optionid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `options`
--

INSERT INTO `options` (`qid`, `option`, `optionid`) VALUES
('5b13ed3a6e006', 'sdb', '5b13ed3a9436a'),
('5b13ed3a6e006', 'jsdb', '5b13ed3a94374'),
('5b13ed3a6e006', 'dsbv', '5b13ed3a94377'),
('5b13ed3a6e006', 'jbdv', '5b13ed3a94379'),
('5b13ed72489d8', 'vsdv', '5b13ed7263d70'),
('5b13ed72489d8', 'vsdv', '5b13ed7263d7a'),
('5b13ed72489d8', 'vsdv', '5b13ed7263d7d'),
('5b13ed72489d8', 'vsdv', '5b13ed7263d80'),
('60bf796a38208', 'char', '60bf796a384a1'),
('60bf796a38208', 'double', '60bf796a384aa'),
('60bf796a38208', 'int', '60bf796a384af'),
('60bf796a38208', 'string', '60bf796a384b2'),
('60bf817c49fa6', '%d', '60bf817c4a185'),
('60bf817c49fa6', '%f', '60bf817c4a18c'),
('60bf817c49fa6', '%c', '60bf817c4a18e'),
('60bf817c49fa6', '%s', '60bf817c4a190'),
('60bf851080cac', 'string', '60bf851099ee2'),
('60bf851080cac', 'float', '60bf851099eea'),
('60bf851080cac', 'char', '60bf851099eec'),
('60bf851080cac', 'int', '60bf851099eee'),
('60bf8510b3c18', 'int', '60bf8510b6a01'),
('60bf8510b3c18', 'bool', '60bf8510b6a0a'),
('60bf8510b3c18', 'char', '60bf8510b6a0b'),
('60bf8510b3c18', 'float', '60bf8510b6a0d'),
('60bf8510cec98', '(float)', '60bf8510d4899'),
('60bf8510cec98', '(double)', '60bf8510d48aa'),
('60bf8510cec98', '(int)', '60bf8510d48ac'),
('60bf8510cec98', '(char)', '60bf8510d48af'),
('60bf8510ebea9', 'string', '60bf8510f0b7d'),
('60bf8510ebea9', 'float', '60bf8510f0b8a'),
('60bf8510ebea9', 'char', '60bf8510f0b8f'),
('60bf8510ebea9', 'double', '60bf8510f0b9b'),
('60bf851113031', '%c', '60bf85111608d'),
('60bf851113031', '%f', '60bf851116096'),
('60bf851113031', '%d', '60bf851116098'),
('60bf851113031', '%s', '60bf85111609a'),
('60bf9bc648ed7', '0000100', '60bf9bc66419b'),
('60bf9bc648ed7', '0000010', '60bf9bc6641ac'),
('60bf9bc648ed7', '0010000', '60bf9bc6641ae'),
('60bf9bc648ed7', '0100000', '60bf9bc6641b0'),
('60bf9bc676965', 'i = 5 ', '60bf9bc6802bc'),
('60bf9bc676965', 'i = 4', '60bf9bc6802c5'),
('60bf9bc676965', 'i = 3', '60bf9bc6802c7'),
('60bf9bc676965', 'unchanged', '60bf9bc6802c8'),
('60bf9bc69b8e5', '0', '60bf9bc6a8082'),
('60bf9bc69b8e5', '1', '60bf9bc6a808c'),
('60bf9bc69b8e5', '-1', '60bf9bc6a808e'),
('60bf9bc69b8e5', '30', '60bf9bc6a8092'),
('60bf9bc6b9567', '1', '60bf9bc6bca53'),
('60bf9bc6b9567', '-1', '60bf9bc6bca5c'),
('60bf9bc6b9567', '0', '60bf9bc6bca5e'),
('60bf9bc6b9567', '4', '60bf9bc6bca60'),
('60bf9bc6cd541', '0', '60bf9bc6d0a19'),
('60bf9bc6cd541', '1', '60bf9bc6d0a21'),
('60bf9bc6cd541', '2', '60bf9bc6d0a23'),
('60bf9bc6cd541', '-1', '60bf9bc6d0a25'),
('60bfa5bc35551', 'fprintf', '60bfa5bc4d121'),
('60bfa5bc35551', 'printf', '60bfa5bc4d129'),
('60bfa5bc35551', 'scanf', '60bfa5bc4d12b'),
('60bfa5bc35551', 'putchar', '60bfa5bc4d12c'),
('60bfa5bc603d0', 'variables, expression format ', '60bfa5bc63541'),
('60bfa5bc603d0', ' expression format, variables', '60bfa5bc6354a'),
('60bfa5bc603d0', 'marks, names', '60bfa5bc6354c'),
('60bfa5bc603d0', 'names, marks', '60bfa5bc6354e'),
('60bfa5bc79356', 'move new line', '60bfa5bc79858'),
('60bfa5bc79356', 'made carriage', '60bfa5bc79860'),
('60bfa5bc79356', 'move the cursor to the left', '60bfa5bc79861'),
('60bfa5bc79356', 'page jump', '60bfa5bc79863'),
('60bfa5bc89fbf', '300.01', '60bfa5bc93249'),
('60bfa5bc89fbf', '0.01235', '60bfa5bc93251'),
('60bfa5bc89fbf', '300.01235', '60bfa5bc93253'),
('60bfa5bc89fbf', '300.012', '60bfa5bc93255'),
('60bfa5bca9494', '3.000015e+002 and 2.400000e-003', '60bfa5bcac609'),
('60bfa5bca9494', '3.000015e+2 and 2.400000e-03', '60bfa5bcac613'),
('60bfa5bca9494', '2.400000e-003 and 3.000015e+002', '60bfa5bcac615'),
('60bfa5bca9494', '3.000015e+02 and 2.400000e-3', '60bfa5bcac617'),
('60bfeff793db3', 'increment, condition, initial value', '60bfeff7b2083'),
('60bfeff793db3', 'increment, initial value, condition', '60bfeff7b2090'),
('60bfeff793db3', 'initial value, condition, increment', '60bfeff7b2095'),
('60bfeff793db3', 'condition, increment, initial value', '60bfeff7b2097'),
('60bfeff7c8463', 'sayac = 1;  sayac < 10;  sayac ++', '60bfeff7cbab0'),
('60bfeff7c8463', 'sayac = 1;  sayac < = 10;  sayac ++', '60bfeff7cbabe'),
('60bfeff7c8463', 'sayac = 0;  sayac < = 9;  sayac ++', '60bfeff7cbac1'),
('60bfeff7c8463', 'sayac = 1;  sayac < > 10;  sayac ++', '60bfeff7cbac3'),
('60bfeff7dcac8', 'i=0;  i= =100;  i+=2', '60bfeff7e04d4'),
('60bfeff7dcac8', 'i=0; ;  i++', '60bfeff7e04e2'),
('60bfeff7dcac8', 'i=0;  i > = 100;  i+2', '60bfeff7e04ea'),
('60bfeff7dcac8', 'i=0;  i < = 100;  i+=2', '60bfeff7e04f1'),
('60bfeff808416', 'There are two types of loops in C language.', '60bfeff80b57f'),
('60bfeff808416', 'The continue statement skips the rest of the loop and goes to the next loop.', '60bfeff80b58b'),
('60bfeff808416', 'All loop constructs start the loop by first checking the loop entry condition.', '60bfeff80b58e'),
('60bfeff808416', 'The end statement ends the loop.', '60bfeff80b590'),
('60bfeff81a81a', 'It opens with { sign and closes with } sign.', '60bfeff823728'),
('60bfeff81a81a', 'It opens with { sign and closes with next.', '60bfeff823731'),
('60bfeff81a81a', 'It opens with { sign and closes with end.', '60bfeff823733'),
('60bfeff81a81a', 'No statement is used.', '60bfeff823735'),
('60bff522e88c5', 'goodbye', '60bff522ebb99'),
('60bff522e88c5', 'odbye', '60bff522ebba0'),
('60bff522e88c5', 'bye', '60bff522ebba2'),
('60bff522e88c5', 'dbye', '60bff522ebba3'),
('60bff5230c59d', 'scanf(\"%f %e\", &a, &b);      ', '60bff5230f816'),
('60bff5230c59d', 'scanf(\"%Lf %Ld\", &a, &b);', '60bff5230f824'),
('60bff5230c59d', 'scanf(\"%f %f\", &a, &b);', '60bff5230f82c'),
('60bff5230c59d', 'scanf(\"%f %s\", &a, &b);', '60bff5230f833'),
('60bff52325897', 'Every C program has at least one function.', '60bff52328d7d'),
('60bff52325897', 'Functions cannot call themselves.', '60bff52328d8a'),
('60bff52325897', 'The function is exited with the break command.', '60bff52328d8d'),
('60bff52325897', 'In all cases, prototype identification is mandatory.', '60bff52328d8f'),
('60bff5233913a', 'int square_Find ( int x ) { return x * x; }', '60bff5234ee56'),
('60bff5233913a', 'squareFind ( int x ) { return x * x; }', '60bff5234ee63'),
('60bff5233913a', 'int _Squarefind ( int x ) { return x * x; }', '60bff5234ee66'),
('60bff5233913a', 'All', '60bff5234ee69'),
('60bff5235fa88', 'It is one of the function types.', '60bff5236305a'),
('60bff5235fa88', 'A title heder file.', '60bff52363068'),
('60bff5235fa88', 'The function is a statement that introduces main().', '60bff5236306c'),
('60bff5235fa88', 'prototype is the main() function', '60bff5236306e'),
('60bffa1371c39', '88', '60bffa13833e7'),
('60bffa1371c39', '18', '60bffa13833f2'),
('60bffa1371c39', '29', '60bffa13833f5'),
('60bffa1371c39', '19', '60bffa13833f7'),
('60bffa139b64f', '11', '60bffa139e9c4'),
('60bffa139b64f', '7', '60bffa139e9ce'),
('60bffa139b64f', '5', '60bffa139e9d0'),
('60bffa139b64f', '9', '60bffa139e9d2'),
('60bffa13af4cb', '7', '60bffa13b292f'),
('60bffa13af4cb', '6', '60bffa13b2938'),
('60bffa13af4cb', '5', '60bffa13b293a'),
('60bffa13af4cb', 'error', '60bffa13b293d'),
('60bffa13c3776', '03%D', '60bffa13ccd92'),
('60bffa13c3776', '000', '60bffa13ccd9a'),
('60bffa13c3776', '032', '60bffa13ccd9c'),
('60bffa13c3776', '321', '60bffa13ccd9e'),
('60bffa13ed421', '6', '60bffa13f20be'),
('60bffa13ed421', '7', '60bffa13f20c7'),
('60bffa13ed421', '8', '60bffa13f20c9'),
('60bffa13ed421', '9', '60bffa13f20cb'),
('60c003c6b305d', '&iptr', '60c003c6cb3fe'),
('60c003c6b305d', '*iptr', '60c003c6cb407'),
('60c003c6b305d', '%iptr', '60c003c6cb409'),
('60c003c6b305d', '/îptr', '60c003c6cb40b'),
('60c003c6e697a', '21', '60c003c6e9ad1'),
('60c003c6e697a', '006dfee8', '60c003c6e9ada'),
('60c003c6e697a', '0x21', '60c003c6e9adc'),
('60c003c6e697a', '2100', '60c003c6e9ade'),
('60c003c705230', 'A B C D E F G H I J K', '60c003c705a27'),
('60c003c705230', 'A C B E D G F I H K J', '60c003c705a30'),
('60c003c705230', 'K J I H G F E D C B A', '60c003c705a32'),
('60c003c705230', 'G H I J K L M N O P R', '60c003c705a34'),
('60c003c71af8c', '0x21', '60c003c7238b1'),
('60c003c71af8c', '0x021', '60c003c7238ba'),
('60c003c71af8c', '21', '60c003c7238bc'),
('60c003c71af8c', '2100', '60c003c7238be'),
('60c003c733125', 'pointers allow different functions to share and modify their local variable. ', '60c003c735f40'),
('60c003c733125', 'to pass large structures so that complete copy of the structure can be avoid.', '60c003c735f49'),
('60c003c733125', 'pointers enable complex \"linked\" data structures like linked lists and binary trees.', '60c003c735f4b'),
('60c003c733125', 'all of the above.', '60c003c735f4d'),
('60c0a15bdace6', 'if - else', '60c0a15be0aa5'),
('60c0a15bdace6', 'else if - else - if', '60c0a15be0aa8'),
('60c0a15bdace6', 'if- else - else if', '60c0a15be0aa9'),
('60c0a15bdace6', 'switch case', '60c0a15be0aaa'),
('60c0a15bf3913', 'while', '60c0a15c02acd'),
('60c0a15bf3913', 'if - else -else if', '60c0a15c02ad2'),
('60c0a15bf3913', 'switch case', '60c0a15c02ad3'),
('60c0a15bf3913', 'do while', '60c0a15c02ad4'),
('60c0a15c1b1af', 'Every if-else can be expressed with a switch-case construct.', '60c0a15c1eba9'),
('60c0a15c1b1af', 'There are nested if-else constructs.', '60c0a15c1ebb2'),
('60c0a15c1b1af', 'An if block can be executed by specifying more than one condition.', '60c0a15c1ebb4'),
('60c0a15c1b1af', 'More than one line can be processed under the else block.', '60c0a15c1ebb6'),
('60c0a15c3062c', '0', '60c0a15c3ee12'),
('60c0a15c3062c', 'false', '60c0a15c3ee1a'),
('60c0a15c3062c', '10', '60c0a15c3ee1d'),
('60c0a15c3062c', 'true', '60c0a15c3ee1e'),
('60c0a15c4fb9a', 'AAA', '60c0a15c531b1'),
('60c0a15c4fb9a', 'AAAA', '60c0a15c531ba'),
('60c0a15c4fb9a', 'A', '60c0a15c531bc'),
('60c0a15c4fb9a', 'AA', '60c0a15c531be'),
('60c0a467b0cbf', 'stdlib.h is in the header file.', '60c0a467b41dd'),
('60c0a467b0cbf', 'It is in the io.h header file.', '60c0a467b41e2'),
('60c0a467b0cbf', 'It is in the stdio.h header file.', '60c0a467b41e5'),
('60c0a467b0cbf', 'inputOutput.h is in the header file.', '60c0a467b41e6'),
('60c0a467c4f70', 'sqrt(x)', '60c0a467cdf10'),
('60c0a467c4f70', ' exp(x)', '60c0a467cdf14'),
('60c0a467c4f70', 'pow(x,y)', '60c0a467cdf15'),
('60c0a467c4f70', ' Ln(x)', '60c0a467cdf16'),
('60c0a467dd800', 'float f(2 * double);', '60c0a467e0b4b'),
('60c0a467dd800', 'double f(x,y);', '60c0a467e0b50'),
('60c0a467dd800', 'float f(double, double);', '60c0a467e0b51'),
('60c0a467dd800', 'float f(double x, y);', '60c0a467e0b52'),
('60c0a467f0e9f', 'unsigned int x; için scanf(\"%u\" , &x);', '60c0a467f41f5'),
('60c0a467f0e9f', 'long int x; için scanf(\"%ld\" , &x);', '60c0a467f41ff'),
('60c0a467f0e9f', 'short x; için scanf(\"%hd\" , &x);', '60c0a467f4201'),
('60c0a467f0e9f', 'All', '60c0a467f4202'),
('60c0a46810400', '3', '60c0a468136ee'),
('60c0a46810400', '2', '60c0a468136f7'),
('60c0a46810400', '1', '60c0a468136f9'),
('60c0a46810400', 'more than 3', '60c0a468136fb'),
('60c0a868a2459', 'Variable that only main() can access.', '60c0a868a56d2'),
('60c0a868a2459', 'Variable defined inside a block.', '60c0a868a56d6'),
('60c0a868a2459', 'The main variable of the program.', '60c0a868a56d7'),
('60c0a868a2459', 'is the symbolic constant defined as the preprocessor.', '60c0a868a56d8'),
('60c0a868ba5bb', 'It is a variable that only main() can access.', '60c0a868bd831'),
('60c0a868ba5bb', 'A variable that is not in any block.', '60c0a868bd835'),
('60c0a868ba5bb', 'The main variable of the program.', '60c0a868bd836'),
('60c0a868ba5bb', 'is a symbolic constant defined as a preprocessor.', '60c0a868bd837'),
('60c0a868cd2a0', 'float', '60c0a868d0820'),
('60c0a868cd2a0', 'int', '60c0a868d0828'),
('60c0a868cd2a0', 'real', '60c0a868d082a'),
('60c0a868cd2a0', 'double', '60c0a868d082c'),
('60c0a868e120b', 'defined by the const prefix.', '60c0a868ea384'),
('60c0a868e120b', 'It is defined only under a particular function or in a particular subprogram.', '60c0a868ea388'),
('60c0a868e120b', 'It is defined on the main() function.', '60c0a868ea389'),
('60c0a868e120b', 'It must be defined with the #define pre-statement.', '60c0a868ea38a'),
('60c0a869059d2', '*sumOfdigit;', '60c0a86908677'),
('60c0a869059d2', 'Sumof*Digit;', '60c0a8690867d'),
('60c0a869059d2', 'sumOfdigit;', '60c0a8690867e'),
('60c0a869059d2', '_sumOfdigit;', '60c0a8690867f');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `question`
--

CREATE TABLE `question` (
  `q_id` int(11) NOT NULL,
  `q_content` text COLLATE utf8_turkish_ci NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `question`
--

INSERT INTO `question` (`q_id`, `q_content`, `id`) VALUES
(1, 'merhaba fonksiyonlar hakkında soru sormak istiyorum', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `questions`
--

CREATE TABLE `questions` (
  `eid` text NOT NULL,
  `qid` text NOT NULL,
  `qns` text NOT NULL,
  `choice` int(10) NOT NULL,
  `sn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `questions`
--

INSERT INTO `questions` (`eid`, `qid`, `qns`, `choice`, `sn`) VALUES
('5b13ed30cd71f', '5b13ed3a6e006', 'dbjb', 4, 1),
('5b13ed6bb8bcd', '5b13ed72489d8', 'dvsd', 4, 1),
('60bf81fbee47b', '60bf851080cac', 'Fill in the blank correctly:  ____ myText = \"Hello World\" ;', 4, 1),
('60bf81fbee47b', '60bf8510b3c18', 'Fill in the blank correctly:  ____ myBool = false;', 4, 2),
('60bf81fbee47b', '60bf8510cec98', 'Data type conversion:  int a = 5, b = 6; and double z;   z = ____ a + b ;', 4, 3),
('60bf81fbee47b', '60bf8510ebea9', 'Fill in the blank correctly:  ____ name [ ] = \"James\" ;', 4, 4),
('60bf81fbee47b', '60bf851113031', 'Fill in the blank correctly:   double y = 14, 2 ;    printf(\"___\", y) ;', 4, 5),
('60bf95a189db1', '60bf9bc648ed7', 'Calculate the results:   a = 0001000  b = 2,   a << b = 0100000   a >> b = ____', 4, 1),
('60bf95a189db1', '60bf9bc676965', 'i ++;   what is the value of i when the operator runs ? ( at first i = 4 )', 4, 2),
('60bf95a189db1', '60bf9bc69b8e5', 'a = 0 || -30   what will be the new value of a ?', 4, 3),
('60bf95a189db1', '60bf9bc6b9567', 'b = 10 && - 4   what will be the new value of b ?', 4, 4),
('60bf95a189db1', '60bf9bc6cd541', 'a= 20;   – b= 10;    y = a + b > = 20 || a – b < = 10;    y = ?', 4, 5),
('60bf9ca80df8e', '60bfa5bc35551', 'Which function is used when take input from the user ?', 4, 1),
('60bf9ca80df8e', '60bfa5bc603d0', 'printf( \"_____\",_____ );    what to write in the blanks ?', 4, 2),
('60bf9ca80df8e', '60bfa5bc89fbf', 'printf ( \" %.5f\n \" , 300.0123456789 ) ;    what is the output ?', 4, 4),
('60bf9ca80df8e', '60bfa5bca9494', 'printf ( \" %e and %e\n\" , 300.00145678901, 0.0024 ) ;   what is the output ?', 4, 5),
('60bfebd348659', '60bfeff793db3', 'The for loop has three parts.  These are respectively;', 4, 1),
('60bfebd348659', '60bfeff7c8463', 'Which of the following prints the numbers 1 to 10 on the screen ?', 4, 2),
('60bfebd348659', '60bfeff7dcac8', 'Which of the following is the for loop to set up a loop where the counter increments by 2 from 0 to 100?', 4, 3),
('60bfebd348659', '60bfeff808416', 'Which of the following is true about loops ?', 4, 4),
('60bfebd348659', '60bfeff81a81a', 'Which of the following is true about loops in C ?', 4, 5),
('60bff022b5801', '60bff522e88c5', 'What will be the output of the following statement ?   printf ( 3 + \"goodbye\") ;', 4, 1),
('60bff022b5801', '60bff5230c59d', 'Which scanf() construct should be used to request the given variables a and b from the user ?', 4, 2),
('60bff022b5801', '60bff52325897', 'Which of the following is true about functions ?', 4, 3),
('60bff022b5801', '60bff5233913a', 'Which one is the function definition ?', 4, 4),
('60bff022b5801', '60bff5235fa88', 'What is function header (prototype) in C language ?', 4, 5),
('60bff729738ee', '60bffa1371c39', ' What will be the output of following statements ?   char x[ ] = \"hello hi\"; printf(\"%d%d\",sizeof(*x),sizeof(x));', 4, 1),
('60bff729738ee', '60bffa139b64f', 'int testarray[3][2][2] = {1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12};   What value does testarray[2][1][0] in the sample code above contain?', 4, 2),
('60bff729738ee', '60bffa13af4cb', 'What would be the output ?   char str [ ] = \"S\065AB\";   printf (\"\n%d\", sizeof(str));', 4, 3),
('60bff729738ee', '60bffa13c3776', 'What will be the output of the following statements ?   int x[4] = {1, 2, 3}; printf (\"%d %d %d\", x[3], x[2], x[1]) ;', 4, 4),
('60bff729738ee', '60bffa13ed421', 'int y[4] = {6, 7, 8, 9};   int *ptr = y + 2; printf (\"%d\n\", ptr[ 1 ] );   What is printed when the sample code above is executed ?', 4, 5),
('60bfff3a5abda', '60c003c6b305d', 'How to express pointers ?', 4, 1),
('60bfff3a5abda', '60c003c6e697a', 'int *ip,  id;  and  id = 21;   ip = &id;   what is the output ?   printf (\"id value of variable: %d\", &id); ', 4, 2),
('60bfff3a5abda', '60c003c71af8c', 'int *ip,  id;  and  id = 21;   ip = &id;   what is the output ?   printf (\"id value of variable: %d\", *ip); ', 4, 4),
('60bfff3a5abda', '60c003c733125', 'The reason for using pointers in a C program is;', 4, 5),
('60c09b5c565c0', '60c0a15bdace6', 'which if else construct is used for multiple conditions ?', 4, 1),
('60c09b5c565c0', '60c0a15bf3913', 'Which conditional structure is used most often in C ?', 4, 2),
('60c09b5c565c0', '60c0a15c1b1af', 'Which of the following statements about the if-else structure used in C language is false ?', 4, 3),
('60c09b5c565c0', '60c0a15c3062c', 'int a=0,  b=10;    if (a = 0 ){  printf (\"true\") ;  }  else  printf (\" false \") ;   what is the output ?', 4, 4),
('60c09b5c565c0', '60c0a15c4fb9a', 'if x=2  if (x>0) {   if (x>4) printf(“A”); }   else   printf(“AA”); \r\n  printf(“AAA”);   What is the output of the following program segment ?', 4, 5),
('60c0a27c808fa', '60c0a467b0cbf', 'Where are the functions that perform input/output operations in C ?', 4, 1),
('60c0a27c808fa', '60c0a467c4f70', 'Which one is not in the math.h header file ?', 4, 2),
('60c0a27c808fa', '60c0a467dd800', 'Header declaration for function float f(double, double){ ...}\r\nprototype) which is correct ?', 4, 3),
('60c0a27c808fa', '60c0a467f0e9f', 'Which one reads correctly ?', 4, 4),
('60c0a27c808fa', '60c0a46810400', 'How many types of function calls can there be ?', 4, 5),
('60c0a55593fc0', '60c0a868a2459', 'what is a local variable ?', 4, 1),
('60c0a55593fc0', '60c0a868ba5bb', 'what is a global variable ?', 4, 2),
('60c0a55593fc0', '60c0a868cd2a0', 'Which of the following is not a data type in C ?', 4, 3),
('60c0a55593fc0', '60c0a868e120b', 'Which of the following is true about global variables ?', 4, 4),
('60c0a55593fc0', '60c0a869059d2', 'which is a correct variable definition ?', 4, 5);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `quiz`
--

CREATE TABLE `quiz` (
  `eid` text NOT NULL,
  `name` varchar(100) NOT NULL,
  `good` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `quiz`
--

INSERT INTO `quiz` (`eid`, `name`, `good`, `wrong`, `total`, `date`) VALUES
('60bf81fbee47b', 'Variables', 6, 100, 5, '2021-06-08 14:43:07'),
('60bf95a189db1', 'Operators', 6, 100, 5, '2021-06-08 16:06:57'),
('60bf9ca80df8e', 'Input & Output', 6, 100, 5, '2021-06-08 16:36:56'),
('60bfebd348659', 'Loops', 6, 100, 5, '2021-06-08 22:14:43'),
('60bff022b5801', 'Functions', 6, 100, 5, '2021-06-08 22:33:06'),
('60bff729738ee', 'Arrays', 6, 100, 5, '2021-06-08 23:03:05'),
('60bfff3a5abda', 'Pointers', 6, 100, 5, '2021-06-08 23:37:30'),
('60c09b5c565c0', 'Decision Structures', 6, 100, 5, '2021-06-09 10:43:40'),
('60c0a27c808fa', 'Functions 2', 6, 100, 5, '2021-06-09 11:14:04'),
('60c0a55593fc0', 'Variables 2', 6, 100, 5, '2021-06-09 11:26:13');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `rank`
--

CREATE TABLE `rank` (
  `email` varchar(50) NOT NULL,
  `score` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `rank`
--

INSERT INTO `rank` (`email`, `score`, `time`) VALUES
('pinky@gmail.com', 30, '2018-06-03 16:57:45'),
('priyanka@gmail.com', 22, '2018-06-03 16:59:06'),
('ozdenylrm@gmail.com', 107, '2021-06-29 13:34:08'),
('meryemyldrm@gmail.com', -152, '2021-06-29 12:20:35'),
('buse@gmail.com', -46, '2021-06-29 12:23:46'),
('sezginn34@gmail.com', -334, '2021-06-29 12:34:53'),
('eyubogludeniz@icloud.com', -46, '2021-06-29 12:39:29');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sorular`
--

CREATE TABLE `sorular` (
  `id` int(11) NOT NULL,
  `cevap` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sorular`
--

INSERT INTO `sorular` (`id`, `cevap`) VALUES
(1, '0100000'),
(9, 'double'),
(4, '0000010'),
(8, 'int'),
(7, '37'),
(10, 'char'),
(11, 'bool'),
(12, 'string'),
(13, 'double'),
(15, '(double)'),
(16, 'float'),
(17, '%c'),
(18, '30'),
(19, '23.333334'),
(20, '13716'),
(21, 'if'),
(22, 'else'),
(23, 'else if'),
(24, 'for(i=1;i<=10;'),
(25, 'j=1;j<=n;'),
(26, 'switch'),
(27, 'case'),
(28, 'break'),
(29, 'default'),
(30, 'double pow(double base, int expo)'),
(31, 'pow(base, expo)'),
(32, 'str1[MAX_SIZE], str2[MAX_SIZE]'),
(33, 'char * str1, char * str2'),
(34, 'str1[i] == str2[i]'),
(35, 'str'),
(36, 'str[i] != \'\\0\''),
(37, 'arr[MAX_SIZE]'),
(38, 'arr[i]'),
(39, 'while'),
(40, 'while(tempDecimal > 0)'),
(41, 'printf'),
(42, 'scanf'),
(43, '%d'),
(44, 'getchar'),
(45, 'putchar'),
(46, 'odd'),
(47, 'iptr'),
(48, '*iptr'),
(49, '*iptr');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user`
--

CREATE TABLE `user` (
  `name` varchar(50) NOT NULL,
  `college` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `images` text NOT NULL,
  `department` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `user`
--

INSERT INTO `user` (`name`, `college`, `email`, `password`, `gender`, `images`, `department`) VALUES
('buseyldrm', 'Bogazici University', 'buse@gmail.com', '12345', 'Female', '', ''),
('Deniz Eyuboglu', '19 Mayıs University', 'eyubogludeniz@icloud.com', 'eyuboglu789*-', 'Male', '', ''),
('meryemyldrm', 'İstanbul Üniversitesi', 'meryem@icloud.com', '123456', 'Female', '', ''),
('Meryem Yıldırım', 'Istanbul University', 'meryemyldrm@gmail.com', '123456789', 'Female', '', ''),
('ozdenyldrm', 'Karabuk University', 'ozdenylrm@gmail.com', 'admin', 'Female', '../image/stu/', 'Elektrik mühendisliği'),
('Swagatika Padhi', 'National Institute of Science and Technology, Berhampur', 'pinky@gmail.com', 'pinky', '', '', ''),
('Priyanka Pattnaik', 'National Institute of Science and Technology, Berhampur', 'priyanka@gmail.com', 'pinka', '', '', ''),
('Halil Sezgin', 'sezgin123*-', 'sezginn34@gmail.com', 'sezgin123*-', 'Male', '', '');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Tablo için indeksler `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`c_id`);

--
-- Tablo için indeksler `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Tablo için indeksler `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`q_id`);

--
-- Tablo için indeksler `sorular`
--
ALTER TABLE `sorular`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `contactus`
--
ALTER TABLE `contactus`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `question`
--
ALTER TABLE `question`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `sorular`
--
ALTER TABLE `sorular`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
