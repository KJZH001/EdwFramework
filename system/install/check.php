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
	else if($fid=="install")
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
		//载入安装程序
		require("./system/install/welcome.php");
	}
	else
	{
		echo "<script type=\"text/javascript\">
			setTimeout(\"window.location.href='./install_0_0'\",0);</script>";
	}
}
//安装判断结束
?>