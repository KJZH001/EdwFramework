<?php
$user=$_REQUEST["edw_user"];
$pwd=$_REQUEST["edw_pwd"];
if($gb_debug=="true")
{
	echo "当前为iapp_login接口<br>";
	echo "输入的账号：".$user."<br>";
	echo "输入的密码：".$pwd."<br>";
}
//判定数据库
if ($gb_sqlonly=="false") 
{
	$gb_sqlname=$gb_sqlprefix."openid";
}
//引入数据库
require("./system/core/conn.php");
//查询数据库
$sql="SELECT id,user,pwd,permission,email,register_time,uuid FROM openid_center WHERE user = '$user' AND 
pwd = '$pwd'";
$result=mysqli_query($gb_conn,$sql);
$row=mysqli_fetch_assoc($result);
//调试输出
if($gb_debug=="true")
{
	echo "连接的的数据库：".$gb_sqlname."<br>";
	echo "数据库中的账号：".$row['user']."<br>";
	echo "数据库中的密码：".$row['pwd']."<br>";
	
}
//登录判定
if ($user == $row['user'] && $pwd == $row['pwd'] && $user != null && $pwd != null) 
{
	//开启session
	session_start(); 
	//创建session
	//写入用户名
	$_SESSION['user'] = $user;
	//写入权限等级
	$_SESSION['permission'] = $row['permission'];
	//写入注册时间
	$_SESSION['register_time'] = $row['register_time'];
	//写入id
	$_SESSION['id'] = $row['id'];
	//写入UUID
	$_SESSION['uuid'] = $row['uuid'];
	//返回提示
	echo "登录成功";
	//结束页面转跳
	$url=$_REQUEST["url"];
	if ($url==null) 
	{
		echo "<script type=\"text/javascript\">
		setTimeout(\"window.location.href='../index.php/Openid_info'\",1000);</script>";
	}
	else 
	{
		echo "<script type=\"text/javascript\">
		setTimeout(\"window.location.href='".$url."'\",1000);</script>";
	}

}
else
{
	echo "登录失败 用户名或密码错误";
	//失败页面转跳
	echo "<script type=\"text/javascript\">
		setTimeout(\"window.location.href='../index.php/Openid'\",1000);</script>";
}




//关闭数据库
mysqli_close($gb_conn);

//$user == $row['user'] && $pwd == $row['pwd']
//http://edw.rcraft.com/api.php?type=get&server=iapp_login&edw_user=test&edw_pwd=test
?>