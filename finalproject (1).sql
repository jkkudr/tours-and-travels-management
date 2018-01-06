-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2017 at 08:57 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `finalproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
  `payment_id` int(200) NOT NULL AUTO_INCREMENT,
  `user_id` int(250) NOT NULL,
  `product_id` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `txn_id` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `payment_gross` float(10,2) NOT NULL,
  `currency_code` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `payer_email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `payment_status` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cms`
--

CREATE TABLE IF NOT EXISTS `tbl_cms` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `about` varchar(5000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_cms`
--

INSERT INTO `tbl_cms` (`id`, `about`) VALUES
(2, '<h4>Overview of American International University-Bangladesh (AIUB)</h4>American International University - Bangladesh (AIUB) is a government approved private university founded in 1994 by Dr. Anwarul Abedin. The university is an independent organization with its own Board of Trustees.<h4>Vision</h4><blockquote>AMERICAN INTERNATIONAL UNIVERSITY-BANGLADESH (AIUB) envisions promoting professionals and excellent leadership catering to the technological progress and development needs of the country.</blockquote><h4>Mission</h4><blockquote>AMERICAN INTERNATIONAL UNIVERSITY-BANGLADESH (AIUB) is committed to provide quality and excellent computer-based academic programs responsive to the emerging challenges of the time. It is dedicated to nurture and produce competent world class professional imbued with strong sense of ethical values ready to face the competitive world of arts, business, science, social science and technology.</blockquote><h4>Quality Policy</h4><blockquote>“Quality shall be adhered to in conformity with the prescribed national and international standards of quality and excellence including those provided by the professional bodies and organizations. The American International University- Bangladesh is committed to translate into actions the programs, projects and activities related to the sustainable delivery of quality management operation system. The students being the valued customers are the central focus of the university shall be provided with utmost care and attention to meet their primordial needs and future career success. In view of this commitment, the university shall exert best efforts to harmonize its action through collaboration, cooperation and consultation with every unit and components of the university.”</blockquote><h4>Goals</h4><ul><li>Sustain development and progress of the university</li><li>Continue to upgrade educational services and facilities responsive of the demands for change and needs of the society</li><li>Inculcate professional culture among management, faculty and personnel in the attainment of the institution''s vision, mission and goals</li><li>Enhance research consciousness in discovering new dimensions for curriculum development and enrichment</li><li>Implement meaningful and relevant community outreach programs reflective of the available resources and expertise of the university</li><li>Establish strong networking of programs, sharing of resources and expertise with local and international educational institutions and organizations</li><li>Accelerate the participation of alumni, students and professionals in the implementation of educational programs and development of projects designed to expand and improve global academic standards</li></ul><h4>Linkages and Networking</h4><ul><li>Microsoft Security Cooperation Program (SCP)</li><li>Microsoft IT Academy (<a href="http://www.cec.aiub.edu/" target="_blank" rel="">www.cec.aiub.edu</a>)</li><li>MSDNAA (<a href="http://www.cec.aiub.edu/" target="_blank" rel="">www.cec.aiub.edu</a>)</li><li>CCNA and IT Essentials in collaboration with CISCO (<a href="http://www.cec.aiub.edu/" target="_blank" rel="">www.cec.aiub.edu</a>)</li><li>Authorized Sun Education Centre (<a href="http://www.cec.aiub.edu/" target="_blank" rel="">www.cec.aiub.edu</a>)</li><li>Education Partner of Bangladesh Cricket Board (<a href="http://www.cec.aiub.edu/" target="_blank" rel="">www.cec.aiub.edu</a>)</li><li>Oracle Academy (<a href="http://www.cec.aiub.edu/" target="_blank" rel="">www.cec.aiub.edu</a>)</li><li>Certifies Internet Web (CIW) Professional Program (<a href="http://www.cec.aiub.edu/" target="_blank" rel="">www.cec.aiub.edu</a>)</li><li>CTP Authorized Training Academy (<a href="http://www.cec.aiub.edu/" target="_blank" rel="">www.cec.aiub.edu</a>)</li><li>The Duke of Edinburgh''s International Award (<a href="http://www.intaward.org/" target="_blank" rel="">www.intaward.org</a>)</li></ul><h4>Institutional member:</h4><ol><li>Asia Pacific Quality Network (APQN)</li><li>International Association of Universities (IAU)</li><li>International Association of University Presidents (IAUP)</li><li>American Association of University Administrators (AAUA)</li><li>Association of Universities of Asia and Pacific (AUAP - Board Member)</li><li>Global University Network for Innovation (GUNI)</li><li>Association of Management Development In South Asia (AMDISA)</li></ol>'),
(3, '<b>Our</b> <u><i>Contact Information </i></u>are globally, <b>here are some tips that should help establish communication between we and our site visitors</b>.<br><ul><li>It Should Look Great:&nbsp;Visuals are a big part of your website design. The contact page may not sound the most interesting, but don’t neglect its appearance. If you have a poorly designed page, people won’t be interested in establishing further relations.</li><li>Well-Written Copy:<b>&nbsp;Attract and maintain visitors </b>with language that is action and value oriented; meaning it includes a call to action and how visitors will benefit from you or your brand. This will help you set up further communication.</li><li><b><i>Make Sure it’s Functional</i></b>:&nbsp;We know this is obvious, but take the time to double-check everything on the page. Having links that are broken or won’t send properly is just bad for business. If the email or phone number links are not functional, how can people communicate with you? That kind of defeats the purpose of the contact page.</li><li>It Should Look Great:&nbsp;Visuals are a big part of your website design. The contact page may not sound the most interesting, but don’t neglect its appearance. If you have a poorly designed page, people won’t be interested in establishing further relations.</li><li><b>Well-Written Copy:&nbsp;Attract </b>and maintain visitors with language that is action and value oriented; meaning it includes a call to action and how visitors will benefit from you or your brand. This will help you set up further communication.</li></ul><br><br><blockquote><b>House 83/B, Road 4, Kemal Ataturk Avenue Banani, Dhaka 1213,&nbsp;Bangladesh<br></b><b>+88-02-9894229,+88-02-9897387,+88-02-58815357<br></b><b>Fax: +88-02-8813233<br></b><b>info@aiub.edu</b></blockquote><br><br>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_country`
--

CREATE TABLE IF NOT EXISTS `tbl_country` (
  `c_id` int(100) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_country`
--

INSERT INTO `tbl_country` (`c_id`, `c_name`, `Date`) VALUES
(2, 'Russia', '2016-10-25'),
(3, 'India', '2016-10-25'),
(4, 'Bangladesh', '2016-10-30'),
(5, 'U.S.A', '2016-11-07');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hotel`
--

CREATE TABLE IF NOT EXISTS `tbl_hotel` (
  `h_id` int(200) NOT NULL AUTO_INCREMENT,
  `h_name` varchar(250) NOT NULL,
  `H_Location` varchar(150) NOT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`h_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_hotel`
--

INSERT INTO `tbl_hotel` (`h_id`, `h_name`, `H_Location`, `Date`) VALUES
(1, 'Radix', 'Trunk road,Feni', '2016-10-25'),
(2, 'Midair', 'kayro,egypt', '2016-10-29');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mail`
--

CREATE TABLE IF NOT EXISTS `tbl_mail` (
  `m_id` int(200) NOT NULL AUTO_INCREMENT,
  `Subject` varchar(100) NOT NULL,
  `mail_body` varchar(250) NOT NULL,
  `user_id` int(100) NOT NULL,
  `reply_body` varchar(200) NOT NULL,
  `status` varchar(250) NOT NULL DEFAULT 'unread',
  `Date` date NOT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_mail`
--

INSERT INTO `tbl_mail` (`m_id`, `Subject`, `mail_body`, `user_id`, `reply_body`, `status`, `Date`) VALUES
(1, 'About Package', '<p>Test mail.</p>', 1, '', 'unread', '0000-00-00'),
(2, 'Test 2', '<p>Test Body</p>', 1, '', 'unread', '2016-11-07');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orderlist`
--

CREATE TABLE IF NOT EXISTS `tbl_orderlist` (
  `user_id` int(255) NOT NULL,
  `Invoice` varchar(100) NOT NULL,
  `Customer_name` varchar(250) NOT NULL,
  `Customer_email` varchar(100) NOT NULL,
  `Package_title` varchar(150) NOT NULL,
  `Package_id` varchar(150) NOT NULL,
  `Package_price` varchar(15) NOT NULL,
  `Card_no` int(100) NOT NULL,
  `Card_type` varchar(100) NOT NULL,
  `Date` varchar(150) NOT NULL,
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `Status` varchar(150) NOT NULL DEFAULT 'Proccessing',
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_orderlist`
--

INSERT INTO `tbl_orderlist` (`user_id`, `Invoice`, `Customer_name`, `Customer_email`, `Package_title`, `Package_id`, `Package_price`, `Card_no`, `Card_type`, `Date`, `order_id`, `Status`) VALUES
(1, 'Inv-19333', 'shakawat', 'shakhawat@gmail.com', 'majeed', '19772-PI', '2000', 2147483647, 'Mastercard', '2016-10-12', 4, 'Confirm'),
(1, 'Inv-23354', 'shakawat', 'shakhawat@gmail.com', 'majeed', '19772-PI', '2000', 2147483647, 'Mastercard', '2016-10-14', 5, 'Proccessing'),
(7, 'Inv-25487', 'subrata', 'shakhawat12@gmail.com', 'Bandarban Tour', 'PI-7510', '7000', 2147483647, 'Visa', '2016-10-15', 6, 'Proccessing'),
(7, 'Inv-11474', 'subrata', 'shakhawat12@gmail.com', 'Khoiya Chora Tour', 'PI-29998', '5000', 2147483647, 'Mastercard', '2017-03-19', 7, 'Proccessing');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_package`
--

CREATE TABLE IF NOT EXISTS `tbl_package` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `Title` varchar(200) NOT NULL,
  `Package_id` varchar(200) NOT NULL,
  `Package_price` varchar(150) NOT NULL,
  `Package_Type` varchar(200) NOT NULL,
  `Duration` varchar(200) NOT NULL,
  `Start_Date` date NOT NULL,
  `End_Date` date NOT NULL,
  `Country` varchar(200) NOT NULL,
  `Jour_start` varchar(250) NOT NULL,
  `Jour_Destination` varchar(100) NOT NULL,
  `Transport` varchar(50) NOT NULL,
  `Visa` varchar(200) NOT NULL,
  `Tax` varchar(250) NOT NULL,
  `Acommodation` varchar(100) NOT NULL,
  `Acommodo_type` varchar(150) NOT NULL,
  `Breakfast` varchar(150) NOT NULL,
  `Lunch` varchar(150) NOT NULL,
  `Dinner` varchar(150) NOT NULL,
  `Image` varchar(500) NOT NULL,
  `Image1` varchar(200) NOT NULL,
  `plan` varchar(5000) NOT NULL,
  `Date` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `tbl_package`
--

INSERT INTO `tbl_package` (`id`, `Title`, `Package_id`, `Package_price`, `Package_Type`, `Duration`, `Start_Date`, `End_Date`, `Country`, `Jour_start`, `Jour_Destination`, `Transport`, `Visa`, `Tax`, `Acommodation`, `Acommodo_type`, `Breakfast`, `Lunch`, `Dinner`, `Image`, `Image1`, `plan`, `Date`) VALUES
(37, 'Birishiri', 'PI-22515', '7000', 'Only Four Member', '5 Days', '2017-04-01', '2017-04-05', 'Bangladesh', 'dhaka', 'Kuakata', 'By Road', 'No', 'No', 'Radix', '3 STAR', 'Yes', 'Yes', 'Yes', './images/1144058e147530ee64.jpg', './images/2231358e147530eff9.jpg', '<p><span style="color: #222222; font-family: Roboto, arial, sans-serif; font-size: 13px;">Sylhet, also known as Jalalabad, is a metropolitan city in northeastern Bangladesh. It is the administrative seat of Sylhet Division. The city is located on the right bank of the Surma River in northeastern Bengal.</span></p>', '2017-04-02'),
(38, 'Bandarban', 'PI-19118', '7000', 'Two person with children', '5 Days', '2017-03-28', '2017-04-05', 'Bangladesh', 'dhaka', 'Bandarban,Bangladesh', 'By Road', 'No', 'No', 'Midair', '3 STAR', 'Yes', 'Yes', 'No', './images/7958e147f9a2366.jpg', './images/2556458e147f9a24ea.jpg', '<p><span style="color: #222222; font-family: Roboto, arial, sans-serif; font-size: 13px;">Bandarban, also known as Jalalabad, is a metropolitan city in northeastern Bangladesh. It is the administrative seat of Sylhet Division. The city is located on the right bank of the Surma River in northeastern Bengal.</span></p>', '2017-04-02'),
(39, 'Cox''s bazar', 'PI-17293', '8500', 'Two person with children', '7 Days', '2017-04-05', '2017-04-12', 'Bangladesh', 'Feni', 'hawai', 'By Air', 'No', 'No', 'Radix', '3 STAR', 'Yes', 'No', 'Yes', './images/2694658e148656e125.jpg', './images/750758e148656e39f.jpg', '<p><span style="color: #222222; font-family: Roboto, arial, sans-serif; font-size: 13px;">Cox''s Bazar, also known as Jalalabad, is a metropolitan city in northeastern Bangladesh. It is the administrative seat of Sylhet Division. The city is located on the right bank of the Surma River in northeastern Bengal.</span></p>', '2017-04-02'),
(40, 'Kuakata', 'PI-19113', '8500', 'Two person with children', '20 Days', '2017-04-10', '2017-04-19', 'India', 'Kashmir', 'hawai', 'By Ship', 'Yes', 'Yes', 'Radix', '2 STAR', 'Yes', 'Yes', 'Yes', './images/3076658e148b59e080.jpg', './images/2452758e148b59e45e.jpg', '<p><span style="color: #222222; font-family: Roboto, arial, sans-serif; font-size: 13px;">Kawakata, also known as Jalalabad, is a metropolitan city in northeastern Bangladesh. It is the administrative seat of Sylhet Division. The city is located on the right bank of the Surma River in northeastern Bengal.</span></p>', '2017-04-02'),
(41, 'Kashmir', 'PI-15589', '20000', 'Only Four Member', '7 Days', '2017-01-01', '2017-04-07', 'India', 'dhaka', 'Kashmir', 'By Air', 'Yes', 'Yes', 'Midair', '5 STAR', 'Yes', 'Yes', 'Yes', './images/2553058e1495ab8651.jpg', './images/2109958e1495ab8b49.jpg', '<p><span style="color: #222222; font-family: Roboto, arial, sans-serif; font-size: 13px;">Kashmir, also known as Jalalabad, is a metropolitan city in northeastern india. It is the administrative seat of kashmir Division. The city is located on the right bank of the everast hill in northeastern india.</span></p>', '2017-04-02');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_package_type`
--

CREATE TABLE IF NOT EXISTS `tbl_package_type` (
  `pt_id` int(100) NOT NULL AUTO_INCREMENT,
  `package_type` varchar(250) NOT NULL,
  PRIMARY KEY (`pt_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_package_type`
--

INSERT INTO `tbl_package_type` (`pt_id`, `package_type`) VALUES
(1, 'Two person with children'),
(2, 'Only Four Member');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_placeinfo`
--

CREATE TABLE IF NOT EXISTS `tbl_placeinfo` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `Place_Location` varchar(250) NOT NULL,
  `Place_Description` varchar(1000) NOT NULL,
  `uid` int(200) NOT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_placeinfo`
--

INSERT INTO `tbl_placeinfo` (`id`, `Place_Location`, `Place_Description`, `uid`, `Date`) VALUES
(2, 'Bandarban,Bangladesh', '<p><span style="color: #252525; font-family: sans-serif; font-size: 14px;">One of the three hill districts of Bangladesh and a part of the Chittagong Hill Tracts, </span></p>\r\n<p><span style="color: #252525; font-family: sans-serif; font-size: 14px;">Bandarban (4,479&nbsp;km&sup2;) is not only the remotest district of the country,</span></p>\r\n<p><span style="color: #252525; font-family: sans-serif; font-size: 14px;"> but also is the least populated (population 292,900) one.</span></p>\r\n<p><span style="color: #252525; font-family: sans-serif; font-size: 14px;"> All of the highest peaks of Bangladesh are located at Bandarban district.&nbsp;</span></p>', 6, '2016-11-16'),
(3, 'dhaka', '', 6, '0000-00-00'),
(4, 'Kuakata', '', 6, '2016-10-07'),
(5, 'hawai', '', 6, '2016-10-15'),
(6, 'khoiyachora', '<p>This is a nice place , it located in chittagong there have sixteen wallfall every waterfall are very delicious and beautiful......</p>', 6, '2016-10-25'),
(7, 'Feni', '<p>It is nice and beautiful palce, i have never ever seen.....</p>', 6, '2016-10-25'),
(8, 'Kashmir', '<p><span style="font-size: 18.0pt; line-height: 107%; font-family: ''Times New Roman'',''serif''; mso-fareast-font-family: ''Times New Roman''; color: darkblue; mso-ansi-language: EN-US; mso-fareast-language: EN-US; mso-bidi-language: AR-SA;">The term .management information systems. designates a specific category of information systems<br /> serving:<br /> <!-- [if !supportLineBreakNewLine]--><br /> <!--[endif]--></span></p>', 6, '2016-10-25');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE IF NOT EXISTS `tbl_slider` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `slider_1` varchar(250) NOT NULL,
  `slider_2` varchar(250) NOT NULL,
  `slider_3` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`id`, `slider_1`, `slider_2`, `slider_3`) VALUES
(2, './images/13887582cc11ba91d9.jpg', './images/31500582cc11ba9339.jpg', './images/15445582cc11ba9421.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_userdata`
--

CREATE TABLE IF NOT EXISTS `tbl_userdata` (
  `uid` int(200) NOT NULL AUTO_INCREMENT,
  `Firstname` varchar(200) NOT NULL,
  `Lastname` varchar(200) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `Password` varchar(150) NOT NULL,
  `Phoneno` varchar(15) NOT NULL,
  `Address` varchar(150) NOT NULL,
  `Gender` varchar(15) NOT NULL,
  `Role` varchar(20) NOT NULL,
  `Status` int(100) NOT NULL DEFAULT '0',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tbl_userdata`
--

INSERT INTO `tbl_userdata` (`uid`, `Firstname`, `Lastname`, `Email`, `Password`, `Phoneno`, `Address`, `Gender`, `Role`, `Status`) VALUES
(1, 'shakawat', 'Hossain', 'shakhawat@gmail.com', '123456', '01675838584', 'Baraipur,feni', 'Male', 'User', 1),
(6, 'Majedur', 'Rahman', 'Admin@gmail.com', 'admin', '01737441168', 'kazipara,mirpur,Dhaka.', 'Male', 'Admin', 1),
(7, 'subrata', 'sahajoy', 'shakhawat12@gmail.com', '12345', '01675838584', 'sahadebpur,feni', 'Male', 'User', 1),
(8, 'arafat', 'jahan', 'arafatjahan@gmail.com', '12345678', '01670899277', 'rampur,feni', 'Male', 'User', 1),
(12, 'shlibu ', 'nazmul', 'shiplu@gmail.com', '12345678', '01670899277', 'kazipara,mirpur', 'Male', 'User', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
