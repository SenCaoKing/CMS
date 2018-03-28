<?php
/* 设置出错方式 */
error_reporting(E_ALL & ~E_NOTICE);
/* 设置默认编码 */
header("Content-type: text/html; charset=utf-8");
/* 设置默认时区 */
date_default_timezone_set('Asia/Shanghai');
/* 取得当前网站所在的根目录 */
define('ROOT_PATH', str_replace('include/init.php', '', str_replace('\\', '/', __FILE__)));
/* 引入基本的函数库 */
require_once(ROOT_PATH . 'include/functions.php');
/* 取得当前网站的配置信息 */
require_once(ROOT_PATH . 'include/config.php');
/* 初始化数据库类 */
require_once(ROOT_PATH . 'include/class.db.php');
$db = new DB($db_dsn, $db_user, $db_pass);

$db->exec('SET NAMES utf8');
$db_dsn = $db_user = $db_pass = NULL;

?>