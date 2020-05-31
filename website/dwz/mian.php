<!-- 主界面内容开始 -->
<!-- 基础网格 -->
<div class="mdui-container">

<?php
//获取从链接中传来的参数
//获取类型
$class=$sid;
//获取id参数
$id=$tid;

//判断类型
//如果是index，返回主页
if($class=="index")
{
	require("./website/".$fid."/mian_zhu.php");
}
//如果是url，返回转跳url.php
else if($class=="url")
{
	require("./website/".$fid."/index/url.php");
}
//如果是post，返回post.php
else if($class=="post")
{
	require("./website/".$fid."/index/post.php");
}
//如果无赋值，返回mian
else
{
	require("./website/".$fid."/mian_zhu.php");
}
?>
	   
	</div>
   <!-- 主界面内容基础网格结束 -->
</div>

<!--  -->
<!-- 最大基础网格结束 -->
</div>
<!-- 最大容器结束 -->
</div>
