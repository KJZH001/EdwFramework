<?php
//判定数据库
if ($gb_sqlonly=="false") 
{
	$gb_sqlname=$gb_sqlprefix."data";
}
//引入数据库
require("./system/core/conn.php");
//查询数据库
$sql="SELECT * FROM dwz limit ".$id.",1;";
$result=mysqli_query($gb_conn,$sql);
$row=mysqli_fetch_assoc($result);
$url=$row['url'];
if($gb_debug=="true")
{
echo "输出的地址:".$url;
echo "使用的id：".$id;
}
echo "<script type=\"text/javascript\">
setTimeout(\"window.location.href='".$url."'\",3000);</script>";
?>
<h1>稍等一下哦~很快就好 φ(>ω<*) </h1>