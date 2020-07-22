<!-- 主界面内容开始 -->
<div class="mdui-container" 
	style="
		width:100vw;
		height:100vh;
		display: flex;
		align-items: center; /*定义body的元素垂直居中*/
        justify-content: center; /*定义body的里的元素水平居中*/
">
    
	<div class="mdui-card mdui-center" 
		style="
			width:96vw;
		    height:96vh;
            background-color:rgba(255,255,255,0.8);
	">

		
			<!-- 卡片的标题和副标题 -->
			<div class="mdui-card-primary">
			
				<div class="mdui-typo-display-1">空梦框架 Openid</div>
                <div class="mdui-typo">
                    <div class="mdui-card-primary-subtitle">开放式登录接口</div>
                    <hr/>
                </div>

			</div>

			<!-- 卡片的内容 -->
			<div class="mdui-container">
                <div class="mdui-typo">
					<?php
					//开启session
					session_start(); 
					if ($_SESSION['user']==null)
					{
						echo "<h2 class=\"mdui-m-t-0\">哎呀，大人您好像还木有登录呐~</h2>";
						echo "<button class=\"mdui-btn mdui-ripple mdui-btn-raised mdui-color-white\"
						onclick=\"window.location.href='./Openid'\">前往登录
						</button>";
					}
					else 
					{
						echo "<h2 class=\"mdui-m-t-0\">欢迎您，".$_SESSION['user']."</h2>";
						echo "<p>id：".$_SESSION['id']."</p>";
						echo "<p>权限：".$_SESSION['permission']."</p>";
						echo "<p>Email：".$_SESSION['email']."</p>";
						echo "<p>注册时间：".$_SESSION['register_time']."</p>";
						echo "<p>UUID：".$_SESSION['uuid']."</p>";
						echo "<button class=\"mdui-btn mdui-ripple mdui-btn-raised mdui-color-white\"
						onclick=\"window.location.href='../api.php?type=get&server=loginout'\">退出登录
						</button>";
					}
                    
					?>
                </div>
            </div>
		
	</div>
	
</div>
