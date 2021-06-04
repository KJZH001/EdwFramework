<?php
$server=$_REQUEST["server"];
@$website=$_REQUEST["website"];
if(file_exists("./system/api/get/".$server.".php"))
{
	require("./system/api/get/".$server.".php");
}
elseif(file_exists("./website/."$website"./api/Main.php"))
{
	if($gb_debug=="true")
	{
		echo "尝试调用网站接口"."./website/."$website"./api/Main.php";
	}
	require("./website/."$website"./api/Main.php");
}
else
{
	if($gb_debug=="true")
	{
		echo "未找到文件";
	}
	require("./system/core/404.php");
}

//http://dj.edw.moeworld.tech/api.php/type=get&website=Schoolia&server=list
?>