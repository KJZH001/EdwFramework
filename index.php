<?php
//载入全局配置初始化
require("./global/global_load.php");

	
//判断是否输出低级报错
if($gb_debug=="false")
{
//关闭notice报错提示
error_reporting(E_ALL^E_NOTICE);
}

//载入全局输出处理
require("./system/core/MianContent.php");

//检测安装
require("./system/install/check.php");

?>