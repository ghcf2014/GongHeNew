-- phpMyAdmin SQL Dump
-- version 4.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2015-08-25 10:10:11
-- 服务器版本： 10.0.16-MariaDB
-- PHP Version: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gonghe_new`
--

-- --------------------------------------------------------

--
-- 表的结构 `gonghe_ad`
--

CREATE TABLE IF NOT EXISTS `gonghe_ad` (
  `id` int(11) unsigned NOT NULL COMMENT '编号',
  `title` varchar(50) NOT NULL COMMENT '文章标题',
  `start` int(10) unsigned NOT NULL COMMENT '开始时间',
  `end` int(10) unsigned NOT NULL COMMENT '结束时间',
  `times` int(10) unsigned NOT NULL COMMENT '活动时间',
  `content` longtext NOT NULL COMMENT '活动内容',
  `add_time` int(10) unsigned NOT NULL COMMENT '添加时间',
  `click` int(11) unsigned NOT NULL COMMENT '点击量',
  `type` int(1) unsigned NOT NULL COMMENT '活动类型',
  `add_ip` int(15) unsigned NOT NULL COMMENT '添加IP',
  `other` varchar(50) NOT NULL COMMENT '备注'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='活动信息管理表';

-- --------------------------------------------------------

--
-- 表的结构 `gonghe_admin_user`
--

CREATE TABLE IF NOT EXISTS `gonghe_admin_user` (
  `id` int(11) NOT NULL COMMENT '用户ID',
  `username` varchar(20) NOT NULL COMMENT '用户名',
  `nickname` varchar(30) NOT NULL COMMENT '昵称',
  `password` varchar(32) NOT NULL COMMENT '密码',
  `type` int(11) NOT NULL COMMENT '用户类型',
  `email` varchar(32) NOT NULL COMMENT '邮箱',
  `tel` int(11) NOT NULL COMMENT '联系电话',
  `reg_time` int(11) NOT NULL COMMENT '注册时间',
  `reg_ip` varchar(15) NOT NULL COMMENT '注册IPs',
  `login_time` int(15) unsigned NOT NULL COMMENT '登录时间',
  `login_ip` varchar(15) NOT NULL COMMENT '登录IP',
  `login_num` int(11) unsigned NOT NULL COMMENT '登陆次数',
  `status` int(2) NOT NULL COMMENT '管理员状态'
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='会员用户表';

--
-- 转存表中的数据 `gonghe_admin_user`
--

INSERT INTO `gonghe_admin_user` (`id`, `username`, `nickname`, `password`, `type`, `email`, `tel`, `reg_time`, `reg_ip`, `login_time`, `login_ip`, `login_num`, `status`) VALUES
(1, 'shuangshuang', '双双', 'e10adc3949ba59abbe56e057f20f883e', 0, '', 0, 1437660657, '127.0.0.1', 0, '', 0, 0),
(2, 'xiangxiang', '香香', 'e10adc3949ba59abbe56e057f20f883e', 0, '', 0, 1437720011, '127.0.0.1', 0, '', 0, 0),
(3, 'colin', '刘洋', 'e10adc3949ba59abbe56e057f20f883e', 0, '', 0, 1438061605, '127.0.0.1', 0, '', 0, 0),
(4, 'huizheshijie', '灰这世界', 'e10adc3949ba59abbe56e057f20f883e', 0, '', 0, 1438062070, '127.0.0.1', 0, '', 0, 0),
(5, 'hadeswsy', 'hadeswsy', 'e10adc3949ba59abbe56e057f20f883e', 0, '', 0, 1440406685, '127.0.0.1', 0, '', 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `gonghe_article`
--

CREATE TABLE IF NOT EXISTS `gonghe_article` (
  `id` int(11) unsigned NOT NULL COMMENT '编号',
  `title` varchar(200) NOT NULL COMMENT '文章标题',
  `add_time` int(10) NOT NULL COMMENT '添加时间',
  `add_ip` int(15) NOT NULL COMMENT '添加IP',
  `uid` int(11) NOT NULL COMMENT '添加id',
  `content` varchar(10000) NOT NULL COMMENT '内容',
  `pv` int(12) NOT NULL COMMENT '浏览量'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='网站文章管理表';

-- --------------------------------------------------------

--
-- 表的结构 `gonghe_member_banks`
--

CREATE TABLE IF NOT EXISTS `gonghe_member_banks` (
  `id` int(11) unsigned NOT NULL COMMENT '编号',
  `uid` int(11) unsigned NOT NULL COMMENT '用户ID',
  `visa_num` int(32) unsigned NOT NULL COMMENT '银行卡号',
  `visa_province` varchar(20) NOT NULL COMMENT '银行所在省',
  `visa_city` varchar(20) NOT NULL COMMENT '银行所在市',
  `visa_area` varchar(300) NOT NULL COMMENT '银行所在地区',
  `visa_name` varchar(50) NOT NULL COMMENT '银行名称',
  `add_time` int(15) unsigned NOT NULL COMMENT '添加时间',
  `add_ip` int(20) unsigned NOT NULL COMMENT '添加IP',
  `visa_status` int(2) NOT NULL COMMENT '银行卡状态'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='会员银行信息表';

-- --------------------------------------------------------

--
-- 表的结构 `gonghe_member_credits`
--

CREATE TABLE IF NOT EXISTS `gonghe_member_credits` (
  `id` int(1) unsigned NOT NULL COMMENT '编号',
  `uid` int(1) NOT NULL COMMENT '用户ID',
  `type` int(2) NOT NULL COMMENT '用户类型',
  `affect_credits` int(11) NOT NULL COMMENT '影响积分',
  `account_credits` int(11) NOT NULL COMMENT '总积分',
  `info` varchar(50) NOT NULL COMMENT '备注',
  `add_time` int(11) NOT NULL COMMENT '添加时间',
  `add_ip` int(11) NOT NULL COMMENT '添加IP',
  `level` int(2) NOT NULL COMMENT '用户等级'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='会员积分表';

-- --------------------------------------------------------

--
-- 表的结构 `gonghe_member_friends`
--

CREATE TABLE IF NOT EXISTS `gonghe_member_friends` (
  `id` int(11) unsigned NOT NULL COMMENT '编号',
  `uid` int(11) unsigned NOT NULL COMMENT '用户id',
  `fid` int(11) unsigned NOT NULL COMMENT '好友id',
  `add_time` int(10) unsigned NOT NULL COMMENT '添加时间',
  `add_ip` int(15) unsigned NOT NULL COMMENT '添加IP',
  `other` varchar(50) NOT NULL COMMENT '备注'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='好友管理表';

-- --------------------------------------------------------

--
-- 表的结构 `gonghe_member_loginlog`
--

CREATE TABLE IF NOT EXISTS `gonghe_member_loginlog` (
  `id` int(11) unsigned NOT NULL COMMENT '编号',
  `uid` int(11) NOT NULL COMMENT '会员ID',
  `add_time` int(11) NOT NULL COMMENT '操作时间',
  `add_ip` int(11) NOT NULL COMMENT '登录IP'
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='会员登录日志表';

--
-- 转存表中的数据 `gonghe_member_loginlog`
--

INSERT INTO `gonghe_member_loginlog` (`id`, `uid`, `add_time`, `add_ip`) VALUES
(1, 2, 1438249659, 127);

-- --------------------------------------------------------

--
-- 表的结构 `gonghe_member_massage`
--

CREATE TABLE IF NOT EXISTS `gonghe_member_massage` (
  `id` int(11) unsigned NOT NULL COMMENT '编号',
  `uid` int(11) unsigned NOT NULL COMMENT '通知人id',
  `add_time` int(10) unsigned NOT NULL COMMENT '添加时间',
  `add_ip` int(15) unsigned NOT NULL COMMENT '添加IP',
  `title` varchar(50) NOT NULL COMMENT '消息标题',
  `content` varchar(200) NOT NULL COMMENT '内容',
  `level` int(1) unsigned NOT NULL COMMENT '通知等级',
  `times` int(10) unsigned NOT NULL COMMENT '通知时间点',
  `start` int(10) unsigned NOT NULL COMMENT '通知开始时间',
  `end` int(10) unsigned NOT NULL COMMENT '通知结束时间',
  `type` int(1) unsigned NOT NULL COMMENT '通知类型'
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='会员消息管理表';

--
-- 转存表中的数据 `gonghe_member_massage`
--

INSERT INTO `gonghe_member_massage` (`id`, `uid`, `add_time`, `add_ip`, `title`, `content`, `level`, `times`, `start`, `end`, `type`) VALUES
(1, 2, 1438249659, 127, '登陆提醒', '发生时间2015-07-30 17:47:39', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `gonghe_member_money`
--

CREATE TABLE IF NOT EXISTS `gonghe_member_money` (
  `id` int(11) NOT NULL COMMENT '编号',
  `uid` int(11) NOT NULL COMMENT '用户ID',
  `recharge` int(11) NOT NULL COMMENT '充值',
  `sd_money` int(11) NOT NULL COMMENT '锁定金额',
  `return_money` int(11) NOT NULL COMMENT '待回收金额',
  `all_money` int(11) NOT NULL COMMENT '总金额',
  `invest` int(11) NOT NULL COMMENT '投资金额',
  `last` int(11) NOT NULL COMMENT '可用余额',
  `status` int(11) NOT NULL COMMENT '资金状态',
  `other` varchar(50) NOT NULL COMMENT '备注'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `gonghe_member_payonline`
--

CREATE TABLE IF NOT EXISTS `gonghe_member_payonline` (
  `id` int(11) NOT NULL COMMENT '编号',
  `uid` int(11) NOT NULL COMMENT '会员ID',
  `money` int(11) NOT NULL COMMENT '支付金额',
  `fee` int(11) NOT NULL COMMENT '手续费',
  `way` int(11) NOT NULL COMMENT '充值方式',
  `status` int(11) NOT NULL COMMENT '充值状态',
  `add_time` int(11) NOT NULL COMMENT '充值时间',
  `add_ip` int(11) NOT NULL COMMENT '充值IP',
  `tran_id` int(11) NOT NULL COMMENT '账单流水号',
  `off_bank` int(11) NOT NULL COMMENT '线下汇款银行',
  `off_way` int(11) NOT NULL COMMENT '线下汇款方式',
  `deal_user` int(11) NOT NULL COMMENT '处理人',
  `deal_uid` int(11) NOT NULL COMMENT '处理人ID'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='会员充值记录表';

-- --------------------------------------------------------

--
-- 表的结构 `gonghe_member_status`
--

CREATE TABLE IF NOT EXISTS `gonghe_member_status` (
  `uid` int(11) NOT NULL COMMENT '用户Id',
  `phone_status` int(2) NOT NULL COMMENT '手机验证',
  `idcard_status` int(2) NOT NULL COMMENT '实名验证',
  `email_status` int(2) NOT NULL COMMENT '邮箱验证',
  `video_status` int(2) NOT NULL COMMENT '视频验证',
  `live_status` int(2) NOT NULL COMMENT '现场验证'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='会员认证表';

-- --------------------------------------------------------

--
-- 表的结构 `gonghe_member_user`
--

CREATE TABLE IF NOT EXISTS `gonghe_member_user` (
  `id` int(11) NOT NULL COMMENT '编号',
  `user_name` varchar(20) NOT NULL COMMENT '用户名',
  `user_pass` varchar(32) NOT NULL COMMENT '用户密码',
  `user_type` int(11) NOT NULL COMMENT '用户类型',
  `pin_pass` int(11) DEFAULT NULL COMMENT '交易密码',
  `user_email` varchar(32) NOT NULL COMMENT '邮箱',
  `user_phone` int(11) NOT NULL COMMENT '手机号码',
  `qq` int(10) unsigned NOT NULL COMMENT 'QQ',
  `realname` varchar(30) DEFAULT NULL COMMENT '真实姓名',
  `work` varchar(50) DEFAULT NULL COMMENT '职业',
  `income` int(11) unsigned DEFAULT NULL COMMENT '收入状况',
  `age` int(3) unsigned DEFAULT NULL COMMENT '年龄',
  `idcard` int(18) unsigned DEFAULT NULL COMMENT '身份证号码',
  `card_front` varchar(200) DEFAULT NULL COMMENT '身份证正面',
  `card_back` varchar(200) DEFAULT NULL COMMENT '身份证反面',
  `update_time` int(15) unsigned DEFAULT NULL COMMENT '上传时间',
  `update_ip` int(15) unsigned DEFAULT NULL COMMENT '上传IP',
  `reg_time` int(11) NOT NULL COMMENT '注册时间',
  `reg_ip` int(11) NOT NULL COMMENT '注册IP',
  `level` int(11) DEFAULT NULL COMMENT '会员等级',
  `vip_time` int(11) DEFAULT NULL COMMENT 'VIP到期时间',
  `credits` int(11) DEFAULT NULL COMMENT '积分',
  `recommend_id` int(11) DEFAULT NULL COMMENT '上线ID',
  `customer_id` int(11) DEFAULT NULL COMMENT '客服ID',
  `customer_name` varchar(20) DEFAULT NULL COMMENT '客服姓名',
  `addr` varchar(200) DEFAULT NULL COMMENT '用户注册地址',
  `status` int(2) unsigned NOT NULL COMMENT '用户状态',
  `login_time` int(15) NOT NULL COMMENT '登录时间',
  `login_ip` int(15) NOT NULL COMMENT '登录IP'
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='会员用户表';

--
-- 转存表中的数据 `gonghe_member_user`
--

INSERT INTO `gonghe_member_user` (`id`, `user_name`, `user_pass`, `user_type`, `pin_pass`, `user_email`, `user_phone`, `qq`, `realname`, `work`, `income`, `age`, `idcard`, `card_front`, `card_back`, `update_time`, `update_ip`, `reg_time`, `reg_ip`, `level`, `vip_time`, `credits`, `recommend_id`, `customer_id`, `customer_name`, `addr`, `status`, `login_time`, `login_ip`) VALUES
(2, 'shuangshuang', 'e10adc3949ba59abbe56e057f20f883e', 0, NULL, '', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0),
(3, 'xiangxiang', 'e10adc3949ba59abbe56e057f20f883e', 0, NULL, '', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `gonghe_member_withdraw`
--

CREATE TABLE IF NOT EXISTS `gonghe_member_withdraw` (
  `id` int(11) NOT NULL COMMENT '编号',
  `uid` int(11) unsigned NOT NULL COMMENT '会员ID',
  `withdraw_money` decimal(15,2) unsigned NOT NULL COMMENT '提现金额',
  `withdraw_status` int(2) unsigned NOT NULL COMMENT '提现状态',
  `withdraw_fee` decimal(15,2) unsigned NOT NULL COMMENT '提现手续费',
  `add_time` int(10) NOT NULL COMMENT '体现时间',
  `add_ip` int(16) NOT NULL COMMENT '体现人IP',
  `deal_time` int(10) DEFAULT NULL COMMENT '处理时间',
  `deal_user` varchar(50) DEFAULT NULL COMMENT '处理人',
  `deal_info` varchar(50) DEFAULT NULL COMMENT '备注信息',
  `real_fee` decimal(15,2) unsigned DEFAULT NULL COMMENT '实际手续费',
  `real_money` decimal(15,2) unsigned DEFAULT NULL COMMENT '实际到账金额'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='会员提现表';

-- --------------------------------------------------------

--
-- 表的结构 `gonghe_product_info`
--

CREATE TABLE IF NOT EXISTS `gonghe_product_info` (
  `id` int(11) unsigned NOT NULL COMMENT '产品id',
  `pname` varchar(30) NOT NULL COMMENT '产品名称',
  `pro_label` varchar(20) NOT NULL COMMENT '产品标签',
  `type` varchar(20) NOT NULL COMMENT '产品类型',
  `pro_model` varchar(20) DEFAULT NULL COMMENT '产品模式',
  `price` double(15,3) NOT NULL COMMENT '价格',
  `pro_num` int(11) unsigned NOT NULL COMMENT '产品数量',
  `lock_time` int(2) unsigned NOT NULL COMMENT '锁定期',
  `sale_time` int(10) unsigned NOT NULL COMMENT '产品销售时间',
  `rate` float(3,3) NOT NULL COMMENT '年利率',
  `buy_min` int(11) unsigned NOT NULL COMMENT '最低购买份额',
  `buy_max` int(11) unsigned NOT NULL COMMENT '最高购买份额',
  `status` int(1) unsigned NOT NULL DEFAULT '0' COMMENT '产品状态',
  `add_time` varchar(20) NOT NULL COMMENT '产品更新时间',
  `add_ip` varchar(18) NOT NULL COMMENT '产品更新IP',
  `info` mediumtext NOT NULL COMMENT '产品说明',
  `turn_id` int(11) unsigned NOT NULL COMMENT '订单id',
  `turn_uid` int(11) unsigned NOT NULL COMMENT '转让用户id',
  `turn_rate` int(3) unsigned NOT NULL COMMENT '转让年利率',
  `turn_count` int(10) unsigned NOT NULL COMMENT '转让数量'
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COMMENT='产品信息表';

--
-- 转存表中的数据 `gonghe_product_info`
--

INSERT INTO `gonghe_product_info` (`id`, `pname`, `pro_label`, `type`, `pro_model`, `price`, `pro_num`, `lock_time`, `sale_time`, `rate`, `buy_min`, `buy_max`, `status`, `add_time`, `add_ip`, `info`, `turn_id`, `turn_uid`, `turn_rate`, `turn_count`) VALUES
(7, '测试产品', '最新产品', '放心赚', '线下', 90000.000, 300000, 12, 12, 0.999, 12, 30, 0, '2015-08-03 19:16:15', '127.0.0.1', '快把上面的宝石眼睛拿掉！”考古家对着身后的士兵们说道。\r\n    本人小说还有http://l欢迎收藏\r\n    简介描述：主角说:&quot;哥儿会隐形,根本就不用看B片!&quot;\r\n    主角又是自大地说:“哥长得帅，但并不讨美女喜欢，因为每一次事后她们都怪我说：一夜战到天亮，人家都受不了。”\r\n    书中讲:一个少年研究出一种隐形药,又无意中得到一笔可观的遗产.\r\n    以天才身份进入一间全国最出名的贵族女子学院,成为学院中一级保护动物.\r\n    在这个红尘万千的世界里,主角做成房东,把房子租给一个高级女秘', 0, 0, 0, 0),
(6, '第二季度大甩卖', '新手体验', '放心赚', '线下', 90000.000, 300000, 12, 12, 0.999, 12, 30, 0, '2015-08-03 18:26:06', '127.0.0.1', '载都是一些想象不到的文明。史无前例的文明，所以他们认为这个文明会给世界带来很大的改变，于是联系联合国，要求联合国出资金一起研究这里。\r\n    这个金字塔高有九十多米，整个塔都是采用花岗岩石建筑而成，每一块花岗岩石比起埃及金塔和万里长城的还要大，还要重。这个金字塔只有一个入口，入口就是建筑在塔顶上面，由一长九百多级的石梯直通上面入口。在这个年代已久的金字塔，上面早已长满青苔和不知名植物，或许这一座金字塔曾在水里泡过数百年似的。\r\n    在入口两边由两个不知道的石象守着，这个石象看起来很像蛇，但是蛇头即长出一个长角，还有嘴边两条长六米胡须，不过其中有一座石象已破碎了，考古家一边拍摄一边慢慢地向前面那个可以融下三人宽的入口下去。', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `gonghe_product_list`
--

CREATE TABLE IF NOT EXISTS `gonghe_product_list` (
  `id` int(11) NOT NULL COMMENT '编号',
  `pname` varchar(200) NOT NULL COMMENT '产品名称',
  `add_time` int(15) NOT NULL COMMENT '添加时间',
  `count` int(10) NOT NULL COMMENT '数量',
  `price` int(11) NOT NULL COMMENT '单价',
  `year_rate` int(3) NOT NULL COMMENT '年利率',
  `complete` int(10) NOT NULL COMMENT '完成度',
  `over_time` int(15) NOT NULL COMMENT '过期时间',
  `ptype` tinyint(1) NOT NULL COMMENT '产品类型',
  `add_ip` int(10) unsigned NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COMMENT='产品表';

--
-- 转存表中的数据 `gonghe_product_list`
--

INSERT INTO `gonghe_product_list` (`id`, `pname`, `add_time`, `count`, `price`, `year_rate`, `complete`, `over_time`, `ptype`, `add_ip`) VALUES
(1, 'pname', 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `gonghe_product_turn`
--

CREATE TABLE IF NOT EXISTS `gonghe_product_turn` (
  `id` int(11) unsigned NOT NULL COMMENT '编号',
  `pid` int(11) NOT NULL COMMENT '商品ID',
  `t_time` int(15) NOT NULL COMMENT '转让时间',
  `year_rate` int(5) NOT NULL COMMENT '年利率',
  `t_id` int(11) NOT NULL COMMENT '转让ID',
  `r_id` int(11) NOT NULL COMMENT '接收ID',
  `mark` varchar(200) DEFAULT NULL COMMENT '备注'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='产品转让表';

-- --------------------------------------------------------

--
-- 表的结构 `gonghe_product_type`
--

CREATE TABLE IF NOT EXISTS `gonghe_product_type` (
  `id` int(3) unsigned NOT NULL COMMENT '编号',
  `tname` varchar(30) NOT NULL COMMENT '类型名称',
  `level` int(3) unsigned NOT NULL COMMENT '类型ID',
  `add_time` int(10) unsigned NOT NULL COMMENT '添加时间',
  `other` varchar(30) NOT NULL COMMENT '备注'
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COMMENT='产品类型表';

--
-- 转存表中的数据 `gonghe_product_type`
--

INSERT INTO `gonghe_product_type` (`id`, `tname`, `level`, `add_time`, `other`) VALUES
(1, '最新产品', 0, 1438575517, ''),
(2, '新手体验', 0, 1438577214, '测试'),
(3, '定向理财', 0, 1438583312, '测试'),
(4, '定期投', 1, 1438583576, '测试'),
(5, '93天', 2, 1438583975, '测试'),
(6, '放心赚', 1, 1438596304, '测试'),
(7, '别玩了', 1, 1438596318, '测试');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gonghe_ad`
--
ALTER TABLE `gonghe_ad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gonghe_admin_user`
--
ALTER TABLE `gonghe_admin_user`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`,`nickname`,`email`,`tel`);

--
-- Indexes for table `gonghe_article`
--
ALTER TABLE `gonghe_article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gonghe_member_banks`
--
ALTER TABLE `gonghe_member_banks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gonghe_member_credits`
--
ALTER TABLE `gonghe_member_credits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gonghe_member_friends`
--
ALTER TABLE `gonghe_member_friends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gonghe_member_loginlog`
--
ALTER TABLE `gonghe_member_loginlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gonghe_member_massage`
--
ALTER TABLE `gonghe_member_massage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gonghe_member_user`
--
ALTER TABLE `gonghe_member_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gonghe_member_withdraw`
--
ALTER TABLE `gonghe_member_withdraw`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gonghe_product_info`
--
ALTER TABLE `gonghe_product_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gonghe_product_list`
--
ALTER TABLE `gonghe_product_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gonghe_product_turn`
--
ALTER TABLE `gonghe_product_turn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gonghe_product_type`
--
ALTER TABLE `gonghe_product_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gonghe_ad`
--
ALTER TABLE `gonghe_ad`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '编号';
--
-- AUTO_INCREMENT for table `gonghe_admin_user`
--
ALTER TABLE `gonghe_admin_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '用户ID',AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `gonghe_article`
--
ALTER TABLE `gonghe_article`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '编号';
--
-- AUTO_INCREMENT for table `gonghe_member_banks`
--
ALTER TABLE `gonghe_member_banks`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '编号';
--
-- AUTO_INCREMENT for table `gonghe_member_credits`
--
ALTER TABLE `gonghe_member_credits`
  MODIFY `id` int(1) unsigned NOT NULL AUTO_INCREMENT COMMENT '编号';
--
-- AUTO_INCREMENT for table `gonghe_member_friends`
--
ALTER TABLE `gonghe_member_friends`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '编号';
--
-- AUTO_INCREMENT for table `gonghe_member_loginlog`
--
ALTER TABLE `gonghe_member_loginlog`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '编号',AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `gonghe_member_massage`
--
ALTER TABLE `gonghe_member_massage`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '编号',AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `gonghe_member_user`
--
ALTER TABLE `gonghe_member_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号',AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `gonghe_product_info`
--
ALTER TABLE `gonghe_product_info`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '产品id',AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `gonghe_product_list`
--
ALTER TABLE `gonghe_product_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号',AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `gonghe_product_turn`
--
ALTER TABLE `gonghe_product_turn`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '编号';
--
-- AUTO_INCREMENT for table `gonghe_product_type`
--
ALTER TABLE `gonghe_product_type`
  MODIFY `id` int(3) unsigned NOT NULL AUTO_INCREMENT COMMENT '编号',AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
