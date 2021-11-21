-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2021 at 11:44 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `squared`
--

-- --------------------------------------------------------

--
-- Table structure for table `assets`
--

CREATE TABLE `assets` (
  `id` int(11) NOT NULL,
  `itemname` text NOT NULL,
  `desc` longtext NOT NULL,
  `assettype` text NOT NULL,
  `ownerid` int(11) NOT NULL,
  `madeat` datetime NOT NULL,
  `thumbnail` longtext NOT NULL,
  `price` bigint(20) NOT NULL,
  `sales` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assets`
--

INSERT INTO `assets` (`id`, `itemname`, `desc`, `assettype`, `ownerid`, `madeat`, `thumbnail`, `price`, `sales`, `created`) VALUES
(1, 'test', 'oo ee oo ah ah wing wang walla walla bing bang', 'hat', 3, '1971-10-03 13:19:53', 'https://squared.cf/img/mace.svg', 555, 0, '2021-10-03 00:00:00'),
(2, 'ur mother', 'test item 2 (used for revenue + sales)', 'hat', 1, '2021-11-04 13:19:53', 'https://squared.cf/img/logo.svg', 23, 0, '2021-11-04 13:19:53'),
(3, 'Shaggy', 'test item 3', 'hat', 1, '2021-11-14 13:19:53', 'https://static.wikia.nocookie.net/roblox/images/a/a5/Shaggy.png', 50, 420, '2021-11-14 13:19:53');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `position` int(11) NOT NULL,
  `threads` int(11) NOT NULL,
  `posts` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `position`, `threads`, `posts`) VALUES
(1, 'test', 'test', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `feed`
--

CREATE TABLE `feed` (
  `id` int(11) NOT NULL,
  `user` text NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL,
  `madeby` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feed`
--

INSERT INTO `feed` (`id`, `user`, `content`, `date`, `madeby`) VALUES
(1, 'Squared', 'added news today including a new post so go check it out', '2021-11-13 17:47:00', 1),
(2, 'Squared', 'also we added the 2014 theme today (officially)', '2021-11-13 17:50:00', 1),
(3, 'Snoopydogg', 'gud revival', '2021-11-13 19:10:00', 14),
(4, 'sudoapt', 'don\'t you lecture me with your 30 dolla neurotoxin', '2021-11-13 19:12:00', 6),
(5, 'Squared', '16 users nice', '2021-11-13 20:00:00', 1),
(6, 'janx', 'unglorified chat :rolling_eyes:', '2021-11-14 11:03:11', 3),
(7, 'janx', 'cum', '2021-11-14 15:18:35', 3),
(8, 'Squared', 'ur mother', '2021-11-14 15:19:08', 1),
(9, 'sudoapt', 'twitter', '2021-11-14 15:19:48', 6),
(10, 'sudoapt', 'twitter', '2021-11-14 15:19:48', 6),
(11, 'sudoapt', 'twitter', '2021-11-14 15:19:49', 6),
(12, 'Snoopydogg', 'Hello, Snoopydogg!    My Best FriendsEdit What are you up to? Share My Feed sudoapt sudoapt \"twitter\" November 14th 2021 at 3:19 PM sudoapt sudoapt \"twitter\" November 14th 2021 at 3:19 PM Squared Squared \"ur mother\" November 14th 2021 at 3:19 PM janx jan', '2021-11-14 15:20:16', 14),
(13, 'Squared', 'were gonna add a delay because we dont need spammers bitches', '2021-11-14 15:21:40', 1),
(14, 'Squared', 'were near 20 users so thats cool', '2021-11-14 15:25:33', 1),
(15, 'janx', 'i think you meant *I* am gonna add delay', '2021-11-14 15:27:19', 3),
(16, 'brick', 'feelin bricky', '2021-11-14 15:28:02', 18),
(17, 'janx', 'tombatomba botbmb BOMBA/??? FUCKIN BOMB IN POILISJH 1823QOIUQDAJFSHJALKAAAAAAAAAA', '2021-11-14 15:28:04', 3),
(18, 'Squared', 'fuck you lol', '2021-11-14 15:28:05', 1),
(19, 'janx', 'im feeling orgasmic', '2021-11-14 15:29:14', 3),
(20, 'krypto', 'I like Children SO much dude...............', '2021-11-14 15:29:14', 10),
(21, 'Squared', 'this is so fuckin cursed', '2021-11-14 15:29:29', 1),
(22, 'krypto', 'It aint Curse. Its the truth. You see. Jans feels orgasmic. And i like children.', '2021-11-14 15:30:11', 10),
(23, 'Squared', 'lol', '2021-11-14 15:30:28', 1),
(24, 'Squared', '@janx add a fuckin delay u lazy bum', '2021-11-14 15:31:33', 1),
(25, 'janx', 'for your information, im not swedish', '2021-11-14 15:31:42', 3),
(26, 'Squared', 'Fuck you Nigger', '2021-11-14 15:32:31', 1),
(27, 'janx', 'OMG RACIST??? MR DOOM BRUNG RACSIT!?!?!?1/1/1 IM FOTOGRAFING AND POSTING IT TO POLICE AND DISCORD SERVER!!! BITCH FUCK', '2021-11-14 15:34:19', 3),
(28, 'Squared', 'what u gonna do about it i said the n word', '2021-11-14 15:38:31', 1),
(29, 'krypto', 'OMGG Fucking God Guys. HJe said the Godttamn it Nword. Fuck Start Photografin this shit Nigguh. Oh Fuck i said the Nwrod too. Shit Shit.', '2021-11-14 15:42:31', 10),
(30, 'janx', 'g', '2021-11-14 16:08:07', 3),
(31, 'janx', 'fg', '2021-11-14 16:08:09', 3),
(32, 'janx', 'gdh', '2021-11-14 16:08:12', 3),
(33, 'Squared', 'thank you @flarf for being the <a href=\"https://squared.cf/user?id=20\">20th user</a>', '2021-11-14 16:08:37', 1),
(34, 'janx', 'gggg', '2021-11-14 16:11:30', 3),
(35, 'janx', 'ggggg', '2021-11-14 16:11:35', 3),
(36, 'janx', 'hhhhh', '2021-11-14 16:12:39', 3),
(37, 'janx', 'ggg', '2021-11-14 16:13:55', 3),
(38, 'sudoapt', 'can wai fo scored clien!!! ', '2021-11-14 16:14:26', 6),
(39, 'Squared', 'thank you @flarf for being the <a href=\"https://squared.cf/user?id=20\">20th user</a>', '2021-11-14 16:15:06', 1),
(40, 'janx', 'ggg', '2021-11-14 16:15:18', 3),
(41, 'janx', 'ggg', '2021-11-14 16:15:20', 3),
(42, 'Squared', 'ur mom', '2021-11-14 16:16:43', 1),
(43, 'janx', 'gggf', '2021-11-14 16:16:54', 3),
(44, 'janx', 'gggf', '2021-11-14 16:16:56', 3),
(45, 'janx', 'gggf', '2021-11-14 16:16:57', 3),
(46, 'krypto', 'Fuck YOU FUCKING NIGGERR\"!!!!!! WHAT THE FUCK IS A \"gggf\" Y OUFUCKING MO RON!!!! :(////(((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((', '2021-11-14 16:20:03', 10),
(47, 'Squared', 'balls', '2021-11-14 16:23:22', 1),
(48, 'Squared', 'ur mother', '2021-11-14 16:26:40', 1),
(49, 'Squared', ' ', '2021-11-14 16:28:14', 1),
(50, 'Squared', ' hey guys its me the mr doom bringer so today were gonna say the n word and cause everyone to go Let me show you how to scratch it!-pt-ha-Tugh-ha Bm-Tha-A-pt-et-The-Bea-et-The-Ba-A-pt-A-Tha-A Bm-Tha-A-pt-et-The-PRRRSK-kt-Bea-pt-Ha-tugh-Ha Bm-Tha-A-pt-et', '2021-11-14 16:29:08', 1),
(51, 'janx', 'gggf', '2021-11-14 16:29:10', 3),
(52, 'janx', 'hhhhhfff', '2021-11-14 16:29:14', 3),
(53, 'Squared', 'a', '2021-11-14 16:29:33', 1),
(54, 'Squared', 'a', '2021-11-14 16:29:37', 1),
(55, 'Squared', 'a', '2021-11-14 16:29:40', 1),
(56, 'Squared', 'a', '2021-11-14 16:29:42', 1),
(57, 'Squared', '', '2021-11-14 16:29:56', 1),
(58, 'Squared', ' hey guys its me the mr doom bringer so today were gonna say the n word and cause everyone to go Let me show you how to scratch it!-pt-ha-Tugh-ha Bm-Tha-A-pt-et-The-Bea-et-The-Ba-A-pt-A-Tha-A Bm-Tha-A-pt-et-The-PRRRSK-kt-Bea-pt-Ha-tugh-Ha Bm-Tha-A-pt-et', '2021-11-14 16:30:03', 1),
(59, 'Squared', 'Let me show you how to scratch it!-pt-ha-Tugh-ha Bm-Tha-A-pt-et-The-Bea-et-The-Ba-A-pt-A-Tha-A Bm-Tha-A-pt-et-The-PRRRSK-kt-Bea-pt-Ha-tugh-Ha Bm-Tha-A-pt-et-The-Bea-et-The-Ba-A-pt-A-Tha-A-Bm Either way, destiny still arrives', '2021-11-14 16:30:11', 1),
(60, 'janx', 'shthsth', '2021-11-14 16:30:24', 3),
(61, 'Squared', 'Let me show you how to scratch it!-pt-ha-Tugh-ha Bm-Tha-A-pt-et-The-Bea-et-The-Ba-A-pt-A-Tha-A Bm-Tha-A-pt-et-The-PRRRSK-kt-Bea-pt-Ha-tugh-Ha Bm-Tha-A-pt-et-The-Bea-et-The-Ba-A-pt-A-Tha-A-Bm Either way, destiny still arrives Let me show you how to scratch it!-pt-ha-Tugh-ha Bm-Tha-A-pt-et-The-Bea-et-The-Ba-A-pt-A-Tha-A Bm-Tha-A-pt-et-The-PRRRSK-kt-Bea-pt-Ha-tugh-Ha Bm-Tha-A-pt-et-The-Bea-et-The-Ba-A-pt-A-Tha-A-Bm Either way, destiny still arrives', '2021-11-14 16:30:37', 1),
(62, 'Squared', 'Let me show you how to scratch it!-pt-ha-Tugh-ha Bm-Tha-A-pt-et-The-Bea-et-The-Ba-A-pt-A-Tha-A Bm-Tha-A-pt-et-The-PRRRSK-kt-Bea-pt-Ha-tugh-Ha Bm-Tha-A-pt-et-The-Bea-et-The-Ba-A-pt-A-Tha-A-Bm Either way, destiny still arrivesLet me show you how to scratch it!-pt-ha-Tugh-ha Bm-Tha-A-pt-et-The-Bea-et-The-Ba-A-pt-A-Tha-A Bm-Tha-A-pt-et-The-PRRRSK-kt-Bea-pt-Ha-tugh-Ha Bm-Tha-A-pt-et-The-Bea-et-The-Ba-A-pt-A-Tha-A-Bm Either way, destiny still arrivesLet me show you how to scratch it!-pt-ha-Tugh-ha Bm-Tha-A-pt-et-The-Bea-et-The-Ba-A-pt-A-Tha-A Bm-Tha-A-pt-et-The-PRRRSK-kt-Bea-pt-Ha-tugh-Ha Bm-Tha-A-pt-et-The-Bea-et-The-Ba-A-pt-A-Tha-A-Bm Either way, destiny still arrivesLet me show you how to scratch it!-pt-ha-Tugh-ha Bm-Tha-A-pt-et-The-Bea-et-The-Ba-A-pt-A-Tha-A Bm-Tha-A-pt-et-The-PRRRSK-kt-Bea-pt-Ha-tugh-Ha Bm-Tha-A-pt-et-The-Bea-et-The-Ba-A-pt-A-Tha-A-Bm Either way, destiny still arrivesLet me show you how to scratch it!-pt-ha-Tugh-ha Bm-Tha-A-pt-et-The-Bea-et-The-Ba-A-pt-A-Tha-A Bm-Tha-A-pt-et-The-PRRRSK-kt-Bea-pt-Ha-tugh-Ha Bm-Tha-A-pt-et-The-Bea-et-The-Ba-A-pt-A-Tha-A-Bm Either way, destiny still arrives', '2021-11-14 16:30:53', 1),
(63, 'gamingcat1254', 'im more gaming than all of u noobs', '2021-11-14 16:31:02', 23),
(64, 'Squared', 'Let me show you how to scratch it!-pt-ha-Tugh-ha Bm-Tha-A-pt-et-The-Bea-et-The-Ba-A-pt-A-Tha-A Bm-Tha-A-pt-et-The-PRRRSK-kt-Bea-pt-Ha-tugh-Ha Bm-Tha-A-pt-et-The-Bea-et-The-Ba-A-pt-A-Tha-A-Bm Either way, destiny still arrivesLet me show you how to scratch it!-pt-ha-Tugh-ha Bm-Tha-A-pt-et-The-Bea-et-The-Ba-A-pt-A-Tha-A Bm-Tha-A-pt-et-The-PRRRSK-kt-Bea-pt-Ha-tugh-Ha Bm-Tha-A-pt-et-The-Bea-et-The-Ba-A-pt-A-Tha-A-Bm Either way, destiny still arrivesLet me show you how to scratch it!-pt-ha-Tugh-ha Bm-Tha-A-pt-et-The-Bea-et-The-Ba-A-pt-A-Tha-A Bm-Tha-A-pt-et-The-PRRRSK-kt-Bea-pt-Ha-tugh-Ha Bm-Tha-A-pt-et-The-Bea-et-The-Ba-A-pt-A-Tha-A-Bm Either way, destiny still arrivesLet me show you how to scratch it!-pt-ha-Tugh-ha Bm-Tha-A-pt-et-The-Bea-et-The-Ba-A-pt-A-Tha-A Bm-Tha-A-pt-et-The-PRRRSK-kt-Bea-pt-Ha-tugh-Ha Bm-Tha-A-pt-et-The-Bea-et-The-Ba-A-pt-A-Tha-A-Bm Either way, destiny still arrivesLet me show you how to scratch it!-pt-ha-Tugh-ha Bm-Tha-A-pt-et-The-Bea-et-The-Ba-A-pt-A-Tha-A Bm-Tha-A-pt-et-The-PRRRSK-kt-Bea-pt-Ha-tugh-Ha Bm-Tha-A-pt-et-The-Bea-et-The-Ba-A-pt-A-Tha-A-Bm Either way, destiny still arrivesLet me show you how to scratch it!-pt-ha-Tugh-ha Bm-Tha-A-pt-et-The-Bea-et-The-Ba-A-pt-A-Tha-A Bm-Tha-A-pt-et-The-PRRRSK-kt-Bea-pt-Ha-tugh-Ha Bm-Tha-A-pt-et-The-Bea-et-The-Ba-A-pt-A-Tha-A-Bm Either way, destiny still arrivesLet me show you how to scratch it!-pt-ha-Tugh-ha Bm-Tha-A-pt-et-The-Bea-et-The-Ba-A-pt-A-Tha-A Bm-Tha-A-pt-et-The-PRRRSK-kt-Bea-pt-Ha-tugh-Ha Bm-Tha-A-pt-et-The-Bea-et-The-Ba-A-pt-A-Tha-A-Bm Either way, destiny still arrivesLet me show you how to scratch it!-pt-ha-Tugh-ha Bm-Tha-A-pt-et-The-Bea-et-The-Ba-A-pt-A-Tha-A Bm-Tha-A-pt-et-The-PRRRSK-kt-Bea-pt-Ha-tugh-Ha Bm-Tha-A-pt-et-The-Bea-et-The-Ba-A-pt-A-Tha-A-Bm Either way, destiny still arrivesLet me show you how to scratch it!-pt-ha-Tugh-ha Bm-Tha-A-pt-et-The-Bea-et-The-Ba-A-pt-A-Tha-A Bm-Tha-A-pt-et-The-PRRRSK-kt-Bea-pt-Ha-tugh-Ha Bm-Tha-A-pt-et-The-Bea-et-The-Ba-A-pt-A-Tha-A-Bm Either way, destiny still arrivesLet me show you how to scratch it!-pt-ha-Tugh-ha Bm-Tha-A-pt-et-The-Bea-et-The-Ba-A-pt-A-Tha-A Bm-Tha-A-pt-et-The-PRRRSK-kt-Bea-pt-Ha-tugh-Ha Bm-Tha-A-pt-et-The-Bea-et-The-Ba-A-pt-A-Tha-A-Bm Either way, destiny still arrivesLet me show you how to scratch it!-pt-ha-Tugh-ha Bm-Tha-A-pt-et-The-Bea-et-The-Ba-A-pt-A-Tha-A Bm-Tha-A-pt-et-The-PRRRSK-kt-Bea-pt-Ha-tugh-Ha Bm-Tha-A-pt-et-The-Bea-et-The-Ba-A-pt-A-Tha-A-Bm Either way, destiny still arrivesLet me show you how to scratch it!-pt-ha-Tugh-ha Bm-Tha-A-pt-et-The-Bea-et-The-Ba-A-pt-A-Tha-A Bm-Tha-A-pt-et-The-PRRRSK-kt-Bea-pt-Ha-tugh-Ha Bm-Tha-A-pt-et-The-Bea-et-The-Ba-A-pt-A-Tha-A-Bm Either way, destiny still arrivesLet me show you how to scratch it!-pt-ha-Tugh-ha Bm-Tha-A-pt-et-The-Bea-et-The-Ba-A-pt-A-Tha-A Bm-Tha-A-pt-et-The-PRRRSK-kt-Bea-pt-Ha-tugh-Ha Bm-Tha-A-pt-et-The-Bea-et-The-Ba-A-pt-A-Tha-A-Bm Either way, destiny still arrivesLet me show you how to scratch it!-pt-ha-Tugh-ha Bm-Tha-A-pt-et-The-Bea-et-The-Ba-A-pt-A-Tha-A Bm-Tha-A-pt-et-The-PRRRSK-kt-Bea-pt-Ha-tugh-Ha Bm-Tha-A-pt-et-The-Bea-et-The-Ba-A-pt-A-Tha-A-Bm Either way, destiny still arrives', '2021-11-14 16:32:04', 1),
(65, 'janx', 'hhh', '2021-11-14 16:34:19', 3),
(66, 'Squared', 'Your mother left you.', '2021-11-14 16:34:35', 1),
(67, 'janx', 'literally twitter', '2021-11-14 16:35:36', 3),
(68, 'sudoapt', 'can wai fo scored clien 2015!!!', '2021-11-14 16:36:28', 6),
(69, 'Squared', 'I\'m going to say the fucking N Word and you cannot do anything about it you retards.', '2021-11-14 16:41:04', 1),
(70, 'janx', 'i have access to database so i can delete it pussy', '2021-11-14 16:39:37', 3),
(71, 'janx', 'lmbaooooooooo omfg duck you 1u!!!', '2021-11-14 16:40:45', 3),
(72, 'janx', 'hshdtt', '2021-11-14 16:41:47', 3),
(73, 'janx', 'its 4:46 PM ', '2021-11-14 16:43:40', 3),
(74, 'gamingcat1254', 'im eating pancakes', '2021-11-14 16:45:55', 23),
(75, 'Squared', 'Nigento', '2021-11-14 16:47:25', 1),
(76, 'Squared', 'Shit', '2021-11-14 16:48:41', 1),
(77, 'Squared', 'Guys the N Word is allowed on this site as I own this site, go crazy.', '2021-11-14 16:50:07', 1),
(78, 'janx', 'comma, period.', '2021-11-14 16:50:49', 3),
(79, 'Squared', 'Guys the N word is allowed on this site as I own this site so go crazy', '2021-11-14 16:51:39', 1),
(80, 'janx', 'Guys the N Word is allowed on this site as I own this site, go crazy........', '2021-11-14 16:52:00', 3),
(81, 'Squared', 'Fuck', '2021-11-14 16:53:00', 1),
(82, 'Squared', 'Sgit', '2021-11-14 16:53:03', 1),
(83, 'Squared', 'Nigger', '2021-11-14 16:53:06', 1),
(84, 'Squared', 'Ur mom', '2021-11-14 16:53:10', 1),
(85, 'Squared', 'a', '2021-11-14 16:55:19', 1),
(86, 'Squared', 'Your mother left you guys.', '2021-11-14 16:55:42', 1),
(87, 'Squared', '', '2021-11-14 16:55:57', 1),
(88, 'janx', 'k', '2021-11-14 16:56:18', 3),
(89, 'Squared', 'ur MOTHER LEF TOY UNIGGER', '2021-11-14 16:56:45', 1),
(90, 'Squared', 'I was given an N Word pass, so I am allowed to say the n word.', '2021-11-14 16:57:12', 1),
(91, 'Squared', 'It was given by Obama', '2021-11-14 16:57:23', 1),
(92, 'Snoopydogg', 'sumn', '2021-11-14 17:09:22', 14),
(93, 'gamingcat1254', 'im gaming', '2021-11-14 17:11:34', 23),
(94, 'Squared', 'gamingcat1254 is really gaming', '2021-11-14 17:17:16', 1),
(95, 'Humanoider', 'hello noobs!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!', '2021-11-14 17:20:00', 24),
(96, 'Squared', 'hello nigger', '2021-11-14 17:20:15', 1),
(97, 'krypto', 'Wassup my nigguh. Do you have the shits? You know what im talkn bout. The Weed. Ye 2 grams. How much was it again? Aight aight i gotchu.', '2021-11-14 17:23:40', 10),
(98, 'Squared', 'will do a poll at 30 registered users', '2021-11-14 17:26:25', 1),
(99, 'crispy', 'hi gays and weirdos xDDDDDDDD', '2021-11-14 17:32:26', 25),
(100, 'Squared', 'crispy ur gay', '2021-11-14 17:35:58', 1),
(101, 'Squared', 'the feed is the forums for now', '2021-11-14 17:39:46', 1),
(102, 'crispy', 'i sure am also HUMANOIDER IF U SEE THIS UR MOM FAT', '2021-11-14 17:42:39', 25),
(103, 'krypto', 'Can You shut the fuck up?', '2021-11-14 17:46:01', 10),
(104, 'Snoopydogg', 'The person below me', '2021-11-14 17:48:35', 14),
(105, 'doc', 'hello world', '2021-11-14 17:50:37', 21),
(106, 'krypto', 'Hello world', '2021-11-14 17:53:12', 10),
(107, 'brick', 'feelin bricky', '2021-11-14 17:55:20', 18),
(108, 'NeX', 'nerd', '2021-11-14 17:55:28', 5),
(109, '', '', '2021-11-14 17:55:29', 0),
(110, 'janx', 'sex', '2021-11-14 17:57:37', 3),
(111, 'crispy', ' ', '2021-11-14 18:04:45', 25),
(112, 'krypto', 'Anybody down to fuck? Anal?', '2021-11-14 18:07:00', 10),
(113, 'doc', 'first person to chat from a mac', '2021-11-14 18:35:21', 21),
(114, 'crispy', 'doinurmom', '2021-11-14 19:12:34', 25),
(115, 'CircleLoop', 'suckondeeznuts', '2021-11-14 19:12:42', 26),
(116, 'gamingcat1254', 'llamas', '2021-11-14 19:13:04', 23),
(117, 'NeX', 'you nerds', '2021-11-14 19:14:56', 5),
(118, 'crispy', 'my password is pass0123 xD', '2021-11-14 19:20:40', 25),
(119, 'janx', '&#92;', '2021-11-14 19:23:42', 3),
(120, 'krypto', 'jolm<yxiok90alswDK;JFYLDSIPXCOVL?LVÃœ*SA', '2021-11-14 19:23:53', 10),
(121, 'crispy', 'awesome&#92;', '2021-11-14 19:24:53', 25),
(122, 'krypto', 'Ã¶Ã¶Ã¶Ã¶Ã¶Ã¶Ã¶Ã¶Ã¶Ã¶Ã¶Ã¶Ã¶Ã¶Ã¶Ã¶Ã¶Ã¶Ã¶', '2021-11-14 19:28:18', 10),
(123, 'krypto', '(âŸ¨Ð°âŸ©, âŸ¨ÐµâŸ©, âŸ¨Ñ‘âŸ©, âŸ¨Ð¸âŸ©, âŸ¨Ð¾âŸ©, âŸ¨ÑƒâŸ©, âŸ¨Ñ‹âŸ©, âŸ¨ÑâŸ©, âŸ¨ÑŽâŸ©, âŸ¨ÑâŸ©)', '2021-11-14 19:29:35', 10),
(124, 'CircleLoop', 'kozow.com', '2021-11-14 19:30:05', 26),
(125, 'sudoapt', 'communist', '2021-11-14 19:32:30', 6),
(126, 'Squared', 'moment', '2021-11-14 19:43:13', 1),
(127, 'sudoapt', 'when the text logo changed back to roblos ðŸ˜³', '2021-11-14 20:11:20', 6),
(128, 'janx', 'logo fixed gay femboy', '2021-11-14 20:14:54', 3),
(129, 'Squared', 'ok fixed you nerds', '2021-11-14 20:14:57', 1),
(130, 'krypto', 'gfrstdÃ¶.,svel5,4trlfvferdtÃ¤-d#_Ã„&apos;TFS*Ã„Ã–SRCVEÃ„', '2021-11-14 20:18:12', 10),
(131, 'Squared', '<img source=\"https://static.wikia.nocookie.net/roblox/images/a/a5/Shaggy.png\"></img>', '2021-11-14 20:20:53', 1),
(132, 'CircleLoop', 'squared needs to add a super moderator rank', '2021-11-14 20:30:32', 26),
(133, 'CircleLoop', 'and add it to me :trol:', '2021-11-14 20:33:36', 26),
(134, 'Squared', 'no', '2021-11-14 20:34:07', 1),
(135, 'brick', 'feelin bricky', '2021-11-14 20:34:55', 18),
(136, 'Squared', 'feelin squarey', '2021-11-14 20:35:54', 1),
(137, 'CircleLoop', 'feeling not squarey because they no add it', '2021-11-14 20:36:42', 26),
(138, 'Squared', 'shut up', '2021-11-14 20:37:40', 1),
(139, 'CircleLoop', 'shut up mrdoombringer', '2021-11-14 20:41:09', 26),
(140, 'janx', 'mrcockbringer ', '2021-11-14 20:43:06', 3),
(141, 'CircleLoop', 'MrdoomBringer resigned from his administrative role on Roblox on September 14, 2014', '2021-11-14 20:43:22', 26),
(142, 'janx', 'but now is working in roblox (2019) fat retard!!!!!!!!!!!!! #liberal owned with facts', '2021-11-14 20:44:27', 3),
(143, 'CircleLoop', 'janx change your name to janxisgod', '2021-11-14 20:45:36', 26),
(144, 'janx', 'suck my cock first #fat liberal owned with facts', '2021-11-14 20:50:19', 3),
(145, 'CircleLoop', '127.0.0.1', '2021-11-14 20:53:34', 26),
(146, 'CircleLoop', 'janx needs to add mod role bcoz fish', '2021-11-14 20:54:34', 26),
(147, 'janx', 'i&apos;d kms quicker than i&apos;d make a mod role', '2021-11-14 20:55:54', 3),
(148, 'CircleLoop', 'do it or 127.0.0.1', '2021-11-14 21:00:57', 26),
(149, 'sudoapt', 'can&apos;t wait for the membership name', '2021-11-14 21:51:27', 6),
(150, 'krypto', 'FCU K SHIT SHIT SHI TUFKC FUCK FUCK FUCK SHTI SHITSHIT SHIT!!!! FUCKFUCUUUUUUUUUUUUUUUUCJK^!!!', '2021-11-14 21:55:10', 10),
(151, 'Squared', '<a href=\"https://squared.cf/feedlist\">page with more messages</a>', '2021-11-14 21:55:36', 1),
(152, 'HS14', 'penus', '2021-11-14 21:55:56', 15),
(153, 'Squared', 'ur mom', '2021-11-14 21:57:10', 1),
(154, 'Squared', '<video width=\"320\" height=\"240\" controls><source src=\"Video06.mp4\" type=\"video/mp4\"></video>', '2021-11-14 21:59:37', 1),
(155, 'Squared', 'yeah i can post video what are you gonna do about it', '2021-11-14 22:00:27', 1),
(156, 'krypto', 'LOL HE POSTED MY BVIDEO IM FAMOUS!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!', '2021-11-14 22:01:07', 10),
(157, 'Squared', '<audio autoplay loop><source src=\"https://c3.rbxcdn.com/af15d968d5307b4f3c37b31724b5539d\"></audio>', '2021-11-14 22:04:29', 1),
(158, 'Squared', 'LOL I CAN DO MUSIC', '2021-11-14 22:04:36', 1),
(159, 'Squared', '<img style=\"-webkit-user-select: none;margin: auto;background-color: hsl(0, 0%, 90%);transition: background-color 300ms;\" src=\"https://web.archive.org/web/20140909004433im_/http://t7.rbxcdn.com/995ef0f7041f5ad6081ffc62a880f892\">', '2021-11-14 22:06:15', 1),
(160, 'Squared', 'dominus', '2021-11-14 22:09:48', 1),
(161, 'sudoapt', 'when bitblaster mule', '2021-11-14 22:10:42', 6),
(162, 'krypto', 'DAYUIMMMMMMMMMMM', '2021-11-14 22:11:24', 10),
(163, 'Squared', '<iframe width=\"480\" height=\"360\" src=\"https://www.youtube.com/embed/_ze26M_Fm6g\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2021-11-14 22:12:41', 1),
(164, 'CircleLoop', 'i think squared sucks dog water bullshit mrhatebringer', '2021-11-14 22:13:54', 26),
(165, 'CircleLoop', '<script>alert(&apos;Hello?&apos;)</script>', '2021-11-14 22:15:48', 26),
(166, 'Squared', 'calvy is copying our site year!!!!!!!!!!', '2021-11-14 22:17:26', 1),
(167, 'krypto', 'MAKE A CLIEANT O\"!!!!!!!!!!!!!!!!!!!!!', '2021-11-14 22:18:34', 10),
(168, 'Squared', 'ur mom', '2021-11-14 22:19:50', 1),
(169, 'Squared', '<php header(\"Location: 403\"); ?>', '2021-11-14 22:22:32', 1),
(170, 'CircleLoop', 'MAKE A CLIENT OR I WILL QUIT SQUARED AND DISLIKE ALL ANNOUNCEMENTS ', '2021-11-14 22:24:19', 26),
(171, 'Squared', 'CIRCLELOOP WHAT IS YOUR DISCORD', '2021-11-14 22:24:59', 1),
(172, 'Squared', '<php include \"groups.php\"; ?>', '2021-11-14 22:26:00', 1),
(173, 'CircleLoop', 'someone2212#2969', '2021-11-14 22:30:56', 26),
(174, 'CircleLoop', 'watcha gonna do huh', '2021-11-14 22:33:06', 26),
(175, 'Mati3D', 'Hello', '2021-11-14 22:33:41', 27),
(176, 'CircleLoop', 'fuck me', '2021-11-14 22:46:02', 26),
(177, 'CircleLoop', 'im a dumbass', '2021-11-14 22:49:00', 26),
(178, 'CircleLoop', 'your mom', '2021-11-14 22:51:37', 26),
(179, 'Squared', 'there are almost 200 messages for the feed', '2021-11-14 22:56:57', 1),
(180, 'Squared', 'ur mom', '2021-11-14 23:05:42', 1),
(181, 'Snoopydogg', 'Snoop', '2021-11-14 23:18:06', 14),
(182, 'sudoapt', 'can wait for scored clien!!!', '2021-11-14 23:43:15', 6),
(183, 'Squared', 'Let me show you how to scratch it!-pt-ha-Tugh-ha Bm-Tha-A-pt-et-The-Bea-et-The-Ba-A-pt-A-Tha-A Bm-Tha-A-pt-et-The-PRRRSK-kt-Bea-pt-Ha-tugh-Ha Bm-Tha-A-pt-et-The-Bea-et-The-Ba-A-pt-A-Tha-A-Bm Either way, destiny still arrives', '2021-11-15 00:09:04', 1),
(184, 'Squared', '<img width=\"25\" length=\"25\" src=\"https://images.emojiterra.com/twitter/512px/1f52b.png\">', '2021-11-15 00:17:47', 1),
(185, 'Mati3D', 'hello', '2021-11-15 00:19:45', 26),
(186, 'Squared', '<img width=\"50\" length=\"50\" src=\"https://squared.cf/img/logo.svg\">', '2021-11-15 00:20:48', 1),
(187, 'Snoopydogg', 'roblos copy!1111', '2021-11-15 00:20:53', 14),
(188, 'Squared', '<img width=\"50\" length=\"50\" src=\"https://squared.cf/img/bg-main_menu_hover.png\">', '2021-11-15 00:21:44', 1),
(189, 'Snoopydogg', '<img width=\"25\" length=\"25\" src=\"https://tr.rbxcdn.com/e82597de9081640c5caeedd66156b963/150/150/AvatarHeadshot/Png\">', '2021-11-15 00:24:52', 14),
(190, 'Squared', '`<img width=\"25\" length=\"25\" src=\"https://squared.cf/img/Online.png\">`', '2021-11-15 00:25:13', 1),
(191, 'Squared', '<img width=\"10\" length=\"10\" src=\"https://squared.cf/img/Online.png\">guys im online XDXDXD', '2021-11-15 00:25:34', 1),
(192, 'Squared', '<img width=\"100\" length=\"100\" src=\"https://squared.cf/img/d649b9c54a08dcfa76131d123e7d8acc.png\">', '2021-11-15 00:28:41', 1),
(193, 'Snoopydogg', '<img width=\"25\" length=\"25\" src=\"https://cdn.upload.systems/uploads/cvLoLw4Y.png\">', '2021-11-15 00:29:05', 14),
(194, 'Squared', '<img width=\"150\" length=\"150\" src=\"https://cdn.upload.systems/uploads/sZWmFJNy.png\">', '2021-11-15 00:30:38', 1),
(195, 'Snoopydogg', '<img width=\"55\" length=\"55\" src=\"https://images.emojiterra.com/twitter/512px/1f52b.png\">', '2021-11-15 00:31:13', 14),
(196, 'Snoopydogg', '<img width=\"60\" length=\"60\" src=\"https://tr.rbxcdn.com/367d151102307f108563807c17cf2b40/352/352/Avatar/Png\">', '2021-11-15 00:33:02', 14),
(197, 'Squared', '<center><img width=\"128\" length=\"128\" src=\"https://media.discordapp.net/attachments/631660766239653912/909585991742922772/v8nobg.png\"></center>', '2021-11-15 00:34:34', 1),
(198, 'acroarson', 'watch me crank that soulja boy', '2021-11-15 00:34:44', 27),
(199, 'Squared', '199', '2021-11-15 00:39:51', 1),
(200, 'Squared', '200', '2021-11-15 00:39:54', 1),
(201, 'ezzadbm3', 'Hi People', '2021-11-15 00:39:56', 28),
(202, 'Squared', 'yayy we hit 200 feed messages', '2021-11-15 00:40:03', 1),
(203, 'Mati3D', 'aaaa', '2021-11-15 00:50:07', 26),
(204, 'Mati3D', '204', '2021-11-15 00:55:39', 26),
(205, 'Squared', '205', '2021-11-15 01:01:45', 1),
(206, 'Snoopydogg', '12345678900987654321', '2021-11-15 01:29:27', 14),
(207, 'Squared', '34', '2021-11-15 01:29:37', 1),
(208, 'Squared', 'added secret areas with a completely different database for the feeds, good luck :)', '2021-11-15 01:36:50', 1),
(209, 'gamingcat1254', 'hi', '2021-11-15 01:57:46', 23),
(210, 'keypluss', 'hi', '2021-11-15 02:04:10', 29),
(211, '', '', '2021-11-15 02:04:13', 0),
(212, 'Squared', ' ', '2021-11-15 02:09:10', 1),
(213, 'Squared', '', '2021-11-15 02:13:36', 1),
(214, 'Squared', '', '2021-11-15 02:13:36', 1),
(215, 'Squared', 'we hit 30 users noice', '2021-11-15 02:18:34', 1),
(216, 'Squared', '`<img id=\"loadingImage\" class=\"status-update-image\" src=\"https://images.rbxcdn.com/ec4e85b0c4396cf753a06fade0a8d8af.gif\">`', '2021-11-15 02:22:48', 1),
(217, 'username', '<img src=\"https://cdn.upload.systems/uploads/cvLoLw4Y.png\">', '2021-11-15 03:28:33', 30),
(218, 'Squared', 'ur mother', '2021-11-15 06:18:40', 1),
(219, 'philosophy', 'a', '2021-11-15 07:39:59', 2),
(220, 'crispy', 'ass', '2021-11-15 14:33:15', 25),
(221, 'aaa', 'fuck you!', '2021-11-15 14:58:10', 32),
(222, 'Squared', 'n word alowed', '2021-11-15 15:52:49', 1),
(223, 'Squared', 'janx told me that uhh', '2021-11-15 15:56:00', 1),
(224, 'Squared', '<img id=\"loadingImage\" class=\"status-update-image\" alt=\"Sharing...\" src=\"https://images.rbxcdn.com/ec4e85b0c4396cf753a06fade0a8d8af.gif\">', '2021-11-15 15:56:10', 1),
(225, 'Squared', '<b>your mother in bold</b>', '2021-11-15 17:17:07', 1),
(226, 'Squared', '</b>', '2021-11-15 17:17:33', 1),
(227, 'Squared', '<b>khljgsfdkjsdhlfa', '2021-11-15 17:17:38', 1),
(228, 'Squared', '<video controls autoplay height=400 length=400 src=\"https://cdn.upload.systems/uploads/wHbl3bWY.mp4\"></video>', '2021-11-15 17:28:25', 1),
(229, 'crispy', '\"', '2021-11-15 17:57:46', 25),
(230, 'crispy', 'https://images.rbxcdn.com/ec4e85b0c4396cf753a06fade0a8d8af.gif', '2021-11-15 18:03:03', 25),
(231, 'janx', 'h', '1989-11-02 18:03:48', 3),
(232, 'crispy', '&lt;img id=\"loadingImage\" class=\"status-update-image\" alt=\"Sharing...\" src=\"https://images.rbxcdn.com/ec4e85b0c4396cf753a06fade0a8d8af.gif\"&gt;', '2021-11-15 18:09:06', 25),
(233, 'janx', '<a href=\"https://help.minecraft.net/hc/en-us/articles/4404107176077\">Consult a therapist... NOW!</a> (this message was sponsored by CP Inc.)', '2021-11-15 18:09:23', 3),
(234, 'NeX', 'phil = nerd 1000', '2021-11-15 18:11:21', 5),
(235, 'Squared', 'shaddap', '2021-11-15 18:12:57', 1),
(236, 'janx', 'kys fat liberal', '2021-11-15 18:13:46', 3),
(237, 'krypto', 'JewTerminator3500', '2021-11-15 18:14:47', 10),
(238, 'janx', '<img src=\"https://cdn.discordapp.com/attachments/866741684855636001/909854447667138610/unknown.png\"/>', '2021-11-15 18:15:00', 3),
(239, 'janx', '<img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/d/d5/Coat_of_arms_of_Morocco.svg/100px-Coat_of_arms_of_Morocco.svg.png\"/> lib<h1>er</h1>a<b>lM<???', '2021-11-15 18:17:18', 3),
(240, 'janx', 'phil you mofo!!!!1 this doesnt break feed its just google<div class=\"Feedtext\">\"<div class=\"lr_container yc7KLc mBNN3d\"><div jsslot=\"\"><div class=\"vkc_np kkww4d\" data-hveid=\"CAYQAg\"><div class=\"xxjPif\"><div class=\"gJBeNe vbr5i\" aria-level=\"2\" role=\"headi', '2021-11-15 18:35:18', 3),
(241, 'krypto', 'https://cdn.discordapp.com/attachments/896145914916393002/908032471155753051/unknown.png', '2021-11-15 18:39:23', 10),
(242, 'crispy', '&lt;img src=\"https://cdn.discordapp.com/attachments/896145914916393002/908032471155753051/unknown.png\"&#92;&gt;', '2021-11-15 18:58:11', 25),
(243, 'krypto', 'He Tried GG!!!!Q\"Â§Â§\"!', '2021-11-15 19:09:10', 10),
(244, 'NeX', 'penis', '2021-11-15 19:19:46', 5),
(245, 'Squared', 'the', '2021-11-15 19:41:07', 1),
(246, 'crispy', 'ASS', '2021-11-15 22:34:05', 25),
(247, 'sudoapt', 'trole!!!', '2021-11-15 23:47:47', 6),
(248, 'username', '<marquee>username</marquee>', '2021-11-16 01:05:26', 30),
(249, 'Squared', '<center><h1><b>your mom</b></h1></center>', '2021-11-16 01:06:02', 1),
(250, 'Squared', '<marquee><iframe frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"width=\"356\" height=\"200\" type=\"text/html\" src=\"https://www.youtube.com/embed/dQw4w9WgXcQ?autoplay=1&fs=0&iv_load_policy=3&showinfo=0&rel=0&cc_load_policy=0&start=0&end=0&vq=small&origin=http://youtubeembedcode.com\"><div><small><a href=\"https://youtubeembedcode.com/nl/\">youtubeembedcode nl</a></small></div><div><small><a href=\"https://kasinoutanspelpaus.nu/\">kasinoutanspelpaus.nu</a></small></div></iframe></marquee>', '2021-11-16 01:08:55', 1),
(251, 'Squared', '<b>he</b>', '2021-11-16 01:38:36', 1),
(252, 'Squared', '', '2021-11-16 02:00:07', 1),
(253, 'Snoopydogg', 'fucking rickroll', '2021-11-16 02:00:45', 14),
(254, 'sudoapt', 'ah', '2021-11-16 03:33:03', 6),
(255, 'aaa', 'ding dong', '2021-11-16 14:05:23', 32),
(256, 'NeX', 'i want to shit myself', '2021-11-16 16:54:33', 5),
(257, 'Squared', 'w', '2021-11-16 17:48:38', 1),
(258, 'crispy', 'i can shit yourself for you nex', '2021-11-16 18:18:38', 25),
(259, 'Squared', 'im dying inside slowly because of school', '2021-11-16 18:30:36', 1),
(260, 'Squared', '<marquee scrollamount=\"8\">help me</marquee>', '2021-11-16 18:33:52', 1),
(261, 'Squared', 'dd', '2021-11-16 19:01:04', 1),
(262, 'philosophy', 'im going to invite someone to squared dont harrass them', '2021-11-16 19:53:20', 2),
(263, 'Katrina', 'Hopefully this ROBLOX revival doesn&apos;t end up like Calvy', '2021-11-16 20:29:47', 4),
(264, 'Squared', 'it wont i promise', '2021-11-16 20:32:20', 1),
(265, 'Squared', 'updated the feed to be more 2014-like', '2021-11-16 21:01:36', 1),
(266, 'Katrina', 'Nice.', '2021-11-16 21:01:44', 4),
(267, 'Katrina', 'Sucks that I&apos;m the only one online.', '2021-11-16 21:20:17', 4),
(268, 'Squared', 'katrina im going to let you be able to test 2012 and 2016', '2021-11-16 21:37:10', 1),
(269, 'Katrina', 'Yay!', '2021-11-16 21:37:24', 4),
(270, 'Katrina', 'I&apos;m so ready to go home', '2021-11-16 21:39:52', 4),
(271, 'Squared', 'same', '2021-11-16 21:40:03', 1),
(272, 'Squared', 'ok i exist at home', '2021-11-16 22:53:43', 1),
(273, 'Nox', 'kataracks', '2021-11-16 23:52:57', 34),
(274, 'Cross', 'waiting for games page lmao', '2021-11-17 00:10:21', 16),
(275, 'Banned', 'testing ban system here im squared', '2021-11-17 00:20:20', 35),
(276, 'Squared', 'yay ban system works', '2021-11-17 00:28:24', 1),
(277, 'acroarson', 'hanate wakuso shiseo tadashite teriyaki suzuki honda civic is my irl name', '2021-11-17 00:41:04', 27),
(278, 'Squared', '<img source=\"https://cdn.discordapp.com/attachments/906895696525922348/910316616200376370/shit.png\"></img>', '2021-11-17 00:53:27', 1),
(279, 'Squared', '<img source=\"https://cdn.discordapp.com/attachments/906895696525922348/910316616200376370/shit.png\" width=\"200\" length=\"200></img>', '2021-11-17 00:53:44', 1),
(280, 'Squared', '<img src=\"https://cdn.discordapp.com/attachments/906895696525922348/910316616200376370/shit.png\" width=\"300\" length=\"300\"></img>', '2021-11-17 00:54:16', 1),
(281, 'Nigger', 'your all a bunch of niggers', '2021-11-17 01:57:08', 36),
(282, 'Squared', 'baned', '2021-11-17 01:58:12', 1),
(283, 'Squared', 'banned', '2021-11-17 01:58:16', 1),
(284, 'lol', 'Hello', '2021-11-17 02:01:48', 37),
(285, 'Cross', 'Hi cousin', '2021-11-17 02:08:33', 16),
(286, 'crispy', 'message sent from phone xD', '2021-11-17 02:45:02', 25),
(287, 'Squared', 'your join date is <?php echo $_SESSION[\'created_at\']; ?>', '2021-11-17 02:49:50', 1),
(288, 'Squared', 'get trolled it  doesnt show ur join date!!!!!!', '2021-11-17 02:53:08', 1),
(289, 'Squared', 'hhaha', '2021-11-17 02:53:20', 1),
(290, 'janx', '<?php echo $_SESSION[&apos;id&apos;]; ?> ', '2021-11-17 07:20:26', 3),
(291, 'ezzadbm3', 'I hate my life', '2021-11-17 07:38:32', 28),
(292, 'acroarson', 'i also hate my life', '2021-11-17 13:19:02', 27),
(293, 'crispy', 'i also hate my life', '2021-11-17 13:43:59', 25),
(294, 'Squared', 'im gonna use htaccess to make php pages have the extension of .aspx', '2021-11-17 15:33:38', 1),
(295, 'Squared', 'i mean .ashx', '2021-11-17 15:56:58', 1),
(296, 'Squared', 'nono it was aspx', '2021-11-17 16:17:08', 1),
(297, 'Squared', '<a href=\"https://squared.cf/Default.aspx\">https://squared.cf/Default.aspx</a>', '2021-11-17 16:17:57', 1),
(298, 'Squared', 'ae', '2021-11-17 17:25:13', 1),
(299, 'Squared', 'e', '2021-11-17 18:13:53', 1),
(300, 'Katrina', 'Got in trouble for talking to philosophy', '2021-11-17 19:48:50', 4),
(301, 'Katrina', 'This is why I hate my English teacher', '2021-11-17 19:49:24', 4),
(302, 'Squared', 'yeah our english teacher is an asshole', '2021-11-17 19:56:27', 1),
(303, 'krypto', 'big black nigger balls HD', '2021-11-17 22:05:10', 10),
(304, 'Squared', 'ur mother', '2021-11-18 03:47:12', 1),
(305, 'janx', 'who the fuck is katrina is that some whopre', '2021-11-18 08:56:55', 3),
(306, 'janx', 'omg i cant belief it&#92;', '2021-11-18 08:57:07', 3),
(307, 'janx', 'cock shit fuc cum cu mcu mcu js x hthuxgyhxfulghji sfuisvb uildf dhui dfoh os jpsrxbdn rjih sisj ushy7 dh tf fr rlg hsl o lsb h s oso oso  fj frtfks gus dkg hsdf', '2021-11-18 09:14:21', 3),
(308, 'crispy', 'thanks for sharing', '2021-11-18 11:24:20', 25),
(309, 'Squared', 'banning janx', '2021-11-18 12:37:09', 1),
(310, 'watcha27', 'HELLO!!!', '2021-11-18 12:43:22', 38),
(311, 'Katrina', 'Hi', '2021-11-18 14:02:51', 4),
(312, 'nya', 'nya', '2021-11-18 16:09:03', 33),
(313, 'NeX', '', '2021-11-18 19:44:18', 5),
(314, 'krypto', 'Bag alert, major bag alert (major)', '2021-11-18 20:49:52', 10),
(315, 'Katrina', 'What does that mean?', '2021-11-18 21:24:42', 4),
(316, 'Squared', 'embed update (yay)', '2021-11-18 23:52:05', 1),
(317, 'HS14', 'i like squared', '2021-11-19 00:19:49', 15),
(318, '', '&lt;img id=\"loadingImage\" class=\"status-update-image\" src=\"https://images.rbxcdn.com/ec4e85b0c4396cf753a06fade0a8d8af.gif\"&gt;', '2021-11-19 00:34:42', 0),
(319, 'gamingcat1254', 'wht it no work', '2021-11-19 00:34:54', 23),
(320, 'Squared', 'janx fixed code executing in the feed', '2021-11-19 00:35:16', 1),
(321, 'Squared', 'i can still use it though <br> <marquee>as you can see here</marquee>', '2021-11-19 00:35:35', 1),
(322, 'Squared', 'footer exists now', '2021-11-19 00:42:58', 1),
(323, 'Squared', 'ass', '2021-11-19 00:47:20', 1),
(324, 'brick', 'penis', '2021-11-19 00:56:14', 18),
(325, 'aaa', 'you should fuck yourself! NOW...', '2021-11-19 08:57:18', 32),
(326, 'crispy', 'bená´‰s', '2021-11-19 09:02:00', 25),
(327, 'Spoon', 'pog', '2021-11-19 14:31:03', 39),
(328, 'izzypizzy', ':troll:', '2021-11-19 14:31:34', 40),
(329, 'Spoon', 'thanks Ï€ážµážµážµ for key', '2021-11-19 14:37:41', 39),
(330, 'Squared', '<iframe frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"width=\"445\" height=\"250\" type=\"text/html\" src=\"https://www.youtube.com/embed/x-Po66rt8Iw?autoplay=1&fs=0&iv_load_policy=3&showinfo=0&rel=0&cc_load_policy=0&start=249&end=0&origin=http://youtubeembedcode.com\"><div><small><a href=\"https://youtubeembedcode.com/en\">youtubeembedcode.com/en/</a></small></div><div><small><a href=\"https://playfreeslots.org/\">https://playfreeslots.org/</a></small></div></iframe>', '2021-11-19 14:46:42', 1),
(331, 'Spoon', 'yo mama so stupid, she though twitter was social media.', '2021-11-19 14:57:33', 39),
(332, 'GodOfPwnage', 'yea thanks Ï€ážµážµážµ for key its epic xd', '2021-11-19 15:28:09', 41),
(333, 'Mati3D', '12312341231234', '2021-11-19 16:06:12', 26),
(334, 'Mati3D', 'social credit +15', '2021-11-19 16:07:12', 26),
(335, 'Squared', 'codex has 1000000000000000 social creidt', '2021-11-19 16:43:19', 1),
(336, 'Squared', 'road to 1000 feed messages', '2021-11-19 17:00:10', 1),
(337, 'janx', 'kys', '2021-11-19 17:01:51', 3),
(338, 'Mati3D', '338', '2021-11-19 17:05:21', 26),
(339, 'janx', 'reminder to kill yourself', '2021-11-19 17:35:41', 3),
(340, 'crispy', 'road to 1000 feed messages', '2021-11-19 17:47:36', 25),
(342, 'janx', 'check up with my cock ok i puill up', '2021-11-19 18:05:23', 3),
(343, 'Squared', 'e', '2021-11-19 18:07:07', 1),
(344, 'krypto', 'Newgen', '2021-11-19 18:10:18', 10),
(345, 'acroarson', 'ok newgen', '2021-11-19 19:17:13', 27),
(346, 'Squared', 's', '2021-11-19 19:19:36', 1),
(347, 'fat', 'sds', '2021-11-19 19:25:44', 44),
(348, 'GodOfPwnage', 'lol i was lucky number', '2021-11-19 21:20:16', 41),
(349, 'Squared', '<iframe frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"width=\"336.49\" height=\"253\" type=\"text/html\" src=\"https://www.youtube.com/embed/ZyTfWEXr3RA?autoplay=1&fs=0&iv_load_policy=3&showinfo=0&rel=0&cc_load_policy=0&start=62&end=0&origin=http://youtubeembedcode.com\"><div><small><a href=\"https://youtubeembedcode.com/en\">youtubeembedcode.com/en/</a></small></div><div><small><a href=\"https://youronlinecasino.org/\">youronlinecasino.org</a></small></div></iframe>', '2021-11-19 21:24:34', 1),
(350, 'Nigger', '<b>SHUT THE FUCK UP YOU \"NASTY BITCH\", I DON\'T KNOW HOW THE FUK YOU JUMP IN MY SITE. YOU LITTLE \"NASTY ASS NIGGA\", SHUT YO LIL BITCH ASS UP, YOU DIRTY BITCH, WHO THE FUCK IS THIS LONE HEAD-ASS JAW BREAKER LOOKIN ASS IN MISS MARRY, SHUT YO BITCH ASS UP YOU UGLY ASS NIGGA YOU DIRTY ASS SHIT BITCH. IMA GET TO FLAMING YO DIRTY ASS YOU GREASY \"CHEESE BURGER BODY YOU LIMP ASS NIGGA\", YOU FAT AS SHIT BITCH SHUT YO STU</b>', '2021-11-20 00:51:27', 36),
(351, 'Squared', 'yo tf ur banned it should redirect you to the banned page', '2021-11-20 00:53:24', 1),
(352, 'Spoon', 'doo doo', '2021-11-20 01:58:38', 39),
(353, 'janx', 'hell nvaaawh spun brother sa blhrnd fof vasris aihizgie medictini usa tu sdap alfbrgis ðŸ™ be the reael boip ðŸ˜© ðŸ˜‚<br/><img src=\"https://cdn.discordapp.com/attachments/903880813052039238/911560580668731482/jpeg.png\"/>', '2021-11-20 11:14:37', 3),
(354, 'janx', 'hell nvaaawh spun brother sa blhrnd fof vasris aihizgie medictini usa tu sdap alfbrgis ðŸ™ be the reael boip ðŸ˜© ðŸ˜‚<br/><img src=\"https://cdn.discordapp.com/attachments/903880813052039238/911560580668731482/jpeg.png\" width=\"100%\"/>', '2021-11-20 11:15:12', 3),
(355, 'janx', 'hell nvaaawh spun brother sa blhrnd fof vasris aihizgie medictini usa tu sdap alfbrgis :pray: be the reael boip :weary: :joy:<br/><img src=\"https://cdn.discordapp.com/attachments/903880813052039238/911560580668731482/jpeg.png\" width=\"100%\"/>', '2021-11-20 11:15:25', 3),
(356, 'janx', 'fuck you!!!!!!!!!!!! discord!!!!!!!!!!!!!!!!', '2021-11-20 11:16:01', 3),
(357, 'janx', 'fuck you!!!!!!!!!!!! discord!!!!!!!!!!!!!!!!', '2021-11-20 11:16:02', 3),
(358, 'janx', 'c', '2021-11-20 11:16:07', 3),
(359, 'janx', 'c', '2021-11-20 11:16:07', 3),
(360, 'janx', 'c', '2021-11-20 11:16:07', 3),
(361, 'janx', 'c', '2021-11-20 11:16:07', 3),
(362, 'janx', 'fuck my lag :weary: spunchbob be sucking me so i spam click that biutty', '2021-11-20 11:16:28', 3),
(363, 'janx', 'hell nvaaawh spun brother sa blhrnd fof vasris aihizgie medictini usa tu sdap alfbrgis :pray: be the reael boip :weary: :joy:<br/><img src=\"https://cdn.discordapp.com/attachments/903880813052039238/911560580668731482/jpeg.png\" width=\"100%\"/>', '2021-11-20 11:16:34', 3),
(364, 'Squared', '<video autoplay loop controls src=\"https://cdn.discordapp.com/attachments/760268870710853642/911775301174956042/gigi_dagostino_bla_bla_bla.mp4\"></video>', '2021-11-20 17:04:08', 1),
(365, 'janx', '', '2021-11-20 20:50:52', 3),
(366, 'janx', 'phil wtf', '2021-11-20 20:57:38', 3),
(367, 'krypto', 'Ð¶', '2021-11-20 21:07:24', 10),
(1000, 'janx', 'ohhh my god guys check it out guyssss<img src=\"https://upload.wikimedia.org/wikipedia/commons/1/1c/Three-body_Problem_Animation_with_COM.gif\"/>', '2021-11-19 18:03:00', 3);

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `name` longtext NOT NULL,
  `description` longtext NOT NULL,
  `madeby` bigint(20) NOT NULL,
  `serverreserved` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `name`, `description`, `madeby`, `serverreserved`) VALUES
(1, 'testgame1', 'phil you fucking idiot im testing launcher', 3, 'aaaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `invites`
--

CREATE TABLE `invites` (
  `id` int(11) NOT NULL,
  `code` varchar(30) NOT NULL,
  `used` varchar(4) NOT NULL,
  `inviter` int(11) NOT NULL,
  `creationdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invites`
--

INSERT INTO `invites` (`id`, `code`, `used`, `inviter`, `creationdate`) VALUES
(3, 'kJP4ndxliAXj59MtoaCg7peGHfqrZL', 'no', 1, '2021-11-16 10:49:24'),
(4, 'YyrK0jT8X2nzk4sOV9gbRv7fAGIipu', 'no', 1, '2021-11-16 10:49:26'),
(5, 'rDj6OeyPlNTChSfUqB5imMHFA97Ytk', 'no', 1, '2021-11-16 10:49:28'),
(7, '5eVdR9tA7wfOMaPxrWBSH4JhjuliXq', 'no', 1, '2021-11-16 18:52:45'),
(8, 'i0MxPnWZBuIAJLzUq6skYafCO7w39D', 'no', 1, '2021-11-16 18:52:45'),
(9, 'bvwHnQYjXOMTNVfrKdloeBZIRauhFx', 'no', 1, '2021-11-16 18:52:45'),
(10, 'gCrkq7eMv3IWmnRJ5z28Hhw6bjBUfa', 'no', 1, '2021-11-16 18:52:45'),
(12, 'wpvRdobkBOlLVhYG6PTIsqu39iCaN7', 'no', 1, '2021-11-16 18:52:49'),
(14, 'Qim3cFEfUgxZOLXkjCSueaHYA95W8v', 'no', 1, '2021-11-16 18:52:49'),
(15, 'MtVg8HrjUQymc6zd9GY1l4INSKRn2B', 'no', 1, '2021-11-16 18:52:49'),
(16, 'hrm8capRYJ0nwGNik4DVjX5fWs7KLI', 'no', 1, '2021-11-16 18:52:50'),
(18, 'Zr92SQdiCzmEARuhcf5JlPLtey3FnB', 'no', 1, '2021-11-16 18:52:50'),
(19, 'w4SO9i6zMYanPA1jHN2kdbrU87ml0R', 'no', 1, '2021-11-16 18:52:50'),
(20, 'Q2sRPyoZnBekifHmOaDJu7S6ch3bqj', 'no', 1, '2021-11-16 18:52:51');

-- --------------------------------------------------------

--
-- Table structure for table `kxp`
--

CREATE TABLE `kxp` (
  `id` int(11) NOT NULL,
  `user` text NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL,
  `madeby` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kxp`
--

INSERT INTO `kxp` (`id`, `user`, `content`, `date`, `madeby`) VALUES
(16, 'a', 'wtf', '2021-11-03 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `name` longtext NOT NULL,
  `content` longtext NOT NULL,
  `madeby` bigint(20) NOT NULL,
  `poster` varchar(30) NOT NULL DEFAULT 'Squared',
  `postdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `name`, `content`, `madeby`, `poster`, `postdate`) VALUES
(1, 'Welcome to Squared Alpha!', ' ', 1, 'Squared', '2021-11-09 13:34:00'),
(2, 'other info', 'we got news now! also check out <a href=\"https://squared.cf/user?id=1\">the squared account</a>, <a href=\"https://squared.cf/user?id=2\">the philosophy account</a>, <a href=\"https://squared.cf/user\">and your account</a>.', 1, 'Squared', '2021-11-09 13:35:00'),
(3, 'new stuff today', 'just added daily currency, a user list, and a couple more stuff', 1, 'Squared', '2021-11-10 11:29:00'),
(4, 'NEW WEBSITE THEME', 'today we have officially added the 2014 theme\r\nhope you enjoy it', 1, 'Squared', '2021-11-13 14:28:00'),
(5, 'made the view news page better', 'yuh i made it better\r\n\r\nthats pretty much it', 1, 'Squared', '2021-11-14 14:23:00'),
(6, 'some other things', 'added a 2014 catalog, item page, working feed, and some other stuff today', 1, 'Squared', '2021-11-14 14:27:00'),
(7, 'update bout me', 'school has been slowing me down a lot lately so yeah', 1, 'Squared', '2021-11-16 11:48:00'),
(8, '2 years', '2 years', 1, 'Squared', '2021-11-18 07:17:00'),
(9, 'embeds update (haha finobe embeds go brr)', '<img src=\"https://cdn.upload.systems/uploads/0qonE6To.png\" alt=\"image\" style=\"width=100; height=100\">', 1, 'Squared', '2021-11-18 16:45:00');

-- --------------------------------------------------------

--
-- Table structure for table `ownedassets`
--

CREATE TABLE `ownedassets` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `assettype` longtext NOT NULL,
  `assetid` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pm`
--

CREATE TABLE `pm` (
  `id` int(11) NOT NULL,
  `id2` int(11) NOT NULL,
  `title` text NOT NULL,
  `user1` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user2` text NOT NULL,
  `message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user1read` varchar(3) NOT NULL DEFAULT 'no',
  `user2read` varchar(3) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pm`
--

INSERT INTO `pm` (`id`, `id2`, `title`, `user1`, `user2`, `message`, `timestamp`, `user1read`, `user2read`) VALUES
(1, 1, 'hjk', '0000-00-00 00:00:00', '1', 's', '0000-00-00 00:00:00', 'no', 'yes'),
(2, 1, 'aea', '0000-00-00 00:00:00', '1', 'yo mama', '0000-00-00 00:00:00', 'yes', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `secretchat`
--

CREATE TABLE `secretchat` (
  `id` int(11) NOT NULL,
  `user` text NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL,
  `madeby` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `secretchat`
--

INSERT INTO `secretchat` (`id`, `user`, `content`, `date`, `madeby`) VALUES
(1, 'Squared', 'test', '2021-11-14 19:13:58', 1),
(2, 'sudoapt', 'if this becomes public i swear', '2021-11-14 19:14:30', 6),
(3, 'Snoopydogg', 'hi', '2021-11-14 19:14:31', 14),
(4, 'Snoopydogg', 'is this doxbin?', '2021-11-14 19:14:43', 14),
(5, 'Squared', 'a', '2021-11-14 19:15:15', 1),
(6, 'Snoopydogg', '31231.312313.12321', '2021-11-14 19:19:37', 14),
(7, 'Snoopydogg', '31231.312313.12321', '2021-11-14 19:19:38', 14),
(8, 'Snoopydogg', 'whoops spam', '2021-11-14 19:19:51', 14),
(9, 'Squared', '12', '2021-11-14 19:20:43', 1),
(10, 'Squared', '12213321', '2021-11-14 19:20:43', 1),
(11, 'Squared', '12213321132', '2021-11-14 19:20:43', 1),
(12, 'Squared', '12213321132321', '2021-11-14 19:20:44', 1),
(13, 'Squared', '12213321132321321', '2021-11-14 19:20:44', 1),
(14, 'Squared', '12213321132321321213', '2021-11-14 19:20:44', 1),
(15, 'Squared', '12213321132321321213321', '2021-11-14 19:20:44', 1),
(16, 'Squared', '12213321132321321213321321', '2021-11-14 19:20:44', 1),
(17, 'Squared', '12213321132321321213321321213', '2021-11-14 19:20:44', 1),
(18, 'Squared', '12213321132321321213321321213213', '2021-11-14 19:20:45', 1),
(19, 'Squared', '12213321132321321213321321213213321', '2021-11-14 19:20:45', 1),
(20, 'Squared', 'a', '2021-11-14 19:21:52', 1),
(21, 'Squared', 'a', '2021-11-14 19:22:01', 1),
(22, 'Squared', 'a', '2021-11-14 19:22:20', 1),
(23, 'Squared', 'a', '2021-11-14 19:31:07', 1),
(24, 'Squared', 'every weekday ill be chatting here from 6 AM to 2 PM CST', '2021-11-14 19:42:48', 1),
(25, 'Squared', 'i cant use discord from that time so this will be my discord for now', '2021-11-14 19:43:00', 1),
(26, 'Squared', 'and its because of school', '2021-11-14 19:43:22', 1),
(27, 'Squared', 'gonna dox @everyone', '2021-11-14 19:59:39', 1),
(28, 'Squared', 'a', '2021-11-14 20:01:56', 1),
(29, 'gamingcat1254', 'a', '2021-11-14 20:02:07', 23),
(30, 'gamingcat1254', 'let me check his discord', '2021-11-14 20:02:45', 23),
(31, 'Squared', 'he changed his discord lo', '2021-11-14 20:04:27', 1),
(32, 'gamingcat1254', 'why cant i find it', '2021-11-14 20:06:47', 23),
(33, 'gamingcat1254', 'oh', '2021-11-14 20:06:53', 23),
(34, 'gamingcat1254', 'im looking at where he lives on google maps', '2021-11-14 20:09:59', 23),
(35, 'gamingcat1254', 'how the fuck did i end up in pakistan', '2021-11-14 20:12:29', 23),
(36, 'Squared', 'wtf', '2021-11-14 20:13:09', 1),
(37, 'Squared', 'ur mom', '2021-11-14 20:13:51', 1),
(38, 'Squared', 'we hit 30 users noice', '2021-11-14 20:18:29', 1),
(39, 'username', 'hello', '2021-11-14 20:18:37', 30),
(40, 'Squared', 'hi', '2021-11-14 20:19:07', 1),
(41, 'Squared', '<img id=\"loadingImage\" class=\"status-update-image\" alt=\"Sharing...\" src=\"https://images.rbxcdn.com/ec4e85b0c4396cf753a06fade0a8d8af.gif\">', '2021-11-14 20:21:01', 1),
(42, 'gamingcat1254', 'Squared \"hi\" November 14th 2021 at 8:19 PM | Feed Message ID 40 i am hacker', '2021-11-14 20:21:32', 23),
(43, 'Squared', 'no', '2021-11-14 20:22:45', 1),
(44, 'gamingcat1254', '<img id=\"loadingImage\" class=\"status-update-image\" src=\"https://images.rbxcdn.com/ec4e85b0c4396cf753a06fade0a8d8af.gif\">', '2021-11-14 20:23:03', 23),
(45, 'Squared', 'ur mom', '2021-11-14 20:24:00', 1),
(46, 'gamingcat1254', 'i am exploring iraq', '2021-11-14 20:26:35', 23),
(47, 'Squared', 'o no', '2021-11-14 20:29:34', 1),
(48, 'acroarson', 'next gaming', '2021-11-14 20:37:58', 27),
(49, 'gamingcat1254', 'dont worry guys i havent seen the terrorists yet', '2021-11-14 20:40:01', 23),
(50, 'gamingcat1254', 'no', '2021-11-14 20:40:28', 23),
(51, 'gamingcat1254', 'im leaving iraq', '2021-11-14 20:40:37', 23),
(52, 'Squared', 'ur mother', '2021-11-14 20:40:54', 1),
(53, 'gamingcat1254', 'im now in lebanon', '2021-11-14 20:41:15', 23),
(54, 'gamingcat1254', 'im gamign', '2021-11-14 20:41:49', 23),
(55, 'acroarson', 'ass', '2021-11-14 20:42:06', 27),
(56, 'Squared', '<video width=\"320\" height=\"240\" controls><source src=\"Video06.mp4\" type=\"video/mp4\"></video>', '2021-11-14 20:45:00', 1),
(57, 'gamingcat1254', 'can you guys sstop vaping so i stop getting ads for it', '2021-11-14 20:45:12', 23),
(58, 'Squared', '<video width=\"320\" height=\"200\" controls><source src=\"Video06.mp4\" type=\"video/mp4\"></video>', '2021-11-14 20:45:21', 1),
(59, 'Squared', 'ur mother', '2021-11-14 20:45:31', 1),
(60, 'Squared', '<div id=\"ErrorPage\"> <div class=\"divideTitleAndBackButtons\" style=\"margin:20px auto; height:100px; width:100%; border-top:1px solid #fff;\">&nbsp;</div> <img src=\"/img/exclamation2.png\"> <h1>Requested page not found</h1> <h3>You may have clicked an expired link or mistyped the address.</h3> <pre><span id=\"ctl00_cphRoblox_errorMsgLbl\"></span></pre> <div class=\"divideTitleAndBackButtons\">&nbsp;</div> <div class=\"CenterNavigationButtonsForFloat\"> <a class=\"GoToPreviousPageButton\" title=\"Go to Previous Page Button\" onclick=\"history.back();return false;\" href=\"#\"></a> <a class=\"ReturnHomeButton\" title=\"Return Home\" href=\"/\"></a> <div style=\"clear:both\"></div> </div> <div class=\"divideTitleAndBackButtons\" style=\"margin:20px auto; height:100px; width:100%; border-top:1px solid #fff;\">&nbsp;</div> </div>', '2021-11-14 20:46:17', 1),
(61, 'Squared', 'jebaited', '2021-11-14 20:47:03', 1),
(62, 'Squared', 'jebaited', '2021-11-14 20:47:03', 1),
(63, 'Squared', 'jebaited', '2021-11-14 20:47:04', 1),
(64, 'acroarson', 'https://www.youtube.com/watch?v=-lGFpyuuchg', '2021-11-14 20:47:46', 27),
(65, 'Squared', 'no', '2021-11-14 20:47:57', 1),
(66, 'acroarson', 'https://www.youtube.com/watch?v=Tzdw33eunGQ', '2021-11-14 20:48:02', 27),
(67, 'acroarson', '', '2021-11-14 20:48:09', 27),
(68, 'Squared', '', '2021-11-14 20:48:12', 1),
(69, 'Squared', '', '2021-11-14 20:48:18', 1),
(70, 'Squared', '<img id=\"loadingImage\" class=\"status-update-image\" alt=\"Sharing...\" src=\"https://images.rbxcdn.com/ec4e85b0c4396cf753a06fade0a8d8af.gif\"><br><img id=\"loadingImage\" class=\"status-update-image\" alt=\"Sharing...\" src=\"https://images.rbxcdn.com/ec4e85b0c4396c', '2021-11-14 20:49:12', 1),
(71, 'Squared', '<img id=\"loadingImage\" class=\"status-update-image\" alt=\"Sharing...\" src=\"https://images.rbxcdn.com/ec4e85b0c4396cf753a06fade0a8d8af.gif\"><br><img id=\"loadingImage\" class=\"status-update-image\" alt=\"Sharing...\" src=\"https://images.rbxcdn.com/ec4e85b0c4396cf753a06fade0a8d8af.gif\"><br><img id=\"loadingImage\" class=\"status-update-image\" alt=\"Sharing...\" src=\"https://images.rbxcdn.com/ec4e85b0c4396cf753a06fade0a8d8af.gif\"><br><img id=\"loadingImage\" class=\"status-update-image\" alt=\"Sharing...\" src=\"https://images.rbxcdn.com/ec4e85b0c4396cf753a06fade0a8d8af.gif\"><br>', '2021-11-14 20:49:24', 1),
(72, 'Squared', '<br><img id=\"loadingImage\" class=\"status-update-image\" alt=\"Sharing...\" src=\"https://images.rbxcdn.com/ec4e85b0c4396cf753a06fade0a8d8af.gif\"><br><img id=\"loadingImage\" class=\"status-update-image\" alt=\"Sharing...\" src=\"https://images.rbxcdn.com/ec4e85b0c4396cf753a06fade0a8d8af.gif\"><br><img id=\"loadingImage\" class=\"status-update-image\" alt=\"Sharing...\" src=\"https://images.rbxcdn.com/ec4e85b0c4396cf753a06fade0a8d8af.gif\"><br><img id=\"loadingImage\" class=\"status-update-image\" alt=\"Sharing...\" src=\"https://images.rbxcdn.com/ec4e85b0c4396cf753a06fade0a8d8af.gif\"><br><img id=\"loadingImage\" class=\"status-update-image\" alt=\"Sharing...\" src=\"https://images.rbxcdn.com/ec4e85b0c4396cf753a06fade0a8d8af.gif\"><br>', '2021-11-14 20:49:38', 1),
(73, 'gamingcat1254', 'am not ejbiated', '2021-11-14 20:49:47', 23),
(74, 'Squared', 'u are', '2021-11-14 20:50:04', 1),
(75, 'gamingcat1254', '<img id=\"loadingImage\" class=\"status-update-image\" src=\"https://images.rbxcdn.com/ec4e85b0c4396cf753a06fade0a8d8af.gif\">', '2021-11-14 20:50:10', 23),
(76, 'acroarson', 'acroarson', '2021-11-14 20:50:50', 27),
(77, 'Squared', 'Squared', '2021-11-14 20:50:57', 1),
(78, 'Squared', 'btw rate <img width=600 length=600 src=\"https://cdn.upload.systems/uploads/MqzOJ3Fn.png\">', '2021-11-14 20:51:59', 1),
(79, 'Squared', 'rate catalog', '2021-11-14 20:52:55', 1),
(80, 'gamingcat1254', 'shaggy is swag', '2021-11-14 20:52:56', 23),
(81, 'Squared', 'also whaddaya think of the site', '2021-11-14 20:54:04', 1),
(82, 'gamingcat1254', 'good website', '2021-11-14 20:59:44', 23),
(83, 'acroarson', 'i wish this website a good future + i like it its cool', '2021-11-14 21:05:51', 27),
(84, 'philosophy', 'hgdd', '2021-11-15 01:42:34', 2),
(85, 'philosophy', '', '2021-11-15 01:42:39', 2),
(86, 'philosophy', '', '2021-11-15 01:42:41', 2),
(87, 'philosophy', '', '2021-11-15 01:42:41', 2),
(88, 'philosophy', '', '2021-11-15 01:43:04', 2),
(89, 'acroarson', 'ok cool im on my chromebook right now and squared works', '2021-11-15 07:16:55', 27),
(90, 'Snoopydogg', 'da cops r after meðŸ‘', '2021-11-15 07:23:59', 14),
(91, 'acroarson', 'is it because youre black', '2021-11-15 07:38:35', 27),
(92, 'acroarson', 'i am now in school', '2021-11-15 08:02:18', 27),
(93, 'acroarson', 'im in 1st period right now at math but now i gtg because class is starting', '2021-11-15 08:12:10', 27),
(94, 'acroarson', 'im in 2nd period now', '2021-11-15 09:08:48', 27),
(95, 'acroarson', 'this class is boring af', '2021-11-15 09:14:26', 27),
(96, 'acroarson', 'anyways i thought yall were gonna speak here today at school why not', '2021-11-15 09:14:53', 27),
(97, 'acroarson', 'feed message', '2021-11-15 09:15:21', 27),
(98, 'acroarson', 'feed message', '2021-11-15 09:15:24', 27),
(99, 'acroarson', 'feed message', '2021-11-15 09:15:28', 27),
(100, 'acroarson', 'woo i made the 100th feed message in secret chat', '2021-11-15 09:15:37', 27),
(101, 'Snoopydogg', 'school', '2021-11-15 09:44:38', 14),
(102, 'acroarson', 'same dude im at 2nd period yet again but class is ending soon', '2021-11-15 09:51:25', 27),
(103, 'Squared', 'ur moth', '2021-11-15 09:53:10', 1),
(104, 'acroarson', 'fun fact: cleveland brown', '2021-11-15 09:53:21', 27),
(105, 'acroarson', 'squared youre moth is a mom ROASTED NEWGEN', '2021-11-15 09:53:38', 27),
(106, 'Squared', '@acroarson what u said on message 96 its bcz i cant have my pc out during 1st', '2021-11-15 09:53:42', 1),
(107, 'Squared', 'i mnean laptop', '2021-11-15 09:53:53', 1),
(108, 'acroarson', 'oh i couldnt have my pc out during 1st too', '2021-11-15 09:54:09', 27),
(109, 'Squared', 'btw im phil', '2021-11-15 09:54:17', 1),
(110, 'acroarson', 'i also cant have laptop out next period', '2021-11-15 09:54:49', 27),
(111, 'Squared', 'shit', '2021-11-15 09:55:29', 1),
(112, 'Squared', 'also janx is making a forum so thats cool', '2021-11-15 09:55:43', 1),
(113, 'Squared', 'janx told me that <img id=\"loadingImage\" class=\"status-update-image\" alt=\"Sharing...\" src=\"https://images.rbxcdn.com/ec4e85b0c4396cf753a06fade0a8d8af.gif\">', '2021-11-15 09:56:27', 1),
(114, 'Squared', '<video height=100 length=200 src=\"https://cdn.discordapp.com/attachments/742812554572857394/909538969019113542/Video06.mp4\"></video>', '2021-11-15 10:10:37', 1),
(115, 'Squared', '<video controls height=100 length=200 src=\"https://cdn.discordapp.com/attachments/742812554572857394/909538969019113542/Video06.mp4\"></video>', '2021-11-15 10:10:45', 1),
(116, 'Squared', '<video controls height=200 length=300 src=\"https://cdn.discordapp.com/attachments/742812554572857394/909538969019113542/Video06.mp4\"></video>', '2021-11-15 10:11:06', 1),
(117, 'acroarson', 'im back and i have lunch next period', '2021-11-15 11:01:57', 27),
(118, 'acroarson', 'i actually have to go to this other room in the middle of class so i may not be able to talk', '2021-11-15 11:05:00', 27),
(119, 'Squared', 'ur mom', '2021-11-15 11:08:23', 1),
(120, 'acroarson', 'yo mama', '2021-11-15 11:19:07', 27),
(121, 'acroarson', 'im at the room that i had to go to in the middle of class but i may or may not have to gtg', '2021-11-15 11:31:18', 27),
(122, 'acroarson', 'i also wont be on my chromebook next period', '2021-11-15 11:31:36', 27),
(123, 'Squared', 'the moment', '2021-11-15 11:34:09', 1),
(124, 'acroarson', 'moment', '2021-11-15 11:35:11', 27),
(125, 'Squared', 'test', '2021-11-15 11:40:50', 1),
(126, 'Squared', 'ae', '2021-11-15 11:42:51', 1),
(127, 'acroarson', 'hi im back but im probably gonna have to gtg soon because we usually dont use our chromebooks that much in this class', '2021-11-15 12:57:48', 27),
(128, 'acroarson', 'also im in 6th period', '2021-11-15 12:57:56', 27),
(129, 'acroarson', 'also posifjgyud', '2021-11-15 13:22:43', 27),
(130, 'acroarson', 'dfghjkkfgiudfgiuhuertkjertkjbniucuivb kjiu uiher jetroij jio ioj', '2021-11-15 13:23:14', 27),
(131, 'acroarson', 'also school is over im going to my uncles house again', '2021-11-15 13:23:31', 27),
(132, 'acroarson', '*also when school is over im going to my uncles house again', '2021-11-15 13:23:42', 27),
(133, 'Squared', 'w', '2021-11-15 13:23:51', 1),
(134, 'acroarson', 'what are your thoughts on the letter \"w\"', '2021-11-15 13:25:03', 27),
(135, 'acroarson', 'personally i think w is great', '2021-11-15 13:25:17', 27),
(136, 'acroarson', 'i cant use discord at school anymore sadly because the internet on my phone isnt working for some strange reason outside of me or my uncles house', '2021-11-15 13:27:07', 27),
(137, 'Squared', 'oh', '2021-11-15 13:53:12', 1),
(138, 'acroarson', 'at least i can use this also i had to gtg earlier because my teachers turned on the software that watches my screen', '2021-11-15 14:21:13', 27),
(139, '', '', '2021-11-15 14:21:15', 0),
(140, 'acroarson', 'also i may try to get opera gx on my chromebook', '2021-11-15 14:21:30', 27),
(141, 'acroarson', 'also im in last period', '2021-11-15 14:26:17', 27),
(142, 'Squared', 'nice', '2021-11-15 15:00:49', 1),
(143, 'sudoapt', 'with the power of inspect element i can force lightmode squared logo onto squared website!!! muahaahhahahahahaahhaha <img width=\"223\" length=\"242\" src=\"https://cdn.discordapp.com/attachments/904077118634356756/910000854814306334/unknown.png\">', '2021-11-15 21:58:43', 6),
(144, 'Squared', 'ur a monster', '2021-11-16 06:53:48', 1),
(145, 'Squared', 'lol', '2021-11-16 06:56:07', 1),
(146, 'acroarson', 'im in school now', '2021-11-16 08:02:15', 27),
(147, 'acroarson', 'school just started also my friend just vectored me irl', '2021-11-16 08:02:29', 27),
(148, 'acroarson', 'im in 1st period right now but i have science instead of math today but im probably gonna have to go anyways', '2021-11-16 08:13:08', 27),
(149, 'acroarson', 'anyways how are you guys doing', '2021-11-16 08:30:19', 27),
(150, 'acroarson', 'mnbvcxzasdfghjklkjhgfdsertyujhgfdertyujhgfredfghtrewsdfghjnbvghuytrdcvhjnbvfgtyhjnb', '2021-11-16 08:33:08', 27),
(151, 'acroarson', 'FRED', '2021-11-16 08:33:21', 27),
(152, 'Squared', 'h', '2021-11-16 11:32:55', 1),
(153, 'Squared', 'holy fuck i just want to search stuff up but my dumbass school wont let me', '2021-11-16 11:50:40', 1),
(154, 'Squared', 'Temporary ban for student', '2021-11-16 11:50:46', 1),
(155, 'Squared', 'back from lunch', '2021-11-16 12:30:06', 1),
(156, 'Squared', 'dying inside slowly', '2021-11-16 12:30:11', 1),
(157, 'acroarson', 'same im at 6th period aka 2nd to last period next period will be last', '2021-11-16 13:03:13', 27),
(158, 'acroarson', 'my teachers keep telling me to study my science test when im looking at any other tab and its so annoying', '2021-11-16 13:14:37', 27),
(159, 'acroarson', 'also i have detention after school (my entire class does) because my grammar class was misbehaving', '2021-11-16 13:17:18', 27),
(160, 'philosophy', 'i invited katrina', '2021-11-16 13:55:43', 2),
(161, 'philosophy', 'so thats cool', '2021-11-16 13:56:54', 2),
(162, 'philosophy', 'people are probably gonna call me a simp because i changed her id to 8', '2021-11-16 13:57:03', 2),
(163, 'philosophy', 'respektiere katrina oder trage konsequenzen', '2021-11-16 13:58:51', 2),
(164, 'Katrina', 'Hello', '2021-11-16 14:17:14', 4),
(165, 'Katrina', 'I&apos;m starting to learn german with Philosophy', '2021-11-16 14:19:19', 4),
(166, 'Katrina', 'Also das ist cool', '2021-11-16 14:19:47', 4),
(167, 'Katrina', 'Hopefully this ROBLOX revival doesn&apos;t end up like Calvy,', '2021-11-16 14:27:05', 4),
(168, 'Katrina', 'I really like 2016 ROBLOX revivals because 2016 was my most favorite year in ROBLOX.', '2021-11-16 14:28:51', 4),
(169, 'acroarson', 'i only liked 2016 for roblox because i was 7 - 8', '2021-11-16 16:54:43', 27),
(170, 'acroarson', 'and i had a childhood from roblox', '2021-11-16 16:54:57', 27),
(171, 'acroarson', 'if i was 13 in 2016 i wouldve probably hated roblox', '2021-11-16 16:55:07', 27),
(172, 'acroarson', 'also i do agree i prey that it doesnt end up like calvy', '2021-11-16 16:57:10', 27),
(173, 'acroarson', 'when philosophy got fired calvy became a shitty place', '2021-11-16 16:57:28', 27),
(174, 'acroarson', 'fuck calvy i dont like it', '2021-11-16 16:57:53', 27),
(175, 'username', '<img src=\"https://cdn.discordapp.com/attachments/905216068618956840/910314297127755826/unknown.png\">', '2021-11-16 18:44:51', 30),
(176, 'acroarson', 'im going to school in less than an hour i dont wanna go besides i have gym first period and yesterday i fucked up my knee', '2021-11-17 07:19:38', 27),
(177, 'acroarson', 'im in 2nd period in science', '2021-11-17 09:16:59', 27),
(178, '', '', '2021-11-17 09:17:02', 0),
(179, 'acroarson', 'the teachers keep telling me to stop playing games', '2021-11-17 09:40:22', 27),
(180, 'acroarson', 'im in 6th period', '2021-11-17 13:21:05', 27),
(181, 'Katrina', 'Hellooooo', '2021-11-17 13:49:46', 4),
(182, 'Katrina', 'Anyone here', '2021-11-17 13:49:55', 4),
(183, 'Katrina', 'I got in trouble for talking to phil', '2021-11-17 13:54:44', 4),
(184, 'Squared', 'hey katrina', '2021-11-17 13:56:59', 1),
(185, 'Katrina', 'Hey babe', '2021-11-17 13:57:09', 4),
(186, 'Katrina', 'Does the catalog work yet?', '2021-11-17 13:59:10', 4),
(187, 'Squared', 'no not yet', '2021-11-17 13:59:28', 1),
(188, 'acroarson', 'hello katrina im here now im at last period', '2021-11-17 14:01:34', 27),
(189, 'acroarson', 'same katrina i also got trouble for talking here earlier', '2021-11-17 14:01:47', 27),
(190, 'Squared', 'yeah katrina got in trouble for talking to me', '2021-11-17 14:01:56', 1),
(191, 'Squared', 'no she got in trouble for talking to me irl not on this', '2021-11-17 14:04:56', 1),
(192, 'Squared', 'talk here even after school until i get home', '2021-11-17 14:05:15', 1),
(193, 'acroarson', 'oh', '2021-11-17 14:10:41', 27),
(194, 'acroarson', 'you get home at 4 pm right', '2021-11-17 14:10:58', 27),
(195, 'Squared', 'around 3-4', '2021-11-17 14:16:25', 1),
(196, 'Squared', '4-5 for you', '2021-11-17 14:16:33', 1),
(197, 'acroarson', 'yeah im in est so youll be home at 4 for me', '2021-11-17 14:21:17', 27),
(198, 'Katrina', 'Babe you there?', '2021-11-17 14:23:29', 4),
(199, 'Squared', 'ye', '2021-11-17 14:23:43', 1),
(200, 'Katrina', 'I&apos;m in math class', '2021-11-17 14:24:37', 4),
(201, 'Squared', 'fun fact codex has faked a gf before (hes owner in calvy)', '2021-11-17 14:27:48', 1),
(202, 'Katrina', 'That&apos;s just sad.', '2021-11-17 14:28:09', 4),
(203, 'acroarson', 'im in last period im going home in 29 minutes', '2021-11-17 14:28:41', 27),
(204, 'acroarson', 'codex faking a gf is embarrassing if anything', '2021-11-17 14:29:05', 27),
(205, 'acroarson', 'people used to make fun of me for being 12 when codex is literally 12 i think', '2021-11-17 14:29:22', 27),
(206, 'acroarson', 'im 13 so i can bully codex all i want', '2021-11-17 14:29:32', 27),
(207, 'acroarson', 'also tip: if someone says they have a gf and they are 13 or younger theyre probably lying', '2021-11-17 14:30:08', 27),
(208, 'Katrina', 'It&apos;s very embarrasing', '2021-11-17 14:30:23', 4),
(209, 'Squared', 'imagine faking a gf ', '2021-11-17 14:30:53', 1),
(210, 'Squared', 'like if ur gonna fake a gf atleast make it look convincing', '2021-11-17 14:31:16', 1),
(211, 'Squared', 'codex made it look very obvious', '2021-11-17 14:31:24', 1),
(212, 'acroarson', 'what did codex do that made his fake gf obviously fake did he use a bot or something', '2021-11-17 14:32:10', 27),
(213, 'Squared', 'he didnt talk in a different way', '2021-11-17 14:32:43', 1),
(214, 'acroarson', 'oh lmao did he get exposed for faking his gf', '2021-11-17 14:33:06', 27),
(215, 'Squared', 'he got exposed HARD', '2021-11-17 14:33:24', 1),
(216, 'Squared', 'codex is 12', '2021-11-17 14:46:55', 1),
(217, 'Squared', 'im 16 so im better ', '2021-11-17 14:50:40', 1),
(218, 'Katrina', 'I turn 17 on January 5th', '2021-11-17 14:53:44', 4),
(219, 'Squared', 'i turn 17 on may 30th', '2021-11-17 14:54:05', 1),
(220, 'acroarson', 'spmce is the only 12 year old that was worse than codex', '2021-11-17 14:54:10', 27),
(221, 'acroarson', 'spmce is 13 now but when he was 12 he was worse than codex now', '2021-11-17 14:54:26', 27),
(222, 'acroarson', 'i turn 17 on october 22nd (not next year though)', '2021-11-17 14:54:41', 27),
(223, 'Squared', 'imagine being 12 smh', '2021-11-17 14:55:03', 1),
(224, 'acroarson', 'school is ending in 3 minutes', '2021-11-17 14:55:06', 27),
(225, 'Squared', '2009 idiots', '2021-11-17 14:55:13', 1),
(226, 'acroarson', 'i regret admitting to being 12 when i was 12 it was a bad idea', '2021-11-17 14:55:27', 27),
(227, 'acroarson', 'is codex a 2009er', '2021-11-17 14:55:46', 27),
(228, 'Squared', 'yes', '2021-11-17 14:55:59', 1),
(229, 'acroarson', 'im a late 2008er', '2021-11-17 14:56:06', 27),
(230, 'acroarson', 'wait is codex a late 2009er', '2021-11-17 14:56:15', 27),
(231, 'acroarson', 'if so that means codex is in 6th grade', '2021-11-17 14:56:28', 27),
(232, 'Squared', 'mid 2009er', '2021-11-17 14:56:57', 1),
(233, 'acroarson', 'sad hes in 7th grade', '2021-11-17 14:57:30', 27),
(234, 'acroarson', 'YOOOOOOOOOOOOOOOOO THE BELL JUST RUNG I GET TO GO HOME NOW', '2021-11-17 14:57:42', 27),
(235, 'acroarson', 'brb imma go home now', '2021-11-17 14:57:48', 27),
(236, 'Squared', 'guess what grade im in', '2021-11-17 14:58:15', 1),
(237, 'acroarson', 'youre in grade 11 right im in grade 7 im a newgen', '2021-11-17 14:59:16', 27),
(238, 'acroarson', 'also im on my phone right now while walking to my uncles house', '2021-11-17 14:59:30', 27),
(239, 'Katrina', 'Math sucks', '2021-11-17 15:00:14', 4),
(240, 'acroarson', 'i agree math is horrible', '2021-11-17 15:00:43', 27),
(241, 'acroarson', 'my math teacher is an asshole she makes you go to detention if youre a minute late or later', '2021-11-17 15:01:04', 27),
(242, 'acroarson', 'she is very fond of sending people to the office or to detention for dumb reasons', '2021-11-17 15:01:24', 27),
(243, 'Squared', 'imagine sucking at math smh', '2021-11-17 15:01:42', 1),
(244, 'Katrina', 'I don&apos;t suck at math I just hate it', '2021-11-17 15:02:02', 4),
(245, 'acroarson', 'im horrible at math and i hate it', '2021-11-17 15:02:23', 27),
(246, 'acroarson', 'my least favorite classes are science and english', '2021-11-17 15:03:05', 27),
(247, 'Squared', 'ur mom', '2021-11-17 15:04:34', 1),
(248, 'acroarson', 'yo mama', '2021-11-17 15:04:43', 27),
(249, 'acroarson', 'ok im almost at my uncles house ill be back soon', '2021-11-17 15:05:03', 27),
(250, 'Katrina', 'katrina is the best gf i have and will most likely be the only one since shes the nicest person to me and has helped me when i am going through something', '2021-11-17 15:06:24', 4),
(251, 'Katrina', '- sent byphil', '2021-11-17 15:06:38', 4),
(252, 'Katrina', 'Aww thank you!', '2021-11-17 15:06:52', 4),
(253, 'Squared', 'i changed the values on accident ', '2021-11-17 15:07:00', 1),
(254, 'Squared', 'bcz i was editing the feed script', '2021-11-17 15:07:48', 1),
(255, 'acroarson', 'ok im at my uncles house now', '2021-11-17 15:07:59', 27),
(256, 'Katrina', 'How did you mess up the values lol', '2021-11-17 15:08:39', 4),
(257, 'acroarson', 'bruh my uncle hid his pc', '2021-11-17 15:08:58', 27),
(258, 'Squared', 'i was tryna fix a bug and fix some exploits i found ', '2021-11-17 15:09:04', 1),
(259, 'acroarson', 'now i cant use it when hes not around', '2021-11-17 15:09:08', 27),
(260, 'acroarson', 'idk where he put it', '2021-11-17 15:09:20', 27),
(261, 'Katrina', 'If I could I would give you my old laptop', '2021-11-17 15:10:49', 4),
(262, 'acroarson', 'thanks for offering to if you could', '2021-11-17 15:11:23', 27),
(263, 'Squared', '<marquee>vroom</marquee>', '2021-11-17 15:11:27', 1),
(264, 'acroarson', 'anyways im so glad im home today school was crazy', '2021-11-17 15:11:42', 27),
(265, 'Katrina', 'How did you do that?', '2021-11-17 15:11:42', 4),
(266, 'Squared', 'marquee tag', '2021-11-17 15:12:05', 1),
(267, 'acroarson', 'im temporarily living in my sick uncles house because my house is getting fixed by construction workers', '2021-11-17 15:13:17', 27),
(268, 'acroarson', 'my uncles house is pretty cool it has this thing where you can sit on a seat and it can go up or down the stairs', '2021-11-17 15:13:40', 27),
(269, 'acroarson', 'its for my uncle because hes sick and old but i use it anyways', '2021-11-17 15:13:57', 27),
(270, 'Squared', 'cool', '2021-11-17 15:14:03', 1),
(271, 'acroarson', 'my aunt lives there too', '2021-11-17 15:14:05', 27),
(272, 'Squared', 'we dont have a second story but katrina does', '2021-11-17 15:14:16', 1),
(273, 'acroarson', 'katrina what is your second story', '2021-11-17 15:14:37', 27),
(274, 'Katrina', '<p>Subtract (x<sup>3</sup>+2x<sup>2</sup>-x+7) from (4x<sup>3</sup>+6x</sup>2</sup>+2x-7)</p>', '2021-11-17 15:20:03', 4),
(275, 'Katrina', 'Phil can you help?', '2021-11-17 15:20:18', 4),
(276, 'Squared', '3x<sup>3</sup>+4x<sup>2</sup>+3x-14', '2021-11-17 15:21:08', 1),
(277, 'Katrina', 'Thanks!', '2021-11-17 15:22:49', 4),
(278, 'Squared', 'yo welcom', '2021-11-17 15:22:57', 1),
(279, 'acroarson', 'k', '2021-11-17 15:23:38', 27),
(280, 'Squared', 'yo katrina can i come over after school', '2021-11-17 15:25:41', 1),
(281, 'Katrina', 'Sure', '2021-11-17 15:25:50', 4),
(282, 'Squared', 'today is a special day', '2021-11-17 15:29:28', 1),
(283, 'Katrina', 'What&apos;s so special about today?', '2021-11-17 15:29:51', 4),
(284, 'Squared', 'you&apos;ll see when i come over', '2021-11-17 15:30:24', 1),
(285, 'Squared', '2 years', '2021-11-17 15:34:39', 1),
(286, 'Katrina', 'Ohhhhh', '2021-11-17 15:34:51', 4),
(287, 'Katrina', 'I think I know what you mean now', '2021-11-17 15:35:01', 4),
(288, 'acroarson', 'wr', '2021-11-17 15:35:57', 27),
(289, 'acroarson', 'are you guys still at school', '2021-11-17 15:36:08', 27),
(290, 'Katrina', '11 minutes left', '2021-11-17 15:37:01', 4),
(291, 'acroarson', 'school is literally mental torture its one of the things i hate the most in life', '2021-11-17 15:39:58', 27),
(292, 'Squared', 'there are almost 300 messages ', '2021-11-17 15:40:04', 1),
(293, 'Squared', 'there are already 300 messages on the normal feed', '2021-11-17 15:40:13', 1),
(294, 'acroarson', 'work is probably gonna be worse than school but either way i still hate school more than anything', '2021-11-17 15:40:20', 27),
(295, 'acroarson', 'i posted the 100th feed message in secret chat', '2021-11-17 15:40:43', 27),
(296, 'Squared', 'we finna dismiss', '2021-11-17 15:41:57', 1),
(297, 'acroarson', 'you leave in 5 minutes right', '2021-11-17 15:43:01', 27),
(298, 'Squared', 'headin to katrinas house', '2021-11-17 16:14:11', 1),
(299, 'Squared', 'on my phone rn', '2021-11-17 16:16:52', 1),
(300, 'acroarson', 'i fell asleep for 2 hours but now im back and i wanna go back to sleep because im tired as shit', '2021-11-17 17:36:45', 27),
(301, 'Squared', 'that was the best shit ever', '2021-11-17 18:19:50', 1),
(302, 'Squared', 'i wont say what happened but bro i had a lot of fun', '2021-11-17 18:19:58', 1),
(303, 'acroarson', 'when i was not there i was in my uncles yard', '2021-11-17 19:21:54', 27),
(304, 'acroarson', 'my uncle has this yard with this waterfall and 2 sheds and workout machines for some reason', '2021-11-17 19:22:13', 27),
(305, 'acroarson', 'the house also has a balcony its a pretty cool house i kinda wanna stay here forever', '2021-11-17 19:22:28', 27),
(306, 'Squared', 'ur mom', '2021-11-18 06:56:31', 1),
(307, 'Squared', 'jghjhkgjhkgjhlkgjhkgjhkgjhkgjhkgjkhjgkhjgkjgkhjgkhjgkhjgkhjgkhjkgkhjgkhjgkhjgkhjgkhjgkhjgkhjgkhjgkhjgkhjgkhjgkhjgkhjkjhjhjhjhjhjhjhjhjgkhjgkhjgkhjgkhjgkhjgkhjgkgkjjgjhjhjhkgjhkgjhkgjhkgjhkgjhkgjhkhjgkhjgkhjhkgjhkgjhkgjhkgjhkgjhkgjhkgjhkgjhkgjhkgjhkgjhkgjhkgjhkgjhkkhjgkhjgjhkgjhkgjhkgjhkhjhjhjhjgkhjgkhjhkhjgjhkgjhkgjhkgjhkgjhkgjhkgjhkgjhkgjhkjhkhjkgjhkgjhkgjhkgjhkgjhkgjhkgkkojhggkjkgjhkjghjkghjkjghkkohjkkbgjkhgkohkjhjhjgkhjgkhjgkhkgjhkgjhkgjhkgjhkgjjhjhkgjhkgjhyjgjhjhkgjhjgkhjgkhjgkhjgkhjgkhjgkhjgkgjhkgjhkjhkgjhkgkhjhkgjhkgjhkgjhkgjhkgkhjgkhjgkhjgkhjhkgjhkgjhkgjhkgjhkgjhkhjhkgjhkgjhkgjhkgjhkgjhkkgkhjgkhjgkhgjgkhjgkjhjkkjghkojghkjghkjghkjghkjkgjhjghkjhkjhkgjhkgjhkgkkghjhkjgkohjgkjgkhkjghkjkghkgjkkkgjhkgjhkgjkhjgkhjgkgkjhkgjhkgjhjgjhkjhkhjghkhjihjhjhjhjhjhjgkhjgkjh6kgjhkhjgkgjhkjhkgkghjjghjhkgjhkgjhlkgjhkgjhkgjhkgjhkgjkhjgkhjgkjgkhjgkhjgkhjgkhjgkhjkgkhjgkhjgkhjgkhjgkhjgkhjgkhjgkhjgkhjgkhjgkhjgkhjgkhjkjhjhjhjhjhjhjhjhjgkhjgkhjgkhjgkhjgkhjgkhjgkgkjjgjhjhjhkgjhkgjhkgjhkgjhkgjhkgjhkhjgkhjgkhjhkgjhkgjhkgjhkgjhkgjhkgjhkgjhkgjhkgjhkgjhkgjhkgjhkgjhkgjhkkhjgkhjgjhkgjhkgjhkgjhkhjhjhjhjgkhjgkhjhkhjgjhkgjhkgjhkgjhkgjhkgjhkgjhkgjhkgjhkjhkhjkgjhkgjhkgjhkgjhkgjhkgjhkgkkojhggkjkgjhkjghjkghjkjghkkohjkkbgjkhgkohkjhjhjgkhjgkhjgkhkgjhkgjhkgjhkgjhkgjjhjhkgjhkgjhyjgjhjhkgjhjgkhjgkhjgkhjgkhjgkhjgkhjgkgjhkgjhkjhkgjhkgkhjhkgjhkgjhkgjhkgjhkgkhjgkhjgkhjgkhjhkgjhkgjhkgjhkgjhkgjhkhjhkgjhkgjhkgjhkgjhkgjhkkgkhjgkhjgkhgjgkhjgkjhjkkjghkojghkjghkjghkjghkjkgjhjghkjhkjhkgjhkgjhkgkkghjhkjgkohjgkjgkhkjghkjkghkgjkkkgjhkgjhkgjkhjgkhjgkgkjhkgjhkgjhjgjhkjhkhjghkhjihjhjhjhjhjhjgkhjgkjh6kgjhkhjgkgjhkjhkgkghjjghjhkgjhkgjhlkgjhkgjhkgjhkgjhkgjkhjgkhjgkjgkhjgkhjgkhjgkhjgkhjkgkhjgkhjgkhjgkhjgkhjgkhjgkhjgkhjgkhjgkhjgkhjgkhjgkhjkjhjhjhjhjhjhjhjhjgkhjgkhjgkhjgkhjgkhjgkhjgkgkjjgjhjhjhkgjhkgjhkgjhkgjhkgjhkgjhkhjgkhjgkhjhkgjhkgjhkgjhkgjhkgjhkgjhkgjhkgjhkgjhkgjhkgjhkgjhkgjhkgjhkkhjgkhjgjhkgjhkgjhkgjhkhjhjhjhjgkhjgkhjhkhjgjhkgjhkgjhkgjhkgjhkgjhkgjhkgjhkgjhkjhkhjkgjhkgjhkgjhkgjhkgjhkgjhkgkkojhggkjkgjhkjghjkghjkjghkkohjkkbgjkhgkohkjhjhjgkhjgkhjgkhkgjhkgjhkgjhkgjhkgjjhjhkgjhkgjhyjgjhjhkgjhjgkhjgkhjgkhjgkhjgkhjgkhjgkgjhkgjhkjhkgjhkgkhjhkgjhkgjhkgjhkgjhkgkhjgkhjgkhjgkhjhkgjhkgjhkgjhkgjhkgjhkhjhkgjhkgjhkgjhkgjhkgjhkkgkhjgkhjgkhgjgkhjgkjhjkkjghkojghkjghkjghkjghkjkgjhjghkjhkjhkgjhkgjhkgkkghjhkjgkohjgkjgkhkjghkjkghkgjkkkgjhkgjhkgjkhjgkhjgkgkjhkgjhkgjhjgjhkjhkhjghkhjihjhjhjhjhjhjgkhjgkjh6kgjhkhjgkgjhkjhkgkghj', '2021-11-18 08:02:06', 1),
(308, 'Katrina', 'Lots of text', '2021-11-18 08:27:51', 4),
(309, 'acroarson', 'im in 1st period right now but i wont be able to use my chromebook next period', '2021-11-18 08:44:52', 27),
(310, 'acroarson', '1st period ends in 9 minutes also i have gym next period which equals no chromebook', '2021-11-18 08:56:02', 27),
(311, 'acroarson', 'anyways how are you guys doing today', '2021-11-18 08:56:12', 27),
(312, 'acroarson', '3rd period', '2021-11-18 10:12:01', 27),
(313, 'Katrina', 'I&apos;m also at 3rd period', '2021-11-18 10:43:12', 4),
(314, 'Katrina', 'Phil showed me some things he was working on and their amazing', '2021-11-18 10:43:48', 4),
(315, 'Katrina', 'Yesterday was a lot of fun as well', '2021-11-18 10:45:19', 4),
(316, 'acroarson', 'im playing this stupid science game and everyone kept stealing my money so i just quit', '2021-11-18 10:58:38', 27),
(317, 'acroarson', '4th period now', '2021-11-18 11:14:11', 27),
(318, 'acroarson', 'i have lunch next period', '2021-11-18 11:14:29', 27),
(319, 'acroarson', 'lol i drew on the board and the teacher told me that \"i know better than this\"', '2021-11-18 11:30:17', 27),
(320, 'acroarson', 'i actually dont because i have the mental age of a 3 year old', '2021-11-18 11:30:25', 27),
(321, 'acroarson', 'class ends in 7 minutes', '2021-11-18 11:49:11', 27),
(322, 'Katrina', 'What are you doing right now?', '2021-11-18 12:08:34', 4),
(323, 'acroarson', 'im in 6th period in social studies i just came back from lunch', '2021-11-18 12:53:28', 27),
(324, 'Squared', 'there are four custom feed ids', '2021-11-18 12:57:38', 1),
(325, 'Squared', 'god i hate the spacebar on the school laptop', '2021-11-18 12:57:50', 1),
(326, 'Katrina', 'One of them is for me and Phil', '2021-11-18 12:59:21', 4),
(327, 'Squared', 'yea', '2021-11-18 13:06:50', 1),
(328, 'Squared', 'yooo upload.systems isnt blocked at my school', '2021-11-18 13:07:35', 1),
(329, 'Squared', '<video src=\"https://cdn.upload.systems/uploads/rZ3QjWaw.mp4\" controls\n				style=\"max-height: 75vh; width: auto; max-width: 100%; border-radius: 0.25rem\"></video>', '2021-11-18 13:13:53', 1),
(330, 'acroarson', 'what are custom feed ids', '2021-11-18 13:23:49', 27),
(331, 'Squared', 'like this is feed 34', '2021-11-18 13:28:30', 1),
(332, 'Squared', 'feed 34 is a custom feed id', '2021-11-18 13:28:39', 1),
(333, 'acroarson', 'ohh ok', '2021-11-18 13:44:33', 27),
(334, 'Squared', 'also im working on the .aspx update', '2021-11-18 13:47:40', 1),
(335, 'acroarson', 'im at last period now', '2021-11-18 13:51:49', 27),
(336, 'acroarson', 'im being dismissed in 3 minutes', '2021-11-18 14:54:59', 27),
(337, 'Squared', 'acro u there', '2021-11-18 15:23:02', 1),
(338, 'Squared', 'CODEX GOT FIRED FROM CALVY', '2021-11-18 15:57:02', 1),
(339, 'acroarson', 'sorry about that i had to go shopping', '2021-11-18 16:04:56', 27),
(340, 'acroarson', 'im home now', '2021-11-18 16:05:09', 27),
(341, 'acroarson', 'codex deserved to get fired', '2021-11-18 16:05:33', 27),
(342, 'acroarson', 'ass', '2021-11-18 17:23:51', 27),
(343, 'gamingcat1254', 'scary jumpesacere (ahhhhhhhh)', '2021-11-18 18:38:06', 23),
(344, 'acroarson', 'AAAAAAAAAA IM SHTTING MY PANTS', '2021-11-19 07:31:47', 27),
(345, 'acroarson', 'im about to go to school', '2021-11-19 07:47:00', 27),
(346, 'acroarson', 'im packed up and everything', '2021-11-19 07:47:05', 27),
(347, 'acroarson', '1st period i wont be able to use my chromebook', '2021-11-19 07:47:13', 27),
(348, 'acroarson', 'im in homeroom right now but 1st period is about to start', '2021-11-19 08:03:13', 27),
(349, 'acroarson', '50% chance ill be able to use it 2nd period', '2021-11-19 08:06:41', 27),
(350, 'acroarson', 'sometimes we use our chromebook sometimes not', '2021-11-19 08:06:52', 27),
(351, 'Squared', 'yo mama', '2021-11-19 09:19:11', 1),
(352, 'acroarson', '2nd period right now', '2021-11-19 09:43:14', 27),
(353, 'acroarson', 'cant use chromebook next period', '2021-11-19 09:43:19', 27),
(354, 'Squared', 'nigga', '2021-11-19 10:00:02', 1),
(355, 'acroarson', 'im in 4th period and i have lunch next', '2021-11-19 10:59:44', 27),
(356, 'acroarson', 'ass', '2021-11-19 11:24:11', 27),
(357, 'acroarson', 'yoo i get to play games for the rest of class', '2021-11-19 11:26:21', 27),
(358, 'acroarson', 'im in 6th period', '2021-11-19 13:17:22', 27),
(359, 'acroarson', 'im bored af', '2021-11-19 13:28:37', 27);

-- --------------------------------------------------------

--
-- Table structure for table `secretchat2`
--

CREATE TABLE `secretchat2` (
  `id` int(11) NOT NULL,
  `user` text NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL,
  `madeby` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `secretchat2`
--

INSERT INTO `secretchat2` (`id`, `user`, `content`, `date`, `madeby`) VALUES
(1, 'Squared', 'test', '2021-11-15 11:43:12', 1),
(2, 'janx', 'cock', '2021-11-15 11:43:25', 3),
(3, 'Squared', 'ae', '2021-11-15 11:43:30', 1),
(4, 'Squared', '<iframe>your mom</iframe>', '2021-11-15 19:13:53', 1),
(5, 'Squared', '<form><fieldset><legend>username</legend>username <input name=\"username\" type=\"radio\" value=\"no\" /></fieldset></form>', '2021-11-15 19:22:47', 1),
(6, 'Squared', 'd', '2021-11-15 19:26:36', 1),
(7, 'Squared', 'w', '2021-11-16 14:50:19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `position` int(11) NOT NULL,
  `id2` int(11) NOT NULL,
  `title` text NOT NULL,
  `message` text NOT NULL,
  `authorid` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `timestamp2` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `other` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `name`, `description`, `position`, `id2`, `title`, `message`, `authorid`, `timestamp`, `timestamp2`, `other`) VALUES
(1, 'ur mom', 'test', 1, 1, 'ae', 'ae', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user` text NOT NULL,
  `password` text NOT NULL,
  `created_at` date NOT NULL,
  `email` text NOT NULL,
  `ticket` text NOT NULL,
  `about` varchar(1000) NOT NULL DEFAULT 'Im new to Squared!',
  `qian` bigint(50) NOT NULL DEFAULT 25,
  `admin` varchar(4) NOT NULL DEFAULT 'no',
  `hasSqrt` varchar(3) NOT NULL DEFAULT 'no',
  `gettc` bigint(20) NOT NULL,
  `online` int(11) NOT NULL,
  `onlinetime` bigint(20) NOT NULL,
  `position` varchar(50) NOT NULL DEFAULT 'Normal User',
  `poshexcolor` varchar(6) NOT NULL DEFAULT '343434',
  `profileviews` int(11) NOT NULL,
  `newsposts` int(11) NOT NULL,
  `readnoti` varchar(4) NOT NULL DEFAULT 'no',
  `banned` varchar(4) NOT NULL DEFAULT 'no',
  `banreason` text NOT NULL,
  `moderatornote` text NOT NULL,
  `darkenabled` varchar(4) NOT NULL DEFAULT 'no',
  `lang` varchar(30) NOT NULL DEFAULT 'english'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user`, `password`, `created_at`, `email`, `ticket`, `about`, `qian`, `admin`, `hasSqrt`, `gettc`, `online`, `onlinetime`, `position`, `poshexcolor`, `profileviews`, `newsposts`, `readnoti`, `banned`, `banreason`, `moderatornote`, `darkenabled`, `lang`) VALUES
(1, 'Squared', 'ea51ba243d59312f088148fff6cb7adc5c6b6d1d8d9e127bc6547c4f602d08b313adfae7f7e1839872d4ca90bdaa2c4a753cb82461457c215ffeae56d9706332', '2015-08-11', '', '280b2396b6b4715dd1b5ee4e1230d6ed', 'Hello! This is the official Squared account.', 225, 'yes', 'no', 1637517887, 0, 1637490299, 'Squared Creator', 'e74c3c', 6, 8, 'yes', '', '', '', 'no', 'russian'),
(2, 'philosophy', 'ea51ba243d59312f088148fff6cb7adc5c6b6d1d8d9e127bc6547c4f602d08b313adfae7f7e1839872d4ca90bdaa2c4a753cb82461457c215ffeae56d9706332', '2021-11-01', '', 'c1e69bf8e6cd144ca2e5a9ed58ea0899', 'hey im the owner of squared', 50, 'yes', 'no', 1637175177, 0, 1637090135, 'Squared Creator', 'e74c3c', 1, 0, 'no', '', '', '', 'no', 'english'),
(3, 'janx', '1ed136349ca7f3c078187677e39ed6d7c538d6737c056695adfa2fc137c0b76c4cfd6f444c2faeacada27db5ae0823e3e8e8a244e6920efb93df5c4807505ad8', '2021-11-02', '', '6f0fe5c14f008918efb9056da876f4ec', 'fatasses', 415, 'yes', 'no', 1637511545, 0, 1637438523, 'Developer', 'e74c3c', 1, 0, 'yes', '', '', '', 'no', 'english'),
(4, 'Katrina', 'c466e9014c7a71d8abe45b6aa80838fbe8558256c07c8e605ef6e5fea175c2339d6ccacd5a90076894aa6b06ee118baa622ee7f50c199899cd1e6bdadfca8635', '2021-11-03', 'katrina.everly@yahoo.com', '7e8fc24bcba1880fa790fff1ea772f22', 'Don&apos;t harass me please! <br>\nI get it that most revivals are mostly full of boys, but that wont stop me from joining roblox revivals! <br>\nI enjoy old ROBLOX revivals because I joined in 2012. <br>\nLet\'s pray that Squared succeeds and doesnt end up like Calvy. <br>\nLove you phil! <3 <br>\nTwo Year Anniversary!!!!!!! (11/17/2021)', 25, 'no', 'no', 1637349039, 0, 1637267690, 'Well-Known', '33cc00', 0, 0, 'yes', '', '', '', 'no', 'english'),
(5, 'NeX', '8a05b2a2f475a8f1d9033381f4553286569decb0cfb68a1e79b8da4a1f02ca36ca700f0cf5482b4029879586fc9625ae73bba398220a3e8bb44e3c3d667e3416', '2021-11-09', 'imeanyeahcoke@gmail.com', 'b50fb6612619a66e1c8f5ee8110e0a76', 'Im new to Squared!', 75, '0', 'no', 1637347388, 0, 1637337253, 'Normal User', '343434', 1, 0, 'yes', '', '', '', 'no', 'english'),
(6, 'sudoapt', 'ead3b93ea25a912e6a5a426c912fcdedd41b6cc5aff3e06b589f2e1b6aeb1268f536413b520270e00db571d21cac123aaf5db91bbc5fd2f1adb473af179d0df2', '2021-11-09', 'dathambro4life@gmail.com', '6fd7f55b88b041889fe5c111cd6f6f81', '\"We do what we must because we can.\"\nthe loser, the legend, the lemonade guy.  <br> <br>\n\ni dual boot Windows 10 and Solus. I also enjoy me some good Portal, and am just kinda in the OSC and little more. <br>\n<img width=\"128\" length=\"128\" src=\"https://media.discordapp.net/attachments/631660766239653912/909585991742922772/v8nobg.png\" >', 125, '0', 'no', 1637444558, 0, 1637436542, 'Well-Known', '66ff33', 0, 0, 'yes', '', '', '', 'no', 'english'),
(7, 'testacc1', '67e9aa57b1250c35f2c82b998f3f4dd0fe50d818ef2be7d3447fda96a8d753410f1558ecc1e31e9928ad59c2b17edf05f94b89b6c763ab480a0505f10da02013', '2021-11-13', 'testacc1@urmom.com', '0c404f25dafb5a3b3f08246795e91a90', '<iframe frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"width=\"445\" height=\"250\" type=\"text/html\" src=\"https://www.youtube.com/embed/x-Po66rt8Iw?autoplay=1&fs=0&iv_load_policy=3&showinfo=0&rel=0&cc_load_policy=0&start=249&end=0&origin=http://youtubeembedcode.com\"><div><small><a href=\"https://youtubeembedcode.com/en\">youtubeembedcode.com/en/</a></small></div><div><small><a href=\"https://playfreeslots.org/\">https://playfreeslots.org/</a></small></div></iframe>', 0, '', 'no', 0, 0, 0, 'Normal User', '343434', 0, 0, 'no', '', '', '', 'no', 'english'),
(8, 'Lua', '8659845112f3940f96d107ddc73f2f5db7ed672079eabcf244e6bc58f34a0a7af70ca5c779fe5e73ec8c037fa8c5f2c1d630a8e224c0fed6cb9855e9c56aedb5', '2021-11-09', '9lonmc@gmail.com', '8bf0c63bf937db79b4bbd734e2ef8b1f', 'Sex', 0, '0', 'no', 0, 0, 0, 'Normal User', '343434', -4, 0, 'no', '', '', '', 'no', 'english'),
(9, 'testaccbillion', 'f3a654303034817e76942514c64b83e5cfd6d1b86ccacfd5c9fa7f603c77bab26f4be1a213544ec96e1a868a959a3c04f1c4531de1ff6494e94215255898319e', '2021-11-13', 'testaccbillion@testaccbillion.com', 'dc44cf7ef34ac20aa704a362b36ef72c', 'Im new to Squared!', 0, '', 'no', 0, 0, 0, 'Normal User', '343434', 0, 0, 'no', '', '', '', 'no', 'english'),
(10, 'krypto', 'a039937d281a1a94520afc7a8137c64c53c26b67f9968ea284ad732971af3fe4415ab26a61e40bf2bb8c5ca195ac85a34092abb28342944605d4fec612912ea9', '2021-11-13', 'bovbob430@gmail.com', 'ac6bd3ae6c13bd1220a873abba0f5e7d', 'Im new to Squared!', 125, '', 'no', 1637523664, 0, 1637438845, 'Normal User', '343434', 0, 0, 'yes', '', '', '', 'no', 'english'),
(11, 'O_O', '83fafd32ffb75e0bd00c4081a5680b02302a7eb5aa84281eb659aba1d7cfc07fe71ebf492616f0e33860e7e8dd1f3541ef4bc2c1073b19770f49565f9d57585b', '2021-11-14', 'icey@ctemplar.com', '2c0a2593cc4bd34319da4b655306f99f', 'Im new to Squared!', 25, '', 'no', 1636934342, 0, 1636851894, 'Normal User', '343434', 0, 0, 'no', '', '', '', 'no', 'english'),
(12, 'kfdgsfg', 'b8c9dadb19d3c1f533cb772ed3e84485ca7c912f9ef9a26ff42480695875846c38a066331e3a8f9790252fb91c6b742ab339a0491d622429531a0cac57044e16', '2021-11-14', 'biggidybigchunguss@gmail.com', '2c0a2593cc4bd34319da4b655306f99f', 'Im new to Squared!', 0, '', 'no', 0, 0, 0, 'Normal User', '343434', 0, 0, 'no', '', '', '', 'no', 'english'),
(13, 'gfsdas', '4fe7217133f4a201e6c177f6f46d3affcc66aa6fee8ef845fd8f89a81397c924e584934b9d883e516e919ca9e4eaf40d79b42d4e1b9e15a03b54aeb4e6ab2f1e', '2021-11-14', 'asdfjkgh@gnal.com', '3ca6aaad3d59805f746c9462cca9db76', 'Im new to Squared!', 0, '', 'no', 0, 0, 0, 'Normal User', '343434', 0, 0, 'no', '', '', '', 'no', 'english'),
(14, 'Snoopydogg', '8bb8e1a831e31a01a45bc2a6abeb3fc7bf192b412ffa06a891be71bf98f68f52a30293b31d9dc94ef210e4431ea485d912c9f8636be940b7b292b615f7784ac6', '2021-11-14', 'trustedemail421@gmail.com', '48f99c36cd74bb14c06a3b8aa4031e8a', 'squared is the best revival!11', 175, '', 'no', 1637458473, 0, 1637372170, 'Normal User', '343434', 0, 0, 'yes', '', '', '', 'no', 'english'),
(15, 'HS14', '31e14e6f19a8ec184ebea719549b09b073db2c14728146b4de35ef22a7597f0884c7ab76fc9904496524d1add655f81eb24b8d5a081ef689dda2c042284c362c', '2021-11-14', 'Floppanoob@gmail.com', '5eed0ccb76139521567eee6e584e45ff', 'Im new to Squared!', 50, '', 'no', 1637363668, 0, 1637341203, 'Normal User', '343434', 0, 0, 'yes', '', '', '', 'no', 'english'),
(16, 'Cross', '839cdfb53137d3b944cf9001eecf585ee315c9410fbe99baa218788dd650e4a3968dc1f369aae3ec03b269c2447086b259cb22383e9fe758c22d58db5b4949f0', '2021-11-14', 'epicgameing552@gmail.com', 'aa886e5f726c9879b73e08971aa8308e', 'Im new to Squared!', 100, '', 'no', 1637509157, 0, 1637422810, 'Normal User', '343434', 0, 0, 'yes', '', '', '', 'no', 'english'),
(17, 'Chap', 'ef9d0c43831170cfa0ea50f747a711c3043fff2f07dc0751d7a7d040f96ffc12e0452936a9b6de2ae9a624b7c36f4d584b0838d6dd8399cf95f23e6d2dd2d394', '2021-11-14', 'ebfhavejf@email.com', 'ee413f303da09a64f7ebdaf5a5c36103', 'Im new to Squared!', 100, '', 'no', 1637397788, 0, 1637325500, 'Normal User', '343434', 0, 0, 'yes', '', '', '', 'no', 'english'),
(18, 'brick', 'c360d7ff73fc21b7edcc6814e865082f6df2d14acc8a03ca920b217554ce52e3956075e2557b2e5b9f4b8f3a9a985c94905174ab0e9c9d4fa82ceee0576a00e7', '2021-11-14', 'cassapdanny@gmail.com', '5cbb40bb966af10a30a6b892eb53f5d3', 'Im new to Squared!', 125, '', 'no', 1637443217, 0, 1637434800, 'Normal User', '343434', 0, 0, 'yes', '', '', '', 'no', 'english'),
(19, 'axtrct', '8805128cf70374e6ee7b395c54a602cec898be8b29aa0c8909b1be5f09008acfcac3aad90f0d010adf29421cbce339a116d5127960acfe717defed5ca6df5ec4', '2021-11-14', 'nicetrybitchyouwontgetit@gmail.com', 'eb9765f06ec4190e59d3b8287d088fb5', 'I\'m new to Squared!', 25, '', 'no', 1636984203, 0, 1636897816, 'Normal User', '343434', 0, 0, 'no', '', '', '', 'no', 'english'),
(20, 'Flarf', '53246c6bf0489f1da3851f08525b3abb796999642dadee184db48af41b1eafe8ada2e5b3ba082c45f318eae7d6680b6913f6863b5c1e1c7b640da6e9ab6f63e4', '2021-11-14', 'nicetryyouwontgetmymail@gmail.com', '74a98baccfd61b12a2bb0276cd1bf432', 'Uh hi i am Flarf and i am the one who keeps this site up and running, I also like to dev shit', 75, 'yes', 'no', 1637576148, 1, 1637491337, 'Normal User', '343434', 0, 0, 'yes', '', '', '', 'no', 'english'),
(21, 'doc', '265de41a92cc4c2b8ccfbe34a7a587c1c6ea28428e8da8244336d69ac6c71b2717daca18fcee15012ec98532b49063a40e393025af70a3df6bf56d6cf8754ab5', '2021-11-14', 'lonopodelmaster@gmail.com', '6e04be216ad8290a003255a15d84c0aa', 'I\'m new to Squared!', 50, '', 'no', 1637078535, 0, 1637069719, 'Normal User', '343434', 0, 0, 'yes', '', '', '', 'no', 'english'),
(22, 'zka', '97bb8f9d8b30605e57b6bd2131090dd2d716dd6f439bc127062f4c1922ac2a7a11ead0628a75ec1537a5f6757e4df16722d394c6b1be035cd46cbce108c54b8c', '2021-11-14', 'thetordsticker@gmail.com', '3aeb2039420069cd489e9a376b1e1107', 'I\'m new to Squared!', 50, '', 'no', 1637359061, 0, 1637272696, 'Normal User', '343434', 0, 0, 'no', '', '', '', 'no', 'english'),
(23, 'gamingcat1254', '92aa966ff83ee7edd3d29965f6aa2ad43fa006ceacee9086b81fb526d9292b2d08bc53c165f3f8af1640e9e4e3398b953cc54ff0178087ebbffd8d09d2c01aa7', '2021-11-14', 'landonsucksatfortnitexd@gmail.com', 'c6287368eac3bfc389830f8452f2e063', 'I\'m new to Squared!', 75, '', 'no', 1637364885, 0, 1637278692, 'Normal User', '343434', 0, 0, 'yes', '', '', '', 'no', 'english'),
(24, 'Humanoider', '14d10c34a8dced117dd6d22381b7e2ac3a9d22bd9665b1139658f8cdf2fc4a9c037e32eeb3a9232c46038edc0c9ca70e79a8abfe178865f7745db370d5028cdf', '2021-11-14', 'Kirillandsh62@gmail.com', '9835aecd673fe11473f359f6446fd9f9', 'I\'m new to Squared!', 50, '', 'no', 1637441020, 0, 1637437376, 'Normal User', '343434', 0, 0, 'yes', '', '', '', 'no', 'russian'),
(25, 'crispy', 'b37a9a770955598ab8487586377df0e65b1a48a5258a891f90b25808d5b545a7e1d077d42d99cc466a177ce031b014c8b9e05ff6e75d4c81728480cfa17160d2', '2021-11-14', 'szymon.try07@gmail.com', '1483cdadb88b9ead3093bdeb84132a62', 'I\'m new to Squared!', 150, '', 'no', 1637510356, 0, 1637423997, 'Normal User', '343434', 0, 0, 'yes', '', '', '', 'no', 'english'),
(26, 'Mati3D', 'b30c71bfc3c99541cd1a982dc69591525cb8fa3619f80fc015094c3696ffb0a7768b1295882f021342c8355027cc4d4dbe5e0bde96cb9fadac69639d378cb80d', '2021-11-14', 'esteesminombre240@gmail.com', '7b61c154d9ffe96ae80865b744b651e6', 'gun', -19499019845, 'no', 'no', 1637372275, 0, 1637337935, 'Normal User', '343434', 0, 0, 'yes', '', '', '', 'no', 'english'),
(27, 'acroarson', '165429072eb126debd8c6cfa4aa774eb8c70cc9a6238df2271a423d96275f3dbb8af54c2477c2ed921626889276154511a88af59277b9ac2ccf5ffd51417ee27', '2021-11-14', 'gowice3207@gmail.com', '7b61c154d9ffe96ae80865b744b651e6', 'Im new to Squared!', 150, 'no', 'no', 1637524970, 0, 1637438597, 'Normal User', '343434', 0, 0, 'yes', 'no', 'ur mom', 'i fucked your mom nigger', 'no', 'russian'),
(28, 'ezzadbm3', '6a00fb648e80fd5a16e475f3f43dd315670baa88baaf9f9297fd963327e6a7ef79d30951ee0de0c026de639cae5e4825ca001b603d2e4295f169ef8324f37aa2', '2021-11-15', 'ezzadbm21@gmail.com', '1688a916084623cbc0e8bd91f1f474a6', 'Im new to Squared!', 75, 'no', 'no', 1637414756, 0, 1637328359, 'Normal User', '343434', 0, 0, 'yes', '', '', '', 'no', 'english'),
(29, 'keypluss', '56dd26e23a4d2e5583f4c8a4f03274f377448fa184cb1612f425d23a9526bffcc9a3d9a5d7f7a05c8d3068c439c2e69669aea1ef90687ccbf68d30d2c612e034', '2021-11-15', 'keyplussgotgame@gmail.com', '294fe50a1fb646c90a17df3263d16629', 'Im new to Squared!', 25, 'no', 'no', 1637024638, 0, 1636938462, 'Normal User', '343434', 0, 0, 'yes', '', '', '', 'no', 'english'),
(30, 'username', '989c8ac3e493a2f1aefe17167147aeea126deaa97fea603d5ffcbbc483ab7f58466701d5f0f62f663fd452bf68db44fe38b4783a7ae3076b3923c3c39ac34ba8', '2021-11-15', 'rdr@email.com', '3fb378bcd17132bed0b2a53f7df24db7', '<form><fieldset><legend>username</legend>username <input name=\"username\" type=\"radio\" value=\"no\" /></fieldset></form>', 50, 'no', 'no', 1637192606, 0, 1637106292, 'Normal User', '343434', 0, 0, 'yes', '', '', '', 'no', 'english'),
(31, '100', '165429072eb126debd8c6cfa4aa774eb8c70cc9a6238df2271a423d96275f3dbb8af54c2477c2ed921626889276154511a88af59277b9ac2ccf5ffd51417ee27', '2021-11-15', 'gowice3207@gmail.com', 'af00003e13da71e1d12afced502949e5', 'Im new to Squared!', 0, 'no', 'no', 0, 0, 0, 'Normal User', '343434', 0, 0, 'no', '', '', '', 'no', 'english'),
(32, 'aaa', '5f19bc7d0b8ee62026d512b65ffdd86b1050e1507d5a0c87165fe66677eaee25a237aa3c6f494ec863c854e6c58f9233205577ec4a8f50becf9b2c2ea0b8d5ec', '2021-11-15', 'calvinxanuka@gmail.com', 'f67881fd918fd84dee1337a7a0e1dfba', 'Im new to Squared!', 50, 'no', 'no', 1637395006, 0, 1637309364, 'Normal User', '343434', 0, 0, 'yes', '', '', '', 'no', 'english'),
(33, 'nya', 'b37a9a770955598ab8487586377df0e65b1a48a5258a891f90b25808d5b545a7e1d077d42d99cc466a177ce031b014c8b9e05ff6e75d4c81728480cfa17160d2', '2021-11-15', 'szymon.try07@gmail.com', 'c5d9234bc697db2b32879f36f6bf8d93', 'Im new to Squared!', 50, 'no', 'no', 1637334537, 0, 1637312129, 'Normal User', '343434', 0, 0, 'yes', '', '', '', 'no', 'english'),
(34, 'Nox', '016999929bb053e862e9c47f4d06220e9f9c97b739f959857f253edd92eaae34a60c1b77357629f526411e53c2e7363efc9cd5852c570e130a7b67f8ed31afa6', '2021-11-16', 'elijhageorge2000@gmail.com', '7e8fc24bcba1880fa790fff1ea772f22', 'Im new to Squared!', 25, 'no', 'no', 1637189456, 0, 1637107626, 'Normal User', '343434', 0, 0, 'yes', '', '', '', 'no', 'english'),
(35, 'Banned', '51f67d5651e05f6822520a775168078123b4e74f00018c822f33b733fd05dd50e210d39bf3b690e83cf7d94e52d1973db16ee82ba182c26ebfed74bd9bdc72f1', '2021-11-17', 'Banned@BannedYourAss.shit', '06113352072f49799b94e552995993c5', 'Im new to Squared!', 25, 'no', 'no', 1637191192, 0, 1637105271, 'Normal User', '343434', 0, 0, 'no', 'yes', 'skill issue', 'damn bro u got a skill issue fucker', 'no', 'english'),
(36, 'NopeNope', 'e6931aa0b5deb1532b56f691d7b1e33bfc334e136a98d7421cd025437ecd237844a58f2c4900ab6cb5415f20c59175f11165a22950f0f47d7bf19836d8dd0ea0', '2021-11-17', 'nigga@a.nigga', '26909b843f80aa520c9406cb738051dd', 'Im new to Squared!', 25, 'no', 'no', 1637197023, 0, 1637110629, 'Normal User', '343434', 0, 0, 'no', 'yes', 'not funny', 'the n word isnt funny especially when your calling someone the n word', 'no', 'english'),
(37, 'lol', 'daa78cfb4e6bcd71f337609797355c146b88396c061f546c6e5fef5efa2e46ccd71e9d614afe08543d4e1e5115ae002378ac998580e1c83632852d94da0453b7', '2021-11-17', 'tylerjudec@gmail.com', 'd118025a3bf6e47aa1d64adb099e7c71', 'Im new to Squared!', 50, 'no', 'no', 1637288251, 0, 1637201884, 'Normal User', '343434', 0, 0, 'no', 'no', '', '', 'no', 'english'),
(38, 'watcha27', '1523a5a2d61dcc53125f9a4e7c3fda88cd840699cbf3607a4d6be2fa9eb3c449bf2c1e02ebdc098b5ecc2c9ac331c860504185c24bd814a2ecac95d7356315cc', '2021-11-18', 'sparrowizforlife@gmail.com', 'b97ae4e76adba7e8982afa888c74b0ad', 'Im new to Squared!', 50, 'no', 'no', 1637322189, 0, 1637235802, 'Normal User', '343434', 0, 0, 'no', 'no', '', '', 'no', 'english'),
(39, 'Spoon', '15e3654323907c9647c2da13acc550e27550656dd63b8673d41dd83ea536811704654d0998202f2824b097a6cb253acf78ff52445a072913f94b41a61fb52ab6', '2021-11-19', 'spoonguy1337@gmail.com', '747fab58c2a2cd6c9f8a93e47c648669', 'Im new to Squared!', 75, 'no', 'no', 1637577194, 0, 1637490815, 'Normal User', '343434', 0, 0, 'yes', 'no', '', '', 'no', 'english'),
(40, 'izzypizzy', '05648a2648f7098a05c92c3c99682c95f53501fb0a7700d49158e0e98fb3891d4d3f6fa6d0b7878f4dfb9b6c4b0e41e3b82ec9591634d4dcca4ea473af295d8f', '2021-11-19', 'fortniteplazer@gmail.com', 'fa67dfe46fa51afa8ad6f2b298e77386', 'Im new to Squared!', 75, 'no', 'no', 1637515765, 0, 1637433375, 'Normal User', '343434', 0, 0, 'no', 'no', '', '', 'no', 'english'),
(41, 'GodOfPwnage', 'e745cf0ca82dfe60903ae54681d7463921abb2658d1096169889cefcf2eca7e9cbd7ee96e64aaf859280e8f8df18b1419440592aaaffbc5ecf0a46b821f2dbf5', '2021-11-19', 'builderman663@gmail.com', '6a635851d9da4abfefabbfcab233d082', 'Im new to Squared!', 50, 'no', 'no', 1637418457, 0, 1637400426, 'Normal User', '343434', 0, 0, 'yes', 'no', '', '', 'no', 'english'),
(43, 'idkwhatnametoget', '868190396cbc4ca360e16f6670722d5f952c968f4a4033a523afcec3a641bc7475b69cdad3a440b6af4bbe5d0d19ea5ba831ebefca1f48375351e84fcbb6c2ba', '2021-11-19', 'idkwhatnametoget33@protonmail.com', 'b788a3ed7ccd589e43c5b979df212927', 'Im new to Squared!', 50, 'no', 'no', 1637429135, 0, 1637343587, 'Normal User', '343434', 0, 0, 'yes', 'no', '', '', 'no', 'english'),
(44, 'fat', 'c2376b884d082e3cf9a6715e7f01932bb3cc557c049273e4c41547843b166040b3400b101e97ef5ff97cef97036d3bdfa1d1bdaa4d6c7597a668d88935bf7358', '2021-11-19', 'asdfewadfvjds@gmail.com', '991266ee7f6b55633112c2677440f77d', 'Im new to Squared!', 50, 'no', 'no', 1637432697, 0, 1637346344, 'Normal User', '343434', 0, 0, 'no', 'no', '', '', 'no', 'english');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assets`
--
ALTER TABLE `assets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feed`
--
ALTER TABLE `feed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invites`
--
ALTER TABLE `invites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kxp`
--
ALTER TABLE `kxp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pm`
--
ALTER TABLE `pm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `secretchat`
--
ALTER TABLE `secretchat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `secretchat2`
--
ALTER TABLE `secretchat2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assets`
--
ALTER TABLE `assets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feed`
--
ALTER TABLE `feed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1001;

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `invites`
--
ALTER TABLE `invites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `kxp`
--
ALTER TABLE `kxp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `secretchat`
--
ALTER TABLE `secretchat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=360;

--
-- AUTO_INCREMENT for table `secretchat2`
--
ALTER TABLE `secretchat2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
