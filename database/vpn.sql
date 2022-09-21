-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2022 at 03:56 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vpn`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `messageid` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`messageid`, `name`, `email`, `message`) VALUES
(1, 'hatim', 'hatim@gmail.com', 'when should i start'),
(2, '', 'vineethkm16@gmail.com', '567876543'),
(5, 'weofnq', 'woebf2@JS.FJ', 'OSJBQK SVNW');

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `equipmentid` int(11) NOT NULL,
  `equipmentname` varchar(35) NOT NULL,
  `equipmenttype` varchar(35) NOT NULL,
  `description` varchar(500) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `photo` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`equipmentid`, `equipmentname`, `equipmenttype`, `description`, `price`, `photo`) VALUES
(2, 'Generic Foldable Electric Treadmill', 'Treadmill', 'Motor: 2.5HP (Peak)\r\nRunning Area: 1600x1085mm\r\nSpeed: 1.0-12km/h\r\nAssembly Size: 1280*685*1595MM\r\n', '69999', '<img src=\"http://localhost/fitness//images/equcat/treadmills/treadmill.jpg\" '),
(3, 'Generic Foldable Electric Treadmill', 'Treadmill', 'Motor: 6.0HP (Peak)\r\nRunning Area: 1600x1085mm\r\nSpeed: 1.0-12km/h\r\nIncline: 0-20%\r\nAssembly Size: 12', '120000', '<img src=\"http://localhost/fitness/images/equcat/treadmills/treadmill4.jpg\" '),
(4, 'ZHE JIANG Walking/Jogging Folding P', 'Treadmill', 'maximum user weight 120kg\r\nAirshock absorption ready\r\nSpeed range 0.8-6.0km/her\r\none piece no instal', '64950', '<img src=\"http://localhost/fitness/images/equcat/treadmills/treadmil3.jpg\" '),
(5, 'Generic Mini Treadmill Multi-functi', 'Treadmill', 'Name:Multi-function stepping machine\r\nMaterial: High quality steel, ABS environmental protection mat', '14999', '<img src=\"http://localhost/fitness/images/equcat/treadmills/minitreadmill.jpg\" '),
(6, 'Generic Foldable Electric Treadmill', 'Treadmill', 'Motor: 6.0HP (Peak)\r\nRunning Area: 1050x 390mm\r\nSpeed: 1.0-10km/h\r\nIncline: 0-20%\r\nAssembly Size: 12', '115000', '<img src=\"http://localhost/fitness/images/equcat/treadmills/treadmill2.jpg\" '),
(7, 'Generic Magnetic Recumbent Exercise', 'Cardio', 'SKU: GE840SE0TKDUVNAFAMZ\r\nMain Material: steel\r\nSize (L x W x H cm): 21.6 x 10.2 x 1 cm\r\nWeight (kg)', '100000', '<img src=\"http://localhost/fitness/images/equcat/cadio/indoorcycles/recumbent%20bike%202.jpg\"'),
(8, 'Generic Super Recumbent bike', 'Cardio', 'Use: Regular\r\nFlywheel: 18Kg\r\nBrake: Friction & emergency lock\r\nSettings: Saddle - vertical & horizo', '40000', '<img src=\"http://localhost/fitness/images/equcat/cadio/indoorcycles/recumbentbikes.jpg\" '),
(9, 'Generic Elliptical Cross Trainer', 'Cardio', 'High Quality\r\nDomestic Use\r\nLess space occupied\r\nSafe for Family Use\r\nNO electric connections requir', '100000', '<img src=\"http://localhost/fitness/images/equcat/cadio/indoorcycles/recubik.jpg\" '),
(10, 'Generic Wonder Core 6 Pack Care Exe', 'Strength Training', 'Back, Shoulder, Leg and Core AB Training \r\nDaily 10 Minutes Exercise only\r\nPerform push-ups, sit-ups', '124999', '<img src=\"http://localhost/fitness/images/equcat/strengthtraining/strength1.jpg\"'),
(11, 'Six Pack Care Smart Wondercore 6 In', 'Strength Training', 'Works out your entire core upper, middle, lower abs & oblique\'s\r\n Combines 6 great exercises ', '4700', '<img src=\"http://localhost/fitness/images/equcat/strengthtraining/st2.jpg\" '),
(12, 'Generic 1 Pair Rubber Coated Hexago', 'Strength Training', '★A set of 2 dumbbells：2x5kg, 2x7.5kg, 2x10kg, 2x17.5, 2x20kg, 2x30kg ★A great way to build muscles, ', '27500', ' <img src=\"http://localhost/fitness/images/equcat/strengthtraining/st3.jpg\" '),
(13, 'LIVEUP SPORTS EXERCISE KETTLEBELL E', 'Strength Training', 'Heavy durable plastic kettle bell filled with cement, Made for home or commercial use\r\nThis Exercise Kettle Bell Weights is ideal for building muscle and getting fit.\r\nEvery kettle is clearly Marked with the weight size to make easy to identify the weight size\r\nComes in very unique modern colors, choose you weight size', '4190', ' <img src=\"http://localhost/fitness/images/equcat/strengthtraining/st4.jpg\" '),
(14, 'Revoflex Xtreme Fitness Resistance ', 'Cardio', 'FULL BODY WORKOUT: The Ab roller wheel helps you work on the chest, back, shoulders, and abs in one device, Strengthen your upper, middle, lower, and oblique abdominal. It can be used to perform many different types of exercise (upper and lower body).\r\nGETTING FIT ANYWHERE: Portable design, lightweight, It can be used at home, in the gym or at your office. You can also take it when you travel. Storage bag included.\r\nCATERING FOR INDIVIDUAL NEEDS: 5 button length adjustment-by adjust the pull adj', '12999', '<img src=\"http://localhost/fitness/images/equcat/cadio/indoorcycles/revoflex.jpg\" '),
(15, 'LIVEUP SPORTS VENTILATED WEIGHT LIF', 'Accessories', 'Extra Grip support.\r\nFlexible Finger Loop.\r\nSecure fit wrist closure.\r\nLightweight, core surrounded.\r\nOptimum and Cushioning.\r\nGreat protection while training.\r\nBest for all Fitness activities.', '1050', ' <img src=\"http://localhost/fitness/images/equcat/accessories/liveupgloves.jpg\" '),
(16, 'Generic Portable Yoga Pilates Mat M', 'Accessories', 'Type of sports:Fitness\r\nMaterial:Canvas\r\nBrand Name:IX\r\nCapacity:18L18', '1181', '<img src=\"http://localhost/fitness/images/equcat/accessories/mat.jpg\" '),
(18, 'Generic Sleep Wireless Headphone BT', 'Accessories', 'Color: Black\r\n\r\nMaterial: Knitting\r\n\r\nBT Version: 5.0\r\n\r\nTransmission Range: 15m/49ft\r\n\r\nItem Size: 180*55*20mm/7.1*2.2*0.8in\r\n\r\nWeight: 67g\r\n', '990', '<img src=\"http://localhost/fitness/images/equcat/accessories/headband.jpg\" '),
(19, 'Generic Sports Arm Bag', 'Accessories', 'UNIVERSAL COMPATIBILITY -- This cell phone armband perfectly fits have a screen from 4\" to 6\" without bulky cases.\r\n-PREMIUM MATERIAL -Waterproof running armband is made of breathable and elastic Lycra and eco-friendly Neoprene which is able to twist, bend but not stretch out of shape. It is ultra slim, soft and lightweight for comfort and convenience during fitness. The TPU materials is touch sensitive to enable full touch screen function.\r\n-ADJUSTABLE SIZE -- The cellphone holder pouch contain', '699', '<img src=\"http://localhost/fitness/images/equcat/accessories/sportsarmbag.jpg\" '),
(20, 'Generic Waist Trimmer Belt Weight L', 'Accessories', 'sweat belt\r\nMaterial:Neoprene\r\nTargets stomach fat\r\nHelps loose weight around midriff', '1500', '<img src=\"http://localhost/fitness/images/equcat/accessories/sweatband.jpg\"');

-- --------------------------------------------------------

--
-- Table structure for table `ofintess`
--

CREATE TABLE `ofintess` (
  `messageid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ofintess`
--

INSERT INTO `ofintess` (`messageid`, `name`, `email`, `phone`) VALUES
(1, 'aljf', 'sdj@lj.slgjn', '219124091'),
(2, 'abcd', 'abcd@abc.com', '19823113');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderid` int(11) UNSIGNED NOT NULL,
  `nameoncard` varchar(30) NOT NULL,
  `creditcardno` int(11) NOT NULL,
  `expirymonth` varchar(20) NOT NULL,
  `CVV` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderid`, `nameoncard`, `creditcardno`, `expirymonth`, `CVV`) VALUES
(9, 'Hatim Karimjee', 2147483647, '2021-12', 231),
(11, 'John Jones', 445323434, '2021-10', 654),
(14, 'Joyce Roy', 2147483647, '2021-07', 782),
(17, 'Joe Hawks', 2147483647, '2021-10', 888),
(18, 'Panel Johnson', 43454323, '2021-09', 543),
(37, 'James Roberts', 2147483647, '2021-11', 223);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(6) UNSIGNED NOT NULL,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `email` varchar(60) DEFAULT NULL,
  `phone` varchar(40) DEFAULT NULL,
  `Postcode` int(11) DEFAULT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(80) NOT NULL,
  `userr_regdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `fname`, `lname`, `email`, `phone`, `Postcode`, `username`, `password`, `userr_regdate`) VALUES
(1, 'John', 'Jones', 'john@gmail.com', '0744324534', 100, 'Johny', '81dc9bdb52d04dc20036dbd8313ed055', '2021-06-03 18:07:15'),
(2, 'Joyce', 'Roy', 'joyce@gmail.com', '0723432546', 100, 'Joyce', '827ccb0eea8a706c4c34a16891f84e7b', '2021-06-05 12:20:57'),
(6, 'Hatim', 'Karimjee', 'hatim1@gmail.com', '0722123123', 100, 'Hatim', '81dc9bdb52d04dc20036dbd8313ed055', '2021-06-11 14:36:42'),
(8, 'VINEETH ', 'KM', 'vineethkm2001@gmail.com', '9110671177', 574225, 'vineethkm2001@gmail.', '827ccb0eea8a706c4c34a16891f84e7b', '2022-09-15 23:54:46'),
(9, 'vineeth', 'm', 'vineethkm16@gmail.com', '9110671177', 574225, 'vineethkm2001@gmail.', '827ccb0eea8a706c4c34a16891f84e7b', '2022-09-15 23:55:00'),
(10, 'VINEETH', 'KM', 'vineethkm@gmail.com', '9110671177', 574225, 'vineethkm@gmail.com', 'e19d5cd5af0378da05f63f891c7467af', '2022-09-15 23:57:11');

-- --------------------------------------------------------

--
-- Table structure for table `wgain`
--

CREATE TABLE `wgain` (
  `messageid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wgain`
--

INSERT INTO `wgain` (`messageid`, `name`, `email`, `phone`) VALUES
(1, '', 'vineethkm16@gmail.com', '9110671177'),
(2, 'vineethkm', 'vineethkm16@gmail.com', '9110671177'),
(3, 'vineethkm', 'vineethkm16@gmail.com', '123813902');

-- --------------------------------------------------------

--
-- Table structure for table `wloss`
--

CREATE TABLE `wloss` (
  `messageid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wloss`
--

INSERT INTO `wloss` (`messageid`, `name`, `email`, `phone`) VALUES
(1, 'dbva', 'dss@ns.sdvjn', '1947123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`messageid`),
  ADD UNIQUE KEY `user` (`name`);

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`equipmentid`);

--
-- Indexes for table `ofintess`
--
ALTER TABLE `ofintess`
  ADD PRIMARY KEY (`messageid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `wgain`
--
ALTER TABLE `wgain`
  ADD PRIMARY KEY (`messageid`);

--
-- Indexes for table `wloss`
--
ALTER TABLE `wloss`
  ADD PRIMARY KEY (`messageid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `messageid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `equipmentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `ofintess`
--
ALTER TABLE `ofintess`
  MODIFY `messageid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `wgain`
--
ALTER TABLE `wgain`
  MODIFY `messageid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wloss`
--
ALTER TABLE `wloss`
  MODIFY `messageid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
