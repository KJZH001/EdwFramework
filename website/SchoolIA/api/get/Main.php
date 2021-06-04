<?php
//请求的内容
$contant=$_REQUEST["contant"];
//返回值的类型
$return=$_REQUEST["return"];

if($gb_debug=="true")
	{
		echo "请求返回的内容为：".$contant."<br>";
        echo "尝试的请求文件: "."./website/".$website."/api/get/function/".$contant.".php";
	}

if(@file_exists("./website/".$website."/api/get/function/".$contant.".php"))
{
	require("./website/".$website."/api/get/function/".$contant.".php");
}

//http://dj.edw.moeworld.tech/api.php?type=get&website=Schoolia&contant=list-all&return=json
?>