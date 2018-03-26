<?php

function sys_msg($msg_detail, $link = '')
{
	echo "<script>alert(\"$msg_detail\");</script>";
	if(empty($link)) {
		echo "<script>history.go(-1);</script>";
	} else {
		echo "<script>location.href= '$link';</script>";
	}
	exit;
}

?>