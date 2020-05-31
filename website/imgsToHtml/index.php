<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <?php
    //本页面为图片转为html的api
	//关闭notice报错提示
	error_reporting(E_ALL^E_NOTICE);
	//输出标题
	$link=$_REQUEST["link"];
	if($link==null)
	{
		echo "<title>不允许直接访问哦~ 基于 空梦框架</title>";
	}
	else
	{
		echo "<title>图片转html - 基于 空梦框架</title>";
	}
  ?>
</head>
<body>
	<?php
	//输出内容
	if($link==null)
	{
		echo "<h1>不允许直接访问哦~</h1>";
	}
	else
	{
		echo "<img src=\"".$link."\"  alt=\"啊啦~图片消失了呢~\" />";
	}

	?>
</body>
</html>