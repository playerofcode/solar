-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 26, 2022 at 12:10 PM
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
-- Database: `solar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `created_at`) VALUES
(1, 'admin', 'admin', '2021-08-19 13:47:20');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`, `created_at`) VALUES
(1, 'fsdf', 'sfsd@gsdf.sdf', 'asdfsdf', 'sdf', '2022-05-04 19:01:28'),
(2, 'ewewe', 'rtrerrte@ghgh.hhjgh', 'dfd', 'sfvs', '2022-05-04 19:02:57');

-- --------------------------------------------------------

--
-- Table structure for table `introduction`
--

CREATE TABLE `introduction` (
  `id` int(11) NOT NULL,
  `content` longtext NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `introduction`
--

INSERT INTO `introduction` (`id`, `content`, `created_at`) VALUES
(1, '<p>BSNL Group is a CPSU under the administrative control of the Ministry of New and Renewable Energy (MNRE), set up on 2022 to facilitate the implementation of NSM and achievement of targets set therein. It is the only CPSU dedicated to the solar energy sector. It was originally incorporated as a section-25 (not for profit) company under the Companies Act, 1956.</p>\r\n\r\n<p>However, through an amendment by Government of India, the company has been converted into a Section-3 company, in 2020, under the Companies Act,</p>\r\n\r\n<p>2020. The mandate of the company has also been broadened to cover the entire renewable energy domain.</p>\r\n\r\n<p>In the present outlook of the RE sector, BSNL Group has a major role to play in the sector&rsquo;s development. The company is one of the nodal agency for implementation of a number of schemes of MNRE. In addition, BSNL Group has ventured into solar project development on turnkey basis for several PSUs/Government departments.</p>\r\n', '2022-05-25 20:32:32');

-- --------------------------------------------------------

--
-- Table structure for table `objective`
--

CREATE TABLE `objective` (
  `id` int(11) NOT NULL,
  `content` longtext NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `objective`
--

INSERT INTO `objective` (`id`, `content`, `created_at`) VALUES
(1, '<p>The Main Objectives of the Company are to:</p>\r\n\r\n<ul>\r\n	<li>Carry on busines&#39;s of generation, forecasting, purchasing, producing, manufacturing, importing, exporting, exchanging, selling and trading in power products and services in India and abroad</li>\r\n	<li>Own, manage, investigate, plan, promote, develop, design, construction, operation, maintenance, renovation, modernization of power projects in solar, on-shore/off-shore wind, geo-thermal, tidal, bio-gas, bio-mass, small hydro and other renewable energy sources in India and abroad</li>\r\n	<li>Plan and execute an integrated programme on development and implementation of renewable energy projects</li>\r\n	<li>Plan, develop, maintain, lease, hire, manage solar parks, infrastructure facilities, and all related ancillary facilities &amp; services in India and abroad</li>\r\n	<li>Carry on the business of planning, investigation, survey, research, design and preparation of preliminary feasibility and detailed project reports, related to Power Projects in India and abroad</li>\r\n	<li>Co-ordinate the activities of its subsidiaries and Joint Venture Companies, to determine their economic and financial objectives / targets and to review, control, guide and direct their performance with a view to secure an optimum utilization of all resources placed at their disposal</li>\r\n	<li>Assist, carry out such directions as may be issued by the Administrative Ministry from time to time in executing, evolving, managing, overseeing and coordinating programmes and projects under Jawaharlal Nehru National Solar Mission and all such other Programmes or Missions as may from time to time to be implemented</li>\r\n	<li>Establish, provide, maintain, conduct, scientific and technical research, experiments, pilot projects and tests of all kinds and to process, improve, innovate and invent new products, technologies, directly or in collaboration with other agencies in India &amp; abroad to achieve commercialization</li>\r\n	<li>Engage in the business of performance monitoring, data analysis, resource assessment, cost engineering, technology forecasting, training &amp; capacity building, skill development, promotion &amp; awareness campaigns etc. in India and abroad</li>\r\n	<li>Promote, organize, conduct and render consultancy services in the related activities of the Company in India and abroad</li>\r\n</ul>\r\n', '2022-05-25 20:32:32');

-- --------------------------------------------------------

--
-- Table structure for table `vision_mission`
--

CREATE TABLE `vision_mission` (
  `id` int(11) NOT NULL,
  `content` longtext NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vision_mission`
--

INSERT INTO `vision_mission` (`id`, `content`, `created_at`) VALUES
(1, '<p><strong>Vision</strong></p>\r\n\r\n<p>To build &lsquo;Green India&rsquo; through harnessing abundant solar radiation and to achieve energy security for the country.</p>\r\n\r\n<p><strong>Mission</strong></p>\r\n\r\n<ul>\r\n	<li>To become the leader in development of large scale solar installations, solar plants and solar parks and to promote and commercialize the use of solar energy to reach remotest corner of India.</li>\r\n	<li>To become leader in exploring new technologies and their deployment to harness solar energy.</li>\r\n</ul>\r\n', '2022-05-25 20:32:32');

-- --------------------------------------------------------

--
-- Table structure for table `whats_app`
--

CREATE TABLE `whats_app` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `whats_app`
--

INSERT INTO `whats_app` (`id`, `title`, `description`, `created_at`) VALUES
(2, 'SELECTION OF AGENCY TO CARRY OUT AERIAL TOPOGRAPHY SURVEY AT THE UT OF LADAKH', '<p>Solar Energy Corporation of India Limited (hereinafter called &ldquo;SECI&rdquo;), invites tender from Bidders/Firms/Agencies for &ldquo;<strong>SELECTION OF AGENCY TO CARRY OUT AERIAL TOPOGRAPHY SURVEY AT THE UT OF LADAKH</strong>&rdquo;</p>\r\n\r\n<p>Prospective bidders should submit their bids complete in all respect in separate sealed covers, super-scribed with &ldquo;<strong>SELECTION OF AGENCY TO CARRY OUT AERIAL TOPOGRAPHY SURVEY AT THE UT OF LADAKH</strong>&rdquo; &amp; should be sent to the SECI office&nbsp;so as to&nbsp;<strong>reach on or before 08th June&nbsp;2022 up to 1400 hrs.</strong></p>\r\n', '2022-05-11 19:18:39'),
(3, 'Amendment-1 & Pre-Bid clarifications: Design, Engineering, Supply, Construction, Erection, Testing & Commissioning of cumulative 44 MW (AC) ground based Solar PV Power Plant along with 10 years Plant O&M at different sites at SCCL', '<p><strong>Employer</strong>: Solar Energy Corporation of India Limited (SECI), New Delhi, India.</p>\r\n\r\n<p><strong>Owner:&nbsp;</strong>Singareni Collieries Co.&nbsp;Ltd. (SCCL)</p>\r\n\r\n<p><strong>Tender title</strong>: Design, Engineering, Supply, Construction, Erection, Testing &amp; Commissioning of cumulative 44 MW (AC) ground based Solar PV Power Plant along with 10 years Plant O&amp;M at different sites at SCCL.</p>\r\n\r\n<p><strong>Tender No:</strong>&nbsp;SECI/C&amp;P/PMC/11/0003/2021-22</p>\r\n\r\n<p><strong>Amendment-1 and Clarifications to the Pre-Bid meeting are hereby uploaded at SECI&rsquo;s e-tendering portal at&nbsp;</strong><a href=\"https://www.bharat-electronictender.com/\">https://www.bharat-electronictender.com</a><strong>&nbsp;&amp; SECI&rsquo;s website at&nbsp;</strong><a href=\"http://www.seci.co.in/\">www.seci.co.in</a>.</p>\r\n\r\n<p>Amendment-1 and Clarifications are attached along with this notification for reference purpose, however the complete details are uploaded at&nbsp;<a href=\"https://www.bharat-electronictender.com/\">https://www.bharat-electronictender.com</a>.</p>\r\n\r\n<p>Prospective Bidders are requested to remain updated for any notices wrt the Bidding documents through the websites&nbsp;www.seci.co.in&nbsp;as no separate notification will be issued in this regard.</p>\r\n', '2022-05-11 19:19:02'),
(4, 'Hiring of Vendor/Agency to Provide Tea /Coffee Vending Machine including Supply of Premix Items along with Snacks on Turnkey Basis for 02 years at SECI Office, NBCC Office Complex, East Kidwai Nagar, New Delhi-110023', '<p>Solar Energy Corporation of India Limited (hereinafter called &ldquo;SECI&rdquo;), invites tender from Bidders/Firms/Agencies for &ldquo;<em><strong>The Hiring of Vendor/Agency to Provide Tea /Coffee Vending Machine including Supply of Premix Items along with Snacks on Turnkey Basis for 02 years at SECI Office, NBCC Office Complex, East Kidwai Nagar, New Delhi-110023</strong></em>&rdquo;</p>\r\n\r\n<p>Prospective bidders should submit their bids complete in all respect in separate sealed covers, super-scribed with &ldquo;The Hiring of Vendor/Agency to Provide Tea /Coffee Vending Machine including Supply of Premix Items along with Snacks on Turnkey Basis for 02 years at SECI Office, NBCC Office Complex, East Kidwai Nagar, New Delhi-110023&rdquo; &amp; should&nbsp;sent to SECI office&nbsp;so as to&nbsp;<strong>reach on or before 19th May, 2022 upto 1800 hrs.</strong></p>\r\n', '2022-05-11 19:19:20'),
(5, 'Important: Rescheduling of Pre-bid meeting for RfS for setting up of Pilot Projects of 500 MW/1000MWh Standalone Battery Energy Storage Systems in India under Tariff-Based Global Competitive Bidding (ESS-I)', '<p>This has&nbsp;reference to the RfS for&nbsp;setting up of Pilot Projects of 500 MW/1000MWh Standalone Battery Energy Storage Systems in India under Tariff-Based Global Competitive Bidding (ESS-I).</p>\r\n\r\n<p>The Pre-bid meeting for the aforementioned tender, which shall be held&nbsp;<strong>only in online mode</strong>, has been rescheduled to&nbsp;<strong>12:30 PM on 6th May 2022.</strong></p>\r\n\r\n<p>Invitations for the meeting will be sent out to the registered participants.</p>\r\n\r\n<p>SECI may limit the number of participants from each organization to 2 (two), in view of limitations on the Teams platform.</p>\r\n', '2022-05-11 19:19:38'),
(6, 'Extension of Bid submission Deadline: Tender for the Design, Engineering, Supply, Construction, Erection, Testing & Commissioning of 100 MW (AC) Floating Solar PV Project having 10 years plant O&M at Getalsud Dam, Ranchi, Jharkhand, India', '<p><strong>Extension of Bid submission Deadline: Tender for the Design, Engineering, Supply, Construction, Erection, Testing &amp; Commissioning of 100 MW (AC) Floating Solar PV Project having 10 years plant O&amp;M at Getalsud Dam, Ranchi, Jharkhand, India</strong></p>\r\n\r\n<p><strong>Employer</strong>: Solar Energy Corporation of India Limited (SECI), New Delhi, India</p>\r\n\r\n<p><strong>Project:&nbsp;</strong>Innovation in Solar Power and Hybrid Technologies Project</p>\r\n\r\n<p><strong>Contract title</strong>: Tender for the Design, Engineering, Supply, Construction, Erection, Testing &amp; Commissioning of 100 MW (AC) Floating Solar PV Project having 10 years plant O&amp;M at Getalsud Dam, Ranchi, Jharkhand, India</p>\r\n\r\n<p><strong>RFB No:&nbsp;</strong>SECI/C&amp;P/OP/17/002/21-22</p>\r\n\r\n<p><strong>Tender Search Code (TSC) for the RfB</strong>: SECI-2022-TN000005</p>\r\n\r\n<p><strong>Extension of Bid submission Deadline</strong>:&nbsp;</p>\r\n\r\n<p>Existing Date &amp; Time of Bid Submission:&nbsp;30.04.2022 till 1400 HRS</p>\r\n\r\n<p>Existing Date &amp; Time of Bid Opening:&nbsp;30.04.2022 at 1430 HRS</p>\r\n\r\n<p>Revised Date &amp; Time of Bid Submission:&nbsp;31.05.2022 till 1400 HRS</p>\r\n\r\n<p>Revised Date &amp; Time of Bid Opening:&nbsp;31.05.2022 at 1430 HRS</p>\r\n\r\n<p>Prospective Bidders are requested to remain updated for any notices wrt this RfB through the websites&nbsp;www.seci.co.in&nbsp;and&nbsp;<a href=\"https://www.bharat-electronictender.com/\">https://www.bharat-electronictender.com</a>&nbsp;as no separate notification will be issued in this regard.</p>\r\n', '2022-05-11 19:19:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `introduction`
--
ALTER TABLE `introduction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `objective`
--
ALTER TABLE `objective`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vision_mission`
--
ALTER TABLE `vision_mission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `whats_app`
--
ALTER TABLE `whats_app`
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
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `introduction`
--
ALTER TABLE `introduction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `objective`
--
ALTER TABLE `objective`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vision_mission`
--
ALTER TABLE `vision_mission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `whats_app`
--
ALTER TABLE `whats_app`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
