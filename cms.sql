SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- 数据库: `native_php`
--

CREATE DATABASE IF NOT EXISTS 'native_php' DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
use 'native_php';

-- ----------------------------
-- ----------------------------
-- Table structure for `cms_article`
-- ----------------------------
DROP TABLE IF EXISTS `cms_article`;
CREATE TABLE `cms_article` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `cat_id` tinyint(4) unsigned NOT NULL COMMENT '栏目ID',
  `title` varchar(50) NOT NULL COMMENT '文章标题',
  `content` text COMMENT '文章内容',
  `add_time` int(10) unsigned NOT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`),
  KEY `cat_id` (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COMMENT='文章表';

-- ----------------------------
-- Records of cms_article
-- ----------------------------
INSERT INTO `cms_article` VALUES ('1', '1', '测试标题1', '测试内容1', '1522247341');
INSERT INTO `cms_article` VALUES ('2', '3', '测试标题22', '测试内容22', '1522249086');
INSERT INTO `cms_article` VALUES ('3', '6', '标题3', '内容3', '1522332350');
INSERT INTO `cms_article` VALUES ('4', '7', '标题6', '内容6', '1522332962');
INSERT INTO `cms_article` VALUES ('5', '8', '水电费规划局可', '第三方的规范化个', '1522332975');
INSERT INTO `cms_article` VALUES ('6', '9', '申达股份很好吗', '大V方便把你们', '1522332986');
INSERT INTO `cms_article` VALUES ('7', '10', '的泛海国际', '方便过年回家，', '1522332995');
INSERT INTO `cms_article` VALUES ('8', '11', '工地干活放假', '功能还没那么', '1522333004');
INSERT INTO `cms_article` VALUES ('9', '12', '改版', '不错晕', '1522333012');
INSERT INTO `cms_article` VALUES ('10', '13', '刚放寒假，看', '非常那个号', '1522333022');
INSERT INTO `cms_article` VALUES ('11', '7', '招待费给你们66', '付过款666', '1522333030');

-- ----------------------------
-- Table structure for `cms_category`
-- ----------------------------
DROP TABLE IF EXISTS `cms_category`;
CREATE TABLE `cms_category` (
  `cat_id` tinyint(4) unsigned NOT NULL AUTO_INCREMENT COMMENT '栏目ID',
  `cat_name` varchar(20) NOT NULL COMMENT '栏目名称',
  `sort_order` tinyint(20) NOT NULL COMMENT '栏目排序',
  `add_time` int(10) unsigned NOT NULL COMMENT '添加时间',
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COMMENT='栏目表';

-- ----------------------------
-- Records of cms_category
-- ----------------------------
INSERT INTO `cms_category` VALUES ('1', '测试栏目1', '1', '1522156841');
INSERT INTO `cms_category` VALUES ('3', '测试栏目2', '2', '1522160242');
INSERT INTO `cms_category` VALUES ('13', '测试13', '12', '1522246147');
INSERT INTO `cms_category` VALUES ('5', '测试栏目4', '4', '1522160608');
INSERT INTO `cms_category` VALUES ('6', '测试栏目5', '5', '1522160636');
INSERT INTO `cms_category` VALUES ('7', '测试栏目6', '6', '1522160669');
INSERT INTO `cms_category` VALUES ('8', '测试栏目7', '7', '1522160678');
INSERT INTO `cms_category` VALUES ('9', '测试栏目8', '8', '1522160714');
INSERT INTO `cms_category` VALUES ('10', '测试栏目9', '9', '1522160722');
INSERT INTO `cms_category` VALUES ('11', '测试栏目10', '10', '1522160730');
INSERT INTO `cms_category` VALUES ('12', '测试栏目11', '11', '1522160740');

