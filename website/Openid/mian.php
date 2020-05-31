<!-- 主界面内容开始 -->
<!-- 基础网格 -->
<div class="mdui-container-fluid mdui-clearfix" style="
	background: url(
	<?php
	if($gb_cdn=="false")
	{
		echo "../website/".$fid."/res/background.png";
	}
	else
	{
		echo "https://s2.ax1x.com/2020/03/11/8Au38S.jpg";
	}
	?>
	);
	background-repeat:no-repeat;
	background-size:cover
	">

	<?php
	$class=$sid;
	//如果是index，返回转跳index
	if($class=="index")
	{
		require("./website/".$fid."/mian_index.php");
	}
	//如果是info，返回转跳info
	else if($class=="info")
	{
		require("./website/".$fid."/info.php");
	}
	//如果无赋值，返回index
	else
	{
		require("./website/".$fid."/mian_index.php");
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

