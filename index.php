<?php
require_once('include/init.php');  															// 引入初始文件

$categories = $db->get_all("SELECT * FROM {$prefix}category ORDER BY sort_order ASC");		// 取得栏目数据

function get_articles($cat_id){																// 取得特定栏目下的文章数据
	global $db, $prefix;
	$articles = $db->get_all("SELECT * FROM {$prefix}article WHERE cat_id = ? ORDER BY add_time DESC LIMIT 10", array($cat_id));
	return $articles;
}

include_once("template/{$template_dir}/index.php");											// 引入首页模板文件
?>