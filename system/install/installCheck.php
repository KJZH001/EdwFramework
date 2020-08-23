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
					<h1>环境检测&nbsp;&nbsp;<small>对于您的服务器环境的一些必要的检查</small></h1>
					<p>在接下来，我们需要对于您的服务器环境的一些必要的检查
					<br>请放心，不论如何，我们都不会阻止您继续安装下去</p>
					<!-- <p></p> -->
				</div>

                <div class="mdui-table-fluid">
                <table class="mdui-table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>检测项目</th>
                        <th>推荐配置</th>
                        <th>当前环境</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>服务器环境</td>
                        <td>Apache</td>
                        <td>
                        <?php echo PHP_SAPI; ?>
                        <button class="mdui-btn mdui-btn-icon" 
                        mdui-tooltip="{content: '帮助', position: 'top'}">
                        <i class="mdui-icon material-icons" mdui-dialog="{target: '#q1'}">
                        help_outline</i>
                        </button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>PHP</td>
                        <td>≥7.0</td>
                        <td>
                        <?php
                            echo PHP_VERSION;
                        ?>
                        </td>
                    </tr>
                    <!--
                    <tr>
                        <td>3</td>
                        <td>MySQL</td>
                        <td>≥5.6.x</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>禁用的函数</td>
                        <td>\</td>
                        <td></td>
                    </tr>-->

                    <tr>
                        <td>3</td>
                        <td>目录权限</td>
                        <td>可读写</td>
                        <td>
                        <?php
                        $myfile = "./global/global.php";
                        if (is_writable ($myfile)) {
                            echo "可读写";
                          } else {
                            echo "发生错误！";
                          }
                        ?>
                        </td>
                    </tr>
                    </tbody>
                </table>
                </div>
            <br>
            <div class="mdui-dialog" id="q1">
            <div class="mdui-dialog-title">服务器环境检测结果的说明</div>
            <div class="mdui-dialog-content">
            若结果为结果为fpm-fcgi，则使用nginx + php-fpm
                    <br>若结果为cgi-fcgi，则使用nginx + fastcgi
                    <br>若结果为apache2handler，则使用apache
                    <br>若结果为cli，则是直接使用终端的php命令解析</div>
            <div class="mdui-dialog-actions">
            <button class="mdui-btn mdui-ripple" mdui-dialog-close>Close</button>
            </div>
            </div>
            <!--
            <div class="mdui-typo">
                <h3>服务器环境检测结果的说明：</h3>
                <p>
                    若结果为结果为fpm-fcgi，则使用nginx + php-fpm
                    <br>若结果为cgi-fcgi，则使用nginx + fastcgi
                    <br>若结果为apache2handler，则使用apache
                    <br>若结果为cli，则直接使用终端的php命令解析
                </p>
            </div>
            -->
            <br>
            <a class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent"
                href="./install_0">←&nbsp;&nbsp;返回上一步</a>
            &nbsp;&nbsp;
            <!-- 标题自适应 小屏幕 -->
            <div class="mdui-hidden-sm-up">
            <br>
            </div>
            <a class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent"
                href="./install_2">生成配置文件&nbsp;&nbsp;→</a>
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