<!DOCTYPE html>
<!--  -->
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>欢迎_EmptyDream World-空梦世界 开发框架</title>
  <link rel="stylesheet" href="../system/theme/MDUI_official_XiaoKong/css/mdui.min.css">
  <style  type="text/css">
   .去超链接下划线
   {
   text-decoration:none;
   }
  </style>
</head>
<!-- 声明主体 -->
<body id="body" class="mdui-appbar-with-toolbar mdui-theme-primary-blue mdui-theme-accent-blue mdui-loaded" style="">
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
	<header class="mdui-appbar mdui-appbar-fixed">
	<!-- 工具栏 -->
    <div class="mdui-toolbar mdui-color-theme-accent">
	
	<!-- 标题自适应 大屏幕 -->
	<div class="mdui-hidden-xs-down">
	<!-- 标题 -->
    <a href="javascript:;" class="mdui-typo-headline 去超链接下划线 mdui-text-color-white">空梦世界-EmptyDream World
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
	<a href="javascript:;" class="mdui-typo-title 去超链接下划线 mdui-text-color-white">安装</a>
	</div>
	
    <!-- 标题自适应 小屏幕 -->
	<div class="mdui-hidden-sm-up">
	<!-- 标题 -->
    <a href="javascript:;" class="mdui-typo-title 去超链接下划线 mdui-text-color-white">空梦框架-安装</a>
	</div>
	
	<!-- 将元素向两边推去 -->
    <div class="mdui-toolbar-spacer"></div>
    </div>
	</header>
	
    <!-- 主界面内容开始 -->
  	<!-- 基础网格 -->
	<div class="mdui-container">
	
		   <!-- 基础网格 -->
		   <div class="mdui-container">
				<div class="mdui-typo">
					<h1>连接数据库&nbsp;&nbsp;<small>这一步用来检测数据库的连接情况</small></h1>
                    <?php
                    //引入数据库
                    $gb_conn=mysqli_connect($gb_servername, $gb_username, $gb_password,$gb_sqlname);
                    if (!$gb_conn) 
                    {
                        printf("发生了一个意外错误，我们似乎无法与数据库建立连接！\n错误代码: %s ", 
                            mysqli_connect_error());
                            echo "<p>请返回上一步检测您的数据库配置信息是否填写正确！</p>";
                    }
                    else
                    {
                        echo "<p>很好！现在数据库似乎已经可以正常的与框架进行连接了</p>
                            <p>接下来我们可以去生成数据库了！</q>";
                    }
                    ?>
					
				</div>
            <br>
            <br>
            <a class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent"
                href="./install_2">←&nbsp;&nbsp;填写配置文件</a>
            &nbsp;&nbsp;
            <!-- 标题自适应 小屏幕 -->
            <div class="mdui-hidden-sm-up">
            <br>
            </div>
            <a class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent"
                href="./install_4">生成数据库&nbsp;&nbsp;→</a>
            <br>
            <br>

		   </div>
		   
		</div>
	   <!-- 主界面内容基础网格结束 -->
    </div>

	<!--  -->
	<!-- 最大基础网格结束 -->
	</div>
	<!-- 最大容器结束 -->
	</div>
	<!-- 页脚 -->
     <script src="../system/theme/MDUI_official_XiaoKong/js/mdui.min.js"></script>
  <!-- 载入js -->
  <!-- <script src="./my/js/snackbar.js"></script> -->
  <!-- <script src="./my/js/search.js"></script> -->
</body>
</html>