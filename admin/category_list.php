<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>栏目管理</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td colspan="2">&nbsp;</td>
	</tr>
	<tr>
		<td width="50%">&nbsp;</td>
		<td width="50%" align="right"><a href="?act=add">添加栏目</a></td>
	</tr>
	<tr>
		<td colspan="2">&nbsp;</td>
	</tr>
</table>

<table width="100%" border="1" cellpadding="3">
	<tr>
		<td width="10%" align="center">选择</td>
		<td width="10%" align="center">编号</td>
		<td width="50%" align="center">栏目名称</td>
		<td width="18%" align="center">排序</td>
		<td width="12%" align="center">操作</td>
	</tr>
	<?php foreach($rows as $row):?><!-- 循环记录 -->
	<tr>
		<td align="center"><input type="checkbox" name="cat_id[]" value="<?= $row['cat_id']?>" /></td>
		<td align="center"><?= $row['cat_id']?></td>
		<td align="center"><?= $row['cat_name']?></td>
		<td align="center"><?= $row['sort_order']?></td>
		<td align="center">
			<a href="?act=edit&cat_id=<?= $row['cat_id']?>">编辑</a> | <a href="?act=del&cat_id=<?= $row['cat_id']?>">删除</a>
		</td>
	</tr>
	<?php endforeach;?><!-- 循环记录结束 -->
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td>&nbsp;</td>
		<td align="right"><?= pager($page, $page_size, $total_num, $page_url)?><!---分页函数显示分页 --></td>
	</tr>
	<tr>
		<td><input type="button" name="button" id="button" value="删除" /></td>
		<td>&nbsp;</td>
	</tr>
</table>

</body>
</html>