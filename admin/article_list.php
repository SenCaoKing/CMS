<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>文章管理</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td width="50%">
				<form id="form1" name="form1" method="POST" action="?act=search">文章搜索：
					<input type="text" name="title" value="<?= $title?>" />
					<input type="submit" name="" value="搜索" />
				</form>
			</td>
			<td width="50%" align="right">
				<a href="?act=add">添加文章</a>
			</td>
		</tr>
		<tr>
			<td colspan="2">&nbsp;</td>
		</tr>
	</table>

	<form id="form2" name="form2" method="post" action="?act=del">
		<table width="100%" border="1" cellpadding="3">
			<tr>
				<td width="8%" align="center">选择</td>
				<td width="12%" align="center">所属类别</td>
				<td width="50%" align="center">标题</td>
				<td width="18%" align="center">添加时间</td>
				<td width="12%" align="center">操作</td>
			</tr>
			<?php foreach($rows as $row):?><!-- 循环记录 -->
			<tr>
				<td align="center"><input type="checkbox" name="id[]" value="<?= $row['id']?>" /></td>
				<td align="center"><?= $row['cat_name']?></td>
				<td align="center"><?= $row['title']?></td>
				<td align="center"><?= date('Y-m-d H:i:s', $row['add_time'])?></td>
				<td align="center">
					<a href="?act=edit&id=<?= $row['id']?>">编辑</a> | <a href="?act=del&id=<?= $row['id']?>">删除</a>
				</td>
			</tr>
			<?php endforeach;?><!-- 循环记录结束 -->
			
		</table>
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td>&nbsp;</td>
				<td align="right"><?= pager($page, $page_size, $total_num, $page_url)?></td>
			</tr>
			<tr>
				<td><input type="submit" value="删 除" /></td>
				<td>&nbsp;</td>
			</tr>
		</table>
	</form>
</body>
</html> 