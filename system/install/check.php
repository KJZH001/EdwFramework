<?php
if(file_exists("install.lock"))
{
	//未指定网站目录时打开的网站
	
	if($fid==null)
	{
		echo "<script type=\"text/javascript\">
			setTimeout(\"window.location.href='./index.php/Redirect?url=/index.php"
			.$gb_indexFile."'\",0);</script>";
	}
	elseif($fid=="install")
	{
		//载入安装程序
		require("./system/install/locked.php");
	}


//正常执行事件结束
}
else
{
	if($fid=="install"&&$sid=="0")
	{
		//载入安装 欢迎
		require("./system/install/welcome.php");
	}
	elseif($fid=="install"&&$sid=="1")
	{
		//载入安装 检测
		require("./system/install/installCheck.php");
	}
	elseif($fid=="install"&&$sid=="2")
	{
		//载入安装 检测
		require("./system/install/setConfig.php");
	}
	elseif($fid=="install"&&$sid=="3")
	{
		//载入安装 检测
		require("./system/install/connMysql.php");
	}
	else
	{
		echo "<script type=\"text/javascript\">
			setTimeout(\"window.location.href='".$gb_globalFile."install_0'\",0);</script>";
	}
}
//安装判断结束
?>