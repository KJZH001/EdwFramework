<!-- 主界面内容开始 -->
<!-- 基础网格 -->
<div class="mdui-container">

	<?php
	$class=$sid;
	if($class=="index")
	{
		require("./website/".$fid."/mian_zhu.php");
	}
	//如果是liuyan，返回转跳liuyan.php
	else if($class=="liuyan")
	{
		require("./website/".$fid."/index/liuyan.php");
	}
	//如果是liuyan，返回转跳liuyan.php
	else if($class=="fankui")
	{
		require("./website/".$fid."/index/fankui.php");
	}
	//如果是webAdmin，返回转跳webAdmin.php
	else if($class=="webAdmin")
	{
		require("./website/".$fid."/webAdmin/webAdminContant.php");
	}
	//如果无赋值，返回index
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

