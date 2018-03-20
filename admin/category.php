<?php
require_once('../include/init.php'); // 引入初始文件

if($_GET['act'] == 'list'){ // 显示列表
	$total_num = $db->get_col("SELECT COUNT(1) FROM {$prefix}category"); // 取得栏目总数
	$page_url = '?act=list'; // 分页时需要调用的 url 地址
	$page = intval(trim($_GET['page'])); // 当前页数
	$page = $page ? $page : 1; // 如果没有则为 1
	$page_size = 10; // 每页 10 条记录

	$rows = $db->get_all("SELECT * FROM ($prifix)category ORDER BY sort_order ASC LIMIT ".($page-1)*$page_size.", {$page_size}"); // 得到当前页所包含的数据
	include('category_list.php'); // 引入分页视图模板
} elseif($_GET['act'] == 'edit'){ // 编辑
	$form_act = 'update'; // 表单动作改为 update
	$category = $db -> get_one("SELECT * FROM {$prefix}category WHERE act_id=? ", array($_GET['cat_id'])); // 取得当前编辑的栏目
	include('category_form.php'); // 引入栏目信息视图模板
} elseif($_GET['act'] == 'add'){ // 添加
	$form_act = 'insert'; // 表单动作改为 insert
	include('category_form.php'); // 引入栏目信息视图模板
} elseif($_GET['act'] == 'insert'){ // 数据库插入
	$_POST['add_time'] = date('Y-m-d H:i:s'); // 取得当前时间
	$db->insert($prefix.'category', $_POST); // 插入数据
	sys_msg("添加栏目成功！", '?act=list'); // 系统提示插入数据成功
} elseif($_GET['act'] == 'update'){ // 数据库更新
	$db->update($prefix.'category', $_POST, array('cat_id'=>$_POST['cat_id'])); // 更新记录
	// 系统提示更新数据成功，并返回列表页
	sys_msg("更新栏目成功！", '?act=list');
} elseif($_GET['act'] == 'del'){ // 数据库删除操作
	$db->delete($prefix.'category', 'cat_id', $_REQUEST['cat_id']); // 删除记录
	sys_msg("删除栏目成功！", '?act=list');
}



?>