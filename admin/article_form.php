<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>文章表单</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form id="form1" name="form1" method="post" action="?act=<?= $form_act?>">
	<table width="100%" border="0" cellpadding="0" cellspacing="0">
		<tr>
			<td width="13%">&nbsp;</td>
			<td width="87%">&nbsp;</td>
		</tr>
		<tr>
			<td>所属栏目：</td>
			<td>
				<span id="spryselect1">
					<select name="cat_id" id="cat_id">
						<option value="">请选择...</option>
						<?php foreach($categories as $category):?>
						<option value="<?= $category['cat_id']?>" <?php if($article['cat_id'] == $category['cat_id']):?>selected="selected"<?php endif;?>>
							<?= $category['cat_name']?>
						</option>
						<?php endforeach;?>
					</select>
					<span class="selectRequiredMsg">请选择一个项目。</span>
				</span>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>文章标题：</td>
			<td>
				<span id="sprytextfield1">
					<input type="text" name="title" id="title" value="<?= $article['title']?>" />
					<span class="textfieldRequiredMsg">需要提供一个值。</span>
				</span>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td valign="top">文章内容：</td>
			<td>
				<span id="sprytextarea1">
					<textarea name="content" cols="60" rows="12" id="content"><?= $article['content']?></textarea>
					<span class="textareaRequiredMsg">需要提供一个值。</span>
				</span>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>
				<input type="hidden" name="id" value="<?= $article['id']?>" />
				<input type="submit" value="提交" />&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="重置" />
			</td>
		</tr>
	</table>
</form>
<script type="text/javascript">
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
</script>
</body>
</html> 