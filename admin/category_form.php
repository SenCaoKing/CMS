<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>栏目表单</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
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
			<td>栏目名称：</td>
			<td>
				<span id="sprytextfield1">
					<input type="text" name="cat_name" id="cat_name" value="<?= $category['cat_name']?>" />
					<span class="textfieldRequiredMsg">需要提供一个值。</span>
				</span>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td valign="top">排　　序：</td>
			<td>
				<span id="sprytextfield2">
					<input type="text" name="sort_order" id="sort_order" value="<?= $category['sort_order']?>" />
					<span class="textfieldRequiredMsg">需要提供一个值。</span>
					<span class="textfieldInvalidFormatMsg">格式无效。</span>
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
				<input type="hidden" name="cat_id" value="<?= $category['cat_id']?>" />
				<input type="submit" value="提交" />&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="reset" value="重置" />
			</td>
		</tr>
	</table>
</form>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "integer");
</script>

</body>
</html> 