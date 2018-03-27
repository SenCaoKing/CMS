SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- 数据库: `skccms`
--

CREATE DATABASE IF NOT EXISTS 'skccms' DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
use 'skccms';

-- --------------------------------------------------------
--
-- 栏目表 `cms_category`
--
CREATE TABLE IF NOT EXISTS cms_category (
	cat_id tinyint(4) unsigned not null auto_increment comment '栏目ID',
	cat_name varchar(20) not null comment '栏目名称',
	sort_order tinyint(20) not null comment '栏目排序',
	add_time int(10) unsigned not null comment '添加时间',
	primary key(cat_id)
) engine=Myisam default charset=utf8 comment '栏目表';

-- --------------------------------------------------------
--
-- 文章表 `cms_article`
--
CREATE TABLE IF NOT EXISTS cms_article (
	id int(11) unsigned not null auto_increment comment 'ID', 
	cat_id tinyint(4) unsigned not null comment '栏目ID',
	title varchar(50) not null comment '文章标题',
	content text comment '文章内容',
	add_time int(10) unsigned not null comment '添加时间',
	primary key (id),
	key (cat_id)
) engine=Myisam default charset=utf8 comment '文章表';

-- --------------------------------------------------------
