<?php
/*
这里是本框架的核心内容处理程序
用于判断内容的输出
*/

//利用server变量 取得PATH_INFO信息
//取得链接信息
if(@$path_info =$_SERVER["PATH_INFO"]){
	
	//调试输出
	if($gb_debug=="true")
	{	
	echo "警告！当前已经启用调试模式-空梦框架<br>";
	echo "页面调试输出：<br>";
	echo "链接参数：".$path_info."<br>";
	}
	else
	{
		//载入全局报错处理
		require("./system/core/error.php");
	}
	
	//调用字符截取 过滤字符
	$path_info=substr($path_info,1);
	require("./system/core/cut_url.php");
	$fid=cut_str($path_info,"_",0);
	$sid=cut_str($path_info,"_",1);
	$tid=cut_str($path_info,"_",2);
	
	//调试输出		
	if($gb_debug=="true")
	{
		echo "fid=".$fid."<br>";
		echo "sid=".$sid."<br>";
		echo "tid=".$tid."<br>";
		
	}

	//多站点域名匹配
	if($gb_domianRedirect=="true")
	{
		$domain=$_SERVER['HTTP_HOST'];
		$server=substr($domain,0,strpos($domain, '.'));
		//调试输出
		if($gb_debug=="true")
		{
			echo "已经启用多站点模式-空梦框架<br>";
			echo "当前域名：".$domain."<br>";
			echo "使用的服务：".$server."<br>";
			echo "理论上的重定向目标：location:http://".$domain.$gb_globalFile.$server."<br>";
		}
		//重定向检测
		if ($fid!=$server) 
		{
			if($gb_debug=="true")
			{
				echo "需要进行多站点重定向，请关闭调试模式生效";
			}
			else 
			{
				header("location:http://".$domain.$gb_globalFile.$server);
			}
		}
		
	}

	//调用指向页
	if($fid=="install")
	{
		if($gb_debug=="true")
		{
			echo "指向安装";
		}
	}
	elseif ($fid=="admin") 
	{
		require("./system/admin/index.php");
	}
	else
	{
		if(file_exists("./website/".$fid."/index.php"))
		{
			require("./website/".$fid."/index.php");
		}
		else
		{
			if($gb_debug=="true")
			{
				echo "未找到文件";
			}
			require("./system/core/404.php");
		}
	}
}
else
{
	if($gb_debug=="true")
	{
		echo "参数错误";
	}
	require("./system/core/404.php");
}
//未指定请求的站点，打开默认的代码位于安装检测中


?>