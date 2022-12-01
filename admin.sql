-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2021 at 09:54 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `admintable`
--

CREATE TABLE `admintable` (
  `id` int(25) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `isAdmin` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admintable`
--

INSERT INTO `admintable` (`id`, `username`, `password`, `isAdmin`) VALUES
(1, 'admin', '123456', 1),
(2, 'user', '1234', 0);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `isAdmin` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `firstname`, `lastname`, `email`, `password`, `isAdmin`) VALUES
(4, 'mohammad', 'idris', 'nazir12345@gmail.com', '12345', 0),
(5, 'eldeen', 'idris', 'eldeen@gmail.com', 'bcaa8809b720d26b9b1eea432bd50fff', 0),
(6, 'mohammad', 'Saminu', 'mohammadidris1960@gmail.com', 'bcaa8809b720d26b9b1eea432bd50fff', 1),
(7, 'mohammad', 'idris', 'shamz@gmail.com', 'bcaa8809b720d26b9b1eea432bd50fff', 0),
(8, 'nazeer', 'ahmad', 'nazeerahmad32@gmail.com', '0dc9f5881b2f9066773dc0d56b8330ed', 0),
(9, 'Aminu', 'virus', 'virus@gmail.com', 'bcaa8809b720d26b9b1eea432bd50fff', 1),
(10, 'Aminu', 'virus', 'virus12@gmail.com', 'bcaa8809b720d26b9b1eea432bd50fff', 1),
(11, 'Aminu', 'idris', 'shamsu@gmail.com', 'bcaa8809b720d26b9b1eea432bd50fff', 1),
(12, 'mohammad', 'Saminu', 'eldeen1@gmail.com', 'bcaa8809b720d26b9b1eea432bd50fff', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `surName` varchar(100) NOT NULL,
  `middleName` varchar(100) DEFAULT NULL,
  `dob` date NOT NULL,
  `gender` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `phoneNumber` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `lga` varchar(100) NOT NULL,
  `category` varchar(100) DEFAULT NULL,
  `class` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirmPass` varchar(100) NOT NULL,
  `testScore` int(11) NOT NULL,
  `admstatus` varchar(100) NOT NULL,
  `admNumber` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstName`, `surName`, `middleName`, `dob`, `gender`, `address`, `phoneNumber`, `state`, `lga`, `category`, `class`, `username`, `password`, `confirmPass`, `testScore`, `admstatus`, `admNumber`) VALUES
(7, 'Abdullahi', 'Ishaq', 'Maigari', '1990-12-02', 'male', 'Maigatari town, JIgawa State.', '2147483647', '', 'Maigatari', '', '', 'maigatari1', '12345', '12345', 0, '', '2061'),
(10, 'abba', 'isa', 'musa', '2019-11-14', 'female', 'mandawari', '2147483647', '', 'kura', 'secondary', 'JSS 1', 'abbamusa', '123456', '123456', 0, 'notAdmitted', '2061'),
(13, 'Usman', 'Yusuf', 'Garba', '2001-11-23', 'male', 'NO. 8 Makama Road Bakori', '2147483647', 'Katsina', 'Bakori', 'primary', 'primary 1', 'ussy', '112233', '112233', 0, 'Admitted', '2061'),
(14, 'Yahaya', 'Ahmad', 'Adamu', '2019-11-13', 'male', 'Jigawa', '09067307670', 'Jigawa', 'Roni', 'secondary', '', 'yahmis', '123456', '123456', 0, '', '2061'),
(15, 'Juliet', 'Umoh', '', '1988-11-20', 'female', 'Kankare Kano', '23456789567', '', 'Gezawa', NULL, 'ss2', 'juliet', '', '', 5, 'Admitted', '2061'),
(16, 'Rahma', 'Sadau', 'Ibrahim', '2019-11-06', 'female', 'Kano', '23456789', '', 'Gezawa', NULL, 'ss2', 'rsadau', '123456', '123456', 0, '', '2061'),
(18, 'asiya', 'bayero', '', '1980-11-27', 'female', 'Gidan Sarkin Kano', '12345678', 'Kano', 'KMC', NULL, 'jss1', 'asiyabayero', '1234567', '1234567', 0, '', '2061'),
(19, 'Yahaya', 'Ahmad', 'Adamu', '2019-11-13', 'male', 'Jigawa', '09067307670', 'Jigawa', 'Roni', 'secondary', '', 'yahmis', '123456', '123456', 0, '', '2061'),
(20, 'Yahaya', 'Ahmad', 'Adamu', '2019-11-13', 'male', 'Jigawa', '09067307670', 'Jigawa', 'Roni', 'secondary', '', 'yahmis', '123456', '123456', 0, '', '2061'),
(21, 'Yahaya', 'Ahmad', 'Adamu', '2019-11-13', 'male', 'Jigawa', '09067307670', 'Jigawa', 'Roni', 'secondary', '', 'yahmis', '123456', '123456', 0, '', '2061'),
(22, 'Yahaya', 'Ahmad', 'Adamu', '2019-11-13', 'male', 'Jigawa', '09067307670', 'Jigawa', 'Roni', 'secondary', '', 'yahmis', '123456', '123456', 0, '', '2061'),
(24, 'GHJ', 'DFBN', 'NM', '2019-11-28', 'female', 'DFGHJ', '1234567', 'Kaduna', 'SDFGHM', NULL, 'ss1', 'SDDFGHJ', '1234', '1234', 0, '', '2061'),
(25, 'ghjk', 'yui', 'hjk', '2019-11-14', 'male', 'c dfghj', '123556677', 'Kaduna', 'hjk', NULL, 'jss2', 'fghj', '12345', '12345', 0, '', '2061'),
(26, 'werty', 'dfgh', 'fghjk', '2019-11-25', 'male', 'fghjk', '4567890', 'Kaduna', 'sdfgh', 'secondary', '', 'maigatari1', '1234', '1234', 0, '', '2061'),
(27, 'ertyu', 'sdfghj', 'sdfghj', '2019-11-07', 'male', 'poiuy', '8765432', 'Jigawa', 'xcvbnm', 'secondary', '', 'maigatari1', 'yyyy', 'yyyy', 0, '', '2061'),
(28, 'Yahya', 'Yusuf', 'Maigari', '2000-11-12', 'male', 'Kano', '234567', 'Kaduna', 'werty', NULL, 'jss3', 'yaha', '12345', '12345', 0, '', '2061'),
(29, 'tata', 'a', 'ahmad', '1999-11-04', 'male', 'kano', '345678', 'Kano', 'kiru', NULL, 'jss1', 'tata', 'tata1', 'tata1', 0, '', '2061'),
(30, 'musa', 'ishaq', 'muhammad', '1992-11-02', 'male', 'Maigatari town, JIgawa State.', '0814941225', 'Jigawa', 'maigatari', NULL, 'ss3', 'musaishaq', '12345', '12345', 8, 'Admitted', '2061'),
(32, 'Anas', 'Ibrahim', '', '2000-11-13', 'male', 'Kano', '2345678', 'Kano', 'Garko', NULL, 'jss3', 'anasibro', 'kano', 'kano', 1, '', '2061'),
(33, 'abba', 'Ibrahim', 'Garba', '2016-12-04', 'male', 'NO. 8 Makama Road Bakori', '08095981483', 'Kano', 'kano municipal', NULL, 'jss2', 'garba45', '2008', '2008', 2, '', '2061'),
(34, 'Ahmad', 'Umar', 'Ibrahim', '1999-12-01', 'male', 'Bakori', '09067307670', 'Kaduna', 'Bakori', NULL, 'jss2', 'ibrobk', 'bakori', 'bakori', 6, 'Admitted', '2061'),
(35, 'Yusuf', 'Ahmad', 'Shehu', '2000-12-01', 'male', 'Dandago Kano', '234578', 'Kano', 'Fagge', 'primary', '', 'yshehu', '12345', '12345', 0, '', '2061'),
(36, 'Aminu', 'Saminu', 'Haruna', '1990-12-31', 'male', 'Bakori', '234578', 'Katsina', 'Bakori', NULL, 'ss2', 'aminus', '12345', '12345', 3, 'notAdmitted', '2061'),
(37, 'Ibrahim', 'Danjuma', '', '1990-12-02', 'male', 'Ibadan', '234578', 'Oyo', 'Ibadan', NULL, 'ss1', 'ibadan', '12345', '12345', 8, 'Admitted', '2061'),
(38, 'Abdulhadi ', 'Abdullahi', '', '1999-01-01', 'male', 'Marabar Danja Bakori', '0902345789', 'Katsina', 'Bakori', 'secondary', 'JSS 1', 'abdulhadi', '123456', '123456', 0, 'Admitted', '2061'),
(39, 'Ahmed', 'Abdullahi', '', '1999-09-01', 'male', 'Bakori Bye Pass Guga Road', '090987544345', 'Katsina', 'Bakori', NULL, 'jss3', 'aabdullahi', '1234', '1234', 0, '', '2061'),
(40, 'Ibrahim', 'Sani', '', '2003-11-25', 'male', 'No. 8 Makama Road Bakori.', '08135363778', 'Katsina', 'Bakori', NULL, 'ss1', 'gg22', '123456', '123456', 11, 'Admitted', '2061'),
(41, 'Usman', 'Ibrahim', '', '2020-11-25', 'male', 'Dutsen Reme', '08135367877', 'Katsina', 'Bakori', NULL, 'ss1', 'usee20', '123456', '123456', 1, 'notAdmitted', '2061'),
(42, 'Habibu', 'Rabiu', '', '1988-02-02', 'male', 'Funtua', '34567892345', 'Katsina', 'Funtua', NULL, 'ss2', 'hajj4', '12345', '12345', 2, 'notAdmitted', '2061');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admintable`
--
ALTER TABLE `admintable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `admintable`
--
ALTER TABLE `admintable`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
