-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2018 at 11:28 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digitalration`
--

-- --------------------------------------------------------

--
-- Table structure for table `aepds_kerala`
--

CREATE TABLE `aepds_kerala` (
  `id` int(2) NOT NULL,
  `fps` int(3) DEFAULT NULL,
  `dealer` varchar(22) DEFAULT NULL,
  `tot_crd` int(3) DEFAULT NULL,
  `district` int(2) DEFAULT NULL,
  `mobile_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aepds_kerala`
--

INSERT INTO `aepds_kerala` (`id`, `fps`, `dealer`, `tot_crd`, `district`, `mobile_no`) VALUES
(1, 100, 'Lenin', 514, 1, '+919809256332'),
(2, 101, 'Sajeev.K.R', 473, 2, '+919689252135'),
(3, 102, 'Abdul Rehmankunju', 622, 3, '+919863056332'),
(4, 103, 'Ushakumari', 488, 4, '-NA-'),
(5, 104, 'Raveendranath', 505, 5, '+919605053168'),
(6, 105, 'Vijayakumari', 787, 6, '-NA-'),
(7, 106, 'Ansar.M', 618, 7, '+919605046276'),
(8, 107, 'Umayamma', 468, 8, '-NA-'),
(9, 108, 'Nadeer Ahammed', 586, 9, '+919905046795'),
(10, 109, 'Sunilkumar', 378, 10, '+919125046623'),
(11, 110, 'Abdul Latheef', 554, 11, '+919325046432'),
(12, 111, 'Zeenath', 664, 12, '-NA-'),
(13, 112, 'Mani.S', 439, 13, '+919805046532'),
(14, 113, 'Abdul Nisar', 447, 14, '+919165046468'),
(15, 114, 'Sivanandan', 705, 1, '+919465046568'),
(16, 115, 'Ammini Amma', 140, 2, '-NA-'),
(17, 116, 'K.K.Vijayamma', 404, 3, '-NA-'),
(18, 117, 'K.G.Manikkuttan', 428, 4, '+919595046168'),
(19, 118, 'Unnikrishna Panicker', 432, 5, '+919135046426'),
(20, 119, 'Suhra Beevi', 320, 6, '-NA-'),
(21, 120, 'A.Naseer', 595, 7, '+919605046268'),
(22, 121, 'Santhosh.R', 714, 8, '+919805046325'),
(23, 122, 'Habeeb Muhammed', 609, 9, '+919905046786'),
(24, 123, 'J.B.Anitha', 516, 10, '-NA-'),
(25, 124, 'Shanitha.M', 462, 11, '-NA-'),
(26, 125, 'Valsalakumari', 423, 12, '-NA-'),
(27, 126, 'Thomas John Kurichiyil', 404, 13, '+919805046526'),
(28, 127, 'Jameelathu Beevi', 534, 14, '-NA-'),
(29, 128, 'Valsalakumari', 565, 1, '-NA-'),
(30, 129, 'Salim.H', 415, 2, '+919245046113'),
(31, 130, 'K.A.Rasheed', 446, 3, '+919125046909'),
(32, 131, 'N.Lalitha', 557, 4, '-NA-'),
(33, 132, 'Damodharan K K', 432, 5, '+919135046412'),
(34, 133, 'Abdul Rasak', 592, 6, '+919605046275'),
(35, 134, 'B.Harikumar', 478, 7, '+919805046315'),
(36, 135, 'Nafeesa Beevi', 462, 8, '-NA-'),
(37, 136, 'Y.Naseema', 469, 9, '-NA-'),
(38, 137, 'Jonachan G Kurichiyil', 392, 10, '+919125046629'),
(39, 138, 'Thulasee Bai', 470, 11, '-NA-'),
(40, 139, 'P.H.Nisar', 583, 12, '+919595046462'),
(41, 140, 'Rajeev Nath', 173, 13, '+919805046536'),
(42, 141, 'Jalaludeen Kunju', 539, 14, '+919165046464'),
(43, 149, 'Saradamma', 319, 1, '-NA-'),
(44, 165, 'M.Mohanan', 544, 2, '+919245046138'),
(45, 169, 'Sajeed', 721, 3, '+919125046946'),
(46, 172, 'V.Ravi', 484, 4, '+919595046164'),
(47, 175, 'K.Surendran', 489, 5, '+919135046426'),
(48, 176, 'P.D.John', 544, 6, '+919155046214'),
(49, 178, 'K Sasidharan', 429, 7, '+919605046276'),
(50, 179, 'Shiras Khan S', 358, 8, '+919605046556'),
(51, 186, 'Y.Shanimol', 449, 9, '-NA-'),
(52, 187, 'Venugopalan', 351, 10, '+919595046467'),
(53, 242, 'Indira Devi.D', 494, 11, '-NA-'),
(54, 246, 'Thankamani.K', 408, 12, '-NA-'),
(55, 251, 'P.K.Khadeeja', 340, 13, '-NA'),
(56, 252, 'Subbaraman', 0, 14, '+919245046132'),
(57, 94, 'Sasikumar', 562, 1, '+919125046945'),
(58, 95, 'Madhavan Pillai', 545, 2, '+919155046216'),
(59, 97, 'Raveendranath', 773, 3, '+919125046624'),
(60, 98, 'Bhuvanendran', 432, 4, '+919325046449'),
(61, 99, 'Sunilkumar', 636, 5, '+919595046431'),
(62, 96, 'Kunjiraman', 300, 6, '+919165046449'),
(63, 93, 'Chako', 158, 7, '+919465046576'),
(64, 92, 'Thomas', 235, 8, '+919595046100'),
(65, 91, 'Damodharan', 0, 9, '+919805046319'),
(66, 90, 'Ravindran', 14, 10, '+919905046794'),
(67, 89, 'Reji P', 135, 11, '+919325046431'),
(68, 88, 'Renjith', 583, 12, '+919465046563'),
(69, 87, 'Velayudhan', 479, 13, '+918593091892'),
(70, 86, 'Sajith Thomas', 152, 14, '+919633172356');

-- --------------------------------------------------------

--
-- Table structure for table `de_code`
--

CREATE TABLE `de_code` (
  `pid` int(10) NOT NULL,
  `file_name` varchar(50) NOT NULL,
  `text_decoded` varchar(300) NOT NULL,
  `time_stamp` datetime(6) DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `de_code`
--

INSERT INTO `de_code` (`pid`, `file_name`, `text_decoded`, `time_stamp`) VALUES
(1, 'main-qimg-5b208acbe34420e5272836ce26c53505.png', 'http://qr.vc/qrd.by-facebook', '2017-12-31 00:30:37.770145'),
(2, '1ea1a67ad9aae1f2ed7825d83af6812f.png', 'Item Packed : rice ,\r\n Quantity : 1 Kg ,\r\n Packed Date : 2017-12-28 11:28:30 PM ,\r\n Created By : Super Admin', '2017-12-31 00:31:43.916716'),
(3, '3ca16541ecef1f575a77a6c6a66213cc.png', 'Item Packed : sugar ,\r\n Quantity : 3 Kg ,\r\n Packed Date : 2017-12-28 11:52:46 PM ,\r\n Created By : Super Admin', '2017-12-31 00:32:55.073494'),
(4, 'download.png', '1@PZ2Mv0NAcFcTlgIYolZ5CG4RC9V4H92tLSCQqogo8Jfu0bXSGd1qtE/h,29fHDk3jT+8xXq32i6e+ClRliuTyy+hoQx/DQzF1Rg0=,DfhcUjlwOe08Gj/MBiaRTQ==', '2018-02-04 07:39:23.994315'),
(5, 'e55b2cfe0f5779c7cfadbc8fc48dd118.png', 'Item Packed : rice ,\r\n Quantity : 2 Kg ,\r\n Packed Date : 2018-02-05 11:36:57 AM ,\r\n Created By : Super Admin', '2018-02-05 11:38:03.749539'),
(6, 'd57ebcd5c356a55969d25dd9b8914af7.png', 'Item Packed : rice ,\r\n Quantity : 1 Kg ,\r\n Packed Date : 2018-01-22 08:33:08 AM ,\r\n Created By : Super Admin', '2018-02-16 11:20:55.381022'),
(7, '8d3ddb68241a3ab9a79300c94fdb00d9.png', 'Item Packed : rice ,\r\n Quantity : 2 Kg ,\r\n Packed Date : 2018-02-19 11:09:50 PM ,\r\n Created By : Super Admin', '2018-02-20 09:11:23.239480'),
(8, '6809c7049c8e1e93987b19e898db0f82.png', 'Item Packed : rice ,\r\n Quantity : 2 Kg ,\r\n Packed Date : 2017-12-30 11:39:15 PM ,\r\n Created By : Super Admin', '2018-02-21 20:26:01.812895');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `id` int(2) NOT NULL,
  `name` varchar(18) DEFAULT NULL,
  `val` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `name`, `val`) VALUES
(1, 'Alappuzha', 'AL'),
(2, 'Ernakulam', 'ER'),
(3, 'Idukki', 'ID'),
(4, 'Kannur', 'KN'),
(5, 'Kasaragod', 'KS'),
(6, 'Kollam', 'KL'),
(7, 'Kottayam', 'KT'),
(8, 'Kozhikode', 'KZ'),
(9, 'Malappuram', 'MA'),
(10, 'Palakkad', 'PL'),
(11, 'Pathanamthitta', 'PA'),
(12, 'Thiruvananthapuram', 'TR'),
(13, 'Thrissur', 'TH'),
(14, 'Wayanad', 'WA');

-- --------------------------------------------------------

--
-- Table structure for table `notify`
--

CREATE TABLE `notify` (
  `id` int(10) NOT NULL,
  `mesg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notify`
--

INSERT INTO `notify` (`id`, `mesg`) VALUES
(1, 'Distribution is in Progress for the month of Feb-2018'),
(2, 'Application For New Card is Now Avilable in Nearest Ration Shop'),
(4, 'To Make Changes In Ration Card Visit Nearest Ration Shop ! ');

-- --------------------------------------------------------

--
-- Table structure for table `prch_hstry`
--

CREATE TABLE `prch_hstry` (
  `p_id` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `rationno` varchar(50) NOT NULL,
  `p_date` varchar(10) NOT NULL,
  `item` text NOT NULL,
  `amnt` float NOT NULL,
  `p_success` varchar(10) NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prch_hstry`
--

INSERT INTO `prch_hstry` (`p_id`, `username`, `rationno`, `p_date`, `item`, `amnt`, `p_success`) VALUES
(1, 'abc', 'APL123', '2017/11/20', 'Rice,Wheat,Sugar,Kerosene', 225, 'YES'),
(2, 'abc', 'APL123', '2017/11/20', 'Rice,Wheat,Sugar,Kerosene', 125, 'YES'),
(4, 'abc', 'APL123', '2017/11/20', 'Rice,Wheat,Sugar,Kerosene', 125, 'NO'),
(6, 'user', '9876541', '2017/11/20', 'Rice,Wheat,Sugar,Kerosene', 125, 'YES'),
(7, 'abc', 'APL123', '2017/11/20', 'Rice,Wheat,Sugar,Kerosene', 125, 'NO'),
(8, 'abc', 'APL123', '2017/11/20', 'Rice,Wheat,Sugar,Kerosene', 125, 'YES'),
(9, 'asd', 'dasfy12', '2017/11/20', 'Rice,Wheat,Sugar,Kerosene', 225, 'YES'),
(10, 'User', '9876541', '2017/11/27', 'Rice,Wheat,Sugar,Kerosene', 225, 'NO');

-- --------------------------------------------------------

--
-- Table structure for table `qr_gen`
--

CREATE TABLE `qr_gen` (
  `pid` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `user_created` varchar(50) NOT NULL,
  `date_of_creation` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qr_gen`
--

INSERT INTO `qr_gen` (`pid`, `name`, `user_created`, `date_of_creation`) VALUES
(38, 'a066dd123e75479db623f84ee82e63da.png', 'Super Admin', '2017-12-28 11:28:25 PM'),
(39, '1ea1a67ad9aae1f2ed7825d83af6812f.png', 'Super Admin', '2017-12-28 11:28:30 PM'),
(40, 'cd0b007015ceada16c0303c8321eb0ae.png', 'Super Admin', '2017-12-28 11:28:34 PM'),
(41, 'f3a1632229b26dfc76d3efc36b5bfa5f.png', 'Super Admin', '2017-12-28 11:51:49 PM'),
(42, '95529c0eff21dc5a4e9dcd511f7a7cc4.png', 'Super Admin', '2017-12-28 11:51:55 PM'),
(43, 'd8ed828fa4e4b4154cd6e3f0d17c7171.png', 'Super Admin', '2017-12-28 11:51:59 PM'),
(44, 'c7739299fd8b8bba542381cdba66371a.png', 'Super Admin', '2017-12-28 11:52:19 PM'),
(45, 'a776a234ac0c4f4677057f52033ff3c7.png', 'Super Admin', '2017-12-28 11:52:33 PM'),
(46, '7a5136867a4ccd3a7ac5b2f620eb78ad.png', 'Super Admin', '2017-12-28 11:52:38 PM'),
(47, 'db732cd4340a13e48ed3e9f2e5c8d571.png', 'Super Admin', '2017-12-28 11:52:42 PM'),
(48, '3ca16541ecef1f575a77a6c6a66213cc.png', 'Super Admin', '2017-12-28 11:52:46 PM'),
(49, '074e2729fc5651daeda38b7088256615.png', 'Super Admin', '2017-12-28 11:52:50 PM'),
(50, '46d9f3a6331ce9978d2749c897fbeabe.png', 'Super Admin', '2017-12-30 11:27:50 PM'),
(51, '6809c7049c8e1e93987b19e898db0f82.png', 'Super Admin', '2017-12-30 11:39:15 PM'),
(52, 'd1e60febd41c2d4bcfb5068c9f6bf128.png', 'Super Admin', '2018-01-12 07:15:22 PM'),
(53, '5c724417f47939049500b791a964ea6d.png', 'Super Admin', '2018-01-20 12:01:21 AM'),
(54, 'd57ebcd5c356a55969d25dd9b8914af7.png', 'Super Admin', '2018-01-22 08:33:08 AM'),
(55, 'e55b2cfe0f5779c7cfadbc8fc48dd118.png', 'Super Admin', '2018-02-05 11:36:57 AM'),
(56, '8d3ddb68241a3ab9a79300c94fdb00d9.png', 'Super Admin', '2018-02-19 11:09:50 PM'),
(57, '8370e54af9546ef7e776be39073301b9.png', 'Super Admin', '2018-02-20 09:11:33 AM');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `fullname` varchar(50) NOT NULL,
  `aadarno` varchar(50) NOT NULL,
  `rationno` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL DEFAULT 'user',
  `active` varchar(10) NOT NULL,
  `salary` double NOT NULL,
  `card_catg` varchar(20) NOT NULL,
  `last_access` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`fullname`, `aadarno`, `rationno`, `username`, `email`, `password`, `role`, `active`, `salary`, `card_catg`, `last_access`) VALUES
('abc', 'abc123', 'APL123', 'abc', 'dsxt@d.com', '202cb962ac59075b964b07152d234b70', 'user', 'yes', 27000, 'BPL', '2017-11-19 19:08:13'),
('Arun', '123456789', '987654321', 'ov', 'arun@punya.com', '202cb962ac59075b964b07152d234b70', 'admin', 'yes', 0, '', '2017-11-16 14:56:42'),
('Super Admin', 'AAD12345', 'RAT124692', 'root', 'arunov8545@gmail.com', '63a9f0ea7bb98050796b649e85481845', 'admin', 'yes', 2548612, 'APL', '2017-12-28 14:54:06'),
('just user', '1234567', '9876541', 'user', 'user@punya.com', '202cb962ac59075b964b07152d234b70', 'user', 'yes', 67000, 'APL', '2017-11-16 15:29:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aepds_kerala`
--
ALTER TABLE `aepds_kerala`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `de_code`
--
ALTER TABLE `de_code`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notify`
--
ALTER TABLE `notify`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prch_hstry`
--
ALTER TABLE `prch_hstry`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `qr_gen`
--
ALTER TABLE `qr_gen`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aepds_kerala`
--
ALTER TABLE `aepds_kerala`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT for table `de_code`
--
ALTER TABLE `de_code`
  MODIFY `pid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `notify`
--
ALTER TABLE `notify`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `prch_hstry`
--
ALTER TABLE `prch_hstry`
  MODIFY `p_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `qr_gen`
--
ALTER TABLE `qr_gen`
  MODIFY `pid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
