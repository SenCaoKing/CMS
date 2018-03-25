<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>后台框架</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<frameset rows="80,*" cols="*" frameborder="yes" border="1" framespacing="0">
	<frame src="top.php" name="topFrame" scrolling="No" noresize="noresize" id="topFrame" title="topFrame" /><!-- 顶部页面 -->
	<frameset cols="180,*" frameborder="yes" border="1" framespacing="0">
		<frame src="menu.php" name="leftFrame" scrolling="No" noresize="noresize" id="leftFrame" title="leftFrame" /><!-- 左边页面 -->
		<frame src="article.php" name="mainFrame" id="mainFrame" title="mainFrame" /><!-- 主页面 -->
	</frameset>
</frameset>
<noframes>
<body>
</body>
</noframes>
</html> 