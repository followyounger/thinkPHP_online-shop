<?php
header("content-type:text/html;charset=utf-8");
define('APP_DEBUG', 'true');//开发调试模式
//define('APP_DEBUG', 'false');//生产调试模式
//给系统静态资源文件请求路径设置常量
//前台文件
define('CSS_URL','/shop/Home/Public/css/');
define('IMG_URL','/shop/Home/Public/images/');
define('JS_URL','/shop/Home/Public/js/');
//后台
define('ADMIN_CSS_URL','/shop/Admin/Public/css/');
define('ADMIN_IMG_URL','/shop/Admin/Public/images/');
define('ADMIN_JS_URL','/shop/Admin/Public/js/');

include("../ThinkPHP/ThinkPHP.php");

 ?>