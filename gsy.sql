/*
Navicat MySQL Data Transfer

Source Server         : user
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : gsy

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-09-24 18:51:26
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for gsy_address
-- ----------------------------
DROP TABLE IF EXISTS `gsy_address`;
CREATE TABLE `gsy_address` (
  `addr_id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `member_id` int(20) NOT NULL COMMENT '用户id',
  `arer` varchar(200) NOT NULL COMMENT '区域',
  `adderss` varchar(200) NOT NULL COMMENT '具体地址',
  `create_time` int(10) NOT NULL COMMENT '添加时间',
  `def_addr` varchar(200) NOT NULL COMMENT '是否默认地址',
  PRIMARY KEY (`addr_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of gsy_address
-- ----------------------------

-- ----------------------------
-- Table structure for gsy_cart
-- ----------------------------
DROP TABLE IF EXISTS `gsy_cart`;
CREATE TABLE `gsy_cart` (
  `cart_id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `good_id` int(20) NOT NULL,
  `member_id` int(20) NOT NULL,
  `goods_number` varchar(20) NOT NULL,
  `selected` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0 是未选中  1是选中',
  PRIMARY KEY (`cart_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of gsy_cart
-- ----------------------------

-- ----------------------------
-- Table structure for gsy_cate
-- ----------------------------
DROP TABLE IF EXISTS `gsy_cate`;
CREATE TABLE `gsy_cate` (
  `cate_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '栏目ID',
  `name` varchar(20) NOT NULL COMMENT '栏目名称',
  `pid` int(11) NOT NULL COMMENT '父类的ID如果是顶级分类此项值为0',
  `path` varchar(50) NOT NULL COMMENT '父类的path(拼上),自身的id。如果是顶级分类，该值等于自身id',
  `level` int(11) NOT NULL COMMENT '级别。值为父类级别+1.如果是顶级分类，该值为0',
  PRIMARY KEY (`cate_id`)
) ENGINE=MyISAM AUTO_INCREMENT=90 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of gsy_cate
-- ----------------------------
INSERT INTO `gsy_cate` VALUES ('1', '四时蔬菜', '0', '1', '0');
INSERT INTO `gsy_cate` VALUES ('2', '根茎类', '1', '1,2', '1');
INSERT INTO `gsy_cate` VALUES ('3', '豆制品', '1', '1,3', '1');
INSERT INTO `gsy_cate` VALUES ('4', '叶菜类', '1', '1,4', '1');
INSERT INTO `gsy_cate` VALUES ('5', '菌菇类', '1', '1,5', '1');
INSERT INTO `gsy_cate` VALUES ('6', '豆类', '1', '1,6', '1');
INSERT INTO `gsy_cate` VALUES ('7', '茄果瓜花类', '1', '1,7', '1');
INSERT INTO `gsy_cate` VALUES ('8', '葱姜蒜和香料', '1', '1,8', '1');
INSERT INTO `gsy_cate` VALUES ('9', '冷藏冷冻蔬菜', '1', '1,9', '1');
INSERT INTO `gsy_cate` VALUES ('11', '安全水果', '0', '11', '0');
INSERT INTO `gsy_cate` VALUES ('12', '热带水果', '11', '11,12', '1');
INSERT INTO `gsy_cate` VALUES ('13', '苹果和梨', '11', '11,13', '1');
INSERT INTO `gsy_cate` VALUES ('14', '奇异果', '11', '11,14', '1');
INSERT INTO `gsy_cate` VALUES ('15', '柑橘柚类', '11', '11,15', '1');
INSERT INTO `gsy_cate` VALUES ('16', '葡萄和浆果类', '11', '11,16', '1');
INSERT INTO `gsy_cate` VALUES ('17', '核果类', '11', '11,17', '1');
INSERT INTO `gsy_cate` VALUES ('18', '其他水果', '11', '11,18', '1');
INSERT INTO `gsy_cate` VALUES ('19', '肉禽蛋品', '0', '19', '0');
INSERT INTO `gsy_cate` VALUES ('10', '蔬菜花卉盆栽', '1', '1,10', '1');
INSERT INTO `gsy_cate` VALUES ('20', '蛋类', '19', '19,20', '1');
INSERT INTO `gsy_cate` VALUES ('21', '禽类', '19', '19,21', '1');
INSERT INTO `gsy_cate` VALUES ('22', '牛肉类', '19', '19,22', '1');
INSERT INTO `gsy_cate` VALUES ('23', '猪肉类', '19', '19,23', '1');
INSERT INTO `gsy_cate` VALUES ('24', '肉制品', '19', '19,24', '1');
INSERT INTO `gsy_cate` VALUES ('25', '火腿', '19', '19,25', '1');
INSERT INTO `gsy_cate` VALUES ('26', '乳制品类', '0', '26', '0');
INSERT INTO `gsy_cate` VALUES ('27', '鲜奶', '26', '26,27', '1');
INSERT INTO `gsy_cate` VALUES ('28', '豆浆豆奶', '26', '26,28', '1');
INSERT INTO `gsy_cate` VALUES ('29', '酸奶', '26', '26,29', '1');
INSERT INTO `gsy_cate` VALUES ('30', '奶油黄油', '26', '26,30', '1');
INSERT INTO `gsy_cate` VALUES ('31', '芝士乳酪', '26', '26,31', '1');
INSERT INTO `gsy_cate` VALUES ('32', '冰淇淋和布丁', '26', '26,32', '1');
INSERT INTO `gsy_cate` VALUES ('33', '水中鲜物', '0', '33', '0');
INSERT INTO `gsy_cate` VALUES ('34', '鱼类', '33', '33,34', '1');
INSERT INTO `gsy_cate` VALUES ('35', '蟹贝软体类', '33', '33,35', '1');
INSERT INTO `gsy_cate` VALUES ('36', '虾类', '33', '33,36', '1');
INSERT INTO `gsy_cate` VALUES ('37', '水产制品', '33', '33,37', '1');
INSERT INTO `gsy_cate` VALUES ('38', '海胆', '33', '33,38', '1');
INSERT INTO `gsy_cate` VALUES ('39', '早餐&面点', '0', '39', '0');
INSERT INTO `gsy_cate` VALUES ('40', '中式早餐', '39', '39,40', '1');
INSERT INTO `gsy_cate` VALUES ('41', '西式早餐', '39', '39,41', '1');
INSERT INTO `gsy_cate` VALUES ('42', '特色面点', '39', '39,42', '1');
INSERT INTO `gsy_cate` VALUES ('43', '蛋糕', '39', '39,43', '1');
INSERT INTO `gsy_cate` VALUES ('44', '吃吃零嘴', '0', '44', '0');
INSERT INTO `gsy_cate` VALUES ('45', '坚果和干果', '44', '44,45', '1');
INSERT INTO `gsy_cate` VALUES ('46', '糖果和巧克力', '44', '44,46', '1');
INSERT INTO `gsy_cate` VALUES ('47', '肉干海苔', '44', '44,47', '1');
INSERT INTO `gsy_cate` VALUES ('48', '蔬果干类', '44', '44，48', '1');
INSERT INTO `gsy_cate` VALUES ('49', '蜜饯类', '44', '44,49', '1');
INSERT INTO `gsy_cate` VALUES ('50', '豆干', '44', '44,50', '1');
INSERT INTO `gsy_cate` VALUES ('51', '饮料酒水', '0', '51', '0');
INSERT INTO `gsy_cate` VALUES ('52', '果汁和软饮', '51', '51,52', '1');
INSERT INTO `gsy_cate` VALUES ('53', '风味饮品', '51', '51,53', '1');
INSERT INTO `gsy_cate` VALUES ('54', '葡萄酒', '51', '51,54', '1');
INSERT INTO `gsy_cate` VALUES ('55', '健康醋饮', '51', '51,55', '1');
INSERT INTO `gsy_cate` VALUES ('56', '精酿啤酒', '51', '51,56', '1');
INSERT INTO `gsy_cate` VALUES ('57', '清酒和果酒', '51', '51,57', '1');
INSERT INTO `gsy_cate` VALUES ('58', '咖啡和茶', '51', '51,58', '1');
INSERT INTO `gsy_cate` VALUES ('0', '冲调类', '51', '51,59', '1');
INSERT INTO `gsy_cate` VALUES ('60', '水', '51', '51,60', '1');
INSERT INTO `gsy_cate` VALUES ('61', '粮油酱醋', '0', '61', '0');
INSERT INTO `gsy_cate` VALUES ('62', '米面杂粮', '61', '61,62', '1');
INSERT INTO `gsy_cate` VALUES ('63', '南北干货', '61', '61,63', '1');
INSERT INTO `gsy_cate` VALUES ('64', '酱油和醋', '61', '61,64', '1');
INSERT INTO `gsy_cate` VALUES ('65', '欣和酱醋', '61', '61,65', '1');
INSERT INTO `gsy_cate` VALUES ('66', '食用油', '61', '61,66', '1');
INSERT INTO `gsy_cate` VALUES ('67', '调味品', '61', '61,67', '1');
INSERT INTO `gsy_cate` VALUES ('68', '蜂蜜 果酱', '61', '61,68', '1');
INSERT INTO `gsy_cate` VALUES ('69', '环保生活', '0', '69', '0');
INSERT INTO `gsy_cate` VALUES ('70', '个人洗护', '69', '69,70', '1');
INSERT INTO `gsy_cate` VALUES ('71', '家居清洁', '69', '69,71', '1');
INSERT INTO `gsy_cate` VALUES ('84', '空心菜', '1', '1,84', '1');
INSERT INTO `gsy_cate` VALUES ('89', '小闸蟹', '33', '33,89', '1');

-- ----------------------------
-- Table structure for gsy_code
-- ----------------------------
DROP TABLE IF EXISTS `gsy_code`;
CREATE TABLE `gsy_code` (
  `code_id` int(11) NOT NULL AUTO_INCREMENT,
  `mobile` varchar(255) DEFAULT NULL,
  `register_code` int(11) NOT NULL COMMENT '注册验证码',
  `find_password` int(11) NOT NULL COMMENT '找回密码验证码',
  `register_time` int(11) NOT NULL COMMENT '注册时验证码发送时间',
  `find_password_time` int(11) NOT NULL COMMENT '找回密码时验证码发送时间',
  PRIMARY KEY (`code_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of gsy_code
-- ----------------------------
INSERT INTO `gsy_code` VALUES ('5', '18206021539', '3001', '0', '1506152039', '0');
INSERT INTO `gsy_code` VALUES ('4', '13285979173', '1035', '0', '1506166667', '0');
INSERT INTO `gsy_code` VALUES ('6', '18250731498', '4874', '0', '1506152207', '0');
INSERT INTO `gsy_code` VALUES ('7', '15160317050', '8917', '0', '1506165817', '0');
INSERT INTO `gsy_code` VALUES ('8', '1312345', '9260', '0', '1506170801', '0');
INSERT INTO `gsy_code` VALUES ('9', '13211111112', '9060', '0', '1506170999', '0');

-- ----------------------------
-- Table structure for gsy_goods
-- ----------------------------
DROP TABLE IF EXISTS `gsy_goods`;
CREATE TABLE `gsy_goods` (
  `goods_id` int(20) NOT NULL,
  `goods_name` varchar(50) NOT NULL,
  `sell_price` decimal(2,0) NOT NULL COMMENT '销售价',
  `market_price` decimal(2,0) NOT NULL COMMENT '市场价',
  `maketable` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0-上架，-下架',
  `store` int(10) NOT NULL COMMENT '库存',
  `freez` int(10) NOT NULL COMMENT '冻结库存',
  `create_time` int(10) NOT NULL COMMENT '添加时间',
  `last_time` int(10) NOT NULL COMMENT '最近更新时间',
  `last_modify_id` int(20) NOT NULL COMMENT '最后更新的人',
  `keywords` varchar(200) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `cate_id` int(20) NOT NULL,
  `recycle` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0-不删除，1-删除',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0-没活动，1-新品，2-特惠，3-冰鲜',
  PRIMARY KEY (`goods_id`,`content`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of gsy_goods
-- ----------------------------

-- ----------------------------
-- Table structure for gsy_image
-- ----------------------------
DROP TABLE IF EXISTS `gsy_image`;
CREATE TABLE `gsy_image` (
  `image_id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` int(20) NOT NULL,
  `image_url` varchar(50) NOT NULL,
  `image_b_url` varchar(50) NOT NULL,
  `image_m_url` varchar(50) NOT NULL,
  `image_s_url` varchar(50) NOT NULL,
  `is_face` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0  默认不是封面  1 是',
  PRIMARY KEY (`image_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of gsy_image
-- ----------------------------

-- ----------------------------
-- Table structure for gsy_log
-- ----------------------------
DROP TABLE IF EXISTS `gsy_log`;
CREATE TABLE `gsy_log` (
  `log_id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 是成功  0 是失败',
  `content` varchar(50) NOT NULL COMMENT '生成订单/取消订单',
  PRIMARY KEY (`log_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of gsy_log
-- ----------------------------

-- ----------------------------
-- Table structure for gsy_management
-- ----------------------------
DROP TABLE IF EXISTS `gsy_management`;
CREATE TABLE `gsy_management` (
  `user_id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` char(32) NOT NULL,
  `creat_time` int(10) NOT NULL,
  `lock` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0 是非冻结  1  是冻结  默认是0',
  `ip` varchar(50) NOT NULL,
  `login_time` int(10) NOT NULL,
  `limit` smallint(10) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of gsy_management
-- ----------------------------
INSERT INTO `gsy_management` VALUES ('1', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '1505978304', '0', '', '6', '1');
INSERT INTO `gsy_management` VALUES ('2', 'admin1', 'e10adc3949ba59abbe56e057f20f883e', '1505978351', '1', '', '0', '2');
INSERT INTO `gsy_management` VALUES ('3', 'admin2', 'e10adc3949ba59abbe56e057f20f883e', '1505978618', '0', '', '0', '3');
INSERT INTO `gsy_management` VALUES ('4', 'admin3', 'e10adc3949ba59abbe56e057f20f883e', '1505978630', '0', '', '0', '4');

-- ----------------------------
-- Table structure for gsy_member
-- ----------------------------
DROP TABLE IF EXISTS `gsy_member`;
CREATE TABLE `gsy_member` (
  `member_id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `password` char(32) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `ip` varchar(50) NOT NULL,
  `pic` varchar(200) NOT NULL,
  `lock` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1 是 冻结  0是非冻结   默认为0',
  `login_count` int(50) NOT NULL,
  `login_time` int(10) NOT NULL,
  `last_modify` int(10) NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of gsy_member
-- ----------------------------
INSERT INTO `gsy_member` VALUES ('7', 'd41d8cd98f00b204e9800998ecf8427e', '', '12345', '', '', '/uploads/20170922/da97fe835e4f91b56045bed8d68ed35d.jpg', '2', '0', '0', '0');
INSERT INTO `gsy_member` VALUES ('8', '202cb962ac59075b964b07152d234b70', '', '123', '', '', '/uploads/20170922/840ff02d96ff53dea5323f0fa7d1acd2.jpg', '0', '0', '0', '0');
INSERT INTO `gsy_member` VALUES ('11', 'd41d8cd98f00b204e9800998ecf8427e', '', '1头', '', '', '/uploads/20170922/da97fe835e4f91b56045bed8d68ed35d.jpg', '2', '0', '0', '0');
INSERT INTO `gsy_member` VALUES ('12', 'e332a76c29654fcb7f6e6b31ced090c7', '', '好几款', '', '', '/uploads/20170922/46e1d601fc959346b56db36b0321aa3c.jpg', '0', '0', '0', '0');
INSERT INTO `gsy_member` VALUES ('10', 'c4ca4238a0b923820dcc509a6f75849b', '', '1234567', '', '', '/uploads/20170922/1465bf5577d4e0b5528c27dd0e4e27ce.jpg', '0', '0', '0', '0');
INSERT INTO `gsy_member` VALUES ('13', 'e10adc3949ba59abbe56e057f20f883e', '13211111111', '', '', '127.0.0.1', '/uploads/20170922/da97fe835e4f91b56045bed8d68ed35d.jpg', '0', '0', '1506133879', '0');

-- ----------------------------
-- Table structure for gsy_order
-- ----------------------------
DROP TABLE IF EXISTS `gsy_order`;
CREATE TABLE `gsy_order` (
  `order_id` char(17) NOT NULL COMMENT '订单生成规则：日期170920+时间104722+4位随机数xxxx',
  `total_amount` int(11) DEFAULT NULL COMMENT '订单总价',
  `menber_id` int(11) NOT NULL COMMENT '购物者id',
  `status` tinyint(4) NOT NULL COMMENT '订单状态0->正常 ，1->已取消，2->已完成',
  `pay_status` tinyint(4) NOT NULL COMMENT '支付状态0->未支付,1->已支付',
  `pay_method` varchar(10) NOT NULL COMMENT '货到付款，微信支付，online，支付宝',
  `create_time` int(11) NOT NULL COMMENT '生成订单时间',
  `last_modify` int(11) NOT NULL COMMENT '最近更新时间',
  `ship_name` varchar(20) NOT NULL COMMENT '收货人姓名',
  `ship_mobile` varchar(20) NOT NULL COMMENT '收货人手机号',
  `ship_area` varchar(255) NOT NULL COMMENT '收货人地区',
  `ship_address` varchar(255) NOT NULL COMMENT '收货人详细地址',
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of gsy_order
-- ----------------------------
