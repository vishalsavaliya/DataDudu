-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2016 at 01:13 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apidoc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_profile`
--

CREATE TABLE `admin_profile` (
  `profile_id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `mobile` char(10) DEFAULT NULL,
  `business_name` varchar(50) DEFAULT NULL,
  `website` varchar(100) DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_profile`
--

INSERT INTO `admin_profile` (`profile_id`, `name`, `email`, `username`, `password`, `mobile`, `business_name`, `website`, `last_login`, `register_date`) VALUES
(1, 'Admin', 'vishaltesting7@gmail.com', 'vishal', '123', '7405411349', NULL, NULL, '2016-02-05 02:09:38', '2016-01-29 05:09:57');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ch_category_name` text COLLATE utf8_unicode_ci,
  `corder` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `ch_category_name`, `corder`) VALUES
(5, 'Key Information', '关键的信息', 1),
(6, 'User Account Management ', '用户账户管理 ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `doc_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `doc_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ch_doc_name` text COLLATE utf8_unicode_ci,
  `doc_date` date NOT NULL,
  `description` text CHARACTER SET latin1,
  `ch_description` text COLLATE utf8_unicode_ci,
  `dorder` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`doc_id`, `category_id`, `doc_name`, `ch_doc_name`, `doc_date`, `description`, `ch_description`, `dorder`) VALUES
(4, 5, 'Authentication Information', '认证资料', '2016-01-29', '<p><strong>token_id </strong>is for internal use only &ndash; used for web portal access after user login from website</p>\r\n\r\n<p><strong>account_key </strong>is for public/users to use externally &ndash; for updating channels and data through the API</p>\r\n', '<p><strong>token_id </strong>是为内部使用的唯一使用万维网门户进入后用户的登陆从网站</p>\r\n\r\n<p><strong>account_key </strong>是公共/用户使用外部更新的渠道和数据通过的宣传短片</p>\r\n', 1),
(5, 5, 'Device Information', '装置的资料', '2016-01-29', '<p><strong>activation_code </strong>: The code submitted to DataDudu by a device with Internet connectivity when the device powers on (&ldquo;wakes up&rdquo;). The Activate Device API stores the activation code and activation date as attributes of the device in the database and returns the channel_id and api_key to the device. A device creates its activation code by executing firmware instructions that use the HMAC-SHA1 algorithm to create a unique, non-guessable ID, based on the serial number of the device and the product secret stored in the device&rsquo;s firmware.</p>\r\n\r\n<p><strong>Product Secret</strong>: A random hex string automatically generated when a product is created in the provisioning system. The product secret is used in the activation process.</p>\r\n', '<p><strong>activation_code </strong>：《法典》提交DataDudu的的爆炸装置的互联网连接时装置的权力(&quot;醒来的&quot;）。 的启动装置研究所储存的启动法典》和启动日期为特征的装置的数据库和回返的channel_id和api_key的装置。 一个装置造成其启动法》的执行的软件的指示，使用的HMAC-SHA1算法创造一个独特的、非guessable身份证基础上的序列号的设备和产品的秘密储存在这些装置是固件</p>\r\n\r\n<p><strong>生产总值的秘密</strong>：随机的hex string，会自动生成一种产品设定的提供系统。 的产品的秘密就是用来启动的进程。</p>\r\n', 1),
(6, 6, 'Create User Account Internal', '建立用户账户内部', '2016-01-29', '<p>To create a user, send an HTTP <strong>POST</strong> to http://api.datadudu.com/accounts/create&nbsp;<br />\r\n&nbsp;</p>\r\n\r\n<p><strong>JSON Body FIELDS: </strong><br />\r\nusername, password, email, timezone</p>\r\n\r\n<p><br />\r\n<strong>Example Body:</strong></p>\r\n\r\n<p>{&quot;username&quot;:&quot;abc&quot;,&quot;password&quot;:&quot;123&quot;,&quot;email&quot;:&quot;123@gmail.com&quot;, &ldquo;timezone&rdquo;: &ldquo;Europe/London&rdquo;, &quot;<strong>captcha_code</strong>&quot;:&quot;&quot;}</p>\r\n\r\n<p><strong>Captcha</strong> Image URL: <a href="http://api.dudubots.com/accounts/captcha">http://api.datadudu.com/accounts/captcha</a></p>\r\n\r\n<p>Response:</p>\r\n\r\n<p>{&quot;result&quot;:&quot;success&quot;,&quot;user&quot;:{&quot;username&quot;:&quot;scdcd&quot;,&quot;email&quot;:&quot;asdf@dfd.cddddom&quot;,&quot;<strong>account_key</strong>&quot;:&quot;d9b4cb5cf9be1324380817232aaef9ed&quot;}}</p>\r\n\r\n<p><strong>account_key</strong> is used for managing channels through the API.&nbsp;</p>\r\n', '<p>创造一个使用者发出一个HTTP <strong>后</strong> ，http://api.datadudu.com/accounts/create<br />\r\n&nbsp;</p>\r\n\r\n<p><strong>JSON体领域： </strong><br />\r\n用户名、口令、电子邮件、timezone</p>\r\n\r\n<p><br />\r\n<strong>如机构：</strong></p>\r\n\r\n<p>{的&quot;用户名&quot;这一用语：&quot;abc&quot;,&quot;password&quot;:&quot;123的&quot;、&quot;电子邮件&quot;这一用语：&quot;123@gmail.com&quot;,&quot;timezone&quot;:&quot;欧洲/伦敦的&quot;、&quot;<strong>captcha_code</strong>的&quot;：&quot;&quot;}</p>\r\n\r\n<p><strong>Captcha</strong> 形象URL: <a href="http://api.dudubots.com/accounts/captcha">http://api.datadudu.com/accounts/captcha</a></p>\r\n\r\n<p>答复：</p>\r\n\r\n<p>{的&quot;结果&quot;是：&quot;成功&quot;、&quot;用户&quot;的：&quot;用户名&quot;这一用语：&quot;scdcd的&quot;、&quot;电子邮件&quot;这一用语：&quot;asdf@dfd.cddddom&quot;,&quot;<strong>account_key</strong>&quot;:&quot;d9b4cb5cf9be1324380817232aaef9ed&quot;}}</p>\r\n\r\n<p><strong>account_key</strong> 使用管理的渠道是通过电视宣传短片。</p>\r\n', 3),
(7, 6, 'Create User Account External', '建立用户账户外', '2016-01-29', '<p>To create a user, send an HTTP <strong>POST</strong> to http://api.datadudu.com/accounts/create&nbsp;<br />\r\n&nbsp;</p>\r\n\r\n<p><strong>JSON Body FIELDS: </strong><br />\r\nusername, password, email, timezone</p>\r\n\r\n<p><br />\r\n<strong>Example Body:</strong></p>\r\n\r\n<p>{&quot;username&quot;:&quot;abc&quot;,&quot;password&quot;:&quot;123&quot;,&quot;email&quot;:&quot;123@gmail.com&quot;, &ldquo;timezone&rdquo;: &ldquo;Europe/London&rdquo;, &quot;<strong>captcha_code</strong>&quot;:&quot;&quot;}</p>\r\n\r\n<p><strong>Captcha</strong> Image URL: <a href="http://api.dudubots.com/accounts/captcha">http://api.datadudu.com/accounts/captcha</a></p>\r\n\r\n<p>Response:</p>\r\n\r\n<p>{&quot;result&quot;:&quot;success&quot;,&quot;user&quot;:{&quot;username&quot;:&quot;scdcd&quot;,&quot;email&quot;:&quot;asdf@dfd.cddddom&quot;,&quot;<strong>account_key</strong>&quot;:&quot;d9b4cb5cf9be1324380817232aaef9ed&quot;}}</p>\r\n\r\n<p><strong>account_key</strong> is used for managing channels through the API.&nbsp;</p>\r\n', '<p>创造一个使用者发出一个HTTP <strong>后</strong> ，http://api.datadudu.com/accounts/create<br />\r\n&nbsp;</p>\r\n\r\n<p><strong>JSON体领域： </strong><br />\r\n用户名、口令、电子邮件、timezone</p>\r\n\r\n<p><br />\r\n<strong>如机构：</strong></p>\r\n\r\n<p>{的&quot;用户名&quot;这一用语：&quot;abc&quot;,&quot;password&quot;:&quot;123的&quot;、&quot;电子邮件&quot;这一用语：&quot;123@gmail.com&quot;,&quot;timezone&quot;:&quot;欧洲/伦敦的&quot;、&quot;<strong>captcha_code</strong>的&quot;：&quot;&quot;}</p>\r\n\r\n<p><strong>Captcha</strong> 形象URL: <a href="http://api.dudubots.com/accounts/captcha">http://api.datadudu.com/accounts/captcha</a></p>\r\n\r\n<p>答复：</p>\r\n\r\n<p>{的&quot;结果&quot;是：&quot;成功&quot;、&quot;用户&quot;的：&quot;用户名&quot;这一用语：&quot;scdcd的&quot;、&quot;电子邮件&quot;这一用语：&quot;asdf@dfd.cddddom&quot;,&quot;<strong>account_key</strong>&quot;:&quot;d9b4cb5cf9be1324380817232aaef9ed&quot;}}</p>\r\n\r\n<p><strong>account_key</strong> 使用管理的渠道是通过电视宣传短片。</p>\r\n', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_profile`
--
ALTER TABLE `admin_profile`
  ADD PRIMARY KEY (`profile_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`doc_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_profile`
--
ALTER TABLE `admin_profile`
  MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `document`
--
ALTER TABLE `document`
  MODIFY `doc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
