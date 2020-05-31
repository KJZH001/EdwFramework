<!-- 主界面内容开始 -->
<!-- 基础网格 -->
<div class="mdui-container">

	<?php
	$class=$sid;
	//主页
	//index
	if($class=="index")
	{
		require("./system/admin/mian_zhu.php");
	}
	//无赋值
	elseif($class=="error")
	{
		require("./system/admin/mian_zhu.php");
	}
	//网站列表
	elseif($class=="WebList")
	{
		require("./system/admin/index/WebList.php");
	}
	//站点设置
	elseif($class=="WebSet")
	{
		require("./system/admin/index/WebSet.php");
	}
	//站点设置
	elseif($class=="WebAdmin")
	{
		require("./system/admin/index/WebAdmin.php");
	}
	else
    {
        if($gb_debug=="true")
        {
            echo "未找到文件_Admin";
        }
        require("./system/core/404.php");
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

