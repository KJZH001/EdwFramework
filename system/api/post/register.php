<?php
$user=$_POST["edw_user"];
$pwd=$_POST["edw_pwd"];
$email=$_POST["edw_email"];
if($gb_debug=="true")
{
	echo "当前为标准register接口<br>";
	echo "输入的账号：".$user."<br>";
    echo "输入的密码：".$pwd."<br>";
    echo "输入的邮箱：".$email."<br>";
}
//判定数据库
if ($gb_sqlonly=="false") 
{
	$gb_sqlname=$gb_sqlprefix."openid";
}
//引入数据库
require("./system/core/conn.php");
//查询数据库
$sql="SELECT user FROM openid_center WHERE user = '$user'";
$result=mysqli_query($gb_conn,$sql);
$row=mysqli_fetch_assoc($result);
//调试输出
if($gb_debug=="true")
{
	echo "连接的的数据库：".$gb_sqlname."<br>";
	
}
//检测用户名是否重复
if ($user == $row['user']) 
{ 
	echo "用户名重复，注册失败";
	//结束页面转跳
	$url=$_REQUEST["url"];
	if ($url==null) 
	{
		echo "<script type=\"text/javascript\">
		setTimeout(\"window.location.href='../index.php/Openid'\",1000);</script>";
	}
	else 
	{
		echo "<script type=\"text/javascript\">
		setTimeout(\"window.location.href='".$url."'\",1000);</script>";
	}

}
else
{
    //初始化权限 等级为10
    $permission="10";
    //获取注册时间
    $register_time=date("Y/m/d")." ".date("h:i:sa");
    if($gb_debug=="true")
    {
        echo "注册时间：".$register_time."<br>";
    }
    //插入数据
    $sql="INSERT INTO openid_center(user,pwd,permission,email,register_time) 
          VALUES('$user','$pwd','$permission','$email','$register_time')";
    $result=mysqli_query($gb_conn,$sql);

    echo "注册成功";
    if ($url==null) 
    {
        echo "<script type=\"text/javascript\">
        setTimeout(\"window.location.href='../index.php/Openid'\",1000);</script>";
    }
    else 
    {
        echo "<script type=\"text/javascript\">
        setTimeout(\"window.location.href='".$url."'\",1000);</script>";
    }

	
}




//关闭数据库
mysqli_close($gb_conn);

/*
$user == $row['user'] && $pwd == $row['pwd']
http://edw.rcraft.com/api.php?type=get&
server=iapp_register&edw_user=test1&edw_pwd=test&edw_email=test@test.com
*/

?>