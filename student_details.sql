-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 01, 2018 at 01:33 PM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rfid_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE IF NOT EXISTS `student_details` (
  `s.no` int(11) NOT NULL AUTO_INCREMENT,
  `idno` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  PRIMARY KEY (`s.no`),
  UNIQUE KEY `idno` (`idno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`s.no`, `idno`, `name`, `dept`, `year`) VALUES
(1, '[204,253,148,53,144]', 'Srikanth sir', 'CSE', 'ASP/CSE'),
(2, '[116,42,166,251,3]', 'R.Rajeshkumar', 'CSE', 'IV'),
(3, '[55,78,110,29,10]', 'Vignesh Prabhu', 'CSE', 'IV'),
(4, '[19,120,170,51,242]', 'Deepakraj', 'CSE', 'II'),
(5, '[179,134,71,49,67]', 'Muthumeena', 'CSE', 'III'),
(6, '[115,38,82,49,54]', 'Gurudeviga', 'CSE', 'III'),
(7, '[179,144,125,51,109]', 'Deivabharathi', 'CSE', 'III'),
(8, '[227,106,160,51,26]', 'Jeevitha', 'CSE', 'III'),
(9, '[99,247,88,49,253]', 'Priyamahalakshmi', 'CSE', 'III'),
(10, '[19,50,119,51,101]', 'KrishnaKumar', 'CSE', 'III'),
(11, '[51,127,70,49,59]', 'Muralikrishnan', 'CSE', 'III'),
(12, '[19,133,121,51,220]', 'Hariharan', 'CSE', 'II'),
(13, '[211,2,118,51,148]', 'Dinesh', 'CSE', 'II'),
(14, '[83,189,66,49,157]', 'Chandru', 'CSE', 'II'),
(15, '[211,147,115,51,0]', 'B.Sabarinathan', 'CSE', 'III'),
(16, '[163,189,69,49,106]', 'Mohanraj', 'CSE', 'II'),
(17, '[103,219,90,29,251]', 'Ganesan', 'ECE', 'IV'),
(18, '[99,2,155,51,201]', 'AjithKumar', 'CSE', 'II'),
(19, '[83,242,67,49,211]', 'Silambarasan', 'CSE', 'III'),
(20, '[135,53,48,29,159]', 'Sowndharrajan', 'CSE', 'IV'),
(21, '[67,9,122,57,3]', 'ragubalagi', 'CSE', 'III'),
(22, '[35,209,118,51,183]', 'Murugalakshmi', 'CSE', 'III'),
(23, '[51,186,69,49,253]', 'vellingiri', 'CSE', 'III'),
(24, '[183,215,170,51,29]', 'Indhuja', 'CSE', 'III'),
(25, '[83,171,117,51,190]', 'Mohanraj', 'CSE', 'II'),
(27, '[138,34,241,186,227]', 'Renjith sir', 'CSE', 'HOD/CSE');
