<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>简单CMS首页</title>
</head>

<body>
<table border="1" cellpadding="0" width="800">
	<tr>
		<?php foreach($categories as $cat):?><!-- 栏目循环 -->
			<td width="80"><?= $cat['cat_name']?></td>
		<?php endforeach;?>
	</tr>
</table>

<?php foreach($categories as $cat):?><!-- 栏目循环 -->
<div style="float:left; width:380px; margin-right:40px; margin-top:10px;">
	<table width="100%" border="1" cellpadding="3">
		<tr>
			<th><?= $cat['cat_name']?></th>
		</tr>
		<?php foreach(get_articles($cat['cat_id']) as $art):?>
		<tr>
			<td width="80"><?= $art['title']?></td>
		</tr>
		<?php endforeach;?>
	</table>
</div>
<?php endforeach;?>
</body>
</html>