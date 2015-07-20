/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : 127.0.0.1:3306
Source Database       : blog

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2015-07-20 17:50:08
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for fny_article
-- ----------------------------
DROP TABLE IF EXISTS `fny_article`;
CREATE TABLE `fny_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL COMMENT '文章标题',
  `abstract` varchar(200) DEFAULT NULL COMMENT '摘要',
  `author` varchar(20) DEFAULT NULL COMMENT '作者',
  `click_num` smallint(1) DEFAULT NULL COMMENT '阅读数量',
  `sort` tinyint(4) NOT NULL DEFAULT '0' COMMENT '排序',
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '状态',
  `addtime` int(11) DEFAULT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='文章基础表';

-- ----------------------------
-- Records of fny_article
-- ----------------------------
INSERT INTO `fny_article` VALUES ('1', 'Hello World', null, 'Fennay', '0', '0', '1', '1437384237');
INSERT INTO `fny_article` VALUES ('2', '2222', '', 'admin', '0', '0', '1', '1437384498');

-- ----------------------------
-- Table structure for fny_article_cate
-- ----------------------------
DROP TABLE IF EXISTS `fny_article_cate`;
CREATE TABLE `fny_article_cate` (
  `aid` int(11) NOT NULL COMMENT '文章ID',
  `cid` int(11) DEFAULT NULL COMMENT '分类ID'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='文章分类中间表';

-- ----------------------------
-- Records of fny_article_cate
-- ----------------------------
INSERT INTO `fny_article_cate` VALUES ('2', '1');

-- ----------------------------
-- Table structure for fny_article_content
-- ----------------------------
DROP TABLE IF EXISTS `fny_article_content`;
CREATE TABLE `fny_article_content` (
  `aid` int(11) NOT NULL,
  `content` text COMMENT '文章内容'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='文章内容表';

-- ----------------------------
-- Records of fny_article_content
-- ----------------------------
INSERT INTO `fny_article_content` VALUES ('1', '&lt;p&gt;Hello World&lt;/p&gt;');
INSERT INTO `fny_article_content` VALUES ('2', '&lt;p&gt;2222&lt;/p&gt;');

-- ----------------------------
-- Table structure for fny_article_seo
-- ----------------------------
DROP TABLE IF EXISTS `fny_article_seo`;
CREATE TABLE `fny_article_seo` (
  `aid` int(11) NOT NULL COMMENT '文章ID',
  `seo_title` varchar(50) DEFAULT NULL COMMENT 'SEO标题',
  `seo_keyword` varchar(50) DEFAULT NULL COMMENT 'SEO关键字',
  `seo_desc` varchar(255) DEFAULT NULL COMMENT 'SEO描述'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='文章SEO表';

-- ----------------------------
-- Records of fny_article_seo
-- ----------------------------
INSERT INTO `fny_article_seo` VALUES ('1', 'Hello World', 'Hello World', 'Hello World');
INSERT INTO `fny_article_seo` VALUES ('2', '', '', '');

-- ----------------------------
-- Table structure for fny_article_tag
-- ----------------------------
DROP TABLE IF EXISTS `fny_article_tag`;
CREATE TABLE `fny_article_tag` (
  `aid` int(11) NOT NULL COMMENT '文章ID',
  `tid` int(11) NOT NULL COMMENT '标签ID'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='文章标签中间表';

-- ----------------------------
-- Records of fny_article_tag
-- ----------------------------
INSERT INTO `fny_article_tag` VALUES ('2', '0');

-- ----------------------------
-- Table structure for fny_auth_group
-- ----------------------------
DROP TABLE IF EXISTS `fny_auth_group`;
CREATE TABLE `fny_auth_group` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(100) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `rules` char(80) NOT NULL DEFAULT '',
  `desc` text COMMENT '描述',
  `pid` tinyint(4) NOT NULL DEFAULT '0' COMMENT '父级pid',
  `level` tinyint(4) NOT NULL DEFAULT '1' COMMENT '级别',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='权限组';

-- ----------------------------
-- Records of fny_auth_group
-- ----------------------------
INSERT INTO `fny_auth_group` VALUES ('1', '总经办', '1', '', '总经办', '0', '1');
INSERT INTO `fny_auth_group` VALUES ('2', '客服部', '1', '1,2,3,4,5,6,7,8,14,13,15,16,17,18,19', '客服部', '1', '2');
INSERT INTO `fny_auth_group` VALUES ('3', '国内计调', '1', '1', '国内计调', '2', '3');
INSERT INTO `fny_auth_group` VALUES ('4', '出境计调', '1', '1,2,3,4,5,9,13', '出境计调', '2', '3');
INSERT INTO `fny_auth_group` VALUES ('5', '技术部', '1', '', '技术部', '1', '2');

-- ----------------------------
-- Table structure for fny_auth_group_access
-- ----------------------------
DROP TABLE IF EXISTS `fny_auth_group_access`;
CREATE TABLE `fny_auth_group_access` (
  `uid` mediumint(8) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  UNIQUE KEY `uid_group_id` (`uid`,`group_id`),
  KEY `uid` (`uid`),
  KEY `group_id` (`group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='组权限中间表';

-- ----------------------------
-- Records of fny_auth_group_access
-- ----------------------------
INSERT INTO `fny_auth_group_access` VALUES ('1', '1');
INSERT INTO `fny_auth_group_access` VALUES ('2', '2');
INSERT INTO `fny_auth_group_access` VALUES ('4', '3');
INSERT INTO `fny_auth_group_access` VALUES ('5', '4');

-- ----------------------------
-- Table structure for fny_auth_rule
-- ----------------------------
DROP TABLE IF EXISTS `fny_auth_rule`;
CREATE TABLE `fny_auth_rule` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(80) NOT NULL DEFAULT '',
  `title` char(20) NOT NULL DEFAULT '',
  `type` tinyint(1) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `condition` char(100) NOT NULL DEFAULT '',
  `pid` int(11) NOT NULL DEFAULT '0' COMMENT '父级ID',
  `level` int(5) NOT NULL DEFAULT '1' COMMENT '级别',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COMMENT='权限规则表';

-- ----------------------------
-- Records of fny_auth_rule
-- ----------------------------
INSERT INTO `fny_auth_rule` VALUES ('1', '/Padmin/Index/index', '首页', '1', '0', '', '0', '1');
INSERT INTO `fny_auth_rule` VALUES ('2', '/Pres/Index/index', '资源', '1', '1', '', '0', '1');
INSERT INTO `fny_auth_rule` VALUES ('3', '/Pres/Depart/index', '出发地管理', '1', '1', '', '2', '2');
INSERT INTO `fny_auth_rule` VALUES ('4', '/Pres/Depart/add', '添加出发地', '1', '1', '', '3', '3');
INSERT INTO `fny_auth_rule` VALUES ('5', '/Pres/Depart/edit', '编辑出发地', '1', '1', '', '3', '3');
INSERT INTO `fny_auth_rule` VALUES ('6', '/Pres/Area/index', '区域管理', '1', '1', '', '2', '2');
INSERT INTO `fny_auth_rule` VALUES ('7', '/Pres/Area/add', '添加区域', '1', '1', '', '6', '3');
INSERT INTO `fny_auth_rule` VALUES ('8', '/Pres/Area/edit', '编辑区域', '1', '1', '', '6', '3');
INSERT INTO `fny_auth_rule` VALUES ('9', '/Pres/Group/index', '部门管理', '1', '1', '', '2', '2');
INSERT INTO `fny_auth_rule` VALUES ('10', '/Pres/Group/add', '添加部门', '1', '1', '', '9', '3');
INSERT INTO `fny_auth_rule` VALUES ('11', '/Pres/Group/edit', '部门编辑', '1', '1', '', '9', '3');
INSERT INTO `fny_auth_rule` VALUES ('12', '/Pres/Group/access', '授权', '1', '1', '', '9', '3');
INSERT INTO `fny_auth_rule` VALUES ('13', '/Pres/Group/ajax_get_members', '查看成员', '1', '1', '', '9', '3');
INSERT INTO `fny_auth_rule` VALUES ('14', '/Pres/Manager/index', '管理员管理', '1', '1', '', '2', '2');
INSERT INTO `fny_auth_rule` VALUES ('15', '/Pres/manager/add', '添加管理员', '1', '1', '', '14', '3');
INSERT INTO `fny_auth_rule` VALUES ('16', '/Pres/manager/edit', '编辑管理员', '1', '1', '', '14', '3');
INSERT INTO `fny_auth_rule` VALUES ('17', '/Pres/Scenic/index', '景点管理', '1', '1', '', '2', '2');
INSERT INTO `fny_auth_rule` VALUES ('18', '/Pres/Scenic/add', '添加景点', '1', '1', '', '17', '3');
INSERT INTO `fny_auth_rule` VALUES ('19', '/Pres/Scenic/edit', '编辑景点', '1', '1', '', '17', '3');

-- ----------------------------
-- Table structure for fny_cate
-- ----------------------------
DROP TABLE IF EXISTS `fny_cate`;
CREATE TABLE `fny_cate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL COMMENT '名称',
  `sort` tinyint(4) NOT NULL DEFAULT '0' COMMENT '排序',
  `status` tinyint(255) NOT NULL DEFAULT '1' COMMENT '状态，0表示关闭，1表示开启',
  `desc` text COMMENT '描述',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='分类表';

-- ----------------------------
-- Records of fny_cate
-- ----------------------------
INSERT INTO `fny_cate` VALUES ('1', '人生', '0', '1', 'Linux');
INSERT INTO `fny_cate` VALUES ('2', '百味', '0', '1', '百味');
INSERT INTO `fny_cate` VALUES ('3', '关于', '0', '1', '关于');

-- ----------------------------
-- Table structure for fny_log
-- ----------------------------
DROP TABLE IF EXISTS `fny_log`;
CREATE TABLE `fny_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL COMMENT '用户id',
  `time` int(11) DEFAULT NULL COMMENT '操作时间',
  `ip` varchar(255) DEFAULT NULL COMMENT '操作员ip地址',
  `type` varchar(255) DEFAULT NULL COMMENT '类型',
  `content` text COMMENT '内容',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COMMENT='日志表';

-- ----------------------------
-- Records of fny_log
-- ----------------------------
INSERT INTO `fny_log` VALUES ('1', '50', '1432547360', '127.0.0.1', '正常', '我去年买了个表');
INSERT INTO `fny_log` VALUES ('2', '50', '1432547364', '127.0.0.1', '正常', '我去年买了个表');
INSERT INTO `fny_log` VALUES ('3', '50', '1432547366', '127.0.0.1', '正常', '我去年买了个表');
INSERT INTO `fny_log` VALUES ('4', '50', '1432547368', '127.0.0.1', '正常', '我去年买了个表');
INSERT INTO `fny_log` VALUES ('5', '50', '1432547951', '127.0.0.1', '正常', '我去年买了个表');
INSERT INTO `fny_log` VALUES ('6', '50', '1432547952', '127.0.0.1', '正常', '我去年买了个表');
INSERT INTO `fny_log` VALUES ('7', '50', '1432547956', '127.0.0.1', '正常', '我去年买了个表');
INSERT INTO `fny_log` VALUES ('8', '50', '1432548366', '127.0.0.1', '正常', '我去年买了个表');
INSERT INTO `fny_log` VALUES ('9', '50', '1432548370', '127.0.0.1', '正常', '我去年买了个表');
INSERT INTO `fny_log` VALUES ('10', '50', '1432548372', '127.0.0.1', '正常', '我去年买了个表');
INSERT INTO `fny_log` VALUES ('11', '50', '1432548374', '127.0.0.1', '正常', '我去年买了个表');
INSERT INTO `fny_log` VALUES ('12', '50', '1432548458', '127.0.0.1', '正常', '我去年买了个表');
INSERT INTO `fny_log` VALUES ('13', '50', '1432548461', '127.0.0.1', '正常', '我去年买了个表');
INSERT INTO `fny_log` VALUES ('14', '50', '1432548903', '127.0.0.1', '正常', '我去年买了个表');
INSERT INTO `fny_log` VALUES ('15', '50', '1432548906', '127.0.0.1', '正常', '我去年买了个表');
INSERT INTO `fny_log` VALUES ('16', '50', '1432548908', '127.0.0.1', '正常', '我去年买了个表');
INSERT INTO `fny_log` VALUES ('17', '50', '1432549437', '127.0.0.1', '正常', '我去年买了个表');
INSERT INTO `fny_log` VALUES ('18', '50', '1432549441', '127.0.0.1', '正常', '我去年买了个表');

-- ----------------------------
-- Table structure for fny_manager
-- ----------------------------
DROP TABLE IF EXISTS `fny_manager`;
CREATE TABLE `fny_manager` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增长ID',
  `username` varchar(50) DEFAULT NULL COMMENT '登录名',
  `password` char(65) DEFAULT NULL,
  `qq` varchar(15) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `nickname` varchar(50) DEFAULT NULL COMMENT '昵称',
  `status` tinyint(4) DEFAULT NULL COMMENT '状态，1表示正常，0，表示关闭',
  `sort` int(4) NOT NULL DEFAULT '0' COMMENT '排序',
  `desc` text COMMENT '简介',
  `area_id` varchar(255) DEFAULT NULL COMMENT '管理的区域',
  `last_ip` varchar(255) DEFAULT NULL COMMENT '最后登陆ip',
  `last_time` int(11) DEFAULT NULL COMMENT '最后登陆时间',
  `login_num` int(11) NOT NULL DEFAULT '0' COMMENT '登陆次数',
  `level` tinyint(4) DEFAULT NULL COMMENT '级别',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COMMENT='管理员';

-- ----------------------------
-- Records of fny_manager
-- ----------------------------
INSERT INTO `fny_manager` VALUES ('1', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '123456', '13886686831', '123456@qq.com', '超级管理员', '1', '0', '超级管理员', '1', '127.0.0.1', '1437380926', '91', '1');
INSERT INTO `fny_manager` VALUES ('2', 'wuyue', 'e10adc3949ba59abbe56e057f20f883e', '3067518067', '18171083359', '3067518067@qq.com', '五月', '1', '0', '五月', '1', '127.0.0.1', '1434015438', '13', '2');
INSERT INTO `fny_manager` VALUES ('3', 'shimei', 'e10adc3949ba59abbe56e057f20f883e', '2785117199', '18171085815', '2785117199@qq.com', '师妹', '1', '0', '', '1', null, null, '0', '3');
INSERT INTO `fny_manager` VALUES ('4', 'tangtang', 'e10adc3949ba59abbe56e057f20f883e', '2631808932', '18171085709', '2631808932@qq.com', '糖糖', '1', '0', '', '2', '127.0.0.1', '1434015462', '4', '3');
INSERT INTO `fny_manager` VALUES ('5', 'liuxu', 'e10adc3949ba59abbe56e057f20f883e', '2748920049', '2748920049', '2748920049', '柳絮', '1', '0', '', '1', '127.0.0.1', '1434013641', '2', '3');

-- ----------------------------
-- Table structure for fny_tag
-- ----------------------------
DROP TABLE IF EXISTS `fny_tag`;
CREATE TABLE `fny_tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL COMMENT '名称',
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '状态，0表示关闭，1表示开启',
  `sort` tinyint(4) NOT NULL DEFAULT '0' COMMENT '排序',
  `desc` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='标签表';

-- ----------------------------
-- Records of fny_tag
-- ----------------------------
INSERT INTO `fny_tag` VALUES ('1', 'Linux', '1', '0', null);
INSERT INTO `fny_tag` VALUES ('2', 'PHP', '1', '0', null);

-- ----------------------------
-- View structure for tb_v_bind_fan
-- ----------------------------
DROP VIEW IF EXISTS `tb_v_bind_fan`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER  VIEW `tb_v_bind_fan` AS SELECT
tb_pro.title,
tb_corp.corpname,
tb_pro.line,
tb_pro.catid,
tb_pro.procode,
tb_pro.corp_id,
tb_pro.id AS pro_id,
tb_corp.mobile,
tb_pro.pm_manjian,
tb_pro.pm_xianfan,
tb_pro.pm_houfan
FROM
tb_pro
INNER JOIN tb_corp ON tb_pro.corp_id = tb_corp.id ; ;

-- ----------------------------
-- View structure for tb_v_bind_manjian
-- ----------------------------
DROP VIEW IF EXISTS `tb_v_bind_manjian`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER  VIEW `tb_v_bind_manjian` AS SELECT
tb_pro.title,
tb_corp.corpname,
tb_pro.line,
tb_pro.catid,
tb_pro.procode,
tb_pro.corp_id,
tb_pro.id AS pro_id,
tb_corp.mobile,
tb_activity.title AS mj_title,
tb_pro.pm_manjian,
tb_pro.pm_xianfan,
tb_pro.pm_houfan
FROM
tb_pro
INNER JOIN tb_corp ON tb_pro.corp_id = tb_corp.id
LEFT JOIN tb_activity ON tb_pro.pm_manjian = tb_activity.id ; ;

-- ----------------------------
-- View structure for tb_v_bind_search
-- ----------------------------
DROP VIEW IF EXISTS `tb_v_bind_search`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER  VIEW `tb_v_bind_search` AS SELECT
tb_pro.title,
tb_corp.corpname,
tb_pro.line,
tb_env_limit_gx.locked,
tb_env_limit.l_amount,
tb_env_limit.l_percent,
tb_env_limit.category,
tb_pro.catid,
tb_pro.procode,
tb_pro.id AS pro_id,
tb_corp.mobile
FROM
tb_pro
INNER JOIN tb_corp ON tb_pro.corp_id = tb_corp.id
LEFT JOIN tb_env_limit_gx ON tb_env_limit_gx.pro_id = tb_pro.id
LEFT JOIN tb_env_limit ON tb_env_limit_gx.limit_id = tb_env_limit.id
ORDER BY
tb_env_limit_gx.id ASC ; ;

-- ----------------------------
-- View structure for tb_v_ens_bind
-- ----------------------------
DROP VIEW IF EXISTS `tb_v_ens_bind`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER  VIEW `tb_v_ens_bind` AS SELECT
tb_pro.title,
tb_corp.corpname,
tb_pro.line,
tb_pro.catid,
tb_pro.procode,
tb_pro.id AS pro_id,
tb_corp.mobile,
tb_pro_ensurence.pro_id AS is_binded,
tb_pro_ensurence.ens_id
FROM
tb_pro
INNER JOIN tb_corp ON tb_pro.corp_id = tb_corp.id
LEFT JOIN tb_pro_ensurence ON tb_pro.id = tb_pro_ensurence.pro_id ; ;

-- ----------------------------
-- View structure for tb_v_line_num
-- ----------------------------
DROP VIEW IF EXISTS `tb_v_line_num`;
CREATE ALGORITHM=UNDEFINED DEFINER=`lpy`@`%` SQL SECURITY DEFINER  VIEW `tb_v_line_num` AS SELECT
tb_order.id,
tb_order_line.order_id,
tb_order.cateId,
tb_order.addtime,
tb_order_line.adultnum,
tb_order_line.childnum,
tb_order.`status`
FROM
tb_order
INNER JOIN tb_order_line ON tb_order.id = tb_order_line.order_id ; ;

-- ----------------------------
-- View structure for tb_v_ticket_num
-- ----------------------------
DROP VIEW IF EXISTS `tb_v_ticket_num`;
CREATE ALGORITHM=UNDEFINED DEFINER=`lpy`@`%` SQL SECURITY DEFINER  VIEW `tb_v_ticket_num` AS SELECT
tb_order.id,
tb_order_ticket.order_id,
tb_order.cateId,
tb_order.addtime,
tb_order_ticket.ticket_num,
tb_order.`status`
FROM
tb_order
INNER JOIN tb_order_ticket ON tb_order.id = tb_order_ticket.order_id ;
