
<!-- 此处为侧滑的html代码 -->

	<!-- 侧滑 -->
    <div class="mdui-drawer mdui-color-white mdui-appbar-inset mdui-drawer-close 
    mdui-drawer-full-height" id="drawer">

    <text class="mdui-list-item cehua_top_text mdui-color-theme-accent 
    mdui-typo-subheading">&nbsp;晓空iApp手册 For Web</text>

    <!-- 主页按钮 -->
    <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
        <i class="mdui-list-item-icon mdui-icon material-icons">home</i>
        <a href="./xksc" class="mdui-list-item mdui-ripple mdui-color-transparent 
        mdui-text-color-black-text mdui-col-xs-12 mdui-typo-subheading">&nbsp;&nbsp;&nbsp;主页</a>
    </div>
	<!-- 搜索按钮 -->
    <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
        <i class="mdui-list-item-icon mdui-icon material-icons">search</i>
        <a href="./xksc_search" class="mdui-list-item mdui-ripple mdui-color-transparent 
        mdui-text-color-black-text mdui-col-xs-12 mdui-typo-subheading">&nbsp;&nbsp;&nbsp;搜索</a>
    </div>
    <!-- 基础按钮 -->
    <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
        <i class="mdui-list-item-icon mdui-icon material-icons">drafts</i>
        <a href="./xksc_basic" class="mdui-list-item mdui-ripple mdui-color-transparent 
        mdui-text-color-black-text mdui-col-xs-12 mdui-typo-subheading">&nbsp;&nbsp;&nbsp;基础教程</a>
    </div>
    <!-- 实列按钮 -->
    <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
        <i class="mdui-list-item-icon mdui-icon material-icons">book</i>
        <a href="./xksc_course" class="mdui-list-item mdui-ripple mdui-color-transparent 
        mdui-text-color-black-text mdui-col-xs-12 mdui-typo-subheading">&nbsp;&nbsp;&nbsp;实列教程</a>
    </div>
    <!-- 分割线 -->
	<div class="mdui-divider"></div>
    <?php
        //开启session
        session_start(); 
        if ($_SESSION['user']==null)
        {
            //<!-- 登录按钮 -->
            echo "<div class=\"mdui-collapse-item-header mdui-list-item mdui-ripple\">";
                echo "<i class=\"mdui-icon material-icons\">account_circle</i>";
                echo "<a href=\"./Openid?url=.".$gb_globalFile."xksc\" class=\"mdui-list-item 
                mdui-ripple mdui-color-transparent mdui-text-color-black-text mdui-col-xs-12 
                mdui-typo-subheading\">&nbsp;&nbsp;&nbsp;Login</a>";
            echo "</div>";
        }
        else
        {
            //<!-- 个人信息 -->
            echo "<div class=\"mdui-collapse-item-header mdui-list-item mdui-ripple\">";
                echo "<i class=\"mdui-icon material-icons\">account_circle</i>";
                echo "<a href=\"./Openid_info\" class=\"mdui-list-item mdui-ripple mdui-color-transparent 
                mdui-text-color-black-text mdui-col-xs-12 mdui-typo-subheading\">&nbsp;&nbsp;&nbsp;个人信息</a>";
            echo "</div>";
        }
    ?>
    
    <!-- 卡片按钮 -->
    <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
        <i class="mdui-list-item-icon mdui-icon material-icons">open_in_new</i>
        <a href="./xksc_cards" class="mdui-list-item mdui-ripple mdui-color-transparent 
        mdui-text-color-black-text mdui-col-xs-12 mdui-typo-subheading">&nbsp;&nbsp;&nbsp;More</a>
    </div>
	<!-- 关于按钮 -->
    <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
        <i class="mdui-list-item-icon mdui-icon material-icons">message</i>
        <a href="http://blog.rcraft.ml/" class="mdui-list-item mdui-ripple mdui-color-transparent 
        mdui-text-color-black-text mdui-col-xs-12 mdui-typo-subheading">&nbsp;&nbsp;&nbsp;关于</a>
    </div>
	<!--  -->
	<!-- 侧滑结束 -->
  </div>
