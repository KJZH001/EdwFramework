
<?php
/*
//载入侧滑
if(file_exists("./website/".$fid."/cehua.php"))
{
    require("./website/".$fid."/cehua.php");
}
else
{
    if($gb_debug=="true")
    {
        echo "未找到侧滑";
    }
    require("./system/theme/MDUI_official_XiaoKong/php/cehua.php");
}
*/
?>
<!-- 声明主体 -->
<body id="body" class="mdui-appbar-with-toolbar mdui-theme-primary-blue mdui-theme-accent-blue 
mdui-loaded mdui-drawer-full-height" style="">
<!--  -->
<!-- 声明颜色 -->
<!-- 声明主色 -->
<div class="mdui-theme-primary-blue">
<!-- 声明突出色 -->
<div class="mdui-theme-accent-blue">
<!--最大容器 -->
  <div class="mdui-container-fluid">
  <!-- 基础网格 -->
    <div class="mdui-row">
	<!-- 应用栏 -->
	<header class="mdui-appbar mdui-appbar-fixed mdui-appbar-inset" id="edw_appbar_box">
	<!-- 工具栏 -->
    <div class="mdui-toolbar mdui-color-theme-accent">
	<!-- 侧滑菜单按钮 -->
    <a href="javascript:;" class="mdui-btn mdui-btn-icon"><i class="mdui-icon material-icons" mdui-drawer="{target: '#drawer'}">menu</i></a>
	
	<!-- 标题自适应 大屏幕 -->
	<div class="mdui-hidden-xs-down">
	
	<?php
	//<!-- 标题 -->
    echo "<a href=\"javascript:;\" class=\"mdui-typo-headline edw-no-linkUnderLine mdui-text-color-white\">".$gb_title.
	"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>";
	//<!-- 副标题 -->
    echo "<a href=\"javascript:;\" class=\"mdui-typo-title edw-no-linkUnderLine mdui-text-color-white\">".$gb_title_2."</a>";
	?>
	
	</div>
	
    <!-- 标题自适应 小屏幕 -->
	<div class="mdui-hidden-sm-up">
	
	<?php
	//<!-- 标题 -->
    echo "<a href=\"javascript:;\" class=\"mdui-typo-title edw-no-linkUnderLine mdui-text-color-white\">".$gb_title_mobile."</a>";
	?>
	
	</div>
	
	<!-- 将元素向两边推去 -->
    <div class="mdui-toolbar-spacer"></div>
	<!-- 右菜单按钮 -->
    <a href="javascript:;" class="mdui-btn mdui-btn-icon" mdui-menu="{target: '#example-attr'}"><i class="mdui-icon material-icons">more_vert</i></a>
    <!-- 菜单 -->	
    <ul class="mdui-menu" id="example-attr">
    <li class="mdui-menu-item">
    <a href="javascript:;" id="选项1">选项1</a>
    </li>
	<li class="mdui-divider"></li>
    <li class="mdui-menu-item" id="选项2">
    <a href="javascript:;">选项2</a>
    </li>
    </ul>
    </div>
	</header>