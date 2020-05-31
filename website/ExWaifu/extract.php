<?php
//生成随机数
$id=rand(1,6)-1;
//判定数据库
if ($gb_sqlonly=="false") 
{
	$gb_sqlname=$gb_sqlprefix."data";
}
//引入数据库
require("./system/core/conn.php");
//查询数据库
$sql="SELECT * FROM ExWaifu limit ".$id.",1;";
$result=mysqli_query($gb_conn,$sql);
$row=mysqli_fetch_assoc($result);
$img=$row['img'];
$name=$row['name'];
if($gb_debug=="true")
{
echo "输出的地址:".$img;
$id1=$id+1;
echo "使用的id：".$id1;
}
echo "<br>";
echo "<div class=\"mdui-typo-title-opacity\">恭喜哦~Master，你抽中了：&nbsp;".$name."&nbsp;呢~</div>";
echo "<br>";
echo "<img class=\"mdui-img-fluid\" src=\"".$img."\"  alt=\"啊啦~图片消失了呢~\" />";
?>
