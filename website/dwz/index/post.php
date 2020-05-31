<?php
$url=$_REQUEST["url"];
if($url=="")
{
	echo "<h1>不能提交空网址呢~</h1>";
}
else
{
	//判定数据库
	if ($gb_sqlonly=="false") 
	{
		$gb_sqlname=$gb_sqlprefix."data";
	}
	//引入数据库
	require("./system/core/conn.php");
	$sql = "INSERT INTO dwz (url)
	VALUES ('".$url."')";
	$result=mysqli_query($gb_conn,$sql);
	//echo $result;
	if ($result == 1) 
	{
		echo "<br>新记录插入成功!";
	
		$sql = "SELECT * FROM dwz ORDER BY id DESC LIMIT 1;";
		$result=mysqli_query($gb_conn,$sql);
		$row=mysqli_fetch_assoc($result);
		$id=$row['id'];
		$id=$id-1;
		echo "<br>您的网址缩短后为：http://".$local_url."/dwz_url_id=".$id;
		echo "<br>此网址具有唯一性，丢失后无法找回，请注意保管！";
	}
	else
	{
		echo "<br>发生了一个错误，缩短失败了呢~";
		echo "<br>如果你是网站管理员，请打开调试模式查看详细错误";
	}
}
?>