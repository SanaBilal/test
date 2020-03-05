-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 04, 2020 at 03:43 PM
-- Server version: 5.7.29-0ubuntu0.18.04.1
-- PHP Version: 5.6.40-24+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `majestic`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `enrollment_date` date NOT NULL,
  `current_school_year` int(11) NOT NULL,
  `home_phone` varchar(40) NOT NULL,
  `mobile` varchar(40) NOT NULL,
  `email` varchar(80) NOT NULL,
  `first_contact_name` varchar(50) NOT NULL,
  `first_contact_phone` varchar(40) NOT NULL,
  `second_contact_name` varchar(50) NOT NULL,
  `second_contact_phone` varchar(40) NOT NULL,
  `profile_photo_path` varchar(100) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `full_name`, `dob`, `enrollment_date`, `current_school_year`, `home_phone`, `mobile`, `email`, `first_contact_name`, `first_contact_phone`, `second_contact_name`, `second_contact_phone`, `profile_photo_path`, `time_stamp`) VALUES
(4, 'Glenna Holland', '2015-03-14', '2004-12-27', 1990, '+1 (515) 248-2671', '+1 (921) 777-1168', 'xoky@mailinator.net', 'William Warren', '+1 (335) 296-8412', 'Ursa Anderson', '+1 (136) 315-1744', '', '2020-03-03 08:06:42'),
(6, 'Shea Conrad', '1986-06-07', '1989-10-24', 2017, '+1 (862) 615-4078', '+1 (809) 938-6991', 'mumivy@mailinator.com', 'Gabriel Banks', '+1 (913) 533-8422', 'Bertha Ross', '+1 (336) 451-7648', '', '2020-03-03 08:15:43'),
(7, 'Jennifer Mills', '2013-07-19', '2000-12-21', 1988, '+1 (692) 605-9037', '+1 (265) 213-2102', 'wotofiwo@mailinator.net', 'Amy Doyle', '+1 (695) 592-1556', 'Gloria Holmes', '+1 (561) 163-3265', '', '2020-03-03 08:15:51'),
(9, 'Ferdinand Gillespie', '2011-04-27', '2009-07-08', 1990, '+1 (617) 303-9711', '+1 (903) 375-2009', 'xusofupam@mailinator.com', 'Jordan Reed', '+1 (632) 579-4068', 'Brittany Wilkins', '+1 (551) 481-2338', '', '2020-03-03 14:10:38'),
(11, 'Basil Foremand', '1990-09-02', '2019-10-17', 1911, '+1 (328) 785-7194', '+1 (833) 573-4337', 'gydaza@mailinator.net', 'Emmanuel Blackburn', '+1 (829) 374-5189', 'Lucius Daniel', '+1 (147) 517-4989', '', '2020-03-04 07:38:47'),
(12, 'Kenneth Perez', '1981-02-25', '2006-08-08', 2011, '+1 (748) 983-8494', '+1 (927) 394-1346', 'puxur@mailinator.net', 'Virginia Guerrero', '+1 (177) 108-3509', 'Kibo Camacho', '+1 (262) 862-9989', '', '2020-03-04 07:28:22'),
(13, 'Angela Montoya', '2016-01-01', '2005-02-13', 1971, '+1 (141) 545-5479', '+1 (112) 539-1498', 'ziqatyb@mailinator.net', 'Mannix Key', '+1 (662) 127-5839', 'Zane Johnston', '+1 (843) 881-9561', '', '2020-03-04 07:38:59'),
(14, 'Kaden Adams', '2008-02-25', '1980-01-28', 1991, '+1 (614) 261-2747', '+1 (511) 494-8933', 'hasisipy@mailinator.com', 'Xandra Gardner', '+1 (773) 823-5073', 'Garth Thornton', '+1 (657) 501-7088', '', '2020-03-04 07:54:01'),
(15, 'Maya Petty', '2016-05-28', '1993-01-03', 1987, '+1 (475) 213-3825', '+1 (652) 419-2517', 'zozokon@mailinator.com', 'Destiny Giles', '+1 (591) 166-7022', 'Kitra Hansen', '+1 (938) 488-3117', '', '2020-03-04 08:59:40'),
(16, 'Tatyana Cain', '1978-01-14', '1985-01-02', 2005, '+1 (822) 771-9511', '+1 (685) 206-6539', 'xocypipyd@mailinator.net', 'Blaine Cook', '+1 (556) 876-6652', 'Gil Cleveland', '+1 (927) 396-9276', '', '2020-03-04 09:33:59'),
(17, 'Sasha Cooke', '1978-05-03', '1992-01-02', 2014, '+1 (348) 525-3339', '+1 (631) 717-7409', 'parecyhoka@mailinator.com', 'Sarah Taylor', '+1 (903) 485-6606', 'Amy Whitney', '+1 (165) 156-3503', '', '2020-03-04 09:34:47'),
(18, 'Akeem Chavez', '1995-10-12', '1979-03-29', 1980, '+1 (255) 657-1039', '+1 (389) 917-4488', 'hizisevun@mailinator.com', 'Amos Maddox', '+1 (581) 398-4875', 'Ryan Larsen', '+1 (141) 715-1557', '', '2020-03-04 09:36:12'),
(19, 'Shoshana Manning', '2004-07-17', '1970-11-07', 1993, '+1 (894) 814-8512', '+1 (483) 711-9446', 'wano@mailinator.com', 'Giselle Velasquez', '+1 (563) 819-4806', 'Jeremy Roy', '+1 (487) 878-4379', '', '2020-03-04 09:37:50'),
(20, 'Olga Wilcox', '1999-08-04', '1999-05-28', 1995, '+1 (569) 473-1942', '+1 (352) 222-6731', 'cahyfymu@mailinator.com', 'Nathan Burgess', '+1 (376) 439-2246', 'Montana Whitley', '+1 (149) 605-8613', '', '2020-03-04 09:42:23'),
(21, 'Clio Gonzales', '2014-06-26', '1980-08-17', 1992, '+1 (762) 545-5549', '+1 (204) 227-4382', 'ladu@mailinator.com', 'Kim Golden', '+1 (506) 135-8217', 'Scarlet Ray', '+1 (694) 518-8174', 'uploads/15833152111.jpg', '2020-03-04 09:46:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
