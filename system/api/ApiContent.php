<?php
/*
这里是本框架的Api核心内容处理程序
用于判断内容的输出
*/

//获取类型参数
$type=$_REQUEST["type"];

//调试输出		
if($gb_debug=="true")
{
	echo "TYPE参数为".$type."<br>对应类型为:";
}

//开始api类型判断
if($type=="get")
{
	//调试输出		
	if($gb_debug=="true")
	{
		echo "Get类型<br>";
	}
	//载入对应处理
	require("./system/api/Get.php");
}
elseif($type=="post")
{
	//调试输出		
	if($gb_debug=="true")
	{
		echo "Post类型<br>";
	}
	//载入对应处理
	require("./system/api/Post.php");
}
else
{
	require("./system/core/404.php");
}

?>