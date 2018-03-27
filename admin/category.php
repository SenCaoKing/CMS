<?php
require_once('../include/init.php');											// 引入初始文件

if($_GET['act'] == 'list') {													// 显示列表

	$total_num = $db->get_col("SELECT COUNT(1) FROM {$prefix}category");		// 取得栏目总数
	$page_url = '?act=list';													// 分页时需要调用的url地址
	$page = intval(trim($_GET['page']));										// 当前页数
	$page = $page ? $page : 1;													// 如果没有则为1
	$page_size = 10;															// 每页10条记录

	$rows = $db->get_all("SELECT * FROM {$prefix}category ORDER BY sort_order ASC LIMIT ".($page-1)*$page_size.", {$page_size}");																	   // 得到当前页所包含的数据
	// print_r($rows);
	include('category_list.php');												// 引入分页视图模板

} elseif($_GET['act'] == 'edit'){												// 编辑

	$form_act = 'update';														// 表单动作改为update
	// 取得当前编辑的栏目
	$category = $db->get_one("SELECT * FROM {$prefix}category WHERE cat_id = ?", array($_GET['cat_id']));
	include('category_form.php');												// 引入栏目信息视图模板

} elseif($_GET['act'] == 'add') {												// 添加

	$form_act = 'insert';														// 表单动作改为insert
	include('category_form.php');												// 引入栏目信息视图模板

} elseif($_GET['act'] == 'insert') {											// 数据库插入

	$_POST['add_time'] = time();												// 取得当前时间
	$db->insert($prefix.'category', $_POST);									// 插入数据
	sys_msg("添加栏目成功！", '?act=list');

} elseif($_GET['act'] == 'update') {											// 数据库更新

	$db->update($prefix.'category', $_POST, array('cat_id'=>$_POST['cat_id']));	// 更新记录
	sys_msg("更新栏目成功！", '?act=list');										// 系统提示更新数据成功，并返回列表页

} elseif($_GET['act'] == 'del') {												// 数据库删除操作

	$db->delete($prefix.'category', 'cat_id', $_REQUEST['cat_id']);				// 删除记录
	sys_msg("删除栏目成功！", '?act=list');										// 系统提示删除数据成功

}

?>