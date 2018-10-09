-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2017 at 12:10 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `goonsquad`
--

-- --------------------------------------------------------

--
-- Table structure for table `codes`
--

CREATE TABLE `codes` (
  `ID` int(11) NOT NULL,
  `Code` text NOT NULL,
  `Type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `codes`
--

INSERT INTO `codes` (`ID`, `Code`, `Type`) VALUES
(1, 'ProtectMonochrome978', 'Developer'),
(2, 'publisher', 'Publisher');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`, `location`) VALUES
(5, 'texas', 'preview/img/texasRoadhouse.png'),
(6, 'chipotle', 'preview/img/chipotle.png'),
(7, 'watson', 'preview/img/watson.png'),
(8, 'logo', 'preview/img/logo.png'),
(9, 'molnar', 'preview/img/molnar.png'),
(10, 'steamworks', 'preview/img/steamworks.png'),
(11, 'michigan', 'preview/img/michigan.png'),
(12, 'dadara', 'preview/img/dadara.png'),
(13, 'youtubeIconThingy', 'preview/img/youtubeIconThingy.png'),
(14, 'facebooklogo', 'preview/img/facebooklogo2.png'),
(15, 'firstinmich', 'preview/img/firstinmichigan.png'),
(16, 'first', 'preview/img/firstlogo.png'),
(17, 'uaw', 'preview/img/uaw.png'),
(18, 'uaw2', 'preview/img/uaw2.png'),
(19, 'rco', 'preview/img/rco.png'),
(20, 'favicon', 'preview/img/favicon.png'),
(21, 'ford', 'preview/img/ford.png'),
(22, 'searchplus', 'preview/img/searchplus.png'),
(23, 'icr', 'preview/img/icr.png'),
(24, 'mcdonalds', 'preview/img/mcdonalds.png'),
(25, 'gm', 'preview/img/gm.png'),
(28, 'youtube', 'preview/img/youtube.png'),
(29, 'twitter', 'preview/img/twitter.png'),
(30, 'facebook', 'preview/img/facebook.png'),
(31, 'wbsd', 'preview/img/wbsd.png'),
(33, 'testpic', 'preview/img/oldpixelpanet.png'),
(34, 'tedson', 'preview/img/tedson.png');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `sender` varchar(45) NOT NULL,
  `receiver` varchar(45) NOT NULL,
  `text` text NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `sender`, `receiver`, `text`, `name`) VALUES
(3, 'Developer', 'Publisher', 'This message should be in the publisher''s inbox. If it isn''t that is sad. :(', 'Go to the Publisher'),
(4, 'Publisher', 'Developer', 'Hai', 'Go to the Developer');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `content`) VALUES
(1, 'index', '<html>\r\n    <head>\r\n        <title>Goon Squad - Home</title>\r\n        <link rel="stylesheet" type="text/css" href="style.css"/>\r\n        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">\r\n        <link href="goonfont.ttf" rel="stylesheet">\r\n        \r\n    </head>\r\n    \r\n    <body>\r\n<div class="header"><a href="index.html"><img src="img/logo.png" /></a>\r\n<div class="menu"><a id="currentpage" href="index.html">Home</a> <a href="sponsors.html">Sponsors</a> <a href="contact.html">Contact</a> <a href="links.html">Links</a> <a href="calendar.html">Calendar</a> <a href="news.html">News</a></div>\r\n</div>\r\n<div class="footer"><a style="text-decoration: none;" href="https://www.facebook.com/pages/Woodhaven-Robotics-Team-3604/167378876696706"><img src="img/icons/Facebook.png" /></a> <a style="text-decoration: none;" href="https://twitter.com/GoonSquad3604"><img src="img/icons/Twitter.png" /></a> <a style="text-decoration: none;" href="http://www.youtube.com/user/WhsRobotics3604?feature=watch"><img src="img/icons/YouTube.png" /></a></div>\r\n<div id="homecontent" class="content">\r\n<table>\r\n<tbody>\r\n<tr>\r\n<td><img id="goonsquadlogo" src="img/logo.png" width="125px" align="left" /></td>\r\n<td>\r\n<h1 id="gstext" style="margin-top: 20px;">GOON SQUAD</h1>\r\n<h1 style="margin-top: -12%;">Team 3604</h1>\r\n<h3 style="font-weight: normal;"><em>What would you do if you could not fail?</em></h3>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<table cellpadding="0px">\r\n<tbody>\r\n<tr>\r\n<td width="40%"><iframe src="https://www.youtube.com/embed/EMiNmJW7enI" width="100%" height="100%" frameborder="0" align="left" allowfullscreen="allowfullscreen"></iframe></td>\r\n<td width="50">\r\n<h2>Latest Goon Squad News:</h2>\r\n<strong>4/1/17</strong>: We participated in the district event at the Woodhaven Event event from March 24 to March 25.<br /> <br /> <strong><a href="news.html">Read more on the News page!</a></strong></td>\r\n</tr>\r\n<tr>\r\n<td width="30%">\r\n<h2><img src="img/steamworks.png" width="30%" /><br />2017 Events:</h2>\r\n<s><strong>St. Joseph''s District</strong><br /> <em>St. Joseph High School</em><br /> March 10 &amp; 11</s> <br /> <s><strong>Woodhaven District</strong><br /> <em>Woodhaven High School</em><br /> March 24 &amp; 25</s> <br /> <s><strong>State Championships</strong><br /> <em>Saginaw Valley State University</em><br /> April 13 - 15 <br /> <strong>World Championship</strong><br /> <em>St. Louis - Edward Jones Dome</em><br /> April 26 - 29</s></td>\r\n<td width="70%"><img src="img/mcdonalds.png" width="128" height="112" /><br /> The Goon Squad is the FRC Robotics Team for Woodhaven High School / Woodhaven-Brownstown School District! <br /> <strong>Rookie Year: </strong> 2011 <br /> <strong>Location:</strong> Brownstown, MI <br /> <strong>2017 Team Size:</strong> 35 Students <br /> Check out the FRC Steamworks Game Animation above! <br /><br /><br /><br /><br /><br /><br /></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<br /><br /></div>\r\n</body>\r\n</html>'),
(2, 'Test Page', '<html>\r\n	<head>\r\n		<title>Goon Squad - Home</title>\r\n		<link rel=''stylesheet'' type=''text/css'' href=''style.css''/>\r\n		<link href=''https://fonts.googleapis.com/css?family=Open+Sans:400,700'' rel=''stylesheet''> \r\n		<link href=''goonfont.ttf'' rel=''stylesheet''> \r\n		\r\n	</head>\r\n	\r\n	<body>\r\n<div class="header"><a href="index.html"><img src="img/logo.png" /></a>\r\n<div class="menu"><a id="currentpage" href="index.html">Home</a> <a href="sponsors.html">Sponsors</a> <a href="contact.html">Contact</a> <a href="links.html">Links</a> <a href="calendar.html">Calendar</a> <a href="news.html">News</a></div>\r\n</div>\r\n<div class="footer"><a style="text-decoration: none;" href="https://www.facebook.com/pages/Woodhaven-Robotics-Team-3604/167378876696706"><img src="img/icons/Facebook.png" /></a> <a style="text-decoration: none;" href="https://twitter.com/GoonSquad3604"><img src="img/icons/Twitter.png" /></a> <a style="text-decoration: none;" href="http://www.youtube.com/user/WhsRobotics3604?feature=watch"><img src="img/icons/YouTube.png" /></a></div>\r\n<div class="footer">&nbsp;</div>\r\n<div id="homecontent" class="content"><br /><br /><br />Hey look at this test page. Isn''t it great?!?</div>\r\n<div class="content"><img src="img/oldpixelpanet.png" /></div>\r\n</body>\r\n</html>'),
(3, 'links', '<html>\r\n	<head>\r\n		<title>Goon Squad - Links</title>\r\n		<link rel="stylesheet" type="text/css" href="style.css"/>\r\n		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet"> \r\n		\r\n	</head>\r\n	\r\n	<body>\r\n<div class="header"><a href="index.html"><img src="img/logo.png" /></a>\r\n<div class="menu"><a href="index.html">Home</a> <a href="sponsors.html">Sponsors</a> <a href="contact.html">Contact</a> <a id="currentpage" href="links.html">Links</a> <a href="calendar.html">Calendar</a> <a href="news.html">News</a></div>\r\n</div>\r\n<div class="footer"><a style="text-decoration: none;" href="https://www.facebook.com/pages/Woodhaven-Robotics-Team-3604/167378876696706"><img src="img/icons/Facebook.png" /></a> <a style="text-decoration: none;" href="https://twitter.com/GoonSquad3604"><img src="img/icons/Twitter.png" /></a> <a style="text-decoration: none;" href="http://www.youtube.com/user/WhsRobotics3604?feature=watch"><img src="img/icons/YouTube.png" /></a></div>\r\n<div class="content">\r\n<h1>Visit Our Social Media!</h1>\r\n<a style="text-decoration: none;" href="https://www.facebook.com/pages/Woodhaven-Robotics-Team-3604/167378876696706"> <img src="img/facebook.png" height="64px" /> </a> <a style="text-decoration: none;" href="https://twitter.com/GoonSquad3604"> <img src="img/twitter.png" height="64px" /> </a> <a style="text-decoration: none;" href="http://www.youtube.com/user/WhsRobotics3604?feature=watch"> <img src="img/youtube.png" height="64px" /> </a> <br />\r\n<h1>Also Visit These Links!</h1>\r\n<a style="text-decoration: none;" href="http://wbsd.co"> <img src="img/wbsd.png" height="64px" /> </a> <a style="text-decoration: none;" href="http://firstinspires.org"> <img src="img/firstlogo.png" height="64px" /> </a> <a style="text-decoration: none;" href="http://firstinmichigan.org"> <img src="img/firstinmichigan.png" height="128px" /> </a> <br /> Social Media Icons by <a href="https://www.vecteezy.com/">vecteezy.com</a></div>\r\n<p><br /><br /><br /><br /></p>\r\n</body>\r\n</html>'),
(4, 'calendar', '<html>\r\n	<head>\r\n		<title>Goon Squad - Calendar</title>\r\n		<link rel="stylesheet" type="text/css" href="style.css"/>\r\n		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet"> \r\n		\r\n	</head>\r\n	\r\n	<body>\r\n<div class="header"><a href="index.html"><img src="img/logo.png" /></a>\r\n<div class="menu"><a href="index.html">Home</a> <a href="sponsors.html">Sponsors</a> <a href="contact.html">Contact</a> <a href="links.html">Links</a> <a id="currentpage" href="calendar.html">Calendar</a> <a href="news.html">News</a></div>\r\n</div>\r\n<div class="footer"><a style="text-decoration: none;" href="https://www.facebook.com/pages/Woodhaven-Robotics-Team-3604/167378876696706"><img src="img/icons/Facebook.png" /></a> <a style="text-decoration: none;" href="https://twitter.com/GoonSquad3604"><img src="img/icons/Twitter.png" /></a> <a style="text-decoration: none;" href="http://www.youtube.com/user/WhsRobotics3604?feature=watch"><img src="img/icons/YouTube.png" /></a></div>\r\n<div class="content"><iframe style="height: 150%;" src="https://calendar.google.com/calendar/embed?mode=AGENDA&amp;height=800&amp;wkst=1&amp;bgcolor=%23c0c0c0&amp;src=whs.robotics.3604@gmail.com&amp;color=%235229A3&amp;ctz=America/New_York" width="100%" height="150"></iframe></div>\r\n</body>\r\n</html>'),
(6, 'fail', '<html>\r\n	<head>\r\n		<title>Goon Squad - Contact</title>\r\n		<link rel="stylesheet" type="text/css" href="style.css"/>\r\n		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet"> \r\n		\r\n	</head>\r\n	\r\n	<body>\r\n<div class="header"><a href="index.html"><img src="img/logo.png" /></a>\r\n<div class="menu"><a href="index.html">Home</a> <a href="sponsors.html">Sponsors</a> <a id="currentpage" href="contact.html">Contact</a> <a href="links.html">Links</a> <a href="calendar.html">Calendar</a> <a href="news.html">News</a></div>\r\n</div>\r\n<div class="footer"><a style="text-decoration: none;" href="https://www.facebook.com/pages/Woodhaven-Robotics-Team-3604/167378876696706"><img src="img/icons/Facebook.png" /></a> <a style="text-decoration: none;" href="https://twitter.com/GoonSquad3604"><img src="img/icons/Twitter.png" /></a> <a style="text-decoration: none;" href="http://www.youtube.com/user/WhsRobotics3604?feature=watch"><img src="img/icons/YouTube.png" /></a></div>\r\n<div class="content">\r\n<h1>Contact the Goon Squad</h1>\r\nYour message failed to send.\r\n<h1><a href="contact.html">Try Again</a></h1>\r\n</div>\r\n</body>\r\n</html>'),
(7, 'news', '<html>\r\n	<head>\r\n		<title>Goon Squad - News</title>\r\n		<link rel="stylesheet" type="text/css" href="style.css"/>\r\n		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet"> \r\n		\r\n	</head>\r\n	\r\n	<body>\r\n<div class="header"><a href="index.html"><img src="img/logo.png" /></a>\r\n<div class="menu"><a href="index.html">Home</a> <a href="sponsors.html">Sponsors</a> <a href="contact.html">Contact</a> <a href="links.html">Links</a> <a href="calendar.html">Calendar</a> <a id="currentpage" href="news.html">News</a></div>\r\n</div>\r\n<div class="footer"><a style="text-decoration: none;" href="https://www.facebook.com/pages/Woodhaven-Robotics-Team-3604/167378876696706"><img src="img/icons/Facebook.png" /></a> <a style="text-decoration: none;" href="https://twitter.com/GoonSquad3604"><img src="img/icons/Twitter.png" /></a> <a style="text-decoration: none;" href="http://www.youtube.com/user/WhsRobotics3604?feature=watch"><img src="img/icons/YouTube.png" /></a></div>\r\n<div class="content">\r\n<h1>Goon Squad News</h1>\r\n<table>\r\n<tbody>\r\n<tr>\r\n<td>\r\n<h2>4/1/17</h2>\r\n<h3>Woodhaven District Event</h3>\r\nThe Goon Squad participated in the district event at the Woodhaven Event event from March 24 to March 25. The Goon Squad participated in 12 qualifying matches, and won 8 of them. The team seeded eighth, but team 5090, Torque-Nado invited the Squad to the #5 alliance, and they accepted, along with 815, Advanced Power. The alliance won one of the three qualifying matches, but lost the other two, and were elimitated. <br /><br /><br /></td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<h2>3/16/17</h2>\r\n<h3>St. Joeseph District Event</h3>\r\nWe participated in the district event at St. Joseph High School District event from March 10 to March 11. The Goon Squad participated in 12 qualifying matches. The Team lost 4 matches and won 8 of them. Because the team seeded ninth and was moved up to the fifth alliance captain, we selected alliance which contained team 66, the Grizzlies, and team 6627, the Nordic Knights. Unfortunately, we were eliminated in quarterfinals. <br /><br /><br /></td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<h2>2/28/17</h2>\r\n<h3>Goon Squad Trivia Night</h3>\r\nThe Goon Squad recently had a trivia night at the Woodhaven Moose. The trivia night went very successfully, and everyone had a great time. <br /><br /><br /></td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<h2>2/18/17</h2>\r\n<h3>Goon Squad Chipotle Fundraiser</h3>\r\n<img src="img/chipotle.png" align="left" />The Goon Squad is having a fundraiser at Chipotle, a Mexican fast food restaurant. It will be on March 29 from 4:00 PM to 8:00 PM EDT. The fundraiser will be held at the Chipotle at 23061 Allen Rd, Woodhaven, MI 48183. We look forward to seeing you then!</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</div>\r\n</body>\r\n</html>'),
(8, 'sponsors', '<html>\r\n	<head>\r\n		<title>Goon Squad - Sponsors</title>\r\n		<link rel="stylesheet" type="text/css" href="style.css"/>\r\n		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet"> \r\n		\r\n	</head>\r\n	\r\n	<body>\r\n<div class="header"><a href="index.html"><img src="img/logo.png" /></a>\r\n<div class="menu"><a href="index.html">Home</a> <a id="currentpage" href="sponsors.html">Sponsors</a> <a href="contact.html">Contact</a> <a href="links.html">Links</a> <a href="calendar.html">Calendar</a> <a href="news.html">News</a></div>\r\n</div>\r\n<div class="footer"><a style="text-decoration: none;" href="https://www.facebook.com/pages/Woodhaven-Robotics-Team-3604/167378876696706"><img src="img/icons/Facebook.png" /></a> <a style="text-decoration: none;" href="https://twitter.com/GoonSquad3604"><img src="img/icons/Twitter.png" /></a> <a style="text-decoration: none;" href="http://www.youtube.com/user/WhsRobotics3604?feature=watch"><img src="img/icons/YouTube.png" /></a></div>\r\n<div class="content"><center>\r\n<h1>Visit Our Great Sponsors!</h1>\r\n<a href="http://gm.com"><img src="img/gm.png" height="64px" /></a> <a href="http://ford.com"><img src="img/ford.png" height="64px" /></a> <a href="http://mcdonalds.com"><img src="img/mcdonalds.png" height="64px" /></a> <a href="http://tedsonindustries.com"><img src="img/tedson.png" height="64px" /></a> <a href="http://icrservices.com"><img src="img/icr.png" height="64px" /></a> <a href="http://rcoeng.com"><img src="img/rco.png" height="64px" /></a> <a href="http://searchplusinternational.com/"><img src="img/searchplus.png" height="64px" /></a> <!--<a <img src="img/dadara.jpg" height="128px">     --> <a href="http://www.local387.org/"><img src="img/uaw.png" height="64px" /></a> <a href="http://region1a.uaw.org/local600/"><img src="img/uaw2.png" height="64px" /></a> <a href="http://wbsd.co"><img src="img/wbsd.png" height="64px" /></a> <img src="img/dadara.png" height="64px" /><br /> <a style="text-decoration: none;" href="https://megs.mde.state.mi.us/megs/"> <img src="img/michigan.png" height="64px" /> <br /> Michigan Educational Grant </a> <br /> <a style="text-decoration: none;" href="http://molnarroofing.com/"><img src="img/molnar.png" height="64px" /></a> <a style="text-decoration: none;" href="http://www.watsoneng.com/"><img src="img/watson.png" height="64px" /></a> <a style="text-decoration: none;" href="https://www.texasroadhouse.com/"><img src="img/texasRoadhouse.png" height="64px" /></a></center></div>\r\n</body>\r\n</html>'),
(9, 'thankyou', '<html>\r\n	<head>\r\n		<title>Goon Squad - Contact</title>\r\n		<link rel="stylesheet" type="text/css" href="style.css"/>\r\n		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet"> \r\n		\r\n	</head>\r\n	\r\n	<body>\r\n<div class="header"><a href="index.html"><img src="img/logo.png" /></a>\r\n<div class="menu"><a href="index.html">Home</a> <a href="sponsors.html">Sponsors</a> <a id="currentpage" href="contact.html">Contact</a> <a href="links.html">Links</a> <a href="calendar.html">Calendar</a> <a href="news.html">News</a></div>\r\n</div>\r\n<div class="footer"><a style="text-decoration: none;" href="https://www.facebook.com/pages/Woodhaven-Robotics-Team-3604/167378876696706"><img src="../img/icons/Facebook.png" /></a> <a style="text-decoration: none;" href="https://twitter.com/GoonSquad3604"><img src="../img/icons/Twitter.png" /></a> <a style="text-decoration: none;" href="http://www.youtube.com/user/WhsRobotics3604?feature=watch"><img src="../img/icons/YouTube.png" /></a></div>\r\n<div class="content">\r\n<h1>Contact the Goon Squad</h1>\r\nThank you. We will respond within 72 hours.</div>\r\n</body>\r\n</html>'),
(10, 'contact', '<html>\r\n	<head>\r\n		<title>Goon Squad - Contact</title>\r\n		<link rel="stylesheet" type="text/css" href="style.css"/>\r\n		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet"> \r\n		\r\n	</head>\r\n	\r\n	<body>\r\n<div class="header"><a href="index.html"><img src="img/logo.png" /></a>\r\n<div class="menu"><a href="index.html">Home</a> <a href="sponsors.html">Sponsors</a> <a id="currentpage" href="contact.html">Contact</a> <a href="links.html">Links</a> <a href="calendar.html">Calendar</a> <a href="news.html">News</a></div>\r\n</div>\r\n<div class="footer"><a style="text-decoration: none;" href="https://www.facebook.com/pages/Woodhaven-Robotics-Team-3604/167378876696706"><img src="img/icons/Facebook.png" /></a> <a style="text-decoration: none;" href="https://twitter.com/GoonSquad3604"><img src="img/icons/Twitter.png" /></a> <a style="text-decoration: none;" href="http://www.youtube.com/user/WhsRobotics3604?feature=watch"><img src="img/icons/YouTube.png" /></a></div>\r\n<div class="content">\r\n<table>\r\n<tbody>\r\n<tr>\r\n<td rowspan="2" width="30%"><br /><br /><form id="contact" action="send-mail.php" method="post" name="contact"><strong>Name:</strong><br /> <input name="name" type="text" /> <br /> <strong>Email:</strong><br /> <input name="email" type="text" /> <br /> <strong>Subject:</strong><br /> <input name="subject" type="text" /> <br /> <strong>Body:</strong><br /> <textarea form="contact" name="body"></textarea> <br /> <input name="updates" type="checkbox" />Check this box to recieve email updates <br /> <input name="send" type="submit" value="Send" /></form></td>\r\n<td>\r\n<h1>Contact the Goon Squad</h1>\r\nIf you would like to contact the Goon Squad, please send us an email! We will get back to you as soon as we can! If you do not receive a response within 72 hours, please just send another email.</td>\r\n</tr>\r\n<tr>\r\n<td width="40%">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</div>\r\n</body>\r\n</html>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `codes`
--
ALTER TABLE `codes`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `codes`
--
ALTER TABLE `codes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
