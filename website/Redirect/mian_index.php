<!-- 主界面内容开始 -->
<!-- 最大化容器 -->
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
			width:296px;
			height:248px;
	">

		<center>
			<!-- 卡片的标题和副标题 -->
			<div class="mdui-card-primary">
			
				<div class="mdui-typo-display-1">Redirecting...</div>
			</div>

			<!-- 卡片的内容 -->
			<div class="mdui-typo">
				<div class="mdui-card-primary-subtitle">页面重定向 - 空梦框架</div>
				<hr/>
			</div>
			<div class="mdui-card-content">
			当前页面需要重定向
			<br>请稍等片刻哦φ(>ω<*) </div>
			<br>
			<br>
			<div class="mdui-progress" style="margin: 4px 0px 0px 0px">
			  <div class="mdui-progress-indeterminate"></div>
			</div>
		</center>
	</div>
	
</div>
<?php
//输出页面转跳
$url=$_REQUEST["url"];
echo "<script type=\"text/javascript\">
setTimeout(\"window.location.href='".$url."'\",3000);</script>";
?>