<?php
$class=$tid;
	if($class=="post")
	{
		require("./website/".$fid."/webAdmin/post.php");
	}
	//如果是liuyan，返回转跳liuyan.php
	else if($class=="liuyan")
	{
		require("./website/".$fid."/index/liuyan.php");
	}
?>