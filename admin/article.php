<?php
require_once('../include/init.php');													// 引入初始文件

$categories = $db->get_all("SELECT * FROM {$prefix}category ORDER BY sort_order ASC");  // 提取栏目

if($_GET['act'] == 'list') {														    // 显示文章列表

	$total_num = $db->get_col("SELECT COUNT(1) FROM {$prefix}article");					// 取得文章总数
	$page_url = '?act=list';															// 分页时需要调用的url地址
	$page = intval(trim($_GET['page']));												// 当前页数
	$page = $page ? $page : 1;															// 如果没有则为1
	$page_size = 10;																	// 每页10条记录

	$rows = $db->get_all("SELECT * FROM {$prefix}article AS A LEFT JOIN {$prefix}category AS B ON A.cat_id = B.cat_id ORDER BY A.add_time DESC LIMIT ".($page-1)*$page_size.", {$page_size}");				   // 得到当前页所包含的数据
	// var_dump($rows);
	include('article_list.php');														// 引入分页视图模板

} elseif($_GET['act'] == 'search') {													// 查询

	$title = $_REQUEST['title'];														// 取得查询的标题

	// 取得符合标题的文章总数
	$total_num = $db->get_col("SELECT COUNT(1) FROM {$prefix}article WHERE title like ?", array("%{$title}%"));
	$page_url = '?act=search&title='.$title;											// 分页时需要调用的url地址
	$page = intval(trim($_GET['page']));												// 当前页数
	$page = $page ? $page : 1;															// 如果没有则为1
	$page_size = 10;																	// 每页10条记录

	$rows = $db->get_all("SELECT * FROM {$prefix}article AS A LEFT JOIN {$prefix}category AS B ON A.cat_id = B.cat_id WHERE A.title like ? ORDER BY A.add_time DESC", array("%{$title}%"));
	include('article_list.php');														// 引入分页视图模板

}elseif($_GET['act'] == 'add') {														// 添加

	$form_act = 'insert';																// 表单动作改为insert
	include('article_form.php');														// 引入文章信息视图模板

} elseif($_GET['act'] == 'insert') {													// 数据库插入

	$_POST['add_time'] = time();														// 取得当前时间
	$db->insert($prefix.'article', $_POST);												// 插入数据
	sys_msg("添加文章成功！", '?act=list');												// 系统提示插入数据成功

} elseif($_GET['act'] == 'edit') {														// 编辑

	$form_act = 'update';																// 表单动作改为update
	$article = $db->get_one("SELECT * FROM {$prefix}article WHERE id = ?", array($_GET['id']));
	include('article_form.php');														// 引入文章信息视图模板

} elseif($GET['act'] == 'update') {														// 数据库更新

	$db->update($prefix.'article', $_POST, array('id'=>$_POST['id']));					// 更新记录
	sys_msg("更新文章成功！", '?act=list');												// 系统提示更新数据成功，并返回列表页

} elseif($_GET['act'] == 'del') {														// 数据库删除操作

	$db->delete($prefix.'article', 'id', $_REQUEST['id']);								// 删除记录
	sys_msg("删除文章成功！", '?act=list');												// 系统提示删除数据成功

}

?>