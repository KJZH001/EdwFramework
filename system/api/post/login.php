<?php
$user=$_POST['edw_user'];
$pwd=$_POST['edw_pwd'];
if($gb_debug=="true")
{
	echo "当前为标准login接口<br>";
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
$sql="SELECT id,user,pwd,permission,email,register_time FROM openid_center WHERE user = '$user' AND 
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
if ($user == $row['user'] && $pwd == $row['pwd'] && $user != null) 
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
	//写入邮箱
	$_SESSION['email'] = $row['email'];
	//返回提示
	echo "登录成功";
    //结束页面转跳
    $url=$_REQUEST["url"];
    if ($url==null) 
    {
        echo "<script type=\"text/javascript\">
        setTimeout(\"window.location.href='../index.php/Openid?info=successful'\",0);</script>";
    }
    else 
    {
        echo "<script type=\"text/javascript\">
        setTimeout(\"window.location.href='".$url."'\",0);</script>";
    }

}
else
{
    echo "登录失败 用户名或密码错误";
    //失败页面转跳
    echo "<script type=\"text/javascript\">
        setTimeout(\"window.location.href='../index.php/Openid?info=error'\",0);</script>";
}




//关闭数据库
mysqli_close($gb_conn);

?>