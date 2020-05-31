<!-- 主界面内容开始 -->
<!-- 基础网格 -->
<div class="mdui-container">

	<?php
	$class=$sid;
	if($class=="index")
	{
		require("./website/".$fid."/mian_old.php");
	}
	//如果是extract，返回转跳extract.php
	else if($class=="extract")
	{
		require("./website/".$fid."/extract.php");
	}
	//如果无赋值，返回index
	else
	{
		require("./website/".$fid."/mian_old.php");
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

