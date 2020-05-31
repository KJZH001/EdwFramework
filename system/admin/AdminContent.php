<?php
/*
这里是本框架的Admin 核心内容处理程序
用于判断内容的输出
*/

//开启session 
session_start(); 
if ($_SESSION['permission']>=3||$_SESSION['permission']==null)
{
    if($gb_debug=="true")
	{
		echo "权限不足";
	}
	require("./system/core/404.php");
}
else
{
    //调用指向页
    require("./system/admin/index_zhu.php");
}


?>