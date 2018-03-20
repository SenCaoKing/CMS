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
			<td width="50%" align="right"><a href="?act=add">添加栏目</a></td><!-- 文章列表 -->
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
		<tr>
			<td align="center"><input type="checkbox" name="cat_id[]" value="" /></td>
			<td align="center"></td>
			<td align="center"></td>
			<td align="center"></td>
			<td align="center"><a href="?act=edit">编辑</a><a href="?act=del">删除</a></td>
		</tr>
	</table>

	<table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td>&nbsp;</td>
			<td align="right"></td>
		</tr>
		<tr>
			<td><input type="button" name="button" id="button" value="删除" /></td>
			<td>&nbsp;</td>
		</tr>
	</table>

</body>
</html>