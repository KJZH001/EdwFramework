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
					<h1>填写配置文件&nbsp;&nbsp;<small>这是对于您服务器初始信息的一些配置</small></h1>
					<p>在接下来，我们需要您填写一些必要的初始配置信息
					<br>您无需担心填写错误，因为这在完成安装以后您可以随时修改他们</p>
                    <div class="mdui-divider-inset"></div>
					<!-- <p></p> -->
				</div>

            
            <div class="mdui-typo">
                <h2>数据库配置</h2>
                <p>*您的账户和密码会被保存在/global/glabal.php中</p>
                <p>*这是一个无法在外部直接查看的文件，所以您无需担心您数据库的安全性问题</p>
                <p>*仅支持 Mysql</p>
                <div class="mdui-col-md-6 mdui-col-xs-12">
                <div class="mdui-textfield mdui-textfield-floating-label">
                <label class="mdui-textfield-label">连接地址</label>
                <input class="mdui-textfield-input"/>
                <div class="mdui-textfield-helper">Notice：请包括端口号！</div>
                </div>
                </div>

                <div class="mdui-col-md-6 mdui-col-xs-12">
                <div class="mdui-textfield mdui-textfield-floating-label">
                <label class="mdui-textfield-label">使用的用户名</label>
                <input class="mdui-textfield-input"/>
                </div>
                </div>

                <div class="mdui-col-md-6 mdui-col-xs-12">
                <div class="mdui-textfield mdui-textfield-floating-label">
                <label class="mdui-textfield-label">使用的密码</label>
                <input class="mdui-textfield-input"/>
                </div>
                </div>
                
                <div class="mdui-col-xs-12">
                <br>
                <div class="mdui-divider"></div>
                <h2>站点信息配置</h2>
                <p>*这些信息也会同样被保存在/global/glabal.php中</p>
                <div class="mdui-divider-inset"></div>
                <br>
                <h4>默认的网站标题内容</h4>
                <p>[可选]在某个站点没有设置名称时显示的默认名称</p>
                </div>

                <div class="mdui-col-md-6 mdui-col-xs-12">
                <div class="mdui-textfield mdui-textfield-floating-label">
                <label class="mdui-textfield-label">站点名称</label>
                <input class="mdui-textfield-input"/>
                </div>
                </div>

                <div class="mdui-col-md-6 mdui-col-xs-12">
                <div class="mdui-textfield mdui-textfield-floating-label">
                <label class="mdui-textfield-label">网站的标题</label>
                <input class="mdui-textfield-input"/>
                <!--<div class="mdui-textfield-helper"></div>-->
                </div>
                </div>

                <div class="mdui-col-md-6 mdui-col-xs-12">
                <div class="mdui-textfield mdui-textfield-floating-label">
                <label class="mdui-textfield-label">网站的副标题</label>
                <input class="mdui-textfield-input"/>
                <!--<div class="mdui-textfield-helper"></div>-->
                </div>
                </div>
                
                <div class="mdui-col-md-6 mdui-col-xs-12">
                <div class="mdui-textfield mdui-textfield-floating-label">
                <label class="mdui-textfield-label">为小屏设备使用的网站标题</label>
                <input class="mdui-textfield-input"/>
                <div class="mdui-textfield-helper">[必填]请尽可能缩短长度，参考长度为7个汉字</div>
                </div>
                </div>
                
                <div class="mdui-col-xs-12">
                
                <h3>其他的信息</h3>
                
                </div>

                <div class="mdui-col-md-6 mdui-col-xs-12">
                <div class="mdui-textfield mdui-textfield-floating-label">
                <label class="mdui-textfield-label">您的版权和链接声明</label>
                <input class="mdui-textfield-input"/>
                <div class="mdui-textfield-helper">这会显示在您大多数页面的下方，也请注意尽可能不要太长</div>
                </div>
                </div>
            
            </div>
            
            </div>
            <br>
            <br>
            <a class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent"
                href="./install_1">←&nbsp;&nbsp;环境检测</a>
            &nbsp;&nbsp;
            <a class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent"
                href="./install_3">连接数据库&nbsp;&nbsp;→</a>
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